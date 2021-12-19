@extends('layouts.admin_layout')
@section('content')
<main>
     <div class="container-fluid px-4">
         <h1 class="mt-4">Main</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Main</li>
            </ol>
        <div class="row">
            <div class="form-group col-lg-3 mt-3">
                <h3>Background Image</h3>
                <img style="height: 30vh;" src="{{asset('assets/img/header-bg.jpg')}}" class="img-thumbnail" alt="">
                <input type="file" class="mt-2" id="bc_img" class="bc_img">
            </div>
            <div class="form-group col-lg-4 mt-3">
                <div class="mb-3">
                    <label for="title" class="mx-auto">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="mb-3">
                    <label for="sub_title" class="mx-auto">Sub_Title</label>
                    <input type="text" class="form-control" id="sub_title" name="sub_title">
                </div>
                <div>
                    <label for="resume">Upload resume</label>
                    <input type="file" class="mt-2" id="resume" class="resume">
                </div>
                <div>
                    <input type="submit" value="submit" >
                </div>
            </div>
        </div> 
     </div>
</main>
@endsection
                
