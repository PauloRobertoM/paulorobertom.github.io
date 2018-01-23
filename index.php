<?php include 'components/header.php'; ?>

    <section class="reserva" id="anc-reserva">
        <div class="barra-pesquisa">
            <form action="" id="formContato" accept-charset="utf-8" method="post">
                <div class="item">
                    <a href="#" id="retirada" class="hvr-underline-from-center" data-toggle="modal" data-target="#myModal">Dados de Retirada</a>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Dados de Retirada</h4>
                                </div>
                                <div class="modal-body">
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
                                </div><!-- modal-body -->
                            </div><!-- modal-content -->
                        </div><!-- modal-dialog -->
                    </div><!-- modal -->
                </div><!-- item -->
                <div class="item">
                    <a href="#" id="devolucao" class="hvr-underline-from-center" data-toggle="modal" data-target="#myModal2">Dados de Devolução</a>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Dados de Devolução</h4>
                                </div>
                                <div class="modal-body">
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
                                </div><!-- modal-body -->
                            </div><!-- modal-content -->
                        </div><!-- modal-dialog -->
                    </div><!-- modal -->
                </div><!-- item -->
                <div class="item">
                    <a href="#" id="dados" data-toggle="modal" data-target="#myModal3">Dados Pessoais</a>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Dados Pessoais</h4>
                                </div>
                                <div class="modal-body">
                                    <input type="text" name="nome" class="form-control" id="exampleInputAmount" placeholder="Seu nome" required>
                                    <input type="text" name="email" class="form-control" id="exampleInputAmount" placeholder="Seu e-mail" required>
                                    <input type="text" name="telefone" class="form-control" id="exampleInputAmount" placeholder="Seu telefone" required>
                                </div><!-- modal-body -->
                            </div><!-- modal-content -->
                        </div><!-- modal-dialog -->
                    </div><!-- modal -->
                </div><!-- item -->
                <div class="item">
                    <a href="#" id="dados" data-toggle="modal" data-target="#myModal4">Escolha seu Carro</a>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Escolha seu Carro</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="item-interno">
                                        <img src="assets/images/vitrine.jpg" alt="">
                                        <div class="content">
                                            <h2>Celta/Pálio ou Similar Motorização 1.0</h2>
                                            <p><span>Dia:</span> R$ Valor</p>
                                            <p><span>Dia:</span> R$ Valor</p>
                                            <p><span>Dia:</span> R$ Valor</p>
                                            <p>Informações adicionais...</p>
                                        </div><!-- content -->
                                    </div><!-- .item -->
                                </div><!-- modal-body -->
                            </div><!-- modal-content -->
                        </div><!-- modal-dialog -->
                    </div><!-- modal -->
                </div><!-- item -->
                <div class="item">
                    <button class="botao">Solicitar Reserva</button>
                </div><!-- item -->
            </form>
        </div><!-- barra-pesquisa -->
    </section><!-- reserva -->

	<section class="vitrine">
		<div class="owl-carousel owl-theme" id="owl-vitrine">
            <div class="item">
                <img src="assets/images/vitrine.jpg" alt="">
                <div class="content">
                	<h2>Celta/Pálio ou Similar Motorização 1.0</h2>
                	<p><span>Dia:</span> R$ Valor</p>
                	<p><span>Dia:</span> R$ Valor</p>
                	<p><span>Dia:</span> R$ Valor</p>
                	<p><span>Dia:</span> R$ Valor</p>
                	<p>Informações adicionais...</p>

                	<a href="#anc-reserva" class="botao">Solicitar Reserva</a>
                </div><!-- content -->
            </div><!-- .item -->
            <div class="item">
                <img src="assets/images/vitrine2.jpg" alt="">
                <div class="content">
                	<h2>Parati/Palio Weekend ou Similar</h2>
                	<p><span>Dia:</span> R$ Valor</p>
                	<p><span>Dia:</span> R$ Valor</p>
                	<p><span>Dia:</span> R$ Valor</p>
                	<p><span>Dia:</span> R$ Valor</p>
                	<p>Informações adicionais...</p>

                	<a href="#anc-reserva" class="botao">Solicitar Reserva</a>
                </div><!-- content -->
            </div><!-- .item -->
        </div><!-- . owl-carousel -->
	</section><!-- vitrine -->

    <section class="carros">
        <div class="container">
            <div class="owl-carousel owl-theme" id="owl-carros">
                <div class="item">
                    <img src="assets/images/vitrine.jpg" alt="">
                    <div class="content">
                        <h2>Celta/Pálio ou Similar Motorização 1.0</h2>
                        <p><span>Dia:</span> R$ Valor</p>
                        <p><span>Dia:</span> R$ Valor</p>
                    <p><span>Dia:</span> R$ Valor</p>
                        <p>Informações adicionais...</p>

                        <a href="#anc-reserva" class="botao">Solicitar Reserva</a>
                    </div><!-- content -->
                </div><!-- .item -->
                <div class="item">
                    <img src="assets/images/vitrine2.jpg" alt="">
                    <div class="content">
                        <h2>Parati/Palio Weekend ou Similar</h2>
                        <p><span>Dia:</span> R$ Valor</p>
                        <p><span>Dia:</span> R$ Valor</p>
                        <p><span>Dia:</span> R$ Valor</p>
                        <p>Informações adicionais...</p>

                        <a href="#anc-reserva" class="botao">Solicitar Reserva</a>
                    </div><!-- content -->
                </div><!-- .item -->
                <div class="item">
                    <img src="assets/images/vitrine.jpg" alt="">
                    <div class="content">
                        <h2>Celta/Pálio ou Similar Motorização 1.0</h2>
                        <p><span>Dia:</span> R$ Valor</p>
                        <p><span>Dia:</span> R$ Valor</p>
                        <p><span>Dia:</span> R$ Valor</p>
                        <p>Informações adicionais...</p>

                        <a href="#anc-reserva" class="botao">Solicitar Reserva</a>
                    </div><!-- content -->
                </div><!-- .item -->
                <div class="item">
                    <img src="assets/images/vitrine2.jpg" alt="">
                    <div class="content">
                        <h2>Parati/Palio Weekend ou Similar</h2>
                        <p><span>Dia:</span> R$ Valor</p>
                        <p><span>Dia:</span> R$ Valor</p>
                        <p><span>Dia:</span> R$ Valor</p>
                        <p>Informações adicionais...</p>

                        <a href="#anc-reserva" class="botao">Solicitar Reserva</a>
                    </div><!-- content -->
                </div><!-- .item -->
            </div><!-- . owl-carousel -->
        </div><!-- container -->
    </section><!-- carros -->

<?php include 'components/footer.php'; ?>