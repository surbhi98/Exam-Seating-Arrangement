<!DOCTYPE html>
<html>
<head><!--header files are added here-->
<title>View:: Seating Arragement</title>
<meta charset="uft=8"/>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Champion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--/header files are added here-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="main1.css" rel="stylesheet" type="text/css" media="all" />
<style>
.con{
	padding-top:8px;
	padding-left:100px;
	padding-right:150px;
	
	padding-bottom:1000px;
	height:550px;
	background-image:url(images/brown.png);
	background-position:center;
	background-repeat:repeat-y;
	
	width:100%;
	height:700px;
	color:white;

	background-attachment:scroll;
	
}

</style>
</head>

<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-nav">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						<div class="logo">
							<a class="navbar-brand" href="index.html">Seating Arrangement <span>my first project</span></a>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					 <ul class="nav navbar-nav">
					 
						<li class="hvr-sweep-to-bottom"><a href="roomdetail.html">Room Arrangement</a></li>
						<li class="hvr-sweep-to-bottom"><a href="update.html" class="scroll">Update Room</a></li>
						<li class="hvr-sweep-to-bottom"><a href="view.html" class="scroll">View Room</a></li>
						<li class="hvr-sweep-to-bottom"><a href="logout.php" class="scroll">Logout</a></li>
						<!--<li class="hvr-sweep-to-bottom"><a href="login.html">Admin Login</a></li>
						<li class="hvr-sweep-to-bottom"><a href="faculty.php" class="scroll">Faculty</a></li>
						<li class="hvr-sweep-to-bottom"><a href="sview.html" class="scroll">Student</a></li>
						<li class="hvr-sweep-to-bottom"><a href="logout.php" class="scroll">Logout</a></li>
					
						<li class="hvr-sweep-to-bottom"><a href="register.html" class="scroll">Sign Up</a></li>
					  --></ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
<!-- //header -->
<!-- welcome 
	<div class="welcome">
		<div class="container">
			<h3>Welcome !</h3>
			<p class="ever">To take a trivial example, which of us ever undertakes laborious 
				physical exercise.</p>
			<div class="welcome-grids">
				<div class="col-md-3 welcome-grid">
					<div class="welcome-grd">
						<div class="icons">
							<span class="glyphicon glyphicon-hourglass" aria-hidden="true"></span>
						</div>
						<h4>autem vel eum</h4>
						<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam.</p>
					</div>
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
welcome -->

<div class="con">
<!--Forms-->
	
   <div class="loginscene"><div class="page-header">
        <h1></h1>
		<h2>Exam Seating Arrangement</h2>
      </div>
  <div class="bs-example" data-example-id="simple-horizontal-form">
    <!--<form class="form-horizontal" action="view.php" method="POST">
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Enter Room no.</label>
        <div class="col-sm-10">
           <input type="text" class="form-control" name="roomno" placeholder="Room no">
        </div>
      </div>
      
	  
	  
      
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default btn-info">Submit</button>
        </div>
   
    </form>-->
  </div>
 
	<!--//forms-->
	</div>
<?php
include "stylee.css";
require "connect.inc.php";
$rn=$_POST['roomno'];  $rm="ROOM".$rn;
echo $rm."<br> ";

$r=$_POST['row'];
$c=$_POST['colmn'];
//$s1=$_POST['sc11'];     //$a=$a1;
//$s2=$_POST['sc12'];    // $b=$b1;
//$s3=$_POST['sc13'];    // $d=$c1;
//$s4=$_POST['sc14'];    // $e=$g1;




$a1=$_POST['sr1'];     $a=$a1;
$b1=$_POST['sr2'];     $b=$b1;
$c1=$_POST['sr3'];     $d=$c1;
$g1=$_POST['sr4'];     $e=$g1;
$n1=$_POST['no1'];
$n2=$_POST['no2'];
$n3=$_POST['no3'];
$n4=$_POST['no4'];
$tm=$_POST['time'];
$er1=$a1+$n1;
$er2=$b1+$n2;
$er3=$c1+$n3;   $er4=$g1+$n4;
$inv1=$_POST['in1'];
$inv2=$_POST['in2'];
$q10="INSERT INTO faculty VALUES('$inv1','$rn','$tm')";
mysql_query($q10);
$q11="INSERT INTO faculty VALUES('$inv2','$rn','$tm')";
mysql_query($q11);
while($a1!=$er1)
{ $q12="INSERT INTO student VALUES('$a1','$rn')";
  mysql_query($q12);    $a1+=1;
}
while($b1!=$er2)
{ $q12="INSERT INTO student VALUES('$b1','$rn')";
  mysql_query($q12);    $b1+=1;
}
while($c1!=$er3)
{ $q12="INSERT INTO student VALUES('$c1','$rn')";
  mysql_query($q12);    $c1+=1;
}
while($g1!=$er4)
{ $q12="INSERT INTO student VALUES('$g1','$rn')";
  mysql_query($q12);    $g1+=1;
}

