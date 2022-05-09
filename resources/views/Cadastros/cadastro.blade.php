@extends("Layout.template")

@section("title","Formulario de site")
@section("contenido")

<div class="hero-area-l11 position-relative z-index-1 overflow-hidden">
    <div class="container position-relative">
        <div class="row position-relative justify-content-center">
            <div class="col-xl-8 col-lg-9 col-md-12 order-lg-1 order-1" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">
                <div class="content">
                    <h3>Preencha o formulário</h3>
                    <div>
                        <form action={{ route("CadastroStore") }} method="post">
                            @csrf
                            <div class="form-group">
                                <p>
                                    E faça seu site en 5 minutos <i class="fab fa-wordpress"></i>
                                </p>
                            </div>
                            <div class="form-group">
                                <label for="nome">Nome/Empresa: *</label>
                                <input type="text" required name="nome" class="form-control {{ $errors->first("nome","is-invalid") }}" id="nome" value="{{ old("nome") }}" placeholder="Nome">
                            </div>
                            <div class="form-group">
                                <label for="whatsapp">WhatsApp: * </label>
                                <input type="tel" required name="whatsapp" class="form-control {{ $errors->first("whatsapp","is-invalid") }}" id="whatsapp" value="{{ old("whatsapp") }}" maxlength="15" placeholder="(99) 9 9999-9999">
                            </div>
                            <div class="form-group">
                                <label for="email">Email: *</label>
                                <input type="email" required name="email" class="form-control {{ $errors->first("email","is-invalid") }}" value="{{ old("email") }}" id="email" placeholder="name@exemplo.com">
                            </div>
                            <div class="form-group">
                                <label for="dominio">Tem dominio?:</label>
                                <input type="text" name="dominio" class="form-control" value="{{ old("dominio") }}"  placeholder="dominio.com">
                            </div>
                            <div class="form-group">
                                <small>(*) Campos obligatorios</small>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Enviar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function mascara(o, f) {
        v_obj = o
        v_fun = f
        setTimeout("execmascara()", 1)
    }

    function execmascara() {
        v_obj.value = v_fun(v_obj.value)
    }

    function mtel(v) {
        v = v.replace(/\D/g, ""); //Remove tudo o que não é dígito
        v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
        v = v.replace(/(\d)(\d{4})$/, "$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
        return v;
    }

    function id(el) {
        return document.getElementById(el);
    }
    window.onload = function() {
        id('whatsapp').onkeyup = function() {
            mascara(this, mtel);
        }
    }
</script>


@endsection
