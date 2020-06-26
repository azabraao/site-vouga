<?php
    $email = get_field( "email", $page ); 
    $celular = get_field( "celular", $page ); 
    $telefone = get_field( "telefone", $page ); 
    if( have_rows('endereco', $page) ):
    while( have_rows('endereco', $page) ): the_row();
        $rua = get_sub_field( "rua", $page ); 
        $bairro = get_sub_field( "bairro", $page ); 
        $cidade = get_sub_field( "cidade", $page ); 
        $estado = get_sub_field( "estado", $page ); 
        $cep = get_sub_field( "cep", $page ); 
        $pais = get_sub_field( "pais", $page ); 
    endwhile;
    endif;
?>