@extends('backend.layouts.app')
@section('content')
<div class="content-wrapper">


<section class="content">
    <div class="row">
        <div class="col-lg-1">

        </div>
        <div class="col-lg-10">
            
<div class="card"> <!-- Card Start-->
<div Class="card-header">
    <h5 class="card-title">
        Edit User </h5>

</div>
<div class="card-body"> <!-- Start Card Body-->

    <form role="form" action="{{URL::to('/update-user/' .$edit->id)}}" method="post">
        @csrf

<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label"> Identificador</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" name="identificador" placeholder="Enter your identificador" value="{{$edit->identificador}}">
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label"> User name</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="name" placeholder="Enter your name" value="{{$edit->name}}">
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label"> User email</label>
    <div class="col-sm-10">
        <input type="email" class="form-control" name="email" placeholder="Enter email address" value="{{$edit->email}}">
    </div>
</div>



<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label"> Password</label>
    <div class="col-sm-10">
        <input type="password" class="form-control" name="password" placeholder="Enter pasword" value="{{$edit->password}}">
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label"> Numero de celular</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="celular" placeholder="Enter your Phone number" value="{{$edit->numero_celular}}">
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label"> Cedula</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="cedula" placeholder="Enter your identification card" value="{{$edit->cedula}}">
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label"> User birthdate</label>
    <div class="col-sm-10">
        <input type="date" class="form-control" name="birthdate" placeholder="Enter your birthdate" value="{{$edit->fecha_de_nacimiento}}">
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label"> Código de Ciudad</label>
    <div class="col-sm-10">
        <select class="form-control" id="exampleFormControlSelect1" name="CódigoDeCiudad" value="{{$edit->Codigo_de_ciudad}}">
            <option value="1" {{'Cartagena' == $edit->Codigo_de_ciudad ? 'selected' : ''}}>Cartagena</option>
            <option value="2" {{'Medellin' == $edit->Codigo_de_ciudad ? 'selected' : ''}}>Medellin</option>
            <option value="3" {{'Bogota' == $edit->Codigo_de_ciudad ? 'selected' : ''}}>Bogota</option>
        </select>
    </div>
</div>



<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label"> User Role Type</label>
    <div class="col-sm-10">
        <select class="form-control" id="exampleFormControlSelect1" name="role" requeired>
            <option value="Admin" {{'Admin' == $edit->role ? 'selected' : ''}}>Admin</option>
            <option value="Manager" {{'Manager' == $edit->role ? 'selected' : ''}}>Manager</option>
            <option value="Customer" {{'Customer' == $edit->role ? 'selected' : ''}}>Customer</option>
        </select>
    </div>
</div>


</div> <!-- End Card Body-->

<div class="card-footer">
    <button type="submit" class="btn btn-info"> Submit </button>
</div>
    
    </form>
</div>
</div> <!-- Card End-->

        </div>
        <div class="col-lg-1">
            
        </div>
    </div>
</section>

</div>

@endsection