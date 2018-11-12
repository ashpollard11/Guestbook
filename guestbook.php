<?php include_once './header.php'?>

<?php
    $host="localhost"; //add your SQL Server host here
    $user="root"; //SQL Username
    $pass="root"; //SQL Password
    $dbname="guestbook"; //SQL Database Name
    $con=mysqli_connect($host,$user,$pass,$dbname);
    if (mysqli_connect_errno($con))
    {
        echo "<h1>Failed to connect to MySQL: " . mysqli_connect_error() ."</h1>";
    }
?>

<div class="container">
    <div class="row">

		<?php $result = mysqli_query($con, "SELECT firstName, lastName, email, phone, message FROM entries");
		while($row = mysqli_fetch_array($result)) { ?>
			<?php include './includes/entries.php';?>

		<?php } mysqli_close($con); ?>

    </div>
</div>




<?php include_once './footer.php'?>
