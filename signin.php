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
    </div>
</body>
</html>