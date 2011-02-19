<table>
		<thead>
			<?php foreach($fields as $field_name => $field_display): ?>
			<th <?php if ($sort_by == $field_name)?>>
				<?php echo anchor("item/user_items/$user_id/$field_name/" .
					(($sort_order == 'asc' && $sort_by == $field_name) ? 'desc' : 'asc') ,
					$field_display); ?>
			</th>
			<?php endforeach; ?>
		</thead>
		
		<tbody>
			<?php foreach($item_data as $item): ?>
			<tr>
				<?php foreach($fields as $field_name => $field_display): ?>
				<td>
					<?php 
					if($field_name == 'title')
					{
						$item_id = $item->id;
						$item_title = $item->title;
						echo anchor("item/view/$item_id",$item_title); 
					}
					else
					{
						if($field_name == 'date_posted')
						{
							echo unix_to_human($item->date_posted);
						}
						else
						{
							echo $item->$field_name; 
						}	
					}		
					?>
				</td>
				<?php endforeach; ?>
			</tr>
			<?php endforeach; ?>			
		</tbody>
	
	
	</table>
	
	<?php if (strlen($pagination)): ?>
	<div>
		Pages: <?php echo $pagination; ?>
	</div>
	<?php endif; ?>