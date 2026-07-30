@extends('layouts.app')

@section('title', 'Media Gallery | Department of Land Settlement')
@section('description', 'Browse photos and videos from programs, awareness sessions, and events held by the Department of Land Settlement.')

@section('content')
    <section class="section" id="media-page">
        <div class="section-container">
            <div class="section-header">
                <span class="section-tag">Media Gallery</span>
                <h2 class="section-title">Photos and Videos from Programs & Events</h2>
                <p class="section-subtitle">A visual archive of outreach programs, settlement activities, public hearings, and department events.</p>
            </div>

            <div class="services-grid">
                @foreach ($events as $event)
                    <div class="service-card">
                        <div class="service-icon-box">
                            <i class="fas {{ $event['icon'] }}"></i>
                        </div>
                        <h3>{{ $event['title'] }}</h3>
                        <p>{{ $event['description'] }}</p>

                        <div style="display: flex; flex-wrap: wrap; gap: 0.75rem; margin-top: 1rem; font-size: 0.9rem; color: var(--text-muted);">
                            <span><strong>Date:</strong> {{ $event['date'] }}</span>
                            <span><strong>Location:</strong> {{ $event['location'] }}</span>
                            <span><strong>Media:</strong> {{ $event['mediaCount'] }}</span>
                        </div>

                        <div style="margin-top: 1rem; display: grid; gap: 0.75rem;">
                            <div style="border-radius: 1rem; overflow: hidden; min-height: 180px; background: linear-gradient(135deg, #0f2b48 0%, #1f6f8b 45%, #d49c3e 100%); display: flex; align-items: end; padding: 1rem; color: #fff; position: relative;">
                                <div style="position: absolute; inset: 0; background: rgba(15, 43, 72, 0.2);"></div>
                                <div style="position: relative; z-index: 1; display: flex; align-items: center; gap: 0.75rem;">
                                    <i class="fas fa-image" style="font-size: 1.4rem;"></i>
                                    <span>Sample photo preview</span>
                                </div>
                            </div>
                            <div style="border-radius: 1rem; overflow: hidden; min-height: 140px; background: linear-gradient(135deg, #111827 0%, #374151 50%, #0f766e 100%); display: flex; align-items: end; padding: 1rem; color: #fff; position: relative;">
                                <div style="position: absolute; inset: 0; background: rgba(0, 0, 0, 0.2);"></div>
                                <div style="position: relative; z-index: 1; display: flex; align-items: center; gap: 0.75rem;">
                                    <i class="fas fa-circle-play" style="font-size: 1.4rem;"></i>
                                    <span>Sample video preview</span>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="service-link" aria-label="Open media for {{ $event['title'] }}">
                            View Gallery <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                @endforeach
            </div>

            <div style="margin-top: 2.5rem; display: grid; gap: 1rem;">
                <div class="service-card" style="margin: 0;">
                    <h3>Media archive</h3>
                    <p>This page is designed as a single place to showcase photos and videos from official programs, field visits, public meetings, and events held by the department.</p>
                </div>

                <div class="service-card" style="margin: 0;">
                    <h3>Need to browse other services?</h3>
                    <p>Use the same navigation bar to move between home, news, downloads, and media pages without leaving the main site layout.</p>
                    <a href="{{ url('/') }}" class="service-link">Back to Home <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </section>
@endsection