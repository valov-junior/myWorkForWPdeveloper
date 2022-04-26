<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.min.css">
   
   
    


</head>
<header>
    <style>
        .success-text{
    
    color: #006400;
    margin-top: 5px;
    margin-bottom: 0px;
    text-align: center;
}
    </style>
    <div class="container">
        
            <h3 class="success-text"><?= $_COOKIE['allseccess'] ?></h3>
        
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img src="" alt=""><img src="./img/Logologo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav m-auto nav_menu">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                    apparel
                  </a>
                  <div class="dropdown-menu dropdown_line" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>                   
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                      office & home
                    </a>
                    <div class="dropdown-menu dropdown_line" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>
                <li class="nav-item"><a href="" class="nav-link">bags</a></li>
                <li class="nav-item"><a href="" class="nav-link">tech</a></li>
                <li class="nav-item"><a href="" class="nav-link">drinkware</a></li>
                <li class="nav-item"><a href="" class="nav-link">gifts</a></li>
              </ul>
              <div class="nav_right">
                <a href=""><i class="fa fa-trash icon_cart"  aria-hidden="true"></i></a>
                <a href="/registration.php"> <button>create an account</button></a>
                
              </div> 
                
            </div>
          </nav>
    </div>
</header>
<body>
    
    <div class="container slider">
        <div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#slider" data-slide-to="0" class="active"></li>
              <li data-target="#slider" data-slide-to="1"></li>
              
            </ol>
            <div class="carousel-inner slider_carousel">
              <div class="carousel-item active" data-interval="1000000">
                <img src="./img/man 3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-sm-block slider_nav">
                  <h3>#wild gradient <br> younder</h3>
                  <p>explore the new amedia agance collection</p>
                  <a href="" ><button>see new collection</button></a>
                </div>
              </div>
               <div class="carousel-item" data-interval="1000000">
                <img src="https://picsum.photos/1600/580?grayscale" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#slider" data-slide="prev">
              <span class="carousel-control-prev-icon pointer_prev" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#slider" data-slide="next">
              <span class="carousel-control-next-icon pointer_next" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </button>
          </div>
    </div>


    <div class="container assortment">
        <h2>featured items</h2> <hr>
    
    <ul class="nav nav_assortment">
            <li class="nav-item"><a class="nav-link active_nav" href="#">new</a></li>
            <li class="nav-item"><a class="nav-link" href="#">apparel</a></li>
            <li class="nav-item"><a class="nav-link" href="#">office & home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">bags</a></li>
            <li class="nav-item"><a class="nav-link" href="#">tech</a></li>
            <li class="nav-item"><a class="nav-link active_red" href="#">sales</a></li>
    </ul>
                <div class="row row_assortment">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <a href="#" class="widht_row"><img  src="./img/1.png" alt=""></a>
                        <img class="new" src="./img/new.png" alt="">
                        <p class="first">womens puff jacket</p>
                        <p class="second">Outerwear</p>
                        <p class="third">$90.00</p>
                        <a href=""><span>add to card</span></a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
                        <a href="#" class="widht_row"><img src="./img/2.png" alt=""></a>
                        <img class="new" src="./img/new.png" alt="">
                        <p class="first">womens puff jacket</p>
                        <p class="second">Outerwear</p>
                        <p class="third">$90.00</p>
                        <a href=""><span>add to card</span></a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <a href="#" class="widht_row"><img src="./img/3.png" alt=""></a>
                        <img class="new" src="./img/sales.png" alt="">
                        <p class="first">womens puff jacket</p>
                        <p class="second">Outerwear</p>
                        <p class="third"><s>$35.40</s> <span>$27.43</span></p>
                        <a href=""><span>add to card</span></a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <a href="#" class="widht_row"><img src="./img/4.png" alt=""></a>
                        <img class="new" src="./img/new.png" alt="">
                        <p class="first">womens puff jacket</p>
                        <p class="second">Outerwear</p>
                        <p class="third">$90.00</p>
                        <a href=""><span>add to card</span></a>
                    </div>
                </div>

            <div class="see_all">
                <a href=""><button>see all</button></a>
            </div>
    </div> 

    <div class="container categories"> 
        <h2> categories</h2> <hr>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <img class="categories_img" src="./img/categories1.png" width="100%" alt="">
                <p>for man/unisex </p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <img class="categories_img"  src="./img/categories2.png" width="100%" alt="">
                <p>gifts</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <img class="categories_img"  src="./img/categories3.png" width="100%" alt="">
                <p>office & home</p>
            </div>
        </div> 
        <div class="see_all_categories">
            <a href=""><button>see all</button></a>
        </div>
        
        <div class="authorization">
            <h3>get -20% for new <br> colection</h3>
            <span>Lorem ipsum, dolor sit amet consectetur adipisicing!</span>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 left">
                    <form>
                        <div class="form-group form_group">
                          <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="e-mail">
                        </div>
                        
                        <div class="form-group form-check check_input">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label check_label" for="exampleCheck1">I accept the <a href="#">Terms of mailing</a></label>
                        </div>
                        <button type="submit" class="btn btn-primary btn_primary">Submit</button>
                      </form>
                </div>
                <div class="col right">
                    <h3>#wild gradient younder</h3>
                </div>
            </div>
        </div>
    </div> 

    <div class="container comments">
        <h2>Reviews of our customers</h2> <hr>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-interval="10000">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                        <div class="rating-result">
                            <span class="active"></span>	
                            <span class="active"></span>    
                            <span class="active"></span>  
                            <span></span>    
                            <span></span>
                        </div>
                        <ul class="comments_first">
                            
                            <li class="item_first">Артем Иванов</li>
                            <li class="item_second ">for man & unisex</li>
                            <li class="item_third">Outerware</li>
                            <li class="item_four">Далеко-далеко за словесными горами в стране гласных и согласных.</li>
                        </ul>
                    </div>
                    <div class="col-md-5 col-lg-5 comments_visible">
                        <ul class="comments_first">
                            <div class="rating-result">
                                <span class="active"></span>	
                                <span></span>    
                                <span ></span>  
                                <span></span>    
                                <span></span>
                            </div>
                            <li class="item_first">Ирина</li>
                            <li class="item_second ">for man & unisex</li>
                            <li class="item_third">Outerware</li>
                            <li class="item_four">Далеко-далеко за словесными горами в стране гласных и согласных.</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            <div class="carousel-item" data-interval="10000">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                        <div class="rating-result">
                            <span class="active"></span>	
                            <span class="active"></span>    
                            <span></span>  
                            <span></span>    
                            <span></span>
                        </div>
                        <ul class="comments_first">
                            
                            <li class="item_first">Катя</li>
                            <li class="item_second ">for man & unisex</li>
                            <li class="item_third">Outerware</li>
                            <li class="item_four">Далеко-далеко за словесными горами в стране гласных и согласных.</li>
                        </ul>
                       
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5 comments_visible">
                        <div class="rating-result">
                            <span class="active"></span>	
                            <span class="active"></span>    
                            <span class="active"></span>  
                            <span class="active"></span>    
                            <span class="active"></span>
                        </div>
                        <ul class="comments_first">
                            <li class="item_first">Артем Иванов</li>
                            <li class="item_second ">for man & unisex</li>
                            <li class="item_third">Outerware</li>
                            <li class="item_four">Далеко-далеко за словесными горами в стране гласных и согласных.</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
              <span class="carousel-control-next-icon next_icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </button>
          </div>
    </div>
    </div>

    <div class="container about_us">
        <h2>about us</h2> <hr>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 about_us_left">
                <ul>
                    <li>Amedia is creative desing agency based in Kiev, <br> Ukraine.</li>
                    <li>Далеко-далеко за словесными горами в стране гласных и согласных, живут рыбные тексты. Обеспечивает до жизни рукопись! Рот запятой своего все дал дорогу текста до даже.</li>
                    <li class="about_us_th">Looking for Amedia product? Go to: <a href="#">Amedia.ua</a></li>
                    <li><button class="about_us_btn">visit on website</button></li>
                </ul>
                
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 about_us_right">
                <img src="./img/amedia.png" alt="">
            </div>
        </div>
    </div>


    <div class="container contact_us">
        <h2>contact us</h2> <hr>
        <h6 text-success><?= $_SESSION['good']?></h6>
        <div class="contactUsForm">
            <form action="contact_check.php" method="post">
                <div class="form-group">
                  
                  <input type="text" name="username" class="form-control"   placeholder="Name" value="<?php $_SESSION['username']?>" >
                  <p class="text-danger"><?= $_SESSION['errorName']?></p>
                  
                </div>
                <div class="form-group">
                    
                    <input type="tel" name="phone" value="<?= $_SESSION['phone']?>" class="form-control"  placeholder="Phone">
                    <p class="text-danger"><?= $_SESSION['errorPhone']?></p>
                  </div>
                <div class="form-group">
            
                    <input type="email" name="useremail" value="<?= $_SESSION['useremail']?>" class="form-control"  placeholder="Email">
                    <p class="text-danger"><?= $_SESSION['errorEmail']?></p>
                    
                  </div>
                <div class="form-group">
            
                  <input type="text" name="massage" value="<?= $_SESSION['massage']?>" class="form-control"  placeholder="Your massage">
                  <p class="text-danger"><?= $_SESSION['errorMassage']?></p>
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label checkLabel" for="exampleCheck1">I consent to the processing of personal data in accordance with the Privacy Policy on the site.</label>
                </div>
                <button type="submit" class="btn btn-primary contactUsBtn">subscribe</button>
              </form>
        </div>
       
    </div>

    <footer>
        <div class="container footer">
            <a href="#"><img src="./img/Logologo.png" alt=""></a> <hr color="#181818">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <h4>adress</h4>
                    <ul>
                        <li>м.київ, 01042 вул.маккайна джона, буд.39 офіс13, 
                            <a href="mailto:HELLO@AMEDIA.UA" >hello@amedia.ua</a>
                        </li>
                        <a href="#"><i class="fa fa-linkedin-square fa-lg" style="color:#181818;" aria-hidden="true"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-instagram fa-lg" style="color: #181818;" aria-hidden="true"></i></a>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <h4>catalog</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li><a href="#">apparel</a></li>
                                <li><a href="#">office & home</a></li>
                                <li><a href="#">bags</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li><a href="#">tech</a></li>
                                <li class="only_drinkware"><a href="#">drinkware</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <h4>contact us</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li><a href="#">доставка</a></li>
                                <li><a href="#">размерная сетка</a></li>
                                <li><a href="#">связатся с нами</a></li>
                            </ul>
                        
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li><a href="#">faq</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer_finish">
                <span class="footer_first">looking for amedia product? go to: <a href="#">amedia.ua</a></span>
                <span class="footer_second">Copyright 2022</span>
            </div>
        </div>
        
    </footer>

          
    
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="./custom.js"></script>
</body>
</html>


