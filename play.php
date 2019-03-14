#!/usr/local/bin/php
<?php

class Play
{
    private $possition;
    private $result;

    public function __construct(int $possition = 1)
    {
        $this->possition = $possition;
        $this->run();
    }

    private function timer(int $i)
    {
        sleep($i);
    }

    private function bone():int
    {
        return random_int(1, 6);
    }

    private function status(int $bone, string $point)
    {
        echo $bone . "-" . $point . "\n";
    }

    private function snake(int $bone)
    {
        $this->possition -= 3;
        $this->status($bone, "snake" . $this->possition);
    }

    private function ladder(int $bone)
    {
        $this->possition += 10;
        $this->status($bone, "ladder" . $this->possition);
    }


    private function roll()
    {
        $bone = $this->bone();
        $this->possition += $bone;

        if ($this->possition > 100): exit();
        elseif ($this->possition % 9 == 0): $this->snake($bone);
        elseif (in_array($this->possition, [5, 25])): $this->ladder($bone);
        else: $this->status($bone, $this->possition);
        endif;
    }

    public function run()
    {
        $this->roll();
        $this->timer(1);
        $this->run();
    }
}

(function () {
    new Play();
})();
