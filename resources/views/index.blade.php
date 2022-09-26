@extends('layout/app')
@section('title', ' Personal Magazine')
@section('content')



<section class="slider mt-4">
	<div class="container-fluid">
		<div class="row no-gutters">
			<div class="col-lg-12 col-sm-12 col-md-12 slider-wrap">
	            @foreach ($post as $element)
	            <div class="slider-item">
	               <div class="slider-item-content">
						<div class="post-thumb mb-4">
							<a href="/blog/{{strtolower($element->category)}}/{{$element->slug}}">

								<img src="/featuredimage/{{ $element->featuredimage }}" alt="" class="img-fluid" >
							</a>
						</div>

						<div class="slider-post-content">
							<span class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">{{ $element->category }}</span>
						<h3 class="post-title mt-1">
						<a href="/blog/{{strtolower($element->category)}}/{{$element->slug}}">{{Str::limit($element->blogtitle,30)}}</a></h3>
						<span class=" text-muted  text-capitalize">{{ date("d/M/Y", strtotime($element->created_at)) }}</span>
						</div>
	               </div>
	            </div>
	            @endforeach
            </div>
            
		</div>
	</div>
</section>

<section class="section-padding">

	<div class="container">
		<div class="row">
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h1 class="text-center pb-4">Latest News #</h1>
				<div class="row">
			@foreach($postall as $allpost)		
	<div class="col-lg-3 col-md-6">
		<article class="post-grid mb-5">
	<a class="post-thumb mb-4 d-block" href="/blog/{{strtolower($allpost->category)}}/{{$allpost->slug}}">
				<img src="/featuredimage/{{ $allpost->featuredimage }}" alt="" class="img-fluid w-100">
			</a>
			<span class="cat-name text-color font-extra text-sm text-uppercase letter-spacing-1">{{$allpost->category}}</span>
			<h3 class="post-title mt-1"><a href="/blog/{{strtolower($allpost->category)}}/{{$allpost->slug}}">{{Str::limit($allpost->blogtitle,50)}}</a></h3>

			<span class="text-muted letter-spacing text-uppercase font-sm">Date {{ date("d/M/Y", strtotime($allpost->created_at)) }}</span>
			
		</article>
	</div>
	@endforeach
	</div>
			</div>
			
			<div class="m-auto">
				<div class="pagination mt-5 pt-4">
					<ul class="list-inline ">
						<li class="list-inline-item"><a href="#" class="active">1</a></li>
						<li class="list-inline-item"><a href="#">2</a></li>
						<li class="list-inline-item"><a href="#">3</a></li>
						<li class="list-inline-item"><a href="#" class="prev-posts"><i class="ti-arrow-right"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection