@extends('layouts.base_master')

@section('title', 'Nuevo Informe')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><b>Ficha General</b></h1>
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

                        <form action="{{route('registro_sedes.store')}}" method="POST">
                            @csrf

                            <ul class="nav nav-tabs" role="tablist">
                                {{-- Pestaña 1 = Datos de Llamada --}}
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#custom-tabs-one-llamada" role="tab" aria-controls="custom-tabs-one-llamada" aria-selected="true">
                                        Expediente
                                    </a>
                                </li>
                                {{-- Pestaña 2 = Datos Personales --}}
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#custom-tabs-one-personales" role="tab" aria-controls="custom-tabs-one-personales" aria-selected="false">
                                        Datos Personales
                                    </a>
                                </li>
                                {{-- PEstaña 3 = tipo Atencion --}}
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#custom-tabs-one-atencion" role="tab" aria-controls="custom-tabs-one-atencion" aria-selected="false">
                                        Atención
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content" >
                                {{-- Contenido de la Pestaña 1 --}}
                                <div class="tab-pane fade show active" id="custom-tabs-one-llamada" role="tabpanel" aria-labelledby="custom-tabs-one-llamada-tab">
                                    <br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="Año del expediente">Año del expediente</label>
                                                <abbr title="Campo obligatorio" class="required-indicator">*</abbr>
                                                <input type="date" class="form-control" id="fecha" name="fecha" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="Tipologia">Tipologia</label>
                                                <abbr title="Campo obligatorio" class="required-indicator">*</abbr>
                                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="estado_civil">Rama del derecho</label>
                                                    <abbr title="Campo obligatorio" class="required-indicator">*</abbr>
                                                    <select id="rama_derecho" name="rama_derecho" class="form-control">
                                                        <option value="Familia">Familia</option>
                                                        <option value="Civil">Civil</option>
                                                        <option value="Penal">Penal</option>
                                                        <option value="Niñez">Niñez</option>
                                                        <option value="Laboral">Laboral</option>
                                                        <option value="Administrativo">Administrativo</option>
                                                        <option value="Notarial">Notarial</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Tipo de atencion">Tipo de atención</label>
                                                <abbr title="Campo obligatorio" class="required-indicator">*</abbr>
                                                <select id="Tipo de atencion" name="Tipo de atencion" class="form-control">
                                                    <option value="Asesoria">Asesoria</option>
                                                    <option value="Elaboracion de manual">Elaboracion de manual</option>
                                                    <option value="Firma de memorial">Firma de memorial</option>
                                                    <option value="Procuracion">Procuracion</option>
                                                    <option value="Entrega de notificacion o resulucion">Entrega de notificacion o resulucion</option>
                                                    <option value="Audiencia">Audiencia</option>
                                                    <option value="Acompañamiento">Acompañamiento</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Tipo de caso"> Tipo de caso </label>
                                                <select id="Tipo de caso" name="Tipo de caso" class="form-control">
                                                        <option value="Caso nuevo">Caso nuevo</option>
                                                        <option value="Caso seguimiento">Caso seguimiento</option>
                                                </select>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                                {{-- Contenido de la Pestaña 2 = DATOS PERSONALES--}}
                                <div class="tab-pane fade" id="custom-tabs-one-personales" role="tabpanel" aria-labelledby="custom-tabs-one-personales-tab">
                                    {{-- Aquí van los campos de la Pestaña 2 --}}
                                    <br>
                                    <div class="row">
                                        {{-- DATOS DE NOMBRES--}}
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="dpi">DPI</label>
                                                <input type="text" class="form-control" id="dpi" name="dpi" maxlength="13">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="primer_apellido">Primer Apellido</label>
                                                <abbr title="Campo obligatorio" class="required-indicator">*</abbr>
                                                <input type="text" class="form-control" id="primer_apellido" name="primer_apellido" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="segundo_apellido">Segundo Apellido</label>
                                                <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="apellido_casada">Apellido Casada</label>
                                                <input type="text" class="form-control" id="apellido_casada" name="apellido_casada">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="primer_nombre">Primer Nombre</label>
                                                <abbr title="Campo obligatorio" class="required-indicator">*</abbr>
                                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="segundo_nombre">Segundo Nombre</label>
                                                <input type="text" class="form-control" id="segundo_nombre" name="segundo_nombre">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="tercer_nombre">Tercer Nombre</label>
                                                <input type="text" class="form-control" id="tercer_nombre" name="tercer_nombre">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="sexo">Sexo</label>
                                                <abbr title="Campo obligatorio" class="required-indicator">*</abbr>
                                                <select id="sexo" name="sexo" class="form-control">
                                                    <option value="Masculino">Masculino</option>
                                                    <option value="Femenino">Femenino</option>
                                                    <option value="Intersexuales">Intersexuales</option>
                                                </select>
                                            </div>
                                        </div>
                                        <hr>
                                        {{-- OTROS DATOS--}}
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="Fecha de nacimiento">Fecha de nacimiento</label>
                                                    <abbr title="Campo obligatorio" class="required-indicator">*</abbr>
                                                    <input type="date" class="form-control" id="fecha" name="fecha" required>
                                                </div>
                                            </div>
                                            
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="departamento_id">Departamento de nacimiento</label>
                                                        <abbr title="Campo obligatorio" class="required-indicator">*</abbr>
                
                                                        <select id="departamento_id" name="departamento_id" class="form-control"
                                                                required>
                                                            @foreach ($departamentos as $departamento)
                                                                <option
                                                                    value="{{ $departamento->id }}">{{ $departamento->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div> 
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="municipio">Municipio de nacimiento</label>
                                                <select id="municipio" name="municipio" class="form-control" required>
                                                    <option value="Ingresar todos los municipios">ingresar todo el putero de Municipios</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="pueblo">Pueblo</label>
                                                <select id="pueblo" name="pueblo" class="form-control" required>
                                                    <option value="N/I">N/I</option>
                                                    <option value="Maya">Maya</option> 
                                                    <option value="Garifuna">Garifuna</option>
                                                    <option value="Xinka">Xinka</option>
                                                    <option value="Mestiza">Mestiza</option>
                                                    <option value="Afrodescendiente">Afrodescendiente</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="comunidad_linguistica">Comunidad Lingüística</label>
                                                <select id="comunidad_linguistica" name="comunidad_linguistica" class="form-control" required>
                                                    <option value="N/I">N/I</option>
                                                    <option value="N/A">N/A</option>
                                                    <option value="Castellano">Castellano</option>
                                                    <option value="Xinca">Xinca</option>
                                                    <option value="Garifuna">Garifuna</option>
                                                    <option value="Kaqchikel">Kaqchikel</option>
                                                    <option value="K'iche'">K'iche'</option>
                                                    <option value="Q'eqchi">Q'eqchi</option>
                                                    <option value="Mam">Mam</option>
                                                    <option value="Poqomam">Poqomam</option>
                                                    <option value="Poqomchi">Poqomchi</option>
                                                    <option value="Itza'">Itza'</option>
                                                    <option value="Ixil">Ixil</option>
                                                    <option value="Tz'utujil">Tz'utujil</option>
                                                    <option value="Ch'ortí">Ch'ortí</option>
                                                    <option value="Chuj">Chuj</option>
                                                    <option value="Achí">Achí</option>
                                                    <option value="Akateka">Akateka</option>
                                                    <option value="Awakateca">Awakateca</option>
                                                    <option value="Chalchiteka">Chalchiteka</option>
                                                    <option value="Jakalteka/Popti'">Jakalteka/popti</option>
                                                    <option value="Q'anjob'al">Q'anjob'al</option>
                                                    <option value="Sakapulteka">Sakapulteka</option>
                                                    <option value="Sipakapense">Sipakapense</option>
                                                    <option value="Tektiteka">Tektiteka</option>
                                                    <option value="Uspanteka">Uspanteka</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="ocupacion">Ocupación</label>
                                                <input type="text" class="form-control" id="ocupacion" name="ocupacion" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="Trabaja">Trabaja</label>
                                                <select id="trabaja" name="trabaja" class="form-control" required>
                                                    <option value="N/A">N/A</option>
                                                    <option value="Fisica">Si</option>
                                                    <option value="Intelectual">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="telefono">Telefono</label>
                                                <input type="text" class="form-control" id="telefono" name="telefono" maxlength="8">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="escolaridad">Escolaridad</label>
                                                <abbr title="Campo obligatorio" class="required-indicator">*</abbr>
                                                <select id="escolaridad" name="escolaridad" class="form-control">
                                                    <option value="N/A">N/A</option>
                                                    <option value="Primaria">Primaria</option>
                                                    <option value="Secundaria">Secundaria</option>
                                                    <option value="Diversificado">Diversificado</option>
                                                    <option value="Universitario">Universitario</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- CONTENIDO PESTAÑA 3 = TIPO DE ATENCION--}}
                                <div class="tab-pane fade" id="custom-tabs-one-atencion" role="tabpanel" aria-labelledby="custom-tabs-one-atencion-tab">
                                    {{-- Aquí van los campos de la Pestaña 3 --}}
                                    <br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="departamento_id">Departamento de residencia</label>
                                                <abbr title="Campo obligatorio" class="required-indicator">*</abbr>
                                                <select id="departamento_id" name="departamento_id" class="form-control"
                                                        required>
                                                    @foreach ($departamentos as $departamento)
                                                        <option
                                                            value="{{ $departamento->id }}">{{ $departamento->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div> 
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="municipio">Municipio de recidencia</label>
                                                <select id="municipio de recidencia" name="municipio de recidencia" class="form-control" required>
                                                    <option value="Ingresar todos los municipios">ingresar todo el putero de Municipios</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="Lugar/Poblado/Residencia">Lugar/Poblado/Residencia</label>
                                                <input type="text" class="form-control" id="Lugar/Poblado/Residencia" name="Lugar/Poblado/Residencia" required>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="direccion">Dirección</label>
                                                <input type="text" class="form-control" id="direccion" name="direccion">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="Institucion">Institución</label>
                                                <select id="Institucion" name="institucion" class="form-control" required>
                                                    <option value="DEMI">DEMI</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="Programa">Programa</label>
                                                <select id="Programa" name="Programa" class="form-control" required>
                                                    <option value="600">600</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="Beneficio">Beneficio</label>
                                                <select id="ref_ofireg" name="ref_ofireg" class="form-control" required>
                                                    <option value="Atencion juridica">Atención Juridica</option>
                                                    <option value="Atencion Social">Atención Social</option>
                                                    <option value="Atencion Psicologica">Atención Psicologica</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="departamento_id">Departamento de otorgamiento de Beneficio</label>
                                                <abbr title="Campo obligatorio" class="required-indicator">*</abbr>
                                                <select id="departamento_id" name="departamento_id" class="form-control"
                                                        required>
                                                    @foreach ($departamentos as $departamento)
                                                        <option
                                                            value="{{ $departamento->id }}">{{ $departamento->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div> 
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="municipio de otorgamiento de Beneficio">Municipio de otorgamiento de Beneficio</label>
                                                <select id="municipio de otorgamiento de Beneficio" name="municipio de otorgamiento de Beneficio" class="form-control" required>
                                                    <option value="Ingresar todos los municipios">ingresar todo el putero de Municipios</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="Fecha de otorgamiento de Beneficio">Fecha de otorgamiento de Beneficio</label>
                                                <input type="date" class="form-control" id="fecha" name="fecha" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="valor">Valor</label>
                                                <select id="valor" name="valor" class="form-control" required>
                                                    <option value="preguntar que putas se pone aca">Preguntar que putas se pone acá</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="discapacidad">Discapacidad</label>
                                                <select id="discapacidad" name="discapacidad" class="form-control" required>
                                                    <option value="N/A">Si</option>
                                                    <option value="Fisica">No</option>
                                                    <option value="Intelectual">Sin información</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="cantidad">Cantidad</label>
                                                <select id="cantidad" name="cantidad" class="form-control" required>
                                                    <option value="preguntar que putas se pone aca">Preguntar que putas se pone acá</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="Idioma">Idioma</label>
                                                <select id="Idioma" name="Idioma" class="form-control" required>
                                                    <option value="N/I">N/I</option>
                                                    <option value="N/A">N/A</option>
                                                    <option value="Castellano">Castellano</option>
                                                    <option value="Xinca">Xinca</option>
                                                    <option value="Garifuna">Garifuna</option>
                                                    <option value="Kaqchikel">Kaqchikel</option>
                                                    <option value="K'iche'">K'iche'</option>
                                                    <option value="Q'eqchi">Q'eqchi</option>
                                                    <option value="Mam">Mam</option>
                                                    <option value="Poqomam">Poqomam</option>
                                                    <option value="Poqomchi">Poqomchi</option>
                                                    <option value="Itza'">Itza'</option>
                                                    <option value="Ixil">Ixil</option>
                                                    <option value="Tz'utujil">Tz'utujil</option>
                                                    <option value="Ch'ortí">Ch'ortí</option>
                                                    <option value="Chuj">Chuj</option>
                                                    <option value="Achí">Achí</option>
                                                    <option value="Akateka">Akateka</option>
                                                    <option value="Awakateca">Awakateca</option>
                                                    <option value="Chalchiteka">Chalchiteka</option>
                                                    <option value="Jakalteka/Popti'">Jakalteka/popti</option>
                                                    <option value="Q'anjob'al">Q'anjob'al</option>
                                                    <option value="Sakapulteka">Sakapulteka</option>
                                                    <option value="Sipakapense">Sipakapense</option>
                                                    <option value="Tektiteka">Tektiteka</option>
                                                    <option value="Uspanteka">Uspanteka</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="descripcion">Descripción Breve del Caso</label>
                                                <abbr title="Campo obligatorio" class="required-indicator">*</abbr>
                                                <textarea id="descripcion" name="descripcion" class="form-control" rows="2" placeholder="Describe el Caso..." required></textarea>
                                                <div id="contador">0 / 1500</div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary form-control"><i class="fas fa-file-export"></i> Crear Informe</button>
                                </div>

                            </div>

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