
<h1>Edit University</h1>
<?php
    echo $this->Form->create('University', array('action' => 'edit'));
    echo $this->Form->input('full_name');
	echo $this->Form->input('short_name');
	echo $this->Form->input('location', array('rows' => '2'));
	echo $this->Form->input('location_gps');
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->end('Save University');