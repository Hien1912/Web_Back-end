<?php

    class StopWatch{
        private $startTime;
        private $endTime;
        public function __construct()
        {
            $this->endTime = 1;
            $this->startTime=date('d/m/Y H:i:s');
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
            // $this->startTime=date(d-m-Y H:i:s);
        }
    }

    // $exp=new StopWatch();
    // echo $exp->getStart;
    

?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[Bài tập] Xây dựng lớp StopWatch</title>
</head>
<body>
    <form method="post">
    <input type="text">
    </form>
</body>
</html>