$q2="CREATE TABLE $rm (Rows int,col1 bigint,col2 bigint ,col3  bigint)";
mysql_query($q2);
//if($r%2==0&&$c%2==0)
if($c==4)
{  $q1="ALTER TABLE $rm ADD(col4 bigint)";
   mysql_query($q1);
   $ch=0;

/*$r="SELECT *FROM back ";
$result = @mysql_query($r) or die(mysql_error());

$rows=mysql_num_rows($result);
//while($ch!=$rows){
//$rows=mysql_num_rows($q2);
$row = mysql_fetch_array($result)  ;

//echo $row['rollno'];
//$ch++;}
  */ for($i=1;$i<=$r;++$i)
   {     if(($a==$er1||$a==$er3)&&($b==$er2||$b==$er4)) { if($a==$er1) { if($d==0){ $d='NULL'; $a='NULL';}
                                                                           else $a=$d;
                                                                         }
                                                           else $a='NULL';

                                                              if($b==$er2){ if($e==0) { $e='NULL'; $b='NULL'; } else $b=$e; }
                                                               else if($b==$er4) $b='NULL';
                                                             
															   if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1)";
                                                                               mysql_query($q);
                                                                             if($a=='NULL') $a='NULL';
                                                                             else $a=$a+2;
                                                                             if($b=='NULL') $b='NULL'; else  $b=$b+2;  //++$i;
                                                                           }
                                                               else if($i%2==0) {  $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1)";
                                                                                   mysql_query($q);
                                                                                   if($a=='NULL') $a='NULL'; else $a=$a+2;
                                                                                   if($b=='NULL') $b='NULL'; else $b=$b+2; //   ++$i;
                                                                                }


                                                       }
           else if(($a==$er1||$a==$er3)&&($b+1==$er2||$b+1==$er4))
                                                                 {    if($a==$er1) { if($d==0){ $d='NULL'; $a='NULL';}
                                                                                     else $a=$d;
                                                                                   }
                                                                      else $a='NULL';

                                                                      if($b+1==$er2){ if($e==0) { $e='NULL'; $b='NULL'; }
                                                                                      else $b=$e; }
                                                                      else if($b+1==$er4) $e='NULL';

                                                                     if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$e)";
                                                                                   mysql_query($q);
                                                                                   if($a=='NULL') $a='NULL'; else  $a=$a+2;
                                                                                   if($e=='NULL') $b='NULL'; else $b=$e+1; //++$i;
                                                                                  }
                                                                     else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$e,$a+1)";
                                                                                        mysql_query($q);
                                                                                        if($a=='NULL') $a='NULL'; else  $a=$a+2;
                                                                                        if($e=='NULL') $b='NULL'; else $b=$e+1; //++$i;
                                                                                      }
                                                                }
              else if($a==$er1||$a==$er3){
                                           if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1)";
                                                            mysql_query($q);
                                                            if($a=='NULL') $a='NULL';
                                                            else $a=$a+2;
                                                            if($b=='NULL') $b='NULL'; else  $b=$b+2;  //++$i;
                                                       }
                                           else if($i%2==0) {  $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1)";
                                                                 mysql_query($q);
                                                                 if($a=='NULL') $a='NULL'; else $a=$a+2;
                                                                 if($b=='NULL') $b='NULL'; else $b=$b+2; //   ++$i;
                                                            }
                                           }





             else  if(($a+1==$er1||$a+1==$er3)&&($b==$er2||$b==$er4)) {   if($b==$er2){ if($e==0) { $e='NULL'; $b='NULL'; } else $b=$e; }
                                                                           else $b='NULL';
                                                                          if($a+1==$er1) {   if($d==0){ $d='NULL'; }   }
                                                                            else $d='NULL';
                                                                          if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$d,$b+1)";
                                                                                        mysql_query($q);
                                                                                        if($d=='NULL') $a='NULL'; else  $a=$d+1;
                                                                                        if($b=='NULL') $b='NULL';
                                                                                        else  $b=$b+2; // ++$i;
                                                                                     }
                                                                          else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$d)";
                                                                                             mysql_query($q);
                                                                                             if($d=='NULL') $a='NULL'; else  $a=$d+1;
                                                                                             if($b=='NULL') $b='NULL';
                                                                                             else $b=$b+2;
                                                                                            //++$i;
                                                                                           }
                                                                       }
           else if(($a+1==$er1||$a+1==$er3)&&($b+1==$er2||$b+1==$er4)) {  if($b+1==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                          else $e='NULL';
                                                                          if($a+1==$er1) { if($d==0){ $d='NULL'; } }
                                                                          else $d='NULL';
                                                                          if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$d,$e)";
                                                                                            mysql_query($q);
                                                                                            if($d=='NULL') $a='NULL'; else  $a=$d+1;
                                                                                            if($e=='NULL') $b='NULL'; else $b=$e+1; //++$i;
                                                                                       }
                                                                           else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$e,$d)";
                                                                                                 mysql_query($q);
                                                                                                 if($d=='NULL') $a='NULL'; else  $a=$d+1;
                                                                                                 if($e=='NULL') $b='NULL'; else $b=$e+1; //++$i;
                                                                                            }


                                                                        }
         else if(($a+1==$er1)||($a+1==$er3)) {     if($a+1==$er1) { if($d==0){ $d='NULL'; } }
                                                   else $d='NULL';
                                                   if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$d,$b+1)";
                                                                 mysql_query($q);
                                                                 if($d=='NULL') $a='NULL';
                                                                 else $a=$d+1;
                                                                 $b=$b+2;  //++$i;
                                                               }
                                                   else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$d)";
                                                                      mysql_query($q);
                                                                      if($d=='NULL') $a='NULL'; else $a=$d+1;
                                                                      $b=$b+2;   // ++$i;
                                                                    }

                                             }



       else if(($b==$er2)||($b==$er4)) {   if($b==$er2) { if($e==0) { $e='NULL'; $b='NULL';}
                                                               else $b=$e;
                                                        }
                                           else $b='NULL';

                                        if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1)";
                                                                     mysql_query($q);
                                                                     if($d=='NULL') $a='NULL';
                                                                      else $a=$a+2;
                                                                     if($b=='NULL') $b='NULL'; else  $b=$b+2;  //++$i;
                                                       }
                                             else if($i%2==0) {  $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1)";
                                                                     mysql_query($q);
                                                                     if($d=='NULL') $a='NULL'; else $a=$a+2;
                                                                     if($b=='NULL') $b='NULL'; else $b=$b+2; //   ++$i;
                                                            }


                                          }
      else if(($b+1==$er2)||($b+1==$er4)) {  if($b+1==$er2) { if($e==0)   $e='NULL'; }
                                             else $e='NULL';
                                             if($i%2!=0) {  $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$e)";
                                                                  mysql_query($q);
                                                                  if($e=='NULL') $b='NULL'; else $b=$e+1;
                                                                  if($a=='NULL') $a='NULL';else $a=$a+2; // ++$i;
                                                               }
                                                   else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$e,$a+1)";
                                                                      mysql_query($q);
                                                                      if($e=='NULL') $b='NULL'; else  $b=$e+1;
                                                                      if($a=='NULL') $a='NULL';else  $a=$a+2; //  ++$i;
                                                                    }

                                              }



         else   {   if($i%2!=0) {
                                 $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1)";
                                 mysql_query($q);
                                 if($a=='NULL'||$b=='NULL')
                                 {    if($b=='NULL'&&$a!='NULL') { $b='NULL';$a=$a+2;}
                                      if($a=='NULL'&&$b!='NULL') { $a='NULL';$b=$b+2;}
                                      if($b=='NULL'&&$a=='NULL') { $a='NULL'; $b='NULL'; }
                                 }
                                 else   {        $a=$a+2;$b=$b+2;   }
                                                        }
                  else if($i%2==0) {  $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1)";
                                      mysql_query($q);
                                      if($a=='NULL'||$b=='NULL')
                                      {   if($b=='NULL'&&$a!='NULL') { $b='NULL';$a=$a+2;}
                                          if($a=='NULL'&&$b!='NULL') { $a='NULL';$b=$b+2;}
                                          if($b=='NULL'&&$a=='NULL') { $a='NULL'; $b='NULL'; }
                                       }
                                      else  {   $a=$a+2;$b=$b+2;    }
                                                             }
              }
          }
}
   else if($c==6)
   {  $q1="ALTER TABLE $rm ADD(col4 bigint,col5 bigint,col6 bigint)";
      mysql_query($q1);
      for($i=1;$i<=$r;$i++)
      {     if(($a==$er1||$a==$er3)&&($b==$er2||$b==$er4))     {  if($a==$er1) { if($d==0){ $d='NULL'; $a='NULL';}
                                                                                 else $a=$d;
                                                                                }
                                                                    else $a='NULL';
                                                                    if($b==$er2) { if($e==0) { $e='NULL'; $b='NULL';}
                                                                    else $b=$e;
                                                                                 }
                                                                     else $b='NULL';
                                                                    if($i%2!=0) {
                                                                                    $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$a+2,$b+2)";
                                                                                    mysql_query($q);
                                                                                    if($a=='NULL') $a='NULL'; else $a=$a+3;
                                                                                     if($b=='NULL') $b='NULL'; else $b=$b+3;
                                                                                 }
                                                                    else if($i%2==0) {            $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$b+2,$a+2)";
                                                                                                         mysql_query($q);
                                                                                                  if($a=='NULL') $a='NULL'; else $a=$a+3;
                                                                                                 if($b=='NULL') $b='NULL'; else $b=$b+3;
                                                                                     }

                                                              }


         else if(($a==$er1||$a==$er3)&&($b+1==$er2||$b+1==$er4))  {  if($b+1==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                     else if($b+1==$er4)  $e='NULL';
                                                                     if($a==$er1) { if($d==0){ $d='NULL'; $a='NULL';}
                                                                                    else $a=$d;
                                                                                  }
                                                                      else $a='NULL';
                                                                      if($i%2!=0) {
                                                                                    $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$e,$a+2,$e+1)";
                                                                                    mysql_query($q);
                                                                                    if($a=='NULL') $a='NULL'; else $a=$a+3;
                                                                                    if($b=='NULL') $b='NULL'; else $b=$e+2;

                                                                                  }


                                                                     else if($i%2==0) {    $q="INSERT INTO $rm VALUES($i,$b,$a,$e,$a+1,$e+1,$a+2)";
                                                                                           mysql_query($q);
                                                                                           if($a=='NULL') $a='NULL'; else $a=$a+3;
                                                                                           if($b=='NULL') $b='NULL'; else $b=$e+2;
                                                                                      }

                                                                  }

          else if(($a==$er1||$a==$er3)&&($b+2==$er2||$b+2==$er4))  {  if($b+2==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                       else if($b+2==$er4)  $e='NULL';
                                                                      if($a==$er1) { if($d==0){ $d='NULL'; $a='NULL';}
                                                                                     else $a=$d;
                                                                                   }
                                                                      else $a='NULL';
                                                                        if($i%2!=0) {
                                                                                      $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$a+2,$e)";
                                                                                      mysql_query($q);
                                                                                      if($e=='NULL') $b='NULL'; else $b=$e+1;
                                                                                      if($a=='NULL') $a='NULL';else $a=$a+3;  //++$i;
                                                                                    }
                                                                      else if($i%2==0) {            $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$e,$a+2)";
                                                                                                    mysql_query($q);
                                                                                                    if($e=='NULL') $b='NULL'; else $b=$e+1;
                                                                                                    if($a=='NULL') $a='NULL';else $a=$a+3;  //++$i;                                                                                   }

                                                                                        }

                                                                 }

            else if($a==$er1||$a==$er3)   {  if($a==$er1) { if($d==0){ $d='NULL'; $a='NULL';}
                                                            else $a=$d;
                                                          }
                                            else $a='NULL';
                                            if($i%2!=0) {
                                                             $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$a+2,$b+2)";
                                                             mysql_query($q);
                                                             if($b=='NULL') $b='NULL'; else $b=$b+3;
                                                             if($a=='NULL') $a='NULL';else $a=$a+3;  //++$i;

                                                         }
                                             else if($i%2==0) {            $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$b+2,$a+2)";
                                                                            mysql_query($q);
                                                                           if($b=='NULL') $b='NULL'; else $b=$b+3;
                                                                           if($a=='NULL') $a='NULL';else $a=$a+3;  //++$i;
                                                              }

                                        }



            else if(($a+1==$er1||$a+1==$er3)&&($b==$er2||$b==$er4)){   if($b==$er2){ if($e==0) { $e='NULL'; $b='NULL'; } else $b=$e; }
                                                                        else $b='NULL';
                                                                        if($a+1==$er1) {   if($d==0){ $d='NULL'; }   }
                                                                        else $d='NULL';
                                                                        if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$d,$b+1,$d+1,$b+2)";
                                                                                       mysql_query($q);
                                                                                       if($d=='NULL')  $a='NULL';else  $a=$d+2;
                                                                                       if($b=='NULL') $b='NULL';
                                                                                       else  $b=$b+3;
                                                                                     }
                                                                        else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$d,$b+2,$d+1)";
                                                                                             mysql_query($q);
                                                                                            if($d=='NULL') $a='NULL'; else  $a=$d+2;
                                                                                            if($b=='NULL') $b='NULL';
                                                                                            else $b=$b+3;

                                                                                           }

                                                                    }
             else if(($a+1==$er1||$a+1==$er3)&&($b+1==$er2||$b+1==$er4)) {  if($b+1==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                            else $e='NULL';
                                                                            if($a+1==$er1) { if($d==0){ $d='NULL'; } }
                                                                            else $d='NULL';
                                                                        //    if($d+1==$er3)
                                                                          //  if($e+1==$er4)

                                                                            if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$d,$e,$d+1,$e+1)";
                                                                                            mysql_query($q);
                                                                                            if($d=='NULL') $a='NULL'; else  $a=$d+2;
                                                                                            if($e=='NULL') $b='NULL'; else $b=$e+2; //++$i;
                                                                                         }
                                                                            else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$e,$d,$e+1,$d+1)";
                                                                                                 mysql_query($q);
                                                                                                 if($d=='NULL') $a='NULL'; else  $a=$d+2;
                                                                                                 if($e=='NULL') $b='NULL'; else $b=$e+2; //++$i;
                                                                                             }

                                                                            }


          else if(($a+1==$er1||$a+1==$er3)&&($b+2==$er2||$b+2==$er4)) {  if($b+2==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                         else $e='NULL';
                                                                         if($a+1==$er1) { if($d==0){ $d='NULL'; } }
                                                                         else $d='NULL';
                                                                         if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$d,$b+1,$d+1,$e)";
                                                                                       mysql_query($q);
                                                                                       if($d=='NULL') $a='NULL'; else  $a=$d+2;
                                                                                       if($e=='NULL') $b='NULL'; else $b=$e+1; //++$i;
                                                                                      }
                                                                         else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$d,$e,$d+1)";
                                                                                             mysql_query($q);
                                                                                             if($d=='NULL') $a='NULL'; else  $a=$d+2;
                                                                                             if($e=='NULL') $b='NULL'; else $b=$e+1;// ++$i;
                                                                                           }

                                                                    }


           else if(($a+1==$er1)||($a+1==$er3)) {   if($a+1==$er1) { if($d==0){ $d='NULL'; } }
                                                   else $d='NULL';
                                                        if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$d,$b+1,$d+1,$b+2)";
                                                                     mysql_query($q);
                                                                     if($d=='NULL') $a='NULL';
                                                                      else $a=$d+2;
                                                                      if($b=='NULL')$b='NULL';  $b=$b+3;  //++$i;
                                                                  }
                                                        else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$d,$b+2,$d+1)";
                                                                         mysql_query($q);
                                                                         if($d=='NULL') $a='NULL'; else $a=$d+2;
                                                                          if($b=='NULL')$b='NULL'; else $b=$b+3;  //  ++$i;
                                                                       }
                                                      //   if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                              }


          else if(($a+2==$er1||$a+2==$er3)&&($b==$er2||$b==$er4)){   if($b==$er2){ if($e==0) { $e='NULL'; $b='NULL'; } else $b=$e; }
                                                                     else $b='NULL';
                                                                     if($a+2==$er1) {   if($d==0){ $d='NULL'; }   }
                                                                     else $d='NULL';
                                                                     if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$d,$b+2)";
                                                                                    mysql_query($q);
                                                                                    if($d=='NULL')  $a='NULL';else  $a=$d+1;
                                                                                     if($b=='NULL') $b='NULL';
                                                                                     else  $b=$b+3;  //++$i;
                                                                                 }
                                                                     else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$b+2,$d)";
                                                                                        mysql_query($q);
                                                                                        if($d=='NULL') $a='NULL'; else  $a=$d+1;
                                                                                        if($b=='NULL') $b='NULL';
                                                                                        else $b=$b+3;
                                                                                          //      ++$i;
                                                                                      }
                                                                           //if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                               }
          else if(($a+2==$er1||$a+2==$er3)&&($b+1==$er2||$b+1==$er4)) {  if($b+1==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                         else $e='NULL';
                                                                         if($a+2==$er1) { if($d==0){ $d='NULL'; } }
                                                                         else $d='NULL';
                                                                                if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$e,$d,$e+1)";
                                                                                            mysql_query($q);
                                                                                            if($d=='NULL') $a='NULL'; else  $a=$d+1;
                                                                                            if($e=='NULL') $b='NULL'; else $b=$e+2; //++$i;
                                                                                          }
                                                                                else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$e,$a+1,$e+1,$d)";
                                                                                                 mysql_query($q);
                                                                                                 if($d=='NULL') $a='NULL'; else  $a=$d+1;
                                                                                                 if($e=='NULL') $b='NULL'; else $b=$e+2; //++$i;
                                                                                               }
                                                                                  //if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                                         }


          else if(($a+2==$er1||$a+2==$er3)&&($b+2==$er2||$b+2==$er4)) {  if($b+2==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                          else $e='NULL';
                                                                                if($a+2==$er1) { if($d==0){ $d='NULL'; } }
                                                                                else $d='NULL';
                                                                                if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$d,$e)";
                                                                                            mysql_query($q);
                                                                                            if($d=='NULL') $a='NULL'; else  $a=$d+1;
                                                                                            if($e=='NULL') $b='NULL'; else $b=$e+1;// ++$i;
                                                                                          }
                                                                                else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$e,$d)";
                                                                                                 mysql_query($q);
                                                                                                 if($d=='NULL') $a='NULL'; else  $a=$d+1;
                                                                                                 if($e=='NULL') $b='NULL'; else $b=$e+1; //++$i;
                                                                                               }

                                                                            }


                else if(($a+2==$er1)||($a+2==$er3)) {   if($a+2==$er1) { if($d==0){ $d='NULL'; } }
                                                         else $d='NULL';
                                                        if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$d,$b+2)";
                                                                     mysql_query($q);
                                                                     if($d=='NULL') $a='NULL'; else $a=$d+1;
                                                                     if($b=='NULL')$b='NULL'; else  $b=$b+3;  //++$i;
                                                                  }
                                                        else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$b+2,$d)";
                                                                         mysql_query($q);
                                                                         if($d=='NULL') $a='NULL'; else $a=$d+1;
                                                                         if($b=='NULL') $b='NULL'; else $b=$b+3;  //  ++$i;
                                                                       }

                                                   }






           else if(($b==$er2)||($b==$er4)){   if($b==$er2) { if($e==0) { $e='NULL'; $b='NULL';}
                                                         else $b=$e;
                                                       }
                                              else $b='NULL';
                                              if($i%2!=0){     $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$a+2,$b+2)";
                                                                mysql_query($q);
                                                                if($b=='NULL') $b='NULL'; else $b=$b+3;
                                                                    if($a=='NULL') $a='NULL';else $a=$a+3;  //++$i;
                                                         }
                                                else if($i%2==0) {            $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$b+2,$a+2)";
                                                                               mysql_query($q);
                                                                               if($b=='NULL') $b='NULL'; else $b=$b+3;
                                                                               if($a=='NULL') $a='NULL';else $a=$a+3;  //++$i;
                                                                 }

                                       }
             else if(($b+1==$er2)||($b+1==$er4)) {  if($b+1==$er2) { if($e==0) {  $e='NULL'; }
                                                                   }
                                                    else $e='NULL';

                                                    if($i%2!=0) {  $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$e,$a+2,$e+1)";
                                                                    mysql_query($q);
                                                                    if($e=='NULL') $b='NULL'; else $b=$e+2;
                                                                    if($a=='NULL') $a='NULL';else $a=$a+3;  //++$i;
                                                                }
                                                     else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$e,$a+1,$e+1,$a+2)";
                                                                        mysql_query($q);
                                                                        if($e=='NULL') $b='NULL'; else  $b=$e+2;
                                                                        if($a=='NULL') $a='NULL';else  $a=$a+3;   //++$i;
                                                                      }

                                                 }




            else if(($b+2==$er2)||($b+2==$er4)) {  if($b+2==$er2) { if($e==0) {  $e='NULL'; }
                                                                  } else $e='NULL';
                                                  if($i%2!=0) {  $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$a+2,$e)";
                                                                  mysql_query($q);
                                                                 if($e=='NULL') $b='NULL'; else $b=$e+1;
                                                                 if($a=='NULL') $a='NULL';else $a=$a+3;  //++$i;
                                                              }
                                                 else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$e,$a+2)";
                                                                    mysql_query($q);
                                                                    if($e=='NULL') $b='NULL'; else  $b=$e+1;
                                                                    if($a=='NULL') $a='NULL';else  $a=$a+3;   //++$i;
                                                                 }
                                                 }




           else{        if($i%2!=0){        $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$a+2,$b+2)";
                                            mysql_query($q);
                                            if($a=='NULL'||$b=='NULL'){  if($b=='NULL'&&$a!='NULL') { $b='NULL';$a=$a+3;}
                                            if($a=='NULL'&&$b!='NULL') { $a='NULL';$b=$b+3;}
                                            if($b=='NULL'&&$a=='NULL') { $a='NULL'; $b='NULL'; }
                                                                                                              }
                                             else   {        $a=$a+3;$b=$b+3;   }
                                     }
                       else if($i%2==0) {            $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$b+2,$a+2)";
                                                     mysql_query($q);
                                                     if($a=='NULL'||$b=='NULL'){   if($b=='NULL'&&$a!='NULL') { $b='NULL';$a=$a+3;}
                                                                                   if($a=='NULL'&&$b!='NULL') { $a='NULL';$b=$b+3;}
                                                                                   if($b=='NULL'&&$a=='NULL') { $a='NULL'; $b='NULL'; }
                                                                                }
                                                      else  {   $a=$a+3;$b=$b+3;    }
                                           }


                   }






    }
  }
  else if($c==8)
   {  $q1="ALTER TABLE $rm ADD(col4 bigint,col5 bigint,col6 bigint,col7 bigint,col8 bigint)";
      mysql_query($q1);
      for($i=1;$i<=$r;$i++)
     {     if(($a==$er1||$a==$er3)&&($b==$er2||$b==$er4))   {  if($a==$er1) { if($d==0){ $d='NULL'; $a='NULL';}
                                                                             else $a=$d;
                                                                             }
                                                                   else $a='NULL';
                                                           if($b==$er2){ if($e==0) { $e='NULL'; $b='NULL'; } else $b=$e; }
                                                             else $b='NULL';
                                                               if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$a+2,$b+2,$a+3,$b+3)";
                                                                                  mysql_query($q);
                                                                                       if($a=='NULL')  $a='NULL';else  $a=$a+4;
                                                                                       if($b=='NULL') $b='NULL';
                                                                                        else  $b=$b+4; // ++$i;
                                                                                     }
                                                                        else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$b+2,$a+2,$b+3,$a+3)";
                                                                                             mysql_query($q);
                                                                                            if($a=='NULL') $a='NULL'; else  $a=$a+4;
                                                                                            if($b=='NULL') $b='NULL';
                                                                                            else $b=$b+4;
                                                                                         //   ++$i;
                                                                                           }


                                                           }

                else if(($a==$er1||$a==$er3)&&($b+1==$er2||$b+1==$er4))   {  if($a==$er1) { if($d==0){ $d='NULL'; $a='NULL';}
                                                                                           else $a=$d;
                                                                                          }
                                                                             else $a='NULL';
                                                                           if($b+1==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                 else $e='NULL';

                                                                      if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$e,$a+2,$e+1,$a+3,$e+2)";
                                                                                      mysql_query($q);
                                                                                       if($a=='NULL')  $a='NULL';else  $a=$a+4;
                                                                                       if($e=='NULL') $b='NULL';
                                                                                        else  $b=$e+3; // ++$i;
                                                                                     }
                                                                        else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$e,$a+1,$e+1,$a+2,$e+2,$a+3)";
                                                                                             mysql_query($q);
                                                                                            if($a=='NULL') $a='NULL'; else  $a=$a+4;
                                                                                            if($e=='NULL') $b='NULL';
                                                                                            else $b=$e+3;
                                                                                         //   ++$i;
                                                                                           }


                                                                           }
             else if(($a==$er1||$a==$er3)&&($b+2==$er2||$b+2==$er4))   {  if($a==$er1) { if($d==0){ $d='NULL'; $a='NULL';}
                                                                                           else $a=$d;
                                                                                          }
                                                                             else $a='NULL';
                                                                           if($b+2==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                 else $e='NULL';

                                                                      if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$a+2,$e,$a+3,$e+1)";
                                                                                      mysql_query($q);
                                                                                       if($a=='NULL')  $a='NULL';else  $a=$a+4;
                                                                                       if($e=='NULL') $b='NULL';
                                                                                        else  $b=$e+2; // ++$i;
                                                                                     }
                                                                        else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$e,$a+2,$e+1,$a+3)";
                                                                                             mysql_query($q);
                                                                                            if($a=='NULL') $a='NULL'; else  $a=$a+4;
                                                                                            if($e=='NULL') $b='NULL';
                                                                                            else $b=$e+2;
                                                                                         //   ++$i;
                                                                                           }


                                     }
               else if(($a==$er1||$a==$er3)&&($b+3==$er2||$b+3==$er4))   {  if($a==$er1) { if($d==0){ $d='NULL'; $a='NULL';}
                                                                                           else $a=$d;
                                                                                          }
                                                                             else $a='NULL';
                                                                           if($b+3==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                 else $e='NULL';

                                                                      if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$a+2,$b+2,$a+3,$e)";
                                                                                      mysql_query($q);
                                                                                       if($a=='NULL')  $a='NULL';else  $a=$a+4;
                                                                                       if($e=='NULL') $b='NULL';
                                                                                        else  $b=$e+1; // ++$i;
                                                                                     }
                                                                        else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$b+2,$a+2,$e,$a+3)";
                                                                                             mysql_query($q);
                                                                                            if($a=='NULL') $a='NULL'; else  $a=$a+4;
                                                                                            if($e=='NULL') $b='NULL';
                                                                                            else $b=$e+1;
                                                                                         //   ++$i;
                                                                                           }


                                                                     }



             else if($a==$er1||$a==$er3)   {  if($a==$er1) { if($d==0){ $d='NULL'; $a='NULL';}
                                                                   else $a=$d;
                                                                                          }
                                                else $a='NULL';


                                                                      if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$a+2,$b+2,$a+3,$b+3)";
                                                                                      mysql_query($q);
                                                                                       if($a=='NULL')  $a='NULL';else  $a=$a+4;
                                                                                       if($b=='NULL') $b='NULL';
                                                                                        else  $b=$b+4; // ++$i;
                                                                                     }
                                                                        else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$b+2,$a+2,$b+3,$a+3)";
                                                                                             mysql_query($q);
                                                                                            if($a=='NULL') $a='NULL'; else  $a=$a+4;
                                                                                            if($b=='NULL') $b='NULL';
                                                                                            else $b=$b+4;
                                                                                         //   ++$i;
                                                                                           }


                                     }

                else  if(($a+1==$er1||$a+1==$er3)&&($b==$er2||$b==$er4)){   if($b==$er2){ if($e==0) { $e='NULL'; $b='NULL'; } else $b=$e; }
                                                                          else $b='NULL';
                                                                         if($a+1==$er1) {   if($d==0){ $d='NULL'; }   }
                                                                          else $d='NULL';
                                                                         if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$d,$b+1,$d+1,$b+2,$d+2,$b+3)";
                                                                                      mysql_query($q);
                                                                                       if($d=='NULL')  $a='NULL';else  $a=$d+3;
                                                                                       if($b=='NULL') $b='NULL';
                                                                                        else  $b=$b+4; // ++$i;
                                                                                     }
                                                                        else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$d,$b+2,$d+1,$b+3,$d+2)";
                                                                                             mysql_query($q);
                                                                                            if($d=='NULL') $a='NULL'; else  $a=$d+3;
                                                                                            if($b=='NULL') $b='NULL';
                                                                                            else $b=$b+4;
                                                                                          //  ++$i;
                                                                                           }
                                                                        // if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                                    }
                 else if(($a+1==$er1||$a+1==$er3)&&($b+1==$er2||$b+1==$er4)) {  if($b+1==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                 else $e='NULL';
                                                                               if($a+1==$er1) { if($d==0){ $d='NULL'; } }
                                                                                else $d='NULL';
                                                                                if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$d,$e,$d+1,$e+1,$d+2,$e+2)";
                                                                                            mysql_query($q);
                                                                                            if($d=='NULL') $a='NULL'; else  $a=$d+3;
                                                                                            if($e=='NULL') $b='NULL'; else $b=$e+3; //++$i;
                                                                                          }
                                                                                else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$e,$d,$e+1,$d+1,$e+2,$d+2)";
                                                                                                 mysql_query($q);
                                                                                                 if($d=='NULL') $a='NULL'; else  $a=$d+3;
                                                                                                 if($e=='NULL') $b='NULL'; else $b=$e+3;// ++$i;
                                                                                               }
                                                                                  //if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                                            }


                  else if(($a+1==$er1||$a+1==$er3)&&($b+2==$er2||$b+2==$er4)) {  if($b+2==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                 else $e='NULL';
                                                                               if($a+1==$er1) { if($d==0){ $d='NULL'; } }
                                                                                else $d='NULL';
                                                                                if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$d,$b+1,$d+1,$e,$d+2,$e+1)";
                                                                                            mysql_query($q);
                                                                                            if($d=='NULL') $a='NULL'; else  $a=$d+3;
                                                                                            if($e=='NULL') $b='NULL'; else $b=$e+2; //++$i;
                                                                                          }
                                                                                else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$d,$e,$d+1,$e+1,$d+2)";
                                                                                                 mysql_query($q);
                                                                                                 if($d=='NULL') $a='NULL'; else  $a=$d+3;
                                                                                                 if($e=='NULL') $b='NULL'; else $b=$e+2; //++$i;
                                                                                               }
                                                                                  //if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                                            }

                 else if(($a+1==$er1||$a+1==$er3)&&($b+3==$er2||$b+3==$er4)) {  if($b+3==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                 else $e='NULL';
                                                                               if($a+1==$er1) { if($d==0){ $d='NULL'; } }
                                                                                else $d='NULL';
                                                                                if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$d,$b+1,$d+1,$b+2,$d+2,$e)";
                                                                                            mysql_query($q);
                                                                                            if($d=='NULL') $a='NULL'; else  $a=$d+3;
                                                                                            if($e=='NULL') $b='NULL'; else $b=$e+1; //++$i;
                                                                                          }
                                                                                else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$d,$b+2,$d+1,$e,$d+2)";
                                                                                                 mysql_query($q);
                                                                                                 if($d=='NULL') $a='NULL'; else  $a=$d+3;
                                                                                                 if($e=='NULL') $b='NULL'; else $b=$e+1; //++$i;
                                                                                               }
                                                                                  //if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                                            }



                 else if(($a+1==$er1)||($a+1==$er3)) {   if($a+1==$er1) { if($d==0){ $d='NULL'; } }
                                                         else $d='NULL';
                                                        if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$d,$b+1,$d+1,$b+2,$d+2,$b+3)";
                                                                     mysql_query($q);
                                                                     if($d=='NULL') $a='NULL';
                                                                      else $a=$d+3;

                                                                         if($b=='NULL') $b='NULL'; else  $b=$b+4; // ++$i;
                                                                  }
                                                        else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$d,$b+2,$d+1,$b+3,$d+2)";
                                                                         mysql_query($q);
                                                                         if($d=='NULL') $a='NULL'; else $a=$d+3;
                                                                         if($b=='NULL') $b='NULL'; else $b=$b+4; //   ++$i;
                                                                       }
                                                       //  if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                   }


                  else if(($a+2==$er1||$a+2==$er3)&&($b==$er2||$b==$er4)){   if($b==$er2){ if($e==0) { $e='NULL'; $b='NULL'; } else $b=$e; }
                                                                               else $b='NULL';
                                                                             if($a+2==$er1) {   if($d==0){ $d='NULL'; }   }
                                                                               else $d='NULL';
                                                                             if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$d,$b+2,$d+1,$b+3)";
                                                                                           mysql_query($q);
                                                                                          if($d=='NULL')  $a='NULL';else  $a=$d+2;
                                                                                           if($b=='NULL') $b='NULL';
                                                                                            else  $b=$b+4; // ++$i;
                                                                                          }
                                                                             else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$b+2,$d,$b+3,$d+1)";
                                                                                                 mysql_query($q);
                                                                                               if($d=='NULL') $a='NULL'; else  $a=$d+2;
                                                                                                if($b=='NULL') $b='NULL';
                                                                                                else $b=$b+4;
                                                                                             //   ++$i;
                                                                                              }
                                                                             //if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                                      }
                 else if(($a+2==$er1||$a+2==$er3)&&($b+1==$er2||$b+1==$er4)) {  if($b+1==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                 else $e='NULL';
                                                                               if($a+2==$er1) { if($d==0){ $d='NULL'; } }
                                                                                else $d='NULL';
                                                                                if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$e,$d,$e+1,$d+1,$e+2)";
                                                                                            mysql_query($q);
                                                                                            if($d=='NULL') $a='NULL'; else  $a=$d+2;
                                                                                            if($e=='NULL') $b='NULL'; else $b=$e+3; //++$i;
                                                                                          }
                                                                                else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$e,$a+1,$e+1,$d,$e+2,$d+1)";
                                                                                                 mysql_query($q);
                                                                                                 if($d=='NULL') $a='NULL'; else  $a=$d+2;
                                                                                                 if($e=='NULL') $b='NULL'; else $b=$e+3;// ++$i;
                                                                                               }
                                                                            //      if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                                            }


                  else if(($a+2==$er1||$a+2==$er3)&&($b+2==$er2||$b+2==$er4)) {  if($b+2==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                  else $e='NULL';
                                                                                 if($a+2==$er1) { if($d==0){ $d='NULL'; } }
                                                                                  else $d='NULL';
                                                                                 if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$d,$e,$d+1,$e+1)";
                                                                                            mysql_query($q);
                                                                                            if($d=='NULL') $a='NULL'; else  $a=$d+2;
                                                                                            if($e=='NULL') $b='NULL'; else $b=$e+2; //++$i;
                                                                                          }
                                                                                 else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$e,$d,$e+1,$d+1)";
                                                                                                 mysql_query($q);
                                                                                                 if($d=='NULL') $a='NULL'; else  $a=$d+2;
                                                                                                 if($e=='NULL') $b='NULL'; else $b=$e+2; //++$i;
                                                                                               }
                                                                                //  if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                                            }


              else if(($a+2==$er1||$a+2==$er3)&&($b+3==$er2||$b+3==$er4)) {  if($b+3==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                  else $e='NULL';
                                                                                 if($a+2==$er1) { if($d==0){ $d='NULL'; } }
                                                                                  else $d='NULL';
                                                                                 if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$d,$b+2,$d+1,$e)";
                                                                                            mysql_query($q);
                                                                                            if($d=='NULL') $a='NULL'; else  $a=$d+2;
                                                                                            if($e=='NULL') $b='NULL'; else $b=$e+1; //++$i;
                                                                                          }
                                                                                 else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$b+2,$d,$e,$d+1)";
                                                                                                 mysql_query($q);
                                                                                                 if($d=='NULL') $a='NULL'; else  $a=$d+2;
                                                                                                 if($e=='NULL') $b='NULL'; else $b=$e+1;// ++$i;
                                                                                               }
                                                                                //  if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                                            }





              else if(($a+2==$er1)||($a+2==$er3)) {   if($a+2==$er1) { if($d==0){ $d='NULL'; } }
                                                         else $d='NULL';
                                                        if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$d,$b+2,$d+1,$b+3)";
                                                                     mysql_query($q);
                                                                     if($d=='NULL') $a='NULL';
                                                                      else $a=$d+2;
                                                                       if($b=='NULL') $b='NULL'; else $b=$b+4;//  ++$i;
                                                                  }
                                                        else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$b+2,$d,$b+3,$d+1)";
                                                                         mysql_query($q);
                                                                         if($d=='NULL') $a='NULL'; else $a=$d+2;
                                                                         if($b=='NULL') $b='NULL'; else $b=$b+4;  //  ++$i;
                                                                       }
                                                        // if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                   }
               else if(($a+3==$er1||$a+3==$er3)&&($b==$er2||$b==$er4)){   if($b==$er2){ if($e==0) { $e='NULL'; $b='NULL'; } else $b=$e; }
                                                                               else $b='NULL';
                                                                             if($a+3==$er1) {   if($d==0){ $d='NULL'; }   }
                                                                               else $d='NULL';
                                                                             if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$a+2,$b+2,$d,$b+3)";
                                                                                           mysql_query($q);
                                                                                          if($d=='NULL')  $a='NULL';else  $a=$d+1;
                                                                                           if($b=='NULL') $b='NULL';
                                                                                            else  $b=$b+4; // ++$i;
                                                                                          }
                                                                             else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$b+2,$a+2,$b+3,$d)";
                                                                                                 mysql_query($q);
                                                                                               if($d=='NULL') $a='NULL'; else  $a=$d+1;
                                                                                                if($b=='NULL') $b='NULL';
                                                                                                else $b=$b+4;
                                                                                             //   ++$i;
                                                                                              }
                                                                             //if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                                      }
                 else if(($a+3==$er1||$a+3==$er3)&&($b+1==$er2||$b+1==$er4)) {  if($b+1==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                 else $e='NULL';
                                                                               if($a+3==$er1) { if($d==0){ $d='NULL'; } }
                                                                                else $d='NULL';
                                                                                if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$e,$a+2,$e+1,$d,$e+2)";
                                                                                            mysql_query($q);
                                                                                            if($d=='NULL') $a='NULL'; else  $a=$d+1;
                                                                                            if($e=='NULL') $b='NULL'; else $b=$e+3; //++$i;
                                                                                          }
                                                                                else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$e,$a+1,$e+1,$a+2,$e+2,$d)";
                                                                                                 mysql_query($q);
                                                                                                 if($d=='NULL') $a='NULL'; else  $a=$d+1;
                                                                                                 if($e=='NULL') $b='NULL'; else $b=$e+3;// ++$i;
                                                                                               }
                                                                            //      if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                                            }


                  else if(($a+3==$er1||$a+3==$er3)&&($b+2==$er2||$b+2==$er4)) {  if($b+2==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                  else $e='NULL';
                                                                                 if($a+3==$er1) { if($d==0){ $d='NULL'; } }
                                                                                  else $d='NULL';
                                                                                 if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$a+2,$e,$d,$e+1)";
                                                                                            mysql_query($q);
                                                                                            if($d=='NULL') $a='NULL'; else  $a=$d+1;
                                                                                            if($e=='NULL') $b='NULL'; else $b=$e+2; //++$i;
                                                                                          }
                                                                                 else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$e,$a+2,$e+1,$d)";
                                                                                                 mysql_query($q);
                                                                                                 if($d=='NULL') $a='NULL'; else  $a=$d+1;
                                                                                                 if($e=='NULL') $b='NULL'; else $b=$e+2; //++$i;
                                                                                               }
                                                                                //  if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                                            }


              else if(($a+3==$er1||$a+3==$er3)&&($b+3==$er2||$b+3==$er4)) {  if($b+3==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                  else $e='NULL';
                                                                                 if($a+3==$er1) { if($d==0){ $d='NULL'; } }
                                                                                  else $d='NULL';
                                                                                 if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$a+2,$b+2,$d,$e)";
                                                                                            mysql_query($q);
                                                                                            if($d=='NULL') $a='NULL'; else  $a=$d+1;
                                                                                            if($e=='NULL') $b='NULL'; else $b=$e+1; //++$i;
                                                                                          }
                                                                                 else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$b+2,$a+2,$e,$d)";
                                                                                                 mysql_query($q);
                                                                                                 if($d=='NULL') $a='NULL'; else  $a=$d+1;
                                                                                                 if($e=='NULL') $b='NULL'; else $b=$e+1;// ++$i;
                                                                                               }
                                                                                //  if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                                            }





              else if(($a+3==$er1)||($a+3==$er3)) {   if($a+3==$er1) { if($d==0){ $d='NULL'; } }
                                                         else $d='NULL';
                                                        if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$a+2,$b+2,$d,$b+3)";
                                                                     mysql_query($q);
                                                                     if($d=='NULL') $a='NULL';
                                                                      else $a=$d+1;
                                                                      if($b=='NULL') $b='NULL'; else  $b=$b+4;//  ++$i;
                                                                  }
                                                        else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$b+2,$a+2,$b+3,$d)";
                                                                         mysql_query($q);
                                                                         if($d=='NULL') $a='NULL'; else $a=$d+1;
                                                                          if($b=='NULL') $b='NULL'; else   $b=$b+4;  //  ++$i;
                                                                       }
                                                        // if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                   }





           else if(($b==$er2)||($b==$er4)){   if($b==$er2) { if($e==0) { $e='NULL'; $b='NULL';}
                                                         else $b=$e;
                                                       }
                                              else $b='NULL';
                                              if($i%2!=0) { $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$a+2,$b+2,$a+3,$b+3)";
                                                                                      mysql_query($q);
                                                                                       if($a=='NULL')  $a='NULL';else  $a=$a+4;
                                                                                       if($b=='NULL') $b='NULL';
                                                                                        else  $b=$b+4; // ++$i;
                                                                                     }
                                              else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$b+2,$a+2,$b+3,$a+3)";
                                                                                             mysql_query($q);
                                                                                            if($a=='NULL') $a='NULL'; else  $a=$a+4;
                                                                                            if($b=='NULL') $b='NULL';
                                                                                            else $b=$b+4;
                                                                                         //   ++$i;
                                                                                           }
                                      }
            else if(($b+1==$er2)||($b+1==$er4)) {  if($b+1==$er2) { if($e==0) {  $e='NULL'; }
                                                                  }
                                                   else $e='NULL';

                                                if($i%2!=0) {  $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$e,$a+2,$e+1,$a+3,$e+2)";
                                                                mysql_query($q);
                                                               if($e=='NULL') $b='NULL'; else $b=$e+3;
                                                               if($a=='NULL') $a='NULL';else $a=$a+4;  ++$i;
                                                            }
                                                else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$e,$a+1,$e+1,$a+2,$e+2,$a+3)";
                                                                    mysql_query($q);
                                                                   if($e=='NULL') $b='NULL'; else  $b=$e+3;
                                                                   if($a=='NULL') $a='NULL';else  $a=$a+4;   ++$i;
                                                                 }
                                              }
            else if(($b+2==$er2)||($b+2==$er4)) {  if($b+2==$er2) { if($e==0) {  $e='NULL'; }
                                                                  }
                                                   else $e='NULL';
                                                   //  if($a+1==$er3) { $temp=$d; $temp='NULL';} else { if($a=='NULL') $temp='NULL';else $temp=$a+1; }

                                                  if($i%2!=0) {  $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$a+2,$e,$a+3,$e+1)";
                                                                mysql_query($q);
                                                               if($e=='NULL') $b='NULL'; else $b=$e+2;
                                                               if($a=='NULL') $a='NULL';else $a=$a+4;  ++$i;
                                                            }
                                                  else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$e,$a+2,$e+1,$a+3)";
                                                                    mysql_query($q);
                                                                   if($e=='NULL') $b='NULL'; else  $b=$e+2;
                                                                   if($a=='NULL') $a='NULL';else  $a=$a+4;   ++$i;
                                                                 }
                                                }
            else if(($b+3==$er2)||($b+3==$er4)) {  if($b+3==$er2) { if($e==0) {  $e='NULL'; }
                                                                  }
                                                   else $e='NULL';
                                                   //  if($a+1==$er3) { $temp=$d; $temp='NULL';} else { if($a=='NULL') $temp='NULL';else $temp=$a+1; }

                                                  if($i%2!=0) {  $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$a+2,$b+2,$a+3,$e)";
                                                                mysql_query($q);
                                                               if($e=='NULL') $b='NULL'; else $b=$e+1;
                                                               if($a=='NULL') $a='NULL';else $a=$a+4;  ++$i;
                                                            }
                                                  else if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$b+2,$a+2,$e,$a+3)";
                                                                    mysql_query($q);
                                                                   if($e=='NULL') $b='NULL'; else  $b=$e+1;
                                                                   if($a=='NULL') $a='NULL';else  $a=$a+4;   ++$i;
                                                                 }
                                                }

               else{

          if($i%2!=0) {
                                  $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$a+2,$b+2,$a+3,$b+3)";
                                  mysql_query($q);
                                  if($a=='NULL'||$b=='NULL'){  if($b=='NULL'&&$a!='NULL') { $b='NULL';$a=$a+4;}
                                                               if($a=='NULL'&&$b!='NULL') { $a='NULL';$b=$b+4;}
                                                               if($b=='NULL'&&$a=='NULL') { $a='NULL'; $b='NULL'; }
                                                             }
                                  else   {        $a=$a+4;$b=$b+4;   }
                       }
          if($i%2==0) {            $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$b+2,$a+2,$b+3,$a+3)";
                                   mysql_query($q);
                                   if($a=='NULL'||$b=='NULL'){   if($b=='NULL'&&$a!='NULL') { $b='NULL';$a=$a+4;}
                                                                if($a=='NULL'&&$b!='NULL') { $a='NULL';$b=$b+4;}
                                                                if($b=='NULL'&&$a=='NULL') { $a='NULL'; $b='NULL'; }
                                                             }
                                   else  {   $a=$a+4;$b=$b+4;    }
                     }
                   }


    }
  }

  // echo "Ending roll no of type 1 is ".$er1."<br>";
  // echo "Ending roll no of type 2 is ".$er2."<br>";
