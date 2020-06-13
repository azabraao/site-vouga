<?php 
    $email = get_field( "email", 'option' ); 
    $celular = get_field( "celular", 'option' ); 
    $telefone = get_field( "telefone", 'option' ); 
    if( have_rows('endereco', 'option') ):
    while( have_rows('endereco', 'option') ): the_row();
        $rua = get_sub_field( "rua", 'option' ); 
        $bairro = get_sub_field( "bairro", 'option' ); 
        $cidade = get_sub_field( "cidade", 'option' ); 
        $estado = get_sub_field( "estado", 'option' ); 
        $cep = get_sub_field( "cep", 'option' ); 
        $pais = get_sub_field( "pais", 'option' ); 
    endwhile;
    endif;
?>