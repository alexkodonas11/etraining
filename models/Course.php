<?php
  class Course {
    private $id;
    private $title;
    private $description;
    private $price;
    private $photo;
    private $user;

    public function __construct($id, $title, $description, $price, $photo, $user) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->photo = $photo;
        $this->user = $user;     
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM courses');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $course) {
        $list[] = new Course($course['id'], $course['title'], $course['description'], $course['price'], $course['photo'], User::find($course['user_id']));
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM courses WHERE id = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $course = $req->fetch();

      return new Course($course['id'], $course['title'], $course['description'], $course['price'], $course['photo'], User::find($course['user_id']));
    }
  
    function __get($name) {
        return $this->$name;
    }

    function __set($name, $value) {
        $this->$name = $value;
    }
}  
?>