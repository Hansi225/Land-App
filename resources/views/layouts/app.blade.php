<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Department of Land Settlement')</title>

    <meta name="description" content="@yield('description', 'Department of Land Settlement Sri Lanka and its public land services.')">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

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

    <nav class="navbar">
        <div class="navbar-container">
            <a href="{{ url('/') }}" class="brand">
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
                <li><a href="{{ url('/#home') }}" class="nav-link" data-i18n="navHome">Home</a></li>
                <li><a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" data-i18n="navAbout">About Us</a></li>
                
                <li><a href="{{ url('/#gazettes') }}" class="nav-link" data-i18n="navGazettes">Gazettes</a></li>
                <li><a href="{{ url('/#offices') }}" class="nav-link" data-i18n="navOffices">Regional Offices</a></li>
                <li><a href="{{ route('news.index') }}" class="nav-link {{ request()->routeIs('news.*') ? 'active' : '' }}">News and Events</a></li>
                <li><a href="{{ route('media.index') }}" class="nav-link {{ request()->routeIs('media.*') ? 'active' : '' }}">Media Gallery</a></li>
                <li><a href="{{ route('downloads.index') }}" class="nav-link {{ request()->routeIs('downloads.*') ? 'active' : '' }}">Forms &amp; Downloads</a></li>
                <li class="nav-dropdown nav-contact {{ request()->routeIs('contact.*') ? 'active' : '' }}">
                    <button type="button" class="nav-link nav-dropdown-toggle {{ request()->routeIs('contact.*') ? 'active' : '' }}">Contact Us <i class="fas fa-chevron-down"></i></button>
                    <ul class="nav-dropdown-menu">
                        <li><a href="{{ route('contact.index') }}#inquiry">Inquiry</a></li>
                        <li><a href="{{ route('contact.index') }}#head-office">Head Office</a></li>
                        <li><a href="{{ route('contact.index') }}#regional-office">Regional Office</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/#faqs') }}" class="nav-link">FAQs</a></li>
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

    @yield('content')

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
                    <li><a href="{{ url('/#home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Department</a></li>
                    
                    <li><a href="{{ route('news.index') }}">News and Events</a></li>
                    <li><a href="{{ route('media.index') }}">Media Gallery</a></li>
                    <li><a href="{{ route('downloads.index') }}">Forms &amp; Downloads</a></li>
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
</footer>

<!-- Inline fallback: ensure FAQ accordion works even if compiled JS didn't attach -->
<script>
    (function(){
        function initFallbackAccordions(){
            var items = document.querySelectorAll('.accordion-item');
            if(!items.length) return;
            items.forEach(function(item){
                var header = item.querySelector('.accordion-header');
                if(!header) return;
                header.addEventListener('click', function(){
                    var isActive = item.classList.contains('active');
                    items.forEach(function(i){ i.classList.remove('active'); });
                    if(!isActive) item.classList.add('active');
                });
            });
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initFallbackAccordions);
        } else {
            initFallbackAccordions();
        }
    })();
</script>

</body>
</html>
