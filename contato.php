<?php include_once("partials/cabecalho.php"); ?>


<!-- Breadcrumb Section Start -->
<section class="breadscrumb-section pt-0">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="breadscrumb-contain">
                    <h2>Contate-nos</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Contact Box Section Start -->
<section class="contact-box-section">
    <div class="container-fluid-lg">
        <div class="row g-lg-5 g-3">
            <div class="col-lg-6">
                <div class="left-sidebar-box">
                    <div class="row">
                        <div class="col-xl-12">
                            <!--  <div class="contact-image">
                                <img src="../assets/images/inner-page/contact-us.png" class="img-fluid blur-up lazyloaded" alt="">
                            </div> -->
                        </div>
                        <div class="col-xl-12">
                            <div class="contact-title">
                                <h3>Entrar em contato</h3>
                            </div>

                            <div class="contact-detail">
                                <div class="row g-4">
                                    <div class="col-xxl-6 col-lg-12 col-sm-6">
                                        <div class="contact-detail-box">
                                            <div class="contact-icon">
                                                <i class="fa-solid fa-phone"></i>
                                            </div>
                                            <div class="contact-detail-title">
                                                <h4>Telefone</h4>
                                            </div>

                                            <div class="contact-detail-contain">
                                                <p><?php echo $telefone ?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-sm-6">
                                        <div class="contact-detail-box">
                                            <div class="contact-icon">
                                                <i class="fa-solid fa-envelope"></i>
                                            </div>
                                            <div class="contact-detail-title">
                                                <h4>E-mail</h4>
                                            </div>

                                            <div class="contact-detail-contain">
                                                <p><?php echo $email ?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-sm-6">
                                        <div class="contact-detail-box">
                                            <div class="contact-icon">
                                                <i class="fa-solid fa-location-dot"></i>
                                            </div>
                                            <div class="contact-detail-title">
                                                <h4>Escritório de Centro</h4>
                                            </div>

                                            <div class="contact-detail-contain">
                                                <p><?php echo $endereco_loja1 ?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-sm-6">
                                        <div class="contact-detail-box">
                                            <div class="contact-icon">
                                                <i class="fa-solid fa-building"></i>
                                            </div>
                                            <div class="contact-detail-title">
                                                <h4>Escritório de Bairro</h4>
                                            </div>

                                            <div class="contact-detail-contain">
                                                <p><?php echo $endereco_loja2 ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="title d-xxl-none d-block">
                    <h2>Contate-nos</h2>
                </div>
                <div class="right-sidebar-box">
                    <form method="post">
                        <div class="row">

                            <div class="col-xxl-6 col-lg-12 col-sm-6">
                                <div class="mb-md-4 mb-3 custom-form">
                                    <label for="nome" class="form-label">Seu nome</label>
                                    <div class="custom-input">
                                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Insira seu nome">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xxl-6 col-lg-12 col-sm-6">
                                <div class="mb-md-4 mb-3 custom-form">
                                    <label for="email" class="form-label"></label>
                                    <div class="custom-input">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Insira o endereço de e-mail">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-6 col-lg-12 col-sm-6">
                                <div class="mb-md-4 mb-3 custom-form">
                                    <label for="telefone" class="form-label">Seu telefone</label>
                                    <div class="custom-input">
                                        <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="Digite seu número de telefone" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value =
                                            this.value.slice(0, this.maxLength);">
                                        <i class="fa-solid fa-mobile-screen-button"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-md-4 mb-3 custom-form">
                                    <label for="mensagem" class="form-label">Mensagem</label>
                                    <div class="custom-textarea">
                                        <textarea class="form-control" name="mensagem" id="mensagem" placeholder="Digite sua mensagem" rows="6"></textarea>
                                        <i class="fa-solid fa-message"></i>
                                    </div>
                                </div>
                            </div>
                    </form>

                </div>
                <button class="btn btn-danger btn-md fw-bold ms-auto" id="btn-enviar-email">Enviar mensagem</button>

                <div id="div-mensagem"></div>

            </div>


        </div>


    </div>
    </div>
</section>
<!-- Contact Box Section End -->


<?php include_once("partials/rodape.php"); ?>

<script type="text/javascript">
    $('#btn-enviar-email').click(function(event){
        event.preventDefault();
        $('#div-mensagem').addClass('text-info')
        $('#div-mensagem').removeClass('text-danger')
        $('#div-mensagem').removeClass('text-success')
        $('#div-mensagem').text('Enviando')
        $.ajax({
            url:"enviar.php",
            method:"post",
            data: $('form').serialize(),
            dataType: "text",
            success: function(msg){
                if(msg.trim() === 'Enviado com Sucesso!'){
                    
                    $('#div-mensagem').addClass('text-success')
                    $('#div-mensagem').text(msg);
                    $('#email').val('');
                    $('#nome').val('');
                    $('#telefone').val('');
                    $('#mensagem').val('');

                 }else if(msg.trim() === 'Preecha o Campo Nome'){
                    
                    $('#div-mensagem').addClass('text-danger')
                    $('#div-mensagem').text(msg);
                 

                 }else if(msg.trim() === 'Preecha o Campo Mensagem'){
                    
                    $('#div-mensagem').addClass('text-danger')
                    $('#div-mensagem').text(msg);
                 

                 }else if(msg.trim() === 'Preecha o Campo Email'){
                    
                    $('#div-mensagem').addClass('text-danger')
                    $('#div-mensagem').text(msg);
                 }

                 else{
                    $('#div-mensagem').addClass('text-danger')
                    $('#div-mensagem').text('Deu erro ao Enviar o Formulário! Provavelmente seu servidor de hospedagem não está com permissão de envio habilitada ou você está em um servidor local!');
                    //$('#div-mensagem').text(msg);

                 }
            }
        })
    })
</script>