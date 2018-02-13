<?php
/**
 * @author Harrk <https://harrkus.com>
 */

namespace Harrk\CommonMark\Engines;


use Illuminate\Contracts\View\Engine;

class MarkdownEngine implements Engine {

    /**
     * @inheritdoc
     */
    public function get($path, array $data = []) {
        $fs = file_get_contents($path);
        return markdown($fs);
    }

}