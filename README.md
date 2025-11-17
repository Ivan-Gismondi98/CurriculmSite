<div align="center">

# 🌟 CV App — Laravel‑Powered Resume

[![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?logo=laravel&logoColor=white)](#)
[![PHP](https://img.shields.io/badge/PHP-8.3-777BB4?logo=php&logoColor=white)](#)
[![Dockerized](https://img.shields.io/badge/Docker-ready-2496ED?logo=docker&logoColor=white)](#)
[![Offline](https://img.shields.io/badge/Translation-Offline%20%26%20Deterministic-brightgreen)](#)

Elegante CV site con traduzione offline istantanea e export PDF impeccabile.

</div>

## ✨ Le Chicche
- **Traduzione istantanea (offline)**: pulsante "TRADUCI PAGINA" che traduce tutto (testi, placeholder, `title`, `document.title`) usando un dizionario deterministico lato client.
- **PDF pulito e professionale**: export con `html2pdf.js`, margini e regole CSS anti-spazio-vuoto, numerazione pagine runtime, nessuna card tagliata.
- **Layout solido**: sezioni CV non si spezzano a cavallo delle pagine; card esperienze e gruppi restano coesi (`break-inside: avoid`).
- **UX veloce**: nessuna dipendenza server-side per tradurre o generare PDF; tutto avviene nel browser.
- **Laravel + Blade**: contenuti Blade allineati 1:1 all'HTML originale per massima coerenza del dizionario.

## 🚀 Avvio Rapido

### Con Docker (consigliato)
Porta: `http://localhost:8088`

```powershell
# esegui dalla ROOT del repo
docker compose up --build
```

### Senza Docker (locale)
Richiede PHP 8.3 e Composer.

```powershell
# esegui dalla ROOT del repo
copy .env.example .env
# Oppure usa l'.env già presente per Docker
composer install
php artisan key:generate
php -S 127.0.0.1:8000 -t public
```

Apri il browser su `http://localhost:8088` (Docker) oppure `http://127.0.0.1:8000` (locale).

## 🧭 Come si usa
- **Traduci pagina**: clic su "TRADUCI PAGINA" per passare IT ⇄ EN. Funziona offline grazie al dizionario in `public/js/translations.js`.
- **Scarica PDF**: clic su "Scarica PDF" per ottenere un PDF pulito, numerato e senza pagine vuote.

## 🛠️ Dettagli Tecnici

### Traduzione Offline (Deterministica)
- **Dizionario-only**: nessuna API; 100% client-side per risultati ripetibili.
- **Normalizzazione testo**: rimozione spazi/accenti e match robusto anche se il DOM spezza i nodi.
- **Attributi inclusi**: traduce `placeholder`, `title`, `aria-*` quando rilevanti e aggiorna `document.title`.
- **Reversibile**: puoi tornare alla lingua originale senza perdita.

Codice: `public/js/function.js` (motore) + `public/js/translations.js` (dizionario).

### PDF Senza Sorprese
- **Motore**: `html2pdf.js` con impostazioni mirate al CV (margini, scala, qualità).
- **CSS-driven pagination**: classi `page-break-*` e `break-inside: avoid` su card e gruppi.
- **No clip, no buchi**: evita tagli di header/esperienze e pagine vuote.
- **Numeri di pagina**: aggiunti a runtime in modo coerente.

Stili: `public/css/styles.css` include le regole speciali per il print.

### Struttura Progetto (essenziale)
```
./
├─ public/
│  ├─ css/styles.css
│  ├─ js/function.js
│  ├─ js/translations.js
│  └─ avatar.png
├─ resources/
│  └─ views/
│     ├─ layouts/app.blade.php
│     └─ cv.blade.php
├─ routes/web.php
├─ docker-compose.yml
├─ Dockerfile
└─ .env
```

> Nota: in seguito a uno "split" della storia git, la root del progetto è questa cartella. Non esiste più la sottocartella `cv-app/`.


## ⚙️ Configurazione
- **APP_URL**: (Docker) `http://localhost:8088` per link coerenti.
- **Docker**: espone `8088:8000` ed usa SQLite per evitare conflitti DB.
- **Blade**: testi in `cv.blade.php` allineati all'`index.html` originale per copertura massima del dizionario.

## 💡 Suggerimenti
- Aggiungi nuove frasi al dizionario in `public/js/translations.js` mantenendo la stessa normalizzazione.
- Se vedi una frase non tradotta, prendi la stringa esatta da `resources/views/cv.blade.php`.
- Per screenshot/GIF, crea `docs/` e referenzia le immagini nel README.

## 🗺️ Roadmap
- Lingue aggiuntive (ES/DE) mantenendo l'approccio deterministico.
- Tema scuro stampabile senza perdita di contrasto.
- Esportazione DOCX opzionale con template.

---

Made with ❤️ using Laravel + a pinch of frontend magic.
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
