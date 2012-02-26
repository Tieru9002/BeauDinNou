<section class="sale">
        <h1>Black Friday Sale <a href="collection.htm" title="See All Products">See All Products</a></h1>
        <ul>
                <li class="slide">
                        {foreach from=$featured_s item=item}
                        <div class="product">
                                <img src="{$base_url}/public/uploads/slider_{$item.picture}" alt="Product Image" />
                                <div class="overlay">
                                        <div class="price">
                                                <h2>{$item.name}</h2>
                                                <ul>
                                                        <li><b>{$item.price}</b>.00 <del>14.95</del></li>
                                                        <li class="details"><a href="{$base_url}/index.php/singleproduct/{$item.id}" title="More Details">More Details</a></li>
                                                </ul>
                                        </div>	
                                </div>
                        </div>
                        {/foreach}



                </li>
        </ul>				
</section>