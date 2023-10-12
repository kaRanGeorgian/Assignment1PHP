<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Document</title>
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
        <div class="container">
        <div class="formBox">
        <h2>Enter the following Details: </h2>
        <form method="post" action="view.php">
            <label for="fName">Firstname:</label></br>
            <input type="text" name="fname" id="fname"></br>
            <label for="lName">Lastname:</label></br>
            <input type="text" name="lname" id="lname"><br/>
            <label for="phoneNumber">Phone Number:</label><br/>
            <input type="tel" name="phoneNumber" id="phoneNumber"><br/>
            <label for="email">Email:</label><br/>
            <input type="email" name="email" id="email"><br/>
            
        <h2>Enter your Details:</h2>
        
            <label for="pendingBill">Pending Bill:</label><br/>
            <input type="date" name="pendingBill" id="pendingBill"><br/>
            <label for="customerNumber">Customer Number</label><br/>
            <input type="number" name="customerNumber" id="customerNumber"><br/>
            <label for="address">Address:</label><br/>
            <input type="number" name="address" id="address"><br/>
        <br/>
        <br/>
        <input type="submit" value="Submit">
      
        <?php
                         require_once('database.php'); // Include the database connection and functions

                         if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Check if the request method is POST
                             $fname = $_POST['fname'];
                             $lname = $_POST['lname'];
                             $phoneNumber = $_POST['phoneNumber'];
                             $email = $_POST['email'];
                             $pendingBill = $_POST['pendingBill'];
                             $customerNumber = $_POST['customerNumber'];
                             $address = $_POST['address'];
                         
                             $res = $database->create($fname, $lname, $phoneNumber, $email, $pendingBill, $customerNumber, $address);
                         
                             if ($res) {
                                 // Data insertion was successful
                                 echo "Data inserted successfully.";
                             } else {
                                 // Data insertion failed
                                 echo "Error inserting data.";
                             }
                         }
                         
						
						
			?>
        </div>
    </main>
</body>
</html>