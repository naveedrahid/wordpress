<?php
$selected_footer = get_option('selected_footer');
$selected_footer_post = get_page_by_path($selected_footer, OBJECT, 'cms-block');

if ($selected_footer_post && $selected_footer_post->post_type === 'cms-block') {
    echo apply_filters('the_content', $selected_footer_post->post_content);
?>
<?php
} elseif(empty($selected_footer_post)) {
	echo '<p class="text-center">There is no Footer Selected.</p>';	
 } ?>
</main><!-- #main -->
</div>
<?php wp_footer(); ?>

</body>

</html>