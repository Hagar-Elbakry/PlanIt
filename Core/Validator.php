<?php

namespace Core;

class Validator {

    public static function number($type, $valueName) {
        return filter_input($type, $valueName, FILTER_VALIDATE_INT);
    }

    public static function string($type, $valueName) {
        return filter_input($type, $valueName, FILTER_SANITIZE_STRING);
    }
}