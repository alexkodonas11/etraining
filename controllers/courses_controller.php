<?php
  class CoursesController extends Controller {
    public function index() {
      $courses=Course::all();
      $this->View->render('courses/index',['courses'=>$courses]);
    }
    
    public function show($id) {
      $course=Course::find($id);
      $this->View->render('courses/show',['course'=>$course]);
    }    
  }
?>