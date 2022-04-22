<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Código') }}
            {{ Form::text('cod_product', $producto->cod_product, ['class' => 'form-control' . ($errors->has('cod_product') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese código del producto']) }}
            {!! $errors->first('cod_product', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre del Producto') }}
            {{ Form::text('nameProd', $producto->nameProd, ['class' => 'form-control' . ($errors->has('nameProd') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese nombre del producto']) }}
            {!! $errors->first('nameProd', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripción') }}
            {{ Form::text('descProd', $producto->descProd, ['class' => 'form-control' . ($errors->has('descProd') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese descripción del producto']) }}
            {!! $errors->first('descProd', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo') }}
            {{ Form::text('typeProd', $producto->typeProd, ['class' => 'form-control' . ($errors->has('typeProd') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese tipo del producto']) }}
            {!! $errors->first('typeProd', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Costo') }}
            {{ Form::text('costUnit', $producto->costUnit, ['class' => 'form-control' . ($errors->has('costUnit') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese costo unitario del producto']) }}
            {!! $errors->first('costUnit', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Existencias') }}
            {{ Form::text('cantExist', $producto->cantExist, ['class' => 'form-control' . ($errors->has('cantExist') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese existencias del producto']) }}
            {!! $errors->first('cantExist', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>