
<table width="795" align="center" bgcolor="Pink">

<tr align="center">
    <td colspan="6"><h2>View All Products Here</h2></td>
</tr>

<tr align="center" border="2" bgcolor="skyblue">
    <th>S.N</th>
    <th>Title</th>
    <th>Image</th>
    <th>Price</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>

<?php
include("includes/db.php");

$get_pro = "select * from products";

$run_pro = mysqli_query($con, $get_pro); 

$i = 0;

while ($row_pro=mysqli_fetch_array($run_pro)){
    
    $pro_id = $row_pro['product_id'];
    $pro_title = $row_pro['product_title'];
    $pro_image = $row_pro['product_image'];
    $pro_price = $row_pro['product_price'];
    $i++;


?>


<tr align="center" border="2">
    <th><?php echo $i;?></th>
    <th><?php echo $pro_title;?></th>
    <th><img src ="product_images/<?php echo $pro_image;?>"width="60" height="60"/></th>
    <th><?php echo $pro_price;?></th>
    <th><a href ="index.php?edit_pro">Edit</a></th>
    <th><a href ="delete_pro.php">Delete</a></th>
</tr>
<?php } ?>




</table>