<?php //dpm($content);

hide($content['field_url']);
hide($content['links']);
hide($content['field_image']);
hide($content['field_new_company']);

?>

<div class="main-company" style="background-color: #fff;padding: 15px;text-align: center;">
  <div class="main-company-logo">
    <a href="<?php print render($content['field_url']['#items'][0]['url']); ?>">
      <img src="<?php print render($content['company_logo']); ?>">
    </a>
  </div>
  <p><?php print render($title); ?> <?php print render($content['company_tag_line']); ?></p>
  <ul class="inline-list">
  <?php foreach ($content['company'] as $company): ?>
    <li><a href="<?php print render($company['url']); ?>">
      <img src="<?php print render($company['image']); ?>">
    </a></li>
  <?php endforeach;?>
  </ul>
</div>


