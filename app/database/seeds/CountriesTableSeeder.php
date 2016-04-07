<?php

class CountriesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		Country::truncate();
		$countries =
			array(
				0    => array(
					'id' => 1, 'iso_code' => 'AD', 'name' => 'Andorra', 'name_ru' => 'Андорра',
				), 1 => array(
				'id' => 2, 'iso_code' => 'AE', 'name' => 'United Arab Emirates', 'name_ru' => 'ОАЭ',
			), 2     => array(
				'id' => 3, 'iso_code' => 'AF', 'name' => 'Afghanistan', 'name_ru' => 'Афганистан',
			), 3     => array(
				'id' => 4, 'iso_code' => 'AG', 'name' => 'Antigua And Barbuda', 'name_ru' => 'Антигуа и Барбуда',
			), 4     => array(
				'id' => 5, 'iso_code' => 'AI', 'name' => 'Anguilla', 'name_ru' => 'Ангилья',
			), 5     => array(
				'id' => 6, 'iso_code' => 'AL', 'name' => 'Albania', 'name_ru' => 'Албания',
			), 6     => array(
				'id' => 7, 'iso_code' => 'AM', 'name' => 'Armenia', 'name_ru' => 'Армения',
			), 7     => array(
				'id'      => 8, 'iso_code' => 'AN', 'name' => 'Netherlands Antilles',
				'name_ru' => 'Нидерландские Антильские острова',
			), 8     => array(
				'id' => 9, 'iso_code' => 'AO', 'name' => 'Angola', 'name_ru' => 'Ангола',
			), 9     => array(
				'id' => 10, 'iso_code' => 'AQ', 'name' => 'Antarctica', 'name_ru' => 'Антарктида',
			), 10    => array(
				'id' => 11, 'iso_code' => 'AR', 'name' => 'Argentina', 'name_ru' => 'Аргентина',
			), 11    => array(
				'id' => 12, 'iso_code' => 'AS', 'name' => 'American Samoa', 'name_ru' => 'Американское Самоа',
			), 12    => array(
				'id' => 13, 'iso_code' => 'AT', 'name' => 'Austria', 'name_ru' => 'Австрия',
			), 13    => array(
				'id' => 14, 'iso_code' => 'AU', 'name' => 'Australia', 'name_ru' => 'Австралия',
			), 14    => array(
				'id' => 15, 'iso_code' => 'AW', 'name' => 'Aruba', 'name_ru' => 'Аруба',
			), 15    => array(
				'id' => 16, 'iso_code' => 'AZ', 'name' => 'Azerbaijan', 'name_ru' => 'Азербайджан',
			), 16    => array(
				'id' => 17, 'iso_code' => 'BA', 'name' => 'Bosnia And Herzegovina', 'name_ru' => 'Босния и Герцеговина',
			), 17    => array(
				'id' => 18, 'iso_code' => 'BB', 'name' => 'Barbados', 'name_ru' => 'Барбадос',
			), 18    => array(
				'id' => 19, 'iso_code' => 'BD', 'name' => 'Bangladesh', 'name_ru' => 'Бангладеш',
			), 19    => array(
				'id' => 20, 'iso_code' => 'BE', 'name' => 'Belgium', 'name_ru' => 'Бельгия',
			), 20    => array(
				'id' => 21, 'iso_code' => 'BF', 'name' => 'Burkina Faso', 'name_ru' => 'Буркина-Фасо',
			), 21    => array(
				'id' => 22, 'iso_code' => 'BG', 'name' => 'Bulgaria', 'name_ru' => 'Болгария',
			), 22    => array(
				'id' => 23, 'iso_code' => 'BH', 'name' => 'Bahrain', 'name_ru' => 'Бахрейн',
			), 23    => array(
				'id' => 24, 'iso_code' => 'BI', 'name' => 'Burundi', 'name_ru' => 'Бурунди',
			), 24    => array(
				'id' => 25, 'iso_code' => 'BJ', 'name' => 'Benin', 'name_ru' => 'Бенин',
			), 25    => array(
				'id' => 26, 'iso_code' => 'BM', 'name' => 'Bermuda', 'name_ru' => 'Бермудские острова',
			), 26    => array(
				'id' => 27, 'iso_code' => 'BN', 'name' => 'Brunei Darussalam', 'name_ru' => 'Бруней-Даруссалам',
			), 27    => array(
				'id' => 28, 'iso_code' => 'BO', 'name' => 'Bolivia', 'name_ru' => 'Боливия',
			), 28    => array(
				'id' => 29, 'iso_code' => 'BR', 'name' => 'Brazil', 'name_ru' => 'Бразилия',
			), 29    => array(
				'id' => 30, 'iso_code' => 'BS', 'name' => 'Bahamas', 'name_ru' => 'Багамские острова',
			), 30    => array(
				'id' => 31, 'iso_code' => 'BT', 'name' => 'Bhutan', 'name_ru' => 'Бутан',
			), 31    => array(
				'id' => 32, 'iso_code' => 'BW', 'name' => 'Botswana', 'name_ru' => 'Ботсвана',
			), 32    => array(
				'id' => 33, 'iso_code' => 'BY', 'name' => 'Belarus', 'name_ru' => 'Беларусь',
			), 33    => array(
				'id' => 34, 'iso_code' => 'BZ', 'name' => 'Belize', 'name_ru' => 'Белиз',
			), 34    => array(
				'id' => 35, 'iso_code' => 'CA', 'name' => 'Canada', 'name_ru' => 'Канада',
			), 35    => array(
				'id' => 36, 'iso_code' => 'CC', 'name' => 'Cocos (Keeling) Islands', 'name_ru' => 'Кокосовые острова',
			), 36    => array(
				'id'      => 37, 'iso_code' => 'CD', 'name' => 'Democratic Republic Of Congo',
				'name_ru' => 'Демократическая республика Конго',
			), 37    => array(
				'id'      => 38, 'iso_code' => 'CF', 'name' => 'Central African Republic',
				'name_ru' => 'Центральноафриканская Республика',
			), 38    => array(
				'id' => 39, 'iso_code' => 'CG', 'name' => 'Congo', 'name_ru' => 'Конго',
			), 39    => array(
				'id' => 40, 'iso_code' => 'CH', 'name' => 'Switzerland', 'name_ru' => 'Швейцария',
			), 40    => array(
				'id' => 41, 'iso_code' => 'CI', 'name' => 'Cote D&#039;Ivoire', 'name_ru' => 'Кот д&#039;Ивуар',
			), 41    => array(
				'id' => 42, 'iso_code' => 'CK', 'name' => 'Cook Islands', 'name_ru' => 'Острова Кука',
			), 42    => array(
				'id' => 43, 'iso_code' => 'CL', 'name' => 'Chile', 'name_ru' => 'Чили',
			), 43    => array(
				'id' => 44, 'iso_code' => 'CM', 'name' => 'Cameroon', 'name_ru' => 'Камерун',
			), 44    => array(
				'id' => 45, 'iso_code' => 'CN', 'name' => 'China', 'name_ru' => 'Китай',
			), 45    => array(
				'id' => 46, 'iso_code' => 'CO', 'name' => 'Colombia', 'name_ru' => 'Колумбия',
			), 46    => array(
				'id' => 47, 'iso_code' => 'CR', 'name' => 'Costa Rica', 'name_ru' => 'Коста-Рика',
			), 47    => array(
				'id' => 48, 'iso_code' => 'CU', 'name' => 'Cuba', 'name_ru' => 'Куба',
			), 48    => array(
				'id' => 49, 'iso_code' => 'CV', 'name' => 'Cape Verde', 'name_ru' => 'Кабо-Верде',
			), 49    => array(
				'id' => 50, 'iso_code' => 'CX', 'name' => 'Christmas Island', 'name_ru' => 'Остров Рождества',
			), 50    => array(
				'id' => 51, 'iso_code' => 'CY', 'name' => 'Cyprus', 'name_ru' => 'Кипр',
			), 51    => array(
				'id' => 52, 'iso_code' => 'CZ', 'name' => 'Czech Republic', 'name_ru' => 'Чехия',
			), 52    => array(
				'id' => 53, 'iso_code' => 'DE', 'name' => 'Germany', 'name_ru' => 'Германия',
			), 53    => array(
				'id' => 54, 'iso_code' => 'DJ', 'name' => 'Djibouti', 'name_ru' => 'Джибути',
			), 54    => array(
				'id' => 55, 'iso_code' => 'DK', 'name' => 'Denmark', 'name_ru' => 'Дания',
			), 55    => array(
				'id' => 56, 'iso_code' => 'DM', 'name' => 'Dominica', 'name_ru' => 'Доминика',
			), 56    => array(
				'id' => 57, 'iso_code' => 'DO', 'name' => 'Dominican Republic', 'name_ru' => 'Доминиканская Республика',
			), 57    => array(
				'id' => 58, 'iso_code' => 'DZ', 'name' => 'Algeria', 'name_ru' => 'Алжир',
			), 58    => array(
				'id' => 59, 'iso_code' => 'EC', 'name' => 'Ecuador', 'name_ru' => 'Эквадор',
			), 59    => array(
				'id' => 60, 'iso_code' => 'EE', 'name' => 'Estonia', 'name_ru' => 'Эстония',
			), 60    => array(
				'id' => 61, 'iso_code' => 'EG', 'name' => 'Egypt', 'name_ru' => 'Египет',
			), 61    => array(
				'id' => 62, 'iso_code' => 'EH', 'name' => 'Western Sahara', 'name_ru' => 'Западная Сахара',
			), 62    => array(
				'id' => 63, 'iso_code' => 'ER', 'name' => 'Eritrea', 'name_ru' => 'Эритрея',
			), 63    => array(
				'id' => 64, 'iso_code' => 'ES', 'name' => 'Spain', 'name_ru' => 'Испания',
			), 64    => array(
				'id' => 65, 'iso_code' => 'ET', 'name' => 'Ethiopia', 'name_ru' => 'Эфиопия',
			), 65    => array(
				'id' => 66, 'iso_code' => 'FI', 'name' => 'Finland', 'name_ru' => 'Финляндия',
			), 66    => array(
				'id' => 67, 'iso_code' => 'FJ', 'name' => 'Fiji', 'name_ru' => 'Фиджи',
			), 67    => array(
				'id' => 68, 'iso_code' => 'FK', 'name' => 'Falkland Islands', 'name_ru' => 'Фоклендские острова',
			), 68    => array(
				'id' => 69, 'iso_code' => 'FM', 'name' => 'Federated States of Micronesia', 'name_ru' => 'Микронезия',
			), 69    => array(
				'id' => 70, 'iso_code' => 'FO', 'name' => 'Faroe Islands', 'name_ru' => 'Фарерские острова',
			), 70    => array(
				'id' => 71, 'iso_code' => 'FR', 'name' => 'France', 'name_ru' => 'Франция',
			), 71    => array(
				'id' => 72, 'iso_code' => 'GA', 'name' => 'Gabon', 'name_ru' => 'Габон',
			), 72    => array(
				'id' => 73, 'iso_code' => 'GB', 'name' => 'United Kingdom', 'name_ru' => 'Великобритания',
			), 73    => array(
				'id' => 74, 'iso_code' => 'GD', 'name' => 'Grenada', 'name_ru' => 'Гренада',
			), 74    => array(
				'id' => 75, 'iso_code' => 'GE', 'name' => 'Georgia', 'name_ru' => 'Грузия',
			), 75    => array(
				'id' => 76, 'iso_code' => 'GF', 'name' => 'French Guiana', 'name_ru' => 'Французская Гвиана',
			), 76    => array(
				'id' => 77, 'iso_code' => 'GG', 'name' => 'Guernsey', 'name_ru' => 'Гернси',
			), 77    => array(
				'id' => 78, 'iso_code' => 'GH', 'name' => 'Ghana', 'name_ru' => 'Гана',
			), 78    => array(
				'id' => 79, 'iso_code' => 'GI', 'name' => 'Gibraltar', 'name_ru' => 'Гибралтар',
			), 79    => array(
				'id' => 80, 'iso_code' => 'GL', 'name' => 'Greenland', 'name_ru' => 'Гренландия',
			), 80    => array(
				'id' => 81, 'iso_code' => 'GM', 'name' => 'Gambia', 'name_ru' => 'Гамбия',
			), 81    => array(
				'id' => 82, 'iso_code' => 'GN', 'name' => 'Guinea', 'name_ru' => 'Гвинея',
			), 82    => array(
				'id' => 83, 'iso_code' => 'GP', 'name' => 'Guadeloupe', 'name_ru' => 'Гваделупа',
			), 83    => array(
				'id' => 84, 'iso_code' => 'GQ', 'name' => 'Equatorial Guinea', 'name_ru' => 'Экваториальная Гвинея',
			), 84    => array(
				'id' => 85, 'iso_code' => 'GR', 'name' => 'Greece', 'name_ru' => 'Греция',
			), 85    => array(
				'id' => 86, 'iso_code' => 'GT', 'name' => 'Guatemala', 'name_ru' => 'Гватемала',
			), 86    => array(
				'id' => 87, 'iso_code' => 'GU', 'name' => 'Guam (USA)', 'name_ru' => 'Гуам',
			), 87    => array(
				'id' => 88, 'iso_code' => 'GW', 'name' => 'Guinea-Bissau', 'name_ru' => 'Гвинея-Бисау',
			), 88    => array(
				'id' => 89, 'iso_code' => 'GY', 'name' => 'Guyana', 'name_ru' => 'Гайана',
			), 89    => array(
				'id' => 90, 'iso_code' => 'HK', 'name' => 'Hong Kong', 'name_ru' => 'Гонконг',
			), 90    => array(
				'id' => 91, 'iso_code' => 'HN', 'name' => 'Honduras', 'name_ru' => 'Гондурас',
			), 91    => array(
				'id' => 92, 'iso_code' => 'HR', 'name' => 'Croatia', 'name_ru' => 'Хорватия',
			), 92    => array(
				'id' => 93, 'iso_code' => 'HT', 'name' => 'Haiti', 'name_ru' => 'Гаити',
			), 93    => array(
				'id' => 94, 'iso_code' => 'HU', 'name' => 'Hungary', 'name_ru' => 'Венгрия',
			), 94    => array(
				'id' => 95, 'iso_code' => 'ID', 'name' => 'Indonesia', 'name_ru' => 'Индонезия',
			), 95    => array(
				'id' => 96, 'iso_code' => 'IE', 'name' => 'Ireland', 'name_ru' => 'Ирландия',
			), 96    => array(
				'id' => 97, 'iso_code' => 'IL', 'name' => 'Israel', 'name_ru' => 'Израиль',
			), 97    => array(
				'id' => 98, 'iso_code' => 'IM', 'name' => 'Isle of Man', 'name_ru' => 'Остров Мэн',
			), 98    => array(
				'id' => 99, 'iso_code' => 'IN', 'name' => 'India', 'name_ru' => 'Индия',
			), 99    => array(
				'id' => 100, 'iso_code' => 'IQ', 'name' => 'Iraq', 'name_ru' => 'Ирак',
			), 100   => array(
				'id' => 101, 'iso_code' => 'IR', 'name' => 'Iran', 'name_ru' => 'Иран',
			), 101   => array(
				'id' => 102, 'iso_code' => 'IS', 'name' => 'Iceland', 'name_ru' => 'Исландия',
			), 102   => array(
				'id' => 103, 'iso_code' => 'IT', 'name' => 'Italy', 'name_ru' => 'Италия',
			), 103   => array(
				'id' => 104, 'iso_code' => 'JE', 'name' => 'Jersey', 'name_ru' => 'Джерси',
			), 104   => array(
				'id' => 105, 'iso_code' => 'JM', 'name' => 'Jamaica', 'name_ru' => 'Ямайка',
			), 105   => array(
				'id' => 106, 'iso_code' => 'JO', 'name' => 'Jordan', 'name_ru' => 'Иордания',
			), 106   => array(
				'id' => 107, 'iso_code' => 'JP', 'name' => 'Japan', 'name_ru' => 'Япония',
			), 107   => array(
				'id' => 108, 'iso_code' => 'KE', 'name' => 'Kenya', 'name_ru' => 'Кения',
			), 108   => array(
				'id' => 109, 'iso_code' => 'KG', 'name' => 'Kyrgyzstan', 'name_ru' => 'Кыргызстан',
			), 109   => array(
				'id' => 110, 'iso_code' => 'KH', 'name' => 'Cambodia', 'name_ru' => 'Камбоджа',
			), 110   => array(
				'id' => 111, 'iso_code' => 'KI', 'name' => 'Kiribati', 'name_ru' => 'Кирибати',
			), 111   => array(
				'id' => 112, 'iso_code' => 'KM', 'name' => 'Comoros', 'name_ru' => 'Коморские острова',
			), 112   => array(
				'id' => 113, 'iso_code' => 'KN', 'name' => 'Saint Kitts and Nevis', 'name_ru' => 'Сент-Китс и Невис',
			), 113   => array(
				'id' => 114, 'iso_code' => 'KP', 'name' => 'Korea (North)', 'name_ru' => 'Северная Корея',
			), 114   => array(
				'id' => 115, 'iso_code' => 'KR', 'name' => 'Korea (South)', 'name_ru' => 'Южная Корея',
			), 115   => array(
				'id' => 116, 'iso_code' => 'KW', 'name' => 'Kuwait', 'name_ru' => 'Кувейт',
			), 116   => array(
				'id' => 117, 'iso_code' => 'KY', 'name' => 'Cayman Islands', 'name_ru' => 'Каймановы острова',
			), 117   => array(
				'id' => 118, 'iso_code' => 'KZ', 'name' => 'Kazakhstan', 'name_ru' => 'Казахстан',
			), 118   => array(
				'id' => 119, 'iso_code' => 'LA', 'name' => 'Laos', 'name_ru' => 'Лаос',
			), 119   => array(
				'id' => 120, 'iso_code' => 'LB', 'name' => 'Lebanon', 'name_ru' => 'Ливан',
			), 120   => array(
				'id' => 121, 'iso_code' => 'LC', 'name' => 'Saint Lucia', 'name_ru' => 'Сент-Люсия',
			), 121   => array(
				'id' => 122, 'iso_code' => 'LK', 'name' => 'Sri Lanka', 'name_ru' => 'Шри-Ланка',
			), 122   => array(
				'id' => 123, 'iso_code' => 'LR', 'name' => 'Liberia', 'name_ru' => 'Либерия',
			), 123   => array(
				'id' => 124, 'iso_code' => 'LS', 'name' => 'Lesotho', 'name_ru' => 'Лесото',
			), 124   => array(
				'id' => 125, 'iso_code' => 'LT', 'name' => 'Lithuania', 'name_ru' => 'Литва',
			), 125   => array(
				'id' => 126, 'iso_code' => 'LU', 'name' => 'Luxembourg', 'name_ru' => 'Люксембург',
			), 126   => array(
				'id' => 127, 'iso_code' => 'LV', 'name' => 'Latvia', 'name_ru' => 'Латвия',
			), 127   => array(
				'id' => 128, 'iso_code' => 'LY', 'name' => 'Libya', 'name_ru' => 'Ливия',
			), 128   => array(
				'id' => 129, 'iso_code' => 'MA', 'name' => 'Morocco', 'name_ru' => 'Марокко',
			), 129   => array(
				'id' => 130, 'iso_code' => 'MC', 'name' => 'Monaco', 'name_ru' => 'Монако',
			), 130   => array(
				'id' => 131, 'iso_code' => 'MD', 'name' => 'Moldova', 'name_ru' => 'Молдова',
			), 131   => array(
				'id' => 132, 'iso_code' => 'ME', 'name' => 'Montenegro', 'name_ru' => 'Черногория',
			), 132   => array(
				'id' => 133, 'iso_code' => 'MG', 'name' => 'Madagascar', 'name_ru' => 'Мадагаскар',
			), 133   => array(
				'id' => 134, 'iso_code' => 'MH', 'name' => 'Marshall Islands', 'name_ru' => 'Маршалловы острова',
			), 134   => array(
				'id' => 135, 'iso_code' => 'MK', 'name' => 'Macedonia', 'name_ru' => 'Македония',
			), 135   => array(
				'id' => 136, 'iso_code' => 'ML', 'name' => 'Mali', 'name_ru' => 'Мали',
			), 136   => array(
				'id' => 137, 'iso_code' => 'MM', 'name' => 'Myanmar', 'name_ru' => 'Мьянма',
			), 137   => array(
				'id' => 138, 'iso_code' => 'MN', 'name' => 'Mongolia', 'name_ru' => 'Монголия',
			), 138   => array(
				'id' => 139, 'iso_code' => 'MO', 'name' => 'Macau', 'name_ru' => 'Макао',
			), 139   => array(
				'id'      => 140, 'iso_code' => 'MP', 'name' => 'Northern Mariana Islands',
				'name_ru' => 'Северные Марианские острова',
			), 140   => array(
				'id' => 141, 'iso_code' => 'MQ', 'name' => 'Martinique', 'name_ru' => 'Мартиника',
			), 141   => array(
				'id' => 142, 'iso_code' => 'MR', 'name' => 'Mauritania', 'name_ru' => 'Мавритания',
			), 142   => array(
				'id' => 143, 'iso_code' => 'MS', 'name' => 'Montserrat', 'name_ru' => 'Монсеррат',
			), 143   => array(
				'id' => 144, 'iso_code' => 'MT', 'name' => 'Malta', 'name_ru' => 'Мальта',
			), 144   => array(
				'id' => 145, 'iso_code' => 'MU', 'name' => 'Mauritius', 'name_ru' => 'Маврикий',
			), 145   => array(
				'id' => 146, 'iso_code' => 'MV', 'name' => 'Maldives', 'name_ru' => 'Мальдивы',
			), 146   => array(
				'id' => 147, 'iso_code' => 'MW', 'name' => 'Malawi', 'name_ru' => 'Малави',
			), 147   => array(
				'id' => 148, 'iso_code' => 'MX', 'name' => 'Mexico', 'name_ru' => 'Мексика',
			), 148   => array(
				'id' => 149, 'iso_code' => 'MY', 'name' => 'Malaysia', 'name_ru' => 'Малайзия',
			), 149   => array(
				'id' => 150, 'iso_code' => 'MZ', 'name' => 'Mozambique', 'name_ru' => 'Мозамбик',
			), 150   => array(
				'id' => 151, 'iso_code' => 'NA', 'name' => 'Namibia', 'name_ru' => 'Намибия',
			), 151   => array(
				'id' => 152, 'iso_code' => 'NC', 'name' => 'New Caledonia', 'name_ru' => 'Новая Каледония',
			), 152   => array(
				'id' => 153, 'iso_code' => 'NE', 'name' => 'Niger', 'name_ru' => 'Нигер',
			), 153   => array(
				'id' => 154, 'iso_code' => 'NF', 'name' => 'Norfolk Island', 'name_ru' => 'Норфолк Айленд',
			), 154   => array(
				'id' => 155, 'iso_code' => 'NG', 'name' => 'Nigeria', 'name_ru' => 'Нигерия',
			), 155   => array(
				'id' => 156, 'iso_code' => 'NI', 'name' => 'Nicaragua', 'name_ru' => 'Никарагуа',
			), 156   => array(
				'id' => 157, 'iso_code' => 'NL', 'name' => 'Netherlands', 'name_ru' => 'Нидерланды',
			), 157   => array(
				'id' => 158, 'iso_code' => 'NO', 'name' => 'Norway', 'name_ru' => 'Норвегия',
			), 158   => array(
				'id' => 159, 'iso_code' => 'NP', 'name' => 'Nepal', 'name_ru' => 'Непал',
			), 159   => array(
				'id' => 160, 'iso_code' => 'NR', 'name' => 'Nauru', 'name_ru' => 'Науру',
			), 160   => array(
				'id' => 161, 'iso_code' => 'NU', 'name' => 'Niue', 'name_ru' => 'Ниуэ',
			), 161   => array(
				'id' => 162, 'iso_code' => 'NZ', 'name' => 'New Zealand', 'name_ru' => 'Новая Зеландия',
			), 162   => array(
				'id' => 163, 'iso_code' => 'OM', 'name' => 'Oman', 'name_ru' => 'Оман',
			), 163   => array(
				'id' => 164, 'iso_code' => 'PA', 'name' => 'Panama', 'name_ru' => 'Панама',
			), 164   => array(
				'id' => 165, 'iso_code' => 'PE', 'name' => 'Peru', 'name_ru' => 'Перу',
			), 165   => array(
				'id' => 166, 'iso_code' => 'PF', 'name' => 'French Polynesia', 'name_ru' => 'Французская Полинезия',
			), 166   => array(
				'id' => 167, 'iso_code' => 'PG', 'name' => 'Papua New Guinea', 'name_ru' => 'Папуа - Новая Гвинея',
			), 167   => array(
				'id' => 168, 'iso_code' => 'PH', 'name' => 'Philippines', 'name_ru' => 'Филиппины',
			), 168   => array(
				'id' => 169, 'iso_code' => 'PK', 'name' => 'Pakistan', 'name_ru' => 'Пакистан',
			), 169   => array(
				'id' => 170, 'iso_code' => 'PL', 'name' => 'Poland', 'name_ru' => 'Польша',
			), 170   => array(
				'id' => 171, 'iso_code' => 'PM', 'name' => 'St. Pierre and Miquelon', 'name_ru' => 'Сен-Пьер и Микелон',
			), 171   => array(
				'id' => 172, 'iso_code' => 'PR', 'name' => 'Puerto Rico', 'name_ru' => 'Пуэрто Рико',
			), 172   => array(
				'id' => 173, 'iso_code' => 'PT', 'name' => 'Portugal', 'name_ru' => 'Португалия',
			), 173   => array(
				'id' => 174, 'iso_code' => 'PW', 'name' => 'Palau', 'name_ru' => 'Палау',
			), 174   => array(
				'id' => 175, 'iso_code' => 'PY', 'name' => 'Paraguay', 'name_ru' => 'Парагвай',
			), 175   => array(
				'id' => 176, 'iso_code' => 'QA', 'name' => 'Qatar', 'name_ru' => 'Катар',
			), 176   => array(
				'id' => 177, 'iso_code' => 'RE', 'name' => 'Reunion', 'name_ru' => 'Реюньон',
			), 177   => array(
				'id' => 178, 'iso_code' => 'RO', 'name' => 'Romania', 'name_ru' => 'Румыния',
			), 178   => array(
				'id' => 179, 'iso_code' => 'RS', 'name' => 'Serbia', 'name_ru' => 'Сербия',
			), 179   => array(
				'id' => 180, 'iso_code' => 'RU', 'name' => 'Russian Federation', 'name_ru' => 'Россия',
			), 180   => array(
				'id' => 181, 'iso_code' => 'RW', 'name' => 'Rwanda', 'name_ru' => 'Руанда',
			), 181   => array(
				'id' => 182, 'iso_code' => 'SA', 'name' => 'Saudi Arabia', 'name_ru' => 'Саудовская Аравия',
			), 182   => array(
				'id' => 183, 'iso_code' => 'SB', 'name' => 'Solomon Islands', 'name_ru' => 'Соломоновы острова',
			), 183   => array(
				'id' => 184, 'iso_code' => 'SC', 'name' => 'Seychelles', 'name_ru' => 'Сейшельские о-ва',
			), 184   => array(
				'id' => 185, 'iso_code' => 'SD', 'name' => 'Sudan', 'name_ru' => 'Судан',
			), 185   => array(
				'id' => 186, 'iso_code' => 'SE', 'name' => 'Sweden', 'name_ru' => 'Швеция',
			), 186   => array(
				'id' => 187, 'iso_code' => 'SG', 'name' => 'Singapore', 'name_ru' => 'Сингапур',
			), 187   => array(
				'id' => 188, 'iso_code' => 'SH', 'name' => 'St. Helena', 'name_ru' => 'Остров святой Елены',
			), 188   => array(
				'id' => 189, 'iso_code' => 'SI', 'name' => 'Slovenia', 'name_ru' => 'Словения',
			), 189   => array(
				'id' => 190, 'iso_code' => 'SK', 'name' => 'Slovakia', 'name_ru' => 'Словакия',
			), 190   => array(
				'id' => 191, 'iso_code' => 'SL', 'name' => 'Sierra Leone', 'name_ru' => 'Сьерра-Леоне',
			), 191   => array(
				'id' => 192, 'iso_code' => 'SN', 'name' => 'Senegal', 'name_ru' => 'Сенегал',
			), 192   => array(
				'id' => 193, 'iso_code' => 'SO', 'name' => 'Somalia', 'name_ru' => 'Сомали',
			), 193   => array(
				'id' => 194, 'iso_code' => 'SR', 'name' => 'Suriname', 'name_ru' => 'Суринам',
			), 194   => array(
				'id' => 195, 'iso_code' => 'ST', 'name' => 'Sao Tome and Principe', 'name_ru' => 'Сан-Томе и Принсипи',
			), 195   => array(
				'id' => 196, 'iso_code' => 'SV', 'name' => 'El Salvador', 'name_ru' => 'Сальвадор',
			), 196   => array(
				'id' => 197, 'iso_code' => 'SY', 'name' => 'Syria', 'name_ru' => 'Сирия',
			), 197   => array(
				'id' => 198, 'iso_code' => 'SZ', 'name' => 'Swaziland', 'name_ru' => 'Свазиленд',
			), 198   => array(
				'id' => 199, 'iso_code' => 'TC', 'name' => 'Turks and Caicos Islands', 'name_ru' => 'Теркс и Кайкос',
			), 199   => array(
				'id' => 200, 'iso_code' => 'TD', 'name' => 'Chad', 'name_ru' => 'Чад',
			), 200   => array(
				'id' => 201, 'iso_code' => 'TG', 'name' => 'Togo', 'name_ru' => 'Того',
			), 201   => array(
				'id' => 202, 'iso_code' => 'TH', 'name' => 'Thailand', 'name_ru' => 'Таиланд',
			), 202   => array(
				'id' => 203, 'iso_code' => 'TJ', 'name' => 'Tajikistan', 'name_ru' => 'Таджикистан',
			), 203   => array(
				'id' => 204, 'iso_code' => 'TM', 'name' => 'Turkmenistan', 'name_ru' => 'Туркменистан',
			), 204   => array(
				'id' => 205, 'iso_code' => 'TN', 'name' => 'Tunisia', 'name_ru' => 'Тунис',
			), 205   => array(
				'id' => 206, 'iso_code' => 'TO', 'name' => 'Tonga', 'name_ru' => 'Тонга',
			), 206   => array(
				'id' => 207, 'iso_code' => 'TP', 'name' => 'East Timor-Indonesia', 'name_ru' => 'Восточный Тимор',
			), 207   => array(
				'id' => 208, 'iso_code' => 'TR', 'name' => 'Turkey', 'name_ru' => 'Турция',
			), 208   => array(
				'id' => 209, 'iso_code' => 'TT', 'name' => 'Trinidad And Tobago', 'name_ru' => 'Тринидад и Тобаго',
			), 209   => array(
				'id' => 210, 'iso_code' => 'TV', 'name' => 'Tuvalu', 'name_ru' => 'Тувалу',
			), 210   => array(
				'id' => 211, 'iso_code' => 'TW', 'name' => 'Taiwan', 'name_ru' => 'Тайвань',
			), 211   => array(
				'id' => 212, 'iso_code' => 'TZ', 'name' => 'Tanzania', 'name_ru' => 'Танзания',
			), 212   => array(
				'id' => 213, 'iso_code' => 'UA', 'name' => 'Ukraine', 'name_ru' => 'Украина',
			), 213   => array(
				'id' => 214, 'iso_code' => 'UG', 'name' => 'Uganda', 'name_ru' => 'Уганда',
			), 214   => array(
				'id'      => 215, 'iso_code' => 'UM', 'name' => 'US Minor Outlying Islands',
				'name_ru' => 'Внешние малые острова США',
			), 215   => array(
				'id' => 216, 'iso_code' => 'US', 'name' => 'United States', 'name_ru' => 'США',
			), 216   => array(
				'id' => 217, 'iso_code' => 'UY', 'name' => 'Uruguay', 'name_ru' => 'Уругвай',
			), 217   => array(
				'id' => 218, 'iso_code' => 'UZ', 'name' => 'Uzbekistan', 'name_ru' => 'Узбекистан',
			), 218   => array(
				'id'      => 219, 'iso_code' => 'VC', 'name' => 'Saint Vincent and the Grenadines',
				'name_ru' => 'Сент-Винсент и Гренадины',
			), 219   => array(
				'id' => 220, 'iso_code' => 'VE', 'name' => 'Venezuela', 'name_ru' => 'Венесуэла',
			), 220   => array(
				'id'      => 221, 'iso_code' => 'VG', 'name' => 'British Virgin Islands',
				'name_ru' => 'Британские Виргинские острова',
			), 221   => array(
				'id'      => 222, 'iso_code' => 'VI', 'name' => 'US Virgin Islands',
				'name_ru' => 'Американские Виргинские острова',
			), 222   => array(
				'id' => 223, 'iso_code' => 'VN', 'name' => 'Vietnam', 'name_ru' => 'Вьетнам',
			), 223   => array(
				'id' => 224, 'iso_code' => 'VU', 'name' => 'Vanuatu', 'name_ru' => 'Вануату',
			), 224   => array(
				'id'      => 225, 'iso_code' => 'WF', 'name' => 'Wallis and Futuna Islands',
				'name_ru' => 'Острова Уоллис и Футуна',
			), 225   => array(
				'id' => 226, 'iso_code' => 'WS', 'name' => 'Samoa', 'name_ru' => 'Самоа',
			), 226   => array(
				'id' => 227, 'iso_code' => 'YE', 'name' => 'Yemen', 'name_ru' => 'Йемен',
			), 227   => array(
				'id' => 228, 'iso_code' => 'ZA', 'name' => 'South Africa', 'name_ru' => 'ЮАР',
			), 228   => array(
				'id' => 229, 'iso_code' => 'ZM', 'name' => 'Zambia', 'name_ru' => 'Замбия',
			), 229   => array(
				'id' => 230, 'iso_code' => 'ZR', 'name' => 'Zaire', 'name_ru' => 'Заир',
			), 230   => array(
				'id' => 231, 'iso_code' => 'ZW', 'name' => 'Zimbabwe', 'name_ru' => 'Зимбабве',
			),
		);

		foreach($countries as $country)
			Country::create($country);
	}
}