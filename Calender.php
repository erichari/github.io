<?php
    class Calendar{
        private $month = 0;
        private $lastDay = 0;
        private $firstOfWeek = 0;

        public function __construct($month, $lastDay, $firstOfWeek){
          $this->month = $month;
          $this->lastDay = $lastDay;
          $this->firstOfWeek = $firstOfWeek;
        }
        public function getMonth(){
            return $this->month;
        }
        public function getLastDay(){
            return $this->lastDay;
        }
        public function makeCalendar($month, $lastDay, $firstOfWeek){

            echo "<h1 class="month">{$month}</h1>"
            echo "<tr>";
            foreach($weeks as $week){
                echo "<th>{$week}</th>"
            }
            echo "</tr>";
            echo "<tr>";
            for($i=0;$i<$firstOfWeek;$i++){
                echo "<td></td>"
            }
            $idOfDay = $firstOfWeek;
            for($i=1; $i<$lastDay; $i++){
                if($idOfDay == 0){
                    echo "<tr>"
                }
                echo "<td>{$i}<td>";
                $idOfDay ++;
                if($idOfDay == 6){
                    echo "</tr>";
                }
            }
        }
    }
    $weeks = array("SUN", "MON", "TUE", "WED", "THU", "FRI", "SAT");

    $january = new Calendar(1, 31, 6);
    $february = new Calendar(2, 28);
    $march = new Calendar(3, 31);
    $april = new Calendar(4, 30);
    $may = new Calendar(5, 31);
    $june = new Calendar(6, 30);
    $july = new Calendar(7, 31);
    $august = new Calendar(8, 31);
    $september = new Calendar(9, 30);
    $october = new Calendar(10, 31);
    $november = new Calendar(11, 30);
    $december = new Calendar(12, 31)


?>
