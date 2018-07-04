<?php
// Typesetter CMS Femto Theme 1.1

include_once($page->theme_dir . '/functions.php');

?><!DOCTYPE html>
<html lang="<?php echo $language ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php gpOutput::GetHead(); ?>
  </head>

  <body>
    <input id="nav-toggle" name="void" type="checkbox" checked="checked"/>
    <aside class="sidenav">
      <label for="nav-toggle" title="<?php echo $menu_i18n; ?>"><?php echo $menu_i18n; ?></label>
      <?php
        echo common::Link('', $site_title, '', 'class="branding"');
        gpOutput::Get('FullMenu'); 
      ?>
      <div class="admin-links">
        <?php gpOutput::GetAdminLink(); ?>
      </div>
    </aside>

    <div class="hero" role="banner">
      <?php gpOutput::Get("Extra", 'Header'); ?>
    </div>

    <main class="main-content">
      <?php $page->GetContent(); ?>
    </main>

  </body>
</html>
