<h2 class="box-title"><?php echo $check_list->getName() ?></h2>
<hr class="m-t-0 m-b-40">
<h6 style="color:red;">* criterio obligatorio</h6>

<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form class="m-t-40" action="<?php echo url_for('checkList/resolver?id=' . $form->getObject()->getId()) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
    <?php if (!$form->getObject()->isNew()) : ?>
        <input type="hidden" name="sf_method" value="put" />
    <?php endif; ?>
    <div class="row">

        <ul class="error_list col-md-12">
            <?php foreach ($form->getGlobalErrors() as $name => $error) : ?>
                <li><?php echo $name . ': ' . $error ?></li>
            <?php endforeach; ?>
        </ul>
        <?php $instanceForm = $form->getEmbeddedForm('standardList') ?>
        <!-- iteramos por todos los  formularios embebidos  -->
        <?php foreach ($form['standardList'] as $key => $subForm) : ?>
            <?php $instanceForm2 = $instanceForm->getEmbeddedForm($key) ?>
            <?php if ($instanceForm2->getObject()->getIsKillerQuestion()) : ?>
            <div  class="form-group col-md-6 required"><div><?php echo  $subForm['option_selected']->renderLabel()  ?></div></div>
            <?php endif; ?>
            <?php if (!$instanceForm2->getObject()->getIsKillerQuestion()) : ?>
            <div class="form-group col-md-6"> <?php echo  $subForm['option_selected']->renderLabel()  ?></div>
            <?php endif; ?>
            <div class="form-group col-md-4 <?php echo $subForm['option_selected']->hasError() ? 'has-error' : '' ?>">
                <?php echo $subForm['option_selected'] ?>
                <?php echo $subForm['option_selected']->renderError() ?>
            </div>
        <?php endforeach; ?>

        <div class="col-md-12">
            <?php echo $form->renderHiddenFields(true) ?>
        </div>
        <div class="row">
            <div class="col m12">
                &nbsp;<a href="<?php echo url_for('checkList/index') ?>">Volver a la lista</a>
                <input class="btn btn-info" type="submit" value="Guardar" />

            </div>
        </div>

</form>
<style>
    
    form {
        padding-left: 130px;
        padding-right: 130px;
    }
    .required div:before { 
        content:"*"; 
        color: red;
        font-size: 110%;
    }
</style>