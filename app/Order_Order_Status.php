<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Order_Status extends Model {

	protected $table = 'order_order_status';

    protected $fillable = ['order_id', 'status_id', 'user_id', 'extra'];

    public function status()
    {
        return $this->hasOne('App\Order_Status', 'id', 'status_id');
    }

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
