@extends('layouts.base')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Lista de datos</h1>
    <!--<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p>-->
    @if(Session::has('mensaje' ))
    {{Session::get('mensaje')}}
    @endif
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Listado de datos</h6>
        </div>
        <div class="card-body">
            <button type="button" class="btn btn-outline-primary">Añadir datos</button>
            <br>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered" id="tickets" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Fecha</th>
                            <th>PromTer Tº</th>
                            <th>IncPromTer Tº</th>
                            <th>MaxTer Tº</th>
                            <th>IncMaxTer Tº</th>
                            <th>MinTer Tº</th>
                            <th>IncMinTer Tº</th>
                            <th>PromTerOce Tº</th>
                            <th>IncPromTerOce Tº</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($lecturas as $lectura)
                        <tr>
                            <td>{{$lectura->id}}</td>
                            <td>{{$lectura->dt}}</td>
                            <td>{{$lectura->LandAverageTemperature}}</td>
                            <td>{{$lectura->LandAverageTemperatureUncertainty}}</td>
                            <td>{{$lectura->LandMaxTemperature}}</td>
                            <td>{{$lectura->LandMaxTemperatureUncertainty}}</td>
                            <td>{{$lectura->LandMinTemperature}}</td>
                            <td>{{$lectura->LandMinTemperatureUncertainty}}</td>
                            <td>{{$lectura->LandAndOceanAverageTemperature}}</td>
                            <td>{{$lectura->LandAndOceanAverageTemperatureUncertainty}}</td>
                            <td>

                                <a href="{{url('/home/datos/'.$lectura->id.'/edit')}}" class="btn btn-warning">
                                    Editar
                                </a>
                                |
                                <form action="{{ url('/home/datos/'.$lectura->id) }}" class="d-inline" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <input class="btn btn-danger" type="submit"
                                        onclick="return confirm('¿Quieres Borrar?')" value="Borrar">
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-end">
                    {!! $lecturas->links() !!}
                </div>
            </div>
        </div>
    </div>

</div>
@endsection