
<div class="form-group">
    {!! Form::label('Lecture Video:') !!}
    {!! Form::file('lvideo', null, ['class'=>'btn primary']) !!}
</div>

<div class="form-group">
    {!! Form::label('vid_name', 'Name:') !!}
    {!! Form::text('vid_name') !!}
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug') !!}
</div>
<div class="form-group">
    {!! Form::label('instructor', 'Instructor:') !!}
    {!! Form::text('instructor') !!}
</div>
<div class="form-group">
    {!! Form::label('class', 'Class:') !!}
    {!! Form::text('class') !!}
</div>
<div class="form-group">
    {!! Form::label('topic', 'Topic:') !!}
    {!! Form::text('topic') !!}
</div>
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title') !!}
</div>

<div class="form-group">
    {!! Form::label('semester', 'Semester') !!}
    {!! Form::select('semester', array('Fall' => 'Fall', 'Spring' => 'Spring', 'Summer' => 'Summer'), null, array('class' => 'drop-down')) !!}
    {!! Form::text('year', null, array('type' => 'number', 'size' => '4', 'min' => '1990', 'max'=>(date("Y") +  5), 'value' => date("Y"))) !!}
</div>

<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>