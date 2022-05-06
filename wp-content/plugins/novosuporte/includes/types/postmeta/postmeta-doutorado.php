<?php

// Data **********************************

function field_box_doutorado_descricao()
{
    add_meta_box('doutorado_descricao_id', 'Descrição', 'field_doutorado_descricao', 'doutorado','doutorado_descricao','high',null);
}
add_action('add_meta_boxes', 'field_box_doutorado_descricao');

function field_doutorado_descricao($post)
{
    $value = get_post_meta($post->ID, 'doutorado_descricao', true);
?>
    <input type="text" name="doutorado_descricao" value="<?php echo $value; ?>">
<?php
}

function move_postmeta_to_top_doutorado() {
    global $post, $wp_meta_boxes;
    do_meta_boxes( get_current_screen(), 'doutorado_descricao', $post );
    unset($wp_meta_boxes['post']['doutorado_descricao']);
}
add_action('edit_form_after_title', 'move_postmeta_to_top_doutorado');


// SAVE ALL **********************************

function save_postmeta_doutorado($post_id)
{
    if (isset($_POST['doutorado_descricao'])) {
        $doutorado_descricao = sanitize_text_field($_POST['doutorado_descricao']);
        update_post_meta($post_id, 'doutorado_descricao', $doutorado_descricao);
    }   
}
add_action('save_post', 'save_postmeta_doutorado');
