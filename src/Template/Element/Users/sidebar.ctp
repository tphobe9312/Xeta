<div class="account-sidebar">
	<ul class="nav nav-pills nav-stacked">
		<?php if($this->request->params['action'] == 'account'): ?>
			<li class="active">
		<?php else:?>
			<li>
		<?php endif;?>
			<?= $this->html->link(__("{0} Account {1}", '<i class="fa fa-user"></i>', '<i class="fa fa-chevron-right"></i>'), ['action' => 'account'], ['escape' => false]) ?>
		</li>

		<?php if($this->request->params['action'] == 'settings'): ?>
			<li class="active">
		<?php else:?>
			<li>
		<?php endif;?>
			<?= $this->html->link(__("{0} Settings {1}", '<i class="fa fa-cogs"></i>', '<i class="fa fa-chevron-right"></i>'), ['action' => 'settings'], ['escape' => false]) ?>
		</li>
	</ul>
</div>
