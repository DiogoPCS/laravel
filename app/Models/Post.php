<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = [
        'id',
        'description',
        'picture',
        'user_id'
    ];

    public function users()
    {
            return $this->belongsTo(User::class);
            //Pertence a muitos Users
    }
}
