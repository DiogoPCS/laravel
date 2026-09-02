<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Arquitetura de Solução — o curso que transforma desenvolvedores em arquitetos de sistemas enterprise.">

        <title>Mustache - Formação Moderna</title>

        <style>
            :root {
                --black: #000;
                --ink: #1d1d1f;
                --ink-soft: #424245;
                --gray: #86868b;
                --line: #d2d2d7;
                --surface: #f5f5f7;
                --white: #fff;
                --blue: #0433bf;
                --blue-dark: #0433bf;
                --radius-lg: 28px;
                --radius-md: 18px;
                --radius-sm: 12px;
                --maxw: 1120px;
            }

            * { box-sizing: border-box; }
            html { scroll-behavior: smooth; }

            body {
                margin: 0;
                font-family: -apple-system, BlinkMacSystemFont, "SF Pro Display", "SF Pro Text", "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
                background: var(--white);
                color: var(--ink);
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
                overflow-x: hidden;
            }

            a { color: inherit; text-decoration: none; }
            ul { list-style: none; margin: 0; padding: 0; }
            img, svg { display: block; max-width: 100%; }

            .wrap {
                max-width: var(--maxw);
                margin: 0 auto;
                padding: 0 22px;
            }

            /* ---------- Nav ---------- */
            .nav {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                z-index: 1000;
                height: 52px;
                display: flex;
                align-items: center;
                background: rgba(255, 255, 255, 0.8);
                backdrop-filter: saturate(180%) blur(20px);
                -webkit-backdrop-filter: saturate(180%) blur(20px);
                border-bottom: 1px solid rgba(0,0,0,0.06);
                transition: background .3s ease;
            }
            .nav .wrap { display: flex; align-items: center; justify-content: space-between; width: 100%; }
            .nav-logo { font-size: 15px; font-weight: 600; letter-spacing: -0.01em; display: flex; align-items: center; gap: 8px; }
            .nav-logo .brackets { color: var(--blue); }
            .nav-logo .brand { color: var(--ink); font-weight: bold }
            .nav-links { display: flex; align-items: center; gap: 30px; }
            .nav-links a { font-size: 12px; color: var(--ink); opacity: 0.85; transition: opacity .2s; }
            .nav-links a:hover { opacity: 1; }
            .nav-cta {
                font-size: 12px;
                background: var(--ink);
                color: var(--white);
                padding: 7px 16px;
                border-radius: 980px;
                transition: background .2s;
            }
            .nav-cta:hover { background: var(--blue); }
            .nav-toggle { display: none; }

            /* ---------- Hero ---------- */
            .hero {
                padding: 170px 0 90px;
                text-align: center;
                background:
                    radial-gradient(ellipse 60% 50% at 50% 0%, rgba(0,113,227,0.10), transparent 70%),
                    var(--white);
            }
            .eyebrow {
                display: inline-block;
                font-size: 14px;
                font-weight: 600;
                color: var(--blue);
                letter-spacing: 0.02em;
                margin-bottom: 18px;
            }
            .hero h1 {
                font-size: clamp(40px, 7vw, 80px);
                line-height: 1.05;
                font-weight: 700;
                letter-spacing: -0.03em;
                margin: 0 0 20px;
                background: linear-gradient(180deg, #1d1d1f 0%, #3a3a3c 100%);
                -webkit-background-clip: text;
                background-clip: text;
                -webkit-text-fill-color: transparent;
            }
            .hero p.sub {
                font-size: clamp(18px, 2.4vw, 24px);
                color: var(--ink-soft);
                max-width: 680px;
                margin: 0 auto 40px;
                font-weight: 400;
                line-height: 1.4;
            }
            .cta-row { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }
            .btn {
                display: inline-flex;
                align-items: center;
                gap: 6px;
                font-size: 17px;
                font-weight: 400;
                padding: 12px 24px;
                border-radius: 980px;
                border: 1px solid transparent;
                cursor: pointer;
                transition: all .2s ease;
            }
            .btn-primary { background: var(--blue); color: #fff; }
            .btn-primary:hover { background: var(--blue-dark); }
            .btn-secondary { color: var(--blue); }
            .btn-secondary:hover { text-decoration: underline; }
            .btn-secondary svg { transition: transform .2s; }
            .btn-secondary:hover svg { transform: translateX(3px); }

            .hero-note { margin-top: 22px; font-size: 13px; color: var(--gray); }

            /* ---------- Highlights strip ---------- */
            .highlights {
                background: var(--surface);
                padding: 70px 0;
            }
            .highlights-grid {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 24px;
            }
            .highlight-card {
                background: var(--white);
                border-radius: var(--radius-md);
                padding: 28px 22px;
                text-align: left;
                transition: transform .3s ease, box-shadow .3s ease;
            }
            .highlight-card:hover { transform: translateY(-4px); box-shadow: 0 20px 40px rgba(0,0,0,0.08); }
            .highlight-icon {
                width: 44px; height: 44px;
                border-radius: 12px;
                background: #0433bf;
                display: flex; align-items: center; justify-content: center;
                margin-bottom: 18px;
            }
            .highlight-icon svg { width: 22px; height: 22px; stroke: #fff; }
            .highlight-card h3 { font-size: 17px; font-weight: 600; margin: 0 0 6px; letter-spacing: -0.01em; }
            .highlight-card p { font-size: 14px; color: var(--gray); margin: 0; line-height: 1.5; }

            /* ---------- Section heading ---------- */
            .section { padding: 120px 0; }
            .section-head { text-align: center; max-width: 720px; margin: 0 auto 64px; }
            .section-head .eyebrow { margin-bottom: 10px; }
            .section-head h2 {
                font-size: clamp(32px, 5vw, 52px);
                font-weight: 700;
                letter-spacing: -0.02em;
                margin: 0 0 16px;
                color: var(--ink);
            }
            .section-head p { font-size: 19px; color: var(--gray); line-height: 1.5; margin: 0; }

            .section-dark { background: var(--black); color: #fff; }
            .section-dark .section-head p { color: #a1a1a6; }
            .section-dark .eyebrow { color: #436dec }

            /* ---------- Curriculum accordion ---------- */
            .module-card {
                background: var(--surface);
                border-radius: var(--radius-lg);
                padding: 8px;
                max-width: 860px;
                margin: 0 auto;
            }
            .module-head {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 26px 28px 22px;
                flex-wrap: wrap;
                gap: 10px;
            }
            .module-head .tag {
                display: inline-block;
                font-size: 12px;
                font-weight: 600;
                color: var(--blue);
                background: rgba(0,113,227,0.1);
                padding: 5px 12px;
                border-radius: 980px;
                margin-bottom: 10px;
            }
            .module-head h3 { font-size: 24px; font-weight: 700; letter-spacing: -0.01em; margin: 0; }
            .module-count { font-size: 14px; color: var(--gray); white-space: nowrap; }

            .accordion { display: flex; flex-direction: column; gap: 6px; padding: 0 8px 8px; }
            .acc-item {
                background: var(--white);
                border-radius: var(--radius-sm);
                overflow: hidden;
            }
            .acc-trigger {
                width: 100%;
                display: flex;
                align-items: center;
                gap: 18px;
                padding: 18px 20px;
                background: none;
                border: none;
                text-align: left;
                cursor: pointer;
                font-family: inherit;
            }
            .acc-num {
                flex-shrink: 0;
                width: 30px;
                height: 30px;
                border-radius: 50%;
                background: var(--surface);
                color: var(--ink-soft);
                font-size: 13px;
                font-weight: 600;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .acc-title {
                flex: 1;
                font-size: 16px;
                font-weight: 500;
                color: var(--ink);
                letter-spacing: -0.005em;
            }
            .acc-chevron {
                flex-shrink: 0;
                width: 20px;
                height: 20px;
                stroke: var(--gray);
                transition: transform .3s ease;
            }
            .acc-item.open .acc-chevron { transform: rotate(180deg); }
            .acc-item.open .acc-num { background: var(--blue); color: #fff; }
            .acc-panel {
                max-height: 0;
                overflow: hidden;
                transition: max-height .35s ease;
            }
            .acc-panel-inner {
                padding: 0 20px 20px 68px;
                font-size: 14.5px;
                color: var(--gray);
                line-height: 1.6;
            }

            /* ---------- Audience ---------- */
            .audience-grid {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 24px;
            }
            .audience-card {
                border: 1px solid var(--line);
                border-radius: var(--radius-md);
                padding: 32px 26px;
            }
            .audience-card .num { font-size: 13px; color: var(--blue); font-weight: 600; margin-bottom: 14px; }
            .audience-card h3 { font-size: 19px; font-weight: 600; letter-spacing: -0.01em; margin: 0 0 10px; }
            .audience-card p { font-size: 15px; color: var(--gray); line-height: 1.55; margin: 0; }

            /* ---------- Waitlist CTA ---------- */
            .waitlist {
                text-align: center;
                max-width: 560px;
                margin: 0 auto;
            }
            .waitlist h2 {
                font-size: clamp(32px, 5vw, 52px);
                font-weight: 700;
                letter-spacing: -0.02em;
                margin: 0 0 16px;
            }
            .waitlist p { font-size: 18px; color: #a1a1a6; margin: 0 0 40px; line-height: 1.5; }
            .waitlist-form {
                display: flex;
                gap: 10px;
                background: rgba(255,255,255,0.08);
                border: 1px solid rgba(255,255,255,0.15);
                border-radius: 980px;
                padding: 6px;
            }
            .waitlist-form input {
                flex: 1;
                background: none;
                border: none;
                outline: none;
                color: #fff;
                font-size: 16px;
                padding: 12px 18px;
                font-family: inherit;
            }
            .waitlist-form input::placeholder { color: #86868b; }
            .waitlist-form button {
                background: #fff;
                color: #000;
                border: none;
                border-radius: 980px;
                padding: 0 26px;
                font-size: 15px;
                font-weight: 600;
                cursor: pointer;
                transition: background .2s;
                font-family: inherit;
            }
            .waitlist-form button:hover { background: #d2d2d7; }
            .waitlist-success {
                display: none;
                margin-top: 18px;
                font-size: 14px;
                color: #4ad66d;
            }
            .waitlist-success.show { display: block; }

            /* ---------- Footer ---------- */
            .footer {
                background: var(--surface);
                padding: 40px 0;
                border-top: 1px solid var(--line);
            }
            .footer .wrap {
                display: flex;
                align-items: center;
                justify-content: space-between;
                flex-wrap: wrap;
                gap: 12px;
            }
            .footer-text { font-size: 12px; color: var(--gray); }
            .footer-links { display: flex; gap: 20px; }
            .footer-links a { font-size: 12px; color: var(--gray); }
            .footer-links a:hover { color: var(--ink); text-decoration: underline; }

            /* ---------- Reveal on scroll ---------- */
            .reveal {
                opacity: 0;
                transform: translateY(24px);
                transition: opacity .7s ease, transform .7s ease;
            }
            .reveal.in { opacity: 1; transform: translateY(0); }

            /* ---------- Responsive ---------- */
            @media (max-width: 900px) {
                .highlights-grid { grid-template-columns: repeat(2, 1fr); }
                .audience-grid { grid-template-columns: 1fr; }
            }
            @media (max-width: 734px) {
                .nav-links { display: none; }
                .hero { padding: 140px 0 70px; }
                .section { padding: 80px 0; }
                .highlights-grid { grid-template-columns: 1fr; }
                .waitlist-form { flex-direction: column; border-radius: 22px; }
                .waitlist-form button { padding: 12px; }
                .module-head { flex-direction: column; align-items: flex-start; }
            }
        </style>
    </head>
    <body class="antialiased">

        <!-- ============ NAV ============ -->
        <nav class="nav">
            <div class="wrap">
                <a href="#top" class="nav-logo"><span class="brackets">{</span> <span class="brand">Mustache</span> <span class="brackets">}</span></a>
                <div class="nav-links">
                    <a href="#ementa">Ementa</a>
                    <a href="#para-quem">Para quem é</a>
                    <a href="{{ route('artigos.index') }}">Artigos</a>
                    <a href="#inscricao">Inscrição</a>
                </div>
                <a href="#inscricao" class="nav-cta">Garantir vaga</a>
            </div>
        </nav>

        <!-- ============ HERO ============ -->
        <header class="hero" id="top">
            <div class="wrap">
                <span class="eyebrow">Lançamento · Curso Online</span>
                <h1>Arquitetura de<br>Solução.</h1>
                <p class="sub">Domine os fundamentos que transformam desenvolvedores em arquitetos. Sistemas enterprise, cloud-native e microsserviços — construídos com propósito.</p>
                <div class="cta-row">
                    <a href="#inscricao" class="btn btn-primary">Garantir minha vaga</a>
                    <a href="#ementa" class="btn btn-secondary">
                        Ver ementa completa
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                </div>
                <p class="hero-note">Vagas limitadas na turma de lançamento.</p>
            </div>
        </header>

        <!-- ============ HIGHLIGHTS ============ -->
        <section class="highlights">
            <div class="wrap">
                <div class="highlights-grid">
                    <div class="highlight-card reveal">
                        <div class="highlight-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17.5 19H9a7 7 0 1 1 6.71-9h.79a4.5 4.5 0 1 1 0 9Z"/></svg>
                        </div>
                        <h3>Cloud-Native</h3>
                        <p>Soluções desenhadas para escalar desde o primeiro deploy.</p>
                    </div>
                    <div class="highlight-card reveal">
                        <div class="highlight-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7" rx="1.5"/><rect x="14" y="3" width="7" height="7" rx="1.5"/><rect x="3" y="14" width="7" height="7" rx="1.5"/><rect x="14" y="14" width="7" height="7" rx="1.5"/></svg>
                        </div>
                        <h3>Microsserviços</h3>
                        <p>Sistemas desacoplados, independentes e fáceis de evoluir.</p>
                    </div>
                    <div class="highlight-card reveal">
                        <div class="highlight-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2 3 14h7l-1 8 10-12h-7l1-8Z"/></svg>
                        </div>
                        <h3>Event-Driven</h3>
                        <p>Arquiteturas reativas que respondem em tempo real.</p>
                    </div>
                    <div class="highlight-card reveal">
                        <div class="highlight-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 6v6c0 5 3.4 8.7 8 10 4.6-1.3 8-5 8-10V6l-8-4Z"/></svg>
                        </div>
                        <h3>Segurança</h3>
                        <p>Proteção de dados e processos no padrão enterprise.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============ EMENTA ============ -->
        <section class="section" id="ementa">
            <div class="wrap">
                <div class="section-head reveal">
                    <span class="eyebrow">Ementa do curso</span>
                    <h2>Uma base sólida, do zero ao arquiteto.</h2>
                    <p>Um módulo completo para você entender como sistemas enterprise são pensados, decididos e documentados.</p>
                </div>

                <div class="module-card reveal">
                    <div class="module-head">
                        <div>
                            <span class="tag">Módulo 01</span>
                            <h3>Fundamentos da Arquitetura de Solução</h3>
                        </div>
                        <span class="module-count">13 aulas</span>
                    </div>

                    <div class="accordion">
                        @php
                            $topics = [
                                ['Enterprise Software Systems', 'Como sistemas corporativos complexos são estruturados para suportar escala e negócio.'],
                                ['O que é Arquitetura de Solução', 'Definindo o papel entre a estratégia de negócio e a implementação técnica.'],
                                ['Características de um software que todo arquiteto precisa saber', 'Os atributos de qualidade que sustentam sistemas duradouros.'],
                                ['Princípios do Design de Arquitetura de Solução', 'As bases que guiam decisões técnicas consistentes ao longo do tempo.'],
                                ['O papel do arquiteto de solução', 'Responsabilidades, decisões e comunicação entre times técnicos e de negócio.'],
                                ['Design patterns para arquitetura de soluções', 'Padrões comprovados para resolver problemas recorrentes de design.'],
                                ['Integração híbrida entre plataformas', 'Conectando sistemas legados e modernos sem atrito.'],
                                ['Soluções Cloud-Native', 'Projetando sistemas para a nuvem desde o primeiro dia.'],
                                ['Microsserviços', 'Decompondo sistemas monolíticos em serviços independentes.'],
                                ['Event-driven Architecture', 'Sistemas que reagem a eventos em tempo real, de forma desacoplada.'],
                                ['Segurança em aplicações enterprise', 'Protegendo dados e processos críticos do negócio.'],
                                ['Observabilidade', 'Enxergando o que acontece dentro dos seus sistemas em produção.'],
                                ['SAD - Solution Architecture Document', 'Documentando decisões arquiteturais de forma clara e rastreável.'],
                            ];
                        @endphp

                        @foreach ($topics as $index => $topic)
                            <div class="acc-item">
                                <button class="acc-trigger" type="button" aria-expanded="false">
                                    <span class="acc-num">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                    <span class="acc-title">{{ $topic[0] }}</span>
                                    <svg class="acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
                                </button>
                                <div class="acc-panel">
                                    <div class="acc-panel-inner">{{ $topic[1] }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- ============ PARA QUEM ============ -->
        <section class="section" id="para-quem" style="background: var(--surface);">
            <div class="wrap">
                <div class="section-head reveal">
                    <span class="eyebrow">Para quem é</span>
                    <h2>Feito para quem quer dar o próximo passo.</h2>
                </div>
                <div class="audience-grid">
                    <div class="audience-card reveal">
                        <div class="num">01</div>
                        <h3>Desenvolvedores em evolução</h3>
                        <p>Quem já domina código e quer entender como pensar sistemas inteiros, não apenas features.</p>
                    </div>
                    <div class="audience-card reveal">
                        <div class="num">02</div>
                        <h3>Tech leads</h3>
                        <p>Quem lidera times e precisa tomar decisões técnicas com mais confiança e visão de longo prazo.</p>
                    </div>
                    <div class="audience-card reveal">
                        <div class="num">03</div>
                        <h3>Engenheiros enterprise</h3>
                        <p>Quem atua em ambientes corporativos e quer dominar cloud, microsserviços e integrações complexas.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============ WAITLIST / CTA ============ -->
        <section class="section section-dark" id="inscricao">
            <div class="wrap">
                <div class="waitlist reveal">
                    <span class="eyebrow">Vagas limitadas</span>
                    <h2>Seja um dos primeiros.</h2>
                    <p>Deixe seu e-mail e receba em primeira mão a data de abertura das vagas e condições especiais de pré-lançamento.</p>
                    <form class="waitlist-form" id="waitlist-form">
                        <input type="email" placeholder="seu@email.com" required>
                        <button type="submit">Quero minha vaga</button>
                    </form>
                    <p class="waitlist-success" id="waitlist-success">Prontinho! Você está na lista. Fique de olho no seu e-mail.</p>
                </div>
            </div>
        </section>

        <!-- ============ FOOTER ============ -->
        <footer class="footer">
            <div class="wrap">
                <span class="footer-text">&copy; {{ date('Y') }} Arquitetura de Solução. Todos os direitos reservados.</span>
                <div class="footer-links">
                    <a href="#ementa">Ementa</a>
                    <a href="#para-quem">Para quem é</a>
                    <a href="{{ route('artigos.index') }}">Artigos</a>
                    <a href="#inscricao">Inscrição</a>
                </div>
            </div>
        </footer>

        <script>
            // Accordion
            document.querySelectorAll('.acc-item').forEach(function (item) {
                var trigger = item.querySelector('.acc-trigger');
                var panel = item.querySelector('.acc-panel');
                trigger.addEventListener('click', function () {
                    var isOpen = item.classList.contains('open');
                    document.querySelectorAll('.acc-item.open').forEach(function (openItem) {
                        if (openItem !== item) {
                            openItem.classList.remove('open');
                            openItem.querySelector('.acc-panel').style.maxHeight = null;
                            openItem.querySelector('.acc-trigger').setAttribute('aria-expanded', 'false');
                        }
                    });
                    if (isOpen) {
                        item.classList.remove('open');
                        panel.style.maxHeight = null;
                        trigger.setAttribute('aria-expanded', 'false');
                    } else {
                        item.classList.add('open');
                        panel.style.maxHeight = panel.scrollHeight + 'px';
                        trigger.setAttribute('aria-expanded', 'true');
                    }
                });
            });

            // Reveal on scroll
            var revealEls = document.querySelectorAll('.reveal');
            var observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('in');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15 });
            revealEls.forEach(function (el) { observer.observe(el); });

            // Waitlist form (front-end only)
            var form = document.getElementById('waitlist-form');
            var success = document.getElementById('waitlist-success');
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                success.classList.add('show');
                form.reset();
            });
        </script>
    </body>
</html>
