@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Categorias</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        
                        <div class="card-body">
                            <div class="">
                                <button type="button" class="btn btn-primary" id="toggle-modal-1">
                                Añadir Categoria</button>
                            </div>
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                  </tr>
                                </thead>
                                <tbody id="tbody">
                                  
                                  @foreach ($categorias as $categoria)
                                  <tr>
                                    <td scope="row"> {{$categoria->id}}</td>
                                    <td>{{$categoria->nombre}}</td>                                   
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
@section('scripts')
<script>
    const ruta = "{{route('categoria.create')}}";
    const token = document.head.querySelector('[name~=csrf-token][content]').content;
    let tbody=  document.getElementById('tbody');

    $('#toggle-modal-1').fireModal({
      title: 'Nueva Categoria',
      body: ' <div class="mb-3">'+
    '<label for="categoria" class="form-label">Nombre</label>'+
    '<input type="text" class="form-control" id="categoria" aria-describedby="categoria">'+
    '</div>',
      buttons: [
        {
          text: 'Cerrar',
          class: 'btn btn-secondary',
          handler: function(current_modal) {
          $.destroyModal(current_modal);
          }
        },
        {
          text: 'Añadir',
          class: 'btn btn-primary',
          handler: function(current_modal) {            
            $.destroyModal(current_modal);
            añadirNuevo();
          }
        }

      ]
    });

    function añadirNuevo(){
       let nombre_cat = document.getElementById('categoria').value;
       
       fetch(ruta,{
            method:'POST',
            body:JSON.stringify({
               nombre:nombre_cat
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
                let categoria= ee.categoria;
                let datos='';
                tbody.innerHTML='';
                categoria.forEach(element => {
                    datos+='<tr>'+
                            '<td scope="row"> '+element.id+'</td>'+
                            '<td>'+element.nombre+'</td>'+                                   
                            '</tr>';
                });

                tbody.innerHTML=datos;

                iziToast.success({
                    title: 'Exitos',
                    message: 'Peticion hecha correctamente',
                    position: 'topRight',
                    timeout: 1000,
                    onClosed:function(){
                        //window.location.href=ruta;  
                    }    
                });
            }).catch(e=>{
                console.log(e);
            }) 

        
    }
  </script>
@endsection