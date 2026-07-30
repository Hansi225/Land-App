@extends('layouts.app')

@section('title', 'Contact Us | Department of Land Settlement')
@section('description', 'Contact the Department of Land Settlement through inquiry, head office, and regional office details.')

@section('content')
    <section class="section" id="contact-page">
        <div class="section-container">
            <div class="section-header">
                <span class="section-tag">Contact Us</span>
                <h2 class="section-title">Reach the Right Office</h2>
                <p class="section-subtitle">Choose a contact category from the dropdown in the navigation bar or browse the office details below.</p>
            </div>

            <div class="services-grid">
                @foreach ($contacts as $contact)
                    <div class="service-card" id="{{ $contact['id'] }}">
                        <div class="service-icon-box">
                            <i class="fas {{ $contact['icon'] }}"></i>
                        </div>
                        <h3>{{ $contact['title'] }}</h3>
                        <p>{{ $contact['description'] }}</p>

                        <div style="margin-top: 1rem; display: grid; gap: 0.8rem; font-size: 0.95rem; color: var(--text-muted);">
                            <p><strong>Office area:</strong> {{ $contact['area'] }}</p>
                            <p><strong>Phone number:</strong> {{ $contact['phone'] }}</p>
                            <p><strong>Email:</strong> {{ $contact['email'] }}</p>
                            <p><strong>Address:</strong> {{ $contact['address'] }}</p>
                        </div>

                        <a href="mailto:{{ $contact['email'] }}" class="service-link">Email Office <i class="fas fa-envelope"></i></a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection