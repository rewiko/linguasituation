<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/reports/main') ?>" id="list"><?php echo lang('main_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Main.Reports.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/reports/main/create') ?>" id="create_new"><?php echo lang('main_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>