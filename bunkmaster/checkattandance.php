<!DOCTYPE html>
<html>
<style type="text/css">
   .container{
      position: fixed;
   top:30%;
   left: 15%;
   }
</style>
<head>
   <title>
   check Attandance
   </title>
   <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
  <a href="homepage.html" align="center"> Homepage </a>
   <div class="container">
    <table  style="width:750px" class="table table-striped ">
   <thead>
      <tr>
         
         <th>Subject</th>
         <th>attendance</th>
         <th>total attandance</th>
      </tr>
   </thead>
   <?php
   $dbhost = 'localhost:3036';
   $dbuser = 'root';
   $dbpass = 'root';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn )
   {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT id  ,subject , attandance , totalatt FROM subjects';
   mysql_select_db('hello');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval )
   {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
   {
      
        
   ?>
  
   <tbody>
      <tr>
      <td> <?php echo "{$row['subject']}"; ?> </td>
      <td> <?php echo "{$row['attandance']}"; ?> </td>
      <td> <?php echo "{$row['totalatt']}"; ?> </td>
      </tr>
      
   </tbody>
   
  
   <?php
   }
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
   ?>
   </table>
   </div>
</body>
</html>