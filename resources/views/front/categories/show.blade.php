<x-front-layout>
    <section class="meal-select-section pt-110 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <div class="populer-meal">
                        <ul>
                            @foreach($category->menus as $menu)
                            <li>
                                <div class="meal-container">
                                    <div class="meal-img">
                                        <img src="{{asset('storage/'.$menu->image)}}" alt="img">
                                    </div>
                                    <div class="meal-content">
                                        <h5>
                                            <a href="shop-details.html">{{$menu->name}}</a>
                                        </h5>
                                        <p>{{$menu->description}}</p>
                                    </div>
                                    <div class="line">
                                        <hr>
                                    </div>
                                    <div class="meal-price">
                                        <a href="shop-details.html">${{$menu->price}}</a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-front-layout>
