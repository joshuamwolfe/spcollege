<?php
    require_once('database.php');
    //Safely read the city into a variable from the index.html form.
    //get city data from index.html
    $city = filter_input(INPUT_POST, 'city');
    //validate city
    if ($city == NULL || $city == FALSE) {
        echo 'Please enter a valid city';
    }

    // $query = "SELECT * FROM customers WHERE ";
    $query = "SELECT * FROM customers where city = '$city'";
    $statement = $db->prepare($query);
    $statement->bindValue(':city', $city);
    $statement->execute();
    $customers = $statement->fetchAll();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Cust_City</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <main>
            <h1>Customers by Cities:</h1>
            <table border='1'>
                <tr>
                    <th>Cust ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Zip</th>
                </tr>
            <?php
                foreach($db->query($query) as $row) {
                    echo '<td>'.$row['custid'].'</td>';
                    echo '<td>'.$row['name'].'</td>';
                    echo '<td>'.$row['address'].'</td>';
                    echo '<td>'.$row['city'].'</td>';
                    echo '<td>'.$row['state'].'</td></tr>';
                    echo '<td>'.$row['zip'].'</td></tr>';
                }
            ?>
            </table>
        </main>
    </body>
</html>
