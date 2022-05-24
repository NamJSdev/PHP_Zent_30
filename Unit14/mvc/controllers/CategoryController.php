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
            $model = new Category();
            $categories = $model->select();
            $this->view("categories/list.php",['categories'=>$categories]);
            require_once ('views/categories/list.php');
        }
        public function create(){
            require_once ('views/categories/create.php');
        }
        public function store(){
            $data = $_POST;
            $data['slug'] = $this->createSlug($data['name']);
            $data['avatar'] = $this->uploadFile('avatar', '../images', array('jpg','jpeg','png','gif'),5,true)[1];
            echo '<pre>';
            var_dump($data['avatar']);
            echo '</pre>';
            $data['created_at'] = date('Y-m-d H:s:i');
            $this->model->insert($data);
            header("Location: index.php?mod=category&action=index");
        }
        public function createSlug($str, $delimiter = '-'){

            $slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $str))))), $delimiter));
            return $slug;
        }
    
        public function edit(){
            $id = $_GET['id'];
            $category = $this->model->getCatById($id);
            require_once "views/categories/edit.php";
        }
        
        public function update(){
            $data = $_POST;
            $id = $data['id'];
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