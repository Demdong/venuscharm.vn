@extends('admin.layout')

@section('main')
  <div class="row">
    <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <div class="pull-right">
                <div class="menu-right">
                    <form action="http://localhost/s-cart/public/sc_admin/news" id="button_search">
                       <div onclick="$(this).submit();" class="btn-group pull-right">
                               <a class="btn btn-flat btn-primary" title="Refresh">
                                  <i class="fa  fa-search"></i>
                               </a>
                       </div>
                       <div class="btn-group pull-right">
                             <div class="form-group">
                               <input type="text" name="keyword" class="form-control" placeholder="Tìm tiêu đề hoặc ID Blog/News" value="">
                             </div>
                       </div>
                    </form>
                   </div>
             </div>
            <div class="pull-left"></div>
            <!-- /.box-tools -->
          </div>
          <div class="box-header with-border">
             <div class="pull-right">
                <div class="menu-right">
                  <a href="http://localhost/s-cart/public/sc_admin/news/create" class="btn  btn-success  btn-flat" title="New" id="button_create_new">
                  <i class="fa fa-plus" title="Thêm mới"></i>
                  </a>
                </div>
            </div>
             <div class="pull-left">
                <div class="menu-left">
                  <button type="button" class="btn btn-default grid-select-all"><i class="fa fa-square-o"></i></button>
                </div>
                <div class="menu-left">
                  <a class="btn btn-flat btn-danger grid-trash" title="Xóa"><i class="fa fa-trash-o"></i></a>
                </div>
              <div class="menu-left">
                <div class="btn-group">
                      <select class="form-control" id="order_sort">
                      <option value="id__desc">ID desc</option><option value="id__asc">ID asc</option><option value="title__desc">Tiêu đề z-a</option><option value="title__asc">Tiêu đề a-z</option>
                      </select>
                </div>
                <div class="btn-group">
                  <a class="btn btn-flat btn-primary" title="Sắp xếp" id="button_sort">
                    <i class="fa fa-sort-amount-asc"></i>
                  </a>
                </div>
              </div>
            </div>

          </div>
          <section id="pjax-container" class="table-list">
            <div class="box-body table-responsive no-padding" >
               <table class="table table-hover">
                  <thead>
                    <tr>
                      <th></th>
                          <th>ID</th>
                          <th>Tiêu đề</th>
                          <th>Hình ảnh</th>
                          <th>Sắp xếp</th>
                          <th>Trạng thái</th>
                          <th>Hành động</th>
                     </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td>
                          <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input class="input" type="checkbox" data-id="1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                        </td>
                        <td>1</td>
                        <td>tré</td>
                        <td><img alt="tré" title="" src="http://localhost/s-cart/public/data/content/img-27.jpg" style=" width:50px;"></td>
                        <td>0</td>
                        <td><span class="label label-danger">OFF</span></td>
                        <td>
                          <a href="http://localhost/s-cart/public/sc_admin/news/edit/1"><span title="Sửa" type="button" class="btn btn-flat btn-primary"><i class="fa fa-edit"></i></span></a>&nbsp;

                          <span onclick="deleteItem(1);" title="Xóa" class="btn btn-flat btn-danger"><i class="fa fa-trash"></i></span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input class="input" type="checkbox" data-id="1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                        </td>
                        <td>1</td>
                        <td>tré</td>
                        <td><img alt="tré" title="" src="http://localhost/s-cart/public/data/content/img-27.jpg" style=" width:50px;"></td>
                        <td>0</td>
                        <td><span class="label label-danger">OFF</span></td>
                        <td>
                          <a href="http://localhost/s-cart/public/sc_admin/news/edit/1"><span title="Sửa" type="button" class="btn btn-flat btn-primary"><i class="fa fa-edit"></i></span></a>&nbsp;

                          <span onclick="deleteItem(1);" title="Xóa" class="btn btn-flat btn-danger"><i class="fa fa-trash"></i></span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input class="input" type="checkbox" data-id="1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                        </td>
                        <td>1</td>
                        <td>tré</td>
                        <td><img alt="tré" title="" src="http://localhost/s-cart/public/data/content/img-27.jpg" style=" width:50px;"></td>
                        <td>0</td>
                        <td><span class="label label-danger">OFF</span></td>
                        <td>
                          <a href="http://localhost/s-cart/public/sc_admin/news/edit/1"><span title="Sửa" type="button" class="btn btn-flat btn-primary"><i class="fa fa-edit"></i></span></a>&nbsp;

                          <span onclick="deleteItem(1);" title="Xóa" class="btn btn-flat btn-danger"><i class="fa fa-trash"></i></span>
                        </td>
                      </tr>
                  </tbody>
               </table>
            </div>
            <div class="box-footer clearfix">
               {!! $resultItems??'' !!}
               {!! $pagination??'' !!}
            </div>

            @if (!empty($blockBottom) && count($blockBottom))
              @foreach ($blockBottom as $item)
                <div class="clearfix">
                  @php
                  $arrCheck = explode('view::', $item);
                  @endphp
                  @if (count($arrCheck) == 2)
                                          @if (view()->exists($arrCheck[1]))
                            @include($arrCheck[1])
                          @endif
                  @else
                    {!! trim($item) !!}
                  @endif
                </div>    
              @endforeach
            @endif
            
          </section>
        </div>
    </div>
  </div>
@endsection;