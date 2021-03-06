<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fresh Veggies (Fruit Page)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style >

  body  
  {
  background-image: url("images/Background/bg.jpg");
  }
  .navbar-default
  {
  background-color:  #e6ffe6;
  }

  .navbar 
  {
  overflow: hidden;
  background-color: #b3ffb3;
  bottom: 0;
  width: 100%;
  }
  
  .jumbotron 
  {
    color: #000;
    padding: 100px 25px;
    background-color: #33ff33;
    font-family: Montserrat, sans-serif;
  }

  .bg-green
  {
    background-color: #e6ffe6;
  }

  .navbar 
  {
  overflow: hidden;
  background-color: #b3ffb3;
  bottom: 0;
  width: 100%;
  }

  .panel {
    border-radius:0 !important;
    transition: box-shadow 0.2s;
  }
  .panel:hover {
    box-shadow: 40px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px 
    background-color: #000 !important;
    color: #66ff66;
  }
  .panel-heading {
    color: #00e600 !important;
    background-color: #b3ffb3 !important;
    padding: 10px;
    border-bottom: 1px solid transparent;
  }
  .panel-footer {
    background-color: #b3ffb3 !important;
    padding: 10px;
  }
  .panel-footer h3 {
    font-size: 20px;
  }
  .panel-footer .btn {
    margin: 5px 0;
    background-color: #00e600;
    color: #b3ffb3;
  }
  .badge-notify{
    background:red;
    position:relative;
    top: -20px;
    right: 10px;
  }
  
  

  </style>

  </head>
<body>

<!-- Nav bar -->

<div class="container">
  <nav class="navbar-default navbar-fixed-top">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" class="active" class="font-italic" href="home page.html" ><b><strong><u>Fresh Veggies</u></strong></b></a>
      <a class="navbar-brand" href="Fruits.html">Fruits</a>
      <a class="navbar-brand" href="Vegetable.html">Vegetables</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <form class="navbar-form navbar-right" action="/action_page.php">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
              <i class="glyphicon glyphicon-search"></i>
            </button>
          </div>
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <button type="button" class="btn navbar-btn my-cart-icon"><span class="badge badge-notify my-cart-badge"></span>
          <span class="glyphicon glyphicon-shopping-cart"></span> My Cart
        </button>
        
        
    </div>
  </nav>
</div>

<!-- Main Font -->

<div class="container">
  <div class="jumbotron text-center">
    <h1>FRESH-VEGGIES</h1> 
    <p>We Serve Fresh Vegetables & Fruits.</p> 
    <h2>(FRUITS SECTION)</h2>
  </div>
</div>

<div class="container">
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h1>Pricing</h1>
    <h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          Apple
        </div>
        <div class="panel-body">
         <img src="images/Fruits/apple1.jpg" class="img-thumbnail" id="apple">
        </div>
        <div class="panel-footer">
          <h3>170(1KG)</h3>
           <button class="btn my-cart-btn" data-id="1" data-name="Apple" data-summary="summary 1" data-price="170" data-quantity="1" data-image="images/Fruits/apple1.jpg">Add to Cart</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          Mango
        </div>
        <div class="panel-body">
          <img src="images/Fruits/mango1.jpg" class="img-thumbnail" id="mango">
        </div>
        <div class="panel-footer">
          <h3>150(1KG)</h3>
          <button class="btn my-cart-btn" data-id="2" data-name="Mango" data-summary="summary 2" data-price="150" data-quantity="1" data-image="images/Fruits/mango1.jpg">Add to Cart</button>
          
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          Orange
        </div>
        <div class="panel-body">
          <img src="images/Fruits/orange1.jpg" class="img-thumbnail" id="orange">
        </div>
        <div class="panel-footer">
          <h3>100(1KG)</h3>
          <button class="btn my-cart-btn" data-id="3" data-name="Orange" data-summary="summary 3" data-price="100" data-quantity="1" data-image="images/Fruits/orange1.jpg">Add to Cart</button>
        </div>
      </div>      
    </div>    
  </div>
</div>
</div>

<div class="container">
<div id="pricing" class="container-fluid">
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          Green Grapes
        </div>
        <div class="panel-body">
         <img src="images/Fruits/greengrapes1.jpg" class="img-thumbnail" id="greengrapes">
        </div>
        <div class="panel-footer">
          <h3>90(1KG)</h3>
          <button class="btn my-cart-btn" data-id="4" data-name="Green Grapes" data-summary="summary 4" data-price="90" data-quantity="1" data-image="images/Fruits/greengrapes1.jpg">Add to Cart</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          Lemon
        </div>
        <div class="panel-body">
          <img src="images/Fruits/lemon1.jpg" class="img-thumbnail" id="lemon">
        </div>
        <div class="panel-footer">
          <h3>50(1KG)</h3>
          <button class="btn my-cart-btn" data-id="5" data-name="Lemon" data-summary="summary 5" data-price="50" data-quantity="1" data-image="images/Fruits/lemon1.jpg">Add to Cart</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          Black Grapes
        </div>
        <div class="panel-body">
          <img src="images/Fruits/Grapes1.jpg" class="img-thumbnail" id="grapes">
        </div>
        <div class="panel-footer">
          <h3>70(1KG)</h3>
          <button class="btn my-cart-btn" data-id="6" data-name="Black Grapes" data-summary="summary 6" data-price="70" data-quantity="1" data-image="images/Fruits/Grapes1.jpg">Add to Cart</button>
        </div>
      </div>      
    </div>    
  </div>
