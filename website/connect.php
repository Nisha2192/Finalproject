

<!----File name:connect.php--->
<!----Author's name: Nisha Dhanwani,kawaljeet kaur,navdeep kaur--->
<!----File Description: this is a login page . first page of website--->




<?php

try{
$dsn= 'mysql:host=localhost;dbname=trading_card';
$username = 'root';
$password= '';

$db= new PDO($dsn, $username, $password);
}
catch(PDOException $db) {
    echo $db->getMessage();
    echo $msg = "Error!";
} 

?>