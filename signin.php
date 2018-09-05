<?php
    require('connect_db.php');
    $sql = "SELECT * FROM menber";
    $query=mysqli_query($mysqli, $sql);

    $sql2 = "SELECT * FROM address";
    $query2=mysqli_query($mysqli, $sql2);
?>

<html>
<head> 
    <title>登録</title>
    <link href="css/signin.css" rel="stylesheet" type="text/css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
    <script src="js/signin.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                
            </div>
            <div class="col-md-6 main-signup">
                <h3>登録</h3>
                <div class="content-signup">
                    <div>
                        <form id="signup-form" action="confirm_sign_in.php" method="post">
                            <div class="form-group">
                                <label>名前:</label>
                                <input class="form-control" type="text" name="name" id="name" placeholder="名前" required>
                            </div>
                            <div class="form-group">
                                <label>ふりがな:</label>
                                <input class="form-control" type="text" name="name_hiragana" id="name_hiragana" placeholder="ふりがな" required>
                            </div>
                            <div class="form-group">
                                <label>都道府県:</label>
                                <select name="address_province" class="form-control">
                                    <option value="" selected="selected" id="address_province">--Select--</option>
                                    <?php
                                        while($address=mysqli_fetch_array($query2)){
                                    ?>
                                        <option value= "<?php echo htmlspecialchars($address['address_province']); ?>">
                                            <?php echo htmlspecialchars($address['address_province']); ?>
                                        </option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>住所:</label>
                                <input class="form-control" type="text" name="address" id="address" placeholder="住所" required>
                            </div>
                            <div class="form-group">
                                <label>メールアドレス:</label>
                                <input class="form-control" type="email" name="email" id ="email" placeholder="abc@gmail.com" required>
                                <label for="email" id="check-mail"></label>
                            </div>
                            <div class="form-group">
                                <label>パスワード:</label>
                                <input class="form-control" type="password" name="password" id="password" placeholder="パスワード" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success" type="submit" name="send">確認</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            
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

    </div>
    


        
</body>
</html>