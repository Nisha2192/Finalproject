<!----File name:surveyresult.php--->
<!----Author's name: Nisha Dhanwani,kawaljeet kaur,navdeep kaur--->


<!----File Description: the questions are stored in the database--->


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
    
	$txt6 = $_POST["txt6"];
	$txt3 = $_POST["txt3"];
	$txt4 = $_POST["txt4"];
	$txt5 = $_POST["txt5"];
	
    $folder = "";
	

    

    $query = "INSERT INTO surveyresult              
    (Question1, Answer1, Question2, Answer2)
	VALUES
    ('$txt6','$txt3','$txt4','$txt5')";

    $insert_count = $db->exec($query);
    if (!$insert_count) {
        echo "failed Insertion";
    } 
    else {
            header("location:survey_direct.php");
            echo "Successfully added to Database";
    }
} else {
     header("location:createsurvey.php");
}
?>
<!---end of php--->