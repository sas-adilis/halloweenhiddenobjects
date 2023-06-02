<?php
/**
 * 2016 Adilis
 *
 *  @author    Adilis <support@adilis.fr>
 *  @copyright 2016 SAS Adilis
 *  @license   http://www.adilis.fr
 */

use Adilis\HiddenObjects\Classes\HiddenObject;
use Adilis\HiddenObjects\Classes\HiddenObjectInterface;

class HWHiddenObject extends HiddenObject implements HiddenObjectInterface
{
    public function getPrefix(): string
    {
        return 'HW';
    }

    public function getModuleName(): string
    {
        return 'halloweenhiddenobjects';
    }

    public function getTable(): string
    {
        return 'hiddenobjects_hw';
    }
}
