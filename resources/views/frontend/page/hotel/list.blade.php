@extends('frontend.base')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h2>Danh sách homestay</h2>
  </div>
  <div class="col-lg-2">
<h2><a href="{!! route('fe.hotels.create') !!}" class="btn btn-w-m btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>
Thêm mới</a></h2>
  </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
<div class="row">
<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-content">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="10px">Chọn</th>
                            <th width="50px">Ảnh</th>
                            <th width="200px">homestay</th>
                            <th width="80px">Giá phòng</th>
                            <th width="200px">Địa chỉ</th>
                            <th width="80px">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($hotel))
                          @foreach($hotel as $items)
                              <tr>
                                  <td>
                                    <div class="icheckbox_square-green" style="position: relative;">
                                        <input type="checkbox" class="i-checks checkbox-primary" name="checkitem[]" value="{!! $items['id'] !!}" style="position: absolute; opacity: 0;">
                                    </div>
                                    @if(!empty($items['status']) && $items['status']==0)
                                    <span class="status">
                                      <a href=""><img src="{!! URL::asset('public/img/Icon_YellowDot.png') !!}" alt=""></a>
                                    </span>
                                    @else
                                    <span class="status">
                                      <a href=""><img src="{!! URL::asset('public/img/Icon_GreenDot.png') !!}" alt=""></a>
                                    </span>
                                    @endif
                                  </td>
                                  <td>
                                    <span class="">
                                      <img class="img-svn" src="{!! URL::asset('public/img/'.$items['avatar']) !!}" alt="">
                                    </span>
                                  </td>
                                  <td><a href="#">{!! $items['name'] !!}</a></td>
                                  <td>{!! number_format($items['price']) !!}</td>
                                  <td>{!! $items['address'] !!}</td>
                                  <td>
                                    <span>
                                      <a href="/homestay/hotels/edit/{!!$items['id'] !!}" class="btn btn-warning btn-xs" title="Cập nhật">
                                      <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>
                                  </span>
                                      <a href="/homestay/hotels/multiprocess/{!!$items['id'] !!}" class="btn btn-danger btn-xs">
                                      <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </a>
                                  </td>
                              </tr>
                          @endforeach
                        @endif
                    </tbody>
                </table>

                {!! $hotel->links() !!}
            </div>

        </div>
    </div>
</div>

</div>
</div>

<script>function mydelete() {
  return confirm('Bạn có chắc chẵn muốn xóa không ?', 'Thông báo');
}
  </script>
@endsection
