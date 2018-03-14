@extends('layouts.apply.apply')
@section('r-content')

    <div class="div-contents">
        <div class="div-note-info">
            <h4 class="note-title">Warm tips / 填写说明</h4>
            <p>..., please pay notice CSCIE notifications.</p>
            <p>请仔细填写，并留意系统通知。</p>
        </div>
        <div class="div-form">
            <form action="{{route('postEducationBackground')}}" method="post">
                {{csrf_field()}}
                <table border="1" class="table-form">
                    <tr class="tr-category">
                        <th colspan="5">{{Lang::get('educationBackground.EducationBackground')}}</th>
                    </tr>
                    <tr  class="tr-title">
                        <th class="td-item-w20">
                        {{Lang::get('educationBackground.Start_Time')}}
                        </th>
                        <th class="td-item-w20">
                        {{Lang::get('educationBackground.Ending_Time')}}
                        </th>
                        <th class="td-item-w20">
                        {{Lang::get('educationBackground.School')}}
                        </th>
                        <th class="td-item-w20">
                        {{Lang::get('educationBackground.Degree')}}
                        </th>
                        <th class="td-item-w20">
                        {{Lang::get('educationBackground.Operation')}}
                        </th>
                    </tr>

                    <tr>
                        <td class="td-item-w20">
                            <input type="date" name="Education_Start_Time" id="Start_Time" value="@isset($UserEducationBackground){{$UserEducationBackground->starting_time}}@endisset">
                            {{--<input type="date" name="birthDate" class="date-item" value="2015-09-24"/>--}}
                        </td>
                        <td class="td-item-w20">
                            <input type="date" name="Education_Ending_Time" id="Ending_Time" value="@isset($UserEducationBackground){{$UserEducationBackground->ending_time}}@endisset">
                            {{--<input type="date" name="birthDate" class="date-item" value="2015-09-24"/>--}}
                        </td>
                        <td class="td-item-w20">
                            <input name="Education_School" id="School" value="@isset($UserEducationBackground){{$UserEducationBackground->school}}@endisset">
                        </td>
                        <td class="td-item-w20">
                            <input name="Education_Degree" id="Degree" value="@isset($UserEducationBackground){{$UserEducationBackground->degree}}@endisset">
                        </td>
                        <td class="td-item-w20">
                            操作
                        </td>
                    </tr>
                    {{--<tr class="tr-add-record">--}}
                        {{--<td colspan="5">--}}
                            {{--<span>--}}
                            {{--{{Lang::get('educationBackground.Add')}}--}}
                            {{--</span>--}}
                        {{--</td>--}}
                    {{--</tr>--}}

                </table>


                <table border="1" class="table-form">
                    <tr class="tr-category">
                        <th colspan="5">{{Lang::get('educationBackground.work_experience')}}</th>
                    </tr>
                    <tr  class="tr-title">
                        <th class="td-item-w20">
                        {{Lang::get('educationBackground.Start_Time')}}
                        </th>
                        <th class="td-item-w20">
                        {{Lang::get('educationBackground.Ending_Time')}}
                        </th>
                        <th class="td-item-w20">
                        {{Lang::get('educationBackground.Employer')}}
                        </th>
                        <th class="td-item-w20">
                        {{Lang::get('educationBackground.Job_Title')}}
                        </th>
                        <th class="td-item-w20">
                        {{Lang::get('educationBackground.Operation')}}
                        </th>
                    </tr>

                    <tr>
                        <td class="td-item-w20">
                            <input type="date" name="Work_Start_Time" id="Start_Time" value="@isset($UserWorkingExperience){{$UserWorkingExperience->starting_time}}@endisset">
                            {{--<input type="date" name="birthDate" class="date-item" value="2015-09-24"/>--}}
                        </td>
                        <td class="td-item-w20">
                            <input type="date" name="Work_Ending_Time" id="Ending_Time" value="@isset($UserWorkingExperience){{$UserWorkingExperience->ending_time}}@endisset">
                            {{--<input type="date" name="birthDate" class="date-item" value="2015-09-24"/>--}}
                        </td>
                        <td class="td-item-w20">
                            <input name="Work_Employer" id="Employer" value="@isset($UserWorkingExperience){{$UserWorkingExperience->employer}}@endisset">
                        </td>
                        <td class="td-item-w20">
                            <input name="Work_Job_Title" id="Job_Title" value="@isset($UserWorkingExperience){{$UserWorkingExperience->job_title}}@endisset">
                        </td>
                        <td class="td-item-w20">
                            操作
                        </td>
                    </tr>
                    {{--<tr class="tr-add-record">--}}
                        {{--<td colspan="5">--}}
                            {{--<span>--}}
                            {{--{{Lang::get('educationBackground.Add')}}--}}
                            {{--</span>--}}
                        {{--</td>--}}
                    {{--</tr>--}}

                </table>


                <div class="form-btn">
                    <button type="submit" class="btn-pre">{{Lang::get('educationBackground.Previous')}}</button>
                    <button type="submit" class="btn-next btn-active">{{Lang::get('educationBackground.Next')}}</button>
                </div>

            </form>
        </div>
    </div>

@endsection