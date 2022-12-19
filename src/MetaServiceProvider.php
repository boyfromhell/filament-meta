<?php

namespace IchBin\Meta;

use Filament\PluginServiceProvider;
use IchBin\Meta\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;

class MetaServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-meta';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasViews()
            ->hasRoute('web')
            ->hasCommand(InstallCommand::class);
    }

    public function packageBooted(): void
    {
        $now = \Carbon\Carbon::now();

        parent::packageBooted();

        $this->publishes([
            __DIR__ . '/../database/migrations/create_filament-meta_table.php.stub' => $this->generateMigrationName('create_filament_meta_table', $now->addSecond()),
        ], 'filament-meta-migrations');
    }
}
