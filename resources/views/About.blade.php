@extends('layouts.app')

@section('title', 'About Us | Department of Land Settlement')
@section('description', 'About the Department of Land Settlement Sri Lanka and its public land services.')

@section('content')
    <section class="section" id="about">
        <div class="section-container">
            <div class="section-header">
                <span class="section-tag">About Us</span>
                <h2 class="section-title">Department of Land Settlement</h2>
                <p class="section-subtitle">We support secure land ownership, transparent settlement work, and public access to land-related services across Sri Lanka.</p>
            </div>

            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon-box">
                        <i class="fas fa-landmark"></i>
                    </div>
                    <h3>Our Mission</h3>
                    <p>To improve land administration and help citizens access clear, reliable, and state-backed land title services.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon-box">
                        <i class="fas fa-people-group"></i>
                    </div>
                    <h3>Our Work</h3>
                    <p>We manage settlement activities, notices, hearings, and guidance for the public through regional offices and official channels.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon-box">
                        <i class="fas fa-shield-halved"></i>
                    </div>
                    <h3>Public Value</h3>
                    <p>Our services help strengthen land security, reduce disputes, and support citizens through a transparent process.</p>
                </div>
            </div>

            <div style="margin-top: 2rem;">
                <a href="{{ url('/') }}" class="btn btn-primary">Back to Home</a>
            </div>
        </div>
    </section>
@endsection