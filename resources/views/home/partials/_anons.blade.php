<div class="card-group row mt-3">
    @foreach ($anonses as $anons)
    <div class="col-md-6">
        <div class="card mb-3 p-4" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{$anons->brand->img}}" class="card-img " alt="{{$anons->brand->slug}}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$anons->title}}</h5>
                        <p class="card-text">{{$anons->short_desc}}</p>
                        <p class="card-text"><small class="text-muted">Обновленно {{$anons->updated_at}}</small></p>
                    </div>
                </div>
                @if (isset($user))
                    @if($user->phone == null || $user->last_name == null
                            || $user->city == null || $user->street == null
                            || $user->bild_number == null || $user->flat == null
                            || $user->zip == null || $user->post_office == null || $user->post_office_number == null)
                        <a class="btn btn-primary mb-2" href='{{asset("home/anons/$anons->id")}}' data-toggle="modal" data-target="#exampleModal">Учавствовать</a>
                    @else
                        <a class="btn btn-primary mb-2" href='{{asset("home/anons/$anons->id")}}' >Учавствовать</a>

                    @endif
                @else
                   <p>Для участия вам необходимо войти в систему</p>
                @endif

            </div>
        </div>
    </div>

    @endforeach
</div>
