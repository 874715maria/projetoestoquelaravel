@extends('template.site')

@section('titulo','Doador')

@section('conteudo')
@if($errors->any())
	<script>
	    alert("{{$errors->first()}}");
	</script>
@endif
<br>
<h3 class="center-align"><b>Cadastrar novo Doador</h3>
<br>
<div class="container z-depth-2 valing-wrapper">
<nav class="nav-form blue darken-4" ></nav>
        <form action="{{route('doador.cadastrar')}}" method="post">
            {{csrf_field()}}
        <br>
        <div class="row">
            <div class="col s1"></div>
            <div class="input-field col s4">
                <i class="material-icons prefix">mode_edit</i>
                <input required type="text"  value="{{old('nome')}}" placeholder="nome" name="nome">
                <label>Nome</label>
            </div>
            <div class="col s2"></div>
            <div class="input-field col s4">
                <i class="material-icons prefix">mail</i>
                <input required type="email" name="e-mail" value="{{old('e-mail')}}" placeholder="exemplo@gmailm.com" class="E-mail">
                <label>Email</label>
            </div>
        </div>
        <div class="row">
            <div class="col s1"></div>
            <div class="input-field col s4">
                <i class="material-icons prefix">assignment_ind</i>
                <input required value="{{old('cpf')}}" type="text" name="cpf"  pattern="\d{3}\.?\d{3}\.?\d{3}-?\d{2}" placeholder="000.000.000-00" title="Digite um cpf válido formatado ou não"></input>
                <label>CPF</label>
            </div>
            <div class="col s2"></div>
            <div class="input-field col s4">
                <i class="material-icons prefix">gavel</i>
                <input required value="{{old('cnpj')}}" type="text" name="cnpj" class="cnpj" pattern="/^\d{2}\.\d{3}\.\d{3}\/\d{4}\-\d{2}$" placeholder="00000000000000"/>
                <label>CNPJ</label>
            </div>
        </div>
        <div class="row">
            <div class="col s1"></div>
            <div class="input-field col s4">
                <i class="material-icons prefix">call</i>
                <input required value="{{old('telefone')}}" type="tel" name="telefone" placeholder="87981167793">
                <label>Telefone</label>
            </div>
            <div class="col s2"></div>
            <div class="input-field col s4">
                <i class="material-icons prefix">location_city</i>
                <input required value="{{old('instituicao')}}" type="text" name="instituição" placeholder="intituicao"  class="instituicao">
                <label>Instituição</label>
            </div>
        </div>
        <div class="row valign center">
            <button class="btn waves-effect waves-light blue darken-4"><b>Submit
                    <i class="material-icons right">send</i>
            </button>
        </div>
        <br>

    </form>
    </div>
    </div>
    <br>
    <br>
    <br>
@endsection
