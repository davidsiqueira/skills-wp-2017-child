<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

register_sidebar( array(
    'name'          => __( 'Footer 3', 'twentyseventeen' ),
    'id'            => 'sidebar-4',
    'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
) );


function max_title_length( $title ) {
    $max = 60;
    if( strlen( $title ) > $max ) {
    return substr( $title, 0, $max ). " &hellip;";
    } else {
    return $title;
    }
    }


//FUNÇÂO DE CTAs NO CONTEUDO
// vai buscar a categoria primária do Yoast
function get_primary_cat(){
    // SHOW YOAST PRIMARY CATEGORY, OR FIRST CATEGORY
        $category = get_the_category();
        $useCatLink = true;
        // If post has a category assigned.
        if ($category){
            $category_display = '';
            $category_link = '';
            if ( class_exists('WPSEO_Primary_Term') )
            {
                // Show the post's 'Primary' category, if this Yoast feature is available, & one is set
                $wpseo_primary_term = new WPSEO_Primary_Term( 'category', get_the_id() );
                $wpseo_primary_term = $wpseo_primary_term->get_primary_term();
                $term = get_term( $wpseo_primary_term );
                if (is_wp_error($term)) {
                    // Default to first category (not Yoast) if an error is returned
                    $category_display = $category[0]->name;
                    $category_link = get_category_link( $category[0]->term_id );
                } else {
                    // Yoast Primary category
                    $category_display = $term->name;
                    $category_link = get_category_link( $term->term_id );
                }
            }
            else {
                // Default, display the first category in WP's list of assigned categories
                $category_display = $category[0]->name;
                $category_link = get_category_link( $category[0]->term_id );
            }
    
            // Display category
            if ( !empty($category_display) ){
                if ( $useCatLink == true && !empty($category_link) ){
                    return $category_display;
                }
                else {
                    echo '<span class="post-category">'.htmlspecialchars($category_display).'</span>';
                }
            }
        }
    }
    
    //Imprime o CTA consoante a categoria primária
    function print_category_small($category){
        /* Verifica qual a categoria principal e compara-a*/
        if ($category == 'Contabilidade'){
            echo '<a class="cta contabilidade" href="http://pt.primaverabss.com/pt/certificacao-primavera-accounting-and-fiscal/">
                    <div class="bloco-texto">
                        Leve sua carreira para o próximo nível com a certificação PRIMAVERA
                        <span class="big-text">Contabilidade e <br>Fiscalidade</span>
                    </div>
              </a>';
        }
    
        elseif ($category == 'Gestão de Pessoas'){
    
            echo '<a class="cta pessoas" href="http://pt.primaverabss.com/pt/certificacao-primavera-human-resources/">
                    <div class="bloco-texto">
                    Leve sua carreira para o próximo nível com a certificação PRIMAVERA
                        <span class="big-text">Recursos<br>Humanos</span>
                    </div>
              </a>';
        }
        elseif ($category == 'Tesouraria'){
            echo '<a class="cta tesouraria" href="http://pt.primaverabss.com/pt/certificacao-primavera-treasury/">
                    <div class="bloco-texto">
                        Alcance o máximo rigor e eficiência com a certificação PRIMAVERA
                        <span class="big-text">Tesouraria</span>
                    </div>
                  </a>';
        }
        elseif ($category == 'Compras'){
            echo '<a class="cta compras" href="http://pt.primaverabss.com/pt/certificacao-primavera-treasury/">
                    <div class="bloco-texto">
                        Acelere suas operações com a certificação PRIMAVERA
                        <span class="big-text">Compras e Inventário</span>
                    </div>
                </a>';
        }
        elseif ($category == 'Vendas'){
            echo '<a class="cta vendas" href="http://pt.primaverabss.com/pt/certificacao-primavera-treasury/">
                    <div class="bloco-texto">
                        Venda mais e melhor com a certificação PRIMAVERA
                        <span class="big-text">Vendas</span>
                    </div>
                </a>';
        }
        elseif ($category == 'Compras e Vendas'){
            echo '<div class="cta compras-vendas">
                    <div class="bloco-texto">
                        Venda mais e compre melhor com as certificações PRIMAVERA
                        <!--<a class="link-compra" href="http://pt.primaverabss.com/pt/certificacao-primavera-purchases-and-inventory/">Compras</a>
                        <a href="http://pt.primaverabss.com/pt/certificacao-primavera-sales/">Vendas</a>-->
                        <span class="big-text">Vendas</span>
                    </div>
                  </div>';
        }
        /* Nao tem categoria definida */
        else {
            echo '<a class="cta cert" href="http://pt.primaverabss.com/pt/certificacao-primavera/">
                    <div class="bloco-texto">
                        Fique a conhecer todas as
                        <span class="big-text">Certificações<br>PRIMAVERA</span>
                        </div>
                    </a>';
        }
    }
    

    //Imprime o CTA consoante a categoria primária
    function print_category_large($category){
        /* Verifica qual a categoria principal e compara-a*/
        if ($category == 'Contabilidade'){
            echo '<a class="cta contabilidade" href="http://pt.primaverabss.com/pt/certificacao-primavera-accounting-and-fiscal/">
                    <div class="bloco-texto">
                         Aprenda mais sobre este assunto na Certificação PRIMAVERA
                        <span class="big-text">Contabilidade e <br>Fiscalidade</span>
                    </div>
              </a>';
        }
    
        elseif ($category == 'Gestão de Pessoas'){
    
            echo '<a class="cta pessoas" href="http://pt.primaverabss.com/pt/certificacao-primavera-human-resources/">
                    <div class="bloco-texto">
                    Simplifique a gestão dos colaboradores com a certificação PRIMAVERA
                        <span class="big-text">Recursos<br>Humanos</span>
                    </div>
              </a>';
        }
        elseif ($category == 'Tesouraria'){
            echo '<a class="cta tesouraria" href="http://pt.primaverabss.com/pt/certificacao-primavera-treasury/">
                    <div class="bloco-texto">
                        Aprenda mais sobre este assunto na Certificação PRIMAVERA
                        <span class="big-text">Tesouraria</span>
                    </div>
                  </a>';
        }
        elseif ($category == 'Compras'){
            echo '<a class="cta compras" href="http://pt.primaverabss.com/pt/certificacao-primavera-treasury/">
                    <div class="bloco-texto">
                        Acelere suas operações com a certificação PRIMAVERA
                        <span class="big-text">Compras e Inventário</span>
                    </div>
                </a>';
        }
        elseif ($category == 'Vendas'){
            echo '<a class="cta vendas" href="http://pt.primaverabss.com/pt/certificacao-primavera-treasury/">
                    <div class="bloco-texto">
                        Aprenda mais sobre este assunto com a Certificação PRIMAVERA
                        <span class="big-text">Vendas</span>
                    </div>
                </a>';
        }
        elseif ($category == 'Compras e Vendas'){
            echo '<div class="cta compras-vendas">
                    <div class="bloco-texto">
                        Venda mais e compre melhor com as certificações PRIMAVERA
                        <!--<a class="link-compra" href="http://pt.primaverabss.com/pt/certificacao-primavera-purchases-and-inventory/">Compras</a>
                        <a href="http://pt.primaverabss.com/pt/certificacao-primavera-sales/">Vendas</a>-->
                        <span class="big-text">Vendas</span>
                    </div>
                  </div>';
        }
        /* Nao tem categoria definida */
        else {
            echo '<a class="cta cert" href="http://pt.primaverabss.com/pt/certificacao-primavera/">
                    <div class="bloco-texto">
                        Fique a conhecer todas as
                        <span class="big-text">Certificações<br>PRIMAVERA</span>
                        </div>
                    </a>';
        }
    }