<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    public function words()
    {
        return $this->hasMany(Word::class);
    }
    
    public function getByCategory(int $limit_count = 10)
    {
        return $this->words()->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
