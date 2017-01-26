<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'brand_id', 'brand_name', 'bat_price'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'brand';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * 
     */
    public function getBrandPresentations()
    {
        return $this->hasMany('App\Models\BrandPresentation','brand_id');
    }

    /**
     * 
     */
    public function getRegionPrices()
    {
        return $this->hasMany('App\Models\RegionPrice','brand_id');
    }
}
