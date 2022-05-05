<?php
    require('models/Post.php');
    class PostController{
        public function index(){
            $model = new Post();
            $posts = $model->get();
            require_once ('views/posts/list.php');
        }
        public function create(){
            require_once ('views/posts/create.php');
        }
        public function store(){
            $data = $_POST;
            $data['avatar'] = $this->uploadFile('avatar', '../images', array('jpg','jpeg','png','gif'),5,true)[1];
            echo '<pre>';
            var_dump($data['avatar']);
            echo '</pre>';
            $data['created_at'] = date('Y-m-d H:s:i');
            $this->model->create($data);
            header("Location: index.php?mod=category&action=index");
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
    }
?>