@extends('layouts.app')

@section('title', 'News and Events')

@section('content')
<section class="section">
  <div class="section-container">
    <div class="section-header">
      <h2 class="section-title">News and Events</h2>
      <p class="section-subtitle">Latest updates, announcements, and events from the Department of Land Settlement.</p>
    </div>

    <div class="services-grid">
      @foreach ($newsItems as $item)
        <article class="service-card">
          <div class="service-icon-box">
            <i class="fas fa-newspaper"></i>
          </div>
          <h3>{{ $item['title'] }}</h3>
          <p style="font-size:0.8rem; color:var(--text-muted); margin-bottom:0.75rem;">{{ $item['date'] }}</p>
          <p>{{ $item['summary'] }}</p>
        </article>
      @endforeach
    </div>
  </div>
</section>
@endsection
