# Canva to Blade Clone Playbook (Low-Token)

Goal
- Clone Canva page into Laravel Blade.
- Keep visual close to Canva first.
- Keep tokens low.

Use This Prompt For Other Agents
```text
Task: Clone Canva export into Laravel Blade with highest visual similarity and lowest token usage.

Context:
- Source files:
	- scrappings/homepage.html
	- scrappings/homepage_source.html
	- scrappings/homepage_files/*
	- optional: scrappings/service.html, scrappings/product.html
- Target files:
	- resources/views/landing.blade.php
	- resources/views/components/navbar.blade.php
	- resources/views/components/footer.blade.php
	- resources/views/layouts/app.blade.php
	- routes/web.php

Hard rules:
1) Do not copy Canva obfuscated class names into Blade.
2) Use Blade + Tailwind utilities only.
3) Build visual parity first, refactor later.
4) Reuse existing components only if they do not break parity.
5) Keep section order identical to Canva.
6) Keep CTA texts and headings identical to Canva.
7) If mismatch found, patch immediately. No long explanation.

Execution order:
Step A - Extract structure fast
- Parse homepage.html for section order, nav labels, CTA text, major background blocks.
- Record exact order only. No deep prose.

Step B - Asset map
- List all images in scrappings/homepage_files.
- Preview and map each image to semantic role:
	- hero/main visual
	- service cards
	- technology visuals
	- stats/support graphics
	- footer/social/payment
- Copy used assets into public/images/homepage with semantic names.

Step C - Build top area first
- Implement 2-level top nav if Canva has it:
	- thin top strip (Halaman 1/2/3)
	- main nav row (Home/Services/Products/Get in Touch)
- Implement hero with same composition:
	- text block scale
	- accent circle/shape
	- overlapping product images
	- CTA size and color

Step D - Build body by blocks
- Services section: same card count, title case, spacing rhythm.
- Technology section: same headline style and visual emphasis.
- Stats row: same numbers, labels, color band.
- Materials section: same yellow band, image side, CTA side.

Step E - Footer parity
- Match footer hierarchy from Canva:
	- logo block
	- contact block
	- social row
	- payment strip
	- copyright

Step F - Routing
- Keep local nav links valid:
	- /, /services, /products
- Placeholder pages allowed if out of scope.

Step G - QA loop (mandatory)
- Compare against screenshot at these checkpoints:
	1) top nav
	2) hero
	3) services
	4) technology
	5) stats + materials
	6) footer
- For each checkpoint: patch spacing, scale, position, color until close.
- Prefer multiple small patches over one large rewrite.

Definition of done:
- No broken images.
- No missing sections.
- Major shapes/composition match Canva.
- Typography hierarchy match (headline, subheadline, CTA).
- Mobile still usable.
```

Low-Token Workflow Rules
- Read once, edit once, verify once.
- Use short progress updates.
- Do not re-explain same plan.
- Skip theory. Patch direct.
- Do not print long HTML dumps in chat.
- Quote only decisive lines from errors.

Fast Command Pattern
```bash
# 1) find images
rg --files scrappings | rg '\\.(png|jpg|jpeg|webp|svg)$'

# 2) copy mapped assets
mkdir -p public/images/homepage
cp scrappings/homepage_files/<hash>.png public/images/homepage/<name>.png

# 3) validate routes
php artisan route:list | rg "services|products|\\s/\\s"

# 4) run app
npm run dev
php artisan serve
```

Patch Strategy (Important)
- Do first pass only on top area until screenshot match.
- Lock top area.
- Continue next section.
- Never tune all sections at once.

If Output Still Not Matching
- Cause usually 3 things:
	1) wrong image role mapping
	2) wrong scale ratios
	3) wrong overlap offsets
- Fix in this order:
	1) image mapping
	2) section container width/padding
	3) text scale/line-height
	4) absolute positions and z-index

Minimal Report Format For Agents
- Changed files list
- 3 biggest visual fixes
- Remaining mismatch list
- Next exact patch target
