<!DOCTYPE html>
<html lang="<?= CURRENT_LANG; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="header">

        <div class="logo">
            <a href="<?= home_url(); ?>" aria-label="<?= get_bloginfo('name'); ?>">
                logo
                <?php //get_template_part('template-parts/layout/logo', null, [] ); ?>
            </a>
        </div>

    </header>

  <main>
