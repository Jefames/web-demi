@extends('layouts.base_master')

@section('title', 'Nuevo Informe')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><b>Expediente Trabajo Social</b></h1>
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
    
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
            <br>
            <div class="card card-default">
                <div class="card-header">
                    <h2 class="card-title">
                        <i class="fas fa-file-medical">  </i>
                        <b>Creación de Expediente</b>
                    </h2>
                </div>
                <div class="card-body">
                    <div class="container">
                        <br>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <i class="fas fa-exclamation-triangle"></i>
                                <strong>¡Oops! Algo salió mal...</strong>

                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li> {{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{route('cord_interinstitucional.store')}}" method="POST">
                            @csrf

                            <label for="nombre">SITUACION ECONOMICA</label>
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="fecha">TRABAJA DESDE CASA</label>
                                                <abbr title="Campo obligatorio" class="required-indicator">*</abbr>
                                                <select id="home_of" name="home_of" class="form-control">
                                                    <option value="Soltero">Si</option>
                                                    <option value="Casado">No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nombre">Inngresos Mensuales</label>
                                            <abbr title="Campo obligatorio" class="required-indicator">*</abbr>
                                            <input type="text" class="form-control" id="ingresos" name="ingresos" required>
                                        </div>
                                    </div>

                                </div>

                                    <div class="row">

                                       <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nombre">Fuentes de Ingreso</label>
                                            <abbr title="Campo obligatorio" class="required-indicator">*</abbr>
                                            <input type="text" class="form-control" id="fuentes" name="fuentes" required>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nombre">Presupuesto</label>
                                            <abbr title="Campo obligatorio" class="required-indicator">*</abbr>
                                            <input type="text" class="form-control" id="presupuesto" name="presupuesto" maxlength="11" required>
                                        </div>
                                    </div>

                                    
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nombre">Estudio Socio-Economico</label>
                                            <abbr title="Campo obligatorio" class="required-indicator">*</abbr>
                                            <input type="text" class="form-control" id="estudio_soc" name="estudio_soc" required>
                                        </div>
                                    </div>


                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="estado_civil">Redes de Apoyo</label>
                                                <abbr title="Campo obligatorio" class="required-indicator">*</abbr>
                                                <select id="red_apoyo" name="red_apoyo" class="form-control">
                                                    <option value="Masculino">N/A</option>
                                                    <option value="familiar">Familiar</option>
                                                    <option value="social">Social</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="sexo">Acciones de Seguridad</label>
                                                <abbr title="Campo obligatorio" class="required-indicator">*</abbr>
                                                <select id="acc_seguridad" name="acc_seguridad" class="form-control">
                                                    <option value="Masculino">N/A</option>
                                                    <option value="Masculino">Plan de Seguridad</option>
                                                    <option value="Femenino">Gestion de Medidas</option>
                                                    <option value="Intersexuales">Talleres Psico-Educativos</option>
                                                    <option value="Intersexuales">Grupos de Apoyo</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="pueblo">Acciones para acceso a recursos</label>
                                                <abbr title="Campo obligatorio" class="required-indicator">*</abbr>
                                                <select id="acc_accrec" name="acc_accrec" class="form-control">
                                                    <option value="N/I">N/A</option>
                                                    <option value="talleres_oc">Talleres Ocupacionales</option> 
                                                    <option value="ref_aoc">Referencia a actividades ocupacionales</option>
                                                </select>
                                            </div>
                                        </div>

                                        
                                        <div class="col-md-12">
                                            <label for="nombre">ACCIONES FAMILIARES</label>
                                            <div class="form-group">
                                                <label for="acc_psiedu">ACCIONES PSICO-EDUCATIVAS FAMILIARES</label>
                                                <abbr title="Campo obligatorio" class="required-indicator">*</abbr>
                                                <textarea id="acc_psiedu" name="acc_psiedu" class="form-control" rows="1" placeholder="Describe las acciones..." required></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="visita_dom">VISITAS DOMICILIARIAS</label>
                                                <abbr title="Campo obligatorio" class="required-indicator">*</abbr>
                                                <textarea id="visita_dom" name="visita_dom" class="form-control" rows="1" placeholder="Describe las acciones..." required></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary form-control "><i class="fas fa-file-export"></i> Crear Informe</button>
                        </form> <br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
@section('scripts')
    <!-- JS PROPIO -->
    <script src="{{asset('assets/js/informes/call_centers/create_validation.js')}}"></script>
@endsection