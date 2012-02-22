<section id="cart">
        <h2><a href="" title="View Cart"><img src="{$base_url}public/images/icon-cart.png" alt="Cart" /></a>Cartul dumneavoastra</h2>
        {if $cartnritems != 0}
        <p>Cartul dvs contine<b> {$cartnritems} cumparaturi</b> in valoare de <b>{$totalprice} RON</b></p>        
        {else}
        <p>Cartul dvs nu contine nici un item.</p>
        {/if}
        <ul>
                {foreach from=$cartitems item=cartitem name=cart}
                <li  {if $smarty.foreach.cart.iteration % 2 == 0  } class="even" {else}class="odd"{/if}>
                    <a href="{$base_url}/index.php/products/singleproduct/{$cartitem.id}" title="{$cartitem.qty} x {$cartitem.name}"><b>{$cartitem.qty}</b>{$cartitem.name}</a>
                </li>
                {/foreach}					
        </ul>
        <p class="right"><a href="{$base_url}/index.php/products/viewcart" title="View Cart"><b>View Cart</b></a></p>
</section>