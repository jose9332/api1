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
  <div class="panel-heading"><b>Registrar Nuevo Candidato</b></div>
  <div class="panel-body">
  <!-- Inicio del body del panel -->

<div id="app">
  <section id="personal" >

    	        <div class="row" >
    		        <div class="col-sm-12">
    		        	<div class="block wow fadeInUp" data-wow-delay=".3s">
    		            
    		            <div class="tab-pane">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4 class="panel-title "><center>Agregar Skill</center></h4>
                                </div>
                                <div class="panel-body">
                                    <div class="col-sm-5 col-sm-offset-1">
                                        <div class="input-group">
                                          <span class="input-group-addon">
                                              <i class="material-icons">record_voice_over</i>
                                          </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Skill <small>(*)</small></label>
                                                {{ Form::text('skill', null,['class' => 'form-control','required','v-model'=> 'skill']) }}
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-sm-11 col-sm-offset-1">
                                        <a href="#" class="btn btn-primary" @click="submit">Guardar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
    		      	  </div>
    		        </div>
    	    	</div> <!-- row -->
	           <div class="row">
	              <div class="col-xs-12">
	                <pre>@{{$data}}</pre>
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
  new Vue({
    el:"#app",
    data:{
        skill:''
    },
    
	methods:{
        submit:function()
        {
            if(this.skill==''){
            toastr["warning"]("Debe ingresar un nombre!")
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
            var url = "{{ route('skills/storage') }}";
                axios.post(url, {
                    skill: this.skill,
                }).then(response => {
                    toastr.success('Skill agregada con exito!');

            swal({
            title: "Registro Exitoso!",
            text: "El skill ha sido registrado correctamente!",
            icon: "success",
            }).then((value) => {
            location.href="{{route('skills')}}"
            });
                }).catch(error => {
                    //alert('no agregado');
            toastr["error"]("Se ha encontrado un error, intentelo mas tarde.")
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
