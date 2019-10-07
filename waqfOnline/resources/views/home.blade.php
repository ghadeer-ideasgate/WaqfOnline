@extends('layouts.index')
@section('content')

<section id="articles">
        <div class="container">
            <div class="row">
                <div class="articles col-md-12">
                    <h3 class="sectionTitle d-flex justify-content-center">مقالات الوقف</h3>
                </div>
            </div>
            <div class="categoreis">
                <div class="row mt-4">

                    @foreach ($categories as $category)
                        <div class="glyph col-md-3">
                            <a href="{{route('category.articles',$category->id)}}" target="_blank">
                                <figure>
                                    <img src="{{$category->image}}" class="img-fluid" />
                                </figure>
                                <div class="class-name">
                                    <h5> {{$category->name}}</h5>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
    </section>

<!-- Most Viewed Section -->
    <section id="most-viewed">
        <div class="container">
            <div class="row">
                <div class="mostviewedtitle col-md-12 my-5">
                    <h3 class="sectionTitle d-flex justify-content-center">الأكثر مشاهدة</h3>
                </div>
            </div>
            <div class="row">
                @foreach ($most_viewed_articles as $article)
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="grid">
                            <figure class="effect-oscar">
                                <img class="img-fluid" src="{{$article->location}}" alt= "{{$article->title}}">
                                <figcaption>
                                    <p class="icon-links">
                                        <a href=""><span class="icon-eye"><i class="fas fa-eye"></i></span> {{$article->no_of_views}}</a>
                                        <a href="{{$article->url}}"><span class="icon-paper-clip"><i
                                                    class="fas fa-book-reader"></i></span>قراءة/تحميل</a>
                                    </p>
                                    <p class="description">{{$article->description}}</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </section>


@endsection