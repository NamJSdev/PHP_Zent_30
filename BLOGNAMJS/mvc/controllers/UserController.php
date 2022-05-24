<?php
    require('models/User.php');
    require('controllers/AdminController.php');
    class UserController extends AdminController{
        protected $model;

        public function __construct()
        {
            parent::__construct();
            $this->model = new User();
        }
        public function index(){
            $model = new User();
            $users = $model->select();
            $this->view("users/list.php",['users'=>$users]);
            require_once ('views/users/list.php');
        }
        public function create(){
            require_once ('views/users/create.php');
        }
        public function store(){
            $data = $_POST;
            $data['avatar'] = $this->uploadFile('avatar', '../images', array('jpg','jpeg','png','gif'),100,true)[1];
            $data['created_at'] = date('Y-m-d H:s:i');
            $this->model->insert($data);
            header("Location: index.php?mod=user&action=index");
        }
        public function edit(){
            $id = $_GET['id'];
            $users = $this->model->getUserById($id);
            require_once "views/users/edit.php";
        }
        
        public function update(){
            $data = $_POST;
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $data['created_at'] = date('Y-m-d H:i:s');
            $data['avatar'] = $this->uploadFile('avatar', '../images', array('jpg','jpeg','png','gif'),100,true)[1];
            $id = $data['id'];
            unset($data['id']);
             $result = $this->model->update($data,['id'=>$id]);

            if ($result) {
                setcookie('msg', 'Updated successful!', time() + 5);
                header("Location: index.php?mod=user&action=index");
            } else {
                setcookie('error', 'Something went wrong!', time() + 5);
                header('Location: index.php?mod=user&action=edit&id=' . $id);
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
            header("Location: index.php?mod=user&action=index");

        }
    }
?>