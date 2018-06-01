<?php
/**
 * Template part for displaying ACF Flexible content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Baseplate_4
 */

?>


<!-- Hero Section IGNORE for ACF all - will use seperate section -->

<!-- <section class="min-h-screen flex items-center">
  <div class="bg-teal-light pin-t pin-r h-full w-1/6 absolute"></div>
  <div class="container mx-auto px-4">
    <div class="flex">
      <div class="w-2/3">
        
        <h1 class="font-serif text-5xl xl:text-9xl">Your Digital <br>Agency</h1>
        <p class="text-xl sm:text-2xl text-grey-dark font-light max-w-sm mb-6 mt-2">We Specialise in Ruby on Rails, UX Design, Digital Marketing, Wordpress and eCommerce.</p>
        
        <div class="flex">
          
          <div class="w-full sm:w-1/2 lg:w-1/2 mb-8">
            <div class="p-4 pl-8 pt-0 relative leading-normal">
              
              <svg class="absolute pin-l pin-t" width="5px" height="65px" viewBox="0 0 5 65" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  
                  <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g id="Desktop-HD-Copy-5" transform="translate(-67.000000, -1077.000000)" fill="#F9B7B9">
                          <g id="Group" transform="translate(67.000000, 1075.000000)">
                              <rect id="Rectangle" transform="translate(2.500000, 34.500000) rotate(-90.000000) translate(-2.500000, -34.500000) " x="-30" y="32" width="65" height="5"></rect>
                          </g>
                      </g>
                  </g>
              </svg>

              <h4 class="">App Development</h4>
              <p class="font-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, consequatur optio voluptates omnis dolores velit necessitatibus, quis dignissimos?</p>
            </div>

          </div>
           <div class="w-full sm:w-1/2 lg:w-1/2 mb-8">
            <div class="p-4 pl-8 pt-0 relative leading-normal">
              

              <svg class="absolute pin-l pin-t" width="5px" height="65px" viewBox="0 0 5 65" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  
                  <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g id="Desktop-HD-Copy-5" transform="translate(-67.000000, -1077.000000)" fill="#FDDFA2">
                          <g id="Group" transform="translate(67.000000, 1075.000000)">
                              <rect id="Rectangle" transform="translate(2.500000, 34.500000) rotate(-90.000000) translate(-2.500000, -34.500000) " x="-30" y="32" width="65" height="5"></rect>
                          </g>
                      </g>
                  </g>
              </svg>

              <h4 class="">E-commerce</h4>
              <p class="font-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, consequatur optio voluptates omnis dolores velit necessitatibus, quis dignissimos?</p>
            </div>

          </div>
        </div>

      </div>
      <div class="w-1/3">
        Large image here
      </div>
    </div>
  </div>
</section>
 -->

