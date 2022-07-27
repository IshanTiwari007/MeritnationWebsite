@extends('Frontend.layouts.main')

@section('main-content')

<div class="container-fluid py-5" id="rsvp">

<table align="center" style="border: 1px solid #D7D7D7;" cellpadding="0" cellspacing="0" width="960">
    <tbody>             <tr>
                            <td align="left" colspan="4" class="graddd" style="font-size: 15px; color: #666666; padding-left: 12px; font-weight: bold;
                                font-family: Arial, Helvetica, sans-serif;">
                                &nbsp;Your Personal Details</td>
                        </tr>
                        <tr>
                            <td align="left" class="style216" colspan="2">
                                &nbsp;</td>
                            <td align="left" class="style217">
                                </td>
                            <td align="left" height="15">
                            </td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196" style="color: #666666" width="200">
                                Profile ID</td>
                            <td align="left" class="style198" style="color: #666666">
                                :</td>
                            <td align="left" class="style197" style="padding-top: 5px; padding-bottom: 5px">

                            </td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196" style="color: #666666">
                                User ID</td>
                            <td align="left" class="style198" style="color: #666666">
                                :</td>
                            <td align="left" class="style197" style="padding-top: 5px; padding-bottom: 5px">

                            </td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196" style="color: #666666">
                                First Name</td>
                            <td align="left" class="style198" style="color: #666666">
                                :</td>
                            <td align="left" class="style197" style="padding-top: 5px; padding-bottom: 5px">
                                <input name="txt_fname" type="text" value="Sameer" id="txt_fname" disabled="disabled" title="Enter Name" class="textb" style="width:236px;">
                            &nbsp;<span id="RequiredFieldValidator1" style="color:Red;visibility:hidden;">*</span></td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196" style="color: #666666">
                                Last Name</td>
                            <td align="left" class="style198" style="color: #666666">
                                :</td>
                            <td align="left" class="style197" style="padding-top: 5px; padding-bottom: 5px">
                                <input name="txt_LstName" type="text" value="Tiwari" id="txt_LstName" disabled="disabled" title="Enter Name" class="textb" style="width:236px;">
                            </td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196" style="color: #666666">
                                Marital Status</td>
                            <td align="left" class="style198" style="color: #666666">
                                :</td>
                            <td align="left" class="style197" style="padding-top: 5px; padding-bottom: 5px">
                                <table id="rbl_marital_status" border="0" style="color:#333333;">
                                    <tbody><tr>
                                        <td><input id="rbl_marital_status_0" type="radio" name="rbl_marital_status" value="UNMARRIED" checked="checked"><label for="rbl_marital_status_0">Never Married</label></td><td><input id="rbl_marital_status_1" type="radio" name="rbl_marital_status" value="WIDOW" onclick="javascript:setTimeout('__doPostBack(\'rbl_marital_status$1\',\'\')', 0)"><label for="rbl_marital_status_1">Widow</label></td><td><input id="rbl_marital_status_2" type="radio" name="rbl_marital_status" value="WIDOWER" onclick="javascript:setTimeout('__doPostBack(\'rbl_marital_status$2\',\'\')', 0)"><label for="rbl_marital_status_2">Widower</label></td><td><input id="rbl_marital_status_3" type="radio" name="rbl_marital_status" value="DIVORCE" onclick="javascript:setTimeout('__doPostBack(\'rbl_marital_status$3\',\'\')', 0)"><label for="rbl_marital_status_3">Divorce</label></td><td><input id="rbl_marital_status_4" type="radio" name="rbl_marital_status" value="UNFERTILE" onclick="javascript:setTimeout('__doPostBack(\'rbl_marital_status$4\',\'\')', 0)"><label for="rbl_marital_status_4">Unfertile</label></td>
                                    </tr>
                                </tbody>
                                </table>
                                </td>
                        </tr>
                        <tr>

                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196" style="color: #666666">
                                Religion</td>
                            <td align="left" class="style198" style="color: #666666">
                                :</td>
                            <td align="left" class="style197" style="padding-top: 5px; padding-bottom: 5px">

                            </td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196" style="color: #666666">
                                Manglik</td>
                            <td align="left" class="style198" style="color: #666666">
                                :</td>
                            <td align="left" class="style197" style="padding-top: 5px; padding-bottom: 5px">
                                <select name="drp_manglik" id="drp_manglik" class="drop" style="width:250px;">
                                    <option selected="selected" value="Please Select">Please Select</option>
                                    <option value="MANGLI">MANGLI</option>
                                    <option value="NON MANGLI">NON MANGLI</option>
                                    <option value="ANSHIK MANGLI">ANSHIK MANGLI</option>

                                </select>
                            &nbsp;<span id="RequiredFieldValidator7" style="color: red; visibility: visible;">*</span></td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196" style="color: #666666">
                                Caste</td>
                            <td align="left" class="style198" style="color: #666666">
                                :</td>
                            <td align="left" class="style197" style="padding-top: 5px; padding-bottom: 5px">
                                <select name="drp_caste" id="drp_caste" class="drop" style="width:250px;">
                                    <option value="Please Select">Please Select</option>
                                    <option value="Vaish">Vaish</option>
                                    <option selected="selected" value="Brahmin">Brahmin</option>
                                    <option value="PUNJABI">PUNJABI</option>
                                    <option value="Jatav">Jatav</option>
                                    <option value="Please Select">Please Select</option>
                                    <option value="Agaria - Hindu">Agaria - Hindu</option>
                                    <option value="Arora ">Arora </option>
                                    <option value="Badhai - Hindu">Badhai - Hindu</option>
                                    <option value="Badhi - Hindu">Badhi - Hindu</option>
                                    <option value="Balmiki">Balmiki</option>
                                    <option value="Bangali - Hindu">Bangali - Hindu</option>
                                    <option value="Banjara - Hindu">Banjara - Hindu</option>
                                    <option value="Banjara - Hindu (Nayak)">Banjara - Hindu (Nayak)</option>
                                    <option value="Bari - Hindu">Bari - Hindu</option>
                                    <option value="Bhoi - Hindu">Bhoi - Hindu</option>
                                    <option value="Brahma Kshatriya">Brahma Kshatriya</option>
                                    <option value="Brahmin - Dhiman">Brahmin - Dhiman</option>
                                    <option value="Brahmin - Kanaujia">Brahmin - Kanaujia</option>
                                    <option value="Chamar">Chamar</option>
                                    <option value="Chamar | Ravidasia">Chamar | Ravidasia</option>
                                    <option value="Chhipi">Chhipi</option>
                                    <option value="Christian unspecified">Christian unspecified</option>
                                    <option value="Dhanuk">Dhanuk</option>
                                    <option value="Dheevar">Dheevar</option>
                                    <option value="Dhimar">Dhimar</option>
                                    <option value="Dhobi">Dhobi</option>
                                    <option value="Dhobi - Hindu">Dhobi - Hindu</option>
                                    <option value="Gadaria - Hindu">Gadaria - Hindu</option>
                                    <option value="Gadariya">Gadariya</option>
                                    <option value="Gangwar">Gangwar</option>
                                    <option value="Gounder">Gounder</option>
                                    <option value="Gowari">Gowari</option>
                                    <option value="Guria">Guria</option>
                                    <option value="Gurjar">Gurjar</option>
                                    <option value="JAAT">JAAT</option>
                                    <option value="Jaiswar">Jaiswar</option>
                                    <option value="Jogi - Hindu">Jogi - Hindu</option>
                                    <option value="Julaha">Julaha</option>
                                    <option value="Julaha Hindu">Julaha Hindu</option>
                                    <option value="Jyotishi Brahmin">Jyotishi Brahmin</option>
                                    <option value="Kamboj ">Kamboj </option>
                                    <option value="Kashmiri Sikh">Kashmiri Sikh</option>
                                    <option value="Kashyap">Kashyap</option>
                                    <option value="KAYASTH">KAYASTH</option>
                                    <option value="Khateek">Khateek</option>
                                    <option value="Khatik - Hindu">Khatik - Hindu</option>
                                    <option value="Khatri">Khatri</option>
                                    <option value="Khatri - Sikh">Khatri - Sikh</option>
                                    <option value="Khatris">Khatris</option>
                                    <option value="Koli">Koli</option>
                                    <option value="Kori">Kori</option>
                                    <option value="Kori (S.C.)">Kori (S.C.)</option>
                                    <option value="Kshatriya">Kshatriya</option>
                                    <option value="Kshatriya-Thakur">Kshatriya-Thakur</option>
                                    <option value="Kumauni Brahmin">Kumauni Brahmin</option>
                                    <option value="Kumauni Rajput">Kumauni Rajput</option>
                                    <option value="Kumhar">Kumhar</option>
                                    <option value="Kumhar | Prajapati">Kumhar | Prajapati</option>
                                    <option value="Kurmi">Kurmi</option>
                                    <option value="Kushwaha">Kushwaha</option>
                                    <option value="Lodhi Rajput">Lodhi Rajput</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Maurya">Maurya</option>
                                    <option value="Musahar - Hindu">Musahar - Hindu</option>
                                    <option value="MUSLIM">MUSLIM</option>
                                    <option value="Nai">Nai</option>
                                    <option value="Nair">Nair</option>
                                    <option value="Nishad">Nishad</option>
                                    <option value="Other">Other</option>
                                    <option value="Pal">Pal</option>
                                    <option value="Pasi (Schedule)">Pasi (Schedule)</option>
                                    <option value="Pasi - Hindu">Pasi - Hindu</option>
                                    <option value="Prajapati">Prajapati</option>
                                    <option value="Prajapati (Kumhar)">Prajapati (Kumhar)</option>
                                    <option value="Punjabi Brahmin">Punjabi Brahmin</option>
                                    <option value="Rajpur">Rajpur</option>
                                    <option value="Rajput">Rajput</option>
                                    <option value="Rajput - Bhatti - Hindu">Rajput - Bhatti - Hindu</option>
                                    <option value="Ramgarhia">Ramgarhia</option>
                                    <option value="Rawat">Rawat</option>
                                    <option value="Sahu">Sahu</option>
                                    <option value="Saini">Saini</option>
                                    <option value="Sarera - Sikh">Sarera - Sikh</option>
                                    <option value="Sauria Paharia">Sauria Paharia</option>
                                    <option value="Select Caste">Select Caste</option>
                                    <option value="Shah">Shah</option>
                                    <option value="Sikh">Sikh</option>
                                    <option value="Sikh Arora / Khatri">Sikh Arora / Khatri</option>
                                    <option value="Sikh Jat">Sikh Jat</option>
                                    <option value="Silpkar - Hindu">Silpkar - Hindu</option>
                                    <option value="Sindhi">Sindhi</option>
                                    <option value="Sonar">Sonar</option>
                                    <option value="Sonar (Marathi Goldsmith Caste)">Sonar (Marathi Goldsmith Caste)</option>
                                    <option value="Sonker">Sonker</option>
                                    <option value="Sonr">Sonr</option>
                                    <option value="Tamboli - Hindu">Tamboli - Hindu</option>
                                    <option value="Teli">Teli</option>
                                    <option value="Tyagi">Tyagi</option>
                                    <option value="Ujia">Ujia</option>
                                    <option value="UP Khatri">UP Khatri</option>
                                    <option value="Valmiki">Valmiki</option>
                                    <option value="Viswakarma">Viswakarma</option>
                                    <option value="Yadav">Yadav</option>
                                </select>
                            &nbsp;<span id="RequiredFieldValidator2" style="color:Red;visibility:hidden;">Please Select Caste</span></td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196" style="color: #666666">
                                Sub Caste</td>
                            <td align="left" class="style198" style="color: #666666">
                                :</td>
                            <td align="left" class="style197" style="padding-top: 5px; padding-bottom: 5px">
                                <input name="txt_subcaste" type="text" id="txt_subcaste" class="textb" style="width:250px;">
                            </td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196" style="color: #666666">
                                Gothra</td>
                            <td align="left" class="style198" style="color: #666666">
                                :</td>
                            <td align="left" class="style197" style="padding-top: 5px; padding-bottom: 5px">
                                <input name="txt_gotra" type="text" id="txt_gotra" class="textb" style="width:250px;">
                            </td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196">
                                &nbsp;</td>
                            <td align="left" class="style198">
                                &nbsp;</td>
                            <td align="left" class="style197" height="25">
                                &nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left" colspan="4" class="graddd" style="font-size: 15px; color: #666666; padding-left: 12px; font-weight: bold; font-family: Arial, Helvetica, sans-serif;">
                                &nbsp;Information About Residental Status</td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196" style="color: #666666">
                                &nbsp;</td>
                            <td align="left" class="style198" style="color: #666666">
                                &nbsp;</td>
                            <td align="left" height="15">
                                &nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196" style="color: #666666">
                                Country of Residence</td>
                            <td align="left" class="style198" style="color: #666666">
                                :</td>
                            <td align="left" class="style197" style="padding-top: 5px; padding-bottom: 5px">
                                <select name="drp_Nationality" id="drp_Nationality" class="drop" style="width:250px;">
                                    <option value="Indian">Indian</option>
                                    <option value="NRI">NRI</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                </td>
                            <td align="left" class="style196" style="color: #666666">
                                State of Residence</td>
                            <td align="left" class="style198" style="color: #666666">
                                :</td>
                            <td align="left" class="style197" style="padding-top: 5px; padding-bottom: 5px">
                                <select name="drp_State_residence" onchange="javascript:setTimeout('__doPostBack(\'drp_State_residence\',\'\')', 0)" id="drp_State_residence" class="drop" style="width:250px;">
                                    <option value="Please Select">Please Select</option>
                                    <option selected="selected" value=""></option>
                                    <option value="Alberta">Alberta</option>
                                    <option value="Andaman And Nicobar">Andaman And Nicobar</option>
                                    <option value="Andhra Pardesh">Andhra Pardesh</option>
                                    <option value="Arunachal Pardesh">Arunachal Pardesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Delhi-NCR">Delhi-NCR</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujrat">Gujrat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pardesh">Himachal Pardesh</option>
                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Madhya Pardesh">Madhya Pardesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Orissa">Orissa</option>
                                    <option value="Others">Others</option>
                                    <option value="Pondicherry">Pondicherry</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkam">Sikkam</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="USA">USA</option>
                                    <option value="Uttar Pardesh (U.P.)">Uttar Pardesh (U.P.)</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="West Bengal">West Bengal</option>

                                </select>
                                &nbsp;<span id="RequiredFieldValidator3" style="color:Red;visibility:hidden;">*</span>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196" style="color: #666666">
                                City of Residence</td>
                            <td align="left" class="style198" style="color: #666666">
                                :</td>
                            <td align="left" class="style197" style="padding-top: 5px; padding-bottom: 5px">
                                <div id="UpdatePanel1">
                                    <select name="drp_City_Resibence" id="drp_City_Resibence" class="drop" style="width:250px;">
                                        <option value="Please Select">Please Select</option>
                                        <option value="Agra ">Agra </option>
                                        <option value="Aligarh">Aligarh</option>
                                        <option value="Allahabad">Allahabad</option>
                                        <option value="Ambedkar Nagar">Ambedkar Nagar</option>
                                        <option value="Amethi">Amethi</option>
                                        <option value="Amroha">Amroha</option>
                                        <option value="Auraiya">Auraiya</option>
                                        <option value="Ayodhya">Ayodhya</option>
                                        <option value="Azamgarh">Azamgarh</option>
                                        <option value="Babugarh Cantt (Hapur)">Babugarh Cantt (Hapur)</option>
                                        <option value="Badaun">Badaun</option>
                                        <option value="Baghpat">Baghpat</option>
                                        <option value="Bahraich">Bahraich</option>
                                        <option value="Ballia">Ballia</option>
                                        <option value="Balrampur">Balrampur</option>
                                        <option value="banaras">banaras</option>
                                        <option value="Banda">Banda</option>
                                        <option value="Barabanki">Barabanki</option>
                                        <option value="Baraut">Baraut</option>
                                        <option value="Bareilly">Bareilly</option>
                                        <option value="Basti">Basti</option>
                                        <option value="Bhadohi">Bhadohi</option>
                                        <option value="Bhim Nagar">Bhim Nagar</option>
                                        <option value="bijnor">bijnor</option>
                                        <option value="Bilaspur">Bilaspur</option>
                                        <option value="Bilaspur (Rampur)">Bilaspur (Rampur)</option>
                                        <option value="Bisalpur (Pilibhit)">Bisalpur (Pilibhit)</option>
                                        <option value="Budhana (Muzaffarnagar)">Budhana (Muzaffarnagar)</option>
                                        <option value="Bulandshahr">Bulandshahr</option>
                                        <option value="Chandauli">Chandauli</option>
                                        <option value="Chandausi (Moradabad)">Chandausi (Moradabad)</option>
                                        <option value="Chandpur">Chandpur</option>
                                        <option value="Chitrakut">Chitrakut</option>
                                        <option value="Dadri">Dadri</option>
                                        <option value="Dankaur (G.B. Nagar)">Dankaur (G.B. Nagar)</option>
                                        <option value="Deoband (Saharanpur)">Deoband (Saharanpur)</option>
                                        <option value="Deoria">Deoria</option>
                                        <option value="Dhampur (Bijnor)">Dhampur (Bijnor)</option>
                                        <option value="Dibai Bulandshahr">Dibai Bulandshahr</option>
                                        <option value="Etah ">Etah </option>
                                        <option value="Etawah">Etawah</option>
                                        <option value="Faizabad">Faizabad</option>
                                        <option value="Faridabad">Faridabad</option>
                                        <option value="Faridpur">Faridpur</option>
                                        <option value="Farrukhabad">Farrukhabad</option>
                                        <option value="Fatehgarh">Fatehgarh</option>
                                        <option value="Fatehpur">Fatehpur</option>
                                        <option value="Firozabad">Firozabad</option>
                                        <option value="Gajraula">Gajraula</option>
                                        <option value="Gangoh (Saharanpur)">Gangoh (Saharanpur)</option>
                                        <option value="Garhmukteshwar">Garhmukteshwar</option>
                                        <option value="Gautam Buddh Nagar">Gautam Buddh Nagar</option>
                                        <option value="Ghaziabad">Ghaziabad</option>
                                        <option value="Ghazipur">Ghazipur</option>
                                        <option value="Gonda">Gonda</option>
                                        <option value="Gorakhpur">Gorakhpur</option>
                                        <option value="Greater Noida">Greater Noida</option>
                                        <option value="Gulaothi (Bulandshahr)">Gulaothi (Bulandshahr)</option>
                                        <option value="Gunnaur">Gunnaur</option>
                                        <option value="Hamirpur">Hamirpur</option>
                                        <option value="Hapur">Hapur</option>
                                        <option value="Hapur, Meerut, Delhi">Hapur, Meerut, Delhi</option>
                                        <option value="Hardoi">Hardoi</option>
                                        <option value="Hasanpur">Hasanpur</option>
                                        <option value="Hastinapur">Hastinapur</option>
                                        <option value="Hathras">Hathras</option>
                                        <option value="J.p.nagar">J.p.nagar</option>
                                        <option value="Jahangirabad (B.S.R)">Jahangirabad (B.S.R)</option>
                                        <option value="Jalaun">Jalaun</option>
                                        <option value="Jaunpur">Jaunpur</option>
                                        <option value="Jhansi">Jhansi</option>
                                        <option value="Kaim ganj (Farrukhabad)">Kaim ganj (Farrukhabad)</option>
                                        <option value="Kairana (Muzaffarnagar)">Kairana (Muzaffarnagar)</option>
                                        <option value="Kairana (Shamli)">Kairana (Shamli)</option>
                                        <option value="Kandhla (Muzaffarnagar)">Kandhla (Muzaffarnagar)</option>
                                        <option value="Kannauj">Kannauj</option>
                                        <option value="Kanpur">Kanpur</option>
                                        <option value="Kasganj">Kasganj</option>
                                        <option value="kashiram nagar">kashiram nagar</option>
                                        <option value="Khair (Aligarh)">Khair (Aligarh)</option>
                                        <option value="Khalilabad (Sant Kabir Nagar)">Khalilabad (Sant Kabir Nagar)</option>
                                        <option value="Khatauli (Muzaffarnagar)">Khatauli (Muzaffarnagar)</option>
                                        <option value="Khekra (Baghpat)">Khekra (Baghpat)</option>
                                        <option value="Khurja (Bulandshahr)">Khurja (Bulandshahr)</option>
                                        <option value="Kila Parikshitgarh (Meerut)">Kila Parikshitgarh (Meerut)</option>
                                        <option value="Kithore Meerut">Kithore Meerut</option>
                                        <option value="Kushinagar">Kushinagar</option>
                                        <option value="Lakheempur Khiri">Lakheempur Khiri</option>
                                        <option value="Lalitpur">Lalitpur</option>
                                        <option value="Lucknow">Lucknow</option>
                                        <option value="Maharajganj">Maharajganj</option>
                                        <option value="Mahoba">Mahoba</option>
                                        <option value="Mainpuri ">Mainpuri </option>
                                        <option value="Mandi Dhanaura">Mandi Dhanaura</option>
                                        <option value="Mansurpur">Mansurpur</option>
                                        <option value="Mathura ">Mathura </option>
                                        <option value="Mau">Mau</option>
                                        <option value="Maunath Bhanjan">Maunath Bhanjan</option>
                                        <option value="Mawana (Meerut)">Mawana (Meerut)</option>
                                        <option value="Meerut">Meerut</option>
                                        <option value="Miranpur (Muzaffarnagar)">Miranpur (Muzaffarnagar)</option>
                                        <option value="Mirzapur">Mirzapur</option>
                                        <option value="Modinagar">Modinagar</option>
                                        <option value="Moradabad ">Moradabad </option>
                                        <option value="Moradnagar">Moradnagar</option>
                                        <option value="MUGALSARAI">MUGALSARAI</option>
                                        <option value="Muradnagar">Muradnagar</option>
                                        <option value="muzaffarnagar">muzaffarnagar</option>
                                        <option value="Nagina (Bijnor)">Nagina (Bijnor)</option>
                                        <option value="Nazibabad">Nazibabad</option>
                                        <option value="Nehtaur">Nehtaur</option>
                                        <option value="Noida">Noida</option>
                                        <option value="Obra">Obra</option>
                                        <option value="Obra-Sonebhadra">Obra-Sonebhadra</option>
                                        <option value="Orai">Orai</option>
                                        <option value="Oriya">Oriya</option>
                                        <option value="Padrauna">Padrauna</option>
                                        <option value="Palia Kalan">Palia Kalan</option>
                                        <option value="panchsheel Nagar (Hapur)">panchsheel Nagar (Hapur)</option>
                                        <option value="Parikshit Garh">Parikshit Garh</option>
                                        <option value="Pilakhuva">Pilakhuva</option>
                                        <option value="Pilibhit ">Pilibhit </option>
                                        <option value="Pratapgarh">Pratapgarh</option>
                                        <option value="Rabartsganj">Rabartsganj</option>
                                        <option value="rai bareilly">rai bareilly</option>
                                        <option value="Rampur">Rampur</option>
                                        <option value="Raypur">Raypur</option>
                                        <option value="Renu Sagar (Sonebhadra)">Renu Sagar (Sonebhadra)</option>
                                        <option value="Saharanpur">Saharanpur</option>
                                        <option value="Sambhal (Moradabad)">Sambhal (Moradabad)</option>
                                        <option value="Sant Kabir Nagar">Sant Kabir Nagar</option>
                                        <option value="Sant Ravidas Nagar">Sant Ravidas Nagar</option>
                                        <option value="Sarawati">Sarawati</option>
                                        <option value="Sardhana (Meerut)">Sardhana (Meerut)</option>
                                        <option value="Seohara, Distt. Bijnor">Seohara, Distt. Bijnor</option>
                                        <option value="Shahjahanpur">Shahjahanpur</option>
                                        <option value="Shamli">Shamli</option>
                                        <option value="Shamli (muzaffarnagar)">Shamli (muzaffarnagar)</option>
                                        <option value="Shikarpur">Shikarpur</option>
                                        <option value="Shikohabad">Shikohabad</option>
                                        <option value="Sidharth Nagar">Sidharth Nagar</option>
                                        <option value="Sikandrabad (Bulandshahr)">Sikandrabad (Bulandshahr)</option>
                                        <option value="Sitapur">Sitapur</option>
                                        <option value="Siwal Khas (Meerut)">Siwal Khas (Meerut)</option>
                                        <option value="Siyana (Bulandshahr)">Siyana (Bulandshahr)</option>
                                        <option value="Sonbhadra">Sonbhadra</option>
                                        <option value="Sultanpur">Sultanpur</option>
                                        <option value="Thana Bhawan (Muzaffarnagar)">Thana Bhawan (Muzaffarnagar)</option>
                                        <option value="Tilhar -Shahjahanpur">Tilhar -Shahjahanpur</option>
                                        <option value="Town-Sisoli (Muzaffarnagar)">Town-Sisoli (Muzaffarnagar)</option>
                                        <option value="Tundla, Firozabad">Tundla, Firozabad</option>
                                        <option value="Ujjhani (Badaun)">Ujjhani (Badaun)</option>
                                        <option value="Unnao">Unnao</option>
                                        <option value="Uttar Pradesh (West)">Uttar Pradesh (West)</option>
                                        <option value="Varanasi">Varanasi</option>
                                        <option value="Vrindavan">Vrindavan</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196" valign="middle" style="color: #666666">
                                Postal
                                Address</td>
                            <td align="left" class="style198" valign="middle" style="color: #666666">
                                :</td>
                            <td align="left" class="style197" style="padding-top: 5px; padding-bottom: 5px">
                                <textarea name="txt_address" rows="2" cols="20" id="txt_address" class="textmulti" style="height:60px;width:238px;" autocomplete="off"></textarea>
                                &nbsp;<span id="RequiredFieldValidator4" style="color: red; visibility: hidden;">Please Fill</span></td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196" valign="middle" style="color: #666666">
                                Correspondence Address (if any)</td>
                            <td align="left" class="style198" valign="middle" style="color: #666666">
                                :</td>
                            <td align="left" class="style197" style="padding-top: 5px; padding-bottom: 5px">
                                <textarea name="txt_Corresaddress" rows="2" cols="20" id="txt_Corresaddress" class="textmulti" style="height:60px;width:238px;"></textarea>
                                </td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196">
                                &nbsp;</td>
                            <td align="left" class="style198">
                                &nbsp;</td>
                            <td align="left" class="style197" height="25">
                                &nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left" colspan="4" class="graddd" style="font-size: 15px; color: #666666; padding-left: 12px; font-weight: bold; font-family: Arial, Helvetica, sans-serif;">
                                Information about Occupation &amp; Education</td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196" style="color: #666666">
                                &nbsp;</td>
                            <td align="left" class="style198" style="color: #666666">
                                &nbsp;</td>
                            <td align="left" height="15">
                                &nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196" style="color: #666666">
                                Education</td>
                            <td align="left" class="style198" style="color: #666666">
                                :</td>
                            <td align="left" class="style197" style="padding-top: 5px; padding-bottom: 5px">
                                <select name="drp_education" id="drp_education" class="drop" style="width:250px;">
                                    <option value="Please Select">Please Select</option>
                                    <option value="Bachelors">Bachelors</option>
                                    <option value="Masters">Masters</option>
                                    <option value="Doctorate">Doctorate</option>
                                    <option value="Diploma">Diploma</option>
                                    <option value="Under Graduate">Under Graduate</option>
                                    <option value="Honours Degree">Honours Degree</option>
                                    <option value="InterMediate">InterMediate</option>
                                    <option value="High School">High School</option>
                                    <option value="Less Than High School">Less Than High School</option>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196" style="color: #666666">
                                Educational Area</td>
                            <td align="left" class="style198" style="color: #666666">
                                :</td>
                            <td align="left" class="style197" style="padding-top: 5px; padding-bottom: 5px">
                                <select name="drp_educationArea" id="drp_educationArea" class="drop" style="width:250px;">
                                    <option value="Please Select">Please Select</option>
                                    <option value="Administrative services">Administrative services</option>
                                    <option value="Advertising/ Marketing">Advertising/ Marketing</option>
                                    <option value="Architecture">Architecture</option>
                                    <option value="Armed Forces">Armed Forces</option>
                                    <option value="Arts">Arts</option>
                                    <option value="Commerce">Commerce</option>
                                    <option value="Computers/ IT">Computers/ IT</option>
                                    <option value="Education">Education</option>
                                    <option value="Engineering/ Management">Engineering/ Management</option>
                                    <option value="Engineering/ Technology">Engineering/ Technology</option>
                                    <option value="Fashion">Fashion</option>
                                    <option value="Finance">Finance</option>
                                    <option value="Fine Arts">Fine Arts</option>
                                    <option value="Home Science">Home Science</option>
                                    <option value="Law">Law</option>
                                    <option value="Management">Management</option>
                                    <option value="Medicine">Medicine</option>
                                    <option value="Nursing/ Health Sciences">Nursing/ Health Sciences</option>
                                    <option value="Office administration">Office administration</option>
                                    <option value="Science">Science</option>
                                    <option value="Shipping">Shipping</option>
                                    <option value="Travel&amp;Tourism">Travel&amp;Tourism</option>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196" style="color: #666666">
                                Occupation Type</td>
                            <td align="left" class="style198" style="color: #666666">
                                :</td>
                            <td align="left" class="style197" style="padding-top: 5px; padding-bottom: 5px">
                                <select name="drp_occ_type" id="drp_occ_type" class="drop" style="width:250px;">
                                    <option selected="selected" value="Please Select">Please Select</option>
                                    <option value="Private">Private</option>
                                    <option value="Government / Public Sector">Government / Public Sector</option>
                                    <option value="Business / Self Employed">Business / Self Employed</option>
                                    <option value="Not Working">Not Working</option>

                                </select>
                                </td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196" style="color: #666666">
                                Occupation Category</td>
                            <td align="left" class="style198" style="color: #666666">
                                :</td>
                            <td align="left" class="style197" style="padding-top: 5px; padding-bottom: 5px">
                                <div id="UpdatePanel2">
                                        <select name="drp_occupationCategory" onchange="javascript:setTimeout('__doPostBack(\'drp_occupationCategory\',\'\')', 0)" id="drp_occupationCategory" class="drop" style="width:250px;">
                                            <option selected="selected" value="Please Select">Please Select</option>
                                            <option value="Accounting, Banking &amp; Finance">Accounting, Banking &amp; Finance</option>
                                            <option value="Administration &amp; HR">Administration &amp; HR</option>
                                            <option value="Advertising, Media &amp; Entertainment">Advertising, Media &amp; Entertainment</option>
                                            <option value="Agriculture">Agriculture</option>
                                            <option value="Airline &amp; Aviation">Airline &amp; Aviation</option>
                                            <option value="Architecture &amp; Design">Architecture &amp; Design</option>
                                            <option value="Artists, Animators &amp; Web Designers">Artists, Animators &amp; Web Designers</option>
                                            <option value="Beauty, Fashion &amp; Jewellery Designers">Beauty, Fashion &amp; Jewellery Designers</option>
                                            <option value="BPO, KPO, &amp; Customer Support">BPO, KPO, &amp; Customer Support</option>
                                            <option value="Business">Business</option>
                                            <option value="Civil Services / Law Enforcement">Civil Services / Law Enforcement</option>
                                            <option value="Corporate Professionals">Corporate Professionals</option>
                                            <option value="Defence">Defence</option>
                                            <option value="Education &amp; Training">Education &amp; Training</option>
                                            <option value="Engineering">Engineering</option>
                                            <option value="Hotel &amp; Hospitality">Hotel &amp; Hospitality</option>
                                            <option value="IT &amp; Software Engineering">IT &amp; Software Engineering</option>
                                            <option value="Legal">Legal</option>
                                            <option value="Medical &amp; Healthcare">Medical &amp; Healthcare</option>
                                            <option value="Merchant Navy">Merchant Navy</option>
                                            <option value="Non Working">Non Working</option>
                                            <option value="Others">Others</option>
                                            <option value="Railway">Railway</option>
                                            <option value="Sales &amp; Marketing">Sales &amp; Marketing</option>
                                            <option value="Science">Science</option>

                                        </select>
                                    </div>
                                </td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196" style="color: #666666">
                                Occupation</td>
                            <td align="left" class="style198" style="color: #666666">
                                :</td>
                            <td align="left" class="style197" style="padding-top: 5px; padding-bottom: 5px">
                                <div id="UpdatePanel3">
                                        <select name="drp_occupation" id="drp_occupation" class="drop" style="width:250px;">

                                        </select>
                                    </div>
                                </td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196" style="color: #666666">
                                Annual Income</td>
                            <td align="left" class="style198" style="color: #666666">
                                :</td>
                            <td align="left" class="style197" style="padding-top: 5px; padding-bottom: 5px">
                                                       <select name="CboNewIncome" id="CboNewIncome" tabindex="21" class="drp" style="width:250px;">
                                                            <option value="1">Up To INR 1 Lakh</option>
                                                            <option value="2">INR 1 Lakh To Less Than 2 Lakh</option>
                                                            <option value="4">INR 2 Lakh To Less Than 4 Lakh</option>
                                                            <option value="7">INR 4 Lakh To Less Than 7 Lakh</option>
                                                            <option value="10">INR 7 Lakh To Less Than 10 Lakh</option>
                                                            <option value="15">INR 10 Lakh To 15 Lakh</option>
                                                            <option value="20">INR 15 Lakh To Less Than 20 Lakh</option>
                                                            <option value="30">INR 20 Lakh To Less Than 30 Lakh</option>
                                                            <option value="50">INR 30 Lakh To Less Than 50 Lakh</option>
                                                            <option value="75">INR 50 Lakh To Less Than 75 Lakh</option>
                                                            <option value="100">INR 75 Lakh To Less Than 1 Crore</option>
                                                            <option value="101">INR 1 Crore To Above</option>
                                                            <option value="0">Do Not Show</option>

                                                        </select>
                                                    </td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196">
                                &nbsp;</td>
                            <td align="left" class="style198">
                                &nbsp;</td>
                            <td align="left" class="style197" height="25">
                                &nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left" colspan="4" class="graddd" style="font-size: 15px; color: #666666; padding-left: 12px; font-weight: bold; font-family: Arial, Helvetica, sans-serif;">
                                Other Information About Yourself</td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196" style="color: #666666">
                                &nbsp;</td>
                            <td align="left" class="style198" style="color: #666666">
                                &nbsp;</td>
                            <td align="left" height="15">
                                &nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196" style="color: #666666">
                                Features (bodytype)</td>
                            <td align="left" class="style198" style="color: #666666">
                                :</td>
                            <td align="left" class="style197" style="padding-top: 5px; padding-bottom: 5px">
                                <table id="rbl_features" border="0" style="color:#333333;">
                                    <tbody>
                                        <tr>
                                            <td><input id="rbl_features_0" type="radio" name="rbl_features" value="Beautiful" checked="checked"><label for="rbl_features_0">Beautiful</label></td><td><input id="rbl_features_1" type="radio" name="rbl_features" value="Handsome"><label for="rbl_features_1">Handsome</label></td>
                                        </tr>
                                    </tbody>
                                </table>
                                </td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196" style="color: #666666">
                                Complexion</td>
                            <td align="left" class="style198" style="color: #666666">
                                :</td>
                            <td align="left" class="style197" style="padding-top: 5px; padding-bottom: 5px">
                                <table id="rbl_complexion" border="0">
                                    <tbody>
                                        <tr>
                                            <td><input id="rbl_complexion_0" type="radio" name="rbl_complexion" value="Fair" checked="checked"><label for="rbl_complexion_0">Fair</label></td><td><input id="rbl_complexion_1" type="radio" name="rbl_complexion" value="Dark"><label for="rbl_complexion_1">Dark</label></td><td><input id="rbl_complexion_2" type="radio" name="rbl_complexion" value="Wheatish"><label for="rbl_complexion_2">Wheatish</label></td>
                                        </tr>
                                    </tbody>
                                </table>
                                </td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196" style="color: #666666">
                                Built (structure)</td>
                            <td align="left" class="style198" style="color: #666666">
                                :</td>
                            <td align="left" class="style197" style="padding-top: 5px; padding-bottom: 5px">
                                <table id="rbl_built" border="0">
                                    <tbody>
                                        <tr>
                                            <td><input id="rbl_built_0" type="radio" name="rbl_built" value="Slim" checked="checked"><label for="rbl_built_0">Slim</label></td><td><input id="rbl_built_1" type="radio" name="rbl_built" value="Thin"><label for="rbl_built_1">Thin</label></td><td><input id="rbl_built_2" type="radio" name="rbl_built" value="Medium"><label for="rbl_built_2">Medium</label></td><td><input id="rbl_built_3" type="radio" name="rbl_built" value="Heavy"><label for="rbl_built_3">Heavy</label></td>
                                        </tr>
                                    </tbody>
                                </table>
                                </td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196" style="color: #666666">
                                Special Cases</td>
                            <td align="left" class="style198" style="color: #666666">
                                :</td>
                            <td align="left" class="style197" style="padding-top: 5px; padding-bottom: 5px">
                                <select name="drp_special_cases" id="drp_special_cases" class="drop" style="width:250px;">
                                <option value="Please Select">Please Select</option>
                                <option value="Mentally Challenged">Mentally Challenged</option>
                                <option value="Physically Challenged">Physically Challenged</option>
                                <option value="Mentally and Physically Challenged">Mentally and Physically Challenged</option>
                                <option value="HIV Positive">HIV Positive</option>
                                <option value="Other">Other</option>
                                <option value="None">None</option>
                            </select>
                                &nbsp;<span id="RequiredFieldValidator6" style="color: red; visibility: hidden;">Please Fill</span></td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196" style="color: #666666">
                                Blood Group</td>
                            <td align="left" class="style198" style="color: #666666">
                                :</td>
                            <td align="left" class="style197" style="padding-top: 5px; padding-bottom: 5px">
                                <select name="drp_Bloodgroup" id="drp_Bloodgroup" class="drop" style="width:250px;">
                                    <option value="Please Select">Please Select</option>
                                    <option value="A Pos">A Pos</option>
                                    <option value="A Neg">A Neg</option>
                                    <option value="B Pos">B Pos</option>
                                    <option value="B Neg">B Neg</option>
                                    <option value="AB Pos">AB Pos</option>
                                    <option value="AB Neg">AB Neg</option>
                                    <option value="O Pos">O Pos</option>
                                    <option value="O Neg">O Neg</option>
                                    <option value="Do Not Know">Do Not Know</option>
                                </select>
                                &nbsp;<span id="RequiredFieldValidator5" style="color: red; visibility: hidden;">Fill Blood Group</span></td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196" style="color: #666666">
                                Body Weight</td>
                            <td align="left" class="style198" style="color: #666666">
                                :</td>
                            <td align="left" class="style197" style="padding-top: 5px; padding-bottom: 5px; color: #999999;">
                                <input name="txt_body_weight" type="text" maxlength="3" id="txt_body_weight" class="textb" style="width:236px;">
                                &nbsp;(in Kgs.)</td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196" style="color: #666666">
                                Smoke</td>
                            <td align="left" class="style198" style="color: #666666">
                                :</td>
                            <td align="left" class="style197" style="padding-top: 5px; padding-bottom: 5px">
                                <table id="rbl_smoking" border="0">
                                    <tbody>
                                        <tr>
                                            <td><input id="rbl_smoking_0" type="radio" name="rbl_smoking" value="Yes"><label for="rbl_smoking_0">Yes</label></td><td><input id="rbl_smoking_1" type="radio" name="rbl_smoking" value="No" checked="checked"><label for="rbl_smoking_1">No</label></td><td><input id="rbl_smoking_2" type="radio" name="rbl_smoking" value="Occasionally"><label for="rbl_smoking_2">Occasionally</label></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196" style="color: #666666">
                                Your Eating Habits (VegNonveg)</td>
                            <td align="left" class="style198" style="color: #666666">
                                :</td>
                            <td align="left" class="style197" style="padding-top: 5px; padding-bottom: 5px">
                                <table id="rbl_veg_nonveg" border="0">
                                    <tbody>
                                        <tr>
                                        <td><input id="rbl_veg_nonveg_0" type="radio" name="rbl_veg_nonveg" value="Vegetarian" checked="checked"><label for="rbl_veg_nonveg_0">Vegetarian</label></td><td><input id="rbl_veg_nonveg_1" type="radio" name="rbl_veg_nonveg" value="Non Vegetarian"><label for="rbl_veg_nonveg_1">Non Vegetarian</label></td>
                                        </tr>
                                    </tbody>
                                </table>
                                </td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196" style="color: #666666">
                                Take Hard Drinks</td>
                            <td align="left" class="style198" style="color: #666666">
                                :</td>
                            <td align="left" class="style197" style="padding-top: 5px; padding-bottom: 5px">
                                <table id="rbl_drinks" border="0">
                                    <tbody><tr>
                                        <td><input id="rbl_drinks_0" type="radio" name="rbl_drinks" value="Yes"><label for="rbl_drinks_0">Yes</label></td><td><input id="rbl_drinks_1" type="radio" name="rbl_drinks" value="No" checked="checked"><label for="rbl_drinks_1">No</label></td><td><input id="rbl_drinks_2" type="radio" name="rbl_drinks" value="Occasionally"><label for="rbl_drinks_2">Occasionally</label></td>
                                           </tr>
                                    </tbody>
                                </table>
                                </td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196">
                                &nbsp;</td>
                            <td align="left" class="style198">
                                &nbsp;</td>
                            <td align="left" height="15">
                                &nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196">
                                &nbsp;</td>
                            <td align="left" class="style198">
                                &nbsp;</td>
                            <td align="left" class="style197">
                                <input type="submit" name="btn_Submit" value="Update" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;btn_Submit&quot;, &quot;&quot;, true, &quot;aa&quot;, &quot;&quot;, false, false))" id="btn_Submit" class="search" style="height:33px;width:103px;">
                            </td>
                        </tr>
                        <tr>
                            <td align="left" class="style200">
                                &nbsp;</td>
                            <td align="left" class="style196">
                                &nbsp;</td>
                            <td align="left" class="style198">
                                &nbsp;</td>
                            <td align="left" class="style197">
                                &nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                &nbsp;</td>
                            <td class="style199">
                                &nbsp;</td>
                            <td>
                                &nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                &nbsp;</td>
                            <td class="style199">
                                &nbsp;</td>
                            <td>
                                &nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                &nbsp;</td>
                            <td class="style199">
                                &nbsp;</td>
                            <td>
                                &nbsp;</td>
                        </tr>
                        <tr>
                            <td align="center" style="background-color: #E2E2E2" colspan="4" class="fotshad">

                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                &nbsp;</td>
                            <td class="style199">
                                &nbsp;</td>
                            <td>
                                &nbsp;</td>
                        </tr>
        </tbody>
    </table>

</div>
<script>
        $(document).ready(function () {

                $('.navbar').css('display', 'flex');
        });
</script>

@endsection
