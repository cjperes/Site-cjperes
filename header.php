<?php

/**
 * O Header do tema
 *
 * Exibe toda a <head> e abre a tag body
 *
 * @theme Nork Digital Framework
 * 
 */
?>

<!DOCTYPE html>
<html lang="pt-br">
<!--<CJPERES/>-->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Desenvolvimento de sites, lojas virtuais e aplicativos mobile, Especialista em WordPress, Desenvolvimento de temas e Plugins. Aplicativos em Ionic.">
  <meta name="keywords" content="desenvolvedor,wordpress,temas,plugins,aplicativos,criação de site,loja virtual,ionic,desenvolvimento de site">
  <meta name="robots" content="index, nofollow">
  <meta name="author" content="Caio Peres">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.min.css" />
  <link rel="shortcut icon" href="./img/favicon.svg" />
</head>
<!--puxa título do site do personalizar do WordPress -->
<title><?php bloginfo('name') ?> <?php wp_title('|'); ?></title>

<?php if (!get_option('site_icon')) : ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
<?php endif; ?>
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>