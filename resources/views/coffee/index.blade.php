@extends('layout.app')
@section('content')
<!-- Begin page content -->
<main role="main" class="container mt-5">
    <h1 class="mt-5">Coffe page</h1>
    <p class="lead">Hello the World !</p>
    <table class="table">
        <tr>
            <td>
                nom
            </td>
            <td>
                nombre de café consommé
            </td>
            <td>
                action
            </td>
        </tr>
        @foreach ($coffees as $coffee)
        <tr>
            <td>
                {{$coffee->name}}
            </td>
            <td>
                {{$coffee->counter}}
            </td>
            <td>
                    <button class="btn">+</button>
                    <button class="btn">-</button>
            </td>
        </tr>
        @endforeach
    </table>
</main>
@endsection
