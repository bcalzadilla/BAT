<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BrandPresentation extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'brand_presentation_id', 'presentation_id', 'brand_id'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'brand_presentation';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * 
     */
    public function getPresentationAssociated()
    {
        return $this->belongsTo('App\Models\Presentation','presentation_id');
    }

    /**
     * 
     */
    public function getBrandAssociated()
    {
        return $this->belongsTo('App\Models\Brand','brand_id');
    }
}
