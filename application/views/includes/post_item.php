<div>
<div><?php echo validation_errors(); ?></div>

	<h1>Post an Item</h1>
	<p>Please please read our <?php echo anchor('site/rules_page', 'rules'); ?> before posting an Item.</p>
	
	    <?php
  		$attributes = array('class' => '', 'id' => 'itemPostingForm', 'name' => 'itemPostingForm');
  		echo form_open("item/add", $attributes );
	    ?>
	
		<p>
      		<label for="item_title">Item Title:</label>
      		<?php echo form_input($item_title);?>
     		 </p>
		
		<p>
      		<label for="item_status">Status</label>
      		<?php echo form_dropdown('item_status',$item_status_option, 'For sale');?>
     		 </p>
		
		<p>
      		<label for="item_condition">Status</label>
      		<?php echo form_dropdown('item_condition',$item_condition_option, 'Brand new');?>
     		 </p>
		
		<p>
      		<label for="item_category">Category:</label>
      		<?php echo form_dropdown('item_category',$item_category_option, 'NULL');?>
     		 </p>
		
		<p>
      		<label for="item_price">Price:</label>
      		<?php echo form_input($item_price);?>
     		 </p>
		
		<p>
      		<label for="item_description">Description:</label>
      		<?php echo form_textarea($item_description);?>
     		 </p>
		
		
		 <p><?php echo form_submit('submit', 'Post Item');?></p>
	<br>
	 <a href="#" onclick="history.go(-1); return false;">Back</a>
</div>