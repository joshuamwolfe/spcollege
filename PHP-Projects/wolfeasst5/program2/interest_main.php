<!DOCTYPE html>
<html>

<head>
    <title>Number Tester</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>
    <main>
        <div class="center">
            <h1>Simple Interest Loan Calculater</h1>
            <h3><?php echo date('l, F jS, Y'); ?></h3>
        </div>


        <form action="interest_calc.php" method="post">
            <input type="hidden" name="action" value="process_data">

            <label>Start date:</label>
            <input type="date" name="start" value="Enter Start Date" onfocus="if (this.value=='Enter Start Date') this.value='';">
            <br>

            <label>Due date:</label>
            <input type="date" name="due" value="Enter Due Date" onfocus="if (this.value=='Enter Due Date') this.value='';">
            <br>

            <label>Annual Interest:</label>
            <input type="text" name="interest" value="Enter Interest Rate" onfocus="if (this.value=='Enter Interest Rate') this.value='';">
            <br>

            <label>Principle Borrowed:</label>
            <input type="text" name="borrow" value="Enter Amount Borrowed" onfocus="if (this.value=='Enter Amount Borrowed') this.value='';">
            <br>


            <label>&nbsp;</label>
            <input type="submit" value="Submit">
            <br>
        </form>
    </main>
    <div class="text_align_center">
        <footer>
            <hr> SomeWebsite &copy; -- <?php echo date("M.jS.Y"); ?>
        </footer>
    </div>
</body>
</body>

</html>
