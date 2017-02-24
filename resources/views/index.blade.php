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
            <div class="hero-overlay"></div>
               <div class="hero-img">
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