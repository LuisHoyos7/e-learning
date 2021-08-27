@extends('layouts.metronic.index')

@section('title', 'Listado de Grupos')

@section('breadcrumb')
    <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
    <a class="text-white text-hover-white opacity-75 hover-opacity-100 active"
        href="{{ route('group.index') }}">Grupos</a>
@endsection

@section('content')
    <div class="card card-custom gutter-b">
        <div class="card-header flex-wrap py-3">
            <div class="card-title">
                <h3 class="card-label">Registros de Grupos
                </h3>
            </div>
            <div class="card-toolbar">
                <a href="{{ route('group.create') }}" class="btn btn-primary btn-shadow font-weight-bold mr-2">
                    <span class="svg-icon svg-icon-md">Crear Grupo</span>
                </a>
            </div>
        </div>
        <div class="card-body">
            <!--begin: Datatable-->
            <div id="kt_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table  table-hover collapsed" id="kt_datatable" role="grid"
                            aria-describedby="kt_datatable_info" style="width: 1030px;">
                            <thead>
                                <tr role="row">
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($groups as $group)
                                    <tr class="odd">
                                        <td>{{ $group->name }}</td>
                                        <td>{{ $group->description }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a type="button" class="btn btn-primary btn-sm"
                                                    href="{{ route('group.edit', $group->id) }}">
                                                    Editar
                                                </a>
                                                <a href="javascript:void(0)" id="delete-group" data-id="{{ $group->id }}"
                                                    class="btn btn-danger btn-sm delete-group">
                                                    Borrar
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--end: Datatable-->
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.delete-group').click(function(e) {
                var row = $(this).parents('tr');
                var detalle_id = $(this).data("id");
                confirm("Desea Eliminar el Registro !");
                $('.alert').show();
                $.ajax({
                    type: "DELETE",
                    url: "{{ url('group/') }}" + '/' + detalle_id,
                    success: function(data) {
                        row.fadeOut();
                        toastr.error('Registro Eliminado con Exito');
                    },
                    error: function(data) {
                        console.log('Error:', data);
                    }
                });
            });
        })

    </script>
@endsection
