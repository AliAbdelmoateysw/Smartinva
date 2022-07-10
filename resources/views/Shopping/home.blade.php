@extends('layouts.shoppingmaster')
@section('content')
<!--========================================================================================================-->


<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> <script> (adsbygoogle = window.adsbygoogle || []).push({ google_ad_client: "my id that adsense generated", enable_page_level_ads: true }); </script>


<!--========================================================================================================-->
<script>
    function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("Search");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tbody");
        
        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("tr")[2];
            if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
            }
        }
    }

    function myFunction2() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("Search");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable2");
        tr = table.getElementsByTagName("tbody");
        
        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("tr")[2];
            if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
            }
        }
    }
    
</script>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<script>
    $(document).ready(function(){
        $('input[type="checkbox"]').click(function(){
            var inputValue = $(this).attr("value");
            $("#" + inputValue).toggle();
        });
    });
</script>

<style>
    tbody{
        display: inline-block;
        margin: 35px; 
        text-align: center;
        margin-top: 50px;
    }

</style>

@if(Session::has('success'))
<div class="alert alert-success" ><h3 style=" text-align: center" > {{Session::get('success')}} </h3> </div>
@endif

<br><br><br>
	<!-- tittle heading -->
    <h3 class="tittle-w3l">Our Top Products
        <span class="heading-style">
            <i></i>
            <i></i>
            <i></i>
        </span>
    </h3>
    <!-- //tittle heading -->

<!-- product left -->



	<!-- product left -->
    <div class="side-bar col-md-3">
        <div class="search-hotel">
            <h3 class="agileits-sear-head">Search Here..</h3>
            <form action="#" >
                <input type="search" placeholder="Product name..." name="search" id="Search" required="" style="margin-left: 9%; border: solid aliceblue;" onkeyup="myFunction();myFunction2();">
            </form>
        </div>
       
        <!-- Category -->
        <div class="left-side">
            <h3 class="agileits-sear-head">Category</h3>
            <ul>
                <li>
                    <input type="checkbox" class="checked" id="CHSH"  value="Pants">
                    <span class="span">Shirts</span> 
                </li>
                <li>
                    <input type="checkbox" class="checked" id="CHPA"  value="Shirts">
                    <span class="span">Pant</span>
                </li>
            </ul>
        </div>
        <!-- //food preference -->
        <div style=" width: 255px; height: 400px; margin-top: 40px; background: white;">
            <img src="" title="adsbygoogle">
        </div>
        
    </div>
    
<!--========================================================================================================-->


<div>
 <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-9687007734660221" data-ad-slot="2930227358" data-ad-format="auto">
 </ins>
</div>



<!--========================================================================================================-->

    <!-- //product left -->




        <!-- product right -->
    <div class="agileinfo-ads-display col-md-9">
        <div id="Shirts">
            <div class="wrapper">
                <!-- first section (nuts) -->
                <div class="product-sec1">
                    <h3 class="heading-tittle">Shirts</h3>                   
                    <!--- ================================ Shirt Products  =============================================== -->
                    <table id="myTable">
                            
                        @foreach ($products as $product)
                        @if ($product->title == 'Cool Pants')
                        @continue
                        @endif
                        <tbody>
                        <tr>
                            <div class="col-md-4 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <th><div class="men-thumb-item">
                                    <img src="{{ asset($product->thumbnail) }}" alt="" width="166px" height="150px">
                                        <span class="product-new-top">New</span>
                                    </div></th>
                        </tr>        
                        <tr>    
                                    <td><div class="item-info-product">
                                     <h4>
                                        {{ $product->title }}
                                        </h4></td>
                        </tr>
                        <tr>                
                                        <td><div class="info-product-price">
                                            <strong class="dark-grey-text"  style="color:blue" id="PRO">
                                            {{ $product->description }}
                                            </strong>
                                        </div></td>
                        </tr>
                        <tr>                
                                        <td><div class="info-product-price">
                                            <span class="item_price">${{ $product->price }} </span> 
                                        </div></td>
                        </tr>
                        <tr>                
                                    <td><a href="{{ route('addtocart', ['id'=>$product->id]) }}" class="btn btn-primary pull right" role="button"> Add to Cart </a></td>
                        </tr>            
                                    </div>
                                </div>
                            </div>
                        </tr>
                        @endforeach
                        <tbody>
                    </table>   
             <!--- ================================ ====================  =============================================== -->
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>    
            <!--============================================================================================================================================-->
                <!-- section (Pant) -->
        <div id="Pants">
                <div class="product-sec1">
                    <h3 class="heading-tittle">Pant</h3>
           <!--- ================================ Pants Products  =============================================== -->
                        <table id="myTable2">
                            
                            @foreach ($products as $product)
                            @if ($product->title == 'Cool Shirts')
                            @continue
                            @endif
                            <tbody>
                            <tr>
                                <div class="col-md-4 product-men">
                                    <div class="men-pro-item simpleCart_shelfItem">
                                        <th><div class="men-thumb-item">
                                        <img src="{{ asset($product->thumbnail) }}" alt="" width="166px" height="150px">
                                            <span class="product-new-top">New</span>
                                        </div></th>
                            </tr>        
                            <tr>    
                                        <td><div class="item-info-product">
                                         <h4>
                                            {{ $product->title }}
                                            </h4></td>
                            </tr>
                            <tr>                
                                            <td><div class="info-product-price">
                                                <strong class="dark-grey-text"  style="color:blue" id="PRO">
                                                {{ $product->description }}
                                                </strong>
                                            </div></td>
                            </tr>
                            <tr>                
                                            <td><div class="info-product-price">
                                                <span class="item_price">${{ $product->price }} </span> 
                                            </div></td>
                            </tr>
                            <tr>                
                                        <td><a href="{{ route('addtocart', ['id'=>$product->id]) }}" class="btn btn-primary pull right" role="button"> Add to Cart </a></td>
                            </tr>            
                                        </div>
                                    </div>
                                </div>
                            </tr>
                            @endforeach
                            <tbody>
                        </table>     
             <!--- ================================ ====================  =============================================== -->
                    <div class="clearfix"></div>
                </div>
                            <!--  section (Pant) -->     
            </div>
        </div>
                    <!-- //product right -->
        </div>
    </div>
 <!--- ================================Top Products End =============================================== -->

<!-- special offers -->
<div class="featured-section" id="projects">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">Special Offers
            <span class="heading-style">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </h3>
        <!-- //tittle heading -->
        <div class="content-bottom-in">
            <ul id="flexiselDemo1">
                @foreach ($products as $product)
                <li>
                    <div class="w3l-specilamk">
                          <div class="speioffer-agile">
                                  <img src="{{ asset($product->thumbnail) }}" alt="" width="109px" height="150">
                          </div>
                          <div class="product-name-w3l">
                              <h4 style=" text-align: center"  >
                               {{ $product->title }}
                              </h4>
                              <div class="w3l-pricehkj">
                                  <h6 style=" text-align: center" >${{ $product->price }}</h6>
                              </div>
                              <a href="{{ route('addtocart', ['id'=>$product->id]) }}" class="btn btn-primary pull right" role="button"  style="margin-left: 33%;" > Add to Cart </a>
                          </div>
                      </div>
                  </li>
                @endforeach
             </ul>
        </div>
    </div>
</div>
<!-- //special offers -->

@endsection