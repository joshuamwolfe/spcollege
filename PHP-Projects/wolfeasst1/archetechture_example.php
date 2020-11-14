<?php
    //primary data
    $item_description = filter_input(INPUT_POST, 'item_description');
    $unit_price = filter_input(INPUT_POST, 'unit_price', FILTER_VALIDATE_FLOAT);
    $quantity = filter_input(INPUT_POST, 'quantity', FILTER_VALIDATE_INT);

    //primary data calcluated
    $subtotal = $unit_price * $quantity;
    $sales_tax = $subtotal * .07;
    $total = $subtotal + $sales_tax;

    //formated numbers
    $formatted_unit_price = '$'.number_format($unit_price, 2);
    $formatted_subtotal = '$'.number_format($subtotal, 2);
    $formatted_sales_tax = '$'.number_format($sales_tax, 2);
    $formatted_total = '$'.number_format($total, 2);

    //validate unit Price
    if ($unit_price === FALSE) {
      $errormessage = 'Unit price must be a valid number.';
      echo $errormessage;
    } else if ($unit_price <= FALSE) {
      $errormessage = 'Unit price must be greater than zero.';
      echo $errormessage;

    //validate quantity
    } else if ($quantity === FALSE) {
      $errormessage = 'Quantity must be a valid number.';
      echo $errormessage;
    } else if ($quantity <= 0) {
      $errormessage = 'Quantity must be greater than zero.';
      echo $errormessage;

    //IF nothing invalid set empty string
    } else {
      $errormessage = '';
    }

    //validate quantity
    //iferror mesage exists, go the the index page.    
    if ($errormessage != '') {
      include('index.html');
      exit();
    }

$content_head = '
<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>';

print $content_head;
$content_body_top = '
<body>
    <main>
        <h1>Checkout - ' . date('M.j.Y').'</h1>

        <label>Item Description:</label>
        <span>'. htmlspecialchars($item_description);
print $content_body_top;
        ?></span><br>

        <label>Price:</label>
        <span><?php echo htmlspecialchars($formatted_unit_price);?></span><br>

        <label>Quantity:</label>
        <span><?php echo htmlspecialchars($quantity);?></span><br>

        <label>Subtotal:</label>
        <span><?php echo $formatted_subtotal;?></span><br>

        <label>Sales Tax:</label>
        <span><?php echo $formatted_sales_tax;?></span><br>

        <label>Total:</label>
        <span><?php echo $formatted_total;?></span><br>
    </main>
</body>
</html>
