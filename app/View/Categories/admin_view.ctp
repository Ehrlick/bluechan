
<h1><?php echo h($category['Category']['title']); ?> - POSTS</h1>

<br>
<hr>

<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Body</th>
        <th>Image</th>
        <th>location_string</th>
        <th>location_gps</th>
        <th>created</th>
        <th>Action</th>
    </tr>
    
	<?php foreach ($category['Post'] as $post): ?>
	<tr>
		<td>
			<?php echo h($post['id']); ?>
		</td>
		<td>
			<?php echo $this->Html->link($post['title'],
				array('controller' => 'posts', 'action' => 'view', $post['id'])); ?>
		</td>
		<td>
			<?php echo h($post['body']); ?>
		</td>
		<td>
			<?php echo h($post['image']); ?>
		</td>
		<td>
			<?php echo h($post['location_string']); ?>
		</td>
		<td>
			<?php echo h($post['location_gps']); ?>
		</td>
		<td>
			<?php echo h($post['created']); ?>
		</td>
		<td>
        	<?php echo $this->Form->postLink(
                'Delete',
                array('controller' => 'posts', 'action' => 'delete', $post['id']),
                array('confirm' => 'Are you sure?'));
            ?>
        </td>
	</tr>
	<?php endforeach; ?>
	<?php unset($category); ?>    
</table>