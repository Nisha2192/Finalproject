<!----File name:create.php--->
<!----Author's name: Nisha Dhanwani,kawaljeet kaur,navdeep kaur--->
<!----File Description: writes the data of registered user into the database--->



<?php
$dsn= 'mysql:host=localhost;dbname=trading_card';
$username = 'root';
$password= '';
try{
$db= new PDO($dsn, $username, $password);
}
catch(PDOException $exception){
	echo "failed to connect";
}

if (mysqli_connect_errno($db))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name1 = $_POST["Name1"];
    $birthday = $_POST["birthday"];
	$username = $_POST["username"];
	$password = $_POST["password"];
    $email = $_POST["email"];
	$phoneno = $_POST["phoneno"];
	$address = $_POST["address"];
	$zipcode = $_POST["zipcode"];
	
    $folder = "";
	

    

    $query = "INSERT INTO login
    (Name,Birthdate,username,password,email,Phone_no,address,Zipcode)
	VALUES
    ('$Name1','$birthday','$username','$password','$email','$phoneno','$address','$zipcode')";

    $insert_count = $db->exec($query);
    if (!$insert_count) {
        echo "failed Insertion";
    } 
    else {
            header("location:show.php");
            echo "Successfully added to Database";
    }
} else {
     header("location:show.php");
}
?>