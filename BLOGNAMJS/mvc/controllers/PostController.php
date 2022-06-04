<?php
    require('models/Post.php');
    require('models/Category.php');
    require('models/User.php');
    require('controllers/AdminController.php');

    class PostController extends AdminController{
        protected $model;

        public function __construct()
        {
            parent::__construct();
            $this->model = new Post();
        }
        public function index(){
            $posts = $this->model->select();
            $this->view("posts/list.php",['posts'=>$posts]);
        }
        public function create(){
            $model = new Category();
            $modelUser = new User();
            $categories = $model->select();
            $users = $modelUser->select();
            require_once ('views/posts/create.php');
        }
        public function store(){
            $data = $_POST;
            $data['avatar'] = $this->uploadFile('avatar', '../images', array('jpg','jpeg','png','gif'),100,true)[1];
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $data['created_at'] = date('Y-m-d H:i:s');
            $this->model->insert($data);
            header("Location: index.php?mod=post&action=index");
        }
        public function edit(){
            $modelCate = new Category();
            $modelUser = new User();
            $categories = $modelCate->select();
            $users = $modelUser->select();
            $id = $_GET['id'];
            $posts = $this->model->getPostById($id);
            require_once "views/posts/edit.php";
        }
        public function update(){
            $data = $_POST;
            $data['avatar'] = $this->uploadFile('avatar', '../images', array('jpg','jpeg','png','gif'),100,true);
            if($data['avatar'][0]==true){
                $data['avatar'] = $data['avatar'][1];
            }
            else{
                unset($data['avatar']);
            }
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $data['updated_at'] = date('Y-m-d H:i:s');
            $id = $data['id'];
            unset($data['id']);
        
             $result = $this->model->update($data,['id'=>$id]);

            if ($result) {
                setcookie('msg', 'Updated successful!', time() + 5);
                header("Location: index.php?mod=post&action=index");
            } 
            else {
                setcookie('error', 'Something went wrong!', time() + 5);
                header('Location: index.php?mod=post&action=edit&id=' . $id);
            }
        }
        public function delete(){
            $id = $_GET['id'];
            $result = $this->model->delete($id);
            if ($result) {
                setcookie('msg', 'Deleted successful!', time() + 2);
            } else {
                setcookie('error', 'Something went wrong!', time() + 2);
            }
            header("Location: index.php?mod=post&action=index");

        }
    }
?>