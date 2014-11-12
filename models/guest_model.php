<?php

class Guest_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function requestlogin()
	{
            $data = array('error' => true);
            if (isset($_POST['email']) && isset($_POST['password']))
            {
                $email = $_POST['email'];

                $sth = $this->db->prepare("SELECT id,username FROM ".DB_PREFIX."users WHERE 
                                email = :email AND password = :password");
                $sth->execute(array(
                        ':email' => $email,
                        ':password' => Hash::create($_POST['password'])
                ));

                $result = $sth->fetchAll();

                if ($result != NULL) {
                    // login
                    $this->setSession($result[0]['id']); 
                    $username = $result[0]['username'];
                    $data = array('error' => false,'content' => URL.'mem/'.$username);
                }
            }
            return json_encode($data);
	}
        
        public function requestregister(){
            $username = $_POST['username'];
            $email = $_POST['email'];
            
            if (stripos($username,"admin") !== false)
            {
                $data = array('error' => true, 'content' => 'Tên đăng nhập không chứa chữ "admin"');                
                return json_encode($data);
            }
            //check exist username
            $sth = $this->db->prepare("SELECT count(*) FROM ".DB_PREFIX."users WHERE 
                            username = :username");
            $sth->execute(array(
                    ':username' => $username
            ));
            
            if ($sth->fetchColumn() > 0){
                $data = array('error' => true, 'content' => 'Tên đăng nhập đã được sử dụng');                
                return json_encode($data);
            }
            
            //check exist email
            $sthe = $this->db->prepare("SELECT count(*) FROM ".DB_PREFIX."users WHERE 
                            email = :email");
            $sthe->execute(array(
                    ':email' => $email
            ));
            
            if ($sthe->fetchColumn() > 0){
                $data = array('error' => true, 'content' => 'Email đã được sử dụng');                
                return json_encode($data);
            }
            
            //if check ok. start register process
            $sthq = $this->db->prepare("INSERT INTO ".DB_PREFIX."users 
                            (`username` ,`password` ,`email`) VALUES
                            (:name,:pass,:email)");
          
            $status = $sthq->execute(array(
                    ':name'     => $username,
                    ':email'    => $email,
                    ':pass'     => Hash::create($_POST['password']),
            ));

			if ($status){
				$this->setSession($this->db->getInsertID());
				$data = array('error' => false, 'content' => URL.'mem/'.$username);
			}else {
				$data = array('error' => true, 'content' => 'Có lỗi sảy ra khi kết nối database, vui lòng đăng ký lại. Xin lỗi vì sự bất tiện này');                
			}
			return json_encode($data);
        }
	
        public function requestresetpass(){
            $email = $_POST['email'];
            
            //check exist email
            $sth = $this->db->prepare("SELECT count(*) FROM ".DB_PREFIX."users WHERE 
                            email = :email");
            $sth->execute(array(
                    ':email' => $email
            ));
            
            if ($sth->fetchColumn() == 0){
                $data = array('error' => true);                
                return json_encode($data);
            }
            
            //if check ok. start reset pass process
            $token = $this->getRandomString(15);
            $sthi = $this->db->prepare("INSERT INTO ".DB_PREFIX."tokens 
                            (`email` ,`token`) VALUES
                            (:email,:token)");
          
            $sthi->execute(array(
                    ':email'    => $email,
                    ':token'     => $token,
            ));
            
            $is_send = $this->mailresetlink($email, $token);
            $data = array('error' => false);
            return json_encode($data);
        }
        
        public function getRandomString($length) 
        {
            $validCharacters = "ABCDEFGHIJKLMNPQRSTUXYVWZ123456789";
            $validCharNumber = strlen($validCharacters);
            $result = "";

            for ($i = 0; $i < $length; $i++) {
                $index = mt_rand(0, $validCharNumber - 1);
                $result .= $validCharacters[$index];
            }
            return $result;            
        }
        
        function mailresetlink($to,$token){
            $subject = "Yêu cầu phục hồi mật khẩu ở ALBUM.OCDAO.NET";
            $link = URL.'guest/reset?token='.$token;
            $message = '
            <html>
            <head>
            <title>Yêu cầu phục hồi mật khẩu ở album.ocdao.net</title>
            </head>
            <body>
				<div >
					<center>
						<h3 style="color:violet">THƯ TRẢ LỜI YÊU CẦU PHỤC HỒI MẬT KHẨU</h3> 
						<p><strong>Được gởi từ hệ thống của Ốc đảo</strong> - <a href="album.ocdao.net">ALBUM.OCDAO.NET</a></p>
					</center>
				<br />
				<p>Chào bạn,<p>
				<p>Chúng tôi vừa nhận được yêu cầu phục hồi mật khẩu của bạn từ trang web ALBUM.OCDAO.NET. Nếu yêu cầu này là mong muốn của bạn thì hãy click vào link dưới đây để tiến hành phục hồi mật khẩu. Nếu không phải xin hãy bỏ qua email này </p>
				<center><div style="background-color:#e31e25; color:white; height:40px;width:400px;border-radius: 5px; -moz-border-radius: 5px;-webkit-border-radius: 5px;"><a style="color:white;line-height:40px;text-decoration:none;" href="'.$link.'" target="_blank" >CLICK VÀO ĐÂY ĐỂ PHỤC HỒI MẬT KHẨU</a></div></center>
				<br />
				<p>Trong trường hợp trình duyệt web không tự chuyển được vui lòng copy đuờng dẫn '.$link.' vào trình duyệt và nhấn Enter</p>
				<p>Xin cảm ơn, chúc bạn một ngày tốt lành</p>
				<p><strong>support team</strong></p>
				</div>
				<div>
				</div>
            </body>
            </html>
            ';
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=utf-8" . "\r\n";
            $headers .= 'From: Album.ocdao.net <support@ocdao.net>' . "\r\n";
            $headers .= 'Cc: support@ocdao.net' . "\r\n";

            if(mail($to,$subject,$message,$headers)){
               return true; 
            } 
            return false;
        }
        
        function updatePass($email,$pass){
            
            //update password
            $sth = $this->db->prepare("UPDATE ".DB_PREFIX."users SET 
				password = :pass WHERE 
                                email = :email");
          
            $sth->execute(array(
                    ':email'    => $email,
                    ':pass'     => Hash::create($pass),
            ));
            
            
            //update token is used
            $sth = $this->db->prepare("UPDATE ".DB_PREFIX."tokens SET 
				used = :used WHERE 
                                email = :email");
          
            $sth->execute(array(
                    ':email'    => $email,
                    ':used'     => 1,
            ));
        }
        
        function checkValidToken(){
            if (isset($_GET['token']))
            {
                $token=$_GET['token'];
                $sth = $this->db->prepare("SELECT email FROM ".DB_PREFIX."tokens WHERE 
                            token = :token AND used = 0");
                $sth->execute(array(
                        ':token' => $token
                ));

				$result = $sth->fetchAll();
				if ($result == NULL)
					return false;
                Session::init();
                Session::set('email', $result[0][0]);
                return true;
            }
            else 
                $this->redirect_to_error_page ();
        }
        
        function getUserIDbyEmail($email)
        {
            $sth = $this->db->prepare("SELECT id FROM ".DB_PREFIX."users WHERE 
				email = :email");
            $sth->execute(array(
                    ':email' => $email
            ));

            $data = $sth->fetchAll();
            if ($data == NULL)
                return NULL;
            return $data[0]['id'];
        }
        
        function redirect_to_error_page()
        {
            header('location:'.URL.'error');                
            exit;
        }
        
        public function setSession($userid){
            Session::init();
            Session::set('loggedIn', true);
            Session::set('userid', $userid);
            //Session::set('username', $username);
        }
}