<?php if(have_rows('content_blocks')):?>
  
  <?php while (have_rows('content_blocks') ) : the_row();?>
    
    <!-- 1-column layout  -->
    <?php if( get_row_layout() == 'one_column' ):?>
        <p>One column content</p>
    <?php endif; ?>      

    <!-- 3-column layout  -->
    <?php if( get_row_layout() == 'three_column' ):?>
      <section class="three-column">
        <div class="container mx-auto py-8 my-8">
          <div class="flex">
            
            <!-- col 1 -->
            <div class="w-full sm:w-1/3 mb-8 ">
              
              <div class="p-4 pt-0 relative leading-normal">        

                <!-- IF svg bar set color from ACF -->
                <svg class="absolute pin-l pin-t fill-current text-<?php the_sub_field('col_colour');?>" width="5px" height="65px" viewBox="0 0 5 65" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                  
                  <rect id="Rectangle" transform="translate(2.500000, 34.500000) rotate(-90.000000) translate(-2.500000, -34.500000) " x="-30" y="32" width="65" height="5"></rect>
      
                </svg>
                
                <!-- Content -->
                <?php the_sub_field('col_content');?>

              </div>
            
            </div>
            
            <!-- col 2 -->
            <div class="w-full sm:w-1/3 mb-8">
              
              <div class="p-4 pt-0 relative leading-normal">        

                <!-- IF svg bar set color from ACF -->
                <svg class="absolute pin-l pin-t fill-current text-<?php the_sub_field('col_colour_2');?>" width="5px" height="65px" viewBox="0 0 5 65" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    
                   <rect id="Rectangle" transform="translate(2.500000, 34.500000) rotate(-90.000000) translate(-2.500000, -34.500000) " x="-30" y="32" width="65" height="5"></rect>
                            
                </svg>
                
                <!-- Content -->
                <?php the_sub_field('col_content_2');?>

              </div>
            
            </div>

            <!-- col 3 -->
            <div class="w-full sm:w-1/3 mb-8">
              
              <div class="p-4 pt-0 relative leading-normal">        

                <!-- IF svg bar set color from ACF -->
                <svg class="absolute pin-l pin-t fill-current text-<?php the_sub_field('col_colour_3');?>" width="5px" height="65px" viewBox="0 0 5 65" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    
                    <rect id="Rectangle" transform="translate(2.500000, 34.500000) rotate(-90.000000) translate(-2.500000, -34.500000) " x="-30" y="32" width="65" height="5"></rect>
                            
                </svg>
                
                <!-- Content -->
                <?php the_sub_field('col_content_3');?>

              </div>
            
            </div>
            
          </div>
        </div>
      </section>
    <?php endif; ?>    

    <!-- 2-column layout -->
    <?php if( get_row_layout() == 'two_column' ):?>
      <section class="two-column">
        <div class="container mx-auto py-8 my-8">
          <div class="flex">
            
            <!-- col 1 -->
            <div class="w-full sm:w-1/2 mb-8">
              
              <div class="p-4 pt-0 relative leading-normal">        

                <!-- IF svg bar set color from ACF -->
                <svg class="absolute pin-l pin-t fill-current text-<?php the_sub_field('col_colour');?>" width="5px" height="65px" viewBox="0 0 5 65" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    
                    <rect id="Rectangle" transform="translate(2.500000, 34.500000) rotate(-90.000000) translate(-2.500000, -34.500000) " x="-30" y="32" width="65" height="5"></rect>
                            
                </svg>
                
                <!-- Content -->
                <?php the_sub_field('col_content');?>

              </div>
            
            </div>
            
            <!-- col 2 -->
            <div class="w-full sm:w-1/2 mb-8">
              
              <div class="p-4 pt-0 relative leading-normal">        

                <!-- IF svg bar set color from ACF -->
                <svg class="absolute pin-l pin-t fill-current text-<?php the_sub_field('col_colour_2');?>" width="5px" height="65px" viewBox="0 0 5 65" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          
                  <rect id="Rectangle" transform="translate(2.500000, 34.500000) rotate(-90.000000) translate(-2.500000, -34.500000) " x="-30" y="32" width="65" height="5"></rect>
              
                </svg>
                
                <!-- Content -->
                <?php the_sub_field('col_content_2');?>

              </div>
            
            </div>
            
          </div>
        </div>
      </section>
    <?php endif; ?>    


    <!-- Single Image -->
    <?php if( get_row_layout() == 'single_image' ):?>
          
      <section class="single-image">
        <div class="container mx-auto py-8 my-8 px-4 text-center">
          <?php $image = get_sub_field('main_image');

          if( !empty($image) ): ?>

          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

          <?php endif; ?>
        </div>
      </section>

    <?php endif; ?>


    <!-- Logos bar -->
    <?php if( get_row_layout() == 'gallery_row' ):?>
      
      <section class="logo-bar">
        <div class="container py-4 my-4 mx-auto px-4">
          <div class="flex items-center justify-around">

            <?php $images = get_sub_field('gallery_images');

              if( $images ): ?>
            
              <!-- Loop of images here -->
              <?php foreach( $images as $image ): ?>
                <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />                
              <?php endforeach; ?>

            <?php endif; ?>
          
          </div>
        </div>
      </section>

    <?php endif; ?>

    <!-- Gallery bar Full -->
    <?php if( get_row_layout() == 'gallery_row_full' ):?>
      
      <section class="logo-bar">
        <div class="w-full">
          
          <ul class="list-reset flex items-center content-center justify-center flex-wrap flex-col sm:flex-row">

            <?php $images = get_sub_field('gallery_images');

              if( $images ): ?>
            
              <!-- Loop of images here -->
              <?php foreach( $images as $image ): ?>
                <li class="flex-1">
                  <img class="w-full h-auto" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>"/>
                </li>                
              <?php endforeach; ?>

            <?php endif; ?>
          
          </div>
        </div>
      </section>

    <?php endif; ?>

    
    <!-- Featured Project -->
    <?php if( get_row_layout() == 'featured_project' ):?>
      
      <section class="my-8 my-8 featured-project bg-red flex items-center" style="min-height: 50vh; background-image: url('<?php the_sub_field('project_background');?>'); background-position: center center; background-size: cover;">
        
        <div class="container mx-auto px-4 py-8 my-8 text-center leading-normal">
          
          <h6 class="uppercase text-white text-lg font-bold tracking-widest mb-1"><?php the_sub_field('project_header');?></h6>
          
          <h2 class="text-white mb-2 xl:text-6xl"><?php the_sub_field('project_title');?></h2>
          
          <p class="text-lg text-white max-w-lg mx-auto mb-4"><?php the_sub_field('project_description');?>
          </p>
          
          <p class="mt-4">
            <a href="<?php the_sub_field('project_link');?>" class="btn"><?php the_sub_field('project_link_label');?></a>
          </p>

        </div>
      </section>

    <?php endif; ?>


    <!-- Repeater Columns (grid-matrix) -->
    <?php if( get_row_layout() == 'multi_column' ):?>
      
      <section class="multi-column">
        <div class="container mx-auto py-8 my-8">
          <div class="flex flex-wrap">
            
            <?php if (have_rows('multi_cols') ): ?>
              
              <?php while ( have_rows('multi_cols')): the_row();?>

                <!-- loop thru ALL columns -->
                <div class="w-full sm:w-1/2 lg:w-1/3 mb-8">
                  <div class="p-4 pt-0 relative leading-normal">
                    
                    <!-- svg bar -->
                    <svg class="fill-current text-<?php the_sub_field('col_colour');?> absolute pin-l pin-t" width="5px" height="65px" viewBox="0 0 5 65" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        
                        <rect id="Rectangle" transform="translate(2.500000, 34.500000) rotate(-90.000000) translate(-2.500000, -34.500000) " x="-30" y="32" width="65" height="5"></rect>
                            
                    </svg>

                    <?php the_sub_field('col_content'); ?>
                  </div>

                </div>

              <?php endwhile;?>

            <?php endif;?>

          </div>
        </div>
      </section>
    
    <?php endif; ?>


    <!-- Photobox content (left) -->
    <?php if( get_row_layout() == 'photobox' ):?>

      <section class="photobox min-h-screen flex items-center">
        <div class="container mx-auto">
          <div class="flex items-center">
            
            <!-- large image -->

            <div class="hidden md:block">
              <?php 

              $image = get_sub_field('photobox_image');

              if( !empty($image) ): ?>

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

              <?php endif; ?>

            </div>
            
            <!-- photobox area -->
            <div class="-ml-8">
              <div class="p-8 bg-orange-light shadow-lg leading-normal">
                <?php the_sub_field('photobox_content');?>
              </div>
            </div>


          </div>
        </div>
      </section>

    <?php endif; ?>



    <!-- Team members -->
    <?php if( get_row_layout() == 'team_area' ):?>

      <section class="team-area flex items-center">
    
        <div class="container mx-auto px-4 py-8 my-8">
          
          <h2 class="font-serif font-bold text-5xl xl:text-9xl"><?php the_sub_field('team_title');?></h2>
          
          <p class="text-xl sm:text-2xl text-grey-dark font-light max-w-sm mb-6 mt-2"><?php the_sub_field('team_intro');?></p>
          
          <div class="flex flex-wrap">
            
            <!-- Loop tru team members -->
            <?php if (have_rows('team_member') ): ?>
              <?php while ( have_rows('team_member')): the_row();?>
                
                <div class="pr-4 w-1/2 lg:w-1/3 xl:w-1/4 pb-4 mb-4 flex items-center pb-4">
                  
                  <?php 

                  $image = get_sub_field('team_member_image');

                  if( !empty($image) ): ?>

                    <img class="rounded-full mr-2 lg:mr-4" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                  <?php endif; ?>

                  <div class="text-md font-light"><span class="text-black"><?php the_sub_field('team_member_name');?> </span><br><span class="text-grey-dark"><?php the_sub_field('team_member_title');?></span></div>
                </div>           

              <?php endwhile; ?>
            <?php endif; ?>

          </div>
        </div>
      </section>

    <?php endif; ?>        


    <!-- Steps -->
    <?php if( get_row_layout() == 'steps' ):?>

      <section class="steps <?php the_sub_field('steps_colour');?>">
        <div class="container mx-auto px-0 py-8 my-8">
          <div class="flex flex-wrap">
            
            
            <div class="w-full sm:w-1/2 lg:w-1/3 mb-8 flex items-center">
              <div class="p-4 pt-0 relative leading-normal">
                <h2 class="font-serif font-bold text-7xl xl:text-9xl"><?php the_sub_field('steps_heading'); ?></h2>
                
              </div>
            </div>

            <!-- Loop the steps... -->
            <?php if (have_rows('steps_item') ): ?>
              <?php while ( have_rows('steps_item')): the_row();?>
                      
                <div class="w-full sm:w-1/2 lg:w-1/3 mb-8">
                  <div class="p-4 pt-0 relative leading-normal">
                    
                    <!-- svg bar -->
                    <svg class="absolute pin-l pin-t fill-current text-brand-brown" width="5px" height="65px" viewBox="0 0 5 65" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        
                      <rect id="Rectangle" transform="translate(2.500000, 34.500000) rotate(-90.000000) translate(-2.500000, -34.500000) " x="-30" y="32" width="65" height="5"></rect>
                        
                    </svg>

                    <div class="numberCircle mb-2 lg:mb-3 bg-brand-brown">
                      <span class="font-bold text-white"><?php the_sub_field('step_number');?></span>
                    </div>
                    <?php the_sub_field('steps_colour');?>
                    <h4><?php the_sub_field('step_heading'); ?></h4>
                    
                    <?php the_sub_field('step_text');?>

                  </div>
                </div>            

              <?php endwhile; ?>
            <?php endif; ?>
            


          </div>
        </div>
      </section>

    <?php endif; ?>

    
    <!-- Content image right -->
    <?php if( get_row_layout() == 'two_column_image_right' ):?>

      <section class="content-image-left">

        <div class="container mx-auto py-8 my-8 ">
          <div class="flex items-center">

            <!-- col 1 -->
            <div class="w-full sm:w-1/2 mb-8">
              
              <div class="p-4 pl-8 pt-0 relative leading-normal">        

                <!-- IF svg bar set color from ACF -->
                <svg class="absolute pin-l pin-t" width="5px" height="65px" viewBox="0 0 5 65" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Desktop-HD-Copy-5" transform="translate(-67.000000, -1077.000000)" fill="#F9B7B9">
                            <g id="Group" transform="translate(67.000000, 1075.000000)">
                                <rect id="Rectangle" transform="translate(2.500000, 34.500000) rotate(-90.000000) translate(-2.500000, -34.500000) " x="-30" y="32" width="65" height="5"></rect>
                            </g>
                        </g>
                    </g>
                </svg>
                
                <!-- Content -->
                <?php the_sub_field('col_content');?>
                

                <!-- Testimonial Content IF checked.. -->
                <?php if( get_sub_field('col_testimonial') ): ?>
                  
                  <figure class="block mb-5">
                      
                      <blockquote class="italic mb-2 text-lg">
                        <?php the_sub_field('col_testimonial_text');?>
                      </blockquote>
                      
                      <footer class="flex items-center">                 
                        
                        <?php $testimage = get_sub_field('col_testimonial_image');
                        if( !empty($testimage) ): ?>
                          <img class="rounded-full mr-1 lg:mr-2 shadow" src="<?php echo $testimage['url']; ?>" alt="<?php echo $testimage['alt']; ?>" />
                        <?php endif; ?>

                        
                        <div class="text-sm uppercase font-semibold roman tracking-widest">

                          <cite class="author roman"><?php the_sub_field('col_testimonial_cite_author');?></cite> - <cite class="position roman"><?php the_sub_field('col_testimonial_cite_title');?></cite><br><cite class="company underline font-bold roman"><?php the_sub_field('col_testimonial_cite_company');?></cite>

                        </div>

                      </footer>
                  </figure>

                <?php endif;?>
                

              </div>
            
            </div>
            
            <!-- col 2 -->
            <div class="w-full sm:w-1/2 mb-8 leading-normal">
              
              <div class="p-4 pl-8 pt-0 relative leading-normal">        
                
                <!-- Image Round -->
                <?php 

                  $mainimage  = get_sub_field('main_image');

                  if( !empty($mainimage) ): ?>
      
                  <?php
                    // vars
                    $effect = get_sub_field('image_effect');
                  ?>

                  <img class="max-w-full h-auto <?php echo $effect['label']; ?>" src="<?php echo $mainimage['url']; ?>" alt="<?php echo $mainimage['alt']; ?>" />

                <?php endif; ?>         

              </div>
            
            </div>
            
          </div>
        </div>
      </section>

    <?php endif; ?>   


    <!-- Content image left -->
    <?php if( get_row_layout() == 'two_column_image_left2' ):?>
      
      <section class="content-image-left">

        <div class="container mx-auto py-8 my-8 ">
          
          <div class="flex items-center">

            <!-- col 1 -->
            <div class="w-full sm:w-1/2 mb-8 leading-normal">
              
              <div class="p-4 pl-8 pt-0 relative leading-normal">        
                
                <!-- Image Round -->
                <?php 

                  $mainimage2  = get_sub_field('main_image');

                  if( !empty($mainimage) ): ?>
      
                  <?php
                    // vars
                    $effect = get_sub_field('image_effect');
                  ?>

                  <img class="max-w-full h-auto <?php echo $effect['label']; ?>" src="<?php echo $mainimage2['url']; ?>" alt="<?php echo $mainimage2['alt']; ?>" />

                <?php endif; ?>         

              </div>
            
            </div>


            <!-- col 2 -->
            <div class="w-full sm:w-1/2 mb-8">
              
              <div class="p-4 pl-8 pt-0 relative leading-normal">        

                <!-- IF svg bar set color from ACF -->
                <svg class="absolute pin-l pin-t" width="5px" height="65px" viewBox="0 0 5 65" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Desktop-HD-Copy-5" transform="translate(-67.000000, -1077.000000)" fill="#F9B7B9">
                            <g id="Group" transform="translate(67.000000, 1075.000000)">
                                <rect id="Rectangle" transform="translate(2.500000, 34.500000) rotate(-90.000000) translate(-2.500000, -34.500000) " x="-30" y="32" width="65" height="5"></rect>
                            </g>
                        </g>
                    </g>
                </svg>
                
                <!-- Content -->
                <?php the_sub_field('col_content');?>
                

                <!-- Testimonial Content IF checked.. -->
                <?php if( get_sub_field('col_testimonial') ): ?>
                  
                  <figure class="block mb-5">
                      
                      <blockquote class="italic mb-2 text-lg">
                        <?php the_sub_field('col_testimonial_text');?>
                      </blockquote>
                      
                      <footer class="flex items-center">                 
                        
                        <?php $testimage2 = get_sub_field('col_testimonial_image');
                        if( !empty($testimage2) ): ?>
                          <img class="rounded-full mr-1 lg:mr-2 shadow" src="<?php echo $testimage2['url']; ?>" alt="<?php echo $testimage2['alt']; ?>" />
                        <?php endif; ?>

                        
                        <div class="text-sm uppercase font-semibold roman tracking-widest">

                          <cite class="author roman"><?php the_sub_field('col_testimonial_cite_author');?></cite> - <cite class="position roman"><?php the_sub_field('col_testimonial_cite_title');?></cite><br><cite class="company underline font-bold roman"><?php the_sub_field('col_testimonial_cite_company');?></cite>

                        </div>

                      </footer>
                  </figure>

                <?php endif;?>
                

              </div>
            
            </div>
            
          </div>
        </div>
      
      </section>

    <?php endif; ?>


  <?php endwhile; ?>

<?php else : ?>
  <p>No Layouts found!...</p>
<?php endif; ?>







<!-- CTA Bar -->
<section class="cta-bar bg-teal-light">
  <div class="w-full bg-color-1 py-8 text-center">
    <h2 class="font-serif font-normal mb-6 text-white text-5xl xl:text-5xl">Ready to start your project?</h2>
    <p class="">
      <a href="/contact-us" class="btn">Lets do this</a>
    </p>
  </div>
</section>
