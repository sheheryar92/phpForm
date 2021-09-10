<!DOCTYPE html>
<html>
<head>
	<title>PHP FORM</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<style> 
form {
    width: 50%;
    margin: auto;
}
</style>

</head>
<body>
<form method="post">
   
  <div class="mb-3">
        <label class="form-label">Student Name</label>
    <input
      name="sName"
      type="text"
      class="form-control"
      placeholder="First name"
    />  
  </div>

     
  <div class="mb-3">
        <label class="form-label">Father Name</label>
    <input
      name="fName"
      type="text"
      class="form-control"
      placeholder="First name"
    /> 
  </div>

  <div class="mb-3">
       <label class="form-label">Mobile Number</label>
    <input
      name="mNumber"
      type="number"
      class="form-control"
      placeholder="Mobile Number"
    />  
  </div>

     
  <div class="mb-3">
      <label class="form-label">Cnic Number</label>
    <input
      name="cNumber"
      type="number"
      class="form-control"
      placeholder="Cnic Number"
    /> 
  </div>

  <div class="mb-3">
      <label class="form-label">Email Adress</label>

     
  <input
    name="email"
    type="email"
    class="form-control"
    id="exampleInputEmail1"
    aria-describedby="emailHelp"
  />

       
</div>
     
  

  <button name='sButtom' type="submit" class="btn btn-primary">Submit</button>
</form>



<?php
if(isset($_POST['sButtom'])){
echo "Dear"." ".$_POST['sName']."."."<br>";
echo "Thank For Registring at the protec".' '.$_POST['sName'].'.'.'Your following details have been Recived'.'<br>';
echo "Father Name :"." ".$_POST['fName']."."."<br>";
echo "Mobile Number :"." ".$_POST['mNumber']."."."<br>";
echo "Cnic Number :"." ".$_POST['cNumber']."."."<br>";
echo "Email Adress :"." ".$_POST['email']."."."<br>";

}else{
	echo "Kindly fill the form";
}
?>
</body>


</html>
