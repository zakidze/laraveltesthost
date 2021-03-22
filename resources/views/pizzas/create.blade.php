@extends('layouts.layout')

@section('content')
<div class="wrapper">
    <h1>create new pizza</h1>
    <br>
    <br>
    <form action="/pizzas" methode="POST">
        <label for="name">your name</label>
        <input type="text" name="name" id="name">
        <label for="type">tape</label>
        <select name="type" id="type">
            <option value="margarita">margarita</option>
            <option value="hawain">hawain</option>
            <option value="vvolcano">vvolcano</option>
        </select>
        <label for="type">base</label>
        <select name="type" id="type">
            <option value="think">this</option>
            <option value="think">garlci</option>
            <option value="think">crispy</option>
        </select>
        <input type="submit" value="order pizza">

    </form>
</div>
@endsection