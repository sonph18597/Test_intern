<?php
namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;

class ProductController{
    public function index () {
        $product =Product::all();
        return view('product',[
            'product'=>$product
        ]);
    }
    public function detail($id){
        $product = Product::find($id) ;
        $category = Category::where('id',$product->category_id);
        return view('product-detail',[
            'product'=>$product
        ]);
    }
}
?>