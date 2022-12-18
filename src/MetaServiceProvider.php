<?php

namespace IchBin\Meta;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class MetaServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-meta';

    protected array $resources = [
        // CustomResource::class,
    ];

    protected array $pages = [
        // CustomPage::class,
    ];

    protected array $widgets = [
        // CustomWidget::class,
    ];

    protected array $styles = [
        'plugin-filament-meta' => __DIR__.'/../resources/dist/filament-meta.css',
    ];

    protected array $scripts = [
        'plugin-filament-meta' => __DIR__.'/../resources/dist/filament-meta.js',
    ];

    // protected array $beforeCoreScripts = [
    //     'plugin-filament-meta' => __DIR__ . '/../resources/dist/filament-meta.js',
    // ];

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name);
    }
}
