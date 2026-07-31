# PAPERKU LANDING PAGE - IMPLEMENTATION PLAN

**Created:** 2026-07-30  
**Project:** Paperku - Custom Print Services Landing Page  
**Tech Stack:** Laravel 13 + Tailwind CSS v4 + Vite  
**Status:** Planning Phase - Ready for Review

---

## 📊 PROJECT OVERVIEW

**Business:** Paperku - Custom printing service based in Surabaya, Indonesia  
**Goal:** Create a professional, responsive landing page showcasing printing services  
**Font:** Instrument Sans (400, 500, 600) - Already configured  
**Requirements:**
- ✅ Mobile-first responsive design (320px → 1920px+)
- ✅ Dark mode support throughout
- ✅ Modern, clean design matching Canva mockups
- ✅ SEO-ready structure
- ⏳ Interactivity (Phase 2 - upon client request)

---

## 🎨 DESIGN ANALYSIS

### Source Materials
- **Location:** `/Users/tanardi94/Projects/paperku/web/screenshots/`
- **Files:** 13 screenshots from Canva design
- **Analysis Method:** OCR text extraction + visual structure analysis

### Landing Page Structure (7 Main Sections)

#### 1. **Navigation Bar**
**Layout:**
- Logo: "Paperku" wordmark (left aligned)
- Menu items: Home, Services, Products, Get in Touch (center/right)
- Mobile: Hamburger menu
- Behavior: Sticky/fixed on scroll

**Technical Specs:**
- Height: 64px (h-16)
- Background: Semi-transparent white with blur effect
- Dark mode: Semi-transparent dark with blur
- Border bottom: Subtle line

#### 2. **Hero Section**
**Content:**
- Primary heading: "The Leader in Quality Custom Print"
- Subheading: "Turn your ideas into premium products that leave a lasting impression"
- CTA button: "View Our Services" or similar

**Layout:**
- Full-width container
- Centered content (max-w-4xl)
- Min height: 500px mobile, 600px desktop
- Background: Gradient (light to lighter in light mode, dark gradient in dark mode)

**Typography:**
- Heading: text-4xl sm:text-5xl lg:text-6xl font-semibold
- Subheading: text-lg lg:text-xl
- CTA: Prominent button with hover effect

#### 3. **Services Grid Section**
**Content:**
8 service categories:
1. Marketing Materials
2. Signs & Posters
3. Clothings & Bags
4. Merchandises
5. Fuji Film Photos Print
6. Labels & Stickers
7. Neon Box
8. Wallpapers Custom

**Layout:**
- Section heading: "Our Services" + subtitle
- Grid: 4 columns (desktop) → 2 columns (tablet) → 1 column (mobile)
- Card design: Border, shadow, hover scale effect
- Bottom: "See All Services" CTA button

**Card Components:**
- Icon/emoji placeholder (top)
- Service title (center)
- "Learn more →" link (bottom)
- Hover: Scale up, shadow increase, accent color change

#### 4. **Technology/Client Logo Section**
**Content:**
- Banner text: "POWERED BY THE NEWEST PRINTING TECHNOLOGY IN SURABAYA"
- Heading: "Discover our newest printing technology"
- Client logos: BCA, Pizza, Mandiri, Toyota

**Layout:**
- Full-width with distinct background color
- Banner text: Small, uppercase, tracked
- Logos: 4-column grid, grayscale with hover color
- Background: Light gray (light mode), darker gray (dark mode)

**Logo Treatment:**
- Grayscale filter by default
- Color on hover
- Responsive sizing

#### 5. **Stats Section**
**Content:**
4 key statistics:
- 1000+ Project Finished
- 99% Satisfied Clients
- 15+ Years Experience
- 4 Opened Location

**Layout:**
- Section title: "PERFECTION IN PRINTING"
- Grid: 4 columns (desktop) → 2 columns (mobile)
- Large numbers with descriptive labels below
- Clean, spacious design

**Typography:**
- Numbers: text-4xl lg:text-5xl font-bold
- Labels: text-sm uppercase tracking-wide

#### 6. **Materials/Quality Section**
**Content:**
- Heading: "Best materials, for the best result"
- Body: "We use only the finest materials to ensure every print delivers superior quality, rich colors, and a flawless finish."
- CTAs: "Discover Now!" (primary), "Get in Touch" (secondary)
- Image placeholder: Product/material showcase

