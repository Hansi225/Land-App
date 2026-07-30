@extends('layouts.app')

@section('title', 'News and Events | Department of Land Settlement')
@section('description', 'Latest news, notices, and events from the Department of Land Settlement.')

@section('content')
    <section class="section" id="news">
        <div class="section-container">
            <div class="section-header">
                <span class="section-tag">News and Events</span>
                <h2 class="section-title">Latest Updates</h2>
                <p class="section-subtitle">Stay informed about notices, public events, and department announcements.</p>
            </div>

            <div class="services-grid">
                @foreach ($newsItems as $item)
                    <div class="service-card">
                        <h3><a href="{{ route('news.show', $item['id']) }}">{{ $item['title'] }}</a></h3>
                        <p class="date" style="opacity:0.7; font-size:0.9rem;">{{ $item['date'] }}</p>
                        <p>{{ $item['summary'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection