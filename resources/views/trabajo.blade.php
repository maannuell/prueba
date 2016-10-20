@extends('principal')

@section('encabezado')
    <hr>
    <h2>DeVerdad  Estas seguro...
            <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true" ></span>
    </h2>
@stop

@section('contenido')
    <table class="table table-hover">
        <thead align="center">
        <tr>
            <th>Coberturas</th>
            <th><img src="imagenes/banorte.jpg" width="100" height="50" align="center"></th>
            <th><img src="imagenes/general.jpg" width="100" height="50"></th>
            <th><img src="imagenes/mapfre.jpg" width="100" height="50"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
                <td>Responsabilidad Civil(bienes y personas)</td>
                <td>$4000,000.</td>
                <td>$2000,000.</td>
                <td>$3000,000.</td>


            </tr>
        <tr>
            <td>Resposabilidad Civil catastrofica</td>
            <td>--</td>
            <td>$2000,000.</td>
            <td>--</td>
        </tr>
        <tr>
            <td>Robo total(deducible)</td>
            <td>10%</td>
            <td>10%</td>
            <td>10%</td>
        </tr>
        <tr>
            <td>Daños Materiales(deducible)</td>
            <td>5%</td>
            <td>5%</td>
            <td>5%</td>
        </tr>
        <tr>
            <td>Accidentes al conductor</td>
            <td>--</td>
            <td>Amparada</td>
            <td>$100,000.</td>
        </tr>
        <tr>
            <td>Asistencia Vial y Viajes</td>
            <td>Amparada</td>
            <td>Amparada</td>
            <td>Amparada</td>
        </tr>
        <tr>
            <td>Defensa Juridica</td>
            <td>Amparada</td>
            <td>Amparada</td>
            <td>Amparada</td>
        </tr>
        <tr>
            <td>Extencion de R.C</td>
            <td>Amparada</td>
            <td>Amparada</td>
            <td>Amparada</td>
        </tr>
        <tr>
            <td>Gastos Medicos</td>
            <td>$150,000.</td>
            <td>$250,000.</td>
            <td>$200,000.</td>
        </tr>
        <tr bgcolor="#ffdab9">
            <td>Prima Anual Total</td>
            <td>$10,847.65</td>
            <td>$11,717.30</td>
            <td>$8,996.91</td>
        </tr>
        <tr>
            <td>1° Pago</td>
            <td>$10,847.65</td>
            <td>$11,717.30</td>
            <td>$8,996.91</td>
        </tr>
        </tbody>
    </table>
@stop