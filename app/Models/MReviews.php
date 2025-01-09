<?php

namespace App\Models;

use App\Models\MMovies;
use App\Models\MUsers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MReviews extends Model
{
    use HasFactory;

    protected $table = 'm_reviews';

    public function user()
	{
		return $this->belongsTo(MUsers::class);
	}
    public function movie()
	{
		return $this->belongsTo(MMovies::class);
	}
}
