<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Department of Land Settlement | Government of Sri Lanka</title>
    
    <!-- Meta Descriptions & SEO -->
    <meta name="description" content="Official Portal of the Department of Land Settlement Sri Lanka. Providing guaranteed land title registration (Bimsaviya), settlement gazettes, public inquiries, and land management services.">
    <meta name="keywords" content="Land Settlement Department Sri Lanka, Bimsaviya, Land Title Certificate, Gazettes, Mihikatha Medura, Land Claims Sri Lanka">

    <!-- FontAwesome & Google Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Vite CSS/JS Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <!-- 1. Top Government Header & Accessibility Bar -->
    <header class="top-bar">
        <div class="top-bar-left">
            <span class="badge-flag">
                <i class="fas fa-flag text-amber-400"></i> Government of Sri Lanka Official Portal
            </span>
            <span>|</span>
            <a href="https://www.gov.lk" target="_blank" rel="noopener"><i class="fas fa-globe"></i> GOV.LK</a>
            <span>|</span>
            <span><i class="fas fa-phone-alt"></i> Hotline: <strong>1919</strong> / +94 11 2866631</span>
        </div>
        <div class="top-bar-right">
            <div class="lang-selector">
                <button class="lang-btn active" data-lang="en">EN</button>
                <button class="lang-btn" data-lang="si">සිංහල</button>
                <button class="lang-btn" data-lang="ta">தமிழ்</button>
            </div>
            <button class="theme-toggle" id="themeToggle" title="Toggle Light/Dark Mode">
                <i class="fas fa-moon" id="themeIcon"></i>
            </button>
        </div>
    </header>

    <!-- 2. Main Navigation Bar -->
    <nav class="navbar">
        <div class="navbar-container">
            <a href="/" class="brand">
                <svg width="44" height="44" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="50" cy="50" r="48" fill="#0F2B48" stroke="#D49C3E" stroke-width="4"/>
                    <path d="M50 15 L75 35 L75 75 L25 75 L25 35 Z" fill="#15803D" opacity="0.9"/>
                    <path d="M50 25 L65 38 L65 65 L35 65 L35 38 Z" fill="#D49C3E"/>
                    <circle cx="50" cy="48" r="8" fill="#FFFFFF"/>
                </svg>
                <div class="brand-text">
                    <h1>Department of Land Settlement</h1>
                    <p>ඉඩම් නිරවුල් කිරීමේ දෙපාර්තමේන්තුව | காணித் தீர்வை திணைக்களம்</p>
                </div>
            </a>

            <ul class="nav-menu" id="navMenu">
                <li><a href="#home" class="nav-link active" data-i18n="navHome">Home</a></li>
                <li><a href="{{ route('about') }}" class="nav-link" data-i18n="navAbout">About Us</a></li>
                <li><a href="#services" class="nav-link" data-i18n="navServices">Services</a></li>
                <li><a href="#gazettes" class="nav-link" data-i18n="navGazettes">Gazettes</a></li>
                <li><a href="#offices" class="nav-link" data-i18n="navOffices">Regional Offices</a></li>
                <li><a href="{{ route('news.index') }}" class="nav-link">News and Events</a></li>
                <li><a href="{{ route('media.index') }}" class="nav-link">Media Gallery</a></li>
                <li><a href="{{ route('downloads.index') }}" class="nav-link">Forms &amp; Downloads</a></li>
                <li><a href="#faqs" class="nav-link">FAQs</a></li>
            </ul>

            <div class="nav-actions">
                <button class="btn btn-primary trigger-tracker">
                    <i class="fas fa-search-location"></i> <span data-i18n="btnTrack">Track Title Status</span>
                </button>
                <button class="mobile-toggle" id="mobileToggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </nav>

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
            <a href="{{ route('downloads.index') }}" class="quick-card">
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

    <!-- 5. Citizen Services Section -->
    <section class="section" id="services">
        <div class="section-container">
            <div class="section-header">
                <span class="section-tag">Public Services</span>
                <h2 class="section-title" data-i18n="secServicesTitle">Our Key Citizen Services</h2>
                <p class="section-subtitle" data-i18n="secServicesSub">Providing transparent and efficient land settlement solutions across all provinces of Sri Lanka.</p>
            </div>

            <div class="services-grid">
                <!-- Service Card 1 -->
                <div class="service-card">
                    <div class="service-icon-box">
                        <i class="fas fa-file-signature"></i>
                    </div>
                    <h3>Bimsaviya (Title Registration)</h3>
                    <p>Converting old deed system to a state-guaranteed Title Certificate under Registration of Title Act No. 21 of 1998, ensuring 100% legal security of land ownership.</p>
                    <a href="#" class="service-link trigger-tracker">Learn More & Check Title <i class="fas fa-chevron-right"></i></a>
                </div>

                <!-- Service Card 2 -->
                <div class="service-card">
                    <div class="service-icon-box">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <h3>Settlement Notices & Gazettes</h3>
                    <p>Publishing official government gazette notices (Section 2, 4, & 12) notifying landowners of upcoming settlement investigations and claim deadlines.</p>
                    <a href="#gazettes" class="service-link">View Gazette Directory <i class="fas fa-chevron-right"></i></a>
                </div>

                <!-- Service Card 3 -->
                <div class="service-card">
                    <div class="service-icon-box">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3>Public Inquiry & Claims Hearing</h3>
                    <p>Conducting field investigations and official hearings by Settlement Officers to resolve boundary disputes and verify ownership claims before final registration.</p>
                    <a href="#faqs" class="service-link">Inquiry Procedures <i class="fas fa-chevron-right"></i></a>
                </div>

                <!-- Service Card 4 -->
                <div class="service-card">
                    <div class="service-icon-box">
                        <i class="fas fa-draw-polygon"></i>
                    </div>
                    <h3>Subdivision & Amalgamation</h3>
                    <p>Official approval and re-mapping of subdivided land allotments or merged land blocks in coordination with the Survey Department of Sri Lanka.</p>
                    <a href="{{ route('downloads.index') }}" class="service-link">Download Forms <i class="fas fa-chevron-right"></i></a>
                </div>

                <!-- Service Card 5 -->
                <div class="service-card">
                    <div class="service-icon-box">
                        <i class="fas fa-folder-open"></i>
                    </div>
                    <h3>E-Downloads & Citizen Forms</h3>
                    <p>Access downloadable prescribed application forms for lodging land claims, requesting certified copies of settlement plans, and boundary verifications.</p>
                    <a href="{{ route('downloads.index') }}" class="service-link">Access Downloads <i class="fas fa-chevron-right"></i></a>
                </div>

                <!-- Service Card 6 -->
                <div class="service-card">
                    <div class="service-icon-box">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>District Advisory & Helpdesk</h3>
                    <p>Get direct guidance from regional land settlement officers regarding ongoing settlement projects in your divisional secretariat area.</p>
                    <a href="#offices" class="service-link">Contact District Office <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Interactive Settlement Gazette Directory Section -->
    <section class="section section-alt" id="gazettes">
        <div class="section-container">
            <div class="section-header">
                <span class="section-tag">Official Records</span>
                <h2 class="section-title">Gazette & Settlement Notice Directory</h2>
                <p class="section-subtitle">Search latest land settlement gazettes published under Section 2 & 4 of the Land Settlement Ordinance.</p>
            </div>

            <div class="gazette-container">
                <div class="gazette-toolbar">
                    <div class="filter-group">
                        <select class="select-filter" id="gazetteDistrictFilter">
                            <option value="all">All Districts (සියලුම දිස්ත්‍රික්ක)</option>
                            <option value="colombo">Colombo (කොළඹ)</option>
                            <option value="gampaha">Gampaha (ගම්පහ)</option>
                            <option value="kandy">Kandy (මහනුවර)</option>
                            <option value="kurunegala">Kurunegala (කුරුණෑගල)</option>
                            <option value="galle">Galle (ගාල්ල)</option>
                            <option value="jaffna">Jaffna (යාපනය)</option>
                        </select>
                        <select class="select-filter">
                            <option value="all">Notice Type: All</option>
                            <option value="sec2">Section 2 Notice</option>
                            <option value="sec4">Section 4 Order</option>
                            <option value="sec12">Section 12 Certificate</option>
                        </select>
                    </div>

                    <div style="position: relative; width: 280px;">
                        <input type="text" id="gazetteSearchInput" class="select-filter" placeholder="Search Village or Gazette No..." style="width: 100%; padding-left: 2.2rem;">
                        <i class="fas fa-search" style="position: absolute; left: 0.8rem; top: 50%; transform: translateY(-50%); color: var(--text-muted);"></i>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="custom-table">
                        <thead>
                            <tr>
                                <th>Gazette No & Date</th>
                                <th>District & Divisional Sec.</th>
                                <th>Village / Block Name</th>
                                <th>Notice Type</th>
                                <th>Claim Deadline</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="gazetteTableBody">
                            <tr data-district="colombo">
                                <td><strong>No. 2381/14</strong> <br><small style="color: var(--text-muted);">2026-06-15</small></td>
                                <td>Colombo <br><small style="color: var(--text-muted);">Kaduwela DS</small></td>
                                <td>Malabe North (Cadastral 310052)</td>
                                <td>Section 2 Notice</td>
                                <td>2026-08-30</td>
                                <td><span class="badge-status status-active">Active Claims</span></td>
                                <td><button class="btn btn-outline trigger-tracker" style="padding: 0.35rem 0.75rem; font-size: 0.8rem;"><i class="fas fa-eye"></i> View</button></td>
                            </tr>
                            <tr data-district="gampaha">
                                <td><strong>No. 2379/42</strong> <br><small style="color: var(--text-muted);">2026-05-20</small></td>
                                <td>Gampaha <br><small style="color: var(--text-muted);">Kelaniya DS</small></td>
                                <td>Peliyagoda East (Block 02)</td>
                                <td>Section 4 Order</td>
                                <td>2026-09-15</td>
                                <td><span class="badge-status status-active">Active Claims</span></td>
                                <td><button class="btn btn-outline trigger-tracker" style="padding: 0.35rem 0.75rem; font-size: 0.8rem;"><i class="fas fa-eye"></i> View</button></td>
                            </tr>
                            <tr data-district="kandy">
                                <td><strong>No. 2375/08</strong> <br><small style="color: var(--text-muted);">2026-04-10</small></td>
                                <td>Kandy <br><small style="color: var(--text-muted);">Yatinuwara DS</small></td>
                                <td>Peradeniya West (Cadastral 220019)</td>
                                <td>Section 12 Certificate</td>
                                <td>Completed</td>
                                <td><span class="badge-status status-pending">Finalized</span></td>
                                <td><button class="btn btn-outline trigger-tracker" style="padding: 0.35rem 0.75rem; font-size: 0.8rem;"><i class="fas fa-file-pdf"></i> PDF</button></td>
                            </tr>
                            <tr data-district="kurunegala">
                                <td><strong>No. 2372/55</strong> <br><small style="color: var(--text-muted);">2026-03-28</small></td>
                                <td>Kurunegala <br><small style="color: var(--text-muted);">Mawathagama DS</small></td>
                                <td>Weerambugedara South</td>
                                <td>Section 2 Notice</td>
                                <td>2026-07-30</td>
                                <td><span class="badge-status status-active">Active Claims</span></td>
                                <td><button class="btn btn-outline trigger-tracker" style="padding: 0.35rem 0.75rem; font-size: 0.8rem;"><i class="fas fa-eye"></i> View</button></td>
                            </tr>
                            <tr data-district="jaffna">
                                <td><strong>No. 2368/20</strong> <br><small style="color: var(--text-muted);">2026-02-14</small></td>
                                <td>Jaffna <br><small style="color: var(--text-muted);">Valikamam South DS</small></td>
                                <td>Uduvil West (Block 05)</td>
                                <td>Section 4 Order</td>
                                <td>2026-08-15</td>
                                <td><span class="badge-status status-active">Active Claims</span></td>
                                <td><button class="btn btn-outline trigger-tracker" style="padding: 0.35rem 0.75rem; font-size: 0.8rem;"><i class="fas fa-eye"></i> View</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Regional Offices Locator Directory -->
    <section class="section" id="offices">
        <div class="section-container">
            <div class="section-header">
                <span class="section-tag">Islandwide Coverage</span>
                <h2 class="section-title">Regional Settlement Offices</h2>
                <p class="section-subtitle">Connect with district officers handling land title investigations in your province.</p>
            </div>

            <div style="max-width: 500px; margin: 0 auto 2.5rem auto; position: relative;">
                <input type="text" id="officeSearchInput" class="select-filter" placeholder="Search District (e.g. Colombo, Kandy, Galle)..." style="width: 100%; padding-left: 2.5rem; height: 48px; font-size: 1rem;">
                <i class="fas fa-search" style="position: absolute; left: 1rem; top: 50%; transform: translateY(-50%); color: var(--text-muted);"></i>
            </div>

            <div class="office-grid">
                <!-- Office Card 1 -->
                <div class="office-card">
                    <div class="office-header">
                        <span class="office-district">Western Province</span>
                        <i class="fas fa-building text-amber-500" style="color: var(--accent-gold); font-size: 1.25rem;"></i>
                    </div>
                    <h3 class="office-name">Head Office - Mihikatha Medura</h3>
                    <div class="office-detail">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>"Mihikatha Medura", Land Secretariat, Rajamalwatta Road, Battaramulla.</span>
                    </div>
                    <div class="office-detail">
                        <i class="fas fa-phone-alt"></i>
                        <span>+94 11 2866631 / +94 11 2866632</span>
                    </div>
                    <div class="office-detail">
                        <i class="fas fa-envelope"></i>
                        <span>info@landsettledept.gov.lk</span>
                    </div>
                </div>

                <!-- Office Card 2 -->
                <div class="office-card">
                    <div class="office-header">
                        <span class="office-district">Central Province</span>
                        <i class="fas fa-building" style="color: var(--accent-gold); font-size: 1.25rem;"></i>
                    </div>
                    <h3 class="office-name">Kandy Regional Settlement Office</h3>
                    <div class="office-detail">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>District Secretariat Complex, Getambe, Kandy.</span>
                    </div>
                    <div class="office-detail">
                        <i class="fas fa-phone-alt"></i>
                        <span>+94 81 2234190</span>
                    </div>
                    <div class="office-detail">
                        <i class="fas fa-envelope"></i>
                        <span>kandy@landsettledept.gov.lk</span>
                    </div>
                </div>

                <!-- Office Card 3 -->
                <div class="office-card">
                    <div class="office-header">
                        <span class="office-district">North Western</span>
                        <i class="fas fa-building" style="color: var(--accent-gold); font-size: 1.25rem;"></i>
                    </div>
                    <h3 class="office-name">Kurunegala Regional Office</h3>
                    <div class="office-detail">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>No. 45, Dambulla Road, Kurunegala.</span>
                    </div>
                    <div class="office-detail">
                        <i class="fas fa-phone-alt"></i>
                        <span>+94 37 2223841</span>
                    </div>
                    <div class="office-detail">
                        <i class="fas fa-envelope"></i>
                        <span>kurunegala@landsettledept.gov.lk</span>
                    </div>
                </div>

                <!-- Office Card 4 -->
                <div class="office-card">
                    <div class="office-header">
                        <span class="office-district">Southern Province</span>
                        <i class="fas fa-building" style="color: var(--accent-gold); font-size: 1.25rem;"></i>
                    </div>
                    <h3 class="office-name">Galle Regional Settlement Office</h3>
                    <div class="office-detail">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>District Secretariat, Fort, Galle.</span>
                    </div>
                    <div class="office-detail">
                        <i class="fas fa-phone-alt"></i>
                        <span>+94 91 2245912</span>
                    </div>
                    <div class="office-detail">
                        <i class="fas fa-envelope"></i>
                        <span>galle@landsettledept.gov.lk</span>
                    </div>
                </div>

                <!-- Office Card 5 -->
                <div class="office-card">
                    <div class="office-header">
                        <span class="office-district">North Central</span>
                        <i class="fas fa-building" style="color: var(--accent-gold); font-size: 1.25rem;"></i>
                    </div>
                    <h3 class="office-name">Anuradhapura Regional Office</h3>
                    <div class="office-detail">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Government Complex, Stage II, Anuradhapura.</span>
                    </div>
                    <div class="office-detail">
                        <i class="fas fa-phone-alt"></i>
                        <span>+94 25 2221804</span>
                    </div>
                    <div class="office-detail">
                        <i class="fas fa-envelope"></i>
                        <span>anuradhapura@landsettledept.gov.lk</span>
                    </div>
                </div>

                <!-- Office Card 6 -->
                <div class="office-card">
                    <div class="office-header">
                        <span class="office-district">Northern Province</span>
                        <i class="fas fa-building" style="color: var(--accent-gold); font-size: 1.25rem;"></i>
                    </div>
                    <h3 class="office-name">Jaffna Regional Settlement Office</h3>
                    <div class="office-detail">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Kankesanthurai Road, Jaffna.</span>
                    </div>
                    <div class="office-detail">
                        <i class="fas fa-phone-alt"></i>
                        <span>+94 21 2224095</span>
                    </div>
                    <div class="office-detail">
                        <i class="fas fa-envelope"></i>
                        <span>jaffna@landsettledept.gov.lk</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. Downloads & FAQ Citizen Charter Section -->
    <section class="section section-alt" id="faqs">
        <div class="section-container">
            <div class="section-header">
                <span class="section-tag">Help & Guidelines</span>
                <h2 class="section-title">Citizen Charter & Frequently Asked Questions</h2>
                <p class="section-subtitle">Clear answers regarding land title certificates, Bimsaviya, and dispute filings.</p>
            </div>

            <div class="accordion">
                <!-- FAQ 1 -->
                <div class="accordion-item active">
                    <button class="accordion-header">
                        <span>What is the Bimsaviya (Land Title Certificate) Program?</span>
                        <i class="fas fa-chevron-down accordion-icon"></i>
                    </button>
                    <div class="accordion-body">
                        The Bimsaviya program converts traditional deed-based registration into a state-guaranteed Title Registration system under Act No. 21 of 1998. The government guarantees ownership, preventing title frauds, overlapping land claims, and boundary uncertainty.
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="accordion-item">
                    <button class="accordion-header">
                        <span>What should I do when a Section 2 Gazette Notice is published for my area?</span>
                        <i class="fas fa-chevron-down accordion-icon"></i>
                    </button>
                    <div class="accordion-body">
                        When a Section 2 notice is issued, landowners in the specified village must submit their land ownership claim forms along with copies of existing deeds, surveys, and NIC within the specified deadline (usually 30 to 60 days) to the Settlement Officer.
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="accordion-item">
                    <button class="accordion-header">
                        <span>How can I check the status of my Land Title application online?</span>
                        <i class="fas fa-chevron-down accordion-icon"></i>
                    </button>
                    <div class="accordion-body">
                        You can use the <strong>Track Title Status</strong> button on this portal. Enter your National Identity Card (NIC) number, Cadastral Map parcel number, or application reference number to view real-time stage progress.
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="accordion-item">
                    <button class="accordion-header">
                        <span>What documents are required to claim title certificate for a subdivided lot?</span>
                        <i class="fas fa-chevron-down accordion-icon"></i>
                    </button>
                    <div class="accordion-body">
                        You need: 1) Approved Survey Plan from a licensed surveyor, 2) Deed of Partition or Transfer, 3) Extract of Title from the Land Registry, 4) Certified copy of NIC, and 5) Completed Form B (Application for Title Registration).
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. Interactive Land Title Status Tracker Modal -->
    <div class="modal-overlay" id="trackerModal">
        <div class="modal-card">
            <div class="modal-header">
                <h3><i class="fas fa-shield-alt" style="color: var(--accent-gold); margin-right: 0.5rem;"></i> Land Title Status Tracker</h3>
                <button class="modal-close" id="closeTrackerModal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="modal-info-box">
                    <div class="modal-info-row">
                        <span>Application Reference:</span>
                        <strong id="modalRefNo">BMS-2026-78491</strong>
                    </div>
                    <div class="modal-info-row">
                        <span>Claimant Name:</span>
                        <span id="modalOwnerName" style="font-weight: 600;">K. A. Perera & Family</span>
                    </div>
                    <div class="modal-info-row">
                        <span>Land Location:</span>
                        <span id="modalVillage" style="font-size: 0.875rem;">Malabe North (Cadastral Map 310052)</span>
                    </div>
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <h4 style="font-size: 0.95rem; font-weight: 700; margin-bottom: 0.5rem;">Settlement Stage Progress:</h4>
                    <span id="modalStatusBadge" class="badge-status status-active">Public Hearing & Claims Investigation</span>
                </div>

                <!-- Step Stepper -->
                <div class="stepper">
                    <div class="step-item completed">
                        <div class="step-circle"><i class="fas fa-check"></i></div>
                        <span class="step-title">Cadastral Survey</span>
                    </div>
                    <div class="step-item completed">
                        <div class="step-circle"><i class="fas fa-check"></i></div>
                        <span class="step-title">Gazette Notice</span>
                    </div>
                    <div class="step-item current">
                        <div class="step-circle">3</div>
                        <span class="step-title">Public Inquiry</span>
                    </div>
                    <div class="step-item">
                        <div class="step-circle">4</div>
                        <span class="step-title">Title Certificate</span>
                    </div>
                </div>

                <div class="modal-notice">
                    <i class="fas fa-info-circle" style="color: var(--primary); margin-right: 0.4rem;"></i>
                    <strong>Next Action:</strong> Public hearing scheduled at Kaduwela Divisional Secretariat on 15th August 2026. Please bring original deeds.
                </div>
            </div>
        </div>
    </div>

    <!-- 10. Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-brand">
                <h2>Department of Land Settlement</h2>
                <p>Establishing guaranteed land title registration and efficient land management systems across Sri Lanka under the purview of the Ministry of Agriculture, Livestock, Land and Irrigation.</p>
                <div class="footer-socials">
                    <a href="#" class="footer-social-btn"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="footer-social-btn"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="footer-social-btn"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Department</a></li>
                    <li><a href="#services">Bimsaviya Program</a></li>
                    <li><a href="#gazettes">Gazette Notifications</a></li>
                    <li><a href="#offices">Regional Offices Directory</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Related Institutions</h4>
                <ul class="footer-links">
                    <li><a href="https://www.survey.gov.lk" target="_blank" rel="noopener">Survey Department of Sri Lanka</a></li>
                    <li><a href="https://www.rgd.gov.lk" target="_blank" rel="noopener">Registrar General's Department</a></li>
                    <li><a href="https://www.landcom.gov.lk" target="_blank" rel="noopener">Land Commissioner General's Dept</a></li>
                    <li><a href="https://www.gov.lk" target="_blank" rel="noopener">Official Government Portal</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Contact Us</h4>
                <p style="font-size: 0.875rem; margin-bottom: 0.5rem;"><i class="fas fa-map-marker-alt" style="color: #FFE066; margin-right: 0.4rem;"></i> "Mihikatha Medura", Rajamalwatta Road, Battaramulla, Sri Lanka.</p>
                <p style="font-size: 0.875rem; margin-bottom: 0.5rem;"><i class="fas fa-phone-alt" style="color: #FFE066; margin-right: 0.4rem;"></i> +94 11 2866631</p>
                <p style="font-size: 0.875rem;"><i class="fas fa-envelope" style="color: #FFE066; margin-right: 0.4rem;"></i> info@landsettledept.gov.lk</p>
            </div>
        </div>

        <div class="footer-bottom">
            <div>
                &copy; {{ date('Y') }} Department of Land Settlement, Government of Sri Lanka. All Rights Reserved.
            </div>
            <div>
                Designed with <i class="fas fa-heart" style="color: #FFE066;"></i> for Public Accessibility & Modern Citizen Services
            </div>
        </div>
    </footer>

</body>
</html>
