<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Presentation extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'presentation_id', 'presentation_descripcion'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'presentation';

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
}
