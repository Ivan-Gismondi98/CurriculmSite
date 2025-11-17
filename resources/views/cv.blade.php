@extends('layouts.app')

@section('content')
<section lang="it">
  <!-- MOBILE NAVIGATION -->
  <div class="w3-container w3-padding-16 w3-border-bottom w3-hide-medium w3-hide-large">
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="toggleNavigation()">&#9776;</a>
  </div>
  <div id="mobile-nav" class="w3-bar-block w3-hide w3-hide-large w3-hide-medium w3-sticky">
    <a href="#about" class="w3-bar-item w3-button w3-center w3-hover-none w3-border-white w3-bottombar w3-hover-border-green w3-hover-text-green" onclick="toggleNavigation()">ABOUT</a>
    <a href="#resume" class="w3-bar-item w3-button w3-center w3-hover-none w3-border-white w3-bottombar w3-hover-border-green w3-hover-text-green" onclick="toggleNavigation()">RESUME</a>
    <a href="#contact" class="w3-bar-item w3-button w3-center w3-hover-none w3-border-white w3-bottombar w3-hover-border-green w3-hover-text-green" onclick="toggleNavigation()">CONTACT</a>
  </div>

  <!-- SOCIAL SECTION / SIDEBAR -->
  <section class="image-section w3-quarter w3-fixed w3-padding-small">
    <img src="{{ asset('avatar.png') }}" class="w3-circle" style="width: 200px; height: 200px; border-radius: 50%;"/>
    <div class="links w3-margin-top w3-padding-small">
      <a class="icon-link w3-text-sand w3-hover-text-amber" href="https://www.instagram.com/ivanino_panevino/" target="_blank" title="Instagram"><i data-feather="instagram"></i></a>
      <a class="icon-link w3-text-sand w3-hover-text-amber" href="https://github.com/Ivan-Gismondi98?tab=repositories" target="_blank" title="GitHub"><i data-feather="github"></i></a>
      <a class="icon-link w3-text-sand w3-hover-text-amber" href="https://www.linkedin.com/in/ivan-gismondi-85037a150" target="_blank" title="LinkedIn"><i data-feather="linkedin"></i></a>
    </div>
    <div class="w3-container w3-padding-16">
      <button onclick="generatePDF()" class="w3-amber w3-hover-amber w3-button w3-round-small w3-hover-deep-orange w3-padding-large">
        <i data-feather="download"></i><span class="w3-margin-left download-text">DOWNLOAD CV</span>
      </button>
    </div>
    <div class="w3-container w3-padding-16">
      <a href="https://linktr.ee/ivangismondi" class="w3-amber w3-hover-amber w3-button w3-round-small w3-hover-deep-orange w3-padding-large">
        <i data-feather="link"></i><span class="w3-margin-left download-text">I MIEI PROGETTI</span>
      </a>
    </div>
    <div class="w3-container w3-padding-16">
      <button onclick="translatePage()" class="w3-blue w3-hover-blue w3-button w3-round-small w3-hover-indigo w3-padding-large" id="translateBtn">
        <i data-feather="globe"></i><span class="w3-margin-left download-text">TRADUCI PAGINA</span>
      </button>
    </div>
    </br>
  </section>

  <!-- MAIN CONTENT -->
  <section class="w3-threequarter w3-padding-large w3-right">
    <!-- DESKTOP NAVIGATION -->
    <div class="w3-container w3-padding-large w3-border-bottom w3-hide-small">
      <a href="#contact" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-green w3-hover-text-green w3-right w3-hide-small" style="border-width: 2px !important;" onclick="toggleNavigation()">CONTATTAMI</a>
      <a href="#resume" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-green w3-hover-text-green w3-right w3-hide-small" style="border-width: 2px !important;" onclick="toggleNavigation()">ESPERIENZE</a>
      <a href="#about" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-green w3-hover-text-green w3-right w3-hide-small" style="border-width: 2px !important;" onclick="toggleNavigation()">DESCRIZIONE</a>
    </div>

    <div class="content-container w3-margin-top-2">
      <!-- HOME (name + role) -->
      <div id="home" class="home w3-container w3-margin-top-4 w3-cursive">
        <h1>Ivan Gismondi</h1>
        <h2>Mid-Level .NET Developer</h2>
      </div>

      <!-- ABOUT -->
      <div id="about" class="w3-container w3-margin-top-20-percent w3-cursive w3-large">
        <h2 class="w3-border-bottom w3-border-amber" style="border-width: 3px !important;">DESCRIZIONE:</h2>
        <p class="w3-margin-top-2" style="text-align:justify;"> 
          Mid-Level .NET Developer con solida esperienza nello sviluppo di applicazioni multipiattaforma (.NET MAUI, Xamarin.Forms) e soluzioni web basate su ASP.NET Core. Specializzato in integrazione di dispositivi medicali, progettazione di API REST e database cloud, con competenze in AI applicata al settore healthcare.
