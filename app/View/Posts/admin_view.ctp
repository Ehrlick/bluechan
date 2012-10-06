
<h1><?php echo h($post['Post']['title']); ?></h1>

<table>
    <tr>
        <th>Body</th>
        <th>Image</th>
    </tr>
    
	<tr>
		<td>
			<?php echo h($post['Post']['body']); ?>
		</td>
		<td>
			<?php echo $this->Html->image($post['Post']['image']['path']); ?>
		</td>
	</tr>    
</table>
