<?php
session_start();
if(!isset($_SESSION['user']))
{
    ?>
    <script>
    window.alert('Login Required!');
    window.location.href='../admin_signin.php';
    </script>
    <?php
}
?>