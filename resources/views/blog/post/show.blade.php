@extends('layouts.frontend.main')


@section('content')
<div class="page-content" style="min-height: 44px;">
	<div class="holder breadcrumbs-wrap mt-0">
	<div class="container">
		<ul class="breadcrumbs">
			<li><a href="index.html">Home</a></li>
			<li><span>مطلب بلاگ</span></li>
		</ul>
	</div>
</div>
	<div class="holder">
	<div class="container">
		<div class="page-title text-center">
			<h1>Blog Post</h1>
		</div>
		<div class="row">
			<div class="col-md-14 aside aside--content">
				<div class="post-full">
					<h2 class="post-title">{{ $post->title }}</h2>
					<div class="post-links">
						<div class="post-date"><i class="icon-calendar"></i>{{ \Morilog\Jalali\Jalalian::fromCarbon($post->created_at)->format('Y/m/d') }}</div>
						<a href="#" class="post-link">by John Smith</a>
						<a href="#postComments" class="js-scroll-to"><i class="icon-chat"></i>15 Comment(s)</a>
					</div>
					<div class="post-img image-container" style="padding-bottom: 54.44%">
						<img class="fade-up-fast lazyloaded" src="{{ $post->image ? '/' . $post->image->url : '/storage/images/laravel.jfif' }}" data-src="images/blog/blog-02.webp" alt="">
					</div>
					<div class="post-text">
						<p>{{ $post->description }}</p>
					</div>
					<div class="post-bot">
						<ul class="tags-list post-tags-list">
							<li><a href="#">Goodwin</a></li>
							<li><a href="#">Seiko</a></li>
							<li><a href="#">Banita</a></li>
							<li><a href="#">Bigsteps</a></li>
						</ul>
						<a href="#" class="post-share">
							<script src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d92f2937e44d337"></script>
							<div class="addthis_inline_share_toolbox"></div>
						</a>
					</div>
				</div>
			
				<div class="post-comments mt-3 mt-md-4" id="postComments">
					<h3 class="h2-style">Post Comments</h3>
					<div class="post-comment">
						<div class="row">
							<div class="col-auto">
								<div class="post-comment-author-img">
									<img src="images/blog/comment-author.webp" alt="" class="rounded-circle">
								</div>
							</div>
							<div class="col">
								<div class="post-comment-date"><i class="icon-calendar"></i>October 27, 2020</div>
								<div class="post-comment-author"><a href="#">Miles Black</a></div>
								<div class="post-comment-text">
									<p>Well how fantastic do I feel now. Awesome to say the least. The customer service was outstanding, being on the larger side I am very self conscious, your team of beautiful kind-hearted ladies made me feel very special. I actually found two wonderful outfits and couldn't be any happier.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="post-comment">
						<div class="row">
							<div class="col-auto">
								<div class="post-comment-author-img">
									<img src="images/blog/comment-author-2.webp" alt="" class="rounded-circle">
								</div>
							</div>
							<div class="col">
								<div class="post-comment-date"><i class="icon-calendar"></i>October 15, 2020</div>
								<div class="post-comment-author"><a href="#">Jenny Parker</a></div>
								<div class="post-comment-text">
									<p>Customer support has been excellent, as any small issues, minor bugs or even small requests have all been catered for in a quick, professional and timely manner.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="post-comment-form mt-3 mt-md-4">
					<h3 class="h2-style">Leave Your Comment</h3>
					<form action="#" class="comment-form">
						<div class="form-group">
							<div class="row vert-margin-middle">
								<div class="col-lg">
									<input type="text" name="name" class="form-control form-control--sm" placeholder="Name" required="">
								</div>
								<div class="col-lg">
									<input type="text" name="email" class="form-control form-control--sm" placeholder="Email" required="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<textarea class="form-control form-control--sm textarea--height-200" name="message" placeholder="Message" required=""></textarea>
						</div>
						<button class="btn" type="submit">Submit Comment</button>
					</form>
				</div>
			</div>
			<div class="col-md-4 aside aside--sidebar aside--right">
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
		<div class="post-prw-date"><i class="icon-calendar"></i>August 27, 2020</div>
		<a href="#" class="post-prw-author">by Jon Cock</a>
	</div>
	<h4 class="post-prw-title"><a href="#">FOXic shopify theme</a></h4>
	<a href="#" class="post-prw-comments"><i class="icon-chat"></i>15 comments</a>
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
@endsection