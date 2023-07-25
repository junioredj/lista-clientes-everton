@extends('/layout')
@section('title', 'Lista')

@section('conteudo')


    <div class="container">
        <h1 class="text-center mt-5">Lista de Espera</h1>

        <div><a href="/">Voltar</a></div>
        <div class="container mt-5">
            <h3>Pesquisar</h3>
            <form action="">
                @csrf
                <div class="input-group mb-3">
                    <input id="search" onkeyup="consultarNome()" type="text" class="form-control" placeholder="Digite um nome">
                </div>
            </form>
        </div>

        <div class="container mt-5">
            <table class="table" id="table">
                <tbody>

                    <?php
                        $contador = 0;
                    ?>


                    @foreach ($users as  $user)
                        @if($contador == 0)
                            <tr>
                        @endif

                        <td class="text-center" id="{{$user->name}}-info"> <strong class="mx-1">{{ $loop->index + 1 }}</strong> <div id="{{$user->name}}">{{$user->name}}</div></td>

                        @if($contador == 2)
                            </tr>
                            <?php
                                $contador = 0;
                            ?>
                        @else
                                <?php
                                    $contador++;
                                ?>
                        @endif



                    @endforeach

                </tbody>
              </table>
        </div>
    </div>

@endsection

