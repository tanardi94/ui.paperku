# Paperku Web - GitHub Copilot Instructions

**Project:** Paperku Landing Page - Custom Print Services  
**Stack:** Laravel 13 + Tailwind CSS v4 + Vite + Alpine.js 3.x  
**Font:** Instrument Sans (400, 500, 600)  
**Last Updated:** 2026-07-31

---

## 🎯 Project Context

You are working on a professional landing page for Paperku, a custom printing service in Surabaya, Indonesia. The site showcases printing services with a modern, clean design supporting both light and dark modes.

**Design Philosophy:**
- **CAVEMAN CODING:** Simple, direct code. No over-abstraction.
- **PONYTAIL LAZY:** Reuse patterns aggressively. Let framework do the work.
- **Mobile-first:** Start at 320px, scale to 1920px+
- **Dark mode native:** Not inverted, but designed for both modes

---

## 🎨 Design System

### Color Palette

#### Light Mode
```css
/* Backgrounds */
--bg-primary:   #FDFDFC    /* Main page background */
--bg-secondary: #FFFFFF    /* Cards, elevated surfaces */
--bg-tertiary:  #F8F9FA    /* Subtle sections */

/* Text */
--text-primary:   #1b1b18  /* Headings, important text */
--text-secondary: #706f6c  /* Body text, descriptions */

/* Borders & Accents */
--border: #e3e3e0          /* Dividers, card borders */
--accent: #f53003          /* CTAs, hover states */
```

#### Dark Mode
```css
/* Backgrounds */
--bg-primary:   #0a0a0a    /* Main page background */
--bg-secondary: #161615    /* Cards, elevated surfaces */
--bg-tertiary:  #1a1a1a    /* Subtle sections */

/* Text */
--text-primary:   #EDEDEC  /* Headings, important text */
--text-secondary: #A1A09A  /* Body text, descriptions */

/* Borders & Accents */
--border: #3E3E3A          /* Dividers, card borders */
--accent: #FF4433          /* CTAs, hover states */
```

### Tailwind Class Mappings

| Design Token | Light Mode Class | Dark Mode Class |
|--------------|------------------|-----------------|
| BG Primary | `bg-[#FDFDFC]` | `dark:bg-[#0a0a0a]` |
| BG Secondary | `bg-white` | `dark:bg-[#161615]` |
| BG Tertiary | `bg-gray-50` | `dark:bg-[#1a1a1a]` |
| Text Primary | `text-[#1b1b18]` | `dark:text-[#EDEDEC]` |
| Text Secondary | `text-[#706f6c]` | `dark:text-[#A1A09A]` |
| Border | `border-[#e3e3e0]` | `dark:border-[#3E3E3A]` |

### Typography Scale

```blade
{{-- Headings --}}
<h1 class="text-5xl lg:text-6xl font-semibold leading-tight">Hero Heading</h1>
<h2 class="text-4xl lg:text-5xl font-semibold">Section Heading</h2>
<h3 class="text-3xl lg:text-4xl font-medium">Subsection Heading</h3>
<h4 class="text-2xl lg:text-3xl font-medium">Card Heading</h4>

{{-- Body Text --}}
<p class="text-lg leading-relaxed">Large body text</p>
<p class="text-base leading-normal">Normal body text</p>
<p class="text-sm leading-normal">Small text</p>
<span class="text-xs uppercase tracking-wider">Caption/Label</span>
```

### Spacing System

```css
/* Section Padding */
.section-mobile  { @apply py-16; }      /* 64px vertical */
.section-desktop { @apply py-24; }      /* 96px vertical */

/* Container */
.container-base  { @apply max-w-7xl mx-auto px-4 sm:px-6 lg:px-8; }

/* Grid Gaps */
.gap-cards       { @apply gap-6; }      /* Card grids */
.gap-columns     { @apply gap-8 lg:gap-12; } /* Two-column layouts */
```

### Responsive Breakpoints

