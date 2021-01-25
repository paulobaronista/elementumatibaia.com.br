<div class="galeria">
    <section class="galeria-elementum slider">
        <div>
            <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/slide-01.png?1551369906080" alt="Elementum Residencial Atibaia">
        </div>
        <div>
            <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/slide-02.png?1551369906080" alt="Elementum Residencial Atibaia">
        </div>
        <div>
            <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/slide-03.png?1551369906080" alt="Elementum Residencial Atibaia">
        </div>
        <div>
            <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/slide-04.png?1551369906080" alt="Elementum Residencial Atibaia">
        </div>
        <div>
            <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/slide-05.png?1551369906080" alt="Elementum Residencial Atibaia">
        </div>
    </section>
</div>

<div class="loteamento">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <p class="txt-2">LOTEAMENTO FECHADO<br>
                    <span>COM TERRENOS A PARTIR DE 360M²</span>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="info">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 dt">
                    <div class="col-xs-12 col-sm-12 col-md-12 padding-off">
                        <h6>
                            Lazer exclusivo e diferenciado
                        </h6>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 padding-off">
                        <p>
                            • Complexo Aquático<br>
                            • Fitness<br>
                            • Beach Tênis<br>
                            • Clube Social e Esportivo<br>
                            • Pet Place e Pet Wash<br>
                            • Quadra de Tênis<br>
                            • Playgrounds
                        </p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 padding-off">
                        <p>
                            • Praça da Terra<br>
                            • Praça do Fogo<br>
                            • Praça do Ar<br>
                            • Praça Água<br>
                            • Praça do Piquenique<br>
                            • Praça do Encontro<br>
                            • Coworking
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 visible-xs margin-top-20"></div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center padding-off">
                        <h6>
                            tecnologia e segurança
                        </h6>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 padding-off">
                        <span>
                            <p>
                                • Controle de acesso 24hs<br>
                                &nbsp;&nbsp;&nbsp;com reconhecimento facial<br>
                                • Internet com alta velocidade<br>
                                • Segurança perimetral com fibra ótica
                            </p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="novoTexto">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <p>Tudo isso e muito mais. <a href="#" data-toggle="modal" data-target="#modalVideo">Clique e assista nosso vídeo.</a></p>
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
                        <div class="col-xs-12 col-sm-12 col-md-12 padding-off form-group box-check">
                            <label class="checkbox-inline" style="padding-left: 15px;">Li e concordo com a <a href="<?php echo base_url(); ?>politicadeprivacidade">Política de privacidade</a></label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="checkboxPolitica" class="checkboxPolitica" required="required" value="Sim"><span style="color: transparent;">.</span>
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
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1 padding-off mapa">
                <div class="col-xs-12 col-sm-8 col-md-8">
                    <a href="#" data-toggle="modal" data-target="#modalMapa">
                        <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/mapa.png" alt="Mapa">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h6>Visite Showroom:</h6>
                    <p>Estrada Municipal<br>
                        Luciano Rocha Peçanha, 2795<br>
                        Bairro Cachoeira</p>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
                <div class="col-xs-12 col-sm-4 col-md-4 l" style="border-left: 0px solid">
                    <figure>
                        <figcaption>Informações:</figcaption>
                        <span class="dt-tel"><span>11</span> 4412.2692</span>
                    </figure>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 l">
                    <figure>
                        <figcaption>futuro planejamento e intermediação:</figcaption>
                        <img class="img-responsive" src="<?= base_url(); ?>assets/images/coelhodafonseca.png" alt="Coelho da Fonseca">
                    </figure>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 l" style="border-bottom: 0px solid">
                    <figure>
                        <figcaption>FUTURA REALIZAÇÃO:</figcaption>
                        <img class="img-responsive" src="<?= base_url(); ?>assets/images/vicorp.png" alt="Vicorp">
                    </figure>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url(); ?>politicadeprivacidade">Política de privacidade</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 margin-top-15">
                <p>
                    IMAGENS MERAMENTE ILUSTRATIVA, SUJEITO À ALTERAÇÃO. O EMPREENDIMENTO SOMENTE SERÁ COMERCIALIZADO APÓS O REGISTRO DO LOTEAMENTO.
                </p>
            </div>
        </div>
    </div>
</footer>

<div id="cookies" class="cookies">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2 box">
        <div class="col-xs-12 col-sm-9 col-md-9">
            <p>
                Usamos cookies para garantir que obtenha sempre a melhor experiência ao visitar o nosso website, para medir a utilização e o desempenho, bem como apresentar anúncios. Ao clicar em “Aceito”, concorda com as nossas configurações padrão.
            </p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <a href="#" class="btn_cookie btn center-block">Aceito</a>
        </div>
    </div>
</div>

<?php
if (isset($email_enviado))
    echo $email_enviado;
?>

<div id="aviso" class="aviso text-center">
    <div>
        <button type="button" class="close" id="close"><span aria-hidden="true">&times;</span></button>
        <p>O e-mail não pode ser enviado!<br />
            <strong>Tente novamente!</strong><br />
            Se o problema persistir, entre em contato pelo telefone <strong>(11) 4412-2692</strong></p>
    </div>
</div>