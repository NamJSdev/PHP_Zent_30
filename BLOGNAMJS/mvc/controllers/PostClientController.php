<?php
require('controllers/FontEndController.php');
    class PostClientController extends FontEndController
    {
        public function __construct()
        {   
            
        }
        public function index(){
            require_once ('views/posts/listIndexClient.php');
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