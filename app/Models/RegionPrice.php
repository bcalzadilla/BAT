<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegionPrice extends Model
{
     use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'region_price_id', 'region_id', 'brand_id', 'retailer_price'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'region_price';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

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
    public function getBrandAssociated()
    {
        return $this->belongsTo('App\Models\Brand','brand_id');
    }
}
