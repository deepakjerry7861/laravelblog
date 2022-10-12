@extends('layout/app')
@section('title', ' Posts')
@section('content')
<!--search overlay start-->
<div class="search-wrap">
    <div class="overlay">
        <form action="#" class="search-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-9">
                        <input type="text" class="form-control" placeholder="Search..."/>
                    </div>
                    <div class="col-md-2 col-3 text-right">
                        <div class="search_toggle toggle-wrap d-inline-block">
                            <i class="ti-close"></i>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!--search overlay end-->

<section class="single-block-wrapper section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="sidebar sidebar-right">
					<div class="sidebar-wrap mt-5 mt-lg-0">
	@foreach($post as $slugdata)
	<div class="sidebar-widget about mb-5 text-center p-3">
		<div class="about-author">
			<img src="{{url('assets/forntend')}}/images/author.jpg" alt="" class="img-fluid">
		</div>
		<h4 class="mb-0 mt-4">By {{'user_types'}}</h4>
		<p>Travel Blogger</p>
		<p>I'm Liam, last year I decided to quit my job and travel the world. You can follow my journey on this blog!</p>
		<img src="{{url('assets/forntend')}}/images/liammason.png" alt="" class="img-fluid">
	</div>
	@endforeach

	<div class="sidebar-widget follow mb-5 text-center">
		<h4 class="text-center widget-title">Follow Me</h4>
		<div class="follow-socials">
			<a href="#"><i class="ti-facebook"></i></a>
			<a href="#" ><i class="ti-twitter"></i></a>
			<a href="#" ><i class="ti-instagram"></i></a>
			<a href="#"><i class="ti-youtube"></i></a>
			<a href="#"><i class="ti-pinterest"></i></a>
		</div>
	</div>

	<div class="sidebar-widget mb-5 ">
		<h4 class="text-center widget-title">Trending Posts</h4>

		<div class="sidebar-post-item-big">
			<a href="blog-single.html"><img src="{{url('assets/forntend')}}/images/news/img-1.jpg" alt="" class="img-fluid"></a>
			<div class="mt-3 media-body">
            	<span class="text-muted letter-spacing text-uppercase font-sm">September 10, 2019</span>
				<h4 ><a href="blog-single.html">Meeting With Clarissa, Founder Of Purple Conversation App</a></h4>
			</div>
		</div>

        <div class="media border-bottom py-3 sidebar-post-item">
            <a href="#"><img class="mr-4" src="{{url('assets/forntend')}}/images/news/thumb-1.jpg" alt=""></a>
            <div class="media-body">
            	<span class="text-muted letter-spacing text-uppercase font-sm">September 10, 2019</span>
                <h4 ><a href="blog-single.html">Thoughtful living in los Angeles</a></h4>
            </div>
        </div>

        <div class="media py-3 sidebar-post-item">
            <a href="#"><img class="mr-4" src="{{url('assets/forntend')}}/images/news/thumb-2.jpg" alt=""></a>
           <div class="media-body">
           		<span class="text-muted letter-spacing text-uppercase font-sm">September 10, 2019</span>
                <h4 ><a href="blog-single.html">Vivamus molestie gravida turpis.</a></h4>
            </div>
        </div>
	</div>
	

	<div class="sidebar-widget category mb-5">
		<h4 class="text-center widget-title">Catgeories</h4>
	 	<ul class="list-unstyled">
		  <li class="align-items-center d-flex justify-content-between">
		    <a href="#">Hollywood</a>
		    <span>@php echo $hollywood;@endphp</span>
		  </li>
		  <li class="align-items-center d-flex justify-content-between">
		    <a href="#">Bollywood</a>
		    <span>@php echo $bollywood;@endphp</span>
		  </li>
		  <li class="align-items-center d-flex justify-content-between">
		    <a href="#">Tranding</a>
		    <span>@php echo $tranding;@endphp</span>
		  </li>
		  <li class="align-items-center d-flex justify-content-between">
		    <a href="#">Job</a>
		    <span>@php echo $job;@endphp</span>
		  </li>
		</ul>
	</div>
	
	<div class="sidebar-widget subscribe mb-5">
		<h4 class="text-center widget-title">Newsletter</h4>
		<input type="text" class="form-control" placeholder="Email Address">
		<a href="#" class="btn btn-primary d-block mt-3">Sign Up</a>
	</div>

	<div class="sidebar-widget sidebar-adv mb-5">
		<a href="#"><img src="{{url('assets/forntend')}}/images/sidebar-banner3.png" alt="" class="img-fluid w-100"></a>
	</div>

