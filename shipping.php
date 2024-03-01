 
<?php
    // if not set, set to nothing
    $first_name = isset($first_name) ? $first_name : '';
    $last_name = isset($last_name) ? $last_name : '';
    $street_address = isset($street_address) ? $street_address : '';
    $city = isset($city) ? $city : '';
    $state = isset($state) ? $state : '';
    $zip_code = isset($zip_code) ? $zip_code : '';
    $ship_date = isset($ship_date) ? $ship_date : '';
    $order_number = isset($order_number) ? $order_number : '';
    $package_dimension_l = isset($package_dimension_l) ? $package_dimension_l : '';
    $package_dimension_w = isset($package_dimension_w) ? $package_dimension_w : '';
    $package_dimension_h = isset($package_dimension_h) ? $package_dimension_h : '';
    $declared_value = isset($declared_value) ? $declared_value : '';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="main.css">
        
        <title>Sip & Stir</title>
        <link rel="icon" href="images/tea-cup.png">
        

    </head>
    <body>
        <header>
            <h1>Sip & Stir</h1>

            <!-- navigatinal bar -->
            <nav class="mainNav">
                <a href="home.html">Home</a> |
                <a href="shipping.php">Shipping</a> |
                <a href="product.php">Products</a>
            </nav>
            
            <h2>Shipping</h>
        </header>
        <main>
            
            <!-- display error message -->
            <?php
                if(!empty($error_message)){
                    echo "<p>";
                    echo "Error: <br>".$error_message;
                    echo "</p>";
                }
            ?>

            <form method="post" action="shipping_out.php">
                <section>
                    <div>
                        <label >First Name:</label>
                        <input class="box" type="text" id="first_name" name="first_name" value="<?php echo htmlspecialchars($first_name); ?>">
                    </div>
                    
                    <div>
                        <label >Last Name:</label>
                        <input class="box" type="text" id="last_name" name="last_name" value="<?php echo htmlspecialchars($last_name); ?>"> 
                    </div>

                    <div>
                        <label >Street Address:</label>
                        <input class="box"type="text" name="street_address" value="<?php echo htmlspecialchars($street_address); ?>"> 
                    </div>

                    <div>
                        <label >City:</label>
                        <input class="box" type="text" name="city" value="<?php echo htmlspecialchars($city); ?>"> 
                    </div>

                    <div>
                        <label>State:</label>
                        <select class="box" id="select_state" name="state">
                            <option value= "<?php echo $state;?>"><?php echo $state;?></option>
                            <option value="AL">AL</option>
                            <option value="AK">AK</option>
                            <option value="AZ">AZ</option>
                            <option value="AR">AR</option>
                            <option value="CA">CA</option>
                            <option value="CO">CO</option>
                            <option value="CT">CT</option>
                            <option value="DE">DE</option>
                            <option value="FL">FL</option>
                            <option value="GA">GA</option>
                            <option value="HI">HI</option>
                            <option value="ID">ID</option>
                            <option value="IL">IL</option>
                            <option value="IN">IN</option>
                            <option value="IA">IA</option>
                            <option value="KS">KS</option>
                            <option value="KY">KY</option>
                            <option value="LA">LA</option>
                            <option value="ME">ME</option>
                            <option value="MD">MD</option>
                            <option value="MA">MA</option>
                            <option value="MI">MI</option>
                            <option value="MN">MN</option>
                            <option value="MS">MS</option>
                            <option value="MO">MO</option>
                            <option value="MT">MT</option>
                            <option value="NE">NE</option>
                            <option value="NV">NV</option>
                            <option value="NH">NH</option>
                            <option value="NJ">NJ</option>
                            <option value="NM">NM</option>
                            <option value="NY">NY</option>
                            <option value="NC">NC</option>
                            <option value="ND">ND</option>
                            <option value="OH">OH</option>
                            <option value="OK">OK</option>
                            <option value="OR">OR</option>
                            <option value="PA">PA</option>
                            <option value="RI">RI</option>
                            <option value="SC">SC</option>
                            <option value="SD">SD</option>
                            <option value="TN">TN</option>
                            <option value="TX">TX</option>
                            <option value="UT">UT</option>
                            <option value="VT">VT</option>
                            <option value="VA">VA</option>
                            <option value="WA">WA</option>
                            <option value="WV">WV</option>
                            <option value="WI">WI</option>
                            <option value="WY">WY</option>
                        </select>
                    </div>

                    <div>
                        <label >Zip Code:</label>
                        <input class="box"type="text" name="zip_code" value="<?php echo htmlspecialchars($zip_code); ?>"> 
                    </div>

                    <div>
                        <label >Ship Date:</label>
                        <input class="box" type="date"  name="ship_date" value="<?php echo htmlspecialchars($ship_date); ?>"> 
                    </div>


                    <div>
                        <label>Order Number:</label>
                        <input class="box" type="text" name="order_number" value="<?php echo htmlspecialchars($order_number); ?>"> 
                    </div>

                    <div>
                        <label>Package Dimensions(inches):</label>
                        <input class="box-dimension" type="text" placeholder="length" name="package_dimension_l" value="<?php echo htmlspecialchars($package_dimension_l); ?>"> 
                        <input class="box-dimension " type="text" placeholder="width" name="package_dimension_w" value="<?php echo htmlspecialchars($package_dimension_w); ?>"> 
                        <input class="box-dimension" type="text"  placeholder="height" name="package_dimension_h" value="<?php echo htmlspecialchars($package_dimension_h); ?>"> 
                    
                    </div>
                    
                    
                    <div>
                        <label >Declared Value:</label>
                        <input class="box" type="text"  name="declared_value" value="<?php echo htmlspecialchars($declared_value); ?>"> 
                    </div>

                    <span class="button_container">
                        <input type="submit" class="button" value="Generate Packing Label">
                    </span>

                </section>
            
            </form>
        </main>

        <!-- footter with tittle adress and extra -->
        <footer>
            <h1>Sip and Stir</h1>
            <address>
                Sip & Stir<br>
                21 Brick Ave<br>
                Newark, NJ, 04894<br>
            </address>
            <h5>@ Sip and Stir, 2024</h5>

        </footer>
        
    </body>
</html>
