<?php
/**
 * @author Harrk <https://harrk.dev>
 */

namespace Harrk\CommonMark\Engines;


use Illuminate\Contracts\View\Engine;
use League\CommonMark\CommonMarkConverter;

class MarkdownEngine implements Engine {

    /**
     * @inheritdoc
     */
    public function get($path, array $data = []): string {
        $fs = file_get_contents($path);

        $markdownParser = resolve(CommonMarkConverter::class);

        return $markdownParser->convertToHtml($fs);
    }

}
