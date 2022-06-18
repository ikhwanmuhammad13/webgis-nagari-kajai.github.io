<div class="container>
<div class="row">
    <div class="col-sn-12">
        <div class="panel panel-primary">
                <div class="panel-heading">Pemetaan Kualitas Air</div>
                <div class="panel-body">
                        <div id="map" style="height: 500px;"></div>

                </div>
        </div>
    </div>
</div>
</div>

						<script src="../geojson/batas_nagari_kajai.js"></script>


<script>


var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11'
	});

var peta2 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/satellite-v9'
	});


var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	});

var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/dark-v10'
	});


/////////////////////////////////

	var map = L.map('map', {
    center: [0.15822581020963297, 99.909399216014],
    zoom: 12,
    layers: [peta3]
	});

	var baseMaps = {
    "Light": peta1,
    "Sattelite": peta2,
	"Streets" : peta3,
	"Dark" : peta4,
	};


//////////////////////////////////

var mck_icon = L.icon({
    iconUrl: '<?= base_url('icon/location-pin11.png')?>',
    iconSize:     [38, 40], // size of the icon
    iconAnchor:   [22, 25], // point of the icon which will correspond to marker's location
});


var air_bersih_mck = L.layerGroup();
	var mck1 = L.marker ([0.16009, 99.9360683330], {icon:mck_icon}).bindPopup('<b>Air Aliran Sungai Kecil</b><br /><br />TDS : 9<br />P.h : 6.7<br />Salinitas : 0<br />Konduktivitas : 1.6<br />Turbiditas : 14.4<br />Suhu (C) : 24.6<br />Do : 0.08').addTo(air_bersih_mck);
	var mck2 = L.marker ([0.165481667, 99.9332766670], {icon:mck_icon}).bindPopup('<b>Air Mata Air</b><br /><br />TDS : 17<br />P.h : 6.29<br />Salinitas : 0<br />Konduktivitas : 2.8<br />Turbiditas : 3.8<br />Suhu (C) : 29.8<br />Do : 0.01').addTo(air_bersih_mck);
	var mck3 = L.marker ([0.162511667, 99.9340183330], {icon:mck_icon}).bindPopup('<b>Air Pamsimas</b><br /><br />TDS : 49<br />P.h : 7.18<br />Salinitas : 0<br />Konduktivitas : 8.1<br />Turbiditas : 7.6<br />Suhu (C) : 28.1<br />Do : 0').addTo(air_bersih_mck);
	var mck4 = L.marker ([0.16642508, 99.9308567900], {icon:mck_icon}).bindPopup('<b>Air Pamsimas</b><br /><br />TDS : 50<br />P.h : 6.4<br />Salinitas : 0<br />Konduktivitas : 8.6<br />Turbiditas : 10.8<br />Suhu (C) : 32.3<br />Do : 0.04').addTo(air_bersih_mck);
	var mck5 = L.marker ([0.16557204, 99.9305672300], {icon:mck_icon}).bindPopup('<b>Air Pamsimas</b><br /><br />TDS : 50<br />P.h : 6.44<br />Salinitas : 0<br />Konduktivitas : 8.2<br />Turbiditas : 6.7<br />Suhu (C) : 30.3<br />Do : 0').addTo(air_bersih_mck);
	var mck6 = L.marker ([0.161738333, 99.9346366670], {icon:mck_icon}).bindPopup('<b>Air Parit</b><br /><br />TDS : 19<br />P.h : 6.84<br />Salinitas : 0<br />Konduktivitas : 3.7<br />Turbiditas : 31.4<br />Suhu (C) : 26<br />Do : 0').addTo(air_bersih_mck);
	var mck7 = L.marker ([0.162026667, 99.9337183330], {icon:mck_icon}).bindPopup('<b>Air PDAM</b><br /><br />TDS : 16<br />P.h : 9.12<br />Salinitas : 0<br />Konduktivitas : 3.2<br />Turbiditas : 0<br />Suhu (C) : 28<br />Do : 0').addTo(air_bersih_mck);
	var mck8 = L.marker ([0.16579348, 99.9306522000], {icon:mck_icon}).bindPopup('<b>Air PDAM</b><br /><br />TDS : 18<br />P.h : 6.96<br />Salinitas : 0<br />Konduktivitas : 3.2<br />Turbiditas : 9.7<br />Suhu (C) : 29.3<br />Do : 0').addTo(air_bersih_mck);
	var mck9 = L.marker ([0.165468333, 99.9305833330], {icon:mck_icon}).bindPopup('<b>Air Sumur Galian</b><br /><br />TDS : 74<br />P.h : 5.98<br />Salinitas : 0<br />Konduktivitas : 12.8<br />Turbiditas : 3.2<br />Suhu (C) : 25.7<br />Do : 0').addTo(air_bersih_mck);
	var mck10 = L.marker ([0.166426667, 99.9314933330], {icon:mck_icon}).bindPopup('<b>Air Sumur Galian</b><br /><br />TDS : 30<br />P.h : 6.45<br />Salinitas : 0<br />Konduktivitas : 6<br />Turbiditas : 8.4<br />Suhu (C) : 24.2<br />Do : 0').addTo(air_bersih_mck);
	var mck11 = L.marker ([0.165967, 99.9306450000], {icon:mck_icon}).bindPopup('<b>Air Sumur Galian</b><br /><br />TDS : 51<br />P.h : 5.3<br />Salinitas : 0<br />Konduktivitas : 7.1<br />Turbiditas : 0<br />Suhu (C) : 29.4<br />Do : 0.02').addTo(air_bersih_mck);
	var mck12 = L.marker ([0.163861144, 99.9302642860], {icon:mck_icon}).bindPopup('<b>Air Sumur Galian</b><br /><br />TDS : 25<br />P.h : 6.43<br />Salinitas : 0<br />Konduktivitas : 4.6<br />Turbiditas : 0<br />Suhu (C) : 26.5<br />Do : 0.11').addTo(air_bersih_mck);
	var mck13 = L.marker ([0.164296667, 99.9299783330], {icon:mck_icon}).bindPopup('<b>Air Sumur Galian</b><br /><br />TDS : 29<br />P.h : 6.28<br />Salinitas : 0<br />Konduktivitas : 4.9<br />Turbiditas : 0<br />Suhu (C) : 26.4<br />Do : 0').addTo(air_bersih_mck);
	var mck14 = L.marker ([0.163281667, 99.9298983330], {icon:mck_icon}).bindPopup('<b>Air Sumur Galian</b><br /><br />TDS : 38<br />P.h : 5.84<br />Salinitas : 0<br />Konduktivitas : 6.1<br />Turbiditas : 0<br />Suhu (C) : 26.1<br />Do : 0').addTo(air_bersih_mck);
	var mck15 = L.marker ([0.1672911, 99.9330619000], {icon:mck_icon}).bindPopup('<b>Air Sumur Galian</b><br /><br />TDS : 18<br />P.h : 6.84<br />Salinitas : 0<br />Konduktivitas : 3.2<br />Turbiditas : 18.4<br />Suhu (C) : 30.3<br />Do : 0').addTo(air_bersih_mck);
	var mck16 = L.marker ([0.164296667, 99.9299783330], {icon:mck_icon}).bindPopup('<b>Air Sungai</b><br /><br />TDS : 31<br />P.h : 7.26<br />Salinitas : 0<br />Konduktivitas : 5.3<br />Turbiditas : 7.5<br />Suhu (C) : 28.8<br />Do : 0.02').addTo(air_bersih_mck);
	var mck17 = L.marker ([0.163281667, 99.9298983330], {icon:mck_icon}).bindPopup('<b>Air Sungai</b><br /><br />TDS : 18<br />P.h : 6.92<br />Salinitas : 0<br />Konduktivitas : 3.3<br />Turbiditas : 5.2<br />Suhu (C) : 28.4<br />Do : 0').addTo(air_bersih_mck);
	var mck18 = L.marker ([0.16329947, 99.9302962800], {icon:mck_icon}).bindPopup('<b>Air Sungai</b><br /><br />TDS : 19<br />P.h : 6.62<br />Salinitas : 0<br />Konduktivitas : 3.2<br />Turbiditas : 9.8<br />Suhu (C) : 30.8<br />Do : 0').addTo(air_bersih_mck);
	var mck19 = L.marker ([0.165150342, 99.9307355810], {icon:mck_icon}).bindPopup('<b>Air Sungai</b><br /><br />TDS : 25<br />P.h : 7.44<br />Salinitas : 0<br />Konduktivitas : 8.5<br />Turbiditas : 7.9<br />Suhu (C) : 28.7<br />Do : 0').addTo(air_bersih_mck);
	var mck20 = L.marker ([0.162026667, 99.9337183330], {icon:mck_icon}).bindPopup('<b>Air Sungai Besar</b><br /><br />TDS : 31<br />P.h : 7.23<br />Salinitas : 0<br />Konduktivitas : 5.1<br />Turbiditas : 7.3<br />Suhu (C) : 28.8<br />Do : 0').addTo(air_bersih_mck);


