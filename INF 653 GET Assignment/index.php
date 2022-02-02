<?php
#variables
$name = "David Sutton"//string
$greeting = "Hello, my name is" 
$numb = 27; //integer
?>

<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset= "UTF-8">
<meta http-equiv= "X-UA Compatible" content= "IE = edge">
<meta name="viewport" content= "width-device-width, initial-scale=1.0">
<title> Week 2 </title>
</head>

<body>
    <?php echo $greeting ?>
     <?php echo $numb ?>

     <h1><?php echo $greeting . $numb ?></h1>
     <?php echo $numb * 365?>
     <?php $counter++;
     echo $counter;
     ?>

     <?php
     if($numb => "27"){
   echo " and I am old enoough to vote in the United States."
} else {
echo "anI am not old enoguht to vote in the Untied States."
}
?>
     
    <?php
// Return current date from the remote server
$date = date('d-m-y');
echo $date;
?>
</body>
</html>