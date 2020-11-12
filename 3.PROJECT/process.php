<?php
 
                session_start();
            if(isset($_POST['sbmLogin'])){
                $host = 'localhost';
                  $user = 'root';
                $pass = '';
                  $db   = 'login';
                               
                 $conn =  mysqli_connect($host, $user, $pass, $db);
                $account = $_POST['txtAccount'];
                $password = addslashes($_POST['txtPass']);

                 if (!$account || !$password) {
                    echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu";
                    exit;
                }
              
                // // $password = md5($password);
                // $sql="SELECT account, password FROM users WHERE account='$account";
                // $result = mysqli_query($conn,$sql);         
                // if (mysqli_num_rows($result) != 0) {
                //                 echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại";
                //                 exit;
                //     }
                //     $row = mysqli_fetch_array($result);
                //     if ($password != $row['password']) {
                //       echo "Mật khẩu không đúng. Vui lòng nhập lại. ";
                //       exit;
                //   }   
                  $_SESSION['account'] = $account;
                  echo "Xin chào " . $account . ". Bạn đã đăng nhập thành công. ";
                  ?><a href="main.php">Quay lại trang chủ</a><?php
                  die(); 
            }
            ?>