<?php
/**
 * @author Harrk <https://harrk.dev>
 */

use Illuminate\Contracts\Container\BindingResolutionException;
use League\CommonMark\CommonMarkConverter;

if (!function_exists('markdownToHtml')){
    /**
     * Helper function for parsing markdown
     * @param string $string
     * @return string
     * @throws BindingResolutionException
     */
    function markdownToHtml($string): string {
        $md = resolve(CommonMarkConverter::class);

        return $md->convertToHtml($string);
    }
}
