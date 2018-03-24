 <html>
 <body>
 <?php
 $i = 0;
 $x = $_POST['myCheckbox'];
 $uid = $_GET['uid'];
 echo "$uid.<br>";
 //echo count($x);
for ($i = 0; $i < count($x); $i++) {
    //$y = $x[$i][0] + "_" + $x[$i][1] + " "; 
    echo $x[$i];
} 
 ?>


<!--  Hello <?php echo $_POST['0']; ?>!<br>
 Your mail is <?php echo $_POST['1']; ?>. -->

 </body>
 </html>