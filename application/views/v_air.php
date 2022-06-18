<div id="map" style="height: 500px;"></div>

<script src="geojson/batas_nagari_kajai.js"></script>

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
    center: [0.155972, 99.951003],
    zoom: 12,
    layers: [peta1]
	});

	var baseMaps = {
    "Light": peta1,
    "Sattelite": peta2,
	"Streets" : peta3,
	"Dark" : peta4,
	};
	var layerControl = L.control.layers(baseMaps).addTo(map);

////////////////////////////////

	var marker_ladang = L.marker([0.164384259, 99.9290226110]).bindPopup('Ladang Jagung').addTo(map);
	var marker_ladang = L.marker([0.161009695, 99.9363789190]).bindPopup('Ladang').addTo(map);
	var marker_ladang = L.marker([0.172328481, 99.9054899260]).bindPopup('Ladang Kacang').addTo(map);
	var marker_ladang = L.marker([0.157861264, 99.9323399920]).bindPopup('Ladang').addTo(map);
	var marker_ladang = L.marker([0.157861264, 99.9323399920]).bindPopup('Ladang Cabai dan Kunyit').addTo(map);

	var marker_hutan_rimba = L.marker ([-0.9420206, 100.3586190000]).bindPopup('Hutan Rimba').addTo(map);
	var marker_hutan_rimba = L.marker ([0.177218144, 99.9393444000]).bindPopup('Hutan Rimba').addTo(map);
	var marker_hutan_rimba = L.marker ([0.183411753, 99.9363830910]).bindPopup('Hutan Rimba').addTo(map);
	var marker_hutan_rimba = L.marker ([0.178220376, 99.9452020100]).bindPopup('Hutan Rimba').addTo(map);
	var marker_hutan_rimba = L.marker ([-0.3506, 100.1408000000]).bindPopup('Hutan Rimba').addTo(map);

	var marker_kebun = L.marker ([0.153053626, 99.9420253110]).bindPopup('Kebun Karet').addTo(map);
	var marker_kebun = L.marker ([0.152666667, 99.9597166670]).bindPopup('Kebun Karet').addTo(map);
	var marker_kebun = L.marker ([0.15911262, 99.9386305280]).bindPopup('Kebun Karet').addTo(map);
	var marker_kebun = L.marker ([0.15911262, 99.9386305280]).bindPopup('Kebun Karet').addTo(map);
	var marker_kebun = L.marker ([0.15625648, 99.9482521840]).bindPopup('Kebun Sawit').addTo(map);
	var marker_kebun = L.marker ([0.163622688, 99.9325656680]).bindPopup('Kebun Sawit').addTo(map);
	var marker_kebun = L.marker ([0.166519913, 99.9409342320]).bindPopup('Kebun Sawit').addTo(map);
	var marker_kebun = L.marker ([0.165597044, 99.9321391010]).bindPopup('Kebun Sawit').addTo(map);
	var marker_kebun = L.marker ([0.159171424, 99.9406116420]).bindPopup('Kebun Sawit').addTo(map);

	var marker_sawah = L.marker ([0.170245, 99.9331083330]).bindPopup('Sawah').addTo(map);
	var marker_sawah = L.marker ([0.170328139, 99.9367785150]).bindPopup('Sawah').addTo(map);
	var marker_sawah = L.marker ([0.164183416, 99.9345795880]).bindPopup('Sawah').addTo(map);
	var marker_sawah = L.marker ([0.164146565, 99.9267702650]).bindPopup('Sawah').addTo(map);
	var marker_sawah = L.marker ([0.158403222, 99.9309499990]).bindPopup('Sawah').addTo(map);
	var marker_sawah = L.marker ([0.160964877, 99.9322948810]).bindPopup('Sawah').addTo(map);

	var marker_faskes = L.marker ([0.170025942, 99.9389264270]).bindPopup('Puskesmas Nagari Kajai').addTo(map);
	var marker_faskes = L.marker ([0.1684428, 99.9362049000]).bindPopup('Polindes Jorong Limpato').addTo(map);
	var marker_faskes = L.marker ([0.1681546, 99.9358556000]).bindPopup('Polindes Bidan Yoan Mairana').addTo(map);
	var marker_faskes = L.marker ([0.160723171, 99.9289380430]).bindPopup('Praktek Dokter Umum dr. Sri Afni').addTo(map);
	var marker_faskes = L.marker ([0.159639758, 99.9283846750]).bindPopup('Praktek Umum & Dokter Keluarga').addTo(map);
	var marker_faskes = L.marker ([0.157749262, 99.9306967390]).bindPopup('Polindes Bidan Ica').addTo(map);

	var marker_faspend = L.marker ([0.171841552, 99.9404579090]).bindPopup('MAN 4 Pasaman Barat').addTo(map);
	var marker_faspend = L.marker ([0.16748661, 99.9310333800]).bindPopup('MIS Al Wahid Kajai Kampung Tengah').addTo(map);
	var marker_faspend = L.marker ([0.15991415, 99.9284788100]).bindPopup('MTs Muhammadiyah Kajai').addTo(map);
	var marker_faspend = L.marker ([0.16132542, 99.9279838600]).bindPopup('SDN 02 Talamau').addTo(map);
	var marker_faspend = L.marker ([0.16998912, 99.9314526700]).bindPopup('SDN 08 Talamau').addTo(map);
	var marker_faspend = L.marker ([0.14994901, 99.9273038400]).bindPopup('SDN 16 Talamau').addTo(map);
	var marker_faspend = L.marker ([0.1653508, 99.9326756400]).bindPopup('SDN 22 Talamau').addTo(map);
	var marker_faspend = L.marker ([0.16135519, 99.9301620700]).bindPopup('SLB Miftahul Khoir').addTo(map);
	var marker_faspend = L.marker ([0.15215179, 99.9269340100]).bindPopup('SMPN 2 Talamau').addTo(map);
	var marker_faspend = L.marker ([0.16093009, 99.9286175800]).bindPopup('TK Aba Kajai').addTo(map);

	var marker_fasib = L.marker ([0.167501788, 99.9296397840]).bindPopup('Mushalla Ukhuwah Al Falah').addTo(map);
	var marker_fasib = L.marker ([0.165441743, 99.9327771720]).bindPopup('Mushalla Al Muttaqin').addTo(map);
	var marker_fasib = L.marker ([0.171046188, 99.9412894270]).bindPopup('Mushalla MIS Al Wahid').addTo(map);
	var marker_fasib = L.marker ([0.171180434, 99.9407290580]).bindPopup('Masjid Nurul Islam').addTo(map);
	var marker_fasib = L.marker ([0.169552332, 99.9342026940]).bindPopup('Mushalla Nurul Falah').addTo(map);
	var marker_fasib = L.marker ([0.166237449, 99.9307082450]).bindPopup('Mushalla Babussalam').addTo(map);
	var marker_fasib = L.marker ([0.166291405, 99.9311913710]).bindPopup('Masjid Nurul Yaqin').addTo(map);
	var marker_fasib = L.marker ([0.167470613, 99.9309425340]).bindPopup('Masjid Al Mujahidin').addTo(map);
	var marker_fasib = L.marker ([0.168742411, 99.9320185650]).bindPopup('Mushalla Wustho').addTo(map);
	var marker_fasib = L.marker ([0.167713037, 99.9350064060]).bindPopup('Mushalla Nikmah').addTo(map);
	var marker_fasib = L.marker ([0.167508585, 99.9356315590]).bindPopup('Mushalla Nurul Ikhlas').addTo(map);
	var marker_fasib = L.marker ([0.166973683, 99.9368889750]).bindPopup('Masjid Raya Kajai').addTo(map);
	var marker_fasib = L.marker ([0.170471976, 99.9390170250]).bindPopup('Mushalla Nurul Hikmah').addTo(map);

	var marker_faskan = L.marker ([0.169151307, 99.9381036130]).bindPopup('BAMUS Nagari Kajai').addTo(map);
	var marker_faskan = L.marker ([0.17888421, 99.9644656200]).bindPopup('BPP Nagari Kajai').addTo(map);
	var marker_faskan = L.marker ([0.1627098, 99.9305623700]).bindPopup('KAN Nagari Kajai').addTo(map);
	var marker_faskan = L.marker ([0.169218, 99.9381500000]).bindPopup('Kantor Wali Nagari Kajai').addTo(map);
	var marker_faskan = L.marker ([0.16902055, 99.9380798380]).bindPopup('Karang Taruna Nagari Kajai').addTo(map);
	var marker_faskan = L.marker ([0.16906574, 99.9380559600]).bindPopup('LPMN Nagari Kajai').addTo(map);
	var marker_faskan = L.marker ([0.169001536, 99.9380227910]).bindPopup('PKK nagari Kajai').addTo(map);
	var marker_faskan = L.marker ([0.16619613, 99.9307763400]).bindPopup('-').addTo(map);

	var marker_semak = L.marker ([0.172909679, 99.9346163080]).bindPopup('Semak Belukar').addTo(map);
	var marker_semak = L.marker ([0.169816959, 99.9331737670]).bindPopup('Semak Belukar').addTo(map);
	var marker_semak = L.marker ([0.169786049, 99.9353035370]).bindPopup('Semak Belukar').addTo(map);
	var marker_semak = L.marker ([0.165697, 99.9332200000]).bindPopup('Semak Belukar').addTo(map);
	var marker_semak = L.marker ([0.169721179, 99.9383700540]).bindPopup('Semak Belukar').addTo(map);
	var marker_semak = L.marker ([0.167617292, 99.9278074930]).bindPopup('Semak Belukar').addTo(map);
	var marker_semak = L.marker ([0.164275762, 99.9265196800]).bindPopup('Semak Belukar').addTo(map);



	L.geoJSON(batas_nagari,{
		"weight": 2,
        "opacity": 1,
        "color": '#798079',
        "dashArray" : '3',
	}).addTo(map);


</script>