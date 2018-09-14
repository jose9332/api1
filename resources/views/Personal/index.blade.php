@extends('layouts.layout')
@section('sources_css')
<link href="{{ asset('vue-picker/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/wizard.css') }}">
<link rel="stylesheet" href="{{ asset('css/toastr.css') }}">
<script src="https://unpkg.com/jquery@3.2.1/dist/jquery.min.js"></script>
<script src="{{ asset('vue-picker/moment.min.js')}}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Date-picker itself -->
<script src="{{ asset('vue-picker/bootstrap-datetimepicker.min.js')}}"></script>


<!-- Vue js -->
<script src="{{ asset('js/vue.js') }}"></script>
<!-- Lastly add this package -->
<script src="{{ asset('vue-picker/vue-bootstrap-datetimepicker.min.js')}}"></script>
@endsection


@section('content')
<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading"><b>Registrar Nuevo empleado</b></div>
  <div class="panel-body">
  <!-- Inicio del body del panel -->

<div id="app">
  <section id="personal" >

    	        <div class="row" >
    		        <div class="col-sm-10 col-sm-offset-1">
    		        	<div class="block wow fadeInUp" data-wow-delay=".3s">
    		            <!--      Wizard container        -->
    		            <div class="wizard-container">
    		                <div class="card wizard-card" data-color="blue" id="wizard">
        		                <form method="POST" v-on:submit.prevent="submit">
                              {{ csrf_field() }}
                                	<div class="wizard-header">
                                      <h5>Debe acompletar toda la información.</h5>
        		                    	</div>
                  								<div class="wizard-navigation">
                  									<ul>
        	                                  <li><a style="pointer-events: none; cursor: default;" href="#personales" data-toggle="tab">Datos Personales</a></li>
                                            <li><a style="pointer-events: none; cursor: default;" href="#skills" data-toggle="tab">Skills</a></li>
        	                           </ul>
                  							   </div>

    			                        <div class="tab-content">
                                            @include('Personal.Forms._form_personal')
                                            @include('Personal.Forms._form_skills')
                                  </div>
    			          	            <div class="wizard-footer">
    			          	                <div class="pull-right">
    			          	                      <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Siguiente' />
    			          	                      <input type='submit' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Crear' />
    			          	                 </div>
    			          	                 <div class="pull-left">
    			          	                      <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Anterior' />

    			          	                </div>
    			          	               <div class="clearfix"></div>
    			          	            </div>
    		            		       </form>
    		            	    </div>
    		             </div> <!-- wizard container -->
    		      	  </div>
    		        </div>
    	    	</div> <!-- row -->


              <!--SECCION DE MODALES -->
              <!-- Modal -->
                  <div class="modal fade " id="Modal-skills" tabindex="-1" role="dialog" aria-labelledby="Modalprocedimientos" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                              <div class="modal-header" style="background-color:powderblue;" >
                                  <h5 class="modal-title text-center" >Lista de Skills</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col-sm-5 col-sm-offset-1" >
                                    <div class="form-group label-floating">
                                      <label class="control-label">Skill</label>
                                      <select placeholder="Seleccione" v-model="tmp" class="form-control" placeholder="">
                                        <option v-for="(lista,index) in lista_skills " v-bind:value="index" >
                                          @{{ lista.nombre }}
                                        </option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-sm-5" >
                                    <div class="form-inline label-floating">
                                      <label class="control-label">Calificación</label>
                                      {{ Form::number('Calle', null,['class' => 'form-control','required','v-model'=>'calificacion']) }}
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-3 col-sm-offset-1">
                                  <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Cancelar</button>
                                </div>
                                <div class="col-sm-3 col-sm-offset-4">
                                  <button type="button" class="btn btn-success btn-link" @click="addSkill()">Aceptar</button>
                                </div>
                              </div>

                          </div>
                      </div>
                  </div>


                  

   </section>
   </div>
</div>
	<!-- Fin del body del panel -->

</div>
@endsection

@section('sources_js')
<script src="{{ asset('js/wizard.js') }}"></script>
<script src="{{ asset('js/lodash/lodash.js') }}"></script>
<script src="{{ asset('js/axios.js') }}"></script>
<script src="{{ asset('js/toastr.js') }}"></script>
<script type="text/javascript">
 Vue.component('date-picker', VueBootstrapDatetimePicker.default);
  new Vue({
    el:"#app",
    created:function(){
      this.getSkills();
    },
    data:{
      date: '',
      config: {
         format: 'DD/MM/YYYY',
         useCurrent: false,
         showClear: true,
         showClose: true,

       },
    calificacion:'',
    empleado:{
      nombre:'',
      apellido_paterno:'', apellido_materno:'',
      email:'',puesto:'',fecha_nacimiento:'',
      skills:[],calificaciones:[],
      },
      direccion:{
        calle:'',colonia:'',estado:'',cp:'',
      },
      tmp:'',

      lista_skills:[],
      skills:[],
      calificaciones:[],

    },
    computed: {
      orderedUsers: function () {
        return _.orderBy(this.lista_skills,  ['id'], ['asc'])
      }
    },
	methods:{


    getSkills:function(){
      var url ="{{route ('skills/getSkills')}}";
      axios.get(url).then(response=>{
        this.lista_skills = response.data
      }).catch(error =>{
        this.lista_skills = 'Sin Resultados'
      });
    },
    openSkills:function()
    {
      this.calificacion='';
      this.tmp='';
      $("#Modal-skills").modal('show');
    },
    
    addSkill: function(){
      if(this.calificacion<0 || this.calificacion>5)
      {
        toastr["warning"]("Debe ingresar una calificación en un rango del 1 al 5.")
        return;
      }
      $("#Modal-skills").modal('toggle');

      this.skills.push(this.lista_skills[this.tmp].id)
      this.calificaciones.push(this.calificacion)
      //this.lista_skills.splice(this.tmp, 1);
      this.calificacion='';
      this.tmp='';

    },
    deleteProcedimiento: function(index){
      this.skills.splice(index,1)
      this.calificaciones.splice(index,2)

    },


      submit: function() {
       if(this.date=='' || this.date==null)
       {
        toastr["warning"]("Debe ingresar una fecha de nacimiento.")
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
         return;
       }
       if(this.skills.length==0 )
       {
        toastr["warning"]("Debe ingresar al menos una skill.")
        this.id_bd = response.data
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
         return;
       }
			var url = "{{ route('personal/storage') }}";
			axios.post(url, {
				empleado: this.empleado,
        direccion:this.direccion,
        skills:this.skills,
        calificaciones:  this.calificaciones
			}).then(response => {
				toastr.success('empleado Registrado con Exito!');

        swal({
          title: "Registro Exitoso!",
          text: "El empleado ha sido registrado correctamente!",
          icon: "success",
        }).then((value) => {
          location.href="{{route('personal')}}"
        });
			}).catch(error => {
				//alert('no agregado');
        toastr["error"]("Se ha encontrado un error, intentelo mas tarde.")
        this.id_bd = response.data
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
			});
		}




	}
  });
</script>
@endsection
