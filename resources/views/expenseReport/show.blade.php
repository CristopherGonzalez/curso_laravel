@extends('layouts.base')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col">
            <h1>Reports: {{$report->id}} - {{$report->title}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a class="btn btn-secondary" href="/expense_report">Back</a>
            <a class="btn btn-primary" href="/expense_report/{{$report->id}}/confirmSendMail">Send Email</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3>Details</h3>
                <table class="table">
                    @foreach ($report->expenses as $expense)
                        <tr>
                            <td>{{ $expense->description}}</td>
                            <td>{{ $expense->created_at}}</td>
                            <td>{{ $expense->amount}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <a class="btn btn-primary" href="/expense_report/{{$report->id}}/expenses/create">New Expense</a>
            </div>
        </div>
    </div>
@endsection

