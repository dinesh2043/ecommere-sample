<?php
   // this sample is a modification of a script in W. Jason Gilmores book 
   
   // @-character is used to muffle the error messages from the functions
                 

   class mysql {
      private $linkid; // MySQL link identifier
      private $host; // MySQL server host
      private $user; // MySQL user
      private $pswd; // MySQL password
      private $db; // MySQL database
      private $result; // Query result

      /* Class constructor. Initializes the $host, $user, $pswd and $db fields. */
      function __construct($host, $user, $pswd, $db) {
         $this->host = $host;
         $this->user = $user;
         $this->pswd = $pswd;
         $this->db = $db;
      }

      /* Connects to the MySQL database server. */
      function connect() {
         try {
            $this->linkid = @mysql_connect($this->host,$this->user,$this->pswd);
            if (! $this->linkid)
               throw new Exception("Could not connect to the MySQL server.");
         }
         catch (Exception $e) {
            die($e->getMessage());
         }
      }

      /* Selects the MySQL database. */
      function select() {
         try {
            if (! @mysql_select_db($this->db, $this->linkid))
               throw new Exception("Could not connect to the MySQL database.");
            }
         catch (Exception $e) {
            die($e->getMessage());
         }
      }

      /* Execute database query. */
      function query($query) {
         try {
            $this->result = @mysql_query($query,$this->linkid);
            if (! $this->result)
               throw new Exception("The database query failed.");
         }
         catch (Exception $e) {
            echo($e->getMessage());
         }
         return $this->result;
      }

      /* Determine total rows affected by query. */
      function affectedRows() {
         $count = @mysql_affected_rows($this->linkid);
         return $count;
      }

      /* Determine total rows returned by query. */
      function numRows() {
         $count = @mysql_num_rows($this->result);
         return $count;
      }

      /* Return query result row as an object. */
      function fetchObject() {
         $row = @mysql_fetch_object($this->result);
         return $row;
      }

      /* Return query result row as an indexed array. */
      function fetchRow() {
         $row = @mysql_fetch_row($this->result);
         return $row;
      }

      /* Return query result row as an associative array. */
      function fetchArray() {
         $row = @mysql_fetch_array($this->result);
         return $row;
      }

      /* Return the number of fields in a result set. */
       function numberFields() {
          return @mysql_num_fields($this->result);
       }

       /* Return a field name given an integer offset. */
       function fieldName($offset) {
          return @mysql_field_name($this->result, $offset);
       }

       function getResultAsTable() {

          if ($this->numrows() > 0) {

             // Start the table
             $resultHTML = "<table border='1'>\n<tr>\n";

             // Output the table header
             $fieldCount = $this->numberFields();

             for ($i=1; $i < $fieldCount; $i++) {
                $rowName = $this->fieldName($i);
                $resultHTML .= "<th>$rowName</th>\n";
             } # end for

             $resultHTML .= "</tr>\n";

             // Output the table data
             while ($row = $this->fetchRow()) {
                $resultHTML .= "<tr>\n";
                for ($i = 1; $i < $fieldCount; $i++)
                   $resultHTML .= "<td>".htmlentities($row[$i])."</td>\n";

                $resultHTML .= "</tr>\n";

             } # end while

             // Close the table
             $resultHTML .= "</table>\n";
          } else {
             $resultHTML = "No results found";
          }
          return $resultHTML;

       } #end getResultAsTable()
       
       function getValues() {

          if ($this->numrows() > 0) {

             // Start the table
             //$resultHTML = "<table border='1'>\n<tr>\n";

             // Output the table header
             $fieldCount = $this->numberFields();

             for ($i=0; $i < $fieldCount; $i++) {
                $rowName = $this->fieldName($i);
                $resultHTML .= "$rowName\n";
             } # end for

             //$resultHTML .= "</tr>\n";

             // Output the table data
             while ($row = $this->fetchRow()) {
                //$resultHTML .= "<tr>\n";
                for ($i = 0; $i < $fieldCount; $i++)
                   $resultHTML .= htmlentities($row[$i])."\n";

                //$resultHTML .= "</tr>\n";

             } # end while

             // Close the table
             //$resultHTML .= "</table>\n";
          } else {
             $resultHTML = "No results found";
          }
          return $resultHTML;

       } #end getResultAsTable()
       
       function getShoppingList() {
             if ($this->numrows() > 0) {

             // Start the table
             $resultHTML = "<table border='1'>\n<tr>\n";

             // Output the table header
             $fieldCount = $this->numberFields();

             for ($i=1; $i < $fieldCount; $i++) {
                $rowName = $this->fieldName($i);
                $resultHTML .= "<th>$rowName</th>\n";
             } # end for

             $resultHTML .= "</tr>\n";

             // Output the table data
             while ($row = $this->fetchRow()) {
                $resultHTML .= "<tr>\n";
                for ($i = 1; $i < $fieldCount; $i++)
                   $resultHTML .= "<td>".htmlentities($row[$i])."</td>\n";

                $resultHTML .= '<td><a href="addToCart.php?id='.$row[0].'">Add To Cart</a></td>';
                $resultHTML .= "</tr>\n";
				
             } # end while

             // Close the table
             $resultHTML .= "</table>\n";
          } else {
             $resultHTML = "No results found";
          }
          return $resultHTML;
       } #end getShoppingList()
       

   }
?> 
