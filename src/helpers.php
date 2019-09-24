<?php
/**
 * @author Harrk <https://harrk.dev>
 */

use League\CommonMark\CommonMarkConverter;

if (!function_exists('markdown_to_html')){
    /**
     * Helper function for parsing markdown
     * @param string $string
     * @return string
     */
    function markdown_to_html($string): string {
        $md = resolve(CommonMarkConverter::class);

        return $md->convertToHtml($string);
    }
}
