<?php

$menu_def = '<?xml version="1.0" encoding="UTF-8"?>
<menu>
  <menu_item href="index.php" label="Home"></menu_item>
  <menu_item href="mining.php" label="Mining"></menu_item>
  <menu_item href="dairy.php" label="Dairy"></menu_item>
  <menu_item href="services.php" label="Other Services"></menu_item>
  <menu_item href="about-us.php" label="About"></menu_item>
  <menu_item href="contact.php" label="Contact"></menu_item>
</menu>';


$current_page_name = get_current_page_name();
$menu = simplexml_load_string($menu_def);

if(!function_exists('translate_menu_label')){
    function translate_menu_label($label){
        return $label;
    }
}

function has_selected_child($root){
    global $current_page_name;
    $current_href = $root->attributes()->href;
    if($current_href == $current_page_name){
        return true;
    }else{
        $found = false;
        $children = $root->children();
        if(count($children)>0){
            foreach($children as $child){
                $found = has_selected_child($child);
                if($found){
                    break;
                }
            }
        }
        return $found;
    }
}

function render_main_menu($root, $index=0, $level=0) {
    $children = $root->children();
    $has_children = count($children)>0;
    if($root->getName() == 'menu'){
        echo '<ul id="navlist" class="clearfix">';
        foreach($children as $child){
            $index++;
            render_main_menu($child, $index, $level+1);
        }
        echo '</ul>';
    }else{
        echo is_array($children);
        $href = $root->attributes()->href;
        $label = translate_menu_label((string)$root->attributes()->label);
        $child_menu_id = $has_children? 'submenu'.$index : '';
        $li_class = ($level == 1 && has_selected_child($root))?' class="current"':'';
        $li_rel = $has_children?' data-rel="'.$child_menu_id.'"' : '';
        echo '<li'.$li_class.'><a href="'.$href.'"'.$li_rel.'>'.$label.'</a>';
        if($has_children){
            echo '<ul id="'.$child_menu_id.'" class="ddsubmenustyle">';
            foreach($children as $child){
                $index++;
                render_main_menu($child, $index, $level+1);
            }
            echo '</ul>';
        }
        echo '</li>';
    }
}

function render_sitemap($root) {
    $children = $root->children();
    $has_children = count($children)>0;
    if($root->getName() == 'menu'){
        echo '<ul class="arrow">';
        foreach($children as $child){
            render_sitemap($child);
        }
        echo '</ul>';
    }else{
        echo is_array($children);
        $href = $root->attributes()->href;
        $label = translate_menu_label((string)$root->attributes()->label);
        echo '<li><a href="'.$href.'">'.$label.'</a>';
        if($has_children){
            echo '<ul>';
            foreach($children as $child){
                render_sitemap($child);
            }
            echo '</ul>';
        }
        echo '</li>';
    }
}

function get_current_page_name(){
    $page_name = substr(strrchr($_SERVER['REQUEST_URI'], "/"), 1);
    if(strrpos($page_name, ".php") === false){
        return 'index.php';
    }else{
        $page_name = substr($page_name, 0, strrpos($page_name, ".php")+4);
        return $page_name;
    }
}

function print_main_menu(){
    global $menu;
    render_main_menu($menu);
}

function print_sitemap(){
    global $menu;
    render_sitemap($menu);
}
