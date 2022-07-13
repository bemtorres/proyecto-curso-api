
@extends('layout.app')
@section('content')

<div class="container">
    <div class="row">


        <!-- Method POST -->
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">PUT</h4>

                    <form action="{{ route('users.update',$user->id) }}" method="POST">
                        @csrf
                        @method("PUT")
                        <!-- <input type="hidden" name="_method" value="put"> -->

                        <div class="mb-3">
                            <label for="" class="form-label">Nombre</label>
                            <input type="text" name="nombre" id="nombre" value="{{ $user->name }}" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Correo</label>
                            <input type="text" name="correo" id="correo" value="{{ $user->email }}" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="text" name="password" id="password" value="{{ $user->password }}" class="form-control" required>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
