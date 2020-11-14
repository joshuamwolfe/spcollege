<!DOCTYPE html>
<html>
  <head>
    <title>Howling Pizza</title>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' type='text/css' href='main.css'>
  </head>
  <body>
    <main>
      <form action='readform.php' method='post'>
        <fieldset>
          <legend><h1>Your Pizza Order:</h1></legend>
          <?php
          //read pizza size
          $pizza = filter_input(INPUT_POST, 'pizza');
          $pizza_prices = array('large' => 13.00, 'medium' => 10.00, 'small' => 7.00);
          $total = $pizza_prices[$pizza];

          //read toppings
          $top_price = 1.25;
          $toppings = filter_input(INPUT_POST, 'topping',
                  FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
          echo 'You selected a ' . $pizza . ' pizza @ $' . number_format($total, 2) . '.<br>';
          if ($toppings != NULL) {
            $num_top = count($toppings);
            echo '<br>You chose ' . $num_top . ' toppings @ $' . $top_price . ' each:<br>';
            foreach ($toppings as $key => $value) {
              echo $value . '<br>';
            }
          }
          $total += $num_top * 1.25;

          // read selected sides
          $sides = filter_input(INPUT_POST, 'sides',
                  FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
          if ($sides != NULL) {
            $num_sides = count($sides);
            echo '<br>You have selected ' . $num_sides . ' sides @ $3.00 each:<br>';
            foreach ($sides as $key => $value) {
              echo $value . '<br>';
            }
          }
          $total += $num_sides * 3.00;


          //read text area
          $review = filter_input(INPUT_POST, 'review');
          $review = nl2br($review, false);  // newlines to br tags
          if ($review != '') {
            echo '<br>Here is your special request:<br>';
            echo $review;
            echo '<br>';
          }

          //read total amount ordered at delivery
          echo '<br>Amount due upon delivery $' . number_format($total, 2) . '<br><br>';


          //read phone & address information
          $phone = filter_input(INPUT_POST, 'phone');
          $one = filter_input(INPUT_POST, 'one');
          $two = filter_input(INPUT_POST, 'two');
          echo 'Your order will be delivered to: <br>';
          echo 'Address: <br>' . $one . '<br>' . $two . '<br><br>';
          echo 'Phone: <br>';
          echo $phone;


          //validate phone / addr1


          ?>
          <h3> Thank's for ordering from howling pizza!</h3 >
        </fieldset>
      </form>
    </main>

  </body>
</html>
