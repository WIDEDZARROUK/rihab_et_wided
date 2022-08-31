<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentairs extends Model
{
    use HasFactory;
    protected $table="commentairs";
    protected $fillable=
        [
            "post_id",
            "user_id",
            "body",
            "user_image",
            "user_name",
        ];
}
