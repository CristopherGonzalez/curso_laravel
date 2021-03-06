@extends('layouts.base')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col">
                <h1>Reports</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a class="btn btn-primary" href="/expense_report/create">Create a new report</a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <table class="table">
                    @foreach($expenseReports as $expenseReport)
                        <tr>
                            <td><a href="/expense_report/{{$expenseReport->id}}">{{$expenseReport->title}}</a></td>
                            <td>{{$expenseReport->created_at}}</td>
                            <td><a href="/expense_report/{{$expenseReport->id}}/edit">Edit</a></td>
                            <td><a href="/expense_report/{{$expenseReport->id}}/confirmDelete">Delete</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

