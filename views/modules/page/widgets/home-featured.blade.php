@isset($pages)
    @if($pages->count()>0)
        <div class="feature24">
            <div class="container">
                <div class="row wrap-feature-24">
                    <div class="col-12">
                        <h3 class="m-b-10">{{ trans('themes::theme.home.treatments') }}</h3>
                        @foreach($pages->chunk(3) as $chunk)
                            <div class="row card-group">
                                @foreach($chunk as $page)
                                    <div class="col-md-4">
                                        <div class="card">
                                            <a href="{{ $page->url }}"><img class="card-img-top img-responsive" src="{{ $page->present()->firstImage(370,200,'fit',80) }}" alt="{{ $page->title }}"></a>
                                            <div class="card-body">
                                                <h4 class="card-title"><a class="c-t-txt" href="{{ $page->url }}">{{ $page->title }}</a></h4>
                                                @isset($page->settings->sub_title->{locale()})
                                                <p class="card-text fs-sm-09">{!! $page->settings->sub_title->{locale()} !!}</p>
                                                @endisset
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
@endisset
