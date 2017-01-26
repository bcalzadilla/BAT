<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'store_id', 'store_name', 'region_id', 'retailer_id'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * 
     */
    public function getUnits()
    {
        return $this->hasMany('App\Models\Unit','store_id');
    }

    /**
     * 
     */
    public function getRegionAssociated()
    {
        return $this->belongsTo('App\Models\Region','region_id');
    }

    /**
     * 
     */
    public function getRetailerAssociated()
    {
        return $this->belongsTo('App\Models\Retailer','retailer_id');
    }
}
