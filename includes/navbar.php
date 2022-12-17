<div class="header">
        <div class="logo">
             <a href="index.php"><img src="images/Logo.png"></a>
        </div>
        <div class="search">
            <form>
          <input type="text" placeholder="Search here">
            </form>
        </div> 
        <div class="icons">
            <a href="#" class="fa-solid fa-cart-shopping"></a>
            <?php
            if (isset($_SESSION['auth']))
            {
            ?>
            <?= $_SESSION['auth_user']['name']; ?>
              <a href="logout.php" class="fa-solid fa-right-from-bracket"></a>
           <?php
           }
           else
           {
            ?>
            <a href="login.php" class="fa-solid fa-user"></a>
            <?php
           }
           ?>
           <!-- <a href="login.php" class="fa-solid fa-user"></a> -->
            <a href="#" class="fa-solid fa-bars"></a>
        </div>
      </div>
      <div class="links">
      <?php
      $categories = getAll('categories');
      if(mysqli_num_rows($categories) > 0)
        {
        foreach($categories as $item)
        {
      ?> 
   
        <a href="products.php?slug=<?= $item['slug']; ?>"><?= $item['name']; ?></a>
    <?php
    }  
    }
    else
    {
    echo "No records found";
    }
   ?>
</div>