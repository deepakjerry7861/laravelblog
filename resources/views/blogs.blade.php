@extends('layout/app')
@section('title', ' Blogs')
@section('content')
<div class="container">
<h1 class="text-center pt-5">	All Blogs Posts</h1>
<section class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="row">
		@foreach ($postall as $post)
	<div class="col-lg-3 col-md-6">
		<article class="post-grid mb-5">
			<a class="post-thumb mb-4 d-block" href="/blog/{{strtolower($post->category)}}/{{$post->slug}}">
				<img src="/featuredimage/{{ $post->featuredimage }}" alt="" class="img-fluid w-100">
			</a>
			<span class="cat-name text-color font-extra text-sm text-uppercase letter-spacing-1">{{$post->category}}</span>
			<h3 class="post-title mt-1"><a href="/blog/{{strtolower($post->category)}}/{{$post->slug}}">{{$post->blogtitle}}</a></h3>

			<span class="text-muted letter-spacing text-uppercase font-sm">Date {{ date("d/M/Y", strtotime($post->created_at)) }} </span>
			
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

</div>

@endsection	
