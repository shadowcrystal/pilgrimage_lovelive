@extends('layout')

@section('styles')
  <link rel="stylesheet" href="/css/home/index.css">
@endsection

@section('content')
  <section class="indexWrap layoutContainer">
    <div class="indexContainar container">
      <div class="siteContainer">
        <div class="heading">
          <h3>エピソード選択</h3>
        </div>
        <a href="{{ route('group.site',['name' => 'lovelive_sunshine','id' => 1] )}}" class="site">
          <div class="imgWrap">
            <img src="/storage/sites/sample.jpg" alt="sample">
          </div>
          <p>びゅうお</p>
        </a>
        <a href="#" class="site">
          <div class="imgWrap">
            <img src="/storage/sites/sample.jpg" alt="sample">
          </div>
          <p>びゅうお</p>
        </a>
        <a href="#" class="site">
          <div class="imgWrap">
            <img src="/storage/sites/sample.jpg" alt="sample">
          </div>
          <p>びゅうお</p>
        </a>
      </div>
    </div>
  </section>
@endsection
