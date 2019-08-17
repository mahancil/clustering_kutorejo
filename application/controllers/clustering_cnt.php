<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class clustering_cnt extends CI_Controller {

 public function __construct()
 {
  
  parent::__construct();
  $this->load->helper('url', 'form');
  $this->load->library('form_validation');
  $this->load->model('clustering');
  $this->load->library('session');
  $this->load->library('googlemaps');
    
 }

 public function index()
 {
  $this->load->view('clustering_view.php');
 }

 public function tampil_cluster($data)
 {

 	$config['center'] = '-7.566092, 112.522342';
	$config['zoom'] = 'auto';
	$this->googlemaps->initialize($config);

	$kutorejo = array();
	$wonodadi = array();
	$kepuhpandak = array();
	$kepuharum = array();
	$gedangan = array();
	$karangdiyeng = array();
	$singowangi = array();
	$karangasem = array();
	$kaligoro = array();
	$kutorejomarker = array();
	$wonodadimarker = array();
	$kepuhpandakmarker = array();
	$kepuharummarker = array();
	$gedanganmarker = array();
	$karangdiyengmarker = array();
	$singowangimarker = array();
	$karangasemmarker = array();
	$kaligoromarker = array();
	$kutorejo['points'] = array('-7.559974, 112.504608',
				   '-7.556699, 112.505338',
				   '-7.557507, 112.511002',
				   '-7.558656, 112.510959',
				   '-7.559676, 112.515122',
				   '-7.562484, 112.514667',
				   '-7.566691, 112.516098',
				   '-7.568775, 112.517762',
				   '-7.573143, 112.518021',
				   '-7.574222, 112.516363',
				   '-7.572578, 112.510816',
				   '-7.571190, 112.510557',
				   '-7.570420, 112.508743',
				   '-7.568159, 112.506877',
				   '-7.566361, 112.506670',
				   '-7.563689, 112.508354',
				   '-7.561068, 112.508121',
				   '-7.560090, 112.504595'
				);
	if($data['centroid_tampil'][0]['min'] == 0){

		$kutorejo['strokeColor'] = '#FF0000';
		$kutorejo['fillColor'] = '#FF0000';

	}
	else if($data['centroid_tampil'][0]['min'] == 1){

		$kutorejo['strokeColor'] = '#008000';
		$kutorejo['fillColor'] = '#008000';

	}
	else{

		$kutorejo['strokeColor'] = '#0000FF';
		$kutorejo['fillColor'] = '#0000FF';

	}
	
	$wonodadi['points'] = array('-7.535908, 112.518946',
				   '-7.536726, 112.520269',
				   '-7.536965, 112.522301',
				   '-7.535636, 112.524208',
				   '-7.534590, 112.524501',
				   '-7.533264, 112.524349',
				   '-7.532601, 112.524865',
				   '-7.531903, 112.524947',
				   '-7.531812, 112.525127',
				   '-7.532778, 112.529286',
				   '-7.535170, 112.529215',
				   '-7.535205, 112.530736',
				   '-7.534816, 112.530914',
				   '-7.534993, 112.532482',
				   '-7.540412, 112.531995',
				   '-7.540718, 112.533445',
				   '-7.538228, 112.533483',
				   '-7.539372, 112.540503',
				   '-7.541941, 112.540355',
				   '-7.543247, 112.540684',
				   '-7.553512, 112.537940',
				   '-7.552944, 112.534601',
				   '-7.551715, 112.534983',
				   '-7.551053, 112.533075',
				   '-7.547461, 112.533170',
				   '-7.547461, 112.530595',
				   '-7.543773, 112.531072',
				   '-7.543017, 112.528020',
				   '-7.541694, 112.526208',
				   '-7.541599, 112.524777',
				   '-7.542356, 112.525063',
				   '-7.543727, 112.523299',
				   '-7.543585, 112.521678',
				   '-7.542828, 112.521201',
				   '-7.542498, 112.518435',
				   '-7.536447, 112.518531',
				);
	if($data['centroid_tampil'][1]['min'] == 0){

		$wonodadi['strokeColor'] = '#FF0000';
		$wonodadi['fillColor'] = '#FF0000';

	}
	else if($data['centroid_tampil'][1]['min'] == 1){

		$wonodadi['strokeColor'] = '#008000';
		$wonodadi['fillColor'] = '#008000';

	}
	else{

		$wonodadi['strokeColor'] = '#0000FF';
		$wonodadi['fillColor'] = '#0000FF';

	}
	$kepuhpandak['points'] = array('-7.522918, 112.499618',
					'-7.523174, 112.501378',
					'-7.524152, 112.501378',
					'-7.524960, 112.506098',
					'-7.523088, 112.506570',
					'-7.522918, 112.510604',
					'-7.522407, 112.510948',
					'-7.522492, 112.512278',
					'-7.524918, 112.512579',
					'-7.525088, 112.513180',
					'-7.529938, 112.512536',
					'-7.529087, 112.514424',
					'-7.526662, 112.514682',
					'-7.526534, 112.515454',
					'-7.525513, 112.515669',
					'-7.525981, 112.517300',
					'-7.526492, 112.517472',
					'-7.526534, 112.517858',
					'-7.528023, 112.517772',
					'-7.528704, 112.519961',
					'-7.529587, 112.518780',
					'-7.530693, 112.518329',
					'-7.531183, 112.518351',
					'-7.531821, 112.518050',
					'-7.533757, 112.518265',
					'-7.535884, 112.518930',
					'-7.536331, 112.518587',
					'-7.536713, 112.518758',
					'-7.537798, 112.518458',
					'-7.538942, 112.518657',
					'-7.538304, 112.509902',
					'-7.538431, 112.508915',
					'-7.538570, 112.508893',
					'-7.539101, 112.508936',
					'-7.539697, 112.508700',
					'-7.540250, 112.508957',
					'-7.540787, 112.508700',
					'-7.540872, 112.508400',
					'-7.541425, 112.507584',
					'-7.541319, 112.505009',
					'-7.542829, 112.505395',
					'-7.543978, 112.505224',
					'-7.544723, 112.505546',
					'-7.544127, 112.503443',
					'-7.543276, 112.502584',
					'-7.541978, 112.501490',
					'-7.542085, 112.501512',
					'-7.541978, 112.501490',
					'-7.540532, 112.500417',
					'-7.540149, 112.499151',
					'-7.538766, 112.498508',
					'-7.537660, 112.497284',
					'-7.536341, 112.497563',
					'-7.535895, 112.496855',
					'-7.535171, 112.496533',
					'-7.534023, 112.495847',
					'-7.529896, 112.496276',
					'-7.525684, 112.500246',
					'-7.525088, 112.500138',
					'-7.524769, 112.500353',
					'-7.523748, 112.500246',
					'-7.523025, 112.499688',
				);
	if($data['centroid_tampil'][2]['min'] == 0){

		$kepuhpandak['strokeColor'] = '#FF0000';
		$kepuhpandak['fillColor'] = '#FF0000';

	}
	else if($data['centroid_tampil'][2]['min'] == 1){

		$kepuhpandak['strokeColor'] = '#008000';
		$kepuhpandak['fillColor'] = '#008000';

	}
	else{

		$kepuhpandak['strokeColor'] = '#0000FF';
		$kepuhpandak['fillColor'] = '#0000FF';

	}
	$kepuharum['points'] = array('-7.570293, 112.495141',
					'-7.574575, 112.508277',
					'-7.576672, 112.509335',
					'-7.579906, 112.510393',
					'-7.580517, 112.511274',
					'-7.581741, 112.510745',
					'-7.582003, 112.507836',
					'-7.583488, 112.505544',
					'-7.584712, 112.504839',
					'-7.587246, 112.504133',
					'-7.589605, 112.504045',
					'-7.590042, 112.503164',
					'-7.587071, 112.500519',
					'-7.586722, 112.499725',
					'-7.581741, 112.498050',
					'-7.580867, 112.496552',
					'-7.580255, 112.497698',
					'-7.578595, 112.497698',
					'-7.577808, 112.495847',
					'-7.577808, 112.495847',
					'-7.571298, 112.494304',
					'-7.570861, 112.495097',
				);
	if($data['centroid_tampil'][3]['min'] == 0){

		$kepuharum['strokeColor'] = '#FF0000';
		$kepuharum['fillColor'] = '#FF0000';

	}
	else if($data['centroid_tampil'][3]['min'] == 1){

		$kepuharum['strokeColor'] = '#008000';
		$kepuharum['fillColor'] = '#008000';

	}
	else{

		$kepuharum['strokeColor'] = '#0000FF';
		$kepuharum['fillColor'] = '#0000FF';

	}
	$gedangan['points'] = array('-7.549380, 112.498982',
					'-7.549806, 112.499754',
					'-7.549763, 112.501299',
					'-7.550614, 112.500913',
					'-7.552060, 112.502157',
					'-7.552571, 112.501900',
					'-7.552656, 112.502587',
					'-7.554145, 112.503702',
					'-7.553890, 112.504475',
					'-7.554741, 112.504432',
					'-7.555209, 112.503960',
					'-7.555421, 112.504904',
					'-7.555974, 112.504646',
					'-7.556613, 112.503960',
					'-7.556357, 112.505204',
					'-7.559037, 112.504775',
					'-7.559335, 112.504475',
					'-7.559973, 112.504604',
					'-7.561037, 112.508166',
					'-7.563547, 112.508466',
					'-7.566355, 112.506792',
					'-7.568099, 112.506878',
					'-7.570098, 112.508852',
					'-7.570609, 112.508852',
					'-7.571162, 112.510655',
					'-7.573502, 112.510397',
					'-7.574523, 112.508209',
					'-7.570226, 112.495033',
					'-7.568822, 112.495334',
					'-7.567844, 112.495849',
					'-7.566653, 112.498724',
					'-7.565844, 112.498510',
					'-7.562483, 112.498767',
					'-7.558952, 112.498166',
					'-7.558782, 112.498638',
					'-7.556570, 112.498767',
					'-7.556017, 112.498381',
					'-7.555634, 112.498810',
					'-7.549295, 112.499025',
				);
	if($data['centroid_tampil'][4]['min'] == 0){

		$gedangan['strokeColor'] = '#FF0000';
		$gedangan['fillColor'] = '#FF0000';

	}
	else if($data['centroid_tampil'][4]['min'] == 1){

		$gedangan['strokeColor'] = '#008000';
		$gedangan['fillColor'] = '#008000';

	}
	else{

		$gedangan['strokeColor'] = '#0000FF';
		$gedangan['fillColor'] = '#0000FF';

	}
	$karangdiyeng['points'] = array('-7.539133, 112.497361',
					'-7.538878, 112.498820',
					'-7.540325, 112.499163',
					'-7.540495, 112.500451',
					'-7.544324, 112.503541',
					'-7.544664, 112.505429',
					'-7.541303, 112.504957',
					'-7.540835, 112.508691',
					'-7.538495, 112.508905',
					'-7.539026, 112.518476',
					'-7.543026, 112.518176',
					'-7.543951, 112.518455',
					'-7.543823, 112.518068',
					'-7.545738, 112.517081',
					'-7.546929, 112.515365',
					'-7.546461, 112.513863',
					'-7.547825, 112.513689',
					'-7.548632, 112.513809',
					'-7.550125, 112.513568',
					'-7.552873, 112.514683',
					'-7.553858, 112.514653',
					'-7.555053, 112.515527',
					'-7.559563, 112.515135',
					'-7.558667, 112.510947',
					'-7.557532, 112.511038',
					'-7.556681, 112.505358',
					'-7.556494, 112.503942',
					'-7.554045, 112.503641',
					'-7.550820, 112.500990',
					'-7.548938, 112.501110',
					'-7.547236, 112.501924',
					'-7.546638, 112.500960',
					'-7.545414, 112.500297',
					'-7.544279, 112.500508',
					'-7.543831, 112.500086',
					'-7.542606, 112.500628',
					'-7.542815, 112.499755',
					'-7.540635, 112.498158',
					'-7.539052, 112.497495',
				);
	if($data['centroid_tampil'][5]['min'] == 0){

		$karangdiyeng['strokeColor'] = '#FF0000';
		$karangdiyeng['fillColor'] = '#FF0000';

	}
	else if($data['centroid_tampil'][5]['min'] == 1){

		$karangdiyeng['strokeColor'] = '#008000';
		$karangdiyeng['fillColor'] = '#008000';

	}
	else{

		$karangdiyeng['strokeColor'] = '#0000FF';
		$karangdiyeng['fillColor'] = '#0000FF';

	}
	$singowangi['points'] = array('-7.535110, 112.529199',
					'-7.530643, 112.529542',
					'-7.529452, 112.530916',
					'-7.529580, 112.532418',
					'-7.528941, 112.534005',
					'-7.530515, 112.538640',
					'-7.530941, 112.538662',
					'-7.531175, 112.539198',
					'-7.532281, 112.538791',
					'-7.532558, 112.539027',
					'-7.536131, 112.537739',
					'-7.536568, 112.540185',
					'-7.534844, 112.541891',
					'-7.534291, 112.542031',
					'-7.533972, 112.541902',
					'-7.533940, 112.543318',
					'-7.536887, 112.543222',
					'-7.537429, 112.543586',
					'-7.538695, 112.543704',
					'-7.539376, 112.544080',
					'-7.539929, 112.543962',
					'-7.540833, 112.544391',
					'-7.544013, 112.543189',
					'-7.543853, 112.542138',
					'-7.543162, 112.542041',
					'-7.543098, 112.541505',
					'-7.541407, 112.541505',
					'-7.541194, 112.540496',
					'-7.539397, 112.540496',
					'-7.538759, 112.536602',
					'-7.538865, 112.536291',
					'-7.538514, 112.535411',
					'-7.538567, 112.534767',
					'-7.538170, 112.533395',
					'-7.540709, 112.533438',
					'-7.540430, 112.532001',
					'-7.534998, 112.532444',
					'-7.534795, 112.530909',
					'-7.535223, 112.530715',
					'-7.535106, 112.529796',
					'-7.535256, 112.529548',
					'-7.535170, 112.529202',
				);
	if($data['centroid_tampil'][6]['min'] == 0){

		$singowangi['strokeColor'] = '#FF0000';
		$singowangi['fillColor'] = '#FF0000';

	}
	else if($data['centroid_tampil'][6]['min'] == 1){

		$singowangi['strokeColor'] = '#008000';
		$singowangi['fillColor'] = '#008000';

	}
	else{

		$singowangi['strokeColor'] = '#0000FF';
		$singowangi['fillColor'] = '#0000FF';

	}
	$karangasem['points'] = array('-7.510981, 112.501402',
					'-7.510442, 112.503562',
					'-7.510252, 112.504707',
					'-7.510820, 112.508045',
					'-7.511670, 112.510143',
					'-7.512569, 112.510000',
					'-7.512852, 112.510906',
					'-7.513987, 112.510382',
					'-7.514507, 112.510477',
					'-7.514696, 112.510000',
					'-7.516020, 112.509190',
					'-7.516067, 112.509714',
					'-7.516351, 112.510096',
					'-7.516351, 112.510382',
					'-7.516729, 112.511002',
					'-7.516965, 112.511002',
					'-7.517013, 112.511335',
					'-7.518762, 112.510954',
					'-7.520275, 112.511431',
					'-7.522496, 112.510954',
					'-7.522875, 112.510620',
					'-7.523016, 112.506519',
					'-7.523442, 112.506519',
					'-7.523867, 112.506376',
					'-7.524955, 112.506185',
					'-7.524293, 112.501369',
					'-7.523206, 112.501417',
					'-7.523111, 112.500702',
					'-7.523253, 112.500463',
					'-7.523017, 112.499700',
					'-7.522187, 112.500027',
					'-7.521900, 112.500606',
					'-7.520176, 112.500993',
					'-7.519985, 112.501669',
					'-7.519314, 112.502248',
					'-7.518357, 112.502055',
					'-7.516537, 112.502442',
					'-7.515005, 112.501572',
					'-7.513472, 112.501572',
					'-7.513089, 112.501282',
				);
	if($data['centroid_tampil'][7]['min'] == 0){

		$karangasem['strokeColor'] = '#FF0000';
		$karangasem['fillColor'] = '#FF0000';

	}
	else if($data['centroid_tampil'][7]['min'] == 1){

		$karangasem['strokeColor'] = '#008000';
		$karangasem['fillColor'] = '#008000';

	}
	else{

		$karangasem['strokeColor'] = '#0000FF';
		$karangasem['fillColor'] = '#0000FF';

	}
	$kaligoro['points'] = array('-7.507834, 112.511125',
					'-7.508813, 112.516661',
					'-7.514854, 112.515975',
					'-7.515152, 112.518078',
					'-7.516173, 112.518120',
					'-7.517662, 112.517605',
					'-7.518769, 112.516919',
					'-7.523193, 112.516361',
					'-7.523661, 112.516146',
					'-7.524555, 112.516146',
					'-7.525236, 112.515717',
					'-7.526597, 112.515545',
					'-7.526597, 112.514773',
					'-7.528937, 112.514515',
					'-7.529001, 112.513936',
					'-7.529490, 112.513893',
					'-7.529490, 112.513121',
					'-7.529916, 112.513035',
					'-7.530086, 112.512691',
					'-7.530086, 112.512520',
					'-7.525087, 112.513142',
					'-7.524959, 112.512541',
					'-7.523576, 112.512498',
					'-7.523491, 112.512230',
					'-7.522736, 112.512209',
					'-7.522513, 112.512337',
					'-7.522417, 112.511372',
					'-7.522481, 112.510953',
					'-7.520332, 112.511458',
					'-7.518705, 112.510932',
					'-7.517046, 112.511372',
					'-7.516897, 112.510975',
					'-7.516726, 112.510964',
					'-7.516333, 112.510116',
					'-7.516067, 112.509741',
					'-7.516046, 112.509237',
					'-7.515897, 112.509226',
					'-7.515642, 112.509537',
					'-7.515280, 112.509591',
					'-7.515046, 112.509891',
					'-7.514759, 112.510009',
					'-7.514471, 112.510481',
					'-7.514067, 112.510406',
					'-7.512855, 112.510878',
					'-7.512472, 112.510031',
					'-7.507866, 112.511104',
				);
	if($data['centroid_tampil'][8]['min'] == 0){

		$kaligoro['strokeColor'] = '#FF0000';
		$kaligoro['fillColor'] = '#FF0000';

	}
	else if($data['centroid_tampil'][8]['min'] == 1){

		$kaligoro['strokeColor'] = '#008000';
		$kaligoro['fillColor'] = '#008000';

	}
	else{

		$kaligoro['strokeColor'] = '#0000FF';
		$kaligoro['fillColor'] = '#0000FF';

	}
	$kutorejomarker['position'] = '-7.564420, 112.511861';
	$kutorejomarker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=1|9999FF|000000';
	$kutorejomarker['infowindow_content'] = '1 - Kutorejo';

	$wonodadimarker['position'] = '-7.539907, 112.529503';
	$wonodadimarker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=2|9999FF|000000';
	$wonodadimarker['infowindow_content'] = '2 - Wonodadi';

	$kepuhpandakmarker['position'] = '-7.532269, 112.507858';
	$kepuhpandakmarker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=3|9999FF|000000';
	$kepuhpandakmarker['infowindow_content'] = '3 - Kepuhpandak';

	$kepuharummarker['position'] = '-7.578273, 112.502549';
	$kepuharummarker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=4|9999FF|000000';
	$kepuharummarker['infowindow_content'] = '4 - Kepuharum';

	$gedanganmarker['position'] = '-7.562926, 112.501933';
	$gedanganmarker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=5|9999FF|000000';
	$gedanganmarker['infowindow_content'] = '5 - Gedangan';

	$karangdiyengmarker['position'] = '-7.549594, 112.507830';
	$karangdiyengmarker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=6|9999FF|000000';
	$karangdiyengmarker['infowindow_content'] = '6 - Karangdiyeng';

	$singowangimarker['position'] = '-7.532888, 112.534606';
	$singowangimarker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=7|9999FF|000000';
	$singowangimarker['infowindow_content'] = '7 - Singowangi';

	$karangasemmarker['position'] = '-7.517192, 112.505951';
	$karangasemmarker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=8|9999FF|000000';
	$karangasemmarker['infowindow_content'] = '8 - Karangasem';

	$kaligoromarker['position'] = '-7.516937, 112.513956';
	$kaligoromarker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=9|9999FF|000000';
	$kaligoromarker['infowindow_content'] = '9 - Kaligoro';
	
	$this->googlemaps->add_marker($kutorejomarker);
	$this->googlemaps->add_marker($wonodadimarker);
	$this->googlemaps->add_marker($kepuhpandakmarker);
	$this->googlemaps->add_marker($kepuharummarker);
	$this->googlemaps->add_marker($gedanganmarker);
	$this->googlemaps->add_marker($karangdiyengmarker);
	$this->googlemaps->add_marker($singowangimarker);
	$this->googlemaps->add_marker($karangasemmarker);
	$this->googlemaps->add_marker($kaligoromarker);
	$this->googlemaps->add_polygon($kutorejo);
	$this->googlemaps->add_polygon($wonodadi);
	$this->googlemaps->add_polygon($kepuhpandak);
	$this->googlemaps->add_polygon($kepuharum);
	$this->googlemaps->add_polygon($gedangan);
	$this->googlemaps->add_polygon($karangdiyeng);
	$this->googlemaps->add_polygon($singowangi);
	$this->googlemaps->add_polygon($karangasem);
	$this->googlemaps->add_polygon($kaligoro);
	$data['map'] = $this->googlemaps->create_map();
	// var_dump ($data);
	// die();
 	$this->load->view('clustering_view.php', $data);

 }

public function kalkulasi($jumlah)
 {
  $dataset = array();
  $gizi_buruk = array();
  $gizi_kurang = array();
  $penyakit = array();
  $angka_kematian = array();
  $normalisasi = array();
  $centroid_merge = array();
  $temp1 = array();
  $temp2 = array();
  $temp3 = array();
  $c1_temp = array();
  $c2_temp = array();
  $c3_temp = array();
  $c1 = array();
  $c2 = array();
  $c3 = array();
  $data = $this->session->userdata('param');

  //Untuk menghitung presentase setiap data
  for($i=0;$i<count($data['dataset']);$i++)
  {
  	 $dataset[$i]['gizi_buruk']=($data['dataset'][$i]['gizi_buruk']/$data['dataset'][$i]['jumlah_balita'])*100;
	  	 $dataset[$i]['gizi_kurang']=($data['dataset'][$i]['gizi_kurang']/$data['dataset'][$i]['jumlah_balita'])*100;
       for($a = 1; $a <= $jumlah;  $a++){
	  	 $dataset[$i]['penyakit'.$a.'']=($data['dataset'][$i]['penyakit'.$a.'']/$data['dataset'][$i]['jumlah_balita'])*100;
        }
	  	 $dataset[$i]['angka_kematian']=($data['dataset'][$i]['jumlah_kematian']/$data['dataset'][$i]['jumlah_balita'])*1000;
  	
  }

  //normalisasi
  
  for($a = 0; $a < $jumlah;  $a++){
  for($i=0;$i<count($dataset);$i++)
  {
  	  $gizi_buruk[$i] = $dataset[$i]['gizi_buruk'];
	  $gizi_kurang[$i] = $dataset[$i]['gizi_kurang'];
    
	  $penyakit[$a][$i] = $dataset[$i]['penyakit'.($a+1).''];
    
	  $angka_kematian[$i] = $dataset[$i]['angka_kematian'];
    }
  }


  for($i=0;$i<count($dataset);$i++)
  {
  	$normalisasi['gizi_buruk'][$i] = ($dataset[$i]['gizi_buruk']-min($gizi_buruk))/(max($gizi_buruk)-min($gizi_buruk));
	   $normalisasi['gizi_kurang'][$i] = ($dataset[$i]['gizi_kurang']-min($gizi_kurang))/(max($gizi_kurang)-min($gizi_kurang));
        for($a = 1; $a <= $jumlah;  $a++){
      	$normalisasi['penyakit'.$a.''][$i] = ($dataset[$i]['penyakit'.$a.'']-min($penyakit[$a-1]))/(max($penyakit[$a-1])-min($penyakit[$a-1]));
        }
	   $normalisasi['angka_kematian'][$i] = ($dataset[$i]['angka_kematian']-min($angka_kematian))/(max($angka_kematian)-min($angka_kematian));
  }
  
  // 	for($i=0;$i<count($dataset);$i++)
  // 	{
  // 		$normalisasi_final= array(
		// $normalisasi_final['data'][$i]['gizi_buruk'] = $normalisasi['gizi_buruk'][$i];
  //  		$normalisasi_final['data'][$i]['gizi_kurang'] = $normalisasi['gizi_kurang'][$i];
		//    for($a = 1; $a <= $jumlah;  $a++){
		//    		$normalisasi_final['data'][$i]['penyakit'.$a.''] = $normalisasi['penyakit'.$a.''][$i];
		//     }
  //  		$normalisasi_final['data'][$i]['angka_kematian'] = $normalisasi['angka_kematian'][$i];
	 //  	);
  // 	}
  	$centroid1_temp = array();
  	$centroid2_temp = array();
  	$centroid3_temp = array();
  	for($a = 0; $a < $jumlah;  $a++){

  		$centroid1_temp[$a] = $normalisasi['penyakit'.($a+1).''][2];
  		$centroid2_temp[$a] = $normalisasi['penyakit'.($a+1).''][4];
  		$centroid3_temp[$a] = $normalisasi['penyakit'.($a+1).''][6];

  		}

	$centroid1= array(
	$normalisasi['gizi_buruk'][2],
	$normalisasi['gizi_kurang'][2],
	$normalisasi['angka_kematian'][2],
	  	);
	for($a = 0; $a < $jumlah;  $a++)
	{
		$centroid1[$a+3] = $centroid1_temp[$a];
	}
	$centroid2= array(
	$normalisasi['gizi_buruk'][4],
	$normalisasi['gizi_kurang'][4],
	$normalisasi['angka_kematian'][4],
	  	);
	for($a = 0; $a < $jumlah;  $a++)
	{
		$centroid2[$a+3] = $centroid2_temp[$a];
	}
	$centroid3= array(
	$normalisasi['gizi_buruk'][6],
	$normalisasi['gizi_kurang'][6],
	$normalisasi['angka_kematian'][6],
	  	);
	for($a = 0; $a < $jumlah;  $a++)
	{
		$centroid3[$a+3] = $centroid3_temp[$a];
	}
	
	
	//<-----------------------------------------------------------------------PROSESPERTAMA--------------------------------------------------------------------------------->
	$c1_var = array();
	$c2_var = array();
	$c3_var = array();
	for($i=0;$i<count($dataset);$i++)
	{
		$ctemp1 = 0;
		$ctemp2 = 0;
		$ctemp3 = 0;
		for($a = 1; $a <= $jumlah;  $a++)
		{
			$ctemp1	+= pow(($normalisasi['penyakit'.$a.''][$i]-$centroid1[$a+2]),2);
			$ctemp2	+= pow(($normalisasi['penyakit'.$a.''][$i]-$centroid2[$a+2]),2);
			$ctemp3 += pow(($normalisasi['penyakit'.$a.''][$i]-$centroid3[$a+2]),2);
		}
		$c1_var[$i] = $ctemp1;
		$c2_var[$i] = $ctemp2;
		$c3_var[$i] = $ctemp3;
	}

	for($i=0;$i<count($dataset);$i++)
	{
			$c1[$i] = sqrt(abs(pow(($normalisasi['gizi_buruk'][$i]-$centroid1[0]), 2)+pow(($normalisasi['gizi_kurang'][$i]-$centroid1[1]),2)
				+$c1_var[$i]
				+pow(($normalisasi['angka_kematian'][$i]-$centroid1[2]),2)));
			$c2[$i] = sqrt(abs(pow(($normalisasi['gizi_buruk'][$i]-$centroid2[0]), 2)+pow(($normalisasi['gizi_kurang'][$i]-$centroid2[1]),2)
				+$c2_var[$i]
				+pow(($normalisasi['angka_kematian'][$i]-$centroid2[2]),2)));
			$c3[$i] = sqrt(abs(pow(($normalisasi['gizi_buruk'][$i]-$centroid3[0]), 2)+pow(($normalisasi['gizi_kurang'][$i]-$centroid3[1]),2)
				+$c3_var[$i]
				+pow(($normalisasi['angka_kematian'][$i]-$centroid3[2]),2)));
	}
	unset($c1_var);
	unset($c2_var);
	unset($c3_var);
	
	//<-----------------------------------------------------------------------PROSESKEDUA--------------------------------------------------------------------------------->

	$temp1 = $c1;
	$temp2 = $c2;
	$temp3 = $c3;

	while (true) {
		# code...

	for($i=0;$i<count($dataset);$i++)
	{
		$centroid_merge[$i] = array(
				$c1[$i],
				$c2[$i],
				$c3[$i],
		);
	}

	for($i=0;$i<count($dataset);$i++)
	{
		$centroid_merge[$i]['min'] = array_search(min($centroid_merge[$i]),$centroid_merge[$i]);
	}
	$total_gb1 = 0;
	$total_gk1 = 0;
	$total_penyakit1 = array();
	$total_penyakit2 = array();
	$total_penyakit3 = array();
	$total_am1 = 0;
	$total_gb2 = 0;
	$total_gk2 = 0;
	$total_am2 = 0;
	$total_gb3 = 0;
	$total_gk3 = 0;
	$total_am3 = 0;

	for($i=0;$i<count($dataset);$i++)
	{
		if($centroid_merge[$i]['min']==0)
		{
					if(empty($total_penyakit1))
					{
						for($j = 0; $j < $jumlah;  $j++)
						{
							$total_penyakit1[$j] = $normalisasi['penyakit'.($j+1).''][$i];
						}
					}
					else
					{
						for($j = 0; $j < $jumlah;  $j++)
						{
							$total_penyakit1[$j] += $normalisasi['penyakit'.($j+1).''][$i];
						}
					}
			$c1_temp[$i] = array(

				$total_gb1 += $normalisasi['gizi_buruk'][$i],
				$total_gk1 += $normalisasi['gizi_kurang'][$i],
				$total_am1 += $normalisasi['angka_kematian'][$i],

			);
			for($a = 0; $a < $jumlah;  $a++)
			{
				$c1_temp[$i][$a+3] = $total_penyakit1[$a];
			}
		}
		else if($centroid_merge[$i]['min']==1)
		{
				if(empty($total_penyakit2))
					{
						for($j = 0; $j < $jumlah;  $j++)
						{
							$total_penyakit2[$j] = $normalisasi['penyakit'.($j+1).''][$i];
						}
					}
					else
					{
						for($j = 0; $j < $jumlah;  $j++)
						{
							$total_penyakit2[$j] += $normalisasi['penyakit'.($j+1).''][$i];
						}
					}
			
			$c2_temp[$i] = array(

				$total_gb2 += $normalisasi['gizi_buruk'][$i],
				$total_gk2 += $normalisasi['gizi_kurang'][$i],
				$total_am2 += $normalisasi['angka_kematian'][$i],

			);
			for($a = 0; $a < $jumlah;  $a++)
			{
				$c2_temp[$i][$a+3] = $total_penyakit2[$a];
			}
		}
		else if($centroid_merge[$i]['min']==2)
		{
				if(empty($total_penyakit3))
					{
						for($j = 0; $j < $jumlah;  $j++)
						{
							$total_penyakit3[$j] = $normalisasi['penyakit'.($j+1).''][$i];
						}
					}
					else
					{
						for($j = 0; $j < $jumlah;  $j++)
						{
							$total_penyakit3[$j] =$total_penyakit3[$j]+$normalisasi['penyakit'.($j+1).''][$i];
						}
					}
			$c3_temp[$i] = array(

				$total_gb3 += $normalisasi['gizi_buruk'][$i],
				$total_gk3 += $normalisasi['gizi_kurang'][$i],
				$total_am3 += $normalisasi['angka_kematian'][$i],

			);
			for($a = 0; $a < $jumlah;  $a++)
			{
				$c3_temp[$i][$a+3] = $total_penyakit3[$a];
			}
		}
	}


	for($i=0;$i<count($centroid1);$i++)
	{
		$centroid1[$i] = $c1_temp[max(array_keys($c1_temp))][$i]/count($c1_temp);
	}

	for($i=0;$i<count($centroid2);$i++)
	{
		$centroid2[$i] = $c2_temp[max(array_keys($c2_temp))][$i]/count($c2_temp);
	}

	for($i=0;$i<count($centroid1);$i++)
	{
		$centroid3[$i] = $c3_temp[max(array_keys($c3_temp))][$i]/count($c3_temp);
	}
	unset($c1_temp);
	unset($c2_temp);
	unset($c3_temp);
//<-----------------------------------------------------------------------PROSES KETIGA--------------------------------------------------------------------------------->

	for($i=0;$i<count($dataset);$i++)
	{
		$ctemp1 = 0;
		$ctemp2 = 0;
		$ctemp3 = 0;
		for($a = 1; $a <= $jumlah;  $a++)
		{
			$ctemp1	+= pow(($normalisasi['penyakit'.$a.''][$i]-$centroid1[$a+2]),2);
			$ctemp2	+= pow(($normalisasi['penyakit'.$a.''][$i]-$centroid2[$a+2]),2);
			$ctemp3 += pow(($normalisasi['penyakit'.$a.''][$i]-$centroid3[$a+2]),2);
		}
		$c1_var[$i] = $ctemp1;
		$c2_var[$i] = $ctemp2;
		$c3_var[$i] = $ctemp3;
	}

	for($i=0;$i<count($dataset);$i++)
	{
			$c1[$i] = sqrt(abs(pow(($normalisasi['gizi_buruk'][$i]-$centroid1[0]), 2)+pow(($normalisasi['gizi_kurang'][$i]-$centroid1[1]),2)
				+$c1_var[$i]
				+pow(($normalisasi['angka_kematian'][$i]-$centroid1[2]),2)));
			$c2[$i] = sqrt(abs(pow(($normalisasi['gizi_buruk'][$i]-$centroid2[0]), 2)+pow(($normalisasi['gizi_kurang'][$i]-$centroid2[1]),2)
				+$c2_var[$i]
				+pow(($normalisasi['angka_kematian'][$i]-$centroid2[2]),2)));
			$c3[$i] = sqrt(abs(pow(($normalisasi['gizi_buruk'][$i]-$centroid3[0]), 2)+pow(($normalisasi['gizi_kurang'][$i]-$centroid3[1]),2)
				+$c3_var[$i]
				+pow(($normalisasi['angka_kematian'][$i]-$centroid3[2]),2)));
	}
	unset($c1_var);
	unset($c2_var);
	unset($c3_var);
	if($c1 == $temp1 && $c2 == $temp2 && $c3 == $temp3){
		$centroid_merge_final = array( 
		'centroid_tampil'=>$centroid_merge,
		'kota'=>$data,
		'centroid1'=>$centroid1,
		'centroid2'=>$centroid2,
		'centroid3'=>$centroid3,
		'jumlah_penyakit'=>$jumlah,
			);
		// var_dump($centroid_merge_final);
		// die();
		// 	var_dump($centroid_merge_final);
		// var_dump($centroid2);
		// var_dump($centroid3);
		// die();
		
		$this->tampil_cluster($centroid_merge_final);
		break;
	}
	else{
		$temp1 = $c1;
		$temp2 = $c2;
		$temp3 = $c3;
	}
	}
 }

}