<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='posts';
    protected $fillable=['title','description','published_at'];

    public function scopePublished($query) {
        return $query->where('published_at', '>=', Carbon::now()->subdays(7));
    }

}// End Of Class
