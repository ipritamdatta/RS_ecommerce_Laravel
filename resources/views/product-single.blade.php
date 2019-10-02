@extends('master')
@section('body')
    <!-- END nav -->

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 ftco-animate">
            @php
              $single_image = json_decode($accesories->image, true);
              @endphp
              @foreach($single_image as $single_image)
            <a href="{{asset($single_image)}}" class="image-popup"
              ><img
                src="{{asset($single_image)}}"
                class="img-fluid"
                alt="Colorlib Template"
            /></a>
            @endforeach
          </div>
          <div class="col-lg-6 product-details pl-md-5 ftco-animate">
            <h3>{{$accesories->product_title}}</h3>

            <!-- <p class="price"><span>৳{{$accesories->price}}</span></p> -->
            <p><span>Released on: {{$accesories->release_date}}</span></p>
            <p>
              {{$accesories->details}}
            </p>
            <!-- <div class="row mt-4">
							<div class="col-md-6">
								<div class="form-group d-flex">
		              <div class="select-wrap">
	                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                  <select name="" id="" class="form-control">
	                  	<option value="">Small</option>
	                    <option value="">Medium</option>
	                    <option value="">Large</option>
	                    <option value="">Extra Large</option>
	                  </select>
	                </div>
		            </div>
							</div>
							<div class="w-100"></div>
							<div class="input-group col-md-6 d-flex mb-3">
	             	<span class="input-group-btn mr-2">
	                	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
	                   <i class="ion-ios-remove"></i>
	                	</button>
	            		</span>
	             	<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
	             	<span class="input-group-btn ml-2">
	                	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
	                     <i class="ion-ios-add"></i>
	                 </button>
	             	</span>
	          	</div>
	          	<div class="w-100"></div>
	          	<div class="col-md-12">
	          		<p style="color: #000;">600 kg available</p>
	          	</div>
          	</div>
          	<p><a href="cart.html" class="btn btn-black py-3 px-5">Add to Cart</a></p> -->
          </div>
        </div>
      </div>
    </section>

    <script>
      $(document).ready(function() {
        var quantitiy = 0;
        $(".quantity-right-plus").click(function(e) {
          // Stop acting like a button
          e.preventDefault();
          // Get the field name
          var quantity = parseInt($("#quantity").val());

          // If is not undefined

          $("#quantity").val(quantity + 1);

          // Increment
        });

        $(".quantity-left-minus").click(function(e) {
          // Stop acting like a button
          e.preventDefault();
          // Get the field name
          var quantity = parseInt($("#quantity").val());

          // If is not undefined

          // Increment
          if (quantity > 0) {
            $("#quantity").val(quantity - 1);
          }
        });
      });
    </script>
  @endsection
