# Paperku Web - GitHub Copilot Instructions

**Project:** Paperku Landing Page - Custom Print Services  
**Stack:** Laravel 13 + Tailwind CSS v4 + Vite + Alpine.js 3.x  
**Font:** Instrument Sans (400, 500, 600)  
**Last Updated:** 2026-08-01

---

## 🔥 CORE PRINCIPLES (READ THIS FIRST)

**CAVEMAN CODING:** Write simple, direct code. No abstractions. Hardcode first. If you're thinking about patterns, you're overthinking.

**PONYTAIL LAZY:** Copy-paste is your best friend. Reuse aggressively. Let framework do the work. Never reinvent.

**WHY:** These principles = faster development + less token usage + working code faster.

### Token Conservation Rules
- ✅ Hardcode values first, abstract only if needed 3+ times
- ✅ Copy working patterns from `welcome.blade.php`
- ✅ Use Tailwind utilities (ZERO custom CSS)
- ✅ Batch create files (don't drip feed)
- ✅ Write complete code (no "// rest here" comments)
- ❌ NO premature optimization or over-engineering
- ❌ NO custom CSS when Tailwind utility exists
- ❌ NO asking permission for standard patterns

---

## 📸 Design References

**Visual Source:** `/screenshots/`
- **pages/** - Full page layouts
  - `Landing Page.png` - Complete homepage design
  - `Page Service.png` - Services section detail
  - `Page Teknologi.png` - Technology section detail
- **images/** - Component details (1.png to 16.png)

When uncertain about layout or styling, reference these screenshots.

---

## 🎯 Project Context

Professional landing page for Paperku (custom printing service, Surabaya, Indonesia). Modern, clean design with native dark mode support.

**Design Philosophy:**
- **Mobile-first:** Start at 320px, scale to 1920px+
- **Dark mode native:** Both modes designed, not inverted
- **Component reuse:** If markup repeats 2+, make it a component

---

## 🎨 Design System

### Color Palette (Tailwind Class Mappings)

| Token | Light Mode | Dark Mode |
|-------|-----------|-----------|
| BG Primary | `bg-[#FDFDFC]` | `dark:bg-[#0a0a0a]` |
| BG Secondary | `bg-white` | `dark:bg-[#161615]` |
| BG Tertiary | `bg-gray-50` | `dark:bg-[#1a1a1a]` |
| Text Primary | `text-[#1b1b18]` | `dark:text-[#EDEDEC]` |
| Text Secondary | `text-[#706f6c]` | `dark:text-[#A1A09A]` |
| Border | `border-[#e3e3e0]` | `dark:border-[#3E3E3A]` |
| Accent | `text-[#f53003]` | `dark:text-[#FF4433]` |

### Typography Scale

```blade
{{-- Headings --}}
<h1 class="text-5xl lg:text-6xl font-semibold leading-tight">Hero</h1>
<h2 class="text-4xl lg:text-5xl font-semibold">Section</h2>
<h3 class="text-3xl lg:text-4xl font-medium">Subsection</h3>
<h4 class="text-2xl lg:text-3xl font-medium">Card</h4>

{{-- Body --}}
<p class="text-lg leading-relaxed">Large body</p>
<p class="text-base leading-normal">Normal body</p>
<p class="text-sm leading-normal">Small text</p>
<span class="text-xs uppercase tracking-wider">Label</span>
```

### Spacing Standards

```css
/* Section Padding */
Mobile:  py-16 (64px)
Desktop: py-24 (96px)

/* Container */
Max Width: max-w-7xl (1280px)
Padding:   px-4 sm:px-6 lg:px-8

/* Grid Gaps */
Cards:     gap-6
Columns:   gap-8 lg:gap-12
```

### Responsive Breakpoints

```
sm:  640px  (Mobile landscape)
md:  768px  (Tablet)
lg:  1024px (Desktop)
xl:  1280px (Large desktop)
2xl: 1536px (Extra large)

Common Grid Patterns:
- Services: grid-cols-1 sm:grid-cols-2 lg:grid-cols-4
- Stats: grid-cols-2 lg:grid-cols-4
- Footer: grid-cols-1 md:grid-cols-3
- Two-column: grid-cols-1 lg:grid-cols-2
```

---

## 🧩 Component Library

### 1. Navbar Component
**File:** `resources/views/components/navbar.blade.php`

```blade
{{-- Usage: <x-navbar /> --}}
<nav class="sticky top-0 z-50 h-16 bg-white/80 dark:bg-[#161615]/80 backdrop-blur-md border-b border-[#e3e3e0] dark:border-[#3E3E3A]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center justify-between">
    <a href="/" class="text-xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">
      Paperku
    </a>
    
    <div class="hidden md:flex items-center gap-8">
      <a href="#" class="text-sm text-[#706f6c] dark:text-[#A1A09A] hover:text-[#1b1b18] dark:hover:text-[#EDEDEC] transition-colors">Home</a>
      <a href="#services" class="text-sm text-[#706f6c] dark:text-[#A1A09A] hover:text-[#1b1b18] dark:hover:text-[#EDEDEC] transition-colors">Services</a>
      <a href="#products" class="text-sm text-[#706f6c] dark:text-[#A1A09A] hover:text-[#1b1b18] dark:hover:text-[#EDEDEC] transition-colors">Products</a>
      <a href="#contact" class="text-sm text-[#706f6c] dark:text-[#A1A09A] hover:text-[#1b1b18] dark:hover:text-[#EDEDEC] transition-colors">Get in Touch</a>
    </div>
    
    <button @click="$store.menu.toggle()" class="md:hidden">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>
  </div>
</nav>
```

---

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
  <div class="mb-4">
    {{ $slot }}
  </div>
  
  <h3 class="text-lg font-medium text-[#1b1b18] dark:text-[#EDEDEC] mb-2">
    {{ $title }}
  </h3>
  
  <span class="text-sm text-[#706f6c] dark:text-[#A1A09A] group-hover:text-[#f53003] dark:group-hover:text-[#FF4433] transition-colors">
    Learn more →
  </span>
</a>
```

---

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

---

### 4. Client Logo Component
**File:** `resources/views/components/client-logo.blade.php`  
**Props:** `name` (required), `src` (optional)

```blade
{{-- Usage: 
<x-client-logo name="BCA" />
<x-client-logo name="Toyota" src="/images/clients/toyota.png" />
--}}

@props(['name', 'src' => null])

<div class="flex items-center justify-center p-6 grayscale hover:grayscale-0 transition-all duration-300">
  @if($src)
    <img src="{{ $src }}" alt="{{ $name }}" class="h-12 object-contain">
  @else
    <div class="text-lg font-semibold text-gray-400 dark:text-gray-600">{{ $name }}</div>
  @endif
</div>
```

---

### 5. Footer Component
**File:** `resources/views/components/footer.blade.php`

```blade
{{-- Usage: <x-footer /> --}}
<footer class="bg-gray-100 dark:bg-[#161615] border-t border-[#e3e3e0] dark:border-[#3E3E3A]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
      <div>
        <h3 class="text-xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-3">Paperku</h3>
        <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">
          The leader in quality custom print in Surabaya
        </p>
      </div>
      
      <div>
        <h4 class="text-sm font-semibold text-[#1b1b18] dark:text-[#EDEDEC] uppercase tracking-wider mb-3">Quick Links</h4>
        <ul class="space-y-2">
          <li><a href="#" class="text-sm text-[#706f6c] dark:text-[#A1A09A] hover:text-[#1b1b18] dark:hover:text-[#EDEDEC]">Home</a></li>
          <li><a href="#services" class="text-sm text-[#706f6c] dark:text-[#A1A09A] hover:text-[#1b1b18] dark:hover:text-[#EDEDEC]">Services</a></li>
          <li><a href="#products" class="text-sm text-[#706f6c] dark:text-[#A1A09A] hover:text-[#1b1b18] dark:hover:text-[#EDEDEC]">Products</a></li>
          <li><a href="#contact" class="text-sm text-[#706f6c] dark:text-[#A1A09A] hover:text-[#1b1b18] dark:hover:text-[#EDEDEC]">Contact</a></li>
        </ul>
      </div>
      
      <div>
        <h4 class="text-sm font-semibold text-[#1b1b18] dark:text-[#EDEDEC] uppercase tracking-wider mb-3">Contact</h4>
        <ul class="space-y-2 text-sm text-[#706f6c] dark:text-[#A1A09A]">
          <li>support@example.com</li>
          <li>+6281-0066-8977</li>
          <li>Surabaya, Indonesia</li>
        </ul>
      </div>
    </div>
    
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

---

### 6. Section Heading Component (Optional)
**File:** `resources/views/components/section-heading.blade.php`  
**Props:** `title` (required), `subtitle` (optional)

```blade
{{-- Usage: 
<x-section-heading 
  title="Our Services" 
  subtitle="Professional printing solutions" 
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
    {{-- Content --}}
  </div>
</section>
```

### Alternate Background Section
```blade
<section class="py-16 lg:py-24 bg-gray-50 dark:bg-[#161615]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    {{-- Content --}}
  </div>
</section>
```

### Button - Primary
```blade
<a href="#" class="inline-block px-8 py-3 bg-[#1b1b18] dark:bg-white text-white dark:text-[#1b1b18] rounded-sm hover:bg-black dark:hover:bg-gray-200 transition-colors font-medium">
  Button Text
</a>
```

### Button - Secondary
```blade
<a href="#" class="inline-block px-6 py-2 border border-[#1b1b18] dark:border-white text-[#1b1b18] dark:text-white rounded-sm hover:bg-[#1b1b18] hover:text-white dark:hover:bg-white dark:hover:text-[#1b1b18] transition-colors">
  Button Text
</a>
```

### Card Pattern
```blade
<div class="p-6 bg-white dark:bg-[#161615] border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-lg shadow-sm hover:shadow-md transition-shadow">
  {{-- Content --}}
</div>
```

### Two-Column Layout
```blade
<div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
  <div>{{-- Column 1 --}}</div>
  <div>{{-- Column 2 --}}</div>
</div>
```

### Service Grid
```blade
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
  <x-service-card title="Marketing Materials">
    <span class="text-4xl">📄</span>
  </x-service-card>
  {{-- 7 more cards... --}}
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
<div x-data="{ open: false }">
  <button @click="open = !open">Menu</button>
  <nav x-show="open" x-cloak>{{-- Menu items --}}</nav>
</div>
```

### Dark Mode Toggle
```blade
<button @click="document.documentElement.classList.toggle('dark')">
  Toggle Dark Mode
</button>
```

### Form Loading State
```blade
<form x-data="{ loading: false }" @submit="loading = true">
  <button :disabled="loading" x-text="loading ? 'Sending...' : 'Send'"></button>
</form>
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
- Dark mode classes for EVERY colored element
- Mobile-first: `text-base lg:text-lg` (not reverse)
- Reuse components if markup repeats 2+ times
- Semantic HTML: `<nav>`, `<section>`, `<footer>`
- Accessible: `aria-label` on icon-only buttons
- Design system values: `py-16`, `py-24`, `gap-6`, `gap-8`

### ❌ Never Do
- Custom CSS (Tailwind only)
- Inline styles (`style=""`)
- Hardcoded colors outside design system
- Fixed widths (`w-[500px]` - use `max-w-*`)
- `!important` (fix specificity properly)
- Empty divs for spacing (use margin/padding classes)

### Blade Syntax Standards
```blade
{{-- Good: Props with defaults --}}
@props(['title', 'href' => '#'])

{{-- Good: Conditional rendering --}}
@if($subtitle)
  <p>{{ $subtitle }}</p>
@endif

{{-- Good: Safe output --}}
{{ $userInput }}  {{-- Auto-escaped --}}
```

---

## 📋 Quick Reference

### Landing Page Structure (5 Main Sections)
```
1. Hero - Full-width, gradient background, centered CTA
2. Services - 8-card grid, service offerings
3. Technology - Client logos, 4-column grid
4. Stats - 4 metrics in 2/4 column grid
5. Materials - Two-column, image + content
```

### Content Copy

**Hero:**
- Heading: "The Leader in Quality Custom Print"
- Subheading: "Turn your ideas into premium products that leave a lasting impression"
- Button: "View Our Services"

**Services (8 cards):**
Marketing Materials, Signs & Posters, Clothings & Bags, Merchandises, Fuji Film Photos Print, Labels & Stickers, Neon Box, Wallpapers Custom

**Technology:**
- Banner: "POWERED BY THE NEWEST PRINTING TECHNOLOGY IN SURABAYA"
- Heading: "Discover our newest printing technology"
- Logos: BCA, Pizza, Mandiri, TOYOTA

**Stats:**
- Title: "PERFECTION IN PRINTING"
- 1000+ | Project Finished
- 99% | Satisfied Clients
- 15+ | Years Experience
- 4 | Opened Location

**Materials:**
- Heading: "Best materials, for the best result"
- Body: "We use only the finest materials to ensure every print delivers superior quality, rich colors, and a flawless finish."
- Buttons: "Discover Now!" + "Get in Touch"

---

## 🎓 Context for Suggestions

When generating code:
1. **Prioritize simplicity** - Hardcode first, abstract later
2. **Copy existing patterns** - Match `welcome.blade.php` structure
3. **Include dark mode** - Every color needs `dark:` variant
4. **Make it responsive** - Test mental model: 375px, 768px, 1280px
5. **Use components** - Leverage `<x-*>` for repeated markup
6. **Stay semantic** - Proper HTML5 tags, accessibility

This is Phase 1: Static landing page. Focus on visual quality and responsive design.

---

**Reference:** See `.kiro/steering/conventions.md` for detailed development workflow and troubleshooting.
