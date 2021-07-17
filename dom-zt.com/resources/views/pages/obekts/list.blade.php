<div class="list-obkekts">
    {{ $obekts->links() }}
    <hr>

    @if($obekts->count() > 0)

        <div class="obektList">
            <div class="row">
                @foreach($obekts as $key => $item)
                    <div class="col-md-4">
                        <div class="obekt-card shadow rounded p-2">
                            <a href="{{ route('obekt.view', $item->slug) }}" class="object__link">
                                @if($item->isPay)
                                    <div class="is-pay m-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-tag text-danger"
                                             id="tag-pay" viewBox="0 0 16 16">
                                            <path
                                                d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z"/>
                                            <path
                                                d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1zm0 5.586 7 7L13.586 9l-7-7H2v4.586z"/>
                                        </svg>
                                        <span class="text-danger">Продано</span>
                                    </div>
                                @endif
                                <div class="obekt-image">
                                    <img src="{{ $item->main_img }}" alt="obekt-image"
                                         class="img-fluid rounded obekt-image__img">
                                </div>

                            </a>
                            <div class="object__text--promo p-1">
                                <ul class="object__list">
                                    <li class="object__item object__item--title title_">
                                        {{ Str::limit($item->name, 20) }}
                                    </li>
                                    <li class="object__item object__item--prace">
                                        $ {{ number_format($item->price, 2, '.', ',') }}</li>

                                    {{--                                                    <li class="object__item">--}}
                                    {{--                                                        <i class="bi bi-pin-map"></i>--}}
                                    {{--                                                        {{ $item->rayon_name }},--}}
                                    {{--                                                        {{ $item->city_name }}--}}
                                    {{--                                                    </li>--}}
                                    {{--                                                    <li class="object__item">--}}
                                    {{--                                                        <i class="bi bi-bounding-box-circles"></i>--}}
                                    {{--                                                        {{ $item->square }} m2--}}
                                    {{--                                                    </li>--}}

                                    {{--                                                    @foreach($appointments as $key => $type)--}}
                                    {{--                                                        @if($item->appointment_id == $type->id)--}}
                                    {{--                                                            <li class="object__item">--}}
                                    {{--                                                                @switch($category->slug)--}}
                                    {{--                                                                    @case('land')--}}
                                    {{--                                                                    <i class="bi bi-front"></i>--}}
                                    {{--                                                                    @break--}}
                                    {{--                                                                    @case('flat')--}}
                                    {{--                                                                    <i class="bi bi-bricks"></i>--}}
                                    {{--                                                                    @break--}}
                                    {{--                                                                    @case('house')--}}
                                    {{--                                                                    <i class="bi bi-bricks"></i>--}}
                                    {{--                                                                    @break--}}
                                    {{--                                                                    @case('commercial-real-estate')--}}
                                    {{--                                                                    <i class="bi bi-front"></i>--}}
                                    {{--                                                                    @break--}}
                                    {{--                                                                    @default--}}
                                    {{--                                                                    <div class="col-md-3">--}}
                                    {{--                                                                        <span>Даної категорії немає!</span>--}}
                                    {{--                                                                    </div>--}}
                                    {{--                                                                @endswitch--}}
                                    {{--                                                                {{ $type->name }}--}}
                                    {{--                                                            </li>--}}
                                    {{--                                                        @endif--}}
                                    {{--                                                    @endforeach--}}

                                    {{--                                                    @if($category->slug == 'flat' or $category->slug == 'house')--}}
                                    {{--                                                        <li class="object__item">--}}
                                    {{--                                                            <i class="bi bi-door-open"></i>--}}
                                    {{--                                                            {{ $item->count_room }}--}}
                                    {{--                                                        </li>--}}
                                    {{--                                                    @endif--}}

                                    {{--                                                    @if($category->slug == 'flat' or $category->slug == 'commercial-real-estate')--}}
                                    {{--                                                        <li class="object__item">--}}
                                    {{--                                                            <i class="bi bi-thermometer-sun"></i>--}}
                                    {{--                                                            {{ $item->opalenyaName }}--}}
                                    {{--                                                        </li>--}}
                                    {{--                                                    @endif--}}

                                    {{--                                                    @if($category->slug == 'flat')--}}
                                    {{--                                                        <li class="object__item">--}}
                                    {{--                                                            <i class="bi bi-stack"></i>--}}
                                    {{--                                                            {{ $item->level }}/{{ $item->count_level }} поверх--}}
                                    {{--                                                        </li>--}}
                                    {{--                                                    @endif--}}

                                </ul>
                            </div>
                            <div class="link-open-obekt p-1">
                                <a href="{{ route('obekt.view', $item->slug, $filterData[9]='Back') }}"
                                   class="btn btn--style">Детальніше</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <div class="empty-data p-3">
            <h2 class="display-4 text-danger"><i class="bi bi-info-circle-fill"></i> Об'єкти
                нерухомості відсутні.</h2>
        </div>
    @endif

    <hr>

        {{ $obekts->links() }}

    </div>
</div>
