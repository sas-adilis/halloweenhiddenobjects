<?php

use Adilis\HiddenObjects\Classes\HiddenObject;
use Adilis\HiddenObjects\Classes\HiddenObjectInterface;

/**
 * 2016 Adilis
 *
 * Make your shop interactive for Easter: hide objects and ask your customers to find them in order to win a
 * discount coupon. Make your brand stand out by offering an original game: a treasure hunt throughout your products.
 *
 *  @author    Adilis <support@adilis.fr>
 *  @copyright 2016 SAS Adilis
 *  @license   http://www.adilis.fr
 */
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
