
@extends('layout.app')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-body shadow">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                    <table  id="tabla_user" class="table table-hover table-sm">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $u)
                                <tr>
                                    <td scope="row">{{ $u->id }}</td>
                                    <td>{{ $u->name }}</td>
                                    <td>{{ $u->email }}</td>
                                    <td>
                                        <a href="{{ route('users.show', $u->id) }}" class="btn btn-sm btn-success">Editar</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('users.destroy', $u->id) }}" method="post">
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger">Elminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@push('javascript')
<script>
    $(document).ready( function () {
        $('#tabla_user').DataTable();



    } );
</script>
@endpush