**Layout:**
- Two-column: Image left, content right (desktop)
- Stacked: Image top, content bottom (mobile)
- Equal column widths on desktop
- Generous spacing between elements

#### 7. **Footer**
**Content:**
- Column 1: Logo + tagline
- Column 2: Quick links (Home, Services, Products, Contact)
- Column 3: Contact information
  - Email: support@example.com
  - Phone: +6281-0066-8977
  - Location: Surabaya, Indonesia
- Bottom row:
  - Copyright: "Copyright © 2025 Paperku. All rights reserved"
  - Payment logos: VISA, PayPal, Bitcoin, Amazon Pay
  - Social media links

**Layout:**
- 3-column grid (desktop) → stacked (mobile)
- Border top separator
- Bottom section: Flex layout with space-between
- Background: Light gray (light mode), dark (dark mode)

---

## 🏗️ TECHNICAL ARCHITECTURE

### Current State Analysis
```
✅ Laravel 13 installed
✅ Tailwind CSS v4 configured (no config file needed)
✅ Vite setup complete
✅ Instrument Sans font loaded via bunny
✅ Dark mode infrastructure ready
✅ resources/css/app.css configured with @theme
```

### File Structure Plan

```
resources/
├── views/
│   ├── layouts/
│   │   └── app.blade.php              # Base layout with navbar/footer
│   ├── components/
│   │   ├── navbar.blade.php           # Navigation component
│   │   ├── footer.blade.php           # Footer component
│   │   ├── service-card.blade.php     # Reusable service card
│   │   ├── stat-item.blade.php        # Stat counter component
│   │   ├── client-logo.blade.php      # Client logo component
│   │   └── section-heading.blade.php  # Section title component
│   └── landing.blade.php              # Main landing page
│
├── css/
│   └── app.css                        # Already configured ✅
│
└── js/
    └── app.js                         # Future interactivity

routes/
└── web.php                            # Update: Route::get('/', 'landing')

public/
└── images/                            # Future: Real assets
    ├── logo.png
    ├── services/
    ├── clients/
    └── materials/
```

### Component Architecture

#### Blade Components (Reusable)

**1. `<x-navbar />`**
- No props (static content initially)
- Includes: Logo, menu items, mobile hamburger
- Sticky positioning
- Dark mode adaptive
- Mobile responsive

**2. `<x-service-card title="..." href="...">`**
- Props: `title` (string), `href` (string, default '#')
- Slot: Icon/emoji content
- Features: Hover effects, scale animation, border/shadow
- Fully responsive

**3. `<x-stat-item number="..." label="..." />`**
- Props: `number` (string with suffix), `label` (string)
- Large number display with small label
- Center aligned
- Dark mode support

**4. `<x-client-logo src="..." alt="..." />`**
- Props: `src` (image path), `alt` (string)
- Grayscale hover effect
- Responsive sizing
- Placeholder support

**5. `<x-footer />`**
- No props (static content)
- Multi-column layout
- Contact info, links, payment logos
- Full dark mode support

**6. `<x-section-heading title="..." subtitle="..." />`**
- Props: `title` (required), `subtitle` (optional)
- Consistent typography
- Center aligned by default
- Dark mode colors

### Design System

#### Color Palette

**Light Mode:**
```css
Background Primary:   #FDFDFC
Background Secondary: #FFFFFF
Background Tertiary:  #F8F9FA
Text Primary:         #1b1b18
Text Secondary:       #706f6c
Border:               #e3e3e0
Accent:               #f53003 (red for hovers/CTAs)
```

**Dark Mode:**
```css
Background Primary:   #0a0a0a
Background Secondary: #161615
Background Tertiary:  #1a1a1a
Text Primary:         #EDEDEC
Text Secondary:       #A1A09A
Border:               #3E3E3A
Accent:               #FF4433 (lighter red variant)
```

#### Typography Scale

```css
/* Headings */
Heading XL:  text-5xl lg:text-6xl font-semibold leading-tight
Heading LG:  text-4xl lg:text-5xl font-semibold
Heading MD:  text-3xl lg:text-4xl font-medium
Heading SM:  text-2xl lg:text-3xl font-medium

/* Body Text */
Body Large:  text-lg leading-relaxed
Body Normal: text-base leading-normal
Body Small:  text-sm leading-normal
Caption:     text-xs uppercase tracking-wider
```

