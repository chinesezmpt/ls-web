
@extends('admin.layouts.master');
@section('title','新闻类型管理')
@section('banner-title','新闻类型管理')
@section('banner-tips','新闻类型编辑')

@section('header')
    @parent
@endsection

@section('left-menu')
     @parent
@endsection


@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h2><i class="fa fa-indent red"></i><strong>类型编辑</strong></h2>
    </div>
    <div class="col-lg-12">
       @if (count($errors) > 0)
        <div class="alert alert-danger">
          <strong>提示!</strong> 您的操作失败<br><br>
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
    </div>
    <form action="{{ url('newstype/doedit')}}" method="post" enctype="multipart/form-data" class="form-horizontal ">
        <div class="panel-body">
            <div class="form-group">
                <label class="col-md-3 control-label" for="text-input">类型名称</label>
                <div class="col-md-9">
                    <input type="text" id="typename" name="typename" class="form-control" value="{{$data->typename}}">
                    <!-- <span class="help-block">This is a help text</span> -->
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-md-3 control-label">排序</label>
                <div class="col-md-9">
                    <input type="number" id="ordernum" name="ordernum" class="form-control" value="{{$data->ordernum}}">
                </div>
            </div>
            <input type="hidden" id="uuid" value="{{$data->uuid}}" name="uuid">
        </div>
        <div class="panel-footer">
            <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-dot-circle-o"></i> 提交</button>
            <!-- <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> 重置</button> -->
        </div> 
    </form> 
    <script>
        var ue=UE.getEditor("ueditor");
        ue.ready(function(){
            //因为Laravel有防csrf防伪造攻击的处理所以加上此行
            ue.execCommand('serverparam','_token','{{ csrf_token() }}');
            ue.setContent("{{$data->content}}");   
        });
    </script>
</div>
@endsection