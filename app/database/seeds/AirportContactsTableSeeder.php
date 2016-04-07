<?php

class AirportContactsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		Airport_Contact::truncate();
		$airport_contacts =
			array(
				array(
					'id'      => 1, 'airport_id' => 8, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
					'website' => 'http://www.flugplatz-aachen.de/'
				), array(
				'id' => 2, 'airport_id' => 12, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.aal.dk/'
			), array(
				'id'    => 3, 'airport_id' => 17, 'phone' => '(861-33) 3-32-33; 9-43-77', 'fax' => '(861-33) 4-35-44',
				'email' => 'info@anapa-airport.ru', 'website' => 'http://www.anapa-airport.ru'
			), array(
				'id'      => 4, 'airport_id' => 18, 'phone' => '4 587 757 000', 'fax' => '4 587 757 030', 'email' => 'info@aar.dk',
				'website' => 'http://www.aar.dk'
			), array(
				'id'      => 5, 'airport_id' => 27, 'phone' => '(3902) 28-20-01', 'fax' => '(3902) 28-28-45',
				'email'   => 'aeroport@khakasnet.ru', 'website' => 'http://www.abakan-airport.ru'
			), array(
				'id'      => 6, 'airport_id' => 42, 'phone' => '15 052 447 700', 'fax' => NULL, 'email' => 'jechavez@cabq.gov',
				'website' => 'http://www.cabq.gov/airport/'
			), array(
				'id'      => 7, 'airport_id' => 51, 'phone' => '+44 (0)870 040 0006', 'fax' => '+44 (0)1224 775 845', 'email' => NULL,
				'website' => 'http://www.aberdeenairport.com/'
			), array(
				'id' => 8, 'airport_id' => 53, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.gcaa.com.gh'
			), array(
				'id'      => 9, 'airport_id' => 56, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.airport-stgallen.com/'
			), array(
				'id'    => 10, 'airport_id' => 66, 'phone' => '+7 (39151)5-16-61', 'fax' => '+7 (39151)5-15-81',
				'email' => 'airportachinsk@mail.ru', 'website' => NULL
			), array(
				'id'      => 11, 'airport_id' => 74, 'phone' => '0090 232 274 20 11', 'fax' => '0090 232 274 20 02', 'email' => NULL,
				'website' => NULL
			), array(
				'id' => 12, 'airport_id' => 84, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.aal.com.au'
			), array(
				'id'      => 13, 'airport_id' => 87, 'phone' => '886 727 007', 'fax' => '886 727 007', 'email' => 'peter@andamooka.au.com',
				'website' => 'http://www.andamookaopal.com.au'
			), array(
				'id'      => 14, 'airport_id' => 108, 'phone' => '(8622) 40-00-88', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://airport.sochi.ru'
			), array(
				'id'      => 15, 'airport_id' => 109, 'phone' => '+47 70 11 48 00', 'fax' => '+47 70 18 37 38', 'email' => NULL,
				'website' => 'http://www.alesund.airport.no/'
			), array(
				'id'      => 16, 'airport_id' => 129, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.augsburg-airport.de/'
			), array(
				'id'      => 17, 'airport_id' => 130, 'phone' => '412-472-3525', 'fax' => '412-472-3636',
				'email'   => 'info@flypittsburgh.com', 'website' => 'http://www.pitairport.com/'
			), array(
				'id'      => 18, 'airport_id' => 135, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.lfv.se/templates/LFV_AirportStartPage____4777.aspx'
			), array(
				'id'      => 19, 'airport_id' => 143, 'phone' => '+34 951 01 1000', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.aena.es/csee/Satellite?cid=1048858947193&pagename=Estandar%2FPage%2FAeropuerto&SMO=-1&SiteName=AGP&c=Page&MO=0&lang=EN_GB'
			), array(
				'id' => 20, 'airport_id' => 151, 'phone' => '+91 4894-42217', 'fax' => '-47020', 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 21, 'airport_id' => 193, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.ajaccio.aeroport.fr'
			), array(
				'id'      => 22, 'airport_id' => 214, 'phone' => '(81)166-83-3939', 'fax' => '(81)166-83-3408',
				'email'   => 'info@aapb.co.jp', 'website' => 'http://www.aapb.co.jp/'
			), array(
				'id'    => 23, 'airport_id' => 216, 'phone' => '+64 9 256 8899', 'fax' => '+64 9 275 5835',
				'email' => 'mail@akl-airport.co.nz', 'website' => 'http://www.auckland-airport.co.nz/'
			), array(
				'id' => 24, 'airport_id' => 229, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.alaport.com'
			), array(
				'id'      => 25, 'airport_id' => 230, 'phone' => '518-242-2222', 'fax' => '518-242-2640',
				'email'   => 'info@albanyairport.com', 'website' => 'http://www.albanyairport.com'
			), array(
				'id' => 26, 'airport_id' => 235, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.egsa.dz'
			), array(
				'id'      => 27, 'airport_id' => 251, 'phone' => '509-525-3100', 'fax' => '509-525-3101',
				'email'   => 'cp@portwallawalla.com', 'website' => 'http://www.wallawallaairport.com'
			), array(
				'id'      => 28, 'airport_id' => 258, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.ahmedabadairport.com/'
			), array(
				'id'      => 29, 'airport_id' => 273, 'phone' => '-207940769', 'fax' => NULL, 'email' => 'info@schiphol.nl',
				'website' => 'http://www.schiphol.com/'
			), array(
				'id'      => 30, 'airport_id' => 283, 'phone' => '907-266-2529', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.anchorageairport.com'
			), array(
				'id'      => 31, 'airport_id' => 285, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.angers.aeroport.fr/'
			), array(
				'id'    => 32, 'airport_id' => 298, 'phone' => '00 32 (0)3 285.65.00', 'fax' => '00 32 (0)3 285.65.01',
				'email' => 'navigatie.ebaw@lin.vlaanderen.be', 'website' => 'http://www.antwerpairport.be'
			), array(
				'id'      => 33, 'airport_id' => 309, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.flughafen-altenburg.de'
			), array(
				'id'      => 34, 'airport_id' => 314, 'phone' => '3907128271', 'fax' => NULL, 'email' => 'info@ancona-airport.com',
				'website' => 'http://www.ancona-airport.com'
			), array(
				'id'      => 35, 'airport_id' => 363, 'phone' => '(8182) 64-09-12', 'fax' => '(8182) 64-09-13', 'email' => 'arhap@atnet.ru',
				'website' => 'http://arhport.ru/rus/com-airport.htm'
			), array(
				'id'      => 36, 'airport_id' => 369, 'phone' => '+46 8 797 6000', 'fax' => '+46 8 797 6984', 'email' => NULL,
				'website' => 'http://www.lfv.se/arlanda'
			), array(
				'id'      => 37, 'airport_id' => 378, 'phone' => '+40 (0)257 254440', 'fax' => '+40 (0)257 254482', 'email' => NULL,
				'website' => 'http://www.aeroportularad.ro/'
			), array(
				'id' => 38, 'airport_id' => 380, 'phone' => '353 550 205', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id' => 39, 'airport_id' => 392, 'phone' => '903-938-3908', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 40, 'airport_id' => 412, 'phone' => '302 103 530 001', 'fax' => '302 103 531 000',
				'email'   => 'airport_info@aia.gr', 'website' => 'http://www.aia.gr'
			), array(
				'id'      => 41, 'airport_id' => 416, 'phone' => '1-800 897-1910', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.atlanta-airport.com/'
			), array(
				'id' => 42, 'airport_id' => 427, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.atwairport.com/'
			), array(
				'id' => 43, 'airport_id' => 431, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.airportaruba.com'
			), array(
				'id'      => 44, 'airport_id' => 438, 'phone' => '+971 2-5757500', 'fax' => NULL, 'email' => 'info@dcaauh.gov.ae',
				'website' => 'http://www.dcaauh.gov.ae'
			), array(
				'id' => 45, 'airport_id' => 450, 'phone' => '61740606167', 'fax' => '61740606167', 'email' => NULL, 'website' => NULL
			), array(
				'id' => 46, 'airport_id' => 462, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.flyavl.com/'
			), array(
				'id'      => 47, 'airport_id' => 484, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.hcaa-eleng.gr/alexan.htm'
			), array(
				'id'      => 48, 'airport_id' => 494, 'phone' => NULL, 'fax' => NULL, 'email' => 'info@akita-airport.com',
				'website' => 'http://www.akita-airport.com/'
			), array(
				'id'      => 49, 'airport_id' => 513, 'phone' => '+90 242 330 36 00', 'fax' => '+90(242) 330 36 48', 'email' => NULL,
				'website' => 'http://www.aytport.com'
			), array(
				'id'      => 50, 'airport_id' => 521, 'phone' => '(998-742) 24-27-44, 24-15-57', 'fax' => '(998-742) 24-48-64',
				'email'   => NULL, 'website' => NULL
			), array(
				'id'    => 51, 'airport_id' => 534, 'phone' => '97 317 321 997', 'fax' => '97 317 324 096',
				'email' => 'info@bahrain.airport.com', 'website' => 'http://www.bahrainairport.com'
			), array(
				'id'      => 52, 'airport_id' => 559, 'phone' => NULL, 'fax' => NULL, 'email' => 'flughafen-barth@t-online.de',
				'website' => 'http://www.ostseeflughafen-stralsund-barth.de/'
			), array(
				'id'    => 53, 'airport_id' => 570, 'phone' => '+44 (0) 1252 879449', 'fax' => '+44 (0) 1252 874444',
				'email' => 'blackbusheairport@bca-group.com', 'website' => 'http://www.blackbusheairport.co.uk'
			), array(
				'id'    => 54, 'airport_id' => 572, 'phone' => '+40 21 232 0020', 'fax' => '+40 21 210 5687',
				'email' => 'airport@baneasa.aero', 'website' => 'http://www.baneasa.aero'
			), array(
				'id'      => 55, 'airport_id' => 591, 'phone' => '34 902 404 704', 'fax' => NULL, 'email' => 'bcninfofi@aena.es',
				'website' => 'http://www.aena.es/csee/Satellite?pagename=Estandar%2FPage%2FAeropuerto&c=Page&MO=0&SMO=-1&SiteName=BCN%26cid%3D1045569607459'
			), array(
				'id'      => 56, 'airport_id' => 615, 'phone' => '860-292-2000', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.bradleyairport.com/'
			), array(
				'id' => 57, 'airport_id' => 619, 'phone' => '00977-(0)23-520058', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id' => 58, 'airport_id' => 624, 'phone' => '+47 77 83 02 00', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 59, 'airport_id' => 636, 'phone' => '+381 11 209-4000', 'fax' => '+381 11 22 86 448',
				'email'   => 'press@beg.aero', 'website' => 'http://www.beg.aero'
			), array(
				'id'      => 60, 'airport_id' => 654, 'phone' => '+961 1 628 000', 'fax' => '+ 961 1 629 010', 'email' => NULL,
				'website' => 'http://www.beirutairport.gov.lb/indexflash.html'
			), array(
				'id'      => 61, 'airport_id' => 673, 'phone' => '00 44 (0)28 9448 4848', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.belfastairport.com'
			), array(
				'id'      => 62, 'airport_id' => 687, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://sunnybarbados.net/BarbadosAirport/'
			), array(
				'id'      => 63, 'airport_id' => 691, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.binghamtonairport.com'
			), array(
				'id'    => 64, 'airport_id' => 693, 'phone' => '+47 55 99 80 00', 'fax' => '+47 55 99 80 10',
				'email' => 'infosenteret.bergen@avinor.no', 'website' => 'http://www.avinor.no/English/Airports/Bergen_Airport,_Flesland/'
			), array(
				'id'      => 65, 'airport_id' => 696, 'phone' => '207-992-4600', 'fax' => '207-945-3607', 'email' => NULL,
				'website' => 'http://www.flybangor.com'
			), array(
				'id'      => 66, 'airport_id' => 703, 'phone' => '35311258', 'fax' => '35317880', 'email' => NULL,
				'website' => 'http://www.sacbo.it/'
			), array(
				'id' => 67, 'airport_id' => 706, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.bhbairport.com'
			), array(
				'id'    => 68, 'airport_id' => 708, 'phone' => '+44 28 9093 9093', 'fax' => '+44 28 9093 9094',
				'email' => 'info@belfastcityairport.com', 'website' => 'http://www.belfastcityairport.com'
			), array(
				'id'      => 69, 'airport_id' => 728, 'phone' => '+44 (0)8707 335511', 'fax' => '+44 (0)121 782 8802', 'email' => NULL,
				'website' => 'http://www.bhx.co.uk/'
			), array(
				'id'    => 70, 'airport_id' => 746, 'phone' => '+33 5 59 43 83 83', 'fax' => '+33 5 59 43 83 86',
				'email' => 'informations@biarritz.aeroport.fr', 'website' => 'http://www.biarritz.aeroport.fr/indexen.html'
			), array(
				'id'      => 71, 'airport_id' => 779, 'phone' => '(495) 558-47-38', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.bykovo-sky.ru'
			), array(
				'id'      => 72, 'airport_id' => 807, 'phone' => NULL, 'fax' => NULL, 'email' => 'atsessd@dalaflyget.se',
				'website' => 'http://www.dalaflyget.se/'
			), array(
				'id'    => 73, 'airport_id' => 813, 'phone' => '8 700 273 777', 'fax' => '8 700 273 778',
				'email' => 'info@blackpoolairport.com', 'website' => 'http://www.blackpoolinternational.com'
			), array(
				'id'      => 74, 'airport_id' => 814, 'phone' => '4 576 505 050', 'fax' => NULL, 'email' => 'info@bll.dk',
				'website' => 'http://www.billund-airport.com/'
			), array(
				'id'      => 75, 'airport_id' => 819, 'phone' => '3,90516E+11', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.bologna-airport.it/'
			), array(
				'id'    => 76, 'airport_id' => 820, 'phone' => '+91 80 2354 0000', 'fax' => '+91 80 2333 3400',
				'email' => 'contact@bialairport.com', 'website' => 'http://www.bialairport.com/'
			), array(
				'id' => 77, 'airport_id' => 829, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.bromma.lfv.se/'
			), array(
				'id'      => 78, 'airport_id' => 846, 'phone' => '04939 / 914040', 'fax' => NULL, 'email' => 'info@baltrum-flug.de',
				'website' => 'http://www.baltrum-flug.de'
			), array(
				'id' => 79, 'airport_id' => 855, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.nashintl.com'
			), array(
				'id'      => 80, 'airport_id' => 859, 'phone' => '+61 7 3406 3000', 'fax' => '+61 7 3406 3111',
				'email'   => 'info@bne.com.au', 'website' => 'http://www.bne.com.au/'
			), array(
				'id'      => 81, 'airport_id' => 877, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.banjaluka-airport.com/'
			), array(
				'id'      => 82, 'airport_id' => 886, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.aerocivil.gov.co/plan%20maestro/index.htm'
			), array(
				'id'    => 83, 'airport_id' => 887, 'phone' => '441 202 364 000', 'fax' => '441 202 364 109',
				'email' => 'feedback@bournemouthairport.co.uk', 'website' => 'http://www.flybournemouth.com'
			), array(
				'id' => 84, 'airport_id' => 888, 'phone' => '12 084 330 460', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'    => 85, 'airport_id' => 889, 'phone' => '+359 56 870248', 'fax' => '+359 56 873154',
				'email' => 'operation@bourgas-airport.com', 'website' => 'http://www.bourgas-airport.com/'
			), array(
				'id'    => 86, 'airport_id' => 892,
				'phone' => 'Domestic Terminal (1A/1B) - +91 22 26264000,  International Terminal (2A/2C) - +91 22 26813000', 'fax' => NULL,
				'email' => 'yourcomments@csia.in', 'website' => 'http://www.csia.in'
			), array(
				'id' => 87, 'airport_id' => 898, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.massport.com'
			), array(
				'id'    => 88, 'airport_id' => 925, 'phone' => '1 959 578 500', 'fax' => '1 959 540 406',
				'email' => 'enquiries@bigginhillairport.com', 'website' => 'http://www.bigginhillairport.com'
			), array(
				'id'      => 89, 'airport_id' => 941, 'phone' => '+49 421 5595-0', 'fax' => '+49 421 5595-474', 'email' => NULL,
				'website' => 'http://www.airport-bremen.de'
			), array(
				'id' => 90, 'airport_id' => 945, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.seap-puglia.it/'
			), array(
				'id' => 91, 'airport_id' => 953, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.airport-brno.cz'
			), array(
				'id'    => 92, 'airport_id' => 955, 'phone' => '+44 (0)870 121 2747', 'fax' => '+44 (0)1275 474886',
				'email' => 'feedback@bristolairport.com', 'website' => 'http://www.bristolairport.co.uk'
			), array(
				'id'      => 93, 'airport_id' => 957, 'phone' => '+32 (0) 900 7 0000', 'fax' => NULL, 'email' => 'info@brusselairport.be',
				'website' => NULL
			), array(
				'id' => 94, 'airport_id' => 961, 'phone' => '502-348-2099', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id' => 95, 'airport_id' => 964, 'phone' => '+55(61)33649002', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id' => 96, 'airport_id' => 974, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.euroairport.com'
			), array(
				'id'      => 97, 'airport_id' => 998, 'phone' => '(62-651) 21341', 'fax' => '(62-651) 34240', 'email' => NULL,
				'website' => 'http://www.angkasapura2.co.id/'
			), array(
				'id'      => 98, 'airport_id' => 1007, 'phone' => '42148571111', 'fax' => NULL,
				'email'   => 'information@airportbratislava.sk', 'website' => 'http://www.airportbratislava.sk'
			), array(
				'id'      => 99, 'airport_id' => 1018, 'phone' => '(36) 1 2969696', 'fax' => '(36) 1 2965304', 'email' => 'info@bud.hu',
				'website' => 'http://www.bud.hu'
			), array(
				'id'      => 100, 'airport_id' => 1029, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.bobhopeairport.com'
			), array(
				'id'      => 101, 'airport_id' => 1038, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.aeroportbeauvais.com/'
			), array(
				'id'      => 102, 'airport_id' => 1046, 'phone' => '47461202', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.birdsville.com'
			), array(
				'id'      => 103, 'airport_id' => 1057, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.beverlyairport.com'
			), array(
				'id'    => 104, 'airport_id' => 1063, 'phone' => '+49 (531) 35 44 00', 'fax' => NULL,
				'email' => 'info@flughafen-braunschweig-wolfsburg.de', 'website' => 'http://www.flughafen-braunschweig-wolfsburg.de'
			), array(
				'id'      => 105, 'airport_id' => 1067, 'phone' => '410-859-7111', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.bwiairport.com'
			), array(
				'id' => 106, 'airport_id' => 1069, 'phone' => '3,2755E-05', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 107, 'airport_id' => 1078, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http:// www.bankstownairport.com.au'
			), array(
				'id' => 108, 'airport_id' => 1126, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.plb.pl'
			), array(
				'id'      => 109, 'airport_id' => 1132, 'phone' => '4 063 888 321', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.gallatinfield.com/'
			), array(
				'id'      => 110, 'airport_id' => 1133, 'phone' => '+39-0471-255 255', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.abd-airport.it'
			), array(
				'id'      => 111, 'airport_id' => 1135, 'phone' => NULL, 'fax' => NULL, 'email' => 'aeroport@beziers.cci.fr',
				'website' => 'http://www.beziers.aeroport.fr/'
			), array(
				'id' => 112, 'airport_id' => 1141, 'phone' => '00 44 1993 842551', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 113, 'airport_id' => 1146, 'phone' => '+1 (1)803 822-5010', 'fax' => '+1 (1)803 822-5141', 'email' => NULL,
				'website' => 'http://www.columbiaairport.com/'
			), array(
				'id'      => 114, 'airport_id' => 1150, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.cairo-airport.com/'
			), array(
				'id'      => 115, 'airport_id' => 1152, 'phone' => '+1 330 499 4221, +1 330 896 2385', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.akroncantonairport.com/'
			), array(
				'id' => 116, 'airport_id' => 1155, 'phone' => '0086-020-86120000', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id' => 117, 'airport_id' => 1157, 'phone' => '1,15093E+11', 'fax' => '1,15093E+11', 'email' => NULL, 'website' => NULL
			), array(
				'id'    => 118, 'airport_id' => 1165, 'phone' => '+44 (0)1228 573641', 'fax' => '+44 (0)1228 573310',
				'email' => 'enquiries@carlisleairport.co.uk', 'website' => 'http://www.carlisleairport.co.uk'
			), array(
				'id'      => 119, 'airport_id' => 1174, 'phone' => '+44 (0) 1223 373765', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.cambridgecityairport.com'
			), array(
				'id'    => 120, 'airport_id' => 1185, 'phone' => '+61 2 6275 2222', 'fax' => '+61 2 6275 2244',
				'email' => 'info@canberraairport.com.au', 'website' => 'http://www.canberraairport.com.au'
			), array(
				'id'      => 121, 'airport_id' => 1195, 'phone' => '+1 (909) 982-6021', 'fax' => NULL, 'email' => 'info@cableairport.com',
				'website' => 'http://www.cableairport.com/index.shtml'
			), array(
				'id'      => 122, 'airport_id' => 1203, 'phone' => NULL, 'fax' => NULL, 'email' => 'contact@calicutairport.com',
				'website' => 'http://www.calicutairport.com'
			), array(
				'id'      => 123, 'airport_id' => 1209, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.aeropuertocarrielsur.co.cl'
			), array(
				'id'      => 124, 'airport_id' => 1212, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.aeropuerto-maiquetia.com.ve'
			), array(
				'id' => 125, 'airport_id' => 1225, 'phone' => '+33 1 48 62 12 12', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id' => 126, 'airport_id' => 1239, 'phone' => '973-227-4567', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 127, 'airport_id' => 1243, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.mactan-cebuairport.com.ph/'
			), array(
				'id'      => 128, 'airport_id' => 1260, 'phone' => '(+61 2) 4991 6500', 'fax' => '(+61 2) 4991 6499', 'email' => NULL,
				'website' => 'http://www.hva.com.au'
			), array(
				'id'      => 129, 'airport_id' => 1278, 'phone' => '+353 74 95 48232', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.donegalairport.ie'
			), array(
				'id'      => 130, 'airport_id' => 1285, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.hcaa-eleng.gr/kerk.htm'
			), array(
				'id' => 131, 'airport_id' => 1288, 'phone' => '+55 (0)65 682-2213', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id' => 132, 'airport_id' => 1294, 'phone' => '+55(11)50909120/9071', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 133, 'airport_id' => 1298, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.koeln-bonn-airport.de/index.php'
			), array(
				'id'      => 134, 'airport_id' => 1303, 'phone' => '301-864-5844', 'fax' => '301-277-9269', 'email' => NULL,
				'website' => 'http://www.pgparks.com/places/historic/cpairport.html'
			), array(
				'id'      => 135, 'airport_id' => 1310, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.chattairport.com'
			), array(
				'id'      => 136, 'airport_id' => 1312, 'phone' => '+64 3 358 5029', 'fax' => '+64 3 353 7730',
				'email'   => 'info@cial.co.nz', 'website' => 'http://www.christchurch-airport.co.nz'
			), array(
				'id' => 137, 'airport_id' => 1313, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.flywga.org'
			), array(
				'id' => 138, 'airport_id' => 1318, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.flychicago.com'
			), array(
				'id'      => 139, 'airport_id' => 1326, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.hcaa-eleng.gr/hania.htm'
			), array(
				'id'    => 140, 'airport_id' => 1327, 'phone' => '+33 (0) 2 54 60 53 53', 'fax' => '+33 (0) 2 54 60 53 54',
				'email' => 'info@chateauroux-airport.com', 'website' => 'http://www.chateauroux-airport.com'
			), array(
				'id' => 141, 'airport_id' => 1336, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.adr.it/'
			), array(
				'id'      => 142, 'airport_id' => 1339, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.easterniowaairport'
			), array(
				'id'      => 143, 'airport_id' => 1366, 'phone' => '902 200 522', 'fax' => NULL, 'email' => 'rrhh@aeropuertocr.com <rrhh',
				'website' => 'http://donquijoteairport.com/'
			), array(
				'id'      => 144, 'airport_id' => 1367, 'phone' => '-6285', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://cheongju.airport.co.kr/eng/index.jsp'
			), array(
				'id' => 145, 'airport_id' => 1369, 'phone' => '77 591 063', 'fax' => '77591267', 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 146, 'airport_id' => 1398, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.co.san-diego.ca.us/dpw/airports/mcpal.htm'
			), array(
				'id'      => 147, 'airport_id' => 1399, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.clevelandairport.com/'
			), array(
				'id' => 148, 'airport_id' => 1403, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.airportcluj.ro'
			), array(
				'id'    => 149, 'airport_id' => 1405, 'phone' => '19 798 458 511', 'fax' => '19 798 456 453',
				'email' => 'easterwood@easterwoodairport.com', 'website' => 'http://www.easterwoodairport.com'
			), array(
				'id'      => 150, 'airport_id' => 1413, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.charmeck.org/Departments/Airport/Home.htm'
			), array(
				'id' => 151, 'airport_id' => 1421, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.airport.lk'
			), array(
				'id'      => 152, 'airport_id' => 1425, 'phone' => '+33 4 79 54 43 54', 'fax' => NULL,
				'email'   => 'accueil@chambery-airport.com', 'website' => 'http://www.chambery.aeroport.fr/rubrique.php3?id_rubrique=55'
			), array(
				'id' => 153, 'airport_id' => 1426, 'phone' => '+55(67)2313322', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id' => 154, 'airport_id' => 1428, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.flycmi.com'
			), array(
				'id'      => 155, 'airport_id' => 1443, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.houghtoncounty.org'
			), array(
				'id'      => 156, 'airport_id' => 1463, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.cairnsairport.com'
			), array(
				'id'      => 157, 'airport_id' => 1480, 'phone' => '914 842 610 115', 'fax' => '919 847 068 499',
				'email'   => 'cial@vsnl.com', 'website' => 'http://www.cochin-airport.com/'
			), array(
				'id' => 158, 'airport_id' => 1481, 'phone' => '18 793 367', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id' => 159, 'airport_id' => 1488, 'phone' => '719-550-1972', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 160, 'airport_id' => 1503, 'phone' => '4 532 313 231', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.cph.dk'
			), array(
				'id'      => 161, 'airport_id' => 1512, 'phone' => '+ 27 21 937 1275', 'fax' => '+27 21 936 2937', 'email' => NULL,
				'website' => 'http://www.acsa.co.za'
			), array(
				'id'      => 162, 'airport_id' => 1537, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.cctexas.com/airport/'
			), array(
				'id'    => 163, 'airport_id' => 1543, 'phone' => '3 909 627 995 201', 'fax' => '3 909 627 995 212',
				'email' => 'direzione@aeroporto.kr.it', 'website' => 'http://www.aeroporto.kr.it/'
			), array(
				'id' => 164, 'airport_id' => 1548, 'phone' => '1 951 200 411', 'fax' => '1 951 200 469', 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 165, 'airport_id' => 1572, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.aeroporto.catania.it/'
			), array(
				'id'      => 166, 'airport_id' => 1589, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.new-chitose-airport.jp/'
			), array(
				'id'      => 167, 'airport_id' => 1591, 'phone' => NULL, 'fax' => NULL, 'email' => 'chengduair@cdairport.com',
				'website' => 'http://www.cdairport.com/'
			), array(
				'id'      => 168, 'airport_id' => 1645, 'phone' => '+44 (0) 1446 711111', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.cwlfly.com'
			), array(
				'id' => 169, 'airport_id' => 1661, 'phone' => '2747452220', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id' => 170, 'airport_id' => 1705, 'phone' => '8914771, 8914730', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 171, 'airport_id' => 1714, 'phone' => '1-214-670-6073', 'fax' => '1-214-670-6051', 'email' => NULL,
				'website' => 'http://www.dallas-lovefield.com/'
			), array(
				'id'    => 172, 'airport_id' => 1723, 'phone' => '507-721-1072 / 507-721-1062', 'fax' => NULL,
				'email' => 'iesquivel@aeronautica.gob.pa', 'website' => 'http://www.aeronautica.gob.pa'
			), array(
				'id' => 173, 'airport_id' => 1727, 'phone' => '0885 -210200', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 174, 'airport_id' => 1740, 'phone' => '703 417 80 00', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://metwashairports.com/national'
			), array(
				'id'      => 175, 'airport_id' => 1756, 'phone' => '3652520821', 'fax' => '3652520822', 'email' => 'ops@airportdebrecen.hu',
				'website' => 'http://www.airportdebrecen.hu/'
			), array(
				'id' => 176, 'airport_id' => 1762, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://delhiairport.com/'
			), array(
				'id'      => 177, 'airport_id' => 1764, 'phone' => '+1 (303) 342-2000', 'fax' => NULL, 'email' => 'info@diadenver.net',
				'website' => 'http://www.flydenver.com/'
			), array(
				'id'      => 178, 'airport_id' => 1779, 'phone' => '(520) 364-2771', 'fax' => '(520) 364-8234', 'email' => NULL,
				'website' => NULL
			), array(
				'id'    => 179, 'airport_id' => 1798, 'phone' => '+31 (0223-) 635666', 'fax' => '+31 (0223-) 660892',
				'email' => 'info@denhelderairport.nl', 'website' => 'http://www.denhelderairport.nl'
			), array(
				'id' => 180, 'airport_id' => 1800, 'phone' => '+91 (0) 373 2382523', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id' => 181, 'airport_id' => 1832, 'phone' => '+237 42 35 26', 'fax' => '+237 42 37 58', 'email' => NULL, 'website' => NULL
			), array(
				'id'    => 182, 'airport_id' => 1835, 'phone' => '+33 3 84 72 04 26', 'fax' => '+33 3 84 82 79 54',
				'email' => 'aeroport-dole.tavaux@jura.cci.fr', 'website' => 'http://www.aeroportfranchecomte.com'
			), array(
				'id'    => 183, 'airport_id' => 1842, 'phone' => '902 527 925 555', 'fax' => '902 527 925 565',
				'email' => 'info@atmairport.aero', 'website' => 'http://www.atmairport.aero/'
			), array(
				'id'      => 184, 'airport_id' => 1854, 'phone' => '+7 (495) 933-66-66', 'fax' => NULL, 'email' => 'pr@eastline.ru',
				'website' => 'http://www.domodedovo.ru'
			), array(
				'id'      => 185, 'airport_id' => 1863, 'phone' => '1 382 662 200', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.dundeecity.gov.uk/airport/timetable.htm'
			), array(
				'id'      => 186, 'airport_id' => 1892, 'phone' => '(+380 622) 515322', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://kbp.kiev.ua/airports/search/DONETSK.html'
			), array(
				'id' => 187, 'airport_id' => 1893, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://aeroport.gapi.fr/'
			), array(
				'id' => 188, 'airport_id' => 1910, 'phone' => '62 361 751 020', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 189, 'airport_id' => 1926, 'phone' => '3 518 810', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.dresden-airport.de'
			), array(
				'id'      => 190, 'airport_id' => 1945, 'phone' => '760 786-2343 for 100LL Fuel', 'fax' => NULL, 'email' => NULL,
				'website' => NULL
			), array(
				'id'    => 191, 'airport_id' => 1947, 'phone' => '49 231 921 301', 'fax' => '492 319 213 125',
				'email' => 'service@flughafen-dortmund.de', 'website' => 'http://www.dortmund-airport.com'
			), array(
				'id'      => 192, 'airport_id' => 1948, 'phone' => '13 186 735 398', 'fax' => '13 186 735 391', 'email' => NULL,
				'website' => NULL
			), array(
				'id'      => 193, 'airport_id' => 1950, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.metroairport.com/'
			), array(
				'id'    => 194, 'airport_id' => 1952, 'phone' => '+353 1 8141111', 'fax' => NULL,
				'email' => 'information.queries@dublinairport.com', 'website' => 'http://www.dub.aero'
			), array(
				'id'    => 195, 'airport_id' => 1954, 'phone' => '+64 3 486 2879', 'fax' => '+64 3 486 2813',
				'email' => 'admin@dnairport.co.nz', 'website' => 'http://www.dnairport.co.nz'
			), array(
				'id'      => 196, 'airport_id' => 1963, 'phone' => '+27 (0)31 451 6758', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.acsa.co.za/home.asp?pid=1162'
			), array(
				'id'      => 197, 'airport_id' => 1964, 'phone' => '492114210', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.duesseldorf-international.de/'
			), array(
				'id'      => 198, 'airport_id' => 1978, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.hooksairport.com'
			), array(
				'id'      => 199, 'airport_id' => 1982, 'phone' => '+971 4 216 2525', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.dubaiairport.com'
			), array(
				'id'      => 200, 'airport_id' => 2004, 'phone' => '308-234-2318', 'fax' => '308-236-7968',
				'email'   => 'bjohnson@flykearney.com', 'website' => NULL
			), array(
				'id'      => 201, 'airport_id' => 2005, 'phone' => '943 66 85 00 / 902 40 47 04', 'fax' => NULL, 'email' => NULL,
				'website' => NULL
			), array(
				'id'      => 202, 'airport_id' => 2009, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.caa.co.ug/entebbe.php'
			), array(
				'id'      => 203, 'airport_id' => 2012, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.esbjerg-lufthavn.dk'
			), array(
				'id' => 204, 'airport_id' => 2021, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.ecgairport.com'
			), array(
				'id' => 205, 'airport_id' => 2023, 'phone' => '903 922 314 806', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 206, 'airport_id' => 2033, 'phone' => '+44 (0) 870 040 0007', 'fax' => '+44 (0) 131 344 3470', 'email' => NULL,
				'website' => 'http://www.edinburghairport.com'
			), array(
				'id' => 207, 'airport_id' => 2037, 'phone' => '2663761302', 'fax' => '2663761306', 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 208, 'airport_id' => 2048, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.hcaa-eleng.gr/kefalonia.htm'
			), array(
				'id'      => 209, 'airport_id' => 2058, 'phone' => '+7 (4722) 340928', 'fax' => '+7 (4722) 358657', 'email' => NULL,
				'website' => 'http://www.belgorodavia.ru'
			), array(
				'id'    => 210, 'airport_id' => 2071, 'phone' => '+31 40 291 98 18', 'fax' => '+31 40 291 98 20',
				'email' => 'info@eindhovenairport.nl', 'website' => 'http://www.eindhovenairport.com/'
			), array(
				'id' => 211, 'airport_id' => 2102, 'phone' => '+966(6)3800001', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 212, 'airport_id' => 2112, 'phone' => '8 719 199 000', 'fax' => NULL, 'email' => 'enquiries@nottinghamema.com',
				'website' => 'http://www.nottinghamema.com'
			), array(
				'id' => 213, 'airport_id' => 2119, 'phone' => '041 268 31 11', 'fax' => '041 280 78 71', 'email' => NULL, 'website' => NULL
			), array(
				'id'    => 214, 'airport_id' => 2137, 'phone' => '+44 (0) 28 6632 9000', 'fax' => '+44 (0) 28 632 9100',
				'email' => 'info@enniskillen-airport.co.uk', 'website' => 'http://www.enniskillen-airport.co.uk/'
			), array(
				'id'    => 215, 'airport_id' => 2142, 'phone' => '+31(0)53-4862222', 'fax' => '+31(0)53-4359691',
				'email' => 'info@enschede-airport.nl', 'website' => 'http://www.enschede-airport.nl'
			), array(
				'id'      => 216, 'airport_id' => 2147, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.aeropuertoolayaherrera.gov.co'
			), array(
				'id' => 217, 'airport_id' => 2163, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.eepu.ee/'
			), array(
				'id'      => 218, 'airport_id' => 2170, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.airport-erfurt.de'
			), array(
				'id'    => 219, 'airport_id' => 2171, 'phone' => '(212) 35 57 23 50 / 35 57 42 63', 'fax' => '(212) 35 57 23 50',
				'email' => NULL, 'website' => NULL
			), array(
				'id'      => 220, 'airport_id' => 2182, 'phone' => NULL, 'fax' => NULL, 'email' => 'info@esenboga.com',
				'website' => 'http://www.esenboga.com'
			), array(
				'id' => 221, 'airport_id' => 2183, 'phone' => '906-786-4902', 'fax' => '906-786-2583', 'email' => NULL, 'website' => NULL
			), array(
				'id'    => 222, 'airport_id' => 2188, 'phone' => '+44-(0)1273-296900', 'fax' => '+44-(0)1273-296899',
				'email' => 'admin@shorehamairport.co.uk', 'website' => 'http://www.shorehamairport.co.uk'
			), array(
				'id'      => 223, 'airport_id' => 2204, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.iaa.gov.il/Rashat/en-US/Airports/Eilat/'
			), array(
				'id'      => 224, 'airport_id' => 2207, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.metz-nancy-lorraine.aeroport.fr'
			), array(
				'id'      => 225, 'airport_id' => 2220, 'phone' => '(+47) 76 98 10 25', 'fax' => '(+47) 76 98 10 09', 'email' => NULL,
				'website' => 'http://www.avinor.no/Norsk/Lufthavner/Harstad+Narvik_lufthavn,_Evenes/'
			), array(
				'id' => 226, 'airport_id' => 2224, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.zvartnots.am/'
			), array(
				'id'    => 227, 'airport_id' => 2225, 'phone' => '+1 812 421-4401', 'fax' => '+1 812 421-4412',
				'email' => 'comments@evvairport.com', 'website' => 'http://www.evvairport.com'
			), array(
				'id' => 228, 'airport_id' => 2235, 'phone' => '1 888 397 4636 ext. 22', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 229, 'airport_id' => 2239, 'phone' => '+44 (0)1392 367433', 'fax' => '+44 (0)1392 364593', 'email' => NULL,
				'website' => 'http://www.exeter-airport.co.uk'
			), array(
				'id'      => 230, 'airport_id' => 2245, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.aa2000.com.ar/index.php'
			), array(
				'id'      => 231, 'airport_id' => 2250, 'phone' => '298 354 400', 'fax' => '298 354 401', 'email' => NULL,
				'website' => 'http://www.floghavn.fo/'
			), array(
				'id'      => 232, 'airport_id' => 2260, 'phone' => '289 800 800', 'fax' => NULL,
				'email'   => 'faro.airport@ana-aeroportos.pt', 'website' => 'http://www.ana.pt'
			), array(
				'id'      => 233, 'airport_id' => 2277, 'phone' => '4 062 575 994', 'fax' => '4 062 575 960', 'email' => NULL,
				'website' => 'http://www.glacierairport.com/'
			), array(
				'id' => 234, 'airport_id' => 2282, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.adr.it/'
			), array(
				'id' => 235, 'airport_id' => 2286, 'phone' => '57718180', 'fax' => '57718181', 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 236, 'airport_id' => 2319, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.ci.sierra-vista.az.us/Airport/index.htm'
			), array(
				'id'      => 237, 'airport_id' => 2323, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.fairisle.org.uk/egef/index.htm'
			), array(
				'id'      => 238, 'airport_id' => 2331, 'phone' => '+49 (7229)  66-2309', 'fax' => NULL, 'email' => 'Info@baden-airpark.de',
				'website' => 'http://www.badenairpark.de'
			), array(
				'id' => 239, 'airport_id' => 2354, 'phone' => '3,90553E+11', 'fax' => '3,90553E+11', 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 240, 'airport_id' => 2369, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.flughafen-fmo.de'
			), array(
				'id'      => 241, 'airport_id' => 2374, 'phone' => NULL, 'fax' => NULL, 'email' => 'anam@anam.pt',
				'website' => 'http://www.anam.pt'
			), array(
				'id' => 242, 'airport_id' => 2379, 'phone' => '-906', 'fax' => '-591', 'email' => NULL, 'website' => NULL
			), array(
				'id'    => 243, 'airport_id' => 2383, 'phone' => '8 102 356 560', 'fax' => '8 102 333 065',
				'email' => 'info@bishopairport.org', 'website' => 'http://www.bishopairport.org'
			), array(
				'id'      => 244, 'airport_id' => 2388, 'phone' => '785-862-2362', 'fax' => '785-862-1830',
				'email'   => 'mtaa@mtaa-topeka.org', 'website' => 'http://www.mtaa-topeka.org/'
			), array(
				'id'      => 245, 'airport_id' => 2396, 'phone' => '61890226403', 'fax' => NULL, 'email' => 'info@forrestairort.com.au',
				'website' => 'http://www.forrestairport.com.au'
			), array(
				'id'      => 246, 'airport_id' => 2403, 'phone' => '+49 69 690 0', 'fax' => NULL, 'email' => 'info@fraport.de',
				'website' => 'http://www.airportcity-frankfurt.de'
			), array(
				'id'      => 247, 'airport_id' => 2414, 'phone' => '3,90543E+11', 'fax' => '3,90543E+11',
				'email'   => 'info@forli-airport.it', 'website' => 'http://www.forliairport.com'
			), array(
				'id'      => 248, 'airport_id' => 2423, 'phone' => '996 312 693 109', 'fax' => NULL, 'email' => 'info@airport.kg',
				'website' => 'http://www.airport.kg/'
			), array(
				'id'      => 249, 'airport_id' => 2432, 'phone' => '4 794 527 000', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.fortsmithairport.com'
			), array(
				'id'      => 250, 'airport_id' => 2452, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.fuk-ab.co.jp/english/frame_index.html'
			), array(
				'id'      => 251, 'airport_id' => 2487, 'phone' => '(+960) 313309', 'fax' => '(+960) 323504',
				'email'   => 'iasgan@island.com.mv', 'website' => 'http://www.airports.com.mv/domestic/gan.htm'
			), array(
				'id'      => 252, 'airport_id' => 2492, 'phone' => '-1867', 'fax' => '-2874', 'email' => 'info@garissaairport.com',
				'website' => NULL
			), array(
				'id' => 253, 'airport_id' => 2504, 'phone' => '(267) 391-4518', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'    => 254, 'airport_id' => 2543, 'phone' => '+48 (58) 348 11 54', 'fax' => '+48 (58) 345 22 83',
				'email' => 'airport@airport.gdansk.pl', 'website' => 'http://www.airport.gdansk.pl'
			), array(
				'id'    => 255, 'airport_id' => 2562, 'phone' => '+ 47 64 81 20 00', 'fax' => '+ 47 64 81 20 01',
				'email' => '- firmapost@osl.no', 'website' => 'http://www.osl.no'
			), array(
				'id'      => 256, 'airport_id' => 2607, 'phone' => '+55(21)3398-5050', 'fax' => '+55(21)3393-2288', 'email' => NULL,
				'website' => NULL
			), array(
				'id'      => 257, 'airport_id' => 2629, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.glasgowairport.com/'
			), array(
				'id'      => 258, 'airport_id' => 2641, 'phone' => '1 452 857 700', 'fax' => '1 452 714 593', 'email' => NULL,
				'website' => 'http://www.gloucestershireairport.co.uk/'
			), array(
				'id'      => 259, 'airport_id' => 2662, 'phone' => '864-242-4777', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.greenvilledowntownairport.com/'
			), array(
				'id'      => 260, 'airport_id' => 2665, 'phone' => '+34 922 87 30 00', 'fax' => NULL, 'email' => 'infogomera@aena.es',
				'website' => NULL
			), array(
				'id'      => 261, 'airport_id' => 2667, 'phone' => '+33 4 76 65 48 48', 'fax' => NULL,
				'email'   => 'info@grenoble-airport.com', 'website' => 'http://www.grenoble.aeroport.fr'
			), array(
				'id'    => 262, 'airport_id' => 2668, 'phone' => '(+1-473) 444-4101/4555/4150', 'fax' => '(+1-473) 444-4838',
				'email' => 'gaa@caribsurf.com', 'website' => NULL
			), array(
				'id'      => 263, 'airport_id' => 2680, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.aeroportodigenova.com/home/index.php'
			), array(
				'id'      => 264, 'airport_id' => 2688, 'phone' => '+7 (831) 256-7436', 'fax' => NULL, 'email' => 'info@airportnn.ru',
				'website' => 'http://www.airportnn.ru'
			), array(
				'id' => 265, 'airport_id' => 2689, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.geoport.us'
			), array(
				'id'      => 266, 'airport_id' => 2698, 'phone' => '4631941000', 'fax' => '4631941099',
				'email'   => 'luftfartsverket.got@lfv.se', 'website' => 'http://www.landvetter.lfv.se'
			), array(
				'id'      => 267, 'airport_id' => 2702, 'phone' => '35 961 860 410', 'fax' => '35 961 860 021', 'email' => NULL,
				'website' => NULL
			), array(
				'id'      => 268, 'airport_id' => 2715, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.co.brown.wi.us/airport/'
			), array(
				'id' => 269, 'airport_id' => 2722, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.flygri.com'
			), array(
				'id'      => 270, 'airport_id' => 2730, 'phone' => '-503097039', 'fax' => '+31 (0)50 309 62 76', 'email' => 'info@gae.nl',
				'website' => NULL
			), array(
				'id'      => 271, 'airport_id' => 2732, 'phone' => '3,90564E+11', 'fax' => '3,90564E+11',
				'email'   => 'info@grossetoairport.com', 'website' => 'http://www.grossetoairport.com'
			), array(
				'id'    => 272, 'airport_id' => 2734, 'phone' => '(+5511) 6445-2945', 'fax' => '(+5511) 6488-8476',
				'email' => 'infaero@infrearo.gov.br', 'website' => 'http://www.infraero.gov.br/usa/aero_prev_home.php?ai=217'
			), array(
				'id'    => 273, 'airport_id' => 2739, 'phone' => '+43(0)31629020', 'fax' => '+43(0)316290281',
				'email' => 'info@flughafen-graz.at', 'website' => 'http://www.flughafen-graz.at'
			), array(
				'id'    => 274, 'airport_id' => 2743, 'phone' => '+46 31 92 60 60', 'fax' => '+46 31 92 61 40',
				'email' => 'info@goteborgairport.se', 'website' => 'http://www.goteborgairport.se/eng.asp'
			), array(
				'id'      => 275, 'airport_id' => 2750, 'phone' => '864-848-6272', 'fax' => '864-848-6225', 'email' => NULL,
				'website' => 'http://www.gspairport.com'
			), array(
				'id'      => 276, 'airport_id' => 2772, 'phone' => '+502 2361 2144 or + 502 2332 6085', 'fax' => NULL, 'email' => NULL,
				'website' => NULL
			), array(
				'id'      => 277, 'airport_id' => 2792, 'phone' => NULL, 'fax' => NULL, 'email' => 'airport.int@mail.online.kz',
				'website' => 'http://www.atyrauairport.com'
			), array(
				'id'      => 278, 'airport_id' => 2796, 'phone' => '+41 22 717 71 11', 'fax' => '+41 22 798 43 77', 'email' => 'nfo@gva.ch',
				'website' => 'http://www.gva.ch'
			), array(
				'id'      => 279, 'airport_id' => 2812, 'phone' => '494 651 920 612', 'fax' => NULL, 'email' => 'service@flughafen-sylt.de',
				'website' => 'http://www.flughafen-sylt.de/'
			), array(
				'id'    => 280, 'airport_id' => 2815, 'phone' => '00 353 91 755569', 'fax' => '00353 91 752876',
				'email' => 'info@galwayairport.com', 'website' => 'http://www.galwayairport.com'
			), array(
				'id'      => 281, 'airport_id' => 2823, 'phone' => '(99412) 97-26-25', 'fax' => '(99412) 97-26-04', 'email' => NULL,
				'website' => 'http://www.airportbaku.com'
			), array(
				'id'      => 282, 'airport_id' => 2824, 'phone' => '593 4 2393798', 'fax' => NULL, 'email' => 'ccarbo@tagsa.aero',
				'website' => 'http://www.tagsa.aero'
			), array(
				'id'    => 283, 'airport_id' => 2832, 'phone' => '1+ (219) 949-9722', 'fax' => '1+ (219) 949-0573',
				'email' => 'information@gyymail.com', 'website' => 'http://www.garychicagoairport.com'
			), array(
				'id'      => 284, 'airport_id' => 2834, 'phone' => '35 621 561 301', 'fax' => '35 621 562 797', 'email' => NULL,
				'website' => NULL
			), array(
				'id'    => 285, 'airport_id' => 2841, 'phone' => '+46 (0) 035-18 26 00', 'fax' => '+46 (0) 035-18 26 09',
				'email' => 'halmstadflygplats@halmstad.se', 'website' => 'http://www.halmstadsflygplats.se/'
			), array(
				'id'    => 286, 'airport_id' => 2846, 'phone' => '495 119 770', 'fax' => '495 111 898',
				'email' => 'webmaster@hannover-airport.de', 'website' => 'http://www.hannover-airport.de/'
			), array(
				'id'      => 287, 'airport_id' => 2849, 'phone' => '+49 40/50 75 0', 'fax' => '+49 40/50 75 12 34', 'email' => NULL,
				'website' => 'http://www.hamburg-airport.de'
			), array(
				'id'      => 288, 'airport_id' => 2857, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.avinor.no/English/Airports/Haugesund_Airport,_Karmoy/'
			), array(
				'id'    => 289, 'airport_id' => 2859, 'phone' => '1437765283', 'fax' => '1437769246',
				'email' => 'hwest.airport@pembrokeshire.gov.uk', 'website' => 'http://Via Pembrokeshire County Council web page'
			), array(
				'id' => 290, 'airport_id' => 2888, 'phone' => '3012750377', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 291, 'airport_id' => 2904, 'phone' => '35 820 014 636', 'fax' => '+358 9 8277 3296', 'email' => NULL,
				'website' => 'http://www.helsinki-vantaa.fi/'
			), array(
				'id'      => 292, 'airport_id' => 2905, 'phone' => '+358 9 8277 4001', 'fax' => NULL, 'email' => 'airport.malmi@finavia.fi',
				'website' => 'http://www.finavia.fi/airport_helsinki-malmi'
			), array(
				'id'      => 293, 'airport_id' => 2908, 'phone' => '3,0281E+11', 'fax' => '3,0281E+11', 'email' => 'kahktl@otenet.gr',
				'website' => 'http://www.hcaa-eleng.gr/irak.htm'
			), array(
				'id'      => 294, 'airport_id' => 2916, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.iaa.gov.il/Rashat/en-US/Airports/Haifa/'
			), array(
				'id'      => 295, 'airport_id' => 2937, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.hiltonheadairport.com/'
			), array(
				'id'      => 296, 'airport_id' => 2939, 'phone' => '+49 (0)6543/509200', 'fax' => '+49 (0)6543/509204', 'email' => NULL,
				'website' => 'http://www.hahn-airport.de'
			), array(
				'id'      => 297, 'airport_id' => 2970, 'phone' => '85 221 887 111', 'fax' => '85 221 887 937',
				'email'   => 'kayd@hkairport.com', 'website' => 'http://www.hongkongairport.com/'
			), array(
				'id' => 298, 'airport_id' => 2977, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.lanseria.co.za'
			), array(
				'id'    => 299, 'airport_id' => 2981, 'phone' => '+46 (0)495-103 06', 'fax' => '+46 (0)495-101 30',
				'email' => 'hlf.flyg@work.utfors.se', 'website' => NULL
			), array(
				'id'      => 300, 'airport_id' => 2995, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.angleseyairport.com'
			), array(
				'id'      => 301, 'airport_id' => 2996, 'phone' => '+64 7 8489027', 'fax' => NULL, 'email' => 'wral@hamiltonairport.co.nz',
				'website' => 'http://www.hamiltonairport.co.nz/'
			), array(
				'id'    => 302, 'airport_id' => 3011, 'phone' => '81 (0) 476 322 802', 'fax' => '81  (0)476 301 571',
				'email' => 'naa1@naa.go.jp', 'website' => 'http://www.tokyo-airport-bldg.co.jp/'
			), array(
				'id'      => 303, 'airport_id' => 3017, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.honoluluairport.com'
			), array(
				'id'      => 304, 'airport_id' => 3022, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.laux.org/flyin/'
			), array(
				'id'      => 305, 'airport_id' => 3030, 'phone' => '+53 24 425271, 423934', 'fax' => '+53 24 468087', 'email' => NULL,
				'website' => NULL
			), array(
				'id'      => 306, 'airport_id' => 3036, 'phone' => '605-353-8516', 'fax' => '605-353-8517', 'email' => NULL,
				'website' => 'http://Huron Regional Airport'
			), array(
				'id'      => 307, 'airport_id' => 3065, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.flythevalley.com/'
			), array(
				'id'    => 308, 'airport_id' => 3087, 'phone' => '+7 (3022) 40-01-09, 41-18-87', 'fax' => '+7 (3022) 41-18-78',
				'email' => NULL, 'website' => 'http://www.aerochita.ru'
			), array(
				'id' => 309, 'airport_id' => 3091, 'phone' => '(775) 945-3897', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 310, 'airport_id' => 3122, 'phone' => '1 652 688 456', 'fax' => NULL,
				'email'   => 'enquiries@humbersideairport.com', 'website' => 'http://www.humberside-airport.co.uk'
			), array(
				'id'      => 311, 'airport_id' => 3135, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.hayward-ca.gov/webware/Default.aspx?Category=23&t=-1'
			), array(
				'id'      => 312, 'airport_id' => 3139, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.airnav.com/airport/KHWO'
			), array(
				'id'      => 313, 'airport_id' => 3159, 'phone' => '17 035 722 700', 'fax' => '17 035 726 017', 'email' => NULL,
				'website' => 'http://www.metwashairports.com/Dulles/'
			), array(
				'id'    => 314, 'airport_id' => 3161, 'phone' => '+1 (1)281 233-3000', 'fax' => '+1 (1)281 233-3000',
				'email' => 'tom.bartlett@cityofhouston.net', 'website' => 'http://www.houstonairportsystem.org'
			), array(
				'id'    => 315, 'airport_id' => 3162, 'phone' => '2,13029E+11', 'fax' => '2,13029E+11',
				'email' => 'aeroport-iam@egsa-alger.com', 'website' => 'http://www.egsa-alger.com/index.php?id=89'
			), array(
				'id'      => 316, 'airport_id' => 3165, 'phone' => '+7 (4852) 43-18-09', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://tunoshna.com'
			), array(
				'id' => 317, 'airport_id' => 3166, 'phone' => '232 278 510', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 318, 'airport_id' => 3179, 'phone' => '82-1577-2600', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.airport.or.kr/eng/airport/'
			), array(
				'id'    => 319, 'airport_id' => 3199, 'phone' => '641.648.3191', 'fax' => '641.648.5794',
				'email' => 'fourwindsaviation@prairieinet.net', 'website' => 'http://www.cityofiowafalls.com/airport.asp'
			), array(
				'id' => 320, 'airport_id' => 3229, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.izhavia.udm.ru'
			), array(
				'id'      => 321, 'airport_id' => 3239, 'phone' => '(3952) 266-222', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://iktport.ru'
			), array(
				'id'      => 322, 'airport_id' => 3276, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.indianapolisairport.com'
			), array(
				'id'      => 323, 'airport_id' => 3281, 'phone' => '381 18 585858', 'fax' => NULL, 'email' => 'iniport@airportnis.co.yu',
				'website' => 'http://www.airportnis.co.yu'
			), array(
				'id'    => 324, 'airport_id' => 3286, 'phone' => '+43(0)512225250', 'fax' => '+43(0)51222525102',
				'email' => 'info@innsbruck-airport.com', 'website' => 'http://www.innsbruck-airport.com'
			), array(
				'id'      => 325, 'airport_id' => 3293, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.hial.co.uk/inverness-airport.html'
			), array(
				'id'      => 326, 'airport_id' => 3300, 'phone' => '441 624 821 600', 'fax' => '441 624 821 611', 'email' => NULL,
				'website' => 'http://www.iom-airport.com'
			), array(
				'id' => 327, 'airport_id' => 3304, 'phone' => '+55(73)32317629', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 328, 'airport_id' => 3336, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.islamabadairport.com.pk/'
			), array(
				'id'    => 329, 'airport_id' => 3346, 'phone' => '(407) 847-4600', 'fax' => '(407) 847-8399',
				'email' => 'airport@kissimmee.org', 'website' => 'http://www.kissimmeeairport.com'
			), array(
				'id'    => 330, 'airport_id' => 3352, 'phone' => '+90 212 465 55 55', 'fax' => '+ 90 212 465 50 50',
				'email' => 'info@tav.aero', 'website' => 'http://www.ataturkairport.com'
			), array(
				'id'      => 331, 'airport_id' => 3357, 'phone' => '607-257-0456', 'fax' => NULL, 'email' => 'airport@FlyIthaca.com',
				'website' => 'http://www.flyithaca.com/'
			), array(
				'id'      => 332, 'airport_id' => 3360, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.osaka-airport.co.jp/'
			), array(
				'id'      => 333, 'airport_id' => 3371, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.invercargillairport.co.nz/'
			), array(
				'id'      => 334, 'airport_id' => 3387, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://mangaloreairport.com'
			), array(
				'id'      => 335, 'airport_id' => 3406, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.inyokernairport.com/'
			), array(
				'id'      => 336, 'airport_id' => 3407, 'phone' => NULL, 'fax' => NULL, 'email' => 'izoap-bld@iap.san-in-tabi.net',
				'website' => 'http://www.san-in-tabi.net/izoap-bid/'
			), array(
				'id'    => 337, 'airport_id' => 3412, 'phone' => '+61 8 9414 9400', 'fax' => '+61 8 9417 3777',
				'email' => 'jah@jandakotairport.com.au', 'website' => 'http://www.jandakotairport.com.au'
			), array(
				'id' => 338, 'airport_id' => 3422, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.jmaa.com'
			), array(
				'id'      => 339, 'airport_id' => 3431, 'phone' => '+1 904 741-4902', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.jaa.aero'
			), array(
				'id' => 340, 'airport_id' => 3458, 'phone' => '91-291-512530', 'fax' => '91-291-510840', 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 341, 'airport_id' => 3474, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.jerseyairport.com/'
			), array(
				'id' => 342, 'airport_id' => 3486, 'phone' => '+299 92 14 64', 'fax' => '+299 92 15 74', 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 343, 'airport_id' => 3505, 'phone' => NULL, 'fax' => NULL, 'email' => 'kairtl@otenet.gr',
				'website' => 'http://www.hcaa-eleng.gr/ikaria.htm'
			), array(
				'id'      => 344, 'airport_id' => 3518, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.hcaa-eleng.gr/chios.htm'
			), array(
				'id'      => 345, 'airport_id' => 3552, 'phone' => '302 285 023 969', 'fax' => '302 285 023 969',
				'email'   => 'kanxtl@otenet.gr', 'website' => 'http://www.hcaa-eleng.gr/naxos.htm'
			), array(
				'id' => 346, 'airport_id' => 3558, 'phone' => '+55(47)467100', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 347, 'airport_id' => 3589, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.hcaa-eleng.gr/skiathos.htm'
			), array(
				'id' => 348, 'airport_id' => 3601, 'phone' => '(064)3631-2266', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 349, 'airport_id' => 3603, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.hcaa-eleng.gr/santor.htm'
			), array(
				'id'      => 350, 'airport_id' => 3604, 'phone' => '+30 2 436 1410', 'fax' => '+30 2 436 1410', 'email' => NULL,
				'website' => NULL
			), array(
				'id'      => 351, 'airport_id' => 3620, 'phone' => '908-526-2822', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.centraljerseyairport.com/'
			), array(
				'id' => 352, 'airport_id' => 3653, 'phone' => '955951018', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 353, 'airport_id' => 3672, 'phone' => '(+380 44) 490 47 77', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.airport-borispol.kiev.ua/'
			), array(
				'id'    => 354, 'airport_id' => 3701, 'phone' => '+61 (08) 8956 7474', 'fax' => '+61 (08) 8956 7468',
				'email' => 'info@kingscreekstation.com.au', 'website' => 'http://www.kingscreekstation.com.au'
			), array(
				'id'      => 355, 'airport_id' => 3734, 'phone' => '-671', 'fax' => '-681', 'email' => NULL,
				'website' => 'http://www.keflavikairport.com'
			), array(
				'id'    => 356, 'airport_id' => 3738, 'phone' => '+7 (384-2) 390-090, 390-139 ', 'fax' => '+7 (384-2) 390-292',
				'email' => NULL, 'website' => 'http://airkem.ru'
			), array(
				'id'    => 357, 'airport_id' => 3740, 'phone' => '+49 (431) 32 91 90', 'fax' => '+49 (431) 32 36 21',
				'email' => 'info@airport-kiel.de', 'website' => 'http://www.airport-kiel.de'
			), array(
				'id'      => 358, 'airport_id' => 3761, 'phone' => '885 532 015', 'fax' => '885 532 885', 'email' => NULL,
				'website' => 'http://www.kangarooisland.sa.gov.au/site/page.cfm?u=213/site/page.cfm?u=213'
			), array(
				'id'      => 359, 'airport_id' => 3762, 'phone' => '+7 (4012) 700–800; 71-95-77', 'fax' => NULL,
				'email'   => 'info@kgdairport.ru', 'website' => 'http://www.airport-kaliningrad.ru'
			), array(
				'id'    => 360, 'airport_id' => 3764, 'phone' => '+7 (7212) 42-85-42', 'fax' => '+7 (7212) 74-55-70',
				'email' => 'info@karaganda-airport.com', 'website' => 'http://www.karaganda-airport.com'
			), array(
				'id'      => 361, 'airport_id' => 3776, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.hcaa-eleng.gr/kos.htm'
			), array(
				'id'      => 362, 'airport_id' => 3787, 'phone' => '-7812', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.kia.gov.tw/english/e_index.asp'
			), array(
				'id'      => 363, 'airport_id' => 3788, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.karachiairport.com'
			), array(
				'id'    => 364, 'airport_id' => 3799, 'phone' => '+7 (4212) 26-35-30', 'fax' => '+7 (4212) 26-35-30',
				'email' => 'office@airkhv.ru', 'website' => 'http://www.airkhv.ru'
			), array(
				'id'    => 365, 'airport_id' => 3806, 'phone' => '+46 (0)44-238800', 'fax' => '+46 (0)44-238892',
				'email' => 'info@kidairport.com', 'website' => 'http://www.kidairport.com'
			), array(
				'id'    => 366, 'airport_id' => 3820, 'phone' => '++353 (0) 66 9764644', 'fax' => '++353 (0) 66 9764134',
				'email' => 'info@kerryairport.ie', 'website' => 'http://www.kerryairport.ie/'
			), array(
				'id'      => 367, 'airport_id' => 3824, 'phone' => NULL, 'fax' => NULL, 'email' => 'support@airport.md',
				'website' => 'http://www.airport.md'
			), array(
				'id'      => 368, 'airport_id' => 3826, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.kansai-airport.or.jp'
			), array(
				'id'      => 369, 'airport_id' => 3829, 'phone' => '8 (391) 2-555-999', 'fax' => NULL, 'email' => 'office@kja.aero',
				'website' => 'http://www.yemelyanovo.ru'
			), array(
				'id'      => 370, 'airport_id' => 3837, 'phone' => '0064 09 407 6133', 'fax' => NULL, 'email' => 'airports@fnhl.co.nz',
				'website' => 'http://www.kerikeri-airport.co.nz'
			), array(
				'id'      => 371, 'airport_id' => 3842, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.kitakyu-air.co.jp/'
			), array(
				'id'    => 372, 'airport_id' => 3871, 'phone' => '+46 (0)480 587 00', 'fax' => '+46 (0)480 587 81',
				'email' => 'kalmar.flygplats@ifv.se', 'website' => 'http://www.kalmarairport.com'
			), array(
				'id'    => 373, 'airport_id' => 3874, 'phone' => '+43(0)463415000', 'fax' => '+43(0)46341500236',
				'email' => 'office@klagenfurt-airport.at', 'website' => 'http://www.klagenfurt-airport.com'
			), array(
				'id'      => 374, 'airport_id' => 3875, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.airport-k-vary.cz/'
			), array(
				'id'      => 375, 'airport_id' => 3877, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.hcaa-eleng.gr/kalam.htm'
			), array(
				'id'      => 376, 'airport_id' => 3898, 'phone' => '233-51-22969', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.gcaa.com.gh/kumasi_airport2.htm'
			), array(
				'id' => 377, 'airport_id' => 3905, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://g'
			), array(
				'id'      => 378, 'airport_id' => 3941, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.ilmailulaitos.fi/airport_kruunupyy'
			), array(
				'id' => 379, 'airport_id' => 3959, 'phone' => '907-642-3844', 'fax' => '907-642-3221', 'email' => NULL, 'website' => NULL
			), array(
				'id'    => 380, 'airport_id' => 3989, 'phone' => '+48 12 2855120', 'fax' => '+48 12 4117977',
				'email' => 'lotnisko@lotnisko-balice.pl', 'website' => 'http://www.lotnisko-balice.pl/'
			), array(
				'id'      => 381, 'airport_id' => 3992, 'phone' => '+46 (0)980 121 90', 'fax' => '+46 (0)980 177 82', 'email' => NULL,
				'website' => 'http://www.lfv.se/templates/LFV_AirportStartPage____2187.aspx'
			), array(
				'id'      => 382, 'airport_id' => 3994, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.karup-airport.dk/'
			), array(
				'id'    => 383, 'airport_id' => 4007, 'phone' => '+421 (0) 55 6832-123', 'fax' => '+421 (0) 55 6832-202',
				'email' => 'sekretariat@airportkosice.sk', 'website' => 'http://www.airportkosice.sk/'
			), array(
				'id'      => 384, 'airport_id' => 4008, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.lfv.se/templates/LFV_AirportStartPage____4490.aspx'
			), array(
				'id'      => 385, 'airport_id' => 4010, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.flughafenkassel.de'
			), array(
				'id'      => 386, 'airport_id' => 4025, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.avinor.no/norsk/lufthavner/kristiansund_lufthavn,_kvernberget'
			), array(
				'id'      => 387, 'airport_id' => 4042, 'phone' => NULL, 'fax' => NULL, 'email' => 'planstat@tiairport.com',
				'website' => 'http://www.tiairport.com.np'
			), array(
				'id'      => 388, 'airport_id' => 4049, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.finavia.fi/airport_kittila'
			), array(
				'id'    => 389, 'airport_id' => 4052, 'phone' => '0048 32 39 27 200', 'fax' => '0048 32 39 27 376',
				'email' => 'gtl@gtl.com.pl', 'website' => 'http://www.gtl.com.pl'
			), array(
				'id'    => 390, 'airport_id' => 4060, 'phone' => '+7 (846) 996 55 16, 996 53 22, 996 55 55', 'fax' => '+7 (846) 996 51 66',
				'email' => 'airport@samara.ru', 'website' => 'http://www.airport.samara.ru'
			), array(
				'id'      => 391, 'airport_id' => 4063, 'phone' => '+ 64 9 422 8880', 'fax' => '+ 64 9 422 8722',
				'email'   => 'mail@kawau.co.nz', 'website' => NULL
			), array(
				'id'    => 392, 'airport_id' => 4066, 'phone' => '60 387 762 000', 'fax' => NULL,
				'email' => 'publicrelation@malaysiaairports.com.my', 'website' => 'http://www.klia.com.my/'
			), array(
				'id'      => 393, 'airport_id' => 4075, 'phone' => '911 902 265 037', 'fax' => '911 902 265 603', 'email' => NULL,
				'website' => NULL
			), array(
				'id'      => 394, 'airport_id' => 4081, 'phone' => '3,02591E+11', 'fax' => '3,02591E+11', 'email' => 'kakvatl@otenet.gr',
				'website' => NULL
			), array(
				'id'      => 395, 'airport_id' => 4087, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.kolaklub.com/aero/'
			), array(
				'id'      => 396, 'airport_id' => 4098, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.kuwait-airport.com.kw/'
			), array(
				'id'      => 397, 'airport_id' => 4165, 'phone' => '(702) 261-5211', 'fax' => '(702) 597-9553', 'email' => NULL,
				'website' => 'http://www.mccarran.com'
			), array(
				'id'      => 398, 'airport_id' => 4170, 'phone' => '(310) 646-5252', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.lawa.org/lax'
			), array(
				'id'      => 399, 'airport_id' => 4173, 'phone' => '+44 (0) 113 250 9696', 'fax' => '+44 (0) 113 250 5426', 'email' => NULL,
				'website' => 'http://www.lbia.co.uk'
			), array(
				'id' => 400, 'airport_id' => 4174, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.flylia.com/'
			), array(
				'id'      => 401, 'airport_id' => 4175, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.flughafen-luebeck.de/1024/english/index.htm'
			), array(
				'id' => 402, 'airport_id' => 4199, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.larnaka .com'
			), array(
				'id'    => 403, 'airport_id' => 4208, 'phone' => '+48 42 683 52 00', 'fax' => '+48 42 688 83 84',
				'email' => 'handling@airport.lodz.pl', 'website' => 'http://www.airport.lodz.pl/'
			), array(
				'id'      => 404, 'airport_id' => 4209, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.rickenbacker.org/home.asp'
			), array(
				'id'    => 405, 'airport_id' => 4217, 'phone' => '390 583 936 062', 'fax' => '390 583 933 277',
				'email' => 'INFO@AEROPORTOLUCCA.IT', 'website' => 'http://WWW.AEROPORTOLUCCA.IT'
			), array(
				'id'      => 406, 'airport_id' => 4219, 'phone' => '2076460000', 'fax' => '2075111040',
				'email'   => 'csc1@londoncityairport.com', 'website' => 'http://www.londoncityairport.com/'
			), array(
				'id'      => 407, 'airport_id' => 4237, 'phone' => '+44 (0) 28 7181 0784', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.cityofderryairport.com'
			), array(
				'id'      => 408, 'airport_id' => 4242, 'phone' => '(812) 704-38-22, 704-34-44', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.pulkovoairport.ru'
			), array(
				'id'      => 409, 'airport_id' => 4248, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.leipzig-halle-airport.de'
			), array(
				'id'      => 410, 'airport_id' => 4252, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.aena.es/csee/Satellite?cid=1048519503210&pagename=Estandar%2FPage%2FAeropuerto&SMO=-1&SiteName=LELN&c=Page&MO=0'
			), array(
				'id'      => 411, 'airport_id' => 4255, 'phone' => '+44 (0) 1736 788771', 'fax' => '+44 (0) 1736 787651',
				'email'   => 'flyingschool@islesofscilly-travel.co.uk',
				'website' => 'http://www.islesofscilly-travel.co.uk/leq/scenic_flights.htm'
			), array(
				'id'      => 412, 'airport_id' => 4263, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.schiphol.nl/lelystad-airport'
			), array(
				'id'    => 413, 'airport_id' => 4281, 'phone' => '+32 (0)4 234 84 11', 'fax' => '+32 (0)4 234 84 04',
				'email' => 'liegeairport@sab.be', 'website' => 'http://www.liegeairport.com/'
			), array(
				'id'      => 414, 'airport_id' => 4295, 'phone' => '8 700 002 468', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.gatwickairport.com/'
			), array(
				'id'    => 415, 'airport_id' => 4299, 'phone' => '0049 (0) 7821-0', 'fax' => '0046 (0) 7821-110',
				'email' => 'info@blackforest-airport.com', 'website' => 'http://www.blackforest-airport.com'
			), array(
				'id'      => 416, 'airport_id' => 4301, 'phone' => '9248792', 'fax' => '9248794', 'email' => 'gmmiscaa@fascom.com',
				'website' => 'http://www.lahore-airport.com/'
			), array(
				'id'    => 417, 'airport_id' => 4307, 'phone' => '+44 (0)8700 000698', 'fax' => '+44 (0)20 8745 4290',
				'email' => 'lhr3feedback@baa.com', 'website' => 'http://www.heathrowairport.com'
			), array(
				'id' => 418, 'airport_id' => 4311, 'phone' => '-8969005', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 419, 'airport_id' => 4318, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.aeroportlimoges.com'
			), array(
				'id'    => 420, 'airport_id' => 4323, 'phone' => '+33 (0)8 91 67 32 10', 'fax' => '+33 (0)3 20 49 68 10',
				'email' => 'information.aeroport@lille.cci.fr', 'website' => 'http://www.lille.aeroport.fr/'
			), array(
				'id'      => 421, 'airport_id' => 4325, 'phone' => '3,90275E+11', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.sea-aeroportimilano.it/'
			), array(
				'id'      => 422, 'airport_id' => 4329, 'phone' => '+506 668 1117 - flight info.', 'fax' => NULL, 'email' => NULL,
				'website' => NULL
			), array(
				'id'    => 423, 'airport_id' => 4330, 'phone' => '351 218 413 500', 'fax' => '351 218 404 231',
				'email' => 'lisbon.airport@ana-aeroportos.pt', 'website' => 'http://www.ana.pt'
			), array(
				'id'      => 424, 'airport_id' => 4331, 'phone' => '+1 (501) 372 3439', 'fax' => '+1 (501) 372 0612', 'email' => NULL,
				'website' => 'http://www.lrn-airport.com/'
			), array(
				'id' => 425, 'airport_id' => 4334, 'phone' => '+95 83 21500', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'    => 426, 'airport_id' => 4342, 'phone' => '+386 4 20 61 000', 'fax' => '+ 386 4 20 21 220',
				'email' => 'info@lju-airport.si', 'website' => 'http://www.lju-airport.si/'
			), array(
				'id' => 427, 'airport_id' => 4347, 'phone' => '+1 (425) 486 1257', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 428, 'airport_id' => 4352, 'phone' => '47-78-46-50-01', 'fax' => '47-78-46-17-47', 'email' => NULL,
				'website' => NULL
			), array(
				'id'      => 429, 'airport_id' => 4363, 'phone' => '-245774', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.lfv.se/templates/LFV_AirportStartPage____3595.aspx'
			), array(
				'id'      => 430, 'airport_id' => 4398, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.lantanaairport.com/'
			), array(
				'id'    => 431, 'airport_id' => 4419, 'phone' => '+43(0)72216000', 'fax' => '+43(0)7221600100',
				'email' => 'info@linz-airport.com', 'website' => 'http://www.linz-airport.at'
			), array(
				'id'      => 432, 'airport_id' => 4443, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.sabsa.aero/aeropuertointernacionalelalto'
			), array(
				'id'      => 433, 'airport_id' => 4451, 'phone' => '(0742)26-48-20, 25-01-06', 'fax' => '(0742)72-00-95', 'email' => NULL,
				'website' => NULL
			), array(
				'id'      => 434, 'airport_id' => 4452, 'phone' => '+44 (0) 870 129 8484', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.liverpooljohnlennonairport.com'
			), array(
				'id'    => 435, 'airport_id' => 4462, 'phone' => '+371 340-75-92', 'fax' => '+371 340-75-92',
				'email' => 'info@liepaja-airport.lv', 'website' => 'http://www.liepaja-airport.lv'
			), array(
				'id' => 436, 'airport_id' => 4479, 'phone' => '809 813-9305', 'fax' => '809 689-1548', 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 437, 'airport_id' => 4495, 'phone' => '+44(0) 1950 461000', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.hial.co.uk/sumburgh-airport.html'
			), array(
				'id'      => 438, 'airport_id' => 4506, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.launcestonairport.com.au'
			), array(
				'id' => 439, 'airport_id' => 4508, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.nellis.af.mil/'
			), array(
				'id'      => 440, 'airport_id' => 4524, 'phone' => '+44 (0) 1582 405 100', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.london-luton.co.uk/'
			), array(
				'id'      => 441, 'airport_id' => 4530, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.st-tropez-airport.com/'
			), array(
				'id' => 442, 'airport_id' => 4539, 'phone' => '6 238 566 376', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'    => 443, 'airport_id' => 4540, 'phone' => '+41 91 610 16 16', 'fax' => '+41 91 610 16 20',
				'email' => 'aau@lugano-airport.ch', 'website' => 'http://www.lugano-airport.ch'
			), array(
				'id' => 444, 'airport_id' => 4541, 'phone' => '9,11613E+11', 'fax' => '9,11613E+11', 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 445, 'airport_id' => 4557, 'phone' => '+352 2464 1', 'fax' => '35 224 642 464',
				'email'   => 'mail@lux-Airport.lu', 'website' => 'http://www.lux-airport.lu'
			), array(
				'id'      => 446, 'airport_id' => 4586, 'phone' => '(0891) 624 6011', 'fax' => '(0891) 618 2110',
				'email'   => 'mhxz@lsairport.cn', 'website' => 'http://www.lsairport.cn/web/ui1/index.asp'
			), array(
				'id'      => 447, 'airport_id' => 4591, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.hcaa-eleng.gr/limnos.htm'
			), array(
				'id'      => 448, 'airport_id' => 4605, 'phone' => '+ 47 79 02 38 00', 'fax' => '+ 47 79 02 38 01', 'email' => NULL,
				'website' => 'http://www.avinor.no/English/Airports/Svalbard_Airport/'
			), array(
				'id'      => 449, 'airport_id' => 4606, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.lyon.aeroport.fr'
			), array(
				'id'      => 450, 'airport_id' => 4618, 'phone' => '044-2340551', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://chennaiairport.com'
			), array(
				'id' => 451, 'airport_id' => 4621, 'phone' => '00 34 902 404 704', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id' => 452, 'airport_id' => 4623, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.flymaf.com/'
			), array(
				'id'      => 453, 'airport_id' => 4631, 'phone' => '+44 (0) 161 489 3000', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.manchesterairport.co.uk'
			), array(
				'id'      => 454, 'airport_id' => 4644, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.kenyaairports.co.ke/mombasa/indexMoi.htm'
			), array(
				'id'      => 455, 'airport_id' => 4653, 'phone' => '(876) 952-3124', 'fax' => '(876) 940-6591', 'email' => NULL,
				'website' => 'http://www.mbjairport.com'
			), array(
				'id'      => 456, 'airport_id' => 4666, 'phone' => '395 873 666', 'fax' => '395 871 782', 'email' => NULL,
				'website' => 'http://www.moorabbinairport.com.au'
			), array(
				'id'    => 457, 'airport_id' => 4667, 'phone' => '+386 (0)2 629 11 75', 'fax' => '+386 (0)2 629 12 53',
				'email' => 'info@maribor-airport.si', 'website' => 'http://www.maribor-airport.si'
			), array(
				'id' => 458, 'airport_id' => 4678, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.flykci.com/'
			), array(
				'id'      => 459, 'airport_id' => 4686, 'phone' => '+36 46 509808', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.borsodirepuloklub.hu'
			), array(
				'id' => 460, 'airport_id' => 4715, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.flyhia.com'
			), array(
				'id' => 461, 'airport_id' => 4718, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.flychicago.com'
			), array(
				'id'      => 462, 'airport_id' => 4733, 'phone' => '+61 3 9297 1600', 'fax' => '+61 3 9297 1886', 'email' => NULL,
				'website' => 'http://www.melair.com.au/'
			), array(
				'id'      => 463, 'airport_id' => 4734, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.memphisairport.org/'
			), array(
				'id'    => 464, 'airport_id' => 4745, 'phone' => '2482-2424 and 2482-2400', 'fax' => NULL,
				'email' => 'comentarios@aicm.com.mx', 'website' => 'http://www.aicm.com.mx'
			), array(
				'id'    => 465, 'airport_id' => 4751, 'phone' => '419-522-2191', 'fax' => '419-522-0883',
				'email' => 'lahmap@ci.mansfield.oh.us', 'website' => 'http://www.ci.mansfield.oh.us/airport/airport_atglance.htm'
			), array(
				'id'      => 466, 'airport_id' => 4760, 'phone' => '853 861 188', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.macau-airport.gov.mo/en/index2.php'
			), array(
				'id'      => 467, 'airport_id' => 4773, 'phone' => '(505) 233-1624', 'fax' => '(505) 263-1072', 'email' => NULL,
				'website' => 'http://www.eaai.com.ni'
			), array(
				'id'    => 468, 'airport_id' => 4778, 'phone' => '55-44-3266-3838', 'fax' => '55-44-3266-3838',
				'email' => 'aeroportomaringa@aeroportomaringa.com.br', 'website' => 'http://www.aeroportomaringa.com.br'
			), array(
				'id'      => 469, 'airport_id' => 4805, 'phone' => NULL, 'fax' => NULL, 'email' => 'info@flugplatz-mannheim.de',
				'website' => 'http://www.airport-mannheim.de/'
			), array(
				'id'      => 470, 'airport_id' => 4815, 'phone' => '+358 18 634 411', 'fax' => '+358 18 634 499',
				'email'   => 'efma@finavia.fi', 'website' => 'http://www.finavia.fi/flygplats_mariehamn'
			), array(
				'id'    => 471, 'airport_id' => 4825, 'phone' => '(305) 876-7000', 'fax' => NULL,
				'email' => 'customerservice@miami-airport.com', 'website' => 'http://www.miami-airport.com'
			), array(
				'id'    => 472, 'airport_id' => 4841, 'phone' => '+216 (0) 73 520 000', 'fax' => '+216 (0)73 520 318',
				'email' => 'oaca.aimhb@planet.tn', 'website' => 'http://www.oaca.nat.tn'
			), array(
				'id'      => 473, 'airport_id' => 4869, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.hcaa-eleng.gr/mitilin.htm'
			), array(
				'id'      => 474, 'airport_id' => 4880, 'phone' => '414-747-5300', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.mitchellairport.com'
			), array(
				'id'      => 475, 'airport_id' => 4886, 'phone' => '731-423-0995', 'fax' => '731-423-0997', 'email' => 'jmcaa@aeneas.net',
				'website' => 'http://www.mklairport.tn.org'
			), array(
				'id'      => 476, 'airport_id' => 4901, 'phone' => '35 621 249 600', 'fax' => '35 621 249 563',
				'email'   => 'mia@maltairport.com', 'website' => 'http://www.maltairport.com'
			), array(
				'id'      => 477, 'airport_id' => 4902, 'phone' => '321-723-6227', 'fax' => '321-723-1194', 'email' => 'info@mlbair.com',
				'website' => 'http://www.mlbair.com'
			), array(
				'id'      => 478, 'airport_id' => 4905, 'phone' => '(960)338800', 'fax' => '(960)331515', 'email' => 'info@maclnet.net',
				'website' => 'http://www.airports.com.mv'
			), array(
				'id'      => 479, 'airport_id' => 4908, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.euroairport.com'
			), array(
				'id'      => 480, 'airport_id' => 4930, 'phone' => '441 325 332 811', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.durhamteesvalleyairport.com/'
			), array(
				'id' => 481, 'airport_id' => 4936, 'phone' => NULL, 'fax' => NULL, 'email' => 'airport@online.ru', 'website' => NULL
			), array(
				'id' => 482, 'airport_id' => 4942, 'phone' => '2604450459', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 483, 'airport_id' => 4949, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.lfv.se/templates/LFV_AirportStartPage____4125.aspx'
			), array(
				'id' => 484, 'airport_id' => 4981, 'phone' => '13 215 361 549', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'    => 485, 'airport_id' => 4989, 'phone' => '+47 71 21 47 60', 'fax' => '+47 71 21 47 75',
				'email' => 'admin@molde-airport.com', 'website' => 'http://www.molde-airport.com/Eng/index.html'
			), array(
				'id'    => 486, 'airport_id' => 5014, 'phone' => '+33 (0) 4 67 20 85 00', 'fax' => '+33 (0) 4 67 20 85 85',
				'email' => 'info.aeroport@montpellier.aeroport.fr', 'website' => 'http://www.montpellier.aeroport.fr/'
			), array(
				'id' => 487, 'airport_id' => 5017, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.mpoairport.com'
			), array(
				'id'      => 488, 'airport_id' => 5044, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.kmiairport.co.za/Default.aspx'
			), array(
				'id'    => 489, 'airport_id' => 5053, 'phone' => '(615) 459-2651', 'fax' => '(615) 459-1030',
				'email' => 'johnb@smyrnaairport.com', 'website' => NULL
			), array(
				'id'      => 490, 'airport_id' => 5073, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.marseille.aeroport.fr'
			), array(
				'id'      => 491, 'airport_id' => 5094, 'phone' => '608-246-3380', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.msnairport.com'
			), array(
				'id' => 492, 'airport_id' => 5096, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://mspairport.com'
			), array(
				'id'    => 493, 'airport_id' => 5100, 'phone' => '+ 31 – (0)43 – 358 9898', 'fax' => '+ 31 - (0)43 - 358 9988',
				'email' => 'info@maa.nl', 'website' => 'http://www.maa.nl'
			), array(
				'id'      => 494, 'airport_id' => 5134, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.munich-airport.de/'
			), array(
				'id' => 495, 'airport_id' => 5176, 'phone' => NULL, 'fax' => '+55 73 3292-2205', 'email' => NULL, 'website' => NULL
			), array(
				'id' => 496, 'airport_id' => 5186, 'phone' => '459232005', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id' => 497, 'airport_id' => 5196, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.mwadui.com'
			), array(
				'id'      => 498, 'airport_id' => 5223, 'phone' => '3,90275E+11', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.sea-aeroportimilano.it/'
			), array(
				'id' => 499, 'airport_id' => 5233, 'phone' => '(86) 0753-2242666', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 500, 'airport_id' => 5239, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.sandiego.gov/airports/index.shtml'
			), array(
				'id' => 501, 'airport_id' => 5249, 'phone' => '99352232472', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id' => 502, 'airport_id' => 5299, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.afl.com.fj'
			), array(
				'id'    => 503, 'airport_id' => 5318, 'phone' => '00254/(0)20825400', 'fax' => '00254/(0)20822078',
				'email' => 'marketing@kenyaairport.co.ke', 'website' => 'http://www.kenyaairport.co.ke'
			), array(
				'id'    => 504, 'airport_id' => 5329, 'phone' => '+44 (0)870 122 1488', 'fax' => NULL,
				'email' => 'enquiries@newcastleinternational.co.uk', 'website' => 'http://www.newcastleairport.com/'
			), array(
				'id'      => 505, 'airport_id' => 5359, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.sea-airport.de/'
			), array(
				'id'      => 506, 'airport_id' => 5379, 'phone' => '-17118', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://ningboguide.com/airport.html'
			), array(
				'id'      => 507, 'airport_id' => 5426, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.njiairport.com/English/e_index.htm'
			), array(
				'id'      => 508, 'airport_id' => 5429, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.nagoya-airport-bldg.co.jp/'
			), array(
				'id' => 509, 'airport_id' => 5443, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.nlk.nf'
			), array(
				'id' => 510, 'airport_id' => 5445, 'phone' => '( 01311) 43192', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 511, 'airport_id' => 5474, 'phone' => '3,53949E+11', 'fax' => NULL, 'email' => 'info@irelandwestairport.com',
				'website' => 'http://www.irelandwestairport.com'
			), array(
				'id'    => 512, 'airport_id' => 5519, 'phone' => '+49 (0) 28 37 / 66 61 11', 'fax' => '+49 (0) 28 37 / 66 70 60',
				'email' => 'terminalinfo@airport-weeze.de', 'website' => 'http://www.airport-weeze.de'
			), array(
				'id'      => 513, 'airport_id' => 5522, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.narita-airport.jp'
			), array(
				'id'      => 514, 'airport_id' => 5543, 'phone' => '+33 (0)2 40 84 81 52', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.nantes.aeroport.fr'
			), array(
				'id'    => 515, 'airport_id' => 5556, 'phone' => '+27 (0)14 552 1261', 'fax' => '+27 (0)14 552 1244',
				'email' => 'webmaster@acsa.co.za', 'website' => 'http://www.airports.co.za'
			), array(
				'id'    => 516, 'airport_id' => 5578, 'phone' => '(+99879) 539 3893, (+99879) 539 3540', 'fax' => NULL,
				'email' => 'info.nvi@uzairways.com', 'website' => 'http://www.navoi-airport.com'
			), array(
				'id'    => 517, 'airport_id' => 5587, 'phone' => '+44 (0)1603 411923', 'fax' => '+44 (0)1603 411923',
				'email' => 'flights@norwichinternational.com', 'website' => 'http://www.norwichairport.co.uk/'
			), array(
				'id' => 518, 'airport_id' => 5599, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.skavsta-air.se'
			), array(
				'id'      => 519, 'airport_id' => 5623, 'phone' => NULL, 'fax' => NULL, 'email' => 'oban.airport@argyll-bute.gov.uk',
				'website' => 'http://www.argyll-bute.gov.uk/newsroom/features/obanairport?a=3'
			), array(
				'id'      => 520, 'airport_id' => 5643, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.odense-lufthavn.dk/'
			), array(
				'id'      => 521, 'airport_id' => 5649, 'phone' => '39-35-49', 'fax' => NULL, 'email' => 'office@airport.odessa.ua',
				'website' => 'http://www.airport.od.ua'
			), array(
				'id' => 522, 'airport_id' => 5675, 'phone' => '+7 (8672) 50-50-29', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id' => 523, 'airport_id' => 5715, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.geasar.it/'
			), array(
				'id'      => 524, 'airport_id' => 5746, 'phone' => '+387 36 350 992', 'fax' => NULL, 'email' => 'mostar-airport@tel.net.ba',
				'website' => 'http://www.mostar-airport.ba'
			), array(
				'id'      => 525, 'airport_id' => 5747, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.oradea-online.ro/oradea/3/oradea_airport.htm'
			), array(
				'id' => 526, 'airport_id' => 5766, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.lawa.org/ont/'
			), array(
				'id'    => 527, 'airport_id' => 5781, 'phone' => '351 229 432 400', 'fax' => '351 229 484 597',
				'email' => 'oporto.airport@ana-aeroportos.pt', 'website' => 'http://www.ana.pt/portal/page/portal/ANA/AEROPORTO_PORTO/'
			), array(
				'id'      => 528, 'airport_id' => 5786, 'phone' => '+46 19 30 70 00', 'fax' => '+46 19 24 11 13', 'email' => NULL,
				'website' => 'http://www.orb-airport.se'
			), array(
				'id' => 529, 'airport_id' => 5788, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.ohare.com'
			), array(
				'id'      => 530, 'airport_id' => 5790, 'phone' => '757-857-3351', 'fax' => '757-857-3265',
				'email'   => 'info@norfolkairport.com', 'website' => 'http://www.norfolkairport.com/'
			), array(
				'id'    => 531, 'airport_id' => 5795, 'phone' => '+353 (0)21 4313131', 'fax' => '+353 (0)21 431 3442',
				'email' => 'marketing@corkairport.com', 'website' => 'http://www.corkairport.com'
			), array(
				'id' => 532, 'airport_id' => 5809, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.adp.fr'
			), array(
				'id'      => 533, 'airport_id' => 5817, 'phone' => NULL, 'fax' => NULL, 'email' => 'zlosijek-opc@os.t-com.hr',
				'website' => 'http://www.osijek-airport.hr'
			), array(
				'id'      => 534, 'airport_id' => 5818, 'phone' => '+46 (0)491-332 00', 'fax' => '+46 (0)491-640 22', 'email' => NULL,
				'website' => NULL
			), array(
				'id'      => 535, 'airport_id' => 5819, 'phone' => '4 764 812 000', 'fax' => '4 764 812 355',
				'email'   => 'more.traffic@osl.no', 'website' => 'http://www.osl.no'
			), array(
				'id'    => 536, 'airport_id' => 5823, 'phone' => '+420 59 747 1122', 'fax' => '+420 59 747 1121, 1123',
				'email' => 'handling@airport-ostrava.cz', 'website' => 'http://www.airport-ostrava.cz'
			), array(
				'id' => 537, 'airport_id' => 5824, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.airport.kg'
			), array(
				'id' => 538, 'airport_id' => 5825, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.ost.aero/'
			), array(
				'id' => 539, 'airport_id' => 5829, 'phone' => '4774217700', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'    => 540, 'airport_id' => 5842, 'phone' => '+40 21 204 1200', 'fax' => '+40 21 201 4990',
				'email' => 'otp@otp-airport.ro', 'website' => 'http://www.otp-airport.ro'
			), array(
				'id'      => 541, 'airport_id' => 5865, 'phone' => '(383) 216-92-30', 'fax' => '(383) 2169-169', 'email' => 'ap@ovbport.ru',
				'website' => 'http://www.tolmachevo.ru'
			), array(
				'id'    => 542, 'airport_id' => 5879, 'phone' => '441 865 844 260', 'fax' => '441 865 840 498',
				'email' => 'info@oxfordairport.co.uk', 'website' => 'http://www.oxfordairport.co.uk'
			), array(
				'id' => 543, 'airport_id' => 5892, 'phone' => '325-392-2030', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'    => 544, 'airport_id' => 5903, 'phone' => '492 955 770', 'fax' => '49 295 577 288',
				'email' => 'management@airport-pad.com', 'website' => 'http://www.edlp.de'
			), array(
				'id' => 545, 'airport_id' => 5917, 'phone' => '0030-2284091257', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id' => 546, 'airport_id' => 5918, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://patnaairport.com/'
			), array(
				'id'      => 547, 'airport_id' => 5932, 'phone' => '975 8 271347', 'fax' => '975 8 271909',
				'email'   => 'aviation@druknet.bt', 'website' => NULL
			), array(
				'id'      => 548, 'airport_id' => 5933, 'phone' => '(561) 471-7420', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.pbia.org'
			), array(
				'id' => 549, 'airport_id' => 5950, 'phone' => '445 339 096', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'    => 550, 'airport_id' => 5968, 'phone' => '609-921-3100', 'fax' => '609-921-1291',
				'email' => '39N@princetonairport.com', 'website' => 'http://www.princetonairport.com'
			), array(
				'id'      => 551, 'airport_id' => 5977, 'phone' => '+62 (0)751 819123', 'fax' => '+62 (0)751 819040', 'email' => NULL,
				'website' => NULL
			), array(
				'id'      => 552, 'airport_id' => 5983, 'phone' => '042 559777 - 042 559387', 'fax' => '42 559 389', 'email' => NULL,
				'website' => NULL
			), array(
				'id'    => 553, 'airport_id' => 5988, 'phone' => '+359 32/ 60 11 22', 'fax' => '+359 32/ 60 11 24',
				'email' => 'operations@plovdivairport.com', 'website' => 'http://www.plovdivairport.com/'
			), array(
				'id'    => 554, 'airport_id' => 5989, 'phone' => '(+1) 877 739 4636', 'fax' => NULL,
				'email' => 'PDXcustomerservice@PortofPortland.com', 'website' => 'http://www.flypdx.com/'
			), array(
				'id'      => 555, 'airport_id' => 5995, 'phone' => '+7 (342) 294-97-71', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.aviaperm.ru'
			), array(
				'id'      => 556, 'airport_id' => 5997, 'phone' => '39075592141', 'fax' => '3,90757E+11', 'email' => NULL,
				'website' => 'http://www.airport.umbria.it'
			), array(
				'id'      => 557, 'airport_id' => 6001, 'phone' => '010-64571666', 'fax' => NULL, 'email' => 'service@bcia.com.cn',
				'website' => 'http://www.bcia.com.cn'
			), array(
				'id'      => 558, 'airport_id' => 6004, 'phone' => '604-643 4411', 'fax' => '604-643 5339', 'email' => NULL,
				'website' => 'http://www.malaysiaairports.com.my'
			), array(
				'id'      => 559, 'airport_id' => 6007, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.perthairport.net.au'
			), array(
				'id' => 560, 'airport_id' => 6011, 'phone' => '923 036 909 744', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 561, 'airport_id' => 6033, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.pangkalpinang.go.id'
			), array(
				'id'      => 562, 'airport_id' => 6048, 'phone' => '757-877-0221', 'fax' => NULL, 'email' => 'admin@nnwairport.com',
				'website' => 'http://www.nnwairport.com/'
			), array(
				'id' => 563, 'airport_id' => 6054, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.phl.org'
			), array(
				'id'      => 564, 'airport_id' => 6064, 'phone' => '(602) 273-3300', 'fax' => '(602) 683-4084', 'email' => NULL,
				'website' => 'http://phoenix.gov/AVIATION/'
			), array(
				'id'      => 565, 'airport_id' => 6071, 'phone' => '+1 (1)727 535-7600', 'fax' => '+1 (1)727 536-3782', 'email' => NULL,
				'website' => 'http://www.stpete-clwairport.com'
			), array(
				'id'    => 566, 'airport_id' => 6076, 'phone' => '8 712 230 700', 'fax' => '1 292 511 010',
				'email' => 'sales@glasgowprestwick.com', 'website' => 'http://www.gpia.co.uk'
			), array(
				'id'    => 567, 'airport_id' => 6084, 'phone' => '+33 (0)5 49 30 04 40', 'fax' => '+33 (0)5 49 58 81 72',
				'email' => 'aeroport@poitiers.cci.fr', 'website' => 'http://www.poitiers.cci.fr/aeroport'
			), array(
				'id' => 568, 'airport_id' => 6115, 'phone' => '-2067', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 569, 'airport_id' => 6149, 'phone' => '16 612 667 602', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.lawa.org/pmd/welcomePMD.cfm'
			), array(
				'id'      => 570, 'airport_id' => 6151, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.aeroportoparma.it/'
			), array(
				'id'      => 571, 'airport_id' => 6159, 'phone' => '+39 091-7020111', 'fax' => '+39 091-7020394',
				'email'   => 'gesap@gesap.it', 'website' => 'http://www.aeroporto.palermo.it'
			), array(
				'id'      => 572, 'airport_id' => 6162, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.pnairport.co.nz'
			), array(
				'id'      => 573, 'airport_id' => 6177, 'phone' => NULL, 'fax' => NULL, 'email' => 'bureau@sca.com.kh',
				'website' => 'http://www.cambodia-airports.com'
			), array(
				'id'      => 574, 'airport_id' => 6181, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.pantelleriairport.it/'
			), array(
				'id'    => 575, 'airport_id' => 6185, 'phone' => '91-020- 26691495', 'fax' => '91-020-26685599',
				'email' => 'apdpun_aai@vsnl.net', 'website' => 'http://www.aai.aero/aai/main.htm'
			), array(
				'id'      => 576, 'airport_id' => 6211, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.piarcoairport.com'
			), array(
				'id' => 577, 'airport_id' => 6216, 'phone' => '+33 (0)1 303 103 82', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 578, 'airport_id' => 6218, 'phone' => '+48 061 849-22-61', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.airport-poznan.com.pl/pl/'
			), array(
				'id' => 579, 'airport_id' => 6220, 'phone' => '55+18-32229855', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id' => 580, 'airport_id' => 6223, 'phone' => '(638)383-6097', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id' => 581, 'airport_id' => 6228, 'phone' => '6221614281', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 582, 'airport_id' => 6238, 'phone' => '(689)866096', 'fax' => NULL, 'email' => 'nAgnieray@tahiti-aeroport.pf',
				'website' => 'http://www.tahiti-aeroport.pf/home.php'
			), array(
				'id' => 583, 'airport_id' => 6241, 'phone' => '1 857 644 252', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id' => 584, 'airport_id' => 6257, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.prg.aero'
			), array(
				'id'      => 585, 'airport_id' => 6264, 'phone' => '+381 0 38 5958159', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.airportpristina.com/'
			), array(
				'id'      => 586, 'airport_id' => 6277, 'phone' => '39050849111', 'fax' => '39050849216', 'email' => 'sat@pisa-airport.com',
				'website' => 'http://www.pisa-airport.com/'
			), array(
				'id' => 587, 'airport_id' => 6281, 'phone' => '7 875 577 753', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 588, 'airport_id' => 6291, 'phone' => NULL, 'fax' => NULL, 'email' => 'info@palmspringsairport.com',
				'website' => 'http://www.palmspringsairport.com/'
			), array(
				'id'      => 589, 'airport_id' => 6293, 'phone' => '3,90854E+11', 'fax' => '3,90854E+11',
				'email'   => 'info@abruzzo-airport.it', 'website' => 'http://www.abruzzo-airport.it'
			), array(
				'id'      => 590, 'airport_id' => 6317, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.guadeloupe.aeroport.fr/'
			), array(
				'id'      => 591, 'airport_id' => 6323, 'phone' => '(559)782-7540', 'fax' => NULL,
				'email'   => 'jmcdonald@ci.porterville.ca.us', 'website' => NULL
			), array(
				'id'      => 592, 'airport_id' => 6326, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.tocumenpanama.aero/'
			), array(
				'id' => 593, 'airport_id' => 6333, 'phone' => '+33 (05) 59 33 33 00', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 594, 'airport_id' => 6352, 'phone' => '38552530105', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.airport-pula.hr/en/home/'
			), array(
				'id'      => 595, 'airport_id' => 6356, 'phone' => '(401) 737-8222', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.pvdairport.com/'
			), array(
				'id'      => 596, 'airport_id' => 6359, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.shanghaiairport.com/'
			), array(
				'id' => 597, 'airport_id' => 6452, 'phone' => '704-545-1875', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id' => 598, 'airport_id' => 6459, 'phone' => NULL, 'fax' => NULL, 'email' => 'a@aas.com', 'website' => NULL
			), array(
				'id'      => 599, 'airport_id' => 6462, 'phone' => '(+238) 63 39 35', 'fax' => '(+238) 63 38 76', 'email' => NULL,
				'website' => NULL
			), array(
				'id'      => 600, 'airport_id' => 6468, 'phone' => '55 (16) 3626-3376', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.daesp.sp.gov.br/aeroportos/ribeirao.htm'
			), array(
				'id'      => 601, 'airport_id' => 6516, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.rochesterairport.flyer.co.uk'
			), array(
				'id'      => 602, 'airport_id' => 6519, 'phone' => NULL, 'fax' => NULL, 'email' => 'info@rumcayairport.com',
				'website' => 'http://RumCayAirport.com'
			), array(
				'id'      => 603, 'airport_id' => 6523, 'phone' => '(530)224-4321', 'fax' => '(530)224-4318', 'email' => NULL,
				'website' => 'http://www.ci.redding.ca.us/adminsv/airports/index.htm'
			), array(
				'id' => 604, 'airport_id' => 6531, 'phone' => '9 198 402 123', 'fax' => NULL, 'email' => NULL, 'website' => 'http://rdu.com'
			), array(
				'id' => 605, 'airport_id' => 6539, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.sogas.it'
			), array(
				'id'      => 606, 'airport_id' => 6545, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.cambodia-airports.com'
			), array(
				'id'      => 607, 'airport_id' => 6555, 'phone' => '815-969-4000', 'fax' => '815-969-4001',
				'email'   => 'dvmartin@flyrfd.com', 'website' => 'http://www.flyrfd.com'
			), array(
				'id'      => 608, 'airport_id' => 6582, 'phone' => '+1 (804) 226 3000', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.flyrichmond.com'
			), array(
				'id'      => 609, 'airport_id' => 6596, 'phone' => '13 078 561 307', 'fax' => NULL, 'email' => 'burbigkit@rivertonwy.gov',
				'website' => 'http://www.flyriverton.com/'
			), array(
				'id'    => 610, 'airport_id' => 6597, 'phone' => '+371 720-70-09', 'fax' => '+371 721-17-67',
				'email' => 'office@riga-airport.com', 'website' => 'http://www.riga-airport.com'
			), array(
				'id'      => 611, 'airport_id' => 6604, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.rijeka-airport.hr/'
			), array(
				'id'      => 612, 'airport_id' => 6609, 'phone' => '4 532 313 231', 'fax' => '4 532 316 277', 'email' => 'rkeweb@cph.dk',
				'website' => 'http://roskildeairport.com'
			), array(
				'id' => 613, 'airport_id' => 6610, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.flyuza.com'
			), array(
				'id'      => 614, 'airport_id' => 6634, 'phone' => '065 370 0003, 370 0005, 370 0007', 'fax' => '653 700 003',
				'email'   => NULL, 'website' => 'http://marsa-alam-airport.com'
			), array(
				'id'    => 615, 'airport_id' => 6636, 'phone' => '390 541 715 711', 'fax' => '390 541 373 649',
				'email' => 'info@riminiairport.com', 'website' => 'http://www.riminiairport.com'
			), array(
				'id'      => 616, 'airport_id' => 6638, 'phone' => '5 483 400', 'fax' => '5 483 416', 'email' => 'rumginae@datec.net.pg',
				'website' => NULL
			), array(
				'id'      => 617, 'airport_id' => 6652, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.bornholms-lufthavn.dk/en/'
			), array(
				'id'      => 618, 'airport_id' => 6660, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.freewebs.com/roberts-int-airport-liberia/'
			), array(
				'id'      => 619, 'airport_id' => 6661, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.monroecounty.gov/airport-index.php'
			), array(
				'id'      => 620, 'airport_id' => 6713, 'phone' => '(239) 590-4800', 'fax' => NULL, 'email' => 'bdbennett@flylcpa.com',
				'website' => 'http://www.flylcpa.com/'
			), array(
				'id'      => 621, 'airport_id' => 6716, 'phone' => '(504) 445-1880', 'fax' => '(504) 445-1918', 'email' => NULL,
				'website' => NULL
			), array(
				'id'    => 622, 'airport_id' => 6723, 'phone' => '+31 (0)10 - 446 34 44', 'fax' => '+31 (0)10 - 446 34 99',
				'email' => 'info@rotterdam-airport.nl', 'website' => 'http://www.rotterdam-airport.nl/?setlanguage=en'
			), array(
				'id' => 623, 'airport_id' => 6732, 'phone' => '96612221700', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 624, 'airport_id' => 6750, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.finavia.fi/airport_rovaniemi'
			), array(
				'id'      => 625, 'airport_id' => 6759, 'phone' => '12 524 467 057', 'fax' => '12 529 853 728', 'email' => NULL,
				'website' => NULL
			), array(
				'id' => 626, 'airport_id' => 6766, 'phone' => '92 685 562 301', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'    => 627, 'airport_id' => 6770, 'phone' => '+48 (17) 852 00 81', 'fax' => '+48 (17) 852 07 09',
				'email' => 'rzeszowairport@polish-airports.com', 'website' => 'http://www.lotnisko-rzeszow.pl'
			), array(
				'id'  => 628, 'airport_id' => 6772, 'phone' => '(4912) 29-51-97, (846) 373-56-88',
				'fax' => '(4912) 29-51-97, (846) 373-56-88', 'email' => 'turlat@mail.ru', 'website' => 'http://aviarjazan.narod.ru'
			), array(
				'id'      => 629, 'airport_id' => 6786, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.aeropuertoelsalvador.gob.sv/'
			), array(
				'id'      => 630, 'airport_id' => 6788, 'phone' => '(619) 231 2100', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.san.org/'
			), array(
				'id'    => 631, 'airport_id' => 6796, 'phone' => '+90 216 585 50 00', 'fax' => '+90 216 585 51 14',
				'email' => 'heas@sgairport.com', 'website' => 'http://www.sgairport.com/'
			), array(
				'id'      => 632, 'airport_id' => 6798, 'phone' => '390 577 392 226', 'fax' => NULL, 'email' => 'info@siena-airport.it/',
				'website' => 'http://www.siena-airport.it'
			), array(
				'id'      => 633, 'airport_id' => 6810, 'phone' => '02 96 94 95 00', 'fax' => '02 96 94 91 32', 'email' => NULL,
				'website' => 'http://www.st-brieuc.aeroport.fr/index.htm'
			), array(
				'id'      => 634, 'airport_id' => 6837, 'phone' => '(56 2) 690 17 52', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.aeropuertosantiago.cl/ingles/index.php'
			), array(
				'id'      => 635, 'airport_id' => 6839, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.flughafen-saarbruecken.de'
			), array(
				'id'    => 636, 'airport_id' => 6840, 'phone' => '+7 (7292) 468045', 'fax' => '+7 (7292) 431322',
				'email' => 'office@aktau-airport.kz', 'website' => 'www.aktau-airport.kz'
			), array(
				'id'      => 637, 'airport_id' => 6842, 'phone' => '34 902 404 704', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.aena.es/csee/Satellite?cid=1048690016811&pagename=Estandar%2FPage%2FAeropuerto&SMO=1&SiteName=SCQ&c=Page&MO=5'
			), array(
				'id'    => 638, 'airport_id' => 6847, 'phone' => '+402 30 529 999', 'fax' => '+402 30 529 999',
				'email' => 'office@aeroportsuceava.ro', 'website' => 'http://www.aeroportsuceava.ro'
			), array(
				'id'      => 639, 'airport_id' => 6861, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.pref.miyagi.jp/KUTAI/ENGLISH/top-english.htm'
			), array(
				'id'      => 640, 'airport_id' => 6862, 'phone' => '+60 (0)89 660405', 'fax' => '+60 (0)89 668226', 'email' => NULL,
				'website' => NULL
			), array(
				'id'      => 641, 'airport_id' => 6863, 'phone' => '+46 60 197600', 'fax' => '+46 60 197619', 'email' => NULL,
				'website' => 'http://www.lfv.se'
			), array(
				'id'      => 642, 'airport_id' => 6864, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.sandiego.gov/airports/index.shtml'
			), array(
				'id'      => 643, 'airport_id' => 6873, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.iaa.gov.il/Rashat/en-US/Airports/SdeDov/'
			), array(
				'id'      => 644, 'airport_id' => 6877, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.portseattle.org/seatac/'
			), array(
				'id'      => 645, 'airport_id' => 6880, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.co.san-diego.ca.us/dpw/airports/gillespie.htm'
			), array(
				'id'    => 646, 'airport_id' => 6888, 'phone' => '+44 (0)1702 608100', 'fax' => '+44 (0)1702 608128',
				'email' => 'enquiries@southendairport.net', 'website' => 'http://www.southendairport.net'
			), array(
				'id'      => 647, 'airport_id' => 6902, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.orlandosanfordairport.com'
			), array(
				'id'      => 648, 'airport_id' => 6915, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.flysfo.com/default.asp'
			), array(
				'id'      => 649, 'airport_id' => 6919, 'phone' => '-58464', 'fax' => '-58509', 'email' => 'skelleftea.flygplats@lfv.se',
				'website' => 'http://www.lfv.se/templates/LFV_AirportStartPage____31215.aspx'
			), array(
				'id' => 650, 'airport_id' => 6928, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.eksb.dk'
			), array(
				'id'      => 651, 'airport_id' => 6942, 'phone' => '12 812 752 400', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.flysgr.com'
			), array(
				'id'      => 652, 'airport_id' => 6952, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.nakashibetsu-airport.jp/'
			), array(
				'id'      => 653, 'airport_id' => 6960, 'phone' => '+971 6 5811111', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.sharjahairport.ae'
			), array(
				'id'    => 654, 'airport_id' => 6992, 'phone' => '+380 (652) 295516', 'fax' => '+380 (652) 274343',
				'email' => 'office@airport.crimea.ua', 'website' => NULL
			), array(
				'id'      => 655, 'airport_id' => 7005, 'phone' => '(408) 501-7600', 'fax' => '(408) 573-1675', 'email' => NULL,
				'website' => 'http://www.sjc.org'
			), array(
				'id'      => 656, 'airport_id' => 7012, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.sarajevo-airport.ba/'
			), array(
				'id'    => 657, 'airport_id' => 7027, 'phone' => '+358-(0)6-4219 611', 'fax' => '+358-(0)6-4219 699',
				'email' => 'info@seinajoenlentoasema.fi', 'website' => 'http://www.seinajoenlentoasema.fi/'
			), array(
				'id'      => 658, 'airport_id' => 7032, 'phone' => '+998 3662 352-894', 'fax' => '+998 3662 335-560', 'email' => NULL,
				'website' => NULL
			), array(
				'id'    => 659, 'airport_id' => 7035, 'phone' => '+30 231 473700 / 2310 473312', 'fax' => '302 310 475 555',
				'email' => 'kacmtl@otenet.gr', 'website' => 'http://www.hcaa-eleng.gr/thesdat.htm'
			), array(
				'id' => 660, 'airport_id' => 7042, 'phone' => '76 16 11 75', 'fax' => '76 16 11 76', 'email' => NULL, 'website' => NULL
			), array(
				'id'    => 661, 'airport_id' => 7044, 'phone' => '++ (389 2) 3148 300', 'fax' => '++ (389 2) 3148 360',
				'email' => 'skpap@airports.com.mk', 'website' => 'http://www.airports.com.mk'
			), array(
				'id'      => 662, 'airport_id' => 7048, 'phone' => '0092 52 3555333', 'fax' => '0092 52 3257834',
				'email'   => 'info@sial.com.pk', 'website' => 'http://www.sial.com.pk'
			), array(
				'id'      => 663, 'airport_id' => 7058, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.airportsliac.sk'
			), array(
				'id'      => 664, 'airport_id' => 7086, 'phone' => '9 169 295 151', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.sacairports.org'
			), array(
				'id'      => 665, 'airport_id' => 7089, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.hcaa-eleng.gr/samos.htm'
			), array(
				'id'      => 666, 'airport_id' => 7120, 'phone' => NULL, 'fax' => NULL, 'email' => 'customercomments@shannonairport.com',
				'website' => 'http://www.shannonairport.com/'
			), array(
				'id'      => 667, 'airport_id' => 7134, 'phone' => '+36 83 355 500', 'fax' => '+36 83 554 002',
				'email'   => 'info@flybalaton.com', 'website' => 'http://www.flybalaton.com'
			), array(
				'id'    => 668, 'airport_id' => 7138, 'phone' => '+35 (92) 937-2211', 'fax' => '+359 (0)2 937 20 10',
				'email' => 'public@sofia-airport.bg', 'website' => 'http://www.sofia-airport.bg'
			), array(
				'id'      => 669, 'airport_id' => 7152, 'phone' => '+44 (0)2380 627 193', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.southamptonairport.com/'
			), array(
				'id' => 670, 'airport_id' => 7155, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.sogamoso.com'
			), array(
				'id'      => 671, 'airport_id' => 7158, 'phone' => '864-574-8552', 'fax' => '864-574-8558', 'email' => NULL,
				'website' => 'http://www.cityofspartanburg.org/City_Government/City_Departments/Memorial_Airport.htm'
			), array(
				'id'      => 672, 'airport_id' => 7167, 'phone' => '302 103 531 000', 'fax' => 'Fax: +30 210 353 0001', 'email' => NULL,
				'website' => 'http://www.aia.gr'
			), array(
				'id' => 673, 'airport_id' => 7170, 'phone' => '954449128', 'fax' => '954449129', 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 674, 'airport_id' => 7176, 'phone' => '+385 21 203506', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.split-airport.hrhttp://www.split-airport.hr'
			), array(
				'id'      => 675, 'airport_id' => 7198, 'phone' => '+370 41 542005', 'fax' => '+370 41 542006',
				'email'   => 'airport@siauliai.lt', 'website' => 'http://www.airport.siauliai.lt/'
			), array(
				'id' => 676, 'airport_id' => 7204, 'phone' => '+45 97 53 57 77', 'fax' => NULL, 'email' => 'eksv@eksv.dk', 'website' => NULL
			), array(
				'id'    => 677, 'airport_id' => 7223, 'phone' => '+ 47 53 40 37 10', 'fax' => '+ 47 53 40 37 15',
				'email' => 'admin@stordlufthavn.no', 'website' => 'http://www.stordlufthavn.no'
			), array(
				'id'      => 678, 'airport_id' => 7234, 'phone' => '+55 71 3204-1010 / 3204-1155', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.infraero.gov.br'
			), array(
				'id'      => 679, 'airport_id' => 7268, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.lambert-stlouis.com/'
			), array(
				'id'      => 680, 'airport_id' => 7270, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.stanstedairport.com/'
			), array(
				'id'      => 681, 'airport_id' => 7273, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.flughafen-stuttgart.de/de/index.php'
			), array(
				'id' => 682, 'airport_id' => 7277, 'phone' => '91-261-2727272 / 2727273', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 683, 'airport_id' => 7283, 'phone' => '-2986169', 'fax' => '-8667475', 'email' => NULL,
				'website' => 'http://www.juanda-airport.com/'
			), array(
				'id'      => 684, 'airport_id' => 7287, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.lameziatermeairport.it'
			), array(
				'id'      => 685, 'airport_id' => 7300, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.spiritairport.com'
			), array(
				'id'      => 686, 'airport_id' => 7321, 'phone' => '+7 (495) 232 65 65', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.svo.aero'
			), array(
				'id'    => 687, 'airport_id' => 7323, 'phone' => '+34 954 44 90 00', 'fax' => '+34 954 44 90 25',
				'email' => 'informacion_sevilla@aena.es', 'website' => NULL
			), array(
				'id'      => 688, 'airport_id' => 7330, 'phone' => '+7 (343) 264-42-02', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.koltsovo.ru'
			), array(
				'id'    => 689, 'airport_id' => 7360, 'phone' => '+ 33 3 88 64 67 67', 'fax' => '+ 33 3 88 64 67 64',
				'email' => 'aeroport.mark@strasbourg.cci.fr', 'website' => 'http://www.strasbourg.aeroport.fr'
			), array(
				'id'      => 690, 'airport_id' => 7364, 'phone' => '1 805 000 186', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.berlin-airport.de/PubEnglish/PubSchoenefeld/index.html'
			), array(
				'id'    => 691, 'airport_id' => 7370, 'phone' => '353 (0)71 91 68280', 'fax' => '353 (0) 71 91 68396',
				'email' => 'info@sligoairport.com', 'website' => 'http://www.sligoairport.com'
			), array(
				'id'      => 692, 'airport_id' => 7371, 'phone' => '5 995 452 060', 'fax' => '5 995 453 578',
				'email'   => 'info@sxm-airport.com', 'website' => 'http://www.pjiae.com/'
			), array(
				'id' => 693, 'airport_id' => 7380, 'phone' => '91-4290-20060', 'fax' => '91-4290-20166', 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 694, 'airport_id' => 7388, 'phone' => NULL, 'fax' => NULL, 'email' => 'info@sydneyairport.com.au',
				'website' => 'http://www.sydneyairport.com.au'
			), array(
				'id'    => 695, 'airport_id' => 7401, 'phone' => '(315) 454-4330', 'fax' => '(315) 454-8757',
				'email' => 'information@syrairport.org', 'website' => 'http://www.syrairport.org'
			), array(
				'id'      => 696, 'airport_id' => 7408, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.hial.co.uk/stornoway-airport.html'
			), array(
				'id'      => 697, 'airport_id' => 7413, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.sheffieldcityairport.com/'
			), array(
				'id'    => 698, 'airport_id' => 7416, 'phone' => '+43(0)66285800', 'fax' => '+43(0)6628580220',
				'email' => 'info@salzburg-airport.at', 'website' => 'http://www.salzburg-airport.com'
			), array(
				'id'      => 699, 'airport_id' => 7421, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.whiteman.af.mil'
			), array(
				'id'    => 700, 'airport_id' => 7433, 'phone' => '0086-755-27776047', 'fax' => '0086-755-27776313',
				'email' => 'sacabd@public.szptt.net.cn', 'website' => 'http://www.szairport.com/index_e.asp'
			), array(
				'id'      => 701, 'airport_id' => 7435, 'phone' => '+48 91 4817400', 'fax' => '+48 91 4183383',
				'email'   => 'info@airport.com.pl', 'website' => 'http://www.airport.szczecin.pl'
			), array(
				'id'      => 702, 'airport_id' => 7437, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.TobagoAirport.com'
			), array(
				'id' => 703, 'airport_id' => 7454, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://airport.uz/'
			), array(
				'id'      => 704, 'airport_id' => 7460, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.hot.ee/tartuairport/indexeng.htm'
			), array(
				'id'      => 705, 'airport_id' => 7480, 'phone' => '+995 32 947886', 'fax' => '+995 32 433103', 'email' => NULL,
				'website' => 'http://www.airport.ge/'
			), array(
				'id'      => 706, 'airport_id' => 7503, 'phone' => '00-91-461-71565', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.airportsindia.org.in'
			), array(
				'id' => 707, 'airport_id' => 7528, 'phone' => '+ 1 201 288 1775, Ext 220', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id' => 708, 'airport_id' => 7559, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.aena.es'
			), array(
				'id'      => 709, 'airport_id' => 7563, 'phone' => '+381 81 622 252', 'fax' => '+381 81 622 252', 'email' => NULL,
				'website' => 'http://www.montenegroairports.com/podgorica/'
			), array(
				'id'    => 710, 'airport_id' => 7571, 'phone' => '+40 265 328.259', 'fax' => '+40 265 328.257',
				'email' => 'tmuresairport@rdslink.ro', 'website' => 'http://www.targumuresairport.ro'
			), array(
				'id'      => 711, 'airport_id' => 7586, 'phone' => '1 805 000 186', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.berlin-airport.de/PubEnglish/PubTempelhof/index.html'
			), array(
				'id'      => 712, 'airport_id' => 7593, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.fyrstadsflyget.se/'
			), array(
				'id'      => 713, 'airport_id' => 7596, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://mehrabadairport.ir/'
			), array(
				'id'      => 714, 'airport_id' => 7600, 'phone' => '717-792-5566', 'fax' => '717-792-0046', 'email' => 'yorkav@yorkbp.com',
				'website' => NULL
			), array(
				'id'    => 715, 'airport_id' => 7603, 'phone' => '+355 4 379 063/379 064', 'fax' => '+ 355 4 379 065',
				'email' => 'info@tirana-airport.com', 'website' => 'http://www.tirana-airport.com'
			), array(
				'id' => 716, 'airport_id' => 7623, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.aptivat.com/'
			), array(
				'id'      => 717, 'airport_id' => 7635, 'phone' => '(3452) 49-64-13', 'fax' => '(3452) 49-63-86',
				'email'   => 'mail@tjm.aero', 'website' => 'http://www.tjm.aero'
			), array(
				'id'      => 718, 'airport_id' => 7673, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.talgov.com/citytlh/aviation/'
			), array(
				'id'      => 719, 'airport_id' => 7677, 'phone' => '3 726 058 701', 'fax' => '3 726 058 333', 'email' => 'info@tll.aero',
				'website' => 'http://www.tallinn-airport.ee/'
			), array(
				'id'      => 720, 'airport_id' => 7683, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.toulouse.aeroport.fr/'
			), array(
				'id'      => 721, 'airport_id' => 7686, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.iaa.gov.il/Rashat/en-US/Airports/BenGurion'
			), array(
				'id'      => 722, 'airport_id' => 7710, 'phone' => '(02) 6760 7611', 'fax' => NULL,
				'email'   => 'm.dubois@tamworth.nsw.gov.au',
				'website' => 'http://www.tamworth.nsw.gov.au/asp/index.asp?pgid=9279&cid=24735&id=6628'
			), array(
				'id' => 723, 'airport_id' => 7723, 'phone' => '(0771) 21434', 'fax' => '(0771) 41034', 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 724, 'airport_id' => 7738, 'phone' => '(310) 784-7900', 'fax' => '(310) 784-7930', 'email' => NULL,
				'website' => 'http://www.ci.torrance.ca.us/Airport/487.htm'
			), array(
				'id' => 725, 'airport_id' => 7743, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://tomskairport.ru'
			), array(
				'id'      => 726, 'airport_id' => 7756, 'phone' => '+ 47 77 64 84 00', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.tromso.airport.no/'
			), array(
				'id' => 727, 'airport_id' => 7761, 'phone' => '73 451 162 700', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 728, 'airport_id' => 7764, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.tampaairport.com/'
			), array(
				'id' => 729, 'airport_id' => 7768, 'phone' => '775-482-3441', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 730, 'airport_id' => 7788, 'phone' => '4 774 843 000', 'fax' => '4 774 843 030', 'email' => NULL,
				'website' => 'http://www.avinor.no/Norsk/Lufthavner/Trondheim_lufthavn,_Varnes/'
			), array(
				'id'      => 731, 'airport_id' => 7790, 'phone' => '4733427000', 'fax' => '4733427001', 'email' => 'post@torp.no',
				'website' => 'http://www.torp.no'
			), array(
				'id'      => 732, 'airport_id' => 7793, 'phone' => '423-325-6000', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.triflight.com/'
			), array(
				'id'      => 733, 'airport_id' => 7795, 'phone' => '0551-22553', 'fax' => '0551-22554',
				'email'   => 'juwata_airport@yahoo.com', 'website' => NULL
			), array(
				'id'      => 734, 'airport_id' => 7798, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.aeroportoditorino.it/'
			), array(
				'id'    => 735, 'airport_id' => 7803, 'phone' => '390 481 773 224', 'fax' => '390 481 474 150',
				'email' => 'info@aeroporto.fvg.it', 'website' => 'http://www.aeroporto.fvg.it'
			), array(
				'id'      => 736, 'airport_id' => 7815, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.astanaairport.kz'
			), array(
				'id'      => 737, 'airport_id' => 7816, 'phone' => '(0039)0422315111', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.trevisoairport.it'
			), array(
				'id'      => 738, 'airport_id' => 7824, 'phone' => '86 22 24901111', 'fax' => '86 22 27305888', 'email' => NULL,
				'website' => 'http://www.tbia.cn/'
			), array(
				'id' => 739, 'airport_id' => 7826, 'phone' => '+1 661-823-1396', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 740, 'airport_id' => 7828, 'phone' => '40 256 493 123', 'fax' => '40 256 493 123',
				'email'   => 'office@aerotim.ro', 'website' => 'http://www.aerotim.ro'
			), array(
				'id'      => 741, 'airport_id' => 7830, 'phone' => '075-218-224, 211-150', 'fax' => '075-218-224', 'email' => NULL,
				'website' => NULL
			), array(
				'id'      => 742, 'airport_id' => 7832, 'phone' => '61747273211', 'fax' => '61747791843',
				'email'   => 'info@tsvairport.com.au', 'website' => 'http://www.townsvilleairport.com.au'
			), array(
				'id'      => 743, 'airport_id' => 7866, 'phone' => '9 188 385 000', 'fax' => '9 188 385 199', 'email' => NULL,
				'website' => 'http://www.tulsaairports.com/index.html'
			), array(
				'id'      => 744, 'airport_id' => 7882, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.tvcairport.com/'
			), array(
				'id'    => 745, 'airport_id' => 7903, 'phone' => '0180 5000 186 (0,12 Euro/Min.)', 'fax' => NULL,
				'email' => 'info@berlin-airport.de', 'website' => 'http://www.berlin-airport.de/PubEnglish/PubTegel/index.php?'
			), array(
				'id'      => 746, 'airport_id' => 7932, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://iserit.greennet.gl/bgbw'
			), array(
				'id'      => 747, 'airport_id' => 7969, 'phone' => '+7 (347) 229-52-95', 'fax' => '+7 (347) 273-06-09', 'email' => NULL,
				'website' => 'http://www.airportufa.ru'
			), array(
				'id'      => 748, 'airport_id' => 7987, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.quitoairport.com/'
			), array(
				'id'      => 749, 'airport_id' => 7995, 'phone' => '078-306-4195', 'fax' => '078-306-4196', 'email' => NULL,
				'website' => 'http://www.kairport.co.jp/index.html'
			), array(
				'id'    => 750, 'airport_id' => 7997, 'phone' => '+7 (7232) 54 34 84', 'fax' => '+7 (7232) 54 30 00',
				'email' => 'airport@mail.east.telecom.kz', 'website' => 'http://www.airport.ukg.kz'
			), array(
				'id' => 751, 'airport_id' => 8021, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.ulvost.ru/eng'
			), array(
				'id'      => 752, 'airport_id' => 8065, 'phone' => '3724533793', 'fax' => '3724533790', 'email' => 'mati.tang@eeke.ee',
				'website' => 'http://www.eeke.ee'
			), array(
				'id'      => 753, 'airport_id' => 8101, 'phone' => '+66 38 245595/245600', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.utapao.com'
			), array(
				'id'      => 754, 'airport_id' => 8123, 'phone' => '+358 6 212 6111', 'fax' => '+358 6 212 6199', 'email' => NULL,
				'website' => 'http://www.finavia.fi/airport_vaasa'
			), array(
				'id'      => 755, 'airport_id' => 8136, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.varna-airport.bg/'
			), array(
				'id'      => 756, 'airport_id' => 8140, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.avinor.no/Norsk/Lufthavner/Vardo_lufthavn,_Svartnes/'
			), array(
				'id'      => 757, 'airport_id' => 8142, 'phone' => '+39 - (0)30 - 9656530', 'fax' => '+39 - (0)30 - 9656501',
				'email'   => NULL, 'website' => 'http://www.aeroportoverona.it'
			), array(
				'id' => 758, 'airport_id' => 8144, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.lfv.se/visby'
			), array(
				'id' => 759, 'airport_id' => 8153, 'phone' => '+55(19)37255223/24', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id' => 760, 'airport_id' => 8187, 'phone' => '4 322 832 237', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'    => 761, 'airport_id' => 8192, 'phone' => '390 444 927 711', 'fax' => '390 444 928 082',
				'email' => 'operations@aeroportovicenza.it', 'website' => 'http://www.airportvicenza.it'
			), array(
				'id'      => 762, 'airport_id' => 8194, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.viennaairport.com'
			), array(
				'id'      => 763, 'airport_id' => 8202, 'phone' => '(0432) 32-48-75', 'fax' => '(0432) 32-48-75', 'email' => NULL,
				'website' => 'http://www.vinavia.com'
			), array(
				'id'      => 764, 'airport_id' => 8215, 'phone' => '74 954 362 813', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.vnukovo.ru'
			), array(
				'id'      => 765, 'airport_id' => 8217, 'phone' => '(82151) 4-05-85', 'fax' => '(82151) 4-34-70', 'email' => NULL,
				'website' => NULL
			), array(
				'id'      => 766, 'airport_id' => 8220, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://SiteName=VLC&c=Page&MO=0&lang=EN_GB'
			), array(
				'id'      => 767, 'airport_id' => 8226, 'phone' => '00 34 983 415 500', 'fax' => '00 34 983 415 513', 'email' => NULL,
				'website' => 'http://www.aena.es'
			), array(
				'id'    => 768, 'airport_id' => 8243, 'phone' => '+370 5 273 9305, +370 5 230 6666', 'fax' => '+370 5 232 91 22',
				'email' => 'airport@vno.lt', 'website' => 'http://www.vno.lt'
			), array(
				'id'      => 769, 'airport_id' => 8246, 'phone' => NULL, 'fax' => NULL, 'email' => 'sales.airport@ventspils.gov.lv',
				'website' => 'http://www.airport.ventspils.lv'
			), array(
				'id'      => 770, 'airport_id' => 8248, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.lawa.org/vny/welcomeVNY.cfm'
			), array(
				'id'      => 771, 'airport_id' => 8267, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.ilmailulaitos.fi/airport_varkaus'
			), array(
				'id'      => 772, 'airport_id' => 8269, 'phone' => '390 458 095 666', 'fax' => '390 458 619 074', 'email' => NULL,
				'website' => 'http://www.aeroportoverona.it'
			), array(
				'id'      => 773, 'airport_id' => 8274, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.asur.com.mx/asur/ingles/aeropuertos/villahermosa/villahermosa.asp'
			), array(
				'id'    => 774, 'airport_id' => 8277, 'phone' => '8(0642)35-31-05, 8(0642)34-44-20',
				'fax'   => '+38 (0642) 53-72-69, 54-01-01', 'email' => 'lugairport@ltk.com.ua', 'website' => 'http://www.airport.lg.ua'
			), array(
				'id'      => 775, 'airport_id' => 8279, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.vasterasflygplats.se'
			), array(
				'id'      => 776, 'airport_id' => 8296, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.vladavia.ru/avia_eng/company_airport.php3'
			), array(
				'id'    => 777, 'airport_id' => 8300, 'phone' => '+46(0)470758500', 'fax' => '+46(0)470758509',
				'email' => 'info@smalandairport.se', 'website' => 'http://www.smalandairport.se'
			), array(
				'id'      => 778, 'airport_id' => 8321, 'phone' => '35351875589', 'fax' => '35351872288', 'email' => 'watapt@eircom.net',
				'website' => 'http://www.flywaterford.com'
			), array(
				'id'      => 779, 'airport_id' => 8324, 'phone' => '+48 (22) 650 42 20', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.lotnisko-chopina.pl/'
			), array(
				'id'      => 780, 'airport_id' => 8326, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.co.greene.pa.us/secured/gc/depts/rec/air/index.htm'
			), array(
				'id'    => 781, 'airport_id' => 8416, 'phone' => '+64 4 385 5100', 'fax' => '+64 4 385 5139',
				'email' => 'mail@wellingtonairport.co.nz', 'website' => NULL
			), array(
				'id'    => 782, 'airport_id' => 8479, 'phone' => '48 713 581 100', 'fax' => '48 713 573 973',
				'email' => 'airport@airport.wroclaw.pl', 'website' => 'http://www.airport.wroclaw.pl/en/index.php'
			), array(
				'id' => 783, 'airport_id' => 8526, 'phone' => '831-728-6075', 'fax' => '831-763-4058', 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 784, 'airport_id' => 8567, 'phone' => '+ 33 (0)3 26 64 82 00', 'fax' => '+ 33 (0)3 26 64 82 11',
				'email'   => NULL, 'website' => 'http://www.vatry.com'
			), array(
				'id' => 785, 'airport_id' => 8593, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.gsr.com.au'
			), array(
				'id'      => 786, 'airport_id' => 8629, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.xiagc.com.cn/enweb/index.asp'
			), array(
				'id'      => 787, 'airport_id' => 8631, 'phone' => NULL, 'fax' => '593 72 700 006', 'email' => 'amacas@macas.ecua.net.ec',
				'website' => NULL
			), array(
				'id'      => 788, 'airport_id' => 8633, 'phone' => '479-205-1000', 'fax' => '479-205-1000', 'email' => NULL,
				'website' => 'http://www.nwara.com/'
			), array(
				'id' => 789, 'airport_id' => 8724, 'phone' => '23 722 233 602', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id' => 790, 'airport_id' => 8740, 'phone' => '905-509-0255', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 791, 'airport_id' => 8753, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.brandon.ca/welcome.nsf/0be477a354605b4d86256b6500798d16/4132a7b69925313686256e760074c60f?OpenDocument'
			), array(
				'id'      => 792, 'airport_id' => 8757, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.calgaryairport.com/Springbank/index.cfm'
			), array(
				'id'      => 793, 'airport_id' => 8763, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.nanaimoairport.com/terminal.html'
			), array(
				'id' => 794, 'airport_id' => 8771, 'phone' => '506-684-5507', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id' => 795, 'airport_id' => 8778, 'phone' => '867-898-9940', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 796, 'airport_id' => 8782, 'phone' => '(604) 792 3430', 'fax' => '(604) 792 3070', 'email' => NULL,
				'website' => 'http://www.chilliwack.com/main/page.cfm?id=34'
			), array(
				'id'    => 797, 'airport_id' => 8790, 'phone' => '709-635-3601', 'fax' => '709-635-5668',
				'email' => 'info@deerlakeairport.com', 'website' => 'http://www.deerlakeairport.com/'
			), array(
				'id'    => 798, 'airport_id' => 8810, 'phone' => '(780) 890-8900', 'fax' => '(780) 890-8329',
				'email' => 'info@edmontonairports.com', 'website' => 'http://www.edmontonairports.com'
			), array(
				'id'      => 799, 'airport_id' => 8824, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.inuvik.ca/tourism/airport.html'
			), array(
				'id'      => 800, 'airport_id' => 8845, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.cityofkingston.ca/residents/transportation/airport/index.asp'
			), array(
				'id'      => 801, 'airport_id' => 8869, 'phone' => '(905) 679-1999', 'fax' => NULL, 'email' => 'info@flyhi.ca',
				'website' => 'http://www.flyhi.ca'
			), array(
				'id' => 802, 'airport_id' => 8874, 'phone' => '604-885-9017', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id' => 803, 'airport_id' => 8878, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.hiaa.ca'
			), array(
				'id'    => 804, 'airport_id' => 8898, 'phone' => '519-648-2256', 'fax' => '519-648-3540',
				'email' => 'airport@region.waterloo.on.ca', 'website' => 'http://www.waterlooairport.ca/'
			), array(
				'id'    => 805, 'airport_id' => 8907, 'phone' => '(4112) 49-10-00', 'fax' => '(4112) 49-10-52, 44-32-33',
				'email' => 'office@airport-yakutsk.ru', 'website' => 'http://www.airport-yakutsk.ru'
			), array(
				'id'      => 806, 'airport_id' => 8912, 'phone' => '905-477-8100', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.torontoairways.com'
			), array(
				'id' => 807, 'airport_id' => 8928, 'phone' => '819-523-8932', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 808, 'airport_id' => 8932, 'phone' => '(250) 765-5125', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.kelownaairport.com/'
			), array(
				'id'    => 809, 'airport_id' => 8934, 'phone' => '604 534-7330', 'fax' => '604 534-7330',
				'email' => 'manager@langleyairport.bc.ca', 'website' => 'http://www.langleyairport.bc.ca'
			), array(
				'id'      => 810, 'airport_id' => 8943, 'phone' => '306-694-2222-5263', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.airforce.forces.gc.ca/15wing/'
			), array(
				'id'      => 811, 'airport_id' => 8944, 'phone' => '(418) 452-3417', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.aeroportdecharlevoix.com/'
			), array(
				'id'      => 812, 'airport_id' => 8945, 'phone' => '780 791-2448', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.fortmcmurrayairport.com/'
			), array(
				'id' => 813, 'airport_id' => 8953, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.admtl.com/'
			), array(
				'id'    => 814, 'airport_id' => 8957, 'phone' => '(819)-663-0737', 'fax' => '(819)-663-0793',
				'email' => 'infos@ego-airport.ca', 'website' => 'http://www.ego-airport.ca'
			), array(
				'id' => 815, 'airport_id' => 8959, 'phone' => '(709) 643-9494 (24 hours)', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id' => 816, 'airport_id' => 8964, 'phone' => '306-633-2137/38', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 817, 'airport_id' => 8983, 'phone' => '905-576-8146', 'fax' => '905-723-6937',
				'email'   => 'info@oshawa-airport.com', 'website' => 'http://www.oshawa-airport.com/'
			), array(
				'id'      => 818, 'airport_id' => 8987, 'phone' => '(613) 248-2000', 'fax' => '(613) 248-2068', 'email' => NULL,
				'website' => 'http://www.ottawa-airport.ca'
			), array(
				'id'    => 819, 'airport_id' => 9012, 'phone' => '(705) 687-2194', 'fax' => '(705) 687-1056',
				'email' => 'airport@muskoka.on.ca', 'website' => 'http://www.muskokaairport.com'
			), array(
				'id'    => 820, 'airport_id' => 9013, 'phone' => '418-640-2700', 'fax' => '418-640-2656',
				'email' => 'info@aeroportdequebec.com', 'website' => 'http://www.aeroportdequebec.com'
			), array(
				'id'      => 821, 'airport_id' => 9018, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.windsorairport.net/'
			), array(
				'id'      => 822, 'airport_id' => 9022, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.lethbridgecountyairport.com/'
			), array(
				'id'    => 823, 'airport_id' => 9024, 'phone' => '1-250-897-3123 or 1-250-890-0829', 'fax' => NULL,
				'email' => 'info@comoxairport.com', 'website' => 'http://www.comoxairport.com'
			), array(
				'id'      => 824, 'airport_id' => 9025, 'phone' => '13 067 617 555', 'fax' => '13 067 617 571', 'email' => 'info@yqr.ca',
				'website' => 'http://www.yqr.ca'
			), array(
				'id' => 825, 'airport_id' => 9040, 'phone' => '418-867-5001', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id' => 826, 'airport_id' => 9049, 'phone' => '18 676 452 672', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id' => 827, 'airport_id' => 9062, 'phone' => '506-735-6917', 'fax' => '506-739-7866', 'email' => NULL, 'website' => NULL
			), array(
				'id' => 828, 'airport_id' => 9093, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.cfbtrenton.com'
			), array(
				'id'      => 829, 'airport_id' => 9095, 'phone' => '13 068 732 444', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://tisdaleaviation.ca'
			), array(
				'id'      => 830, 'airport_id' => 9103, 'phone' => '+1 514 394 7377, 1 800 465 1213', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.admtl.com'
			), array(
				'id'    => 831, 'airport_id' => 9112, 'phone' => '(250)545-3035', 'fax' => '(250) 542-4533',
				'email' => 'apm@vernonairport.com', 'website' => 'http://www.vernonairport.com/'
			), array(
				'id' => 832, 'airport_id' => 9117, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.yvr.ca/'
			), array(
				'id'      => 833, 'airport_id' => 9119, 'phone' => '15 195 340 140', 'fax' => NULL, 'email' => 'wkairport@bmts.com',
				'website' => 'http://www.flywiarton.com'
			), array(
				'id'    => 834, 'airport_id' => 9124, 'phone' => '+1 (204) 987 9400', 'fax' => '+1 (204) 987 9401',
				'email' => 'wia_info@waa.ca', 'website' => 'http://www.waa.ca'
			), array(
				'id'      => 835, 'airport_id' => 9138, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.edmontonairports.com/bins/content_page.asp?cid=15-53'
			), array(
				'id'      => 836, 'airport_id' => 9139, 'phone' => '13 069 758 900', 'fax' => NULL,
				'email'   => 'comments@saskatoonairport.ca', 'website' => 'http://www.yxe.ca'
			), array(
				'id'      => 837, 'airport_id' => 9141, 'phone' => '403-526-4664', 'fax' => '403-528-4629', 'email' => NULL,
				'website' => 'http://www.medicinehat.ca/cityservices/airport'
			), array(
				'id' => 838, 'airport_id' => 9153, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.gov.yk.ca/yxy/'
			), array(
				'id'      => 839, 'airport_id' => 9157, 'phone' => '403-735-1200', 'fax' => '403-735-1281',
				'email'   => 'calgaryairport@yyc.com', 'website' => 'http://www.yyc.com'
			), array(
				'id' => 840, 'airport_id' => 9161, 'phone' => NULL, 'fax' => NULL, 'email' => NULL, 'website' => 'http://www.flypei.com'
			), array(
				'id'      => 841, 'airport_id' => 9164, 'phone' => '(250) 953-7500', 'fax' => '(250) 953-7509', 'email' => NULL,
				'website' => 'http://www.victoriaairport.com'
			), array(
				'id'      => 842, 'airport_id' => 9168, 'phone' => '709-896-5445', 'fax' => '709-896-2434', 'email' => 'gbacka@hvgb.net',
				'website' => 'http://www.goosebayairport.com/index1.htm'
			), array(
				'id'      => 843, 'airport_id' => 9172, 'phone' => '1-866-207-1690', 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.gtaa.com/en/home/'
			), array(
				'id'      => 844, 'airport_id' => 9190, 'phone' => '38523205832', 'fax' => '38523205831',
				'email'   => 'info@zadar-airport.hr', 'website' => 'http://www.zadar-airport.hr/en/'
			), array(
				'id'      => 845, 'airport_id' => 9191, 'phone' => '+385 1 456 22 22', 'fax' => '+385 1 456 2033', 'email' => NULL,
				'website' => 'http://www.zagreb-airport.hr/'
			), array(
				'id'      => 846, 'airport_id' => 9192, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.Iranairports.com'
			), array(
				'id' => 847, 'airport_id' => 9207, 'phone' => '450-534-2325', 'fax' => '450-534-0042', 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 848, 'airport_id' => 9312, 'phone' => '+41 43 816 22 11', 'fax' => '+41 43 816 50 10',
				'email'   => 'info@unique.ch', 'website' => 'http://www.zurich-airport.com'
			), array(
				'id' => 849, 'airport_id' => 9325, 'phone' => '(242) 331-2919', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id'      => 850, 'airport_id' => 9338, 'phone' => NULL, 'fax' => NULL, 'email' => NULL,
				'website' => 'http://www.hcaa-eleng.gr/zakinth.htm'
			), array(
				'id' => 851, 'airport_id' => 9344, 'phone' => '+38 (0)412 37 29 22', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			), array(
				'id' => 852, 'airport_id' => 9372, 'phone' => '0821-714243, 718459', 'fax' => NULL, 'email' => NULL, 'website' => NULL
			),
		);

		foreach($airport_contacts as $airport_contact)
			Airport_Contact::create($airport_contact);
	}
}
