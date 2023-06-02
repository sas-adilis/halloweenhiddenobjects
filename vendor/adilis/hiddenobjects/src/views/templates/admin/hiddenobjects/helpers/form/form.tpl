{**
 * 2016 Adilis
 *
 * Make your shop interactive for Easter: hide objects and ask your customers to find them in order to win a
 * discount coupon. Make your brand stand out by offering an original game: a treasure hunt throughout your products.
 *
 *  @author    Adilis <support@adilis.fr>
 *  @copyright 2016 SAS Adilis
 *  @license   http://www.adilis.fr
 *}

{extends file="helpers/form/form.tpl"}
{block name="field"}
	{if $params.name == 'how_many'}
fzefzef
	{else}
		{$smarty.block.parent}
	{/if}
{/block}
{*block name="input"}
    {if $input.type == 'text'}
        {if version_compare($smarty.const._PS_VERSION_, '1.6', '<')}
    		{if isset($input.prefix) && $input.prefix}{$input.prefix|escape:'htmlall':'UTF-8'}{/if}
    		{$smarty.block.parent}
            {if isset($input.suffix) && $input.suffix}{$input.suffix|escape:'htmlall':'UTF-8'}{/if}
        {else}
    		{$smarty.block.parent}
        {/if}
	{else}
		{$smarty.block.parent}
	{/if}
{/block*}