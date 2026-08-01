# Paperku Web - Kiro Development Conventions

**Project:** Paperku Landing Page - Custom Print Services  
**Tech Stack:** Laravel 13 + Tailwind CSS v4 + Vite + Alpine.js 3.x  
**PHP:** 8.3+ | **Node:** 20 LTS | **Font:** Instrument Sans  
**Last Updated:** 2026-08-01

---

## 🔥 CORE PRINCIPLES

**CAVEMAN CODING:** Write simple, direct code. No premature abstraction. Hardcode first. If it works, ship it.

**PONYTAIL LAZY:** Aggressively reuse patterns. Let framework handle complexity. Copy-paste is your best friend.

**MOBILE-FIRST:** Design starts at 320px, progressively enhances to desktop.

**DARK MODE NATIVE:** Both modes are designed, not inverted.

💡 **WHY:** These principles = faster development + less token usage + working code faster.

---

## 📸 Visual References

**Design screenshots located in `/screenshots/`:**
- **pages/** - Full page layouts
  - `Landing Page.png` - Complete homepage design
  - `Page Service.png` - Services section detailed view
  - `Page Teknologi.png` - Technology section detailed view
- **images/** - Component-level details (1.png to 16.png)

When uncertain about implementation, reference these screenshots.

---

## 🎯 Project Mission

Build a professional, responsive landing page for Paperku (custom printing service in Surabaya) with native dark mode support. The design prioritizes simplicity, reusability, and mobile-first responsive layout from 320px to 1920px+.

---

## 📁 Project Structure

```
paperku/web/
├── app/
│   └── Http/Controllers/          # Future: ContactController
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php          # Base layout
│   │   ├── components/
│   │   │   ├── navbar.blade.php       # Sticky nav
│   │   │   ├── footer.blade.php       # Site footer
│   │   │   ├── service-card.blade.php # Service grid item
│   │   │   ├── stat-item.blade.php    # Stat display
│   │   │   ├── client-logo.blade.php  # Logo with hover
│   │   │   └── section-heading.blade.php # Optional heading
│   │   └── landing.blade.php          # Main page (5 sections)
│   ├── css/
│   │   └── app.css                    # Tailwind v4 config
│   └── js/
│       └── app.js                     # Alpine.js init
├── routes/
│   └── web.php                        # Route::get('/', 'landing')
├── public/
│   └── images/                        # Future: Real assets
├── .github/instructions/
│   └── web.instructions.md            # Copilot guide
├── .kiro/steering/
│   └── conventions.md                 # This file
├── implementation_plan.md             # Full project spec
├── composer.json                      # Laravel + Pint
├── package.json                       # Vite, Alpine.js
└── vite.config.js                     # Asset bundling
```

---

## 🎨 Design System Reference

### Color Tokens

| Token | Light Mode | Dark Mode | Usage |
|-------|------------|-----------|-------|
| BG Primary | `#FDFDFC` | `#0a0a0a` | Main background |
| BG Secondary | `#FFFFFF` | `#161615` | Cards, elevated |
| BG Tertiary | `#F8F9FA` | `#1a1a1a` | Alternate sections |
| Text Primary | `#1b1b18` | `#EDEDEC` | Headings, important |
| Text Secondary | `#706f6c` | `#A1A09A` | Body, descriptions |
| Border | `#e3e3e0` | `#3E3E3A` | Dividers, borders |
| Accent | `#f53003` | `#FF4433` | CTAs, hover states |

### Typography Scale

| Element | Mobile | Desktop | Weight |
|---------|--------|---------|--------|
| Hero Heading | `text-5xl` | `lg:text-6xl` | `font-semibold` |
| Section Heading | `text-4xl` | `lg:text-5xl` | `font-semibold` |
| Subsection | `text-3xl` | `lg:text-4xl` | `font-medium` |
| Card Heading | `text-2xl` | `lg:text-3xl` | `font-medium` |
| Body Large | `text-lg` | - | `leading-relaxed` |
| Body Normal | `text-base` | - | `leading-normal` |
| Small Text | `text-sm` | - | `leading-normal` |
| Caption | `text-xs` | - | `uppercase tracking-wider` |

### Spacing Standards

```css
/* Section Padding */
Mobile:  py-16    /* 64px */
Desktop: py-24    /* 96px */

