<?php
session_start();
include 'koneksi.php';

// cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])){

    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil email berdasarkan id
    $result = mysqli_query($koneksi, "SELECT email FROM user WHERE id = $id");
    $row    = mysqli_fetch_assoc($result);

    // cek cookie dan email
    if ($key === hash('sha256', $row['email'])){
        $_SESSION['login'] = true;
    }
}

if (isset($_SESSION["login"])){
    if($_SESSION['level'] == "user"){
        header("Location: mod/dashbord-user.php");
        exit;
    }elseif($_SESSION['level'] == "admin"){
        header("Location: mod/dashbord-admin.php");
        exit;
    }
}

if (isset($_POST["login"])){

    $email      = $_POST["email"];
    $password   = $_POST["password"];

    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE email = '$email'");

    // cek email
    if (mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // set session
            if ($row['level'] == "user") {
                $_SESSION["login"]   = true;
                $_SESSION['id']      = $row['id'];
                $_SESSION['name']    = $row['name'];
                $_SESSION['email']   = $row['email'];
                $_SESSION['no_telp'] = $row['no_telp'];
                $_SESSION['alamat']  = $row['alamat'];
                $_SESSION['pass']    = $row['password'];
                $_SESSION['level']   = $row['level'];
                $_SESSION['pp']      = $row['pp'];

                // cek remember me
                if (isset($_POST['remember'])) {
                    // buat cookie
                    setcookie('id', $row['id'], time() + 180);
                    setcookie('key', hash('sha256', $row['email']), time() + 180);
                }

                $_SESSION['sukses'] = 'Anda Berhasil Login';
                header("Location: mod/dashbord-user.php");
                exit;
                
            } elseif ($row['level'] == "admin") {
                $_SESSION["login"]   = true;
                $_SESSION['id']      = $row['id'];
                $_SESSION['name']    = $row['name'];
                $_SESSION['email']   = $row['email'];
                $_SESSION['no_telp'] = $row['no_telp'];
                $_SESSION['alamat']  = $row['alamat'];
                $_SESSION['pass']    = $row['password'];
                $_SESSION['level']   = $row['level'];
                $_SESSION['pp']      = $row['pp'];

                // cek remember me
                if (isset($_POST['remember'])) {
                    // buat cookie
                    setcookie('id', $row['id'], time() + 180);
                    setcookie('key', hash('sha256', $row['email']), time() + 180);
                }

                $_SESSION['sukses'] = 'Anda Berhasil Login';
                header("Location: mod/dashbord-admin.php");
                exit;
            }
        }
    }
    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-secondary">

    <div class="container" style="max-width: 650px;">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                            <div class="col-lg-11 mx-auto">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>

                                    <?php if (isset($error)) :?>

                                        <div class="alert alert-danger" role="alert">
                                            Username & Password Anda Salah!
                                        </div>

                                    <?php endif; ?>

                                    <form class="user" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="email" name="email" aria-describedby="email" placeholder="Email" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                                                <label class="custom-control-label" for="remember">Remember Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block" name="login">Login</button>
                                        <hr>
                                    </form>
                                    <div class="float-left">
                                        <a class="small" href="index.php">< Back</a>
                                    </div>
                                    <div class="float-right">
                                        <a class="small" href="register.php">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- script sweetalert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php include 'sweetalert/pesan.php'; ?>
    
</body>

</html>