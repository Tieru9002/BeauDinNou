{extends file="header.tpl"}
{block leftcolumn}

{include file='left_column.tpl'}


    <script type="text/javascript">
            $(document).ready(function(){
    
        $(".apply-btn").click(function(){        
        var invoiceid = $(this).attr("name");                 
        $.ajax({
            type: "POST",
            url: "http://localhost/iarbeau/index.php/user/getInvoiceData",
            data: "invoiceid="+invoiceid+"&getdata=true",
            success: function(json){                
                var obj = jQuery.parseJSON(json);
                $("#fieldDenumireFirma").val(obj.bussiness_name);
                $("#fieldCui").val(obj.cui);
                $("#fieldOrdineRegistru").val(obj.register_order_nr);
                $("#fieldBankAcc").val(obj.bank_acc);
                $("#fieldBankName").val(obj.bank_name);                
                $("#fieldAddress").val(obj.invoice_address);                
                $("#send").val("edit");
                //alert($("#invoiceid").val());
                $("#invoiceid").val(invoiceid);
                //alert($("#invoiceid").val());                
                
                if ($("#formInvoiceData").is(':hidden')) {
                $("#formInvoiceData").slideDown(function (){
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

        <section id="main">
            <h2>Date de facturare - Persoana Juridica</h2>
            <table class='productcart' id="invoiceTable">
                <tr class='firstrow'>
                    <td class='firstcol'>Denumire Firma</td>
                    <td class="secondcol">Actiuni</td>
                </tr>
                {foreach from=$invoices item=invoice name=invoices}
                <tr class='product_row'>
                    <td class='firstcol'> 
                        <a href='#' class='product-name' >{$invoice.bussiness_name}</a>  
                    </td>
                    <td>
                        <input class='apply-btn' type='submit' name='{$invoice.id}' id="modifyInvoiceData_btn" value='Modifica' />
                        <a href='{$base_url}index.php/User/removeInvoice/{$invoice.id}' class='remove'>Sterge</a>
                    </td>
                </tr>   
                {/foreach}                
                
            </table>
            <input type="button" name="Intra in cont" class="button" id="newInvoiceData_btn"  value="Adauga Persoana Juridica">
            <div id="formInvoiceData" class="form">                                                
                <form method="post" action="">
                    <div class="fieldWrapper">
                        <label for="fieldDenumireFirma" class="styled">Denumirea firmei</label>
                        <div class="thefield">
                            <input type="text" id="fieldDenumireFirma" name="fieldDenumireFirma" size="40" class="firstField" />
                        </div>
                    </div>
                    <div class="fieldWrapper">
                        <label for="fieldCui" class="styled">C.U.I.</label>
                        <div class="thefield">
                            <input type="text" id="fieldCui" name="fieldCui" size="40" />
                        </div>
                    </div>
                    <div class="fieldWrapper">
                        <label for="fieldOrdineRegistru" class="styled">Nr. ordine in Registrul Comertului</label>
                        <div class="thefield">
                            <input type="text" id="fieldOrdineRegistru" name="fieldOrdineRegistru" size="40" />
                        </div>
                    </div>
                    <div class="fieldWrapper">
                        <label for="fieldBankAcc" class="styled">Contul bancar</label>
                        <div class="thefield">
                            <input type="text" id="fieldBankAcc" name="fieldBankAcc" size="40" />
                        </div>
                    </div>
                    <div class="fieldWrapper">
                        <label for="fieldBankName" class="styled">Numele bancii</label>
                        <div class="thefield">
                            <input type="text" id="fieldBankName" name="fieldBankName" size="40" />
                        </div>
                    </div>
                    <div class="fieldWrapper">
                        <label for="fieldAddress" class="styled">Adresa de facturare</label>
                        <div class="thefield">
                            <textarea cols="34" rows="4" id="fieldAddress" name="fieldAddress"></textarea>
                        </div>
                    </div>                
                <div class="buttonsDiv">
                    <input type="hidden" id="invoiceid" value="" name="invid">
                    <input type="hidden" id="send" name="send" value="success">
                    <input type="submit" name="Intra in cont" class="button" value="Salveaza">
                    <input type="button" name="Intra in cont" class="button" id="inchideInvoiceData_btn" value="Inchide">
                </div>
                 </form>
            </div>

        </section>

    </section>



    {/block}
    {block rightcolumn}

    <aside>

        <!-- Cart incl. Summary, Product List & View Cart Link -->
        {include file='cartsummary.tpl'}

        <!-- Popular Products -->
        {include file='login_form.tpl'}

        {include file='contact_info.tpl'}

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