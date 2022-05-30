<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- CDN Library -->
        <!-- 
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        -->

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/fonts.google.css') }}">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        
        <!-- FontAwesome -->
        <!-- <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}"> -->
        <!-- Locally using fontawesome is more complex than CDN. So CDN is far better -->
        <!-- FontAwesome CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Toastr Css -->
        <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            
            <!-- Page Content -->
            
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                        <list class="list-group-item mt-4">
                               <a href="/dashboard" style="font-size:20.1px; width:100%" class="btn btn-outline-primary">Home</a>
                            </list>

                            <list class="list-group-item mt-4">
                                <a href="{{ route('categories') }}" style="font-size:20.1px; width:100%" class="btn btn-outline-primary">Categories</a>
                            </list>

                            <list class="list-group-item mt-4">
                                <a href="{{ route('tags') }}" style="font-size:20.1px; width:100%" class="btn btn-outline-primary">Tags</a>
                            </list>

                            <list class="list-group-item mt-4">
                                <a href="{{ route('tag.create') }}" style="font-size:20.1px; width:100%" class="btn btn-outline-primary">Create new tag</a>
                            </list>

                            <list class="list-group-item mt-4">
                                <a href="{{ route('posts') }}" style="font-size:20.1px; width:100%" class="btn btn-outline-primary">All Post</a> 
                            </list>

                            <list class="list-group-item mt-4">
                                <a href="{{ route('posts.trashed') }}" style="font-size:20.1px; width:100%" class="btn btn-outline-primary">All Trashed Post</a> 
                            </list>


                            <list class="list-group-item mt-4">
                               <a href="{{ route('category.create') }}" style="font-size:20.1px; width:100%" class="btn btn-outline-primary">Create new category</a>
                            </list>

                            <list class="list-group-item mt-4">
                               <a href="{{ route('post.create') }}" style="font-size:20.1px; width:100%" class="btn btn-outline-primary">Create new post</a>
                            </list>

                        </div>
                        <div class="col-lg-8">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
                               
            
        </div>

        <!-- 
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    
        -->
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/toastr.min.js') }}"></script>

        <script>
            @if(Session::has('success'))
                toastr.success("{{ Session::get('success') }}")
            @endif
            @if(Session::has('info'))
                toastr.info("{{ Session::get('info') }}")
            @endif
        </script>
    </body>
</html>


<!-- CDN can be unavailable thats why I am locally save them all. But CDN also work same as local -->