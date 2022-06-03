<?php
    require('models/Post.php');
    require('models/User.php');
    require('models/Comment.php');
    require('controllers/FrontEndController.php');
    require ('library/src/Exception.php');
    require ('library/src/PHPMailer.php');
    use PHPMailer\PHPMailer\PHPMailer;
    require ('library/src/SMTP.php');
    class PostClientController extends FrontEndController{
        protected $model;
        protected $modelUser;
        protected $modelCmt;

        public function __construct()
        {
            $this->model = new Post();
            $this->modelUser = new User();
            $this->modelCmt = new Comment();
        }
        
        public function index(){
            $page = isset($_GET["page"]) ? $_GET["page"] : 1;
            $countPage=count($this->model->select());
            $limit = 8;
            $posts = $this->model->select('*',$page, $limit);
            $totalPage = $countPage%$limit == 0 ? $countPage/$limit : $countPage/$limit + 1;
            $users = $this->modelUser->select();
            $postsRandom = $this->model->selectRandom();
            $postsThirt = $this->model->selectSlider();
            $this->view('posts/listIndexClient.php', [
                'posts' => $posts,
                'users' => $users,
                'postsThirt' => $postsThirt,
                'postsRandom' => $postsRandom,
                'totalPage' => $totalPage,
                'page' => $page
            ]);
            require_once "views/posts/listIndexClient.php";
        }
        public function detail(){
            $users = $this->modelUser->select();

            $id = $_GET['id'];
            $posts = $this->model->getPostById($id);
            $postsThirt = $this->model->selectSlider();
            $postsRandom = $this->model->selectRandom();
            $cmts = $this->modelCmt->getCommentByIdPost($posts['id']);
            $this->view('posts/postDetail.php',[
                'users' => $users,
                'posts' => $posts,
                'postsThirt' => $postsThirt,
                'postsRandom' => $postsRandom,
                'cmts' => $cmts
            ]);
        }
        public function add_cmt(){
            $data = $_POST;
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $data['created_at'] = date('Y-m-d H:i:s');
            $this->modelCmt->insert($data);
            header("Location: index.php?mod=postClient&action=detail&id=".$data['post_id']);
        }
        public function about(){
            $users = $this->modelUser->select();
            $postsThirt = $this->model->selectSlider();
            $postsRandom = $this->model->selectRandom();
            require_once "views/posts/about.php";
        }
        public function contact(){
            $users = $this->modelUser->select();
            $postsThirt = $this->model->selectSlider();
            $postsRandom = $this->model->selectRandom();
            require_once "views/posts/contact.php";
        }
        public function contact_feedback(){
            require_once "views/posts/contactFeedBack.php";
        }
        // use PHPMailer\PHPMailer\PHPMailer;
        public function submit_mail(){
            $data = $_POST;
            // var_dump($data);
            $email_recive = 'namnxtank@gmail.com';
            $name = $data['name'];
            $contents = 'Nội dung thư : '.'<br>' . $data['message'] .'<br>'.'Số điện thoại liên hệ: ' .$data['phone'] .'<br>'. 'Email liên hệ: '.$data['email'] ;
            $subject = $data['name'] . 'đã gửi cho bạn lời nhắn từ Blog Nam JS DEV';
            $this->send_email($email_recive,$name,$contents,$subject);
        }
        public function send_email($email_recive,$name,$contents,$subject){
            $mail = new PHPMailer();
            // Khai báo gửi mail bằng SMTP
            $mail->IsSMTP();
            $mail->setLanguage('vi', '/optional/path/to/language/directory/');
            $mail->SMTPDebug  = 0;
            $mail->SMTPOptions = array (
                'ssl' => array(
                    'verify_peer'  => false,
                    'verify_peer_name'  => false,
                    'allow_self_signed' => true)
                );
                $mail->CharSet="UTF-8";
                $mail->Debugoutput = "html"; // Lỗi trả về hiển thị với cấu trúc HTML
                $mail->Host       = "smtp.gmail.com"; //host smtp để gửi mail
                $mail->Port       = 587; // cổng để gửi mail
                $mail->SMTPSecure = "tls"; //Phương thức mã hóa thư - ssl hoặc tls
                $mail->SMTPAuth   = true; //Xác thực SMTP
                $mail->Username   = "nam.js.dev@gmail.com"; // Tên đăng nhập tài khoản Gmail
                $mail->Password   = "12345Nam@"; //Mật khẩu của gmail
                $mail->SetFrom("nam.js.dev@gmail.com", "NamJS"); // Thông tin người gửi
                $mail->AddReplyTo("nam.js.dev@gmail.com","NamJS");// Ấn định email sẽ nhận khi người dùng reply lại.
                $mail->AddAddress($email_recive, $name);//Email của người nhận
                //$mail->AddCC($email_recive, $name);//Email của người nhận
                $mail->Subject = $subject; //Tiêu đề của thư
                $mail->MsgHTML($contents); //Nội dung của bức thư.
                //$mail->MsgHTML(file_get_contents("email-template.html"), dirname(__FILE__));
                // Gửi thư với tập tin html
                $mail->AltBody = "Nội dung thư";//Nội dung rút gọn hiển thị bên ngoài thư mục thư.
                //Tiến hành gửi email và kiểm tra lỗi
                if(!$mail->Send()) {
                    echo "Có lỗi khi gửi mail" .$mail -> ErrorInfo;
                    return false;
                } else {
                    echo "Đã gửi thư thành công";
                    return true;
                    header("Location: index.php?mod=postClient&action=contact_feedback");
                }
        }
    }
?>