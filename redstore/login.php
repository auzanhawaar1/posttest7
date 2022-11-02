<?php
include('koneksi.php');
if(isset($_POST["login"])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE 
    username ='$username'");

    //cek
    if (mysqli_num_rows($result) === 1){

        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])){
            header("location: halaman.php");
            exit;
        }
    }
    $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Halaman Login</title>
    
</head>
<body>
    <div class="container" style="background-color:red; padding:5px;">
    
<h1> Halaman login </h1>

<?php if( isset($error)):?>
    <p style="color: yellow; font-style: italic;">username /
    password salah</p>
<?php endif; ?>


    <form action="" method="post">
    
        <ul class="login">
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
    </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
        </li>
        <li>
            <button type="submit" name="login">Login</button>
    </li>
    </ul>
</div>

</body>
</html>