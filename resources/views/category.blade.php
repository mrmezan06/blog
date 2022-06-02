@extends('layouts.frontend')

@section('content')
<div class="stunning-header stunning-header-bg-lightviolet">
    <div class="stunning-header-content">
        <h1 class="stunning-header-title">Category: {{ $title }}</h1>
    </div>
</div>
<div class="container">
    <div class="row medium-padding120">
        <main class="main">
            
            <div class="row">
                        <div class="case-item-wrap">
                            @foreach($category->posts as $post)
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="case-item">
                                        <div class="case-item__thumb">
                                            <img src="{{ asset($post->featured) }}" alt="{{ $post->category->name }}">
                                        </div>
                                        <a href="{{ route('post.single', [ 'slug' => $post->slug ]) }}"><h6 class="case-item__title">{{ $post->title }}</h6></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
            </div>

        </main>
    </div>
</div>
@endsection