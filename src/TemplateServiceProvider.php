<?php

namespace MicroweberPackages\Template\Big;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TemplateServiceProvider extends PackageServiceProvider
{

    public function configurePackage(Package $package): void
    {
        $package->name('microweber-templates-big');
        $package->hasViews('microweber-templates-big');
    }

    public function register(): void
    {
        parent::register();

        $this->loadMigrationsFrom(__DIR__ . '/migrations/');

        View::prependNamespace('microweber-module-shop',
            __DIR__ . '/resources/views/modules/shop/templates');

    }

}
