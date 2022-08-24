@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Crear Producto</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        
                        <div class="card-body">
                            <form action="{{route('producto.store')}}"   method="POST" enctype="multipart/form-data">
                                @csrf 
                                <div class="form-group">
                                    <img src="/img/logo.png" id="preview" class="img-thumbnail" width="100" height="100">
                                </div>

                                <div class="form-group">
                                    <div class="custom-file">
                                    <input type="file" class="custom-file-input" onchange="cargarImagen(event)" name="file"  id="imagen">
                                    <label class="custom-file-label" for="imagen">Cargar foto</label>
                                    </div>
                                </div>

                                <div class="form-group"> 
                                    <label for="nombre" class="control-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" maxlength="30" name="nombre" placeholder="Ingresa tu nombre">
                                </div>    
                                <div class="form-group"> 
                                    <label for="descripcion" class="control-label">Descripcsion</label>
                                    <input type="text" class="form-control" id="descripcion"  maxlength="100" name="descripcion" placeholder="Ingresa tu descripcion  ">
                                </div>                    
                                                   
                                <div class="form-group"> 
                                    <label for="precio" class="control-label">Precio Venta</label>
                                    <input type="number" class="form-control" id="precio"    name="precio" placeholder="0">
                                </div>                         
                                                        
                                <div class="form-group">
                                    <label for="categoria" class="control-label">Categoria</label>
                                    <select class="form-control" name="categoria">

                                        @foreach ( $categorias as $categoria)
                                        <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                        @endforeach                              
                                            
                                    </select>                    
                                </div>

                                <div class="form-group">
                                    <label for="unidad" class="control-label">Unidad</label>
                                    <select class="form-control" name="unidad">

                                        @foreach ( $unidades as $unidad )
                                        <option value="{{$unidad->id}}">{{$unidad->unidad}}</option>
                                        @endforeach                              
                                            
                                    </select>                    
                                </div>                           
                                
                                <button type="submit" class="btn btn-success">Guardar Producto</button>
                                                               
                            </form>                           
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        function cargarImagen(e){

            const input = event.target;
            let preview = document.querySelector('#preview');

            let file = document.getElementById('imagen').files[0];

            //Creamos la url
            let objectURL = URL.createObjectURL(file);
            
            //Modificamos el atributo src de la etiqueta img
            preview.src = objectURL;



        }

    </script>
@endsection