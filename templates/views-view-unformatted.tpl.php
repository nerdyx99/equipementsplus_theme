<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>

<?php 

	$i=1;


	if(strpos($view->current_display,'page_used_products') !== false) {
		echo '<ul class="medium-block-grid-3">';
	}
	if( $view->current_display == 'block_recently_added_en' ||
		$view->current_display == 'block_recently_added_fr'){
		echo '<ul class="medium-block-grid-4">';
	}
		
?>


<?php foreach ($rows as $id => $row): ?>


	<?php 

		if( strpos($view->current_display,'block_new_products') !== false ||
		    strpos($view->current_display,'block_used_products') !== false ||
		    $view->current_display == 'block_recently_added_full_en' ||
			$view->current_display == 'block_recently_added_full_fr') {

			echo '<div id="productsModal-'. $i .'" class="reveal-modal small products-modal" data-reveal>';
		}


		if(strpos($view->current_display,'page_used_products') !== false) {
			echo '<li>';
		}
			
	?>


  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </div>

  	<?php 
		if(strpos($view->current_display,'page_used_products') !== false) {
			echo '</li>';
		}
		
		if( strpos($view->current_display,'block_new_products') !== false ||
		    strpos($view->current_display,'block_used_products') !== false ||
		    $view->current_display == 'block_recently_added_full_en' ||
			$view->current_display == 'block_recently_added_full_fr') {
				echo '<a class="close-reveal-modal">&#215;</a></div>';
			}

	?>
	<?php $i++; ?>

<?php endforeach; ?>


<?php 
	if( strpos($view->current_display,'page_new_products') !== false ||
		strpos($view->current_display,'page_used_products') !== false ||
		$view->current_display == 'block_recently_added_en' ||
		$view->current_display == 'block_recently_added_fr') {

		echo '</ul>';

	}
		
?>