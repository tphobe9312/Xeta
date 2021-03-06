<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

class AcosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    public $fields = [
        'id' => ['type' => 'integer'],
        'parent_id' => ['type' => 'integer'],
        'model' => ['type' => 'string', 'length' => 255],
        'foreign_key' => ['type' => 'integer'],
        'alias' => ['type' => 'string', 'length' => 255],
        'lft' => ['type' => 'integer'],
        'rght' => ['type' => 'integer'],
        '_indexes' => [
            'idx_acos_lft_rght' => ['type' => 'index', 'columns' => ['lft', 'rght']],
            'idx_acos_alias' => ['type' => 'index', 'columns' => ['alias']],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id']],
        ],
        '_options' => [
            'engine' => 'InnoDB', 'collation' => 'utf8_general_ci'
        ],
    ];

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        ['id' => '1', 'parent_id' => null, 'model' => null, 'foreign_key' => null, 'alias' => 'app', 'lft' => '1', 'rght' => '204'],
        ['id' => '2', 'parent_id' => '1', 'model' => null, 'foreign_key' => null, 'alias' => 'Conversations', 'lft' => '2', 'rght' => '35'],
        ['id' => '3', 'parent_id' => '2', 'model' => null, 'foreign_key' => null, 'alias' => 'index', 'lft' => '3', 'rght' => '4'],
        ['id' => '4', 'parent_id' => '2', 'model' => null, 'foreign_key' => null, 'alias' => 'action', 'lft' => '5', 'rght' => '6'],
        ['id' => '5', 'parent_id' => '2', 'model' => null, 'foreign_key' => null, 'alias' => 'create', 'lft' => '7', 'rght' => '8'],
        ['id' => '6', 'parent_id' => '2', 'model' => null, 'foreign_key' => null, 'alias' => 'view', 'lft' => '9', 'rght' => '10'],
        ['id' => '7', 'parent_id' => '2', 'model' => null, 'foreign_key' => null, 'alias' => 'inviteMember', 'lft' => '11', 'rght' => '12'],
        ['id' => '8', 'parent_id' => '2', 'model' => null, 'foreign_key' => null, 'alias' => 'quote', 'lft' => '13', 'rght' => '14'],
        ['id' => '9', 'parent_id' => '2', 'model' => null, 'foreign_key' => null, 'alias' => 'getEditMessage', 'lft' => '15', 'rght' => '16'],
        ['id' => '10', 'parent_id' => '2', 'model' => null, 'foreign_key' => null, 'alias' => 'messageEdit', 'lft' => '17', 'rght' => '18'],
        ['id' => '11', 'parent_id' => '2', 'model' => null, 'foreign_key' => null, 'alias' => 'go', 'lft' => '19', 'rght' => '20'],
        ['id' => '12', 'parent_id' => '2', 'model' => null, 'foreign_key' => null, 'alias' => 'kick', 'lft' => '21', 'rght' => '22'],
        ['id' => '13', 'parent_id' => '2', 'model' => null, 'foreign_key' => null, 'alias' => 'reply', 'lft' => '23', 'rght' => '24'],
        ['id' => '14', 'parent_id' => '2', 'model' => null, 'foreign_key' => null, 'alias' => 'edit', 'lft' => '25', 'rght' => '26'],
        ['id' => '15', 'parent_id' => '2', 'model' => null, 'foreign_key' => null, 'alias' => 'invite', 'lft' => '27', 'rght' => '28'],
        ['id' => '16', 'parent_id' => '2', 'model' => null, 'foreign_key' => null, 'alias' => 'leave', 'lft' => '29', 'rght' => '30'],
        ['id' => '17', 'parent_id' => '2', 'model' => null, 'foreign_key' => null, 'alias' => 'search', 'lft' => '31', 'rght' => '32'],
        ['id' => '18', 'parent_id' => '2', 'model' => null, 'foreign_key' => null, 'alias' => 'maintenance', 'lft' => '33', 'rght' => '34'],
        ['id' => '19', 'parent_id' => '1', 'model' => null, 'foreign_key' => null, 'alias' => 'Pages', 'lft' => '36', 'rght' => '47'],
        ['id' => '20', 'parent_id' => '19', 'model' => null, 'foreign_key' => null, 'alias' => 'home', 'lft' => '37', 'rght' => '38'],
        ['id' => '21', 'parent_id' => '19', 'model' => null, 'foreign_key' => null, 'alias' => 'acceptCookie', 'lft' => '39', 'rght' => '40'],
        ['id' => '22', 'parent_id' => '19', 'model' => null, 'foreign_key' => null, 'alias' => 'lang', 'lft' => '41', 'rght' => '42'],
        ['id' => '23', 'parent_id' => '1', 'model' => null, 'foreign_key' => null, 'alias' => 'Attachments', 'lft' => '48', 'rght' => '51'],
        ['id' => '24', 'parent_id' => '23', 'model' => null, 'foreign_key' => null, 'alias' => 'download', 'lft' => '49', 'rght' => '50'],
        ['id' => '25', 'parent_id' => '1', 'model' => null, 'foreign_key' => null, 'alias' => 'Groups', 'lft' => '52', 'rght' => '55'],
        ['id' => '26', 'parent_id' => '25', 'model' => null, 'foreign_key' => null, 'alias' => 'view', 'lft' => '53', 'rght' => '54'],
        ['id' => '27', 'parent_id' => '1', 'model' => null, 'foreign_key' => null, 'alias' => 'Contact', 'lft' => '56', 'rght' => '59'],
        ['id' => '28', 'parent_id' => '27', 'model' => null, 'foreign_key' => null, 'alias' => 'index', 'lft' => '57', 'rght' => '58'],
        ['id' => '30', 'parent_id' => '1', 'model' => null, 'foreign_key' => null, 'alias' => 'Users', 'lft' => '60', 'rght' => '85'],
        ['id' => '31', 'parent_id' => '30', 'model' => null, 'foreign_key' => null, 'alias' => 'index', 'lft' => '61', 'rght' => '62'],
        ['id' => '32', 'parent_id' => '30', 'model' => null, 'foreign_key' => null, 'alias' => 'login', 'lft' => '63', 'rght' => '64'],
        ['id' => '33', 'parent_id' => '30', 'model' => null, 'foreign_key' => null, 'alias' => 'logout', 'lft' => '65', 'rght' => '66'],
        ['id' => '34', 'parent_id' => '30', 'model' => null, 'foreign_key' => null, 'alias' => 'account', 'lft' => '67', 'rght' => '68'],
        ['id' => '35', 'parent_id' => '30', 'model' => null, 'foreign_key' => null, 'alias' => 'settings', 'lft' => '69', 'rght' => '70'],
        ['id' => '36', 'parent_id' => '30', 'model' => null, 'foreign_key' => null, 'alias' => 'profile', 'lft' => '71', 'rght' => '72'],
        ['id' => '37', 'parent_id' => '30', 'model' => null, 'foreign_key' => null, 'alias' => 'delete', 'lft' => '73', 'rght' => '74'],
        ['id' => '38', 'parent_id' => '30', 'model' => null, 'foreign_key' => null, 'alias' => 'notifications', 'lft' => '75', 'rght' => '76'],
        ['id' => '39', 'parent_id' => '30', 'model' => null, 'foreign_key' => null, 'alias' => 'forgotPassword', 'lft' => '77', 'rght' => '78'],
        ['id' => '40', 'parent_id' => '30', 'model' => null, 'foreign_key' => null, 'alias' => 'resetPassword', 'lft' => '79', 'rght' => '80'],
        ['id' => '42', 'parent_id' => '1', 'model' => null, 'foreign_key' => null, 'alias' => 'Notifications', 'lft' => '86', 'rght' => '89'],
        ['id' => '43', 'parent_id' => '42', 'model' => null, 'foreign_key' => null, 'alias' => 'markAsRead', 'lft' => '87', 'rght' => '88'],
        ['id' => '44', 'parent_id' => '1', 'model' => null, 'foreign_key' => null, 'alias' => 'Blog', 'lft' => '90', 'rght' => '115'],
        ['id' => '45', 'parent_id' => '44', 'model' => null, 'foreign_key' => null, 'alias' => 'index', 'lft' => '91', 'rght' => '92'],
        ['id' => '46', 'parent_id' => '44', 'model' => null, 'foreign_key' => null, 'alias' => 'category', 'lft' => '93', 'rght' => '94'],
        ['id' => '47', 'parent_id' => '44', 'model' => null, 'foreign_key' => null, 'alias' => 'article', 'lft' => '95', 'rght' => '96'],
        ['id' => '48', 'parent_id' => '44', 'model' => null, 'foreign_key' => null, 'alias' => 'quote', 'lft' => '97', 'rght' => '98'],
        ['id' => '49', 'parent_id' => '44', 'model' => null, 'foreign_key' => null, 'alias' => 'go', 'lft' => '99', 'rght' => '100'],
        ['id' => '50', 'parent_id' => '44', 'model' => null, 'foreign_key' => null, 'alias' => 'archive', 'lft' => '101', 'rght' => '102'],
        ['id' => '51', 'parent_id' => '44', 'model' => null, 'foreign_key' => null, 'alias' => 'search', 'lft' => '103', 'rght' => '104'],
        ['id' => '52', 'parent_id' => '44', 'model' => null, 'foreign_key' => null, 'alias' => 'articleLike', 'lft' => '105', 'rght' => '106'],
        ['id' => '53', 'parent_id' => '44', 'model' => null, 'foreign_key' => null, 'alias' => 'articleUnlike', 'lft' => '107', 'rght' => '108'],
        ['id' => '54', 'parent_id' => '44', 'model' => null, 'foreign_key' => null, 'alias' => 'deleteComment', 'lft' => '109', 'rght' => '110'],
        ['id' => '55', 'parent_id' => '44', 'model' => null, 'foreign_key' => null, 'alias' => 'getEditComment', 'lft' => '111', 'rght' => '112'],
        ['id' => '56', 'parent_id' => '44', 'model' => null, 'foreign_key' => null, 'alias' => 'editComment', 'lft' => '113', 'rght' => '114'],
        ['id' => '58', 'parent_id' => '1', 'model' => null, 'foreign_key' => null, 'alias' => 'Admin', 'lft' => '116', 'rght' => '183'],
        ['id' => '59', 'parent_id' => '58', 'model' => null, 'foreign_key' => null, 'alias' => 'Categories', 'lft' => '117', 'rght' => '126'],
        ['id' => '60', 'parent_id' => '59', 'model' => null, 'foreign_key' => null, 'alias' => 'index', 'lft' => '118', 'rght' => '119'],
        ['id' => '61', 'parent_id' => '59', 'model' => null, 'foreign_key' => null, 'alias' => 'add', 'lft' => '120', 'rght' => '121'],
        ['id' => '62', 'parent_id' => '59', 'model' => null, 'foreign_key' => null, 'alias' => 'edit', 'lft' => '122', 'rght' => '123'],
        ['id' => '63', 'parent_id' => '59', 'model' => null, 'foreign_key' => null, 'alias' => 'delete', 'lft' => '124', 'rght' => '125'],
        ['id' => '64', 'parent_id' => '58', 'model' => null, 'foreign_key' => null, 'alias' => 'Attachments', 'lft' => '127', 'rght' => '136'],
        ['id' => '65', 'parent_id' => '64', 'model' => null, 'foreign_key' => null, 'alias' => 'index', 'lft' => '128', 'rght' => '129'],
        ['id' => '66', 'parent_id' => '64', 'model' => null, 'foreign_key' => null, 'alias' => 'add', 'lft' => '130', 'rght' => '131'],
        ['id' => '67', 'parent_id' => '64', 'model' => null, 'foreign_key' => null, 'alias' => 'edit', 'lft' => '132', 'rght' => '133'],
        ['id' => '68', 'parent_id' => '64', 'model' => null, 'foreign_key' => null, 'alias' => 'delete', 'lft' => '134', 'rght' => '135'],
        ['id' => '69', 'parent_id' => '58', 'model' => null, 'foreign_key' => null, 'alias' => 'Groups', 'lft' => '137', 'rght' => '146'],
        ['id' => '70', 'parent_id' => '69', 'model' => null, 'foreign_key' => null, 'alias' => 'index', 'lft' => '138', 'rght' => '139'],
        ['id' => '71', 'parent_id' => '69', 'model' => null, 'foreign_key' => null, 'alias' => 'add', 'lft' => '140', 'rght' => '141'],
        ['id' => '72', 'parent_id' => '69', 'model' => null, 'foreign_key' => null, 'alias' => 'edit', 'lft' => '142', 'rght' => '143'],
        ['id' => '73', 'parent_id' => '69', 'model' => null, 'foreign_key' => null, 'alias' => 'delete', 'lft' => '144', 'rght' => '145'],
        ['id' => '74', 'parent_id' => '58', 'model' => null, 'foreign_key' => null, 'alias' => 'Users', 'lft' => '147', 'rght' => '158'],
        ['id' => '75', 'parent_id' => '74', 'model' => null, 'foreign_key' => null, 'alias' => 'index', 'lft' => '148', 'rght' => '149'],
        ['id' => '76', 'parent_id' => '74', 'model' => null, 'foreign_key' => null, 'alias' => 'search', 'lft' => '150', 'rght' => '151'],
        ['id' => '77', 'parent_id' => '74', 'model' => null, 'foreign_key' => null, 'alias' => 'edit', 'lft' => '152', 'rght' => '153'],
        ['id' => '78', 'parent_id' => '74', 'model' => null, 'foreign_key' => null, 'alias' => 'delete', 'lft' => '154', 'rght' => '155'],
        ['id' => '79', 'parent_id' => '74', 'model' => null, 'foreign_key' => null, 'alias' => 'deleteAvatar', 'lft' => '156', 'rght' => '157'],
        ['id' => '80', 'parent_id' => '58', 'model' => null, 'foreign_key' => null, 'alias' => 'Admin', 'lft' => '159', 'rght' => '162'],
        ['id' => '81', 'parent_id' => '80', 'model' => null, 'foreign_key' => null, 'alias' => 'home', 'lft' => '160', 'rght' => '161'],
        ['id' => '82', 'parent_id' => '58', 'model' => null, 'foreign_key' => null, 'alias' => 'Articles', 'lft' => '163', 'rght' => '172'],
        ['id' => '83', 'parent_id' => '82', 'model' => null, 'foreign_key' => null, 'alias' => 'index', 'lft' => '164', 'rght' => '165'],
        ['id' => '84', 'parent_id' => '82', 'model' => null, 'foreign_key' => null, 'alias' => 'add', 'lft' => '166', 'rght' => '167'],
        ['id' => '85', 'parent_id' => '82', 'model' => null, 'foreign_key' => null, 'alias' => 'edit', 'lft' => '168', 'rght' => '169'],
        ['id' => '86', 'parent_id' => '82', 'model' => null, 'foreign_key' => null, 'alias' => 'delete', 'lft' => '170', 'rght' => '171'],
        ['id' => '87', 'parent_id' => '19', 'model' => '', 'foreign_key' => null, 'alias' => 'terms', 'lft' => '43', 'rght' => '44'],
        ['id' => '88', 'parent_id' => '58', 'model' => '', 'foreign_key' => null, 'alias' => 'Settings', 'lft' => '173', 'rght' => '182'],
        ['id' => '89', 'parent_id' => '88', 'model' => '', 'foreign_key' => null, 'alias' => 'index', 'lft' => '174', 'rght' => '175'],
        ['id' => '90', 'parent_id' => '88', 'model' => '', 'foreign_key' => null, 'alias' => 'create', 'lft' => '176', 'rght' => '177'],
        ['id' => '91', 'parent_id' => '88', 'model' => '', 'foreign_key' => null, 'alias' => 'edit', 'lft' => '178', 'rght' => '179'],
        ['id' => '92', 'parent_id' => '88', 'model' => '', 'foreign_key' => null, 'alias' => 'delete', 'lft' => '180', 'rght' => '181'],
        ['id' => '93', 'parent_id' => '30', 'model' => '', 'foreign_key' => null, 'alias' => 'security', 'lft' => '81', 'rght' => '82'],
        ['id' => '94', 'parent_id' => '1', 'model' => '', 'foreign_key' => null, 'alias' => 'Tfa', 'lft' => '184', 'rght' => '199'],
        ['id' => '95', 'parent_id' => '94', 'model' => '', 'foreign_key' => null, 'alias' => 'index', 'lft' => '185', 'rght' => '186'],
        ['id' => '96', 'parent_id' => '94', 'model' => '', 'foreign_key' => null, 'alias' => 'intro', 'lft' => '187', 'rght' => '188'],
        ['id' => '97', 'parent_id' => '94', 'model' => '', 'foreign_key' => null, 'alias' => 'configure', 'lft' => '189', 'rght' => '190'],
        ['id' => '98', 'parent_id' => '94', 'model' => '', 'foreign_key' => null, 'alias' => 'enable', 'lft' => '191', 'rght' => '192'],
        ['id' => '99', 'parent_id' => '94', 'model' => '', 'foreign_key' => null, 'alias' => 'disable', 'lft' => '193', 'rght' => '194'],
        ['id' => '100', 'parent_id' => '94', 'model' => '', 'foreign_key' => null, 'alias' => 'recoveryCode', 'lft' => '195', 'rght' => '196'],
        ['id' => '101', 'parent_id' => '94', 'model' => '', 'foreign_key' => null, 'alias' => 'generateRecoveryCode', 'lft' => '197', 'rght' => '198'],
        ['id' => '102', 'parent_id' => '30', 'model' => '', 'foreign_key' => null, 'alias' => 'tfa', 'lft' => '83', 'rght' => '84'],
        ['id' => '103', 'parent_id' => '19', 'model' => '', 'foreign_key' => null, 'alias' => 'maintenance', 'lft' => '45', 'rght' => '46'],
        ['id' => '104', 'parent_id' => '1', 'model' => '', 'foreign_key' => null, 'alias' => 'Polls', 'lft' => '200', 'rght' => '203'],
        ['id' => '105', 'parent_id' => '104', 'model' => '', 'foreign_key' => null, 'alias' => 'vote', 'lft' => '201', 'rght' => '202']
    ];
}
