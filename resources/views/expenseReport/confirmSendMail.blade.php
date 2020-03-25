@extends('layouts.base')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col">
                <h1>Send Reports</h1>
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
                <form action="/expense_report/{{$report->id}}/sendMail" method="POST">
                    <div class="form-group">
                        @csrf
                        <label for='mail'>Email:</label>
                        <input type="email" class="form-control" required placeholder="Add mail" id="mail" name="mail" value="{{ old('mail')}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Send Email</button>
                </form>
            </div>
        </div>
    </div>
@endsection

