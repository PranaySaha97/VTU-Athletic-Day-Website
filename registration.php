<?php
  //-----------Database connection----------------------------------------------
  $dbServername = "localhost";
  $dbUsername = "root";
  $dbPassword = "root";
  $dbName = "college";
  $db = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
  //----------function--------------------------------------------------------
  function sanitize($dirty){
    return htmlentities($dirty,ENT_QUOTES,"UTF-8");
  }
  //---------------------------------------------------------------------------
  $cname = ((isset($_POST['cname']))?sanitize($_POST['cname']):'');
  $cname = trim($cname);
  $password = ((isset($_POST['password']))?sanitize($_POST['password']):'');
  $password = trim($password);
  $errors = array();
  //-------------------------------------------------------------------------------

  if($_POST){
    // form validation
    if(empty($_POST['cname']) || empty($_POST['password']) )
    {
      header('Location: registration.php');
    }
    // check if collage name and password exits in the database
    $query = $db->query("SELECT * FROM loginform WHERE user = '$cname' AND pass = '$password'");//--change collage_name and password according to your database...
    $colzCount = mysqli_num_rows($query);
    $passCount = mysqli_num_rows($query);
    if($colzCount < 1 || $passCount < 1){
      echo "<script>alert('Invalid collage Name and password!');</script>";
    }else{
      header('Location: intReg.php');
    }
  }
  //--------------------------------------------------------------------------------
 ?>

<?php
 include 'header.php';
 ?>
 <!-- login form-->
