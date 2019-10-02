@extends('master')
@section('body')
   
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach($DataCovers as $covers)
          <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach($DataCovers as $covers)
          <div class="carousel-item {{ $loop->first ? 'active' : '' }}">

            <img class="d-block w-100" src="{{asset($covers->image)}}" alt="First slide" style="width:100%;
            height:380px;">
          </div>
          @endforeach

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    <!-- </section> -->
	<!-- </section> -->
	  <!-- slider ends here -->
	<!-- PRODUCTS -->
    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Latest Products</span>
            <h2 class="mb-4">Our Products</h2>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">
                @foreach($Accesories as $ac)
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="{{route('product-details',['id'=>$ac->id])}}" class="img-prod">
                            @php
                                $single_image = json_decode($ac->image, true);
                            @endphp
                            <img class="img-fluid" src="{{asset($single_image[0])}}" style="height:300px" alt="Colorlib Template">
    						<!-- <span class="status">30%</span> -->
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="{{route('product-details',['id'=>$ac->id])}}">{{$ac->product_title}}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price">
                                        <!-- <span class="mr-2 price-dc">$120.00</span> -->
                                        <!-- <span class="price-sale">৳{{$ac->product_price}}</span></p> -->
		    					</div>
	    					</div>
    					</div>
    				</div>
    			</div>
          @endforeach
                
    		</div>
    	</div>
    </section>
    
	<!-- <div class="col-md-12 heading-section text-center ftco-animate">
		  <h3 class="subheading">WE ARE</h3>
		</div> -->
		<!-- <section class="ftco-section ftco-partner">
    	<div class="container">
    		<div class="row">
    			
    	</div>
    </section> -->
    <section
      class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light ftco-animate"
    >
      <div class="container py-4">
        <center><h3 class="mb-4">WHAT WE ARE?</h3></center>
        <div class="row d-flex justify-content-center py-5">
          <div
            class="col-md-6"
            style="background-color:#dddef2; color: black;"
          >
            <h4 style="color:black; text-align: center;padding: 4px;">AUTHORIZED IMPORTER</h4>
            <p style="padding: 10px;">
              Far far away, behind the word mountains, far from the countries
              Vokalia and Consonantia, there live the blind texts. 
            </p>
          </div>
          <div
            class="col-md-6"
            style="background-color:#DDDFCF; color: black;"
          >
              <h4 style="color:black; text-align: center; padding:4px;">AUTHORIZED DISTRIBUTOR</h4>
              <p style="padding: 10px;">
                Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia, there live the blind texts. 
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection