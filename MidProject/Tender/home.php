<?php
include_once 'header.php';
if (!isset($_SESSION['userId'])) {
    header('location: ./login.php?m=Login to continue');
    exit;
}

?>

<h3>Tender panel</h3>
<p>See all the contacts for hire for tendering here:</p>
<a href="./info.php">View tender contacts info</a>

<?php
include_once './footer.php';
