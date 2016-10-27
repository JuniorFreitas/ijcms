<div class="tabs-container">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#tab-contents"> @lang('admin/_globals.forms.nav.contents')</a>
        </li>
        <li><a data-toggle="tab" href="#tab-images"> @lang('admin/_globals.forms.nav.images')</a></li>
        <li><a data-toggle="tab" href="#tab-seo"> @lang('admin/_globals.forms.nav.seo')</a></li>
    </ul>
    <div class="tab-content">
        <div id="tab-contents" class="tab-pane active">
            <div class="panel-body">
                {{ csrf_field() }}
                <fieldset class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">:</label>
                        <div class="col-sm-10"><input type="text" name="title" class="form-control" value=""></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <textarea name="content" class="form-control summernote"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <select name="status" class="form-control">
                                <option value="1">Ativo</option>
                                <option value="0">Nao</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i></button>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Publicar em:</label>
                        <div class="col-sm-10"><input type="text" name="publish_at" class="form-control datetimepicker"
                                                      value=""></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Categoria:</label>
                        <div class="col-sm-10">
                            <select name="category_id" class="form-control">
                                {{-- @foreach($categorys as $key => $category)
                                     <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->title }}</option>
                                 @endforeach--}}
                            </select>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>

        <div id="tab-images" class="tab-pane">
            <div class="panel-body">
                {{-- @include('admin._inc.fileupload.buttons')--}}
            </div>
        </div>

        <div id="tab-seo" class="tab-pane">
            <div class="panel-body">
                <fieldset class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <input type="text" maxlength="70" name="seo_title" class="form-control" value="">
                            <div class="text-muted"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <textarea maxlength="170" name="seo_description" class="form-control"></textarea>
                            <div class="text-muted"></div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>

    </div>
</div>
