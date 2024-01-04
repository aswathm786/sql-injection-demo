<?php
include "./database.class.php";
$product = $_POST["product"];
if(isset($product))
{
$conn = Database::getConnection();

$sql = "SELECT * FROM products WHERE productname = '$product'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $Name = $row["productname"];
        $Description = $row["description"];
    }
} else {
    $Name = "No product found";
}
}
else{
  $Name = "";
  $Description = "";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>LAHTP ASSIGNMENT</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  


<form id="search" action="index.php" method="POST">
  <div class="main">
    <div class="form-group has-search">
      <span class="fa fa-search form-control-feedback"></span>
      <input type="text" class="form-control" placeholder="Search Ex: Phone" name="product">
    </div>
    <div class="buttons">
      <input type="submit" value="Search" class="btn btn-primary">
      <a href="../" class="home-button"><button value="sql" type="button" class="btn btn-primary">Home</button></a>
    </div>
  </div>
</form>

<div style="text-align: center;">
  <div class="sql">
    <h3><?php echo $sql ?></h3>
  </div>
</div>

<div class="description-box">
  <h2><?php echo $Name ?></h2><br>
  <p><?php echo $Description ?></p>
</div>

<div class="content">
  <p>When I used the SQL injection payload <strong>' OR productname = 'laptop</strong> as input, I observed that this payload attempts to manipulate the SQL query to retrieve product names equal to an empty string or 'laptop', effectively bypassing the original query's logic and returning all records from the database table. To overcome this vulnerability, it is crucial to sanitize all user inputs before using them in SQL queries. Implementing proper input validation and using techniques such as prepared statements or parameterized queries can significantly reduce the risk of SQL injection attacks.</p>
</div>
</body>

</html>



