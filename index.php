<?php include 'components/header.php'; ?>

    <section class="reserva" id="anc-reserva">
        <div class="barra-pesquisa">
            <form action="" id="formContato" accept-charset="utf-8" method="post">
                <a href="#" data-toggle="modal" data-target="#myModal">Clique aqui e solicite sua <span>Reserva</span>/<span>Orçamento</span></a>

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