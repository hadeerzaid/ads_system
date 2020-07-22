<div class="form-group">
    <label for="">title</label>
    {{ Form::text('title', null , ['class' => 'form-control','required' => true, 'placeholder' => '-- title --']) }}
</div>

<div class="form-group">
    <label for="">description</label>
    {{ Form::textarea('description', null , ['class' => 'form-control']) }}
</div>
<div class="form-group">
    <label for="">duration</label>
    {{ Form::number('duration', null , ['class' => 'form-control','required' => true, 'placeholder' => '-- duration --']) }}
</div>
<div class="form-group">
    <label for="">frequency</label>
    {{ Form::number('frequency', null , ['class' => 'form-control','required' => true, 'placeholder' => '-- frequency --']) }}
</div>
<div class="form-group">
    <label for="">date_from</label>
    {{ Form::date('date_from', \Carbon\Carbon::now() , ['class' => 'form-control','required' => true, 'placeholder' => '-- date_from --']) }}
</div>
<div class="form-group">
    <label for="">date_to</label>
    {{ Form::date('date_to', null , ['class' => 'form-control','required' => true, 'placeholder' => '-- date_to --']) }}
</div>

<div class="form-group">
    <label for="">Images</label>
    <input type="file" class="form-control" name="image" required>   
</div>


<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ 'Create' }}</button>
</div>

