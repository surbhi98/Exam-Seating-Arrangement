                                                                                                          <?php
require('connect.inc.php');
require('core.inc.php');

if(loggedin())
{// echo "logged in";
  $username=getuser('username');
  echo "WELCOME ".$username;

  include 'roomdetail.html';

}
else
header('Location: login.html');




?>