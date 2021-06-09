<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Random extends Model
{
    use HasFactory;

    public $fillable = ['values'];

    public $timestamps = false;

    /**
     * Random has many breakdowns
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function breakdowns()
    {
        return $this->hasMany(\App\Models\Breakdown::class);
    }
}
