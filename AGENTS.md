# ChocoNesia — AGENTS.md

## Project structure
- `ChocoNesia/index.html` — single-page app entrypoint
- `ChocoNesia/css/style.css` — all styles (no preprocessor)
- `ChocoNesia/js/script.js` — all logic (vanilla JS)

## How to run
Open `ChocoNesia/index.html` directly in a browser. No server or build step required.

## CDN dependencies (loaded via `<script>` / `<link>` in index.html)
- AOS.js 2.3.1 — scroll reveal animations
- Chart.js 4.4.0 — production statistics chart
- Vanilla Tilt.js 1.8.1 — product card 3D tilt
- GSAP 3.12.5 + ScrollTrigger — cocoa bean scroll animation
- Font Awesome 6.5.1 — UI icons
- Google Fonts (Playfair Display + Poppins)

## Architecture notes
- No framework, no bundler, no package.json — pure HTML/CSS/JS
- Theme system: `data-theme="dark|light"` on `<html>`, controlled by CSS custom properties
- Loading screen: 2.2s delay on `window.load`, then AOS + Chart + counters init
- Scroll-based UI (progress bar, navbar blur, back-to-top, nav active state) uses raw `window.onscroll`
- Data for products, timeline, testimonials, and FAQ lives as JS arrays in `js/script.js`
- Cocoa bean 3D parallax: mouse → `translate3d` + `rotateX/Y`; scroll → GSAP ScrollTrigger `scrub` tween
- Product modal, FAQ accordion, animated counters are all vanilla JS

## Key conventions
- Hero entrance uses CSS `@keyframes hero-entrance` (not AOS)
- AOS attributes: `data-aos="fade-up|fade-right|fade-left"` + optional `data-aos-delay`
- Font Awesome icons use `<i class="fas fa-..."></i>`, not inline SVG
- All text content is in Indonesian (`id`)
- No tests, no CI, no lint/typecheck commands
