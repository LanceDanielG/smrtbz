<?php 
    session_start(); 
    // var_dump($_SESSION); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMARTBIZ</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div class="containerL">
        <nav>
            <div class="logo-containerL">
                <img src="public/img/logo-removebg-preview.png" alt="logo" class ="logo">
            </div>
            <ul class = "navbarClass">
                <li><a href="index.php">Home</a></li>
                <li><a href="views/templates/developersInfo.php">Our Team</a></li>
                <li><a href="views/templates/about.php">About Us</a></li>
                <li class="l"><a href="views/templates/login.php">LOG IN</a></li>
                <li class="s"><a href="views/templates/register.php">SIGN UP</a></li>
            </ul>
            <div class="hamburger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>

        <section id="home" class="banner">
            <div class="container">
                <div class="banner-content">
                    <br><br>
                    <h2>LEARN HOW TO START, GROW, SUCCEED</h2> 
                    <p>Register and acquire the knowledge to establish a successful business venture.</p> 
                </div>
            </div>
        </section>    

        <div class="wrapper">
            <div class = "category-filter">
                <div class = "container">
                    <div class = "filter-btns">
                        <button type = "button" class = "filter-btn" id = "all">all</button>
                        <button type = "button" class = "filter-btn" id = "agriculture">agriculture</button>
                        <button type = "button" class = "filter-btn" id = "retail">retail</button>
                        <button type = "button" class = "filter-btn" id = "food">food</button>
                        <button type = "button" class = "filter-btn" id = "healthcare">healthcare</button>
                    </div>
                    
                    <div class = "filter-items">
                        <div class = "filter-item all retail">
                            <div class = "item-img">
                                <img src = "public/img/sari.jpg" alt = "Item image">
                            </div>

                            <div class = "item-info">
                                <p>Sari-sari Store</p>
                                <div>
                                    <span class = "new-price">₱10,000</span>
                                </div>
                                <a href = "views/templates/cardItemsInfo.php" class ="add-btn">VIEW</a>
                            </div>
                        </div>

                        <div class = "filter-item all retail">
                            <div class = "item-img">
                                <img src = "public/img/load.jpg" alt = "Item image">
                            </div>
                            <div class = "item-info">
                                <p>E-loading Business</p>
                                <div>
                                    <span class = "new-price">₱1,000</span>
                                </div>
                                <a href = "views/templates/cardItemsInfo.php" class ="add-btn">VIEW</a>
                            </div>
                        </div>

                        <div class = "filter-item all food">
                            <div class = "item-img">
                                <img src = "public/img/bakery.jpg" alt = "Item image">
                            </div>
                            <div class = "item-info">
                                <p>Baking Business</p>
                                <div>
                                    <span class = "new-price">₱20,000</span>
                                </div>
                                <a href = "views/templates/cardItemsInfo.php" class ="add-btn">VIEW</a>
                            </div>
                        </div>

                        <div class = "filter-item all food">
                            <div class = "item-img">
                                <img src = "public/img/meal.jpg" alt = "Item image">
                            </div>
                            <div class = "item-info">
                                <p>Home Cooked Meals</p>
                                <div>
                                    <span class = "new-price">₱1,000</span>
                                </div>
                                <a href = "views/templates/cardItemsInfo.php" class ="add-btn">VIEW</a>
                            </div>
                        </div>

                        <div class = "filter-item all retail">
                            <div class = "item-img">
                                <img src = "public/img/gifts.jpg" alt = "Item image">
                            </div>
                            <div class = "item-info">
                                <p>Personalized Gifts and Souvenirs</p>
                                <div>
                                    <span class = "new-price">₱10,000</span>
                                </div>
                                <a href = "views/templates/cardItemsInfo.php" class ="add-btn">VIEW</a>
                            </div>
                        </div>

                        <div class = "filter-item all retail food">
                            <div class = "item-img">
                                <img src = "public/img/rice.jpg" alt = "Item image">
                            </div>
                            <div class = "item-info">
                                <p>Rice Retailing Business</p>
                                <div>
                                    <span class = "new-price">₱50,000</span>
                                </div>
                                <a href = "views/templates/cardItemsInfo.php" class ="add-btn">VIEW</a>
                            </div>
                        </div>

                        <div class = "filter-item all food">
                            <div class = "item-img">
                                <img src = "public/img/milk.jpg" alt = "Item image">
                            </div>
                            <div class = "item-info">
                                <p>Milktea Business</p>
                                <div>
                                    <span class = "new-price">₱30,000</span>
                                </div>
                                <a href = "views/templates/cardItemsInfo.php" class ="add-btn">VIEW</a>
                            </div>
                        </div>

                        <div class = "filter-item all food">
                            <div class = "item-img">
                                <img src = "public/img/tapsi.jpg" alt = "Item image">
                            </div>
                            <div class = "item-info">
                                <p>Silog Business</p>
                                <div>
                                    <span class = "new-price">₱30,000</span>
                                </div>
                                <a href = "views/templates/cardItemsInfo.php" class ="add-btn">VIEW</a>
                            </div>
                        </div>

                        <div class = "filter-item all agriculture">
                            <div class = "item-img">
                                <img src = "public/img/lettuce.jpg" alt = "Item image">       
                            </div>
                            <div class = "item-info">
                                <p>Lettuce Business</p>
                                <div>
                                    <span class = "new-price">₱50,000</span>
                                </div>
                                <a href = "views/templates/cardItemsInfo.php" class ="add-btn">VIEW</a>
                            </div>
                        </div>

                        <div class = "filter-item all healthcare">
                            <div class = "item-img">
                                <img src = "public/img/pharmacy.jpg" alt = "Item image"> 
                            </div>
                            <div class = "item-info">
                                <p>Pharmacy Business</p>
                                <div>
                                    <span class = "new-price">₱100,000</span>
                                </div>
                                <a href = "views/templates/cardItemsInfo.php" class ="add-btn">VIEW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="public/js/index.js"></script>
</html>