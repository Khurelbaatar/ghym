

<div class="row">



    <div class="col-md-2 form-group {{ $errors->has('d1') ? 'has-error' : ''}}">
        <label for="d1" class="control-label">{{ 'D1' }}</label>
        <input step=".001" min="0" pattern="\d+(\.\d{2})?" class="form-control" name="d1" type="number" id="d1" value="{{ $point->d1 or ''}}" >
        {!! $errors->first('d1', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-2 form-group {{ $errors->has('d2') ? 'has-error' : ''}}">
        <label for="d2" class="control-label">{{ 'D2' }}</label>
        <input step=".001" min="0" pattern="\d+(\.\d{2})?" class="form-control" name="d2" type="number" id="d2" value="{{ $point->d2 or ''}}" >
        {!! $errors->first('d2', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-2 form-group {{ $errors->has('d3') ? 'has-error' : ''}}">
        <label for="d3" class="control-label">{{ 'D3' }}</label>
        <input step=".001" min="0" pattern="\d+(\.\d{2})?" class="form-control" name="d3" type="number" id="d3" value="{{ $point->d3 or ''}}" >
        {!! $errors->first('d3', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-2 form-group {{ $errors->has('d4') ? 'has-error' : ''}}">
        <label for="d4" class="control-label">{{ 'D4' }}</label>
        <input step=".001" min="0" pattern="\d+(\.\d{2})?" class="form-control" name="d4" type="number" id="d4" value="{{ $point->d4 or ''}}" >
        {!! $errors->first('d4', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="row">
    <div class="col-md-2 form-group {{ $errors->has('e1') ? 'has-error' : ''}}">
    <label for="e1" class="control-label">{{ 'E1' }}</label>
    <input step=".001" min="0" pattern="\d+(\.\d{2})?" class="form-control" name="e1" type="number" id="e1" value="{{ $point->e1 or ''}}" >
    {!! $errors->first('e1', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-2 form-group {{ $errors->has('e2') ? 'has-error' : ''}}">
    <label for="e2" class="control-label">{{ 'E2' }}</label>
    <input step=".001" min="0" pattern="\d+(\.\d{2})?" class="form-control" name="e2" type="number" id="e2" value="{{ $point->e2 or ''}}" >
    {!! $errors->first('e2', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-2 form-group {{ $errors->has('e3') ? 'has-error' : ''}}">
    <label for="e3" class="control-label">{{ 'E3' }}</label>
    <input step=".001" min="0" pattern="\d+(\.\d{2})?" class="form-control" name="e3" type="number" id="e3" value="{{ $point->e3 or ''}}" >
    {!! $errors->first('e3', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-2 form-group {{ $errors->has('e4') ? 'has-error' : ''}}">
    <label for="e4" class="control-label">{{ 'E4' }}</label>
    <input step=".001" min="0" pattern="\d+(\.\d{2})?" class="form-control" name="e4" type="number" id="e4" value="{{ $point->e4 or ''}}" >
    {!! $errors->first('e4', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-2 form-group {{ $errors->has('e5') ? 'has-error' : ''}}">
    <label for="e5" class="control-label">{{ 'E5' }}</label>
    <input step=".001" min="0" pattern="\d+(\.\d{2})?" class="form-control" name="e5" type="number" id="e5" value="{{ $point->e5 or ''}}" >
    {!! $errors->first('e5', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-2 form-group {{ $errors->has('e6') ? 'has-error' : ''}}">
    <label for="e6" class="control-label">{{ 'E6' }}</label>
    <input step=".001" min="0" pattern="\d+(\.\d{2})?" class="form-control" name="e6" type="number" id="e6" value="{{ $point->e6 or ''}}" >
    {!! $errors->first('e6', '<p class="help-block">:message</p>') !!}
</div>
</div>

<div class="row">
<div class="col-md-2 form-group {{ $errors->has('l1') ? 'has-error' : ''}}">
    <label for="l1" class="control-label">{{ 'L1' }}</label>
    <input step=".001" min="0" pattern="\d+(\.\d{2})?" class="form-control" name="l1" type="number" id="l1" value="{{ $point->l1 or ''}}" >
    {!! $errors->first('l1', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-2 form-group {{ $errors->has('l2') ? 'has-error' : ''}}">
    <label for="l2" class="control-label">{{ 'L2' }}</label>
    <input step=".001" min="0" pattern="\d+(\.\d{2})?" class="form-control" name="l2" type="number" id="l2" value="{{ $point->l2 or ''}}" >
    {!! $errors->first('l2', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-2 form-group {{ $errors->has('t1') ? 'has-error' : ''}}">
    <label for="t1" class="control-label">{{ 'T1' }}</label>
    <input step=".001" min="0" pattern="\d+(\.\d{2})?" class="form-control" name="t1" type="number" id="t1" value="{{ $point->t1 or ''}}" >
    {!! $errors->first('t1', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-2 form-group {{ $errors->has('total') ? 'has-error' : ''}}">
    <label for="total" class="control-label">{{ 'C' }}</label>
    <input step=".001" min="0" pattern="\d+(\.\d{2})?" class="form-control" name="total" type="number" id="total" value="{{ $point->total or ''}}" >
    {!! $errors->first('total', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-2 form-group {{ $errors->has('publish') ? 'has-error' : ''}}">
    <label for="publish" class="control-label">{{ 'publish' }}</label>
    <input class="form-control" name="publish" type="number" id="publish" value="{{ $point->publish or ''}}" >
    {!! $errors->first('publish', '<p class="help-block">:message</p>') !!}
</div>
<div class="col-md-2 form-group {{ $errors->has('rank') ? 'has-error' : ''}}">
    <label for="rank" class="control-label">{{ 'rank' }}</label>
    <input class="form-control" name="rank" type="number" id="rank" value="{{ $point->rank or ''}}" >
    {!! $errors->first('rank', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-2 form-group {{ $errors->has('player_id') ? 'has-error' : ''}}">
    <label for="player_id" class="control-label">{{ 'Player_id' }}</label>
    <input class="form-control" name="player_id" type="number" id="player_id" value="{{ $point->player_id or ''}}" required >
    {!! $errors->first('player_id', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-2 form-group {{ $errors->has('item_id') ? 'has-error' : ''}}">
    <label for="item_id" class="control-label">{{ 'item_id' }}</label>
    <input class="form-control" name="item_id" type="number" id="item_id" value="{{ $point->item_id or ''}}" required >
    {!! $errors->first('item_id', '<p class="help-block">:message</p>') !!}
</div>

</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
