<link href="css/main.css" rel="stylesheet"/>

<nav>
		<ul>
			<li><a href="index.html">HOME</a></li>
			<li><a href="index.html">Blog</a></li>
			<li><a href="index.html">Contact Us</a> </li>
		</ul>

	</nav> 
  <body>
          <section class="paymentSystem">
            <h3><em>Payment options:</em></h3>

            <img id="mastercard" src = "img/mastercard.png"  alt="mastercard logo"/>
            
            
            <form action = "success.php" method="POST">
            <section class="cc">
            <label for="ccnum">Credit card number (16 digit)</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="51, 52, 53, 54, or 55">
            </section>

            <label for="expMonth">Expiry Date:</label>
            <select id="expMonth" title="select month" name='expirymonth'>
                <option value="0">Select month</option>
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
            <select id="expYear" title="select a year" name='expiryyear'>
                <option value="0">Select Year</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2028">2028</option>
                <option value="2029">2029</option>
                <option value="2030">2030</option>
                <option value="2031">2031</option>
            </select>

              <section class="cvv">
                <label for="seccode">CVV</label>
                <input type="text" id="seccode" name="cvv" placeholder="451">
              </section>
           
        
        <input type="submit" value="Continue to checkout" id='btn'>
        <input type="hidden" id ="h" name="h" value=""/>
      </form>

      </body>

      
    
      </section>
  </section>

  <script src="js/javascript.js"></script>





