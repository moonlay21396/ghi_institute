<?php


namespace App\CustomClass;

 use App\Eventstudent;
 use App\Event;


 class EnrollData {

    private $id;
    private $enrollment_data;

     function __construct($enroll_id) {
         $enroll=Eventstudent::findOrFail($enroll_id);
         $this->id=$enroll->id;
         $this->setEnrollData($enroll);
     }

     /**
      * @return mixed
      */
     public function getEnrollData()
     {
        $event_id = $this->enrollment_data['event_id'];
        $event_name= Event::where('id', $event_id)->get();
        $this->enrollment_data['event_id'] = $event_name['0']->title;

        return $this->enrollment_data;
     }

     /**
      * @param mixed $blog_data
      */
     private function setEnrollData($entrollment_data)
     {
         $this->enrollment_data = $entrollment_data;
     }





 }
