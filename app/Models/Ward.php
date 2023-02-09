<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;

    public $with = ['lga'];

    /**
     * Get the lga that owns the Ward
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lga()
    {
        return $this->belongsTo(LGA::class, 'lga_id');
    }
}
