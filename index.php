<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <?php include 'head.php'; ?>
    </head> 

<body>

    <?php include 'menu.php'; ?>
    <div class="container">

        <div class="intro">
            <h3>Oi, eu sou a Larissa <i class="fa-solid fa-hands"></i></h3>
            <h1>Desenvolvedora Front-End</h1>
            <p>Crio landing pages incríveis e sites institucionais responsivos usando HTML e CSS. </p>
            <p id="foco">Meu foco é entregar projetos simples, rápidos e com código limpo</p>
        </div>


        <div class="projetos-destaque">
            <h3><span class="titulo-projetos-destaq">Projetos em destaque</span> <a class="text-decoration-none text-white fs-6" href="projetos.php">(ver todos <i class="fa-solid fa-arrow-right"></i>)</a></span></h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="infos-projetos-destaque">
                        <img src="/imagens/images.png" alt="">
                        <h4>Lorem ipsum dolor </h4>
                        <p>Lorem ipsum dolor </p>
                        <p class="detalhes"><a href="">Ver detalhes <i class="fa-solid fa-arrow-right"></i></a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="infos-projetos-destaque">
                        <img src="/imagens/images.png" alt="">
                        <h4>Lorem ipsum dolor</h4>
                        <p>Lorem ipsum dolor </p>
                        <p class="detalhes"><a href="">Ver detalhes <i class="fa-solid fa-arrow-right"></i></a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="infos-projetos-destaque">
                        <img src="/imagens/images.png" alt="">
                        <h4>Lorem ipsum dolor </h4>
                        <p>Lorem ipsum dolor </p>
                        <p class="detalhes"><a href="">Ver detalhes <i class="fa-solid fa-arrow-right"></i></a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php include 'rodape.php'; ?>

    <!-- Bootstrap Bundle com Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>