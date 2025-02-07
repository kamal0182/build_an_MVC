<?php
 namespace app\Controller;
class AuthController extends Controller
{
    public function register (){
        $this->setLayout("Auth"); 
        return $this->render("Register");
    }
    public function login (){
        $this->setLayout("Auth"); 
        echo "layout";
        return $this->render("Login");
    }
}