/* Container */
Max Width: max-w-7xl    /* 1280px */
Padding:   px-4 sm:px-6 lg:px-8

/* Grid Gaps */
Cards:     gap-6        /* 24px between cards */
Columns:   gap-8 lg:gap-12   /* Two-column layouts */
```

### Responsive Breakpoints

```
sm:  640px   → Mobile landscape, small tablets
md:  768px   → Tablets
lg:  1024px  → Desktop
xl:  1280px  → Large desktop
2xl: 1536px  → Extra large
```

---

## 🧩 Component Architecture

### Component Hierarchy

```
app.blade.php (Base Layout)
├── <x-navbar />
├── @yield('content')
│   └── landing.blade.php (5 main sections)
│       ├── 1. Hero Section
│       ├── 2. Services Grid (8x <x-service-card />)
│       ├── 3. Technology Section (4x <x-client-logo />)
│       ├── 4. Stats Grid (4x <x-stat-item />)
│       └── 5. Materials Section
└── <x-footer />
```

### Component Signatures

#### 1. Navbar
```blade
<x-navbar />
```
- **Props:** None (static content)
- **Features:** Sticky positioning, mobile hamburger, desktop menu
- **State:** Uses Alpine.js for mobile menu toggle

#### 2. Service Card
```blade
<x-service-card title="Marketing Materials" href="/services/marketing">
  <span class="text-4xl">📄</span>
</x-service-card>
```
- **Props:** `title` (required), `href` (optional, default: '#')
- **Slot:** Icon/emoji content
- **Features:** Hover scale, shadow transition, "Learn more →" link

#### 3. Stat Item
```blade
<x-stat-item number="1000+" label="Project Finished" />
```
- **Props:** `number` (required), `label` (required)
- **Features:** Large number display, uppercase label, center-aligned

#### 4. Client Logo
```blade
<x-client-logo name="BCA" />
<x-client-logo name="Toyota" src="/images/clients/toyota.png" />
```
- **Props:** `name` (required), `src` (optional)
- **Features:** Grayscale default, color on hover, text fallback

#### 5. Footer
```blade
<x-footer />
```
- **Props:** None (static content)
- **Features:** 3-column grid (mobile stacks), copyright, payment logos

#### 6. Section Heading (Optional)
```blade
<x-section-heading title="Our Services" subtitle="Professional printing solutions" />
```
- **Props:** `title` (required), `subtitle` (optional)
- **Features:** Center-aligned, consistent typography

---

## 🚀 Development Workflow

### Phase 1: Foundation (Current Phase)
**Goal:** Build static, responsive landing page with 5 main sections

**Tasks:**
1. ✅ Set up Laravel 13 + Tailwind v4 + Vite
2. ✅ Configure Instrument Sans font
3. ✅ Set up dark mode infrastructure
4. 🔨 Create base layout (`layouts/app.blade.php`)
5. 🔨 Build reusable components (navbar, footer, cards, stats, client-logo)
6. 🔨 Implement landing page with 5 sections
7. 🔨 Add WhatsApp floating button
8. 🔨 Test responsive behavior (mobile, tablet, desktop)
9. 🔨 Test dark mode across all sections

### Phase 2: Interactivity (Future)
- Mobile menu toggle functionality
- Dark mode toggle button
- Smooth scroll navigation
- Stats counter animation on scroll
- Contact form with validation
- Image lazy loading

### Phase 3: Content Management (Future)
- Service detail pages
- Product detail pages
- Portfolio section
- Filament admin panel

---

## 📋 File Creation Order

When building from scratch, follow this sequence:

### Step 1: Base Layout
**File:** `resources/views/layouts/app.blade.php`

**Requirements:**
- Copy structure from `welcome.blade.php` (head with @fonts, @vite)
- Include Alpine.js CDN in head
- Body: Same dark mode classes
- Structure: `<x-navbar />` → `@yield('content')` → `<x-footer />`
- Add WhatsApp floating button before `</body>`

### Step 2: Components (Create in Batch)
**Files:**
1. `resources/views/components/navbar.blade.php`
2. `resources/views/components/service-card.blade.php`
3. `resources/views/components/stat-item.blade.php`
4. `resources/views/components/client-logo.blade.php`
5. `resources/views/components/footer.blade.php`
6. `resources/views/components/section-heading.blade.php` (optional)

**Tip:** Create all components in one operation, don't create them incrementally.

### Step 3: Landing Page
**File:** `resources/views/landing.blade.php`

**Structure:**
```blade
@extends('layouts.app')

