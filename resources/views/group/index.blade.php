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
        @foreach($characters as $character)
          <a href="{{ route('character.select',['group_id' => $group->id , 'character_id' => $character->id]) }}" class="selectContent sunshine">
            <p class="fontEn">{{ $character->name }}</p>
          </a>
        @endforeach
        <!-- episodeを入れます -->
        @foreach($sites as $site)
          <a href="{{ route('home.site',['id' => $site->id] )}}" class="site">
            <div class="imgWrap">
              <img src="/storage/sites/{{ $site->episode_id }}/{{ $site->anime_image }}" alt="{{ $site->name }}">
            </div>
            <p>{{ $site->name }}</p>
          </a>
        @endforeach
      </div>
    </div>
  </section>
@endsection
