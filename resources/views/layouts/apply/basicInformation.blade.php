@extends('layouts.apply.apply')
@section('title')
    {{Lang::get('basicInformation.Title')}}
@endsection
@section('r-content')

    <div class="div-contents">
        <div class="div-note-info">
            <h4 class="note-title">{{Lang::get('basicInformation.WarmTips')}}</h4>
            <p>..., please pay notice CSCIE notifications.</p>
            <p>请仔细填写，并留意系统通知。</p>
        </div>
        <div class="div-form"> 
            <form action="{{route('PostBasicsInfo')}}" method="post">
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="" class="label-item">{{Lang::get('basicInformation.Surname')}}</label>
                    <div class="div-item">
                        <input type="text" class="input-item" id="surname" name="surname" value="@isset($UserBasics){{$UserBasics->surname}}@endisset">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="label-item">{{Lang::get('basicInformation.FirstName')}}</label>
                    <div class="div-item">
                        <input type="text" class="input-item" id="first_name" name="first_name" value="@isset($UserBasics){{$UserBasics->first_name}}@endisset">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="label-item">{{Lang::get('basicInformation.ChineseName')}}</label>
                    <div class="div-item">
                        <input type="text" class="input-item" id="chinese_name" name="chinese_name" value="@isset($UserBasics){{$UserBasics->chinese_name}}@endisset">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="label-item">{{Lang::get('basicInformation.PhoneNumber')}}</label>
                    <div class="div-item">
                        <input type="text" class="input-item" id="phone" name="phone" value="@isset($UserBasics){{$UserBasics->phone}}@endisset">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="label-item">{{Lang::get('basicInformation.Gender')}}</label>
                    <div class="div-item">

                        <input type="radio" class="radio-item" name="gender" value="1" @isset($UserBasics)@if($UserBasics->gender == "1") checked @endif @endisset><span class="span-item">{{Lang::get('basicInformation.Male')}}</span>
                        <input type="radio" class="radio-item" name="gender" value="2" @isset($UserBasics)@if($UserBasics->gender == "2") checked @endif @endisset><span class="span-item">{{Lang::get('basicInformation.Female')}}</span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="label-item">{{Lang::get('basicInformation.MaritalStatus')}}</label>
                    <div class="div-item">
                        <input type="radio" class="radio-item" name="marital_status" value="1" @isset($UserBasics)@if($UserBasics->marital_status == "1") checked @endif @endisset><span class="span-item">{{Lang::get('basicInformation.Married')}}</span>
                        <input type="radio" class="radio-item" name="marital_status" value="2" @isset($UserBasics)@if($UserBasics->marital_status == "2") checked @endif @endisset><span class="span-item">{{Lang::get('basicInformation.Single')}}</span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="label-item">{{Lang::get('basicInformation.Nationalty')}}</label>
                    <div class="div-item">

                        <select name="nationalty" id="nationalty" class="select-item">

                            <option value="sign" >请选择</option>

                            <option value="004" selected="selected">阿富汗</option>

                            <option value="008">阿尔巴尼亚</option>

                            <option value="012">阿尔及利亚</option>

                            <option value="016">萨摩亚</option>

                            <option value="020">安道尔</option>

                            <option value="024">安哥拉</option>

                            <option value="660">安圭拉</option>

                            <option value="010">南极洲</option>

                            <option value="028">安提瓜和巴布达</option>

                            <option value="032">阿根廷</option>

                            <option value="051">亚美尼亚</option>

                            <option value="533">阿鲁巴</option>

                            <option value="036">澳大利亚</option>

                            <option value="040">奥地利</option>

                            <option value="031">阿塞拜疆</option>

                            <option value="044">巴哈马</option>

                            <option value="048">巴林</option>

                            <option value="050">孟加拉</option>

                            <option value="052">巴巴多斯</option>

                            <option value="112">白俄罗斯</option>

                            <option value="056">比利时</option>

                            <option value="084">伯利兹</option>

                            <option value="204">贝宁</option>

                            <option value="060">百慕大群岛</option>

                            <option value="064">不丹</option>

                            <option value="068">玻利维亚</option>

                            <option value="070">波斯尼亚和黑塞哥维那</option>

                            <option value="072">博茨瓦纳</option>

                            <option value="074">布维岛</option>

                            <option value="076">巴西</option>

                            <option value="086">印度</option>

                            <option value="092">英属维尔京群岛</option>

                            <option value="096">文莱</option>

                            <option value="100">保加利亚</option>

                            <option value="854">布基纳法索</option>

                            <option value="108">布隆迪</option>

                            <option value="384">科特迪瓦</option>

                            <option value="116">柬埔寨</option>

                            <option value="120">喀麦隆</option>

                            <option value="124">加拿大</option>

                            <option value="132">佛得角</option>

                            <option value="136">开曼群岛</option>

                            <option value="140">中非</option>

                            <option value="148">乍得</option>

                            <option value="152">智利</option>

                            <option value="156">中国</option>

                            <option value="158">中国台湾</option>

                            <option value="162">圣诞岛</option>

                            <option value="166">科科斯(基林)群岛</option>

                            <option value="170">哥伦比亚</option>

                            <option value="174">科摩罗</option>

                            <option value="178">刚果共和国</option>

                            <option value="184">库克群岛</option>

                            <option value="188">哥斯达黎加</option>

                            <option value="191">克罗地亚</option>

                            <option value="192">古巴</option>

                            <option value="196">塞浦路斯</option>

                            <option value="203">捷克</option>

                            <option value="408">朝鲜</option>

                            <option value="180">刚果民主共和国</option>

                            <option value="208">丹麦</option>

                            <option value="262">吉布提</option>

                            <option value="212">多米尼克</option>

                            <option value="214">多米尼加</option>

                            <option value="218">厄瓜多尔</option>

                            <option value="818">埃及</option>

                            <option value="222">萨尔多瓦共和国</option>

                            <option value="226">赤道几内亚</option>

                            <option value="232">厄立特里亚</option>

                            <option value="233">爱沙尼亚</option>

                            <option value="231">埃塞俄比亚</option>

                            <option value="234">法罗群岛</option>

                            <option value="238">马尔维纳斯群岛</option>

                            <option value="891">南斯拉夫联盟共和国</option>

                            <option value="242">斐济</option>

                            <option value="246">芬兰</option>

                            <option value="250">法兰斯共和国</option>

                            <option value="254">法属圭亚那</option>

                            <option value="258">法属伯利尼西亚</option>

                            <option value="260">法属南部领土</option>

                            <option value="266">加蓬</option>

                            <option value="270">冈比亚</option>

                            <option value="268">格鲁吉亚</option>

                            <option value="276">德国</option>

                            <option value="288">加纳</option>

                            <option value="292">直布罗陀</option>

                            <option value="300">希腊</option>

                            <option value="304">格陵兰</option>

                            <option value="308">格林纳达</option>

                            <option value="312">瓜德罗普</option>

                            <option value="316">关岛</option>

                            <option value="320">危地马拉</option>

                            <option value="324">几内亚</option>

                            <option value="624">几内亚</option>

                            <option value="328">圭亚那</option>

                            <option value="332">海地</option>

                            <option value="334">赫德岛和麦克唐纳岛</option>

                            <option value="336">梵蒂冈</option>

                            <option value="340">洪都拉斯</option>

                            <option value="344">香港</option>

                            <option value="348">匈牙利</option>

                            <option value="352">冰岛</option>

                            <option value="356">印度</option>

                            <option value="360">印度</option>

                            <option value="364">伊朗</option>

                            <option value="368">伊拉克</option>

                            <option value="372">爱尔兰</option>

                            <option value="376">以色列</option>

                            <option value="380">意大利</option>

                            <option value="388">牙买加</option>

                            <option value="392">日本</option>

                            <option value="400">约旦</option>

                            <option value="398">哈萨克斯坦</option>

                            <option value="404">肯尼亚</option>

                            <option value="296">基里巴斯</option>

                            <option value="414">科威特</option>

                            <option value="417">吉尔吉斯共和国</option>

                            <option value="418">老挝</option>

                            <option value="428">拉脱维亚</option>

                            <option value="422">黎巴嫩</option>

                            <option value="426">莱索托</option>

                            <option value="430">利比里亚</option>

                            <option value="434">利比亚</option>

                            <option value="438">列支敦士登</option>

                            <option value="440">立陶宛</option>

                            <option value="442">卢森堡</option>

                            <option value="446">澳门</option>

                            <option value="450">马达加斯加</option>

                            <option value="454">马拉维</option>

                            <option value="458">马来西亚</option>

                            <option value="462">马尔代夫</option>

                            <option value="466">马里</option>

                            <option value="470">马耳他</option>

                            <option value="584">玛绍尔群岛共和国</option>

                            <option value="474">马提尼克</option>

                            <option value="478">毛里塔尼亚</option>

                            <option value="480">毛里求斯</option>

                            <option value="175">马约特</option>

                            <option value="484">墨西哥</option>

                            <option value="583">密克罗尼西亚</option>

                            <option value="492">摩纳哥</option>

                            <option value="496">蒙古</option>

                            <option value="500">蒙特塞拉特</option>

                            <option value="504">摩洛哥</option>

                            <option value="508">莫桑比克</option>

                            <option value="104">缅甸</option>

                            <option value="516">纳米比亚</option>

                            <option value="520">瑙鲁</option>

                            <option value="524">尼泊尔</option>

                            <option value="528">荷兰</option>

                            <option value="530">荷属安的列斯</option>

                            <option value="540">新喀里多尼亚</option>

                            <option value="554">新西兰</option>

                            <option value="558">尼加拉瓜</option>

                            <option value="562">尼日尔</option>

                            <option value="566">尼日利亚</option>

                            <option value="570">纽埃</option>

                            <option value="574">诺福克岛</option>

                            <option value="580">马里</option>

                            <option value="578">挪威</option>

                            <option value="512">阿曼</option>

                            <option value="586">巴基斯坦</option>

                            <option value="585">贝劳共和国</option>

                            <option value="591">巴拿马</option>

                            <option value="598">巴布亚新几内亚</option>

                            <option value="600">巴拉圭</option>

                            <option value="604">秘鲁</option>

                            <option value="608">菲律宾</option>

                            <option value="612">皮特凯恩岛</option>

                            <option value="616">波兰</option>

                            <option value="620">葡萄牙</option>

                            <option value="630">波多黎各</option>

                            <option value="634">卡塔尔</option>

                            <option value="410">韩民</option>

                            <option value="498">摩尔多瓦</option>

                            <option value="638">留尼汪</option>

                            <option value="642">罗马尼亚</option>

                            <option value="643">俄罗斯联邦</option>

                            <option value="646">卢旺达</option>

                            <option value="654">圣赫勒拿</option>

                            <option value="659">圣基茨和尼维斯</option>

                            <option value="662">圣卢西亚</option>

                            <option value="666">圣皮埃尔和密克隆</option>

                            <option value="670">圣文森特和格林纳丁斯</option>

                            <option value="882">萨摩亚</option>

                            <option value="674">圣马力诺</option>

                            <option value="678">圣多美和普林西比</option>

                            <option value="682">沙特阿拉伯</option>

                            <option value="686">塞内加尔</option>

                            <option value="381">黑山</option>

                            <option value="690">塞舌尔</option>

                            <option value="694">塞拉利昂</option>

                            <option value="702">新加坡</option>

                            <option value="703">斯洛伐克</option>

                            <option value="705">斯洛文尼亚</option>

                            <option value="090">所罗门群岛</option>

                            <option value="706">马里</option>

                            <option value="710">南非</option>

                            <option value="239">南乔治岛和南桑德韦奇岛</option>

                            <option value="724">西班牙</option>

                            <option value="144">斯里兰卡</option>

                            <option value="736">苏丹</option>

                            <option value="740">苏里南</option>

                            <option value="744">斯瓦尔巴群岛</option>

                            <option value="748">斯威士兰</option>

                            <option value="752">瑞典</option>

                            <option value="756">瑞士</option>

                            <option value="760">叙利亚</option>

                            <option value="762">塔吉克斯坦</option>

                            <option value="764">泰王国</option>

                            <option value="807">马其顿</option>

                            <option value="211">南苏丹共和国</option>

                            <option value="374">巴勒斯坦</option>

                            <option value="626">东帝汶</option>

                            <option value="768">多哥</option>

                            <option value="772">托克劳</option>

                            <option value="776">汤加</option>

                            <option value="780">特立尼达和多巴哥</option>

                            <option value="788">突尼斯</option>

                            <option value="792">土耳其</option>

                            <option value="795">土库曼斯坦</option>

                            <option value="796">特克斯和凯科斯群岛</option>

                            <option value="798">图瓦卢</option>

                            <option value="581">美属太平洋各群岛</option>

                            <option value="800">乌干达</option>

                            <option value="804">乌克兰</option>

                            <option value="784">阿拉伯联合酋长国</option>

                            <option value="826">爱尔兰</option>

                            <option value="834">坦桑尼亚</option>

                            <option value="840">美国</option>

                            <option value="850">美属维尔京群岛</option>

                            <option value="858">乌拉圭</option>

                            <option value="860">乌兹别克斯坦</option>

                            <option value="548">瓦努阿图</option>

                            <option value="862">委内瑞拉</option>

                            <option value="704">越南</option>

                            <option value="876">瓦利斯和富图纳群岛</option>

                            <option value="732">西撒哈拉</option>

                            <option value="887">也门</option>

                            <option value="894">赞比亚</option>

                            <option value="716">津巴布韦</option>

                        </select>
                        @isset($UserBasics)
                            <script>
                                $(document).ready(
                                        $("#nationalty option[value={{$UserBasics->nationalty}}]").attr("selected", "selected")
                                )
                            </script>
                        @endisset
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="label-item">{{Lang::get('basicInformation.BirthPlace')}}</label>
                    <div class="div-item">
                        <input type="text" class="input-item" id="birth_place" name="birth_place" value="@isset($UserBasics){{$UserBasics->birth_place}}@endisset">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="label-item">{{Lang::get('basicInformation.BirthDate')}}</label>
                    <div class="div-item">
                        <input type="date" name="birth_date" id="birth_date" class="date-item" value="@isset($UserBasics){{$UserBasics->birth_date}}@endisset"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="label-item">{{Lang::get('basicInformation.HealthCondition')}}</label>
                    <div class="div-item">
                        <input type="text" class="input-item" id="health_condition" name="health_condition" value="@isset($UserBasics){{$UserBasics->health_condition}}@endisset">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="label-item">{{Lang::get('basicInformation.HomeInstitution')}}</label>
                    <div class="div-item">
                        <input type="text" class="input-item" id="home_institution" name="home_institution" value="@isset($UserBasics){{$UserBasics->home_institution}}@endisset">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="label-item">{{Lang::get('basicInformation.NativeLanguage')}}</label>
                    <div class="div-item">
                        <input type="text" class="input-item" id="native_language" name="native_language" value="@isset($UserBasics){{$UserBasics->native_language}}@endisset">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="label-item">{{Lang::get('basicInformation.Religion')}}</label>
                    <div class="div-item">
                        <input type="text" class="input-item" id="religion" name="religion" value="@isset($UserBasics){{$UserBasics->religion}}@endisset">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="label-item">{{Lang::get('basicInformation.Speciality_&_Hobby')}} </label>
                    <div class="div-item">
                        <input type="text" class="input-item" id="speciality_hobby" name="speciality_hobby" value="@isset($UserBasics){{$UserBasics->speciality_hobby}}@endisset">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="label-item">{{Lang::get('basicInformation.StudyPeriod')}}</label>
                    <div class="div-item">
                        <select name="study_period" id="" class="select-item">
                            <option value="00"  @isset($UserBasics)@if($UserBasics->study_period == "00") selected @endif @endisset>请选择</option>
                            <option value="01" @isset($UserBasics)@if($UserBasics->study_period == "01") selected @endif @endisset>一学期</option>
                            <option value="02" @isset($UserBasics)@if($UserBasics->study_period == "02") selected @endif @endisset>二学期</option>
                            <option value="03" @isset($UserBasics)@if($UserBasics->study_period == "03") selected @endif @endisset>三学期</option>
                            <option value="04" @isset($UserBasics)@if($UserBasics->study_period == "04") selected @endif @endisset>四学期</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="label-item">{{Lang::get('basicInformation.ProgramCategory')}}</label>
                    <div class="div-item">
                        <select name="program_category" id="" class="select-item">
                            <option value="00" @isset($UserBasics)@if($UserBasics->program_category == "00") selected @endif @endisset>请选择</option>
                            <option value="01" @isset($UserBasics)@if($UserBasics->program_category == "01") selected @endif @endisset>自费进修</option>
                            <option value="02" @isset($UserBasics)@if($UserBasics->program_category == "02") selected @endif @endisset>本科</option>
                            <option value="03" @isset($UserBasics)@if($UserBasics->program_category == "03") selected @endif @endisset>硕士</option>
                            <option value="04" @isset($UserBasics)@if($UserBasics->program_category == "04") selected @endif @endisset>博士</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="label-item">{{Lang::get('basicInformation.FinancialSupport')}}</label>
                    <div class="div-item">
                        <input type="radio" class="radio-item" name="financial_support" value="1" @isset($UserBasics)@if($UserBasics->financial_support == "1") checked @endif @endisset><span class="span-item">奖学金</span>
                        <input type="radio" class="radio-item" name="financial_support" value="2" @isset($UserBasics)@if($UserBasics->financial_support == "2") checked @endif @endisset><span class="span-item">自费</span>

                        <input type="radio" class="radio-item" name="financial_support" value="3" @isset($UserBasics)@if($UserBasics->financial_support == "3") checked @endif @endisset><span class="span-item">其他</span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="label-item">{{Lang::get('basicInformation.PassportNumber')}}</label>
                    <div class="div-item">
                        <input type="text" class="input-item" id="passport_number" name="passport_number" value="@isset($UserBasics){{$UserBasics->passport_number}}@endisset">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="label-item">{{Lang::get('basicInformation.PassportExpiredTime')}}</label>
                    <div class="div-item">
                        <input type="date" name="passport_expired_time" id="passport_expired_time" class="date-item" value="@isset($UserBasics){{$UserBasics->passport_expired_time}}@endisset"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="label-item">{{Lang::get('basicInformation.VisaCategory')}}</label>
                    <div class="div-item">
                        <select name="visa_category" id="visa_category" class="select-item">
                            <option value="00" @isset($UserBasics)@if($UserBasics->visa_category == "00") selected @endif @endisset>请选择</option>
                            <option value="01" @isset($UserBasics)@if($UserBasics->visa_category == "01") selected @endif @endisset>学习签证</option>
                            <option value="02" @isset($UserBasics)@if($UserBasics->visa_category == "02") selected @endif @endisset>定居签证</option>
                            <option value="03" @isset($UserBasics)@if($UserBasics->visa_category == "03") selected @endif @endisset>旅游签证</option>
                            <option value="04" @isset($UserBasics)@if($UserBasics->visa_category == "04") selected @endif @endisset>访问签证</option>
                        </select>
                    </div>
                </div>

                <div class="form-btn">
                    {{--<button type="submit" class="btn-pre">&laquo; {{Lang::get('basicInformation.Previous')}}</button>--}}
                    <button type="submit" class="btn-next btn-active" @isset($UserBasics)disabled @endisset>@isset($UserBasics){{Lang::get('basicInformation.NotEmpty')}}@endisset @empty($UserBasics){{Lang::get('basicInformation.Continue')}}@endempty&raquo;</button>
                </div>


            </form>
        </div>
    </div>
@endsection