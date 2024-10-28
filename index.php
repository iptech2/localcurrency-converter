
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
    <!-- site metas -->
    <title>sendy site</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="qostech" content="" />
    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- rate css -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <!-- body -->

  <body class="main-layout">
    <header>
      <!-- banner -->
      <section class="banner_main" id="banner">
        <!-- <section id="banner"> -->
        <div class="banner-text">
          <h1>Sendy Site</h1>
          <p>Use us and you will never regret it ever</p>
          <h2>Exchange Rates</h2>
        </div>
        <div class="container-one">
          <form id="form">
            <!--  -->

            <div class="currency currency-1">
              <img
                id="flag-img"
                src="https://flagcdn.com/48x36/ke.png"
                alt="Country flag"
                style="width: 40px; height: 30px"
              />

              <div class="droplist1">
                <select class="country-select" id="currency-one">
                  <option selected value="KES">KES</option>
                  <option value="UGX">UGX</option>
                </select>
              </div>

              <input
                type="number"
                class="inputs"
                id="amount-one"
                action="javascript:void(0)"
                value=""
                placeholder="0.00"
              />
            </div>

            <!--  -->
            <div class="btn3">
              <div class="exrate">Exchange Rate</div>

              <div class="rate" id="rate"></div>
            </div>

            <div class="swap-rate-container">
              <button class="btn4" class="hidden" id="swap">Exchange</button>
            </div>
            <!--  -->
            <div class="btn">
              <h4 class="btn1">Fee :</h4>
              <h5 class="btn2">Free</h5>
            </div>
            <!--  -->
            <div class="drop-list-2 select-2">
              <div class="currency currency-2">
                <img
                  id="flag-img2"
                  src="https://flagcdn.com/48x36/tz.png"
                  alt="Country flag"
                  style="width: 40px; height: 30px"
                />

                <div class="droplist1">
                  <select class="selectcountry2" id="currency-two">
                    <option value="KES">KES</option>
                    <option value="RWF">RWF</option>
                    <option selected value="TZS">TZS</option>
                  </select>
                </div>

                <input
                  type="number"
                  class="inputs"
                  id="amount-two"
                  value="0"
                  placeholder="0.00"
                />
              </div>
            </div>

            <button class="button" type="submit" id="send_btn">
              <a href="#section2">Get Started</a>
            </button>
          </form>
        </div>
      </section>
    </header>

    <!-- payment  section -->
    <div class="contact d-flex justify-content-center">
      <div class="container">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <h2><span class="add" id="section2">Add Payment Details</span></h2>
            <br />
            <p class="blue">
              These information must be accurate to prevent lose of funds
            </p>
            <form id="contac_form"  method="post"  action="" class="contac_form">
              <div class="error" id="errors"></div>
              <label for="" class="yellow text-center">Sender Detail's</label>
              <div class="form-control error col-md-12">
                <input
                  class="contac_control error"
                  placeholder="Full Names"
                  id="fullname"
                  type="text"
                  name="fullname"
                />
                <small id="erroridfullnames"></small>
              </div>
              <div class="form-control error col-md-12">
                <input
                  class="contac_control"
                  placeholder="Email Address"
                  id="emailaddress"
                  type="email"
                  name="EmailAddress"
                />
                <small id="erroridemail"></small>
              </div>
              <div class="form-control col-md-12">
                <label for="" class="yellow"> Payment Method</label>
                <select id="payment" class="selects" name="paymentmethod">
                  <option disabled value="disabled" hidden selected>
                    Choose Payment Method
                  </option>
                  <option value="Mpesa">Mpesa(Safaricom)</option>
                  <option value="Airtel">Airtel Money</option>
                </select>
                <small id="erroridpayment"></small>
              </div>
              <div class="form-control col-md-12">
                <label for="" class="yellow"> Payment currency</label>
                <div class="ugx-modal">
                  <div class="ugxContent">
                    <h1>For Ugandan Airtel Users</h1>
                    <span class="close">&times</span>
                    <hr />
                    <h5>1.Dial *185*9#</h5>
                    <h5>2.For merchant Code Input 6260992</h5>
                    <h5>3.Enter Amount</h5>
                    <h5>4.Enter Reference(You can input Your Phone number)</h5>
                    <h5>5.Enter Pin</h5>
                  </div>
                </div>
                <select id="crency" class="selects" name="paymentcurrency">
                  <option disabled value="disabled" hidden selected>
                    Choose Currency
                  </option>
                  <option value="KES">KES</option>
                  <button class="modalnbtn">
                    <option class="ugx" value="UGX">UGX</option>
                  </button>
                </select>
                <small id="erroridcurrency"></small>
              </div>

              <label for="" class="yellow text-center"> Enter Amount </label>

              <div class="form-control error col-md-12">
                <input
                  class="contac_control"
                  placeholder=" Enter Amount"
                  id="amount"
                  type="number"
                  value=""
                  name="currencyamount"
                />
                <small class="error" id="erroridamount"> </small>
              </div>
              <div class="form-control col-md-12">
                <label for="" class="yellow">Purposse of Transaction</label>

                <select id="purpose" class="selects" name="purposeoftransaction">
                  <option disabled value="disabled" hidden selected>
                    Choose Option
                  </option>
                  <option value="education">Eductaion/ School Fees</option>
                  <option value="rent">Rent/Mortgage</option>
                  <option value="emrgency">Emergency/Medical Aids</option>
                  <option value="charity">Charity/Aids Payment</option>
                  <option value="employee">
                    Employee Payroll/ Employee Expenses
                  </option>
                  <option value="prize">Prize or Lotery Fees/Taxes</option>
                </select>
                <small id="erroridporpose"></small>
              </div>
              <div class="form-control col-md-12">
                <label for="" class="yellow">Source of Funds </label>

                <select id="source" class="selects" name="sourcefund">
                  <option disabled value="disabled" hidden selected>
                    Choose Option
                  </option>
                  <option value="inheritance">Inheritances</option>
                  <option value="donation">Charitable Donations</option>
                  <option value="tips">Cash Tips</option>
                  <option value="sales">
                    Sales of Goods/Property/Services Payment
                  </option>
                  <option value="investment">Investment Income</option>
                </select>
                <small id="erroridsource"></small>
              </div>
              <div class="form-control error col-md-12">
                <label for="" class="yellow">Recipient's Details</label>

                <input
                  class="contac_control"
                  placeholder="Full Names"
                  id="recipientdetails"
                  type="text"
                  name="recipientdetails"
                />
                <small id="erroridfullname"></small>
              </div>
              <div class="form-control col-md-12">
                <label for="" class="yellow">Recipient's Country</label>

                <select id="country" class="selects" name="recipientcountry">
                  <option disabled value="disabled" hidden selected>
                    Choose Country
                  </option>
                  <option value="kenya">Kenya</option>
                  <option value="tanzania">Tanzania</option>
                  <option value="rwanda">Rwanda</option>
                </select>
                <small id="erroridselect"></small>
              </div>

              <div class="form-control col-md-12">
                <label for="" class="yellow">Delivery Method</label>

                <select
                  id="deliverymethod"
                  class="selects"
                  name="deliverymethod"
                >
                  <option disabled value="disabled" hidden selected>
                    Choose Option
                  </option>
                  <option value="Mpesa">Mpesa(Safaricom)</option>
                  <option value="Mpesa">Mpesa(Vodafone)</option>
                  <option value="Mpesa">MTN</option>
                  <option value="Airtel">Airtel Money</option>
                  <option value="tigo Pesa">Tigo Pesa</option>
                </select>
                <small id="erroriddelivery"></small>
              </div>

              <div class="form-control error col-md-12">
                <label for="" class="yellow">Phone Number</label>

                <input
                  type="text"
                  class="contac_control"
                  placeholder="0711123456/+254712345678"
                  id="phonenumber"
                  autocomplete=""
                  name="PhoneNumber"
                />
                <small class="error" id="errorphone"></small>
              </div>

              <div class="form-control col-md-12">
                <button type="submit" name="submit" id="sendbtn" class="send_btn" onsubmit="submited()">
                  Send
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    

    <!--  footer -->
    <footer>


    
      <section id="contact2">
        <div class="details2">
          <p>Contact Us</p>
        </div>
        <div class="contactdescription">
          <p>
            We have a Very dedicated Team to serve you around the clock. You can
            reach out via Email or Give us a Phonecall.Trust us when we say you
            and your funds are in very good hands.
          </p>
        </div>
      </section>

      <div class="footer">
        <div class="copyright">
          <!-- <div class="container rouded"> -->
          <div class="row">
            <div class="form-control col-md-10 rounded offset-md-1">
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              All rights reserved | Developed
              <i class="icon-heart-o" aria-hidden="true"></i> by
              <a href="" target="">@qostech</a>
            </div>
          </div>
          <!-- </div> -->
        </div>
      </div>
    </footer>

    <!-- js  -->
    <script src="js/index.js"></script>
    <script src="js/validate.js"></script>
  </body>
</html>
