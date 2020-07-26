<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "search");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM product
  WHERE Pname LIKE '%".$search."%'
  OR Price LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM product  ORDER BY ID
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Product Name</th>
     <th>Price</th>
         </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["Pname"].'</td>
    <td>'.$row["Price"].'</td>
       </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}
