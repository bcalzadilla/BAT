<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Display extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'display_id', 'unit_id', 'template'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'display';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * 
     */
    public function getUnitAssociated()
    {
        return $this->belongsTo('App\Models\Unit','unit_id');
    }
}
