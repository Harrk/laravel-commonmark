<?php
/**
 * @author Harrk <https://harrk.dev>
 * @created 12/02/2018
 */

namespace Harrk\CommonMark\Test\Feature;

use Harrk\CommonMark\Engines\MarkdownEngine;
use Harrk\CommonMark\Test\TestCase;
use League\CommonMark\CommonMarkConverter;

class MarkdownCompilerTest extends TestCase {

    public function testConcreteRegistration(): void {
        $app = $this->app;
        $md = $app->make(CommonMarkConverter::class);

        $this->assertEquals(get_class($md), CommonMarkConverter::class);
    }

    public function testCanParseMarkdown(): void {
        $app = $this->app;
        $md = $app->make(CommonMarkConverter::class);

        $markdown_text = '**Hello** World, _this_ is `some` markdown.';
        $expected_html_text = "<p><strong>Hello</strong> World, <em>this</em> is <code>some</code> markdown.</p>\n";

        $this->assertEquals($md->convertToHtml($markdown_text), $expected_html_text);
    }

    public function testCanParseMarkdownHelper(): void {
        $markdown_text = '**Hello** World, _this_ is `some` markdown.';
        $expected_html_text = "<p><strong>Hello</strong> World, <em>this</em> is <code>some</code> markdown.</p>\n";

        $this->assertEquals(markdown_to_html($markdown_text), $expected_html_text);
    }

    public function testMarkdownEngine(): void {
        $engine = new MarkdownEngine();

        $expected_html_text = "<p><strong>Hello</strong> World, <em>this</em> is <code>some</code> markdown.</p>\n";
        $this->assertEquals($engine->get('./tests/resources/views/test.md.blade.php'), $expected_html_text);
    }

}
