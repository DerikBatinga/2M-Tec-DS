<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Home</title>
</head>
<body>
    <!-- Cabeçalho com logo e navegação -->
    <header class="header">
        <img class="logo_nav" src="img/EtecZL.png" alt="Logo EtecZL">
        <nav>
            <div class="container_nav">
                <ul class="lista_nav">
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
                    <li>
                        <a class="btn" href="Contato/contato.php">Prestar prova</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Seção hero (banner principal) -->
    <section class="hero">
        <h1><?php echo"Etec da Zona Leste" ?></h1>
        <p><?php echo"Venha estudar na melhor Etec da zona leste de São Paulo!" ?></p>
        <a class="btn"><?php echo"Fazer vestibulinho" ?></a>
    </section>

    <!-- Seção história da Etec -->
    <section>
        <div class="container">
            <img src="img/Historia.webp" alt="História da Etec">
            <div class="container_titulotexto">
                <h2><?php echo"Historia da ZL" ?></h2>
                <p>
                    <?php echo"A história da Etec Zona Leste se confunde com o desenvolvimento educacional da região leste de São Paulo. Fundada com o objetivo de suprir a carência de mão de obra especializada em setores tecnológicos e administrativos, a unidade nasceu do compromisso do Governo do Estado com a democratização do ensino técnico de qualidade." ?>
                </p>
                <p>
                    <?php echo"Desde a sua inauguration, a escola passou por diversas expansões, modernizando seus currículos para acompanhar a evolução digital. O que começou com algumas salas de aula transformou-se em um complexo educacional robusto, que hoje atende milhares de alunos em três períodos. Ao longo das décadas, orgulhamo-nos de ter formado profissionais que hoje lideram empresas, criam suas próprias startups e contribuem ativamente para o crescimento econômico e social da nossa comunidade. Nossa trajetória é marcada pela superação e pela certeza de que a educação é a ferramenta mais poderosa de transformação social." ?>
                </p>
            </div>
        </div>
    </section>

    <!-- Seção "Porquê escolher esta Etec" -->
    <section>
        <div class="container">
            <div class="container_titulotexto">
                <h2><?php echo"Porquê escolher está Etec?" ?></h2>
                <p>
                    <?php echo"Escolher a Etec Zona Leste é optar por uma formação que une tradição e inovação. Localizada em um dos pontos mais estratégicos da região, nossa unidade é referência no Centro Paula Souza pela infraestrutura moderna e pelo corpo docente altamente qualificado." ?>
                </p>
                <p>
                    <?php echo"Aqui, o aluno não apenas aprende a teoria, mas vivencia a prática em laboratórios de ponta, preparando-se para os desafios reais do mercado de trabalho. Além do ensino técnico gratuito de excelência, oferecemos um ambiente que fomenta o empreendedorismo, a ética e o desenvolvimento humano. Estudar na Etec ZL é mais do que obter um diploma; é construir uma rede de contatos e abrir portas para as melhores oportunidades de carreira e universidades." ?>
                </p>
            </div>
            <img src="img/Estudantes.webp" alt="Estudantes da Etec">
        </div>
    </section>

    <!-- Seção de destaques e premiações -->
    <section class="destaques">
        <h2><?php echo"Destaques e Premiações" ?></h2>
        <div class="alinhamento_cards">
            <div class="card card_feteps">
                <h3><?php echo"2º Lugar na Feteps" ?></h3>
                <p><?php echo"Projeto do AMS conquista 2º lugar na Feteps com projeto inovador!" ?></p>
            </div>

            <div class="card card_email">
                <h3><?php echo"Novo Email Institucional" ?></h3>
                <p><?php echo"A Etec está com um novo email institucional, consulte o seu NSA para mais informações" ?></p>
            </div>

            <div class="card card_havard">
                <h3><?php echo"Da Etec direto para Havard!" ?></h3>
                <p><?php echo"3º Aulão de inglês de Havard já está disponível em seu EMAIL!" ?></p>
            </div>

            <div class="card card_usp">
                <h3><?php echo"Aluna aprovada na USP" ?></h3>
                <p><?php echo"A estudante de administração Viviane Cardoso foi aceito em medicina na USP!" ?></p>
            </div>
        </div>
    </section>

    <!-- Seção de links úteis -->
    <section class="links_uteis">
        <h2><?php echo"Links úteis" ?></h2>
        <div class="alinhamento_cards">
            <div class="card">
                <i class="ri-database-2-fill"></i>
                <h3><?php echo"NSA" ?></h3>
                <p><?php echo"Sistema estudantil" ?></p>
            </div>

            <div class="card">
                <i class="ri-mail-line"></i>
                <h3><?php echo"Email institucional" ?></h3>
                <p><?php echo"Acesse agora por meio do Outlook" ?></p>
            </div>

            <div class="card">
                <i class="ri-team-fill"></i>
                <h3><?php echo"Vestibulinho" ?></h3>
                <p><?php echo"Candidate-se agora para ter a oportunidade da sua vida!" ?></p>
            </div>

            <div class="card">
                <i class="ri-phone-fill"></i>
                <h3><?php echo"Contato" ?></h3>
                <p><?php echo"Entre em contato agora" ?></p>
            </div>
        </div>
    </section>

    <!-- Rodapé -->
    <footer>
        <div class="footer">
            <div class="footer_col">
                <img src="img/EtecZL.png" alt="Logo EtecZL">
                <p><?php echo"Etec da Zona Leste- Cada vez se superando!" ?></p>
                <ul>
                    <li>
                        <a href=""><i class="ri-instagram-fill"></i><?php echo"Instagram" ?></a>
                    </li>
                    <li>
                        <a href=""><i class="ri-youtube-fill"></i><?php echo"Youtube" ?></a>
                    </li>
                    <li>
                        <a href=""><i class="ri-facebook-box-fill"></i><?php echo"Facebook" ?></a>
                    </li>
                    <li>
                        <a href=""><i class="ri-phone-fill"></i><?php echo"Telefone" ?></a>
                    </li>
                </ul>
            </div>

            <div class="footer_col">
                <p><?php echo"Links rápidos" ?></p>
                <ul>
                    <li>
                        <a href="#"> <i class="ri-home-2-fill"></i><?php echo"Home" ?></a>
                    </li>
                    <li>
                        <a href="Cursos/cursos.php"> <i class="ri-graduation-cap-fill"></i><?php echo"Cursos" ?></a>
                    </li>
                    <li>
                        <a href="Gestão/gestao.php"> <i class="ri-team-fill"></i><?php echo"Gestão" ?></a>
                    </li>
                    <li>
                        <a href="Contato/contato.php"> <i class="ri-phone-fill"></i><?php echo"Contato" ?></a>
                    </li>
                </ul>
            </div>

            <div class="footer_col">
                <h2><?php echo"Receba novidades" ?></h2>
                <label for="email_footer"><?php echo"Email" ?></label>
                <input type="email" name="email" id="email_footer" placeholder="Seu e-mail aqui">
                <button type="submit"><i class="ri-mail-line"></i></button>
            </div>

            <div class="footer_direitos">
                <p>&copy;Etec da Zona Leste- Derik Batinga</p>
            </div>
        </div>
    </footer>
</body>
</html>
