<h1>Add Post</h1>
<?php
echo $this->Form->create('Post', array('enctype'=>'multipart/form-data'));
echo $this->Form->input('category_id',array('type'=>'select','options'=>$list,'value'=>$categoryid));

echo $this->Form->input('email');
echo $this->Form->input('user_name');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '4'));
echo $this->Form->file('image');
echo $this->Form->input('location_string');
echo $this->Form->input('location_gps');
echo $this->Form->end('Save Post');
?>