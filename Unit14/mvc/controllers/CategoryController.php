<?php
    require('models/Category.php');
    class CategoryController{
        protected $model;

        public function __construct()
        {
            $this->model = new Category();
        }
        public function index(){
            $model = new Category();
            $categories = $model->get();
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
            $this->model->create($data);
            header("Location: index.php?mod=category&action=index");
        }
        public function createSlug($str, $delimiter = '-'){

            $slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $str))))), $delimiter));
            return $slug;
        }
        function uploadFile($input_name, $target_dir, $allowtypes, $max_size, $override){
            $upload_status = true;
            $target_file = $target_dir."/" . basename($_FILES[$input_name]["name"]);
            $errors = array();
    
            $types  = "";
            if(is_array($allowtypes)){
                foreach($allowtypes as $key => $type){
                    $types .= $type.",";
                }
            }
            $types = trim($types,',');
    
            if(!isset($_FILES[$input_name])){
                $errors[] = "Không có dữ liệu file";
                $upload_status = false;
            }
    
            if($_FILES[$input_name]['error'] != 0){
                $errors[] = "Dữ liệu upload bị lỗi";
                $upload_status = false;
            }
    
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            if(!in_array($imageFileType,$allowtypes)){
                $errors[] = "Chỉ được upload các định dạng : ".$types;
                $upload_status = false;
            }
    
            if($_FILES[$input_name]["size"] > $max_size*1024*1024){
                $errors[] = "Không được upload ảnh lớn hơn $max_size (MB).";
                $upload_status = false;
            }
    
            if(file_exists($target_file) && $override == false){
                $errors[] = "Tên file đã tồn tại trên server, không được ghi đè";
                $upload_status  = false;
            }
    
            if($upload_status){
                if(move_uploaded_file($_FILES[$input_name]["tmp_name"], $target_file)){
                    return array(true,$target_file);
                }else{
                    $errors[] = "Có lỗi xảy ra khi upload file. Vui lòng kiểm tra lại";
                    return array(false,$errors);
                }
            }else{
                return array(false,$errors);
            }
        }

        public function edit(){
            $id = $_GET['id'];
            $category = $this->model->getCatById($id);
            require_once "views/categories/edit.php";
        }
        
        public function update(){
             $data = $_POST;
             $result = $this->model->updateCate($data);

            if ($result) {
                setcookie('msg', 'Updated successful!', time() + 5);
                header("Location: index.php?mod=category&action=index");
            } else {
                setcookie('error', 'Something went wrong!', time() + 5);
                header('Location: index.php?mod=category&action=edit&id=' . $data['id']);
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