@extends('layouts.app')

@section('content')

<div class="col-md-6 col-lg-6 col-md-offset-3  col-lg-offset-3">
    <div class="panel panel-primary ">
    <div class="panel-heading">Projects <a  class="pull-right btn btn-primary btn-sm" href="/projects/create">
    Create new</a> </div>
    <div class="panel-body">
        

    <ul class="list-group">
    @foreach($projects as $project)
        <li class="list-group-item"> 
        <i class="fa fa-play" aria-hidden="true"></i>
        <a href="/projects/{{ $project->id }}" >{{ $project->name }}</a></li>
    @endforeach
    </ul>


    </div>
    </div>
</div>

@endsection