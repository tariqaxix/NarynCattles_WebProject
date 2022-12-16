<html> 
  <head> 
  <title> Database Creation </title> 
  <style>
    table,th,td{
      border: 1px solid black;
      border-collapse: collapse;
      border-color: skyblue;
    }
    th,td{
      text-align: center;
      padding: 5px;
    }
    table tr:nth-child(even){
      background-color: skyblue;
    }

    table tr:nth-child(odd){
      background-color: whitesmoke;
    }
    
  </style>
  </head> 
  

<?php
$con = new mysqli("localhost","root","");


// If database is not already existing, then create one

if (!mysqli_select_db($con,"form_DB")){
	
// Create database
 mysqli_query($con,"CREATE DATABASE form_DB");
 print("Database created successfully. <br />");
 }	
   

   // Create table
   mysqli_select_db($con,"form_DB");
   $sql = "CREATE TABLE info (FirstName varchar(30), 
           Email varchar(30), Sub varchar(15), Msg varchar(30))";
   
   // Execute query
   mysqli_query($con,$sql);
//}
//else {
	
	
		
   mysqli_select_db($con,"form_DB");
   $sql="INSERT INTO info  (FirstName, Email, Sub, Msg) 
   VALUES ('$_POST[firstname]','$_POST[email]','$_POST[sub]','$_POST[message]')";

   if (!mysqli_query($con,$sql)){
     die('Error executing the query');
   }
   
   
//}
mysqli_close($con);
?> 


<?php
  $con = mysqli_connect("localhost","root","");
  if (!$con){
    die('Could not connect to localhost'. mysqli_error());
  }
  mysqli_select_db($con,"form_DB");
  $result = mysqli_query($con,"SELECT * FROM info ");
  mysqli_close($con);
?>
<table style="width: 100%;">

  <tr style="background-color: skyblue; color: white; font-weight: bold"> 
     
  <td> Id </td> <td> Name </td> <td> Email </td> <td> Subject </td> <td>Message</td> </tr>


         <?php
            // fetch each record in result set
            for ( $counter = 1; $row = mysqli_fetch_row( $result );$counter++ ) {
          print( "<tr>" );
		  print("<td>". $counter ."</td>");
          foreach ( $row as $key => $value ) 
		     print( "<td>$value</td>" );
          print( "</tr>" );
      } // end for
   ?>
         <!-- end PHP script -->

       </table>
	   <br>
   <center> <a href="contact.html"> Back </a> </center>
 </body> 
</html>
