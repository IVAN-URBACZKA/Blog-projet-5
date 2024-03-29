<?php

class Article 

{

    private $_id;
    private $_user_id;
    private $_title;
    private $_chapo;
    private $_content;
    private $_created;
    private $_updated;

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

  public function getUserId(){

    return $this->_user_id;

}

public function getTitle(){

  return $this->_title;

}

  public function getChapo(){

    return $this->_chapo;

}

public function getContent(){

    return $this->_content;

}

public function getCreated(){

    return $this->_created;

}

public function getUpdated(){

    return $this->_updated;

}

public function setId($id)
{
  $id = (int) $id;
  
  if ($id > 0)
  {
    $this->_id = $id;
  }
}

public function setUser_id($user_id)
{
 
    $this->_user_id = $user_id;
  
}

public function setTitle($title)
{
 
    $this->_title = $title;
  
}

public function setChapo($chapo)
{
  if (is_string($chapo))
  {
    $this->_chapo = $chapo;
  }
}

public function setContent($content)
{
  if (is_string($content))
  {
    $this->_content = $content;
  }
}

public function setCreated($created)
{
 
    $this->_created = $created;
  
}

public function setUpdated($updated)
{
 
    $this->_updated = $updated;
  
}

}

?>