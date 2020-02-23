<?php

class Marriage
{
    
  function insert($date, $date1, $groom, $age, $address, $mother, $father, $bride, $age1, $address1, $mother1, $father1, $church, $priest,$nuptial_type,$encoder) {
      require_once '../../includes/connect.php';
      
      $conn = new Conn();
      $cn =$conn->connect(1);
      
      $sql = "INSERT INTO marriage(date, date1, groom, age, address, mother, father, bride, age1, address1, mother1, father1, church, priest,nuptial_type,encoder) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
      $qry = $cn->prepare($sql);
      
      $qry->bind_param("ssssssssssssssss",$date,$date1,$groom,$age,$address,$mother,$father,$bride,$age1,$address1,$mother1,$father1,$church,$priest,$nuptial_type,$encoder);
      
      if($qry->execute()){
        return true;
      }else{
        return false;
      }
  }
      function getCouple(){
            require_once '../../includes/connect.php';
            $conn = new Conn();
            $cn = $conn->connect(1);
          
            $data = array();
            $ctr = 0;
           
            $sql = "SELECT id,date, date1, groom, age, address, mother, father, bride, age1, address1, mother1, father1, church, priest,encoder FROM marriage ORDER BY date DESC";
            $qry = $cn->prepare($sql);
            $qry->execute();
          
            $qry->bind_result($id,$date,$date1,$groom,$age,$address,$mother,$father,$bride,$age1,$address1,$mother1,$father1,$church,$priest,$encoder);
          
            while($qry->fetch()){
   
                $data[$ctr]['id'] = $id;
                $data[$ctr]['date'] = $date;
                $data[$ctr]['date1'] = $date1;
                $data[$ctr]['groom'] = $groom;
                $data[$ctr]['age'] = $age;
                $data[$ctr]['address'] = $address;
                $data[$ctr]['mother'] = $mother;
                $data[$ctr]['father'] = $father;
                $data[$ctr]['bride'] = $bride;
                $data[$ctr]['age1'] = $age1;
                $data[$ctr]['address1'] = $address1;
                $data[$ctr]['mother1'] = $mother1;
                $data[$ctr]['father1'] = $father1;
                $data[$ctr]['church'] = $church;
                $data[$ctr]['priest'] = $priest;
                $data[$ctr]['encoder'] = $encoder;
                $ctr++;
            }    
            return $data;
      }
        function getcoupleone($id){
             require_once '../../includes/connect.php';
            $conn = new Conn();
            $cn = $conn->connect(1);
          
            $data = array();
            $ctr = 0;
           
            $sql = "SELECT id,date, date1, groom, age, address, mother, father, bride, age1, address1, mother1, father1, church, priest,nuptial_type FROM marriage WHERE id=? ";
            $qry = $cn->prepare($sql);
            $qry->bind_param('s',$id);
            $qry->execute();
            
            $qry->bind_result($id,$date,$date1,$groom,$age,$address,$mother,$father,$bride,$age1,$address1,$mother1,$father1,$church,$priest,$nuptial_type);
            
            while($qry->fetch()){
                
                $data[$ctr]['id'] = $id;
                $data[$ctr]['date'] = $date;
                $data[$ctr]['date1'] = $date1;
                $data[$ctr]['groom'] = $groom;
                $data[$ctr]['age'] = $age;
                $data[$ctr]['address'] = $address;
                $data[$ctr]['mother'] = $mother;
                $data[$ctr]['father'] = $father;
                $data[$ctr]['bride'] = $bride;
                $data[$ctr]['age1'] = $age1;
                $data[$ctr]['address1'] = $address1;
                $data[$ctr]['mother1'] = $mother1;
                $data[$ctr]['father1'] = $father1;
                $data[$ctr]['church'] = $church;
                $data[$ctr]['priest'] = $priest;
                $data[$ctr]['nuptial_type'] = $nuptial_type;
                $ctr++;
            }    
            return $data;
      }
    
    

    function updatemarriage($id,$date,$date1,$groom,$age,$address,$mother,$father,$bride,$age1,$address1,$mother1,$father1,$church,$priest,$nuptial_type){
          require_once '../../includes/connect.php';
          $conn = new Conn();
          $cn =   $conn->connect(1);
          $sql = "UPDATE marriage SET date=?, date1=?, groom=?, age=?, address=?, mother=?, father=?, bride=?, age1=?, address1=?, mother1=?, father1=?, church=?, priest=?,nuptial_type=? 
            WHERE id=?";
        
          $qry = $cn->prepare($sql);
          $qry->bind_param("sssssssssssssssi",$date,$date1,$groom,$age,$address,$mother,$father,$bride,$age1,$address1,$mother1,$father1,$church,$priest,$nuptial_type,$id);
            
          if($qry->execute()){
            return true;
          }else{
            return false;
      }
  
  }
    function deletemarriage($id){
        require_once '../../includes/connect.php';
          $conn = new Conn();
        
        $sql = "DELETE FROM marriage WHERE id=?";
        $cn = $conn->connect(1);
        $qry = $cn->prepare($sql);
        $qry->bind_param("i", $id);
        
        if($qry->execute())
            return true;
        else
            return false;
        
       
        
    }
}
?>