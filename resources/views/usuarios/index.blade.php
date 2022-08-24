@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Usuarios</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Nuestro Usuarios</h3>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Roles</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($user as $usuario)
                                  <tr>
                                    <th scope="row"> <a href="{{route('usuarios.asignarrol',$usuario->id)}}"> {{$usuario->id}}</a></th>
                                    <td>{{$usuario->name}}</td>
                                    <td>{{$usuario->email}}</td>
                                    <td>
                                        {{ $usuario->getRoleNames() }}
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
    </section>
@endsection
