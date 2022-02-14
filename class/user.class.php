<?php
  class User{
    private $id;
    private $name;
    private $surname;
    private $password;
    private $email;
    private $etab;
    private $added_at;

    public function __construct(array $data){
      foreach ($data as $key => $value) {
          $method='set'.ucfirst($key);

          if(method_exists($this, $method)){
              $this->$method($value);
          }
      }
    }

    public function setId($id){
      $this->id=intval($id);
    }
    public function getId(){
      return $this->id;
    }

    public function setName($name){
      $this->name=strval($name);
    }
    public function getName(){
      return $this->name;
    }

    public function setSurname($surname){
      $this->surname=strval($surname);
    }
    public function getSurname(){
      return $this->surname;
    }

    public function setPassword($password){
      $this->password=sha1(strval($password));
    }
    public function getPassword(){
      return $this->password;
    }

    public function setEmail($email){
      $this->email=strval($email);
    }
    public function getEmail(){
      return $this->email;
    }

    public function setEtab($etab){
      $this->etab=strval($etab);
    }
    public function getEtab(){
      return $this->etab;
    }

    public function setAdded_at($added_at){
      $this->added_at=strval($added_at);
    }
    public function getAdded_at(){
      return $this->added_at;
    }


    public function addUser(User $user){
      include(_PHP_DB_PATH."server-connect.php");
      $query=$db->prepare("INSERT INTO user VALUES (?,?,?,?,?,?,NOW())");

      $id=0;
      $name=$user->getName();
      $surname=$user->getSurname();
      $email=$user->getEmail();
      $password=sha1($user->getPassword());
      $etab=$user->getEtab();

      $query->bindParam(1,$id);
      $query->bindParam(2,$name);
      $query->bindParam(3,$surname);
      $query->bindParam(4,$password);
      $query->bindParam(5,$email);
      $query->bindParam(6,$etab);

      if($query->execute()){
        return true;
      }else{
          return false;
        }
      }

      public function removeUser($id){
        include(_PHP_DB_PATH."server-connect.php");

        $id=intval($id);

        $req=$db->prepare("DELETE FROM user WHERE id=?");

        $req->bindParam(1,$id);

        if($req->execute()){
            return true;
        }else{
            return false;
        }
      }

      public function getUser($id){
        include(_PHP_DB_PATH."server-connect.php");

        $id=intval($id);
        $query=$db->prepare("SELECT * FROM user WHERE id=?");
        $query->bindParam(1,$id);
        if($query->execute() && $query->rowCount()==1){
            $data=$query->fetch();
            return (new User($data));
        }else{
            return false;
        }
      }

      public function getUsers() {
        include(_PHP_DB_PATH."server-connect.php");

        $query=$db->prepare("SELECT * FROM user ORDER BY id ASC");

        $users=[];

        if($query->execute()){
            while($data=$query->fetch()){
                $users[]=new User($data);
            }
            return $users;
        }else{
            return false;
        }
      }

      public function editUser(User $user) {
        include(_PHP_DB_PATH."server-connect.php");

        $query=$db->prepare("UPDATE user
            SET name=?,
            surname=?,
            email=?,
            etab=?
            WHERE id=?

            ");

        $id=$user->getId();
        $name=$user->getName();
        $surname=$user->getSurname();
        $email=$user->getEmail();
        $etab=$user->getEtab();

        $query->bindParam(1,$name);
        $query->bindParam(2,$surname);
        $query->bindParam(3,$email);
        $query->bindParam(4,$etab);
        $query->bindParam(5,$id);

        if($query->execute()){
          return true;
        }else{
          return false;
        }
      }


    public function logIn(User $user) {
      include(_PHP_DB_PATH."server-connect.php");

      $query=$db->prepare("SELECT * FROM user WHERE email=? AND password=?");

      $email=$user->getEmail();
      $password=$user->getPassword();

      $query->bindParam(1,$email);
      $query->bindParam(2,$password);

      if($query->execute()){
        /* Si son compte a été trouvé */
        if($query->rowCount()==1){

            $data=$query->fetch();

            $user_found=new User($data);
            $_SESSION['id']=$user_found->getId();
            $_SESSION['name']=$user_found->getName();
            $_SESSION['surname']=$user_found->getSurname();
            $_SESSION['password']=$user_found->getPassword();
            $_SESSION['email']=$user_found->getEmail();
            $_SESSION['etab']=$user_found->getEtab();
            $_SESSION['added_at']=$user_found->getAdded_at();

            return "found";

        }else{
          /* Si son compte n'a pas été trouvé */
          return "not found";
        }
      }else{
        return false;
      }
    }

    public function logOut() {
      $_SESSION=array();
    }
  }
?>
