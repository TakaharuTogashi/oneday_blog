<?php

// Postモデル
class Post extends AppModel {

  public $belongsTo = array(
    'User',
    'Category'
  );

  public $validate = array(
    'user_id' => 'notEmpty',
    'category_id' => 'notEmpty',
    'title' => 'notEmpty',
    'body' => 'notEmpty'
  );
}
