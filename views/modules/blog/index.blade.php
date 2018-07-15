@extends('blog::layouts.master')

@section('blog.title')
    @component('partials.components.title', ['breadcrumbs'=>'news'])
        <h1 class="title">{{ trans('themes::blog.title') }}</h1>
    @endcomponent
@endsection

@section('blog.content')
    @forelse($posts as $post)
        @include('blog::partials._post')
        @unset($post)
    @empty
        @component('partials.components.alert', ['alert'=>'warning'])
            {{ trans('themes::news.messages.post not found') }}
        @endcomponent
    @endforelse
    {!! $posts->links('partials.components.pagination') !!}
@endsection