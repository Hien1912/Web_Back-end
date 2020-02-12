<?php

class StopWatch{
    private $startTime;
    private $endTime;

    public function __construct()
    {
        $this->startTime = round(microtime(true) * 1000);
    }

    public function getStart()
    {
        return $this->startTime;
    }

    public function getEnd()
    {
        return $this->endTime;
    }

    public function start()
    {
        $this->startTime = round(microtime(true) * 1000);
    }

    public function stop()
    {
        $this->endTime = round(microtime(true) * 1000);
    }

    public function getElapsedTime()
    {
        return $this->getEnd() - $this->getStart();
    }
}

?>
