@extends('layout')

@section('styles')
  <link rel="stylesheet" href="/css/home/index.css">
@endsection

@section('content')
  <section class="indexWrap layoutContainer">
    <div class="indexContainar container">
      <div class="siteContainer">
        <div class="heading">
          <h3>{{ $group->name }}</h3>
        </div>
        @foreach($sites as $site)
          <a href="{{ route('home.site',['id' => $site->id] )}}" class="site">
            <div class="imgWrap">
              <img src="/storage/sites/{{ $site->image }}" alt="sample">
            </div>
            <p>{{ $site->name }}</p>
          </a>
        @endforeach
      </div>
    </div>
  </section>
@endsection
