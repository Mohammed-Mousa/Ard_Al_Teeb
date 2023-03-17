@extends('frontend.layoutsFront.app')


@section('title_and_css_files')
<title>الصفحة الرئيسية</title>
<link rel="stylesheet" href="{{URL::asset('frontend/css/home.css')}}">
@endsection

@section('content')

<section class="slider owl-carousel owl-theme">

	<div class="item first-slider">
		<div class="container-fluid">
			{{-- first center element --}}
			<section class="center-contain">
				<h2>
					دع شخصيتك
					<br>
					تكشف لك عن عطرك
				</h2>

				<a href="" class="main-btn">
					اكتشف عطرك الآن
				</a>
			</section>

			{{-- bottom element --}}

			<section class="copyright d-none d-xl-block">
				<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"
					xmlns:xlink="http://www.w3.org/1999/xlink">
					<rect width="15" height="15" fill="url(#pattern0)" />
					<defs>
						<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
							<use xlink:href="#image0_0_277" transform="scale(0.01)" />
						</pattern>
						<image id="image0_0_277" width="100" height="100"
							xlink:href="data:image/png;base64,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" />
					</defs>
				</svg>

				2008 - 2023 Ard Al Teeb All Right Reserved
			</section>


			<section class="social-media">
				<a href="">
					<img src="{{URL::asset('frontend/img/main/Group 4.png')}}" alt="" width="18.4" height="18.4">
				</a>
				<a href="">
					<img src="{{URL::asset('frontend/img/main/LinkedIn.png')}}" alt="" width="25.46" height="25.46">
				</a>
				<a href="">
					<img src="{{URL::asset('frontend/img/main/Group 3.png')}}" alt="" width="18.4" height="18.4">
				</a>
				<a href="">
					<img src="{{URL::asset('frontend/img/main/Facebook.png')}}" alt="" width="25.46" height="25.46">
				</a>


			</section>

		</div>


	</div>


	<div class="item"></div>
	<div class="item"></div>
	<div class="item"></div>


</section>


<main>
	<figcaption class="figcaption">
		<h1>
			عطور أرض الطيب
		</h1>
		<p>
			اختر عطرك بعناية ... عطرك يحدد شخصيتك
		</p>
	</figcaption>

	<img src="{{URL::asset('frontend/img/22 1.png')}}" alt="">
</main>

<section class="products">
	<h2>عـــــطور</h2>
	<p>
		أرض الطيب والجمال.... نفتخر بأجود العطور
	</p>

	<div class="container-fluid">

		<div class="row row-of-products">
			<div class="col-12 col-sm-6 col-lg-4 col-xxl-3">


				<section class="product">
					<img src="{{URL::asset('frontend/img/Untitled-1.png')}}" class="main" alt="">
					<img src="{{URL::asset('frontend/img/DSC00226.png')}}" class="small" alt="">
					<div class="txt">
						<span>عـــــطر أقـــــوى مـــــعك</span>
						<button>
							أضف للسلة
						</button>
					</div>
					
				</section>


			</div>
			<div class="col-12 col-sm-6 col-lg-4 col-xxl-3">


				<section class="product">
					<img src="{{URL::asset('frontend/img/Untitled-1.png')}}" class="main" alt="">
					<img src="{{URL::asset('frontend/img/DSC00226.png')}}" class="small" alt="">
					<div class="txt">
						<span>عـــــطر أقـــــوى مـــــعك</span>
						<button>
							أضف للسلة
						</button>
					</div>
					
				</section>


			</div>
			<div class="col-12 col-sm-6 col-lg-4 col-xxl-3">


				<section class="product">
					<img src="{{URL::asset('frontend/img/Untitled-1.png')}}" class="main" alt="">
					<img src="{{URL::asset('frontend/img/DSC00226.png')}}" class="small" alt="">
					<div class="txt">
						<span>عـــــطر أقـــــوى مـــــعك</span>
						<button>
							أضف للسلة
						</button>
					</div>
					
				</section>


			</div>
			<div class="col-12 col-sm-6 col-lg-4 col-xxl-3">


				<section class="product">
					<img src="{{URL::asset('frontend/img/Untitled-1.png')}}" class="main" alt="">
					<img src="{{URL::asset('frontend/img/DSC00226.png')}}" class="small" alt="">
					<div class="txt">
						<span>عـــــطر أقـــــوى مـــــعك</span>
						<button>
							أضف للسلة
						</button>
					</div>
					
				</section>


			</div>
			<div class="col-12 col-sm-6 col-lg-4 col-xxl-3">


				<section class="product">
					<img src="{{URL::asset('frontend/img/Untitled-1.png')}}" class="main" alt="">
					<img src="{{URL::asset('frontend/img/DSC00226.png')}}" class="small" alt="">
					<div class="txt">
						<span>عـــــطر أقـــــوى مـــــعك</span>
						<button>
							أضف للسلة
						</button>
					</div>
					
				</section>


			</div>
			<div class="col-12 col-sm-6 col-lg-4 col-xxl-3">


				<section class="product">
					<img src="{{URL::asset('frontend/img/Untitled-1.png')}}" class="main" alt="">
					<img src="{{URL::asset('frontend/img/DSC00226.png')}}" class="small" alt="">
					<div class="txt">
						<span>عـــــطر أقـــــوى أقـــــوى مـــــعك</span>
						<button>
							أضف للسلة
						</button>
					</div>
					
				</section>


			</div>
		
		</div>

	</div>

	@include('frontend.layoutsFront.footer')
</section>



@endsection