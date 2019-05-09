/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var initialText = $('.editable').val();
$('.editOption').val(initialText);

$('#test').change(function(){
    var selected = $('option:selected',this).attr('class');
    var optionText = $('.editable').text();
    
    if (selected == "editable"){
        $('.editOption').show();
        
        $('.editOption').keyup(function(){
            var editText = $('.editOption').val();
            $('.editable').val(editText);
            $('.editable').html(editText);
        });
        
    }else{
        $('.editOption').hide();
    }
});