<?php

namespace App\Http\Controllers;

use App\CustomClass\Path;
use App\Course;
use App\CustomClass\CourseData;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('photo');
        $fileName = uniqid() . '_' . $file->getClientOriginalName();
        $file->move(public_path() . '/upload/course/', $fileName);

        Course::create([
            'photo'=>$fileName,
            'name'=>$request->get('name'),
            'start_date'=>$request->get('start_date'),
            'duration'=>$request->get('duration'),
            'fee'=>$request->get('fee'),
            'description'=>$request->get('description'),
            'category'=>$request->get('category')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Course::find($id);
        $data['photo_url']=Path::$domain_url."upload/course/".$data->photo;
        return json_encode($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->get('id');
        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $photo_name = uniqid().'_'.$photo->getClientOriginalName();
            $photo->move(public_path('upload/course/'),$photo_name);
            $course = Course::find($id);
            $image_path=public_path().'/upload/course/'.$course->photo;
            if(file_exists($image_path)){
                unlink($image_path);
            }
            Course::findOrFail($id)->update([
                'photo'=>$photo_name,
                'name'=>$request->get('name'),
                'start_date'=>$request->get('start_date'),
                'duration'=>$request->get('duration'),
                'fee'=>$request->get('fee'),
                'description'=>$request->get('description'),
                'category'=>$request->get('category')
            ]);
        }else {
            Course::findOrFail($id)->update([
                'name'=>$request->get('name'),
                'start_date'=>$request->get('start_date'),
                'duration'=>$request->get('duration'),
                'fee'=>$request->get('fee'),
                'description'=>$request->get('description'),
                'category'=>$request->get('category')
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $image_path=public_path().'/upload/course/'.$course->photo;
        if(file_exists($image_path)){
            unlink($image_path);
        }
        $course->delete();
    }

    public function get_all_course()
    {
        $courses=Course::orderBy('id', 'desc')->get();
        $arr=[];
        foreach ($courses as $data){
            $course_data=new CourseData($data->id);
            array_push($arr,$course_data->getCourseData());
        }
        return json_encode($arr);
    }

//    for homepage course
    public function show_home_course()
    {
        return view('admin.site_admin.homepage_course')->with([
            'url'=>'course_for_home'
        ]);
    }

    public function get_all_other_course(){
        $courses_o=Course::where('category','diploma')->orWhere('category','online course')->orderBy('id','desc')->get();
        $other_course=[];
        foreach ($courses_o as $data){
            $course_data=new CourseData($data->id);
            array_push($other_course,$course_data->getCourseData());
        }
        return json_encode($other_course);
    }

    public function change_home($id)
    {
        Course::findOrFail($id)->update([
            'forhome'=>'home'
        ]);
    }

    public function change_default($id)
    {
        Course::findOrFail($id)->update([
            'forhome'=>'default'
        ]);
    }


}
