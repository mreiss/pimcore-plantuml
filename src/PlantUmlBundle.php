<?php

declare(strict_types=1);

namespace PlantUmlBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;
use Pimcore\Extension\Bundle\PimcoreBundleAdminClassicInterface;
use Pimcore\Extension\Bundle\Traits\BundleAdminClassicTrait;
use Pimcore\Extension\Bundle\Traits\PackageVersionTrait;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class PlantUmlBundle extends AbstractPimcoreBundle implements PimcoreBundleAdminClassicInterface
{
    use PackageVersionTrait;
    use BundleAdminClassicTrait;

    /**
     * @var string
     */
    public const PACKAGE_NAME = 'brunner-medien/pimcore-plantuml';

    public function build(ContainerBuilder $container)
    {
        parent::build($container);
    }

    protected function getComposerPackageName(): string
    {
        return self::PACKAGE_NAME;
    }

    /**
     * @return string[]
     */
    public function getCssPaths(): array
    {
        return [
            '/bundles/plantuml/css/plugin.css',
        ];
    }

    /**
     * @return string[]
     */
    public function getJsPaths(): array
    {
        return [
            '/bundles/plantuml/js/plugin.js',
            '/bundles/plantuml/js/plantuml.js',
            '/bundles/plantuml/js/plantuml-config.js',
        ];
    }
}
