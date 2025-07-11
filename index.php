<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Situs Informática</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        html { scroll-behavior: smooth; }
        section { padding: 60px 0; }
        footer { background-color: #f8f9fa; padding: 20px 0; }
        .nav-link {
            font-weight: 500;
            position: relative;
            transition: 0.3s;
        }
        .nav-link:hover {
            color: #0d6efd !important;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #0d6efd;
            transition: width 0.3s;
        }
        .nav-link:hover::after {
            width: 100%;
        }
        .carousel-inner img {
            height: 400px;
            object-fit: cover;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center gap-2" href="#">
        <img src="assets/img/logo.png" alt="Situs Informática" height="50">
        <span class="fw-bold fs-5 text-primary">SITUS INFORMÁTICA</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSitus">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSitus">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="#">HOME</a></li>
        <li class="nav-item"><a class="nav-link" href="#sistemas">SISTEMAS</a></li>
        <li class="nav-item"><a class="nav-link" href="#contato">CONTATO</a></li>
        <li class="nav-item"><a class="nav-link" href="#sobre">SOBRE</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- CARROSSEL -->
<div id="carouselSistemas" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/Sistema_erp.png" class="d-block w-100" alt="Sistema ERP">
    </div>
    <div class="carousel-item">
      <img src="assets/img/Sistema_gestor.png" class="d-block w-100" alt="Sistema Atendimento">
    </div>
    <div class="carousel-item">
      <img src="assets/img/Sistema_pedido.png" class="d-block w-100" alt="Sistema Pedidos">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselSistemas" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselSistemas" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- HOME -->
<section id="home" class="bg-light text-center">
  <div class="container">
    <h1 class="display-4 fw-bold">Bem-vindo à <span class="text-primary">Situs Informática</span></h1>
    <p class="lead mt-3">
      Somos especialistas em soluções de <strong>automação comercial</strong>, oferecendo sistemas modernos,
      eficientes e personalizados para o seu negócio. Atuamos com foco total em tecnologia, suporte de qualidade
      e atendimento humanizado. Seja você um pequeno comércio ou uma grande rede, temos a solução ideal para o seu crescimento.
    </p>
    <p class="mt-3">
      Trabalhamos com sistemas para frente de caixa, gestão empresarial (ERP), controle de estoque, vendas, 
      emissão de notas fiscais e atendimento integrado via WhatsApp.
    </p>
  </div>
</section>


<!-- SISTEMAS -->
<section id="sistemas">
    <div class="container">
        <h2 class="text-center mb-5">Nossos Sistemas</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow text-center">
                    <img src="assets/img/Sistema_erp.png" class="card-img-top" alt="Sistema ERP">
                    <div class="card-body">
                        <h5 class="card-title">Sistema ERP</h5>
                        <p class="card-text">Automatize toda a operação do seu negócio: vendas, compras, estoque, caixa, fiscal e mais.</p>
                        <a href="erp.php" class="btn btn-outline-primary btn-sm">Saiba mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow text-center">
                    <img src="assets/img/Sistema_gestor.png" class="card-img-top" alt="Atendimento Comercial">
                    <div class="card-body">
                        <h5 class="card-title">Atendimento Comercial</h5>
                        <p class="card-text">Agilidade no atendimento ao cliente com controle de orçamentos, comissões e pré-vendas.</p>
                        <a href="comercial.php" class="btn btn-outline-primary btn-sm">Saiba mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow text-center">
                    <img src="assets/img/Sistema_pedido.png" class="card-img-top" alt="Sistema de Pedidos">
                    <div class="card-body">
                        <h5 class="card-title">Sistema de Pedidos</h5>
                        <p class="card-text">Ideal para deliverys e restaurantes. Receba e controle pedidos com total integração.</p>
                        <a href="pedidos.php" class="btn btn-outline-primary btn-sm">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTATO -->
<section id="contato">
  <div class="container">
    <h2 class="text-center mb-4 fw-bold">Fale Conosco</h2>

    <!-- FORMULÁRIO -->
    <form class="row g-3" method="post" action="contato.php">
      <div class="col-md-6">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
      </div>
      <div class="col-md-6">
        <label for="empresa" class="form-label">Empresa</label>
        <input type="text" class="form-control" id="empresa" name="empresa">
      </div>
      <div class="col-md-6">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="col-md-6">
        <label for="telefone" class="form-label">Telefone / WhatsApp</label>
        <input type="text" class="form-control" id="telefone" name="telefone">
      </div>
      <div class="col-12">
        <label for="assunto" class="form-label">Assunto</label>
        <input type="text" class="form-control" id="assunto" name="assunto">
      </div>
      <div class="col-12">
        <label for="mensagem" class="form-label">Mensagem</label>
        <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
      </div>
      <div class="col-12 text-center">
        <button type="submit" class="btn btn-primary px-5">Enviar</button>
      </div>
    </form>

    <!-- REDES SOCIAIS E WHATSAPP -->
    <div class="text-center mt-5">
      <h5 class="fw-bold">Nos acompanhe nas redes sociais</h5>
      <p class="mb-3">Fique por dentro das novidades, conteúdos e atualizações da nossa empresa.</p>
      <div class="d-flex justify-content-center gap-4 fs-3 mb-4">
        <a href="https://www.facebook.com/profile.php?id=61577174699839" target="_blank" class="text-primary text-decoration-none">
          <i class="bi bi-facebook"></i>
        </a>
        <a href="https://www.instagram.com/situsinformatica/" target="_blank" class="text-danger text-decoration-none">
          <i class="bi bi-instagram"></i>
        </a>
        <a href="https://www.linkedin.com/company/situsinformatica" target="_blank" class="text-info text-decoration-none">
          <i class="bi bi-linkedin"></i>
        </a>
      </div>

      <h5 class="fw-bold mt-4">Fale direto pelo WhatsApp</h5>
      <a href="https://wa.me/5517992094185" target="_blank" class="btn btn-success mt-2">
        <i class="bi bi-whatsapp me-2"></i> Falar no WhatsApp
      </a>
    </div>
  </div>
</section>

<!-- SOBRE -->
<section id="sobre" class="bg-light mt-5">
  <div class="container">
    <h2 class="text-center mb-4 fw-bold">Sobre a Situs Informática</h2>
    <p class="text-center mx-auto" style="max-width: 900px; font-size: 1.1rem;">
      Fundada com o propósito de transformar a rotina de empresas comerciais por meio da tecnologia,
      a <strong>Situs Informática</strong> é especializada na revenda e suporte de sistemas de automação
      comercial, atendendo clientes de diferentes portes e segmentos em todo o Brasil.
    </p>
    <p class="text-center mx-auto" style="max-width: 900px; font-size: 1.1rem;">
      Nosso foco está em oferecer soluções completas, com sistemas que atendem desde a frente de caixa,
      controle financeiro, emissão de notas fiscais eletrônicas (NF-e e NFC-e), até ferramentas de
      atendimento integrado via <strong>WhatsApp</strong>. Priorizamos a qualidade do suporte técnico,
      o atendimento ágil e humanizado e o compromisso com os resultados dos nossos clientes.
    </p>
    <p class="text-center mx-auto" style="max-width: 900px; font-size: 1.1rem;">
      Atuamos com sistemas robustos e flexíveis que se adaptam às necessidades de cada negócio, com
      planos acessíveis a partir de <strong>R$ 99,99 por mês</strong>. Seja para um pequeno varejo ou
      para uma grande rede, nossa missão é simplificar processos e potencializar a gestão empresarial
      com tecnologia e eficiência.
    </p>
  </div>
</section>

<!-- FOOTER -->
<footer class="text-center">
    <div class="container">
        <p>&copy; <?php echo date("Y"); ?> Situs Informática. Todos os direitos reservados.</p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
