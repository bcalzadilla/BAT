<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Retailer extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'retailer_id', 'retailer_name'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'retailer';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * 
     */
    public function getStores()
    {
        return $this->hasMany('App\Models\Store','retailer_id');
    }

}
