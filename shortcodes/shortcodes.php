<?php
// Define a class for the shortcode
class TabscodeClass {
    // Registers the shortcode
    public function register_shortcode() {
        add_shortcode('acf_tabs', array($this, 'render_acf_tabs'));
    }
    //render_acf_tabs generates the HTML
   public function render_acf_tabs() {
        ob_start();
        $tabs = get_field('tabs', 'option');
        if($tabs): 
        ?>
            <ul class="tabs-container main-container">
                <?php 
                // Loop through each item
                foreach($tabs as $index => $tab): 
                    $activeClass = $index === 0 ? 'active' : '';
                ?>
                    <li class="item tab-item <?php echo esc_attr($activeClass); ?>" data-tab-index="<?php echo esc_attr($index); ?>">
                        <?php if(!empty($tab['title'])): ?>
                            <div class="tab-title title">
                                <p> <?php echo esc_html($tab['title']); ?>  </p>
                                <span class="chevron">&#62;</span>
                            </div>
                        <?php endif; ?>
                        <div class="tab-content">
                            <?php if(!empty($tab['image'])): ?>
                                <div class="image-wrapper">
                                    <img src="<?php echo esc_url($tab['image']['url']); ?>" alt="<?php echo esc_attr($tab['image']['alt']); ?>">
                                </div>                           
                            <?php endif; ?>
                            <?php if(!empty($tab['text'])): ?>
                                <div class="title">
                                    <h3><?php echo wp_kses_post($tab['text']); ?> <span>&rarr;</span></h3>
                                </div>
                            <?php endif; ?>
                             <?php if(!empty($tab['body'])): ?>
                                <div class="text-wrapper">
                                    <p class="text"><?php echo wp_kses_post($tab['body']); ?> <span>&rarr;</span></p>
                                </div>
                            <?php endif; ?>
                            
                            <?php if(!empty($tab['small_image'])): ?>
                                <div class="small-image-wrapper">
                                    <img src="<?php echo esc_url($tab['small_image']['url']); ?>" alt="<?php echo esc_attr($tab['small_image']['alt']); ?>">
                                </div>                   
                            <?php endif; ?>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <?php return ob_get_clean();?>
    <?php }
}

// Instantiate the class
$tabscode = new TabscodeClass();

// Register the shortcode
$tabscode->register_shortcode();
