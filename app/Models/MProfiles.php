<?php

namespace App\Models;

use App\Models\MUsers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MProfiles extends Model
{
    use HasFactory;

    protected $table = 'm_profiles';

    public function user()
	{
		return $this->belongsTo(MUsers::class);
	}
}
