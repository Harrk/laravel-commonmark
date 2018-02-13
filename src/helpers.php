<?php
/**
 * @author Harrk <https://harrkus.com>
 */

if (!function_exists('markdown')){
    /**
     * Helper function for parsing markdown
     * @param string $string
     * @return string
     */
    function markdown($string){
        $md = app()->make(\League\CommonMark\CommonMarkConverter::class);
        return $md->convertToHtml($string);
    }
}