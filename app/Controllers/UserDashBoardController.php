<?php
 namespace App\Controllers;

 class UserDashBoardController extends BaseController{
    public function renderUserDashBoard(){
        $this->render('user/dashboard');
    }
 }

?>