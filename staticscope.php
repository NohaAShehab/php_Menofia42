<?php


    function sayGoodMorning(){
        static $count = 0;  # will be destucted at the end of the script,
        # static variable scope --> cannot be accessed outside the function.
        echo "Good morning, Nice to meet you All <br>";
        $count = $count +1;

        echo $count."<br>";
        echo "-------------------------------- <br>";
    }

    sayGoodMorning();
    sayGoodMorning();
    sayGoodMorning();



