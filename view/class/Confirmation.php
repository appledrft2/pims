<?php

class Confirmation
{
    
  function insert($data){

      require_once '../../includes/connect.php';
      $conn = new Conn();
      $cn =$conn->connect(1);
      
      $sql = "INSERT INTO confirmation(date,name,parents,sponsors,minister,encoder) VALUES(?,?,?,?,?,?)";
      $qry = $cn->prepare($sql);
      
      $qry->bind_param("ssssss",$data[0],$data[1],$data[2],$data[3],$data[4],$data[5]);
      
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
           
            $sql = "SELECT * FROM confirmation ORDER BY created_at DESC ";
            $qry = $cn->prepare($sql);
            $qry->execute();
          
            $qry->bind_result($id,$date,$name,$parents,$sponsors,$minister,$encoder,$created_at);
          
            while($qry->fetch()){
                
                $data[$ctr]['id'] = $id;
                $data[$ctr]['date'] = $date;
                $data[$ctr]['name'] = $name;
                $data[$ctr]['parents'] = $parents;
                $data[$ctr]['sponsors'] = $sponsors;
                $data[$ctr]['minister'] = $minister;
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
           
            $sql = "SELECT * FROM confirmation WHERE id = ? ";
            $qry = $cn->prepare($sql);
            $qry->bind_param('i',$id);
            $qry->execute();
          
            $qry->bind_result($id,$date,$name,$parents,$sponsors,$minister,$encoder,$created_at);
          
            while($qry->fetch()){
                
                $data[$ctr]['id'] = $id;
                $data[$ctr]['date'] = $date;
                $data[$ctr]['name'] = $name;
                $data[$ctr]['parents'] = $parents;
                $data[$ctr]['sponsors'] = $sponsors;
                $data[$ctr]['minister'] = $minister;
                $data[$ctr]['encoder'] = $encoder;
                $data[$ctr]['created_at'] = $created_at;

                $ctr++;
            }    
            return $data;
      }
    
    

    function update($date,$name,$parents,$sponsors,$minister,$encoder,$id) {
          require_once '../../includes/connect.php';
          $conn = new Conn();
          $cn =   $conn->connect(1);
          $sql = "UPDATE confirmation SET date=?,name=?,parents=?,sponsors=?,minister=?,encoder=? WHERE id=?";
        
          $qry = $cn->prepare($sql);
          $qry->bind_param("ssssssi",$date,$name,$parents,$sponsors,$minister,$encoder,$id);
            
          if($qry->execute()){
            return true;
          }else{
            return false;
      }
  
  }
    function destroy($id){
        require_once '../../includes/connect.php';
          $conn = new Conn();
        
        $sql = "DELETE FROM confirmation WHERE id=?";
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