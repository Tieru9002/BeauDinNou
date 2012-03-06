{extends file="header.tpl"}
{block leftcolumn}

{include file='left_column.tpl'}

<script type="text/javascript">
            $(document).ready(function(){
    
        $(".apply-btn").click(function(){        
        var addressid = $(this).attr("name");  
        
        $.ajax({
            type: "POST",
            url: "http://localhost/iarbeau/index.php/user/getAddressData",
            data: "addressid="+addressid+"&getdata=true",
            success: function(json){                   
                var obj = jQuery.parseJSON(json);                                
                $("#fieldAddress").val(obj.address);                  
                $("#send").val("edit");
                $("#addressid").val(addressid);                                       
                if ($("#formAddresses").is(':hidden')) {
                $("#formAddresses").slideDown(function (){
                    $(".firstField").focus();
                });
            }              
            }    
        });        
    });               
});    
                
            
            </script>

<section id="content">

    <section id="left-column">

        <!-- Main Content Area -->
        <section id="main">

            <h2>Adrese de livrare</h2>
            <table class='productcart' id="addressTable">
                <tr class='firstrow'>
                    <td class='firstcol'>Adresa</td>
                    <td class="secondcol">Actiuni</td>
                </tr>
                {foreach from=$addresses item=address name=addresses}
                <tr class='product_row'>                    
                    <td class='firstcol'> 
                        <p>{$address.address}</p>  
                    </td>
                    <td>
                        <input class='apply-btn' name="{$address.id}" type='submit' name='submit' value='Modifica' />
                        <a href='{$base_url}index.php/User/removeAddress/{$address.id}' class='remove'>Sterge</a>
                    </td>
                </tr>
                {/foreach}
            </table>

            <input type="button" name="Intra in cont" class="button" id="newAddress_btn"  value="Adauga Adresa">

            <div id="formAddresses" class="form">                                                
                <form method="post" action="">
                    <div class="fieldWrapper">
                        <label for="fieldAddress" class="styled">Adresa de livrare</label>
                        <div class="thefield">
                            <textarea cols="34" rows="6" id="fieldAddress" name="fieldAddress" class="firstField"></textarea>
                        </div>
                    </div>

                    <div class="buttonsDiv">
                        <input type="hidden" id="addressid" value="" name="addressid">
                        <input type="hidden" id="send" name="send" value="success">
                        <input type="submit" name="Intra in cont" class="button" value="Salveaza">
                        <input type="button" name="Intra in cont" class="button" id="inchideAddresses_btn" value="Inchide">
                    </div>
                </form>
            </div>


        </section>	

        <!-- Specials — Please note that a class="last" will be required for the last item in the row -->

    </section>
    {/block}
    {block rightcolumn}
    <aside>

        <!-- Cart incl. Summary, Product List & View Cart Link -->

        {include file='cartsummary.tpl'}

        <!-- Login form -->
        {include file="login_form.tpl"}

        <!-- Contact Information -->
        {include file="contact_info.tpl"}

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
