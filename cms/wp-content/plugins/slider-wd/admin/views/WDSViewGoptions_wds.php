<?php

class WDSViewGoptions_wds {
  ////////////////////////////////////////////////////////////////////////////////////////
  // Events                                                                             //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Constants                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Variables                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
  private $model;

  ////////////////////////////////////////////////////////////////////////////////////////
  // Constructor & Destructor                                                           //
  ////////////////////////////////////////////////////////////////////////////////////////
  public function __construct($model) {
    $this->model = $model;
  }
  ////////////////////////////////////////////////////////////////////////////////////////
  // Public Methods                                                                     //
  ////////////////////////////////////////////////////////////////////////////////////////

  public function display() {
    $default_layer_fweights = array(
      'lighter' => 'Lighter',
      'normal' => 'Normal',
      'bold' => 'Bold',
    );
    $default_layer_effects_in = array(
      'none'          => 'None',
      'bounce'        => 'Bounce',
      'flash'         => 'Flash',
      'pulse'         => 'Pulse',
      'rubberBand'    => 'RubberBand',
      'shake'         => 'Shake',
      'swing'         => 'Swing',
      'tada'          => 'Tada',
      'wobble'        => 'Wobble',
      'hinge'         => 'Hinge',
      'lightSpeedIn'  => 'LightSpeedIn',
      'rollIn'        => 'RollIn',
      'bounceIn'      => 'BounceIn',
      'bounceInDown'  => 'BounceInDown',
      'bounceInLeft'  => 'BounceInLeft',
      'bounceInRight' => 'BounceInRight',
      'bounceInUp'    => 'BounceInUp',
      'fadeIn'         => 'FadeIn',
      'fadeInDown'     => 'FadeInDown',
      'fadeInDownBig'  => 'FadeInDownBig',
      'fadeInLeft'     => 'FadeInLeft',
      'fadeInLeftBig'  => 'FadeInLeftBig',
      'fadeInRight'    => 'FadeInRight',
      'fadeInRightBig' => 'FadeInRightBig',
      'fadeInUp'       => 'FadeInUp',
      'fadeInUpBig'    => 'FadeInUpBig',
      'flip'    => 'Flip',
      'flipInX' => 'FlipInX',
      'flipInY' => 'FlipInY',
      'rotateIn'          => 'RotateIn',
      'rotateInDownLeft'  => 'RotateInDownLeft',
      'rotateInDownRight' => 'RotateInDownRight',
      'rotateInUpLeft'    => 'RotateInUpLeft',
      'rotateInUpRight'   => 'RotateInUpRight',
      'zoomIn'      => 'ZoomIn',
      'zoomInDown'  => 'ZoomInDown',
      'zoomInLeft'  => 'ZoomInLeft',
      'zoomInRight' => 'ZoomInRight',
      'zoomInUp'    => 'ZoomInUp',
    );
    $default_layer_effects_out = array(
      'none'       => 'None',
      'bounce'     => 'Bounce',
      'flash'      => 'Flash',
      'pulse'      => 'Pulse',
      'rubberBand' => 'RubberBand',
      'shake'      => 'Shake',
      'swing'      => 'Swing',
      'tada'       => 'Tada',
      'wobble'     => 'Wobble',
      'hinge'      => 'Hinge',
      'lightSpeedOut' => 'LightSpeedOut',
      'rollOut'       => 'RollOut',
      'bounceOut'      => 'BounceOut',
      'bounceOutDown'  => 'BounceOutDown',
      'bounceOutLeft'  => 'BounceOutLeft',
      'bounceOutRight' => 'BounceOutRight',
      'bounceOutUp'    => 'BounceOutUp',
      'fadeOut'         => 'FadeOut',
      'fadeOutDown'     => 'FadeOutDown',
      'fadeOutDownBig'  => 'FadeOutDownBig',
      'fadeOutLeft'     => 'FadeOutLeft',
      'fadeOutLeftBig'  => 'FadeOutLeftBig',
      'fadeOutRight'    => 'FadeOutRight',
      'fadeOutRightBig' => 'FadeOutRightBig',
      'fadeOutUp'       => 'FadeOutUp',
      'fadeOutUpBig'    => 'FadeOutUpBig',
      'flip'     => 'Flip',
      'flipOutX' => 'FlipOutX',
      'flipOutY' => 'FlipOutY',
      'rotateOut'          => 'RotateOut',
      'rotateOutDownLeft'  => 'RotateOutDownLeft',
      'rotateOutDownRight' => 'RotateOutDownRight',
      'rotateOutUpLeft'    => 'RotateOutUpLeft',
      'rotateOutUpRight'   => 'RotateOutUpRight',
      'zoomOut'      => 'ZoomOut',
      'zoomOutDown'  => 'ZoomOutDown',
      'zoomOutLeft'  => 'ZoomOutLeft',
      'zoomOutRight' => 'ZoomOutRight',
      'zoomOutUp'    => 'ZoomOutUp',
    );
    $font_families = WDW_S_Library::get_font_families();
    $google_fonts = WDW_S_Library::get_google_fonts();
    $loading_gifs = array(
      0 => 'Loading default',
      1 => 'Loading1',
      2 => 'Loading2',
      3 => 'Loading3',
      4 => 'Loading4',
      5 => 'Loading5',
    );

    $wds_global_options = get_option("wds_global_options", 0);
    $global_options = json_decode($wds_global_options);
    if ( !$wds_global_options ) {
      $global_options = (object) wds_global_options_defults();
      $global_options->loading_gif = get_option("wds_loading_gif", 0);
      $global_options->register_scripts = get_option("wds_register_scripts", 0);
    }
    ?>
    <div class="clear"></div>
    <form class="wrap wds_form" id="sliders_form" method="post" action="admin.php?page=goptions_wds" style="width: 98%;" enctype="multipart/form-data">
      <?php wp_nonce_field('nonce_wd', 'nonce_wd'); ?>
      <div class="wds-options-page-banner">
        <div class="wds-options-logo"></div>
				<div class="wds-options-logo-title">
					<?php _e('Global Options', 'wds'); ?>
				</div>
        <div class="wds-page-actions">
			   <button class="wds_button-secondary wds_save_slider" onclick="spider_set_input_value('task', 'save');">
          <span></span>
          <?php _e('Save', 'wds'); ?>
				 </button>
		  	</div>	
      </div>
      <table>
			  <tbody>
        <tr>
            <td class="spider_label"><label><?php _e('Include scripts/styles only on necessary pages', 'wds'); ?>:</label></td>
               <td>
                <input type="radio" id="register_scripts1" name="register_scripts" <?php echo (($global_options->register_scripts == 1)? "checked='checked'" : ""); ?> value="1" /><label <?php echo ($global_options->register_scripts ? 'class="selected_color"' : ''); ?> for="register_scripts1"><?php _e('Yes', 'wds'); ?></label>
                <input type="radio" id="register_scripts0" name="register_scripts" <?php echo (($global_options->register_scripts == 0)? "checked='checked'" : ""); ?> value="0" /><label <?php echo ($global_options->register_scripts ? '' : 'class="selected_color"'); ?> for="register_scripts0"><?php _e('No', 'wds'); ?></label>
                <div class="spider_description"><?php _e('Helps to decrease page load time. Might not function with some custom themes.', 'wds'); ?></div>
             </td>
          </tr>
        <tr>
            <td class="spider_label">
              <label for="loading_gif">Loading icon:</label>
            </td>
            <td>
              <select class="select_icon select_icon_320 select_gif" name="loading_gif" id="loading_gif" onchange="wds_loading_gif(jQuery(this).val(), '<?php echo WD_S_URL ?>')">
                <?php
                foreach ($loading_gifs as $key => $loading_gif) {
                  ?>
              <option value="<?php echo $key; ?>" <?php if ($global_options->loading_gif == $key) echo 'selected="selected"'; ?>><?php echo $loading_gif; ?></option>
                  <?php
                }
                ?>
              </select>
              <fieldset class="wds_fieldset wds_center">
                <legend><?php _e('Preview', 'wds'); ?></legend>
                <img id="load_gif_img" class="load_gif_img" src="<?php echo WD_S_URL . '/images/loading/' . $global_options->loading_gif . '.gif'; ?>" />
              </fieldset>
              <div class="spider_description"></div>
            </td>
          </tr>
        <tr>
          <td class="spider_label"><label><?php _e('Turn SliderWD Media Upload', 'wds'); ?>:</label></td>
          <td>
            <input type="radio" id="spider_uploader1" name="spider_uploader" <?php echo (($global_options->spider_uploader == 1)? "checked='checked'" : ""); ?> value="1" /><label <?php echo ($global_options->spider_uploader ? 'class="selected_color"' : ''); ?> for="spider_uploader1"><?php _e('Yes', 'wds'); ?></label>
            <input type="radio" id="spider_uploader0" name="spider_uploader" <?php echo (($global_options->spider_uploader == 0)? "checked='checked'" : ""); ?> value="0" /><label <?php echo ($global_options->spider_uploader ? '' : 'class="selected_color"'); ?> for="spider_uploader0"><?php _e('No', 'wds'); ?></label>
            <div class="spider_description"><?php _e('Choose the option to use the custom media upload instead of the WordPress default for adding images.', 'wds'); ?></div>
          </td>
        </tr>
        <tr>
            <td class="spider_label"><label for="possib_add_ffamily_input">Add font-family: </label></td>
            <td>
              <input type="text" id="possib_add_ffamily_input" value="" class="spider_box_input"/>
              <input type="hidden" id="possib_add_ffamily" name="possib_add_ffamily" value="<?php echo $global_options->possib_add_ffamily; ?>"/>
              <input type="hidden" id="possib_add_ffamily_google" name="possib_add_ffamily_google" value="<?php echo $global_options->possib_add_ffamily_google; ?>"/>
              <input id="possib_add_google_fonts" type="checkbox" name="possib_add_google_fonts" value="1"/><label for="possib_add_google_fonts">Add to Google fonts</label>
              <input id="add_font_family" class="wds_not_image_buttons" type="button" onclick="set_ffamily_value();spider_set_input_value('task', 'save_font_family');spider_form_submit(event, 'sliders_form')" value="Add font-family"/>
              <div class="spider_description">The added font family will appear in the drop-down list of fonts.</div>
            </td>
          </tr>
        </tbody>
      </table>
      <fieldset class="wds_fieldset" disabled="disabled">
        <legend><?php _e('Default options for layers', 'wds'); ?></legend>
        <div class="wd_error" style="padding: 5px; font-size: 14px; color: #000000 !important;">This functionality is disabled in free version.</div>
        <table>
          <tbody>
            <tr>
              <td class="spider_label">
                <label for="default_layer_ffamily">Font family: </label>
              </td>
              <td>
                <select class="select_icon select_icon_320" style="width: 200px;" id="default_layer_ffamily" onchange="wds_change_fonts('', 1)" name="default_layer_ffamily">
                  <?php
                  $fonts = (isset($global_options->default_layer_google_fonts) && $global_options->default_layer_google_fonts) ? $google_fonts : $font_families;
                  foreach ($fonts as $key => $font_family) {
                    ?>
                    <option value="<?php echo $key; ?>" <?php echo (($global_options->default_layer_ffamily == $key) ? 'selected="selected"' : ''); ?>><?php echo $font_family; ?></option>
                    <?php
                  }
                  ?>
                </select>
                <input id="default_layer_google_fonts1" type="radio" name="default_layer_google_fonts" value="1" <?php echo (($global_options->default_layer_google_fonts) ? 'checked="checked"' : ''); ?> onchange="wds_change_fonts()" />
                <label for="default_layer_google_fonts1">Google fonts</label>
                <input id="default_layer_google_fonts0" type="radio" name="default_layer_google_fonts" value="0" <?php echo (($global_options->default_layer_google_fonts) ? '' : 'checked="checked"'); ?> onchange="wds_change_fonts()" />
                <label for="default_layer_google_fonts0">Default</label>
                <div class="spider_description"></div>
              </td>
            </tr>
            <tr>
              <td class="spider_label">
                <label for="default_layer_fweight">Font weight: </label>
              </td>
              <td>
                <select class="select_icon select_icon_320" style="width:70px" id="default_layer_fweight"  name="default_layer_fweight">
                  <?php
                  foreach ($default_layer_fweights as $key => $default_layer_fweight) {
                    ?>
                    <option value="<?php echo $key; ?>" <?php echo (($global_options->default_layer_fweight == $key) ? 'selected="selected"' : ''); ?>><?php echo $default_layer_fweight; ?></option>
                    <?php
                  }
                  ?>
                </select>
                <div class="spider_description"></div>
              </td>
            </tr>
            <tr>
              <td class="spider_label">
                <label for="default_layer_effect_in">Effect In:</label>
              </td>
              <td>
                  <span style="display: table-cell;">
                    <input id="default_layer_start" class="spider_int_input" type="text" value="<?php echo $global_options->default_layer_start; ?>" name="default_layer_start"/>ms
                    <div class="spider_description">Start</div>
                  </span>
                <span style="display: table-cell;">
                    <select class="select_icon select_icon_320" name="default_layer_effect_in" id="default_layer_effect_in" style="width:150px;">
                    <?php
                    foreach ( $default_layer_effects_in as $key => $default_layer_effect_in ) {
                      ?>
                      <option value="<?php echo $key; ?>" <?php if ( $global_options->default_layer_effect_in == $key ) {
                        echo 'selected="selected"';
                      } ?>><?php echo $default_layer_effect_in; ?></option>
                      <?php
                    }
                    ?>
                    </select>
                    <div class="spider_description">Effect</div>
                  </span>
                  <span style="display: table-cell;">
                    <input id="default_layer_duration_eff_in" class="spider_int_input" type="text" value="<?php echo $global_options->default_layer_duration_eff_in; ?>" name="default_layer_duration_eff_in"/>ms
                    <div class="spider_description">Duration</div>
                  </span>
                <span style="display: table-cell;">
                    <input id="default_layer_infinite_in" type="text" name="default_layer_infinite_in" value="<?php echo $global_options->default_layer_infinite_in; ?>" class="spider_int_input" title="0 for play infinte times" />
                    <div class="spider_description">Iteration</div>
                  </span>
              </td>
            </tr>
            <tr>
              <td class="spider_label">
                <label for="default_layer_effect_out">Effect Out:</label>
              </td>
              <td>
                <span style="display: table-cell;">
                  <input id="default_layer_end" class="spider_int_input" type="text" value="<?php echo $global_options->default_layer_end; ?>" name="default_layer_end">ms
                  <div class="spider_description">Start</div>
                </span>
                <span style="display: table-cell;">
                  <select class="select_icon select_icon_320" name="default_layer_effect_out" id="default_layer_effect_out" style="width:150px;">
                  <?php
                  foreach ($default_layer_effects_out as $key => $default_layer_effect_out) {
                    ?>
                    <option value="<?php echo $key; ?>" <?php if ($global_options->default_layer_effect_out == $key) echo 'selected="selected"'; ?>><?php echo $default_layer_effect_out; ?></option>
                    <?php
                  }
                  ?>
                  </select>
                  <div class="spider_description">Effect</div>
                </span>
                <span style="display: table-cell;">
                  <input id="default_layer_duration_eff_out" class="spider_int_input" type="text" onkeypress="return spider_check_isnum(event)" value="<?php echo $global_options->default_layer_duration_eff_out; ?>" name="default_layer_duration_eff_out">ms
                  <div class="spider_description">Duration</div>
                </span>
                <span style="display: table-cell;">
                  <input id="default_layer_infinite_out" type="text" name="default_layer_infinite_out" value="<?php echo $global_options->default_layer_infinite_out; ?>" class="spider_int_input" title="0 for play infinte times" />
                  <div class="spider_description">Iteration</div>
                </span>
              </td>
            </tr>
            <tr>
              <td title="Add class" class="spider_label">
                <label for="default_layer_add_class">Add class: </label>
              </td>
              <td>
                <input id="default_layer_add_class" class="spider_char_input" type="text" value="<?php echo $global_options->default_layer_add_class; ?>" name="default_layer_add_class" />
             </td>
            </tr>
          </tbody>
        </table>
      </fieldset>
      <input id="task" name="task" type="hidden" value="" />
      <input id="lay_option" name="lay_option" type="hidden" value="" />
    </form>
    <?php
  }
}