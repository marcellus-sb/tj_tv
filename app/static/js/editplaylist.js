$(function () {
    $('.media_item').draggable({
        containement: 'document',
        helper: 'clone',
        connectToSortable: '#playlist'
    });
    
    $('#playlist').sortable({
        //placeholder: 'holder_shadow',
        receive: function (e) {
            $(e.target).children('li').addClass('selected');
        }
    });
});