Qualifica Mid-Level ottenuta come riconoscimento aziendale per performance eccellenti e capacità tecniche dimostrate.  
Professionista motivato e collaborativo, con eccellenti capacità organizzative e comunicative. Focalizzato sul miglioramento continuo e sulla crescita professionale, con attitudine al problem solving e alla creazione di soluzioni innovative.
        </p>
      </div>

      <!-- RESUME -->
      <div id="resume" class="w3-container w3-margin-top-20-percent w3-cursive">
        <h2 class="w3-border-bottom w3-border-amber" style="border-width: 3px !important;">ESPERIENZE:</h2>
        <div class="w3-container w3-margin-top-2 w3-cursive">
          <h3 class="w3-border-amber">Esperienze Professionali</h3>
          <div class="">
            <h5 style=" font-weight:bold;">HEALTHCARE ENGINEERING SERVICES srl - Junior .NET Developer</h5>
            <p>Apr 2023 – in corso | Via Amato Tiraboschi 36/G - 60100 - Ancona</p>
            <ul class="w3-ul" style="font-weight: 500;">
              <li>Progettazione e implementazione di integrazioni software tra cartelle cliniche e dispositivi medicali (Cardioline, EasyMed, Steris, Abintrax), garantendo interoperabilità sicura e conforme agli standard sanitari.</li>
              <li>Sviluppo e manutenzione di web app (TaleteWeb) e app mobile (Tablete), includendo nuove funzionalità, risoluzione bug e aggiornamenti evolutivi.</li>
              <li>Integrazione di moduli basati su Intelligenza Artificiale (AI) per analisi e supporto decisionale in ambito medico, utilizzando ASP.NET Core, C#, e servizi REST.</li>
              <li>Prime installazioni su PSN o server cliente: provisioning iniziale del database, gestione domini e certificati SSL (Aruba), configurazione IIS (siti, binding, porte) e pubblicazione/hardening della webapp; diagnostica di rete con strumenti come telnet, nslookup e tracert per verifica connettività e apertura porte.</li>
              <li>Sviluppo di applicazioni mobili multipiattaforma per Android e iOS utilizzando Xamarin.Forms e .NET MAUI, con particolare attenzione all’integrazione con hardware e sensori per applicazioni sanitarie.</li>
              <li>Gestione di database cloud e API REST per comunicazione fluida tra applicazioni e sistemi esterni.</li>
              <li>Utilizzo di tecnologie avanzate: C#, ASP.NET, ASP.NET Core, MySQL, Docker, SQLYog, con competenze in Git e strumenti di supporto remoto (FortiClient, Supremo, Oplon).</li>
              <li>Responsabile di deploy e manutenzione server presso clienti, inclusa la pubblicazione delle app su Google Play Store e Apple App Store.</li>
            </ul>
          </div>
          <div class="">
            <h5 style="font-weight:bold;">Sviluppatore freelance</h5>
            <p>Gen 2023 – in corso</p>
            <ul class="w3-ul" style="font-weight: 500;">
                <li>
                    Collaborazione con il team <strong>Codigo Team</strong> per lo sviluppo di soluzioni software personalizzate per aziende. I progetti realizzati sono:
                    <ul>
                        <li><strong>Celiani Allestimenti Veicoli:</strong> Installazione e personalizzazione di <strong>Odoo 18</strong> su server Linux, con sviluppo di moduli in Python e configurazione avanzata del sistema ERP.</li>
                        <li><strong>Tre Gi S.A.S.:</strong> Sviluppo di un’applicazione per la gestione delle stampanti utilizzando <strong>PHP</strong> e <strong>Laravel</strong>, ottimizzando i flussi di stampa e la gestione delle risorse.</li>
                    </ul>
                </li>
                <li>Gestione repository GitHub per progetti open source e privati del team: <a href="https://github.com/orgs/Codigo-Team/repositories">https://github.com/orgs/Codigo-Team/repositories</a>
                </li>
                <li>Sviluppo di progetti personali come freelance indipendente, disponibili nella mia repository GitHub: <a href="https://github.com/Ivan-Gismondi98?tab=repositories">https://github.com/Ivan-Gismondi98?tab=repositories</a>
                </li>
                <li>Competenze chiave: Linux Server, Python, Odoo, PHP, Laravel, Git, Deployment e manutenzione applicazioni.</li>
            </ul>
          </div>
          <div class="">
            <h5 style=" font-weight:bold;">MTM srl - Apprendista Impiegato Commerciale</h5>
            <p>Set 2021 – Mar 2023 | Via E. che Guevara 83/D - Castelfidardo</p>
            <ul class="w3-ul" style="font-weight: 500;">
              <li>Gestione clienti e vendite, attività di supporto commerciale e amministrativo.</li>
            </ul>
          </div>
          <div class="">
            <h5 style=" font-weight:bold;">UNIVPM – Front-End Developer (Hackathon)</h5>
            <p>Nov 2017 – Nov 2019 | Via Lodovico Menicucci, 6, 60121 Ancona</p>
            <ul class="w3-ul" style="font-weight: 500; text-align:justify;">
              <li>Partecipazione al concorso HackUNIVPM presso la Facoltà di Ingegneria, collaborando con team interdisciplinari per sviluppare prototipi di startup innovative.</li>
              <li>Rafforzamento competenze in HTML, CSS, JavaScript, project management e public speaking.</li>
              <li>Interazione con aziende di rilievo nazionale (Loccioni, TeamSystem, Facile.it) per validazione dei progetti.</li>
            </ul>
          </div>
          <div class="">
            <h5 style=" font-weight:bold;">TreGi s.a.s. – Web Developer + Tirocinio Perito Informatico</h5>
            <p>Set 2018 – Set 2019 | Via Giovanni Conti, 10, 60131 Ancona</p>
            <ul class="w3-ul" style="font-weight: 500;">
              <li>Sviluppo di siti web con CMS e codice personalizzato (HTML, CSS, PHP, MySQL).</li>
              <li>Supporto tecnico per sistemi hardware/software aziendali.</li>
              <li>Collaborazione alla manutenzione di infrastrutture IT e ottimizzazione dei processi interni.</li>
            </ul>
          </div>
          <div class="">
            <h5 style=" font-weight:bold;">Caffè Gismondi dal 1904 – Web Developer & Social Media Management</h5>
            <p>Gen 2015 – Gen 2017 | Corso Giovanni Amendola, 3, 60123 Ancona</p>
            <ul class="w3-ul" style="font-weight: 500;">
              <li>Gestione del sito web e delle piattaforme social per l’attività commerciale.</li>
              <li>Creazione contenuti digitali e ottimizzazione della presenza online.</li>
            </ul>
          </div>
          <div class="">
            <h5 style=" font-weight:bold;">TreGi s.a.s. – Assistenza Tecnica Hardware e Software (Alternanza scuola-lavoro)</h5>
            <p>Apr 2015 – Giu 2015 | Via Giovanni Conti, 10, 60131 Ancona</p>
            <ul class="w3-ul" style="font-weight: 500;">
              <li>Riparazione di computer e manutenzione stampanti.</li>
              <li>Sviluppo web di base e creazione di strumenti ergonomici in 3D (AutoCAD, Cura).</li>
              <li>Partecipazione alla fiera europea Retindustria organizzata da Confindustria.</li>
            </ul>
          </div>
        </div>

        <!-- EDUCATION + SKILLS + LANGUAGES + LICENSES + HOBBIES -->
        <div class="w3-container w3-margin-top-2 w3-cursive">
          <h2 class="w3-border-bottom w3-border-amber" style="border-width: 3px !important;">ISTRUZIONE:</h2>
            <h4>I.I.S. VOLTERRA ELIA</h4>
            <p>Set 2012 – Lug 2017</p>
            <p>Diploma di Informatica e Telecomunicazioni;</p>
            <p>Qualifica ottenuta: Perito Tecnico Informatico.</p>
            <h4>GGF GROUP – Corsista in Digital Marketing</h4>
            <p>Giu 2017 – Ott 2017</p>
            <p>Materie e oggetto di studio: Marketing e Telemarketing. 
              Ho inoltre svolto un breve tirocinio nel reparto call center, in qualità di assistente tecnico
            </p>
            <h4>UNIVPM – Ingegneria Informatica</h4>
            <p>Set 2017 – Lug 2022</p>
        </div>

        <div class="w3-container w3-margin-top-2 w3-cursive">
          <h2 class="w3-border-bottom w3-border-amber" style="border-width: 3px !important;">COMPETENZE:</h2>
          <!--SOFT SKILLS-->
          <h4>Soft skills</h4>
          <ul class="w3-ul" style="font-weight: 500;">
            <li>Forte nel Teamwork</li>
            <li>Risoluzione dei problemi</li>
            <li>Vendite</li>
            <li>Leadership</li>
            <li>Creatività</li>
            <li>Curioso</li>
          </ul>
          <!--TECHNICAL SKILLS-->
          <h4>Technical skills</h4>
            <ul class="w3-ul" style="font-weight: 500;">
              <li>Microsoft Office</li>
              <li>Android Studio</li>
              <li>Mago.Net</li>
              <li>Laragon/Xampp</li>
              <li>Laravel</li>
              <li>Vari linguaggi di programmazione come C#, ASPNET, .NET Core, .NET MAUI, Xamarin, SQL, MySQL,Java, JS, C++, PHP...</li>
            </ul>
        </div>

        <div class="w3-container w3-margin-top-2 w3-cursive">
          <h2 class="w3-border-bottom w3-border-amber" style="border-width: 3px !important;">LINGUE:</h2>
          <h4>Inglese</h4>
          <p>Livello avanzato</p>
          <p>University of CambridgeExams – Certificate of Proficiency in English (LevelB1)</p>
          <h4>Italiano</h4>
          <p>Madrelingua</p>
          <h4>Russo</h4>
          <p>Livello Base</p>
        </div>

        <div class="w3-container w3-margin-top-2 w3-cursive">
          <h2 class="w3-border-bottom w3-border-amber" style="border-width: 3px !important;">PATENTI:</h2>
          <h4>Categoria:</h4>
          <p>B (automunito)</p>
        </div>

        <div class="w3-container w3-margin-top-2 w3-cursive">
          <h2 class="w3-border-bottom w3-border-amber" style="border-width: 3px !important;">HOBBIES:</h2>
            <ul class="w3-ul" style="font-weight: 500;">
              <li><p style="font-style:oblique; font-weight: bold">Apprendimento di Nuovi Linguaggi di Programmazione:</p> Ogni nuovo linguaggio è un’opportunità per approfondire le mie competenze tecniche e arricchire il mio toolkit da sviluppatore. Adoro esplorare le sfide uniche che ogni linguaggio offre e scoprire modi più efficienti per creare soluzioni innovative.</li>
              <li><p style="font-style:oblique; font-weight: bold">Problem Solving e Analisi Creativa:</p> Ho una vera passione per la risoluzione dei problemi e mi piace immergermi nella ricerca di soluzioni alternative. Che si tratti di una sfida tecnica o di un problema logico, mi diverto a cercare nuovi approcci per superare gli ostacoli.</li>
              <li><p style="font-style:oblique; font-weight: bold">Lettura di Libri e Articoli su Tecnologia e Innovazione:</p> Dedico parte del mio tempo alla lettura per rimanere aggiornato sulle ultime tendenze tecnologiche. Apprezzo particolarmente letture su strategie di problem-solving e tecniche di sviluppo software avanzate, che mi ispirano a migliorare continuamente le mie competenze.</li>
            </ul>
        </div>
      </div>

      <!-- CONTACT -->
      <div id="contact" class="w3-container w3-margin-top-20-percent w3-cursive">
        <h2 class="w3-border-bottom w3-border-amber" style="border-width: 3px !important;">CONTATTAMI</h2>
        <div class="w3-margin-top-2" style="font-weight: 500;">
          <p>Name: Ivan Gismondi</p>
          <p>Indirizzo: Via Ascoli Piceno 76 - 60126 - Ancona (AN)</p>
          <p>Cellulare: +39 3715982990</p>
          <p>E-mail: <a href="mailto:ivangismondi98@gmail.com">ivangismondi98@gmail.com</a></p>
        </div>
      </div>

      <footer class="w3-container w3-border-top w3-center w3-margin-top-4">
        <p>© 2025 - Ivan Gismondi</p>
        <p class="w3-small">Sito sviluppato come CV e per visionare i miei lavori.</p>
        <a class="w3-button w3-round-xxlarge w3-small w3-light-grey" href="https://linktr.ee/ivangismondi">I miei Lavori</a>
      </footer>
    </div>
  </section>
</section>
@endsection
