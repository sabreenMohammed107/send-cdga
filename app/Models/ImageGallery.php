<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageGallery extends Model
{
    protected $fillable = [
        'image_path', 'order','active'
    ];
}
