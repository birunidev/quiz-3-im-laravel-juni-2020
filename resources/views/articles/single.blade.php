@extends('sbadmin.master')




@section('content')
<div class="row">
  <div class="col-md-12">
    <h1>{{$article->judul}}</h1>
    <a class="float-right" href="/articles/{{$article->id}}/edit">Edit Artikel</a>
    <a class="float-right" href="/articles/{{$article->id}}">Hapus Artikel</a>

    <div class="d-flex">
      <small class="mr-4 d-block">Tanggal diubah: {{$article->updated_at}}</small>
      <small>Tanggal dibuat: {{$article->created_at}}</small>
    </div>
    <p>Tag : {{$article->tag}} </p>
    <p class="my-5">{{$article->isi}}</p>
  </div>
</div>

@endsection

