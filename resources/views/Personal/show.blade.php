@extends('layouts.layout')
@section('sources_css')
<link rel="stylesheet" href="{{asset('css/wizard.css')}}">
<link rel="stylesheet" href="{{asset('css/toastr.css')}}">
@endsection
@section('content')
<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading"><b>Actualizar Nuevo empleado</b></div>
  <div class="panel-body">
  <!-- Inicio del body del panel -->

<div id="app">
  <section id="personal" >
              <div class="">
                &nbsp;
              </div>
    	        <div class="row" >
    		        <div class="col-sm-10 col-sm-offset-1">
    		        	<div class="block wow fadeInUp" data-wow-delay=".3s">


    		            <div class="wizard-container">
                      <!-- inicio wizard -->
    		                <div class="card wizard-card" data-color="blue" id="wizard">
        		                <form method="POST" v-on:submit.prevent="submit">
                              {{ csrf_field() }}
                               	<div class="wizard-header">


                                      <div class="panel panel-info">
                                        <div class="panel-heading">
                                          <h3 class="panel-title">Buscar empleados</h3>
                                        </div>
                                      </div>
        		                    	</div>
                                  <div class="row">
                                    <div class="col-sm-3 col-sm-offset-1">

                                        <div class="input-group">
                                          <span class="input-group-addon">
                                              <i class="material-icons">record_voice_over</i>
                                          </span>
                                            <div class="form-group label-floating">
                                                <label class="label-bn control-label">Nombre </label>
                                                {{ Form::text('nombre', null,['class' => 'form-control','v-model'=>'search.nombre']) }}
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-sm-3 col-sm-offset-1">

                                        <div class="input-group">
                                          <span class="input-group-addon">
                                              <i class="material-icons">record_voice_over</i>
                                          </span>
                                            <div class="form-group label-floating">
                                                <label class="label-bn control-label">Apellido Paterno </label>
                                                {{ Form::text('nombre', null,['class' => 'form-control','v-model'=>'search.apellido_paterno']) }}
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-sm-3 col-sm-offset-1">

                                        <div class="input-group">
                                          <span class="input-group-addon">
                                              <i class="material-icons">record_voice_over</i>
                                          </span>
                                            <div class="form-group label-floating">
                                                <label class="label-bn control-label">Apellido Materno </label>
                                                {{ Form::text('nombre', null,['class' => 'form-control','v-model'=>'search.apellido_materno']) }}
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-sm-3 col-sm-offset-1">
                                      <a href="#" class="btn btn-default" @click.prevent="buscar">Buscar</a>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1" v-if="empleados.length >0">
                                      <table class="table table-hover table-striped table-bordered">
                                  			<thead>
                                  				<tr>
                                  					<th>ID</th>
                                  					<th>Nombre</th>
                                            <th>Apellido Paterno</th>
                                            <th>Apellido Materno</th>
                                            <th>Puesto</th>
                                            <th>Opciones</th>
                                  					
                                  				</tr>
                                  			</thead>
                                  			<tbody>
                                  				<tr v-for="empleado in empleados">
                                  					<td width="10px">@{{ empleado.id }}</td>
                                  					<td>@{{ empleado.nombre }}</td>
                                            <td>@{{empleado.apaterno}}</td>
                                            <td>@{{empleado.amaterno}}</td>
                                            <td>@{{empleado.puesto}}</td>                                            
                                  					<td >
                                  						<a href="#" class="" v-on:click.prevent="getDetails(empleado.id)" title="Ver"><i class="material-icons">visibility</i></a>
                                            </td>
                                  				</tr>
                                  			</tbody>
                                  		</table>
                                    </div>
                                  </div>
    		            		       </form>
    		            	    </div>
    		             </div> <!-- fin wizard container -->



    		      	  </div>
    		        </div>
    	    	</div> <!-- row -->



	           <div class="row">
	              <div class="col-xs-12">
	                <pre>@{{$data}}</pre>
	              </div>
	            </div>


              <!-- Modal -->
                  <div class="modal fade " id="ModalEditar" tabindex="-1" role="dialog" aria-labelledby="Modal-Editar" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header" style="background-color:powderblue;" >
                                  <h5 class="modal-title text-center" >Detalles del Status de Personal </h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">

                                <div class="row">
                                  <div class="col-sm-10">

                                      <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">record_voice_over</i>
                                        </span>
                                          <div class="form-group ">
                                              <label class="label-bn control-label">Nombre </label>
                                              {{ Form::text('nombre', null,['class' => 'form-control','required','v-model'=>'empleado_nombre','readonly']) }}
                                          </div>
                                      </div>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-sm-10">

                                      <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">record_voice_over</i>
                                        </span>
                                          <div class="form-group ">
                                              <label class="label-bn control-label">Puesto </label>
                                              {{ Form::text('nombre', null,['class' => 'form-control','required','v-model'=>'empleado_puesto','readonly']) }}
                                          </div>
                                      </div>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-sm-10">
                                      <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">place</i>
                                        </span>
                                          <div class="form-group ">
                                              <label class="label-bn control-label">Direccion </label>
                                              {{ Form::text('Direccion', null,['class' => 'form-control','required','v-model'=>'empleado_direccion','readonly']) }}
                                          </div>
                                      </div>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-sm-10">
                                      <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">mail</i>
                                        </span>
                                          <div class="form-group ">
                                              <label class="label-bn control-label">Email </label>
                                              {{ Form::text('email', null,['class' => 'form-control','required','v-model'=>'empleado_correo','readonly']) }}
                                          </div>
                                      </div>
                                  </div>
                                </div>


                              </div>
                              <div class="row">
                                <div class="col-sm-3 col-sm-offset-1">
                                  <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Cerrar</button>
                                </div>
                                
                              </div>

                          </div>
                      </div>
                  </div>
                  <!-- fin modal ver -->
   </section>
   </div>
</div>
	<!-- Fin del body del panel -->

</div>
@endsection


@section('sources_js')
<script src="{{asset('js/wizard.js')}}"></script>
<script src="{{asset('js/lodash/lodash.js')}}"></script>
<script src="{{asset('js/axios.js')}}"></script>
<script src="{{asset('js/vue.js')}}"></script>
<script src="{{asset('js/toastr.js')}}"></script>
<script type="text/javascript">
  new Vue({
    el:"#app",
    created:function(){
    },
    data:{
      search:{
        nombre:'',
        apellido_paterno:'',apellido_materno:'',
      },
      empleados:[],
      details:[],
      empleado_id:'',empleado_nombre:'',empleado_direccion:'',empleado_puesto:'',empleado_correo:'',
      id_tmp:'',
    },
    methods:{

      buscar:function(){
        var url="{{route('personal/search') }}";
        axios.post(url,{
          search: this.search
          
        }).then(response =>{
          this.empleados = response.data
        }).catch(error => {
          console.log(error);
        });
      },
      getDetails:function(id){
        var url="{{route('personal/detail') }}";
        axios.post(url,{
          id:id
        }).then(response =>{
          this.details = response.data
          this.empleado_nombre = this.details[0].nombre+' ' +this.details[0].apaterno+' '+this.details[0].amaterno;
          this.empleado_puesto = this.details[0].puesto;
          this.empleado_correo = this.details[0].email;
          this.empleado_direccion = this.details[0].calle+', ' +this.details[0].colonia+', '+this.details[0].estado;
          $("#ModalEditar").modal('show');
        }).catch(error => {
          this.details = response.data
          
        });
      },
    }
  })
</script>
@endsection
