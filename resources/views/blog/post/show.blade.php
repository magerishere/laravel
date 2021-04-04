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
						<a href="#postComments" class="js-scroll-to"><i class="icon-chat"></i>{{ Redis::zScore('views',"post:$post->id:view") }} View(s)</a>

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
					<h3 class="h2-style">نظرات کاربران</h3>
					@foreach ($post->comments as $comment)
					<div class="post-comment">	
						<div class="row">
							<div class="col-auto">
								<div class="post-comment-author-img">
									<img src="{{ $comment->user->image ? '/' . $comment->user->image->url : '/storage/images/man-avatar.jfif' }}" alt="Image avatar" class="rounded-circle">
								</div>
							</div>
							@auth
								
							<div class="col">
								<div class="float-right">
									<a href="{{ route('comment.like',$comment->id) }}">
										<i class="{{ Redis::zScore('likes',"user:" . auth()->user()->id . ":comment:$comment->id") ? "fa fa-thumbs-up" : 'fa fa-thumbs-o-up' }}"  aria-hidden="true">
											{{  Redis::zScore('likes',"comment:$comment->id") ?: 0 }}
										</i> 
									</a>
									<a href="{{ route('comment.dislike',$comment->id) }}">
										
										<i class="{{ Redis::zScore('dislikes','user:' . auth()->user()->id . ":comment:$comment->id") ? 'fa fa-thumbs-down' : 'fa fa-thumbs-o-down' }}"  aria-hidden="true">
											{{ Redis::zScore('dislikes',"comment:$comment->id") ?: 0 }}
										</i>
									</a>
								</div>
								<div class="post-comment-date"><i class="icon-calendar"></i>{{ $comment->created_at }}</div>
								<div class="post-comment-author"><a href="#">{{ $comment->user->name }}</a></div>
								<div class="post-comment-text">
									<p>{{ $comment->body }}</p>
								</div>
								<a href="#replyComment" onclick="openReplyComment({{ $comment->id }},{{ json_encode($comment->user->name) }})"><i class="fa fa-reply" aria-hidden="true"></i></a>
							</div>
							@endauth
						</div>
					</div>
						@foreach ($comment->replies as $reply)
							
						<div class="post-comment ml-10">	
							<div class="row">
								<div class="col-auto">
									<div class="post-comment-author-img">
										<img src="{{ $reply->user->image ? '/' . $reply->user->image->url : '/storage/images/man-avatar.jfif' }}" alt="Image avatar" class="rounded-circle">
									</div>
								</div>
								<div class="col">
									<div class="float-right">
										<a href="{{ route('comment-reply.like',$reply->id) }}">
											<i class="{{ Redis::zScore('likes',"user:" . auth()->user()->id . ":comment-reply:$reply->id") ? "fa fa-thumbs-up" : 'fa fa-thumbs-o-up' }}"  aria-hidden="true">
												{{  Redis::zScore('likes',"comment-reply:$reply->id") ?: 0 }}
											</i> 
										</a>
										<a href="{{ route('comment-reply.dislike',$reply->id) }}">
											
											<i class="{{ Redis::zScore('dislikes','user:' . auth()->user()->id . ":comment-reply:$reply->id") ? 'fa fa-thumbs-down' : 'fa fa-thumbs-o-down' }}"  aria-hidden="true">
												{{ Redis::zScore('dislikes',"comment-reply:$reply->id") ?: 0 }}
											</i>
										</a>
									</div>
									<div class="post-comment-date"><i class="icon-calendar"></i>{{ $reply->created_at }}</div>
									<div class="post-comment-author"><a href="#">{{ $reply->name }}</a></div>
									<div class="post-comment-text">
										<p>{{ $reply->body }}</p>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					@endforeach

					
				</div>
				<div class="post-comment-form mt-3 mt-md-4" style="direction: rtl">
					@guest)
					<div class="row">
						<h3 class="col-md-8">برای نظر دادن وارد شوید!</h3>
						<a href="{{ route('user.login') }}" class="btn btn-primary">ورود</a>
					</div>
					@endguest
					
					@auth	
					@include('messages')
					<div id="replyComment" style="padding-top: 150px;margin-top:-150px;">
						
					</div>
					<div id="comment" style="padding-top: 150px;margin-top:-150px;">
						<h3 class="h2-style text-center">نظر شما در مورد این پست ...؟</h3>
						
						<form action="{{ route('comment.store') }}" class="comment-form" method="POST">
							@csrf
							<input type="hidden" name="post_id"  value="{{ $post->id }}" >
							<div class="form-group">
								<textarea class="form-control form-control--sm textarea--height-200" name="body" placeholder="نظر شما ..." required ></textarea>
							</div>
							<button class="btn float-right" type="submit">ارسال نظر</button>
						</form>
					</div>
					@endauth


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


@section('footer')
	<script>;
		const openReplyComment = (id,name) => {
			document.getElementById('comment').style.display = 'none';

			const form = `<h3 class="h2-style text-center">جواب شما به نظر کاربر ${name} ؟</h3>
						
						<form action="{{ route('comment-reply.store') }}" class="comment-form" method="POST">
							@csrf
							<input type="hidden" name="comment_id"  value="${id}" >
							<div class="form-group">
								<textarea class="form-control form-control--sm textarea--height-200" name="body" placeholder="جواب شما ..." required ></textarea>
							</div>
							<button class="btn float-right" type="submit">ارسال جواب</button>
							<button class="btn float-right bg-danger mr-2" onclick="closeReplyComment()">انصراف</button>
						</form>	`;
			document.getElementById('replyComment').innerHTML = form;

		}

		const closeReplyComment = () => {
			document.getElementById('comment').style.display = 'block';
			document.getElementById('replyComment').innerHTML = '';
		}
	</script>
@endsection