<?php
    function createSubArr()
    {
        return
            [
                'calls' => rand(0,100),
                'talktime' => rand(100,2000)/100,
                'group' => rand(0,10),
                'status' => $this->sentence(rand(1,2)),
                'pause_code' => '-',
                'campaign' => $this->getWord(5)
            ];
    }

    function getWord($n) {
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }

    function sentence($n)
    {
        $sentence = "";
        for ($i=0;$i<=$n;$i++){
            $sentence .= ' '.$this->getWord(rand(2,4));
        }
        return strtoupper($sentence);
    }
