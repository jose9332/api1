new Vue({
  el:"#app",
  created:function()
  {
    this.getPaciente();
    this.getPerfiles_Pacientes();
    this.getProcedimientosPaciente();
    //this.perfil_paciente_for_search = this.paciente_datos.perfil_paciente;

  },
  data:{
    perfil_paciente_for_search:'',
    paciente_datos:[],
    procedimientos_paciente:[],
    id_paciente:'',

    perfil_pacientes:[],
    checkbox_disponibilidad:false,
    checkbox_perfil_paciente: false,
    checkbox_direccion:false,
    hora_inicio:'',hora_fin:'',
    search:
    {
      perfil_paciente:'',
      municipio:'',
      calle:'',
      hora_inicio:'0',
      hora_fin:'0 ',
    },
    lista_personal:'',
    tmp_direccion:'',
    procedimientos_personal:[],
    tmp_personal:'',
  },
  methods:{
    messageWarning:function(tipo)
    {
      toastr["warning"]("Ocurrio un error al obtener los datos del "+tipo+"!")
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

    },
    getPaciente:function()
    {
      var url="{{route('guardia/paciente')}}";
      this.id_paciente = document.getElementById('paciente').value;
      axios.post(url,{
        paciente: this.id_paciente
      }).then(response =>{
        this.paciente_datos = response.data
      }).catch(error =>{
        this.messageWarning('paciente');
      });

    },
    getPerfiles_Pacientes:function()
    {
      var url='perfil_pacientes';
      axios.post(url).then(response=>{
        this.perfil_pacientes = response.data
      }).catch(error =>{
        this.perfil_pacientes = 'Sin Resultados'
      });
    },
    getProcedimientosPaciente:function()
    {
      var url="{{route('guardia/procedimientos/paciente')}}";
      axios.post(url,{
        paciente: this.id_paciente
      }).then(response =>{
        this.procedimientos_paciente = response.data
      }).catch(error =>{
        this.messageWarning('paciente');
      });
    },
    changePerfil:function()
    {
      if(this.checkbox_perfil_paciente==false)
      {
        this.search.perfil_paciente=''
      }else{
        this.search.perfil_paciente = this.paciente_datos[0].perfil_paciente;
      }
    },
    changeDireccion:function()
    {
      if(this.checkbox_direccion==false)
      {
        this.search.municipio = '';
        this.search.calle = '';
      }else {
        this.search.municipio = this.paciente_datos[0].municipio;
        this.search.calle = this.paciente_datos[0].calle;
      }
    },
    changeDisponibilidad:function()
    {
      if(this.checkbox_disponibilidad==false)
      {
        this.search.hora_inicio='0';
        this.search.hora_fin='0';
      }
    },



    //Modales
    viewDireccionPaciente:function()
    {
      $("#Modal_Direccion").modal('show');
    },
    ViewProcedimientosPaciente:function()
    {
      $('#Modal_procedimientos').modal('show');
    },


    //Personal
    searchPersonal:function()
    {
      var url ="{{route('guardia/empleados')}}";
      axios.post(url, {
        search: this.search
      }).then(response =>{
        this.lista_personal = response.data
      }).catch( error=>{
        this.messageWarning('personal');
      });
    },

    viewDireccionPersonal:function(index)
    {
      this.tmp_direccion = this.lista_personal[index];
      $('#Modal_Direccion_personal').modal('show');
    },
    ViewProcedimientosPersonal:function(index)
    {
      this.tmp_personal = this.lista_personal[index];
      var url='guardia/procedimientos/personal';
      axios.post(url,{
        personal: this.tmp_personal.id
      }).then(response => {
        this.procedimientos_personal = response.data
      }).catch( error =>{
        this.messageWarning('personal');
      });
      $('#Modal_procedimientosPersonal').modal('show');
    },


  },
});
