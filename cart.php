<header>
    <div class="nav">
<h1>TREKKING GEARS</h1>
      <a href="" class="logo">
       

      </a>

      <div class="box">
        <div class="cart-count">0</div>
        <ion-icon name="cart" id="cart-icon"></ion-icon>
      </div>

      <div class="cart">
        <div class="cart-title">GEARS ITEMS</div>
        <div class="cart-content">
        </div>

        <div class="total">
          <div class="total-title">Total</div>
          <div class="total-price">Rs.0</div>
        </div>
        <form action="place_order.php" method="post">
        <?php if(isset($_SESSION['login'])) 
              {?>
          <button class="btn-buy">Place Order</button>
          <?php } else { ?>
            <a
                                    href="Login and Signup Form/login-user.php"
                                    class="btn-login">Login For Book
                                </a>
            <?php } ?>
        </form>

        <ion-icon name="close" id="cart-close"></ion-icon>

      </div>
    </div>
  </header>
  