<!DOCTYPE html>
<html lang="pr-br">

<head>
   <?php include 'head.php'; ?>
</head>

<body>
    <?php include 'menu.php'; ?>

    <div class="container">
        <div class="contato">
            <h1>Contato</h1>
            <p>Pronto para transformar ideias em código? Me chama!</p>
        </div>
        <form action="https://formspree.io/f/xpwjoppn" method="POST">
            <div class="campo">
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" required>
            </div>

            <div class="campo">
                <label for="email">Email</label>
                <input type="email" name="name" id="email" required>
            </div>

            <div class="campo">
                <label for="message">Mensagem</label>
                <textarea name="name" id="message" required></textarea>
            </div>

            <button class="enviar-btn" type="submit">Enviar</button>


            <div class="row">
                <div class="col-md-6">
                    <div class="whatsapp">
                        <p>Prefere falar direto? Me chama no WhatsApp</p>
                        <a href="https://wa.me/5548984243166" target="_blank">
                            <div class="whatsapp-botao">
                                <p> <i class="fa-brands fa-whatsapp"></i> WhatsApp</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="curriculo">
                        
                            <p>Baixar Currículo</p>
                            <a href="../portfolio/arquivos/Curriculo_Larissa_.pdf"> 
                            <div class="curriculo-botao">
                                <p> <i class="fa-solid fa-file-pdf"></i> Currículo</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
    </div>



    <?php include 'rodape.php'; ?>
</body>

</html>