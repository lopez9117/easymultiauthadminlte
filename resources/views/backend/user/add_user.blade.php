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
        Add User </h5>

</div>
<div class="card-body"> <!-- Start Card Body-->

    <form role="form" action="{{URL::to('/insert-user')}}" method="post">
        @csrf

<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label"> Identificador</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" name="identificador" placeholder="Enter your identificador" required>
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label"> User name</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label"> User email</label>
    <div class="col-sm-10">
        <input type="email" class="form-control" name="email" placeholder="Enter email address" required>
    </div>
</div>


<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label"> Password</label>
    <div class="col-sm-10">
        <input type="password" class="form-control" name="password" placeholder="Enter pasword" required>
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label"> Numero de celular</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" name="celular" placeholder="Enter your Phone number">
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label"> Cedula</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="cedula" placeholder="Enter your identification card" required>
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label"> User birthdate</label>
    <div class="col-sm-10">
        <input type="date" class="form-control" name="birthdate" placeholder="Enter your birthdate" required>
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label"> Código de Ciudad</label>
    <div class="col-sm-10">
        <select class="form-control" id="exampleFormControlSelect1" name="CódigoDeCiudad" requeired>
            <option value="1">Cartagena</option>
            <option value="2">Medellin</option>
            <option value="3">Bogota</option>
        </select>
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label"> User Role Type</label>
    <div class="col-sm-10">
        <select class="form-control" id="exampleFormControlSelect1" name="role" requeired>
            <option value="Admin">Admin</option>
            <option value="Manager">Manager</option>
            <option value="Customer">Customer</option>
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