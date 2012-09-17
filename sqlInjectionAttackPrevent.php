-<?php
  
       $hostname = 'localhost';
       $username = 'root';
       $password = 'root';
    try {
          
          $PdoObject = new PDO("mysql:host=$hostname;dbname=test", $username, $password);      
            echo "</br></br>Connected to Mysql<br/>";

         
          $EnteredName = "' ' OR 1";                                    
          $EnteredName = mysql_real_escape_string($EnteredName);                 
          $sql = "SELECT * FROM xyz where name=$EnteredName";       
          echo "query: " . $sql . "<br />";
          foreach($PdoObject->query($sql) as $row)
           {
             
             print $row['id'] .' - '. $row['name'] . '<br />';
           }

              
        }
    catch(PDOException $e)
       {
         echo $e->getMessage();
       }
?>
