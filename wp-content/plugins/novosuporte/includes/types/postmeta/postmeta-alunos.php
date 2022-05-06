<?php

// Data **********************************

function field_box_alunos_descricao()
{
    add_meta_box('alunos_descricao_id', 'Descrição', 'field_alunos_descricao', 'alunos','alunos_descricao','high',null);
}
add_action('add_meta_boxes', 'field_box_alunos_descricao');

function field_alunos_descricao($post)
{
    $value = get_post_meta($post->ID, 'alunos_descricao', true);
?>
    <input type="text" name="alunos_descricao" value="<?php echo $value; ?>">
<?php
}

function move_postmeta_to_top_alunos() {
    global $post, $wp_meta_boxes;
    do_meta_boxes( get_current_screen(), 'alunos_descricao', $post );
    unset($wp_meta_boxes['post']['alunos_descricao']);
}
add_action('edit_form_after_title', 'move_postmeta_to_top_alunos');


// SAVE ALL **********************************

function save_postmeta_alunos($post_id)
{
    if (isset($_POST['alunos_descricao'])) {
        $alunos_descricao = sanitize_text_field($_POST['alunos_descricao']);
        update_post_meta($post_id, 'alunos_descricao', $alunos_descricao);
    }   
}
add_action('save_post', 'save_postmeta_alunos');
