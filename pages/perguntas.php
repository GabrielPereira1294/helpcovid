<?php
include_once '../config/conexao.class.php';
include_once '../config/config.php';
include_once '../header.php';
?>
<div class="header header-top" style="margin-bottom: 20px;">
    <a href="painel.html"><button class="btn"><i class="fas fa-angle-left"></i></button></a>
    <h1>Diagnóstico Diário</h1>
</div>
<div class="container" style="margin-bottom: 50px;">
    <div class="col-12" id="quest-01">
        <div class="card-covid quest-covid mx-auto">
            <h1>Pergunta 01</h1>
            <p>Você já fez algum exame de COVID19 com resultado positivo?</p>
        </div>
        <button class="btn btn-blue" id="resp-01-a" style="background: none; background: var(--color02); margin-bottom: 10px;">Sim</button>
        <button class="btn btn-blue" id="resp-01-b" style="background: none; background: var(--color02); margin-bottom: 10px;">Não</button>
    </div>
    <div class="col-12" id="quest-02" style="display: none;">
        <div class="card-covid quest-covid mx-auto">
            <h1>Perguntas 02</h1>
            <p>Você está com dores na região da garganta?</p>
        </div>
        <button class="btn btn-blue" id="resp-02-a" style="background: none; background: var(--color02); margin-bottom: 10px;">Sim</button>
        <button class="btn btn-blue" id="resp-02-b" style="background: none; background: var(--color02); margin-bottom: 10px;">Não</button>
    </div>
    <div class="col-12" id="quest-03" style="display: none;">
        <div class="card-covid quest-covid mx-auto">
            <h1>Perguntas 03</h1>
            <p>Você está tossindo?</p>
        </div>
        <button class="btn btn-blue" id="resp-03-a" style="background: none; background: var(--color02); margin-bottom: 10px;">Sim</button>
        <button class="btn btn-blue" id="resp-03-b" style="background: none; background: var(--color02); margin-bottom: 10px;">Não</button>
    </div>
    <div class="col-12" id="quest-04" style="display: none;">
        <div class="card-covid quest-covid mx-auto">
            <h1>Perguntas 04</h1>
            <p>Você está com coriza?</p>
        </div>
        <button class="btn btn-blue" id="resp-04-a" style="background: none; background: var(--color02); margin-bottom: 10px;">Sim</button>
        <button class="btn btn-blue" id="resp-04-b" style="background: none; background: var(--color02); margin-bottom: 10px;">Não</button>
    </div>
    <div class="col-12" id="quest-05" style="display: none;">
        <div class="card-covid quest-covid mx-auto">
            <h1>Perguntas 05</h1>
            <p>Você está com dores no corpo?</p>
        </div>
        <button class="btn btn-blue" id="resp-05-a" style="background: none; background: var(--color02); margin-bottom: 10px;">Sim</button>
        <button class="btn btn-blue" id="resp-05-b" style="background: none; background: var(--color02); margin-bottom: 10px;">Não</button>
    </div>
    <div class="col-12" id="quest-06" style="display: none;">
        <div class="card-covid quest-covid mx-auto">
            <h1>Perguntas 06</h1>
            <p>Sua temperatura está acima de 38° C?</p>
        </div>
        <button class="btn btn-blue" id="resp-06-a" style="background: none; background: var(--color02); margin-bottom: 10px;">Sim</button>
        <button class="btn btn-blue" id="resp-06-b" style="background: none; background: var(--color02); margin-bottom: 10px;">Não</button>
    </div>
    <div class="col-12" id="quest-07" style="display: none;">
        <div class="card-covid quest-covid mx-auto">
            <h1>Perguntas 07</h1>
            <p>Você está com dificuldades para respirar?</p>
        </div>
        <button class="btn btn-blue" id="resp-07-a" style="background: none; background: var(--color02); margin-bottom: 10px;">Sim</button>
        <button class="btn btn-blue" id="resp-07-b" style="background: none; background: var(--color02); margin-bottom: 10px;">Não</button>
    </div>
    <div class="col-12" id="quest-08" style="display: none;">
        <div class="card-covid quest-covid mx-auto">
            <h1>Perguntas 08</h1>
            <p>Você teve contato com alguém que esteja com sintomas?</p>
        </div>
        <button class="btn btn-blue" id="resp-08-a" style="background: none; background: var(--color02); margin-bottom: 10px;">Sim</button>
        <button class="btn btn-blue" id="resp-08-b" style="background: none; background: var(--color02); margin-bottom: 10px;">Não</button>
    </div>
    <form style="display: none;" name="form1" action="perguntas_resposta.php" method="post">
        <input type="hidden" value="" name="resp01" id="resp01">
        <input type="hidden" value="" name="resp02" id="resp02">
        <input type="hidden" value="" name="resp03" id="resp03">
        <input type="hidden" value="" name="resp04" id="resp04">
        <input type="hidden" value="" name="resp05" id="resp05">
        <input type="hidden" value="" name="resp06" id="resp06">
        <input type="hidden" value="" name="resp07" id="resp07">
        <input type="hidden" value="" name="resp08" id="resp08">
    </form>
</div>
<!-- Scripts -->
<script type="text/javascript" src="<?php echo TEMPLATE ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE ?>js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE ?>js/popper.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE ?>js/mask.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE ?>js/validate.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE ?>js/scripts.js"></script>

<script>
    $("#resp-01-a").click(function () {
        $('#quest-02').show();
        $('#quest-01').hide();
        $("#resp01").val('s')
    });
    $("#resp-01-b").click(function () {
        $('#quest-02').show();
        $('#quest-01').hide();
        $("#resp01").val('n')
    });

    $("#resp-02-a").click(function () {
        $('#quest-03').show();
        $('#quest-02').hide();
        $("#resp02").val('s')
    });
    $("#resp-02-b").click(function () {
        $('#quest-03').show();
        $('#quest-02').hide();
        $("#resp02").val('n')
    });

    $("#resp-03-a").click(function () {
        $('#quest-04').show();
        $('#quest-03').hide();
        $("#resp03").val('s')
    });
    $("#resp-03-b").click(function () {
        $('#quest-04').show();
        $('#quest-03').hide();
        $("#resp03").val('n')
    });

    $("#resp-04-a").click(function () {
        $('#quest-05').show();
        $('#quest-04').hide();
        $("#resp04").val('s')
    });
    $("#resp-04-b").click(function () {
        $('#quest-05').show();
        $('#quest-04').hide();
        $("#resp04").val('n')
    });

    $("#resp-05-a").click(function () {
        $('#quest-06').show();
        $('#quest-05').hide();
        $("#resp05").val('s')
    });
    $("#resp-05-b").click(function () {
        $('#quest-06').show();
        $('#quest-05').hide();
        $("#resp05").val('n')
    });

    $("#resp-06-a").click(function () {
        $('#quest-07').show();
        $('#quest-06').hide();
        $("#resp06").val('s')
    });
    $("#resp-06-b").click(function () {
        $('#quest-07').show();
        $('#quest-06').hide();
        $("#resp06").val('n')
    });

    $("#resp-07-a").click(function () {
        $('#quest-08').show();
        $('#quest-07').hide();
        $("#resp07").val('s')
    });
    $("#resp-07-b").click(function () {
        $('#quest-08').show();
        $('#quest-07').hide();
        $("#resp07").val('n')
    });

    $("#resp-08-a").click(function () {
        $("#resp08").val('s');
        document.forms["form1"].submit();
    });
    $("#resp-08-b").click(function () {
        $("#resp08").val('n');
        document.forms["form1"].submit();
    });
</script>
</body>
</html>