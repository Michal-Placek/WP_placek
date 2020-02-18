<?php
//název proměnné
/*
$firstname = "Michal";
$lastname = "Plaček";
$gender = "Muž";
$school = "5. Základní škola Kolín";
$email = "michal.placek@student.ossp.cz";
$phone = "792307704";
$hobbies = "Motocross, Stavění počítačů";
$birthday = "11.11.2003"
*/
$firstname = "Jan";
$lastname = "Hladík";
$gender = "Muž";
$school = "4. Základní škola Kolín";
$email = "jan.hladik@student.ossp.cz";
$phone = "721926888";
$hobbies = "PC, škola, sport";
$birthday = "22.7.2002"

?>

<!DOCTYPE html>
<html lang="cs">
<head>
	<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
 </head>
 <body>
 <h1><?php echo $firstname;?> <?php echo $lastname;?></h1>

 <li>Pohlaví</li>
 <?php echo $gender;?>
 
 <li>Škola</li>
 <?php echo $school;?>

 <li>Email</li>
 <?php echo $email;?>

 <li>Telefon</li>
 <?php echo $phone;?>    

 <li>Hobby</li>
 <?php echo $hobbies;?>

 <li>Datum narození</li>
 <?php echo $birthday;?>        
            
</body>
</html>