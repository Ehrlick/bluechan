<h1>Universities</h1>

<br>
<br>
<?php echo $this->Html->link('Add University', array('controller' => 'universities', 'action' => 'add')); ?>
<br>
<hr>
<br>
<br>
<table>
    <tr>
        <th>Id</th>
        <th>Full_Name</th>
        <th>Short_Name</th>
        <th>Location</th>
        <th>Location_GPS</th>
        <th>Created_At</th>
        <th>Action</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($universities as $university): ?>
    <tr>
        <td><?php echo $university['University']['id']; ?></td>
        <td>
            <?php echo $university['University']['full_name']; ?>
        </td>
        <td>
            <?php echo $university['University']['short_name']; ?>
        </td>
        <td>
            <?php echo $university['University']['location']; ?>
        </td>
        <td>
            <?php echo $university['University']['location_gps']; ?>
        </td>
        <td><?php echo $university['University']['created']; ?></td>
         <td>
        	<?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $university['University']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $university['University']['id'])); ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($university); ?>
</table>