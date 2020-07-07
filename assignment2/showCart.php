 <?php 
 if(!isset($_SESSION)){
 session_start();
} ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Hertz-UTS</title>
</head>
<body style="background-color: lightgrey">
  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">
      Hertz-UTS
    </a>
    <h1 style="color: white;">Car Rental Center</h1>
    <button class="btn btn-primary" onclick='carRes()'>
      Car Reservation
    </button>
  </nav><br>
  <h2 style="text-align: center;">Car Reservation</h2><br>
  <div class="container">
    <form action="checkOut.php" method="post">
      <table class="table" style="background-color: white">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Thumbnail</th>
            <th scope="col">Vehicle</th>
            <th scope="col">Price Per Day</th>
            <th scope="col">Rental Days</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          if(!empty($_SESSION['data'])){
          foreach($_SESSION['data'] as $cars){
          ?>
          <tr>
            <td>
              <?php             
              $imagePath = "./images/" . $cars['model'] . ".jpg";  
              echo '<img src="'. $imagePath . '" width="100" height="80">'; 
              ?>
            </td>
            <td>
              <?php  
              $vehicleName = $cars['modelYear'] . " - " . $cars['brand'] . " - " . $cars['model']; 
              echo $vehicleName; 
              ?>
            </td>  
            <td>
              <?php echo "$" .$cars['pricePerDay']; ?>
            </td>    
            <td>
              <input type="number" value="<?php
              if(isset($_SESSION['days'])){
              $rd = $_SESSION['days'];
              $val = $rd[$cars['carID']];
              echo $val;
            } ?>" name="rentDays[<?php echo $cars['carID'] ?>]" required min = 1>
          </td>  
          <td>
            <?php
            $button = '<button type="button" class="btn btn-danger" onclick="deleteCar('. $cars['carID'] .')">Delete</button>';
            echo $button;
            ?>
          </td>  
        </tr>

        <script language="javascript">
          function deleteCar(id){
            if(confirm("Do you want to delete this item?")){
              window.location.href='deleteCar.php?del_id=' + id + '';
              return true; }
            }
          </script>
          <?php
        }
      }
      else {
      echo "<h4>Your cart is empty!</h4>";
    }

    ?>

  </tbody>
</table>
<table>
  <tr>
    <!-- <div class="text-right"><input type="submit" name="checkOut" onclick="alert()" class="btn btn-primary" value="Proceeding to CheckOut"></div> -->
    <div class="text-right"><button type="submit" class="btn btn-primary" >Proceeding to CheckOut</button></div>
  </form>
</tr>
</table>
<br><br>
</div>
<script type="text/javascript">
  function carRes(){
    location.href = "showCart.php"; 
    return true;
  }
</script>
</body> 
</html>