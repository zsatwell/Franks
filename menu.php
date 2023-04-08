<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Meta Tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="the menu page of the Frank's Flame Grill website"
    />
    <title>Frank's Flame Grill - Our Menu</title>
    <!-- CSS and Google Fonts -->
    <link rel="stylesheet" href="styles/franksStyles.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  </head>
  <body>
    <!-- Main grid container -->
    <div class="menuContainer">
    <!-- Header -->
    <div class="menuHeader">
        <h1>Frank's Flame Grill</h1>
      </div>
      <!-- Navigation -->
      <div class="menuNav">
        <nav class="navLinks">
          <ul>
            <li><a href="franks.html">Home</a></li>
            <li><a href="menu.php">Our Menu</a></li>
            <li><a href="franksContact.php">Book Now</a></li>
          </ul>
        </nav>
      </div>
      <!-- Logo with header -->
      <div class="menuLogo">
        <div class="menuLogoTitle">
          <img
            src="images/logoMedium.png"
            width="200"
            height="200"
            alt="the medium version of the logo"
          />
          <h2>Our Menu</h2>
        </div>
      </div>
      <!-- Menu item 1 -->
      <div class="menu1">
        <article class="menuItem">
          <img
            src="images/doubleCheese.png"
            width="200"
            height="200"
            alt="picture of a double cheeseburger"
            class="menuImage"
          />
          <div class="menuDescription">
            <h3 class="menuItemName">Frank's Double</h3>
            <p>
              The classic double cheeseburger, made with fresh beef, American
              cheese, lettuce, tomato, and pickles.
            </p>
            <p><strong>$6.99</strong></p>
          </div>
        </article>
      </div>
      <!-- Menu item 2 -->
      <div class="menu2">
        <article class="menuItem">
          <img
            src="images/doubleBacon.png"
            width="200"
            height="200"
            alt="picture of a double cheeseburger with bacon"
            class="menuImage"
          />
          <div class="menuDescription">
            <h3 class="menuItemName">Frank's Double with Bacon</h3>
            <p>
              A double cheeseburger enhanced with several pieces of crispy
              bacon.
            </p>
            <p><strong>$7.99</strong></p>
          </div>
        </article>
      </div>
      <!-- Menu item 3 -->
      <div class="menu3">
        <article class="menuItem">
          <img
            src="images/chicken.png"
            width="200"
            height="200"
            alt="picture of a chicken sandwich"
            class="menuImage"
          />
          <div class="menuDescription">
            <h3 class="menuItemName">Frank's Chicken</h3>
            <p>
              A crispy piece of fried chicken, on a toasted bun served with
              lettuce, cheese, and tomato.
            </p>
            <p><strong>$4.99</strong></p>
          </div>
        </article>
      </div>
      <!-- Menu item 4 -->
      <div class="menu4">
        <article class="menuItem">
          <img
            src="images/hotdog.png"
            width="200"
            height="200"
            alt="picture of a chili dog"
            class="menuImage"
          />
          <div class="menuDescription">
            <h3 class="menuItemName">Frank's Chili Dog</h3>
            <p>
              Premium beef coney served with hot chili, melted cheese, and
              onions in a warm bun.
            </p>
            <p><strong>$4.99</strong></p>
          </div>
        </article>
      </div>
      <!-- Catering info -->
      <div class="menuCater">
        <div class="cateringSection">
          <h3>We Cater!</h3>
          <div>
            <p>
              We are on wheels! We are able to travel to anywhere in Waco, and
              the surrounding area! Send us a message on our contact page to let
              us know about your catering needs, and how we can best serve you.
            </p>
            <p>
              <strong
                >Catering prices start at $100 for parties of 10+, and $200 for
                parties of 30+.</strong
              >
            </p>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <div class="menuFooter">
        <?php include 'footer.php' ?>
      </div>
    </div>
  </body>
</html>
