<?php get_header(); ?>
        

<div class="main nobanner">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col mt-5">          
                    <h1 class="lora">Search results</h1>                              
                </div>
            </div>
        </div>        
    </div>

     <div class="container searchPage">
        <div class="row">
            <div class="col-12 formSearch text-center mb-5 pt-5 pb-5 pl-md-5 pr-md-5">
                <form class="search" action='#'>
                  <input type="text" placeholder="What are you looking for?" value="" name="s" id="s"><input type="submit" id="searchsubmit" value="Search">      
                </form>
            </div>
        </div>
        <div class="row mb-5">
                <?php if ( have_posts() ) : ?>

                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                        <?php  $categories = get_the_category(); 
                        
                        $cls = '';
                                if ( ! empty( $categories ) ) {
                                foreach ( $categories as $cat ) {
                                    $cls .= $cat->slug . ' ';
                                }
                                }
                        ?>
                        
                    <div class="col-12 col-lg-6 pb-3">                                                 
                        <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                        <?php the_excerpt();?> 
                    </div>
                <?php endwhile; ?>

                <?php else : ?>
                    <div class="col-12"> 
                            <p>There are no results for your search, please search again.</p>
                    </div>
                    
                <?php endif; ?>            
        </div>
     </div>
</div>




                                      
                         

<?php get_footer(); ?>