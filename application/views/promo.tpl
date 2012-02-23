<section id="slideshow">
        <ul class="slider regular">
        {foreach from=$promo item=item name=promo}
                <!-- Repeatable Item Begin -->
                <li>
                        <h1>Introducing Storefront <b>PRO</b></h1>
                        <a href="{$item.url}"><img src="{$base_url}/public/uploads/promo_{$item.picture}" alt="{$item.name}" /></a>
                </li>	
        {/foreach}

        </ul>

        <ul class="slider responsive">

        {foreach from=$promo item=item name=promo}
                <!-- Repeatable Item Begin -->
                <li>
                        <h1>Introducing Storefront <b>PRO</b></h1>
                        <a href="{$item.url}"><img src="{$base_url}/public/uploads/promo_{$item.picture}" alt="{$item.name}" /></a>
                </li>	
        {/foreach}

        </ul>

        <!-- Slideshow Controls -->
        <a title="Previous" class="slider-prev">Previous</a>
        <a title="Next" class="slider-next">Next</a>

</section>