//}
//else if($r%2==0&&$c%2!=0)
//{
else   if($c==5)
   {   $q1="ALTER TABLE $rm ADD(col4 bigint,col5 bigint)";
      mysql_query($q1);
      for($i=1;$i<=$r;$i++)
      {   if($i%2!=0) {   if(($a==$er1||$a==$er3)&&($b==$er2||$b==$er4))   {  if($a==$er1) { if($d==0){ $d='NULL'; $a='NULL';}
                                                                                                 else $a=$d;
                                                                                            }
                                                                              else $a='NULL';
                                                                              if($b==$er2){ if($e==0) { $e='NULL'; $b='NULL'; } else $b=$e; }
                                                                              else $b='NULL';
                                                                              $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$a+2)";
                                                                                                      mysql_query($q);
                                                                                                     if($a=='NULL') $a='NULL'; else  $a=$a+3;
                                                                                                      if($b=='NULL') $b='NULL';
                                                                                                           else  $b=$b+2; // ++$i;



                                                                            }



                       else if(($a==$er1||$a==$er3)&&($b+1==$er2||$b+1==$er4))   {  if($a==$er1) { if($d==0){ $d='NULL'; $a='NULL';}
                                                                                                 else $a=$d;
                                                                                            }
                                                                              else $a='NULL';
                                                                               if($b+1==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                                 else $e='NULL';
                                                                              $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$e,$a+2)";
                                                                                                      mysql_query($q);
                                                                                                     if($a=='NULL') $a='NULL'; else  $a=$a+3;
                                                                                                      if($e=='NULL') $b='NULL';
                                                                                                           else  $b=$e+1; // ++$i;

                                                                              }
                      else  if($a==$er1||$a==$er3)              {  if($a==$er1) { if($d==0){ $d='NULL'; $a='NULL';}
                                                                                                 else $a=$d;
                                                                                            }
                                                                              else $a='NULL';

                                                                              $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$a+2)";
                                                                                                      mysql_query($q);
                                                                                                     if($a=='NULL') $a='NULL'; else  $a=$a+3;
                                                                                                      if($b=='NULL') $b='NULL';
                                                                                                           else  $b=$b+2; // ++$i;



                                                               }
                     else  if(($a+1==$er1||$a+1==$er3)&&($b==$er2||$b==$er4)) {   if($b==$er2){ if($e==0) { $e='NULL'; $b='NULL'; } else $b=$e; }
                                                                                         else $b='NULL';
                                                                                       if($a+1==$er1) {   if($d==0){ $d='NULL'; }   }
                                                                                         else $d='NULL';
                                                                                                    $q="INSERT INTO $rm VALUES($i,$a,$b,$d,$b+1,$d+1)";
                                                                                                      mysql_query($q);
                                                                                                     if($d=='NULL') $a='NULL'; else  $a=$d+2;
                                                                                                      if($b=='NULL') $b='NULL';
                                                                                                           else  $b=$b+2; // ++$i;


                                                                              //          if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                                                   }
                                else if(($a+1==$er1||$a+1==$er3)&&($b+1==$er2||$b+1==$er4)) {  if($b+1==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                                 else $e='NULL';
                                                                                               if($a+1==$er1) { if($d==0){ $d='NULL'; } }
                                                                                                else $d='NULL';
                                                                                                         $q="INSERT INTO $rm VALUES($i,$a,$b,$d,$e,$d+1)";
                                                                                                         mysql_query($q);
                                                                                                         if($d=='NULL') $a='NULL'; else  $a=$d+2;
                                                                                                          if($e=='NULL') $b='NULL'; else $b=$e+1;// ++$i;


                                                                                             // if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';

                                                                                            }

                             else if(($a+1==$er1)||($a+1==$er3)) {  if($a+1==$er1) { if($d==0){ $d='NULL'; } }
                                                                                       else $d='NULL';
                                                                                                   $q="INSERT INTO $rm VALUES($i,$a,$b,$d,$b+1,$d+1)";
                                                                                                        mysql_query($q);
                                                                                                       if($d=='NULL') $a='NULL';
                                                                                                        else $a=$d+2;
                                                                                                         $b=$b+2;  //++$i;


                                                                                //   if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                                  }


                         else if(($a+2==$er1||$a+2==$er3)&&($b==$er2||$b==$er4)) {   if($b==$er2){ if($e==0) { $e='NULL'; $b='NULL'; } else $b=$e; }
                                                                                         else $b='NULL';
                                                                                       if($a+2==$er1) {   if($d==0){ $d='NULL'; }   }
                                                                                         else $d='NULL';
                                                                                               $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$d)";
                                                                                                      mysql_query($q);
                                                                                                     if($d=='NULL') $a='NULL'; else  $a=$d+1;
                                                                                                      if($b=='NULL') $b='NULL';
                                                                                                           else  $b=$b+2; // ++$i;


                                                                                        //if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                                                   }
                         else if(($a+2==$er1||$b+2==$er3)&&($b+1==$er2||$b+1==$er4)) {  if($b+1==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                                 else $e='NULL';
                                                                                               if($a+2==$er1) { if($d==0){ $d='NULL'; } }
                                                                                                else $d='NULL';
                                                                                                    $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$e,$d)";
                                                                                                         mysql_query($q);
                                                                                                         if($d=='NULL') $a='NULL'; else  $a=$d+1;
                                                                                                          if($e=='NULL') $b='NULL'; else $b=$e+1; //++$i;


                                                                                             // if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';

                                                                                            }
                       else if(($a+2==$er1)||($a+2==$er3)) {   if($a+2==$er1) { if($d==0){ $d='NULL'; } }
                                                                   else $d='NULL';
                                                                              $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$d)";
                                                                               mysql_query($q);
                                                                               if($d=='NULL') $a='NULL';
                                                                                  else $a=$d+1;
                                                                                $b=$b+2; // ++$i;


                                                                //if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                            }



                else  if(($b==$er2)||($b==$er4)){   if($b==$er2) { if($e==0) { $e='NULL'; $b='NULL';}
                                                         else $b=$e;
                                                       }
                                                   else $b='NULL';
                                                    $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$a+2)";
                                                    mysql_query($q);
                                                    if($a=='NULL') $a='NULL'; else  $a=$a+3;
                                                    if($b=='NULL') $b='NULL';
                                                    else  $b=$b+2; // ++$i;


                                             }
                else if(($b+1==$er2)||($b+1==$er4)) {  if($b+1==$er2) { if($e==0) {  $e='NULL'; }
                                                                  }
                                                   else $e='NULL';


                                                  $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$e,$a+2)";
                                                                mysql_query($q);
                                                               if($e=='NULL') $b='NULL'; else $b=$e+1;
                                                               if($a=='NULL') $a='NULL';else $a=$a+3;  ++$i;


                                             }
                   else{       $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$b+2)";
                                   mysql_query($q);
                                   if($a=='NULL'||$b=='NULL'){   if($b=='NULL'&&$a!='NULL') { $b='NULL';$a=$a+2;}
                                                                if($a=='NULL'&&$b!='NULL') { $a='NULL';$b=$b+3;}
                                                                if($b=='NULL'&&$a=='NULL') { $a='NULL'; $b='NULL'; }
                                                             }
                                   else  {   $a=$a+2;$b=$b+3;    }


                        }



                       }

           if($i%2==0) {      if(($a==$er1||$a==$er3)&&($b==$er2)||($b==$er4))   {  if($a==$er1) { if($d==0){ $d='NULL'; $a='NULL';}
                                                                                                   else $a=$d;
                                                                                                 }
                                                                                    else $a='NULL';
                                                                                    if($b==$er2){ if($e==0) { $e='NULL'; $b='NULL'; } else $b=$e; }
                                                                                        else $b='NULL';
                                                                                        $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$b+2)";
                                                                                             mysql_query($q);
                                                                                            if($a=='NULL') $a='NULL'; else  $a=$a+2;
                                                                                            if($b=='NULL') $b='NULL';
                                                                                            else $b=$b+3;


                                                                                  }


                                else if(($a==$er1||$a==$er3)&&($b+1==$er2)||($b+1==$er4))   {  if($a==$er1) { if($d==0){ $d='NULL'; $a='NULL';}
                                                                                                   else $a=$d;
                                                                                                 }
                                                                                          else $a='NULL';
                                                                                       if($b+1==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                       else $e='NULL';

                                                                                        $q="INSERT INTO $rm VALUES($i,$b,$a,$e,$a+1,$e+1)";
                                                                                             mysql_query($q);
                                                                                            if($a=='NULL') $a='NULL'; else  $a=$a+2;
                                                                                            if($e=='NULL') $b='NULL';
                                                                                            else $b=$e+2;


                                                                                  }
                                 else if(($a==$er1||$a==$er3)&&($b+2==$er2)||($b+2==$er4))   {  if($a==$er1) { if($d==0){ $d='NULL'; $a='NULL';}
                                                                                                   else $a=$d;
                                                                                                 }
                                                                                          else $a='NULL';
                                                                                       if($b+2==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                       else $e='NULL';

                                                                                        $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$e)";
                                                                                             mysql_query($q);
                                                                                            if($a=='NULL') $a='NULL'; else  $a=$a+2;
                                                                                            if($e=='NULL') $b='NULL';
                                                                                            else $b=$e+1;


                                                                                  }
                                  else if($a==$er1||$a==$er3)   {           if($a==$er1) { if($d==0){ $d='NULL'; $a='NULL';}
                                                                                            else $a=$d;
                                                                                                 }
                                                                         else $a='NULL';

                                                                        $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$b+2)";
                                                                        mysql_query($q);
                                                                        if($a=='NULL') $a='NULL'; else  $a=$a+2;
                                                                        if($b=='NULL') $b='NULL';
                                                                        else $b=$b+3;


                                                          }
              else if(($a+1==$er1||$a+1==$er3)&&($b==$er2||$b==$er4)){   if($b==$er2){ if($e==0) { $e='NULL'; $b='NULL'; } else $b=$e; }
                                                                          else $b='NULL';
                                                                         if($a+1==$er1) {   if($d==0){ $d='NULL'; }   }
                                                                          else $d='NULL';

                                                                                      $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$d,$b+2)";
                                                                                             mysql_query($q);
                                                                                            if($d=='NULL') $a='NULL'; else  $a=$d+1;
                                                                                            if($b=='NULL') $b='NULL';
                                                                                            else $b=$b+3;
                                                                                 //           ++$i;

                                                                        // if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                                    }
                 else if(($a+1==$er1||$a+1==$er1)&&($b+1==$er2&&$b+1==$er4)) {  if($b+1==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                 else $e='NULL';
                                                                                if($a+1==$er1) { if($d==0){ $d='NULL'; } }
                                                                                 else $d='NULL';
                                                                                                $q="INSERT INTO $rm VALUES($i,$b,$a,$e,$d,$e+1)";
                                                                                                 mysql_query($q);
                                                                                                 if($d=='NULL') $a='NULL'; else  $a=$d+1;
                                                                                                 if($e=='NULL') $b='NULL'; else $b=$e+2; //++$i;

                                                                                 // if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                                            }


                  else if(($a+1==$er1||$a+1==$er3)&&($b+2==$er2||$b+2==$er4)) {  if($b+2==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                 else $e='NULL';
                                                                               if($a+1==$er1) { if($d==0){ $d='NULL'; } }
                                                                                else $d='NULL';

                                                                                             $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$d,$e)";
                                                                                                 mysql_query($q);
                                                                                                 if($d=='NULL') $a='NULL'; else  $a=$d+1;
                                                                                                 if($e=='NULL') $b='NULL'; else $b=$e+1; //++$i;

                                                                                  //if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                                            }


                  else if(($a+1==$er1)||($a+1==$er3)) {   if($a+1==$er1) { if($d==0){ $d='NULL'; } }
                                                         else $d='NULL';

                                                                    $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$d,$b+2)";
                                                                         mysql_query($q);
                                                                         if($d=='NULL') $a='NULL'; else $a=$d+1;
                                                                         $b=$b+3;  //   ++$i;

                                                         //if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                   }





           else if(($b==$er2)||($b==$er4)){   if($b==$er2) { if($e==0) { $e='NULL'; $b='NULL';}
                                                         else $b=$e;
                                                       }
                                            else $b='NULL';
                                            $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$b+2)";
                                            mysql_query($q);
                                            if($a=='NULL') $a='NULL'; else  $a=$a+2;
                                            if($b=='NULL') $b='NULL';
                                           else $b=$b+3;
                                        }
            else if(($b+1==$er2)||($b+1==$er4)) {  if($b+1==$er2) { if($e==0) {  $e='NULL'; }
                                                                  }
                                                   else $e='NULL';

                                                 $q="INSERT INTO $rm VALUES($i,$b,$a,$e,$a+1,$e+1)";
                                                 mysql_query($q);
                                                 if($e=='NULL') $b='NULL'; else  $b=$e+2;
                                                 if($a=='NULL') $a='NULL';else  $a=$a+2;   //++$i;

                                              }
            else if(($b+2==$er2)||($b+2==$er4)) {  if($b+2==$er2) { if($e==0) {  $e='NULL'; }
                                                                  }
                                                   else $e='NULL';

                                                   if($i%2==0) { $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$e)";
                                                                    mysql_query($q);
                                                                   if($e=='NULL') $b='NULL'; else  $b=$e+1;
                                                                   if($a=='NULL') $a='NULL';else  $a=$a+2;   //++$i;
                                                                 }
                                                }
              else{              $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$b+2)";
                                   mysql_query($q);
                                   if($a=='NULL'||$b=='NULL'){   if($b=='NULL'&&$a!='NULL') { $b='NULL';$a=$a+2;}
                                                                if($a=='NULL'&&$b!='NULL') { $a='NULL';$b=$b+3;}
                                                                if($b=='NULL'&&$a=='NULL') { $a='NULL'; $b='NULL'; }
                                                             }
                                   else  {   $a=$a+2;$b=$b+3;    }
                     }
          }
   }
 }
   else if($c==7)
   {      $q1="ALTER TABLE $rm ADD(col4 bigint,col5 bigint,col6 bigint,col7 bigint)";
      mysql_query($q1);
      for($i=1;$i<=$r;$i++)
      {   if($i%2!=0) {   if(($a==$er1||$a==$er3)&&($b==$er2||$b==$er4))   {  if($a==$er1) { if($d==0){ $d='NULL'; $a='NULL';}
                                                                                             else $a=$d;
                                                                                           }
                                                                              else $a='NULL';
                                                                              if($b==$er2){ if($e==0) { $e='NULL'; $b='NULL'; } else $b=$e; }
                                                                              else $b='NULL';
                                                                              $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$a+2,$b+2,$a+3)";
                                                                                                      mysql_query($q);
                                                                                                     if($a=='NULL') $a='NULL'; else  $a=$a+4;
                                                                                                      if($b=='NULL') $b='NULL';
                                                                                                           else  $b=$b+3; // ++$i;


                                                                           }
                        else if(($a==$er1||$a==$er3)&&($b+1==$er2||$b+1==$er4))   {  if($a==$er1) { if($d==0){ $d='NULL'; $a='NULL';}
                                                                                             else $a=$d;
                                                                                           }
                                                                              else $a='NULL';
                                                                               if($b+1==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                                 else $e='NULL';

                                                                              $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$e,$a+2,$e+1,$a+3)";
                                                                                                      mysql_query($q);
                                                                                                     if($a=='NULL') $a='NULL'; else  $a=$a+4;
                                                                                                      if($e=='NULL') $b='NULL';
                                                                                                           else  $b=$e+2; // ++$i;


                                                                           }

                           else if(($a==$er1||$a==$er3)&&($b+2==$er2||$b+2==$er4))   {  if($a==$er1) { if($d==0){ $d='NULL'; $a='NULL';}
                                                                                             else $a=$d;
                                                                                           }
                                                                              else $a='NULL';
                                                                               if($b+2==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                                 else $e='NULL';

                                                                              $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$a+2,$e,$a+3)";
                                                                                                      mysql_query($q);
                                                                                                     if($a=='NULL') $a='NULL'; else  $a=$a+4;
                                                                                                      if($e=='NULL') $b='NULL';
                                                                                                           else  $b=$e+1; // ++$i;


                                                                           }

                         else if($a==$er1||$a==$er3)   {  if($a==$er1) { if($d==0){ $d='NULL'; $a='NULL';}
                                                                                             else $a=$d;
                                                                                           }
                                                                              else $a='NULL';
                                                       $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$a+2,$b+2,$a+3)";
                                                       mysql_query($q);
                                                       if($a=='NULL') $a='NULL'; else  $a=$a+4;
                                                       if($b=='NULL') $b='NULL';
                                                       else  $b=$b+3; // ++$i;


                                                  }

                          else if(($a+1==$er1&&$a+1==$er3)&&($b==$er2&&$b==$er4)) {   if($b==$er2){ if($e==0) { $e='NULL'; $b='NULL'; } else $b=$e; }
                                                                                         else $b='NULL';
                                                                                       if($a+1==$er1) {   if($d==0){ $d='NULL'; }   }
                                                                                         else $d='NULL';
                                                                                                 $q="INSERT INTO $rm VALUES($i,$a,$b,$d,$b+1,$d+1,$b+2,$d+2)";
                                                                                                      mysql_query($q);
                                                                                                     if($d=='NULL') $a='NULL'; else  $a=$d+3;
                                                                                                      if($b=='NULL') $b='NULL';
                                                                                                           else  $b=$b+3; // ++$i;


                                                                                      //  if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                                                   }
                                else if(($a+1==$er1||$a+1==$er3)&&($b+1==$er2||$b+1==$er4)) {  if($b+1==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                                 else $e='NULL';
                                                                                               if($a+1==$er1) { if($d==0){ $d='NULL'; } }
                                                                                                else $d='NULL';
                                                                                                      $q="INSERT INTO $rm VALUES($i,$a,$b,$d,$e,$d+1,$e+1,$d+2)";
                                                                                                         mysql_query($q);
                                                                                                         if($d=='NULL') $a='NULL'; else  $a=$d+3;
                                                                                                          if($e=='NULL') $b='NULL'; else $b=$e+2; //++$i;


                                                                                             // if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';

                                                                                            }
                               else if(($a+1==$er1||$a+1==$er3)&&($b+2==$er2||$b+2==$er4)) {  if($b+2==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                                 else $e='NULL';
                                                                                               if($a+1==$er1) { if($d==0){ $d='NULL'; } }
                                                                                                else $d='NULL';
                                                                                                     $q="INSERT INTO $rm VALUES($i,$a,$b,$d,$b+1,$d+1,$e,$d+2)";
                                                                                                         mysql_query($q);
                                                                                                         if($d=='NULL') $a='NULL'; else  $a=$d+3;
                                                                                                          if($e=='NULL') $b='NULL'; else $b=$e+1; //++$i;


                                                                                           //   if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';

                                                                                            }

                              else if(($a+1==$er1)||($a+1==$er3)) {  if($a+1==$er1) { if($d==0){ $d='NULL'; } }
                                                                                  else $d='NULL';
                                                                           $q="INSERT INTO $rm VALUES($i,$a,$b,$d,$b+1,$d+1,$b+2,$d+2)";
                                                                                  mysql_query($q);
                                                                               if($d=='NULL') $a='NULL';
                                                                                else $a=$d+3;
                                                                                if($b=='NULL') $b='NULL';else $b=$b+3;//  ++$i;


                                                             //  if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                              }

                             else if(($a+2==$er1||$a+2==$er3)&&($b==$er2||$b==$er4)) {   if($b==$er2){ if($e==0) { $e='NULL'; $b='NULL'; } else $b=$e; }
                                                                                         else $b='NULL';
                                                                                       if($a+2==$er1) {   if($d==0){ $d='NULL'; }   }
                                                                                         else $d='NULL';
                                                                                                   $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$d,$b+2,$d+1)";
                                                                                                      mysql_query($q);
                                                                                                     if($d=='NULL') $a='NULL'; else  $a=$d+2;
                                                                                                      if($b=='NULL') $b='NULL';
                                                                                                           else  $b=$b+3; // ++$i;


                                                                                        //if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                                                   }
                            else if(($a+2==$er1||$a+2==$er3)&&($b+1==$er2||$b+1==$er4)) {  if($b+1==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                                 else $e='NULL';
                                                                                               if($a+2==$er1) { if($d==0){ $d='NULL'; } }
                                                                                                else $d='NULL';
                                                                                                         $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$e,$d,$e+1,$d+1)";
                                                                                                         mysql_query($q);
                                                                                                         if($d=='NULL') $a='NULL'; else  $a=$d+2;
                                                                                                          if($e=='NULL') $b='NULL'; else $b=$e+2; //++$i;


                                                                                            //  if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';

                                                                                            }
                            else if(($a+2==$er1||$a+2==$er3)&&($b+2==$er2||$b+2==$er4)) {  if($b+2==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                                 else $e='NULL';
                                                                                               if($a+2==$er1) { if($d==0){ $d='NULL'; } }
                                                                                                else $d='NULL';
                                                                                                      $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$d,$e,$d+1)";
                                                                                                         mysql_query($q);
                                                                                                         if($d=='NULL') $a='NULL'; else  $a=$d+2;
                                                                                                          if($e=='NULL') $b='NULL'; else $b=$e+1; //++$i;


                                                                                            //  if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';

                                                                                            }






                            else if(($a+2==$er1)||($a+2==$er3)) {   if($a+2==$er1) { if($d==0){ $d='NULL'; } }
                                                                       else $d='NULL';
                                                                          $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$d,$b+2,$d+1)";
                                                                               mysql_query($q);
                                                                               if($d=='NULL') $a='NULL';
                                                                                  else $a=$d+2;
                                                                               if($b=='NULL') $b='NULL'; else $b=$b+3; // ++$i;


                                                                //if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                            }


                           else if(($a+3==$er1||$a+3==$er3)&&($b==$er2||$b==$er4)) {   if($b==$er2){ if($e==0) { $e='NULL'; $b='NULL'; } else $b=$e; }
                                                                                         else $b='NULL';
                                                                                       if($a+3==$er1) {   if($d==0){ $d='NULL'; }   }
                                                                                         else $d='NULL';
                                                                                                   $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$a+1,$b+2,$d)";
                                                                                                      mysql_query($q);
                                                                                                     if($d=='NULL') $a='NULL'; else  $a=$d+1;
                                                                                                      if($b=='NULL') $b='NULL';
                                                                                                           else  $b=$b+3; // ++$i;


                                                                                     //   if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                                                   }
                            else if(($a+3==$er1||$a+3==$er3)&&($b+1==$er2||$b+1==$er4)) {  if($b+1==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                                 else $e='NULL';
                                                                                               if($a+3==$er1) { if($d==0){ $d='NULL'; } }
                                                                                                else $d='NULL';
                                                                                                   $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$e,$a+2,$e+1,$d)";
                                                                                                         mysql_query($q);
                                                                                                         if($d=='NULL') $a='NULL'; else  $a=$d+1;
                                                                                                          if($e=='NULL') $b='NULL'; else $b=$e+2; ++$i;


                                                                                             // if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';

                                                                                            }
                            else if(($a+3==$er1||$a+3==$er3)&&($b+2==$er2&&$b+2==$er4)) {  if($b+2==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                                 else $e='NULL';
                                                                                               if($a+3==$er1) { if($d==0){ $d='NULL'; } }
                                                                                                else $d='NULL';
                                                                                                    $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$a+2,$e,$d)";
                                                                                                         mysql_query($q);
                                                                                                         if($d=='NULL') $a='NULL'; else  $a=$d+1;
                                                                                                          if($e=='NULL') $b='NULL'; else $b=$e+1;


                                                                                        //      if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';

                                                                                            }






                            else if(($a+3==$er1)||($a+3==$er3)) {   if($a+3==$er1) { if($d==0){ $d='NULL'; } }
                                                                     else $d='NULL';
                                                                     $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$a+2,$b+2,$d)";
                                                                               mysql_query($q);
                                                                               if($d=='NULL') $a='NULL';
                                                                                  else $a=$d+1;
                                                                              if($b=='NULL') $b='NULL'; else  $b=$b+3; // ++$i;


                                                               // if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                            }



           else if(($b==$er2)||($b==$er4)){   if($b==$er2) { if($e==0) { $e='NULL'; $b='NULL';}
                                                         else $b=$e;
                                                       }
                                                 else $b='NULL';
                                                 $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$a+2,$b+2,$a+3)";
                                                       mysql_query($q);
                                                       if($a=='NULL') $a='NULL'; else  $a=$a+4;
                                                       if($b=='NULL') $b='NULL';
                                                       else  $b=$b+3; // ++$i;


                                      }
            else if(($b+1==$er2)||($b+1==$er4)) {  if($b+1==$er2) { if($e==0) {  $e='NULL'; }
                                                                  }
                                                   else $e='NULL';


                                                             $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$e,$a+2,$e+1,$a+3)";
                                                                mysql_query($q);
                                                               if($e=='NULL') $b='NULL'; else $b=$e+2;
                                                               if($a=='NULL') $a='NULL';else $a=$a+4;


                                             }

          else if(($b+2==$er2)||($b+2==$er4)) {  if($b+2==$er2) { if($e==0) {  $e='NULL'; }
                                                                  }
                                                   else $e='NULL';


                                                               $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$a+2,$e,$a+3)";
                                                                mysql_query($q);
                                                               if($e=='NULL') $b='NULL'; else $b=$e+1;
                                                               if($a=='NULL') $a='NULL';else $a=$a+4; // ++$i;


                                             }

               else{                 $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$a+2,$b+2,$a+3)";
                                  mysql_query($q);
                                  if($a=='NULL'||$b=='NULL'){  if($b=='NULL'&&$a!='NULL') { $b='NULL';$a=$a+4;}
                                                               if($a=='NULL'&&$b!='NULL') { $a='NULL';$b=$b+3;}
                                                               if($b=='NULL'&&$a=='NULL') { $a='NULL'; $b='NULL'; }
                                                             }
                                  else   {        $a=$a+4;$b=$b+3;   }

                    }


        }
           if($i%2==0) {      if(($a==$er1||$a==$er3)&&($b==$er2||$b==$er4))   {  if($a==$er1) { if($d==0){ $d='NULL'; $a='NULL';}
                                                                                                else $a=$d;
                                                                                               }
                                                                                   else $a='NULL';
                                                                                 if($b==$er2){ if($e==0) { $e='NULL'; $b='NULL'; } else $b=$e; }
                                                                                   else $b='NULL';
                                                                                    $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$b+2,$a+2,$b+3)";
                                                                                             mysql_query($q);
                                                                                            if($a=='NULL') $a='NULL'; else  $a=$a+3;
                                                                                            if($b=='NULL') $b='NULL';
                                                                                            else $b=$b+4;
                                                                                 }
                    else if(($a==$er1||$a==$er3)&&($b+1==$er2||$b+1==$er4))   {  if($a==$er1) { if($d==0){ $d='NULL'; $a='NULL';}
                                                                                                else $a=$d;
                                                                                               }
                                                                                   else $a='NULL';
                                                                              if($b+1==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                 else $e='NULL';

                                                                                    $q="INSERT INTO $rm VALUES($i,$b,$a,$e,$a+1,$e+1,$a+2,$e+2)";
                                                                                             mysql_query($q);
                                                                                            if($a=='NULL') $a='NULL'; else  $a=$a+3;
                                                                                            if($e=='NULL') $b='NULL';
                                                                                            else $b=$e+3;
                                                                                 }

                   else  if(($a==$er1||$a==$er3)&&($b+2==$er2||$b+2==$er4))   {  if($a==$er1) { if($d==0){ $d='NULL'; $a='NULL';}
                                                                                                else $a=$d;
                                                                                               }
                                                                                   else $a='NULL';
                                                                                if($b+2==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                 else $e='NULL';

                                                                                    $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$e,$a+2,$e+1)";
                                                                                             mysql_query($q);
                                                                                            if($a=='NULL') $a='NULL'; else  $a=$a+3;
                                                                                            if($e=='NULL') $b='NULL';
                                                                                            else $b=$e+2;
                                                                                 }
                 else if(($a==$er1||$a==$er3)&&($b+3==$er2||$b+3==$er4))   {  if($a==$er1) { if($d==0){ $d='NULL'; $a='NULL';}
                                                                                                else $a=$d;
                                                                                               }
                                                                                   else $a='NULL';
                                                                              if($b+3==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                 else $e='NULL';

                                                                                    $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$b+2,$a+2,$e)";
                                                                                             mysql_query($q);
                                                                                            if($a=='NULL') $a='NULL'; else  $a=$a+3;
                                                                                            if($e=='NULL') $b='NULL';
                                                                                            else $b=$e+1;
                                                                                 }
                  else if($a==$er1||$a==$er3)    {                    if($a==$er1) { if($d==0){ $d='NULL'; $a='NULL';}
                                                                                                else $a=$d;
                                                                                               }
                                                                                   else $a='NULL';
                                                                                   $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$b+2,$a+2,$b+3)";
                                                                                             mysql_query($q);
                                                                                            if($a=='NULL') $a='NULL'; else  $a=$a+3;
                                                                                            if($b=='NULL') $b='NULL';
                                                                                            else $b=$b+4;
                                                }

                 else  if(($a+1==$er1||$a+1==$er3)&&($b==$er2||$b==$er4)){   if($b==$er2){ if($e==0) { $e='NULL'; $b='NULL'; } else $b=$e; }
                                                                          else $b='NULL';
                                                                         if($a+1==$er1) {   if($d==0){ $d='NULL'; }   }
                                                                          else $d='NULL';

                                                                          $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$d,$b+2,$d+1,$b+3)";
                                                                                             mysql_query($q);
                                                                                            if($d=='NULL') $a='NULL'; else  $a=$d+2;
                                                                                            if($b=='NULL') $b='NULL';
                                                                                            else $b=$b+4;
                                                                                           // ++$i;

                                                                         //if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                                    }
                 else if(($a+1==$er1||$a+1==$er3)&&($b+1==$er2||$b+1==$er4)) {  if($b+1==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                 else $e='NULL';
                                                                                if($a+1==$er1) { if($d==0){ $d='NULL'; } }
                                                                                 else $d='NULL';
                                                                                 $q="INSERT INTO $rm VALUES($i,$b,$a,$e,$d,$e+1,$d+1,$e+2)";
                                                                                                 mysql_query($q);
                                                                                                 if($d=='NULL') $a='NULL'; else  $a=$d+2;
                                                                                                 if($e=='NULL') $b='NULL'; else $b=$e+3; //++$i;

                                                                                //  if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                                            }


                  else if(($a+1==$er1||$a+1==$er3)&&($b+2==$er2||$b+2==$er4)) {  if($b+2==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                 else $e='NULL';
                                                                               if($a+1==$er1) { if($d==0){ $d='NULL'; } }
                                                                                else $d='NULL';

                                                                                  $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$d,$e,$d+1,$e+1)";
                                                                                                 mysql_query($q);
                                                                                                 if($d=='NULL') $a='NULL'; else  $a=$d+2;
                                                                                                 if($e=='NULL') $b='NULL'; else $b=$e+2;// ++$i;

                                                                                  //if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                                            }
                 else if(($a+1==$er1||$a+1==$er3)&&($b+3==$er2||$b+3==$er4)) {  if($b+3==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                 else $e='NULL';
                                                                               if($a+1==$er1) { if($d==0){ $d='NULL'; } }
                                                                                else $d='NULL';

                                                                                  $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$d,$b+2,$d+1,$e)";
                                                                                                 mysql_query($q);
                                                                                                 if($d=='NULL') $a='NULL'; else  $a=$d+2;
                                                                                                 if($e=='NULL') $b='NULL'; else $b=$e+1; //++$i;

                                                                                  //if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                                            }

               else if(($a+1==$er1)||($a+1==$er3)) {   if($a+1==$er1) { if($d==0){ $d='NULL'; } }
                                                         else $d='NULL';

                                                                  $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$d,$b+2,$d+1,$b+3)";
                                                                         mysql_query($q);
                                                                         if($d=='NULL') $a='NULL'; else $a=$d+2;

                                                                    if($b=='NULL') $b='NULL'; else   $b=$b+4;    //++$i;

                                                       //  if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                   }

               else if(($a+2==$er1||$a+2==$er1)&&($b==$er2&&$b==$er4)){   if($b==$er2){ if($e==0) { $e='NULL'; $b='NULL'; } else $b=$e; }
                                                                          else $b='NULL';
                                                                         if($a+2==$er1) {   if($d==0){ $d='NULL'; }   }
                                                                          else $d='NULL';

                                                                                   $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$b+2,$d,$b+3)";
                                                                                             mysql_query($q);
                                                                                            if($d=='NULL') $a='NULL'; else  $a=$d+1;
                                                                                            if($b=='NULL') $b='NULL';
                                                                                            else $b=$b+4;
                                                                                         //   ++$i;

                                                                         //if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                                    }
                else if(($a+2==$er1||$a+2==$er3)&&($b+1==$er2||$b+1==$er4)) {  if($b+1==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                 else $e='NULL';
                                                                                if($a+2==$er1) { if($d==0){ $d='NULL'; } }
                                                                                 else $d='NULL';
                                                                                          $q="INSERT INTO $rm VALUES($i,$b,$a,$e,$a+1,$e+1,$d,$e+2)";
                                                                                                 mysql_query($q);
                                                                                                 if($d=='NULL') $a='NULL'; else  $a=$d+1;
                                                                                                 if($e=='NULL') $b='NULL'; else $b=$e+3;// ++$i;

                                                                                //  if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                                               }
               else if(($a+2==$er1||$a+2==$er3)&&($b+2==$er2||$b+2==$er4)) {  if($b+2==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                 else $e='NULL';
                                                                               if($a+2==$er1) { if($d==0){ $d='NULL'; } }
                                                                                else $d='NULL';

                                                                                  $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$e,$d,$e+1)";
                                                                                                 mysql_query($q);
                                                                                                 if($d=='NULL') $a='NULL'; else  $a=$d+1;
                                                                                                 if($e=='NULL') $b='NULL'; else $b=$e+2;// ++$i;

                                                                                 // if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                                            }
               else if(($a+2==$er1||$a+2==$er3)&&($b+3==$er2||$b+3==$er4)) {  if($b+3==$er2) {  if($e==0) {  $e='NULL'; } }
                                                                                 else $e='NULL';
                                                                               if($a+2==$er1) { if($d==0){ $d='NULL'; } }
                                                                                else $d='NULL';

                                                                                  $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$b+2,$d,$e)";
                                                                                                 mysql_query($q);
                                                                                                 if($d=='NULL') $a='NULL'; else  $a=$d+1;
                                                                                                 if($e=='NULL') $b='NULL'; else $b=$e+1; //++$i;

                                                                                //  if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                                            }

               else if(($a+2==$er1)||($a+2==$er3)) {   if($a+2==$er1) { if($d==0){ $d='NULL'; } }
                                                         else $d='NULL';

                                                                   $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$b+2,$d,$b+3)";
                                                                         mysql_query($q);
                                                                         if($d=='NULL') $a='NULL'; else $a=$d+1;

                                                                              if($b=='NULL') $b='NULL'; else $b=$b+4;  //  ++$i;

                                                       //  if($a==$er3) $a='NULL'; if($b==$er4) $b='NULL';
                                                   }


            else if(($b==$er2)||($b==$er4)){   if($b==$er2) { if($e==0) { $e='NULL'; $b='NULL';}
                                                         else $b=$e;
                                                       }
                                          else $b='NULL';
                                            $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$b+2,$a+2,$b+3)";
                                                                                             mysql_query($q);
                                                                                            if($a=='NULL') $a='NULL'; else  $a=$a+3;
                                                                                            if($b=='NULL') $b='NULL';
                                                                                            else $b=$b+4;
                                      }
            else if(($b+1==$er2)||($b+1==$er4)) {  if($b+1==$er2) { if($e==0) {  $e='NULL'; }
                                                                  }
                                                   else $e='NULL';

                                                        $q="INSERT INTO $rm VALUES($i,$b,$a,$e,$a+1,$e+1,$a+2,$e+2)";
                                                                    mysql_query($q);
                                                                   if($e=='NULL') $b='NULL'; else  $b=$e+3;
                                                                   if($a=='NULL') $a='NULL';else  $a=$a+3; //  ++$i;

                                              }
            else if(($b+2==$er2)||($b+2==$er4)) {  if($b+2==$er2) { if($e==0) {  $e='NULL'; }
                                                                  }
                                                   else $e='NULL';

                                                         $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$e,$a+2,$e+1)";
                                                                    mysql_query($q);
                                                                   if($e=='NULL') $b='NULL'; else  $b=$e+2;
                                                                   if($a=='NULL') $a='NULL';else  $a=$a+3;  // ++$i;

                                                }

              else if(($b+3==$er2)||($b+3==$er4)) {  if($b+3==$er2) { if($e==0) {  $e='NULL'; }
                                                                  }
                                                   else $e='NULL';

                                                             $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$b+2,$a+2,$e)";
                                                                    mysql_query($q);
                                                                   if($e=='NULL') $b='NULL'; else  $b=$e+1;
                                                                   if($a=='NULL') $a='NULL';else  $a=$a+3; //  ++$i;

                                                }






                else{
                            $q="INSERT INTO $rm VALUES($i,$b,$a,$b+1,$a+1,$b+2,$a+2,$b+3)";
                                   mysql_query($q);
                                   if($a=='NULL'||$b=='NULL'){   if($b=='NULL'&&$a!='NULL') { $b='NULL';$a=$a+3;}
                                                                if($a=='NULL'&&$b!='NULL') { $a='NULL';$b=$b+4;}
                                                                if($b=='NULL'&&$a=='NULL') { $a='NULL'; $b='NULL'; }
                                                             }
                                   else  {   $a=$a+3;$b=$b+4;    }
                     }
               }
      }

     }


    echo "Next roll no to be allotted( type 1 )is  ".$er1."<br>";
    echo "Next roll no to be allotted( type 2 )is ".$er2."<br>";

    echo "Next roll no to be allotted( type 3 )is  ".$er3."<br>";
   echo "Next roll no to be allotted( type 4 )is ".$er4."<br>";



