                                                <div class="tab-pane" id="personales">
                                                  <div class="panel panel-info">
                                                    <div class="panel-heading">
                                                      <h4 class="panel-title "><center>Datos de personal</center></h4>
                                                    </div>
                                                    <div class="panel-body">
                                                      <div class="row">
                                                        
                                                        <div class="row">
                                                          <div class="col-sm-4 col-sm-offset-1">
                                                              <div class="input-group date" data-provide="datepicker">
                                                                <span class="input-group-addon">
                                                                    <i class="material-icons">cake</i>
                                                                </span>
                                                                  <div class="form-group " :class="['label-floating', empleado.fecha_nacimiento == '' ? 'empleado.fecha_nacimiento' : '']">
                                                                      <label class="control-label">Fecha de Nacimiento <small>(*)</small></label>
                                                                      <date-picker v-model="empleado.fecha_nacimiento" :config="config" name="date-of-birth" class="form-control"></date-picker>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="col-sm-5 col-sm-offset-1">
                                                            <div class="input-group">
                                                              <span class="input-group-addon">
                                                                  <i class="material-icons">record_voice_over</i>
                                                              </span>
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Nombre <small>(*)</small></label>
                                                                    {{ Form::text('nombre', null,['class' => 'form-control','required','v-model'=>'empleado.nombre']) }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                          
                                                          
                                                        </div>

                                                        <div class="col-sm-5 col-sm-offset-1">
                                                            <div class="input-group">
                                                              <span class="input-group-addon">
                                                                  <i class="material-icons">record_voice_over</i>
                                                              </span>
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Apellido Paterno <small>(*)</small></label>
                                                                    {{ Form::text('apellido_paterno', null,['class' => 'form-control','required','v-model'=>'empleado.apellido_paterno']) }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-5 ">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="material-icons">record_voice_over</i>
                                                                </span>
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Apellido Materno <small>(*)</small></label>
                                                                    {{ Form::text('apellido_materno', null,['class' => 'form-control','required','v-model'=>'empleado.apellido_materno']) }}
                                                                </div>
                                                            </div>
                                                        </div>

                                                       
                                                        <div class="col-sm-5 col-sm-offset-1 ">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="material-icons">email</i>
                                                                </span>
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Email <small>(*)</small></label>
                                                                    {{ Form::email('email', null,['class' => 'form-control','required','v-model'=>'empleado.email']) }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-5 ">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="material-icons">record_voice_over</i>
                                                                </span>
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Puesto <small>(*)</small></label>
                                                                    {{ Form::text('Puesto', null,['class' => 'form-control','required','v-model'=>'empleado.puesto']) }}
                                                                </div>
                                                            </div>
                                                        </div>

                                                      </div>
                                                    </div>
                                                  </div>

                                                


                                                <div class="tab-pane" >
                                                  <div class="panel panel-info">
                                                    <div class="panel-heading">
                                                      <h4 class="panel-title "><center>Direccion</center></h4>
                                                    </div>
                                                    <div class="panel-body">
                                                      <div class="row">
                                                        
                                                        <div class="row">
                                                          <div class="col-sm-4 col-sm-offset-1">
                                                             <div class="input-group">
                                                                <span class="input-group-addon">
                                                                  <i class="material-icons">place</i>
                                                                </span>
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Calle <small>(*)</small></label>
                                                                    {{ Form::text('Calle', null,['class' => 'form-control','required','v-model'=>'direccion.calle']) }}
                                                                </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-sm-5 col-sm-offset-1">
                                                            <div class="input-group">
                                                              <span class="input-group-addon">
                                                                  <i class="material-icons">place</i>
                                                              </span>
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Colonia <small>(*)</small></label>
                                                                    {{ Form::text('Colonia', null,['class' => 'form-control','required','v-model'=>'direccion.colonia']) }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                          
                                                          
                                                        </div>

                                                        <div class="col-sm-5 col-sm-offset-1">
                                                            <div class="input-group">
                                                              <span class="input-group-addon">
                                                                  <i class="material-icons">place</i>
                                                              </span>
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Estado <small>(*)</small></label>
                                                                    {{ Form::text('estado', null,['class' => 'form-control','required','v-model'=>'direccion.estado']) }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-5 ">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="material-icons">place</i>
                                                                </span>
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">C.P. <small>(*)</small></label>
                                                                    {{ Form::text('cp', null,['class' => 'form-control','required','v-model'=>'direccion.cp']) }}
                                                                </div>
                                                            </div>
                                                        </div>

                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                

                                                </div>

                                                
