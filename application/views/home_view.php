<br><br><br><br><br><br><br><br>




<div class="contato">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2">
                <form method="post" role="form" action="<?php echo base_url("contato") ?>">
                    <div class="group-form">
                        <div class="col-xs-12 col-sm-12 col-md-12 padding-off form-group text-center tt">
                            <p>QUER SABER MAIS? ANTECIPE-SE E CONHEÇA TODOS OS DETALHES.</p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 padding-off form-group">
                            <input id="nome" type="text" class="nome line-r-off form-control" name="nome" required="required" placeholder="Nome*" />
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 padding-off form-group">
                            <input id="email" type="email" class="email line-l-off form-control" name="email" required="required" placeholder="Email*" />
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 padding-off form-group">
                            <input id="telefone" class="phone line-r-off form-control" type="tel" name="phone" required="required" placeholder="Celular*" />
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 padding-off form-group">
                            <input id="cidade" class="cidade line-l-off form-control" type="text" name="cidade" placeholder="Cidade" />
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 padding-off form-group">
                            <textarea id="form-mensagem" class="msg form-control" rows="3" name="mss" required="required" placeholder="Mensagem*"></textarea>
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
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2">
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <h6>
                        CONHEÇA O LUGAR QUE A NATUREZA CRIOU PARA VOCÊ<br>
                        E SUA FAMÍLIA VIVEREM MELHOR.
                    </h6>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <figure>
                        <figcaption>futura intermediação:</figcaption>
                        <img class="img-responsive" src="<?= base_url(); ?>assets/images/coelhodafonseca.png" alt="Coelho da Fonseca">
                    </figure>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <figure>
                        <figcaption>futura intermediação:</figcaption>
                        <img class="img-responsive" src="<?= base_url(); ?>assets/images/vicorp.png" alt="Vicorp">
                    </figure>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 margin-top-20">
                <p>
                    Bone im patui til tam tem practum in se perferumus cules verrae patum, tasdam mor ut egitraed nostrae tam ato cavo, ocus, condum abem dest pat vis etri pro horebat renem a cla viris Ad modiemo ressolium tum is omniam Romne num. Rum inem atum fuis. An volutelicum horet opubli ponsum in ducon terum, dem tam utem. Publiciem iam aucideritus M. Iqua dum re quidem reditanum internit. Ludam acciemp eropord ientere sidemuntem vit? Des re iaet, consum o utesinerorum in nocaest ernihic rentio, ocupiem inatus, imiusquasdam mora et diendam eo, patu.
                </p>
            </div>
        </div>
    </div>
</footer>

<?php
if (isset($email_enviado))
    echo $email_enviado;
?>