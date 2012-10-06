
<h1><?php echo h($post['Post']['title']); ?></h1>

<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Body</th>
        <th>Image</th>
    </tr>
    
	<tr>
		<td>
			<?php echo h($post['Post']['id']); ?>
		</td>
		<td>
			<?php echo $this->Html->link($post['Post']['title'],
				array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
		</td>
		<td>
			<?php echo h($post['Post']['body']); ?>
		</td>
		<td>
			<?php echo $this->Html->image($post['Post']['image']['path']); ?>
		</td>
	</tr>    
</table>
