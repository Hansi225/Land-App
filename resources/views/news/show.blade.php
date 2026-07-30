@extends('layouts.app')

@section('title', $newsItem['title'] . ' | Department of Land Settlement')

@section('content')
    <section class="section" id="news-detail">
        <div class="section-container">
            <span class="section-tag">News and Events</span>
            <h2 class="section-title">{{ $newsItem['title'] }}</h2>
            <p class="date" style="opacity:0.7;">{{ $newsItem['date'] }}</p>
            <p style="margin-top:1.5rem;">{{ $newsItem['body'] }}</p>

            <div style="margin-top: 2rem;">
                <a href="{{ route('news.index') }}" class="btn btn-primary">Back to News</a>
            </div>
        </div>
    </section>
@endsection