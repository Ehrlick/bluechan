

<big><?php echo h($post['Post']['title']); ?></big>

<hr>
<br>
<h1><?php echo h($post['Post']['user_name']); ?>さん </h1>
<h1>BZ-EMAIL : <?php echo h($post['Post']['email']); ?> </h1>

<table>
    <tr>
         <th>一言</th>
        　<th>画像</th>
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

<hr>
<h1>REPLIES...</h1>
<table>
    <tr>
        <th>User_Name</th>
        <th>Text</th>
        <th>created</th>
    </tr>
    
	<?php foreach ($post['Reply'] as $reply): ?>
	<tr>
		<td>
			<?php echo h($reply['user_name']); ?>
		</td>
		<td>
			<?php echo h($reply['text']); ?>
		</td>
		<td>
			<?php echo h($reply['created']); ?>
		</td>
	</tr>
	<?php endforeach; ?>
	<?php unset($reply); ?>    
</table>
