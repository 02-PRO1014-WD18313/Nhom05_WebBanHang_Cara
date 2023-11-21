function check_all(){
    if($('#choose_all')){
         $('input[type=checkbox]').each(function(){
            jQuery('#' + this.id).prop('checked', true);
         })
    }
}
function deselect_all() {
    //$('#chose_all').prop('checked')
    if ($('#unchecker')) {
        $('input[type=checkbox]').each(function () {
            //console.log(this.id);
            jQuery('#' + this.id).prop('checked', false);
        });
    }
}