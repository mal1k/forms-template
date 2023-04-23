<?php
/*
* Template Name: Form6 template
* Template Post Type: page
*/

ob_start();
get_header();
?>

<form class="jotform-form" action="" method="post" accept-charset="utf-8" autocomplete="on" novalidate="true">
        <div role="main" class="form-all">
            <div class="formLogoWrapper Left">
                <!-- <img loading="lazy" class="formLogoImg" src="" height="60" width="60"> - logo img -->
            </div>
            <ul class="form-section page-section">
                <li id="cid_1" class="form-input-wide" data-type="control_head">
                    <div class="form-header-group  header-large">
                        <div class="header-text httac htvam">
                            <h1 id="header_1" class="form-header" data-component="header">
                                Exchange of Records Form
                            </h1>
                        </div>
                    </div>
                </li>
                <li class="form-line always-hidden" data-type="control_textbox" id="id_49">
                    <label class="form-label form-label-top form-label-auto" id="label_49" for="input_49"> Exchange of
                        Records/Release of Information </label>
                    <div id="cid_49" class="form-input-wide always-hidden" data-layout="half">
                        <?php if (!empty($_POST['q49_exchangeOf49'])): ?>
                            <b><?php echo $_POST['q49_exchangeOf49']; ?></b>
                        <?php else: ?>
                            <input type="text" id="input_49" name="q49_exchangeOf49" data-type="input-textbox"
                                class="form-textbox" data-defaultvalue="Exchange of Records Form - EN" style="width:310px"
                                size="310" value="Exchange of Records Form - EN" data-component="textbox"
                                aria-labelledby="label_49">
                        <?php endif; ?>        
                    </div>
                </li>
                <li id="cid_3" class="form-input-wide" data-type="control_head">
                    <div class="form-header-group  header-default">
                        <div class="header-text httac htvam">
                            <h2 id="header_3" class="form-header" data-component="header">
                                PATIENT INFORMATION
                            </h2>
                        </div>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-1 jf-required" data-type="control_textbox" id="id_5">
                    <label class="form-label form-label-top" id="label_5" for="input_5">
                        Patient Full Name
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_5" class="form-input-wide jf-required" data-layout="half">
                        <?php if (!empty($_POST['q5_patientFull'])): ?>
                            <b><?php echo $_POST['q5_patientFull']; ?></b>
                        <?php else: ?>
                            <input type="text" id="input_5" name="q5_patientFull" data-type="input-textbox"
                                class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310"
                                value="" data-component="textbox" aria-labelledby="label_5" required="">
                        <?php endif; ?>     
                    </div>
                </li>
                <li class="form-line form-line-column form-col-2 jf-required" data-type="control_email" id="id_52">
                    <label class="form-label form-label-top" id="label_52" for="input_52">
                        Email
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_52" class="form-input-wide jf-required" data-layout="half">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <?php if (!empty($_POST['q52_email'])): ?>
                                <b><?php echo $_POST['q52_email']; ?></b>
                            <?php else: ?>
                                <input type="email" id="input_52" name="q52_email"
                                    class="form-textbox validate[required, Email]" data-defaultvalue="" style="width:310px"
                                    size="310" value="" data-component="email" aria-labelledby="label_52 sublabel_input_52"
                                    required="">
                                <label class="form-sub-label" for="input_52" id="sublabel_input_52" style="min-height:13px"
                                    aria-hidden="false"> example@example.com </label>
                            <?php endif; ?>     
                        </span>
                    </div>
                </li>

                <li class="form-line form-line-column form-col-2 jf-required" data-type="control_datetime" id="id_6">
                    <label class="form-label form-label-top" id="label_6" for="lite_mode_6">Date<span
                            class="form-required">*</span> </label>
                    <div id="cid_6" class="form-input-wide jf-required" data-layout="half">
                        <div data-wrapper-react="true">
                            <div style="display:none"><span class="form-sub-label-container"
                                    style="vertical-align:top"><input type="tel"
                                        class="form-textbox validate[required, limitDate]" id="month_6"
                                        name="q6_applicationDate[month]" size="2" data-maxlength="2" data-age=""
                                        maxlength="2" value="" required="" autocomplete="section-input_6 off"
                                        aria-labelledby="label_6 sublabel_6_month" inputmode="numeric"><span
                                        class="date-separate" aria-hidden="true">&nbsp;-</span><label
                                        class="form-sub-label" for="month_6" id="sublabel_6_month"
                                        style="min-height:13px" aria-hidden="false">Month</label></span><span
                                    class="form-sub-label-container" style="vertical-align:top"><input type="tel"
                                        class="form-textbox validate[required, limitDate]" id="day_6"
                                        name="q6_applicationDate[day]" size="2" data-maxlength="2" data-age=""
                                        maxlength="2" value="" required="" autocomplete="section-input_6 off"
                                        aria-labelledby="label_6 sublabel_6_day" inputmode="numeric"><span
                                        class="date-separate" aria-hidden="true">&nbsp;-</span><label
                                        class="form-sub-label" for="day_6" id="sublabel_6_day" style="min-height:13px"
                                        aria-hidden="false">Day</label></span><span class="form-sub-label-container"
                                    style="vertical-align:top"><input type="tel"
                                        class="form-textbox validate[required, limitDate]" id="year_6"
                                        name="q6_applicationDate[year]" size="4" data-maxlength="4" data-age=""
                                        maxlength="4" value="" required="" autocomplete="section-input_6 off"
                                        aria-labelledby="label_6 sublabel_6_year"> <label class="form-sub-label"
                                        for="year_6" id="sublabel_6_year" style="min-height:13px"
                                        aria-hidden="false">Year</label></span></div><span
                                class="form-sub-label-container" style="vertical-align:top">
                                
                                <?php if (!empty($_POST['q6_applicationDate'])): ?>
                                    <b><?php echo $_POST['q6_applicationDate']['month'] . '-' . $_POST['q6_applicationDate']['day'] . '-' . $_POST['q6_applicationDate']['year']; ?></b>
                                <?php else: ?>
                                    <input type="text"
                                        class="form-textbox validate[required, limitDate, validateLiteDate]"
                                        id="lite_mode_6" size="12" data-maxlength="12" data-age="" value="" required=""
                                        data-format="mmddyyyy" data-seperator="-" placeholder="MM-DD-YYYY"
                                        autocomplete="section-input_6 off" aria-labelledby="label_6 sublabel_6_litemode"
                                        inputmode="numeric">
                                    <img class=" newDefaultTheme-dateIcon icon-liteMode"
                                        alt="Pick a Date" id="input_6_pick" src="./Intake Form - EN_files/calendar.png"
                                        data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v2">
                                    <label class="form-sub-label" for="lite_mode_6" id="sublabel_6_litemode"
                                        style="min-height:13px" aria-hidden="false">Date</label>
                                <?php endif; ?>
                        </div>
                    </div>
                </li>

                <li class="form-line form-line-column form-col-1 jf-required" data-type="control_phone" id="id_51">
                    <label class="form-label form-label-top" id="label_51" for="input_51_full">
                        Home/Cell Phone
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_51" class="form-input-wide jf-required" data-layout="half">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <?php if (!empty($_POST['q51_homecellPhone']['full'])): ?>
                                <b><?php echo $_POST['q51_homecellPhone']['full']; ?></b>
                            <?php else: ?>
                                <input type="tel" id="input_51_full" name="q51_homecellPhone[full]" data-type="mask-number"
                                    class="mask-phone-number form-textbox validate[required, Fill Mask]"
                                    data-defaultvalue="" autocomplete="section-input_51 tel-national" style="width:310px"
                                    data-masked="true" value="" placeholder="(000) 000-0000" data-component="phone"
                                    aria-labelledby="label_51 sublabel_51_masked" required="" inputmode="text"
                                    maskvalue="(###) ###-####">
                                <label class="form-sub-label" for="input_51_full" id="sublabel_51_masked"
                                    style="min-height:13px" aria-hidden="false"> Please enter a valid phone number. </label>
                            <?php endif; ?>   
                        </span>
                    </div>
                </li>

                <li class="form-line" data-type="control_textbox" id="id_7">
                    <label class="form-label form-label-top" id="label_7" for="input_7">
                        Parent/Guardian Name (if applicable)
                    </label>
                    <div id="cid_7" class="form-input-wide" data-layout="half">
                        <?php if (!empty($_POST['q7_yourDoctors7'])): ?>
                            <b><?php echo $_POST['q7_yourDoctors7']; ?></b>
                        <?php else: ?>
                            <input type="text" id="input_7" name="q7_yourDoctors7" data-type="input-textbox"
                                class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value=""
                                data-component="textbox" aria-labelledby="label_7" required="">
                        <?php endif; ?>   
                    </div>
                </li>
                <li class="form-line" data-type="control_divider" id="id_62">
                    <div id="cid_62" class="form-input-wide" data-layout="full">
                        <div class="divider" aria-label="Divider" data-component="divider"
                            style="border-bottom-width:10px;border-bottom-style:solid;border-color:#e6e6e6;height:10px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px">
                        </div>
                    </div>
                </li>

                <li class="form-line" data-type="control_checkbox" id="id_64">
                    <label class="form-label form-label-top" id="label_64" for="input_64"> This form when completed and
                        signed requests and gives permission to The Nicholls Group to release and provide the following
                        information (check only what you need):</label>
                    <div id="cid_64" class="form-input-wide" data-layout="full">
                        <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_64"
                            data-component="checkbox">
                            <?php echo ( !empty($_POST['q64_name64']) ) ? '<ol>' : ''; ?>
                            <span class="form-checkbox-item">
                                <span class="dragger-item"></span>
                                <?php if (!empty($_POST['q64_name64']) ): ?>
                                    <b><?php echo (in_array('Treatment Planning', $_POST['q64_name64'])) ? '<li>My evaluation report (patients OVER 18 years of age)</li>' : ''; ?></b>
                                <?php else: ?>
                                    <input type="checkbox" aria-describedby="label_64" class="form-checkbox" id="input_64_0"
                                    name="q64_name64[]" value="Treatment Planning">
                                    <label id="label_input_64_0" for="input_64_0">My evaluation report (patients OVER 18 years of age)</label>
                                <?php endif; ?>
                            </span>
                            <span class="form-checkbox-item">
                                <span class="dragger-item"></span>
                                <?php if (!empty($_POST['q64_name64']) ): ?>
                                    <b><?php echo (in_array('Billing', $_POST['q64_name64'])) ? '<li>My minor child’s evaluation report (patients UNDER 18)</li>' : ''; ?></b>
                                <?php else: ?>
                                    <input type="checkbox" aria-describedby="label_64" class="form-checkbox" id="input_64_1"
                                    name="q64_name64[]" value="Billing">
                                    <label id="label_input_64_1" for="input_64_1">My minor child’s evaluation report (patients UNDER 18)</label>
                                <?php endif; ?>
                            </span>
                            <span class="form-checkbox-item" style="clear:left">
                                <span class="dragger-item"></span>
                                <?php if (!empty($_POST['q64_name64']) ): ?>
                                    <b><?php echo (in_array('Updates', $_POST['q64_name64'])) ? '<li>My/My child’s therapy records (delays receipt of records as it requires Doctor approval)</li>' : ''; ?></b>
                                <?php else: ?>
                                    <input type="checkbox" aria-describedby="label_64" class="form-checkbox" id="input_64_2"
                                    name="q64_name64[]" value="Updates">
                                    <label id="label_input_64_2" for="input_64_2">My/My child’s therapy records (delays receipt of records as it requires Doctor approval)</label>
                                <?php endif; ?>
                            </span>
                            <span class="form-checkbox-item" style="clear:left">
                                <span class="dragger-item"></span>
                                <?php if (!empty($_POST['q64_name64']) ): ?>
                                    <b><?php echo (in_array('Updates2', $_POST['q64_name64'])) ? '<li>Invoices/Billing Records</li>' : ''; ?></b>
                                <?php else: ?>
                                    <input type="checkbox" aria-describedby="label_64" class="form-checkbox" id="input_64_3"
                                    name="q64_name64[]" value="Updates2">
                                    <label id="label_input_64_3" for="input_64_3">Invoices/Billing Records</label>
                                <?php endif; ?>
                            </span>
                            <span class="form-checkbox-item formCheckboxOther">
                                <?php if (!empty($_POST['q64_name64']['other']) ): ?>
                                    <b><?php echo '<li>'.$_POST['q64_name64']['other']; ?></b>
                                <?php else: ?>
                                    <input type="checkbox" class="form-checkbox-other form-checkbox"
                                        name="q64_name64[other]" id="other_64" value="other" tabindex="0"
                                        aria-label="Other">
                                    <label id="label_other_64" style="text-indent:0" for="other_64"> Other </label>
                                    <span id="other_64_input" class="other-input-container is-none">
                                        <input type="text" class="form-checkbox-other-input form-textbox"
                                            name="q64_name64[other]" data-otherhint="Other" size="15" id="input_64"
                                            data-placeholder="Please type another option here"
                                            placeholder="Please type another option here">
                                    </span>
                                <?php endif; ?>
                            </span>
                            <?php echo ( !empty($_POST['q64_name64']) ) ? '</ol>' : ''; ?>
                        </div>
                    </div>
                </li>

                <?php if (empty($_POST)): ?>
                <li class="form-line" data-type="control_button" id="id_2">
                    <div id="cid_2" class="form-input-wide" data-layout="full">
                        <div data-align="auto"
                            class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
                            <button id="input_2" type="submit"
                                class="form-submit-button form-submit-button-simple_grey submit-button jf-form-buttons jsTest-submitField"
                                data-component="button" data-content="">
                                Submit
                            </button>
                        </div>
                    </div>
                </li>
                <?php endif; ?>
                <li style="display:none">
                    Should be Empty:
                    <input type="text" name="website" value="">
                </li>
            </ul>
        </div>
    </form>

<?php
$content = ob_get_contents();
get_footer();

$form_id = 6;
require_once 'form-controller.php';
?>
