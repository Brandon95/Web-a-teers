		
		<!-- Main Menu -->
		
			<?php if ($main_menu): ?>
				<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu'))); ?>
			<?php endif; ?>

			
		<!-- Header -->
		
		    <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="logo1"/>
                </a>
             <?php endif; ?>
		   
			<?php print render($page['header']); ?>
	

		<!-- Content -->
		    
			<?php print render($page['content']); ?>
		
		<!-- Footer -->
		   
			<?php print render($page['footer']); ?>


	