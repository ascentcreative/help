<?php

namespace AscentCreative\Help\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FieldHelp extends Model {

    use HasFactory;

    public $fillable = ['path', 'helpkey', 'title', 'text'];

    public $table = 'fieldhelp';


    public static function forKey($key, $title=null) {

        $split = explode('.', $key);
        $key = array_pop($split);
        $path = join('.', $split);

        return FieldHelp::firstOrCreate([
            'path'=>$path,
            'helpkey'=>$key
        ], [
            'title'=>$title
        ]); 

    }

}