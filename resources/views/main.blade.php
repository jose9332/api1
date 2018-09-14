@extends('layouts.layout')
@section('sources_css')
<link href="{{ asset('vue-picker/original.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/wizard.css')}}">
<link rel="stylesheet" href="{{asset('css/toastr.css')}}">
<script src="https://unpkg.com/jquery@3.2.1/dist/jquery.min.js"></script>
<script src="{{ asset('vue-picker/moment.min.js')}}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Date-picker itself -->
<script src="{{ asset('vue-picker/bootstrap-datetimepicker.min.js')}}"></script>


<!-- Vue js -->
<script src="{{ asset('js/vue.js') }}"></script>
<!-- Lastly add this package -->
<script src="{{ asset('vue-picker/vue-bootstrap-datetimepicker.min.js')}}"></script>
<style media="screen">
.scrollbar{
  background-color:lightgray;height: auto;
  max-height: 200px;
  overflow-x:hidden;
  overflow-y:scroll;
  min-width: 135px;
  margin-top: 0px;
 }
#ex4::-webkit-scrollbar { width:10px;background-color:#cccccc; }
#ex4::-webkit-scrollbar-thumb { background-color:#B03C3F;border-radius:10px; }
#ex4::-webkit-scrollbar-thumb:hover { background-color:#BF4649;border:1px solid #333333; }
#ex4::-webkit-scrollbar-thumb:active { background-color:#A6393D;border:1px solid #333333; }
</style>
@endsection

@section('content')
<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading"><b></b></div>
  <div class="panel-body">
  <!-- Inicio del body del panel -->

    <div id="app">
      <section id="hero-area" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="block wow fadeInUp" data-wow-delay=".3s">

                            <!-- Slider -->
                            <section class="cd-intro">
                                <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >
                                <span>Aplicación </span><br>
                                <span class="cd-words-wrapper">
                                    <b class="is-visible">API</b>
                                    
                                </span>
                                </h1>
                                </section> <!-- cd-intro -->
                                <!-- /.slider -->
                                

                            </div>
                        </div>
                    </div>
                </div>
            </section><!--/#main-slider-->
       

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


@endsection
