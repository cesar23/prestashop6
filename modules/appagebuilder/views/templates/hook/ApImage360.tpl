{* 
* @Module Name: AP Page Builder
* @Website: apollotheme.com - prestashop template provider
* @author Apollotheme <apollotheme@gmail.com>
* @copyright  2007-2015 Apollotheme
* @description: ApPageBuilder is module help you can build content for your shop
*}
<!-- @file modules\appagebuilder\views\templates\hook\ApImage360 -->

<!--
<link rel="stylesheet" href="/modules/appagebuilder/views/templates/hook/ApImage360.css" type="text/css" media="all" />
<script type="text/javascript" src="/modules/appagebuilder/views/templates/hook/ApImage360.js"></script>
-->

{if isset($formAtts.title) && $formAtts.title}
    <h4 class="title_block">{$formAtts.title}{*contain html, no escape necessary*}</h4>
{/if}
    
<div class="clearfix" id="image-block">
    <div class="LeoImageToolboxContainer">
            <a data-leoimage360-options="columns:{$formAtts.columns};rows:{$formAtts.row};
               images:{foreach $formAtts.image_list as $image} {$formAtts.image_path}{$image}{/foreach}"
                href="#" class="LeoImage360 desktop zoom-in" id="productLeoImage360"
                style="display: inline-block; visibility: visible; overflow: hidden; position: relative; vertical-align: middle; text-decoration: none; color: rgb(0, 0, 0); background-repeat: no-repeat; background-size: 458px 458px;
                background-image:{foreach $formAtts.image_list as $image} url('{$formAtts.image_path}{$image}'),{/foreach};
                background-position:{foreach $formAtts.image_list as $image} 0px -10000px,{/foreach} 
                
                ">
                <img src="{$formAtts.image_path}{$formAtts.image_default}" itemprop="image" style="width: 100%; opacity: 1;">
            </a>

        {if ($formAtts.message)}
        <div class="LeoImageToolboxMessage">{$formAtts.message|default:'Loading image...'|escape:'html':'UTF-8'}</div>
        {/if}

        <div style="width:0px;height:1px;overflow:hidden;visibility:hidden;">
            <img src="{$formAtts.image_path}{$formAtts.image_default}" id="bigpic" style="position: absolute; top: 5px; left: 4.5px;">
        </div>
    </div>
</div>

<script type="text/javascript">
	LeoImage360.options = {
		'rows':{if $formAtts.row}{$formAtts.row}{else}1{/if},
		'columns':{if $formAtts.columns}{$formAtts.columns}{else}5{/if},
		'magnify':true,
		'magnifier-width':'80%',
		'magnifier-shape':'inner',
		'fullscreen':false,
		'spin':'{$formAtts.spin|escape:'html':'UTF-8'}',                      // drag, hover
		'autospin-direction':'{$formAtts.autospin_direction|escape:'html':'UTF-8'}',   // clockwise, anticlockwise, alternate-clockwise, alternate-anticlockwise
		'speed':{if $formAtts.speed}{$formAtts.speed|intval}{else}50{/if},                         // 1 -> 100
		'mousewheel-step':{if $formAtts.mousewheel_step}{$formAtts.mousewheel_step|intval}{else}1{/if},
		'autospin-speed':{if $formAtts.autospin_speed}{$formAtts.autospin_speed|intval}{else}3600{/if},              // Choose speed of auto-spin
		'smoothing':{if $formAtts.smoothing}true{else}false{/if},                   // Smoothly stop the image spinning
		'autospin':'{$formAtts.autospin|escape:'html':'UTF-8'}',                  // once, twice, infinite, off           : thoi gian quay tu dong Duration of automatic spin
		'autospin-start':'{$formAtts.autospin_start|escape:'html':'UTF-8'}',      // load, hover, click, load,hover       : Autospin starts on
		'autospin-stop':'{$formAtts.autospin_stop|escape:'html':'UTF-8'}',            // click, hover, never, 
		'initialize-on':'{$formAtts.initialize_on|escape:'html':'UTF-8'}',             // load, hover, hover                   : When to initialize 360 (download images).
		'start-column':{if $formAtts.start_column}{$formAtts.start_column|intval}{else}1{/if},                   //                                      : Column from which to start spin. auto means to start from the middle
		'start-row':'{$formAtts.start_row|escape:'html':'UTF-8'}',                 //                                      : Row from which to start spin. auto means to start from the middle
		'loop-column':{if $formAtts.loop_column}true{else}false{/if},                 // true, false                          : Continue spin after the last image on X-axis
		'loop-row':{if $formAtts.loop_row}true{else}false{/if},                   // true, false                          : Continue spin after the last image on Y-axis
		'reverse-column':{if $formAtts.reverse_column}true{else}false{/if},             // true, false                          : 
		'reverse-row':{if $formAtts.reverse_row}true{else}false{/if},                // true, false                          :
		'column-increment':{if $formAtts.column_increment}{$formAtts.column_increment|intval}{else}1{/if},               // int                                  : Load only every second (2) or third (3) column so that spins load faster
		'row-increment':{if $formAtts.row_increment}{$formAtts.row_increment|intval}{else}1{/if},                  // int                                  : Load only every second (2) or third (3) row so that spins load faster
		'hint':{if $formAtts.hint}true{else}false{/if}                         // true, false                          : Show hint message
	}
</script>
<script type="text/javascript">
	LeoImage360.lang = {
		'loading-text':'{$formAtts.message_loading|default:'Loading image...'|escape:'html':'UTF-8'}',
		'fullscreen-loading-text': '{$formAtts.message_loading_fullscreen|default:'Loading image...'|escape:'html':'UTF-8'}',
		'hint-text':'{$formAtts.message_desktop_hint|default:'Drag to spin'|escape:'html':'UTF-8'}',
		'mobile-hint-text':'{$formAtts.message_mobile_hint|default:'Swipe to spin'|escape:'html':'UTF-8'}',
	}
</script>

<!--
//		'magnify':{if $formAtts.magnify}true{else}false{/if},                     //Magnifier effect : kinh lup
//		'magnifier-width':'{$formAtts.magnifier_width|escape:'html':'UTF-8'}',            //Magnifier size in % of small image width or fixed size in px
//		'magnifier-shape':'{$formAtts.magnifier_shape|escape:'html':'UTF-8'}',          // inner, circle, square,              : hinh dang kinh lup
//		'fullscreen':{if $formAtts.fullscreen}true{else}false{/if},
-->