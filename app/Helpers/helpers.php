<?php

if( !function_exists('az_check_route') ) {
    /**
     * Check Route Active
     * @param $route
     * @return string
     */
    function az_check_route($route) {
        if( \Request::route()->getName() == $route ) {
            return 'active';
        }
        return '';
    }
}
if( !function_exists('current_user') ) {
    /**
     * Check Route Active
     * @return string
     */
    function current_user() {
        if( \Auth::check() ) {
            return \Auth::guard()->user();
        }
        return NULL;
    }
}

