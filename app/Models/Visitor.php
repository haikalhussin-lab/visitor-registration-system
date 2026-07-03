<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Visitor extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    use SoftDeletes;
    protected $fillable = ['name', 'phone', 'email'];
    protected $appends = ['image'];
    
    public function getImageAttribute()
    {
        return $this->getFirstMediaUrl('images')??null;
    }
}
