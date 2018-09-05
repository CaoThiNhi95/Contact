<?php
if($_POST["btn_submit"]) {
    require('connect_db.php');

    extract($_POST);

    $name = $_POST['name'];
    $name_hiragana = $_POST['name_hiragana'];
    $address_province = $_POST['address_province'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];

            

    //Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
        if ($name == "" || $name_hiragana == "" || $address_province == "" || $address == "" || $password == "" || $email == "") {
            die('We are sorry, please input to form');
        }else{
            //thực hiện việc lưu trữ dữ liệu vào db
            // Kiểm tra email có bị trùng hay không
            $sql = "SELECT * FROM menber WHERE email = '$email'";     
            // Thực thi câu truy vấn
            $result = $mysqli->query($sql);      
            // Nếu kết quả trả về lớn hơn 1 thì nghĩa là email đã tồn tại trong CSDL
            if (mysqli_num_rows($result) > 0)
            {
                // Sử dụng javascript để thông báo
                echo '<script language="javascript">alert("Email exist"); window.location="signin.php";</script>';
                // Dừng chương trình
                die ("Email exist");
            }
            else {
                // Ngược lại thì lưu trữ dữ liệu vào db
                $sql2 = "INSERT INTO menber (name, name_hiragana, address_province, address, email, password) VALUES ('". $name . "','" . $name_hiragana ."','" . $address_province . "','" . $address ."','" . $email ."','" . md5($password) ."')";

                $success = $mysqli->query($sql2);

                if(!$success){
                    die("Couldn't enter data: ".$mysqli->error);
                }else {
                    echo "会員登録ありがとうございました!";
                }
            }
        }

    $mysqli->close();
}
?>

<?php
    require('connect_db.php');
    $sql = "SELECT * FROM menber";
    $query=mysqli_query($mysqli, $sql);
?>

<html>
<head> 
    <title>登録</title>
    <link href="css/signin.css" rel="stylesheet" type="text/css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container"> 
            <div>
                <h3>List Users</h3>
                <table class="table table-bordered table-condensed">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>名前</th>
                            <th>ふりがな</th>
                            <th>都道府県</th>
                            <th>住所</th>
                            <th>メールアドレス</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                            if(mysqli_num_rows($query) == 0)
                                {
                                echo "<tr><td colspan='6' align='center'>No data username！</td></tr>";
                                }else{
                            while($row=mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['id']); ?></td>
                                <td><?php echo htmlspecialchars($row['name']); ?></td>
                                <td><?php echo htmlspecialchars($row['name_hiragana']); ?></td>
                                <td><?php echo htmlspecialchars($row['address_province']); ?></td>
                                <td><?php echo htmlspecialchars($row['address']); ?></td>
                                <td><?php echo htmlspecialchars($row['email']); ?></td>
                            </tr>
                        <?php
                            }}
                        ?>
                    </tbody>
                </table>
            </div>
    </div>      
</body>
</html>