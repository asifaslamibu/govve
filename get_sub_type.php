<?php  
 //fetch.php  
//  include("config_indemnifier.php");

//  if(isset($_POST["main_id"]))  
//  {  
//       $query = "SELECT * FROM `subcat` where main_id='".$_POST["main_id"]."'"; 
//       echo $query; 
//       $result = mysqli_query($db, $query);  
//       $row = mysqli_fetch_array($result);  
//       echo json_encode($row);  
//  }  
 ?>

<?php
    session_start();
    include("config_indemnifier.php");
    if(isset($_POST)){
        $main_id = $_POST['main_id'];
        
        if($main_id!=""){
            $users_arr = array();
            $sql="SELECT * FROM `subcat` where main_id='$main_id'";
            // $sql="SELECT pos.* from sitara.trip_main as mt join sitara.trip_sub as ts on mt.id=ts.main_id join positions as pos on mt.lorry_no=pos.device_id where mt.lorry_no='1611' and mt.id='43' and pos.time>=ts.start_time;";
            // echo $sql;
            
            $result = mysqli_query($db,$sql);
            
            while( $row = mysqli_fetch_array($result) ){
                // $userid = $row['id'];
                $add_id = $row['add_id'];
                $cat = $row['cat'];
                
            
                $users_arr[] = array('id'=>$add_id,'name'=>$cat);
                // $users_arr[] = array('name' =>$name,'lat' =>$lat,'lng' =>$lng,'speed' =>$speed,'time' =>$time);

            }
            // print_r($users_arr);

            // echo 'True '.$data;
            
                echo json_encode($users_arr);
                
        }else{
            echo 'False';
        }
    }
?>