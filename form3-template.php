<?php
/*
* Template Name: Form3 template
* Template Post Type: page
*/

ob_start();
get_header();
?>

<form class="jotform-form" action="" method="post"
        accept-charset="utf-8" autocomplete="on" novalidate="true">
        <input type="hidden" id="JWTContainer" value="">
        <input type="hidden" id="cardinalOrderNumber" value="">
        <div role="main" class="form-all">
            <div class="formLogoWrapper Left">
                <!-- <img loading="lazy" class="formLogoImg"
                    src=""
                    height="60" width="60"> -->
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
                <li class="form-line form-line-column form-col-2 jf-required" data-type="control_datetime" id="id_6">
                    <label class="form-label form-label-top" id="label_6" for="lite_mode_6">
                        Date of Birth
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_6" class="form-input-wide jf-required" data-layout="half">
                        <div data-wrapper-react="true">
                            <div style="display:none">
                                <span class="form-sub-label-container" style="vertical-align:top">
                                    <input type="tel" class="form-textbox validate[required, limitDate]" id="month_6"
                                        name="q6_dateOf[month]" size="2" data-maxlength="2" data-age="" maxlength="2"
                                        value="" required="" autocomplete="section-input_6 off"
                                        aria-labelledby="label_6 sublabel_6_month" inputmode="numeric">
                                    <span class="date-separate" aria-hidden="true">
                                        &nbsp;-
                                    </span>
                                    <label class="form-sub-label" for="month_6" id="sublabel_6_month"
                                        style="min-height:13px" aria-hidden="false"> Month </label>
                                </span>
                                <span class="form-sub-label-container" style="vertical-align:top">
                                    <input type="tel" class="form-textbox validate[required, limitDate]" id="day_6"
                                        name="q6_dateOf[day]" size="2" data-maxlength="2" data-age="" maxlength="2"
                                        value="" required="" autocomplete="section-input_6 off"
                                        aria-labelledby="label_6 sublabel_6_day" inputmode="numeric">
                                    <span class="date-separate" aria-hidden="true">
                                        &nbsp;-
                                    </span>
                                    <label class="form-sub-label" for="day_6" id="sublabel_6_day"
                                        style="min-height:13px" aria-hidden="false"> Day </label>
                                </span>
                                <span class="form-sub-label-container" style="vertical-align:top">
                                    <input type="tel" class="form-textbox validate[required, limitDate]" id="year_6"
                                        name="q6_dateOf[year]" size="4" data-maxlength="4" data-age="" maxlength="4"
                                        value="" required="" autocomplete="section-input_6 off"
                                        aria-labelledby="label_6 sublabel_6_year">
                                    <label class="form-sub-label" for="year_6" id="sublabel_6_year"
                                        style="min-height:13px" aria-hidden="false"> Year </label>
                                </span>
                            </div>
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <?php if (!empty($_POST['q6_dateOf'])): ?>
                                    <b><?php echo $_POST['q6_dateOf']['month'] . '-' . $_POST['q6_dateOf']['day'] . '-' . $_POST['q6_dateOf']['year']; ?></b>
                                <?php else: ?>
                                    <input type="text" class="form-textbox validate[required, limitDate, validateLiteDate]"
                                        id="lite_mode_6" size="12" data-maxlength="12" data-age="" value="" required=""
                                        data-format="mmddyyyy" data-seperator="-" placeholder="MM-DD-YYYY"
                                        autocomplete="section-input_6 off" aria-labelledby="label_6 sublabel_6_litemode"
                                        inputmode="numeric">
                                    <img class=" newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date" id="input_6_pick"
                                        src="./img/calendar.png" data-component="datetime" aria-hidden="true"
                                        data-allow-time="No" data-version="v2">
                                    <label class="form-sub-label" for="lite_mode_6" id="sublabel_6_litemode"
                                        style="min-height:13px" aria-hidden="false"> Date </label>
                                <?php endif; ?>

                            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line jf-required" data-type="control_address" id="id_50">
                    <label class="form-label form-label-top form-label-auto" id="label_50" for="input_50_addr_line1">
                        Patient Address
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_50" class="form-input-wide jf-required" data-layout="full">
                        <div summary="" class="form-address-table jsTest-addressField">
                            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                                <span class="form-address-line form-address-street-line jsTest-address-lineField">
                                    <span class="form-sub-label-container" style="vertical-align:top">
                                        <?php if (!empty($_POST['q50_patientAddress']['addr_line1'])): ?>
                                            <b><?php echo $_POST['q50_patientAddress']['addr_line1']; ?></b>
                                        <?php else: ?>
                                            <input type="text" id="input_50_addr_line1"
                                                name="q50_patientAddress[addr_line1]"
                                                class="form-textbox validate[required] form-address-line"
                                                data-defaultvalue="" autocomplete="section-input_50 address-line1" value=""
                                                data-component="address_line_1"
                                                aria-labelledby="label_50 sublabel_50_addr_line1" required="">
                                            <label class="form-sub-label" for="input_50_addr_line1"
                                                id="sublabel_50_addr_line1" style="min-height:13px" aria-hidden="false">
                                                Street Address </label>
                                        <?php endif; ?>
                                    </span>
                                </span>
                            </div>
                            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                                <span class="form-address-line form-address-street-line jsTest-address-lineField">
                                    <span class="form-sub-label-container" style="vertical-align:top">
                                        <?php if (!empty($_POST['q50_patientAddress']['addr_line2'])): ?>
                                            <b><?php echo $_POST['q50_patientAddress']['addr_line2']; ?></b>
                                        <?php else: ?>
                                            <input type="text" id="input_50_addr_line2"
                                                name="q50_patientAddress[addr_line2]" class="form-textbox form-address-line"
                                                data-defaultvalue="" autocomplete="section-input_50 address-line2" value=""
                                                data-component="address_line_2"
                                                aria-labelledby="label_50 sublabel_50_addr_line2">
                                            <label class="form-sub-label" for="input_50_addr_line2"
                                                id="sublabel_50_addr_line2" style="min-height:13px" aria-hidden="false">
                                                Street Address Line 2 </label>
                                        <?php endif; ?>
                                    </span>
                                </span>
                            </div>
                            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                                <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                                    <span class="form-sub-label-container" style="vertical-align:top">
                                        <?php if (!empty($_POST['q50_patientAddress']['city'])): ?>
                                            <b><?php echo $_POST['q50_patientAddress']['city']; ?></b>
                                        <?php else: ?>
                                            <input type="text" id="input_50_city" name="q50_patientAddress[city]"
                                                class="form-textbox validate[required] form-address-city"
                                                data-defaultvalue="" autocomplete="section-input_50 address-level2" value=""
                                                data-component="city" aria-labelledby="label_50 sublabel_50_city"
                                                required="">
                                            <label class="form-sub-label" for="input_50_city" id="sublabel_50_city"
                                                style="min-height:13px" aria-hidden="false"> City </label>
                                        <?php endif; ?>
                                    </span>
                                </span>
                                <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                                    <span class="form-sub-label-container" style="vertical-align:top">
                                        <?php if (!empty($_POST['q50_patientAddress']['state'])): ?>
                                            <b><?php echo $_POST['q50_patientAddress']['state']; ?></b>
                                        <?php else: ?>
                                            <input type="text" id="input_50_state" name="q50_patientAddress[state]"
                                                class="form-textbox validate[required] form-address-state"
                                                data-defaultvalue="" autocomplete="section-input_50 address-level1" value=""
                                                data-component="state" aria-labelledby="label_50 sublabel_50_state"
                                                required="">
                                            <label class="form-sub-label" for="input_50_state" id="sublabel_50_state"
                                                style="min-height:13px" aria-hidden="false"> State / Province </label>
                                        <?php endif; ?>
                                    </span>
                                </span>
                            </div>
                            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                                <span class="form-address-line form-address-zip-line jsTest-address-lineField ">
                                    <span class="form-sub-label-container" style="vertical-align:top">
                                        <?php if (!empty($_POST['q50_patientAddress']['postal'])): ?>
                                            <b><?php echo $_POST['q50_patientAddress']['postal']; ?></b>
                                        <?php else: ?>
                                            <input type="text" id="input_50_postal" name="q50_patientAddress[postal]"
                                                class="form-textbox validate[required] form-address-postal"
                                                data-defaultvalue="" autocomplete="section-input_50 postal-code" value=""
                                                data-component="zip" aria-labelledby="label_50 sublabel_50_postal"
                                                required="">
                                            <label class="form-sub-label" for="input_50_postal" id="sublabel_50_postal"
                                                style="min-height:13px" aria-hidden="false"> Postal / Zip Code </label>
                                        <?php endif; ?>
                                    </span>
                                </span>
                            </div>
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
                                <?php if (empty($_POST)){ ?>
                                <label class="form-sub-label" for="input_51_full" id="sublabel_51_masked"
                                    style="min-height:13px" aria-hidden="false"> Please enter a valid phone number. </label>
                                <?php } ?>
                            <?php endif; ?>
                        </span>
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
                <li class="form-line" data-type="control_text" id="id_54">
                    <div id="cid_54" class="form-input-wide" data-layout="full">
                        <div id="text_54" class="form-html" data-component="text" tabindex="0">
                            <p><strong>Release Records/Request for Records</strong></p>
                            <p>This form when completed and signed by me, authorizes&nbsp;the following Doctor at The
                                Nicholls Group and/or his/her staff to release/receive/exchange protected health
                                information (PHI) to/from the following individuals:</p>
                        </div>
                    </div>
                </li>
                <li class="form-line jf-required" data-type="control_textbox" id="id_7">
                    <label class="form-label form-label-top" id="label_7" for="input_7">
                        Your Doctor's Name at The Nicholls Group
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_7" class="form-input-wide jf-required" data-layout="half">
                        <?php if (!empty($_POST['q7_yourDoctors7'])): ?>
                            <b><?php echo $_POST['q7_yourDoctors7']; ?></b>
                        <?php else: ?>
                            <input type="text" id="input_7" name="q7_yourDoctors7" data-type="input-textbox"
                                class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310"
                                value="" data-component="textbox" aria-labelledby="label_7" required="">
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
                <li id="cid_72" class="form-input-wide" data-type="control_head">
                    <div class="form-header-group  header-default">
                        <div class="header-text httal htvam">
                            <h2 id="header_72" class="form-header" data-component="header">
                                Who is the individual we are allowed to share your information with?
                            </h2>
                            <div id="subHeader_72" class="form-subHeader">
                                Up to 2 spaces below (#1 and #2) to list the Business, Facility or Individual Name(s)
                                that we are allowed to provide your protected health information (only the information
                                you specify)
                            </div>
                        </div>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-1 jf-required" data-type="control_textbox" id="id_8">
                    <label class="form-label form-label-top" id="label_8" for="input_8">
                        Business/Facility or Individual's Name #1
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_8" class="form-input-wide jf-required" data-layout="half">
                        <?php if (!empty($_POST['q8_businessfacilityOr8'])): ?>
                            <b><?php echo $_POST['q8_businessfacilityOr8']; ?></b>
                        <?php else: ?>
                            <input type="text" id="input_8" name="q8_businessfacilityOr8" data-type="input-textbox"
                                class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310"
                                value="" data-component="textbox" aria-labelledby="label_8" required="">
                        <?php endif; ?>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_55">
                    <label class="form-label form-label-top" id="label_55" for="input_55"> Business/Facility or
                        Individual's Name #2 </label>
                    <div id="cid_55" class="form-input-wide" data-layout="half">
                        <?php if (!empty($_POST['q55_businessfacilityOr'])): ?>
                            <b><?php echo $_POST['q55_businessfacilityOr']; ?></b>
                        <?php else: ?>
                            <input type="text" id="input_55" name="q55_businessfacilityOr" data-type="input-textbox"
                                class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value=""
                                data-component="textbox" aria-labelledby="label_55">
                        <?php endif; ?>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-3 jf-required" data-type="control_phone" id="id_56">
                    <label class="form-label form-label-top" id="label_56" for="input_56_full">
                        Phone Number
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_56" class="form-input-wide jf-required" data-layout="half">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <?php if (!empty($_POST['q56_phoneNumber']['full'])): ?>
                                <b><?php echo $_POST['q56_phoneNumber']['full']; ?></b>
                            <?php else: ?>
                                <input type="tel" id="input_56_full" name="q56_phoneNumber[full]" data-type="mask-number"
                                    class="mask-phone-number form-textbox validate[required, Fill Mask]"
                                    data-defaultvalue="" autocomplete="section-input_56 tel-national" style="width:310px"
                                    data-masked="true" value="" placeholder="(000) 000-0000" data-component="phone"
                                    aria-labelledby="label_56 sublabel_56_masked" required="" inputmode="text"
                                    maskvalue="(###) ###-####">
                                <?php if (empty($_POST)){ ?>
                                <label class="form-sub-label" for="input_56_full" id="sublabel_56_masked"
                                    style="min-height:13px" aria-hidden="false"> Please enter a valid phone number. </label>
                                <?php } ?>
                            <?php endif; ?>
                        </span>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-4" data-type="control_phone" id="id_57">
                    <label class="form-label form-label-top" id="label_57" for="input_57_full"> Phone Number </label>
                    <div id="cid_57" class="form-input-wide" data-layout="half">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <?php if (!empty($_POST['q57_phoneNumber57']['full'])): ?>
                                <b><?php echo $_POST['q57_phoneNumber57']['full']; ?></b>
                            <?php else: ?>
                                <input type="tel" id="input_57_full" name="q57_phoneNumber57[full]" data-type="mask-number"
                                    class="mask-phone-number form-textbox validate[Fill Mask]" data-defaultvalue=""
                                    autocomplete="section-input_57 tel-national" style="width:310px" data-masked="true"
                                    value="" placeholder="(000) 000-0000" data-component="phone"
                                    aria-labelledby="label_57 sublabel_57_masked" inputmode="text"
                                    maskvalue="(###) ###-####">
                                <?php if (empty($_POST)){ ?>
                                <label class="form-sub-label" for="input_57_full" id="sublabel_57_masked"
                                    style="min-height:13px" aria-hidden="false"> Please enter a valid phone number. </label>
                                <?php } ?>
                            <?php endif; ?>
                        </span>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-5" data-type="control_phone" id="id_58">
                    <label class="form-label form-label-top" id="label_58" for="input_58_full"> Fax Number </label>
                    <div id="cid_58" class="form-input-wide" data-layout="half">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <?php if (!empty($_POST['q58_faxNumber']['full'])): ?>
                                <b><?php echo $_POST['q58_faxNumber']['full']; ?></b>
                            <?php else: ?>
                                <input type="tel" id="input_58_full" name="q58_faxNumber[full]" data-type="mask-number"
                                    class="mask-phone-number form-textbox validate[Fill Mask]" data-defaultvalue=""
                                    autocomplete="section-input_58 tel-national" style="width:310px" data-masked="true"
                                    value="" placeholder="(000) 000-0000" data-component="phone"
                                    aria-labelledby="label_58 sublabel_58_masked" inputmode="text"
                                    maskvalue="(###) ###-####">
                                <?php if (empty($_POST)){ ?>
                                <label class="form-sub-label" for="input_58_full" id="sublabel_58_masked"
                                    style="min-height:13px" aria-hidden="false"> Please enter a valid phone number. </label>
                                <?php } ?>
                            <?php endif; ?>
                        </span>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-6" data-type="control_phone" id="id_59">
                    <label class="form-label form-label-top" id="label_59" for="input_59_full"> Fax Number </label>
                    <div id="cid_59" class="form-input-wide" data-layout="half">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <?php if (!empty($_POST['q59_faxNumber59']['full'])): ?>
                                <b><?php echo $_POST['q59_faxNumber59']['full']; ?></b>
                            <?php else: ?>
                                <input type="tel" id="input_59_full" name="q59_faxNumber59[full]" data-type="mask-number"
                                    class="mask-phone-number form-textbox validate[Fill Mask]" data-defaultvalue=""
                                    autocomplete="section-input_59 tel-national" style="width:310px" data-masked="true"
                                    value="" placeholder="(000) 000-0000" data-component="phone"
                                    aria-labelledby="label_59 sublabel_59_masked" inputmode="text"
                                    maskvalue="(###) ###-####">
                                <?php if (empty($_POST)){ ?>
                                <label class="form-sub-label" for="input_59_full" id="sublabel_59_masked"
                                    style="min-height:13px" aria-hidden="false"> Please enter a valid phone number. </label>
                                <?php } ?>
                            <?php endif; ?>
                        </span>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-7 jf-required" data-type="control_address" id="id_60">
                    <label class="form-label form-label-top" id="label_60" for="input_60_addr_line1">
                        Address
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_60" class="form-input-wide jf-required" data-layout="full">
                        <div summary="" class="form-address-table jsTest-addressField">
                            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                                <span class="form-address-line form-address-street-line jsTest-address-lineField">
                                    <span class="form-sub-label-container" style="vertical-align:top">
                                        <?php if (!empty($_POST['q60_address']['addr_line1'])): ?>
                                            <b><?php echo $_POST['q60_address']['addr_line1']; ?></b>
                                        <?php else: ?>
                                            <input type="text" id="input_60_addr_line1" name="q60_address[addr_line1]"
                                                class="form-textbox validate[required] form-address-line"
                                                data-defaultvalue="" autocomplete="section-input_60 address-line1" value=""
                                                data-component="address_line_1"
                                                aria-labelledby="label_60 sublabel_60_addr_line1" required="">
                                            <label class="form-sub-label" for="input_60_addr_line1"
                                                id="sublabel_60_addr_line1" style="min-height:13px" aria-hidden="false">
                                                Street Address </label>
                                        <?php endif; ?>
                                    </span>
                                </span>
                            </div>
                            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                                <span class="form-address-line form-address-street-line jsTest-address-lineField">
                                    <span class="form-sub-label-container" style="vertical-align:top">
                                        <?php if (!empty($_POST['q60_address']['addr_line2'])): ?>
                                            <b><?php echo $_POST['q60_address']['addr_line2']; ?></b>
                                        <?php else: ?>
                                            <input type="text" id="input_60_addr_line2" name="q60_address[addr_line2]"
                                                class="form-textbox form-address-line" data-defaultvalue=""
                                                autocomplete="section-input_60 address-line2" value=""
                                                data-component="address_line_2"
                                                aria-labelledby="label_60 sublabel_60_addr_line2">
                                            <label class="form-sub-label" for="input_60_addr_line2"
                                                id="sublabel_60_addr_line2" style="min-height:13px" aria-hidden="false">
                                                Street Address Line 2 </label>
                                        <?php endif; ?>
                                    </span>
                                </span>
                            </div>
                            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                                <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                                    <span class="form-sub-label-container" style="vertical-align:top">
                                        <?php if (!empty($_POST['q60_address']['city'])): ?>
                                            <b><?php echo $_POST['q60_address']['city']; ?></b>
                                        <?php else: ?>
                                            <input type="text" id="input_60_city" name="q60_address[city]"
                                                class="form-textbox validate[required] form-address-city"
                                                data-defaultvalue="" autocomplete="section-input_60 address-level2" value=""
                                                data-component="city" aria-labelledby="label_60 sublabel_60_city"
                                                required="">
                                            <label class="form-sub-label" for="input_60_city" id="sublabel_60_city"
                                                style="min-height:13px" aria-hidden="false"> City </label>
                                        <?php endif; ?>
                                    </span>
                                </span>
                                <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                                    <span class="form-sub-label-container" style="vertical-align:top">
                                        <?php if (!empty($_POST['q60_address']['state'])): ?>
                                            <b><?php echo $_POST['q60_address']['state']; ?></b>
                                        <?php else: ?>
                                            <input type="text" id="input_60_state" name="q60_address[state]"
                                                class="form-textbox validate[required] form-address-state"
                                                data-defaultvalue="" autocomplete="section-input_60 address-level1" value=""
                                                data-component="state" aria-labelledby="label_60 sublabel_60_state"
                                                required="">
                                            <label class="form-sub-label" for="input_60_state" id="sublabel_60_state"
                                                style="min-height:13px" aria-hidden="false"> State / Province </label>
                                        <?php endif; ?>
                                    </span>
                                </span>
                            </div>
                            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                                <span class="form-address-line form-address-zip-line jsTest-address-lineField ">
                                    <span class="form-sub-label-container" style="vertical-align:top">
                                        <?php if (!empty($_POST['q60_address']['postal'])): ?>
                                            <b><?php echo $_POST['q60_address']['postal']; ?></b>
                                        <?php else: ?>
                                            <input type="text" id="input_60_postal" name="q60_address[postal]"
                                                class="form-textbox validate[required] form-address-postal"
                                                data-defaultvalue="" autocomplete="section-input_60 postal-code" value=""
                                                data-component="zip" aria-labelledby="label_60 sublabel_60_postal"
                                                required="">
                                            <label class="form-sub-label" for="input_60_postal" id="sublabel_60_postal"
                                                style="min-height:13px" aria-hidden="false"> Postal / Zip Code </label>
                                        <?php endif; ?>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-8" data-type="control_address" id="id_61">
                    <label class="form-label form-label-top" id="label_61" for="input_61_addr_line1"> Address </label>
                    <div id="cid_61" class="form-input-wide" data-layout="full">
                        <div summary="" class="form-address-table jsTest-addressField">
                            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                                <span class="form-address-line form-address-street-line jsTest-address-lineField">
                                    <span class="form-sub-label-container" style="vertical-align:top">
                                        <?php if (!empty($_POST['q61_address61']['addr_line1'])): ?>
                                            <b><?php echo $_POST['q61_address61']['addr_line1']; ?></b>
                                        <?php else: ?>
                                            <input type="text" id="input_61_addr_line1" name="q61_address61[addr_line1]"
                                                class="form-textbox form-address-line" data-defaultvalue=""
                                                autocomplete="section-input_61 address-line1" value=""
                                                data-component="address_line_1"
                                                aria-labelledby="label_61 sublabel_61_addr_line1" required="">
                                            <label class="form-sub-label" for="input_61_addr_line1"
                                                id="sublabel_61_addr_line1" style="min-height:13px" aria-hidden="false">
                                                Street Address </label>
                                        <?php endif; ?>
                                    </span>
                                </span>
                            </div>
                            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                                <span class="form-address-line form-address-street-line jsTest-address-lineField">
                                    <span class="form-sub-label-container" style="vertical-align:top">
                                        <?php if (!empty($_POST['q61_address61']['addr_line2'])): ?>
                                            <b><?php echo $_POST['q61_address61']['addr_line2']; ?></b>
                                        <?php else: ?>
                                            <input type="text" id="input_61_addr_line2" name="q61_address61[addr_line2]"
                                                class="form-textbox form-address-line" data-defaultvalue=""
                                                autocomplete="section-input_61 address-line2" value=""
                                                data-component="address_line_2"
                                                aria-labelledby="label_61 sublabel_61_addr_line2">
                                            <label class="form-sub-label" for="input_61_addr_line2"
                                                id="sublabel_61_addr_line2" style="min-height:13px" aria-hidden="false">
                                                Street Address Line 2 </label>
                                        <?php endif; ?>
                                    </span>
                                </span>
                            </div>
                            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                                <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                                    <span class="form-sub-label-container" style="vertical-align:top">
                                        <?php if (!empty($_POST['q61_address61']['city'])): ?>
                                            <b><?php echo $_POST['q61_address61']['city']; ?></b>
                                        <?php else: ?>
                                            <input type="text" id="input_61_city" name="q61_address61[city]"
                                                class="form-textbox form-address-city" data-defaultvalue=""
                                                autocomplete="section-input_61 address-level2" value=""
                                                data-component="city" aria-labelledby="label_61 sublabel_61_city"
                                                required="">
                                            <label class="form-sub-label" for="input_61_city" id="sublabel_61_city"
                                                style="min-height:13px" aria-hidden="false"> City </label>
                                        <?php endif; ?>
                                    </span>
                                </span>
                                <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                                    <span class="form-sub-label-container" style="vertical-align:top">
                                        <?php if (!empty($_POST['q61_address61']['city'])): ?>
                                            <b><?php echo $_POST['q61_address61']['city']; ?></b>
                                        <?php else: ?>
                                            <input type="text" id="input_61_state" name="q61_address61[city]"
                                                class="form-textbox form-address-state" data-defaultvalue=""
                                                autocomplete="section-input_61 address-level1" value=""
                                                data-component="state" aria-labelledby="label_61 sublabel_61_state"
                                                required="">
                                            <label class="form-sub-label" for="input_61_state" id="sublabel_61_state"
                                                style="min-height:13px" aria-hidden="false"> State / Province </label>
                                        <?php endif; ?>
                                    </span>
                                </span>
                            </div>
                            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                                <span class="form-address-line form-address-zip-line jsTest-address-lineField ">
                                    <span class="form-sub-label-container" style="vertical-align:top">
                                        <?php if (!empty($_POST['q61_address61']['postal'])): ?>
                                            <b><?php echo $_POST['q61_address61']['postal']; ?></b>
                                        <?php else: ?>
                                            <input type="text" id="input_61_postal" name="q61_address61[postal]"
                                                class="form-textbox form-address-postal" data-defaultvalue=""
                                                autocomplete="section-input_61 postal-code" value="" data-component="zip"
                                                aria-labelledby="label_61 sublabel_61_postal" required="">
                                            <label class="form-sub-label" for="input_61_postal" id="sublabel_61_postal"
                                                style="min-height:13px" aria-hidden="false"> Postal / Zip Code </label>
                                        <?php endif; ?>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_checkbox" id="id_45">
                    <label class="form-label form-label-top" id="label_45" for="input_45"> The following information may
                        be shared (please check all that apply): </label>
                    <div id="cid_45" class="form-input-wide" data-layout="full">
                        <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_45"
                            data-component="checkbox">
                            <?php echo (!empty($_POST['q45_name45'])) ? '<ol>' : ''; ?>
                            <span class="form-checkbox-item">
                                <span class="dragger-item"></span>
                                <?php if (!empty($_POST['q45_name45']) ): ?>
                                    <b><?php echo (in_array('Assessment Results', $_POST['q45_name45'])) ? '<li>Assessment Results</li>' : ''; ?></b>
                                <?php else: ?>
                                    <input type="checkbox" aria-describedby="label_45" class="form-checkbox" id="input_45_0"
                                        name="q45_name45[]" value="Assessment Results">
                                    <label id="label_input_45_0" for="input_45_0"> Assessment Results </label>
                                <?php endif; ?>
                            </span>
                            <span class="form-checkbox-item">
                                <span class="dragger-item"></span>
                                <?php if (!empty($_POST['q45_name45']) ): ?>
                                    <b><?php echo (in_array('Evaluation Report', $_POST['q45_name45'])) ? '<li>Evaluation Report</li>' : ''; ?></b>
                                <?php else: ?>
                                    <input type="checkbox" aria-describedby="label_45" class="form-checkbox" id="input_45_1"
                                        name="q45_name45[]" value="Evaluation Report">
                                    <label id="label_input_45_1" for="input_45_1"> Evaluation Report </label>
                                <?php endif; ?>
                            </span>
                            <span class="form-checkbox-item" style="clear:left">
                                <span class="dragger-item"></span>
                                <?php if (!empty($_POST['q45_name45']) ): ?>
                                    <b><?php echo (in_array('Diagnostic Information', $_POST['q45_name45'])) ? '<li>Diagnostic Information</li>' : ''; ?></b>
                                <?php else: ?>
                                    <input type="checkbox" aria-describedby="label_45" class="form-checkbox" id="input_45_2"
                                        name="q45_name45[]" value="Diagnostic Information">
                                    <label id="label_input_45_2" for="input_45_2"> Diagnostic Information </label>
                                <?php endif; ?>
                            </span>
                            <span class="form-checkbox-item">
                                <span class="dragger-item"></span>
                                <?php if (!empty($_POST['q45_name45']) ): ?>
                                    <b><?php echo (in_array('Summary of Therapy Sessions', $_POST['q45_name45'])) ? '<li>Summary of Therapy Sessions</li>' : ''; ?></b>
                                <?php else: ?>
                                    <input type="checkbox" aria-describedby="label_45" class="form-checkbox" id="input_45_3"
                                        name="q45_name45[]" value="Summary of Therapy Sessions">
                                    <label id="label_input_45_3" for="input_45_3"> Summary of Therapy Sessions </label>
                                <?php endif; ?>
                            </span>
                            <span class="form-checkbox-item" style="clear:left">
                                <span class="dragger-item"></span>
                                <?php if (!empty($_POST['q45_name45']) ): ?>
                                    <b><?php echo (in_array('Summary of Clinical Findings', $_POST['q45_name45'])) ? '<li>Summary of Clinical Findings</li>' : ''; ?></b>
                                <?php else: ?>
                                    <input type="checkbox" aria-describedby="label_45" class="form-checkbox" id="input_45_4"
                                        name="q45_name45[]" value="Summary of Clinical Findings">
                                    <label id="label_input_45_4" for="input_45_4"> Summary of Clinical Findings </label>
                                <?php endif; ?>
                            </span>
                            <span class="form-checkbox-item">
                                <span class="dragger-item"></span>
                                <?php if (!empty($_POST['q45_name45']) ): ?>
                                    <b><?php echo (in_array('Any and all information necessary', $_POST['q45_name45'])) ? '<li>Any and all information necessary</li>' : ''; ?></b>
                                <?php else: ?>
                                    <input type="checkbox" aria-describedby="label_45" class="form-checkbox" id="input_45_5"
                                        name="q45_name45[]" value="Any and all information necessary">
                                    <label id="label_input_45_5" for="input_45_5"> Any and all information necessary
                                <?php endif; ?>
                                </label>
                            </span>
                            <?php echo (!empty($_POST['q45_name45'])) ? '</ol>' : ''; ?>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_checkbox" id="id_64">
                    <label class="form-label form-label-top" id="label_64" for="input_64"> I am requesting that this
                        information be shared for the following reasons: </label>
                    <div id="cid_64" class="form-input-wide" data-layout="full">
                        <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_64"
                            data-component="checkbox">
                            <?php echo (!empty($_POST['q64_name64'])) ? '<ol>' : ''; ?>
                            <span class="form-checkbox-item">
                                <span class="dragger-item"></span>
                                <?php if (!empty($_POST['q64_name64'] )): ?>
                                    <b><?php echo (in_array('Treatment Planning', $_POST['q64_name64'])) ? '<li>Treatment Planning</li>' : ''; ?></b>
                                <?php else: ?>
                                    <input type="checkbox" aria-describedby="label_64" class="form-checkbox" id="input_64_0"
                                        name="q64_name64[]" value="Treatment Planning">
                                    <label id="label_input_64_0" for="input_64_0"> Treatment Planning </label>
                                <?php endif; ?>
                            </span>
                            <span class="form-checkbox-item">
                                <span class="dragger-item"></span>
                                <?php if (!empty($_POST['q64_name64'] )): ?>
                                    <b><?php echo (in_array('Billing', $_POST['q64_name64'])) ? '<li>Billing</li>' : ''; ?></b>
                                <?php else: ?>
                                    <input type="checkbox" aria-describedby="label_64" class="form-checkbox" id="input_64_1"
                                        name="q64_name64[]" value="Billing">
                                    <label id="label_input_64_1" for="input_64_1"> Billing </label>
                                <?php endif; ?>
                            </span>
                            <span class="form-checkbox-item" style="clear:left">
                                <span class="dragger-item"></span>
                                <?php if (!empty($_POST['q64_name64'] )): ?>
                                    <b><?php echo (in_array('Updates', $_POST['q64_name64'])) ? '<li>Updates</li>' : ''; ?></b>
                                <?php else: ?>
                                    <input type="checkbox" aria-describedby="label_64" class="form-checkbox" id="input_64_2"
                                        name="q64_name64[]" value="Updates">
                                    <label id="label_input_64_2" for="input_64_2"> Updates </label>
                                <?php endif; ?>
                            </span>
                            <span class="form-checkbox-item formCheckboxOther">
                                <?php if (!empty($_POST['q64_name64']['other']) ): ?>
                                    <b><?php echo '<li>'.$_POST['q64_name64']['other']; ?></b>
                                <?php else: ?>
                                    <input type="checkbox" class="form-checkbox-other form-checkbox"
                                        name="q64_name64[other]" id="other_64" value="other" tabindex="0" aria-label="Other">
                                    <label id="label_other_64" style="text-indent:0" for="other_64"> Other </label>
                                <?php endif; ?>
                                <span id="other_64_input" class="other-input-container is-none">
                                    <?php if (!empty($_POST['q64_name64']['other'])): ?>
                                        <b><?php echo '(' . $_POST['q64_name64']['other'] . ').</li>'; ?></b>
                                    <?php else: ?>
                                        <input type="text" class="form-checkbox-other-input form-textbox"
                                            name="q64_name64[other]" data-otherhint="Other" size="15" id="input_64"
                                            data-placeholder="Please type another option here"
                                            placeholder="Please type another option here">
                                    <?php endif; ?>
                                </span>
                            </span>
                            <?php echo (!empty($_POST['q64_name64'])) ? '</ol>' : ''; ?>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_text" id="id_65">
                    <div id="cid_65" class="form-input-wide" data-layout="full">
                        <div id="text_65" class="form-html" data-component="text" tabindex="0">
                            <p>This authorization shall remain in effect until the date below or no longer than 6 months
                                from now:</p>
                        </div>
                    </div>
                </li>
                <li class="form-line jf-required" data-type="control_datetime" id="id_66">
                    <label class="form-label form-label-top form-label-auto" id="label_66" for="lite_mode_66">
                        Date
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_66" class="form-input-wide jf-required" data-layout="half">
                        <div data-wrapper-react="true">
                            <div style="display:none">
                                <span class="form-sub-label-container" style="vertical-align:top">
                                    <input type="tel" class="form-textbox validate[required, limitDate]" id="month_66"
                                        name="q66_date[month]" size="2" data-maxlength="2" data-age="" maxlength="2"
                                        value="" required="" autocomplete="section-input_66 off"
                                        aria-labelledby="label_66 sublabel_66_month" inputmode="numeric">
                                    <span class="date-separate" aria-hidden="true">
                                        &nbsp;-
                                    </span>
                                    <label class="form-sub-label" for="month_66" id="sublabel_66_month"
                                        style="min-height:13px" aria-hidden="false"> Month </label>
                                </span>
                                <span class="form-sub-label-container" style="vertical-align:top">
                                    <input type="tel" class="form-textbox validate[required, limitDate]" id="day_66"
                                        name="q66_date[day]" size="2" data-maxlength="2" data-age="" maxlength="2"
                                        value="" required="" autocomplete="section-input_66 off"
                                        aria-labelledby="label_66 sublabel_66_day" inputmode="numeric">
                                    <span class="date-separate" aria-hidden="true">
                                        &nbsp;-
                                    </span>
                                    <label class="form-sub-label" for="day_66" id="sublabel_66_day"
                                        style="min-height:13px" aria-hidden="false"> Day </label>
                                </span>
                                <span class="form-sub-label-container" style="vertical-align:top">
                                    <input type="tel" class="form-textbox validate[required, limitDate]" id="year_66"
                                        name="q66_date[year]" size="4" data-maxlength="4" data-age="" maxlength="4"
                                        value="" required="" autocomplete="section-input_66 off"
                                        aria-labelledby="label_66 sublabel_66_year">
                                    <label class="form-sub-label" for="year_66" id="sublabel_66_year"
                                        style="min-height:13px" aria-hidden="false"> Year </label>
                                </span>
                            </div>
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <?php if (!empty($_POST['q66_date'])): ?>
                                    <b><?php echo $_POST['q66_date']['month'] . '-' . $_POST['q66_date']['day'] . '-' . $_POST['q66_date']['year']; ?></b>
                                <?php else: ?>
                                    <input type="text" class="form-textbox validate[required, limitDate, validateLiteDate]"
                                        id="lite_mode_66" size="12" data-maxlength="12" data-age="" value="" required=""
                                        data-format="mmddyyyy" data-seperator="-" placeholder="MM-DD-YYYY"
                                        autocomplete="section-input_66 off" aria-labelledby="label_66 sublabel_66_litemode"
                                        inputmode="numeric">
                                    <img class=" newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date"
                                        id="input_66_pick" src="./img/calendar.png" data-component="datetime"
                                        aria-hidden="true" data-allow-time="No" data-version="v2">
                                    <label class="form-sub-label" for="lite_mode_66" id="sublabel_66_litemode"
                                        style="min-height:13px" aria-hidden="false"> Date </label>
                                <?php endif; ?>       
                            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_text" id="id_67">
                    <div id="cid_67" class="form-input-wide" data-layout="full">
                        <div id="text_67" class="form-html" data-component="text" tabindex="0">
                            <p>I understand that I have the right to revoke this authorization, in writing, at any time
                                by sending such written notification to The Nicholls Group office address, as indicated
                                above. However, my revocation will not be effective to the extent of any action already
                                taken in reliance on the authorization. I understand that my clinician may not condition
                                psychological services upon my signing an authorization unless the psychological
                                services are provided to me for the purpose of creating health information for a third
                                party. I understand that information used or disclosed pursuant to the authorization may
                                be subject to re-disclosure by the recipient of my information and therefore, it is no
                                longer protected by the HIPAA Privacy Rule.</p>
                            <p>My name printed below serves as my legal signature.</p>
                        </div>
                    </div>
                </li>
                <li class="form-line jf-required" data-type="control_signature" id="id_68">
                    <label class="form-label form-label-top form-label-auto" id="label_68" for="input_68">
                        Your Signature
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_68" class="form-input-wide jf-required" data-layout="half">
                        <div data-wrapper-react="true">
                            <div id="signature_pad_68" class="signature-pad-wrapper" style="width:312px;height:116px">
                                <div data-wrapper-react="true">

                                </div>
                                <div class="signature-line signature-wrapper signature-placeholder"
                                    data-component="signature" style="width:312px;height:116px">
                                    <div id="sig_pad_68" data-width="310" data-height="114" data-id="68"
                                        data-required="true" class="pad validate[required]" aria-labelledby="label_68"
                                        style="width: 310px; height: 114px;">
                                        <div
                                            style="padding:0; margin:0;width: 100%; height: 0; -ms-touch-action: none; touch-action: none;margin-top:-1em; margin-bottom:1em">
                                        </div><canvas class="jSignature"
                                            style="margin: 0px; padding: 0px; height: 114px; width: 310px; touch-action: none;"
                                            width="308" height="114" role="application" aria-label="E-Signature Field"
                                            tabindex="0"></canvas>
                                        <div
                                            style="padding:0; margin:0;width: 100%; height: 0; -ms-touch-action: none; touch-action: none;margin-top:-1.5em; margin-bottom:1.5em; position: relative;">
                                        </div>
                                    </div>
                                    <input type="hidden" name="q68_yourSignature" class="output4" id="input_68">
                                </div>
                                <span class="clear-pad-btn clear-pad" role="button" tabindex="0">
                                    Clear
                                </span>
                            </div>
                            <div data-wrapper-react="true">
                                <script type="text/javascript">
                                    window.signatureForm = true
                                </script>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-1 jf-required" data-type="control_datetime" id="id_69">
                    <label class="form-label form-label-top" id="label_69" for="lite_mode_69">
                        Date
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_69" class="form-input-wide jf-required" data-layout="half">
                        <div data-wrapper-react="true">
                            <div style="display:none">
                                <span class="form-sub-label-container" style="vertical-align:top">
                                    <input type="tel" class="form-textbox validate[required, limitDate]" id="month_69"
                                        name="q69_date69[month]" size="2" data-maxlength="2" data-age="" maxlength="2"
                                        value="" required="" autocomplete="section-input_69 off"
                                        aria-labelledby="label_69 sublabel_69_month" inputmode="numeric">
                                    <span class="date-separate" aria-hidden="true">
                                        &nbsp;-
                                    </span>
                                    <label class="form-sub-label" for="month_69" id="sublabel_69_month"
                                        style="min-height:13px" aria-hidden="false"> Month </label>
                                </span>
                                <span class="form-sub-label-container" style="vertical-align:top">
                                    <input type="tel" class="form-textbox validate[required, limitDate]" id="day_69"
                                        name="q69_date69[day]" size="2" data-maxlength="2" data-age="" maxlength="2"
                                        value="" required="" autocomplete="section-input_69 off"
                                        aria-labelledby="label_69 sublabel_69_day" inputmode="numeric">
                                    <span class="date-separate" aria-hidden="true">
                                        &nbsp;-
                                    </span>
                                    <label class="form-sub-label" for="day_69" id="sublabel_69_day"
                                        style="min-height:13px" aria-hidden="false"> Day </label>
                                </span>
                                <span class="form-sub-label-container" style="vertical-align:top">
                                    <input type="tel" class="form-textbox validate[required, limitDate]" id="year_69"
                                        name="q69_date69[year]" size="4" data-maxlength="4" data-age="" maxlength="4"
                                        value="" required="" autocomplete="section-input_69 off"
                                        aria-labelledby="label_69 sublabel_69_year">
                                    <label class="form-sub-label" for="year_69" id="sublabel_69_year"
                                        style="min-height:13px" aria-hidden="false"> Year </label>
                                </span>
                            </div>
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <?php if (!empty($_POST['q69_date69'])): ?>
                                    <b><?php echo $_POST['q69_date69']['month'] . '-' . $_POST['q69_date69']['day'] . '-' . $_POST['q69_date69']['year']; ?></b>
                                <?php else: ?>
                                    <input type="text" class="form-textbox validate[required, limitDate, validateLiteDate]"
                                        id="lite_mode_69" size="12" data-maxlength="12" data-age="" value="" required=""
                                        data-format="mmddyyyy" data-seperator="-" placeholder="MM-DD-YYYY"
                                        autocomplete="section-input_69 off" aria-labelledby="label_69 sublabel_69_litemode"
                                        inputmode="numeric">
                                    <img class=" newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date"
                                        id="input_69_pick" src="./img/calendar.png" data-component="datetime"
                                        aria-hidden="true" data-allow-time="No" data-version="v2">
                                    <label class="form-sub-label" for="lite_mode_69" id="sublabel_69_litemode"
                                        style="min-height:13px" aria-hidden="false"> Date </label>
                                <?php endif; ?>   
                            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-2 jf-required" data-type="control_textbox" id="id_70">
                    <label class="form-label form-label-top" id="label_70" for="input_70">
                        Relationship to Patient/Client:
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_70" class="form-input-wide jf-required" data-layout="half">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <?php if (!empty($_POST['q70_relationshipTo70'])): ?>
                                <b><?php echo $_POST['q70_relationshipTo70']; ?></b>
                            <?php else: ?>
                                <input type="text" id="input_70" name="q70_relationshipTo70" data-type="input-textbox"
                                    class="form-textbox validate[required]" data-defaultvalue="" style="width:310px"
                                    size="310" value="" data-component="textbox"
                                    aria-labelledby="label_70 sublabel_input_70" required="">
                                <label class="form-sub-label" for="input_70" id="sublabel_input_70" style="min-height:13px"
                                    aria-hidden="false"> Put "self" if you are signing your own form </label>
                            <?php endif; ?>   
                        </span>
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

$form_id = 3;
require_once 'form-controller.php';
?>
