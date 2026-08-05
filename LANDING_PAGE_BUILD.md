# Paperku Landing Page — Build Blueprint

Goal of this doc: let other agents rebuild the landing page with identical structure, steps, and quality. It records what exists, how it was built, and the standard to keep.

## 1. Current State

- Progress: ~90% visual parity with the Canva design. Working, routable, mobile usable.
- Known gaps / remaining: listed in "Remaining Work".

Reference sources:
- `design.pdf` — original design spec.
- `Screenshot 2026-08-02 at 10-28-29 Paperku Website.png` — target screenshot for QA.
- `scrappings/homepage.html` + `scrappings/homepage_files/*` — scraped source (Canva export) used to extract structure, text, and assets.

## 2. Stack

- Laravel (Blade) monolith
- Tailwind v4 (CSS-first, `@theme` config in `resources/css/app.css`)
- Montserrat font (all weights 300–900), loaded via Google Fonts + local `@import`
- Alpine.js via CDN (light usage only)
- No component framework (React/Vue). Server-rendered Blade only.

## 3. File Structure

```
routes/web.php                        -> route definitions
resources/views/
  layouts/app.blade.php               -> shared HTML shell, font, nav, WA float, dark mode
  landing.blade.php                   -> the landing page (main deliverable)
  components/navbar.blade.php         -> sticky top nav
  components/footer.blade.php         -> shared site footer (separate from landing's own footer block)
  components/stat-item.blade.php      -> reusable stat number+label
  services.blade.php                  -> placeholder page (out of scope)
  products.blade.php                  -> placeholder page (out of scope)
public/images/homepage/               -> all assets, semantic filenames
resources/css/app.css                 -> Tailwind entry + Montserrat theme
```

Routes (`routes/web.php`):
- `GET /` -> `view('landing')`
- `GET /services` -> placeholder
- `GET /products` -> placeholder

## 4. Design System (tokens)

All values hardcoded as Tailwind arbitrary values. No custom CSS variables — keep it that way for parity.

Colors:
- Brand orange: `#ff6705` (buttons, nav active). Hover darken `#e85d04`.
- Brighter orange accent: `#f35b04`, `#ff7613` (nav active/home link).
- Yellow band: `#ffc30f`; soft yellow chip `#ffd777`.
- Neutral dark: `#343434` (headings), `#545454` (body), `#1b1b18` (text).
- Canvas bg: `#f6f6f6` (hero/nav), `#e8e8e8` (services), `#FDFDFC` (body bg), `#e3e3e0` (borders).
- White cards / footer blocks: `#ffffff`.
- Dark mode: bg `#0a0a0a`, sections `#161615`, borders `#3E3E3A`, text `#EDEDEC`, muted `#A1A09A`. Dark tokens are always paired via `dark:` variants — never drop them.

Font: Montserrat. Headlines `font-extrabold`/`font-semibold`, tight `leading-[0.92]`, tracking `-0.03em`. Uppercase labels use `tracking-[0.16em]`–`[0.25em]`.

Section order (must stay identical): Hero → "Reasons to get printing" (orange rounded panel) → Services grid → Technology banner → Trusted clients → Stats + Materials (yellow band, footer floats on top).

## 5. Build Order (the actual process used)

1. **Scrape/reference.** Pull `homepage.html` structure + section order. Record nav labels, CTA text, headings EXACTLY (never paraphrase copy).
2. **Asset map.** List `scrappings/homepage_files/*`. Preview each, map to semantic role (hero, service card, tech, stats, footer icon, payment strip). Copy to `public/images/homepage/` with readable names (`hero-printer.png`, `product-1.png`, `client-bca.png`, etc.). Keep src asset hashes referenced only in scrappings, not in Blade.
3. **Layout shell.** `app.blade.php`: fonts, `<x-navbar>`, `@yield('content')`, fixed WhatsApp float button. Nav = 72px round `LOGO` placeholder + centered links (Home active orange, Services/Products/Get in Touch underlined) + mobile hamburger. Sticky `top-0 z-50`, `backdrop-blur`.
4. **Hero first, lock it.** Left column: headline ("The Leader in Quality Custom Print", 3 lines), sub, "Discover Now!" orange pill CTA. Right column: yellow circle + rotated magazine image + large printer bleeding off bottom-right corner. Nail this section before moving on.
5. **Body by blocks** (see Section 6 for per-section specs).
6. **Footer.** Two existing: separate `components/footer.blade.php` (shared site footer) AND an inline footer block inside the yellow section of `landing.blade.php` that floats on top with `rounded-t-[40px]`. Keep both.
7. **Routes.** Validate `/`, `/services`, `/products`.
8. **QA loop.** Compare against screenshot per checkpoint; patch one section at a time. Never tune everything at once.

Build rule: read once, edit once, verify once. Patch on mismatch immediately — no long prose.

## 6. Section Specs

