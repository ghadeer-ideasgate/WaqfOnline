@extends('layouts.index')
@section('content')

  <!-- Most Viewed Section -->
  <section id="most-viewed">
      <div class="inner-title">
           <div class="container"> 
            <div class="row">
              <div class="col-md-12">
                <div class="breadcrumbs-container">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
                      <li class="breadcrumb-item"><a href="#">مقالات الوقف</a></li>
                      <li class="breadcrumb-item active" aria-current="page">{{$category_name}}</li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div> 
        </div>
    <div class="container">
      <div class="row">
        <div class="mostviewedtitle col-md-12 my-5">
          <h3 class="sectionTitle d-flex justify-content-center">{{$category_name}}</h3>
        </div>
      </div>

      <div class="row">
        @foreach ($articles as $article)
          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="grid">
              <figure class="effect-oscar">
                <img class="img-fluid" src="{{$article->location}}" alt=" {{$article->title}} ">
                <figcaption>
                  <p class="icon-links">
                    <a href=""><span class="icon-eye"><i class="fas fa-eye"></i></span> {{$article->no_of_views}}</a>
                    <a href="{{$article->url}}" onclick=><span class="icon-paper-clip"><i class="fas fa-book-reader"></i></span>قراءة/تحميل</a>
                  </p>
                  <p class="description">{{$article->description}}</p>
                </figcaption>
              </figure>
            </div>
          </div>
        @endforeach
      </div>

    </div>

  </section>


<div id="paginationContainer">
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1"> <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">السابق</span></a>
          </li>
            {{$articles->links()}}
          <li class="page-item">
            <a class="page-link" href="#"> <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">التالى</span></a>
          </li>
        </ul>
      </nav>
</div>

@endsection