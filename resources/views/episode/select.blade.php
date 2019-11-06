@extends('layout')
@section('styles')
@endsection('styles')
@section('content')
<section class="indexWrap layoutContainer">
  <div class="indexContainar container">
    <div class="siteContainer">
      <div class="heading">
        @foreach($episodes as $episode)
        <a href="{{ route('episode.site',['name' => 'lovelive_sunshine','eid'=> $episode->eid,'id'=>1])}}" class="site">
          <p>{{$episode->eid}}</p>
          <div class="imgWrap">
            <img src="/storage/sites/sample.jpg" alt="sample">
          </div>
          <p>なんか</p>
        </a>
        @endforeach
      </div>
    </div>
  </div>
</section>
@endsection
