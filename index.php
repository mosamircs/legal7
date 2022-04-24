<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Legal Clinic</title>
    <link rel="stylesheet" href="css/all.min.css"  />
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.16/css/intlTelInput.css" integrity="sha512-gxWow8Mo6q6pLa1XH/CcH8JyiSDEtiwJV78E+D+QP0EVasFs8wKXq16G8CLD4CJ2SnonHr4Lm/yY2fSI2+cbmw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/rome.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <!-- welcom page-->
        <section id="welcome-page" class="layer">
        <form action="register.php" id= "register_user" class="needs-validation" novalidate>
                <div class="logo-box">
                    <div class="container">
                        <div class="d-flex justify-content-center">
                            <div class="image">
                                <img src="images/logo.svg" alt="the legal clinic logo" srcset="" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="welcome-content" id="main-div">
                    <div class="container">
                        <div class="form-check form-switch" style="display: none;">
                            <div class="switch">
                                <input id="language-toggle" class="check-toggle check-toggle-round-flat" type="checkbox">
                                <label for="language-toggle"></label>
                                <span class="on">AR</span>
                                <span class="off">EN</span>
                              </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6  col-md-6 col-sm-12 my-auto mx-auto">
                                <div class="welcome-msg text-center">
                                    <h2>مرحبا بك</h2>
                                    <h3>اسس شركتك الان</h3>
                                    <p>بنسھل علیك اجراءات تأسیس شركتك الناشئة
                                        بإتباعك للخطوات التالیه ستحصل على اوراق شركتك القانونیة
                                        كاملة<br>
                                        كل اللي علیك استكمال نموذجنا البسیط واختار نوع الشركة
                                        الذي تریده.<br>
                                        یستغرق الامر بضع دقائق فقط من وقتك لتأسیس شركتك عبر
                                        الانترنت!</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 welcome-form" style="text-align: -webkit-right;">
                                <div class="card  mb-3">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="header-img">
                                                    <img src="images/Login Image.svg" alt="login image" srcset="" width="100%">
                                                </div>
                                            </div>
                                            <div class="col-6 my-auto">
                                                <div class="header-content">
                                                    <h3>مرحبا بك</h3>
                                                    <p>برجاء تسجيل الدخول</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">

                                            <div class="mb-3">
                                                <label for="username" class="form-label">اسم المستخدم</label>
                                                <input type="text" class="form-control" id="username" name = "username" dir="rtl">
                                                
                                                <div id="error-userName" class="error">يجب ادخال اسم المستخدم</div>
                                            </div>
                                            <div class="mb-3">
                                              <label for="email" class="form-label">البريد الالكتروني</label>
                                              <input type="email" class="form-control" id="email" aria-describedby="emailHelp"  name = "email" placeholder="example@ex.com">
                                              <div id="error-email" class="error">يجب ادخال بريد الكترونى صالح</div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="phone" class="form-label" >رقم الهاتف</label> 
                                                    <input id="phone" type="tel" class="form-control"name = "phone" inputmode="tel">
                                                    <div id="error-phone" class="error">يجب ادخال رقم هاتف صالح</div>
                                                </div>
                                            <button type="button" class="btn btn-primary" id="btnSubmit" onclick="changeLayer(1)">التالي</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="turn-en">
                        <div class="cir-4">
                            <button type="button"></button>
                            <!-- <img src="images/eng.svg" alt="" srcset=""> -->
                        </div>
                    </div>
                </div>
        </section>
        <!-- <div class="page-wrapper"> -->
        <!--company types-->
        <div class="container pro-bar" id="pro-bar">
            <!-- operations progress bar -->
            <div class="progress-container" dir="rtl">
                <div class="progress" id="progress"></div>
                <div class="circle active"><span>1</span></div>
                <div class="circle"><span>2</span></div>
                <div class="circle"><span>3</span></div>
                <div class="circle"><span>4</span></div>
                <div class="circle"><span>5</span></div>
            </div>
            <div class="operations-container" dir="rtl">
                <div class="type">
                    <p>نوع الشركه</p>
                </div>
                <div class="type spec-type">
                    <p>بيانات الشركه</p>
                </div>
                <div class="type" >
                    <p id="mang-types"></p>
                </div>
                <div class="type">
                    <p>بيانات المديرين</p>
                </div>
                <div class="type">
                    <p>الموعد النهائي</p>
                </div>
            </div>
        </div>
        <section >
         <form action="thanks.php" id="form" method="POST" class="needs-validation" enctype = "multipart/form-data" novalidate>
         <input type="hidden" name="userid" id="userid" value="">
                <div class="main-content" id="main" >
                    <div class="container">
                        <!-- layer--1 money & people -->
                        <div  class="layer">
                            <div class="buttons-tog"> 
                                <button class="btn selected" id="btn-money" type="button">شركات الاموال</button>
                                <button class="btn notseleted" id="btn-people" type="button">شركات الأشخاص</button>
                            </div>
                            <div  id="choice-Money">
                                <div class="pref text-center">
                                    <p>لھا كیان قانوني منفصل عن أصحابھا
                                    <br>یكون لكل شریك/مساھم مسئولیة محدودة – محدودة بقیمة
                                        الحصص/الاسهم التي یملكھا       
                                    </p>
                                </div>
                                <div class="choice d-flex justify-content-center flex-column align-items-end">
                                    <div class="form-check d-flex flex-row-reverse mt-3">
                                        <div>
                                            <input class="form-check-input" type="radio"  name="company_type"  id="exampleRadios1" value="LimitedLiabilityCompany" onclick="checkboxSelection()"  required></div>
                                        <div class="mr-3">
                                            <label class="form-check-label" for="exampleRadios1">
                                                <h2>شركة ذات مسئولية محدودة</h2>
                                                <p>الشركة ذات المسؤولیة المحدودة ھي أقل الشركات تعقیدًا
                                                    .والاكثر توصیة بھا للشركات الناشئة<br>
                                                    ھي شركة بھا مساھمان اثنان على الاقل سواء كانوا مصریین أو
                                                   أجانب، طبیعیین أو اعتباریین (شركات). <br>تقتصر مسؤولیة  
                                                    المساھمین على قیمة حصصھم. لا یوجد حد أدنى لرأس المال
                                                    المطلوب لشركة ذات مسؤولیة محدودة</p>
                                            </label>
                                        </div>
                                        <div class="mr-8">
                                            <button class="btn down" id="down-1" type="button" onclick="download('شركة ذات مسئولية محدودة');" style="display: none;">المستندات المطلوبة</button>
                                        </div> 
                                    </div>
                                      <div class="form-check d-flex flex-row-reverse mt-3">
                                        <div><input class="form-check-input" type="radio"  name="company_type" id="exampleRadios2" value="JointStockIncorporation" onclick="checkboxSelection()" required></div>
                                        <div class="mr-3">
                                            <label class="form-check-label" for="exampleRadios1">
                                                <h2>شركة مساهمة مصري</h2>
                                                <p>شركة المساھمة ھي شركة بھا ثلاثه مساھمین على الاقل سواء
                                                    كانوا مصریین أو أجانب، طبیعیین أو اعتباریین (شركات).
                                                    <br>تقتصر مسؤولیة المساھمین على قیمة أسھمھم
                                                    الحد األدنى لرأس المال ھو ٢٥٠ ألف جنيه مصري.<br> خلال
                                                    مرحلة التأسیس، یتم دفع ١٠٪ مع زیادة تحدث في غضون ثلاثه
                                                    اشهر. یتم إیداع المبلغ المتبقي في غضون خمس سنوات<br>یجب أن تدار من قبل مجلس إدارة، والذي یجب أن یتألف من
                                                    ثلاثه (٣) أعضاء على الاقل من أي جنسیة</p>
                                            </label>
                                        </div>
                                        <div class="mr-8">
                                            <button class="btn down"  id="down-2" style="display: none;" onclick="download('شركة المساهمة');"  type="button">المستندات المطلوبة</button>
                                        </div>
                                    </div>
                                      <div class="form-check d-flex flex-row-reverse mt-3">
                                        <div><input class="form-check-input" type="radio"  name="company_type" id="exampleRadios3" value="OPCrequirements" onclick="checkboxSelection()" required></div>
                                        <div class="mr-3">
                                            <label class="form-check-label" for="exampleRadios1">
                                                <h2>شركة شخص واحد ذات مسئولية محدودة</h2>
                                                <p>شركة الشخص الواحد ھي في الاساس شركة ذات مؤسس
                                                منفرد، سواء كان مصریا أو أجنبیًا، شخصا طبیعیًا أو اعتباري</p> 
                                            </label>
                                        </div>
                                        <div class="mr-8">
                                            <button class="btn down"  id="down-3" style="display: none;" onclick="download('شركة الشخص الواحد – ذ.م.م');"  type="button">المستندات المطلوبة</button>
                                        </div>
                                    </div>
                                    <div class="invalid-feedback">يجب اختيار شركه</div>
                                </div>
                            </div>
                            <div  id="choice-people" style="display: none;">
                                    <div class="pref mt-2 mb-2 text-center">
                                        <p>لیس لھا كیان قانوني منفصل عن أصحابھا
                                            یتحمل كل شریك مسؤولیة غیر محدودة وھو مسؤول شخصیًا
                                            عن جمیع دیون الشركة<br>
                                            لا یجوز للشریك نقل حصته في الشركة دون موافقة جمیع
                                            الشركاء</p>
                                    </div>
                                    <div class="choice d-flex justify-content-center flex-column align-items-end">
                                        <div class="form-check d-flex flex-row-reverse mt-3">
                                            <div><input class="form-check-input" type="radio" name="company_type" id="exampleRadios4" value="SoleEntity" onclick="checkboxSelection()"  required></div>
                                            <div class="mr-3">
                                                <label class="form-check-label" for="exampleRadios4">
                                                    <h2>المنشاة الفردية</h2>
                                                    <p>یمتلك المنشأة الفردیة شخص واحد "طبیعي" وتسمى على اسم صاحبھا<br> ولا
                                                            یجوز ان یدخل في المنشأة الفردیة أي شركاء إضافیین باستثناء صاحب
                                                        المنشأة <br>والذي یكون مسئول عن إدارة المنشأة بشكل كامل وتكون مسئولیته
                                                        تجاه المنشأة مسئولیة غیر محدودة<br>
                                                       <span style="color: #041851;">ملحوظة: لا یجوز تحویل المنشأة الفردیة الى أي نوع اخر من الشركات</span></p>
                                                </label>
                                            </div>
                                            <div class="mr-8">
                                                <button class="btn down" id="down-4" type="button" onclick="download('منشأة فردية');" style="display: none;">المستندات المطلوبة</button>
                                            </div> 
                                        </div>
                                          <div class="form-check d-flex flex-row-reverse mt-3">
                                            <div><input class="form-check-input" type="radio"  name="company_type" id="exampleRadios5" value="Generalpartnership" onclick="checkboxSelection()" required></div>
                                            <div class="mr-3">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    <h2>شركة التضامن</h2>
                                                    <p>ھي أحد شركات الاشخاص وتتكون من شخصین أو أكثر
                                                        (شركاء) ویعاملون معاملة التاجر <br>
                                                        ویتم تسمیتھا باسم شركائھا،وتليها كلمه شركاء او CO ويجب ان يكون اسمها باسم شريك حقيقى<br>
                                                        وحال فى الشركه كما تكون المسؤوليه على الشركاء مسؤوليه شخصيه وليست فى حدود<br> 
                                                        مساهمه كل شريك فى راس مال الشركه مثلما هو الحال فى شركات الاموال
                                                    </p>
                                                </label>
                                            </div>
                                            <div class="mr-8">
                                                <button class="btn down"  id="down-5" style="display: none;" onclick="download('شركة التضامن');"  type="button">المستندات المطلوبة</button>
                                            </div>
                                        </div>
                                          <div class="form-check d-flex flex-row-reverse mt-3">
                                            <div><input class="form-check-input" type="radio"  name="company_type" id="exampleRadios6" value="LimitedPartnership" onclick="checkboxSelection()" required></div>
                                            <div class="mr-3">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    <h2>شركة التوصية البسيطة</h2>
                                                    <p>ھي أحد شركات الاشخاص وتتكون من شخصین أو أكثر (شركاء)<br>
                                                        وینقسم الشركاء في ھذا النوع من الشركات الى نوعین "شركاء
                                                        متضامنین" ویعاملون معاملة التاجر <br>
                                                          ویتم تسمیتھا باسم احد او كل الشركاء المتضمنين،وتليها كلمه شركاء او CO ويجب ان يكون اسمها
                                                          <br> باسم شريك حقيقى وحال فى الشركه كما تكون المسؤوليه على الشركاء مسؤوليه شخصيه
                                                         <br> وليست محدوده على حسب مساهمه كل شريك فى رأس مال الشركه وتتضمن نوع اخر من الشركاء 
                                                         <br>وهم " الموصيين" والشريك الموصى لا يكون للشركاء الموصيين الحق فى اداره الشركه ، ولكن  
                                                         <br>تقتصر مسؤوليه هؤلاء الشركاء على قدر مساهمتهم فى راس مال الشركه ولذلك يتمتع الشريك 
                                                         <br> الموصى بمسؤوليه محدوده مثلما هو الحال فى شركات الاموال.
                                                        </p>
                                                </label>
                                            </div>
                                            <div class="invalid-feedback">يجب اختيار شركه</div>
                                            <div class="mr-8">
                                                <button class="btn down"  id="down-6" style="display: none;" onclick="download('شركة التوصية البسيطه');" type="button">المستندات المطلوبة</button>
                                            </div>
                                        </div>
                                        </div>
                            </div>
                        </div>
                        <!-- layer--2 chose name -->
                        <div  class="layer">
                            <div class="comp-name pt-4">
                                <h3>اقترح اسم لشركتك</h3>
                                <div id="form-in" dir="rtl">
                                    <div class="row g-3 justify-content-evenly pt-3" id="parent-el">
                                        <div class="col-md-4">
                                          <label for="inputtext1" class="form-label">الاقتراح الاول</label>
                                          <input type="text" class="form-control lay2" name="company_name[]"  id="inputtext1">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputtext2" class="form-label">الاقتراح الثانى</label>
                                            <input type="text" class="form-control lay2" name="company_name[]" id="inputtext2">
                                          </div>
                                        <div class="col-md-4 align-self-end text-center" >
                                            <button class="btn btn-add" id="btn-add-sug" type="button">اضافه اقتراحات</button>
                                            <!-- <button class="btn btn-outline-danger" id="btn-delete-sug">حذف اقتراحات</button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comp-info pt-4">
                                <h3>معلومات اساسيه</h3>
                                <div class="form-in" dir="rtl">
                                    <div class="row g-3 justify-content-start pt-3">
                                        <div class="col-md-4">
                                          <label for="floatingTextarea" class="form-label">نشاط الشركه</label>
                                          <!-- <input type="text" class="form-control"  required> -->
                                          <textarea class="form-control lay2" placeholder="نشاط الشركه"  name="company_activity" id="floatingTextarea"></textarea>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="floatingTextarea2" class="form-label">عنوان الشركه</label>
                                            <!-- <input type="text" class="form-control" height="72px"  aria-label="Large" aria-describedby="inputGroup-sizing-sm" required> -->
                                            <textarea class="form-control lay2" placeholder="عنوان الشركه" name="company_address"  id="floatingTextarea2"></textarea>
                                        </div>
                                    </div>
                                    <div class="row g-3 justify-content-start pt-3 pb-3">
                                        <div class="col-md-4">
                                          <label for="inputtext3" class="form-label">قيمه رأس المال</label>
                                          <input type="text" class="form-control lay2" id="inputtext3"  name="capital_value" onkeyup="arabicValue(inputtext3)"></input>
                                          <div id="soloComp"><span >راس المال يجب الا يقل عن 50 الف جنيها</span></div>
                                          <div id="partCompMoney"><span >راس المال يجب الا يقل عن 250 الف جنيها</span></div>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- <label for="inputtext4" class="form-label" style="display: none;">قيمه السهم</label> -->
                                            <label for="inputtext4" class="form-label" id="valueCor">قيمه الحصه</label>
                                            <input type="text" class="form-control lay2" id="inputtext4" name="capital_share" onkeyup="arabicValue(inputtext4)"></input>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- layer--3 parts info -->
                        <div  class="layer">
                            <div class="count">
                                <div class="col-sm-3" dir="rtl">
                                    <label class="visually-hidden" for="specificSizeSelect">Preference</label>
                                    <select class="form-select" id="specificSizeSelect">
                                        <option  disabled selected class="OPT-padding" id="allCompOption">اختر عدد المديرين</option>
                                        <!-- <option  disabled id="partCompOption" class="OPT-padding">اختر عدد المساهمين</option> -->
                                    </select>
                                   <div class="oneComp">
                                   <div style="text-align: center ;background-color: var(--main-color);
                                    color: var(--bg-main-color);height: 50px;border-radius: 18px;display: flex;" > 
                                    <p style="margin: auto;padding-right: 1rem;padding-left: 1rem;font-weight 400;">بيانات المالك</p>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="oneComp" id="oneCompDiv">
                                <div class="row g-3 justify-content-between pt-3" dir="rtl" data-id="item_0">
                                <div class="col-md-4">
                                  <label for="inputtext1" class="form-label mang" id="mangName">اسم المالك</label>
                                  <input type="text" class="form-control mangSolo mangOneInfo" id="name" name="malek_name" >
                                </div>
                                <div class="col-md-4">
                                  <label for="inputtext1" class="form-label mang">جنسيه المالك</label>
                                    <input type="text" class="form-control mangSolo mangOneInfo" id="nation" name="malek_nationality">
                                </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="formFileMultiple" class="form-label">اضافه البطاقه الشخصية</label>
                                        <input class="form-control mangSolo mangOneInfo" name="malek_personal_id" type="file" id="id" accept="image/png, image/gif, image/jpeg">
                                      </div>
                                    <div class="col-md-4 x-last align-self-center">
                                        <button class="btn btn-outline-danger" type="reset" id="partCompDel">حذف المالك</button>
                                    </div>
                                 <hr>
                            </div>
                            </div>
                            <div id="part-form" class="container"></div>
                            <div id="error-manger" class="error"></div>
                        </div>
                        <!-- layer---4 mangers names -->
                        <div  class="layer">
                            <div class="mang-names pt-4">
                                <div class="row g-3 justify-content-center" dir="rtl">
                                    <div class="col-md-6">
                                      <label for="inputtextAdd" class="form-label" id="partName">ادخل اسماء المديرين</label>
                                      <!-- <label for="inputtextAdd" class="form-label" value="Amsterdam,Washington,Sydney,Beijing,Cairo" data-role="tagsinput" style="display: none;">ادخل اسماء المساهمين</label> -->
                                      <input type="text" class="form-control" id="autocompleteinput" autocomplete="additional-name">
                                      <div id="error-mangerAdd" class="error"></div>
                                    </div>
                                    <div class="col-3 " style="text-align: center;padding-top: 2.1rem;">
                                        <button class="btn bttn-add" style="width: 10rem;" id="btn-add-mang" type="button">اضافه</button>
                                    </div>
                                </div>
                            </div>
                            <div class="mang-details pt-4 pb-4" dir="rtl" >
                                <div class="row" id="card-newAdd">
    
                                </div>
                            </div>
                        </div>
                        <!-- layer---5 calender -->
                        <div class="layer">
                            <div class="d-flex justify-content-center">
                                <div class="down-paper mt-5 text-center">
                                    <button  onclick = "download_docx('incorporation-poa-amended.docx');" type  ="button"class="btn btn-down-paper"><img src="images/Vector (1).svg" >برجاء تحميل التوكيل وملا البيانات</button>
                                        <h6 class="pt-3 sec">برجاء تحديد موعدالشهر العقاري لتوقيع التوكيل</h6>
                                        <div>
                                        <input type="text" class="form-control mx-auto mb-3" id="result" placeholder="Select date" name= "signdate" readonly required>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="inline_cal"></div>
                                                </div>
                                            </div>
                                        </div>
                                    <p class="sec pb-4 pt-4">المواعيد متاحة من الساعة 9:00 صباحًا حتى 1:00 ظهرًا</p>
                                </div>
                            </div>
                        </div>
                        <!-- buttons change-layers -->
                         <div id="but-chose">
                          <div class="btn-chose d-flex justify-content-center pb-3 pt-3">
                              <button class="btn next mr-3" id="next-1" type="button" onclick="changeLayer(1)">التالي</button>
                              <button class="btn pre " id="prev-1" type="button" onclick="changeLayer(-1);arrayEle = []; arrayNames = [];">السابق</button>
                          </div>
                         </div>
                    </div>
                </div>
            </form>
        </section>
    <img id="loadingimage" src="images/loading.gif" style ="display:none;"/>
    <div id="area"style ="display:none;" ></div>
    <script src="js/jquery.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.16/js/intlTelInput.min.js" integrity="sha512-Po9nSdYOcWIcoADdRjkAbRYPpR8OHjxzA/3RDUERZcDewTLzRTxbG4bUX7Sr7lVEcO3wTCzphdOBWgNFKVmxaA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/rome.js"></script>

    <script src="js/main.js?t=<?php echo time();?>"></script>  
    <script>
        //download files.pdf
         function download(filename) {
            setTimeout(function () {
                DownloadFile(`${filename}.pdf`);
            }, 1000);
        };
        function download_docx(filename) {
            setTimeout(function () {
                DownloadFile(`${filename}.docx`);
            }, 1000);
        };
        function DownloadFile(fileName) {
            //Set the File URL.
            var url = "files/" + fileName;
            //Create XMLHTTP Request.
            var req = new XMLHttpRequest();
            req.open("GET", url, true);
            req.responseType = "blob";
            req.onload = function () {
                //Convert the Byte Data to BLOB object.
                var blob = new Blob([req.response], { type: "application/octetstream" });
                //Check the Browser type and download the File.
                var isIE = false || !!document.documentMode;
                if (isIE) {
                    window.navigator.msSaveBlob(blob, fileName);
                } else {
                    var url = window.URL || window.webkitURL;
                    link = url.createObjectURL(blob);
                    var a = document.createElement("a");
                    a.setAttribute("download", fileName);
                    a.setAttribute("href", link);
                    document.body.appendChild(a);
                    a.click();
                    document.body.removeChild(a);
                }
            };
            req.send();
        };
</script> 
<script>
    $(document).on('click','#btnSubmit',function(e){
        var serialized_data = $("#register_user").serialize(); 
        $.ajax({
            url: 'register.php',
            type: 'post',
            data: serialized_data,
            success:function(response){
                document.getElementById("userid").value = response.id;
            }
        });
    });
</script>
<script>
// function Load()
// {
//     var xmlhttp;
//     var url;

//     if (window.XMLHttpRequest)
//     {// code for IE7+, Firefox, Chrome, Opera, Safari
//         xmlhttp=new XMLHttpRequest();
//     }

//     xmlhttp.onreadystatechange=function()
//     {
//         if (xmlhttp.readyState==4 && xmlhttp.status==200)
//         {           
//             //(optional)do something with response: xmlhttp.responseText
//             document.getElementById("area").innerHTML=xmlhttp.responseText;
//             document.getElementById("loadingimage").src = "loading.gif";
//         }
//     }

//     xmlhttp.open("POST","thanks.php",true);
//     xmlhttp.send();
// }
</script>
</body>
</html>