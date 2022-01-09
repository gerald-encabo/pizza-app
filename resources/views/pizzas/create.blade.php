@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>
    <form action="{{ route('pizzas.index') }}" method="POST">
        @csrf
        <label for="name">Your name:</label>
        <input type="text" class="name" name="name" required>
        <label for="type">Choose pizza type:</label>
        <select name="type" id="type"  required>
            <option value="" selected disabled hidden>Choose here</option>
            <option value="margarita">Margarita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Veg Supreme</option>
            <option value="volcano">Volcano</option>
        </select>
        <label for="base">Choose base type:</label>
        <select name="base" id="base" required>
            <option value="" selected disabled hidden>Choose here</option>
            <option value="cheesy crust">Cheesy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin & crispy">Thin & Crispy</option>
            <option value="thick">Thick</option>
        </select>
        <fieldset>
            <label>Extra toppings:</label><br/>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms
            <input type="checkbox" name="toppings[]" value="peppers">Peppers
            <input type="checkbox" name="toppings[]" value="garlic">Garlic
            <input type="checkbox" name="toppings[]" value="olives">Olives
        </fieldset>
        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection