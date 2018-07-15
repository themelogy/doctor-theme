<div class="container">
    <div class="row">
        <div class="col-md-12">
            @include('page::partials.image', ['page'=>$page])
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @pageTags($page, 5, 'tags')
        </div>
    </div>
</div>