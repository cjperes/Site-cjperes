<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>

<header class="header">
  <h1>
    CJPERES
  </h1>
  <nav>
    <ul class="header-menu">
      <li><a href="#experiencia">Experiência</a></li>
      <li><a href="#projetos">Projetos</a></li>
      <li><a href="#contato">Contato</a></li>
    </ul>
  </nav>
</header>

<main class="introducao">
  <img src="<?php echo get_template_directory_uri(); ?>/img/perfil2.jpg" alt="Caio Peres">
  <div>
    <h1>Desenvolvedor<br>Front End &<br>UX/UI Designer</h1>
    <p>Especialista em WordPress e Ionic Framework.</p><br />
    <p>Tecnologia e UI Design na <a href="https://nork.digital" target="_blank" rel="noopener noreferrer"><strong>Nork Tech</strong></a>.</p>
  </div>
</main>

<section class="experiencia" id="experiencia" aria-label="Experiência">
  <h2 class="subtitulo">ESPECIALIDADES</h2>
  <div>
    <p class="experiencia-texto">Desenvolvimento de sites, lojas virtuais e aplicativos mobile, <strong>Especialista em WordPress</strong>, <strong>Desenvolvimento de temas</strong> e <strong>Plugins</strong>. Além de desenvolver <strong>aplicativos e PWA em Ionic utilizando Angular</strong>.</p>

    <div class="empresa">

      <h3 class="empresa-titulo">Desenvolvedor WordPress</h3>
      <span class="empresa-titulo">Serviços</span>
      <p class="empresa-texto">Possuo vasta bagagem em desenvolvimento com o WordPress, criando meus próprios temas e plugins e utilizando já existentes.</p>
      <ul class="empresa-habilidades">
        <li>Temas</li>
        <li>Plugins</li>
        <li>Hooks</li>
        <li>Integrações</li>
        <li>WordPress Framework</li>
      </ul>
    </div>

    <div class="empresa">

      <h3 class="empresa-titulo">Aplicativos e PWA</h3>
      <span class="empresa-titulo">Serviços</span>
      <p class="empresa-texto">Desenvolvimento de aplicativos mobile e plataformas PWA, utilizando o Ionic Framework com Angular.</p>
      <ul class="empresa-habilidades">
        <li>Ionic</li>
        <li>Angular</li>
        <li>UI Design</li>
        <li>UX Design</li>
      </ul>
    </div>

    <div class="empresa">

      <h3 class="empresa-titulo">Desenvolvedor Front End</h3>
      <span class="empresa-titulo">Serviços</span>
      <p class="empresa-texto">Participei de centenas de projetos, nacionais e internacionais, pequenos e grandes.</p>
      <ul class="empresa-habilidades">
        <li>Site</li>
        <li>Loja virtual</li>
        <li>Aplicativo</li>
        <li>Plataformas web</li>
        <li>UI Design</li>
        <li>UX Design</li>
      </ul>
    </div>

  </div>
</section>

<section class="formacao" id="projetos" aria-label="Projetos">
  <div class="formacao-container">
    <h2 class="subtitulo">PROJETOS</h2>

    <div>
      <p class="formacao-texto">
        Plugins open source e ferramentas desenvolvidas em meu tempo livre, como forma de contribuição com a comunidade!
      </p>

      <ul class="faculdade-lista">
        <li class="faculdade">
          <span class="faculdade-tipo">Plugin WordPress</span>
          <h3 class="faculdade-curso">Easy Anti Spam Bot</h3>
          <span class="faculdade-instituicao"> <a href="https://wordpress.org/plugins/easy-anti-spam-bots/" target="_blank" rel="noopener noreferrer">Acessar</a> </span>
        </li>
        <li class="faculdade">
          <span class="faculdade-tipo">Plugin WordPress</span>
          <h3 class="faculdade-curso">No Copy Allowed</h3>
          <span class="faculdade-instituicao"><a href="https://wordpress.org/plugins/no-copy-block-text-selection/" target="_blank" rel="noopener noreferrer">Acessar</a></span>
        </li>
        <li class="faculdade">
          <span class="faculdade-tipo">Plugin WordPress</span>
          <h3 class="faculdade-curso">Upload de imagens</h3>
          <span class="faculdade-instituicao"><a href="https://github.com/cjperes/plugin-upload-wordpress" target="_blank" rel="noopener noreferrer">Acessar</a></span>
        </li>
      </ul>
      <ul class="faculdade-lista">
        <li class="faculdade">
          <span class="faculdade-tipo">Otimização WordPress</span>
          <h3 class="faculdade-curso">Security .htaccess</h3>
          <span class="faculdade-instituicao"><a href="https://github.com/cjperes/security-htacess" target="_blank" rel="noopener noreferrer">Acessar</a></span>
        </li>
        <li class="faculdade">
          <span class="faculdade-tipo">Ferramentas</span>
          <h3 class="faculdade-curso">Link Whats</h3>
          <span class="faculdade-instituicao"><a href="https://nork.digital/labs/linkwhats/" target="_blank" rel="noopener noreferrer">Acessar</a></span>
        </li>
        <li class="faculdade">
          <span class="faculdade-tipo">Ferramentas</span>
          <h3 class="faculdade-curso">E-mail crawler</h3>
          <span class="faculdade-instituicao"><a href="https://github.com/cjperes/email-bot" target="_blank" rel="noopener noreferrer">Acessar</a></span>
        </li>
      </ul>
      <!--
        <div class="formacao-extra">
          <div class="cursos">
            <h3>Cursos Intensivos</h3>
            <ul>
              <li>UX Design & UI Design <span>56h</span></li>
              <li>Front End para Iniciantes <span>72h</span></li>
            </ul>
          </div>
          <div class="idiomas">
            <h3>Idiomas</h3>
            <ul>
              <li>Inglês <span>/ Fluente</span></li>
              <li>Espanhol <span>/ Intermediário</span></li>
            </ul>
          </div>
        </div>
      </div>
      -->
    </div>
</section>


<?php get_footer(); ?>