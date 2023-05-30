<?php include_once("partials/cabecalho.php"); ?>


<style>
   label span {
        color: red;
        font-weight: bold;
    }
</style>
<!-- Breadcrumb Section Start -->
<section class="breadscrumb-section pt-0">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="breadscrumb-contain">
                    <h2>Confirmar Dados</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Checkout section Start -->
<section class="checkout-section-2 section-b-space">
    <div class="container-fluid-lg">
        <div class="row g-sm-4 g-3">
            <div class="col-lg-8">
                <div class="left-sidebar-checkout">
                    <div class="checkout-detail-box">
                        <ul>
                            <li>

                                <div class="">

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <label class="label-control" for="">Nome Completo <span>*</span></label>
                                            <input class="form-control" type="text">
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <label class="label-control" for="">Cpf <span>*</span></label>
                                            <input class="form-control" type="text" name="cpf" id="cpf">
                                        </div>

                                    </div>

                                    <br>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <label class="label-control" for="">E-mail <span>*</span></label>
                                            <input class="form-control" type="email">
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <label class="label-control" for="">Telefone <span>*</span></label>
                                            <input class="form-control" type="text" name="telefone" id="telefone">
                                        </div>

                                    </div>

                                    <br>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <label class="label-control" for="">Rua <span>*</span></label>
                                            <input class="form-control" type="email">
                                        </div>

                                        <div class="col-lg-2 col-md-2 col-sm-12">
                                            <label class="label-control" for="">Numero <span>*</span></label>
                                            <input class="form-control" type="text" name="telefone" id="telefone">
                                        </div>
                                        <div class="col-çg-4 col-md-4 col-sm-12">
                                            <label class="label-control" for="">Bairro <span>*</span></label>
                                            <input class="form-control" type="text" name="telefone" id="telefone">
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <label class="label-control" for="">Complemento</label>
                                            <input class="form-control" type="text" name="complemento" id="complemento">
                                        </div>

                                        <div class="col-lg-2 col-md-6 col-sm-12">
                                            <label class="label-control" for="">cep <span>*</span></label>
                                            <input class="form-control" type="text" name="cep" id="cep">
                                        </div>
                                        <div class="col-lg-4  col-md-6 col-sm-12">
                                            <label class="label-control" for="">Cidade <span>*</span></label>
                                            <input class="form-control" type="text" name="cidade" id="cidade">
                                        </div>
                                        <div class="col-lg-2 col-md-6 col-sm-12">
                                            <label class="label-control" for="">Estado <span>*</span></label>
                                            <input class="form-control" type="text" name="estado" id="estado">
                                        </div>

                                    </div>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="right-side-summery-box">
                    <div class="summery-box-2">
                        <div class="summery-header">
                            <h3>Resumo do pedido</h3>
                        </div>

                        <ul class="summery-contain">
                            <li>
                                <img src="../assets/images/vegetable/product/1.png" class="img-fluid blur-up lazyloaded checkout-image" alt="">
                                <h4>Bell pepper <span>X 1</span></h4>
                                <h4 class="price">R$32.34</h4>
                            </li>

                            <li>
                                <img src="../assets/images/vegetable/product/2.png" class="img-fluid blur-up lazyloaded checkout-image" alt="">
                                <h4>Eggplant <span>X 3</span></h4>
                                <h4 class="price">R$12.23</h4>
                            </li>

                            <li>
                                <img src="../assets/images/vegetable/product/3.png" class="img-fluid blur-up lazyloaded checkout-image" alt="">
                                <h4>Onion <span>X 2</span></h4>
                                <h4 class="price">R$18.27</h4>
                            </li>


                        </ul>

                        <ul class="summery-total">
                            <li>
                                <h4>Subtotal</h4>
                                <h4 class="price">R$111.81</h4>
                            </li>
                            <li>
                                <h4>Coupon</h4>
                                <h4 class="price">R$23.10</h4>
                            </li>

                            <li class="list-total">
                                <h4>Total</h4>
                                <h4 class="price">R$88.71</h4>
                            </li>
                        </ul>
                    </div>


                    <button class="btn theme-bg-color text-white btn-md w-100 mt-4 fw-bold" data-bs-toggle="modal" data-bs-target="#modal-pagamento">FINALIZAR COMPRA</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Checkout section End -->



<!-- Modal -->
<div class="modal fade" id="modal-pagamento" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>

<?php include_once("partials/rodape.php"); ?>