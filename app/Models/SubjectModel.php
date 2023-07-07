<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectModel extends Model
{
    use HasFactory;

    protected $table = 'subjects';

    static function getSubjects(){
        return self::select('subjects.*')
                        ->get();
    }

    static function getSingle($id){
        return self::find($id);
    }
}
