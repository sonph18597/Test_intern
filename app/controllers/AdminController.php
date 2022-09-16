<?php
namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;

class AdminController{
    public function index () {
        return view('admin',[
        ]);
    }

    public function category(){
        $category = Category::all();
        return view('category-admin',[
            "category" => $category
        ]);
    }

    public function categoryAdd(){
        $category = new Category();
   
        return view('category-add',[
        ]);
    }

    public function categorySaveAdd(){
        Category::create([
            "name" => $_POST['category_name']
        ]);
    header('location: ' . BASE_URL . '/admin/category');
    die;
    }

    public function categoryedit($id){
        $category =  Category::find($id);
        return view('category-edit',[
            "category" => $category
        ]);
    }

    public function categorySaveEdit($id){
        $category =  Category::find($id);
        $category->name = $_POST["category_name"];
        $category->save();
        header('location: ' . BASE_URL . '/admin/category');
        die;
    }

    public function categoryRemove($id){
        Category::destroy($id);
        $product = Product::where('category_id',$id)->delete();
        header('location: ' . BASE_URL . '/admin/category');

    }

    public function product() {
        $product = Product::all();
      
        return view('product-admin',[
            'product' => $product,
        
        ]);
    }

    public function productAdd(){
        $category = Category::all();
        return view('product-add',[
            'category' => $category
        ]);
    }

    public function productSaveAdd(){
        Product::create([
            'name' => $_POST['name'],
            'category_id' =>$_POST['category-id'],
            'price' => $_POST['price'],
            'status' => $_POST['status'],
            'image' => $_POST['image']
        ]);
        header('location: ' . BASE_URL . '/admin/product');
        die;
    }

    public function productEdit($id){
        $product = Product::find($id);
        $category = Category::all();
        return view('product-edit',[
            'product' => $product,
            'category' => $category
        ]);
    }

    public function productSaveEdit($id){
        $product = Product::find($id);
        $product->name = $_POST["name"];
        $product->price = $_POST["price"];
        $product->image = $_POST["image"];
        $product->category_id = $_POST["category-id"];
        $product->status = $_POST['status'];
        $product->save();
        header('location: ' . BASE_URL . '/admin/product');
        die;
    }

    public function productRemove($id){
        Product::destroy($id);
        header('location: ' . BASE_URL . '/admin/product');
    }
}
?>