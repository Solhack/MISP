<div class="news form">
<?php
	echo $this->Form->create('News');
?>
	<fieldset>
		<legend><?php echo __('Add News Item'); ?></legend>
		<?php
			echo $this->Form->input('title', array(
					'type' => 'text',
					'error' => array('escape' => false),
					'div' => 'input clear',
					'class' => 'form-control input-xxlarge'
			));
			?>
				<div class="input clear"></div>
			<?php
			echo $this->Form->input('message', array(
					'type' => 'textarea',
					'error' => array('escape' => false),
					'div' => 'input clear',
					'class' => 'form-control input-xxlarge'
			));
			?>
			<div class="input clear"></div>
			<?php
			echo $this->Form->input('anonymise', array(
						'checked' => false,
						'label' => __('Create anonymously'),
						'class' => 'check-control'
			));
		?>
	</fieldset>
	<?php
		echo $this->Form->button('Submit', array('class' => 'btn btn-primary'));
		echo $this->Form->end();
	?>
</div>
<?php
	echo $this->element('side_menu', array('menuList' => 'news', 'menuItem' => 'add'));
?>
