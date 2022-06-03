<?php
    require('models/Comment.php');
    require('controllers/AdminController.php');
    class CommentController extends AdminController{
        protected $model;

        public function __construct()
        {
            parent::__construct();
            $this->model = new Comment();
        }
        public function index(){
            $comments = $this->model->select();
            $this->view("comments/list.php",['comments'=>$comments]);
        }
        public function edit(){
            $id = $_GET['id'];
            $comments = $this->model->getCommentById($id);
            $this->view("comments/edit.php",['comments'=>$comments]);
        }
        
        public function update(){
            $data = $_POST;
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $data['created_at'] = date('Y-m-d H:i:s');
            $id = $data['id'];
            unset($data['id']);
             $result = $this->model->update($data,['id'=>$id]);

            if ($result) {
                setcookie('msg', 'Updated successful!', time() + 5);
                header("Location: index.php?mod=comment&action=index");
            } else {
                setcookie('error', 'Something went wrong!', time() + 5);
                header('Location: index.php?mod=comment&action=edit&id=' . $id);
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
            header("Location: index.php?mod=comment&action=index");

        }
    }
?>