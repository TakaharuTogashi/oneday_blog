<h2>記事一覧</h2>
<table>
  <tr>
    <th>ID</th>
    <th>タイトル</th>
    <th>作成日</th>
  </tr>
<?php foreach ($posts as $post): ?>
  <tr>
    <td><?php echo $post['Post']['id']; ?></td>
    <td><?php echo $post['Post']['title']; ?></td>
    <td><?php echo $post['Post']['created']; ?></td>
    <td><?php echo $this->Html->link($post['Post']['title'],array('action'=>'detail',$post['Post']['id']));?></td>
  </tr>
<?php endforeach; ?>
</table>
