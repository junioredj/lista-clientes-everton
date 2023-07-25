@extends('/layout')
@section('title', 'Cadastro')

@section('conteudo')


    <div class="container d-flex h-100 justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="border rounded p-5" style="min-width: 350px;">
            <form action="{{route('save')}}" method="POST">
                @csrf
                <div class="input-group mb-3 d-flex flex-column ">
                    <h4>Digite seu nome para entrar na lista de espera</h4>
                    <input type="text" class="mt-3 form-control w-100" placeholder="Digite seu nome" name="name">

                    @if(Session::has("msg"))
                        <small style="color: red">{{session()->get('msg')}}</small>
                    @endif
                </div>
                <div class="input-group mb-3">
                    <button type="submit" class="btn btn-primary" value="Cadastrar" >Cadastrar</button>
                </div>
            </form>
        </div>
    </div>

@endsection
