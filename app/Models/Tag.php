<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @method static firstOrCreate(string[] $array)
 * @property mixed $jobs
 */
class Tag extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function jobs(): BelongsToMany
    {
        return $this->belongsToMany(Job::class);
    }

}
