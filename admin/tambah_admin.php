<?php 
    require '../functions.php';

    if ( isset($_POST["tambah_admin"]) ) {

        if ( tambahadmin($_POST) > 0 ){
        echo "
                <script>
                    alert('admin baru berhasil ditambahkan');
                </script>";
            header("Location: Homeadmin.html");
        } else {
            echo mysqli_error($conn);
        }
    }
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="styletambah.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="card">
        <h3 class="card-title">Register</h3>
        <form class="form" action="" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Masukkan Email" autocomplete="on" required />
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" autocomplete="on" placeholder="Masukkan password" required />
            </div>
            <div class="form-group">
                <label for="exampleInputPassword2">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputPassword2" name="password2" autocomplete="on" placeholder="Konfirmasi password" required />
            <div class="submit">
                <button type="submit" class="btn btn-primary" name="tambah_admin">Tambahkan Admin!</button>
            </div>
        </form>
    </div>
</body>
</html>