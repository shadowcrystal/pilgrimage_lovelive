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
          <a href="{{ route('group.site',['name' => $group->id,'id' => $character->id] )}}" class="site">
            <div class="imgWrap">
              <img src="/storage/characters/{{ $character->image }}" alt="sample">
            </div>
            <p>{{ $character->name }}</p>
          </a>
        @endforeach
      </div>
    </div>
  </section>
@endsection
