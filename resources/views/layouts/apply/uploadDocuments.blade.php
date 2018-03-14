@extends('layouts.apply.apply')
@section('r-content')

    <div class="div-contents">
        <div class="div-note-info">
            <h4 class="note-title">{{Lang::get('uploadDocuments.Warmtips')}}</h4>
            <ul>
                <li>The maximum file size for upload is <strong>2 MB</strong> . / 文件大小应在 <strong>2 MB</strong> 以内。 </li>
                <li>Image files (<strong>JPG, GIF, PNG</strong>) and document files (<strong>DOC, PDF</strong>) are allowed.  / 文件类型请选择图片和文档类文件。</li>
            </ul>
        </div>
        <div class="div-form">
            <form action="{{route('updatefile')}}" method="post" enctype="multipart/form-data">
{{  csrf_field()}}
                <table border="1" class="table-form border-lightGreen">
                    <tr  class="tr-category tr-l">
                        <th colspan="7" class="bg-lightGreen font-white">
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <span>
                            {{Lang::get('uploadDocuments.UploadedDocuments')}}
                            </span>
                        </th>
                    </tr>
                    <tr class="tr-title">
                        <td class="td-label-r">
                        {{Lang::get('uploadDocuments.PassportPhoto')}}
                        </td>
                        <td class="td-a-bg-lightGray">
                            <a href="#" class="bg-lightBlue font-white">{{Lang::get('uploadDocuments.View')}}</a>
                            <a href="#">{{Lang::get('uploadDocuments.Download')}}</a>
                            <a href="#">{{Lang::get('uploadDocuments.Change')}}</a>
                            <a href="#">{{Lang::get('uploadDocuments.Delete')}}</a>
                            <span>
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                2017-11-06
                            </span>
                        </td>
                    </tr>
                </table>

                <table border="1" class="table-form border-lightBlue">
                    <tr  class="tr-category tr-l">
                        <th colspan="7" class="bg-lightBlue font-white">
                            <i class="fa fa-upload" aria-hidden="true"></i>
                            <span>
                            {{Lang::get('uploadDocuments.UploadDocuments')}}
                            </span>
                        </th>
                    </tr>
                    <tr class="tr-title">
                        <td class="td-label-r">
                        {{Lang::get('uploadDocuments.HighestDegreeDiploma')}}
                        </td>
                        <td >
                            <input type="file" class="input-normal" name="HighestDegreeDiploma">
                            @isset($arrayUpadate)@if($arrayUpadate[0]) 文件已经上传@else 文件未上传 @endif @endisset
                        </td>
                    </tr>
                    <tr class="tr-title">
                        <td class="td-label-r">
                        {{Lang::get('uploadDocuments.Transcripts')}}
                        </td>
                        <td >
                            <input type="file" class="input-normal" name="Transcripts">
                            @isset($arrayUpadate)@if($arrayUpadate[1]) 文件已经上传@else 文件未上传 @endif @endisset
                        </td>
                    </tr>
                    <tr class="tr-title">
                        <td class="td-label-r">
                        {{Lang::get('uploadDocuments.ValidPassport')}}
                        </td>
                        <td >
                            <input type="file" class="input-normal" name="ValidPassport">
                            @isset($arrayUpadate)@if($arrayUpadate[2]) 文件已经上传@else 文件未上传 @endif @endisset
                        </td>
                    </tr>
                    <tr class="tr-title">
                        <td class="td-label-r">
                        {{Lang::get('uploadDocuments.LanguageCertificate')}}
                        </td>
                        <td >
                            <input type="file" class="input-normal" name="LanguageCertificate">
                            @isset($arrayUpadate)@if($arrayUpadate[3]) 文件已经上传@else 文件未上传 @endif @endisset
                        </td>
                    </tr>
                    <tr class="tr-title">
                        <td class="td-label-r">
                        {{Lang::get('uploadDocuments.ChineseKLanguageCertificate')}}
                        </td>
                        <td >
                            <input type="file" class="input-normal" name="ChineseKLanguageCertificate">
                            @isset($arrayUpadate)@if($arrayUpadate[4]) 文件已经上传@else 文件未上传 @endif @endisset
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