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
        @foreach($groups as $group)
          <a href="{{ route('group.index',['group_id' => $group->id]) }}" class="selectContent">
            <p class="fontEn">{{ $group->name }}</p>
          </a>
        @endforeach
        <a href="#" class="selectContent lovelive">
          <p class="fontEn">μ’s</p>
        </a>
        <a href="{{ route('group.index',['group_id' => $group->id])}}" class="selectContent sunshine">
          <p class="fontEn">Aqours</p>
        </a>
      </div>
      <div class="siteContainer">
        <div class="heading">
          <h3>聖地選択</h3>
        </div>
        @foreach($sites as $site)
          <a href="{{ route('home.site',['id' => $site->id ])}}" class="site">
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
