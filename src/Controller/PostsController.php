<?php
namespace App\Controller;

class PostsController extends AppController {

    //public function initialize() : void{
    //    parent::initialize();
    //    $this->viewBuilder()->setLayout('test');

    //}

    public function index(){
        $posts = $this->Posts->find('all');
        //データ表示
        //dd($posts->toArray());

        $this->set(compact('posts'));
    }
    
    public function view($id = null){
        $posts = $this->Posts->get('id');

        $this->set(compact('post'));
    }
}