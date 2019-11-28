<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Animal extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'animals';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'gender', 'age', 'weight', 'height',
    ];

    /**
     * Get the races that owns the animal
     *
     * @return BelongsTo
     */
    public function race()
    {
        return $this->belongsTo('App\Race');
    }
}
