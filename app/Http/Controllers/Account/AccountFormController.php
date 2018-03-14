<?php

namespace App\Http\Controllers\Account;

use App\Models\UserContactInformation;
use App\Models\UserEducationBackground;
use App\Models\UsersBasicInfo;
use App\Models\UsersLanguageAbility;
use App\Models\UserWorkingExperience;
//use Request;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Storage;

Class AccountFormController extends Controller{
    public function PostBasicsInfo(Request $request){
        $input  = $request->all();
        $UsersBasicInfo = new UsersBasicInfo();
        //表单
        $user = Auth::user();
        $user_id = DB::table('users_password_records')->where('email', $user['email'])->value('user_id');
        $UsersBasicInfo->user_id = $user_id;
        $UsersBasicInfo->surname = $input['surname'];
        $UsersBasicInfo->first_name = $input['first_name'];
        $UsersBasicInfo->chinese_name = $input['chinese_name'];
        $UsersBasicInfo->phone = $input['phone'];
        $UsersBasicInfo->gender = $input['gender'];
        $UsersBasicInfo->marital_status = $input['marital_status'];
        $UsersBasicInfo->nationalty = $input['nationalty'];
        $UsersBasicInfo->birth_place = $input['birth_place'];
//        dd($input['birth_place']);
        $UsersBasicInfo->birth_date = $input['birth_date'];
        $UsersBasicInfo->health_condition = $input['health_condition'];
        $UsersBasicInfo->home_institution = $input['home_institution'];
        $UsersBasicInfo->native_language = $input['native_language'];
        $UsersBasicInfo->religion = $input['religion'];
        $UsersBasicInfo->speciality_hobby = $input['speciality_hobby'];
        $UsersBasicInfo->study_period = $input['study_period'];
        $UsersBasicInfo->program_category = $input['program_category'];
        $UsersBasicInfo->financial_support = $input['financial_support'];
        $UsersBasicInfo->passport_number = $input['passport_number'];
        $UsersBasicInfo->passport_expired_time = $input['passport_expired_time'];
        $UsersBasicInfo->visa_category = $input['visa_category'];

        $UsersBasicInfo->save();

        return route('apply.basicInformation');

    }
    public function GetBasicsInfo(){
        $user = Auth::user();
        $user_id = DB::table('users_password_records')->where('email', $user['email'])->value('user_id');
        $id = DB::table('users_basic_info')->where('user_id', $user_id)->value('id');
        $UserBasics = UsersBasicInfo::find($id);
        //dd($UserBasics);
        return view('layouts.apply.basicInformation')->with('UserBasics',$UserBasics);
    }

    public function  postLanguageAbility(Request $request){
        $input  = $request->all();
        $UserLanguageAbility = new UsersLanguageAbility();
        //表单
        $user = Auth::user();
        $user_id = DB::table('users_password_records')->where('email', $user['email'])->value('user_id');
        $UserLanguageAbility->user_id = $user_id;
        $UserLanguageAbility->chinese_level = $input['chinese_level'];
        $UserLanguageAbility->hsk_result = $input['hsk_result'];
        $UserLanguageAbility->New_HSK_Oral_Test = $input['New_HSK_Oral_Test'];
        $UserLanguageAbility->New_HSK_Written_Test = $input['New_HSK_Written_Test'];
        $UserLanguageAbility->English_Level = $input['English_Level'];
        $UserLanguageAbility->toefl = $input['toefl'];
        $UserLanguageAbility->gre = $input['gre'];
        $UserLanguageAbility->ielts = $input['ielts'];
        $UserLanguageAbility->gmat = $input['gmat'];
        $UserLanguageAbility->foreign_language = $input['foreign_language'];

        $UserLanguageAbility->save();

        return route('apply.languageAbility');
    }
    public function GetlanguageAbility()
    {
        $user = Auth::user();
        $user_id = DB::table('users_password_records')->where('email', $user['email'])->value('user_id');
        $id = DB::table('users_basic_info')->where('user_id', $user_id)->value('id');
        $UsersLanguageAbility = UsersLanguageAbility::find($id);
//        dd($UsersLanguageAbility);
        return view('layouts.apply.languageAbility')->with('UsersLanguageAbility',$UsersLanguageAbility);
    }
    public function postEducationBackground(Request $request){
        $input  = $request->all();
//        dd($input);
        $UserWorkingExperience = new UserWorkingExperience();
        $user = Auth::user();
        $user_id = DB::table('users_password_records')->where('email', $user['email'])->value('user_id');
        $UserWorkingExperience->user_id = $user_id;
        //working experience
        $UserWorkingExperience->starting_time = $input['Work_Start_Time'];
        $UserWorkingExperience->ending_time = $input['Work_Ending_Time'];
        $UserWorkingExperience->employer = $input['Work_Employer'];
        $UserWorkingExperience->job_title = $input['Work_Job_Title'];
        $UserWorkingExperience->save();

        $UserEducationBackground = new UserEducationBackground();
        $UserEducationBackground->user_id = $user_id;
        $UserEducationBackground->degree = 1;
        $UserEducationBackground->school = $input['Education_School'];
        $UserEducationBackground->starting_time = $input['Education_Start_Time'];
        $UserEducationBackground->ending_time = $input['Education_Ending_Time'];
        $UserEducationBackground->save();
    }

    public function postFamilybackground(Request $request){
        $input  = $request->all();
        dd($input);
//        dd($input);
        $UserWorkingExperience = new UserWorkingExperience();
        $user = Auth::user();
        $user_id = DB::table('users_password_records')->where('email', $user['email'])->value('user_id');
        $UserWorkingExperience->user_id = $user_id;
        //working experience
        $UserWorkingExperience->starting_time = $input['Work_Start_Time'];
        $UserWorkingExperience->ending_time = $input['Work_Ending_Time'];
        $UserWorkingExperience->employer = $input['Work_Employer'];
        $UserWorkingExperience->job_title = $input['Work_Job_Title'];
        $UserWorkingExperience->save();

        $UserEducationBackground = new UserEducationBackground();
        $UserEducationBackground->user_id = $user_id;
        $UserEducationBackground->degree = 1;
        $UserEducationBackground->school = $input['Education_School'];
        $UserEducationBackground->starting_time = $input['Education_Start_Time'];
        $UserEducationBackground->ending_time = $input['Education_Ending_Time'];
        $UserEducationBackground->save();
    }
    public function postContactinformation(Request $request){
        $input  = $request->all();

        $UserContactInformation = new UserContactInformation();
        $user = Auth::user();
        $user_id = DB::table('users_password_records')->where('email', $user['email'])->value('user_id');
        $UserContactInformation->user_id = $user_id;
        $UserContactInformation->own_country_address = $input['StreetAddress'];
        $UserContactInformation->own_country_phone = $input['PhoneNumber'];
        $UserContactInformation->province_city = $input['ProvinceCity'];
        $UserContactInformation->country = $input['Country'];
        $UserContactInformation->postcode = $input['Postcode'];
        $UserContactInformation->email = $input['Email'];
        $UserContactInformation->save();
        dd($input);

    }
    public function getEducationBackground()
    {
        $user = Auth::user();
        $user_id = DB::table('users_password_records')->where('email', $user['email'])->value('user_id');
        $id = DB::table('users_basic_info')->where('user_id', $user_id)->value('id');
        $UserWorkingExperience = UserWorkingExperience::find($id);
        $UserEducationBackground = UserEducationBackground::find($id);
        return view('layouts.apply.educationBackground',['UserWorkingExperience'=>$UserWorkingExperience,'UserEducationBackground'=>$UserEducationBackground]);
    }public function getContactinformation()
    {
        $user = Auth::user();
        $user_id = DB::table('users_password_records')->where('email', $user['email'])->value('user_id');
        $id = DB::table('users_contact_information')->where('user_id', $user_id)->value('id');
        $UserContactInformation = UserContactInformation::find($id);
        return view('layouts.apply.contactinformation')->with('UserContactInformation',$UserContactInformation);
    }
    public function updatefile(Request $request)
    {
        $user = Auth::user();
        if ($request->hasFile('HighestDegreeDiploma'))
        {
            $dataHighestDegreeDiploma =$request->file('HighestDegreeDiploma');
            $fileOriginalName1 = $dataHighestDegreeDiploma->getClientOriginalName();
            $ext1 = $dataHighestDegreeDiploma->getClientOriginalExtension();
            $realPath1 = $dataHighestDegreeDiploma->getRealPath();
            $type1 = $dataHighestDegreeDiploma->getClientMimeType();
            $filename1 = $user['id'].'-'.'HighestDegreeDiploma'. '.' . $ext1;
            $bool = Storage::disk('local')->put($filename1, file_get_contents($realPath1));
        }
        if ($request->hasFile('Transcripts'))
        {
            $dataTranscripts =$request->file('Transcripts');

            $fileOriginalName2 = $dataTranscripts->getClientOriginalName();
            $ext2 = $dataTranscripts->getClientOriginalExtension();
            $realPath2 = $dataTranscripts->getRealPath();
            $type2 = $dataTranscripts->getClientMimeType();
            $filename2 = $user['id'].'-'.'Transcripts'. '.' . $ext2;
            $bool = Storage::disk('local')->put($filename2, file_get_contents($realPath2));
        }
        if ($request->hasFile('ValidPassport'))
        {

            $dataValidPassport =$request->file('ValidPassport');
            $fileOriginalName3 = $dataValidPassport->getClientOriginalName();
            $ext3 = $dataValidPassport->getClientOriginalExtension();
            $realPath3 = $dataValidPassport->getRealPath();
            $type3 = $dataValidPassport->getClientMimeType();
            $filename3 = $user['id'].'-'.'ValidPassport'. '.' . $ext3;
            $bool = Storage::disk('local')->put($filename3, file_get_contents($realPath3));
        }
        if ($request->hasFile('LanguageCertificate'))
        {

            $dataLanguageCertificate =$request->file('LanguageCertificate');
            $fileOriginalName4 = $dataLanguageCertificate->getClientOriginalName();
            $ext4 = $dataLanguageCertificate->getClientOriginalExtension();
            $realPath4 = $dataLanguageCertificate->getRealPath();
            $type4 = $dataLanguageCertificate->getClientMimeType();
            $filename4 = $user['id'].'-'.'LanguageCertificate'. '.' . $ext4;
            $bool = Storage::disk('local')->put($filename4, file_get_contents($realPath4));
        }
        if ($request->hasFile('ChineseKLanguageCertificate'))
        {
            $dataChineseKLanguageCertificate =$request->file('ChineseKLanguageCertificate');
            $fileOriginalName5 = $dataChineseKLanguageCertificate->getClientOriginalName();
            $ext5 = $dataChineseKLanguageCertificate->getClientOriginalExtension();
            $realPath5 = $dataChineseKLanguageCertificate->getRealPath();
            $type5 = $dataChineseKLanguageCertificate->getClientMimeType();
            $filename5 = $user['id'].'-'.'ChineseKLanguageCertificate'. '.' . $ext5;
            $bool = Storage::disk('local')->put($filename5, file_get_contents($realPath5));
        }


        return view('layouts.apply.uploadDocuments');
    }
    protected function getuploadDocuments()
    {
        $user = Auth::User();
        $filename1 = $user['id'].'-'.'HighestDegreeDiploma'. '.' . 'png';
        $filename2 = $user['id'].'-'.'Transcripts'. '.' . 'png';
        $filename3 = $user['id'].'-'.'ValidPassport'. '.' . 'png';
        $filename4 = $user['id'].'-'.'LanguageCertificate'. '.' . 'png';
        $filename5 = $user['id'].'-'.'ChineseKLanguageCertificate'. '.' . 'png';
        $exists1 = Storage::disk('local')->exists($filename1);
        $exists2 = Storage::disk('local')->exists($filename2);
        $exists3 = Storage::disk('local')->exists($filename3);
        $exists4 = Storage::disk('local')->exists($filename4);
        $exists5 = Storage::disk('local')->exists($filename5);
        $arrayUpadate = array();
        array_push($arrayUpadate,$exists1,$exists2,$exists3,$exists4,$exists5);
        return view('layouts.apply.uploadDocuments')->with('arrayUpadate',$arrayUpadate);
    }
    public function test()
    {

        $user = Auth::user();
        $id = DB::table('users')->where('email', $user['email'])->value('id');
        dd($id);

    }
    public function phpinfo()
    {
        return view('phpinfo');
    }
}