window.onload = function () {
    $("#adminmenu #toplevel_page_novosuporte ul li.wp-first-item a").html("Sobre"); 
}

function upload_image(type, val) {   

    aw_uploader = wp.media({
        title: 'Upload File',
        library: {
            uploadedTo: wp.media.view.settings.post.id
        },
        button: {
            text: 'Use this File'
        },
        multiple: false
    }).on('select', function () {
        var attachment = aw_uploader.state().get('selection').first().toJSON();
        var url = attachment.url.split('/').splice(3, 6);
        url = url.join('/');
        if (type == 1) { //alunos
            $('#portal_input_' + val).val("/" + url);  
            $('#preview_portal_input_' + val).attr('src', "/" + url);       
        }       
    }).open();   

}