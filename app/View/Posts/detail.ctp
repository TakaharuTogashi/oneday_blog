<h2><?php echo $post['Post']['title']; ?></h2>

<p><?php echo $post['Post']['body']; ?></p>

<p>投稿日：<?php echo $post['Post']['created']; ?></p>
<p>カテゴリ：<?php echo $post['Category']['name']; ?></p>
<p>投稿ユーザ：<?php echo $post['User']['name']; ?></p>

<?php
echo $this->Form->postlink(
    'この記事を削除する',
    array('action'=>'delete',$post['Post']['id']),
    // array('class'=>'btn btn-danger'),
    array(),
    '本当に削除してもよろしいですか？'
);
?>
