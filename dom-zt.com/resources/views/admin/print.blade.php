@extends('layouts.print')

@section('content')

    @foreach($obekts as $key => $item)

        <div class="row p-1">
            <div class="col-md-3">
                <img src="{{$item->main_img}}" alt="obekt-image" class="img-fluid rounded">
            </div>
            <div class="col-md-9 align-self-center">
                <div class="d-flex justify-content-between">

                    <div class="border col-md-5 first">
                        ID:{{ $item->id }} <h3>{{ $item->name }}</h3>
                        <div class="d-flex justify-content-between p-1">
                            <h4 class="text-danger">$ {{ $item->price }}</h4>
                            <span> {{ $item->square }} m2</span>
                        </div>

                        @foreach($appointment as $key => $appoint)
                            @if($appoint->id ==  $item->appointment_id)
                                {{ $appoint->name }}
                            @endif
                        @endforeach

                    </div>

                    <div class=" col-md-5 border mid">

                       <div class="location-info d-flex justify-content-between">
                           <span class="mr-2">Розміщення: </span>
                           <div class="location">
                               @if($item->rayon_name != 'м.Житомир')
                                   <span>р-н </span>
                               @endif
                               {{ $item->rayon_name }}
                               @if($item->city_name != '-')
                                   {{ $item->city_name }}
                               @endif
                           </div>
                       </div>
                        <div class="description">
                            <span>Опис</span>
                            <p>
                                {{ $item->description }}
                            </p>
                        </div>
                    </div>

                    <div class="border col-md-2 end">
                        <span class="text-secondary"> {{ $item->created_at->format('Y-m-d') }}</span>
                        <br>
                        <div class="status">
                            @if($item->isPublic)
                                @if($item->isPay)
                                    <span class="bg-danger text-light rounded">
                                            Продано
                                        </span>
                                @else
                                    <span class="bg-success text-light rounded">
                                            В продажу
                                        </span>
                                @endif
                            @else
                                <span class="text-secondary">Не опубліковано</span>
                            @endif
                        </div>
                        @foreach($owners as $key => $owner)
                            @if( $item->owner_id == $owner->id)
                                <div class="owner-info">
                                    <span>Власник:</span> <br>
                                    {{ $owner->name }}
                                    <br>
                                    {{ $owner->phone }}
                                </div>
                            @endif
                        @endforeach

                    </div>

                </div>
            </div>
        </div>

    @endforeach

@endsection