<div id="features-sec" class="container set-pad" >
  <div class="row text-center">
      <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
          <h1><strong>LOGIN</strong></h1><br>
              <center>
                <form action="registration.php" method="POST">
                    <table>
                        <tr>
                            <td>College Name </td>
                            <td>
                                <div class="form-group">
                                <select name="cname">
                                   <option value="A M C COLLEGE OF ENGINEERING">A M C COLLEGE OF ENGINEERING</option>
                                                            <option value="ACADEMY FOR TECHNICAL AND MANAGEMENT EXCELLENCE">ACADEMY FOR TECHNICAL AND MANAGEMENT EXCELLENCE</option>
                                                            <option value="ACHARYA INSTITUTE OF TECHNOLOGY">ACHARYA INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="ACHARYA PATHASHALA RURAL COLLEGE OF ENGINEERING">ACHARYA PATHASHALA RURAL COLLEGE OF ENGINEERING</option>
                                                            <option value="ACHARYAR NRV SCHOOL OF ARCHITECTURE">ACHARYAR NRV SCHOOL OF ARCHITECTURE</option>
                                                            <option value="ACHUTHA INSTITUTE OF TECHNOLOGY">ACHUTHA INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="ACS COLLEGE OF ENGINEERING">ACS COLLEGE OF ENGINEERING</option>
                                                            <option value="ADHARSHA INSTITUTE OF TECHNOLOGY">ADHARSHA INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="ADHITYA ACADEMY OF ARCHITECTURE AND MANAGEMENT">ADHITYA ACADEMY OF ARCHITECTURE AND MANAGEMENT</option>
                                                            <option value="ADICHUNCHANAGIRI INSTITUTE OF TECHNOLOGY">ADICHUNCHANAGIRI INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="AGM RURAL COLLEGE OF ENGINEERING & TECHNOLOGY">AGM RURAL COLLEGE OF ENGINEERING & TECHNOLOGY</option>
                                                            <option value="AKSHAYA INSTITUTE OF TECHNOLOGY">AKSHAYA INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="ALPHA COLLEGE OF ENGINEERING">ALPHA COLLEGE OF ENGINEERING</option>
                                                            <option value="ALVA’S INSTITUTE OF ENGINEERING AND TECHNOLOGY">ALVA’S INSTITUTE OF ENGINEERING AND TECHNOLOGY</option>
                                                            <option value="AMRUTHA INSTITUTE OF ENGINEERING AND MANAGEMENT SCIENCES">AMRUTHA INSTITUTE OF ENGINEERING AND MANAGEMENT SCIENCES</option>
                                                            <option value="ANGADI INSTITUTE OF TECHNOLOGY & MANAGEMENT">ANGADI INSTITUTE OF TECHNOLOGY & MANAGEMENT</option>
                                                            <option value="ANJUMAN ENGINEERING COLLEGE">ANJUMAN ENGINEERING COLLEGE</option>
                                                            <option value="APPA INSTITUTE OF ENGINEERING & TECHNOLOGY">APPA INSTITUTE OF ENGINEERING & TECHNOLOGY</option>
                                                            <option value="ATRIA INSTITUTE OF TECHNOLOGY">ATRIA INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="B G S INSTITUTE OF TECHNOLOGY">B G S INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="B M S COLLEGE OF ARCHITECTURE">B M S COLLEGE OF ARCHITECTURE</option>
                                                            <option value="B M S COLLEGE OF ENGINEERING">B M S COLLEGE OF ENGINEERING</option>
                                                            <option value="B M S INSTITUTE OF TECHNOLOGY">B M S INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="B M S[EVEN] COLLEGE OF ENGINEERING">B M S[EVEN] COLLEGE OF ENGINEERING</option>
                                                            <option value="B N M INSTITUTE OF TECHNOLOGY">B N M INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="B T L INSTITUTE OF TECHNOLOGY & MANAGEMENT">B T L INSTITUTE OF TECHNOLOGY & MANAGEMENT</option>
                                                            <option value="B V B COLLEGE OF ENGINEERING & TECHNOLOGY">B V B COLLEGE OF ENGINEERING & TECHNOLOGY</option>
                                                            <option value="BAHUBALI COLLEGE OF ENGINEERING">BAHUBALI COLLEGE OF ENGINEERING</option>
                                                            <option value="BALLARI INSTITUTE OF TECHNOLOGY & MANAGEMENT">BALLARI INSTITUTE OF TECHNOLOGY & MANAGEMENT</option>
                                                            <option value="BAPUJI INSTITUTE OF ENGINEERING & TECHNOLOGY">BAPUJI INSTITUTE OF ENGINEERING & TECHNOLOGY</option>
                                                            <option value="BASAVA ACADEMY OF ENGINEERING">BASAVA ACADEMY OF ENGINEERING</option>
                                                            <option value="BASAVA KALYAN ENGINEERING COLLEGE">BASAVA KALYAN ENGINEERING COLLEGE</option>
                                                            <option value="BASAVESHWARA ENGINEERING COLLEGE">BASAVESHWARA ENGINEERING COLLEGE</option>
                                                            <option value="BEARY’S INSTITUTE OF TECHNOLOGY">BEARY’S INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="BENGALURU COLLEGE OF ENGINEERING & TECHNOLOGY">BENGALURU COLLEGE OF ENGINEERING & TECHNOLOGY</option>
                                                            <option value="BENGALURU INSTITUTE OF TECHNOLOGY">BENGALURU INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="BENGALURU TECHNOLOGICAL INSTITUTE">BENGALURU TECHNOLOGICAL INSTITUTE</option>
                                                            <option value="BGS SCHOOL OF ARCHITECTURE AND PLANNING">BGS SCHOOL OF ARCHITECTURE AND PLANNING</option>
                                                            <option value="BILURU GURUBASAVA MAHASWAMIJI INSTITUTE OF TECHNOLOGY">BILURU GURUBASAVA MAHASWAMIJI INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="BLDEA’S COLLEGE OF ENGINEERING & TECHNOLOGY">BLDEA’S COLLEGE OF ENGINEERING & TECHNOLOGY</option>
                                                            <option value="BMS SCHOOL OF ARCHITECTURE">BMS SCHOOL OF ARCHITECTURE</option>
                                                            <option value="BRINDAVAN COLLEGE OF ENGINEERING">BRINDAVAN COLLEGE OF ENGINEERING</option>
                                                            <option value="BRINDAVANA  COLLEGE OF ARCHITECTURE">BRINDAVANA  COLLEGE OF ARCHITECTURE</option>
                                                            <option value="C BAIREGOWDA INSTITUTE OF TECHNOLOGY">C BAIREGOWDA INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="C M R INSTITUTE OF TECHNOLOGY">C M R INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="CAMBRIDGE INSTITUTE OF TECHNOLOGY">CAMBRIDGE INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="CANARA ENGINEERING COLLEGE">CANARA ENGINEERING COLLEGE</option>
                                                            <option value="CAUVERY INSTITUTE OF TECHNOLOGY">CAUVERY INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="CITY ENGINEERING COLLEGE">CITY ENGINEERING COLLEGE</option>
                                                            <option value="COORG INSTITUTE OF TECHNOLOGY">COORG INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="DAYANANDA COLLEGE OF ARCHITECTURE">DAYANANDA COLLEGE OF ARCHITECTURE</option>
                                                            <option value="DAYANANDA SAGAR ACADEMY OF TECHNOLOGY & MGMT., [TECHNICAL CAMPUS]">DAYANANDA SAGAR ACADEMY OF TECHNOLOGY & MGMT., [TECHNICAL CAMPUS]</option>
                                                            <option value="DAYANANDA SAGAR COLLEGE OF ENGINEERING">DAYANANDA SAGAR COLLEGE OF ENGINEERING</option>
                                                            <option value="DON BOSCO INSTITUTE OF TECHNOLOGY">DON BOSCO INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="DR. AMBEDKAR INSTITUTE OF TECHNOLOGY">DR. AMBEDKAR INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="DR. M V SHETTY INSTITUTE OF TECHNOLOGY">DR. M V SHETTY INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="DR. SRI SRI SRI SHIVAKUMARA MAHASWAMY COLLEGE OF ENGINEERING">DR. SRI SRI SRI SHIVAKUMARA MAHASWAMY COLLEGE OF ENGINEERING</option>
                                                            <option value="DR. T TIMMAYYA INSTITUTE OF TECHNOLOGY">DR. T TIMMAYYA INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="EAST POINT COLLEGE OF ENGINEERING & TECHNOLOGY">EAST POINT COLLEGE OF ENGINEERING & TECHNOLOGY</option>
                                                            <option value="EAST POINT COLLEGE OF ENGINEERING & TECHNOLOGY FOR WOMEN">EAST POINT COLLEGE OF ENGINEERING & TECHNOLOGY FOR WOMEN</option>
                                                            <option value="EAST WEST INSTITUTE OF TECHNOLOGY">EAST WEST INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="EKALAVYA INSTITUTE OF TECHNOLOGY">EKALAVYA INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="G M INSTITUTE OF TECHNOLOGY">G M INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="G S S S INSTITUTE OF ENGINEERING & TECHNOLOGY FOR WOMEN">G S S S INSTITUTE OF ENGINEERING & TECHNOLOGY FOR WOMEN</option>
                                                            <option value="G. MADEGOWDA INSTITUTE OF TECHNOLOGY">G. MADEGOWDA INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="GHOUSIA COLLEGE OF ENGINEERING">GHOUSIA COLLEGE OF ENGINEERING</option>
                                                            <option value="GIRIJA BAI SAIL INSTITUTE OF TECHNOLOGY">GIRIJA BAI SAIL INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="GLOBAL ACADEMY OF TECHNOLOGY">GLOBAL ACADEMY OF TECHNOLOGY</option>
                                                            <option value="GODUTAI ENGINEERING COLLEGE FOR WOMEN">GODUTAI ENGINEERING COLLEGE FOR WOMEN</option>
                                                            <option value="GOGTE INSTITUTE OF TECHNOLOGY">GOGTE INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="GOPALAN COLLEGE OF ENGINEERING & MANAGEMENT">GOPALAN COLLEGE OF ENGINEERING & MANAGEMENT</option>
                                                            <option value="GOPALAN SCHOOL OF ARCHITECTURE AND PLANNING">GOPALAN SCHOOL OF ARCHITECTURE AND PLANNING</option>
                                                            <option value="GOVERNMENT SKSJTI">GOVERNMENT SKSJTI</option>
                                                            <option value="GOVERNMENT SKSJTI [EVENING]">GOVERNMENT SKSJTI [EVENING]</option>
                                                            <option value="GOVT. ENGINEERING COLLEGE, HAVERI">GOVT. ENGINEERING COLLEGE, HAVERI</option>
                                                            <option value="GOVT. ENGINEERING COLLEGE, BELLARY">GOVT. ENGINEERING COLLEGE, BELLARY</option>
                                                            <option value="GOVT. ENGINEERING COLLEGE, RAICHUR">GOVT. ENGINEERING COLLEGE, RAICHUR</option>
                                                            <option value="GOVT. ENGINEERING COLLEGE, HASSAN">GOVT. ENGINEERING COLLEGE, HASSAN</option>
                                                            <option value="GOVT. ENGINEERING COLLEGE, KARAWAR">GOVT. ENGINEERING COLLEGE, KARAWAR</option>
                                                            <option value="GOVT. ENGINEERING COLLEGE, CHAMARAJANAGARA">GOVT. ENGINEERING COLLEGE, CHAMARAJANAGARA</option>
                                                            <option value="GOVT. ENGINEERING COLLEGE, MANDYA">GOVT. ENGINEERING COLLEGE, MANDYA</option>
                                                            <option value="GOVT. ENGINEERING COLLEGE, KUSHALANAGAR">GOVT. ENGINEERING COLLEGE, KUSHALANAGAR</option>
                                                            <option value="GOVT. ENGINEERING COLLEGE, RAMANAGARA">GOVT. ENGINEERING COLLEGE, RAMANAGARA</option>
                                                            <option value="GOVT. TOOL ROOM & TRAINING CENTER, MYSURU">GOVT. TOOL ROOM & TRAINING CENTER, MYSURU</option>
                                                            <option value="GOVT. TOOL ROOM & TRAINING CENTRE, BENGALURU">GOVT. TOOL ROOM & TRAINING CENTRE, BENGALURU</option>
                                                            <option value="GURU NANAK DEV ENGINEERING COLLEGE">GURU NANAK DEV ENGINEERING COLLEGE</option>
                                                            <option value="H K B K INSTITUTE OF TECHNOLOGY">H K B K INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="H M S INSTITUTE OF TECHNOLOGY">H M S INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="HIRASUGAR INSTITUTE OF TECHNOLOGY">HIRASUGAR INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="IMPACT COLLEGE OF ENGINEERING & APPLIED SCIENCE">IMPACT COLLEGE OF ENGINEERING & APPLIED SCIENCE</option>
                                                            <option value="ISLAMIAH INSTITUTE OF TECHNOLOGY">ISLAMIAH INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="J N N COLLEGE OF ENGINEERING">J N N COLLEGE OF ENGINEERING</option>
                                                            <option value="J S S ACADEMY OF TECHNICAL EDUCATION">J S S ACADEMY OF TECHNICAL EDUCATION</option>
                                                            <option value="JAIN COLLEGE OF ENGINEERING">JAIN COLLEGE OF ENGINEERING</option>
                                                            <option value="JAIN INSTITUTE OF TECHNOLOGY">JAIN INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="JNANA VIKAS INSTITUTE OF TECHNOLOGY">JNANA VIKAS INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="JYOTHY INST. OF TECHNOLOGY">JYOTHY INST. OF TECHNOLOGY</option>
                                                            <option value="K B N COLLEGE OF ENGINEERING">K B N COLLEGE OF ENGINEERING</option>
                                                            <option value="K C T ENGINEERING COLLEGE">K C T ENGINEERING COLLEGE</option>
                                                            <option value="K L E INSTITUTE OF TECHNOLOGY">K L E INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="K L E’S COLLEGE OF ENGINEERING & TECHNOLOGY, BELAGAVI">K L E’S COLLEGE OF ENGINEERING & TECHNOLOGY, BELAGAVI</option>
                                                            <option value="K L E’S COLLEGE OF ENGINEERING & TECHNOLOGY, CHIKKODI">K L E’S COLLEGE OF ENGINEERING & TECHNOLOGY, CHIKKODI</option>
                                                            <option value="K N S INSTITUTE OF TECHNOLOGY">K N S INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="K S INSTITUTE OF TECHNOLOGY">K S INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="K V G COLLEGE OF ENGINEERING">K V G COLLEGE OF ENGINEERING</option>
                                                            <option value="KALPATARU INSTITUTE OF TECHNOLOGY">KALPATARU INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="KAMMAVARI SANGH GROUP & INSTITUTIONS">KAMMAVARI SANGH GROUP & INSTITUTIONS</option>
                                                            <option value="KARAVALI INSTITUTE OF TECHNOLOGY">KARAVALI INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="KARNATAKA LAW SOCIETY, VISHWANATHRAO  DESPHANDE RURAL INSTITUTE OF TECHNOLOGY">KARNATAKA LAW SOCIETY, VISHWANATHRAO  DESPHANDE RURAL INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="KS SCHOOL OF ARCHITECTURE">KS SCHOOL OF ARCHITECTURE</option>
                                                            <option value="LINGARAJ APPA ENGINEERING COLLEGE">LINGARAJ APPA ENGINEERING COLLEGE</option>
                                                            <option value="M S ENGINEERING COLLEGE">M S ENGINEERING COLLEGE</option>
                                                            <option value="M S RAMAIAH INSTITUTE OF TECHNOLOGY">M S RAMAIAH INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="M V J COLLEGE OF ENGINEERING">M V J COLLEGE OF ENGINEERING</option>
                                                            <option value="MAHARAJA INSTITUTE OF TECHNOLOGY">MAHARAJA INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="MALIK SANDAL INST. OF ARTS & ARCHITECTURE">MALIK SANDAL INST. OF ARTS & ARCHITECTURE</option>
                                                            <option value="MALNAD COLLEGE OF ENGINEERING">MALNAD COLLEGE OF ENGINEERING</option>
                                                            <option value="MANGALURUINSTITUTE OF ENGINEERING & TECHNOLOGY">MANGALURUINSTITUTE OF ENGINEERING & TECHNOLOGY</option>
                                                            <option value="MANGALURUMARINE COLLEGE OF ENGINEERING AND TECHNOLOGY">MANGALURUMARINE COLLEGE OF ENGINEERING AND TECHNOLOGY</option>
                                                            <option value="MARATHA MANDAL ENGINEERING COLLEGE">MARATHA MANDAL ENGINEERING COLLEGE</option>
                                                            <option value="MOODALKATTE INSTITUTE OF TECHNOLOGY">MOODALKATTE INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="MYSURU COLLEGE OF ENGINEERING AND MANAGEMENT">MYSURU COLLEGE OF ENGINEERING AND MANAGEMENT</option>
                                                            <option value="MYSURU ROYAL  INSTITUTE OF TECHNOLOGY">MYSURU ROYAL  INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="MYSURU SCHOOL OF ARCHITECTURE">MYSURU SCHOOL OF ARCHITECTURE</option>
                                                            <option value="N M A M INSTITUTE OF TECHNOLOGY">N M A M INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="NADGIR INSTITUTE OF ENGINEERING & TECHNOLOGY">NADGIR INSTITUTE OF ENGINEERING & TECHNOLOGY</option>
                                                            <option value="NAGARJUNA COLLEGE OF ENGINEERING & TECHNOLOGY">NAGARJUNA COLLEGE OF ENGINEERING & TECHNOLOGY</option>
                                                            <option value="NATIONAL INSTITUTE OF ENGINEERING">NATIONAL INSTITUTE OF ENGINEERING</option>
                                                            <option value="NATIONAL INSTITUTE OF ENGINEERING [EVEN]">NATIONAL INSTITUTE OF ENGINEERING [EVEN]</option>
                                                            <option value="NAVODAYA INSTITUTE OF TECHNOLOGY">NAVODAYA INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="NEW HORIZON COLLEGE OF ENGINEERING">NEW HORIZON COLLEGE OF ENGINEERING</option>
                                                            <option value="NIE INSTITUTE OF TECHNOLOGY">NIE INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="NITTE MEENAKSHI INSTITUTE OF TECHNOLOGY">NITTE MEENAKSHI INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="NITTE SCHOOL OF ARCHITECTURE">NITTE SCHOOL OF ARCHITECTURE</option>
                                                            <option value="OXFORD COLLEGE OF ENGINEERING">OXFORD COLLEGE OF ENGINEERING</option>
                                                            <option value="P A COLLEGE OF ENGINEERING">P A COLLEGE OF ENGINEERING</option>
                                                            <option value="P D A COLLEGE OF ENGINEERING">P D A COLLEGE OF ENGINEERING</option>
                                                            <option value="P E S COLLEGE OF ENGINEERING">P E S COLLEGE OF ENGINEERING</option>
                                                            <option value="P E S INSTITUTE OF TECHNOLOGY">P E S INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="P E S SCHOOL OF ENGINEERING">P E S SCHOOL OF ENGINEERING</option>
                                                            <option value="P N S WOMEN’S INSTITUTE OF TECHNOLOGY">P N S WOMEN’S INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="PES INSTITUTE OF TECHNOLOGY & MANAGEMENT">PES INSTITUTE OF TECHNOLOGY & MANAGEMENT</option>
                                                            <option value="PRASAANNA COLLEGE OF ENGINEERING & TECHNOLOGY">PRASAANNA COLLEGE OF ENGINEERING & TECHNOLOGY</option>
                                                            <option value="PROUDADEVARAYA INSTITUTE OF TECHNOLOGY">PROUDADEVARAYA INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="R L JALAPPA INSTITUTE OF TECHNOLOGY">R L JALAPPA INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="R N S INSTITUTE OF TECHNOLOGY">R N S INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="R R INSTITUTE OF TECHNOLOGY">R R INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="R V COLLEGE OF ARCHITECTURE">R V COLLEGE OF ARCHITECTURE</option>
                                                            <option value="R V COLLEGE OF ENGINEERING">R V COLLEGE OF ENGINEERING</option>
                                                            <option value="RAJARAJESHESHWARI COLLEGE OF ENGINEERING">RAJARAJESHESHWARI COLLEGE OF ENGINEERING</option>
                                                            <option value="RAJEEV INSTITUTE OF TECHNOLOGY">RAJEEV INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="RAJIV GANDHI INSTITUTE OF TECHNOLOGY">RAJIV GANDHI INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="RAO BAHADDUR Y MAHABALESHWARAPPA  ENGINEERING COLLEGE">RAO BAHADDUR Y MAHABALESHWARAPPA  ENGINEERING COLLEGE</option>
                                                            <option value="RNS SCHOOL OF ARCHITECTURE">RNS SCHOOL OF ARCHITECTURE</option>
                                                            <option value="RR SCHOOL OF ARCHITECTURE">RR SCHOOL OF ARCHITECTURE</option>
                                                            <option value="RURAL ENGINEERING COLLEGE, HULKOTI">RURAL ENGINEERING COLLEGE, HULKOTI</option>
                                                            <option value="RURAL ENGINEERING COLLEGE, BHALKI">RURAL ENGINEERING COLLEGE, BHALKI</option>
                                                            <option value="S B M INSTITUTE OF TECHNOLOGY">S B M INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="S C T INSTITUTE OF TECHNOLOGY">S C T INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="S D M COLLEGE OF ENGINEERING & TECHNOLOGY">S D M COLLEGE OF ENGINEERING & TECHNOLOGY</option>
                                                            <option value="S G BALEKUNDRI INSTITUTE OF TECHNOLOGY">S G BALEKUNDRI INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="S J B INSTITUTE OF TECHNOLOGY">S J B INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="S J C INSTITUTE OF TECHNOLOGY">S J C INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="S J M INSTITUTE OF TECHNOLOGY">S J M INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="S L N COLLEGE OF ENGINEERING">S L N COLLEGE OF ENGINEERING</option>
                                                            <option value="S T J INSTITUTE OF TECHNOLOGY">S T J INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="SAHYADRI INSTITUTE OF TECHNOLOGY & MANAGEMENT">SAHYADRI INSTITUTE OF TECHNOLOGY & MANAGEMENT</option>
                                                            <option value="SAI VIDYA INSTITUTE OF TECHNOLOGY">SAI VIDYA INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="SAINT JOSEPH COLLEGE OF ENGINEERING & TECHNOLOGY">SAINT JOSEPH COLLEGE OF ENGINEERING & TECHNOLOGY</option>
                                                            <option value="SAMBHRAM INSTITUTE OF TECHNOLOGY">SAMBHRAM INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="SAMPOORNA INSTITUTE OF TECHNOLOGY & RESEARCH">SAMPOORNA INSTITUTE OF TECHNOLOGY & RESEARCH</option>
                                                            <option value="SAPTHAGIRI COLLEGE OF ENGINEERING">SAPTHAGIRI COLLEGE OF ENGINEERING</option>
                                                            <option value="SEA COLLEGE OF ENGINEERING & TECHNOLOGY">SEA COLLEGE OF ENGINEERING & TECHNOLOGY</option>
                                                            <option value="SECAB INSTITUTE OF ENGINEERING & TECHNOLOGY">SECAB INSTITUTE OF ENGINEERING & TECHNOLOGY</option>
                                                            <option value="SHAH-SHIB COLLEGE OF ENGINEERING">SHAH-SHIB COLLEGE OF ENGINEERING</option>
                                                            <option value="SHAIKH COLLEGE OF ENGINEERING & TECHNOLOGY">SHAH-SHIB COLLEGE OF ENGINEERING</option>
                                                            <option value="SHETTY INSTITUTE OF TECHNOLOGY">SHETTY INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="SHREE DEVI INSTITUTE OF TECHNOLOGY">SHREE DEVI INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="SHRI DHARMASTHALA MANJUNATHESHWAR EDUCATIONAL SOCIETY [REGD]"></option>
                                                            <option value="SHRI MADHWA VADIRAJA INSTITUTE OF TECHNOLOGY & MANAGEMENT"></option>
                                                            <option value="SHRIDEVI INSTITUTE OF ENGINEERING, & TECHNOLOGY">SHRIDEVI INSTITUTE OF ENGINEERING, & TECHNOLOGY</option>
                                                            <option value="SIDDAGANGA INSTITUTE OF TECHNOLOGY">SIDDAGANGA INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="SIR M V  SCHOOL OF ARCHITECTURE">SIR M V  SCHOOL OF ARCHITECTURE</option>
                                                            <option value="SIR M VISVESVARAYA INSTITUTTE OF TECHNOLOGY">SIR M VISVESVARAYA INSTITUTTE OF TECHNOLOGY</option>
                                                            <option value="SJB SCHOOL OF ARCHITECTURE AND PLANNING">SJB SCHOOL OF ARCHITECTURE AND PLANNING</option>
                                                            <option value="SMT. KAMALA & VEKAPPA  M. AGADI COLLEGE OF ENGINEERING & TECHNOLOGY">SMT. KAMALA & VEKAPPA  M. AGADI COLLEGE OF ENGINEERING & TECHNOLOGY</option>
                                                            <option value="SRI BASAVESHWAR INSTITUTE OF TECHNOLOGY">SRI BASAVESHWAR INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="SRI CHANNABASAVESHWARA INSTITUTE OF TECHNOLOGY">SRI CHANNABASAVESHWARA INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="SRI JAYACHAMARAJENDRA">SRI JAYACHAMARAJENDRA</option>
                                                            <option value="SRI JAYACHAMRAJENDRA COLLEGE OF ENGINEERING [EVEN.]">SRI JAYACHAMRAJENDRA COLLEGE OF ENGINEERING [EVEN.]</option>
                                                            <option value="SRI KRISHANA INSTITUTE OF TECHNOLOGY">SRI KRISHANA INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="SRI KRISHNA INSTITUTE OF TECHOLOGY">SRI KRISHNA INSTITUTE OF TECHOLOGY</option>
                                                            <option value="SRI KRISHNA SCHOOL OF ENGINEERING & MANAGEMENT">SRI KRISHNA SCHOOL OF ENGINEERING & MANAGEMENT</option>
                                                            <option value="SRI PILLAPPA COLLEGE OF ENGINEERING">SRI PILLAPPA COLLEGE OF ENGINEERING</option>
                                                            <option value="SRI REVANA SIDDESHWARA INSTITUTE  OF TECHNOLOGY">SRI REVANA SIDDESHWARA INSTITUTE  OF TECHNOLOGY</option>
                                                            <option value="SRI SAI RAM ENGINEERING COLLEGE">SRI SAI RAM ENGINEERING COLLEGE</option>
                                                            <option value="SRI TONTADARYA COLLEGE OF ENGINEERING">SRI TONTADARYA COLLEGE OF ENGINEERING</option>
                                                            <option value="SRI VENKATESHWARA COLLEGE OF ENGINEERING">SRI VENKATESHWARA COLLEGE OF ENGINEERING</option>
                                                            <option value="SRI VIDHYA VINAYAKA INSTITUTE OF TECHNOLOGY">SRI VIDHYA VINAYAKA INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="SRINIVAS INSTITUTE OF TECHNOLOGY">SRINIVAS INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="SRINIVAS SCHOOL OF ENGINEERING">SRINIVAS SCHOOL OF ENGINEERING</option>
                                                            <option value="T JOHN COLLEGE OF ENGINEERING">T JOHN COLLEGE OF ENGINEERING</option>
                                                            <option value="UBDT COLLEGE OF ENGINEERING">UBDT COLLEGE OF ENGINEERING</option>
                                                            <option value="V S M’S INSTITUTE OF TECHNOLOGY">V S M’S INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="VEERAPPA NISTY ENGINEERING COLLEGE">VEERAPPA NISTY ENGINEERING COLLEGE</option>
                                                            <option value="VEMANA INSTITUTE OF TECHNOLOGY">VEMANA INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="VIDYA VARDHAKA COLLEGE OF ENGINEERING">VIDYA VARDHAKA COLLEGE OF ENGINEERING</option>
                                                            <option value="VIDYA VIKAS INSTITUTE OF TECHNOLOGY">VIDYA VIKAS INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="VIJAYAVITHAL INSTITUTE OF TECHNOLOGY">VIJAYAVITHAL INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="VIVEKANANDA COLLEGE OF ENGG. & TECH">VIVEKANANDA COLLEGE OF ENGG. & TECH</option>
                                                            <option value="VIVEKANANDA INSTITUTE OF TECHNOLOGY">VIVEKANANDA INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="VTU, BELGAUM">VTU, BELGAUM</option>
                                                            <option value="VTU PG CENTRE, Muddena Halli">VTU PG CENTRE, Muddena Halli</option>
                                                            <option value="VTU REGIONAL CENTRE, BENGALURU">VTU REGIONAL CENTRE, BENGALURU</option>
                                                            <option value="VTU REGIONAL OFFICE, KALABURGI">VTU REGIONAL OFFICE, KALABURGI</option>
                                                            <option value="WADIYAR CENTER FOR ARCHITECTURE">WADIYAR CENTER FOR ARCHITECTURE</option>
                                                            <option value="YAGACHI INSTITUTE OF TECHNOLOGY">YAGACHI INSTITUTE OF TECHNOLOGY</option>
                                                            <option value="YELLAMMA DASAPPA INSTITUTE OF TECH">YELLAMMA DASAPPA INSTITUTE OF TECH</option>

                                    
                                </select>
                                    
                                </div>
                            
                        </tr>
                        <tr>
                          <td>Password</td>
                          <td>
                            <div class="form-group">
                              <input type="password" size="50" class="form-control" placeholder="password" name="password" value="" />
                            </div>
                          </td>
                        </tr>
                   </table>
                  <center><button type="submit" name="submit">Login</button></center>
                </form>
              </center>
                    <br><br>
                </div>
            </div>
        </div>
     <!-- CONTACT SECTION END-->

<?php
  include 'footer.php';
 ?>
