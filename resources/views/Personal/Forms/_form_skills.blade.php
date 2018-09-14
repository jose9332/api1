<div class="tab-pane" id="skills">
    <div class="row">
        <h4 class="info-text">Skills </h4>
    </div>

    <div class="row">
        <div class="col-sm-6 col-sm-offset-1">
          <button type="button" class="btn btn-primary btn-lg" @click="openSkills">
              Agregar skills
          </button>
        </div>
    </div>

    <div class="row">
  		<div class="col-sm-10 col-sm-offset-1">
          <div class="panel panel-default" v-if="empleado.skills.length > 0">
            <div class="panel-heading"><b>Skills del empleado</b></div>
            <div class="panel-body">
              <ul class="list-group">
                <li class="list-group-item" v-for="(skill, index) in skills">
                  <span class="badge close" @click="deleteProcedimiento(index)">X</span>
                  @{{ skill.id+'.- '+skill.nombre }}
                </li>
              </ul>
            </div>
        </div>
  		</div>
  	</div>
</div>
