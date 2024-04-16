<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['dep_name', 'teacher_name', 'email', 'password', 'image', 'status'];

    protected static $teacher, $image, $imgName, $imgDirectory, $imgUrl;

    protected static function imageUpload($request, $teacher = null){
        self::$image = $request->file('image');
        if (self::$image){
            if (!empty($teacher)){
                if (file_exists($teacher->image)){
                    unlink($teacher->image);
                }
            }
            self::$imgName = rand().'.'.self::$image->getClientOriginalExtension();
            self::$imgDirectory = 'adminAssets/uploaded-file/department/';
            self::$image->move(self::$imgDirectory, self::$imgName);
            self::$imgUrl = self::$imgDirectory.self::$imgName;
        }else{
            if (!empty($teacher)){
                self::$imgUrl = $teacher->image;
            }else{
                self::$imgUrl = null;
            }
        }
        return self::$imgUrl;
    }
    public static function createTeacher($request ){
        self::$teacher = new Teacher();
        self::$teacher->department_id = $request->department_id;
        self::$teacher->teacher_name = $request->teacher_name;
        self::$teacher->email = $request->email;
        self::$teacher->password = bcrypt($request->password);
        self::$teacher->mobile = $request->mobile;
        self::$teacher->image = self::imageUpload($request);
        self::$teacher->status = $request->status;
        self::$teacher->save();
    }
    public static function updateTeacher($request, $id){
        self::$teacher = Teacher::find($id);
        self::$teacher->department_id = $request->department_id;
        self::$teacher->teacher_name = $request->teacher_name;
        self::$teacher->email = $request->email;
        self::$teacher->password = bcrypt($request->password);
        self::$teacher->mobile = $request->mobile;
        self::$teacher->image = self::imageUpload($request, self::$teacher);
        self::$teacher->status = $request->status;
        self::$teacher->save();
    }

    public function department(){
        return $this->belongsTo(Department::class);
    }
}
