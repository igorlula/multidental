<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Multi Dental</title>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="./css/style_agendamento.css" />
        <script type="text/javascript" src="./js/lib/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="./js/plugins/jquery.maskedinput.min.js"></script>
        <script type="text/javascript" src="./js/plugins/jquery.validate.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#data').mask("99/99/9999");
                $('#telefone').mask("(99)9999-9999");
            });
        </script>
    </head>
    <body>
        <div id="container">
            <form id="frm_agendamento" method="post" enctype="multipart/form-data" target="_parent">
                <h3>Agendamento</h3>
                <hr />

                <div id="conteudo">
                    <p><label>Paciente:</label></p>
                    <input type="text" class="txt bradius" id="paciente" name="paciente" />
                    <p>
                        <label>Tipo de Agendamento:</label>
                        <select name="tipoAgendamento" id="tipoAgendamento" class="txt bradius">
                            <option value="">[Selecione]</option>
                            <option value="Canal">Canal</option>
                            <option value="Consulta Inicial">Consulta Inicial</option>
                            <option value="Extracao">Extração</option>
                            <option value="Limpeza">Limpeza</option>
                            <option value="Protese">Prótese</option>
                            <option value="Restauracao">Restauração</option>
                            <option value="Revisao">Revisão</option>
                        </select>
                    </p>
                    <p><label for="telefone">Telefone:</label></p>
                    <input type="text" class="txt bradius" id="telefone" name="telefone" />
                    <p><label for="email">Email:</label></p>
                    <input type="text" class="txt bradius" id="email" name="email" />
                    <p><label for="data">Data:</label></p>
                    <input type="text" class="txt bradius" id="data" name="data" />
                    <p>
                        <label for="hora">Hora:</label>
                        <select name="hora" id="hora" class="txt bradius">
                            {foreach from=$horarios item=linha}
                                <option value="{$linha.hora}">{$linha.hora}</option>
                            {/foreach}
                        </select>
                    </p>
                    <div id="botoes">
                        <a href="Agenda.php" class="cancel bradius" target="_parent">Cancelar</a>
                        <input type="submit" name="btn_cad" class="btn bradius" value="Salvar" />
                        <input type="hidden" name="acao" value="salvar" />
                    </div>
                </div><!-- conteudo -->
            </form>
        </div><!-- container -->
    </body>
</html>
