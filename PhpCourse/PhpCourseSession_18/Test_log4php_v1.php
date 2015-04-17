<?php

include('Log4PHP-2.3.0/Logger.php');

Logger::configure('loggingconfiguration.xml');

class Something
{
    private $log;
    
    public function __construct()
    {
        $this->log = Logger::getLogger(__CLASS__);
    }

    public function run()
    {
        $this->log->info("simple informative message - This is a new start");
        $i=1;
        $sum=0;
            while($i<=10)
            {
            $sum += $i;
            $this->log->info("i is equal to=".$i);
            $i++;
            }
    }
}

$ob = new Something();
$ob->run();
    
?>