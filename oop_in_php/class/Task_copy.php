<?php


class Task {

    public $id;
    public $taskName;
    public $status;
    public $expirationDate;

    public function isExpired(DateTime $today):bool {

        try {
            // istanza della classe DateTime
            //$today = new DateTime($date);
            $task = new Datetime($this->expirationDate);
            // gettype($today) // object
            // get_class($today) // DateTime
            if($today->format('Ymd') === $task->format('Ymd')){
                return false;
            }else{
                return $task->getTimestamp() > $today->getTimestamp();
    
            }    
        } catch (\Throwable $th) {
            return $th;        
        }
    }

    public function getExpirationDate(){
        return $this->expirationDate;
    }


}


?>