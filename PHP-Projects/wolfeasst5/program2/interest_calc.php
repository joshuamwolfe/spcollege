<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Interest Calculater</title>
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
        <main>
            <div class="text_align_center">
                <h1>Your loan detials as of:</h1>
                <h3><?php echo date('l, F jS, Y'); ?></h3>
                <hr>
            </div>
            <?php
            //declare input variables
            $start_date = filter_input(INPUT_POST, 'start');
            $due_date = filter_input(INPUT_POST, 'due');
            $interest = filter_input(INPUT_POST, 'interest');
            $princple = filter_input(INPUT_POST, 'borrow');

            //format date's given
            $formatted_start_date = date("m-d-Y", strtotime($start_date));
            $formatted_due_date = date('m-d-Y', strtotime($due_date));

            //format interest variable given
            $formatted_interest = $interest / 100;
            $interest_currency_format = number_format($interest, 2, '.', '');

            //display loan start date in m/d/y format
            echo 'The start date of your loan is: ' . date($formatted_start_date) . '.';
            echo '<br><br>';

            //display loan due date in m/d/y format
            echo 'The due date of your loan is: ' . date($formatted_due_date) . '.';
            echo '<br><br>';

            //display interest rate in currency format
                // echo 'Interest as a decimal' . $formatted_interest;
                echo 'Your interest rate is: ' . $interest_currency_format . '%';
                echo '<br><br>';

                //convert string to unix time stamp

                $start_string = strtotime($start_date);
                $due_string = strtotime($due_date);

                //make secounds in a year varialbe;
                $seconds_to_year = 365 * 60 * 60 * 24;

                //print out days left;
                echo "Days until due date: " . ($due_string - $start_string)/60/60/24 . " days.";
                echo '<br> <br>';

                //display princple amount of the loan;
                $princple_formatted = number_format($princple, 2, '.', '');

                // the principal amount of the loan in currency format
                echo 'You brrowed: $' . $princple_formatted;

                // the simple interest due in currency format
                echo '<br> <br>';
                $interest_dure_simple = $princple * $formatted_interest;

                $simple_interest_formatted = number_format($interest_dure_simple, 2, '.', '');


                echo 'The simple interest due is: $' . $simple_interest_formatted;

                // the amount required to repay the loan

                $loan_repaid = $simple_interest_formatted + $princple_formatted;
                echo '<br> <br>';
                echo 'To repay the loan, you need to pay: $' . $loan_repaid . '.00';





                //CODE COMMENTED OUT:
                //TODO:






                //convert days left to float for calculation
                // $days_left_float = floatval($days_left):
                    // echo '<br><br>';
                // printing result in days format
                // echo 'Number of days till due date: ' . '&nbsp;' . $days_left_formatted;

                // echo 'data type' . gettype($days_left_formatted);
            //display simple interest due in currency format

                // //convert time to years for easier calculation
                // $days_to_years = $days_left_formatted / 365;

                // $interest_days = $formatted_interest * $days_left;

                // echo 'days left ' . $days_left;
                // echo 'interest * days ' . $interest_days;

                //Simple interest formula: A = P(1 + rt);
                //use above formula to calculate interest due
                // $interest_due = $princple * (1 + ($formatted_interest * $days_left));
                // $interest_due_formatted = number_format($interest_due, 2);
                // echo 'Interest due: $' . $interest_due;


                // // creates DateTime objects
                // $date1 = date_create($start_date);
                // $date2 = date_create($due_date);

                // calculates the difference between DateTime objects
                // $days_left = date_diff($date1, $date2);
                // $days_left_formatted = $days_left->format('%R%a days');
            //display the amount needed to repay the loan with interest in currency format

            ?>

        </main>
        <div class="text_align_center">
            <footer>
                <hr> SomeWebsite &copy; -- <?php echo date("M.jS.Y"); ?>
            </footer>
        </div>
    </body>
</html>
