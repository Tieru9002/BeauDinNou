<section id="content">
		<section id="lefter-column">
			<aside style="margin-right:5px;">	
				<section id="tags1">
				<h2>Categorii</h2>
				<ul>
                                    {foreach from=$rootcats item=rootcat name=rootcat}
                                    <li {if $smarty.foreach.rootcat.iteration % 2 == 0  } class="even" {else}class="odd"{/if}><a href="{$base_url}index.php/products/singlecat/{$rootcat.id}" title="{$rootcat.name}">{$rootcat.name}</a></li>					
                                    {/foreach}
				</ul>
			</section>
                <section id="popular1">
				<h2>Popular Products</h2>
				<ul>
                                        {foreach from=$popular item=popitem name=popular}
					<li  {if $smarty.foreach.popular.iteration % 2 == 0  } class="even" {else}class="odd"{/if}>
						<div class="product-preview"><a href="{$base_url}index.php/products/singleproduct/{$popitem.id}" title="{$popitem.name}"><img src="{$base_url}public/uploads/menu_small_{$popitem.picture}" alt="{$popitem.name}" /></a></div>
						<a href="{$base_url}index.php/products/singleproduct/{$popitem.id}" title="{$popitem.name}"><b>{$popitem.name}</b></a>
						<small>{$popitem.price} </small>
					</li>
                                        {/foreach}					
				</ul>
			</section>
			</aside>
		</section>