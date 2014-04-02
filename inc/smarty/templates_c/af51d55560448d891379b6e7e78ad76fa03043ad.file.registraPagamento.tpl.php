<?php /* Smarty version Smarty-3.1.14, created on 2014-03-30 22:56:14
         compiled from ".\view\registraPagamento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167635338cb3e6e1a29-40318347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af51d55560448d891379b6e7e78ad76fa03043ad' => 
    array (
      0 => '.\\view\\registraPagamento.tpl',
      1 => 1396229116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167635338cb3e6e1a29-40318347',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nome' => 0,
    'total' => 0,
    'formas' => 0,
    'linha' => 0,
    'bandeiras' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5338cb3e729972_08528945',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5338cb3e729972_08528945')) {function content_5338cb3e729972_08528945($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Multi Dental</title>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="./css/registraPagamento.css"/>
        <link type="text/css" rel="stylesheet" href="./inc/Formee/css/formee-style.css"/>
        <link type="text/css" rel="stylesheet" href="./inc/Formee/css/formee-structure.css" />
        <script type="text/javascript" src="../inc/Formee/js/formee.js"></script>
        <style>
            #cartao, #cheque, #deposito, #dinheiro, #plano, #transferencia {
                display: none;
            }
        </style>
    </head>
    <body>
        <div id="container" class="formee">
            <form method="post" action="Financeiro.php" enctype="multipart/form-data">
                <h3>Registrar Pagamento</h3>
                <hr/>
                <div class="grid-8-12">
                    <label for="nomePaciente">Paciente:</label>
                    <input type="text" class="txt bradius" name="nomePaciente" value="<?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
" readonly="true"/>
                </div>
                <div class="grid-4-12">
                    <label for="valorTotal">Total: R$</label>
                    <input type="text" class="txt bradius" name="valorTotal" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
,00" readonly="true"/>
                </div>
                <div class="grid-8-12">
                    <label for="formaPagamento">Forma de Pagamento:</label>
                    <select class="txt bradius" name="formaPagamento" id="formapagamento">
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

                <div>&nbsp;</div>

                <div id="boleto">

                </div>

                <div id="cartao">
                    <!--Cartão: Bandeira, Data, Parcelas-->
                    <div class="grid-6-12">
                        <label for="bandeiraCartao">Bandeira: </label>
                        <select name="bandeiraCartao" class="txt bradius">
                            <option value="">Selecione</option>
                            <?php  $_smarty_tpl->tpl_vars['linha'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linha']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bandeiras']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['linha']->key => $_smarty_tpl->tpl_vars['linha']->value){
$_smarty_tpl->tpl_vars['linha']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['idbandeiracartao'];?>
"><?php echo $_smarty_tpl->tpl_vars['linha']->value['descricao'];?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="grid-6-12">
                        <label for="parcelasCartao">Parcelas:</label>
                        <input type="text" class="txt bradius" name="parcelasCartao"/>
                    </div>
                </div>

                <div id="cheque">
                    <!--Cheque: banco, agencia, conta, numero do chque, data, nome do cheque-->
                    <div class="grid-8-12">
                        <label for="nomeCheque">Nome:</label>
                        <input type="text" class="txt bradius" name="nomeCheque"/>
                    </div>
                    <div class="grid-4-12">
                        <label for="bancoCheque">Banco:</label>
                        <input type="text" name="bancoCheque" class="txt bradius"/>
                    </div>
                    <div class="grid-4-12">
                        <label for="agenciaCheque">Agência:</label>
                        <input type="text" class="txt bradius" name="agenciaCheque"/>
                    </div>
                    <div class="grid-4-12">
                        <label for="contaCheque">Conta:</label>
                        <input type="text" class="txt bradius" name="contaCheque"/>
                    </div>
                    <div class="grid-4-12">
                        <label for="dataCheque">Data:</label>
                        <input type="text" class="txt bradius datepicker" name="dataCheque"/>
                    </div>
                </div>

                <div id="deposito">
                    <!--Deposito: data do deposito, banco, terminal, Agencia acolhedora ou Num Transação-->
                    <div class="grid-12-12">
                        <label for="comprovanteDeposito">Comprovante:</label>
                        <input type="file" class="txt bradius" name="comprovanteDeposito"/>
                    </div>
                </div>

                <div id="plano">
                    <!--Plano-->
                    <div class="grid-12-12">
                        <label for="nomePlano">Plano:</label>
                        <input type="text" class="txt bradius" name="nomePlano"/>
                    </div>
                </div>

                <div id="transferencia">
                    <!--Transferencia: Agencia e Num Conta-->
                    <div class="grid-12-12">
                        <label for="comprovanteTranferencia">Comprovante:</label>
                        <input type="file" class="txt bradius" name="comprovanteTransferencia"/>
                    </div>
                </div>

                <div id="botoes">
                    <hr/>
                    <a href="Financeiro.php" class="btn bradius" target="_parent">Cancelar</a>
                    <input type="submit" class="btn bradius" value="Salvar"/>
                    <input type="hidden" name="acao" value="registraPagamento"/>
                </div>
            </form>
        </div>
        <script type="text/javascript" src="./js/lib/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="../js/plugins/jQuery-ui/js/jquery.ui.datepicker-pt-BR.js"></script>
        <script>
            $(document).ready(function() {
                var elem = document.getElementById("formapagamento");
                elem.onchange = function() {
                    var divCartao = document.getElementById("cartao");
                    var divCheque = document.getElementById("cheque");
                    var divDeposito = document.getElementById("deposito");
                    var divPlano = document.getElementById("plano");
                    var divTransferencia = document.getElementById("transferencia");
                    divCartao.style.display = (this.value == "1") ? "block" : "none";
                    divCheque.style.display = (this.value == "2") ? "block" : "none";
                    divDeposito.style.display = (this.value == "3") ? "block" : "none";
                    divPlano.style.display = (this.value == "5") ? "block" : "none";
                    divTransferencia.style.display = (this.value == "6") ? "block" : "none";
                };

                $(".datepicker").datepicker();

            });
        </script>
    </body>
</html><?php }} ?>