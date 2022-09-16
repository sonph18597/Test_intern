<?php
namespace App\Controllers;

use App\Models\Category;

class CategoryController{
    public function index () {
        $category =Category::all();
        
        return view('category',[
            'category'=>$category
        ]);
    }
}
?>