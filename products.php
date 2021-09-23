<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("navbar.php")?>
    <title>Products</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
    <link rel="stylesheet" href="css/style_products_catalog.css">
</head>
<body>
    <br>
    <br>
    <div class="section">
        <!-- <div class="container"> -->
            <h2>Travelers Choice of Hotels</h2>
            <div class="image-carousel style2 flexslider" data-animation="slide" data-item-width="270" data-item-margin="30">
                <div class="flex-viewport" style="overflow: hidden; position: relative;">
                    <ul class="slides image-box hotel listing-style1" style="width: 1000%; transition-duration: 0.6s; transform: translate3d(0px, 0px, 0px);">
                        <li style="width: 270px; float: left; display: block;">
                            <article class="box">
                                <figure> <a href="#" class="hover-effect popup-gallery"><img width="270" height="160" alt="" src="https://i.imgur.com/JN2wkb6.jpg" draggable="false"></a> </figure>
                                <div class="details"> <span class="price"><small>avg/night</small>$188</span>
                                    <h4 class="box-title">Hotel Hilton<small>Albufeira</small></h4>
                                    <div class="feedback">
                                        <div data-placement="bottom" data-toggle="tooltip" class="fa fa-star" title="" data-original-title="4 stars"><span style="width: 80%;" class="five-stars"></span></div> <span class="review">170 reviews</span>
                                    </div>
                                    <p class="description">For what reason would it be advisable for me to think about business content?</p>
                                    <div class="action"> <a class="button btn-small" href="#">BOOK</a> <a class="button btn-small yellow popup-map" href="#" data-box="37.089072, -8.247880">VIEW ON MAP</a> </div>
                                </div>
                            </article>
                        </li>
                        <li style="width: 270px; float: left; display: block;">
                            <article class="box">
                                <figure> <a href="#" class="hover-effect popup-gallery"><img width="270" height="160" alt="" src="https://i.imgur.com/JN2wkb6.jpg" draggable="false"></a> </figure>
                                <div class="details"> <span class="price"><small>avg/night</small>$322</span>
                                    <h4 class="box-title">Double Tree<small>New delhi</small></h4>
                                    <div class="feedback">
                                        <div data-placement="bottom" data-toggle="tooltip" class="fa fa-star" title="" data-original-title="4 stars"><span style="width: 80%;" class="five-stars"></span></div> <span class="review">485 reviews</span>
                                    </div>
                                    <p class="description">For what reason would it be advisable for me to think about business content?</p>
                                    <div class="action"> <a class="button btn-small" href="#">BOOK</a> <a class="button btn-small yellow popup-map" href="#" data-box="40.463667, -3.749220">VIEW ON MAP</a> </div>
                                </div>
                            </article>
                        </li>
                        <li style="width: 270px; float: left; display: block;">
                            <article class="box">
                                <figure> <a href="#" class="hover-effect popup-gallery"><img width="270" height="160" alt="" src="https://i.imgur.com/JN2wkb6.jpg" draggable="false"></a> </figure>
                                <div class="details"> <span class="price"><small>avg/night</small>$170</span>
                                    <h4 class="box-title">Hotel Taj<small>Mumbai</small></h4>
                                    <div class="feedback">
                                        <div data-placement="bottom" data-toggle="tooltip" class="fa fa-star" title="" data-original-title="4 stars"><span style="width: 80%;" class=""></span></div> <span class="review">75 reviews</span>
                                    </div>
                                    <p class="description">For what reason would it be advisable for me to think about business content?</p>
                                    <div class="action"> <a class="button btn-small" href="#">BOOK</a> <a class="button btn-small yellow popup-map" href="#" data-box="40.705631, -73.978003">VIEW ON MAP</a> </div>
                                </div>
                            </article>
                        </li>
                        <li style="width: 270px; float: left; display: block;">
                            <article class="box">
                                <figure> <a href="#" class="hover-effect popup-gallery"><img width="270" height="160" alt="" src="https://i.imgur.com/JN2wkb6.jpg" draggable="false"></a> </figure>
                                <div class="details"> <span class="price"> <small>avg/night</small> $360 </span>
                                    <h4 class="box-title">Lamon Tree<small>Bangalore</small></h4>
                                    <div class="feedback">
                                        <div data-placement="bottom" data-toggle="tooltip" class="fa fa-star" title="" data-original-title="4 stars"><span style="width: 80%;" class="five-stars"></span></div> <span class="review">270 reviews</span>
                                    </div>
                                    <p class="description">For what reason would it be advisable for me to think about business content?</p>
                                    <div class="action"> <a class="button btn-small" href="#">BOOK</a> <a class="button btn-small yellow popup-map" href="#" data-box="48.856614, 2.352222">VIEW ON MAP</a> </div>
                                </div>
                            </article>
                        </li>
                    </ul>
                </div>
            </div>
        <!-- </div> -->
    </div>
    <br>
    <br>
    <button type="button" class="btn btn-primary" ><a class="nav-link" href="addProduct.php">Agregar Producto</a></button>
</body>
</html>