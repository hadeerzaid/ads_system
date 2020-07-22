<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddBanner extends Model
{
    protected $fillable = [
        'title', 'description', 'image','date_from','date_to','duration','frequency','last_view_at'
    ];
}
