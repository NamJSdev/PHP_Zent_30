<?php
    session_start();
    require_once('connection.php');
    $data = $_POST;
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
    $upload = uploadFile('thumbnail', 'images', array('jpg','jpeg','png','gif'),5,true);
    $_SESSION['upload_status'] = $upload;
    
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $time_now = date('Y-m-d H:i:s');
    $thumbnail = $_SESSION['upload_status']['1'];
    if(isset($_SESSION['upload_status']) && $_SESSION['upload_status'][0] == true){
        $sql = "INSERT INTO posts(title,short_content,thumbnail,category_id,content,created_at) VALUES('".$data['title']."','".$data['description']."','".$thumbnail."','".$data['category_id']."','".$data['content']."','".$time_now."')";
        unset($_SESSION['upload_status']);
    }
    else{
        header("Location: post_add.php");
    }
    $status = $conn -> query($sql);
    if($status == true){
        header("Location: posts.php");
    }
    else{
        header("Location: post_add.php");
    }
?>