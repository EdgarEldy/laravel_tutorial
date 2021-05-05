<?php
use Carbon\Carbon;
// Setting up flash messages
if (!function_exists('flash')) {
    function flash(String $message, String $type = 'success', String $icon = 'check')
    {
        session()->flash('status.message', $message);
        session()->flash('status.type', $type);
        session()->flash('status.icon', $icon);
    }
}

// Setting up date format
if (!function_exists('format_date_en')) {
    function format_date_en($date)
    {
        return Carbon::parse($date)->format('d/m/Y at H:i:s');
    }
}
