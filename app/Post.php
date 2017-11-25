<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

  public function author()
  {
    return $this->belongsTo(User::class, 'author_id');
  }

  public static function findBySlug($slug)
  {
    return static::where('slug', $slug)->first();
  }

  public static function thumbnail($image , $type)
    {
        // We need to get extension type ( .jpeg , .png ...)
        $ext    = pathinfo($image, PATHINFO_EXTENSION);
        // We remove extension from file name so we can append thumbnail type
        $name   = rtrim($image, '.'. $ext);
        // We merge original name + type + extension
        return $name . '-' . $type . '.' . $ext;
    }

}
