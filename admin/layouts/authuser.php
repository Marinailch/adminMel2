<div>
    <form method="POST">
        <input type="text" name="login" placeholder="Enter login">
        <input type="password" name="pass" placeholder="Enter Password">
        <input type="submit" name="submit" "ENTER">
    </form>
</div>

<?php
if($_POST['submit']){
    $login = $_POST['login'];
    $password = $_POST['pass'];
    if($login === $authlogin&&$password === $authpassword){
        $_SESSION['user'] = 'admin';
        echo 'Вы вошли как администратор'.'<br>';
        echo '<a href="./index.php">'.'Войти'.'</a>';
    }else{
        echo 'Вы не администратор'.'<br>';
        echo '<a href="./index.php">'.'Повторить ввод'.'</a>';
    }
}