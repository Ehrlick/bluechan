
<h1><?php echo h($category['Category']['title']); ?> - POSTS</h1>

<br>
<hr>

<?php echo $this->Html->link(__('Add Post'), array('controller' => 'posts', 'action' => 'add', 'categoryid' => $category['Category']['id'])); ?>

<table>
    <tr>
        <th>Id</th>
        <th>User_Name</th>
        <th>Title</th>
        <th>created</th>
    </tr>
    
	<?php foreach ($category['Post'] as $post): ?>
	<tr>
		<td>
			<?php echo h($post['id']); ?>
		</td>
		<td>
			<?php echo h($post['user_name']); ?>
		</td>
		<td>
			<?php echo $this->Html->link($post['title'],
				array('controller' => 'posts', 'action' => 'view', $post['id'])); ?>
		</td>
		<td>
			<?php echo h($post['created']); ?>
		</td>
	</tr>
	<?php endforeach; ?>
	<?php unset($category); ?>    
</table>