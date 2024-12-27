<?php

if (! function_exists('relative_path')) {
    /**
     * Get the relative path from the base path.
     *
     * @param  string  $separator
     */
    function relative_path(string $path, $separator = DIRECTORY_SEPARATOR): string
    {
        $base = array_slice(explode($separator, rtrim(base_path(), $separator)), 1);
        $path = array_slice(explode($separator, rtrim($path, $separator)), 1);

        return implode($separator, array_slice($path, count($base)));
    }
}
