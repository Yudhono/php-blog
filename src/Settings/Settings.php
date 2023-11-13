<?php
namespace Settings;

use DB\DB;
class Settings{

  public $fullname;
  public $obj;
  
  public function setFullname(){
    
    $db = new DB();
    if(isset($_POST['change'])){
      
      if(isset($_POST['fullname']) && !empty($_POST['fullname'])){
        
        $this->fullname = filter_input(INPUT_POST,'fullname',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        
        if(isset($_GET['uid']) && !empty($_GET['uid'])){
          
          $prepare = $db->dbcon->prepare("INSERT INTO profiles(user_id,fullname) VALUES(?,?);");
          $prepare->bind_param('is',$_GET['uid'],$this->fullname);
         
          if($prepare->execute()){
            
            $result = $db->dbcon->query("SELECT * FROM profiles");
            $this->obj = $result;
            
            while($this->obj = $result->fetch_object()){
              
              // header('Location:./profile.php?uid='.$_GET['uid'].'&pid='.$this->obj->id);
              $_SESSION['pid'] = $this->obj->id;
              return $this->obj;
              
            }
          
          }
        
        }
      
      }
    
    }
    
  }
  
}
