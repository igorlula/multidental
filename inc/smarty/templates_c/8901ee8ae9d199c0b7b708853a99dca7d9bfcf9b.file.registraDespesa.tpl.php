<?php /* Smarty version Smarty-3.1.14, created on 2014-04-08 19:53:32
         compiled from ".\view\registraDespesa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3991533b4d55d6b1e2-14513396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8901ee8ae9d199c0b7b708853a99dca7d9bfcf9b' => 
    array (
      0 => '.\\view\\registraDespesa.tpl',
      1 => 1396997591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3991533b4d55d6b1e2-14513396',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_533b4d55da4d97_23092328',
  'variables' => 
  array (
    'formas' => 0,
    'linha' => 0,
    'paciente' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533b4d55da4d97_23092328')) {function content_533b4d55da4d97_23092328($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Multi Dental</title>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="./css/registraDespesa.css"/>
        <link type="text/css" rel="stylesheet" href="./inc/Formee/css/formee-style.css"/>
        <link type="text/css" rel="stylesheet" href="./inc/Formee/css/formee-structure.css" />
        <link type="text/css" rel="stylesheet" href="./js/plugins/jQuery-ui/css/start/jquery-ui-start.css" />
        
    </head>
    <body>
        <div id="container" class="formee">
            <form method="post" action="Financeiro.php" enctype="multipart/form-data" target="_parent">
                <h3>Registrar Despesa</h3>
                <hr/>
                <div class="grid-8-12">
                    <label for="descricao">Descrição:</label>
                    <input type="text" class="txt bradius" name="descricao"/>
                </div>
                <div class="grid-4-12">
                    <label for="data">Data:</label>
                    <input type="text" class="txt bradius datepicker" name="data" id="data"/>
                </div>
                <div class="grid-8-12">
                    <label for="formapagamento">Forma de pagamento:</label>
                    <select class="txt bradius" name="formapagamento" id="formapagamento">
                        <option value="">Selecione</option>
                        <?php  $_smarty_tpl->tpl_vars['linha'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linha']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['linha']->key => $_smarty_tpl->tpl_vars['linha']->value){
$_smarty_tpl->tpl_vars['linha']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['idformapagamento'];?>
"><?php echo $_smarty_tpl->tpl_vars['linha']->value['descricao'];?>
</option>
                        <?php } ?>
                    </select>
                </div>
                <div class="grid-4-12">
                    <label for="valorPago">Valor: R$</label>
                    <input type="text" class="txt bradius" name="valorPago"/>
                </div>

                <div>
                    <hr/>
                </div>
                <div id="botoes">
                    <a href="Financeiro.php" class="btn bradius" target="_parent">Cancelar</a>
                    <input type="submit" class="btn bradius" value="Salvar"/>
                    <input type="hidden" name="acao" value="registraDespesa"/>
                    <input type="hidden" name="paciente" value="<?php echo $_smarty_tpl->tpl_vars['paciente']->value;?>
"/>
                </div>
            </form>
        </div>

        <script type="text/javascript" src="./js/lib/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="../inc/Formee/js/formee.js"></script>
        <script type="text/javascript" src="./js/plugins/jQuery-ui/js/jquery.ui.datepicker-pt-BR.js"></script>
        <script type="text/javascript" src="./js/plugins/jquery.maskedinput.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.datepicker').mask("99/99/9999");
                $(function() {
                    $('.datepicker').datepicker();
                });

            });
        </script>
    </body>
</html><?php }} ?>