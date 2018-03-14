@extends('layouts.apply.apply')
@section('title')
    基本信息填写
@endsection
@section('r-content')

    <div class="div-contents">
        <div class="div-note-info">
            <h4 class="note-title">{{Lang::get('contactInformation.Warmtips')}}</h4>
            <p>..., please pay notice CSCIE notifications.</p>
            <p>请仔细填写，并留意系统通知。</p>
        </div>
        <div class="div-form">
            <form action="{{route('apply.Contactinformation')}}" method="post">
{{csrf_field()}}
                <table border="1" class="table-form">
                    <tr  class="tr-category tr-l">
                        <th colspan="7">
                            <span>{{Lang::get('contactInformation.AdmissionNoticeCollectMethod')}}</span>
                            {{--<select name="programCategory" id="" class="select-item">--}}
                                {{--<option value="01" selected="selected">{{Lang::get('contactInformation.AdmissionNoticeCollectMethod_s1')}}</option>--}}
                                {{--<option value="02">{{Lang::get('contactInformation.AdmissionNoticeCollectMethod_s2')}}</option>--}}
                                {{--<option value="03">{{Lang::get('contactInformation.AdmissionNoticeCollectMethod_s3')}}</option>--}}
                                {{--<option value="04">{{Lang::get('contactInformation.AdmissionNoticeCollectMethod_s4')}}</option>--}}
                                {{--<option value="05">{{Lang::get('contactInformation.AdmissionNoticeCollectMethod_s5')}}</option>--}}
                                {{--<option value="06">{{Lang::get('contactInformation.AdmissionNoticeCollectMethod_s6')}}</option>--}}
                            {{--</select>--}}
                        </th>
                    </tr>
                    <tr class="tr-title">
                    <td class="td-label-r">
                    {{Lang::get('contactInformation.Country')}}
                    </td>
                    <td >
                        <input type="text" id="Country" name="Country" placeholder="China" value="@isset($UserContactInformation){{$UserContactInformation->country}}@endisset">
                    </td>
                    <td class="td-label-r">
                    {{Lang::get('contactInformation.ProvinceCity')}}
                    </td>
                    <td>
                        <input type="text" id="ProvinceCity" name="ProvinceCity" placeholder="Nanchang, Jiangxi" value="@isset($UserContactInformation){{$UserContactInformation->province_city}}@endisset">
                    </td>
                </tr>

                <tr class="tr-title">
                    <td class="td-label-r">
                    {{Lang::get('contactInformation.StreetAddress')}}
                    </td>
                    <td >
                        <input type="text" id="StreetAddress" name="StreetAddress" placeholder="East Shuanggang Road, Changbei" value="@isset($UserContactInformation){{$UserContactInformation->own_country_address}}@endisset">
                    </td>
                    <td class="td-label-r">
                    {{Lang::get('contactInformation.Postcode')}}
                    </td>
                    <td>
                        <input type="text" id="Postcode" name="Postcode" placeholder="330013" value="@isset($UserContactInformation){{$UserContactInformation->postcode}}@endisset">
                    </td>
                </tr>

                <tr class="tr-title">
                    <td class="td-label-r">
                    {{Lang::get('contactInformation.PhoneNumber')}}
                    </td>
                    <td >
                        <input type="text" id="PhoneNumber" name="PhoneNumber" placeholder="0791-81888888" value="@isset($UserContactInformation){{$UserContactInformation->own_country_phone}}@endisset">
                    </td>
                    <td class="td-label-r">
                    {{Lang::get('contactInformation.Email')}}
                    </td>
                    <td>
                        <input type="text" id="Email" name="Email" placeholder="foo@cscie.com" value="@isset($UserContactInformation){{$UserContactInformation->email}}@endisset">
                    </td>
                </tr>

                </table>
                <div class="form-btn">
                    <button type="submit" class="btn-pre">上一步</button>
                    <button type="submit" class="btn-next btn-active">下一步</button>
                </div>

            </form>
        </div>
    </div>

@endsection