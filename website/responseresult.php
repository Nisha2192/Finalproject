<!----File name:responseresult.php--->
<!----Author's name: Nisha Dhanwani,kawaljeet kaur,navdeep kaur--->


<!----File Description: this response to survey--->


<!---start of php--->
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
    $radChoice = $_POST["radChoice"];
    $radChoice1 = $_POST["radChoice1"];
	$radChoice2 = $_POST["radChoice2"];
	$radChoice3 = $_POST["radChoice3"];
	$txt1 = $_POST["txt1"];
	
    $folder = "";
	

    

    $query = "INSERT INTO response              
    (Question1, Question2, Question3, Question4, Question5)
	VALUES
    ('$radChoice','$radChoice1','$radChoice2','$radChoice3','$txt1')";

    $insert_count = $db->exec($query);
    if (!$insert_count) {
        echo "failed Insertion";
    } 
    else {
            header("location:response_direct.php");
            echo "Successfully added to Database";
    }
} else {
     header("location:responsesurvey.php");
}
?>
<!---end of php--->