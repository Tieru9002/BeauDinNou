<section id="featured">
        <h1><img src="{$base_url}public/images/icon-featured.png" alt="Featured" />Featured Products</h1>
        <ul class="featured regular">

                <!-- Repeatable Area Begin â€” Each incl. up to 6 Products -->
                <li class="slide">
                        {foreach from=$featured_d1 item=featured name=featured}
                        <div class="product">
                                <img src="{$base_url}public/uploads/slider_{$featured.picture}" alt="Product Image" />
                                <div class="overlay">
                                        <div class="price">
                                                <h2>{$featured.name}</h2>
                                                <ul>
                                                        <li><b>{$featured.price|substr:0:-2}</b>{$featured.price|substr:-2:2} </li>
                                                        <li class="details"><a href="{$base_url}index.php/products/singleproduct/{$featured.id}" title="More Details">More Details</a></li>
                                                </ul>
                                        </div>	
                                </div>
                        </div>						
                        {/foreach}                                                
                </li>
                <!-- Repeatable Area End -->


                <!-- Repeatable Area Begin â€” Each incl. up to 6 Products -->
                <li class="slide">
                        {foreach from=$featured_d2 item=featured name=featured}
                        <div class="product">
                                <img src="{$base_url}public/uploads/slider_{$featured.picture}" alt="Product Image" />
                                <div class="overlay">
                                        <div class="price">
                                                <h2>{$featured.name}</h2>
                                                <ul>
                                                        <li><b>{$featured.price|substr:0:-2}</b>{$featured.price|substr:-2:2}</li>
                                                        <li class="details"><a href="{$base_url}index.php/products/singleproduct/{$featured.id}" title="More Details">More Details</a></li>
                                                </ul>
                                        </div>	
                                </div>
                        </div>						
                        {/foreach}       						
                </li>
                <!-- Repeatable Area End -->

        </ul>			

        <!-- Featured Products Controls -->
        <a title="Previous" class="featured-prev">Previous</a>
        <a title="Next" class="featured-next">Next</a>

</section>