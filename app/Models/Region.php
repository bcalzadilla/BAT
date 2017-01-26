<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Region extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'region_id', 'region_name', 'brand_id', 'country_id'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'region';

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
        return $this->hasMany('App\Models\Store','region_id');
    }

    /**
     * 
     */
    public function getRegionPrices()
    {
        return $this->hasMany('App\Models\RegionPrice','region_id');
    }
}
