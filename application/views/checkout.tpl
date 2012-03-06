{extends file="header.tpl"}
{block leftcolumn}

{include file='left_column.tpl'}

<script type="text/javascript" src="{$base_url}public/js/sliding.form.js"></script>
<section id="content">

    <section id="left-column">

        <!-- Main Content Area -->
        <section id="main">

            <h2>Cosul de cumparaturi</h2>
            <p>Cosul dumneavoastra contine urmataorele iteme</p>

            <table class='productcart'>
                <tr class='firstrow'>
                    <td class='firstcol'>Produs:</td>
                    <td class="secondcol">Cantitate:</td>
                    <td class="thirdcol">Pret:</td>
                    <td></td>
                </tr>
                {foreach from=$cartitems item=cartitem name=cart}
                    <tr class='product_row'>
                        <td class='firstcol'>
                            <a href='http://icondock.com/icons/webpro/home'>
                                <!--<img src='http://icondock.com/wp-content/plugins/wp-shopping-cart/product_images/thumbnails/webpro-home.jpg' width='30' height='24' title='Home' alt='Home' id='product_image_131' class='item product_image'/></a>--> 
                                <a href='' class='product-name' >{$cartitem.name}</a>  
                        </td>
                        <td>
                            <form class='adjustform' method='POST' action=''>
                                <input type='text' value="{$cartitem.qty}" size='2' name="qty{$smarty.foreach.cart.index}" />
                                <input type='hidden' value='0' name='key' />&nbsp; 
                                <input class='apply-btn' type='submit' name='submit' value='Modifica' /></form>  
                        </td>
                        <td class="pricecol"><span class='pricedisplay'>{$cartitem.subtotal|number_format:2} Ron</span></td>
                        <td><a href='{$base_url}index.php/products/removeFromCart/{$cartitem.id}' class='remove'>Sterge</a></td>
                    </tr>
                {/foreach}
                <!--<tr class='enter-coupon-row'>
                <form  method='POST' action='http://icondock.com/icons/checkout'>		
                        <td>Coupon Code:</td>		
                        <td colspan='2' align='left'><input type='text' name='coupon_num' id='coupon_num' value=''></td>
                        <td><input type='submit' class='apply-btn' value='Apply'></td>
                </form>
                </tr>-->
                <tr class='total_price'>
                    <td colspan='2'><strong>Pret Total:</strong></td>
                    <td colspan='2' id='checkout_total' style='vertical-align: middle;'>
                        <strong><span class='pricedisplay'>{$totalprice|number_format:2} Ron</span></strong>
                    </td>
                </tr>
            </table>

            <hr />
            <div class="slidingForms">
                <h1>Formular de expediere a comenzii</h1>
                <div id="wrapper">
                    <div id="steps">
                        <form id="formElem" name="formElem" action="" method="post">
                            <fieldset class="step">
                                <legend>Contul Meu</legend>
                                <p>Daca aveti deja un cont, va rugam sa va logati. Daca sunteti logat, datele necesare pentru trimiterea comenzii se pot prelua din baza de date. Astfel, puteti expedia mai repede si mai usor comanda.</p>
                                <p>
                                    <label for="fieldEmail">Email</label>
                                    <input id="email_field" name="fieldEmail" type="email" />
                                </p>
                                <p>
                                    <label for="fieldPwd">Password</label>
                                    <input id="pwd_field" name="fieldPwd" type="password" />
                                </p>
                                <p>
                                    <input class='nav_btnPrev' type='button' name='submit' value='Intra in cont' />
                                    <input class='nav_btnNext' type='button' name='' value='Continua fara cont' />
                                </p>
                            </fieldset>
                            <fieldset class="step">
                                <legend>Date Personale</legend>                                
                                <p>
                                    <label for="fieldNume">Nume</label>
                                    <input id="nume_field" name="fieldEmail" type="email" />
                                </p>
                                <p>
                                    <label for="fieldPrenume">Prenume</label>
                                    <input id="prenume_field" name="fieldPrenume" type="password" />
                                </p>
                                <p>
                                    <label for="fieldEmailAnon">Email</label>
                                    <input id="emailAnon_field" name="fieldEmailAnon" type="password" />
                                </p>
                                <p>
                                    <input type='button' class='nav_btnPrev'  name='submit' value='Inapoi' />
                                    <input class='nav_btnNext' type='button' name='submit' value='Continua' />
                                </p>
                            </fieldset>
                            <fieldset class="step">
                                <legend>Date de Livrare</legend>                                
                                <p>
                                    <label for="fieldTelefon">Telefon de contact</label>
                                    <input id="telefon_field" name="fieldTelefon" type="email" />
                                </p>
                                <p>
                                    <label for="optionAdreseInregistrate">Adrese Inregistrate</label>
                                    <select id="adreseInregistrate_option" name="optionAdreseInregistrate">
                                        <option>N/A</option>
                                        <option>Adresa salvata in baza de date numarul 1</option>
                                        <option>Adresa salvata in baza de date numarul 2</option>
                                        <option>Adresa salvata in baza de date numarul 3</option>
                                        
                                    </select>
                                </p>
                                <p>
                                    <label for="fieldAdresa">Adresa de livrare</label>
                                    <textarea rows="4" cols="20" id="adresa_field" name="fieldAdresa"></textarea>
                                </p>
                                <p>
                                    <input class='nav_btnPrev' type='button' name='submit' value='Inapoi' />
                                    <input class='nav_btnNext' type='button' name='submit' value='Continua' />
                                </p>
                            </fieldset>
                            <fieldset class="step">
                                <legend>Expediaza comanda</legend>
                                <p>
                                    Daca ati completat corect toate campurile, apasati pe "Trimite Comanda" pentru a expedia comanda dumneavoastra. 
                                    Daca nu, va rugam sa revizuiti informatiile furnizate si sa incercati din nou.                                 
                                </p>
                                <p>
                                    <input class='nav_btnPrev' type='button' name='submit' value='Inapoi' />
                                    <a href="" class="a_demo_one" id="exp_btn">Expediaza Comanda</a>
                                </p>
                            </fieldset>
                        </form>
                    </div>
                    <div id="navigation" style="display:none;">
                        <ul>
                            <li class="selected">
                                <a href="#">Contul Meu</a>
                            </li>
                            <li>
                                <a href="#">Date Personale</a>
                            </li>                             
                            <li>
                                <a href="#">Date de Livrare</a>
                            </li>
                            <li>
                                <a href="#">Expediaza Comanda</a>
                            </li>
                        </ul>                        
                    </div>
                </div>
            </div>

        </section>	


    </section>
    {/block}
    {block rightcolumn}
    <aside>

        <!-- Cart incl. Summary, Product List & View Cart Link -->

        {include file='cartsummary.tpl'}

        <!-- Popular Products -->
        <section id="popular">
            <h2>Popular Products</h2>
            <ul>
                <li class="even">
                    <div class="product-preview"><a href="product.htm" title="E-Book"><img src="assets/product-6.jpg" alt="E-Book" /></a></div>
                    <a href="product.htm" title="E-Book"><b>E-Book</b></a>
                    <small>29.00</small>
                </li>
                <li class="odd">
                    <div class="product-preview"><a href="product.htm" title="Generic Cards"><img src="assets/product-5.jpg" alt="Generic Cards" /></a></div>
                    <a href="product.htm" title="Generic Business Cards"><b>Generic Cards</b></a>
                    <small>12.99</small>
                </li>
                <li class="even">
                    <div class="product-preview"><a href="product.htm" title="Rockstar Freelancer"><img src="assets/product-4.jpg" alt="Rockstar Freelancer" /></a></div>
                    <a href="product.htm" title="Rockstar Freelancer Paperback"><b>Rockstar Freelancer</b></a>
                    <small>29.00</small>
                </li>
                <li class="odd">
                    <div class="product-preview"><a href="product.htm" title="Moo Cards"><img src="assets/product-2.jpg" alt="Moo Cards" /></a></div>
                    <a href="product.htm" title="Moo Cards"><b>Moo Cards</b></a>
                    <small>33.00 <del>34.99</del></small>
                </li>
                <li class="even">
                    <div class="product-preview"><a href="product.htm" title="Rockable Cards"><img src="assets/product-3.jpg" alt="Rockable Cards" /></a></div>
                    <a href="product.htm" title="Rockable Cards"><b>Rockable Cards</b></a>
                    <small>7.99</small>
                </li>
            </ul>
        </section>

        <!-- Tag Filter -->
        <section id="tags">
            <h2>Browse by Tag</h2>
            <ul>
                <li class="even"><a href="collection.htm" title="Advertisement">Advertisement</a></li>
                <li class="odd"><a href="collection.htm" title="Book">Book</a></li>
                <li class="even"><a href="collection.htm" title="Brochure">Brochure</a></li>
                <li class="odd"><a href="collection.htm" title="Business Cards">Business Cards</a></li>
                <li class="even"><a href="collection.htm" title="Paperback">Paperback</a></li>
                <li class="odd"><a href="collection.htm" title="E-Book">E-Book</a></li>
            </ul>
        </section>

        <!-- Contact Information -->
        <section id="contact">
            <h2>Get in Touch</h2>
            <ul>
                <li class="even address">Street Name, ZIP Code, City</li>
                <li class="odd phone"><a href="tel:+4951819313356" title="Phone">+49 5181 9313356</a></li>
                <li class="even email"><a href="mailto:hello@indiqo.eu" title="E-Mail">hello@indiqo.eu</a></li>
                <li class="odd web"><a href="http://indiqo.eu" title="Website">www.indiqo.eu</a></li>
            </ul>
        </section>

    </aside>

