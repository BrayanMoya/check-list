<?php use_helper('I18N') ?>

<h2><?php echo __('Oops! No posee las credenciales correctas para la pagina solicitada', null, 'sf_guard') ?></h2>

<p><?php echo sfContext::getInstance()->getRequest()->getUri() ?></p>

<h3><?php echo __('Inicie sesion con las credenciales correctas', null, 'sf_guard') ?></h3>

<?php echo get_component('sfGuardAuth', 'signin_form') ?>