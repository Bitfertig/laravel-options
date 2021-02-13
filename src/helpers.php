<?php

use App\Models\Option;
if ( !function_exists('option') ) {
    // Getter: option($key)->get($default)
    // Setter: option($key)->set($val)
    // Remove: option($key)->remove()
    function option($key = null, $options = []) {
        if ( isset($options['multiple']) && $options['multiple'] ) {
            return Option::findOrNew(['key' => $key]); // All or new
        }
        return Option::firstOrNew(['key' => $key]); // One or new
    }
}