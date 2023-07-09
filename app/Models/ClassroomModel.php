<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class ClassroomModel extends Model
{
    use HasFactory;

    protected $table = 'classroom';

    static function getClass(){
        return self::select('classroom.*')
                        // ->get();
                        ->paginate(10);
    }

    static function getSingle($id){
        return self::find($id);
    }

    static function getOnlyClass(){
        return self::select('name')
                     ->get();
    }

    static function getClassId($name){
        return self::select('classroom.*')
                    ->where('name', '=', $name)
                    ->get();
    }

    static function checkNameExists($classroomName){
        $checking = self::where('name', strtoupper($classroomName))->first();
        return !is_null($checking); // Returns true if classname exists, false otherwise
    }

}
