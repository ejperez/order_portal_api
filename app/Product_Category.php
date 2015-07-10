<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Category extends Model {

    protected $table = 'product_category';

    public $timestamps = false;

    protected $fillable = ['name'];

    public function products()
    {
        return $this->hasMany('App\Product', 'category_id', 'id');
    }
}
