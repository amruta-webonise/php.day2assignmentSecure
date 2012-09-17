-<?php
  
       $host = 'localhost';
       $username = 'root';
       $password = 'root';
    try {
          
          $PdoObject = new PDO("mysql:host=$host;dbname=test", $username, $password);       
            echo "</br></br>Connected to <br/>";

         
          $EnteredName = "' ' OR 1";                                    
          $sql = "SELECT * FROM xyz where name=$EnteredName";      
          echo "Normal: " . $sql . "<br />";
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
