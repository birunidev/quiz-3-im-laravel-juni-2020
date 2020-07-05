@extends('sbadmin.master')




@section('content')
<div class="row">
  <div class="col-md-12">
    <h1>{{$article->judul}}</h1>
    <a class="ml-4 d-inline-block float-right" href="/articles/{{$article->id}}">Hapus Artikel</a>
    <a class="mr-4 d-inline-block float-right" href="/articles/{{$article->id}}/edit">Edit Artikel</a>
    <div class="d-flex">
      <small class="mr-4 d-block">Tanggal diubah: {{$article->updated_at}}</small>
      <small>Tanggal dibuat: {{$article->created_at}}</small>
    </div>
    <div class="tag-post">
      <p>Tags</p>
      <div>
        @foreach($tagsArr as $tag)
          <div class="btn btn-success">{{$tag}}</div>
        @endforeach
      </div>
    </div>
    <p class="my-5">{{$article->isi}}</p>
  </div>
</div>

@endsection


@push('scripts')
<script src="{{asset('/js/single.js')}}"></script>
@endpush