<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Course;
use App\CustomClass\BlogData;
use App\CustomClass\CourseData;
use App\CustomClass\EventData;
use App\CustomClass\MemberData;
use App\Event;
use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UIController extends Controller
{    
    public function HomePage(){
        $courses=Course::where('category','academic')->orderBy('id','desc')->limit(1)->get();
        $academic_course=[];
        foreach ($courses as $data){
            $course_data=new CourseData($data->id);
            array_push($academic_course,$course_data->getCourseData());
        }

        $courses_o=Course::where('category','diploma')->orWhere('category','online course')->orderBy('id','desc')->limit(4)->get();
        $other_course=[];
        foreach ($courses_o as $data){
            $course_data=new CourseData($data->id);
            array_push($other_course,$course_data->getCourseData());
        }

        return view('user.index')->with([
            'academic_course'=>$academic_course,
            'other_course'=>$other_course
        ]);
    }

    public function member()
    {
        $members=Member::orderBy('id', 'desc')->get();
        $arr=[];
        foreach ($members as $data){
            $member_data=new MemberData($data->id);
            array_push($arr,$member_data->getMemberData());
        }

//        sidebar
        $latest_blog=Blog::orderBy('id', 'desc')->limit(3)->get();
        $latest_blog_arr=[];
        foreach ($latest_blog as $data){
            $latest_blog_data=new BlogData($data->id);
            array_push($latest_blog_arr,$latest_blog_data->getBlogData());
        }

        $latest_courses_o=Course::where('category','diploma')->orWhere('category','online course')->limit(3)->orderBy('id','desc')->get();
        $latest_other_course=[];
        foreach ($latest_courses_o as $data){
            $latest_course_data=new CourseData($data->id);
            array_push($latest_other_course,$latest_course_data->getCourseData());
        }

        $latest_events=Event::where('date', '>=', date('Y-m-d'))->limit(3)->orderBy('date')->get();
        $latest_event_arr=[];
        foreach ($latest_events as $data){
            $latest_event_data=new EventData($data->id);
            array_push($latest_event_arr,$latest_event_data->getEventData());
        }

        return view('user.member')->with([
            'member'=>$arr,
            'latest_blogs'=>$latest_blog_arr,
            'latest_courses'=>$latest_other_course,
            'latest_events'=>$latest_event_arr
        ]);
    }

    public function eventList()
    {
        $events=Event::where('date', '>=', date('Y-m-d'))->orderBy('date')->paginate(5);
        $arr=[];
        foreach ($events as $data){
            $event_data=new EventData($data->id);
            array_push($arr,$event_data->getEventData());
        }

        $academic_events=Event::where('date', '>=', date('Y-m-d'))->where('event_category','academy')->orderBy('date')->paginate(5);
        $academic_event_arr=[];
        foreach ($academic_events as $data){
            $academic_event_data=new EventData($data->id);
            array_push($academic_event_arr,$academic_event_data->getEventData());
        }

        $other_events=Event::where('date', '>=', date('Y-m-d'))->where('event_category','other')->orderBy('date')->paginate(5);
        $other_event_arr=[];
        foreach ($other_events as $data){
            $other_event_data=new EventData($data->id);
            array_push($other_event_arr,$other_event_data->getEventData());
        }

        //        sidebar
        $latest_blog=Blog::orderBy('id', 'desc')->limit(3)->get();
        $latest_blog_arr=[];
        foreach ($latest_blog as $data){
            $latest_blog_data=new BlogData($data->id);
            array_push($latest_blog_arr,$latest_blog_data->getBlogData());
        }

        $latest_courses_o=Course::where('category','diploma')->orWhere('category','online course')->limit(3)->orderBy('id','desc')->get();
        $latest_other_course=[];
        foreach ($latest_courses_o as $data){
            $latest_course_data=new CourseData($data->id);
            array_push($latest_other_course,$latest_course_data->getCourseData());
        }

        $latest_events=Event::where('date', '>=', date('Y-m-d'))->limit(3)->orderBy('date')->get();
        $latest_event_arr=[];
        foreach ($latest_events as $data){
            $latest_event_data=new EventData($data->id);
            array_push($latest_event_arr,$latest_event_data->getEventData());
        }

        return view('user.event_list')->with([
            'events'=>$arr,
            'paginate_event'=>$events,
            'academic_events'=>$academic_event_arr,
            'paginate_academic_events'=>$academic_events,
            'other_events'=>$other_event_arr,
            'paginate_other_events'=>$other_events,
            'latest_blogs'=>$latest_blog_arr,
            'latest_courses'=>$latest_other_course,
            'latest_events'=>$latest_event_arr
        ]);
    }

    public function courseList()
    {
        $courses=Course::where('category','academic')->orderBy('id','desc')->limit(1)->get();
        $academic_course=[];
        foreach ($courses as $data){
            $course_data=new CourseData($data->id);
            array_push($academic_course,$course_data->getCourseData());
        }

        $courses_o=Course::where('category','diploma')->orWhere('category','online course')->orderBy('id','desc')->paginate(6);
        $other_course=[];
        foreach ($courses_o as $data){
            $course_data=new CourseData($data->id);
            array_push($other_course,$course_data->getCourseData());
        }

        return view('user.course_list')->with([
            'academic_course'=>$academic_course,
            'other_course'=>$other_course,
            'paginate_other_course'=>$courses_o
        ]);
    }

    public function blogList()
    {
        $blogs=Blog::orderBy('id', 'desc')->paginate(5);
        $arr=[];
        foreach ($blogs as $data){
            $blog_data=new BlogData($data->id);
            array_push($arr,$blog_data->getBlogData());
        }

        //        sidebar
        $latest_blog=Blog::orderBy('id', 'desc')->limit(3)->get();
        $latest_blog_arr=[];
        foreach ($latest_blog as $data){
            $latest_blog_data=new BlogData($data->id);
            array_push($latest_blog_arr,$latest_blog_data->getBlogData());
        }

        $latest_courses_o=Course::where('category','diploma')->orWhere('category','online course')->limit(3)->orderBy('id','desc')->get();
        $latest_other_course=[];
        foreach ($latest_courses_o as $data){
            $latest_course_data=new CourseData($data->id);
            array_push($latest_other_course,$latest_course_data->getCourseData());
        }

        $latest_events=Event::where('date', '>=', date('Y-m-d'))->limit(3)->orderBy('date')->get();
        $latest_event_arr=[];
        foreach ($latest_events as $data){
            $latest_event_data=new EventData($data->id);
            array_push($latest_event_arr,$latest_event_data->getEventData());
        }

        return view('user.blog_list')->with([
            'blogs'=>$arr,
            'paginate'=>$blogs,
            'latest_blogs'=>$latest_blog_arr,
            'latest_courses'=>$latest_other_course,
            'latest_events'=>$latest_event_arr
        ]);
    }

    public function blogSingle($id)
    {
        $blog_obj = new BlogData($id);
        $blog_detail = $blog_obj->getBlogData();

        //        sidebar
        $latest_blog=Blog::orderBy('id', 'desc')->limit(3)->get();
        $latest_blog_arr=[];
        foreach ($latest_blog as $data){
            $latest_blog_data=new BlogData($data->id);
            array_push($latest_blog_arr,$latest_blog_data->getBlogData());
        }

        $latest_courses_o=Course::where('category','diploma')->orWhere('category','online course')->limit(3)->orderBy('id','desc')->get();
        $latest_other_course=[];
        foreach ($latest_courses_o as $data){
            $latest_course_data=new CourseData($data->id);
            array_push($latest_other_course,$latest_course_data->getCourseData());
        }

        $latest_events=Event::where('date', '>=', date('Y-m-d'))->limit(3)->orderBy('date')->get();
        $latest_event_arr=[];
        foreach ($latest_events as $data){
            $latest_event_data=new EventData($data->id);
            array_push($latest_event_arr,$latest_event_data->getEventData());
        }

        return view('user.blog_single')->with([
            'blog_detail'=>$blog_detail,
            'latest_blogs'=>$latest_blog_arr,
            'latest_courses'=>$latest_other_course,
            'latest_events'=>$latest_event_arr
        ]);
    }

    public function contact()
    {
        //        sidebar
        $latest_blog=Blog::orderBy('id', 'desc')->limit(3)->get();
        $latest_blog_arr=[];
        foreach ($latest_blog as $data){
            $latest_blog_data=new BlogData($data->id);
            array_push($latest_blog_arr,$latest_blog_data->getBlogData());
        }

        $latest_courses_o=Course::where('category','diploma')->orWhere('category','online course')->limit(3)->orderBy('id','desc')->get();
        $latest_other_course=[];
        foreach ($latest_courses_o as $data){
            $latest_course_data=new CourseData($data->id);
            array_push($latest_other_course,$latest_course_data->getCourseData());
        }

        $latest_events=Event::where('date', '>=', date('Y-m-d'))->limit(3)->orderBy('date')->get();
        $latest_event_arr=[];
        foreach ($latest_events as $data){
            $latest_event_data=new EventData($data->id);
            array_push($latest_event_arr,$latest_event_data->getEventData());
        }

        return view('user.contact')->with([
            'latest_blogs'=>$latest_blog_arr,
            'latest_courses'=>$latest_other_course,
            'latest_events'=>$latest_event_arr
        ]);
    }

    public function courseSingle($id)
    {
        $course_obj = new CourseData($id);
        $course_detail = $course_obj->getCourseData();

        //        sidebar
        $latest_blog=Blog::orderBy('id', 'desc')->limit(3)->get();
        $latest_blog_arr=[];
        foreach ($latest_blog as $data){
            $latest_blog_data=new BlogData($data->id);
            array_push($latest_blog_arr,$latest_blog_data->getBlogData());
        }

        $latest_courses_o=Course::where('category','diploma')->orWhere('category','online course')->limit(3)->orderBy('id','desc')->get();
        $latest_other_course=[];
        foreach ($latest_courses_o as $data){
            $latest_course_data=new CourseData($data->id);
            array_push($latest_other_course,$latest_course_data->getCourseData());
        }

        $latest_events=Event::where('date', '>=', date('Y-m-d'))->limit(3)->orderBy('date')->get();
        $latest_event_arr=[];
        foreach ($latest_events as $data){
            $latest_event_data=new EventData($data->id);
            array_push($latest_event_arr,$latest_event_data->getEventData());
        }

        return view('user.course_single')->with([
            'course_detail'=>$course_detail,
            'latest_blogs'=>$latest_blog_arr,
            'latest_courses'=>$latest_other_course,
            'latest_events'=>$latest_event_arr
        ]);
    }

    public function memberSingle($id)
    {
        $member_obj = new MemberData($id);
        $member_detail = $member_obj->getMemberData();

        //        sidebar
        $latest_blog=Blog::orderBy('id', 'desc')->limit(3)->get();
        $latest_blog_arr=[];
        foreach ($latest_blog as $data){
            $latest_blog_data=new BlogData($data->id);
            array_push($latest_blog_arr,$latest_blog_data->getBlogData());
        }

        $latest_courses_o=Course::where('category','diploma')->orWhere('category','online course')->limit(3)->orderBy('id','desc')->get();
        $latest_other_course=[];
        foreach ($latest_courses_o as $data){
            $latest_course_data=new CourseData($data->id);
            array_push($latest_other_course,$latest_course_data->getCourseData());
        }

        $latest_events=Event::where('date', '>=', date('Y-m-d'))->limit(3)->orderBy('date')->get();
        $latest_event_arr=[];
        foreach ($latest_events as $data){
            $latest_event_data=new EventData($data->id);
            array_push($latest_event_arr,$latest_event_data->getEventData());
        }

        return view('user.member_single')->with([
            'member_detail'=>$member_detail,
            'latest_blogs'=>$latest_blog_arr,
            'latest_courses'=>$latest_other_course,
            'latest_events'=>$latest_event_arr
        ]);
    }

    public function portfolio()
    {
        return view('user.portfolio');
    }
    public function portfolioSingle()
    {
        return view('user.portfolio_single');
    }

    public function eventSingle($id)
    {
        $event_obj = new EventData($id);
        $event_detail = $event_obj->getEventData();

        //        sidebar
        $latest_blog=Blog::orderBy('id', 'desc')->limit(3)->get();
        $latest_blog_arr=[];
        foreach ($latest_blog as $data){
            $latest_blog_data=new BlogData($data->id);
            array_push($latest_blog_arr,$latest_blog_data->getBlogData());
        }

        $latest_courses_o=Course::where('category','diploma')->orWhere('category','online course')->limit(3)->orderBy('id','desc')->get();
        $latest_other_course=[];
        foreach ($latest_courses_o as $data){
            $latest_course_data=new CourseData($data->id);
            array_push($latest_other_course,$latest_course_data->getCourseData());
        }

        $latest_events=Event::where('date', '>=', date('Y-m-d'))->limit(3)->orderBy('date')->get();
        $latest_event_arr=[];
        foreach ($latest_events as $data){
            $latest_event_data=new EventData($data->id);
            array_push($latest_event_arr,$latest_event_data->getEventData());
        }

       return view('user.event_single')->with([
           'event_detail'=>$event_detail,
           'latest_blogs'=>$latest_blog_arr,
           'latest_courses'=>$latest_other_course,
           'latest_events'=>$latest_event_arr
       ]);
    }

    public function search_course(Request $request)
    {
        $search_name = $request->get('search');
        $search_courses=Course::where('name', 'LIKE', "%$search_name%")->get();
        $search_course_arr=[];
        foreach ($search_courses as $data){
            $search_courses_data=new CourseData($data->id);
            array_push($search_course_arr,$search_courses_data->getCourseData());
        }
        return view('user.search_course')->with([
            'search'=>$search_course_arr
        ]);
    }
}
