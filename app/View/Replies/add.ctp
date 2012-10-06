<h1>Add Reply</h1>
<?php
echo $this->Form->create('Reply'));
echo $this->Form->input('post_id',array('type'=>'select','options'=>$list,'value'=>$postid));

echo $this->Form->input('email');
echo $this->Form->input('user_name');
echo $this->Form->input('body', array('rows' => '4'));
echo $this->Form->end('Save Reply');
?>