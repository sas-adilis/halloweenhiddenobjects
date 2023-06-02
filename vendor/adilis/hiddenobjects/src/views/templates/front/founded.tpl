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
<div class="fancybox-hiddenobjects">
    {if $hiddenobject->message_end}
        {$hiddenobject->message_end} {* HTML ouput, no escape necessary *}
    {else}
    <div class="container">
        <div class="col-sm-2 text-center">
            <img src="{$icon_url|escape:'html':'UTF-8'}" alt="" width="64" height="64" class="img-responsive"/>
        </div>
        <div class="col-sm-10 text-center-xs">
            <span class="h2 text-primary">{l s='Well done, you founded me !' mod='easterhiddenobjects'}</span>
            <br/>
                    {l s='To congratulate you for finding me,' mod='easterhiddenobjects'}<br/>
                    {l s='I offer a suprise for your next order. Here is your discount code to use:' mod='easterhiddenobjects'}
        </div>
    </div>
    <br/>
    <div class="text-center clear">
        <div class="badge hiddeni">{$cart_rule_code|escape:'htmlall':'UTF-8'}</div>
        <br/>
        <br/>
        <em>
            {l s='Enter in your shopping cart on your next order to discover your gain.' mod='easterhiddenobjects'}
        </em>
        <br/>
        <br/>
        <a class="btn btn-default button" onclick="javascript:$.fancybox.close();">{l s='Continue shopping' mod='easterhiddenobjects'}</a>
        <a class="btn btn-default button" href="{Context::getContext()->link->getPageLink("cart", true)|escape:'html':'UTF-8'}">{l s='View my shopping cart' mod='easterhiddenobjects'}</a>
    </div>
    {/if}
    {if $is_in_maintenance}
        <br/>
        <div class="alert alert-warning text-center">
            {l s='Maintenance mode is activated.' mod='easterhiddenobjects'}
        </div>
    {/if}
</div>