var minum_icon = L.icon({
    iconUrl: '<?= base_url('icon/location-pin15.png')?>',
    iconSize:     [38, 40], // size of the icon
    iconAnchor:   [22, 25], // point of the icon which will correspond to marker's location
});


var air_minum = L.layerGroup();
	var minum1 = L.marker ([0.165150342, 99.9307355810], {icon:minum_icon}).bindPopup('<b>Air Mata Air</b><br /><br />TDS : 10<br />P.h : 6.74<br />Salinitas : 0<br />Konduktivitas : 1.7<br />Turbiditas : 0<br />Suhu (C) : 26.5<br />Do : 0').addTo(air_minum);
	var minum2 = L.marker ([0.166966, 99.9321290000], {icon:minum_icon}).bindPopup('<b>Air Mata Air</b><br /><br />TDS : 18<br />P.h : 7.13<br />Salinitas : 0<br />Konduktivitas : 3.4<br />Turbiditas : 0<br />Suhu (C) : 29.9<br />Do : 0.5').addTo(air_minum);
	var minum3 = L.marker ([0.16316896, 99.9300386000], {icon:minum_icon}).bindPopup('<b>Air Pamsimas</b><br /><br />TDS : 47<br />P.h : 6.93<br />Salinitas : 0<br />Konduktivitas : 8.3<br />Turbiditas : 3.2<br />Suhu (C) : 25.3<br />Do : 0').addTo(air_minum);
	var minum4 = L.marker ([0.166887, 99.9317055000], {icon:minum_icon}).bindPopup('<b>Air Pamsimas</b><br /><br />TDS : 17<br />P.h : 7.17<br />Salinitas : 0<br />Konduktivitas : 2.8<br />Turbiditas : 0<br />Suhu (C) : 30.1<br />Do : 0.2').addTo(air_minum);
	var minum5 = L.marker ([0.16857867, 99.9314482500], {icon:minum_icon}).bindPopup('<b>Air PDAM</b><br /><br />TDS : 17<br />P.h : 6.93<br />Salinitas : 0<br />Konduktivitas : 1.9<br />Turbiditas : 2.5<br />Suhu (C) : 30.9<br />Do : 0.2').addTo(air_minum);
	var minum6 = L.marker ([0.16642508, 99.9308567900], {icon:minum_icon}).bindPopup('<b>Air Sawah</b><br /><br />TDS : 22<br />P.h : 7.33<br />Salinitas : 0<br />Konduktivitas : 4.3<br />Turbiditas : 2.4<br />Suhu (C) : 27.7<br />Do : 0').addTo(air_minum);



	L.geoJSON(batas_nagari,{
		"weight": 2,
        "opacity": 1,
        "color": '#798079',
        "dashArray" : '3',
	}).addTo(map);


	var overlays = {
		'Air Bersih MCK': air_bersih_mck,
        'Air Minum': air_minum,

	};


	var layerControl = L.control.layers(baseMaps, overlays).addTo(map);


</script>