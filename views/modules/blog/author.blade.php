@extends('blog::layouts.master')

@section('blog.title')
    @component('partials.components.title', ['breadcrumbs'=>'blog.author'])
        <h1 class="title">{{ trans('themes::news.author posts', ['author'=>$author->fullname]) }}</h1>
    @endcomponent
@endsection

@section('blog.content')
    @forelse($posts as $post)
        @include('blog::partials._post')
        @unset($post)
    @empty
        @component('partials.components.alert', ['alert'=>'warning'])
            {{ trans('themes::blog.messages.post not found') }}
        @endcomponent
    @endforelse
    {!! $posts->links('partials.components.pagination') !!}
@endsection