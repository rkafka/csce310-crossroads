<?php
$con=mysqli_connect('localhost', 'root', '','crossroads');
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$txtOrder = $_POST['txtOrder'];
$result = mysqli_query($con,"SELECT * FROM item_list where order_id ='$txtOrder'");


$bg_color = '#ff0000';

// echo "<form action='item_search.html' method='post'>";
// echo "<input type='hidden' name='edit_review_id' value='$txtOrder'>";
// echo "<input type='submit' value='Return'>";
// echo "</form>";
echo "<table border='1' style='font-size: 24px'>
<tr>
<th>order_id</th>
<th>item_id</th>
<th>item_quantity</th>
<th>list_price</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['order_id'] . "</td>";
echo "<td>" . $row['item_id'] . "</td>";
echo "<td>" . $row['item_quantity'] . "</td>";
echo "<td>" . $row['list_price'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