</div>
</div>

<div class="container">
<div id="pricing" class="container-fluid">
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          StrawBerry
        </div>
        <div class="panel-body">
         <img src="images/Fruits/strawberry1.jpg" class="img-thumbnail" id="strawberry">
        </div>
        <div class="panel-footer">
          <h3>180(1KG)</h3>
          <button class="btn my-cart-btn" data-id="7" data-name="StrawBerry" data-summary="summary 6" data-price="180" data-quantity="1" data-image="images/Fruits/strawberry1.jpg">Add to Cart</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          WaterMelon
        </div>
        <div class="panel-body">
          <img src="images/Fruits/watermelon1.jpg" class="img-thumbnail" id="watermelon">
        </div>
        <div class="panel-footer">
          <h3>40(1KG)</h3>
          <button class="btn my-cart-btn" data-id="8" data-name="WaterMelon" data-summary="summary 8" data-price="40" data-quantity="1" data-image="images/Fruits/watermelon1.jpg">Add to Cart</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          Cherry
        </div>
        <div class="panel-body">
          <img src="images/Fruits/cherry1.jpg" class="img-thumbnail" id="cherry">
        </div>
        <div class="panel-footer">
          <h3>120(1KG)</h3>
          <button class="btn my-cart-btn" data-id="9" data-name="Cherry" data-summary="summary 9" data-price="120" data-quantity="1" data-image="images/Fruits/cherry1.jpg">Add to Cart</button>
        </div>
      </div>      
    </div>    
  </div>
</div>
</div>

<!-- Contact box -->

<div class="container">
  <div id="contact" class="container-fluid bg-green">
    <h4 class="text-center">CONTACT</h4>
      <div class="row">
        <div class="col-sm-6">
          <p>Contact us and we'll get back to you within 24 hours.</p>
          <p><span class="glyphicon glyphicon-map-marker"></span>TamilNadu,IN</p>
          <p><span class="glyphicon glyphicon-phone"></span> +91 8939697450</p>
          <p><span class="glyphicon glyphicon-envelope"></span> FreshVeggies101@gmail.com</p>
        </div>
        <div class="col-sm-6 slideanim">
          <div class="row">
            <div class="col-sm-3 form-group">
              <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
            </div>
            <div class="col-sm-9 form-group">
              <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
            </div>
          </div>
          <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="2"></textarea><br>
        </div>
    </div>
  </div>
</div>

<!-- Bottom Nav bar -->

<div class="navbar"></div>

<script src="js/jquery-2.2.3.min.js"></script>
<script type='text/javascript' src="js/bootstrap.min.js"></script>
<script type='text/javascript' src="js/jquery.mycart.js"></script>
<script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      currencySymbol: '₹',
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      classProductQuantity: 'my-product-quantity',
      classProductRemove: 'my-product-remove',
      classCheckoutCart: 'my-cart-checkout',
      affixCartIcon: true,
      showCheckoutModal: true,
      numberOfDecimals: 2,
      
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      afterAddOnCart: function(products, totalPrice, totalQuantity) {
        console.log("afterAddOnCart", products, totalPrice, totalQuantity);
      },
      clickOnCartIcon: function($cartIcon, products, totalPrice, totalQuantity) {
        console.log("cart icon clicked", $cartIcon, products, totalPrice, totalQuantity);
      },
      checkoutCart: function(products, totalPrice, totalQuantity) {
        var checkoutString = "Total Price: " + totalPrice + "\nTotal Quantity: " + totalQuantity;
        checkoutString += "\n\n id \t name \t summary \t price \t quantity \t image path";
        $.each(products, function(){
          checkoutString += ("\n " + this.id + " \t " + this.name + " \t " + this.summary + " \t " + this.price + " \t " + this.quantity + " \t " + this.image);
        });
        alert(checkoutString)
        console.log("checking out", products, totalPrice, totalQuantity);
      },
      getDiscountPrice: function(products, totalPrice, totalQuantity) {
        console.log("calculating discount", products, totalPrice, totalQuantity);
        return totalPrice * 0.5;
      }
    });

  });

</script>

</body>
</html>