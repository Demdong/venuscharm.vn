@extends('admin.layout')

@section('main')
<div class="row">
    <div class="col-md-12">
        <div class="box-header with-border">
            <h2 class="box-title">Tạo mới một Blog/News</h2>

            <div class="box-tools">
                <div class="btn-group pull-right" style="margin-right: 5px">
                    <a href="{{ route('admin_news.index') }}" class="btn  btn-flat btn-default" title="List"><i
                            class="fa fa-list"></i><span class="hidden-xs"> {{trans('admin.back_list')}}</span></a>
                </div>
            </div>
        </div>
         <!-- form start -->
        <form action="" method="post" accept-charset="UTF-8" class="form-horizontal" id="form-main"
            enctype="multipart/form-data">
             <div class="box-body">
                <div class="fields-group">

                    <div
                        class="form-group">
                        <label for=""
                            class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-8">
                            <textarea id="content" class="editor"
                                name="descriptions">
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

@push('styles')

@endpush

@push('scripts')
@include('admin.component.ckeditor_js')







<script type="text/javascript">
    $(document).ready(function() {
    $('.select2').select2()
});

</script>

<script type="text/javascript">
    $('textarea.editor').ckeditor(
    {
        filebrowserImageBrowseUrl: '{{ route('admin.home').'/'.config('lfm.url_prefix') }}?type=news',
        filebrowserImageUploadUrl: '{{ route('admin.home').'/'.config('lfm.url_prefix') }}/upload?type=news&_token={{csrf_token()}}',
        filebrowserBrowseUrl: '{{ route('admin.home').'/'.config('lfm.url_prefix') }}?type=Files',
        filebrowserUploadUrl: '{{ route('admin.home').'/'.config('lfm.url_prefix') }}/upload?type=file&_token={{csrf_token()}}',
        filebrowserWindowWidth: '900',
        filebrowserWindowHeight: '500'
    }
);
</script>

@endpush