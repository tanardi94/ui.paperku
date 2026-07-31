# Paperku Web - Kiro Development Conventions

**Project:** Paperku Landing Page - Custom Print Services  
**Tech Stack:** Laravel 13 + Tailwind CSS v4 + Vite + Alpine.js 3.x  
**PHP:** 8.3+ | **Node:** 20 LTS | **Font:** Instrument Sans  
**Last Updated:** 2026-07-31

---

## 🎯 Project Mission

Build a professional, responsive landing page for Paperku (custom printing service in Surabaya) with native dark mode support. The design prioritizes simplicity, reusability, and mobile-first responsive layout from 320px to 1920px+.

**Core Principles:**
- **CAVEMAN CODING:** Write simple, direct code. No premature abstraction.
- **PONYTAIL LAZY:** Aggressively reuse patterns. Let framework handle complexity.
- **MOBILE-FIRST:** Design starts at 320px, progressively enhances to desktop.
- **DARK MODE NATIVE:** Both modes are designed, not inverted.

---

## 📁 Project Structure

```
paperku/web/
├── app/
│   ├── Http/Controllers/
│   │   └── ContactController.php      # Email form handler
│   └── Mail/
│       └── ContactFormMail.php        # Mailable class
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php          # Base layout (head, nav, footer)
│   │   ├── components/
│   │   │   ├── navbar.blade.php       # Sticky navigation
│   │   │   ├── footer.blade.php       # Site footer
│   │   │   ├── service-card.blade.php # Reusable service card
│   │   │   ├── stat-item.blade.php    # Stat display component
│   │   │   └── section-heading.blade.php # Optional heading component
│   │   └── landing.blade.php          # Main landing page (7 sections)
│   ├── css/
│   │   └── app.css                    # Tailwind v4 config (@theme, @layer)
│   └── js/
│       └── app.js                     # Alpine.js initialization
├── routes/
│   └── web.php                        # Route::get('/', 'landing')
├── public/
│   └── images/                        # Future: Real assets (logo, icons, photos)
├── .github/instructions/
│   └── web.instructions.md            # Copilot code generation guide
├── .kiro/steering/
│   └── conventions.md                 # This file
├── implementation_plan.md             # Full project specification
├── composer.json                      # Laravel dependencies + Pint
├── package.json                       # Vite, Alpine.js
└── vite.config.js                     # Asset bundling
```

---

## 🎨 Design System Reference

### Color Tokens

| Token | Light Mode | Dark Mode | Usage |
|-------|------------|-----------|-------|
| BG Primary | `#FDFDFC` | `#0a0a0a` | Main page background |
| BG Secondary | `#FFFFFF` | `#161615` | Cards, elevated surfaces |
| BG Tertiary | `#F8F9FA` | `#1a1a1a` | Alternate sections |
| Text Primary | `#1b1b18` | `#EDEDEC` | Headings, important text |
| Text Secondary | `#706f6c` | `#A1A09A` | Body text, descriptions |
| Border | `#e3e3e0` | `#3E3E3A` | Dividers, card borders |
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
Cards:     gap-6        /* 24px between service cards */
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
│   └── landing.blade.php
│       ├── Hero Section
│       ├── Services Grid
│       │   └── 8x <x-service-card />
│       ├── Technology Section
│       ├── Stats Grid
│       │   └── 4x <x-stat-item />
│       ├── Materials Section
│       └── Contact Form Section
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

#### 4. Footer
```blade
<x-footer />
```
- **Props:** None (static content)
- **Features:** 3-column grid (mobile stacks), copyright, payment logos

#### 5. Section Heading (Optional)
```blade
<x-section-heading title="Our Services" subtitle="Professional printing solutions" />
```
- **Props:** `title` (required), `subtitle` (optional)
- **Features:** Center-aligned, consistent typography

---

## 🚀 Development Workflow

### Phase 1: Foundation (Current Phase)
**Goal:** Build static, responsive landing page with all 7 sections

**Tasks:**
1. ✅ Set up Laravel 13 + Tailwind v4 + Vite
2. ✅ Configure Instrument Sans font
3. ✅ Set up dark mode infrastructure
4. 🔨 Create base layout (`layouts/app.blade.php`)
5. 🔨 Build reusable components (navbar, footer, cards, stats)
6. 🔨 Implement landing page with 7 sections
7. 🔨 Add contact form with email handler
8. 🔨 Add WhatsApp floating button
9. 🔨 Test responsive behavior (mobile, tablet, desktop)
10. 🔨 Test dark mode across all sections

### Phase 2: Interactivity (Future)
- Mobile menu toggle functionality
- Dark mode toggle button
- Smooth scroll navigation
- Stats counter animation on scroll
- Form validation and feedback
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
4. `resources/views/components/footer.blade.php`
5. `resources/views/components/section-heading.blade.php` (optional)

**Tip:** Create all components in one operation, don't create them incrementally.

