<?php include('css.php');?>
<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],$_SESSION["cart_item"])) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k)
								$_SESSION["cart_item"][$k]["quantity"] = $_POST["quantity"];
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Shopping Cart</title>
</head>
<body>

<a <button type="button " id="emptybtn" class="btn btn-danger btn-md pull-right" href="index.php?action=empty">Empty Cart</button></a>
<?php
if(isset($_SESSION["cart_item"])){
    $item_total = 0;
?>	
<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading clearfix">
  	<h6 class="panel-title pull-left" style="padding-top: 7.5px;">Your Cart</h6>
  		<div class="input-group-btn pull-right">
            <a href="index.php?action=empty" class="btn btn-danger btn-md active" role="button">Empty Cart</a>
        </div>  
  </div>
  	<table class = "table table-striped table-hover">
		<tbody>
			<tr>
			<th><strong>Name</strong></th>
			<th><strong>Code</strong></th>
			<th><strong>Quantity</strong></th>
			<th><strong>Price</strong></th>
			<th><strong>Action</strong></th>
			</tr>	
	<?php		
	    foreach ($_SESSION["cart_item"] as $item){
			?>
					<tr class="active">
						<td><strong><?php echo $item["name"]; ?></strong></td>
						<td><?php echo $item["code"]; ?></td>
						<td><?php echo $item["quantity"]; ?></td>
						<td align=left><?php echo "$".$item["price"]; ?></td>
						<td align=left><a href="index.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction">Remove Item</a></td>
					</tr>
					<?php
	        $item_total += ($item["price"]*$item["quantity"]);
			}
			?>
		
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td colspan="5"><strong>Total:</strong> <?php echo "$".$item_total; ?></td>
				
			</tr>
		</tbody>
	</table>
	<div class="panel-footer clearfix">
		<a href="https://www.braintreepayments.com/" class="btn btn-success btn-md active pull-right" role="button">Checkout</a>
	</div>
	
</div>
		
  <?php
}
?>
<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading">Products</div>
    <!-- Table -->
  <table class="table">
  	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
		<div class="product-item">
			<form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
			<div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
			<div><strong><?php echo $product_array[$key]["name"]; ?></strong></div>
			<div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
			<div><input type="number" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
			</form>
		</div>
	<?php
			}
	}
	?>
  </table>
</div>
</body>
</html>