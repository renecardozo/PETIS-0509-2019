@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div id="article-ckeditor"></div>
            </div>
        </div>
        <div class="row">
            <div class="post-separator"></div>
        </div>
        <div class="row">
            <div class="col-md-2 col-md-offset-10">
                <button class="btn btn-success">
                    Enviar
                    <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </div>
@endsection