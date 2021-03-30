<?php


class Task {

    public $id;
    public $taskName;
    public $status;
    public $expirationDate;

    public function isExpired():bool {

        // istanza della classe DateTime
        $today = new DateTime();
        $task = new Datetime($this->expirationDate);
        
        echo $task->getTimestamp()."\n";
        echo $today->getTimestamp()."\n";


        //versione fatta da me

        // $todaysecond = $today->getTimestamp();
        // $tasksecond = ($task->getTimestamp())+86400;
        // echo $tasksecond."\n";
        // echo $todaysecond."\n";

        // return $tasksecond <= $todaysecond;

        /*-------------------------------------------*/

        //versione suggerita dal prof

        if($today->format('Ymd') === $task->format('Ymd')){
            return false;
        }else{
            return $task->getTimestamp() <= $today->getTimestamp();

        }
    }

    public function getExpirationDate(){
        return $this->expirationDate;
    }


}


?>