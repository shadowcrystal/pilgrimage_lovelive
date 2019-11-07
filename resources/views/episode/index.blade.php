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
        @foreach($episodes as $episode)
          <a href="{{ route('episode.select',['group_id' => $group->id,'episode_id' => $episode->id] )}}" class="site">
            <div class="imgWrap">
              <img src="/storage/episodes/{{ $episode->image }}" alt="sample">
            </div>
            <p>{{ $episode->name }}</p>
          </a>
        @endforeach
      </div>
    </div>
  </section>
@endsection
