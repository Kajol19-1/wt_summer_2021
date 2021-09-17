<?php
include_once 'header.php';

if (isset($_SESSION['userId'])) {
    header('location: ./home.php');
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $json = file_get_contents('data.json');
    $data = json_decode($json);
    foreach ($data as $item) {
        if ($item->email === $email) {
            if ($item->password !== $password)
                header('location: ./login.php?m=Incorrect password');
            else {
                $_SESSION['userId'] = $item->id;
                header('location: ./home.php');
            }
            exit;
        }
    }
    header('location: ./login.php?m=Email does not exist');
    exit;
}

?>
<h3>Tender login</h3>

<form action="#" method="post">
    <input required placeholder="Email" type="text" name="email"><br>
    <input required placeholder="Password" type="password" name="password"><br>
    <a href="./register.php">Create an account</a>
    <input type="submit" value="Login" name="submit">
    <?php if (isset($_GET['m'])) : ?>
        <p style="color: red; font-size: 20px;"><?php echo ($_GET['m']) ?></p>
    <?php endif; ?>
</form>
<?php
include_once 'footer.php';
