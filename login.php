<?php 

/* Creating Variables*/

$firstname = $_REQUEST['firstname']; /* request عشان نا عاوز اليوزر هو الى يدخلى البيانات */
$secondname = $_REQUEST['secondname']; 
$age = $_REQUEST['age'];   
$address = $_REQUEST['address'];  

/*  if condition for sending button  */
/** isset  دى فانكشن عشان تعرفى ان المتغير دا موجود ولا مش موحود* */
if(isset($_POST['btntest'])){ 

   /*  create variables of you database */
    $host = "localhost"; 
    $user = "root"; 
    $password =""; 
    $db = "website"; 


    /**اتعمل كونكشن مع الداتا بيز */
    @$conn= mysqli_connect($host,$user,$password,$db);
    /* @ عشان تخفى اى ايرور لو حصل عندة ف الداتا او ف الربط*/

    /* هخلى المستخدم يدخل القيم بتعته */
    $insert= "insert into studentsbis values('$firstname','$secondname','$address')";

    /* هتعمل بحث وهتشيك على الداتا بيز */
    mysqli_query($conn,$insert);

    if($conn){
        echo("<h1 style=color:green;> Your Registartion is Done!</h1>");
        

    }
    else{
        echo("<h1 style=color:red;> Your Registartion is Failed❌</h1>");
    }

}
?>

