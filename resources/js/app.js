import './bootstrap';

// Translations Dictionary
const translations = {
  en: {
    navHome: "Home",
    navAbout: "About Us",
    navGazettes: "Gazettes",
    navContact: "Contact",
    btnTrack: "Track Title Status",
    btnSearch: "Search Notices",
    heroBadge: "Ministry of Agriculture, Livestock, Land & Irrigation",
    heroTitlePrefix: "Settled Land Title for",
    heroTitleHighlight: "Every Citizen",
    heroDesc: "Empowering Sri Lanka through guaranteed land title ownership, transparent land settlement procedures, and digital Bimsaviya services.",
    statTitles: "Title Certificates Issued",
    statOffices: "Regional Offices",
    statVillages: "Villages Settled",
    secServicesTitle: "Our Key Citizen Services",
    secServicesSub: "Providing transparent and efficient land settlement solutions across all provinces of Sri Lanka."
  },
  si: {
    navHome: "මුල් පිටුව",
    navAbout: "අප ගැන",
    navGazettes: "ගැසට් නිවේදන",
    navContact: "සම්බන්ධ වන්න",
    btnTrack: "අයිතිවාසිකම් තත්ත්වය පරීක්ෂාව",
    btnSearch: "නිවේදන සෙවීම",
    heroBadge: "කෘෂිකර්ම, පශු සම්පත්, ඉඩම් සහ වාරිමාර්ග අමාත්‍යාංශය",
    heroTitlePrefix: "සෑම ඉඩමකටම",
    heroTitleHighlight: "නිරවුල් අයිතියක්",
    heroDesc: "බිම්සවිය වැඩසටහන මඟින් ශ්‍රී ලංකාවේ සියලුම ඉඩම් සඳහා නිරවුල් සහ සහතික කළ හිමිකම් ඔප්පු ලබාදීමේ රාජ්‍ය මෙහෙවර.",
    statTitles: "සහතික කළ හිමිකම් පත්",
    statOffices: "ප්‍රාදේශීය කාර්යාල",
    statVillages: "නිරවුල් කළ ගම්මාන",
    secServicesTitle: "අපගේ ප්‍රධාන මහජන සේවාවන්",
    secServicesSub: "ශ්‍රී ලංකාවේ සියලුම පළාත් ආවරණය වන පරිදි විනිවිදභාවයෙන් යුතු ඉඩම් නිරවුල් කිරීමේ සේවාවන්."
  },
  ta: {
    navHome: "முகப்பு",
    navAbout: "எங்களைப் பற்றி",
    navGazettes: "வர்த்தமானிகள்",
    navContact: "தொடர்புகொள்ள",
    btnTrack: "உரிமை நிலையைச் சரிபார்க்கவும்",
    btnSearch: "அறிவிப்பு தேடல்",
    heroBadge: "விவசாய, கால்நடை, காணி மற்றும் நீர்ப்பாசன அமைச்சு",
    heroTitlePrefix: "ஒவ்வொரு காணிக்கும்",
    heroTitleHighlight: "தீர்க்கமான உரிமை",
    heroDesc: "பிம்சவிய திட்டத்தின் மூலம் இலங்கையில் நில உரிமைகளை உறுதிப்படுத்தி தெளிவான காணி நிர்வாக அமைப்பை ஏற்படுத்துதல்.",
    statTitles: "வழங்கப்பட்ட உரிமைச் சான்றிதழ்கள்",
    statOffices: "பிராந்திய அலுவலகங்கள்",
    statVillages: "தீர்க்கப்பட்ட கிராமங்கள்",
    secServicesTitle: "எமது முக்கிய பொதுச் சேவைகள்",
    secServicesSub: "இலங்கையின் அனைத்து மாகாணங்களிலும் வெளிப்படையான காணி தீர்வை சேவைகள்."
  }
};

let currentLang = 'en';

document.addEventListener('DOMContentLoaded', () => {
  initTheme();
  initLanguageSwitcher();
  initMobileMenu();
  initAccordions();
  initGazetteFilter();
  initOfficeFilter();
  initTrackerModal();
});

// Theme Management
function initTheme() {
  const toggleBtn = document.getElementById('themeToggle');
  const savedTheme = localStorage.getItem('land_app_theme') || 'light';
  
  document.documentElement.setAttribute('data-theme', savedTheme);
  updateThemeIcon(savedTheme);

  if (toggleBtn) {
    toggleBtn.addEventListener('click', () => {
      const currentTheme = document.documentElement.getAttribute('data-theme');
      const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
      document.documentElement.setAttribute('data-theme', newTheme);
      localStorage.setItem('land_app_theme', newTheme);
      updateThemeIcon(newTheme);
    });
  }
}