</div>
				</div>
			</div>
			

			<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
				<div class="single-post">
					@foreach($post as $slugdata)

					
    <div class="post-header mb-5 text-center">
        <div class="meta-cat">
            <a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1" href="#">Health ,</a>
            <a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1"  href="#">lifestyle</a>
        </div>
        <h2 class="post-title mt-2">
            {{$slugdata->blogtitle}}
        </h2>

        <div class="post-meta">
            <span class="text-uppercase font-sm letter-spacing-1 mr-3">by {{$slugdata->user_type}}</span>
            <span class="text-uppercase font-sm letter-spacing-1">Date {{ date("d/M/Y", strtotime($slugdata->created_at)) }} </span>
        </div>
        <div class="post-featured-image mt-5">
            <img src="/featuredimage/{{ $slugdata->featuredimage }}" class="img-fluid w-100" alt="featured-image">
        </div>
    </div>
    <div class="post-body">
        <div class="entry-content">
            <p> {!!$slugdata->description  !!}</p>
          

          


        </div>
        
        <div class="post-tags py-4">
            <a href="#">#Health</a>
            <a href="#">#Game</a>
            <a href="#">#Tour</a>
        </div>
            

        <div class="tags-share-box center-box d-flex text-center justify-content-between border-top border-bottom py-3">

            <span class="single-comment-o"><i class="fa fa-comment-o"></i>0 comment</span>

            <div class="post-share">
                <span class="count-number-like">2</span>
                <a class="penci-post-like single-like-button"><i class="ti-heart"></i></a>                    
            </div>

            <div class="list-posts-share">
           <a target="_blank" href="http://twitter.com/share?text=

           {{$slugdata->blogtitle }} ?>&url= {{$slugdata->slug }}">
           	<img src="images/social/2.png" alt=""> Twitter</a>

                <a target="_blank" rel="nofollow" href=""><i class="ti-facebook"></i></a>
                <a target="_blank" rel="nofollow" href="http://twitter.com/share?text=
				{{$slugdata->blogtitle }} ?>&url= {{$slugdata->slug }}"><i class="ti-twitter"></i></a>
                <a target="_blank" rel="nofollow" href="#"><i class="ti-pinterest"></i></a>
      <a target="_blank" rel="nofollow" href="https://www.linkedin.com/sharing/share-offsite/?{{$slugdata->slug}} "><img src="images/social/1.png" alt=""> </a><i class="ti-linkedin"></i></a>
            </div>
        </div>
    </div>
    @endforeach
</div>
				
				<div class="post-author d-flex my-5">
	<div class="author-img">
		<img alt="" src="{{url('assets/forntend')}}/images/author.jpg" class="avatar avatar-100 photo" width="100" height="100">	
	</div>

	<div class="author-content pl-4">
		<h4 class="mb-3"><a href="#" title="" rel="author" class="text-capitalize">Themefisher</a></h4>
		<p>Hey there. My name is Liam. I was born with the love for traveling. I also love taking photos with my phone in order to capture moment..</p>
		
		<a target="_blank" class="author-social" href="#"><i class="ti-facebook"></i></a>
		<a target="_blank" class="author-social" href="#"><i class="ti-twitter"></i></a>
		<a target="_blank" class="author-social" href="#"><i class="ti-google-plus"></i></a>
		<a target="_blank" class="author-social" href="#"><i class="ti-instagram"></i></a>
		<a target="_blank" class="author-social" href="#"><i class="ti-pinterest"></i></a>
		<a target="_blank" class="author-social" href="#"><i class="ti-tumblr"></i></a>
	</div>
