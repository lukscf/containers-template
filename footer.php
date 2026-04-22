<?php
// index.php
// Este arquivo PHP inclui a estrutura completa com o div wrapper para o footer.
$ano = date('Y'); // Para o copyright dinâmico
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Projetos - Com Footer</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- AOS para animações -->
    <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet">
    
    <!-- Estilos Personalizados para o footer -->
    <style>
        /* Variáveis de CSS com nomes específicos para megafooter */
        :root {
            --megafooter-bg-primary: #aaaaaaff; /* Cinza escuro para fundo principal */
            --megafooter-bg-secondary: #0e0e0e; /* Tom mais escuro para elementos */
            --megafooter-text-color: #e0e0e0; /* Cinza claro para texto */
            --megafooter-accent-color: #afafafff; /* Roxo acentuado */
            --megafooter-accent-hover: #593196; /* Roxo mais escuro para hover */
        }
        
        /* Estilos para o footer, escopados em .megafooter */
        .megafooter {
            background-color: var(--megafooter-bg-secondary);
            padding: 2rem 0;
            box-shadow: 0 -2px 10px rgba(255, 255, 255, 0.5);
            transition: all 0.3s ease;
        }
        
        .megafooter h5 {
            color: var(--megafooter-accent-color);
            font-weight: 600;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7); /* Adicionado para melhor legibilidade */
        }
        
        .megafooter p {
            font-size: 0.9rem;
            margin-bottom: 1.5rem; /* Aumentado para melhor espaçamento */
            color: var(--megafooter-text-color); /* Usando variável para consistência */
        }
        
        /* Estilo para links no footer */
        .megafooter a {
            color: var(--megafooter-accent-color); /* Cor padrão */
            text-decoration: none; /* Remover sublinhado para um look mais clean */
            transition: color 0.3s ease, text-shadow 0.3s ease; /* Transição suave */
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); /* Sombra leve para destaque */
        }
        
        .megafooter a:hover {
            color: #ffffff; /* Alterar para branco no hover, como solicitado */
            text-shadow: 1px 1px 4px rgba(255, 255, 255, 0.8); /* Sombra mais proeminente no hover para efeito bonito */
        }
        
        /* Estilo para botões */
        .megafooter-button-outline {
            color: var(--megafooter-accent-color);
            border-color: var(--megafooter-accent-color);
            border-radius: 25px; /* Aumentado para bordas mais arredondadas e bonitas */
            padding: 0.6rem 1.2rem; /* Aumentado para botões maiores e mais clicáveis */
            transition: all 0.3s ease;
            background-color: transparent;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3); /* Adicionado sombra para profundidade */
            margin: 0.25rem; /* Espaçamento entre botões */
        }
        
        .megafooter-button-outline:hover {
            background-color: var(--megafooter-accent-color);
            color: #ffffff;
            border-color: var(--megafooter-accent-hover);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4); /* Sombra maior no hover para efeito 3D */
        }
        
        .megafooter ul {
            list-style: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        
        .megafooter li {
            margin: 0.5rem;
        }
        
        /* Estilo para o texto de copyright e contato */
        .megafooter .copyright {
            font-size: 0.8rem; /* Menor tamanho para um look mais elegante */
            font-style: italic; /* Adicionado para um toque estilizado */
            color: var(--megafooter-text-color);
        }
        
        /* Animação de aparecimento para .megafooter */
        .megafooter[data-aos] {
            opacity: 0;
            transition-property: opacity, transform;
        }
        
        .megafooter[data-aos].aos-animate {
            opacity: 1;
            transform: translateY(0);
        }
        .contcont {
            background-color: #0e0e0e;
            padding: 15px;
            text-align:center;
            color: white;
        }

    </style>
</head>
<body>
    <!-- Div wrapper para o footer -->
    <div id="megafooter-wrapper">
        <footer class="megafooter py-4 mt-5;" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
            <div class="contcont">
                <h5 class="mb-3">Meus Projetos e Contato</h5>
                <p class="mb-4">Aqui você encontra uma visão geral dos meus projetos desenvolvidos. Cada um é prático, acessível e criado com tecnologia de ponta. Explore-os e entre em contato para mais informações!</p>
                
                <!-- Lista de Projetos com Links -->
                <div class="row justify-content-center">
                    <div class="col-md-8">
                    <ul class="list-unstyled d-flex flex-wrap justify-content-center">
                        <li class="me-3 mb-2"><a href="https://rc.cruzferreira.com.br" class="btn btn-sm megafooter-button-outline" target="_blank" rel="noopener noreferrer">Solução para Regras de Cobrança</a></li>
                        <li class="me-3 mb-2"><a href="https://boranoix.com.br" class="btn btn-sm megafooter-button-outline" target="_blank" rel="noopener noreferrer">Bora Noix</a></li>
                        <li class="me-3 mb-2"><a href="https://ai.cruzferreira.com.br" class="btn btn-sm megafooter-button-outline" target="_blank" rel="noopener noreferrer">AI Gratuito</a></li>
                        <li class="me-3 mb-2"><a href="https://cruzferreira.com.br/tool-planner/login.php" class="btn btn-sm megafooter-button-outline" target="_blank" rel="noopener noreferrer">Task Planner</a></li>
                        <li class="me-3 mb-2"><a href="https://cruzferreira.com.br/container/index.html" class="btn btn-sm megafooter-button-outline" target="_blank" rel="noopener noreferrer">Color Pick</a></li>
                        <li class="me-3 mb-2"><a href="https://cruzferreira.com.br/container/webedit.html" class="btn btn-sm megafooter-button-outline" target="_blank" rel="noopener noreferrer">WEB Edit</a></li>
                        <li class="me-3 mb-2"><a href="https://cruzferreira.com.br/container/palette.html" class="btn btn-sm megafooter-button-outline" target="_blank" rel="noopener noreferrer">Color Palette</a></li>
                        <li class="me-3 mb-2"><a href="https://cruzferreira.com.br/TheDot" class="btn btn-sm megafooter-button-outline" target="_blank" rel="noopener noreferrer">The Dot</a></li>
                    </ul>
                    </div>
                </div>
                
                <!-- Informações de Copyright e Contato -->
                <p class="mt-4 copyright">&copy; <?php echo $ano; ?> Cruz Ferreira. Todos os direitos reservados. Desenvolvido com amor e código, inspirado em IA como o Grok.</p>
                <p class="copyright">Contato: <a href="mailto:contato@cruzferreira.com" style="color: var(--megafooter-accent-color);">contato@cruzferreira.com</a> | Redes Sociais: <a href="https://www.linkedin.com/in/lucas-cruz-ferreira/">Linkedin</a></li></p>
            </div>
        </footer>
    </div>
    <!-- Scripts Necessários -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            duration: 800
        });
    </script>

    
</body>
</html>