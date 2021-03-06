@extends('layouts.app')

@section('title', 'Instellingen')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Instellingen</li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="h4 my-1">Instellingen</div>
                </div>
    
                <div class="card-body">
                    <form method="POST" id="settings-form">
                        @csrf
        
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Thema</label>
        
                            <div class="col-md-6">
                                <div class="btn-group btn-group-toggle" id="name" data-toggle="buttons">
                                    <label class="btn btn-secondary active">
                                        <input onclick="loadtheme('darkly')" value="darkly" type="radio" name="theme" autocomplete="off" @if((Auth::user()->theme ?? 'default') == 'darkly') checked @endif> Darkly
                                    </label>
                                    <label class="btn btn-secondary">
                                        <input onclick="loadtheme('default')" value="default" type="radio" name="theme" autocomplete="off" @if((Auth::user()->theme ?? 'default') == 'default') checked @endif> Light
                                    </label>
                                    <label class="btn btn-secondary">
                                        <input onclick="loadtheme('superhero')" value="superhero" type="radio" name="theme" autocomplete="off" @if((Auth::user()->theme ?? 'default') == 'superhero') checked @endif> Superhero
                                    </label>
                                    <label class="btn btn-secondary">
                                        <input onclick="loadtheme('sketchy')" value="sketchy" type="radio" name="theme" autocomplete="off" @if((Auth::user()->theme ?? 'default') == 'sketchy') checked @endif> Sketchy
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="mx-3 my-1 btn btn-primary" onclick="return confirmation('settings-form')" formaction="{{ route('usersettings') }}">
                                    Opslaan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection