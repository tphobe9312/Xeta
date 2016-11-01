<?php
namespace App\Controller;

use App\Event\Badges;
use App\I18n\Language;
use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\I18n\Time;

class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        //$this->loadComponent('Flash');
    }

    /**
     * Components.
     *
     * @var array
     */
    public $components = [
        'Flash',
        'Cookie',
        'Acl.Acl',
        'SessionsActivity',
    /**
     * If you want enable CSRF uncomment this.
     * I recommend to enable it. If i have disable it, it's because
     * CloudFlare have some problem with the header X-CSRF-Token (AJAX Request).
     */
        /*'Csrf' => [
            'secure' => true
        ],*/
        'Auth' => [
            'className' => 'AclAuth',
            'allowedActionsForBanned' => [
                'Pages' => [
                    'home'
                ]
            ],
            'authenticate' => [
                'Form',
                'Xety/Cake3CookieAuth.Cookie'
            ],
            'flash' => [
                'element' => 'error',
                'key' => 'flash',
                'params' => [
                    'class' => 'error'
                ]
            ],
            'authorize' => [
                'Acl.Actions' => [
                    'actionPath' => 'app/'
                ]
            ],
            'loginAction' => [
                'controller' => 'users',
                'action' => 'login',
                'prefix' => false
            ],
            'unauthorizedRedirect' => [
                'controller' => 'pages',
                'action' => 'home',
                'prefix' => false
            ],
            'loginRedirect' => [
                'controller' => 'pages',
                'action' => 'home'
            ],
            'logoutRedirect' => [
                'controller' => 'pages',
                'action' => 'home'
            ],
            'authError' => 'You are not authorized to access that location !'
        ]
    ];

    /**
     * Helpers.
     *
     * @var array
     */
    public $helpers = [
        'Form' => [
            'templates' => 'form-templates'
        ],
        'Paginator' => [
            'templates' => 'paginator-templates'
        ],
        'Acl'
    ];

    /**
     * beforeFilter handle.
     *
     * @param Event $event The beforeFilter event that was fired.
     *
     * @return void
     */
    public function beforeFilter(Event $event)
    {
        //Define the language.
        $language = new Language($this);
        $language->setLanguage();

        //Set trustProxy or get the original visitor IP.
        $this->request->trustProxy = true;

        //Automatically Login.
        if (!$this->Auth->user() && $this->Cookie->read('CookieAuth')) {
            $this->loadModel('Users');

            $user = $this->Auth->identify();
            if ($user && $user['is_deleted'] == false) {
                $this->Auth->setUser($user);

                $user = $this->Users->newEntity($user, ['accessibleFields' => ['id' => true]]);
                $user->isNew(false);

                $user->last_login = new Time();
                $user->last_login_ip = $this->request->clientIp();

                $this->Users->save($user);

                //Event.
                $this->eventManager()->attach(new Badges($this));

                $user = new Event('Model.Users.register', $this, [
                    'user' => $user
                ]);
                $this->eventManager()->dispatch($user);
            } else {
                $this->Cookie->delete('CookieAuth');
            }
        }

        if (isset($this->request->params['prefix'])) {
            $prefix = explode('/', $this->request->params['prefix'])[0];

            switch ($prefix) {
                case 'admin':
                    $this->viewBuilder()->layout('admin');
                    break;
            }
        }

        $allowCookies = $this->Cookie->check('allowCookies');
        $this->set(compact('allowCookies'));

        //JavaScript Notifications.
        if ($this->request->session()->read('Notification') && !empty($this->request->session()->read('Notification'))) {
            $notification = $this->request->session()->read('Notification');
            $this->request->session()->delete('Notification');

            $this->set(compact('notification'));
        }
    }
}