```css
/* Tailwind v4 defaults */
sm:  640px   /* Mobile landscape, small tablets */
md:  768px   /* Tablets */
lg:  1024px  /* Desktop */
xl:  1280px  /* Large desktop */
2xl: 1536px  /* Extra large */

/* Common Grid Patterns */
grid-cols-1 sm:grid-cols-2 lg:grid-cols-4  /* Services, logos */
grid-cols-2 lg:grid-cols-4                 /* Stats */
grid-cols-1 md:grid-cols-3                 /* Footer */
grid-cols-1 lg:grid-cols-2                 /* Two-column sections */
```

---

## 🧩 Component Library

### 1. Navbar Component
**File:** `resources/views/components/navbar.blade.php`

```blade
{{-- Usage: <x-navbar /> --}}
<nav class="sticky top-0 z-50 h-16 bg-white/80 dark:bg-[#161615]/80 backdrop-blur-md border-b border-[#e3e3e0] dark:border-[#3E3E3A]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center justify-between">
    {{-- Logo --}}
    <a href="/" class="text-xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">
      Paperku
    </a>
    
    {{-- Desktop Menu --}}
    <div class="hidden md:flex items-center gap-8">
      <a href="#" class="text-sm text-[#706f6c] dark:text-[#A1A09A] hover:text-[#1b1b18] dark:hover:text-[#EDEDEC] transition-colors">Home</a>
      <a href="#services" class="text-sm text-[#706f6c] dark:text-[#A1A09A] hover:text-[#1b1b18] dark:hover:text-[#EDEDEC] transition-colors">Services</a>
      <a href="#products" class="text-sm text-[#706f6c] dark:text-[#A1A09A] hover:text-[#1b1b18] dark:hover:text-[#EDEDEC] transition-colors">Products</a>
      <a href="#contact" class="text-sm text-[#706f6c] dark:text-[#A1A09A] hover:text-[#1b1b18] dark:hover:text-[#EDEDEC] transition-colors">Get in Touch</a>
    </div>
    
    {{-- Mobile Menu Button --}}
    <button @click="$store.menu.toggle()" class="md:hidden">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>
  </div>
</nav>
```

### 2. Service Card Component
**File:** `resources/views/components/service-card.blade.php`  
**Props:** `title` (required), `href` (default: '#')

```blade
{{-- Usage: 
<x-service-card title="Marketing Materials" href="/services/marketing">
  <span class="text-4xl">📄</span>
</x-service-card>
--}}

@props(['title', 'href' => '#'])

<a href="{{ $href }}" class="group block p-6 bg-white dark:bg-[#161615] border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-lg hover:shadow-lg hover:scale-105 transition-all duration-300">
  {{-- Icon Slot --}}
  <div class="mb-4">
    {{ $slot }}
  </div>
  
  {{-- Title --}}
  <h3 class="text-lg font-medium text-[#1b1b18] dark:text-[#EDEDEC] mb-2">
    {{ $title }}
  </h3>
  
  {{-- Learn More Link --}}
  <span class="text-sm text-[#706f6c] dark:text-[#A1A09A] group-hover:text-[#f53003] dark:group-hover:text-[#FF4433] transition-colors">
    Learn more →
  </span>
</a>
```

### 3. Stat Item Component
**File:** `resources/views/components/stat-item.blade.php`  
**Props:** `number` (required), `label` (required)

```blade
{{-- Usage: <x-stat-item number="1000+" label="Project Finished" /> --}}

@props(['number', 'label'])

<div class="text-center">
  <div class="text-4xl lg:text-5xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-2">
    {{ $number }}
  </div>
  <div class="text-sm uppercase tracking-wide text-[#706f6c] dark:text-[#A1A09A]">
    {{ $label }}
  </div>
</div>
```

### 4. Footer Component
**File:** `resources/views/components/footer.blade.php`

