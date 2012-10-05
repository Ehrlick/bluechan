<h1>Add Category</h1>
<?php
echo $this->Form->create('Category');
echo $this->Form->input('university_id',array('type'=>'select','options'=>$list));
echo $this->Form->input('title');
echo $this->Form->input('description', array('rows' => '4'));
echo $this->Form->end('Save Category');
?>