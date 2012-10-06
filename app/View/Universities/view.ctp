
<h1><?php echo h($university['University']['full_name']); ?> - categories </h1>

<br>
<hr>

<p><small>Created: <?php echo $university['University']['created']; ?></small></p>

<p><?php //echo h($university['University']['location']); ?></p>
<p><?php //echo h($university['University']['location_gps']); ?></p>

<br>
<hr>

<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Description</th>
    </tr>
    
	<?php foreach ($university['Category'] as $category): ?>
	<tr>
		<td>
			<?php echo h($category['id']); ?>
		</td>
		<td>
			<?php echo $this->Html->link($category['title'],
				array('controller' => 'categories', 'action' => 'view', $category['id'])); ?>
		</td>
		<td>
			<?php echo h($category['description']); ?>
		</td>
	</tr>
	<?php endforeach; ?>
	<?php unset($category); ?>    
</table>

