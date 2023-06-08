<?php
if (isset($_POST['submit'])) {
    session_start();
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['email'] = $_POST['email'];
    if ($_SESSION['username'] == 'daniadmin' && $_SESSION['password'] == '1234' && $_SESSION['email'] == 'daniadmin@gmail.com') {
        header("Location: index.php");
    } else if ($_SESSION['username'] == 'danimhs' && $_SESSION['password'] == '1234' && $_SESSION['email'] == 'danimhs@gmail.com') {
        header("Location: tabeluser.php");
    } else {
        echo "username atau password salah, Harap Coba Kembali<br>";
        echo "<form action='login.php'>";
        echo "<input type='submit' name='submit' value='Login'></form>";
    }
}
?>