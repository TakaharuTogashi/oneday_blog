<?php

class PostsController extends AppController {

  public $uses = array('Post','User','Category');

  // 記事一覧ページ
  public function index() {

    // 投稿記事を全て取り出す
    $posts = $this->Post->find('all');
    $this->set('posts',$posts);
  }
  // 記事詳細ページ
  public function detail() {
    $post_id = $this->request->pass[0];
    $post = $this->Post->findById($post_id);
    $this->set('post',$post);
  }
  // 記事追加ページ
  public function add() {

    if ($this->request->is('post')) {
        $post = $this->request->data;
        $post['Post']['user_id'] = 1;
        $post['post']['category'] = 1;
        $this->Post->save($post);
        $this->Session->setFlash('Success!');
        $this->redirect(array('action'=>'index'));
    }
    $users = $this->User->find('list');
    $categories = $this->Category->find('list');
    $this->set('users',$users);
    $this->set('categories',$categories);
  }
  // 記事削除ページ
  public function delete() {

    $post_id = $this->request->pass[0];

    if ($this->request->is('post')) {
        $this->Post->delete($post_id);
        $this->Session->setFlash('Deleted successfully.');
        $this->redirect(array('action'=>'index'));
    } else { // 不正なアクセス
        $this->redirect('/');
    }
  }
  public $validate = array(
    'user_id' => 'notEmpty',
    'category_id' => 'notEmpty',
    'title' => 'notEmpty',
    'body' => 'notEmpty'
  );


}
