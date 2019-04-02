@extends('layouts.app')

@section('body')
    <h1> Novo usuário </h1>


    <form action="/usuario" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" required>
        </div>

        <div class="form-group">
            <label for="idade">Idade</label>
            <input type="number" class="form-control" name="idade" id="idade" required>
        </div>

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" required>
        </div>

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" required>
        </div>
        
        <div class="form-group">
            <label for="texto">Texto</label>
            <textarea class="form-control" id="texto" name="texto" rows="7" required></textarea>
             
        </div>
        
        <button type="submit" class="btn btn-primary">Enviar</button>
        <input type="button" name="Cancel" class="btn btn-danger" value="Cancel" onclick="window.location = '/usuario' " />
    </form>



@endsection