<?php
error_reporting(0);
@ini_set('display_errors', 0);
require_once("header.php");
require_once ("database.php");
$database_instance = Database::getInstance();
$connection = $database_instance->getConnection(); 
if(isset($_GET["id"])){
    $id = $_GET['id'];
}
global $managers_array;
global $shareholders_array;
$user = "SELECT * FROM users WHERE id = $id";
$result_user = mysqli_query($connection, $user);
$row_user = mysqli_fetch_assoc($result_user);

$company = "SELECT * from companies where user_id = $id";
$result_company = mysqli_query($connection, $company);
$row_company = mysqli_fetch_assoc($result_company);
//$company_names = $row_company["company_name"];
$company_names = json_decode($row_company["company_name"]);
// echo "<pre>";
// var_dump($row_company);
// echo  "</pre>";

$company_id = "SELECT id from companies where user_id = $id";
$result_company_id = mysqli_query($connection, $company_id);
$row_company_id = mysqli_fetch_assoc($result_company_id);
$company_id = $row_company_id["id"];

$shareholders = "SELECT * from shareholders where company_id= $company_id";
$result_shareholders = mysqli_query($connection, $shareholders);
while($row_shareholders = mysqli_fetch_assoc($result_shareholders)){
    $shareholders_array[] = $row_shareholders;
}
// $row_shareholders = mysqli_fetch_assoc($result_shareholders);

