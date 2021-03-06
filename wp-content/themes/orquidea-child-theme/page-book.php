<?php
/**
 * Template Name: _Book
 */
get_header(); ?>
    <section class="singleblog wrapper cf">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="sectionboxtitle wrapper">
					  <div class="boxtitle headerfont marginlef1"> <?php the_title(); ?></div>

            <div class="subtitle bodyfont marginlef1">
                <?php echo ale_get_meta('custompagesub'); ?>
            </div>
            <div class="custompage cf">
                
               <div class="location-select">
               	<p><h3>Please select a location to book an appointment:</h3></p>
               	 <ul>
	               		<!--
<li>
		               		<a href="http://www.secure-booker.com/blinklash/MakeAppointment/Search.aspx" target="_blank"><img src="<?php bloginfo('siteurl') ?>/wp-content/uploads/2013/12/blink-emblum.png"/> <h2 style="display:inline-block">Little Italy </h2></a> 
	               		</li>
-->
	               		<li>
		               		<a href="http://www.secure-booker.com/blinksolana/MakeAppointment/Search.aspx" target="_blank"><img src="<?php bloginfo('siteurl') ?>/wp-content/uploads/2013/12/blink-emblum.png"/> <h2 style="display:inline-block">Solana Beach</h2></a>
	               		</li>
	               		<li>
		               		<a href="http://www.secure-booker.com/blinksandiego/MakeAppointment/Search.aspx" target="_blank"><img src="<?php bloginfo('siteurl') ?>/wp-content/uploads/2013/12/blink-emblum.png"/> <h2 style="display:inline-block">Mission Valley</h2></a>
	               		</li>
							 	 </ul>
	             </div> <!-- #location-select -->
                
            </div>
            <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
            <?php endif; ?>
        </div>



    </section>
<?php get_footer(); ?>