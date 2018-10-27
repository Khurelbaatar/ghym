<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ $post->title or ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    <label for="content" class="control-label">{{ 'Content' }}</label>
    <textarea class="form-control" rows="5" name="content" type="textarea" id="content" >{{ $post->content or ''}}</textarea>
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('country_id') ? 'has-error' : ''}}">
    <label for="country_id" class="control-label">{{ 'Country Id' }}</label>
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
"0": "Vietnam"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($post->country_id) && $post->country_id == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('country_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
