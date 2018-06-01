<?php
/**
 * Template part for displaying ACF header content in single-project.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Baseplate_4
 */

?>


<!-- Hero Section IGNORE for ACF all - will use seperate section -->

<div class="relative overflow-hidden">
<section class="min-h-screen flex flex-col md:flex-row items-center overflow-hidden" data-aos="fade-in" data-aos-delay="500" data-aos-duration="500">
  
  <div class="hidden md:block z-0 bg-teal-light pin-t pin-r h-full w-1/6 absolute bg-<?php the_field('theme_color'); ?>" ></div>
  
  <div class="container mx-auto relative z-10">
    
    <div class="flex flex-col md:flex-row">
      
      <div class="w-full md:w-2/3">
        
        <h1 class="font-serif text-5xl xl:text-9xl"><?php the_field('project_title'); ?></h1>
        <p class="text-xl sm:text-2xl text-grey-dark font-light max-w-sm mb-6 mt-2"><?php the_field('project_description'); ?></p>
        
        <div class="flex flex-col sm:flex-row mt-8 pt-8 xl:mt-20">
          
          <!-- THE CLIENT -->
          <div class="w-full lg:w-1/2" data-aos="fade-up" data-aos-delay="900" data-aos-duration="400">
            <div class="p-4 pt-0 relative leading-normal">
              
              <!-- svg bar -->
              <svg class="absolute pin-l pin-t fill-current text-<?php the_field('theme_color'); ?>" width="5px" height="65px" viewBox="0 0 5 65" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  
                <rect id="Rectangle" transform="translate(2.500000, 34.500000) rotate(-90.000000) translate(-2.500000, -34.500000) " x="-30" y="32" width="65" height="5"></rect>
                  
              </svg>

              <h4 class="mb-0"><?php the_field('project_client'); ?></h4>
              <p class="font-serif text-lg italic text-grey-dark"><?php the_field('project_client_subtitle'); ?></p>
              <p class="font-light"><?php the_field('project_client_text'); ?></p>
            </div>

          </div>

          <!-- THE CHALLENGE -->
          <div class="w-full lg:w-1/2" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="400">
            <div class="p-4 pt-0 relative leading-normal">
              <!-- svg bar -->
              <svg class="absolute pin-l pin-t fill-current text-<?php the_field('theme_color'); ?>" width="5px" height="65px" viewBox="0 0 5 65" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  
                <rect id="Rectangle" transform="translate(2.500000, 34.500000) rotate(-90.000000) translate(-2.500000, -34.500000) " x="-30" y="32" width="65" height="5"></rect>
                          
              </svg>

              <h4 class="mb-0"><?php the_field('project_challenge'); ?></h4>
              <p class="font-serif italic text-grey-dark text-lg"><?php the_field('project_challenge_subtitle'); ?></p>
              <p class="font-light"><?php the_field('project_challenge_text'); ?></p>
            </div>

          </div>
        </div>

      </div>
      <!-- <div class="w-full md:w-1/3 relative overflow-visible">
      </div> -->
    </div>
  </div>
  

  <!-- Check if Mobile or Desktop image -->
  <?php 

    $hero  = get_field('project_hero_image');

    if( !empty($hero) ): ?>

    <?php
      // vars
      $heroeffect = get_field('project_hero_image_type');
    ?>

    <img class="<?php echo $heroeffect['label']; ?>" src="<?php echo $hero['url']; ?>" alt="<?php echo $hero['alt']; ?>" />

  <?php endif; ?>
  <!-- <img class="p-mockup-desktop" src="http://via.placeholder.com/800x600" alt="mockup">
 -->
  <!-- <img class="p-mockup-mobile" src="http://via.placeholder.com/375x667" alt="mockup"> -->


  <!-- scroll -->
  <svg class="absolute pin-l pin-b ml-4 mb-4" width="30px" height="60px" viewBox="0 0 247 390" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
    <path id="wheel" d="M123.359,79.775l0,72.843" style="fill:none;stroke:#999;stroke-width:20px;"/>
    <path id="mouse" d="M236.717,123.359c0,-62.565 -50.794,-113.359 -113.358,-113.359c-62.565,0 -113.359,50.794 -113.359,113.359l0,143.237c0,62.565 50.794,113.359 113.359,113.359c62.564,0 113.358,-50.794 113.358,-113.359l0,-143.237Z" style="fill:none;stroke:#999;stroke-width:10px;"/>
  </svg>
</section>
</div>