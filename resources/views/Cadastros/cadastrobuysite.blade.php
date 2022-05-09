@extends("Layout.template")
@section("title","Cadastro de site")


@section("contenido")

<div class="hero-area-l11 position-relative z-index-1 overflow-hidden">
    <div class="container position-relative">
        <div class="row position-relative justify-content-center">

            <h2>Cadastre seus dados de contato</h2>
            <br />
            <h6>This information is required by ICANN in order to reach you in case of problems with your registration</h6>
            <form  method="post">
                @csrf

                <div class="container mt-5">
                    <div class="row align-items-center">

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <input type="text" required name="name" autocomplete="off" class="form-control" id="nome" value="{{ old("name") }}" placeholder="Nome ou Empresa">
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <input type="text" required name="country" class="form-control" id="country" value="{{ old("contry") }}" placeholder="País">
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <input type="text" required name="address1" class="form-control" id="address1" value="{{ old("address1") }}" placeholder="Endereco 1">
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <input type="text" name="address2" class="form-control" id="address2" value="{{ old("address2") }}" placeholder="Endereco 2 (Opcional)">
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <input type="email" required name="email" class="form-control" id="email" value="{{ old("email") }}" placeholder="E-mail">
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="form-group">

                            <button class="btn btn-info">Buy a domain </button>
                            </div>
                        </div>
                    </div>

                </div>

        </div>
    </div>
</div>


@endsection
