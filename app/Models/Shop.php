<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Owner;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Shop extends Model
{
    use HasFactory;

    public function owner(): BelongsTo{
        return $this->belongsTo(Owner::class);
    }
}
