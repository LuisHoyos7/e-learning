<template>
  <div class="card card-custom gutter-b">
    <div class="card-header flex-wrap py-3">
      <div class="card-title">
        <h3 class="card-label">Registros de Grupos</h3>
      </div>
      <div class="card-toolbar">
        <BLink
          class="btn btn-primary btn-shadow font-weight-bold mr-2"
          :to="{ name: 'GroupCreate' }"
        >
          <span class="svg-icon svg-icon-md">Crear Grupo</span>
        </BLink>
      </div>
    </div>
    <div class="card-body">
      <!--begin: Datatable-->
      <div id="kt_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
        <div class="row">
          <div class="col-sm-12">
            <BTable hover :fields="fields" :items="groups">
              <template #cell(actions)="data">
                <div class="btn-group">
                  <BLink @click="handleEdit(data.item.id)" class="btn btn-primary btn-sm">
                    Editar
                  </BLink>
                  <button
                    class="btn btn-danger btn-sm delete-group"
                    @click="deleteGroups(data.item.id)"
                  >
                    Borrar
                  </button>
                </div>
              </template>
            </BTable>
          </div>
        </div>
      </div>
      <!--end: Datatable-->
    </div>
  </div>
</template>

<script>
import { mapState, mapActions, mapMutations } from 'vuex';

export default {
  data() {
    return {
      fields: [
        { key: 'name', label: 'Nombre' },
        { key: 'description', label: 'Descripcion' },
        { key: 'actions', label: 'Acciones' }
      ]
    };
  },
  computed: {
    ...mapState('groups', ['groups'])
  },
  methods: {
    ...mapActions('groups', ['removeGroups', 'getGroup']),
    ...mapMutations('groups', ['SET_GROUP']),
    deleteGroups(groupId) {
      this.removeGroups(groupId)
        .then((res) => {
          toastr.success('Registro Eliminado con Exito!', res.message);
        })
        .catch((error) => {
          alert(error);
        });
    },
    handleEdit(groupId) {
      const index = this.groups.findIndex((group) => group.id === groupId);
      this.SET_GROUP(this.groups[index]);

      this.$router.push({ name: 'GroupEdit', params: { groupId } });
    }
  }
};
</script>