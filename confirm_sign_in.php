<?php
    $name = test_input($_POST['name']);
    $name_hiragana = test_input($_POST['name_hiragana']);
    $address_province = test_input($_POST['address_province']);
    $address = test_input($_POST['address']);
    $email = test_input($_POST['email']);
    $password = test_input($_POST['password']);


    function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
			// Lấy thông tin
            // Để an toàn thì ta dùng hàm mssql_escape_string để
            // chống hack sql injection
            // $name   = isset($_POST['name']) ? mysqli_escape_string($_POST['name']) : '';
            // $name_hiragana   = isset($_POST['username']) ? mysqli_escape_string($_POST['name_hiragana']) : '';
            // $password   = isset($_POST['password']) ? mysqli_escape_string($_POST['password']) : '';
            // $email      = isset($_POST['email'])    ? mysqli_escape_string($_POST['email']) : '';
            // $address_province      = isset($_POST['address_province'])    ? mysqli_escape_string($_POST['address_province']) : '';
            // $address      = isset($_POST['address'])    ? mysqli_escape_string($_POST['address']) : '';
?>

<!DOCTYPE html>
<html>
<head>
	<title>登録確認画面</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				
			</div>
			<div class="col-md-6">
				<h3>登録確認画面</h3>
				<form method="post" action="signin_response.php">
				  	<div class="form-group">
				    	<label>名前:		<?php echo $name; ?></label>
				 	</div>
				 	<div class="form-group">
				    	<label>ふりがな:		<?php echo $name_hiragana; ?></label>
				  	</div>
				  	<div class="form-group">
				    	<label>都道府県:		<?php echo $address_province; ?></label>
				  	</div>
				  	<div class="form-group">
				    	<label>住所:		<?php echo $address; ?></label>
				  	</div>
				  	<div class="form-group">
				    	<label>メールアドレス:	<?php echo $email; ?></label>
				  	</div>
				  	<div class="form-group">
				    	<label>パスワード:	<?php echo $password; ?></label>
				  	</div>
				  	<input type="submit" class = "tn btn-success button1" name="btn_submit" value="登録">
				  	<input type="button" class = "tn btn-success button2"  value="修正" onclick="history.back()">

				  	<input type="hidden" name="name" value="<?php echo $name; ?>">
					<input type="hidden" name="name_hiragana" value="<?php echo $name_hiragana; ?>">
					<input type="hidden" name="address_province" value="<?php echo $address_province; ?>">
					<input type="hidden" name="address" value="<?php echo $address; ?>">
					<input type="hidden" name="email" value="<?php echo $email; ?>">
					<input type="hidden" name="password" value="<?php echo $password; ?>">
				</form>
			</div>
		</div>	
	</div>	
</body>
</html>
