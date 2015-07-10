<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model {

    protected $table = 'order_details';

    public function product()
    {
        return $this->hasOne('App\Product', 'id', 'product_id');
    }

    public function getPrice()
    {
        return number_format($this->quantity * $this->unit_price, 2);
    }
}
