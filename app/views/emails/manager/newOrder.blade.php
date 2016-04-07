@extends('layouts.email')
@section('title')
    {{ trans('messages.order.new_order') }}
@stop
@section('content')

    <p>Данные о Клиенте и его заявке:</p>
    <h3>Клиент</h3>
    <dl>
        <dt>Имя</dt>
        <dd>{{ array_get($client, 'first_name') }}</dd>
        <dt>контактный телефон</dt>
        <dd>{{ array_get($client, 'phone_number') }}</dd>
        <dt>контактный email</dt>
        <dd>{{ array_get($user, 'email') }}</dd>
    </dl>
    <h3>Заявка</h3>
    <dl>
        <dt>Аэропорт вылета</dt>
        <dd>{{ array_get($order['airport_from'], 'name') }} ({{ array_get($order['airport_from'], 'iata_code') }})</dd>
        <dt>Аэропорт прилёта</dt>
        <dd>{{ array_get($order['airport_to'], 'name') }} ({{ array_get($order['airport_from'], 'iata_code') }})</dd>
        <dt>Дата и время вылета</dt>
        <dd>{{ array_get($order, 'departure_at') }}</dd>
    </dl>
@stop