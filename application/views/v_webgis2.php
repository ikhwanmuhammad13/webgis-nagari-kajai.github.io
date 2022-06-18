<div class="container>
<div class="row">
    <div class="col-sn-12">
        <div class="panel panel-primary">
                <div class="panel-heading">Pemetaan Intepretasi Citra</div>
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



	//////////////////////////////////////////////////////////////////

var ladang_icon = L.icon({
    iconUrl: '<?= base_url('icon/location-pin7.png')?>',
    iconSize:     [38, 40], // size of the icon
    iconAnchor:   [22, 25], // point of the icon which will correspond to marker's location
});

	var ladang = L.layerGroup();
	var ladang1 = L.marker([0.164384259, 99.9290226110], {icon:ladang_icon}).bindPopup('Ladang Jagung').addTo(ladang);
	var ladang2 = L.marker([0.161009695, 99.9363789190], {icon:ladang_icon}).bindPopup('Ladang').addTo(ladang);
	var ladang3 = L.marker([0.172328481, 99.9054899260], {icon:ladang_icon}).bindPopup('Ladang Kacang').addTo(ladang);
	var ladang4 = L.marker([0.157861264, 99.9323399920], {icon:ladang_icon}).bindPopup('Ladang').addTo(ladang);
	var ladang5 = L.marker([0.15722322, 99.9319821160], {icon:ladang_icon}).bindPopup('Ladang Cabai dan Kunyit').addTo(ladang);

var hutan_icon = L.icon({
    iconUrl: '<?= base_url('icon/location-pin6.png')?>',
    iconSize:     [38, 40], // size of the icon
    iconAnchor:   [22, 25], // point of the icon which will correspond to marker's location
});

	var hutan_rimba = L.layerGroup();
	var hutan_rimba1 = L.marker ([0.177218144, 99.9393444000], {icon:hutan_icon}).bindPopup('Hutan Rimba').addTo(hutan_rimba);
	var hutan_rimba2 = L.marker ([0.183411753, 99.9363830910], {icon:hutan_icon}).bindPopup('Hutan Rimba').addTo(hutan_rimba);
	var hutan_rimba3 = L.marker ([0.178220376, 99.9452020100], {icon:hutan_icon}).bindPopup('Hutan Rimba').addTo(hutan_rimba);

var kebun_icon = L.icon({
    iconUrl: '<?= base_url('icon/location-pin3.png')?>',
    iconSize:     [38, 40], // size of the icon
    iconAnchor:   [22, 25], // point of the icon which will correspond to marker's location
});

	var kebun = L.layerGroup();
	var kebun1 = L.marker ([0.153053626, 99.9420253110], {icon:kebun_icon}).bindPopup('Kebun Karet').addTo(kebun);
	var kebun2 = L.marker ([0.152666667, 99.9597166670], {icon:kebun_icon}).bindPopup('Kebun Karet').addTo(kebun);
	var kebun3 = L.marker ([0.15911262, 99.9386305280], {icon:kebun_icon}).bindPopup('Kebun Karet').addTo(kebun);
	var kebun4 = L.marker ([0.15625648, 99.9482521840], {icon:kebun_icon}).bindPopup('Kebun Sawit').addTo(kebun);
	var kebun5 = L.marker ([0.163622688, 99.9325656680], {icon:kebun_icon}).bindPopup('Kebun Sawit').addTo(kebun);
	var kebun6 = L.marker ([0.166519913, 99.9409342320], {icon:kebun_icon}).bindPopup('Kebun Sawit').addTo(kebun);
	var kebun7 = L.marker ([0.165597044, 99.9321391010], {icon:kebun_icon}).bindPopup('Kebun Sawit').addTo(kebun);
	var kebun8 = L.marker ([0.159171424, 99.9406116420], {icon:kebun_icon}).bindPopup('Kebun Sawit').addTo(kebun);

var sawah_icon = L.icon({
    iconUrl: '<?= base_url('icon/location-pin4.png')?>',
    iconSize:     [38, 40], // size of the icon
    iconAnchor:   [22, 25], // point of the icon which will correspond to marker's location
});

	var sawah = L.layerGroup();
	var sawah1 = L.marker ([0.170245, 99.9331083330], {icon:sawah_icon}).bindPopup('Sawah').addTo(sawah);
	var sawah2 = L.marker ([0.170328139, 99.9367785150], {icon:sawah_icon}).bindPopup('Sawah').addTo(sawah);
	var sawah3 = L.marker ([0.164183416, 99.9345795880], {icon:sawah_icon}).bindPopup('Sawah').addTo(sawah);
	var sawah4 = L.marker ([0.164146565, 99.9267702650], {icon:sawah_icon}).bindPopup('Sawah').addTo(sawah);
	var sawah5 = L.marker ([0.158403222, 99.9309499990], {icon:sawah_icon}).bindPopup('Sawah').addTo(sawah);
	var sawah6 = L.marker ([0.160964877, 99.9322948810], {icon:sawah_icon}).bindPopup('Sawah').addTo(sawah);

