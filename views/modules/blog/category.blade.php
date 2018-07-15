@extends('blog::layouts.master')

@section('blog.title')
    @component('partials.components.title', ['breadcrumbs'=>'blog.category'])
        <h1 class="title">{{ $category->name }}</h1>
    @endcomponent
@endsection

@section('blog.content')
    @forelse($posts as $post)
        @include('blog::partials._post')
        @unset($post)
    @empty
        @component('partials.components.alert', ['alert'=>'warning'])
            {{ trans('themes::blog.messages.category post not found', ['category' => $category->name]) }}
        @endcomponent
    @endforelse
    {!! $posts->links('partials.components.pagination') !!}
@endsection