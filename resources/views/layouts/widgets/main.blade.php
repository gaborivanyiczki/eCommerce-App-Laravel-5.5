<div class="well well-sm">


<h3>Latest</h3>

</div>

        <ul class="product-list-basic">

        @if($products)
            @foreach($products->take(8) as $product)
            <li>

                <a href="#" class="product-photo">
                    <img src="images/{{$product->image}}" height="130" alt="iPhone 6" />
                </a>

                <h2><a href="#">{{$product->title}}</a></h2>
                <a href="#" class="product-compare">compare</a>

                <div class="product-rating">
                    <div>
                        <span class="product-stars" style="width: 60px" >
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                        </span>
                    </div>

                    <span><a href="#">82 reviews</a></span>
                </div>

                <p class="product-description">{{str_limit($product->description,150)}}</p>

                <a href="" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-shopping-cart"></span>ADD TO CART</a>
                <p class="product-price">&euro;{{$product->price}}</p>

            </li>
                @endforeach
            @endif
        </ul>


{{--}}<script>
    $(document).ready(function() {
        $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
        $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
    });
</script> --}}
<div class="xs-margin"></div><!-- Space -->