var faskes_icon = L.icon({
    iconUrl: '<?= base_url('icon/location-pin1.png')?>',
    iconSize:     [38, 40], // size of the icon
    iconAnchor:   [22, 25], // point of the icon which will correspond to marker's location
});

	var faskes = L.layerGroup();
	var faskes1 = L.marker ([0.170025942, 99.9389264270], {icon:faskes_icon}).bindPopup('Puskesmas Nagari Kajai').addTo(faskes);
	var faskes2 = L.marker ([0.1684428, 99.9362049000], {icon:faskes_icon}).bindPopup('Polindes Jorong Limpato').addTo(faskes);
	var faskes3 = L.marker ([0.1681546, 99.9358556000], {icon:faskes_icon}).bindPopup('Polindes Bidan Yoan Mairana').addTo(faskes);
	var faskes4 = L.marker ([0.160723171, 99.9289380430], {icon:faskes_icon}).bindPopup('Praktek Dokter Umum dr. Sri Afni').addTo(faskes);
	var faskes5 = L.marker ([0.159639758, 99.9283846750], {icon:faskes_icon}).bindPopup('Praktek Umum & Dokter Keluarga').addTo(faskes);
	var faskes6 = L.marker ([0.157749262, 99.9306967390], {icon:faskes_icon}).bindPopup('Polindes Bidan Ica').addTo(faskes);

var faspend_icon = L.icon({
    iconUrl: '<?= base_url('icon/location-pin11.png')?>',
    iconSize:     [38, 40], // size of the icon
    iconAnchor:   [22, 25], // point of the icon which will correspond to marker's location
});

	var faspend = L.layerGroup();
	var faspend1 = L.marker ([0.171841552, 99.9404579090], {icon:faspend_icon}).bindPopup('MAN 4 Pasaman Barat').addTo(faspend);
	var faspend2 = L.marker ([0.16748661, 99.9310333800], {icon:faspend_icon}).bindPopup('MIS Al Wahid Kajai Kampung Tengah').addTo(faspend);
	var faspend3 = L.marker ([0.15991415, 99.9284788100], {icon:faspend_icon}).bindPopup('MTs Muhammadiyah Kajai').addTo(faspend);
	var faspend4 = L.marker ([0.16132542, 99.9279838600], {icon:faspend_icon}).bindPopup('SDN 02 Talamau').addTo(faspend);
	var faspend5 = L.marker ([0.16998912, 99.9314526700], {icon:faspend_icon}).bindPopup('SDN 08 Talamau').addTo(faspend);
	var faspend6 = L.marker ([0.14994901, 99.9273038400], {icon:faspend_icon}).bindPopup('SDN 16 Talamau').addTo(faspend);
	var faspend7 = L.marker ([0.1653508, 99.9326756400], {icon:faspend_icon}).bindPopup('SDN 22 Talamau').addTo(faspend);
	var faspend8 = L.marker ([0.16135519, 99.9301620700], {icon:faspend_icon}).bindPopup('SLB Miftahul Khoir').addTo(faspend);
	var faspend9 = L.marker ([0.15215179, 99.9269340100], {icon:faspend_icon}).bindPopup('SMPN 2 Talamau').addTo(faspend);
	var faspend10 = L.marker ([0.16093009, 99.9286175800], {icon:faspend_icon}).bindPopup('TK Aba Kajai').addTo(faspend);

var fasib_icon = L.icon({
    iconUrl: '<?= base_url('icon/location-pin10.png')?>',
    iconSize:     [38, 40], // size of the icon
    iconAnchor:   [22, 25], // point of the icon which will correspond to marker's location
});

	var fasib = L.layerGroup();
	var fasib1 = L.marker ([0.167501788, 99.9296397840], {icon:fasib_icon}).bindPopup('Mushalla Ukhuwah Al Falah').addTo(fasib);
	var fasib2 = L.marker ([0.165441743, 99.9327771720], {icon:fasib_icon}).bindPopup('Mushalla Al Muttaqin').addTo(fasib);
	var fasib3 = L.marker ([0.171046188, 99.9412894270], {icon:fasib_icon}).bindPopup('Mushalla MIS Al Wahid').addTo(fasib);
	var fasib4 = L.marker ([0.171180434, 99.9407290580], {icon:fasib_icon}).bindPopup('Masjid Nurul Islam').addTo(fasib);
	var fasib5 = L.marker ([0.169552332, 99.9342026940], {icon:fasib_icon}).bindPopup('Mushalla Nurul Falah').addTo(fasib);
	var fasib6 = L.marker ([0.166237449, 99.9307082450], {icon:fasib_icon}).bindPopup('Mushalla Babussalam').addTo(fasib);
	var fasib7 = L.marker ([0.166291405, 99.9311913710], {icon:fasib_icon}).bindPopup('Masjid Nurul Yaqin').addTo(fasib);
	var fasib8 = L.marker ([0.167470613, 99.9309425340], {icon:fasib_icon}).bindPopup('Masjid Al Mujahidin').addTo(fasib);
	var fasib9 = L.marker ([0.168742411, 99.9320185650], {icon:fasib_icon}).bindPopup('Mushalla Wustho').addTo(fasib);
	var fasib10 = L.marker ([0.167713037, 99.9350064060], {icon:fasib_icon}).bindPopup('Mushalla Nikmah').addTo(fasib);
	var fasib11 = L.marker ([0.167508585, 99.9356315590], {icon:fasib_icon}).bindPopup('Mushalla Nurul Ikhlas').addTo(fasib);
	var fasib12 = L.marker ([0.166973683, 99.9368889750], {icon:fasib_icon}).bindPopup('Masjid Raya Kajai').addTo(fasib);
	var fasib13 = L.marker ([0.170471976, 99.9390170250], {icon:fasib_icon}).bindPopup('Mushalla Nurul Hikmah').addTo(fasib);

