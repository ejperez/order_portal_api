<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer_Credit extends Model {

	protected $table = 'customer_credits';

    protected $primaryKey = 'customer_id';

    protected $fillable = [
        'customer_id',
        'credit_remaining'
    ];

    public function credit()
    {
        return number_format($this->credit_remaining,2);
    }
}
