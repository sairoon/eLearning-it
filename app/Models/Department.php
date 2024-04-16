<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = ['dep_name', 'description', 'image', 'status'];

    protected static $department, $image, $imgName, $imgDirectory, $imgUrl;

    protected static function imageUpload($request, $department = null){
        self::$image = $request->file('image');
        if (self::$image){
            if (!empty($department)){
                if (file_exists($department->image)){
                    unlink($department->image);
                }
            }
            self::$imgName = rand().'.'.self::$image->getClientOriginalExtension();
            self::$imgDirectory = 'adminAssets/uploaded-file/department/';
            self::$image->move(self::$imgDirectory, self::$imgName);
            self::$imgUrl = self::$imgDirectory.self::$imgName;
        }else{
            if (!empty($department)){
                self::$imgUrl = $department->image;
            }else{
                self::$imgUrl = null;
            }
        }
        return self::$imgUrl;
    }
    /*public static function createOrUpdateDepartment($request, $id = null){
        Department::updateOrCreate(['id' => $id], [
            'dep_name' => $request->dep_name,
            'description' => $request->description,
//            'image' =>  $request->image,
            'status' => $request->status,
        ]);
    }*/

    public static function createDepartment($request){
        self::$department = new Department();
        self::$department->dep_name = $request->dep_name;
        self::$department->description = $request->description;
        self::$department->image = self::imageUpload($request);
        self::$department->status = $request->status;
        self::$department->save();
    }
    public static function updateDepartment($request, $id){
        self::$department = Department::find($id);
        self::$department->dep_name = $request->dep_name;
        self::$department->description = $request->description;
        self::$department->image = self::imageUpload($request, self::$department);
        self::$department->status = $request->status;
        self::$department->save();
    }

}
