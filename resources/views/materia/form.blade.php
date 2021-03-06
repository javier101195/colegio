<div class="box box-info padding-1">
    <div class="box-body">
        {{-- @php
        dd($maestros);
            
        @endphp --}}
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $materia->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        {{-- <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::select('nombre',$maestros , $materia->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}



        <div class="form-group">
            {{ Form::label('semestre') }}
            {{ Form::text('semestre', $materia->semestre, ['class' => 'form-control' . ($errors->has('semestre') ? ' is-invalid' : ''), 'placeholder' => 'Semestre']) }}
            {!! $errors->first('semestre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('creditos') }}
            {{ Form::text('creditos', $materia->creditos, ['class' => 'form-control' . ($errors->has('creditos') ? ' is-invalid' : ''), 'placeholder' => 'Creditos']) }}
            {!! $errors->first('creditos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('maestro_id') }}
            <select name="maestro_id">
                @foreach ($maestros as $maestro)
                    <option value="{{ $maestro->id }}">
                        {{ $maestro->nombre }}
                    </option>
                @endforeach
            </select>
           
            {!! $errors->first('maestro_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>