//}


/*else if($r%2!=0&&$c%2==0)
{
   if($c==4)
 {   $q1="ALTER TABLE $rm ADD(col4 bigint)";
    mysql_query($q1);
    for($i=1;$i<=$r;$i++)
  {   $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1)";
        mysql_query($q);
            $t=$a+2;$a=$b+2;$b=$t;
  }
  }
 else if($c==6)
 {  $q1="ALTER TABLE $rm ADD(col4 bigint,col5 bigint,col6 bigint)";
    mysql_query($q1);
   for($i=1;$i<=$r;$i++)
  {   $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$a+2,$b+2)";
        mysql_query($q);
            $t=$a+3;$a=$b+3;$b=$t;
  }
 }
  echo "Ending roll no of type 1 is ".$a."<br>";
   echo "Ending roll no of type 2 is ".$b;

}


else if($r%2!=0&&$c%2!=0)
{  if($c==3)
  {
   for($i=1;$i<=$r;$i++)
  {   $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1)";
        mysql_query($q);
            $t=$a+2;$a=$b+1;$b=$t;
  }
 }
  else if($c==5)
  {     $q1="ALTER TABLE $rm ADD(col4 bigint,col5 bigint)";
       mysql_query($q1);
      for($i=1;$i<=$r;$i++)
    {   $q="INSERT INTO $rm VALUES($i,$a,$b,$a+1,$b+1,$a+2)";
        mysql_query($q);
            $t=$a+3;$a=$b+2;$b=$t;
    }
  }
  echo "Ending roll no of type 1 is ".$a."<br>" ;
   echo "Ending roll no of type 2 is ".$b;

}
*/

