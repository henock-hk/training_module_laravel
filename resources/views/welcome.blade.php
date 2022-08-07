
@extends('layout')
@section('content')

<div class="btn-controls">

    <div class="btn-box-row row-fluid">
        <div class="span8">
            <div class="row-fluid">
                <div class="span12">
                    @foreach($module as $mod)

                    <span class="btn-box small span4"> <a href="{{url(strtolower($mod->getName()))}}"> <i class="icon-inbox"></i><b>{{$mod->getName()}}</b></a>

                       <a href="{{url('/disable',$mod->getName())}}"> <b class="label orange">
                            Desactivé </b></a>


                    </span>

                    @endforeach



                </div>
            </div>

        </div>

    </div>
</div>

@endsection

