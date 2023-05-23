<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <title>Xumoye LLC - Buy The xCabinet</title>
      <?php include("../../include/links.php");?>
    </head>
    <body>
        <div id="page-container">
            <div id="content-wrap">
                <div class="pageRoot">
                    <div class="content">
                        <h1 style="font-size: 2.60em;" class="inline-h">Checkout</h1>
                        <?php include("../../include/buttongroup.php");?>
                        <br />
                        <h1>Your products await you.</h1>
                        <h6>Do not fill this form out with real information, as this site is not secure.</h6>
                        <form action="/cart/checkout/order-fulfilled/" method="post">
                            <label for="firstname">First name:</label><br>
                            <input type="text" id="firstname" name="firstname" required><br \><br \>
                            <label for="lastname">Last name:</label><br >
                            <input type="text" id="lastname" name="lastname" required><br \><br \><br \><br \>
                            <label for="address">Address line 1:</label><br >
                            <input type="text" id="address" name="address" required><br \><br \>
                            <label for="addressextra">Apartment, suite, etc. (optional):</label><br >
                            <input type="text" id="addressextra" name="addressextra"><br \><br \>
                            <label for="city">City:</label><br >
                            <input type="text" id="city" name="city" required><br \><br \>
                            <label for="state">State:</label><br >
                            <select name="state" id="state" required>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="DC">District Of Columbia</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                            </select><br \><br \><br \><br \>
                            <label for="cardname">Name on card:</label><br >
                            <input type="text" id="cardname" name="cardname" required><br \><br \>
                            <label for="cardnumber">Card number:</label><br >
                            <input type="text" id="cardnumber" name="cardnumber" required><br \><br \>
                            <label for="cvv">CVV:</label><br >
                            <input type="text" id="cvv" name="cvv" required><br \><br \>
                            <label for="expdate">Expiration date:</label><br >
                            <input type="month" id="expdate" name="expdate" required><br \><br \>
                            <label for="phonenumber">Phone number:</label><br >
                            <input type="tel" id="phonenumber" name="phonenumber" required><br \><br \>
                            <label for="email">Email:</label><br >
                            <input type="email" id="email" name="email" required><br \><br \><br \><br \>
                            <input type="submit" value="Place Order">
                        </form>
                        <p></p>
                    </div>
                </div>
                <?php include("../../include/footer.php");?>
            </div>
        </div>
    </body>
</html>
