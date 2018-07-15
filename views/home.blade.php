@extends('layouts.master')

@section('content')
    <div id="main-wrapper">
        <div class="page-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @themeSlide('anasayfa')
                    </div>
                </div>
            </div>
            @pageFindByOptions('settings.show_page_home', 'home-featured')
            <div class="container-fluid">
                @blogLatestPosts(10, 'home-latest')
            </div>
        </div>
    </div>
@stop
