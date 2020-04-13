<?php
include_once '../config/conexao.class.php';
include_once '../config/config.php';
include_once '../header.php';
include_once '../lib/pessoaDAO.class.php';
include_once '../lib/diagnosticoDAO.class.php';

$idpessoa = $_SESSION['idpessoa'];
$pessoa = new pessoaDAO();
$listpessoa = $pessoa->selectIdPess($idpessoa);

$diagnostico = new diagnosticoDAO();
$listdiagnostico = $diagnostico->selectIdDiag($idpessoa);

$cont = 0;
if ($listdiagnostico->examecovid == "s") {
    $cont++;
}if ($listdiagnostico->doresgar == "s") {
    $cont++;
}if ($listdiagnostico->tosse == "s") {
    $cont++;
}if ($listdiagnostico->coriza == "s") {
    $cont++;
}if ($listdiagnostico->dorescorpo == "s") {
    $cont++;
}if ($listdiagnostico->temp == "s") {
    $cont++;
}if ($listdiagnostico->difresp == "s") {
    $cont++;
}if ($listdiagnostico->contato == "s") {
    $cont++;
}
$porcentagem = ($cont / 8) * 100;

$data = new DateTime();
$data = $data->format('d');
?>
<div class="header header-intern">
    -
</div>
<div class="container">
    <div class="col-12">
        <a href="#" class="card-covid margin-top row">
            <div class="col-4 my-auto">
                <div class="img-covid"><i class="fas fa-user" style="font-size: 50px;"></i></div>
            </div>
            <div class="col-7 card-perfil my-auto" style="margin-left: -15px;">
                <h2>Seja bem vindo(a)!</h2>
                <h1><?php echo $listpessoa->nome ?></h1>
            </div>
            <div class="col-1 my-auto">
                <i class="fas fa-bell"></i>
            </div>
        </a>
    </div>
    <div class="col-12">
        <a href="perguntas.php"><button class="btn btn-blue">Como você está hoje?</button></a>
        <div class="card-covid row" style="padding-top: 35px; margin-top: -20px;">
            <div class="col-6 dados-dia">
                <h1><span>Dia</span> <?php echo $data ?></h1>
            </div>
            <div class="col-6 dados-dia text-right">
                <h1><span><?php echo $porcentagem ?>%</span> <i class="fas fa-smile"></i></h1>
            </div>
        </div>
        <div class="card-covid map-covid" id="map"></div>
        <a href="#"><button class="btn btn-blue">Fazer alerta</button></a>
    </div>
</div>
<script>
    var citymap = {
        sampa: {
            center: {lat: -23.560362, lng: -46.587773}
        }
    };
    var atualposicial_lat;
    var atualposicial_log;
    function initMap() {
        // Cria o mapa


        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) { // callback de sucesso
                // ajusta a posição do marker para a localização do usuário
                atualposicial_lat = position.coords.latitude;
                atualposicial_log = position.coords.longitude;


                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 14,
                    center: {lat: atualposicial_lat, lng: atualposicial_log},
                    mapTypeId: 'terrain'
                });

                // Construct the circle for each value in citymap.
                // Note: We scale the area of the circle based on the population.
                for (var city in citymap) {
                    // Add the circle for this city to the map.
                    var cityCircle1 = new google.maps.Circle({
                        strokeColor: '#FF0000',
                        strokeOpacity: 0.8,
                        strokeWeight: 2,
                        fillColor: '#FF0000',
                        fillOpacity: 0.35,
                        map: map,
                        center: {lat: atualposicial_lat, lng: atualposicial_log},
                        radius: (1 * 1000)
                    });
                    var cityCircle2 = new google.maps.Circle({
                        strokeColor: '#FF0000',
                        strokeOpacity: 0.8,
                        strokeWeight: 2,
                        fillColor: '#FF0000',
                        fillOpacity: 0.35,
                        map: map,
                        center: {lat: -18.8800397, lng: -47.05878999999999},
                        radius: (1 * 1000)
                    });
                }
            },
                    function (error) { // callback de erro
                        //alert('Erro ao obter localização!');
                        console.log('Erro ao obter localização.', error);
                    });
        } else {
            //alert('Navegador não suporta Geolocalização!');
        }
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdn5NRSUo7jymzHoTsYaGssC43-6Dc0XQ&callback=initMap"></script>
<?php
include_once '../footer.php';
