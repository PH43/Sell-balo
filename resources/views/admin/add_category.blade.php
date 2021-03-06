@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Thêm danh mục sản phẩm
                        </header>
                         @php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            @endphp
                        <div class="panel-body">

                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-category')}}" method="post">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input type="text"  class="form-control"  name="category_name" placeholder="danh mục" >
                                </div>
                                @if ($errors->has('category_name'))
                                <p style="color: red">{{$errors->first('category_name')}}</p>
                            @endif
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Danh mục con </label>
                                        <select name="" class="form-control input-sm m-bot15">
                                    @foreach ($cate_child as $item)
                                            <option value="{{$item->id}}">{{$item->category_name}}</option>
                                            
                                    @endforeach
                                        </select>
                                </div>
                               
                                <button type="submit" name="add_category_product" class="btn btn-info">Thêm danh mục</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection