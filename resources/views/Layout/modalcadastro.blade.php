<div class="modal fade" id="modalRegistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action={{ route("Cadastro") }} method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">* Regras:</label>
                        <p>
                            1 - Site Aprovado em sua conta do Google AdSense. <br> 2 - Faturamento mensal de no minimo 100 $USD. <br> 3 - Recebimento de 2 ou mais pagamentos pelo Google AdSense.
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="nome">Nome/Empresa:</label>
                        <input type="text" required name="nome" class="form-control" id="nome" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <label for="whatsapp">WhatsApp:</label>
                        <input type="tel" required name="whatsApp" class="form-control" id="whatsapp" maxlength="15" placeholder="(99) 9 9999-9999">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" required name="email" class="form-control" id="email" placeholder="name@exemplo.com">
                    </div>
                    <div class="form-group">
                        <label for="dominio">Tem dominio?:</label>
                        <input type="text" name="dominio" class="form-control"  placeholder="dominio.com">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                </form>
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
