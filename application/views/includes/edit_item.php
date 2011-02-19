<div>
<div><?php echo validation_errors(); ?></div>

	<h1>Edit an Item</h1>
	<p>Please please read our <?php echo anchor('site/rules_page', 'rules'); ?> before posting an Item.</p>
	
	    <?php
  		echo form_open("item/update");
	    ?>
	
		<p>
      		<label for="item_title">Item Title:</label>
      		<?php echo form_input($item_title);?>
     		 </p>
		
		<p>
      		<label for="item_status">Status</label>
      		<?php echo form_dropdown('item_status',$item_status_option, $selected_item_status);?>
     		 </p>
		
		<p>
      		<label for="item_condition">Status</label>
      		<?php echo form_dropdown('item_condition',$item_condition_option, $selected_item_condition);?>
     		 </p>
		
		<p>
      		<label for="item_category">Category:</label>
      		<?php echo form_dropdown('item_category',$item_category_option, $selected_item_category);?>
     		 </p>
		
		<p>
      		<label for="item_price">Price:</label>
      		<?php echo form_input($item_price);?>
     		 </p>
		
		<p>
      		<label for="item_description">Description:</label>
      		<?php echo form_textarea($item_description);?>
     		 </p>
				
		<?php echo form_hidden('item_id', $item_id)?>
		
		 <p><?php echo form_submit('submit', 'Edit');?></p>
	<br>
	<a href="#" onclick="history.go(-1); return false;">Back</a>
</div>