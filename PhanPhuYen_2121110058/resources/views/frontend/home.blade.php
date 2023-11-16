@extends('layouts.site')


@section('maincontent')
<x-slider-show/>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 mb-5 text-center">
                    <ul class="product-category">
                        <li><a href="#" class="active">TẤT CẢ</a></li>
                        <li><a href="#">NÓN SƠN</a></li>
                        <li><a href="#">NÓN TAI BÈO</a></li>
                        <li><a href="#">NÓN GUCCI</a></li>
                        <li><a href="#">NÓN 3/4</a></li>
                    </ul>
                </div>
            </div>
                @foreach ($list_category as $cat)
                <x-product-home :cat='$cat' />  
                @endforeach

            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 padding_0 row mt-5">
                <div class="map-responsive">
                   <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="1600" height="508" frameborder="0" style="border:0; width: 215%;" allowfullscreen></iframe>
                </div>
             </div>
        </div>
    </section>
@endsection
