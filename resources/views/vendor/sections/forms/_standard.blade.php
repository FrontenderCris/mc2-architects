{!! sectionOpenForm($form, (isset($model) ? $model : null), (isset($page) ? $page : null)) !!}

    {{------------------------------- EDIT THE FORM BELOW ------------------------------}}
    <div class="tab-content tab-main" style="display: block;">
        <div class="form-group">
            {{ Form::label('Title', null, ['class' => 'col-sm-2 control-label required']) }}
            <div class="col-sm-10">
                {{ Form::text('title', null, ['class' => 'form-control', 'maxlength' => 100]) }}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('Content', null, ['class' => 'col-sm-2 control-label']) }}
            <div class="col-sm-10">
                {{ Form::textarea('data[content]', null, ['class' => 'form-control has-redactor']) }}
            </div>
        </div>
        @include('cropper::_input', [
            'uniqueKey' => '1',
            'width' => 920,
            'height' => 300,
            'image' => (!empty($model) ? $model->image : null),
            'label' => 'Image',
            'inputName' => 'image[file]',
            'required' => true,
        ])
    </div>
    {{------------------------------ EDIT THE FORM ABOVE ------------------------------}}

    @include('sections::partials._submit')
{{ sectionCloseForm() }}

@include('cropper::_modal', ['uniqueKey' => '1'])

