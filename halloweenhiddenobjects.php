<?php
/**
 * 2016 Adilis
 *
 *  @author    Adilis <support@adilis.fr>
 *  @copyright 2016 SAS Adilis
 *  @license   http://www.adilis.fr
 */

use Adilis\HiddenObjects\Classes\ModuleHiddenObjects;
use Adilis\HiddenObjects\Classes\ModuleHiddenObjectsInterface;

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

class HalloweenHiddenObjects extends ModuleHiddenObjects implements ModuleHiddenObjectsInterface
{
    public function getTable(): string
    {
        return 'hiddenobjects_hw';
    }

    public function getPrefix(): string
    {
        return 'HW';
    }

    public function getName(): string
    {
        return 'halloweenhiddenobjects';
    }

    public function getModuleKey(): string
    {
        return 'b4a4b0da667f4a0f929b0f09e9d803ac';
    }

    public function getTheme(): string
    {
        return 'Halloween';
    }
}
