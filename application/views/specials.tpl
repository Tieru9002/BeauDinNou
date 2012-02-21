<section id="specials">
        <ul>
                {foreach from=$specials item=special name=specials}
                {if $smarty.foreach.specials.iteration == 1}
                <li class="first"><a href="{$base_url}index.php/products/singleproduct/{$special.id}" title="{$special.name}"><img src="{$base_url}public/uploads/specials_{$special.picture}" alt="Product Image" /></a></li>
                {/if}
                {if $smarty.foreach.specials.iteration == 2}
                <li class="first"><a href="{$base_url}index.php/products/singleproduct/{$special.id}" title="{$special.name}"><img src="{$base_url}public/uploads/specials_{$special.picture}" alt="Product Image" /></a></li>
                {/if}
                {if $smarty.foreach.specials.iteration == 3}
                <li class="third"><a href="{$base_url}index.php/products/singleproduct/{$special.id}" title="{$special.name}"><img src="{$base_url}public/uploads/specials_{$special.picture}" alt="Product Image" /></a></li>
                {/if}                
                {/foreach}
        </ul>
</section>