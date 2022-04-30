<?php
// error_reporting(0);
// @ini_set('display_errors', 0);
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <title>Show</title>
</head>
<body  dir ="rtl">
<center><h1>المستخدمين</h1></center>
<table class = "table table-striped" id = "tbl_exporttable_to_xls">
<thead>
    <tr>
        <th>الاسم</th>
        <th>الايميل</th>
        <th>التليفون</th>
        <th> تاريخ التسجيل</th>
        <th>تاريخ توقيع العقد </th>
        <th>نوع الشركة</th>
        <th>اقتراحات اسماء الشركة</th>
        <th>نشاط الشركة</th>
        <th>عنوان الشركة</th>
        <th>قيمة رأس المال</th>
        <th>قيمة الحصة</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td><?php echo $row_user["name"]; ?></td>
        <td><?php echo $row_user["email"]; ?></td>
        <td dir = "ltr"><?php echo $row_user["phone"]; ?></td>
        <td><?php echo $row_user["date"]; ?></td>
        <td><?php echo $row_user["signdate"]; ?></td>
        
        <?php
         if($row_company["company_type"]== "LimitedLiabilityCompany"){ 
            ?>
            <td>شركة ذات مسئولية محدودة</td>
        <?php
     }
      ?>

        <?php
         if($row_company["company_type"]== "JointStockIncorporation"){
              ?>
            <td>شركة مساهمة مصري</td>
        <?php
     }
      ?>

        <?php
          if($row_company["company_type"]== "OPCrequirements"){
              ?>
            <td>شركة شخص واحد ذات مسئولية محدودة</td>
        <?php 
    } 
    ?>

        <?php
         if($row_company["company_type"]== "SoleEntity"){
              ?>
            <td> المنشاة الفردية<</td>
        <?php 
    }
     ?>

        <?php
         if($row_company["company_type"]== "Generalpartnership"){
              ?>
            <td>شركة التضامن<</td>
        <?php 
    } 
    ?>

        <?php
        if($row_company["company_type"]== "LimitedPartnership"){
              ?>
            <td>شركة التوصية البسيطة<</td>
        <?php
     }
      ?>
<td>
        <?php
          for ($i = 0;$i<count($company_names);$i++){
         ?>
        <?php
        if ($i == count($company_names)-1)
        {
            echo $company_names[$i];
        }
        else {
            echo $company_names[$i]."  -  ";    
        }
          ?>
        <?php
          }
        ?>

    </td>
        <td><?php   echo $row_company["company_activity"]; ?></td>
        <td><?php  echo $row_company["company_address"];  ?></td>
        <td><?php   echo $row_company["capital_value"];  ?></td>
        <td><?php echo $row_company["capital_share"];  ?></td>

    </tr>
</tbody>
</table>
<center><h1>المساهمين</h1></center>
<table class = "table table-striped" dir ="rtl" id = "tbl2_exporttable_to_xls">
<thead>
    <tr>
        <th>اسم المساهم</th>
        <th>جنسية المساهم</th>
        <th>نسبة المساهم</th>
        <th>صورة البطاقة</th>
    </tr>
</thead>
<tbody>
        <?php
          for($i = 0;$i <count($shareholders_array);$i++){
        ?>
    <tr>
        <td><?php echo $shareholders_array[$i]["shareholder_name"];  ?></td>
        <td><?php echo $shareholders_array[$i]["shareholder_nationality"];  ?></td>
        <td><?php echo $shareholders_array[$i]["shareholder_percenatage"];  ?></td>
        <td> <img src="<?php echo "uploads/".$shareholders_array[$i]['shareholder_personal_id'];?>"width="100"height="100"><p hidden><?php echo "http://localhost/"."uploads/".$shareholders_array[$i]['shareholder_personal_id']; ?></p></td>
    </tr>
    <?php
          }
    ?>
</tbody>
</table>
<center><h1>المديرين</h1></center>
 </table>
 <table class = "table table-striped" dir ="rtl" id = "tbl3_exporttable_to_xls">
<thead>
    <tr>
        <th>تصنيف المدير</th>
        <th>اسم المدير</th>
        <th>جنسية المدير</th>
        <th>صورة البطاقة</th>
        <th>صلاحيات المدير</th>
    </tr>
</thead>
<tbody>
    <?php 
    for($i = 0;$i <count($managers_array);$i++){ 
         ?>
    <tr>
        <?php
         if ($managers_array[$i]["manager_type"]=="ceo" ){
             echo  "<td>رئيس مجلس الادارة</td>";
         }else if($managers_array[$i]["manager_type"]=="director_member"){
          echo "<td>عضو مجلس ادارة</td>"; 
         }else if ($managers_array[$i]["manager_type"]=="director_manager") {
         echo "<td>عضو منتدب</td>";
        }else { 
                echo "<td></td>";
         }
        ?>
        <td><?php echo  $managers_array[$i]["manager_name"];  ?></td>
        <td><?php echo $managers_array[$i]["manager_nationality"];  ?></td>
        <td> <img src="<?php echo "uploads/".$managers_array[$i]["manager_personal_id"];?>"width="100"height="100"><p hidden><?php echo "http://localhost/"."uploads/".$managers_array[$i]["manager_personal_id"]; ?></p></td>
        <td><?php echo ($managers_array[$i]["perm1"]==1 ? 'صلاحية التوقيع امام البنوك وفتح حسابات بنكية والتعامل على حساب الشركة' : ''); ?> <td>
        <td> <?php echo ($managers_array[$i]["perm2"]==1 ? 'صلاحية توقيع العقود بالنيابه عن الشركة' : ''); ?> <td>
        <td><?php echo ($managers_array[$i]["perm3"]==1 ? 'صلاحية التعامل امام الجهات الحكوميه بالنيابه عن الشركة' : ''); ?> <td>
    </tr>
    <?php
          }
    ?>
</tbody>
 </table>
 <!-- use the latest version -->
<script lang="javascript" src="https://cdn.sheetjs.com/xlsx-latest/package/dist/xlsx.full.min.js"></script>
 <button type="button" class="btn btn-primary"  onclick="ExportToExcel('xlsx');" id = "excel">
     حفظ كملف Excel
</button>
<script>
function ExportToExcel(type, fn, dl) {
    let tbl1 = document.getElementById("tbl_exporttable_to_xls")
    let tbl2 = document.getElementById("tbl2_exporttable_to_xls")
    let tbl3 = document.getElementById("tbl3_exporttable_to_xls")
        
    let worksheet_tmp1 = XLSX.utils.table_to_sheet(tbl1);
    let worksheet_tmp2 = XLSX.utils.table_to_sheet(tbl2);
    let worksheet_tmp3 = XLSX.utils.table_to_sheet(tbl3);

        
    let a = XLSX.utils.sheet_to_json(worksheet_tmp1, { header: 1 })
    let b = XLSX.utils.sheet_to_json(worksheet_tmp2, { header: 1 })
    let c = XLSX.utils.sheet_to_json(worksheet_tmp3, { header: 1 })
        
    a = a.concat(['']).concat(b)
    a = a.concat(['']).concat(c)

        
    let worksheet = XLSX.utils.json_to_sheet(a, { skipHeader: false })

    const new_workbook = XLSX.utils.book_new()
    XLSX.utils.book_append_sheet(new_workbook, worksheet, "worksheet")
    XLSX.writeFile(new_workbook, 'sheet.xls')
}
</script>
</body>
