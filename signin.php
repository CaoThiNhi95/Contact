<?php
    require('config.php');
    $sql = "SELECT * FROM menber";
    $query=mysqli_query($mysqli, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>登録</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                
            </div>
            <div class="col-md-6">
                <h3>登録</h3>
                <form action="confirm_sign_in.php" method="POST">
                    <div class="form-group">
                        <label>名前:</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>ふりがな:</label>
                        <input type="text" name="name_hiragana" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>都道府県:</label>
                        <input type="text" name="address_province" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>住所:</label>
                        <input type="text" name="address" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>メールアドレス:</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>パスワード:</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success" type="submit" name="send">確認</button>
                    </div>
                </form>
            </div>
        </div>  
        <div>
            <h1>List Users</h1>
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
                            echo "<tr><td colspan='6' align='center'>Chua co username nao</td></tr>";
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