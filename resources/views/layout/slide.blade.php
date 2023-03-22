<link rel="stylesheet" href="{{url('css/slider.css')}}">
<div class="cont" id="cont">
	<div class="mouse"></div>
	<div class="app">
		<div class="app__bgimg">
			<div class="app__bgimg-image app__bgimg-image--1">
			</div>
			<div class="app__bgimg-image app__bgimg-image--2">
			</div>
		</div>
		<div class="app__img">
			<img onmousedown="return false" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/537051/whiteTest4.png" alt="city" />
		</div>

		<div class="app__text app__text--1">
			<div class="app__text-line app__text-line--4">Housing</div>
			<div class="app__text-line app__text-line--3">comfort</div>
			<div class="app__text-line app__text-line--2 ms-2">All the time</div>
			<div class="app__text-line app__text-line--1"><img src="{{ url('/images/login.jpg') }}" alt="" /></div>
		</div>

		<div class="app__text app__text--2">
			<div class="app__text-line app__text-line--4">Cleaning</div>
			<div class="app__text-line app__text-line--3">Relaxation</div>
			<div class="app__text-line app__text-line--2 ms-2">All the time</div>
			<div class="app__text-line app__text-line--1"><img src="{{ url('/images/login.jpg') }}" alt="" /></div>
		</div>
	</div>
	<div class="pages">
		<ul class='pages__list'>
			<li data-target='1' class='pages__item pages__item--1 page__item-active'></li>
			<li data-target='2' class='pages__item pages__item--2'></li>
		</ul>
	</div>
</div>
<script src="{{ asset('js/slide.js')}}"></script>
