@extends('master')
@section('body')
    <!-- END nav -->

    <div class="container">
      <!--Section: Contact v.1-->
      <section class="section pb-5">
        <!--Section heading-->
        <h2 class="section-heading h1 pt-4">Contact us</h2>
        <!--Section description-->
        <p class="section-description pb-4">
          Please contact us and let us know your opinion.
        </p>

        <div class="row">
          <!--Grid column-->
          <div class="col-lg-5 mb-4">
            <!--Form with header-->
            <div class="card">
              <div class="card-body">
                <!--Header-->
                <div class="form-header blue accent-1">
                  <h3><i class="fas fa-envelope"></i> Write to us:</h3>
                </div>

                <p>
                  We are always ready to hear from you because your suggestion
                  matters.
                </p>
                <br />

                <!--Body-->
                <form method="post" action="{{route('new-message')}}">
                  @csrf
                <!-- <div class="md-form"> -->
                  <i class="fas fa-user prefix grey-text"></i>
                  <!-- <input type="text" id="form-name" class="form-control" /> -->
                  <input type="text" id="form-name" class="form-control" value="" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
                  <label for="form-name">Your name</label>
                <!-- </div> -->

                
                  <i class="fas fa-envelope prefix grey-text"></i>
                  <!-- <input type="text" id="form-email" class="form-control" /> -->
                  <input type="text" id="form-email" class="form-control" value="" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
                  <label for="form-email">Your email</label>
                

              
                  <i class="fas fa-pencil-alt prefix grey-text"></i>
                  <textarea id="form-text" class="form-control md-textarea" rows="3" value="" name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}"></textarea>
                  <label for="form-text">Message</label>
              

                <div class="text-center mt-4">
                  <button class="btn btn-light-blue">Submit</button>
                </div>
                </form>
              </div>
            </div>
            <!--Form with header-->
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-7">
            <h3>Google Map</h3>
            <!--Google map-->
            <div
              id="map-container-google-11"
              class="z-depth-1-half map-container-6"
              style="height: 400px"
            >
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d912.9821888019517!2d90.38962651323648!3d23.74991988005402!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf2e574982c1f15ec!2sRS%20Communications%20Limited!5e0!3m2!1sbn!2sbd!4v1569257064529!5m2!1sbn!2sbd"
                frameborder="0"
                style="border:0"
                width="500px"
                height="400px"
                allowfullscreen
              ></iframe>
            </div>

            <br />
            <!--Buttons-->
            <!-- <div class="row text-center">
              <div class="col-md-4">
                <a class="btn-floating blue accent-1"
                  ><i class="fas fa-map-marker-alt"></i
                ></a>
                <p>San Francisco, CA 94126</p>
                <p>United States</p>
              </div>

              <div class="col-md-4">
                <a class="btn-floating blue accent-1"
                  ><i class="fas fa-phone"></i
                ></a>
                <p>+ 01 234 567 89</p>
                <p>Mon - Fri, 8:00-22:00</p>
              </div>

              <div class="col-md-4">
                <a class="btn-floating blue accent-1"
                  ><i class="fas fa-envelope"></i
                ></a>
                <p>info@gmail.com</p>
                <p>sale@gmail.com</p>
              </div>
            </div> -->
          </div>
          <!--Grid column-->
        </div>
      </section>
      <!--Section: Contact v.1-->
    </div>

    @endsection