@extends('layouts.base_master')

@section('title', 'Editar Expediente')

@section('content')
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><b>MODIFICACIÓN DE EXPEDIENTE ID: {{$expediente->id}}</b></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('call_centers.index')}}">Consultas Expedientes</a></li>
                        <li class="breadcrumb-item active">Editar Expediente</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-default">
                <div class="card-header">
                    <h2 class="card-title">
                        <i class="fas fa-edit"></i>
                        <b>Edición de Expediente</b>
                    </h2>
                </div>
                <div class="card-body">
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
                    <form action="{{ route('call_centers.update', $expediente->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Pestañas -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#custom-tabs-one-llamada" role="tab" aria-controls="custom-tabs-one-llamada" aria-selected="true">
                                    Datos de Llamada
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#custom-tabs-one-personales" role="tab" aria-controls="custom-tabs-one-personales" aria-selected="false">
                                    Datos Personales
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#custom-tabs-one-atencion" role="tab" aria-controls="custom-tabs-one-atencion" aria-selected="false">
                                    Tipo de Atención
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <!-- Contenido Pestaña 1: Datos de la Llamada -->
                            <div class="tab-pane fade show active" id="custom-tabs-one-llamada" role="tabpanel">
                                <br>
                                <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fecha">Fecha:</label>
                                    <input type="date" class="form-control" id="fecha" name="fecha" value="{{ $expediente->fecha }}" required>
                                </div>
                                </div>
{{--                                    {{         Log::info('Hora del expediente: ' . $expediente->hora) }}--}}
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="hora">Hora:</label>
                                    <input type="time" class="form-control" id="hora" name="hora" value="{{ $expediente->hora }}" required>
                                </div>
                                </div>
                                    <div class="col-md-12">
                                    <div class="form-group">
                                    <label for="oficina_externo">Oficina/Externo:</label>
                                    <select id="oficina_externo" name="oficina_externo" class="form-control" required>
                                        <option value="Centro de Llamadas" {{ $expediente->oficina_externo == 'Centro de Llamadas' ? 'selected' : '' }}>Centro de Llamadas</option>
                                        <option value="Movil" {{ $expediente->oficina_externo == 'Movil' ? 'selected' : '' }}>Movil</option>
                                        <!-- Agrega más opciones si son necesarias -->
                                    </select>
                                </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Contenido Pestaña 2: Datos Personales -->
                            <div class="tab-pane fade" id="custom-tabs-one-personales" role="tabpanel">
                                <br>
                                <div class="row">
                                    {{-- DATOS DE NOMBRES--}}
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="primer_nombre">Primer Nombre</label>
                                            <abbr title="Campo obligatorio" class="required-indicator">*</abbr>
                                            <input type="text" class="form-control" id="primer_nombre" name="primer_nombre" value="{{$expediente->nombre}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="segundo_nombre">Segundo Nombre</label>
                                            <input type="text" class="form-control" id="segundo_nombre" name="segundo_nombre" value="{{$expediente->seg_nombre}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="tercer_nombre">Tercer Nombre</label>
                                            <input type="text" class="form-control" id="tercer_nombre" name="tercer_nombre" value="{{$expediente->ter_nombre}}">
                                        </div>
                                    </div>
                                    {{-- DATOS DE APELLIDOS--}}
                                    <hr>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="primer_apellido">Primer Apellido</label>
                                            <abbr title="Campo obligatorio" class="required-indicator">*</abbr>
                                            <input type="text" class="form-control" id="primer_apellido" name="primer_apellido" value="{{$expediente->apellido}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="segundo_apellido">Segundo Apellido</label>
                                            <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido" value="{{$expediente->seg_apellido}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apellido_casada">Apellido Casada</label>
                                            <input type="text" class="form-control" id="apellido_casada" name="apellido_casada" value="{{$expediente->apellido_cas}}">
                                        </div>
                                    </div>
                                    {{-- OTROS DATOS--}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="dpi">DPI</label>
                                            <input type="text" class="form-control" id="dpi" name="dpi" maxlength="13" value="{{$expediente->dpi}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="telefono">Telefono</label>
                                            <input type="text" class="form-control" id="telefono" name="telefono" maxlength="8" value="{{$expediente->telefono}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="discapacidad">Discapacidad</label>
                                            <select id="discapacidad" name="discapacidad" class="form-control" required>
                                                <option value="N/A" {{ $expediente->discapacidad == 'N/A' ? 'selected' : ''}}>N/A</option>
                                                <option value="Fisica" {{ $expediente->discapacidad == 'Fisica' ? 'selected' : '' }}>Fisica</option>
                                                <option value="Intelectual" {{$expediente->discapacidad == 'Intelectual' ? 'selected' : '' }}>Intelectual</option>
                                                <option value="Visual" {{$expediente->discapacidad == 'Visual' ? 'selected' : '' }}>Visual</option>
                                                <option value="Sordo" {{$expediente->discapacidad =='Sordo' ? 'selected' : ''}}>Sordo</option>
                                                <option value="Psicosocial" {{$expediente->discapacidad == 'Psicosocial' ? 'selected' : ''}}>Psicosocial</option>
                                                <option value="Multiple" {{$expediente->discapacidad == 'Multiple' ? 'selected' : ''}}>Multiple</option>
                                                <option value="Otros" {{ $expediente->discapacidad == 'Otros' ? 'selected' : '' }}>Otros</option>
                                                <option value="Ninguno" {{ $expediente->discapacidad == 'Ninguno' ? 'selected' : '' }}>Ninguno</option>
                                                
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="pueblo">Pueblo</label>
                                            <select id="pueblo" name="pueblo" class="form-control" required>
                                                <option value="N/I" {{ $expediente->pueblo == 'N/I' ? 'selected' : '' }}>N/I</option>
                                                <option value="Maya" {{ $expediente->pueblo == 'Maya' ? 'selected' : '' }}>Maya</option>
                                                <option value="Garifuna" {{$expediente->pueblo == 'Garifuna' ? 'selected' : ''}}>Garifuna</option>
                                                <option value="Xinca" {{ $expediente->pueblo == 'Xinca' ? 'selected' : '' }}>Xinca</option>
                                                <option value="Mestiza" {{$expediente->pueblo == 'Mestiza' ? 'selected' : ''}}>Mestiza</option>
                                                <option value="Afrodescendiente" {{ $expediente->pueblo == 'Afrodescendiente' ? 'selected' : '' }}>Afrodescendiente</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="comunidad_linguistica">Comunidad Lingüística</label>
                                            <select id="comunidad_linguistica" name="comunidad_linguistica" class="form-control" required>
                                                <option value="N/I" {{$expediente->comunidad_linguistica == "N/I" ? 'selected' : '' }}>N/I</option>
                                                <option value="K'iche'" {{ $expediente->comunidad_linguistica == "K'iche'" ? 'selected' : '' }}>K'iche'</option>
                                                <option value="Kaqchikel" {{ $expediente->comunidad_linguistica == "Kaqchikel'" ? 'selected' : '' }}>Kaqchikel'</option>
                                                <option value="Mam" {{ $expediente->comunidad_linguistica == "Mam" ? 'selected' : '' }}>Mam'</option>
                                                <option value="Q'eqchi" {{ $expediente->comunidad_linguistica == "Q'eqchi" ? 'selected' : '' }}>Q'eqchi</option>
                                                <option value="Mestizo" {{ $expediente->comunidad_linguistica == 'Mestizo' ? 'selected' : '' }}>Mestizo</option>
                                                <option value="Poqomam" {{ $expediente->comunidad_linguistica == "Poqomam" ? 'selected' : '' }}>Poqomam</option>
                                                <option value="Sacapulteco" {{ $expediente->comunidad_linguistica == 'Sacapulteco' ? 'selected' : '' }}>Sacapulteco</option>
                                                <option value="Chalchiteco" {{ $expediente->comunidad_linguistica == 'Chalchiteco' ? 'selected' : '' }}>Chalchiteco</option>
                                                <option value="Chortí" {{ $expediente->comunidad_linguistica == 'Chortí' ? 'selected' : '' }}>Chortí</option>
                                                <option value="Achí" {{ $expediente->comunidad_linguistica == 'Achí' ? 'selected' : '' }}>Achí</option>
                                                <option value="Tzutujil" {{ $expediente->comunidad_linguistica == 'Tzutuljil' ? 'selected' : '' }}>Tzutujil</option>
                                                <option value="Poqomchi" {{ $expediente->comunidad_linguistica == 'Poqomchi' ? 'selected' : '' }}>Poqomchi</option>
                                                <option value="Castellano" {{ $expediente->comunidad_linguistica == 'Castellano' ? 'selected' : '' }}>Castellano</option> 
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-group">
                                            <label for="direccion">Dirección</label>
                                            <input type="text" class="form-control" id="direccion" name="direccion" value="{{$expediente->direccion}}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Contenido Pestaña 3: Tipo de Atención -->
                            <div class="tab-pane fade" id="custom-tabs-one-atencion" role="tabpanel">
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="info_demi">Información DEMI</label>
                                    <select id="info_demi" name="info_demi" class="form-control" required>
                                        <option value="Servicios Gratuitos de DEMI" {{ $expediente->info_demi == 'Servicios Gratuitos de DEMI' ? 'selected' : '' }}>Servicios Gratuitos de DEMI</option>
                                        <option value="Horarios de atención" {{$expediente->info_demi == 'Horarios de atención' ? 'selected' : '' }}>Horarios de atención</option>
                                        <option value="Dirección" {{$expediente->info_demi == 'Dirección' ? 'selected' : ''}}>Direccion</option>
                                        <option value="Info.Areas Admón" {{$expediente->info_demi == 'Info.Areas Admón' ? 'selected' : '' }}>Info.Areas Admón</option>
                                        <option value="Oficinas Regionales" {{ $expediente->info_demi == 'Oficinas Regionales' ? 'selected' : '' }}>Oficinas Regionales</option>
                                        <!-- Agrega más opciones si son necesarias -->
                                    </select>
                                </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="asesoria">Asesoría/Orientación</label>
                                            <select id="asesoria" name="asesoria" class="form-control" required>
                                                <option value="1" {{ $expediente->asesor_orienta == 'Si' ? 'selected' : '' }}>Si</option>
                                                <option value="0" {{ $expediente->comunidad_linguistica == 'No' ? 'selected' : '' }}>No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="seguimiento">Seguimiento/Llamadas Salientes</label>
                                            <select id="seguimiento" name="seguimiento" class="form-control" required>
                                                <option value="1" {{ $expediente->seguimiento == 'Si' ? 'selected' : '' }}>Si</option>
                                                <option value="0" {{ $expediente->seguimiento == 'No' ? 'selected' : '' }}>No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 border-right">
                                        <div class="form-group clearfix">
                                            <label for="derivadas">Derivadas a Otras Entidades</label>
                                            <div class="row">
                                                {{-- Asumiendo que quieres dividir las 14 opciones en 3 columnas --}}
                                                @foreach ($derivadas->chunk(5) as $chunk)
                                                    <div class="col-md-4">
                                                        @foreach ($chunk as $derivada)
                                                            <div class="icheck-primary">
                                                                <input type="checkbox" id="derivada{{ $derivada->id }}" name="derivadas[]" value="{{ $derivada->id }}"
                                                                    {{ in_array($derivada->id, $expediente->derivadas->pluck('id')->toArray()) ? 'checked' : '' }}>
                                                                <label for="derivada{{ $derivada->id }}">{{ $derivada->nombre }}</label>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group clearfix">
                                            <label for="coordinacion">Coordinación</label>
                                            <div class="row">
                                                {{-- Asumiendo que quieres dividir las 14 opciones en 3 columnas --}}
                                                @foreach ($coordinations->chunk(5) as $chunk)
                                                    <div class="col-md-4">
                                                        @foreach ($chunk as $coordination)
                                                            <div class="icheck-primary">
                                                                <input type="checkbox" id="coordination{{ $coordination->id }}" name="coordinations[]" value="{{ $coordination->id }}"
                                                                    {{ in_array($coordination->id, $expediente->coordinations->pluck('id')->toArray()) ? 'checked' : '' }}>
                                                                <label for="coordination{{ $coordination->id }}">{{ $coordination->nombre }}</label>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="modalidades">Modalidades</label>
                                            <select id="modalidades" name="modalidades" class="form-control" required>
                                                <option value="N/A" {{$expediente->modalidades== 'N/A' ? 'selected' : ''}}>N/A</option> 
                                                <option value="Pensión Alimenticia" {{ $expediente->modalidades == 'Pensión Alimenticia' ? 'selected' : '' }}>Pensión Alimenticia</option>
                                                <option value="Niñez y adolecencia" {{$expediente->modalidades == 'Niñez y adolecencia' ? 'selected' : ''}}>Niñez y adolecencia</option>
                                                <option value="Divorcio voluntario" {{$expediente->modalidades == 'Divorcio voluntario' ? 'selected' : ''}}>Divorcio voluntario</option>
                                                <option value="Paternidad y afilación" {{$expediente->modalidades =='Paternidad y afilación' ? 'selected' : ''}}>Paternidad y afilación</option>
                                                <option value="Menaje de casa" {{$expediente->modalidades == 'Menaje de casa' ? 'selected' : '' }}>Menaje de casa</option>
                                                <option value="Bienes e inmuebles" {{$expediente->modalidades == "Bienes e inmuebles" ? 'selected' : ''}}>Bienes e inmuebles</option>
                                                <option value="Demanda laboral" {{$expediente->modalidades == 'Demanda laboral' ? 'selected' : '' }}>Demanda laboral</option>
                                                <option value="Problemas Familiares" {{ $expediente->modalidades == 'Problemas Familiares' ? 'selected' : '' }}>Problemas Familiares</option>
                                                <option value="Otros" {{ $expediente->modalidades == 'Otros' ? 'selected' : '' }}>Otros</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="transferida_ofi">Transferida Oficina Central</label>
                                            <select id="transferida_ofi" name="transferida_ofi" class="form-control" required>
                                                <option value="N/A" {{$expediente->transfer_ofcentr == 'N/A' ? 'selected' : ''}}>N/A</option>
                                                <option value="Unidad Jurídica" {{ $expediente->transfer_ofcentr == 'Unidad Jurídica' ? 'selected' : '' }}>Unidad Jurídica</option>
                                                <option value="Unidad Psicologica" {{ $expediente->transfer_ofcentr == 'Unidad Psicologica' ? 'selected' : '' }}>Unidad Psicologica</option>
                                                <option value="Unidad Social" {{ $expediente->transfer_ofcentr == 'Unidad Social' ? 'selected' : '' }}>Unidad Social</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="ref_ofireg">Referidas a Oficina Regional</label>
                                            <select id="ref_ofireg" name="ref_ofireg" class="form-control" required>
                                                <option value="N/A" {{$expediente->ref_ofireg == 'N/A' ? 'selected' : ''}}>N/A</option>
                                                <option value="Alta Verapaz" {{$expediente->ref_ofireg == 'Alta Verapaz' ? 'selected' : '' }}>Alta Verapaz</option>
                                                <option value="Baja Verapaz" {{$expediente->ref_ofireg == 'Baja Verapaz' ? 'selected' : '' }}>Baja Verapaz</option>
                                                <option value="Chimaltenango" {{$expediente->ref_ofireg == 'Chimaltenango' ? 'selected' : '' }}>Chimaltenango</option>
                                                <option value="Huehuetenango" {{ $expediente->ref_ofreg == 'Huehuetenango' ? 'selected' : '' }}>Huehuetenango</option>
                                                <option value="Izabal" {{$expediente->ref_ofireg == 'Izabal' ? 'selected' : '' }}>Izabal</option>
                                                <option value="Peten" {{$expediente->ref_ofireg == 'Peten' ? 'selected' : '' }}>Peten</option>
                                                <option value="Quetzaltenango" {{$expediente->ref_ofireg == 'Quetzaltenango' ? 'selected' : '' }}>Quetzaltenango</option>
                                                <option value="Quiche" {{$expediente->ref_ofireg == 'Quiche' ? 'selected' : '' }}>Quiche</option>
                                                <option value="Santa Rosa" {{$expediente->ref_ofireg == 'Santa Rosa' ? 'selected' : '' }}>Santa Rosa</option>
                                                <option value="Totonicapán" {{ $expediente->ref_ofreg == 'Totonicapán' ? 'selected' : '' }}>Totonicapán</option>
                                                <option value="San Marcos" {{ $expediente->ref_ofreg == 'San Marcos' ? 'selected' : '' }}>San Marcos</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-md">
                                        <div class="form-group">
                                            <label for="descripcion">Descripción Breve del Caso</label>
                                            <textarea id="descripcion" name="descripcion" class="form-control" rows="2" placeholder="Describe el Caso..." required>{{$expediente->descripcion}}</textarea>
                                            <div id="contador">0 / 1500</div>
                                        </div>
                                    </div>

                            </div>
                                <!-- Botón de Guardar Cambios -->
                                <button type="submit" class="btn btn-primary form-control"><i class="fas fa-save"></i> Guardar Cambios</button>
                            </div>

                        </div>


                    </form>
                </div>
            </section>
            @endsection
            @section('scripts')
                <!-- JS PROPIO -->
                <script src="{{asset('assets/js/informes/call_centers/create_validation.js')}}"></script>
            @endsection