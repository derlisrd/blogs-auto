
@extends("Layout.template")
@section("title","Cadastro de site")

@section("contenido")

<div class="hero-area-l11 position-relative z-index-1 overflow-hidden">
    <div class="container position-relative">
        <div class="row position-relative justify-content-center">

            <h2>Procurar dominio</h2>

            <form action={{ route("CadastroSiteProcuraDominio") }} method="post">
                @csrf

                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-12 col-md-10">
                            <div class="form-group">
                                <span class="search_domain_label">www.</span>
                                <input type="text" autocomplete="off" required name="domain" class="form-control search_domain_input" id="nome" value="{{ old("domain") }}" placeholder="nomedosite">
                                <select class="search_domain_select" name="extension" value="{{ old("extension") }}" >
                                    @foreach ($extensions as $extension)
                                    <option value={{ $extension }}>.{{ $extension }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-md-2">
                            <div class="form-group">
                            <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> Procurar</button>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
                  @yield("alert")
                  @if ($errors->any())

                    {!! $errors->first("domain","<div class='alert alert-primary'>Atencao: O nome do dominio so tem que ter letras e/o numeros !</div>") !!}

                  @endif
                  @isset($verifydomain)
                <form action={{ url("/cadastro/buysite/".$verifydomain) }} method="post" >
                <div class="form-group">
                 @csrf

                    @isset($value)
                    @if($value===true)
                    <input type="hidden" name="verifydomain" value={{ $verifydomain }} />
                    <a class="btn btn-success" target="_blank" href="https://domains.google.com/express?d={{ $verifydomain }}">Registrar</a>
                    @endif
                    @endisset
                </div>
                @endisset
            </form>
        </div>
    </div>
</div>


@endsection
