<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font.css">
</head>
<body>
    <div class="container">
        <div class="card col-lg-6 mx-auto">
            <div class="card-header bg-dark">
                <h4 class="text-white">
                    Zuu Laundry
                </h4>
            </div>

            <div class="card-body" >
                <div class="alert alert-danger">
                    Login hanya untuk kasir / admin!
                </div>
                <form action="process-login.php" method="post">
                    Username
                    <input type="text" name="username" 
                    class="form-control mb-2" required>

                    Password
                    <input type="password" name="password" 
                    class="form-control mb-2" required>

                    <button type="submit" name="login"
                    class="btn btn-info btn-block">
                     Log In 
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>