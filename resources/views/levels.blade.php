@foreach($levels as $level)
    <h1> {{$level->name }} <small> Evenement name :</small> {{$level->Evenement->name}} </h1>
    @endforeach