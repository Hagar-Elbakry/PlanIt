<?php

function base_path($path) {
    return BASE_PATH . $path;
}

function view($path) {
    require BASE_PATH . "views/$path";
}