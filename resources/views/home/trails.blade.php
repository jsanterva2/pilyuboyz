@extends('layouts.app')

@section('title', 'Bike Trails')

@section('class', 'sub_page')

@section('content')

<!-- trails section -->
  <section class="trails_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          <span>
            Bike Trails
          </span>
        </h2>
      </div>
      <div class="layout_padding2-top">
        <div class="row">
          <div class="col-md-12">
            <div class="map_container">
              <div class="map-responsive">
                <iframe
                  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                  width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%"
                  allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end trails section -->

@endsection