<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Hotel room booking system</title>
</head>
<body style="background-color: black; color: white;">
    
    <h1>Hotel Room Booking System</h1>
    ------------------------------------ <br>
    <form method="get" action="">

    <label>Book room (select day)</label><br><br>

    <button name="full" style="background-color: aquamarine; color: black;">Full Day</button> <button name="half" style="background-color: aquamarine; color: black;">Half Day</button> <button name="custom" style="background-color: aquamarine; color: black;">Custom Day</button>

    <?php
    if(isset($_REQUEST['full']))                          //using isset method for choosing day mode
    {?>
        <br><br><label>
        Select date for bookng :
        <input type="date" name="date" />
      </label>
    
      <p><button name="fullselect">Submit</button></p>

    
    <?php }
    ?>
    <?php 
  if(isset($_REQUEST['fullselect']))          //printing the input value in form
  {?>
      <br><br>
      Thank you for booking with us !! <br>
      booked date : <?php echo $_REQUEST['date'];?>              
  
  <?php }
  ?>

<?php 
    if(isset($_REQUEST['half']))
    {?>
        <br><br><label>
          Select slot :
        </label>
        <button name="morning">Morning</button> <button name="evening">Evening</button>

    <?php }?>

<?php 
    if(isset($_REQUEST['morning']))
   {?>
        <br><br><label>
        Select date for bookng :
        <input type="date" name="date" />
      </label>
    
      <p><button name="mor">Submit</button></p>

    
    <?php }
    ?>
    
    <?php 
  if(isset($_REQUEST['mor']))
  {?>
      <br><br>
      Thank you for booking with us !! <br>
      booked date : <?php echo $_REQUEST['date'];?>
      <br>
      Slot selected : Morning (8AM TO 6PM)
  
  <?php }
  ?>

<?php 
    if(isset($_REQUEST['evening']))
   {?>
        <br><br><label>
        Select date for bookng :
        <input type="date" name="date" />
      </label>
    
      <p><button name="eve">Submit</button></p>

    
    <?php }
    ?>
    
    <?php 
  if(isset($_REQUEST['eve']))
  {?>
      <br><br>
      Thank you for booking with us !! <br>
      booked date : <?php echo $_REQUEST['date'];?> <br>
      Slot selected : Evening (7PM TO 6AM)
  
  <?php }
  ?>

  
<?php 
    if(isset($_REQUEST['custom']))
   {?>
        <br><br><label>
        Select date for bookng :
        <input type="date" name="date" />
      </label><br>
      <label for="timefrom">Booking from </label>
<input type="time" id="timefrom" name="timefrom"> <br>


<label for="timefrom">Booking till  </label>
<input type="time" id="booktill" name="booktill"> <br>
  

      

    
      <p><button name="cus">Submit</button></p>

    
    <?php }
    ?>

<?php 
  if(isset($_REQUEST['cus']))
  {?>
      <br><br>
      Thank you for booking with us !! <br>
      booked date : <?php echo $_REQUEST['date'];?> <br>
      selected time : <br>
      from : <?php echo $_REQUEST['timefrom'];?> <br>
      from : <?php echo $_REQUEST['booktill'];?> <br>
  
  <?php }
  ?>

  

 