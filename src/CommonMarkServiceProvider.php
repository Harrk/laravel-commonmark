<?php
/**
 * @author Harrk <https://harrk.dev>
 */

namespace Harrk\CommonMark;

use Harrk\CommonMark\Engines\MarkdownEngine;
use Illuminate\Support\ServiceProvider;
use League\CommonMark\CommonMarkConverter;

class CommonMarkServiceProvider extends ServiceProvider {

    /**
     * Boot Service Provider
     */
    public function boot(): void {
        $this->bootMarkdownCompiler();
    }

    /**
     * Register concretes
     */
    public function register(): void {
        $this->registerMarkdownCompiler();
    }

    /**
     * Boot the markdown compiler
     */
    public function bootMarkdownCompiler(): void {
        $app = $this->app;

        $resolver = $app->make('view.engine.resolver');

        $app->view->addExtension('md.blade.php', 'md');

        $resolver->register('md', function(){
            return new MarkdownEngine();
        });
    }

    /**
     * Register markdown compiler as a singleton
     */
    public function registerMarkdownCompiler(): void {
        app()->singleton(CommonMarkConverter::class, function(){
            return new CommonMarkConverter;
        });
    }

}
