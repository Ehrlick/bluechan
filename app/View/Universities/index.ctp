<h1>Universities</h1>

<table>
    <tr>
        <th>Id</th>
        <th>Full_Name</th>
        <th>Short_Name</th>
        <th>Location</th>
        <th>Location_GPS</th>
        <th>Created_At</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($universities as $university): ?>
    <tr>
        <td><?php echo $university['University']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($university['University']['full_name']; ?>
        </td>
        <td>
            <?php echo $this->Html->link($university['University']['short_name']; ?>
        </td>
        <td>
            <?php echo $this->Html->link($university['University']['location']; ?>
        </td>
        <td>
            <?php echo $this->Html->link($university['University']['location_gps']; ?>
        </td>
        <td><?php echo $university['University']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($university); ?>
</table>