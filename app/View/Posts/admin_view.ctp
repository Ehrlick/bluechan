

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

<br>
<br>
<br>

<hr>
<h1>REPLIES...</h1>
<?php echo $this->Html->link(__('Add Reply'), array('controller' => 'replies', 'action' => 'add', 'postid' => $post['Post']['id'])); ?>
<table>
    <tr>
        <th>User_Name</th>
        <th>Text</th>
        <th>created</th>
        <th>action</th>
    </tr>
    
	<?php foreach ($post['Reply'] as $reply): ?>
	<tr>
		<td>
			<?php echo h($reply['user_name']); ?>
		</td>
		<td>
			<?php echo h($reply['body']); ?>
		</td>
		<td>
			<?php echo h($reply['created']); ?>
		</td>
		<td>
        	<?php echo $this->Form->postLink(
                'Delete',
                array('controller' => 'replies', 'action' => 'delete', $reply['id']),
                array('confirm' => 'Are you sure?'));
            ?>
        </td>
	</tr>
	<?php endforeach; ?>
	<?php unset($reply); ?>    
</table>
