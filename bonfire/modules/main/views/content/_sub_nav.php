<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/content/main') ?>" id="list"><?php echo lang('main_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Main.Content.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/content/main/create') ?>" id="create_new"><?php echo lang('main_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>