$rt="SELECT*FROM $rm";
//$result=mysql_query($rt);
$result = @mysql_query($rt) or die(mysql_error());
echo "<br>";
echo "INVIGILATOR 1 alloted: ".$inv1; echo "<br>";

echo "INVIGILATOR 2 alloted: ".$inv2; echo "<br>";
if($c==3)
{ echo "<table align='center' border='1'>
<tr>
<th>ROWS</th>
<th>col1</th>
<th>col2</th>
<th>col3</th>
</tr>";
 $t=1;
while($t<=$r)
{  $row = mysql_fetch_array($result)  ;

echo "<tr>";
echo "<td>" . $row['Rows'] . "</td>";
echo "<td>" . $row['col1'] . "</td>";
echo "<td>" . $row['col2'] . "</td>";
echo "<td>" . $row['col3'] . "</td>";
echo "</tr>";
$t++;
}
echo "</table>";
}
if($c==4)
{ echo "<table align='center' border='1'>
<tr>
<th>Rows</th>
<th>col1</th>
<th>col2</th>
<th>col3</th>
<th>col4</th>

</tr>";
 $t=0;
while($t!=$r)
{  $row = mysql_fetch_array($result)  ;
echo "<tr>";
echo "<td>" . $row['Rows'] . "</td>";
echo "<td>" . $row['col1'] . "</td>";
echo "<td>" . $row['col2'] . "</td>";
echo "<td>" . $row['col3'] . "</td>";
echo "<td>" . $row['col4'] . "</td>";
echo "</tr>";
$t++;
}
echo "</table>";
}
if($c==5)
{ echo "<table align='center'  border='1'>
<tr>
<th>Rows</th>
<th>col1</th>
<th>col2</th>
<th>col3</th>
<th>col4</th>
<th>col5</th>
</tr>";
 $t=0;
while($t!=$r)
{  $row = mysql_fetch_array($result)  ;
echo "<tr>";
echo "<td>" . $row['Rows'] . "</td>";
echo "<td>" . $row['col1'] . "</td>";
echo "<td>" . $row['col2'] . "</td>";
echo "<td>" . $row['col3'] . "</td>";
echo "<td>" . $row['col4'] . "</td>";
echo "<td>" . $row['col5'] . "</td>";

echo "</tr>";
$t++;
}
echo "</table>";
}
if($c==6)
{ echo "<table align='center'  border='1'>
<tr>
<th>Rows</th>
<th>col1</th>
<th>col2</th>
<th>col3</th>
<th>col4</th>
<th>col5</th>
<th>col6</th>
</tr>";
 $t=0;
while($t!=$r)
{  $row = mysql_fetch_array($result)  ;
echo "<tr>";
echo "<td>" . $row['Rows'] . "</td>";
echo "<td>" . $row['col1'] . "</td>";
echo "<td>" . $row['col2'] . "</td>";
echo "<td>" . $row['col3'] . "</td>";
echo "<td>" . $row['col4'] . "</td>";
echo "<td>" . $row['col5'] . "</td>";
echo "<td>" . $row['col6'] . "</td>";

echo "</tr>";
$t++;
}
echo "</table>";
}
if($c==7)
{ echo "<table align='center'  border='1'>
<tr>
<th>Rows</th>
<th>col1</th>
<th>col2</th>
<th>col3</th>
<th>col4</th>
<th>col5</th>
<th>col6</th>
<th>col7</th>
</tr>";
 $t=0;
while($t!=$r)
{  $row = mysql_fetch_array($result)  ;
echo "<tr>";
echo "<td>" . $row['Rows'] . "</td>";
echo "<td>" . $row['col1'] . "</td>";
echo "<td>" . $row['col2'] . "</td>";
echo "<td>" . $row['col3'] . "</td>";
echo "<td>" . $row['col4'] . "</td>";
echo "<td>" . $row['col5'] . "</td>";
echo "<td>" . $row['col6'] . "</td>";
echo "<td>" . $row['col7'] . "</td>";

echo "</tr>";
$t++;
}
echo "</table>";
}
if($c==8)
{ echo "<table align='center'  border='1'>
<tr>
<th>Rows</th>
<th>col1</th>
<th>col2</th>
<th>col3</th>
<th>col4</th>
<th>col5</th>
<th>col6</th>
<th>col7</th>
<th>col8</th>
</tr>";
 $t=0;
while($t!=$r)
{  $row = mysql_fetch_array($result)  ;
echo "<tr>";
echo "<td>" . $row['Rows'] . "</td>";
echo "<td>" . $row['col1'] . "</td>";
echo "<td>" . $row['col2'] . "</td>";
echo "<td>" . $row['col3'] . "</td>";
echo "<td>" . $row['col4'] . "</td>";
echo "<td>" . $row['col5'] . "</td>";
echo "<td>" . $row['col6'] . "</td>";
echo "<td>" . $row['col7'] . "</td>";
echo "<td>" . $row['col8'] . "</td>";
echo "</tr>";
$t++;
}
echo "</table>";
}






?>













	</div>
</div>
<!--short codes end here--></div></div>

</body>
</html>