$managers = "SELECT * from managers where company_id= $company_id";
$result_managers = mysqli_query($connection, $managers);
while($row_managers  = mysqli_fetch_assoc($result_managers)){
    $managers_array[] = $row_managers;
}
echo  "<pre>";
//var_dump($row_user);
echo  "</pre>";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Legal Clinic</title>
    <link rel="stylesheet" href="css/all.min.css"  />
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.16/css/intlTelInput.css" integrity="sha512-gxWow8Mo6q6pLa1XH/CcH8JyiSDEtiwJV78E+D+QP0EVasFs8wKXq16G8CLD4CJ2SnonHr4Lm/yY2fSI2+cbmw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="css/rome.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <!-- welcom page-->
        <section id="welcome-page" class="layer">
        <form action="" id= "register_user" class="needs-validation" novalidate>
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
                                    <h3>ابدا شركتك الان</h3>
                                    <p>نسهل عليك دمج عملك على الإنترنت. تضمن عمليتنا خطوة بخطوة حصولك على شركة دقيقة وفي الوقت المناسب. ما عليك سوى اتباع نموذجنا البسيط واختيار نوع الشركة الذي تريده. يستغرق الأمر بضع دقائق فقط من وقتك لتأسيس شركتك عبر الإنترنت!</p>
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
                                                <input type="text" class="form-control" id="username" name = "username" dir="rtl" value = "<?php echo $row_user["name"]; ?>">
                                                
                                                <div id="error-userName" class="error">يجب ادخال اسم المستخدم</div>
                                            </div>
                                            <div class="mb-3">
                                              <label for="email" class="form-label">البريد الالكتروني</label>
                                              <input type="email" class="form-control" id="email" aria-describedby="emailHelp"  name = "email" placeholder="example@ex.com" value = "<?php echo $row_user["email"]; ?>">
                                              <div id="error-email" class="error">يجب ادخال بريد الكترونى صالح</div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="phone" class="form-label" >رقم الهاتف</label> 
                                                    <input id="phone" type="tel" class="form-control"name = "phone" inputmode="tel" value = "<?php echo $row_user["phone"]; ?>">
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
                <div class="type">
                    <p>بيانات الشركه</p>
                </div>
                <div class="type">
                    <p>بيانات المساهمين</p>
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
         <form action="" id="form" method="" class="needs-validation" enctype = "multipart/form-data" novalidate>
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
                                    <p>هو مزيج من الأصول أو الموارد التي يمكن للشركة الاستفادة منها في تمويل أعمالها<br>
                                        .ينتج رأس مال الشركات من تمويل الديون وحقوق الملكية</p>
                                </div>
                                <div class="choice d-flex justify-content-center flex-column align-items-end">
                                    <div class="form-check d-flex flex-row-reverse mt-3">
                                        <div>
                                            <input class="form-check-input" type="radio"  name="company_type"    id="exampleRadios1" value="LimitedLiabilityCompany" onclick="checkboxSelection()"<?php echo ($row_company["company_type"]== "LimitedLiabilityCompany" ? 'checked' : ''); ?>  required></div>
                                        <div class="mr-3">
                                            <label class="form-check-label" for="exampleRadios1">
                                                <h2>شركة ذات مسئولية محدودة</h2>
                                                <p>,ذات المسئولية المحدودة هي التي تتكون من عدد من الشركاء لا يزيد علي الخمسين<br>
                                                    ,ولا يكون كل منهم مسئولاً إلا بقدر حصته في رأس المال<br>
                                                     ,ولا يجوز تأسيس هذه الشركة أو زيادة رأس مالها أو الاقتراض لحسابها عن طريق الاكتتاب العام
                                                     <br>.كما لا يجوز لها إصدار أسهم أو سندات قابلة للتداول</p>
                                            </label>
                                        </div>
                                        <div class="mr-8"><button class="btn down" id="down-1" type="button" onclick="download('Incorporation of a Limited Liability Company - Legal Clinic');" style="display: none;">تنزيل ملف الشروط</button></div> 
                                    </div>
                                      <div class="form-check d-flex flex-row-reverse mt-3">
                                        <div><input class="form-check-input" type="radio"  name="company_type" id="exampleRadios2" value="JointStockIncorporation" onclick="checkboxSelection()" <?php echo ($row_company["company_type"]== "JointStockIncorporation" ? 'checked' : ''); ?> required></div>
                                        <div class="mr-3">
                                            <label class="form-check-label" for="exampleRadios1">
                                                <h2>شركة مساهمة مصري</h2>
                                                <p>.شركة ينقسم رأس مالها إلى أسهم متساوية القيمة يمكن تداولها على الوجه المبين في القانون<br>
                                                    وتقتصر مسئولية المساهم على أداء قيمة الأسهم التي اكتتب فيها ولا يسأل عن ديون الشركة <br>إلا في حدود ما اكتتب فيه من أسهم
                                                    ويكون للشركةاسم تجاري يشتق من الغرض من إنشائها<br>.ويجوز أن يتضمن الاسم التجاري للشركة اسما أو لقبا لواحد أو أكثر من مؤسسيها 
                                                    </p>
                                            </label>
                                        </div>
                                        <div class="mr-8"><button class="btn down"  id="down-2" style="display: none;" onclick="download('Joint Stock Incorporation');"  type="button">تنزيل ملف الشروط</button></div>
                                    </div>
                                      <div class="form-check d-flex flex-row-reverse mt-3">
                                        <div><input class="form-check-input" type="radio"  name="company_type" id="exampleRadios3" value="OPCrequirements" onclick="checkboxSelection()"  <?php echo ($row_company["company_type"]=="OPCrequirements" ? 'checked' : ''); ?> required></div>
                                        <div class="mr-3">
                                            <label class="form-check-label" for="exampleRadios1">
                                                <h2>شركة شخص واحد ذات مسئولية محدودة</h2>
                                                <p>شركة يمتلك رأسمالها بالكامل شخص واحد، سواء كان طبيعيا أو اعتباريا وذلك بما لا يتعارض مع أغراضها <br>
                                                    .ولا يسأل مؤسس الشركة عن التزاماتها إلا في حدود رأس المال المخصص لها<br> 
                                                    وتتخذ الشركة اسما خاصا لها يستمد من أغراضها أو من اسم مؤسسها، 
                                                    <br>ويجب أن يتبع اسمها بما يفيد أنها شركة من شرك الشخص الواحد ذات مسئولية محدودة،<br> 
                                                    ويوضع على مركزها الرئيس وفروعها – إن وجدت – وفي جميع مكاتباتها.
                                                    </p>
                                            </label>
                                        </div>
                                        <div class="mr-8"><button class="btn down"  id="down-3" style="display: none;" onclick="download('OPC requirements');"  type="button">تنزيل ملف الشروط</button></div>
                                    </div>
                                    <div class="invalid-feedback">يجب اختيار شركه</div>
                                </div>
                            </div>
                            <div  id="choice-people" style="display: none;">
                                    <div class="pref mt-2 mb-2 text-center">
                                        <p>يتكون من شخصين أو أكثر يجمعون مواردهم لتكوين شركة ويوافقون على مشاركة المخاطر والأرباح والخسائر </p>
                                    </div>
                                    <div class="choice d-flex justify-content-center flex-column align-items-end">
                                        <div class="form-check d-flex flex-row-reverse mt-3">
                                            <div><input class="form-check-input" type="radio" name="company_type" id="exampleRadios4" value="SoleEntity" onclick="checkboxSelection()"  <?php echo ($row_company["company_type"]=="SoleEntity" ? 'checked' : ''); ?>  required></div>
                                            <div class="mr-3">
                                                <label class="form-check-label" for="exampleRadios4">
                                                    <h2>المنشاة الفردية</h2>
                                                    <p>هي نوع من المشاريع<br> يملكها ويديرها شخص واحد .ولا يوجد فيها تمييز قانوني بين المالك والكيان التجاري </p>
                                                </label>
                                            </div>
                                            <div class="mr-8"><button class="btn down" id="down-4" type="button" onclick="download('Sole Entity');" style="display: none;">تنزيل ملف الشروط</button></div> 
                                        </div>
                                          <div class="form-check d-flex flex-row-reverse mt-3">
                                            <div><input class="form-check-input" type="radio"  name="company_type" id="exampleRadios5" value="Generalpartnership" onclick="checkboxSelection()"  <?php echo ($row_company["company_type"]=="Generalpartnership" ? 'checked' : ''); ?> required></div>
                                            <div class="mr-3">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    <h2>شركة التضامن</h2>
                                                    <p>الشركة التي يعقدها اثنان أو أكثر بقصد الاتجـار على وجه الشركة بينهم بعنوان مخصوص <br>يكون اسما لها، الشركاء فيها متضامنون لجميع تعهـداتها ولـو لـم يحصل وضع الإمضاء عليها إلا من أحدهم <br>.إنما يـشترط أن يكـون هـذا الإمضاء بعنوان الشركة</p>
                                                </label>
                                            </div>
                                            <div class="mr-8"><button class="btn down"  id="down-5" style="display: none;" onclick="download('General partnership');"  type="button">تنزيل ملف الشروط</button></div>
                                        </div>
                                          <div class="form-check d-flex flex-row-reverse mt-3">
                                            <div><input class="form-check-input" type="radio"  name="company_type" id="exampleRadios6" value="LimitedPartnership" onclick="checkboxSelection()"  <?php echo ($row_company["company_type"]=="LimitedPartnership" ? 'checked' : ''); ?> required></div>
                                            <div class="mr-3">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    <h2>شركة التوصية البسيطة</h2>
                                                    <p>شركة التوصية البسيطة هي الشركة التي تعقد بين شريك واحد أو أكثر مسئولين ومتضامنين <br>.وبين شريك واحد أو أكثر يكونون أصحاب أموال وخارجين عن الإدارة ويسمون موصين</p>
                                                </label>
                                            </div>
                                            <div class="invalid-feedback">يجب اختيار شركه</div>
                                            <div class="mr-8"><button class="btn down"  id="down-6" style="display: none;" onclick="download('Limited Partnership');" type="button">تنزيل ملف الشروط</button></div>
                                        </div>
                                        </div>
                            </div>
                        </div>
                        <!-- layer--2 chose name -->
                        <div  class="layer">
                            <div class="comp-name pt-4">
                                <h3>اقترح اسم لشركتك</h3>
                                <div id="form-in" dir="rtl">
                                    <div class="row g-3 pt-3" id="parent-el">
                                        <?php
                                            for ($i = 0;$i<count($company_names);$i++){
                                        ?>
                                        <div class="col-md-4">
                                          <label for="inputtext1" class="form-label">الاقتراح </label>
                                          <input type="text" class="form-control lay2" name="company_name[]" value = "<?php echo $company_names[$i]; ?>"  id="inputtext1" value = "">
                                        </div>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="comp-info pt-4">
                                <h3>معلومات اساسيه</h3>
                                <div class="form-in" dir="rtl">
                                    <div class="row g-3 justify-content-start pt-3">
                                        <div class="col-md-4">
                                          <label for="floatingTextarea" class="form-label">نشاط الشركه</label>
                                          <textarea class="form-control lay2" placeholder="نشاط الشركه"  value = "" name="company_activity" id="floatingTextarea"><?php echo $row_company["company_activity"]; ?></textarea>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="floatingTextarea2" class="form-label">عنوان الشركه</label>
                                            <textarea class="form-control lay2" placeholder="عنوان الشركه" name="company_address" value = "" id="floatingTextarea2"><?php echo $row_company["company_address"]; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="row g-3 justify-content-start pt-3 pb-3">
                                        <div class="col-md-4">
                                          <label for="inputtext3" class="form-label">قيمه رأس المال</label>
                                          <input type="text" class="form-control lay2" id="inputtext3" value = "<?php echo $row_company["capital_value"]; ?>" name="capital_value" onkeyup="arabicValue(inputtext3)"></input>
                                          <div id="soloComp"><span >راس المال يجب الا يقل عن 50 الف جنيها</span></div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputtext4" class="form-label" id="valueCor">قيمه الحصه</label>
                                            <input type="text" class="form-control lay2" id="inputtext4" name="capital_share" value = "<?php echo $row_company["capital_share"]; ?>" onkeyup="arabicValue(inputtext4)"></input>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- layer--3 parts info -->
                        <div  class="layer">
                            <!--edit shareholders-->
                            <?php
                                for($i = 0;$i <count($shareholders_array);$i++){
                            ?>
                            <div class="row g-3 justify-content-between  mt-3" dir="rtl" data-id="item_0">
                            <div class="col-md-3">
                                <label for="inputtext1" class="form-label mangPart" id="mangName">اسم المدير</label>
                                <input type="text" class="form-control lay3 mangInfo" id="name" name="shareholder_name[]" value="<?php echo $shareholders_array[$i]["shareholder_name"]?>">
                            </div>
                            <div class="col-md-3">
                                <label for="inputtext1" class="form-label mangPart">جنسية المدير </label>
                                <input type="text" class="form-control lay3 mangInfo" id="nation" name="shareholder_nationality[]" value="<?php echo $shareholders_array[$i]["shareholder_nationality"]; ?>">
                            </div>
                            <div class="col-md-3">
                                <label for="inputtext1" class="form-label mangPart">نسبة المدير</label>
                                <input type="text" class="form-control lay3 inputtext6" name="shareholder_percentage[]" value="<?php echo $shareholders_array[$i]["shareholder_percenatage"]; ?>" >
                                <div class="error erroPercentage"></div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <!-- <label for="formFileMultiple" class="form-label">اضافه البطاقه الشخصية</label> -->
                                <!-- <input class="form-control lay3 mangInfo" name="personal_id[]" type="file" id="id" accept="image/png, image/gif, image/jpeg"> -->
                                <img src="<?php echo "uploads/".$shareholders_array[$i]["shareholder_personal_id"]; ?>" class="imageUpload imgId" id="" width="100%">
                            </div>
                            <!-- <div class="col-md-6  align-self-center d-flex "> -->
                                <!-- <button class="btn btn-outline-danger" type="reset" id="partCompDel" onclick="this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode)">حذف المدير</button> -->
                            <!-- </div> -->
                            <hr>
                                </div>
                             <?php
                                }
                            ?>
                            </div>
                            
                        </div>
                        <!-- layer---4 mangers names -->
                        <div class="layer">
                        <div class="mang-names pt-4"></div>
                            <div class="mang-details pt-4 pb-4" dir="rtl" >
                                <div class="container">
                                <?php
                                        for($i = 0; $i<count($managers_array);$i++){
                                      ?>  
                                    <div class="row" id="card-newAdd">
                                        <div class="col-xl-4 col-md-6 pt-3">

                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="close">
                                                        <img src="images/svgexport-6 (16) 1.svg" alt="" onclick="this.parentNode.parentNode.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode.parentNode.parentNode);onRest();">
                                                     </div>
                                                    <div class="mt-3 mb-3 " dir="rtl"> 
                                                        <label class="visually-hidden" for="specificSizeSelect2">Preference</label>
                                                        <select class="form-select selectMangerSpec" name = "manager_type[]" id="specificSizeSelect2">
                                                            <option selected disabled>برجاء تحديد التصنيف</option>
                                                            <option value = "ceo" <?php echo ($managers_array[$i]["manager_type"]=="ceo" ? 'selected' : ''); ?> class="ceo">رئيس مجلس الاداره</option>
                                                            <option value = "director_member" <?php echo ($managers_array[$i]["manager_type"]=="director_member" ? 'selected' : ''); ?>?>  class="director_member">عضو مجلس اداره</option> 
                                                            <option value = "director_manager" <?php echo ($managers_array[$i]["manager_type"]== "director_manager" ? 'selected' : ''); ?>>عضو منتدب</option> 
                                                        </select>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class=" g-3 justify-content-around" dir="rtl">
                                                                <div class="">
                                                                    <label for="inputtext1" class="form-label mang">اسم المدير</label>
                                                                    <input type="text" class="form-control" id="inputtext1" value="<?php echo $managers_array[$i]["manager_name"]; ?>" name = "manager_name[]" readonly>
                                                                </div>
                                                                <div class="">
                                                                    <label for="inputtext2" class="form-label mang">جنسية المدير
                                                                    </label>
                                                                    <input type="text" class="form-control" id="inputtext2" value="<?php echo $managers_array[$i]["manager_nationality"]; ?>" name = "manager_nationality[]" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 align-self-center" style="padding-top: 33px;">
                                                            <div class="id"><img src="<?php echo "uploads/".$managers_array[$i]["manager_personal_id"]; ?>" alt="" width="100%" id="imagePrev_${i}" class="imgId">
                                                            <input type="hidden" name="hidden_personal_id1" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                               
                                                <div class="card-body" id='card_${x}'>
                                                    <h6 class="h6part">صلاحيات المدير</h6>
                                                         <div class="form-check">
                                                            <label class="form-check-label" for="flexCheckDefault1">
                                                            صلاحية التوقيع امام البنوك وفتح حسابات بنكية والتعامل على حساب الشركة
                                                            </label>
                                                            <input class="form-check-input allow" type="checkbox" value="1" name = "perm1[]"  <?php echo ($managers_array[$i]["perm1"]==1 ? 'checked' : ''); ?>>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="flexCheckChecked2">
                                                            صلاحية توقيع العقود بالنيابه عن الشركة
                                                            </label>
                                                            <input class="form-check-input allow" type="checkbox" value="1" name = "perm2[]"  <?php echo ($managers_array[$i]["perm2"]==1 ? 'checked' : ''); ?>>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="flexCheckChecked3">
                                                            صلاحية التعامل امام الجهات الحكوميه بالنيابه عن الشركة
                                                            </label>
                                                            <input class="form-check-input allow" type="checkbox" value="1" name = "perm3[]"  <?php echo ($managers_array[$i]["perm3"]==1 ? 'checked' : ''); ?>>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    ?>
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
                                        <input type="text" class="form-control mx-auto mb-3" id="result" placeholder="Select date" value="<?php  echo  $row_user["signdate"]; ?>" name= "signdate" readonly required>
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
                              <button class="btn pre " id="prev-1" type="button" onclick="changeLayer(-1)">السابق</button>
                          </div>
                         </div>
                    </div>
                </div>
            </form>
        </section>
     
    <script src="js/jquery.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.16/js/intlTelInput.min.js" integrity="sha512-Po9nSdYOcWIcoADdRjkAbRYPpR8OHjxzA/3RDUERZcDewTLzRTxbG4bUX7Sr7lVEcO3wTCzphdOBWgNFKVmxaA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script src="js/rome.js"></script>

    <script src="js/main2.js?t=<?php echo time();?>"></script>
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
</body>
</html>