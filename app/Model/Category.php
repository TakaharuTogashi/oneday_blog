<?php

class Category extends AppModel {

  public $hasMany = array('Post');
  public $recursive = 2;
}
