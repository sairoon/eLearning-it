<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Teacher;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['course_title', 'lecture','course_duration','short_description',
        'long_description','course_level','course_fee','course_discount','discounted_fee', 'image', 'status'];

    protected static $course, $image, $imgName, $imgDirectory, $imgUrl;

    protected static function imageUpload($request, $course = null){
        self::$image = $request->file('image');
        if (self::$image){
            if (!empty($course)){
                if (file_exists($course->image)){
                    unlink($course->image);
                }
            }
            self::$imgName = rand().'.'.self::$image->getClientOriginalExtension();
            self::$imgDirectory = 'teacherAssets/uploaded-file/course/';
            self::$image->move(self::$imgDirectory, self::$imgName);
            self::$imgUrl = self::$imgDirectory.self::$imgName;
        }else{
            if (!empty($course)){
                self::$imgUrl = $course->image;
            }else{
                self::$imgUrl = null;
            }
        }
        return self::$imgUrl;
    }
    public static function createCourse($request ){

        self::$course = new Course();
        self::$course->teacher_id = $request->teacher_id;
//
//        self::$course->department_id = $department->id;

        self::$course->course_title = $request->course_title;
        self::$course->lecture = $request->lecture;
        self::$course->course_duration = $request->course_duration;
        self::$course->short_description = $request->short_description;
        self::$course->long_description = $request->long_description;
        self::$course->course_level = $request->course_level;
        self::$course->course_fee = $request->course_fee;
        self::$course->course_discount = $request->course_discount;
        self::$course->discounted_fee = $request->discounted_fee;
        self::$course->image = self::imageUpload($request);
        self::$course->status = $request->status;
        self::$course->save();
    }
    public static function updateCourse($request, $id){
        self::$course = Course::find($id);
        self::$course->teacher_id = $request->teacder_id;
        self::$course->course_title = $request->course_title;
        self::$course->lecture = $request->lecture;
        self::$course->course_duration = $request->course_duration;
        self::$course->short_description = $request->short_description;
        self::$course->long_description = $request->long_description;
        self::$course->course_level = $request->course_level;
        self::$course->course_fee = $request->course_fee;
        self::$course->course_discount = $request->course_discount;
        self::$course->discounted_fee = $request->discounted_fee;
        self::$course->image = self::imageUpload($request, self::$course);
        self::$course->status = $request->status;
        self::$course->save();
    }


    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }



    public function department(){
        return $this->belongsTo(Department::class);
    }
}
