<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link para o CSS específico da página inicial -->
    <link rel="stylesheet" href="index.css">
    <!-- Ícones da biblioteca Remix Icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>EtecZL-Início</title>
</head>
<body>
    <!-- ==========================================
         CABEÇALHO / HEADER
         Barra de navegação fixa no topo
         ========================================== -->
    <header class="header">
        <!-- Logo da Etec na navegação -->
        <img class="logo_nav" src="img/EtecZL.png" alt="Logo EtecZL">
        <nav>
            <div class="container_nav">
                <!-- Lista de links de navegação -->
                <ul class="lista_nav">
                    <!-- Link para a página inicial (página atual) -->
                    <li>
                        <a href="#"> <i class="ri-home-2-fill"></i>Home</a>
                    </li>
                    <!-- Link para a página de cursos -->
                    <li>
                        <a href="Cursos/cursos.php"> <i class="ri-graduation-cap-fill"></i>Cursos</a>
                    </li>
                    <!-- Link para a página de gestão -->
                    <li>
                        <a href="Gestão/gestao.php"> <i class="ri-team-fill"></i>Gestão</a>
                    </li>
                    <!-- Link para a página de contato -->
                    <li>
                        <a href="Contato/contato.php"> <i class="ri-phone-fill"></i>Contato</a>
                    </li>
                    <!-- Botão de chamada para ação -->
                    <li>
                        <a class="btn" href="Contato/contato.php">Prestar prova</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- ==========================================
         SEÇÃO HERO
         Banner principal da página
         ========================================== -->
    <section class="hero">
        <h1>Etec da Zona Leste</h1>
        <p>Venha estudar na melhor Etec da zona leste de São Paulo!</p>
        <a class="btn">Fazer vestibulinho</a>
    </section>

    <!-- ==========================================
         SEÇÃO: HISTÓRIA DA ETEC
         Conta a história da Etec Zona Leste
         ========================================== -->
    <section>
        <div class="container">
            <!-- Imagem relacionada à história -->
            <img src="img/Historia.webp" alt="História da Etec">
            <div class="container_titulotexto">
                <h2>Historia da ZL</h2>
                <p>
                    A história da Etec Zona Leste se confunde com o desenvolvimento educacional da região leste de São Paulo. Fundada com o objetivo de suprir a carência de mão de obra especializada em setores tecnológicos e administrativos, a unidade nasceu do compromisso do Governo do Estado com a democratização do ensino técnico de qualidade.
                </p>
                <p>
                    Desde a sua inauguration, a escola passou por diversas expansões, modernizando seus currículos para acompanhar a evolução digital. O que começou com algumas salas de aula transformou-se em um complexo educacional robusto, que hoje atende milhares de alunos em três períodos. Ao longo das décadas, orgulhamo-nos de ter formado profissionais que hoje lideram empresas, criam suas próprias startups e contribuem ativamente para o crescimento econômico e social da nossa comunidade. Nossa trajetória é marcada pela superação e pela certeza de que a educação é a ferramenta mais poderosa de transformação social.
                </p>
            </div>
        </div>
    </section>

    <!-- ==========================================
         SEÇÃO: PORQUÊ ESCOLHER ESTA ETEC
         Diferenciais da Etec Zona Leste
         ========================================== -->
    <section>
        <div class="container">
            <div class="container_titulotexto">
                <h2>Porquê escolher está Etec?</h2>
                <p>
                    Escolher a Etec Zona Leste é optar por uma formação que une tradição e inovação. Localizada em um dos pontos mais estratégicos da região, nossa unidade é referência no Centro Paula Souza pela infraestrutura moderna e pelo corpo docente altamente qualificado.
                </p>
                <p>
                    Aqui, o aluno não apenas aprende a teoria, mas vivencia a prática em laboratórios de ponta, preparando-se para os desafios reais do mercado de trabalho. Além do ensino técnico gratuito de excelência, oferecemos um ambiente que fomenta o empreendedorismo, a ética e o desenvolvimento humano. Estudar na Etec ZL é mais do que obter um diploma; é construir uma rede de contatos e abrir portas para as melhores oportunidades de carreira e universidades.
                </p>
            </div>
            <img src="img/Estudantes.webp" alt="Estudantes da Etec">
        </div>
    </section>

    <!-- ==========================================
         SEÇÃO: DESTAQUES E PREMIAÇÕES
         Mostra as principais notícias/premiações
         ========================================== -->
    <section class="destaques">
        <h2>Destaques e Premiações</h2>
        <!-- Container dos cards de destaque -->
        <div class="alinhamento_cards">
            <!-- Card: 2º Lugar na Feteps -->
            <div class="card card_feteps">
                <h3>2º Lugar na Feteps</h3>
                <p>Projeto do AMS conquista 2º lugar na Feteps com projeto inovador!</p>
            </div>

            <!-- Card: Novo Email Institucional -->
            <div class="card card_email">
                <h3>Novo Email Institucional</h3>
                <p>A Etec está com um novo email institucional, consulte o seu NSA para mais informações</p>
            </div>

            <!-- Card: Aulão de Inglês de Harvard -->
            <div class="card card_havard">
                <h3>Da Etec direto para Havard!</h3>
                <p>3º Aulão de inglês de Havard já está disponível em seu EMAIL!</p>
            </div>

            <!-- Card: Aluna aprovada na USP -->
            <div class="card card_usp">
                <h3>Aluna aprovada na USP</h3>
                <p>A estudante de administração Viviane Cardoso foi aceito em medicina na USP!</p>
            </div>
        </div>
    </section>

    <!-- ==========================================
         SEÇÃO: LINKS ÚTEIS
         Links para sistemas e recursos importantes
         ========================================== -->
    <section class="links_uteis">
        <h2>Links úteis</h2>
        <!-- Container dos cards de links -->
        <div class="alinhamento_cards">
            <!-- Card: NSA (Sistema Estudantil) -->
            <div class="card">
                <i class="ri-database-2-fill"></i>
                <h3>NSA</h3>
                <p>Sistema estudantil</p>
            </div>

            <!-- Card: Email Institucional -->
            <div class="card">
                <i class="ri-mail-line"></i>
                <h3>Email institucional</h3>
                <p>Acesse agora por meio do Outlook</p>
            </div>

            <!-- Card: Vestibulinho -->
            <div class="card">
                <i class="ri-team-fill"></i>
                <h3>Vestibulinho</h3>
                <p>Candidate-se agora para ter a oportunidade da sua vida!</p>
            </div>

            <!-- Card: Contato -->
            <div class="card">
                <i class="ri-phone-fill"></i>
                <h3>Contato</h3>
                <p>Entre em contato agora</p>
            </div>
        </div>
    </section>

    <!-- ==========================================
         RODAPÉ / FOOTER
         Informações de contato e links rápidos
         ========================================== -->
    <footer>
        <div class="footer">
            <!-- Coluna com logo e informações da Etec -->
            <div class="footer_col">
                <img src="img/EtecZL.png" alt="Logo EtecZL">
                <p>Etec da Zona Leste- Cada vez se superando!</p>
                <!-- Links das redes sociais -->
                <ul>
                    <li>
                        <a href=""><i class="ri-instagram-fill"></i>Instagram</a>
                    </li>
                    <li>
                        <a href=""><i class="ri-youtube-fill"></i>Youtube</a>
                    </li>
                    <li>
                        <a href=""><i class="ri-facebook-box-fill"></i>Facebook</a>
                    </li>
                    <li>
                        <a href=""><i class="ri-phone-fill"></i>Telefone</a>
                    </li>
                </ul>
            </div>

            <!-- Coluna com links de navegação rápida -->
            <div class="footer_col">
                <p>Links rápidos</p>
                <ul>
                    <li>
                        <a href="#"> <i class="ri-home-2-fill"></i>Home</a>
                    </li>
                    <li>
                        <a href="Cursos/cursos.php"> <i class="ri-graduation-cap-fill"></i>Cursos</a>
                    </li>
                    <li>
                        <a href="Gestão/gestao.php"> <i class="ri-team-fill"></i>Gestão</a>
                    </li>
                    <li>
                        <a href="Contato/contato.php"> <i class="ri-phone-fill"></i>Contato</a>
                    </li>
                </ul>
            </div>

            <!-- Coluna para receber novidades por email -->
            <div class="footer_col">
                <h2>Receba novidades</h2>
                <label for="email_footer">Email</label>
                <input type="email" name="email" id="email_footer" placeholder="Seu e-mail aqui">
                <button type="submit"><i class="ri-mail-line"></i></button>
            </div>

            <!-- Barra de direitos autorais -->
            <div class="footer_direitos">
                <p>&copy;Etec da Zona Leste- Derik Batinga</p>
            </div>
        </div>
    </footer>
</body>
</html>
