<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $fillable = ['category_id', 'name', 'unit_price', 'uom'];

    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo('App\Product_Category', 'category_id', 'id');
    }

    public function order_detail()
    {
        return $this->belongsTo('App\Order_Detail', 'id', 'product_id');
    }
}
