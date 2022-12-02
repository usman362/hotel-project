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

    @include('frontend.partials.reviews')
</main>

@endsection