</div>
				<nav class="post-pagination clearfix border-top border-bottom py-4">
    <div class="prev-post">
        <a href="blog-single.html">
            <span class="text-uppercase font-sm letter-spacing">Next</span>
            <h4 class="mt-3"> Intel’s new smart glasses actually look good</h4>
        </a>
    </div>
    <div class="next-post">
        <a href="blog-single.html">
            <span class="text-uppercase font-sm letter-spacing">Previous</span>
            <h4 class="mt-3">Free Two-Hour Delivery From Whole Foods</h4>
        </a>
    </div>
</nav>
	{{-- 
	@foreach($postulike as $samlike)
@php
print_r($samlike); @endphp

	@endforeach --}}
	<div class="related-posts-block mt-5">
    <h3 class="news-title mb-4 text-center">
       You May Also Like
    </h3>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="post-block-wrapper mb-4 mb-lg-0">
                <a href="blog-single.html">
                    <img class="img-fluid" src="{{url('assets/forntend')}}/images/fashion/img-1.jpg" alt="post-thumbnail"/>
                </a>
                <div class="post-content mt-3">
                    <h5 >
                        <a href="blog-single.html">Intel’s new smart glasses actually look good</a>
                    </h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="post-block-wrapper mb-4 mb-lg-0">
                <a href="blog-single.html">
                    <img class="img-fluid" src="{{url('assets/forntend')}}/images/fashion/img-2.jpg" alt="post-thumbnail"/>
                </a>
                <div class="post-content mt-3">
                    <h5 >
                        <a href="blog-single.html">Free Two-Hour Delivery From Whole Foods</a>
                    </h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="post-block-wrapper">
                <a href="blog-single.html">
                    <img class="img-fluid" src="{{url('assets/forntend')}}/images/fashion/img-3.jpg" alt="post-thumbnail"/>
                </a>
                <div class="post-content mt-3">
                    <h5 >
                        <a href="blog-single.html">Snow and Freezing Rain in Paris Forces the</a>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</div>

					<div class="comment-area my-5">
		<h3 class="mb-4 text-center">2 Comments</h3>
		<div class="comment-area-box media">
			<img alt="" src="{{url('assets/forntend')}}/images/blog-user-2.jpg" class="img-fluid float-left mr-3 mt-2">

			<div class="media-body ml-4">
				<h4 class="mb-0">Micle harison </h4>
				<span class="date-comm font-sm text-capitalize text-color"><i class="ti-time mr-2"></i>June 7, 2019 </span>

				<div class="comment-content mt-3">
					<p>Lorem ipsum dolor sit amet, usu ut perfecto postulant deterruisset, libris causae volutpat at est, ius id modus laoreet urbanitas. Mel ei delenit dolores.</p>
				</div>
				<div class="comment-meta mt-4 mt-lg-0 mt-md-0">
					<a href="#" class="text-underline ">Reply</a>
				</div>
			</div>
		</div>

		<div class="comment-area-box media mt-5">
			<img alt="" src="{{url('assets/forntend')}}/images/blog-user-3.jpg" class="mt-2 img-fluid float-left mr-3">

			<div class="media-body ml-4">
				<h4 class="mb-0 ">John Doe </h4>
				<span class="date-comm font-sm text-capitalize text-color"><i class="ti-time mr-2"></i>June 7, 2019 </span>

				<div class="comment-content mt-3">
					<p>Some consultants are employed indirectly by the client via a consultancy staffing company. </p>
				</div>
				<div class="comment-meta mt-4 mt-lg-0 mt-md-0">
					<a href="#" class="text-underline">Reply</a>
				</div>
			</div>
		</div>
	</div>

	<form class="comment-form mb-5 gray-bg p-5" id="comment-form">
		<h3 class="mb-4 text-center">Leave  a comment</h3>
		<div class="row">
			<div class="col-lg-12">
				<textarea class="form-control mb-3" name="comment" id="comment" cols="30" rows="5" placeholder="Comment"></textarea>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<input class="form-control" type="text" name="name" id="name" placeholder="Name:">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<input class="form-control" type="text" name="mail" id="mail" placeholder="Email:">
				</div>
			</div>
		</div>

		<input class="btn btn-primary" type="submit" name="submit-contact" id="submit_contact" value="Submit Message">
	</form>

			</div>




			
		</div>
	</div>
</section>


@endsection