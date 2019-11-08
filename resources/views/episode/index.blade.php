@extends('layout')
<<<<<<< HEAD
<!--
@section('styles')
@endsection('styles')
-->
@section('content')
<section class="indexWrap layoutContainer">
  <div class="indexContainar container">
    <div class="selectContainer">
      <div class="heading">
        <h3>エピソード選択</h3>
      </div>
      <div class="1cool">
        <h3>1期</h3>
        <a href="{{ route('episode.select',['name'=>'lovelive_sunshine','eid'=>28])}}">
          <p style="color:black;">1話</p>
        </a>
        <a href="{{ route('episode.select',['name'=>'lovelive_sunshine','eid'=>29])}}">
          <p style="color:black;">2話</p>
        </a>
        <a href="{{ route('episode.select',['name'=>'lovelive_sunshine','eid'=>30])}}">
          <p style="color:black;">3話</p>
        </a>
        <a href="{{ route('episode.select',['name'=>'lovelive_sunshine','eid'=>31])}}">
          <p style="color:black;">4話</p>
        </a>
        <a href="{{ route('episode.select',['name'=>'lovelive_sunshine','eid'=>32])}}">
          <p style="color:black;">5話</p>
        </a>
        <a href="{{ route('episode.select',['name'=>'lovelive_sunshine','eid'=>33])}}">
          <p style="color:black;">6話</p>
        </a>
        <a href="{{ route('episode.select',['name'=>'lovelive_sunshine','eid'=>34])}}">
          <p style="color:black;">7話</p>
        </a>
        <a href="{{ route('episode.select',['name'=>'lovelive_sunshine','eid'=>35])}}">
          <p style="color:black;">8話</p>
        </a>
        <a href="{{ route('episode.select',['name'=>'lovelive_sunshine','eid'=>36])}}">
          <p style="color:black;">9話</p>
        </a>
        <a href="{{ route('episode.select',['name'=>'lovelive_sunshine','eid'=>37])}}">
          <p style="color:black;">10話</p>
        </a>
        <a href="{{ route('episode.select',['name'=>'lovelive_sunshine','eid'=>38])}}">
          <p style="color:black;">11話</p>
        </a>
        <a href="{{ route('episode.select',['name'=>'lovelive_sunshine','eid'=>39])}}">
          <p style="color:black;">12話</p>
        </a>
        <a href="{{ route('episode.select',['name'=>'lovelive_sunshine','eid'=>40])}}">
          <p style="color:black;">13話</p>
        </a>
      </div>
      <div class="2cool">
        <h3>2期</h3>
        <a href="{{ route('episode.select',['name'=>'lovelive_sunshine','eid'=>41])}}">
          <p style="color:black;">1話</p>
        </a>
        <a href="{{ route('episode.select',['name'=>'lovelive_sunshine','eid'=>42])}}">
          <p style="color:black;">2話</p>
        </a>
        <a href="{{ route('episode.select',['name'=>'lovelive_sunshine','eid'=>43])}}">
          <p style="color:black;">3話</p>
        </a>
      </div>
      <div class="theater">
        <h3>劇場版</h3>
        <a href="{{ route('episode.select',['name'=>'lovelive_sunshine','eid'=>54])}}">
          <p style="color:black;">劇場版</p>
        </a>
      </div>
      <div class="siteContainer">

      </div>
    </div>
  </div>
</section>
=======

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
>>>>>>> 447a6e4670997e320f58e52373559da774fb203a
@endsection