function updateThemeIcon(theme) {
  const icon = document.getElementById('themeIcon');
  if (icon) {
    icon.className = theme === 'dark' ? 'fas fa-sun' : 'fas fa-moon';
  }
}

// Language Switcher
function initLanguageSwitcher() {
  const langBtns = document.querySelectorAll('.lang-btn');
  langBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const lang = btn.getAttribute('data-lang');
      if (translations[lang]) {
        currentLang = lang;
        langBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        applyTranslations(lang);
      }
    });
  });
}

function applyTranslations(lang) {
  const dict = translations[lang];
  document.querySelectorAll('[data-i18n]').forEach(el => {
    const key = el.getAttribute('data-i18n');
    if (dict[key]) {
      el.textContent = dict[key];
    }
  });
}

// Mobile Menu
function initMobileMenu() {
  const toggle = document.getElementById('mobileToggle');
  const menu = document.getElementById('navMenu');

  if (toggle && menu) {
    toggle.addEventListener('click', () => {
      menu.classList.toggle('mobile-active');
    });
  }
}

// Accordions
function initAccordions() {
  const items = document.querySelectorAll('.accordion-item');
  items.forEach(item => {
    const header = item.querySelector('.accordion-header');
    if (header) {
      header.addEventListener('click', () => {
        const isActive = item.classList.contains('active');
        items.forEach(i => i.classList.remove('active'));
        if (!isActive) {
          item.classList.add('active');
        }
      });
    }
  });
}

// Gazette Filter & Search
function initGazetteFilter() {
  const districtSelect = document.getElementById('gazetteDistrictFilter');
  const searchInput = document.getElementById('gazetteSearchInput');
  const rows = document.querySelectorAll('#gazetteTableBody tr');

  function filterTable() {
    const district = districtSelect ? districtSelect.value.toLowerCase() : 'all';
    const query = searchInput ? searchInput.value.toLowerCase() : '';

    rows.forEach(row => {
      const text = row.textContent.toLowerCase();
      const rowDistrict = row.getAttribute('data-district') || '';
      
      const matchesDistrict = (district === 'all' || rowDistrict === district);
      const matchesQuery = (query === '' || text.includes(query));

      if (matchesDistrict && matchesQuery) {
        row.style.display = '';
      } else {
        row.style.display = 'none';
      }
    });
  }

  if (districtSelect) districtSelect.addEventListener('change', filterTable);
  if (searchInput) searchInput.addEventListener('input', filterTable);
}

// Office Locator Filter
function initOfficeFilter() {
  const searchInput = document.getElementById('officeSearchInput');
  const cards = document.querySelectorAll('.office-card');

  if (searchInput) {
    searchInput.addEventListener('input', (e) => {
      const query = e.target.value.toLowerCase();
      cards.forEach(card => {
        const text = card.textContent.toLowerCase();
        card.style.display = text.includes(query) ? '' : 'none';
      });
    });
  }
}

// Status Tracker Modal Logic
function initTrackerModal() {
  const modal = document.getElementById('trackerModal');
  const closeBtn = document.getElementById('closeTrackerModal');
  const triggerBtns = document.querySelectorAll('.trigger-tracker');
  const searchForm = document.getElementById('heroSearchForm');
  const searchInput = document.getElementById('heroSearchInput');

  function openModal(query = '') {
    if (modal) {
      modal.classList.add('active');
      simulateTrackingResult(query);
    }
  }

  function closeModal() {
    if (modal) {
      modal.classList.remove('active');
    }
  }

  triggerBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      openModal();
    });
  });

  if (searchForm) {
    searchForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const query = searchInput ? searchInput.value.trim() : '';
      openModal(query);
    });
  }

  if (closeBtn) closeBtn.addEventListener('click', closeModal);
  if (modal) {
    modal.addEventListener('click', (e) => {
      if (e.target === modal) closeModal();
    });
  }
}

function simulateTrackingResult(query) {
  const refDisplay = document.getElementById('modalRefNo');
  const ownerDisplay = document.getElementById('modalOwnerName');
  const villageDisplay = document.getElementById('modalVillage');
  const statusBadge = document.getElementById('modalStatusBadge');
  
  const sampleRef = query.length > 3 ? query.toUpperCase() : "BMS-2026-78491";
  
  if (refDisplay) refDisplay.textContent = sampleRef;
  if (ownerDisplay) ownerDisplay.textContent = "K. A. Perera & Family";
  if (villageDisplay) villageDisplay.textContent = "Malabe North (Block 04, Cadastral Map 310052)";
  if (statusBadge) {
    statusBadge.textContent = "Public Hearing & Claims Investigation";
    statusBadge.className = "badge-status status-pending";
  }
}
