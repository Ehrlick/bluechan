
<h1><?php echo h($category['Category']['title']); ?></h1>

<br>
<hr>

<h1>posts</h1>

<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>created</th>
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
			<?php echo h($post['created']); ?>
		</td>
	</tr>
	<?php endforeach; ?>
	<?php unset($category); ?>    
</table>