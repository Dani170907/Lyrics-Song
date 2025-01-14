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
        ["Do you think I have forgotten?", 300000, 100000],
        ["Do you think I have forgotten?", 1300000, 100000],
        ["Do you think I have forgotten", 1400000, 110000],
        ["about you?", 2000000, 250000],
        ["There was something bout you that now I can't remember", 3000000, 76000],
        ["It's the same damn thing that made my heart surrender", 500000, 75000],
        ["And I miss you on a train, I miss you in the morning", 500000, 80000],
        ["I never know what to think about", 400000, 100000],
        ["I think about youuuuuuuuuuuuuuuuuuuuuuuuuuu", 500000, 100000],
        ["About you", 500000, 100000]
    ];

    foreach ($lyrics as $line) {
        [$lyric, $initialDelay, $charDelay] = $line;
        singLyric($lyric, $initialDelay, $charDelay);
    }
}

singSong();
