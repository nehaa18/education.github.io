<?php include 'contact.php'; ?> 
<?php 
  $servername = "localhost";
$username = "root";
$password = "";
$database = "contact_form";
// Creating connection
$conn = mysqli_connect($servername, $username, $password,$database);
if(!$conn){
 echo "Sorry we fail to connect".mysqli_connect_error();
}
else{
 echo "Connection is successfull<br>";
}
$sql = "select * from contact";
$run= mysqli_query($conn, $sql);
/*{
  echo $rows['name'];
  echo "<br>";
  echo $rows['email'];
  echo "<br>";
}8*/
if(isset($_POST['submit'])){
    $name=mysqli_real_escape_string($conn,strip_tags($_POST['name']));
    $email=mysqli_real_escape_string($conn,strip_tags($_POST['email']));
    $subject=mysqli_real_escape_string($conn,strip_tags($_POST['subject']));
    $msg=mysqli_real_escape_string($conn,strip_tags($_POST['msg']));
  
$ins_sql = "INSERT INTO `contact` (name, email, subject, msg) VALUES ('$name','$email', '$subject', '$msg')"; 
if( mysqli_query($conn, $ins_sql))
{ 
 echo "Insertin succesfull";
}
else{
    echo "not inserted";
}
}

?>