```blade
{{-- Usage: <x-footer /> --}}
<footer class="bg-gray-100 dark:bg-[#161615] border-t border-[#e3e3e0] dark:border-[#3E3E3A]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    {{-- Three Column Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
      {{-- Column 1: Branding --}}
      <div>
        <h3 class="text-xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-3">Paperku</h3>
        <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">
          The leader in quality custom print in Surabaya
        </p>
      </div>
      
      {{-- Column 2: Quick Links --}}
      <div>
        <h4 class="text-sm font-semibold text-[#1b1b18] dark:text-[#EDEDEC] uppercase tracking-wider mb-3">Quick Links</h4>
        <ul class="space-y-2">
          <li><a href="#" class="text-sm text-[#706f6c] dark:text-[#A1A09A] hover:text-[#1b1b18] dark:hover:text-[#EDEDEC]">Home</a></li>
          <li><a href="#services" class="text-sm text-[#706f6c] dark:text-[#A1A09A] hover:text-[#1b1b18] dark:hover:text-[#EDEDEC]">Services</a></li>
          <li><a href="#products" class="text-sm text-[#706f6c] dark:text-[#A1A09A] hover:text-[#1b1b18] dark:hover:text-[#EDEDEC]">Products</a></li>
          <li><a href="#contact" class="text-sm text-[#706f6c] dark:text-[#A1A09A] hover:text-[#1b1b18] dark:hover:text-[#EDEDEC]">Contact</a></li>
        </ul>
      </div>
      
      {{-- Column 3: Contact --}}
      <div>
        <h4 class="text-sm font-semibold text-[#1b1b18] dark:text-[#EDEDEC] uppercase tracking-wider mb-3">Contact</h4>
        <ul class="space-y-2 text-sm text-[#706f6c] dark:text-[#A1A09A]">
          <li>support@example.com</li>
          <li>+6281-0066-8977</li>
          <li>Surabaya, Indonesia</li>
        </ul>
      </div>
    </div>
    
    {{-- Bottom Section --}}
    <div class="pt-8 border-t border-[#e3e3e0] dark:border-[#3E3E3A] flex flex-col md:flex-row justify-between items-center gap-4">
      <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">
        Copyright © 2025 Paperku. All rights reserved
      </p>
      <div class="flex gap-4 text-xs text-[#706f6c] dark:text-[#A1A09A]">
        <span>VISA</span>
        <span>PayPal</span>
        <span>Bitcoin</span>
        <span>Amazon Pay</span>
      </div>
    </div>
  </div>
</footer>
```

### 5. Section Heading Component (Optional)
**File:** `resources/views/components/section-heading.blade.php`  
**Props:** `title` (required), `subtitle` (optional)

```blade
{{-- Usage: 
<x-section-heading 
  title="Our Services" 
  subtitle="Professional printing solutions for all your needs" 
/>
--}}

@props(['title', 'subtitle' => null])

<div class="text-center mb-12">
  <h2 class="text-3xl lg:text-4xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-4">
    {{ $title }}
  </h2>
  @if($subtitle)
    <p class="text-lg text-[#706f6c] dark:text-[#A1A09A]">
      {{ $subtitle }}
    </p>
  @endif
</div>
```

---

## 📦 Common Patterns

### Section Container
```blade
<section class="py-16 lg:py-24 bg-white dark:bg-[#0a0a0a]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    {{-- Section content --}}
  </div>
</section>
```

### Alternate Background Section
```blade
<section class="py-16 lg:py-24 bg-gray-50 dark:bg-[#161615]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    {{-- Section content --}}
  </div>
</section>
```

### Button - Primary
```blade
<a href="#" class="inline-block px-8 py-3 bg-[#1b1b18] dark:bg-white text-white dark:text-[#1b1b18] rounded-sm hover:bg-black dark:hover:bg-gray-200 transition-colors font-medium">
  Button Text
</a>
```

### Button - Secondary (Outline)
```blade
<a href="#" class="inline-block px-6 py-2 border border-[#1b1b18] dark:border-white text-[#1b1b18] dark:text-white rounded-sm hover:bg-[#1b1b18] hover:text-white dark:hover:bg-white dark:hover:text-[#1b1b18] transition-colors">
  Button Text
</a>
```

