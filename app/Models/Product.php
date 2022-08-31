<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;

class Product extends Model
{
    use HasFactory, Commentable;
    protected $fillable =['nom','desc','prix','solde','image','quantite','id_user','nomsociete'];
}
