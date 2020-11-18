<div class="galeria">
    <section class="galeria-elementum slider">
        <div>
            <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/slide-01.png?1551369906078" alt="Elementum Residencial Atibaia">
        </div>
        <div>
            <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/slide-02.png?1551369906078" alt="Elementum Residencial Atibaia">
        </div>
        <div>
            <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/slide-03.png?1551369906078" alt="Elementum Residencial Atibaia">
        </div>
        <div>
            <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/slide-04.png?1551369906078" alt="Elementum Residencial Atibaia">
        </div>
        <div>
            <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/slide-05.png?1551369906078" alt="Elementum Residencial Atibaia">
        </div>
    </section>
</div>

<div class="loteamento">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <p class="txt-2">LOTEAMENTO FECHADO<br>
                    <span>TERRENOS A PARTIR DE 360M²</span>
                </p>
                <!-- <p class="txt-4"><span class="txt-3">Visite ShowRoom:</span> Estrada Municipal Luciano Rocha Peçanha, 2795 • Bairro Ressaca</p> -->
            </div>
        </div>
    </div>
</div>

<div class="info">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <h6>
                    Aqui, o lazer é mais um elemento importante para seu bem-estar.
                </h6>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                    <p>
                        • Piscinas Adulto e Infantil<br>
                        • Fitness<br>
                        • Beach Tênis<br>
                        • Salão de Festas
                    </p>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                    <p>
                        • Pet Place<br>
                        • Clube de Esportes<br>
                        • Quadra de Tênis<br>
                        • Playgrounds
                    </p>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-5 col-lg-5">
                    <p>
                        • Praça do Fogo<br>
                        • Praça do Ar<br>
                        • Praça Ponto de Encontro (Jovem)<br>
                        • Praça Redário
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <span></span>
            </div>
        </div>
    </div>
</div>

<div id="contato" class="contato">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
                <form method="post" role="form" action="<?php echo base_url("contato") ?>">
                    <div class="group-form">
                        <div class="col-xs-12 col-sm-12 col-md-12 padding-off form-group text-center tt">
                            <p>QUER SABER MAIS? ANTECIPE-SE E CONHEÇA TODOS OS DETALHES.</p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 padding-off form-group">
                            <input id="nome" type="text" class="nome line-r-off form-control" name="nome" required="required" placeholder="Nome*:" />
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 padding-off form-group">
                            <input id="email" type="email" class="email line-l-off form-control" name="email" required="required" placeholder="Email*:" />
                        </div>
                        <div class="col-xs-12 col-sm-5 col-md-5 padding-off form-group">
                            <input id="telefone" class="phone line-r-off form-control" type="tel" name="phone" required="required" placeholder="Celular*:" />
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 padding-off form-group">
                            <input id="cidade" class="cidade line-r-off line-l-off form-control" type="text" name="cidade" placeholder="Cidade" />
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3 padding-off form-group">
                            <input id="estado" class="estado line-l-off form-control" type="text" name="estado" placeholder="Estado" />
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 padding-off form-group box-check">
                            <label class="checkbox-inline" style="padding-left: 15px;">Preferência forma de contato:</label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="checkboxEmail" class="checkboxEmail" value="x"> E-mail
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="checkboxWhatsApp" class="checkboxWhatsApp" value="x"> WhatsApp
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="checkboxTelefone" class="checkboxTelefone" value="x"> Telefone
                            </label>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 padding-off form-group">
                            <textarea id="form-mensagem" class="msg form-control" rows="3" name="mss" required="required" placeholder="Mensagem*:"></textarea>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 padding-off hidden-xs bg"></div>
                        <div class="col-xs-12 col-sm-4 col-md-4 padding-off">
                            <button type="submit" class="btn_enviar btn" title="enviar" name="enviar_email" value="enviar">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center txt">
                <p>Em breve nosso consultor retornará com as informações.</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-off mapa">
                <div class="col-xs-12 col-sm-8 col-md-8">
                    <a href="">
                        <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/mapa.jpg" alt="Mapa">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h6>Visite ShowRoom:</h6>
                    <p>Estrada Municipal Luciano Rocha Peçanha, 2795<br>
                        Bairro Ressaca – Atibaia<br>
                        À apenas 50 min de São Paulo</p>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <!-- <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <h6>
                    CONHEÇA O LUGAR QUE A NATUREZA CRIOU PARA VOCÊ E SUA FAMÍLIA VIVEREM MELHOR.
                </h6>
            </div> -->
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <figure>
                        <figcaption>Planejamento e Futuras vendas:</figcaption>
                        <img class="img-responsive" src="<?= base_url(); ?>assets/images/coelhodafonseca.png" alt="Coelho da Fonseca">
                    </figure>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <figure>
                        <figcaption>FUTURA REALIZAÇÃO:</figcaption>
                        <img class="img-responsive" src="<?= base_url(); ?>assets/images/vicorp.png" alt="Vicorp">
                    </figure>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url(); ?>politicadeprivacidade">Política de privacidade</a></li>
                    <li><a href="<?php echo base_url(); ?>politicadecookies">Política de cookies</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 margin-top-15">
                <p>
                    IMAGENS MERAMENTE ILUSTRATIVA, SUJEITO À ALTERAÇÃO. O EMPREENDIMENTO SOMENTE SERÁ COMERCIALIZADO APÓS O REGISTRO DE INCORPORAÇÃO.
                </p>
            </div>
        </div>
    </div>
</footer>

<?php
if (isset($email_enviado))
    echo $email_enviado;
?>

<div id="aviso" class="aviso text-center">
    <div>
        <button type="button" class="close" id="close"><span aria-hidden="true">&times;</span></button>
        <p>O e-mail não pode ser enviado!<br />
            <strong>Tente novamente!</strong><br />
            Se o problema persistir, entre em contato pelo e-mail <strong>@elementumatibaia.com.br</strong></p>
    </div>
</div>