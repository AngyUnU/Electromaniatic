@extends('layout.main_template')
@section('content')


    <table>
        <thead>
            <h3>¿Estás seguro de que quieres eliminar el dispositivo {{$products->name_np}}?</h3>
        </thead>
        <tbody>
            <tr>
                <td><form action="{{route('products.index')}}">
                <button type="submit">No</button>    
                </form></td>
                <td>
                    <form action="{{route('products.destroy',$products->id)}}" method="POST">
                        @method("DELETE")
                        @csrf
                        <button type="submit">Si</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>

@endsection

<style>
    button{
        width: 50px;
        padding: 8px 16px;
        margin-block-start: 32px;
        border: 1px solid #000;
        border-radius: 5px;
        display: block;
        color: #fff;
        background-color: #000;
    }
    h3{
        width: 100%;
        height: 10px;
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
        display: inline-block;
    }
</style>
