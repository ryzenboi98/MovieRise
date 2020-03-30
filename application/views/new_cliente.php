<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
</head>
<body>
    
<?php echo validation_errors() ?>
<?php echo form_open('registar') ?>

    <fieldset>
        <label for="username">Nome:</label>
        <input type="text" name="username" value="<?php echo set_value('username'); ?>" />
        <label for="email">Nome:</label>
        <input type="email" name="email" value="<?php echo set_value('email'); ?>" />
        <label for="password">Nome:</label>
        <input type="password" name="password" value="<?php echo set_value('password'); ?>" />
    </fieldset>
    <input type="submit" value="Enviar" />
    </form>

</body>
</html>