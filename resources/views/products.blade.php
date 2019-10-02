@extends('master')
@section('body')
    <!-- END nav -->

	<!-- slider starts from here -->
    <!-- slider ends here -->
	<!-- PRODUCTS -->
    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">All Products</span>
            <h2 class="mb-4">Our Products</h2>
          </div>
        </div>   		
    	</div>
    	<div class="container">

                    @foreach($DataCategory as $cat)
                    <div>
                    <h4 style="padding-bottom: 2%;">{{$cat->category_name}}</h4>
                </div>
    		<div class="row">
    			@foreach($Accesories as $ac)
                @if($cat->category_id == $ac->category_id)
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="{{route('product-details',['id'=>$ac->id])}}" class="img-prod">
                            @php
                                $single_image = json_decode($ac->image, true);
                            @endphp
                            <img class="img-fluid" src="{{asset($single_image[0])}}" style="height:300px" alt="web782">
                            <!-- <span class="status">30%</span> -->
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="{{route('product-details',['id'=>$ac->id])}}">{{$ac->product_title}}</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price">
                                        <!-- <span class="mr-2 price-dc">$120.00</span> -->
                                        <!-- <span class="price-sale">৳{{$ac->price}}</span></p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
    			
    		</div>
            @endforeach
    	</div>
    </section>
    <hr>
	@endsection