<?php
/**
 * Shows the `number` form field on job listing forms.
 *
 * This template can be overridden by copying it to yourtheme/job_manager/form-fields/number-field.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     WP Job Manager
 * @category    Template
 * @version     1.29.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>
<input
    type="number"
    class="input-number"
    min="0.00" max="100000.00" step="0.01"
    name="<?php echo esc_attr( isset( $field['name'] ) ? $field['name'] : $key ); ?>"
    <?php if ( isset( $field['autocomplete'] ) && false === $field['autocomplete'] ) { echo ' autocomplete="off"'; } ?>
    id="<?php echo esc_attr( $key ); ?>"
    placeholder="<?php echo empty( $field['placeholder'] ) ? '' : esc_attr( $field['placeholder'] ); ?>"
    value="<?php echo isset( $field['value'] ) ? esc_attr( $field['value'] ) : ''; ?>" maxlength="<?php echo ! empty( $field['maxlength'] ) ? $field['maxlength'] : ''; ?>"
    <?php if ( ! empty( $field['required'] ) ) echo 'required'; ?> />
<?php if ( ! empty( $field['description'] ) ) : ?><small class="description"><?php echo $field['description']; ?></small><?php endif; ?>
