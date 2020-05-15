<?php
/* @var $this yii\web\View */
$this->title = 'Виджет Autocomplete';
?>
    <style>
        li.ui-menu-item {
            font-size: 12px;
            font-faminy: Verdana;
        }
    </style>
    <input type="text" id="lang" />
    <ul style="display: none; top: 30px; left: 8px; width: 143px;" tabindex="0" id="ui-id-1"
        class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all">
        <li role="presentation" class="ui-menu-item"><a tabindex="-1" class="ui-corner-all" id="ui-id-9">Java</a></li>
        <li role="presentation" class="ui-menu-item"><a tabindex="-1" class="ui-corner-all" id="ui-id-10">JavaScript</a></li>
    </ul>
<?php
$this->registerJs(<<<JS
$(function(){
    var langs = ["Java", "JavaScript", "VisualBasic", "PHP", "Pascal"] ;
    $('input#lang').autocomplete({
        source: langs
    });
});
$(function(){
    var langs = ["Java", "JavaScript", "VisualBasic", "PHP", "Pascal"] ;
    $('input#lang').autocomplete({
        source: langs
    });
});
var langs = ["Java", "JavaScript", "VisualBasic", "PHP", "Pascal"] ;
$('input#lang').autocomplete({ source: langs});
$('input#lang').autocomplete( "option", { autoFocus: true } );
var langs = ["Java", "JavaScript", "VisualBasic", "PHP", "Pascal"] ;
$('input#lang').autocomplete({ source: langs});
$('input#lang').autocomplete({
    change: function( event, ui ) {
        console.log(ui.item.value);
    }
});
var langs = ["Java", "JavaScript", "VisualBasic", "PHP", "Pascal"] ;
$('input#lang').autocomplete({ source: langs});
$('input#lang').autocomplete({
    select: function( event, ui ) {
         
        console.log(ui.item.value);
    }
});
JS
);


