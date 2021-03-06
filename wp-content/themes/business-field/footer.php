<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Business_Field
 */

	/**
	 * Hook - business_field_action_after_content.
	 *
	 * @hooked business_field_content_end - 10
	 */
	do_action( 'business_field_action_after_content' );
?>

	<?php
	/**
	 * Hook - business_field_action_before_footer.
	 *
	 * @hooked business_field_footer_start - 10
	 */
	do_action( 'business_field_action_before_footer' );
	?>
    <?php
	  /**
	   * Hook - business_field_action_footer.
	   *
	   * @hooked business_field_footer_copyright - 10
	   */
	  do_action( 'business_field_action_footer' );
	?>
	<?php
	/**
	 * Hook - business_field_action_after_footer.
	 *
	 * @hooked business_field_footer_end - 10
	 */
	do_action( 'business_field_action_after_footer' );
	?>

<?php
	/**
	 * Hook - business_field_action_after.
	 *
	 * @hooked business_field_page_end - 10
	 * @hooked business_field_footer_goto_top - 20
	 */
	do_action( 'business_field_action_after' );
?>


<?php wp_footer(); ?>
</body>
</html>
