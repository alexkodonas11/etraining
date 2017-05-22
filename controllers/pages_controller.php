<?php
  class PagesController extends Controller {
    public function home() {
      $first_name = 'Jon';
      $last_name  = 'Snow';
      $this->View->render('pages/home');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
  }
?>