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
        ["This may be the night that my dreams might let me know", 70000, 48000],
        ["All the stars closer", 10000, 109000],
        ["All the stars closer", 10000, 109000],
        ["All the stars closer", 10000, 110000],
        ["This may be the night that my dreams might let me know", 72000, 44000],
        ["All the stars closer", 10000, 109000],
        ["All the stars closer", 10000, 109000],
        ["All the stars closer", 10000, 110000]
    ];

    foreach ($lyrics as $line) {
        [$lyric, $initialDelay, $charDelay] = $line;
        singLyric($lyric, $initialDelay, $charDelay);
    }
}

singSong();
