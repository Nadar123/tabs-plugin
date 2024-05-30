<?php 
// Define a class for the shortcode
class TabscodeClass {
    // Registers the shortcode
    public function register_shortcode() {
        add_shortcode('acf_tabs', array($this, 'render_acf_tabs'));
    }
    //render_acf_tabs generates the HTML output for the shortcode
    public function render_acf_tabs() {
        ob_start();
    ?>
        <div class="main-wrapper">
            <?php 
            // Get the 'tabs' field from the 'option' page
            $tabs = get_field('tabs', 'option');
            if($tabs): 
            ?>
                <ul class="tab-titles">
                    <?php 
                    // Loop through each tab
                    foreach($tabs as $index => $tab): 
                        $title = $tab['title']; 
                    ?>
                        <?php if($title): ?>
                            <li class="tab-item" data-tab-index="<?php echo $index; ?>"><?php echo esc_html($title); ?></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>

                <?php 
                    foreach($tabs as $index => $tab): 
                        $image = $tab['image']; 
                        $quotation = $tab['quotation'];
                        $text = $tab['text']; 
                        $user_img = $tab['user_img']; 
                        $name = $tab['name']; 
                        $role = $tab['role']; 
                        $company_icon = $tab['company_icon']; 
                        $company_icon = $tab['company_icon']; 
                        $number = $tab['number'];
                        $text_under_number = $tab['text_under_number']; 
                        $read_case_study = $tab['read_case_study']; 
                        $icon = $tab['icon']; 
                        $brands_icon = $tab['brands_icon'];
                ?>
                <div class="tab-content" data-tab-index="<?php echo $index; ?>">
                    <div class="content">
                        <div class="left-side" <?php if($image): ?>style="background-image: url('<?php echo esc_url($image['url']); ?>');" <?php endif; ?>>
                            <div class="inner" >
                                 <?php if($quotation): ?>
                                    <div class="quotation image-wrapper">
                                    <img src="<?php echo esc_url($quotation['url']); ; ?>" alt="Description of small image"> 
                                    </div>
                                <?php  endif; ?>
                                <?php if($text): ?>
                                <p class="text-under-image">
                                    <strong><?php echo esc_html(substr($text, 0, 57)); ?></strong><?php echo esc_html(substr($text, 50)); ?>
                                </p>
    
                                <?php  endif; ?>
    
                                <div class="name-and-role">
                                    <?php if($user_img): ?>
                                        <div class="image-box">
                                            <img src="<?php echo esc_url($user_img['url']); ; ?>" alt="Description of small image"> 
                                        </div>
                                     <?php  endif; ?>
                                     <div class="name-and-role__content">
                                         <?php if($name): ?>
                                             <p class="name"><?php echo esc_html($name); ?></p>
                                         <?php  endif; ?>
                                         <?php if($role): ?>
                                             <span class="role"><?php echo esc_html($role); ?></span>
                                         <?php  endif; ?>
                                     </div>
                                </div>
                                <?php if($company_icon): ?>
                                    <div class="icon-wrapper">
                                        <img src="<?php echo esc_url($company_icon['url']); ?>" alt="<?php echo esc_html($name); ?>"> 
                                    </div>
                                <?php  endif; ?>
                            </div>
    
                            
                        </div>    
                        <div class="right-side">
                            <div class="reduction top-div">
                                <?php if($number): ?>
                                    <p class="number"><?php echo esc_html($number); ?> 
                                    <span class="show desktop">%</span>
                                    <span class="show mobile">-</span>
                                    <span class="hide onMobile">60%</span>
                                </p>
                                <?php  endif; ?>
                                <?php if($text_under_number): ?>
                                    <p class="text-under-number"><?php echo esc_html($text_under_number) ;?></p>
                                <?php  endif; ?>
                            </div>
                            <div class="case-study">
                                <?php if($icon): ?>
                                    <div class="image-wrapper">
                                        <img src="<?php echo esc_url($icon['url']); ?>" alt="Description of icon">
                                    </div>
                                <?php  endif; ?>
                                <?php if($text_under_number): ?>
                                    <p class="text"><?php echo esc_html($read_case_study); ?></p>
                                <?php  endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="bottom brand-wrapper">
                        <?php if(!empty($brands_icon) && is_array($brands_icon)): ?>
                            <h4 class="title">Trusted By</h4>
                            <div class="bottom-wrapper">
                                <?php foreach($brands_icon as $index => $image): ?>
                                    <div class="brand-icon brand-icon<?php echo $index; ?>">
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                   
                <?php  endforeach; ?>
            <?php endif; ?>
        </div>
    <?php
    // End output buffering and return the buffered output.
    return ob_get_clean();
    }
}
// Instantiate the class
$tabscode = new TabscodeClass();

// Register the shortcode
$tabscode->register_shortcode();