### Hero (`landing.blade.php` lines 4–24)
- bg `#f6f6f6`, `pt-10/lg:pt-14`, 2-col grid on lg.
- H1 3 lines, `text-5xl → text-[72px]`, `font-extrabold`, `leading-[0.92]`, `tracking-[-0.03em]`.
- CTA: orange pill `rounded-full`, text `Discover Now! ↗`.
- Visual: absolute yellow circle `#ffc30f` (`w-[400px] h-[400px]` lg), magazine `rotate-12 drop-shadow-2xl` top-right `z-20`, printer bottom-right `-bottom-24 -right-48` `z-10`. Uses `overflow-visible`.

### Reasons to get printing (lines 26–69)
- Orange gradient panel `from-[#ff6705] to-[#ff8b21]`, `rounded-[44px]`, centered.
- Eyebrow `LET’S GET PRINTING`; H2 2 lines "Reasons to get printing started with us".
- 3 feature cards: inline SVG icon (stroke `#fff`), extra-light pill `bg-[#ffd777] text-[#ff6705]` label, body text. Cards: "Biggest Capacity", "Best Material", "Latest Technology".

### Services (lines 71–149)
- bg `#e8e8e8`, grid `sm:grid-cols-2 lg:grid-cols-4 gap-6`.
- White card `rounded-[26px]`, `min-h-[280px]`, uppercase title left, image staged at bottom with `group-hover:scale-105`.
- Overlapping-image cards use two stacked imgs with `-ml-4` (e.g. Marketing Materials, Signs & Posters, Merchandises). Single-image cards centered.
- 8 cards: Marketing Materials, Signs & Posters, Clothings & Bags, Merchandises, Fuji Film Photos Print, Labels & Stickeres, Neon Box, Wallpapers Custom.
- Bottom center CTA "See our service more ↗".

### Technology banner (lines 151–168)
- Full-width grey gradient `from-black via-[#4b4b4b] to-[#8b8b8b]`, `min-h-[410px]/[560px]`.
- Eyebrow "POWERED BY THE NEWEST PRINTING TECHNOLOGY IN SURABAYA", H2 "Discover our newest printing technology".
- Outline-white CTA "Discover Now! ↗".
- Printer image absolute right, `scale-x-[-1]` (mirrored), fixed `width:700px; height:494px` inline style.

### Trusted clients (lines 169–178)
- "THANK YOU FOR YOUR TRUST" eyebrow in `#f35b04`.
- 5 client logos (`client-bca/greenland/pizzahut/mandiri/toyota`), `grayscale opacity-60`, color on hover.

### Stats + Materials + floating footer (lines 182–252)
- bg `#ffc30f` (yellow), `min-h-screen`, 4-col stat grid via `<x-stat-item number="..." label="..." />` (`1000+`, `99%`, `15+`, `4`).
- Left: business-cards-stack image (drop-shadow). Right: eyebrow "PERFECTION IN PRINTING", H2 "Best materials, for the best result", outline CTA "Discover Now! ↗" (`border-[#343434]`).
- Footer: `absolute bottom-0` white block `rounded-t-[40px] shadow-xl`, 3-col (LOGO / Get in Touch / Social), bottom payment strip `payment-methods.png` + copyright.

### Shared footer (`components/footer.blade.php`)
- bg `#f6f6f6`, 3-col: brand+tagline, Quick Links, Contact + social icons. Bottom full-width `payment-methods.png` + centered copyright.

## 7. QA Process

Per-checkpoint comparison against the screenshot:
1. top nav
2. hero
3. services
4. technology
5. trusted clients
6. stats + materials + floating footer

Rules:
- Compare structure/clone — build visual parity FIRST, refactor later.
- Prefer many small patches over one big rewrite.
- Fix order on mismatch: image mapping → container width/padding → text scale/line-height → absolute positions/z-index.
- Alt text required on every image; aria-labels on icon buttons.
- Mobile must remain usable at every checkpoint.
- Never copy Canva's obfuscated class names into Blade — Tailwind utilities only.

Definition of done:
- No broken images, no missing sections.
- Composition, typography hierarchy, and CTA copy match the screenshot.
- Dark mode variants present throughout.
- Mobile usable.

## 8. Remaining Work

Known open items at ~90%:
- Tighten exact section spacing / overlap offsets if the last screenshot diffs remain.
- Confirm copyright year and update jobs follow the same token/class conventions.
- Verify the mirrored technology printer and hero bleeds at `lg` breakpoint.
- Every change keeps section order, CTA copy, and `dark:` variants intact.

## 9. Agent Handoff Notes

- Talk to `scape/clone.md` for the low-token Canva→Blade workflow prompt.
- Reference this doc for the built, actual state. Reuse assets already in `public/images/homepage/` — do not re-scrape.
- Rebuild in the same order, one locked section at a time, patching to the screenshot after each.