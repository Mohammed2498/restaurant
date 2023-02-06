<x-front-layout>
    <section class="shop-area pt-120 pb-120 p-relative wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <h6 class="mt-20 mb-30">Showing 1–9 of 10 results</h6>
                </div>
                <div class="col-lg-6 col-sm-6 text-right">
                    <select name="orderby" class="orderby" aria-label="Shop order">
                        <option value="menu_order" selected="selected">Default sorting</option>
                        <option value="popularity">Sort by popularity</option>
                        <option value="rating">Sort by average rating</option>
                        <option value="date">Sort by latest</option>
                        <option value="price">Sort by price: low to high</option>
                        <option value="price-desc">Sort by price: high to low</option>
                    </select>
                </div>
            </div>
            <div class="row align-items-center">
                @foreach($categories as $category)
                <div class="col-lg-4 col-md-6">
                    <div class="product mb-40">
                        <div class="product__img">
                            <a href="{{route('categories.show',$category->id)}}"><img  src="{{asset('storage/'.$category->image)}}" alt=""></a>
                            <div class="product-action text-center">
                                <a href="{{route('categories.show',$category->id)}}">Go</a>
                            </div>
                        </div>
                        <div class="product__content text-center pt-30">
                            <h4 class="pro-title"><a href="shop-details.html">{{$category->name}}</a></h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="pagination-wrap mt-50 text-center">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item"><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                <li class="page-item active"><a href="#">1</a></li>
                                <li class="page-item"><a href="#">2</a></li>
                                <li class="page-item"><a href="#">3</a></li>
                                <li class="page-item"><a href="#">...</a></li>
                                <li class="page-item"><a href="#">10</a></li>
                                <li class="page-item"><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div></div></div>
        </div>
    </section>
</x-front-layout>
