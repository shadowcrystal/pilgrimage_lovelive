@extends('layout')

@section('styles')
  <link rel="stylesheet" href="/css/home/index.css">
@endsection

@section('content')
  <section class="indexWrap layoutContainer">
    <div class="indexContainar container">
      <div class="selectContainer">
        <div class="heading">
          <h3>シリーズ選択</h3>
        </div>
        <a href="#" class="selectContent lovelive">
          <p class="fontEn">μ’s</p>
        </a>
        <a href="#" class="selectContent sunshine">
          <p class="fontEn">Aqours</p>
        </a>
      </div>
      <div class="siteContainer">
        <div class="heading">
          <h3>聖地選択</h3>
        </div>
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
