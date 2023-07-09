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
                        // ->get();
                        ->paginate(10);
    }

    static function getSingle($id){
        return self::find($id);
    }

    static function getAllSubjectOfClass($id){
        return self::select('subjects.*')
                    ->where('class', '=', $id)
                    ->orderBy('id')
                    ->get();
                    
    }

}
