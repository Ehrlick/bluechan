
<h1><?php echo h($university['University']['full_name']); ?> - categories</h1>

<br>
<hr>

<p><small>Created: <?php echo $university['University']['created']; ?></small></p>
<p><?php //echo h($university['University']['location']); ?></p>
<p><?php //echo h($university['University']['location_gps']); ?></p>


<?php //echo $this->Html->link('Add Category', array('controller' => 'categories', 'action' => 'add')); ?>

<?php echo $this->Html->link(__('Add Category'), array('controller' => 'categories', 'action' => 'add', 'universityid' => $university['University']['id'])); ?>

<br>
<br>

<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Description</th>
        <th>Action</th>
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
		<td>
        	<?php echo $this->Form->postLink(
                'Delete',
                array('controller' => 'categories', 'action' => 'delete', $category['id']),
                array('confirm' => 'Are you sure?'));
            ?>
        </td>
	</tr>
	<?php endforeach; ?>
	<?php unset($category); ?>    
</table>