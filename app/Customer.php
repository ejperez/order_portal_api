<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {

    protected $fillable = [
        'id',
        'first_name',
        'middle_name',
        'last_name',
        'company_id'
    ];

    public function credit()
    {
        return $this->hasOne('App\Customer_Credit', 'customer_id', 'id');
    }

    public function fullName()
    {
        return $this->first_name.' '.$this->middle_name.' '.$this->last_name;
    }
}
