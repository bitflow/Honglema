<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model{
    use SoftDeletes;
    
    protected $table = 'brands';

    public $timestamps = false;

    protected $primaryKey = 'brand_id';

    protected $fillable = [
        'username',
        'mobile',
        'weixinNo',
        'title',
        'company',
        'brand',
        'sales',
        'category',
        'factory',
        'factorySize',
        'design',
        'country',
        'province',
        'city',
        'region',
        'address',
        'product',
        'price',
        'style',
        'customPosition',
        'customAge',
        'refund',
        'description',
    ];

    public static $rules = array(
        'username' => 'min:2',
        'mobile' => 'between:11,11',
        'address' => 'required'
    );

    public function pictures()
    {
        return $this->hasMany('App\Models\ProductPicture', 'id')->where('type', '=', 1);
    }
}
