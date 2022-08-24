@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Asignar Roles</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table">                               
                                <tbody>
                                  <tr>
                                    <th scope="row">Nombre</th>
                                    <td>Email</td>
                                    <td>Roles</td>                                    
                                  </tr>
                                  <tr>
                                  <th scope="row">{{$user->name}}</th>
                                  <td>{{$user->email}}</td>
                                  <td>{{$user->getRoleNames()}}</td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            @foreach ($roles as $rol )
                            <input type="checkbox" name="roles" value="{{$rol->id}}" {{ $user->hasRole($rol->name)==true?'checked':'' }} > {{$rol->name}} <br/>
                            @endforeach
                            <br>
                            <button type="button" class="btn btn-primary" onclick="guardar({{$user->id}})">Cambiar rol</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
<script>
    const ruta = "{{route('usuarios.index')}}";
    const token = document.head.querySelector('[name~=csrf-token][content]').content;
    function guardar(id){   
        let roles = new Array();
        for (let index = 0; index < document.getElementsByName('roles').length; index++) {
            if( document.getElementsByName('roles')[index].checked==true){
                roles.push( document.getElementsByName('roles')[index].value );
            }            
        }
        
        if(roles.length>0){
            fetch('http://laravellogin.test/usuario/cambiar_rol',{
            method:'POST',
            body:JSON.stringify({
                roles_id:roles,
                user:id
            }),
            headers:{
                "Content-Type":"application/json",
                "X-CSRF-Token":token,
            }
            })
            .then((e)=>{
                return e.json();  
            })
            .then(ee=>{
                console.log(ee);
                iziToast.success({
                    title: 'Exitos',
                    message: 'Peticion hecha correctamente',
                    position: 'topRight',
                    timeout: 1000,
                    onClosed:function(){
                        window.location.href=ruta;  
                    }    
                });
            }).catch(e=>{
                console.log(e);
            }) 
        }else{
            iziToast.warning({
                timeout:1500,
                position: 'topCenter',
                title: 'Incorrecto',
                message: 'Debes tener 1 rol por lo menos',
            });
        }       
            
       /*  */
       
    }

</script>


@endsection