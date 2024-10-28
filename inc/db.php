 <?php

// setting up database variables 
$servername = "localhost";
$username = "root";
$password = "";
$database = "if0_37325923_sendysite";

try {

    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // set the PDO error mode to exception
     echo "Connected Successfully";

}
catch(Exception $e) {
  echo 'Exception -> ';
  var_dump($e->getMessage());
}



if($_SERVER['REQUEST_METHOD'] ==='POST'){

$fullname=$_POST['fullname'];
$EmailAddress= $_POST['EmailAddress'];
$paymentmethod=$_POST['paymentmethod'];
$paymentcurrency=$_POST['paymentcurrency'];
$currencyamount=$_POST['currencyamount'];
$purposeoftransaction=$_POST['purposeoftransaction'];
$sourcefund=$_POST['sourcefund'];
$recipientdetails=$_POST['recipientdetails'];
$recipientcountry=$_POST['recipientcountry'];
$deliverymethod=$_POST['deliverymethod'];
$PhoneNumber=$_POST['PhoneNumber'];

$stmt=$conn->prepare("INSERT INTO allusers(
fullname,
EmailAddress,
paymentmethod,
paymentcurrency,
currencyamount,
purposeoftransaction,
sourcefund,
recipientdetails,
recipientcountry,
deliverymethod,
PhoneNumber
)
VALUES (
    
:fullname,
:EmailAddress,
:paymentmethod,
:paymentcurrency,
:currencyamount,
:purposeoftransaction,
:sourcefund,
:recipientdetails,
:recipientcountry,
:deliverymethod,
:PhoneNumber
)
");

// id 1
// fullname
// EmailAddress
// paymentmethod
// paymentcurrency
// currencyamount
// purposeoftransaction
// sourcefund
// recipientdetails
// recipientcountry
// deliverymethod
// PhoneNumber
// date 
$stmt->bindParam(':fullname',$fullname);
$stmt->bindParam(':EmailAddress',$EmailAddress);
$stmt->bindParam(':paymentmethod',$paymentmethod);
$stmt->bindParam(':paymentcurrency',$paymentcurrency);
$stmt->bindParam(':currencyamount',$currencyamount);
$stmt->bindParam(':purposeoftransaction',$purposeoftransaction);
$stmt->bindParam(':sourcefund',$sourcefund);
$stmt->bindParam(':recipientdetails',$recipientdetails);
$stmt->bindParam(':recipientcountry',$recipientcountry);
$stmt->bindParam(':deliverymethod',$deliverymethod);
$stmt->bindParam(':PhoneNumber',$PhoneNumber);
$stmt->execute(); 
echo 'Values inserted';
}
// CREATE TABLE IF NOT EXISTS allusers(
//     id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     fullname VARCHAR(255) NOT NULL,
//     EmailAddress VARCHAR(255) NOT NULL,
//     paymentmethod VARCHAR(255) NOT NULL,
//     paymentcurrency VARCHAR(255)NOT NULL,
//     currencyamount VARCHAR(255) NOT NULL,
//     purposeoftransaction VARCHAR(255) NOT NULL,
//     sourcefund VARCHAR(255) NOT NULL,
//     recipientdetails VARCHAR(255) NOT NULL,
//     recipientcountry VARCHAR(255)NOT NULL,
//     deliverymethod VARCHAR(255) NOT NULL,
//     PhoneNumber VARCHAR(255) NOT NULL
//     date TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
//      ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


