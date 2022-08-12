<!DOCTYPE html>
<html>
  <head>
    <title>PHP Store</title>
  </head>
  <body>
    <?php
    // Using two forward slashes we create comments in php.
    // Within the php tag, we can insert values into our HTML.
    // echo "<h1>Welcome!</h1>";

    /* We define variables in PHP with a $ sign and then we need 
    to decide what the datatype for the variable will be. 
    For a string of text make sure to put the text in quotes. 
    If the value is a decimal or integer, no quotes are needed. */
    $name = "PHP Store";
    $credit = 1000;

    /* Arrays are groupings of information that can be 
    tied to a variable. Arrays have keys and keys have values. */
    $products['Computer']=750;
    $products['Car']=15000;
    $products['iPhone']=1000;
    $products['Toaster']=75;

    // Using a period (.), we can concatenate text and variables.
    echo "<h1>Welcome to ".$name."!</h1>";
    echo "<h2>You have $".$credit." in your wallet.</h2>";

    // You can access the value stored in an array like this:
    // echo "<p>A car costs $".$products['Car']."</p>";

    // Looping through the array
    foreach($products as $key => $value){
	    echo "<p>The ".$key." costs $".$value."</p>";
    }

    echo "<h2>Items you can afford</h2>";

    foreach($products as $key => $value){
        /* An "if" statement tests if a condition is true or false. 
        If true, it will run the code following it. 
        If false, it will skip that code and 
        optionally run code in an "else" statement. */
        if($value <= $credit ){
            echo "<p>".$key."</p>"; 
        }
    }

    // $amount=800;
    // $taxRate=0.0825;
    // $addedTax= $amount*$taxRate;  //amount = 800, tax = .0825
    // echo $addedTax;

    function tax_calc($amount,$tax){
        $calculate_tax = $amount*$tax;
        $amount = round($amount+$calculate_tax,2);
        return $amount;
    }

    echo tax_calc(750,0.223); /* When you refresh your page you should see the value 917.25 at the bottom of the screen. */
    ?>
  </body>
</html>