### Step 3: Landing Page
**File:** `resources/views/landing.blade.php`

**Structure:**
```blade
@extends('layouts.app')

@section('content')
  {{-- Section 1: Hero --}}
  {{-- Section 2: Services Grid --}}
  {{-- Section 3: Technology/Client Logos --}}
  {{-- Section 4: Stats --}}
  {{-- Section 5: Materials/Quality --}}
  {{-- Section 6: Contact Form --}}
@endsection
```

### Step 4: Backend (Contact Form)
**Files:**
1. `app/Http/Controllers/ContactController.php`
2. `app/Mail/ContactFormMail.php`
3. Update `routes/web.php`

### Step 5: Route Configuration
**File:** `routes/web.php`

```php
Route::get('/', fn() => view('landing'));
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
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
└─ 4+ items (stats) → grid-cols-2 lg:grid-cols-4
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

## 📧 Contact Form Implementation

### Backend Setup

#### Controller: `app/Http/Controllers/ContactController.php`
```php
<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|max:5000',
        ]);

        Mail::to('support@paperku.com')->send(new ContactFormMail($validated));

        return back()->with('success', 'Thank you! We will get back to you soon.');
    }
}
```

#### Mailable: `app/Mail/ContactFormMail.php`
```php
<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('New Contact Form Submission - Paperku')
                    ->view('emails.contact')
                    ->with('data', $this->data);
    }
}
```

#### Email Template: `resources/views/emails/contact.blade.php`
```blade
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact Form</title>
</head>
<body style="font-family: sans-serif; line-height: 1.6; color: #333;">
    <h2>New Contact Form Submission</h2>
    
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    @if(isset($data['phone']))
        <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    @endif
    
    <p><strong>Message:</strong></p>
    <p>{{ $data['message'] }}</p>
</body>
</html>
```

#### Route: `routes/web.php`
```php
use App\Http\Controllers\ContactController;

Route::get('/', fn() => view('landing'));
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
```

### Frontend Form (in landing.blade.php)

```blade
<section id="contact" class="py-16 lg:py-24 bg-white dark:bg-[#0a0a0a]">
  <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
    {{-- Success Message --}}
    @if(session('success'))
      <div class="mb-6 p-4 bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 rounded-sm">
        <p class="text-green-800 dark:text-green-200">{{ session('success') }}</p>
      </div>
    @endif
    
    {{-- Form (see Copilot instructions for full markup) --}}
  </div>
</section>
```

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
  {{-- WhatsApp SVG icon (see Copilot instructions for full SVG) --}}
</a>
```

**Number Format:** `https://wa.me/628100668977` (country code + number, no spaces or symbols)

---

## 🧪 Testing Checklist

### Visual Testing

#### Responsive Breakpoints
- [ ] **320px:** Single column, readable text, touch-friendly buttons
- [ ] **375px:** iPhone standard, common mobile size
- [ ] **768px:** Tablet, 2-column grids activate
- [ ] **1024px:** Desktop, 4-column grids, full layout
- [ ] **1280px:** Large desktop, max-width container centered
- [ ] **1920px+:** No layout breaks, proper centering

#### Dark Mode
- [ ] All sections have dark mode styles
- [ ] Text remains readable (contrast check)
- [ ] Borders visible but subtle
- [ ] Hover states work in both modes
- [ ] Form inputs styled for dark mode
- [ ] No white flashes on load

#### Interactive Elements
- [ ] All buttons have hover states
- [ ] Service cards scale on hover
- [ ] Form inputs have focus states
- [ ] Links have hover color change
- [ ] WhatsApp button has hover scale

### Functional Testing

- [ ] Navbar links scroll to sections (or navigate)
- [ ] Contact form submits successfully
- [ ] Form validation shows errors
- [ ] Success message displays after submission
- [ ] WhatsApp button opens chat in new tab
- [ ] Mobile menu toggles (Phase 2)
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

### Issue: Contact form not sending
**Symptoms:** Form submits but no email received  
**Solution:**
- Check `.env` has mail configuration:
  ```
  MAIL_MAILER=smtp
  MAIL_HOST=mailpit
  MAIL_PORT=1025
  ```
- For local testing, use Mailpit or Mailtrap
- For production, configure actual SMTP (e.g., SendGrid, Mailgun)

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
3. **Landing page:** Section by section (hero → services → stats → etc.)
4. **Backend:** Contact controller and mailable
5. **Test:** Responsive + dark mode + functionality

### Success Criteria
Phase 1 is complete when:
- ✅ All 7 sections visible and styled
- ✅ Responsive from 320px to 1920px+
- ✅ Dark mode works throughout
- ✅ Contact form sends emails
- ✅ WhatsApp button links correctly
- ✅ Zero console errors
- ✅ Code passes Pint formatting

---

**Last Updated:** 2026-07-31  
**Reference:** `/implementation_plan.md`, `.github/instructions/web.instructions.md`  
**Questions?** Check implementation plan for detailed execution steps.
