<?php include 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>City Gate Travels - Home</title>
        
        <!-- Favicons -->
        <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="assets/images/apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114-precomposed.png">
        <!-- Base Css -->
        <link href="assets/css/base.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!-- page loader -->
        <div class="se-pre-con"></div>
        <div id="page-content">

            <!-- navber -->
           <?php include 'nav.php'; ?>
            <!-- /.nav end -->

            <!-- Slider -->
            <?php include 'slider.php'; ?>
            <!--/end slider -->

            <!-- booking -->
            <?php //include 'bookingform.php'; ?>
            <!--/end bookingform -->



            <!-- popular tour -->
            <section class="popular-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="title">
                                <h2>Popular Tours</h2>
                                <p>Most Popular Tours in the World</p>
                            </div>
                        </div>
                    </div>
                    <div class="row thm-margin">
                     
                        <div id="popular-slide" class="owl-carousel">
                        <?php
                            try {
                                $stmt = $db->query('SELECT * FROM tour');
                                while($row = $stmt->fetch()){ ?>
                            <div class="item">
                                <div class="grid-item-inner">
                                    <div class="grid-img-thumb">
                                        <!-- ribbon -->
                                        <!--<div class="ribbon"><span>Popular</span></div>-->
                                        <a href="#"><img src="<?php echo $row['tour_pic']; ?>" alt="1" class="img-responsive" /></a>
                                    </div>
                                    <div class="grid-content">
                                        <div class="grid-price text-right">
                                            Only <span><sub>N</sub><?php echo $row['price']; ?></span>
                                        </div>
                                        <div class="grid-text">
                                            <div class="place-name"><?php echo $row['tour_title']; ?></div>
                                            <div class="travel-times">
                                                <h4 class="pull-left">3 days 2 nights </h4>
                                                <span class="pull-right">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php }
                                 } catch(PDOException $e) {
                                 echo $e->getMessage();
                                    }
                            ?> 

                        </div>

                    </div><!-- /end row -->
                </div>
            </section>
            <!--/end popular tour -->



            <!-- service -->
            <section class="service-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="title">
                                <h2>We love what we do</h2>
                                <p>This is City Gate Travel Agency !</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="col-sm-3 inner-box">
                                <article>
                                    <div class="icon"><span class="flaticon-placeholder"></span></div>
                                    <div class="content-text">
                                        <h5>Vacation Packages</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-3 inner-box">
                                <article>
                                    <div class="icon"><span class="flaticon-map"></span></div>
                                    <div class="content-text">
                                        <h5>Fast Flight Booking</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-3 inner-box">
                                <article>
                                    <div class="icon"><span class="flaticon-lemonade"></span></div>
                                    <div class="content-text">
                                        <h5>Visa Advisory</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-3 inner-box">
                                <article>
                                    <div class="icon"><span class="flaticon-party"></span></div>
                                    <div class="content-text">
                                        <h5>Airport Pickup</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /end services -->


            
            <!-- destination -->
            <section class="destination">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="title">
                                <h2>Popular Destination</h2>
                                <p>This is Amazing Travel Agency!</p>
                            </div>
                        </div>
                    </div>
                    <div class="row thm-margin">
                        <div class="col-md-3 col-sm-4 thm-padding">
                            <div class="destination-grid">
                                <a href="#"><img src="assets/images/destination-370x370-1.jpg" class="img-responsive" alt=""></a>
                                <div class="mask">
                                    <h2>Sydney</h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                    <a href="#" class="thm-btn">Read More</a>
                                </div>
                                <div class="dest-name">
                                    <h5>Sydney Opera House</h5>
                                    <h4>Sydney</h4>
                                </div>
                                <div class="dest-icon">
                                    <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                    <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                    <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                    <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 thm-padding">
                            <div class="destination-grid">
                                <a href="#"><img src="assets/images/destination-370x370-2.jpg" class="img-responsive" alt=""></a>
                                <div class="mask">
                                    <h2>Brazil</h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                    <a href="#" class="thm-btn">Read More</a>
                                </div>
                                <div class="dest-name">
                                    <h5>Fernando de Noronha</h5>
                                    <h4>Brazil</h4>
                                </div>
                                <div class="dest-icon">
                                    <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                    <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                    <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                    <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 thm-padding">
                            <div class="destination-grid">
                                <a href="#"><img src="assets/images/destination-370x370-3.jpg" class="img-responsive" alt=""></a>
                                <div class="mask">
                                    <h2>Istanbul</h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                    <a href="#" class="thm-btn">Read More</a>
                                </div>
                                <div class="dest-name">
                                    <h5>Aya Sofya</h5>
                                    <h4>Istanbul</h4>
                                </div>
                                <div class="dest-icon">
                                    <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                    <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                    <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                    <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 thm-padding">
                            <div class="destination-grid">
                                <a href="#"><img src="assets/images/destination-370x370-4.jpg" class="img-responsive" alt=""></a>
                                <div class="mask">
                                    <h2>India</h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                    <a href="#" class="thm-btn">Read More</a>
                                </div>
                                <div class="dest-name">
                                    <h5>Taj Mahal</h5>
                                    <h4>India</h4>
                                </div>
                                <div class="dest-icon">
                                    <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                    <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                    <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                    <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 thm-padding">
                            <div class="destination-grid">
                                <a href="#"><img src="assets/images/destination-370x370-5.jpg" class="img-responsive" alt=""></a>
                                <div class="mask">
                                    <h2>Italy</h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                    <a href="#" class="thm-btn">Read More</a>
                                </div>
                                <div class="dest-name">
                                    <h5>Canals of Venice</h5>
                                    <h4>Italy</h4>
                                </div>
                                <div class="dest-icon">
                                    <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                    <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                    <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                    <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 thm-padding">
                            <div class="destination-grid">
                                <a href="#"><img src="assets/images/destination-370x370-6.jpg" class="img-responsive" alt=""></a>
                                <div class="mask">
                                    <h2>Paris</h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                    <a href="#" class="thm-btn">Read More</a>
                                </div>
                                <div class="dest-name">
                                    <h5>Eiffel Tower</h5>
                                    <h4>Paris</h4>
                                </div>
                                <div class="dest-icon">
                                    <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                    <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                    <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                    <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 hidden-sm thm-padding">
                            <div class="destination-grid">
                                <a href="#"><img src="assets/images/destination-370x370-7.jpg" class="img-responsive" alt=""></a>
                                <div class="mask">
                                    <h2>London</h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                    <a href="#" class="thm-btn">Read More</a>
                                </div>
                                <div class="dest-name">
                                    <h5>Hop on Hop off Bus Tour</h5>
                                    <h4>London</h4>
                                </div>
                                <div class="dest-icon">
                                    <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                    <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                    <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                    <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 hidden-sm thm-padding">
                            <div class="destination-grid">
                                <a href="#"><img src="assets/images/destination-370x370-8.jpg" class="img-responsive" alt=""></a>
                                <div class="mask">
                                    <h2>London</h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                    <a href="#" class="thm-btn">Read More</a>
                                </div>
                                <div class="dest-name">
                                    <h5>Hop on Hop off Bus Tour</h5>
                                    <h4>London</h4>
                                </div>
                                <div class="dest-icon">
                                    <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                    <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                    <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                    <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- hotel -->
            <section class="hotel-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="title">
                                <h2>Recommended Hotels</h2>
                                <p>This is Amazing hotel in Paris !</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="hotel-item">
                                <!-- hotel Image -->
                                <div class="hotel-image">
                                    <a href="#">
                                        <div class="img"><img src="assets/images/hotel-1.jpg"  alt="" class="img-responsive"></div>
                                    </a>
                                </div>
                                <!-- hotel body -->
                                <div class="hotel-body">
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <!-- title -->
                                    <h3>Tours in Greece</h3>
                                    <!-- Text Intro -->
                                    <p>Etiam maximus molestie accumsan. Sed metus sapien, fermentum nec lorem ac.</p>
                                    <div class="free-service">
                                        <i class="flaticon-television" data-toggle="tooltip" data-placement="top" title="" data-original-title="Plasma TV with cable chanels"></i>
                                        <i class="flaticon-swimmer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Swimming pool"></i>
                                        <i class="flaticon-wifi" data-toggle="tooltip" data-placement="top" title="" data-original-title="Free wifi"></i>
                                        <i class="flaticon-weightlifting" data-toggle="tooltip" data-placement="top" title="" data-original-title="Fitness center"></i>
                                        <i class="flaticon-lemonade" data-toggle="tooltip" data-placement="top" title="" data-original-title="Restaurant"></i>
                                    </div>
                                </div>
                                <div class="hotel-right"> 
                                    <div class="hotel-person">from <span class="color-blue">$273</span> person</div>
                                    <a class="thm-btn" href="#">Details</a>
                                </div>
                            </div>
                            <div class="hotel-item">
                                <!-- hotel Image -->
                                <div class="hotel-image">
                                    <a href="#">
                                        <div class="img"><img src="assets/images/hotel-2.jpg"  alt="" class="img-responsive"></div>
                                    </a>
                                </div>
                                <!-- hotel body -->
                                <div class="hotel-body">
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <!-- title -->
                                    <h3>Tours in Greece</h3>
                                    <!-- Text Intro -->
                                    <p>Etiam maximus molestie accumsan. Sed metus sapien, fermentum nec lorem ac.</p>
                                    <div class="free-service">
                                        <i class="flaticon-television" data-toggle="tooltip" data-placement="top" title="" data-original-title="Plasma TV with cable chanels"></i>
                                        <i class="flaticon-swimmer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Swimming pool"></i>
                                        <i class="flaticon-wifi" data-toggle="tooltip" data-placement="top" title="" data-original-title="Free wifi"></i>
                                        <i class="flaticon-weightlifting" data-toggle="tooltip" data-placement="top" title="" data-original-title="Fitness center"></i>
                                        <i class="flaticon-lemonade" data-toggle="tooltip" data-placement="top" title="" data-original-title="Restaurant"></i>
                                    </div>
                                </div>
                                <div class="hotel-right"> 
                                    <div class="hotel-person">from <span class="color-blue">$273</span> person</div>
                                    <a class="thm-btn" href="#">Details</a>
                                </div>
                            </div>
                            <div class="hotel-item">
                                <!-- hotel Image -->
                                <div class="hotel-image">
                                    <a href="#">
                                        <div class="img"><img src="assets/images/hotel-3.jpg"  alt="" class="img-responsive"></div>
                                    </a>
                                </div>
                                <!-- hotel body -->
                                <div class="hotel-body">
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <!-- title -->
                                    <h3>Burj Al Arab</h3>
                                    <!-- Text Intro -->
                                    <p>Etiam maximus molestie accumsan. Sed metus sapien, fermentum nec lorem ac.</p>
                                    <div class="free-service">
                                        <i class="flaticon-television" data-toggle="tooltip" data-placement="top" title="" data-original-title="Plasma TV with cable chanels"></i>
                                        <i class="flaticon-swimmer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Swimming pool"></i>
                                        <i class="flaticon-wifi" data-toggle="tooltip" data-placement="top" title="" data-original-title="Free wifi"></i>
                                        <i class="flaticon-weightlifting" data-toggle="tooltip" data-placement="top" title="" data-original-title="Fitness center"></i>
                                        <i class="flaticon-lemonade" data-toggle="tooltip" data-placement="top" title="" data-original-title="Restaurant"></i>
                                    </div>
                                </div>
                                <div class="hotel-right"> 
                                    <div class="hotel-person">from <span class="color-blue">$989</span> person</div>
                                    <a class="thm-btn" href="#">Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="hotel-item">
                                <!-- hotel Image -->
                                <div class="hotel-image">
                                    <a href="#">
                                        <div class="img"><img src="assets/images/hotel-4.jpg"  alt="" class="img-responsive"></div>
                                    </a>
                                </div>
                                <!-- hotel body -->
                                <div class="hotel-body">
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <!-- title -->
                                    <h3>Tours in Greece</h3>
                                    <!-- Text Intro -->
                                    <p>Etiam maximus molestie accumsan. Sed metus sapien, fermentum nec lorem ac.</p>
                                    <div class="free-service">
                                        <i class="flaticon-television" data-toggle="tooltip" data-placement="top" title="" data-original-title="Plasma TV with cable chanels"></i>
                                        <i class="flaticon-swimmer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Swimming pool"></i>
                                        <i class="flaticon-wifi" data-toggle="tooltip" data-placement="top" title="" data-original-title="Free wifi"></i>
                                        <i class="flaticon-weightlifting" data-toggle="tooltip" data-placement="top" title="" data-original-title="Fitness center"></i>
                                        <i class="flaticon-lemonade" data-toggle="tooltip" data-placement="top" title="" data-original-title="Restaurant"></i>
                                    </div>
                                </div>
                                <div class="hotel-right"> 
                                    <div class="hotel-person">from <span class="color-blue">$273</span> person</div>
                                    <a class="thm-btn" href="#">Details</a>
                                </div>
                            </div>
                            <div class="hotel-item">
                                <!-- hotel Image -->
                                <div class="hotel-image">
                                    <a href="#">
                                        <div class="img"><img src="assets/images/hotel-5.jpg"  alt="" class="img-responsive"></div>
                                    </a>
                                </div>
                                <!-- hotel body -->
                                <div class="hotel-body">
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <!-- title -->
                                    <h3>Tours in Greece</h3>
                                    <!-- Text Intro -->
                                    <p>Etiam maximus molestie accumsan. Sed metus sapien, fermentum nec lorem ac.</p>
                                    <div class="free-service">
                                        <i class="flaticon-television" data-toggle="tooltip" data-placement="top" title="" data-original-title="Plasma TV with cable chanels"></i>
                                        <i class="flaticon-swimmer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Swimming pool"></i>
                                        <i class="flaticon-wifi" data-toggle="tooltip" data-placement="top" title="" data-original-title="Free wifi"></i>
                                        <i class="flaticon-weightlifting" data-toggle="tooltip" data-placement="top" title="" data-original-title="Fitness center"></i>
                                        <i class="flaticon-lemonade" data-toggle="tooltip" data-placement="top" title="" data-original-title="Restaurant"></i>
                                    </div>
                                </div>
                                <div class="hotel-right"> 
                                    <div class="hotel-person">from <span class="color-blue">$273</span> person</div>
                                    <a class="thm-btn" href="#">Details</a>
                                </div>
                            </div>
                            <div class="hotel-item">
                                <!-- hotel Image -->
                                <div class="hotel-image">
                                    <a href="#">
                                        <div class="img"><img src="assets/images/hotel-6.jpg"  alt="" class="img-responsive"></div>
                                    </a>
                                </div>
                                <!-- hotel body -->
                                <div class="hotel-body">
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <!-- title -->
                                    <h3>Park Hyatt Hotel</h3>
                                    <!-- Text Intro -->
                                    <p>Etiam maximus molestie accumsan. Sed metus sapien, fermentum nec lorem ac.</p>
                                    <div class="free-service">
                                        <i class="flaticon-television" data-toggle="tooltip" data-placement="top" title="" data-original-title="Plasma TV with cable chanels"></i>
                                        <i class="flaticon-swimmer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Swimming pool"></i>
                                        <i class="flaticon-wifi" data-toggle="tooltip" data-placement="top" title="" data-original-title="Free wifi"></i>
                                        <i class="flaticon-weightlifting" data-toggle="tooltip" data-placement="top" title="" data-original-title="Fitness center"></i>
                                        <i class="flaticon-lemonade" data-toggle="tooltip" data-placement="top" title="" data-original-title="Restaurant"></i>
                                    </div>
                                </div>
                                <div class="hotel-right"> 
                                    <div class="hotel-person">from <span class="color-blue">$273</span> person</div>
                                    <a class="thm-btn" href="#">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonial section -->
            <div class="reference home-ref">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="title">
                                <h2>References</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="testimonials">
                            <div class="carousel" data-ride="carousel" id="quote-carousel">
                                <div class="carousel-inner">
                                    <!-- Quote 1 -->  
                                    <div class="item col-sm-10 col-sm-offset-1">
                                        <blockquote>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                                            aliquam architecto beatae dolorem, enim error eveniet harum iste molestias
                                            neque nisi placeat possimus quaerat quam repudiandae sint soluta unde vero.
                                            <span class="author">- Andrew Adams, Google Inc</span>
                                        </blockquote>
                                    </div>
                                    <!-- Quote 2 -->  
                                    <div class="item col-sm-10 col-sm-offset-1">
                                        <blockquote>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                                            aliquam architecto beatae doloremaliquam architecto beatae dolorem, enim error
                                            eveniet harum iste molestias neque nisi placeat.
                                            <span class="author">- Jhon Smith, Facebook Inc</span>
                                        </blockquote>
                                    </div>
                                    <!-- Quote 3 -->
                                    <div class="item col-sm-10 col-sm-offset-1 active">
                                        <blockquote>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                                            aliquam architecto beatae dolorem, enim error eveniet harum iste molestias
                                            neque nisi placeat possimus quaerat quam repudiandae sint.
                                            <span class="author">- Bob Smith, Fitbit</span>
                                        </blockquote>
                                    </div>
                                </div>
                                <!-- Bottom Carousel Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#quote-carousel" data-slide-to="0" class=""><img class="img-responsive " src="assets/images/avtar-1.jpg" alt=""></li>
                                    <li data-target="#quote-carousel" data-slide-to="1" class=""><img class="img-responsive" src="assets/images/avtar-2.jpg" alt=""></li>
                                    <li data-target="#quote-carousel" data-slide-to="2" class="active"><img class="img-responsive" src="assets/images/avtar-3.jpg" alt=""></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- package section -->
            <section class="package">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="title">
                                <h2>Latest Tour Package</h2>
                                <p>A great Collection of our Tour Packages</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <div class="package-wiget">
                                <div class="grid">
                                    <figure class="effect-milo">
                                        <img src="assets/images/Package-800x500-1.jpg" class="img-responsive" alt="">
                                        <figcaption>
                                            <div class="effect-block">
                                                <h3>Hilton Molino Stucky</h3>
                                                <div class="package-ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <button type="button" class="thm-btn">Explore Now</button>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="package-content">
                                    <h5>Hilton Molino Stucky</h5>
                                    <div class="package-price">from
                                        <span class="price">
                                            <span class="amount">$200.00</span>
                                        </span>
                                        /night
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <div class="package-wiget">
                                <div class="grid">
                                    <figure class="effect-milo">
                                        <img src="assets/images/Package-800x500-2.jpg" class="img-responsive" alt="">
                                        <figcaption>
                                            <div class="effect-block">
                                                <h3>Palolem, India</h3>
                                                <div class="package-ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <button type="button" class="thm-btn">Explore Now</button>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="package-content">
                                    <h5>Palolem, India</h5>
                                    <div class="package-price">from
                                        <span class="price">
                                            <span class="amount">$150.00</span>
                                        </span>
                                        /night
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <div class="package-wiget">
                                <div class="grid">
                                    <figure class="effect-milo">
                                        <div class="ribbon"><span>Popular</span></div>
                                        <img src="assets/images/Package-800x500-3.jpg" class="img-responsive" alt="">
                                        <figcaption>
                                            <div class="effect-block">
                                                <h3>IEiffel Tower, Paris</h3>
                                                <div class="package-ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <button type="button" class="thm-btn">Explore Now</button>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="package-content">
                                    <h5>IEiffel Tower, Paris</h5>
                                    <div class="package-price">from
                                        <span class="price">
                                            <span class="amount">$290.00</span>
                                        </span>
                                        /night
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <div class="package-wiget">
                                <div class="grid">
                                    <figure class="effect-milo">
                                        <img src="assets/images/Package-800x500-4.jpg" class="img-responsive" alt="">
                                        <figcaption>
                                            <div class="effect-block">
                                                <h3>Canals of Venice, Italy</h3>
                                                <div class="package-ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <button type="button" class="thm-btn">Explore Now</button>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="package-content">
                                    <h5>Canals of Venice, Italy</h5>
                                    <div class="package-price">from
                                        <span class="price">
                                            <span class="amount">$189.00</span>
                                        </span>
                                        /night
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <div class="package-wiget">
                                <div class="grid">
                                    <figure class="effect-milo">
                                        <img src="assets/images/Package-800x500-5.jpg" class="img-responsive" alt="">
                                        <figcaption>
                                            <div class="effect-block">
                                                <h3>Itali, Pisa</h3>
                                                <div class="package-ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <button type="button" class="thm-btn">Explore Now</button>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="package-content">
                                    <h5>Itali, Pisa</h5>
                                    <div class="package-price">from
                                        <span class="price">
                                            <span class="amount">$139.00</span>
                                        </span>
                                        /night
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <div class="package-wiget">
                                <div class="grid">
                                    <figure class="effect-milo">
                                        <div class="ribbon"><span>New</span></div>
                                        <img src="assets/images/Package-800x500-6.jpg" class="img-responsive" alt="">
                                        <figcaption>
                                            <div class="effect-block">
                                                <h3>St Paul's Cathedral, London</h3>
                                                <div class="package-ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <button type="button" class="thm-btn">Explore Now</button>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="package-content">
                                    <h5>St Paul's Cathedral, London</h5>
                                    <div class="package-price">from
                                        <span class="price">
                                            <span class="amount">$180.00</span>
                                        </span>
                                        /night
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3 hidden-sm">
                            <div class="package-wiget">
                                <div class="grid">
                                    <figure class="effect-milo">
                                        <img src="assets/images/Package-800x500-7.jpg" class="img-responsive" alt="">
                                        <figcaption>
                                            <div class="effect-block">
                                                <h3>Castel Sant'Angelo. Rome</h3>
                                                <div class="package-ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <button type="button" class="thm-btn">Explore Now</button>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="package-content">
                                    <h5>Castel Sant'Angelo. Rome</h5>
                                    <div class="package-price">from
                                        <span class="price">
                                            <span class="amount">$170.00</span>
                                        </span>
                                        /night
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3 hidden-sm">
                            <div class="package-wiget">
                                <div class="grid">
                                    <figure class="effect-milo">
                                        <img src="assets/images/Package-800x500-8.jpg" class="img-responsive" alt="">
                                        <figcaption>
                                            <div class="effect-block">
                                                <h3>Giza Necropolis, Egypt</h3>
                                                <div class="package-ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <button type="button" class="thm-btn">Explore Now</button>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="package-content">
                                    <h5>Giza Necropolis, Egypt</h5>
                                    <div class="package-price">from
                                        <span class="price">
                                            <span class="amount">$200.00</span>
                                        </span>
                                        /night
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Counter -->
            <section class="counter-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="count-content">
                                <div class="count-icon">
                                    <i class="flaticon-earth-globe"></i>
                                </div>
                                <div class="count">
                                    <h1 class="count-number">348</h1>
                                    <div class="count-text">Destinations</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="count-content">
                                <div class="count-icon">
                                    <i class="flaticon-cabin"></i>
                                </div>
                                <div class="count">
                                    <h1 class="count-number">89</h1>
                                    <div class="count-text">Hotels</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="count-content">
                                <div class="count-icon">
                                    <i class="flaticon-photographer-with-cap-and-glasses"></i>
                                </div>
                                <div class="count">
                                    <h1 class="count-number">987</h1>
                                    <div class="count-text">Tourists</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="count-content">
                                <div class="count-icon">
                                    <i class="flaticon-airplane-flight-in-circle-around-earth"></i>
                                </div>
                                <div class="count">
                                    <h1 class="count-number">891</h1>
                                    <div class="count-text">Tour</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog section -->
            <section class="blog-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="title">
                                <h2>Latest Blog</h2>
                                <p>Checkout our Latest Blogs and News</p>
                            </div>
                        </div>
                    </div>
                    <div class="row thm-margin">
                        <div id="blog-slide" class="owl-carousel">
                            <!-- blog post item -->
                            <div class="item">
                                <div class="blog-content">
                                    <div class="blog-img image-hover">
                                        <a href="#"><img src="assets/images/blog-800x250-1.jpg" class="img-responsive" alt=""></a>
                                        <span class="post-date">14 November 2016</span>
                                    </div>
                                    <h4><a href="#">It is a long established fact that</a></h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                            <!-- blog post item -->
                            <div class="item">
                                <div class="blog-content">
                                    <div class="blog-img image-hover">
                                        <a href="#"><img src="assets/images/blog-800x250-2.jpg" class="img-responsive" alt=""></a>
                                        <span class="post-date">14 November 2016</span>
                                    </div>
                                    <h4><a href="#">It is a long established fact that</a></h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                            <!-- blog post item -->
                            <div class="item">
                                <div class="blog-content">
                                    <div class="blog-img image-hover">
                                        <a href="#"><img src="assets/images/blog-800x250-3.jpg" class="img-responsive" alt=""></a>
                                        <span class="post-date">14 November 2016</span>
                                    </div>
                                    <h4><a href="#">It is a long established fact that</a></h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                            <!-- blog post item -->
                            <div class="item">
                                <div class="blog-content">
                                    <div class="blog-img image-hover">
                                        <a href="#"><img src="assets/images/blog-800x250-4.jpg" class="img-responsive" alt=""></a>
                                        <span class="post-date">14 November 2016</span>
                                    </div>
                                    <h4><a href="#">It is a long established fact that</a></h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                            <!-- blog post item -->
                            <div class="item">
                                <div class="blog-content">
                                    <div class="blog-img image-hover">
                                        <a href="#"><img src="assets/images/blog-800x250-5.jpg" class="img-responsive" alt=""></a>
                                        <span class="post-date">14 November 2016</span>
                                    </div>
                                    <h4><a href="#">It is a long established fact that</a></h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Newsletter -->
            <section class="get-offer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <span>Subscribe to our Newsletter</span>
                            <h2>& Discover the best offers!</h2>
                        </div>
                        <div class="col-sm-7">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter Your Email" name="q">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="flaticon-paper-plane"></i> Subscribe</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Footer Section -->
        <?php include 'footer.php'; ?>
        <!-- jQuery -->
        <script src="assets/js/jquery.min.js" type="text/javascript"></script>
        <!-- jquery ui js -->
        <script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>
        <!-- bootstrap js -->
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- fraction slider js -->
        <script src="assets/js/jquery.fractionslider.js" type="text/javascript"></script>
        <!-- owl carousel js --> 
        <script src="assets/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
        <!-- counter -->
        <script src="assets/js/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="assets/js/waypoints.js" type="text/javascript"></script>
        <!-- filter portfolio -->
        <script src="assets/js/jquery.shuffle.min.js" type="text/javascript"></script>
        <script src="assets/js/portfolio.js" type="text/javascript"></script>
        <!-- magnific popup -->
        <script src="assets/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <!-- range slider -->
        <script src="assets/js/ion.rangeSlider.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script>
        <!-- custom -->
        <script src="assets/js/custom.js" type="text/javascript"></script>
    </body>

<!-- Mirrored from travel.bdtask.com/travel_demo/ by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 09 Jan 2017 10:34:22 GMT -->
</html>