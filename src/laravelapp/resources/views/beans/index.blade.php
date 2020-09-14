@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">コーヒー豆</div>
            <div class="panel-body">
                <div class="text-right">
                    <a href="{{ route('beans.create') }}" class="btn btn-default btn-block">
                        コーヒー豆を追加する
                    </a>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>生産国</th>
                        <th>地域</th>
                        <th>焙煎度</th>
                        <th>店名</th>
                        <th>購入日</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($beans as $bean)
                    <tr>
                        <td>{{ $bean->country }}</td>
                        <td>{{ $bean->area }}</td>
                        <td>{{ $bean->roasting }}</td>
                        <td>{{ $bean->shop }}</td>
                        <td>{{ $bean->purchase_date }}</td>
                        <td><a href="{{ route('beans.detail',['bean' => $bean]) }}">詳細</a></td>
                        <td><a href="{{ route('beans.edit',['bean' => $bean]) }}">編集</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection