@extends('layout.app')
@section('content')

<h1>Este es el home</h1>

<div class="container">
    <div class="row">
        <div class="col-md-6">

            <div class="card">
                <div class="card-body shadow">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                    <table  id="tabla_user" class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">1</td>
                                <td>Mario</td>
                                <td>m@gmail.com</td>
                            </tr>
                            <tr>
                                <td scope="row">1</td>
                                <td>Mario</td>
                                <td>m@gmail.com</td>
                            </tr>
                            <tr>
                                <td scope="row">1</td>
                                <td>Mario</td>
                                <td>m@gmail.com</td>
                            </tr>
                            <tr>
                                <td scope="row">1</td>
                                <td>Mario</td>
                                <td>m@gmail.com</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>


<script>
    $(document).ready( function () {
        $('#tabla_user').DataTable();



    } );
</script>
@endsection
