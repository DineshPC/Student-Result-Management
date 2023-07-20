<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamModel extends Model
{
    use HasFactory;
    protected $table = 'exam';

    static function getAllExams(){
        return self::select('exam.*')
                        // ->get();
                        ->paginate(10);
    }

    static function getSingle($id){
        return self::find($id);
    }

    static function existingExam( $examMonth , $examYear , $examType){
        return self::where('exam_month', $examMonth)
        ->where('exam_year', $examYear)
        ->where('exam_type', $examType)
        ->exists();
    }
    
}
