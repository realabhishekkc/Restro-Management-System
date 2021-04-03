<?php
$to_email = "kc2abhishek@gmail.com";
$subject = "Order Status";
$body = "Your order has been successfully placed.";
$headers = "From: fyprestromanagement@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    header("Location: ../products.php?msg=order-confirm");
}
?>