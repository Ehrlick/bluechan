<h1>Add University</h1>
<?php
echo $this->Form->create('University');
echo $this->Form->input('full_name');
echo $this->Form->input('short_name');
echo $this->Form->input('location', array('rows' => '1'));
echo $this->Form->input('location_gps');
echo $this->Form->end('Save University');
?>