### Card Pattern
```blade
<div class="p-6 bg-white dark:bg-[#161615] border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-lg shadow-sm hover:shadow-md transition-shadow">
  {{-- Card content --}}
</div>
```

### Two-Column Layout
```blade
<div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
  {{-- Column 1 --}}
  <div>
    {{-- Content or image --}}
  </div>
  
  {{-- Column 2 --}}
  <div>
    {{-- Content or image --}}
  </div>
</div>
```

### Service Grid
```blade
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
  <x-service-card title="Marketing Materials">
    <span class="text-4xl">📄</span>
  </x-service-card>
  {{-- More cards... --}}
</div>
```

### Stats Grid
```blade
<div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
  <x-stat-item number="1000+" label="Project Finished" />
  <x-stat-item number="99%" label="Satisfied Clients" />
  <x-stat-item number="15+" label="Years Experience" />
  <x-stat-item number="4" label="Opened Location" />
</div>
```

---

## 🎭 Alpine.js Patterns

### Setup (in layout head)
```html
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
```

### Mobile Menu Toggle
```blade
{{-- In navbar component --}}
<div x-data="{ open: false }">
  <button @click="open = !open" class="md:hidden">
    <svg>...</svg>
  </button>
  
  <nav x-show="open" x-cloak class="md:hidden">
    {{-- Mobile menu items --}}
  </nav>
</div>
```

### Dark Mode Toggle (Optional)
```blade
<button @click="document.documentElement.classList.toggle('dark')" class="p-2">
  <svg class="w-5 h-5">...</svg>
</button>
```

### Form Submission State
```blade
<form x-data="{ loading: false }" @submit="loading = true">
  <button type="submit" :disabled="loading" x-text="loading ? 'Sending...' : 'Send Message'">
  </button>
</form>
```

---

## 📧 Contact Form Pattern

```blade
<section id="contact" class="py-16 lg:py-24 bg-white dark:bg-[#0a0a0a]">
  <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <h2 class="text-3xl lg:text-4xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-4">
        Get in Touch
      </h2>
      <p class="text-lg text-[#706f6c] dark:text-[#A1A09A]">
        Have a project in mind? Let's discuss how we can help.
      </p>
    </div>
    
    <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
      @csrf
      
      <div>
        <label for="name" class="block text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Name</label>
        <input 
          type="text" 
          id="name" 
          name="name" 
          required
          class="w-full px-4 py-2 border border-[#e3e3e0] dark:border-[#3E3E3A] bg-white dark:bg-[#161615] text-[#1b1b18] dark:text-[#EDEDEC] rounded-sm focus:outline-none focus:ring-2 focus:ring-[#1b1b18] dark:focus:ring-white"
        >
      </div>
      
      <div>
        <label for="email" class="block text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Email</label>
        <input 
          type="email" 
          id="email" 
          name="email" 
          required
          class="w-full px-4 py-2 border border-[#e3e3e0] dark:border-[#3E3E3A] bg-white dark:bg-[#161615] text-[#1b1b18] dark:text-[#EDEDEC] rounded-sm focus:outline-none focus:ring-2 focus:ring-[#1b1b18] dark:focus:ring-white"
        >
      </div>
      
      <div>
        <label for="phone" class="block text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Phone (Optional)</label>
        <input 
          type="tel" 
          id="phone" 
          name="phone"
          class="w-full px-4 py-2 border border-[#e3e3e0] dark:border-[#3E3E3A] bg-white dark:bg-[#161615] text-[#1b1b18] dark:text-[#EDEDEC] rounded-sm focus:outline-none focus:ring-2 focus:ring-[#1b1b18] dark:focus:ring-white"
        >
      </div>
      
      <div>
        <label for="message" class="block text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Message</label>
        <textarea 
          id="message" 
          name="message" 
          rows="5" 
          required
          class="w-full px-4 py-2 border border-[#e3e3e0] dark:border-[#3E3E3A] bg-white dark:bg-[#161615] text-[#1b1b18] dark:text-[#EDEDEC] rounded-sm focus:outline-none focus:ring-2 focus:ring-[#1b1b18] dark:focus:ring-white"
        ></textarea>
      </div>
      
      <button type="submit" class="w-full px-8 py-3 bg-[#1b1b18] dark:bg-white text-white dark:text-[#1b1b18] rounded-sm hover:bg-black dark:hover:bg-gray-200 transition-colors font-medium">
        Send Message
      </button>
    </form>
  </div>
</section>
```

