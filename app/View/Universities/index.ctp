<h1>Select your University</h1>

<hr>
<br>
<br>

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
            <?php echo $university['University']['full_name']; ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($university); ?>
</table>