@section('content')
  {{-- Section 1: Hero --}}
  {{-- Section 2: Services Grid (8 cards) --}}
  {{-- Section 3: Technology/Client Logos --}}
  {{-- Section 4: Stats (4 metrics) --}}
  {{-- Section 5: Materials/Quality --}}
@endsection
```

### Step 4: Route Configuration
**File:** `routes/web.php`

```php
Route::get('/', fn() => view('landing'));
```

---

## 🎯 Decision Trees

### When to Create a Component?

```
Is markup repeated 2+ times?
├─ YES → Create Blade component
│         └─ Has variations? → Use props
│         └─ Has inner content? → Use slot
└─ NO → Keep inline in page
```

### Which Background Color?

```
Section type?
├─ Primary content (Hero, Stats) → bg-white dark:bg-[#0a0a0a]
├─ Alternate (Technology, Materials) → bg-gray-50 dark:bg-[#161615]
└─ Elevated (Cards, Navbar) → bg-white dark:bg-[#161615]
```

### Responsive Grid Pattern?

```
How many items?
├─ 2 items → grid-cols-1 lg:grid-cols-2
├─ 3 items → grid-cols-1 md:grid-cols-3
├─ 4 items (even) → grid-cols-2 lg:grid-cols-4
└─ 8 items (services) → grid-cols-1 sm:grid-cols-2 lg:grid-cols-4
```

### Button Style?

```
Action importance?
├─ Primary CTA → Filled button (bg-[#1b1b18] dark:bg-white)
└─ Secondary action → Outline button (border with hover fill)
```

---

## 🛠️ Coding Conventions

### Blade Syntax

#### ✅ Do This
```blade
{{-- Props with defaults --}}
@props(['title', 'href' => '#', 'active' => false])

{{-- Conditional rendering --}}
@if($subtitle)
  <p>{{ $subtitle }}</p>
@endif

{{-- Conditional classes --}}
<div @class(['active' => $active, 'base-class'])>

{{-- Safe output --}}
{{ $userInput }}  {{-- Auto-escaped --}}

{{-- Component with slot --}}
<x-card>
  <p>Slot content</p>
</x-card>
```

#### ❌ Don't Do This
```blade
{{-- No inline PHP logic --}}
{{ $items->count() > 0 ? 'Yes' : 'No' }}  ❌
@if($items->count() > 0) Yes @else No @endif  ✅

{{-- No unescaped user input --}}
{!! $userInput !!}  ❌
{{ $userInput }}    ✅

{{-- No style attributes --}}
<div style="color: red">  ❌
<div class="text-red-500"> ✅
```

### Tailwind CSS

#### ✅ Do This
```blade
{{-- Mobile-first responsive --}}
<div class="text-base lg:text-lg">

{{-- Dark mode for every color --}}
<p class="text-[#1b1b18] dark:text-[#EDEDEC]">

{{-- Use design system values --}}
<section class="py-16 lg:py-24">

{{-- Semantic grouping --}}
<div class="flex items-center gap-4">

{{-- Transitions on interactive elements --}}
<button class="hover:bg-gray-100 transition-colors">
```

#### ❌ Don't Do This
```blade
{{-- No fixed widths --}}
<div class="w-[500px]">  ❌
<div class="max-w-2xl"> ✅

{{-- No custom CSS --}}
<style>.custom { color: red; }</style>  ❌
<div class="text-red-500">              ✅

{{-- No missing dark mode --}}
<div class="bg-white">  ❌
<div class="bg-white dark:bg-[#161615]"> ✅

{{-- No desktop-first --}}
<div class="text-lg md:text-base">  ❌
<div class="text-base lg:text-lg">  ✅

{{-- No arbitrary values outside design system --}}
<div class="p-[23px]">  ❌
<div class="p-6">       ✅
```

### Alpine.js

#### ✅ Do This
```blade
{{-- Simple toggle --}}
<div x-data="{ open: false }">
  <button @click="open = !open">Toggle</button>
  <div x-show="open" x-cloak>Content</div>
</div>

{{-- Form loading state --}}
<form x-data="{ loading: false }" @submit="loading = true">
  <button :disabled="loading">Submit</button>
</form>

{{-- Class binding --}}
<div :class="open ? 'block' : 'hidden'">
```

#### ❌ Don't Do This
```blade
{{-- No complex logic in templates --}}
<div x-data="{ items: [], filtered: [] }" x-init="filtered = items.filter(...)">  ❌

{{-- No mixing Alpine with vanilla JS --}}
<button onclick="document.getElementById('menu').classList.toggle('open')">  ❌
```

---

## 💡 Token Conservation (CAVEMAN & PONYTAIL)

### DO (Saves Tokens):
- ✅ Hardcode values first, abstract only if needed 3+ times
- ✅ Copy working patterns from `welcome.blade.php`
- ✅ Use Tailwind utilities (no custom CSS files)
- ✅ Batch create files (don't drip feed one by one)
- ✅ Write complete code (no "// rest here" comments)
- ✅ Reuse components aggressively
- ✅ Let framework/library handle complexity

### DON'T (Wastes Tokens):
- ❌ Premature abstraction or over-engineering
- ❌ Custom CSS when Tailwind utility exists
- ❌ Creating helpers for one-time use
- ❌ Over-commenting obvious code
- ❌ Asking permission for standard patterns
- ❌ Building custom solutions when framework provides one

---

## 📱 WhatsApp Floating Button

Add before `</body>` in `layouts/app.blade.php`:

```blade
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

**Number Format:** `https://wa.me/628100668977` (country code + number, no spaces)

---

## 🧪 Testing Checklist

### Visual Testing

#### Responsive Breakpoints
- [ ] **320px:** Single column, readable text, touch-friendly
- [ ] **375px:** iPhone standard, common mobile
- [ ] **768px:** Tablet, 2-column grids activate
- [ ] **1024px:** Desktop, 4-column grids, full layout
- [ ] **1280px:** Large desktop, max-width container centered
- [ ] **1920px+:** No layout breaks, proper centering

#### Dark Mode
- [ ] All sections have dark mode styles
- [ ] Text remains readable (contrast check)
- [ ] Borders visible but subtle
- [ ] Hover states work in both modes
- [ ] No white flashes on load

#### Interactive Elements
- [ ] All buttons have hover states
- [ ] Service cards scale on hover
- [ ] Client logos grayscale → color on hover
- [ ] Links have hover color change
- [ ] WhatsApp button has hover scale

### Functional Testing

- [ ] Navbar links scroll to sections (or navigate)
- [ ] Service cards link properly
- [ ] WhatsApp button opens chat in new tab
- [ ] Mobile menu structure ready (Phase 2)
- [ ] No console errors in browser
- [ ] Page loads without layout shift

### Code Quality

- [ ] All Blade components have proper `@props`
- [ ] No inline styles in markup
- [ ] All colors use design system values
- [ ] Semantic HTML (nav, section, footer)
- [ ] Alt text on images (when added)
- [ ] Aria labels on icon-only buttons
- [ ] No repeated markup (componentized)
- [ ] Consistent spacing (design system)

---

## 🐛 Common Issues & Solutions

### Issue: Styles not applying
**Symptoms:** Tailwind classes not working, page looks unstyled  
**Solution:**
```bash
npm run dev  # Restart Vite
php artisan view:clear  # Clear Blade cache
```

### Issue: Dark mode not working
**Symptoms:** Dark classes not applying, or both modes show  
**Solution:**
- Check `<html>` has no hardcoded `class` attribute
- Manually toggle: `document.documentElement.classList.toggle('dark')`
- Verify every color has `dark:` variant

### Issue: Layout broken on mobile
**Symptoms:** Horizontal scroll, elements overflow, wrong columns  
**Solution:**
- Use `max-w-*` instead of fixed `w-[px]`
- Check grid classes: `grid-cols-1 sm:grid-cols-2 lg:grid-cols-4`
- Test in Chrome DevTools device mode (375px, 768px)

### Issue: Navbar not sticky
**Symptoms:** Navbar scrolls with page instead of staying fixed  
**Solution:**
- Ensure `sticky top-0 z-50` classes present
- Check no parent has `overflow-hidden` or `overflow-x-auto`

### Issue: Component not found
**Symptoms:** `View [components.navbar] not found`  
**Solution:**
- Check file location: `resources/views/components/navbar.blade.php`
- Laravel auto-discovers components in `components/` directory
- Use kebab-case: `<x-service-card>` not `<x-ServiceCard>`

---

## 🔧 Development Commands

### Daily Workflow
```bash
# Start development servers
npm run dev          # Vite (assets)
php artisan serve    # Laravel (backend)

# Visit: http://localhost:8000
```

### Code Formatting
```bash
# Format all PHP files with Pint
./vendor/bin/pint

# Format specific file
./vendor/bin/pint app/Http/Controllers/ContactController.php
```

### Cache Management
```bash
# Clear all caches
php artisan optimize:clear

# Clear specific caches
php artisan view:clear    # Blade templates
php artisan config:clear  # Config cache
php artisan route:clear   # Route cache
```

### Asset Building
```bash
# Development (watch mode)
npm run dev

# Production build
npm run build
```

---

## 📚 Content Reference

### Hero Section
```
Heading: The Leader in Quality Custom Print
Subheading: Turn your ideas into premium products that leave a lasting impression
CTA: View Our Services
```

### Services (8 Cards)
```
1. Marketing Materials (📄)
2. Signs & Posters (🪧)
3. Clothings & Bags (👕)
4. Merchandises (🎁)
5. Fuji Film Photos Print (📸)
6. Labels & Stickers (🏷️)
7. Neon Box (💡)
8. Wallpapers Custom (🖼️)
```

### Technology Section
```
Banner: POWERED BY THE NEWEST PRINTING TECHNOLOGY IN SURABAYA
Heading: Discover our newest printing technology
Logos: BCA, Pizza, Mandiri, TOYOTA
```

### Stats (4 Items)
```
Title: PERFECTION IN PRINTING
Stats:
- 1000+ | Project Finished
- 99% | Satisfied Clients
- 15+ | Years Experience
- 4 | Opened Location
```

### Materials Section
```
Heading: Best materials, for the best result
Description: We use only the finest materials to ensure every print delivers superior quality, rich colors, and a flawless finish.
CTA Primary: Discover Now!
CTA Secondary: Get in Touch
```

### Footer
```
Column 1:
- Logo: Paperku
- Tagline: The leader in quality custom print in Surabaya

Column 2 - Quick Links:
- Home
- Services  
- Products
- Contact

Column 3 - Contact:
- support@example.com
- +6281-0066-8977
- Surabaya, Indonesia

Bottom:
- Copyright © 2025 Paperku. All rights reserved
- Payment: VISA, PayPal, Bitcoin, Amazon Pay
```

---

## 🎯 Quality Standards

### Code Must
- ✅ Pass Laravel Pint formatting (zero errors)
- ✅ Have dark mode for every colored element
- ✅ Be responsive (mobile-first)
- ✅ Use semantic HTML5 tags
- ✅ Follow design system values
- ✅ Reuse components (no repeated markup)
- ✅ Have no console errors
- ✅ Have no inline styles

### Code Must Not
- ❌ Include custom CSS files
- ❌ Use fixed pixel widths
- ❌ Mix Tailwind versions/syntax
- ❌ Have accessibility violations (basic level)
- ❌ Contain hardcoded colors outside design system
- ❌ Have desktop-first responsive classes
- ❌ Include commented-out code in production

---

## 🚦 Ready to Build

### Pre-flight Checklist
Before starting implementation:
- [ ] Read `implementation_plan.md` for full context
- [ ] Review design system colors and spacing
- [ ] Understand component architecture
- [ ] Check Laravel/Node/PHP versions
- [ ] Verify Vite dev server runs
- [ ] Confirm Tailwind v4 configured

### Build Order
1. **Layout first:** `app.blade.php` with navbar and footer
2. **Components next:** All blade components in batch
3. **Landing page:** Section by section (hero → services → technology → stats → materials)
4. **Test:** Responsive + dark mode + functionality

### Success Criteria
Phase 1 is complete when:
- ✅ All 5 sections visible and styled
- ✅ Responsive from 320px to 1920px+
- ✅ Dark mode works throughout
- ✅ WhatsApp button links correctly
- ✅ Zero console errors
- ✅ Code passes Pint formatting

---

**Last Updated:** 2026-08-01  
**Reference:** `.github/instructions/web.instructions.md`, `implementation_plan.md`  
**Questions?** Check implementation plan for detailed execution steps.
