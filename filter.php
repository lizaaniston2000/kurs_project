<?php  
 if(isset($_POST["from_date"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "yubik");  
      $output = '';  
      $query = "  
           SELECT * FROM event  
           WHERE event_date ='".$_POST["from_date"]."' 
      ";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
           <table class="table table-bordered">  
                <tr>  
                    <th width="5%">ID</th>  
                    <th width="30%">Назва заходу</th>  
                    <th width="12%">Дата</th>  
                </tr>  
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'. $row["id_event"] .'</td>  
                          <td>'. $row["event_name"] .'</td>  
                          <td>'. $row["event_date"] .'</td>  
                          
                      </tr>  
                ';  
           }  
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="5">No Order Found</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }  
 ?>