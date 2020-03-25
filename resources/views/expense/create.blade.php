@extends('layouts.base')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col">
                <h1>New Expense</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <a class="btn btn-secondary" href="/expense_report/{{$report->id}}">Back</a>
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
                <form action="/expense_report/{{$report->id}}/expenses" method="POST">
                    <div class="form-group">
                        @csrf
                        <label for="description">Description:</label>
                        <input type="text" class="form-control" required placeholder="Add expense description" id="description" name="description" value="{{ old('description')}}">
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount:</label>
                        <input type="number" class="form-control" required placeholder="Add expense amount" id="amount" name="amount" value="{{ old('amount')}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Expense</button>
                </form>
            </div>
        </div>
    </div>
@endsection

