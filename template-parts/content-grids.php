<?php
/**
 * Template part for displaying page content in page-grids.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Baseplate_4
 */

?>

<div class="p-4">
  <h1 class="mb-2">Equal height nested columns using Flexbox</h1>
  <span class="text-grey-dark">w/ TailwindCSS (responsive)</span>
</div>



<div class="flex flex-col flex-wrap lg:flex-row min-h-screen p-4 bg-grey-lighter">
  
  <div class="bg-grey lg:w-1/4">a-sider</div>
  
  <div class="flex flex-col w-full lg:w-3/4">
    <div class="lg:h-32">main column</div> 
    <div class="flex w-full h-full">
      <div class="bg-grey-light w-full w-1/2">sub column</div>
      <div class="bg-grey w-full w-1/2">sub column</div>  
    </div>
    
  </div>
</div>