<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Spouse extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'gender',
        'mobile',
        'parent_house'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
