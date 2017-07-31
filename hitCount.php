<?php
 include 'connect.inc.php';
 $user_ip = $_SERVER['REMOTE_ADDR'];
 function ip_exists()
 {
	global $user_ip;
        $query = "select * from ip where ip_address='$user_ip'";
        $run_query=mysql_query($query);
        if($run_query)
        {
	  $row = mysql_num_rows($run_query);
          if($row==0)
          {
	    return false;
          }
          else if($row>=1)
          {
	    return true;
          }
        }
}
 function update_count()
{
 $query = 'select count from hit_count';
 $run_query=mysql_query($query);
     if($run_query)
     {
	echo '<h3> Total Hit :- '.$count = mysql_result($run_query,0,'count').'</h3>';
        $count_in = $count + 1;
        global $user_ip;
        if(!ip_exists())
        {
	 $query = "update hit_count set count='$count_in'";
         $run_query = mysql_query($query);
         if($run_query)
         {
	    $n_query = "insert into ip (ip_address) values ('$user_ip')";
            $r_run_query = mysql_query($n_query);
            if($r_run_query)
            {
	      
            }         
         }
      }
 }
}
 update_count();
?>