<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;

    protected $fillable = [
       'user_id',
       'title',
       'slug',
       'content',
       'image_path',
       'is_published'
    ];

//Relation: un article a^^artient à un utilisateur
//$article->user: on r&cupère l'article et l'utilisateur associé à l'article
//$article->user(): on récupère la relation entre l'article et l'utilisateur associé
    public function user(){
        return $this->belongsTo(User::class);
    }
}
