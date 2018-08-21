<!DOCTYPE html>
<html>
<head>
    <title>Contact us PHP MySQL </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                
            </div>
            <div class="col-md-6">
                <h3>Contact us PHP MySQL </h3>
                <form action="response.php" method="POST">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Message:</label>
                        <textarea class="form-control" name="message" required></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success" type="submit" name="send">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</body>
</html>