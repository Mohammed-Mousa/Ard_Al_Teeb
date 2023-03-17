@extends('frontend.layoutsFront.app')


@section('title_and_css_files')
<title>
	أقوى معك
</title>
<link rel="stylesheet" href="{{URL::asset('frontend/css/perfume.css')}}">
@endsection

@section('js_files')
<script src="{{URL::asset('frontend/js/perfume.js')}}"></script>
@endsection



@section('content')
<div class="mt-65 product-details">

	<a href="/" class="arrow">
		<svg width="17" height="30" viewBox="0 0 17 30" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M0.585617 13.5858C-0.195432 14.3668 -0.195432 15.6332 0.585617 16.4142L13.3135 29.1421C14.0946 29.9232 15.3609 29.9232 16.142 29.1421C16.923 28.3611 16.923 27.0948 16.142 26.3137L4.82826 15L16.142 3.68629C16.923 2.90524 16.923 1.63891 16.142 0.857861C15.3609 0.076812 14.0946 0.076812 13.3135 0.857861L0.585617 13.5858ZM5.16211 13L1.99983 13L1.99983 17H5.16211L5.16211 13Z" fill="#EAEEF2"/>
			</svg>
			
	</a>



	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-6 col-xl-4 details">

				<h1>
					أقوى معك
				</h1>
				<p>
					<b>المكونات:</b>
					<span> أناناس - عنبر - يوسفي</span>
				</p>
				<p>
					<b> افتتاحية العطر:</b>
					<span> أناناس - يوسفي</span>
				</p>
				<p>
					<b> قلب العطر:</b>
					<span> مريمية</span>
				</p>
				<p>
					<b> قاعدة العطر:</b>
					<span> العنبر الحلو</span>
				</p>

				<p class="alert-g">
					إخلاء مسؤولية: يرجى قراءة قائمة المكونات على العبوة للتأكد من أن المكونات تلائم استخدامك الشخصي.
				</p>

			</div>

			<div class="col-12 col-md-6 col-xl-4 add-to-cart">
				<section class="contain">
					<div class="price">
						<span class="num me-1">200</span>
						<span class="currency">درهم إماراتي</span>
					</div>

					<form action="">

						<input class="d-none" id="number-of-prod" type="number" value="1" name="">
						<label class="label-cont">
							<span class="plus">+</span>
							<span class="n">1</span>
							<span class="minus">-</span>
						</label>

						<input type="submit" value="أضف للسلة">

					</form>
				</section>
			</div>

			<div class="col-12 col-md-6 col-xl-4 product-imgs">

				<div class="img-con">
					<img id='main-img' class="main-img" src="{{URL::asset('frontend/img/prod0.png')}}" alt="">
				</div>

				<div class="d-flex other-img">
					<figure>
						<img src="{{URL::asset('frontend/img/prod1.png')}}" alt="">
					</figure>
					<figure>
						<img src="{{URL::asset('frontend/img/prod2.png')}}" alt="">
					</figure>
					<figure>
						<img src="{{URL::asset('frontend/img/prod1.png')}}" alt="">
					</figure>

				</div>


			</div>
		</div>
	</div>

	<section class="related-products w-100">
		<div class="container-fluid">
			<h2>
				المنتجات ذات الصلة
			</h2>

			<div class="row row-of-products">
				<div class="col-12 col-sm-6 col-xl-3">


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
				<div class="col-12 col-sm-6 col-xl-3">


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
				<div class="col-12 col-sm-6 col-xl-3">


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
				<div class="col-12 col-sm-6 col-xl-3">


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


			</div>

		</div>

	</section>


	@include('frontend.layoutsFront.footer')


</div>


@endsection