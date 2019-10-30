<div class="box box-warning">
    <div class="box-header with-border"> SEO </div>
    <form class="form-horizontal" action="{{ route('seo.set') }}" method="POST">
        @csrf

        <div class="box-body">

            <input type="hidden" name="model_type" value="{{ get_class($model) }}">
            <input type="hidden" name="model_id" value="{{ $model->id}}">

            <div class="form-group @if($errors->has('heading')) has-error @endif">
                <label for="inputEmail3" class="col-sm-2 control-label">h1</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="heading" value="{{ old('heading') ?? ($seo->heading ?? '') }}" placeholder="Приоритетный заголовок">
                </div>

                @if($errors->has('heading'))
                    <span class="help-block">{{ $errors->first('heading') }}</span>
                @endif
            </div>

            <div class="form-group @if($errors->has('title')) has-error @endif">
                <label for="inputEmail3" class="col-sm-2 control-label">title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" value="{{ old('title') ?? ($seo->title ?? '') }}" placeholder="Отображается в шапке">
                </div>

                @if($errors->has('title'))
                    <span class="help-block">{{ $errors->first('title') }}</span>
                @endif
            </div>

            <div class="form-group @if($errors->has('meta_title')) has-error @endif">
                <label for="inputEmail3" class="col-sm-2 control-label">meta title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="meta_title" value="{{ old('meta_title') ?? ($seo->meta_title ?? '') }}" placeholder="Заголовок при поисковой выдаче">
                </div>

                @if($errors->has('meta_title'))
                    <span class="help-block">{{ $errors->first('meta_title') }}</span>
                @endif
            </div>

            <div class="form-group @if($errors->has('meta_desc')) has-error @endif">
                <label for="inputEmail3" class="col-sm-2 control-label">meta description</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" name="meta_desc" placeholder="Описание при поисковой выдаче">{{ old('text') ?? ($seo->meta_desc ?? '') }}</textarea>
                </div>

                @if($errors->has('meta_desc'))
                    <span class="help-block">{{ $errors->first('meta_desc') }}</span>
                @endif
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-success">Редактировать</button>
            </div>

        </div>

    </form>
</div>
