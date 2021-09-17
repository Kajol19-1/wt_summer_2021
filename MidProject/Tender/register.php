<?php
include_once './header.php';

if (isset($_SESSION['userId'])) {
    header('location: ./home.php');
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $description = $_POST['description'];

    $json = file_get_contents('data.json');
    $data = json_decode($json);
    foreach ($data as $item) {
        if ($item->email === $email) {
            header('location: ./register.php?m=Mail already in use');
            exit;
        }
    }
    if (strpos($email, '@') === false) {
        header('location: ./register.php?m=Invalid email');
        exit;
    }
    if (strlen($password) < 6) {
        header('location: ./register.php?m=Password must be at least 6 characters');
        exit;
    }
    if ($password !== $password2) {
        header('location: ./register.php?m=Passwords do not match');
        exit;
    }

    $formdata = array(
        'id' => uniqid(),
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'description' => $description,
    );

    $data[] = $formdata;
    $jsondata = json_encode($data, JSON_PRETTY_PRINT);
    if (file_put_contents("data.json", $jsondata)) {
        $_SESSION['userId'] = $formdata['id'];
        header('location: ./home.php');
        exit;
    } else
        header('location: ./register.php?m=Something went wrong');
}
?>

<form action="#" method="post">
    <input required placeholder="Full name" type="text" name="name"><br>
    <input required placeholder="Your email" type="text" name="email"><br>
    <input required placeholder="Your password" type="password" name="password"><br>
    <input required placeholder="Password (again)" type="password" name="password2"><br>
    <input placeholder="Tender description" type="text" name="description"><br>
    <a href="./login.php">Already have an account?</a>
    <input type="submit" value="register" name="submit">
    <?php if (isset($_GET['m'])) : ?>
        <p style="color: red"><?php echo ($_GET['m']) ?></p>
    <?php endif; ?>
</form>

<?php
include_once './footer.php';