</section>
{/block}
{block footer}
<footer>
    <section id="bottom">

        <!-- Recent News -->
        <section id="recent-news">
            <h2>From Our Blog</h2>
            <ul>
                <li>
                    <div class="date">
                        <b>29</b>
                        <span class="month">Nov</span>
                    </div>
                    <div class="details">
                        This could be the title to one of your articles<br />
                        <a href="" title="Comments">11 Comments</a>
                    </div>
                </li>
                <li>
                    <div class="date">
                        <b>22</b>
                        <span class="month">Nov</span>
                    </div>
                    <div class="details">
                        This could be yet another headline<br />
                        <a href="" title="Comments">0 Comments</a>
                    </div>
                </li>
                <li>
                    <div class="date">
                        <b>17</b>
                        <span class="month">Nov</span>
                    </div>
                    <div class="details">
                        A slightly longer headline for demonstration purposes only this time<br />
                        <a href="" title="Comments">23 Comments</a>
                    </div>
                </li>
            </ul>
        </section>

        <!-- Twitter -->
        <section id="latest-tweets">
            <h2>Latest Tweets</h2>
            <div class="tweet"></div>
        </section>

        <!-- Information & Newsletter Subscription -->
        <section id="about-us">
            <h2>About Us</h2>
            <div class="introduction">
                <p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</b></p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <form method="post" action="index.htm">
                <div>
                    <h2>Subscribe for Our Newsletter</h2>
                    <label for="email">Stay informed about exclusive offers with our weekly Newsletter</label>
                    <input type="text" id="email" class="newsletter-input" value="Your E-Mail Address" />
                    <input type="submit" value="Submit" class="newsletter-submit" />
                </div>
            </form>
        </section>

    </section>
    <p><b>Copyright &copy; 2011 Storefront.</b> All Rights Reserved.</p>
    <nav>
        <ul>
            <li class="active"><a href="index.htm" title="Home">Home</a></li>
            <li><a href="collection.htm" title="Catalog">Catalog</a></li>
            <li><a href="blog.htm" title="Blog">Blog</a></li>
            <li><a href="page.htm" title="About">About</a></li>
        </ul>
    </nav>
</footer>
</body>
</html>
{/block}