<html>
    <head>
        <title>Login Ges</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="box">
            <h1>Login Aplikasi</h1>
            <h5>User Access</h5>
            <form action="proses.php" method="post">
                <div class="lapisInput">
                    <label>Email :</label>
                    <input type="email" name="email" id="email">
                    <br>
                    <label>Password :</label>
                    <input type="password" name="pass" id="pass">
                    <br>
                </div>
                <div class="tombol-login">
                    <input type="submit" value="Login">
                </div>
                <br>
                <div class="klik">
                    <label>admin klik <a href="../admin/login_admin.php">disini!</a></label>
                </div>
                <div class="klik">
                    <label>kamu belum punya akun! daftar dong,terus click <a href="daftar.php">disini!</a> masa belum ada</label>
                </div>
                <div class="klik">
                    <label>edotense <a href="../index.php">disini!</a></label>
                </div>
            </form>
        </div>
    </body>
</html>