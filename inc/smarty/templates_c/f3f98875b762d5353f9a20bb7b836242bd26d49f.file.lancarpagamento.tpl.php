<?php /* Smarty version Smarty-3.1.14, created on 2014-03-29 12:42:33
         compiled from ".\view\lancarpagamento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2172953323de6ed6326-78384296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3f98875b762d5353f9a20bb7b836242bd26d49f' => 
    array (
      0 => '.\\view\\lancarpagamento.tpl',
      1 => 1396107751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2172953323de6ed6326-78384296',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53323de6f12063_58366423',
  'variables' => 
  array (
    'pacientes' => 0,
    'linha' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53323de6f12063_58366423')) {function content_53323de6f12063_58366423($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Multi Dental</title>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="./css/style_lancamento.css" />
        <link type="text/css" rel="stylesheet" href="./js/plugins/jQuery-ui/css/start/jquery-ui-start.css" />
        <link type="text/css" rel="stylesheet" href="./inc/Formee/css/formee-style.css" />
        <link type="text/css" rel="stylesheet" href="./inc/Formee/css/formee-structure.css" />

        <script type="text/javascript" src="./js/lib/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="./js/plugins/jquery.maskedinput.min.js"></script>
        <script type="text/javascript" src="./js/plugins/jquery.validate.js"></script>
        <script type="text/javascript" src="./js/plugins/jQuery-ui/js/jquery.ui.datepicker-pt-BR.js"></script>
        <script type="text/javascript" src="./js/plugins/jQuery-ui/js/jquery-ui.js"></script>
        <script type="text/javascript" src="./inc/Formee/js/formee.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#data').mask("99/99/9999");
                //$('#valor').mask('9999,99');

                $(function() {
                    $("#data").datepicker();
                });
            });

            function showUser(str) {
                if (str == "") {
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                }
                if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else { // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "../Financeiro.php?lp=" + str, true);
                xmlhttp.send();
            }
        </script>
    </head>
    <body>
        <div id="container">
            <form class="formee" method="post" action="../Financeiro.php" target="_parent">
                <h3>Lançar Pagamento</h3>
                <hr/>

                <div id="">

                    <div class="grid-6-12">
                        <label>Paciente:</label>
                        
                        <select name="pacientes" onchange="showUser(this.value)">
                            <option value="">Selecione o Paciente</option>
                            <?php  $_smarty_tpl->tpl_vars['linha'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linha']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pacientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['linha']->key => $_smarty_tpl->tpl_vars['linha']->value){
$_smarty_tpl->tpl_vars['linha']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['prontuario'];?>
"><?php echo $_smarty_tpl->tpl_vars['linha']->value['nome'];?>
</option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="grid-12-12 txtHint">

                        <table>

                            <tr id="rotulo">
                                <td id="data">Data</td>
                                <td id="servico">Serviço</td>
                                <td id="valor">Valor - R$</td>
                            </tr>
                            <tr onMouseOver="javascript:this.style.backgroundColor='#d2d2d2'" onMouseOut="javascript:this.style.backgroundColor=''">
                                <td id="data"></td>
                                <td id="servico"><a href="" data-fancybox-type="iframe"></a></td>
                                <td id="valor"></td>
                            </tr>
                            <tr>
                                <td id="total">TOTAL</td>
                                <td id="total"></td>
                                <td id="valorTotal"></td>
                            </tr>
                        </table>

                    </div>
                </div>
                <div id="botoes">
                    <hr/>
                    <a href="Financeiro.php" class="cancel bradius" target="_parent">Cancelar</a>
                    <input type="submit" name="btn_cad" class="btn bradius" value="Registrar" />
                    <input type="hidden" name="idPaciente" value="" />
                    <input type="hidden" name="acao" value="registrar" />
                </div>
        </div>

    </form>
</div>
</body>
</html><?php }} ?>