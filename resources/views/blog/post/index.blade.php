@extends('layouts.frontend.main')


@section('content')
<div class="page-content" style="min-height: 44px;">
	<div class="holder breadcrumbs-wrap mt-0">
	<div class="container">
		<ul class="breadcrumbs">
			<li><a href="index.html">Home</a></li>
			<li><span>بلاگ</span></li>
		</ul>
	</div>
</div>
	<div class="holder">
	<div class="container">
		<div class="page-title text-center">
			<h1>بلاگ</h1>
		</div>
		<div class="row">
			<div class="col-md-14 aside aside--content">
				<div class="post-prws-listing">
					@foreach ($posts as $post)
						
					<div class="post-prw">
	<div class="row vert-margin-middle">
		<div class="post-prw-img col-md-7">
			<a href="{{ route('blog.show',$post->id) }}">
				<img src="{{ $post->image ? '/' . $post->image->url : '/storage/images/laravel.jfif' }}" data-src="images/blog/blog-01.webp" class="fade-up lazyloaded" alt="">
			</a>
		</div>
		<div class="post-prw-text col-md-11">
			<div class="post-prw-links">
				<div class="post-prw-date"><i class="fa fa-calendar" aria-hidden="true"></i>{{ \Morilog\Jalali\Jalalian::fromCarbon($post->created_at)->format('Y/m/d') }}</div>
				<div class="post-prw-date"><i class="fa fa-commenting" aria-hidden="true"></i>5 comments</div>
			</div>
			<h4 class="post-prw-title"><a href="{{ route('blog.show',$post->id) }}">{{ $post->title }}</a></h4>
			<div class="post-prw-teaser">{{ $post->description }} </div>
			<div class="post-prw-btn">
				<a href="{{ route('blog.show',$post->id) }}" class="btn btn--sm">ادامه مطلب</a>
			</div>
		</div>
	</div>
</div>
@endforeach
</div>
				{{ $posts->links() }}
			</div>
			<div class="col-md-4 aside aside--sidebar aside--right">
				<div class="aside-content">
					<div class="aside-block">
	<h2 class="text-uppercase">Popular Tags</h2>
	<ul class="tags-list">
		<li><a href="#">jeans</a></li>
		<li><a href="#">hand bags</a></li>
		<li><a href="#">gift card</a></li>
		<li><a href="#">goodwin</a></li>
		<li><a href="#">seiko</a></li>
		<li><a href="#">banita</a></li>
		<li><a href="#">foxic</a></li>
	</ul>
</div>
<div class="aside-block">
	<h2 class="text-uppercase">Popular Posts</h2>
	<div class="post-prw-simple-sm">
	<a href="blog-post.html" class="post-prw-img">
		<img src="images/blog/blog-05.webp" data-src="images/blog/blog-05.webp" class="fade-up lazyloaded" alt="">
	</a>
	<div class="post-prw-links">
		<div class="post-prw-date"><i class="fa fa-calendar" aria-hidden="true"></i>August 27, 2020</div>
		<a href="#" class="post-prw-author">by Jon Cock</a>
	</div>
	<h4 class="post-prw-title"><a href="#">FOXic shopify theme</a></h4>
	<a href="#" class="post-prw-comments"><i class="fa fa-commenting" aria-hidden="true"></i>15 comments</a>
</div>
</div>
<div class="aside-block">
	<h2 class="text-uppercase">Meta</h2>
	<ul class="list list--nomarker">
		<li><a href="#">Log in</a></li>
		<li><a href="#">Entries RSS</a></li>
		<li><a href="#">Comments RSS</a></li>
	</ul>
</div>
<div class="aside-block">
	<h2 class="text-uppercase">Archives</h2>
	<ul class="list list--nomarker">
		<li><a href="#">January 2018</a></li>
		<li><a href="#">February 2018</a></li>
		<li><a href="#">March 2018</a></li>
	</ul>
</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection