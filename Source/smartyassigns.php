<?php

$exp = explode("/", $_SERVER['PHP_SELF']);
$home = "./";

    if(isset($exp[3])){
       $home="../"; 
    }
    
if (isset($_SESSION['user'])){
    $smarty->assign('loginvar', '<a href="javascript: submitform()">Uitloggen</a>');

} else {
    $smarty->assign('loginvar', '<div id="aanmelden"><a href="'.$home.'pages/login.php">Registreren/Aanmelden</div>');

}
if(isset($_GET["type"])){
    $smarty->assign('tableheaders','<table id="tableprods" class="table table-hover"><tr>
        <td>
            Foto:
        </td>
        <td>
            Naam:
        </td>
        <td>
            Prijs:
        </td>
        
    </tr>
    ');
}else{
    $smarty->assign('tableheaders',"");
}
$smarty->assign('menu', "<ul>
   <li><a href='".$home."'><span>Home</span></a></li>
   <li class='has-sub'><a href='#'><span>Products</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>Laptops</span></a>
            <ul>
               <li><a href='".$home."?type=Notebook'><span>Laptops/Notebooks</span></a></li>
               <li><a href='".$home."?type=Netbook'><span>Netbooks</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Dekstop</span></a>
            <ul>
               <li><a href='#'><span>Sub Product</span></a></li>
               <li class='last'><a href='#'><span>Sub Product</span></a></li>
            </ul>
         </li>
      </ul>
   </li>
</ul>");
if(isset($_GET['id'])){
    $smarty->assign('prodid',$_GET['id']);

}