@if($categories)


        <div class="widget">
            <h3>Categories</h3>
            <div class="list-group list-group-brand list-group-accordion">

                @foreach($categories as $category)
                    @if($category->isParent())
                    <a href="{{$category->slug}}" class="list-group-item"><b class="text-info">{{$category->name}}</b></a>
                    @endif
                @endforeach

            </div><!-- End .list-group -->
        </div>
        @endif
        @if($brands)
            <div class="widget">
                <h3>Brands</h3>

                <div class="list-group list-group-brand">
                    @foreach($brands->take(6) as $brand)

                        <a href="#" class="list-group-item">{{ $brand->name }}</a>

                    @endforeach

                </div><!-- End .list-group -->
            </div>
@endif