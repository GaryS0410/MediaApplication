<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/** 
 *  @property int $id
 *  @property string $api_lookup_id
 *  @property int $user_id
 */
class UserFavourites extends Model
{
    protected $fillable = ['api_lookup_id', 'user_id'];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
