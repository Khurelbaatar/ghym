<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ $category->name or ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('angilal_id') ? 'has-error' : ''}}">
    <label for="angilal_id" class="control-label">{{ 'Angilal Id' }}</label>
    <input class="form-control" name="angilal_id" type="number" id="angilal_id" value="{{ $category->angilal_id or ''}}" >
    {!! $errors->first('angilal_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
