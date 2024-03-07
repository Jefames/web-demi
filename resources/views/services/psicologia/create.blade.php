@extends('layouts.base_master')

@section('title', 'Nuevo Informe')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><b>Expediente de Psicologia</b></h1>
                    <div class="dropdown-divider"></div>

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Informe</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="fecha">Fecha</label>
                <abbr title="Campo obligatorio" class="required-indicator">*</abbr>
                <input type="date" class="form-control" id="fecha" name="fecha" required>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="Modalidad de violencia">Modalidad de violencia</label>
                <abbr title="Campo obligatorio" class="required-indicator">*</abbr>
                <select id="Modalidad de violencia" name="Violencia" class="form-control">
                    <option value="Psicologico">Psicologico</option>
                    <option value="Fisica">Fisica</option>
                    <option value="Economica">Economica</option>
                    <option value="Sexual">Sexual</option>
                </select>
            </div>
        </div>

    @endsection
    @section('scripts')
        <!-- JS PROPIO -->
        <script src="{{asset('assets/js/informes/call_centers/create_validation.js')}}"></script>
    @endsection