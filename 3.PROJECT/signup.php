<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <main class="container">
  <h1>Thêm tài khoản</h1>
      <div class="row">
                <div class="col-md-12">
                    <form action="" method="POST">
                        <div class="form-group">
                          <label for="txtID"> ID</label>
                          <input type="text" class="form-control" name="txtID" id="txtID" >
                        </div>
                        <div class="form-group">
                          <label for="txtName">Name</label>
                          <input type="text" class="form-control" name="txtName" id="txtName" >
                        </div>
                        <div class="form-group">
                          <label for="txtAccount">Account</label>
                          <input type="text" class="form-control" name="txtAccount" id="txtAccount" >
                        </div>
                        <div class="form-group">
                          <label for="txtPass"> Password</label>
                          <input type="text" class="form-control" name="txtPass" id="txtPass" >
                        </div>
                        <div class="form-group">
                          <label for="txtEmail"> Email</label>
                          <input type="text" class="form-control" name="txtEmail" id="txtEmail" >
                        </div>
                        <div class="form-group">
                          <label for="txtGT"> Giới Tính</label>
                          <input type="radio" name="txtGT" id="txtGT" value="Nam">Nam</input>

                          <input type="radio" name="txtGT" id="txtGT" value="Nữ">Nữ</input>
                        </div>
                        <div class="form-group">
                          <label for="txtDate"> Ngày Sinh</label>
                          <input type="date" name="txtDate" id="txtDate">
                        </div>
                       
                        <div class="form-group">
                          <input type="submit" class="form-control bg-success" name="sbmSave" id="sbmSave" value="Save">
                          
                            <?php
                                
                            
                                // B2: Khai bao truy van
                                $host = 'localhost';
                                $user = 'root';
                                $pass = '';
                                $db   = 'login';
                               
                                $conn =  mysqli_connect($host, $user, $pass, $db);
                              
                                if (isset($_POST['sbmSave'])&& $_POST['txtID'] != "" && $_POST['txtName'] != "" && $_POST['txtAccount'] !="" && $_POST['txtPass'] != "" && $_POST['txtEmail'] != "" && $_POST['txtGT'] != "" && $_POST['txtDate'] != "") {

                                    $id= $_POST['txtID'];
                                    $name = $_POST['txtName'];
                                    $account = $_POST['txtAccount'];
                                    $Pass = $_POST['txtPass'];
                                    $email = $_POST['txtEmail'];
                                    $gt = $_POST['txtGT'];
                                    $date = $_POST['txtDate'];
                                     
                                    $sql = "INSERT INTO users (id , name ,account , password , email , gt , date) VALUES ('$id' ,' $name ', '$account' , '$Pass' , '$email' , '$gt' , '$date')";
                                    mysqli_query($conn,$sql);
                                    echo "Thêm thành công";
                                    
                                }
                                else{
                                    echo"thêm không thành công";
                                }
                            ?>
                        </div>
                    </form>
                </div>
            </div>
                                <a href="index.php">Quay lại Đăng nhập</a>
      </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
                 
  </body>
</html>