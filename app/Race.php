<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Race extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'races';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'class',
    ];

    /**
     * Get the animals for the races.
     *
     * @return HasMany
     */
    public function animals()
    {
        return $this->hasMany(App\Animal);
    }
}
