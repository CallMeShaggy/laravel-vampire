@extends('layout')

@section('head')
    @parent
@stop

@section('nav')
    @parent
@stop

@section('content')
    <section class="full-screen">
        <div class="figure">
            <div class="hero-img-container">
            <div class="hero-gradient"></div>
               <div class="hero-img">
                    <a href="#about" class="btn-scroll-down scroll page-scroll"></a>
                </div>
            </div>
        </div>
    </section>

    <div class="author-content">
        @include('author')

        @include('books-and-blogs')
    </div>

    @include('footer')

    @include('modal')
@stop