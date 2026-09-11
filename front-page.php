<?php
get_header(); 
?>

<main>
    <!-- SEÇÃO 1: HERO (SOBRE) -->
    <section id="sobre" class="relative py-20 md:py-32 bg-grad-hero transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-12 gap-8 items-center">
            <div class="md:col-span-7 space-y-6 reveal">
                <span class="text-gradient font-bold tracking-wider uppercase text-sm block">Desenvolvedor Web Full Stack</span>
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight leading-tight">
                    Construindo soluções web <br><span class="text-gradient">robustas e modernas</span>.
                </h1>
                <p class="text-text-muted text-lg leading-relaxed">
                    Olá! Sou o especialista por trás da <strong>AqGoEs</strong>. Sou desenvolvedor Full Stack focado em criar aplicações modernas, funcionais e otimizadas. Unindo uma sólida experiência em suporte e análise técnica no setor público com o estudo constante das tecnologias mais demandadas do mercado, transformo ideias em código de alto desempenho.
                </p>
                <div class="pt-4 flex flex-wrap gap-4">
                    <a href="#projetos" class="bg-grad-primary text-white font-semibold px-6 py-3 rounded-lg hover:opacity-90 transition-opacity">
                        Ver Projetos
                    </a>
                    <a href="#trajetoria" class="border border-custom hover:border-[#6c63ff] px-6 py-3 rounded-lg font-medium transition-all">
                        Conhecer Trajetória
                    </a>
                </div>
            </div>
            <div class="md:col-span-5 flex justify-center reveal">
                <div class="w-72 h-72 rounded-full bg-grad-primary p-1 shadow-2xl">
                    <div class="w-full h-full bg-bg rounded-full flex flex-col items-center justify-center text-center p-6 transition-colors duration-300">
                        <span class="text-5xl mb-2">💻</span>
                        <span class="font-bold text-xl text-text-primary">AqGoEs</span>
                        <span class="text-sm text-text-muted">Brasília - DF</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SEÇÃO 2: TRAJETÓRIA -->
    <section id="trajetoria" class="bg-bg-2 py-20 border-y border-custom transition-colors duration-300">
        <div class="max-w-4xl mx-auto px-4">
            <div class="text-center mb-12 reveal">
                <h2 class="text-3xl font-bold text-gradient">Experiência &amp; Trajetória</h2>
                <p class="text-text-muted mt-2">Sólida carreira construída com suporte e análise de TI no Senado Federal.</p>
            </div>
            <!-- TIMELINE -->
            <div class="relative border-l border-custom ml-4 md:ml-6 space-y-10">
                <div class="relative pl-8 reveal">
                    <div class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-[#ff6584] border-4 border-bg-2"></div>
                    <span class="text-sm text-[#ff6584] font-semibold">Momento Atual</span>
                    <h3 class="text-xl font-bold mt-1 text-text-primary">Analista De Suporte Pleno (Terceirizado)</h3>
                    <h4 class="text-text-muted text-sm">Comissões do Senado Federal</h4>
                    <p class="text-text-muted mt-2 text-sm leading-relaxed">
                        Atuação estratégica de suporte e análise técnica diretamente nas comissões do Senado Federal, garantindo estabilidade, segurança e eficiência no fluxo tecnológico de processos legislativos críticos.
                    </p>
                </div>
                <div class="relative pl-8 reveal">
                    <div class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-[#6c63ff] border-4 border-bg-2"></div>
                    <span class="text-sm text-[#6c63ff] font-semibold">Etapa Anterior</span>
                    <h3 class="text-xl font-bold mt-1 text-text-primary">Técnico Nível 1 &amp; Nível 2 (Terceirizado)</h3>
                    <h4 class="text-text-muted text-sm">Senado Federal</h4>
                    <p class="text-text-muted mt-2 text-sm leading-relaxed">
                        Atuação na linha de frente do suporte de TI, solucionando incidentes complexos de infraestrutura e sistemas, além de garantir a continuidade operacional das atividades parlamentares.
                    </p>
                </div>
                <div class="relative pl-8 reveal">
                    <div class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-[#ffa94d] border-4 border-bg-2"></div>
                    <span class="text-sm text-[#ffa94d] font-semibold">Formação &amp; Autonomia</span>
                    <h3 class="text-xl font-bold mt-1 text-text-primary">Estudos por Conta própria &amp; Ensino Superior</h3>
                    <h4 class="text-text-muted text-sm">Graduação Full Stack</h4>
                    <p class="text-text-muted mt-2 text-sm leading-relaxed">
                        Unindo a disciplina dos estudos autodidatas com uma formação superior estruturada em Desenvolvimento Full Stack. Dedicação diária ao aprendizado prático de arquitetura de software e engenharia web (Python, HTML, CSS, JS e WordPress).
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- SEÇÃO 3: TECNOLOGIAS -->
    <section id="tecnologias" class="py-20 max-w-6xl mx-auto px-4">
        <div class="text-center mb-16 reveal">
            <h2 class="text-3xl font-bold text-gradient">Tecnologias &amp; Especialidades</h2>
            <p class="text-text-muted mt-2">O conjunto de ferramentas que utilizo para criar soluções completas.</p>
        </div>
        <div class="grid md:grid-cols-4 gap-6">
            <div class="bg-bg-card p-6 rounded-xl border border-custom hover:scale-[1.02] transition-all shadow-sm reveal">
                <div class="w-12 h-12 rounded-lg bg-grad-html flex items-center justify-center text-white font-extrabold text-lg mb-4 shadow-lg">HTML</div>
                <h3 class="text-lg font-bold mb-1 text-text-primary">Estrutura Web</h3>
                <p class="text-text-muted text-xs leading-relaxed">Desenvolvimento de marcação semântica focada em acessibilidade e SEO.</p>
            </div>
            <div class="bg-bg-card p-6 rounded-xl border border-custom hover:scale-[1.02] transition-all shadow-sm reveal">
                <div class="w-12 h-12 rounded-lg bg-grad-css flex items-center justify-center text-white font-extrabold text-lg mb-4 shadow-lg">CSS</div>
                <h3 class="text-lg font-bold mb-1 text-text-primary">Estilização</h3>
                <p class="text-text-muted text-xs leading-relaxed">Layouts responsivos, animações fluidas e design moderno sob medida.</p>
            </div>
            <div class="bg-bg-card p-6 rounded-xl border border-custom hover:scale-[1.02] transition-all shadow-sm reveal">
                <div class="w-12 h-12 rounded-lg bg-grad-js flex items-center justify-center text-slate-900 font-extrabold text-lg mb-4 shadow-lg">JS</div>
                <h3 class="text-lg font-bold mb-1 text-text-primary">Interatividade</h3>
                <p class="text-text-muted text-xs leading-relaxed">Comportamentos dinâmicos, consumo de APIs e lógica client-side.</p>
            </div>
            <div class="bg-bg-card p-6 rounded-xl border border-custom hover:scale-[1.02] transition-all shadow-sm reveal">
                <div class="w-12 h-12 rounded-lg bg-grad-python flex items-center justify-center text-slate-900 font-extrabold text-lg mb-4 shadow-lg">PY</div>
                <h3 class="text-lg font-bold mb-1 text-text-primary">Back-End &amp; Lógica</h3>
                <p class="text-text-muted text-xs leading-relaxed">Desenvolvimento focado em lógica, scripts de automação e APIs robustas.</p>
            </div>
        </div>
        <div class="mt-12 bg-bg-card border border-custom p-8 rounded-2xl flex flex-col md:flex-row items-center justify-between gap-6 transition-colors duration-300 reveal">
            <div>
                <h3 class="text-xl font-bold text-text-primary">Projetos Rápidos &amp; Landing Pages com WordPress</h3>
                <p class="text-text-muted text-sm mt-1">Criação de sites institucionais inteligentes e editáveis com a potência do WordPress de forma ágil.</p>
            </div>
            <a href="https://wa.me/+5561991768703?text=Aguarde%20vamos%20responder%20assim%20que%20poss%C3%ADvel!" target="_blank" rel="noopener noreferrer" class="bg-grad-primary text-white font-semibold px-6 py-3 rounded-lg hover:opacity-90 transition-opacity whitespace-nowrap">
                Solicitar Orçamento
            </a>
        </div>
    </section>

    <!-- SEÇÃO 4: TRABALHOS & PROJETOS (NOVA SEÇÃO) -->
    <section id="projetos" class="bg-bg-2 py-20 border-t border-custom transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16 reveal">
                <h2 class="text-3xl font-bold text-gradient">Trabalhos &amp; Projetos</h2>
                <p class="text-text-muted mt-2">Alguns dos meus projetos desenvolvidos e soluções em destaque.</p>
            </div>

            <!-- GRID COM 3 CAIXAS DE PROJETOS -->
            <div class="grid md:grid-cols-3 gap-8">
                
                <!-- CAIXA PROJETO 1 -->
                <div class="bg-bg-card rounded-xl border border-custom overflow-hidden hover:scale-[1.02] transition-all shadow-md flex flex-col justify-between reveal">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-2xl">🚀</span>
                            <span class="text-xs font-semibold px-3 py-1 rounded-full bg-slate-800 text-text-muted border border-custom">Full Stack</span>
                        </div>
                        <h3 class="text-xl font-bold text-text-primary mb-2">Blog AqGoES</h3>
                        <p class="text-text-muted text-sm leading-relaxed mb-4">
                            Aplicação web completa com integração de API REST, painel administrativo dinâmico e interface responsiva otimizada para performance.
                        </p>
                        <div class="flex flex-wrap gap-2 text-xs font-medium text-text-muted">
                            <span class="px-2 py-1 bg-bg rounded border border-custom">WordPress</span>
                            <span class="px-2 py-1 bg-bg rounded border border-custom">PHP</span>
                            <span class="px-2 py-1 bg-bg rounded border border-custom">Tailwind</span>
                        </div>
                    </div>
                    <div class="px-6 py-4 bg-bg border-t border-custom flex justify-between items-center text-sm">
                        <a href="https://aqgoes.com/blog/" target="_blank" rel="noopener noreferrer" class="text-gradient font-medium hover:underline">Ver Detalhes &rarr;</a>
                        <a href="https://github.com/aqgoesdf/tema-wp-blog-aqgoes" target="_blank" rel="noopener noreferrer" class="text-text-muted hover:text-text-primary transition-colors">GitHub</a>
                    </div>
                </div>

                <!-- CAIXA PROJETO 2 -->
                <div class="bg-bg-card rounded-xl border border-custom overflow-hidden hover:scale-[1.02] transition-all shadow-md flex flex-col justify-between reveal">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-2xl">⚡</span>
                            <span class="text-xs font-semibold px-3 py-1 rounded-full bg-slate-800 text-text-muted border border-custom">Landing Page</span>
                        </div>
                        <h3 class="text-xl font-bold text-text-primary mb-2">Front-End AqGoEs</h3>
                        <p class="text-text-muted text-sm leading-relaxed mb-4">
                            Landing page de alta conversão construída com foco em acessibilidade, suporte a Dark Mode automático e taxa de carregamento veloz.
                        </p>
                        <div class="flex flex-wrap gap-2 text-xs font-medium text-text-muted">
                            <span class="px-2 py-1 bg-bg rounded border border-custom">HTML5</span>
                            <span class="px-2 py-1 bg-bg rounded border border-custom">CSS3</span>
                            <span class="px-2 py-1 bg-bg rounded border border-custom">JavaScript</span>
                        </div>
                    </div>
                    <div class="px-6 py-4 bg-bg border-t border-custom flex justify-between items-center text-sm">
                        <a href="https://aqgoes.com/" target="_blank" rel="noopener noreferrer" class="text-gradient font-medium hover:underline">Ver Detalhes &rarr;</a>
                        <a href="https://github.com/aqgoesdf/Landing-Page" target="_blank" rel="noopener noreferrer" class="text-text-muted hover:text-text-primary transition-colors">GitHub</a>
                    </div>
                </div>

                <!-- CAIXA PROJETO 3 -->
                <div class="bg-bg-card rounded-xl border border-custom overflow-hidden hover:scale-[1.02] transition-all shadow-md flex flex-col justify-between reveal">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-2xl">🐍</span>
                            <span class="text-xs font-semibold px-3 py-1 rounded-full bg-slate-800 text-text-muted border border-custom">GitHub / AqGoEs</span>
                        </div>
                        <h3 class="text-xl font-bold text-text-primary mb-2">GitHub AqGoES </h3>
                        <p class="text-text-muted text-sm leading-relaxed mb-4">
                            Script e sistema de suporte para automação de processos, front-end back-end, todos os projetos criado pelo aqgoes.
                        </p>
                        <div class="flex flex-wrap gap-2 text-xs font-medium text-text-muted">
                            <span class="px-2 py-1 bg-bg rounded border border-custom">Python</span>
                            <span class="px-2 py-1 bg-bg rounded border border-custom">API</span>
                            <span class="px-2 py-1 bg-bg rounded border border-custom">SQL</span>
                        </div>
                    </div>
                    <div class="px-6 py-4 bg-bg border-t border-custom flex justify-between items-center text-sm">
                        <a href="https://github.com/aqgoesdf" target="_blank" rel="noopener noreferrer" class="text-gradient font-medium hover:underline">Ver Detalhes &rarr;</a>
                        <a href="https://github.com/aqgoesdf" target="_blank" rel="noopener noreferrer" class="text-text-muted hover:text-text-primary transition-colors">GitHub</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<?php 
get_footer(); 
?>