<h2>記事追加</h2>

<?php echo $this->Form->create('Post'); ?>
<?php echo $this->Form->input('Post.title'); ?>
<?php echo $this->Form->input('Post.category_id',array('type'=>'select','options'=>$categories)); ?>
<?php echo $this->Form->input('Post.users_id',array('type'=>'select','options'=>$users)); ?>
<?php echo $this->Form->input('Post.body'); ?>
<?php echo $this->Form->submit('投稿'); ?>
