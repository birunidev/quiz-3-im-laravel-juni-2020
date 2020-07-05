@extends('sbadmin.master')

@section('content')

<div class="row">
  <div class="col-md-12">
    <h1>Semua artikel</h1> 
  </div>
  <div class="col-md-12">
  <div class="row">

    @if(count($articles) === 0)
      <div class="col-md-6 my-5">
        <h3>Tidak ada artikel</h3>
        <a href="/articles/create">Tambah artikel baru</a>
      </div>
    @endif
  
    @foreach($articles as $key => $article)
    <div class="col-md-6 col-xl-3">
      <div class="card">
        <img src="https://source.unsplash.com/random" class="card-img-top img-fluid" alt="...">
        <div class="card-body">
          <h5 class="card-title font-weight-bold">{{$article->judul}}</h5>
          <p style="height: 100px;
  overflow: hidden;
  text-overflow: ellipsis;" class="card-text" id="isi-artikel">{{$article->isi}}</p>
          <a href="/articles/{{$article->slug}}" class="btn btn-primary">Baca Selengkapnya</a>
        </div>
      </div>
    @endforeach
  </div>
    
  </div>
  </div>
</div>




@endsection


@push('scripts')

<script src="{{asset('/js/articles.js')}}"></script>

@endpush