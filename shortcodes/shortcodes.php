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

                <?php include plugin_dir_path(__FILE__) . 'inc/tab-content.php'; ?>
                
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