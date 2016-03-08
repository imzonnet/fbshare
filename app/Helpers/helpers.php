<?php

if( !function_exists('az_check_route') ) {
    function az_check_route($route) {
        if( \Request::route()->getName() == $route ) {
            return 'active';
        }
        return '';
    }
}