<?php

    class worker {
        private $logger;
        public function __construct($logger){
            $this->logger = $logger;
        }
        public function work(){
            for($i=0; $i<10; $i++){
                $logger = new logger();
                $logger->log($i);
        }
    }
}

    class Consolelogger {
    public function log($message){
        echo $message . "\n";
    }
}

    class Filelogger {
        public function log($message){
            echo $message . "\n";
                $file = fopen('log.txt', 'a');
                fwrite($file, $message . "\n");
                fclose($file);
        }
    }

$worker = new worker(new shitlogger);
$worker->work("lumi sulas ära ja valgeks läks maa,
 kaks väikest neegri välja saab,
 nad istuvad laudas,
mis teha on soe ja paljajalu käia sitaa peal on halb");