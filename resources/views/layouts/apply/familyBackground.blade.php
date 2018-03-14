@extends('layouts.apply.apply')
@section('r-content')

    <div class="div-contents">
        <div class="div-note-info">
            <h4 class="note-title">{{Lang::get('familyBackground.Warm_tips')}}</h4>
            <p>..., please pay notice CSCIE notifications.</p>
            <p>请仔细填写，并留意系统通知。</p>
        </div>
        <div class="div-form">
            <form action="{{route('apply.familybackground')}}" method="post">
            {{csrf_field()}}
                <table border="1" class="table-form">
                    <tr  class="tr-category">
                        <th colspan="7">{{Lang::get('familyBackground.Family_Background')}}</th>
                    </tr>
                    <tr class="tr-title">
                        <td >
                        {{Lang::get('familyBackground.Member')}}
                        </td>
                        <td >
                        {{Lang::get('familyBackground.Name')}}
                        </td>
                        <td >
                        {{Lang::get('familyBackground.Phone_Number')}}
                        </td>
                        <td>
                        {{Lang::get('familyBackground.Email')}}
                        </td>
                        <td>
                        {{Lang::get('familyBackground.Profession')}}
                        </td>
                        <td>
                        {{Lang::get('familyBackground.Employer')}}
                        </td>
                        <td>
                        {{Lang::get('familyBackground.Operation')}}
                        </td>
                    </tr>


                    <tr>
                        <td >
                            <input type="text" id="passport_surname" name="f-relationship" placeholder="父亲" value="父亲" disabled>
                        </td>
                        <td >
                            <input type="text" id="passport_surname" name="f-name" placeholder="姓名">
                        </td>
                        <td >
                            <input type="text" id="passport_surname" name="f-phone" placeholder="电话">
                        </td>
                        <td >
                            <input type="text" id="passport_surname" name="f-email" placeholder="邮箱">
                        </td>
                        <td >
                            <input type="text" id="passport_surname" name="f-profession" placeholder="职业">
                        </td>
                        <td >
                            <input type="text" id="passport_surname" name="f-employer" placeholder="工作单位">
                        </td>
                        <td class="td-new-option">
                            <a href="javascript:void(0);">
                                <i class="fa fa-check-square-o" aria-hidden="true"></i>
                            </a>
                            <a href="javascript:void(0);">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td >
                            <input type="text" class="span-item" name="m-relationship" value="母亲" disabled>
                        </td>
                        <td >
                            <input type="text" class="span-item" name="m-name" placeholder="姓名"></span>
                        </td>
                        <td >
                            <input type="text" class="span-item" name="m-phone" placeholder="电话"></span>
                        </td>
                        <td >
                            <input type="text" class="span-item" name="m-email" placeholder="邮箱"></span>
                        </td>
                        <td >
                            <input type="text" class="span-item" name="m-profession" placeholder="职业"></span>
                        </td>
                        <td >
                            <input type="text" class="span-item" name="m-employer" placeholder="工作单位"></span>
                        </td>
                        <td class="td-option">
                            <a href="javascript:void(0);">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>
                            <a href="javascript:void(0);">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>

                    <tr class="tr-add-record">
                        <td colspan="7">
                            <span>
                            {{Lang::get('familyBackground.Add')}}
                            </span>
                        </td>
                    </tr>

                </table>


                {{--<table border="1" class="table-form">--}}
                    {{--<tr  class="tr-category">--}}
                        {{--<th colspan="7"> {{Lang::get('familyBackground.Work_Background')}}</th>--}}
                    {{--</tr>--}}
                    {{--<tr class="tr-title">--}}
                        {{--<td >--}}
                        {{--{{Lang::get('familyBackground.Member')}}--}}
                        {{--</td>--}}
                        {{--<td >--}}
                        {{--{{Lang::get('familyBackground.Name')}}--}}
                        {{--</td>--}}
                        {{--<td >--}}
                        {{--{{Lang::get('familyBackground.Phone_Number')}}--}}
                        {{--</td>--}}
                        {{--<td>--}}
                        {{--{{Lang::get('familyBackground.Email')}}--}}
                        {{--</td>--}}
                        {{--<td>--}}
                        {{--{{Lang::get('familyBackground.Profession')}}--}}
                        {{--</td>--}}
                        {{--<td>--}}
                        {{--{{Lang::get('familyBackground.Employer')}}--}}
                        {{--</td>--}}
                        {{--<td>--}}
                        {{--{{Lang::get('familyBackground.Operation')}}--}}
                        {{--</td>--}}
                    {{--</tr>--}}

                    {{--<tr>--}}
                        {{--<td >--}}
                            {{--<span class="span-item">付清</span>--}}
                        {{--</td>--}}
                        {{--<td >--}}
                            {{--<span class="span-item">某某某</span>--}}
                        {{--</td>--}}
                        {{--<td >--}}
                            {{--<span class="span-item">13333333333</span>--}}
                        {{--</td>--}}
                        {{--<td >--}}
                            {{--<span class="span-item">111@qq.com</span>--}}
                        {{--</td>--}}
                        {{--<td >--}}
                            {{--<span class="span-item">教师</span>--}}
                        {{--</td>--}}
                        {{--<td >--}}
                            {{--<span class="span-item">江西财经大学</span>--}}
                        {{--</td>--}}
                        {{--<td class="td-option">--}}
                            {{--<a href="javascript:void(0);">--}}
                                {{--<i class="fa fa-pencil-square-o" aria-hidden="true"></i>--}}
                            {{--</a>--}}
                            {{--<a href="javascript:void(0);">--}}
                                {{--<i class="fa fa-trash-o" aria-hidden="true"></i>--}}
                            {{--</a>--}}
                        {{--</td>--}}
                    {{--</tr>--}}

                    {{--<tr>--}}
                        {{--<td >--}}
                            {{--<input type="text" id="passport_surname" name="passport_surname" placeholder="父亲">--}}
                        {{--</td>--}}
                        {{--<td >--}}
                            {{--<input type="text" id="passport_surname" name="passport_surname" placeholder="姓名">--}}
                        {{--</td>--}}
                        {{--<td >--}}
                            {{--<input type="text" id="passport_surname" name="passport_surname" placeholder="电话">--}}
                        {{--</td>--}}
                        {{--<td >--}}
                            {{--<input type="text" id="passport_surname" name="passport_surname" placeholder="邮箱">--}}
                        {{--</td>--}}
                        {{--<td >--}}
                            {{--<input type="text" id="passport_surname" name="passport_surname" placeholder="职业">--}}
                        {{--</td>--}}
                        {{--<td >--}}
                            {{--<input type="text" id="passport_surname" name="passport_surname" placeholder="工作单位">--}}
                        {{--</td>--}}
                        {{--<td class="td-new-option">--}}
                            {{--<a href="javascript:void(0);">--}}
                                {{--<i class="fa fa-check-square-o" aria-hidden="true"></i>--}}
                            {{--</a>--}}
                            {{--<a href="javascript:void(0);">--}}
                                {{--<i class="fa fa-trash-o" aria-hidden="true"></i>--}}
                            {{--</a>--}}
                        {{--</td>--}}
                    {{--</tr>--}}

                    {{--<tr class="tr-add-record">--}}
                        {{--<td colspan="7">--}}
                            {{--<span>--}}
                            {{--{{Lang::get('familyBackground.Add')}}--}}
                            {{--</span>--}}
                        {{--</td>--}}
                    {{--</tr>--}}

                {{--</table>--}}


                <div class="form-btn">
                    <button type="submit" class="btn-pre">{{Lang::get('familyBackground.Previous')}}</button>
                    <button type="submit" class="btn-next btn-active">{{Lang::get('familyBackground.Next')}}</button>
                </div>

            </form>
        </div>
    </div>

@endsection