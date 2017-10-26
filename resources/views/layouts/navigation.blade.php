<div id="main-nav-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12 clearfix">

                <nav id="main-nav">
                    <div id="responsive-nav">
                        <div id="responsive-nav-button">
                            Menu <span id="responsive-nav-button-icon"></span>
                        </div><!-- responsive-nav-button -->
                    </div>
                    <ul class="menu clearfix">
                        <li>
                            <a class="active" href="{{route('home')}}">HOME</a>
                        </li>
                        <li class="mega-menu-container"><a href="#">SHOP</a>
                            <div class="mega-menu clearfix">

                                @foreach($categories as $category)
                                        <div class="col-5">
                                            <a href="{{$category->slug}}" class="mega-menu-title">{{$category->isParent() ? $category->name : ""}}</a><!-- End .mega-menu-title -->

                                            <ul class="mega-menu-list clearfix">
                                                {{--@foreach($category->subcategories as $subcat) --}}
                                                @if($category->children->count() > 0)
                                                    @foreach($category->children as $subcat)
                                                <li><a href="{{$category->slug}}">{{$subcat->name}}</a></li>
                                                     @endforeach
                                                @endif
                                            </ul>
                                        </div><!-- End .col-5 -->
                                @endforeach




                               {{--}}
                                <div class="col-5">
                                    <a href="category.html" class="mega-menu-title">Shoes</a><!-- End .mega-menu-title -->
                                    <ul class="mega-menu-list clearfix">
                                        <li><a href="#">Formal Shoes</a></li>
                                        <li><a href="#">Casual Shoes</a></li>
                                        <li><a href="#">Sandals</a></li>
                                        <li><a href="#">Boots</a></li>
                                        <li><a href="#">Wide Fit</a></li>
                                        <li><a href="#">Slippers</a></li>
                                    </ul>
                                </div><!-- End .col-5 -->
                                <div class="col-5">
                                    <a href="category.html" class="mega-menu-title">Accessories</a><!-- End .mega-menu-title -->
                                    <ul class="mega-menu-list clearfix">
                                        <li><a href="#">Bags &amp; Purses</a></li>
                                        <li><a href="#">Belts</a></li>
                                        <li><a href="#">Gloves</a></li>
                                        <li><a href="#">Jewellery</a></li>
                                        <li><a href="#">Sunglasses</a></li>
                                        <li><a href="#">Hair Accessories</a></li>
                                    </ul>
                                </div><!-- End .col-5 -->
                                <div class="col-5">
                                    <a href="category.html" class="mega-menu-title">Sports</a><!-- End .mega-menu-title -->
                                    <ul class="mega-menu-list clearfix">
                                        <li><a href="#">Sport Tops &amp; Vests</a></li>
                                        <li><a href="#">Swimwear</a></li>
                                        <li><a href="#">Footwear</a></li>
                                        <li><a href="#">Sports Underwear</a></li>
                                        <li><a href="#">Bags</a></li>
                                    </ul>
                                </div><!-- End .col-5 -->

                                <div class="col-5">
                                    <a href="category.html" class="mega-menu-title">Maternity</a><!-- End .mega-menu-title -->
                                    <ul class="mega-menu-list clearfix">
                                        <li><a href="#">Tops &amp; Skirts</a></li>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Trousers &amp; Shorts</a></li>
                                        <li><a href="#">Knitwear</a></li>
                                        <li><a href="#">Jackets &amp; Coats</a></li>
                                    </ul>
                                </div><!-- End .col-5 --> --}}
                            </div><!-- End .mega-menu -->
                        </li>

                        <li>
                            <a href="#">News</a>
                        </li>
                        <li>
                            <a href="#">Sales</a>
                        </li>
                        <li>
                            <a href="#">Elements</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>

                </nav>

                <div id="quick-access">
                    <div class="dropdown-cart-menu-container pull-right">
                        <div class="btn-group dropdown-cart">
                            <button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown">
                                <span class="cart-menu-icon"></span>
                                0 item(s) <span class="drop-price">- $0.00</span>
                            </button>

                            <div class="dropdown-menu dropdown-cart-menu pull-right clearfix" role="menu">
                                <p class="dropdown-cart-description">Recently added item(s).</p>
                                <ul class="dropdown-cart-product-list">
                                    <li class="item clearfix">
                                        <a href="#" title="Delete item" class="delete-item"><i class="fa fa-times"></i></a>
                                        <a href="#" title="Edit item" class="edit-item"><i class="fa fa-pencil"></i></a>
                                        <figure>
                                            <a href="product.html"><img src="images/products/thumbnails/item12.jpg" alt="phone 4"></a>
                                        </figure>
                                        <div class="dropdown-cart-details">
                                            <p class="item-name">
                                                <a href="product.html">Cam Optia AF Webcam </a>
                                            </p>
                                            <p>
                                                1x
                                                <span class="item-price">$499</span>
                                            </p>
                                        </div><!-- End .dropdown-cart-details -->
                                    </li>
                                    <li class="item clearfix">
                                        <a href="#" title="Delete item" class="delete-item"><i class="fa fa-times"></i></a>
                                        <a href="#" title="Edit item" class="edit-item"><i class="fa fa-pencil"></i></a>
                                        <figure>
                                            <a href="product.html"><img src="images/products/thumbnails/item13.jpg" alt="phone 2"></a>
                                        </figure>
                                        <div class="dropdown-cart-details">
                                            <p class="item-name">
                                                <a href="product.html">Iphone Case Cover Original</a>
                                            </p>
                                            <p>
                                                1x
                                                <span class="item-price">$499<span class="sub-price">.99</span></span>
                                            </p>
                                        </div><!-- End .dropdown-cart-details -->
                                    </li>
                                </ul>

                                <ul class="dropdown-cart-total">
                                    <li><span class="dropdown-cart-total-title">Shipping:</span>$7</li>
                                    <li><span class="dropdown-cart-total-title">Total:</span>$1005<span class="sub-price">.99</span></li>
                                </ul><!-- .dropdown-cart-total -->
                                <div class="dropdown-cart-action">
                                    <p><a href="cart.html" class="btn btn-custom-2 btn-block">Cart</a></p>
                                    <p><a href="checkout.html" class="btn btn-custom btn-block">Checkout</a></p>
                                </div><!-- End .dropdown-cart-action -->

                            </div><!-- End .dropdown-cart -->
                        </div><!-- End .btn-group -->
                    </div><!-- End .dropdown-cart-menu-container -->


                    <form class="form-inline quick-search-form" role="form" action="#">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search here">
                        </div><!-- End .form-inline -->
                        <button type="submit" id="quick-search" class="btn btn-custom"></button>
                    </form>
                </div><!-- End #quick-access -->
            </div><!-- End .col-md-12 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

</div><!-- End #nav -->
</div><!-- End #inner-header -->
</header><!-- End #header -->