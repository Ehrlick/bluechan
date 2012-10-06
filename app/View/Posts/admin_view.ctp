

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