#### Spacing System

```css
/* Section Padding */
Mobile:  py-16 (4rem / 64px)
Desktop: py-24 (6rem / 96px)

/* Container */
Max Width: max-w-7xl (1280px)
Padding:   px-4 sm:px-6 lg:px-8

/* Grid Gaps */
Cards:     gap-6
Columns:   gap-8 lg:gap-12
```

#### Component Patterns

**Button Primary:**
```css
px-8 py-3
bg-[#1b1b18] dark:bg-white
text-white dark:text-[#1b1b18]
rounded-sm
hover:bg-black dark:hover:bg-gray-200
transition-colors
```

**Button Secondary:**
```css
px-6 py-2
border border-[#1b1b18] dark:border-white
text-[#1b1b18] dark:text-white
rounded-sm
hover:bg-[#1b1b18] hover:text-white
dark:hover:bg-white dark:hover:text-[#1b1b18]
transition-colors
```

**Card Pattern:**
```css
p-6
bg-white dark:bg-[#161615]
border border-[#e3e3e0] dark:border-[#3E3E3A]
rounded-lg
shadow-sm hover:shadow-md
transition-all duration-300
```

### Responsive Breakpoints

```css
/* Tailwind v4 defaults */
sm:  640px  (Mobile landscape)
md:  768px  (Tablet)
lg:  1024px (Desktop)
xl:  1280px (Large desktop)
2xl: 1536px (Extra large)

/* Grid Behavior */
Services Grid:  1 col → 2 col (sm) → 4 col (lg)
Stats Grid:     2 col → 4 col (lg)
Footer Grid:    1 col → 3 col (md)
```

---

## 📋 IMPLEMENTATION CHECKLIST

### ✅ Phase 0: Foundation (Already Complete)
- [✅] Laravel 13 installed
- [✅] Tailwind CSS v4 configured
- [✅] Vite configured
- [✅] Instrument Sans font loaded
- [✅] Dark mode infrastructure ready

### 📝 Phase 1: Layout & Components (To Build)
- [ ] Create `layouts/app.blade.php` base layout
- [ ] Create `components/navbar.blade.php`
- [ ] Create `components/footer.blade.php`
- [ ] Create `components/service-card.blade.php`
- [ ] Create `components/stat-item.blade.php`
- [ ] Create `components/client-logo.blade.php` (optional)
- [ ] Create `components/section-heading.blade.php` (optional)

### 📝 Phase 2: Main Landing Page
- [ ] Create `landing.blade.php`
- [ ] Build Hero section
- [ ] Build Services grid section
- [ ] Build Technology/client logo section
- [ ] Build Stats section
- [ ] Build Materials/quality section
- [ ] Integrate footer

### 📝 Phase 3: Routing
- [ ] Update `routes/web.php` to point '/' to landing view

### 🧪 Phase 4: Testing & Refinement
- [ ] Test mobile responsiveness (375px, 390px, 414px)
- [ ] Test tablet responsiveness (768px, 820px, 1024px)
- [ ] Test desktop responsiveness (1280px, 1440px, 1920px)
- [ ] Test dark mode for all sections
- [ ] Test all hover states
- [ ] Verify semantic HTML structure
- [ ] Check accessibility (contrast ratios, focus states)
- [ ] Validate no console errors

### ⏳ Phase 5: Polish (Optional for Initial Launch)
- [ ] Replace emoji icons with real SVG icons (heroicons)
- [ ] Add real client logos (replace placeholders)
- [ ] Add actual product/material images
- [ ] Fine-tune spacing and alignment

### 🚀 Phase 6: Future Enhancements (Post-Launch)
- [ ] Mobile menu toggle functionality (JavaScript)
- [ ] Dark mode toggle button
- [ ] Smooth scroll navigation
- [ ] Stats counter animation on scroll
- [ ] Form validation for contact
- [ ] Image lazy loading
- [ ] Service detail pages
- [ ] Product detail pages
- [ ] Portfolio section

---

## 🚀 EXECUTION PROMPT

**Use this prompt when ready to implement:**

---

# EXECUTION PHASE: BUILD PAPERKU LANDING PAGE

## ⚡ CRITICAL EFFICIENCY RULES

**Follow these religiously to save tokens:**

