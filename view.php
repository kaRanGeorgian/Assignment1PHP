<?php
    require_once('database.php');
    $res = $database->read();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Submission</title>
    <link rel="stylesheet" href="myStyles.css">
</head>
<body>
<header>
        <h1>My superstore</h1>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="view.php">View</a></li>
        </ul>
    </header>
    <main>
    <div><h2>Customer Details:</h2></div>
    <table class="table">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Pending Bill</th>
            <th>Customer Number</th>
            <th>Address</th>
        <?php
            while($r = mysqli_fetch_assoc($res)){
        ?>
            <tr>
                <td><?php echo $r['fname']; ?></td>
                <td><?php echo $r['lname']; ?></td>
                <td><?php echo $r['phoneNumber']; ?></td>
                <td><?php echo $r['email']; ?></td>
                <td><?php echo $r['pendingBill']; ?></td>
                <td><?php echo $r['customerNumber']; ?></td>
                <td><?php echo $r['address']; ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
    </main>
</body>
</html>