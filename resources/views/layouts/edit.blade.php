@extends('Layouts.base')
@section('content')
<div class="container">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="card o-hidden border-0 shadow-lg my-5" style="width: 35rem;">
                <img src="{{ asset('img/Helpdesk.jpg') }}" class="card-img-top" alt="Mi imagen">
                <div class="card-body p-0">
                    <div class="p-3">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Editar datos</h1>
                        </div>
                        <form class="user" action="{{url('/home/datos/'.$lectura->id)}}" method="post" enctype="multipart/form-data" id="formulario">
                            @csrf
                            {{method_field('PATCH')}}
                            <div class="form-group">
                                <input type="numb" class="form-control form-select-lg formato-texto" value="{{$lectura->id}}" id="id" name="id" placeholder="ID Autogenerado">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="date" class="form-control form-select-lg formato-texto" value="{{$lectura->dt}}" id="dt" name="dt" placeholder="Fecha">
                                </div>
                                <div class="col-sm-6">
                                <input type="float" class="form-control form-select-lg formato-texto" value="{{$lectura->LandAverageTemperature}}" id="LandAverageTemperature" name="LandAverageTemperature" placeholder="Temperatura promedio terrestre">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="float" class="form-control form-select-lg formato-texto" value="{{$lectura->LandAverageTemperatureUncertainty}}" id="LandAverageTemperatureUncertainty" name="LandAverageTemperatureUncertainty"
                                    placeholder="Incertidumbre de temperatura promedio terrestre">
                                <div class="my-2">
                                <input type="float" class="form-control form-select-lg formato-texto" value="{{$lectura->LandMaxTemperature}}" id="LandMaxTemperature" name="LandMaxTemperature"
                                    placeholder="Temperatura maxima terrestre">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="float" class="form-control form-select-lg formato-texto" value="{{$lectura->LandMaxTemperatureUncertainty}}" id="LandMaxTemperatureUncertainty" name="LandMaxTemperatureUncertainty"
                                    placeholder="Incertidumbre de temperatura maxima terrestre">
                                </div>
                                <div class="col-sm-6">
                                <input type="float" class="form-control form-select-lg formato-texto" value="{{$lectura->LandMinTemperature}}" id="LandMinTemperature" name="LandMinTemperature"
                                    placeholder="Tempreatura minima terrestre">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                <input type="float" class="form-control form-select-lg formato-texto" value="{{$lectura->LandMinTemperatureUncertainty}}" id="LandMinTemperatureUncertainty" name="LandMinTemperatureUncertainty"
                                    placeholder="Incertidumbre de temperatura minima terrestre">
                                </div>
                                <div class="col-sm-4">
                                <input type="float" class="form-control form-select-lg formato-texto" value="{{$lectura->LandAndOceanAverageTemperature}}" id="LandAndOceanAverageTemperature" name="LandAndOceanAverageTemperature"
                                    placeholder="Promedio de temperatura terrestre y oceanica">
                                </div>
                                <div class="col-sm-4">
                                <input type="float" class="form-control form-select-lg formato-texto" value="{{$lectura->LandAndOceanAverageTemperatureUncertainty}}" id="LandAndOceanAverageTemperatureUncertainty" name="LandAndOceanAverageTemperatureUncertainty"
                                    placeholder="Incertidumbre de promedio de temperatura terrestre y oceanica">
                                </div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Editar
                            </button>
                            <br>
                            <a href="{{url('/home/datos')}}">Regresar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection