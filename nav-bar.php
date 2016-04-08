<?php                 
    function current_page($page_name){ 
    $class_link = "pure-menu-link"; //Classe dei link nei menu
    $array_links = ["Home","News","Game","Jobs","About"]; // array dei nome delle pagine presenti nel menu
?>
<div class="custom-wrapper pure-g" id="menu">
    <div class="pure-u-1 pure-u-md-1-2">
        <div class="pure-menu">
            <a href="#" class="pure-menu-heading custom-brand"><img src="img/logo-allgorhythm.svg" alt="" class="logo-img"></a>
            <div class="custom-toggle" id="toggle"><s class="bar"></s><s class="bar"></s></div>
        </div>
    </div>
    <div class="pure-u-1 pure-u-md-1-2">
        <div class="pure-menu pure-menu-horizontal custom-menu-3 custom-can-transform">
            <ul class="pure-menu-list">
                <?php                     
                foreach($array_links as $link){
                    if(strcmp($page_name, $link)==0){
                        $class_link=$class_link." menu-link-active";
                    }                        
                        switch ($link) {
                            case 'News':
                                $href_link = "blog.php";
                                break;
                            case 'Game':
                                $href_link = "#"; // Da inserire il link della pagina GAME
                                break;   
                            case 'Jobs':
                               $href_link = "#"; // Da inserire il link della pagina JOBS
                                break;        
                            case 'About':
                               $href_link = "about.php";
                                break;                  
                            default://HOME
                                $href_link = "index.php";
                                break;
                        }
                        echo "<li class=\"pure-menu-item\"><a href=\"$href_link\" class=\"$class_link\">$link</a></li>";
                        $class_link="pure-menu-link";
                    }    
                ?>               
            </ul>
        </div>
    </div>    
</div>
<?php
}//end of current_page function 
?>