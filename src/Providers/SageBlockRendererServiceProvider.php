<?php

namespace SageBlock\Providers;

use SageBlock\Console\BlockMakeCommand;
use Illuminate\Support\ServiceProvider;
use SageBlock\SageBlockRenderer;

class SageBlockRendererServiceProvider extends ServiceProvider {

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register() {
		$this->app->singleton(
			'SageBlockRenderer',
			function () {
				return new SageBlockRenderer( $this->app );
			}
		);
	}

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot() {
		$this->app->make( 'SageBlockRenderer' );

		$this->commands(
			array(
				BlockMakeCommand::class,
			)
		);
	}
}
