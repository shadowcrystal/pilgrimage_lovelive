@extends('layout')

@section('styles')
  <link rel="stylesheet" href="/css/home/index.css">
@endsection

@section('content')
  <section class="indexWrap layoutContainer">
    <div class="indexContainar container">
      <div class="siteContainer">
        <a href="#" class="site">
          <div class="imgWrap">
            <img src="/storage/sites/{{ $site->image }}" alt="sample">
          </div>
          <p>{{ $site->name }}</p>
        </a>
      </div>
    </div>
  </section>
@endsection
