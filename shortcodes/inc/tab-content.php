<?php 
  foreach($tabs as $index => $tab): 
    $image = $tab['image']; 
    $quotation = $tab['quotation'];
    $text = $tab['text']; 
    $user_img = $tab['user_img'];
    $user_img_mobile = $tab['user_img_mobile'];  
    $name = $tab['name']; 
    $role = $tab['role']; 
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
            <!-- <p>&ldquo;</p> -->
            <img src="<?php echo esc_url($quotation['url']); ; ?>" alt="Description of small image"> 
            </div>
          <?php  endif; ?>
          <?php if($text): ?>
            <p class="text-under-image">
                <span><?php echo esc_html(substr($text, 0, 57)); ?></span><?php echo esc_html(substr($text, 50)); ?>
            </p>
          <?php  endif; ?>

          <div class="name-and-role">
            <?php if($user_img || $user_img_mobile): ?>
                <div class="image-box">
                    <img class="desktop" src="<?php echo esc_url($user_img['url']); ; ?>" alt="Description of small image"> 
                    <img class="mobile" src="<?php echo esc_url($user_img_mobile['url']); ; ?>" alt="Description of small image"> 
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
            <?php $brands_title = $tab['brands_title']; ?>
            <?php if($brands_title): ?>
                <h4 class="title"><?php echo esc_html($brands_title); ?></h4>
            <?php endif; ?>
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


            <div class="left-side" <?php if(isset($image) && $image): ?>style="background-image: url('<?php echo esc_url($image['url']); ?>');" <?php endif; ?>>

