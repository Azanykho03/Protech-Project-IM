<?php
$router -> setBasepath(''); // Set this if your app is in a subdirectory

//for landing page 
$router -> map('GET','/','App\Controllers\HomeController#index','home');

//public pages
$router -> map('GET','/auth','App\Controllers\AuthController#login_register','login_register');


//for users
$router -> map('GET','/services','App\Controllers\ServicesController#services','services');


//for user dashboard page
$router -> map('GET','/user/dashboard','App\Controllers\UserDashBoardController#renderUserDashBoard', 'user_dashboard');

//for user service page
$router -> map('GET','/user/services','App\Controllers\ServicesController#renderServices', 'user_service');

//for user product page
$router -> map('GET','/user/product','App\Controllers\ProductController#renderProduct', 'user_product');

?>
