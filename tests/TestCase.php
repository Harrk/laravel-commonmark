<?php
/**
 * @author Harrk <https://harrk.dev>
 * @created 12/02/2018
 */
namespace Harrk\CommonMark\Test;

use Harrk\CommonMark\CommonMarkServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase {

    protected function getPackageProviders($app): array {
        return [
            CommonMarkServiceProvider::class
        ];
    }

}
