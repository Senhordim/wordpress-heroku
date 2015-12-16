<?php

/* ************************************************************************************** 
  Custom Controls
************************************************************************************** */

function swm_add_customizer_custom_controls( $wp_customize ) {

    class SWM_Customize_Control_Textarea extends WP_Customize_Control {
        public $type = 'textarea';
        public function render_content() {
            ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <textarea <?php $this->link(); ?> rows="10" style="width: 98%;"><?php echo esc_textarea( $this->value() ); ?></textarea>
                </label>
            <?php
        }
    }

  class SWM_Customize_Control_Multiple_Select extends WP_Customize_Control {
    public $type = 'multiple-select';
    public function render_content() {
        ?>
        <label>
            <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
            <select <?php $this->link(); ?> multiple="multiple" style="height: 156px;">
                <?php
                foreach ( $this->choices as $value => $label ) {
                $selected = ( in_array( $value, $this->value() ) ) ? selected( 1, 1, false ) : '';
                echo '<option value="' . esc_attr( $value ) . '"' . $selected . '>' . $label . '</option>';
                }
                ?>
            </select>
            </label>
        <?php
        }
    }

    class SWM_Customize_Control_Number extends WP_Customize_Control {
        public $type = 'number';
        public function render_content() {
            ?>
            <label>
            <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
            <input type="number" <?php $this->link(); ?> value="<?php echo intval( $this->value() ); ?>" style="width: 98%;"/>
        </label>
        <?php
        }
    }

    class SWM_Customize_Sub_Title extends WP_Customize_Control {
        public $type = 'sub-title';
        public function render_content() {
        ?>
            <h4 class="customize-sub-title"><?php echo esc_html( $this->label ); ?></h4>
        <?php
        }
    }

    class SWM_Customize_Description extends WP_Customize_Control {
        public $type = 'description';
        public function render_content() {
        ?>
        <p class="customize-description"><?php echo esc_html( $this->label ); ?></p>
        <?php
        }
    }  
    
    class SWM_Customize_Slider_Control extends WP_Customize_Control {            
        public $type = 'slider';     
       
        public function render_content() { ?>
            <div class="swm_customizer_slider_control"> 
                <label>
                    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>                         
                </label>     
                <div class="left">
                    <input type="range" name="points" min="0" max="100" step="10" <?php $this->link(); ?>>
                </div>
                <div class="right">
                    <input class="swm_customizer_slider_value" name="<?php echo $this->id; ?>" type="text" <?php $this->link(); ?> value="<?php echo $this->value(); ?>" />            
                    <div class="swm_customizer_slider"></div>
                </div>
                <div class="clear"></div>
            </div>
        <?php
        }  
    }

    class SWM_Customize_Parallax_Slider_Control extends WP_Customize_Control {            
        public $type = 'slider';     
       
        public function render_content() { ?>
            <div class="swm_customizer_slider_control"> 
                <label>
                    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>                         
                </label>     
                <div class="left">
                    <input type="range" name="points" min="-10.0" max="10.0" step="0.1" <?php $this->link(); ?>>
                </div>
                <div class="right">
                    <input class="swm_customizer_slider_value" name="<?php echo $this->id; ?>" type="text" <?php $this->link(); ?> value="<?php echo $this->value(); ?>" />            
                    <div class="swm_customizer_slider"></div>
                </div>
                <div class="clear"></div>
            </div>
        <?php
        }  
    }

    class SWM_Customize_Control_Mini_Text extends WP_Customize_Control {
        public $type = 'minitext';
        public function render_content() {
            ?>
            <div class="swm_customizer_minitext">
                <label class="<?php echo $this->section; ?>"><span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span></label>
                <input class="swm_minitext_field <?php echo $this->section; ?>" type="text" value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->link(); ?> />
            </div>
        <?php
        }
    }

    class SWM_Customize_Control_Mini_Select extends WP_Customize_Control {
        public $type = 'miniselect';
        public function render_content() {
            
            if ( empty( $this->choices ) )
                return;
            ?>
            <label class="<?php echo $this->id; ?>">
                <span class="customize-control-title swm_customize_miniselect"><?php echo esc_html( $this->label ); ?></span>
                <select <?php $this->link(); ?>>
                    <?php
                    foreach ( $this->choices as $value => $label )
                        echo '<option value="' . esc_attr( $value ) . '"' . selected( $this->value(), $value, false ) . '>' . $label . '</option>';
                    ?>
                </select>
            </label>                
        <?php
        }
    }


} // swm_add_customizer_custom_controls function end

add_action( 'customize_register', 'swm_add_customizer_custom_controls' );