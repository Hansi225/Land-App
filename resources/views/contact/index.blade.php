@extends('layouts.app')

@section('title', 'Contact Us - Department of Land Settlement')

@section('content')
    <div class="container contact-page">
        <h1>Contact Us</h1>

        <section id="inquiry" class="contact-section">
            <h2>General Inquiry</h2>
            <p>If you have questions about land settlement services, please use the form below or contact the head office.</p>
            <a href="mailto:info@landdept.gov.lk" class="btn btn-primary">Email Inquiry</a>
        </section>

        <section id="head-office" class="contact-section">
            <h2>Head Office</h2>
            <p><strong>Office:</strong> {{ $offices['head']['office'] }}</p>
            <p><strong>Phone:</strong> {{ $offices['head']['phone'] }}</p>
            <p><strong>Email:</strong> <a href="mailto:{{ $offices['head']['email'] }}">{{ $offices['head']['email'] }}</a></p>
            <p><strong>Address:</strong> {{ $offices['head']['address'] }}</p>
        </section>

        <section id="regional-office" class="contact-section">
            <h2>Regional Offices</h2>
            <div class="regional-list">
                @foreach($offices['regional'] as $reg)
                    <div class="regional-item">
                        <h3>{{ $reg['area'] }}</h3>
                        <p><strong>Phone:</strong> {{ $reg['phone'] }}</p>
                        <p><strong>Email:</strong> <a href="mailto:{{ $reg['email'] }}">{{ $reg['email'] }}</a></p>
                        <p><strong>Address:</strong> {{ $reg['address'] }}</p>
                    </div>
                @endforeach
            </div>
        </section>
    </div>

@endsection
