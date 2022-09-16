<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Product extends Model{
    protected $table = 'product';
    protected $fillable = ['id','name','price','image','status','category_id'] ;
    public $timestamps = false;
    
   public function cate(){
     $cate = Category::where("id",$this->category_id)->first();
     return $cate;
   }
}
?>