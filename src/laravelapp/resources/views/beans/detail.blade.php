@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">コーヒー豆</div>
            <table class="table">
                <thead>
                    <tr>
                        <th>生産国</th>
                        <th>地域</th>
                        <th>高度</th>
                        <th>農園</th>
                        <th>生産者</th>
                        <th>品種</th>
                        <th>焙煎度</th>
                        <th>加工方法</th>
                        <th>カフェイン</th>
                        <th>風味</th>
                        <th>店名</th>
                        <th>支店名</th>
                        <th>購入日</th>
                        <th>重さ</th>
                        <th>価格</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $bean->country }}</td>
                        <td>{{ $bean->area }}</td>
                        <td>{{ $bean->elevation }}</td>
                        <td>{{ $bean->farm }}</td>
                        <td>{{ $bean->farmer }}</td>
                        <td>{{ $bean->variety }}</td>
                        <td>{{ $bean->roasting }}</td>
                        <td>{{ $bean->method_of_processing }}</td>
                        <td>{{ $bean->caffein }}</td>
                        <td>{{ $bean->flavor }}</td>
                        <td>{{ $bean->shop }}</td>
                        <td>{{ $bean->branch }}</td>
                        <td>{{ $bean->purchase_date }}</td>
                        <td>{{ $bean->weight }}</td>
                        <td>{{ $bean->price }}</td>
                        <td><a href="{{ route('beans.edit',['bean' => $bean]) }}">編集</a></td>
                    </tr>
                </tbody>
            </table>
            <a href="{{ route('beans.index') }}">一覧に戻る</a>
        </div>
    </div>
</div>
@endsection