<template>
  <div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
      <h3 class="card-title">
        <template v-if="formType === 'create'">Crear Grupo</template>
        <template v-if="formType === 'edit'">Actualizar Grupo</template>
      </h3>
    </div>
    <!--begin::Form-->
    <BForm class="form" @submit.prevent="onSubmit">
      <div class="card-body">
        <div class="form-group row">
          <label class="col-lg-2 col-form-label text-lg-right">Nombre Grupo:</label>
          <div class="col-lg-4">
            <input
              type="text"
              name="name"
              class="form-control"
              placeholder="Enter full name"
              v-model="form.name"
            />
            <span class="form-text text-muted">Por favor ingresa el nombre del grupo</span>
          </div>
          <label class="col-lg-2 col-form-label text-lg-right">Descripcion Grupo:</label>
          <div class="col-lg-4">
            <input
              type="text"
              name="description"
              class="form-control"
              placeholder="Enter contact number"
              v-model="form.description"
            />
            <span class="form-text text-muted">Por favor ingresa la descripcion del grupo</span>
          </div>
        </div>
      </div>
      <div class="card-footer">
        <div class="row">
          <div class="col-lg-2"></div>
          <div class="col-lg-10">
            <BButton type="submit" variant="success" class="mr-2" :disabled="isSending">
              <template v-if="isSending">
                <BSpinner small />
                <span class="sr-only">Loading...</span>
              </template>
              <span v-else>
                <template v-if="formType === 'create'">Guardar</template>
                <template v-if="formType === 'edit'">Actualizar</template>
              </span>
            </BButton>
            <BButton :to="{ name: 'Groups' }" class="btn btn-secondary"> Cancel </BButton>
          </div>
        </div>
      </div>
    </BForm>
    <!--end::Form-->
  </div>
</template>

<script>
import { mapState, mapActions } from 'vuex';
import isEmpty from 'lodash/isEmpty';

export default {
  props: {
    groupId: {
      type: [Number, String],
      default: null
    }
  },
  data() {
    return {
      form: {
        name: '',
        description: ''
      },
      isSending: false,
      formType: this.groupId ? 'edit' : 'create'
    };
  },
  computed: {
    ...mapState('groups', ['groups', 'group'])
  },
  mounted() {
    this.setGroup();
  },
  methods: {
    ...mapActions('groups', ['getGroup', 'createGroup', 'editGroup']),
    setGroup() {
      if (this.formType == 'edit') {
        if (!isEmpty(this.group)) {
          this.form.name = this.group.name;
          this.form.description = this.group.description;
        } else {
          this.getGroup(this.groupId)
            .then((res) => {
              this.form.name = res.name;
              this.form.description = res.description;
            })
            .catch((error) => {
              console.log(error);
            });
        }
      }
    },
    onSubmit() {
      this.isSending = true;

      const params = {
        name: this.form.name,
        description: this.form.description
      };

      if (this.formType == 'create') {
        this.createGroup(params)
          .then(() => {
            toastr.success('Registro Creado con Exito!');
            this.$router.push({ name: 'Groups' });
          })
          .catch((error) => {
            console.log(error);
          })
          .finally(() => {
            this.isSending = false;
          });
      }

      if (this.formType == 'edit') {
        const data = {
          groupId: this.groupId,
          params
        };

        this.editGroup(data)
          .then(() => {
            toastr.success('Registro Actualizado con Exito!');
          })
          .catch((error) => {
            console.log(error);
          })
          .finally(() => {
            this.isSending = false;
          });
      }
    }
  }
};
</script>