@extends("Cadastros.cadastrosite")


@section("alert")



    @if($value===true)
    <div class="alert alert-success" role="alert">
        <strong>{{ $verifydomain }}</strong> ta disponivel <i class="fa fa-check-circle"></i>
    </div>

    @else
      <div class="alert alert-danger" role="alert">
        <strong>{{ $verifydomain }}</strong> nao ta disponivel <i class="fa fa-sad-cry"></i>
      </div>
    @endif
@endsection
