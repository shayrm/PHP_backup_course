<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>CDR log file analysis</title>
    </head>
    <body>
        <h1> CDR log file analysis </h1>
        <h3 style="color: blue"> script made by <em>Shay Raize Meshulam</em></h3>
        
        <?php
        // put your code here
        /*
         * The script reads the content of log file
         * pare the lines and extract the MSISDN, the date & time and the balance 
         */
        
        //open the log file
        $file_name = "c:\doc\CDR_1.log";
        $handle = @fopen($file_name, "r");
        
        //Start and End point of each element
        // 
        //MSISDN parsing position in the file
        $msisdn_start = 0;
        $msisdn_end = 10;

        //Date and time position parsing in the file
        $date_start = 11;
        $date_end = 38; 
        
        //Balance value position parsing in the file
        $balance_start = 81;
        $balance_end = 14;
        
        echo "<h2> The list of User info:</h2>";
                
        $fp = fopen('c:\doc\load_array.log',"a");
        
        //read each line of the file content
        if ($handle) {
            while (($buffer = fgets($handle, 4096)) !== false) {
                
                // extract MSISDN, DateTime and Balance from each line
                $msisdn = substr($buffer, $msisdn_start, $msisdn_end);
                $DateTime = substr($buffer, $date_start, $date_end);
                $balance = substr($buffer, $balance_start, $balance_end);
                
                $user_info=array($msisdn,$DateTime,$balance);
                fwrite($fp, $user_info[0]." ".$user_info[1]." ".$user_info[2]." ".\n);
                
            }    
                
            
            if (!feof($handle)) {
                echo "Error: unexpected fgets() fail\n";
            }
            fclose($handle);
            fclose($fp);
            
            
            }
        
        ?>
    </body>
</html>
