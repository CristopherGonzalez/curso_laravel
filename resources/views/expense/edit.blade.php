@extends('layouts.base')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col">
            <h1>Edit Reports {{$report->id}} - {{$report->title}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a class="btn btn-secondary" href="/expense_report">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col">
            <form action="/expense_report/{{$report->id}}" method="POST">
                    @method('put')
                    <div class="form-group">
                        @csrf
                        <label for=title>Title:</label>
                    <input type="text" class="form-control" required placeholder="Add new title" id="title" name="title" value="{{ old('title') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Edit Expense Report</button>
                </form>
            </div>
        </div>
    </div>
@endsection

