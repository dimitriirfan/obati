<!DOCTYPE html>
<html lang="en" class="no-js">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Shopping Cart</title>

<link rel="stylesheet" href="<?php echo base_url("./assets/css/cart.css")?>" media="screen" title="no title" charset="utf-8">
<script src="https://code.jquery.com/jquery-2.2.4.js" charset="utf-8"></script>
<meta name="robots" content="noindex,follow">
</head>
<body>

<div class="shopping-cart">
  <!-- Title -->
  <div class="title">
    <img src="<?php echo base_url("assets/img/logo_header.png")?>" alt="" width="300px" height="50px"/>        
  </div>
 
  <!-- Product #1 -->
    <div class="item">
        <div class="buttons">
            <span class="delete-btn"></span>
            <span class="like-btn"></span>
        </div>
    
        <div class="image">
            <img src="<?php echo base_url("assets/img/boy1.jpg")?>" alt="" width="120px" height="80px" />
        </div>
    
        <div class="description">
            <span>Common Projects</span>
            <span>Bball High</span>
            <span>White</span>
        </div>
    
        <div class="quantity">
            <button class="plus-btn" type="button" name="button">
                <img src="<?php echo base_url("assets/img/add_24px.svg")?>" alt="" />
            </button>
            <input type="text" name="name" value="1">
            <button class="minus-btn" type="button" name="button">
                <img src="<?php echo base_url("assets/img/remove_24px.svg")?>" alt="" />
            </button>
        </div>
    
        <div class="total-price">$549</div>

        <!--<button type="button" class="btn btn-link">Continue Shopping</button>-->
        
    </div>

    
 
  <!-- Product #2 -->
  <div class="item">
    <div class="buttons">
      <span class="delete-btn"></span>
      <span class="like-btn"></span>
    </div>
 
    <div class="image">
        <img src="<?php echo base_url("assets/img/boy1.jpg")?>" alt="" width="120px" height="80px" />
    </div>
 
    <div class="description">
      <span>Maison Margiela</span>
      <span>Future Sneakers</span>
      <span>White</span>
    </div>
 
    <div class="quantity">
      <button class="plus-btn" type="button" name="button">
        <img src="<?php echo base_url("assets/img/add_24px.svg")?>" alt="" />
      </button>
      <input type="text" name="name" value="1">
      <button class="minus-btn" type="button" name="button">
        <img src="<?php echo base_url("assets/img/remove_24px.svg")?>" alt="" />
      </button>
    </div>
 
    <div class="total-price">$870</div>
  </div>
 
  <!-- Product #3 -->
    <div class="item">
        <div class="buttons">
        <span class="delete-btn"></span>
        <span class="like-btn"></span>
        </div>
    
        <div class="image">
            <img src="<?php echo base_url("assets/img/boy1.jpg")?>" alt="" width="120px" height="80px" />
        </div>
    
        <div class="description">
            <span>Our Legacy</span>
            <span>Brushed Scarf</span>
            <span>Brown</span>
        </div>
    
        <div class="quantity">
            <button class="plus-btn" type="button" name="button">
                <img src="<?php echo base_url("assets/img/add_24px.svg")?>" alt=""  width="10px" height="10px"/>
            </button>
            <input type="text" name="name" value="1">
            <button class="minus-btn" type="button" name="button">
                <img src="<?php echo base_url("assets/img/remove_24px.svg")?>" alt="" width="10px" height="2px"/>
            </button>
        </div>
    
        <div class="total-price">$349</div>
    </div>
        <div class="bottom-bar">
            <img src="<?php echo base_url("assets/img/arrow_back_24px.svg")?>" alt="" width="24px" height="30px"/> <span>
            <a class="btn btn-link" href="<?php echo base_url('index.php/Controller_landing/') ?>">Continue Shopping</a> </span>
        </div>
    </div>

    <!-- payment detail -->
    
					
                </div>

</div>
  
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>
	<script src="<?php echo base_url("./assets/js/jquery.js")?>"></script>
	<script src="<?php echo base_url("./assets/js/bootstrap/bootstrap.min.js")?>"></script>
    <script src="<?php echo base_url("./assets/js/view_cart.js") ?>"></script>

</body>

</html>