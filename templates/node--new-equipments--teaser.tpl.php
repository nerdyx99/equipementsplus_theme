<?php //dpm($content);

hide($content['field_url']);
hide($content['links']);
hide($content['field_image']);
hide($content['field_new_company']);

?>

<div class="main-company" style="background-color: #fff;padding: 15px;text-align: center; margin-bottom:20px;">
  <div class="main-company-logo">
  	<?php if (!empty($content['company_logo'])): ?>
      <a href="<?php print render($content['field_url']['#items'][0]['url']); ?>">
        <img src="<?php print render($content['company_logo']); ?>">
      </a>
    <?php endif; ?>
  </div>
  <?php if (!empty($content['company_logo'])): ?>
    <p><?php print render($title); ?> <?php print render($content['company_tag_line']); ?></p>
  <?php else: ?>
    <p>Other Brands</p>
  <?php endif; ?>
  
  <ul class="inline-list">
  <?php foreach ($content['company'] as $company): ?>
    <li>
      <?php if (!empty($company['url'])):?><a href="<?php print render($company['url']); ?>"><?php endif; ?>
        <img style="margin-bottom:10px;" width="100" height="60" src="<?php print render($company['image']); ?>">
      <?php if (!empty($company['url'])):?></a><?php endif; ?>
    </li>
  <?php endforeach;?>
  </ul>
</div>


