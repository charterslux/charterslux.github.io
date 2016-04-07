<?php

class CitiesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		City::truncate();
		$cities =
			array(
				array(
					'id' => 1, 'country_id' => 35, 'name' => '108 Mile Ranch', 'name_ru' => NULL, 'gmt_offset' => -8
				), 1 => array(
				'id' => 2, 'country_id' => 53, 'name' => 'Aachen', 'name_ru' => 'Аахен', 'gmt_offset' => 1
			), array(
				'id' => 3, 'country_id' => 55, 'name' => 'Aalborg', 'name_ru' => 'Аальбург', 'gmt_offset' => -1
			), array(
				'id' => 4, 'country_id' => 158, 'name' => 'Aalesund', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 5, 'country_id' => 55, 'name' => 'Aarhus', 'name_ru' => 'Аарус', 'gmt_offset' => 1,
			), array(
				'id' => 6, 'country_id' => 55, 'name' => 'Aarhus Limo', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7, 'country_id' => 80, 'name' => 'Aasiaat', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 8, 'country_id' => 101, 'name' => 'Abadan', 'name_ru' => 'Абадан', 'gmt_offset' => -3.5,
			), array(
				'id' => 9, 'country_id' => 111, 'name' => 'Abaiang', 'name_ru' => 'Абайянг', 'gmt_offset' => 12,
			), array(
				'id' => 10, 'country_id' => 180, 'name' => 'Abakan', 'name_ru' => 'Абакан', 'gmt_offset' => 8,
			), array(
				'id' => 11, 'country_id' => 167, 'name' => 'Abau', 'name_ru' => 'Абау', 'gmt_offset' => -10,
			), array(
				'id' => 12, 'country_id' => 35, 'name' => 'Abbotsford', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 13, 'country_id' => 169, 'name' => 'Abbottabad', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 14, 'country_id' => 227, 'name' => 'Abbse', 'name_ru' => 'Аббсе', 'gmt_offset' => 3,
			), array(
				'id' => 15, 'country_id' => 200, 'name' => 'Abecher', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id'         => 16, 'country_id' => 111, 'name' => 'Abemama Atoll', 'name_ru' => 'Абемама-Атолл',
				'gmt_offset' => -12,
			), array(
				'id' => 17, 'country_id' => 41, 'name' => 'Abengourou', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 18, 'country_id' => 216, 'name' => 'Aberdeen', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 19, 'country_id' => 182, 'name' => 'Abha', 'name_ru' => 'Абха', 'gmt_offset' => 3,
			), array(
				'id' => 20, 'country_id' => 41, 'name' => 'Abidjan', 'name_ru' => 'Абиджан', 'gmt_offset' => 0,
			), array(
				'id' => 21, 'country_id' => 216, 'name' => 'Abilene', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 22, 'country_id' => 73, 'name' => 'Abingdon', 'name_ru' => 'Абингдон', 'gmt_offset' => 0,
			), array(
				'id' => 23, 'country_id' => 41, 'name' => 'Aboisso', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 24, 'country_id' => 200, 'name' => 'Abou Deia', 'name_ru' => 'Абу-Дейя', 'gmt_offset' => -1,
			), array(
				'id' => 25, 'country_id' => 148, 'name' => 'Abreojos', 'name_ru' => 'Абреохос', 'gmt_offset' => 7,
			), array(
				'id' => 26, 'country_id' => 2, 'name' => 'Abu Dhabi', 'name_ru' => 'Абу-Даби', 'gmt_offset' => 4,
			), array(
				'id' => 27, 'country_id' => 101, 'name' => 'Abu Musa', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 28, 'country_id' => 61, 'name' => 'Abu Rudeis', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 29, 'country_id' => 61, 'name' => 'Abu Simbel', 'name_ru' => 'Абу-Симбель', 'gmt_offset' => 2,
			), array(
				'id' => 30, 'country_id' => 155, 'name' => 'Abuja', 'name_ru' => 'Абуджа', 'gmt_offset' => 1,
			), array(
				'id' => 31, 'country_id' => 46, 'name' => 'Acandi', 'name_ru' => 'Аканди', 'gmt_offset' => -5,
			), array(
				'id' => 32, 'country_id' => 46, 'name' => 'Acaricuara', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 33, 'country_id' => 220, 'name' => 'Acarigua', 'name_ru' => 'Акарикуа', 'gmt_offset' => -4,
			), array(
				'id' => 34, 'country_id' => 78, 'name' => 'Accra', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 35, 'country_id' => 180, 'name' => 'Achinsk', 'name_ru' => 'Ачинск', 'gmt_offset' => 8,
			), array(
				'id' => 36, 'country_id' => 164, 'name' => 'Achutupo', 'name_ru' => 'Ахутупо', 'gmt_offset' => 5,
			), array(
				'id' => 37, 'country_id' => 185, 'name' => 'Ad-Dabbah', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 38, 'country_id' => 216, 'name' => 'Ada', 'name_ru' => 'Ада', 'gmt_offset' => 0,
			), array(
				'id' => 39, 'country_id' => 216, 'name' => 'Adak Island', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 40, 'country_id' => 208, 'name' => 'Adana', 'name_ru' => 'Адана', 'gmt_offset' => 2,
			), array(
				'id' => 41, 'country_id' => 65, 'name' => 'Addis Ababa', 'name_ru' => 'Аддис Абеба', 'gmt_offset' => 3,
			), array(
				'id' => 42, 'country_id' => 14, 'name' => 'Adelaide', 'name_ru' => 'Аделаида', 'gmt_offset' => 10,
			), array(
				'id' => 43, 'country_id' => 227, 'name' => 'Aden', 'name_ru' => 'Аден', 'gmt_offset' => 3,
			), array(
				'id' => 44, 'country_id' => 208, 'name' => 'Adiyaman', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 45, 'country_id' => 180, 'name' => 'Adler', 'name_ru' => 'Адлер', 'gmt_offset' => 3,
			), array(
				'id' => 46, 'country_id' => 58, 'name' => 'Adrar', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 47, 'country_id' => 216, 'name' => 'Adrian', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 48, 'country_id' => 95, 'name' => 'Aek Godang', 'name_ru' => 'Эк-Годан', 'gmt_offset' => 7,
			), array(
				'id' => 49, 'country_id' => 167, 'name' => 'Afore', 'name_ru' => 'Афоре', 'gmt_offset' => -10,
			), array(
				'id' => 50, 'country_id' => 216, 'name' => 'Afton', 'name_ru' => 'Афтон', 'gmt_offset' => -7,
			), array(
				'id' => 51, 'country_id' => 183, 'name' => 'Afutara', 'name_ru' => 'Афутара', 'gmt_offset' => 0,
			), array(
				'id' => 52, 'country_id' => 208, 'name' => 'Afyon', 'name_ru' => 'Афион', 'gmt_offset' => 2,
			), array(
				'id' => 53, 'country_id' => 153, 'name' => 'Agades', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 54, 'country_id' => 129, 'name' => 'Agadir', 'name_ru' => 'Агадир', 'gmt_offset' => 0,
			), array(
				'id' => 55, 'country_id' => 87, 'name' => 'Agana', 'name_ru' => 'Агана', 'gmt_offset' => 10,
			), array(
				'id' => 56, 'country_id' => 99, 'name' => 'Agartala', 'name_ru' => 'Агартала', 'gmt_offset' => 5.5,
			), array(
				'id'         => 57, 'country_id' => 99, 'name' => 'Agatti Island', 'name_ru' => 'Агатти-Айленд',
				'gmt_offset' => 5.5,
			), array(
				'id' => 58, 'country_id' => 167, 'name' => 'Agaun', 'name_ru' => 'Агаун', 'gmt_offset' => -10,
			), array(
				'id' => 59, 'country_id' => 71, 'name' => 'Agen', 'name_ru' => 'Аген', 'gmt_offset' => 1,
			), array(
				'id' => 60, 'country_id' => 228, 'name' => 'Aggeneys', 'name_ru' => 'Аггенейз', 'gmt_offset' => 2,
			), array(
				'id' => 61, 'country_id' => 101, 'name' => 'Aghajari', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 62, 'country_id' => 14, 'name' => 'Agnew', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 63, 'country_id' => 99, 'name' => 'Agra', 'name_ru' => 'Агра', 'gmt_offset' => 5.5,
			), array(
				'id' => 64, 'country_id' => 103, 'name' => 'Agri', 'name_ru' => 'Агри', 'gmt_offset' => 1,
			), array(
				'id' => 65, 'country_id' => 85, 'name' => 'Agrinion', 'name_ru' => 'Агринио', 'gmt_offset' => 2,
			), array(
				'id' => 66, 'country_id' => 46, 'name' => 'Aguaclara', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 67, 'country_id' => 172, 'name' => 'Aguadilla', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id'         => 68, 'country_id' => 148, 'name' => 'Aguascalientes', 'name_ru' => 'Агуаскалиентес',
				'gmt_offset' => -6,
			), array(
				'id' => 69, 'country_id' => 107, 'name' => 'Aguni', 'name_ru' => 'Агуни', 'gmt_offset' => 9,
			), array(
				'id' => 70, 'country_id' => 166, 'name' => 'Ahe', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 71, 'country_id' => 116, 'name' => 'Ahmed Al Jaber', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 72, 'country_id' => 99, 'name' => 'Ahmedabad', 'name_ru' => 'Ахмедабад', 'gmt_offset' => 5.5,
			), array(
				'id' => 73, 'country_id' => 91, 'name' => 'Ahuas', 'name_ru' => 'Ахуас', 'gmt_offset' => 6,
			), array(
				'id' => 74, 'country_id' => 101, 'name' => 'Ahwaz', 'name_ru' => 'Ахваз', 'gmt_offset' => 3.5,
			), array(
				'id' => 75, 'country_id' => 151, 'name' => 'Ai-ais', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 76, 'country_id' => 167, 'name' => 'Aiambak', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 77, 'country_id' => 216, 'name' => 'Aiken', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 78, 'country_id' => 164, 'name' => 'Ailigandi', 'name_ru' => 'Айлиганди', 'gmt_offset' => 5,
			), array(
				'id'         => 79, 'country_id' => 134, 'name' => 'Ailinglapalap Island', 'name_ru' => NULL,
				'gmt_offset' => -12,
			), array(
				'id' => 80, 'country_id' => 134, 'name' => 'Ailuk Island', 'name_ru' => NULL, 'gmt_offset' => -12,
			), array(
				'id' => 81, 'country_id' => 216, 'name' => 'Ainsworth', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 82, 'country_id' => 167, 'name' => 'Aiome', 'name_ru' => 'Айоме', 'gmt_offset' => -10,
			), array(
				'id' => 83, 'country_id' => 142, 'name' => 'Aioun El Atrouss', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 84, 'country_id' => 14, 'name' => 'Airlie Beach', 'name_ru' => 'Эйрли Бич', 'gmt_offset' => 10,
			), array(
				'id' => 85, 'country_id' => 134, 'name' => 'Airok, Ailinglaplap', 'name_ru' => NULL, 'gmt_offset' => 12,
			), array(
				'id' => 86, 'country_id' => 89, 'name' => 'Aishalton', 'name_ru' => 'Аисхалтон', 'gmt_offset' => 3,
			), array(
				'id' => 87, 'country_id' => 167, 'name' => 'Aitape', 'name_ru' => 'Айтейп', 'gmt_offset' => -10,
			), array(
				'id' => 88, 'country_id' => 42, 'name' => 'Aitutaki', 'name_ru' => 'Аитутаки', 'gmt_offset' => 10,
			), array(
				'id' => 89, 'country_id' => 167, 'name' => 'Aiyura', 'name_ru' => 'Айюра', 'gmt_offset' => -10,
			), array(
				'id' => 90, 'country_id' => 99, 'name' => 'Aizawl', 'name_ru' => 'Айзаул', 'gmt_offset' => -5.5,
			), array(
				'id' => 91, 'country_id' => 71, 'name' => 'Ajaccio', 'name_ru' => 'Аяччио', 'gmt_offset' => 1,
			), array(
				'id' => 92, 'country_id' => 216, 'name' => 'Akhiok', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 93, 'country_id' => 216, 'name' => 'Akiachak', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 94, 'country_id' => 216, 'name' => 'Akiak', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 95, 'country_id' => 72, 'name' => 'Akieni', 'name_ru' => 'Акиени', 'gmt_offset' => 1,
			), array(
				'id' => 96, 'country_id' => 107, 'name' => 'Akita', 'name_ru' => 'Акита', 'gmt_offset' => 9,
			), array(
				'id' => 97, 'country_id' => 142, 'name' => 'Akjoujt', 'name_ru' => 'Акжужт', 'gmt_offset' => 0,
			), array(
				'id' => 98, 'country_id' => 35, 'name' => 'Aklavik', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 99, 'country_id' => 99, 'name' => 'Akola', 'name_ru' => 'Акола', 'gmt_offset' => 5.5,
			), array(
				'id' => 100, 'country_id' => 216, 'name' => 'Akron, CO', 'name_ru' => 'Akron', 'gmt_offset' => -7,
			), array(
				'id' => 101, 'country_id' => 228, 'name' => 'Akron/Canton', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 102, 'country_id' => 216, 'name' => 'Akron/Canton, OH', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 103, 'country_id' => 51, 'name' => 'Akrotiri', 'name_ru' => 'Акротири', 'gmt_offset' => 2,
			), array(
				'id' => 104, 'country_id' => 45, 'name' => 'Aksu', 'name_ru' => 'Аксу', 'gmt_offset' => -8,
			), array(
				'id' => 105, 'country_id' => 118, 'name' => 'Aktau', 'name_ru' => 'Актау', 'gmt_offset' => 5,
			), array(
				'id' => 106, 'country_id' => 118, 'name' => 'Aktyubinsk', 'name_ru' => 'Актюбинск', 'gmt_offset' => 5,
			), array(
				'id' => 107, 'country_id' => 35, 'name' => 'Akulivik', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 108, 'country_id' => 80, 'name' => 'Akunnaaq', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 109, 'country_id' => 155, 'name' => 'Akure', 'name_ru' => 'Акере', 'gmt_offset' => -1,
			), array(
				'id' => 110, 'country_id' => 102, 'name' => 'Akureyri', 'name_ru' => 'Акурейри', 'gmt_offset' => 0,
			), array(
				'id' => 111, 'country_id' => 216, 'name' => 'Akutan', 'name_ru' => 'Акутан', 'gmt_offset' => -9,
			), array(
				'id' => 112, 'country_id' => 2, 'name' => 'Al Ain', 'name_ru' => 'Аль-Айн', 'gmt_offset' => 4,
			), array(
				'id' => 113, 'country_id' => 61, 'name' => 'Al Arish', 'name_ru' => 'Аль-Ариш', 'gmt_offset' => 2,
			), array(
				'id' => 114, 'country_id' => 227, 'name' => 'Al Ghaydah', 'name_ru' => 'Аль-Гайда', 'gmt_offset' => -3,
			), array(
				'id' => 115, 'country_id' => 129, 'name' => 'Al Hoceima', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 116, 'country_id' => 182, 'name' => 'Al Kharj', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 117, 'country_id' => 185, 'name' => 'Al Koude', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 118, 'country_id' => 197, 'name' => 'Al Thaurah', 'name_ru' => 'Эль-Таура', 'gmt_offset' => -2,
			), array(
				'id' => 119, 'country_id' => 176, 'name' => 'Al Udeid', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 120, 'country_id' => 182, 'name' => 'Al-Baha', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 121, 'country_id' => 2, 'name' => 'Al-fujairah', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 122, 'country_id' => 216, 'name' => 'Alabama, AL', 'name_ru' => 'Алабама', 'gmt_offset' => -6,
			), array(
				'id' => 123, 'country_id' => 182, 'name' => 'Alahsa', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 124, 'country_id' => 216, 'name' => 'Alakanuk', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 125, 'country_id' => 216, 'name' => 'Alameda', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 126, 'country_id' => 216, 'name' => 'Alamogordo', 'name_ru' => 'Аламогордо', 'gmt_offset' => -7,
			), array(
				'id' => 127, 'country_id' => 148, 'name' => 'Alamos', 'name_ru' => 'Аламос', 'gmt_offset' => 7,
			), array(
				'id' => 128, 'country_id' => 216, 'name' => 'Alamosa', 'name_ru' => 'Аламоса', 'gmt_offset' => -7,
			), array(
				'id' => 129, 'country_id' => 64, 'name' => 'Albacete', 'name_ru' => 'Албасет', 'gmt_offset' => 1,
			), array(
				'id' => 130, 'country_id' => 216, 'name' => 'Albany', 'name_ru' => 'Олбани', 'gmt_offset' => -8,
			), array(
				'id' => 131, 'country_id' => 103, 'name' => 'Albenga', 'name_ru' => 'Албенга', 'gmt_offset' => 1,
			), array(
				'id' => 132, 'country_id' => 216, 'name' => 'Albert Lea', 'name_ru' => 'Альберт Ли', 'gmt_offset' => -6,
			), array(
				'id' => 133, 'country_id' => 71, 'name' => 'Albi', 'name_ru' => 'Альби', 'gmt_offset' => 1,
			), array(
				'id' => 134, 'country_id' => 194, 'name' => 'Albina', 'name_ru' => 'Альбина', 'gmt_offset' => 3,
			), array(
				'id' => 135, 'country_id' => 227, 'name' => 'Albuq', 'name_ru' => 'Альбук', 'gmt_offset' => 3,
			), array(
				'id' => 136, 'country_id' => 216, 'name' => 'Albuquerque', 'name_ru' => 'Альбукерк', 'gmt_offset' => -7,
			), array(
				'id' => 137, 'country_id' => 14, 'name' => 'Albury', 'name_ru' => 'Элбери', 'gmt_offset' => 11,
			), array(
				'id' => 138, 'country_id' => 73, 'name' => 'Alconbury', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 139, 'country_id' => 180, 'name' => 'Aldan', 'name_ru' => 'Алдан', 'gmt_offset' => 10,
			), array(
				'id' => 140, 'country_id' => 73, 'name' => 'Alderney', 'name_ru' => 'Элдерни', 'gmt_offset' => 0,
			), array(
				'id' => 141, 'country_id' => 142, 'name' => 'Aleg', 'name_ru' => 'Алег', 'gmt_offset' => 0,
			), array(
				'id' => 142, 'country_id' => 29, 'name' => 'Alegrete', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 143, 'country_id' => 216, 'name' => 'Aleknagik', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 144, 'country_id' => 216, 'name' => 'Aleneva', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 145, 'country_id' => 29, 'name' => 'Alenquer', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 146, 'country_id' => 197, 'name' => 'Aleppo', 'name_ru' => 'Алеппо', 'gmt_offset' => 2,
			), array(
				'id' => 147, 'country_id' => 35, 'name' => 'Alert', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 148, 'country_id' => 35, 'name' => 'Alert Bay', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 149, 'country_id' => 165, 'name' => 'Alerta', 'name_ru' => 'Алерта', 'gmt_offset' => -5,
			), array(
				'id'         => 150, 'country_id' => 228, 'name' => 'Alexander Bay', 'name_ru' => 'Александер-Бей',
				'gmt_offset' => 2,
			), array(
				'id' => 151, 'country_id' => 216, 'name' => 'Alexander City', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 152, 'country_id' => 162, 'name' => 'Alexandra', 'name_ru' => 'Александра', 'gmt_offset' => 13,
			), array(
				'id' => 153, 'country_id' => 61, 'name' => 'Alexandria', 'name_ru' => 'Александрия', 'gmt_offset' => 2,
			), array(
				'id' => 154, 'country_id' => 216, 'name' => 'Alexandria Bay', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 155, 'country_id' => 216, 'name' => 'Alexandria, LA', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id'         => 156, 'country_id' => 85, 'name' => 'Alexandroupolis', 'name_ru' => 'Александрополи',
				'gmt_offset' => 2,
			), array(
				'id' => 157, 'country_id' => 64, 'name' => 'Algeciras', 'name_ru' => 'Альгесирас', 'gmt_offset' => 0,
			), array(
				'id' => 158, 'country_id' => 103, 'name' => 'Alghero', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 159, 'country_id' => 58, 'name' => 'Algiers', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 160, 'country_id' => 216, 'name' => 'Algona', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 161, 'country_id' => 64, 'name' => 'Alicante', 'name_ru' => 'Аликанте', 'gmt_offset' => 1,
			), array(
				'id' => 162, 'country_id' => 216, 'name' => 'Alice', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 163, 'country_id' => 35, 'name' => 'Alice Arm', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id'         => 164, 'country_id' => 14, 'name' => 'Alice Springs', 'name_ru' => 'Элис Спрингз',
				'gmt_offset' => 10,
			), array(
				'id' => 165, 'country_id' => 216, 'name' => 'Aliceville', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 166, 'country_id' => 54, 'name' => 'Alisabieh', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 167, 'country_id' => 216, 'name' => 'Alitak', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 168, 'country_id' => 227, 'name' => 'Aljouf', 'name_ru' => 'Альюф', 'gmt_offset' => 3,
			), array(
				'id' => 169, 'country_id' => 99, 'name' => 'Allahabad', 'name_ru' => 'Аллахабад', 'gmt_offset' => 5.5,
			), array(
				'id' => 170, 'country_id' => 216, 'name' => 'Allakaket', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 171, 'country_id' => 228, 'name' => 'Alldays', 'name_ru' => 'Оллдейз', 'gmt_offset' => -2,
			), array(
				'id' => 172, 'country_id' => 216, 'name' => 'Alliance', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 173, 'country_id' => 80, 'name' => 'Alluitsup Paa', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 174, 'country_id' => 216, 'name' => 'Alma', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 175, 'country_id' => 118, 'name' => 'Almaty', 'name_ru' => 'Алматы', 'gmt_offset' => 6,
			), array(
				'id' => 176, 'country_id' => 29, 'name' => 'Almenara', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 177, 'country_id' => 64, 'name' => 'Almeria', 'name_ru' => 'Алмерия', 'gmt_offset' => 1,
			), array(
				'id' => 178, 'country_id' => 99, 'name' => 'Along', 'name_ru' => 'Алонг', 'gmt_offset' => -5.5,
			), array(
				'id'         => 179, 'country_id' => 95, 'name' => 'Alor Island', 'name_ru' => 'Алор-Айленд',
				'gmt_offset' => -8,
			), array(
				'id' => 180, 'country_id' => 149, 'name' => 'Alor Setar', 'name_ru' => 'Алор-Сетар', 'gmt_offset' => 8,
			), array(
				'id' => 181, 'country_id' => 167, 'name' => 'Alotau', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 182, 'country_id' => 72, 'name' => 'Alowe', 'name_ru' => 'Алове', 'gmt_offset' => 1,
			), array(
				'id' => 183, 'country_id' => 71, 'name' => 'Alpe D Huez', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 184, 'country_id' => 216, 'name' => 'Alpena', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 185, 'country_id' => 14, 'name' => 'Alpha', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 186, 'country_id' => 216, 'name' => 'Alpine', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 187, 'country_id' => 14, 'name' => 'Alroy Downs', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 188, 'country_id' => 158, 'name' => 'Alta', 'name_ru' => 'Алта', 'gmt_offset' => 1,
			), array(
				'id'         => 189, 'country_id' => 29, 'name' => 'Alta Floresta', 'name_ru' => 'Алта-Флореста',
				'gmt_offset' => -3,
			), array(
				'id' => 190, 'country_id' => 35, 'name' => 'Alta Lake', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 191, 'country_id' => 138, 'name' => 'Altai', 'name_ru' => 'Алтай', 'gmt_offset' => -8,
			), array(
				'id' => 192, 'country_id' => 29, 'name' => 'Altamira', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 193, 'country_id' => 45, 'name' => 'Altay', 'name_ru' => 'Алтай', 'gmt_offset' => -8,
			), array(
				'id' => 194, 'country_id' => 53, 'name' => 'Altenburg', 'name_ru' => 'Альтенбург', 'gmt_offset' => 1,
			), array(
				'id' => 195, 'country_id' => 40, 'name' => 'Altenrhein', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id'         => 196, 'country_id' => 150, 'name' => 'Alto Molocue', 'name_ru' => 'Альто-Молокуэ',
				'gmt_offset' => -2,
			), array(
				'id'         => 197, 'country_id' => 43, 'name' => 'Alto Palena', 'name_ru' => 'Альто-Палена',
				'gmt_offset' => 4,
			), array(
				'id' => 198, 'country_id' => 29, 'name' => 'Alto Parnaiba', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id'         => 199, 'country_id' => 11, 'name' => 'Alto Rio Senguerr',
				'name_ru'    => 'Альто-Рио-Сенгерр', 'gmt_offset' => 3,
			), array(
				'id' => 200, 'country_id' => 216, 'name' => 'Alton', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 201, 'country_id' => 14, 'name' => 'Alton Downs', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 202, 'country_id' => 216, 'name' => 'Altus', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 203, 'country_id' => 193, 'name' => 'Alula', 'name_ru' => 'Алула', 'gmt_offset' => -3,
			), array(
				'id' => 204, 'country_id' => 186, 'name' => 'Alvesta', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 205, 'country_id' => 216, 'name' => 'Alyeska', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 206, 'country_id' => 200, 'name' => 'Am Timan', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 207, 'country_id' => 167, 'name' => 'Ama', 'name_ru' => 'Ама', 'gmt_offset' => -10,
			), array(
				'id' => 208, 'country_id' => 95, 'name' => 'Amahai', 'name_ru' => 'Амахаи', 'gmt_offset' => 8,
			), array(
				'id' => 209, 'country_id' => 46, 'name' => 'Amalfi', 'name_ru' => 'Амалфи', 'gmt_offset' => 5,
			), array(
				'id'         => 210, 'country_id' => 107, 'name' => 'Amami O Shima', 'name_ru' => 'Амами-О-Сима',
				'gmt_offset' => 9,
			), array(
				'id' => 211, 'country_id' => 167, 'name' => 'Amanab', 'name_ru' => 'Аманаб', 'gmt_offset' => -10,
			), array(
				'id' => 212, 'country_id' => 216, 'name' => 'Amarillo', 'name_ru' => 'Амарильо', 'gmt_offset' => -6,
			), array(
				'id' => 213, 'country_id' => 216, 'name' => 'Amarillo, TX', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 214, 'country_id' => 14, 'name' => 'Amata', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id'         => 215, 'country_id' => 167, 'name' => 'Amazon Bay', 'name_ru' => 'Амазон-Бей',
				'gmt_offset' => -10,
			), array(
				'id' => 216, 'country_id' => 133, 'name' => 'Ambanja', 'name_ru' => 'Амбандза', 'gmt_offset' => 3,
			), array(
				'id' => 217, 'country_id' => 59, 'name' => 'Ambato', 'name_ru' => 'Амбато', 'gmt_offset' => -5,
			), array(
				'id' => 218, 'country_id' => 133, 'name' => 'Ambatolahy', 'name_ru' => 'Амбатолахи', 'gmt_offset' => -3,
			), array(
				'id'         => 219, 'country_id' => 133, 'name' => 'Ambatomainty', 'name_ru' => 'Амбатомаинти',
				'gmt_offset' => -3,
			), array(
				'id'         => 220, 'country_id' => 133, 'name' => 'Ambatondrazaka', 'name_ru' => 'Амбатондразака',
				'gmt_offset' => -3,
			), array(
				'id' => 221, 'country_id' => 133, 'name' => 'Ambilobe', 'name_ru' => 'Амбилобе', 'gmt_offset' => 3,
			), array(
				'id' => 222, 'country_id' => 216, 'name' => 'Ambler', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 223, 'country_id' => 167, 'name' => 'Amboin', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 224, 'country_id' => 95, 'name' => 'Ambon', 'name_ru' => 'Амбон', 'gmt_offset' => 8,
			), array(
				'id' => 225, 'country_id' => 108, 'name' => 'Amboseli', 'name_ru' => 'Амбосели', 'gmt_offset' => -3,
			), array(
				'id' => 226, 'country_id' => 9, 'name' => 'Ambriz', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 227, 'country_id' => 167, 'name' => 'Ambunti', 'name_ru' => 'Амбунти', 'gmt_offset' => -10,
			), array(
				'id' => 228, 'country_id' => 216, 'name' => 'Amchitka', 'name_ru' => 'Ам-Тиман', 'gmt_offset' => 10,
			), array(
				'id' => 229, 'country_id' => 180, 'name' => 'Amderma', 'name_ru' => 'Амдерма', 'gmt_offset' => 4,
			), array(
				'id' => 230, 'country_id' => 14, 'name' => 'American River', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 231, 'country_id' => 216, 'name' => 'Amery', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 232, 'country_id' => 216, 'name' => 'Ames', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 233, 'country_id' => 216, 'name' => 'Amityville', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 234, 'country_id' => 106, 'name' => 'Amman', 'name_ru' => 'Амман', 'gmt_offset' => 2,
			), array(
				'id' => 235, 'country_id' => 14, 'name' => 'Ammaroo', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 236, 'country_id' => 216, 'name' => 'Amook', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 237, 'country_id' => 35, 'name' => 'Amos', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 238, 'country_id' => 133, 'name' => 'Ampanihy', 'name_ru' => 'Ампанихи', 'gmt_offset' => -3,
			), array(
				'id' => 239, 'country_id' => 122, 'name' => 'Ampara', 'name_ru' => NULL, 'gmt_offset' => 5.5,
			), array(
				'id' => 240, 'country_id' => 99, 'name' => 'Amritsar', 'name_ru' => 'Амритсар', 'gmt_offset' => 5.5,
			), array(
				'id' => 241, 'country_id' => 157, 'name' => 'Amsterdam', 'name_ru' => 'Амстердам', 'gmt_offset' => 1,
			), array(
				'id' => 242, 'country_id' => 45, 'name' => 'An Shun', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 243, 'country_id' => 166, 'name' => 'Anaa', 'name_ru' => 'Анаа', 'gmt_offset' => 10,
			), array(
				'id' => 244, 'country_id' => 220, 'name' => 'Anaco', 'name_ru' => 'Анако', 'gmt_offset' => -4,
			), array(
				'id' => 245, 'country_id' => 216, 'name' => 'Anacortes', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 246, 'country_id' => 65, 'name' => 'Anacostia', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 247, 'country_id' => 180, 'name' => 'Anadyr', 'name_ru' => 'Анадырь', 'gmt_offset' => 12,
			), array(
				'id' => 248, 'country_id' => 216, 'name' => 'Anaheim', 'name_ru' => 'Анахайм', 'gmt_offset' => -8,
			), array(
				'id' => 249, 'country_id' => 35, 'name' => 'Anahim Lake', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 250, 'country_id' => 216, 'name' => 'Anaktuvuk', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 251, 'country_id' => 133, 'name' => 'Analalava', 'name_ru' => 'Аналалава', 'gmt_offset' => 3,
			), array(
				'id' => 252, 'country_id' => 180, 'name' => 'Anapa', 'name_ru' => 'Анапа', 'gmt_offset' => 4,
			), array(
				'id' => 253, 'country_id' => 29, 'name' => 'Anapolis', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 254, 'country_id' => 216, 'name' => 'Anchorage', 'name_ru' => 'Анкораж', 'gmt_offset' => -9,
			), array(
				'id' => 255, 'country_id' => 103, 'name' => 'Ancona', 'name_ru' => 'Анкона', 'gmt_offset' => 1,
			), array(
				'id' => 256, 'country_id' => 43, 'name' => 'Ancud', 'name_ru' => 'Анкуд', 'gmt_offset' => -3,
			), array(
				'id'         => 257, 'country_id' => 165, 'name' => 'Andahuaylas', 'name_ru' => 'Андауайлас',
				'gmt_offset' => -5,
			), array(
				'id' => 258, 'country_id' => 167, 'name' => 'Andakombe', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 259, 'country_id' => 14, 'name' => 'Andamooka', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 260, 'country_id' => 133, 'name' => 'Andapa', 'name_ru' => 'Андапа', 'gmt_offset' => 3,
			), array(
				'id' => 261, 'country_id' => 158, 'name' => 'Andenes', 'name_ru' => 'Анденес', 'gmt_offset' => 1,
			), array(
				'id'         => 262, 'country_id' => 87, 'name' => 'Andersen, Mariana Island', 'name_ru' => NULL,
				'gmt_offset' => 10,
			), array(
				'id' => 263, 'country_id' => 216, 'name' => 'Anderson', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 264, 'country_id' => 46, 'name' => 'Andes', 'name_ru' => 'Андес', 'gmt_offset' => -5,
			), array(
				'id' => 265, 'country_id' => 218, 'name' => 'Andizhan', 'name_ru' => 'Андижан', 'gmt_offset' => 5,
			), array(
				'id'         => 266, 'country_id' => 1, 'name' => 'Andorra La Vella', 'name_ru' => 'Андорра-ла-Велла',
				'gmt_offset' => 1,
			), array(
				'id' => 267, 'country_id' => 73, 'name' => 'Andover', 'name_ru' => 'Эндовер', 'gmt_offset' => 0,
			), array(
				'id' => 268, 'country_id' => 216, 'name' => 'Andrews', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 269, 'country_id' => 133, 'name' => 'Andriamena', 'name_ru' => 'Андриамена', 'gmt_offset' => -3,
			), array(
				'id' => 270, 'country_id' => 30, 'name' => 'Andros Town', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 271, 'country_id' => 9, 'name' => 'Andulo', 'name_ru' => 'Андуло', 'gmt_offset' => -1,
			), array(
				'id' => 272, 'country_id' => 221, 'name' => 'Anegada', 'name_ru' => 'Анегада', 'gmt_offset' => -4,
			), array(
				'id' => 273, 'country_id' => 224, 'name' => 'Aneityum', 'name_ru' => 'Анейтьюм', 'gmt_offset' => -11,
			), array(
				'id' => 274, 'country_id' => 216, 'name' => 'Angel Fire', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 275, 'country_id' => 168, 'name' => 'Angeles City', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id'         => 276, 'country_id' => 186, 'name' => 'Angelholm/Helsingborg', 'name_ru' => NULL,
				'gmt_offset' => 1,
			), array(
				'id' => 277, 'country_id' => 71, 'name' => 'Angers', 'name_ru' => 'Анжер', 'gmt_offset' => 1,
			), array(
				'id' => 278, 'country_id' => 95, 'name' => 'Anggi', 'name_ru' => 'Ангги', 'gmt_offset' => 9,
			), array(
				'id' => 279, 'country_id' => 35, 'name' => 'Angling Lake', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 280, 'country_id' => 150, 'name' => 'Angoche', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 281, 'country_id' => 216, 'name' => 'Angola', 'name_ru' => 'Ангола', 'gmt_offset' => -5,
			), array(
				'id' => 282, 'country_id' => 216, 'name' => 'Angoon', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 283, 'country_id' => 167, 'name' => 'Angoram', 'name_ru' => 'Ангорам', 'gmt_offset' => 10,
			), array(
				'id' => 284, 'country_id' => 71, 'name' => 'Angouleme', 'name_ru' => 'Ангулем', 'gmt_offset' => 1,
			), array(
				'id' => 285, 'country_id' => 167, 'name' => 'Anguganak', 'name_ru' => 'Ангуганак', 'gmt_offset' => -10,
			), array(
				'id' => 286, 'country_id' => 5, 'name' => 'Anguilla', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 287, 'country_id' => 14, 'name' => 'Angus Downs', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 288, 'country_id' => 216, 'name' => 'Aniak', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 289, 'country_id' => 216, 'name' => 'Anita Bay', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 290, 'country_id' => 224, 'name' => 'Aniwa', 'name_ru' => 'Анива', 'gmt_offset' => -11,
			), array(
				'id' => 291, 'country_id' => 112, 'name' => 'Anjouan', 'name_ru' => 'Анжуан', 'gmt_offset' => 3,
			), array(
				'id' => 292, 'country_id' => 45, 'name' => 'Ankang', 'name_ru' => 'Анькан', 'gmt_offset' => -8,
			), array(
				'id' => 293, 'country_id' => 208, 'name' => 'Ankara', 'name_ru' => 'Анкара', 'gmt_offset' => 2,
			), array(
				'id' => 294, 'country_id' => 133, 'name' => 'Ankavandra', 'name_ru' => 'Анкавандра', 'gmt_offset' => -3,
			), array(
				'id' => 295, 'country_id' => 133, 'name' => 'Ankazoabo', 'name_ru' => 'Анказоабо', 'gmt_offset' => -3,
			), array(
				'id' => 296, 'country_id' => 133, 'name' => 'Ankokoambo', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 297, 'country_id' => 133, 'name' => 'Ankorefo', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 298, 'country_id' => 216, 'name' => 'Ann Arbor, MI', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 299, 'country_id' => 58, 'name' => 'Annaba', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 300, 'country_id' => 89, 'name' => 'Annai', 'name_ru' => 'Аннаи', 'gmt_offset' => 3,
			), array(
				'id' => 301, 'country_id' => 167, 'name' => 'Annanberg', 'name_ru' => 'Аннаберг', 'gmt_offset' => -10,
			), array(
				'id' => 302, 'country_id' => 216, 'name' => 'Annapolis', 'name_ru' => 'Аннаполис', 'gmt_offset' => -5,
			), array(
				'id' => 303, 'country_id' => 71, 'name' => 'Annecy', 'name_ru' => 'Аннеси', 'gmt_offset' => 1,
			), array(
				'id' => 304, 'country_id' => 216, 'name' => 'Annette Island', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 305, 'country_id' => 216, 'name' => 'Anniston', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 306, 'country_id' => 45, 'name' => 'Anqing', 'name_ru' => 'Аньцин', 'gmt_offset' => -8,
			), array(
				'id' => 307, 'country_id' => 45, 'name' => 'Anshan', 'name_ru' => 'Аньшань', 'gmt_offset' => 8,
			), array(
				'id' => 308, 'country_id' => 165, 'name' => 'Anta', 'name_ru' => 'Анта', 'gmt_offset' => -5,
			), array(
				'id' => 309, 'country_id' => 133, 'name' => 'Antalaha', 'name_ru' => 'Анталаха', 'gmt_offset' => 3,
			), array(
				'id' => 310, 'country_id' => 208, 'name' => 'Antalya', 'name_ru' => 'Анталия', 'gmt_offset' => 2,
			), array(
				'id' => 311, 'country_id' => 133, 'name' => 'Antananarivo', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 312, 'country_id' => 216, 'name' => 'Anthony', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 313, 'country_id' => 14, 'name' => 'Anthony Lagoon', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 314, 'country_id' => 168, 'name' => 'Antique', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 315, 'country_id' => 216, 'name' => 'Antlers', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id'         => 316, 'country_id' => 43, 'name' => 'Antofagasta', 'name_ru' => 'Антофагаста',
				'gmt_offset' => -3,
			), array(
				'id' => 317, 'country_id' => 133, 'name' => 'Antsalova', 'name_ru' => 'Антсалова', 'gmt_offset' => -3,
			), array(
				'id' => 318, 'country_id' => 133, 'name' => 'Antsirabe', 'name_ru' => 'Анцирабе', 'gmt_offset' => 3,
			), array(
				'id' => 319, 'country_id' => 133, 'name' => 'Antsiranana', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 320, 'country_id' => 133, 'name' => 'Antsohihy', 'name_ru' => 'Антсохиху', 'gmt_offset' => 3,
			), array(
				'id' => 321, 'country_id' => 20, 'name' => 'Antwerp', 'name_ru' => 'Антверпен', 'gmt_offset' => 1,
			), array(
				'id'         => 322, 'country_id' => 183, 'name' => 'Anuha Island Resort', 'name_ru' => NULL,
				'gmt_offset' => 11,
			), array(
				'id'         => 323, 'country_id' => 122, 'name' => 'Anuradhapura', 'name_ru' => 'Анурадхапура',
				'gmt_offset' => 5.5,
			), array(
				'id' => 324, 'country_id' => 216, 'name' => 'Anvik', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 325, 'country_id' => 45, 'name' => 'Anyang', 'name_ru' => 'Аньян', 'gmt_offset' => 8,
			), array(
				'id' => 326, 'country_id' => 107, 'name' => 'Aomori', 'name_ru' => 'Аомори', 'gmt_offset' => 9,
			), array(
				'id' => 327, 'country_id' => 103, 'name' => 'Aosta', 'name_ru' => 'Аоста', 'gmt_offset' => 0,
			), array(
				'id' => 328, 'country_id' => 216, 'name' => 'Apalachicola', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 329, 'country_id' => 95, 'name' => 'Apalapsili', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 330, 'country_id' => 46, 'name' => 'Apartado', 'name_ru' => 'Апартадо', 'gmt_offset' => 5,
			), array(
				'id' => 331, 'country_id' => 166, 'name' => 'Apataki', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 332, 'country_id' => 148, 'name' => 'Apatzingan', 'name_ru' => 'Апацинган', 'gmt_offset' => -6,
			), array(
				'id' => 333, 'country_id' => 226, 'name' => 'Apia', 'name_ru' => NULL, 'gmt_offset' => -11,
			), array(
				'id' => 334, 'country_id' => 46, 'name' => 'Apiay', 'name_ru' => 'Апиай', 'gmt_offset' => -5,
			), array(
				'id' => 335, 'country_id' => 28, 'name' => 'Apolo', 'name_ru' => 'Аполо', 'gmt_offset' => -4,
			), array(
				'id'         => 336, 'country_id' => 216, 'name' => 'Apple Valley', 'name_ru' => 'Эппл Вэлли',
				'gmt_offset' => -8,
			), array(
				'id' => 337, 'country_id' => 216, 'name' => 'Appleton', 'name_ru' => 'Эпплтон', 'gmt_offset' => -6,
			), array(
				'id'         => 338, 'country_id' => 167, 'name' => 'April River', 'name_ru' => 'Эйприл-Ривер',
				'gmt_offset' => -10,
			), array(
				'id' => 339, 'country_id' => 29, 'name' => 'Apucarana', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 340, 'country_id' => 106, 'name' => 'Aqaba', 'name_ru' => 'Акаба', 'gmt_offset' => 2,
			), array(
				'id' => 341, 'country_id' => 101, 'name' => 'Araak', 'name_ru' => NULL, 'gmt_offset' => 3.5,
			), array(
				'id' => 342, 'country_id' => 29, 'name' => 'Aracaju', 'name_ru' => 'Аракайю', 'gmt_offset' => -2,
			), array(
				'id' => 343, 'country_id' => 29, 'name' => 'Aracatuba', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 344, 'country_id' => 178, 'name' => 'Arad', 'name_ru' => 'Арад', 'gmt_offset' => 2,
			), array(
				'id' => 345, 'country_id' => 29, 'name' => 'Aragarcas', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 346, 'country_id' => 167, 'name' => 'Aragip', 'name_ru' => 'Араджип', 'gmt_offset' => -10,
			), array(
				'id' => 347, 'country_id' => 29, 'name' => 'Araguaina', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 348, 'country_id' => 14, 'name' => 'Aramac', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 349, 'country_id' => 151, 'name' => 'Arandis', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 350, 'country_id' => 111, 'name' => 'Aranuka', 'name_ru' => 'Аранука', 'gmt_offset' => -12,
			), array(
				'id' => 351, 'country_id' => 86, 'name' => 'Arapahoe', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 352, 'country_id' => 29, 'name' => 'Arapiraca', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 353, 'country_id' => 29, 'name' => 'Arapongas', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 354, 'country_id' => 29, 'name' => 'Arapoti', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 355, 'country_id' => 182, 'name' => 'Arar', 'name_ru' => 'Арар', 'gmt_offset' => 3,
			), array(
				'id' => 356, 'country_id' => 46, 'name' => 'Araracuara', 'name_ru' => 'Араракуара', 'gmt_offset' => 5,
			), array(
				'id' => 357, 'country_id' => 29, 'name' => 'Araraquara', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 358, 'country_id' => 14, 'name' => 'Ararat', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 359, 'country_id' => 46, 'name' => 'Arauca', 'name_ru' => 'Араука', 'gmt_offset' => -5,
			), array(
				'id' => 360, 'country_id' => 46, 'name' => 'Arauquita', 'name_ru' => 'Араукита', 'gmt_offset' => -5,
			), array(
				'id' => 361, 'country_id' => 167, 'name' => 'Arawa', 'name_ru' => 'Арава', 'gmt_offset' => -10,
			), array(
				'id' => 362, 'country_id' => 29, 'name' => 'Araxa', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 363, 'country_id' => 65, 'name' => 'Arba Mintch', 'name_ru' => 'Арба-Минч', 'gmt_offset' => 3,
			), array(
				'id' => 364, 'country_id' => 46, 'name' => 'Arboletas', 'name_ru' => 'Арболетас', 'gmt_offset' => -5,
			), array(
				'id' => 365, 'country_id' => 216, 'name' => 'Arcata', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 366, 'country_id' => 35, 'name' => 'Arctic Bay', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 367, 'country_id' => 216, 'name' => 'Arctic Village', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 368, 'country_id' => 101, 'name' => 'Ardabil', 'name_ru' => NULL, 'gmt_offset' => 3.5,
			), array(
				'id' => 369, 'country_id' => 216, 'name' => 'Ardmore', 'name_ru' => 'Ардмор', 'gmt_offset' => -6,
			), array(
				'id' => 370, 'country_id' => 172, 'name' => 'Arecibo', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 371, 'country_id' => 165, 'name' => 'Arequipa', 'name_ru' => 'Арекуипа', 'gmt_offset' => -5,
			), array(
				'id' => 372, 'country_id' => 35, 'name' => 'Argentia', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 373, 'country_id' => 14, 'name' => 'Argyle', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 374, 'country_id' => 14, 'name' => 'Argyle Downs', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 375, 'country_id' => 21, 'name' => 'Aribinda', 'name_ru' => 'Арибинда', 'gmt_offset' => 0,
			), array(
				'id' => 376, 'country_id' => 46, 'name' => 'Arica', 'name_ru' => 'Арика', 'gmt_offset' => 5,
			), array(
				'id' => 377, 'country_id' => 29, 'name' => 'Aripuana', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 378, 'country_id' => 29, 'name' => 'Ariquemes', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 379, 'country_id' => 118, 'name' => 'Arkalyk', 'name_ru' => 'Аркалык', 'gmt_offset' => 6,
			), array(
				'id'         => 380, 'country_id' => 180, 'name' => 'Arkhangelsk', 'name_ru' => 'Архангельск',
				'gmt_offset' => 4,
			), array(
				'id' => 381, 'country_id' => 216, 'name' => 'Arlington Heights', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 382, 'country_id' => 153, 'name' => 'Arlit', 'name_ru' => 'Арлит', 'gmt_offset' => -1,
			), array(
				'id' => 383, 'country_id' => 21, 'name' => 'Arly', 'name_ru' => 'Арли', 'gmt_offset' => 0,
			), array(
				'id' => 384, 'country_id' => 46, 'name' => 'Armenia', 'name_ru' => 'Армения', 'gmt_offset' => -5,
			), array(
				'id' => 385, 'country_id' => 14, 'name' => 'Armidale', 'name_ru' => 'Армидаль', 'gmt_offset' => -10,
			), array(
				'id' => 386, 'country_id' => 35, 'name' => 'Armstrong', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 387, 'country_id' => 35, 'name' => 'Arnes, MB', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 388, 'country_id' => 134, 'name' => 'Arno', 'name_ru' => 'Арно', 'gmt_offset' => 12,
			), array(
				'id' => 389, 'country_id' => 167, 'name' => 'Aroa', 'name_ru' => 'Ароа', 'gmt_offset' => 10,
			), array(
				'id' => 390, 'country_id' => 183, 'name' => 'Arona', 'name_ru' => 'Арона', 'gmt_offset' => -10,
			), array(
				'id'         => 391, 'country_id' => 111, 'name' => 'Arorae Island', 'name_ru' => 'Ароре-Айленд',
				'gmt_offset' => 12,
			), array(
				'id' => 392, 'country_id' => 14, 'name' => 'Arrabury', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 393, 'country_id' => 29, 'name' => 'Arraias', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 394, 'country_id' => 64, 'name' => 'Arrecife', 'name_ru' => 'Арресиф', 'gmt_offset' => 0,
			), array(
				'id' => 395, 'country_id' => 95, 'name' => 'Arso', 'name_ru' => 'Арсо', 'gmt_offset' => 9,
			), array(
				'id' => 396, 'country_id' => 80, 'name' => 'Arsuk', 'name_ru' => 'Арсук', 'gmt_offset' => -3,
			), array(
				'id' => 397, 'country_id' => 216, 'name' => 'Artesia', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 398, 'country_id' => 217, 'name' => 'Artigas', 'name_ru' => 'Артигас', 'gmt_offset' => -2,
			), array(
				'id' => 399, 'country_id' => 214, 'name' => 'Arua', 'name_ru' => 'Аруа', 'gmt_offset' => 3,
			), array(
				'id' => 400, 'country_id' => 15, 'name' => 'Aruba', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 401, 'country_id' => 29, 'name' => 'Aruja', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 402, 'country_id' => 212, 'name' => 'Arusha', 'name_ru' => 'Аруша', 'gmt_offset' => 3,
			), array(
				'id' => 403, 'country_id' => 166, 'name' => 'Arutua', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 404, 'country_id' => 138, 'name' => 'Arvaikheer', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 405, 'country_id' => 35, 'name' => 'Arviat', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 406, 'country_id' => 186, 'name' => 'Arvidsjaur', 'name_ru' => 'Арвидсьяур', 'gmt_offset' => 1,
			), array(
				'id' => 407, 'country_id' => 107, 'name' => 'Asahikawa', 'name_ru' => 'Асахикава', 'gmt_offset' => 9,
			), array(
				'id' => 408, 'country_id' => 167, 'name' => 'Asapa', 'name_ru' => 'Асапа', 'gmt_offset' => -10,
			), array(
				'id' => 409, 'country_id' => 226, 'name' => 'Asau', 'name_ru' => 'Асау', 'gmt_offset' => -11,
			), array(
				'id' => 410, 'country_id' => 35, 'name' => 'Asbestos Hill', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 411, 'country_id' => 28, 'name' => 'Ascension', 'name_ru' => 'Аскеншн', 'gmt_offset' => -4,
			), array(
				'id' => 412, 'country_id' => 40, 'name' => 'Ascona', 'name_ru' => 'Аскона', 'gmt_offset' => 1,
			), array(
				'id' => 413, 'country_id' => 167, 'name' => 'Aseki', 'name_ru' => 'Асеки', 'gmt_offset' => -10,
			), array(
				'id' => 414, 'country_id' => 65, 'name' => 'Asela', 'name_ru' => 'Асела', 'gmt_offset' => -3,
			), array(
				'id' => 415, 'country_id' => 162, 'name' => 'Ashburton', 'name_ru' => 'Ашбертон', 'gmt_offset' => 13,
			), array(
				'id' => 416, 'country_id' => 35, 'name' => 'Ashcroft', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 417, 'country_id' => 204, 'name' => 'Ashgabat', 'name_ru' => 'Ашхабад', 'gmt_offset' => 5,
			), array(
				'id' => 418, 'country_id' => 216, 'name' => 'Ashland', 'name_ru' => 'Эшленд', 'gmt_offset' => -6,
			), array(
				'id' => 419, 'country_id' => 216, 'name' => 'Ashley', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 420, 'country_id' => 167, 'name' => 'Asirim', 'name_ru' => 'Асирим', 'gmt_offset' => 0,
			), array(
				'id' => 421, 'country_id' => 63, 'name' => 'Asmara', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 422, 'country_id' => 65, 'name' => 'Asosa', 'name_ru' => 'Асоса', 'gmt_offset' => 3,
			), array(
				'id' => 423, 'country_id' => 216, 'name' => 'Aspen', 'name_ru' => 'Аспен', 'gmt_offset' => -7,
			), array(
				'id' => 424, 'country_id' => 63, 'name' => 'Assab', 'name_ru' => 'Ассаб', 'gmt_offset' => 3,
			), array(
				'id' => 425, 'country_id' => 101, 'name' => 'Assaluyeh', 'name_ru' => NULL, 'gmt_offset' => 3.5,
			), array(
				'id' => 426, 'country_id' => 29, 'name' => 'Assis', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 427, 'country_id' => 61, 'name' => 'Assiut', 'name_ru' => 'Асьют', 'gmt_offset' => 2,
			), array(
				'id' => 428, 'country_id' => 118, 'name' => 'Astana', 'name_ru' => 'Астана', 'gmt_offset' => 6,
			), array(
				'id' => 429, 'country_id' => 216, 'name' => 'Astoria', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 430, 'country_id' => 180, 'name' => 'Astrakhan', 'name_ru' => 'Астрахань', 'gmt_offset' => 4,
			), array(
				'id' => 431, 'country_id' => 95, 'name' => 'Astraksetra', 'name_ru' => 'Астраксетра', 'gmt_offset' => 7,
			), array(
				'id' => 432, 'country_id' => 85, 'name' => 'Astypalaia Island', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 433, 'country_id' => 175, 'name' => 'Asuncion', 'name_ru' => 'Асунсьон', 'gmt_offset' => -3,
			), array(
				'id' => 434, 'country_id' => 61, 'name' => 'Aswan', 'name_ru' => 'Асуан', 'gmt_offset' => 2,
			), array(
				'id' => 435, 'country_id' => 95, 'name' => 'Atambua', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 436, 'country_id' => 227, 'name' => 'Ataq', 'name_ru' => 'Атак', 'gmt_offset' => 3,
			), array(
				'id' => 437, 'country_id' => 142, 'name' => 'Atar', 'name_ru' => 'Атар', 'gmt_offset' => 0,
			), array(
				'id' => 438, 'country_id' => 95, 'name' => 'Atauro', 'name_ru' => 'Атауро', 'gmt_offset' => 9,
			), array(
				'id' => 439, 'country_id' => 185, 'name' => 'Atbara', 'name_ru' => 'Атбара', 'gmt_offset' => 3,
			), array(
				'id' => 440, 'country_id' => 118, 'name' => 'Atbasar', 'name_ru' => 'Атбасар', 'gmt_offset' => -2,
			), array(
				'id' => 441, 'country_id' => 85, 'name' => 'Athens', 'name_ru' => 'Афины', 'gmt_offset' => 2,
			), array(
				'id' => 442, 'country_id' => 200, 'name' => 'Ati', 'name_ru' => 'Ати', 'gmt_offset' => -1,
			), array(
				'id' => 443, 'country_id' => 35, 'name' => 'Atikokan', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 444, 'country_id' => 42, 'name' => 'Atiu Island', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 445, 'country_id' => 216, 'name' => 'Atka', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 446, 'country_id' => 167, 'name' => 'Atkamba', 'name_ru' => 'Аткамба', 'gmt_offset' => -10,
			), array(
				'id' => 447, 'country_id' => 216, 'name' => 'Atlanta', 'name_ru' => 'Атланта', 'gmt_offset' => -6,
			), array(
				'id' => 448, 'country_id' => 216, 'name' => 'Atlanta, GA', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 449, 'country_id' => 216, 'name' => 'Atlantic', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id'         => 450, 'country_id' => 216, 'name' => 'Atlantic City', 'name_ru' => 'Атлантик Сити',
				'gmt_offset' => -5,
			), array(
				'id' => 451, 'country_id' => 216, 'name' => 'Atmautluak', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 452, 'country_id' => 183, 'name' => 'Atoifi', 'name_ru' => 'Атоифи', 'gmt_offset' => -11,
			), array(
				'id' => 453, 'country_id' => 216, 'name' => 'Atqasuk', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 454, 'country_id' => 107, 'name' => 'Atsugi', 'name_ru' => 'Ацуги', 'gmt_offset' => 9,
			), array(
				'id' => 455, 'country_id' => 35, 'name' => 'Attawapiskat', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 456, 'country_id' => 169, 'name' => 'Attock', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 457, 'country_id' => 119, 'name' => 'Attopeu', 'name_ru' => 'Аттопью', 'gmt_offset' => 7,
			), array(
				'id' => 458, 'country_id' => 80, 'name' => 'Attu', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 459, 'country_id' => 216, 'name' => 'Attu Island', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 460, 'country_id' => 166, 'name' => 'Atuona', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 461, 'country_id' => 216, 'name' => 'Atwater, CA', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 462, 'country_id' => 118, 'name' => 'Atyrau', 'name_ru' => 'Атырау', 'gmt_offset' => 5,
			), array(
				'id' => 463, 'country_id' => 167, 'name' => 'Aua Island', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 464, 'country_id' => 71, 'name' => 'Aubagne', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 465, 'country_id' => 71, 'name' => 'Aubenas', 'name_ru' => 'Обенас', 'gmt_offset' => 1,
			), array(
				'id' => 466, 'country_id' => 216, 'name' => 'Auburn', 'name_ru' => 'Обурн', 'gmt_offset' => -6,
			), array(
				'id' => 467, 'country_id' => 162, 'name' => 'Auckland', 'name_ru' => 'Окленд', 'gmt_offset' => 13,
			), array(
				'id' => 468, 'country_id' => 216, 'name' => 'Augusta', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 469, 'country_id' => 216, 'name' => 'Augusta, GA', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 470, 'country_id' => 14, 'name' => 'Augustus Downs', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 471, 'country_id' => 167, 'name' => 'Aumo', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 472, 'country_id' => 35, 'name' => 'Aupaluk', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 473, 'country_id' => 134, 'name' => 'Aur Island', 'name_ru' => NULL, 'gmt_offset' => 12,
			), array(
				'id' => 474, 'country_id' => 99, 'name' => 'Aurangabad', 'name_ru' => 'Аурангабад', 'gmt_offset' => 5.5,
			), array(
				'id' => 475, 'country_id' => 71, 'name' => 'Aurillac', 'name_ru' => 'Орийак', 'gmt_offset' => -1,
			), array(
				'id' => 476, 'country_id' => 216, 'name' => 'Aurora', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 477, 'country_id' => 14, 'name' => 'Aurukun Mission', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 478, 'country_id' => 216, 'name' => 'Austin', 'name_ru' => 'Остин', 'gmt_offset' => -6,
			), array(
				'id' => 479, 'country_id' => 14, 'name' => 'Austral Downs', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 480, 'country_id' => 14, 'name' => 'Auvergne', 'name_ru' => 'Овернь', 'gmt_offset' => -9.5,
			), array(
				'id' => 481, 'country_id' => 71, 'name' => 'Auxerre', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 482, 'country_id' => 186, 'name' => 'Avesta Krylbo', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 483, 'country_id' => 103, 'name' => 'Aviano', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 484, 'country_id' => 71, 'name' => 'Avignon', 'name_ru' => 'Авиньон', 'gmt_offset' => 1,
			), array(
				'id' => 485, 'country_id' => 216, 'name' => 'Avon Park', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 486, 'country_id' => 71, 'name' => 'Avoriaz', 'name_ru' => 'Аворьяз', 'gmt_offset' => 1,
			), array(
				'id' => 487, 'country_id' => 183, 'name' => 'Avu Avu', 'name_ru' => 'Аву-Аву', 'gmt_offset' => 11,
			), array(
				'id' => 488, 'country_id' => 167, 'name' => 'Awaba', 'name_ru' => 'Аваба', 'gmt_offset' => -10,
			), array(
				'id' => 489, 'country_id' => 167, 'name' => 'Awar', 'name_ru' => 'Авар', 'gmt_offset' => -10,
			), array(
				'id' => 490, 'country_id' => 194, 'name' => 'Awaradam', 'name_ru' => 'Аварадам', 'gmt_offset' => -3,
			), array(
				'id' => 491, 'country_id' => 65, 'name' => 'Awareh', 'name_ru' => 'Аварех', 'gmt_offset' => -3,
			), array(
				'id' => 492, 'country_id' => 65, 'name' => 'Awassa', 'name_ru' => 'Авасса', 'gmt_offset' => 3,
			), array(
				'id' => 493, 'country_id' => 65, 'name' => 'Axum', 'name_ru' => 'Аксум', 'gmt_offset' => 3,
			), array(
				'id' => 494, 'country_id' => 165, 'name' => 'Ayacucho', 'name_ru' => 'Аякучо', 'gmt_offset' => -5,
			), array(
				'id' => 495, 'country_id' => 46, 'name' => 'Ayapel', 'name_ru' => 'Айапел', 'gmt_offset' => 5,
			), array(
				'id' => 496, 'country_id' => 95, 'name' => 'Ayawasi', 'name_ru' => 'Аяваси', 'gmt_offset' => -9,
			), array(
				'id' => 497, 'country_id' => 14, 'name' => 'Ayers Rock', 'name_ru' => 'Айерс Рок', 'gmt_offset' => 10,
			), array(
				'id' => 498, 'country_id' => 214, 'name' => 'Ayolas', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 499, 'country_id' => 14, 'name' => 'Ayr', 'name_ru' => 'Эйр', 'gmt_offset' => 10,
			), array(
				'id' => 500, 'country_id' => 67, 'name' => 'Ba', 'name_ru' => 'Ба', 'gmt_offset' => 12,
			),
				array(
					'id' => 501, 'country_id' => 228, 'name' => 'Babelegi', 'name_ru' => 'Бабелеги', 'gmt_offset' => 2,
				), 1 => array(
				'id' => 502, 'country_id' => 95, 'name' => 'Babo', 'name_ru' => 'Бабо', 'gmt_offset' => -9,
			), array(
				'id' => 503, 'country_id' => 101, 'name' => 'Babolsar', 'name_ru' => 'Баболсар', 'gmt_offset' => -3.5,
			), array(
				'id' => 504, 'country_id' => 216, 'name' => 'Baca Grande', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 505, 'country_id' => 178, 'name' => 'Bacau', 'name_ru' => 'Бакэу', 'gmt_offset' => 2,
			), array(
				'id' => 506, 'country_id' => 168, 'name' => 'Bacolod', 'name_ru' => 'Баколод', 'gmt_offset' => 8,
			), array(
				'id' => 507, 'country_id' => 64, 'name' => 'Badajoz', 'name_ru' => 'Бадахос', 'gmt_offset' => 1,
			), array(
				'id' => 508, 'country_id' => 95, 'name' => 'Bade', 'name_ru' => 'Баде', 'gmt_offset' => -9,
			), array(
				'id' => 509, 'country_id' => 169, 'name' => 'Badin', 'name_ru' => 'Бадин', 'gmt_offset' => -5,
			), array(
				'id' => 510, 'country_id' => 14, 'name' => 'Badu Island', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 511, 'country_id' => 44, 'name' => 'Bafoussam', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 512, 'country_id' => 38, 'name' => 'Bagan', 'name_ru' => 'Баган', 'gmt_offset' => 0,
			), array(
				'id' => 513, 'country_id' => 168, 'name' => 'Baganga', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 514, 'country_id' => 136, 'name' => 'Bagani', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 515, 'country_id' => 216, 'name' => 'Bagdad', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 516, 'country_id' => 99, 'name' => 'Bagdogra', 'name_ru' => 'Багдогра', 'gmt_offset' => 5.5,
			), array(
				'id' => 517, 'country_id' => 29, 'name' => 'Bage', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 518, 'country_id' => 100, 'name' => 'Baghdad', 'name_ru' => 'Багдад', 'gmt_offset' => 3,
			), array(
				'id'         => 519, 'country_id' => 159, 'name' => 'Baglung', 'name_ru' => 'Баглунг',
				'gmt_offset' => 5.7000000000000002,
			), array(
				'id' => 520, 'country_id' => 35, 'name' => 'Bagotville', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 521, 'country_id' => 168, 'name' => 'Baguio', 'name_ru' => 'Багуйо', 'gmt_offset' => 8,
			), array(
				'id' => 522, 'country_id' => 65, 'name' => 'Bahar Dar', 'name_ru' => 'Бахар-Дар', 'gmt_offset' => 3,
			), array(
				'id'         => 523, 'country_id' => 169, 'name' => 'Bahawalnagar', 'name_ru' => 'Бахавалнагар',
				'gmt_offset' => -5,
			), array(
				'id' => 524, 'country_id' => 169, 'name' => 'Bahawalpur', 'name_ru' => 'Бахавалпур', 'gmt_offset' => -5,
			), array(
				'id'         => 525, 'country_id' => 148, 'name' => 'Bahia Angeles', 'name_ru' => 'Бахиа-Ангелес',
				'gmt_offset' => 8,
			), array(
				'id' => 526, 'country_id' => 11, 'name' => 'Bahia Blanca', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id'         => 527, 'country_id' => 46, 'name' => 'Bahia Cupica', 'name_ru' => 'Бахья-Купика',
				'gmt_offset' => 5,
			), array(
				'id' => 528, 'country_id' => 59, 'name' => 'Bahia De Caraquez', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 529, 'country_id' => 175, 'name' => 'Bahia Negra', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 530, 'country_id' => 164, 'name' => 'Bahia Pinas', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 531, 'country_id' => 46, 'name' => 'Bahia Solano', 'name_ru' => 'Бахья-Солано',
				'gmt_offset' => 5,
			), array(
				'id' => 532, 'country_id' => 101, 'name' => 'Bahregan', 'name_ru' => 'Бахреган', 'gmt_offset' => 3.5,
			), array(
				'id' => 533, 'country_id' => 178, 'name' => 'Baia Mare', 'name_ru' => 'Байя Маре', 'gmt_offset' => 2,
			), array(
				'id' => 534, 'country_id' => 167, 'name' => 'Baibara', 'name_ru' => 'Байбара', 'gmt_offset' => -10,
			), array(
				'id' => 535, 'country_id' => 193, 'name' => 'Baidoa', 'name_ru' => 'Байдоа', 'gmt_offset' => -3,
			), array(
				'id' => 536, 'country_id' => 35, 'name' => 'Baie Comeau', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 537, 'country_id' => 35, 'name' => 'Baie Johan Beetz', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 538, 'country_id' => 167, 'name' => 'Baimuru', 'name_ru' => 'Беймуру', 'gmt_offset' => -10,
			), array(
				'id' => 539, 'country_id' => 216, 'name' => 'Bainbridge', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 540, 'country_id' => 167, 'name' => 'Baindoung', 'name_ru' => 'Байндунг', 'gmt_offset' => -10,
			), array(
				'id' => 541, 'country_id' => 14, 'name' => 'Bairnsdale', 'name_ru' => NULL, 'gmt_offset' => 11,
			), array(
				'id'         => 542, 'country_id' => 159, 'name' => 'Baitadi', 'name_ru' => 'Байтади',
				'gmt_offset' => -5.7999999999999998,
			), array(
				'id' => 543, 'country_id' => 95, 'name' => 'Bajawa', 'name_ru' => 'Баджава', 'gmt_offset' => -8,
			), array(
				'id'         => 544, 'country_id' => 159, 'name' => 'Bajhang', 'name_ru' => 'Баджханг',
				'gmt_offset' => -5.7999999999999998,
			), array(
				'id' => 545, 'country_id' => 150, 'name' => 'Bajone', 'name_ru' => 'Бахоне', 'gmt_offset' => -2,
			), array(
				'id'         => 546, 'country_id' => 159, 'name' => 'Bajura', 'name_ru' => 'Баджура',
				'gmt_offset' => -5.7999999999999998,
			), array(
				'id' => 547, 'country_id' => 149, 'name' => 'Bakalalan', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 548, 'country_id' => 192, 'name' => 'Bakel', 'name_ru' => 'Бакель', 'gmt_offset' => 0,
			), array(
				'id' => 549, 'country_id' => 216, 'name' => 'Baker', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id'         => 550, 'country_id' => 216, 'name' => 'Baker Island',
				'name_ru'    => 'Бейкер-Айленд, шт. Аляска', 'gmt_offset' => 0,
			), array(
				'id' => 551, 'country_id' => 35, 'name' => 'Baker Lake', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id'         => 552, 'country_id' => 216, 'name' => 'Bakersfield', 'name_ru' => 'Бейкерсфилд',
				'gmt_offset' => -8,
			), array(
				'id'         => 553, 'country_id' => 102, 'name' => 'Bakkafjordur', 'name_ru' => 'Баккафьордур',
				'gmt_offset' => 0,
			), array(
				'id' => 554, 'country_id' => 38, 'name' => 'Bakouma', 'name_ru' => 'Бакума', 'gmt_offset' => -1,
			), array(
				'id' => 555, 'country_id' => 16, 'name' => 'Baku', 'name_ru' => 'Баку', 'gmt_offset' => 5,
			), array(
				'id' => 556, 'country_id' => 100, 'name' => 'Balad', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 557, 'country_id' => 180, 'name' => 'Balakovo', 'name_ru' => 'Балаково', 'gmt_offset' => 4,
			), array(
				'id' => 558, 'country_id' => 183, 'name' => 'Balalae', 'name_ru' => 'Балале', 'gmt_offset' => -11,
			), array(
				'id' => 559, 'country_id' => 164, 'name' => 'Balboa', 'name_ru' => 'Балбоа', 'gmt_offset' => -5,
			), array(
				'id' => 560, 'country_id' => 14, 'name' => 'Balcanoona', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 561, 'country_id' => 168, 'name' => 'Baler', 'name_ru' => 'Балер', 'gmt_offset' => 8,
			), array(
				'id' => 562, 'country_id' => 14, 'name' => 'Balgo Hills', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 563, 'country_id' => 118, 'name' => 'Balhash', 'name_ru' => 'Балхаш', 'gmt_offset' => 6,
			), array(
				'id' => 564, 'country_id' => 167, 'name' => 'Bali', 'name_ru' => 'Бали', 'gmt_offset' => -10,
			), array(
				'id' => 565, 'country_id' => 208, 'name' => 'Balikesir', 'name_ru' => 'Балыкесир', 'gmt_offset' => 2,
			), array(
				'id' => 566, 'country_id' => 95, 'name' => 'Balikpapan', 'name_ru' => 'Баликпапан', 'gmt_offset' => 8,
			), array(
				'id' => 567, 'country_id' => 167, 'name' => 'Balimo', 'name_ru' => 'Балимо', 'gmt_offset' => -10,
			), array(
				'id' => 568, 'country_id' => 14, 'name' => 'Ballina', 'name_ru' => 'Баллина', 'gmt_offset' => 10,
			), array(
				'id' => 569, 'country_id' => 73, 'name' => 'Bally Kelly', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 570, 'country_id' => 43, 'name' => 'Balmaceda', 'name_ru' => 'Балмаседа', 'gmt_offset' => -3,
			), array(
				'id' => 571, 'country_id' => 14, 'name' => 'Balranald', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 572, 'country_id' => 29, 'name' => 'Balsas', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 573, 'country_id' => 216, 'name' => 'Baltimore', 'name_ru' => 'Балтимор', 'gmt_offset' => -5,
			), array(
				'id'         => 574, 'country_id' => 216, 'name' => 'Baltimore/Washington', 'name_ru' => NULL,
				'gmt_offset' => -5,
			), array(
				'id' => 575, 'country_id' => 53, 'name' => 'Baltrum Island', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 576, 'country_id' => 99, 'name' => 'Balurghat', 'name_ru' => 'Балургат', 'gmt_offset' => 5.5,
			), array(
				'id' => 577, 'country_id' => 101, 'name' => 'Bam', 'name_ru' => NULL, 'gmt_offset' => 3.5,
			), array(
				'id' => 578, 'country_id' => 14, 'name' => 'Bamaga, Queensland', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 579, 'country_id' => 136, 'name' => 'Bamako', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 580, 'country_id' => 38, 'name' => 'Bambari', 'name_ru' => 'Бамбари', 'gmt_offset' => 1,
			), array(
				'id' => 581, 'country_id' => 65, 'name' => 'Bambu', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 582, 'country_id' => 108, 'name' => 'Bamburi', 'name_ru' => 'Бамбури', 'gmt_offset' => 3,
			), array(
				'id' => 583, 'country_id' => 44, 'name' => 'Bamenda', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 584, 'country_id' => 100, 'name' => 'Bamerny', 'name_ru' => 'Бамерни', 'gmt_offset' => 3,
			), array(
				'id' => 585, 'country_id' => 35, 'name' => 'Bamfield', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 586, 'country_id' => 3, 'name' => 'Bamiyan', 'name_ru' => 'Бамиан', 'gmt_offset' => -4.5,
			), array(
				'id' => 587, 'country_id' => 167, 'name' => 'Bamu', 'name_ru' => 'Баму', 'gmt_offset' => -10,
			), array(
				'id' => 588, 'country_id' => 119, 'name' => 'Ban Houei', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 589, 'country_id' => 202, 'name' => 'Ban Mak Khaen', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 590, 'country_id' => 95, 'name' => 'Banaina', 'name_ru' => 'Банаина', 'gmt_offset' => -8,
			), array(
				'id' => 591, 'country_id' => 95, 'name' => 'Banda Aceh', 'name_ru' => 'Банда Асе', 'gmt_offset' => 7,
			), array(
				'id' => 592, 'country_id' => 95, 'name' => 'Bandanaira', 'name_ru' => 'Банданаира', 'gmt_offset' => -9,
			), array(
				'id'         => 593, 'country_id' => 101, 'name' => 'Bandar Abbas', 'name_ru' => 'Бандар-Аббас',
				'gmt_offset' => 3.5,
			), array(
				'id'         => 594, 'country_id' => 95, 'name' => 'Bandar Lampung', 'name_ru' => 'Бандар-Лампунг',
				'gmt_offset' => 7,
			), array(
				'id'         => 595, 'country_id' => 101, 'name' => 'Bandar Lengeh', 'name_ru' => 'Бандар-Ленге',
				'gmt_offset' => 3.5,
			), array(
				'id' => 596, 'country_id' => 101, 'name' => 'Bandar Mahshahr', 'name_ru' => NULL, 'gmt_offset' => 3.5,
			), array(
				'id'         => 597, 'country_id' => 27, 'name' => 'Bandar Seri Begawan',
				'name_ru'    => 'Бандар Сери Бегаван', 'gmt_offset' => 8,
			), array(
				'id' => 598, 'country_id' => 208, 'name' => 'Bandirma', 'name_ru' => 'Бандирма', 'gmt_offset' => 2,
			), array(
				'id' => 599, 'country_id' => 216, 'name' => 'Bandon', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 600, 'country_id' => 230, 'name' => 'Bandundu', 'name_ru' => 'Бандунду', 'gmt_offset' => 1,
			), array(
				'id' => 601, 'country_id' => 95, 'name' => 'Bandung', 'name_ru' => 'Бандунг', 'gmt_offset' => 7,
			), array(
				'id' => 602, 'country_id' => 35, 'name' => 'Banff', 'name_ru' => 'Банфф', 'gmt_offset' => -7,
			), array(
				'id' => 603, 'country_id' => 21, 'name' => 'Banfora', 'name_ru' => 'Банфора', 'gmt_offset' => 0,
			), array(
				'id' => 604, 'country_id' => 99, 'name' => 'Bangalore', 'name_ru' => 'Бангалор', 'gmt_offset' => 5.5,
			), array(
				'id' => 605, 'country_id' => 38, 'name' => 'Bangassou', 'name_ru' => 'Бангассу', 'gmt_offset' => 1,
			), array(
				'id' => 606, 'country_id' => 45, 'name' => 'Bangda', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 607, 'country_id' => 202, 'name' => 'Bangkok', 'name_ru' => 'Бангкок', 'gmt_offset' => 7,
			), array(
				'id' => 608, 'country_id' => 216, 'name' => 'Bangor', 'name_ru' => 'Бангор', 'gmt_offset' => -5,
			), array(
				'id' => 609, 'country_id' => 38, 'name' => 'Bangui', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 610, 'country_id' => 14, 'name' => 'Baniyala', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 611, 'country_id' => 17, 'name' => 'Banja Luka', 'name_ru' => 'Баня-Лука', 'gmt_offset' => 1,
			), array(
				'id'         => 612, 'country_id' => 95, 'name' => 'Banjarmasin', 'name_ru' => 'Банджармасин',
				'gmt_offset' => 8,
			), array(
				'id' => 613, 'country_id' => 81, 'name' => 'Banjul', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 614, 'country_id' => 223, 'name' => 'Banmethuot', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 615, 'country_id' => 216, 'name' => 'Banning', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 616, 'country_id' => 169, 'name' => 'Bannu', 'name_ru' => 'Банну', 'gmt_offset' => 5,
			), array(
				'id' => 617, 'country_id' => 96, 'name' => 'Bantry', 'name_ru' => 'Бантри', 'gmt_offset' => 0,
			), array(
				'id' => 618, 'country_id' => 167, 'name' => 'Banz', 'name_ru' => 'Банц', 'gmt_offset' => -10,
			), array(
				'id' => 619, 'country_id' => 45, 'name' => 'Baoshan', 'name_ru' => 'Баошань', 'gmt_offset' => -8,
			), array(
				'id' => 620, 'country_id' => 45, 'name' => 'Baotou', 'name_ru' => 'Баотоу', 'gmt_offset' => -8,
			), array(
				'id' => 621, 'country_id' => 167, 'name' => 'Bapi', 'name_ru' => 'Бапи', 'gmt_offset' => -10,
			), array(
				'id' => 622, 'country_id' => 100, 'name' => 'Baqubah', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 623, 'country_id' => 216, 'name' => 'Bar Harbor', 'name_ru' => 'Бар Харбор', 'gmt_offset' => -5,
			), array(
				'id' => 624, 'country_id' => 48, 'name' => 'Baracoa', 'name_ru' => 'Баракоа', 'gmt_offset' => -5,
			), array(
				'id' => 625, 'country_id' => 57, 'name' => 'Barahona', 'name_ru' => 'Барахона', 'gmt_offset' => -4,
			), array(
				'id' => 626, 'country_id' => 183, 'name' => 'Barakoma', 'name_ru' => 'Баракома', 'gmt_offset' => -11,
			), array(
				'id' => 627, 'country_id' => 89, 'name' => 'Baramita', 'name_ru' => 'Барамита', 'gmt_offset' => 3,
			), array(
				'id' => 628, 'country_id' => 216, 'name' => 'Baranof', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 629, 'country_id' => 29, 'name' => 'Barbelos', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 630, 'country_id' => 216, 'name' => 'Barbers Point', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 631, 'country_id' => 4, 'name' => 'Barbuda', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 632, 'country_id' => 14, 'name' => 'Barcaldine', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 633, 'country_id' => 64, 'name' => 'Barcelona', 'name_ru' => 'Барселона', 'gmt_offset' => 1,
			), array(
				'id'         => 634, 'country_id' => 71, 'name' => 'Barcelonnette', 'name_ru' => 'Барселонетта',
				'gmt_offset' => 1,
			), array(
				'id' => 635, 'country_id' => 193, 'name' => 'Bardera', 'name_ru' => 'Бардера', 'gmt_offset' => -3,
			), array(
				'id' => 636, 'country_id' => 216, 'name' => 'Bardstown, KY', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 637, 'country_id' => 158, 'name' => 'Bardufoss', 'name_ru' => 'Бордуфос', 'gmt_offset' => 1,
			), array(
				'id' => 638, 'country_id' => 99, 'name' => 'Bareli', 'name_ru' => NULL, 'gmt_offset' => -5.5,
			), array(
				'id' => 639, 'country_id' => 103, 'name' => 'Bari', 'name_ru' => 'Бари', 'gmt_offset' => 1,
			), array(
				'id' => 640, 'country_id' => 220, 'name' => 'Barinas', 'name_ru' => 'Баринас', 'gmt_offset' => -4,
			), array(
				'id' => 641, 'country_id' => 149, 'name' => 'Bario', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 642, 'country_id' => 19, 'name' => 'Barisal', 'name_ru' => 'Барисал', 'gmt_offset' => -6,
			), array(
				'id' => 643, 'country_id' => 14, 'name' => 'Barkly Downs', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 644, 'country_id' => 180, 'name' => 'Barnaul', 'name_ru' => 'Барнаул', 'gmt_offset' => 7,
			), array(
				'id' => 645, 'country_id' => 216, 'name' => 'Barnwell, SC', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 646, 'country_id' => 183, 'name' => 'Barora', 'name_ru' => 'Барора', 'gmt_offset' => -11,
			), array(
				'id'         => 647, 'country_id' => 220, 'name' => 'Barquisimeto', 'name_ru' => 'Баркисимето',
				'gmt_offset' => -4,
			), array(
				'id' => 648, 'country_id' => 73, 'name' => 'Barra', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 649, 'country_id' => 47, 'name' => 'Barra Colorado', 'name_ru' => 'Барра-Колорадо',
				'gmt_offset' => 6,
			), array(
				'id' => 650, 'country_id' => 29, 'name' => 'Barra Do Corda', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 651, 'country_id' => 29, 'name' => 'Barra Do Garcas', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 652, 'country_id' => 46, 'name' => 'Barranca De Upia', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id'         => 653, 'country_id' => 46, 'name' => 'Barrancabermeja', 'name_ru' => 'Барранкабермежа',
				'gmt_offset' => -5,
			), array(
				'id'         => 654, 'country_id' => 46, 'name' => 'Barrancominas', 'name_ru' => 'Барранкоминас',
				'gmt_offset' => 5,
			), array(
				'id'         => 655, 'country_id' => 46, 'name' => 'Barranquilla', 'name_ru' => 'Барранкуилла',
				'gmt_offset' => -5,
			), array(
				'id' => 656, 'country_id' => 29, 'name' => 'Barreiras', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 657, 'country_id' => 29, 'name' => 'Barreirinhas', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 658, 'country_id' => 29, 'name' => 'Barretos', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 659, 'country_id' => 216, 'name' => 'Barrow', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 660, 'country_id' => 14, 'name' => 'Barrow Island', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 661, 'country_id' => 73, 'name' => 'Barrow-In-Furness', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 662, 'country_id' => 216, 'name' => 'Barter Island', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 663, 'country_id' => 53, 'name' => 'Barth', 'name_ru' => 'Барт', 'gmt_offset' => 1,
			), array(
				'id' => 664, 'country_id' => 89, 'name' => 'Bartica', 'name_ru' => 'Бартика', 'gmt_offset' => -4,
			), array(
				'id' => 665, 'country_id' => 216, 'name' => 'Bartlesville', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 666, 'country_id' => 216, 'name' => 'Bartletts', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 667, 'country_id' => 216, 'name' => 'Bartow', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 668, 'country_id' => 138, 'name' => 'Baruun-Urt', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 669, 'country_id' => 230, 'name' => 'Basankusu', 'name_ru' => 'Базанкусу', 'gmt_offset' => -1,
			), array(
				'id' => 670, 'country_id' => 168, 'name' => 'Basco', 'name_ru' => 'Баско', 'gmt_offset' => 8,
			), array(
				'id'         => 671, 'country_id' => 71, 'name' => 'Basel Mulhouse Freiburg', 'name_ru' => NULL,
				'gmt_offset' => 1,
			), array(
				'id' => 672, 'country_id' => 37, 'name' => 'Basongo', 'name_ru' => 'Базонго', 'gmt_offset' => 0,
			), array(
				'id' => 673, 'country_id' => 100, 'name' => 'Basra', 'name_ru' => NULL, 'gmt_offset' => 3.5,
			), array(
				'id' => 674, 'country_id' => 83, 'name' => 'Basse Terre', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 675, 'country_id' => 137, 'name' => 'Bassein', 'name_ru' => 'Бассейн', 'gmt_offset' => -6.5,
			), array(
				'id'         => 676, 'country_id' => 113, 'name' => 'Basseterre, St. Kitts Island', 'name_ru' => NULL,
				'gmt_offset' => -4,
			), array(
				'id' => 677, 'country_id' => 71, 'name' => 'Bastia', 'name_ru' => 'Бастия', 'gmt_offset' => 1,
			), array(
				'id' => 678, 'country_id' => 84, 'name' => 'Bata', 'name_ru' => 'Бата', 'gmt_offset' => -1,
			), array(
				'id' => 679, 'country_id' => 95, 'name' => 'Batam', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 680, 'country_id' => 38, 'name' => 'Batangafo', 'name_ru' => 'Батангафо', 'gmt_offset' => -1,
			), array(
				'id' => 681, 'country_id' => 14, 'name' => 'Batavia Downs', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 682, 'country_id' => 216, 'name' => 'Batesville', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 683, 'country_id' => 14, 'name' => 'Bathurst', 'name_ru' => 'Батерст', 'gmt_offset' => -10,
			), array(
				'id' => 684, 'country_id' => 14, 'name' => 'Bathurst Island', 'name_ru' => NULL, 'gmt_offset' => 9.5,
			), array(
				'id' => 685, 'country_id' => 208, 'name' => 'Batman', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 686, 'country_id' => 58, 'name' => 'Batna', 'name_ru' => 'Батна', 'gmt_offset' => 1,
			), array(
				'id' => 687, 'country_id' => 95, 'name' => 'Batom', 'name_ru' => 'Батом', 'gmt_offset' => -9,
			), array(
				'id' => 688, 'country_id' => 216, 'name' => 'Baton Rouge', 'name_ru' => 'Батон Руж', 'gmt_offset' => -6,
			), array(
				'id' => 689, 'country_id' => 44, 'name' => 'Batouri', 'name_ru' => 'Батури', 'gmt_offset' => 1,
			), array(
				'id' => 690, 'country_id' => 158, 'name' => 'Batsfjord', 'name_ru' => 'Ботсфьорд', 'gmt_offset' => 1,
			), array(
				'id' => 691, 'country_id' => 110, 'name' => 'Battambang', 'name_ru' => 'Баттамбанг', 'gmt_offset' => 7,
			), array(
				'id' => 692, 'country_id' => 122, 'name' => 'Batticaloa', 'name_ru' => NULL, 'gmt_offset' => 5.5,
			), array(
				'id' => 693, 'country_id' => 216, 'name' => 'Battle Creek', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 694, 'country_id' => 216, 'name' => 'Battle Mountain', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 695, 'country_id' => 95, 'name' => 'Batu Licin', 'name_ru' => 'Бату-Личин', 'gmt_offset' => 8,
			), array(
				'id' => 696, 'country_id' => 75, 'name' => 'Batumi', 'name_ru' => 'Батуми', 'gmt_offset' => 4,
			), array(
				'id' => 697, 'country_id' => 183, 'name' => 'Batuna', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 698, 'country_id' => 95, 'name' => 'Baubau', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 699, 'country_id' => 207, 'name' => 'Baucau', 'name_ru' => 'Баукау', 'gmt_offset' => 9,
			), array(
				'id' => 700, 'country_id' => 155, 'name' => 'Bauchi', 'name_ru' => 'Баучи', 'gmt_offset' => -1,
			), array(
				'id' => 701, 'country_id' => 216, 'name' => 'Baudette', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 702, 'country_id' => 28, 'name' => 'Baures', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 703, 'country_id' => 29, 'name' => 'Bauru', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 704, 'country_id' => 167, 'name' => 'Bawan', 'name_ru' => 'Баван', 'gmt_offset' => -10,
			), array(
				'id' => 705, 'country_id' => 216, 'name' => 'Bay City', 'name_ru' => 'Бэй Сити', 'gmt_offset' => -6,
			), array(
				'id' => 706, 'country_id' => 48, 'name' => 'Bayamo', 'name_ru' => 'Байамо', 'gmt_offset' => -5,
			), array(
				'id' => 707, 'country_id' => 138, 'name' => 'Bayankhongor', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 708, 'country_id' => 53, 'name' => 'Bayreuth', 'name_ru' => 'Байройт', 'gmt_offset' => 1,
			), array(
				'id' => 709, 'country_id' => 216, 'name' => 'Baytown', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 710, 'country_id' => 150, 'name' => 'Bazaruto Island', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 711, 'country_id' => 14, 'name' => 'Beagle Bay', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 712, 'country_id' => 133, 'name' => 'Bealanana', 'name_ru' => 'Беаланана', 'gmt_offset' => -3,
			), array(
				'id' => 713, 'country_id' => 216, 'name' => 'Bear Creek', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 714, 'country_id' => 35, 'name' => 'Bearskin Lake', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 715, 'country_id' => 216, 'name' => 'Beatrice', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 716, 'country_id' => 35, 'name' => 'Beatton River', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 717, 'country_id' => 216, 'name' => 'Beatty', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 718, 'country_id' => 216, 'name' => 'Beaufort', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 719, 'country_id' => 216, 'name' => 'Beaumont', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 720, 'country_id' => 216, 'name' => 'Beaver', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 721, 'country_id' => 73, 'name' => 'Beaver Creek', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 722, 'country_id' => 216, 'name' => 'Beaver Falls', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 723, 'country_id' => 216, 'name' => 'Beaver Inlet', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 724, 'country_id' => 58, 'name' => 'Bechar', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 725, 'country_id' => 216, 'name' => 'Beckley', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 726, 'country_id' => 216, 'name' => 'Bedford', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 727, 'country_id' => 14, 'name' => 'Bedford Downs', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 728, 'country_id' => 216, 'name' => 'Bedford/Hanscom', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 729, 'country_id' => 14, 'name' => 'Bedourie', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 730, 'country_id' => 221, 'name' => 'Beef Island', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 731, 'country_id' => 97, 'name' => 'Beer Sheba', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 732, 'country_id' => 216, 'name' => 'Beeville', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 733, 'country_id' => 133, 'name' => 'Befandriana', 'name_ru' => 'Бефандриана',
				'gmt_offset' => -3,
			), array(
				'id' => 734, 'country_id' => 65, 'name' => 'Beica', 'name_ru' => 'Бейка', 'gmt_offset' => 3,
			), array(
				'id' => 735, 'country_id' => 128, 'name' => 'Beida', 'name_ru' => 'Бейда', 'gmt_offset' => -2,
			), array(
				'id' => 736, 'country_id' => 227, 'name' => 'Beidah', 'name_ru' => 'Бейда', 'gmt_offset' => 3,
			), array(
				'id' => 737, 'country_id' => 45, 'name' => 'Beihai', 'name_ru' => 'Бейхай', 'gmt_offset' => -8,
			), array(
				'id' => 738, 'country_id' => 227, 'name' => 'Beihan', 'name_ru' => 'Бейхан', 'gmt_offset' => -3,
			), array(
				'id' => 739, 'country_id' => 45, 'name' => 'Beijing', 'name_ru' => 'Пекин', 'gmt_offset' => 8,
			), array(
				'id' => 740, 'country_id' => 150, 'name' => 'Beira', 'name_ru' => 'Бейра', 'gmt_offset' => 2,
			), array(
				'id' => 741, 'country_id' => 120, 'name' => 'Beirut', 'name_ru' => 'Бейрут', 'gmt_offset' => 2,
			), array(
				'id' => 742, 'country_id' => 58, 'name' => 'Bejaia', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 743, 'country_id' => 133, 'name' => 'Bekily', 'name_ru' => 'Бекили', 'gmt_offset' => -3,
			), array(
				'id' => 744, 'country_id' => 149, 'name' => 'Belaga', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 745, 'country_id' => 158, 'name' => 'Belburn', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 746, 'country_id' => 29, 'name' => 'Belem', 'name_ru' => 'Белем', 'gmt_offset' => -3,
			), array(
				'id' => 747, 'country_id' => 152, 'name' => 'Belep Island', 'name_ru' => NULL, 'gmt_offset' => -11,
			), array(
				'id' => 748, 'country_id' => 73, 'name' => 'Belfast', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 749, 'country_id' => 71, 'name' => 'Belfort', 'name_ru' => 'Белфорт', 'gmt_offset' => 1,
			), array(
				'id' => 750, 'country_id' => 99, 'name' => 'Belgaum', 'name_ru' => 'Белгаум', 'gmt_offset' => 5.5,
			), array(
				'id' => 751, 'country_id' => 180, 'name' => 'Belgorod', 'name_ru' => 'Белгород', 'gmt_offset' => 4,
			), array(
				'id' => 752, 'country_id' => 179, 'name' => 'Belgrade', 'name_ru' => 'Белград', 'gmt_offset' => 1,
			), array(
				'id' => 753, 'country_id' => 34, 'name' => 'Belize City', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 754, 'country_id' => 216, 'name' => 'Bell Island', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 755, 'country_id' => 35, 'name' => 'Bella Bella', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 756, 'country_id' => 35, 'name' => 'Bella Coola, BC', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id'         => 757, 'country_id' => 217, 'name' => 'Bella Union', 'name_ru' => 'Белла-Юнион',
				'gmt_offset' => -3,
			), array(
				'id' => 758, 'country_id' => 123, 'name' => 'Bella Yella', 'name_ru' => 'Белла-Елла', 'gmt_offset' => 0,
			), array(
				'id' => 759, 'country_id' => 216, 'name' => 'Bellaire', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 760, 'country_id' => 99, 'name' => 'Bellary', 'name_ru' => 'Беллари', 'gmt_offset' => 5.5,
			), array(
				'id' => 761, 'country_id' => 165, 'name' => 'Bellavista', 'name_ru' => 'Беллависта', 'gmt_offset' => -5,
			), array(
				'id' => 762, 'country_id' => 216, 'name' => 'Belle Chasse', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 763, 'country_id' => 216, 'name' => 'Bellefonte', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 764, 'country_id' => 216, 'name' => 'Belleville', 'name_ru' => 'Белльвиль', 'gmt_offset' => -6,
			), array(
				'id' => 765, 'country_id' => 216, 'name' => 'Bellingham', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 766, 'country_id' => 183, 'name' => 'Bellona', 'name_ru' => 'Беллона', 'gmt_offset' => -11,
			), array(
				'id' => 767, 'country_id' => 103, 'name' => 'Belluno', 'name_ru' => 'Беллуно', 'gmt_offset' => 1,
			), array(
				'id'         => 768, 'country_id' => 216, 'name' => 'Belmar - Farmingdale', 'name_ru' => NULL,
				'gmt_offset' => -5,
			), array(
				'id' => 769, 'country_id' => 29, 'name' => 'Belmonte', 'name_ru' => 'Бельмонте', 'gmt_offset' => -3,
			), array(
				'id' => 770, 'country_id' => 34, 'name' => 'Belmopan', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 771, 'country_id' => 96, 'name' => 'Belmullet', 'name_ru' => 'Белмаллет', 'gmt_offset' => 0,
			), array(
				'id' => 772, 'country_id' => 133, 'name' => 'Belo', 'name_ru' => 'Бело', 'gmt_offset' => 3,
			), array(
				'id'         => 773, 'country_id' => 29, 'name' => 'Belo Horizonte', 'name_ru' => 'Бело Хоризонте',
				'gmt_offset' => -2,
			), array(
				'id' => 774, 'country_id' => 180, 'name' => 'Beloreck', 'name_ru' => 'Белорецк', 'gmt_offset' => -2,
			), array(
				'id' => 775, 'country_id' => 131, 'name' => 'Beltsy', 'name_ru' => 'Бельцы', 'gmt_offset' => 2,
			), array(
				'id' => 776, 'country_id' => 216, 'name' => 'Beluga', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 777, 'country_id' => 73, 'name' => 'Bembridge', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 778, 'country_id' => 89, 'name' => 'Bemichi', 'name_ru' => 'Бемичи', 'gmt_offset' => 3,
			), array(
				'id' => 779, 'country_id' => 216, 'name' => 'Bemidji', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 780, 'country_id' => 14, 'name' => 'Benalla', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 781, 'country_id' => 73, 'name' => 'Benbecula', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 782, 'country_id' => 14, 'name' => 'Bendigo', 'name_ru' => 'Бендиго', 'gmt_offset' => 10,
			), array(
				'id' => 783, 'country_id' => 45, 'name' => 'Bengbu', 'name_ru' => 'Бенгбу', 'gmt_offset' => 0,
			), array(
				'id' => 784, 'country_id' => 128, 'name' => 'Benghazi', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 785, 'country_id' => 95, 'name' => 'Bengkulu', 'name_ru' => 'Бенгкулу', 'gmt_offset' => 7,
			), array(
				'id' => 786, 'country_id' => 9, 'name' => 'Benguela', 'name_ru' => 'Бенгела', 'gmt_offset' => 1,
			), array(
				'id' => 787, 'country_id' => 150, 'name' => 'Benguera Island', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 788, 'country_id' => 37, 'name' => 'Beni', 'name_ru' => 'Бени', 'gmt_offset' => 0,
			), array(
				'id' => 789, 'country_id' => 155, 'name' => 'Benin City', 'name_ru' => 'Бенин-Сити', 'gmt_offset' => 1,
			), array(
				'id' => 790, 'country_id' => 95, 'name' => 'Benjina', 'name_ru' => 'Бенджина', 'gmt_offset' => -9,
			), array(
				'id' => 791, 'country_id' => 216, 'name' => 'Bennettsville', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 792, 'country_id' => 167, 'name' => 'Bensbach', 'name_ru' => 'Бенсбах', 'gmt_offset' => 10,
			), array(
				'id' => 793, 'country_id' => 216, 'name' => 'Benson', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 794, 'country_id' => 29, 'name' => 'Bento Goncalves', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id'         => 795, 'country_id' => 216, 'name' => 'Benton Harbor', 'name_ru' => 'Бентон Харбор',
				'gmt_offset' => -5,
			), array(
				'id' => 796, 'country_id' => 122, 'name' => 'Bentota River', 'name_ru' => NULL, 'gmt_offset' => 5.5,
			), array(
				'id' => 797, 'country_id' => 107, 'name' => 'Beppu', 'name_ru' => 'Беппу', 'gmt_offset' => 9,
			), array(
				'id' => 798, 'country_id' => 219, 'name' => 'Bequia', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 799, 'country_id' => 132, 'name' => 'Berane', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 800, 'country_id' => 65, 'name' => 'Berbera', 'name_ru' => 'Бербера', 'gmt_offset' => 3,
			), array(
				'id' => 801, 'country_id' => 38, 'name' => 'Berberati', 'name_ru' => 'Берберати', 'gmt_offset' => 1,
			), array(
				'id' => 802, 'country_id' => 213, 'name' => 'Berdyansk', 'name_ru' => 'Бердянск', 'gmt_offset' => 2,
			), array(
				'id' => 803, 'country_id' => 41, 'name' => 'Bereby', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 804, 'country_id' => 167, 'name' => 'Bereina', 'name_ru' => 'Берейна', 'gmt_offset' => -10,
			), array(
				'id' => 805, 'country_id' => 35, 'name' => 'Berens River', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 806, 'country_id' => 103, 'name' => 'Bergamo', 'name_ru' => 'Бергамо', 'gmt_offset' => 1,
			), array(
				'id' => 807, 'country_id' => 158, 'name' => 'Bergen', 'name_ru' => 'Берген', 'gmt_offset' => 1,
			), array(
				'id'         => 808, 'country_id' => 157, 'name' => 'Bergen Op Zoom', 'name_ru' => 'Берген Оп Зоом',
				'gmt_offset' => 1,
			), array(
				'id' => 809, 'country_id' => 71, 'name' => 'Bergerac', 'name_ru' => 'Бержерак', 'gmt_offset' => 1,
			), array(
				'id' => 810, 'country_id' => 216, 'name' => 'Berkeley', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 811, 'country_id' => 158, 'name' => 'Berlevag', 'name_ru' => 'Берлевог', 'gmt_offset' => 1,
			), array(
				'id' => 812, 'country_id' => 53, 'name' => 'Berlin', 'name_ru' => 'Берлин', 'gmt_offset' => 1,
			), array(
				'id' => 813, 'country_id' => 11, 'name' => 'Bermejo', 'name_ru' => 'Бермехо', 'gmt_offset' => -3,
			), array(
				'id' => 814, 'country_id' => 26, 'name' => 'Bermuda', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 815, 'country_id' => 40, 'name' => 'Berne', 'name_ru' => 'Берне', 'gmt_offset' => 1,
			), array(
				'id' => 816, 'country_id' => 133, 'name' => 'Beroroha', 'name_ru' => 'Беророха', 'gmt_offset' => -3,
			), array(
				'id' => 817, 'country_id' => 111, 'name' => 'Beru', 'name_ru' => 'Беру', 'gmt_offset' => 12,
			), array(
				'id' => 818, 'country_id' => 167, 'name' => 'Besakoa', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 819, 'country_id' => 133, 'name' => 'Besalampy', 'name_ru' => 'Бесалампи', 'gmt_offset' => 3,
			), array(
				'id' => 820, 'country_id' => 216, 'name' => 'Bethel', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 821, 'country_id' => 216, 'name' => 'Bethpage', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 822, 'country_id' => 133, 'name' => 'Betioky', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 823, 'country_id' => 14, 'name' => 'Betoota', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 824, 'country_id' => 39, 'name' => 'Betou', 'name_ru' => 'Бету', 'gmt_offset' => -1,
			), array(
				'id' => 825, 'country_id' => 216, 'name' => 'Bettles', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 826, 'country_id' => 14, 'name' => 'Beverley Springs', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 827, 'country_id' => 216, 'name' => 'Beverly', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 828, 'country_id' => 167, 'name' => 'Bewani', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 829, 'country_id' => 71, 'name' => 'Beziers', 'name_ru' => 'Безьер', 'gmt_offset' => 1,
			), array(
				'id' => 830, 'country_id' => 159, 'name' => 'Bhadrapur', 'name_ru' => 'Бхадрапур', 'gmt_offset' => 5.5,
			), array(
				'id'         => 831, 'country_id' => 159, 'name' => 'Bhairawa', 'name_ru' => 'Бхайрава',
				'gmt_offset' => 5.7000000000000002,
			), array(
				'id' => 832, 'country_id' => 137, 'name' => 'Bhamo', 'name_ru' => 'Бамо', 'gmt_offset' => -6.5,
			), array(
				'id'         => 833, 'country_id' => 159, 'name' => 'Bharatpur', 'name_ru' => 'Бхаратпур',
				'gmt_offset' => 5.7000000000000002,
			), array(
				'id' => 834, 'country_id' => 99, 'name' => 'Bhatinda', 'name_ru' => 'Бхатинда', 'gmt_offset' => -5.5,
			), array(
				'id' => 835, 'country_id' => 99, 'name' => 'Bhavnagar', 'name_ru' => 'Бхавнагар', 'gmt_offset' => 5.5,
			), array(
				'id'         => 836, 'country_id' => 159, 'name' => 'Bhojpur', 'name_ru' => 'Бхойпур',
				'gmt_offset' => 5.7000000000000002,
			), array(
				'id' => 837, 'country_id' => 99, 'name' => 'Bhopal', 'name_ru' => 'Бхопал', 'gmt_offset' => 5.5,
			), array(
				'id'         => 838, 'country_id' => 99, 'name' => 'Bhubaneswar', 'name_ru' => 'Бхубанесвар',
				'gmt_offset' => 5.5,
			), array(
				'id' => 839, 'country_id' => 99, 'name' => 'Bhuj', 'name_ru' => 'Бхудж', 'gmt_offset' => 5.5,
			), array(
				'id' => 840, 'country_id' => 99, 'name' => 'Bhuntar Kullu.', 'name_ru' => NULL, 'gmt_offset' => 5.5,
			), array(
				'id' => 841, 'country_id' => 216, 'name' => 'Bhurban', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 842, 'country_id' => 95, 'name' => 'Biak', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 843, 'country_id' => 167, 'name' => 'Bialla', 'name_ru' => 'Биалла', 'gmt_offset' => -10,
			), array(
				'id' => 844, 'country_id' => 167, 'name' => 'Biangabip', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 845, 'country_id' => 71, 'name' => 'Biarritz', 'name_ru' => 'Биарриц', 'gmt_offset' => 1,
			), array(
				'id' => 846, 'country_id' => 167, 'name' => 'Biaru', 'name_ru' => 'Биару', 'gmt_offset' => -10,
			), array(
				'id' => 847, 'country_id' => 72, 'name' => 'Biawonque', 'name_ru' => 'Биавонке', 'gmt_offset' => 1,
			), array(
				'id' => 848, 'country_id' => 14, 'name' => 'Bickerton Island', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 849, 'country_id' => 53, 'name' => 'Bielefeld', 'name_ru' => 'Билефельд', 'gmt_offset' => 1,
			), array(
				'id' => 850, 'country_id' => 224, 'name' => 'Big Bay', 'name_ru' => 'Биг-Бей', 'gmt_offset' => 11,
			), array(
				'id' => 851, 'country_id' => 35, 'name' => 'Big Bay Marina', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 852, 'country_id' => 35, 'name' => 'Big Bay Yacht Club', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 853, 'country_id' => 216, 'name' => 'Big Bear', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 854, 'country_id' => 14, 'name' => 'Big Bell', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 855, 'country_id' => 34, 'name' => 'Big Creek', 'name_ru' => 'Биг-Крик', 'gmt_offset' => 6,
			), array(
				'id' => 856, 'country_id' => 216, 'name' => 'Big Delta', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 857, 'country_id' => 216, 'name' => 'Big Lake', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 858, 'country_id' => 216, 'name' => 'Big Mountain', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 859, 'country_id' => 216, 'name' => 'Big Piney', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 860, 'country_id' => 216, 'name' => 'Big Rapids', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 861, 'country_id' => 216, 'name' => 'Big Spring', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 862, 'country_id' => 35, 'name' => 'Big Trout', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 863, 'country_id' => 73, 'name' => 'Biggin Hill', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 864, 'country_id' => 99, 'name' => 'Bikaner', 'name_ru' => 'Биканер', 'gmt_offset' => -5.5,
			), array(
				'id'         => 865, 'country_id' => 134, 'name' => 'Bikini Atoll', 'name_ru' => 'Бикини-Атолл',
				'gmt_offset' => 12,
			), array(
				'id' => 866, 'country_id' => 99, 'name' => 'Bilaspur', 'name_ru' => 'Биласпур', 'gmt_offset' => 5.5,
			), array(
				'id' => 867, 'country_id' => 64, 'name' => 'Bilbao', 'name_ru' => 'Билбао', 'gmt_offset' => 1,
			), array(
				'id' => 868, 'country_id' => 102, 'name' => 'Bildudalur', 'name_ru' => 'Билдудалур', 'gmt_offset' => 0,
			), array(
				'id' => 869, 'country_id' => 167, 'name' => 'Biliau', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 870, 'country_id' => 14, 'name' => 'Billiluna', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 871, 'country_id' => 216, 'name' => 'Billings', 'name_ru' => 'Биллингс', 'gmt_offset' => -7,
			), array(
				'id' => 872, 'country_id' => 55, 'name' => 'Billund', 'name_ru' => 'Биллунд', 'gmt_offset' => 1,
			), array(
				'id' => 873, 'country_id' => 14, 'name' => 'Biloela', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 874, 'country_id' => 216, 'name' => 'Biloxi', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 875, 'country_id' => 95, 'name' => 'Bima', 'name_ru' => 'Бима', 'gmt_offset' => 8,
			), array(
				'id' => 876, 'country_id' => 167, 'name' => 'Bimin', 'name_ru' => 'Бимин', 'gmt_offset' => -10,
			), array(
				'id' => 877, 'country_id' => 30, 'name' => 'Bimini', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 878, 'country_id' => 216, 'name' => 'Binghamton, NY', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 879, 'country_id' => 167, 'name' => 'Biniguni', 'name_ru' => 'Бинигуни', 'gmt_offset' => -10,
			), array(
				'id' => 880, 'country_id' => 149, 'name' => 'Bintulu', 'name_ru' => 'Бинтулу', 'gmt_offset' => 8,
			), array(
				'id' => 881, 'country_id' => 95, 'name' => 'Bintuni', 'name_ru' => 'Бинтуни', 'gmt_offset' => -9,
			), array(
				'id' => 882, 'country_id' => 38, 'name' => 'Birao', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id'         => 883, 'country_id' => 159, 'name' => 'Biratnagar', 'name_ru' => 'Биратнагар',
				'gmt_offset' => 5.7000000000000002,
			), array(
				'id' => 884, 'country_id' => 216, 'name' => 'Birch Creek', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id'         => 885, 'country_id' => 184, 'name' => 'Bird Island', 'name_ru' => 'Берд-Айленд',
				'gmt_offset' => 4,
			), array(
				'id'         => 886, 'country_id' => 14, 'name' => 'Birdsville, Queensland', 'name_ru' => 'Бирдсвилл',
				'gmt_offset' => 10,
			), array(
				'id' => 887, 'country_id' => 101, 'name' => 'Birjand', 'name_ru' => 'Бирджанд', 'gmt_offset' => 3.5,
			), array(
				'id' => 888, 'country_id' => 73, 'name' => 'Birmingham', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 889, 'country_id' => 153, 'name' => 'Birni Nkoni', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 890, 'country_id' => 216, 'name' => 'Bisbee', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 891, 'country_id' => 182, 'name' => 'Bisha', 'name_ru' => 'Биша', 'gmt_offset' => 3,
			), array(
				'id' => 892, 'country_id' => 101, 'name' => 'Bishe-kola', 'name_ru' => NULL, 'gmt_offset' => 3.5,
			), array(
				'id' => 893, 'country_id' => 109, 'name' => 'Bishkek', 'name_ru' => 'Бишкек', 'gmt_offset' => 6,
			), array(
				'id' => 894, 'country_id' => 228, 'name' => 'Bisho', 'name_ru' => 'Бишо', 'gmt_offset' => 2,
			), array(
				'id' => 895, 'country_id' => 216, 'name' => 'Bishop', 'name_ru' => 'Бишоп', 'gmt_offset' => -8,
			), array(
				'id' => 896, 'country_id' => 58, 'name' => 'Biskra', 'name_ru' => 'Бискра', 'gmt_offset' => 1,
			), array(
				'id' => 897, 'country_id' => 168, 'name' => 'Bislig', 'name_ru' => 'Бислиг', 'gmt_offset' => -8,
			), array(
				'id' => 898, 'country_id' => 216, 'name' => 'Bismarck', 'name_ru' => 'Бисмарк', 'gmt_offset' => -6,
			), array(
				'id' => 899, 'country_id' => 88, 'name' => 'Bissau', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 900, 'country_id' => 72, 'name' => 'Bitam', 'name_ru' => 'Битам', 'gmt_offset' => 1,
			), array(
				'id' => 901, 'country_id' => 53, 'name' => 'Bitburg', 'name_ru' => 'Битбург', 'gmt_offset' => 1,
			), array(
				'id' => 902, 'country_id' => 14, 'name' => 'Bizant', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 903, 'country_id' => 35, 'name' => 'Black Tickle', 'name_ru' => NULL, 'gmt_offset' => 3.5,
			), array(
				'id' => 904, 'country_id' => 14, 'name' => 'Blackall', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 905, 'country_id' => 73, 'name' => 'Blackpool', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 906, 'country_id' => 216, 'name' => 'Blacksburg', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 907, 'country_id' => 216, 'name' => 'Blackstone', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 908, 'country_id' => 14, 'name' => 'Blackwater', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 909, 'country_id' => 216, 'name' => 'Blackwell', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id'         => 910, 'country_id' => 180, 'name' => 'Blagoveschensk', 'name_ru' => 'Благовещенск',
				'gmt_offset' => 10,
			), array(
				'id' => 911, 'country_id' => 216, 'name' => 'Blaine', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 912, 'country_id' => 216, 'name' => 'Blairsville', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 913, 'country_id' => 216, 'name' => 'Blakely Island', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 914, 'country_id' => 35, 'name' => 'Blanc Sablon', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 915, 'country_id' => 216, 'name' => 'Blanding', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 916, 'country_id' => 147, 'name' => 'Blantyre', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 917, 'country_id' => 162, 'name' => 'Blenheim', 'name_ru' => 'Бленхайм', 'gmt_offset' => 13,
			), array(
				'id' => 918, 'country_id' => 216, 'name' => 'Block Island', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 919, 'country_id' => 102, 'name' => 'Blonduos', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 920, 'country_id' => 35, 'name' => 'Bloodvein', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 921, 'country_id' => 14, 'name' => 'Bloomfield', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 922, 'country_id' => 216, 'name' => 'Bloomington', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id'         => 923, 'country_id' => 216, 'name' => 'Bloomington/Normal, IL', 'name_ru' => NULL,
				'gmt_offset' => -6,
			), array(
				'id' => 924, 'country_id' => 216, 'name' => 'Blountville', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 925, 'country_id' => 35, 'name' => 'Blubber Bay', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 926, 'country_id' => 216, 'name' => 'Blue Bell', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 927, 'country_id' => 216, 'name' => 'Blue Canyon', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 928, 'country_id' => 216, 'name' => 'Blue Fox Bay', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 929, 'country_id' => 67, 'name' => 'Blue Lagoon', 'name_ru' => 'Блю-Лагун', 'gmt_offset' => -12,
			), array(
				'id' => 930, 'country_id' => 156, 'name' => 'Bluefields', 'name_ru' => 'Блуфилдс', 'gmt_offset' => -6,
			), array(
				'id' => 931, 'country_id' => 29, 'name' => 'Blumenau', 'name_ru' => 'Блюменау', 'gmt_offset' => 3,
			), array(
				'id' => 932, 'country_id' => 216, 'name' => 'Blythe', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 933, 'country_id' => 216, 'name' => 'Blytheville', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 934, 'country_id' => 191, 'name' => 'Bo', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 935, 'country_id' => 29, 'name' => 'Boa Vista', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 936, 'country_id' => 167, 'name' => 'Boana', 'name_ru' => 'Боана', 'gmt_offset' => -10,
			), array(
				'id' => 937, 'country_id' => 167, 'name' => 'Boang', 'name_ru' => 'Боанг', 'gmt_offset' => -10,
			), array(
				'id' => 938, 'country_id' => 196, 'name' => 'Bobadilla', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 939, 'country_id' => 21, 'name' => 'Bobo Dioulasso', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 940, 'country_id' => 35, 'name' => 'Bobquinn Lake', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 941, 'country_id' => 29, 'name' => 'Boca Do Acre', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 942, 'country_id' => 216, 'name' => 'Boca Raton', 'name_ru' => 'Бока Ратон', 'gmt_offset' => -5,
			), array(
				'id' => 943, 'country_id' => 164, 'name' => 'Bocas Del Toro', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 944, 'country_id' => 167, 'name' => 'Bodinumu', 'name_ru' => 'Бодинуму', 'gmt_offset' => 10,
			), array(
				'id' => 945, 'country_id' => 158, 'name' => 'Bodo', 'name_ru' => 'Бодо', 'gmt_offset' => 1,
			), array(
				'id' => 946, 'country_id' => 208, 'name' => 'Bodrum', 'name_ru' => 'Бодрум', 'gmt_offset' => 2,
			), array(
				'id' => 947, 'country_id' => 53, 'name' => 'Boeblingen', 'name_ru' => 'Беблинген', 'gmt_offset' => 1,
			), array(
				'id' => 948, 'country_id' => 37, 'name' => 'Boende', 'name_ru' => 'Боэнде', 'gmt_offset' => 1,
			), array(
				'id' => 949, 'country_id' => 216, 'name' => 'Bogalusa', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 950, 'country_id' => 21, 'name' => 'Bogande', 'name_ru' => 'Боганд', 'gmt_offset' => 0,
			), array(
				'id' => 951, 'country_id' => 142, 'name' => 'Boghe', 'name_ru' => 'Боге', 'gmt_offset' => 0,
			), array(
				'id' => 952, 'country_id' => 46, 'name' => 'Bogota', 'name_ru' => 'Богота', 'gmt_offset' => -5,
			), array(
				'id' => 953, 'country_id' => 167, 'name' => 'Boigu Island', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 954, 'country_id' => 216, 'name' => 'Boise, ID', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 955, 'country_id' => 17, 'name' => 'Bojnord', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 956, 'country_id' => 82, 'name' => 'Boke', 'name_ru' => 'Боке', 'gmt_offset' => 0,
			), array(
				'id' => 957, 'country_id' => 95, 'name' => 'Bokondini', 'name_ru' => 'Бокондини', 'gmt_offset' => 9,
			), array(
				'id' => 958, 'country_id' => 200, 'name' => 'Bokoro', 'name_ru' => 'Бокоро', 'gmt_offset' => 1,
			), array(
				'id' => 959, 'country_id' => 167, 'name' => 'Boku', 'name_ru' => 'Боку', 'gmt_offset' => -10,
			), array(
				'id' => 960, 'country_id' => 92, 'name' => 'Bol', 'name_ru' => 'Бол', 'gmt_offset' => 1,
			), array(
				'id' => 961, 'country_id' => 95, 'name' => 'Bolaang', 'name_ru' => 'Болаанг', 'gmt_offset' => 8,
			), array(
				'id' => 962, 'country_id' => 14, 'name' => 'Bollon', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 963, 'country_id' => 103, 'name' => 'Bologna', 'name_ru' => 'Болонья', 'gmt_offset' => 1,
			), array(
				'id' => 964, 'country_id' => 167, 'name' => 'Bolovip', 'name_ru' => 'Боловип', 'gmt_offset' => -10,
			), array(
				'id' => 965, 'country_id' => 14, 'name' => 'Bolwarra', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 966, 'country_id' => 103, 'name' => 'Bolzano', 'name_ru' => 'Болзано', 'gmt_offset' => 1,
			), array(
				'id' => 967, 'country_id' => 29, 'name' => 'Bom Jesus Da Lapa', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 968, 'country_id' => 37, 'name' => 'Boma', 'name_ru' => 'Бома', 'gmt_offset' => 1,
			), array(
				'id' => 969, 'country_id' => 167, 'name' => 'Bomai', 'name_ru' => 'Бомай', 'gmt_offset' => -10,
			), array(
				'id' => 970, 'country_id' => 156, 'name' => 'Bonanza', 'name_ru' => 'Бонанса', 'gmt_offset' => 6,
			), array(
				'id' => 971, 'country_id' => 35, 'name' => 'Bonaventure', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 972, 'country_id' => 41, 'name' => 'Bondoukou', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 973, 'country_id' => 72, 'name' => 'Bongo', 'name_ru' => 'Бонго', 'gmt_offset' => -1,
			), array(
				'id' => 974, 'country_id' => 200, 'name' => 'Bongor', 'name_ru' => 'Бонгор', 'gmt_offset' => -1,
			), array(
				'id' => 975, 'country_id' => 41, 'name' => 'Bongouanou', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 976, 'country_id' => 29, 'name' => 'Bonito', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 977, 'country_id' => 35, 'name' => 'Bonnyville, AB', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 978, 'country_id' => 95, 'name' => 'Bontang', 'name_ru' => 'Бонтанг', 'gmt_offset' => -8,
			), array(
				'id' => 979, 'country_id' => 191, 'name' => 'Bonthe', 'name_ru' => 'Бонте', 'gmt_offset' => 0,
			), array(
				'id' => 980, 'country_id' => 216, 'name' => 'Boone', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 981, 'country_id' => 72, 'name' => 'Booue', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 982, 'country_id' => 166, 'name' => 'Bora Bora', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 983, 'country_id' => 193, 'name' => 'Borama', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 984, 'country_id' => 29, 'name' => 'Borba', 'name_ru' => 'Борба', 'gmt_offset' => 4,
			), array(
				'id' => 985, 'country_id' => 71, 'name' => 'Bordeaux', 'name_ru' => 'Бордо', 'gmt_offset' => 1,
			), array(
				'id' => 986, 'country_id' => 35, 'name' => 'Borden', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id'         => 987, 'country_id' => 58, 'name' => 'Bordj Badji Mokhtar',
				'name_ru'    => 'Борж-Бажи-Мохтар', 'gmt_offset' => 1,
			), array(
				'id'         => 988, 'country_id' => 102, 'name' => 'Borgarfjordur Eystri', 'name_ru' => NULL,
				'gmt_offset' => 0,
			), array(
				'id' => 989, 'country_id' => 216, 'name' => 'Borger', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 990, 'country_id' => 167, 'name' => 'Boridi', 'name_ru' => 'Бориди', 'gmt_offset' => 10,
			), array(
				'id' => 991, 'country_id' => 213, 'name' => 'Borispol', 'name_ru' => 'Борисполь', 'gmt_offset' => 3,
			), array(
				'id' => 992, 'country_id' => 53, 'name' => 'Borkum', 'name_ru' => 'Боркум', 'gmt_offset' => 1,
			), array(
				'id' => 993, 'country_id' => 186, 'name' => 'Borlange', 'name_ru' => 'Борланг', 'gmt_offset' => 1,
			), array(
				'id' => 994, 'country_id' => 216, 'name' => 'Bornite', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 995, 'country_id' => 41, 'name' => 'Borotou', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 996, 'country_id' => 216, 'name' => 'Borrego Springs', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 997, 'country_id' => 14, 'name' => 'Borroloola', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 998, 'country_id' => 167, 'name' => 'Boset', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 999, 'country_id' => 38, 'name' => 'Bossangoa', 'name_ru' => 'Боссанга', 'gmt_offset' => 1,
			), array(
				'id' => 1000, 'country_id' => 193, 'name' => 'Bossaso', 'name_ru' => 'Боссасо', 'gmt_offset' => 3,
			),
				array(
					'id'         => 1001, 'country_id' => 38, 'name' => 'Bossembele', 'name_ru' => 'Боссембеле',
					'gmt_offset' => 1,
				), 1 => array(
				'id' => 1002, 'country_id' => 3, 'name' => 'Bost', 'name_ru' => 'Бост', 'gmt_offset' => -4.5,
			), array(
				'id' => 1003, 'country_id' => 216, 'name' => 'Boston', 'name_ru' => 'Бостон', 'gmt_offset' => -5,
			), array(
				'id' => 1004, 'country_id' => 216, 'name' => 'Boswell Bay', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1005, 'country_id' => 194, 'name' => 'Botopasie', 'name_ru' => 'Ботопасье', 'gmt_offset' => 3,
			), array(
				'id' => 1006, 'country_id' => 41, 'name' => 'Bouake', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1007, 'country_id' => 38, 'name' => 'Bouar', 'name_ru' => 'Буар', 'gmt_offset' => 1,
			), array(
				'id' => 1008, 'country_id' => 38, 'name' => 'Bouca', 'name_ru' => 'Бука', 'gmt_offset' => -1,
			), array(
				'id' => 1009, 'country_id' => 14, 'name' => 'Boulder', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 1010, 'country_id' => 216, 'name' => 'Boulder City', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1011, 'country_id' => 14, 'name' => 'Boulia', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1012, 'country_id' => 21, 'name' => 'Boulsa', 'name_ru' => 'Булса', 'gmt_offset' => 0,
			), array(
				'id' => 1013, 'country_id' => 41, 'name' => 'Bouna', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1014, 'country_id' => 216, 'name' => 'Boundary', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1015, 'country_id' => 41, 'name' => 'Boundiali', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1016, 'country_id' => 39, 'name' => 'Boundji', 'name_ru' => 'Бунджи', 'gmt_offset' => -1,
			), array(
				'id' => 1017, 'country_id' => 216, 'name' => 'Bountiful', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 1018, 'country_id' => 22, 'name' => 'Bourgas', 'name_ru' => 'Бургас', 'gmt_offset' => 2,
			), array(
				'id' => 1019, 'country_id' => 71, 'name' => 'Bourges', 'name_ru' => 'Борже', 'gmt_offset' => 1,
			), array(
				'id' => 1020, 'country_id' => 14, 'name' => 'Bourke', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1021, 'country_id' => 73, 'name' => 'Bournemouth', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1022, 'country_id' => 58, 'name' => 'Boussaada', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 1023, 'country_id' => 200, 'name' => 'Bousso', 'name_ru' => 'Буссо', 'gmt_offset' => -1,
			), array(
				'id' => 1024, 'country_id' => 142, 'name' => 'Boutilimit', 'name_ru' => 'Бутилимит', 'gmt_offset' => 0,
			), array(
				'id' => 1025, 'country_id' => 14, 'name' => 'Bowen', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 1026, 'country_id' => 216, 'name' => 'Bowling Green', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1027, 'country_id' => 216, 'name' => 'Bowman', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 1028, 'country_id' => 216, 'name' => 'Boxborough', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1029, 'country_id' => 216, 'name' => 'Bozeman', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 1030, 'country_id' => 38, 'name' => 'Bozoum', 'name_ru' => 'Бозум', 'gmt_offset' => -1,
			), array(
				'id'         => 1031, 'country_id' => 151, 'name' => 'Brack', 'name_ru' => 'Вейл-Игл, шт. Колорадо',
				'gmt_offset' => 2,
			), array(
				'id' => 1032, 'country_id' => 216, 'name' => 'Bradford', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1033, 'country_id' => 216, 'name' => 'Brady', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1034, 'country_id' => 173, 'name' => 'Braga', 'name_ru' => 'Брага', 'gmt_offset' => 0,
			), array(
				'id' => 1035, 'country_id' => 173, 'name' => 'Braganca', 'name_ru' => 'Браганса', 'gmt_offset' => 0,
			), array(
				'id' => 1036, 'country_id' => 29, 'name' => 'Braganca Paulista', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1037, 'country_id' => 167, 'name' => 'Brahman', 'name_ru' => 'Брахман', 'gmt_offset' => 10,
			), array(
				'id' => 1038, 'country_id' => 216, 'name' => 'Brainerd, MN', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1039, 'country_id' => 73, 'name' => 'Braintree', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 1040, 'country_id' => 14, 'name' => 'Brampton Island', 'name_ru' => 'Бремптон Айленд',
				'gmt_offset' => 10,
			), array(
				'id' => 1041, 'country_id' => 73, 'name' => 'Brandon', 'name_ru' => 'Брэндон', 'gmt_offset' => 0,
			), array(
				'id'         => 1042, 'country_id' => 216, 'name' => 'Branson/point Lookout', 'name_ru' => NULL,
				'gmt_offset' => 6,
			), array(
				'id' => 1043, 'country_id' => 29, 'name' => 'Brasilia', 'name_ru' => 'Бразилия', 'gmt_offset' => -2,
			), array(
				'id' => 1044, 'country_id' => 190, 'name' => 'Bratislava', 'name_ru' => 'Братислава', 'gmt_offset' => 1,
			), array(
				'id' => 1045, 'country_id' => 180, 'name' => 'Bratsk', 'name_ru' => 'Братск', 'gmt_offset' => 9,
			), array(
				'id'         => 1046, 'country_id' => 53, 'name' => 'Braunschweig', 'name_ru' => 'Брауншвайг',
				'gmt_offset' => 1,
			), array(
				'id' => 1047, 'country_id' => 216, 'name' => 'Brava', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1048, 'country_id' => 216, 'name' => 'Brawley', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1049, 'country_id' => 216, 'name' => 'Brazoria', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1050, 'country_id' => 39, 'name' => 'Brazzaville', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 1051, 'country_id' => 216, 'name' => 'Breckenridge', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1052, 'country_id' => 157, 'name' => 'Breda', 'name_ru' => 'Бреда', 'gmt_offset' => 1,
			), array(
				'id' => 1053, 'country_id' => 102, 'name' => 'Breiddalsvik', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1054, 'country_id' => 53, 'name' => 'Bremen', 'name_ru' => 'Бремен', 'gmt_offset' => 1,
			), array(
				'id'         => 1055, 'country_id' => 53, 'name' => 'Bremerhaven', 'name_ru' => 'Бременхавен',
				'gmt_offset' => 1,
			), array(
				'id' => 1056, 'country_id' => 216, 'name' => 'Bremerton', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1057, 'country_id' => 103, 'name' => 'Brescia', 'name_ru' => 'Бресия', 'gmt_offset' => 1,
			), array(
				'id' => 1058, 'country_id' => 71, 'name' => 'Brest', 'name_ru' => 'Брест', 'gmt_offset' => 3,
			), array(
				'id' => 1059, 'country_id' => 29, 'name' => 'Breves', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 1060, 'country_id' => 14, 'name' => 'Brewarrina', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1061, 'country_id' => 38, 'name' => 'Bria', 'name_ru' => 'Бриа', 'gmt_offset' => 1,
			), array(
				'id' => 1062, 'country_id' => 180, 'name' => 'Briansk', 'name_ru' => 'Брянск', 'gmt_offset' => 4,
			), array(
				'id' => 1063, 'country_id' => 216, 'name' => 'Bridgeport', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1064, 'country_id' => 18, 'name' => 'Bridgetown', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 1065, 'country_id' => 216, 'name' => 'Brigham City', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 1066, 'country_id' => 14, 'name' => 'Bright', 'name_ru' => NULL, 'gmt_offset' => 11,
			), array(
				'id' => 1067, 'country_id' => 73, 'name' => 'Brighton', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1068, 'country_id' => 14, 'name' => 'Brighton Downs', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1069, 'country_id' => 103, 'name' => 'Brindisi', 'name_ru' => 'Бриндиси', 'gmt_offset' => 1,
			), array(
				'id' => 1070, 'country_id' => 14, 'name' => 'Brisbane', 'name_ru' => 'Брисбан', 'gmt_offset' => 10,
			), array(
				'id' => 1071, 'country_id' => 73, 'name' => 'Bristol', 'name_ru' => 'Бристоль', 'gmt_offset' => 0,
			), array(
				'id'         => 1072, 'country_id' => 73, 'name' => 'Britrail Rail Zone S', 'name_ru' => NULL,
				'gmt_offset' => 0,
			), array(
				'id' => 1073, 'country_id' => 216, 'name' => 'Britton', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id'         => 1074, 'country_id' => 71, 'name' => 'Brive-La-Gaillarde', 'name_ru' => 'Брив-ла-Гайард',
				'gmt_offset' => 1,
			), array(
				'id' => 1075, 'country_id' => 52, 'name' => 'Brno', 'name_ru' => 'Брно', 'gmt_offset' => 1,
			), array(
				'id' => 1076, 'country_id' => 216, 'name' => 'Broadus', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 1077, 'country_id' => 35, 'name' => 'Broadview', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 1078, 'country_id' => 35, 'name' => 'Brochet', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 1079, 'country_id' => 35, 'name' => 'Brockville', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1080, 'country_id' => 216, 'name' => 'Broken Bow', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1081, 'country_id' => 14, 'name' => 'Broken Hill', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 1082, 'country_id' => 35, 'name' => 'Bromont', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id'         => 1083, 'country_id' => 158, 'name' => 'Bronnoysund', 'name_ru' => 'Броннойзунд',
				'gmt_offset' => 1,
			), array(
				'id' => 1084, 'country_id' => 35, 'name' => 'Bronson Creek', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 1085, 'country_id' => 216, 'name' => 'Brookings', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1086, 'country_id' => 216, 'name' => 'Brooks Lodge', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id'         => 1087, 'country_id' => 14, 'name' => 'Broome, Western Australia', 'name_ru' => 'Брум',
				'gmt_offset' => 9,
			), array(
				'id' => 1088, 'country_id' => 216, 'name' => 'Broomfield', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 1089, 'country_id' => 216, 'name' => 'Brownsville', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1090, 'country_id' => 216, 'name' => 'Brownwood', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1091, 'country_id' => 53, 'name' => 'Brueggen', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 1092, 'country_id' => 29, 'name' => 'Brumado', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 1093, 'country_id' => 14, 'name' => 'Brunette Downs', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 1094, 'country_id' => 216, 'name' => 'Brunswick', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id'         => 1095, 'country_id' => 91, 'name' => 'Brus Laguna', 'name_ru' => 'Брюс-Лагуна',
				'gmt_offset' => 6,
			), array(
				'id' => 1096, 'country_id' => 20, 'name' => 'Brussels', 'name_ru' => 'Брюссель', 'gmt_offset' => 1,
			), array(
				'id' => 1097, 'country_id' => 105, 'name' => 'Bryan', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1098, 'country_id' => 216, 'name' => 'Bryce', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 1099, 'country_id' => 67, 'name' => 'Bua', 'name_ru' => 'Буа', 'gmt_offset' => 12,
			), array(
				'id' => 1100, 'country_id' => 88, 'name' => 'Bubaque', 'name_ru' => 'Бубаку', 'gmt_offset' => 0,
			), array(
				'id' => 1101, 'country_id' => 46, 'name' => 'Bucaramanga', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1102, 'country_id' => 123, 'name' => 'Buchanan', 'name_ru' => 'Бучанан', 'gmt_offset' => 0,
			), array(
				'id' => 1103, 'country_id' => 35, 'name' => 'Buchans', 'name_ru' => NULL, 'gmt_offset' => -3.5,
			), array(
				'id' => 1104, 'country_id' => 178, 'name' => 'Bucharest', 'name_ru' => 'Бухарест', 'gmt_offset' => 2,
			), array(
				'id' => 1105, 'country_id' => 216, 'name' => 'Buckeye', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 1106, 'country_id' => 216, 'name' => 'Buckland', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1107, 'country_id' => 94, 'name' => 'Budapest', 'name_ru' => 'Будапешт', 'gmt_offset' => 1,
			), array(
				'id'         => 1108, 'country_id' => 46, 'name' => 'Buenaventura', 'name_ru' => 'Буэнавентура',
				'gmt_offset' => -5,
			), array(
				'id'         => 1109, 'country_id' => 11, 'name' => 'Buenos Aires', 'name_ru' => 'Буэнос-Айрес',
				'gmt_offset' => -3,
			), array(
				'id' => 1110, 'country_id' => 216, 'name' => 'Buffalo', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1111, 'country_id' => 35, 'name' => 'Buffalo Narrows', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1112, 'country_id' => 231, 'name' => 'Buffalo Range', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 1113, 'country_id' => 180, 'name' => 'Bugulma', 'name_ru' => 'Бугульма', 'gmt_offset' => 4,
			), array(
				'id' => 1114, 'country_id' => 167, 'name' => 'Buin', 'name_ru' => 'Буин', 'gmt_offset' => -10,
			), array(
				'id' => 1115, 'country_id' => 24, 'name' => 'Bujumbura', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 1116, 'country_id' => 167, 'name' => 'Buka', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1117, 'country_id' => 37, 'name' => 'Bukavu', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 1118, 'country_id' => 218, 'name' => 'Bukhara', 'name_ru' => 'Бухара', 'gmt_offset' => 5,
			), array(
				'id' => 1119, 'country_id' => 212, 'name' => 'Bukoba', 'name_ru' => 'Букоба', 'gmt_offset' => 3,
			), array(
				'id' => 1120, 'country_id' => 231, 'name' => 'Bulawayo', 'name_ru' => 'Булауайо', 'gmt_offset' => 2,
			), array(
				'id' => 1121, 'country_id' => 65, 'name' => 'Bulchi', 'name_ru' => 'Бульчи', 'gmt_offset' => -3,
			), array(
				'id' => 1122, 'country_id' => 138, 'name' => 'Bulgan', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1123, 'country_id' => 14, 'name' => 'Bulimba', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1124, 'country_id' => 35, 'name' => 'Bull Harbour', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1125, 'country_id' => 216, 'name' => 'Bullfrog Basin', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 1126, 'country_id' => 216, 'name' => 'Bullhead City', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 1127, 'country_id' => 167, 'name' => 'Bulolo', 'name_ru' => 'Булоло', 'gmt_offset' => -10,
			), array(
				'id' => 1128, 'country_id' => 37, 'name' => 'Bumba', 'name_ru' => 'Бумба', 'gmt_offset' => 0,
			), array(
				'id' => 1129, 'country_id' => 231, 'name' => 'Bumi Hills', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1130, 'country_id' => 14, 'name' => 'Bunbury', 'name_ru' => 'Банбери', 'gmt_offset' => 8,
			), array(
				'id' => 1131, 'country_id' => 14, 'name' => 'Bundaberg', 'name_ru' => 'Бандаберг', 'gmt_offset' => 10,
			), array(
				'id' => 1132, 'country_id' => 167, 'name' => 'Bundi', 'name_ru' => 'Бунди', 'gmt_offset' => -10,
			), array(
				'id' => 1133, 'country_id' => 37, 'name' => 'Bunia', 'name_ru' => 'Буниа', 'gmt_offset' => 0,
			), array(
				'id'         => 1134, 'country_id' => 65, 'name' => 'Buno Bedelle', 'name_ru' => 'Буно-Беделле',
				'gmt_offset' => -3,
			), array(
				'id' => 1135, 'country_id' => 167, 'name' => 'Bunsil', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1136, 'country_id' => 95, 'name' => 'Bunyu', 'name_ru' => 'Бунью', 'gmt_offset' => 8,
			), array(
				'id' => 1137, 'country_id' => 88, 'name' => 'Buochs', 'name_ru' => 'Буокс', 'gmt_offset' => 0,
			), array(
				'id' => 1138, 'country_id' => 95, 'name' => 'Buol', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 1139, 'country_id' => 182, 'name' => 'Buraidah', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 1140, 'country_id' => 163, 'name' => 'Buraimi', 'name_ru' => 'Бурайми', 'gmt_offset' => 4,
			), array(
				'id' => 1141, 'country_id' => 65, 'name' => 'Burao', 'name_ru' => 'Бурао', 'gmt_offset' => 3,
			), array(
				'id' => 1142, 'country_id' => 216, 'name' => 'Burbank', 'name_ru' => 'Бурбанк', 'gmt_offset' => -8,
			), array(
				'id' => 1143, 'country_id' => 67, 'name' => 'Bureta', 'name_ru' => 'Бюрета', 'gmt_offset' => 12,
			), array(
				'id' => 1144, 'country_id' => 53, 'name' => 'Burg Feuerstein', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 1145, 'country_id' => 202, 'name' => 'Buri Ram', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1146, 'country_id' => 14, 'name' => 'Burketown', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1147, 'country_id' => 216, 'name' => 'Burlington', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1148, 'country_id' => 14, 'name' => 'Burnie', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1149, 'country_id' => 216, 'name' => 'Burns', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1150, 'country_id' => 35, 'name' => 'Burns Lake', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1151, 'country_id' => 208, 'name' => 'Bursa', 'name_ru' => 'Бурса', 'gmt_offset' => 2,
			), array(
				'id' => 1152, 'country_id' => 73, 'name' => 'Burtonwood', 'name_ru' => 'Бертонвуд', 'gmt_offset' => 0,
			), array(
				'id' => 1153, 'country_id' => 118, 'name' => 'Burundai', 'name_ru' => 'Бурундай', 'gmt_offset' => 0,
			), array(
				'id' => 1154, 'country_id' => 35, 'name' => 'Burwash Landings', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1155, 'country_id' => 216, 'name' => 'Burwell', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1156, 'country_id' => 73, 'name' => 'Bury St Edmunds', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1157, 'country_id' => 115, 'name' => 'Busan', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1158, 'country_id' => 101, 'name' => 'Bushehr', 'name_ru' => 'Бушехр', 'gmt_offset' => 3.5,
			), array(
				'id' => 1159, 'country_id' => 14, 'name' => 'Bussellton', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 1160, 'country_id' => 168, 'name' => 'Busuanga', 'name_ru' => 'Корон', 'gmt_offset' => 8,
			), array(
				'id' => 1161, 'country_id' => 37, 'name' => 'Buta', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1162, 'country_id' => 181, 'name' => 'Butare', 'name_ru' => 'Бутаре', 'gmt_offset' => -2,
			), array(
				'id'         => 1163, 'country_id' => 111, 'name' => 'Butaritari', 'name_ru' => 'Бутаритари',
				'gmt_offset' => 12,
			), array(
				'id' => 1164, 'country_id' => 216, 'name' => 'Butler', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1165, 'country_id' => 216, 'name' => 'Butte, (MT)', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id'         => 1166, 'country_id' => 149, 'name' => 'Butterworth', 'name_ru' => 'Баттерворт',
				'gmt_offset' => 8,
			), array(
				'id' => 1167, 'country_id' => 168, 'name' => 'Butuan', 'name_ru' => 'Бутуань', 'gmt_offset' => -8,
			), array(
				'id' => 1168, 'country_id' => 41, 'name' => 'Buyo', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1169, 'country_id' => 29, 'name' => 'Buzios', 'name_ru' => 'Бузиос', 'gmt_offset' => -2,
			), array(
				'id' => 1170, 'country_id' => 170, 'name' => 'Bydgoszcz', 'name_ru' => 'Быдгощ', 'gmt_offset' => 1,
			), array(
				'id' => 1171, 'country_id' => 223, 'name' => 'Ca Mau', 'name_ru' => 'Ка-Мау', 'gmt_offset' => -7,
			), array(
				'id' => 1172, 'country_id' => 220, 'name' => 'Cabimas', 'name_ru' => 'Кабимас', 'gmt_offset' => -4,
			), array(
				'id' => 1173, 'country_id' => 216, 'name' => 'Cabin Creek', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1174, 'country_id' => 9, 'name' => 'Cabinda', 'name_ru' => 'Кабинда', 'gmt_offset' => 1,
			), array(
				'id' => 1175, 'country_id' => 29, 'name' => 'Cabo Frio', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 1176, 'country_id' => 57, 'name' => 'Cabo Rojo', 'name_ru' => 'Кабо-Рожо', 'gmt_offset' => -4,
			), array(
				'id' => 1177, 'country_id' => 29, 'name' => 'Cacador', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1178, 'country_id' => 29, 'name' => 'Caceres', 'name_ru' => 'Касерес', 'gmt_offset' => -3,
			), array(
				'id' => 1179, 'country_id' => 29, 'name' => 'Cachoeira', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id'         => 1180, 'country_id' => 29, 'name' => 'Cachoeiro Itapemirim', 'name_ru' => NULL,
				'gmt_offset' => 0,
			), array(
				'id' => 1181, 'country_id' => 29, 'name' => 'Cacoal', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1182, 'country_id' => 216, 'name' => 'Cadillac', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1183, 'country_id' => 64, 'name' => 'Cadiz', 'name_ru' => 'Кадиз', 'gmt_offset' => 1,
			), array(
				'id' => 1184, 'country_id' => 71, 'name' => 'Caen', 'name_ru' => 'Кан', 'gmt_offset' => 1,
			), array(
				'id' => 1185, 'country_id' => 9, 'name' => 'Cafunfo', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id'         => 1186, 'country_id' => 168, 'name' => 'Cagayan De Oro', 'name_ru' => 'Кагаян Де Оро',
				'gmt_offset' => 8,
			), array(
				'id' => 1187, 'country_id' => 168, 'name' => 'Cagayan De Sulu', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1188, 'country_id' => 103, 'name' => 'Cagliari', 'name_ru' => 'Кальяри', 'gmt_offset' => 1,
			), array(
				'id' => 1189, 'country_id' => 96, 'name' => 'Caherciveen', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1190, 'country_id' => 71, 'name' => 'Cahors', 'name_ru' => 'Каор', 'gmt_offset' => 1,
			), array(
				'id' => 1191, 'country_id' => 150, 'name' => 'Caia', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id'         => 1192, 'country_id' => 220, 'name' => 'Caicara Del Orinoco', 'name_ru' => NULL,
				'gmt_offset' => -4,
			), array(
				'id' => 1193, 'country_id' => 14, 'name' => 'Caiguna', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1194, 'country_id' => 14, 'name' => 'Cairns', 'name_ru' => 'Кернс', 'gmt_offset' => 10,
			), array(
				'id' => 1195, 'country_id' => 61, 'name' => 'Cairo', 'name_ru' => 'Каир', 'gmt_offset' => 2,
			), array(
				'id' => 1196, 'country_id' => 165, 'name' => 'Cajamarca', 'name_ru' => 'Кахамарка', 'gmt_offset' => -5,
			), array(
				'id' => 1197, 'country_id' => 155, 'name' => 'Calabar', 'name_ru' => 'Калабар', 'gmt_offset' => 1,
			), array(
				'id' => 1198, 'country_id' => 220, 'name' => 'Calabozo', 'name_ru' => 'Калабосо', 'gmt_offset' => -4,
			), array(
				'id' => 1199, 'country_id' => 71, 'name' => 'Calais', 'name_ru' => 'Кале', 'gmt_offset' => 1,
			), array(
				'id' => 1200, 'country_id' => 43, 'name' => 'Calama', 'name_ru' => 'Калама', 'gmt_offset' => 4,
			), array(
				'id' => 1201, 'country_id' => 168, 'name' => 'Calbayog', 'name_ru' => 'Калбайог', 'gmt_offset' => 8,
			), array(
				'id' => 1202, 'country_id' => 29, 'name' => 'Caldas Novas', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 1203, 'country_id' => 216, 'name' => 'Caldwell, NJ', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1204, 'country_id' => 164, 'name' => 'Caledonia', 'name_ru' => 'Каледония', 'gmt_offset' => 5,
			), array(
				'id'         => 1205, 'country_id' => 11, 'name' => 'Caleta Olivia', 'name_ru' => 'Калета-Оливия',
				'gmt_offset' => -3,
			), array(
				'id' => 1206, 'country_id' => 216, 'name' => 'Calexico', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1207, 'country_id' => 35, 'name' => 'Calgary', 'name_ru' => 'Калгари', 'gmt_offset' => -7,
			), array(
				'id' => 1208, 'country_id' => 35, 'name' => 'Calgary, AB', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 1209, 'country_id' => 46, 'name' => 'Cali', 'name_ru' => 'Кали', 'gmt_offset' => -5,
			), array(
				'id' => 1210, 'country_id' => 216, 'name' => 'Calipatria', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1211, 'country_id' => 216, 'name' => 'Callaway Gardens', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1212, 'country_id' => 14, 'name' => 'Caloundra', 'name_ru' => 'Калундра', 'gmt_offset' => 10,
			), array(
				'id' => 1213, 'country_id' => 216, 'name' => 'Calverton', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1214, 'country_id' => 71, 'name' => 'Calvi', 'name_ru' => 'Кальви', 'gmt_offset' => 1,
			), array(
				'id' => 1215, 'country_id' => 48, 'name' => 'Camaguey', 'name_ru' => 'Камагуэй', 'gmt_offset' => -5,
			), array(
				'id' => 1216, 'country_id' => 73, 'name' => 'Cambridge', 'name_ru' => 'Кембрдидж', 'gmt_offset' => 0,
			), array(
				'id' => 1217, 'country_id' => 35, 'name' => 'Cambridge Bay', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1218, 'country_id' => 216, 'name' => 'Camden', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1219, 'country_id' => 29, 'name' => 'Cameta', 'name_ru' => 'Камета', 'gmt_offset' => 3,
			), array(
				'id' => 1220, 'country_id' => 14, 'name' => 'Camfield', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 1221, 'country_id' => 168, 'name' => 'Camiguin', 'name_ru' => 'Камигуин', 'gmt_offset' => -8,
			), array(
				'id' => 1222, 'country_id' => 28, 'name' => 'Camiri', 'name_ru' => 'Камири', 'gmt_offset' => -4,
			), array(
				'id' => 1223, 'country_id' => 29, 'name' => 'Camocim', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 1224, 'country_id' => 14, 'name' => 'Camooweal', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1225, 'country_id' => 216, 'name' => 'Camp Douglas', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1226, 'country_id' => 216, 'name' => 'Camp Springs', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id'         => 1227, 'country_id' => 35, 'name' => 'Campbell River', 'name_ru' => 'Кэмпбелл Ривер',
				'gmt_offset' => 1,
			), array(
				'id'         => 1228, 'country_id' => 169, 'name' => 'Campbellpore', 'name_ru' => 'Кампбеллпур',
				'gmt_offset' => 5,
			), array(
				'id'         => 1229, 'country_id' => 73, 'name' => 'Campbeltown', 'name_ru' => 'Кемпбелтаун',
				'gmt_offset' => 0,
			), array(
				'id' => 1230, 'country_id' => 148, 'name' => 'Campeche', 'name_ru' => 'Кампеше', 'gmt_offset' => -6,
			), array(
				'id' => 1231, 'country_id' => 29, 'name' => 'Campina Grande', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 1232, 'country_id' => 29, 'name' => 'Campinas', 'name_ru' => 'Кампинас', 'gmt_offset' => -2,
			), array(
				'id' => 1233, 'country_id' => 29, 'name' => 'Campinas, Sao Paulo', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 1234, 'country_id' => 93, 'name' => 'Campo', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id'         => 1235, 'country_id' => 29, 'name' => 'Campo Grande', 'name_ru' => 'Кампо Гранде',
				'gmt_offset' => -3,
			), array(
				'id' => 1236, 'country_id' => 29, 'name' => 'Campo Mourao', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 1237, 'country_id' => 29, 'name' => 'Campos', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 1238, 'country_id' => 223, 'name' => 'Can Tho', 'name_ru' => 'Кан-Тхо', 'gmt_offset' => -7,
			), array(
				'id' => 1239, 'country_id' => 29, 'name' => 'Cana Brava', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 1240, 'country_id' => 220, 'name' => 'Canaima', 'name_ru' => 'Канайма', 'gmt_offset' => 4,
			), array(
				'id' => 1241, 'country_id' => 208, 'name' => 'Canakkale', 'name_ru' => 'Канаккале', 'gmt_offset' => 2,
			), array(
				'id' => 1242, 'country_id' => 148, 'name' => 'Cananea', 'name_ru' => 'Кананеа', 'gmt_offset' => -7,
			), array(
				'id' => 1243, 'country_id' => 29, 'name' => 'Canarana', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1244, 'country_id' => 47, 'name' => 'Canas', 'name_ru' => 'Канас', 'gmt_offset' => -6,
			), array(
				'id' => 1245, 'country_id' => 29, 'name' => 'Canavieiras', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 1246, 'country_id' => 14, 'name' => 'Canberra', 'name_ru' => 'Канберра', 'gmt_offset' => 11,
			), array(
				'id' => 1247, 'country_id' => 148, 'name' => 'Cancun', 'name_ru' => 'Канкун', 'gmt_offset' => -6,
			), array(
				'id' => 1248, 'country_id' => 193, 'name' => 'Candala', 'name_ru' => 'Кандала', 'gmt_offset' => -3,
			), array(
				'id' => 1249, 'country_id' => 46, 'name' => 'Candilejas', 'name_ru' => 'Кандилежас', 'gmt_offset' => 5,
			), array(
				'id' => 1250, 'country_id' => 216, 'name' => 'Candle', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1251, 'country_id' => 9, 'name' => 'Cangamba', 'name_ru' => 'Кангамба', 'gmt_offset' => -1,
			), array(
				'id' => 1252, 'country_id' => 71, 'name' => 'Cannes', 'name_ru' => 'Канны', 'gmt_offset' => 1,
			), array(
				'id' => 1253, 'country_id' => 14, 'name' => 'Canobie', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1254, 'country_id' => 216, 'name' => 'Canon City', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 1255, 'country_id' => 219, 'name' => 'Canouan Island', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 1256, 'country_id' => 216, 'name' => 'Canton', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id'         => 1257, 'country_id' => 111, 'name' => 'Canton Island', 'name_ru' => 'Кентон-Айленд',
				'gmt_offset' => 11,
			), array(
				'id'         => 1258, 'country_id' => 93, 'name' => 'Cap Haitien', 'name_ru' => 'Кеп-Гаитиен',
				'gmt_offset' => -5,
			), array(
				'id'         => 1259, 'country_id' => 192, 'name' => 'Cap Skirring', 'name_ru' => 'Кеп-Скирринг',
				'gmt_offset' => 0,
			), array(
				'id' => 1260, 'country_id' => 9, 'name' => 'Capanda', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 1261, 'country_id' => 14, 'name' => 'Cape Barren Island', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1262, 'country_id' => 35, 'name' => 'Cape Dorset', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id'         => 1263, 'country_id' => 30, 'name' => 'Cape Eleuthera', 'name_ru' => 'Кейп-Элутера',
				'gmt_offset' => -5,
			), array(
				'id'         => 1264, 'country_id' => 14, 'name' => 'Cape Flattery', 'name_ru' => 'Кейп-Флеттери',
				'gmt_offset' => -10,
			), array(
				'id' => 1265, 'country_id' => 216, 'name' => 'Cape Girardeau', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id'         => 1266, 'country_id' => 167, 'name' => 'Cape Gloucester', 'name_ru' => 'Кейп-Глусестер',
				'gmt_offset' => -10,
			), array(
				'id' => 1267, 'country_id' => 216, 'name' => 'Cape Lisburne', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1268, 'country_id' => 216, 'name' => 'Cape Newenham', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1269, 'country_id' => 167, 'name' => 'Cape Orford', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 1270, 'country_id' => 123, 'name' => 'Cape Palmas', 'name_ru' => 'Кейп-Палмас',
				'gmt_offset' => 0,
			), array(
				'id' => 1271, 'country_id' => 216, 'name' => 'Cape Pole', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1272, 'country_id' => 167, 'name' => 'Cape Rodney', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1273, 'country_id' => 216, 'name' => 'Cape Romanzof', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1274, 'country_id' => 35, 'name' => 'Cape Spencer', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 1275, 'country_id' => 223, 'name' => 'Cape St Jacques', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 1276, 'country_id' => 35, 'name' => 'Cape St James', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 1277, 'country_id' => 228, 'name' => 'Cape Town', 'name_ru' => 'Кейптаун', 'gmt_offset' => 2,
			), array(
				'id'         => 1278, 'country_id' => 167, 'name' => 'Cape Vogel', 'name_ru' => 'Кейп-Вогель',
				'gmt_offset' => -10,
			), array(
				'id' => 1279, 'country_id' => 103, 'name' => 'Capri', 'name_ru' => 'Капри', 'gmt_offset' => 1,
			), array(
				'id' => 1280, 'country_id' => 151, 'name' => 'Caprivi', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1281, 'country_id' => 46, 'name' => 'Capurgana', 'name_ru' => 'Капургана', 'gmt_offset' => 5,
			), array(
				'id' => 1282, 'country_id' => 46, 'name' => 'Caquetania', 'name_ru' => 'Какуэтаниа', 'gmt_offset' => 5,
			), array(
				'id'         => 1283, 'country_id' => 99, 'name' => 'Car Nicobar', 'name_ru' => 'Кар-Никобар',
				'gmt_offset' => -5.5,
			), array(
				'id' => 1284, 'country_id' => 220, 'name' => 'Caracas', 'name_ru' => 'Каракас', 'gmt_offset' => -4,
			), array(
				'id' => 1285, 'country_id' => 29, 'name' => 'Carajas', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 1286, 'country_id' => 178, 'name' => 'Caransebes', 'name_ru' => 'Карансебеш', 'gmt_offset' => 2,
			), array(
				'id' => 1287, 'country_id' => 29, 'name' => 'Carauari', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 1288, 'country_id' => 29, 'name' => 'Caravelas', 'name_ru' => 'Каравелас', 'gmt_offset' => -3,
			), array(
				'id' => 1289, 'country_id' => 216, 'name' => 'Carbondale', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1290, 'country_id' => 71, 'name' => 'Carcassonne', 'name_ru' => 'Каркассон', 'gmt_offset' => 1,
			), array(
				'id' => 1291, 'country_id' => 73, 'name' => 'Cardiff', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1292, 'country_id' => 216, 'name' => 'Caribou', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1293, 'country_id' => 35, 'name' => 'Caribou Island', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 1294, 'country_id' => 46, 'name' => 'Carimagua', 'name_ru' => 'Каримагуа', 'gmt_offset' => 5,
			), array(
				'id' => 1295, 'country_id' => 73, 'name' => 'Carlisle', 'name_ru' => 'Карлисл', 'gmt_offset' => 0,
			), array(
				'id' => 1296, 'country_id' => 216, 'name' => 'Carlsbad', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 1297, 'country_id' => 216, 'name' => 'Carlsbad, CA', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1298, 'country_id' => 14, 'name' => 'Carlton Hill', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 1299, 'country_id' => 86, 'name' => 'Carmelita', 'name_ru' => 'Кармелита', 'gmt_offset' => -6,
			), array(
				'id'         => 1300, 'country_id' => 11, 'name' => 'Carmen De Patagones', 'name_ru' => NULL,
				'gmt_offset' => -3,
			), array(
				'id' => 1301, 'country_id' => 14, 'name' => 'Carnarvon', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1302, 'country_id' => 38, 'name' => 'Carnot', 'name_ru' => 'Карнот', 'gmt_offset' => -1,
			), array(
				'id' => 1303, 'country_id' => 29, 'name' => 'Carolina', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 1304, 'country_id' => 220, 'name' => 'Carora', 'name_ru' => 'Карора', 'gmt_offset' => -4,
			), array(
				'id' => 1305, 'country_id' => 14, 'name' => 'Carpentaria Downs', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1306, 'country_id' => 219, 'name' => 'Carriacou Is', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 1307, 'country_id' => 96, 'name' => 'Carrickfinn', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1308, 'country_id' => 47, 'name' => 'Carrillo', 'name_ru' => 'Каррилльо', 'gmt_offset' => 0,
			), array(
				'id' => 1309, 'country_id' => 216, 'name' => 'Carrizo Springs', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1310, 'country_id' => 216, 'name' => 'Carroll', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1311, 'country_id' => 216, 'name' => 'Carson City', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1312, 'country_id' => 46, 'name' => 'Cartagena', 'name_ru' => 'Картегена', 'gmt_offset' => -5,
			), array(
				'id' => 1313, 'country_id' => 46, 'name' => 'Cartago', 'name_ru' => 'Картаго', 'gmt_offset' => -5,
			), array(
				'id' => 1314, 'country_id' => 164, 'name' => 'Carti', 'name_ru' => 'Карти', 'gmt_offset' => -5,
			), array(
				'id' => 1315, 'country_id' => 35, 'name' => 'Cartierville', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1316, 'country_id' => 35, 'name' => 'Cartwright', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 1317, 'country_id' => 29, 'name' => 'Caruaru', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 1318, 'country_id' => 220, 'name' => 'Carupano', 'name_ru' => 'Карупано', 'gmt_offset' => -4,
			), array(
				'id' => 1319, 'country_id' => 46, 'name' => 'Caruru', 'name_ru' => 'Каруру', 'gmt_offset' => 5,
			), array(
				'id' => 1320, 'country_id' => 29, 'name' => 'Carutapera', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 1321, 'country_id' => 216, 'name' => 'Casa Grande', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 1322, 'country_id' => 129, 'name' => 'Casablanca', 'name_ru' => 'Касабланка', 'gmt_offset' => 0,
			), array(
				'id' => 1323, 'country_id' => 216, 'name' => 'Cascade Locks', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1324, 'country_id' => 29, 'name' => 'Cascavel', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 1325, 'country_id' => 220, 'name' => 'Casigua', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 1326, 'country_id' => 168, 'name' => 'Casiguran', 'name_ru' => 'Касигуран', 'gmt_offset' => 0,
			), array(
				'id' => 1327, 'country_id' => 216, 'name' => 'Casper', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 1328, 'country_id' => 29, 'name' => 'Cassilandia', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 1329, 'country_id' => 67, 'name' => 'Castaway', 'name_ru' => 'Кастэвей', 'gmt_offset' => 12,
			), array(
				'id' => 1330, 'country_id' => 96, 'name' => 'Castlebar', 'name_ru' => 'Кастлбар', 'gmt_offset' => 0,
			), array(
				'id' => 1331, 'country_id' => 35, 'name' => 'Castlegar', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1332, 'country_id' => 71, 'name' => 'Castres', 'name_ru' => 'Кастре', 'gmt_offset' => 1,
			), array(
				'id' => 1333, 'country_id' => 121, 'name' => 'Castries', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 1334, 'country_id' => 43, 'name' => 'Castro', 'name_ru' => 'Кастро', 'gmt_offset' => -3,
			), array(
				'id' => 1335, 'country_id' => 46, 'name' => 'Casuarito', 'name_ru' => 'Касуарито', 'gmt_offset' => -4,
			), array(
				'id' => 1336, 'country_id' => 30, 'name' => 'Cat Cays', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 1337, 'country_id' => 30, 'name' => 'Cat Island', 'name_ru' => 'Кэт-Айленд', 'gmt_offset' => -5,
			), array(
				'id' => 1338, 'country_id' => 35, 'name' => 'Cat Lake', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 1339, 'country_id' => 91, 'name' => 'Catacamas', 'name_ru' => 'Катакамас', 'gmt_offset' => 6,
			), array(
				'id' => 1340, 'country_id' => 29, 'name' => 'Catalao', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 1341, 'country_id' => 216, 'name' => 'Catalina Island', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1342, 'country_id' => 11, 'name' => 'Catamarca', 'name_ru' => 'Катамарка', 'gmt_offset' => -3,
			), array(
				'id' => 1343, 'country_id' => 59, 'name' => 'Catamayo, Loja', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 1344, 'country_id' => 103, 'name' => 'Catania', 'name_ru' => 'Катания', 'gmt_offset' => 1,
			), array(
				'id' => 1345, 'country_id' => 168, 'name' => 'Catarman', 'name_ru' => 'Катарман', 'gmt_offset' => 8,
			), array(
				'id' => 1346, 'country_id' => 168, 'name' => 'Caticlan', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id'         => 1347, 'country_id' => 14, 'name' => 'Cattle Creek', 'name_ru' => 'Кэттл-Крик',
				'gmt_offset' => -9.5,
			), array(
				'id' => 1348, 'country_id' => 9, 'name' => 'Catumbela', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 1349, 'country_id' => 168, 'name' => 'Cauayan', 'name_ru' => 'Кауаян', 'gmt_offset' => -8,
			), array(
				'id' => 1350, 'country_id' => 46, 'name' => 'Caucasia', 'name_ru' => 'Каукасиа', 'gmt_offset' => 5,
			), array(
				'id' => 1351, 'country_id' => 91, 'name' => 'Cauquira', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1352, 'country_id' => 11, 'name' => 'Caviahue', 'name_ru' => 'Кавиахуэ', 'gmt_offset' => 3,
			), array(
				'id' => 1353, 'country_id' => 168, 'name' => 'Cavite City', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id'         => 1354, 'country_id' => 29, 'name' => 'Caxias Do Sul', 'name_ru' => 'Касьяс ду Суль',
				'gmt_offset' => -3,
			), array(
				'id' => 1355, 'country_id' => 34, 'name' => 'Caye Caulker', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id'         => 1356, 'country_id' => 34, 'name' => 'Caye Chapel', 'name_ru' => 'Кайе-Чапел',
				'gmt_offset' => -6,
			), array(
				'id' => 1357, 'country_id' => 76, 'name' => 'Cayenne', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 1358, 'country_id' => 117, 'name' => 'Cayman Brac Is', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1359, 'country_id' => 48, 'name' => 'Cayo Coco', 'name_ru' => 'Кайо Коко', 'gmt_offset' => -5,
			), array(
				'id'         => 1360, 'country_id' => 48, 'name' => 'Cayo Largo Del Sur',
				'name_ru'    => 'Кайо Ларго Дель Сур', 'gmt_offset' => -5,
			), array(
				'id' => 1361, 'country_id' => 9, 'name' => 'Cazombo', 'name_ru' => 'Казомбо', 'gmt_offset' => -1,
			), array(
				'id' => 1362, 'country_id' => 168, 'name' => 'Cebu', 'name_ru' => 'Кебу', 'gmt_offset' => 8,
			), array(
				'id'         => 1363, 'country_id' => 216, 'name' => 'Cedar City', 'name_ru' => 'Сидар Сити',
				'gmt_offset' => -7,
			), array(
				'id' => 1364, 'country_id' => 216, 'name' => 'Cedar Key', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1365, 'country_id' => 216, 'name' => 'Cedar Rapids', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1366, 'country_id' => 14, 'name' => 'Ceduna', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 1367, 'country_id' => 45, 'name' => 'Center Island', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1368, 'country_id' => 216, 'name' => 'Centerville', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1369, 'country_id' => 216, 'name' => 'Central', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1370, 'country_id' => 216, 'name' => 'Centralia', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1371, 'country_id' => 95, 'name' => 'Cepu', 'name_ru' => 'Чепу', 'gmt_offset' => -7,
			), array(
				'id' => 1372, 'country_id' => 11, 'name' => 'Ceres', 'name_ru' => 'Керес', 'gmt_offset' => -3,
			), array(
				'id'         => 1373, 'country_id' => 43, 'name' => 'Cerro Sombrero', 'name_ru' => 'Сьерро-Сомбреро',
				'gmt_offset' => -3,
			), array(
				'id' => 1374, 'country_id' => 14, 'name' => 'Cessnock', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1375, 'country_id' => 46, 'name' => 'Ceuta', 'name_ru' => 'Сеута', 'gmt_offset' => -5,
			), array(
				'id' => 1376, 'country_id' => 165, 'name' => 'Chachapoyas', 'name_ru' => 'Чачапояс', 'gmt_offset' => -5,
			), array(
				'id' => 1377, 'country_id' => 216, 'name' => 'Chadron', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 1378, 'country_id' => 65, 'name' => 'Chagni', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 1379, 'country_id' => 101, 'name' => 'Chah-Bahar', 'name_ru' => NULL, 'gmt_offset' => 3.5,
			), array(
				'id' => 1380, 'country_id' => 43, 'name' => 'Chaiten', 'name_ru' => 'Чайтен', 'gmt_offset' => 4,
			), array(
				'id' => 1381, 'country_id' => 3, 'name' => 'Chakcharan', 'name_ru' => 'Чагчаран', 'gmt_offset' => -4.5,
			), array(
				'id' => 1382, 'country_id' => 216, 'name' => 'Chalkyitsik', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1383, 'country_id' => 216, 'name' => 'Challis', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 1384, 'country_id' => 71, 'name' => 'Chalons Sur Marne', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 1385, 'country_id' => 71, 'name' => 'Chambery', 'name_ru' => 'Шамбери', 'gmt_offset' => 1,
			), array(
				'id' => 1386, 'country_id' => 216, 'name' => 'Champaign', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1387, 'country_id' => 43, 'name' => 'Chanaral', 'name_ru' => 'Чаньяраль', 'gmt_offset' => -3,
			), array(
				'id' => 1388, 'country_id' => 216, 'name' => 'Chandalar', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id'         => 1389, 'country_id' => 99, 'name' => 'Chandigarh', 'name_ru' => 'Чандигарх',
				'gmt_offset' => -5.5,
			), array(
				'id' => 1390, 'country_id' => 216, 'name' => 'Chandler', 'name_ru' => 'Чандлер', 'gmt_offset' => -7,
			), array(
				'id' => 1391, 'country_id' => 45, 'name' => 'Changchun', 'name_ru' => 'Чаньчунь', 'gmt_offset' => 8,
			), array(
				'id' => 1392, 'country_id' => 45, 'name' => 'Changde', 'name_ru' => 'Чандэ', 'gmt_offset' => 8,
			), array(
				'id' => 1393, 'country_id' => 45, 'name' => 'Changhai', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 1394, 'country_id' => 45, 'name' => 'Changsha', 'name_ru' => 'Чанша', 'gmt_offset' => 8,
			), array(
				'id'         => 1395, 'country_id' => 164, 'name' => 'Changuinola', 'name_ru' => 'Чангвинола',
				'gmt_offset' => -5,
			), array(
				'id' => 1396, 'country_id' => 45, 'name' => 'Changzhi', 'name_ru' => 'Чанжи', 'gmt_offset' => -8,
			), array(
				'id' => 1397, 'country_id' => 45, 'name' => 'Changzhou', 'name_ru' => 'Чангзу', 'gmt_offset' => -8,
			), array(
				'id' => 1398, 'country_id' => 85, 'name' => 'Chania', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 1399, 'country_id' => 216, 'name' => 'Chanute', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1400, 'country_id' => 45, 'name' => 'Chaoyang', 'name_ru' => 'Чаоян', 'gmt_offset' => -8,
			), array(
				'id' => 1401, 'country_id' => 46, 'name' => 'Chaparral', 'name_ru' => 'Чапаррал', 'gmt_offset' => -5,
			), array(
				'id' => 1402, 'country_id' => 29, 'name' => 'Chapeco', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 1403, 'country_id' => 35, 'name' => 'Chapleau', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1404, 'country_id' => 11, 'name' => 'Charata', 'name_ru' => 'Чарата', 'gmt_offset' => 3,
			), array(
				'id' => 1405, 'country_id' => 216, 'name' => 'Charles City', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1406, 'country_id' => 216, 'name' => 'Charleston', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1407, 'country_id' => 216, 'name' => 'Charleston, SC', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1408, 'country_id' => 14, 'name' => 'Charleville', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 1409, 'country_id' => 35, 'name' => 'Charlo', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 1410, 'country_id' => 216, 'name' => 'Charlotte', 'name_ru' => 'Шарлотт', 'gmt_offset' => -5,
			), array(
				'id'         => 1411, 'country_id' => 222, 'name' => 'Charlotte Amalie, St Thomas', 'name_ru' => NULL,
				'gmt_offset' => -4,
			), array(
				'id'         => 1412, 'country_id' => 216, 'name' => 'Charlottesville', 'name_ru' => 'Шарлоттсвилль',
				'gmt_offset' => -5,
			), array(
				'id' => 1413, 'country_id' => 35, 'name' => 'Charlottetown', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 1414, 'country_id' => 14, 'name' => 'Charters Towers', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1415, 'country_id' => 71, 'name' => 'Chateauroux', 'name_ru' => 'Шаторуа', 'gmt_offset' => 1,
			), array(
				'id' => 1416, 'country_id' => 35, 'name' => 'Chatham', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id'         => 1417, 'country_id' => 162, 'name' => 'Chatham Island', 'name_ru' => 'Чатам-Айленд',
				'gmt_offset' => -12,
			), array(
				'id' => 1418, 'country_id' => 216, 'name' => 'Chattanooga,TN', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id'         => 1419, 'country_id' => 159, 'name' => 'Chaurjhari', 'name_ru' => 'Чаурджхари',
				'gmt_offset' => 5.7000000000000002,
			), array(
				'id' => 1420, 'country_id' => 173, 'name' => 'Chaves', 'name_ru' => 'Чавес', 'gmt_offset' => 0,
			), array(
				'id' => 1421, 'country_id' => 180, 'name' => 'Cheboksary', 'name_ru' => 'Чебоксары', 'gmt_offset' => 4,
			), array(
				'id' => 1422, 'country_id' => 216, 'name' => 'Chefornak', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1423, 'country_id' => 216, 'name' => 'Chefornak, AK', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1424, 'country_id' => 216, 'name' => 'Chehalis', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1425, 'country_id' => 90, 'name' => 'Chek Lap Kok', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 1426, 'country_id' => 147, 'name' => 'Chelinda', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 1427, 'country_id' => 180, 'name' => 'Chelyabinsk', 'name_ru' => 'Челябинск', 'gmt_offset' => 6,
			), array(
				'id' => 1428, 'country_id' => 216, 'name' => 'Chena Hot Springs', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1429, 'country_id' => 45, 'name' => 'Chengdu', 'name_ru' => 'Ченгду', 'gmt_offset' => 8,
			), array(
				'id' => 1430, 'country_id' => 99, 'name' => 'Chennai/Madras', 'name_ru' => NULL, 'gmt_offset' => 5.5,
			), array(
				'id' => 1431, 'country_id' => 115, 'name' => 'Cheongju', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 1432, 'country_id' => 216, 'name' => 'Cheraw', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1433, 'country_id' => 71, 'name' => 'Cherbourg', 'name_ru' => 'Шербург', 'gmt_offset' => 1,
			), array(
				'id' => 1434, 'country_id' => 180, 'name' => 'Cherepovets', 'name_ru' => 'Череповец', 'gmt_offset' => 4,
			), array(
				'id' => 1435, 'country_id' => 213, 'name' => 'Cherkassy', 'name_ru' => 'Черкассы', 'gmt_offset' => 3,
			), array(
				'id' => 1436, 'country_id' => 213, 'name' => 'Chernigov', 'name_ru' => 'Чернигов', 'gmt_offset' => 3,
			), array(
				'id' => 1437, 'country_id' => 216, 'name' => 'Chernofski', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1438, 'country_id' => 213, 'name' => 'Chernovtsy', 'name_ru' => 'Черновцы', 'gmt_offset' => 3,
			), array(
				'id' => 1439, 'country_id' => 30, 'name' => 'Cherokee', 'name_ru' => 'Чероки', 'gmt_offset' => 0,
			), array(
				'id' => 1440, 'country_id' => 14, 'name' => 'Cherrabun', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1441, 'country_id' => 14, 'name' => 'Cherribah', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 1442, 'country_id' => 180, 'name' => 'Cherskiy', 'name_ru' => 'Черский', 'gmt_offset' => 12,
			), array(
				'id'         => 1443, 'country_id' => 35, 'name' => 'Chesapeake/Huntington Wv', 'name_ru' => NULL,
				'gmt_offset' => -5,
			), array(
				'id' => 1444, 'country_id' => 73, 'name' => 'Chester', 'name_ru' => 'Честер', 'gmt_offset' => 0,
			), array(
				'id' => 1445, 'country_id' => 35, 'name' => 'Chesterfield Inlet', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 1446, 'country_id' => 34, 'name' => 'Chetumal', 'name_ru' => 'Четумал', 'gmt_offset' => -6,
			), array(
				'id' => 1447, 'country_id' => 35, 'name' => 'Chetwynd', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 1448, 'country_id' => 216, 'name' => 'Chevak', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1449, 'country_id' => 35, 'name' => 'Chevery', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 1450, 'country_id' => 216, 'name' => 'Cheyenne', 'name_ru' => 'Чейнни', 'gmt_offset' => -7,
			), array(
				'id' => 1451, 'country_id' => 211, 'name' => 'Chi Mei', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1452, 'country_id' => 202, 'name' => 'Chiang Mai', 'name_ru' => 'Чанг-Май', 'gmt_offset' => 7,
			), array(
				'id' => 1453, 'country_id' => 202, 'name' => 'Chiang Rai', 'name_ru' => 'Чанг-Рай', 'gmt_offset' => 7,
			), array(
				'id' => 1454, 'country_id' => 211, 'name' => 'Chiayi', 'name_ru' => 'Чиайи', 'gmt_offset' => 8,
			), array(
				'id' => 1455, 'country_id' => 35, 'name' => 'Chibougamau', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1456, 'country_id' => 216, 'name' => 'Chicago', 'name_ru' => 'Чикаго', 'gmt_offset' => -6,
			), array(
				'id' => 1457, 'country_id' => 216, 'name' => 'Chicago, Il', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id'         => 1458, 'country_id' => 148, 'name' => 'Chichen Itza', 'name_ru' => 'Чинчен Ица',
				'gmt_offset' => -6,
			), array(
				'id' => 1459, 'country_id' => 216, 'name' => 'Chickasha', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1460, 'country_id' => 216, 'name' => 'Chicken', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1461, 'country_id' => 165, 'name' => 'Chiclayo', 'name_ru' => 'Чиклайо', 'gmt_offset' => -5,
			), array(
				'id' => 1462, 'country_id' => 216, 'name' => 'Chico', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1463, 'country_id' => 45, 'name' => 'Chifeng', 'name_ru' => 'Чифен', 'gmt_offset' => 8,
			), array(
				'id' => 1464, 'country_id' => 216, 'name' => 'Chignik', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1465, 'country_id' => 46, 'name' => 'Chigorodo', 'name_ru' => 'Чигородо', 'gmt_offset' => -5,
			), array(
				'id' => 1466, 'country_id' => 148, 'name' => 'Chihuahua', 'name_ru' => 'Чихуахуа', 'gmt_offset' => -6,
			), array(
				'id' => 1467, 'country_id' => 169, 'name' => 'Chilas', 'name_ru' => 'Чилас', 'gmt_offset' => 5,
			), array(
				'id' => 1468, 'country_id' => 216, 'name' => 'Childress', 'name_ru' => 'Чайлдресс', 'gmt_offset' => -6,
			), array(
				'id' => 1469, 'country_id' => 43, 'name' => 'Chile Chico', 'name_ru' => 'Чиле-Чико', 'gmt_offset' => -3,
			), array(
				'id' => 1470, 'country_id' => 73, 'name' => 'Chilko Lake', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1471, 'country_id' => 14, 'name' => 'Chillagoe', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1472, 'country_id' => 43, 'name' => 'Chillan', 'name_ru' => 'Чиллан', 'gmt_offset' => -3,
			), array(
				'id' => 1473, 'country_id' => 35, 'name' => 'Chilliwack', 'name_ru' => 'Чиллиуок', 'gmt_offset' => -8,
			), array(
				'id' => 1474, 'country_id' => 216, 'name' => 'Chiloquin', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1475, 'country_id' => 165, 'name' => 'Chimbote', 'name_ru' => 'Чимботе', 'gmt_offset' => -5,
			), array(
				'id' => 1476, 'country_id' => 185, 'name' => 'Chimoio', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1477, 'country_id' => 14, 'name' => 'Chinchilla', 'name_ru' => 'Шиншилла', 'gmt_offset' => -10,
			), array(
				'id' => 1478, 'country_id' => 216, 'name' => 'Chincoteague', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1479, 'country_id' => 150, 'name' => 'Chinde', 'name_ru' => 'Шинде', 'gmt_offset' => -2,
			), array(
				'id' => 1480, 'country_id' => 229, 'name' => 'Chingola', 'name_ru' => 'Чингола', 'gmt_offset' => 2,
			), array(
				'id' => 1481, 'country_id' => 142, 'name' => 'Chinguitti', 'name_ru' => 'Шингитти', 'gmt_offset' => 0,
			), array(
				'id' => 1482, 'country_id' => 216, 'name' => 'Chino', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1483, 'country_id' => 85, 'name' => 'Chios', 'name_ru' => 'Хиос', 'gmt_offset' => 2,
			), array(
				'id' => 1484, 'country_id' => 229, 'name' => 'Chipata', 'name_ru' => 'Чипата', 'gmt_offset' => 2,
			), array(
				'id' => 1485, 'country_id' => 231, 'name' => 'Chipinge', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 1486, 'country_id' => 86, 'name' => 'Chiquimula', 'name_ru' => 'Чикумула', 'gmt_offset' => -6,
			), array(
				'id' => 1487, 'country_id' => 216, 'name' => 'Chisana', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1488, 'country_id' => 35, 'name' => 'Chisasibi', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 1489, 'country_id' => 216, 'name' => 'Chisholm', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1490, 'country_id' => 131, 'name' => 'Chisinau', 'name_ru' => 'Кишинев', 'gmt_offset' => 2,
			), array(
				'id' => 1491, 'country_id' => 216, 'name' => 'Chistochina', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1492, 'country_id' => 180, 'name' => 'Chita', 'name_ru' => 'Чита', 'gmt_offset' => 9,
			), array(
				'id' => 1493, 'country_id' => 9, 'name' => 'Chitato', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 1494, 'country_id' => 216, 'name' => 'Chitina', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1495, 'country_id' => 169, 'name' => 'Chitral', 'name_ru' => 'Читрал', 'gmt_offset' => -5,
			), array(
				'id' => 1496, 'country_id' => 164, 'name' => 'Chitre', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1497, 'country_id' => 19, 'name' => 'Chittagong', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 1498, 'country_id' => 46, 'name' => 'Chivolo', 'name_ru' => 'Чиволо', 'gmt_offset' => 5,
			), array(
				'id' => 1499, 'country_id' => 180, 'name' => 'Chkalovsky', 'name_ru' => 'Чкаловский', 'gmt_offset' => 5,
			), array(
				'id' => 1500, 'country_id' => 138, 'name' => 'Choibalsan', 'name_ru' => NULL, 'gmt_offset' => -8,
			),
				array(
					'id'         => 1501, 'country_id' => 183, 'name' => 'Choiseul Bay', 'name_ru' => 'Чойсфул-Бей',
					'gmt_offset' => -11,
				), 1 => array(
				'id' => 1502, 'country_id' => 180, 'name' => 'Chokurdah', 'name_ru' => 'Чокурдах', 'gmt_offset' => 12,
			), array(
				'id' => 1503, 'country_id' => 150, 'name' => 'Chokwe', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 1504, 'country_id' => 71, 'name' => 'Cholet', 'name_ru' => 'Шоле', 'gmt_offset' => 1,
			), array(
				'id' => 1505, 'country_id' => 216, 'name' => 'Chomley', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1506, 'country_id' => 45, 'name' => 'Chongqing', 'name_ru' => 'Чонсинь', 'gmt_offset' => 8,
			), array(
				'id' => 1507, 'country_id' => 3, 'name' => 'Chos Malal', 'name_ru' => NULL, 'gmt_offset' => 4.5,
			), array(
				'id'         => 1508, 'country_id' => 162, 'name' => 'Christchurch', 'name_ru' => 'Кристчерч',
				'gmt_offset' => 13,
			), array(
				'id' => 1509, 'country_id' => 14, 'name' => 'Christmas Creek', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1510, 'country_id' => 111, 'name' => 'Christmas Island', 'name_ru' => NULL, 'gmt_offset' => 13,
			), array(
				'id' => 1511, 'country_id' => 216, 'name' => 'Chuathbaluk', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1512, 'country_id' => 30, 'name' => 'Chub Cay', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1513, 'country_id' => 180, 'name' => 'Chulman', 'name_ru' => 'Чульман', 'gmt_offset' => 10,
			), array(
				'id' => 1514, 'country_id' => 202, 'name' => 'Chumphon', 'name_ru' => 'Чампхон', 'gmt_offset' => 5,
			), array(
				'id' => 1515, 'country_id' => 167, 'name' => 'Chungribu', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1516, 'country_id' => 35, 'name' => 'Churchill Falls', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 1517, 'country_id' => 35, 'name' => 'Chute-Des-Passes', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1518, 'country_id' => 67, 'name' => 'Cicia', 'name_ru' => 'Кикия', 'gmt_offset' => 12,
			), array(
				'id' => 1519, 'country_id' => 48, 'name' => 'Ciego De Avila', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1520, 'country_id' => 48, 'name' => 'Cienfuegos', 'name_ru' => 'Сиенфуэгос', 'gmt_offset' => -5,
			), array(
				'id' => 1521, 'country_id' => 95, 'name' => 'Cilacap', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 1522, 'country_id' => 46, 'name' => 'Cimitarra', 'name_ru' => 'Кимитарра', 'gmt_offset' => -5,
			), array(
				'id' => 1523, 'country_id' => 216, 'name' => 'Cincinnati, OH', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1524, 'country_id' => 9, 'name' => 'Cinder River', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 1525, 'country_id' => 216, 'name' => 'Circle', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id'         => 1526, 'country_id' => 216, 'name' => 'Circle Hot Springs', 'name_ru' => NULL,
				'gmt_offset' => -9,
			), array(
				'id' => 1527, 'country_id' => 95, 'name' => 'Cirebon', 'name_ru' => 'Чиребон', 'gmt_offset' => 7,
			), array(
				'id'         => 1528, 'country_id' => 148, 'name' => 'Ciudad Acuna', 'name_ru' => 'Сиудад-Акуна',
				'gmt_offset' => -6,
			), array(
				'id'         => 1529, 'country_id' => 220, 'name' => 'Ciudad Bolivar', 'name_ru' => 'Сьюдад-Боливар',
				'gmt_offset' => -4,
			), array(
				'id'         => 1530, 'country_id' => 148, 'name' => 'Ciudad Constitucion',
				'name_ru'    => 'Сиудад-Конститусьон', 'gmt_offset' => 7,
			), array(
				'id' => 1531, 'country_id' => 148, 'name' => 'Ciudad Del Carmen', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id'         => 1532, 'country_id' => 175, 'name' => 'Ciudad Del Este', 'name_ru' => 'Кудад-дель-Эсте',
				'gmt_offset' => -3,
			), array(
				'id'         => 1533, 'country_id' => 220, 'name' => 'Ciudad Guayana', 'name_ru' => 'Сьюдад-Гуаяна',
				'gmt_offset' => -4,
			), array(
				'id'         => 1534, 'country_id' => 148, 'name' => 'Ciudad Juarez', 'name_ru' => 'Сиудад Хуарез',
				'gmt_offset' => -7,
			), array(
				'id'         => 1535, 'country_id' => 148, 'name' => 'Ciudad Mante', 'name_ru' => 'Сиудад-Манте',
				'gmt_offset' => 6,
			), array(
				'id'         => 1536, 'country_id' => 148, 'name' => 'Ciudad Obregon', 'name_ru' => 'Сиудад-Обрегон',
				'gmt_offset' => -7,
			), array(
				'id'         => 1537, 'country_id' => 64, 'name' => 'Ciudad Real', 'name_ru' => 'Сиудад Реаль',
				'gmt_offset' => 0,
			), array(
				'id'         => 1538, 'country_id' => 148, 'name' => 'Ciudad Victoria', 'name_ru' => 'Сиудад-Виктория',
				'gmt_offset' => -6,
			), array(
				'id' => 1539, 'country_id' => 216, 'name' => 'Claremont', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1540, 'country_id' => 216, 'name' => 'Clarinda', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1541, 'country_id' => 216, 'name' => 'Clarks Point', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1542, 'country_id' => 216, 'name' => 'Clarksburg', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1543, 'country_id' => 216, 'name' => 'Clarksdale', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id'         => 1544, 'country_id' => 216, 'name' => 'Clarksville', 'name_ru' => 'Кларксвилл',
				'gmt_offset' => -6,
			), array(
				'id' => 1545, 'country_id' => 216, 'name' => 'Clayton', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 1546, 'country_id' => 216, 'name' => 'Clear Lake', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1547, 'country_id' => 216, 'name' => 'Clearlake', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1548, 'country_id' => 35, 'name' => 'Clearwater', 'name_ru' => 'Клируотер', 'gmt_offset' => -6,
			), array(
				'id' => 1549, 'country_id' => 216, 'name' => 'Clemson', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1550, 'country_id' => 14, 'name' => 'Clermont', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id'         => 1551, 'country_id' => 71, 'name' => 'Clermont-Ferrand', 'name_ru' => 'Клермон-Ферран',
				'gmt_offset' => 1,
			), array(
				'id' => 1552, 'country_id' => 14, 'name' => 'Cleve', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 1553, 'country_id' => 216, 'name' => 'Cleveland', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1554, 'country_id' => 216, 'name' => 'Clifton', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 1555, 'country_id' => 14, 'name' => 'Clifton Hills', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 1556, 'country_id' => 216, 'name' => 'Clinton', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1557, 'country_id' => 35, 'name' => 'Clinton Creek', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1558, 'country_id' => 216, 'name' => 'Clintonville', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1559, 'country_id' => 14, 'name' => 'Cloncurry', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 1560, 'country_id' => 175, 'name' => 'Clorinda', 'name_ru' => 'Клоринда', 'gmt_offset' => -3,
			), array(
				'id' => 1561, 'country_id' => 216, 'name' => 'Clovis', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 1562, 'country_id' => 147, 'name' => 'Club Makokola', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 1563, 'country_id' => 35, 'name' => 'Cluff Lake', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id'         => 1564, 'country_id' => 178, 'name' => 'Cluj-Napoca', 'name_ru' => 'Клуж-Напока',
				'gmt_offset' => 2,
			), array(
				'id' => 1565, 'country_id' => 14, 'name' => 'Cluny', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1566, 'country_id' => 35, 'name' => 'Clyde River', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1567, 'country_id' => 35, 'name' => 'Co-op Point', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 1568, 'country_id' => 216, 'name' => 'Coalinga', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1569, 'country_id' => 29, 'name' => 'Coari', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 1570, 'country_id' => 86, 'name' => 'Coatepeque', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1571, 'country_id' => 216, 'name' => 'Coatesville', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1572, 'country_id' => 86, 'name' => 'Coban', 'name_ru' => 'Кобан', 'gmt_offset' => -6,
			), array(
				'id' => 1573, 'country_id' => 14, 'name' => 'Cobar', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1574, 'country_id' => 29, 'name' => 'Cobija', 'name_ru' => 'Кобиха', 'gmt_offset' => -4,
			), array(
				'id' => 1575, 'country_id' => 59, 'name' => 'Coca', 'name_ru' => 'Кока', 'gmt_offset' => 5,
			), array(
				'id' => 1576, 'country_id' => 28, 'name' => 'Cochabamba', 'name_ru' => 'Качабамба', 'gmt_offset' => -4,
			), array(
				'id' => 1577, 'country_id' => 11, 'name' => 'Cochrane', 'name_ru' => 'Кочране', 'gmt_offset' => -3,
			), array(
				'id' => 1578, 'country_id' => 53, 'name' => 'Cochstedt', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 1579, 'country_id' => 216, 'name' => 'Cocoa', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1580, 'country_id' => 14, 'name' => 'Coconut Island', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1581, 'country_id' => 36, 'name' => 'Cocos Islands', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 1582, 'country_id' => 46, 'name' => 'Codazzi', 'name_ru' => 'Кодаси', 'gmt_offset' => 5,
			), array(
				'id' => 1583, 'country_id' => 216, 'name' => 'Cody/Yellowstone', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 1584, 'country_id' => 14, 'name' => 'Coen', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1585, 'country_id' => 216, 'name' => 'Coffee Point', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1586, 'country_id' => 216, 'name' => 'Coffeyville', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1587, 'country_id' => 216, 'name' => 'Coffman Cove', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id'         => 1588, 'country_id' => 14, 'name' => 'Coffs Harbour', 'name_ru' => 'Коффс Харбор',
				'gmt_offset' => 10,
			), array(
				'id' => 1589, 'country_id' => 71, 'name' => 'Cognac', 'name_ru' => 'Коньяк', 'gmt_offset' => 1,
			), array(
				'id'         => 1590, 'country_id' => 99, 'name' => 'Coimbatore', 'name_ru' => 'Коимбаторе',
				'gmt_offset' => 5.5,
			), array(
				'id' => 1591, 'country_id' => 173, 'name' => 'Coimbra', 'name_ru' => 'Коимбра', 'gmt_offset' => 0,
			), array(
				'id' => 1592, 'country_id' => 14, 'name' => 'Colac', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1593, 'country_id' => 216, 'name' => 'Colby', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1594, 'country_id' => 216, 'name' => 'Cold Bay', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1595, 'country_id' => 35, 'name' => 'Cold Lake', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 1596, 'country_id' => 216, 'name' => 'Coldfoot', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1597, 'country_id' => 216, 'name' => 'Coleman', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1598, 'country_id' => 148, 'name' => 'Colima', 'name_ru' => 'Колима', 'gmt_offset' => -6,
			), array(
				'id' => 1599, 'country_id' => 14, 'name' => 'Collarenebri', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id'         => 1600, 'country_id' => 216, 'name' => 'College Park', 'name_ru' => 'Колледж парк',
				'gmt_offset' => -5,
			), array(
				'id'         => 1601, 'country_id' => 216, 'name' => 'College Station, TX', 'name_ru' => NULL,
				'gmt_offset' => -6,
			), array(
				'id' => 1602, 'country_id' => 14, 'name' => 'Collie', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1603, 'country_id' => 35, 'name' => 'Collins Bay', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 1604, 'country_id' => 14, 'name' => 'Collinsville', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 1605, 'country_id' => 71, 'name' => 'Colmar', 'name_ru' => 'Колмар', 'gmt_offset' => 1,
			), array(
				'id' => 1606, 'country_id' => 53, 'name' => 'Cologne', 'name_ru' => 'Кельн', 'gmt_offset' => 1,
			), array(
				'id' => 1607, 'country_id' => 122, 'name' => 'Colombo', 'name_ru' => 'Коломбо', 'gmt_offset' => 5.5,
			), array(
				'id' => 1608, 'country_id' => 164, 'name' => 'Colon', 'name_ru' => 'Колон', 'gmt_offset' => -5,
			), array(
				'id' => 1609, 'country_id' => 217, 'name' => 'Colonia', 'name_ru' => 'Колония', 'gmt_offset' => -2,
			), array(
				'id'         => 1610, 'country_id' => 11, 'name' => 'Colonia Catriel', 'name_ru' => 'Колония-Катриэль',
				'gmt_offset' => 3,
			), array(
				'id' => 1611, 'country_id' => 11, 'name' => 'Colonia Sarmiento', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 1612, 'country_id' => 216, 'name' => 'Colorado Creek', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1613, 'country_id' => 29, 'name' => 'Colorado do Oeste', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id'         => 1614, 'country_id' => 216, 'name' => 'Colorado Springs',
				'name_ru'    => 'Колорадо Спрингз', 'gmt_offset' => -7,
			), array(
				'id' => 1615, 'country_id' => 216, 'name' => 'Columbia', 'name_ru' => 'Колумбия', 'gmt_offset' => -6,
			), array(
				'id' => 1616, 'country_id' => 216, 'name' => 'Columbia, SC', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1617, 'country_id' => 216, 'name' => 'Columbus', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1618, 'country_id' => 216, 'name' => 'Columbus, NE', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1619, 'country_id' => 35, 'name' => 'Colville Lake', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 1620, 'country_id' => 91, 'name' => 'Comayagua', 'name_ru' => 'Комаягуа', 'gmt_offset' => -6,
			), array(
				'id' => 1621, 'country_id' => 19, 'name' => 'Comilla', 'name_ru' => 'Комилла', 'gmt_offset' => 5.5,
			), array(
				'id' => 1622, 'country_id' => 144, 'name' => 'Comino', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 1623, 'country_id' => 103, 'name' => 'Comiso', 'name_ru' => 'Комизо', 'gmt_offset' => 1,
			), array(
				'id' => 1624, 'country_id' => 148, 'name' => 'Comitan', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1625, 'country_id' => 11, 'name' => 'Comodoro Rivadavia', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 1626, 'country_id' => 35, 'name' => 'Comox', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1627, 'country_id' => 216, 'name' => 'Compton', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1628, 'country_id' => 223, 'name' => 'Con Dao', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1629, 'country_id' => 82, 'name' => 'Conakry', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 1630, 'country_id' => 29, 'name' => 'Conceicao Do Araguaia', 'name_ru' => NULL,
				'gmt_offset' => -3,
			), array(
				'id' => 1631, 'country_id' => 43, 'name' => 'Concepcion', 'name_ru' => 'Консепсьон', 'gmt_offset' => -3,
			), array(
				'id' => 1632, 'country_id' => 216, 'name' => 'Concord', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1633, 'country_id' => 29, 'name' => 'Concordia', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 1634, 'country_id' => 14, 'name' => 'Condobolin', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1635, 'country_id' => 46, 'name' => 'Condoto', 'name_ru' => 'Кондото', 'gmt_offset' => -5,
			), array(
				'id' => 1636, 'country_id' => 29, 'name' => 'Confreza', 'name_ru' => 'Конфреца', 'gmt_offset' => 4,
			), array(
				'id' => 1637, 'country_id' => 30, 'name' => 'Congo Town', 'name_ru' => 'Конго-Таун', 'gmt_offset' => 5,
			), array(
				'id' => 1638, 'country_id' => 216, 'name' => 'Connersville', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1639, 'country_id' => 216, 'name' => 'Conroe', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1640, 'country_id' => 178, 'name' => 'Constanta', 'name_ru' => 'Константа', 'gmt_offset' => 2,
			), array(
				'id' => 1641, 'country_id' => 58, 'name' => 'Constantine', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 1642, 'country_id' => 57, 'name' => 'Constanza', 'name_ru' => 'Констанца', 'gmt_offset' => -4,
			), array(
				'id' => 1643, 'country_id' => 164, 'name' => 'Contadora', 'name_ru' => 'Контадора', 'gmt_offset' => -5,
			), array(
				'id'         => 1644, 'country_id' => 14, 'name' => 'Coober Pedy', 'name_ru' => 'Кубер Педи',
				'gmt_offset' => -9.5,
			), array(
				'id'         => 1645, 'country_id' => 99, 'name' => 'Cooch Behar', 'name_ru' => 'Куч-Бехар',
				'gmt_offset' => -5.5,
			), array(
				'id' => 1646, 'country_id' => 14, 'name' => 'Cooinda', 'name_ru' => 'Куинда', 'gmt_offset' => -9.5,
			), array(
				'id' => 1647, 'country_id' => 14, 'name' => 'Cooktown', 'name_ru' => 'Куктаун', 'gmt_offset' => -10,
			), array(
				'id' => 1648, 'country_id' => 14, 'name' => 'Coolah', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id'         => 1649, 'country_id' => 14, 'name' => 'Coolangatta/Gold Coast', 'name_ru' => NULL,
				'gmt_offset' => 10,
			), array(
				'id' => 1650, 'country_id' => 14, 'name' => 'Coolawanyah', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1651, 'country_id' => 14, 'name' => 'Coolibah', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 1652, 'country_id' => 14, 'name' => 'Cooma', 'name_ru' => 'Коома', 'gmt_offset' => -10,
			), array(
				'id' => 1653, 'country_id' => 14, 'name' => 'Coonabarabran', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1654, 'country_id' => 14, 'name' => 'Coonamble', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1655, 'country_id' => 216, 'name' => 'Cooper Lodge', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1656, 'country_id' => 216, 'name' => 'Cooperstown, NY', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1657, 'country_id' => 14, 'name' => 'Coorabie', 'name_ru' => 'Курабье', 'gmt_offset' => -9.5,
			), array(
				'id' => 1658, 'country_id' => 14, 'name' => 'Cootamundra', 'name_ru' => NULL, 'gmt_offset' => 11,
			), array(
				'id' => 1659, 'country_id' => 91, 'name' => 'Copan', 'name_ru' => 'Копан', 'gmt_offset' => -6,
			), array(
				'id' => 1660, 'country_id' => 55, 'name' => 'Copenhagen', 'name_ru' => 'Копенгаген', 'gmt_offset' => 1,
			), array(
				'id' => 1661, 'country_id' => 43, 'name' => 'Copiapo', 'name_ru' => 'Копьяпо', 'gmt_offset' => 4,
			), array(
				'id' => 1662, 'country_id' => 103, 'name' => 'Copper Centre', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 1663, 'country_id' => 71, 'name' => 'Copper Mountain', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 1664, 'country_id' => 217, 'name' => 'Coquimbo', 'name_ru' => 'Кокимбо', 'gmt_offset' => 0,
			), array(
				'id' => 1665, 'country_id' => 35, 'name' => 'Coral Harbour', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1666, 'country_id' => 164, 'name' => 'Corazon De Jesus', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 1667, 'country_id' => 216, 'name' => 'Corcoran', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1668, 'country_id' => 14, 'name' => 'Cordillo Downs', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 1669, 'country_id' => 11, 'name' => 'Cordoba', 'name_ru' => 'Кордова', 'gmt_offset' => -3,
			), array(
				'id' => 1670, 'country_id' => 216, 'name' => 'Cordova', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1671, 'country_id' => 216, 'name' => 'Corinth', 'name_ru' => 'Коринт', 'gmt_offset' => -6,
			), array(
				'id' => 1672, 'country_id' => 96, 'name' => 'Cork', 'name_ru' => 'Корк', 'gmt_offset' => 0,
			), array(
				'id'         => 1673, 'country_id' => 156, 'name' => 'Corn Island', 'name_ru' => 'Корн-Айленд',
				'gmt_offset' => -6,
			), array(
				'id' => 1674, 'country_id' => 29, 'name' => 'Cornelio Procopio', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 1675, 'country_id' => 216, 'name' => 'Corner Bay', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1676, 'country_id' => 35, 'name' => 'Corner Brook', 'name_ru' => NULL, 'gmt_offset' => -3.5,
			), array(
				'id' => 1677, 'country_id' => 216, 'name' => 'Corning, NY', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1678, 'country_id' => 35, 'name' => 'Cornwall', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1679, 'country_id' => 220, 'name' => 'Coro', 'name_ru' => 'Коро', 'gmt_offset' => -4,
			), array(
				'id' => 1680, 'country_id' => 216, 'name' => 'Corolla, NC', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id'         => 1681, 'country_id' => 162, 'name' => 'Coromandel', 'name_ru' => 'Коромандель',
				'gmt_offset' => 13,
			), array(
				'id' => 1682, 'country_id' => 168, 'name' => 'Coron', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 1683, 'country_id' => 35, 'name' => 'Coronation', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id'         => 1684, 'country_id' => 91, 'name' => 'Coronel E Soto Cano AB', 'name_ru' => NULL,
				'gmt_offset' => -6,
			), array(
				'id' => 1685, 'country_id' => 11, 'name' => 'Coronel Suarez', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 1686, 'country_id' => 14, 'name' => 'Corowa', 'name_ru' => NULL, 'gmt_offset' => 11,
			), array(
				'id' => 1687, 'country_id' => 34, 'name' => 'Corozal', 'name_ru' => 'Корозал', 'gmt_offset' => -6,
			), array(
				'id'         => 1688, 'country_id' => 216, 'name' => 'Corpus Christi', 'name_ru' => 'Корпус Кристи',
				'gmt_offset' => 6,
			), array(
				'id'         => 1689, 'country_id' => 216, 'name' => 'Corpus Christi, TX', 'name_ru' => NULL,
				'gmt_offset' => -6,
			), array(
				'id' => 1690, 'country_id' => 11, 'name' => 'Corrientes', 'name_ru' => 'Корриентес', 'gmt_offset' => -3,
			), array(
				'id' => 1691, 'country_id' => 14, 'name' => 'Corryong', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1692, 'country_id' => 216, 'name' => 'Corsicana', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1693, 'country_id' => 35, 'name' => 'Cortes Bay', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1694, 'country_id' => 216, 'name' => 'Cortez', 'name_ru' => 'Кортез', 'gmt_offset' => -7,
			), array(
				'id' => 1695, 'country_id' => 216, 'name' => 'Cortland', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1696, 'country_id' => 29, 'name' => 'Corumba', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 1697, 'country_id' => 173, 'name' => 'Corvo Island', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 1698, 'country_id' => 29, 'name' => 'Costa Marques', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1699, 'country_id' => 168, 'name' => 'Cotabato', 'name_ru' => 'Котабато', 'gmt_offset' => -8,
			), array(
				'id' => 1700, 'country_id' => 47, 'name' => 'Coto 47', 'name_ru' => 'Кото-47', 'gmt_offset' => -5,
			), array(
				'id' => 1701, 'country_id' => 25, 'name' => 'Cotonou', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 1702, 'country_id' => 53, 'name' => 'Cottbus', 'name_ru' => 'Коттбус', 'gmt_offset' => 1,
			), array(
				'id' => 1703, 'country_id' => 216, 'name' => 'Cottonwood', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 1704, 'country_id' => 216, 'name' => 'Cotulla', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1705, 'country_id' => 216, 'name' => 'Council', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1706, 'country_id' => 216, 'name' => 'Council Bluffs', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1707, 'country_id' => 71, 'name' => 'Courchevel', 'name_ru' => 'Куршевель', 'gmt_offset' => 1,
			), array(
				'id' => 1708, 'country_id' => 35, 'name' => 'Courtenay', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1709, 'country_id' => 46, 'name' => 'Covenas', 'name_ru' => 'Ковенас', 'gmt_offset' => -5,
			), array(
				'id' => 1710, 'country_id' => 73, 'name' => 'Coventry', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1711, 'country_id' => 173, 'name' => 'Covilha', 'name_ru' => 'Ковилья', 'gmt_offset' => 0,
			), array(
				'id' => 1712, 'country_id' => 216, 'name' => 'Covington, KY', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1713, 'country_id' => 14, 'name' => 'Cowarie', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 1714, 'country_id' => 14, 'name' => 'Cowell', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 1715, 'country_id' => 35, 'name' => 'Cowley', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 1716, 'country_id' => 14, 'name' => 'Cowra', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1717, 'country_id' => 43, 'name' => 'Coyhaique', 'name_ru' => 'Койайке', 'gmt_offset' => -3,
			), array(
				'id' => 1718, 'country_id' => 91, 'name' => 'Coyoles', 'name_ru' => 'Койолес', 'gmt_offset' => -6,
			), array(
				'id' => 1719, 'country_id' => 148, 'name' => 'Cozumel', 'name_ru' => 'Коцумел', 'gmt_offset' => -6,
			), array(
				'id' => 1720, 'country_id' => 228, 'name' => 'Cradock', 'name_ru' => 'Крадок', 'gmt_offset' => 2,
			), array(
				'id' => 1721, 'country_id' => 216, 'name' => 'Craig', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 1722, 'country_id' => 224, 'name' => 'Craig Cove', 'name_ru' => 'Крейг-Кав', 'gmt_offset' => 11,
			), array(
				'id' => 1723, 'country_id' => 178, 'name' => 'Craiova', 'name_ru' => 'Крайова', 'gmt_offset' => 2,
			), array(
				'id' => 1724, 'country_id' => 35, 'name' => 'Cranbrook', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 1725, 'country_id' => 216, 'name' => 'Crane', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1726, 'country_id' => 216, 'name' => 'Crane Island', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id'         => 1727, 'country_id' => 46, 'name' => 'Cravo Norte', 'name_ru' => 'Краво-Норте',
				'gmt_offset' => 5,
			), array(
				'id' => 1728, 'country_id' => 71, 'name' => 'Creil', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 1729, 'country_id' => 216, 'name' => 'Crescent City', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1730, 'country_id' => 14, 'name' => 'Cresswell Downs', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 1731, 'country_id' => 216, 'name' => 'Crested Butte', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1732, 'country_id' => 35, 'name' => 'Creston', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1733, 'country_id' => 216, 'name' => 'Crestview', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1734, 'country_id' => 29, 'name' => 'Criciuma', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 1735, 'country_id' => 14, 'name' => 'Croker Island', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 1736, 'country_id' => 73, 'name' => 'Cromarty', 'name_ru' => 'Кромарти', 'gmt_offset' => 0,
			), array(
				'id' => 1737, 'country_id' => 216, 'name' => 'Crooked Creek', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1738, 'country_id' => 199, 'name' => 'Crooked Island', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1739, 'country_id' => 216, 'name' => 'Crookston', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1740, 'country_id' => 216, 'name' => 'Cross City', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1741, 'country_id' => 35, 'name' => 'Cross Lake', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 1742, 'country_id' => 216, 'name' => 'Crossett', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1743, 'country_id' => 216, 'name' => 'Crossville', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1744, 'country_id' => 103, 'name' => 'Crotone', 'name_ru' => 'Кротон', 'gmt_offset' => 1,
			), array(
				'id' => 1745, 'country_id' => 216, 'name' => 'Crows Landing', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1746, 'country_id' => 14, 'name' => 'Croydon', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1747, 'country_id' => 29, 'name' => 'Cruz Alta', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 1748, 'country_id' => 29, 'name' => 'Cruzeiro Do Sul', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1749, 'country_id' => 216, 'name' => 'Crystal Lake', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1750, 'country_id' => 150, 'name' => 'Cuamba', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 1751, 'country_id' => 216, 'name' => 'Cube Cove', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1752, 'country_id' => 46, 'name' => 'Cucuta', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1753, 'country_id' => 14, 'name' => 'Cudal', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1754, 'country_id' => 99, 'name' => 'Cuddapah', 'name_ru' => 'Куддапах', 'gmt_offset' => 5.5,
			), array(
				'id' => 1755, 'country_id' => 14, 'name' => 'Cue', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1756, 'country_id' => 59, 'name' => 'Cuenca', 'name_ru' => 'Куенка', 'gmt_offset' => -5,
			), array(
				'id'         => 1757, 'country_id' => 148, 'name' => 'Cuernavaca', 'name_ru' => 'Куернавака',
				'gmt_offset' => -6,
			), array(
				'id' => 1758, 'country_id' => 29, 'name' => 'Cuiaba', 'name_ru' => 'Куиаба', 'gmt_offset' => -3,
			), array(
				'id' => 1759, 'country_id' => 9, 'name' => 'Cuito Cuanavale', 'name_ru' => 'Куито', 'gmt_offset' => -1,
			), array(
				'id' => 1760, 'country_id' => 172, 'name' => 'Culebra', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 1761, 'country_id' => 148, 'name' => 'Culiacan', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 1762, 'country_id' => 168, 'name' => 'Culion', 'name_ru' => 'Кулион', 'gmt_offset' => -8,
			), array(
				'id' => 1763, 'country_id' => 216, 'name' => 'Culver City', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1764, 'country_id' => 220, 'name' => 'Cumana', 'name_ru' => 'Кумана', 'gmt_offset' => -4,
			), array(
				'id' => 1765, 'country_id' => 216, 'name' => 'Cumberland', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1766, 'country_id' => 103, 'name' => 'Cuneo', 'name_ru' => 'Кунео', 'gmt_offset' => 1,
			), array(
				'id' => 1767, 'country_id' => 14, 'name' => 'Cunnamulla', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1768, 'country_id' => 8, 'name' => 'Curacao', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 1769, 'country_id' => 29, 'name' => 'Curitiba', 'name_ru' => 'Куритиба', 'gmt_offset' => -2,
			), array(
				'id' => 1770, 'country_id' => 46, 'name' => 'Currillo', 'name_ru' => 'Куррилло', 'gmt_offset' => 5,
			), array(
				'id' => 1771, 'country_id' => 29, 'name' => 'Cururupu', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id'         => 1772, 'country_id' => 11, 'name' => 'Curuzu Cuatia', 'name_ru' => 'Курусу-Куатья',
				'gmt_offset' => -3,
			), array(
				'id' => 1773, 'country_id' => 216, 'name' => 'Cushing', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1774, 'country_id' => 216, 'name' => 'Cut Bank', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 1775, 'country_id' => 11, 'name' => 'Cutral', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 1776, 'country_id' => 53, 'name' => 'Cuxhaven', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 1777, 'country_id' => 168, 'name' => 'Cuyo', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1778, 'country_id' => 165, 'name' => 'Cuzco', 'name_ru' => 'Куско', 'gmt_offset' => -5,
			), array(
				'id' => 1779, 'country_id' => 170, 'name' => 'Czestochowa', 'name_ru' => 'Щесточова', 'gmt_offset' => 1,
			), array(
				'id' => 1780, 'country_id' => 223, 'name' => 'Da Nang', 'name_ru' => 'Да-Нанг', 'gmt_offset' => 7,
			), array(
				'id' => 1781, 'country_id' => 61, 'name' => 'Dabaa City', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1782, 'country_id' => 63, 'name' => 'Dabo', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 1783, 'country_id' => 95, 'name' => 'Dabra', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1784, 'country_id' => 169, 'name' => 'Dadu', 'name_ru' => 'Даду', 'gmt_offset' => 5,
			), array(
				'id' => 1785, 'country_id' => 115, 'name' => 'Daegu', 'name_ru' => 'Даегу', 'gmt_offset' => 9,
			), array(
				'id' => 1786, 'country_id' => 168, 'name' => 'Daet', 'name_ru' => 'Дает', 'gmt_offset' => 8,
			), array(
				'id' => 1787, 'country_id' => 216, 'name' => 'Daggett', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1788, 'country_id' => 216, 'name' => 'Dahl Creek', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1789, 'country_id' => 158, 'name' => 'Dahlgren', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 1790, 'country_id' => 192, 'name' => 'Dakar', 'name_ru' => 'Дакар', 'gmt_offset' => 0,
			), array(
				'id' => 1791, 'country_id' => 62, 'name' => 'Dakhla', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1792, 'country_id' => 61, 'name' => 'Dakhla Oasis', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1793, 'country_id' => 208, 'name' => 'Dalaman', 'name_ru' => 'Даламан', 'gmt_offset' => 2,
			), array(
				'id' => 1794, 'country_id' => 138, 'name' => 'Dalanzadgad', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1795, 'country_id' => 223, 'name' => 'Dalat', 'name_ru' => 'Далат', 'gmt_offset' => -7,
			), array(
				'id' => 1796, 'country_id' => 169, 'name' => 'Dalbandin', 'name_ru' => 'Далбандин', 'gmt_offset' => -5,
			), array(
				'id' => 1797, 'country_id' => 14, 'name' => 'Dalby', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 1798, 'country_id' => 14, 'name' => 'Dalgaranga', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1799, 'country_id' => 54, 'name' => 'Dalhart', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 1800, 'country_id' => 45, 'name' => 'Dali City', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1801, 'country_id' => 45, 'name' => 'Dalian', 'name_ru' => 'Далиан', 'gmt_offset' => 8,
			), array(
				'id' => 1802, 'country_id' => 216, 'name' => 'Dallas', 'name_ru' => 'Даллас', 'gmt_offset' => -6,
			), array(
				'id' => 1803, 'country_id' => 216, 'name' => 'Dallas, TX', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1804, 'country_id' => 41, 'name' => 'Daloa', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1805, 'country_id' => 216, 'name' => 'Dalton', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1806, 'country_id' => 14, 'name' => 'Daly River', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 1807, 'country_id' => 14, 'name' => 'Daly Waters', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 1808, 'country_id' => 99, 'name' => 'Daman', 'name_ru' => 'Даман', 'gmt_offset' => -5.5,
			), array(
				'id' => 1809, 'country_id' => 197, 'name' => 'Damascus', 'name_ru' => 'Дамаск', 'gmt_offset' => 2,
			), array(
				'id' => 1810, 'country_id' => 150, 'name' => 'Dambula', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1811, 'country_id' => 182, 'name' => 'Dammam', 'name_ru' => 'Дамман', 'gmt_offset' => 3,
			), array(
				'id' => 1812, 'country_id' => 41, 'name' => 'Danane', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1813, 'country_id' => 216, 'name' => 'Danbury, CT', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1814, 'country_id' => 45, 'name' => 'Dandong', 'name_ru' => 'Даньдон', 'gmt_offset' => -8,
			), array(
				'id'         => 1815, 'country_id' => 159, 'name' => 'Dang', 'name_ru' => 'Данг',
				'gmt_offset' => -5.7999999999999998,
			), array(
				'id' => 1816, 'country_id' => 216, 'name' => 'Danger Bay', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1817, 'country_id' => 34, 'name' => 'Dangriga', 'name_ru' => 'Дангрига', 'gmt_offset' => -6,
			), array(
				'id' => 1818, 'country_id' => 35, 'name' => 'Daniels Harbour', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1819, 'country_id' => 216, 'name' => 'Dansville', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1820, 'country_id' => 216, 'name' => 'Danville', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1821, 'country_id' => 216, 'name' => 'Danville, IL', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1822, 'country_id' => 99, 'name' => 'Daparizo', 'name_ru' => 'Дапаризо', 'gmt_offset' => 5.5,
			), array(
				'id' => 1823, 'country_id' => 212, 'name' => 'Dar Es Salaam', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id'         => 1824, 'country_id' => 159, 'name' => 'Darchula', 'name_ru' => 'Дарчула',
				'gmt_offset' => -5.7999999999999998,
			), array(
				'id' => 1825, 'country_id' => 162, 'name' => 'Dargaville', 'name_ru' => 'Даргавиль', 'gmt_offset' => 13,
			), array(
				'id' => 1826, 'country_id' => 99, 'name' => 'Darjeeling', 'name_ru' => 'Дарцзилин', 'gmt_offset' => 5.5,
			), array(
				'id' => 1827, 'country_id' => 14, 'name' => 'Darnley Island', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1828, 'country_id' => 167, 'name' => 'Daru', 'name_ru' => 'Дару', 'gmt_offset' => 0,
			), array(
				'id' => 1829, 'country_id' => 3, 'name' => 'Darwaz', 'name_ru' => 'Дарваз', 'gmt_offset' => 0,
			), array(
				'id' => 1830, 'country_id' => 14, 'name' => 'Darwin', 'name_ru' => 'Дарвин', 'gmt_offset' => 9.5,
			), array(
				'id' => 1831, 'country_id' => 204, 'name' => 'Dashoguz', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 1832, 'country_id' => 95, 'name' => 'Datadawai', 'name_ru' => 'Датадавай', 'gmt_offset' => -8,
			), array(
				'id' => 1833, 'country_id' => 227, 'name' => 'Dathina', 'name_ru' => 'Датина', 'gmt_offset' => -3,
			), array(
				'id' => 1834, 'country_id' => 45, 'name' => 'Datong', 'name_ru' => 'Датонг', 'gmt_offset' => 0,
			), array(
				'id' => 1835, 'country_id' => 14, 'name' => 'Dauan Island', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1836, 'country_id' => 127, 'name' => 'Daugavpils', 'name_ru' => 'Даугавпилс', 'gmt_offset' => 2,
			), array(
				'id' => 1837, 'country_id' => 167, 'name' => 'Daugo', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1838, 'country_id' => 167, 'name' => 'Daup', 'name_ru' => 'Доп', 'gmt_offset' => 10,
			), array(
				'id' => 1839, 'country_id' => 35, 'name' => 'Dauphin', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1840, 'country_id' => 168, 'name' => 'Davao', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 1841, 'country_id' => 216, 'name' => 'Davenport', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1842, 'country_id' => 14, 'name' => 'Davenport Downs', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1843, 'country_id' => 164, 'name' => 'David', 'name_ru' => 'Давид', 'gmt_offset' => -5,
			), array(
				'id' => 1844, 'country_id' => 35, 'name' => 'Davis Inlet', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 1845, 'country_id' => 182, 'name' => 'Dawadmi', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 1846, 'country_id' => 137, 'name' => 'Dawe', 'name_ru' => NULL, 'gmt_offset' => -6.5,
			), array(
				'id' => 1847, 'country_id' => 35, 'name' => 'Dawson City', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1848, 'country_id' => 35, 'name' => 'Dawson Creek', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 1849, 'country_id' => 45, 'name' => 'Daxian', 'name_ru' => 'Дэцзян', 'gmt_offset' => -8,
			), array(
				'id' => 1850, 'country_id' => 14, 'name' => 'Daydream Is', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 1851, 'country_id' => 45, 'name' => 'Dayong', 'name_ru' => 'Дэань', 'gmt_offset' => -8,
			), array(
				'id' => 1852, 'country_id' => 35, 'name' => 'Dayton', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1853, 'country_id' => 216, 'name' => 'Dayton, Oh', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id'         => 1854, 'country_id' => 216, 'name' => 'Daytona Beach', 'name_ru' => 'Дайтона Бич',
				'gmt_offset' => -5,
			), array(
				'id' => 1855, 'country_id' => 45, 'name' => 'Dazu', 'name_ru' => 'Дазу', 'gmt_offset' => -8,
			), array(
				'id' => 1856, 'country_id' => 157, 'name' => 'De Ridder', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 1857, 'country_id' => 35, 'name' => 'Dean River', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1858, 'country_id' => 216, 'name' => 'Dearborn', 'name_ru' => 'Диарборн', 'gmt_offset' => -5,
			), array(
				'id' => 1859, 'country_id' => 35, 'name' => 'Dease Lake', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id'         => 1860, 'country_id' => 216, 'name' => 'Death Valley', 'name_ru' => 'Долина Смерти',
				'gmt_offset' => -8,
			), array(
				'id' => 1861, 'country_id' => 71, 'name' => 'Deauville', 'name_ru' => 'Дювиль', 'gmt_offset' => 1,
			), array(
				'id' => 1862, 'country_id' => 167, 'name' => 'Debepare', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id'         => 1863, 'country_id' => 65, 'name' => 'Debra Marcos', 'name_ru' => 'Дебра-Маркос',
				'gmt_offset' => 3,
			), array(
				'id'         => 1864, 'country_id' => 65, 'name' => 'Debra Tabor', 'name_ru' => 'Дебра-Табор',
				'gmt_offset' => -3,
			), array(
				'id' => 1865, 'country_id' => 94, 'name' => 'Debrecen', 'name_ru' => 'Дебрецен', 'gmt_offset' => 1,
			), array(
				'id' => 1866, 'country_id' => 216, 'name' => 'Decatur', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1867, 'country_id' => 216, 'name' => 'Decatur Island', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1868, 'country_id' => 35, 'name' => 'Deception', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 1869, 'country_id' => 103, 'name' => 'Decimomannu', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 1870, 'country_id' => 216, 'name' => 'Decorah', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1871, 'country_id' => 21, 'name' => 'Dedougou', 'name_ru' => 'Дедугу', 'gmt_offset' => 0,
			), array(
				'id' => 1872, 'country_id' => 216, 'name' => 'Deep Bay', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1873, 'country_id' => 35, 'name' => 'Deer Lake', 'name_ru' => NULL, 'gmt_offset' => -3.5,
			), array(
				'id' => 1874, 'country_id' => 216, 'name' => 'Deer Park', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1875, 'country_id' => 216, 'name' => 'Deering', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1876, 'country_id' => 216, 'name' => 'Defiance', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1877, 'country_id' => 65, 'name' => 'Degahbur', 'name_ru' => 'Дегабур', 'gmt_offset' => -3,
			), array(
				'id' => 1878, 'country_id' => 99, 'name' => 'Dehra Dun', 'name_ru' => 'Дера Дун', 'gmt_offset' => 5.5,
			), array(
				'id' => 1879, 'country_id' => 197, 'name' => 'Deirezzor', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 1880, 'country_id' => 216, 'name' => 'Del Rio', 'name_ru' => 'Дель Рио', 'gmt_offset' => -6,
			), array(
				'id' => 1881, 'country_id' => 35, 'name' => 'Deline', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 1882, 'country_id' => 14, 'name' => 'Delissaville', 'name_ru' => NULL, 'gmt_offset' => 9.5,
			), array(
				'id' => 1883, 'country_id' => 216, 'name' => 'Delta', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 1884, 'country_id' => 14, 'name' => 'Delta Downs', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1885, 'country_id' => 216, 'name' => 'Delta Junction', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1886, 'country_id' => 65, 'name' => 'Dembidollo', 'name_ru' => 'Дембидолло', 'gmt_offset' => -3,
			), array(
				'id' => 1887, 'country_id' => 216, 'name' => 'Deming', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 1888, 'country_id' => 157, 'name' => 'Den Helder', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 1889, 'country_id' => 14, 'name' => 'Denham', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1890, 'country_id' => 14, 'name' => 'Deniliquin', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1891, 'country_id' => 184, 'name' => 'Denis Island', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 1892, 'country_id' => 216, 'name' => 'Denison', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1893, 'country_id' => 208, 'name' => 'Denizli', 'name_ru' => 'Денизли', 'gmt_offset' => 2,
			), array(
				'id' => 1894, 'country_id' => 95, 'name' => 'Denpasar, Bali', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 1895, 'country_id' => 216, 'name' => 'Denver', 'name_ru' => 'Денвер', 'gmt_offset' => -7,
			), array(
				'id' => 1896, 'country_id' => 101, 'name' => 'Deparizo', 'name_ru' => NULL, 'gmt_offset' => 3.5,
			), array(
				'id' => 1897, 'country_id' => 169, 'name' => 'Dera Ghazi Khan', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id'         => 1898, 'country_id' => 169, 'name' => 'Dera Ismail Khan', 'name_ru' => 'Дера-Исмаил-Хан',
				'gmt_offset' => 5,
			), array(
				'id' => 1899, 'country_id' => 14, 'name' => 'Derby', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1900, 'country_id' => 167, 'name' => 'Derim', 'name_ru' => 'Дерим', 'gmt_offset' => -10,
			), array(
				'id' => 1901, 'country_id' => 128, 'name' => 'Derna', 'name_ru' => 'Дерна', 'gmt_offset' => -2,
			), array(
				'id' => 1902, 'country_id' => 73, 'name' => 'Derry', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1903, 'country_id' => 216, 'name' => 'Des Moines, IA', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1904, 'country_id' => 35, 'name' => 'Desolation Sound', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1905, 'country_id' => 184, 'name' => 'Desroches', 'name_ru' => 'Десрочес', 'gmt_offset' => 4,
			), array(
				'id' => 1906, 'country_id' => 65, 'name' => 'Dessie', 'name_ru' => 'Десси', 'gmt_offset' => 3,
			), array(
				'id' => 1907, 'country_id' => 216, 'name' => 'Destin', 'name_ru' => 'Дестин', 'gmt_offset' => -6,
			), array(
				'id' => 1908, 'country_id' => 216, 'name' => 'Detroit', 'name_ru' => 'Детройт', 'gmt_offset' => -5,
			), array(
				'id' => 1909, 'country_id' => 216, 'name' => 'Detroit Lakes', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1910, 'country_id' => 216, 'name' => 'Detroit, MI', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1911, 'country_id' => 71, 'name' => 'Deux Alpes', 'name_ru' => 'До-Альпес', 'gmt_offset' => 1,
			), array(
				'id' => 1912, 'country_id' => 178, 'name' => 'Deva', 'name_ru' => 'Дева', 'gmt_offset' => 2,
			), array(
				'id' => 1913, 'country_id' => 216, 'name' => 'Devils Lake', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1914, 'country_id' => 14, 'name' => 'Devonport', 'name_ru' => 'Девонпорт', 'gmt_offset' => 11,
			), array(
				'id' => 1915, 'country_id' => 101, 'name' => 'Dezful', 'name_ru' => NULL, 'gmt_offset' => 3.5,
			), array(
				'id' => 1916, 'country_id' => 182, 'name' => 'Dhahran', 'name_ru' => 'Дхахран', 'gmt_offset' => 3,
			), array(
				'id' => 1917, 'country_id' => 19, 'name' => 'Dhaka', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 1918, 'country_id' => 227, 'name' => 'Dhala', 'name_ru' => 'Дала', 'gmt_offset' => 3,
			), array(
				'id' => 1919, 'country_id' => 227, 'name' => 'Dhamar', 'name_ru' => 'Дамар', 'gmt_offset' => -3,
			), array(
				'id' => 1920, 'country_id' => 99, 'name' => 'Dhanbad', 'name_ru' => 'Дханбад', 'gmt_offset' => -5.5,
			), array(
				'id'         => 1921, 'country_id' => 159, 'name' => 'Dhangarhi', 'name_ru' => 'Дхангархи',
				'gmt_offset' => -5.7999999999999998,
			), array(
				'id'         => 1922, 'country_id' => 99, 'name' => 'Dharamsala', 'name_ru' => 'Дхарамсала',
				'gmt_offset' => 5.5,
			), array(
				'id' => 1923, 'country_id' => 14, 'name' => 'Diamantina Lakes', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1924, 'country_id' => 29, 'name' => 'Diamantino', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 1925, 'country_id' => 29, 'name' => 'Dianopolis', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 1926, 'country_id' => 21, 'name' => 'Diapaga', 'name_ru' => 'Диапага', 'gmt_offset' => 0,
			), array(
				'id' => 1927, 'country_id' => 35, 'name' => 'Diavik', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1928, 'country_id' => 2, 'name' => 'Dibaa', 'name_ru' => 'Дибаа', 'gmt_offset' => 4,
			), array(
				'id' => 1929, 'country_id' => 99, 'name' => 'Dibrugarh', 'name_ru' => 'Дибругарх', 'gmt_offset' => 5.5,
			), array(
				'id' => 1930, 'country_id' => 216, 'name' => 'Dickinson', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 1931, 'country_id' => 122, 'name' => 'Dickwella', 'name_ru' => 'Диквелла', 'gmt_offset' => 0,
			), array(
				'id' => 1932, 'country_id' => 21, 'name' => 'Diebougou', 'name_ru' => 'Диебугу', 'gmt_offset' => 0,
			), array(
				'id' => 1933, 'country_id' => 223, 'name' => 'Dien Bien Phu', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 1934, 'country_id' => 71, 'name' => 'Dieppe', 'name_ru' => 'Дьеп', 'gmt_offset' => 1,
			), array(
				'id' => 1935, 'country_id' => 35, 'name' => 'Digby', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 1936, 'country_id' => 71, 'name' => 'Dijon', 'name_ru' => 'Дижон', 'gmt_offset' => 1,
			), array(
				'id' => 1937, 'country_id' => 180, 'name' => 'Dikson', 'name_ru' => 'Диксон', 'gmt_offset' => -5,
			), array(
				'id' => 1938, 'country_id' => 168, 'name' => 'Dilasag', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1939, 'country_id' => 95, 'name' => 'Dili', 'name_ru' => 'Дили', 'gmt_offset' => 9,
			), array(
				'id' => 1940, 'country_id' => 216, 'name' => 'Dillingham', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1941, 'country_id' => 216, 'name' => 'Dillon', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id'         => 1942, 'country_id' => 224, 'name' => 'Dillons Bay', 'name_ru' => 'Диллонс-Бей',
				'gmt_offset' => -11,
			), array(
				'id' => 1943, 'country_id' => 99, 'name' => 'Dimapur', 'name_ru' => 'Димапур', 'gmt_offset' => -5.5,
			), array(
				'id' => 1944, 'country_id' => 41, 'name' => 'Dimbokro', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1945, 'country_id' => 167, 'name' => 'Dinangat', 'name_ru' => 'Динангат', 'gmt_offset' => -10,
			), array(
				'id' => 1946, 'country_id' => 71, 'name' => 'Dinard', 'name_ru' => 'Динард', 'gmt_offset' => 1,
			), array(
				'id' => 1947, 'country_id' => 65, 'name' => 'Dinder', 'name_ru' => 'Диндер', 'gmt_offset' => 0,
			), array(
				'id' => 1948, 'country_id' => 216, 'name' => 'Diomede Island', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1949, 'country_id' => 167, 'name' => 'Dios', 'name_ru' => 'Диос', 'gmt_offset' => -10,
			), array(
				'id' => 1950, 'country_id' => 168, 'name' => 'Dipolog', 'name_ru' => 'Диполог', 'gmt_offset' => -8,
			), array(
				'id' => 1951, 'country_id' => 45, 'name' => 'Diqing', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1952, 'country_id' => 65, 'name' => 'Dire Dawa', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 1953, 'country_id' => 9, 'name' => 'Dirico', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 1954, 'country_id' => 14, 'name' => 'Dirranbandi', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1955, 'country_id' => 71, 'name' => 'Disneyland Paris', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 1956, 'country_id' => 99, 'name' => 'Diu', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1957, 'country_id' => 29, 'name' => 'Divinopolis', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1958, 'country_id' => 41, 'name' => 'Divo', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1959, 'country_id' => 14, 'name' => 'Dixie', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1960, 'country_id' => 208, 'name' => 'Diyarbakir', 'name_ru' => 'Диярбакыр', 'gmt_offset' => 2,
			), array(
				'id' => 1961, 'country_id' => 39, 'name' => 'Djambala', 'name_ru' => 'Джамбала', 'gmt_offset' => 1,
			), array(
				'id' => 1962, 'country_id' => 58, 'name' => 'Djanet', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 1963, 'country_id' => 205, 'name' => 'Djerba', 'name_ru' => 'Джерба', 'gmt_offset' => 1,
			), array(
				'id' => 1964, 'country_id' => 21, 'name' => 'Djibo', 'name_ru' => 'Джибо', 'gmt_offset' => 0,
			), array(
				'id' => 1965, 'country_id' => 54, 'name' => 'Djibouti', 'name_ru' => 'Джибути', 'gmt_offset' => 3,
			), array(
				'id' => 1966, 'country_id' => 194, 'name' => 'Djoemoe', 'name_ru' => 'Дьомье', 'gmt_offset' => -3,
			), array(
				'id' => 1967, 'country_id' => 25, 'name' => 'Djougou', 'name_ru' => 'Джугу', 'gmt_offset' => 0,
			), array(
				'id' => 1968, 'country_id' => 102, 'name' => 'Djupivogur', 'name_ru' => 'Джупивогур', 'gmt_offset' => 0,
			), array(
				'id'         => 1969, 'country_id' => 213, 'name' => 'Dnepropetrovsk', 'name_ru' => 'Днепропетровск',
				'gmt_offset' => 3,
			), array(
				'id' => 1970, 'country_id' => 133, 'name' => 'Doany', 'name_ru' => 'Доани', 'gmt_offset' => 3,
			), array(
				'id' => 1971, 'country_id' => 95, 'name' => 'Dobo', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1972, 'country_id' => 35, 'name' => 'Doc Creek', 'name_ru' => 'Док-Крик', 'gmt_offset' => 8,
			), array(
				'id' => 1973, 'country_id' => 14, 'name' => 'Docker River', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 1974, 'country_id' => 216, 'name' => 'Dodge City', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 1975, 'country_id' => 167, 'name' => 'Dodoima', 'name_ru' => 'Додоима', 'gmt_offset' => -10,
			), array(
				'id' => 1976, 'country_id' => 212, 'name' => 'Dodoma', 'name_ru' => 'Додома', 'gmt_offset' => 3,
			), array(
				'id' => 1977, 'country_id' => 176, 'name' => 'Doha', 'name_ru' => 'Доха', 'gmt_offset' => 3,
			), array(
				'id' => 1978, 'country_id' => 167, 'name' => 'Doini', 'name_ru' => 'Дойни', 'gmt_offset' => -10,
			), array(
				'id' => 1979, 'country_id' => 35, 'name' => 'Dolbeau', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 1980, 'country_id' => 71, 'name' => 'Dole', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 1981, 'country_id' => 216, 'name' => 'Dolomi', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id'         => 1982, 'country_id' => 159, 'name' => 'Dolpa', 'name_ru' => 'Дольпа',
				'gmt_offset' => 5.7000000000000002,
			), array(
				'id' => 1983, 'country_id' => 56, 'name' => 'Dominica', 'name_ru' => 'Доминика', 'gmt_offset' => -4,
			), array(
				'id' => 1984, 'country_id' => 73, 'name' => 'Doncaster Sheffield', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1985, 'country_id' => 213, 'name' => 'Donetsk', 'name_ru' => 'Донецк', 'gmt_offset' => 3,
			), array(
				'id' => 1986, 'country_id' => 14, 'name' => 'Dongara', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1987, 'country_id' => 45, 'name' => 'Dongguan', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1988, 'country_id' => 185, 'name' => 'Dongola', 'name_ru' => 'Донгола', 'gmt_offset' => 3,
			), array(
				'id' => 1989, 'country_id' => 45, 'name' => 'Dongsheng', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 1990, 'country_id' => 45, 'name' => 'Dongying', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 1991, 'country_id' => 14, 'name' => 'Doomadgee', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 1992, 'country_id' => 168, 'name' => 'Doongan', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 1993, 'country_id' => 216, 'name' => 'Dora Bay', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 1994, 'country_id' => 172, 'name' => 'Dorado', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 1995, 'country_id' => 21, 'name' => 'Dori', 'name_ru' => 'Дори', 'gmt_offset' => 0,
			), array(
				'id' => 1996, 'country_id' => 73, 'name' => 'Dornoch', 'name_ru' => 'Дорноч', 'gmt_offset' => 0,
			), array(
				'id'         => 1997, 'country_id' => 167, 'name' => 'Dorobisoro', 'name_ru' => 'Доробисоро',
				'gmt_offset' => 10,
			), array(
				'id' => 1998, 'country_id' => 53, 'name' => 'Dortmund', 'name_ru' => 'Дортмунд', 'gmt_offset' => 1,
			), array(
				'id' => 1999, 'country_id' => 14, 'name' => 'Dorunda Station', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id'         => 2000, 'country_id' => 86, 'name' => 'Dos Lagunas', 'name_ru' => 'Дос-Лагунас',
				'gmt_offset' => 6,
			),
				array(
					'id' => 2001, 'country_id' => 216, 'name' => 'Dothan', 'name_ru' => NULL, 'gmt_offset' => -6,
				), 1 => array(
				'id' => 2002, 'country_id' => 44, 'name' => 'Douala', 'name_ru' => 'Дуала', 'gmt_offset' => 1,
			), array(
				'id' => 2003, 'country_id' => 216, 'name' => 'Douglas', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2004, 'country_id' => 29, 'name' => 'Dourados', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 2005, 'country_id' => 216, 'name' => 'Dover-Cheswold', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2006, 'country_id' => 216, 'name' => 'Downey', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2007, 'country_id' => 216, 'name' => 'Doylestown', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2008, 'country_id' => 85, 'name' => 'Drama', 'name_ru' => 'Драма', 'gmt_offset' => 2,
			), array(
				'id' => 2009, 'country_id' => 35, 'name' => 'Drayton Valley', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 2010, 'country_id' => 53, 'name' => 'Dresden', 'name_ru' => 'Дрезден', 'gmt_offset' => 1,
			), array(
				'id'         => 2011, 'country_id' => 194, 'name' => 'Drietabbetje', 'name_ru' => 'Дриетаббетье',
				'gmt_offset' => 0,
			), array(
				'id' => 2012, 'country_id' => 216, 'name' => 'Drift River', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2013, 'country_id' => 14, 'name' => 'Drumduff', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 2014, 'country_id' => 216, 'name' => 'Drummond', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2015, 'country_id' => 216, 'name' => 'Drummond Island', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2016, 'country_id' => 35, 'name' => 'Dryden', 'name_ru' => 'Драйден', 'gmt_offset' => -6,
			), array(
				'id' => 2017, 'country_id' => 14, 'name' => 'Drysdale River', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2018, 'country_id' => 44, 'name' => 'Dschang', 'name_ru' => 'Дшанг', 'gmt_offset' => 1,
			), array(
				'id' => 2019, 'country_id' => 216, 'name' => 'Du Bois', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2020, 'country_id' => 2, 'name' => 'Dubai', 'name_ru' => 'Дубай', 'gmt_offset' => 4,
			), array(
				'id' => 2021, 'country_id' => 14, 'name' => 'Dubbo', 'name_ru' => 'Дуббо', 'gmt_offset' => 11,
			), array(
				'id' => 2022, 'country_id' => 216, 'name' => 'Dublin', 'name_ru' => 'Дублин', 'gmt_offset' => -5,
			), array(
				'id' => 2023, 'country_id' => 216, 'name' => 'Dubois', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2024, 'country_id' => 92, 'name' => 'Dubrovnik', 'name_ru' => 'Дубровник', 'gmt_offset' => 1,
			), array(
				'id' => 2025, 'country_id' => 216, 'name' => 'Dubuque', 'name_ru' => 'Дюбюк', 'gmt_offset' => -6,
			), array(
				'id' => 2026, 'country_id' => 168, 'name' => 'Dugong', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2027, 'country_id' => 216, 'name' => 'Dugway', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2028, 'country_id' => 228, 'name' => 'Dukuduk', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 2029, 'country_id' => 14, 'name' => 'Dulkaninna', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 2030, 'country_id' => 216, 'name' => 'Duluth', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2031, 'country_id' => 168, 'name' => 'Dumaguete', 'name_ru' => 'Думагете', 'gmt_offset' => 8,
			), array(
				'id' => 2032, 'country_id' => 95, 'name' => 'Dumai', 'name_ru' => 'Думаи', 'gmt_offset' => -7,
			), array(
				'id' => 2033, 'country_id' => 167, 'name' => 'Dumpu', 'name_ru' => 'Думпу', 'gmt_offset' => 10,
			), array(
				'id' => 2034, 'country_id' => 14, 'name' => 'Dunbar', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 2035, 'country_id' => 216, 'name' => 'Duncan', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2036, 'country_id' => 30, 'name' => 'Duncan Town', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 2037, 'country_id' => 35, 'name' => 'Duncan/Quam', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2038, 'country_id' => 80, 'name' => 'Dundas', 'name_ru' => 'Дундас', 'gmt_offset' => -4,
			), array(
				'id' => 2039, 'country_id' => 73, 'name' => 'Dundee', 'name_ru' => 'Данди', 'gmt_offset' => 0,
			), array(
				'id' => 2040, 'country_id' => 9, 'name' => 'Dundo', 'name_ru' => 'Дундо', 'gmt_offset' => 1,
			), array(
				'id' => 2041, 'country_id' => 162, 'name' => 'Dunedin', 'name_ru' => 'Дунедин', 'gmt_offset' => 13,
			), array(
				'id' => 2042, 'country_id' => 45, 'name' => 'Dunhuang', 'name_ru' => 'Дунхуань', 'gmt_offset' => -8,
			), array(
				'id'         => 2043, 'country_id' => 14, 'name' => 'Dunk Island', 'name_ru' => 'Данк Айленд',
				'gmt_offset' => 10,
			), array(
				'id' => 2044, 'country_id' => 216, 'name' => 'Dunkirk', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2045, 'country_id' => 216, 'name' => 'Durango', 'name_ru' => 'Дуранго', 'gmt_offset' => -7,
			), array(
				'id' => 2046, 'country_id' => 216, 'name' => 'Durant', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2047, 'country_id' => 217, 'name' => 'Durazno', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 2048, 'country_id' => 228, 'name' => 'Durban', 'name_ru' => 'Дурбан', 'gmt_offset' => 2,
			), array(
				'id' => 2049, 'country_id' => 14, 'name' => 'Durham Downs', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 2050, 'country_id' => 14, 'name' => 'Durrie', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 2051, 'country_id' => 203, 'name' => 'Dushanbe', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 2052, 'country_id' => 53, 'name' => 'Dusseldorf', 'name_ru' => 'Дюссельдорф', 'gmt_offset' => 1,
			), array(
				'id' => 2053, 'country_id' => 216, 'name' => 'Dutch Harbor', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 2054, 'country_id' => 147, 'name' => 'Dwangwa', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 2055, 'country_id' => 14, 'name' => 'Dysart', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 2056, 'country_id' => 112, 'name' => 'Dzaoudzi', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 2057, 'country_id' => 216, 'name' => 'Eagle', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2058, 'country_id' => 216, 'name' => 'Eagle Lake', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2059, 'country_id' => 216, 'name' => 'Eagle Pass', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2060, 'country_id' => 216, 'name' => 'Eagle River', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2061, 'country_id' => 35, 'name' => 'Earlton', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2062, 'country_id' => 216, 'name' => 'East Fork', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2063, 'country_id' => 216, 'name' => 'East Hampton', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2064, 'country_id' => 216, 'name' => 'East Hartford', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id'         => 2065, 'country_id' => 228, 'name' => 'East London', 'name_ru' => 'Ист-Лондон',
				'gmt_offset' => 2,
			), array(
				'id' => 2066, 'country_id' => 35, 'name' => 'East Main', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 2067, 'country_id' => 216, 'name' => 'East Stroudsburg', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2068, 'country_id' => 216, 'name' => 'East Tawas', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2069, 'country_id' => 216, 'name' => 'Eastland', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id'         => 2070, 'country_id' => 73, 'name' => 'Eastleigh near Southampton', 'name_ru' => NULL,
				'gmt_offset' => 0,
			), array(
				'id' => 2071, 'country_id' => 216, 'name' => 'Easton', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2072, 'country_id' => 216, 'name' => 'Eastsound', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2073, 'country_id' => 216, 'name' => 'Eau Claire, WI', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2074, 'country_id' => 134, 'name' => 'Ebadon', 'name_ru' => 'Эбадон', 'gmt_offset' => 12,
			), array(
				'id' => 2075, 'country_id' => 44, 'name' => 'Ebolowa', 'name_ru' => 'Эболова', 'gmt_offset' => -1,
			), array(
				'id' => 2076, 'country_id' => 134, 'name' => 'Ebon', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2077, 'country_id' => 14, 'name' => 'Echuca', 'name_ru' => 'Эчука', 'gmt_offset' => -10,
			), array(
				'id' => 2078, 'country_id' => 73, 'name' => 'Eday', 'name_ru' => 'Эдей', 'gmt_offset' => 0,
			), array(
				'id' => 2079, 'country_id' => 216, 'name' => 'Edenton', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2080, 'country_id' => 216, 'name' => 'Edgewood', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 2081, 'country_id' => 73, 'name' => 'Edinburgh', 'name_ru' => 'Эдинбург', 'gmt_offset' => 0,
			), array(
				'id' => 2082, 'country_id' => 35, 'name' => 'Edmonton', 'name_ru' => 'Едмонтон', 'gmt_offset' => -7,
			), array(
				'id' => 2083, 'country_id' => 35, 'name' => 'Edmonton, AB', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2084, 'country_id' => 216, 'name' => 'Edna Bay', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2085, 'country_id' => 208, 'name' => 'Edremit/korfez', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 2086, 'country_id' => 35, 'name' => 'Edson', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2087, 'country_id' => 14, 'name' => 'Edward River', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 2088, 'country_id' => 216, 'name' => 'Edwards AFB', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2089, 'country_id' => 216, 'name' => 'Eek', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2090, 'country_id' => 167, 'name' => 'Efogi', 'name_ru' => 'Эфоги', 'gmt_offset' => 10,
			), array(
				'id' => 2091, 'country_id' => 216, 'name' => 'Egegik', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id'         => 2092, 'country_id' => 102, 'name' => 'Egilsstadir', 'name_ru' => 'Эгилсстадир',
				'gmt_offset' => 0,
			), array(
				'id' => 2093, 'country_id' => 167, 'name' => 'Eia', 'name_ru' => 'Эйя', 'gmt_offset' => -10,
			), array(
				'id'         => 2094, 'country_id' => 216, 'name' => 'Eight Fathom Bight', 'name_ru' => NULL,
				'gmt_offset' => -9,
			), array(
				'id' => 2095, 'country_id' => 193, 'name' => 'Eil', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 2096, 'country_id' => 97, 'name' => 'Eilat', 'name_ru' => 'Эйлат', 'gmt_offset' => 2,
			), array(
				'id' => 2097, 'country_id' => 97, 'name' => 'Ein Yahav', 'name_ru' => 'Эйн-Яхав', 'gmt_offset' => 2,
			), array(
				'id' => 2098, 'country_id' => 14, 'name' => 'Einasleigh', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 2099, 'country_id' => 157, 'name' => 'Eindhoven', 'name_ru' => 'Эйндховен', 'gmt_offset' => 1,
			), array(
				'id' => 2100, 'country_id' => 29, 'name' => 'Eirunepe', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 2101, 'country_id' => 53, 'name' => 'Eisenach', 'name_ru' => 'Айзенах', 'gmt_offset' => 1,
			), array(
				'id'         => 2102, 'country_id' => 180, 'name' => 'Ekaterinburg', 'name_ru' => 'Екатеринбург',
				'gmt_offset' => 6,
			), array(
				'id' => 2103, 'country_id' => 85, 'name' => 'Ekati', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 2104, 'country_id' => 89, 'name' => 'Ekereku', 'name_ru' => 'Экереку', 'gmt_offset' => 3,
			), array(
				'id' => 2105, 'country_id' => 118, 'name' => 'Ekibastuz', 'name_ru' => 'Экибастуз', 'gmt_offset' => 6,
			), array(
				'id' => 2106, 'country_id' => 216, 'name' => 'Ekuk', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2107, 'country_id' => 216, 'name' => 'Ekwok', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2108, 'country_id' => 46, 'name' => 'El Bagre', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 2109, 'country_id' => 46, 'name' => 'El Banco', 'name_ru' => 'Эль-Банко', 'gmt_offset' => -5,
			), array(
				'id' => 2110, 'country_id' => 11, 'name' => 'El Bolson', 'name_ru' => 'Эль-Больсон', 'gmt_offset' => -3,
			), array(
				'id' => 2111, 'country_id' => 205, 'name' => 'El Borma', 'name_ru' => 'Эль-Борма', 'gmt_offset' => 1,
			), array(
				'id' => 2112, 'country_id' => 11, 'name' => 'El Calafate', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 2113, 'country_id' => 216, 'name' => 'El Centro, CA', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2114, 'country_id' => 46, 'name' => 'El Charco', 'name_ru' => 'Эль-Чарко', 'gmt_offset' => 5,
			), array(
				'id' => 2115, 'country_id' => 216, 'name' => 'El Dorado', 'name_ru' => 'Эль-Дорадо', 'gmt_offset' => -6,
			), array(
				'id' => 2116, 'country_id' => 46, 'name' => 'El Encanto', 'name_ru' => 'Эль-Энканто', 'gmt_offset' => 5,
			), array(
				'id' => 2117, 'country_id' => 185, 'name' => 'El Fasher', 'name_ru' => 'Эль-Фашер', 'gmt_offset' => 3,
			), array(
				'id' => 2118, 'country_id' => 58, 'name' => 'El Golea', 'name_ru' => 'Эль-Голеа', 'gmt_offset' => 1,
			), array(
				'id' => 2119, 'country_id' => 62, 'name' => 'El Gouera', 'name_ru' => 'Эль-Гуэра', 'gmt_offset' => 0,
			), array(
				'id' => 2120, 'country_id' => 11, 'name' => 'El Maiten', 'name_ru' => 'Эль-Майтен', 'gmt_offset' => -3,
			), array(
				'id' => 2121, 'country_id' => 61, 'name' => 'El Minya', 'name_ru' => 'Эль-Минья', 'gmt_offset' => -2,
			), array(
				'id' => 2122, 'country_id' => 216, 'name' => 'El Monte', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id'         => 2123, 'country_id' => 86, 'name' => 'El Naranjo', 'name_ru' => 'Эль-Нараньо',
				'gmt_offset' => -6,
			), array(
				'id' => 2124, 'country_id' => 168, 'name' => 'El Nido', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2125, 'country_id' => 185, 'name' => 'El Obeid', 'name_ru' => 'Эль-Обейд', 'gmt_offset' => 3,
			), array(
				'id' => 2126, 'country_id' => 58, 'name' => 'El Oued', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 2127, 'country_id' => 11, 'name' => 'El Palomar', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 2128, 'country_id' => 216, 'name' => 'El Paso', 'name_ru' => 'Эль Пасо', 'gmt_offset' => -7,
			), array(
				'id'         => 2129, 'country_id' => 164, 'name' => 'El Porvenir', 'name_ru' => 'Эль-Порвенир',
				'gmt_offset' => -5,
			), array(
				'id' => 2130, 'country_id' => 164, 'name' => 'El Real', 'name_ru' => 'Эль-Реал', 'gmt_offset' => 5,
			), array(
				'id' => 2131, 'country_id' => 46, 'name' => 'El Recreo', 'name_ru' => 'Эль-Рекрео', 'gmt_offset' => 5,
			), array(
				'id' => 2132, 'country_id' => 43, 'name' => 'El Salvador', 'name_ru' => 'Сальвадор', 'gmt_offset' => 4,
			), array(
				'id' => 2133, 'country_id' => 220, 'name' => 'El Tigre', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 2134, 'country_id' => 220, 'name' => 'El Vigia', 'name_ru' => 'Эль-Вигиа', 'gmt_offset' => -4,
			), array(
				'id' => 2135, 'country_id' => 46, 'name' => 'El Yopal', 'name_ru' => 'Эль-Йопал', 'gmt_offset' => -5,
			), array(
				'id' => 2136, 'country_id' => 208, 'name' => 'Elazig', 'name_ru' => 'Элязыг', 'gmt_offset' => 2,
			), array(
				'id'         => 2137, 'country_id' => 103, 'name' => 'Elba Island', 'name_ru' => 'Остров Эльба',
				'gmt_offset' => 1,
			), array(
				'id' => 2138, 'country_id' => 14, 'name' => 'Elcho Island', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 2139, 'country_id' => 185, 'name' => 'Eldebba', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 2140, 'country_id' => 11, 'name' => 'Eldorado', 'name_ru' => 'Эльдорадо', 'gmt_offset' => -3,
			), array(
				'id' => 2141, 'country_id' => 108, 'name' => 'Eldoret', 'name_ru' => 'Элдорет', 'gmt_offset' => 3,
			), array(
				'id' => 2142, 'country_id' => 158, 'name' => 'Eldred Rock', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 2143, 'country_id' => 216, 'name' => 'Elelim', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2144, 'country_id' => 216, 'name' => 'Elfin Cove', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2145, 'country_id' => 216, 'name' => 'Elim', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2146, 'country_id' => 167, 'name' => 'Eliptamin', 'name_ru' => 'Элиптамин', 'gmt_offset' => -10,
			), array(
				'id' => 2147, 'country_id' => 180, 'name' => 'Elista', 'name_ru' => 'Элиста', 'gmt_offset' => 4,
			), array(
				'id'         => 2148, 'country_id' => 108, 'name' => 'Eliye Springs', 'name_ru' => 'Элийе-Спрингс',
				'gmt_offset' => 3,
			), array(
				'id'         => 2149, 'country_id' => 216, 'name' => 'Elizabeth City, NC', 'name_ru' => NULL,
				'gmt_offset' => -5,
			), array(
				'id' => 2150, 'country_id' => 216, 'name' => 'Elizabethtown', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2151, 'country_id' => 216, 'name' => 'Elk City', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2152, 'country_id' => 14, 'name' => 'Elkedra', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 2153, 'country_id' => 216, 'name' => 'Elkhart', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2154, 'country_id' => 216, 'name' => 'Elkins', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2155, 'country_id' => 216, 'name' => 'Elko, NV', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2156, 'country_id' => 216, 'name' => 'Ellamar', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2157, 'country_id' => 216, 'name' => 'Ellensburg', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2158, 'country_id' => 35, 'name' => 'Elliot Lake', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2159, 'country_id' => 228, 'name' => 'Ellisras', 'name_ru' => 'Эллисрас', 'gmt_offset' => 2,
			), array(
				'id' => 2160, 'country_id' => 220, 'name' => 'Elorza', 'name_ru' => 'Элорса', 'gmt_offset' => 4,
			), array(
				'id' => 2161, 'country_id' => 216, 'name' => 'Ely', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2162, 'country_id' => 224, 'name' => 'Emae', 'name_ru' => 'Эмей', 'gmt_offset' => 11,
			), array(
				'id' => 2163, 'country_id' => 167, 'name' => 'Embessa', 'name_ru' => 'Эмбесса', 'gmt_offset' => -10,
			), array(
				'id' => 2164, 'country_id' => 53, 'name' => 'Emden', 'name_ru' => 'Эмден', 'gmt_offset' => 1,
			), array(
				'id' => 2165, 'country_id' => 14, 'name' => 'Emerald', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 2166, 'country_id' => 216, 'name' => 'Emeryville', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2167, 'country_id' => 167, 'name' => 'Emirau', 'name_ru' => 'Эмирау', 'gmt_offset' => -10,
			), array(
				'id' => 2168, 'country_id' => 216, 'name' => 'Emmonak', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2169, 'country_id' => 167, 'name' => 'Emo', 'name_ru' => 'Эмо', 'gmt_offset' => -10,
			), array(
				'id' => 2170, 'country_id' => 228, 'name' => 'Empangeni', 'name_ru' => 'Эмпангени', 'gmt_offset' => 2,
			), array(
				'id' => 2171, 'country_id' => 216, 'name' => 'Emporia', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2172, 'country_id' => 185, 'name' => 'En Nahud', 'name_ru' => 'Эн-Нахуд', 'gmt_offset' => -2,
			), array(
				'id' => 2173, 'country_id' => 95, 'name' => 'Enarotali', 'name_ru' => 'Энаротали', 'gmt_offset' => 9,
			), array(
				'id'         => 2174, 'country_id' => 175, 'name' => 'Encarnacion', 'name_ru' => 'Инкарнасьон',
				'gmt_offset' => -3,
			), array(
				'id' => 2175, 'country_id' => 95, 'name' => 'Ende', 'name_ru' => 'Энде', 'gmt_offset' => 8,
			), array(
				'id' => 2176, 'country_id' => 14, 'name' => 'Eneabba West', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2177, 'country_id' => 69, 'name' => 'Enewetak Island', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2178, 'country_id' => 167, 'name' => 'Engati', 'name_ru' => 'Энгати', 'gmt_offset' => -10,
			), array(
				'id' => 2179, 'country_id' => 216, 'name' => 'Enid', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2180, 'country_id' => 180, 'name' => 'Eniseysk', 'name_ru' => 'Енисейск', 'gmt_offset' => 8,
			), array(
				'id' => 2181, 'country_id' => 186, 'name' => 'Enkoping', 'name_ru' => 'Енкопинг', 'gmt_offset' => 1,
			), array(
				'id' => 2182, 'country_id' => 73, 'name' => 'Enniskillen', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2183, 'country_id' => 66, 'name' => 'Enontekio', 'name_ru' => 'Енонтекио', 'gmt_offset' => 2,
			), array(
				'id' => 2184, 'country_id' => 157, 'name' => 'Enschede', 'name_ru' => 'Энсхеде', 'gmt_offset' => 1,
			), array(
				'id' => 2185, 'country_id' => 148, 'name' => 'Ensenada', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 2186, 'country_id' => 45, 'name' => 'Enshi', 'name_ru' => 'Энши', 'gmt_offset' => -8,
			), array(
				'id' => 2187, 'country_id' => 214, 'name' => 'Entebbe', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 2188, 'country_id' => 216, 'name' => 'Enterprise', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2189, 'country_id' => 155, 'name' => 'Enugu', 'name_ru' => 'Энугу', 'gmt_offset' => 1,
			), array(
				'id' => 2190, 'country_id' => 39, 'name' => 'Epena', 'name_ru' => 'Эпена', 'gmt_offset' => 1,
			), array(
				'id' => 2191, 'country_id' => 216, 'name' => 'Ephrata', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2192, 'country_id' => 224, 'name' => 'Epi', 'name_ru' => 'Эпи', 'gmt_offset' => 11,
			), array(
				'id' => 2193, 'country_id' => 71, 'name' => 'Epinal', 'name_ru' => 'Эпиналь', 'gmt_offset' => 1,
			), array(
				'id' => 2194, 'country_id' => 51, 'name' => 'Episkopi', 'name_ru' => 'Эпископи', 'gmt_offset' => 2,
			), array(
				'id' => 2195, 'country_id' => 129, 'name' => 'Er-Rachidia', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2196, 'country_id' => 91, 'name' => 'Erandique', 'name_ru' => 'Эрандике', 'gmt_offset' => 6,
			), array(
				'id' => 2197, 'country_id' => 167, 'name' => 'Erave', 'name_ru' => 'Эрейв', 'gmt_offset' => -10,
			), array(
				'id' => 2198, 'country_id' => 138, 'name' => 'Erdenet', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2199, 'country_id' => 29, 'name' => 'Erechim', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 2200, 'country_id' => 53, 'name' => 'Erfurt', 'name_ru' => 'Эрфурт', 'gmt_offset' => 1,
			), array(
				'id' => 2201, 'country_id' => 216, 'name' => 'Erie', 'name_ru' => 'Эри', 'gmt_offset' => -5,
			), array(
				'id' => 2202, 'country_id' => 65, 'name' => 'Erigavo', 'name_ru' => 'Эригаво', 'gmt_offset' => 0,
			), array(
				'id' => 2203, 'country_id' => 14, 'name' => 'Erldunda', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 2204, 'country_id' => 14, 'name' => 'Ernabella', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 2205, 'country_id' => 216, 'name' => 'Errol', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2206, 'country_id' => 167, 'name' => 'Erume', 'name_ru' => 'Эруме', 'gmt_offset' => -10,
			), array(
				'id' => 2207, 'country_id' => 208, 'name' => 'Erzincan', 'name_ru' => 'Эрзинкан', 'gmt_offset' => 2,
			), array(
				'id' => 2208, 'country_id' => 208, 'name' => 'Erzurum', 'name_ru' => 'Эрзурум', 'gmt_offset' => 2,
			), array(
				'id' => 2209, 'country_id' => 55, 'name' => 'Esbjerg', 'name_ru' => 'Эсбьерг', 'gmt_offset' => 1,
			), array(
				'id' => 2210, 'country_id' => 216, 'name' => 'Escanaba', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2211, 'country_id' => 186, 'name' => 'Eskilstuna', 'name_ru' => 'Эскилстуна', 'gmt_offset' => 1,
			), array(
				'id' => 2212, 'country_id' => 208, 'name' => 'Eskisehir', 'name_ru' => 'Эскишехир', 'gmt_offset' => 2,
			), array(
				'id' => 2213, 'country_id' => 59, 'name' => 'Esmeraldas', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2214, 'country_id' => 216, 'name' => 'Espanola', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2215, 'country_id' => 14, 'name' => 'Esperance', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2216, 'country_id' => 29, 'name' => 'Espinosa', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 2217, 'country_id' => 224, 'name' => 'Espiritu Santo', 'name_ru' => NULL, 'gmt_offset' => 11,
			), array(
				'id' => 2218, 'country_id' => 11, 'name' => 'Esquel', 'name_ru' => 'Эскель', 'gmt_offset' => -3,
			), array(
				'id' => 2219, 'country_id' => 35, 'name' => 'Esquimalt', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2220, 'country_id' => 129, 'name' => 'Essaouira', 'name_ru' => 'Эссаурия', 'gmt_offset' => 0,
			), array(
				'id' => 2221, 'country_id' => 53, 'name' => 'Essen', 'name_ru' => 'Эссен', 'gmt_offset' => 1,
			), array(
				'id' => 2222, 'country_id' => 35, 'name' => 'Estevan', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2223, 'country_id' => 35, 'name' => 'Estevan Point', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2224, 'country_id' => 216, 'name' => 'Estherville', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2225, 'country_id' => 14, 'name' => 'Etadunna', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 2226, 'country_id' => 206, 'name' => 'Eua', 'name_ru' => 'Эуа', 'gmt_offset' => 13,
			), array(
				'id' => 2227, 'country_id' => 14, 'name' => 'Eucla', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2228, 'country_id' => 216, 'name' => 'Eufaula', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2229, 'country_id' => 216, 'name' => 'Eugene', 'name_ru' => 'Юджин', 'gmt_offset' => -8,
			), array(
				'id' => 2230, 'country_id' => 216, 'name' => 'Eunice', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2231, 'country_id' => 216, 'name' => 'Eureka', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2232, 'country_id' => 216, 'name' => 'Eureka, CA', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2233, 'country_id' => 14, 'name' => 'Eva Downs', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 2234, 'country_id' => 216, 'name' => 'Evadale', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2235, 'country_id' => 14, 'name' => 'Evans Head', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 2236, 'country_id' => 216, 'name' => 'Evanston', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2237, 'country_id' => 216, 'name' => 'Evansville, IN', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2238, 'country_id' => 216, 'name' => 'Eveleth', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2239, 'country_id' => 216, 'name' => 'Everett', 'name_ru' => 'Эверетт', 'gmt_offset' => -8,
			), array(
				'id' => 2240, 'country_id' => 71, 'name' => 'Evreux', 'name_ru' => 'Эвро', 'gmt_offset' => 1,
			), array(
				'id' => 2241, 'country_id' => 71, 'name' => 'Evry', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 2242, 'country_id' => 95, 'name' => 'Ewer', 'name_ru' => 'Эвер', 'gmt_offset' => -9,
			), array(
				'id' => 2243, 'country_id' => 39, 'name' => 'Ewo', 'name_ru' => 'Эво', 'gmt_offset' => -1,
			), array(
				'id' => 2244, 'country_id' => 216, 'name' => 'Excursion Inlet', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2245, 'country_id' => 73, 'name' => 'Exeter', 'name_ru' => 'Эксетер', 'gmt_offset' => 0,
			), array(
				'id' => 2246, 'country_id' => 14, 'name' => 'Exmouth Gulf', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 2247, 'country_id' => 166, 'name' => 'Faaite', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 2248, 'country_id' => 21, 'name' => 'Fada Ngourma', 'name_ru' => 'Фада-Нгурма',
				'gmt_offset' => 0,
			), array(
				'id' => 2249, 'country_id' => 158, 'name' => 'Fagernes', 'name_ru' => 'Фагернес', 'gmt_offset' => 1,
			), array(
				'id'         => 2250, 'country_id' => 102, 'name' => 'Fagurholsmyri', 'name_ru' => 'Фагурхолсмыри',
				'gmt_offset' => 0,
			), array(
				'id' => 2251, 'country_id' => 73, 'name' => 'Fair Isle', 'name_ru' => 'Фейр-Айсл', 'gmt_offset' => 0,
			), array(
				'id' => 2252, 'country_id' => 216, 'name' => 'Fairbanks', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2253, 'country_id' => 216, 'name' => 'Fairbury', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2254, 'country_id' => 216, 'name' => 'Fairfield', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2255, 'country_id' => 73, 'name' => 'Fairford', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2256, 'country_id' => 216, 'name' => 'Fairmont', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id'         => 2257, 'country_id' => 35, 'name' => 'Fairmont Hot Springs', 'name_ru' => NULL,
				'gmt_offset' => -7,
			), array(
				'id' => 2258, 'country_id' => 35, 'name' => 'Fairview', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2259, 'country_id' => 169, 'name' => 'Faisalabad', 'name_ru' => 'Фейсалабад', 'gmt_offset' => 5,
			), array(
				'id' => 2260, 'country_id' => 3, 'name' => 'Faizabad', 'name_ru' => 'Файзабад', 'gmt_offset' => 4.5,
			), array(
				'id' => 2261, 'country_id' => 172, 'name' => 'Fajardo', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 2262, 'country_id' => 95, 'name' => 'Fak Fak', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2263, 'country_id' => 166, 'name' => 'Fakahina', 'name_ru' => 'Факахина', 'gmt_offset' => 10,
			), array(
				'id' => 2264, 'country_id' => 166, 'name' => 'Fakarava', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 2265, 'country_id' => 73, 'name' => 'Fakenham', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2266, 'country_id' => 35, 'name' => 'Falher', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2267, 'country_id' => 170, 'name' => 'Falkenberg', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 2268, 'country_id' => 216, 'name' => 'Fallon', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2269, 'country_id' => 216, 'name' => 'Falls Bay', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id'         => 2270, 'country_id' => 14, 'name' => 'Falls Creek', 'name_ru' => 'Фоллз-Крик',
				'gmt_offset' => 11,
			), array(
				'id' => 2271, 'country_id' => 216, 'name' => 'Falmouth', 'name_ru' => 'Фолмаут', 'gmt_offset' => -5,
			), array(
				'id' => 2272, 'country_id' => 216, 'name' => 'False Island', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2273, 'country_id' => 216, 'name' => 'False Pass', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2274, 'country_id' => 167, 'name' => 'Fane', 'name_ru' => 'Фейн', 'gmt_offset' => -10,
			), array(
				'id' => 2275, 'country_id' => 166, 'name' => 'Fangatau', 'name_ru' => 'Фангатау', 'gmt_offset' => 10,
			), array(
				'id'         => 2276, 'country_id' => 133, 'name' => 'Farafangana', 'name_ru' => 'Фарафангана',
				'gmt_offset' => 3,
			), array(
				'id' => 2277, 'country_id' => 3, 'name' => 'Farah', 'name_ru' => 'Фарах', 'gmt_offset' => 4.5,
			), array(
				'id' => 2278, 'country_id' => 82, 'name' => 'Faranah', 'name_ru' => 'Фаранах', 'gmt_offset' => 0,
			), array(
				'id' => 2279, 'country_id' => 216, 'name' => 'Farewell', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2280, 'country_id' => 216, 'name' => 'Fargo', 'name_ru' => 'Фарго', 'gmt_offset' => -6,
			), array(
				'id' => 2281, 'country_id' => 216, 'name' => 'Faribault', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2282, 'country_id' => 216, 'name' => 'Farmingdale', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2283, 'country_id' => 216, 'name' => 'Farmington', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2284, 'country_id' => 73, 'name' => 'Farnborough', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2285, 'country_id' => 173, 'name' => 'Faro', 'name_ru' => 'Фаро', 'gmt_offset' => 0,
			), array(
				'id' => 2286, 'country_id' => 96, 'name' => 'Farranfore', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2287, 'country_id' => 158, 'name' => 'Farsund', 'name_ru' => 'Фарсунд', 'gmt_offset' => 1,
			), array(
				'id' => 2288, 'country_id' => 101, 'name' => 'Fasa', 'name_ru' => NULL, 'gmt_offset' => 3.5,
			), array(
				'id'         => 2289, 'country_id' => 102, 'name' => 'Faskrudsfjordur', 'name_ru' => 'Фаскрудсфьордур',
				'gmt_offset' => 0,
			), array(
				'id' => 2290, 'country_id' => 200, 'name' => 'Faya', 'name_ru' => 'Файя', 'gmt_offset' => 1,
			), array(
				'id'         => 2291, 'country_id' => 216, 'name' => 'Fayetteville', 'name_ru' => 'Файетвилл',
				'gmt_offset' => -6,
			), array(
				'id' => 2292, 'country_id' => 216, 'name' => 'Fayetteville, AR', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2293, 'country_id' => 216, 'name' => 'Fayetteville, NC', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2294, 'country_id' => 142, 'name' => 'Fderik', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2295, 'country_id' => 29, 'name' => 'Feijo', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 2296, 'country_id' => 29, 'name' => 'Feira De Santana', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 2297, 'country_id' => 183, 'name' => 'Fera Island', 'name_ru' => 'Фера-Айленд',
				'gmt_offset' => -11,
			), array(
				'id' => 2298, 'country_id' => 167, 'name' => 'Feramin', 'name_ru' => 'Ферамин', 'gmt_offset' => -10,
			), array(
				'id' => 2299, 'country_id' => 218, 'name' => 'Fergana', 'name_ru' => 'Фергана', 'gmt_offset' => 5,
			), array(
				'id' => 2300, 'country_id' => 216, 'name' => 'Fergus Falls', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id'         => 2301, 'country_id' => 35, 'name' => 'Fergusons Gulf', 'name_ru' => 'Фергусонс-Галф',
				'gmt_offset' => 0,
			), array(
				'id' => 2302, 'country_id' => 41, 'name' => 'Ferkessedougou', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 2303, 'country_id' => 29, 'name' => 'Fernando De Noronha', 'name_ru' => NULL,
				'gmt_offset' => -2,
			), array(
				'id' => 2304, 'country_id' => 73, 'name' => 'Fetlar', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2305, 'country_id' => 129, 'name' => 'Fez', 'name_ru' => 'Фес', 'gmt_offset' => 0,
			), array(
				'id'         => 2306, 'country_id' => 133, 'name' => 'Fianarantsoa', 'name_ru' => 'Фианаранцоа',
				'gmt_offset' => 3,
			), array(
				'id' => 2307, 'country_id' => 228, 'name' => 'Ficksburg', 'name_ru' => 'Фиксбург', 'gmt_offset' => 2,
			), array(
				'id'         => 2308, 'country_id' => 53, 'name' => 'Fictitious Point/AA2', 'name_ru' => NULL,
				'gmt_offset' => 0,
			), array(
				'id' => 2309, 'country_id' => 71, 'name' => 'Figari', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id'         => 2310, 'country_id' => 175, 'name' => 'Filadelfia', 'name_ru' => 'Филадельфия',
				'gmt_offset' => -3,
			), array(
				'id' => 2311, 'country_id' => 216, 'name' => 'Fillmore', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2312, 'country_id' => 216, 'name' => 'Fin Creek', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 2313, 'country_id' => 65, 'name' => 'Fincha', 'name_ru' => 'Финча', 'gmt_offset' => 0,
			), array(
				'id' => 2314, 'country_id' => 216, 'name' => 'Findlay', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2315, 'country_id' => 14, 'name' => 'Finke', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 2316, 'country_id' => 14, 'name' => 'Finley', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id'         => 2317, 'country_id' => 167, 'name' => 'Finschhafen', 'name_ru' => 'Финшхафен',
				'gmt_offset' => 10,
			), array(
				'id' => 2318, 'country_id' => 216, 'name' => 'Fire Cove', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2319, 'country_id' => 216, 'name' => 'Fishers Island', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2320, 'country_id' => 12, 'name' => 'Fitiuta', 'name_ru' => 'Фитута', 'gmt_offset' => -11,
			), array(
				'id' => 2321, 'country_id' => 14, 'name' => 'Fitzroy Crossing', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2322, 'country_id' => 35, 'name' => 'Fiumicino', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id'         => 2323, 'country_id' => 216, 'name' => 'Five Finger Coast Guard Heliport',
				'name_ru'    => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2324, 'country_id' => 216, 'name' => 'Five Mile', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2325, 'country_id' => 47, 'name' => 'Flamingo', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2326, 'country_id' => 216, 'name' => 'Flat', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2327, 'country_id' => 102, 'name' => 'Flateyri', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2328, 'country_id' => 216, 'name' => 'Flaxman Island', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 2329, 'country_id' => 186, 'name' => 'Flen', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 2330, 'country_id' => 53, 'name' => 'Flensburg', 'name_ru' => 'Фленсбург', 'gmt_offset' => 1,
			), array(
				'id' => 2331, 'country_id' => 216, 'name' => 'Fletcher', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2332, 'country_id' => 35, 'name' => 'Flin Flon', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2333, 'country_id' => 14, 'name' => 'Flinders Island', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 2334, 'country_id' => 216, 'name' => 'Flint', 'name_ru' => 'Флинт', 'gmt_offset' => -5,
			), array(
				'id' => 2335, 'country_id' => 216, 'name' => 'Flippin', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2336, 'country_id' => 14, 'name' => 'Flora Valley', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2337, 'country_id' => 216, 'name' => 'Florence', 'name_ru' => 'Флоренция', 'gmt_offset' => -5,
			), array(
				'id' => 2338, 'country_id' => 46, 'name' => 'Florencia', 'name_ru' => 'Флоренсиа', 'gmt_offset' => 5,
			), array(
				'id' => 2339, 'country_id' => 86, 'name' => 'Flores', 'name_ru' => 'Флорес', 'gmt_offset' => -6,
			), array(
				'id' => 2340, 'country_id' => 173, 'name' => 'Flores Island', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 2341, 'country_id' => 29, 'name' => 'Floriano', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id'         => 2342, 'country_id' => 29, 'name' => 'Florianopolis', 'name_ru' => 'Флорианополис',
				'gmt_offset' => -2,
			), array(
				'id' => 2343, 'country_id' => 158, 'name' => 'Floro', 'name_ru' => 'Флоро', 'gmt_offset' => 1,
			), array(
				'id' => 2344, 'country_id' => 73, 'name' => 'Flotta', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2345, 'country_id' => 103, 'name' => 'Foggia', 'name_ru' => 'Фоджия', 'gmt_offset' => 1,
			), array(
				'id' => 2346, 'country_id' => 216, 'name' => 'Foley', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2347, 'country_id' => 216, 'name' => 'Fond Du Lac', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2348, 'country_id' => 35, 'name' => 'Fontanges', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 2349, 'country_id' => 14, 'name' => 'Forbes', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 2350, 'country_id' => 158, 'name' => 'Forde', 'name_ru' => 'Форде', 'gmt_offset' => 1,
			), array(
				'id' => 2351, 'country_id' => 216, 'name' => 'Forest City', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id'         => 2352, 'country_id' => 216, 'name' => 'Forest Park', 'name_ru' => 'Форест Парк',
				'gmt_offset' => 0,
			), array(
				'id' => 2353, 'country_id' => 35, 'name' => 'Forestville', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2354, 'country_id' => 103, 'name' => 'Forli', 'name_ru' => 'Форли', 'gmt_offset' => 1,
			), array(
				'id' => 2355, 'country_id' => 11, 'name' => 'Formosa', 'name_ru' => 'Формоса', 'gmt_offset' => -3,
			), array(
				'id' => 2356, 'country_id' => 73, 'name' => 'Forres', 'name_ru' => 'Форрес', 'gmt_offset' => 0,
			), array(
				'id' => 2357, 'country_id' => 14, 'name' => 'Forrest', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 2358, 'country_id' => 216, 'name' => 'Forrest City', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2359, 'country_id' => 14, 'name' => 'Forrest River', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2360, 'country_id' => 14, 'name' => 'Forster', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 2361, 'country_id' => 35, 'name' => 'Fort Albany', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 2362, 'country_id' => 216, 'name' => 'Fort Belvoir', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2363, 'country_id' => 216, 'name' => 'Fort Bragg', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2364, 'country_id' => 216, 'name' => 'Fort Bridger', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2365, 'country_id' => 93, 'name' => 'Fort Chaffee', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2366, 'country_id' => 35, 'name' => 'Fort Chipewyan', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id'         => 2367, 'country_id' => 216, 'name' => 'Fort Collins/Loveland', 'name_ru' => NULL,
				'gmt_offset' => -7,
			), array(
				'id'         => 2368, 'country_id' => 133, 'name' => 'Fort Dauphin', 'name_ru' => 'Форт-Дофин',
				'gmt_offset' => 3,
			), array(
				'id' => 2369, 'country_id' => 141, 'name' => 'Fort De France', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 2370, 'country_id' => 93, 'name' => 'Fort Devens', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2371, 'country_id' => 216, 'name' => 'Fort Dodge, IA', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2372, 'country_id' => 93, 'name' => 'Fort Eustis', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2373, 'country_id' => 35, 'name' => 'Fort Frances', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2374, 'country_id' => 35, 'name' => 'Fort Good Hope', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2375, 'country_id' => 216, 'name' => 'Fort Hood, TX', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2376, 'country_id' => 35, 'name' => 'Fort Hope', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 2377, 'country_id' => 93, 'name' => 'Fort Indiantown', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2378, 'country_id' => 216, 'name' => 'Fort Irwin', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2379, 'country_id' => 93, 'name' => 'Fort Jefferson', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2380, 'country_id' => 216, 'name' => 'Fort Knox', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2381, 'country_id' => 164, 'name' => 'Fort Kobbe', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id'         => 2382, 'country_id' => 216, 'name' => 'Fort Lauderdale', 'name_ru' => 'Форт Лодердейл',
				'gmt_offset' => -5,
			), array(
				'id' => 2383, 'country_id' => 216, 'name' => 'Fort Leavenworth', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2384, 'country_id' => 216, 'name' => 'Fort Leonard Wood', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2385, 'country_id' => 35, 'name' => 'Fort Liard', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 2386, 'country_id' => 216, 'name' => 'Fort Madison', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2387, 'country_id' => 35, 'name' => 'Fort Mcmurray', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2388, 'country_id' => 35, 'name' => 'Fort Mcpherson', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2389, 'country_id' => 93, 'name' => 'Fort Meade', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id'         => 2390, 'country_id' => 216, 'name' => 'Fort Myers', 'name_ru' => 'Форт Майерс',
				'gmt_offset' => -5,
			), array(
				'id' => 2391, 'country_id' => 35, 'name' => 'Fort Nelson', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2392, 'country_id' => 216, 'name' => 'Fort Pierce', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2393, 'country_id' => 216, 'name' => 'Fort Polk', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2394, 'country_id' => 35, 'name' => 'Fort Reliance', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 2395, 'country_id' => 35, 'name' => 'Fort Resolution', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2396, 'country_id' => 93, 'name' => 'Fort Richardson', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2397, 'country_id' => 216, 'name' => 'Fort Riley, KS', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2398, 'country_id' => 216, 'name' => 'Fort Scott', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2399, 'country_id' => 35, 'name' => 'Fort Severn', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 2400, 'country_id' => 93, 'name' => 'Fort Sheridan', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2401, 'country_id' => 216, 'name' => 'Fort Sill', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2402, 'country_id' => 35, 'name' => 'Fort Simpson', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2403, 'country_id' => 216, 'name' => 'Fort Smith', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2404, 'country_id' => 35, 'name' => 'Fort St John', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2405, 'country_id' => 216, 'name' => 'Fort Stockton', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2406, 'country_id' => 216, 'name' => 'Fort Sumner', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2407, 'country_id' => 216, 'name' => 'Fort Wayne', 'name_ru' => 'Форт Уэйн', 'gmt_offset' => -5,
			), array(
				'id' => 2408, 'country_id' => 216, 'name' => 'Fort Wayne, IN', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id'         => 2409, 'country_id' => 73, 'name' => 'Fort William', 'name_ru' => 'Форт-Вильям',
				'gmt_offset' => 0,
			), array(
				'id' => 2410, 'country_id' => 216, 'name' => 'Fort Worth', 'name_ru' => 'Форт Уорт', 'gmt_offset' => -6,
			), array(
				'id' => 2411, 'country_id' => 216, 'name' => 'Fort Worth, TX', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2412, 'country_id' => 216, 'name' => 'Fort Yukon', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2413, 'country_id' => 29, 'name' => 'Fortaleza', 'name_ru' => 'Форталеса', 'gmt_offset' => -3,
			), array(
				'id' => 2414, 'country_id' => 93, 'name' => 'Fortuna', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2415, 'country_id' => 216, 'name' => 'Fortuna Ledge', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2416, 'country_id' => 45, 'name' => 'Foshan', 'name_ru' => 'Фошан', 'gmt_offset' => 0,
			), array(
				'id' => 2417, 'country_id' => 14, 'name' => 'Fossil Downs', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2418, 'country_id' => 72, 'name' => 'Fougamou', 'name_ru' => 'Фугаму', 'gmt_offset' => 1,
			), array(
				'id' => 2419, 'country_id' => 73, 'name' => 'Foula', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2420, 'country_id' => 44, 'name' => 'Foumban', 'name_ru' => 'Фумбан', 'gmt_offset' => 1,
			), array(
				'id' => 2421, 'country_id' => 216, 'name' => 'Fox', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id'         => 2422, 'country_id' => 162, 'name' => 'Fox Glacier', 'name_ru' => 'Фокс Гласиер',
				'gmt_offset' => 13,
			), array(
				'id'         => 2423, 'country_id' => 35, 'name' => 'Fox Harbour (St Lewis)', 'name_ru' => NULL,
				'gmt_offset' => 3.5,
			), array(
				'id' => 2424, 'country_id' => 123, 'name' => 'Foya', 'name_ru' => 'Фойя', 'gmt_offset' => 0,
			), array(
				'id' => 2425, 'country_id' => 29, 'name' => 'Franca', 'name_ru' => 'Франка', 'gmt_offset' => -2,
			), array(
				'id' => 2426, 'country_id' => 72, 'name' => 'Franceville', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 2427, 'country_id' => 29, 'name' => 'Francisco Beltrao', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id'         => 2428, 'country_id' => 32, 'name' => 'Francistown', 'name_ru' => 'Франсистаун',
				'gmt_offset' => 2,
			), array(
				'id' => 2429, 'country_id' => 216, 'name' => 'Frankfort, KY', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id'         => 2430, 'country_id' => 53, 'name' => 'Frankfurt', 'name_ru' => 'Франкфурт-на-Майне',
				'gmt_offset' => 1,
			), array(
				'id' => 2431, 'country_id' => 216, 'name' => 'Franklin', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id'         => 2432, 'country_id' => 162, 'name' => 'Franz Josef', 'name_ru' => 'Франц-Джозеф',
				'gmt_offset' => -12,
			), array(
				'id' => 2433, 'country_id' => 216, 'name' => 'Frederick', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id'         => 2434, 'country_id' => 35, 'name' => 'Fredericton', 'name_ru' => 'Фредериктон',
				'gmt_offset' => -4,
			), array(
				'id' => 2435, 'country_id' => 216, 'name' => 'Freeport', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2436, 'country_id' => 191, 'name' => 'Freetown', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2437, 'country_id' => 184, 'name' => 'Fregate Is', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 2438, 'country_id' => 167, 'name' => 'Freida River', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 2439, 'country_id' => 71, 'name' => 'Frejus', 'name_ru' => 'Фрехус', 'gmt_offset' => 1,
			), array(
				'id' => 2440, 'country_id' => 14, 'name' => 'Fremantle', 'name_ru' => 'Фримантл', 'gmt_offset' => 9,
			), array(
				'id' => 2441, 'country_id' => 216, 'name' => 'Fremont', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2442, 'country_id' => 216, 'name' => 'French Lick', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2443, 'country_id' => 216, 'name' => 'Frenchville', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2444, 'country_id' => 216, 'name' => 'Fresh Water Bay', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2445, 'country_id' => 216, 'name' => 'Fresno', 'name_ru' => 'Фресно', 'gmt_offset' => -8,
			), array(
				'id' => 2446, 'country_id' => 82, 'name' => 'Fria', 'name_ru' => 'Фриа', 'gmt_offset' => 0,
			), array(
				'id' => 2447, 'country_id' => 216, 'name' => 'Friday Harbor', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2448, 'country_id' => 71, 'name' => 'Friday Harbor SPB', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id'         => 2449, 'country_id' => 53, 'name' => 'Friedrichshafen', 'name_ru' => 'Фридрихшафен',
				'gmt_offset' => 1,
			), array(
				'id' => 2450, 'country_id' => 53, 'name' => 'Fritzlar', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 2451, 'country_id' => 216, 'name' => 'Front Royal, (VA)', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2452, 'country_id' => 28, 'name' => 'Frutillar', 'name_ru' => 'Фрутильяр', 'gmt_offset' => -4,
			), array(
				'id' => 2453, 'country_id' => 216, 'name' => 'Fryeburg', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2454, 'country_id' => 64, 'name' => 'Fuengirola', 'name_ru' => 'Фенгерола', 'gmt_offset' => 1,
			), array(
				'id' => 2455, 'country_id' => 53, 'name' => 'Fuerstenfeldbruck', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 2456, 'country_id' => 175, 'name' => 'Fuerte Olimpo', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2457, 'country_id' => 107, 'name' => 'Fukue', 'name_ru' => 'Фуку', 'gmt_offset' => 9,
			), array(
				'id' => 2458, 'country_id' => 107, 'name' => 'Fukui', 'name_ru' => 'Фукуи', 'gmt_offset' => 9,
			), array(
				'id' => 2459, 'country_id' => 107, 'name' => 'Fukuoka', 'name_ru' => 'Фукуока', 'gmt_offset' => 9,
			), array(
				'id' => 2460, 'country_id' => 107, 'name' => 'Fukushima', 'name_ru' => 'Фукушима', 'gmt_offset' => 9,
			), array(
				'id' => 2461, 'country_id' => 167, 'name' => 'Fulleborn', 'name_ru' => 'Фуллборн', 'gmt_offset' => -10,
			), array(
				'id' => 2462, 'country_id' => 216, 'name' => 'Fullerton', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2463, 'country_id' => 167, 'name' => 'Fuma', 'name_ru' => 'Фума', 'gmt_offset' => -10,
			), array(
				'id' => 2464, 'country_id' => 210, 'name' => 'Funafuti Atol', 'name_ru' => NULL, 'gmt_offset' => 12,
			), array(
				'id' => 2465, 'country_id' => 173, 'name' => 'Funchal', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2466, 'country_id' => 216, 'name' => 'Funter Bay', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2467, 'country_id' => 45, 'name' => 'Fuoshan', 'name_ru' => 'Фушань', 'gmt_offset' => 0,
			), array(
				'id' => 2468, 'country_id' => 43, 'name' => 'Futaleufu', 'name_ru' => 'Футалеуфу', 'gmt_offset' => -3,
			), array(
				'id'         => 2469, 'country_id' => 14, 'name' => 'Futuna Island', 'name_ru' => 'Футуна-Айленд',
				'gmt_offset' => 0,
			), array(
				'id' => 2470, 'country_id' => 45, 'name' => 'Fuyang', 'name_ru' => 'Фуан', 'gmt_offset' => -8,
			), array(
				'id' => 2471, 'country_id' => 45, 'name' => 'Fuyun', 'name_ru' => 'Фуюнь', 'gmt_offset' => -8,
			), array(
				'id' => 2472, 'country_id' => 45, 'name' => 'Fuzhou', 'name_ru' => 'Фучжоу', 'gmt_offset' => 8,
			), array(
				'id' => 2473, 'country_id' => 216, 'name' => 'Gabbs', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2474, 'country_id' => 205, 'name' => 'Gabes', 'name_ru' => 'Габес', 'gmt_offset' => 1,
			), array(
				'id' => 2475, 'country_id' => 32, 'name' => 'Gaborone', 'name_ru' => 'Габороне', 'gmt_offset' => 2,
			), array(
				'id' => 2476, 'country_id' => 101, 'name' => 'Gachsaran', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2477, 'country_id' => 216, 'name' => 'Gadsden', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2478, 'country_id' => 205, 'name' => 'Gafsa', 'name_ru' => 'Гафса', 'gmt_offset' => 1,
			), array(
				'id' => 2479, 'country_id' => 95, 'name' => 'Gag Island', 'name_ru' => 'Гаг-Айленд', 'gmt_offset' => 9,
			), array(
				'id' => 2480, 'country_id' => 216, 'name' => 'Gage', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2481, 'country_id' => 35, 'name' => 'Gagetown', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 2482, 'country_id' => 41, 'name' => 'Gagnoa', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2483, 'country_id' => 35, 'name' => 'Gagnon', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 2484, 'country_id' => 71, 'name' => 'Gainesville', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 2485, 'country_id' => 216, 'name' => 'Gaithersburg', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2486, 'country_id' => 216, 'name' => 'Gakona', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2487, 'country_id' => 122, 'name' => 'Gal Oya', 'name_ru' => 'Гал-Ойя', 'gmt_offset' => 5.5,
			), array(
				'id' => 2488, 'country_id' => 59, 'name' => 'Galapagos Is', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2489, 'country_id' => 216, 'name' => 'Galbraith Lake', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2490, 'country_id' => 65, 'name' => 'Galcaio', 'name_ru' => 'Галкайо', 'gmt_offset' => 0,
			), array(
				'id' => 2491, 'country_id' => 95, 'name' => 'Galela', 'name_ru' => 'Галела', 'gmt_offset' => -9,
			), array(
				'id' => 2492, 'country_id' => 216, 'name' => 'Galena', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2493, 'country_id' => 216, 'name' => 'Galesburg', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2494, 'country_id' => 216, 'name' => 'Galion', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2495, 'country_id' => 186, 'name' => 'Gallivare', 'name_ru' => 'Галливаре', 'gmt_offset' => 1,
			), array(
				'id' => 2496, 'country_id' => 96, 'name' => 'Galloway', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2497, 'country_id' => 216, 'name' => 'Gallup', 'name_ru' => 'Галлап', 'gmt_offset' => -7,
			), array(
				'id' => 2498, 'country_id' => 216, 'name' => 'Galveston', 'name_ru' => 'Гелвстон', 'gmt_offset' => -6,
			), array(
				'id' => 2499, 'country_id' => 96, 'name' => 'Galway', 'name_ru' => 'Голуэй', 'gmt_offset' => 0,
			), array(
				'id' => 2500, 'country_id' => 46, 'name' => 'Gamarra', 'name_ru' => 'Гамарра', 'gmt_offset' => 5,
			),
				array(
					'id' => 2501, 'country_id' => 72, 'name' => 'Gamba', 'name_ru' => 'Гамба', 'gmt_offset' => -1,
				), 1 => array(
				'id' => 2502, 'country_id' => 65, 'name' => 'Gambela', 'name_ru' => 'Гамбела', 'gmt_offset' => -3,
			), array(
				'id' => 2503, 'country_id' => 216, 'name' => 'Gambell', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2504, 'country_id' => 166, 'name' => 'Gambier Is', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 2505, 'country_id' => 39, 'name' => 'Gamboma', 'name_ru' => 'Гамбома', 'gmt_offset' => 1,
			), array(
				'id' => 2506, 'country_id' => 14, 'name' => 'Gamboola', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 2507, 'country_id' => 146, 'name' => 'Gan Island', 'name_ru' => 'Ген-Айленд', 'gmt_offset' => 0,
			), array(
				'id' => 2508, 'country_id' => 37, 'name' => 'Gandajika', 'name_ru' => 'Гандаджика', 'gmt_offset' => 0,
			), array(
				'id' => 2509, 'country_id' => 35, 'name' => 'Gander', 'name_ru' => NULL, 'gmt_offset' => -3.5,
			), array(
				'id' => 2510, 'country_id' => 216, 'name' => 'Ganes Creek', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2511, 'country_id' => 137, 'name' => 'Gangaw', 'name_ru' => 'Ганго', 'gmt_offset' => -6.5,
			), array(
				'id' => 2512, 'country_id' => 35, 'name' => 'Ganges Harbor', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2513, 'country_id' => 115, 'name' => 'Gangneung', 'name_ru' => 'Гангнеунг', 'gmt_offset' => 9,
			), array(
				'id' => 2514, 'country_id' => 45, 'name' => 'Ganzhou', 'name_ru' => 'Ганьчжоу', 'gmt_offset' => 8,
			), array(
				'id' => 2515, 'country_id' => 136, 'name' => 'Gao', 'name_ru' => 'Гао', 'gmt_offset' => 0,
			), array(
				'id' => 2516, 'country_id' => 21, 'name' => 'Gaoua', 'name_ru' => 'Гауа', 'gmt_offset' => 0,
			), array(
				'id' => 2517, 'country_id' => 71, 'name' => 'Gap', 'name_ru' => 'Гап', 'gmt_offset' => 1,
			), array(
				'id'         => 2518, 'country_id' => 142, 'name' => 'Gara Djebilet', 'name_ru' => 'Гара-Джебилет',
				'gmt_offset' => 0,
			), array(
				'id' => 2519, 'country_id' => 164, 'name' => 'Garachine', 'name_ru' => 'Гарахин', 'gmt_offset' => 5,
			), array(
				'id' => 2520, 'country_id' => 167, 'name' => 'Garaina', 'name_ru' => 'Гарайна', 'gmt_offset' => -10,
			), array(
				'id' => 2521, 'country_id' => 167, 'name' => 'Garasa', 'name_ru' => 'Гараса', 'gmt_offset' => -10,
			), array(
				'id' => 2522, 'country_id' => 65, 'name' => 'Garbaharey', 'name_ru' => 'Гарбахари', 'gmt_offset' => 3,
			), array(
				'id' => 2523, 'country_id' => 216, 'name' => 'Garden City', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2524, 'country_id' => 216, 'name' => 'Garden City, KS', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2525, 'country_id' => 14, 'name' => 'Garden Point', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 2526, 'country_id' => 3, 'name' => 'Gardez', 'name_ru' => 'Гардез', 'gmt_offset' => -4.5,
			), array(
				'id' => 2527, 'country_id' => 216, 'name' => 'Gardner', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2528, 'country_id' => 65, 'name' => 'Gardo', 'name_ru' => 'Гардо', 'gmt_offset' => 0,
			), array(
				'id' => 2529, 'country_id' => 108, 'name' => 'Garissa', 'name_ru' => 'Гарисса', 'gmt_offset' => 3,
			), array(
				'id' => 2530, 'country_id' => 65, 'name' => 'Garoe', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2531, 'country_id' => 44, 'name' => 'Garoua', 'name_ru' => 'Гаруа', 'gmt_offset' => 1,
			), array(
				'id' => 2532, 'country_id' => 167, 'name' => 'Garuahi', 'name_ru' => 'Гаруахи', 'gmt_offset' => -10,
			), array(
				'id' => 2533, 'country_id' => 216, 'name' => 'Gary (IN)', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2534, 'country_id' => 14, 'name' => 'Gascoyne Junction', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id'         => 2535, 'country_id' => 167, 'name' => 'Gasmata Island', 'name_ru' => 'Гасмата-Айленд',
				'gmt_offset' => -10,
			), array(
				'id' => 2536, 'country_id' => 167, 'name' => 'Gasuke', 'name_ru' => 'Гасуке', 'gmt_offset' => -10,
			), array(
				'id'         => 2537, 'country_id' => 216, 'name' => 'Gatlinburg', 'name_ru' => 'Гатлинбург',
				'gmt_offset' => -5,
			), array(
				'id' => 2538, 'country_id' => 183, 'name' => 'Gatokae', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2539, 'country_id' => 224, 'name' => 'Gaua', 'name_ru' => NULL, 'gmt_offset' => 11,
			), array(
				'id' => 2540, 'country_id' => 186, 'name' => 'Gavle', 'name_ru' => 'Гавле', 'gmt_offset' => 1,
			), array(
				'id' => 2541, 'country_id' => 99, 'name' => 'Gawahati', 'name_ru' => NULL, 'gmt_offset' => 5.5,
			), array(
				'id' => 2542, 'country_id' => 99, 'name' => 'Gaya', 'name_ru' => 'Гайя', 'gmt_offset' => 5.5,
			), array(
				'id' => 2543, 'country_id' => 216, 'name' => 'Gaylord', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2544, 'country_id' => 14, 'name' => 'Gayndah', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 2545, 'country_id' => 208, 'name' => 'Gaziantep', 'name_ru' => 'Газиантеп', 'gmt_offset' => 2,
			), array(
				'id' => 2546, 'country_id' => 37, 'name' => 'Gbadolite', 'name_ru' => 'Гбадолите', 'gmt_offset' => 0,
			), array(
				'id' => 2547, 'country_id' => 191, 'name' => 'Gbangbatok', 'name_ru' => 'Гбангбаток', 'gmt_offset' => 0,
			), array(
				'id' => 2548, 'country_id' => 170, 'name' => 'Gdansk', 'name_ru' => 'Гданьск', 'gmt_offset' => 1,
			), array(
				'id' => 2549, 'country_id' => 95, 'name' => 'Gebe', 'name_ru' => 'Гебе', 'gmt_offset' => -9,
			), array(
				'id' => 2550, 'country_id' => 51, 'name' => 'Gecitkale', 'name_ru' => 'Геситкале', 'gmt_offset' => 2,
			), array(
				'id' => 2551, 'country_id' => 185, 'name' => 'Gedaref', 'name_ru' => 'Гедарев', 'gmt_offset' => -2,
			), array(
				'id' => 2552, 'country_id' => 14, 'name' => 'Geelong', 'name_ru' => 'Гелонг', 'gmt_offset' => 11,
			), array(
				'id'         => 2553, 'country_id' => 53, 'name' => 'Geilenkirchen', 'name_ru' => 'Гайленкирхен',
				'gmt_offset' => 1,
			), array(
				'id' => 2554, 'country_id' => 158, 'name' => 'Geilo', 'name_ru' => 'Гейло', 'gmt_offset' => 1,
			), array(
				'id' => 2555, 'country_id' => 212, 'name' => 'Geita', 'name_ru' => 'Гейта', 'gmt_offset' => -3,
			), array(
				'id' => 2556, 'country_id' => 65, 'name' => 'Geladi', 'name_ru' => 'Гелади', 'gmt_offset' => -3,
			), array(
				'id' => 2557, 'country_id' => 180, 'name' => 'Gelendzik', 'name_ru' => 'Геленджик', 'gmt_offset' => 4,
			), array(
				'id' => 2558, 'country_id' => 37, 'name' => 'Gemena', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 2559, 'country_id' => 65, 'name' => 'Genda Wuha', 'name_ru' => 'Генда-Вуха', 'gmt_offset' => -3,
			), array(
				'id' => 2560, 'country_id' => 185, 'name' => 'Geneina', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id'         => 2561, 'country_id' => 11, 'name' => 'General Pico', 'name_ru' => 'Хенераль-Пико',
				'gmt_offset' => -3,
			), array(
				'id'         => 2562, 'country_id' => 11, 'name' => 'General Roca', 'name_ru' => 'Хенераль-Рока',
				'gmt_offset' => -3,
			), array(
				'id'         => 2563, 'country_id' => 168, 'name' => 'General Santos', 'name_ru' => 'Женерал-Сантос',
				'gmt_offset' => 8,
			), array(
				'id' => 2564, 'country_id' => 11, 'name' => 'General Villegas', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 2565, 'country_id' => 40, 'name' => 'Geneva', 'name_ru' => 'Женева', 'gmt_offset' => 1,
			), array(
				'id' => 2566, 'country_id' => 103, 'name' => 'Genova', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 2567, 'country_id' => 149, 'name' => 'Genting', 'name_ru' => 'Гентинг', 'gmt_offset' => 8,
			), array(
				'id' => 2568, 'country_id' => 115, 'name' => 'Geoje', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 2569, 'country_id' => 228, 'name' => 'George', 'name_ru' => 'Джордж', 'gmt_offset' => 2,
			), array(
				'id' => 2570, 'country_id' => 14, 'name' => 'George Town', 'name_ru' => NULL, 'gmt_offset' => 11,
			), array(
				'id' => 2571, 'country_id' => 117, 'name' => 'Georgetown', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id'         => 2572, 'country_id' => 188, 'name' => 'Georgetown, Ascension Island', 'name_ru' => NULL,
				'gmt_offset' => 0,
			), array(
				'id'         => 2573, 'country_id' => 143, 'name' => 'Gerald&#039;s Park', 'name_ru' => NULL,
				'gmt_offset' => -4,
			), array(
				'id' => 2574, 'country_id' => 14, 'name' => 'Geraldton', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2575, 'country_id' => 35, 'name' => 'Germansen', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 2576, 'country_id' => 64, 'name' => 'Gerona', 'name_ru' => 'Герона', 'gmt_offset' => 1,
			), array(
				'id' => 2577, 'country_id' => 35, 'name' => 'Gethsemani', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id'         => 2578, 'country_id' => 216, 'name' => 'Gettysburg', 'name_ru' => 'Геттисберг',
				'gmt_offset' => -5,
			), array(
				'id' => 2579, 'country_id' => 38, 'name' => 'Geva', 'name_ru' => 'Жева-Эйрстрип', 'gmt_offset' => 0,
			), array(
				'id' => 2580, 'country_id' => 167, 'name' => 'Gewoia', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 2581, 'country_id' => 128, 'name' => 'Ghadames', 'name_ru' => 'Гадамес', 'gmt_offset' => 2,
			), array(
				'id' => 2582, 'country_id' => 32, 'name' => 'Ghanzi', 'name_ru' => 'Ганзи', 'gmt_offset' => 2,
			), array(
				'id' => 2583, 'country_id' => 58, 'name' => 'Ghardaia', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 2584, 'country_id' => 128, 'name' => 'Ghat', 'name_ru' => 'Гат', 'gmt_offset' => 2,
			), array(
				'id' => 2585, 'country_id' => 3, 'name' => 'Ghazni', 'name_ru' => 'Газни', 'gmt_offset' => -4.5,
			), array(
				'id' => 2586, 'country_id' => 101, 'name' => 'Ghazvin', 'name_ru' => NULL, 'gmt_offset' => 3.5,
			), array(
				'id' => 2587, 'country_id' => 20, 'name' => 'Ghent', 'name_ru' => 'Гент', 'gmt_offset' => 1,
			), array(
				'id' => 2588, 'country_id' => 101, 'name' => 'Gheshm', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2589, 'country_id' => 65, 'name' => 'Ghimbi', 'name_ru' => 'Гимби', 'gmt_offset' => 0,
			), array(
				'id' => 2590, 'country_id' => 65, 'name' => 'Ghinnir', 'name_ru' => 'Гиннир', 'gmt_offset' => -3,
			), array(
				'id' => 2591, 'country_id' => 14, 'name' => 'Gibb River', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2592, 'country_id' => 79, 'name' => 'Gibraltar', 'name_ru' => 'Гибралтар', 'gmt_offset' => 1,
			), array(
				'id' => 2593, 'country_id' => 53, 'name' => 'Giebelstadt', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 2594, 'country_id' => 46, 'name' => 'Gilgal', 'name_ru' => 'Жилгал', 'gmt_offset' => -5,
			), array(
				'id' => 2595, 'country_id' => 169, 'name' => 'Gilgit', 'name_ru' => 'Гилгит', 'gmt_offset' => 5,
			), array(
				'id' => 2596, 'country_id' => 35, 'name' => 'Gillam', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 2597, 'country_id' => 216, 'name' => 'Gillette', 'name_ru' => 'Жилетте', 'gmt_offset' => -7,
			), array(
				'id' => 2598, 'country_id' => 35, 'name' => 'Gillies Bay', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2599, 'country_id' => 35, 'name' => 'Gimli', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2600, 'country_id' => 46, 'name' => 'Girardot', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2601, 'country_id' => 162, 'name' => 'Gisborne', 'name_ru' => 'Гизборн', 'gmt_offset' => 13,
			), array(
				'id' => 2602, 'country_id' => 181, 'name' => 'Gisenyi', 'name_ru' => 'Гисеный', 'gmt_offset' => 2,
			), array(
				'id' => 2603, 'country_id' => 24, 'name' => 'Gitega', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 2604, 'country_id' => 61, 'name' => 'Giyani', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2605, 'country_id' => 183, 'name' => 'Gizo', 'name_ru' => 'Гизо', 'gmt_offset' => 11,
			), array(
				'id' => 2606, 'country_id' => 35, 'name' => 'Gjoa Haven', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2607, 'country_id' => 102, 'name' => 'Gjogur', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2608, 'country_id' => 216, 'name' => 'Glacier Creek', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2609, 'country_id' => 14, 'name' => 'Gladstone', 'name_ru' => 'Гледстоун', 'gmt_offset' => -10,
			), array(
				'id' => 2610, 'country_id' => 216, 'name' => 'Gladwin', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2611, 'country_id' => 216, 'name' => 'Glasgow', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2612, 'country_id' => 14, 'name' => 'Glen Innes', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 2613, 'country_id' => 231, 'name' => 'Glendale', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 2614, 'country_id' => 216, 'name' => 'Glendive', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2615, 'country_id' => 14, 'name' => 'Glengyle', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 2616, 'country_id' => 216, 'name' => 'Glennallen', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id'         => 2617, 'country_id' => 14, 'name' => 'Glenormiston', 'name_ru' => 'Гленормистон',
				'gmt_offset' => -10,
			), array(
				'id' => 2618, 'country_id' => 216, 'name' => 'Glens Falls', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2619, 'country_id' => 216, 'name' => 'Glenview', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2620, 'country_id' => 216, 'name' => 'Glenwood Springs', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2621, 'country_id' => 73, 'name' => 'Gloucester', 'name_ru' => 'Глучестер', 'gmt_offset' => 0,
			), array(
				'id' => 2622, 'country_id' => 216, 'name' => 'Glynco', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2623, 'country_id' => 167, 'name' => 'Gnarowein', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 2624, 'country_id' => 99, 'name' => 'Goa', 'name_ru' => 'Гоа', 'gmt_offset' => 5.5,
			), array(
				'id' => 2625, 'country_id' => 65, 'name' => 'Goba', 'name_ru' => 'Гоба', 'gmt_offset' => -3,
			), array(
				'id' => 2626, 'country_id' => 151, 'name' => 'Gobabis', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id'         => 2627, 'country_id' => 11, 'name' => 'Gobernador Gregores', 'name_ru' => NULL,
				'gmt_offset' => -3,
			), array(
				'id' => 2628, 'country_id' => 65, 'name' => 'Gode/Iddidole', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 2629, 'country_id' => 35, 'name' => 'Gods Narrows', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 2630, 'country_id' => 35, 'name' => 'Gods River', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 2631, 'country_id' => 29, 'name' => 'Goiania', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 2632, 'country_id' => 158, 'name' => 'Gol', 'name_ru' => 'Гол', 'gmt_offset' => 1,
			), array(
				'id' => 2633, 'country_id' => 216, 'name' => 'Gold Beach', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id'         => 2634, 'country_id' => 216, 'name' => 'Golden Horn Lodge, Alaska', 'name_ru' => NULL,
				'gmt_offset' => -9,
			), array(
				'id' => 2635, 'country_id' => 216, 'name' => 'Goldsboro', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2636, 'country_id' => 14, 'name' => 'Goldsworthy', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2637, 'country_id' => 47, 'name' => 'Golfito', 'name_ru' => 'Голфито', 'gmt_offset' => -6,
			), array(
				'id' => 2638, 'country_id' => 45, 'name' => 'Golmud', 'name_ru' => 'Голмуд', 'gmt_offset' => -8,
			), array(
				'id' => 2639, 'country_id' => 216, 'name' => 'Golovin', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2640, 'country_id' => 37, 'name' => 'Goma', 'name_ru' => 'Гома', 'gmt_offset' => 2,
			), array(
				'id' => 2641, 'country_id' => 33, 'name' => 'Gomel', 'name_ru' => 'Гомель', 'gmt_offset' => 3,
			), array(
				'id' => 2642, 'country_id' => 167, 'name' => 'Gonalia', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 2643, 'country_id' => 65, 'name' => 'Gondar', 'name_ru' => 'Гондэр', 'gmt_offset' => 3,
			), array(
				'id' => 2644, 'country_id' => 45, 'name' => 'Gonggar', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 2645, 'country_id' => 216, 'name' => 'Gooding', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2646, 'country_id' => 216, 'name' => 'Goodland', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2647, 'country_id' => 216, 'name' => 'Goodnews Bay', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2648, 'country_id' => 216, 'name' => 'Goodyear', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2649, 'country_id' => 14, 'name' => 'Goondiwindi', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 2650, 'country_id' => 35, 'name' => 'Goose Bay', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 2651, 'country_id' => 167, 'name' => 'Gora', 'name_ru' => 'Гора', 'gmt_offset' => -10,
			), array(
				'id' => 2652, 'country_id' => 99, 'name' => 'Gorakhpur', 'name_ru' => 'Горахпур', 'gmt_offset' => 5.5,
			), array(
				'id' => 2653, 'country_id' => 38, 'name' => 'Gordil', 'name_ru' => 'Гордил', 'gmt_offset' => -1,
			), array(
				'id' => 2654, 'country_id' => 216, 'name' => 'Gordon', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2655, 'country_id' => 14, 'name' => 'Gordon Downs', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2656, 'country_id' => 216, 'name' => 'Gordonsville', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2657, 'country_id' => 65, 'name' => 'Gore', 'name_ru' => 'Гор', 'gmt_offset' => 3,
			), array(
				'id' => 2658, 'country_id' => 35, 'name' => 'Gore Bay', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2659, 'country_id' => 101, 'name' => 'Gorgan', 'name_ru' => NULL, 'gmt_offset' => 3.5,
			), array(
				'id' => 2660, 'country_id' => 35, 'name' => 'Gorge Harbor', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id'         => 2661, 'country_id' => 159, 'name' => 'Gorkha', 'name_ru' => 'Горкха',
				'gmt_offset' => 5.7000000000000002,
			), array(
				'id' => 2662, 'country_id' => 22, 'name' => 'Gorna Oriahovitsa', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 2663, 'country_id' => 167, 'name' => 'Goroka', 'name_ru' => 'Горока', 'gmt_offset' => -10,
			), array(
				'id' => 2664, 'country_id' => 21, 'name' => 'Gorom-Gorom', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2665, 'country_id' => 95, 'name' => 'Gorontalo', 'name_ru' => 'Горонтало', 'gmt_offset' => 8,
			), array(
				'id' => 2666, 'country_id' => 14, 'name' => 'Gosford', 'name_ru' => NULL, 'gmt_offset' => 11,
			), array(
				'id' => 2667, 'country_id' => 216, 'name' => 'Goshen', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2668, 'country_id' => 186, 'name' => 'Gothenburg', 'name_ru' => 'Готенбург', 'gmt_offset' => 1,
			), array(
				'id' => 2669, 'country_id' => 14, 'name' => 'Goulburn', 'name_ru' => 'Гоулбурн', 'gmt_offset' => 11,
			), array(
				'id' => 2670, 'country_id' => 14, 'name' => 'Goulburn Island', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 2671, 'country_id' => 129, 'name' => 'Goulimime', 'name_ru' => 'Гулимим', 'gmt_offset' => 0,
			), array(
				'id' => 2672, 'country_id' => 38, 'name' => 'Gounda', 'name_ru' => 'Гунда', 'gmt_offset' => -1,
			), array(
				'id' => 2673, 'country_id' => 136, 'name' => 'Goundam', 'name_ru' => 'Гундам', 'gmt_offset' => 0,
			), array(
				'id' => 2674, 'country_id' => 14, 'name' => 'Gove', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id'         => 2675, 'country_id' => 29, 'name' => 'Governador Valadares', 'name_ru' => NULL,
				'gmt_offset' => -3,
			), array(
				'id' => 2676, 'country_id' => 30, 'name' => 'Governors Harbour', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2677, 'country_id' => 11, 'name' => 'Goya', 'name_ru' => 'Гоя', 'gmt_offset' => -3,
			), array(
				'id' => 2678, 'country_id' => 144, 'name' => 'Gozo', 'name_ru' => 'Гозо', 'gmt_offset' => 1,
			), array(
				'id' => 2679, 'country_id' => 91, 'name' => 'Gracias', 'name_ru' => 'Грация', 'gmt_offset' => 6,
			), array(
				'id' => 2680, 'country_id' => 173, 'name' => 'Graciosa Island', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 2681, 'country_id' => 14, 'name' => 'Grafton', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 2682, 'country_id' => 64, 'name' => 'Granada', 'name_ru' => 'Гранада', 'gmt_offset' => 1,
			), array(
				'id' => 2683, 'country_id' => 30, 'name' => 'Grand Bahama', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2684, 'country_id' => 216, 'name' => 'Grand Canyon', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2685, 'country_id' => 123, 'name' => 'Grand Cess', 'name_ru' => 'Гранд-Цесс', 'gmt_offset' => 0,
			), array(
				'id' => 2686, 'country_id' => 216, 'name' => 'Grand Forks', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2687, 'country_id' => 216, 'name' => 'Grand Island, NE', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id'         => 2688, 'country_id' => 216, 'name' => 'Grand Junction', 'name_ru' => 'Гранд Джанкшн',
				'gmt_offset' => -7,
			), array(
				'id' => 2689, 'country_id' => 216, 'name' => 'Grand Marais', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2690, 'country_id' => 216, 'name' => 'Grand Rapids', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2691, 'country_id' => 199, 'name' => 'Grand Turk Is', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 2692, 'country_id' => 35, 'name' => 'Grande Cache', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2693, 'country_id' => 35, 'name' => 'Grande Prairie', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2694, 'country_id' => 216, 'name' => 'Grandview', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2695, 'country_id' => 216, 'name' => 'Granite Mountain', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2696, 'country_id' => 14, 'name' => 'Granites', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 2697, 'country_id' => 216, 'name' => 'Grants', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2698, 'country_id' => 216, 'name' => 'Grantsburg', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2699, 'country_id' => 71, 'name' => 'Granville', 'name_ru' => 'Гранвиль', 'gmt_offset' => 1,
			), array(
				'id' => 2700, 'country_id' => 35, 'name' => 'Granville Lake', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2701, 'country_id' => 29, 'name' => 'Gravatai', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 2702, 'country_id' => 216, 'name' => 'Grayling', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2703, 'country_id' => 13, 'name' => 'Graz', 'name_ru' => 'Грац', 'gmt_offset' => 1,
			), array(
				'id'         => 2704, 'country_id' => 162, 'name' => 'Great Barrier Island',
				'name_ru'    => 'Грейт-Барьер-Айленд', 'gmt_offset' => 13,
			), array(
				'id' => 2705, 'country_id' => 216, 'name' => 'Great Barrington', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2706, 'country_id' => 35, 'name' => 'Great Bear Lake', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2707, 'country_id' => 216, 'name' => 'Great Bend', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2708, 'country_id' => 216, 'name' => 'Great Falls', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2709, 'country_id' => 30, 'name' => 'Great Harbour', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id'         => 2710, 'country_id' => 14, 'name' => 'Great Keppel Island', 'name_ru' => NULL,
				'gmt_offset' => 10,
			), array(
				'id' => 2711, 'country_id' => 216, 'name' => 'Greeley', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2712, 'country_id' => 216, 'name' => 'Green Bay', 'name_ru' => 'Грин Бэй', 'gmt_offset' => -6,
			), array(
				'id'         => 2713, 'country_id' => 211, 'name' => 'Green Island', 'name_ru' => 'Грин Айленд',
				'gmt_offset' => 8,
			), array(
				'id' => 2714, 'country_id' => 167, 'name' => 'Green Islands', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id'         => 2715, 'country_id' => 167, 'name' => 'Green River', 'name_ru' => 'Грин-Ривер',
				'gmt_offset' => -10,
			), array(
				'id' => 2716, 'country_id' => 30, 'name' => 'Green Turtle', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 2717, 'country_id' => 89, 'name' => 'Greenfield', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 2718, 'country_id' => 14, 'name' => 'Greenvale', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 2719, 'country_id' => 216, 'name' => 'Greenville', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2720, 'country_id' => 35, 'name' => 'Greenway Sound', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2721, 'country_id' => 216, 'name' => 'Greenwood', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2722, 'country_id' => 14, 'name' => 'Gregory Downs', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 2723, 'country_id' => 14, 'name' => 'Grenfell', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 2724, 'country_id' => 71, 'name' => 'Grenoble', 'name_ru' => 'Гренобль', 'gmt_offset' => 1,
			), array(
				'id' => 2725, 'country_id' => 216, 'name' => 'Greybull', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2726, 'country_id' => 162, 'name' => 'Greymouth', 'name_ru' => 'Греймауз', 'gmt_offset' => 13,
			), array(
				'id' => 2727, 'country_id' => 14, 'name' => 'Griffith', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 2728, 'country_id' => 73, 'name' => 'Grimsby', 'name_ru' => 'Гримсби', 'gmt_offset' => 0,
			), array(
				'id' => 2729, 'country_id' => 102, 'name' => 'Grimsey', 'name_ru' => 'Гримси', 'gmt_offset' => 0,
			), array(
				'id' => 2730, 'country_id' => 35, 'name' => 'Grise Fiord', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 2731, 'country_id' => 33, 'name' => 'Grodna', 'name_ru' => 'Гродно', 'gmt_offset' => 3,
			), array(
				'id' => 2732, 'country_id' => 80, 'name' => 'Groennedal', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 2733, 'country_id' => 157, 'name' => 'Groningen', 'name_ru' => 'Гронинген', 'gmt_offset' => 1,
			), array(
				'id' => 2734, 'country_id' => 14, 'name' => 'Groote Eylandt', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id'         => 2735, 'country_id' => 151, 'name' => 'Grootfontein', 'name_ru' => 'Грутфонтейн',
				'gmt_offset' => 2,
			), array(
				'id' => 2736, 'country_id' => 103, 'name' => 'Grosseto', 'name_ru' => 'Гроссето', 'gmt_offset' => 1,
			), array(
				'id' => 2737, 'country_id' => 95, 'name' => 'Groton', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 2738, 'country_id' => 180, 'name' => 'Groznyj', 'name_ru' => 'Грозный', 'gmt_offset' => 4,
			), array(
				'id' => 2739, 'country_id' => 102, 'name' => 'Grundarfjordur', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2740, 'country_id' => 46, 'name' => 'Guacamaya', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id'         => 2741, 'country_id' => 148, 'name' => 'Guadalajara', 'name_ru' => 'Гуадалахара',
				'gmt_offset' => -6,
			), array(
				'id'         => 2742, 'country_id' => 183, 'name' => 'Guadalcanal', 'name_ru' => 'Гуадалканал',
				'gmt_offset' => 11,
			), array(
				'id' => 2743, 'country_id' => 29, 'name' => 'Guadalupe', 'name_ru' => 'Гуадалупе', 'gmt_offset' => 3,
			), array(
				'id' => 2744, 'country_id' => 29, 'name' => 'Guajara-Mirim', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 2745, 'country_id' => 91, 'name' => 'Gualaco', 'name_ru' => 'Гуалако', 'gmt_offset' => 6,
			), array(
				'id'         => 2746, 'country_id' => 11, 'name' => 'Gualeguaychu', 'name_ru' => 'Гуалегуайчу',
				'gmt_offset' => -3,
			), array(
				'id' => 2747, 'country_id' => 87, 'name' => 'Guam', 'name_ru' => 'Гуам', 'gmt_offset' => 10,
			), array(
				'id' => 2748, 'country_id' => 46, 'name' => 'Guamal', 'name_ru' => 'Гуамал', 'gmt_offset' => -5,
			), array(
				'id' => 2749, 'country_id' => 91, 'name' => 'Guanaja', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2750, 'country_id' => 29, 'name' => 'Guanambi', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 2751, 'country_id' => 220, 'name' => 'Guanare', 'name_ru' => 'Гуанаре', 'gmt_offset' => -4,
			), array(
				'id' => 2752, 'country_id' => 45, 'name' => 'Guang Yuan', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2753, 'country_id' => 45, 'name' => 'Guanghan', 'name_ru' => 'Гуанчжань', 'gmt_offset' => -8,
			), array(
				'id' => 2754, 'country_id' => 45, 'name' => 'Guanghua', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2755, 'country_id' => 45, 'name' => 'Guangzhou', 'name_ru' => 'Гуанчжоу', 'gmt_offset' => 8,
			), array(
				'id' => 2756, 'country_id' => 48, 'name' => 'Guantanamo', 'name_ru' => 'Гуантанамо', 'gmt_offset' => -5,
			), array(
				'id' => 2757, 'country_id' => 46, 'name' => 'Guapi', 'name_ru' => 'Гуапи', 'gmt_offset' => 5,
			), array(
				'id' => 2758, 'country_id' => 47, 'name' => 'Guapiles', 'name_ru' => 'Гуапайлз', 'gmt_offset' => -6,
			), array(
				'id' => 2759, 'country_id' => 29, 'name' => 'Guarapari', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 2760, 'country_id' => 29, 'name' => 'Guarapuava', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 2761, 'country_id' => 29, 'name' => 'Guaratingueta', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 2762, 'country_id' => 167, 'name' => 'Guari', 'name_ru' => 'Гуари', 'gmt_offset' => -10,
			), array(
				'id' => 2763, 'country_id' => 220, 'name' => 'Guasdualito', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 2764, 'country_id' => 167, 'name' => 'Guasopa', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id'         => 2765, 'country_id' => 86, 'name' => 'Guatemala City', 'name_ru' => 'Гватемала Сити',
				'gmt_offset' => -6,
			), array(
				'id' => 2766, 'country_id' => 59, 'name' => 'Guayaquil', 'name_ru' => 'Гуайяквил', 'gmt_offset' => -5,
			), array(
				'id'         => 2767, 'country_id' => 29, 'name' => 'Guayaramerin', 'name_ru' => 'Гуаярамерин',
				'gmt_offset' => -4,
			), array(
				'id' => 2768, 'country_id' => 148, 'name' => 'Guaymas', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2769, 'country_id' => 144, 'name' => 'Gudja', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 2770, 'country_id' => 46, 'name' => 'Guerima', 'name_ru' => 'Герима', 'gmt_offset' => 5,
			), array(
				'id' => 2771, 'country_id' => 77, 'name' => 'Guernsey', 'name_ru' => 'Гернси', 'gmt_offset' => 0,
			), array(
				'id'         => 2772, 'country_id' => 148, 'name' => 'Guerrero Negro', 'name_ru' => 'Гверреро-Негро',
				'gmt_offset' => 7,
			), array(
				'id' => 2773, 'country_id' => 53, 'name' => 'Guetersloh', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 2774, 'country_id' => 53, 'name' => 'Guettin', 'name_ru' => 'Гюттин', 'gmt_offset' => 1,
			), array(
				'id' => 2775, 'country_id' => 41, 'name' => 'Guiglo', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2776, 'country_id' => 45, 'name' => 'Guilin', 'name_ru' => 'Гуйлинь', 'gmt_offset' => 8,
			), array(
				'id' => 2777, 'country_id' => 29, 'name' => 'Guimaraes', 'name_ru' => 'Гимараес', 'gmt_offset' => -3,
			), array(
				'id' => 2778, 'country_id' => 220, 'name' => 'Guiria', 'name_ru' => 'Гуйриа', 'gmt_offset' => -4,
			), array(
				'id' => 2779, 'country_id' => 45, 'name' => 'Guiyang', 'name_ru' => 'Гуйянг', 'gmt_offset' => 8,
			), array(
				'id' => 2780, 'country_id' => 169, 'name' => 'Gujrat', 'name_ru' => 'Гуджрат', 'gmt_offset' => -5,
			), array(
				'id' => 2781, 'country_id' => 216, 'name' => 'Gulf Shores', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2782, 'country_id' => 216, 'name' => 'Gulfport', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2783, 'country_id' => 167, 'name' => 'Gulgubip', 'name_ru' => 'Гулгубип', 'gmt_offset' => -10,
			), array(
				'id' => 2784, 'country_id' => 216, 'name' => 'Gulkana', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2785, 'country_id' => 214, 'name' => 'Gulu', 'name_ru' => 'Гулу', 'gmt_offset' => 3,
			), array(
				'id' => 2786, 'country_id' => 99, 'name' => 'Guna', 'name_ru' => 'Гуна', 'gmt_offset' => -5.5,
			), array(
				'id' => 2787, 'country_id' => 14, 'name' => 'Gunnedah', 'name_ru' => NULL, 'gmt_offset' => 11,
			), array(
				'id' => 2788, 'country_id' => 216, 'name' => 'Gunnison', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2789, 'country_id' => 115, 'name' => 'Gunsan', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 2790, 'country_id' => 115, 'name' => 'Gunsan AB', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 2791, 'country_id' => 95, 'name' => 'Gunungsitoli', 'name_ru' => 'Гунунгситоли',
				'gmt_offset' => 7,
			), array(
				'id' => 2792, 'country_id' => 182, 'name' => 'Gurayat', 'name_ru' => 'Гураят', 'gmt_offset' => 3,
			), array(
				'id' => 2793, 'country_id' => 167, 'name' => 'Guriaso', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 2794, 'country_id' => 150, 'name' => 'Gurue', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 2795, 'country_id' => 29, 'name' => 'Gurupi', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 2796, 'country_id' => 167, 'name' => 'Gusap', 'name_ru' => 'Гусап', 'gmt_offset' => -10,
			), array(
				'id' => 2797, 'country_id' => 97, 'name' => 'Gush Katif', 'name_ru' => 'Гуш-Катиф', 'gmt_offset' => 2,
			), array(
				'id' => 2798, 'country_id' => 216, 'name' => 'Gustavus', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2799, 'country_id' => 216, 'name' => 'Guthrie', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2800, 'country_id' => 216, 'name' => 'Guymon', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2801, 'country_id' => 137, 'name' => 'Gwa', 'name_ru' => NULL, 'gmt_offset' => -6.5,
			), array(
				'id' => 2802, 'country_id' => 169, 'name' => 'Gwadar', 'name_ru' => 'Гвадар', 'gmt_offset' => 5,
			), array(
				'id' => 2803, 'country_id' => 99, 'name' => 'Gwalior', 'name_ru' => 'Гвалиор', 'gmt_offset' => 5.5,
			), array(
				'id' => 2804, 'country_id' => 115, 'name' => 'Gwangju', 'name_ru' => 'Гванджу', 'gmt_offset' => 9,
			), array(
				'id' => 2805, 'country_id' => 231, 'name' => 'Gweru', 'name_ru' => 'Гверу', 'gmt_offset' => 2,
			), array(
				'id' => 2806, 'country_id' => 16, 'name' => 'Gyandzha', 'name_ru' => 'Гянджа', 'gmt_offset' => 5,
			), array(
				'id' => 2807, 'country_id' => 14, 'name' => 'Gympie', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 2808, 'country_id' => 7, 'name' => 'Gyoumri', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 2809, 'country_id' => 182, 'name' => 'Habi', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 2810, 'country_id' => 107, 'name' => 'Hachijo Jima', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 2811, 'country_id' => 107, 'name' => 'Hachinohe', 'name_ru' => 'Хачинохе', 'gmt_offset' => 9,
			), array(
				'id' => 2812, 'country_id' => 167, 'name' => 'Haelogo', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id'         => 2813, 'country_id' => 182, 'name' => 'Hafr Albatin', 'name_ru' => 'Хафр-Альбатин',
				'gmt_offset' => 3,
			), array(
				'id' => 2814, 'country_id' => 216, 'name' => 'Hagerstown', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2815, 'country_id' => 186, 'name' => 'Hagfors', 'name_ru' => 'Хагфорс', 'gmt_offset' => 1,
			), array(
				'id' => 2816, 'country_id' => 53, 'name' => 'Hahn', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 2817, 'country_id' => 97, 'name' => 'Haifa', 'name_ru' => 'Хайфа', 'gmt_offset' => 2,
			), array(
				'id' => 2818, 'country_id' => 45, 'name' => 'Haikou', 'name_ru' => 'Хайкоу', 'gmt_offset' => 8,
			), array(
				'id' => 2819, 'country_id' => 182, 'name' => 'Hail', 'name_ru' => 'Хаиль', 'gmt_offset' => 3,
			), array(
				'id' => 2820, 'country_id' => 45, 'name' => 'Hailar', 'name_ru' => 'Хайлар', 'gmt_offset' => -8,
			), array(
				'id' => 2821, 'country_id' => 216, 'name' => 'Haines', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2822, 'country_id' => 35, 'name' => 'Haines Junction', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 2823, 'country_id' => 223, 'name' => 'Haiphong', 'name_ru' => 'Хейфонг', 'gmt_offset' => 7,
			), array(
				'id' => 2824, 'country_id' => 35, 'name' => 'Hakai Pass', 'name_ru' => 'Хакаи-Пасс', 'gmt_offset' => 8,
			), array(
				'id' => 2825, 'country_id' => 107, 'name' => 'Hakodate', 'name_ru' => 'Хакодате', 'gmt_offset' => 9,
			), array(
				'id' => 2826, 'country_id' => 151, 'name' => 'Halali', 'name_ru' => 'Халали', 'gmt_offset' => -2,
			), array(
				'id' => 2827, 'country_id' => 216, 'name' => 'Half Moon', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2828, 'country_id' => 35, 'name' => 'Halifax', 'name_ru' => 'Галифакс', 'gmt_offset' => -4,
			), array(
				'id' => 2829, 'country_id' => 35, 'name' => 'Hall Beach', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id'         => 2830, 'country_id' => 14, 'name' => 'Halls Creek', 'name_ru' => 'Холлз Крик',
				'gmt_offset' => -8,
			), array(
				'id' => 2831, 'country_id' => 186, 'name' => 'Halmstad', 'name_ru' => 'Халмстад', 'gmt_offset' => 1,
			), array(
				'id' => 2832, 'country_id' => 101, 'name' => 'Hamadan', 'name_ru' => 'Хамадан', 'gmt_offset' => 3.5,
			), array(
				'id' => 2833, 'country_id' => 158, 'name' => 'Hamar', 'name_ru' => 'Хамар', 'gmt_offset' => 1,
			), array(
				'id' => 2834, 'country_id' => 53, 'name' => 'Hamburg', 'name_ru' => 'Гамбург', 'gmt_offset' => 1,
			), array(
				'id' => 2835, 'country_id' => 45, 'name' => 'Hami', 'name_ru' => 'Хами', 'gmt_offset' => 8,
			), array(
				'id' => 2836, 'country_id' => 216, 'name' => 'Hamilton', 'name_ru' => 'Гамильтон', 'gmt_offset' => -5,
			), array(
				'id'         => 2837, 'country_id' => 14, 'name' => 'Hamilton Island', 'name_ru' => 'Хамилтон Айленд',
				'gmt_offset' => 10,
			), array(
				'id' => 2838, 'country_id' => 158, 'name' => 'Hammerfest', 'name_ru' => 'Хаммерфест', 'gmt_offset' => 1,
			), array(
				'id' => 2839, 'country_id' => 73, 'name' => 'Hammersmith', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2840, 'country_id' => 216, 'name' => 'Hampton', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2841, 'country_id' => 216, 'name' => 'Hana', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 2842, 'country_id' => 107, 'name' => 'Hanamaki', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 2843, 'country_id' => 216, 'name' => 'Hanapepe', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 2844, 'country_id' => 216, 'name' => 'Hancock', 'name_ru' => 'Хэнкок', 'gmt_offset' => -5,
			), array(
				'id' => 2845, 'country_id' => 45, 'name' => 'Hangzhou', 'name_ru' => 'Ханчжоу', 'gmt_offset' => 8,
			), array(
				'id' => 2846, 'country_id' => 146, 'name' => 'Hanimaadhoo', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2847, 'country_id' => 216, 'name' => 'Hanksville', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2848, 'country_id' => 35, 'name' => 'Hanna', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2849, 'country_id' => 223, 'name' => 'Hanoi', 'name_ru' => 'Ханой', 'gmt_offset' => 7,
			), array(
				'id' => 2850, 'country_id' => 53, 'name' => 'Hanover', 'name_ru' => 'Ганновер', 'gmt_offset' => 1,
			), array(
				'id' => 2851, 'country_id' => 216, 'name' => 'Hanus Bay', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2852, 'country_id' => 45, 'name' => 'Hanzhong', 'name_ru' => 'Ханьчжун', 'gmt_offset' => -8,
			), array(
				'id'         => 2853, 'country_id' => 166, 'name' => 'Hao Island', 'name_ru' => 'Хао-Айленд',
				'gmt_offset' => -10,
			), array(
				'id' => 2854, 'country_id' => 231, 'name' => 'Harare', 'name_ru' => 'Хараре', 'gmt_offset' => 2,
			), array(
				'id' => 2855, 'country_id' => 45, 'name' => 'Harbin', 'name_ru' => 'Харбин', 'gmt_offset' => 8,
			), array(
				'id'         => 2856, 'country_id' => 30, 'name' => 'Harbour Island', 'name_ru' => 'Харбор-Айленд',
				'gmt_offset' => 0,
			), array(
				'id' => 2857, 'country_id' => 193, 'name' => 'Hargeisa', 'name_ru' => 'Харгейса', 'gmt_offset' => 3,
			), array(
				'id' => 2858, 'country_id' => 216, 'name' => 'Harlingen', 'name_ru' => 'Харлинген', 'gmt_offset' => -6,
			), array(
				'id' => 2859, 'country_id' => 216, 'name' => 'Harrisburg', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2860, 'country_id' => 216, 'name' => 'Harrisburg, PA', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2861, 'country_id' => 228, 'name' => 'Harrismith', 'name_ru' => 'Харрисмит', 'gmt_offset' => 2,
			), array(
				'id' => 2862, 'country_id' => 216, 'name' => 'Harrison', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2863, 'country_id' => 73, 'name' => 'Harrogate', 'name_ru' => 'Херрогейт', 'gmt_offset' => 0,
			), array(
				'id' => 2864, 'country_id' => 158, 'name' => 'Harstad-narvik', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 2865, 'country_id' => 216, 'name' => 'Hartford', 'name_ru' => 'Хартфорд', 'gmt_offset' => -5,
			), array(
				'id' => 2866, 'country_id' => 35, 'name' => 'Hartley Bay', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 2867, 'country_id' => 216, 'name' => 'Hartsville', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2868, 'country_id' => 22, 'name' => 'Haskovo', 'name_ru' => 'Хасково', 'gmt_offset' => 2,
			), array(
				'id' => 2869, 'country_id' => 58, 'name' => 'Hassi Messaoud', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 2870, 'country_id' => 186, 'name' => 'Hassleholm', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 2871, 'country_id' => 216, 'name' => 'Hastings', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2872, 'country_id' => 158, 'name' => 'Hasvik', 'name_ru' => 'Хасвик', 'gmt_offset' => 1,
			), array(
				'id' => 2873, 'country_id' => 202, 'name' => 'Hat Yai', 'name_ru' => 'Хат Яй', 'gmt_offset' => 7,
			), array(
				'id' => 2874, 'country_id' => 180, 'name' => 'Hatanga', 'name_ru' => 'Хатанга', 'gmt_offset' => 8,
			), array(
				'id' => 2875, 'country_id' => 35, 'name' => 'Hatchet Lake', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2876, 'country_id' => 107, 'name' => 'Hateruma', 'name_ru' => 'Хатерума', 'gmt_offset' => 9,
			), array(
				'id' => 2877, 'country_id' => 73, 'name' => 'Hatfield', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 2878, 'country_id' => 46, 'name' => 'Hato Corozal', 'name_ru' => 'Хато-Коросал',
				'gmt_offset' => -5,
			), array(
				'id' => 2879, 'country_id' => 216, 'name' => 'Hatteras', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id'         => 2880, 'country_id' => 216, 'name' => 'Hattiesburg', 'name_ru' => 'Хаттисберг',
				'gmt_offset' => -6,
			), array(
				'id'         => 2881, 'country_id' => 216, 'name' => 'Hattiesburg/Laurel, MS', 'name_ru' => NULL,
				'gmt_offset' => -6,
			), array(
				'id' => 2882, 'country_id' => 122, 'name' => 'Hatton', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 2883, 'country_id' => 167, 'name' => 'Hatzfeldthaven', 'name_ru' => 'Хетцфельдтавен',
				'gmt_offset' => -10,
			), array(
				'id' => 2884, 'country_id' => 158, 'name' => 'Haugesund', 'name_ru' => 'Хаугезунд', 'gmt_offset' => 1,
			), array(
				'id' => 2885, 'country_id' => 178, 'name' => 'Havadarya', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 2886, 'country_id' => 48, 'name' => 'Havana', 'name_ru' => 'Гавана', 'gmt_offset' => 6,
			), array(
				'id' => 2887, 'country_id' => 216, 'name' => 'Havasupai', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2888, 'country_id' => 73, 'name' => 'Haverfordwest', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2889, 'country_id' => 216, 'name' => 'Havre', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2890, 'country_id' => 35, 'name' => 'Havre St Pierre', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 2891, 'country_id' => 167, 'name' => 'Hawabango', 'name_ru' => 'Хавабанго', 'gmt_offset' => -10,
			), array(
				'id' => 2892, 'country_id' => 216, 'name' => 'Hawk Inlet', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2893, 'country_id' => 14, 'name' => 'Hawker', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 2894, 'country_id' => 216, 'name' => 'Hawthorne', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2895, 'country_id' => 14, 'name' => 'Hay', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 2896, 'country_id' => 35, 'name' => 'Hay River', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2897, 'country_id' => 216, 'name' => 'Haycock', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2898, 'country_id' => 216, 'name' => 'Hayden', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 2899, 'country_id' => 167, 'name' => 'Hayfields', 'name_ru' => 'Хейфильдз', 'gmt_offset' => 10,
			), array(
				'id'         => 2900, 'country_id' => 14, 'name' => 'Hayman Island', 'name_ru' => 'Хейман Айленд',
				'gmt_offset' => 10,
			), array(
				'id' => 2901, 'country_id' => 216, 'name' => 'Hays', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2902, 'country_id' => 216, 'name' => 'Hayward', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2903, 'country_id' => 71, 'name' => 'Hazebrouck', 'name_ru' => 'Хазебрук', 'gmt_offset' => 1,
			), array(
				'id' => 2904, 'country_id' => 216, 'name' => 'Hazleton', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2905, 'country_id' => 228, 'name' => 'Hazyview', 'name_ru' => 'Хезивью', 'gmt_offset' => 2,
			), array(
				'id' => 2906, 'country_id' => 14, 'name' => 'Headingly', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 2907, 'country_id' => 216, 'name' => 'Healy Lake', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2908, 'country_id' => 35, 'name' => 'Hearst', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 2909, 'country_id' => 14, 'name' => 'Heathlands', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 2910, 'country_id' => 186, 'name' => 'Hedemora', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 2911, 'country_id' => 45, 'name' => 'Hefei', 'name_ru' => 'Хефей', 'gmt_offset' => 8,
			), array(
				'id' => 2912, 'country_id' => 137, 'name' => 'Heho', 'name_ru' => 'Хехо', 'gmt_offset' => -6.5,
			), array(
				'id' => 2913, 'country_id' => 53, 'name' => 'Heide-Buesum', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 2914, 'country_id' => 53, 'name' => 'Heidelberg', 'name_ru' => 'Хайдельберг', 'gmt_offset' => 1,
			), array(
				'id' => 2915, 'country_id' => 45, 'name' => 'Heihe', 'name_ru' => 'Хейхе', 'gmt_offset' => -8,
			), array(
				'id' => 2916, 'country_id' => 167, 'name' => 'Heiweni', 'name_ru' => 'Хейвени', 'gmt_offset' => -10,
			), array(
				'id' => 2917, 'country_id' => 216, 'name' => 'Helena', 'name_ru' => 'Хелена', 'gmt_offset' => -7,
			), array(
				'id' => 2918, 'country_id' => 14, 'name' => 'Helenvale', 'name_ru' => 'Хеленвейл', 'gmt_offset' => -10,
			), array(
				'id' => 2919, 'country_id' => 53, 'name' => 'Helgoland', 'name_ru' => 'Хелголанд', 'gmt_offset' => 1,
			), array(
				'id' => 2920, 'country_id' => 66, 'name' => 'Helsinki', 'name_ru' => 'Хельсинки', 'gmt_offset' => 2,
			), array(
				'id' => 2921, 'country_id' => 186, 'name' => 'Hemavan', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 2922, 'country_id' => 216, 'name' => 'Hemet', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2923, 'country_id' => 14, 'name' => 'Henbury', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 2924, 'country_id' => 73, 'name' => 'Hendon', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2925, 'country_id' => 45, 'name' => 'Hengchun', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 2926, 'country_id' => 45, 'name' => 'Hengyang', 'name_ru' => 'Хеньян', 'gmt_offset' => -8,
			), array(
				'id' => 2927, 'country_id' => 137, 'name' => 'Henzada', 'name_ru' => 'Хензада', 'gmt_offset' => -6.5,
			), array(
				'id' => 2928, 'country_id' => 85, 'name' => 'Heraklion', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 2929, 'country_id' => 3, 'name' => 'Herat', 'name_ru' => 'Герат', 'gmt_offset' => 4.5,
			), array(
				'id' => 2930, 'country_id' => 132, 'name' => 'Hercegnovi', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 2931, 'country_id' => 216, 'name' => 'Herendeen', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id'         => 2932, 'country_id' => 53, 'name' => 'Heringsdorf', 'name_ru' => 'Херингсдорф',
				'gmt_offset' => 1,
			), array(
				'id' => 2933, 'country_id' => 158, 'name' => 'Herlong', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 2934, 'country_id' => 14, 'name' => 'Hermannsburg', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 2935, 'country_id' => 216, 'name' => 'Hermiston', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id'         => 2936, 'country_id' => 148, 'name' => 'Hermosillo', 'name_ru' => 'Хермосилльо',
				'gmt_offset' => -7,
			), array(
				'id'         => 2937, 'country_id' => 14, 'name' => 'Heron Island', 'name_ru' => 'Герон Айленд',
				'gmt_offset' => -10,
			), array(
				'id' => 2938, 'country_id' => 46, 'name' => 'Herrera', 'name_ru' => 'Херрера', 'gmt_offset' => -5,
			), array(
				'id' => 2939, 'country_id' => 186, 'name' => 'Herrljunga', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 2940, 'country_id' => 14, 'name' => 'Hervey Bay', 'name_ru' => 'Херви Бей', 'gmt_offset' => 10,
			), array(
				'id' => 2941, 'country_id' => 101, 'name' => 'Hesa', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2942, 'country_id' => 216, 'name' => 'Hickory', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2943, 'country_id' => 216, 'name' => 'Hidden Falls', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2944, 'country_id' => 152, 'name' => 'Hienghene', 'name_ru' => 'Хьенгене', 'gmt_offset' => 11,
			), array(
				'id' => 2945, 'country_id' => 35, 'name' => 'High Level', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2946, 'country_id' => 216, 'name' => 'High Point', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2947, 'country_id' => 35, 'name' => 'High Prairie', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id'         => 2948, 'country_id' => 73, 'name' => 'High Wycombe', 'name_ru' => 'Хай-Вайкомб',
				'gmt_offset' => 0,
			), array(
				'id' => 2949, 'country_id' => 14, 'name' => 'Highbury', 'name_ru' => 'Хайбери', 'gmt_offset' => -10,
			), array(
				'id' => 2950, 'country_id' => 185, 'name' => 'Higlieg', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2951, 'country_id' => 57, 'name' => 'Higuey', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 2952, 'country_id' => 166, 'name' => 'Hikueru', 'name_ru' => 'Хикуэру', 'gmt_offset' => 10,
			), array(
				'id' => 2953, 'country_id' => 216, 'name' => 'Hill City', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2954, 'country_id' => 216, 'name' => 'Hillsboro', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2955, 'country_id' => 14, 'name' => 'Hillside', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2956, 'country_id' => 216, 'name' => 'Hilo', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 2957, 'country_id' => 216, 'name' => 'Hilton Head', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id'         => 2958, 'country_id' => 14, 'name' => 'Hinchinbrook Island', 'name_ru' => NULL,
				'gmt_offset' => 10,
			), array(
				'id' => 2959, 'country_id' => 216, 'name' => 'Hinesville', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2960, 'country_id' => 122, 'name' => 'Hingurakgoda', 'name_ru' => NULL, 'gmt_offset' => 5.5,
			), array(
				'id' => 2961, 'country_id' => 107, 'name' => 'Hiroshima', 'name_ru' => 'Хиросима', 'gmt_offset' => 9,
			), array(
				'id' => 2962, 'country_id' => 99, 'name' => 'Hissar', 'name_ru' => 'Хиссар', 'gmt_offset' => 5.5,
			), array(
				'id' => 2963, 'country_id' => 166, 'name' => 'Hiva Oa', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2964, 'country_id' => 218, 'name' => 'Hivaro', 'name_ru' => 'Хиваро', 'gmt_offset' => 0,
			), array(
				'id' => 2965, 'country_id' => 228, 'name' => 'Hluhluwe', 'name_ru' => 'Хлухлуве', 'gmt_offset' => -2,
			), array(
				'id'         => 2966, 'country_id' => 223, 'name' => 'Ho Chi Minh City', 'name_ru' => 'Хо Чи Мин Сити',
				'gmt_offset' => 7,
			), array(
				'id' => 2967, 'country_id' => 14, 'name' => 'Hobart', 'name_ru' => 'Хобарт', 'gmt_offset' => 11,
			), array(
				'id' => 2968, 'country_id' => 216, 'name' => 'Hobart Bay', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2969, 'country_id' => 216, 'name' => 'Hobart, OK', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2970, 'country_id' => 14, 'name' => 'Hobbs', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2971, 'country_id' => 227, 'name' => 'Hodeidah', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 2972, 'country_id' => 228, 'name' => 'Hoedspruit', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 2973, 'country_id' => 53, 'name' => 'Hof', 'name_ru' => 'Хоф', 'gmt_offset' => 1,
			), array(
				'id' => 2974, 'country_id' => 216, 'name' => 'Hoffman', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2975, 'country_id' => 216, 'name' => 'Hogatza', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2976, 'country_id' => 13, 'name' => 'Hohenems', 'name_ru' => 'Хохенемс', 'gmt_offset' => 1,
			), array(
				'id' => 2977, 'country_id' => 45, 'name' => 'Hohhot', 'name_ru' => 'Хоххот', 'gmt_offset' => 8,
			), array(
				'id' => 2978, 'country_id' => 162, 'name' => 'Hokitika', 'name_ru' => 'Хокитика', 'gmt_offset' => 13,
			), array(
				'id' => 2979, 'country_id' => 108, 'name' => 'Hola', 'name_ru' => 'Хола', 'gmt_offset' => -3,
			), array(
				'id' => 2980, 'country_id' => 216, 'name' => 'Holdrege', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 2981, 'country_id' => 48, 'name' => 'Holguin', 'name_ru' => 'Голгуин', 'gmt_offset' => -5,
			), array(
				'id' => 2982, 'country_id' => 216, 'name' => 'Holikachu', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2983, 'country_id' => 216, 'name' => 'Holland', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2984, 'country_id' => 216, 'name' => 'Hollis', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2985, 'country_id' => 216, 'name' => 'Hollister', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 2986, 'country_id' => 216, 'name' => 'Hollywood', 'name_ru' => 'Холливуд', 'gmt_offset' => -5,
			), array(
				'id' => 2987, 'country_id' => 35, 'name' => 'Holman', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 2988, 'country_id' => 102, 'name' => 'Holmavik', 'name_ru' => 'Холмавик', 'gmt_offset' => 0,
			), array(
				'id' => 2989, 'country_id' => 216, 'name' => 'Holy Cross', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2990, 'country_id' => 73, 'name' => 'Holyhead', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 2991, 'country_id' => 137, 'name' => 'Homalin', 'name_ru' => 'Хомалин', 'gmt_offset' => -6.5,
			), array(
				'id' => 2992, 'country_id' => 216, 'name' => 'Homer', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2993, 'country_id' => 216, 'name' => 'Homeshore AK', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 2994, 'country_id' => 216, 'name' => 'Homestead', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 2995, 'country_id' => 90, 'name' => 'Hong Kong', 'name_ru' => 'Гонконг', 'gmt_offset' => 8,
			), array(
				'id' => 2996, 'country_id' => 183, 'name' => 'Honiara', 'name_ru' => NULL, 'gmt_offset' => 11,
			), array(
				'id' => 2997, 'country_id' => 167, 'name' => 'Honinabi', 'name_ru' => 'Хонинаби', 'gmt_offset' => -10,
			), array(
				'id'         => 2998, 'country_id' => 158, 'name' => 'Honningsvag', 'name_ru' => 'Хоннигсвог',
				'gmt_offset' => 1,
			), array(
				'id' => 2999, 'country_id' => 216, 'name' => 'Honolulu', 'name_ru' => 'Гонолулу', 'gmt_offset' => -10,
			), array(
				'id'         => 3000, 'country_id' => 14, 'name' => 'Hook Island', 'name_ru' => 'Хук-Айленд',
				'gmt_offset' => 10,
			),
				array(
					'id' => 3001, 'country_id' => 14, 'name' => 'Hooker Creek', 'name_ru' => NULL, 'gmt_offset' => -9.5,
				), 1 => array(
				'id' => 3002, 'country_id' => 216, 'name' => 'Hoolehua', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3003, 'country_id' => 216, 'name' => 'Hoonah', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3004, 'country_id' => 216, 'name' => 'Hooper Bay', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3005, 'country_id' => 35, 'name' => 'Hope', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 3006, 'country_id' => 14, 'name' => 'Hope Vale', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 3007, 'country_id' => 35, 'name' => 'Hopedale', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 3008, 'country_id' => 14, 'name' => 'Hopetoun', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3009, 'country_id' => 216, 'name' => 'Hopkinsville', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3010, 'country_id' => 216, 'name' => 'Hoquiam', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 3011, 'country_id' => 29, 'name' => 'Horizontina', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 3012, 'country_id' => 14, 'name' => 'Horn Island', 'name_ru' => 'Хорн-Айленд',
				'gmt_offset' => -10,
			), array(
				'id' => 3013, 'country_id' => 102, 'name' => 'Hornafjordur', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3014, 'country_id' => 35, 'name' => 'Hornepayne', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 3015, 'country_id' => 14, 'name' => 'Horsham', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3016, 'country_id' => 173, 'name' => 'Horta', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 3017, 'country_id' => 167, 'name' => 'Hoskins', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3018, 'country_id' => 216, 'name' => 'Hot Springs', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 3019, 'country_id' => 45, 'name' => 'Hotan', 'name_ru' => 'Хотан', 'gmt_offset' => -8,
			), array(
				'id' => 3020, 'country_id' => 152, 'name' => 'Houailou', 'name_ru' => NULL, 'gmt_offset' => -11,
			), array(
				'id' => 3021, 'country_id' => 119, 'name' => 'Houeisay', 'name_ru' => 'Хоуисей', 'gmt_offset' => -7,
			), array(
				'id' => 3022, 'country_id' => 73, 'name' => 'Houghton', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3023, 'country_id' => 216, 'name' => 'Houlton', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 3024, 'country_id' => 216, 'name' => 'Houma', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3025, 'country_id' => 128, 'name' => 'Houn', 'name_ru' => 'Хоун', 'gmt_offset' => -2,
			), array(
				'id' => 3026, 'country_id' => 216, 'name' => 'Houston', 'name_ru' => 'Хьюстон', 'gmt_offset' => -6,
			), array(
				'id' => 3027, 'country_id' => 216, 'name' => 'Houston, TX', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3028, 'country_id' => 73, 'name' => 'Hoy Island', 'name_ru' => 'Хой-Айленд', 'gmt_offset' => 0,
			), array(
				'id' => 3029, 'country_id' => 211, 'name' => 'Hsinchu', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 3030, 'country_id' => 202, 'name' => 'Hua Hin', 'name_ru' => 'Хуа-Хин', 'gmt_offset' => 7,
			), array(
				'id' => 3031, 'country_id' => 28, 'name' => 'Huacaraje', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3032, 'country_id' => 166, 'name' => 'Huahine', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 3033, 'country_id' => 211, 'name' => 'Hualien', 'name_ru' => 'Хуалянь', 'gmt_offset' => 8,
			), array(
				'id' => 3034, 'country_id' => 9, 'name' => 'Huambo', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 3035, 'country_id' => 45, 'name' => 'Huangpu', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3036, 'country_id' => 45, 'name' => 'Huangyan', 'name_ru' => 'Хуанань', 'gmt_offset' => 8,
			), array(
				'id' => 3037, 'country_id' => 165, 'name' => 'Huanuco', 'name_ru' => 'Уануко', 'gmt_offset' => -5,
			), array(
				'id' => 3038, 'country_id' => 148, 'name' => 'Huatulco', 'name_ru' => 'Хуатулко', 'gmt_offset' => -6,
			), array(
				'id' => 3039, 'country_id' => 99, 'name' => 'Hubli', 'name_ru' => 'Хубли', 'gmt_offset' => 5.5,
			), array(
				'id'         => 3040, 'country_id' => 186, 'name' => 'Hudiksvall', 'name_ru' => 'Худиксвалл',
				'gmt_offset' => -1,
			), array(
				'id' => 3041, 'country_id' => 109, 'name' => 'Hudson', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3042, 'country_id' => 35, 'name' => 'Hudson Bay', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3043, 'country_id' => 223, 'name' => 'Hue', 'name_ru' => 'Гуе', 'gmt_offset' => 7,
			), array(
				'id'         => 3044, 'country_id' => 86, 'name' => 'Huehuetenango', 'name_ru' => 'Хухутенанго',
				'gmt_offset' => -6,
			), array(
				'id' => 3045, 'country_id' => 64, 'name' => 'Huelva', 'name_ru' => 'Гуелва', 'gmt_offset' => 0,
			), array(
				'id' => 3046, 'country_id' => 64, 'name' => 'Huesca', 'name_ru' => 'Хуэска', 'gmt_offset' => 0,
			), array(
				'id' => 3047, 'country_id' => 14, 'name' => 'Hughenden', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3048, 'country_id' => 216, 'name' => 'Hughes', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3049, 'country_id' => 216, 'name' => 'Hugo', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3050, 'country_id' => 45, 'name' => 'Huizhou', 'name_ru' => 'Хуэйчжоу', 'gmt_offset' => 8,
			), array(
				'id' => 3051, 'country_id' => 32, 'name' => 'Hukuntsi', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 3052, 'country_id' => 186, 'name' => 'Hultsfred', 'name_ru' => 'Хултсфред', 'gmt_offset' => 1,
			), array(
				'id' => 3053, 'country_id' => 172, 'name' => 'Humacao', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 3054, 'country_id' => 73, 'name' => 'Humberside', 'name_ru' => 'Хамберсайд', 'gmt_offset' => 0,
			), array(
				'id'         => 3055, 'country_id' => 14, 'name' => 'Humbert River', 'name_ru' => 'Хамберт-Ривер',
				'gmt_offset' => -9.5,
			), array(
				'id' => 3056, 'country_id' => 216, 'name' => 'Humboldt', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3057, 'country_id' => 45, 'name' => 'Humen', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 3058, 'country_id' => 65, 'name' => 'Humera', 'name_ru' => 'Хумера', 'gmt_offset' => -3,
			), array(
				'id' => 3059, 'country_id' => 216, 'name' => 'Huntingburg', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 3060, 'country_id' => 216, 'name' => 'Huntington', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 3061, 'country_id' => 216, 'name' => 'Huntsville', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3062, 'country_id' => 61, 'name' => 'Hurghada', 'name_ru' => 'Хургада', 'gmt_offset' => 2,
			), array(
				'id' => 3063, 'country_id' => 216, 'name' => 'Huron', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3064, 'country_id' => 102, 'name' => 'Husavik', 'name_ru' => 'Хусавик', 'gmt_offset' => 0,
			), array(
				'id' => 3065, 'country_id' => 216, 'name' => 'Huslia', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3066, 'country_id' => 53, 'name' => 'Husum', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3067, 'country_id' => 216, 'name' => 'Hutchinson', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id'         => 3068, 'country_id' => 102, 'name' => 'Hvammstangi', 'name_ru' => 'Хваммстанги',
				'gmt_offset' => 0,
			), array(
				'id' => 3069, 'country_id' => 231, 'name' => 'Hwange', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 3070, 'country_id' => 231, 'name' => 'Hwange Nat Park', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 3071, 'country_id' => 216, 'name' => 'Hyannis', 'name_ru' => 'Хианнис', 'gmt_offset' => -5,
			), array(
				'id' => 3072, 'country_id' => 216, 'name' => 'Hydaburg', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3073, 'country_id' => 216, 'name' => 'Hyder', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3074, 'country_id' => 169, 'name' => 'Hyderabad', 'name_ru' => 'Хидерабад', 'gmt_offset' => 5,
			), array(
				'id' => 3075, 'country_id' => 71, 'name' => 'Hyeres', 'name_ru' => 'Хиерес', 'gmt_offset' => 1,
			), array(
				'id' => 3076, 'country_id' => 66, 'name' => 'Hyvinkaa', 'name_ru' => 'Хивинкаа', 'gmt_offset' => 2,
			), array(
				'id' => 3077, 'country_id' => 167, 'name' => 'Iamalele', 'name_ru' => 'Иамалеле', 'gmt_offset' => -10,
			), array(
				'id' => 3078, 'country_id' => 178, 'name' => 'Iasi', 'name_ru' => 'Иаси', 'gmt_offset' => 2,
			), array(
				'id' => 3079, 'country_id' => 167, 'name' => 'Iaura', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3080, 'country_id' => 155, 'name' => 'Ibadan', 'name_ru' => 'Ибадан', 'gmt_offset' => 1,
			), array(
				'id' => 3081, 'country_id' => 46, 'name' => 'Ibague', 'name_ru' => 'Ибаги', 'gmt_offset' => -5,
			), array(
				'id' => 3082, 'country_id' => 165, 'name' => 'Iberia', 'name_ru' => 'Иберия', 'gmt_offset' => -5,
			), array(
				'id' => 3083, 'country_id' => 64, 'name' => 'Ibiza', 'name_ru' => 'Ибица', 'gmt_offset' => 1,
			), array(
				'id' => 3084, 'country_id' => 150, 'name' => 'Ibo', 'name_ru' => 'Ибо', 'gmt_offset' => 2,
			), array(
				'id' => 3085, 'country_id' => 167, 'name' => 'Iboki', 'name_ru' => 'Ибоки', 'gmt_offset' => 0,
			), array(
				'id' => 3086, 'country_id' => 220, 'name' => 'Icabaru', 'name_ru' => 'Икабару', 'gmt_offset' => -4,
			), array(
				'id' => 3087, 'country_id' => 216, 'name' => 'Icy Bay', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3088, 'country_id' => 216, 'name' => 'Ida Grove', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id'         => 3089, 'country_id' => 216, 'name' => 'Idaho Falls', 'name_ru' => 'Айдахо Фоллз',
				'gmt_offset' => -7,
			), array(
				'id' => 3090, 'country_id' => 37, 'name' => 'Idiofa', 'name_ru' => 'Идиофа', 'gmt_offset' => 0,
			), array(
				'id' => 3091, 'country_id' => 186, 'name' => 'Idre', 'name_ru' => 'Идре', 'gmt_offset' => 0,
			), array(
				'id' => 3092, 'country_id' => 107, 'name' => 'Iejima', 'name_ru' => 'Иежима', 'gmt_offset' => 9,
			), array(
				'id' => 3093, 'country_id' => 14, 'name' => 'Iffley', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3094, 'country_id' => 180, 'name' => 'Igarka', 'name_ru' => 'Игарка', 'gmt_offset' => 8,
			), array(
				'id' => 3095, 'country_id' => 80, 'name' => 'Iginniarfik', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 3096, 'country_id' => 216, 'name' => 'Igiugig', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3097, 'country_id' => 35, 'name' => 'Igloolik', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 3098, 'country_id' => 35, 'name' => 'Ignace', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3099, 'country_id' => 29, 'name' => 'Iguassu Falls', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 3100, 'country_id' => 11, 'name' => 'Iguazu', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 3101, 'country_id' => 72, 'name' => 'Iguela', 'name_ru' => 'Игуэла', 'gmt_offset' => -1,
			), array(
				'id' => 3102, 'country_id' => 133, 'name' => 'Ihosy', 'name_ru' => 'Ихоси', 'gmt_offset' => -3,
			), array(
				'id' => 3103, 'country_id' => 167, 'name' => 'Ihu', 'name_ru' => 'Иху', 'gmt_offset' => -10,
			), array(
				'id' => 3104, 'country_id' => 29, 'name' => 'Ijui', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 3105, 'country_id' => 80, 'name' => 'Ikamiut', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3106, 'country_id' => 85, 'name' => 'Ikaria Island', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 3107, 'country_id' => 37, 'name' => 'Ikela', 'name_ru' => 'Икела', 'gmt_offset' => 1,
			), array(
				'id' => 3108, 'country_id' => 35, 'name' => 'Ikerasaarsuk', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 3109, 'country_id' => 107, 'name' => 'Iki', 'name_ru' => 'Ики', 'gmt_offset' => 9,
			), array(
				'id' => 3110, 'country_id' => 64, 'name' => 'Ila Da Chilonzuene', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 3111, 'country_id' => 101, 'name' => 'Ilaam', 'name_ru' => NULL, 'gmt_offset' => 3.5,
			), array(
				'id' => 3112, 'country_id' => 133, 'name' => 'Ilaka', 'name_ru' => 'Илака', 'gmt_offset' => -3,
			), array(
				'id' => 3113, 'country_id' => 152, 'name' => 'Ile Des Pins', 'name_ru' => NULL, 'gmt_offset' => 11,
			), array(
				'id' => 3114, 'country_id' => 152, 'name' => 'Ile Ouen', 'name_ru' => NULL, 'gmt_offset' => 11,
			), array(
				'id' => 3115, 'country_id' => 37, 'name' => 'Ilebo', 'name_ru' => 'Илебо', 'gmt_offset' => 0,
			), array(
				'id' => 3116, 'country_id' => 167, 'name' => 'Ileg', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id'         => 3117, 'country_id' => 35, 'name' => 'Iles De La Madeleine', 'name_ru' => NULL,
				'gmt_offset' => -4,
			), array(
				'id' => 3118, 'country_id' => 35, 'name' => 'Ilford', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 3119, 'country_id' => 29, 'name' => 'Ilha Solteira', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3120, 'country_id' => 29, 'name' => 'Ilheus', 'name_ru' => 'Илеус', 'gmt_offset' => -3,
			), array(
				'id' => 3121, 'country_id' => 216, 'name' => 'Iliamna', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3122, 'country_id' => 168, 'name' => 'Iligan', 'name_ru' => 'Илиган', 'gmt_offset' => 8,
			), array(
				'id' => 3123, 'country_id' => 80, 'name' => 'Ilimanaq', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 3124, 'country_id' => 95, 'name' => 'Illaga', 'name_ru' => 'Иллага', 'gmt_offset' => -9,
			), array(
				'id' => 3125, 'country_id' => 53, 'name' => 'Illisheim', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3126, 'country_id' => 58, 'name' => 'Illizi', 'name_ru' => 'Иллизи', 'gmt_offset' => 1,
			), array(
				'id' => 3127, 'country_id' => 165, 'name' => 'Ilo', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3128, 'country_id' => 168, 'name' => 'Iloilo', 'name_ru' => 'Йоило', 'gmt_offset' => 8,
			), array(
				'id' => 3129, 'country_id' => 155, 'name' => 'Ilorin', 'name_ru' => 'Илорин', 'gmt_offset' => 1,
			), array(
				'id' => 3130, 'country_id' => 95, 'name' => 'Ilu', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3131, 'country_id' => 80, 'name' => 'Ilulissat', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 3132, 'country_id' => 167, 'name' => 'Imane', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3133, 'country_id' => 89, 'name' => 'Imbaimadai', 'name_ru' => 'Имбаимадай', 'gmt_offset' => 3,
			), array(
				'id' => 3134, 'country_id' => 216, 'name' => 'Immokalee', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 3135, 'country_id' => 167, 'name' => 'Imonda', 'name_ru' => 'Имонда', 'gmt_offset' => -10,
			), array(
				'id' => 3136, 'country_id' => 29, 'name' => 'Imperatriz', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 3137, 'country_id' => 216, 'name' => 'Imperial', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 3138, 'country_id' => 178, 'name' => 'Imperial Beach', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 3139, 'country_id' => 39, 'name' => 'Impfondo', 'name_ru' => 'Импфондо', 'gmt_offset' => 1,
			), array(
				'id' => 3140, 'country_id' => 99, 'name' => 'Imphal', 'name_ru' => 'Имфал', 'gmt_offset' => 5.5,
			), array(
				'id' => 3141, 'country_id' => 58, 'name' => 'In Amenas', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 3142, 'country_id' => 58, 'name' => 'In Guezzam', 'name_ru' => 'Ин-Геззам', 'gmt_offset' => 1,
			), array(
				'id' => 3143, 'country_id' => 58, 'name' => 'In Salah', 'name_ru' => 'Ин-Салах', 'gmt_offset' => 1,
			), array(
				'id' => 3144, 'country_id' => 199, 'name' => 'Inagua', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 3145, 'country_id' => 95, 'name' => 'Inanwatan', 'name_ru' => 'Инанватан', 'gmt_offset' => -9,
			), array(
				'id' => 3146, 'country_id' => 115, 'name' => 'Incheon', 'name_ru' => 'Инчеон', 'gmt_offset' => 9,
			), array(
				'id' => 3147, 'country_id' => 167, 'name' => 'Indagen', 'name_ru' => 'Индаген', 'gmt_offset' => -10,
			), array(
				'id'         => 3148, 'country_id' => 65, 'name' => 'Indaselassie', 'name_ru' => 'Индаселасси',
				'gmt_offset' => 3,
			), array(
				'id'         => 3149, 'country_id' => 216, 'name' => 'Independence', 'name_ru' => 'Индепенденс',
				'gmt_offset' => -6,
			), array(
				'id' => 3150, 'country_id' => 216, 'name' => 'Indian Springs', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 3151, 'country_id' => 216, 'name' => 'Indiana, PA', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 3152, 'country_id' => 216, 'name' => 'Indianapolis, IN', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 3153, 'country_id' => 214, 'name' => 'Indigo Bay Lodge', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 3154, 'country_id' => 99, 'name' => 'Indore', 'name_ru' => 'Индор', 'gmt_offset' => 5.5,
			), array(
				'id' => 3155, 'country_id' => 14, 'name' => 'Indulkana', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 3156, 'country_id' => 134, 'name' => 'Ine Island', 'name_ru' => NULL, 'gmt_offset' => 12,
			), array(
				'id'         => 3157, 'country_id' => 11, 'name' => 'Ingeniero Jacobacci',
				'name_ru'    => 'Инженеро-Джако', 'gmt_offset' => 3,
			), array(
				'id' => 3158, 'country_id' => 14, 'name' => 'Ingham', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3159, 'country_id' => 53, 'name' => 'Ingolstadt-manching', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 3160, 'country_id' => 150, 'name' => 'Inhaca', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 3161, 'country_id' => 150, 'name' => 'Inhambane', 'name_ru' => 'Иньямбане', 'gmt_offset' => 2,
			), array(
				'id' => 3162, 'country_id' => 150, 'name' => 'Inhaminga', 'name_ru' => 'Иньяминга', 'gmt_offset' => -2,
			), array(
				'id' => 3163, 'country_id' => 96, 'name' => 'Inisheer', 'name_ru' => 'Инишир', 'gmt_offset' => 0,
			), array(
				'id' => 3164, 'country_id' => 96, 'name' => 'Inishmore', 'name_ru' => 'Инишмор', 'gmt_offset' => 0,
			), array(
				'id' => 3165, 'country_id' => 14, 'name' => 'Injune', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3166, 'country_id' => 14, 'name' => 'Inkerman', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3167, 'country_id' => 14, 'name' => 'Innamincka', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 3168, 'country_id' => 14, 'name' => 'Innisfail', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 3169, 'country_id' => 13, 'name' => 'Innsbruck', 'name_ru' => 'Инсбрук', 'gmt_offset' => 1,
			), array(
				'id' => 3170, 'country_id' => 37, 'name' => 'Inongo', 'name_ru' => 'Инонго', 'gmt_offset' => 1,
			), array(
				'id' => 3171, 'country_id' => 180, 'name' => 'Inta', 'name_ru' => 'Инта', 'gmt_offset' => 4,
			), array(
				'id'         => 3172, 'country_id' => 216, 'name' => 'International Falls', 'name_ru' => NULL,
				'gmt_offset' => -6,
			), array(
				'id' => 3173, 'country_id' => 35, 'name' => 'Inukjuak', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 3174, 'country_id' => 167, 'name' => 'Inus', 'name_ru' => 'Инус', 'gmt_offset' => -10,
			), array(
				'id' => 3175, 'country_id' => 35, 'name' => 'Inuvik', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id'         => 3176, 'country_id' => 162, 'name' => 'Invercargill', 'name_ru' => 'Инверкаргилл',
				'gmt_offset' => 13,
			), array(
				'id' => 3177, 'country_id' => 14, 'name' => 'Inverell', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3178, 'country_id' => 35, 'name' => 'Inverlake', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3179, 'country_id' => 73, 'name' => 'Inverness', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3180, 'country_id' => 14, 'name' => 'Inverway', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 3181, 'country_id' => 228, 'name' => 'Inyati', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 3182, 'country_id' => 216, 'name' => 'Inyokern', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 3183, 'country_id' => 85, 'name' => 'Ioannina', 'name_ru' => 'Иоаннина', 'gmt_offset' => 2,
			), array(
				'id' => 3184, 'country_id' => 167, 'name' => 'Iokea', 'name_ru' => 'Иокеа', 'gmt_offset' => 10,
			), array(
				'id' => 3185, 'country_id' => 167, 'name' => 'Ioma', 'name_ru' => 'Иома', 'gmt_offset' => -10,
			), array(
				'id' => 3186, 'country_id' => 216, 'name' => 'Iowa City, IA', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3187, 'country_id' => 216, 'name' => 'Iowa Falls', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3188, 'country_id' => 29, 'name' => 'Ipatinga', 'name_ru' => 'Ипатинга', 'gmt_offset' => 3,
			), array(
				'id' => 3189, 'country_id' => 46, 'name' => 'Ipiales', 'name_ru' => 'Ипиалес', 'gmt_offset' => -5,
			), array(
				'id' => 3190, 'country_id' => 29, 'name' => 'Ipiau', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 3191, 'country_id' => 168, 'name' => 'Ipil', 'name_ru' => 'Ипил', 'gmt_offset' => -8,
			), array(
				'id' => 3192, 'country_id' => 29, 'name' => 'Ipiranga', 'name_ru' => 'Ипиранга', 'gmt_offset' => 4,
			), array(
				'id' => 3193, 'country_id' => 149, 'name' => 'Ipoh', 'name_ru' => 'Ипох', 'gmt_offset' => 8,
			), array(
				'id' => 3194, 'country_id' => 224, 'name' => 'Ipota', 'name_ru' => 'Ипота', 'gmt_offset' => -11,
			), array(
				'id' => 3195, 'country_id' => 73, 'name' => 'Ipswich', 'name_ru' => 'Ипсвич', 'gmt_offset' => 0,
			), array(
				'id' => 3196, 'country_id' => 35, 'name' => 'Iqaluit', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 3197, 'country_id' => 43, 'name' => 'Iquique', 'name_ru' => 'Икуике', 'gmt_offset' => -3,
			), array(
				'id' => 3198, 'country_id' => 165, 'name' => 'Iquitos', 'name_ru' => 'Икуитос', 'gmt_offset' => -5,
			), array(
				'id' => 3199, 'country_id' => 216, 'name' => 'Iraan', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3200, 'country_id' => 101, 'name' => 'Iran Shahr', 'name_ru' => NULL, 'gmt_offset' => 3.5,
			), array(
				'id' => 3201, 'country_id' => 29, 'name' => 'Irece', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 3202, 'country_id' => 212, 'name' => 'Iringa', 'name_ru' => 'Иринга', 'gmt_offset' => 3,
			), array(
				'id' => 3203, 'country_id' => 91, 'name' => 'Iriona', 'name_ru' => 'Ириона', 'gmt_offset' => 6,
			), array(
				'id' => 3204, 'country_id' => 180, 'name' => 'Irkutsk', 'name_ru' => 'Иркутск', 'gmt_offset' => 9,
			), array(
				'id' => 3205, 'country_id' => 216, 'name' => 'Iron Mountain', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3206, 'country_id' => 216, 'name' => 'Ironwood', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3207, 'country_id' => 216, 'name' => 'Isabel Pass', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3208, 'country_id' => 102, 'name' => 'Isafjordur', 'name_ru' => 'Исафьордур', 'gmt_offset' => 0,
			), array(
				'id' => 3209, 'country_id' => 103, 'name' => 'Ischia', 'name_ru' => 'о.Искья', 'gmt_offset' => 1,
			), array(
				'id' => 3210, 'country_id' => 46, 'name' => 'Iscuande', 'name_ru' => 'Искуанде', 'gmt_offset' => 5,
			), array(
				'id' => 3211, 'country_id' => 101, 'name' => 'Isfahan', 'name_ru' => 'Исфахан', 'gmt_offset' => 3.5,
			), array(
				'id' => 3212, 'country_id' => 107, 'name' => 'Ishigaki', 'name_ru' => 'Исигаки', 'gmt_offset' => -9,
			), array(
				'id' => 3213, 'country_id' => 19, 'name' => 'Ishurdi', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3214, 'country_id' => 37, 'name' => 'Isiro', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3215, 'country_id' => 14, 'name' => 'Isisford', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id'         => 3216, 'country_id' => 43, 'name' => 'Isla de Pascua, Easter Island', 'name_ru' => NULL,
				'gmt_offset' => -5,
			), array(
				'id'         => 3217, 'country_id' => 148, 'name' => 'Isla Mujeres', 'name_ru' => 'Айла Мухерес',
				'gmt_offset' => 6,
			), array(
				'id' => 3218, 'country_id' => 169, 'name' => 'Islamabad', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id'         => 3219, 'country_id' => 35, 'name' => 'Island Lk/Garden Hill', 'name_ru' => NULL,
				'gmt_offset' => 6,
			), array(
				'id' => 3220, 'country_id' => 73, 'name' => 'Islay', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3221, 'country_id' => 73, 'name' => 'Isle Of Coll', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3222, 'country_id' => 73, 'name' => 'Isle Of Colonsay', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3223, 'country_id' => 98, 'name' => 'Isle Of Man', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3224, 'country_id' => 73, 'name' => 'Isle Of Skye', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3225, 'country_id' => 73, 'name' => 'Isles Of Scilly', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3226, 'country_id' => 216, 'name' => 'Islip, NY', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 3227, 'country_id' => 208, 'name' => 'Isparta', 'name_ru' => 'Испарта', 'gmt_offset' => 0,
			), array(
				'id' => 3228, 'country_id' => 208, 'name' => 'Istanbul', 'name_ru' => 'Стамбул', 'gmt_offset' => 2,
			), array(
				'id' => 3229, 'country_id' => 29, 'name' => 'Itabuna', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 3230, 'country_id' => 29, 'name' => 'Itacoatiara', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 3231, 'country_id' => 29, 'name' => 'Itaituba', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 3232, 'country_id' => 29, 'name' => 'Itambacuri', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 3233, 'country_id' => 29, 'name' => 'Itaperuna', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3234, 'country_id' => 29, 'name' => 'Itaqui', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 3235, 'country_id' => 29, 'name' => 'Itauba', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3236, 'country_id' => 216, 'name' => 'Ithaca', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 3237, 'country_id' => 167, 'name' => 'Itokama', 'name_ru' => 'Итокама', 'gmt_offset' => -10,
			), array(
				'id' => 3238, 'country_id' => 80, 'name' => 'Ittoqqortoormiit', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 3239, 'country_id' => 29, 'name' => 'Itubera', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 3240, 'country_id' => 29, 'name' => 'Itumbiara', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 3241, 'country_id' => 66, 'name' => 'Ivalo', 'name_ru' => 'Ивало', 'gmt_offset' => 2,
			), array(
				'id'         => 3242, 'country_id' => 213, 'name' => 'Ivano-Frankovsk', 'name_ru' => 'Ивано-Франковск',
				'gmt_offset' => 3,
			), array(
				'id' => 3243, 'country_id' => 216, 'name' => 'Ivanof Bay', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 3244, 'country_id' => 180, 'name' => 'Ivanovo', 'name_ru' => 'Иваново', 'gmt_offset' => 4,
			), array(
				'id' => 3245, 'country_id' => 216, 'name' => 'Ivishak', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 3246, 'country_id' => 35, 'name' => 'Ivujivik', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 3247, 'country_id' => 167, 'name' => 'Iwami', 'name_ru' => 'Ивами', 'gmt_offset' => 0,
			), array(
				'id' => 3248, 'country_id' => 107, 'name' => 'Iwo Jima Vol', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id'         => 3249, 'country_id' => 148, 'name' => 'Ixtapa/Zihuatanejo',
				'name_ru'    => 'Ихтапа-Сихуатанех', 'gmt_offset' => 6,
			), array(
				'id' => 3250, 'country_id' => 148, 'name' => 'Ixtepec', 'name_ru' => 'Ихтепек', 'gmt_offset' => 6,
			), array(
				'id' => 3251, 'country_id' => 180, 'name' => 'Izhevsk', 'name_ru' => 'Ижевск', 'gmt_offset' => 4,
			), array(
				'id' => 3252, 'country_id' => 208, 'name' => 'Izmir', 'name_ru' => 'Измир', 'gmt_offset' => -2,
			), array(
				'id' => 3253, 'country_id' => 107, 'name' => 'Izumo', 'name_ru' => 'Идзумо', 'gmt_offset' => -9,
			), array(
				'id' => 3254, 'country_id' => 99, 'name' => 'Jabalpur', 'name_ru' => 'Джабалпур', 'gmt_offset' => -5.5,
			), array(
				'id' => 3255, 'country_id' => 14, 'name' => 'Jabiru', 'name_ru' => 'Джабиру', 'gmt_offset' => -9.5,
			), array(
				'id' => 3256, 'country_id' => 134, 'name' => 'Jabot', 'name_ru' => NULL, 'gmt_offset' => -12,
			), array(
				'id' => 3257, 'country_id' => 29, 'name' => 'Jacareacanga', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 3258, 'country_id' => 216, 'name' => 'Jackpot', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 3259, 'country_id' => 216, 'name' => 'Jackson', 'name_ru' => 'Джексон', 'gmt_offset' => 5,
			), array(
				'id' => 3260, 'country_id' => 216, 'name' => 'Jacksonville', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 3261, 'country_id' => 216, 'name' => 'Jacksonville, FL', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 3262, 'country_id' => 216, 'name' => 'Jacksonville, TX', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3263, 'country_id' => 93, 'name' => 'Jacmel', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 3264, 'country_id' => 169, 'name' => 'Jacobabad', 'name_ru' => 'Джакобабад', 'gmt_offset' => -5,
			), array(
				'id' => 3265, 'country_id' => 29, 'name' => 'Jacobina', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id'         => 3266, 'country_id' => 167, 'name' => 'Jacquinot Bay', 'name_ru' => 'Жакино-Бей',
				'gmt_offset' => -10,
			), array(
				'id' => 3267, 'country_id' => 122, 'name' => 'Jaffna', 'name_ru' => 'Джафна', 'gmt_offset' => -5.5,
			), array(
				'id' => 3268, 'country_id' => 216, 'name' => 'Jaffrey', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id'         => 3269, 'country_id' => 99, 'name' => 'Jagdalpur', 'name_ru' => 'Джагдалпур',
				'gmt_offset' => -5.5,
			), array(
				'id' => 3270, 'country_id' => 216, 'name' => 'Jahrom', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 3271, 'country_id' => 99, 'name' => 'Jaipur', 'name_ru' => 'Джайпур', 'gmt_offset' => -5.5,
			), array(
				'id'         => 3272, 'country_id' => 99, 'name' => 'Jaisalmer', 'name_ru' => 'Джайсалмер',
				'gmt_offset' => -5.5,
			), array(
				'id' => 3273, 'country_id' => 95, 'name' => 'Jakarta', 'name_ru' => 'Джакарта', 'gmt_offset' => -7,
			), array(
				'id' => 3274, 'country_id' => 3, 'name' => 'Jalalabad', 'name_ru' => 'Джелалабад', 'gmt_offset' => -4.5,
			), array(
				'id' => 3275, 'country_id' => 148, 'name' => 'Jalapa', 'name_ru' => 'Халапа', 'gmt_offset' => 6,
			), array(
				'id' => 3276, 'country_id' => 29, 'name' => 'Jales', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3277, 'country_id' => 134, 'name' => 'Jaluit Island', 'name_ru' => NULL, 'gmt_offset' => -12,
			), array(
				'id' => 3278, 'country_id' => 9, 'name' => 'Jamba', 'name_ru' => 'Джамба', 'gmt_offset' => -1,
			), array(
				'id' => 3279, 'country_id' => 95, 'name' => 'Jambi', 'name_ru' => 'Джамби', 'gmt_offset' => 7,
			), array(
				'id' => 3280, 'country_id' => 22, 'name' => 'Jambol', 'name_ru' => 'Джамбол', 'gmt_offset' => -2,
			), array(
				'id' => 3281, 'country_id' => 216, 'name' => 'Jamestown', 'name_ru' => 'Джеймстаун', 'gmt_offset' => 5,
			), array(
				'id' => 3282, 'country_id' => 99, 'name' => 'Jammu', 'name_ru' => 'Джамму', 'gmt_offset' => -5.5,
			), array(
				'id' => 3283, 'country_id' => 99, 'name' => 'Jamnagar', 'name_ru' => 'Джамнагар', 'gmt_offset' => -5.5,
			), array(
				'id'         => 3284, 'country_id' => 99, 'name' => 'Jamshedpur', 'name_ru' => 'Джамшедпур',
				'gmt_offset' => -5.5,
			), array(
				'id'         => 3285, 'country_id' => 159, 'name' => 'Janakpur', 'name_ru' => 'Джанакпур',
				'gmt_offset' => -5.7999999999999998,
			), array(
				'id' => 3286, 'country_id' => 216, 'name' => 'Janesville', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 3287, 'country_id' => 29, 'name' => 'Januaria', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 3288, 'country_id' => 164, 'name' => 'Jaque', 'name_ru' => 'Жак', 'gmt_offset' => 5,
			), array(
				'id' => 3289, 'country_id' => 216, 'name' => 'Jasper', 'name_ru' => 'Джаспер', 'gmt_offset' => 6,
			), array(
				'id' => 3290, 'country_id' => 35, 'name' => 'Jasper-hinton', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 3291, 'country_id' => 29, 'name' => 'Jatai', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 3292, 'country_id' => 165, 'name' => 'Jauja', 'name_ru' => 'Хауха', 'gmt_offset' => 5,
			), array(
				'id' => 3293, 'country_id' => 95, 'name' => 'Jayapura', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3294, 'country_id' => 182, 'name' => 'Jazan', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 3295, 'country_id' => 182, 'name' => 'Jeddah', 'name_ru' => 'Джедда', 'gmt_offset' => 3,
			), array(
				'id' => 3296, 'country_id' => 216, 'name' => 'Jefferson', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 3297, 'country_id' => 216, 'name' => 'Jefferson City', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3298, 'country_id' => 134, 'name' => 'Jeh', 'name_ru' => 'Джех', 'gmt_offset' => -12,
			), array(
				'id' => 3299, 'country_id' => 115, 'name' => 'Jeju', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 3300, 'country_id' => 35, 'name' => 'Jenpeg', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 3301, 'country_id' => 115, 'name' => 'Jeonju', 'name_ru' => 'Джеонжу', 'gmt_offset' => 9,
			), array(
				'id' => 3302, 'country_id' => 29, 'name' => 'Jequie', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 3303, 'country_id' => 93, 'name' => 'Jeremie', 'name_ru' => 'Жереми', 'gmt_offset' => 5,
			), array(
				'id'         => 3304, 'country_id' => 64, 'name' => 'Jerez De La Frontera', 'name_ru' => NULL,
				'gmt_offset' => 1,
			), array(
				'id' => 3305, 'country_id' => 104, 'name' => 'Jersey', 'name_ru' => 'Джерси', 'gmt_offset' => 0,
			), array(
				'id' => 3306, 'country_id' => 97, 'name' => 'Jerusalem', 'name_ru' => 'Иерусалим', 'gmt_offset' => 2,
			), array(
				'id' => 3307, 'country_id' => 103, 'name' => 'Jesolo', 'name_ru' => 'Езоло', 'gmt_offset' => -1,
			), array(
				'id' => 3308, 'country_id' => 19, 'name' => 'Jessore', 'name_ru' => 'Джессор', 'gmt_offset' => -6,
			), array(
				'id' => 3309, 'country_id' => 99, 'name' => 'Jeypore', 'name_ru' => 'Джейпор', 'gmt_offset' => -5.5,
			), array(
				'id' => 3310, 'country_id' => 45, 'name' => 'Ji An', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3311, 'country_id' => 29, 'name' => 'Ji-Parana', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id'         => 3312, 'country_id' => 45, 'name' => 'Jiamusi', 'name_ru' => 'Джаймуси (Китай)',
				'gmt_offset' => -8,
			), array(
				'id' => 3313, 'country_id' => 45, 'name' => 'Jiang Men', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3314, 'country_id' => 45, 'name' => 'Jiayuguan', 'name_ru' => 'Цзяюйгуань', 'gmt_offset' => -8,
			), array(
				'id' => 3315, 'country_id' => 58, 'name' => 'Jijel', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 3316, 'country_id' => 65, 'name' => 'Jijiga', 'name_ru' => 'Джиджига', 'gmt_offset' => 3,
			), array(
				'id' => 3317, 'country_id' => 45, 'name' => 'Jilin', 'name_ru' => 'Цзилинь', 'gmt_offset' => -8,
			), array(
				'id' => 3318, 'country_id' => 65, 'name' => 'Jimma', 'name_ru' => 'Джимма', 'gmt_offset' => -3,
			), array(
				'id' => 3319, 'country_id' => 45, 'name' => 'Jinan', 'name_ru' => 'Цзинань', 'gmt_offset' => -8,
			), array(
				'id'         => 3320, 'country_id' => 45, 'name' => 'Jingdezhen', 'name_ru' => 'Цзиньдэчжэнь',
				'gmt_offset' => -8,
			), array(
				'id' => 3321, 'country_id' => 45, 'name' => 'Jinghong', 'name_ru' => 'Цзиньхонг', 'gmt_offset' => -8,
			), array(
				'id' => 3322, 'country_id' => 115, 'name' => 'Jinhae', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 3323, 'country_id' => 45, 'name' => 'Jining', 'name_ru' => 'Цзинин', 'gmt_offset' => 0,
			), array(
				'id' => 3324, 'country_id' => 214, 'name' => 'Jinja', 'name_ru' => 'Джинджа', 'gmt_offset' => -3,
			), array(
				'id' => 3325, 'country_id' => 45, 'name' => 'Jinjiang', 'name_ru' => 'Цзиньян', 'gmt_offset' => 8,
			), array(
				'id' => 3326, 'country_id' => 115, 'name' => 'Jinju', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 3327, 'country_id' => 65, 'name' => 'Jinka', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 3328, 'country_id' => 45, 'name' => 'Jinzhou', 'name_ru' => 'Цзиньчжоу', 'gmt_offset' => 8,
			), array(
				'id' => 3329, 'country_id' => 59, 'name' => 'Jipijapa', 'name_ru' => 'Хипихапа', 'gmt_offset' => 5,
			), array(
				'id'         => 3330, 'country_id' => 159, 'name' => 'Jiri', 'name_ru' => 'Джири',
				'gmt_offset' => -5.7999999999999998,
			), array(
				'id' => 3331, 'country_id' => 101, 'name' => 'Jiroft', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3332, 'country_id' => 45, 'name' => 'Jiujiang', 'name_ru' => 'Цзюцзянь', 'gmt_offset' => 0,
			), array(
				'id' => 3333, 'country_id' => 45, 'name' => 'Jiuquan', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 3334, 'country_id' => 169, 'name' => 'Jiwani', 'name_ru' => 'Дживани', 'gmt_offset' => -5,
			), array(
				'id' => 3335, 'country_id' => 29, 'name' => 'Joacaba', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id'         => 3336, 'country_id' => 29, 'name' => 'Joao Pessoa', 'name_ru' => 'Жоао Пессоа',
				'gmt_offset' => 3,
			), array(
				'id' => 3337, 'country_id' => 99, 'name' => 'Jodhpur', 'name_ru' => 'Джодхпур', 'gmt_offset' => 5.5,
			), array(
				'id' => 3338, 'country_id' => 66, 'name' => 'Joensuu', 'name_ru' => 'Йонсуу', 'gmt_offset' => -2,
			), array(
				'id'         => 3339, 'country_id' => 228, 'name' => 'Johannesburg', 'name_ru' => 'Йоханнесбург',
				'gmt_offset' => 2,
			), array(
				'id' => 3340, 'country_id' => 216, 'name' => 'John Day', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 3341, 'country_id' => 35, 'name' => 'Johnny Mountain', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 3342, 'country_id' => 216, 'name' => 'Johnson', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 3343, 'country_id' => 215, 'name' => 'Johnston Island', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 3344, 'country_id' => 216, 'name' => 'Johnstown', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id'         => 3345, 'country_id' => 149, 'name' => 'Johor Bahru', 'name_ru' => 'Джохор-Бару',
				'gmt_offset' => 8,
			), array(
				'id' => 3346, 'country_id' => 29, 'name' => 'Joinville', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 3347, 'country_id' => 216, 'name' => 'Joliet', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 3348, 'country_id' => 168, 'name' => 'Jolo', 'name_ru' => 'Жоло', 'gmt_offset' => -8,
			), array(
				'id' => 3349, 'country_id' => 216, 'name' => 'Jolon', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 3350, 'country_id' => 159, 'name' => 'Jomsom', 'name_ru' => 'Джомсом',
				'gmt_offset' => -5.7999999999999998,
			), array(
				'id' => 3351, 'country_id' => 216, 'name' => 'Jonesboro', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 3352, 'country_id' => 186, 'name' => 'Jonkoping', 'name_ru' => 'Йонкопинг', 'gmt_offset' => 1,
			), array(
				'id' => 3353, 'country_id' => 216, 'name' => 'Joplin, MO', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3354, 'country_id' => 216, 'name' => 'Jordan', 'name_ru' => 'Иордания', 'gmt_offset' => 7,
			), array(
				'id' => 3355, 'country_id' => 99, 'name' => 'Jorhat', 'name_ru' => 'Йорхат', 'gmt_offset' => -5.5,
			), array(
				'id' => 3356, 'country_id' => 66, 'name' => 'Joroinen', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 3357, 'country_id' => 155, 'name' => 'Jos', 'name_ru' => 'Йос', 'gmt_offset' => 1,
			), array(
				'id' => 3358, 'country_id' => 11, 'name' => 'Jose De San Martin', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id'         => 3359, 'country_id' => 167, 'name' => 'Josephstaal', 'name_ru' => 'Жозефсталль',
				'gmt_offset' => -10,
			), array(
				'id'         => 3360, 'country_id' => 180, 'name' => 'Joshkar-Ola', 'name_ru' => 'Йошкар-Ола',
				'gmt_offset' => 4,
			), array(
				'id' => 3361, 'country_id' => 71, 'name' => 'Juan Les Pins', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 3362, 'country_id' => 165, 'name' => 'Juanjui', 'name_ru' => 'Хуанхуй', 'gmt_offset' => -5,
			), array(
				'id' => 3363, 'country_id' => 29, 'name' => 'Juara', 'name_ru' => 'Жуара', 'gmt_offset' => 0,
			), array(
				'id' => 3364, 'country_id' => 29, 'name' => 'Juazeiro Do Norte', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 3365, 'country_id' => 185, 'name' => 'Juba', 'name_ru' => 'Джуба', 'gmt_offset' => 3,
			), array(
				'id' => 3366, 'country_id' => 29, 'name' => 'Juina', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 3367, 'country_id' => 53, 'name' => 'Juist', 'name_ru' => 'Юист', 'gmt_offset' => -1,
			), array(
				'id' => 3368, 'country_id' => 29, 'name' => 'Juiz De Fora', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 3369, 'country_id' => 11, 'name' => 'Jujuy', 'name_ru' => 'Хухуй', 'gmt_offset' => -3,
			), array(
				'id' => 3370, 'country_id' => 14, 'name' => 'Julia Creek', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3371, 'country_id' => 165, 'name' => 'Juliaca', 'name_ru' => 'Хулиака', 'gmt_offset' => -5,
			), array(
				'id'         => 3372, 'country_id' => 159, 'name' => 'Jumla', 'name_ru' => 'Джумла',
				'gmt_offset' => 5.7000000000000002,
			), array(
				'id' => 3373, 'country_id' => 216, 'name' => 'Junction', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3374, 'country_id' => 14, 'name' => 'Jundah', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3375, 'country_id' => 216, 'name' => 'Juneau', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3376, 'country_id' => 216, 'name' => 'Juneau,  WI', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3377, 'country_id' => 11, 'name' => 'Junin', 'name_ru' => 'Хунин', 'gmt_offset' => -3,
			), array(
				'id' => 3378, 'country_id' => 46, 'name' => 'Jurado', 'name_ru' => 'Журадо', 'gmt_offset' => 5,
			), array(
				'id' => 3379, 'country_id' => 14, 'name' => 'Jurien Bay', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 3380, 'country_id' => 29, 'name' => 'Juruena', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 3381, 'country_id' => 91, 'name' => 'Juticalpa', 'name_ru' => 'Хутикальпа', 'gmt_offset' => 6,
			), array(
				'id' => 3382, 'country_id' => 45, 'name' => 'Juzhou', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3383, 'country_id' => 32, 'name' => 'Jwaneng', 'name_ru' => 'Жваненг', 'gmt_offset' => -2,
			), array(
				'id' => 3384, 'country_id' => 66, 'name' => 'Jyvaskyla', 'name_ru' => 'Ювяскюля', 'gmt_offset' => 2,
			), array(
				'id' => 3385, 'country_id' => 41, 'name' => 'Kaadedhdhoo', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3386, 'country_id' => 191, 'name' => 'Kabala', 'name_ru' => 'Кабала', 'gmt_offset' => 0,
			), array(
				'id' => 3387, 'country_id' => 214, 'name' => 'Kabalega Falls', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 3388, 'country_id' => 37, 'name' => 'Kabalo', 'name_ru' => 'Кабало', 'gmt_offset' => 0,
			), array(
				'id' => 3389, 'country_id' => 134, 'name' => 'Kaben', 'name_ru' => NULL, 'gmt_offset' => 12,
			), array(
				'id' => 3390, 'country_id' => 37, 'name' => 'Kabinda', 'name_ru' => 'Кабинда', 'gmt_offset' => 0,
			), array(
				'id' => 3391, 'country_id' => 65, 'name' => 'Kabri Dar', 'name_ru' => 'Кабри-Дар', 'gmt_offset' => 3,
			), array(
				'id' => 3392, 'country_id' => 3, 'name' => 'Kabul', 'name_ru' => NULL, 'gmt_offset' => 4.5,
			), array(
				'id' => 3393, 'country_id' => 167, 'name' => 'Kabwum', 'name_ru' => 'Кабвум', 'gmt_offset' => -10,
			), array(
				'id' => 3394, 'country_id' => 169, 'name' => 'Kadanwari', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3395, 'country_id' => 146, 'name' => 'Kadhdhoo', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 3396, 'country_id' => 155, 'name' => 'Kaduna', 'name_ru' => 'Кадуна', 'gmt_offset' => 1,
			), array(
				'id' => 3397, 'country_id' => 142, 'name' => 'Kaedi', 'name_ru' => 'Кеди', 'gmt_offset' => 0,
			), array(
				'id' => 3398, 'country_id' => 44, 'name' => 'Kaele', 'name_ru' => 'Келе', 'gmt_offset' => -1,
			), array(
				'id' => 3399, 'country_id' => 149, 'name' => 'Kagau', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 3400, 'country_id' => 167, 'name' => 'Kagi', 'name_ru' => 'Каги', 'gmt_offset' => 10,
			), array(
				'id' => 3401, 'country_id' => 107, 'name' => 'Kagoshima', 'name_ru' => 'Кагошима', 'gmt_offset' => 9,
			), array(
				'id' => 3402, 'country_id' => 167, 'name' => 'Kagua', 'name_ru' => 'Кагуа', 'gmt_offset' => -10,
			), array(
				'id' => 3403, 'country_id' => 216, 'name' => 'Kagvik Creek', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3404, 'country_id' => 208, 'name' => 'Kahramanmaras', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 3405, 'country_id' => 167, 'name' => 'Kaiapit', 'name_ru' => 'Кайапит', 'gmt_offset' => -10,
			), array(
				'id' => 3406, 'country_id' => 89, 'name' => 'Kaieteur', 'name_ru' => 'Каетер', 'gmt_offset' => 3,
			), array(
				'id' => 3407, 'country_id' => 162, 'name' => 'Kaikohe', 'name_ru' => 'Кайкоэ', 'gmt_offset' => 13,
			), array(
				'id' => 3408, 'country_id' => 162, 'name' => 'Kaikoura', 'name_ru' => 'Каикоура', 'gmt_offset' => 13,
			), array(
				'id' => 3409, 'country_id' => 99, 'name' => 'Kailashahar', 'name_ru' => 'Кайлашахар', 'gmt_offset' => 6,
			), array(
				'id' => 3410, 'country_id' => 95, 'name' => 'Kaimana', 'name_ru' => 'Каймана', 'gmt_offset' => 9,
			), array(
				'id' => 3411, 'country_id' => 167, 'name' => 'Kaintiba', 'name_ru' => 'Каинтиба', 'gmt_offset' => -10,
			), array(
				'id' => 3412, 'country_id' => 216, 'name' => 'Kaiser/Lake Ozark', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id'         => 3413, 'country_id' => 53, 'name' => 'Kaiserslautern', 'name_ru' => 'Кайзерслаутен',
				'gmt_offset' => 1,
			), array(
				'id' => 3414, 'country_id' => 162, 'name' => 'Kaitaia', 'name_ru' => 'Кайтайа', 'gmt_offset' => 13,
			), array(
				'id' => 3415, 'country_id' => 66, 'name' => 'Kajaani', 'name_ru' => 'Каяне', 'gmt_offset' => 2,
			), array(
				'id' => 3416, 'country_id' => 216, 'name' => 'Kake', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3417, 'country_id' => 216, 'name' => 'Kakhonak', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3418, 'country_id' => 229, 'name' => 'Kalabo', 'name_ru' => 'Калабо', 'gmt_offset' => 2,
			), array(
				'id' => 3419, 'country_id' => 216, 'name' => 'Kalakaket', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3420, 'country_id' => 101, 'name' => 'Kalaleh', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3421, 'country_id' => 85, 'name' => 'Kalamata', 'name_ru' => 'Каламата', 'gmt_offset' => 2,
			), array(
				'id' => 3422, 'country_id' => 216, 'name' => 'Kalamazoo', 'name_ru' => 'Каламазу', 'gmt_offset' => -5,
			), array(
				'id' => 3423, 'country_id' => 169, 'name' => 'Kalat', 'name_ru' => 'Калат', 'gmt_offset' => -5,
			), array(
				'id' => 3424, 'country_id' => 216, 'name' => 'Kalaupapa', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3425, 'country_id' => 14, 'name' => 'Kalbarri', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 3426, 'country_id' => 37, 'name' => 'Kalemie', 'name_ru' => 'Калемие', 'gmt_offset' => 2,
			), array(
				'id' => 3427, 'country_id' => 137, 'name' => 'Kalemyo', 'name_ru' => 'Калемьо', 'gmt_offset' => -7,
			), array(
				'id' => 3428, 'country_id' => 14, 'name' => 'Kalgoorlie', 'name_ru' => 'Калгурли', 'gmt_offset' => 9,
			), array(
				'id' => 3429, 'country_id' => 168, 'name' => 'Kalibo', 'name_ru' => 'Калибо', 'gmt_offset' => 8,
			), array(
				'id' => 3430, 'country_id' => 37, 'name' => 'Kalima', 'name_ru' => 'Калима', 'gmt_offset' => 0,
			), array(
				'id'         => 3431, 'country_id' => 180, 'name' => 'Kaliningrad', 'name_ru' => 'Калининград',
				'gmt_offset' => 3,
			), array(
				'id' => 3432, 'country_id' => 216, 'name' => 'Kalispell, MT', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 3433, 'country_id' => 14, 'name' => 'Kalkurung', 'name_ru' => 'Калкурунг', 'gmt_offset' => -10,
			), array(
				'id' => 3434, 'country_id' => 186, 'name' => 'Kalmar', 'name_ru' => 'Калмар', 'gmt_offset' => 1,
			), array(
				'id' => 3435, 'country_id' => 108, 'name' => 'Kalokol', 'name_ru' => 'Калокол', 'gmt_offset' => 3,
			), array(
				'id' => 3436, 'country_id' => 14, 'name' => 'Kalpowar', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3437, 'country_id' => 216, 'name' => 'Kalskag', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3438, 'country_id' => 216, 'name' => 'Kaltag', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3439, 'country_id' => 180, 'name' => 'Kaluga', 'name_ru' => 'Калуга', 'gmt_offset' => 4,
			), array(
				'id' => 3440, 'country_id' => 14, 'name' => 'Kalumburu', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 3441, 'country_id' => 99, 'name' => 'Kamalpur', 'name_ru' => 'Камалпур', 'gmt_offset' => 5.5,
			), array(
				'id' => 3442, 'country_id' => 14, 'name' => 'Kamaran Downs', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3443, 'country_id' => 227, 'name' => 'Kamaran Is', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 3444, 'country_id' => 89, 'name' => 'Kamarang', 'name_ru' => 'Камаранг', 'gmt_offset' => 3,
			), array(
				'id' => 3445, 'country_id' => 220, 'name' => 'Kamarata', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 3446, 'country_id' => 14, 'name' => 'Kambalda', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 3447, 'country_id' => 167, 'name' => 'Kamberatoro', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3448, 'country_id' => 95, 'name' => 'Kambuaya', 'name_ru' => 'Камбуая', 'gmt_offset' => -9,
			), array(
				'id' => 3449, 'country_id' => 181, 'name' => 'Kamembe', 'name_ru' => 'Камембе', 'gmt_offset' => -2,
			), array(
				'id'         => 3450, 'country_id' => 213, 'name' => 'Kamenets-podolskiy',
				'name_ru'    => 'Каменец-Подольский', 'gmt_offset' => 2,
			), array(
				'id' => 3451, 'country_id' => 197, 'name' => 'Kameshli', 'name_ru' => 'Камешли', 'gmt_offset' => 2,
			), array(
				'id' => 3452, 'country_id' => 14, 'name' => 'Kamileroi', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3453, 'country_id' => 167, 'name' => 'Kamina', 'name_ru' => 'Камина', 'gmt_offset' => -2,
			), array(
				'id' => 3454, 'country_id' => 167, 'name' => 'Kamiraba', 'name_ru' => 'Камираба', 'gmt_offset' => -10,
			), array(
				'id' => 3455, 'country_id' => 35, 'name' => 'Kamloops', 'name_ru' => 'Камлупс', 'gmt_offset' => 8,
			), array(
				'id' => 3456, 'country_id' => 202, 'name' => 'Kamphangsaen', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 3457, 'country_id' => 110, 'name' => 'Kampot', 'name_ru' => 'Кампот', 'gmt_offset' => -7,
			), array(
				'id' => 3458, 'country_id' => 216, 'name' => 'Kamuela', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3459, 'country_id' => 167, 'name' => 'Kamulai', 'name_ru' => 'Камулай', 'gmt_offset' => -10,
			), array(
				'id' => 3460, 'country_id' => 95, 'name' => 'Kamur', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id'         => 3461, 'country_id' => 216, 'name' => 'Kamusi',
				'name_ru'    => 'Кугурурок-Ривер, шт. Аляска', 'gmt_offset' => 9,
			), array(
				'id' => 3462, 'country_id' => 216, 'name' => 'Kanab', 'name_ru' => 'Канаб', 'gmt_offset' => -7,
			), array(
				'id' => 3463, 'country_id' => 167, 'name' => 'Kanabea', 'name_ru' => 'Канабеа', 'gmt_offset' => -10,
			), array(
				'id' => 3464, 'country_id' => 167, 'name' => 'Kanainj', 'name_ru' => 'Канайндж', 'gmt_offset' => -10,
			), array(
				'id' => 3465, 'country_id' => 37, 'name' => 'Kananga', 'name_ru' => 'Кананга', 'gmt_offset' => 2,
			), array(
				'id' => 3466, 'country_id' => 3, 'name' => 'Kandahar', 'name_ru' => 'Кандагар', 'gmt_offset' => 4.5,
			), array(
				'id' => 3467, 'country_id' => 67, 'name' => 'Kandavu', 'name_ru' => 'Кандаву', 'gmt_offset' => 12,
			), array(
				'id' => 3468, 'country_id' => 167, 'name' => 'Kandep', 'name_ru' => 'Кандеп', 'gmt_offset' => -10,
			), array(
				'id' => 3469, 'country_id' => 25, 'name' => 'Kandi', 'name_ru' => 'Канди', 'gmt_offset' => 1,
			), array(
				'id' => 3470, 'country_id' => 99, 'name' => 'Kandla', 'name_ru' => 'Кандия', 'gmt_offset' => 5.5,
			), array(
				'id' => 3471, 'country_id' => 167, 'name' => 'Kandrian', 'name_ru' => 'Кандриан', 'gmt_offset' => -10,
			), array(
				'id' => 3472, 'country_id' => 122, 'name' => 'Kandy', 'name_ru' => 'Канди', 'gmt_offset' => 6,
			), array(
				'id' => 3473, 'country_id' => 80, 'name' => 'Kangaatsiaq', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3474, 'country_id' => 101, 'name' => 'Kangan', 'name_ru' => 'Канган', 'gmt_offset' => 3.5,
			), array(
				'id' => 3475, 'country_id' => 80, 'name' => 'Kangerlussuaq', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 3476, 'country_id' => 35, 'name' => 'Kangiqsualujjuaq', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 3477, 'country_id' => 35, 'name' => 'Kangiqsujuaq', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 3478, 'country_id' => 35, 'name' => 'Kangirsuk', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 3479, 'country_id' => 37, 'name' => 'Kaniama', 'name_ru' => 'Каниама', 'gmt_offset' => 0,
			), array(
				'id' => 3480, 'country_id' => 216, 'name' => 'Kankakee', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3481, 'country_id' => 82, 'name' => 'Kankan', 'name_ru' => 'Канкан', 'gmt_offset' => 0,
			), array(
				'id' => 3482, 'country_id' => 155, 'name' => 'Kano', 'name_ru' => 'Кано', 'gmt_offset' => 1,
			), array(
				'id' => 3483, 'country_id' => 99, 'name' => 'Kanpur', 'name_ru' => 'Канпур', 'gmt_offset' => 5.5,
			), array(
				'id'         => 3484, 'country_id' => 216, 'name' => 'Kansas City', 'name_ru' => 'Канзас Сити',
				'gmt_offset' => -6,
			), array(
				'id' => 3485, 'country_id' => 21, 'name' => 'Kantchari', 'name_ru' => 'Канчари', 'gmt_offset' => 0,
			), array(
				'id' => 3486, 'country_id' => 167, 'name' => 'Kanua', 'name_ru' => 'Кануа', 'gmt_offset' => -10,
			), array(
				'id' => 3487, 'country_id' => 211, 'name' => 'Kaohsiung', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 3488, 'country_id' => 192, 'name' => 'Kaolack', 'name_ru' => 'Каолак', 'gmt_offset' => 0,
			), array(
				'id' => 3489, 'country_id' => 229, 'name' => 'Kaoma', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 3490, 'country_id' => 167, 'name' => 'Kapal', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3491, 'country_id' => 37, 'name' => 'Kapanga', 'name_ru' => 'Капанга', 'gmt_offset' => 0,
			), array(
				'id' => 3492, 'country_id' => 149, 'name' => 'Kapit', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 3493, 'country_id' => 35, 'name' => 'Kapuskasing', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 3494, 'country_id' => 167, 'name' => 'Kar', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3495, 'country_id' => 167, 'name' => 'Kar Kar', 'name_ru' => 'Кар-Кар', 'gmt_offset' => 10,
			), array(
				'id' => 3496, 'country_id' => 169, 'name' => 'Karachi', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 3497, 'country_id' => 118, 'name' => 'Karaganda', 'name_ru' => 'Караганда', 'gmt_offset' => 6,
			), array(
				'id' => 3498, 'country_id' => 45, 'name' => 'Karamay', 'name_ru' => 'Карамай', 'gmt_offset' => -8,
			), array(
				'id' => 3499, 'country_id' => 89, 'name' => 'Karanambo', 'name_ru' => 'Каранамбо', 'gmt_offset' => 3,
			), array(
				'id' => 3500, 'country_id' => 89, 'name' => 'Karasabai', 'name_ru' => 'Карасабаи', 'gmt_offset' => 3,
			),
				array(
					'id'         => 3501, 'country_id' => 151, 'name' => 'Karasburg', 'name_ru' => 'Карасбург',
					'gmt_offset' => -2,
				), 1 => array(
				'id' => 3502, 'country_id' => 167, 'name' => 'Karato', 'name_ru' => 'Карато', 'gmt_offset' => -10,
			), array(
				'id' => 3503, 'country_id' => 167, 'name' => 'Karawari', 'name_ru' => 'Каравари', 'gmt_offset' => -10,
			), array(
				'id' => 3504, 'country_id' => 22, 'name' => 'Kardjali', 'name_ru' => 'Карджали', 'gmt_offset' => 2,
			), array(
				'id' => 3505, 'country_id' => 60, 'name' => 'Kardla', 'name_ru' => 'Кярдла', 'gmt_offset' => 2,
			), array(
				'id' => 3506, 'country_id' => 231, 'name' => 'Kariba', 'name_ru' => 'Кариба', 'gmt_offset' => 2,
			), array(
				'id' => 3507, 'country_id' => 167, 'name' => 'Karimui', 'name_ru' => 'Каримуи', 'gmt_offset' => -10,
			), array(
				'id' => 3508, 'country_id' => 95, 'name' => 'Karimunjawa', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 3509, 'country_id' => 52, 'name' => 'Karlovy Vary', 'name_ru' => 'Карловы-Вары',
				'gmt_offset' => 1,
			), array(
				'id' => 3510, 'country_id' => 53, 'name' => 'Karlshamn', 'name_ru' => 'Карлсхамн', 'gmt_offset' => 1,
			), array(
				'id' => 3511, 'country_id' => 186, 'name' => 'Karlskoga', 'name_ru' => 'Карлскуга', 'gmt_offset' => -1,
			), array(
				'id'         => 3512, 'country_id' => 53, 'name' => 'Karlsruhe/Baden Baden', 'name_ru' => 'Карлсруэ',
				'gmt_offset' => 1,
			), array(
				'id' => 3513, 'country_id' => 186, 'name' => 'Karlstad', 'name_ru' => 'Карлстад', 'gmt_offset' => 1,
			), array(
				'id' => 3514, 'country_id' => 216, 'name' => 'Karluk', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3515, 'country_id' => 216, 'name' => 'Karluk Lake', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3516, 'country_id' => 147, 'name' => 'Karonga', 'name_ru' => 'Каронга', 'gmt_offset' => 2,
			), array(
				'id' => 3517, 'country_id' => 167, 'name' => 'Karoola', 'name_ru' => 'Карула', 'gmt_offset' => -10,
			), array(
				'id' => 3518, 'country_id' => 85, 'name' => 'Karpathos', 'name_ru' => 'Карпатос', 'gmt_offset' => 2,
			), array(
				'id' => 3519, 'country_id' => 14, 'name' => 'Karratha', 'name_ru' => 'Каррата', 'gmt_offset' => -8,
			), array(
				'id' => 3520, 'country_id' => 208, 'name' => 'Kars', 'name_ru' => 'Карс', 'gmt_offset' => 2,
			), array(
				'id' => 3521, 'country_id' => 218, 'name' => 'Karshi', 'name_ru' => 'Карши', 'gmt_offset' => 5,
			), array(
				'id' => 3522, 'country_id' => 95, 'name' => 'Karubaga', 'name_ru' => 'Карубага', 'gmt_offset' => 9,
			), array(
				'id' => 3523, 'country_id' => 14, 'name' => 'Karumba', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3524, 'country_id' => 55, 'name' => 'Karup', 'name_ru' => 'Каруп', 'gmt_offset' => 1,
			), array(
				'id' => 3525, 'country_id' => 216, 'name' => 'Kasaan', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id'         => 3526, 'country_id' => 229, 'name' => 'Kasaba Bay', 'name_ru' => 'Касаба-Бей',
				'gmt_offset' => -2,
			), array(
				'id' => 3527, 'country_id' => 35, 'name' => 'Kasabonika', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 3528, 'country_id' => 229, 'name' => 'Kasama', 'name_ru' => 'Касама', 'gmt_offset' => 2,
			), array(
				'id' => 3529, 'country_id' => 32, 'name' => 'Kasane', 'name_ru' => 'Касане', 'gmt_offset' => 2,
			), array(
				'id' => 3530, 'country_id' => 167, 'name' => 'Kasanombe', 'name_ru' => 'Касаномбе', 'gmt_offset' => -10,
			), array(
				'id' => 3531, 'country_id' => 35, 'name' => 'Kasba Lake', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3532, 'country_id' => 35, 'name' => 'Kaschechewan', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 3533, 'country_id' => 229, 'name' => 'Kasenga', 'name_ru' => 'Касенга', 'gmt_offset' => 0,
			), array(
				'id' => 3534, 'country_id' => 214, 'name' => 'Kasese', 'name_ru' => 'Касесе', 'gmt_offset' => 3,
			), array(
				'id' => 3535, 'country_id' => 45, 'name' => 'Kashi', 'name_ru' => 'Каши', 'gmt_offset' => 8,
			), array(
				'id' => 3536, 'country_id' => 216, 'name' => 'Kasigluk', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3537, 'country_id' => 194, 'name' => 'Kasikasima', 'name_ru' => 'Касикасима', 'gmt_offset' => 0,
			), array(
				'id' => 3538, 'country_id' => 229, 'name' => 'Kasompe', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id'         => 3539, 'country_id' => 37, 'name' => 'Kasongo Lunda', 'name_ru' => 'Казонго-Лунда',
				'gmt_offset' => 0,
			), array(
				'id' => 3540, 'country_id' => 85, 'name' => 'Kasos Island', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 3541, 'country_id' => 185, 'name' => 'Kassala', 'name_ru' => 'Кассала', 'gmt_offset' => 3,
			), array(
				'id' => 3542, 'country_id' => 53, 'name' => 'Kassel', 'name_ru' => 'Кассел', 'gmt_offset' => 1,
			), array(
				'id' => 3543, 'country_id' => 85, 'name' => 'Kastamonu', 'name_ru' => 'Кастамону', 'gmt_offset' => 0,
			), array(
				'id'         => 3544, 'country_id' => 85, 'name' => 'Kastelorizo', 'name_ru' => 'Кастелоризо',
				'gmt_offset' => 0,
			), array(
				'id' => 3545, 'country_id' => 85, 'name' => 'Kastoria', 'name_ru' => 'Кастория', 'gmt_offset' => 2,
			), array(
				'id' => 3546, 'country_id' => 147, 'name' => 'Kasungu', 'name_ru' => 'Касунгу', 'gmt_offset' => 0,
			), array(
				'id' => 3547, 'country_id' => 14, 'name' => 'Katanning', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 3548, 'country_id' => 14, 'name' => 'Katherine', 'name_ru' => 'Кэтрин', 'gmt_offset' => 9.5,
			), array(
				'id'         => 3549, 'country_id' => 159, 'name' => 'Kathmandu', 'name_ru' => 'Катманду',
				'gmt_offset' => 5.7000000000000002,
			), array(
				'id' => 3550, 'country_id' => 41, 'name' => 'Katiola', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3551, 'country_id' => 166, 'name' => 'Katiu', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 3552, 'country_id' => 216, 'name' => 'Katmai National Park', 'name_ru' => NULL,
				'gmt_offset' => -9,
			), array(
				'id' => 3553, 'country_id' => 89, 'name' => 'Kato', 'name_ru' => 'Като', 'gmt_offset' => 3,
			), array(
				'id' => 3554, 'country_id' => 170, 'name' => 'Katowice', 'name_ru' => 'Катовице', 'gmt_offset' => 1,
			), array(
				'id' => 3555, 'country_id' => 186, 'name' => 'Katrineholm', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 3556, 'country_id' => 35, 'name' => 'Kattiniq', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3557, 'country_id' => 122, 'name' => 'Katugastota', 'name_ru' => NULL, 'gmt_offset' => 5.5,
			), array(
				'id' => 3558, 'country_id' => 122, 'name' => 'Katukurunda', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3559, 'country_id' => 95, 'name' => 'Kau', 'name_ru' => 'Кау', 'gmt_offset' => 8,
			), array(
				'id' => 3560, 'country_id' => 216, 'name' => 'Kauai Island', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3561, 'country_id' => 166, 'name' => 'Kauehi', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3562, 'country_id' => 66, 'name' => 'Kauhajoki', 'name_ru' => 'Каухайоки', 'gmt_offset' => -2,
			), array(
				'id' => 3563, 'country_id' => 66, 'name' => 'Kauhava', 'name_ru' => 'Каухава', 'gmt_offset' => 2,
			), array(
				'id' => 3564, 'country_id' => 166, 'name' => 'Kaukura Atoll', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 3565, 'country_id' => 125, 'name' => 'Kaunas', 'name_ru' => 'Каунас', 'gmt_offset' => 2,
			), array(
				'id' => 3566, 'country_id' => 85, 'name' => 'Kavala', 'name_ru' => 'Кавала', 'gmt_offset' => 2,
			), array(
				'id' => 3567, 'country_id' => 220, 'name' => 'Kavanayen', 'name_ru' => 'Каванаен', 'gmt_offset' => 4,
			), array(
				'id' => 3568, 'country_id' => 167, 'name' => 'Kavieng', 'name_ru' => 'Кавьенг', 'gmt_offset' => -10,
			), array(
				'id' => 3569, 'country_id' => 216, 'name' => 'Kavik', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3570, 'country_id' => 38, 'name' => 'Kawadjia', 'name_ru' => 'Каваджиа', 'gmt_offset' => 0,
			), array(
				'id'         => 3571, 'country_id' => 162, 'name' => 'Kawau Island', 'name_ru' => 'Кавау-Айленд',
				'gmt_offset' => 13,
			), array(
				'id' => 3572, 'country_id' => 167, 'name' => 'Kawito', 'name_ru' => 'Кавито', 'gmt_offset' => -10,
			), array(
				'id' => 3573, 'country_id' => 137, 'name' => 'Kawthaung', 'name_ru' => 'Котонг', 'gmt_offset' => 7,
			), array(
				'id' => 3574, 'country_id' => 21, 'name' => 'Kaya', 'name_ru' => 'Кайя', 'gmt_offset' => 0,
			), array(
				'id' => 3575, 'country_id' => 216, 'name' => 'Kayenta, AZ', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 3576, 'country_id' => 136, 'name' => 'Kayes', 'name_ru' => 'Кайес', 'gmt_offset' => 0,
			), array(
				'id' => 3577, 'country_id' => 208, 'name' => 'Kayseri', 'name_ru' => 'Кайсери', 'gmt_offset' => 2,
			), array(
				'id' => 3578, 'country_id' => 180, 'name' => 'Kazan', 'name_ru' => 'Казань', 'gmt_offset' => 4,
			), array(
				'id' => 3579, 'country_id' => 216, 'name' => 'Kearney', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3580, 'country_id' => 95, 'name' => 'Kebar', 'name_ru' => 'Кебар', 'gmt_offset' => -9,
			), array(
				'id' => 3581, 'country_id' => 192, 'name' => 'Kedougou', 'name_ru' => 'Кедугу', 'gmt_offset' => 0,
			), array(
				'id' => 3582, 'country_id' => 216, 'name' => 'Keene', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id'         => 3583, 'country_id' => 151, 'name' => 'Keetmanshoop', 'name_ru' => 'Китмансхуп',
				'gmt_offset' => 2,
			), array(
				'id' => 3584, 'country_id' => 35, 'name' => 'Keewaywin', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3585, 'country_id' => 85, 'name' => 'Kefalonia', 'name_ru' => 'Кефалония', 'gmt_offset' => 2,
			), array(
				'id' => 3586, 'country_id' => 35, 'name' => 'Kegaska', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 3587, 'country_id' => 167, 'name' => 'Keglsugl', 'name_ru' => 'Кегльсугль', 'gmt_offset' => -10,
			), array(
				'id' => 3588, 'country_id' => 95, 'name' => 'Keisah', 'name_ru' => 'Кейса', 'gmt_offset' => -9,
			), array(
				'id' => 3589, 'country_id' => 216, 'name' => 'Kekaha', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3590, 'country_id' => 65, 'name' => 'Kelafo/Callaf', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 3591, 'country_id' => 122, 'name' => 'Kelaniya', 'name_ru' => NULL, 'gmt_offset' => 5.5,
			), array(
				'id' => 3592, 'country_id' => 167, 'name' => 'Kelanoa', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3593, 'country_id' => 95, 'name' => 'Kelila', 'name_ru' => 'Келила', 'gmt_offset' => 9,
			), array(
				'id' => 3594, 'country_id' => 39, 'name' => 'Kelle', 'name_ru' => 'Келле', 'gmt_offset' => -1,
			), array(
				'id' => 3595, 'country_id' => 73, 'name' => 'Kelly Bar', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3596, 'country_id' => 35, 'name' => 'Kelowna, BC', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 3597, 'country_id' => 216, 'name' => 'Kelp Bay', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3598, 'country_id' => 35, 'name' => 'Kelsey', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3599, 'country_id' => 216, 'name' => 'Kelso', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 3600, 'country_id' => 95, 'name' => 'Keluang', 'name_ru' => 'Келуанг', 'gmt_offset' => -7,
			), array(
				'id' => 3601, 'country_id' => 35, 'name' => 'Kemano', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 3602, 'country_id' => 216, 'name' => 'Kemerer', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 3603, 'country_id' => 180, 'name' => 'Kemerovo', 'name_ru' => 'Кемерово', 'gmt_offset' => 7,
			), array(
				'id' => 3604, 'country_id' => 66, 'name' => 'Kemi/Tornio', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 3605, 'country_id' => 14, 'name' => 'Kempsey', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 3606, 'country_id' => 216, 'name' => 'Kenai', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3607, 'country_id' => 95, 'name' => 'Kendari', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 3608, 'country_id' => 191, 'name' => 'Kenema', 'name_ru' => 'Кенема', 'gmt_offset' => 0,
			), array(
				'id' => 3609, 'country_id' => 137, 'name' => 'Keng Tung', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 3610, 'country_id' => 136, 'name' => 'Kenieba', 'name_ru' => 'Кеньеба', 'gmt_offset' => 0,
			), array(
				'id' => 3611, 'country_id' => 149, 'name' => 'Keningau', 'name_ru' => 'Кенингау', 'gmt_offset' => 8,
			), array(
				'id' => 3612, 'country_id' => 129, 'name' => 'Kenitra', 'name_ru' => 'Кенитра', 'gmt_offset' => 0,
			), array(
				'id' => 3613, 'country_id' => 216, 'name' => 'Kenmore Air Harbor', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 3614, 'country_id' => 216, 'name' => 'Kennett', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 3615, 'country_id' => 60, 'name' => 'Kennosao Lake', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 3616, 'country_id' => 35, 'name' => 'Kenora', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3617, 'country_id' => 216, 'name' => 'Kenosha', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3618, 'country_id' => 216, 'name' => 'Kentland', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3619, 'country_id' => 216, 'name' => 'Keokuk', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3620, 'country_id' => 95, 'name' => 'Kepi', 'name_ru' => 'Кепи', 'gmt_offset' => -9,
			), array(
				'id' => 3621, 'country_id' => 107, 'name' => 'Kerama', 'name_ru' => 'Керама', 'gmt_offset' => 9,
			), array(
				'id' => 3622, 'country_id' => 14, 'name' => 'Kerang', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3623, 'country_id' => 167, 'name' => 'Kerau', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3624, 'country_id' => 213, 'name' => 'Kerch', 'name_ru' => 'Керчь', 'gmt_offset' => 3,
			), array(
				'id' => 3625, 'country_id' => 167, 'name' => 'Kerema', 'name_ru' => 'Керема', 'gmt_offset' => -10,
			), array(
				'id' => 3626, 'country_id' => 108, 'name' => 'Kericho', 'name_ru' => 'Керичо', 'gmt_offset' => 3,
			), array(
				'id' => 3627, 'country_id' => 162, 'name' => 'Kerikeri', 'name_ru' => NULL, 'gmt_offset' => 13,
			), array(
				'id' => 3628, 'country_id' => 95, 'name' => 'Kerinci', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id'         => 3629, 'country_id' => 108, 'name' => 'Kerio Valley', 'name_ru' => 'Керио-Валлей',
				'gmt_offset' => 3,
			), array(
				'id' => 3630, 'country_id' => 85, 'name' => 'Kerkyra', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 3631, 'country_id' => 101, 'name' => 'Kerman', 'name_ru' => 'Керман', 'gmt_offset' => -4,
			), array(
				'id' => 3632, 'country_id' => 101, 'name' => 'Kermanshah', 'name_ru' => 'Керманшах', 'gmt_offset' => -4,
			), array(
				'id' => 3633, 'country_id' => 216, 'name' => 'Kerrville', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3634, 'country_id' => 149, 'name' => 'Kerteh', 'name_ru' => 'Кертех', 'gmt_offset' => -8,
			), array(
				'id' => 3635, 'country_id' => 99, 'name' => 'Keshod', 'name_ru' => 'Кешод', 'gmt_offset' => 5.5,
			), array(
				'id' => 3636, 'country_id' => 95, 'name' => 'Ketapang', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 3637, 'country_id' => 216, 'name' => 'Ketchikan', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3638, 'country_id' => 35, 'name' => 'Key Lake', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 3639, 'country_id' => 216, 'name' => 'Key Largo', 'name_ru' => 'Ки Ларго', 'gmt_offset' => -5,
			), array(
				'id' => 3640, 'country_id' => 216, 'name' => 'Key West', 'name_ru' => 'Ки Уэст', 'gmt_offset' => -5,
			), array(
				'id' => 3641, 'country_id' => 216, 'name' => 'Keystone', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3642, 'country_id' => 180, 'name' => 'Khabarovsk', 'name_ru' => 'Хабаровск', 'gmt_offset' => 11,
			), array(
				'id' => 3643, 'country_id' => 99, 'name' => 'Khajuraho', 'name_ru' => 'Кхаджурахо', 'gmt_offset' => 5.5,
			), array(
				'id' => 3644, 'country_id' => 182, 'name' => 'Khamis Mushait', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 3645, 'country_id' => 137, 'name' => 'Khamti', 'name_ru' => 'Хамти', 'gmt_offset' => -7,
			), array(
				'id' => 3646, 'country_id' => 100, 'name' => 'Khan Al Baghdadi', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3647, 'country_id' => 101, 'name' => 'Khaneh', 'name_ru' => 'Ханех', 'gmt_offset' => 3.5,
			), array(
				'id'         => 3648, 'country_id' => 180, 'name' => 'Khanty-mansiysk', 'name_ru' => 'Ханты-Мансийск',
				'gmt_offset' => 6,
			), array(
				'id' => 3649, 'country_id' => 61, 'name' => 'Kharga', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 3650, 'country_id' => 101, 'name' => 'Khark Island', 'name_ru' => NULL, 'gmt_offset' => 3.5,
			), array(
				'id' => 3651, 'country_id' => 138, 'name' => 'Kharkhorin', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 3652, 'country_id' => 213, 'name' => 'Kharkov', 'name_ru' => 'Харьков', 'gmt_offset' => 3,
			), array(
				'id' => 3653, 'country_id' => 185, 'name' => 'Khartoum', 'name_ru' => 'Хартум', 'gmt_offset' => 3,
			), array(
				'id' => 3654, 'country_id' => 163, 'name' => 'Khasab', 'name_ru' => 'Хасаб', 'gmt_offset' => 4,
			), array(
				'id' => 3655, 'country_id' => 185, 'name' => 'Khashm El Girba', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 3656, 'country_id' => 138, 'name' => 'Khatgal', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3657, 'country_id' => 213, 'name' => 'Kherson', 'name_ru' => 'Херсон', 'gmt_offset' => 3,
			), array(
				'id'         => 3658, 'country_id' => 213, 'name' => 'Khmelnitskiy', 'name_ru' => 'Хмельницкий',
				'gmt_offset' => 3,
			), array(
				'id' => 3659, 'country_id' => 228, 'name' => 'Khoka Moya', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 3660, 'country_id' => 202, 'name' => 'Khon Kaen', 'name_ru' => 'Кхон Каен', 'gmt_offset' => 7,
			), array(
				'id' => 3661, 'country_id' => 119, 'name' => 'Khong', 'name_ru' => 'Кхонг', 'gmt_offset' => -7,
			), array(
				'id' => 3662, 'country_id' => 101, 'name' => 'Khorramabad', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3663, 'country_id' => 3, 'name' => 'Khost', 'name_ru' => 'Хост', 'gmt_offset' => -5,
			), array(
				'id' => 3664, 'country_id' => 138, 'name' => 'Khovd', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 3665, 'country_id' => 99, 'name' => 'Khowai', 'name_ru' => 'Ховаи', 'gmt_offset' => 5.5,
			), array(
				'id' => 3666, 'country_id' => 101, 'name' => 'Khoy', 'name_ru' => NULL, 'gmt_offset' => 3.5,
			), array(
				'id' => 3667, 'country_id' => 203, 'name' => 'Khudzhand', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 3668, 'country_id' => 138, 'name' => 'Khujirt', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 3669, 'country_id' => 19, 'name' => 'Khulna', 'name_ru' => 'Кхулна', 'gmt_offset' => 6,
			), array(
				'id' => 3670, 'country_id' => 169, 'name' => 'Khuzdar', 'name_ru' => 'Хуздар', 'gmt_offset' => -5,
			), array(
				'id' => 3671, 'country_id' => 3, 'name' => 'Khwahan', 'name_ru' => 'Хвахан', 'gmt_offset' => -5,
			), array(
				'id' => 3672, 'country_id' => 32, 'name' => 'Khwai River Lodge', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 3673, 'country_id' => 216, 'name' => 'Kiana', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3674, 'country_id' => 37, 'name' => 'Kibuli', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 3675, 'country_id' => 53, 'name' => 'Kiel', 'name_ru' => 'Киел', 'gmt_offset' => 1,
			), array(
				'id' => 3676, 'country_id' => 167, 'name' => 'Kieta', 'name_ru' => 'Киета', 'gmt_offset' => -10,
			), array(
				'id' => 3677, 'country_id' => 213, 'name' => 'Kiev', 'name_ru' => 'Киев', 'gmt_offset' => 3,
			), array(
				'id' => 3678, 'country_id' => 142, 'name' => 'Kiffa', 'name_ru' => 'Киффа', 'gmt_offset' => 0,
			), array(
				'id' => 3679, 'country_id' => 181, 'name' => 'Kigali', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 3680, 'country_id' => 212, 'name' => 'Kigoma', 'name_ru' => 'Кигома', 'gmt_offset' => 3,
			), array(
				'id'         => 3681, 'country_id' => 107, 'name' => 'Kikaiga Shima', 'name_ru' => 'Кикаига-Сима',
				'gmt_offset' => 9,
			), array(
				'id' => 3682, 'country_id' => 167, 'name' => 'Kikinonda', 'name_ru' => 'Кикинонда', 'gmt_offset' => -10,
			), array(
				'id' => 3683, 'country_id' => 167, 'name' => 'Kikori', 'name_ru' => 'Кикори', 'gmt_offset' => -10,
			), array(
				'id' => 3684, 'country_id' => 37, 'name' => 'Kikwit', 'name_ru' => 'Киквит', 'gmt_offset' => 1,
			), array(
				'id' => 3685, 'country_id' => 108, 'name' => 'Kilaguni', 'name_ru' => 'Килагуни', 'gmt_offset' => -3,
			), array(
				'id' => 3686, 'country_id' => 216, 'name' => 'Kilgore', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3687, 'country_id' => 134, 'name' => 'Kili Island', 'name_ru' => NULL, 'gmt_offset' => 12,
			), array(
				'id'         => 3688, 'country_id' => 212, 'name' => 'Kilimanjaro', 'name_ru' => 'Килиманджаро',
				'gmt_offset' => 3,
			), array(
				'id' => 3689, 'country_id' => 96, 'name' => 'Kilkenny', 'name_ru' => 'Килкенни', 'gmt_offset' => 0,
			), array(
				'id' => 3690, 'country_id' => 216, 'name' => 'Kill Devil Hills', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 3691, 'country_id' => 35, 'name' => 'Killaloe', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 3692, 'country_id' => 216, 'name' => 'Killeen', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3693, 'country_id' => 35, 'name' => 'Killineq', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 3694, 'country_id' => 229, 'name' => 'Kilwa', 'name_ru' => 'Килва', 'gmt_offset' => 0,
			), array(
				'id' => 3695, 'country_id' => 95, 'name' => 'Kimam', 'name_ru' => 'Кимам', 'gmt_offset' => -9,
			), array(
				'id' => 3696, 'country_id' => 228, 'name' => 'Kimberley', 'name_ru' => 'Кимберли', 'gmt_offset' => 2,
			), array(
				'id' => 3697, 'country_id' => 14, 'name' => 'Kimberley Downs', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id'         => 3698, 'country_id' => 35, 'name' => 'Kimmirut/Lake Harbour', 'name_ru' => NULL,
				'gmt_offset' => 5,
			), array(
				'id' => 3699, 'country_id' => 35, 'name' => 'Kincardine', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 3700, 'country_id' => 39, 'name' => 'Kindamba', 'name_ru' => 'Киндамба', 'gmt_offset' => 1,
			), array(
				'id' => 3701, 'country_id' => 35, 'name' => 'Kindersley', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3702, 'country_id' => 230, 'name' => 'Kindu', 'name_ru' => 'Кинду', 'gmt_offset' => 2,
			), array(
				'id' => 3703, 'country_id' => 216, 'name' => 'King City', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 3704, 'country_id' => 216, 'name' => 'King Cove', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id'         => 3705, 'country_id' => 14, 'name' => 'King Island, Tasmania', 'name_ru' => 'Кинг-Айленд',
				'gmt_offset' => 10,
			), array(
				'id'         => 3706, 'country_id' => 182, 'name' => 'King Khalid Mil. City', 'name_ru' => NULL,
				'gmt_offset' => 3,
			), array(
				'id' => 3707, 'country_id' => 216, 'name' => 'King Of Prussia', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 3708, 'country_id' => 216, 'name' => 'King Salmon', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id'         => 3709, 'country_id' => 14, 'name' => 'Kingaroy, Queensland', 'name_ru' => 'Кингарой',
				'gmt_offset' => 10,
			), array(
				'id' => 3710, 'country_id' => 35, 'name' => 'Kingfisher Lake', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 3711, 'country_id' => 216, 'name' => 'Kingman', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id'         => 3712, 'country_id' => 14, 'name' => 'Kings Canyon', 'name_ru' => 'Кингз Каньон',
				'gmt_offset' => 10,
			), array(
				'id'         => 3713, 'country_id' => 14, 'name' => 'Kings Creek Station',
				'name_ru'    => 'Кингз Крик Стэйшн', 'gmt_offset' => -10,
			), array(
				'id' => 3714, 'country_id' => 73, 'name' => 'Kings Lynn', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3715, 'country_id' => 14, 'name' => 'Kingscote', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 3716, 'country_id' => 105, 'name' => 'Kingston', 'name_ru' => 'Кингстоун', 'gmt_offset' => -5,
			), array(
				'id' => 3717, 'country_id' => 216, 'name' => 'Kingsville', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3718, 'country_id' => 45, 'name' => 'Kinmen', 'name_ru' => 'Кинмень', 'gmt_offset' => 8,
			), array(
				'id' => 3719, 'country_id' => 108, 'name' => 'Kinoosao', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 3720, 'country_id' => 216, 'name' => 'Kinston', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 3721, 'country_id' => 216, 'name' => 'Kipnuk', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3722, 'country_id' => 167, 'name' => 'Kira', 'name_ru' => 'Кира', 'gmt_offset' => -10,
			), array(
				'id' => 3723, 'country_id' => 183, 'name' => 'Kirakira', 'name_ru' => 'Киракира', 'gmt_offset' => -11,
			), array(
				'id' => 3724, 'country_id' => 37, 'name' => 'Kiri', 'name_ru' => 'Кири', 'gmt_offset' => 0,
			), array(
				'id' => 3725, 'country_id' => 158, 'name' => 'Kirkenes', 'name_ru' => 'Киркенес', 'gmt_offset' => 1,
			), array(
				'id' => 3726, 'country_id' => 14, 'name' => 'Kirkimbie', 'name_ru' => 'Киркимби', 'gmt_offset' => -10,
			), array(
				'id' => 3727, 'country_id' => 35, 'name' => 'Kirkland Lake', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 3728, 'country_id' => 216, 'name' => 'Kirksville', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3729, 'country_id' => 100, 'name' => 'Kirkuk', 'name_ru' => 'Киркук', 'gmt_offset' => -3,
			), array(
				'id' => 3730, 'country_id' => 180, 'name' => 'Kirov', 'name_ru' => 'Киров', 'gmt_offset' => 4,
			), array(
				'id' => 3731, 'country_id' => 213, 'name' => 'Kirovograd', 'name_ru' => 'Кировоград', 'gmt_offset' => 3,
			), array(
				'id' => 3732, 'country_id' => 180, 'name' => 'Kirovsk', 'name_ru' => 'Кировск', 'gmt_offset' => 4,
			), array(
				'id' => 3733, 'country_id' => 186, 'name' => 'Kiruna', 'name_ru' => 'Кируна', 'gmt_offset' => 1,
			), array(
				'id' => 3734, 'country_id' => 24, 'name' => 'Kirundo', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id'         => 3735, 'country_id' => 97, 'name' => 'Kiryat Shmona', 'name_ru' => 'Кирьят-Шемона',
				'gmt_offset' => 2,
			), array(
				'id' => 3736, 'country_id' => 37, 'name' => 'Kisangani', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 3737, 'country_id' => 167, 'name' => 'Kisengan', 'name_ru' => 'Кисенгам', 'gmt_offset' => -10,
			), array(
				'id'         => 3738, 'country_id' => 101, 'name' => 'Kish Island', 'name_ru' => 'Киш-Айленд',
				'gmt_offset' => 3.5,
			), array(
				'id' => 3739, 'country_id' => 193, 'name' => 'Kismayu', 'name_ru' => 'Кисмайо', 'gmt_offset' => -3,
			), array(
				'id' => 3740, 'country_id' => 82, 'name' => 'Kissidougou', 'name_ru' => 'Киссидугу', 'gmt_offset' => 0,
			), array(
				'id' => 3741, 'country_id' => 216, 'name' => 'Kissimmee', 'name_ru' => 'Киссимми', 'gmt_offset' => -5,
			), array(
				'id' => 3742, 'country_id' => 108, 'name' => 'Kisumu', 'name_ru' => 'Кисуму', 'gmt_offset' => 3,
			), array(
				'id' => 3743, 'country_id' => 107, 'name' => 'Kita Kyushu', 'name_ru' => 'Кита-Кюсю', 'gmt_offset' => 9,
			), array(
				'id' => 3744, 'country_id' => 107, 'name' => 'Kitadaito', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 3745, 'country_id' => 108, 'name' => 'Kitale', 'name_ru' => 'Китале', 'gmt_offset' => 3,
			), array(
				'id' => 3746, 'country_id' => 158, 'name' => 'Kitava', 'name_ru' => 'Китава', 'gmt_offset' => 1,
			), array(
				'id' => 3747, 'country_id' => 35, 'name' => 'Kitchener/Waterloo', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 3748, 'country_id' => 66, 'name' => 'Kitee', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 3749, 'country_id' => 85, 'name' => 'Kithira', 'name_ru' => 'Китира', 'gmt_offset' => 2,
			), array(
				'id' => 3750, 'country_id' => 35, 'name' => 'Kitkatla', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 3751, 'country_id' => 216, 'name' => 'Kitoi Bay', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3752, 'country_id' => 80, 'name' => 'Kitsissuarsuit', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3753, 'country_id' => 66, 'name' => 'Kittila', 'name_ru' => 'Киттила', 'gmt_offset' => 2,
			), array(
				'id' => 3754, 'country_id' => 229, 'name' => 'Kitwe', 'name_ru' => 'Китве', 'gmt_offset' => 2,
			), array(
				'id' => 3755, 'country_id' => 53, 'name' => 'Kitzingen', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 3756, 'country_id' => 108, 'name' => 'Kiunga', 'name_ru' => 'Киунга', 'gmt_offset' => 0,
			), array(
				'id' => 3757, 'country_id' => 216, 'name' => 'Kivalina', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id'         => 3758, 'country_id' => 167, 'name' => 'Kiwai Island', 'name_ru' => 'Киваи-Айленд',
				'gmt_offset' => -10,
			), array(
				'id' => 3759, 'country_id' => 108, 'name' => 'Kiwayu', 'name_ru' => 'Кивайю', 'gmt_offset' => 3,
			), array(
				'id' => 3760, 'country_id' => 216, 'name' => 'Kizhuyak', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3761, 'country_id' => 216, 'name' => 'Klag Bay', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3762, 'country_id' => 13, 'name' => 'Klagenfurt', 'name_ru' => 'Клагенфурт', 'gmt_offset' => -1,
			), array(
				'id' => 3763, 'country_id' => 125, 'name' => 'Klaipeda/Palanga', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id'         => 3764, 'country_id' => 216, 'name' => 'Klamath Falls', 'name_ru' => 'Кламмат Фоллз',
				'gmt_offset' => -8,
			), array(
				'id' => 3765, 'country_id' => 216, 'name' => 'Klawock', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3766, 'country_id' => 228, 'name' => 'Kleinzee', 'name_ru' => 'Кляйнзи', 'gmt_offset' => -2,
			), array(
				'id' => 3767, 'country_id' => 35, 'name' => 'Klemtu', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 3768, 'country_id' => 228, 'name' => 'Klerksdorp', 'name_ru' => 'Клерксдорп', 'gmt_offset' => 2,
			), array(
				'id' => 3769, 'country_id' => 35, 'name' => 'Knee Lake', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 3770, 'country_id' => 35, 'name' => 'Knights Inlet', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3771, 'country_id' => 96, 'name' => 'Knock', 'name_ru' => 'Нок', 'gmt_offset' => 0,
			), array(
				'id' => 3772, 'country_id' => 20, 'name' => 'Knokke/Het Zoute', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 3773, 'country_id' => 216, 'name' => 'Knoxville', 'name_ru' => 'Ноксвилл', 'gmt_offset' => -5,
			), array(
				'id' => 3774, 'country_id' => 107, 'name' => 'Kobe', 'name_ru' => 'Кобе', 'gmt_offset' => 9,
			), array(
				'id' => 3775, 'country_id' => 216, 'name' => 'Kobuk', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3776, 'country_id' => 208, 'name' => 'Kocaeli', 'name_ru' => 'Косаели', 'gmt_offset' => 2,
			), array(
				'id' => 3777, 'country_id' => 99, 'name' => 'Kochi', 'name_ru' => 'Кочи', 'gmt_offset' => 5.5,
			), array(
				'id' => 3778, 'country_id' => 216, 'name' => 'Kodiak', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3779, 'country_id' => 53, 'name' => 'Koethen', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 3780, 'country_id' => 180, 'name' => 'Kogalym', 'name_ru' => 'Когалым', 'gmt_offset' => 6,
			), array(
				'id' => 3781, 'country_id' => 122, 'name' => 'Koggala', 'name_ru' => 'Коггала', 'gmt_offset' => 0,
			), array(
				'id' => 3782, 'country_id' => 110, 'name' => 'Koh Kong', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 3783, 'country_id' => 202, 'name' => 'Koh Samui', 'name_ru' => 'Кох-Самуи', 'gmt_offset' => 7,
			), array(
				'id' => 3784, 'country_id' => 169, 'name' => 'Kohat', 'name_ru' => 'Кохат', 'gmt_offset' => -5,
			), array(
				'id' => 3785, 'country_id' => 167, 'name' => 'Koinambe', 'name_ru' => 'Койнамбе', 'gmt_offset' => -10,
			), array(
				'id' => 3786, 'country_id' => 228, 'name' => 'Koinghaas', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 3787, 'country_id' => 66, 'name' => 'Kokkola/Pietarsaari', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 3788, 'country_id' => 167, 'name' => 'Kokoda', 'name_ru' => 'Кокода', 'gmt_offset' => -10,
			), array(
				'id' => 3789, 'country_id' => 216, 'name' => 'Kokomo', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 3790, 'country_id' => 95, 'name' => 'Kokonao', 'name_ru' => 'Коконао', 'gmt_offset' => 9,
			), array(
				'id' => 3791, 'country_id' => 167, 'name' => 'Kokoro', 'name_ru' => 'Кокоро', 'gmt_offset' => -10,
			), array(
				'id' => 3792, 'country_id' => 118, 'name' => 'Kokshetau', 'name_ru' => 'Кокшетау', 'gmt_offset' => 6,
			), array(
				'id' => 3793, 'country_id' => 167, 'name' => 'Kol', 'name_ru' => 'Кол', 'gmt_offset' => -10,
			), array(
				'id' => 3794, 'country_id' => 192, 'name' => 'Kolda', 'name_ru' => 'Колда', 'gmt_offset' => 0,
			), array(
				'id' => 3795, 'country_id' => 99, 'name' => 'Kolhapur', 'name_ru' => 'Колхапур', 'gmt_offset' => 5.5,
			), array(
				'id' => 3796, 'country_id' => 99, 'name' => 'Kolkata', 'name_ru' => NULL, 'gmt_offset' => 5.5,
			), array(
				'id' => 3797, 'country_id' => 37, 'name' => 'Kolwezi', 'name_ru' => 'Колвези', 'gmt_offset' => 2,
			), array(
				'id' => 3798, 'country_id' => 167, 'name' => 'Komaio', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3799, 'country_id' => 167, 'name' => 'Komako', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3800, 'country_id' => 228, 'name' => 'Komatipoort', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 3801, 'country_id' => 107, 'name' => 'Komatsu', 'name_ru' => 'Коматсу', 'gmt_offset' => 9,
			), array(
				'id'         => 3802, 'country_id' => 167, 'name' => 'Komo-Manda', 'name_ru' => 'Комо-Манда',
				'gmt_offset' => -10,
			), array(
				'id' => 3803, 'country_id' => 167, 'name' => 'Kompiam', 'name_ru' => 'Компиам', 'gmt_offset' => -10,
			), array(
				'id' => 3804, 'country_id' => 110, 'name' => 'Kompong Thom', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 3805, 'country_id' => 110, 'name' => 'Kompong-Chhna', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id'         => 3806, 'country_id' => 180, 'name' => 'Komsomolsk Na Amure',
				'name_ru'    => 'Комсомольск на Амуре', 'gmt_offset' => 11,
			), array(
				'id' => 3807, 'country_id' => 95, 'name' => 'Kon', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 3808, 'country_id' => 216, 'name' => 'Kona', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3809, 'country_id' => 89, 'name' => 'Konawaruk', 'name_ru' => 'Конаварук', 'gmt_offset' => 3,
			), array(
				'id' => 3810, 'country_id' => 167, 'name' => 'Kondubol', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3811, 'country_id' => 152, 'name' => 'Kone', 'name_ru' => 'Коне', 'gmt_offset' => 11,
			), array(
				'id' => 3812, 'country_id' => 167, 'name' => 'Konge', 'name_ru' => 'Конге', 'gmt_offset' => -10,
			), array(
				'id' => 3813, 'country_id' => 216, 'name' => 'Kongiganak', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id'         => 3814, 'country_id' => 72, 'name' => 'Kongoboumba', 'name_ru' => 'Конгобумба',
				'gmt_offset' => -1,
			), array(
				'id' => 3815, 'country_id' => 37, 'name' => 'Kongolo', 'name_ru' => 'Конголо', 'gmt_offset' => 2,
			), array(
				'id' => 3816, 'country_id' => 223, 'name' => 'Kontum', 'name_ru' => 'Контум', 'gmt_offset' => 7,
			), array(
				'id' => 3817, 'country_id' => 208, 'name' => 'Konya', 'name_ru' => 'Конья', 'gmt_offset' => 2,
			), array(
				'id' => 3818, 'country_id' => 14, 'name' => 'Koolatah', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3819, 'country_id' => 14, 'name' => 'Koolburra', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3820, 'country_id' => 14, 'name' => 'Koonibba', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3821, 'country_id' => 102, 'name' => 'Kopasker', 'name_ru' => 'Копаскер', 'gmt_offset' => 0,
			), array(
				'id' => 3822, 'country_id' => 167, 'name' => 'Kopiago', 'name_ru' => 'Копьяго', 'gmt_offset' => 10,
			), array(
				'id' => 3823, 'country_id' => 41, 'name' => 'Korhogo', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3824, 'country_id' => 45, 'name' => 'Korla', 'name_ru' => 'Корла', 'gmt_offset' => -8,
			), array(
				'id' => 3825, 'country_id' => 67, 'name' => 'Koro Island', 'name_ru' => NULL, 'gmt_offset' => 12,
			), array(
				'id' => 3826, 'country_id' => 167, 'name' => 'Koroba', 'name_ru' => 'Короба', 'gmt_offset' => -10,
			), array(
				'id' => 3827, 'country_id' => 67, 'name' => 'Korolevu', 'name_ru' => 'Королеву', 'gmt_offset' => 12,
			), array(
				'id' => 3828, 'country_id' => 174, 'name' => 'Koror', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 3829, 'country_id' => 20, 'name' => 'Kortrijk', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 3830, 'country_id' => 85, 'name' => 'Kos', 'name_ru' => 'Кос', 'gmt_offset' => 2,
			), array(
				'id' => 3831, 'country_id' => 216, 'name' => 'Kosciusko', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3832, 'country_id' => 190, 'name' => 'Kosice', 'name_ru' => 'Косице', 'gmt_offset' => 1,
			), array(
				'id' => 3833, 'country_id' => 167, 'name' => 'Kosipe', 'name_ru' => 'Косипе', 'gmt_offset' => -10,
			), array(
				'id' => 3834, 'country_id' => 69, 'name' => 'Kosrae', 'name_ru' => NULL, 'gmt_offset' => 11,
			), array(
				'id' => 3835, 'country_id' => 118, 'name' => 'Kostanay', 'name_ru' => 'Костанай', 'gmt_offset' => 6,
			), array(
				'id' => 3836, 'country_id' => 185, 'name' => 'Kosti', 'name_ru' => 'Кости', 'gmt_offset' => 3,
			), array(
				'id' => 3837, 'country_id' => 180, 'name' => 'Kostroma', 'name_ru' => 'Кострома', 'gmt_offset' => 4,
			), array(
				'id' => 3838, 'country_id' => 170, 'name' => 'Koszalin', 'name_ru' => 'Кошалин', 'gmt_offset' => -1,
			), array(
				'id' => 3839, 'country_id' => 99, 'name' => 'Kota', 'name_ru' => 'Мота', 'gmt_offset' => -6,
			), array(
				'id' => 3840, 'country_id' => 149, 'name' => 'Kota Bharu', 'name_ru' => 'Кота-Бару', 'gmt_offset' => 8,
			), array(
				'id'         => 3841, 'country_id' => 149, 'name' => 'Kota Kinabalu', 'name_ru' => 'Кота Кинабалу',
				'gmt_offset' => 8,
			), array(
				'id' => 3842, 'country_id' => 37, 'name' => 'Kota Koli', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3843, 'country_id' => 149, 'name' => 'Kota-Kinabalu', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 3844, 'country_id' => 95, 'name' => 'Kotabangun', 'name_ru' => 'Котабангун', 'gmt_offset' => 8,
			), array(
				'id' => 3845, 'country_id' => 95, 'name' => 'Kotabaru', 'name_ru' => 'Котабару', 'gmt_offset' => 7,
			), array(
				'id' => 3846, 'country_id' => 180, 'name' => 'Kotlas', 'name_ru' => 'Котлас', 'gmt_offset' => 4,
			), array(
				'id' => 3847, 'country_id' => 216, 'name' => 'Kotlik', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3848, 'country_id' => 216, 'name' => 'Kotzebue', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3849, 'country_id' => 200, 'name' => 'Kouba', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3850, 'country_id' => 72, 'name' => 'Koulamoutou', 'name_ru' => 'Куламуту', 'gmt_offset' => 1,
			), array(
				'id' => 3851, 'country_id' => 152, 'name' => 'Koumac', 'name_ru' => 'Кумак', 'gmt_offset' => 11,
			), array(
				'id' => 3852, 'country_id' => 38, 'name' => 'Koumala', 'name_ru' => 'Кумала', 'gmt_offset' => 1,
			), array(
				'id' => 3853, 'country_id' => 82, 'name' => 'Koundara', 'name_ru' => 'Кундара', 'gmt_offset' => 0,
			), array(
				'id' => 3854, 'country_id' => 44, 'name' => 'Koutaba', 'name_ru' => 'Кутаба', 'gmt_offset' => -1,
			), array(
				'id' => 3855, 'country_id' => 136, 'name' => 'Koutiala', 'name_ru' => 'Кутиала', 'gmt_offset' => 0,
			), array(
				'id' => 3856, 'country_id' => 14, 'name' => 'Kowanyama', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3857, 'country_id' => 216, 'name' => 'Koyuk', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3858, 'country_id' => 216, 'name' => 'Koyukuk', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3859, 'country_id' => 85, 'name' => 'Kozani', 'name_ru' => 'Козани', 'gmt_offset' => 2,
			), array(
				'id' => 3860, 'country_id' => 99, 'name' => 'Kozhikode', 'name_ru' => NULL, 'gmt_offset' => 5.5,
			), array(
				'id' => 3861, 'country_id' => 202, 'name' => 'Krabi', 'name_ru' => 'Краби', 'gmt_offset' => 7,
			), array(
				'id' => 3862, 'country_id' => 110, 'name' => 'Krakor', 'name_ru' => 'Кракор', 'gmt_offset' => -7,
			), array(
				'id' => 3863, 'country_id' => 170, 'name' => 'Krakow', 'name_ru' => 'Краков', 'gmt_offset' => 1,
			), array(
				'id' => 3864, 'country_id' => 8, 'name' => 'Kralendijk', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 3865, 'country_id' => 213, 'name' => 'Kramatorsk', 'name_ru' => 'Краматорск', 'gmt_offset' => 3,
			), array(
				'id' => 3866, 'country_id' => 186, 'name' => 'Kramfors', 'name_ru' => 'Крамфорс', 'gmt_offset' => 1,
			), array(
				'id' => 3867, 'country_id' => 180, 'name' => 'Krasnodar', 'name_ru' => 'Краснодар', 'gmt_offset' => 4,
			), array(
				'id'         => 3868, 'country_id' => 180, 'name' => 'Krasnojarsk', 'name_ru' => 'Красноярск',
				'gmt_offset' => 8,
			), array(
				'id' => 3869, 'country_id' => 110, 'name' => 'Kratie', 'name_ru' => 'Кратье', 'gmt_offset' => -7,
			), array(
				'id' => 3870, 'country_id' => 213, 'name' => 'Kremenchug', 'name_ru' => 'Кременчуг', 'gmt_offset' => 2,
			), array(
				'id' => 3871, 'country_id' => 44, 'name' => 'Kribi', 'name_ru' => 'Криби', 'gmt_offset' => 1,
			), array(
				'id'         => 3872, 'country_id' => 158, 'name' => 'Kristiansand', 'name_ru' => 'Кристиансенд',
				'gmt_offset' => 1,
			), array(
				'id'         => 3873, 'country_id' => 186, 'name' => 'Kristianstad', 'name_ru' => 'Кристианстад',
				'gmt_offset' => 1,
			), array(
				'id'         => 3874, 'country_id' => 158, 'name' => 'Kristiansund', 'name_ru' => 'Кистиансанд',
				'gmt_offset' => 1,
			), array(
				'id' => 3875, 'country_id' => 186, 'name' => 'Kristinehamn', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 3876, 'country_id' => 213, 'name' => 'Krivoy Rog', 'name_ru' => 'Кривой Рог', 'gmt_offset' => 3,
			), array(
				'id'         => 3877, 'country_id' => 129, 'name' => 'Ksar Es Souk', 'name_ru' => 'Ксар-Эс-Сук',
				'gmt_offset' => 0,
			), array(
				'id'         => 3878, 'country_id' => 149, 'name' => 'Kuala Lumpur', 'name_ru' => 'Куала-Лумпур',
				'gmt_offset' => 8,
			), array(
				'id'         => 3879, 'country_id' => 149, 'name' => 'Kuala Terengganu', 'name_ru' => 'Куала-Теренгану',
				'gmt_offset' => 8,
			), array(
				'id' => 3880, 'country_id' => 149, 'name' => 'Kuantan', 'name_ru' => 'Куантан', 'gmt_offset' => 8,
			), array(
				'id'         => 3881, 'country_id' => 14, 'name' => 'Kubin Island', 'name_ru' => 'Кубин-Айленд',
				'gmt_offset' => -10,
			), array(
				'id' => 3882, 'country_id' => 149, 'name' => 'Kuching', 'name_ru' => 'Кучинг', 'gmt_offset' => 8,
			), array(
				'id' => 3883, 'country_id' => 149, 'name' => 'Kudat', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 3884, 'country_id' => 128, 'name' => 'Kufrah', 'name_ru' => 'Куфра', 'gmt_offset' => 2,
			), array(
				'id' => 3885, 'country_id' => 35, 'name' => 'Kugaaruk', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id'         => 3886, 'country_id' => 35, 'name' => 'Kugluktuk/Coppermine', 'name_ru' => NULL,
				'gmt_offset' => -5,
			), array(
				'id' => 3887, 'country_id' => 167, 'name' => 'Kugururok River', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3888, 'country_id' => 9, 'name' => 'Kuito', 'name_ru' => 'Куито', 'gmt_offset' => 1,
			), array(
				'id' => 3889, 'country_id' => 183, 'name' => 'Kukundu', 'name_ru' => 'Кукунди', 'gmt_offset' => 11,
			), array(
				'id' => 3890, 'country_id' => 14, 'name' => 'Kulgera', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3891, 'country_id' => 216, 'name' => 'Kulik Lake', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3892, 'country_id' => 80, 'name' => 'Kulusuk', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 3893, 'country_id' => 107, 'name' => 'Kumamoto', 'name_ru' => 'Кумамото', 'gmt_offset' => 9,
			), array(
				'id' => 3894, 'country_id' => 78, 'name' => 'Kumasi', 'name_ru' => 'Кумаси', 'gmt_offset' => 0,
			), array(
				'id' => 3895, 'country_id' => 107, 'name' => 'Kumejima', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 3896, 'country_id' => 167, 'name' => 'Kundiawa', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3897, 'country_id' => 3, 'name' => 'Kunduz', 'name_ru' => 'Кундуз', 'gmt_offset' => -5,
			), array(
				'id' => 3898, 'country_id' => 212, 'name' => 'Kungum', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 3899, 'country_id' => 45, 'name' => 'Kunming', 'name_ru' => 'Кунминг', 'gmt_offset' => 8,
			), array(
				'id' => 3900, 'country_id' => 14, 'name' => 'Kununurra', 'name_ru' => 'Кунунурра', 'gmt_offset' => 9,
			), array(
				'id' => 3901, 'country_id' => 66, 'name' => 'Kuopio', 'name_ru' => 'Куопио', 'gmt_offset' => 2,
			), array(
				'id' => 3902, 'country_id' => 66, 'name' => 'Kuorevesi', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 3903, 'country_id' => 95, 'name' => 'Kupang', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 3904, 'country_id' => 216, 'name' => 'Kuparuk', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3905, 'country_id' => 167, 'name' => 'Kupiano', 'name_ru' => 'Купиано', 'gmt_offset' => -10,
			), array(
				'id' => 3906, 'country_id' => 45, 'name' => 'Kuqa', 'name_ru' => 'Куга', 'gmt_offset' => -8,
			), array(
				'id' => 3907, 'country_id' => 203, 'name' => 'Kuran-O-Munjan', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3908, 'country_id' => 60, 'name' => 'Kuressaare', 'name_ru' => 'Курессааре', 'gmt_offset' => 2,
			), array(
				'id' => 3909, 'country_id' => 180, 'name' => 'Kurgan', 'name_ru' => 'Курган', 'gmt_offset' => 6,
			), array(
				'id' => 3910, 'country_id' => 167, 'name' => 'Kuri', 'name_ru' => 'Кури', 'gmt_offset' => -10,
			), array(
				'id' => 3911, 'country_id' => 111, 'name' => 'Kuria', 'name_ru' => 'Куриа', 'gmt_offset' => -12,
			), array(
				'id' => 3912, 'country_id' => 180, 'name' => 'Kursk', 'name_ru' => 'Курск', 'gmt_offset' => 4,
			), array(
				'id' => 3913, 'country_id' => 228, 'name' => 'Kuruman', 'name_ru' => 'Куруман', 'gmt_offset' => -2,
			), array(
				'id' => 3914, 'country_id' => 14, 'name' => 'Kurundi', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 3915, 'country_id' => 89, 'name' => 'Kurupung', 'name_ru' => 'Курупунг', 'gmt_offset' => 3,
			), array(
				'id' => 3916, 'country_id' => 167, 'name' => 'Kurwina', 'name_ru' => 'Курвина', 'gmt_offset' => -10,
			), array(
				'id' => 3917, 'country_id' => 107, 'name' => 'Kushimoto', 'name_ru' => 'Кушимото', 'gmt_offset' => 9,
			), array(
				'id' => 3918, 'country_id' => 107, 'name' => 'Kushiro', 'name_ru' => 'Куширо', 'gmt_offset' => 9,
			), array(
				'id' => 3919, 'country_id' => 75, 'name' => 'Kutaisi', 'name_ru' => 'Кутаиси', 'gmt_offset' => 4,
			), array(
				'id' => 3920, 'country_id' => 35, 'name' => 'Kuujjuaq', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 3921, 'country_id' => 35, 'name' => 'Kuujjuarapik', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 3922, 'country_id' => 66, 'name' => 'Kuusamo', 'name_ru' => 'Кусамо', 'gmt_offset' => 2,
			), array(
				'id' => 3923, 'country_id' => 116, 'name' => 'Kuwait City', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 3924, 'country_id' => 114, 'name' => 'Kuyol', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id'         => 3925, 'country_id' => 183, 'name' => 'Kwai Harbour', 'name_ru' => 'Квай-Харбор',
				'gmt_offset' => -11,
			), array(
				'id' => 3926, 'country_id' => 183, 'name' => 'Kwailabesi', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3927, 'country_id' => 134, 'name' => 'Kwajalein', 'name_ru' => NULL, 'gmt_offset' => 12,
			), array(
				'id' => 3928, 'country_id' => 134, 'name' => 'Kwajalein Atoll', 'name_ru' => NULL, 'gmt_offset' => 12,
			), array(
				'id' => 3929, 'country_id' => 216, 'name' => 'Kwethluk', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3930, 'country_id' => 216, 'name' => 'Kwigillingok', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 3931, 'country_id' => 90, 'name' => 'Kwun Tong', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 3932, 'country_id' => 137, 'name' => 'Kyaukpyu', 'name_ru' => 'Кьяукпью', 'gmt_offset' => -7,
			), array(
				'id' => 3933, 'country_id' => 137, 'name' => 'Kyauktaw', 'name_ru' => 'Кьяуктау', 'gmt_offset' => -7,
			), array(
				'id' => 3934, 'country_id' => 107, 'name' => 'Kyoto', 'name_ru' => 'Киото', 'gmt_offset' => 9,
			), array(
				'id' => 3935, 'country_id' => 180, 'name' => 'Kyzyl', 'name_ru' => 'Кызыл', 'gmt_offset' => 8,
			), array(
				'id' => 3936, 'country_id' => 118, 'name' => 'Kzyl-Orda', 'name_ru' => 'Кзыл-Орда', 'gmt_offset' => 6,
			), array(
				'id' => 3937, 'country_id' => 91, 'name' => 'La Ceiba', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3938, 'country_id' => 46, 'name' => 'La Chorrera', 'name_ru' => 'Ла-Хоррера', 'gmt_offset' => 5,
			), array(
				'id' => 3939, 'country_id' => 48, 'name' => 'La Coloma', 'name_ru' => 'Ла-Колома', 'gmt_offset' => -5,
			), array(
				'id' => 3940, 'country_id' => 64, 'name' => 'La Coruna', 'name_ru' => 'Ла Коруна', 'gmt_offset' => 1,
			), array(
				'id' => 3941, 'country_id' => 216, 'name' => 'La Crosse', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 3942, 'country_id' => 11, 'name' => 'La Cumbre', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id'         => 3943, 'country_id' => 83, 'name' => 'La Desirade', 'name_ru' => 'Ла-Дезираде',
				'gmt_offset' => -4,
			), array(
				'id' => 3944, 'country_id' => 91, 'name' => 'La Esperanza', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3945, 'country_id' => 220, 'name' => 'La Fria', 'name_ru' => 'Ла-Фриа', 'gmt_offset' => -4,
			), array(
				'id' => 3946, 'country_id' => 216, 'name' => 'La Grande', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3947, 'country_id' => 216, 'name' => 'La Grange', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 3948, 'country_id' => 220, 'name' => 'La Guaira', 'name_ru' => 'Ла-Гуайра', 'gmt_offset' => -4,
			), array(
				'id' => 3949, 'country_id' => 164, 'name' => 'La Palma', 'name_ru' => 'Ля Пальма', 'gmt_offset' => 5,
			), array(
				'id'         => 3950, 'country_id' => 64, 'name' => 'La Palma Del Condado', 'name_ru' => NULL,
				'gmt_offset' => 1,
			), array(
				'id' => 3951, 'country_id' => 148, 'name' => 'La Paz', 'name_ru' => 'Ла Пас', 'gmt_offset' => -7,
			), array(
				'id' => 3952, 'country_id' => 46, 'name' => 'La Pedrera', 'name_ru' => 'Ла-Педрера', 'gmt_offset' => 5,
			), array(
				'id' => 3953, 'country_id' => 71, 'name' => 'La Plagne', 'name_ru' => 'Ла-Планье', 'gmt_offset' => 1,
			), array(
				'id' => 3954, 'country_id' => 11, 'name' => 'La Plata', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id'         => 3955, 'country_id' => 46, 'name' => 'La Primavera', 'name_ru' => 'Ла-Примавера',
				'gmt_offset' => -5,
			), array(
				'id' => 3956, 'country_id' => 11, 'name' => 'La Rioja', 'name_ru' => 'Ла-Риоха', 'gmt_offset' => -3,
			), array(
				'id' => 3957, 'country_id' => 71, 'name' => 'La Roche', 'name_ru' => 'Ла-Рош', 'gmt_offset' => -1,
			), array(
				'id' => 3958, 'country_id' => 71, 'name' => 'La Rochelle', 'name_ru' => 'Ла Рошель', 'gmt_offset' => 1,
			), array(
				'id' => 3959, 'country_id' => 57, 'name' => 'La Romana', 'name_ru' => 'Ла-Романа', 'gmt_offset' => -4,
			), array(
				'id' => 3960, 'country_id' => 35, 'name' => 'La Ronge', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 3961, 'country_id' => 35, 'name' => 'La Sarre', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 3962, 'country_id' => 43, 'name' => 'La Serena', 'name_ru' => 'Ла Серена', 'gmt_offset' => 4,
			), array(
				'id' => 3963, 'country_id' => 35, 'name' => 'La Tabatiere', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 3964, 'country_id' => 35, 'name' => 'La Tuque', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 3965, 'country_id' => 91, 'name' => 'La Union', 'name_ru' => 'Ла-Унион', 'gmt_offset' => -6,
			), array(
				'id' => 3966, 'country_id' => 46, 'name' => 'La Uribe', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 3967, 'country_id' => 216, 'name' => 'La Verne', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 3968, 'country_id' => 53, 'name' => 'Laarbruch', 'name_ru' => 'Лаарбух', 'gmt_offset' => 1,
			), array(
				'id' => 3969, 'country_id' => 62, 'name' => 'Laayoune', 'name_ru' => 'Лаайюн', 'gmt_offset' => 0,
			), array(
				'id' => 3970, 'country_id' => 67, 'name' => 'Labasa', 'name_ru' => 'Лабаса', 'gmt_offset' => 12,
			), array(
				'id' => 3971, 'country_id' => 82, 'name' => 'Labe', 'name_ru' => 'Лабе', 'gmt_offset' => 0,
			), array(
				'id' => 3972, 'country_id' => 167, 'name' => 'Lablab', 'name_ru' => 'Лаблаб', 'gmt_offset' => -10,
			), array(
				'id' => 3973, 'country_id' => 216, 'name' => 'Labouchere Bay', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 3974, 'country_id' => 29, 'name' => 'Labrea', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 3975, 'country_id' => 149, 'name' => 'Labuan', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id'         => 3976, 'country_id' => 95, 'name' => 'Labuan Bajo', 'name_ru' => 'Лабуан-Баджо',
				'gmt_offset' => -8,
			), array(
				'id' => 3977, 'country_id' => 95, 'name' => 'Labuha', 'name_ru' => 'Лабуха', 'gmt_offset' => -9,
			), array(
				'id' => 3978, 'country_id' => 35, 'name' => 'Lac Biche', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 3979, 'country_id' => 35, 'name' => 'Lac Brochet', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 3980, 'country_id' => 216, 'name' => 'Laconia', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 3981, 'country_id' => 194, 'name' => 'Ladouanie', 'name_ru' => 'Ладуанье', 'gmt_offset' => 3,
			), array(
				'id'         => 3982, 'country_id' => 14, 'name' => 'Lady Elliot Island', 'name_ru' => NULL,
				'gmt_offset' => -10,
			), array(
				'id' => 3983, 'country_id' => 228, 'name' => 'Ladysmith', 'name_ru' => 'Ледисмит', 'gmt_offset' => 2,
			), array(
				'id' => 3984, 'country_id' => 167, 'name' => 'Lae', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id'         => 3985, 'country_id' => 134, 'name' => 'Lae Island', 'name_ru' => 'Лей-Айленд',
				'gmt_offset' => -12,
			), array(
				'id' => 3986, 'country_id' => 55, 'name' => 'Laeso Island', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 3987, 'country_id' => 216, 'name' => 'Lafayette', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 3988, 'country_id' => 35, 'name' => 'LaForges', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 3989, 'country_id' => 29, 'name' => 'Lages', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 3990, 'country_id' => 59, 'name' => 'Lago Agrio', 'name_ru' => 'Лаго-Агрио', 'gmt_offset' => -5,
			), array(
				'id' => 3991, 'country_id' => 11, 'name' => 'Lago Argentino', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 3992, 'country_id' => 155, 'name' => 'Lagos', 'name_ru' => 'Лагос', 'gmt_offset' => 1,
			), array(
				'id'         => 3993, 'country_id' => 148, 'name' => 'Lagos De Moreno', 'name_ru' => 'Лагос-де-Морено',
				'gmt_offset' => 0,
			), array(
				'id' => 3994, 'country_id' => 35, 'name' => 'Lagrande 3', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 3995, 'country_id' => 35, 'name' => 'Lagrande 4', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 3996, 'country_id' => 39, 'name' => 'Lague', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id'         => 3997, 'country_id' => 220, 'name' => 'Lagunillas', 'name_ru' => 'Лагуниллас',
				'gmt_offset' => -4,
			), array(
				'id' => 3998, 'country_id' => 149, 'name' => 'Lahad Datu', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 3999, 'country_id' => 216, 'name' => 'Lahaina, HI', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 4000, 'country_id' => 169, 'name' => 'Lahore', 'name_ru' => 'Лахор', 'gmt_offset' => 5,
			),
				array(
					'id' => 4001, 'country_id' => 53, 'name' => 'Lahr', 'name_ru' => 'Лар', 'gmt_offset' => 1,
				), 1 => array(
				'id' => 4002, 'country_id' => 200, 'name' => 'Lai', 'name_ru' => 'Лей', 'gmt_offset' => -1,
			), array(
				'id' => 4003, 'country_id' => 167, 'name' => 'Laiagam', 'name_ru' => 'Лаягам', 'gmt_offset' => -10,
			), array(
				'id'         => 4004, 'country_id' => 108, 'name' => 'Lake Baringo', 'name_ru' => 'Лейк-Баринго',
				'gmt_offset' => -3,
			), array(
				'id' => 4005, 'country_id' => 216, 'name' => 'Lake Charles', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4006, 'country_id' => 14, 'name' => 'Lake Evella', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 4007, 'country_id' => 216, 'name' => 'Lake Geneva', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4008, 'country_id' => 14, 'name' => 'Lake Gregory', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4009, 'country_id' => 216, 'name' => 'Lake Havasu City', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 4010, 'country_id' => 216, 'name' => 'Lake Jackson', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id'         => 4011, 'country_id' => 212, 'name' => 'Lake Manyara', 'name_ru' => 'Лейк-Маньяра',
				'gmt_offset' => 3,
			), array(
				'id' => 4012, 'country_id' => 216, 'name' => 'Lake Minchumina', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id'         => 4013, 'country_id' => 167, 'name' => 'Lake Murray', 'name_ru' => 'Лейк-Мюррей',
				'gmt_offset' => -10,
			), array(
				'id' => 4014, 'country_id' => 14, 'name' => 'Lake Nash', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id'         => 4015, 'country_id' => 216, 'name' => 'Lake Placid', 'name_ru' => 'Лейк Плесид',
				'gmt_offset' => -5,
			), array(
				'id'         => 4016, 'country_id' => 108, 'name' => 'Lake Rudolf', 'name_ru' => 'Лейк-Рудольф',
				'gmt_offset' => 3,
			), array(
				'id' => 4017, 'country_id' => 67, 'name' => 'Lakeba', 'name_ru' => 'Лакеба', 'gmt_offset' => 12,
			), array(
				'id' => 4018, 'country_id' => 14, 'name' => 'Lakefield', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 4019, 'country_id' => 216, 'name' => 'Lakehurst', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4020, 'country_id' => 216, 'name' => 'Lakeland', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id'         => 4021, 'country_id' => 14, 'name' => 'Lakeland Downs', 'name_ru' => 'Лейклэнд-Даунз',
				'gmt_offset' => -10,
			), array(
				'id' => 4022, 'country_id' => 216, 'name' => 'Lakeside', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4023, 'country_id' => 216, 'name' => 'Lakeview', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 4024, 'country_id' => 41, 'name' => 'Lakota', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4025, 'country_id' => 158, 'name' => 'Lakselv', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 4026, 'country_id' => 65, 'name' => 'Lalibela', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id'         => 4027, 'country_id' => 226, 'name' => 'Lalomalava', 'name_ru' => 'Лаломалава',
				'gmt_offset' => -11,
			), array(
				'id' => 4028, 'country_id' => 46, 'name' => 'Lamacarena', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 4029, 'country_id' => 224, 'name' => 'Lamap', 'name_ru' => 'Ламап', 'gmt_offset' => 11,
			), array(
				'id' => 4030, 'country_id' => 216, 'name' => 'Lamar', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 4031, 'country_id' => 167, 'name' => 'Lamassa', 'name_ru' => 'Ламасса', 'gmt_offset' => -10,
			), array(
				'id' => 4032, 'country_id' => 72, 'name' => 'Lambarene', 'name_ru' => 'Ламбарене', 'gmt_offset' => 1,
			), array(
				'id' => 4033, 'country_id' => 224, 'name' => 'Lamen Bay', 'name_ru' => 'Ламен-Бей', 'gmt_offset' => 11,
			), array(
				'id' => 4034, 'country_id' => 101, 'name' => 'Lamerd', 'name_ru' => NULL, 'gmt_offset' => 3.5,
			), array(
				'id' => 4035, 'country_id' => 103, 'name' => 'Lamezia-terme', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id'         => 4036, 'country_id' => 159, 'name' => 'Lamidanda', 'name_ru' => 'Ламиданда',
				'gmt_offset' => -5.7999999999999998,
			), array(
				'id' => 4037, 'country_id' => 202, 'name' => 'Lampang', 'name_ru' => 'Лампанг', 'gmt_offset' => 7,
			), array(
				'id' => 4038, 'country_id' => 103, 'name' => 'Lampedusa', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 4039, 'country_id' => 108, 'name' => 'Lamu', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 4040, 'country_id' => 216, 'name' => 'Lanai City', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 4041, 'country_id' => 216, 'name' => 'Lancaster', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4042, 'country_id' => 216, 'name' => 'Lander', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 4043, 'country_id' => 71, 'name' => 'Landivisiau', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4044, 'country_id' => 73, 'name' => 'Lands End', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4045, 'country_id' => 186, 'name' => 'Landskrona', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 4046, 'country_id' => 35, 'name' => 'Langara', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 4047, 'country_id' => 53, 'name' => 'Langeoog', 'name_ru' => 'Лангеоог', 'gmt_offset' => -1,
			), array(
				'id' => 4048, 'country_id' => 95, 'name' => 'Langgur', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 4049, 'country_id' => 167, 'name' => 'Langimar', 'name_ru' => 'Лангимар', 'gmt_offset' => -10,
			), array(
				'id' => 4050, 'country_id' => 149, 'name' => 'Langkawi', 'name_ru' => 'Лангкави', 'gmt_offset' => 8,
			), array(
				'id' => 4051, 'country_id' => 35, 'name' => 'Langley', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id'         => 4052, 'country_id' => 159, 'name' => 'Langtang', 'name_ru' => 'Лангтанг',
				'gmt_offset' => 5.7000000000000002,
			), array(
				'id' => 4053, 'country_id' => 71, 'name' => 'Lannion', 'name_ru' => 'Ланнион', 'gmt_offset' => -1,
			), array(
				'id' => 4054, 'country_id' => 14, 'name' => 'Lansdowne', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4055, 'country_id' => 35, 'name' => 'Lansdowne House', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 4056, 'country_id' => 228, 'name' => 'Lanseria', 'name_ru' => 'Лансерия', 'gmt_offset' => -2,
			), array(
				'id' => 4057, 'country_id' => 216, 'name' => 'Lansing', 'name_ru' => 'Лансинг', 'gmt_offset' => 5,
			), array(
				'id' => 4058, 'country_id' => 45, 'name' => 'Lanzhou', 'name_ru' => 'Ланчжоу', 'gmt_offset' => -8,
			), array(
				'id' => 4059, 'country_id' => 168, 'name' => 'Laoag', 'name_ru' => 'Лаоак', 'gmt_offset' => -8,
			), array(
				'id' => 4060, 'country_id' => 216, 'name' => 'Laporte', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id'         => 4061, 'country_id' => 66, 'name' => 'Lappeenranta', 'name_ru' => 'Лаппенранта',
				'gmt_offset' => -2,
			), array(
				'id' => 4062, 'country_id' => 101, 'name' => 'Lar', 'name_ru' => NULL, 'gmt_offset' => 3.5,
			), array(
				'id' => 4063, 'country_id' => 216, 'name' => 'Laramie', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 4064, 'country_id' => 95, 'name' => 'Larantuka', 'name_ru' => 'Ларантука', 'gmt_offset' => -8,
			), array(
				'id' => 4065, 'country_id' => 216, 'name' => 'Laredo', 'name_ru' => 'Ларедо', 'gmt_offset' => 6,
			), array(
				'id' => 4066, 'country_id' => 85, 'name' => 'Larisa', 'name_ru' => 'Лариса', 'gmt_offset' => -2,
			), array(
				'id' => 4067, 'country_id' => 51, 'name' => 'Larnaca', 'name_ru' => 'Ларнака', 'gmt_offset' => 2,
			), array(
				'id' => 4068, 'country_id' => 216, 'name' => 'Larsen Bay', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 4069, 'country_id' => 47, 'name' => 'Las Canas', 'name_ru' => 'Лас-Канас', 'gmt_offset' => 6,
			), array(
				'id' => 4070, 'country_id' => 216, 'name' => 'Las Cruces, NM', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id'         => 4071, 'country_id' => 46, 'name' => 'Las Gaviotas', 'name_ru' => 'Лас-Гавиотас',
				'gmt_offset' => 5,
			), array(
				'id' => 4072, 'country_id' => 11, 'name' => 'Las Heras', 'name_ru' => 'Лас-Херас', 'gmt_offset' => 3,
			), array(
				'id' => 4073, 'country_id' => 65, 'name' => 'Las Khoreh', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4074, 'country_id' => 91, 'name' => 'Las Limas', 'name_ru' => 'Лас-Лимас', 'gmt_offset' => 6,
			), array(
				'id'         => 4075, 'country_id' => 11, 'name' => 'Las Lomitas', 'name_ru' => 'Лас-Ломитас',
				'gmt_offset' => 3,
			), array(
				'id' => 4076, 'country_id' => 64, 'name' => 'Las Palmas', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 4077, 'country_id' => 220, 'name' => 'Las Piedras', 'name_ru' => 'Лас-Пьедрас',
				'gmt_offset' => 4,
			), array(
				'id' => 4078, 'country_id' => 48, 'name' => 'Las Tunas', 'name_ru' => 'Лас-Тунас', 'gmt_offset' => 5,
			), array(
				'id' => 4079, 'country_id' => 216, 'name' => 'Las Vegas', 'name_ru' => 'Лас Вегас', 'gmt_offset' => 7,
			), array(
				'id' => 4080, 'country_id' => 216, 'name' => 'Las Vegas, NV', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4081, 'country_id' => 137, 'name' => 'Lashio', 'name_ru' => 'Лашио', 'gmt_offset' => -6.5,
			), array(
				'id'         => 4082, 'country_id' => 72, 'name' => 'Lastourville', 'name_ru' => 'Ластурвилль',
				'gmt_offset' => -1,
			), array(
				'id' => 4083, 'country_id' => 59, 'name' => 'Latacunga', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4084, 'country_id' => 197, 'name' => 'Latakia', 'name_ru' => 'Латакия', 'gmt_offset' => -2,
			), array(
				'id' => 4085, 'country_id' => 216, 'name' => 'Lathrop', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4086, 'country_id' => 216, 'name' => 'Lathrop Wells', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 4087, 'country_id' => 216, 'name' => 'Latrobe', 'name_ru' => 'Латроуб', 'gmt_offset' => 5,
			), array(
				'id' => 4088, 'country_id' => 67, 'name' => 'Laucala Is', 'name_ru' => NULL, 'gmt_offset' => -12,
			), array(
				'id' => 4089, 'country_id' => 14, 'name' => 'Launceston', 'name_ru' => 'Лончестон', 'gmt_offset' => 11,
			), array(
				'id' => 4090, 'country_id' => 14, 'name' => 'Laura', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 4091, 'country_id' => 14, 'name' => 'Laura Station', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 4092, 'country_id' => 216, 'name' => 'Laurel, MS', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4093, 'country_id' => 35, 'name' => 'Laurie River', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 4094, 'country_id' => 13, 'name' => 'Lauterach', 'name_ru' => 'Лаутерах', 'gmt_offset' => 1,
			), array(
				'id' => 4095, 'country_id' => 71, 'name' => 'Laval', 'name_ru' => 'Лаваль', 'gmt_offset' => -1,
			), array(
				'id' => 4096, 'country_id' => 101, 'name' => 'Lavan', 'name_ru' => NULL, 'gmt_offset' => -3.5,
			), array(
				'id' => 4097, 'country_id' => 14, 'name' => 'Laverton', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4098, 'country_id' => 149, 'name' => 'Lawas', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4099, 'country_id' => 14, 'name' => 'Lawn Hill', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 4100, 'country_id' => 216, 'name' => 'Lawrence', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 4101, 'country_id' => 216, 'name' => 'Lawrenceville', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4102, 'country_id' => 216, 'name' => 'Lawton', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id'         => 4103, 'country_id' => 148, 'name' => 'Lazaro Cardenas', 'name_ru' => 'Лацаро-Карденас',
				'gmt_offset' => -6,
			), array(
				'id'         => 4104, 'country_id' => 71, 'name' => 'Le Castellet', 'name_ru' => 'Ле-Кастейе',
				'gmt_offset' => -1,
			), array(
				'id' => 4105, 'country_id' => 71, 'name' => 'Le Havre', 'name_ru' => 'Ле Хавре', 'gmt_offset' => 1,
			), array(
				'id' => 4106, 'country_id' => 71, 'name' => 'Le Mans', 'name_ru' => 'Ле Манс', 'gmt_offset' => 1,
			), array(
				'id' => 4107, 'country_id' => 71, 'name' => 'Le Puy', 'name_ru' => 'Ле-Пуй', 'gmt_offset' => 1,
			), array(
				'id' => 4108, 'country_id' => 71, 'name' => 'Le Touquet', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 4109, 'country_id' => 216, 'name' => 'Leadville', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 4110, 'country_id' => 35, 'name' => 'Leaf Bay', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 4111, 'country_id' => 35, 'name' => 'Leaf Rapids', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 4112, 'country_id' => 14, 'name' => 'Learmonth', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 4113, 'country_id' => 124, 'name' => 'Lebakeng', 'name_ru' => 'Лебакенг', 'gmt_offset' => -2,
			), array(
				'id' => 4114, 'country_id' => 35, 'name' => 'Lebel-Sur-Quevillon', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 4115, 'country_id' => 103, 'name' => 'Lecce', 'name_ru' => 'Лечче', 'gmt_offset' => 1,
			), array(
				'id' => 4116, 'country_id' => 72, 'name' => 'Leconi', 'name_ru' => 'Лекони', 'gmt_offset' => -1,
			), array(
				'id' => 4117, 'country_id' => 73, 'name' => 'Leeds', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4118, 'country_id' => 216, 'name' => 'Leesburg', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4119, 'country_id' => 157, 'name' => 'Leeuwarden', 'name_ru' => 'Лиуварден', 'gmt_offset' => 1,
			), array(
				'id' => 4120, 'country_id' => 51, 'name' => 'Lefkosa', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 4121, 'country_id' => 168, 'name' => 'Legazpi', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 4122, 'country_id' => 46, 'name' => 'Leguizamo', 'name_ru' => 'Легизамо', 'gmt_offset' => 5,
			), array(
				'id' => 4123, 'country_id' => 99, 'name' => 'Leh', 'name_ru' => 'Лех', 'gmt_offset' => 5.5,
			), array(
				'id' => 4124, 'country_id' => 167, 'name' => 'Lehu', 'name_ru' => 'Леху', 'gmt_offset' => -10,
			), array(
				'id' => 4125, 'country_id' => 157, 'name' => 'Leiden', 'name_ru' => 'Лейден', 'gmt_offset' => 1,
			), array(
				'id' => 4126, 'country_id' => 14, 'name' => 'Leigh Creek', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 4127, 'country_id' => 14, 'name' => 'Leinster', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4128, 'country_id' => 53, 'name' => 'Leipzig-halle', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 4129, 'country_id' => 167, 'name' => 'Leitre', 'name_ru' => 'Лейтре', 'gmt_offset' => -10,
			), array(
				'id' => 4130, 'country_id' => 39, 'name' => 'Lekana', 'name_ru' => 'Лекана', 'gmt_offset' => 1,
			), array(
				'id' => 4131, 'country_id' => 158, 'name' => 'Leknes', 'name_ru' => 'Лекнес', 'gmt_offset' => 1,
			), array(
				'id' => 4132, 'country_id' => 157, 'name' => 'Lelystad', 'name_ru' => 'Лелистад', 'gmt_offset' => 1,
			), array(
				'id' => 4133, 'country_id' => 216, 'name' => 'Lemars', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4134, 'country_id' => 216, 'name' => 'Lemmon', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 4135, 'country_id' => 216, 'name' => 'Lemoore, CA', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4136, 'country_id' => 53, 'name' => 'Lemwerder', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 4137, 'country_id' => 29, 'name' => 'Lencois', 'name_ru' => 'Ленкуа', 'gmt_offset' => 0,
			), array(
				'id' => 4138, 'country_id' => 167, 'name' => 'Lengbati', 'name_ru' => 'Ленгбати', 'gmt_offset' => -10,
			), array(
				'id' => 4139, 'country_id' => 21, 'name' => 'Leo', 'name_ru' => 'Лео', 'gmt_offset' => 0,
			), array(
				'id' => 4140, 'country_id' => 64, 'name' => 'Leon', 'name_ru' => 'Леон', 'gmt_offset' => 1,
			), array(
				'id' => 4141, 'country_id' => 216, 'name' => 'Leonardtown', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 4142, 'country_id' => 14, 'name' => 'Leonora', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4143, 'country_id' => 29, 'name' => 'Leopoldina', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 4144, 'country_id' => 95, 'name' => 'Lereh', 'name_ru' => 'Лерех', 'gmt_offset' => -9,
			), array(
				'id' => 4145, 'country_id' => 124, 'name' => 'Leribe', 'name_ru' => 'Лерибе', 'gmt_offset' => 2,
			), array(
				'id' => 4146, 'country_id' => 167, 'name' => 'Leron Plains', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4147, 'country_id' => 85, 'name' => 'Leros', 'name_ru' => 'Лерос', 'gmt_offset' => 2,
			), array(
				'id' => 4148, 'country_id' => 93, 'name' => 'Les Cayes', 'name_ru' => 'Лес-Кейес', 'gmt_offset' => 5,
			), array(
				'id' => 4149, 'country_id' => 71, 'name' => 'Les Sables', 'name_ru' => 'Лес-Саблес', 'gmt_offset' => 1,
			), array(
				'id' => 4150, 'country_id' => 167, 'name' => 'Lese', 'name_ru' => 'Лесе', 'gmt_offset' => -10,
			), array(
				'id'         => 4151, 'country_id' => 180, 'name' => 'Leshukonskoye', 'name_ru' => 'Лешуконское',
				'gmt_offset' => 0,
			), array(
				'id' => 4152, 'country_id' => 124, 'name' => 'Lesobeng', 'name_ru' => 'Лесобенг', 'gmt_offset' => 2,
			), array(
				'id' => 4153, 'country_id' => 35, 'name' => 'Lethbridge', 'name_ru' => 'Летбридж', 'gmt_offset' => -7,
			), array(
				'id' => 4154, 'country_id' => 89, 'name' => 'Lethem', 'name_ru' => 'Летем', 'gmt_offset' => 3,
			), array(
				'id' => 4155, 'country_id' => 46, 'name' => 'Leticia', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id'         => 4156, 'country_id' => 96, 'name' => 'Letterkenny', 'name_ru' => 'Леттеркенни',
				'gmt_offset' => 0,
			), array(
				'id' => 4157, 'country_id' => 216, 'name' => 'Levelock', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 4158, 'country_id' => 216, 'name' => 'Lewisburg', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4159, 'country_id' => 216, 'name' => 'Lewiston', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4160, 'country_id' => 216, 'name' => 'Lewistown', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 4161, 'country_id' => 95, 'name' => 'Lewoleba', 'name_ru' => 'Леволеба', 'gmt_offset' => 8,
			), array(
				'id' => 4162, 'country_id' => 216, 'name' => 'Lexington', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4163, 'country_id' => 148, 'name' => 'Leуn', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4164, 'country_id' => 95, 'name' => 'Lhok Sukon', 'name_ru' => 'Лхок-Сукон', 'gmt_offset' => 7,
			), array(
				'id' => 4165, 'country_id' => 95, 'name' => 'Lhoksumawe', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 4166, 'country_id' => 45, 'name' => 'Liangping', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4167, 'country_id' => 45, 'name' => 'Lianhuashan', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 4168, 'country_id' => 45, 'name' => 'Lianyungang', 'name_ru' => 'Лианьюнан', 'gmt_offset' => -8,
			), array(
				'id' => 4169, 'country_id' => 37, 'name' => 'Libenge', 'name_ru' => 'Либенж', 'gmt_offset' => 0,
			), array(
				'id' => 4170, 'country_id' => 216, 'name' => 'Liberal', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4171, 'country_id' => 47, 'name' => 'Liberia', 'name_ru' => 'Либерия', 'gmt_offset' => -6,
			), array(
				'id' => 4172, 'country_id' => 108, 'name' => 'Liboi', 'name_ru' => 'Либой', 'gmt_offset' => -3,
			), array(
				'id' => 4173, 'country_id' => 72, 'name' => 'Libreville', 'name_ru' => 'Либревилль', 'gmt_offset' => 1,
			), array(
				'id' => 4174, 'country_id' => 150, 'name' => 'Lichinga', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 4175, 'country_id' => 186, 'name' => 'Lidkoping', 'name_ru' => 'Лидкопинг', 'gmt_offset' => 1,
			), array(
				'id' => 4176, 'country_id' => 20, 'name' => 'Liege', 'name_ru' => 'Льеж', 'gmt_offset' => 1,
			), array(
				'id' => 4177, 'country_id' => 127, 'name' => 'Liepaya', 'name_ru' => 'Лиепая', 'gmt_offset' => 2,
			), array(
				'id' => 4178, 'country_id' => 152, 'name' => 'Lifou', 'name_ru' => NULL, 'gmt_offset' => 11,
			), array(
				'id' => 4179, 'country_id' => 14, 'name' => 'Lightning Ridge', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 4180, 'country_id' => 167, 'name' => 'Lihir Island', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 4181, 'country_id' => 45, 'name' => 'Lijiang City', 'name_ru' => 'город Лицзян',
				'gmt_offset' => 8,
			), array(
				'id' => 4182, 'country_id' => 134, 'name' => 'Likiep Island', 'name_ru' => NULL, 'gmt_offset' => -12,
			), array(
				'id'         => 4183, 'country_id' => 44, 'name' => 'Likoma Island', 'name_ru' => 'Ликома-Айленд',
				'gmt_offset' => 0,
			), array(
				'id' => 4184, 'country_id' => 99, 'name' => 'Lilabari', 'name_ru' => 'Лилабари', 'gmt_offset' => 5.5,
			), array(
				'id' => 4185, 'country_id' => 71, 'name' => 'Lille', 'name_ru' => 'Лилль', 'gmt_offset' => 1,
			), array(
				'id' => 4186, 'country_id' => 147, 'name' => 'Lilongwe', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 4187, 'country_id' => 216, 'name' => 'Lima', 'name_ru' => 'Лима', 'gmt_offset' => -5,
			), array(
				'id' => 4188, 'country_id' => 149, 'name' => 'Limbang', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 4189, 'country_id' => 44, 'name' => 'Limbe', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 4190, 'country_id' => 14, 'name' => 'Limbunya', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id'         => 4191, 'country_id' => 228, 'name' => 'Lime Acres', 'name_ru' => 'Лайм-Акрес',
				'gmt_offset' => -2,
			), array(
				'id' => 4192, 'country_id' => 216, 'name' => 'Lime Village', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 4193, 'country_id' => 216, 'name' => 'Limestone', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4194, 'country_id' => 85, 'name' => 'Limnos', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 4195, 'country_id' => 71, 'name' => 'Limoges', 'name_ru' => 'Лимож', 'gmt_offset' => 1,
			), array(
				'id' => 4196, 'country_id' => 216, 'name' => 'Limon', 'name_ru' => 'Лимон', 'gmt_offset' => -7,
			), array(
				'id' => 4197, 'country_id' => 45, 'name' => 'Lincang', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4198, 'country_id' => 28, 'name' => 'Lincoln Rock, AK', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 4199, 'country_id' => 216, 'name' => 'Lincoln, NE', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id'         => 4200, 'country_id' => 14, 'name' => 'Linda Downs', 'name_ru' => 'Линда-Даунз',
				'gmt_offset' => -10,
			), array(
				'id' => 4201, 'country_id' => 14, 'name' => 'Lindeman Island', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 4202, 'country_id' => 216, 'name' => 'Linden', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4203, 'country_id' => 212, 'name' => 'Lindi', 'name_ru' => 'Линди', 'gmt_offset' => 3,
			), array(
				'id'         => 4204, 'country_id' => 167, 'name' => 'Linga Linga', 'name_ru' => 'Линга-Линга',
				'gmt_offset' => -10,
			), array(
				'id' => 4205, 'country_id' => 45, 'name' => 'LingLing', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4206, 'country_id' => 186, 'name' => 'Linkoping', 'name_ru' => 'Линкопинг', 'gmt_offset' => 1,
			), array(
				'id' => 4207, 'country_id' => 103, 'name' => 'Linosa', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4208, 'country_id' => 29, 'name' => 'Lins', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 4209, 'country_id' => 45, 'name' => 'Linxi', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4210, 'country_id' => 45, 'name' => 'Linyi', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4211, 'country_id' => 13, 'name' => 'Linz', 'name_ru' => 'Линц', 'gmt_offset' => -1,
			), array(
				'id' => 4212, 'country_id' => 103, 'name' => 'Lipari', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 4213, 'country_id' => 180, 'name' => 'Lipetsk', 'name_ru' => 'Липецк', 'gmt_offset' => 4,
			), array(
				'id' => 4214, 'country_id' => 45, 'name' => 'Liping City', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4215, 'country_id' => 37, 'name' => 'Lisala', 'name_ru' => 'Лисала', 'gmt_offset' => 0,
			), array(
				'id' => 4216, 'country_id' => 173, 'name' => 'Lisbon', 'name_ru' => 'Лиссабон', 'gmt_offset' => 0,
			), array(
				'id' => 4217, 'country_id' => 211, 'name' => 'Lishan', 'name_ru' => 'Лишань', 'gmt_offset' => 8,
			), array(
				'id' => 4218, 'country_id' => 14, 'name' => 'Lismore', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 4219, 'country_id' => 14, 'name' => 'Lissadell', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4220, 'country_id' => 117, 'name' => 'Little Cayman', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4221, 'country_id' => 35, 'name' => 'Little Grand Rapids', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 4222, 'country_id' => 216, 'name' => 'Little Naukati', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id'         => 4223, 'country_id' => 216, 'name' => 'Little Port Walter', 'name_ru' => NULL,
				'gmt_offset' => -9,
			), array(
				'id' => 4224, 'country_id' => 216, 'name' => 'Little Rock, AR', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4225, 'country_id' => 45, 'name' => 'Liuzhou', 'name_ru' => 'Лучжоу', 'gmt_offset' => 8,
			), array(
				'id' => 4226, 'country_id' => 216, 'name' => 'Livengood, AK', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 4227, 'country_id' => 216, 'name' => 'Livermore', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4228, 'country_id' => 73, 'name' => 'Liverpool', 'name_ru' => 'Ливерпуль', 'gmt_offset' => 0,
			), array(
				'id'         => 4229, 'country_id' => 216, 'name' => 'Livingston', 'name_ru' => 'Ливингстон',
				'gmt_offset' => -7,
			), array(
				'id'         => 4230, 'country_id' => 229, 'name' => 'Livingstone', 'name_ru' => 'Ливингстоун',
				'gmt_offset' => 2,
			), array(
				'id' => 4231, 'country_id' => 29, 'name' => 'Livramento', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id'         => 4232, 'country_id' => 14, 'name' => 'Lizard Island', 'name_ru' => 'Лизард Айленд',
				'gmt_offset' => 10,
			), array(
				'id' => 4233, 'country_id' => 189, 'name' => 'Ljubljana', 'name_ru' => 'Любляна', 'gmt_offset' => 1,
			), array(
				'id' => 4234, 'country_id' => 35, 'name' => 'Lloydminster, AB', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 4235, 'country_id' => 167, 'name' => 'Loani', 'name_ru' => 'Лоани', 'gmt_offset' => -10,
			), array(
				'id' => 4236, 'country_id' => 32, 'name' => 'Lobatse', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id'         => 4237, 'country_id' => 73, 'name' => 'Lochgilphead', 'name_ru' => 'Лохгилпхед',
				'gmt_offset' => 0,
			), array(
				'id' => 4238, 'country_id' => 14, 'name' => 'Lock', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 4239, 'country_id' => 216, 'name' => 'Lock Haven', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4240, 'country_id' => 14, 'name' => 'Lockhart River', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 4241, 'country_id' => 216, 'name' => 'Lockport', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4242, 'country_id' => 227, 'name' => 'Lodar', 'name_ru' => 'Лодар', 'gmt_offset' => -3,
			), array(
				'id' => 4243, 'country_id' => 37, 'name' => 'Lodja', 'name_ru' => 'Лоджа', 'gmt_offset' => 2,
			), array(
				'id' => 4244, 'country_id' => 108, 'name' => 'Lodwar', 'name_ru' => 'Лодвар', 'gmt_offset' => -3,
			), array(
				'id' => 4245, 'country_id' => 170, 'name' => 'Lodz', 'name_ru' => 'Лодзь', 'gmt_offset' => 1,
			), array(
				'id' => 4246, 'country_id' => 202, 'name' => 'Loei', 'name_ru' => 'Лоэй', 'gmt_offset' => 7,
			), array(
				'id' => 4247, 'country_id' => 134, 'name' => 'Loen', 'name_ru' => 'Лоун', 'gmt_offset' => -12,
			), array(
				'id' => 4248, 'country_id' => 216, 'name' => 'Logan', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 4249, 'country_id' => 64, 'name' => 'Logrono', 'name_ru' => 'Логроно', 'gmt_offset' => 1,
			), array(
				'id' => 4250, 'country_id' => 137, 'name' => 'Loikaw', 'name_ru' => 'Лойкау', 'gmt_offset' => 6.5,
			), array(
				'id' => 4251, 'country_id' => 108, 'name' => 'Lokichoggio', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4252, 'country_id' => 201, 'name' => 'Lome', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4253, 'country_id' => 216, 'name' => 'Lompoc', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4254, 'country_id' => 11, 'name' => 'Loncopue', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4255, 'country_id' => 228, 'name' => 'Londolozi', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 4256, 'country_id' => 73, 'name' => 'London', 'name_ru' => 'Лондон', 'gmt_offset' => 0,
			), array(
				'id' => 4257, 'country_id' => 29, 'name' => 'Londrina', 'name_ru' => 'Лондрина', 'gmt_offset' => -2,
			), array(
				'id' => 4258, 'country_id' => 216, 'name' => 'Lone Rock', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4259, 'country_id' => 216, 'name' => 'Lonely', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 4260, 'country_id' => 149, 'name' => 'Long Akah', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4261, 'country_id' => 95, 'name' => 'Long Apung', 'name_ru' => 'Лонг-Апунг', 'gmt_offset' => -8,
			), array(
				'id' => 4262, 'country_id' => 149, 'name' => 'Long Banga', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 4263, 'country_id' => 95, 'name' => 'Long Bawan', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 4264, 'country_id' => 216, 'name' => 'Long Beach', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id'         => 4265, 'country_id' => 167, 'name' => 'Long Island', 'name_ru' => 'Лонг Айленд',
				'gmt_offset' => -9,
			), array(
				'id' => 4266, 'country_id' => 149, 'name' => 'Long Lama', 'name_ru' => 'Лонг-Лама', 'gmt_offset' => 8,
			), array(
				'id'         => 4267, 'country_id' => 149, 'name' => 'Long Lellang', 'name_ru' => 'Лонг-Лелланг',
				'gmt_offset' => 7,
			), array(
				'id' => 4268, 'country_id' => 149, 'name' => 'Long Pasia', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4269, 'country_id' => 35, 'name' => 'Long Point', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4270, 'country_id' => 149, 'name' => 'Long Semado', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 4271, 'country_id' => 149, 'name' => 'Long Seridan', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id'         => 4272, 'country_id' => 149, 'name' => 'Long Sukang', 'name_ru' => 'Лонг-Суканг',
				'gmt_offset' => 8,
			), array(
				'id' => 4273, 'country_id' => 223, 'name' => 'Long Xuyen', 'name_ru' => 'Лонь-Йен', 'gmt_offset' => -7,
			), array(
				'id' => 4274, 'country_id' => 224, 'name' => 'Longana', 'name_ru' => 'Лонгана', 'gmt_offset' => 11,
			), array(
				'id' => 4275, 'country_id' => 14, 'name' => 'Longreach', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 4276, 'country_id' => 216, 'name' => 'Longview', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4277, 'country_id' => 45, 'name' => 'Longyan', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 4278, 'country_id' => 158, 'name' => 'Longyearbyen', 'name_ru' => 'Лонгербьен',
				'gmt_offset' => 1,
			), array(
				'id' => 4279, 'country_id' => 224, 'name' => 'Lonorore', 'name_ru' => NULL, 'gmt_offset' => -11,
			), array(
				'id' => 4280, 'country_id' => 29, 'name' => 'Lontras', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4281, 'country_id' => 202, 'name' => 'Lop Buri', 'name_ru' => 'Лоп Бури', 'gmt_offset' => -7,
			), array(
				'id' => 4282, 'country_id' => 46, 'name' => 'Lopez De Micay', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 4283, 'country_id' => 216, 'name' => 'Lopez Island', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4284, 'country_id' => 169, 'name' => 'Lora Lai', 'name_ru' => 'Лора-Лаи', 'gmt_offset' => -5,
			), array(
				'id' => 4285, 'country_id' => 14, 'name' => 'Lord Howe Island', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 4286, 'country_id' => 216, 'name' => 'Lordsburg', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 4287, 'country_id' => 148, 'name' => 'Loreto', 'name_ru' => 'Лорето', 'gmt_offset' => -7,
			), array(
				'id' => 4288, 'country_id' => 46, 'name' => 'Lorica', 'name_ru' => 'Лорика', 'gmt_offset' => -5,
			), array(
				'id' => 4289, 'country_id' => 71, 'name' => 'Lorient', 'name_ru' => 'Лориент', 'gmt_offset' => 1,
			), array(
				'id' => 4290, 'country_id' => 216, 'name' => 'Loring', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 4291, 'country_id' => 14, 'name' => 'Lorraine', 'name_ru' => 'Лотарингия', 'gmt_offset' => -10,
			), array(
				'id' => 4292, 'country_id' => 216, 'name' => 'Los Alamos', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 4293, 'country_id' => 43, 'name' => 'Los Andes', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 4294, 'country_id' => 216, 'name' => 'Los Angeles', 'name_ru' => 'Лос Анджелес',
				'gmt_offset' => -8,
			), array(
				'id' => 4295, 'country_id' => 216, 'name' => 'Los Angeles, Ca', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4296, 'country_id' => 216, 'name' => 'Los Banos', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4297, 'country_id' => 47, 'name' => 'Los Chiles', 'name_ru' => 'Лос-Чилес', 'gmt_offset' => 6,
			), array(
				'id'         => 4298, 'country_id' => 11, 'name' => 'Los Menucos', 'name_ru' => 'Лос-Менукос',
				'gmt_offset' => 3,
			), array(
				'id' => 4299, 'country_id' => 148, 'name' => 'Los Mochis', 'name_ru' => 'Лос-Мошис', 'gmt_offset' => -7,
			), array(
				'id' => 4300, 'country_id' => 220, 'name' => 'Los Roques', 'name_ru' => 'Лос-Рокес', 'gmt_offset' => -4,
			), array(
				'id' => 4301, 'country_id' => 86, 'name' => 'Los Tablones', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4302, 'country_id' => 73, 'name' => 'Lossiemouth', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4303, 'country_id' => 216, 'name' => 'Lost Harbor', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 4304, 'country_id' => 216, 'name' => 'Lost River', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 4305, 'country_id' => 167, 'name' => 'Losuia', 'name_ru' => 'Лосуя', 'gmt_offset' => -10,
			), array(
				'id' => 4306, 'country_id' => 14, 'name' => 'Lotusvale', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 4307, 'country_id' => 39, 'name' => 'Loubomo', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id'         => 4308, 'country_id' => 228, 'name' => 'Louis Trichardt', 'name_ru' => 'Луи-Тришар',
				'gmt_offset' => -2,
			), array(
				'id' => 4309, 'country_id' => 216, 'name' => 'Louisa', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4310, 'country_id' => 216, 'name' => 'Louisburg', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4311, 'country_id' => 216, 'name' => 'Louisville', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4312, 'country_id' => 216, 'name' => 'Louisville, KY', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4313, 'country_id' => 71, 'name' => 'Lourdes/Tarbes', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 4314, 'country_id' => 216, 'name' => 'Lovelock', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4315, 'country_id' => 167, 'name' => 'Lowai', 'name_ru' => 'Ловай', 'gmt_offset' => -10,
			), array(
				'id' => 4316, 'country_id' => 108, 'name' => 'Loyangalani', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 4317, 'country_id' => 150, 'name' => 'Luabo', 'name_ru' => 'Луабо', 'gmt_offset' => 2,
			), array(
				'id' => 4318, 'country_id' => 9, 'name' => 'Luanda', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id'         => 4319, 'country_id' => 119, 'name' => 'Luang Namtha', 'name_ru' => 'Луанг-Намтха',
				'gmt_offset' => -7,
			), array(
				'id'         => 4320, 'country_id' => 119, 'name' => 'Luang Prabang', 'name_ru' => 'Луанг Прабанг',
				'gmt_offset' => 7,
			), array(
				'id' => 4321, 'country_id' => 9, 'name' => 'Luau', 'name_ru' => 'Луау', 'gmt_offset' => -1,
			), array(
				'id' => 4322, 'country_id' => 168, 'name' => 'Lubang', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4323, 'country_id' => 9, 'name' => 'Lubango', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 4324, 'country_id' => 216, 'name' => 'Lubbock', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4325, 'country_id' => 37, 'name' => 'Lubumbashi', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 4326, 'country_id' => 103, 'name' => 'Lucca', 'name_ru' => 'Лучча', 'gmt_offset' => 1,
			), array(
				'id' => 4327, 'country_id' => 190, 'name' => 'Lucenec', 'name_ru' => 'Лученец', 'gmt_offset' => 1,
			), array(
				'id' => 4328, 'country_id' => 99, 'name' => 'Lucknow', 'name_ru' => 'Лакнау', 'gmt_offset' => 5.5,
			), array(
				'id' => 4329, 'country_id' => 151, 'name' => 'Luderitz', 'name_ru' => 'Людериц', 'gmt_offset' => 2,
			), array(
				'id' => 4330, 'country_id' => 99, 'name' => 'Ludhiana', 'name_ru' => 'Лудхиана', 'gmt_offset' => -5.5,
			), array(
				'id' => 4331, 'country_id' => 216, 'name' => 'Ludington', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4332, 'country_id' => 9, 'name' => 'Luena', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 4333, 'country_id' => 216, 'name' => 'Lufkin, TX', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4334, 'country_id' => 40, 'name' => 'Lugano/Agno', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 4335, 'country_id' => 213, 'name' => 'Lugansk', 'name_ru' => 'Луганск', 'gmt_offset' => 3,
			), array(
				'id' => 4336, 'country_id' => 65, 'name' => 'Lugh Ganane', 'name_ru' => 'Лю-Ганан', 'gmt_offset' => 3,
			), array(
				'id' => 4337, 'country_id' => 37, 'name' => 'Luiza', 'name_ru' => 'Луиза', 'gmt_offset' => 0,
			), array(
				'id' => 4338, 'country_id' => 9, 'name' => 'Lukapa', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 4339, 'country_id' => 159, 'name' => 'Lukla', 'name_ru' => 'Лукла',
				'gmt_offset' => -5.7999999999999998,
			), array(
				'id' => 4340, 'country_id' => 229, 'name' => 'Lukulu', 'name_ru' => 'Лукулу', 'gmt_offset' => -2,
			), array(
				'id' => 4341, 'country_id' => 186, 'name' => 'Lulea', 'name_ru' => 'Лули', 'gmt_offset' => 1,
			), array(
				'id' => 4342, 'country_id' => 9, 'name' => 'Lumbala', 'name_ru' => 'Лумбала', 'gmt_offset' => -1,
			), array(
				'id' => 4343, 'country_id' => 216, 'name' => 'Lumberton', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4344, 'country_id' => 150, 'name' => 'Lumbo', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 4345, 'country_id' => 167, 'name' => 'Lumi', 'name_ru' => 'Луми', 'gmt_offset' => -10,
			), array(
				'id' => 4346, 'country_id' => 89, 'name' => 'Lumid Pau', 'name_ru' => 'Лумид-Пау', 'gmt_offset' => 3,
			), array(
				'id' => 4347, 'country_id' => 95, 'name' => 'Lunyuk', 'name_ru' => 'Луньюк', 'gmt_offset' => 8,
			), array(
				'id' => 4348, 'country_id' => 45, 'name' => 'Luoyang', 'name_ru' => 'Люян', 'gmt_offset' => -8,
			), array(
				'id' => 4349, 'country_id' => 37, 'name' => 'Luozi', 'name_ru' => 'Луози', 'gmt_offset' => 0,
			), array(
				'id' => 4350, 'country_id' => 35, 'name' => 'Lupin', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4351, 'country_id' => 229, 'name' => 'Lusaka', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 4352, 'country_id' => 37, 'name' => 'Lusambo', 'name_ru' => 'Лусамбо', 'gmt_offset' => 2,
			), array(
				'id' => 4353, 'country_id' => 37, 'name' => 'Lusanga', 'name_ru' => 'Лусанга', 'gmt_offset' => 1,
			), array(
				'id' => 4354, 'country_id' => 45, 'name' => 'Lushan', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4355, 'country_id' => 212, 'name' => 'Lushoto', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 4356, 'country_id' => 228, 'name' => 'Lusikisiki', 'name_ru' => 'Лусикисики', 'gmt_offset' => 2,
			), array(
				'id' => 4357, 'country_id' => 216, 'name' => 'Lusk', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4358, 'country_id' => 73, 'name' => 'Luton', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4359, 'country_id' => 35, 'name' => 'Lutselke/Snowdrift', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 4360, 'country_id' => 213, 'name' => 'Lutsk', 'name_ru' => 'Луцк', 'gmt_offset' => 3,
			), array(
				'id' => 4361, 'country_id' => 95, 'name' => 'Luwuk', 'name_ru' => 'Лувук', 'gmt_offset' => 8,
			), array(
				'id' => 4362, 'country_id' => 126, 'name' => 'Luxembourg', 'name_ru' => 'Люксембург', 'gmt_offset' => 1,
			), array(
				'id' => 4363, 'country_id' => 45, 'name' => 'Luxi', 'name_ru' => 'Луси', 'gmt_offset' => -8,
			), array(
				'id' => 4364, 'country_id' => 61, 'name' => 'Luxor', 'name_ru' => 'Луксор', 'gmt_offset' => 2,
			), array(
				'id' => 4365, 'country_id' => 216, 'name' => 'Luzamba', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 4366, 'country_id' => 40, 'name' => 'Luzern', 'name_ru' => 'Люцерн', 'gmt_offset' => 1,
			), array(
				'id' => 4367, 'country_id' => 45, 'name' => 'Luzhou', 'name_ru' => 'Лужчоу', 'gmt_offset' => -8,
			), array(
				'id' => 4368, 'country_id' => 168, 'name' => 'Luzon Is', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 4369, 'country_id' => 213, 'name' => 'Lviv', 'name_ru' => 'Львов', 'gmt_offset' => 3,
			), array(
				'id' => 4370, 'country_id' => 168, 'name' => 'Lwbak', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4371, 'country_id' => 71, 'name' => 'Lyall Harbour', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 4372, 'country_id' => 186, 'name' => 'Lycksele', 'name_ru' => 'Ликселе', 'gmt_offset' => 1,
			), array(
				'id' => 4373, 'country_id' => 216, 'name' => 'Lynchburg', 'name_ru' => 'Линчбург', 'gmt_offset' => -5,
			), array(
				'id' => 4374, 'country_id' => 14, 'name' => 'Lyndhurst', 'name_ru' => 'Линдхерст', 'gmt_offset' => -10,
			), array(
				'id' => 4375, 'country_id' => 216, 'name' => 'Lyndonville', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4376, 'country_id' => 73, 'name' => 'Lyneham', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4377, 'country_id' => 35, 'name' => 'Lynn Lake', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4378, 'country_id' => 71, 'name' => 'Lyon', 'name_ru' => 'Лион', 'gmt_offset' => 1,
			), array(
				'id' => 4379, 'country_id' => 216, 'name' => 'Lyons', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4380, 'country_id' => 53, 'name' => 'Lьbeck', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 4381, 'country_id' => 106, 'name' => 'Maan', 'name_ru' => 'Маан', 'gmt_offset' => -2,
			), array(
				'id' => 4382, 'country_id' => 157, 'name' => 'Maastricht', 'name_ru' => 'Маастрихт', 'gmt_offset' => 1,
			), array(
				'id' => 4383, 'country_id' => 89, 'name' => 'Mabaruma', 'name_ru' => 'Мабарума', 'gmt_offset' => 3,
			), array(
				'id' => 4384, 'country_id' => 14, 'name' => 'Mabuiag Island', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 4385, 'country_id' => 29, 'name' => 'Macae', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 4386, 'country_id' => 46, 'name' => 'Macanal', 'name_ru' => 'Маканал', 'gmt_offset' => 5,
			), array(
				'id' => 4387, 'country_id' => 29, 'name' => 'Macapa', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 4388, 'country_id' => 59, 'name' => 'Macara', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4389, 'country_id' => 59, 'name' => 'Macas', 'name_ru' => 'Макас', 'gmt_offset' => -5,
			), array(
				'id' => 4390, 'country_id' => 139, 'name' => 'Macau', 'name_ru' => 'Макао', 'gmt_offset' => 8,
			), array(
				'id' => 4391, 'country_id' => 14, 'name' => 'Macdonald Downs', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 4392, 'country_id' => 29, 'name' => 'Maceio', 'name_ru' => 'Масейо', 'gmt_offset' => -3,
			), array(
				'id' => 4393, 'country_id' => 82, 'name' => 'Macenta', 'name_ru' => 'Масента', 'gmt_offset' => 0,
			), array(
				'id' => 4394, 'country_id' => 59, 'name' => 'Machala', 'name_ru' => 'Мачала', 'gmt_offset' => -5,
			), array(
				'id' => 4395, 'country_id' => 73, 'name' => 'Machrihanish', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 4396, 'country_id' => 165, 'name' => 'Machu Picchu', 'name_ru' => 'Мачу-Пиччу',
				'gmt_offset' => -5,
			), array(
				'id' => 4397, 'country_id' => 14, 'name' => 'Mackay', 'name_ru' => 'Маккей', 'gmt_offset' => 10,
			), array(
				'id' => 4398, 'country_id' => 216, 'name' => 'Mackinac Island', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4399, 'country_id' => 14, 'name' => 'Macksville', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 4400, 'country_id' => 165, 'name' => 'Macmahon Camp 4', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4401, 'country_id' => 35, 'name' => 'Macmillan Pass', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 4402, 'country_id' => 216, 'name' => 'Macomb', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4403, 'country_id' => 216, 'name' => 'Macon', 'name_ru' => 'Макон', 'gmt_offset' => -5,
			), array(
				'id' => 4404, 'country_id' => 167, 'name' => 'Madang', 'name_ru' => 'Маданг', 'gmt_offset' => 10,
			), array(
				'id' => 4405, 'country_id' => 216, 'name' => 'Madera', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4406, 'country_id' => 182, 'name' => 'Madinah', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id'         => 4407, 'country_id' => 133, 'name' => 'Madirovalo', 'name_ru' => 'Мадировало',
				'gmt_offset' => -3,
			), array(
				'id' => 4408, 'country_id' => 216, 'name' => 'Madison', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4409, 'country_id' => 216, 'name' => 'Madras', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4410, 'country_id' => 64, 'name' => 'Madrid', 'name_ru' => 'Мадрид', 'gmt_offset' => 1,
			), array(
				'id' => 4411, 'country_id' => 99, 'name' => 'Madurai', 'name_ru' => 'Мадурай', 'gmt_offset' => 5.5,
			), array(
				'id'         => 4412, 'country_id' => 202, 'name' => 'Mae Hong Son', 'name_ru' => 'Мей-Хонг-Сон',
				'gmt_offset' => 7,
			), array(
				'id' => 4413, 'country_id' => 202, 'name' => 'Mae Sot', 'name_ru' => 'Мае Сот', 'gmt_offset' => 7,
			), array(
				'id' => 4414, 'country_id' => 224, 'name' => 'Maewo', 'name_ru' => 'Мево', 'gmt_offset' => 11,
			), array(
				'id' => 4415, 'country_id' => 124, 'name' => 'Mafeteng', 'name_ru' => 'Мафетенг', 'gmt_offset' => 2,
			), array(
				'id' => 4416, 'country_id' => 212, 'name' => 'Mafia', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 4417, 'country_id' => 106, 'name' => 'Mafraq', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 4418, 'country_id' => 180, 'name' => 'Magadan', 'name_ru' => 'Магадан', 'gmt_offset' => 12,
			), array(
				'id' => 4419, 'country_id' => 46, 'name' => 'Magangue', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 4420, 'country_id' => 150, 'name' => 'Maganja Da Costa', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 4421, 'country_id' => 150, 'name' => 'Magaruque', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 4422, 'country_id' => 180, 'name' => 'Magdagachi', 'name_ru' => 'Магдагачи', 'gmt_offset' => -2,
			), array(
				'id' => 4423, 'country_id' => 28, 'name' => 'Magdalena', 'name_ru' => 'Магдалена', 'gmt_offset' => -4,
			), array(
				'id'         => 4424, 'country_id' => 180, 'name' => 'Magnitogorsk', 'name_ru' => 'Магнитогорск',
				'gmt_offset' => 6,
			), array(
				'id' => 4425, 'country_id' => 216, 'name' => 'Magnolia', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4426, 'country_id' => 137, 'name' => 'Magwe', 'name_ru' => 'Магуэ', 'gmt_offset' => 6.5,
			), array(
				'id' => 4427, 'country_id' => 133, 'name' => 'Mahanoro', 'name_ru' => 'Маханору', 'gmt_offset' => -3,
			), array(
				'id' => 4428, 'country_id' => 122, 'name' => 'Mahaweli', 'name_ru' => NULL, 'gmt_offset' => 5.5,
			), array(
				'id' => 4429, 'country_id' => 89, 'name' => 'Mahdia', 'name_ru' => 'Мадиа', 'gmt_offset' => 3,
			), array(
				'id'         => 4430, 'country_id' => 184, 'name' => 'Mahe Island', 'name_ru' => 'Остров Махе',
				'gmt_offset' => 4,
			), array(
				'id'         => 4431, 'country_id' => 159, 'name' => 'Mahendranagar', 'name_ru' => 'Махендранагар',
				'gmt_offset' => -5.7999999999999998,
			), array(
				'id' => 4432, 'country_id' => 150, 'name' => 'Mahenye', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4433, 'country_id' => 111, 'name' => 'Maiana', 'name_ru' => 'Миайана', 'gmt_offset' => -12,
			), array(
				'id' => 4434, 'country_id' => 46, 'name' => 'Maicao', 'name_ru' => 'Маикао', 'gmt_offset' => -5,
			), array(
				'id' => 4435, 'country_id' => 155, 'name' => 'Maiduguri', 'name_ru' => 'Майдугури', 'gmt_offset' => 1,
			), array(
				'id' => 4436, 'country_id' => 89, 'name' => 'Maikwak', 'name_ru' => 'Маиквак', 'gmt_offset' => 3,
			), array(
				'id' => 4437, 'country_id' => 3, 'name' => 'Maimana', 'name_ru' => 'Меймене', 'gmt_offset' => -4.5,
			), array(
				'id' => 4438, 'country_id' => 35, 'name' => 'Main Duck Island', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 4439, 'country_id' => 14, 'name' => 'Mainoru', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 4440, 'country_id' => 133, 'name' => 'Maintirano', 'name_ru' => 'Майнтирано', 'gmt_offset' => 3,
			), array(
				'id' => 4441, 'country_id' => 49, 'name' => 'Maio', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 4442, 'country_id' => 220, 'name' => 'Maiquetнa', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 4443, 'country_id' => 14, 'name' => 'Maitland', 'name_ru' => 'Мейтленд', 'gmt_offset' => -10,
			), array(
				'id' => 4444, 'country_id' => 134, 'name' => 'Majkin', 'name_ru' => 'Меджкин', 'gmt_offset' => -12,
			), array(
				'id' => 4445, 'country_id' => 182, 'name' => 'Majma', 'name_ru' => 'Маджма', 'gmt_offset' => -3,
			), array(
				'id' => 4446, 'country_id' => 133, 'name' => 'Majunga', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 4447, 'country_id' => 134, 'name' => 'Majuro', 'name_ru' => NULL, 'gmt_offset' => 12,
			), array(
				'id' => 4448, 'country_id' => 39, 'name' => 'Makabana', 'name_ru' => 'Макабана', 'gmt_offset' => 1,
			), array(
				'id' => 4449, 'country_id' => 65, 'name' => 'Makale', 'name_ru' => 'Макале', 'gmt_offset' => 3,
			), array(
				'id' => 4450, 'country_id' => 166, 'name' => 'Makemo', 'name_ru' => 'Макемо', 'gmt_offset' => 10,
			), array(
				'id' => 4451, 'country_id' => 180, 'name' => 'Makhachkala', 'name_ru' => 'Махачкала', 'gmt_offset' => 4,
			), array(
				'id' => 4452, 'country_id' => 111, 'name' => 'Makin Island', 'name_ru' => NULL, 'gmt_offset' => 12,
			), array(
				'id' => 4453, 'country_id' => 167, 'name' => 'Makini', 'name_ru' => 'Макини', 'gmt_offset' => -10,
			), array(
				'id' => 4454, 'country_id' => 35, 'name' => 'Makkovik', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 4455, 'country_id' => 72, 'name' => 'Makokou', 'name_ru' => 'Макоку', 'gmt_offset' => 1,
			), array(
				'id' => 4456, 'country_id' => 39, 'name' => 'Makoua', 'name_ru' => 'Макуа', 'gmt_offset' => 1,
			), array(
				'id' => 4457, 'country_id' => 211, 'name' => 'Makung', 'name_ru' => 'Макунг', 'gmt_offset' => 8,
			), array(
				'id' => 4458, 'country_id' => 155, 'name' => 'Makurdi', 'name_ru' => 'Макурди', 'gmt_offset' => 1,
			), array(
				'id' => 4459, 'country_id' => 220, 'name' => 'Mal', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 4460, 'country_id' => 228, 'name' => 'Mala Mala', 'name_ru' => 'Мала-Мала', 'gmt_offset' => 2,
			), array(
				'id' => 4461, 'country_id' => 168, 'name' => 'Malabang', 'name_ru' => 'Малабанг', 'gmt_offset' => -8,
			), array(
				'id' => 4462, 'country_id' => 84, 'name' => 'Malabo', 'name_ru' => 'Малабо', 'gmt_offset' => 1,
			), array(
				'id' => 4463, 'country_id' => 149, 'name' => 'Malacca', 'name_ru' => 'Малакка', 'gmt_offset' => 8,
			), array(
				'id' => 4464, 'country_id' => 216, 'name' => 'Malad City', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 4465, 'country_id' => 64, 'name' => 'Malaga', 'name_ru' => 'Малага', 'gmt_offset' => 1,
			), array(
				'id'         => 4466, 'country_id' => 133, 'name' => 'Malaimbandy', 'name_ru' => 'Малаимбанди',
				'gmt_offset' => -3,
			), array(
				'id' => 4467, 'country_id' => 185, 'name' => 'Malakal', 'name_ru' => 'Малакал', 'gmt_offset' => 3,
			), array(
				'id' => 4468, 'country_id' => 167, 'name' => 'Malalaua', 'name_ru' => 'Малалауа', 'gmt_offset' => -10,
			), array(
				'id' => 4469, 'country_id' => 153, 'name' => 'Malam', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 4470, 'country_id' => 95, 'name' => 'Malang', 'name_ru' => 'Маланг', 'gmt_offset' => 8,
			), array(
				'id' => 4471, 'country_id' => 9, 'name' => 'Malange', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 4472, 'country_id' => 11, 'name' => 'Malargue', 'name_ru' => 'Маларкуэ', 'gmt_offset' => -3,
			), array(
				'id' => 4473, 'country_id' => 208, 'name' => 'Malatya', 'name_ru' => 'Малатия', 'gmt_offset' => 2,
			), array(
				'id' => 4474, 'country_id' => 99, 'name' => 'Malda', 'name_ru' => 'Малда', 'gmt_offset' => -5.5,
			), array(
				'id' => 4475, 'country_id' => 216, 'name' => 'Malden', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4476, 'country_id' => 217, 'name' => 'Maldonado', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 4477, 'country_id' => 146, 'name' => 'Male', 'name_ru' => 'Мале', 'gmt_offset' => 5,
			), array(
				'id' => 4478, 'country_id' => 167, 'name' => 'Malekolon', 'name_ru' => 'Малеколон', 'gmt_offset' => -10,
			), array(
				'id' => 4479, 'country_id' => 228, 'name' => 'Malelane', 'name_ru' => 'Малелейн', 'gmt_offset' => 2,
			), array(
				'id' => 4480, 'country_id' => 92, 'name' => 'Mali Losinj', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 4481, 'country_id' => 95, 'name' => 'Maliana', 'name_ru' => 'Малиана', 'gmt_offset' => 9,
			), array(
				'id' => 4482, 'country_id' => 108, 'name' => 'Malindi', 'name_ru' => 'Малинди', 'gmt_offset' => 3,
			), array(
				'id' => 4483, 'country_id' => 14, 'name' => 'Mallacoota', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 4484, 'country_id' => 186, 'name' => 'Malmo', 'name_ru' => 'Малмо', 'gmt_offset' => 1,
			), array(
				'id' => 4485, 'country_id' => 134, 'name' => 'Maloelap Island', 'name_ru' => NULL, 'gmt_offset' => 12,
			), array(
				'id'         => 4486, 'country_id' => 67, 'name' => 'Malololailai', 'name_ru' => 'Малололайлай',
				'gmt_offset' => 12,
			), array(
				'id' => 4487, 'country_id' => 158, 'name' => 'Maloy', 'name_ru' => 'Мелой', 'gmt_offset' => 1,
			), array(
				'id' => 4488, 'country_id' => 216, 'name' => 'Malta', 'name_ru' => 'Мальта', 'gmt_offset' => -7,
			), array(
				'id' => 4489, 'country_id' => 167, 'name' => 'Mamai', 'name_ru' => 'Мамаи', 'gmt_offset' => -10,
			), array(
				'id' => 4490, 'country_id' => 168, 'name' => 'Mamburao', 'name_ru' => 'Мамбурао', 'gmt_offset' => 8,
			), array(
				'id' => 4491, 'country_id' => 44, 'name' => 'Mamfe', 'name_ru' => 'Мамфе', 'gmt_offset' => 1,
			), array(
				'id' => 4492, 'country_id' => 164, 'name' => 'Mamitupo', 'name_ru' => 'Мамитупо', 'gmt_offset' => 5,
			), array(
				'id'         => 4493, 'country_id' => 216, 'name' => 'Mammoth Lakes', 'name_ru' => 'Маммот Лейкс',
				'gmt_offset' => -8,
			), array(
				'id' => 4494, 'country_id' => 133, 'name' => 'Mampikony', 'name_ru' => 'Мампикони', 'gmt_offset' => 0,
			), array(
				'id' => 4495, 'country_id' => 95, 'name' => 'Mamuju', 'name_ru' => 'Мамую', 'gmt_offset' => -8,
			), array(
				'id' => 4496, 'country_id' => 41, 'name' => 'Man', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 4497, 'country_id' => 67, 'name' => 'Mana Island', 'name_ru' => 'Остров Мана',
				'gmt_offset' => 12,
			), array(
				'id' => 4498, 'country_id' => 95, 'name' => 'Manado', 'name_ru' => 'Манадо', 'gmt_offset' => 8,
			), array(
				'id' => 4499, 'country_id' => 156, 'name' => 'Managua', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4500, 'country_id' => 133, 'name' => 'Manakara', 'name_ru' => 'Манакара', 'gmt_offset' => 3,
			),
				array(
					'id' => 4501, 'country_id' => 23, 'name' => 'Manama', 'name_ru' => NULL, 'gmt_offset' => 3,
				), 1 => array(
				'id' => 4502, 'country_id' => 133, 'name' => 'Mananara', 'name_ru' => 'Мананара', 'gmt_offset' => 3,
			), array(
				'id'         => 4503, 'country_id' => 159, 'name' => 'Manang', 'name_ru' => 'Мананг',
				'gmt_offset' => 5.7000000000000002,
			), array(
				'id' => 4504, 'country_id' => 133, 'name' => 'Mananjary', 'name_ru' => 'Манандзари', 'gmt_offset' => 3,
			), array(
				'id' => 4505, 'country_id' => 167, 'name' => 'Manare', 'name_ru' => 'Манаре', 'gmt_offset' => 10,
			), array(
				'id' => 4506, 'country_id' => 216, 'name' => 'Manassas', 'name_ru' => 'Манассас', 'gmt_offset' => -5,
			), array(
				'id' => 4507, 'country_id' => 86, 'name' => 'Manatee', 'name_ru' => 'Манати', 'gmt_offset' => -6,
			), array(
				'id' => 4508, 'country_id' => 137, 'name' => 'Manaung', 'name_ru' => 'Манаунг', 'gmt_offset' => 0,
			), array(
				'id' => 4509, 'country_id' => 29, 'name' => 'Manaus', 'name_ru' => 'Манаус', 'gmt_offset' => -4,
			), array(
				'id' => 4510, 'country_id' => 73, 'name' => 'Manchester', 'name_ru' => 'Манчестер', 'gmt_offset' => 0,
			), array(
				'id' => 4511, 'country_id' => 216, 'name' => 'Manchester, NH', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4512, 'country_id' => 133, 'name' => 'Mandabe', 'name_ru' => 'Мандабе', 'gmt_offset' => -3,
			), array(
				'id' => 4513, 'country_id' => 137, 'name' => 'Mandalay', 'name_ru' => 'Мандалай', 'gmt_offset' => 6.5,
			), array(
				'id' => 4514, 'country_id' => 138, 'name' => 'Mandalgobi', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4515, 'country_id' => 108, 'name' => 'Mandera', 'name_ru' => 'Мандера', 'gmt_offset' => 3,
			), array(
				'id'         => 4516, 'country_id' => 105, 'name' => 'Mandeville', 'name_ru' => 'Мандевилль',
				'gmt_offset' => -5,
			), array(
				'id' => 4517, 'country_id' => 72, 'name' => 'Mandji', 'name_ru' => 'Манджи', 'gmt_offset' => 1,
			), array(
				'id' => 4518, 'country_id' => 14, 'name' => 'Mandora', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id'         => 4519, 'country_id' => 133, 'name' => 'Mandritsara', 'name_ru' => 'Мандритсара',
				'gmt_offset' => -3,
			), array(
				'id' => 4520, 'country_id' => 72, 'name' => 'Manega', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 4521, 'country_id' => 167, 'name' => 'Manetai', 'name_ru' => 'Манетай', 'gmt_offset' => -10,
			), array(
				'id' => 4522, 'country_id' => 167, 'name' => 'Manga', 'name_ru' => 'Манга', 'gmt_offset' => -10,
			), array(
				'id' => 4523, 'country_id' => 42, 'name' => 'Mangaia Island', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 4524, 'country_id' => 99, 'name' => 'Mangalore', 'name_ru' => 'Мангалор', 'gmt_offset' => 5.5,
			), array(
				'id' => 4525, 'country_id' => 169, 'name' => 'Mangla', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 4526, 'country_id' => 147, 'name' => 'Mangochi', 'name_ru' => 'Мангочи', 'gmt_offset' => -2,
			), array(
				'id' => 4527, 'country_id' => 95, 'name' => 'Mangole', 'name_ru' => 'Манголе', 'gmt_offset' => 8,
			), array(
				'id'         => 4528, 'country_id' => 30, 'name' => 'Mangrove Cay', 'name_ru' => 'Менгров-Кэй',
				'gmt_offset' => 5,
			), array(
				'id' => 4529, 'country_id' => 61, 'name' => 'Manguna', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 4530, 'country_id' => 95, 'name' => 'Mangunjaya', 'name_ru' => 'Мангунджая', 'gmt_offset' => -7,
			), array(
				'id' => 4531, 'country_id' => 216, 'name' => 'Manhattan', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 4532, 'country_id' => 29, 'name' => 'Manicore', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 4533, 'country_id' => 166, 'name' => 'Manihi', 'name_ru' => 'Манихи', 'gmt_offset' => -10,
			), array(
				'id'         => 4534, 'country_id' => 42, 'name' => 'Manihiki Island', 'name_ru' => 'Манихики-Айленд',
				'gmt_offset' => 10,
			), array(
				'id' => 4535, 'country_id' => 80, 'name' => 'Maniitsoq', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 4536, 'country_id' => 168, 'name' => 'Manila', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 4537, 'country_id' => 14, 'name' => 'Maningrida', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 4538, 'country_id' => 216, 'name' => 'Manistee', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 4539, 'country_id' => 216, 'name' => 'Manistique', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4540, 'country_id' => 35, 'name' => 'Manitouwadge', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 4541, 'country_id' => 35, 'name' => 'Manitowaning', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4542, 'country_id' => 216, 'name' => 'Manitowoc', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4543, 'country_id' => 35, 'name' => 'Maniwaki', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4544, 'country_id' => 46, 'name' => 'Manizales', 'name_ru' => 'Манисалес', 'gmt_offset' => -5,
			), array(
				'id' => 4545, 'country_id' => 133, 'name' => 'Manja', 'name_ru' => 'Мандза', 'gmt_offset' => -3,
			), array(
				'id' => 4546, 'country_id' => 14, 'name' => 'Manjimup', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4547, 'country_id' => 216, 'name' => 'Mankato', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4548, 'country_id' => 41, 'name' => 'Mankono', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 4549, 'country_id' => 216, 'name' => 'Manley Hot Springs', 'name_ru' => NULL,
				'gmt_offset' => -9,
			), array(
				'id' => 4550, 'country_id' => 14, 'name' => 'Manly', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4551, 'country_id' => 14, 'name' => 'Manners Creek', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 4552, 'country_id' => 53, 'name' => 'Mannheim', 'name_ru' => 'Маннхайм', 'gmt_offset' => -1,
			), array(
				'id' => 4553, 'country_id' => 216, 'name' => 'Manokotak', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 4554, 'country_id' => 95, 'name' => 'Manokwari', 'name_ru' => 'Маноквари', 'gmt_offset' => 9,
			), array(
				'id' => 4555, 'country_id' => 37, 'name' => 'Manono', 'name_ru' => 'Маноно', 'gmt_offset' => 2,
			), array(
				'id' => 4556, 'country_id' => 229, 'name' => 'Mansa', 'name_ru' => 'Манса', 'gmt_offset' => 2,
			), array(
				'id' => 4557, 'country_id' => 169, 'name' => 'Mansehra', 'name_ru' => 'Мансехра', 'gmt_offset' => -5,
			), array(
				'id' => 4558, 'country_id' => 216, 'name' => 'Mansfield', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id'         => 4559, 'country_id' => 162, 'name' => 'Mansion House', 'name_ru' => 'Мансьон-Хаус',
				'gmt_offset' => 0,
			), array(
				'id' => 4560, 'country_id' => 73, 'name' => 'Manston', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4561, 'country_id' => 59, 'name' => 'Manta', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4562, 'country_id' => 216, 'name' => 'Manteo', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4563, 'country_id' => 216, 'name' => 'Manti', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 4564, 'country_id' => 167, 'name' => 'Manumu', 'name_ru' => 'Мануму', 'gmt_offset' => -10,
			), array(
				'id' => 4565, 'country_id' => 167, 'name' => 'Manus Island', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 4566, 'country_id' => 216, 'name' => 'Manville', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4567, 'country_id' => 48, 'name' => 'Manzanillo', 'name_ru' => 'Манзанилло', 'gmt_offset' => -5,
			), array(
				'id' => 4568, 'country_id' => 45, 'name' => 'Manzhouli', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4569, 'country_id' => 198, 'name' => 'Manzini', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 4570, 'country_id' => 200, 'name' => 'Mao', 'name_ru' => 'Мао', 'gmt_offset' => -1,
			), array(
				'id' => 4571, 'country_id' => 226, 'name' => 'Maota Savaii Is', 'name_ru' => NULL, 'gmt_offset' => -11,
			), array(
				'id' => 4572, 'country_id' => 35, 'name' => 'Maple Bay', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 4573, 'country_id' => 167, 'name' => 'Mapoda', 'name_ru' => 'Мапода', 'gmt_offset' => -10,
			), array(
				'id' => 4574, 'country_id' => 167, 'name' => 'Mapua', 'name_ru' => 'Мапуа', 'gmt_offset' => -10,
			), array(
				'id' => 4575, 'country_id' => 150, 'name' => 'Maputo', 'name_ru' => 'Мапуту', 'gmt_offset' => 2,
			), array(
				'id' => 4576, 'country_id' => 11, 'name' => 'Maquinchao', 'name_ru' => 'Макинчао', 'gmt_offset' => 3,
			), array(
				'id' => 4577, 'country_id' => 11, 'name' => 'Mar Del Plata', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id'         => 4578, 'country_id' => 108, 'name' => 'Mara Lodges', 'name_ru' => 'Мара-Лоджес',
				'gmt_offset' => -3,
			), array(
				'id' => 4579, 'country_id' => 29, 'name' => 'Maraba', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 4580, 'country_id' => 220, 'name' => 'Maracaibo', 'name_ru' => 'Маракайбо', 'gmt_offset' => 4,
			), array(
				'id' => 4581, 'country_id' => 220, 'name' => 'Maracay', 'name_ru' => 'Маракай', 'gmt_offset' => -4,
			), array(
				'id' => 4582, 'country_id' => 153, 'name' => 'Maradi', 'name_ru' => 'Маради', 'gmt_offset' => 1,
			), array(
				'id' => 4583, 'country_id' => 111, 'name' => 'Marakei', 'name_ru' => 'Маракеи', 'gmt_offset' => -12,
			), array(
				'id' => 4584, 'country_id' => 168, 'name' => 'Maramag', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 4585, 'country_id' => 167, 'name' => 'Maramuni', 'name_ru' => 'Марамуни', 'gmt_offset' => -10,
			), array(
				'id' => 4586, 'country_id' => 216, 'name' => 'Marana', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 4587, 'country_id' => 35, 'name' => 'Marathon', 'name_ru' => 'Марафон', 'gmt_offset' => -5,
			), array(
				'id' => 4588, 'country_id' => 183, 'name' => 'Marau Sound', 'name_ru' => NULL, 'gmt_offset' => -11,
			), array(
				'id' => 4589, 'country_id' => 167, 'name' => 'Marawaka', 'name_ru' => 'Маравака', 'gmt_offset' => -10,
			), array(
				'id' => 4590, 'country_id' => 14, 'name' => 'Marble Bar', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4591, 'country_id' => 216, 'name' => 'Marble Canyon', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 4592, 'country_id' => 91, 'name' => 'Marcala', 'name_ru' => 'Маркала', 'gmt_offset' => -6,
			), array(
				'id'         => 4593, 'country_id' => 216, 'name' => 'Marco Island', 'name_ru' => 'Марко Айленд',
				'gmt_offset' => -5,
			), array(
				'id' => 4594, 'country_id' => 107, 'name' => 'Marcus Island', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 4595, 'country_id' => 208, 'name' => 'Mardin', 'name_ru' => 'Мардин', 'gmt_offset' => 2,
			), array(
				'id' => 4596, 'country_id' => 152, 'name' => 'Mare', 'name_ru' => NULL, 'gmt_offset' => 11,
			), array(
				'id' => 4597, 'country_id' => 227, 'name' => 'Mareb', 'name_ru' => 'Мариб', 'gmt_offset' => 3,
			), array(
				'id' => 4598, 'country_id' => 14, 'name' => 'Mareeba', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 4599, 'country_id' => 216, 'name' => 'Marfa', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id'         => 4600, 'country_id' => 14, 'name' => 'Margaret River', 'name_ru' => 'Маргарет Ривер',
				'gmt_offset' => 0,
			), array(
				'id'         => 4601, 'country_id' => 14, 'name' => 'Margaret River Station', 'name_ru' => NULL,
				'gmt_offset' => -8,
			), array(
				'id' => 4602, 'country_id' => 167, 'name' => 'Margarima', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 4603, 'country_id' => 228, 'name' => 'Margate', 'name_ru' => 'Маргейт', 'gmt_offset' => 2,
			), array(
				'id' => 4604, 'country_id' => 216, 'name' => 'Marguerite Bay', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id'         => 4605, 'country_id' => 52, 'name' => 'Marianske Lazne', 'name_ru' => 'Марианские Лазнe',
				'gmt_offset' => -1,
			), array(
				'id' => 4606, 'country_id' => 55, 'name' => 'Maribo', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 4607, 'country_id' => 189, 'name' => 'Maribor', 'name_ru' => 'Марибор', 'gmt_offset' => 1,
			), array(
				'id' => 4608, 'country_id' => 35, 'name' => 'Maricourt Airstrip', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id'         => 4609, 'country_id' => 83, 'name' => 'Marie Galante', 'name_ru' => 'Мари-Галанте',
				'gmt_offset' => -4,
			), array(
				'id' => 4610, 'country_id' => 66, 'name' => 'Mariehamn', 'name_ru' => 'Мариехамн', 'gmt_offset' => 2,
			), array(
				'id' => 4611, 'country_id' => 216, 'name' => 'Marietta', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4612, 'country_id' => 216, 'name' => 'Marietta, GA', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4613, 'country_id' => 29, 'name' => 'Marilia', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id'         => 4614, 'country_id' => 103, 'name' => 'Marina Di Massa', 'name_ru' => 'Марина Ди Масса',
				'gmt_offset' => 1,
			), array(
				'id' => 4615, 'country_id' => 216, 'name' => 'Marina, CA', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4616, 'country_id' => 168, 'name' => 'Marinduque', 'name_ru' => 'Мариндюк', 'gmt_offset' => 8,
			), array(
				'id' => 4617, 'country_id' => 29, 'name' => 'Maringa', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 4618, 'country_id' => 216, 'name' => 'Marion', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4619, 'country_id' => 14, 'name' => 'Marion Downs', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 4620, 'country_id' => 76, 'name' => 'Maripasoula', 'name_ru' => 'Марипасула', 'gmt_offset' => 3,
			), array(
				'id' => 4621, 'country_id' => 46, 'name' => 'Mariquita', 'name_ru' => 'Марикита', 'gmt_offset' => 5,
			), array(
				'id'         => 4622, 'country_id' => 175, 'name' => 'Mariscal Estigarribia',
				'name_ru'    => 'Марискал-Эстигар', 'gmt_offset' => -3,
			), array(
				'id' => 4623, 'country_id' => 213, 'name' => 'Mariupol', 'name_ru' => 'Мариуполь', 'gmt_offset' => 3,
			), array(
				'id' => 4624, 'country_id' => 216, 'name' => 'Marks', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4625, 'country_id' => 14, 'name' => 'Marla', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 4626, 'country_id' => 216, 'name' => 'Marlborough', 'name_ru' => 'Марлборо', 'gmt_offset' => -5,
			), array(
				'id' => 4627, 'country_id' => 163, 'name' => 'Marmul', 'name_ru' => 'Мармул', 'gmt_offset' => 0,
			), array(
				'id'         => 4628, 'country_id' => 133, 'name' => 'Maroantsetra', 'name_ru' => 'Мароантсера',
				'gmt_offset' => -3,
			), array(
				'id' => 4629, 'country_id' => 191, 'name' => 'Maron', 'name_ru' => 'Марон', 'gmt_offset' => 0,
			), array(
				'id' => 4630, 'country_id' => 44, 'name' => 'Maroua', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 4631, 'country_id' => 14, 'name' => 'Marqua', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 4632, 'country_id' => 216, 'name' => 'Marquette', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4633, 'country_id' => 129, 'name' => 'Marrakech', 'name_ru' => 'Марракеш', 'gmt_offset' => 0,
			), array(
				'id' => 4634, 'country_id' => 14, 'name' => 'Marree', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 4635, 'country_id' => 150, 'name' => 'Marromeu', 'name_ru' => 'Марромеу', 'gmt_offset' => 0,
			), array(
				'id' => 4636, 'country_id' => 61, 'name' => 'Marsa Alam', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id'         => 4637, 'country_id' => 128, 'name' => 'Marsa Brega', 'name_ru' => 'Марса-Брега',
				'gmt_offset' => -2,
			), array(
				'id' => 4638, 'country_id' => 108, 'name' => 'Marsabit', 'name_ru' => 'Марсабит', 'gmt_offset' => 3,
			), array(
				'id' => 4639, 'country_id' => 71, 'name' => 'Marseille', 'name_ru' => 'Марсель', 'gmt_offset' => 1,
			), array(
				'id' => 4640, 'country_id' => 30, 'name' => 'Marsh Harbour', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 4641, 'country_id' => 216, 'name' => 'Marshall', 'name_ru' => 'Маршалл', 'gmt_offset' => -6,
			), array(
				'id' => 4642, 'country_id' => 216, 'name' => 'Marshalltown', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4643, 'country_id' => 216, 'name' => 'Marshfield', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4644, 'country_id' => 216, 'name' => 'Martinsburg', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4645, 'country_id' => 149, 'name' => 'Marudi', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4646, 'country_id' => 204, 'name' => 'Mary', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 4647, 'country_id' => 14, 'name' => 'Maryborough', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 4648, 'country_id' => 216, 'name' => 'Marysville', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4649, 'country_id' => 167, 'name' => 'Masa', 'name_ru' => 'Маса', 'gmt_offset' => -10,
			), array(
				'id' => 4650, 'country_id' => 97, 'name' => 'Masada', 'name_ru' => 'Масада', 'gmt_offset' => 2,
			), array(
				'id' => 4651, 'country_id' => 168, 'name' => 'Masalembo', 'name_ru' => 'Масалембо', 'gmt_offset' => 8,
			), array(
				'id' => 4652, 'country_id' => 95, 'name' => 'Masamba', 'name_ru' => 'Масамба', 'gmt_offset' => -8,
			), array(
				'id' => 4653, 'country_id' => 212, 'name' => 'Masasi', 'name_ru' => 'Масаси', 'gmt_offset' => 3,
			), array(
				'id' => 4654, 'country_id' => 168, 'name' => 'Masbate', 'name_ru' => 'Масбате', 'gmt_offset' => 8,
			), array(
				'id' => 4655, 'country_id' => 58, 'name' => 'Mascara', 'name_ru' => 'Маскара', 'gmt_offset' => -1,
			), array(
				'id' => 4656, 'country_id' => 124, 'name' => 'Maseru', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 4657, 'country_id' => 101, 'name' => 'Mashad', 'name_ru' => 'Машад', 'gmt_offset' => 3.5,
			), array(
				'id'         => 4658, 'country_id' => 37, 'name' => 'Masi Manimba', 'name_ru' => 'Маси-Манимба',
				'gmt_offset' => 0,
			), array(
				'id' => 4659, 'country_id' => 214, 'name' => 'Masindi', 'name_ru' => 'Масинди', 'gmt_offset' => 3,
			), array(
				'id' => 4660, 'country_id' => 163, 'name' => 'Masirah', 'name_ru' => 'Масирах', 'gmt_offset' => -4,
			), array(
				'id' => 4661, 'country_id' => 216, 'name' => 'Mason City, IA', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4662, 'country_id' => 63, 'name' => 'Massawa', 'name_ru' => 'Массава', 'gmt_offset' => 3,
			), array(
				'id' => 4663, 'country_id' => 216, 'name' => 'Massena', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4664, 'country_id' => 35, 'name' => 'Masset', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 4665, 'country_id' => 162, 'name' => 'Masterton', 'name_ru' => 'Мастертон', 'gmt_offset' => 13,
			), array(
				'id'         => 4666, 'country_id' => 85, 'name' => 'Mastic Point', 'name_ru' => 'Мастик-Пойнт',
				'gmt_offset' => 2,
			), array(
				'id' => 4667, 'country_id' => 231, 'name' => 'Masvingo', 'name_ru' => 'Масвинго', 'gmt_offset' => 2,
			), array(
				'id' => 4668, 'country_id' => 37, 'name' => 'Matadi', 'name_ru' => 'Матади', 'gmt_offset' => 1,
			), array(
				'id' => 4669, 'country_id' => 35, 'name' => 'Matagami', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4670, 'country_id' => 168, 'name' => 'Matagorda Island', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 4671, 'country_id' => 166, 'name' => 'Mataiva', 'name_ru' => 'Матайва', 'gmt_offset' => 10,
			), array(
				'id' => 4672, 'country_id' => 95, 'name' => 'Matak', 'name_ru' => 'Матак', 'gmt_offset' => 7,
			), array(
				'id' => 4673, 'country_id' => 192, 'name' => 'Matam', 'name_ru' => 'Матам', 'gmt_offset' => 0,
			), array(
				'id' => 4674, 'country_id' => 162, 'name' => 'Matamata', 'name_ru' => 'Матамата', 'gmt_offset' => 13,
			), array(
				'id' => 4675, 'country_id' => 148, 'name' => 'Matamoros', 'name_ru' => 'Матаморос', 'gmt_offset' => -6,
			), array(
				'id' => 4676, 'country_id' => 35, 'name' => 'Matane', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 4677, 'country_id' => 48, 'name' => 'Matanzas', 'name_ru' => 'Матансас', 'gmt_offset' => -5,
			), array(
				'id' => 4678, 'country_id' => 95, 'name' => 'Mataram', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 4679, 'country_id' => 168, 'name' => 'Mati', 'name_ru' => 'Мати', 'gmt_offset' => 8,
			), array(
				'id' => 4680, 'country_id' => 29, 'name' => 'Mato Grosso', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 4681, 'country_id' => 124, 'name' => 'Matsaile', 'name_ru' => 'Матсайле', 'gmt_offset' => -2,
			), array(
				'id' => 4682, 'country_id' => 211, 'name' => 'Matsu', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 4683, 'country_id' => 107, 'name' => 'Matsumoto', 'name_ru' => 'Матсумото', 'gmt_offset' => 9,
			), array(
				'id' => 4684, 'country_id' => 107, 'name' => 'Matsuyama', 'name_ru' => 'Мацуяма', 'gmt_offset' => 9,
			), array(
				'id'         => 4685, 'country_id' => 89, 'name' => 'Matthews Ridge', 'name_ru' => 'Маттьюс-Ридж',
				'gmt_offset' => 3,
			), array(
				'id' => 4686, 'country_id' => 216, 'name' => 'Mattoon', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4687, 'country_id' => 29, 'name' => 'Matupa', 'name_ru' => 'Матупа', 'gmt_offset' => 4,
			), array(
				'id' => 4688, 'country_id' => 220, 'name' => 'Maturin', 'name_ru' => 'Матурин', 'gmt_offset' => -4,
			), array(
				'id' => 4689, 'country_id' => 29, 'name' => 'Maues', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 4690, 'country_id' => 216, 'name' => 'Maui', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 4691, 'country_id' => 42, 'name' => 'Mauke Island', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 4692, 'country_id' => 137, 'name' => 'Maulmyine', 'name_ru' => NULL, 'gmt_offset' => -6.5,
			), array(
				'id' => 4693, 'country_id' => 95, 'name' => 'Maumere', 'name_ru' => 'Маумере', 'gmt_offset' => 8,
			), array(
				'id' => 4694, 'country_id' => 32, 'name' => 'Maun', 'name_ru' => 'Мон', 'gmt_offset' => 2,
			), array(
				'id' => 4695, 'country_id' => 166, 'name' => 'Maupiti', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 4696, 'country_id' => 216, 'name' => 'Maxton', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4697, 'country_id' => 216, 'name' => 'May Creek', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 4698, 'country_id' => 167, 'name' => 'May River', 'name_ru' => 'Мей-Ривер', 'gmt_offset' => 0,
			), array(
				'id' => 4699, 'country_id' => 199, 'name' => 'Mayaguana', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4700, 'country_id' => 172, 'name' => 'Mayaguez', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 4701, 'country_id' => 48, 'name' => 'Mayajigua', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4702, 'country_id' => 35, 'name' => 'Mayo', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 4703, 'country_id' => 72, 'name' => 'Mayoumba', 'name_ru' => 'Маюмба', 'gmt_offset' => 1,
			), array(
				'id' => 4704, 'country_id' => 216, 'name' => 'Mayport', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4705, 'country_id' => 3, 'name' => 'Mazar-i-sharif', 'name_ru' => NULL, 'gmt_offset' => 4.5,
			), array(
				'id' => 4706, 'country_id' => 148, 'name' => 'Mazatlan', 'name_ru' => 'Мазатлан', 'gmt_offset' => -7,
			), array(
				'id' => 4707, 'country_id' => 229, 'name' => 'Mbala', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id'         => 4708, 'country_id' => 183, 'name' => 'Mbambanakira', 'name_ru' => 'Мбамбанакира',
				'gmt_offset' => -11,
			), array(
				'id' => 4709, 'country_id' => 37, 'name' => 'Mbandaka', 'name_ru' => 'Мбандака', 'gmt_offset' => 1,
			), array(
				'id' => 4710, 'country_id' => 214, 'name' => 'Mbarara', 'name_ru' => 'Мбарара', 'gmt_offset' => 3,
			), array(
				'id' => 4711, 'country_id' => 212, 'name' => 'Mbeya', 'name_ru' => 'Мбея', 'gmt_offset' => 3,
			), array(
				'id' => 4712, 'country_id' => 72, 'name' => 'Mbigou', 'name_ru' => 'Мбигу', 'gmt_offset' => -1,
			), array(
				'id' => 4713, 'country_id' => 142, 'name' => 'Mbout', 'name_ru' => 'Мбаут', 'gmt_offset' => 0,
			), array(
				'id' => 4714, 'country_id' => 37, 'name' => 'Mbuji Mayi', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 4715, 'country_id' => 216, 'name' => 'Mc Alester', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4716, 'country_id' => 216, 'name' => 'Mc Allen, TX', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4717, 'country_id' => 34, 'name' => 'Mc Rae', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4718, 'country_id' => 14, 'name' => 'Mcarthur River', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 4719, 'country_id' => 216, 'name' => 'Mccall', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 4720, 'country_id' => 216, 'name' => 'Mccarthy', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 4721, 'country_id' => 216, 'name' => 'Mccomb', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4722, 'country_id' => 216, 'name' => 'Mccook', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4723, 'country_id' => 216, 'name' => 'Mcgrath', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 4724, 'country_id' => 216, 'name' => 'Mcminnville', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4725, 'country_id' => 216, 'name' => 'Mcpherson', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4726, 'country_id' => 35, 'name' => 'Meadow Lake', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4727, 'country_id' => 216, 'name' => 'Meadville', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4728, 'country_id' => 58, 'name' => 'Mechria', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 4729, 'country_id' => 95, 'name' => 'Medan', 'name_ru' => 'Медан', 'gmt_offset' => 7,
			), array(
				'id' => 4730, 'country_id' => 46, 'name' => 'Medellin', 'name_ru' => 'Меделлин', 'gmt_offset' => -5,
			), array(
				'id' => 4731, 'country_id' => 46, 'name' => 'Medellнn', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4732, 'country_id' => 216, 'name' => 'Medford', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4733, 'country_id' => 216, 'name' => 'Medfra', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id'         => 4734, 'country_id' => 35, 'name' => 'Medicine Hat', 'name_ru' => 'Медисин Хет',
				'gmt_offset' => -7,
			), array(
				'id' => 4735, 'country_id' => 46, 'name' => 'Medina', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4736, 'country_id' => 84, 'name' => 'Medouneu', 'name_ru' => 'Медунеу', 'gmt_offset' => 0,
			), array(
				'id' => 4737, 'country_id' => 14, 'name' => 'Meekatharra', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4738, 'country_id' => 71, 'name' => 'Megeve', 'name_ru' => 'Межев', 'gmt_offset' => -1,
			), array(
				'id'         => 4739, 'country_id' => 159, 'name' => 'Meghauli', 'name_ru' => 'Мегхаули',
				'gmt_offset' => 5.7000000000000002,
			), array(
				'id' => 4740, 'country_id' => 158, 'name' => 'Mehamn', 'name_ru' => 'Мехамн', 'gmt_offset' => 1,
			), array(
				'id' => 4741, 'country_id' => 45, 'name' => 'Meixian', 'name_ru' => 'Мейсян', 'gmt_offset' => 8,
			), array(
				'id' => 4742, 'country_id' => 134, 'name' => 'Mejit Island', 'name_ru' => NULL, 'gmt_offset' => 12,
			), array(
				'id' => 4743, 'country_id' => 72, 'name' => 'Mekambo', 'name_ru' => 'Мекамбо', 'gmt_offset' => 1,
			), array(
				'id' => 4744, 'country_id' => 65, 'name' => 'Mekane Selam', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 4745, 'country_id' => 129, 'name' => 'Meknes', 'name_ru' => 'Мекнес', 'gmt_offset' => 0,
			), array(
				'id' => 4746, 'country_id' => 216, 'name' => 'Mekoryuk', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id'         => 4747, 'country_id' => 95, 'name' => 'Melangguane', 'name_ru' => 'Меланггуане',
				'gmt_offset' => 8,
			), array(
				'id' => 4748, 'country_id' => 14, 'name' => 'Melbourne', 'name_ru' => 'Мельбурн', 'gmt_offset' => 11,
			), array(
				'id' => 4749, 'country_id' => 86, 'name' => 'Melchor De Menco', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4750, 'country_id' => 216, 'name' => 'Melfa', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4751, 'country_id' => 200, 'name' => 'Melfi', 'name_ru' => 'Мелфи', 'gmt_offset' => -1,
			), array(
				'id' => 4752, 'country_id' => 64, 'name' => 'Melilla', 'name_ru' => 'Мелилья', 'gmt_offset' => 1,
			), array(
				'id' => 4753, 'country_id' => 34, 'name' => 'Melinda', 'name_ru' => 'Мелинда', 'gmt_offset' => -6,
			), array(
				'id' => 4754, 'country_id' => 217, 'name' => 'Melo', 'name_ru' => 'Мело', 'gmt_offset' => -2,
			), array(
				'id' => 4755, 'country_id' => 107, 'name' => 'Memanbetsu', 'name_ru' => 'Меманбецу', 'gmt_offset' => 9,
			), array(
				'id' => 4756, 'country_id' => 216, 'name' => 'Memphis', 'name_ru' => 'Мемфис', 'gmt_offset' => 6,
			), array(
				'id' => 4757, 'country_id' => 65, 'name' => 'Mena', 'name_ru' => 'Мена', 'gmt_offset' => -3,
			), array(
				'id' => 4758, 'country_id' => 71, 'name' => 'Mende', 'name_ru' => 'Менде', 'gmt_offset' => 1,
			), array(
				'id' => 4759, 'country_id' => 59, 'name' => 'Mendez', 'name_ru' => 'Мендес', 'gmt_offset' => -5,
			), array(
				'id' => 4760, 'country_id' => 167, 'name' => 'Mendi', 'name_ru' => 'Менди', 'gmt_offset' => -10,
			), array(
				'id' => 4761, 'country_id' => 11, 'name' => 'Mendoza', 'name_ru' => 'Мендоса', 'gmt_offset' => -3,
			), array(
				'id' => 4762, 'country_id' => 216, 'name' => 'Menominee', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 4763, 'country_id' => 9, 'name' => 'Menongue', 'name_ru' => 'Менонге', 'gmt_offset' => -1,
			), array(
				'id' => 4764, 'country_id' => 64, 'name' => 'Menorca', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 4765, 'country_id' => 14, 'name' => 'Mentone', 'name_ru' => NULL, 'gmt_offset' => 11,
			), array(
				'id' => 4766, 'country_id' => 167, 'name' => 'Menyamya', 'name_ru' => 'Меньямья', 'gmt_offset' => -10,
			), array(
				'id' => 4767, 'country_id' => 95, 'name' => 'Merauke', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 4768, 'country_id' => 216, 'name' => 'Merced', 'name_ru' => 'Мерсед', 'gmt_offset' => -8,
			), array(
				'id' => 4769, 'country_id' => 11, 'name' => 'Mercedes', 'name_ru' => 'Мерседес', 'gmt_offset' => -3,
			), array(
				'id' => 4770, 'country_id' => 216, 'name' => 'Mercury', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4771, 'country_id' => 95, 'name' => 'Merdey', 'name_ru' => 'Мердей', 'gmt_offset' => -9,
			), array(
				'id' => 4772, 'country_id' => 71, 'name' => 'Meribel', 'name_ru' => 'Мерибел', 'gmt_offset' => 1,
			), array(
				'id' => 4773, 'country_id' => 148, 'name' => 'Merida', 'name_ru' => 'Мериба', 'gmt_offset' => -6,
			), array(
				'id' => 4774, 'country_id' => 216, 'name' => 'Meridian', 'name_ru' => 'Меридиан', 'gmt_offset' => -6,
			), array(
				'id' => 4775, 'country_id' => 14, 'name' => 'Merimbula', 'name_ru' => 'Меримбула', 'gmt_offset' => -10,
			), array(
				'id' => 4776, 'country_id' => 11, 'name' => 'Merlo', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 4777, 'country_id' => 14, 'name' => 'Merluna', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 4778, 'country_id' => 185, 'name' => 'Merowe', 'name_ru' => 'Мерове', 'gmt_offset' => -2,
			), array(
				'id' => 4779, 'country_id' => 14, 'name' => 'Merrill', 'name_ru' => NULL, 'gmt_offset' => 11,
			), array(
				'id' => 4780, 'country_id' => 35, 'name' => 'Merritt', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4781, 'country_id' => 71, 'name' => 'Merry Island', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 4782, 'country_id' => 61, 'name' => 'Mersa Matruh', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 4783, 'country_id' => 149, 'name' => 'Mersing', 'name_ru' => 'Мерсинг', 'gmt_offset' => 8,
			), array(
				'id' => 4784, 'country_id' => 14, 'name' => 'Merty', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 4785, 'country_id' => 208, 'name' => 'Merzifon', 'name_ru' => 'Мерзифон', 'gmt_offset' => 2,
			), array(
				'id' => 4786, 'country_id' => 216, 'name' => 'Mesa', 'name_ru' => 'Меса', 'gmt_offset' => -7,
			), array(
				'id' => 4787, 'country_id' => 167, 'name' => 'Mesalia', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4788, 'country_id' => 216, 'name' => 'Mesquite', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4789, 'country_id' => 228, 'name' => 'Messina', 'name_ru' => 'Мессина', 'gmt_offset' => -2,
			), array(
				'id' => 4790, 'country_id' => 216, 'name' => 'Metlakatla', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 4791, 'country_id' => 71, 'name' => 'Metz', 'name_ru' => 'Мец', 'gmt_offset' => 1,
			), array(
				'id' => 4792, 'country_id' => 71, 'name' => 'Metz/nancy', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 4793, 'country_id' => 95, 'name' => 'Meulaboh', 'name_ru' => 'Меулабох', 'gmt_offset' => 7,
			), array(
				'id' => 4794, 'country_id' => 72, 'name' => 'Mevang', 'name_ru' => 'Меван', 'gmt_offset' => -1,
			), array(
				'id' => 4795, 'country_id' => 148, 'name' => 'Mexicali', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id'         => 4796, 'country_id' => 148, 'name' => 'Mexico City', 'name_ru' => 'Мексико Сити',
				'gmt_offset' => -6,
			), array(
				'id' => 4797, 'country_id' => 216, 'name' => 'Meyers Chuck', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 4798, 'country_id' => 229, 'name' => 'Mfuwe', 'name_ru' => 'Мфуве', 'gmt_offset' => 2,
			), array(
				'id' => 4799, 'country_id' => 216, 'name' => 'Miami', 'name_ru' => 'Майами', 'gmt_offset' => -6,
			), array(
				'id' => 4800, 'country_id' => 45, 'name' => 'Mian Yang', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id'         => 4801, 'country_id' => 133, 'name' => 'Miandrivazo', 'name_ru' => 'Миандривацо',
				'gmt_offset' => -3,
			), array(
				'id' => 4802, 'country_id' => 169, 'name' => 'Mianwali', 'name_ru' => 'Мьанвали', 'gmt_offset' => 5,
			), array(
				'id' => 4803, 'country_id' => 216, 'name' => 'Michigan City', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id'         => 4804, 'country_id' => 199, 'name' => 'Middle Caicos', 'name_ru' => 'Миддл-Кайкос',
				'gmt_offset' => -5,
			), array(
				'id' => 4805, 'country_id' => 14, 'name' => 'Middlemount', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 4806, 'country_id' => 216, 'name' => 'Middleton Island', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 4807, 'country_id' => 216, 'name' => 'Middletown, Ohio', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4808, 'country_id' => 158, 'name' => 'Midgard', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 4809, 'country_id' => 216, 'name' => 'Midland', 'name_ru' => 'Мидленд', 'gmt_offset' => -6,
			), array(
				'id' => 4810, 'country_id' => 215, 'name' => 'Midway Island', 'name_ru' => NULL, 'gmt_offset' => -11,
			), array(
				'id'         => 4811, 'country_id' => 72, 'name' => 'Miele Mimbale', 'name_ru' => 'Миеле-Мимбале',
				'gmt_offset' => -1,
			), array(
				'id' => 4812, 'country_id' => 66, 'name' => 'Mikkeli', 'name_ru' => 'Миккели', 'gmt_offset' => 2,
			), array(
				'id' => 4813, 'country_id' => 85, 'name' => 'Mikonos', 'name_ru' => 'Миконос', 'gmt_offset' => 2,
			), array(
				'id' => 4814, 'country_id' => 103, 'name' => 'Milan', 'name_ru' => 'Милан', 'gmt_offset' => 1,
			), array(
				'id' => 4815, 'country_id' => 73, 'name' => 'Mildenhall', 'name_ru' => 'Милденхолл', 'gmt_offset' => 0,
			), array(
				'id' => 4816, 'country_id' => 14, 'name' => 'Mildura', 'name_ru' => 'Мильдура', 'gmt_offset' => 11,
			), array(
				'id' => 4817, 'country_id' => 216, 'name' => 'Miles City', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 4818, 'country_id' => 216, 'name' => 'Milford', 'name_ru' => 'Милфорд', 'gmt_offset' => -7,
			), array(
				'id'         => 4819, 'country_id' => 162, 'name' => 'Milford Sound', 'name_ru' => 'Милфорд Саунд',
				'gmt_offset' => 13,
			), array(
				'id' => 4820, 'country_id' => 134, 'name' => 'Mili Atoll', 'name_ru' => NULL, 'gmt_offset' => 12,
			), array(
				'id' => 4821, 'country_id' => 134, 'name' => 'Mili Island', 'name_ru' => NULL, 'gmt_offset' => 12,
			), array(
				'id' => 4822, 'country_id' => 14, 'name' => 'Milingimbi', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 4823, 'country_id' => 216, 'name' => 'Milledgeville', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4824, 'country_id' => 14, 'name' => 'Millicent', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 4825, 'country_id' => 216, 'name' => 'Millington, TN', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4826, 'country_id' => 216, 'name' => 'Millinocket', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4827, 'country_id' => 216, 'name' => 'Millville', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4828, 'country_id' => 85, 'name' => 'Milos', 'name_ru' => 'Милос', 'gmt_offset' => 2,
			), array(
				'id' => 4829, 'country_id' => 216, 'name' => 'Milton', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id'         => 4830, 'country_id' => 73, 'name' => 'Milton Keynes', 'name_ru' => 'Милтон-Кейнес',
				'gmt_offset' => 0,
			), array(
				'id' => 4831, 'country_id' => 216, 'name' => 'Milwaukee', 'name_ru' => 'Милуоки', 'gmt_offset' => -6,
			), array(
				'id' => 4832, 'country_id' => 216, 'name' => 'Milwaukee,', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4833, 'country_id' => 29, 'name' => 'Minacu', 'name_ru' => 'Минаку', 'gmt_offset' => 0,
			), array(
				'id' => 4834, 'country_id' => 35, 'name' => 'Minaki', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 4835, 'country_id' => 107, 'name' => 'Minami Daito', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id'         => 4836, 'country_id' => 148, 'name' => 'Minatitlan', 'name_ru' => 'Минатитлан',
				'gmt_offset' => -6,
			), array(
				'id' => 4837, 'country_id' => 216, 'name' => 'Minchumina', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 4838, 'country_id' => 216, 'name' => 'Minden', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4839, 'country_id' => 167, 'name' => 'Mindik', 'name_ru' => 'Миндик', 'gmt_offset' => -10,
			), array(
				'id' => 4840, 'country_id' => 95, 'name' => 'Mindiptana', 'name_ru' => 'Миндиптана', 'gmt_offset' => -9,
			), array(
				'id' => 4841, 'country_id' => 95, 'name' => 'Mineral Wells', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 4842, 'country_id' => 180, 'name' => 'Mineralnye Vody', 'name_ru' => 'Минеральные Воды',
				'gmt_offset' => 4,
			), array(
				'id' => 4843, 'country_id' => 35, 'name' => 'Miners Bay', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 4844, 'country_id' => 14, 'name' => 'Miners Lake', 'name_ru' => 'Майнерз-Лейк',
				'gmt_offset' => -10,
			), array(
				'id' => 4845, 'country_id' => 35, 'name' => 'Mingan', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 4846, 'country_id' => 2, 'name' => 'Minhad AB', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 4847, 'country_id' => 167, 'name' => 'Minj', 'name_ru' => 'Миндж', 'gmt_offset' => -10,
			), array(
				'id' => 4848, 'country_id' => 14, 'name' => 'Minlaton', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 4849, 'country_id' => 155, 'name' => 'Minna', 'name_ru' => 'Минна', 'gmt_offset' => -1,
			), array(
				'id'         => 4850, 'country_id' => 216, 'name' => 'Minneapolis', 'name_ru' => 'Миннеаполис',
				'gmt_offset' => -6,
			), array(
				'id' => 4851, 'country_id' => 122, 'name' => 'Minneriya', 'name_ru' => 'Миннерия', 'gmt_offset' => -5.5,
			), array(
				'id' => 4852, 'country_id' => 14, 'name' => 'Minnipa', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 4853, 'country_id' => 216, 'name' => 'Minocqua', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4854, 'country_id' => 216, 'name' => 'Minot', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4855, 'country_id' => 33, 'name' => 'Minsk', 'name_ru' => 'Минск', 'gmt_offset' => 3,
			), array(
				'id' => 4856, 'country_id' => 216, 'name' => 'Minto', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 4857, 'country_id' => 72, 'name' => 'Minvoul', 'name_ru' => 'Минвул', 'gmt_offset' => 1,
			), array(
				'id' => 4858, 'country_id' => 171, 'name' => 'Miquelon', 'name_ru' => 'Микелон', 'gmt_offset' => -3,
			), array(
				'id' => 4859, 'country_id' => 29, 'name' => 'Miracema Do Norte', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 4860, 'country_id' => 46, 'name' => 'Miraflores', 'name_ru' => 'Мирафлорес', 'gmt_offset' => 5,
			), array(
				'id' => 4861, 'country_id' => 11, 'name' => 'Miramar', 'name_ru' => 'Мирамар', 'gmt_offset' => -3,
			), array(
				'id' => 4862, 'country_id' => 35, 'name' => 'Miramichi', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 4863, 'country_id' => 14, 'name' => 'Miranda Downs', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 4864, 'country_id' => 213, 'name' => 'Mirgorod', 'name_ru' => 'Миргород', 'gmt_offset' => 2,
			), array(
				'id' => 4865, 'country_id' => 149, 'name' => 'Miri', 'name_ru' => 'Мири', 'gmt_offset' => -8,
			), array(
				'id' => 4866, 'country_id' => 46, 'name' => 'Miriti', 'name_ru' => 'Мирити', 'gmt_offset' => 5,
			), array(
				'id' => 4867, 'country_id' => 180, 'name' => 'Mirnyj', 'name_ru' => 'Мирный', 'gmt_offset' => 10,
			), array(
				'id'         => 4868, 'country_id' => 169, 'name' => 'Mirpur Khas', 'name_ru' => 'Мирпур-Хас',
				'gmt_offset' => -5,
			), array(
				'id' => 4869, 'country_id' => 107, 'name' => 'Misawa', 'name_ru' => 'Мисава', 'gmt_offset' => 9,
			), array(
				'id' => 4870, 'country_id' => 167, 'name' => 'Misima Island', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 4871, 'country_id' => 94, 'name' => 'Miskolc', 'name_ru' => 'Мискольц', 'gmt_offset' => -1,
			), array(
				'id' => 4872, 'country_id' => 65, 'name' => 'Misrak Gashamo', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4873, 'country_id' => 216, 'name' => 'Missoula', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 4874, 'country_id' => 128, 'name' => 'Misurata', 'name_ru' => 'Мисурата', 'gmt_offset' => -2,
			), array(
				'id' => 4875, 'country_id' => 216, 'name' => 'Mitchell', 'name_ru' => 'Митчелл', 'gmt_offset' => -6,
			), array(
				'id'         => 4876, 'country_id' => 14, 'name' => 'Mitchell Plateau', 'name_ru' => 'Митчелл-Плато',
				'gmt_offset' => -8,
			), array(
				'id'         => 4877, 'country_id' => 14, 'name' => 'Mitchell River', 'name_ru' => 'Митчелл-Ривер',
				'gmt_offset' => -10,
			), array(
				'id' => 4878, 'country_id' => 42, 'name' => 'Mitiaro Island', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 4879, 'country_id' => 128, 'name' => 'Mitiga', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 4880, 'country_id' => 97, 'name' => 'Mitspeh Ramon', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 4881, 'country_id' => 14, 'name' => 'Mittiebah', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4882, 'country_id' => 46, 'name' => 'Mitu', 'name_ru' => 'Миту', 'gmt_offset' => -5,
			), array(
				'id' => 4883, 'country_id' => 72, 'name' => 'Mitzic', 'name_ru' => 'Мицик', 'gmt_offset' => 1,
			), array(
				'id'         => 4884, 'country_id' => 107, 'name' => 'Miyake Jima', 'name_ru' => 'Мияке-Жима',
				'gmt_offset' => 9,
			), array(
				'id' => 4885, 'country_id' => 107, 'name' => 'Miyako Jima', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 4886, 'country_id' => 167, 'name' => 'Miyanmin', 'name_ru' => 'Миянмин', 'gmt_offset' => -10,
			), array(
				'id' => 4887, 'country_id' => 107, 'name' => 'Miyazaki', 'name_ru' => 'Миядзаки', 'gmt_offset' => 9,
			), array(
				'id'         => 4888, 'country_id' => 65, 'name' => 'Mizan Teferi', 'name_ru' => 'Мизан-Тефери',
				'gmt_offset' => 3,
			), array(
				'id' => 4889, 'country_id' => 228, 'name' => 'Mkambati', 'name_ru' => 'Мкамбати', 'gmt_offset' => 2,
			), array(
				'id' => 4890, 'country_id' => 228, 'name' => 'Mkuze', 'name_ru' => 'Мкуз', 'gmt_offset' => -2,
			), array(
				'id' => 4891, 'country_id' => 228, 'name' => 'Mmabatho', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 4892, 'country_id' => 158, 'name' => 'Mo I Rana', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 4893, 'country_id' => 48, 'name' => 'Moa', 'name_ru' => 'Моа', 'gmt_offset' => -5,
			), array(
				'id' => 4894, 'country_id' => 216, 'name' => 'Moab', 'name_ru' => 'Моаб', 'gmt_offset' => -7,
			), array(
				'id' => 4895, 'country_id' => 72, 'name' => 'Moabi', 'name_ru' => 'Моаби', 'gmt_offset' => 1,
			), array(
				'id' => 4896, 'country_id' => 67, 'name' => 'Moala', 'name_ru' => 'Моала', 'gmt_offset' => 12,
			), array(
				'id' => 4897, 'country_id' => 95, 'name' => 'Moanamani', 'name_ru' => 'Моанамани', 'gmt_offset' => 9,
			), array(
				'id' => 4898, 'country_id' => 72, 'name' => 'Moanda', 'name_ru' => 'Моанда', 'gmt_offset' => 1,
			), array(
				'id' => 4899, 'country_id' => 37, 'name' => 'Moba', 'name_ru' => 'Моба', 'gmt_offset' => 0,
			), array(
				'id' => 4900, 'country_id' => 216, 'name' => 'Moberly', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4901, 'country_id' => 216, 'name' => 'Mobile', 'name_ru' => 'Мобайл', 'gmt_offset' => -6,
			), array(
				'id' => 4902, 'country_id' => 169, 'name' => 'Mobridge', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4903, 'country_id' => 150, 'name' => 'Mocimboa Praia', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 4904, 'country_id' => 216, 'name' => 'Modesto, CA', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4905, 'country_id' => 53, 'name' => 'Moenchengladbach', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 4906, 'country_id' => 194, 'name' => 'Moengo', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4907, 'country_id' => 193, 'name' => 'Mogadishu', 'name_ru' => 'Могадишо', 'gmt_offset' => 3,
			), array(
				'id' => 4908, 'country_id' => 33, 'name' => 'Mogilev', 'name_ru' => 'Могилев', 'gmt_offset' => 3,
			), array(
				'id' => 4909, 'country_id' => 99, 'name' => 'Mohanbari', 'name_ru' => 'Моханбари', 'gmt_offset' => 5.5,
			), array(
				'id' => 4910, 'country_id' => 112, 'name' => 'Moheli', 'name_ru' => 'Моэли', 'gmt_offset' => 3,
			), array(
				'id' => 4911, 'country_id' => 169, 'name' => 'Mohenjodaro', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4912, 'country_id' => 216, 'name' => 'Mojave', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 4913, 'country_id' => 124, 'name' => 'Mokhotlong', 'name_ru' => 'Мохотлонг', 'gmt_offset' => -2,
			), array(
				'id' => 4914, 'country_id' => 167, 'name' => 'Moki', 'name_ru' => 'Моки', 'gmt_offset' => -10,
			), array(
				'id' => 4915, 'country_id' => 115, 'name' => 'Mokpo', 'name_ru' => 'Мокпо', 'gmt_offset' => -9,
			), array(
				'id' => 4916, 'country_id' => 151, 'name' => 'Mokuti Lodge', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 4917, 'country_id' => 158, 'name' => 'Molde', 'name_ru' => 'Молде', 'gmt_offset' => 1,
			), array(
				'id' => 4918, 'country_id' => 216, 'name' => 'Moline', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 4919, 'country_id' => 150, 'name' => 'Moma', 'name_ru' => 'Мома', 'gmt_offset' => -2,
			), array(
				'id' => 4920, 'country_id' => 108, 'name' => 'Mombasa', 'name_ru' => 'Момбаса', 'gmt_offset' => 3,
			), array(
				'id' => 4921, 'country_id' => 137, 'name' => 'Momeik', 'name_ru' => 'Момейк', 'gmt_offset' => -6.5,
			), array(
				'id' => 4922, 'country_id' => 46, 'name' => 'Mompos', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4923, 'country_id' => 216, 'name' => 'Monahans', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4924, 'country_id' => 205, 'name' => 'Monastir', 'name_ru' => 'Монастир', 'gmt_offset' => 1,
			), array(
				'id' => 4925, 'country_id' => 107, 'name' => 'Monbetsu', 'name_ru' => 'Монбецу', 'gmt_offset' => 9,
			), array(
				'id' => 4926, 'country_id' => 148, 'name' => 'Monclova', 'name_ru' => 'Монклова', 'gmt_offset' => -6,
			), array(
				'id' => 4927, 'country_id' => 46, 'name' => 'Monfort', 'name_ru' => 'Монфорт', 'gmt_offset' => -4,
			), array(
				'id' => 4928, 'country_id' => 137, 'name' => 'Mong Hsat', 'name_ru' => NULL, 'gmt_offset' => -6.5,
			), array(
				'id' => 4929, 'country_id' => 137, 'name' => 'Mong Ton', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4930, 'country_id' => 200, 'name' => 'Mongo', 'name_ru' => 'Монго', 'gmt_offset' => -1,
			), array(
				'id' => 4931, 'country_id' => 229, 'name' => 'Mongu', 'name_ru' => 'Монгу', 'gmt_offset' => 2,
			), array(
				'id' => 4932, 'country_id' => 147, 'name' => 'Monkey Bay', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 4933, 'country_id' => 14, 'name' => 'Monkey Mia', 'name_ru' => 'Монки Миа', 'gmt_offset' => 0,
			), array(
				'id'         => 4934, 'country_id' => 89, 'name' => 'Monkey Mountain', 'name_ru' => 'Манки-Маунтин',
				'gmt_offset' => 3,
			), array(
				'id' => 4935, 'country_id' => 14, 'name' => 'Monkira', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 4936, 'country_id' => 183, 'name' => 'Mono', 'name_ru' => 'Моно', 'gmt_offset' => -11,
			), array(
				'id' => 4937, 'country_id' => 216, 'name' => 'Monroe', 'name_ru' => 'Монро', 'gmt_offset' => 6,
			), array(
				'id' => 4938, 'country_id' => 200, 'name' => 'Monroeville', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4939, 'country_id' => 123, 'name' => 'Monrovia', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4940, 'country_id' => 35, 'name' => 'Mont Joli', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id'         => 4941, 'country_id' => 35, 'name' => 'Mont Tremblant', 'name_ru' => 'Мон Тремблан',
				'gmt_offset' => -5,
			), array(
				'id' => 4942, 'country_id' => 35, 'name' => 'Montagne Harbor', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 4943, 'country_id' => 216, 'name' => 'Montague', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4944, 'country_id' => 216, 'name' => 'Montauk', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4945, 'country_id' => 29, 'name' => 'Monte Alegre', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id'         => 4946, 'country_id' => 130, 'name' => 'Monte Carlo', 'name_ru' => 'Монте-Карло',
				'gmt_offset' => 1,
			), array(
				'id' => 4947, 'country_id' => 11, 'name' => 'Monte Caseros', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id'         => 4948, 'country_id' => 29, 'name' => 'Monte Dourado', 'name_ru' => 'Монте-Дурадо',
				'gmt_offset' => 3,
			), array(
				'id'         => 4949, 'country_id' => 46, 'name' => 'Monte Libano', 'name_ru' => 'Монте-Либано',
				'gmt_offset' => 5,
			), array(
				'id' => 4950, 'country_id' => 28, 'name' => 'Monteagudo', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id'         => 4951, 'country_id' => 105, 'name' => 'Montego Bay', 'name_ru' => 'Монтего Бей',
				'gmt_offset' => -5,
			), array(
				'id' => 4952, 'country_id' => 150, 'name' => 'Montepuez', 'name_ru' => 'Монтепуэс', 'gmt_offset' => -2,
			), array(
				'id' => 4953, 'country_id' => 216, 'name' => 'Monterey', 'name_ru' => 'Монтерей', 'gmt_offset' => -8,
			), array(
				'id' => 4954, 'country_id' => 46, 'name' => 'Monteria', 'name_ru' => 'Монтериа', 'gmt_offset' => -5,
			), array(
				'id' => 4955, 'country_id' => 46, 'name' => 'Monterrey', 'name_ru' => 'Монтеррей', 'gmt_offset' => -5,
			), array(
				'id' => 4956, 'country_id' => 29, 'name' => 'Montes Claros', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id'         => 4957, 'country_id' => 217, 'name' => 'Montevideo', 'name_ru' => 'Монтевидео',
				'gmt_offset' => -2,
			), array(
				'id' => 4958, 'country_id' => 216, 'name' => 'Montevideo, MN', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 4959, 'country_id' => 73, 'name' => 'Montgomery', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4960, 'country_id' => 216, 'name' => 'Monticello', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4961, 'country_id' => 164, 'name' => 'Montilla', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4962, 'country_id' => 71, 'name' => 'Montlucon', 'name_ru' => 'Монлукон', 'gmt_offset' => -1,
			), array(
				'id' => 4963, 'country_id' => 14, 'name' => 'Monto', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 4964, 'country_id' => 216, 'name' => 'Montpelier, VT', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4965, 'country_id' => 71, 'name' => 'Montpellier', 'name_ru' => 'Монпейе', 'gmt_offset' => 1,
			), array(
				'id' => 4966, 'country_id' => 35, 'name' => 'Montreal', 'name_ru' => 'Монреаль', 'gmt_offset' => -5,
			), array(
				'id' => 4967, 'country_id' => 216, 'name' => 'Montrose', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 4968, 'country_id' => 71, 'name' => 'Montvale', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id'         => 4969, 'country_id' => 167, 'name' => 'Monument Valley Gldngs', 'name_ru' => NULL,
				'gmt_offset' => 0,
			), array(
				'id' => 4970, 'country_id' => 14, 'name' => 'Moolawatana', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 4971, 'country_id' => 14, 'name' => 'Moomba', 'name_ru' => 'Мумба', 'gmt_offset' => -9.5,
			), array(
				'id' => 4972, 'country_id' => 14, 'name' => 'Mooraberree', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 4973, 'country_id' => 166, 'name' => 'Moorea', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 4974, 'country_id' => 35, 'name' => 'Moose Jaw', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 4975, 'country_id' => 118, 'name' => 'Moose Lake', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4976, 'country_id' => 35, 'name' => 'Moosonee', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4977, 'country_id' => 136, 'name' => 'Mopti', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4978, 'country_id' => 186, 'name' => 'Mora', 'name_ru' => 'Мора', 'gmt_offset' => 1,
			), array(
				'id'         => 4979, 'country_id' => 133, 'name' => 'Morafenobe', 'name_ru' => 'Морафенобе',
				'gmt_offset' => -3,
			), array(
				'id' => 4980, 'country_id' => 14, 'name' => 'Moranbah', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 4981, 'country_id' => 14, 'name' => 'Morawa', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 4982, 'country_id' => 14, 'name' => 'Moree', 'name_ru' => 'Мори', 'gmt_offset' => -10,
			), array(
				'id' => 4983, 'country_id' => 167, 'name' => 'Morehead', 'name_ru' => 'Морехед', 'gmt_offset' => -10,
			), array(
				'id' => 4984, 'country_id' => 148, 'name' => 'Morelia', 'name_ru' => 'Морелия', 'gmt_offset' => -6,
			), array(
				'id' => 4985, 'country_id' => 14, 'name' => 'Moreton', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 4986, 'country_id' => 216, 'name' => 'Morganton', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4987, 'country_id' => 216, 'name' => 'Morgantown', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 4988, 'country_id' => 46, 'name' => 'Morichal', 'name_ru' => 'Морихал', 'gmt_offset' => -5,
			), array(
				'id' => 4989, 'country_id' => 71, 'name' => 'Morlaix', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 4990, 'country_id' => 14, 'name' => 'Morney', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 4991, 'country_id' => 14, 'name' => 'Mornington', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 4992, 'country_id' => 167, 'name' => 'Moro', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 4993, 'country_id' => 14, 'name' => 'Moroak', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 4994, 'country_id' => 167, 'name' => 'Morobe', 'name_ru' => 'Моропе', 'gmt_offset' => -10,
			), array(
				'id' => 4995, 'country_id' => 133, 'name' => 'Morombe', 'name_ru' => 'Моромбе', 'gmt_offset' => 3,
			), array(
				'id' => 4996, 'country_id' => 138, 'name' => 'Moron', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 4997, 'country_id' => 133, 'name' => 'Morondava', 'name_ru' => 'Морондава', 'gmt_offset' => 3,
			), array(
				'id' => 4998, 'country_id' => 112, 'name' => 'Moroni', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 4999, 'country_id' => 216, 'name' => 'Morrilton', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 5000, 'country_id' => 148, 'name' => 'Morris', 'name_ru' => NULL, 'gmt_offset' => -6,
			),
				array(
					'id' => 5001, 'country_id' => 216, 'name' => 'Morristown', 'name_ru' => NULL, 'gmt_offset' => -5,
				), 1 => array(
				'id' => 5002, 'country_id' => 14, 'name' => 'Moruya', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 5003, 'country_id' => 180, 'name' => 'Moscow', 'name_ru' => 'Москва', 'gmt_offset' => 4,
			), array(
				'id' => 5004, 'country_id' => 216, 'name' => 'Moser Bay', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id'         => 5005, 'country_id' => 216, 'name' => 'Moses Lake', 'name_ru' => 'Мозес Лейк',
				'gmt_offset' => -8,
			), array(
				'id' => 5006, 'country_id' => 216, 'name' => 'Moses Point', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 5007, 'country_id' => 158, 'name' => 'Mosjoen', 'name_ru' => 'Мосьоэн', 'gmt_offset' => 1,
			), array(
				'id' => 5008, 'country_id' => 46, 'name' => 'Mosquera', 'name_ru' => 'Москера', 'gmt_offset' => 5,
			), array(
				'id'         => 5009, 'country_id' => 228, 'name' => 'Mossel Bay', 'name_ru' => 'Залив Моссел',
				'gmt_offset' => 2,
			), array(
				'id' => 5010, 'country_id' => 39, 'name' => 'Mossendjo', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 5011, 'country_id' => 29, 'name' => 'Mossoro', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 5012, 'country_id' => 17, 'name' => 'Mostaganem', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 5013, 'country_id' => 17, 'name' => 'Mostar', 'name_ru' => 'Мостар', 'gmt_offset' => -1,
			), array(
				'id' => 5014, 'country_id' => 49, 'name' => 'Mosteiros', 'name_ru' => 'Мостейрос', 'gmt_offset' => 1,
			), array(
				'id' => 5015, 'country_id' => 149, 'name' => 'Mostyn', 'name_ru' => 'Мостин', 'gmt_offset' => 0,
			), array(
				'id' => 5016, 'country_id' => 100, 'name' => 'Mosul', 'name_ru' => 'Мосул', 'gmt_offset' => 3,
			), array(
				'id' => 5017, 'country_id' => 65, 'name' => 'Mota', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 5018, 'country_id' => 224, 'name' => 'Mota Lava', 'name_ru' => 'Мота-Лава', 'gmt_offset' => 11,
			), array(
				'id' => 5019, 'country_id' => 228, 'name' => 'Motswari', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5020, 'country_id' => 162, 'name' => 'Motueka', 'name_ru' => 'Мотуэка', 'gmt_offset' => 13,
			), array(
				'id' => 5021, 'country_id' => 142, 'name' => 'Moudjeria', 'name_ru' => 'Мауджерия', 'gmt_offset' => 0,
			), array(
				'id' => 5022, 'country_id' => 167, 'name' => 'Mougulu', 'name_ru' => 'Мугулу', 'gmt_offset' => -10,
			), array(
				'id' => 5023, 'country_id' => 72, 'name' => 'Mouila', 'name_ru' => 'Муила', 'gmt_offset' => 1,
			), array(
				'id' => 5024, 'country_id' => 35, 'name' => 'Mould Bay', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5025, 'country_id' => 216, 'name' => 'Moultrie', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 5026, 'country_id' => 200, 'name' => 'Moundou', 'name_ru' => 'Мунду', 'gmt_offset' => 1,
			), array(
				'id' => 5027, 'country_id' => 167, 'name' => 'Mount Aue', 'name_ru' => 'Маунт-Эу', 'gmt_offset' => -10,
			), array(
				'id' => 5028, 'country_id' => 14, 'name' => 'Mount Buffalo', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5029, 'country_id' => 162, 'name' => 'Mount Cook', 'name_ru' => 'Маунт Кук', 'gmt_offset' => 13,
			), array(
				'id' => 5030, 'country_id' => 151, 'name' => 'Mount Etjo Lodge', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 5031, 'country_id' => 14, 'name' => 'Mount Full Stop', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 5032, 'country_id' => 14, 'name' => 'Mount Gambier', 'name_ru' => NULL, 'gmt_offset' => 9.5,
			), array(
				'id' => 5033, 'country_id' => 14, 'name' => 'Mount Gunson', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 5034, 'country_id' => 167, 'name' => 'Mount Hagen', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 5035, 'country_id' => 216, 'name' => 'Mount Holly', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 5036, 'country_id' => 14, 'name' => 'Mount Hotham', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 5037, 'country_id' => 14, 'name' => 'Mount House', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 5038, 'country_id' => 14, 'name' => 'Mount Isa', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 5039, 'country_id' => 14, 'name' => 'Mount Keith', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 5040, 'country_id' => 14, 'name' => 'Mount Magnet', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id'         => 5041, 'country_id' => 216, 'name' => 'Mount Pleasant', 'name_ru' => 'Маунт-Плезант',
				'gmt_offset' => -5,
			), array(
				'id' => 5042, 'country_id' => 216, 'name' => 'Mount Shasta', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 5043, 'country_id' => 14, 'name' => 'Mount Swan', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 5044, 'country_id' => 216, 'name' => 'Mount Union', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 5045, 'country_id' => 216, 'name' => 'Mount Vernon', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 5046, 'country_id' => 73, 'name' => 'Mount Wilson', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5047, 'country_id' => 159, 'name' => 'Mountain', 'name_ru' => 'Маунтин', 'gmt_offset' => 0,
			), array(
				'id' => 5048, 'country_id' => 216, 'name' => 'Mountain Home', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id'         => 5049, 'country_id' => 14, 'name' => 'Mountain Valley', 'name_ru' => 'Маунтейн-Веллей',
				'gmt_offset' => -9.5,
			), array(
				'id' => 5050, 'country_id' => 216, 'name' => 'Mountain View', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 5051, 'country_id' => 216, 'name' => 'Mountain Village', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 5052, 'country_id' => 20, 'name' => 'Mouscron', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5053, 'country_id' => 39, 'name' => 'Mouyondzi', 'name_ru' => 'Муйондзи', 'gmt_offset' => 1,
			), array(
				'id' => 5054, 'country_id' => 108, 'name' => 'Moyale', 'name_ru' => 'Мояль', 'gmt_offset' => 3,
			), array(
				'id' => 5055, 'country_id' => 214, 'name' => 'Moyo', 'name_ru' => 'Мойо', 'gmt_offset' => 3,
			), array(
				'id' => 5056, 'country_id' => 165, 'name' => 'Moyobamba', 'name_ru' => 'Мойобамба', 'gmt_offset' => -5,
			), array(
				'id' => 5057, 'country_id' => 151, 'name' => 'Mpacha', 'name_ru' => 'Мпача', 'gmt_offset' => 2,
			), array(
				'id' => 5058, 'country_id' => 14, 'name' => 'Mt Barnett', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 5059, 'country_id' => 14, 'name' => 'Mt Cavenagh', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 5060, 'country_id' => 216, 'name' => 'Mt Clemens', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5061, 'country_id' => 216, 'name' => 'Mt Mckinley', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 5062, 'country_id' => 216, 'name' => 'Mt Pleasant', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 5063, 'country_id' => 216, 'name' => 'Mt Pocono', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 5064, 'country_id' => 14, 'name' => 'Mt Sandford', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 5065, 'country_id' => 216, 'name' => 'Mt Vernon', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5066, 'country_id' => 212, 'name' => 'Mtwara', 'name_ru' => 'Мтвара', 'gmt_offset' => 3,
			), array(
				'id' => 5067, 'country_id' => 14, 'name' => 'Muccan', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 5068, 'country_id' => 29, 'name' => 'Mucuri', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 5069, 'country_id' => 45, 'name' => 'Mudanjiang', 'name_ru' => 'Муданьцзян', 'gmt_offset' => -8,
			), array(
				'id' => 5070, 'country_id' => 14, 'name' => 'Mudgee', 'name_ru' => 'Муджи', 'gmt_offset' => -10,
			), array(
				'id' => 5071, 'country_id' => 150, 'name' => 'Mueda', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 5072, 'country_id' => 53, 'name' => 'Muenster/Osnabrueck', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 5073, 'country_id' => 152, 'name' => 'Mueo', 'name_ru' => 'Муэо', 'gmt_offset' => -11,
			), array(
				'id' => 5074, 'country_id' => 23, 'name' => 'Muharraq', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 5075, 'country_id' => 65, 'name' => 'Mui', 'name_ru' => 'Муи', 'gmt_offset' => -3,
			), array(
				'id' => 5076, 'country_id' => 149, 'name' => 'Mukah', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 5077, 'country_id' => 227, 'name' => 'Mukalla', 'name_ru' => 'Мукалла', 'gmt_offset' => -3,
			), array(
				'id' => 5078, 'country_id' => 227, 'name' => 'Mukeiras', 'name_ru' => 'Мукейрас', 'gmt_offset' => -3,
			), array(
				'id' => 5079, 'country_id' => 95, 'name' => 'Muko-Muko', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 5080, 'country_id' => 46, 'name' => 'Mulatos', 'name_ru' => 'Мулатос', 'gmt_offset' => 5,
			), array(
				'id' => 5081, 'country_id' => 164, 'name' => 'Mulatupo', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 5082, 'country_id' => 148, 'name' => 'Mulege', 'name_ru' => 'Мулеж', 'gmt_offset' => 7,
			), array(
				'id' => 5083, 'country_id' => 14, 'name' => 'Mulga Park', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 5084, 'country_id' => 40, 'name' => 'Mulhouse/basel', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 5085, 'country_id' => 95, 'name' => 'Mulia', 'name_ru' => 'Мулиа', 'gmt_offset' => 9,
			), array(
				'id' => 5086, 'country_id' => 14, 'name' => 'Mulka', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 5087, 'country_id' => 73, 'name' => 'Mull', 'name_ru' => 'Мулл', 'gmt_offset' => 0,
			), array(
				'id' => 5088, 'country_id' => 216, 'name' => 'Mullen', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 5089, 'country_id' => 14, 'name' => 'Mullewa', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 5090, 'country_id' => 169, 'name' => 'Multan', 'name_ru' => 'Мултан', 'gmt_offset' => 5,
			), array(
				'id' => 5091, 'country_id' => 149, 'name' => 'Mulu, Sarawak', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 5092, 'country_id' => 99, 'name' => 'Mumbai', 'name_ru' => NULL, 'gmt_offset' => 5.5,
			), array(
				'id' => 5093, 'country_id' => 108, 'name' => 'Mumias', 'name_ru' => 'Мумиас', 'gmt_offset' => 3,
			), array(
				'id' => 5094, 'country_id' => 167, 'name' => 'Munbil', 'name_ru' => 'Мунбил', 'gmt_offset' => -10,
			), array(
				'id' => 5095, 'country_id' => 216, 'name' => 'Muncie', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 5096, 'country_id' => 183, 'name' => 'Munda', 'name_ru' => NULL, 'gmt_offset' => 11,
			), array(
				'id' => 5097, 'country_id' => 167, 'name' => 'Munduku', 'name_ru' => 'Мундуку', 'gmt_offset' => -10,
			), array(
				'id' => 5098, 'country_id' => 110, 'name' => 'Mundulkiri', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5099, 'country_id' => 14, 'name' => 'Mungeranie', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 5100, 'country_id' => 53, 'name' => 'Munich', 'name_ru' => 'Мюнхен', 'gmt_offset' => 1,
			), array(
				'id' => 5101, 'country_id' => 119, 'name' => 'Muong Sai', 'name_ru' => 'Муонг-Сей', 'gmt_offset' => -7,
			), array(
				'id' => 5102, 'country_id' => 64, 'name' => 'Murcia', 'name_ru' => 'Мурсия', 'gmt_offset' => 1,
			), array(
				'id' => 5103, 'country_id' => 180, 'name' => 'Murmansk', 'name_ru' => 'Мурманск', 'gmt_offset' => 4,
			), array(
				'id' => 5104, 'country_id' => 216, 'name' => 'Murray', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 5105, 'country_id' => 35, 'name' => 'Murray Bay, NT', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 5106, 'country_id' => 14, 'name' => 'Murray Island', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 5107, 'country_id' => 128, 'name' => 'Murzuq', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5108, 'country_id' => 208, 'name' => 'Mus', 'name_ru' => 'Муш', 'gmt_offset' => 0,
			), array(
				'id' => 5109, 'country_id' => 163, 'name' => 'Muscat', 'name_ru' => 'Мускат', 'gmt_offset' => 4,
			), array(
				'id' => 5110, 'country_id' => 216, 'name' => 'Muscatine', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 5111, 'country_id' => 14, 'name' => 'Musgrave', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 5112, 'country_id' => 54, 'name' => 'Musha', 'name_ru' => 'Муша', 'gmt_offset' => 3,
			), array(
				'id' => 5113, 'country_id' => 216, 'name' => 'Muskegon', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 5114, 'country_id' => 216, 'name' => 'Muskogee', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 5115, 'country_id' => 35, 'name' => 'Muskoka', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 5116, 'country_id' => 35, 'name' => 'Muskrat Dam', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5117, 'country_id' => 212, 'name' => 'Musoma', 'name_ru' => 'Мусома', 'gmt_offset' => 3,
			), array(
				'id' => 5118, 'country_id' => 167, 'name' => 'Mussau', 'name_ru' => 'Муссау', 'gmt_offset' => -10,
			), array(
				'id'         => 5119, 'country_id' => 219, 'name' => 'Mustique Island', 'name_ru' => 'Мистик-Айленд',
				'gmt_offset' => -4,
			), array(
				'id' => 5120, 'country_id' => 231, 'name' => 'Mutare', 'name_ru' => 'Мутаре', 'gmt_offset' => -2,
			), array(
				'id' => 5121, 'country_id' => 95, 'name' => 'Muting', 'name_ru' => 'Мутинг', 'gmt_offset' => -9,
			), array(
				'id' => 5122, 'country_id' => 14, 'name' => 'Muttaburra', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id'         => 5123, 'country_id' => 169, 'name' => 'Muzaffarabad', 'name_ru' => 'Музаффарабад',
				'gmt_offset' => -5,
			), array(
				'id'         => 5124, 'country_id' => 99, 'name' => 'Muzaffarnagar', 'name_ru' => 'Музаффарнагар',
				'gmt_offset' => 5.5,
			), array(
				'id'         => 5125, 'country_id' => 99, 'name' => 'Muzaffarpur', 'name_ru' => 'Музаффарпур',
				'gmt_offset' => -5.5,
			), array(
				'id' => 5126, 'country_id' => 147, 'name' => 'Mvuu Camp', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5127, 'country_id' => 212, 'name' => 'Mwadui', 'name_ru' => 'Мвадуй', 'gmt_offset' => 3,
			), array(
				'id' => 5128, 'country_id' => 212, 'name' => 'Mwanza', 'name_ru' => 'Мванза', 'gmt_offset' => 3,
			), array(
				'id' => 5129, 'country_id' => 37, 'name' => 'Mweka', 'name_ru' => 'Мвека', 'gmt_offset' => 0,
			), array(
				'id' => 5130, 'country_id' => 137, 'name' => 'Myeik', 'name_ru' => NULL, 'gmt_offset' => -6.5,
			), array(
				'id'         => 5131, 'country_id' => 137, 'name' => 'Myitkyina', 'name_ru' => 'Мьиткьина',
				'gmt_offset' => -6.5,
			), array(
				'id' => 5132, 'country_id' => 14, 'name' => 'Myroodah', 'name_ru' => 'Майруда', 'gmt_offset' => -8,
			), array(
				'id'         => 5133, 'country_id' => 216, 'name' => 'Myrtle Beach', 'name_ru' => 'Миртл Бич',
				'gmt_offset' => -5,
			), array(
				'id' => 5134, 'country_id' => 99, 'name' => 'Mysore', 'name_ru' => 'Майсор', 'gmt_offset' => -5.5,
			), array(
				'id' => 5135, 'country_id' => 85, 'name' => 'Mytilene', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 5136, 'country_id' => 102, 'name' => 'Myvatn', 'name_ru' => 'Миватн', 'gmt_offset' => 0,
			), array(
				'id'         => 5137, 'country_id' => 228, 'name' => 'Mzamba(Wild Coast Sun)', 'name_ru' => NULL,
				'gmt_offset' => 2,
			), array(
				'id' => 5138, 'country_id' => 147, 'name' => 'Mzuzu', 'name_ru' => 'Мзузу', 'gmt_offset' => 2,
			), array(
				'id'         => 5139, 'country_id' => 221, 'name' => 'N. Sound/Virgin Gorda', 'name_ru' => NULL,
				'gmt_offset' => -4,
			), array(
				'id'         => 5140, 'country_id' => 180, 'name' => 'Naberevnye Chelny',
				'name_ru'    => 'Набережные Челны', 'gmt_offset' => -2,
			), array(
				'id' => 5141, 'country_id' => 95, 'name' => 'Nabire', 'name_ru' => 'Набире', 'gmt_offset' => 9,
			), array(
				'id' => 5142, 'country_id' => 150, 'name' => 'Nacala', 'name_ru' => 'Накала', 'gmt_offset' => 2,
			), array(
				'id' => 5143, 'country_id' => 212, 'name' => 'Nachingwea', 'name_ru' => 'Начингвеа', 'gmt_offset' => 3,
			), array(
				'id' => 5144, 'country_id' => 216, 'name' => 'Nacogdoches, TX', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 5145, 'country_id' => 67, 'name' => 'Nadi', 'name_ru' => 'Фиджи-Нади', 'gmt_offset' => 12,
			), array(
				'id' => 5146, 'country_id' => 129, 'name' => 'Nador', 'name_ru' => 'Надор', 'gmt_offset' => 0,
			), array(
				'id' => 5147, 'country_id' => 167, 'name' => 'Nadunumu', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 5148, 'country_id' => 180, 'name' => 'Nadym', 'name_ru' => 'Надым', 'gmt_offset' => 6,
			), array(
				'id' => 5149, 'country_id' => 128, 'name' => 'Nafoora', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5150, 'country_id' => 168, 'name' => 'Naga', 'name_ru' => 'Нага', 'gmt_offset' => 8,
			), array(
				'id' => 5151, 'country_id' => 107, 'name' => 'Nagasaki', 'name_ru' => 'Нагасаки', 'gmt_offset' => 9,
			), array(
				'id' => 5152, 'country_id' => 107, 'name' => 'Nagoya', 'name_ru' => 'Нагойя', 'gmt_offset' => 9,
			), array(
				'id' => 5153, 'country_id' => 99, 'name' => 'Nagpur', 'name_ru' => 'Нагпур', 'gmt_offset' => 5.5,
			), array(
				'id' => 5154, 'country_id' => 95, 'name' => 'Naha', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 5155, 'country_id' => 35, 'name' => 'Nain', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 5156, 'country_id' => 108, 'name' => 'Nairobi', 'name_ru' => 'Найроби', 'gmt_offset' => 3,
			), array(
				'id'         => 5157, 'country_id' => 107, 'name' => 'Nakashibetsu', 'name_ru' => 'Накасибецу',
				'gmt_offset' => 9,
			), array(
				'id' => 5158, 'country_id' => 16, 'name' => 'Nakhichevan', 'name_ru' => 'Нахичевань', 'gmt_offset' => 5,
			), array(
				'id'         => 5159, 'country_id' => 202, 'name' => 'Nakhon Phanom', 'name_ru' => 'Накхон Патхом',
				'gmt_offset' => 7,
			), array(
				'id'         => 5160, 'country_id' => 202, 'name' => 'Nakhon Ratchasima',
				'name_ru'    => 'Натхон Ратчасима', 'gmt_offset' => 7,
			), array(
				'id'         => 5161, 'country_id' => 202, 'name' => 'Nakhon Si Thammarat',
				'name_ru'    => 'Након-Си-Таммарат', 'gmt_offset' => 7,
			), array(
				'id' => 5162, 'country_id' => 35, 'name' => 'Nakina', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 5163, 'country_id' => 216, 'name' => 'Naknek', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 5164, 'country_id' => 170, 'name' => 'Nakolik River', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 5165, 'country_id' => 108, 'name' => 'Nakuru', 'name_ru' => 'Накуру', 'gmt_offset' => 3,
			), array(
				'id' => 5166, 'country_id' => 180, 'name' => 'Nalchik', 'name_ru' => 'Нальчик', 'gmt_offset' => 4,
			), array(
				'id' => 5167, 'country_id' => 218, 'name' => 'Namangan', 'name_ru' => 'Наманган', 'gmt_offset' => 5,
			), array(
				'id' => 5168, 'country_id' => 167, 'name' => 'Namatanai', 'name_ru' => 'Наматанай', 'gmt_offset' => -10,
			), array(
				'id' => 5169, 'country_id' => 167, 'name' => 'Nambaiyufa', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 5170, 'country_id' => 14, 'name' => 'Nambour', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 5171, 'country_id' => 14, 'name' => 'Nambucca Heads', 'name_ru' => 'Намбука Хэдс',
				'gmt_offset' => 10,
			), array(
				'id' => 5172, 'country_id' => 134, 'name' => 'Namdrik Island', 'name_ru' => NULL, 'gmt_offset' => 12,
			), array(
				'id' => 5173, 'country_id' => 9, 'name' => 'Namibe', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 5174, 'country_id' => 95, 'name' => 'Namlea', 'name_ru' => 'Намлеа', 'gmt_offset' => 8,
			), array(
				'id' => 5175, 'country_id' => 150, 'name' => 'Nampula', 'name_ru' => 'Нампула', 'gmt_offset' => 2,
			), array(
				'id' => 5176, 'country_id' => 95, 'name' => 'Namrole', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5177, 'country_id' => 137, 'name' => 'Namsang', 'name_ru' => 'Намсанг', 'gmt_offset' => -6.5,
			), array(
				'id' => 5178, 'country_id' => 158, 'name' => 'Namsos', 'name_ru' => 'Намсус', 'gmt_offset' => 1,
			), array(
				'id' => 5179, 'country_id' => 137, 'name' => 'Namtu', 'name_ru' => 'Намту', 'gmt_offset' => -6.5,
			), array(
				'id' => 5180, 'country_id' => 134, 'name' => 'Namu', 'name_ru' => 'Наму', 'gmt_offset' => -12,
			), array(
				'id' => 5181, 'country_id' => 35, 'name' => 'Namu, BC', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 5182, 'country_id' => 167, 'name' => 'Namudi', 'name_ru' => 'Намиди', 'gmt_offset' => -10,
			), array(
				'id' => 5183, 'country_id' => 151, 'name' => 'Namutoni', 'name_ru' => 'Намутони', 'gmt_offset' => -2,
			), array(
				'id' => 5184, 'country_id' => 202, 'name' => 'Nan', 'name_ru' => 'Нан', 'gmt_offset' => 7,
			), array(
				'id' => 5185, 'country_id' => 35, 'name' => 'Nanaimo', 'name_ru' => 'Нанаимо', 'gmt_offset' => 0,
			), array(
				'id' => 5186, 'country_id' => 45, 'name' => 'Nanchang', 'name_ru' => 'Наньчан', 'gmt_offset' => 8,
			), array(
				'id' => 5187, 'country_id' => 45, 'name' => 'Nanchong', 'name_ru' => 'Наньчон', 'gmt_offset' => -8,
			), array(
				'id' => 5188, 'country_id' => 71, 'name' => 'Nancy', 'name_ru' => 'Ненси', 'gmt_offset' => 1,
			), array(
				'id' => 5189, 'country_id' => 99, 'name' => 'Nanded', 'name_ru' => 'Нандед', 'gmt_offset' => -5.5,
			), array(
				'id' => 5190, 'country_id' => 150, 'name' => 'Nangade', 'name_ru' => 'Нангаде', 'gmt_offset' => -2,
			), array(
				'id' => 5191, 'country_id' => 88, 'name' => 'Nangan', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5192, 'country_id' => 95, 'name' => 'Nangapinoh', 'name_ru' => 'Нангапинох', 'gmt_offset' => 7,
			), array(
				'id' => 5193, 'country_id' => 45, 'name' => 'Nanhai', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5194, 'country_id' => 35, 'name' => 'Nanisivik', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 5195, 'country_id' => 167, 'name' => 'Nankina', 'name_ru' => 'Нанкина', 'gmt_offset' => -10,
			), array(
				'id' => 5196, 'country_id' => 45, 'name' => 'Nanking/nanjing', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 5197, 'country_id' => 45, 'name' => 'Nanning', 'name_ru' => 'Наньнин', 'gmt_offset' => 8,
			), array(
				'id' => 5198, 'country_id' => 80, 'name' => 'Nanortalik', 'name_ru' => 'Нанорталик', 'gmt_offset' => -3,
			), array(
				'id' => 5199, 'country_id' => 71, 'name' => 'Nantes', 'name_ru' => 'Нант', 'gmt_offset' => -1,
			), array(
				'id' => 5200, 'country_id' => 78, 'name' => 'Nantong', 'name_ru' => 'Наньтун', 'gmt_offset' => 0,
			), array(
				'id' => 5201, 'country_id' => 216, 'name' => 'Nantucket', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 5202, 'country_id' => 29, 'name' => 'Nanuque', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 5203, 'country_id' => 216, 'name' => 'Nanwalek', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 5204, 'country_id' => 45, 'name' => 'Nanyang', 'name_ru' => 'Наньян', 'gmt_offset' => -8,
			), array(
				'id' => 5205, 'country_id' => 108, 'name' => 'Nanyuki', 'name_ru' => 'Нануки', 'gmt_offset' => 3,
			), array(
				'id' => 5206, 'country_id' => 167, 'name' => 'Naoro', 'name_ru' => 'Наоро', 'gmt_offset' => 10,
			), array(
				'id' => 5207, 'country_id' => 216, 'name' => 'Napa', 'name_ru' => 'Напа', 'gmt_offset' => 8,
			), array(
				'id' => 5208, 'country_id' => 216, 'name' => 'Napakiak', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 5209, 'country_id' => 216, 'name' => 'Napaskiak', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id'         => 5210, 'country_id' => 162, 'name' => 'Napier-Hastings', 'name_ru' => 'Напье-Хастингс',
				'gmt_offset' => 13,
			), array(
				'id' => 5211, 'country_id' => 216, 'name' => 'Naples', 'name_ru' => 'Неаполь', 'gmt_offset' => 2,
			), array(
				'id' => 5212, 'country_id' => 103, 'name' => 'Napoli', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 5213, 'country_id' => 14, 'name' => 'Nappa Merry', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 5214, 'country_id' => 14, 'name' => 'Napperby', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 5215, 'country_id' => 166, 'name' => 'Napuka Island', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 5216, 'country_id' => 136, 'name' => 'Nara', 'name_ru' => 'Нара', 'gmt_offset' => 0,
			), array(
				'id' => 5217, 'country_id' => 14, 'name' => 'Naracoorte', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 5218, 'country_id' => 202, 'name' => 'Narathiwat', 'name_ru' => 'Наративат', 'gmt_offset' => -7,
			), array(
				'id' => 5219, 'country_id' => 46, 'name' => 'Nare', 'name_ru' => 'Наре', 'gmt_offset' => 5,
			), array(
				'id' => 5220, 'country_id' => 164, 'name' => 'Nargana', 'name_ru' => 'Наргана', 'gmt_offset' => 5,
			), array(
				'id' => 5221, 'country_id' => 14, 'name' => 'Narrabri', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 5222, 'country_id' => 14, 'name' => 'Narrandera', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 5223, 'country_id' => 14, 'name' => 'Narrogin', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 5224, 'country_id' => 80, 'name' => 'Narsaq', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 5225, 'country_id' => 80, 'name' => 'Narsarsuaq', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 5226, 'country_id' => 158, 'name' => 'Narvik', 'name_ru' => 'Нарвик', 'gmt_offset' => -1,
			), array(
				'id' => 5227, 'country_id' => 180, 'name' => 'Naryan-Mar', 'name_ru' => 'Нарьян-Мар', 'gmt_offset' => 4,
			), array(
				'id' => 5228, 'country_id' => 216, 'name' => 'Nashua, NH', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 5229, 'country_id' => 216, 'name' => 'Nashville, TN', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 5230, 'country_id' => 99, 'name' => 'Nasik', 'name_ru' => 'Насик', 'gmt_offset' => -5.5,
			), array(
				'id' => 5231, 'country_id' => 100, 'name' => 'Nasiriyah', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5232, 'country_id' => 30, 'name' => 'Nassau', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 5233, 'country_id' => 67, 'name' => 'Natadola', 'name_ru' => 'Натадола', 'gmt_offset' => -12,
			), array(
				'id' => 5234, 'country_id' => 29, 'name' => 'Natal', 'name_ru' => 'Наталь', 'gmt_offset' => 3,
			), array(
				'id' => 5235, 'country_id' => 35, 'name' => 'Natashquan', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 5236, 'country_id' => 216, 'name' => 'Natchez', 'name_ru' => 'Натчез', 'gmt_offset' => 6,
			), array(
				'id' => 5237, 'country_id' => 25, 'name' => 'Natitingou', 'name_ru' => 'Натитингу', 'gmt_offset' => -1,
			), array(
				'id' => 5238, 'country_id' => 35, 'name' => 'Natuashish', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id'         => 5239, 'country_id' => 95, 'name' => 'Natuna Ranai', 'name_ru' => 'Натуна-Ранай',
				'gmt_offset' => -7,
			), array(
				'id' => 5240, 'country_id' => 216, 'name' => 'Naukiti', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 5241, 'country_id' => 160, 'name' => 'Nauru Island', 'name_ru' => NULL, 'gmt_offset' => 12,
			), array(
				'id' => 5242, 'country_id' => 29, 'name' => 'Navegantes', 'name_ru' => 'Навегантес', 'gmt_offset' => 3,
			), array(
				'id' => 5243, 'country_id' => 218, 'name' => 'Navoi', 'name_ru' => 'Навой', 'gmt_offset' => 5,
			), array(
				'id' => 5244, 'country_id' => 169, 'name' => 'Nawabshah', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 5245, 'country_id' => 85, 'name' => 'Naxos', 'name_ru' => 'Наксо', 'gmt_offset' => 2,
			), array(
				'id' => 5246, 'country_id' => 9, 'name' => 'Ndalatandos', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5247, 'country_id' => 38, 'name' => 'Ndele', 'name_ru' => 'Нделе', 'gmt_offset' => -1,
			), array(
				'id' => 5248, 'country_id' => 72, 'name' => 'Ndende', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 5249, 'country_id' => 200, 'name' => 'Ndjamena', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 5250, 'country_id' => 229, 'name' => 'Ndola', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 5251, 'country_id' => 11, 'name' => 'Necochea', 'name_ru' => 'Некочеа', 'gmt_offset' => 3,
			), array(
				'id' => 5252, 'country_id' => 46, 'name' => 'Necocli', 'name_ru' => 'Некокли', 'gmt_offset' => 5,
			), array(
				'id' => 5253, 'country_id' => 216, 'name' => 'Needles', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 5254, 'country_id' => 80, 'name' => 'Neerlerit Inaat', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 5255, 'country_id' => 180, 'name' => 'Neftekamsk', 'name_ru' => 'Нефтекамск', 'gmt_offset' => 6,
			), array(
				'id'         => 5256, 'country_id' => 180, 'name' => 'Nefteyugansk', 'name_ru' => 'Нефтеюганск',
				'gmt_offset' => 6,
			), array(
				'id' => 5257, 'country_id' => 9, 'name' => 'Negage', 'name_ru' => 'Негаге', 'gmt_offset' => -1,
			), array(
				'id' => 5258, 'country_id' => 167, 'name' => 'Negarbo', 'name_ru' => 'Негарбо', 'gmt_offset' => -10,
			), array(
				'id' => 5259, 'country_id' => 35, 'name' => 'Negginan', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 5260, 'country_id' => 65, 'name' => 'Neghelli', 'name_ru' => 'Негелли', 'gmt_offset' => -3,
			), array(
				'id' => 5261, 'country_id' => 105, 'name' => 'Negril', 'name_ru' => 'Негрил', 'gmt_offset' => 5,
			), array(
				'id' => 5262, 'country_id' => 46, 'name' => 'Neiva', 'name_ru' => 'Нейва', 'gmt_offset' => 5,
			), array(
				'id' => 5263, 'country_id' => 65, 'name' => 'Nejjo', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5264, 'country_id' => 182, 'name' => 'Nejran', 'name_ru' => 'Неджран', 'gmt_offset' => -3,
			), array(
				'id' => 5265, 'country_id' => 65, 'name' => 'Nekemt', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 5266, 'country_id' => 162, 'name' => 'Nelson', 'name_ru' => 'Нельсон', 'gmt_offset' => -12,
			), array(
				'id' => 5267, 'country_id' => 216, 'name' => 'Nelson Lagoon', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 5268, 'country_id' => 228, 'name' => 'Nelspruit', 'name_ru' => 'Нельспрут', 'gmt_offset' => 2,
			), array(
				'id' => 5269, 'country_id' => 142, 'name' => 'Nema', 'name_ru' => 'Нема', 'gmt_offset' => 0,
			), array(
				'id' => 5270, 'country_id' => 35, 'name' => 'Nemiscau', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 5271, 'country_id' => 216, 'name' => 'Nenana', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 5272, 'country_id' => 216, 'name' => 'Neosho', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id'         => 5273, 'country_id' => 159, 'name' => 'Nepalganj', 'name_ru' => 'Непалгандж',
				'gmt_offset' => -5.7999999999999998,
			), array(
				'id' => 5274, 'country_id' => 216, 'name' => 'Nephi', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 5275, 'country_id' => 216, 'name' => 'Neptune, NJ', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 5276, 'country_id' => 180, 'name' => 'Neryungri', 'name_ru' => 'Нерюнгри', 'gmt_offset' => 10,
			), array(
				'id' => 5277, 'country_id' => 53, 'name' => 'Neubrandenburg', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id'         => 5278, 'country_id' => 53, 'name' => 'Neumuenster', 'name_ru' => 'Ноймюнстер',
				'gmt_offset' => -1,
			), array(
				'id' => 5279, 'country_id' => 11, 'name' => 'Neuquen', 'name_ru' => 'Неукен', 'gmt_offset' => 3,
			), array(
				'id' => 5280, 'country_id' => 216, 'name' => 'Nevada', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5281, 'country_id' => 71, 'name' => 'Nevers', 'name_ru' => 'Неверс', 'gmt_offset' => -1,
			), array(
				'id' => 5282, 'country_id' => 113, 'name' => 'Nevis', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 5283, 'country_id' => 208, 'name' => 'Nevsehir', 'name_ru' => 'Невсехир', 'gmt_offset' => 0,
			), array(
				'id' => 5284, 'country_id' => 216, 'name' => 'New Bedford', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 5285, 'country_id' => 216, 'name' => 'New Bern', 'name_ru' => 'Нью Берн', 'gmt_offset' => 5,
			), array(
				'id' => 5286, 'country_id' => 30, 'name' => 'New Bight', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5287, 'country_id' => 216, 'name' => 'New Chenega', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 5288, 'country_id' => 99, 'name' => 'New Delhi', 'name_ru' => 'Нью Дели', 'gmt_offset' => 5.5,
			), array(
				'id' => 5289, 'country_id' => 185, 'name' => 'New Halfa', 'name_ru' => 'Нью-Халфа', 'gmt_offset' => -2,
			), array(
				'id' => 5290, 'country_id' => 216, 'name' => 'New Haven', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 5291, 'country_id' => 216, 'name' => 'New Iberia', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 5292, 'country_id' => 216, 'name' => 'New Koliganek', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 5293, 'country_id' => 216, 'name' => 'New London', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 5294, 'country_id' => 14, 'name' => 'New Moon', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id'         => 5295, 'country_id' => 216, 'name' => 'New Orleans', 'name_ru' => 'Новый Орлеан',
				'gmt_offset' => 6,
			), array(
				'id' => 5296, 'country_id' => 216, 'name' => 'New Philadelphia', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id'         => 5297, 'country_id' => 162, 'name' => 'New Plymouth', 'name_ru' => 'Нью-Плимут',
				'gmt_offset' => -12,
			), array(
				'id' => 5298, 'country_id' => 216, 'name' => 'New Richmond', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5299, 'country_id' => 216, 'name' => 'New Stuyahok', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 5300, 'country_id' => 216, 'name' => 'New Ulm', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5301, 'country_id' => 35, 'name' => 'New Westminster', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 5302, 'country_id' => 216, 'name' => 'New York', 'name_ru' => 'Нью-Йорк', 'gmt_offset' => -5,
			), array(
				'id' => 5303, 'country_id' => 216, 'name' => 'New York, NY', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 5304, 'country_id' => 216, 'name' => 'Newark', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 5305, 'country_id' => 216, 'name' => 'Newburgh', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 5306, 'country_id' => 73, 'name' => 'Newbury', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5307, 'country_id' => 14, 'name' => 'Newcastle', 'name_ru' => 'Ньюкасл', 'gmt_offset' => 7,
			), array(
				'id' => 5308, 'country_id' => 14, 'name' => 'Newman', 'name_ru' => 'Ньюмен', 'gmt_offset' => -8,
			), array(
				'id' => 5309, 'country_id' => 216, 'name' => 'Newport', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id'         => 5310, 'country_id' => 216, 'name' => 'Newport Beach', 'name_ru' => 'Ньюпорт Бич',
				'gmt_offset' => -8,
			), array(
				'id' => 5311, 'country_id' => 216, 'name' => 'Newport News', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 5312, 'country_id' => 73, 'name' => 'Newquay', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5313, 'country_id' => 14, 'name' => 'Newry', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 5314, 'country_id' => 216, 'name' => 'Newtok', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 5315, 'country_id' => 216, 'name' => 'Newton', 'name_ru' => 'Ньютон', 'gmt_offset' => -6,
			), array(
				'id' => 5316, 'country_id' => 99, 'name' => 'Neyveli', 'name_ru' => 'Нейвели', 'gmt_offset' => -5.5,
			), array(
				'id' => 5317, 'country_id' => 229, 'name' => 'Ngala', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 5318, 'country_id' => 44, 'name' => 'Ngaoundere', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 5319, 'country_id' => 67, 'name' => 'Ngau Island', 'name_ru' => NULL, 'gmt_offset' => 12,
			), array(
				'id' => 5320, 'country_id' => 61, 'name' => 'Ngiva', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5321, 'country_id' => 229, 'name' => 'Ngoma', 'name_ru' => 'Нгома', 'gmt_offset' => -2,
			), array(
				'id' => 5322, 'country_id' => 14, 'name' => 'Ngukurr', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 5323, 'country_id' => 223, 'name' => 'Nha Trang', 'name_ru' => 'Нха Транг', 'gmt_offset' => 7,
			), array(
				'id'         => 5324, 'country_id' => 216, 'name' => 'Niagara Falls', 'name_ru' => 'Ниагара Фоллз',
				'gmt_offset' => -5,
			), array(
				'id' => 5325, 'country_id' => 153, 'name' => 'Niamey', 'name_ru' => 'Ниамей', 'gmt_offset' => 1,
			), array(
				'id' => 5326, 'country_id' => 201, 'name' => 'Niamtougou', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5327, 'country_id' => 80, 'name' => 'Niaqornaarsuk', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 5328, 'country_id' => 216, 'name' => 'Niblack', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 5329, 'country_id' => 48, 'name' => 'Nicaro', 'name_ru' => 'Никаро', 'gmt_offset' => -5,
			), array(
				'id' => 5330, 'country_id' => 216, 'name' => 'Nichen Cove, AK', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 5331, 'country_id' => 14, 'name' => 'Nicholson', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 5332, 'country_id' => 51, 'name' => 'Nicosia', 'name_ru' => 'Никозия', 'gmt_offset' => 2,
			), array(
				'id' => 5333, 'country_id' => 47, 'name' => 'Nicoya', 'name_ru' => 'Никоя', 'gmt_offset' => -6,
			), array(
				'id' => 5334, 'country_id' => 194, 'name' => 'Nieuw Nickerie', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 5335, 'country_id' => 14, 'name' => 'Nifty', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5336, 'country_id' => 216, 'name' => 'Nightmute', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 5337, 'country_id' => 107, 'name' => 'Niigata', 'name_ru' => 'Ниигата', 'gmt_offset' => 9,
			), array(
				'id' => 5338, 'country_id' => 107, 'name' => 'Niihama', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 5339, 'country_id' => 213, 'name' => 'Nikolaev', 'name_ru' => 'Николаев', 'gmt_offset' => 3,
			), array(
				'id' => 5340, 'country_id' => 216, 'name' => 'Nikolai', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 5341, 'country_id' => 216, 'name' => 'Nikolski', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 5342, 'country_id' => 111, 'name' => 'Nikunau', 'name_ru' => 'Никунау', 'gmt_offset' => 12,
			), array(
				'id' => 5343, 'country_id' => 216, 'name' => 'Niles', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 5344, 'country_id' => 123, 'name' => 'Nimba', 'name_ru' => 'Нимба', 'gmt_offset' => 0,
			), array(
				'id' => 5345, 'country_id' => 71, 'name' => 'Nimes', 'name_ru' => 'Ним', 'gmt_offset' => 1,
			), array(
				'id' => 5346, 'country_id' => 3, 'name' => 'Nimroz', 'name_ru' => 'Нимроз', 'gmt_offset' => 3.5,
			), array(
				'id' => 5347, 'country_id' => 45, 'name' => 'Ningbo', 'name_ru' => 'Нинбо', 'gmt_offset' => -8,
			), array(
				'id' => 5348, 'country_id' => 167, 'name' => 'Ningerum', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 5349, 'country_id' => 216, 'name' => 'Ninilchik', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 5350, 'country_id' => 37, 'name' => 'Nioki', 'name_ru' => 'Ниоки', 'gmt_offset' => 1,
			), array(
				'id'         => 5351, 'country_id' => 192, 'name' => 'Niokolo Koba', 'name_ru' => 'Ниоколо-Коба',
				'gmt_offset' => 0,
			), array(
				'id' => 5352, 'country_id' => 136, 'name' => 'Nioro', 'name_ru' => 'Ниоро', 'gmt_offset' => 0,
			), array(
				'id' => 5353, 'country_id' => 71, 'name' => 'Niort', 'name_ru' => 'Ниорт', 'gmt_offset' => 1,
			), array(
				'id' => 5354, 'country_id' => 167, 'name' => 'Nipa', 'name_ru' => 'Нипа', 'gmt_offset' => -10,
			), array(
				'id' => 5355, 'country_id' => 29, 'name' => 'Niquelandia', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 5356, 'country_id' => 179, 'name' => 'Nis', 'name_ru' => 'Ниш', 'gmt_offset' => 1,
			), array(
				'id'         => 5357, 'country_id' => 107, 'name' => 'Nishinoomote', 'name_ru' => 'Нисиноомоте',
				'gmt_offset' => 9,
			), array(
				'id'         => 5358, 'country_id' => 167, 'name' => 'Nissan Island', 'name_ru' => 'Ниссан-Айленд',
				'gmt_offset' => -10,
			), array(
				'id' => 5359, 'country_id' => 35, 'name' => 'Nitchequon', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id'         => 5360, 'country_id' => 206, 'name' => 'Niuatoputapu', 'name_ru' => 'Ниуатопутапу',
				'gmt_offset' => -12,
			), array(
				'id'         => 5361, 'country_id' => 161, 'name' => 'Niue Island', 'name_ru' => 'Ниуе-Айленд',
				'gmt_offset' => 11,
			), array(
				'id'         => 5362, 'country_id' => 180, 'name' => 'Nizhnevartovsk', 'name_ru' => 'Нижневартовск',
				'gmt_offset' => 6,
			), array(
				'id'         => 5363, 'country_id' => 180, 'name' => 'Nizhniy Novgorod', 'name_ru' => 'Нижний Новгород',
				'gmt_offset' => 4,
			), array(
				'id' => 5364, 'country_id' => 212, 'name' => 'Njombe', 'name_ru' => 'Ньомбе', 'gmt_offset' => -3,
			), array(
				'id' => 5365, 'country_id' => 72, 'name' => 'Nkan', 'name_ru' => 'Нкан', 'gmt_offset' => 1,
			), array(
				'id' => 5366, 'country_id' => 124, 'name' => 'Nkaus', 'name_ru' => 'Нкаус', 'gmt_offset' => -2,
			), array(
				'id' => 5367, 'country_id' => 39, 'name' => 'Nkayi', 'name_ru' => 'Нкайи', 'gmt_offset' => 1,
			), array(
				'id' => 5368, 'country_id' => 37, 'name' => 'Nkolo', 'name_ru' => 'Нколо', 'gmt_offset' => 1,
			), array(
				'id' => 5369, 'country_id' => 44, 'name' => 'Nkongsamba', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 5370, 'country_id' => 216, 'name' => 'Noatak', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 5371, 'country_id' => 148, 'name' => 'Nogales', 'name_ru' => 'Ногалес', 'gmt_offset' => 6,
			), array(
				'id' => 5372, 'country_id' => 180, 'name' => 'Nojabrxsk', 'name_ru' => 'Ноябрьск', 'gmt_offset' => 6,
			), array(
				'id' => 5373, 'country_id' => 101, 'name' => 'Nojeh', 'name_ru' => NULL, 'gmt_offset' => 3.5,
			), array(
				'id'         => 5374, 'country_id' => 167, 'name' => 'Nomad River', 'name_ru' => 'Номад-Ривер',
				'gmt_offset' => -10,
			), array(
				'id' => 5375, 'country_id' => 167, 'name' => 'Nomane', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 5376, 'country_id' => 216, 'name' => 'Nome', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 5377, 'country_id' => 216, 'name' => 'Nondalton', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 5378, 'country_id' => 14, 'name' => 'Noonkanbah', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 5379, 'country_id' => 216, 'name' => 'Noorvik', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 5380, 'country_id' => 14, 'name' => 'Noosa', 'name_ru' => 'Нуса', 'gmt_offset' => -10,
			), array(
				'id' => 5381, 'country_id' => 14, 'name' => 'Noosaville', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 5382, 'country_id' => 35, 'name' => 'Nootka Sound', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 5383, 'country_id' => 53, 'name' => 'Norddeich', 'name_ru' => 'Норддайх', 'gmt_offset' => -1,
			), array(
				'id' => 5384, 'country_id' => 53, 'name' => 'Norden', 'name_ru' => 'Норден', 'gmt_offset' => 1,
			), array(
				'id' => 5385, 'country_id' => 53, 'name' => 'Norderney', 'name_ru' => 'Нордерней', 'gmt_offset' => 1,
			), array(
				'id'         => 5386, 'country_id' => 102, 'name' => 'Nordfjordur', 'name_ru' => 'Нордфьордур',
				'gmt_offset' => 0,
			), array(
				'id' => 5387, 'country_id' => 53, 'name' => 'Nordholz-Spieka', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 5388, 'country_id' => 216, 'name' => 'Norfolk', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id'         => 5389, 'country_id' => 154, 'name' => 'Norfolk Island', 'name_ru' => 'Норфолк Айленд',
				'gmt_offset' => 11,
			), array(
				'id' => 5390, 'country_id' => 216, 'name' => 'Norman', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 5391, 'country_id' => 35, 'name' => 'Norman Wells', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 5392, 'country_id' => 14, 'name' => 'Normanton', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 5393, 'country_id' => 216, 'name' => 'Norridgewock', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 5394, 'country_id' => 186, 'name' => 'Norrkoping', 'name_ru' => 'Ноггкопинг', 'gmt_offset' => 1,
			), array(
				'id' => 5395, 'country_id' => 14, 'name' => 'Norseman', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 5396, 'country_id' => 224, 'name' => 'Norsup', 'name_ru' => 'Норсуп', 'gmt_offset' => 11,
			), array(
				'id' => 5397, 'country_id' => 35, 'name' => 'North Battleford', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 5398, 'country_id' => 35, 'name' => 'North Bay', 'name_ru' => 'Норт Бэй', 'gmt_offset' => -5,
			), array(
				'id' => 5399, 'country_id' => 216, 'name' => 'North Bend', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id'         => 5400, 'country_id' => 199, 'name' => 'North Caicos', 'name_ru' => 'Норт-Кайкос',
				'gmt_offset' => -5,
			), array(
				'id' => 5401, 'country_id' => 30, 'name' => 'North Eleuthera', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 5402, 'country_id' => 216, 'name' => 'North Platte', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 5403, 'country_id' => 73, 'name' => 'North Ronaldsay', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 5404, 'country_id' => 35, 'name' => 'North Spirit Lake, ON', 'name_ru' => NULL,
				'gmt_offset' => -5,
			), array(
				'id' => 5405, 'country_id' => 73, 'name' => 'Northampton', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5406, 'country_id' => 216, 'name' => 'Northeast Cape', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 5407, 'country_id' => 73, 'name' => 'Northolt', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5408, 'country_id' => 216, 'name' => 'Northway', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 5409, 'country_id' => 216, 'name' => 'Norwalk', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 5410, 'country_id' => 35, 'name' => 'Norway House', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5411, 'country_id' => 73, 'name' => 'Norwich', 'name_ru' => 'Норвич', 'gmt_offset' => 0,
			), array(
				'id' => 5412, 'country_id' => 216, 'name' => 'Norwood', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id'         => 5413, 'country_id' => 47, 'name' => 'Nosara Beach', 'name_ru' => 'Носара-Бич',
				'gmt_offset' => 6,
			), array(
				'id' => 5414, 'country_id' => 133, 'name' => 'Nossi-Be', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 5415, 'country_id' => 158, 'name' => 'Notodden', 'name_ru' => 'Нутодден', 'gmt_offset' => 1,
			), array(
				'id' => 5416, 'country_id' => 73, 'name' => 'Nottingham', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5417, 'country_id' => 142, 'name' => 'Nouadhibou', 'name_ru' => 'Нуакдибу', 'gmt_offset' => 0,
			), array(
				'id' => 5418, 'country_id' => 142, 'name' => 'Nouakchott', 'name_ru' => 'Нуакшот', 'gmt_offset' => 0,
			), array(
				'id' => 5419, 'country_id' => 152, 'name' => 'Noumea', 'name_ru' => NULL, 'gmt_offset' => 11,
			), array(
				'id' => 5420, 'country_id' => 21, 'name' => 'Nouna', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 5421, 'country_id' => 29, 'name' => 'Nova Xavantina', 'name_ru' => 'Нова-Шавантина',
				'gmt_offset' => 0,
			), array(
				'id' => 5422, 'country_id' => 216, 'name' => 'Novato', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 5423, 'country_id' => 180, 'name' => 'Novgorod', 'name_ru' => 'Новгород', 'gmt_offset' => 4,
			), array(
				'id'         => 5424, 'country_id' => 180, 'name' => 'Novokuznetsk', 'name_ru' => 'Новокузнецк',
				'gmt_offset' => 7,
			), array(
				'id'         => 5425, 'country_id' => 180, 'name' => 'Novorossijsk', 'name_ru' => 'Новороссийск',
				'gmt_offset' => 3,
			), array(
				'id'         => 5426, 'country_id' => 180, 'name' => 'Novosibirsk', 'name_ru' => 'Новосибирск',
				'gmt_offset' => 7,
			), array(
				'id'         => 5427, 'country_id' => 180, 'name' => 'Novy Urengoy', 'name_ru' => 'Новый Уренгой',
				'gmt_offset' => 6,
			), array(
				'id' => 5428, 'country_id' => 101, 'name' => 'Now Shahr', 'name_ru' => NULL, 'gmt_offset' => 3.5,
			), array(
				'id' => 5429, 'country_id' => 167, 'name' => 'Nowata', 'name_ru' => 'Новата', 'gmt_offset' => -10,
			), array(
				'id' => 5430, 'country_id' => 14, 'name' => 'Nowra', 'name_ru' => NULL, 'gmt_offset' => 11,
			), array(
				'id'         => 5431, 'country_id' => 48, 'name' => 'Nueva Gerona', 'name_ru' => 'Нуэва-Герона',
				'gmt_offset' => -5,
			), array(
				'id'         => 5432, 'country_id' => 156, 'name' => 'Nueva Guinea', 'name_ru' => 'Нуэва-Гуинея',
				'gmt_offset' => 6,
			), array(
				'id' => 5433, 'country_id' => 148, 'name' => 'Nuevo Laredo', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 5434, 'country_id' => 167, 'name' => 'Nuguria', 'name_ru' => 'Нугуриа', 'gmt_offset' => -10,
			), array(
				'id' => 5435, 'country_id' => 216, 'name' => 'Nuiqsut', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 5436, 'country_id' => 167, 'name' => 'Nuku', 'name_ru' => 'Нуку', 'gmt_offset' => -10,
			), array(
				'id' => 5437, 'country_id' => 166, 'name' => 'Nuku Hiva', 'name_ru' => NULL, 'gmt_offset' => 9.5,
			), array(
				'id' => 5438, 'country_id' => 218, 'name' => 'Nukus', 'name_ru' => 'Нукус', 'gmt_offset' => 5,
			), array(
				'id' => 5439, 'country_id' => 166, 'name' => 'Nukutavake', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 5440, 'country_id' => 216, 'name' => 'Nulato', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 5441, 'country_id' => 14, 'name' => 'Nullagine', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 5442, 'country_id' => 14, 'name' => 'Nullarbor', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 5443, 'country_id' => 14, 'name' => 'Numbulwar', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 5444, 'country_id' => 95, 'name' => 'Numfoor', 'name_ru' => 'Нумфоор', 'gmt_offset' => -9,
			), array(
				'id' => 5445, 'country_id' => 216, 'name' => 'Nunapitchuk', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 5446, 'country_id' => 46, 'name' => 'Nunchia', 'name_ru' => 'Нунчиа', 'gmt_offset' => -5,
			), array(
				'id' => 5447, 'country_id' => 95, 'name' => 'Nunukan', 'name_ru' => 'Нунукан', 'gmt_offset' => 8,
			), array(
				'id' => 5448, 'country_id' => 46, 'name' => 'Nuqui', 'name_ru' => 'Нуки', 'gmt_offset' => -5,
			), array(
				'id' => 5449, 'country_id' => 169, 'name' => 'Nushki', 'name_ru' => 'Нушки', 'gmt_offset' => -5,
			), array(
				'id' => 5450, 'country_id' => 167, 'name' => 'Nutuve', 'name_ru' => 'Нутуве', 'gmt_offset' => -10,
			), array(
				'id' => 5451, 'country_id' => 14, 'name' => 'Nutwood Downs', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 5452, 'country_id' => 80, 'name' => 'Nuuk', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 5453, 'country_id' => 216, 'name' => 'Nyac', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 5454, 'country_id' => 185, 'name' => 'Nyala', 'name_ru' => 'Ньяла', 'gmt_offset' => 3,
			), array(
				'id' => 5455, 'country_id' => 137, 'name' => 'Nyaung-u', 'name_ru' => NULL, 'gmt_offset' => -6.5,
			), array(
				'id' => 5456, 'country_id' => 108, 'name' => 'Nyeri', 'name_ru' => 'Ньери', 'gmt_offset' => 3,
			), array(
				'id' => 5457, 'country_id' => 186, 'name' => 'Nykoping', 'name_ru' => 'Никопинг', 'gmt_offset' => 1,
			), array(
				'id' => 5458, 'country_id' => 14, 'name' => 'Nyngan', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 5459, 'country_id' => 9, 'name' => 'Nzagi', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5460, 'country_id' => 82, 'name' => 'Nzerekore', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5461, 'country_id' => 108, 'name' => 'Nzoia', 'name_ru' => 'Нзоя', 'gmt_offset' => 3,
			), array(
				'id' => 5462, 'country_id' => 216, 'name' => 'Oahu', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5463, 'country_id' => 216, 'name' => 'Oak Harbor', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 5464, 'country_id' => 14, 'name' => 'Oakey', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 5465, 'country_id' => 73, 'name' => 'Oakham', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5466, 'country_id' => 216, 'name' => 'Oakland', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 5467, 'country_id' => 216, 'name' => 'Oaktown', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 5468, 'country_id' => 162, 'name' => 'Oamaru', 'name_ru' => 'Оамару', 'gmt_offset' => 13,
			), array(
				'id' => 5469, 'country_id' => 148, 'name' => 'Oaxaca', 'name_ru' => 'Оксака', 'gmt_offset' => -6,
			), array(
				'id' => 5470, 'country_id' => 14, 'name' => 'Oban', 'name_ru' => 'Обан', 'gmt_offset' => 10,
			), array(
				'id' => 5471, 'country_id' => 95, 'name' => 'Obano', 'name_ru' => 'Обано', 'gmt_offset' => 9,
			), array(
				'id' => 5472, 'country_id' => 65, 'name' => 'Obbia', 'name_ru' => 'Оббиа', 'gmt_offset' => 0,
			), array(
				'id' => 5473, 'country_id' => 53, 'name' => 'Oberpfaffenhofen', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 5474, 'country_id' => 29, 'name' => 'Obidos', 'name_ru' => 'Обидос', 'gmt_offset' => 3,
			), array(
				'id' => 5475, 'country_id' => 107, 'name' => 'Obihiro', 'name_ru' => 'Обихиро', 'gmt_offset' => 9,
			), array(
				'id' => 5476, 'country_id' => 167, 'name' => 'Obo', 'name_ru' => 'Обо', 'gmt_offset' => -10,
			), array(
				'id' => 5477, 'country_id' => 54, 'name' => 'Obock', 'name_ru' => 'Обок', 'gmt_offset' => 3,
			), array(
				'id' => 5478, 'country_id' => 35, 'name' => 'Obre Lake', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 5479, 'country_id' => 216, 'name' => 'Ocala', 'name_ru' => 'Окала', 'gmt_offset' => -5,
			), array(
				'id' => 5480, 'country_id' => 46, 'name' => 'Ocana', 'name_ru' => 'Окана', 'gmt_offset' => 5,
			), array(
				'id' => 5481, 'country_id' => 216, 'name' => 'Ocean City', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 5482, 'country_id' => 35, 'name' => 'Ocean Falls', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 5483, 'country_id' => 216, 'name' => 'Ocean Reef', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 5484, 'country_id' => 216, 'name' => 'Oceana', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 5485, 'country_id' => 216, 'name' => 'Oceanic', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 5486, 'country_id' => 216, 'name' => 'Oceanside', 'name_ru' => 'Оушнсайд', 'gmt_offset' => -8,
			), array(
				'id' => 5487, 'country_id' => 105, 'name' => 'Ocho Rios', 'name_ru' => 'Очо Риос', 'gmt_offset' => -5,
			), array(
				'id' => 5488, 'country_id' => 95, 'name' => 'Ocussi', 'name_ru' => 'Окусси', 'gmt_offset' => -8,
			), array(
				'id' => 5489, 'country_id' => 107, 'name' => 'Odate Noshiro', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 5490, 'country_id' => 110, 'name' => 'Oddor Meanche', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 5491, 'country_id' => 55, 'name' => 'Odense', 'name_ru' => 'Оденсе', 'gmt_offset' => -1,
			), array(
				'id' => 5492, 'country_id' => 213, 'name' => 'Odessa', 'name_ru' => 'Одесса', 'gmt_offset' => 3,
			), array(
				'id' => 5493, 'country_id' => 41, 'name' => 'Odienne', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5494, 'country_id' => 73, 'name' => 'Odiham', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5495, 'country_id' => 14, 'name' => 'Oenpelli', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 5496, 'country_id' => 12, 'name' => 'Ofu', 'name_ru' => NULL, 'gmt_offset' => 11,
			), array(
				'id' => 5497, 'country_id' => 216, 'name' => 'Ogallala', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 5498, 'country_id' => 216, 'name' => 'Ogden', 'name_ru' => 'Огден', 'gmt_offset' => 7,
			), array(
				'id' => 5499, 'country_id' => 216, 'name' => 'Ogdensburg', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 5500, 'country_id' => 167, 'name' => 'Ogeranang', 'name_ru' => 'Огерананг', 'gmt_offset' => -10,
			),
				array(
					'id' => 5501, 'country_id' => 89, 'name' => 'Ogle', 'name_ru' => 'Огле', 'gmt_offset' => 3,
				), 1 => array(
				'id' => 5502, 'country_id' => 35, 'name' => 'Ogoki', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 5503, 'country_id' => 162, 'name' => 'Ohakea', 'name_ru' => NULL, 'gmt_offset' => -12,
			), array(
				'id' => 5504, 'country_id' => 135, 'name' => 'Ohrid', 'name_ru' => 'Охрид', 'gmt_offset' => 1,
			), array(
				'id' => 5505, 'country_id' => 29, 'name' => 'Oiapoque', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 5506, 'country_id' => 216, 'name' => 'Oil City, PA', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 5507, 'country_id' => 107, 'name' => 'Oita', 'name_ru' => 'Оита', 'gmt_offset' => -9,
			), array(
				'id' => 5508, 'country_id' => 95, 'name' => 'Okaba', 'name_ru' => 'Окаба', 'gmt_offset' => -9,
			), array(
				'id' => 5509, 'country_id' => 95, 'name' => 'Okao', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 5510, 'country_id' => 151, 'name' => 'Okaukuejo', 'name_ru' => 'Окаукуйэхо', 'gmt_offset' => -2,
			), array(
				'id' => 5511, 'country_id' => 107, 'name' => 'Okayama', 'name_ru' => 'Окаяма', 'gmt_offset' => -9,
			), array(
				'id' => 5512, 'country_id' => 216, 'name' => 'Okeechobee', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 5513, 'country_id' => 180, 'name' => 'Okhotsk', 'name_ru' => 'Охотск', 'gmt_offset' => 11,
			), array(
				'id'         => 5514, 'country_id' => 107, 'name' => 'Oki Island', 'name_ru' => 'Оки-Айленд',
				'gmt_offset' => -9,
			), array(
				'id' => 5515, 'country_id' => 107, 'name' => 'Okinawa', 'name_ru' => 'Окинава', 'gmt_offset' => 9,
			), array(
				'id'         => 5516, 'country_id' => 107, 'name' => 'Okino Erabu', 'name_ru' => 'Окино-Эрабу',
				'gmt_offset' => -9,
			), array(
				'id'         => 5517, 'country_id' => 216, 'name' => 'Oklahoma City', 'name_ru' => 'Оклахома Сити',
				'gmt_offset' => -6,
			), array(
				'id' => 5518, 'country_id' => 216, 'name' => 'Okmulgee', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5519, 'country_id' => 72, 'name' => 'Okondja', 'name_ru' => 'Оконджа', 'gmt_offset' => -1,
			), array(
				'id' => 5520, 'country_id' => 39, 'name' => 'Okoyo', 'name_ru' => 'Окойо', 'gmt_offset' => -1,
			), array(
				'id' => 5521, 'country_id' => 167, 'name' => 'Oksapmin', 'name_ru' => 'Оксапмин', 'gmt_offset' => -10,
			), array(
				'id' => 5522, 'country_id' => 95, 'name' => 'Oksibil', 'name_ru' => 'Оксибил', 'gmt_offset' => -9,
			), array(
				'id'         => 5523, 'country_id' => 180, 'name' => 'Oktiabrskij', 'name_ru' => 'Октябрьский',
				'gmt_offset' => 6,
			), array(
				'id' => 5524, 'country_id' => 107, 'name' => 'Okushiri', 'name_ru' => 'Окусири', 'gmt_offset' => -9,
			), array(
				'id'         => 5525, 'country_id' => 102, 'name' => 'Olafsfjordur', 'name_ru' => 'Олаффьордур',
				'gmt_offset' => 0,
			), array(
				'id' => 5526, 'country_id' => 102, 'name' => 'Olafsvik', 'name_ru' => 'Олафсвик', 'gmt_offset' => 0,
			), array(
				'id' => 5527, 'country_id' => 91, 'name' => 'Olanchito', 'name_ru' => 'Оланчито', 'gmt_offset' => 6,
			), array(
				'id' => 5528, 'country_id' => 216, 'name' => 'Olathe, KS', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 5529, 'country_id' => 11, 'name' => 'Olavarria', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 5530, 'country_id' => 103, 'name' => 'Olbia', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 5531, 'country_id' => 35, 'name' => 'Old Crow', 'name_ru' => NULL, 'gmt_offset' => 21,
			), array(
				'id' => 5532, 'country_id' => 35, 'name' => 'Old Fort Bay', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 5533, 'country_id' => 216, 'name' => 'Old Harbor', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 5534, 'country_id' => 216, 'name' => 'Old Town', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 5535, 'country_id' => 216, 'name' => 'Olean', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 5536, 'country_id' => 216, 'name' => 'Olga Bay', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 5537, 'country_id' => 216, 'name' => 'Olive Branch', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5538, 'country_id' => 216, 'name' => 'Olney', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5539, 'country_id' => 52, 'name' => 'Olomouc', 'name_ru' => 'Оломоуц', 'gmt_offset' => -1,
			), array(
				'id' => 5540, 'country_id' => 224, 'name' => 'Olpoi', 'name_ru' => 'Олпой', 'gmt_offset' => -11,
			), array(
				'id' => 5541, 'country_id' => 167, 'name' => 'Olsobip', 'name_ru' => 'Олсобип', 'gmt_offset' => -10,
			), array(
				'id' => 5542, 'country_id' => 216, 'name' => 'Olympia', 'name_ru' => 'Олимпия', 'gmt_offset' => 8,
			), array(
				'id' => 5543, 'country_id' => 14, 'name' => 'Olympic Dam', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 5544, 'country_id' => 216, 'name' => 'Omaha', 'name_ru' => 'Омаха', 'gmt_offset' => 6,
			), array(
				'id' => 5545, 'country_id' => 216, 'name' => 'Omak', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 5546, 'country_id' => 72, 'name' => 'Omboue', 'name_ru' => 'Омбуэ', 'gmt_offset' => -1,
			), array(
				'id' => 5547, 'country_id' => 151, 'name' => 'Omega', 'name_ru' => 'Омега', 'gmt_offset' => -2,
			), array(
				'id' => 5548, 'country_id' => 101, 'name' => 'Omidieh', 'name_ru' => NULL, 'gmt_offset' => 3.5,
			), array(
				'id' => 5549, 'country_id' => 167, 'name' => 'Omkalai', 'name_ru' => 'Омкалай', 'gmt_offset' => -10,
			), array(
				'id' => 5550, 'country_id' => 167, 'name' => 'Omora', 'name_ru' => 'Омора', 'gmt_offset' => -10,
			), array(
				'id' => 5551, 'country_id' => 180, 'name' => 'Omsk', 'name_ru' => 'Омск', 'gmt_offset' => 7,
			), array(
				'id' => 5552, 'country_id' => 107, 'name' => 'Omura', 'name_ru' => 'Омура', 'gmt_offset' => 9,
			), array(
				'id' => 5553, 'country_id' => 151, 'name' => 'Ondangwa', 'name_ru' => 'Ондангва', 'gmt_offset' => 1,
			), array(
				'id' => 5554, 'country_id' => 216, 'name' => 'Oneill', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5555, 'country_id' => 216, 'name' => 'Oneonta', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 5556, 'country_id' => 183, 'name' => 'Onepusu', 'name_ru' => NULL, 'gmt_offset' => -11,
			), array(
				'id'         => 5557, 'country_id' => 151, 'name' => 'Ongava Game Reserve', 'name_ru' => NULL,
				'gmt_offset' => 0,
			), array(
				'id' => 5558, 'country_id' => 9, 'name' => 'Ongiva', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 5559, 'country_id' => 216, 'name' => 'Onion Bay', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 5560, 'country_id' => 67, 'name' => 'Ono I Lau', 'name_ru' => 'Оно-И-Лау', 'gmt_offset' => -12,
			), array(
				'id' => 5561, 'country_id' => 167, 'name' => 'Ononge', 'name_ru' => 'Ононге', 'gmt_offset' => -10,
			), array(
				'id' => 5562, 'country_id' => 111, 'name' => 'Onotoa', 'name_ru' => 'Онотоа', 'gmt_offset' => -12,
			), array(
				'id' => 5563, 'country_id' => 14, 'name' => 'Onslow', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 5564, 'country_id' => 165, 'name' => 'Ontario', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5565, 'country_id' => 183, 'name' => 'Ontong Java', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5566, 'country_id' => 14, 'name' => 'Oodnadatta', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 5567, 'country_id' => 35, 'name' => 'Opapamiska Lake', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5568, 'country_id' => 216, 'name' => 'Opelousas', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5569, 'country_id' => 167, 'name' => 'Open Bay', 'name_ru' => 'Опен-Бей', 'gmt_offset' => -10,
			), array(
				'id' => 5570, 'country_id' => 151, 'name' => 'Opuwa', 'name_ru' => 'Опува', 'gmt_offset' => -2,
			), array(
				'id' => 5571, 'country_id' => 80, 'name' => 'Oqatsut', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5572, 'country_id' => 178, 'name' => 'Oradea', 'name_ru' => 'Орадя', 'gmt_offset' => -2,
			), array(
				'id' => 5573, 'country_id' => 167, 'name' => 'Oram', 'name_ru' => 'Орам', 'gmt_offset' => -10,
			), array(
				'id' => 5574, 'country_id' => 11, 'name' => 'Oran', 'name_ru' => 'Оран', 'gmt_offset' => 3,
			), array(
				'id' => 5575, 'country_id' => 216, 'name' => 'Orange', 'name_ru' => 'Орандж', 'gmt_offset' => -8,
			), array(
				'id' => 5576, 'country_id' => 216, 'name' => 'Orange County', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id'         => 5577, 'country_id' => 34, 'name' => 'Orange Walk', 'name_ru' => 'Ориндж-Уолк',
				'gmt_offset' => 6,
			), array(
				'id' => 5578, 'country_id' => 216, 'name' => 'Orangeburg', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id'         => 5579, 'country_id' => 151, 'name' => 'Oranjemund', 'name_ru' => 'Ораньемунд',
				'gmt_offset' => -2,
			), array(
				'id' => 5580, 'country_id' => 32, 'name' => 'Orapa', 'name_ru' => 'Орапа', 'gmt_offset' => -2,
			), array(
				'id' => 5581, 'country_id' => 14, 'name' => 'Orbost', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id'         => 5582, 'country_id' => 14, 'name' => 'Orchid Beach', 'name_ru' => 'Орхид-Бич',
				'gmt_offset' => -10,
			), array(
				'id'         => 5583, 'country_id' => 211, 'name' => 'Orchid Island', 'name_ru' => 'Орхид-Айленд',
				'gmt_offset' => -8,
			), array(
				'id' => 5584, 'country_id' => 14, 'name' => 'Ord River', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 5585, 'country_id' => 186, 'name' => 'Orebro', 'name_ru' => 'Оребро', 'gmt_offset' => 1,
			), array(
				'id' => 5586, 'country_id' => 180, 'name' => 'Orel', 'name_ru' => 'Орел', 'gmt_offset' => 4,
			), array(
				'id' => 5587, 'country_id' => 180, 'name' => 'Orenburg', 'name_ru' => 'Оренбург', 'gmt_offset' => 6,
			), array(
				'id' => 5588, 'country_id' => 167, 'name' => 'Oria', 'name_ru' => 'Ориа', 'gmt_offset' => -10,
			), array(
				'id' => 5589, 'country_id' => 14, 'name' => 'Orientos', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 5590, 'country_id' => 29, 'name' => 'Orinduik', 'name_ru' => 'Ориндук', 'gmt_offset' => 0,
			), array(
				'id' => 5591, 'country_id' => 29, 'name' => 'Oriximina', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 5592, 'country_id' => 73, 'name' => 'Orkney Island', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5593, 'country_id' => 158, 'name' => 'Orland', 'name_ru' => 'Орланд', 'gmt_offset' => -1,
			), array(
				'id' => 5594, 'country_id' => 216, 'name' => 'Orlando', 'name_ru' => 'Орландо', 'gmt_offset' => 5,
			), array(
				'id' => 5595, 'country_id' => 216, 'name' => 'Orlando, FL', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 5596, 'country_id' => 71, 'name' => 'Orleans', 'name_ru' => 'Орлеан', 'gmt_offset' => -1,
			), array(
				'id' => 5597, 'country_id' => 169, 'name' => 'Ormara', 'name_ru' => 'Ормара', 'gmt_offset' => -5,
			), array(
				'id' => 5598, 'country_id' => 168, 'name' => 'Ormoc', 'name_ru' => 'Ормок', 'gmt_offset' => -8,
			), array(
				'id'         => 5599, 'country_id' => 186, 'name' => 'Ornskoldsvik', 'name_ru' => 'Орнсколдсвик',
				'gmt_offset' => -1,
			), array(
				'id' => 5600, 'country_id' => 46, 'name' => 'Orocue', 'name_ru' => 'Ороке', 'gmt_offset' => 5,
			), array(
				'id' => 5601, 'country_id' => 216, 'name' => 'Oroville', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id'         => 5602, 'country_id' => 14, 'name' => 'Orpheus Island Resort', 'name_ru' => NULL,
				'gmt_offset' => -10,
			), array(
				'id' => 5603, 'country_id' => 180, 'name' => 'Orsk', 'name_ru' => 'Орск', 'gmt_offset' => 6,
			), array(
				'id' => 5604, 'country_id' => 158, 'name' => 'Orsta-Volda', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 5605, 'country_id' => 28, 'name' => 'Oruro', 'name_ru' => 'Оруро', 'gmt_offset' => 4,
			), array(
				'id' => 5606, 'country_id' => 216, 'name' => 'Osage Beach', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5607, 'country_id' => 107, 'name' => 'Osaka', 'name_ru' => 'Осака', 'gmt_offset' => 9,
			), array(
				'id' => 5608, 'country_id' => 115, 'name' => 'Osan', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 5609, 'country_id' => 216, 'name' => 'Osceola', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5610, 'country_id' => 216, 'name' => 'Oscoda', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 5611, 'country_id' => 109, 'name' => 'Osh', 'name_ru' => 'Ош', 'gmt_offset' => 6,
			), array(
				'id' => 5612, 'country_id' => 151, 'name' => 'Oshakati', 'name_ru' => 'Ошакати', 'gmt_offset' => -2,
			), array(
				'id' => 5613, 'country_id' => 35, 'name' => 'Oshawa', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5614, 'country_id' => 107, 'name' => 'Oshima', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 5615, 'country_id' => 216, 'name' => 'Oshkosh', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5616, 'country_id' => 92, 'name' => 'Osijek', 'name_ru' => 'Осиек', 'gmt_offset' => 1,
			), array(
				'id' => 5617, 'country_id' => 216, 'name' => 'Oskaloosa', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5618, 'country_id' => 186, 'name' => 'Oskarshamn', 'name_ru' => 'Оскархамн', 'gmt_offset' => -1,
			), array(
				'id' => 5619, 'country_id' => 158, 'name' => 'Oslo', 'name_ru' => 'Осло', 'gmt_offset' => 1,
			), array(
				'id' => 5620, 'country_id' => 99, 'name' => 'Osmanabad', 'name_ru' => 'Османабад', 'gmt_offset' => -5.5,
			), array(
				'id' => 5621, 'country_id' => 43, 'name' => 'Osorno', 'name_ru' => 'Осорно', 'gmt_offset' => 4,
			), array(
				'id' => 5622, 'country_id' => 167, 'name' => 'Ossima', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 5623, 'country_id' => 20, 'name' => 'Ostend', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 5624, 'country_id' => 186, 'name' => 'Ostersund', 'name_ru' => 'Остерсанд', 'gmt_offset' => -1,
			), array(
				'id' => 5625, 'country_id' => 52, 'name' => 'Ostrava', 'name_ru' => 'Острава', 'gmt_offset' => 1,
			), array(
				'id'         => 5626, 'country_id' => 151, 'name' => 'Otjiwarongo', 'name_ru' => 'Отьиваронго',
				'gmt_offset' => 0,
			), array(
				'id' => 5627, 'country_id' => 35, 'name' => 'Ottawa', 'name_ru' => 'Оттава', 'gmt_offset' => -5,
			), array(
				'id' => 5628, 'country_id' => 216, 'name' => 'Otto', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 5629, 'country_id' => 216, 'name' => 'Ottumwa', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5630, 'country_id' => 46, 'name' => 'Otu', 'name_ru' => 'Оту', 'gmt_offset' => 5,
			), array(
				'id' => 5631, 'country_id' => 38, 'name' => 'Ouadda', 'name_ru' => 'Уадда', 'gmt_offset' => -1,
			), array(
				'id' => 5632, 'country_id' => 21, 'name' => 'Ouagadougou', 'name_ru' => 'Уагадугу', 'gmt_offset' => 0,
			), array(
				'id' => 5633, 'country_id' => 21, 'name' => 'Ouahigouya', 'name_ru' => 'Уахигоуя', 'gmt_offset' => 0,
			), array(
				'id'         => 5634, 'country_id' => 38, 'name' => 'Ouanda Djalle', 'name_ru' => 'Уанда-Джалле',
				'gmt_offset' => -1,
			), array(
				'id' => 5635, 'country_id' => 72, 'name' => 'Ouanga', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 5636, 'country_id' => 41, 'name' => 'Ouango Fitini', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5637, 'country_id' => 58, 'name' => 'Ouargla', 'name_ru' => 'Уаргла', 'gmt_offset' => -1,
			), array(
				'id' => 5638, 'country_id' => 129, 'name' => 'Ouarzazate', 'name_ru' => 'Уазазат', 'gmt_offset' => 0,
			), array(
				'id' => 5639, 'country_id' => 119, 'name' => 'Oudomxay', 'name_ru' => 'Удомхей', 'gmt_offset' => 7,
			), array(
				'id' => 5640, 'country_id' => 228, 'name' => 'Oudtshoorn', 'name_ru' => 'Оудсхорн', 'gmt_offset' => -2,
			), array(
				'id' => 5641, 'country_id' => 39, 'name' => 'Ouesso', 'name_ru' => 'Уэссо', 'gmt_offset' => -1,
			), array(
				'id' => 5642, 'country_id' => 129, 'name' => 'Oujda', 'name_ru' => 'Уджда', 'gmt_offset' => 0,
			), array(
				'id' => 5643, 'country_id' => 66, 'name' => 'Oulu', 'name_ru' => 'Оулу', 'gmt_offset' => -2,
			), array(
				'id' => 5644, 'country_id' => 200, 'name' => 'Oum Hadjer', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 5645, 'country_id' => 173, 'name' => 'Ourilandia', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5646, 'country_id' => 29, 'name' => 'Ourinhos', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 5647, 'country_id' => 73, 'name' => 'Outer Skerries', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5648, 'country_id' => 152, 'name' => 'Ouvea', 'name_ru' => NULL, 'gmt_offset' => -11,
			), array(
				'id' => 5649, 'country_id' => 14, 'name' => 'Ouyen', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 5650, 'country_id' => 216, 'name' => 'Ouzinkie', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 5651, 'country_id' => 43, 'name' => 'Ovalle', 'name_ru' => 'Овайе', 'gmt_offset' => 4,
			), array(
				'id' => 5652, 'country_id' => 20, 'name' => 'Overberg', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 5653, 'country_id' => 64, 'name' => 'Oviedo/Aviles', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 5654, 'country_id' => 39, 'name' => 'Owando', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 5655, 'country_id' => 216, 'name' => 'Owatonna', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5656, 'country_id' => 35, 'name' => 'Owekeno Village', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 5657, 'country_id' => 35, 'name' => 'Owen Sound', 'name_ru' => 'Оуэн Саунд', 'gmt_offset' => -5,
			), array(
				'id' => 5658, 'country_id' => 72, 'name' => 'Owendo', 'name_ru' => 'Овендо', 'gmt_offset' => -1,
			), array(
				'id' => 5659, 'country_id' => 216, 'name' => 'Owensboro', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5660, 'country_id' => 73, 'name' => 'Oxford', 'name_ru' => 'Оксфорд', 'gmt_offset' => 0,
			), array(
				'id' => 5661, 'country_id' => 35, 'name' => 'Oxford House', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5662, 'country_id' => 216, 'name' => 'Oxford, CT', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 5663, 'country_id' => 72, 'name' => 'Oyem', 'name_ru' => 'Оем', 'gmt_offset' => -1,
			), array(
				'id'         => 5664, 'country_id' => 168, 'name' => 'Ozamis City', 'name_ru' => 'Озамис-Сити',
				'gmt_offset' => -8,
			), array(
				'id' => 5665, 'country_id' => 170, 'name' => 'Ozark', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5666, 'country_id' => 216, 'name' => 'Ozona', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5667, 'country_id' => 137, 'name' => 'Pa-an', 'name_ru' => NULL, 'gmt_offset' => -6.5,
			), array(
				'id' => 5668, 'country_id' => 152, 'name' => 'Paama', 'name_ru' => 'Паама', 'gmt_offset' => 0,
			), array(
				'id' => 5669, 'country_id' => 80, 'name' => 'Paamiut', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 5670, 'country_id' => 216, 'name' => 'Pacific City, OH', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 5671, 'country_id' => 67, 'name' => 'Pacific Harbor', 'name_ru' => NULL, 'gmt_offset' => -12,
			), array(
				'id' => 5672, 'country_id' => 216, 'name' => 'Pack Creek', 'name_ru' => NULL, 'gmt_offset' => 12,
			), array(
				'id' => 5673, 'country_id' => 95, 'name' => 'Padang', 'name_ru' => 'Паданг', 'gmt_offset' => 7,
			), array(
				'id' => 5674, 'country_id' => 53, 'name' => 'Paderborn', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 5675, 'country_id' => 216, 'name' => 'Paducah, KY', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 5676, 'country_id' => 216, 'name' => 'Paf Warren', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 5677, 'country_id' => 168, 'name' => 'Pagadian', 'name_ru' => 'Пагадиан', 'gmt_offset' => -8,
			), array(
				'id' => 5678, 'country_id' => 216, 'name' => 'Page', 'name_ru' => 'Паг', 'gmt_offset' => 7,
			), array(
				'id' => 5679, 'country_id' => 12, 'name' => 'Pago Pago', 'name_ru' => NULL, 'gmt_offset' => 11,
			), array(
				'id'         => 5680, 'country_id' => 45, 'name' => 'Pagosa Springs', 'name_ru' => 'Пагоса Спрингз',
				'gmt_offset' => 0,
			), array(
				'id' => 5681, 'country_id' => 216, 'name' => 'Pahokee', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 5682, 'country_id' => 167, 'name' => 'Paiela', 'name_ru' => 'Пайела', 'gmt_offset' => 0,
			), array(
				'id' => 5683, 'country_id' => 110, 'name' => 'Pailin', 'name_ru' => 'Пайлинь', 'gmt_offset' => -7,
			), array(
				'id' => 5684, 'country_id' => 216, 'name' => 'Paimiut', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 5685, 'country_id' => 216, 'name' => 'Painesville', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 5686, 'country_id' => 216, 'name' => 'Painter Creek', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 5687, 'country_id' => 66, 'name' => 'Pajala', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id'         => 5688, 'country_id' => 162, 'name' => 'Pakatoa Island', 'name_ru' => 'Пакатоа-Айленд',
				'gmt_offset' => -12,
			), array(
				'id' => 5689, 'country_id' => 137, 'name' => 'Pakokku', 'name_ru' => 'Пакокку', 'gmt_offset' => -6.5,
			), array(
				'id' => 5690, 'country_id' => 202, 'name' => 'Paksane', 'name_ru' => 'Паксан', 'gmt_offset' => 0,
			), array(
				'id' => 5691, 'country_id' => 119, 'name' => 'Pakse', 'name_ru' => 'Паксе', 'gmt_offset' => -7,
			), array(
				'id' => 5692, 'country_id' => 35, 'name' => 'Pakuashipi', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 5693, 'country_id' => 214, 'name' => 'Pakuba', 'name_ru' => 'Пакуба', 'gmt_offset' => -3,
			), array(
				'id' => 5694, 'country_id' => 200, 'name' => 'Pala', 'name_ru' => 'Пала', 'gmt_offset' => -1,
			), array(
				'id' => 5695, 'country_id' => 91, 'name' => 'Palacios', 'name_ru' => 'Палачос', 'gmt_offset' => 6,
			), array(
				'id' => 5696, 'country_id' => 95, 'name' => 'Palangkaraya', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 5697, 'country_id' => 46, 'name' => 'Palanquero', 'name_ru' => 'Паланкеро', 'gmt_offset' => -5,
			), array(
				'id' => 5698, 'country_id' => 95, 'name' => 'Palembang', 'name_ru' => 'Палембанг', 'gmt_offset' => -7,
			), array(
				'id' => 5699, 'country_id' => 148, 'name' => 'Palenque', 'name_ru' => 'Паленке', 'gmt_offset' => 6,
			), array(
				'id' => 5700, 'country_id' => 103, 'name' => 'Palermo', 'name_ru' => 'Палермо', 'gmt_offset' => 1,
			), array(
				'id' => 5701, 'country_id' => 216, 'name' => 'Palestine, TX', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 5702, 'country_id' => 78, 'name' => 'Palibelo', 'name_ru' => 'Палибело', 'gmt_offset' => 0,
			), array(
				'id'         => 5703, 'country_id' => 219, 'name' => 'Palm Island', 'name_ru' => 'Пам-Айленд',
				'gmt_offset' => 4,
			), array(
				'id'         => 5704, 'country_id' => 216, 'name' => 'Palm Springs', 'name_ru' => 'Палм Спрингс',
				'gmt_offset' => 8,
			), array(
				'id' => 5705, 'country_id' => 150, 'name' => 'Palma', 'name_ru' => 'Палма', 'gmt_offset' => -2,
			), array(
				'id' => 5706, 'country_id' => 64, 'name' => 'Palma Mallorca', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 5707, 'country_id' => 47, 'name' => 'Palmar', 'name_ru' => 'Палмар', 'gmt_offset' => 6,
			), array(
				'id' => 5708, 'country_id' => 220, 'name' => 'Palmarito', 'name_ru' => 'Палмарито', 'gmt_offset' => 4,
			), array(
				'id' => 5709, 'country_id' => 29, 'name' => 'Palmas', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 5710, 'country_id' => 216, 'name' => 'Palmdale, Ca', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 5711, 'country_id' => 216, 'name' => 'Palmer', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id'         => 5712, 'country_id' => 162, 'name' => 'Palmerston North', 'name_ru' => 'Палмерстон Норт',
				'gmt_offset' => 12,
			), array(
				'id' => 5713, 'country_id' => 197, 'name' => 'Palmyra', 'name_ru' => 'Пальмира', 'gmt_offset' => -2,
			), array(
				'id' => 5714, 'country_id' => 216, 'name' => 'Palo Alto', 'name_ru' => 'Пало Альто', 'gmt_offset' => 8,
			), array(
				'id' => 5715, 'country_id' => 194, 'name' => 'Paloemeu', 'name_ru' => 'Паломеу', 'gmt_offset' => 0,
			), array(
				'id' => 5716, 'country_id' => 148, 'name' => 'Paloma Grande', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5717, 'country_id' => 95, 'name' => 'Palu', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 5718, 'country_id' => 21, 'name' => 'Pama', 'name_ru' => 'Пама', 'gmt_offset' => 0,
			), array(
				'id' => 5719, 'country_id' => 167, 'name' => 'Pambwa', 'name_ru' => 'Памбва', 'gmt_offset' => -10,
			), array(
				'id' => 5720, 'country_id' => 149, 'name' => 'Pamol', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 5721, 'country_id' => 216, 'name' => 'Pampa', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5722, 'country_id' => 64, 'name' => 'Pamplona', 'name_ru' => 'Памплона', 'gmt_offset' => -1,
			), array(
				'id' => 5723, 'country_id' => 45, 'name' => 'Pan Yu', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5724, 'country_id' => 45, 'name' => 'Pan Zhi Hua', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 5725, 'country_id' => 164, 'name' => 'Panama City', 'name_ru' => 'Панама Сити',
				'gmt_offset' => 5,
			), array(
				'id' => 5726, 'country_id' => 103, 'name' => 'Panarea', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5727, 'country_id' => 14, 'name' => 'Pandie Pandie', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 5728, 'country_id' => 125, 'name' => 'Panevezys', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 5729, 'country_id' => 167, 'name' => 'Pangia', 'name_ru' => 'Пангиа', 'gmt_offset' => -10,
			), array(
				'id'         => 5730, 'country_id' => 95, 'name' => 'Pangkalanbuun', 'name_ru' => 'Пангкаланбуун',
				'gmt_offset' => -7,
			), array(
				'id'         => 5731, 'country_id' => 95, 'name' => 'Pangkalpinang', 'name_ru' => 'Пангкалпинанг',
				'gmt_offset' => 7,
			), array(
				'id' => 5732, 'country_id' => 149, 'name' => 'Pangkor', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5733, 'country_id' => 35, 'name' => 'Pangnirtung', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 5734, 'country_id' => 167, 'name' => 'Pangoa', 'name_ru' => 'Пангоа', 'gmt_offset' => -10,
			), array(
				'id' => 5735, 'country_id' => 216, 'name' => 'Panguitch', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 5736, 'country_id' => 169, 'name' => 'Panjgur', 'name_ru' => 'Панджгур', 'gmt_offset' => -5,
			), array(
				'id' => 5737, 'country_id' => 103, 'name' => 'Pantelleria', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 5738, 'country_id' => 99, 'name' => 'Pantnagar', 'name_ru' => 'Пантнагар', 'gmt_offset' => -5.5,
			), array(
				'id' => 5739, 'country_id' => 216, 'name' => 'Paonia', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 5740, 'country_id' => 73, 'name' => 'Papa Stour', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 5741, 'country_id' => 73, 'name' => 'Papa Westray', 'name_ru' => 'Папа-Вестрей',
				'gmt_offset' => 0,
			), array(
				'id' => 5742, 'country_id' => 166, 'name' => 'Papeete', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 5743, 'country_id' => 51, 'name' => 'Paphos', 'name_ru' => 'Пафос', 'gmt_offset' => 2,
			), array(
				'id' => 5744, 'country_id' => 137, 'name' => 'Papun', 'name_ru' => 'Папун', 'gmt_offset' => -6.5,
			), array(
				'id'         => 5745, 'country_id' => 169, 'name' => 'Para Chinar', 'name_ru' => 'Пара-Чинар',
				'gmt_offset' => -5,
			), array(
				'id' => 5746, 'country_id' => 14, 'name' => 'Paraburdoo', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 5747, 'country_id' => 35, 'name' => 'Paradise River', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 5748, 'country_id' => 216, 'name' => 'Paragould', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5749, 'country_id' => 25, 'name' => 'Parakou', 'name_ru' => 'Параку', 'gmt_offset' => -1,
			), array(
				'id' => 5750, 'country_id' => 167, 'name' => 'Param', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 5751, 'country_id' => 89, 'name' => 'Paramakotoi', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 5752, 'country_id' => 194, 'name' => 'Paramaribo', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 5753, 'country_id' => 11, 'name' => 'Parana', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 5754, 'country_id' => 29, 'name' => 'Paranagua', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 5755, 'country_id' => 29, 'name' => 'Paranaiba', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 5756, 'country_id' => 29, 'name' => 'Paranavai', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id'         => 5757, 'country_id' => 162, 'name' => 'Paraparaumu', 'name_ru' => 'Парапарауму',
				'gmt_offset' => 12,
			), array(
				'id' => 5758, 'country_id' => 183, 'name' => 'Parasi', 'name_ru' => 'Параси', 'gmt_offset' => -11,
			), array(
				'id'         => 5759, 'country_id' => 46, 'name' => 'Paratebueno', 'name_ru' => 'Паратебуэно',
				'gmt_offset' => -5,
			), array(
				'id' => 5760, 'country_id' => 14, 'name' => 'Pardoo', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 5761, 'country_id' => 52, 'name' => 'Pardubice', 'name_ru' => 'Пардубицы', 'gmt_offset' => 1,
			), array(
				'id' => 5762, 'country_id' => 29, 'name' => 'Parintins', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 5763, 'country_id' => 71, 'name' => 'Paris', 'name_ru' => 'Париж', 'gmt_offset' => 1,
			), array(
				'id' => 5764, 'country_id' => 216, 'name' => 'Park Falls', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5765, 'country_id' => 216, 'name' => 'Park Rapids', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id'         => 5766, 'country_id' => 216, 'name' => 'Parkersburg', 'name_ru' => 'Паркерсбург',
				'gmt_offset' => 5,
			), array(
				'id' => 5767, 'country_id' => 14, 'name' => 'Parkes', 'name_ru' => 'Паркес', 'gmt_offset' => -10,
			), array(
				'id' => 5768, 'country_id' => 216, 'name' => 'Parks', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 5769, 'country_id' => 103, 'name' => 'Parma', 'name_ru' => 'Парма', 'gmt_offset' => 1,
			), array(
				'id' => 5770, 'country_id' => 29, 'name' => 'Parnaiba', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 5771, 'country_id' => 14, 'name' => 'Parndana', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 5772, 'country_id' => 60, 'name' => 'Parnu', 'name_ru' => 'Парну', 'gmt_offset' => 2,
			), array(
				'id' => 5773, 'country_id' => 31, 'name' => 'Paro', 'name_ru' => 'Паро', 'gmt_offset' => 5.5,
			), array(
				'id' => 5774, 'country_id' => 85, 'name' => 'Paros', 'name_ru' => 'Парос', 'gmt_offset' => -2,
			), array(
				'id' => 5775, 'country_id' => 35, 'name' => 'Parry Sound', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 5776, 'country_id' => 101, 'name' => 'Parsabad', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5777, 'country_id' => 216, 'name' => 'Parsons', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5778, 'country_id' => 89, 'name' => 'Paruima', 'name_ru' => 'Парума', 'gmt_offset' => 3,
			), array(
				'id' => 5779, 'country_id' => 216, 'name' => 'Pasadena', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 5780, 'country_id' => 216, 'name' => 'Pascagoula', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5781, 'country_id' => 216, 'name' => 'Pasco, WA', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 5782, 'country_id' => 99, 'name' => 'Pasighat', 'name_ru' => 'Пасигхат', 'gmt_offset' => -5.5,
			), array(
				'id' => 5783, 'country_id' => 149, 'name' => 'Pasir Gudang', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id'         => 5784, 'country_id' => 95, 'name' => 'Pasir Pangarayan', 'name_ru' => 'Пасир-Пангараян',
				'gmt_offset' => -7,
			), array(
				'id' => 5785, 'country_id' => 169, 'name' => 'Pasni', 'name_ru' => 'Пасни', 'gmt_offset' => -5,
			), array(
				'id'         => 5786, 'country_id' => 86, 'name' => 'Paso Caballos', 'name_ru' => 'Пасо-Кабаллос',
				'gmt_offset' => 6,
			), array(
				'id' => 5787, 'country_id' => 11, 'name' => 'Paso De Los Libres', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 5788, 'country_id' => 216, 'name' => 'Paso Robles', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 5789, 'country_id' => 29, 'name' => 'Passo Fundo', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 5790, 'country_id' => 29, 'name' => 'Passos', 'name_ru' => 'Пассос', 'gmt_offset' => 3,
			), array(
				'id' => 5791, 'country_id' => 59, 'name' => 'Pastaza', 'name_ru' => 'Пастаца', 'gmt_offset' => 5,
			), array(
				'id' => 5792, 'country_id' => 46, 'name' => 'Pasto', 'name_ru' => 'Пасто', 'gmt_offset' => 5,
			), array(
				'id' => 5793, 'country_id' => 99, 'name' => 'Pathankot', 'name_ru' => 'Патханкот', 'gmt_offset' => -5.5,
			), array(
				'id' => 5794, 'country_id' => 99, 'name' => 'Patna', 'name_ru' => 'Патна', 'gmt_offset' => 5.5,
			), array(
				'id' => 5795, 'country_id' => 29, 'name' => 'Pato Branco', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id'         => 5796, 'country_id' => 202, 'name' => 'Patong Beach', 'name_ru' => 'Патонг-Бич',
				'gmt_offset' => 7,
			), array(
				'id' => 5797, 'country_id' => 6, 'name' => 'Patos De Minas', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5798, 'country_id' => 85, 'name' => 'Patras', 'name_ru' => 'Патрас', 'gmt_offset' => -2,
			), array(
				'id'         => 5799, 'country_id' => 102, 'name' => 'Patreksfjordur', 'name_ru' => 'Патрексфьордур',
				'gmt_offset' => 0,
			), array(
				'id' => 5800, 'country_id' => 202, 'name' => 'Pattani', 'name_ru' => 'Паттани', 'gmt_offset' => -7,
			), array(
				'id' => 5801, 'country_id' => 202, 'name' => 'Pattaya', 'name_ru' => 'Паттайя', 'gmt_offset' => -7,
			), array(
				'id' => 5802, 'country_id' => 216, 'name' => 'Patterson', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 5803, 'country_id' => 216, 'name' => 'Patuxent River', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5804, 'country_id' => 71, 'name' => 'Pau', 'name_ru' => 'По', 'gmt_offset' => 1,
			), array(
				'id' => 5805, 'country_id' => 137, 'name' => 'Pauk', 'name_ru' => 'Паук', 'gmt_offset' => -6.5,
			), array(
				'id' => 5806, 'country_id' => 35, 'name' => 'Paulatuk', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 5807, 'country_id' => 29, 'name' => 'Paulo Afonso', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 5808, 'country_id' => 216, 'name' => 'Pauloff Harbor', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 5809, 'country_id' => 118, 'name' => 'Pavlodar', 'name_ru' => 'Павлодар', 'gmt_offset' => 6,
			), array(
				'id' => 5810, 'country_id' => 47, 'name' => 'Pavones', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5811, 'country_id' => 65, 'name' => 'Pawi', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 5812, 'country_id' => 216, 'name' => 'Pawtucket, RI', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 5813, 'country_id' => 46, 'name' => 'Payan', 'name_ru' => 'Пайан', 'gmt_offset' => 5,
			), array(
				'id' => 5814, 'country_id' => 217, 'name' => 'Paysandu', 'name_ru' => 'Пайсанду', 'gmt_offset' => 3,
			), array(
				'id' => 5815, 'country_id' => 216, 'name' => 'Payson', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 5816, 'country_id' => 46, 'name' => 'Paz De Ariporo', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 5817, 'country_id' => 35, 'name' => 'Peace River', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 5818, 'country_id' => 216, 'name' => 'Peach Springs', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 5819, 'country_id' => 35, 'name' => 'Peawanuck', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 5820, 'country_id' => 150, 'name' => 'Pebane', 'name_ru' => 'Пебане', 'gmt_offset' => -2,
			), array(
				'id' => 5821, 'country_id' => 180, 'name' => 'Pechora', 'name_ru' => 'Печора', 'gmt_offset' => 4,
			), array(
				'id' => 5822, 'country_id' => 216, 'name' => 'Pecos City', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5823, 'country_id' => 220, 'name' => 'Pedernales', 'name_ru' => 'Педерналес', 'gmt_offset' => 4,
			), array(
				'id' => 5824, 'country_id' => 216, 'name' => 'Pedro Bay', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id'      => 5825, 'country_id' => 175, 'name' => 'Pedro Juan Caballero',
				'name_ru' => 'Педро-Хуан-Кабальеро', 'gmt_offset' => 4,
			), array(
				'id' => 5826, 'country_id' => 53, 'name' => 'Peenemuende', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 5827, 'country_id' => 11, 'name' => 'Pehuajo', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 5828, 'country_id' => 95, 'name' => 'Pekanbaru', 'name_ru' => 'Пеканбару', 'gmt_offset' => 7,
			), array(
				'id' => 5829, 'country_id' => 124, 'name' => 'Pelaneng', 'name_ru' => 'Пеланенг', 'gmt_offset' => -2,
			), array(
				'id' => 5830, 'country_id' => 216, 'name' => 'Pelican', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 5831, 'country_id' => 216, 'name' => 'Pell City', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5832, 'country_id' => 216, 'name' => 'Pellston', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 5833, 'country_id' => 29, 'name' => 'Pelotas', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 5834, 'country_id' => 212, 'name' => 'Pemba', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 5835, 'country_id' => 216, 'name' => 'Pembina', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5836, 'country_id' => 35, 'name' => 'Pembroke', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 5837, 'country_id' => 149, 'name' => 'Penang', 'name_ru' => 'Пенанг', 'gmt_offset' => 8,
			), array(
				'id' => 5838, 'country_id' => 35, 'name' => 'Pender Harbor', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 5839, 'country_id' => 216, 'name' => 'Pendleton', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 5840, 'country_id' => 95, 'name' => 'Pendopo', 'name_ru' => 'Пендопо', 'gmt_offset' => -7,
			), array(
				'id' => 5841, 'country_id' => 45, 'name' => 'Peng Lai', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 5842, 'country_id' => 14, 'name' => 'Penneshaw', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 5843, 'country_id' => 14, 'name' => 'Penong', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id'         => 5844, 'country_id' => 42, 'name' => 'Penrhyn Island', 'name_ru' => 'Пенрин-Айленд',
				'gmt_offset' => 10,
			), array(
				'id' => 5845, 'country_id' => 216, 'name' => 'Pensacola', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5846, 'country_id' => 216, 'name' => 'Pensacola, FL', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 5847, 'country_id' => 35, 'name' => 'Penticton', 'name_ru' => 'Пентинктон', 'gmt_offset' => 8,
			), array(
				'id' => 5848, 'country_id' => 180, 'name' => 'Penza', 'name_ru' => 'Пенза', 'gmt_offset' => 4,
			), array(
				'id' => 5849, 'country_id' => 73, 'name' => 'Penzance', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5850, 'country_id' => 216, 'name' => 'Peoria, IL', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 5851, 'country_id' => 14, 'name' => 'Peppers Palm Bay', 'name_ru' => NULL, 'gmt_offset' => 11,
			), array(
				'id' => 5852, 'country_id' => 14, 'name' => 'Peppimenarti', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 5853, 'country_id' => 220, 'name' => 'Peraitepuy', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 5854, 'country_id' => 46, 'name' => 'Pereira', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 5855, 'country_id' => 71, 'name' => 'Perigueux', 'name_ru' => 'Периге', 'gmt_offset' => 1,
			), array(
				'id'         => 5856, 'country_id' => 11, 'name' => 'Perito Moreno', 'name_ru' => 'Перито-Морено',
				'gmt_offset' => 3,
			), array(
				'id' => 5857, 'country_id' => 180, 'name' => 'Perm', 'name_ru' => 'Пермь', 'gmt_offset' => 6,
			), array(
				'id' => 5858, 'country_id' => 71, 'name' => 'Perpignan', 'name_ru' => 'Перпиньян', 'gmt_offset' => 1,
			), array(
				'id' => 5859, 'country_id' => 216, 'name' => 'Perry', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 5860, 'country_id' => 216, 'name' => 'Perry Island', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 5861, 'country_id' => 216, 'name' => 'Perryville', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 5862, 'country_id' => 14, 'name' => 'Perth', 'name_ru' => 'Перт', 'gmt_offset' => 0,
			), array(
				'id' => 5863, 'country_id' => 216, 'name' => 'Peru', 'name_ru' => 'Перу', 'gmt_offset' => 6,
			), array(
				'id' => 5864, 'country_id' => 216, 'name' => 'Peru, Indiana', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 5865, 'country_id' => 103, 'name' => 'Perugia', 'name_ru' => 'Перужия', 'gmt_offset' => -1,
			), array(
				'id' => 5866, 'country_id' => 103, 'name' => 'Pescara', 'name_ru' => 'Пескара', 'gmt_offset' => 1,
			), array(
				'id' => 5867, 'country_id' => 103, 'name' => 'Peschiei', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 5868, 'country_id' => 169, 'name' => 'Peshawar', 'name_ru' => 'Пешавар', 'gmt_offset' => 5,
			), array(
				'id' => 5869, 'country_id' => 35, 'name' => 'Petawawa', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 5870, 'country_id' => 35, 'name' => 'Peterborough', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 5871, 'country_id' => 157, 'name' => 'Petersburg', 'name_ru' => 'Петерсбург', 'gmt_offset' => 0,
			), array(
				'id' => 5872, 'country_id' => 216, 'name' => 'Petersburg, AK', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 5873, 'country_id' => 29, 'name' => 'Petrolina', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id'         => 5874, 'country_id' => 118, 'name' => 'Petropavlovsk', 'name_ru' => 'Петропавловск',
				'gmt_offset' => 12,
			), array(
				'id'      => 5875, 'country_id' => 180, 'name' => 'Petropavlovsk-Kamchats',
				'name_ru' => 'Петропавловск-Камчатский', 'gmt_offset' => 12,
			), array(
				'id'         => 5876, 'country_id' => 180, 'name' => 'Petrozavodsk', 'name_ru' => 'Петрозаводск',
				'gmt_offset' => 4,
			), array(
				'id' => 5877, 'country_id' => 180, 'name' => 'Pevek', 'name_ru' => 'Певек', 'gmt_offset' => 12,
			), array(
				'id' => 5878, 'country_id' => 53, 'name' => 'Pforheim', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 5879, 'country_id' => 228, 'name' => 'Phalaborwa', 'name_ru' => 'Фалаборва', 'gmt_offset' => 2,
			), array(
				'id' => 5880, 'country_id' => 223, 'name' => 'Phan Rang', 'name_ru' => 'Пхань-Ранг', 'gmt_offset' => -7,
			), array(
				'id'         => 5881, 'country_id' => 223, 'name' => 'Phan Thiet', 'name_ru' => 'Пхань-Тхиет',
				'gmt_offset' => -7,
			), array(
				'id'         => 5882, 'country_id' => 202, 'name' => 'Phanom Sarakham', 'name_ru' => 'Пханом-Саракхам',
				'gmt_offset' => -7,
			), array(
				'id'         => 5883, 'country_id' => 159, 'name' => 'Phaplu', 'name_ru' => 'Пхалпу',
				'gmt_offset' => -5.7999999999999998,
			), array(
				'id' => 5884, 'country_id' => 202, 'name' => 'Phetchabun', 'name_ru' => 'Пхетчабун', 'gmt_offset' => 0,
			), array(
				'id'         => 5885, 'country_id' => 202, 'name' => 'Phi Phi Island', 'name_ru' => 'Остров Пхи Пхи',
				'gmt_offset' => -7,
			), array(
				'id'         => 5886, 'country_id' => 61, 'name' => 'Philadelphia', 'name_ru' => 'Филадельфия',
				'gmt_offset' => 2,
			), array(
				'id' => 5887, 'country_id' => 216, 'name' => 'Philip', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id'         => 5888, 'country_id' => 157, 'name' => 'Philipsburg, St. Maarten', 'name_ru' => NULL,
				'gmt_offset' => 0,
			), array(
				'id' => 5889, 'country_id' => 228, 'name' => 'Phinda', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 5890, 'country_id' => 202, 'name' => 'Phitsanulok', 'name_ru' => 'Пхитсанусок',
				'gmt_offset' => -7,
			), array(
				'id' => 5891, 'country_id' => 110, 'name' => 'Phnom Penh', 'name_ru' => 'Пном Пен', 'gmt_offset' => -7,
			), array(
				'id' => 5892, 'country_id' => 216, 'name' => 'Phoenix', 'name_ru' => 'Феникс', 'gmt_offset' => 10,
			), array(
				'id' => 5893, 'country_id' => 119, 'name' => 'Phongsaly', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 5894, 'country_id' => 202, 'name' => 'Phrae', 'name_ru' => 'Пхраэ', 'gmt_offset' => -7,
			), array(
				'id' => 5895, 'country_id' => 223, 'name' => 'Phu Quoc', 'name_ru' => 'Пху-Квок', 'gmt_offset' => 7,
			), array(
				'id' => 5896, 'country_id' => 223, 'name' => 'Phu Vinh', 'name_ru' => 'Пху-Винх', 'gmt_offset' => -7,
			), array(
				'id' => 5897, 'country_id' => 110, 'name' => 'Phu-bon', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5898, 'country_id' => 202, 'name' => 'Phuket', 'name_ru' => 'Пхукет', 'gmt_offset' => 7,
			), array(
				'id' => 5899, 'country_id' => 223, 'name' => 'Phuoclong', 'name_ru' => 'Пхуоклонг', 'gmt_offset' => -7,
			), array(
				'id' => 5900, 'country_id' => 216, 'name' => 'Picayune', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5901, 'country_id' => 216, 'name' => 'Pickens', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 5902, 'country_id' => 35, 'name' => 'Pickle Lake', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 5903, 'country_id' => 173, 'name' => 'Pico Island', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 5904, 'country_id' => 29, 'name' => 'Picos', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 5905, 'country_id' => 162, 'name' => 'Picton', 'name_ru' => 'Пиктон', 'gmt_offset' => -12,
			), array(
				'id'         => 5906, 'country_id' => 148, 'name' => 'Piedras Negras', 'name_ru' => 'Пьедрас-Неграс',
				'gmt_offset' => 6,
			), array(
				'id' => 5907, 'country_id' => 216, 'name' => 'Pierre', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5908, 'country_id' => 190, 'name' => 'Piestany', 'name_ru' => 'Пиестани', 'gmt_offset' => -1,
			), array(
				'id'         => 5909, 'country_id' => 228, 'name' => 'Pietermaritzburg', 'name_ru' => 'Питермарицбург',
				'gmt_offset' => 2,
			), array(
				'id' => 5910, 'country_id' => 220, 'name' => 'Pijiguaos', 'name_ru' => 'Пихигуаос', 'gmt_offset' => 4,
			), array(
				'id' => 5911, 'country_id' => 35, 'name' => 'Pikangikum', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5912, 'country_id' => 35, 'name' => 'Pikwitonei', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5913, 'country_id' => 175, 'name' => 'Pilar', 'name_ru' => 'Пилар', 'gmt_offset' => 4,
			), array(
				'id' => 5914, 'country_id' => 216, 'name' => 'Pilot Point', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 5915, 'country_id' => 216, 'name' => 'Pilot Station', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 5916, 'country_id' => 167, 'name' => 'Pimaga', 'name_ru' => 'Пимага', 'gmt_offset' => -10,
			), array(
				'id' => 5917, 'country_id' => 29, 'name' => 'Pimenta Bueno', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 5918, 'country_id' => 35, 'name' => 'Pincher Creek', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 5919, 'country_id' => 167, 'name' => 'Pindiu', 'name_ru' => 'Пиндиу', 'gmt_offset' => -10,
			), array(
				'id' => 5920, 'country_id' => 216, 'name' => 'Pine Bluff', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5921, 'country_id' => 199, 'name' => 'Pine Cay', 'name_ru' => 'Пайн-Кей', 'gmt_offset' => 5,
			), array(
				'id' => 5922, 'country_id' => 35, 'name' => 'Pine House', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5923, 'country_id' => 216, 'name' => 'Pine Mountain', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 5924, 'country_id' => 35, 'name' => 'Pine Point', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 5925, 'country_id' => 216, 'name' => 'Pine Ridge', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 5926, 'country_id' => 45, 'name' => 'Pingtung', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 5927, 'country_id' => 29, 'name' => 'Pinheiro', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 5928, 'country_id' => 148, 'name' => 'Pinotepa Nacional', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5929, 'country_id' => 89, 'name' => 'Pipillipai', 'name_ru' => 'Пипиллипаи', 'gmt_offset' => 3,
			), array(
				'id' => 5930, 'country_id' => 29, 'name' => 'Pirapora', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 5931, 'country_id' => 103, 'name' => 'Pisa', 'name_ru' => 'Пиза', 'gmt_offset' => 1,
			), array(
				'id' => 5932, 'country_id' => 165, 'name' => 'Pisco', 'name_ru' => 'Писко', 'gmt_offset' => 5,
			), array(
				'id' => 5933, 'country_id' => 46, 'name' => 'Pitalito', 'name_ru' => 'Питалито', 'gmt_offset' => 5,
			), array(
				'id' => 5934, 'country_id' => 29, 'name' => 'Pitinga', 'name_ru' => 'Питинга', 'gmt_offset' => 4,
			), array(
				'id' => 5935, 'country_id' => 199, 'name' => 'Pitts Town', 'name_ru' => 'Питтс-Таун', 'gmt_offset' => 0,
			), array(
				'id' => 5936, 'country_id' => 216, 'name' => 'Pittsburg', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5937, 'country_id' => 216, 'name' => 'Pittsburgh', 'name_ru' => 'Питтсборо', 'gmt_offset' => 5,
			), array(
				'id' => 5938, 'country_id' => 216, 'name' => 'Pittsfield', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id'         => 5939, 'country_id' => 95, 'name' => 'Pitu, Morotai Island', 'name_ru' => NULL,
				'gmt_offset' => 8,
			), array(
				'id' => 5940, 'country_id' => 80, 'name' => 'Pituffik', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 5941, 'country_id' => 165, 'name' => 'Piura', 'name_ru' => 'Пиуро', 'gmt_offset' => 5,
			), array(
				'id' => 5942, 'country_id' => 34, 'name' => 'Placencia', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5943, 'country_id' => 216, 'name' => 'Placerville', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 5944, 'country_id' => 216, 'name' => 'Plainview', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5945, 'country_id' => 145, 'name' => 'Plaisance', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 5946, 'country_id' => 46, 'name' => 'Planadas', 'name_ru' => 'Планадас', 'gmt_offset' => 5,
			), array(
				'id'         => 5947, 'country_id' => 46, 'name' => 'Planeta Rica', 'name_ru' => 'Планета-Рико',
				'gmt_offset' => 5,
			), array(
				'id' => 5948, 'country_id' => 216, 'name' => 'Platinum', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 5949, 'country_id' => 46, 'name' => 'Plato', 'name_ru' => 'Плато', 'gmt_offset' => 5,
			), array(
				'id' => 5950, 'country_id' => 216, 'name' => 'Plattsburgh', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 5951, 'country_id' => 148, 'name' => 'Playa Del Carmen', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 5952, 'country_id' => 86, 'name' => 'Playa Grande', 'name_ru' => 'Плайа Гранде',
				'gmt_offset' => -6,
			), array(
				'id'         => 5953, 'country_id' => 47, 'name' => 'Playa Samara', 'name_ru' => 'Плайя Самара',
				'gmt_offset' => 6,
			), array(
				'id'         => 5954, 'country_id' => 164, 'name' => 'Playon Chico', 'name_ru' => 'Плейкон-Чико',
				'gmt_offset' => 5,
			), array(
				'id' => 5955, 'country_id' => 216, 'name' => 'Pleasant Harbour', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 5956, 'country_id' => 216, 'name' => 'Pleasanton', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 5957, 'country_id' => 223, 'name' => 'Pleiku', 'name_ru' => 'Плейку', 'gmt_offset' => -7,
			), array(
				'id' => 5958, 'country_id' => 216, 'name' => 'Plentywood', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id'         => 5959, 'country_id' => 228, 'name' => 'Plettenberg Bay', 'name_ru' => 'Плеттенберг-Бей',
				'gmt_offset' => 2,
			), array(
				'id' => 5960, 'country_id' => 22, 'name' => 'Pleven', 'name_ru' => 'Плевен', 'gmt_offset' => -2,
			), array(
				'id' => 5961, 'country_id' => 22, 'name' => 'Plovdiv', 'name_ru' => 'Пловдив', 'gmt_offset' => 2,
			), array(
				'id' => 5962, 'country_id' => 73, 'name' => 'Plymouth', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5963, 'country_id' => 21, 'name' => 'Po', 'name_ru' => 'По', 'gmt_offset' => 0,
			), array(
				'id' => 5964, 'country_id' => 216, 'name' => 'Pocahontas', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5965, 'country_id' => 216, 'name' => 'Pocatello', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 5966, 'country_id' => 148, 'name' => 'Pochutla', 'name_ru' => 'Пошутла', 'gmt_offset' => 6,
			), array(
				'id' => 5967, 'country_id' => 29, 'name' => 'Pocos De Caldas', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 5968, 'country_id' => 132, 'name' => 'Podgorica', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 5969, 'country_id' => 192, 'name' => 'Podor', 'name_ru' => 'Подор', 'gmt_offset' => 0,
			), array(
				'id' => 5970, 'country_id' => 66, 'name' => 'Pohakuloa', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 5971, 'country_id' => 115, 'name' => 'Pohang', 'name_ru' => 'Пхохан', 'gmt_offset' => -9,
			), array(
				'id' => 5972, 'country_id' => 69, 'name' => 'Pohnpei', 'name_ru' => 'Понпеи', 'gmt_offset' => -11,
			), array(
				'id' => 5973, 'country_id' => 216, 'name' => 'Point Baker', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 5974, 'country_id' => 216, 'name' => 'Point Hope', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 5975, 'country_id' => 216, 'name' => 'Point Lay', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 5976, 'country_id' => 216, 'name' => 'Point Retreat', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id'         => 5977, 'country_id' => 39, 'name' => 'Pointe Noire', 'name_ru' => 'Пуэнт-Нуар',
				'gmt_offset' => -1,
			), array(
				'id' => 5978, 'country_id' => 83, 'name' => 'Pointe-a-pitre', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id'         => 5979, 'country_id' => 35, 'name' => 'Points North Landing, Saskatchewan',
				'name_ru'    => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5980, 'country_id' => 110, 'name' => 'Poipet', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5981, 'country_id' => 71, 'name' => 'Poitiers', 'name_ru' => 'Пуатье', 'gmt_offset' => -1,
			), array(
				'id'         => 5982, 'country_id' => 159, 'name' => 'Pokhara', 'name_ru' => 'Покхара',
				'gmt_offset' => -5.7999999999999998,
			), array(
				'id' => 5983, 'country_id' => 216, 'name' => 'Polacca', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 5984, 'country_id' => 216, 'name' => 'Polk Inlet', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 5985, 'country_id' => 228, 'name' => 'Polokwane', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 5986, 'country_id' => 213, 'name' => 'Poltava', 'name_ru' => 'Полтава', 'gmt_offset' => 3,
			), array(
				'id' => 5987, 'country_id' => 180, 'name' => 'Polyarnyj', 'name_ru' => 'Полярный', 'gmt_offset' => 9,
			), array(
				'id' => 5988, 'country_id' => 95, 'name' => 'Pomala', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 5989, 'country_id' => 216, 'name' => 'Pompano Beach', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 5990, 'country_id' => 216, 'name' => 'Ponca City', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 5991, 'country_id' => 172, 'name' => 'Ponce', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 5992, 'country_id' => 35, 'name' => 'Pond Inlet', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id'         => 5993, 'country_id' => 99, 'name' => 'Pondicherry', 'name_ru' => 'Пондичерри',
				'gmt_offset' => 5.5,
			), array(
				'id' => 5994, 'country_id' => 150, 'name' => 'Ponta de Ouro', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 5995, 'country_id' => 173, 'name' => 'Ponta Delgada', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 5996, 'country_id' => 29, 'name' => 'Ponta Pelada', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 5997, 'country_id' => 29, 'name' => 'Ponta Pora', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 5998, 'country_id' => 29, 'name' => 'Pontes e Lacerda', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 5999, 'country_id' => 216, 'name' => 'Pontiac', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6000, 'country_id' => 95, 'name' => 'Pontianak', 'name_ru' => 'Понтианак', 'gmt_offset' => -7,
			),
				array(
					'id' => 6001, 'country_id' => 103, 'name' => 'Ponza', 'name_ru' => 'Понза', 'gmt_offset' => 1,
				), 1 => array(
				'id' => 6002, 'country_id' => 46, 'name' => 'Popayan', 'name_ru' => 'Попайан', 'gmt_offset' => 5,
			), array(
				'id' => 6003, 'country_id' => 216, 'name' => 'Pope Vanoy', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6004, 'country_id' => 216, 'name' => 'Poplar Bluff', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6005, 'country_id' => 35, 'name' => 'Poplar Hill', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6006, 'country_id' => 35, 'name' => 'Poplar River', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id'         => 6007, 'country_id' => 167, 'name' => 'Popondetta', 'name_ru' => 'Попондетта',
				'gmt_offset' => -10,
			), array(
				'id' => 6008, 'country_id' => 190, 'name' => 'Poprad', 'name_ru' => 'Попрад', 'gmt_offset' => 1,
			), array(
				'id' => 6009, 'country_id' => 86, 'name' => 'Poptun', 'name_ru' => 'Поптун', 'gmt_offset' => 6,
			), array(
				'id' => 6010, 'country_id' => 99, 'name' => 'Porbandar', 'name_ru' => 'Порбандар', 'gmt_offset' => -5.5,
			), array(
				'id' => 6011, 'country_id' => 216, 'name' => 'Porcupine Creek', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6012, 'country_id' => 46, 'name' => 'Pore', 'name_ru' => 'Поре', 'gmt_offset' => 5,
			), array(
				'id' => 6013, 'country_id' => 167, 'name' => 'Porgera', 'name_ru' => 'Поргера', 'gmt_offset' => -10,
			), array(
				'id' => 6014, 'country_id' => 66, 'name' => 'Pori', 'name_ru' => 'Пори', 'gmt_offset' => -2,
			), array(
				'id' => 6015, 'country_id' => 220, 'name' => 'Porlamar', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 6016, 'country_id' => 35, 'name' => 'Port Alberni', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 6017, 'country_id' => 216, 'name' => 'Port Alexander', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id'         => 6018, 'country_id' => 228, 'name' => 'Port Alfred', 'name_ru' => 'Порт Альфред',
				'gmt_offset' => -2,
			), array(
				'id' => 6019, 'country_id' => 216, 'name' => 'Port Alice', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6020, 'country_id' => 216, 'name' => 'Port Alsworth', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id'         => 6021, 'country_id' => 216, 'name' => 'Port Angeles', 'name_ru' => 'Порт Анжелес',
				'gmt_offset' => 8,
			), array(
				'id'         => 6022, 'country_id' => 105, 'name' => 'Port Antonio', 'name_ru' => 'Порт-Антонио',
				'gmt_offset' => 5,
			), array(
				'id'         => 6023, 'country_id' => 216, 'name' => 'Port Armstrong', 'name_ru' => 'Порт Армстронг',
				'gmt_offset' => 9,
			), array(
				'id' => 6024, 'country_id' => 93, 'name' => 'Port Au Prince', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id'         => 6025, 'country_id' => 14, 'name' => 'Port Augusta', 'name_ru' => 'Порт Огаста',
				'gmt_offset' => 9.5,
			), array(
				'id' => 6026, 'country_id' => 216, 'name' => 'Port Bailey', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id'         => 6027, 'country_id' => 133, 'name' => 'Port Berge', 'name_ru' => 'Порт-Бердж',
				'gmt_offset' => -3,
			), array(
				'id'         => 6028, 'country_id' => 99, 'name' => 'Port Blair', 'name_ru' => 'Порт-Блер',
				'gmt_offset' => -5.5,
			), array(
				'id' => 6029, 'country_id' => 216, 'name' => 'Port Clarence', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6030, 'country_id' => 93, 'name' => 'Port De Paix', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id'         => 6031, 'country_id' => 14, 'name' => 'Port Douglas', 'name_ru' => 'Порт Дуглас',
				'gmt_offset' => 10,
			), array(
				'id'         => 6032, 'country_id' => 228, 'name' => 'Port Elizabeth', 'name_ru' => 'Порт Элизабет',
				'gmt_offset' => -2,
			), array(
				'id'         => 6033, 'country_id' => 162, 'name' => 'Port Fitzroy', 'name_ru' => 'Порт-Фицрой',
				'gmt_offset' => 13,
			), array(
				'id' => 6034, 'country_id' => 216, 'name' => 'Port Frederick', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id'         => 6035, 'country_id' => 72, 'name' => 'Port Gentil', 'name_ru' => 'Порт-Гентил',
				'gmt_offset' => -1,
			), array(
				'id' => 6036, 'country_id' => 216, 'name' => 'Port Graham', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6037, 'country_id' => 155, 'name' => 'Port Harcourt', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 6038, 'country_id' => 35, 'name' => 'Port Hardy', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 6039, 'country_id' => 35, 'name' => 'Port Hawkesbury', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 6040, 'country_id' => 14, 'name' => 'Port Hedland', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 6041, 'country_id' => 216, 'name' => 'Port Heiden', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6042, 'country_id' => 35, 'name' => 'Port Hope Simpson', 'name_ru' => NULL, 'gmt_offset' => 3.5,
			), array(
				'id' => 6043, 'country_id' => 216, 'name' => 'Port Hueneme, CA', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 6044, 'country_id' => 14, 'name' => 'Port Hunter', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 6045, 'country_id' => 216, 'name' => 'Port Huron', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6046, 'country_id' => 216, 'name' => 'Port Johnson', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id'         => 6047, 'country_id' => 89, 'name' => 'Port Kaituma', 'name_ru' => 'Порт-Каитума',
				'gmt_offset' => 3,
			), array(
				'id' => 6048, 'country_id' => 14, 'name' => 'Port Keats', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 6049, 'country_id' => 149, 'name' => 'Port Klang', 'name_ru' => 'Порт Кланг', 'gmt_offset' => 8,
			), array(
				'id' => 6050, 'country_id' => 14, 'name' => 'Port Lincoln', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 6051, 'country_id' => 216, 'name' => 'Port Lions', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id'         => 6052, 'country_id' => 14, 'name' => 'Port Macquarie', 'name_ru' => 'Порт Макгуайр',
				'gmt_offset' => -10,
			), array(
				'id' => 6053, 'country_id' => 35, 'name' => 'Port McNeil', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 6054, 'country_id' => 35, 'name' => 'Port Menier', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6055, 'country_id' => 216, 'name' => 'Port Moller', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id'         => 6056, 'country_id' => 167, 'name' => 'Port Moresby', 'name_ru' => 'Порт-Морсби',
				'gmt_offset' => -10,
			), array(
				'id' => 6057, 'country_id' => 216, 'name' => 'Port Oceanic', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id'         => 6058, 'country_id' => 209, 'name' => 'Port Of Spain', 'name_ru' => 'Порт-оф-спейн ',
				'gmt_offset' => -4,
			), array(
				'id' => 6059, 'country_id' => 14, 'name' => 'Port Pirie', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 6060, 'country_id' => 216, 'name' => 'Port Protection', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6061, 'country_id' => 61, 'name' => 'Port Said', 'name_ru' => 'Порт-Саид', 'gmt_offset' => -2,
			), array(
				'id' => 6062, 'country_id' => 228, 'name' => 'Port Saint Johns', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 6063, 'country_id' => 216, 'name' => 'Port San Juan', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id'         => 6064, 'country_id' => 35, 'name' => 'Port Simpson', 'name_ru' => 'Порт Симпсон',
				'gmt_offset' => -8,
			), array(
				'id' => 6065, 'country_id' => 68, 'name' => 'Port Stanley', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id'         => 6066, 'country_id' => 14, 'name' => 'Port Stephens', 'name_ru' => 'Порт Стефенс',
				'gmt_offset' => -10,
			), array(
				'id'         => 6067, 'country_id' => 185, 'name' => 'Port Sudan', 'name_ru' => 'Порт-Судан',
				'gmt_offset' => -2,
			), array(
				'id' => 6068, 'country_id' => 216, 'name' => 'Port Townsend', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 6069, 'country_id' => 224, 'name' => 'Port Vila', 'name_ru' => 'Порт Вила', 'gmt_offset' => -11,
			), array(
				'id' => 6070, 'country_id' => 216, 'name' => 'Port Walter', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6071, 'country_id' => 216, 'name' => 'Port Williams', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6072, 'country_id' => 216, 'name' => 'Portage Creek', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6073, 'country_id' => 35, 'name' => 'Portage La Prairie', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6074, 'country_id' => 216, 'name' => 'Porterville', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 6075, 'country_id' => 173, 'name' => 'Portimao', 'name_ru' => 'Портиман', 'gmt_offset' => 0,
			), array(
				'id' => 6076, 'country_id' => 14, 'name' => 'Portland', 'name_ru' => 'Портланд', 'gmt_offset' => -10,
			), array(
				'id' => 6077, 'country_id' => 216, 'name' => 'Portland, Or', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 6078, 'country_id' => 173, 'name' => 'Porto', 'name_ru' => 'Порто', 'gmt_offset' => 0,
			), array(
				'id'         => 6079, 'country_id' => 195, 'name' => 'Porto Alegre', 'name_ru' => 'Порто Алегре',
				'gmt_offset' => 0,
			), array(
				'id'         => 6080, 'country_id' => 29, 'name' => 'Porto Alegre Do Norte', 'name_ru' => NULL,
				'gmt_offset' => -4,
			), array(
				'id'         => 6081, 'country_id' => 9, 'name' => 'Porto Amboim', 'name_ru' => 'Порту-Амбоим',
				'gmt_offset' => -1,
			), array(
				'id' => 6082, 'country_id' => 29, 'name' => 'Porto de Moz', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 6083, 'country_id' => 29, 'name' => 'Porto Dos Gauchos', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6084, 'country_id' => 85, 'name' => 'Porto Kheli', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 6085, 'country_id' => 29, 'name' => 'Porto Nacional', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id'         => 6086, 'country_id' => 173, 'name' => 'Porto Santo', 'name_ru' => 'Порто Санто',
				'gmt_offset' => 0,
			), array(
				'id'         => 6087, 'country_id' => 29, 'name' => 'Porto Seguro', 'name_ru' => 'Порто Сегуро',
				'gmt_offset' => -3,
			), array(
				'id' => 6088, 'country_id' => 29, 'name' => 'Porto Velho', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 6089, 'country_id' => 189, 'name' => 'Portoroz', 'name_ru' => 'Порторос', 'gmt_offset' => 1,
			), array(
				'id' => 6090, 'country_id' => 59, 'name' => 'Portoviejo', 'name_ru' => 'Портовьехо', 'gmt_offset' => 5,
			), array(
				'id' => 6091, 'country_id' => 73, 'name' => 'Portsmouth', 'name_ru' => 'Портсмут', 'gmt_offset' => 0,
			), array(
				'id'         => 6092, 'country_id' => 216, 'name' => 'Portsmouth, OH', 'name_ru' => 'Портсмут',
				'gmt_offset' => -5,
			), array(
				'id' => 6093, 'country_id' => 43, 'name' => 'Porvenir', 'name_ru' => 'Порвенир', 'gmt_offset' => 4,
			), array(
				'id' => 6094, 'country_id' => 11, 'name' => 'Posadas', 'name_ru' => 'Посадас', 'gmt_offset' => 3,
			), array(
				'id' => 6095, 'country_id' => 95, 'name' => 'Poso', 'name_ru' => 'Посо', 'gmt_offset' => -8,
			), array(
				'id' => 6096, 'country_id' => 35, 'name' => 'Postville', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 6097, 'country_id' => 216, 'name' => 'Poteau', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6098, 'country_id' => 28, 'name' => 'Potosi', 'name_ru' => 'Потоси', 'gmt_offset' => 4,
			), array(
				'id' => 6099, 'country_id' => 216, 'name' => 'Pottstown', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6100, 'country_id' => 216, 'name' => 'Poughkeepsie', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6101, 'country_id' => 216, 'name' => 'Poulsbo', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 6102, 'country_id' => 152, 'name' => 'Poum', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6103, 'country_id' => 29, 'name' => 'Pouso Alegre', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6104, 'country_id' => 35, 'name' => 'Povungnituk', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6105, 'country_id' => 216, 'name' => 'Powell', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 6106, 'country_id' => 35, 'name' => 'Powell Lake', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id'         => 6107, 'country_id' => 30, 'name' => 'Powell Point', 'name_ru' => 'Пауэлл-Пойнт',
				'gmt_offset' => -5,
			), array(
				'id' => 6108, 'country_id' => 35, 'name' => 'Powell River', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 6109, 'country_id' => 148, 'name' => 'Poza Rica', 'name_ru' => 'Поса-Рика', 'gmt_offset' => 6,
			), array(
				'id' => 6110, 'country_id' => 170, 'name' => 'Poznan', 'name_ru' => 'Познан', 'gmt_offset' => 1,
			), array(
				'id' => 6111, 'country_id' => 29, 'name' => 'Prado', 'name_ru' => 'Прадо', 'gmt_offset' => 3,
			), array(
				'id' => 6112, 'country_id' => 52, 'name' => 'Prague', 'name_ru' => 'Прага', 'gmt_offset' => 1,
			), array(
				'id' => 6113, 'country_id' => 49, 'name' => 'Praia', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 6114, 'country_id' => 216, 'name' => 'Prairie Du Chien', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id'         => 6115, 'country_id' => 184, 'name' => 'Praslin Island', 'name_ru' => 'Праслин-Айленд',
				'gmt_offset' => -4,
			), array(
				'id' => 6116, 'country_id' => 216, 'name' => 'Pratt', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6117, 'country_id' => 216, 'name' => 'Prentice', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6118, 'country_id' => 52, 'name' => 'Prerov', 'name_ru' => 'Пршеров', 'gmt_offset' => 1,
			), array(
				'id'         => 6119, 'country_id' => 11, 'name' => 'Pres. Roque Saenz Pena', 'name_ru' => NULL,
				'gmt_offset' => 3,
			), array(
				'id' => 6120, 'country_id' => 216, 'name' => 'Prescott', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id'         => 6121, 'country_id' => 65, 'name' => 'Presidente Dutra', 'name_ru' => 'Президенти-Дутра',
				'gmt_offset' => 0,
			), array(
				'id' => 6122, 'country_id' => 29, 'name' => 'Presidente Prudente', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 6123, 'country_id' => 190, 'name' => 'Presov', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 6124, 'country_id' => 216, 'name' => 'Presque Isle', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6125, 'country_id' => 48, 'name' => 'Preston', 'name_ru' => 'Престон', 'gmt_offset' => 5,
			), array(
				'id'         => 6126, 'country_id' => 73, 'name' => 'Prestwick, South Ayrshire', 'name_ru' => NULL,
				'gmt_offset' => 0,
			), array(
				'id' => 6127, 'country_id' => 59, 'name' => 'Pretoria', 'name_ru' => 'Претория', 'gmt_offset' => 0,
			), array(
				'id'         => 6128, 'country_id' => 85, 'name' => 'Preveza/Lefkas', 'name_ru' => 'Превеза-Лефка',
				'gmt_offset' => 2,
			), array(
				'id' => 6129, 'country_id' => 216, 'name' => 'Price', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 6130, 'country_id' => 228, 'name' => 'Prieska', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 6131, 'country_id' => 35, 'name' => 'Prince Albert, SK', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id'         => 6132, 'country_id' => 73, 'name' => 'Prince George', 'name_ru' => 'Принс Джордж',
				'gmt_offset' => 0,
			), array(
				'id'         => 6133, 'country_id' => 73, 'name' => 'Prince Rupert', 'name_ru' => 'Принц Руперт',
				'gmt_offset' => 0,
			), array(
				'id' => 6134, 'country_id' => 216, 'name' => 'Princeton', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 6135, 'country_id' => 195, 'name' => 'Principe', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6136, 'country_id' => 216, 'name' => 'Prineville', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 6137, 'country_id' => 179, 'name' => 'Prishtina', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 6138, 'country_id' => 103, 'name' => 'Procida', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 6139, 'country_id' => 137, 'name' => 'Prome', 'name_ru' => 'Проме', 'gmt_offset' => -6.5,
			), array(
				'id' => 6140, 'country_id' => 71, 'name' => 'Propriano', 'name_ru' => 'Проприано', 'gmt_offset' => -1,
			), array(
				'id' => 6141, 'country_id' => 14, 'name' => 'Proserpine', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 6142, 'country_id' => 216, 'name' => 'Prospect Creek', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6143, 'country_id' => 216, 'name' => 'Providence', 'name_ru' => 'Провиденс', 'gmt_offset' => 5,
			), array(
				'id'         => 6144, 'country_id' => 46, 'name' => 'Providencia', 'name_ru' => 'Провиденсиа',
				'gmt_offset' => 5,
			), array(
				'id' => 6145, 'country_id' => 199, 'name' => 'Providenciales', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id'         => 6146, 'country_id' => 180, 'name' => 'Provideniya', 'name_ru' => 'Бухта Провидения',
				'gmt_offset' => 12,
			), array(
				'id' => 6147, 'country_id' => 216, 'name' => 'Provincetown', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6148, 'country_id' => 216, 'name' => 'Provo', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 6149, 'country_id' => 216, 'name' => 'Prudhoe Bay', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id'         => 6150, 'country_id' => 216, 'name' => 'Prudhoe Bay/Deadhorse', 'name_ru' => NULL,
				'gmt_offset' => 9,
			), array(
				'id' => 6151, 'country_id' => 180, 'name' => 'Pskov', 'name_ru' => 'Псков', 'gmt_offset' => 4,
			), array(
				'id' => 6152, 'country_id' => 167, 'name' => 'Puas', 'name_ru' => 'Пуас', 'gmt_offset' => -10,
			), array(
				'id' => 6153, 'country_id' => 165, 'name' => 'Pucallpa', 'name_ru' => 'Пукальпа', 'gmt_offset' => 5,
			), array(
				'id' => 6154, 'country_id' => 43, 'name' => 'Pucon', 'name_ru' => 'Пукон', 'gmt_offset' => 4,
			), array(
				'id' => 6155, 'country_id' => 148, 'name' => 'Puebla Atlixco', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 6156, 'country_id' => 216, 'name' => 'Pueblo', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id'         => 6157, 'country_id' => 43, 'name' => 'Puerto Aisen', 'name_ru' => 'Пуэрто-Айсен',
				'gmt_offset' => 4,
			), array(
				'id' => 6158, 'country_id' => 164, 'name' => 'Puerto Armuellas', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id'         => 6159, 'country_id' => 46, 'name' => 'Puerto Asis', 'name_ru' => 'Пуэрто-Асис',
				'gmt_offset' => 5,
			), array(
				'id'         => 6160, 'country_id' => 220, 'name' => 'Puerto Ayacucho', 'name_ru' => 'Пуэрто-Аякучо',
				'gmt_offset' => 4,
			), array(
				'id'         => 6161, 'country_id' => 59,
				'name'       => 'Puerto Baquerizo Moreno, San Cristуbal Island, Galбpagos Islands', 'name_ru' => NULL,
				'gmt_offset' => -6,
			), array(
				'id'         => 6162, 'country_id' => 86, 'name' => 'Puerto Barrios', 'name_ru' => 'Пуэрто Барриос',
				'gmt_offset' => 6,
			), array(
				'id'         => 6163, 'country_id' => 46, 'name' => 'Puerto Berrio', 'name_ru' => 'Пуэрто-Беррио',
				'gmt_offset' => 5,
			), array(
				'id'         => 6164, 'country_id' => 46, 'name' => 'Puerto Boyaca', 'name_ru' => 'Пуэрто-Бояка',
				'gmt_offset' => 5,
			), array(
				'id' => 6165, 'country_id' => 220, 'name' => 'Puerto Cabello', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id'         => 6166, 'country_id' => 156, 'name' => 'Puerto Cabezas', 'name_ru' => 'Пуэрто-Кабесас',
				'gmt_offset' => -6,
			), array(
				'id'         => 6167, 'country_id' => 46, 'name' => 'Puerto Carreno', 'name_ru' => 'Пуэрто-Каррено',
				'gmt_offset' => 5,
			), array(
				'id'         => 6168, 'country_id' => 64, 'name' => 'Puerto De Santa Maria', 'name_ru' => NULL,
				'gmt_offset' => 1,
			), array(
				'id' => 6169, 'country_id' => 64, 'name' => 'Puerto del Rosario', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 6170, 'country_id' => 11, 'name' => 'Puerto Deseado', 'name_ru' => 'Пуэрто-Десеадо',
				'gmt_offset' => 3,
			), array(
				'id'         => 6171, 'country_id' => 148, 'name' => 'Puerto Escondido',
				'name_ru'    => 'Пуэрто Эскондидо', 'gmt_offset' => 6,
			), array(
				'id'         => 6172, 'country_id' => 46, 'name' => 'Puerto Inirida', 'name_ru' => 'Пуэрто-Инирида',
				'gmt_offset' => 5,
			), array(
				'id'         => 6173, 'country_id' => 47, 'name' => 'Puerto Jimenez', 'name_ru' => 'Пуэрто-Хименес',
				'gmt_offset' => 6,
			), array(
				'id'         => 6174, 'country_id' => 148, 'name' => 'Puerto Juarez', 'name_ru' => 'Пуэрто-Хуарес',
				'gmt_offset' => 6,
			), array(
				'id'         => 6175, 'country_id' => 64, 'name' => 'Puerto La Cruz', 'name_ru' => 'Пуэрто Ла Крус',
				'gmt_offset' => 0,
			), array(
				'id' => 6176, 'country_id' => 175, 'name' => 'Puerto La Victoria', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6177, 'country_id' => 175, 'name' => 'Puerto Leda', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6178, 'country_id' => 46, 'name' => 'Puerto Leguizamo', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6179, 'country_id' => 91, 'name' => 'Puerto Lempira', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6180, 'country_id' => 11, 'name' => 'Puerto Madryn', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id'         => 6181, 'country_id' => 165, 'name' => 'Puerto Maldonado',
				'name_ru'    => 'Пуэрто Мальдонадо', 'gmt_offset' => 5,
			), array(
				'id'         => 6182, 'country_id' => 43, 'name' => 'Puerto Montt', 'name_ru' => 'Пуэрто Монт',
				'gmt_offset' => 4,
			), array(
				'id'         => 6183, 'country_id' => 43, 'name' => 'Puerto Natales', 'name_ru' => 'Пуэрто Наталес',
				'gmt_offset' => 4,
			), array(
				'id'         => 6184, 'country_id' => 164, 'name' => 'Puerto Obaldia', 'name_ru' => 'Пуэрто-Обалдиа',
				'gmt_offset' => 5,
			), array(
				'id'         => 6185, 'country_id' => 220, 'name' => 'Puerto Ordaz', 'name_ru' => 'Пуэрто Ордас',
				'gmt_offset' => 4,
			), array(
				'id'         => 6186, 'country_id' => 220, 'name' => 'Puerto Paez', 'name_ru' => 'Пуэрто-Пец',
				'gmt_offset' => 4,
			), array(
				'id'         => 6187, 'country_id' => 148, 'name' => 'Puerto Penasco', 'name_ru' => 'Пуэрто-Пенаско',
				'gmt_offset' => 7,
			), array(
				'id'         => 6188, 'country_id' => 57, 'name' => 'Puerto Plata', 'name_ru' => 'Пуэрто Плата',
				'gmt_offset' => -4,
			), array(
				'id' => 6189, 'country_id' => 168, 'name' => 'Puerto Princesa', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id'         => 6190, 'country_id' => 46, 'name' => 'Puerto Rico', 'name_ru' => 'Пуэрто Рико',
				'gmt_offset' => 5,
			), array(
				'id' => 6191, 'country_id' => 28, 'name' => 'Puerto Suarez', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id'         => 6192, 'country_id' => 148, 'name' => 'Puerto Vallarta', 'name_ru' => 'Пуэрто Ваярта',
				'gmt_offset' => -6,
			), array(
				'id'         => 6193, 'country_id' => 43, 'name' => 'Puerto Varas', 'name_ru' => 'Пуэрто Варас',
				'gmt_offset' => -3,
			), array(
				'id'         => 6194, 'country_id' => 43, 'name' => 'Puerto Williams', 'name_ru' => 'Пуэрто-Вильямс',
				'gmt_offset' => 4,
			), array(
				'id' => 6195, 'country_id' => 64, 'name' => 'Puertollano', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 6196, 'country_id' => 166, 'name' => 'Puka Puka', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 6197, 'country_id' => 60, 'name' => 'Puka Puka Is/Attol', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 6198, 'country_id' => 166, 'name' => 'Pukarua', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 6199, 'country_id' => 35, 'name' => 'Pukatawagan', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6200, 'country_id' => 92, 'name' => 'Pula', 'name_ru' => 'Пула', 'gmt_offset' => 1,
			), array(
				'id'         => 6201, 'country_id' => 149, 'name' => 'Pulau Layang-Layang Is', 'name_ru' => NULL,
				'gmt_offset' => 0,
			), array(
				'id' => 6202, 'country_id' => 95, 'name' => 'Pulau Panjang', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 6203, 'country_id' => 216, 'name' => 'Pullman', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 6204, 'country_id' => 167, 'name' => 'Pumani', 'name_ru' => 'Пумани', 'gmt_offset' => -10,
			), array(
				'id' => 6205, 'country_id' => 99, 'name' => 'Pune', 'name_ru' => 'Пуне', 'gmt_offset' => -5.5,
			), array(
				'id' => 6206, 'country_id' => 37, 'name' => 'Punia', 'name_ru' => 'Пуниа', 'gmt_offset' => 0,
			), array(
				'id'         => 6207, 'country_id' => 48, 'name' => 'Punta Alegre', 'name_ru' => 'Пунта-Алегре',
				'gmt_offset' => 5,
			), array(
				'id'         => 6208, 'country_id' => 43, 'name' => 'Punta Arenas', 'name_ru' => 'Пунта Аренас',
				'gmt_offset' => 4,
			), array(
				'id'         => 6209, 'country_id' => 148, 'name' => 'Punta Chivato', 'name_ru' => 'Пунта-Шивато',
				'gmt_offset' => 7,
			), array(
				'id'         => 6210, 'country_id' => 148, 'name' => 'Punta Colorada', 'name_ru' => 'Пунта-Колораде',
				'gmt_offset' => 7,
			), array(
				'id' => 6211, 'country_id' => 48, 'name' => 'Punta De Maisi', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id'         => 6212, 'country_id' => 216, 'name' => 'Punta Gorda', 'name_ru' => 'Пунта-Горда',
				'gmt_offset' => 0,
			), array(
				'id' => 6213, 'country_id' => 47, 'name' => 'Punta Islita', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id'         => 6214, 'country_id' => 47, 'name' => 'Punta Renes', 'name_ru' => 'Пунта Ренес',
				'gmt_offset' => -6,
			), array(
				'id' => 6215, 'country_id' => 167, 'name' => 'Pureni', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 6216, 'country_id' => 95, 'name' => 'Purwokerto', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 6217, 'country_id' => 137, 'name' => 'Putao', 'name_ru' => 'Путао', 'gmt_offset' => -6.5,
			), array(
				'id'         => 6218, 'country_id' => 99, 'name' => 'Puttaparthi', 'name_ru' => 'Путтапартхи',
				'gmt_offset' => 0,
			), array(
				'id' => 6219, 'country_id' => 59, 'name' => 'Putumayo', 'name_ru' => 'Путумайо', 'gmt_offset' => 5,
			), array(
				'id' => 6220, 'country_id' => 95, 'name' => 'Putussibau', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 6221, 'country_id' => 37, 'name' => 'Pweto', 'name_ru' => 'Пуэто', 'gmt_offset' => 0,
			), array(
				'id' => 6222, 'country_id' => 114, 'name' => 'Pyongyang', 'name_ru' => 'Пхеньян', 'gmt_offset' => 9,
			), array(
				'id' => 6223, 'country_id' => 85, 'name' => 'Pyrgos', 'name_ru' => 'Пиргос', 'gmt_offset' => 2,
			), array(
				'id' => 6224, 'country_id' => 80, 'name' => 'Qaanaaq', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6225, 'country_id' => 80, 'name' => 'Qaarsut', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6226, 'country_id' => 124, 'name' => 'Qachas Nek', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 6227, 'country_id' => 182, 'name' => 'Qaisumah', 'name_ru' => 'Кайсумах', 'gmt_offset' => -3,
			), array(
				'id' => 6228, 'country_id' => 3, 'name' => 'Qala Nau', 'name_ru' => NULL, 'gmt_offset' => -4.5,
			), array(
				'id' => 6229, 'country_id' => 80, 'name' => 'Qaqortoq', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 6230, 'country_id' => 80, 'name' => 'Qasigiannguit', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 6231, 'country_id' => 80, 'name' => 'Qeqertaq', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6232, 'country_id' => 80, 'name' => 'Qeqertarsuaq', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 6233, 'country_id' => 45, 'name' => 'Qiemo', 'name_ru' => 'Куэмо', 'gmt_offset' => -8,
			), array(
				'id' => 6234, 'country_id' => 35, 'name' => 'Qikiqtarjuaq', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 6235, 'country_id' => 45, 'name' => 'Qingdao', 'name_ru' => 'Куаньдян', 'gmt_offset' => -8,
			), array(
				'id' => 6236, 'country_id' => 45, 'name' => 'Qingyang', 'name_ru' => 'Куаньян', 'gmt_offset' => -8,
			), array(
				'id'         => 6237, 'country_id' => 45, 'name' => 'Qinhuangdao', 'name_ru' => 'Циньхуандао',
				'gmt_offset' => -8,
			), array(
				'id' => 6238, 'country_id' => 138, 'name' => 'Qiqihar', 'name_ru' => 'Цицихар', 'gmt_offset' => 0,
			), array(
				'id' => 6239, 'country_id' => 227, 'name' => 'Qishn', 'name_ru' => 'Кишн', 'gmt_offset' => -3,
			), array(
				'id' => 6240, 'country_id' => 216, 'name' => 'Quakertown', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6241, 'country_id' => 35, 'name' => 'Qualicum', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 6242, 'country_id' => 223, 'name' => 'Quanduc', 'name_ru' => 'Кваньдук', 'gmt_offset' => -7,
			), array(
				'id'         => 6243, 'country_id' => 223, 'name' => 'Quang Ngai', 'name_ru' => 'Кванг-Нгаи',
				'gmt_offset' => -7,
			), array(
				'id' => 6244, 'country_id' => 216, 'name' => 'Quantico', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 6245, 'country_id' => 35, 'name' => 'Quaqtaq', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6246, 'country_id' => 35, 'name' => 'Quebec', 'name_ru' => 'Квебек', 'gmt_offset' => -5,
			), array(
				'id' => 6247, 'country_id' => 216, 'name' => 'Queen', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6248, 'country_id' => 35, 'name' => 'Queen Charlotte Is', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 6249, 'country_id' => 14, 'name' => 'Queenstown', 'name_ru' => 'Куинстаун', 'gmt_offset' => 0,
			), array(
				'id' => 6250, 'country_id' => 150, 'name' => 'Quelimane', 'name_ru' => 'Келимане', 'gmt_offset' => -2,
			), array(
				'id' => 6251, 'country_id' => 148, 'name' => 'Queretaro', 'name_ru' => 'Керетаро', 'gmt_offset' => -6,
			), array(
				'id' => 6252, 'country_id' => 35, 'name' => 'Quesnel', 'name_ru' => 'Кеснел', 'gmt_offset' => 8,
			), array(
				'id' => 6253, 'country_id' => 169, 'name' => 'Quetta', 'name_ru' => 'Кветта', 'gmt_offset' => -5,
			), array(
				'id' => 6254, 'country_id' => 223, 'name' => 'Qui Nhon', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 6255, 'country_id' => 46, 'name' => 'Quibdo', 'name_ru' => 'Кибдо', 'gmt_offset' => 5,
			), array(
				'id' => 6256, 'country_id' => 86, 'name' => 'Quiche', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 6257, 'country_id' => 216, 'name' => 'Quillayute', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 6258, 'country_id' => 14, 'name' => 'Quilpie', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 6259, 'country_id' => 71, 'name' => 'Quimper', 'name_ru' => 'Куимпер', 'gmt_offset' => -1,
			), array(
				'id' => 6260, 'country_id' => 165, 'name' => 'Quincemil', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6261, 'country_id' => 216, 'name' => 'Quincy', 'name_ru' => 'Куинси', 'gmt_offset' => 5,
			), array(
				'id' => 6262, 'country_id' => 224, 'name' => 'Quine Hill', 'name_ru' => 'Кин-Хилл', 'gmt_offset' => -11,
			), array(
				'id' => 6263, 'country_id' => 216, 'name' => 'Quinhagak', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6264, 'country_id' => 14, 'name' => 'Quirindi', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 6265, 'country_id' => 59, 'name' => 'Quito', 'name_ru' => 'Куито', 'gmt_offset' => 5,
			), array(
				'id' => 6266, 'country_id' => 216, 'name' => 'Quonset Point', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6267, 'country_id' => 228, 'name' => 'Quthing', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6268, 'country_id' => 35, 'name' => 'Quйbec City', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 6269, 'country_id' => 167, 'name' => 'Rabaraba', 'name_ru' => 'Рабараба', 'gmt_offset' => -10,
			), array(
				'id' => 6270, 'country_id' => 129, 'name' => 'Rabat', 'name_ru' => 'Рабат', 'gmt_offset' => 0,
			), array(
				'id' => 6271, 'country_id' => 167, 'name' => 'Rabaul', 'name_ru' => 'Рабаул', 'gmt_offset' => 10,
			), array(
				'id' => 6272, 'country_id' => 67, 'name' => 'Rabi', 'name_ru' => 'Раби', 'gmt_offset' => -12,
			), array(
				'id' => 6273, 'country_id' => 223, 'name' => 'Rach Gia', 'name_ru' => 'Рач-Дже', 'gmt_offset' => -7,
			), array(
				'id' => 6274, 'country_id' => 216, 'name' => 'Racine', 'name_ru' => 'Рацине', 'gmt_offset' => 6,
			), array(
				'id' => 6275, 'country_id' => 180, 'name' => 'Raduzhnyi', 'name_ru' => 'Радужный', 'gmt_offset' => 4,
			), array(
				'id' => 6276, 'country_id' => 35, 'name' => 'Rae Lakes', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 6277, 'country_id' => 38, 'name' => 'Rafai', 'name_ru' => 'Рафаи', 'gmt_offset' => 1,
			), array(
				'id' => 6278, 'country_id' => 182, 'name' => 'Rafha', 'name_ru' => 'Рафха', 'gmt_offset' => -3,
			), array(
				'id' => 6279, 'country_id' => 101, 'name' => 'Rafsanjan', 'name_ru' => NULL, 'gmt_offset' => 3.5,
			), array(
				'id' => 6280, 'country_id' => 162, 'name' => 'Raglan', 'name_ru' => NULL, 'gmt_offset' => -12,
			), array(
				'id' => 6281, 'country_id' => 95, 'name' => 'Raha', 'name_ru' => 'Раха', 'gmt_offset' => -8,
			), array(
				'id'         => 6282, 'country_id' => 169, 'name' => 'Rahim Yar Khan', 'name_ru' => 'Рахим-Яр-Хан',
				'gmt_offset' => 5,
			), array(
				'id' => 6283, 'country_id' => 166, 'name' => 'Raiatea', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 6284, 'country_id' => 208, 'name' => 'Rail (Generic)', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 6285, 'country_id' => 35, 'name' => 'Rainbow Lake', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 6286, 'country_id' => 99, 'name' => 'Raipur', 'name_ru' => 'Райпур', 'gmt_offset' => -5.5,
			), array(
				'id' => 6287, 'country_id' => 166, 'name' => 'Rairua', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 6288, 'country_id' => 99, 'name' => 'Rajahmundry', 'name_ru' => 'Раджахмандри',
				'gmt_offset' => -5.5,
			), array(
				'id'         => 6289, 'country_id' => 159, 'name' => 'Rajbiraj', 'name_ru' => 'Раджбирадж',
				'gmt_offset' => -5.7999999999999998,
			), array(
				'id' => 6290, 'country_id' => 99, 'name' => 'Rajkot', 'name_ru' => 'Раджкот', 'gmt_offset' => -5.5,
			), array(
				'id' => 6291, 'country_id' => 99, 'name' => 'Rajouri', 'name_ru' => 'Раджури', 'gmt_offset' => -5.5,
			), array(
				'id' => 6292, 'country_id' => 19, 'name' => 'Rajshahi', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 6293, 'country_id' => 167, 'name' => 'Rakanda', 'name_ru' => 'Раканда', 'gmt_offset' => -10,
			), array(
				'id' => 6294, 'country_id' => 216, 'name' => 'Raleigh/Durham', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6295, 'country_id' => 61, 'name' => 'Ramadan', 'name_ru' => 'Рамадан', 'gmt_offset' => 2,
			), array(
				'id' => 6296, 'country_id' => 100, 'name' => 'Ramadi', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 6297, 'country_id' => 99, 'name' => 'Ramagundam', 'name_ru' => 'Рамагундам',
				'gmt_offset' => 5.2999999999999998,
			), array(
				'id' => 6298, 'country_id' => 183, 'name' => 'Ramata', 'name_ru' => 'Рамата', 'gmt_offset' => 11,
			), array(
				'id'         => 6299, 'country_id' => 159, 'name' => 'Ramechhap', 'name_ru' => 'Рамечхап',
				'gmt_offset' => -5.7999999999999998,
			), array(
				'id' => 6300, 'country_id' => 14, 'name' => 'Ramingining', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 6301, 'country_id' => 216, 'name' => 'Rampart', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6302, 'country_id' => 101, 'name' => 'Ramsar', 'name_ru' => 'Рамсар', 'gmt_offset' => -3.5,
			), array(
				'id' => 6303, 'country_id' => 53, 'name' => 'Ramstein', 'name_ru' => 'Рамштайн', 'gmt_offset' => -1,
			), array(
				'id' => 6304, 'country_id' => 149, 'name' => 'Ranau', 'name_ru' => 'Ранау', 'gmt_offset' => -8,
			), array(
				'id' => 6305, 'country_id' => 99, 'name' => 'Ranchi', 'name_ru' => 'Ранчи', 'gmt_offset' => 5.5,
			), array(
				'id' => 6306, 'country_id' => 28, 'name' => 'Rancho', 'name_ru' => 'Ранчо', 'gmt_offset' => -4,
			), array(
				'id' => 6307, 'country_id' => 216, 'name' => 'Rangely', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 6308, 'country_id' => 216, 'name' => 'Ranger', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6309, 'country_id' => 166, 'name' => 'Rangiroa', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 6310, 'country_id' => 19, 'name' => 'Rangpur', 'name_ru' => 'Рангпур', 'gmt_offset' => -6,
			), array(
				'id' => 6311, 'country_id' => 35, 'name' => 'Rankin Inlet, NT', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 6312, 'country_id' => 202, 'name' => 'Ranong', 'name_ru' => 'Ранонг', 'gmt_offset' => -7,
			), array(
				'id' => 6313, 'country_id' => 95, 'name' => 'Ransiki', 'name_ru' => 'Рансики', 'gmt_offset' => -9,
			), array(
				'id'         => 6314, 'country_id' => 216, 'name' => 'Rapid City', 'name_ru' => 'Рапид Сити',
				'gmt_offset' => -7,
			), array(
				'id' => 6315, 'country_id' => 42, 'name' => 'Rarotonga', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id'         => 6316, 'country_id' => 2, 'name' => 'Ras Al Khaimah', 'name_ru' => 'Рас-аль-Хайма',
				'gmt_offset' => 4,
			), array(
				'id' => 6317, 'country_id' => 101, 'name' => 'Rasht', 'name_ru' => 'Рашт', 'gmt_offset' => -3.5,
			), array(
				'id' => 6318, 'country_id' => 216, 'name' => 'Raspberry Strait', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6319, 'country_id' => 110, 'name' => 'Ratanakiri', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6320, 'country_id' => 99, 'name' => 'Ratnagiri', 'name_ru' => 'Ратнагири', 'gmt_offset' => -5.5,
			), array(
				'id' => 6321, 'country_id' => 216, 'name' => 'Raton', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 6322, 'country_id' => 227, 'name' => 'Raudha', 'name_ru' => 'Рауда', 'gmt_offset' => -3,
			), array(
				'id' => 6323, 'country_id' => 102, 'name' => 'Raufarhofn', 'name_ru' => 'Рауфархофн', 'gmt_offset' => 0,
			), array(
				'id' => 6324, 'country_id' => 103, 'name' => 'Ravenna', 'name_ru' => 'Равенна', 'gmt_offset' => -1,
			), array(
				'id' => 6325, 'country_id' => 92, 'name' => 'Ravensthorpe', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id'         => 6326, 'country_id' => 169, 'name' => 'Rawala Kot', 'name_ru' => 'Равала-Кот',
				'gmt_offset' => -5,
			), array(
				'id' => 6327, 'country_id' => 216, 'name' => 'Rawlins', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 6328, 'country_id' => 216, 'name' => 'Reading', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6329, 'country_id' => 166, 'name' => 'Reao', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 6330, 'country_id' => 107, 'name' => 'Rebun', 'name_ru' => 'Ребун', 'gmt_offset' => -9,
			), array(
				'id' => 6331, 'country_id' => 53, 'name' => 'Rechlin', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 6332, 'country_id' => 29, 'name' => 'Recife', 'name_ru' => 'Ресифе', 'gmt_offset' => 3,
			), array(
				'id' => 6333, 'country_id' => 11, 'name' => 'Reconquista', 'name_ru' => 'Реконкиста', 'gmt_offset' => 3,
			), array(
				'id' => 6334, 'country_id' => 216, 'name' => 'Red Bluff', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 6335, 'country_id' => 35, 'name' => 'Red Deer', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 6336, 'country_id' => 216, 'name' => 'Red Devil', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6337, 'country_id' => 216, 'name' => 'Red Dog', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 6338, 'country_id' => 35, 'name' => 'Red Lake', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id'         => 6339, 'country_id' => 216, 'name' => 'Red River',
				'name_ru'    => 'Ред Ривер (Красная река)', 'gmt_offset' => 0,
			), array(
				'id' => 6340, 'country_id' => 35, 'name' => 'Red Sucker Lake', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6341, 'country_id' => 149, 'name' => 'Redang', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 6342, 'country_id' => 224, 'name' => 'Redcliffe', 'name_ru' => 'Редклифф', 'gmt_offset' => -11,
			), array(
				'id' => 6343, 'country_id' => 216, 'name' => 'Redding', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 6344, 'country_id' => 29, 'name' => 'Redencao', 'name_ru' => 'Реденкао', 'gmt_offset' => 3,
			), array(
				'id' => 6345, 'country_id' => 216, 'name' => 'Redmond', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 6346, 'country_id' => 216, 'name' => 'Redwood Falls', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6347, 'country_id' => 216, 'name' => 'Reed City', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6348, 'country_id' => 216, 'name' => 'Reedsville', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6349, 'country_id' => 43, 'name' => 'Refugio', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id'         => 6350, 'country_id' => 103, 'name' => 'Reggio Calabria', 'name_ru' => 'Редджио-Калабрия',
				'gmt_offset' => -1,
			), array(
				'id' => 6351, 'country_id' => 76, 'name' => 'Regina', 'name_ru' => 'Регина', 'gmt_offset' => 3,
			), array(
				'id'         => 6352, 'country_id' => 35, 'name' => 'Regina, Saskatchewan', 'name_ru' => NULL,
				'gmt_offset' => 6,
			), array(
				'id'         => 6353, 'country_id' => 216, 'name' => 'Rehoboth Beach', 'name_ru' => 'Рехобот Бич',
				'gmt_offset' => 5,
			), array(
				'id' => 6354, 'country_id' => 71, 'name' => 'Reims', 'name_ru' => 'Реймс', 'gmt_offset' => -1,
			), array(
				'id' => 6355, 'country_id' => 228, 'name' => 'Reivilo', 'name_ru' => 'Рейвило', 'gmt_offset' => -2,
			), array(
				'id' => 6356, 'country_id' => 95, 'name' => 'Rengat', 'name_ru' => 'Ренгат', 'gmt_offset' => -7,
			), array(
				'id' => 6357, 'country_id' => 14, 'name' => 'Renmark', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 6358, 'country_id' => 183, 'name' => 'Rennell', 'name_ru' => NULL, 'gmt_offset' => -11,
			), array(
				'id' => 6359, 'country_id' => 71, 'name' => 'Rennes', 'name_ru' => 'Ренн', 'gmt_offset' => 1,
			), array(
				'id' => 6360, 'country_id' => 216, 'name' => 'Rensselaer', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6361, 'country_id' => 216, 'name' => 'Renton, WA', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 6362, 'country_id' => 35, 'name' => 'Repulse Bay', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6363, 'country_id' => 29, 'name' => 'Resende', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 6364, 'country_id' => 11, 'name' => 'Resistencia', 'name_ru' => 'Ресистенсия',
				'gmt_offset' => 3,
			), array(
				'id' => 6365, 'country_id' => 35, 'name' => 'Resolute', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6366, 'country_id' => 35, 'name' => 'Resolution Island', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6367, 'country_id' => 86, 'name' => 'Retalhuleu', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 6368, 'country_id' => 64, 'name' => 'Reus', 'name_ru' => 'Реус', 'gmt_offset' => -1,
			), array(
				'id' => 6369, 'country_id' => 35, 'name' => 'Revelstoke', 'name_ru' => 'Ревелстоук', 'gmt_offset' => 8,
			), array(
				'id' => 6370, 'country_id' => 99, 'name' => 'Rewa', 'name_ru' => 'Рева', 'gmt_offset' => -5.5,
			), array(
				'id' => 6371, 'country_id' => 28, 'name' => 'Reyes', 'name_ru' => 'Рейес', 'gmt_offset' => 4,
			), array(
				'id' => 6372, 'country_id' => 102, 'name' => 'Reykholar', 'name_ru' => 'Рейкхолар', 'gmt_offset' => 0,
			), array(
				'id' => 6373, 'country_id' => 102, 'name' => 'Reykjavik', 'name_ru' => 'Рейкьявик', 'gmt_offset' => 0,
			), array(
				'id' => 6374, 'country_id' => 148, 'name' => 'Reynosa', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6375, 'country_id' => 53, 'name' => 'Rheindahlen', 'name_ru' => 'Райндален', 'gmt_offset' => 1,
			), array(
				'id' => 6376, 'country_id' => 216, 'name' => 'Rhinelander', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6377, 'country_id' => 85, 'name' => 'Rhodes', 'name_ru' => 'Родос', 'gmt_offset' => 2,
			), array(
				'id' => 6378, 'country_id' => 29, 'name' => 'Ribeirao Preto', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 6379, 'country_id' => 28, 'name' => 'Riberalta', 'name_ru' => 'Риберальта', 'gmt_offset' => 4,
			), array(
				'id' => 6380, 'country_id' => 216, 'name' => 'Rice Lake', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id'         => 6381, 'country_id' => 192, 'name' => 'Richard Toll', 'name_ru' => 'Ричард-Толл',
				'gmt_offset' => 0,
			), array(
				'id'         => 6382, 'country_id' => 228, 'name' => 'Richards Bay', 'name_ru' => 'Ричардс-Бей',
				'gmt_offset' => 2,
			), array(
				'id' => 6383, 'country_id' => 216, 'name' => 'Richfield', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 6384, 'country_id' => 216, 'name' => 'Richland', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 6385, 'country_id' => 14, 'name' => 'Richmond', 'name_ru' => 'Ричмонд', 'gmt_offset' => -10,
			), array(
				'id' => 6386, 'country_id' => 216, 'name' => 'Richmond, IN', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 6387, 'country_id' => 216, 'name' => 'Richmond, VA', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 6388, 'country_id' => 53, 'name' => 'Riesa', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6389, 'country_id' => 216, 'name' => 'Rifle', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 6390, 'country_id' => 127, 'name' => 'Riga', 'name_ru' => 'Рига', 'gmt_offset' => 2,
			), array(
				'id' => 6391, 'country_id' => 35, 'name' => 'Rigolet', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 6392, 'country_id' => 92, 'name' => 'Rijeka', 'name_ru' => 'Риека', 'gmt_offset' => -1,
			), array(
				'id' => 6393, 'country_id' => 103, 'name' => 'Rimini', 'name_ru' => 'Римини', 'gmt_offset' => 1,
			), array(
				'id' => 6394, 'country_id' => 35, 'name' => 'Rimouski', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id'         => 6395, 'country_id' => 203, 'name' => 'Rincon de los Sauces', 'name_ru' => NULL,
				'gmt_offset' => 0,
			), array(
				'id'         => 6396, 'country_id' => 183, 'name' => 'Ringi Cove', 'name_ru' => 'Ринги-Коув',
				'gmt_offset' => -11,
			), array(
				'id'         => 6397, 'country_id' => 164, 'name' => 'Rio Alzucar', 'name_ru' => 'Рио-Альцукар',
				'gmt_offset' => 5,
			), array(
				'id' => 6398, 'country_id' => 29, 'name' => 'Rio Branco', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6399, 'country_id' => 11, 'name' => 'Rio Cuarto', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 6400, 'country_id' => 29, 'name' => 'Rio De Janeiro', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 6401, 'country_id' => 86, 'name' => 'Rio Dulce', 'name_ru' => 'Рио Дульче', 'gmt_offset' => -6,
			), array(
				'id' => 6402, 'country_id' => 47, 'name' => 'Rio Frio', 'name_ru' => 'Рио-Фрио', 'gmt_offset' => 6,
			), array(
				'id'         => 6403, 'country_id' => 11, 'name' => 'Rio Gallegos', 'name_ru' => 'Рио-Гальегос',
				'gmt_offset' => 3,
			), array(
				'id' => 6404, 'country_id' => 11, 'name' => 'Rio Grande', 'name_ru' => 'Рио-Гранде', 'gmt_offset' => 0,
			), array(
				'id' => 6405, 'country_id' => 11, 'name' => 'Rio Hondo', 'name_ru' => 'Рио Хондо', 'gmt_offset' => 3,
			), array(
				'id' => 6406, 'country_id' => 11, 'name' => 'Rio Mayo', 'name_ru' => 'Рио-Майо', 'gmt_offset' => 3,
			), array(
				'id' => 6407, 'country_id' => 164, 'name' => 'Rio Sidra', 'name_ru' => 'Рио-Сидра', 'gmt_offset' => 5,
			), array(
				'id' => 6408, 'country_id' => 164, 'name' => 'Rio Tigre', 'name_ru' => 'Рио-Тигре', 'gmt_offset' => 5,
			), array(
				'id' => 6409, 'country_id' => 11, 'name' => 'Rio Turbio', 'name_ru' => 'Рио-Турбио', 'gmt_offset' => 3,
			), array(
				'id' => 6410, 'country_id' => 29, 'name' => 'Rio Verde', 'name_ru' => 'Риу-Верди', 'gmt_offset' => 0,
			), array(
				'id' => 6411, 'country_id' => 46, 'name' => 'Riohacha', 'name_ru' => 'Риохача', 'gmt_offset' => 5,
			), array(
				'id' => 6412, 'country_id' => 165, 'name' => 'Rioja', 'name_ru' => 'Риоха', 'gmt_offset' => 5,
			), array(
				'id' => 6413, 'country_id' => 107, 'name' => 'Rishiri', 'name_ru' => 'Рисири', 'gmt_offset' => -9,
			), array(
				'id' => 6414, 'country_id' => 217, 'name' => 'Rivera', 'name_ru' => 'Ривера', 'gmt_offset' => 3,
			), array(
				'id' => 6415, 'country_id' => 123, 'name' => 'Rivercess', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6416, 'country_id' => 35, 'name' => 'Rivers', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6417, 'country_id' => 45, 'name' => 'Riverside', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6418, 'country_id' => 216, 'name' => 'Riverton, WY', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 6419, 'country_id' => 35, 'name' => 'Riviere Au Tonnerre', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6420, 'country_id' => 35, 'name' => 'Riviere Du Loup', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6421, 'country_id' => 182, 'name' => 'Riyadh', 'name_ru' => 'Халлсберг', 'gmt_offset' => 3,
			), array(
				'id' => 6422, 'country_id' => 227, 'name' => 'Riyan Mukalla', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 6423, 'country_id' => 71, 'name' => 'Roanne', 'name_ru' => 'Руан', 'gmt_offset' => -1,
			), array(
				'id' => 6424, 'country_id' => 216, 'name' => 'Roanoke', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 6425, 'country_id' => 216, 'name' => 'Roanoke Rapids', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6426, 'country_id' => 91, 'name' => 'Roatan', 'name_ru' => 'Роатан', 'gmt_offset' => 6,
			), array(
				'id' => 6427, 'country_id' => 228, 'name' => 'Robertson', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 6428, 'country_id' => 35, 'name' => 'Roberval', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6429, 'country_id' => 14, 'name' => 'Robinhood', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id'         => 6430, 'country_id' => 167, 'name' => 'Robinson River', 'name_ru' => 'Робинзон-Ривер',
				'gmt_offset' => -10,
			), array(
				'id' => 6431, 'country_id' => 14, 'name' => 'Robinvale', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 6432, 'country_id' => 28, 'name' => 'Robore', 'name_ru' => 'Роборе', 'gmt_offset' => 4,
			), array(
				'id' => 6433, 'country_id' => 216, 'name' => 'Roche Harbor', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 6434, 'country_id' => 71, 'name' => 'Rochefort', 'name_ru' => 'Рошфор', 'gmt_offset' => -1,
			), array(
				'id' => 6435, 'country_id' => 216, 'name' => 'Rochester', 'name_ru' => 'Рочестер', 'gmt_offset' => 1,
			), array(
				'id' => 6436, 'country_id' => 216, 'name' => 'Rochester, NY', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 6437, 'country_id' => 216, 'name' => 'Rock Hill', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6438, 'country_id' => 30, 'name' => 'Rock Sound', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id'         => 6439, 'country_id' => 216, 'name' => 'Rock Springs', 'name_ru' => 'Рок Спрингс',
				'gmt_offset' => 7,
			), array(
				'id' => 6440, 'country_id' => 216, 'name' => 'Rockdale', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6441, 'country_id' => 216, 'name' => 'Rockford', 'name_ru' => 'Рокфорд', 'gmt_offset' => -6,
			), array(
				'id'         => 6442, 'country_id' => 14, 'name' => 'Rockhampton', 'name_ru' => 'Рокхэмптон',
				'gmt_offset' => 10,
			), array(
				'id'         => 6443, 'country_id' => 14, 'name' => 'Rockhampton Downs', 'name_ru' => NULL,
				'gmt_offset' => -9.5,
			), array(
				'id' => 6444, 'country_id' => 216, 'name' => 'Rockland', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6445, 'country_id' => 216, 'name' => 'Rockport', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6446, 'country_id' => 216, 'name' => 'Rockwood', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6447, 'country_id' => 216, 'name' => 'Rocky Mount,', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id'         => 6448, 'country_id' => 35, 'name' => 'Rocky Mountain House', 'name_ru' => NULL,
				'gmt_offset' => 7,
			), array(
				'id' => 6449, 'country_id' => 71, 'name' => 'Rodez', 'name_ru' => 'Родез', 'gmt_offset' => -1,
			), array(
				'id' => 6450, 'country_id' => 145, 'name' => 'Rodrigues Is', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id'         => 6451, 'country_id' => 165, 'name' => 'Rodriguez De Mendoza', 'name_ru' => NULL,
				'gmt_offset' => 0,
			), array(
				'id' => 6452, 'country_id' => 14, 'name' => 'Roebourne', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 6453, 'country_id' => 158, 'name' => 'Roervik', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 6454, 'country_id' => 216, 'name' => 'Rogers', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6455, 'country_id' => 202, 'name' => 'Roi Et', 'name_ru' => 'Рой Ет', 'gmt_offset' => 7,
			), array(
				'id' => 6456, 'country_id' => 14, 'name' => 'Rokeby', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 6457, 'country_id' => 95, 'name' => 'Rokot', 'name_ru' => 'Рокот', 'gmt_offset' => -7,
			), array(
				'id' => 6458, 'country_id' => 216, 'name' => 'Rolla', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id'         => 6459, 'country_id' => 159, 'name' => 'Rolpa', 'name_ru' => 'Ролпа',
				'gmt_offset' => -5.7999999999999998,
			), array(
				'id' => 6460, 'country_id' => 216, 'name' => 'Roma', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6461, 'country_id' => 103, 'name' => 'Rome', 'name_ru' => 'Рим', 'gmt_offset' => 1,
			), array(
				'id' => 6462, 'country_id' => 216, 'name' => 'Rome, NY', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 6463, 'country_id' => 64, 'name' => 'Ronda', 'name_ru' => 'Ронда', 'gmt_offset' => 1,
			), array(
				'id' => 6464, 'country_id' => 46, 'name' => 'Rondon', 'name_ru' => 'Рондон', 'gmt_offset' => 5,
			), array(
				'id' => 6465, 'country_id' => 29, 'name' => 'Rondonopolis', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 6466, 'country_id' => 134, 'name' => 'Rongelap Island', 'name_ru' => NULL, 'gmt_offset' => -12,
			), array(
				'id' => 6467, 'country_id' => 186, 'name' => 'Ronneby', 'name_ru' => 'Роннеби', 'gmt_offset' => 1,
			), array(
				'id' => 6468, 'country_id' => 216, 'name' => 'Roosevelt', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 6469, 'country_id' => 172, 'name' => 'Roosevelt Roads', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 6470, 'country_id' => 14, 'name' => 'Roper Bar', 'name_ru' => 'Ропер-Бэй', 'gmt_offset' => -9.5,
			), array(
				'id' => 6471, 'country_id' => 14, 'name' => 'Roper Valley', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 6472, 'country_id' => 158, 'name' => 'Roros', 'name_ru' => 'Ророс', 'gmt_offset' => -1,
			), array(
				'id' => 6473, 'country_id' => 11, 'name' => 'Rosario', 'name_ru' => 'Росарио', 'gmt_offset' => 8,
			), array(
				'id' => 6474, 'country_id' => 56, 'name' => 'Roseau', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 6475, 'country_id' => 14, 'name' => 'Roseberth', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 6476, 'country_id' => 216, 'name' => 'Roseburg', 'name_ru' => 'Розбург', 'gmt_offset' => 8,
			), array(
				'id' => 6477, 'country_id' => 185, 'name' => 'Roseires', 'name_ru' => 'Росейрес', 'gmt_offset' => -2,
			), array(
				'id' => 6478, 'country_id' => 14, 'name' => 'Rosella Plains', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 6479, 'country_id' => 151, 'name' => 'Rosh Pina', 'name_ru' => 'Рош Пина', 'gmt_offset' => -2,
			), array(
				'id' => 6480, 'country_id' => 156, 'name' => 'Rosita', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6481, 'country_id' => 35, 'name' => 'Ross River', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 6482, 'country_id' => 158, 'name' => 'Rost', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 6483, 'country_id' => 53, 'name' => 'Rostock-laage', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 6484, 'country_id' => 180, 'name' => 'Rostov', 'name_ru' => 'Ростов', 'gmt_offset' => 4,
			), array(
				'id' => 6485, 'country_id' => 216, 'name' => 'Roswell', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 6486, 'country_id' => 140, 'name' => 'Rota', 'name_ru' => 'Рота', 'gmt_offset' => -10,
			), array(
				'id' => 6487, 'country_id' => 73, 'name' => 'Rothesay', 'name_ru' => 'Ротсей', 'gmt_offset' => 0,
			), array(
				'id' => 6488, 'country_id' => 95, 'name' => 'Roti', 'name_ru' => 'Роти', 'gmt_offset' => -8,
			), array(
				'id' => 6489, 'country_id' => 111, 'name' => 'Rotima', 'name_ru' => NULL, 'gmt_offset' => 13,
			), array(
				'id' => 6490, 'country_id' => 162, 'name' => 'Rotorua', 'name_ru' => 'Роторуа', 'gmt_offset' => -12,
			), array(
				'id' => 6491, 'country_id' => 157, 'name' => 'Rotterdam', 'name_ru' => 'Роттердам', 'gmt_offset' => 1,
			), array(
				'id'         => 6492, 'country_id' => 14, 'name' => 'Rottnest Island', 'name_ru' => 'остров Роттнест',
				'gmt_offset' => -8,
			), array(
				'id' => 6493, 'country_id' => 67, 'name' => 'Rotuma Island', 'name_ru' => NULL, 'gmt_offset' => -12,
			), array(
				'id' => 6494, 'country_id' => 216, 'name' => 'Rotunda', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6495, 'country_id' => 71, 'name' => 'Rouen', 'name_ru' => 'Руан', 'gmt_offset' => -1,
			), array(
				'id' => 6496, 'country_id' => 35, 'name' => 'Round Lake', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6497, 'country_id' => 216, 'name' => 'Roundup', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 6498, 'country_id' => 99, 'name' => 'Rourkela', 'name_ru' => 'Руркела', 'gmt_offset' => -5.5,
			), array(
				'id' => 6499, 'country_id' => 216, 'name' => 'Rouses Point', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6500, 'country_id' => 22, 'name' => 'Rousse', 'name_ru' => NULL, 'gmt_offset' => -2,
			),
				array(
					'id'         => 6501, 'country_id' => 35, 'name' => 'Rouyn-Noranda, Quйbec', 'name_ru' => NULL,
					'gmt_offset' => 5,
				), 1 => array(
				'id' => 6502, 'country_id' => 66, 'name' => 'Rovaniemi', 'name_ru' => 'Рованиеми', 'gmt_offset' => 2,
			), array(
				'id' => 6503, 'country_id' => 213, 'name' => 'Rovno', 'name_ru' => 'Ровно', 'gmt_offset' => 3,
			), array(
				'id' => 6504, 'country_id' => 216, 'name' => 'Rowan Bay', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6505, 'country_id' => 168, 'name' => 'Roxas City', 'name_ru' => 'Рохас Сити', 'gmt_offset' => 8,
			), array(
				'id' => 6506, 'country_id' => 14, 'name' => 'Roy Hill', 'name_ru' => 'Рой-Хилл', 'gmt_offset' => -8,
			), array(
				'id' => 6507, 'country_id' => 71, 'name' => 'Royan', 'name_ru' => 'Ройан', 'gmt_offset' => -1,
			), array(
				'id' => 6508, 'country_id' => 86, 'name' => 'Rubelsanto', 'name_ru' => 'Рубелсанто', 'gmt_offset' => 6,
			), array(
				'id' => 6509, 'country_id' => 216, 'name' => 'Ruby', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6510, 'country_id' => 45, 'name' => 'Rugao', 'name_ru' => 'Руган', 'gmt_offset' => 0,
			), array(
				'id' => 6511, 'country_id' => 181, 'name' => 'Ruhengeri', 'name_ru' => 'Руэнгери', 'gmt_offset' => -2,
			), array(
				'id' => 6512, 'country_id' => 216, 'name' => 'Ruidoso', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id'         => 6513, 'country_id' => 159, 'name' => 'Rukumkot', 'name_ru' => 'Рукумкот',
				'gmt_offset' => -5.7999999999999998,
			), array(
				'id' => 6514, 'country_id' => 30, 'name' => 'Rum Cay', 'name_ru' => 'Рум-Кэй', 'gmt_offset' => 5,
			), array(
				'id' => 6515, 'country_id' => 167, 'name' => 'Rumginae', 'name_ru' => 'Румгиней', 'gmt_offset' => 10,
			), array(
				'id'         => 6516, 'country_id' => 159, 'name' => 'Rumjatar', 'name_ru' => NULL,
				'gmt_offset' => -5.7999999999999998,
			), array(
				'id' => 6517, 'country_id' => 151, 'name' => 'Rundu', 'name_ru' => 'Рунду', 'gmt_offset' => -2,
			), array(
				'id' => 6518, 'country_id' => 216, 'name' => 'Rupert', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 6519, 'country_id' => 99, 'name' => 'Rupsi', 'name_ru' => 'Рупси', 'gmt_offset' => -5.5,
			), array(
				'id'         => 6520, 'country_id' => 28, 'name' => 'Rurrenabaque', 'name_ru' => 'Рурренабак',
				'gmt_offset' => 4,
			), array(
				'id' => 6521, 'country_id' => 166, 'name' => 'Rurutu', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 6522, 'country_id' => 216, 'name' => 'Russell', 'name_ru' => 'Расселл', 'gmt_offset' => 6,
			), array(
				'id' => 6523, 'country_id' => 216, 'name' => 'Russian Mission', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6524, 'country_id' => 216, 'name' => 'Ruston', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6525, 'country_id' => 95, 'name' => 'Ruteng', 'name_ru' => 'Рутенг', 'gmt_offset' => -8,
			), array(
				'id' => 6526, 'country_id' => 167, 'name' => 'Ruti', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 6527, 'country_id' => 216, 'name' => 'Rutland', 'name_ru' => 'Рутленд', 'gmt_offset' => 5,
			), array(
				'id'         => 6528, 'country_id' => 14, 'name' => 'Rutland Plains', 'name_ru' => 'Рутланд-Плейнз',
				'gmt_offset' => -10,
			), array(
				'id' => 6529, 'country_id' => 180, 'name' => 'Ryazan', 'name_ru' => 'Рязань', 'gmt_offset' => 4,
			), array(
				'id' => 6530, 'country_id' => 180, 'name' => 'Rybinsk', 'name_ru' => 'Рыбинск', 'gmt_offset' => 4,
			), array(
				'id' => 6531, 'country_id' => 107, 'name' => 'Ryotsu Sado Is', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 6532, 'country_id' => 170, 'name' => 'Rzeszow', 'name_ru' => 'Жешув', 'gmt_offset' => 1,
			), array(
				'id' => 6533, 'country_id' => 55, 'name' => 'Rшnne', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id'         => 6534, 'country_id' => 148, 'name' => 'S.Cristobal deL Casas', 'name_ru' => NULL,
				'gmt_offset' => 0,
			), array(
				'id' => 6535, 'country_id' => 53, 'name' => 'Saarbruecken', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 6536, 'country_id' => 94, 'name' => 'Saarmelleek', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 6537, 'country_id' => 8, 'name' => 'Saba Island', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 6538, 'country_id' => 167, 'name' => 'Sabah', 'name_ru' => 'Сабах', 'gmt_offset' => -10,
			), array(
				'id' => 6539, 'country_id' => 57, 'name' => 'Sabana De Mar', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 6540, 'country_id' => 46, 'name' => 'Sabana De Torres', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6541, 'country_id' => 95, 'name' => 'Sabang', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 6542, 'country_id' => 228, 'name' => 'Sabi Sabi', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 6543, 'country_id' => 35, 'name' => 'Sable Island', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 6544, 'country_id' => 101, 'name' => 'Sabzevar', 'name_ru' => NULL, 'gmt_offset' => 3.5,
			), array(
				'id' => 6545, 'country_id' => 35, 'name' => 'Sachigo Lake', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6546, 'country_id' => 35, 'name' => 'Sachs Harbour', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id'         => 6547, 'country_id' => 216, 'name' => 'Sacramento', 'name_ru' => 'Сакраменто',
				'gmt_offset' => -8,
			), array(
				'id' => 6548, 'country_id' => 216, 'name' => 'Sacramento, CA', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 6549, 'country_id' => 227, 'name' => 'Sadah', 'name_ru' => 'Сада', 'gmt_offset' => -3,
			), array(
				'id' => 6550, 'country_id' => 107, 'name' => 'Sado Shima', 'name_ru' => 'Садо-Сима', 'gmt_offset' => -9,
			), array(
				'id' => 6551, 'country_id' => 11, 'name' => 'Saenz Pena', 'name_ru' => 'Саенц-Пена', 'gmt_offset' => 3,
			), array(
				'id' => 6552, 'country_id' => 216, 'name' => 'Safford', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 6553, 'country_id' => 129, 'name' => 'Safi', 'name_ru' => 'Сафи', 'gmt_offset' => 0,
			), array(
				'id' => 6554, 'country_id' => 167, 'name' => 'Safia', 'name_ru' => 'Сафиа', 'gmt_offset' => -10,
			), array(
				'id' => 6555, 'country_id' => 107, 'name' => 'Saga', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6556, 'country_id' => 167, 'name' => 'Sagarai', 'name_ru' => 'Сагарай', 'gmt_offset' => -10,
			), array(
				'id' => 6557, 'country_id' => 216, 'name' => 'Saginaw Bay', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6558, 'country_id' => 216, 'name' => 'Saginaw, MI', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 6559, 'country_id' => 35, 'name' => 'Saglek', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 6560, 'country_id' => 216, 'name' => 'Sagwon', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id'         => 6561, 'country_id' => 149, 'name' => 'Sahabat 16', 'name_ru' => 'Сахабат-16',
				'gmt_offset' => -8,
			), array(
				'id' => 6562, 'country_id' => 101, 'name' => 'Sahand', 'name_ru' => NULL, 'gmt_offset' => 3.5,
			), array(
				'id' => 6563, 'country_id' => 169, 'name' => 'Sahiwal', 'name_ru' => 'Сахивал', 'gmt_offset' => 5,
			), array(
				'id' => 6564, 'country_id' => 167, 'name' => 'Saibai Island', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6565, 'country_id' => 167, 'name' => 'Saidor', 'name_ru' => 'Сайдор', 'gmt_offset' => -10,
			), array(
				'id' => 6566, 'country_id' => 19, 'name' => 'Saidpur', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id'         => 6567, 'country_id' => 169, 'name' => 'Saidu Sharif', 'name_ru' => 'Саиду-Шариф',
				'gmt_offset' => 5,
			), array(
				'id' => 6568, 'country_id' => 216, 'name' => 'Saint Cloud', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6569, 'country_id' => 216, 'name' => 'Saint George', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 6570, 'country_id' => 35, 'name' => 'Saint John', 'name_ru' => 'Сент Джон', 'gmt_offset' => 4,
			), array(
				'id' => 6571, 'country_id' => 216, 'name' => 'Saint Marys', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id'         => 6572, 'country_id' => 71, 'name' => 'Saint Nazaire', 'name_ru' => 'Сен Назер',
				'gmt_offset' => -1,
			), array(
				'id' => 6573, 'country_id' => 216, 'name' => 'Saint Paul Island', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6574, 'country_id' => 71, 'name' => 'Saint Tropez', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 6575, 'country_id' => 71, 'name' => 'Saint Yan', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 6576, 'country_id' => 133, 'name' => 'Sainte Marie', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 6577, 'country_id' => 140, 'name' => 'Saipan', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 6578, 'country_id' => 182, 'name' => 'Sakaka Al Jouf', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id'         => 6579, 'country_id' => 202, 'name' => 'Sakon Nakhon', 'name_ru' => 'Сакан Накхон',
				'gmt_offset' => -7,
			), array(
				'id' => 6580, 'country_id' => 49, 'name' => 'Sal', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 6581, 'country_id' => 179, 'name' => 'Sala', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 6582, 'country_id' => 163, 'name' => 'Salalah', 'name_ru' => 'Салала', 'gmt_offset' => -4,
			), array(
				'id' => 6583, 'country_id' => 64, 'name' => 'Salamanca', 'name_ru' => 'Саламанка', 'gmt_offset' => -1,
			), array(
				'id' => 6584, 'country_id' => 167, 'name' => 'Salamo', 'name_ru' => 'Саламо', 'gmt_offset' => -10,
			), array(
				'id' => 6585, 'country_id' => 228, 'name' => 'Saldanha Bay', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 6586, 'country_id' => 14, 'name' => 'Sale', 'name_ru' => 'Сейл', 'gmt_offset' => -10,
			), array(
				'id' => 6587, 'country_id' => 180, 'name' => 'Salekhard', 'name_ru' => 'Салехард', 'gmt_offset' => 6,
			), array(
				'id' => 6588, 'country_id' => 216, 'name' => 'Salem', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6589, 'country_id' => 216, 'name' => 'Salida', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 6590, 'country_id' => 147, 'name' => 'Salima', 'name_ru' => 'Салима', 'gmt_offset' => -2,
			), array(
				'id' => 6591, 'country_id' => 216, 'name' => 'Salina', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 6592, 'country_id' => 148, 'name' => 'Salina Cruz', 'name_ru' => 'Залина-Крус',
				'gmt_offset' => 6,
			), array(
				'id' => 6593, 'country_id' => 59, 'name' => 'Salinas', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6594, 'country_id' => 216, 'name' => 'Salisbury', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id'         => 6595, 'country_id' => 216, 'name' => 'Salisbury-Ocean City', 'name_ru' => NULL,
				'gmt_offset' => 5,
			), array(
				'id' => 6596, 'country_id' => 35, 'name' => 'Salluit', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6597, 'country_id' => 216, 'name' => 'Salmon', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 6598, 'country_id' => 35, 'name' => 'Salmon Arm', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 6599, 'country_id' => 199, 'name' => 'Salt Cay', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id'         => 6600, 'country_id' => 216, 'name' => 'Salt Lake City, UT', 'name_ru' => NULL,
				'gmt_offset' => -7,
			), array(
				'id' => 6601, 'country_id' => 11, 'name' => 'Salta', 'name_ru' => 'Сальта', 'gmt_offset' => 3,
			), array(
				'id' => 6602, 'country_id' => 148, 'name' => 'Saltillo', 'name_ru' => 'Сальтильо', 'gmt_offset' => 6,
			), array(
				'id' => 6603, 'country_id' => 217, 'name' => 'Salto', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 6604, 'country_id' => 216, 'name' => 'Salton City', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 6605, 'country_id' => 29, 'name' => 'Salvador, Bahia', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 6606, 'country_id' => 13, 'name' => 'Salzburg', 'name_ru' => 'Зальцбург', 'gmt_offset' => 1,
			), array(
				'id' => 6607, 'country_id' => 119, 'name' => 'Sam Neua', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 6608, 'country_id' => 57, 'name' => 'Samana', 'name_ru' => 'Самана', 'gmt_offset' => 0,
			), array(
				'id' => 6609, 'country_id' => 180, 'name' => 'Samara', 'name_ru' => 'Самара', 'gmt_offset' => 4,
			), array(
				'id' => 6610, 'country_id' => 167, 'name' => 'Samarai Island', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6611, 'country_id' => 95, 'name' => 'Samarinda', 'name_ru' => 'Самаринда', 'gmt_offset' => -8,
			), array(
				'id' => 6612, 'country_id' => 218, 'name' => 'Samarkand', 'name_ru' => 'Самарканд', 'gmt_offset' => 5,
			), array(
				'id' => 6613, 'country_id' => 133, 'name' => 'Sambava', 'name_ru' => 'Самбава', 'gmt_offset' => -3,
			), array(
				'id' => 6614, 'country_id' => 164, 'name' => 'Sambu', 'name_ru' => 'Самбу', 'gmt_offset' => 5,
			), array(
				'id' => 6615, 'country_id' => 108, 'name' => 'Samburu', 'name_ru' => 'Самбуру', 'gmt_offset' => -3,
			), array(
				'id' => 6616, 'country_id' => 115, 'name' => 'Samcheok', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 6617, 'country_id' => 85, 'name' => 'Samos', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 6618, 'country_id' => 95, 'name' => 'Sampit', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 6619, 'country_id' => 208, 'name' => 'Samsun', 'name_ru' => 'Самсун', 'gmt_offset' => 2,
			), array(
				'id' => 6620, 'country_id' => 208, 'name' => 'Samsun/carsamba', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id'         => 6621, 'country_id' => 46, 'name' => 'San Andres Island',
				'name_ru'    => 'Остров Сан Андрес', 'gmt_offset' => 5,
			), array(
				'id' => 6622, 'country_id' => 30, 'name' => 'San Andros', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6623, 'country_id' => 103, 'name' => 'San Angelo', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 6624, 'country_id' => 216, 'name' => 'San Antonio', 'name_ru' => 'Сен Антонио',
				'gmt_offset' => -6,
			), array(
				'id' => 6625, 'country_id' => 11, 'name' => 'San Antonio Oeste', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 6626, 'country_id' => 216, 'name' => 'San Antonio, TX', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id'         => 6627, 'country_id' => 216, 'name' => 'San Bernardino', 'name_ru' => 'Сан Бернардино',
				'gmt_offset' => 8,
			), array(
				'id' => 6628, 'country_id' => 164, 'name' => 'San Blas', 'name_ru' => 'Сан-Блас', 'gmt_offset' => 5,
			), array(
				'id' => 6629, 'country_id' => 28, 'name' => 'San Borja', 'name_ru' => 'Сан-Борха', 'gmt_offset' => 4,
			), array(
				'id'         => 6630, 'country_id' => 156, 'name' => 'San Carlos', 'name_ru' => 'Сан Карлос',
				'gmt_offset' => -6,
			), array(
				'id'         => 6631, 'country_id' => 11, 'name' => 'San Carlos DeBariloche', 'name_ru' => NULL,
				'gmt_offset' => 3,
			), array(
				'id'         => 6632, 'country_id' => 220, 'name' => 'San Cristobal', 'name_ru' => 'Сан-Кристобаль',
				'gmt_offset' => 4,
			), array(
				'id' => 6633, 'country_id' => 216, 'name' => 'San Diego', 'name_ru' => 'Сан Диего', 'gmt_offset' => 8,
			), array(
				'id'         => 6634, 'country_id' => 216, 'name' => 'San Diego/El Cajon, CA', 'name_ru' => NULL,
				'gmt_offset' => -8,
			), array(
				'id' => 6635, 'country_id' => 103, 'name' => 'San Domino Island', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id'         => 6636, 'country_id' => 91, 'name' => 'San Esteban', 'name_ru' => 'Сан-Эстебан',
				'gmt_offset' => 6,
			), array(
				'id' => 6637, 'country_id' => 46, 'name' => 'San Felipe', 'name_ru' => 'Сан-Фелипе', 'gmt_offset' => 5,
			), array(
				'id' => 6638, 'country_id' => 220, 'name' => 'San Felix', 'name_ru' => 'Сан-Феликс', 'gmt_offset' => 4,
			), array(
				'id'         => 6639, 'country_id' => 196, 'name' => 'San Fernando', 'name_ru' => 'Сан Фернандо',
				'gmt_offset' => -6,
			), array(
				'id'         => 6640, 'country_id' => 220, 'name' => 'San Fernando De Apure', 'name_ru' => NULL,
				'gmt_offset' => 4,
			), array(
				'id' => 6641, 'country_id' => 46, 'name' => 'San Fernando, CA', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id'         => 6642, 'country_id' => 11, 'name' => 'San Francisco', 'name_ru' => 'Сан-Кристобаль',
				'gmt_offset' => 0,
			), array(
				'id' => 6643, 'country_id' => 216, 'name' => 'San Francisco, CA', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id'      => 6644, 'country_id' => 103, 'name' => 'San Giovanni Rotondo',
				'name_ru' => 'Сан Джованни Ротондо', 'gmt_offset' => 1,
			), array(
				'id'         => 6645, 'country_id' => 148, 'name' => 'San Ignacio', 'name_ru' => 'Сан-Игнасио',
				'gmt_offset' => 7,
			), array(
				'id' => 6646, 'country_id' => 28, 'name' => 'San Ignacio De M', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id'         => 6647, 'country_id' => 28, 'name' => 'San Ignacio De Velasco', 'name_ru' => NULL,
				'gmt_offset' => 4,
			), array(
				'id' => 6648, 'country_id' => 28, 'name' => 'San Javier', 'name_ru' => 'Сан-Хавьер', 'gmt_offset' => 4,
			), array(
				'id' => 6649, 'country_id' => 28, 'name' => 'San Joaquin', 'name_ru' => 'Сан-Хоакин', 'gmt_offset' => 4,
			), array(
				'id' => 6650, 'country_id' => 48, 'name' => 'San Jose', 'name_ru' => 'Сан-Хосе', 'gmt_offset' => 0,
			), array(
				'id' => 6651, 'country_id' => 148, 'name' => 'San Jose Del Cabo', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 6652, 'country_id' => 46, 'name' => 'San Jose Del Gua', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6653, 'country_id' => 47, 'name' => 'San Josй', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 6654, 'country_id' => 172, 'name' => 'San Juan', 'name_ru' => 'Сан Хуан', 'gmt_offset' => 9,
			), array(
				'id'         => 6655, 'country_id' => 165, 'name' => 'San Juan Aposento',
				'name_ru'    => 'Сан-Хуан-Апосенто', 'gmt_offset' => 5,
			), array(
				'id' => 6656, 'country_id' => 46, 'name' => 'San Juan D Ur', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6657, 'country_id' => 46, 'name' => 'San Juan Del Cesar', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6658, 'country_id' => 48, 'name' => 'San Julian', 'name_ru' => 'Сан-Хулиан', 'gmt_offset' => 5,
			), array(
				'id' => 6659, 'country_id' => 11, 'name' => 'San Luis', 'name_ru' => 'Сан-Луис', 'gmt_offset' => 3,
			), array(
				'id' => 6660, 'country_id' => 46, 'name' => 'San Luis De Pale', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id'         => 6661, 'country_id' => 216, 'name' => 'San Luis Obispo', 'name_ru' => 'Сан Луис Обиспо',
				'gmt_offset' => -8,
			), array(
				'id'         => 6662, 'country_id' => 148, 'name' => 'San Luis Potosi', 'name_ru' => 'Сан-Луис-Потоси',
				'gmt_offset' => 6,
			), array(
				'id'      => 6663, 'country_id' => 148, 'name' => 'San Luis Rio Colorado',
				'name_ru' => 'Сан-Луис-Рио-Колорадо', 'gmt_offset' => 7,
			), array(
				'id' => 6664, 'country_id' => 46, 'name' => 'San Marcos', 'name_ru' => 'Сан-Маркос', 'gmt_offset' => 5,
			), array(
				'id'         => 6665, 'country_id' => 11, 'name' => 'San Martin DeLos Andes', 'name_ru' => NULL,
				'gmt_offset' => 3,
			), array(
				'id' => 6666, 'country_id' => 28, 'name' => 'San Matias', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6667, 'country_id' => 164, 'name' => 'San Miguel', 'name_ru' => 'Сан-Мигель', 'gmt_offset' => 5,
			), array(
				'id' => 6668, 'country_id' => 41, 'name' => 'San Pedro', 'name_ru' => 'Сан-Педро', 'gmt_offset' => 8,
			), array(
				'id'         => 6669, 'country_id' => 46, 'name' => 'San Pedro Jagua', 'name_ru' => 'Сан-Педро-Жапуа',
				'gmt_offset' => 5,
			), array(
				'id' => 6670, 'country_id' => 91, 'name' => 'San Pedro Sula', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6671, 'country_id' => 46, 'name' => 'San Pedro Uraba', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 6672, 'country_id' => 148, 'name' => 'San Quintin', 'name_ru' => 'Сан-Кинтин',
				'gmt_offset' => 8,
			), array(
				'id' => 6673, 'country_id' => 11, 'name' => 'San Rafael', 'name_ru' => 'Сан-Рафаэль', 'gmt_offset' => 4,
			), array(
				'id' => 6674, 'country_id' => 28, 'name' => 'San Ramon', 'name_ru' => 'Сан-Рамон', 'gmt_offset' => 4,
			), array(
				'id'         => 6675, 'country_id' => 196, 'name' => 'San Salvador', 'name_ru' => 'Сан-Сальвадор',
				'gmt_offset' => -5,
			), array(
				'id' => 6676, 'country_id' => 220, 'name' => 'San Salvador De', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id'         => 6677, 'country_id' => 64, 'name' => 'San Sebas De La Gomera', 'name_ru' => NULL,
				'gmt_offset' => 0,
			), array(
				'id'         => 6678, 'country_id' => 64, 'name' => 'San Sebastian', 'name_ru' => 'Сан-Себастьян',
				'gmt_offset' => -1,
			), array(
				'id' => 6679, 'country_id' => 220, 'name' => 'San Tome', 'name_ru' => 'Сан-Томе', 'gmt_offset' => -4,
			), array(
				'id' => 6680, 'country_id' => 46, 'name' => 'San Vicente', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6681, 'country_id' => 103, 'name' => 'San Vito', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 6682, 'country_id' => 95, 'name' => 'Sanana', 'name_ru' => 'Санана', 'gmt_offset' => -9,
			), array(
				'id' => 6683, 'country_id' => 101, 'name' => 'Sanandaj', 'name_ru' => 'Санандадж', 'gmt_offset' => -3.5,
			), array(
				'id'         => 6684, 'country_id' => 48, 'name' => 'Sancti Spiritus', 'name_ru' => 'Санкти-Спиритус',
				'gmt_offset' => 5,
			), array(
				'id' => 6685, 'country_id' => 216, 'name' => 'Sand Point', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6686, 'country_id' => 149, 'name' => 'Sandakan', 'name_ru' => 'Сандакан', 'gmt_offset' => -8,
			), array(
				'id' => 6687, 'country_id' => 158, 'name' => 'Sandane', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 6688, 'country_id' => 73, 'name' => 'Sanday', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6689, 'country_id' => 89, 'name' => 'Sandcreek', 'name_ru' => 'Сендкрик', 'gmt_offset' => 3,
			), array(
				'id' => 6690, 'country_id' => 158, 'name' => 'Sandnes', 'name_ru' => 'Сенднес', 'gmt_offset' => 1,
			), array(
				'id'         => 6691, 'country_id' => 158, 'name' => 'Sandnessjoen', 'name_ru' => 'Санднессьоен',
				'gmt_offset' => -1,
			), array(
				'id' => 6692, 'country_id' => 14, 'name' => 'Sandringham', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 6693, 'country_id' => 35, 'name' => 'Sandspit', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 6694, 'country_id' => 14, 'name' => 'Sandstone', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 6695, 'country_id' => 216, 'name' => 'Sandusky', 'name_ru' => 'Сандуски', 'gmt_offset' => 5,
			), array(
				'id' => 6696, 'country_id' => 19, 'name' => 'Sandwip', 'name_ru' => 'Сандвип', 'gmt_offset' => -6,
			), array(
				'id' => 6697, 'country_id' => 35, 'name' => 'Sandy Lake', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6698, 'country_id' => 216, 'name' => 'Sandy River', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id'         => 6699, 'country_id' => 159, 'name' => 'Sanfebagar', 'name_ru' => 'Санфебагар',
				'gmt_offset' => -5.7999999999999998,
			), array(
				'id' => 6700, 'country_id' => 216, 'name' => 'Sanford', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id'         => 6701, 'country_id' => 168, 'name' => 'Sanga Sanga', 'name_ru' => 'Санга-Санга',
				'gmt_offset' => -8,
			), array(
				'id' => 6702, 'country_id' => 167, 'name' => 'Sangapi', 'name_ru' => 'Сангапи', 'gmt_offset' => -10,
			), array(
				'id' => 6703, 'country_id' => 95, 'name' => 'Sanggata', 'name_ru' => 'Санггата', 'gmt_offset' => -8,
			), array(
				'id' => 6704, 'country_id' => 95, 'name' => 'Sangir', 'name_ru' => 'Сангир', 'gmt_offset' => -8,
			), array(
				'id'         => 6705, 'country_id' => 168, 'name' => 'Sangley Point', 'name_ru' => 'Сангли-Пойнт',
				'gmt_offset' => 8,
			), array(
				'id' => 6706, 'country_id' => 35, 'name' => 'Sanikiluaq', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6707, 'country_id' => 208, 'name' => 'Sanliurfa', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 6708, 'country_id' => 35, 'name' => 'Sans Souci', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6709, 'country_id' => 46, 'name' => 'Santa Ana', 'name_ru' => 'Санта-Ана', 'gmt_offset' => 5,
			), array(
				'id'         => 6710, 'country_id' => 216, 'name' => 'Santa Barbara', 'name_ru' => 'Санта-Барбара-Ба',
				'gmt_offset' => 8,
			), array(
				'id' => 6711, 'country_id' => 220, 'name' => 'Santa Barbara Ba', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 6712, 'country_id' => 220, 'name' => 'Santa Barbara Ed', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id'         => 6713, 'country_id' => 185, 'name' => 'Santa Carolina', 'name_ru' => 'Санта-Каролина',
				'gmt_offset' => 0,
			), array(
				'id'         => 6714, 'country_id' => 46, 'name' => 'Santa Catalina', 'name_ru' => 'Санта-Каталина',
				'gmt_offset' => 5,
			), array(
				'id'         => 6715, 'country_id' => 48, 'name' => 'Santa Clara', 'name_ru' => 'Санта-Клара',
				'gmt_offset' => 4,
			), array(
				'id'         => 6716, 'country_id' => 11, 'name' => 'Santa Cruz', 'name_ru' => 'Санта-Круз-Айленд',
				'gmt_offset' => 3,
			), array(
				'id'         => 6717, 'country_id' => 64, 'name' => 'Santa Cruz De La Palma', 'name_ru' => NULL,
				'gmt_offset' => 0,
			), array(
				'id' => 6718, 'country_id' => 29, 'name' => 'Santa Cruz Do Sul', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6719, 'country_id' => 183, 'name' => 'Santa Cruz Is', 'name_ru' => NULL, 'gmt_offset' => -11,
			), array(
				'id'         => 6720, 'country_id' => 220, 'name' => 'Santa Elena', 'name_ru' => 'Санта-Элена',
				'gmt_offset' => 4,
			), array(
				'id' => 6721, 'country_id' => 216, 'name' => 'Santa Fe', 'name_ru' => 'Санта Фе', 'gmt_offset' => 7,
			), array(
				'id' => 6722, 'country_id' => 29, 'name' => 'Santa Fe Do Sul', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id'         => 6723, 'country_id' => 29, 'name' => 'Santa Isabel do Morro', 'name_ru' => NULL,
				'gmt_offset' => 3,
			), array(
				'id'         => 6724, 'country_id' => 61, 'name' => 'Santa Katarina', 'name_ru' => 'Санта-Катарина',
				'gmt_offset' => -2,
			), array(
				'id' => 6725, 'country_id' => 148, 'name' => 'Santa Lucia', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id'         => 6726, 'country_id' => 173, 'name' => 'Santa Maria', 'name_ru' => 'Санта-Мария',
				'gmt_offset' => 8,
			), array(
				'id' => 6727, 'country_id' => 29, 'name' => 'Santa Maria, Rs', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id'         => 6728, 'country_id' => 46, 'name' => 'Santa Marta', 'name_ru' => 'Санта Марта',
				'gmt_offset' => 5,
			), array(
				'id'         => 6729, 'country_id' => 216, 'name' => 'Santa Monica', 'name_ru' => 'Санта Моника',
				'gmt_offset' => -8,
			), array(
				'id' => 6730, 'country_id' => 216, 'name' => 'Santa Paula', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 6731, 'country_id' => 11, 'name' => 'Santa Rosa', 'name_ru' => 'Санта-Роса', 'gmt_offset' => 3,
			), array(
				'id' => 6732, 'country_id' => 91, 'name' => 'Santa Rosa Copan', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id'         => 6733, 'country_id' => 148, 'name' => 'Santa Rosalia', 'name_ru' => 'Санта-Росалия',
				'gmt_offset' => 7,
			), array(
				'id'         => 6734, 'country_id' => 11, 'name' => 'Santa Teresita', 'name_ru' => 'Санта-Тересита',
				'gmt_offset' => 3,
			), array(
				'id'         => 6735, 'country_id' => 29, 'name' => 'Santa Terezinha', 'name_ru' => 'Санта-Терезинья',
				'gmt_offset' => 4,
			), array(
				'id' => 6736, 'country_id' => 29, 'name' => 'Santa Vitoria', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 6737, 'country_id' => 216, 'name' => 'Santa Ynez', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 6738, 'country_id' => 29, 'name' => 'Santana Do Araguaia', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id'         => 6739, 'country_id' => 46, 'name' => 'Santana Ramos', 'name_ru' => 'Сантана-Рамос',
				'gmt_offset' => 5,
			), array(
				'id' => 6740, 'country_id' => 64, 'name' => 'Santander', 'name_ru' => 'Сантандер', 'gmt_offset' => -1,
			), array(
				'id' => 6741, 'country_id' => 29, 'name' => 'Santarem', 'name_ru' => 'Сантарем', 'gmt_offset' => 3,
			), array(
				'id' => 6742, 'country_id' => 43, 'name' => 'Santiago', 'name_ru' => 'Сантьяго', 'gmt_offset' => 0,
			), array(
				'id'      => 6743, 'country_id' => 64, 'name' => 'Santiago De Compostela',
				'name_ru' => 'Сантьяго де Компостела', 'gmt_offset' => 1,
			), array(
				'id' => 6744, 'country_id' => 11, 'name' => 'Santiago Del Estero', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 6745, 'country_id' => 29, 'name' => 'Santo Angelo', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id'         => 6746, 'country_id' => 49, 'name' => 'Santo Antao', 'name_ru' => 'Санто-Антао',
				'gmt_offset' => 1,
			), array(
				'id'         => 6747, 'country_id' => 57, 'name' => 'Santo Domingo', 'name_ru' => 'Санто-Доминго',
				'gmt_offset' => -4,
			), array(
				'id' => 6748, 'country_id' => 85, 'name' => 'Santorini (Thira)', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 6749, 'country_id' => 29, 'name' => 'Santos', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 6750, 'country_id' => 45, 'name' => 'Sanya', 'name_ru' => 'Санья', 'gmt_offset' => 8,
			), array(
				'id'         => 6751, 'country_id' => 29, 'name' => 'Sao Felix Do Araguaia', 'name_ru' => NULL,
				'gmt_offset' => 4,
			), array(
				'id' => 6752, 'country_id' => 29, 'name' => 'Sao Felix Do Xingu', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 6753, 'country_id' => 49, 'name' => 'Sao Filipe', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id'         => 6754, 'country_id' => 29, 'name' => 'Sao Gabriel', 'name_ru' => 'Сан-Габриэл',
				'gmt_offset' => 3,
			), array(
				'id' => 6755, 'country_id' => 173, 'name' => 'Sao Jorge Island', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id'      => 6756, 'country_id' => 29, 'name' => 'Sao Jose Do Rio Preto',
				'name_ru' => 'Сан Хосе Ду Рио Прето', 'gmt_offset' => 3,
			), array(
				'id' => 6757, 'country_id' => 29, 'name' => 'Sao Jose Dos Campos', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id'         => 6758, 'country_id' => 29, 'name' => 'Sao Lourenco', 'name_ru' => 'Сан-Лоуренсу',
				'gmt_offset' => 3,
			), array(
				'id'         => 6759, 'country_id' => 29, 'name' => 'Sao Lourenco Do Sul', 'name_ru' => NULL,
				'gmt_offset' => -2,
			), array(
				'id' => 6760, 'country_id' => 29, 'name' => 'Sao Mateus', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id'         => 6761, 'country_id' => 29, 'name' => 'Sao Miguel Araguaia', 'name_ru' => NULL,
				'gmt_offset' => -3,
			), array(
				'id'         => 6762, 'country_id' => 29, 'name' => 'Sao Miguel Do Oeste', 'name_ru' => NULL,
				'gmt_offset' => -3,
			), array(
				'id' => 6763, 'country_id' => 49, 'name' => 'Sao Nicolau', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 6764, 'country_id' => 29, 'name' => 'Sao Paulo', 'name_ru' => 'Сао Паоло', 'gmt_offset' => 0,
			), array(
				'id' => 6765, 'country_id' => 195, 'name' => 'Sao Tome Is', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6766, 'country_id' => 49, 'name' => 'Sao Vicente', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 6767, 'country_id' => 167, 'name' => 'Sapmanga', 'name_ru' => 'Сапманга', 'gmt_offset' => -10,
			), array(
				'id' => 6768, 'country_id' => 165, 'name' => 'Saposoa', 'name_ru' => 'Субик-Бей', 'gmt_offset' => 0,
			), array(
				'id' => 6769, 'country_id' => 107, 'name' => 'Sapporo', 'name_ru' => 'Саппоро', 'gmt_offset' => -9,
			), array(
				'id' => 6770, 'country_id' => 67, 'name' => 'Saqani', 'name_ru' => 'Сакани', 'gmt_offset' => -12,
			), array(
				'id' => 6771, 'country_id' => 80, 'name' => 'Saqqaq', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6772, 'country_id' => 224, 'name' => 'Sara', 'name_ru' => 'Сара', 'gmt_offset' => -11,
			), array(
				'id' => 6773, 'country_id' => 17, 'name' => 'Sarajevo', 'name_ru' => 'Сараево', 'gmt_offset' => -1,
			), array(
				'id' => 6774, 'country_id' => 101, 'name' => 'Sarakhs', 'name_ru' => NULL, 'gmt_offset' => 3.5,
			), array(
				'id' => 6775, 'country_id' => 216, 'name' => 'Saranac Lake', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6776, 'country_id' => 180, 'name' => 'Saransk', 'name_ru' => 'Саранск', 'gmt_offset' => 4,
			), array(
				'id' => 6777, 'country_id' => 216, 'name' => 'Sarasota, FL', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 6778, 'country_id' => 216, 'name' => 'Saratoga', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6779, 'country_id' => 180, 'name' => 'Saratov', 'name_ru' => 'Саратов', 'gmt_offset' => 4,
			), array(
				'id' => 6780, 'country_id' => 119, 'name' => 'Saravane', 'name_ru' => 'Сараване', 'gmt_offset' => -7,
			), array(
				'id' => 6781, 'country_id' => 46, 'name' => 'Saravena', 'name_ru' => 'Саравена', 'gmt_offset' => 5,
			), array(
				'id' => 6782, 'country_id' => 3, 'name' => 'Sardeh Band', 'name_ru' => 'Сардех-Банд', 'gmt_offset' => 0,
			), array(
				'id' => 6783, 'country_id' => 169, 'name' => 'Sargodha', 'name_ru' => 'Саргодха', 'gmt_offset' => -5,
			), array(
				'id' => 6784, 'country_id' => 200, 'name' => 'Sarh', 'name_ru' => 'Сарх', 'gmt_offset' => -1,
			), array(
				'id' => 6785, 'country_id' => 58, 'name' => 'Sarichef', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6786, 'country_id' => 95, 'name' => 'Sarmi', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 6787, 'country_id' => 35, 'name' => 'Sarnia', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 6788, 'country_id' => 34, 'name' => 'Sartaneja', 'name_ru' => 'Сартанеджа', 'gmt_offset' => 6,
			), array(
				'id' => 6789, 'country_id' => 101, 'name' => 'Sary', 'name_ru' => 'Сари', 'gmt_offset' => -3.5,
			), array(
				'id' => 6790, 'country_id' => 167, 'name' => 'Sasereme', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6791, 'country_id' => 35, 'name' => 'Saskatoon', 'name_ru' => 'Саскатун', 'gmt_offset' => 0,
			), array(
				'id' => 6792, 'country_id' => 41, 'name' => 'Sassandra', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6793, 'country_id' => 123, 'name' => 'Sasstown', 'name_ru' => 'Сасстаун', 'gmt_offset' => 0,
			), array(
				'id' => 6794, 'country_id' => 99, 'name' => 'Satna', 'name_ru' => 'Сатна', 'gmt_offset' => -5.5,
			), array(
				'id' => 6795, 'country_id' => 178, 'name' => 'Satu Mare', 'name_ru' => 'Сату Маре', 'gmt_offset' => -2,
			), array(
				'id' => 6796, 'country_id' => 167, 'name' => 'Satwag', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id'         => 6797, 'country_id' => 102, 'name' => 'Saudarkrokur', 'name_ru' => 'Саударкрокур',
				'gmt_offset' => 0,
			), array(
				'id' => 6798, 'country_id' => 76, 'name' => 'Saul', 'name_ru' => 'Саул', 'gmt_offset' => 3,
			), array(
				'id'         => 6799, 'country_id' => 216, 'name' => 'Sault Ste Marie', 'name_ru' => 'Со Сен Мари',
				'gmt_offset' => 5,
			), array(
				'id' => 6800, 'country_id' => 95, 'name' => 'Saumlaki', 'name_ru' => 'Саумлаки', 'gmt_offset' => -9,
			), array(
				'id' => 6801, 'country_id' => 158, 'name' => 'Sauren', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 6802, 'country_id' => 9, 'name' => 'Saurimo', 'name_ru' => 'Сауримо', 'gmt_offset' => -1,
			), array(
				'id' => 6803, 'country_id' => 216, 'name' => 'Sausalito, CA', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 6804, 'country_id' => 216, 'name' => 'Savannah', 'name_ru' => 'Саванна', 'gmt_offset' => 5,
			), array(
				'id' => 6805, 'country_id' => 216, 'name' => 'Savannah, GA', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id'         => 6806, 'country_id' => 119, 'name' => 'Savannakhet', 'name_ru' => 'Сваннакхэт',
				'gmt_offset' => -7,
			), array(
				'id' => 6807, 'country_id' => 25, 'name' => 'Save', 'name_ru' => 'Саве', 'gmt_offset' => -1,
			), array(
				'id' => 6808, 'country_id' => 183, 'name' => 'Savo', 'name_ru' => 'Саво', 'gmt_offset' => -11,
			), array(
				'id' => 6809, 'country_id' => 66, 'name' => 'Savonlinna', 'name_ru' => 'Савонлинна', 'gmt_offset' => 2,
			), array(
				'id' => 6810, 'country_id' => 216, 'name' => 'Savoonga', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6811, 'country_id' => 67, 'name' => 'Savusavu', 'name_ru' => 'Савусаву', 'gmt_offset' => -12,
			), array(
				'id' => 6812, 'country_id' => 32, 'name' => 'Savuti', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6813, 'country_id' => 169, 'name' => 'Sawan', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6814, 'country_id' => 95, 'name' => 'Sawu', 'name_ru' => 'Саву', 'gmt_offset' => -8,
			), array(
				'id' => 6815, 'country_id' => 119, 'name' => 'Sayaboury', 'name_ru' => 'Сайабори', 'gmt_offset' => -7,
			), array(
				'id' => 6816, 'country_id' => 216, 'name' => 'Scammon Bay', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6817, 'country_id' => 73, 'name' => 'Scampton', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6818, 'country_id' => 216, 'name' => 'Schaumburg', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6819, 'country_id' => 35, 'name' => 'Schefferville', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6820, 'country_id' => 170, 'name' => 'Schenectady', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 6821, 'country_id' => 216, 'name' => 'Schenectady, NY', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 6822, 'country_id' => 53, 'name' => 'Schleswig-jagel', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 6823, 'country_id' => 53, 'name' => 'Schwerin', 'name_ru' => 'Шверин', 'gmt_offset' => 1,
			), array(
				'id' => 6824, 'country_id' => 14, 'name' => 'Scone', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 6825, 'country_id' => 216, 'name' => 'Scottsbluff', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 6826, 'country_id' => 216, 'name' => 'Scranton', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6827, 'country_id' => 216, 'name' => 'Scribner', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6828, 'country_id' => 65, 'name' => 'Scusciuban', 'name_ru' => 'Скускубан', 'gmt_offset' => 0,
			), array(
				'id' => 6829, 'country_id' => 216, 'name' => 'Seal Bay', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6830, 'country_id' => 216, 'name' => 'Searcy', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6831, 'country_id' => 216, 'name' => 'Seattle', 'name_ru' => 'Сиэттл', 'gmt_offset' => -8,
			), array(
				'id' => 6832, 'country_id' => 216, 'name' => 'Seattle, WA', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 6833, 'country_id' => 21, 'name' => 'Sebba', 'name_ru' => 'Себба', 'gmt_offset' => 0,
			), array(
				'id' => 6834, 'country_id' => 128, 'name' => 'Sebha', 'name_ru' => 'Себа', 'gmt_offset' => -2,
			), array(
				'id' => 6835, 'country_id' => 216, 'name' => 'Sebring, Fl', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6836, 'country_id' => 35, 'name' => 'Sechelt', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 6837, 'country_id' => 228, 'name' => 'Secunda', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 6838, 'country_id' => 216, 'name' => 'Sedalia', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6839, 'country_id' => 216, 'name' => 'Sedona', 'name_ru' => 'Седона', 'gmt_offset' => 7,
			), array(
				'id' => 6840, 'country_id' => 183, 'name' => 'Sege', 'name_ru' => 'Сиж', 'gmt_offset' => -11,
			), array(
				'id' => 6841, 'country_id' => 136, 'name' => 'Segou', 'name_ru' => 'Сегу', 'gmt_offset' => 0,
			), array(
				'id' => 6842, 'country_id' => 41, 'name' => 'Seguela', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 6843, 'country_id' => 124, 'name' => 'Sehonghong', 'name_ru' => 'Сехонгхонг',
				'gmt_offset' => -2,
			), array(
				'id' => 6844, 'country_id' => 167, 'name' => 'Sehulea', 'name_ru' => 'Сехулеа', 'gmt_offset' => -10,
			), array(
				'id' => 6845, 'country_id' => 123, 'name' => 'Sehwen Sharif', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6846, 'country_id' => 66, 'name' => 'Seinajoki', 'name_ru' => 'Сейнайоки', 'gmt_offset' => 2,
			), array(
				'id' => 6847, 'country_id' => 227, 'name' => 'Seiyun', 'name_ru' => 'Сейюн', 'gmt_offset' => -3,
			), array(
				'id' => 6848, 'country_id' => 124, 'name' => 'Sekakes', 'name_ru' => 'Секакес', 'gmt_offset' => -2,
			), array(
				'id' => 6849, 'country_id' => 216, 'name' => 'Selawik', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6850, 'country_id' => 167, 'name' => 'Selbang', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 6851, 'country_id' => 216, 'name' => 'Seldovia', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6852, 'country_id' => 32, 'name' => 'Selebi-Phikwe', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 6853, 'country_id' => 142, 'name' => 'Selibaby', 'name_ru' => 'Селибаби', 'gmt_offset' => 0,
			), array(
				'id' => 6854, 'country_id' => 216, 'name' => 'Selinsgrove', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6855, 'country_id' => 158, 'name' => 'Selje', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 6856, 'country_id' => 216, 'name' => 'Selma', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6857, 'country_id' => 95, 'name' => 'Semarang', 'name_ru' => 'Семаранг', 'gmt_offset' => 7,
			), array(
				'id' => 6858, 'country_id' => 149, 'name' => 'Sematan', 'name_ru' => 'Семантан', 'gmt_offset' => -8,
			), array(
				'id' => 6859, 'country_id' => 53, 'name' => 'Sembach', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 6860, 'country_id' => 149, 'name' => 'Semera', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id'         => 6861, 'country_id' => 118, 'name' => 'Semipalatinsk', 'name_ru' => 'Семипалатинск',
				'gmt_offset' => 6,
			), array(
				'id'         => 6862, 'country_id' => 124, 'name' => 'Semongkong', 'name_ru' => 'Семонгконг',
				'gmt_offset' => -2,
			), array(
				'id' => 6863, 'country_id' => 149, 'name' => 'Semporna', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 6864, 'country_id' => 29, 'name' => 'Sena Madureira', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6865, 'country_id' => 229, 'name' => 'Senanga', 'name_ru' => 'Сенанга', 'gmt_offset' => -2,
			), array(
				'id' => 6866, 'country_id' => 107, 'name' => 'Sendai', 'name_ru' => 'Сендай', 'gmt_offset' => -9,
			), array(
				'id' => 6867, 'country_id' => 95, 'name' => 'Senggeh', 'name_ru' => 'Сенггех', 'gmt_offset' => -9,
			), array(
				'id' => 6868, 'country_id' => 95, 'name' => 'Senggo', 'name_ru' => 'Сенгго', 'gmt_offset' => -9,
			), array(
				'id' => 6869, 'country_id' => 29, 'name' => 'Senhor Do Bonfim', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 6870, 'country_id' => 95, 'name' => 'Senipah', 'name_ru' => 'Сенипах', 'gmt_offset' => 8,
			), array(
				'id' => 6871, 'country_id' => 119, 'name' => 'Seno', 'name_ru' => 'Сено', 'gmt_offset' => -7,
			), array(
				'id' => 6872, 'country_id' => 115, 'name' => 'Seoul', 'name_ru' => 'Сеул', 'gmt_offset' => 9,
			), array(
				'id' => 6873, 'country_id' => 167, 'name' => 'Sepik Plains', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 6874, 'country_id' => 35, 'name' => 'Sept-Iles', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6875, 'country_id' => 149, 'name' => 'Sepulot', 'name_ru' => 'Сепулот', 'gmt_offset' => -8,
			), array(
				'id' => 6876, 'country_id' => 216, 'name' => 'Sequim', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 6877, 'country_id' => 212, 'name' => 'Seronera', 'name_ru' => 'Серонера', 'gmt_offset' => -3,
			), array(
				'id' => 6878, 'country_id' => 29, 'name' => 'Serra Norte', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id'         => 6879, 'country_id' => 29, 'name' => 'Serra Pelada', 'name_ru' => 'Серра-Пелада',
				'gmt_offset' => 3,
			), array(
				'id'         => 6880, 'country_id' => 71, 'name' => 'Serre Chevalier', 'name_ru' => 'Сер-Шевалье',
				'gmt_offset' => -1,
			), array(
				'id' => 6881, 'country_id' => 128, 'name' => 'Sert', 'name_ru' => 'Серт', 'gmt_offset' => -2,
			), array(
				'id' => 6882, 'country_id' => 95, 'name' => 'Serui', 'name_ru' => 'Серуи', 'gmt_offset' => -9,
			), array(
				'id' => 6883, 'country_id' => 229, 'name' => 'Sesheke', 'name_ru' => 'Сешеке', 'gmt_offset' => -2,
			), array(
				'id' => 6884, 'country_id' => 124, 'name' => 'Seshutes', 'name_ru' => 'Сешутес', 'gmt_offset' => -2,
			), array(
				'id' => 6885, 'country_id' => 151, 'name' => 'Sesriem', 'name_ru' => 'Сезрим', 'gmt_offset' => 0,
			), array(
				'id' => 6886, 'country_id' => 58, 'name' => 'Setif', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 6887, 'country_id' => 72, 'name' => 'Sette Cama', 'name_ru' => 'Сетте-Кама', 'gmt_offset' => -1,
			), array(
				'id' => 6888, 'country_id' => 64, 'name' => 'Seu De Urgel', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id'         => 6889, 'country_id' => 213, 'name' => 'Sevastopol', 'name_ru' => 'Севастополь',
				'gmt_offset' => 2,
			), array(
				'id'         => 6890, 'country_id' => 213, 'name' => 'Severodoneck', 'name_ru' => 'Северодонецк',
				'gmt_offset' => 3,
			), array(
				'id' => 6891, 'country_id' => 64, 'name' => 'Sevilla', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 6892, 'country_id' => 216, 'name' => 'Sewanee', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 6893, 'country_id' => 216, 'name' => 'Seward', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6894, 'country_id' => 102, 'name' => 'Seydisfjordur', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6895, 'country_id' => 216, 'name' => 'Seymour', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6896, 'country_id' => 205, 'name' => 'Sfax', 'name_ru' => 'Сфакс', 'gmt_offset' => -1,
			), array(
				'id' => 6897, 'country_id' => 216, 'name' => 'Shafter', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 6898, 'country_id' => 216, 'name' => 'Shageluk', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6899, 'country_id' => 101, 'name' => 'Shahre-kord', 'name_ru' => NULL, 'gmt_offset' => 3.5,
			), array(
				'id' => 6900, 'country_id' => 32, 'name' => 'Shakawe', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 6901, 'country_id' => 65, 'name' => 'Shakiso', 'name_ru' => 'Шакисо', 'gmt_offset' => -3,
			), array(
				'id' => 6902, 'country_id' => 216, 'name' => 'Shaktoolik', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6903, 'country_id' => 35, 'name' => 'Shamattawa', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id'         => 6904, 'country_id' => 19, 'name' => 'Shamshernagar', 'name_ru' => 'Шамшернагар',
				'gmt_offset' => -6,
			), array(
				'id' => 6905, 'country_id' => 45, 'name' => 'Shanghai', 'name_ru' => 'Шанхай', 'gmt_offset' => 8,
			), array(
				'id' => 6906, 'country_id' => 216, 'name' => 'Shangri-la', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6907, 'country_id' => 45, 'name' => 'Shanhaiguan', 'name_ru' => 'Шаньягван', 'gmt_offset' => -8,
			), array(
				'id' => 6908, 'country_id' => 96, 'name' => 'Shannon', 'name_ru' => 'Шеннон', 'gmt_offset' => 0,
			), array(
				'id' => 6909, 'country_id' => 45, 'name' => 'Shanshan', 'name_ru' => 'Шаньшань', 'gmt_offset' => -8,
			), array(
				'id' => 6910, 'country_id' => 45, 'name' => 'Shantou', 'name_ru' => 'Шаньтоу', 'gmt_offset' => -8,
			), array(
				'id' => 6911, 'country_id' => 45, 'name' => 'Shanzhou', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6912, 'country_id' => 45, 'name' => 'Shaoguan', 'name_ru' => 'Шаогуань', 'gmt_offset' => -8,
			), array(
				'id' => 6913, 'country_id' => 2, 'name' => 'Sharjah', 'name_ru' => 'Шарджа', 'gmt_offset' => 4,
			), array(
				'id' => 6914, 'country_id' => 61, 'name' => 'Shark Elowainat', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id'         => 6915, 'country_id' => 61, 'name' => 'Sharm El Sheikh', 'name_ru' => 'Шарм Эль Шейх',
				'gmt_offset' => 2,
			), array(
				'id' => 6916, 'country_id' => 182, 'name' => 'Sharurah', 'name_ru' => 'Шарура', 'gmt_offset' => -3,
			), array(
				'id' => 6917, 'country_id' => 45, 'name' => 'Shashi', 'name_ru' => 'Шаши', 'gmt_offset' => -8,
			), array(
				'id' => 6918, 'country_id' => 14, 'name' => 'Shaw River', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 6919, 'country_id' => 216, 'name' => 'Shawnee', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6920, 'country_id' => 14, 'name' => 'Shay Gap', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 6921, 'country_id' => 45, 'name' => 'She Kou', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 6922, 'country_id' => 35, 'name' => 'Shearwater', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 6923, 'country_id' => 216, 'name' => 'Sheboygan', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6924, 'country_id' => 216, 'name' => 'Sheep Mountain', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6925, 'country_id' => 216, 'name' => 'Sheffield', 'name_ru' => 'Шеффилд', 'gmt_offset' => -6,
			), array(
				'id' => 6926, 'country_id' => 203, 'name' => 'Sheghnan', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6927, 'country_id' => 65, 'name' => 'Shehdi', 'name_ru' => 'Шехди', 'gmt_offset' => 0,
			), array(
				'id' => 6928, 'country_id' => 90, 'name' => 'Shek Mum', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 6929, 'country_id' => 45, 'name' => 'Shekou', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 6930, 'country_id' => 216, 'name' => 'Shelby', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 6931, 'country_id' => 216, 'name' => 'Shelbyville', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6932, 'country_id' => 216, 'name' => 'Sheldon Point', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6933, 'country_id' => 216, 'name' => 'Shelton', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 6934, 'country_id' => 216, 'name' => 'Shemya', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 6935, 'country_id' => 45, 'name' => 'Shenyang', 'name_ru' => 'Шеньян', 'gmt_offset' => 8,
			), array(
				'id' => 6936, 'country_id' => 45, 'name' => 'Shenzhen', 'name_ru' => 'Шэньчжэнь', 'gmt_offset' => 8,
			), array(
				'id' => 6937, 'country_id' => 14, 'name' => 'Shepparton', 'name_ru' => 'Шеппартон', 'gmt_offset' => -10,
			), array(
				'id' => 6938, 'country_id' => 35, 'name' => 'Sherbrooke', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6939, 'country_id' => 216, 'name' => 'Sheridan', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 6940, 'country_id' => 216, 'name' => 'Sherman-Denison', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6941, 'country_id' => 73, 'name' => 'Shetland Islands', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6942, 'country_id' => 45, 'name' => 'Shijiazhuang', 'name_ru' => 'Шицзяжун', 'gmt_offset' => -8,
			), array(
				'id' => 6943, 'country_id' => 169, 'name' => 'Shikarpur', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6944, 'country_id' => 65, 'name' => 'Shillavo', 'name_ru' => 'Шилаво', 'gmt_offset' => 0,
			), array(
				'id' => 6945, 'country_id' => 99, 'name' => 'Shillong', 'name_ru' => 'Шиллонг', 'gmt_offset' => 5.5,
			), array(
				'id' => 6946, 'country_id' => 35, 'name' => 'Shilo', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 6947, 'country_id' => 118, 'name' => 'Shimkent', 'name_ru' => 'Шимкент', 'gmt_offset' => 6,
			), array(
				'id'         => 6948, 'country_id' => 107, 'name' => 'Shimojishima', 'name_ru' => 'Симожисима',
				'gmt_offset' => -9,
			), array(
				'id' => 6949, 'country_id' => 212, 'name' => 'Shinyanga', 'name_ru' => 'Шиньянга', 'gmt_offset' => -3,
			), array(
				'id' => 6950, 'country_id' => 107, 'name' => 'Shirahama', 'name_ru' => 'Ширахама', 'gmt_offset' => 9,
			), array(
				'id' => 6951, 'country_id' => 101, 'name' => 'Shiraz', 'name_ru' => 'Шираз', 'gmt_offset' => -3.5,
			), array(
				'id' => 6952, 'country_id' => 165, 'name' => 'Shiringayoc', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 6953, 'country_id' => 216, 'name' => 'Shirley', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 6954, 'country_id' => 216, 'name' => 'Shishmaref', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6955, 'country_id' => 216, 'name' => 'Shoal Cove', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6956, 'country_id' => 99, 'name' => 'Sholapur', 'name_ru' => 'Шолапур', 'gmt_offset' => -5.5,
			), array(
				'id' => 6957, 'country_id' => 107, 'name' => 'Shonai', 'name_ru' => 'Сонай', 'gmt_offset' => -9,
			), array(
				'id' => 6958, 'country_id' => 73, 'name' => 'Shoreham By Sea', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6959, 'country_id' => 216, 'name' => 'Show Low, AZ', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 6960, 'country_id' => 216, 'name' => 'Shreveport', 'name_ru' => 'Шревспорт', 'gmt_offset' => 6,
			), array(
				'id' => 6961, 'country_id' => 216, 'name' => 'Shreveport, LA', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 6962, 'country_id' => 45, 'name' => 'Shunde', 'name_ru' => 'Шанде', 'gmt_offset' => 8,
			), array(
				'id' => 6963, 'country_id' => 216, 'name' => 'Shungnak', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 6964, 'country_id' => 14, 'name' => 'Shute Harbour', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 6965, 'country_id' => 169, 'name' => 'Sialkot', 'name_ru' => 'Сиалкот', 'gmt_offset' => 5,
			), array(
				'id' => 6966, 'country_id' => 167, 'name' => 'Sialum', 'name_ru' => 'Сиалум', 'gmt_offset' => -10,
			), array(
				'id' => 6967, 'country_id' => 168, 'name' => 'Siasi', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 6968, 'country_id' => 167, 'name' => 'Siassi', 'name_ru' => 'Сиасси', 'gmt_offset' => -10,
			), array(
				'id' => 6969, 'country_id' => 125, 'name' => 'Siauliai', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 6970, 'country_id' => 169, 'name' => 'Sibi', 'name_ru' => 'Сиби', 'gmt_offset' => -5,
			), array(
				'id' => 6971, 'country_id' => 95, 'name' => 'Sibisa', 'name_ru' => 'Сибиса', 'gmt_offset' => 0,
			), array(
				'id' => 6972, 'country_id' => 39, 'name' => 'Sibiti', 'name_ru' => 'Сибити', 'gmt_offset' => -1,
			), array(
				'id' => 6973, 'country_id' => 178, 'name' => 'Sibiu', 'name_ru' => 'Сибиу', 'gmt_offset' => -2,
			), array(
				'id' => 6974, 'country_id' => 149, 'name' => 'Sibu', 'name_ru' => NULL, 'gmt_offset' => 80,
			), array(
				'id' => 6975, 'country_id' => 168, 'name' => 'Sicogon Island', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 6976, 'country_id' => 61, 'name' => 'Sidi Barani', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 6977, 'country_id' => 58, 'name' => 'Sidi Belabbes', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 6978, 'country_id' => 129, 'name' => 'Sidi Ifni', 'name_ru' => 'Сиди-Ифни', 'gmt_offset' => 0,
			), array(
				'id' => 6979, 'country_id' => 216, 'name' => 'Sidney', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 6980, 'country_id' => 53, 'name' => 'Siegen', 'name_ru' => 'Зиген', 'gmt_offset' => 1,
			), array(
				'id' => 6981, 'country_id' => 110, 'name' => 'Siem Reap', 'name_ru' => 'Сием Рип', 'gmt_offset' => -7,
			), array(
				'id' => 6982, 'country_id' => 103, 'name' => 'Siena', 'name_ru' => 'Сиенна', 'gmt_offset' => 1,
			), array(
				'id'         => 6983, 'country_id' => 11, 'name' => 'Sierra Grande', 'name_ru' => 'Сьерра-Гранде',
				'gmt_offset' => 3,
			), array(
				'id'         => 6984, 'country_id' => 191, 'name' => 'Sierra Leone', 'name_ru' => 'Сьерра-Леоне',
				'gmt_offset' => 0,
			), array(
				'id' => 6985, 'country_id' => 216, 'name' => 'Sierra Vista', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 6986, 'country_id' => 122, 'name' => 'Sigiriya', 'name_ru' => 'Сигирия', 'gmt_offset' => 5.5,
			), array(
				'id'         => 6987, 'country_id' => 102, 'name' => 'Siglufjordur', 'name_ru' => 'Сиглуфьордур',
				'gmt_offset' => 0,
			), array(
				'id' => 6988, 'country_id' => 48, 'name' => 'Siguanea', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 6989, 'country_id' => 82, 'name' => 'Siguiri', 'name_ru' => 'Сигуири', 'gmt_offset' => 0,
			), array(
				'id' => 6990, 'country_id' => 110, 'name' => 'Sihanoukville', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 6991, 'country_id' => 208, 'name' => 'Siirt', 'name_ru' => 'Сиирт', 'gmt_offset' => 0,
			), array(
				'id' => 6992, 'country_id' => 136, 'name' => 'Sikasso', 'name_ru' => 'Сикассо', 'gmt_offset' => 0,
			), array(
				'id' => 6993, 'country_id' => 216, 'name' => 'Sikeston', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6994, 'country_id' => 167, 'name' => 'Sila', 'name_ru' => 'Сила', 'gmt_offset' => -10,
			), array(
				'id' => 6995, 'country_id' => 99, 'name' => 'Silchar', 'name_ru' => 'Силчар', 'gmt_offset' => -5.5,
			), array(
				'id'         => 6996, 'country_id' => 159, 'name' => 'Silgadi Doti', 'name_ru' => 'Силгади-Доти',
				'gmt_offset' => -5.7999999999999998,
			), array(
				'id' => 6997, 'country_id' => 22, 'name' => 'Silistra', 'name_ru' => 'Силистра', 'gmt_offset' => -2,
			), array(
				'id' => 6998, 'country_id' => 216, 'name' => 'Siloam Springs', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 6999, 'country_id' => 167, 'name' => 'Silur', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7000, 'country_id' => 46, 'name' => 'Silva Bay', 'name_ru' => NULL, 'gmt_offset' => -5,
			),
				array(
					'id' => 7001, 'country_id' => 216, 'name' => 'Silver City', 'name_ru' => NULL, 'gmt_offset' => 7,
				), 1 => array(
				'id'         => 7002, 'country_id' => 34, 'name' => 'Silver Creek', 'name_ru' => 'Силвер-Крик',
				'gmt_offset' => 6,
			), array(
				'id' => 7003, 'country_id' => 14, 'name' => 'Silver Plains', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 7004, 'country_id' => 167, 'name' => 'Sim', 'name_ru' => 'Сим', 'gmt_offset' => -10,
			), array(
				'id' => 7005, 'country_id' => 149, 'name' => 'Simanggang', 'name_ru' => 'Симанганг', 'gmt_offset' => -8,
			), array(
				'id' => 7006, 'country_id' => 45, 'name' => 'Simao', 'name_ru' => 'Симан', 'gmt_offset' => -8,
			), array(
				'id'         => 7007, 'country_id' => 159, 'name' => 'Simara', 'name_ru' => 'Симара',
				'gmt_offset' => -5.7999999999999998,
			), array(
				'id' => 7008, 'country_id' => 167, 'name' => 'Simbai', 'name_ru' => 'Симбай', 'gmt_offset' => -10,
			), array(
				'id' => 7009, 'country_id' => 167, 'name' => 'Simberi Island', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7010, 'country_id' => 192, 'name' => 'Simenti', 'name_ru' => 'Сименти', 'gmt_offset' => 0,
			), array(
				'id'         => 7011, 'country_id' => 213, 'name' => 'Simferopol', 'name_ru' => 'Симферополь',
				'gmt_offset' => 3,
			), array(
				'id'         => 7012, 'country_id' => 159, 'name' => 'Simikot', 'name_ru' => 'Симикот',
				'gmt_offset' => -5.7999999999999998,
			), array(
				'id' => 7013, 'country_id' => 99, 'name' => 'Simla', 'name_ru' => 'Симла', 'gmt_offset' => -5.5,
			), array(
				'id' => 7014, 'country_id' => 95, 'name' => 'Sinak', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 7015, 'country_id' => 55, 'name' => 'Sindal', 'name_ru' => 'Зиндаль', 'gmt_offset' => -1,
			), array(
				'id' => 7016, 'country_id' => 173, 'name' => 'Sines', 'name_ru' => 'Синес', 'gmt_offset' => 0,
			), array(
				'id' => 7017, 'country_id' => 187, 'name' => 'Singapore', 'name_ru' => 'Сингапур', 'gmt_offset' => 8,
			), array(
				'id' => 7018, 'country_id' => 167, 'name' => 'Singaua', 'name_ru' => 'Сингауа', 'gmt_offset' => -10,
			), array(
				'id' => 7019, 'country_id' => 95, 'name' => 'Singkep', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 7020, 'country_id' => 14, 'name' => 'Singleton', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 7021, 'country_id' => 123, 'name' => 'Sinoe', 'name_ru' => 'Синоу', 'gmt_offset' => 0,
			), array(
				'id' => 7022, 'country_id' => 29, 'name' => 'Sinop', 'name_ru' => 'Синоп', 'gmt_offset' => 0,
			), array(
				'id' => 7023, 'country_id' => 95, 'name' => 'Sintang', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 7024, 'country_id' => 168, 'name' => 'Siocon', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 7025, 'country_id' => 40, 'name' => 'Sion', 'name_ru' => 'Сион', 'gmt_offset' => -1,
			), array(
				'id' => 7026, 'country_id' => 216, 'name' => 'Sioux City', 'name_ru' => 'Сиокс Сити', 'gmt_offset' => 6,
			), array(
				'id' => 7027, 'country_id' => 216, 'name' => 'Sioux Falls', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 7028, 'country_id' => 35, 'name' => 'Sioux Lookout', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 7029, 'country_id' => 149, 'name' => 'Sipitang', 'name_ru' => 'Сипитанг', 'gmt_offset' => -8,
			), array(
				'id' => 7030, 'country_id' => 95, 'name' => 'Sipora', 'name_ru' => 'Сипора', 'gmt_offset' => -7,
			), array(
				'id' => 7031, 'country_id' => 99, 'name' => 'Sirajganj', 'name_ru' => 'Сираджгандж', 'gmt_offset' => 0,
			), array(
				'id' => 7032, 'country_id' => 101, 'name' => 'Sirjan', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 7033, 'country_id' => 101, 'name' => 'Sirri Island', 'name_ru' => 'Сирри-Айленд',
				'gmt_offset' => -3.5,
			), array(
				'id' => 7034, 'country_id' => 228, 'name' => 'Sishen', 'name_ru' => 'Сишен', 'gmt_offset' => -2,
			), array(
				'id' => 7035, 'country_id' => 80, 'name' => 'Sisimiut', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 7036, 'country_id' => 167, 'name' => 'Sissano', 'name_ru' => 'Сиссано', 'gmt_offset' => -10,
			), array(
				'id' => 7037, 'country_id' => 85, 'name' => 'Sitia', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 7038, 'country_id' => 149, 'name' => 'Sitiawan', 'name_ru' => 'Ситиаван', 'gmt_offset' => -8,
			), array(
				'id' => 7039, 'country_id' => 216, 'name' => 'Sitka', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 7040, 'country_id' => 216, 'name' => 'Sitkinak Island', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 7041, 'country_id' => 137, 'name' => 'Sittwe', 'name_ru' => NULL, 'gmt_offset' => -6.5,
			), array(
				'id' => 7042, 'country_id' => 156, 'name' => 'Siuna', 'name_ru' => 'Сиуна', 'gmt_offset' => 6,
			), array(
				'id' => 7043, 'country_id' => 208, 'name' => 'Sivas', 'name_ru' => 'Сивас', 'gmt_offset' => -2,
			), array(
				'id' => 7044, 'country_id' => 61, 'name' => 'Siwa', 'name_ru' => 'Сива', 'gmt_offset' => -2,
			), array(
				'id' => 7045, 'country_id' => 167, 'name' => 'Siwea', 'name_ru' => 'Сивеа', 'gmt_offset' => -10,
			), array(
				'id' => 7046, 'country_id' => 55, 'name' => 'Skagen Z7', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 7047, 'country_id' => 216, 'name' => 'Skagway', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 7048, 'country_id' => 169, 'name' => 'Skardu', 'name_ru' => 'Скарду', 'gmt_offset' => -5,
			), array(
				'id' => 7049, 'country_id' => 89, 'name' => 'Skeldon', 'name_ru' => 'Скелдон', 'gmt_offset' => 3,
			), array(
				'id' => 7050, 'country_id' => 186, 'name' => 'Skelleftea', 'name_ru' => 'Скеллефти', 'gmt_offset' => 1,
			), array(
				'id' => 7051, 'country_id' => 85, 'name' => 'Skiathos', 'name_ru' => 'Скиатлос', 'gmt_offset' => 2,
			), array(
				'id' => 7052, 'country_id' => 158, 'name' => 'Skien', 'name_ru' => 'Скиен', 'gmt_offset' => -1,
			), array(
				'id' => 7053, 'country_id' => 58, 'name' => 'Skikda', 'name_ru' => 'Скикда', 'gmt_offset' => -1,
			), array(
				'id' => 7054, 'country_id' => 85, 'name' => 'Skiros', 'name_ru' => 'Скирос', 'gmt_offset' => -2,
			), array(
				'id' => 7055, 'country_id' => 55, 'name' => 'Skive', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 7056, 'country_id' => 55, 'name' => 'Skjern', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 7057, 'country_id' => 135, 'name' => 'Skopje', 'name_ru' => 'Скопье', 'gmt_offset' => -1,
			), array(
				'id' => 7058, 'country_id' => 186, 'name' => 'Skovde', 'name_ru' => 'Сковде', 'gmt_offset' => -1,
			), array(
				'id' => 7059, 'country_id' => 228, 'name' => 'Skukuza', 'name_ru' => 'Скукуза', 'gmt_offset' => -2,
			), array(
				'id' => 7060, 'country_id' => 216, 'name' => 'Skwentna', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 7061, 'country_id' => 73, 'name' => 'Slate Island', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7062, 'country_id' => 35, 'name' => 'Slave Lake', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 7063, 'country_id' => 216, 'name' => 'Sleetmute', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 7064, 'country_id' => 190, 'name' => 'Sliac', 'name_ru' => 'Шлияк', 'gmt_offset' => 1,
			), array(
				'id' => 7065, 'country_id' => 96, 'name' => 'Sligo', 'name_ru' => 'Слайго', 'gmt_offset' => 0,
			), array(
				'id' => 7066, 'country_id' => 170, 'name' => 'Slupsk', 'name_ru' => 'Слупск', 'gmt_offset' => -1,
			), array(
				'id' => 7067, 'country_id' => 62, 'name' => 'Smara', 'name_ru' => 'Смара', 'gmt_offset' => 0,
			), array(
				'id' => 7068, 'country_id' => 216, 'name' => 'Smith Cove', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 7069, 'country_id' => 35, 'name' => 'Smith Falls', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 7070, 'country_id' => 14, 'name' => 'Smith Point', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 7071, 'country_id' => 35, 'name' => 'Smithers', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 7072, 'country_id' => 14, 'name' => 'Smithton', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 7073, 'country_id' => 180, 'name' => 'Smolensk', 'name_ru' => 'Смоленск', 'gmt_offset' => 4,
			), array(
				'id' => 7074, 'country_id' => 216, 'name' => 'Smyrna', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 7075, 'country_id' => 14, 'name' => 'Snake Bay', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 7076, 'country_id' => 35, 'name' => 'Snake River', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 7077, 'country_id' => 35, 'name' => 'Snare Lake', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7078, 'country_id' => 20, 'name' => 'SNCB Rail Network', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7079, 'country_id' => 216, 'name' => 'Snyder', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 7080, 'country_id' => 133, 'name' => 'Soalala', 'name_ru' => 'Соалала', 'gmt_offset' => -3,
			), array(
				'id' => 7081, 'country_id' => 223, 'name' => 'Soc Trang', 'name_ru' => 'Сок-Транг', 'gmt_offset' => 0,
			), array(
				'id' => 7082, 'country_id' => 216, 'name' => 'Socorro', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 7083, 'country_id' => 227, 'name' => 'Socotra', 'name_ru' => 'Сокотра', 'gmt_offset' => -3,
			), array(
				'id' => 7084, 'country_id' => 66, 'name' => 'Sodankyla', 'name_ru' => 'Соданкюля', 'gmt_offset' => -2,
			), array(
				'id' => 7085, 'country_id' => 65, 'name' => 'Soddu', 'name_ru' => 'Содду', 'gmt_offset' => -3,
			), array(
				'id' => 7086, 'country_id' => 186, 'name' => 'Soderhamn', 'name_ru' => 'Содерхамн', 'gmt_offset' => -1,
			), array(
				'id' => 7087, 'country_id' => 186, 'name' => 'Sodertalje', 'name_ru' => 'Содерталье', 'gmt_offset' => 1,
			), array(
				'id' => 7088, 'country_id' => 22, 'name' => 'Sofia', 'name_ru' => 'София', 'gmt_offset' => -2,
			), array(
				'id' => 7089, 'country_id' => 46, 'name' => 'Sogamoso', 'name_ru' => 'Согамосо', 'gmt_offset' => 5,
			), array(
				'id' => 7090, 'country_id' => 158, 'name' => 'Sogndal', 'name_ru' => 'Сондал', 'gmt_offset' => -1,
			), array(
				'id' => 7091, 'country_id' => 115, 'name' => 'Sokcho', 'name_ru' => 'Сокчо', 'gmt_offset' => -9,
			), array(
				'id' => 7092, 'country_id' => 155, 'name' => 'Sokoto', 'name_ru' => 'Сокото', 'gmt_offset' => -1,
			), array(
				'id' => 7093, 'country_id' => 224, 'name' => 'Sola', 'name_ru' => 'Сола', 'gmt_offset' => -11,
			), array(
				'id' => 7094, 'country_id' => 46, 'name' => 'Solano', 'name_ru' => 'Солано', 'gmt_offset' => 5,
			), array(
				'id' => 7095, 'country_id' => 216, 'name' => 'Soldotna', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 7096, 'country_id' => 71, 'name' => 'Solenzara', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 7097, 'country_id' => 46, 'name' => 'Solita', 'name_ru' => 'Солита', 'gmt_offset' => 5,
			), array(
				'id' => 7098, 'country_id' => 95, 'name' => 'Solo City', 'name_ru' => 'Соло Сити', 'gmt_offset' => -7,
			), array(
				'id' => 7099, 'country_id' => 216, 'name' => 'Solomon', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 7100, 'country_id' => 180, 'name' => 'Solovetsky', 'name_ru' => 'Соловецкий', 'gmt_offset' => 4,
			), array(
				'id' => 7101, 'country_id' => 186, 'name' => 'Solvesborg', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 7102, 'country_id' => 229, 'name' => 'Solwezi', 'name_ru' => 'Солвези', 'gmt_offset' => -2,
			), array(
				'id' => 7103, 'country_id' => 216, 'name' => 'Somerset', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 7104, 'country_id' => 223, 'name' => 'Son-La', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7105, 'country_id' => 55, 'name' => 'Sonderborg', 'name_ru' => 'Сондерборг', 'gmt_offset' => 1,
			), array(
				'id' => 7106, 'country_id' => 45, 'name' => 'Song Pan', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 7107, 'country_id' => 212, 'name' => 'Songea', 'name_ru' => 'Сонгеа', 'gmt_offset' => -3,
			), array(
				'id' => 7108, 'country_id' => 202, 'name' => 'Songkhla', 'name_ru' => 'Сонгкхла', 'gmt_offset' => -7,
			), array(
				'id'         => 7109, 'country_id' => 71, 'name' => 'Sophia Antipolis', 'name_ru' => 'София Антиполис',
				'gmt_offset' => -1,
			), array(
				'id' => 7110, 'country_id' => 167, 'name' => 'Sopu', 'name_ru' => 'Сопу', 'gmt_offset' => -10,
			), array(
				'id' => 7111, 'country_id' => 158, 'name' => 'Sorkjosen', 'name_ru' => 'Соркьосен', 'gmt_offset' => -1,
			), array(
				'id' => 7112, 'country_id' => 95, 'name' => 'Soroako', 'name_ru' => 'Сороако', 'gmt_offset' => 8,
			), array(
				'id' => 7113, 'country_id' => 29, 'name' => 'Sorocaba', 'name_ru' => 'Сорокаба', 'gmt_offset' => -3,
			), array(
				'id' => 7114, 'country_id' => 95, 'name' => 'Sorong', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 7115, 'country_id' => 214, 'name' => 'Soroti', 'name_ru' => 'Сороти', 'gmt_offset' => -3,
			), array(
				'id' => 7116, 'country_id' => 70, 'name' => 'Sorvag', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 7117, 'country_id' => 39, 'name' => 'Souanke', 'name_ru' => 'Суанке', 'gmt_offset' => -1,
			), array(
				'id' => 7118, 'country_id' => 29, 'name' => 'Soure', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7119, 'country_id' => 30, 'name' => 'South Andros', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 7120, 'country_id' => 216, 'name' => 'South Bend', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 7121, 'country_id' => 199, 'name' => 'South Caicos', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id'         => 7122, 'country_id' => 14, 'name' => 'South Galway', 'name_ru' => 'Сауз-Галвей',
				'gmt_offset' => -10,
			), array(
				'id' => 7123, 'country_id' => 35, 'name' => 'South Indian Lake', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id'         => 7124, 'country_id' => 216, 'name' => 'South Lake Tahoe',
				'name_ru'    => 'Южное Озеро Тахо', 'gmt_offset' => 8,
			), array(
				'id'         => 7125, 'country_id' => 14, 'name' => 'South Molle Island',
				'name_ru'    => 'Остров Саут Молл', 'gmt_offset' => -10,
			), array(
				'id' => 7126, 'country_id' => 216, 'name' => 'South Naknek', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 7127, 'country_id' => 35, 'name' => 'South Trout Lake', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id'         => 7128, 'country_id' => 224, 'name' => 'South West Bay', 'name_ru' => 'Сауз-Вест-Бей',
				'gmt_offset' => -11,
			), array(
				'id' => 7129, 'country_id' => 216, 'name' => 'South Weymouth', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 7130, 'country_id' => 73, 'name' => 'Southend', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7131, 'country_id' => 14, 'name' => 'Southern Cross', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 7132, 'country_id' => 216, 'name' => 'Southern Pines', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 7133, 'country_id' => 14, 'name' => 'Southport', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 7134, 'country_id' => 9, 'name' => 'Soyo', 'name_ru' => 'Сойо', 'gmt_offset' => -1,
			), array(
				'id' => 7135, 'country_id' => 53, 'name' => 'Spangdahlem', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id'         => 7136, 'country_id' => 221, 'name' => 'Spanish Town/Virgin Gorda', 'name_ru' => NULL,
				'gmt_offset' => 4,
			), array(
				'id'         => 7137, 'country_id' => 30, 'name' => 'Spanish Wells', 'name_ru' => 'Спаниш-Уэллс',
				'gmt_offset' => -5,
			), array(
				'id' => 7138, 'country_id' => 216, 'name' => 'Sparrevohn', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 7139, 'country_id' => 216, 'name' => 'Sparta', 'name_ru' => 'Спарта', 'gmt_offset' => 6,
			), array(
				'id' => 7140, 'country_id' => 216, 'name' => 'Spartanburg, SC', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 7141, 'country_id' => 216, 'name' => 'Spearfish', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 7142, 'country_id' => 216, 'name' => 'Spencer', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id'         => 7143, 'country_id' => 85, 'name' => 'Spetsai Island', 'name_ru' => 'Спецаи-Айленд',
				'gmt_offset' => -2,
			), array(
				'id' => 7144, 'country_id' => 53, 'name' => 'Spiddal', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7145, 'country_id' => 216, 'name' => 'Spirit Lake', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 7146, 'country_id' => 92, 'name' => 'Split', 'name_ru' => 'Сплит', 'gmt_offset' => -1,
			), array(
				'id' => 7147, 'country_id' => 216, 'name' => 'Spokane', 'name_ru' => 'Спокане', 'gmt_offset' => 0,
			), array(
				'id' => 7148, 'country_id' => 14, 'name' => 'Spring Creek', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 7149, 'country_id' => 35, 'name' => 'Spring Island', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7150, 'country_id' => 199, 'name' => 'Spring Point', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7151, 'country_id' => 228, 'name' => 'Springbok', 'name_ru' => 'Спрингбок', 'gmt_offset' => -2,
			), array(
				'id' => 7152, 'country_id' => 216, 'name' => 'Springdale', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 7153, 'country_id' => 216, 'name' => 'Springfield', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 7154, 'country_id' => 14, 'name' => 'Springvale', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 7155, 'country_id' => 35, 'name' => 'Squamish', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 7156, 'country_id' => 35, 'name' => 'Squirrel Cove', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 7157, 'country_id' => 99, 'name' => 'Srinagar', 'name_ru' => 'Сринагар', 'gmt_offset' => -5.5,
			), array(
				'id' => 7158, 'country_id' => 73, 'name' => 'St Andrews', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7159, 'country_id' => 35, 'name' => 'St Anthony', 'name_ru' => NULL, 'gmt_offset' => 3.5,
			), array(
				'id' => 7160, 'country_id' => 13, 'name' => 'St Anton', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 7161, 'country_id' => 216, 'name' => 'St Augustine', 'name_ru' => 'Сент Огустин',
				'gmt_offset' => 5,
			), array(
				'id' => 7162, 'country_id' => 83, 'name' => 'St Barthelemy', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 7163, 'country_id' => 35, 'name' => 'St Catharines', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 7164, 'country_id' => 71, 'name' => 'St Crepin', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 7165, 'country_id' => 222, 'name' => 'St Croix Island', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id'         => 7166, 'country_id' => 177, 'name' => 'St Denis de la Reunion', 'name_ru' => NULL,
				'gmt_offset' => -4,
			), array(
				'id'         => 7167, 'country_id' => 71, 'name' => 'St Etienne', 'name_ru' => 'Сент Етьенн',
				'gmt_offset' => -1,
			), array(
				'id' => 7168, 'country_id' => 157, 'name' => 'St Eustatius', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7169, 'country_id' => 83, 'name' => 'St Francois', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id'         => 7170, 'country_id' => 14, 'name' => 'St George', 'name_ru' => 'Сент Джордж',
				'gmt_offset' => -10,
			), array(
				'id' => 7171, 'country_id' => 216, 'name' => 'St George Island', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id'         => 7172, 'country_id' => 76, 'name' => 'St Georges de lOyapock', 'name_ru' => NULL,
				'gmt_offset' => 3,
			), array(
				'id'         => 7173, 'country_id' => 14, 'name' => 'St Helens', 'name_ru' => 'Сент Хеленс',
				'gmt_offset' => -10,
			), array(
				'id' => 7174, 'country_id' => 35, 'name' => 'St Jean', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 7175, 'country_id' => 222, 'name' => 'St John Island', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 7176, 'country_id' => 216, 'name' => 'St Johns', 'name_ru' => 'Сент Джонс', 'gmt_offset' => 7,
			), array(
				'id' => 7177, 'country_id' => 216, 'name' => 'St Joseph', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id'         => 7178, 'country_id' => 76, 'name' => 'St Laurent du Maroni', 'name_ru' => NULL,
				'gmt_offset' => 3,
			), array(
				'id' => 7179, 'country_id' => 35, 'name' => 'St Leonard', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 7180, 'country_id' => 216, 'name' => 'St Louis', 'name_ru' => 'Сент Луис', 'gmt_offset' => -6,
			), array(
				'id' => 7181, 'country_id' => 216, 'name' => 'St Louis, Il', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 7182, 'country_id' => 121, 'name' => 'St Lucia', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 7183, 'country_id' => 83, 'name' => 'St Martin', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 7184, 'country_id' => 216, 'name' => 'St Marys', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 7185, 'country_id' => 216, 'name' => 'St Michael', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 7186, 'country_id' => 40, 'name' => 'St Moritz', 'name_ru' => 'Сент Мориц', 'gmt_offset' => 1,
			), array(
				'id' => 7187, 'country_id' => 71, 'name' => 'St Nazaire', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 7188, 'country_id' => 216, 'name' => 'St Paul', 'name_ru' => 'Сен Поль', 'gmt_offset' => -6,
			), array(
				'id' => 7189, 'country_id' => 53, 'name' => 'St Peter', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id'         => 7190, 'country_id' => 180, 'name' => 'St Petersburg', 'name_ru' => 'Санкт-Петербург',
				'gmt_offset' => 4,
			), array(
				'id' => 7191, 'country_id' => 171, 'name' => 'St Pierre', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id'         => 7192, 'country_id' => 177, 'name' => 'St Pierre dela Reunion', 'name_ru' => NULL,
				'gmt_offset' => -4,
			), array(
				'id' => 7193, 'country_id' => 35, 'name' => 'St Thomas', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 7194, 'country_id' => 222, 'name' => 'St Thomas Island', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7195, 'country_id' => 219, 'name' => 'St Vincent', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 7196, 'country_id' => 74, 'name' => 'St. Georges', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 7197, 'country_id' => 4, 'name' => 'St. John&#039;s', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id'         => 7198, 'country_id' => 30, 'name' => 'Staniel Cay', 'name_ru' => 'Станиэл-Кэй',
				'gmt_offset' => 5,
			), array(
				'id' => 7199, 'country_id' => 14, 'name' => 'Stanthorpe', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 7200, 'country_id' => 216, 'name' => 'Stanton', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 7201, 'country_id' => 183, 'name' => 'Star Habour', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 7202, 'country_id' => 22, 'name' => 'Stara Zagora', 'name_ru' => 'Стара-Загора',
				'gmt_offset' => -2,
			), array(
				'id' => 7203, 'country_id' => 14, 'name' => 'Starcke', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 7204, 'country_id' => 216, 'name' => 'State College', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 7205, 'country_id' => 216, 'name' => 'Statesboro, GA', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 7206, 'country_id' => 216, 'name' => 'Statesville', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 7207, 'country_id' => 216, 'name' => 'Staunton', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 7208, 'country_id' => 158, 'name' => 'Stavanger', 'name_ru' => 'Ставангер', 'gmt_offset' => 1,
			), array(
				'id' => 7209, 'country_id' => 180, 'name' => 'Stavropol', 'name_ru' => 'Ставрополь', 'gmt_offset' => 4,
			), array(
				'id' => 7210, 'country_id' => 14, 'name' => 'Stawell', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 7211, 'country_id' => 35, 'name' => 'Ste Therese Point', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 7212, 'country_id' => 216, 'name' => 'Steamboat Bay', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 7213, 'country_id' => 216, 'name' => 'Steamboat Springs', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 7214, 'country_id' => 216, 'name' => 'Stebbins', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 7215, 'country_id' => 95, 'name' => 'Steenkool', 'name_ru' => 'Стеенкоол', 'gmt_offset' => -9,
			), array(
				'id' => 7216, 'country_id' => 30, 'name' => 'Stella Maris', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 7217, 'country_id' => 14, 'name' => 'Stephen Island', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 7218, 'country_id' => 216, 'name' => 'Stephenville', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7219, 'country_id' => 216, 'name' => 'Sterling', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 7220, 'country_id' => 216, 'name' => 'Sterling Rockfalls', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 7221, 'country_id' => 216, 'name' => 'Stevens Point', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 7222, 'country_id' => 216, 'name' => 'Stevens Village', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 7223, 'country_id' => 35, 'name' => 'Stewart', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id'         => 7224, 'country_id' => 162, 'name' => 'Stewart Island', 'name_ru' => 'Стюарт-Айленд',
				'gmt_offset' => -12,
			), array(
				'id' => 7225, 'country_id' => 216, 'name' => 'Stillwater', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 7226, 'country_id' => 186, 'name' => 'Stockholm', 'name_ru' => 'Стокгольм', 'gmt_offset' => 1,
			), array(
				'id' => 7227, 'country_id' => 216, 'name' => 'Stockton', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 7228, 'country_id' => 194, 'name' => 'Stoelmans Eiland', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 7229, 'country_id' => 158, 'name' => 'Stokmarknes', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 7230, 'country_id' => 35, 'name' => 'Stony Rapids', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 7231, 'country_id' => 216, 'name' => 'Stony River', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 7232, 'country_id' => 158, 'name' => 'Stord', 'name_ru' => 'Сторд', 'gmt_offset' => 1,
			), array(
				'id' => 7233, 'country_id' => 216, 'name' => 'Storm Lake', 'name_ru' => 'Сторм Лейк', 'gmt_offset' => 6,
			), array(
				'id' => 7234, 'country_id' => 73, 'name' => 'Stornoway', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7235, 'country_id' => 186, 'name' => 'Storuman', 'name_ru' => 'Сторуман', 'gmt_offset' => 1,
			), array(
				'id' => 7236, 'country_id' => 216, 'name' => 'Stow', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 7237, 'country_id' => 216, 'name' => 'Stowe', 'name_ru' => 'Стоув', 'gmt_offset' => 5,
			), array(
				'id' => 7238, 'country_id' => 13, 'name' => 'Stradbroke Island', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 7239, 'country_id' => 14, 'name' => 'Strahan', 'name_ru' => 'Страхан', 'gmt_offset' => -10,
			), array(
				'id' => 7240, 'country_id' => 71, 'name' => 'Strasbourg', 'name_ru' => 'Страсбург', 'gmt_offset' => -1,
			), array(
				'id' => 7241, 'country_id' => 216, 'name' => 'Stratford, CT', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 7242, 'country_id' => 14, 'name' => 'Strathmore', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 7243, 'country_id' => 53, 'name' => 'Straubing', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 7244, 'country_id' => 14, 'name' => 'Streaky Bay', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 7245, 'country_id' => 103, 'name' => 'Stromboli', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7246, 'country_id' => 73, 'name' => 'Stronsay', 'name_ru' => 'Стронсей', 'gmt_offset' => 0,
			), array(
				'id' => 7247, 'country_id' => 216, 'name' => 'Stroud', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 7248, 'country_id' => 180, 'name' => 'Strzhewoi', 'name_ru' => 'Стрежевой', 'gmt_offset' => 7,
			), array(
				'id' => 7249, 'country_id' => 216, 'name' => 'Stuart', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 7250, 'country_id' => 35, 'name' => 'Stuart Island', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 7251, 'country_id' => 110, 'name' => 'Stung Treng', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 7252, 'country_id' => 35, 'name' => 'Sturdee', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 7253, 'country_id' => 216, 'name' => 'Sturgeon Bay', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 7254, 'country_id' => 216, 'name' => 'Sturgis', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 7255, 'country_id' => 14, 'name' => 'Sturt Creek', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 7256, 'country_id' => 53, 'name' => 'Stuttgart', 'name_ru' => 'Штуттгард', 'gmt_offset' => 1,
			), array(
				'id' => 7257, 'country_id' => 216, 'name' => 'Stuttgart, AR', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id'         => 7258, 'country_id' => 102, 'name' => 'Stykkisholmur', 'name_ru' => 'Стиккишолмур',
				'gmt_offset' => 0,
			), array(
				'id' => 7259, 'country_id' => 167, 'name' => 'Suabi', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 7260, 'country_id' => 95, 'name' => 'Suai', 'name_ru' => 'Суаи', 'gmt_offset' => -8,
			), array(
				'id' => 7261, 'country_id' => 32, 'name' => 'Suapan', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 7262, 'country_id' => 183, 'name' => 'Suavanao', 'name_ru' => 'Суаванао', 'gmt_offset' => 0,
			), array(
				'id' => 7263, 'country_id' => 178, 'name' => 'Suceava', 'name_ru' => 'Сучава', 'gmt_offset' => 2,
			), array(
				'id' => 7264, 'country_id' => 28, 'name' => 'Sucre', 'name_ru' => 'Сукре', 'gmt_offset' => -4,
			), array(
				'id' => 7265, 'country_id' => 59, 'name' => 'Sucua', 'name_ru' => 'Сукуа', 'gmt_offset' => 5,
			), array(
				'id' => 7266, 'country_id' => 35, 'name' => 'Sudbury', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 7267, 'country_id' => 102, 'name' => 'Sudureyri', 'name_ru' => 'Судурейри', 'gmt_offset' => 0,
			), array(
				'id' => 7268, 'country_id' => 14, 'name' => 'Sue Island', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 7269, 'country_id' => 35, 'name' => 'Suffield', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 7270, 'country_id' => 169, 'name' => 'Sui', 'name_ru' => 'Суи', 'gmt_offset' => -5,
			), array(
				'id' => 7271, 'country_id' => 45, 'name' => 'Sui Fen He', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7272, 'country_id' => 29, 'name' => 'Suia-Missu', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id'         => 7273, 'country_id' => 202, 'name' => 'Sukhothai (sawankolok)', 'name_ru' => NULL,
				'gmt_offset' => 7,
			), array(
				'id' => 7274, 'country_id' => 75, 'name' => 'Sukhumi', 'name_ru' => 'Сухуми', 'gmt_offset' => 3,
			), array(
				'id' => 7275, 'country_id' => 167, 'name' => 'Suki', 'name_ru' => 'Суки', 'gmt_offset' => -10,
			), array(
				'id' => 7276, 'country_id' => 169, 'name' => 'Sukkur', 'name_ru' => 'Суккур', 'gmt_offset' => -5,
			), array(
				'id' => 7277, 'country_id' => 91, 'name' => 'Sulaco', 'name_ru' => 'Зулако', 'gmt_offset' => 6,
			), array(
				'id' => 7278, 'country_id' => 182, 'name' => 'Sulayel', 'name_ru' => 'Сулаель', 'gmt_offset' => -3,
			), array(
				'id' => 7279, 'country_id' => 167, 'name' => 'Sule', 'name_ru' => 'Зуле', 'gmt_offset' => -10,
			), array(
				'id' => 7280, 'country_id' => 216, 'name' => 'Sullivan', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 7281, 'country_id' => 35, 'name' => 'Sullivan Bay', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 7282, 'country_id' => 216, 'name' => 'Sulphur Springs', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 7283, 'country_id' => 29, 'name' => 'Sumare', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 7284, 'country_id' => 95, 'name' => 'Sumbawa', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id'         => 7285, 'country_id' => 212, 'name' => 'Sumbawanga', 'name_ru' => 'Сумбаванга',
				'gmt_offset' => -3,
			), array(
				'id' => 7286, 'country_id' => 9, 'name' => 'Sumbe', 'name_ru' => 'Сумбе', 'gmt_offset' => -1,
			), array(
				'id' => 7287, 'country_id' => 95, 'name' => 'Sumenep', 'name_ru' => 'Суменеп', 'gmt_offset' => -7,
			), array(
				'id'         => 7288, 'country_id' => 35, 'name' => 'Summer Beaver', 'name_ru' => 'Саммер-Бивер',
				'gmt_offset' => 0,
			), array(
				'id' => 7289, 'country_id' => 35, 'name' => 'Summerside', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 7290, 'country_id' => 216, 'name' => 'Summit', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 7291, 'country_id' => 35, 'name' => 'Summit Lake', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 7292, 'country_id' => 216, 'name' => 'Sumter', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 7293, 'country_id' => 213, 'name' => 'Sumy', 'name_ru' => 'Сумы', 'gmt_offset' => 3,
			), array(
				'id' => 7294, 'country_id' => 228, 'name' => 'Sun City', 'name_ru' => 'Сан Сити', 'gmt_offset' => 2,
			), array(
				'id'         => 7295, 'country_id' => 211, 'name' => 'Sun Moon Lake', 'name_ru' => 'Сан-Мун-Лейк',
				'gmt_offset' => -8,
			), array(
				'id'         => 7296, 'country_id' => 216, 'name' => 'Sun River', 'name_ru' => 'Сан-Ривер, шт. Орегон',
				'gmt_offset' => 0,
			), array(
				'id' => 7297, 'country_id' => 216, 'name' => 'Sun Valley', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 7298, 'country_id' => 115, 'name' => 'Suncheon', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 7299, 'country_id' => 216, 'name' => 'Sundance', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 7300, 'country_id' => 186, 'name' => 'Sundsvall', 'name_ru' => 'Сандсвалль', 'gmt_offset' => -1,
			), array(
				'id' => 7301, 'country_id' => 95, 'name' => 'Sungai Pakning', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 7302, 'country_id' => 149, 'name' => 'Sungei Tekai', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 7303, 'country_id' => 14, 'name' => 'Sunshine Coast', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 7304, 'country_id' => 78, 'name' => 'Sunyani', 'name_ru' => 'Суньяни', 'gmt_offset' => 0,
			), array(
				'id' => 7305, 'country_id' => 216, 'name' => 'Superior', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 7306, 'country_id' => 163, 'name' => 'Sur', 'name_ru' => 'Сур', 'gmt_offset' => -4,
			), array(
				'id' => 7307, 'country_id' => 95, 'name' => 'Surabaya', 'name_ru' => 'Сурабайя', 'gmt_offset' => 7,
			), array(
				'id' => 7308, 'country_id' => 168, 'name' => 'Surallah', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 7309, 'country_id' => 99, 'name' => 'Surat', 'name_ru' => 'Сурат', 'gmt_offset' => 5.5,
			), array(
				'id'         => 7310, 'country_id' => 202, 'name' => 'Surat Thani', 'name_ru' => 'Сурат-Тхани',
				'gmt_offset' => -7,
			), array(
				'id' => 7311, 'country_id' => 162, 'name' => 'Surfdale', 'name_ru' => 'Сурфдейл', 'gmt_offset' => -12,
			), array(
				'id' => 7312, 'country_id' => 14, 'name' => 'Surfers Paradise', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 7313, 'country_id' => 180, 'name' => 'Surgut', 'name_ru' => 'Сургут', 'gmt_offset' => 6,
			), array(
				'id' => 7314, 'country_id' => 167, 'name' => 'Suria', 'name_ru' => 'Суриа', 'gmt_offset' => -10,
			), array(
				'id' => 7315, 'country_id' => 168, 'name' => 'Surigao', 'name_ru' => 'Суригао', 'gmt_offset' => -8,
			), array(
				'id' => 7316, 'country_id' => 202, 'name' => 'Surin', 'name_ru' => 'Сурин', 'gmt_offset' => 0,
			), array(
				'id'         => 7317, 'country_id' => 159, 'name' => 'Surkhet', 'name_ru' => NULL,
				'gmt_offset' => -5.7999999999999998,
			), array(
				'id' => 7318, 'country_id' => 216, 'name' => 'Susanville', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 7319, 'country_id' => 73, 'name' => 'Suttonheath', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7320, 'country_id' => 67, 'name' => 'Suva', 'name_ru' => 'Сува', 'gmt_offset' => -12,
			), array(
				'id' => 7321, 'country_id' => 115, 'name' => 'Suwon', 'name_ru' => 'Суон', 'gmt_offset' => -9,
			), array(
				'id' => 7322, 'country_id' => 45, 'name' => 'Suzhou', 'name_ru' => 'Сучжоу', 'gmt_offset' => 8,
			), array(
				'id' => 7323, 'country_id' => 158, 'name' => 'Svalbard', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 7324, 'country_id' => 110, 'name' => 'Svay Rieng', 'name_ru' => 'Свей-Рьенг',
				'gmt_offset' => -7,
			), array(
				'id' => 7325, 'country_id' => 186, 'name' => 'Sveg', 'name_ru' => 'Свег', 'gmt_offset' => -1,
			), array(
				'id' => 7326, 'country_id' => 158, 'name' => 'Svolvaer', 'name_ru' => 'Сволваер', 'gmt_offset' => -1,
			), array(
				'id' => 7327, 'country_id' => 151, 'name' => 'Swakopmund', 'name_ru' => 'Свакопмунд', 'gmt_offset' => 2,
			), array(
				'id' => 7328, 'country_id' => 14, 'name' => 'Swan Hill', 'name_ru' => 'Суон Хилл', 'gmt_offset' => -10,
			), array(
				'id' => 7329, 'country_id' => 35, 'name' => 'Swan River', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7330, 'country_id' => 73, 'name' => 'Swansea', 'name_ru' => 'Суони', 'gmt_offset' => 0,
			), array(
				'id' => 7331, 'country_id' => 216, 'name' => 'Sweetwater', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 7332, 'country_id' => 35, 'name' => 'Swift Current', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 7333, 'country_id' => 73, 'name' => 'Swindon', 'name_ru' => 'Свиндон', 'gmt_offset' => 0,
			), array(
				'id'         => 7334, 'country_id' => 159, 'name' => 'Syangboche', 'name_ru' => NULL,
				'gmt_offset' => 5.7000000000000002,
			), array(
				'id' => 7335, 'country_id' => 14, 'name' => 'Sydney', 'name_ru' => 'Сидней', 'gmt_offset' => 11,
			), array(
				'id' => 7336, 'country_id' => 35, 'name' => 'Sydney, NS', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 7337, 'country_id' => 180, 'name' => 'Syktyvkar', 'name_ru' => 'Сыктывкар', 'gmt_offset' => 4,
			), array(
				'id' => 7338, 'country_id' => 19, 'name' => 'Sylhet', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 7339, 'country_id' => 216, 'name' => 'Sylvester', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 7340, 'country_id' => 216, 'name' => 'Syracuse', 'name_ru' => 'Сиракус', 'gmt_offset' => 5,
			), array(
				'id'         => 7341, 'country_id' => 85, 'name' => 'Syros Island', 'name_ru' => 'Сирос-Айленд',
				'gmt_offset' => -2,
			), array(
				'id' => 7342, 'country_id' => 170, 'name' => 'Szczecin', 'name_ru' => 'Щецин', 'gmt_offset' => 1,
			), array(
				'id' => 7343, 'country_id' => 170, 'name' => 'Szymany', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 7344, 'country_id' => 29, 'name' => 'Sгo Luis', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 7345, 'country_id' => 41, 'name' => 'Taabo', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7346, 'country_id' => 61, 'name' => 'Taba', 'name_ru' => 'Таба', 'gmt_offset' => 2,
			), array(
				'id' => 7347, 'country_id' => 43, 'name' => 'Tabal', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7348, 'country_id' => 205, 'name' => 'Tabarka', 'name_ru' => 'Табарка', 'gmt_offset' => 1,
			), array(
				'id' => 7349, 'country_id' => 101, 'name' => 'Tabas', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7350, 'country_id' => 29, 'name' => 'Tabatinga', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 7351, 'country_id' => 167, 'name' => 'Tabibuga', 'name_ru' => 'Табибуга', 'gmt_offset' => 0,
			), array(
				'id'         => 7352, 'country_id' => 111, 'name' => 'Tabiteuea North', 'name_ru' => 'Табитуа-Норт',
				'gmt_offset' => 0,
			), array(
				'id'         => 7353, 'country_id' => 111, 'name' => 'Tabiteuea South', 'name_ru' => 'Табитуа-Сауз',
				'gmt_offset' => 0,
			), array(
				'id' => 7354, 'country_id' => 168, 'name' => 'Tablas', 'name_ru' => 'Таблас', 'gmt_offset' => 8,
			), array(
				'id' => 7355, 'country_id' => 14, 'name' => 'Tableland', 'name_ru' => 'Тейблленд', 'gmt_offset' => 0,
			), array(
				'id' => 7356, 'country_id' => 46, 'name' => 'Tablon De Tamara', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 7357, 'country_id' => 212, 'name' => 'Tabora', 'name_ru' => 'Табора', 'gmt_offset' => 3,
			), array(
				'id' => 7358, 'country_id' => 41, 'name' => 'Tabou', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7359, 'country_id' => 101, 'name' => 'Tabriz', 'name_ru' => 'Табриз', 'gmt_offset' => 3.5,
			), array(
				'id' => 7360, 'country_id' => 111, 'name' => 'Tabuaeran', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7361, 'country_id' => 167, 'name' => 'Tabubil', 'name_ru' => 'Табубил', 'gmt_offset' => 10,
			), array(
				'id' => 7362, 'country_id' => 182, 'name' => 'Tabuk', 'name_ru' => 'Табук', 'gmt_offset' => 3,
			), array(
				'id' => 7363, 'country_id' => 45, 'name' => 'Tacheng', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7364, 'country_id' => 137, 'name' => 'Tachilek', 'name_ru' => 'Тачилек', 'gmt_offset' => 7,
			), array(
				'id' => 7365, 'country_id' => 168, 'name' => 'Tacloban', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 7366, 'country_id' => 165, 'name' => 'Tacna', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 7367, 'country_id' => 216, 'name' => 'Tacoma', 'name_ru' => 'Такома', 'gmt_offset' => -8,
			), array(
				'id' => 7368, 'country_id' => 216, 'name' => 'Tacoma, WA', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id'         => 7369, 'country_id' => 217, 'name' => 'Tacuarembo', 'name_ru' => 'Такуарембо',
				'gmt_offset' => -2,
			), array(
				'id' => 7370, 'country_id' => 54, 'name' => 'Tadjoura', 'name_ru' => 'Таджура', 'gmt_offset' => 3,
			), array(
				'id' => 7371, 'country_id' => 35, 'name' => 'Tadoule Lake', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7372, 'country_id' => 186, 'name' => 'Taftan', 'name_ru' => 'Тафтан', 'gmt_offset' => 1,
			), array(
				'id' => 7373, 'country_id' => 168, 'name' => 'Tagbilaran', 'name_ru' => 'Тагбиларан', 'gmt_offset' => 8,
			), array(
				'id' => 7374, 'country_id' => 168, 'name' => 'Tagbita', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7375, 'country_id' => 167, 'name' => 'Tagula', 'name_ru' => 'Тагула', 'gmt_offset' => 0,
			), array(
				'id' => 7376, 'country_id' => 162, 'name' => 'Taharoa', 'name_ru' => 'Тахароа', 'gmt_offset' => 13,
			), array(
				'id' => 7377, 'country_id' => 101, 'name' => 'Tahneta Pass Lodge', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7378, 'country_id' => 153, 'name' => 'Tahoua', 'name_ru' => 'Тахуа', 'gmt_offset' => 1,
			), array(
				'id' => 7379, 'country_id' => 35, 'name' => 'Tahsis', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7380, 'country_id' => 45, 'name' => 'Tai Shan', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 7381, 'country_id' => 211, 'name' => 'Taichung', 'name_ru' => 'Тайчунг', 'gmt_offset' => 8,
			), array(
				'id' => 7382, 'country_id' => 182, 'name' => 'Taif', 'name_ru' => 'Таиф', 'gmt_offset' => 3,
			), array(
				'id' => 7383, 'country_id' => 211, 'name' => 'Tainan', 'name_ru' => 'Тайнань', 'gmt_offset' => 8,
			), array(
				'id' => 7384, 'country_id' => 211, 'name' => 'Taipei', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 7385, 'country_id' => 149, 'name' => 'Taiping', 'name_ru' => 'Тайпинг', 'gmt_offset' => 8,
			), array(
				'id' => 7386, 'country_id' => 59, 'name' => 'Taisha', 'name_ru' => 'Таиша', 'gmt_offset' => 0,
			), array(
				'id' => 7387, 'country_id' => 211, 'name' => 'Taitung', 'name_ru' => 'Тайтунг', 'gmt_offset' => 8,
			), array(
				'id' => 7388, 'country_id' => 45, 'name' => 'Taiyuan', 'name_ru' => 'Тайвань', 'gmt_offset' => 8,
			), array(
				'id' => 7389, 'country_id' => 227, 'name' => 'Taiz', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 7390, 'country_id' => 202, 'name' => 'Tak', 'name_ru' => 'Так', 'gmt_offset' => 7,
			), array(
				'id' => 7391, 'country_id' => 162, 'name' => 'Takaka', 'name_ru' => 'Такака', 'gmt_offset' => 13,
			), array(
				'id' => 7392, 'country_id' => 107, 'name' => 'Takamatsu', 'name_ru' => 'Такаматсу', 'gmt_offset' => 9,
			), array(
				'id' => 7393, 'country_id' => 166, 'name' => 'Takapoto', 'name_ru' => 'Такапото', 'gmt_offset' => 0,
			), array(
				'id' => 7394, 'country_id' => 166, 'name' => 'Takaroa', 'name_ru' => 'Такароа', 'gmt_offset' => 0,
			), array(
				'id' => 7395, 'country_id' => 202, 'name' => 'Takhli', 'name_ru' => 'Такхли', 'gmt_offset' => 7,
			), array(
				'id' => 7396, 'country_id' => 78, 'name' => 'Takoradi', 'name_ru' => 'Такоради', 'gmt_offset' => 0,
			), array(
				'id' => 7397, 'country_id' => 216, 'name' => 'Takotna', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 7398, 'country_id' => 216, 'name' => 'Taku Lodge', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7399, 'country_id' => 166, 'name' => 'Takume', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7400, 'country_id' => 165, 'name' => 'Talara', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 7401, 'country_id' => 129, 'name' => 'Talasea', 'name_ru' => 'Таласеа', 'gmt_offset' => 0,
			), array(
				'id' => 7402, 'country_id' => 65, 'name' => 'Talca', 'name_ru' => 'Талька', 'gmt_offset' => 0,
			), array(
				'id'         => 7403, 'country_id' => 118, 'name' => 'Taldy-Kurgan', 'name_ru' => 'Талды-Курган',
				'gmt_offset' => 6,
			), array(
				'id' => 7404, 'country_id' => 95, 'name' => 'Taliabu', 'name_ru' => 'Талиабу', 'gmt_offset' => 0,
			), array(
				'id' => 7405, 'country_id' => 216, 'name' => 'Talkeetna', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id'         => 7406, 'country_id' => 102, 'name' => 'Talknafjordur', 'name_ru' => 'Талкнафьордур',
				'gmt_offset' => 0,
			), array(
				'id' => 7407, 'country_id' => 216, 'name' => 'Talladega', 'name_ru' => 'Талладега', 'gmt_offset' => -6,
			), array(
				'id'         => 7408, 'country_id' => 216, 'name' => 'Tallahassee', 'name_ru' => 'Таллахасси',
				'gmt_offset' => -5,
			), array(
				'id' => 7409, 'country_id' => 60, 'name' => 'Tallinn', 'name_ru' => 'Таллинн', 'gmt_offset' => 2,
			), array(
				'id' => 7410, 'country_id' => 35, 'name' => 'Taloyoak', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 7411, 'country_id' => 43, 'name' => 'Taltal', 'name_ru' => 'Талтал', 'gmt_offset' => 0,
			), array(
				'id' => 7412, 'country_id' => 35, 'name' => 'Taltheilei Narrows', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7413, 'country_id' => 3, 'name' => 'Taluqan', 'name_ru' => 'Талукан', 'gmt_offset' => 0,
			), array(
				'id' => 7414, 'country_id' => 78, 'name' => 'Tamale', 'name_ru' => 'Тамале', 'gmt_offset' => 0,
			), array(
				'id'         => 7415, 'country_id' => 149, 'name' => 'Taman Negara', 'name_ru' => 'Таман Негара',
				'gmt_offset' => 0,
			), array(
				'id' => 7416, 'country_id' => 111, 'name' => 'Tamana Island', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 7417, 'country_id' => 58, 'name' => 'Tamanrasset', 'name_ru' => 'Таманрассет',
				'gmt_offset' => 1,
			), array(
				'id' => 7418, 'country_id' => 47, 'name' => 'Tamarindo', 'name_ru' => 'Тамариндо', 'gmt_offset' => -6,
			), array(
				'id' => 7419, 'country_id' => 133, 'name' => 'Tamatave', 'name_ru' => 'Таматаве', 'gmt_offset' => 3,
			), array(
				'id'         => 7420, 'country_id' => 192, 'name' => 'Tambacounda', 'name_ru' => 'Тамбакунда',
				'gmt_offset' => 0,
			), array(
				'id' => 7421, 'country_id' => 21, 'name' => 'Tambao', 'name_ru' => 'Тамбао', 'gmt_offset' => 0,
			), array(
				'id'         => 7422, 'country_id' => 133, 'name' => 'Tambohorano', 'name_ru' => 'Тамбохорано',
				'gmt_offset' => 3,
			), array(
				'id' => 7423, 'country_id' => 95, 'name' => 'Tambolaka', 'name_ru' => 'Тамболака', 'gmt_offset' => 7,
			), array(
				'id' => 7424, 'country_id' => 47, 'name' => 'Tambor', 'name_ru' => 'Тамбор', 'gmt_offset' => -6,
			), array(
				'id' => 7425, 'country_id' => 180, 'name' => 'Tambov', 'name_ru' => 'Тамбов', 'gmt_offset' => 4,
			), array(
				'id' => 7426, 'country_id' => 142, 'name' => 'Tamchakett', 'name_ru' => 'Тамшакет', 'gmt_offset' => 0,
			), array(
				'id' => 7427, 'country_id' => 46, 'name' => 'Tame', 'name_ru' => 'Таме', 'gmt_offset' => 0,
			), array(
				'id' => 7428, 'country_id' => 223, 'name' => 'Tamky', 'name_ru' => 'Тамки', 'gmt_offset' => 0,
			), array(
				'id' => 7429, 'country_id' => 125, 'name' => 'Tampa', 'name_ru' => 'Тампа', 'gmt_offset' => 2,
			), array(
				'id' => 7430, 'country_id' => 66, 'name' => 'Tampere', 'name_ru' => 'Тампере', 'gmt_offset' => 2,
			), array(
				'id' => 7431, 'country_id' => 148, 'name' => 'Tampico', 'name_ru' => 'Тампико', 'gmt_offset' => -6,
			), array(
				'id' => 7432, 'country_id' => 148, 'name' => 'Tamuin', 'name_ru' => 'Тамуин', 'gmt_offset' => 0,
			), array(
				'id' => 7433, 'country_id' => 14, 'name' => 'Tamworth', 'name_ru' => 'Тамворт', 'gmt_offset' => 11,
			), array(
				'id' => 7434, 'country_id' => 165, 'name' => 'Tan Tan', 'name_ru' => 'Тан Тан', 'gmt_offset' => 0,
			), array(
				'id'         => 7435, 'country_id' => 95, 'name' => 'Tana Toraja', 'name_ru' => 'Тана Торайа',
				'gmt_offset' => 0,
			), array(
				'id' => 7436, 'country_id' => 216, 'name' => 'Tanacross', 'name_ru' => 'Танакросс', 'gmt_offset' => -9,
			), array(
				'id'         => 7437, 'country_id' => 95, 'name' => 'Tanah Grogot', 'name_ru' => 'Танах-Гродот',
				'gmt_offset' => 0,
			), array(
				'id' => 7438, 'country_id' => 45, 'name' => 'Tanahmerah', 'name_ru' => 'Танахмерах', 'gmt_offset' => 0,
			), array(
				'id' => 7439, 'country_id' => 216, 'name' => 'Tanalian Point', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 7440, 'country_id' => 216, 'name' => 'Tanana', 'name_ru' => 'Танана', 'gmt_offset' => -9,
			), array(
				'id' => 7441, 'country_id' => 133, 'name' => 'Tanandava', 'name_ru' => 'Танандава', 'gmt_offset' => 0,
			), array(
				'id' => 7442, 'country_id' => 14, 'name' => 'Tanbar', 'name_ru' => 'Танбар', 'gmt_offset' => 0,
			), array(
				'id' => 7443, 'country_id' => 228, 'name' => 'Tanda Tula', 'name_ru' => 'Танда Тула', 'gmt_offset' => 2,
			), array(
				'id' => 7444, 'country_id' => 168, 'name' => 'Tandag', 'name_ru' => 'Тандаг', 'gmt_offset' => 0,
			), array(
				'id' => 7445, 'country_id' => 11, 'name' => 'Tandil', 'name_ru' => 'Тандиль', 'gmt_offset' => -3,
			), array(
				'id'         => 7446, 'country_id' => 107, 'name' => 'Tanegashima', 'name_ru' => 'Танегасима',
				'gmt_offset' => 9,
			), array(
				'id' => 7447, 'country_id' => 212, 'name' => 'Tanga', 'name_ru' => 'Танга', 'gmt_offset' => 3,
			), array(
				'id' => 7448, 'country_id' => 14, 'name' => 'Tangalooma', 'name_ru' => 'Тангалума', 'gmt_offset' => 10,
			), array(
				'id'         => 7449, 'country_id' => 29, 'name' => 'Tangara da Serra', 'name_ru' => 'Тангара де Серра',
				'gmt_offset' => -3,
			), array(
				'id' => 7450, 'country_id' => 129, 'name' => 'Tangier', 'name_ru' => 'Танжер', 'gmt_offset' => 0,
			), array(
				'id' => 7451, 'country_id' => 95, 'name' => 'Tanjung Balai', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7452, 'country_id' => 95, 'name' => 'Tanjung Pandan', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7453, 'country_id' => 149, 'name' => 'Tanjung Pelepas', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 7454, 'country_id' => 95, 'name' => 'Tanjung Pinang', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 7455, 'country_id' => 95, 'name' => 'Tanjung Redep', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 7456, 'country_id' => 95, 'name' => 'Tanjung Santan', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7457, 'country_id' => 95, 'name' => 'Tanjung Selor', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 7458, 'country_id' => 95, 'name' => 'Tanjung Warukin', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 7459, 'country_id' => 224, 'name' => 'Tanna', 'name_ru' => NULL, 'gmt_offset' => 11,
			), array(
				'id' => 7460, 'country_id' => 103, 'name' => 'Taormina', 'name_ru' => 'Таормина', 'gmt_offset' => 1,
			), array(
				'id' => 7461, 'country_id' => 216, 'name' => 'Taos', 'name_ru' => 'Таос', 'gmt_offset' => 0,
			), array(
				'id' => 7462, 'country_id' => 148, 'name' => 'Tapachula', 'name_ru' => 'Тапашула', 'gmt_offset' => -6,
			), array(
				'id' => 7463, 'country_id' => 95, 'name' => 'Tapaktuan', 'name_ru' => 'Тапактуан', 'gmt_offset' => 7,
			), array(
				'id' => 7464, 'country_id' => 123, 'name' => 'Tapeta', 'name_ru' => 'Тапета', 'gmt_offset' => 0,
			), array(
				'id' => 7465, 'country_id' => 167, 'name' => 'Tapini', 'name_ru' => 'Тапини', 'gmt_offset' => 0,
			), array(
				'id'         => 7466, 'country_id' => 159, 'name' => 'Taplejung', 'name_ru' => 'Тапледжунг',
				'gmt_offset' => 5.7000000000000002,
			), array(
				'id' => 7467, 'country_id' => 14, 'name' => 'Tara', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 7468, 'country_id' => 185, 'name' => 'Tarabo', 'name_ru' => 'Тарабо', 'gmt_offset' => 0,
			), array(
				'id' => 7469, 'country_id' => 95, 'name' => 'Tarakan', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 7470, 'country_id' => 167, 'name' => 'Tarakbits', 'name_ru' => 'Таракбиц', 'gmt_offset' => 0,
			), array(
				'id' => 7471, 'country_id' => 107, 'name' => 'Taramajima', 'name_ru' => 'Тарамажима', 'gmt_offset' => 9,
			), array(
				'id' => 7472, 'country_id' => 103, 'name' => 'Taranto', 'name_ru' => 'Таранто', 'gmt_offset' => 1,
			), array(
				'id' => 7473, 'country_id' => 46, 'name' => 'Tarapaca', 'name_ru' => 'Тарапака', 'gmt_offset' => -5,
			), array(
				'id' => 7474, 'country_id' => 183, 'name' => 'Tarapaina', 'name_ru' => 'Тарапайна', 'gmt_offset' => 0,
			), array(
				'id' => 7475, 'country_id' => 59, 'name' => 'Tarapoa', 'name_ru' => 'Тарапоа', 'gmt_offset' => -5,
			), array(
				'id' => 7476, 'country_id' => 165, 'name' => 'Tarapoto', 'name_ru' => 'Тарапото', 'gmt_offset' => 0,
			), array(
				'id' => 7477, 'country_id' => 29, 'name' => 'Tarauaca', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 7478, 'country_id' => 111, 'name' => 'Tarawa', 'name_ru' => 'Тарава', 'gmt_offset' => 12,
			), array(
				'id' => 7479, 'country_id' => 169, 'name' => 'Tarbela', 'name_ru' => 'Тарбела', 'gmt_offset' => 5,
			), array(
				'id' => 7480, 'country_id' => 14, 'name' => 'Tarcoola', 'name_ru' => 'Таркула', 'gmt_offset' => 0,
			), array(
				'id' => 7481, 'country_id' => 14, 'name' => 'Taree', 'name_ru' => 'Тари', 'gmt_offset' => 0,
			), array(
				'id' => 7482, 'country_id' => 129, 'name' => 'Tarfaya', 'name_ru' => 'Тарфая', 'gmt_offset' => 0,
			), array(
				'id' => 7483, 'country_id' => 21, 'name' => 'Targovishte', 'name_ru' => 'Тарговиште', 'gmt_offset' => 0,
			), array(
				'id' => 7484, 'country_id' => 167, 'name' => 'Tari', 'name_ru' => 'Тари', 'gmt_offset' => 0,
			), array(
				'id' => 7485, 'country_id' => 28, 'name' => 'Tarija', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 7486, 'country_id' => 14, 'name' => 'Taroom', 'name_ru' => 'Тарум', 'gmt_offset' => 0,
			), array(
				'id' => 7487, 'country_id' => 11, 'name' => 'Tartagal', 'name_ru' => 'Тартагал', 'gmt_offset' => 0,
			), array(
				'id' => 7488, 'country_id' => 60, 'name' => 'Tartu', 'name_ru' => 'Тарту', 'gmt_offset' => 2,
			), array(
				'id' => 7489, 'country_id' => 218, 'name' => 'Tashkent', 'name_ru' => 'Ташкент', 'gmt_offset' => 5,
			), array(
				'id' => 7490, 'country_id' => 80, 'name' => 'Tasiilaq', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 7491, 'country_id' => 95, 'name' => 'Tasikmalaya', 'name_ru' => 'Тасикмалая', 'gmt_offset' => 0,
			), array(
				'id' => 7492, 'country_id' => 80, 'name' => 'Tasiuasaq', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7493, 'country_id' => 35, 'name' => 'Tasiujuaq', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7494, 'country_id' => 167, 'name' => 'Taskul', 'name_ru' => 'Таскул', 'gmt_offset' => 0,
			), array(
				'id' => 7495, 'country_id' => 35, 'name' => 'Tasu', 'name_ru' => 'Тасу', 'gmt_offset' => 0,
			), array(
				'id' => 7496, 'country_id' => 166, 'name' => 'Tatakoto', 'name_ru' => 'Татакото', 'gmt_offset' => 0,
			), array(
				'id' => 7497, 'country_id' => 216, 'name' => 'Tatalina', 'name_ru' => 'Таталина', 'gmt_offset' => -9,
			), array(
				'id' => 7498, 'country_id' => 216, 'name' => 'Tatitlek', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 7499, 'country_id' => 12, 'name' => 'Tau', 'name_ru' => NULL, 'gmt_offset' => -11,
			), array(
				'id' => 7500, 'country_id' => 162, 'name' => 'Taupo', 'name_ru' => 'Таупо', 'gmt_offset' => 13,
			),
				array(
					'id'         => 7501, 'country_id' => 46, 'name' => 'Tauramena', 'name_ru' => 'Таурамена',
					'gmt_offset' => -5,
				), 1 => array(
				'id' => 7502, 'country_id' => 162, 'name' => 'Tauranga', 'name_ru' => 'Тауранга', 'gmt_offset' => 13,
			), array(
				'id' => 7503, 'country_id' => 167, 'name' => 'Tauta', 'name_ru' => 'Таута', 'gmt_offset' => 10,
			), array(
				'id' => 7504, 'country_id' => 67, 'name' => 'Taveuni', 'name_ru' => 'Тавеуни', 'gmt_offset' => 12,
			), array(
				'id' => 7505, 'country_id' => 170, 'name' => 'Tawa', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 7506, 'country_id' => 149, 'name' => 'Tawau', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 7507, 'country_id' => 168, 'name' => 'Tawitawi', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7508, 'country_id' => 216, 'name' => 'Taylor', 'name_ru' => 'Тейлор', 'gmt_offset' => 0,
			), array(
				'id' => 7509, 'country_id' => 168, 'name' => 'Taytay Sandoval', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7510, 'country_id' => 58, 'name' => 'Tbessa', 'name_ru' => 'Тбесса', 'gmt_offset' => 0,
			), array(
				'id' => 7511, 'country_id' => 75, 'name' => 'Tbilisi', 'name_ru' => 'Тбилиси', 'gmt_offset' => 4,
			), array(
				'id' => 7512, 'country_id' => 72, 'name' => 'Tchibanga', 'name_ru' => 'Чибанга', 'gmt_offset' => 1,
			), array(
				'id' => 7513, 'country_id' => 123, 'name' => 'Tchien', 'name_ru' => 'Тчиен', 'gmt_offset' => 0,
			), array(
				'id' => 7514, 'country_id' => 162, 'name' => 'Te Anau', 'name_ru' => 'Те Анау', 'gmt_offset' => 13,
			), array(
				'id' => 7515, 'country_id' => 73, 'name' => 'Teesside, Durham', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7516, 'country_id' => 29, 'name' => 'Tefe', 'name_ru' => 'Тефе', 'gmt_offset' => -4,
			), array(
				'id'         => 7517, 'country_id' => 91, 'name' => 'Tegucigalpa', 'name_ru' => 'Тегусигальпа',
				'gmt_offset' => -6,
			), array(
				'id' => 7518, 'country_id' => 216, 'name' => 'Tehachapi, CA', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 7519, 'country_id' => 101, 'name' => 'Tehran', 'name_ru' => 'Техран', 'gmt_offset' => 3.5,
			), array(
				'id' => 7520, 'country_id' => 148, 'name' => 'Tehuacan', 'name_ru' => 'Теуакан', 'gmt_offset' => 0,
			), array(
				'id'         => 7521, 'country_id' => 29, 'name' => 'Teixeira de Freitas', 'name_ru' => NULL,
				'gmt_offset' => -5,
			), array(
				'id' => 7522, 'country_id' => 167, 'name' => 'Tekadu', 'name_ru' => 'Текаду', 'gmt_offset' => 0,
			), array(
				'id' => 7523, 'country_id' => 167, 'name' => 'Tekin', 'name_ru' => 'Текин', 'gmt_offset' => 0,
			), array(
				'id' => 7524, 'country_id' => 208, 'name' => 'Tekirdag', 'name_ru' => 'Текиргад', 'gmt_offset' => 2,
			), array(
				'id' => 7525, 'country_id' => 97, 'name' => 'Tel Aviv Yafo', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 7526, 'country_id' => 91, 'name' => 'Tela', 'name_ru' => 'Тела', 'gmt_offset' => -6,
			), array(
				'id' => 7527, 'country_id' => 167, 'name' => 'Telefomin', 'name_ru' => 'Телефомин', 'gmt_offset' => 0,
			), array(
				'id' => 7528, 'country_id' => 35, 'name' => 'Telegraph Creek', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7529, 'country_id' => 35, 'name' => 'Telegraph Harbour', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7530, 'country_id' => 29, 'name' => 'Telemaco Borba', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7531, 'country_id' => 14, 'name' => 'Telfer', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7532, 'country_id' => 216, 'name' => 'Telida', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7533, 'country_id' => 216, 'name' => 'Teller', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 7534, 'country_id' => 216, 'name' => 'Teller Mission', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 7535, 'country_id' => 216, 'name' => 'Telluride', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 7536, 'country_id' => 149, 'name' => 'Telupid', 'name_ru' => 'Телупид', 'gmt_offset' => 0,
			), array(
				'id' => 7537, 'country_id' => 95, 'name' => 'Tembagapura', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 7538, 'country_id' => 95, 'name' => 'Teminabuan', 'name_ru' => 'Теминабуан', 'gmt_offset' => 0,
			), array(
				'id' => 7539, 'country_id' => 14, 'name' => 'Temora', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7540, 'country_id' => 216, 'name' => 'Temple, TX', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 7541, 'country_id' => 43, 'name' => 'Temuco', 'name_ru' => 'Темуко', 'gmt_offset' => -3,
			), array(
				'id' => 7542, 'country_id' => 216, 'name' => 'Tenakee Springs', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 7543, 'country_id' => 64, 'name' => 'Tenerife', 'name_ru' => 'Тенерифе', 'gmt_offset' => 0,
			), array(
				'id'         => 7544, 'country_id' => 10, 'name' => 'Teniente R. Marsh Martin', 'name_ru' => NULL,
				'gmt_offset' => -4,
			), array(
				'id' => 7545, 'country_id' => 21, 'name' => 'Tenkodogo', 'name_ru' => 'Тенкодого', 'gmt_offset' => 0,
			), array(
				'id'         => 7546, 'country_id' => 14, 'name' => 'Tennant Creek', 'name_ru' => 'Теннант Крик',
				'gmt_offset' => 0,
			), array(
				'id' => 7547, 'country_id' => 29, 'name' => 'Teofilo Otoni', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7548, 'country_id' => 148, 'name' => 'Tepic', 'name_ru' => 'Тепик', 'gmt_offset' => -7,
			), array(
				'id' => 7549, 'country_id' => 167, 'name' => 'Teptep', 'name_ru' => 'Тептеп', 'gmt_offset' => 0,
			), array(
				'id' => 7550, 'country_id' => 111, 'name' => 'Teraina', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7551, 'country_id' => 167, 'name' => 'Terapo', 'name_ru' => 'Терапо', 'gmt_offset' => 0,
			), array(
				'id' => 7552, 'country_id' => 173, 'name' => 'Terceira Island', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 7553, 'country_id' => 29, 'name' => 'Teresina', 'name_ru' => 'Терезина', 'gmt_offset' => -3,
			), array(
				'id' => 7554, 'country_id' => 218, 'name' => 'Termez', 'name_ru' => 'Термез', 'gmt_offset' => 5,
			), array(
				'id' => 7555, 'country_id' => 95, 'name' => 'Ternate', 'name_ru' => 'Тернате', 'gmt_offset' => 9,
			), array(
				'id' => 7556, 'country_id' => 213, 'name' => 'Ternopol', 'name_ru' => 'Тернополь', 'gmt_offset' => 3,
			), array(
				'id' => 7557, 'country_id' => 35, 'name' => 'Terrace Bay', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7558, 'country_id' => 35, 'name' => 'Terrace, BC', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 7559, 'country_id' => 216, 'name' => 'Terre Haute', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 7560, 'country_id' => 83, 'name' => 'Terre-de-Bas', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 7561, 'country_id' => 83, 'name' => 'Terre-de-Haut', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 7562, 'country_id' => 14, 'name' => 'Terrell', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7563, 'country_id' => 17, 'name' => 'Teslin', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 7564, 'country_id' => 63, 'name' => 'Tessenei', 'name_ru' => 'Тессеней', 'gmt_offset' => 3,
			), array(
				'id' => 7565, 'country_id' => 111, 'name' => 'Tetabedi', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7566, 'country_id' => 150, 'name' => 'Tete', 'name_ru' => 'Тете', 'gmt_offset' => 2,
			), array(
				'id' => 7567, 'country_id' => 35, 'name' => 'Tete-a-La Baleine', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7568, 'country_id' => 216, 'name' => 'Teterboro', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 7569, 'country_id' => 166, 'name' => 'Tetiaroa Is', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7570, 'country_id' => 216, 'name' => 'Tetlin', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 7571, 'country_id' => 129, 'name' => 'Tetuan', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7572, 'country_id' => 14, 'name' => 'Tewantin', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7573, 'country_id' => 216, 'name' => 'Texarkana', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7574, 'country_id' => 99, 'name' => 'Tezpur', 'name_ru' => 'Тезпур', 'gmt_offset' => 0,
			), array(
				'id' => 7575, 'country_id' => 99, 'name' => 'Tezu', 'name_ru' => 'Тезу', 'gmt_offset' => 0,
			), array(
				'id' => 7576, 'country_id' => 228, 'name' => 'Thaba Nchu', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 7577, 'country_id' => 124, 'name' => 'Thaba-Tseka', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7578, 'country_id' => 202, 'name' => 'Thakhek', 'name_ru' => 'Тхакхек', 'gmt_offset' => 7,
			), array(
				'id' => 7579, 'country_id' => 19, 'name' => 'Thakurgaon', 'name_ru' => 'Такургаон', 'gmt_offset' => 5.5,
			), array(
				'id' => 7580, 'country_id' => 162, 'name' => 'Thames', 'name_ru' => NULL, 'gmt_offset' => 13,
			), array(
				'id' => 7581, 'country_id' => 137, 'name' => 'Thandwe', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7582, 'country_id' => 14, 'name' => 'Thangool', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 7583, 'country_id' => 99, 'name' => 'Thanjavur', 'name_ru' => 'Тханджавур', 'gmt_offset' => 5.5,
			), array(
				'id' => 7584, 'country_id' => 14, 'name' => 'Thargomindah', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7585, 'country_id' => 30, 'name' => 'The Bight', 'name_ru' => 'Зе-Байт', 'gmt_offset' => 0,
			), array(
				'id' => 7586, 'country_id' => 216, 'name' => 'The Dalles', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 7587, 'country_id' => 157, 'name' => 'The Hague', 'name_ru' => 'Гаага', 'gmt_offset' => 1,
			), array(
				'id' => 7588, 'country_id' => 35, 'name' => 'The Pas', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7589, 'country_id' => 208, 'name' => 'Theda', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 7590, 'country_id' => 73, 'name' => 'Theodore', 'name_ru' => 'Теодоре', 'gmt_offset' => 0,
			), array(
				'id' => 7591, 'country_id' => 216, 'name' => 'Thermal', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id'         => 7592, 'country_id' => 216, 'name' => 'Thermopolis', 'name_ru' => 'Термополис',
				'gmt_offset' => -7,
			), array(
				'id' => 7593, 'country_id' => 85, 'name' => 'Thessaloniki', 'name_ru' => 'Салоники', 'gmt_offset' => 2,
			), array(
				'id' => 7594, 'country_id' => 35, 'name' => 'Thicket Portage', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 7595, 'country_id' => 216, 'name' => 'Thief River Falls', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 7596, 'country_id' => 102, 'name' => 'Thingeyri', 'name_ru' => 'Тингейри', 'gmt_offset' => 0,
			), array(
				'id' => 7597, 'country_id' => 55, 'name' => 'Thisted', 'name_ru' => 'Тистед', 'gmt_offset' => 0,
			), array(
				'id' => 7598, 'country_id' => 61, 'name' => 'Thohoyandou', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7599, 'country_id' => 216, 'name' => 'Thomasville', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 7600, 'country_id' => 35, 'name' => 'Thompson', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 7601, 'country_id' => 216, 'name' => 'Thompsonfield', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7602, 'country_id' => 216, 'name' => 'Thorne Bay', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 7603, 'country_id' => 102, 'name' => 'Thorshofn', 'name_ru' => 'Торсхофн', 'gmt_offset' => 0,
			), array(
				'id'         => 7604, 'country_id' => 216, 'name' => 'Thousand Oaks', 'name_ru' => 'Таузэнд Оукс',
				'gmt_offset' => 0,
			), array(
				'id' => 7605, 'country_id' => 123, 'name' => 'Three Rivers', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7606, 'country_id' => 163, 'name' => 'Thumrait', 'name_ru' => 'Тумрайт', 'gmt_offset' => 4,
			), array(
				'id'         => 7607, 'country_id' => 35, 'name' => 'Thunder Bay', 'name_ru' => 'Тандер Бэй',
				'gmt_offset' => -5,
			), array(
				'id' => 7608, 'country_id' => 14, 'name' => 'Thursday Island', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7609, 'country_id' => 14, 'name' => 'Thylungra', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7610, 'country_id' => 45, 'name' => 'Tianjin', 'name_ru' => 'Тяньцзинь', 'gmt_offset' => 8,
			), array(
				'id' => 7611, 'country_id' => 192, 'name' => 'Tiaret', 'name_ru' => 'Тиарет', 'gmt_offset' => 0,
			), array(
				'id' => 7612, 'country_id' => 14, 'name' => 'Tibooburra', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7613, 'country_id' => 46, 'name' => 'Tibu', 'name_ru' => 'Тибу', 'gmt_offset' => -4,
			), array(
				'id' => 7614, 'country_id' => 164, 'name' => 'Ticantiki', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7615, 'country_id' => 142, 'name' => 'Tichitt', 'name_ru' => 'Тишитт', 'gmt_offset' => 0,
			), array(
				'id' => 7616, 'country_id' => 142, 'name' => 'Tidjikja', 'name_ru' => 'Тиджикья', 'gmt_offset' => 0,
			), array(
				'id' => 7617, 'country_id' => 167, 'name' => 'Tifalmin', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7618, 'country_id' => 216, 'name' => 'Tifton, GA', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 7619, 'country_id' => 132, 'name' => 'Tiga', 'name_ru' => 'Тига', 'gmt_offset' => 1,
			), array(
				'id' => 7620, 'country_id' => 71, 'name' => 'Tignes', 'name_ru' => 'Тинье', 'gmt_offset' => 1,
			), array(
				'id' => 7621, 'country_id' => 148, 'name' => 'Tijuana', 'name_ru' => 'Тихуана', 'gmt_offset' => -8,
			), array(
				'id' => 7622, 'country_id' => 86, 'name' => 'Tikal', 'name_ru' => 'Тикал', 'gmt_offset' => -6,
			), array(
				'id'         => 7623, 'country_id' => 159, 'name' => 'Tikapur', 'name_ru' => 'Тикапур',
				'gmt_offset' => 5.7000000000000002,
			), array(
				'id' => 7624, 'country_id' => 99, 'name' => 'Tikchik', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 7625, 'country_id' => 166, 'name' => 'Tikehau Atoll', 'name_ru' => 'Тикехау-Атолл',
				'gmt_offset' => -10,
			), array(
				'id' => 7626, 'country_id' => 44, 'name' => 'Tiko', 'name_ru' => 'Тико', 'gmt_offset' => 1,
			), array(
				'id' => 7627, 'country_id' => 100, 'name' => 'Tikrit', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7628, 'country_id' => 180, 'name' => 'Tiksi', 'name_ru' => 'Тикси', 'gmt_offset' => 10,
			), array(
				'id' => 7629, 'country_id' => 137, 'name' => 'Tilin', 'name_ru' => 'Тилин', 'gmt_offset' => 0,
			), array(
				'id' => 7630, 'country_id' => 162, 'name' => 'Timaru', 'name_ru' => 'Тимару', 'gmt_offset' => 13,
			), array(
				'id' => 7631, 'country_id' => 142, 'name' => 'Timbedra', 'name_ru' => 'Тимбедра', 'gmt_offset' => 0,
			), array(
				'id'         => 7632, 'country_id' => 162, 'name' => 'Timber Creek', 'name_ru' => 'Тимбер-Крик',
				'gmt_offset' => 13,
			), array(
				'id' => 7633, 'country_id' => 46, 'name' => 'Timbiqui', 'name_ru' => 'Тимбуки', 'gmt_offset' => 0,
			), array(
				'id' => 7634, 'country_id' => 167, 'name' => 'Timbunke', 'name_ru' => 'Тимбунке', 'gmt_offset' => 10,
			), array(
				'id' => 7635, 'country_id' => 58, 'name' => 'Timimoun', 'name_ru' => 'Тимимун', 'gmt_offset' => 1,
			), array(
				'id' => 7636, 'country_id' => 178, 'name' => 'Timisoara', 'name_ru' => 'Тимисоара', 'gmt_offset' => 1,
			), array(
				'id' => 7637, 'country_id' => 35, 'name' => 'Timmins, ON', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 7638, 'country_id' => 216, 'name' => 'Tin City, AK', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 7639, 'country_id' => 134, 'name' => 'Tinak Island', 'name_ru' => NULL, 'gmt_offset' => 12,
			), array(
				'id' => 7640, 'country_id' => 167, 'name' => 'Tinboli', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 7641, 'country_id' => 58, 'name' => 'Tindouf', 'name_ru' => 'Тиндуф', 'gmt_offset' => 1,
			), array(
				'id'         => 7642, 'country_id' => 165, 'name' => 'Tingo Maria', 'name_ru' => 'Тинго-Мария',
				'gmt_offset' => -5,
			), array(
				'id' => 7643, 'country_id' => 41, 'name' => 'Tingrela', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7644, 'country_id' => 167, 'name' => 'Tingwon', 'name_ru' => 'Тингвон', 'gmt_offset' => 0,
			), array(
				'id' => 7645, 'country_id' => 140, 'name' => 'Tinian', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 7646, 'country_id' => 216, 'name' => 'Tioga', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7647, 'country_id' => 95, 'name' => 'Tiom', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 7648, 'country_id' => 149, 'name' => 'Tioman', 'name_ru' => 'Тиоман', 'gmt_offset' => 8,
			), array(
				'id' => 7649, 'country_id' => 65, 'name' => 'Tippi', 'name_ru' => 'Типпи', 'gmt_offset' => 0,
			), array(
				'id' => 7650, 'country_id' => 59, 'name' => 'Tiputini', 'name_ru' => 'Типутини', 'gmt_offset' => 0,
			), array(
				'id' => 7651, 'country_id' => 6, 'name' => 'Tirana', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 7652, 'country_id' => 73, 'name' => 'Tiree', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 7653, 'country_id' => 178, 'name' => 'Tirgu Mures', 'name_ru' => 'Тиргу Мурес',
				'gmt_offset' => 2,
			), array(
				'id' => 7654, 'country_id' => 3, 'name' => 'Tirinkot', 'name_ru' => 'Таринкот', 'gmt_offset' => 0,
			), array(
				'id'         => 7655, 'country_id' => 99, 'name' => 'Tiruchirapally', 'name_ru' => 'Тиручирапалли',
				'gmt_offset' => 0,
			), array(
				'id' => 7656, 'country_id' => 99, 'name' => 'Tirupati', 'name_ru' => 'Тирупати', 'gmt_offset' => 5.5,
			), array(
				'id' => 7657, 'country_id' => 35, 'name' => 'Tisdale, sk', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 7658, 'country_id' => 216, 'name' => 'Titusville', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7659, 'country_id' => 132, 'name' => 'Tivat', 'name_ru' => 'Тиват', 'gmt_offset' => 1,
			), array(
				'id' => 7660, 'country_id' => 148, 'name' => 'Tizimin', 'name_ru' => 'Тисимин', 'gmt_offset' => -6,
			), array(
				'id' => 7661, 'country_id' => 58, 'name' => 'Tlemcen', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 7662, 'country_id' => 124, 'name' => 'Tlokoeng', 'name_ru' => 'Тлокоэнг', 'gmt_offset' => 0,
			), array(
				'id' => 7663, 'country_id' => 209, 'name' => 'Tobago', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 7664, 'country_id' => 14, 'name' => 'Tobermorey', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7665, 'country_id' => 180, 'name' => 'Tobolsk', 'name_ru' => 'Тобольск', 'gmt_offset' => 6,
			), array(
				'id' => 7666, 'country_id' => 128, 'name' => 'Tobruk', 'name_ru' => 'Тобрук', 'gmt_offset' => 0,
			), array(
				'id' => 7667, 'country_id' => 103, 'name' => 'Toccoa', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 7668, 'country_id' => 91, 'name' => 'Tocoa', 'name_ru' => 'Токоа', 'gmt_offset' => 0,
			), array(
				'id' => 7669, 'country_id' => 43, 'name' => 'Tocopilla', 'name_ru' => 'Токопийа', 'gmt_offset' => -3,
			), array(
				'id' => 7670, 'country_id' => 14, 'name' => 'Tocumwal', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7671, 'country_id' => 35, 'name' => 'Tofino', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7672, 'country_id' => 35, 'name' => 'Tofino, BC', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 7673, 'country_id' => 216, 'name' => 'Togiak Fish', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7674, 'country_id' => 216, 'name' => 'Togiak Village', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7675, 'country_id' => 133, 'name' => 'Tohid', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 7676, 'country_id' => 216, 'name' => 'Tok', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 7677, 'country_id' => 103, 'name' => 'Tokat', 'name_ru' => 'Токат', 'gmt_offset' => 1,
			), array(
				'id' => 7678, 'country_id' => 216, 'name' => 'Tokeen', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7679, 'country_id' => 162, 'name' => 'Tokoroa', 'name_ru' => NULL, 'gmt_offset' => 13,
			), array(
				'id' => 7680, 'country_id' => 216, 'name' => 'Toksook Bay', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7681, 'country_id' => 107, 'name' => 'Tokunoshima', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 7682, 'country_id' => 107, 'name' => 'Tokushima', 'name_ru' => 'Токушима', 'gmt_offset' => 9,
			), array(
				'id' => 7683, 'country_id' => 107, 'name' => 'Tokyo', 'name_ru' => 'Токио', 'gmt_offset' => 9,
			), array(
				'id' => 7684, 'country_id' => 11, 'name' => 'Tol', 'name_ru' => 'Тол', 'gmt_offset' => 0,
			), array(
				'id' => 7685, 'country_id' => 46, 'name' => 'Toledo', 'name_ru' => 'Толедо', 'gmt_offset' => -5,
			), array(
				'id' => 7686, 'country_id' => 216, 'name' => 'Toledo, OH', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 7687, 'country_id' => 95, 'name' => 'Tolitoli', 'name_ru' => 'Толитоли', 'gmt_offset' => 8,
			), array(
				'id' => 7688, 'country_id' => 46, 'name' => 'Tolu', 'name_ru' => 'Толу', 'gmt_offset' => 0,
			), array(
				'id' => 7689, 'country_id' => 148, 'name' => 'Toluca', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 7690, 'country_id' => 14, 'name' => 'Tom Price', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 7691, 'country_id' => 149, 'name' => 'Tomanggong', 'name_ru' => 'Томангонг', 'gmt_offset' => 0,
			), array(
				'id' => 7692, 'country_id' => 136, 'name' => 'Tombouctou', 'name_ru' => 'Томбукту', 'gmt_offset' => 0,
			), array(
				'id' => 7693, 'country_id' => 216, 'name' => 'Toms River', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7694, 'country_id' => 180, 'name' => 'Tomsk', 'name_ru' => 'Томск', 'gmt_offset' => 8,
			), array(
				'id' => 7695, 'country_id' => 45, 'name' => 'Tonghua', 'name_ru' => 'Тонхва', 'gmt_offset' => 0,
			), array(
				'id' => 7696, 'country_id' => 45, 'name' => 'Tongliao', 'name_ru' => 'Тонглян', 'gmt_offset' => 0,
			), array(
				'id' => 7697, 'country_id' => 224, 'name' => 'Tongoa', 'name_ru' => 'Тонгоа', 'gmt_offset' => 0,
			), array(
				'id' => 7698, 'country_id' => 45, 'name' => 'Tongren', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7699, 'country_id' => 216, 'name' => 'Tonopah', 'name_ru' => 'Тонопа', 'gmt_offset' => -8,
			), array(
				'id' => 7700, 'country_id' => 208, 'name' => 'Tonu', 'name_ru' => 'Тону', 'gmt_offset' => 2,
			), array(
				'id' => 7701, 'country_id' => 14, 'name' => 'Toowoomba', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 7702, 'country_id' => 216, 'name' => 'Topeka', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 7703, 'country_id' => 216, 'name' => 'Topeka, KS', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 7704, 'country_id' => 167, 'name' => 'Torembi', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 7705, 'country_id' => 167, 'name' => 'Torokina', 'name_ru' => 'Торокина', 'gmt_offset' => 0,
			), array(
				'id' => 7706, 'country_id' => 35, 'name' => 'Toronto', 'name_ru' => 'Торонто', 'gmt_offset' => -5,
			), array(
				'id' => 7707, 'country_id' => 108, 'name' => 'Tororo', 'name_ru' => 'Тороро', 'gmt_offset' => 0,
			), array(
				'id' => 7708, 'country_id' => 158, 'name' => 'Torp', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 7709, 'country_id' => 216, 'name' => 'Torrance', 'name_ru' => 'Торранс', 'gmt_offset' => -8,
			), array(
				'id'         => 7710, 'country_id' => 64, 'name' => 'Torremolinos', 'name_ru' => 'Торремолинос',
				'gmt_offset' => 0,
			), array(
				'id' => 7711, 'country_id' => 148, 'name' => 'Torreon', 'name_ru' => 'Торреон', 'gmt_offset' => -6,
			), array(
				'id' => 7712, 'country_id' => 220, 'name' => 'Torres', 'name_ru' => 'Торрес', 'gmt_offset' => 0,
			), array(
				'id' => 7713, 'country_id' => 216, 'name' => 'Torrington', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 7714, 'country_id' => 186, 'name' => 'Torsby', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 7715, 'country_id' => 221, 'name' => 'Tortola', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 7716, 'country_id' => 103, 'name' => 'Tortoli', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7717, 'country_id' => 47, 'name' => 'Tortuquero', 'name_ru' => 'Тортукеро', 'gmt_offset' => -6,
			), array(
				'id' => 7718, 'country_id' => 14, 'name' => 'Torwood', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7719, 'country_id' => 138, 'name' => 'Tosontsengel', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7720, 'country_id' => 194, 'name' => 'Totness', 'name_ru' => 'Тотнесс', 'gmt_offset' => 0,
			), array(
				'id' => 7721, 'country_id' => 107, 'name' => 'Tottori', 'name_ru' => 'Тоттори', 'gmt_offset' => 9,
			), array(
				'id' => 7722, 'country_id' => 41, 'name' => 'Touba', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7723, 'country_id' => 21, 'name' => 'Tougan', 'name_ru' => 'Туган', 'gmt_offset' => 0,
			), array(
				'id' => 7724, 'country_id' => 58, 'name' => 'Touggourt', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 7725, 'country_id' => 152, 'name' => 'Touho', 'name_ru' => 'Туо', 'gmt_offset' => 11,
			), array(
				'id' => 7726, 'country_id' => 71, 'name' => 'Toulouse', 'name_ru' => 'Тулуз', 'gmt_offset' => 1,
			), array(
				'id'         => 7727, 'country_id' => 61, 'name' => 'Tour Sinai City', 'name_ru' => 'Тур-Синай-Сити',
				'gmt_offset' => 2,
			), array(
				'id' => 7728, 'country_id' => 71, 'name' => 'Tours', 'name_ru' => 'Турс', 'gmt_offset' => 1,
			), array(
				'id' => 7729, 'country_id' => 71, 'name' => 'Toussus-Le-Noble', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 7730, 'country_id' => 14, 'name' => 'Townsville', 'name_ru' => 'Таунсвилл', 'gmt_offset' => 10,
			), array(
				'id' => 7731, 'country_id' => 107, 'name' => 'Toyama', 'name_ru' => 'Тояма', 'gmt_offset' => 9,
			), array(
				'id' => 7732, 'country_id' => 107, 'name' => 'Toyooka', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 7733, 'country_id' => 205, 'name' => 'Tozeur', 'name_ru' => 'Тозер', 'gmt_offset' => 1,
			), array(
				'id' => 7734, 'country_id' => 208, 'name' => 'Trabzon', 'name_ru' => 'Трабзон', 'gmt_offset' => 2,
			), array(
				'id' => 7735, 'country_id' => 202, 'name' => 'Trang', 'name_ru' => 'Транг', 'gmt_offset' => 7,
			), array(
				'id' => 7736, 'country_id' => 103, 'name' => 'Trapani', 'name_ru' => 'Тапини', 'gmt_offset' => 1,
			), array(
				'id' => 7737, 'country_id' => 14, 'name' => 'Traralgon', 'name_ru' => NULL, 'gmt_offset' => 11,
			), array(
				'id' => 7738, 'country_id' => 202, 'name' => 'Trat', 'name_ru' => 'Трат', 'gmt_offset' => 7,
			), array(
				'id'         => 7739, 'country_id' => 216, 'name' => 'Traverse City', 'name_ru' => 'город Траверсе',
				'gmt_offset' => -5,
			), array(
				'id'         => 7740, 'country_id' => 30, 'name' => 'Treasure Cay, Ibaco Islands', 'name_ru' => NULL,
				'gmt_offset' => -5,
			), array(
				'id' => 7741, 'country_id' => 85, 'name' => 'Tree Point', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 7742, 'country_id' => 71, 'name' => 'Treinta-y-Tres', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 7743, 'country_id' => 11, 'name' => 'Trelew', 'name_ru' => 'Трелью', 'gmt_offset' => -3,
			), array(
				'id' => 7744, 'country_id' => 29, 'name' => 'Tremonton', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7745, 'country_id' => 71, 'name' => 'Tremuson', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 7746, 'country_id' => 35, 'name' => 'Trenton', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 7747, 'country_id' => 216, 'name' => 'Trenton, NJ', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id'         => 7748, 'country_id' => 11, 'name' => 'Tres Arroyos', 'name_ru' => 'Трес-Арройос',
				'gmt_offset' => 0,
			), array(
				'id'         => 7749, 'country_id' => 46, 'name' => 'Tres Esquinas', 'name_ru' => 'Трес-Эскинас',
				'gmt_offset' => 0,
			), array(
				'id' => 7750, 'country_id' => 103, 'name' => 'Treviso', 'name_ru' => 'Тревисо', 'gmt_offset' => 1,
			), array(
				'id' => 7751, 'country_id' => 103, 'name' => 'Trieste', 'name_ru' => 'Триест', 'gmt_offset' => 1,
			), array(
				'id'         => 7752, 'country_id' => 122, 'name' => 'Trincomalee', 'name_ru' => 'Тринкомали',
				'gmt_offset' => 5.5,
			), array(
				'id' => 7753, 'country_id' => 216, 'name' => 'Trinidad', 'name_ru' => 'Тринидад', 'gmt_offset' => -7,
			), array(
				'id' => 7754, 'country_id' => 13, 'name' => 'Triple Island', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 7755, 'country_id' => 128, 'name' => 'Tripoli', 'name_ru' => 'Триполи', 'gmt_offset' => 2,
			), array(
				'id'         => 7756, 'country_id' => 99, 'name' => 'Trivandrum', 'name_ru' => 'Тривандрум',
				'gmt_offset' => 5.5,
			), array(
				'id' => 7757, 'country_id' => 35, 'name' => 'Trois-Rivieres', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 7758, 'country_id' => 186, 'name' => 'Trollhattan', 'name_ru' => 'Тролльхеттан',
				'gmt_offset' => 1,
			), array(
				'id' => 7759, 'country_id' => 29, 'name' => 'Trombetas', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7760, 'country_id' => 158, 'name' => 'Tromso', 'name_ru' => 'Тромсо', 'gmt_offset' => 1,
			), array(
				'id' => 7761, 'country_id' => 216, 'name' => 'Trona', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 7762, 'country_id' => 158, 'name' => 'Trondheim', 'name_ru' => 'Трондхайм', 'gmt_offset' => 1,
			), array(
				'id' => 7763, 'country_id' => 216, 'name' => 'Troutdale', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 7764, 'country_id' => 118, 'name' => 'Troy', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7765, 'country_id' => 216, 'name' => 'Truckee, CA', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 7766, 'country_id' => 91, 'name' => 'Trujillo', 'name_ru' => 'Трухилло', 'gmt_offset' => -6,
			), array(
				'id' => 7767, 'country_id' => 69, 'name' => 'Truk', 'name_ru' => NULL, 'gmt_offset' => 11,
			), array(
				'id'         => 7768, 'country_id' => 216, 'name' => 'Truth Or Consequences', 'name_ru' => NULL,
				'gmt_offset' => -7,
			), array(
				'id' => 7769, 'country_id' => 32, 'name' => 'Tsabong', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id'         => 7770, 'country_id' => 133, 'name' => 'Tsaratanana', 'name_ru' => 'Тсаратанана',
				'gmt_offset' => 0,
			), array(
				'id' => 7771, 'country_id' => 138, 'name' => 'Tsetserleg', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7772, 'country_id' => 167, 'name' => 'Tsewi', 'name_ru' => 'Цеви', 'gmt_offset' => 0,
			), array(
				'id' => 7773, 'country_id' => 37, 'name' => 'Tshikapa', 'name_ru' => 'Тшикапа', 'gmt_offset' => 2,
			), array(
				'id' => 7774, 'country_id' => 37, 'name' => 'Tshipise', 'name_ru' => 'Тшиписе', 'gmt_offset' => 0,
			), array(
				'id' => 7775, 'country_id' => 167, 'name' => 'Tsili Tsili', 'name_ru' => 'Цили-Цили', 'gmt_offset' => 0,
			), array(
				'id'         => 7776, 'country_id' => 133, 'name' => 'Tsiroanomandidy', 'name_ru' => 'Тсироаномандиди',
				'gmt_offset' => 0,
			), array(
				'id' => 7777, 'country_id' => 151, 'name' => 'Tsumeb', 'name_ru' => 'Тсумеб', 'gmt_offset' => 0,
			), array(
				'id' => 7778, 'country_id' => 107, 'name' => 'Tsushima', 'name_ru' => 'Цусима', 'gmt_offset' => 0,
			), array(
				'id' => 7779, 'country_id' => 81, 'name' => 'Tuba City', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7780, 'country_id' => 95, 'name' => 'Tubala', 'name_ru' => 'Тубала', 'gmt_offset' => 0,
			), array(
				'id' => 7781, 'country_id' => 166, 'name' => 'Tubuai', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7782, 'country_id' => 216, 'name' => 'Tucson', 'name_ru' => 'Туксон', 'gmt_offset' => 0,
			), array(
				'id' => 7783, 'country_id' => 216, 'name' => 'Tucson, AZ', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 7784, 'country_id' => 29, 'name' => 'Tucuma', 'name_ru' => 'Тукума', 'gmt_offset' => 0,
			), array(
				'id' => 7785, 'country_id' => 11, 'name' => 'Tucuman', 'name_ru' => 'Тукуман', 'gmt_offset' => -3,
			), array(
				'id' => 7786, 'country_id' => 216, 'name' => 'Tucumcari', 'name_ru' => 'Тукумкари', 'gmt_offset' => -7,
			), array(
				'id' => 7787, 'country_id' => 220, 'name' => 'Tucupita', 'name_ru' => 'Тукупита', 'gmt_offset' => 0,
			), array(
				'id' => 7788, 'country_id' => 29, 'name' => 'Tucurui', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 7789, 'country_id' => 167, 'name' => 'Tufi', 'name_ru' => 'Туфи', 'gmt_offset' => 0,
			), array(
				'id' => 7790, 'country_id' => 168, 'name' => 'Tuguegarao', 'name_ru' => 'Тугуэгарао', 'gmt_offset' => 8,
			), array(
				'id' => 7791, 'country_id' => 35, 'name' => 'Tuktoyaktuk', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7792, 'country_id' => 180, 'name' => 'Tula', 'name_ru' => 'Тула', 'gmt_offset' => 4,
			), array(
				'id' => 7793, 'country_id' => 183, 'name' => 'Tulagi Island', 'name_ru' => NULL, 'gmt_offset' => 11,
			), array(
				'id' => 7794, 'country_id' => 216, 'name' => 'Tulare, CA', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 7795, 'country_id' => 59, 'name' => 'Tulcan', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7796, 'country_id' => 178, 'name' => 'Tulcea', 'name_ru' => 'Тулча', 'gmt_offset' => 2,
			), array(
				'id' => 7797, 'country_id' => 133, 'name' => 'Tulear', 'name_ru' => 'Тулеар', 'gmt_offset' => 3,
			), array(
				'id' => 7798, 'country_id' => 32, 'name' => 'Tuli Block', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7799, 'country_id' => 35, 'name' => 'Tulita/Fort Norman', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 7800, 'country_id' => 216, 'name' => 'Tullahoma', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 7801, 'country_id' => 216, 'name' => 'Tullahoma, TN', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 7802, 'country_id' => 216, 'name' => 'Tulsa', 'name_ru' => 'Тулса', 'gmt_offset' => -6,
			), array(
				'id' => 7803, 'country_id' => 46, 'name' => 'Tulua', 'name_ru' => 'Тулуа', 'gmt_offset' => -5,
			), array(
				'id' => 7804, 'country_id' => 168, 'name' => 'Tulugak', 'name_ru' => 'Тулугак', 'gmt_offset' => 0,
			), array(
				'id' => 7805, 'country_id' => 216, 'name' => 'Tuluksak', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 7806, 'country_id' => 148, 'name' => 'Tulum', 'name_ru' => 'Тулум', 'gmt_offset' => -6,
			), array(
				'id' => 7807, 'country_id' => 65, 'name' => 'Tum', 'name_ru' => 'Тум', 'gmt_offset' => 3,
			), array(
				'id' => 7808, 'country_id' => 46, 'name' => 'Tumaco', 'name_ru' => 'Тумако', 'gmt_offset' => 0,
			), array(
				'id'         => 7809, 'country_id' => 95, 'name' => 'Tumbang Samba', 'name_ru' => 'Тумбанг-Самба',
				'gmt_offset' => 9,
			), array(
				'id' => 7810, 'country_id' => 165, 'name' => 'Tumbes', 'name_ru' => 'Тумбес', 'gmt_offset' => -5,
			), array(
				'id' => 7811, 'country_id' => 73, 'name' => 'Tumbler Ridge', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7812, 'country_id' => 220, 'name' => 'Tumeremo', 'name_ru' => 'Тумеремо', 'gmt_offset' => -4,
			), array(
				'id'         => 7813, 'country_id' => 159, 'name' => 'Tumling Tar', 'name_ru' => NULL,
				'gmt_offset' => 5.7000000000000002,
			), array(
				'id' => 7814, 'country_id' => 167, 'name' => 'Tumolbil', 'name_ru' => 'Тумболбил', 'gmt_offset' => 0,
			), array(
				'id' => 7815, 'country_id' => 14, 'name' => 'Tumut', 'name_ru' => NULL, 'gmt_offset' => 11,
			), array(
				'id' => 7816, 'country_id' => 35, 'name' => 'Tungsten', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7817, 'country_id' => 205, 'name' => 'Tunis', 'name_ru' => 'Тунис', 'gmt_offset' => 1,
			), array(
				'id' => 7818, 'country_id' => 216, 'name' => 'Tuntutuliak', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 7819, 'country_id' => 216, 'name' => 'Tununak', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 7820, 'country_id' => 45, 'name' => 'Tunxi', 'name_ru' => 'Тунси', 'gmt_offset' => 8,
			), array(
				'id' => 7821, 'country_id' => 166, 'name' => 'Tupai', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7822, 'country_id' => 216, 'name' => 'Tupelo', 'name_ru' => 'Тупело', 'gmt_offset' => -6,
			), array(
				'id' => 7823, 'country_id' => 164, 'name' => 'Tupile', 'name_ru' => 'Тупиле', 'gmt_offset' => 0,
			), array(
				'id' => 7824, 'country_id' => 182, 'name' => 'Turaif', 'name_ru' => 'Тураиф', 'gmt_offset' => 0,
			), array(
				'id' => 7825, 'country_id' => 169, 'name' => 'Turbat', 'name_ru' => 'Турбат', 'gmt_offset' => 0,
			), array(
				'id' => 7826, 'country_id' => 46, 'name' => 'Turbo', 'name_ru' => 'Турбо', 'gmt_offset' => -5,
			), array(
				'id' => 7827, 'country_id' => 173, 'name' => 'Tureira', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7828, 'country_id' => 103, 'name' => 'Turin', 'name_ru' => 'Турин', 'gmt_offset' => 1,
			), array(
				'id' => 7829, 'country_id' => 14, 'name' => 'Turkey Creek', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7830, 'country_id' => 204, 'name' => 'Turkmenabad', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 7831, 'country_id' => 204, 'name' => 'Turkmenbashi', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 7832, 'country_id' => 66, 'name' => 'Turku', 'name_ru' => 'Турку', 'gmt_offset' => 2,
			), array(
				'id'         => 7833, 'country_id' => 67, 'name' => 'Turtle Island', 'name_ru' => 'Тертл-Айленд',
				'gmt_offset' => 12,
			), array(
				'id' => 7834, 'country_id' => 216, 'name' => 'Tuscaloosa', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7835, 'country_id' => 216, 'name' => 'Tuskegee', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 7836, 'country_id' => 99, 'name' => 'Tuticorin', 'name_ru' => NULL, 'gmt_offset' => 5.5,
			), array(
				'id' => 7837, 'country_id' => 216, 'name' => 'Tuxekan Island', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 7838, 'country_id' => 148, 'name' => 'Tuxtla Gutierrez',
				'name_ru'    => 'Тухтла-Гутьеррес', 'gmt_offset' => -6,
			), array(
				'id' => 7839, 'country_id' => 223, 'name' => 'Tuy Hoa', 'name_ru' => 'Туй-Хоа', 'gmt_offset' => 7,
			), array(
				'id' => 7840, 'country_id' => 17, 'name' => 'Tuzla', 'name_ru' => 'Тузла', 'gmt_offset' => 1,
			), array(
				'id' => 7841, 'country_id' => 180, 'name' => 'Tver', 'name_ru' => 'Тверь', 'gmt_offset' => 4,
			), array(
				'id' => 7842, 'country_id' => 216, 'name' => 'Twentynine Palms', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 7843, 'country_id' => 216, 'name' => 'Twin Falls, ID', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 7844, 'country_id' => 216, 'name' => 'Twin Hills', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 7845, 'country_id' => 216, 'name' => 'Tyler', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 7846, 'country_id' => 180, 'name' => 'Tynda', 'name_ru' => 'Тында', 'gmt_offset' => 10,
			), array(
				'id' => 7847, 'country_id' => 216, 'name' => 'Tyonek', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7848, 'country_id' => 180, 'name' => 'Tyumen', 'name_ru' => 'Тюмень', 'gmt_offset' => 6,
			), array(
				'id' => 7849, 'country_id' => 228, 'name' => 'Tzaneen', 'name_ru' => 'Цанин', 'gmt_offset' => 2,
			), array(
				'id' => 7850, 'country_id' => 166, 'name' => 'Ua Huka', 'name_ru' => NULL, 'gmt_offset' => 9.5,
			), array(
				'id' => 7851, 'country_id' => 166, 'name' => 'Ua Pou', 'name_ru' => NULL, 'gmt_offset' => 9.5,
			), array(
				'id' => 7852, 'country_id' => 86, 'name' => 'Uaxactun', 'name_ru' => 'Уахактун', 'gmt_offset' => 6,
			), array(
				'id' => 7853, 'country_id' => 128, 'name' => 'Ubari', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 7854, 'country_id' => 29, 'name' => 'Ubatuba', 'name_ru' => 'Убатуба', 'gmt_offset' => 3,
			), array(
				'id' => 7855, 'country_id' => 107, 'name' => 'Ube', 'name_ru' => 'Убе', 'gmt_offset' => -9,
			), array(
				'id' => 7856, 'country_id' => 29, 'name' => 'Uberaba', 'name_ru' => 'Юбераба', 'gmt_offset' => 3,
			), array(
				'id' => 7857, 'country_id' => 29, 'name' => 'Uberlandia', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id'         => 7858, 'country_id' => 202, 'name' => 'Ubon Ratchathni', 'name_ru' => 'Убон-Ратчатхани',
				'gmt_offset' => 7,
			), array(
				'id' => 7859, 'country_id' => 95, 'name' => 'Ubrub', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7860, 'country_id' => 99, 'name' => 'Udaipur', 'name_ru' => 'Удайпур', 'gmt_offset' => -5.5,
			), array(
				'id' => 7861, 'country_id' => 157, 'name' => 'Uden', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 7862, 'country_id' => 103, 'name' => 'Udine', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 7863, 'country_id' => 119, 'name' => 'Udomxay', 'name_ru' => 'Удомхей', 'gmt_offset' => -7,
			), array(
				'id' => 7864, 'country_id' => 202, 'name' => 'Udon Thani', 'name_ru' => 'Удон Тхани', 'gmt_offset' => 7,
			), array(
				'id' => 7865, 'country_id' => 180, 'name' => 'Ufa', 'name_ru' => 'Уфа', 'gmt_offset' => 6,
			), array(
				'id' => 7866, 'country_id' => 216, 'name' => 'Uganik', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 7867, 'country_id' => 216, 'name' => 'Ugashik', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 7868, 'country_id' => 52, 'name' => 'Uherske Hradiste', 'name_ru' => 'Угерске-Градиште',
				'gmt_offset' => 1,
			), array(
				'id' => 7869, 'country_id' => 9, 'name' => 'Uige', 'name_ru' => 'Уиже', 'gmt_offset' => -1,
			), array(
				'id'         => 7870, 'country_id' => 134, 'name' => 'Ujae Island', 'name_ru' => 'Удже-Айленд',
				'gmt_offset' => 12,
			), array(
				'id' => 7871, 'country_id' => 95, 'name' => 'Ujung Pandang', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 7872, 'country_id' => 180, 'name' => 'Ukhta', 'name_ru' => 'Ухта', 'gmt_offset' => 4,
			), array(
				'id' => 7873, 'country_id' => 216, 'name' => 'Ukiah', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 7874, 'country_id' => 108, 'name' => 'Ukunda', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 7875, 'country_id' => 138, 'name' => 'Ulaanbaatar', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 7876, 'country_id' => 138, 'name' => 'Ulaangom', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 7877, 'country_id' => 180, 'name' => 'Ulan-ude', 'name_ru' => 'Улан-Удэ', 'gmt_offset' => 9,
			), array(
				'id' => 7878, 'country_id' => 45, 'name' => 'Ulanhot', 'name_ru' => 'Уланьхот', 'gmt_offset' => -8,
			), array(
				'id' => 7879, 'country_id' => 224, 'name' => 'Ulei', 'name_ru' => 'Улей', 'gmt_offset' => -11,
			), array(
				'id' => 7880, 'country_id' => 138, 'name' => 'Ulgit', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 7881, 'country_id' => 138, 'name' => 'Uliastai', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 7882, 'country_id' => 69, 'name' => 'Ulithi', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 7883, 'country_id' => 115, 'name' => 'Ulsan', 'name_ru' => 'Ульсан', 'gmt_offset' => 9,
			), array(
				'id' => 7884, 'country_id' => 228, 'name' => 'Ulundi', 'name_ru' => 'Улунди', 'gmt_offset' => -2,
			), array(
				'id' => 7885, 'country_id' => 228, 'name' => 'Ulusaba', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 7886, 'country_id' => 180, 'name' => 'Ulyanovsk', 'name_ru' => 'Ульяновск', 'gmt_offset' => 4,
			), array(
				'id' => 7887, 'country_id' => 167, 'name' => 'Umba', 'name_ru' => 'Умба', 'gmt_offset' => -10,
			), array(
				'id' => 7888, 'country_id' => 186, 'name' => 'Umea', 'name_ru' => 'Умео', 'gmt_offset' => 1,
			), array(
				'id' => 7889, 'country_id' => 216, 'name' => 'Umiat', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 7890, 'country_id' => 35, 'name' => 'Umiujaq', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 7891, 'country_id' => 216, 'name' => 'Umnak Island', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 7892, 'country_id' => 138, 'name' => 'Umnugobitour', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 7893, 'country_id' => 228, 'name' => 'Umtata', 'name_ru' => 'Умтата', 'gmt_offset' => -2,
			), array(
				'id' => 7894, 'country_id' => 29, 'name' => 'Umuarama', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 7895, 'country_id' => 29, 'name' => 'Una', 'name_ru' => NULL, 'gmt_offset' => -3,
			), array(
				'id' => 7896, 'country_id' => 216, 'name' => 'Unalakleet', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 7897, 'country_id' => 182, 'name' => 'Unayzah', 'name_ru' => 'Унайза', 'gmt_offset' => 3,
			), array(
				'id' => 7898, 'country_id' => 14, 'name' => 'Undarra', 'name_ru' => 'Ундарра', 'gmt_offset' => 0,
			), array(
				'id' => 7899, 'country_id' => 138, 'name' => 'Underkhaan', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 7900, 'country_id' => 46, 'name' => 'Unguia', 'name_ru' => 'Унгиа', 'gmt_offset' => 5,
			), array(
				'id' => 7901, 'country_id' => 216, 'name' => 'Union City', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id'         => 7902, 'country_id' => 219, 'name' => 'Union Island', 'name_ru' => 'Юнион-Айленд',
				'gmt_offset' => 4,
			), array(
				'id' => 7903, 'country_id' => 73, 'name' => 'Unst Shetland Is', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7904, 'country_id' => 47, 'name' => 'Upala', 'name_ru' => 'Упала', 'gmt_offset' => 6,
			), array(
				'id' => 7905, 'country_id' => 73, 'name' => 'Upavon', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7906, 'country_id' => 80, 'name' => 'Upernavik', 'name_ru' => 'Упернавик', 'gmt_offset' => 3,
			), array(
				'id' => 7907, 'country_id' => 167, 'name' => 'Upiara', 'name_ru' => 'Упиара', 'gmt_offset' => -10,
			), array(
				'id' => 7908, 'country_id' => 228, 'name' => 'Upington', 'name_ru' => 'Упингтон', 'gmt_offset' => -2,
			), array(
				'id' => 7909, 'country_id' => 228, 'name' => 'Upland', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7910, 'country_id' => 216, 'name' => 'Upland, CA', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 7911, 'country_id' => 216, 'name' => 'Upolu Point', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 7912, 'country_id' => 73, 'name' => 'Upper Heyford', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7913, 'country_id' => 180, 'name' => 'Uraj', 'name_ru' => 'Урай', 'gmt_offset' => 6,
			), array(
				'id' => 7914, 'country_id' => 118, 'name' => 'Uralsk', 'name_ru' => 'Уральск', 'gmt_offset' => 5,
			), array(
				'id' => 7915, 'country_id' => 35, 'name' => 'Uranium City', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 7916, 'country_id' => 218, 'name' => 'Urgench', 'name_ru' => 'Ургенч', 'gmt_offset' => 5,
			), array(
				'id' => 7917, 'country_id' => 3, 'name' => 'Urgoon', 'name_ru' => 'Ургун', 'gmt_offset' => 0,
			), array(
				'id' => 7918, 'country_id' => 46, 'name' => 'Uribe', 'name_ru' => 'Урибе', 'gmt_offset' => 5,
			), array(
				'id' => 7919, 'country_id' => 220, 'name' => 'Uriman', 'name_ru' => 'Уриман', 'gmt_offset' => 4,
			), array(
				'id' => 7920, 'country_id' => 101, 'name' => 'Urmieh', 'name_ru' => 'Урмиех', 'gmt_offset' => -3.5,
			), array(
				'id' => 7921, 'country_id' => 167, 'name' => 'Uroubi', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7922, 'country_id' => 46, 'name' => 'Urrao', 'name_ru' => 'Уррао', 'gmt_offset' => 5,
			), array(
				'id' => 7923, 'country_id' => 148, 'name' => 'Uruapan', 'name_ru' => 'Уруапан', 'gmt_offset' => 6,
			), array(
				'id' => 7924, 'country_id' => 29, 'name' => 'Urubupunga', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 7925, 'country_id' => 29, 'name' => 'Uruguaiana', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 7926, 'country_id' => 45, 'name' => 'Urumqi', 'name_ru' => 'Урумги', 'gmt_offset' => -8,
			), array(
				'id' => 7927, 'country_id' => 3, 'name' => 'Uruzgan', 'name_ru' => 'Урузган', 'gmt_offset' => -4.5,
			), array(
				'id' => 7928, 'country_id' => 208, 'name' => 'Usak', 'name_ru' => 'Асак', 'gmt_offset' => 2,
			), array(
				'id' => 7929, 'country_id' => 14, 'name' => 'Useless Loop', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 7930, 'country_id' => 11, 'name' => 'Ushuaia', 'name_ru' => 'Ушуайа', 'gmt_offset' => -3,
			), array(
				'id' => 7931, 'country_id' => 167, 'name' => 'Usino', 'name_ru' => 'Усино', 'gmt_offset' => -10,
			), array(
				'id' => 7932, 'country_id' => 180, 'name' => 'Usinsk', 'name_ru' => 'Усинск', 'gmt_offset' => 4,
			), array(
				'id'         => 7933, 'country_id' => 180, 'name' => 'Ust-Ilimsk', 'name_ru' => 'Усть-Илимск',
				'gmt_offset' => 9,
			), array(
				'id'         => 7934, 'country_id' => 118, 'name' => 'Ust-kamenogorsk', 'name_ru' => 'Усть-Каменогорск',
				'gmt_offset' => 6,
			), array(
				'id' => 7935, 'country_id' => 180, 'name' => 'Ust-Kut', 'name_ru' => 'Усть-Кут', 'gmt_offset' => 9,
			), array(
				'id' => 7936, 'country_id' => 164, 'name' => 'Ustupo', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 7937, 'country_id' => 202, 'name' => 'Utapao', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 7938, 'country_id' => 216, 'name' => 'Utica', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 7939, 'country_id' => 91, 'name' => 'Utila', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 7940, 'country_id' => 134, 'name' => 'Utirik Island', 'name_ru' => NULL, 'gmt_offset' => -12,
			), array(
				'id' => 7941, 'country_id' => 216, 'name' => 'Utopia Creek', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 7942, 'country_id' => 157, 'name' => 'Utrecht', 'name_ru' => 'Утрехт', 'gmt_offset' => -1,
			), array(
				'id' => 7943, 'country_id' => 202, 'name' => 'Uttaradit', 'name_ru' => 'Уттарадит', 'gmt_offset' => -7,
			), array(
				'id' => 7944, 'country_id' => 80, 'name' => 'Uummannaq', 'name_ru' => 'Уумманнак', 'gmt_offset' => 3,
			), array(
				'id' => 7945, 'country_id' => 216, 'name' => 'Uvalde', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 7946, 'country_id' => 167, 'name' => 'Uvol', 'name_ru' => 'Увол', 'gmt_offset' => -10,
			), array(
				'id' => 7947, 'country_id' => 213, 'name' => 'Uzhgorod', 'name_ru' => 'Ужгород', 'gmt_offset' => 3,
			), array(
				'id' => 7948, 'country_id' => 179, 'name' => 'Uzice', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7949, 'country_id' => 66, 'name' => 'Vaasa', 'name_ru' => 'Васа', 'gmt_offset' => -2,
			), array(
				'id' => 7950, 'country_id' => 99, 'name' => 'Vadodara', 'name_ru' => NULL, 'gmt_offset' => -5.5,
			), array(
				'id' => 7951, 'country_id' => 158, 'name' => 'Vadso', 'name_ru' => 'Вадсо', 'gmt_offset' => -1,
			), array(
				'id' => 7952, 'country_id' => 158, 'name' => 'Vaeroy', 'name_ru' => 'Верой', 'gmt_offset' => -1,
			), array(
				'id' => 7953, 'country_id' => 166, 'name' => 'Vahitahi', 'name_ru' => 'Вахитахи', 'gmt_offset' => 10,
			), array(
				'id' => 7954, 'country_id' => 216, 'name' => 'Vail/Eagle', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 7955, 'country_id' => 35, 'name' => 'Valcartier', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 7956, 'country_id' => 11, 'name' => 'Valcheta', 'name_ru' => 'Вальчета', 'gmt_offset' => 3,
			), array(
				'id' => 7957, 'country_id' => 216, 'name' => 'Valdez', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 7958, 'country_id' => 43, 'name' => 'Valdivia', 'name_ru' => 'Вальдивия', 'gmt_offset' => 4,
			), array(
				'id' => 7959, 'country_id' => 216, 'name' => 'Valdosta', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7960, 'country_id' => 29, 'name' => 'Valenca', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 7961, 'country_id' => 71, 'name' => 'Valence', 'name_ru' => 'Валенс', 'gmt_offset' => -1,
			), array(
				'id' => 7962, 'country_id' => 64, 'name' => 'Valencia', 'name_ru' => 'Валенсия', 'gmt_offset' => 0,
			), array(
				'id' => 7963, 'country_id' => 216, 'name' => 'Valentine', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 7964, 'country_id' => 220, 'name' => 'Valera', 'name_ru' => 'Валера', 'gmt_offset' => 4,
			), array(
				'id' => 7965, 'country_id' => 224, 'name' => 'Valesdir', 'name_ru' => 'Вейлсдир', 'gmt_offset' => -11,
			), array(
				'id' => 7966, 'country_id' => 66, 'name' => 'Valkeala', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 7967, 'country_id' => 64, 'name' => 'Valladolid', 'name_ru' => 'Вальядолид', 'gmt_offset' => -1,
			), array(
				'id' => 7968, 'country_id' => 216, 'name' => 'Valle', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 7969, 'country_id' => 220, 'name' => 'Valle De Pascua', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 7970, 'country_id' => 46, 'name' => 'Valledupar', 'name_ru' => 'Валледупар', 'gmt_offset' => 5,
			), array(
				'id' => 7971, 'country_id' => 103, 'name' => 'Vallegrande', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id'         => 7972, 'country_id' => 216, 'name' => 'Vallejo', 'name_ru' => 'Валледжо, шт. Калифорния',
				'gmt_offset' => 8,
			), array(
				'id' => 7973, 'country_id' => 175, 'name' => 'Vallemi', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 7974, 'country_id' => 43, 'name' => 'Vallenar', 'name_ru' => 'Вайенар', 'gmt_offset' => 4,
			), array(
				'id'         => 7975, 'country_id' => 216, 'name' => 'Valparaiso', 'name_ru' => 'Вальпараисо',
				'gmt_offset' => 6,
			), array(
				'id' => 7976, 'country_id' => 216, 'name' => 'Valparaiso, FL', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 7977, 'country_id' => 64, 'name' => 'Valverde', 'name_ru' => 'Валверде', 'gmt_offset' => 0,
			), array(
				'id' => 7978, 'country_id' => 208, 'name' => 'Van', 'name_ru' => 'Ван', 'gmt_offset' => 2,
			), array(
				'id' => 7979, 'country_id' => 216, 'name' => 'Van Horn', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 7980, 'country_id' => 35, 'name' => 'Vancouver', 'name_ru' => 'Ванкувер', 'gmt_offset' => 8,
			), array(
				'id'         => 7981, 'country_id' => 35, 'name' => 'Vancouver, British Columbia', 'name_ru' => NULL,
				'gmt_offset' => -8,
			), array(
				'id' => 7982, 'country_id' => 216, 'name' => 'Vandalia', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 7983, 'country_id' => 133, 'name' => 'Vangaindrano', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 7984, 'country_id' => 158, 'name' => 'Vangrieng', 'name_ru' => 'Вангренг', 'gmt_offset' => 1,
			), array(
				'id' => 7985, 'country_id' => 167, 'name' => 'Vanimo', 'name_ru' => 'Ванимо', 'gmt_offset' => -10,
			), array(
				'id' => 7986, 'country_id' => 71, 'name' => 'Vannes', 'name_ru' => 'Ваннес', 'gmt_offset' => -1,
			), array(
				'id' => 7987, 'country_id' => 14, 'name' => 'Vanrook', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 7988, 'country_id' => 66, 'name' => 'Vantaa', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id'         => 7989, 'country_id' => 67, 'name' => 'Vanuabalavu', 'name_ru' => 'Вануабалаву',
				'gmt_offset' => -12,
			), array(
				'id' => 7990, 'country_id' => 48, 'name' => 'Varadero', 'name_ru' => 'Варадеро', 'gmt_offset' => 5,
			), array(
				'id' => 7991, 'country_id' => 99, 'name' => 'Varanasi', 'name_ru' => 'Варанаси', 'gmt_offset' => -5.5,
			), array(
				'id' => 7992, 'country_id' => 158, 'name' => 'Vardoe', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 7993, 'country_id' => 29, 'name' => 'Varginha', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 7994, 'country_id' => 22, 'name' => 'Varna', 'name_ru' => 'Варна', 'gmt_offset' => 2,
			), array(
				'id' => 7995, 'country_id' => 53, 'name' => 'Varrelbusch', 'name_ru' => 'Варрельбух', 'gmt_offset' => 1,
			), array(
				'id' => 7996, 'country_id' => 186, 'name' => 'Vastervik', 'name_ru' => 'Вастервик', 'gmt_offset' => -1,
			), array(
				'id'         => 7997, 'country_id' => 133, 'name' => 'Vatomandry', 'name_ru' => 'Ватомандри',
				'gmt_offset' => -3,
			), array(
				'id' => 7998, 'country_id' => 67, 'name' => 'Vatukoula', 'name_ru' => 'Ватукула', 'gmt_offset' => -12,
			), array(
				'id' => 7999, 'country_id' => 67, 'name' => 'Vatulele', 'name_ru' => 'Ватулеле', 'gmt_offset' => -12,
			), array(
				'id' => 8000, 'country_id' => 55, 'name' => 'Vejle', 'name_ru' => 'Вежле', 'gmt_offset' => -1,
			),
				array(
					'id'         => 8001, 'country_id' => 180, 'name' => 'Velikij Ustyug', 'name_ru' => 'Великий Устюг',
					'gmt_offset' => 4,
				), 1 => array(
				'id'         => 8002, 'country_id' => 180, 'name' => 'Velikiye Luki', 'name_ru' => 'Великие Луки',
				'gmt_offset' => 4,
			), array(
				'id' => 8003, 'country_id' => 216, 'name' => 'Venetie', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 8004, 'country_id' => 103, 'name' => 'Venice', 'name_ru' => 'Венеция', 'gmt_offset' => 1,
			), array(
				'id' => 8005, 'country_id' => 216, 'name' => 'Venice, FL', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 8006, 'country_id' => 127, 'name' => 'Ventspils', 'name_ru' => 'Вентспилс', 'gmt_offset' => 2,
			), array(
				'id' => 8007, 'country_id' => 216, 'name' => 'Ventura', 'name_ru' => 'Вентура', 'gmt_offset' => 8,
			), array(
				'id' => 8008, 'country_id' => 148, 'name' => 'Veracruz', 'name_ru' => 'Веракруз', 'gmt_offset' => 6,
			), array(
				'id' => 8009, 'country_id' => 35, 'name' => 'Vermilion', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 8010, 'country_id' => 216, 'name' => 'Vernal, UT', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 8011, 'country_id' => 35, 'name' => 'Vernon B. C.', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 8012, 'country_id' => 216, 'name' => 'Vero Beach', 'name_ru' => 'Веро Бич', 'gmt_offset' => 5,
			), array(
				'id' => 8013, 'country_id' => 103, 'name' => 'Verona', 'name_ru' => 'Верона', 'gmt_offset' => 1,
			), array(
				'id' => 8014, 'country_id' => 216, 'name' => 'Versailles', 'name_ru' => 'Версаль', 'gmt_offset' => 6,
			), array(
				'id'         => 8015, 'country_id' => 102, 'name' => 'Vestmannaeyjar', 'name_ru' => 'Вестменнейяр',
				'gmt_offset' => 0,
			), array(
				'id' => 8016, 'country_id' => 103, 'name' => 'Vicenza', 'name_ru' => 'Виченца', 'gmt_offset' => 1,
			), array(
				'id' => 8017, 'country_id' => 217, 'name' => 'Vichadero', 'name_ru' => 'Вичадеро', 'gmt_offset' => -3,
			), array(
				'id' => 8018, 'country_id' => 71, 'name' => 'Vichy', 'name_ru' => 'Вичи', 'gmt_offset' => -1,
			), array(
				'id' => 8019, 'country_id' => 216, 'name' => 'Vicksburg', 'name_ru' => 'Виксбург', 'gmt_offset' => 0,
			), array(
				'id' => 8020, 'country_id' => 216, 'name' => 'Victoria', 'name_ru' => 'Лимбе', 'gmt_offset' => 0,
			), array(
				'id'         => 8021, 'country_id' => 231, 'name' => 'Victoria Falls', 'name_ru' => 'Водопады Виктории',
				'gmt_offset' => 2,
			), array(
				'id' => 8022, 'country_id' => 155, 'name' => 'Victoria Island', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id'         => 8023, 'country_id' => 14, 'name' => 'Victoria River Downs', 'name_ru' => NULL,
				'gmt_offset' => 9.5,
			), array(
				'id' => 8024, 'country_id' => 216, 'name' => 'Victorville, CA', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 8025, 'country_id' => 216, 'name' => 'Vidalia', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 8026, 'country_id' => 29, 'name' => 'Videira', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 8027, 'country_id' => 22, 'name' => 'Vidin', 'name_ru' => 'Видин', 'gmt_offset' => -2,
			), array(
				'id' => 8028, 'country_id' => 11, 'name' => 'Viedma', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 8029, 'country_id' => 119, 'name' => 'Viengxay', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 8030, 'country_id' => 13, 'name' => 'Vienna', 'name_ru' => 'Вена', 'gmt_offset' => 1,
			), array(
				'id' => 8031, 'country_id' => 119, 'name' => 'Vientiane', 'name_ru' => 'Виентиане', 'gmt_offset' => 6,
			), array(
				'id' => 8032, 'country_id' => 172, 'name' => 'Vieques', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 8033, 'country_id' => 103, 'name' => 'Vieste', 'name_ru' => 'Виесте', 'gmt_offset' => 0,
			), array(
				'id' => 8034, 'country_id' => 216, 'name' => 'View Cove', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 8035, 'country_id' => 64, 'name' => 'Vigo', 'name_ru' => 'Виго', 'gmt_offset' => -1,
			), array(
				'id'         => 8036, 'country_id' => 99, 'name' => 'Vijayawada', 'name_ru' => 'Виджаявада',
				'gmt_offset' => -5.5,
			), array(
				'id' => 8037, 'country_id' => 173, 'name' => 'Vila Real', 'name_ru' => 'Вила-Реал', 'gmt_offset' => 0,
			), array(
				'id' => 8038, 'country_id' => 29, 'name' => 'Vila Rica', 'name_ru' => 'Вила-Рика', 'gmt_offset' => 0,
			), array(
				'id'         => 8039, 'country_id' => 150, 'name' => 'Vilanculos', 'name_ru' => 'Виланкулос',
				'gmt_offset' => -2,
			), array(
				'id'         => 8040, 'country_id' => 186, 'name' => 'Vilhelmina', 'name_ru' => 'Вилхелмина',
				'gmt_offset' => -1,
			), array(
				'id' => 8041, 'country_id' => 29, 'name' => 'Vilhena', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id'         => 8042, 'country_id' => 148, 'name' => 'Villa Constitucion',
				'name_ru'    => 'Вилья-Конститусьон', 'gmt_offset' => 7,
			), array(
				'id'         => 8043, 'country_id' => 11, 'name' => 'Villa Dolores', 'name_ru' => 'Вилья-Долорес',
				'gmt_offset' => 3,
			), array(
				'id'         => 8044, 'country_id' => 11, 'name' => 'Villa Gesell', 'name_ru' => 'Вилья-Хесель',
				'gmt_offset' => 3,
			), array(
				'id'         => 8045, 'country_id' => 11, 'name' => 'Villa Mercedes', 'name_ru' => 'Вилья-Мерседес',
				'gmt_offset' => 3,
			), array(
				'id'         => 8046, 'country_id' => 46, 'name' => 'Villagarzon', 'name_ru' => 'Виллагарсон',
				'gmt_offset' => 5,
			), array(
				'id'         => 8047, 'country_id' => 148, 'name' => 'Villahermosa', 'name_ru' => 'Вийяхермоса',
				'gmt_offset' => 6,
			), array(
				'id' => 8048, 'country_id' => 28, 'name' => 'Villamontes', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 8049, 'country_id' => 46, 'name' => 'Villavicencio', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 8050, 'country_id' => 125, 'name' => 'Vilnius', 'name_ru' => 'Вильнюс', 'gmt_offset' => 2,
			), array(
				'id'         => 8051, 'country_id' => 43, 'name' => 'Vina del Mar', 'name_ru' => 'Винья-дель-Мар',
				'gmt_offset' => -3,
			), array(
				'id' => 8052, 'country_id' => 216, 'name' => 'Vincennes', 'name_ru' => 'Винсенн', 'gmt_offset' => 5,
			), array(
				'id' => 8053, 'country_id' => 223, 'name' => 'Vinh City', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 8054, 'country_id' => 223, 'name' => 'Vinh Long', 'name_ru' => 'Винь-Лонь', 'gmt_offset' => -7,
			), array(
				'id' => 8055, 'country_id' => 213, 'name' => 'Vinnica', 'name_ru' => 'Винница', 'gmt_offset' => 3,
			), array(
				'id' => 8056, 'country_id' => 95, 'name' => 'Viqueque', 'name_ru' => 'Викеке', 'gmt_offset' => -8,
			), array(
				'id' => 8057, 'country_id' => 168, 'name' => 'Virac', 'name_ru' => 'Вирак', 'gmt_offset' => -8,
			), array(
				'id' => 8058, 'country_id' => 183, 'name' => 'Viru', 'name_ru' => 'Виру', 'gmt_offset' => 11,
			), array(
				'id' => 8059, 'country_id' => 216, 'name' => 'Visalia', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 8060, 'country_id' => 186, 'name' => 'Visby', 'name_ru' => 'Висби', 'gmt_offset' => -1,
			), array(
				'id' => 8061, 'country_id' => 173, 'name' => 'Viseu', 'name_ru' => 'Визеу', 'gmt_offset' => 0,
			), array(
				'id'         => 8062, 'country_id' => 99, 'name' => 'Vishakhapatnam', 'name_ru' => 'Вишакхапатнам',
				'gmt_offset' => -5.5,
			), array(
				'id' => 8063, 'country_id' => 33, 'name' => 'Vitebsk', 'name_ru' => 'Витебск', 'gmt_offset' => 3,
			), array(
				'id' => 8064, 'country_id' => 29, 'name' => 'Vitoria', 'name_ru' => 'Витория', 'gmt_offset' => 3,
			), array(
				'id'         => 8065, 'country_id' => 29, 'name' => 'Vitoria Da Conquista', 'name_ru' => NULL,
				'gmt_offset' => 3,
			), array(
				'id' => 8066, 'country_id' => 64, 'name' => 'Vitoria.', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 8067, 'country_id' => 71, 'name' => 'Vittel', 'name_ru' => 'Виттель', 'gmt_offset' => -1,
			), array(
				'id' => 8068, 'country_id' => 167, 'name' => 'Vivigani', 'name_ru' => 'Вивигани', 'gmt_offset' => -10,
			), array(
				'id'         => 8069, 'country_id' => 180, 'name' => 'Vladikavkaz', 'name_ru' => 'Владикавказ',
				'gmt_offset' => 4,
			), array(
				'id'         => 8070, 'country_id' => 180, 'name' => 'Vladivostok', 'name_ru' => 'Владивосток',
				'gmt_offset' => 11,
			), array(
				'id' => 8071, 'country_id' => 133, 'name' => 'Vohemar', 'name_ru' => 'Вохемар', 'gmt_offset' => -3,
			), array(
				'id' => 8072, 'country_id' => 123, 'name' => 'Voinjama', 'name_ru' => 'Войнджама', 'gmt_offset' => 0,
			), array(
				'id' => 8073, 'country_id' => 55, 'name' => 'Vojens', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 8074, 'country_id' => 180, 'name' => 'Volgodonsk', 'name_ru' => 'Волгодонск', 'gmt_offset' => 4,
			), array(
				'id' => 8075, 'country_id' => 180, 'name' => 'Volgograd', 'name_ru' => 'Волгоград', 'gmt_offset' => 4,
			), array(
				'id' => 8076, 'country_id' => 180, 'name' => 'Vologda', 'name_ru' => 'Вологда', 'gmt_offset' => 4,
			), array(
				'id' => 8077, 'country_id' => 85, 'name' => 'Volos', 'name_ru' => 'Волос', 'gmt_offset' => -2,
			), array(
				'id'         => 8078, 'country_id' => 102, 'name' => 'Vopnafjordur', 'name_ru' => 'Вопнафьордур',
				'gmt_offset' => 0,
			), array(
				'id' => 8079, 'country_id' => 180, 'name' => 'Vorkuta', 'name_ru' => 'Воркута', 'gmt_offset' => 4,
			), array(
				'id' => 8080, 'country_id' => 180, 'name' => 'Voronezh', 'name_ru' => 'Воронеж', 'gmt_offset' => 4,
			), array(
				'id' => 8081, 'country_id' => 29, 'name' => 'Votuporanga', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 8082, 'country_id' => 228, 'name' => 'Vredendal', 'name_ru' => 'Вредендаль', 'gmt_offset' => -2,
			), array(
				'id' => 8083, 'country_id' => 228, 'name' => 'Vryburg', 'name_ru' => 'Врибург', 'gmt_offset' => -2,
			), array(
				'id' => 8084, 'country_id' => 228, 'name' => 'Vryheid', 'name_ru' => 'Врихейд', 'gmt_offset' => -2,
			), array(
				'id' => 8085, 'country_id' => 103, 'name' => 'Vulcano', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 8086, 'country_id' => 223, 'name' => 'Vung Tau', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 8087, 'country_id' => 186, 'name' => 'Vдxjц', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 8088, 'country_id' => 167, 'name' => 'Wabag', 'name_ru' => 'Вабаг', 'gmt_offset' => 0,
			), array(
				'id' => 8089, 'country_id' => 167, 'name' => 'Wabo', 'name_ru' => 'Вабо', 'gmt_offset' => -10,
			), array(
				'id' => 8090, 'country_id' => 35, 'name' => 'Wabush', 'name_ru' => NULL, 'gmt_offset' => 4,
			), array(
				'id' => 8091, 'country_id' => 65, 'name' => 'Waca', 'name_ru' => 'Вака', 'gmt_offset' => -3,
			), array(
				'id' => 8092, 'country_id' => 216, 'name' => 'Waco', 'name_ru' => 'Вако', 'gmt_offset' => 6,
			), array(
				'id' => 8093, 'country_id' => 9, 'name' => 'Waco Kungo', 'name_ru' => 'Вако-Кунго', 'gmt_offset' => -1,
			), array(
				'id' => 8094, 'country_id' => 216, 'name' => 'Waco, TX', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id'         => 8095, 'country_id' => 185, 'name' => 'Wad Medani', 'name_ru' => 'Вад-Медани',
				'gmt_offset' => -2,
			), array(
				'id' => 8096, 'country_id' => 73, 'name' => 'Waddington', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 8097, 'country_id' => 182, 'name' => 'Wadi Ad Dawasir', 'name_ru' => 'Вади-ад-Давасир',
				'gmt_offset' => -3,
			), array(
				'id' => 8098, 'country_id' => 227, 'name' => 'Wadi Ain', 'name_ru' => 'Вади-Эйн', 'gmt_offset' => -3,
			), array(
				'id' => 8099, 'country_id' => 185, 'name' => 'Wadi Halfa', 'name_ru' => 'Вади-Халфа', 'gmt_offset' => 0,
			), array(
				'id' => 8100, 'country_id' => 167, 'name' => 'Wagau', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 8101, 'country_id' => 194, 'name' => 'Wageningen', 'name_ru' => 'Вагенинген', 'gmt_offset' => 3,
			), array(
				'id' => 8102, 'country_id' => 95, 'name' => 'Wagethe', 'name_ru' => 'Вагете', 'gmt_offset' => -9,
			), array(
				'id'         => 8103, 'country_id' => 14, 'name' => 'Wagga Wagga', 'name_ru' => 'Вагга-Вагга',
				'gmt_offset' => -10,
			), array(
				'id' => 8104, 'country_id' => 72, 'name' => 'Wagny', 'name_ru' => 'Вагни', 'gmt_offset' => -1,
			), array(
				'id' => 8105, 'country_id' => 14, 'name' => 'Wahai', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 8106, 'country_id' => 136, 'name' => 'Wahiawa', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 8107, 'country_id' => 216, 'name' => 'Wahpeton', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 8108, 'country_id' => 216, 'name' => 'Waikoloa', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 8109, 'country_id' => 216, 'name' => 'Waimanalo', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 8110, 'country_id' => 95, 'name' => 'Waingapu', 'name_ru' => 'Ваингапу', 'gmt_offset' => -8,
			), array(
				'id' => 8111, 'country_id' => 216, 'name' => 'Wainwright', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 8112, 'country_id' => 162, 'name' => 'Wairoa', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 8113, 'country_id' => 162, 'name' => 'Waitangi', 'name_ru' => 'Вайтанги', 'gmt_offset' => -12,
			), array(
				'id' => 8114, 'country_id' => 107, 'name' => 'Wajima', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 8115, 'country_id' => 108, 'name' => 'Wajir', 'name_ru' => 'Ваджир', 'gmt_offset' => -3,
			), array(
				'id'         => 8116, 'country_id' => 67, 'name' => 'Wakaya Island', 'name_ru' => 'Вакая-Айленд',
				'gmt_offset' => -12,
			), array(
				'id' => 8117, 'country_id' => 215, 'name' => 'Wake Island', 'name_ru' => NULL, 'gmt_offset' => -12,
			), array(
				'id' => 8118, 'country_id' => 107, 'name' => 'Wakkanai', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 8119, 'country_id' => 167, 'name' => 'Wakunai', 'name_ru' => 'Вакунай', 'gmt_offset' => -10,
			), array(
				'id' => 8120, 'country_id' => 224, 'name' => 'Walaha', 'name_ru' => 'Валаха', 'gmt_offset' => -11,
			), array(
				'id' => 8121, 'country_id' => 14, 'name' => 'Walcha', 'name_ru' => 'Валха', 'gmt_offset' => -10,
			), array(
				'id' => 8122, 'country_id' => 45, 'name' => 'Waldron Island', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 8123, 'country_id' => 216, 'name' => 'Wales', 'name_ru' => 'Уэльс', 'gmt_offset' => 9,
			), array(
				'id' => 8124, 'country_id' => 14, 'name' => 'Walgett', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 8125, 'country_id' => 216, 'name' => 'Walla Walla', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 8126, 'country_id' => 14, 'name' => 'Wallal', 'name_ru' => 'Валлал', 'gmt_offset' => -8,
			), array(
				'id' => 8127, 'country_id' => 225, 'name' => 'Wallis Island', 'name_ru' => NULL, 'gmt_offset' => -12,
			), array(
				'id' => 8128, 'country_id' => 216, 'name' => 'Walnut Ridge', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 8129, 'country_id' => 216, 'name' => 'Walterboro', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 8130, 'country_id' => 216, 'name' => 'Waltham', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 8131, 'country_id' => 151, 'name' => 'Walvis Bay', 'name_ru' => 'Волвис-Бей', 'gmt_offset' => 1,
			), array(
				'id' => 8132, 'country_id' => 95, 'name' => 'Wamena', 'name_ru' => 'Вамена', 'gmt_offset' => -9,
			), array(
				'id' => 8133, 'country_id' => 169, 'name' => 'Wana', 'name_ru' => 'Вана', 'gmt_offset' => -5,
			), array(
				'id' => 8134, 'country_id' => 162, 'name' => 'Wanaka', 'name_ru' => 'Ванака', 'gmt_offset' => -12,
			), array(
				'id' => 8135, 'country_id' => 162, 'name' => 'Wanganui', 'name_ru' => 'Вангануи', 'gmt_offset' => -12,
			), array(
				'id' => 8136, 'country_id' => 14, 'name' => 'Wangaratta', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 8137, 'country_id' => 53, 'name' => 'Wangerooge', 'name_ru' => 'Вангерооге', 'gmt_offset' => -1,
			), array(
				'id' => 8138, 'country_id' => 167, 'name' => 'Wanigela', 'name_ru' => 'Ванигела', 'gmt_offset' => -10,
			), array(
				'id' => 8139, 'country_id' => 167, 'name' => 'Wantoat', 'name_ru' => 'Вантоат', 'gmt_offset' => -10,
			), array(
				'id' => 8140, 'country_id' => 167, 'name' => 'Wanuma', 'name_ru' => 'Ванума', 'gmt_offset' => -10,
			), array(
				'id' => 8141, 'country_id' => 45, 'name' => 'Wanxian', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 8142, 'country_id' => 216, 'name' => 'Wapakoneta', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id'         => 8143, 'country_id' => 167, 'name' => 'Wapenamanda', 'name_ru' => 'Вапенаманда',
				'gmt_offset' => -10,
			), array(
				'id' => 8144, 'country_id' => 167, 'name' => 'Wapolu', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 8145, 'country_id' => 99, 'name' => 'Warangal', 'name_ru' => NULL, 'gmt_offset' => 5.5,
			), array(
				'id' => 8146, 'country_id' => 65, 'name' => 'Warder', 'name_ru' => 'Уордер', 'gmt_offset' => -3,
			), array(
				'id' => 8147, 'country_id' => 216, 'name' => 'Ware', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 8148, 'country_id' => 95, 'name' => 'Waris', 'name_ru' => 'Варис', 'gmt_offset' => -9,
			), array(
				'id' => 8149, 'country_id' => 14, 'name' => 'Warracknabeal', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 8150, 'country_id' => 14, 'name' => 'Warrawagine', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id'         => 8151, 'country_id' => 216, 'name' => 'Warrensburg', 'name_ru' => 'Варренсбург',
				'gmt_offset' => -6,
			), array(
				'id' => 8152, 'country_id' => 155, 'name' => 'Warri', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 8153, 'country_id' => 14, 'name' => 'Warrnambool', 'name_ru' => 'Варранамбул',
				'gmt_offset' => -10,
			), array(
				'id' => 8154, 'country_id' => 216, 'name' => 'Warroad', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 8155, 'country_id' => 170, 'name' => 'Warsaw', 'name_ru' => 'Варшава', 'gmt_offset' => 1,
			), array(
				'id' => 8156, 'country_id' => 14, 'name' => 'Warwick', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 8157, 'country_id' => 194, 'name' => 'Washabo', 'name_ru' => 'Вашабо', 'gmt_offset' => 3,
			), array(
				'id' => 8158, 'country_id' => 35, 'name' => 'Washington', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 8159, 'country_id' => 216, 'name' => 'Washington, DC', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 8160, 'country_id' => 216, 'name' => 'Wasilla', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 8161, 'country_id' => 95, 'name' => 'Wasior', 'name_ru' => 'Васиор', 'gmt_offset' => -9,
			), array(
				'id' => 8162, 'country_id' => 35, 'name' => 'Waskaganish', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 8163, 'country_id' => 156, 'name' => 'Waspam', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 8164, 'country_id' => 167, 'name' => 'Wasu', 'name_ru' => 'Васу', 'gmt_offset' => -10,
			), array(
				'id' => 8165, 'country_id' => 167, 'name' => 'Wasua', 'name_ru' => 'Васуа', 'gmt_offset' => -10,
			), array(
				'id' => 8166, 'country_id' => 167, 'name' => 'Wasum', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 8167, 'country_id' => 216, 'name' => 'Waterfall', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 8168, 'country_id' => 96, 'name' => 'Waterford', 'name_ru' => 'Вотерфорд', 'gmt_offset' => 0,
			), array(
				'id' => 8169, 'country_id' => 228, 'name' => 'Waterkloof', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 8170, 'country_id' => 216, 'name' => 'Waterloo', 'name_ru' => 'Ватерло', 'gmt_offset' => 6,
			), array(
				'id' => 8171, 'country_id' => 216, 'name' => 'Watertown', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 8172, 'country_id' => 216, 'name' => 'Waterville', 'name_ru' => 'Уотервилл', 'gmt_offset' => 5,
			), array(
				'id' => 8173, 'country_id' => 35, 'name' => 'Watson Lake', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 8174, 'country_id' => 216, 'name' => 'Watsonville', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 8175, 'country_id' => 167, 'name' => 'Wau', 'name_ru' => 'Вау', 'gmt_offset' => 0,
			), array(
				'id' => 8176, 'country_id' => 14, 'name' => 'Wauchope', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 8177, 'country_id' => 216, 'name' => 'Waukegan', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 8178, 'country_id' => 216, 'name' => 'Waukesha', 'name_ru' => 'Ваукеша', 'gmt_offset' => 6,
			), array(
				'id' => 8179, 'country_id' => 216, 'name' => 'Waukon', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 8180, 'country_id' => 216, 'name' => 'Wausau', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 8181, 'country_id' => 14, 'name' => 'Wave Hill', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 8182, 'country_id' => 14, 'name' => 'Waverney', 'name_ru' => 'Вейверни', 'gmt_offset' => -10,
			), array(
				'id' => 8183, 'country_id' => 35, 'name' => 'Wawa', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id'         => 8184, 'country_id' => 167, 'name' => 'Wawoi Falls', 'name_ru' => 'Вавой-Фоллз',
				'gmt_offset' => -10,
			), array(
				'id' => 8185, 'country_id' => 216, 'name' => 'Waycross', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 8186, 'country_id' => 216, 'name' => 'Waynesburg', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 8187, 'country_id' => 167, 'name' => 'Weam', 'name_ru' => 'Вим', 'gmt_offset' => -10,
			), array(
				'id' => 8188, 'country_id' => 123, 'name' => 'Weasua', 'name_ru' => 'Висуа', 'gmt_offset' => 0,
			), array(
				'id' => 8189, 'country_id' => 216, 'name' => 'Weatherford', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 8190, 'country_id' => 35, 'name' => 'Webequie', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 8191, 'country_id' => 216, 'name' => 'Webster City', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 8192, 'country_id' => 167, 'name' => 'Wedau', 'name_ru' => 'Ведау', 'gmt_offset' => -10,
			), array(
				'id' => 8193, 'country_id' => 182, 'name' => 'Wedjh', 'name_ru' => 'Ведих', 'gmt_offset' => -3,
			), array(
				'id' => 8194, 'country_id' => 14, 'name' => 'Wee Waa', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 8195, 'country_id' => 216, 'name' => 'Weeping Water', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 8196, 'country_id' => 45, 'name' => 'Weifang', 'name_ru' => 'Вэйфан', 'gmt_offset' => 0,
			), array(
				'id' => 8197, 'country_id' => 45, 'name' => 'Weihai', 'name_ru' => 'Вейхай', 'gmt_offset' => 8,
			), array(
				'id' => 8198, 'country_id' => 14, 'name' => 'Weipa', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 8199, 'country_id' => 228, 'name' => 'Welkom', 'name_ru' => 'Велком', 'gmt_offset' => -2,
			), array(
				'id'         => 8200, 'country_id' => 162, 'name' => 'Wellington', 'name_ru' => 'Уеллингтон',
				'gmt_offset' => 12,
			), array(
				'id' => 8201, 'country_id' => 216, 'name' => 'Wells', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 8202, 'country_id' => 216, 'name' => 'Wellsville', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 8203, 'country_id' => 14, 'name' => 'Welshpool', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 8204, 'country_id' => 35, 'name' => 'Wemindji', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 8205, 'country_id' => 216, 'name' => 'Wenatchee', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 8206, 'country_id' => 216, 'name' => 'Wendover', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 8207, 'country_id' => 45, 'name' => 'Wenzhou', 'name_ru' => 'Венчжоу', 'gmt_offset' => 8,
			), array(
				'id' => 8208, 'country_id' => 216, 'name' => 'West Bend', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 8209, 'country_id' => 30, 'name' => 'West End', 'name_ru' => 'Вест-Энд', 'gmt_offset' => 5,
			), array(
				'id' => 8210, 'country_id' => 216, 'name' => 'West Kavik', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 8211, 'country_id' => 216, 'name' => 'West Kuparuk', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 8212, 'country_id' => 73, 'name' => 'West Malling', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 8213, 'country_id' => 216, 'name' => 'West Memphis', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id'         => 8214, 'country_id' => 216, 'name' => 'West Palm Beach', 'name_ru' => 'Уест Палм Бич',
				'gmt_offset' => -5,
			), array(
				'id' => 8215, 'country_id' => 216, 'name' => 'West Point', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 8216, 'country_id' => 14, 'name' => 'West Wyalong', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id'         => 8217, 'country_id' => 216, 'name' => 'West Yellowstone',
				'name_ru'    => 'Уест Йеллоустоун', 'gmt_offset' => 7,
			), array(
				'id'         => 8218, 'country_id' => 199, 'name' => 'Westchester County', 'name_ru' => NULL,
				'gmt_offset' => -5,
			), array(
				'id' => 8219, 'country_id' => 53, 'name' => 'Westerland', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 8220, 'country_id' => 216, 'name' => 'Westerly', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 8221, 'country_id' => 216, 'name' => 'Westfield', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 8222, 'country_id' => 216, 'name' => 'Westhampton', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 8223, 'country_id' => 162, 'name' => 'Westport', 'name_ru' => 'Вестпорт', 'gmt_offset' => -12,
			), array(
				'id' => 8224, 'country_id' => 73, 'name' => 'Westray', 'name_ru' => 'Вестрей', 'gmt_offset' => 0,
			), array(
				'id' => 8225, 'country_id' => 216, 'name' => 'Westsound', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 8226, 'country_id' => 167, 'name' => 'Wewak', 'name_ru' => 'Вевак', 'gmt_offset' => -10,
			), array(
				'id' => 8227, 'country_id' => 96, 'name' => 'Wexford', 'name_ru' => 'Уэксфорд', 'gmt_offset' => 0,
			), array(
				'id'         => 8228, 'country_id' => 35, 'name' => 'Wha Ti/Lac La Martre', 'name_ru' => NULL,
				'gmt_offset' => 7,
			), array(
				'id' => 8229, 'country_id' => 162, 'name' => 'Whakatane', 'name_ru' => 'Вакатане', 'gmt_offset' => -12,
			), array(
				'id' => 8230, 'country_id' => 35, 'name' => 'Whale Cove', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 8231, 'country_id' => 216, 'name' => 'Whale Pass', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 8232, 'country_id' => 73, 'name' => 'Whalsay', 'name_ru' => 'Волсей', 'gmt_offset' => 0,
			), array(
				'id' => 8233, 'country_id' => 162, 'name' => 'Whangarei', 'name_ru' => 'Вангарей', 'gmt_offset' => -12,
			), array(
				'id' => 8234, 'country_id' => 216, 'name' => 'Wharton', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 8235, 'country_id' => 216, 'name' => 'Wheatland', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 8236, 'country_id' => 216, 'name' => 'Wheeling', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 8237, 'country_id' => 35, 'name' => 'Whistler', 'name_ru' => 'Уистлер', 'gmt_offset' => 8,
			), array(
				'id' => 8238, 'country_id' => 216, 'name' => 'White Mountain', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 8239, 'country_id' => 216, 'name' => 'White Plains', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 8240, 'country_id' => 216, 'name' => 'White River', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 8241, 'country_id' => 216, 'name' => 'White Sands', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 8242, 'country_id' => 216, 'name' => 'White Sulphur Springs', 'name_ru' => NULL,
				'gmt_offset' => 0,
			), array(
				'id' => 8243, 'country_id' => 35, 'name' => 'Whitecourt', 'name_ru' => NULL, 'gmt_offset' => 7,
			), array(
				'id' => 8244, 'country_id' => 216, 'name' => 'Whitefield', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 8245, 'country_id' => 35, 'name' => 'Whitehorse, Yukon', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 8246, 'country_id' => 216, 'name' => 'Whitehouse', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 8247, 'country_id' => 216, 'name' => 'Whitesburg', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 8248, 'country_id' => 162, 'name' => 'Whitianga', 'name_ru' => NULL, 'gmt_offset' => -12,
			), array(
				'id' => 8249, 'country_id' => 14, 'name' => 'Whyalla', 'name_ru' => 'Вайалла', 'gmt_offset' => -9.5,
			), array(
				'id' => 8250, 'country_id' => 35, 'name' => 'Wiarton, ON', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 8251, 'country_id' => 216, 'name' => 'Wichita', 'name_ru' => 'Вичита', 'gmt_offset' => 0,
			), array(
				'id' => 8252, 'country_id' => 216, 'name' => 'Wichita Falls', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 8253, 'country_id' => 73, 'name' => 'Wick', 'name_ru' => 'Вик', 'gmt_offset' => 0,
			), array(
				'id' => 8254, 'country_id' => 53, 'name' => 'Wiesbaden', 'name_ru' => 'Висбаден', 'gmt_offset' => 1,
			), array(
				'id' => 8255, 'country_id' => 14, 'name' => 'Wilcannia', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 8256, 'country_id' => 53, 'name' => 'Wildenrath', 'name_ru' => 'Вильденрат', 'gmt_offset' => -1,
			), array(
				'id' => 8257, 'country_id' => 14, 'name' => 'Wildman Lake', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 8258, 'country_id' => 216, 'name' => 'Wildwood', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 8259, 'country_id' => 53, 'name' => 'Wilhelmshaven', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 8260, 'country_id' => 216, 'name' => 'Wilkes-Barre, PA', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id'         => 8261, 'country_id' => 216, 'name' => 'Wilkes-Barre/Scranton, PA', 'name_ru' => NULL,
				'gmt_offset' => 5,
			), array(
				'id' => 8262, 'country_id' => 216, 'name' => 'Wilkesboro', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 8263, 'country_id' => 35, 'name' => 'Williams Harbour', 'name_ru' => NULL, 'gmt_offset' => 3.5,
			), array(
				'id' => 8264, 'country_id' => 35, 'name' => 'Williams Lake', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 8265, 'country_id' => 216, 'name' => 'Williamsport', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 8266, 'country_id' => 216, 'name' => 'Williston', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 8267, 'country_id' => 216, 'name' => 'Willmar', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 8268, 'country_id' => 216, 'name' => 'Willoughby', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 8269, 'country_id' => 216, 'name' => 'Willow', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 8270, 'country_id' => 216, 'name' => 'Willow Grove', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 8271, 'country_id' => 216, 'name' => 'Willows', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 8272, 'country_id' => 216, 'name' => 'Wilmington', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 8273, 'country_id' => 14, 'name' => 'Wiluna', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 8274, 'country_id' => 216, 'name' => 'Winchester', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 8275, 'country_id' => 14, 'name' => 'Windarra', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 8276, 'country_id' => 216, 'name' => 'Winder', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 8277, 'country_id' => 151, 'name' => 'Windhoek', 'name_ru' => 'Виндхек', 'gmt_offset' => 2,
			), array(
				'id' => 8278, 'country_id' => 216, 'name' => 'Windom, MN', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 8279, 'country_id' => 14, 'name' => 'Windorah', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 8280, 'country_id' => 35, 'name' => 'Windsor', 'name_ru' => 'Виндзор', 'gmt_offset' => -5,
			), array(
				'id' => 8281, 'country_id' => 216, 'name' => 'Windsor Locks', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 8282, 'country_id' => 216, 'name' => 'Winfield', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 8283, 'country_id' => 35, 'name' => 'Winisk', 'name_ru' => NULL, 'gmt_offset' => 5,
			), array(
				'id' => 8284, 'country_id' => 216, 'name' => 'Wink', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 8285, 'country_id' => 216, 'name' => 'Winnemucca', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 8286, 'country_id' => 35, 'name' => 'Winnipeg', 'name_ru' => 'Виннипег', 'gmt_offset' => -6,
			), array(
				'id' => 8287, 'country_id' => 216, 'name' => 'Winona', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 8288, 'country_id' => 216, 'name' => 'Winslow, AZ', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 8289, 'country_id' => 216, 'name' => 'Winston Salem', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 8290, 'country_id' => 216, 'name' => 'Winter Haven', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 8291, 'country_id' => 25, 'name' => 'Winter Park', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 8292, 'country_id' => 14, 'name' => 'Winton', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 8293, 'country_id' => 167, 'name' => 'Wipim', 'name_ru' => 'Випим', 'gmt_offset' => -10,
			), array(
				'id' => 8294, 'country_id' => 122, 'name' => 'Wirawila', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 8295, 'country_id' => 216, 'name' => 'Wiscasset', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 8296, 'country_id' => 216, 'name' => 'Wisconsin Rapids', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 8297, 'country_id' => 216, 'name' => 'Wise', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 8298, 'country_id' => 216, 'name' => 'Wiseman', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 8299, 'country_id' => 14, 'name' => 'Wittenoom', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 8300, 'country_id' => 167, 'name' => 'Witu', 'name_ru' => 'Виту', 'gmt_offset' => -10,
			), array(
				'id' => 8301, 'country_id' => 216, 'name' => 'Woburn', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 8302, 'country_id' => 157, 'name' => 'Woensdrecht', 'name_ru' => 'Вонсдрехт', 'gmt_offset' => 1,
			), array(
				'id' => 8303, 'country_id' => 167, 'name' => 'Woitape', 'name_ru' => 'Войтапе', 'gmt_offset' => -10,
			), array(
				'id' => 8304, 'country_id' => 134, 'name' => 'Woja', 'name_ru' => 'Воджа', 'gmt_offset' => -12,
			), array(
				'id' => 8305, 'country_id' => 216, 'name' => 'Wolf Point', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 8306, 'country_id' => 35, 'name' => 'Wollaston Lake', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id'         => 8307, 'country_id' => 14, 'name' => 'Wollogorang', 'name_ru' => 'Воллогорэнг',
				'gmt_offset' => -9.5,
			), array(
				'id' => 8308, 'country_id' => 14, 'name' => 'Wollongong', 'name_ru' => 'Воллонгонг', 'gmt_offset' => 11,
			), array(
				'id' => 8309, 'country_id' => 123, 'name' => 'Wologissi', 'name_ru' => 'Вологисси', 'gmt_offset' => 0,
			), array(
				'id' => 8310, 'country_id' => 211, 'name' => 'Wonan', 'name_ru' => 'Вонань', 'gmt_offset' => -8,
			), array(
				'id' => 8311, 'country_id' => 14, 'name' => 'Wondai', 'name_ru' => 'Вондай', 'gmt_offset' => 10,
			), array(
				'id' => 8312, 'country_id' => 14, 'name' => 'Wondoola', 'name_ru' => 'Вондула', 'gmt_offset' => -10,
			), array(
				'id' => 8313, 'country_id' => 167, 'name' => 'Wonenara', 'name_ru' => 'Воненара', 'gmt_offset' => -10,
			), array(
				'id' => 8314, 'country_id' => 115, 'name' => 'WonJu', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 8315, 'country_id' => 220, 'name' => 'Wonken', 'name_ru' => 'Вонкен', 'gmt_offset' => 4,
			), array(
				'id' => 8316, 'country_id' => 216, 'name' => 'Wood River', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 8317, 'country_id' => 73, 'name' => 'Woodbridge', 'name_ru' => 'Вудбридж', 'gmt_offset' => 0,
			), array(
				'id' => 8318, 'country_id' => 216, 'name' => 'Woodchopper', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 8319, 'country_id' => 73, 'name' => 'Woodford', 'name_ru' => 'Вудфорд', 'gmt_offset' => 0,
			), array(
				'id' => 8320, 'country_id' => 14, 'name' => 'Woodgreen', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 8321, 'country_id' => 14, 'name' => 'Woodie Woodie', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 8322, 'country_id' => 216, 'name' => 'Woodward', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 8323, 'country_id' => 14, 'name' => 'Woomera', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 8324, 'country_id' => 216, 'name' => 'Wooster', 'name_ru' => 'Вустер', 'gmt_offset' => -5,
			), array(
				'id' => 8325, 'country_id' => 72, 'name' => 'Wora Na Ye', 'name_ru' => 'Вора-На-Йе', 'gmt_offset' => -1,
			), array(
				'id' => 8326, 'country_id' => 216, 'name' => 'Worcester', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 8327, 'country_id' => 216, 'name' => 'Worland, WY', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 8328, 'country_id' => 216, 'name' => 'Worthington', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 8329, 'country_id' => 134, 'name' => 'Wotho Island', 'name_ru' => NULL, 'gmt_offset' => -12,
			), array(
				'id' => 8330, 'country_id' => 134, 'name' => 'Wotje Island', 'name_ru' => NULL, 'gmt_offset' => 12,
			), array(
				'id' => 8331, 'country_id' => 216, 'name' => 'Wrangell', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 8332, 'country_id' => 216, 'name' => 'Wrench Creek', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 8333, 'country_id' => 216, 'name' => 'Wrightstown, New Jersey', 'name_ru' => NULL,
				'gmt_offset' => -5,
			), array(
				'id' => 8334, 'country_id' => 35, 'name' => 'Wrigley', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 8335, 'country_id' => 170, 'name' => 'Wroclaw', 'name_ru' => 'Вроцлав', 'gmt_offset' => 1,
			), array(
				'id' => 8336, 'country_id' => 14, 'name' => 'Wrotham Park', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 8337, 'country_id' => 45, 'name' => 'Wu Hai', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 8338, 'country_id' => 14, 'name' => 'Wudinna', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 8339, 'country_id' => 45, 'name' => 'Wuhan', 'name_ru' => 'Вухан', 'gmt_offset' => 8,
			), array(
				'id' => 8340, 'country_id' => 37, 'name' => 'Wuhu', 'name_ru' => 'Вуху', 'gmt_offset' => 0,
			), array(
				'id' => 8341, 'country_id' => 35, 'name' => 'Wunnummin Lake', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 8342, 'country_id' => 167, 'name' => 'Wuvulu Is', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 8343, 'country_id' => 45, 'name' => 'Wuxi', 'name_ru' => 'Вуси', 'gmt_offset' => 8,
			), array(
				'id' => 8344, 'country_id' => 45, 'name' => 'Wuyishan', 'name_ru' => 'Вуйшань', 'gmt_offset' => 0,
			), array(
				'id' => 8345, 'country_id' => 45, 'name' => 'Wuzhou', 'name_ru' => 'Вучжоу', 'gmt_offset' => -8,
			), array(
				'id' => 8346, 'country_id' => 53, 'name' => 'Wyk Auf Foehr', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id' => 8347, 'country_id' => 14, 'name' => 'Wyndham', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 8348, 'country_id' => 150, 'name' => 'Xai Xai', 'name_ru' => NULL, 'gmt_offset' => -2,
			), array(
				'id' => 8349, 'country_id' => 9, 'name' => 'Xangongo', 'name_ru' => 'Шангонго', 'gmt_offset' => -1,
			), array(
				'id' => 8350, 'country_id' => 29, 'name' => 'Xanxere', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 8351, 'country_id' => 119, 'name' => 'Xayabury', 'name_ru' => 'Ксейабери', 'gmt_offset' => -7,
			), array(
				'id' => 8352, 'country_id' => 45, 'name' => 'Xi An', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 8353, 'country_id' => 45, 'name' => 'Xiamen', 'name_ru' => 'Сямэнь', 'gmt_offset' => 8,
			), array(
				'id' => 8354, 'country_id' => 45, 'name' => 'Xiangfan', 'name_ru' => 'Сянфань', 'gmt_offset' => -8,
			), array(
				'id' => 8355, 'country_id' => 45, 'name' => 'Xichang', 'name_ru' => 'Хайчэн', 'gmt_offset' => -8,
			), array(
				'id'         => 8356, 'country_id' => 119, 'name' => 'Xieng Khouang', 'name_ru' => 'Ксьенг-Кхуанг',
				'gmt_offset' => -7,
			), array(
				'id' => 8357, 'country_id' => 119, 'name' => 'Xienglom', 'name_ru' => 'Ксьенглом', 'gmt_offset' => -7,
			), array(
				'id' => 8358, 'country_id' => 45, 'name' => 'Xilinhot', 'name_ru' => 'Хайлиньхот', 'gmt_offset' => -8,
			), array(
				'id' => 8359, 'country_id' => 45, 'name' => 'Xin Hui', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 8360, 'country_id' => 45, 'name' => 'Xingcheng', 'name_ru' => 'Хайньчен', 'gmt_offset' => -8,
			), array(
				'id' => 8361, 'country_id' => 45, 'name' => 'Xingning', 'name_ru' => 'Хайньнин', 'gmt_offset' => -8,
			), array(
				'id' => 8362, 'country_id' => 45, 'name' => 'Xingtai', 'name_ru' => 'Хайнтай', 'gmt_offset' => 0,
			), array(
				'id' => 8363, 'country_id' => 65, 'name' => 'Xinguara', 'name_ru' => 'Шингуэра', 'gmt_offset' => 0,
			), array(
				'id' => 8364, 'country_id' => 45, 'name' => 'Xingyi', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 8365, 'country_id' => 45, 'name' => 'Xining', 'name_ru' => 'Хайнин', 'gmt_offset' => 8,
			), array(
				'id' => 8366, 'country_id' => 45, 'name' => 'Xuzhou', 'name_ru' => 'Хучжоу', 'gmt_offset' => 8,
			), array(
				'id' => 8367, 'country_id' => 28, 'name' => 'Yacuiba', 'name_ru' => 'Якуйба', 'gmt_offset' => -4,
			), array(
				'id' => 8368, 'country_id' => 44, 'name' => 'Yagoua', 'name_ru' => 'Ягуа', 'gmt_offset' => -1,
			), array(
				'id' => 8369, 'country_id' => 46, 'name' => 'Yaguara', 'name_ru' => 'Ягуара', 'gmt_offset' => -5,
			), array(
				'id' => 8370, 'country_id' => 216, 'name' => 'Yakataga', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 8371, 'country_id' => 216, 'name' => 'Yakima', 'name_ru' => 'Якима', 'gmt_offset' => -8,
			), array(
				'id' => 8372, 'country_id' => 107, 'name' => 'Yakushima', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 8373, 'country_id' => 216, 'name' => 'Yakutat', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 8374, 'country_id' => 180, 'name' => 'Yakutsk', 'name_ru' => 'Якутск', 'gmt_offset' => 10,
			), array(
				'id' => 8375, 'country_id' => 14, 'name' => 'Yalata Mission', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id' => 8376, 'country_id' => 14, 'name' => 'Yalgoo', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 8377, 'country_id' => 38, 'name' => 'Yalinga', 'name_ru' => 'Ялинга', 'gmt_offset' => 1,
			), array(
				'id' => 8378, 'country_id' => 167, 'name' => 'Yalumet', 'name_ru' => 'Ялумет', 'gmt_offset' => -10,
			), array(
				'id' => 8379, 'country_id' => 14, 'name' => 'Yam Island', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 8380, 'country_id' => 107, 'name' => 'Yamagata', 'name_ru' => 'Ямагата', 'gmt_offset' => 9,
			), array(
				'id' => 8381, 'country_id' => 41, 'name' => 'Yamoussoukro', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 8382, 'country_id' => 182, 'name' => 'Yanbu', 'name_ru' => 'Янбу', 'gmt_offset' => 3,
			), array(
				'id' => 8383, 'country_id' => 45, 'name' => 'Yancheng', 'name_ru' => 'Яньчэн', 'gmt_offset' => 0,
			), array(
				'id' => 8384, 'country_id' => 14, 'name' => 'Yandicoogina', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 8385, 'country_id' => 183, 'name' => 'Yandina', 'name_ru' => NULL, 'gmt_offset' => -11,
			), array(
				'id' => 8386, 'country_id' => 37, 'name' => 'Yangambi', 'name_ru' => 'Янгамби', 'gmt_offset' => 0,
			), array(
				'id' => 8387, 'country_id' => 137, 'name' => 'Yangon', 'name_ru' => 'Яньгунь', 'gmt_offset' => 6.5,
			), array(
				'id' => 8388, 'country_id' => 14, 'name' => 'Yangoonabie', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 8389, 'country_id' => 115, 'name' => 'Yangyang', 'name_ru' => 'Янян', 'gmt_offset' => 9,
			), array(
				'id' => 8390, 'country_id' => 45, 'name' => 'Yanji', 'name_ru' => 'Яньцзи', 'gmt_offset' => 8,
			), array(
				'id' => 8391, 'country_id' => 216, 'name' => 'Yankton', 'name_ru' => NULL, 'gmt_offset' => -6,
			), array(
				'id' => 8392, 'country_id' => 45, 'name' => 'Yantai', 'name_ru' => 'Янтай', 'gmt_offset' => 8,
			), array(
				'id' => 8393, 'country_id' => 44, 'name' => 'Yaounde', 'name_ru' => 'Яунде', 'gmt_offset' => 1,
			), array(
				'id' => 8394, 'country_id' => 44, 'name' => 'Yaoundй', 'name_ru' => NULL, 'gmt_offset' => 1,
			), array(
				'id'         => 8395, 'country_id' => 69, 'name' => 'Yap, Caroline Islands', 'name_ru' => NULL,
				'gmt_offset' => 11,
			), array(
				'id' => 8396, 'country_id' => 167, 'name' => 'Yapsiei', 'name_ru' => 'Япсией', 'gmt_offset' => -10,
			), array(
				'id' => 8397, 'country_id' => 46, 'name' => 'Yari', 'name_ru' => 'Яри', 'gmt_offset' => 5,
			), array(
				'id' => 8398, 'country_id' => 35, 'name' => 'Yarmouth', 'name_ru' => NULL, 'gmt_offset' => -4,
			), array(
				'id' => 8399, 'country_id' => 180, 'name' => 'Yaroslavl', 'name_ru' => 'Ярославль', 'gmt_offset' => 4,
			), array(
				'id' => 8400, 'country_id' => 67, 'name' => 'Yasawa Island', 'name_ru' => NULL, 'gmt_offset' => -12,
			), array(
				'id' => 8401, 'country_id' => 101, 'name' => 'Yasouj', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 8402, 'country_id' => 167, 'name' => 'Yasuru', 'name_ru' => 'Ясуру', 'gmt_offset' => -10,
			), array(
				'id' => 8403, 'country_id' => 73, 'name' => 'Yateley', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 8404, 'country_id' => 46, 'name' => 'Yavarate', 'name_ru' => 'Яварате', 'gmt_offset' => -5,
			), array(
				'id' => 8405, 'country_id' => 164, 'name' => 'Yaviza', 'name_ru' => 'Явиза', 'gmt_offset' => 5,
			), array(
				'id' => 8406, 'country_id' => 101, 'name' => 'Yazd', 'name_ru' => 'Язд', 'gmt_offset' => 3.5,
			), array(
				'id' => 8407, 'country_id' => 137, 'name' => 'Ye', 'name_ru' => 'Йе', 'gmt_offset' => -6.5,
			), array(
				'id' => 8408, 'country_id' => 115, 'name' => 'Yecheon', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 8409, 'country_id' => 14, 'name' => 'Yeelirrie', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 8410, 'country_id' => 167, 'name' => 'Yegepa', 'name_ru' => 'Егепа', 'gmt_offset' => -10,
			), array(
				'id' => 8411, 'country_id' => 136, 'name' => 'Yelimane', 'name_ru' => 'Йелиман', 'gmt_offset' => 0,
			), array(
				'id' => 8412, 'country_id' => 167, 'name' => 'Yellow River', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 8413, 'country_id' => 35, 'name' => 'Yellowknife', 'name_ru' => NULL, 'gmt_offset' => -7,
			), array(
				'id' => 8414, 'country_id' => 191, 'name' => 'Yengema', 'name_ru' => 'Енгема', 'gmt_offset' => 0,
			), array(
				'id' => 8415, 'country_id' => 167, 'name' => 'Yenkis', 'name_ru' => 'Енкис', 'gmt_offset' => -10,
			), array(
				'id' => 8416, 'country_id' => 115, 'name' => 'Yeosu', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 8417, 'country_id' => 73, 'name' => 'Yeovilton', 'name_ru' => 'Йовилтон', 'gmt_offset' => 0,
			), array(
				'id' => 8418, 'country_id' => 7, 'name' => 'Yerevan', 'name_ru' => 'Ереван', 'gmt_offset' => 4,
			), array(
				'id' => 8419, 'country_id' => 216, 'name' => 'Yerington', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 8420, 'country_id' => 216, 'name' => 'Yes Bay', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 8421, 'country_id' => 167, 'name' => 'Yeva', 'name_ru' => 'Ева', 'gmt_offset' => -10,
			), array(
				'id' => 8422, 'country_id' => 45, 'name' => 'Yibin', 'name_ru' => 'Ибин', 'gmt_offset' => -8,
			), array(
				'id' => 8423, 'country_id' => 45, 'name' => 'Yichang', 'name_ru' => 'Фучэн', 'gmt_offset' => -8,
			), array(
				'id' => 8424, 'country_id' => 45, 'name' => 'Yilan', 'name_ru' => 'Фулан', 'gmt_offset' => -8,
			), array(
				'id' => 8425, 'country_id' => 45, 'name' => 'Yinchuan', 'name_ru' => 'Фучуан', 'gmt_offset' => 8,
			), array(
				'id' => 8426, 'country_id' => 45, 'name' => 'Yining', 'name_ru' => 'Иньин', 'gmt_offset' => 8,
			), array(
				'id' => 8427, 'country_id' => 45, 'name' => 'Yiwu', 'name_ru' => 'Иву', 'gmt_offset' => -8,
			), array(
				'id' => 8428, 'country_id' => 66, 'name' => 'Ylivieska', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 8429, 'country_id' => 95, 'name' => 'Yogyakarta', 'name_ru' => 'Джогиякарта', 'gmt_offset' => 7,
			), array(
				'id' => 8430, 'country_id' => 107, 'name' => 'Yokohama', 'name_ru' => 'Йокогама', 'gmt_offset' => 9,
			), array(
				'id' => 8431, 'country_id' => 155, 'name' => 'Yola', 'name_ru' => 'Йола', 'gmt_offset' => 1,
			), array(
				'id' => 8432, 'country_id' => 107, 'name' => 'Yonago', 'name_ru' => 'Йонаго', 'gmt_offset' => 9,
			), array(
				'id'         => 8433, 'country_id' => 107, 'name' => 'Yonaguni Jima', 'name_ru' => 'Йонагуни-Жима',
				'gmt_offset' => 9,
			), array(
				'id' => 8434, 'country_id' => 167, 'name' => 'Yongai', 'name_ru' => 'Йонгай', 'gmt_offset' => -10,
			), array(
				'id' => 8435, 'country_id' => 216, 'name' => 'York', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 8436, 'country_id' => 35, 'name' => 'York Landing', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 8437, 'country_id' => 14, 'name' => 'Yorke Island', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 8438, 'country_id' => 14, 'name' => 'Yorketown', 'name_ru' => NULL, 'gmt_offset' => 10,
			), array(
				'id' => 8439, 'country_id' => 35, 'name' => 'Yorkton', 'name_ru' => 'Йорктон', 'gmt_offset' => -6,
			), array(
				'id' => 8440, 'country_id' => 91, 'name' => 'Yoro', 'name_ru' => 'Йоро', 'gmt_offset' => -6,
			), array(
				'id' => 8441, 'country_id' => 107, 'name' => 'Yoronjima', 'name_ru' => NULL, 'gmt_offset' => 9,
			), array(
				'id' => 8442, 'country_id' => 216, 'name' => 'Yosemite Ntl Park', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 8443, 'country_id' => 97, 'name' => 'Yotvata', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 8444, 'country_id' => 14, 'name' => 'Young', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 8445, 'country_id' => 216, 'name' => 'Youngstown', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 8446, 'country_id' => 216, 'name' => 'Yreka', 'name_ru' => 'Ирека', 'gmt_offset' => -8,
			), array(
				'id' => 8447, 'country_id' => 45, 'name' => 'Yuanmou', 'name_ru' => NULL, 'gmt_offset' => -8,
			), array(
				'id' => 8448, 'country_id' => 216, 'name' => 'Yucca Flat', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 8449, 'country_id' => 14, 'name' => 'Yuendumu', 'name_ru' => NULL, 'gmt_offset' => -9.5,
			), array(
				'id'         => 8450, 'country_id' => 167, 'name' => 'Yule Island', 'name_ru' => 'Юл-Айленд',
				'gmt_offset' => -10,
			), array(
				'id' => 8451, 'country_id' => 45, 'name' => 'Yulin', 'name_ru' => 'Фулин', 'gmt_offset' => -8,
			), array(
				'id' => 8452, 'country_id' => 95, 'name' => 'Yuma', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 8453, 'country_id' => 35, 'name' => 'Yun Cheng', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 8454, 'country_id' => 165, 'name' => 'Yurimaguas', 'name_ru' => 'Юримагуас', 'gmt_offset' => -5,
			), array(
				'id' => 8455, 'country_id' => 95, 'name' => 'Yuruf', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id'         => 8456, 'country_id' => 180, 'name' => 'Yuzhno-Sakhalinsk', 'name_ru' => 'Южно-Сахалинск',
				'gmt_offset' => 11,
			), array(
				'id' => 8457, 'country_id' => 132, 'name' => 'Zabljak', 'name_ru' => 'Завлака', 'gmt_offset' => 0,
			), array(
				'id' => 8458, 'country_id' => 101, 'name' => 'Zabol', 'name_ru' => 'Забол', 'gmt_offset' => 3.5,
			), array(
				'id' => 8459, 'country_id' => 21, 'name' => 'Zabre', 'name_ru' => 'Забре', 'gmt_offset' => 0,
			), array(
				'id' => 8460, 'country_id' => 52, 'name' => 'Zabreh', 'name_ru' => 'Забржег', 'gmt_offset' => 1,
			), array(
				'id' => 8461, 'country_id' => 148, 'name' => 'Zacatecas', 'name_ru' => 'Закатекас', 'gmt_offset' => -6,
			), array(
				'id' => 8462, 'country_id' => 216, 'name' => 'Zachar Bay', 'name_ru' => NULL, 'gmt_offset' => -9,
			), array(
				'id' => 8463, 'country_id' => 92, 'name' => 'Zadar', 'name_ru' => 'Задар', 'gmt_offset' => 1,
			), array(
				'id' => 8464, 'country_id' => 92, 'name' => 'Zagreb', 'name_ru' => 'Загреб', 'gmt_offset' => 1,
			), array(
				'id' => 8465, 'country_id' => 101, 'name' => 'Zahedan', 'name_ru' => 'Захедан', 'gmt_offset' => 3.5,
			), array(
				'id' => 8466, 'country_id' => 118, 'name' => 'Zaisan', 'name_ru' => 'Зайсан', 'gmt_offset' => 4,
			), array(
				'id' => 8467, 'country_id' => 85, 'name' => 'Zakinthos', 'name_ru' => NULL, 'gmt_offset' => 2,
			), array(
				'id' => 8468, 'country_id' => 200, 'name' => 'Zakouma', 'name_ru' => 'Закума', 'gmt_offset' => 1,
			), array(
				'id' => 8469, 'country_id' => 229, 'name' => 'Zambezi', 'name_ru' => 'Замбези', 'gmt_offset' => 2,
			), array(
				'id' => 8470, 'country_id' => 168, 'name' => 'Zamboanga', 'name_ru' => NULL, 'gmt_offset' => 8,
			), array(
				'id' => 8471, 'country_id' => 148, 'name' => 'Zamora', 'name_ru' => 'Замора', 'gmt_offset' => -6,
			), array(
				'id' => 8472, 'country_id' => 39, 'name' => 'Zanaga', 'name_ru' => 'Занага', 'gmt_offset' => -1,
			), array(
				'id' => 8473, 'country_id' => 216, 'name' => 'Zanesville', 'name_ru' => 'Занесвилл', 'gmt_offset' => -5,
			), array(
				'id' => 8474, 'country_id' => 101, 'name' => 'Zanjan', 'name_ru' => NULL, 'gmt_offset' => 3.5,
			), array(
				'id' => 8475, 'country_id' => 212, 'name' => 'Zanzibar', 'name_ru' => NULL, 'gmt_offset' => 3,
			), array(
				'id' => 8476, 'country_id' => 11, 'name' => 'Zapala', 'name_ru' => 'Запала', 'gmt_offset' => 3,
			), array(
				'id' => 8477, 'country_id' => 46, 'name' => 'Zapatoca', 'name_ru' => 'Запатока', 'gmt_offset' => -5,
			), array(
				'id' => 8478, 'country_id' => 213, 'name' => 'Zaporozhye', 'name_ru' => 'Запорожье', 'gmt_offset' => 3,
			), array(
				'id' => 8479, 'country_id' => 218, 'name' => 'Zarafshan', 'name_ru' => 'Зарафшан', 'gmt_offset' => 5,
			), array(
				'id' => 8480, 'country_id' => 64, 'name' => 'Zaragoza', 'name_ru' => 'Сарагоса', 'gmt_offset' => 1,
			), array(
				'id' => 8481, 'country_id' => 3, 'name' => 'Zaranj', 'name_ru' => 'Зарандж', 'gmt_offset' => 3.5,
			), array(
				'id' => 8482, 'country_id' => 155, 'name' => 'Zaria', 'name_ru' => 'Зариа', 'gmt_offset' => 1,
			), array(
				'id' => 8483, 'country_id' => 38, 'name' => 'Zemio', 'name_ru' => NULL, 'gmt_offset' => -1,
			), array(
				'id' => 8484, 'country_id' => 167, 'name' => 'Zenag', 'name_ru' => NULL, 'gmt_offset' => -10,
			), array(
				'id' => 8485, 'country_id' => 216, 'name' => 'Zephyrhills', 'name_ru' => NULL, 'gmt_offset' => -5,
			), array(
				'id' => 8486, 'country_id' => 99, 'name' => 'Zero', 'name_ru' => 'Зеро', 'gmt_offset' => 5.5,
			), array(
				'id' => 8487, 'country_id' => 118, 'name' => 'Zhairem', 'name_ru' => 'Жайрем', 'gmt_offset' => 7,
			), array(
				'id' => 8488, 'country_id' => 118, 'name' => 'Zhambyl', 'name_ru' => 'Жамбыл', 'gmt_offset' => 6,
			), array(
				'id' => 8489, 'country_id' => 45, 'name' => 'Zhanjiang', 'name_ru' => 'Чжаньчзян', 'gmt_offset' => 8,
			), array(
				'id' => 8490, 'country_id' => 45, 'name' => 'Zhaotong', 'name_ru' => 'Жаньтон', 'gmt_offset' => -8,
			), array(
				'id' => 8491, 'country_id' => 45, 'name' => 'Zhengzhou', 'name_ru' => 'Чженчжоу', 'gmt_offset' => 8,
			), array(
				'id' => 8492, 'country_id' => 118, 'name' => 'Zhezkazgan', 'name_ru' => 'Жезказган', 'gmt_offset' => 6,
			), array(
				'id' => 8493, 'country_id' => 45, 'name' => 'Zhi Jiang', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 8494, 'country_id' => 213, 'name' => 'Zhitomir', 'name_ru' => 'Житомир', 'gmt_offset' => 2,
			), array(
				'id' => 8495, 'country_id' => 169, 'name' => 'Zhob', 'name_ru' => 'Зхоб', 'gmt_offset' => -5,
			), array(
				'id' => 8496, 'country_id' => 45, 'name' => 'Zhongshan', 'name_ru' => 'Чжуншань', 'gmt_offset' => 0,
			), array(
				'id' => 8497, 'country_id' => 45, 'name' => 'Zhoushan', 'name_ru' => 'Чжушань', 'gmt_offset' => 8,
			), array(
				'id' => 8498, 'country_id' => 45, 'name' => 'Zhuhai', 'name_ru' => 'Чжухай', 'gmt_offset' => 0,
			), array(
				'id'         => 8499, 'country_id' => 170, 'name' => 'Zielona Gora', 'name_ru' => 'Зелена-Гора',
				'gmt_offset' => 1,
			), array(
				'id' => 8500, 'country_id' => 192, 'name' => 'Ziguinchor', 'name_ru' => 'Зигунчор', 'gmt_offset' => 0,
			),
				array(
					'id' => 8501, 'country_id' => 182, 'name' => 'Zilfi', 'name_ru' => 'Зилфи', 'gmt_offset' => -3,
				), 1 => array(
				'id' => 8502, 'country_id' => 190, 'name' => 'Zilina', 'name_ru' => 'Жилина', 'gmt_offset' => 1,
			), array(
				'id' => 8503, 'country_id' => 153, 'name' => 'Zinder', 'name_ru' => 'Зиндер', 'gmt_offset' => 1,
			), array(
				'id' => 8504, 'country_id' => 52, 'name' => 'Zlin', 'name_ru' => 'Злин', 'gmt_offset' => 1,
			), array(
				'id' => 8505, 'country_id' => 20, 'name' => 'Zoersel', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 8506, 'country_id' => 208, 'name' => 'Zonguldak', 'name_ru' => 'Зонгулдаг', 'gmt_offset' => 0,
			), array(
				'id' => 8507, 'country_id' => 142, 'name' => 'Zouerate', 'name_ru' => 'Зурате', 'gmt_offset' => 0,
			), array(
				'id' => 8508, 'country_id' => 41, 'name' => 'Zuenoula', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 8509, 'country_id' => 208, 'name' => 'Zugapa', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 8510, 'country_id' => 45, 'name' => 'Zunyi', 'name_ru' => 'Цунии', 'gmt_offset' => -8,
			), array(
				'id' => 8511, 'country_id' => 40, 'name' => 'Zurich', 'name_ru' => 'Цюрих', 'gmt_offset' => 1,
			), array(
				'id' => 8512, 'country_id' => 13, 'name' => 'Zurs/Lech', 'name_ru' => NULL, 'gmt_offset' => 0,
			), array(
				'id' => 8513, 'country_id' => 216, 'name' => 'Zwara', 'name_ru' => NULL, 'gmt_offset' => 6,
			), array(
				'id' => 16384, 'country_id' => 71, 'name' => 'Nice', 'name_ru' => 'Ницца', 'gmt_offset' => 2,
			), array(
				'id' => 16385, 'country_id' => 180, 'name' => 'Sochi', 'name_ru' => 'Сочи', 'gmt_offset' => 4,
			),
		);

		foreach($cities as $city)
			City::create($city);
	}
}