### 1. CAVEMAN CODING
- Write simple, direct code
- No abstractions unless absolutely needed
- Hardcode values initially - optimize later only if required
- If it works, ship it - don't over-perfect

### 2. PONYTAIL LAZY DEVELOPER
- Copy patterns from existing `welcome.blade.php`
- Reuse Tailwind utilities aggressively (NO custom CSS)
- Use Blade components for any repeated markup
- Let framework/library do the heavy lifting
- Never reinvent what already exists

### 3. TOKEN CONSERVATION
- Work in batches (create multiple files at once)
- Write complete code blocks (no "// rest of code" placeholders)
- Don't explain unless something is complex/unusual
- Don't ask permission for obvious next steps
- Read each file only once
- Remember structure and patterns

---

## 🔨 BUILD STEPS

### STEP 1: Create Base Layout

**File:** `resources/views/layouts/app.blade.php`

**Instructions:**
- Copy structure from `welcome.blade.php` (head section with @fonts, @vite)
- Body: Same dark mode classes
- Replace main content with `@yield('content')`
- Include `<x-navbar />` at top
- Include `<x-footer />` at bottom
- Keep it minimal - no extra complexity

**Expected result:** Single layout file that all pages will extend

---

### STEP 2: Create Components (Batch Create)

**File 1:** `resources/views/components/navbar.blade.php`

Structure:
- Sticky nav: `sticky top-0 z-50`
- Semi-transparent white bg with backdrop blur
- Logo left: "Paperku" text
- Desktop menu (md:flex): Home, Services, Products, Get in Touch
- Mobile hamburger (md:hidden): Simple SVG icon
- Height: h-16
- Dark mode support

**File 2:** `resources/views/components/service-card.blade.php`

Props: `title`, `href` (default '#')
Slot: Icon/emoji content
Structure:
- `<a>` tag with group class
- Padding p-6, border, rounded-lg
- Icon/slot at top (text-4xl)
- Title (text-lg font-medium)
- "Learn more →" text (text-sm with group-hover color change)
- Hover: scale-105, shadow increase
- Dark mode support

**File 3:** `resources/views/components/stat-item.blade.php`

Props: `number`, `label`
Structure:
- Wrapper div with text-center
- Number: text-4xl lg:text-5xl font-bold
- Label: text-sm uppercase tracking-wide
- Dark mode color for label

**File 4:** `resources/views/components/footer.blade.php`

