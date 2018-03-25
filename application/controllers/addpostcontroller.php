<?php

class AddPostController extends Controller{

	public $postObject;
	protected $access = 1;

	public function defaultTask(){

		$this->postObject = new Post();
		$this->categories = new Category();
		$this->set('task', 'add');

	}

	public function add(){
            $this->set('currentAction','add');

			$this->postObject = new Post();
            $this->categories = new Category();
            $categories =  $this->categories->getAllCategories();

            $this->set('categories', $categories);

        $data = array('title'=>$_POST['post_title'],'content'=>$_POST['post_content'], 'date'=>$_POST['date'],'categoryID'=>$_POST['categoryID']);

        $result = $this->postObject->addPost($data);

			$this->set('message', $result);

	}

	public function edit($pID){

	        $this->set('currentAction','edit');

			$this->postObject = new Post();
            $this->categories = new Category();

			$post = $this->postObject->getPost($pID);
			$currentCategory = $this->categories->getCategory($post["categoryID"]);
			$categories =  $this->categories->getAllCategories();

			$this->set('pID', $post['pID']);
			$this->set('title', $post['title']);
			$this->set('content', $post['content']);
            $this->set('date', $post['date']);
            $this->set('currentCategory', $currentCategory);
            $this->set('categories', $categories);


			$this->set('task', 'update');

	}

	public function update(){
        $this->set('currentAction','update');

        $this->postObject = new Post();
        $data = array('title'=>$_POST['post_title'],'content'=>$_POST['post_content'], 'date'=>$_POST['post_date'],'categoryID'=>$_POST['categoryID'], 'pID'=>$_POST['pID']);

        $result = $this->postObject->updatePost($data);
        $this->set('message', $result);

        $this->set('task', 'edit',$_POST['pID'] );
    }

}
