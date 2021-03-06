<div class="form-group{{ $errors->has('icon') ? ' has-error' : '' }}">
    {!! Form::label('icon', trans('menu::menu-items.form.icon')) !!}
    {!! Form::select("icon", array_combine(config('asgard.theme.config.iconmind'), config('asgard.theme.config.iconmind')), old('icon'), ['class'=>'selecticon']) !!}
    {!! $errors->first('icon', '<span class="help-block">:message</span>') !!}
</div>
<div class="form-group{{ $errors->has('class') ? ' has-error' : '' }}">
    {!! Form::label('class', trans('menu::menu-items.form.class')) !!}
    {!! Form::text('class', old('class'), ['class' => 'form-control']) !!}
    {!! $errors->first('class', '<span class="help-block">:message</span>') !!}
</div>
<div class="form-group link-type-depended link-page">
    <label for="page">{{ trans('menu::menu-items.form.page') }}</label>
    {!! Form::select('page_id', $pages, null, ['class'=>'form-control']) !!}
    {!! $errors->first('class', '<span class="help-block">:message</span>') !!}
</div>
<div class="form-group">
    <label for="parent_id">{{ trans('menu::menu-items.form.parent menu item') }}</label>
    <select class="form-control" name="parent_id" id="parent_id">
        <option value=""></option>
        <?php foreach ($menuSelect as $parentMenuItemId => $parentMenuItemName): ?>
        <option value="{{ $parentMenuItemId }}">{{ $parentMenuItemName }}</option>
        <?php endforeach; ?>
    </select>
</div>

<div class="form-group">
    <label for="target">{{ trans('menu::menu-items.form.target') }}</label>
    <select class="form-control" name="target" id="target">
        <option value="_self">{{ trans('menu::menu-items.form.same tab') }}</option>
        <option value="_blank">{{ trans('menu::menu-items.form.new tab') }}</option>
    </select>
</div>


@push('js-stack')
    {!! Asset::add('themes/doctor/vendor/fonticonpicker/jquery.fonticonpicker.min.js') !!}
    {!! Asset::add('themes/doctor/vendor/fonticonpicker/css/jquery.fonticonpicker.min.css') !!}
    {!! Asset::add('themes/doctor/vendor/fonticonpicker/themes/bootstrap-theme/jquery.fonticonpicker.bootstrap.css') !!}
    {!! Asset::add('themes/doctor/fonts/iconmind/iconmind.css') !!}
    {!! Asset::css() !!}
    {!! Asset::js() !!}
    <script>
        jQuery(document).ready(function($) {
            $('.selecticon').fontIconPicker({
                theme: 'fip-bootstrap'
            });
        });
    </script>
@endpush