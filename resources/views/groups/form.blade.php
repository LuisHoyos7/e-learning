<div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
        <h3 class="card-title">
            {{ empty($group) ? 'Crear Grupo' : 'Actualizar Grupo' }}
        </h3>
    </div>
    <!--begin::Form-->
    @if (empty($group))
        <form class="form" action="{{ route('group.store') }}" method="POST">
        @else
            <form class="form" action="{{ route('group.update', $group->id) }}" method="POST">
            @method('PUT')
    @endif
    {{ csrf_field() }}
    <div class="card-body">
        <div class="form-group row">
            <label class="col-lg-2 col-form-label text-lg-right">Nombre Grupo:</label>
            <div class="col-lg-4">
                <input type="text" name="name" class="form-control" placeholder="Enter full name"
                    value="{{ $group->name ?? old('name') }}">
                <span class="form-text text-muted">Por favor ingresa el nombre del grupo</span>
            </div>
            <label class="col-lg-2 col-form-label text-lg-right">Descripcion Grupo:</label>
            <div class="col-lg-4">
                <input type="text" name="description" class="form-control" placeholder="Enter contact number"
                    value="{{ $group->description ?? old('description') }}">
                <span class="form-text text-muted">Por favor ingresa la descripcion del grupo</span>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-10">
                <button type="submit" class="btn btn-success mr-2">
                    {{ empty($group) ? 'Guardar' : 'Actualizar' }}
                </button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
        </div>
    </div>
    </form>
    <!--end::Form-->
</div>
