<h1>Add University</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('full_name');
echo $this->Form->input('short_name');
echo $this->Form->input('location', array('rows' => '2'));
echo $this->Form->input('location_gps');
echo $this->Form->end('Save University');
?>