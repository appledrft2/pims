<?php

class Death
{
    
  function insert($name,$address,$age,$parent,$minister,$dateofdeath,$cemetery,$burial,$celebrant,$remarks,$encoder) {
      require_once '../../includes/connect.php';
      
      $conn = new Conn();
      $cn =$conn->connect(1);
      
      $sql = "INSERT INTO death(name,address,age,parent,minister,dateofdeath,cemetery,burial,celebrant,remarks,encoder) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
      $qry = $cn->prepare($sql);
      
      $qry->bind_param("ssissssssss",$name, $address, $age, $parent, $minister, $dateofdeath, $cemetery, $burial, $celebrant, $remarks,$encoder);
      
      if($qry->execute()){
        return true;
      }else{
        return false;
      }
  }
      function getall(){
            require_once '../../includes/connect.php';
            $conn = new Conn();
            $cn = $conn->connect(1);
          
            $data = array();
            $ctr = 0;
           
            $sql = "SELECT id,name, address, age, parent, minister, dateofdeath, cemetery, burial, celebrant, remarks,encoder,created_at FROM death ";
            $qry = $cn->prepare($sql);
            $qry->execute();
          
            $qry->bind_result($id,$name,$address,$age,$parent,$minister,$dateofdeath,$cemetery,$burial,$celebrant,$remarks,$encoder,$created_at);
          
            while($qry->fetch()){
                
                $data[$ctr]['id'] = $id;
                $data[$ctr]['name'] = $name;
                $data[$ctr]['address'] = $address;
                $data[$ctr]['age'] = $age;
                $data[$ctr]['parent'] = $parent;
                $data[$ctr]['minister'] = $minister;
                $data[$ctr]['dateofdeath'] = $dateofdeath;
                $data[$ctr]['cemetery'] = $cemetery;
                $data[$ctr]['burial'] = $burial;
                $data[$ctr]['celebrant'] = $celebrant;
                $data[$ctr]['remarks'] = $remarks;
                $data[$ctr]['encoder'] = $encoder;
                $data[$ctr]['created_at'] = $created_at;

                $ctr++;
            }    
            return $data;
      }
        function getone($id){
             require_once '../../includes/connect.php';
            $conn = new Conn();
            $cn = $conn->connect(1);
          
            $data = array();
            $ctr = 0;
           
             $sql = "SELECT id,name, address, age, parent, minister, dateofdeath, cemetery, burial, celebrant, remarks,encoder,created_at FROM death WHERE id=?";
            $qry = $cn->prepare($sql);
             $qry->bind_param('i',$id);
            $qry->execute();
            
            $qry->bind_result($id,$name,$address,$age,$parent,$minister,$dateofdeath,$cemetery,$burial,$celebrant,$remarks,$encoder,$created_at);
            
            while($qry->fetch()){
                
                $data[$ctr]['id'] = $id;
                $data[$ctr]['name'] = $name;
                $data[$ctr]['address'] = $address;
                $data[$ctr]['age'] = $age;
                $data[$ctr]['parent'] = $parent;
                $data[$ctr]['minister'] = $minister;
                $data[$ctr]['dateofdeath'] = $dateofdeath;
                $data[$ctr]['cemetery'] = $cemetery;
                $data[$ctr]['burial'] = $burial;
                $data[$ctr]['celebrant'] = $celebrant;
                $data[$ctr]['remarks'] = $remarks;
                $data[$ctr]['encoder'] = $encoder;
                $data[$ctr]['created_at'] = $created_at;
              
                $ctr++;
            }    
            return $data;
      }
    
    

    function updatedeath($name,$address,$age,$parent,$minister,$dateofdeath,$cemetery,$burial,$celebrant,$remarks,$encoder,$id) {
          require_once '../../includes/connect.php';
          $conn = new Conn();
          $cn =   $conn->connect(1);
          $sql = "UPDATE death SET name =?,address =?,age =?,parent =?,minister =?,dateofdeath =?,cemetery =?,burial =?,celebrant =?,remarks =?,encoder=? 
            WHERE id=?";
        
          $qry = $cn->prepare($sql);
          $qry->bind_param("ssissssssssi",$name,$address,$age,$parent,$minister,$dateofdeath,$cemetery,$burial,$celebrant,$remarks,$encoder,$id);
            
          if($qry->execute()){
            return true;
          }else{
            return false;
      }
  
  }
    function deletedeath($id){
        require_once '../../includes/connect.php';
          $conn = new Conn();
        
        $sql = "DELETE FROM death WHERE id=?";
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