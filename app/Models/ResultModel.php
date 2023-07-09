<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class ResultModel extends Model
{
    use HasFactory;

    protected $table = 'results';

    static function getSingle($id){
        return self::select('results.*')
        ->where('student_id', '=', $id )
        ->get();
    }
    

    static function findStudent()
    {
        return self::select('student_id')
            ->distinct()
            ->get();
    }

}
