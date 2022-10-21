@section('title','Blogs')
@extends('frontend.layouts.app')
@section('content')

<main>
    <div class="main-banner position-relative">
        <img src="./assets/images/blog-banner.jpg" alt="" />
        <div class="banner-heading">
            <h1>Blogs</h1>
        </div>
    </div>

    <div class="blogs-section p-5">
        <div class="row m-0">
         @foreach ($blogs as $blog)

            <div class="col-4">
                <div class="blog-card mb-5 rounded shadow bg-white section-border">
                    <div class="blog-image position-relative w-100">
                        <img src="{{asset($blog->blog_image->file_name)}}" alt="" class="w-100" />
                        <div class="blog-date">
                            <h5 class="primarycolor">{{\Carbon\Carbon::parse($blog->created_at)->format('d')}}</h5>
                            <h5 class="text-white">{{\Carbon\Carbon::parse($blog->created_at)->format('M, Y')}}</h5>
                        </div>
                    </div>
                    <div class="blog-summary p-4">
                        <div class="blog-tags mb-4">
                            @foreach (json_decode($blog->tags) as $tag)


                       <span>{{$tag}}</span>
                       @endforeach
                        </div>
                        <h5 class="lh-base fw-bold mb-4">{{$blog->title}}</h5>
                        <small class="d-block mb-4">
                            {{Str::limit(strip_tags($blog->content),50)}}
                        </small>

                        <button><a href="{{route('blog.detail',$blog->url_slug)}}">Read more</a></button>
                    </div>
                </div>
            </div>

         @endforeach
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
                {{$blogs->links()}}
            </ul>
        </nav>
    </div>

    <div class="subscribtion-section p-5">
        <p>Don’t wait any longer. Contact Us</p>
        <div class="d-flex justify-content-between">
            <div class="d-flex align-items-end">
                <img src="./assets/images/phone-icon-blue.png" alt="" />
                <h5>+1800-333 578 </h5>
            </div>
            <div class="d-flex  align-items-end">
                <img src="./assets/images/mail-icon-blue.png" alt="" />
                <h5>info@himalayanleisure.com</h5>
            </div>
            <div class="d-flex  align-items-center">
                <input type="text" />
                <button>SUBSCRIBE</button>
            </div>
        </div>
    </div>
    <div class="reviews-section position-relative">
        <div class="reviews">
            <div class="review">
                <div class="review-image">
                    <img src="./assets/images/rev-1.jpg" alt="" />
                </div>
                <div class="review-text">
                    <p>"Great things are done when men and mountains are meet"</p>
                    <h5>- Willam Koinas</h5>
                </div>
            </div>
            <div class="review">
                <div class="review-image">
                    <img src="./assets/images/rev-2.jpg" alt="" />
                </div>
                <div class="review-text">
                    <p>"Great things are done when men and mountains are meet"</p>
                    <h5>- Willam Koinas</h5>
                </div>
            </div>
            <div class="review">
                <div class="review-image">
                    <img src="./assets/images/rev-3.jpg" alt="" />
                </div>
                <div class="review-text">
                    <p>"Great things are done when men and mountains are meet"</p>
                    <h5>- Willam Koinas</h5>
                </div>
            </div>
        </div>
        <img src="./assets/images/review-banner.jpg" alt="" class="w-100" />
    </div>
</main>

@endsection
