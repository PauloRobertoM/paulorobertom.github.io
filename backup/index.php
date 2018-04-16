<?php include 'components/header.php'; ?>

    <section class="reserva" id="anc-reserva">
        <div class="barra-pesquisa">
            <form action="" id="formContato" accept-charset="utf-8" method="post">
                <a href="#" data-toggle="modal" data-target="#myModal">Solicite sua <span>Reserva</span>/<span>Orçamento</span></a>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Dados de Retirada</h4>
                            </div>
                            <div class="modal-body">

                                <div id="item1">
                                    <div id="datepairExample1">
                                        <input type="text" name="data_retirada" class="date" placeholder="Data de retirada" />
                                    </div><!-- #datepairExample -->
                                    <select name="hora_retirada">
                                        <option>Hora de Retirada</option>
                                        <option value="00:00h">00:00h</option>
                                        <option value="00:30h">00:30h</option>
                                        <option value="01:00h">01:00h</option>
                                        <option value="01:30h">01:30h</option>
                                        <option value="02:00h">02:00h</option>
                                        <option value="02:30h">02:30h</option>
                                        <option value="03:00h">03:00h</option>
                                        <option value="03:30h">03:30h</option>
                                        <option value="04:00h">04:00h</option>
                                        <option value="04:30h">04:30h</option>
                                        <option value="05:00h">05:00h</option>
                                        <option value="05:30h">05:30h</option>
                                        <option value="06:00h">06:00h</option>
                                        <option value="06:30h">06:30h</option>
                                        <option value="07:00h">07:00h</option>
                                        <option value="07:30h">07:30h</option>
                                        <option value="08:00h">08:00h</option>
                                        <option value="08:30h">08:30h</option>
                                        <option value="09:00h">09:00h</option>
                                        <option value="09:30h">09:30h</option>
                                        <option value="10:00h">10:00h</option>
                                        <option value="10:30h">10:30h</option>
                                        <option value="11:00h">11:00h</option>
                                        <option value="11:30h">11:30h</option>
                                        <option value="12:00h">12:00h</option>
                                        <option value="12:30h">12:30h</option>
                                        <option value="13:00h">13:00h</option>
                                        <option value="13:30h">13:30h</option>
                                        <option value="14:00h">14:00h</option>
                                        <option value="14:30h">14:30h</option>
                                        <option value="15:00h">15:00h</option>
                                        <option value="15:30h">15:30h</option>
                                        <option value="16:00h">16:00h</option>
                                        <option value="16:30h">16:30h</option>
                                        <option value="17:00h">17:00h</option>
                                        <option value="17:30h">17:30h</option>
                                        <option value="18:00h">18:00h</option>
                                        <option value="18:30h">18:30h</option>
                                        <option value="19:00h">19:00h</option>
                                        <option value="19:30h">19:30h</option>
                                        <option value="20:00h">20:00h</option>
                                        <option value="20:30h">20:30h</option>
                                        <option value="21:00h">21:00h</option>
                                        <option value="21:30h">21:30h</option>
                                        <option value="22:00h">22:00h</option>
                                        <option value="22:30h">22:30h</option>
                                        <option value="23:00h">23:00h</option>
                                        <option value="23:30h">23:30h</option>
                                    </select>
                                    
                                    <div class="link-botao">
                                        <a class="botao" id="proximo2" href="#">Próximo</a>
                                    </div><!-- link-botao -->
                                </div><!-- #item1 -->
                                <div id="item2">
                                    <div id="datepairExample2">
                                        <input type="text" name="data_devolucao" class="date" placeholder="Data de Devolução" />
                                    </div><!-- #datepairExample -->
                                    <select name="hora_devolucao">
                                        <option>Hora de Devolução</option>
                                        <option value="00:00h">00:00h</option>
                                        <option value="00:30h">00:30h</option>
                                        <option value="01:00h">01:00h</option>
                                        <option value="01:30h">01:30h</option>
                                        <option value="02:00h">02:00h</option>
                                        <option value="02:30h">02:30h</option>
                                        <option value="03:00h">03:00h</option>
                                        <option value="03:30h">03:30h</option>
                                        <option value="04:00h">04:00h</option>
                                        <option value="04:30h">04:30h</option>
                                        <option value="05:00h">05:00h</option>
                                        <option value="05:30h">05:30h</option>
                                        <option value="06:00h">06:00h</option>
                                        <option value="06:30h">06:30h</option>
                                        <option value="07:00h">07:00h</option>
                                        <option value="07:30h">07:30h</option>
                                        <option value="08:00h">08:00h</option>
                                        <option value="08:30h">08:30h</option>
                                        <option value="09:00h">09:00h</option>
                                        <option value="09:30h">09:30h</option>
                                        <option value="10:00h">10:00h</option>
                                        <option value="10:30h">10:30h</option>
                                        <option value="11:00h">11:00h</option>
                                        <option value="11:30h">11:30h</option>
                                        <option value="12:00h">12:00h</option>
                                        <option value="12:30h">12:30h</option>
                                        <option value="13:00h">13:00h</option>
                                        <option value="13:30h">13:30h</option>
                                        <option value="14:00h">14:00h</option>
                                        <option value="14:30h">14:30h</option>
                                        <option value="15:00h">15:00h</option>
                                        <option value="15:30h">15:30h</option>
                                        <option value="16:00h">16:00h</option>
                                        <option value="16:30h">16:30h</option>
                                        <option value="17:00h">17:00h</option>
                                        <option value="17:30h">17:30h</option>
                                        <option value="18:00h">18:00h</option>
                                        <option value="18:30h">18:30h</option>
                                        <option value="19:00h">19:00h</option>
                                        <option value="19:30h">19:30h</option>
                                        <option value="20:00h">20:00h</option>
                                        <option value="20:30h">20:30h</option>
                                        <option value="21:00h">21:00h</option>
                                        <option value="21:30h">21:30h</option>
                                        <option value="22:00h">22:00h</option>
                                        <option value="22:30h">22:30h</option>
                                        <option value="23:00h">23:00h</option>
                                        <option value="23:30h">23:30h</option>
                                    </select>
                                    
                                    <div class="link-botao">
                                        <a class="botao anterior" id="anterior1" href="#">Anterior</a>
                                        <a class="botao" id="proximo3" href="#">Próximo</a>
                                    </div><!-- link-botao -->
                                </div><!-- #item2 -->
                                <div id="item3">
                                    <input type="text" name="nome" class="form-control" placeholder="Seu nome" required>
                                    <input type="email" name="email" class="form-control" placeholder="Seu e-mail" required>
                                    <input type="number" name="telefone" class="form-control" placeholder="Seu telefone" required>
                                    
                                    <div class="link-botao">
                                        <a class="botao anterior" id="anterior2" href="#">Anterior</a>
                                        <a class="botao" id="proximo4" href="#">Próximo</a>
                                    </div><!-- link-botao -->                                    
                                </div><!-- #item3 -->
                                <div id="item4">
                                    <div class="item-interno">
                                        <img src="assets/images/vitrine.jpg" alt="">
                                        <div class="content">
                                            <h2>Celta/Pálio ou Similar Motorização 1.0</h2>
                                            <p><span>Dia:</span> R$ Valor</p>
                                            <p><span>Dia:</span> R$ Valor</p>
                                            <p><span>Dia:</span> R$ Valor</p>
                                            <p>Informações adicionais...</p>
                                        </div><!-- content -->
                                    </div><!-- .item-interno -->

                                    <input type="radio" name="gender" value="male"> Orçamento<br>
                                    <input type="radio" name="gender" value="female"> Reserva<br>
                                    
                                    <div class="link-botao">
                                        <a class="botao anterior" id="anterior3" href="#">Anterior</a>
                                        <button class="botao">Solicitar</button>
                                    </div><!-- link-botao -->
                                </div><!-- #item4 -->
                            </div><!-- modal-body -->
                        </div><!-- modal-content -->
                    </div><!-- modal-dialog -->
                </div><!-- modal -->
            </form>
        </div><!-- barra-pesquisa -->
    </section><!-- reserva -->

	<section class="vitrine">
		<div class="owl-carousel owl-theme" id="owl-vitrine">
            <div class="item">
                <img src="assets/images/carros_cinza/celta_4portas.jpg" alt="">
                <div class="content">
                	<a class="botao" href="#" data-toggle="modal" data-target="#myModalGrupoA">CELTA <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                </div><!-- content -->
            </div><!-- .item -->
            <div class="item">
                <img src="assets/images/carros_cinza/gol_4portas.jpg" alt="">
                <div class="content">
                    <a class="botao" href="#" data-toggle="modal" data-target="#myModalGrupoB">GOL <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                </div><!-- content -->
            </div><!-- .item -->
            <div class="item">
                <img src="assets/images/carros_cinza/uno.jpg" alt="">
                <div class="content">
                    <a class="botao" href="#" data-toggle="modal" data-target="#myModalGrupoD">UNO <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                </div><!-- content -->
            </div><!-- .item -->
        </div><!-- . owl-carousel -->
	</section><!-- vitrine -->

    <section class="quem-somos">
        <div class="item">
            <img src="assets/images/sobre.jpg" alt="">
        </div><!-- item -->
        <div class="item item-conteudo">
            <h2 class="titulo-geral">QUEM SOMOS</h2>
            <p>Nascemos em 2003 com um objetivo: ser diferentes! Conseguimos, e é assim que permanecemos até hoje. Preferimos as soluções que ofereçam ao nosso público a melhor relação entre inovação e praticidade.</p>
            <p>Descomplicação é um de nossos principais valores, por isso garantimos a entrega de veículos mais fácil e rápida da cidade, sem falar da flexibilidade de recebimentos e custo benefício, elementos que juntos garantem nossa qualidade a máxima satisfação de nossos clientes.</p>
            <p>Somos uma empresa de família, logo estamos muito preparados para atender a sua. Não deixe de entrar em contato e fazer seu orçamento, os preços em nossa página principal são apenas uma convite para uma boa conversa!</p>
        </div><!-- item -->
    </section><!-- quem-somos -->

    <section class="carros">
        <div class="container">
            <h2 class="titulo-geral">NOSSOS CARROS</h2>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="item">
                        <img src="assets/images/carros_cinza/celta_4portas.jpg" alt="">
                        <div class="content">
                            <h2>Grupo A</h2>

                            <a class="botao2" role="button" data-toggle="collapse" href="#GrupoA" aria-expanded="false" aria-controls="collapseExample">Selecionar Grupo <i class="fa fa-plus-circle" aria-hidden="true"></i></a>

                            <div class="collapse" id="GrupoA">
                                <h2>Grupo A: Flex, 4 portas, ar-condicionado, 1.0</h2>
                                <a class="botao2" href="#" data-toggle="modal" data-target="#myModal">Solicite sua <span>Reserva</span>/<span>Orçamento</span></a>
                            </div><!-- collapse -->
                        </div><!-- content -->
                    </div><!-- .item -->
                </div><!-- md-4 -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="item">
                        <img src="assets/images/carros_cinza/gol_4portas.jpg" alt="">
                        <div class="content">
                            <h2>Grupo B</h2>

                            <a class="botao2" role="button" data-toggle="collapse" href="#collapseExampleGrupoB" aria-expanded="false" aria-controls="collapseExample">Selecionar Grupo <i class="fa fa-plus-circle" aria-hidden="true"></i></a>

                            <div class="collapse" id="collapseExampleGrupoB">
                                <h2>Grupo A: Flex, 4 portas, ar-condicionado, 1.0</h2>
                                <a class="botao2" href="#" data-toggle="modal" data-target="#myModal">Solicite sua <span>Reserva</span>/<span>Orçamento</span></a>
                            </div><!-- collapse -->
                        </div><!-- content -->
                    </div><!-- .item -->
                </div><!-- md-4 -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="item">
                        <img src="assets/images/carros_cinza/uno.jpg" alt="">
                        <div class="content">
                            <h2>Grupo C</h2>

                            <a class="botao2" role="button" data-toggle="collapse" href="#collapseExampleGrupoC" aria-expanded="false" aria-controls="collapseExample">Selecionar Grupo <i class="fa fa-plus-circle" aria-hidden="true"></i></a>

                            <div class="collapse" id="collapseExampleGrupoC">
                                <h2>Grupo A: Flex, 4 portas, ar-condicionado, 1.0</h2>
                                <a class="botao2" href="#" data-toggle="modal" data-target="#myModal">Solicite sua <span>Reserva</span>/<span>Orçamento</span></a>
                            </div><!-- collapse -->
                        </div><!-- content -->
                    </div><!-- .item -->
                </div><!-- md-4 -->
            </div><!-- row -->
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="item">
                        <img src="assets/images/carros_cinza/spacefox.jpg" alt="">
                        <div class="content">
                            <h2>Grupo D</h2>

                            <a class="botao2" role="button" data-toggle="collapse" href="#collapseExampleGrupoD" aria-expanded="false" aria-controls="collapseExample">Selecionar Grupo <i class="fa fa-plus-circle" aria-hidden="true"></i></a>

                            <div class="collapse" id="collapseExampleGrupoD">
                                <h2>Grupo A: Flex, 4 portas, ar-condicionado, 1.0</h2>
                                <a class="botao2" href="#" data-toggle="modal" data-target="#myModal">Solicite sua <span>Reserva</span>/<span>Orçamento</span></a>
                            </div><!-- collapse -->
                        </div><!-- content -->
                    </div><!-- .item -->
                </div><!-- md-4 -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="item">
                        <img src="assets/images/carros_cinza/san.jpg" alt="">
                        <div class="content">
                            <h2>Grupo E</h2>

                            <a class="botao2" role="button" data-toggle="collapse" href="#collapseExampleGrupoE" aria-expanded="false" aria-controls="collapseExample">Selecionar Grupo <i class="fa fa-plus-circle" aria-hidden="true"></i></a>

                            <div class="collapse" id="collapseExampleGrupoE">
                                <h2>Grupo A: Flex, 4 portas, ar-condicionado, 1.0</h2>
                                <a class="botao2" href="#" data-toggle="modal" data-target="#myModal">Solicite sua <span>Reserva</span>/<span>Orçamento</span></a>
                            </div><!-- collapse -->
                        </div><!-- content -->
                    </div><!-- .item -->
                </div><!-- md-4 -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="item">
                        <img src="assets/images/carros_cinza/saveiro.jpg" alt="">
                        <div class="content">
                            <h2>Grupo F</h2>

                            <a class="botao2" role="button" data-toggle="collapse" href="#collapseExampleGrupoF" aria-expanded="false" aria-controls="collapseExample">Selecionar Grupo <i class="fa fa-plus-circle" aria-hidden="true"></i></a>

                            <div class="collapse" id="collapseExampleGrupoF">
                                <h2>Grupo A: Flex, 4 portas, ar-condicionado, 1.0</h2>
                                <a class="botao2" href="#" data-toggle="modal" data-target="#myModal">Solicite sua <span>Reserva</span>/<span>Orçamento</span></a>
                            </div><!-- collapse -->
                        </div><!-- content -->
                    </div><!-- .item -->
                </div><!-- md-4 -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- carros -->

    <section class="contato">
        <div class="container">
            <h2 class="titulo-geral">CONTATO</h2>
            <form>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="NOME" value="" />
                <input type="text" name="assunto" id="assunto" class="form-control" placeholder="ASSUNTO" value="" />
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="email" id="email" class="form-control" placeholder="E-MAIL" value="" />
                    </div><!-- .md-6 -->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="telefone" id="telefone" class="form-control" placeholder="TELEFONE" value="" />
                    </div><!-- .md-6 -->
                </div><!-- .row -->
                <textarea name="mensagem" id="mensagem" class="form-control" placeholder="MENSAGEM"></textarea>

                <button>enviar</button>
            </form>
        </div><!-- container -->
    </section><!-- contato -->

    <!-- Modal -->
    <div class="modal fade" id="myModalGrupoA" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Dados do Carro</h4>
                </div>
                <div class="modal-body">
                    <h2>Grupo A: Flex, 4 portas, ar-condicionado, 1.0</h2>

                    <a class="botao2" href="#" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#myModal">Solicite sua <span>Reserva</span>/<span>Orçamento</span></a>
                </div><!-- modal-body -->
            </div><!-- modal-content -->
        </div><!-- modal-dialog -->
    </div><!-- modal -->

    <div class="modal fade" id="myModalGrupoB" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Dados do Carro</h4>
                </div>
                <div class="modal-body">
                    <h2>Grupo B: Flex, 4 portas, ar-condicionado, direção hidráulica, 1.0</h2>

                    <a class="botao2" href="#" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#myModal">Solicite sua <span>Reserva</span>/<span>Orçamento</span></a>
                </div><!-- modal-body -->
            </div><!-- modal-content -->
        </div><!-- modal-dialog -->
    </div><!-- modal -->

    <div class="modal fade" id="myModalGrupoD" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Dados do Carro</h4>
                </div>
                <div class="modal-body">
                    <h2>Grupo D: Flex, Sedan, 4 portas, ar-condicionado, direção hidráulica, vidros elétricos</h2>

                    <a class="botao2" href="#" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#myModal">Solicite sua <span>Reserva</span>/<span>Orçamento</span></a>
                </div><!-- modal-body -->
            </div><!-- modal-content -->
        </div><!-- modal-dialog -->
    </div><!-- modal -->

<?php include 'components/footer.php'; ?>