Structure:
- 3-column grid (md:grid-cols-3) → stacked mobile
- Column 1: Logo + tagline
- Column 2: Quick links (Home, Services, Products, Contact)
- Column 3: Contact info (email, phone, location)
- Bottom section: Copyright + payment logos
- Background: gray-100 dark:bg-[#161615]
- Border top

---

### STEP 3: Create Landing Page

**File:** `resources/views/landing.blade.php`

**Structure:** `@extends('layouts.app')` then `@section('content')`

**Section 1: Hero**
- Container: min-h-[500px] lg:min-h-[600px]
- Gradient background: `bg-gradient-to-br from-gray-50 to-gray-100 dark:from-[#161615] dark:to-[#0a0a0a]`
- Content: max-w-4xl mx-auto, centered
- H1: "The Leader in Quality Custom Print" (with line breaks)
- Subtitle: "Turn your ideas..."
- CTA button: "View Our Services" (link to #services)

**Section 2: Services**
- ID: `id="services"`
- Background: white dark:bg-[#0a0a0a]
- Heading: "Our Services" + subtitle
- Grid: `grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6`
- 8x `<x-service-card>` with emojis
- Bottom button: "See All Services"

**Section 3: Technology**
- Background: gray-50 dark:bg-[#161615]
- Banner text: "POWERED BY..." (uppercase, small, tracked)
- Heading: "Discover our newest printing technology"
- Logo grid: 4 columns, placeholder boxes with text
- Grayscale hover effect

**Section 4: Stats**
- Background: white dark:bg-[#0a0a0a]
- Title: "PERFECTION IN PRINTING"
- Grid: `grid grid-cols-2 lg:grid-cols-4 gap-8`
- 4x `<x-stat-item>` with numbers

**Section 5: Materials**
- Background: gray-50 dark:bg-[#161615]
- Two-column grid: `grid lg:grid-cols-2 gap-12`
- Left: Image placeholder (aspect-square)
- Right: Heading + description + 2 CTA buttons
- Mobile: stack with image on top

---

### STEP 4: Update Route

**File:** `routes/web.php`

Change:
```php
Route::get('/', fn() => view('landing'));
```

---

### STEP 5: Test

**Commands:**
```bash
npm run dev
php artisan serve
```

**Manual Testing:**
1. Visit http://localhost:8000
2. Check all sections render
3. Test responsive: DevTools mobile view (375px, 768px, 1280px)
4. Test dark mode: Browser console → `document.documentElement.classList.toggle('dark')`
5. Check hover states on cards and buttons
6. Verify no console errors

**Success Criteria:**
- ✅ All 7 sections visible
- ✅ Navbar sticky on scroll
- ✅ Services grid responsive
- ✅ Stats display correctly
- ✅ Footer renders properly
- ✅ Dark mode works throughout
- ✅ Hover effects smooth
- ✅ No layout breaks on mobile

---

## 📝 EXACT CONTENT (Copy-Paste Ready)

### Text Content

**Hero:**
```
Heading: The Leader in Quality Custom Print
Subheading: Turn your ideas into premium products that leave a lasting impression
Button: View Our Services
```

**Services:**
```
Heading: Our Services
Subtitle: Professional printing solutions for all your needs

Cards:
1. Marketing Materials
2. Signs & Posters
3. Clothings & Bags
4. Merchandises
5. Fuji Film Photos Print
6. Labels & Stickers
7. Neon Box
8. Wallpapers Custom

Button: See All Services
```

**Technology:**
```
Banner: POWERED BY THE NEWEST PRINTING TECHNOLOGY IN SURABAYA
Heading: Discover our newest printing technology

Logos: BCA, Pizza, Mandiri, TOYOTA
```

**Stats:**
```
Title: PERFECTION IN PRINTING

Stats:
- 1000+ | Project Finished
- 99% | Satisfied Clients
- 15+ | Years Experience
- 4 | Opened Location
```

**Materials:**
```
Heading: Best materials, for the best result
Body: We use only the finest materials to ensure every print delivers superior quality, rich colors, and a flawless finish.
Button 1: Discover Now!
Button 2: Get in Touch
```

**Footer:**
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

## 🎨 PLACEHOLDER GUIDELINES

### Icons/Images
- **Service cards:** Use emojis for now (📄 🪧 👕 🎁 📸 🏷️ 💡 🖼️)
- **Client logos:** Gray boxes with company name text
- **Material image:** Gray placeholder box (aspect-square)
- **Logo:** Text "Paperku" (replace with actual logo later)

### Future Assets Needed
- Company logo (SVG or PNG)
- 8 service icons (SVG)
- 4 client logos (PNG/SVG)
- 1-2 product/material photos (high-res)
- Payment method icons (optional, can use text)

---

## 🔧 TROUBLESHOOTING

### Common Issues

**Problem:** Styles not applying
**Solution:**
```bash
npm run dev  # Restart Vite dev server
php artisan view:clear
```

**Problem:** Dark mode not working
**Solution:**
- Check `<html>` tag has no hardcoded `class` attribute
- Manually toggle via console: `document.documentElement.classList.add('dark')`
- Verify all components use `dark:` prefix for dark mode styles

**Problem:** Layout broken on mobile
**Solution:**
- Check for fixed widths (use `max-w-*` instead of `w-[px]`)
- Verify responsive grid classes (e.g., `grid-cols-1 sm:grid-cols-2 lg:grid-cols-4`)
- Test with real device or Chrome DevTools device mode

**Problem:** Navbar not sticky
**Solution:**
- Ensure navbar has `sticky top-0 z-50` classes
- Check no parent has `overflow-hidden`

**Problem:** Hover effects not working
**Solution:**
- Verify `transition-*` classes present
- Check for `group` class on parent when using `group-hover:`
- Test on desktop (hover doesn't work on touch devices)

---

## 📊 QUALITY CHECKLIST

Before marking as complete:

### Visual Quality
- [ ] All sections match Canva design intent
- [ ] Typography hierarchy clear and readable
- [ ] Spacing consistent and balanced
- [ ] Colors match design system
- [ ] Dark mode looks polished (not just inverted)

### Responsive Design
- [ ] Mobile (375px): Single column, readable text, touch-friendly
- [ ] Tablet (768px): 2-column grids, adjusted spacing
- [ ] Desktop (1280px+): Full layout, optimal line lengths
- [ ] No horizontal scroll on any breakpoint
- [ ] Images scale properly

### Performance
- [ ] No console errors
- [ ] No layout shift on load
- [ ] Fast initial render
- [ ] Smooth hover transitions
- [ ] No unnecessary re-renders

### Code Quality
- [ ] Semantic HTML (nav, section, footer tags)
- [ ] Reusable components (no repeated markup)
- [ ] Clean Blade syntax
- [ ] Consistent naming conventions
- [ ] No inline styles (all Tailwind classes)

### Accessibility (Basic)
- [ ] Sufficient color contrast (WCAG AA minimum)
- [ ] Clickable areas min 44x44px
- [ ] Focus states visible
- [ ] Alt text on images (when added)
- [ ] Semantic heading hierarchy (h1 → h2 → h3)

---

## 📚 REFERENCE MATERIALS

### Screenshots Location
```
/Users/tanardi94/Projects/paperku/web/screenshots/
- 13 PNG files from Canva design
- OCR extracted text available
```

### Existing Code Patterns
```
/Users/tanardi94/Projects/paperku/web/resources/views/welcome.blade.php
- Copy dark mode class patterns
- Copy @fonts and @vite structure
- Reuse color values and transitions
```

### Documentation
- Tailwind CSS v4: https://tailwindcss.com/docs
- Laravel Blade: https://laravel.com/docs/11.x/blade
- Vite: https://vitejs.dev/

---

## 🎯 DEFINITION OF DONE

### Must Have (Phase 1)
✅ All 7 sections implemented and visible
✅ Navbar component working (desktop + mobile structure)
✅ Footer component complete with all content
✅ Service cards displaying in responsive grid
✅ Stats section showing all 4 metrics
✅ Dark mode working for entire page
✅ Responsive on mobile, tablet, desktop
✅ No console errors
✅ Route pointing to landing page

### Nice to Have (Can defer)
⏳ Mobile menu toggle functionality (needs JS)
⏳ Real service icons (currently emojis)
⏳ Real client logos (currently placeholders)
⏳ Actual product images
⏳ Dark mode toggle button
⏳ Smooth scroll to sections
⏳ Stats counter animations

### Future Phases
🔮 Service detail pages
🔮 Product detail pages
🔮 Portfolio section with lightbox
🔮 Contact form with validation
🔮 Blog/news section
🔮 Filament admin for content management
🔮 Multi-language support

---

## 💡 DEVELOPMENT TIPS

### Work Efficiently
1. **Batch file creation:** Create all components in one go
2. **Copy-paste smartly:** Reuse color classes from welcome.blade.php
3. **Test incrementally:** Check each section before moving to next
4. **Dark mode from start:** Add `dark:` classes as you write, not after

### Common Patterns

**Section Container:**
```blade
<section class="py-16 lg:py-24 bg-white dark:bg-[#0a0a0a]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Content -->
  </div>
</section>
```

**Section Heading:**
```blade
<div class="text-center mb-12">
  <h2 class="text-3xl lg:text-4xl font-semibold mb-4">Title</h2>
  <p class="text-[#706f6c] dark:text-[#A1A09A]">Subtitle</p>
</div>
```

**Button Primary:**
```blade
<a href="#" class="inline-block px-8 py-3 bg-[#1b1b18] dark:bg-white text-white dark:text-[#1b1b18] rounded-sm hover:bg-black dark:hover:bg-gray-200 transition-colors">
  Label
</a>
```

**Button Secondary:**
```blade
<a href="#" class="inline-block px-6 py-2 border border-[#1b1b18] dark:border-white text-[#1b1b18] dark:text-white rounded-sm hover:bg-[#1b1b18] hover:text-white dark:hover:bg-white dark:hover:text-[#1b1b18] transition-colors">
  Label
</a>
```

---

## 🚦 READY TO START

When you're ready to execute:

1. **Review this plan** - Make sure everything is clear
2. **Ask questions** - Clarify anything uncertain
3. **Start building** - Follow the execution prompt step by step
4. **Test frequently** - Check each section as you build
5. **Show progress** - Share screenshots for feedback if needed

**Estimated time:** 2-3 hours for experienced developer following the plan

**Approach:** CAVEMAN + PONYTAIL = Simple, reusable, working code

---

**END OF IMPLEMENTATION PLAN**

Ready when you are! 🚀
