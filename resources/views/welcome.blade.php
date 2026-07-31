@extends('layouts.app')

@section('title', 'Department of Land Settlement | Government of Sri Lanka')

@section('content')

    <!-- 3. Hero Section -->
    <section class="hero" id="home">
        <div class="hero-pattern"></div>
        <div class="hero-container">
            <div class="hero-content">
                <div class="hero-badge">
                    <i class="fas fa-landmark"></i> <span data-i18n="heroBadge">Ministry of Agriculture, Livestock, Land & Irrigation</span>
                </div>
                <h1 class="hero-title">
                    <span data-i18n="heroTitlePrefix">Settled Land Title for</span> <br>
                    <span data-i18n="heroTitleHighlight">Every Citizen</span>
                </h1>
                <p class="hero-description" data-i18n="heroDesc">
                    Empowering Sri Lanka through guaranteed land title ownership, transparent land settlement procedures, and digital Bimsaviya services under the Registration of Title Act No. 21 of 1998.
                </p>
                <div class="hero-actions">
                    <a href="#services" class="btn btn-primary">
                        <i class="fas fa-th-large"></i> Explore Citizen Services
                    </a>
                    <a href="#gazettes" class="btn btn-secondary">
                        <i class="fas fa-file-alt"></i> Latest Settlement Gazettes
                    </a>
                </div>

                <div class="hero-stats">
                    <div class="stat-item">
                        <h4>1.5M+</h4>
                        <p data-i18n="statTitles">Title Certificates Issued</p>
                    </div>
                    <div class="stat-item">
                        <h4>25+</h4>
                        <p data-i18n="statOffices">Regional Offices</p>
                    </div>
                    <div class="stat-item">
                        <h4>14,000+</h4>
                        <p data-i18n="statVillages">Villages Settled</p>
                    </div>
                </div>
            </div>

            <!-- Quick Search Widget -->
            <div class="hero-search-card">
                <h3>
                    <i class="fas fa-search" style="margin-right: 0.5rem; color: var(--primary);"></i> Quick Title & Gazette Search
                </h3>
                <p>
                    Check your land settlement application progress or search for published gazette notices.
                </p>

                <div class="search-tabs">
                    <button class="search-tab active">Land Title (Bimsaviya)</button>
                    <button class="search-tab">Gazette Notice</button>
                    <button class="search-tab">NIC / Reference</button>
                </div>

                <form id="heroSearchForm">
                    <div class="search-box-group">
                        <div class="search-input-wrapper">
                            <i class="fas fa-map-marked-alt"></i>
                            <input type="text" id="heroSearchInput" class="search-input" placeholder="e.g. NIC No: 882349120V or Plan No: 310052" required>
                        </div>
                        <button type="submit" class="btn btn-gold">
                            <i class="fas fa-arrow-right"></i> Check Status
                        </button>
                    </div>
                </form>
                <div class="search-hint">
                    <span><i class="fas fa-info-circle"></i> Sample Ref: <strong>BMS-2026-78491</strong></span>
                    <span>or Enter NIC to test</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Quick Access Shortcut Banner -->
    <div class="quick-access-banner">
        <div class="quick-grid">
            <a href="#services" class="quick-card trigger-tracker">
                <div class="quick-icon"><i class="fas fa-certificate"></i></div>
                <div class="quick-info">
                    <h4>Bimsaviya Title Search</h4>
                    <p>Verify guaranteed title status</p>
                </div>
            </a>
            <a href="#gazettes" class="quick-card">
                <div class="quick-icon"><i class="fas fa-scroll"></i></div>
                <div class="quick-info">
                    <h4>Gazette Notifications</h4>
                    <p>Sec 2 & 4 Settlement Notices</p>
                </div>
            </a>
            <a href="#downloads" class="quick-card">
                <div class="quick-icon"><i class="fas fa-file-download"></i></div>
                <div class="quick-info">
                    <h4>Forms & Downloads</h4>
                    <p>Claim applications & circulars</p>
                </div>
            </a>
            <a href="#offices" class="quick-card">
                <div class="quick-icon"><i class="fas fa-map-marker-alt"></i></div>
                <div class="quick-info">
                    <h4>Regional Offices</h4>
                    <p>Find your nearest district office</p>
                </div>
            </a>
        </div>
    </div>

    <!-- 5. FAQs -->
    <section id="faqs" class="section section-faqs">
        <div class="container">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-sub">Common questions about land settlement and Bimsaviya services.</p>

            <div class="accordion">
                <div class="accordion-item">
                    <button class="accordion-header" onclick="(function(h){var item=h.closest('.accordion-item');var items=document.querySelectorAll('.accordion-item');items.forEach(function(i){i.classList.remove('active');}); if(!item.classList.contains('active')) item.classList.add('active');})(this)">
                        What is Bimsaviya and how do I check my title status?
                        <span class="accordion-icon">&#9660;</span>
                    </button>
                    <div class="accordion-body">
                        Bimsaviya is the national land titling program. Use the "Track Title Status" button in the header or the Quick Title Search to check your application using your NIC or reference number.
                    </div>
                </div>

                <div class="accordion-item">
                    <button class="accordion-header" onclick="(function(h){var item=h.closest('.accordion-item');var items=document.querySelectorAll('.accordion-item');items.forEach(function(i){i.classList.remove('active');}); if(!item.classList.contains('active')) item.classList.add('active');})(this)">
                        How can I obtain official forms and application templates?
                        <span class="accordion-icon">&#9660;</span>
                    </button>
                    <div class="accordion-body">
                        Visit the "Forms & Downloads" page via the navigation to download application forms, guidelines and circulars. For physical copies, contact your regional office.
                    </div>
                </div>

                <div class="accordion-item">
                    <button class="accordion-header" onclick="(function(h){var item=h.closest('.accordion-item');var items=document.querySelectorAll('.accordion-item');items.forEach(function(i){i.classList.remove('active');}); if(!item.classList.contains('active')) item.classList.add('active');})(this)">
                        Who do I contact for regional settlement enquiries?
                        <span class="accordion-icon">&#9660;</span>
                    </button>
                    <div class="accordion-body">
                        See the <a href="{{ route('contact.index') }}#regional-office">Regional Offices</a> section on the Contact page for phone and email details.
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
