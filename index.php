<?php
// index.php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore ferramentas e soluções criadas por mim para gestão financeira, jogos, IA e mais - cruzferreira.com.br">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>cruzferreira.com.br - Ferramentas e Soluções Personalizadas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css?ver=20250707" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css?ver=20250707" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <link rel="stylesheet" href="assets/style2.css">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
    <link rel="manifest" href="assets/site.webmanifest">
    <style>
        .bg-purple {
            background-color: #e6e6fa;
        }
        .text-purple {
            color: #423e61;
        }
        .border-purple {
            border-color: #6a5acd;
        }
        .roxinho {
            color: #ffffffff;
        }
        .branquinho {
            background-color: white;
            color: #423e61;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }
        .branquinho:hover {
            background-color: #f0f0f5;
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero bg-purple text-white text-center py-5" data-aos="fade-in" data-aos-duration="1000">
        <div class="container">
            <h1 class="display-4 fw-bold">cruzferreira.com.br</h1>
            <p class="lead">Descubra ferramentas e soluções personalizadas que crio como hobby, desde gestão financeira até plataformas de jogos e IA.</p>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5" data-aos="fade-up" data-aos-duration="800">
        <div class="container">
            <h2 class="text-center mb-4">Sobre Mim e Meus Projetos</h2>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p>Como um entusiasta de programação e automações, eu crio ferramentas úteis para resolver problemas do dia a dia. Dos sistemas de gestão financeira ao desenvolvimento de plataformas de jogos, minha missão é tornar a tecnologia acessível e divertida. Ofereço produtos como soluções de cobrança, IA gratuita e comunidades online para jogadores.</p>
                    <p>Meus projetos são inspirados no meu hobby de criar soluções personalizadas, ajudando empresas e indivíduos a gerenciarem finanças, se divertirem com jogos ou explorarem a IA de forma simples e eficaz.</p>
                </div>
                <div class="col-md-6 text-center">
                    <i class="bi bi-gear-fill text-purple display-1"></i>
                    <p class="mt-3">Ferramentas inovadoras para todos os aspectos da vida.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- All Projects Section -->
    <section class="py-5 bg-light" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <h2 class="text-center mb-4">Todos os Meus Projetos</h2>
            <p class="text-center">Aqui está uma visão geral de todos os projetos que desenvolvi. Cada um é projetado para ser prático e acessível.</p>
            <div class="row g-4">
                <!-- Project 1: RC -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 border-purple">
                        <div class="card-body text-center">
                            <i class="bi bi-currency-exchange text-purple display-4 mb-3"></i>
                            <h5 class="card-title">Solução para Regras de Cobrança (RC)</h5>
                            <p class="card-text">Uma ferramenta avançada para gerenciar títulos financeiros.</p>
                            <a href="#rc-section" class="roxinho">Saiba Mais</a>
                        </div>
                    </div>
                </div>

                <!-- Project 2: Bora Noix -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 border-purple">
                        <div class="card-body text-center">
                            <i class="bi bi-controller text-purple display-4 mb-3"></i>
                            <h5 class="card-title">Bora Noix - Plataforma de Jogos</h5>
                            <p class="card-text">Plataforma para criar e juntar-se a salas de jogos multiplayer.</p>
                            <a href="#bora-noix-section" class="roxinho">Acesse Agora</a>
                        </div>
                    </div>
                </div>

                <!-- Project 3: AI Gratuito -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100 border-purple">
                        <div class="card-body text-center">
                            <i class="bi bi-robot text-purple display-4 mb-3"></i>
                            <h5 class="card-title">AI Gratuito baseado em Grok-mini 3.0</h5>
                            <p class="card-text">Assistente de IA para responder dúvidas em tempo real.</p>
                            <a href="#ai-section" class="roxinho">Experimente o Demo</a>
                        </div>
                    </div>
                </div>

                <!-- Project 4: Task Planner -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="card h-100 border-purple">
                        <div class="card-body text-center">
                            <i class="bi bi-check2-circle text-purple display-4 mb-3"></i>
                            <h5 class="card-title">Task Planner</h5>
                            <p class="card-text">Sistema para gerenciar tarefas, com lembretes diários e edição em tempo real.</p>
                            <a href="tool-planner/login.php" class="roxinho">Acesse o Task Planner</a>
                        </div>
                    </div>
                </div>

                <!-- Project 5: Color Pick -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="card h-100 border-purple">
                        <div class="card-body text-center">
                            <i class="bi bi-eyedropper text-purple display-4 mb-3"></i>
                            <h5 class="card-title">Color Pick</h5>
                            <p class="card-text">Sistema para pegar a cor certa a partir de uma palheta ou foto.</p>
                            <a href="https://cruzferreira.com.br/container/index.html" class="roxinho">Experimente</a>
                        </div>
                    </div>
                </div>

                <!-- Project 6: WEB Edit -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="card h-100 border-purple">
                        <div class="card-body text-center">
                            <i class="bi bi-code-slash text-purple display-4 mb-3"></i>
                            <h5 class="card-title">WEB Edit</h5>
                            <p class="card-text">Sistema em tempo real para edição e criação de códigos para websites (HTML, JavaScript e CSS).</p>
                            <a href="https://cruzferreira.com.br/container/webedit.html" class="roxinho">Acesse Agora</a>
                        </div>
                    </div>
                </div>

                <!-- Project 7: Color Palette -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="700">
                    <div class="card h-100 border-purple">
                        <div class="card-body text-center">
                            <i class="bi bi-palette text-purple display-4 mb-3"></i>
                            <h5 class="card-title">Color Palette</h5>
                            <p class="card-text">Sistema de combinação de cores para designers.</p>
                            <a href="https://cruzferreira.com.br/container/palette.html" class="roxinho">Explore</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rest of the sections remain the same... -->

    <!-- Dedicated Section for RC -->
    <section class="py-5" id="rc-section" data-aos="fade-up" data-aos-duration="800">
        <div class="container">
            <h2 class="text-center mb-4">Solução para Regras de Cobrança (RC) - Detalhes</h2>
            <p class="text-center">Esta ferramenta é projetada para simplificar a gestão financeira de empresas, com integração direta à API Omie.</p>
            <div class="row">
                <div class="col-md-6">
                    <h4>Funcionalidades Principais</h4>
                    <ul>
                        <li>Gestão de títulos caso a caso.</li>
                        <li>Integração com Omie API.</li>
                        <li>Registro de contatos.</li>
                        <li>Relatórios detalhados.</li>
                        <li>Edição em massa.</li>
                    </ul>
                    <p>Planos começam a partir de R$ 100 por mês.</p>
                </div>
                <div class="col-md-6 text-center">
                    <i class="bi bi-currency-exchange text-purple display-2"></i>
                    <p class="mt-3">Benefícios: Aumente a eficiência financeira.</p>
                    <a href="https://rc.cruzferreira.com.br" class="roxinho">Acesse o RC Agora</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Dedicated Section for Bora Noix -->
    <section class="py-5 bg-light" id="bora-noix-section" data-aos="fade-up" data-aos-duration="800">
        <div class="container">
            <h2 class="text-center mb-4">Bora Noix - Plataforma de Jogos - Detalhes</h2>
            <p class="text-center">Plataforma para criar e juntar-se a salas de jogos multiplayer.</p>
            <div class="row">
                <div class="col-md-6">
                    <h4>Como Funciona</h4>
                    <p>Crie salas com horário e participantes.</p>
                    <ul>
                        <li>Restrições de idade.</li>
                        <li>Opções para jogos variados.</li>
                        <li>Facilidade de uso.</li>
                    </ul>
                    <p>Gratuito para uso básico.</p>
                </div>
                <div class="col-md-6 text-center">
                    <i class="bi bi-controller text-purple display-2"></i>
                    <p class="mt-3">Benefícios: Divirta-se com amigos.</p>
                    <a href="https://boranoix.com.br" class="roxinho">Acesse Bora Noix Agora</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Dedicated Section for AI Gratuito -->
    <section class="py-5" id="ai-section" data-aos="fade-up" data-aos-duration="800">
        <div class="container">
            <h2 class="text-center mb-4">AI Gratuito baseado em Grok-mini 3.0 - Detalhes</h2>
            <p class="text-center">Assistente de IA para responder dúvidas em tempo real.</p>
            <div class="row">
                <div class="col-md-6">
                    <h4>Funcionalidades</h4>
                    <p>Respostas contextuais e criativas.</p>
                    <ul>
                        <li>Integração gratuita.</li>
                        <li>Exemplos de uso.</li>
                        <li>Benefícios: Aprenda rapidamente.</li>
                    </ul>
                </div>
                <div class="col-md-6 text-center">
                    <i class="bi bi-robot text-purple display-2"></i>
                    <p class="mt-3">Benefícios: Respostas rápidas.</p>
                    <a href="https://ai.cruzferreira.com.br" class="roxinho">Experimente o AI Agora</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5 bg-light" data-aos="fade-up" data-aos-duration="800">
        <div class="container">
            <h2 class="text-center mb-4">Funcionalidades Destacadas</h2>
            <p class="text-center">Exemplos de funcionalidades dos meus produtos.</p>
            <div class="row g-4">
                <div class="col-md-4" data-aos="zoom-in" data-aos-duration="600">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="bi bi-graph-up text-purple display-4 mb-3"></i>
                            <h5 class="card-title">Relatórios e Análises</h5>
                            <p class="card-text">Disponível no RC.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="100">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="bi bi-people-fill text-purple display-4 mb-3"></i>
                            <h5 class="card-title">Comunidade e Multijogador</h5>
                            <p class="card-text">Disponível no Bora Noix.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="200">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="bi bi-lightbulb text-purple display-4 mb-3"></i>
                            <h5 class="card-title">Respostas Inteligentes</h5>
                            <p class="card-text">Disponível no AI.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="bg-purple text-white text-center py-5" data-aos="zoom-in" data-aos-duration="1000">
        <div class="container">
            <h2 class="mb-4">Quer algo só para você ou sua empresa?</h2>
            <p>Contato@cruzferreira.com.br</p>

        </div>
    </section>


    <!-- Footer -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js?ver=20250707"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            easing: 'ease-in-out'
        });
    </script>
<?php
$remoteContent = file_get_contents('https://cruzferreira.com.br/footer.php');
if ($remoteContent !== false) {
    echo $remoteContent;  // Output the fetched content
} else {
    echo "Failed to fetch the remote file.";
}
?>
</body>
</html>

