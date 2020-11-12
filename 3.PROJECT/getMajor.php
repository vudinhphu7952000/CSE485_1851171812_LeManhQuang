<?php
   include "./includes/config.php";
   $faculty_id = 0; // tạo biến gán = 0
   if (isset($_POST['faculty'])) { // depart từ cái ajax(data) ý
       $faculty_id = mysqli_real_escape_string($conn, $_POST['faculty']); // department id
       
   } //mysqli_real_escape_string hàm này ko biết nhé ,chỉ biết là lấy id của department
   $fac_arr = array(); //tạo biến dạng mảng
   if ($faculty_id > 0) {
       $sql = "SELECT id,name,id_major,combination,total FROM users WHERE faculty=" . $faculty_id;
       $result = mysqli_query($conn, $sql);
       while ($row = mysqli_fetch_array($result)) {
           $id = $row['id'];
           $name = $row['name'];
           $id_major = $row['id_major'];
           $combination  = $row['combination'];
           $total = $row['total'];
           $fac_arr[] = array("id" => $id, "name" => $name, "id_major" => $id_major , "combination" => $combination , "total" => $total);// gán giá trị
       }
   }
   // encoding array to json format
   echo json_encode($fac_arr); //chuyển từ dạng mảng sang json(object ý)
?>