<?php

use TailwindMerge\Contracts\TailwindMergeContract;

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

if (! function_exists('clsx')) {
    /**
     * clsx / tailwind-merge for Blade.
     *
     * @param  string|array<array-key, string|bool>  ...$classes
     */
    function clsx(...$classes): string
    {
        return app(TailwindMergeContract::class)->merge(
            implode(' ',
                array_filter(
                    array_map(function ($class) {
                        return is_array($class)
                          ? implode(' ', array_filter(
                              array_map(fn ($value, $key) => $value && ! empty($key)
                              ? $key : '', $class, array_keys($class))))
                          : $class;
                    }, $classes)
                )
            )
        );
    }
}
