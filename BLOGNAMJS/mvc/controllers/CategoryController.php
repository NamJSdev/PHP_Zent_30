<?php
    require('models/Category.php');
    require('controllers/AdminController.php');
    class CategoryController extends AdminController{
        protected $model;

        public function __construct()
        {
            parent::__construct();
            $this->model = new Category();
        }
        public function index(){
            $categories = $this->model->select();
            $this->view("categories/list.php",['categories'=>$categories]);
        }
        public function create(){
            require_once ('views/categories/create.php');
        }
        public function store(){
            $data = $_POST;
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $data['slug'] = $this->createSlug($data['cate_name']);
            $data['avatar'] = $this->uploadFile('avatar', '../images', array('jpg','jpeg','png','gif'),100,true)[1];
            $data['created_at'] = date('Y-m-d H:i:s');
            $this->model->insert($data);
            header("Location: index.php?mod=category&action=index");
        }
        public function edit(){
            $id = $_GET['id'];
            $category = $this->model->getCatById($id);
            require_once "views/categories/edit.php";
        }
        
        public function update(){
            $data = $_POST;
            
            $data['slug'] = $this->createSlug($data['cate_name']);
            $data['avatar'] = $this->uploadFile('avatar', '../images', array('jpg','jpeg','png','gif'),100,true);
            if($data['avatar'][0]==true){
                $data['avatar'] = $data['avatar'][1];
            }
            else{
                unset($data['avatar']);
            }
            $id = $data['id'];
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $data['created_at'] = date('Y-m-d H:i:s');
            unset($data['id']);
             $result = $this->model->update($data,['id'=>$id]);

            if ($result) {
                setcookie('msg', 'Updated successful!', time() + 5);
                header("Location: index.php?mod=category&action=index");
            } else {
                setcookie('error', 'Something went wrong!', time() + 5);
                header('Location: index.php?mod=category&action=edit&id=' . $id);
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
            header("Location: index.php?mod=category&action=index");

        }
    }
?>