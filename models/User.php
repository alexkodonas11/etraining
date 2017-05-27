<?php
  class User {
    private $id;
    private $username;
    private $email;
    private $real_name;
    private $home_address;
    private $photo;
    private $phone;
    private $verified;
    private $type;
    
    public function __construct($id, $username, $email, $real_name, $home_address, $photo,$phone,$verified,$type) {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->real_name = $real_name;
        $this->home_address = $home_address;
        $this->photo = $photo;     
        $this->phone = $phone;     
        $this->verified = $verified;     
        $this->$type = $type;     
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM users');

      foreach($req->fetchAll() as $user) {
        $list[] = new Course($user['id'], $user['username'], $user['email'], $user['real_name'], $user['home_address'], $user['photo'],$user['phone'],$user['verified'],$user['type']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM users WHERE id = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $user = $req->fetch();

      return new Course($user['id'], $user['username'], $user['email'], $user['real_name'], $user['home_address'], $user['photo'],$user['phone'],$user['verified'],$user['type']);
    }
    
    function __get($name) {
        return $this->$name;
    }

    function __set($name, $value) {
        $this->$name = $value;
    }    
  }
?>