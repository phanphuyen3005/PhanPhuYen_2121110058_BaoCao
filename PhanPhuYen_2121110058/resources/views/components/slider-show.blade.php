<style>
body {
    padding: 0%;
    text-align: center;
  }

  #slideshow {
    overflow: hidden;
    height: 500px;
    width: 1428px;
    margin: 0 auto;
  }

  .slide-wrapper {
    width: 2912px;
    -webkit-animation: slide 14s ease infinite;
  }

  .slide {
    float: left;
    height: 510px;
    width: 728px;
  }
  @-webkit-keyframes slide {
  20% {margin-left: 0px;}
  30% {margin-left: -728px;}
  50% {margin-left: -728px;}
  60% {margin-left: -1456px;}
  80% {margin-left: -1456px;}
}  </style>
<div id="slideshow">
  <div class="slide-wrapper">
    @foreach ($list_slider as $slider )
        <div class="slide"><img src="{{asset('images/product/'.$slider->link)}}"></div>
    @endforeach
    {{-- <div class="slide"><img src="{{asset('images/product/'.$list_slider->link)}}"></div>
    <div class="slide"><img src="images/product/slide3.png"></div>
       <div class="slide"><img src="images/product/slide5.png"></div> --}}
  </div>
</div>

