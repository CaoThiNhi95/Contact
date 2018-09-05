<?php
    require('connect_db.php');
    if(isset($_GET['email'])){
        $email = $_GET['email'];
        $sql = "SELECT * FROM menber WHERE email = '$email'";     
            // Thực thi câu truy vấn
        $result = $mysqli->query($sql);      
            // Nếu kết quả trả về lớn hơn 1 thì nghĩa là email đã tồn tại trong CSDL
        if (mysqli_num_rows($result) > 0){
            // echo "このEメールアドレスが存在しました！";
            echo "yes";
        }
        else {
            // echo "このEメールアドレスはいいです！";
            echo "no";
        }
    }
?>