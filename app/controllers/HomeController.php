<?php
namespace App\Controllers;

use App\Models\Email;
use App\Models\Product;

class HomeController{
    public function index () {
        $product =Product::all();
        return view('product',[
            'product'=>$product
        ]);
    }
    public function formEmail(){
        return view("form-email",[
        ]);
    }

    public function sendEmail(){
        $mail = new Email();
        $mail->send($_POST['email'],$_POST['content']);
        header('location: ' . BASE_URL . '/');
       
    }
}
?>