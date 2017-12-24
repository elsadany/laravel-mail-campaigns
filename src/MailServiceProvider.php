<?php

namespace Alyahmmed\LaravelMailCampaigns;

use Illuminate\Support\ServiceProvider;

class MailServiceProvider extends ServiceProvider {

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        $this->publishes([__DIR__ . '/plugin' => base_path('/')]);
        // \Artisan::call('migrate', ["--force"=> true]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }

}
