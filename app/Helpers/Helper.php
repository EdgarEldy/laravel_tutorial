<?php

// Setting up flash messages
if (!function_exists('flash')) {
    function flash(String $message, String $type = 'success', String $icon = 'check')
    {
        session()->flash('status.message', $message);
        session()->flash('status.type', $type);
        session()->flash('status.icon', $icon);
    }
}