---

## 📱 WhatsApp Floating Button

```blade
{{-- Add before </body> in layout --}}
<a 
  href="https://wa.me/628100668977" 
  target="_blank"
  class="fixed bottom-6 right-6 z-50 w-14 h-14 bg-[#25D366] hover:bg-[#20BA5A] rounded-full flex items-center justify-center shadow-lg hover:scale-110 transition-all duration-300"
  aria-label="Chat on WhatsApp"
>
  <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
  </svg>
</a>
```

---

## 🛠️ Code Quality Rules

### ✅ Always Do
- Use dark mode classes for EVERY styled element
- Mobile-first: Start with base class, add `sm:` `lg:` for larger screens
- Reuse components: If markup repeats 2+, make it a component
- Semantic HTML: Use `<nav>`, `<section>`, `<article>`, `<footer>`
- Accessible: Add `aria-label` to icon-only buttons
- Consistent spacing: Use design system values (py-16, py-24, gap-6, gap-8)

### ❌ Never Do
- No custom CSS (use Tailwind utilities only)
- No inline styles (`style=""`)
- No hardcoded colors outside design system
- No `w-[fixed]` widths (use `max-w-*` instead)
- No `!important` (fix specificity properly)
- No empty `<div>` for spacing (use margin/padding classes)

### Blade Syntax Standards
```blade
{{-- Good: Props with defaults --}}
@props(['title', 'href' => '#'])

{{-- Good: Conditional rendering --}}
@if($subtitle)
  <p>{{ $subtitle }}</p>
@endif

{{-- Good: Loops --}}
@foreach($services as $service)
  <x-service-card :title="$service->name" />
@endforeach

{{-- Good: Escaping --}}
{{ $userInput }}  {{-- Auto-escaped --}}
{!! $trustedHtml !!}  {{-- Unescaped --}}
```

---

## 📋 Quick Reference

### Layout Structure
```
resources/views/
├── layouts/
│   └── app.blade.php           # Base: <!DOCTYPE>, <head>, navbar, footer
├── components/
│   ├── navbar.blade.php        # Sticky navigation
│   ├── footer.blade.php        # Site footer
│   ├── service-card.blade.php  # Service grid item
│   ├── stat-item.blade.php     # Stat display
│   └── section-heading.blade.php # Section titles
└── landing.blade.php           # Main landing page
```

### Content Copy
```
Hero:
- "The Leader in Quality Custom Print"
- "Turn your ideas into premium products that leave a lasting impression"

Services (8):
Marketing Materials, Signs & Posters, Clothings & Bags, Merchandises,
Fuji Film Photos Print, Labels & Stickers, Neon Box, Wallpapers Custom

Stats (4):
1000+ Projects | 99% Satisfied | 15+ Years | 4 Locations

Materials:
- "Best materials, for the best result"
- "We use only the finest materials to ensure every print delivers superior quality, rich colors, and a flawless finish."
```

---

## 🎓 Context for Suggestions

When generating code:
1. **Prioritize simplicity** - Hardcode first, abstract later
2. **Copy existing patterns** - Match `welcome.blade.php` structure
3. **Include dark mode** - Every color needs `dark:` variant
4. **Make it responsive** - Test mental model: 375px, 768px, 1280px
5. **Use components** - Leverage `<x-*>` for repeated markup
6. **Stay semantic** - Proper HTML5 tags, accessibility attributes

This is a Phase 1 landing page. Focus on visual quality and responsive design. Interactivity (mobile menu, dark toggle) comes in Phase 2.

---

**Last Updated:** 2026-07-31  
**Questions?** Reference `/implementation_plan.md` for full context.
