<?php

require_once("model/UserManager.php");

class User

{

  private $_id;
  private $_pseudo;
  private $_surname;
  private $_firstname;
  private $_pass;
  private $_email;

  public function __construct(array $donnees)
  {
    $this->hydrate($donnees);
  }

  public function hydrate(array $donnees)
  {
    foreach ($donnees as $key => $value)
    {
      $method = 'set'.ucfirst($key);
      
      if (method_exists($this, $method))
      {
        $this->$method($value);
      }
    }
  }

    // Getters

    public function getId(){

        return $this->_id;
  
    }
  
    public function getPseudo(){
  
      return $this->_pseudo;
  
  }
  
  public function getSurname(){
  
      return $this->_surname;
  
  }
  
  public function getFirstname(){
  
      return $this->_firstName;
  
  }

  public function getPass(){
  
    return $this->_pass;

}
  
  public function getEmail(){
  
      return $this->_email;
  
  }

  // Setters

  public function setId($id)
{
  $id = (int) $id;
  
  if ($id > 0)
  {
    $this->_id = $id;
  }
}

public function setPseudo($pseudo)
{
 
    $this->_pseudo = $pseudo;
  
}

public function setSurname($surname)
{
 
    $this->_surname = $surname;
  
}

public function setFirstname($firstname)
{
 
    $this->_firstname = $firstname;
  
}

public function setPass($pass)
{
 
    $this->_pass = $pass;
  
}

public function setEmail($email)
{
 
    $this->_email = $email;
  
}

}