var faskan_icon = L.icon({
    iconUrl: '<?= base_url('icon/location-pin8.png')?>',
    iconSize:     [38, 40], // size of the icon
    iconAnchor:   [22, 25], // point of the icon which will correspond to marker's location
});

	var faskan = L.layerGroup();
	var faskan1 = L.marker ([0.169151307, 99.9381036130], {icon:faskan_icon}).bindPopup('BAMUS Nagari Kajai').addTo(faskan);
	var faskan2 = L.marker ([0.17888421, 99.9644656200], {icon:faskan_icon}).bindPopup('BPP Nagari Kajai').addTo(faskan);
	var faskan3 = L.marker ([0.1627098, 99.9305623700], {icon:faskan_icon}).bindPopup('KAN Nagari Kajai').addTo(faskan);
	var faskan4 = L.marker ([0.169218, 99.9381500000], {icon:faskan_icon}).bindPopup('Kantor Wali Nagari Kajai').addTo(faskan);
	var faskan5 = L.marker ([0.16902055, 99.9380798380], {icon:faskan_icon}).bindPopup('Karang Taruna Nagari Kajai').addTo(faskan);
	var faskan6 = L.marker ([0.16906574, 99.9380559600], {icon:faskan_icon}).bindPopup('LPMN Nagari Kajai').addTo(faskan);
	var faskan7 = L.marker ([0.169001536, 99.9380227910], {icon:faskan_icon}).bindPopup('PKK nagari Kajai').addTo(faskan);
	var faskan8 = L.marker ([0.16619613, 99.9307763400], {icon:faskan_icon}).bindPopup('-').addTo(faskan);

var semak_icon = L.icon({
    iconUrl: '<?= base_url('icon/location-pin5.png')?>',
    iconSize:     [38, 40], // size of the icon
    iconAnchor:   [22, 25], // point of the icon which will correspond to marker's location
});

	var semak = L.layerGroup();
	var semak1 = L.marker ([0.172909679, 99.9346163080], {icon:semak_icon}).bindPopup('Semak Belukar').addTo(semak);
	var semak2 = L.marker ([0.169816959, 99.9331737670], {icon:semak_icon}).bindPopup('Semak Belukar').addTo(semak);
	var semak3 = L.marker ([0.169786049, 99.9353035370], {icon:semak_icon}).bindPopup('Semak Belukar').addTo(semak);
	var semak4 = L.marker ([0.165697, 99.9332200000], {icon:semak_icon}).bindPopup('Semak Belukar').addTo(semak);
	var semak5 = L.marker ([0.169721179, 99.9383700540], {icon:semak_icon}).bindPopup('Semak Belukar').addTo(semak);
	var semak6 = L.marker ([0.167617292, 99.9278074930], {icon:semak_icon}).bindPopup('Semak Belukar').addTo(semak);
	var semak7 = L.marker ([0.164275762, 99.9265196800], {icon:semak_icon}).bindPopup('Semak Belukar').addTo(semak);



	L.geoJSON(batas_nagari,{
		"weight": 2,
        "opacity": 1,
        "color": '#798079',
        "dashArray" : '3',
	}).addTo(map);



    var overlays = {
		'Hutan Rimba': hutan_rimba,
        'Ladang': ladang,
		'Perkebunan': kebun,
		'Sawah': sawah,
		'Semak Belukar': semak,
		'Fasilitas Kesehatan' : faskes,
		'Fasilitas Pendidikan' : faspend,
		'Sarana Peribadatan' : fasib,
		'Sarana Perkantoran' : faskan,

	};


	var layerControl = L.control.layers(baseMaps, overlays).addTo(map);

</script>