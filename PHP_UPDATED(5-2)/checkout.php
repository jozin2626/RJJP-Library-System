<?php
session_start ();
require 'includes/dbh.inc.php';
require 'item.php';

// Save new order
mysqli_query($conn, 'insert into orders(name, datecreation, username)
values("New Order", "'.date('Y-m-d').'", "acc2")');
$ordersid = mysqli_insert_id($conn);

// Save order details for new order
$cart = unserialize ( serialize ( $_SESSION ['cart'] ) );
for($i=0; $i<count($cart); $i++) {
	mysqli_query($conn, 'insert into ordersdetail(productid, ordersid, price, quantity)
values('.$cart[$i]->id.', '.$ordersid.','.$cart[$i]->price.', '.$cart[$i]->quantity.')');
}

// Clear all products in cart
unset($_SESSION['cart']);

?>
Thanks for buying products. Click <a href="main.php">here</a> to continue buy product.