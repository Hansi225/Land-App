@extends('layouts.app')

@section('title', 'Forms & Downloads | Department of Land Settlement')
@section('description', 'Download essential land settlement documents, acts, ordinances, forms, and citizen guides.')

@section('content')
    <section class="section" id="downloads-page">
        <div class="section-container">
            <div class="section-header">
                <span class="section-tag">Forms & Downloads</span>
                <h2 class="section-title">Essential Documents for Land Settlement</h2>
                <p class="section-subtitle">Access the key ordinances, acts, application forms, and guidance documents used in settlement procedures.</p>
            </div>

            <div class="services-grid">
                @foreach ($documents as $document)
                    <div class="service-card">
                        <div class="service-icon-box">
                            <i class="fas {{ $document['icon'] }}"></i>
                        </div>
                        <h3>{{ $document['title'] }}</h3>
                        <p>{{ $document['description'] }}</p>

                        <div style="display: flex; flex-wrap: wrap; gap: 0.75rem; margin-top: 1rem; font-size: 0.9rem; color: var(--text-muted);">
                            <span><strong>Type:</strong> {{ $document['type'] }}</span>
                            <span><strong>Size:</strong> {{ $document['size'] }}</span>
                            <span><strong>Updated:</strong> {{ $document['updated'] }}</span>
                        </div>

                        <a href="#" class="service-link" aria-label="Download {{ $document['title'] }}">
                            Download <i class="fas fa-download"></i>
                        </a>
                    </div>
                @endforeach
            </div>

            <div style="margin-top: 2.5rem; display: grid; gap: 1rem;">
                <div class="service-card" style="margin: 0;">
                    <h3>How to use these documents</h3>
                    <p>Download the relevant act or form, complete the required fields, and submit it with the requested supporting documents to the relevant settlement office.</p>
                </div>

                <div class="service-card" style="margin: 0;">
                    <h3>Need help?</h3>
                    <p>Use the home page Track Title Status feature or contact your regional settlement office for guidance on which form to use.</p>
                    <a href="{{ url('/') }}#offices" class="service-link">Find Regional Offices <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </section>
@endsection