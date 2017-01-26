<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unit extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'unit_id', 'store_id',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'unit';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * 
     */
    public function getDisplays()
    {
        return $this->hasMany('App\Models\Display','unit_id');
    }

    /**
     * 
     */
    public function getStoreAssociated()
    {
        return $this->belongsTo('App\Models\Store','store_id');
    }
}
