<?php
require_once './Login.php';
use App\classes\Login;
if(isset($_POST['btn'])) {
    $login = new Login();
    $login->adminLoginCheck();
}


?>

<style>
    .form-container{
        width:50%;
        height: 400px;
        margin: 0 auto;
        box-shadow: 0 0 5px 5px gray;
        box-sizing: border-box;
        padding: 150px;
    }
</style>

<div class="form-container">
<form action="" method="POST">
    <table>
        <tr>
            <th>Email Address</th>
            <td><input type="email" name="email"/></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><input type="password" name="password"/></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"/></td>
        </tr>
    </table>
</form>
</div>
