<?php
include_once './header.php';

if (!isset($_SESSION['userId'])) {
    header('location: ./login.php?m=Login to continue');
}

$json = file_get_contents('contacts.json');
$data = json_decode($json);

if (isset($_POST['submit'])) {
    $id = $_SESSION['userId'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $skill = $_POST['skill'];
    $availablity = $_POST['availablity'];
    $jobs_completed = $_POST['jobs_completed'];
    $formdata = array(
        'id' => uniqid(),
        'name' => $name,
        'contact' => $contact,
        'address' => $address,
        'skill' => $skill,
        'availablity' => $availablity,
        'jobs_completed' => $jobs_completed
    );

    $data[] = $formdata;
    $jsondata = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents("contacts.json", $jsondata);
}
?>

<h3>Add contact:</h3>
<form action="#" method="post">
    <input required placeholder="Name" type="text" name="name"><br>
    <input required placeholder="Contact" type="text" name="contact"><br>
    <input required placeholder="Address" type="password" name="address"><br>
    <input placeholder="Skill" type="text" name="skill"><br>
    <input type="checkbox" name="availablity">
    <input type="number" name="jobs_completed" value="0">
    <input type="submit" value="register" name="Add">
</form>

<h3>Contacts to hire for tendering:</h3>

<?php foreach ($data as $item) : ?>
    <p>Name: <?php echo $item->name ?></p>
    <p>Contact: <?php echo $item->contact ?></p>
    <p>Address: <?php echo $item->address ?></p>
    <p>Skill: <?php echo $item->skill ?></p>
    <p>Availablity: <input <?php echo ($item->availablity ? 'ok' : '') ?> type="checkbox" disabled /></p>
    <p>Jobs completed: <?php echo $item->jobs_completed ?></p>
<?php endforeach;
include_once './footer.php';
?>