
@extends('admin.layouts.master')

@section('title','合作伙伴管理')
@section('banner-title','合作伙伴管理')
@section('banner-tips','合作伙伴列表')

@section('header')
    @parent
@endsection

@section('left-menu')
    @parent
@endsection


@section('content')


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2><i class="fa fa-table red"></i><span class="break"></span><strong>合作伙伴管理</strong></h2>
                    <div class="panel-actions">
                        <!-- <a href="table.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                        <a href="table.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a> -->
                        <!-- <a href="{{ url('banner/add')}}"><i class="fa fa-times"></i></a> -->

                    </div>


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
                <div class="panel-body">
                    <form action="{{ route('partner.index') }}" method="get">
                        <div class="row">
                            <div class="col-md-3">
                                <input type="text" id="searchtxt" name="name" class="form-control" placeholder="请输入首页标题......">
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary">搜索</button>
                                <button type="button" class="btn btn-default" onclick="window.location.href='{{ route('partner.create') }}'">添加</button>
                            </div>
                        </div>
                    </form>
                    <table class="table table-bordered table-striped table-condensed table-hover">
                        <thead>
                        <tr>
                            <th width="20%">名称</th>
                            <th width="20%">封面</th>
                            <!-- <th width="8%">排序</th> -->
                            <th width="15%">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $val)
                            <tr>
                                <td>{{$val->name}}</td>
                                <td>{{$val->cover}}</td>
                                <!-- <td>{{$val->sort}}</td> -->
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="window.location.href='{{ route('partner.edit', ['uuid' => $val->id]) }}'">编辑</button>
                                    <button type="button" class="btn btn-danger" onclick="del('{{ $val->uuid }}')">删除</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $list->links() }}
                            <!-- <ul class="pagination">
                                <li><a href="table.html#">上一页</a></li>
                                <li class="active">
                                  <a href="table.html#">1</a>
                                </li>
                                <li><a href="table.html#">2</a></li>
                                <li><a href="table.html#">3</a></li>
                                <li><a href="table.html#">4</a></li>
                                <li><a href="table.html#">5</a></li>
                                <li><a href="table.html#">下一页</a></li>
                              </ul>      -->
                </div>
            </div>
        </div><!--/col-->
    </div>

    </div>
    <script type="text/javascript">
        function del(id)
        {
            $.ajax({
                url: "/admin/partner/" + id,
                type:'post',
                data:{
                    _method: 'delete'
                },
                dataType: 'json',
                success: function(data){
                    alert(data.msg);
                    window.location.reload();
                }
            });
        }
    </script>
@endsection
