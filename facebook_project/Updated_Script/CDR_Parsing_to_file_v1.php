<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $start= microtime(true);
        //Increase the allowed execution time 
        set_time_limit(0);
        ini_set('memory_limit','256M');
        ini_set('max_execution_time', 0);     
        
        $fp= fopen("c:\doc\load_array.log",'w+');
        $file_name = "c:\doc\CDR.log";
        $lines = file($file_name);
        
        //MSISDN parsing position in the file
        $msisdn_start = 0;
        $msisdn_end = 10;

        //Date and time position parsing in the file
        $date_start = 30;
        $date_end = 19; 
        
        //Balance value position parsing in the file
        $balance_start = 89;
        $balance_end = 8;
                                        
        for ($i=0; $i<count($lines); $i++) {
            $msisdn=substr($lines[$i],$msisdn_start,$msisdn_end);
            $DateTime=substr($lines[$i], $date_start, $date_end);
            $balance=substr($lines[$i], $balance_start, $balance_end);
            
            //write the user info to output log file
            fwrite($fp, $msisdn."\t".$DateTime."\t".$balance."\r\n");
                   
        }
        fclose($fp);
                  
        //MySQL server information
        $server="tapfizz.com";
        //$server="localhost";
        $user="architect";
        $pass="faceb00k";
        
        // default $db_name the current db
        $db_name="shayrm";
        $table_name="cdr";
                        
        // connect to MySQL 
        
        $conn = mysql_connect($server,$user,$pass); 
        
        if (!$conn) {
                    die('Not connected : ' . mysql_error());
        }
                       
        $db_selected = mysql_select_db($db_name, $conn);
        if (!$db_selected) {
        die ("Can\'t use datebase $db_name : " . mysql_error());
        }
        //generic input to print out the connection information
        else {
            echo "connect to $server and DB $db_name\n"."use table $table_name:"."<BR>";
            echo "<BR>";
        }
        
        $sql= "load data local infile 'C:/\doc/\load_array.log' into table $table_name fields terminated by '\t' lines terminated by '\n';";
        mysql_query($sql,$conn) or die(mysql_error());
        
        $end= microtime(true);
        
        echo "script start time: ".$start."<BR>";
        echo "Script end time: ".$end."<BR>";;
        
        $execution_time = (round($end) - round($start));
        echo "<h3>execution time (Sec): ".$execution_time."</h3>";
        
        ?>
         
    </body>
</html>