<!DOCTYPE html>
<html>
<head>
	<title>Add subjects to bunk master</title> 

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/addsubject.css" rel="stylesheet">


</head>
<body>
  
  <a href="homepage.html" align="center"> Homepage </a>
   <div class="container">

    <form action="addsubject.php" method="post">

     <fieldset class="form-group">

         <div class="col-lg-6">

           <label for="subject">Add Subject</label>
           <input type="text" class="form-control" id="subject" name="subject">
           <small class="text-muted">Add a subject in your current semester</small>
  
        </div>  <!-- col-lg-6  -->
 
     </fieldset>

    <button type="submit" class="btn btn-primary button">Submit</button>

    </form>
  </div>  

  <?php
    
       

$connect=mysql_connect("localhost","root","root");
mysql_select_db("hello");

       include('function.php');

       if(isset($_POST['subject'])){

          $subject=$_POST['subject'];
          $query=mysql_query("INSERT INTO `subjects` VALUES('','$subject','5','5')");
 
        
          if(mysql_affected_rows()>0){
 
             ?>

             <script>

              alert('Subject you entered has been added to database');

            </script>

          <?php

         }

       }
          
  ?>
   	 
</body>
</html>