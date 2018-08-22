<?php
if($_POST["btn_submit"]) {
    require('config.php');

    extract($_POST);

        if(!isset($_POST['name']) || !isset($_POST['name_hiragana']) || !isset($_POST['address_province'])|| !isset($_POST['address']) || !isset($_POST['email']) || !isset($_POST['password']) ) {
            die('We are sorry, please input to form');
        }

        $name = $_POST['name'];
        $name_hiragana = $_POST['name_hiragana'];
        $address_province = $_POST['address_province'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        // Kiểm tra email có bị trùng hay không
        $sql = "SELECT * FROM member WHERE email = '$email'";
          
        // Thực thi câu truy vấn
        $result = $mysqli->query($sql);
          
        // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
        if (mysqli_num_rows($result) > 0)
        {
            // Sử dụng javascript để thông báo
            echo '<script language="javascript">alert("Email exist"); window.location="signin.php";</script>';
              
            // Dừng chương trình
            die ();
        }
        else {
            // Ngược lại thì thêm bình thường
            $sql2 = "INSERT INTO menber (name, name_hiragana, address_province, address, email, password) VALUES ('". $name . "','" . $name_hiragana ."','" . $address_province . "','" . $address ."','" . $email ."','" . md5($password) ."')";

            $success = $mysqli->query($sql2);

            if(!$success){
                die("Couldn't enter data: ".$mysqli->error);
            }
            else {
                echo "会員登録ありがとうございました!";
            }
        }

    $mysqli->close();
}
?>