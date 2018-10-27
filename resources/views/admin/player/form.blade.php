<div class="form-group {{ $errors->has('lname') ? 'has-error' : ''}}">
    <label for="lname" class="control-label">{{ 'Lastname' }}</label>
    <input class="form-control" name="lname" type="text" id="lname" value="{{ $player->lname or ''}}" >
    {!! $errors->first('lname', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fname') ? 'has-error' : ''}}">
    <label for="fname" class="control-label">{{ 'Firstname' }}</label>
    <input class="form-control" name="fname" type="text" id="fname" value="{{ $player->fname or ''}}" >
    {!! $errors->first('fname', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('country_id') ? 'has-error' : ''}}">
    <label for="country_id" class="control-label">{{ 'Select country' }}</label>
    <select name="country_id" class="form-control" id="country_id" >
    @foreach (json_decode('{"1": "Mongolia", 
"2": "Hong kong", 
"3": "Thailand", 
"4": "Chinese taipei", 
"5": "Korea", 
"6": "North korea", 
"7": "Kyrgyzstan", 
"8": "Kazakhstan", 
"9": "Uzbekistan", 
"10": "Vietnam"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($player->country_id) && $player->country_id == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('country_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('number') ? 'has-error' : ''}}">
    <label for="number" class="control-label">{{ 'ID' }}</label>
    <input class="form-control" name="number" type="text" id="number" value="{{ $player->number or ''}}" >
    {!! $errors->first('id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('birth') ? 'has-error' : ''}}">
    <label for="birth" class="control-label">{{ 'Birth' }}</label>
    <input class="form-control" name="birth" type="date" id="birth" value="{{ $player->birth or ''}}" >
    {!! $errors->first('birth', '<p class="help-block">:message</p>') !!}
</div>
<!--
<div class="form-group {{ $errors->has('item_id') ? 'has-error' : ''}}">
    <label for="item_id" class="control-label">{{ 'Item Id' }}</label>
    <input class="form-control" name="item_id" type="number" id="item_id" value="{{ $player->item_id or ''}}" >
    {!! $errors->first('item_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('point_id') ? 'has-error' : ''}}">
    <label for="point_id" class="control-label">{{ 'Point Id' }}</label>
    <input class="form-control" name="point_id" type="number" id="point_id" value="{{ $player->point_id or ''}}" >
    {!! $errors->first('point_id', '<p class="help-block">:message</p>') !!}
</div>
-->
<img src="/images/photos/{{ $player->photo or ''}}" width="100">
<div class="form-group {{ $errors->has('photo') ? 'has-error' : ''}}">
    {!! Form::label('photo', 'Photo', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-7">
        {!! Form::file('photo', null, ['class' => 'form-control']) !!}
        {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
{!! Form::label('category_id', 'Category', ['class' => 'col-md-5 control-label']) !!}
<div class="col-md-7">
    {!! Form::select('category_id', ['Senior individual', 'Junior individual', 'Senior group'], null, ['class' => 'form-control']) !!}
    {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
</div>
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
