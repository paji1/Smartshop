<?php
if (isset($_POST['signup'])) {

  $email = $_POST['email'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $password = $_POST['password'];
  $address = $_POST['address'];
  $city = $_POST['city'];




  include 'db.php';

  //connecting & inserting data

  $query = "INSERT INTO users(email,
firstname,
lastname,
password,
address,
city,

role) VALUES (
'$email',
'$firstname',
'$lastname',
'$password',
'$address',
'$city',

'client')";

if ($connection->query($query) === TRUE) {


         echo "<div class='center-align'>
         <h5 class='black-text'>Welcome <span class='green-text'>$firstname</span> Please Log In</h5><br><br>
         <a class='button-rounded btn waves-effects waves-light'>Log In</a>
         </div>";

     } else {
         echo "<h5 class='red-text'>Error: " . $query . "</h5>" . $connection->error;
     }

     $connection->close();

}

?>
