@extends('layouts.base')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col">
            <h1>Delete Reports {{$report->id}} - {{$report->title}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <form action="/expense_report/{{$report->id}}" method="POST">
                    @method('delete')
                    @csrf
                    <a class="btn btn-secondary" href="/expense_report">Back</a>
                    <button type="submit" class="btn btn-primary">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection

