<?php

function animateText($text, $delay = 100000) {
    foreach (str_split($text) as $char) {
        echo $char;
        flush();
        usleep($delay);
    }
    echo PHP_EOL;
}

function singLyric($lyric, $initialDelay, $charDelay) {
    usleep($initialDelay);
    animateText($lyric, $charDelay);
}

function singSong() {
    $lyrics = [
        ["Do you think I have forgotten?", 300000, 110000],
        ["Do you think I have forgotten?", 1200000, 110000],
        ["Do you think I have forgotten", 1200000, 110000],
        ["about you?", 1800000, 260000],
        ["There was something bout you that now I can't remember", 2900000, 75000],
        ["It's the same damn thing that made my heart surrender", 490000, 75000],
        ["And I miss you on a train, I miss you in the morning", 400000, 80000],
        ["I never know what to think about", 500000, 100000],
        ["I think about youuuuuuuuuuuuuuuuuuuuu", 500000, 110000],
        ["About you", 900000, 160000]
    ];

    foreach ($lyrics as $line) {
        [$lyric, $initialDelay, $charDelay] = $line;
        singLyric($lyric, $initialDelay, $charDelay);
    }
}

singSong();
