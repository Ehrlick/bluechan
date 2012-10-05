
<h1><?php echo h($university['University']['full_name']); ?></h1>

<br>
<hr>

<p><small>Created: <?php echo $university['University']['created']; ?></small></p>

<p><?php echo h($university['University']['location']); ?></p>
<br>
<p><?php echo h($university['University']['location_gps']); ?></p>

<br>
<hr>
<br>

<?php echo $this->Html->link('Add Category', array('controller' => 'categories', 'action' => 'add')); ?>

<h1>categories</h1>

<?php foreach($university['Category'] as $category) ?>
<?php echo h($category['title']); ?>
<br>
<?php endforeach; ?>