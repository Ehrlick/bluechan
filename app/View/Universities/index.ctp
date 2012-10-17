<h1>Select your University</h1>

<hr>
<br>
<br>

<style>div{display:inline;}</style>
<div>
<table>
    <tr>
        <th>Id</th>
        <th>Full_Name</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($universities as $university): ?>
    <tr>
        <td><?php echo $university['University']['id']; ?></td>
        <td>
        	<?php echo $this->Html->link($university['University']['full_name'],
				array('controller' => 'universities', 'action' => 'view', $university['University']['id'])); ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($university); ?>
</table></div>

<div>
<table>
    <tr>
        <th>Id</th>
        <th>Full_Name</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($universities as $university): ?>
    <tr>
        <td><?php echo $university['University']['id']; ?></td>
        <td>
        	<?php echo $this->Html->link($university['University']['full_name'],
				array('controller' => 'universities', 'action' => 'view', $university['University']['id'])); ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($university); ?>
</table></div>
