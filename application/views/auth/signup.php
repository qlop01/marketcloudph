<div class='mainInfo'>

	<h1>Sign Up!</h1>
	<p>Please enter the users information below.</p>
	
	<div id="infoMessage"><?php echo $message;?></div>
	
    <?php
  	$attributes = array('class' => '', 'id' => 'signupForm', 'name' => 'signupForm');
  	echo form_open("auth/signup", $attributes );
	?>
	
	<p>
      <label for="first_name">First name:</label>
      <?php echo form_input($first_name);?>
      </p>
      
      <p>
   	<label for="last_name">Surname:</label>
      <?php echo form_input($last_name);?>
      </p>
   
 	<p>
	<label for="location">Location:</label>
	<select name="location" id="location"> 
 
      
                  <option value="Abra - Baay-Licuan (Licuan)">Abra - Baay-Licuan (Licuan)</option> 
 
                
                  <option value="Abra - Bangued">Abra - Bangued</option> 
 
                
                  <option value="Abra - Boliney">Abra - Boliney</option> 
 
                
                  <option value="Abra - Bucay">Abra - Bucay</option> 
 
                
                  <option value="Abra - Bucloc">Abra - Bucloc</option> 
 
                
                  <option value="Abra - Daguioman">Abra - Daguioman</option> 
 
                
                  <option value="Abra - Danglas">Abra - Danglas</option> 
 
                
                  <option value="Abra - Dolores">Abra - Dolores</option> 
 
                
                  <option value="Abra - La Paz">Abra - La Paz</option> 
 
                
                  <option value="Abra - Lacub">Abra - Lacub</option> 
 
                
                  <option value="Abra - Lagangilang">Abra - Lagangilang</option> 
 
                
                  <option value="Abra - Lagayan">Abra - Lagayan</option> 
 
                
                  <option value="Abra - Langiden">Abra - Langiden</option> 
 
                
                  <option value="Abra - Luba">Abra - Luba</option> 
 
                
                  <option value="Abra - Malibcong">Abra - Malibcong</option> 
 
                
                  <option value="Abra - Manabo">Abra - Manabo</option> 
 
                
                  <option value="Abra - Penarubia">Abra - Penarubia</option> 
 
                
                  <option value="Abra - Pidigan">Abra - Pidigan</option> 
 
                
                  <option value="Abra - Pilar">Abra - Pilar</option> 
 
                
                  <option value="Abra - Sallapadan">Abra - Sallapadan</option> 
 
                
                  <option value="Abra - San Isidro">Abra - San Isidro</option> 
 
                
                  <option value="Abra - San Juan">Abra - San Juan</option> 
 
                
                  <option value="Abra - San Quintin">Abra - San Quintin</option> 
 
                
                  <option value="Abra - Tayum">Abra - Tayum</option> 
 
                
                  <option value="Abra - Tineg">Abra - Tineg</option> 
 
                
                  <option value="Abra - Tubo">Abra - Tubo</option> 
 
                
                  <option value="Agusan Del Norte - Buenavista">Agusan Del Norte - Buenavista</option> 
 
                
                  <option value="Agusan Del Norte - Butuan City (Capital)">Agusan Del Norte - Butuan City (Capital)</option> 
 
                
                  <option value="Agusan Del Norte - Cabadbaran">Agusan Del Norte - Cabadbaran</option> 
 
                
                  <option value="Agusan Del Norte - Carmen">Agusan Del Norte - Carmen</option> 
 
                
                  <option value="Agusan Del Norte - Jabonga">Agusan Del Norte - Jabonga</option> 
 
                
                  <option value="Agusan Del Norte - Kitcharao">Agusan Del Norte - Kitcharao</option> 
 
                
                  <option value="Agusan Del Norte - Las Nieves">Agusan Del Norte - Las Nieves</option> 
 
                
                  <option value="Agusan Del Norte - Magallanes">Agusan Del Norte - Magallanes</option> 
 
                
                  <option value="Agusan Del Norte - Nasipit">Agusan Del Norte - Nasipit</option> 
 
                
                  <option value="Agusan Del Norte - Remedios T. Romualdez">Agusan Del Norte - Remedios T. Romualdez</option> 
 
                
                  <option value="Agusan Del Norte - Santiago">Agusan Del Norte - Santiago</option> 
 
                
                  <option value="Agusan Del Norte - Tubay">Agusan Del Norte - Tubay</option> 
 
                
                  <option value="Agusan Del Sur - Bayugan">Agusan Del Sur - Bayugan</option> 
 
                
                  <option value="Agusan Del Sur - Bunawan">Agusan Del Sur - Bunawan</option> 
 
                
                  <option value="Agusan Del Sur - Esperanza">Agusan Del Sur - Esperanza</option> 
 
                
                  <option value="Agusan Del Sur - La Paz">Agusan Del Sur - La Paz</option> 
 
                
                  <option value="Agusan Del Sur - Loreto">Agusan Del Sur - Loreto</option> 
 
                
                  <option value="Agusan Del Sur - Prosperidad (Capital)">Agusan Del Sur - Prosperidad (Capital)</option> 
 
                
                  <option value="Agusan Del Sur - Rosario">Agusan Del Sur - Rosario</option> 
 
                
                  <option value="Agusan Del Sur - San Francisco">Agusan Del Sur - San Francisco</option> 
 
                
                  <option value="Agusan Del Sur - San Luis">Agusan Del Sur - San Luis</option> 
 
                
                  <option value="Agusan Del Sur - Santa Josefa">Agusan Del Sur - Santa Josefa</option> 
 
                
                  <option value="Agusan Del Sur - Sibagat">Agusan Del Sur - Sibagat</option> 
 
                
                  <option value="Agusan Del Sur - Talacogon">Agusan Del Sur - Talacogon</option> 
 
                
                  <option value="Agusan Del Sur - Trento">Agusan Del Sur - Trento</option> 
 
                
                  <option value="Agusan Del Sur - Veruela">Agusan Del Sur - Veruela</option> 
 
                
                  <option value="Aklan - Altavas">Aklan - Altavas</option> 
 
                
                  <option value="Aklan - Balete">Aklan - Balete</option> 
 
                
                  <option value="Aklan - Banga">Aklan - Banga</option> 
 
                
                  <option value="Aklan - Batan">Aklan - Batan</option> 
 
                
                  <option value="Aklan - Burungan">Aklan - Burungan</option> 
 
                
                  <option value="Aklan - Ibajay">Aklan - Ibajay</option> 
 
                
                  <option value="Aklan - Kalibo">Aklan - Kalibo</option> 
 
                
                  <option value="Aklan - Lezo">Aklan - Lezo</option> 
 
                
                  <option value="Aklan - Libacao">Aklan - Libacao</option> 
 
                
                  <option value="Aklan - Madalag">Aklan - Madalag</option> 
 
                
                  <option value="Aklan - Makato">Aklan - Makato</option> 
 
                
                  <option value="Aklan - Malay">Aklan - Malay</option> 
 
                
                  <option value="Aklan - Malinao">Aklan - Malinao</option> 
 
                
                  <option value="Aklan - Nabas">Aklan - Nabas</option> 
 
                
                  <option value="Aklan - New Washington">Aklan - New Washington</option> 
 
                
                  <option value="Aklan - Numancia">Aklan - Numancia</option> 
 
                
                  <option value="Aklan - Tangalan">Aklan - Tangalan</option> 
 
                
                  <option value="Albay - Bacacay">Albay - Bacacay</option> 
 
                
                  <option value="Albay - Camalig">Albay - Camalig</option> 
 
                
                  <option value="Albay - Daraga">Albay - Daraga</option> 
 
                
                  <option value="Albay - Guinobatan">Albay - Guinobatan</option> 
 
                
                  <option value="Albay - Jovellar">Albay - Jovellar</option> 
 
                
                  <option value="Albay - Legazpi City">Albay - Legazpi City</option> 
 
                
                  <option value="Albay - Libon">Albay - Libon</option> 
 
                
                  <option value="Albay - Ligao City">Albay - Ligao City</option> 
 
                
                  <option value="Albay - Malilipot">Albay - Malilipot</option> 
 
                
                  <option value="Albay - Malinao">Albay - Malinao</option> 
 

                
                  <option value="Albay - Manito">Albay - Manito</option> 
 
                
                  <option value="Albay - Oas">Albay - Oas</option> 
 
                
                  <option value="Albay - Pio Duran">Albay - Pio Duran</option> 
 
                
                  <option value="Albay - Polangui">Albay - Polangui</option> 
 
                
                  <option value="Albay - Rapu-Rapu">Albay - Rapu-Rapu</option> 
 
                
                  <option value="Albay - Santo Domingo (Libog)">Albay - Santo Domingo (Libog)</option> 
 
                
                  <option value="Albay - Tabaco City">Albay - Tabaco City</option> 
 
                
                  <option value="Albay - Tiwi">Albay - Tiwi</option> 
 
                
                  <option value="Antique - Anini-Y">Antique - Anini-Y</option> 
 
                
                  <option value="Antique - Barbaza">Antique - Barbaza</option> 
 
                
                  <option value="Antique - Belison">Antique - Belison</option> 
 
                
                  <option value="Antique - Bugasong">Antique - Bugasong</option> 
 
                
                  <option value="Antique - Caluya">Antique - Caluya</option> 
 
                
                  <option value="Antique - Culasi">Antique - Culasi</option> 
 
                
                  <option value="Antique - Hamtic">Antique - Hamtic</option> 
 
                
                  <option value="Antique - Laua-An">Antique - Laua-An</option> 
 
                
                  <option value="Antique - Libertad">Antique - Libertad</option> 
 
                
                  <option value="Antique - Pandan">Antique - Pandan</option> 
 
                
                  <option value="Antique - Patnongon">Antique - Patnongon</option> 
 
                
                  <option value="Antique - San Jose">Antique - San Jose</option> 
 
                
                  <option value="Antique - San Remigio">Antique - San Remigio</option> 
 
                
                  <option value="Antique - Sebaste">Antique - Sebaste</option> 
 
                
                  <option value="Antique - Sibalom">Antique - Sibalom</option> 
 
                
                  <option value="Antique - Tibiao">Antique - Tibiao</option> 
 
                
                  <option value="Antique - Tobias Fornier (Dao)">Antique - Tobias Fornier (Dao)</option> 
 
                
                  <option value="Antique - Valderrama">Antique - Valderrama</option> 
 
                
                  <option value="Apayao - Calanasan (Bayag)">Apayao - Calanasan (Bayag)</option> 
 
                
                  <option value="Apayao - Conner">Apayao - Conner</option> 
 
                
                  <option value="Apayao - Flora">Apayao - Flora</option> 
 
                
                  <option value="Apayao - Kabugao">Apayao - Kabugao</option> 
 
                
                  <option value="Apayao - Luna">Apayao - Luna</option> 
 
                
                  <option value="Apayao - Pudtol">Apayao - Pudtol</option> 
 
                
                  <option value="Apayao - Santa Marcela">Apayao - Santa Marcela</option> 
 
                
                  <option value="Basilan - Lamitan">Basilan - Lamitan</option> 
 
                
                  <option value="Basilan - Lantawan">Basilan - Lantawan</option> 
 
                
                  <option value="Basilan - Maluso">Basilan - Maluso</option> 
 
                
                  <option value="Basilan - Sumisip">Basilan - Sumisip</option> 
 
                
                  <option value="Basilan - Tipo-Tipo">Basilan - Tipo-Tipo</option> 
 
                
                  <option value="Basilan - Tuburan">Basilan - Tuburan</option> 
 
                
                  <option value="Bataan - Abucay">Bataan - Abucay</option> 
 
                
                  <option value="Bataan - Bagac">Bataan - Bagac</option> 
 
                
                  <option value="Bataan - Balanga City">Bataan - Balanga City</option> 
 
                
                  <option value="Bataan - Dinalupihan">Bataan - Dinalupihan</option> 
 
                
                  <option value="Bataan - Hermosa">Bataan - Hermosa</option> 
 
                
                  <option value="Bataan - Limay">Bataan - Limay</option> 
 
                
                  <option value="Bataan - Mariveles">Bataan - Mariveles</option> 
 
                
                  <option value="Bataan - Morong">Bataan - Morong</option> 
 
                
                  <option value="Bataan - Orani">Bataan - Orani</option> 
 
                
                  <option value="Bataan - Orion">Bataan - Orion</option> 
 
                
                  <option value="Bataan - Pilar">Bataan - Pilar</option> 
 
                
                  <option value="Bataan - Samal">Bataan - Samal</option> 
 
                
                  <option value="Batanes - Basco">Batanes - Basco</option> 
 
                
                  <option value="Batanes - Itbayat">Batanes - Itbayat</option> 
 
                
                  <option value="Batanes - Ivana">Batanes - Ivana</option> 
 
                
                  <option value="Batanes - Mahatao">Batanes - Mahatao</option> 
 
                
                  <option value="Batanes - Sabtang">Batanes - Sabtang</option> 
 
                
                  <option value="Batanes - Uyugan">Batanes - Uyugan</option> 
 
                
                  <option value="Batangas - Agoncillo">Batangas - Agoncillo</option> 
 
                
                  <option value="Batangas - Alitagtag">Batangas - Alitagtag</option> 
 
                
                  <option value="Batangas - Balayan">Batangas - Balayan</option> 
 
                
                  <option value="Batangas - Balete">Batangas - Balete</option> 
 
                
                  <option value="Batangas - Batangas City">Batangas - Batangas City</option> 
 
                
                  <option value="Batangas - Bauan">Batangas - Bauan</option> 
 
                
                  <option value="Batangas - Calaca">Batangas - Calaca</option> 
 
                
                  <option value="Batangas - Calatagan">Batangas - Calatagan</option> 
 
                
                  <option value="Batangas - Cuenca">Batangas - Cuenca</option> 
 
                
                  <option value="Batangas - Ibaan">Batangas - Ibaan</option> 
 
                
                  <option value="Batangas - Laurel">Batangas - Laurel</option> 
 
                
                  <option value="Batangas - Lemery">Batangas - Lemery</option> 
 
                
                  <option value="Batangas - Lian">Batangas - Lian</option> 
 
                
                  <option value="Batangas - Lipa City">Batangas - Lipa City</option> 
 
                
                  <option value="Batangas - Lobo">Batangas - Lobo</option> 
 
                
                  <option value="Batangas - Mabini">Batangas - Mabini</option> 
 
                
                  <option value="Batangas - Malvar">Batangas - Malvar</option> 
 
                
                  <option value="Batangas - Mataas Na Kahoy">Batangas - Mataas Na Kahoy</option> 
 
                
                  <option value="Batangas - Nasugbu">Batangas - Nasugbu</option> 
 
                
                  <option value="Batangas - Padre Garcia">Batangas - Padre Garcia</option> 
 
                
                  <option value="Batangas - San Jose">Batangas - San Jose</option> 
 
                
                  <option value="Batangas - San Juan">Batangas - San Juan</option> 
 
                
                  <option value="Batangas - San Luis">Batangas - San Luis</option> 
 
                
                  <option value="Batangas - San Nicolas">Batangas - San Nicolas</option> 
 
                
                  <option value="Batangas - San Pascual">Batangas - San Pascual</option> 
 
                
                  <option value="Batangas - Santa Teresita">Batangas - Santa Teresita</option> 
 
                
                  <option value="Batangas - Santo Tomas">Batangas - Santo Tomas</option> 
 
                
                  <option value="Batangas - Taal">Batangas - Taal</option> 
 
                
                  <option value="Batangas - Talisay">Batangas - Talisay</option> 
 
                
                  <option value="Batangas - Tanauan City">Batangas - Tanauan City</option> 
 
                
                  <option value="Batangas - Taysan">Batangas - Taysan</option> 
 
                
                  <option value="Batangas - Tingloy">Batangas - Tingloy</option> 
 
                
                  <option value="Batangas - Tuy">Batangas - Tuy</option> 
 
                
                  <option value="Benguet - Atok">Benguet - Atok</option> 
 
                
                  <option value="Benguet - Baguio City">Benguet - Baguio City</option> 
 
                
                  <option value="Benguet - Bakun">Benguet - Bakun</option> 
 
                
                  <option value="Benguet - Bokod">Benguet - Bokod</option> 
 
                
                  <option value="Benguet - Buguias">Benguet - Buguias</option> 
 
                
                  <option value="Benguet - Itogon">Benguet - Itogon</option> 
 
                
                  <option value="Benguet - Kabayan">Benguet - Kabayan</option> 
 
                
                  <option value="Benguet - Kapangan">Benguet - Kapangan</option> 
 
                
                  <option value="Benguet - Kibungan">Benguet - Kibungan</option> 
 
                
                  <option value="Benguet - La Trinidad">Benguet - La Trinidad</option> 
 
                
                  <option value="Benguet - Mankayan">Benguet - Mankayan</option> 
 
                
                  <option value="Benguet - Sablan">Benguet - Sablan</option> 
 
                
                  <option value="Benguet - Tubao">Benguet - Tubao</option> 
 
                
                  <option value="Benguet - Tublay">Benguet - Tublay</option> 
 
                
                  <option value="Biliran - Almeria">Biliran - Almeria</option> 
 
                
                  <option value="Biliran - Biliran">Biliran - Biliran</option> 
 
                
                  <option value="Biliran - Cabucgayan">Biliran - Cabucgayan</option> 
 
                
                  <option value="Biliran - Caibiran">Biliran - Caibiran</option> 
 
                
                  <option value="Biliran - Culaba">Biliran - Culaba</option> 
 
                
                  <option value="Biliran - Kawayan">Biliran - Kawayan</option> 
 
                
                  <option value="Biliran - Maripipi">Biliran - Maripipi</option> 
 
                
                  <option value="Biliran - Naval">Biliran - Naval</option> 
 
                
                  <option value="Bohol - Albuquerque">Bohol - Albuquerque</option> 
 
                
                  <option value="Bohol - Alicia">Bohol - Alicia</option> 
 
                
                  <option value="Bohol - Anda">Bohol - Anda</option> 
 
                
                  <option value="Bohol - Antequera">Bohol - Antequera</option> 
 
                
                  <option value="Bohol - Baclayon">Bohol - Baclayon</option> 
 
                
                  <option value="Bohol - Balilihan">Bohol - Balilihan</option> 
 
                
                  <option value="Bohol - Batuan">Bohol - Batuan</option> 
 
                
                  <option value="Bohol - Bien Unido">Bohol - Bien Unido</option> 
 
                
                  <option value="Bohol - Bilar">Bohol - Bilar</option> 
 
                
                  <option value="Bohol - Buenavista">Bohol - Buenavista</option> 
 
                
                  <option value="Bohol - Calape">Bohol - Calape</option> 
 
                
                  <option value="Bohol - Candijay">Bohol - Candijay</option> 
 
                
                  <option value="Bohol - Carmen">Bohol - Carmen</option> 
 
                
                  <option value="Bohol - Catigbian">Bohol - Catigbian</option> 
 
                
                  <option value="Bohol - Clarin">Bohol - Clarin</option> 
 
                
                  <option value="Bohol - Corella">Bohol - Corella</option> 
 
                
                  <option value="Bohol - Cortes">Bohol - Cortes</option> 
 
                
                  <option value="Bohol - Dagohoy">Bohol - Dagohoy</option> 
 
                
                  <option value="Bohol - Danao">Bohol - Danao</option> 
 
                
                  <option value="Bohol - Dauis">Bohol - Dauis</option> 
 
                
                  <option value="Bohol - Dimiao">Bohol - Dimiao</option> 
 
                
                  <option value="Bohol - Duero">Bohol - Duero</option> 
 
                
                  <option value="Bohol - Garcia Hernandez">Bohol - Garcia Hernandez</option> 
 
                
                  <option value="Bohol - Guindulman">Bohol - Guindulman</option> 
 
                
                  <option value="Bohol - Inabangay">Bohol - Inabangay</option> 
 
                
                  <option value="Bohol - Jagna">Bohol - Jagna</option> 
 
                
                  <option value="Bohol - Jetafe">Bohol - Jetafe</option> 
 
                
                  <option value="Bohol - Lila">Bohol - Lila</option> 
 
                
                  <option value="Bohol - Loay">Bohol - Loay</option> 
 
                
                  <option value="Bohol - Loboc">Bohol - Loboc</option> 
 
                
                  <option value="Bohol - Loon">Bohol - Loon</option> 
 
                
                  <option value="Bohol - Mabini">Bohol - Mabini</option> 
 
                
                  <option value="Bohol - Maribojoc">Bohol - Maribojoc</option> 
 
                
                  <option value="Bohol - Panglao">Bohol - Panglao</option> 
 
                
                  <option value="Bohol - Pilar">Bohol - Pilar</option> 
 
                
                  <option value="Bohol - Pres. Carlos P. Garcia (Pitogo">Bohol - Pres. Carlos P. Garcia (Pitogo</option> 
 
                
                  <option value="Bohol - Sagbayan (Borja)">Bohol - Sagbayan (Borja)</option> 
 
                
                  <option value="Bohol - San Isidro">Bohol - San Isidro</option> 
 
                
                  <option value="Bohol - San Miguel">Bohol - San Miguel</option> 
 
                
                  <option value="Bohol - Sevilla">Bohol - Sevilla</option> 
 
                
                  <option value="Bohol - Sierra Bullones">Bohol - Sierra Bullones</option> 
 
                
                  <option value="Bohol - Sikatuna">Bohol - Sikatuna</option> 
 
                
                  <option value="Bohol - Tagbilaran City">Bohol - Tagbilaran City</option> 
 
                
                  <option value="Bohol - Talibon">Bohol - Talibon</option> 
 
                
                  <option value="Bohol - Trinidad">Bohol - Trinidad</option> 
 
                
                  <option value="Bohol - Tubigon">Bohol - Tubigon</option> 
 
                
                  <option value="Bohol - Ubay">Bohol - Ubay</option> 
 
                
                  <option value="Bohol - Valencia">Bohol - Valencia</option> 
 
                

                  <option value="Bukidnon - Baungon">Bukidnon - Baungon</option> 
 
                
                  <option value="Bukidnon - Cabanglasan">Bukidnon - Cabanglasan</option> 
 
                
                  <option value="Bukidnon - Damulog">Bukidnon - Damulog</option> 
 
                
                  <option value="Bukidnon - Dangcagan">Bukidnon - Dangcagan</option> 
 
                
                  <option value="Bukidnon - Don Carlos">Bukidnon - Don Carlos</option> 
 
                
                  <option value="Bukidnon - Impasug-Ong">Bukidnon - Impasug-Ong</option> 
 
                
                  <option value="Bukidnon - Kadingilan">Bukidnon - Kadingilan</option> 
 
                
                  <option value="Bukidnon - Kalilangan">Bukidnon - Kalilangan</option> 
 
                
                  <option value="Bukidnon - Kibawe">Bukidnon - Kibawe</option> 
 
                
                  <option value="Bukidnon - Kitaotao">Bukidnon - Kitaotao</option> 
 
                
                  <option value="Bukidnon - Lantapan">Bukidnon - Lantapan</option> 
 
                
                  <option value="Bukidnon - Libona">Bukidnon - Libona</option> 
 
                
                  <option value="Bukidnon - Malaybalay City (Capital)">Bukidnon - Malaybalay City (Capital)</option> 
 
                
                  <option value="Bukidnon - Malitbog">Bukidnon - Malitbog</option> 
 
                
                  <option value="Bukidnon - Manolo Fortich">Bukidnon - Manolo Fortich</option> 
 
                
                  <option value="Bukidnon - Maramag">Bukidnon - Maramag</option> 
 
                
                  <option value="Bukidnon - Pangantucan">Bukidnon - Pangantucan</option> 
 
                
                  <option value="Bukidnon - Quezon">Bukidnon - Quezon</option> 
 
                
                  <option value="Bukidnon - San Fernando">Bukidnon - San Fernando</option> 
 
                
                  <option value="Bukidnon - Sumilao">Bukidnon - Sumilao</option> 
 
                
                  <option value="Bukidnon - Talakag">Bukidnon - Talakag</option> 
 
                
                  <option value="Bulacan - Angat">Bulacan - Angat</option> 
 
                
                  <option value="Bulacan - Balagtas (Bigaa)">Bulacan - Balagtas (Bigaa)</option> 
 
                
                  <option value="Bulacan - Baliuag">Bulacan - Baliuag</option> 
 
                
                  <option value="Bulacan - Bocaue">Bulacan - Bocaue</option> 
 
                
                  <option value="Bulacan - Bulacan">Bulacan - Bulacan</option> 
 
                
                  <option value="Bulacan - Bustos">Bulacan - Bustos</option> 
 
                
                  <option value="Bulacan - Calumpit">Bulacan - Calumpit</option> 
 
                
                  <option value="Bulacan - Dona Remedios Trinidad">Bulacan - Dona Remedios Trinidad</option> 
 
                
                  <option value="Bulacan - Guiguinto">Bulacan - Guiguinto</option> 
 
                
                  <option value="Bulacan - Hagonoy">Bulacan - Hagonoy</option> 
 
                
                  <option value="Bulacan - Malolos">Bulacan - Malolos</option> 
 
                
                  <option value="Bulacan - Marilao">Bulacan - Marilao</option> 
 
                
                  <option value="Bulacan - Meycauayan">Bulacan - Meycauayan</option> 
 
                
                  <option value="Bulacan - Norzagaray">Bulacan - Norzagaray</option> 
 
                
                  <option value="Bulacan - Obando">Bulacan - Obando</option> 
 
                
                  <option value="Bulacan - Pandi">Bulacan - Pandi</option> 
 
                
                  <option value="Bulacan - Paombong">Bulacan - Paombong</option> 
 
                
                  <option value="Bulacan - Plaridel">Bulacan - Plaridel</option> 
 
                
                  <option value="Bulacan - Pulilan">Bulacan - Pulilan</option> 
 
                
                  <option value="Bulacan - San Ildefonso">Bulacan - San Ildefonso</option> 
 
                
                  <option value="Bulacan - San Jose Del Monte City">Bulacan - San Jose Del Monte City</option> 
 
                
                  <option value="Bulacan - San Miguel">Bulacan - San Miguel</option> 
 
                
                  <option value="Bulacan - San Rafael">Bulacan - San Rafael</option> 
 
                
                  <option value="Bulacan - Santa Maria">Bulacan - Santa Maria</option> 
 
                
                  <option value="Cagayan - Abulug">Cagayan - Abulug</option> 
 
                
                  <option value="Cagayan - Alcala">Cagayan - Alcala</option> 
 
                
                  <option value="Cagayan - Allacapan">Cagayan - Allacapan</option> 
 
                
                  <option value="Cagayan - Amulung">Cagayan - Amulung</option> 
 
                
                  <option value="Cagayan - Aparri">Cagayan - Aparri</option> 
 
                
                  <option value="Cagayan - Baggao">Cagayan - Baggao</option> 
 
                
                  <option value="Cagayan - Ballesteros">Cagayan - Ballesteros</option> 
 
                
                  <option value="Cagayan - Buguey">Cagayan - Buguey</option> 
 
                
                  <option value="Cagayan - Calayan">Cagayan - Calayan</option> 
 
                
                  <option value="Cagayan - Camalaniugan">Cagayan - Camalaniugan</option> 
 
                
                  <option value="Cagayan - Claveria">Cagayan - Claveria</option> 
 
                
                  <option value="Cagayan - Enrile">Cagayan - Enrile</option> 
 
                
                  <option value="Cagayan - Gattaran">Cagayan - Gattaran</option> 
 
                
                  <option value="Cagayan - Gonzaga">Cagayan - Gonzaga</option> 
 
                
                  <option value="Cagayan - Iguig">Cagayan - Iguig</option> 
 
                
                  <option value="Cagayan - Lal-Lo">Cagayan - Lal-Lo</option> 
 
                
                  <option value="Cagayan - Lasam">Cagayan - Lasam</option> 
 
                
                  <option value="Cagayan - Pamplona">Cagayan - Pamplona</option> 
 
                
                  <option value="Cagayan - Penablanca">Cagayan - Penablanca</option> 
 
                
                  <option value="Cagayan - Piat">Cagayan - Piat</option> 
 
                
                  <option value="Cagayan - Rizal">Cagayan - Rizal</option> 
 
                
                  <option value="Cagayan - Sanchez-Mira">Cagayan - Sanchez-Mira</option> 
 
                
                  <option value="Cagayan - Santa Ana">Cagayan - Santa Ana</option> 
 
                
                  <option value="Cagayan - Santa Praxedes">Cagayan - Santa Praxedes</option> 
 
                
                  <option value="Cagayan - Santa Teresita">Cagayan - Santa Teresita</option> 
 
                
                  <option value="Cagayan - Santo Nino (Faire)">Cagayan - Santo Nino (Faire)</option> 
 
                
                  <option value="Cagayan - Solana">Cagayan - Solana</option> 
 
                
                  <option value="Cagayan - Tuao">Cagayan - Tuao</option> 
 
                
                  <option value="Cagayan - Tuguegarao City">Cagayan - Tuguegarao City</option> 
 
                
                  <option value="Camarines Norte - Basud">Camarines Norte - Basud</option> 
 
                
                  <option value="Camarines Norte - Capalonga">Camarines Norte - Capalonga</option> 
 
                
                  <option value="Camarines Norte - Daet">Camarines Norte - Daet</option> 
 
                
                  <option value="Camarines Norte - Jose Panganiban">Camarines Norte - Jose Panganiban</option> 
 
                
                  <option value="Camarines Norte - Labo">Camarines Norte - Labo</option> 
 
                
                  <option value="Camarines Norte - Mercedes">Camarines Norte - Mercedes</option> 
 
                
                  <option value="Camarines Norte - Paracale">Camarines Norte - Paracale</option> 
 
                
                  <option value="Camarines Norte - San Lorenzo Ruiz (Imelda)">Camarines Norte - San Lorenzo Ruiz (Imelda)</option> 
 
                
                  <option value="Camarines Norte - San Vicente">Camarines Norte - San Vicente</option> 
 
                
                  <option value="Camarines Norte - Santa Elena">Camarines Norte - Santa Elena</option> 
 
                
                  <option value="Camarines Norte - Talisay">Camarines Norte - Talisay</option> 
 
                
                  <option value="Camarines Norte - Vinzons">Camarines Norte - Vinzons</option> 
 
                
                  <option value="Camarines Sur - Baao">Camarines Sur - Baao</option> 
 
                
                  <option value="Camarines Sur - Balatan">Camarines Sur - Balatan</option> 
 
                
                  <option value="Camarines Sur - Bato">Camarines Sur - Bato</option> 
 
                
                  <option value="Camarines Sur - Buhi">Camarines Sur - Buhi</option> 
 
                
                  <option value="Camarines Sur - Bula">Camarines Sur - Bula</option> 
 
                
                  <option value="Camarines Sur - Camaligan">Camarines Sur - Camaligan</option> 
 
                
                  <option value="Camarines Sur - Canaman">Camarines Sur - Canaman</option> 
 
                
                  <option value="Camarines Sur - Del Gallego">Camarines Sur - Del Gallego</option> 
 
                
                  <option value="Camarines Sur - Gainza">Camarines Sur - Gainza</option> 
 
                
                  <option value="Camarines Sur - Goa">Camarines Sur - Goa</option> 
 
                
                  <option value="Camarines Sur - Iriga City">Camarines Sur - Iriga City</option> 
 
                
                  <option value="Camarines Sur - Lagonoy">Camarines Sur - Lagonoy</option> 
 
                
                  <option value="Camarines Sur - Libmanan">Camarines Sur - Libmanan</option> 
 
                
                  <option value="Camarines Sur - Lupi">Camarines Sur - Lupi</option> 
 
                
                  <option value="Camarines Sur - Magarao">Camarines Sur - Magarao</option> 
 
                
                  <option value="Camarines Sur - Milaor">Camarines Sur - Milaor</option> 
 
                
                  <option value="Camarines Sur - Minalabac">Camarines Sur - Minalabac</option> 
 
                
                  <option value="Camarines Sur - Nabua">Camarines Sur - Nabua</option> 
 
                
                  <option value="Camarines Sur - Naga City">Camarines Sur - Naga City</option> 
 
                
                  <option value="Camarines Sur - Ocampo">Camarines Sur - Ocampo</option> 
 
                
                  <option value="Camarines Sur - Pamplona">Camarines Sur - Pamplona</option> 
 
                
                  <option value="Camarines Sur - Pasacao">Camarines Sur - Pasacao</option> 
 
                
                  <option value="Camarines Sur - Pili">Camarines Sur - Pili</option> 
 
                
                  <option value="Camarines Sur - Presentacion (Parubcan)">Camarines Sur - Presentacion (Parubcan)</option> 
 
                
                  <option value="Camarines Sur - Ragay">Camarines Sur - Ragay</option> 
 
                
                  <option value="Camarines Sur - Sagnay">Camarines Sur - Sagnay</option> 
 
                
                  <option value="Camarines Sur - San Fernando">Camarines Sur - San Fernando</option> 
 
                
                  <option value="Camarines Sur - San Jose">Camarines Sur - San Jose</option> 
 
                
                  <option value="Camarines Sur - Sipocot">Camarines Sur - Sipocot</option> 
 
                
                  <option value="Camarines Sur - Siruma">Camarines Sur - Siruma</option> 
 
                
                  <option value="Camarines Sur - Tigaon">Camarines Sur - Tigaon</option> 
 
                
                  <option value="Camarines Sur - Tinambac">Camarines Sur - Tinambac</option> 
 
                
                  <option value="Camiguin - Catarman">Camiguin - Catarman</option> 
 
                
                  <option value="Camiguin - Guinsiliban">Camiguin - Guinsiliban</option> 
 
                
                  <option value="Camiguin - Mahinog">Camiguin - Mahinog</option> 
 
                
                  <option value="Camiguin - Mambajao">Camiguin - Mambajao</option> 
 
                
                  <option value="Camiguin - Sagay">Camiguin - Sagay</option> 
 
                
                  <option value="Capiz - Cuartero">Capiz - Cuartero</option> 
 
                
                  <option value="Capiz - Dao">Capiz - Dao</option> 
 
                
                  <option value="Capiz - Dumalag">Capiz - Dumalag</option> 
 
                
                  <option value="Capiz - Dumarao">Capiz - Dumarao</option> 
 
                
                  <option value="Capiz - Ivisan">Capiz - Ivisan</option> 
 
                
                  <option value="Capiz - Jamindan">Capiz - Jamindan</option> 
 
                
                  <option value="Capiz - Ma-Ayon">Capiz - Ma-Ayon</option> 
 
                
                  <option value="Capiz - Mambusao">Capiz - Mambusao</option> 
 
                
                  <option value="Capiz - Panay">Capiz - Panay</option> 
 
                
                  <option value="Capiz - Panitan">Capiz - Panitan</option> 
 
                
                  <option value="Capiz - Pilar">Capiz - Pilar</option> 
 
                
                  <option value="Capiz - Pontevedra">Capiz - Pontevedra</option> 
 
                
                  <option value="Capiz - President Roxas">Capiz - President Roxas</option> 
 
                
                  <option value="Capiz - Roxas City (Capital)">Capiz - Roxas City (Capital)</option> 
 
                
                  <option value="Capiz - Sapi-An">Capiz - Sapi-An</option> 
 
                
                  <option value="Capiz - Sigma">Capiz - Sigma</option> 
 
                
                  <option value="Capiz - Tapaz">Capiz - Tapaz</option> 
 
                
                  <option value="Catanduanes - Bagamanoc">Catanduanes - Bagamanoc</option> 
 
                
                  <option value="Catanduanes - Baras">Catanduanes - Baras</option> 
 
                
                  <option value="Catanduanes - Bato">Catanduanes - Bato</option> 
 
                
                  <option value="Catanduanes - Caramoran">Catanduanes - Caramoran</option> 
 
                
                  <option value="Catanduanes - Gigmoto">Catanduanes - Gigmoto</option> 
 
                
                  <option value="Catanduanes - Pandan">Catanduanes - Pandan</option> 
 
                
                  <option value="Catanduanes - Panganiban">Catanduanes - Panganiban</option> 
 
                
                  <option value="Catanduanes - San Andres (Calolbon)">Catanduanes - San Andres (Calolbon)</option> 
 
                
                  <option value="Catanduanes - San Miguel">Catanduanes - San Miguel</option> 
 
                
                  <option value="Catanduanes - Viga">Catanduanes - Viga</option> 
 
                
                  <option value="Catanduanes - Virac">Catanduanes - Virac</option> 
 
                
                  <option value="Cavite - Alfonso">Cavite - Alfonso</option> 
 
                
                  <option value="Cavite - Amadeo">Cavite - Amadeo</option> 
 
                
                  <option value="Cavite - Bacoor">Cavite - Bacoor</option> 
 
                
                  <option value="Cavite - Carmona">Cavite - Carmona</option> 
 
                
                  <option value="Cavite - Cavite City">Cavite - Cavite City</option> 
 
                
                  <option value="Cavite - Dasmarinas">Cavite - Dasmarinas</option> 
 
                
                  <option value="Cavite - Gen. Mariano Alvarez">Cavite - Gen. Mariano Alvarez</option> 
 
                
                  <option value="Cavite - General Emilio Aguinaldo">Cavite - General Emilio Aguinaldo</option> 
 
                
                  <option value="Cavite - General Trias">Cavite - General Trias</option> 
 
                
                  <option value="Cavite - Imus">Cavite - Imus</option> 
 
                
                  <option value="Cavite - Indang">Cavite - Indang</option> 
 
                
                  <option value="Cavite - Kawit">Cavite - Kawit</option> 
 
                
                  <option value="Cavite - Magallanes">Cavite - Magallanes</option> 
 
                
                  <option value="Cavite - Maragondon">Cavite - Maragondon</option> 
 
                
                  <option value="Cavite - Mendez (Mendez-Nunez)">Cavite - Mendez (Mendez-Nunez)</option> 
 
                
                  <option value="Cavite - Naic">Cavite - Naic</option> 
 
                
                  <option value="Cavite - Noveleta">Cavite - Noveleta</option> 
 
                
                  <option value="Cavite - Rosario">Cavite - Rosario</option> 
 
                
                  <option value="Cavite - Silang">Cavite - Silang</option> 
 
                
                  <option value="Cavite - Tagaytay City">Cavite - Tagaytay City</option> 
 
                
                  <option value="Cavite - Tanza">Cavite - Tanza</option> 
 
                
                  <option value="Cavite - Ternate">Cavite - Ternate</option> 
 
                
                  <option value="Cavite - Trece Marteres City (Capital)">Cavite - Trece Marteres City (Capital)</option> 
 
                
                  <option value="Cebu - Alcantara">Cebu - Alcantara</option> 
 
                
                  <option value="Cebu - Alcoy">Cebu - Alcoy</option> 
 
                
                  <option value="Cebu - Alegria">Cebu - Alegria</option> 
 
                
                  <option value="Cebu - Aloguinsa">Cebu - Aloguinsa</option> 
 
                
                  <option value="Cebu - Argao">Cebu - Argao</option> 
 
                
                  <option value="Cebu - Asturias">Cebu - Asturias</option> 
 
                
                  <option value="Cebu - Badian">Cebu - Badian</option> 
 
                
                  <option value="Cebu - Balamban">Cebu - Balamban</option> 
 
                
                  <option value="Cebu - Bantayan">Cebu - Bantayan</option> 
 
                
                  <option value="Cebu - Barili">Cebu - Barili</option> 
 
                
                  <option value="Cebu - Bogo">Cebu - Bogo</option> 
 
                
                  <option value="Cebu - Boljoon">Cebu - Boljoon</option> 
 
                
                  <option value="Cebu - Borbon">Cebu - Borbon</option> 
 
                
                  <option value="Cebu - Carcar">Cebu - Carcar</option> 
 
                
                  <option value="Cebu - Carmen">Cebu - Carmen</option> 
 
                
                  <option value="Cebu - Catmon">Cebu - Catmon</option> 
 
                
                  <option value="Cebu - Cebu City">Cebu - Cebu City</option> 
 
                
                  <option value="Cebu - Compostela">Cebu - Compostela</option> 
 
                
                  <option value="Cebu - Consolacion">Cebu - Consolacion</option> 
 
                
                  <option value="Cebu - Cordova">Cebu - Cordova</option> 
 
                
                  <option value="Cebu - Daanbantayan">Cebu - Daanbantayan</option> 
 
                
                  <option value="Cebu - Dalaguete">Cebu - Dalaguete</option> 
 
                
                  <option value="Cebu - Danao City">Cebu - Danao City</option> 
 
                
                  <option value="Cebu - Dumanjug">Cebu - Dumanjug</option> 
 
                
                  <option value="Cebu - Ginatilan">Cebu - Ginatilan</option> 
 
                
                  <option value="Cebu - Lapu-Lapu City">Cebu - Lapu-Lapu City</option> 
 
                
                  <option value="Cebu - Liloan">Cebu - Liloan</option> 
 
                
                  <option value="Cebu - Madridejos">Cebu - Madridejos</option> 
 
                
                  <option value="Cebu - Malabuyoc">Cebu - Malabuyoc</option> 
 
                
                  <option value="Cebu - Mandaue City">Cebu - Mandaue City</option> 
 
                
                  <option value="Cebu - Medellin">Cebu - Medellin</option> 
 
                
                  <option value="Cebu - Minglanilla">Cebu - Minglanilla</option> 
 
                
                  <option value="Cebu - Moalboal">Cebu - Moalboal</option> 
 
                
                  <option value="Cebu - Naga">Cebu - Naga</option> 
 
                
                  <option value="Cebu - Oslob">Cebu - Oslob</option> 
 
                
                  <option value="Cebu - Pilar">Cebu - Pilar</option> 
 
                
                  <option value="Cebu - Pinamungahan">Cebu - Pinamungahan</option> 
 
                
                  <option value="Cebu - Popo">Cebu - Popo</option> 
 
                
                  <option value="Cebu - Ronda">Cebu - Ronda</option> 
 
                
                  <option value="Cebu - Samboan">Cebu - Samboan</option> 
 
                
                  <option value="Cebu - San Fernando">Cebu - San Fernando</option> 
 
                
                  <option value="Cebu - San Francisco">Cebu - San Francisco</option> 
 
                
                  <option value="Cebu - San Remigio">Cebu - San Remigio</option> 
 
                
                  <option value="Cebu - Santa Fe">Cebu - Santa Fe</option> 
 
                
                  <option value="Cebu - Santander">Cebu - Santander</option> 
 
                
                  <option value="Cebu - Sibonga">Cebu - Sibonga</option> 
 
                
                  <option value="Cebu - Sogod">Cebu - Sogod</option> 
 
                
                  <option value="Cebu - Tabogon">Cebu - Tabogon</option> 
 
                
                  <option value="Cebu - Tabuelan">Cebu - Tabuelan</option> 
 
                
                  <option value="Cebu - Talisay City">Cebu - Talisay City</option> 
 
                
                  <option value="Cebu - Tuburan">Cebu - Tuburan</option> 
 
                
                  <option value="Cebu - Tudela">Cebu - Tudela</option> 
 
                
                  <option value="Compostella Valley - Compostela">Compostella Valley - Compostela</option> 
 
                
                  <option value="Compostella Valley - Laak (San Vicente)">Compostella Valley - Laak (San Vicente)</option> 
 
                
                  <option value="Compostella Valley - Mabini (Dona Alicia)">Compostella Valley - Mabini (Dona Alicia)</option> 
 
                
                  <option value="Compostella Valley - Maco">Compostella Valley - Maco</option> 
 
                
                  <option value="Compostella Valley - Maragusan (San Mariano)">Compostella Valley - Maragusan (San Mariano)</option> 
 
                
                  <option value="Compostella Valley - Mawab">Compostella Valley - Mawab</option> 
 
                
                  <option value="Compostella Valley - Monkayo">Compostella Valley - Monkayo</option> 
 
                
                  <option value="Compostella Valley - Montevista">Compostella Valley - Montevista</option> 
 
                
                  <option value="Compostella Valley - Nabunturan">Compostella Valley - Nabunturan</option> 
 
                
                  <option value="Compostella Valley - New Bataan">Compostella Valley - New Bataan</option> 
 
                
                  <option value="Compostella Valley - Pantukan">Compostella Valley - Pantukan</option> 
 
                
                  <option value="Davao Del Norte - Asuncion (Saug)">Davao Del Norte - Asuncion (Saug)</option> 
 
                
                  <option value="Davao Del Norte - Braulio E. Dujali">Davao Del Norte - Braulio E. Dujali</option> 
 
                
                  <option value="Davao Del Norte - Carmen">Davao Del Norte - Carmen</option> 
 
                
                  <option value="Davao Del Norte - Kapalong">Davao Del Norte - Kapalong</option> 
 
                
                  <option value="Davao Del Norte - New Corella">Davao Del Norte - New Corella</option> 
 
                
                  <option value="Davao Del Norte - Panabo City">Davao Del Norte - Panabo City</option> 
 
                
                  <option value="Davao Del Norte - Samal Island Garden City">Davao Del Norte - Samal Island Garden City</option> 
 
                
                  <option value="Davao Del Norte - Santo Tomas">Davao Del Norte - Santo Tomas</option> 
 
                
                  <option value="Davao Del Norte - Tagum City (Capital)">Davao Del Norte - Tagum City (Capital)</option> 
 
                
                  <option value="Davao Del Norte - Talaingod">Davao Del Norte - Talaingod</option> 
 
                
                  <option value="Davao Del Sur - Bansalan">Davao Del Sur - Bansalan</option> 
 
                
                  <option value="Davao Del Sur - Davao City">Davao Del Sur - Davao City</option> 
 
                
                  <option value="Davao Del Sur - Digos City (Capital)">Davao Del Sur - Digos City (Capital)</option> 
 
                
                  <option value="Davao Del Sur - Don Marcelino">Davao Del Sur - Don Marcelino</option> 
 
                
                  <option value="Davao Del Sur - Hagonoy">Davao Del Sur - Hagonoy</option> 
 
                

                  <option value="Davao Del Sur - Jose Abad Santos (Trinidad)">Davao Del Sur - Jose Abad Santos (Trinidad)</option> 
 
                
                  <option value="Davao Del Sur - Kiblawan">Davao Del Sur - Kiblawan</option> 
 
                
                  <option value="Davao Del Sur - Magsaysay">Davao Del Sur - Magsaysay</option> 
 
                
                  <option value="Davao Del Sur - Malalag">Davao Del Sur - Malalag</option> 
 
                
                  <option value="Davao Del Sur - Malita">Davao Del Sur - Malita</option> 
 
                
                  <option value="Davao Del Sur - Matanao">Davao Del Sur - Matanao</option> 
 
                
                  <option value="Davao Del Sur - Padada">Davao Del Sur - Padada</option> 
 
                
                  <option value="Davao Del Sur - Santa Cruz">Davao Del Sur - Santa Cruz</option> 
 
                
                  <option value="Davao Del Sur - Santa Maria">Davao Del Sur - Santa Maria</option> 
 
                
                  <option value="Davao Del Sur - Sarangani">Davao Del Sur - Sarangani</option> 
 
                
                  <option value="Davao Del Sur - Sulop">Davao Del Sur - Sulop</option> 
 
                
                  <option value="Davao Oriental - Baganga">Davao Oriental - Baganga</option> 
 
                
                  <option value="Davao Oriental - Banaybanay">Davao Oriental - Banaybanay</option> 
 
                
                  <option value="Davao Oriental - Boston">Davao Oriental - Boston</option> 
 
                
                  <option value="Davao Oriental - Caraga">Davao Oriental - Caraga</option> 
 
                
                  <option value="Davao Oriental - Cateel">Davao Oriental - Cateel</option> 
 
                
                  <option value="Davao Oriental - Lupon">Davao Oriental - Lupon</option> 
 
                
                  <option value="Davao Oriental - Manay">Davao Oriental - Manay</option> 
 
                
                  <option value="Davao Oriental - San Isidro">Davao Oriental - San Isidro</option> 
 
                
                  <option value="Davao Oriental - Tarragona">Davao Oriental - Tarragona</option> 
 
                
                  <option value="Eastern Samar - Arteche">Eastern Samar - Arteche</option> 
 
                
                  <option value="Eastern Samar - Balangiga">Eastern Samar - Balangiga</option> 
 
                
                  <option value="Eastern Samar - Balangkayan">Eastern Samar - Balangkayan</option> 
 
                
                  <option value="Eastern Samar - Borongan (Capital)">Eastern Samar - Borongan (Capital)</option> 
 
                
                  <option value="Eastern Samar - Can-Avid">Eastern Samar - Can-Avid</option> 
 
                
                  <option value="Eastern Samar - Dolores">Eastern Samar - Dolores</option> 
 
                
                  <option value="Eastern Samar - General Macarthur">Eastern Samar - General Macarthur</option> 
 
                
                  <option value="Eastern Samar - Giporlos">Eastern Samar - Giporlos</option> 
 
                
                  <option value="Eastern Samar - Guiuan">Eastern Samar - Guiuan</option> 
 
                
                  <option value="Eastern Samar - Hernani">Eastern Samar - Hernani</option> 
 
                
                  <option value="Eastern Samar - Jipapad">Eastern Samar - Jipapad</option> 
 
                
                  <option value="Eastern Samar - Lawaan">Eastern Samar - Lawaan</option> 
 
                
                  <option value="Eastern Samar - Llorente">Eastern Samar - Llorente</option> 
 
                
                  <option value="Eastern Samar - Maslog">Eastern Samar - Maslog</option> 
 
                
                  <option value="Eastern Samar - Maydolong">Eastern Samar - Maydolong</option> 
 
                
                  <option value="Eastern Samar - Mercedes">Eastern Samar - Mercedes</option> 
 
                
                  <option value="Eastern Samar - Oras">Eastern Samar - Oras</option> 
 
                
                  <option value="Eastern Samar - Quinapondan">Eastern Samar - Quinapondan</option> 
 
                
                  <option value="Eastern Samar - Salcedo">Eastern Samar - Salcedo</option> 
 
                
                  <option value="Eastern Samar - San Julian">Eastern Samar - San Julian</option> 
 
                
                  <option value="Eastern Samar - San Policarpo">Eastern Samar - San Policarpo</option> 
 
                
                  <option value="Eastern Samar - Sulat">Eastern Samar - Sulat</option> 
 
                
                  <option value="Eastern Samar - Taft">Eastern Samar - Taft</option> 
 
                
                  <option value="Guimaras - Buenavista">Guimaras - Buenavista</option> 
 
                
                  <option value="Guimaras - Jordan">Guimaras - Jordan</option> 
 
                
                  <option value="Guimaras - Nueva Valencia">Guimaras - Nueva Valencia</option> 
 
                
                  <option value="Guimaras - San Lorenzo">Guimaras - San Lorenzo</option> 
 
                
                  <option value="Guimaras - Sibunag">Guimaras - Sibunag</option> 
 
                
                  <option value="Ifugao - Aguinaldo">Ifugao - Aguinaldo</option> 
 
                
                  <option value="Ifugao - Alfonso Lista (Potia)">Ifugao - Alfonso Lista (Potia)</option> 
 
                
                  <option value="Ifugao - Asipulo">Ifugao - Asipulo</option> 
 
                
                  <option value="Ifugao - Banaue">Ifugao - Banaue</option> 
 
                
                  <option value="Ifugao - Hingyon">Ifugao - Hingyon</option> 
 
                
                  <option value="Ifugao - Hungduan">Ifugao - Hungduan</option> 
 
                
                  <option value="Ifugao - Kiangan">Ifugao - Kiangan</option> 
 
                
                  <option value="Ifugao - Lagawe">Ifugao - Lagawe</option> 
 
                
                  <option value="Ifugao - Lamut">Ifugao - Lamut</option> 
 
                
                  <option value="Ifugao - Mayoyao">Ifugao - Mayoyao</option> 
 
                
                  <option value="Ifugao - Tinoc">Ifugao - Tinoc</option> 
 
                
                  <option value="Ilocos Norte - Adams">Ilocos Norte - Adams</option> 
 
                
                  <option value="Ilocos Norte - Bacarra">Ilocos Norte - Bacarra</option> 
 
                
                  <option value="Ilocos Norte - Badoc">Ilocos Norte - Badoc</option> 
 
                
                  <option value="Ilocos Norte - Bangui">Ilocos Norte - Bangui</option> 
 
                
                  <option value="Ilocos Norte - Banna (Espiritu)">Ilocos Norte - Banna (Espiritu)</option> 
 
                
                  <option value="Ilocos Norte - Batac">Ilocos Norte - Batac</option> 
 
                
                  <option value="Ilocos Norte - Burgos">Ilocos Norte - Burgos</option> 
 
                
                  <option value="Ilocos Norte - Carasi">Ilocos Norte - Carasi</option> 
 
                
                  <option value="Ilocos Norte - Currimao">Ilocos Norte - Currimao</option> 
 
                
                  <option value="Ilocos Norte - Dingras">Ilocos Norte - Dingras</option> 
 
                
                  <option value="Ilocos Norte - Dumalneg">Ilocos Norte - Dumalneg</option> 
 
                
                  <option value="Ilocos Norte - Laoag City (Capital)">Ilocos Norte - Laoag City (Capital)</option> 
 
                
                  <option value="Ilocos Norte - Marcos">Ilocos Norte - Marcos</option> 
 
                
                  <option value="Ilocos Norte - Nueva Era">Ilocos Norte - Nueva Era</option> 
 
                
                  <option value="Ilocos Norte - Pagudpud">Ilocos Norte - Pagudpud</option> 
 
                
                  <option value="Ilocos Norte - Paoay">Ilocos Norte - Paoay</option> 
 
                
                  <option value="Ilocos Norte - Pasuquin">Ilocos Norte - Pasuquin</option> 
 
                
                  <option value="Ilocos Norte - Piddig">Ilocos Norte - Piddig</option> 
 
                
                  <option value="Ilocos Norte - Pinili">Ilocos Norte - Pinili</option> 
 
                
                  <option value="Ilocos Norte - San Nicolas">Ilocos Norte - San Nicolas</option> 
 
                
                  <option value="Ilocos Norte - Sarrat">Ilocos Norte - Sarrat</option> 
 
                
                  <option value="Ilocos Norte - Solsona">Ilocos Norte - Solsona</option> 
 
                
                  <option value="Ilocos Norte - Vintar">Ilocos Norte - Vintar</option> 
 
                
                  <option value="Ilocos Sur - Alilem">Ilocos Sur - Alilem</option> 
 
                
                  <option value="Ilocos Sur - Banayoyo">Ilocos Sur - Banayoyo</option> 
 
                
                  <option value="Ilocos Sur - Bantay">Ilocos Sur - Bantay</option> 
 
                
                  <option value="Ilocos Sur - Burgos">Ilocos Sur - Burgos</option> 
 
                
                  <option value="Ilocos Sur - Cabugao">Ilocos Sur - Cabugao</option> 
 
                
                  <option value="Ilocos Sur - Candon City">Ilocos Sur - Candon City</option> 
 
                
                  <option value="Ilocos Sur - Caoayan">Ilocos Sur - Caoayan</option> 
 
                
                  <option value="Ilocos Sur - Cervantes">Ilocos Sur - Cervantes</option> 
 
                
                  <option value="Ilocos Sur - Galimuyod">Ilocos Sur - Galimuyod</option> 
 
                
                  <option value="Ilocos Sur - Gregorio Del Pilar (Concepcion)">Ilocos Sur - Gregorio Del Pilar (Concepcion)</option> 
 
                
                  <option value="Ilocos Sur - Lidlidda">Ilocos Sur - Lidlidda</option> 
 
                
                  <option value="Ilocos Sur - Magsingal">Ilocos Sur - Magsingal</option> 
 
                
                  <option value="Ilocos Sur - Nagbukel">Ilocos Sur - Nagbukel</option> 
 
                
                  <option value="Ilocos Sur - Narvacan">Ilocos Sur - Narvacan</option> 
 
                
                  <option value="Ilocos Sur - Quirino (Angkaki)">Ilocos Sur - Quirino (Angkaki)</option> 
 
                
                  <option value="Ilocos Sur - Salcedo (Baugen)">Ilocos Sur - Salcedo (Baugen)</option> 
 
                
                  <option value="Ilocos Sur - San Emilio">Ilocos Sur - San Emilio</option> 
 
                
                  <option value="Ilocos Sur - San Esteban">Ilocos Sur - San Esteban</option> 
 
                
                  <option value="Ilocos Sur - San Ildefonso">Ilocos Sur - San Ildefonso</option> 
 
                
                  <option value="Ilocos Sur - San Juan (Lapog)">Ilocos Sur - San Juan (Lapog)</option> 
 
                
                  <option value="Ilocos Sur - San Vicente">Ilocos Sur - San Vicente</option> 
 
                
                  <option value="Ilocos Sur - Santa">Ilocos Sur - Santa</option> 
 
                
                  <option value="Ilocos Sur - Santa Catalina">Ilocos Sur - Santa Catalina</option> 
 
                
                  <option value="Ilocos Sur - Santa Cruz">Ilocos Sur - Santa Cruz</option> 
 
                
                  <option value="Ilocos Sur - Santa Lucia">Ilocos Sur - Santa Lucia</option> 
 
                
                  <option value="Ilocos Sur - Santa Maria">Ilocos Sur - Santa Maria</option> 
 
                
                  <option value="Ilocos Sur - Santiago">Ilocos Sur - Santiago</option> 
 
                
                  <option value="Ilocos Sur - Santo Domingo">Ilocos Sur - Santo Domingo</option> 
 
                
                  <option value="Ilocos Sur - Sigay">Ilocos Sur - Sigay</option> 
 
                
                  <option value="Ilocos Sur - Sinait">Ilocos Sur - Sinait</option> 
 
                
                  <option value="Ilocos Sur - Sugpon">Ilocos Sur - Sugpon</option> 
 
                
                  <option value="Ilocos Sur - Suyo">Ilocos Sur - Suyo</option> 
 
                
                  <option value="Ilocos Sur - Tagudin">Ilocos Sur - Tagudin</option> 
 
                
                  <option value="Ilocos Sur - Vigan City (Capital)">Ilocos Sur - Vigan City (Capital)</option> 
 
                
                  <option value="Iloilo - Ajuy">Iloilo - Ajuy</option> 
 
                
                  <option value="Iloilo - Alimodian">Iloilo - Alimodian</option> 
 
                
                  <option value="Iloilo - Anilao">Iloilo - Anilao</option> 
 
                
                  <option value="Iloilo - Badiangan">Iloilo - Badiangan</option> 
 
                
                  <option value="Iloilo - Balasan">Iloilo - Balasan</option> 
 
                
                  <option value="Iloilo - Banate">Iloilo - Banate</option> 
 
                
                  <option value="Iloilo - Barotac Nuevo">Iloilo - Barotac Nuevo</option> 
 
                
                  <option value="Iloilo - Barotac Viejo">Iloilo - Barotac Viejo</option> 
 
                
                  <option value="Iloilo - Batad">Iloilo - Batad</option> 
 
                
                  <option value="Iloilo - Bingawan">Iloilo - Bingawan</option> 
 
                
                  <option value="Iloilo - Cabatuan">Iloilo - Cabatuan</option> 
 
                
                  <option value="Iloilo - Calinog">Iloilo - Calinog</option> 
 
                
                  <option value="Iloilo - Carles">Iloilo - Carles</option> 
 
                
                  <option value="Iloilo - Concepcion">Iloilo - Concepcion</option> 
 
                
                  <option value="Iloilo - Dingle">Iloilo - Dingle</option> 
 
                
                  <option value="Iloilo - Duenas">Iloilo - Duenas</option> 
 
                
                  <option value="Iloilo - Dumangas">Iloilo - Dumangas</option> 
 
                
                  <option value="Iloilo - Estancia">Iloilo - Estancia</option> 
 
                
                  <option value="Iloilo - Guimbal">Iloilo - Guimbal</option> 
 
                
                  <option value="Iloilo - Igbaras">Iloilo - Igbaras</option> 
 
                
                  <option value="Iloilo - Iloilo City">Iloilo - Iloilo City</option> 
 
                
                  <option value="Iloilo - Janiuay">Iloilo - Janiuay</option> 
 
                
                  <option value="Iloilo - Lambunao">Iloilo - Lambunao</option> 
 
                
                  <option value="Iloilo - Leganes">Iloilo - Leganes</option> 
 
                
                  <option value="Iloilo - Lemery">Iloilo - Lemery</option> 
 
                
                  <option value="Iloilo - Leon">Iloilo - Leon</option> 
 
                
                  <option value="Iloilo - Maasin">Iloilo - Maasin</option> 
 
                
                  <option value="Iloilo - Miagao">Iloilo - Miagao</option> 
 
                
                  <option value="Iloilo - Mina">Iloilo - Mina</option> 
 
                
                  <option value="Iloilo - New Lucena">Iloilo - New Lucena</option> 
 
                
                  <option value="Iloilo - Oton">Iloilo - Oton</option> 
 
                
                  <option value="Iloilo - Passi City">Iloilo - Passi City</option> 
 
                
                  <option value="Iloilo - Pavia">Iloilo - Pavia</option> 
 
                
                  <option value="Iloilo - Pototan">Iloilo - Pototan</option> 
 
                
                  <option value="Iloilo - San Dionisio">Iloilo - San Dionisio</option> 
 
                
                  <option value="Iloilo - San Enrique">Iloilo - San Enrique</option> 
 
                
                  <option value="Iloilo - San Joaquin">Iloilo - San Joaquin</option> 
 
                
                  <option value="Iloilo - San Miguel">Iloilo - San Miguel</option> 
 
                
                  <option value="Iloilo - San Rafael">Iloilo - San Rafael</option> 
 
                
                  <option value="Iloilo - Santa Barbara">Iloilo - Santa Barbara</option> 
 
                
                  <option value="Iloilo - Sara">Iloilo - Sara</option> 
 
                
                  <option value="Iloilo - Tigbauan">Iloilo - Tigbauan</option> 
 
                
                  <option value="Iloilo - Tubungan">Iloilo - Tubungan</option> 
 
                
                  <option value="Iloilo - Zarraga">Iloilo - Zarraga</option> 
 
                
                  <option value="Isabela - Alicia">Isabela - Alicia</option> 
 
                
                  <option value="Isabela - Angadanan">Isabela - Angadanan</option> 
 
                
                  <option value="Isabela - Aurora">Isabela - Aurora</option> 
 
                
                  <option value="Isabela - Benito Soliven">Isabela - Benito Soliven</option> 
 
                
                  <option value="Isabela - Burgos">Isabela - Burgos</option> 
 
                
                  <option value="Isabela - Cabagan">Isabela - Cabagan</option> 
 
                
                  <option value="Isabela - Cabatuan">Isabela - Cabatuan</option> 
 
                
                  <option value="Isabela - Cauayan City">Isabela - Cauayan City</option> 
 
                
                  <option value="Isabela - City Of Santiago">Isabela - City Of Santiago</option> 
 
                
                  <option value="Isabela - Cordon">Isabela - Cordon</option> 
 
                
                  <option value="Isabela - Delfin Albano (Magsaysay)">Isabela - Delfin Albano (Magsaysay)</option> 
 
                
                  <option value="Isabela - Dinapigue">Isabela - Dinapigue</option> 
 
                
                  <option value="Isabela - Divilican">Isabela - Divilican</option> 
 
                
                  <option value="Isabela - Echague">Isabela - Echague</option> 
 
                
                  <option value="Isabela - Gamu">Isabela - Gamu</option> 
 
                
                  <option value="Isabela - Ilagan">Isabela - Ilagan</option> 
 
                
                  <option value="Isabela - Jones">Isabela - Jones</option> 
 
                
                  <option value="Isabela - Luna">Isabela - Luna</option> 
 
                
                  <option value="Isabela - Maconacon">Isabela - Maconacon</option> 
 
                
                  <option value="Isabela - Mallig">Isabela - Mallig</option> 
 
                
                  <option value="Isabela - Naguilan">Isabela - Naguilan</option> 
 
                
                  <option value="Isabela - Palanan">Isabela - Palanan</option> 
 
                
                  <option value="Isabela - Quezon">Isabela - Quezon</option> 
 
                
                  <option value="Isabela - Quirino">Isabela - Quirino</option> 
 
                
                  <option value="Isabela - Ramon">Isabela - Ramon</option> 
 
                
                  <option value="Isabela - Reina Mercedes">Isabela - Reina Mercedes</option> 
 
                
                  <option value="Isabela - Roxas">Isabela - Roxas</option> 
 
                
                  <option value="Isabela - San Agustin">Isabela - San Agustin</option> 
 
                
                  <option value="Isabela - San Guillermo">Isabela - San Guillermo</option> 
 
                
                  <option value="Isabela - San Isidro">Isabela - San Isidro</option> 
 
                
                  <option value="Isabela - San Manuel">Isabela - San Manuel</option> 
 
                
                  <option value="Isabela - San Mariano">Isabela - San Mariano</option> 
 
                
                  <option value="Isabela - San Mateo">Isabela - San Mateo</option> 
 
                
                  <option value="Isabela - San Pablo">Isabela - San Pablo</option> 
 
                
                  <option value="Isabela - Santa Maria">Isabela - Santa Maria</option> 
 
                
                  <option value="Isabela - Santo Tomas">Isabela - Santo Tomas</option> 
 
                
                  <option value="Isabela - Tumauini">Isabela - Tumauini</option> 
 
                
                  <option value="Kalinga - Balbalan">Kalinga - Balbalan</option> 
 
                
                  <option value="Kalinga - Pasil">Kalinga - Pasil</option> 
 
                
                  <option value="Kalinga - Pinukpuk">Kalinga - Pinukpuk</option> 
 
                
                  <option value="Kalinga - Rizal (Liwan)">Kalinga - Rizal (Liwan)</option> 
 
                
                  <option value="Kalinga - Tabuk (Capital)">Kalinga - Tabuk (Capital)</option> 
 
                
                  <option value="Kalinga - Tanudan">Kalinga - Tanudan</option> 
 
                
                  <option value="Kalinga - Tinglayan">Kalinga - Tinglayan</option> 
 
                
                  <option value="La Union - Agoo">La Union - Agoo</option> 
 
                
                  <option value="La Union - Aringay">La Union - Aringay</option> 
 
                
                  <option value="La Union - Bacnotan">La Union - Bacnotan</option> 
 
                
                  <option value="La Union - Bagulin">La Union - Bagulin</option> 
 
                
                  <option value="La Union - Balaoan">La Union - Balaoan</option> 
 
                
                  <option value="La Union - Bangar">La Union - Bangar</option> 
 
                
                  <option value="La Union - Bauang">La Union - Bauang</option> 
 
                
                  <option value="La Union - Burgos">La Union - Burgos</option> 
 
                
                  <option value="La Union - Caba">La Union - Caba</option> 
 
                
                  <option value="La Union - Luna">La Union - Luna</option> 
 
                
                  <option value="La Union - Naguilian">La Union - Naguilian</option> 
 
                
                  <option value="La Union - Rosario">La Union - Rosario</option> 
 
                
                  <option value="La Union - San Fernando City (Capital)">La Union - San Fernando City (Capital)</option> 
 
                
                  <option value="La Union - San Gabriel">La Union - San Gabriel</option> 
 
                
                  <option value="La Union - San Juan">La Union - San Juan</option> 
 
                
                  <option value="La Union - Santo Tomas">La Union - Santo Tomas</option> 
 
                
                  <option value="La Union - Santol">La Union - Santol</option> 
 
                
                  <option value="La Union - Sudipen">La Union - Sudipen</option> 
 
                
                  <option value="La Union - Tubao">La Union - Tubao</option> 
 
                
                  <option value="Laguna - Alaminos">Laguna - Alaminos</option> 
 
                
                  <option value="Laguna - Bay">Laguna - Bay</option> 
 
                
                  <option value="Laguna - Binan">Laguna - Binan</option> 
 
                
                  <option value="Laguna - Cabuyao">Laguna - Cabuyao</option> 
 
                
                  <option value="Laguna - Calamba City">Laguna - Calamba City</option> 
 
                
                  <option value="Laguna - Calauan">Laguna - Calauan</option> 
 
                
                  <option value="Laguna - Cavinti">Laguna - Cavinti</option> 
 
                
                  <option value="Laguna - Famy">Laguna - Famy</option> 
 
                
                  <option value="Laguna - Kalayaan">Laguna - Kalayaan</option> 
 
                
                  <option value="Laguna - Liliw">Laguna - Liliw</option> 
 
                
                  <option value="Laguna - Los Banos">Laguna - Los Banos</option> 
 
                
                  <option value="Laguna - Luisiana">Laguna - Luisiana</option> 
 
                
                  <option value="Laguna - Lumban">Laguna - Lumban</option> 
 
                
                  <option value="Laguna - Mabitac">Laguna - Mabitac</option> 
 
                
                  <option value="Laguna - Magdalena">Laguna - Magdalena</option> 
 

                
                  <option value="Laguna - Majayjay">Laguna - Majayjay</option> 
 
                
                  <option value="Laguna - Nagcarlan">Laguna - Nagcarlan</option> 
 
                
                  <option value="Laguna - Paete">Laguna - Paete</option> 
 
                
                  <option value="Laguna - Pagsanjan">Laguna - Pagsanjan</option> 
 
                
                  <option value="Laguna - Pakil">Laguna - Pakil</option> 
 
                
                  <option value="Laguna - Pangil">Laguna - Pangil</option> 
 
                
                  <option value="Laguna - Pila">Laguna - Pila</option> 
 
                
                  <option value="Laguna - Rizal">Laguna - Rizal</option> 
 
                
                  <option value="Laguna - San Pablo City">Laguna - San Pablo City</option> 
 
                
                  <option value="Laguna - San Pedro">Laguna - San Pedro</option> 
 
                
                  <option value="Laguna - Santa Cruz">Laguna - Santa Cruz</option> 
 
                
                  <option value="Laguna - Santa Maria">Laguna - Santa Maria</option> 
 
                
                  <option value="Laguna - Santa Rosa">Laguna - Santa Rosa</option> 
 
                
                  <option value="Laguna - Siniloan">Laguna - Siniloan</option> 
 
                
                  <option value="Laguna - Victoria">Laguna - Victoria</option> 
 
                
                  <option value="Lanao Del Norte - Bacolod">Lanao Del Norte - Bacolod</option> 
 
                
                  <option value="Lanao Del Norte - Baloi">Lanao Del Norte - Baloi</option> 
 
                
                  <option value="Lanao Del Norte - Baroy">Lanao Del Norte - Baroy</option> 
 
                
                  <option value="Lanao Del Norte - Iligan City (44 Bgys)">Lanao Del Norte - Iligan City (44 Bgys)</option> 
 
                
                  <option value="Lanao Del Norte - Kapatagan">Lanao Del Norte - Kapatagan</option> 
 
                
                  <option value="Lanao Del Norte - Kauswagan">Lanao Del Norte - Kauswagan</option> 
 
                
                  <option value="Lanao Del Norte - Kolambugan">Lanao Del Norte - Kolambugan</option> 
 
                
                  <option value="Lanao Del Norte - Lala">Lanao Del Norte - Lala</option> 
 
                
                  <option value="Lanao Del Norte - Linamon">Lanao Del Norte - Linamon</option> 
 
                
                  <option value="Lanao Del Norte - Magsaysay">Lanao Del Norte - Magsaysay</option> 
 
                
                  <option value="Lanao Del Norte - Maigo">Lanao Del Norte - Maigo</option> 
 
                
                  <option value="Lanao Del Norte - Matungao">Lanao Del Norte - Matungao</option> 
 
                
                  <option value="Lanao Del Norte - Munai">Lanao Del Norte - Munai</option> 
 
                
                  <option value="Lanao Del Norte - Nunungan">Lanao Del Norte - Nunungan</option> 
 
                
                  <option value="Lanao Del Norte - Pantao Ragat">Lanao Del Norte - Pantao Ragat</option> 
 
                
                  <option value="Lanao Del Norte - Pantar">Lanao Del Norte - Pantar</option> 
 
                
                  <option value="Lanao Del Norte - Poona Piagapo">Lanao Del Norte - Poona Piagapo</option> 
 
                
                  <option value="Lanao Del Norte - Salvador">Lanao Del Norte - Salvador</option> 
 
                
                  <option value="Lanao Del Norte - Sapad">Lanao Del Norte - Sapad</option> 
 
                
                  <option value="Lanao Del Norte - Sultan Naga Dimaporo (Karomata)">Lanao Del Norte - Sultan Naga Dimaporo (Karomata)</option> 
 
                
                  <option value="Lanao Del Norte - Tagoloan">Lanao Del Norte - Tagoloan</option> 
 
                
                  <option value="Lanao Del Norte - Tangcal">Lanao Del Norte - Tangcal</option> 
 
                
                  <option value="Lanao Del Norte - Tubod (Capital)">Lanao Del Norte - Tubod (Capital)</option> 
 
                
                  <option value="Lanao Del Sur - Binidayan">Lanao Del Sur - Binidayan</option> 
 
                
                  <option value="Lanao Del Sur - Bubong">Lanao Del Sur - Bubong</option> 
 
                
                  <option value="Lanao Del Sur - Calanogas">Lanao Del Sur - Calanogas</option> 
 
                
                  <option value="Lanao Del Sur - Lumbatan">Lanao Del Sur - Lumbatan</option> 
 
                
                  <option value="Lanao Del Sur - Lumbayanague">Lanao Del Sur - Lumbayanague</option> 
 
                
                  <option value="Lanao Del Sur - Madalum">Lanao Del Sur - Madalum</option> 
 
                
                  <option value="Lanao Del Sur - Marantao">Lanao Del Sur - Marantao</option> 
 
                
                  <option value="Lanao Del Sur - Marogong">Lanao Del Sur - Marogong</option> 
 
                
                  <option value="Lanao Del Sur - Pagayawan (Tatarikan)">Lanao Del Sur - Pagayawan (Tatarikan)</option> 
 
                
                  <option value="Lanao Del Sur - Piagapo">Lanao Del Sur - Piagapo</option> 
 
                
                  <option value="Lanao Del Sur - Poona Bayabao (Gata)">Lanao Del Sur - Poona Bayabao (Gata)</option> 
 
                
                  <option value="Lanao Del Sur - Tamparan">Lanao Del Sur - Tamparan</option> 
 
                
                  <option value="Lanao Del Sur - Tubaran">Lanao Del Sur - Tubaran</option> 
 
                
                  <option value="Leyte - Abuyog">Leyte - Abuyog</option> 
 
                
                  <option value="Leyte - Alangalang">Leyte - Alangalang</option> 
 
                
                  <option value="Leyte - Albuera">Leyte - Albuera</option> 
 
                
                  <option value="Leyte - Babatngon">Leyte - Babatngon</option> 
 
                
                  <option value="Leyte - Barugo">Leyte - Barugo</option> 
 
                
                  <option value="Leyte - Bato">Leyte - Bato</option> 
 
                
                  <option value="Leyte - Baybay">Leyte - Baybay</option> 
 
                
                  <option value="Leyte - Burauen">Leyte - Burauen</option> 
 
                
                  <option value="Leyte - Calubian">Leyte - Calubian</option> 
 
                
                  <option value="Leyte - Capoocan">Leyte - Capoocan</option> 
 
                
                  <option value="Leyte - Carigara">Leyte - Carigara</option> 
 
                
                  <option value="Leyte - Dagami">Leyte - Dagami</option> 
 
                
                  <option value="Leyte - Dulag">Leyte - Dulag</option> 
 
                
                  <option value="Leyte - Hilongos">Leyte - Hilongos</option> 
 
                
                  <option value="Leyte - Hindang">Leyte - Hindang</option> 
 
                
                  <option value="Leyte - Inopacan">Leyte - Inopacan</option> 
 
                
                  <option value="Leyte - Isabel">Leyte - Isabel</option> 
 
                
                  <option value="Leyte - Jaro">Leyte - Jaro</option> 
 
                
                  <option value="Leyte - Javier (Bugho)">Leyte - Javier (Bugho)</option> 
 
                
                  <option value="Leyte - Julita">Leyte - Julita</option> 
 
                
                  <option value="Leyte - Kananga">Leyte - Kananga</option> 
 
                
                  <option value="Leyte - La Paz">Leyte - La Paz</option> 
 
                
                  <option value="Leyte - Leyte">Leyte - Leyte</option> 
 
                
                  <option value="Leyte - Macarthur">Leyte - Macarthur</option> 
 
                
                  <option value="Leyte - Mahaplag">Leyte - Mahaplag</option> 
 
                
                  <option value="Leyte - Matag-Ob">Leyte - Matag-Ob</option> 
 
                
                  <option value="Leyte - Matalom">Leyte - Matalom</option> 
 
                
                  <option value="Leyte - Mayorga">Leyte - Mayorga</option> 
 
                
                  <option value="Leyte - Merida">Leyte - Merida</option> 
 
                
                  <option value="Leyte - Ormoc City">Leyte - Ormoc City</option> 
 
                
                  <option value="Leyte - Palo">Leyte - Palo</option> 
 
                
                  <option value="Leyte - Palompon">Leyte - Palompon</option> 
 
                
                  <option value="Leyte - Pastrana">Leyte - Pastrana</option> 
 
                
                  <option value="Leyte - San Isidro">Leyte - San Isidro</option> 
 
                
                  <option value="Leyte - San Miguel">Leyte - San Miguel</option> 
 
                
                  <option value="Leyte - Santa Fe">Leyte - Santa Fe</option> 
 
                
                  <option value="Leyte - Tabango">Leyte - Tabango</option> 
 
                
                  <option value="Leyte - Tabontabon">Leyte - Tabontabon</option> 
 
                
                  <option value="Leyte - Tacloban City">Leyte - Tacloban City</option> 
 
                
                  <option value="Leyte - Tanauan">Leyte - Tanauan</option> 
 
                
                  <option value="Leyte - Tolosa">Leyte - Tolosa</option> 
 
                
                  <option value="Leyte - Tunga">Leyte - Tunga</option> 
 
                
                  <option value="Leyte - Villaba">Leyte - Villaba</option> 
 
                
                  <option value="Maguindanao - Ampatuan">Maguindanao - Ampatuan</option> 
 
                
                  <option value="Maguindanao - Barira">Maguindanao - Barira</option> 
 
                
                  <option value="Maguindanao - Buldon">Maguindanao - Buldon</option> 
 
                
                  <option value="Maguindanao - Buluan">Maguindanao - Buluan</option> 
 
                
                  <option value="Maguindanao - Datu Abdullah Sanki">Maguindanao - Datu Abdullah Sanki</option> 
 
                
                  <option value="Maguindanao - Datu Odin Sinsuat">Maguindanao - Datu Odin Sinsuat</option> 
 
                
                  <option value="Maguindanao - Datu Paglas">Maguindanao - Datu Paglas</option> 
 
                
                  <option value="Maguindanao - Datu Piang">Maguindanao - Datu Piang</option> 
 
                
                  <option value="Maguindanao - Datu Saudi Ampatuan">Maguindanao - Datu Saudi Ampatuan</option> 
 
                
                  <option value="Maguindanao - Datu Unsay">Maguindanao - Datu Unsay</option> 
 
                
                  <option value="Maguindanao - Gen. S. K. Pendatun">Maguindanao - Gen. S. K. Pendatun</option> 
 
                
                  <option value="Maguindanao - Guindulungan">Maguindanao - Guindulungan</option> 
 
                
                  <option value="Maguindanao - Kabuntalan">Maguindanao - Kabuntalan</option> 
 
                
                  <option value="Maguindanao - Mamasapano">Maguindanao - Mamasapano</option> 
 
                
                  <option value="Maguindanao - Matanog">Maguindanao - Matanog</option> 
 
                
                  <option value="Maguindanao - Pagagawan">Maguindanao - Pagagawan</option> 
 
                
                  <option value="Maguindanao - Pagalungan">Maguindanao - Pagalungan</option> 
 
                
                  <option value="Maguindanao - Paglat">Maguindanao - Paglat</option> 
 
                
                  <option value="Maguindanao - Parang">Maguindanao - Parang</option> 
 
                
                  <option value="Maguindanao - Shariff Aguak">Maguindanao - Shariff Aguak</option> 
 
                
                  <option value="Maguindanao - South Upi">Maguindanao - South Upi</option> 
 
                
                  <option value="Maguindanao - Sultan Kudarat">Maguindanao - Sultan Kudarat</option> 
 
                
                  <option value="Maguindanao - Sultan Mastura">Maguindanao - Sultan Mastura</option> 
 
                
                  <option value="Maguindanao - Sultan Sa Barongis">Maguindanao - Sultan Sa Barongis</option> 
 
                
                  <option value="Maguindanao - Talayan">Maguindanao - Talayan</option> 
 
                
                  <option value="Maguindanao - Talitay">Maguindanao - Talitay</option> 
 
                
                  <option value="Maguindanao - Upi">Maguindanao - Upi</option> 
 
                
                  <option value="Marinduque - Boac">Marinduque - Boac</option> 
 
                
                  <option value="Marinduque - Buenavista">Marinduque - Buenavista</option> 
 
                
                  <option value="Marinduque - Gasan">Marinduque - Gasan</option> 
 
                
                  <option value="Marinduque - Mogpog">Marinduque - Mogpog</option> 
 
                
                  <option value="Marinduque - Santa Cruz">Marinduque - Santa Cruz</option> 
 
                
                  <option value="Marinduque - Torrijos">Marinduque - Torrijos</option> 
 
                
                  <option value="Masbate - Aroroy">Masbate - Aroroy</option> 
 
                
                  <option value="Masbate - Baleno">Masbate - Baleno</option> 
 
                
                  <option value="Masbate - Balud">Masbate - Balud</option> 
 
                
                  <option value="Masbate - Batuan">Masbate - Batuan</option> 
 
                
                  <option value="Masbate - Cataingan">Masbate - Cataingan</option> 
 
                
                  <option value="Masbate - Cawayan">Masbate - Cawayan</option> 
 
                
                  <option value="Masbate - Claveria">Masbate - Claveria</option> 
 
                
                  <option value="Masbate - Dimasalang">Masbate - Dimasalang</option> 
 
                
                  <option value="Masbate - Esperanza">Masbate - Esperanza</option> 
 
                
                  <option value="Masbate - Mandaon">Masbate - Mandaon</option> 
 
                
                  <option value="Masbate - Masbate City (Capital)">Masbate - Masbate City (Capital)</option> 
 
                
                  <option value="Masbate - Milagros">Masbate - Milagros</option> 
 
                
                  <option value="Masbate - Mobo">Masbate - Mobo</option> 
 
                
                  <option value="Masbate - Monreal">Masbate - Monreal</option> 
 
                
                  <option value="Masbate - Palanas">Masbate - Palanas</option> 
 
                
                  <option value="Masbate - Pio V. Corpuz (Limbuhan)">Masbate - Pio V. Corpuz (Limbuhan)</option> 
 
                
                  <option value="Masbate - Placer">Masbate - Placer</option> 
 
                
                  <option value="Masbate - San Fernando">Masbate - San Fernando</option> 
 
                
                  <option value="Masbate - San Jacinto">Masbate - San Jacinto</option> 
 
                
                  <option value="Masbate - San Pascual">Masbate - San Pascual</option> 
 
                
                  <option value="Masbate - Uson">Masbate - Uson</option> 
 
                
                  <option value="Misamis Occidental - Aloran">Misamis Occidental - Aloran</option> 
 
                
                  <option value="Misamis Occidental - Baliangao">Misamis Occidental - Baliangao</option> 
 
                
                  <option value="Misamis Occidental - Bonifacio">Misamis Occidental - Bonifacio</option> 
 
                
                  <option value="Misamis Occidental - Calamba">Misamis Occidental - Calamba</option> 
 
                
                  <option value="Misamis Occidental - Clarin">Misamis Occidental - Clarin</option> 
 
                
                  <option value="Misamis Occidental - Concepcion">Misamis Occidental - Concepcion</option> 
 
                
                  <option value="Misamis Occidental - Don Victoriano Chiongbian (Don)">Misamis Occidental - Don Victoriano Chiongbian (Don)</option> 
 
                
                  <option value="Misamis Occidental - Jimenez">Misamis Occidental - Jimenez</option> 
 
                
                  <option value="Misamis Occidental - Lopez Jaena">Misamis Occidental - Lopez Jaena</option> 
 
                
                  <option value="Misamis Occidental - Oroquieta City (Capital)">Misamis Occidental - Oroquieta City (Capital)</option> 
 
                
                  <option value="Misamis Occidental - Ozamis City">Misamis Occidental - Ozamis City</option> 
 
                
                  <option value="Misamis Occidental - Panaon">Misamis Occidental - Panaon</option> 
 
                
                  <option value="Misamis Occidental - Plaridel">Misamis Occidental - Plaridel</option> 
 
                
                  <option value="Misamis Occidental - Sapang Dalaga">Misamis Occidental - Sapang Dalaga</option> 
 
                
                  <option value="Misamis Occidental - Sinacaban">Misamis Occidental - Sinacaban</option> 
 
                
                  <option value="Misamis Occidental - Tangub City">Misamis Occidental - Tangub City</option> 
 
                
                  <option value="Misamis Occidental - Tudela">Misamis Occidental - Tudela</option> 
 
                
                  <option value="Misamis Oriental - Alubijid">Misamis Oriental - Alubijid</option> 
 
                
                  <option value="Misamis Oriental - Balingasag">Misamis Oriental - Balingasag</option> 
 
                
                  <option value="Misamis Oriental - Balingoan">Misamis Oriental - Balingoan</option> 
 
                
                  <option value="Misamis Oriental - Binuangan">Misamis Oriental - Binuangan</option> 
 
                
                  <option value="Misamis Oriental - Cagayan De Oro City (Capital)">Misamis Oriental - Cagayan De Oro City (Capital)</option> 
 
                
                  <option value="Misamis Oriental - Claveria">Misamis Oriental - Claveria</option> 
 
                
                  <option value="Misamis Oriental - El Salvador">Misamis Oriental - El Salvador</option> 
 
                
                  <option value="Misamis Oriental - Gingoog City">Misamis Oriental - Gingoog City</option> 
 
                
                  <option value="Misamis Oriental - Gitagum">Misamis Oriental - Gitagum</option> 
 
                
                  <option value="Misamis Oriental - Initao">Misamis Oriental - Initao</option> 
 
                
                  <option value="Misamis Oriental - Jasaan">Misamis Oriental - Jasaan</option> 
 
                
                  <option value="Misamis Oriental - Kinoguitan">Misamis Oriental - Kinoguitan</option> 
 
                
                  <option value="Misamis Oriental - Lagonglong">Misamis Oriental - Lagonglong</option> 
 
                
                  <option value="Misamis Oriental - Laguindingan">Misamis Oriental - Laguindingan</option> 
 
                
                  <option value="Misamis Oriental - Libertad">Misamis Oriental - Libertad</option> 
 
                
                  <option value="Misamis Oriental - Lugait">Misamis Oriental - Lugait</option> 
 
                
                  <option value="Misamis Oriental - Magsaysay (Linugos)">Misamis Oriental - Magsaysay (Linugos)</option> 
 
                
                  <option value="Misamis Oriental - Manticao">Misamis Oriental - Manticao</option> 
 
                
                  <option value="Misamis Oriental - Medina">Misamis Oriental - Medina</option> 
 
                
                  <option value="Misamis Oriental - Naawan">Misamis Oriental - Naawan</option> 
 
                
                  <option value="Misamis Oriental - Opol">Misamis Oriental - Opol</option> 
 
                
                  <option value="Misamis Oriental - Salay">Misamis Oriental - Salay</option> 
 
                
                  <option value="Misamis Oriental - Sugbongcogon">Misamis Oriental - Sugbongcogon</option> 
 
                
                  <option value="Misamis Oriental - Tagoloan">Misamis Oriental - Tagoloan</option> 
 
                
                  <option value="Misamis Oriental - Talisayan">Misamis Oriental - Talisayan</option> 
 
                
                  <option value="Misamis Oriental - Villanueva">Misamis Oriental - Villanueva</option> 
 
                
                  <option value="Mountain Province - Barlig">Mountain Province - Barlig</option> 
 
                
                  <option value="Mountain Province - Bauko">Mountain Province - Bauko</option> 
 
                
                  <option value="Mountain Province - Besao">Mountain Province - Besao</option> 
 
                
                  <option value="Mountain Province - Bontoc">Mountain Province - Bontoc</option> 
 
                
                  <option value="Mountain Province - Natonin">Mountain Province - Natonin</option> 
 
                
                  <option value="Mountain Province - Paracelis">Mountain Province - Paracelis</option> 
 
                
                  <option value="Mountain Province - Sabangan">Mountain Province - Sabangan</option> 
 
                
                  <option value="Mountain Province - Sadanga">Mountain Province - Sadanga</option> 
 
                
                  <option value="Mountain Province - Sagada">Mountain Province - Sagada</option> 
 
                
                  <option value="Mountain Province - Tadian">Mountain Province - Tadian</option> 
 
                
                  <option value="NCR - City Of Mandaluyong">NCR - City Of Mandaluyong</option> 
 
                
                  <option value="NCR - City Of Manila">NCR - City Of Manila</option> 
 
                
                  <option value="NCR - City Of Marikina">NCR - City Of Marikina</option> 
 
                
                  <option value="NCR - City Of Pasig">NCR - City Of Pasig</option> 
 
                
                  <option value="NCR - Kalookan City">NCR - Kalookan City</option> 
 
                
                  <option value="NCR - Las Pinas City">NCR - Las Pinas City</option> 
 
                
                  <option value="NCR - Makati City">NCR - Makati City</option> 
 
                
                  <option value="NCR - Malabon City">NCR - Malabon City</option> 
 
                
                  <option value="NCR - Muntinlupa City">NCR - Muntinlupa City</option> 
 
                
                  <option value="NCR - Navotas">NCR - Navotas</option> 
 
                
                  <option value="NCR - Paranaque City">NCR - Paranaque City</option> 
 
                
                  <option value="NCR - Pasay City">NCR - Pasay City</option> 
 
                
                  <option value="NCR - Pateros">NCR - Pateros</option> 
 
                
                  <option value="NCR - Quezon City" selected="selected">NCR - Quezon City</option> 
 
                
                  <option value="NCR - San Juan">NCR - San Juan</option> 
 
                
                  <option value="NCR - Taguig">NCR - Taguig</option> 
 
                
                  <option value="NCR - Valenzuela City">NCR - Valenzuela City</option> 
 
                
                  <option value="Negros Occidental - Bacolod City">Negros Occidental - Bacolod City</option> 
 
                
                  <option value="Negros Occidental - Bago City">Negros Occidental - Bago City</option> 
 
                
                  <option value="Negros Occidental - Binalbagan">Negros Occidental - Binalbagan</option> 
 
                
                  <option value="Negros Occidental - Cadiz City">Negros Occidental - Cadiz City</option> 
 
                
                  <option value="Negros Occidental - Calatrava">Negros Occidental - Calatrava</option> 
 
                
                  <option value="Negros Occidental - Candoni">Negros Occidental - Candoni</option> 
 
                
                  <option value="Negros Occidental - Cauayan">Negros Occidental - Cauayan</option> 
 
                
                  <option value="Negros Occidental - Enrique B. Magalona (Saravia)">Negros Occidental - Enrique B. Magalona (Saravia)</option> 
 
                
                  <option value="Negros Occidental - Escalante City">Negros Occidental - Escalante City</option> 
 
                
                  <option value="Negros Occidental - Himamaylan City">Negros Occidental - Himamaylan City</option> 
 
                
                  <option value="Negros Occidental - Hinigaran">Negros Occidental - Hinigaran</option> 
 
                
                  <option value="Negros Occidental - Hinoba-An (Asia)">Negros Occidental - Hinoba-An (Asia)</option> 
 
                
                  <option value="Negros Occidental - Ilog">Negros Occidental - Ilog</option> 
 
                
                  <option value="Negros Occidental - Isabela">Negros Occidental - Isabela</option> 
 
                
                  <option value="Negros Occidental - Kabankalan City">Negros Occidental - Kabankalan City</option> 
 
                
                  <option value="Negros Occidental - La Carlota City">Negros Occidental - La Carlota City</option> 
 
                
                  <option value="Negros Occidental - La Castellana">Negros Occidental - La Castellana</option> 
 
                
                  <option value="Negros Occidental - Manapla">Negros Occidental - Manapla</option> 
 
                
                  <option value="Negros Occidental - Moises Padilla (Magallon)">Negros Occidental - Moises Padilla (Magallon)</option> 
 
                
                  <option value="Negros Occidental - Murcia">Negros Occidental - Murcia</option> 
 
                
                  <option value="Negros Occidental - Pontevedra">Negros Occidental - Pontevedra</option> 
 
                
                  <option value="Negros Occidental - Pulupandan">Negros Occidental - Pulupandan</option> 
 
                
                  <option value="Negros Occidental - Sagay City">Negros Occidental - Sagay City</option> 
 
                
                  <option value="Negros Occidental - Salvador Benedicto">Negros Occidental - Salvador Benedicto</option> 
 
                
                  <option value="Negros Occidental - San Carlos City">Negros Occidental - San Carlos City</option> 
 
                
                  <option value="Negros Occidental - San Enrique">Negros Occidental - San Enrique</option> 
 
                
                  <option value="Negros Occidental - Silay City">Negros Occidental - Silay City</option> 
 
                
                  <option value="Negros Occidental - Talisay City">Negros Occidental - Talisay City</option> 
 
                
                  <option value="Negros Occidental - Toboso">Negros Occidental - Toboso</option> 
 
                
                  <option value="Negros Occidental - Valladolid">Negros Occidental - Valladolid</option> 
 
                
                  <option value="Negros Occidental - Victorias City">Negros Occidental - Victorias City</option> 
 
                
                  <option value="Negros Oriental - Amlan (Ayuquitan)">Negros Oriental - Amlan (Ayuquitan)</option> 
 
                
                  <option value="Negros Oriental - Ayugon">Negros Oriental - Ayugon</option> 
 
                
                  <option value="Negros Oriental - Bacong">Negros Oriental - Bacong</option> 
 
                
                  <option value="Negros Oriental - Basay">Negros Oriental - Basay</option> 
 
                
                  <option value="Negros Oriental - Bayawan City (Tulong)">Negros Oriental - Bayawan City (Tulong)</option> 
 
                
                  <option value="Negros Oriental - Bindoy (Payabon)">Negros Oriental - Bindoy (Payabon)</option> 
 
                
                  <option value="Negros Oriental - Dauin">Negros Oriental - Dauin</option> 
 
                
                  <option value="Negros Oriental - Dumaguete">Negros Oriental - Dumaguete</option> 
 
                
                  <option value="Negros Oriental - Guihulngan">Negros Oriental - Guihulngan</option> 
 
                
                  <option value="Negros Oriental - Jimalalud">Negros Oriental - Jimalalud</option> 
 
                
                  <option value="Negros Oriental - La Libertad">Negros Oriental - La Libertad</option> 
 
                
                  <option value="Negros Oriental - Mabinay">Negros Oriental - Mabinay</option> 
 
                
                  <option value="Negros Oriental - Manjuyod">Negros Oriental - Manjuyod</option> 
 
                
                  <option value="Negros Oriental - Pamplona">Negros Oriental - Pamplona</option> 
 
                
                  <option value="Negros Oriental - San Jose">Negros Oriental - San Jose</option> 
 
                
                  <option value="Negros Oriental - Santa Catalina">Negros Oriental - Santa Catalina</option> 
 
                
                  <option value="Negros Oriental - Siaton">Negros Oriental - Siaton</option> 
 
                
                  <option value="Negros Oriental - Sibulan">Negros Oriental - Sibulan</option> 
 
                
                  <option value="Negros Oriental - Tayasan">Negros Oriental - Tayasan</option> 
 
                
                  <option value="Negros Oriental - Valencia (Luzurrizga)">Negros Oriental - Valencia (Luzurrizga)</option> 
 
                
                  <option value="Negros Oriental - Vallehermoso">Negros Oriental - Vallehermoso</option> 
 
                
                  <option value="Negros Oriental - Zamboanguita">Negros Oriental - Zamboanguita</option> 
 

                
                  <option value="North Cotabato - Alamada">North Cotabato - Alamada</option> 
 
                
                  <option value="North Cotabato - Aleosan">North Cotabato - Aleosan</option> 
 
                
                  <option value="North Cotabato - Antipas">North Cotabato - Antipas</option> 
 
                
                  <option value="North Cotabato - Arakan">North Cotabato - Arakan</option> 
 
                
                  <option value="North Cotabato - Banisilan">North Cotabato - Banisilan</option> 
 
                
                  <option value="North Cotabato - Carmen">North Cotabato - Carmen</option> 
 
                
                  <option value="North Cotabato - Kabacan">North Cotabato - Kabacan</option> 
 
                
                  <option value="North Cotabato - Kidapawan City (Capital)">North Cotabato - Kidapawan City (Capital)</option> 
 
                
                  <option value="North Cotabato - Libungan">North Cotabato - Libungan</option> 
 
                
                  <option value="North Cotabato - M'lang">North Cotabato - M'lang</option> 
 
                
                  <option value="North Cotabato - Magpet">North Cotabato - Magpet</option> 
 
                
                  <option value="North Cotabato - Makilala">North Cotabato - Makilala</option> 
 
                
                  <option value="North Cotabato - Matalam">North Cotabato - Matalam</option> 
 
                
                  <option value="North Cotabato - Midsayap">North Cotabato - Midsayap</option> 
 
                
                  <option value="North Cotabato - Pigkawayan">North Cotabato - Pigkawayan</option> 
 
                
                  <option value="North Cotabato - Pikit">North Cotabato - Pikit</option> 
 
                
                  <option value="North Cotabato - President Roxas">North Cotabato - President Roxas</option> 
 
                
                  <option value="North Cotabato - Tulunan">North Cotabato - Tulunan</option> 
 
                
                  <option value="Northern Samar - Allen">Northern Samar - Allen</option> 
 
                
                  <option value="Northern Samar - Biri">Northern Samar - Biri</option> 
 
                
                  <option value="Northern Samar - Bobon">Northern Samar - Bobon</option> 
 
                
                  <option value="Northern Samar - Capul">Northern Samar - Capul</option> 
 
                
                  <option value="Northern Samar - Catarman">Northern Samar - Catarman</option> 
 
                
                  <option value="Northern Samar - Catubig">Northern Samar - Catubig</option> 
 
                
                  <option value="Northern Samar - Gamay">Northern Samar - Gamay</option> 
 
                
                  <option value="Northern Samar - Laoang">Northern Samar - Laoang</option> 
 
                
                  <option value="Northern Samar - Lapinig">Northern Samar - Lapinig</option> 
 
                
                  <option value="Northern Samar - Las Navas">Northern Samar - Las Navas</option> 
 
                
                  <option value="Northern Samar - Lavezares">Northern Samar - Lavezares</option> 
 
                
                  <option value="Northern Samar - Lope De Vega">Northern Samar - Lope De Vega</option> 
 
                
                  <option value="Northern Samar - Mapanas">Northern Samar - Mapanas</option> 
 
                
                  <option value="Northern Samar - Mondragon">Northern Samar - Mondragon</option> 
 
                
                  <option value="Northern Samar - Palapag">Northern Samar - Palapag</option> 
 
                
                  <option value="Northern Samar - Pambujan">Northern Samar - Pambujan</option> 
 
                
                  <option value="Northern Samar - Rosario">Northern Samar - Rosario</option> 
 
                
                  <option value="Northern Samar - San Antonio">Northern Samar - San Antonio</option> 
 
                
                  <option value="Northern Samar - San Isidro">Northern Samar - San Isidro</option> 
 
                
                  <option value="Northern Samar - San Jose">Northern Samar - San Jose</option> 
 
                
                  <option value="Northern Samar - San Roque">Northern Samar - San Roque</option> 
 
                
                  <option value="Northern Samar - San Vicente">Northern Samar - San Vicente</option> 
 
                
                  <option value="Northern Samar - Silvino Lobos">Northern Samar - Silvino Lobos</option> 
 
                
                  <option value="Northern Samar - Victoria">Northern Samar - Victoria</option> 
 
                
                  <option value="Nueva Ecija - Aliaga">Nueva Ecija - Aliaga</option> 
 
                
                  <option value="Nueva Ecija - Bongabon">Nueva Ecija - Bongabon</option> 
 
                
                  <option value="Nueva Ecija - Cabanatuan City">Nueva Ecija - Cabanatuan City</option> 
 
                
                  <option value="Nueva Ecija - Cabiao">Nueva Ecija - Cabiao</option> 
 
                
                  <option value="Nueva Ecija - Caranglan">Nueva Ecija - Caranglan</option> 
 
                
                  <option value="Nueva Ecija - Cuyapo">Nueva Ecija - Cuyapo</option> 
 
                
                  <option value="Nueva Ecija - Gabaldon (Bitulok & Sarabani)">Nueva Ecija - Gabaldon (Bitulok & Sarabani)</option> 
 
                
                  <option value="Nueva Ecija - Gapan City">Nueva Ecija - Gapan City</option> 
 
                
                  <option value="Nueva Ecija - General Mamerto Natividad">Nueva Ecija - General Mamerto Natividad</option> 
 
                
                  <option value="Nueva Ecija - General Tinio (Payapa)">Nueva Ecija - General Tinio (Payapa)</option> 
 
                
                  <option value="Nueva Ecija - Guimba">Nueva Ecija - Guimba</option> 
 
                
                  <option value="Nueva Ecija - Jaen">Nueva Ecija - Jaen</option> 
 
                
                  <option value="Nueva Ecija - Laur">Nueva Ecija - Laur</option> 
 
                
                  <option value="Nueva Ecija - Licab">Nueva Ecija - Licab</option> 
 
                
                  <option value="Nueva Ecija - Llanera">Nueva Ecija - Llanera</option> 
 
                
                  <option value="Nueva Ecija - Lupao">Nueva Ecija - Lupao</option> 
 
                
                  <option value="Nueva Ecija - Muñoz City">Nueva Ecija - Muñoz City</option> 
 
                
                  <option value="Nueva Ecija - Nampicuan">Nueva Ecija - Nampicuan</option> 
 
                
                  <option value="Nueva Ecija - Palayan City">Nueva Ecija - Palayan City</option> 
 
                
                  <option value="Nueva Ecija - Pantabangan">Nueva Ecija - Pantabangan</option> 
 
                
                  <option value="Nueva Ecija - Penaranda">Nueva Ecija - Penaranda</option> 
 
                
                  <option value="Nueva Ecija - Quezon">Nueva Ecija - Quezon</option> 
 
                
                  <option value="Nueva Ecija - Rizal">Nueva Ecija - Rizal</option> 
 
                
                  <option value="Nueva Ecija - San Antonio">Nueva Ecija - San Antonio</option> 
 
                
                  <option value="Nueva Ecija - San Isidro">Nueva Ecija - San Isidro</option> 
 
                
                  <option value="Nueva Ecija - San Jose City">Nueva Ecija - San Jose City</option> 
 
                
                  <option value="Nueva Ecija - San Leonardo">Nueva Ecija - San Leonardo</option> 
 
                
                  <option value="Nueva Ecija - Santa Rosa">Nueva Ecija - Santa Rosa</option> 
 
                
                  <option value="Nueva Ecija - Santo Domingo">Nueva Ecija - Santo Domingo</option> 
 
                
                  <option value="Nueva Ecija - Talavera">Nueva Ecija - Talavera</option> 
 
                
                  <option value="Nueva Ecija - Talugtug">Nueva Ecija - Talugtug</option> 
 
                
                  <option value="Nueva Ecija - Zaragoza">Nueva Ecija - Zaragoza</option> 
 
                
                  <option value="Nueva Vizcaya - Ambaguio">Nueva Vizcaya - Ambaguio</option> 
 
                
                  <option value="Nueva Vizcaya - Aritao">Nueva Vizcaya - Aritao</option> 
 
                
                  <option value="Nueva Vizcaya - Bagabag">Nueva Vizcaya - Bagabag</option> 
 
                
                  <option value="Nueva Vizcaya - Bambang">Nueva Vizcaya - Bambang</option> 
 
                
                  <option value="Nueva Vizcaya - Bayombong">Nueva Vizcaya - Bayombong</option> 
 
                
                  <option value="Nueva Vizcaya - Diadi">Nueva Vizcaya - Diadi</option> 
 
                
                  <option value="Nueva Vizcaya - Dupax Del Norte">Nueva Vizcaya - Dupax Del Norte</option> 
 
                
                  <option value="Nueva Vizcaya - Dupax Del Sur">Nueva Vizcaya - Dupax Del Sur</option> 
 
                
                  <option value="Nueva Vizcaya - Kayapa">Nueva Vizcaya - Kayapa</option> 
 
                
                  <option value="Nueva Vizcaya - Quezon">Nueva Vizcaya - Quezon</option> 
 
                
                  <option value="Nueva Vizcaya - Santa Fe">Nueva Vizcaya - Santa Fe</option> 
 
                
                  <option value="Nueva Vizcaya - Solano">Nueva Vizcaya - Solano</option> 
 
                
                  <option value="Nueva Vizcaya - Villaverde">Nueva Vizcaya - Villaverde</option> 
 
                
                  <option value="Occidental Mindoro - Abra de Ilog">Occidental Mindoro - Abra de Ilog</option> 
 
                
                  <option value="Occidental Mindoro - Calintaan">Occidental Mindoro - Calintaan</option> 
 
                
                  <option value="Occidental Mindoro - Looc">Occidental Mindoro - Looc</option> 
 
                
                  <option value="Occidental Mindoro - Lubang">Occidental Mindoro - Lubang</option> 
 
                
                  <option value="Occidental Mindoro - Magsaysay">Occidental Mindoro - Magsaysay</option> 
 
                
                  <option value="Occidental Mindoro - Mamburao">Occidental Mindoro - Mamburao</option> 
 
                
                  <option value="Occidental Mindoro - Paluan">Occidental Mindoro - Paluan</option> 
 
                
                  <option value="Occidental Mindoro - Rizal">Occidental Mindoro - Rizal</option> 
 
                
                  <option value="Occidental Mindoro - Sablan">Occidental Mindoro - Sablan</option> 
 
                
                  <option value="Occidental Mindoro - San Jose">Occidental Mindoro - San Jose</option> 
 
                
                  <option value="Occidental Mindoro - Santa Cruz">Occidental Mindoro - Santa Cruz</option> 
 
                
                  <option value="Oriental Mindoro - Baco">Oriental Mindoro - Baco</option> 
 
                
                  <option value="Oriental Mindoro - Bansud">Oriental Mindoro - Bansud</option> 
 
                
                  <option value="Oriental Mindoro - Bongabong">Oriental Mindoro - Bongabong</option> 
 
                
                  <option value="Oriental Mindoro - Bulalacao (San Pedro)">Oriental Mindoro - Bulalacao (San Pedro)</option> 
 
                
                  <option value="Oriental Mindoro - Calapan City">Oriental Mindoro - Calapan City</option> 
 
                
                  <option value="Oriental Mindoro - Gloria">Oriental Mindoro - Gloria</option> 
 
                
                  <option value="Oriental Mindoro - Mansalay">Oriental Mindoro - Mansalay</option> 
 
                
                  <option value="Oriental Mindoro - Naujan">Oriental Mindoro - Naujan</option> 
 
                
                  <option value="Oriental Mindoro - Pinamalayan">Oriental Mindoro - Pinamalayan</option> 
 
                
                  <option value="Oriental Mindoro - Pola">Oriental Mindoro - Pola</option> 
 
                
                  <option value="Oriental Mindoro - Puerto Galera">Oriental Mindoro - Puerto Galera</option> 
 
                
                  <option value="Oriental Mindoro - Roxas">Oriental Mindoro - Roxas</option> 
 
                
                  <option value="Oriental Mindoro - San Teodoro">Oriental Mindoro - San Teodoro</option> 
 
                
                  <option value="Oriental Mindoro - Socorro">Oriental Mindoro - Socorro</option> 
 
                
                  <option value="Oriental Mindoro - Victoria">Oriental Mindoro - Victoria</option> 
 
                
                  <option value="Palawan - Aborlan">Palawan - Aborlan</option> 
 
                

                  <option value="Palawan - Agutaya">Palawan - Agutaya</option> 
 
                
                  <option value="Palawan - Araceli">Palawan - Araceli</option> 
 
                
                  <option value="Palawan - Balabac">Palawan - Balabac</option> 
 
                
                  <option value="Palawan - Bataraza">Palawan - Bataraza</option> 
 
                
                  <option value="Palawan - Brooke's Point">Palawan - Brooke's Point</option> 
 
                
                  <option value="Palawan - Busuanga">Palawan - Busuanga</option> 
 
                
                  <option value="Palawan - Cagayancillo">Palawan - Cagayancillo</option> 
 
                
                  <option value="Palawan - Coron">Palawan - Coron</option> 
 
                
                  <option value="Palawan - Culion">Palawan - Culion</option> 
 
                
                  <option value="Palawan - Cuyo">Palawan - Cuyo</option> 
 
                
                  <option value="Palawan - Dumaran">Palawan - Dumaran</option> 
 
                
                  <option value="Palawan - El Nido (Bacuit)">Palawan - El Nido (Bacuit)</option> 
 
                
                  <option value="Palawan - Kalayaan">Palawan - Kalayaan</option> 
 
                
                  <option value="Palawan - Linapacan">Palawan - Linapacan</option> 
 
                
                  <option value="Palawan - Magsaysay">Palawan - Magsaysay</option> 
 
                
                  <option value="Palawan - Narra">Palawan - Narra</option> 
 
                
                  <option value="Palawan - Puerto Princesa City">Palawan - Puerto Princesa City</option> 
 
                
                  <option value="Palawan - Quezon">Palawan - Quezon</option> 
 
                
                  <option value="Palawan - Rizal (Marcos)">Palawan - Rizal (Marcos)</option> 
 
                
                  <option value="Palawan - Roxas">Palawan - Roxas</option> 
 
                
                  <option value="Palawan - San Vicente">Palawan - San Vicente</option> 
 
                
                  <option value="Palawan - Sofronio Espanola">Palawan - Sofronio Espanola</option> 
 
                
                  <option value="Palawan - Taytay">Palawan - Taytay</option> 
 
                
                  <option value="Pampanga - Angeles City">Pampanga - Angeles City</option> 
 
                
                  <option value="Pampanga - Apalit">Pampanga - Apalit</option> 
 
                
                  <option value="Pampanga - Arayat">Pampanga - Arayat</option> 
 
                
                  <option value="Pampanga - Bacolor">Pampanga - Bacolor</option> 
 
                
                  <option value="Pampanga - Candaba">Pampanga - Candaba</option> 
 
                
                  <option value="Pampanga - Floridablanca">Pampanga - Floridablanca</option> 
 
                
                  <option value="Pampanga - Guagua">Pampanga - Guagua</option> 
 
                
                  <option value="Pampanga - Lubao">Pampanga - Lubao</option> 
 
                
                  <option value="Pampanga - Mabalacat">Pampanga - Mabalacat</option> 
 
                
                  <option value="Pampanga - Macabebe">Pampanga - Macabebe</option> 
 
                
                  <option value="Pampanga - Magalang">Pampanga - Magalang</option> 
 
                
                  <option value="Pampanga - Masantol">Pampanga - Masantol</option> 
 
                
                  <option value="Pampanga - Mexico">Pampanga - Mexico</option> 
 
                
                  <option value="Pampanga - Minalin">Pampanga - Minalin</option> 
 
                
                  <option value="Pampanga - Porac">Pampanga - Porac</option> 
 
                
                  <option value="Pampanga - San Fernando City">Pampanga - San Fernando City</option> 
 
                
                  <option value="Pampanga - San Luis">Pampanga - San Luis</option> 
 
                
                  <option value="Pampanga - San Simon">Pampanga - San Simon</option> 
 
                
                  <option value="Pampanga - Santa Ana">Pampanga - Santa Ana</option> 
 
                
                  <option value="Pampanga - Santa Rita">Pampanga - Santa Rita</option> 
 
                
                  <option value="Pampanga - Santo Tomas">Pampanga - Santo Tomas</option> 
 
                
                  <option value="Pampanga - Sasmoan (Sexmoan)">Pampanga - Sasmoan (Sexmoan)</option> 
 
                
                  <option value="Pangasinan - Agno">Pangasinan - Agno</option> 
 
                
                  <option value="Pangasinan - Aguilar">Pangasinan - Aguilar</option> 
 
                
                  <option value="Pangasinan - Alaminos City">Pangasinan - Alaminos City</option> 
 
                
                  <option value="Pangasinan - Alcala">Pangasinan - Alcala</option> 
 
                
                  <option value="Pangasinan - Anda">Pangasinan - Anda</option> 
 
                
                  <option value="Pangasinan - Asingan">Pangasinan - Asingan</option> 
 
                
                  <option value="Pangasinan - Balungao">Pangasinan - Balungao</option> 
 
                
                  <option value="Pangasinan - Bani">Pangasinan - Bani</option> 
 
                
                  <option value="Pangasinan - Basista">Pangasinan - Basista</option> 
 
                
                  <option value="Pangasinan - Bautista">Pangasinan - Bautista</option> 
 
                
                  <option value="Pangasinan - Bayambang">Pangasinan - Bayambang</option> 
 
                
                  <option value="Pangasinan - Binalonan">Pangasinan - Binalonan</option> 
 
                
                  <option value="Pangasinan - Binmaley">Pangasinan - Binmaley</option> 
 
                
                  <option value="Pangasinan - Bolinao">Pangasinan - Bolinao</option> 
 
                
                  <option value="Pangasinan - Bugallon">Pangasinan - Bugallon</option> 
 
                
                  <option value="Pangasinan - Burgos">Pangasinan - Burgos</option> 
 
                
                  <option value="Pangasinan - Calasiao">Pangasinan - Calasiao</option> 
 
                
                  <option value="Pangasinan - Dagupan City">Pangasinan - Dagupan City</option> 
 
                
                  <option value="Pangasinan - Dasol">Pangasinan - Dasol</option> 
 
                
                  <option value="Pangasinan - Infanta">Pangasinan - Infanta</option> 
 
                
                  <option value="Pangasinan - Labrador">Pangasinan - Labrador</option> 
 
                
                  <option value="Pangasinan - Laoac">Pangasinan - Laoac</option> 
 
                
                  <option value="Pangasinan - Lingayen">Pangasinan - Lingayen</option> 
 
                
                  <option value="Pangasinan - Mabini">Pangasinan - Mabini</option> 
 
                
                  <option value="Pangasinan - Malasiqui">Pangasinan - Malasiqui</option> 
 
                
                  <option value="Pangasinan - Manaoag">Pangasinan - Manaoag</option> 
 
                
                  <option value="Pangasinan - Mangaldan">Pangasinan - Mangaldan</option> 
 
                
                  <option value="Pangasinan - Mangatarem">Pangasinan - Mangatarem</option> 
 
                
                  <option value="Pangasinan - Mapandan">Pangasinan - Mapandan</option> 
 
                
                  <option value="Pangasinan - Natividad">Pangasinan - Natividad</option> 
 
                
                  <option value="Pangasinan - Pozorrubio">Pangasinan - Pozorrubio</option> 
 
                
                  <option value="Pangasinan - Rosales">Pangasinan - Rosales</option> 
 
                
                  <option value="Pangasinan - San Carlos City">Pangasinan - San Carlos City</option> 
 
                
                  <option value="Pangasinan - San Fabian">Pangasinan - San Fabian</option> 
 
                
                  <option value="Pangasinan - San Jacinto">Pangasinan - San Jacinto</option> 
 
                
                  <option value="Pangasinan - San Manuel">Pangasinan - San Manuel</option> 
 
                
                  <option value="Pangasinan - San Nicolas">Pangasinan - San Nicolas</option> 
 
                
                  <option value="Pangasinan - San Quintin">Pangasinan - San Quintin</option> 
 
                
                  <option value="Pangasinan - Santa Barbara">Pangasinan - Santa Barbara</option> 
 
                
                  <option value="Pangasinan - Santa Maria">Pangasinan - Santa Maria</option> 
 
                
                  <option value="Pangasinan - Santo Tomas">Pangasinan - Santo Tomas</option> 
 
                
                  <option value="Pangasinan - Sison">Pangasinan - Sison</option> 
 
                
                  <option value="Pangasinan - Sual">Pangasinan - Sual</option> 
 
                
                  <option value="Pangasinan - Tayug">Pangasinan - Tayug</option> 
 
                
                  <option value="Pangasinan - Umingan">Pangasinan - Umingan</option> 
 
                
                  <option value="Pangasinan - Urbiztondo">Pangasinan - Urbiztondo</option> 
 
                
                  <option value="Pangasinan - Urdaneta City">Pangasinan - Urdaneta City</option> 
 
                
                  <option value="Pangasinan - Villasis">Pangasinan - Villasis</option> 
 
                
                  <option value="Quezon - Agdangan">Quezon - Agdangan</option> 
 
                
                  <option value="Quezon - Alabat">Quezon - Alabat</option> 
 
                
                  <option value="Quezon - Atimonan">Quezon - Atimonan</option> 
 
                
                  <option value="Quezon - Buenavista">Quezon - Buenavista</option> 
 
                
                  <option value="Quezon - Burdeos">Quezon - Burdeos</option> 
 
                
                  <option value="Quezon - Calauag">Quezon - Calauag</option> 
 
                
                  <option value="Quezon - Candelaria">Quezon - Candelaria</option> 
 
                
                  <option value="Quezon - Catanauan">Quezon - Catanauan</option> 
 
                
                  <option value="Quezon - Dolores">Quezon - Dolores</option> 
 
                
                  <option value="Quezon - General Luna">Quezon - General Luna</option> 
 
                
                  <option value="Quezon - General Nakar">Quezon - General Nakar</option> 
 
                
                  <option value="Quezon - Guinayangan">Quezon - Guinayangan</option> 
 
                
                  <option value="Quezon - Gumaca">Quezon - Gumaca</option> 
 
                
                  <option value="Quezon - Infanta">Quezon - Infanta</option> 
 
                
                  <option value="Quezon - Jomalig">Quezon - Jomalig</option> 
 
                
                  <option value="Quezon - Lopez">Quezon - Lopez</option> 
 
                
                  <option value="Quezon - Lucban">Quezon - Lucban</option> 
 
                
                  <option value="Quezon - Lucena City">Quezon - Lucena City</option> 
 
                
                  <option value="Quezon - Macalelon">Quezon - Macalelon</option> 
 
                
                  <option value="Quezon - Mauban">Quezon - Mauban</option> 
 
                
                  <option value="Quezon - Mulanay">Quezon - Mulanay</option> 
 
                
                  <option value="Quezon - Padre Burgos">Quezon - Padre Burgos</option> 
 
                
                  <option value="Quezon - Pagbilao">Quezon - Pagbilao</option> 
 
                
                  <option value="Quezon - Panukulan">Quezon - Panukulan</option> 
 
                
                  <option value="Quezon - Patnanungan">Quezon - Patnanungan</option> 
 
                
                  <option value="Quezon - Perez">Quezon - Perez</option> 
 
                
                  <option value="Quezon - Pitogo">Quezon - Pitogo</option> 
 
                
                  <option value="Quezon - Plaridel">Quezon - Plaridel</option> 
 
                
                  <option value="Quezon - Polillo">Quezon - Polillo</option> 
 
                
                  <option value="Quezon - Quezon">Quezon - Quezon</option> 
 
                
                  <option value="Quezon - Real">Quezon - Real</option> 
 
                
                  <option value="Quezon - Sampaloc">Quezon - Sampaloc</option> 
 
                
                  <option value="Quezon - San Andres">Quezon - San Andres</option> 
 
                
                  <option value="Quezon - San Antonio">Quezon - San Antonio</option> 
 
                
                  <option value="Quezon - San Francisco (Aurora)">Quezon - San Francisco (Aurora)</option> 
 
                
                  <option value="Quezon - San Narciso">Quezon - San Narciso</option> 
 
                
                  <option value="Quezon - Sariaya">Quezon - Sariaya</option> 
 
                
                  <option value="Quezon - Tagkawayan">Quezon - Tagkawayan</option> 
 
                
                  <option value="Quezon - Tayabas">Quezon - Tayabas</option> 
 
                
                  <option value="Quezon - Tiaong">Quezon - Tiaong</option> 
 
                
                  <option value="Quezon - Unisan">Quezon - Unisan</option> 
 
                
                  <option value="Quirino - Aglipay">Quirino - Aglipay</option> 
 
                
                  <option value="Quirino - Cabarroguis (Capital)">Quirino - Cabarroguis (Capital)</option> 
 
                
                  <option value="Quirino - Diffun">Quirino - Diffun</option> 
 
                
                  <option value="Quirino - Maddela">Quirino - Maddela</option> 
 
                
                  <option value="Quirino - Nagtipunan">Quirino - Nagtipunan</option> 
 
                
                  <option value="Quirino - Saguday">Quirino - Saguday</option> 
 
                
                  <option value="Rizal - Angono">Rizal - Angono</option> 
 
                
                  <option value="Rizal - Antipolo City">Rizal - Antipolo City</option> 
 
                
                  <option value="Rizal - Baras">Rizal - Baras</option> 
 
                
                  <option value="Rizal - Binangonan">Rizal - Binangonan</option> 
 
                
                  <option value="Rizal - Cainta">Rizal - Cainta</option> 
 
                
                  <option value="Rizal - Cardona">Rizal - Cardona</option> 
 
                
                  <option value="Rizal - Jala-Jala">Rizal - Jala-Jala</option> 
 
                
                  <option value="Rizal - Morong">Rizal - Morong</option> 
 
                
                  <option value="Rizal - Pililla">Rizal - Pililla</option> 
 
                
                  <option value="Rizal - Rodriguez (Montalban)">Rizal - Rodriguez (Montalban)</option> 
 
                
                  <option value="Rizal - San Mateo">Rizal - San Mateo</option> 
 
                
                  <option value="Rizal - Tanay">Rizal - Tanay</option> 
 
                
                  <option value="Rizal - Taytay">Rizal - Taytay</option> 
 
                
                  <option value="Rizal - Teresa">Rizal - Teresa</option> 
 
                
                  <option value="Romblon - Alcantara">Romblon - Alcantara</option> 
 
                
                  <option value="Romblon - Banton">Romblon - Banton</option> 
 
                
                  <option value="Romblon - Cajidiocan">Romblon - Cajidiocan</option> 
 
                
                  <option value="Romblon - Calatrava">Romblon - Calatrava</option> 
 
                
                  <option value="Romblon - Concepcion">Romblon - Concepcion</option> 
 
                
                  <option value="Romblon - Corcuera">Romblon - Corcuera</option> 
 
                
                  <option value="Romblon - Ferrol">Romblon - Ferrol</option> 
 
                
                  <option value="Romblon - Looc">Romblon - Looc</option> 
 
                
                  <option value="Romblon - Magdiwang">Romblon - Magdiwang</option> 
 
                
                  <option value="Romblon - Odiongan">Romblon - Odiongan</option> 
 
                
                  <option value="Romblon - Romblon">Romblon - Romblon</option> 
 
                
                  <option value="Romblon - San Agustin">Romblon - San Agustin</option> 
 
                
                  <option value="Romblon - San Andres">Romblon - San Andres</option> 
 
                
                  <option value="Romblon - San Fernando">Romblon - San Fernando</option> 
 
                
                  <option value="Romblon - San Jose">Romblon - San Jose</option> 
 
                
                  <option value="Romblon - Santa Fe">Romblon - Santa Fe</option> 
 
                
                  <option value="Romblon - Santa Maria (Imelda)">Romblon - Santa Maria (Imelda)</option> 
 
                
                  <option value="Sarangani - Alabel (Capital)">Sarangani - Alabel (Capital)</option> 
 
                
                  <option value="Sarangani - Glan">Sarangani - Glan</option> 
 
                
                  <option value="Sarangani - Kiamba">Sarangani - Kiamba</option> 
 
                
                  <option value="Sarangani - Maasim">Sarangani - Maasim</option> 
 
                
                  <option value="Sarangani - Maitum">Sarangani - Maitum</option> 
 
                
                  <option value="Sarangani - Malapatan">Sarangani - Malapatan</option> 
 
                
                  <option value="Sarangani - Malungon">Sarangani - Malungon</option> 
 
                
                  <option value="Siquijor - Enrique Villanueva">Siquijor - Enrique Villanueva</option> 
 
                
                  <option value="Siquijor - Larena">Siquijor - Larena</option> 
 
                
                  <option value="Siquijor - Lazi">Siquijor - Lazi</option> 
 
                
                  <option value="Siquijor - Maria">Siquijor - Maria</option> 
 
                
                  <option value="Siquijor - San Juan">Siquijor - San Juan</option> 
 
                
                  <option value="Siquijor - Siquijor">Siquijor - Siquijor</option> 
 
                
                  <option value="Sorsogon - Bulan">Sorsogon - Bulan</option> 
 
                
                  <option value="Sorsogon - Bulusan">Sorsogon - Bulusan</option> 
 
                
                  <option value="Sorsogon - Casiguran">Sorsogon - Casiguran</option> 
 
                
                  <option value="Sorsogon - Castilla">Sorsogon - Castilla</option> 
 
                
                  <option value="Sorsogon - Donsol">Sorsogon - Donsol</option> 
 
                
                  <option value="Sorsogon - Gubat">Sorsogon - Gubat</option> 
 
                
                  <option value="Sorsogon - Irosin">Sorsogon - Irosin</option> 
 
                
                  <option value="Sorsogon - Juban">Sorsogon - Juban</option> 
 
                
                  <option value="Sorsogon - Magallanes">Sorsogon - Magallanes</option> 
 
                
                  <option value="Sorsogon - Matnog">Sorsogon - Matnog</option> 
 
                
                  <option value="Sorsogon - Pilar">Sorsogon - Pilar</option> 
 
                
                  <option value="Sorsogon - Prieto Diaz">Sorsogon - Prieto Diaz</option> 
 
                
                  <option value="Sorsogon - Santa Magdalena">Sorsogon - Santa Magdalena</option> 
 
                
                  <option value="Sorsogon - Sorsogon City">Sorsogon - Sorsogon City</option> 
 
                
                  <option value="South Cotabato - Banga">South Cotabato - Banga</option> 
 
                
                  <option value="South Cotabato - General Santos City (Dadiangas)">South Cotabato - General Santos City (Dadiangas)</option> 
 
                
                  <option value="South Cotabato - Koronadal City (Capital)">South Cotabato - Koronadal City (Capital)</option> 
 
                
                  <option value="South Cotabato - Lake Sebu">South Cotabato - Lake Sebu</option> 
 
                
                  <option value="South Cotabato - Norala">South Cotabato - Norala</option> 
 
                
                  <option value="South Cotabato - Polomolok">South Cotabato - Polomolok</option> 
 
                
                  <option value="South Cotabato - Santo Nino">South Cotabato - Santo Nino</option> 
 
                
                  <option value="South Cotabato - Surallah">South Cotabato - Surallah</option> 
 
                
                  <option value="South Cotabato - T'boli">South Cotabato - T'boli</option> 
 
                
                  <option value="South Cotabato - Tampakan">South Cotabato - Tampakan</option> 
 
                
                  <option value="South Cotabato - Tantangan">South Cotabato - Tantangan</option> 
 
                
                  <option value="South Cotabato - Tupi">South Cotabato - Tupi</option> 
 
                
                  <option value="Southern Leyte - Anahawan">Southern Leyte - Anahawan</option> 
 
                
                  <option value="Southern Leyte - Bontoc">Southern Leyte - Bontoc</option> 
 
                
                  <option value="Southern Leyte - Hinunangan">Southern Leyte - Hinunangan</option> 
 
                
                  <option value="Southern Leyte - Hinundayan">Southern Leyte - Hinundayan</option> 
 
                
                  <option value="Southern Leyte - Libagon">Southern Leyte - Libagon</option> 
 
                
                  <option value="Southern Leyte - Liloan">Southern Leyte - Liloan</option> 
 
                
                  <option value="Southern Leyte - Limasawa">Southern Leyte - Limasawa</option> 
 
                
                  <option value="Southern Leyte - Maasin City">Southern Leyte - Maasin City</option> 
 
                
                  <option value="Southern Leyte - Macrohon">Southern Leyte - Macrohon</option> 
 
                
                  <option value="Southern Leyte - Malitbog">Southern Leyte - Malitbog</option> 
 
                
                  <option value="Southern Leyte - Padre Burgos">Southern Leyte - Padre Burgos</option> 
 
                
                  <option value="Southern Leyte - Pintuyan">Southern Leyte - Pintuyan</option> 
 
                
                  <option value="Southern Leyte - Saint Bernard">Southern Leyte - Saint Bernard</option> 
 
                
                  <option value="Southern Leyte - San Francisco">Southern Leyte - San Francisco</option> 
 
                
                  <option value="Southern Leyte - San Juan (Cabalian)">Southern Leyte - San Juan (Cabalian)</option> 
 
                
                  <option value="Southern Leyte - San Ricardo">Southern Leyte - San Ricardo</option> 
 
                
                  <option value="Southern Leyte - Silago">Southern Leyte - Silago</option> 
 
                
                  <option value="Southern Leyte - Sogod">Southern Leyte - Sogod</option> 
 
                
                  <option value="Southern Leyte - Tomas Oppus">Southern Leyte - Tomas Oppus</option> 
 
                
                  <option value="Sultan Kudarat - Bagumbayan">Sultan Kudarat - Bagumbayan</option> 
 
                
                  <option value="Sultan Kudarat - Columbio">Sultan Kudarat - Columbio</option> 
 
                
                  <option value="Sultan Kudarat - Esperanza">Sultan Kudarat - Esperanza</option> 
 
                
                  <option value="Sultan Kudarat - Isulan">Sultan Kudarat - Isulan</option> 
 
                
                  <option value="Sultan Kudarat - Kalamansig">Sultan Kudarat - Kalamansig</option> 
 
                
                  <option value="Sultan Kudarat - Lambayong (Mariano Marcos)">Sultan Kudarat - Lambayong (Mariano Marcos)</option> 
 
                
                  <option value="Sultan Kudarat - Lebak">Sultan Kudarat - Lebak</option> 
 
                
                  <option value="Sultan Kudarat - Lutayan">Sultan Kudarat - Lutayan</option> 
 
                
                  <option value="Sultan Kudarat - Palimbang">Sultan Kudarat - Palimbang</option> 
 
                
                  <option value="Sultan Kudarat - President Quirino">Sultan Kudarat - President Quirino</option> 
 
                
                  <option value="Sultan Kudarat - Sen. Ninoy Aquino">Sultan Kudarat - Sen. Ninoy Aquino</option> 
 
                
                  <option value="Sultan Kudarat - Tacurong City">Sultan Kudarat - Tacurong City</option> 
 
                
                  <option value="Sulu - Hadji Panglima Tahil (Marungga">Sulu - Hadji Panglima Tahil (Marungga</option> 
 
                
                  <option value="Sulu - Indanan">Sulu - Indanan</option> 
 
                
                  <option value="Sulu - Jolo (Capital)">Sulu - Jolo (Capital)</option> 
 
                
                  <option value="Sulu - Kalingalan Caluang">Sulu - Kalingalan Caluang</option> 
 
                
                  <option value="Sulu - Lugus">Sulu - Lugus</option> 
 
                
                  <option value="Sulu - Luuk">Sulu - Luuk</option> 
 
                
                  <option value="Sulu - Maimbung">Sulu - Maimbung</option> 
 
                
                  <option value="Sulu - Old Panamao">Sulu - Old Panamao</option> 
 
                
                  <option value="Sulu - Pandami">Sulu - Pandami</option> 
 
                
                  <option value="Sulu - Panglima Estino (New Panamao)">Sulu - Panglima Estino (New Panamao)</option> 
 
                
                  <option value="Sulu - Pangutaran">Sulu - Pangutaran</option> 
 
                
                  <option value="Sulu - Parang">Sulu - Parang</option> 
 
                
                  <option value="Sulu - Pata">Sulu - Pata</option> 
 
                
                  <option value="Sulu - Patikul">Sulu - Patikul</option> 
 
                
                  <option value="Sulu - Siasi">Sulu - Siasi</option> 
 
                
                  <option value="Sulu - Talipao">Sulu - Talipao</option> 
 
                
                  <option value="Sulu - Tapul">Sulu - Tapul</option> 
 
                
                  <option value="Sulu - Tongkil">Sulu - Tongkil</option> 
 
                
                  <option value="Surigao Del Norte - Alegria">Surigao Del Norte - Alegria</option> 
 
                
                  <option value="Surigao Del Norte - Bacuag">Surigao Del Norte - Bacuag</option> 
 
                
                  <option value="Surigao Del Norte - Basilisa (Rizal)">Surigao Del Norte - Basilisa (Rizal)</option> 
 
                
                  <option value="Surigao Del Norte - Burgos">Surigao Del Norte - Burgos</option> 
 
                
                  <option value="Surigao Del Norte - Cagdianao">Surigao Del Norte - Cagdianao</option> 
 
                
                  <option value="Surigao Del Norte - Claver">Surigao Del Norte - Claver</option> 
 
                
                  <option value="Surigao Del Norte - Dapa">Surigao Del Norte - Dapa</option> 
 
                
                  <option value="Surigao Del Norte - Del Carmen">Surigao Del Norte - Del Carmen</option> 
 
                
                  <option value="Surigao Del Norte - Dinagat">Surigao Del Norte - Dinagat</option> 
 
                
                  <option value="Surigao Del Norte - General Luna">Surigao Del Norte - General Luna</option> 
 
                
                  <option value="Surigao Del Norte - Gigaquit">Surigao Del Norte - Gigaquit</option> 
 
                
                  <option value="Surigao Del Norte - Libjo (Albor)">Surigao Del Norte - Libjo (Albor)</option> 
 
                
                  <option value="Surigao Del Norte - Loreto">Surigao Del Norte - Loreto</option> 
 
                
                  <option value="Surigao Del Norte - Mainit">Surigao Del Norte - Mainit</option> 
 
                
                  <option value="Surigao Del Norte - Malimono">Surigao Del Norte - Malimono</option> 
 
                
                  <option value="Surigao Del Norte - Pilar">Surigao Del Norte - Pilar</option> 
 
                
                  <option value="Surigao Del Norte - Placer">Surigao Del Norte - Placer</option> 
 
                
                  <option value="Surigao Del Norte - San Benito">Surigao Del Norte - San Benito</option> 
 
                
                  <option value="Surigao Del Norte - San Francisco (Anao-Aon)">Surigao Del Norte - San Francisco (Anao-Aon)</option> 
 
                
                  <option value="Surigao Del Norte - San Isidro">Surigao Del Norte - San Isidro</option> 
 
                
                  <option value="Surigao Del Norte - San Jose">Surigao Del Norte - San Jose</option> 
 
                
                  <option value="Surigao Del Norte - Santa Monica">Surigao Del Norte - Santa Monica</option> 
 
                
                  <option value="Surigao Del Norte - Sison">Surigao Del Norte - Sison</option> 
 
                
                  <option value="Surigao Del Norte - Socorro">Surigao Del Norte - Socorro</option> 
 
                
                  <option value="Surigao Del Norte - Surigao City (Capital)">Surigao Del Norte - Surigao City (Capital)</option> 
 
                
                  <option value="Surigao Del Norte - Tagana-An">Surigao Del Norte - Tagana-An</option> 
 
                
                  <option value="Surigao Del Norte - Tubajon">Surigao Del Norte - Tubajon</option> 
 
                
                  <option value="Surigao Del Norte - Tubod">Surigao Del Norte - Tubod</option> 
 
                
                  <option value="Surigao Del Sur - Barobo">Surigao Del Sur - Barobo</option> 
 
                
                  <option value="Surigao Del Sur - Bayabas">Surigao Del Sur - Bayabas</option> 
 
                
                  <option value="Surigao Del Sur - Bislig City">Surigao Del Sur - Bislig City</option> 
 
                
                  <option value="Surigao Del Sur - Cagwait">Surigao Del Sur - Cagwait</option> 
 
                
                  <option value="Surigao Del Sur - Cantilan">Surigao Del Sur - Cantilan</option> 
 
                
                  <option value="Surigao Del Sur - Carmen">Surigao Del Sur - Carmen</option> 
 
                
                  <option value="Surigao Del Sur - Carrascal">Surigao Del Sur - Carrascal</option> 
 
                
                  <option value="Surigao Del Sur - Cortes">Surigao Del Sur - Cortes</option> 
 
                
                  <option value="Surigao Del Sur - Hinatuan">Surigao Del Sur - Hinatuan</option> 
 
                
                  <option value="Surigao Del Sur - Lanuza">Surigao Del Sur - Lanuza</option> 
 
                
                  <option value="Surigao Del Sur - Lianga">Surigao Del Sur - Lianga</option> 
 
                
                  <option value="Surigao Del Sur - Lingig">Surigao Del Sur - Lingig</option> 
 
                
                  <option value="Surigao Del Sur - Madrid">Surigao Del Sur - Madrid</option> 
 
                
                  <option value="Surigao Del Sur - Marihatag">Surigao Del Sur - Marihatag</option> 
 
                
                  <option value="Surigao Del Sur - San Agustin">Surigao Del Sur - San Agustin</option> 
 
                
                  <option value="Surigao Del Sur - San Miguel">Surigao Del Sur - San Miguel</option> 
 
                
                  <option value="Surigao Del Sur - Tagbina">Surigao Del Sur - Tagbina</option> 
 
                
                  <option value="Surigao Del Sur - Tago">Surigao Del Sur - Tago</option> 
 
                
                  <option value="Surigao Del Sur - Tandag (Capital)">Surigao Del Sur - Tandag (Capital)</option> 
 
                
                  <option value="Tarlac - Anao">Tarlac - Anao</option> 
 
                
                  <option value="Tarlac - Bamban">Tarlac - Bamban</option> 
 
                
                  <option value="Tarlac - Camiling">Tarlac - Camiling</option> 
 
                
                  <option value="Tarlac - Capas">Tarlac - Capas</option> 
 
                
                  <option value="Tarlac - Concepcion">Tarlac - Concepcion</option> 
 
                
                  <option value="Tarlac - Gerona">Tarlac - Gerona</option> 
 
                
                  <option value="Tarlac - Lapaz">Tarlac - Lapaz</option> 
 
                
                  <option value="Tarlac - Mayantoc">Tarlac - Mayantoc</option> 
 
                
                  <option value="Tarlac - Paniqui">Tarlac - Paniqui</option> 
 
                
                  <option value="Tarlac - Pura">Tarlac - Pura</option> 
 
                
                  <option value="Tarlac - Ramos">Tarlac - Ramos</option> 
 
                
                  <option value="Tarlac - San Clemente">Tarlac - San Clemente</option> 
 
                
                  <option value="Tarlac - San Jose">Tarlac - San Jose</option> 
 
                
                  <option value="Tarlac - San Manuel">Tarlac - San Manuel</option> 
 
                
                  <option value="Tarlac - Santa Ignacia">Tarlac - Santa Ignacia</option> 
 
                
                  <option value="Tarlac - Tarlac City">Tarlac - Tarlac City</option> 
 
                
                  <option value="Tarlac - Victoria">Tarlac - Victoria</option> 
 
                
                  <option value="Tawi-tawi - Bongao">Tawi-tawi - Bongao</option> 
 
                
                  <option value="Tawi-tawi - Languyan">Tawi-tawi - Languyan</option> 
 
                
                  <option value="Tawi-tawi - Mapun (Cagayan De Tawi-Tawi)">Tawi-tawi - Mapun (Cagayan De Tawi-Tawi)</option> 
 
                
                  <option value="Tawi-tawi - Panglima Sugala (Balimbing)">Tawi-tawi - Panglima Sugala (Balimbing)</option> 
 
                
                  <option value="Tawi-tawi - Sapa-Sapa">Tawi-tawi - Sapa-Sapa</option> 
 
                
                  <option value="Tawi-tawi - Simunul">Tawi-tawi - Simunul</option> 
 
                
                  <option value="Tawi-tawi - Sitangkai">Tawi-tawi - Sitangkai</option> 
 
                
                  <option value="Tawi-tawi - South Ubian">Tawi-tawi - South Ubian</option> 
 
                
                  <option value="Tawi-tawi - Tandubas">Tawi-tawi - Tandubas</option> 
 
                
                  <option value="Tawi-tawi - Turtle Islands">Tawi-tawi - Turtle Islands</option> 
 
                
                  <option value="Western Samar - Almagro">Western Samar - Almagro</option> 
 
                
                  <option value="Western Samar - Basey">Western Samar - Basey</option> 
 
                
                  <option value="Western Samar - Calbayog City">Western Samar - Calbayog City</option> 
 
                
                  <option value="Western Samar - Calbiga">Western Samar - Calbiga</option> 
 
                
                  <option value="Western Samar - Catbalogan">Western Samar - Catbalogan</option> 
 
                
                  <option value="Western Samar - Daram">Western Samar - Daram</option> 
 
                
                  <option value="Western Samar - Gandara">Western Samar - Gandara</option> 
 
                
                  <option value="Western Samar - Hinabangan">Western Samar - Hinabangan</option> 
 
                
                  <option value="Western Samar - Jiabong">Western Samar - Jiabong</option> 
 
                
                  <option value="Western Samar - Marabut">Western Samar - Marabut</option> 
 
                
                  <option value="Western Samar - Matuguinao">Western Samar - Matuguinao</option> 
 
                
                  <option value="Western Samar - Motiong">Western Samar - Motiong</option> 
 
                
                  <option value="Western Samar - Pagsanghan">Western Samar - Pagsanghan</option> 
 
                
                  <option value="Western Samar - Paranas (Wright)">Western Samar - Paranas (Wright)</option> 
 
                
                  <option value="Western Samar - Pinabacdao">Western Samar - Pinabacdao</option> 
 
                
                  <option value="Western Samar - San Jorge">Western Samar - San Jorge</option> 
 
                
                  <option value="Western Samar - San Jose De Buan">Western Samar - San Jose De Buan</option> 
 
                
                  <option value="Western Samar - San Sebastian">Western Samar - San Sebastian</option> 
 
                
                  <option value="Western Samar - Santa Margarita">Western Samar - Santa Margarita</option> 
 
                
                  <option value="Western Samar - Santa Rita">Western Samar - Santa Rita</option> 
 
                
                  <option value="Western Samar - Santo Nino">Western Samar - Santo Nino</option> 
 
                
                  <option value="Western Samar - Tagapul-An">Western Samar - Tagapul-An</option> 
 
                
                  <option value="Western Samar - Talalora">Western Samar - Talalora</option> 
 
                
                  <option value="Western Samar - Tarangan">Western Samar - Tarangan</option> 
 
                
                  <option value="Western Samar - Villareal">Western Samar - Villareal</option> 
 
                
                  <option value="Western Samar - Zumarraga">Western Samar - Zumarraga</option> 
 
                
                  <option value="Zambales - Botolan">Zambales - Botolan</option> 
 
                
                  <option value="Zambales - Cabangan">Zambales - Cabangan</option> 
 
                
                  <option value="Zambales - Candelaria">Zambales - Candelaria</option> 
 
                
                  <option value="Zambales - Castillejos">Zambales - Castillejos</option> 
 
                
                  <option value="Zambales - Iba (Capital)">Zambales - Iba (Capital)</option> 
 
                
                  <option value="Zambales - Masinloc">Zambales - Masinloc</option> 
 
                
                  <option value="Zambales - Olonggapo City">Zambales - Olonggapo City</option> 
 
                
                  <option value="Zambales - Palauig">Zambales - Palauig</option> 
 
                
                  <option value="Zambales - San Antonio">Zambales - San Antonio</option> 
 

                
                  <option value="Zambales - San Felipe">Zambales - San Felipe</option> 
 
                
                  <option value="Zambales - San Marcelino">Zambales - San Marcelino</option> 
 
                
                  <option value="Zambales - San Narciso">Zambales - San Narciso</option> 
 
                
                  <option value="Zambales - Santa Cruz">Zambales - Santa Cruz</option> 
 
                
                  <option value="Zambales - Subic">Zambales - Subic</option> 
 
                
                  <option value="Zamboanga Del Norte - Bacungan">Zamboanga Del Norte - Bacungan</option> 
 
                
                  <option value="Zamboanga Del Norte - Baliguian">Zamboanga Del Norte - Baliguian</option> 
 
                
                  <option value="Zamboanga Del Norte - Dapitan City">Zamboanga Del Norte - Dapitan City</option> 
 
                
                  <option value="Zamboanga Del Norte - Dipolog City (Capital)">Zamboanga Del Norte - Dipolog City (Capital)</option> 
 
                
                  <option value="Zamboanga Del Norte - Godod">Zamboanga Del Norte - Godod</option> 
 
                
                  <option value="Zamboanga Del Norte - Gutalac">Zamboanga Del Norte - Gutalac</option> 
 
                
                  <option value="Zamboanga Del Norte - Jose Dalman (Ponot)">Zamboanga Del Norte - Jose Dalman (Ponot)</option> 
 
                
                  <option value="Zamboanga Del Norte - Kalawit">Zamboanga Del Norte - Kalawit</option> 
 
                
                  <option value="Zamboanga Del Norte - Katipunan">Zamboanga Del Norte - Katipunan</option> 
 
                
                  <option value="Zamboanga Del Norte - La Libertad">Zamboanga Del Norte - La Libertad</option> 
 
                
                  <option value="Zamboanga Del Norte - Labason">Zamboanga Del Norte - Labason</option> 
 
                
                  <option value="Zamboanga Del Norte - Liloy">Zamboanga Del Norte - Liloy</option> 
 
                
                  <option value="Zamboanga Del Norte - Manukan">Zamboanga Del Norte - Manukan</option> 
 
                
                  <option value="Zamboanga Del Norte - Mutia">Zamboanga Del Norte - Mutia</option> 
 
                
                  <option value="Zamboanga Del Norte - Pinan (New Pinan)">Zamboanga Del Norte - Pinan (New Pinan)</option> 
 
                
                  <option value="Zamboanga Del Norte - Polanco">Zamboanga Del Norte - Polanco</option> 
 
                
                  <option value="Zamboanga Del Norte - Pres. Manuel A. Roxas">Zamboanga Del Norte - Pres. Manuel A. Roxas</option> 
 
                
                  <option value="Zamboanga Del Norte - Rizal">Zamboanga Del Norte - Rizal</option> 
 
                
                  <option value="Zamboanga Del Norte - Salug">Zamboanga Del Norte - Salug</option> 
 
                
                  <option value="Zamboanga Del Norte - Sergio Osmena Sr.">Zamboanga Del Norte - Sergio Osmena Sr.</option> 
 
                
                  <option value="Zamboanga Del Norte - Siayan">Zamboanga Del Norte - Siayan</option> 
 
                
                  <option value="Zamboanga Del Norte - Sibuco">Zamboanga Del Norte - Sibuco</option> 
 
                
                  <option value="Zamboanga Del Norte - Sibutad">Zamboanga Del Norte - Sibutad</option> 
 
                
                  <option value="Zamboanga Del Norte - Sindangan">Zamboanga Del Norte - Sindangan</option> 
 
                
                  <option value="Zamboanga Del Norte - Siocon">Zamboanga Del Norte - Siocon</option> 
 
                
                  <option value="Zamboanga Del Norte - Sirawai">Zamboanga Del Norte - Sirawai</option> 
 
                
                  <option value="Zamboanga Del Norte - Tampilisan">Zamboanga Del Norte - Tampilisan</option> 
 
                
                  <option value="Zamboanga Del Sur - Aurora">Zamboanga Del Sur - Aurora</option> 
 
                
                  <option value="Zamboanga Del Sur - Bayog">Zamboanga Del Sur - Bayog</option> 
 
                
                  <option value="Zamboanga Del Sur - Dimataling">Zamboanga Del Sur - Dimataling</option> 
 
                
                  <option value="Zamboanga Del Sur - Dinas">Zamboanga Del Sur - Dinas</option> 
 
                
                  <option value="Zamboanga Del Sur - Dumingag">Zamboanga Del Sur - Dumingag</option> 
 
                
                  <option value="Zamboanga Del Sur - Guipos">Zamboanga Del Sur - Guipos</option> 
 
                
                  <option value="Zamboanga Del Sur - Josefina">Zamboanga Del Sur - Josefina</option> 
 
                
                  <option value="Zamboanga Del Sur - Kumalarang">Zamboanga Del Sur - Kumalarang</option> 
 
                
                  <option value="Zamboanga Del Sur - Labangan">Zamboanga Del Sur - Labangan</option> 
 
                
                  <option value="Zamboanga Del Sur - Lakewood">Zamboanga Del Sur - Lakewood</option> 
 
                
                  <option value="Zamboanga Del Sur - Lapuyan">Zamboanga Del Sur - Lapuyan</option> 
 
                
                  <option value="Zamboanga Del Sur - Mahayag">Zamboanga Del Sur - Mahayag</option> 
 
                
                  <option value="Zamboanga Del Sur - Margosatubig">Zamboanga Del Sur - Margosatubig</option> 
 
                
                  <option value="Zamboanga Del Sur - Midsalip">Zamboanga Del Sur - Midsalip</option> 
 
                
                  <option value="Zamboanga Del Sur - Molave">Zamboanga Del Sur - Molave</option> 
 
                
                  <option value="Zamboanga Del Sur - Pagadian City (Capital)">Zamboanga Del Sur - Pagadian City (Capital)</option> 
 
                
                  <option value="Zamboanga Del Sur - Pitogo">Zamboanga Del Sur - Pitogo</option> 
 
                
                  <option value="Zamboanga Del Sur - Ramon Magsaysay (Liargo)">Zamboanga Del Sur - Ramon Magsaysay (Liargo)</option> 
 
                
                  <option value="Zamboanga Del Sur - San Miguel">Zamboanga Del Sur - San Miguel</option> 
 
                
                  <option value="Zamboanga Del Sur - San Pablo">Zamboanga Del Sur - San Pablo</option> 
 
                
                  <option value="Zamboanga Del Sur - Sominot (Don Mariano Marcos)">Zamboanga Del Sur - Sominot (Don Mariano Marcos)</option> 
 
                
                  <option value="Zamboanga Del Sur - Tabina">Zamboanga Del Sur - Tabina</option> 
 
                
                  <option value="Zamboanga Del Sur - Tambulig">Zamboanga Del Sur - Tambulig</option> 
 
                
                  <option value="Zamboanga Del Sur - Tigbao">Zamboanga Del Sur - Tigbao</option> 
 
                
                  <option value="Zamboanga Del Sur - Tukuran">Zamboanga Del Sur - Tukuran</option> 
 
                
                  <option value="Zamboanga Del Sur - Vincenzo A. Sagun">Zamboanga Del Sur - Vincenzo A. Sagun</option> 
 
                
                  <option value="Zamboanga Del Sur - Zamboanga City">Zamboanga Del Sur - Zamboanga City</option> 
 
                
                  <option value="Zamboanga Sibugay - Alicia">Zamboanga Sibugay - Alicia</option> 
 
                
                  <option value="Zamboanga Sibugay - Buug">Zamboanga Sibugay - Buug</option> 
 
                
                  <option value="Zamboanga Sibugay - Diplahan">Zamboanga Sibugay - Diplahan</option> 
 
                
                  <option value="Zamboanga Sibugay - Imelda">Zamboanga Sibugay - Imelda</option> 
 
                
                  <option value="Zamboanga Sibugay - Ipil">Zamboanga Sibugay - Ipil</option> 
 
                
                  <option value="Zamboanga Sibugay - Kabasalan">Zamboanga Sibugay - Kabasalan</option> 
 
                
                  <option value="Zamboanga Sibugay - Mabuhay">Zamboanga Sibugay - Mabuhay</option> 
 
                
                  <option value="Zamboanga Sibugay - Malangas">Zamboanga Sibugay - Malangas</option> 
 
                
                  <option value="Zamboanga Sibugay - Naga">Zamboanga Sibugay - Naga</option> 
 
                
                  <option value="Zamboanga Sibugay - Olutanga">Zamboanga Sibugay - Olutanga</option> 
 
                
                  <option value="Zamboanga Sibugay - Payao">Zamboanga Sibugay - Payao</option> 
 
                
                  <option value="Zamboanga Sibugay - Roseller Lim">Zamboanga Sibugay - Roseller Lim</option> 
 
                
                  <option value="Zamboanga Sibugay - Siay">Zamboanga Sibugay - Siay</option> 
 
                
                  <option value="Zamboanga Sibugay - Talusan">Zamboanga Sibugay - Talusan</option> 
 
                
                  <option value="Zamboanga Sibugay - Titay">Zamboanga Sibugay - Titay</option> 
 
                
                  <option value="Zamboanga Sibugay - Tungawan">Zamboanga Sibugay - Tungawan</option> 
 
			<option value="Others">Others</option> 
                	
                </select>
	</p>
      
      <p>
   	<label for="company">Company:</label>
      <?php 
	  $attributes = array('id' => 'company', 'name' => 'company', 'value' => 'n/a');
	  echo form_input($attributes);?>
      </p>
      
      <p>
   	<label for="email">Email:</label>
      <?php echo form_input($email);?>
      </p>
      
      <p>
   	<label for="phone">Contact #:</label>
      <?php echo form_input($phone);?>
      </p>
      
 	<p>
      <label for="username">Username:</label>
      <?php echo form_input($username);?>
      </p>  

      <p>
   	<label for="password">Password:</label>
      <?php echo form_input($password);?>
      </p>
      
      <p>
 	  <label for="password_confirm">Confirm password :</label>
      <?php echo form_input($password_confirm);?>
      </p>
   
 	<p>
	<label for="agree">I agree:</label>
	<?php echo form_checkbox($cbx_agree)?>
	<?php echo anchor('site/policy_page', 'Our Policy Agreement'); ?>
	</p>
      
      
      <p><?php echo form_submit('submit', 'Create User');?></p>

      
    <?php echo form_close();?>
  <br>
  <a href="#" onclick="history.go(-1); return false;">Back</a>

</div>
