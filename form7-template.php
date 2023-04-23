<?php
/*
* Template Name: Form7 template
* Template Post Type: page
*/

ob_start();
get_header();
?>

<form class="jotform-form" action="" method="post" name="form_212746288836165" id="212746288836165"
        accept-charset="utf-8" autocomplete="on" novalidate="true">
        <input type="hidden" name="formID" value="212746288836165">
        <input type="hidden" id="JWTContainer" value="">
        <input type="hidden" id="cardinalOrderNumber" value="">
        <div role="main" class="form-all">
            <div class="formLogoWrapper Left">
                <!-- <img loading="lazy" class="formLogoImg" src="" height="60" width="60"> - logo img -->
            </div>
            <ul class="form-section page-section">
                <li id="cid_1" class="form-input-wide" data-type="control_head">
                    <div class="form-header-group  header-large">
                        <div class="header-text httac htvam">
                            <h1 id="header_1" class="form-header" data-component="header">
                                Patient information For The Nicholls Group
                            </h1>
                        </div>
                    </div>
                </li>
                <li class="form-line always-hidden" data-type="control_textbox" id="id_49">
                    <label class="form-label form-label-top form-label-auto" id="label_49" for="input_49"> Exchange of
                        Records/Release of Information </label>
                    <div id="cid_49" class="form-input-wide always-hidden" data-layout="half">
                        <input type="text" id="input_49" name="q49_exchangeOf49" data-type="input-textbox"
                            class="form-textbox" data-defaultvalue="Exchange of Records Form - EN" style="width:310px"
                            size="310" value="Exchange of Records Form - EN" data-component="textbox"
                            aria-labelledby="label_49">
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
                <li class="form-line jf-required" data-type="control_textbox" id="id_5">
                    <label class="form-label form-label-top" id="label_5" for="input_5">
                        Name of Patient (Patient's First and Last Name)
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_5" class="form-input-wide jf-required" data-layout="half">
                        <input type="text" id="input_5" name="q5_patientFull" data-type="input-textbox"
                            class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310"
                            value="" data-component="textbox" aria-labelledby="label_5" required="">
                    </div>
                </li>

                <li class="form-line jf-required" data-type="control_email" id="id_52">
                    <label class="form-label form-label-top" id="label_52" for="input_52">
                        Email
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_52" class="form-input-wide jf-required" data-layout="half">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input type="email" id="input_52" name="q52_email"
                                class="form-textbox validate[required, Email]" data-defaultvalue="" style="width:310px"
                                size="310" value="" data-component="email" aria-labelledby="label_52 sublabel_input_52"
                                required="">
                            <label class="form-sub-label" for="input_52" id="sublabel_input_52" style="min-height:13px"
                                aria-hidden="false"> example@example.com </label>
                        </span>
                    </div>
                </li>

                <li class="form-line form-line-column form-col-2 jf-required" data-type="control_datetime" id="id_6">
                    <label class="form-label form-label-top" id="label_6" for="lite_mode_6">Patient's Date of Birth<span
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
                                class="form-sub-label-container" style="vertical-align:top"><input type="text"
                                    class="form-textbox validate[required, limitDate, validateLiteDate]"
                                    id="lite_mode_6" size="12" data-maxlength="12" data-age="" value="" required=""
                                    data-format="mmddyyyy" data-seperator="-" placeholder="MM-DD-YYYY"
                                    autocomplete="section-input_6 off" aria-labelledby="label_6 sublabel_6_litemode"
                                    inputmode="numeric"><img class=" newDefaultTheme-dateIcon icon-liteMode"
                                    alt="Pick a Date" id="input_6_pick" src="./Intake Form - EN_files/calendar.png"
                                    data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v2">
                                <label class="form-sub-label" for="lite_mode_6" id="sublabel_6_litemode"
                                    style="min-height:13px" aria-hidden="false">Date</label></span>
                        </div>
                    </div>
                </li>

                <li class="form-line jf-required" data-type="control_textbox" id="id_8">
                    <label class="form-label form-label-top" id="label_8" for="input_8">
                        Patient's Age
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_8" class="form-input-wide jf-required" data-layout="half">
                        <input type="text" id="input_8" name="q8_patientFull" data-type="input-textbox"
                            class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310"
                            value="" data-component="textbox" aria-labelledby="label_8" required="">
                    </div>
                </li>

                <li class="form-line" data-type="control_textbox" id="id_7">
                    <label class="form-label form-label-top" id="label_7" for="input_7">
                        Name of individual filling out this form and relationship to patient:
                    </label>
                    <div id="cid_7" class="form-input-wide" data-layout="half">
                        <input type="text" id="input_7" name="q7_yourDoctors7" data-type="input-textbox"
                            class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value=""
                            data-component="textbox" aria-labelledby="label_7" required="">
                    </div>
                </li>

                <li class="form-line" data-type="control_divider" id="id_62">
                    <div id="cid_62" class="form-input-wide" data-layout="full">
                        <div class="divider" aria-label="Divider" data-component="divider"
                            style="border-bottom-width:10px;border-bottom-style:solid;border-color:#e6e6e6;height:10px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px">
                        </div>
                    </div>
                </li>

                <li class="form-line jf-required" data-type="control_checkbox" id="id_64">
                    <label class="form-label form-label-top" id="label_64" for="input_64">Patient's Gender
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_64" class="form-input-wide jf-required" data-layout="full">
                        <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_64"
                            data-component="checkbox">
                            <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_64" class="form-checkbox" id="input_64_0"
                                    name="q64_name64[]" value="Treatment Planning" required>
                                <label id="label_input_64_0" for="input_64_0">Female</label>
                            </span>
                            <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_64" class="form-checkbox" id="input_64_1"
                                    name="q64_name64[]" value="Treatment Planning" required>
                                <label id="label_input_64_1" for="input_64_1">Male</label>
                            </span>
                            <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_64" class="form-checkbox" id="input_64_2"
                                    name="q64_name64[]" value="Treatment Planning" required>
                                <label id="label_input_64_2" for="input_64_2">Prefer not to say</label>
                            </span>
                            <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_64" class="form-checkbox" id="input_64_3"
                                    name="q64_name64[]" value="Treatment Planning" required>
                                <label id="label_input_64_3" for="input_64_3">Non-binary/Third Gender</label>
                            </span>
                            <span class="form-checkbox-item formCheckboxOther">
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
                            </span>
                        </div>
                    </div>
                </li>

                <li class="form-line" data-type="control_textbox" id="id_9">
                    <label class="form-label form-label-top" id="label_9" for="input_9">
                        Parent/Guardian's First and Last names(BOTH biological parents please, if adopted please note):
                    </label>
                    <div id="cid_9" class="form-input-wide" data-layout="half">
                        <input type="text" id="input_9" name="q9_yourDoctors9" data-type="input-textbox"
                            class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value=""
                            data-component="textbox" aria-labelledby="label_9" required="">
                    </div>
                    <label class="form-sub-label" for="lite_mode_9" id="sublabel_9_litemode" style="min-height:13px"
                        aria-hidden="false">If you are a step-parent, or this is a foster child, please let us know by
                        stating that here. If the patient is an adult this may be left blank. Full First and Last Names
                        Please.</label>
                </li>

                <li class="form-line jf-required" data-type="control_textbox" id="id_10">
                    <label class="form-label form-label-top" id="label_10" for="input_10">
                        Adult Patient or Parent/Guardian's Email Address (if you are filling this out for an Adult
                        Patient over 18 years old then we must have the Adult patient's email here):
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_10" class="form-input-wide jf-required" data-layout="half">
                        <input type="text" id="input_10" name="q10_patientFull" data-type="input-textbox"
                            class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310"
                            value="" data-component="textbox" aria-labelledby="label_10" required="">
                    </div>
                </li>

                <li class="form-line" data-type="control_textbox" id="id_11">
                    <label class="form-label form-label-top" id="label_11" for="input_11">
                        Additional Parent or Guardian's Email Address (please note relationship here-i.e. Mother,
                        father, grandparent, etc.)
                    </label>
                    <div id="cid_11" class="form-input-wide" data-layout="half">
                        <input type="text" id="input_11" name="q11_yourDoctors11" data-type="input-textbox"
                            class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value=""
                            data-component="textbox" aria-labelledby="label_11" required="">
                    </div>
                </li>

                <li class="form-line jf-required" data-type="control_textbox" id="id_12">
                    <label class="form-label form-label-top" id="label_12" for="input_12">
                        Patient or Guardian's Phone Number with area code
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_12" class="form-input-wide jf-required" data-layout="half">
                        <input type="text" id="input_12" name="q12_patientFull" data-type="input-textbox"
                            class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310"
                            value="" data-component="textbox" aria-labelledby="label_12" required="">
                    </div>
                    <label class="form-sub-label" for="lite_mode_12" id="sublabel_12_litemode" style="min-height:13px"
                        aria-hidden="false">Preferably a phone number that can receive text message reminders for
                        appointments
                    </label>
                </li>

                <li class="form-line" data-type="control_textbox" id="id_13">
                    <label class="form-label form-label-top" id="label_13" for="input_13">
                        Second Patient or Guardian's Phone Number with area code
                    </label>
                    <div id="cid_13" class="form-input-wide" data-layout="half">
                        <input type="text" id="input_13" name="q13_yourDoctors13" data-type="input-textbox"
                            class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value=""
                            data-component="textbox" aria-labelledby="label_13" required="">
                    </div>
                    <label class="form-sub-label" for="lite_mode_13" id="sublabel_13_litemode" style="min-height:13px"
                        aria-hidden="false">Preferably a phone number that can receive text message reminders for
                        appointments
                    </label>
                </li>

                <li class="form-line" data-type="control_textbox" id="id_14">
                    <label class="form-label form-label-top" id="label_14" for="input_14">
                        Additional Phone Number
                    </label>
                    <div id="cid_14" class="form-input-wide" data-layout="half">
                        <input type="text" id="input_14" name="q14_yourDoctors14" data-type="input-textbox"
                            class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value=""
                            data-component="textbox" aria-labelledby="label_14" required="">
                    </div>
                    <label class="form-sub-label" for="lite_mode_14" id="sublabel_14_litemode" style="min-height:13px"
                        aria-hidden="false">Any additional phone number that we may need to reach you
                    </label>
                </li>

                <li class="form-line jf-required" data-type="control_checkbox" id="id_65">
                    <label class="form-label form-label-top" id="label_65" for="input_65">If Patient is an Adult, please
                        choose one:
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_65" class="form-input-wide jf-required" data-layout="full">
                        <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_65"
                            data-component="checkbox">
                            <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_65" class="form-checkbox" id="input_65_0"
                                    name="q65_name65[]" value="Treatment Planning" required>
                                <label id="label_input_65_0" for="input_65_0">Adult- over 18 years old</label>
                            </span>
                            <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_65" class="form-checkbox" id="input_65_2"
                                    name="q65_name65[]" value="Treatment Planning" required>
                                <label id="label_input_65_2" for="input_65_2">Other Adult patient
                                </label>
                            </span>
                            <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_65" class="form-checkbox" id="input_65_3"
                                    name="q65_name65[]" value="Treatment Planning" required>
                                <label id="label_input_65_3" for="input_65_3">Child (go to next question)
                                </label>
                            </span>
                            <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_65" class="form-checkbox" id="input_65_1"
                                    name="q65_name65[]" value="Treatment Planning" required>
                                <label id="label_input_65_1" for="input_65_1">Legal Decision Maker for an Adult Patient
                                    over 18 years old (Documentation Required)</label>
                            </span>
                        </div>
                    </div>
                </li>

                <li class="form-line jf-required" data-type="control_checkbox" id="id_66">
                    <label class="form-label form-label-top" id="label_66" for="input_66">If patient is a child, please
                        choose custody status:
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_66" class="form-input-wide jf-required" data-layout="full">
                        <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_66"
                            data-component="checkbox">
                            <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_66" class="form-checkbox" id="input_66_0"
                                    name="q66_name66[]" value="Treatment Planning" required>
                                <label id="label_input_66_0" for="input_66_0">Married with Joint Custody
                                </label>
                            </span>
                            <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_66" class="form-checkbox" id="input_66_1"
                                    name="q66_name66[]" value="Treatment Planning" required>
                                <label id="label_input_66_1" for="input_66_1">Partners (not married) with Joint Custody
                                </label>
                            </span>
                            <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_66" class="form-checkbox" id="input_66_2"
                                    name="q66_name66[]" value="Treatment Planning" required>
                                <label id="label_input_66_2" for="input_66_2">Same Sex Married with Joint Custody
                                </label>
                            </span>
                            <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_66" class="form-checkbox" id="input_66_3"
                                    name="q66_name66[]" value="Treatment Planning" required>
                                <label id="label_input_66_3" for="input_66_3">Adoptive Parents with Joint Custody
                                </label>
                            </span>
                            <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_66" class="form-checkbox" id="input_66_4"
                                    name="q66_name66[]" value="Treatment Planning" required>
                                <label id="label_input_66_4" for="input_66_4">Divorced with Joint Custody (must have
                                    Documentation of Divorce Agreement)
                                </label>
                            </span>
                            <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_66" class="form-checkbox" id="input_66_5"
                                    name="q66_name66[]" value="Treatment Planning" required>
                                <label id="label_input_66_5" for="input_66_5">Divorced with Sole Custody (Documentation
                                    Required)
                                </label>
                            </span>
                            <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_66" class="form-checkbox" id="input_66_6"
                                    name="q66_name66[]" value="Treatment Planning" required>
                                <label id="label_input_66_6" for="input_66_6">Separated, with joint custody
                                </label>
                            </span>
                            <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_66" class="form-checkbox" id="input_66_7"
                                    name="q66_name66[]" value="Treatment Planning" required>
                                <label id="label_input_66_7" for="input_66_7">Separated, status not decided (in court)
                                </label>
                            </span>
                            <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_66" class="form-checkbox" id="input_66_8"
                                    name="q66_name66[]" value="Treatment Planning" required>
                                <label id="label_input_66_8" for="input_66_8">Adult, go to next question...
                                </label>
                            </span>
                            <span class="form-checkbox-item formCheckboxOther">
                                <input type="checkbox" class="form-checkbox-other form-checkbox"
                                    name="q66_name66[other]" id="other_66" value="other" tabindex="0"
                                    aria-label="Other">
                                <label id="label_other_66" style="text-indent:0" for="other_66"> Other </label>
                                <span id="other_66_input" class="other-input-container is-none">
                                    <input type="text" class="form-checkbox-other-input form-textbox"
                                        name="q66_name66[other]" data-otherhint="Other" size="15" id="input_66"
                                        data-placeholder="Please type another option here"
                                        placeholder="Please type another option here">
                                </span>
                            </span>
                        </div>
                    </div>
                </li>

                <li class="form-line" data-type="control_textbox" id="id_15">
                    <label class="form-label form-label-top" id="label_15" for="input_15">
                        School That Patient Attends (if not in school put N/A)
                    </label>
                    <div id="cid_15" class="form-input-wide" data-layout="half">
                        <input type="text" id="input_15" name="q15_yourDoctors15" data-type="input-textbox"
                            class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value=""
                            data-component="textbox" aria-labelledby="label_15" required="">
                    </div>
                </li>

                <li class="form-line" data-type="control_textbox" id="id_16">
                    <label class="form-label form-label-top" id="label_16" for="input_16">
                        Grade Level - enter n/a if not in school
                    </label>
                    <div id="cid_16" class="form-input-wide" data-layout="half">
                        <input type="text" id="input_16" name="q16_yourDoctors16" data-type="input-textbox"
                            class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value=""
                            data-component="textbox" aria-labelledby="label_16" required="">
                    </div>
                </li>

                <li class="form-line jf-required" data-type="control_textbox" id="id_17">
                    <label class="form-label form-label-top" id="label_17" for="input_17">
                        Patient's Home Street Address
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_17" class="form-input-wide jf-required" data-layout="half">
                        <input type="text" id="input_17" name="q17_patientFull" data-type="input-textbox"
                            class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310"
                            value="" data-component="textbox" aria-labelledby="label_17" required="">
                    </div>
                </li>

                <li class="form-line jf-required" data-type="control_textbox" id="id_18">
                    <label class="form-label form-label-top" id="label_18" for="input_18">
                        Patient's CITY and STATE
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_18" class="form-input-wide jf-required" data-layout="half">
                        <input type="text" id="input_18" name="q18_patientFull" data-type="input-textbox"
                            class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310"
                            value="" data-component="textbox" aria-labelledby="label_18" required="">
                    </div>
                </li>

                <li class="form-line jf-required" data-type="control_textbox" id="id_19">
                    <label class="form-label form-label-top" id="label_19" for="input_19">
                        Patient's Zip Code
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_19" class="form-input-wide jf-required" data-layout="half">
                        <input type="text" id="input_19" name="q19_patientFull" data-type="input-textbox"
                            class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310"
                            value="" data-component="textbox" aria-labelledby="label_19" required="">
                    </div>
                </li>

                <li class="form-line" data-type="control_matrix" id="id_42">
                    <label class="form-label form-label-top form-label-auto" id="label_42" for="input_42"> How were you
                        referred to The Nicholls Group?
                    </label>
                    <div id="cid_42" class="form-input-wide" data-layout="full">
                        <table summary="" aria-labelledby="label_42" cellpadding="4" cellspacing="0"
                            class="form-matrix-table" data-component="matrix">
                            <tbody>
                                <tr class="form-matrix-tr form-matrix-header-tr">
                                    <th class="form-matrix-th" style="border:none">
                                        &nbsp;
                                    </th>
                                    <th scope="col"
                                        class="form-matrix-headers form-matrix-column-headers form-matrix-column_0"
                                        style="width:110px">
                                        <label id="label_42_col_0"> A doctor or pediatrician</label>
                                    </th>
                                    <th scope="col"
                                        class="form-matrix-headers form-matrix-column-headers form-matrix-column_1"
                                        style="width:110px">
                                        <label id="label_42_col_1">A Friend </label>
                                    </th>
                                    <th scope="col"
                                        class="form-matrix-headers form-matrix-column-headers form-matrix-column_2"
                                        style="width:110px">
                                        <label id="label_42_col_2"> Online Search </label>
                                    </th>
                                    <th scope="col"
                                        class="form-matrix-headers form-matrix-column-headers form-matrix-column_3"
                                        style="width:110px">
                                        <label id="label_42_col_3">Other</label>
                                    </th>
                                </tr>
                                <tr class="form-matrix-tr form-matrix-value-tr"
                                    aria-labelledby="label_42 label_42_row_0">
                                    <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                        <label id="label_42_row_0"> Referral Source:
                                        </label>
                                    </th>
                                    <td class="form-matrix-values">
                                        <input type="radio" id="input_42_0_0" class="form-radio" name="q42_reading[0]"
                                            value="Exceptional" aria-labelledby="label_42_col_0 label_42_row_0">
                                        <label for="input_42_0_0" class="matrix-choice-label matrix-radio-label">
                                        </label>
                                    </td>
                                    <td class="form-matrix-values">
                                        <input type="radio" id="input_42_0_1" class="form-radio" name="q42_reading[0]"
                                            value="Above Average" aria-labelledby="label_42_col_1 label_42_row_0">
                                        <label for="input_42_0_1" class="matrix-choice-label matrix-radio-label">
                                        </label>
                                    </td>
                                    <td class="form-matrix-values">
                                        <input type="radio" id="input_42_0_2" class="form-radio" name="q42_reading[0]"
                                            value="Average" aria-labelledby="label_42_col_2 label_42_row_0">
                                        <label for="input_42_0_2" class="matrix-choice-label matrix-radio-label">
                                        </label>
                                    </td>
                                    <td class="form-matrix-values">
                                        <input type="radio" id="input_42_0_3" class="form-radio" name="q42_reading[0]"
                                            value="Below Average" aria-labelledby="label_42_col_3 label_42_row_0">
                                        <label for="input_42_0_3" class="matrix-choice-label matrix-radio-label">
                                        </label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </li>

                <li class="form-line" data-type="control_textbox" id="id_30">
                    <label class="form-label form-label-top" id="label_30" for="input_30">
                        Name of the person who referred you to The Nicholls Grou30
                    </label>
                    <div id="cid_30" class="form-input-wide" data-layout="half">
                        <input type="text" id="input_30" name="q30_patientFull" data-type="input-textbox"
                            class="form-textbox" data-defaultvalue="" style="width:310px" size="310"
                            value="" data-component="textbox" aria-labelledby="label_30" required="">
                    </div>
                </li>

                <li class="form-line" data-type="control_matrix" id="id_41">
                    <label class="form-label form-label-top form-label-auto" id="label_41" for="input_41"> Were you
                        referred to any Doctor in particular at The Nicholls Group?
                    </label>
                    <div id="cid_41" class="form-input-wide" data-layout="full">
                        <table summary="" aria-labelledby="label_41" cellpadding="4" cellspacing="0"
                            class="form-matrix-table" data-component="matrix">
                            <tbody>
                                <tr class="form-matrix-tr form-matrix-header-tr">
                                    <th class="form-matrix-th" style="border:none">
                                        &nbsp;
                                    </th>
                                    <th scope="col"
                                        class="form-matrix-headers form-matrix-column-headers form-matrix-column_0"
                                        style="width:110px">
                                        <label id="label_41_col_0"> Dr. Christopher J. Nicholls </label>
                                    </th>
                                    <th scope="col"
                                        class="form-matrix-headers form-matrix-column-headers form-matrix-column_1"
                                        style="width:110px">
                                        <label id="label_41_col_1">Dr. Valerie Hoffman </label>
                                    </th>
                                    <th scope="col"
                                        class="form-matrix-headers form-matrix-column-headers form-matrix-column_2"
                                        style="width:110px">
                                        <label id="label_41_col_2"> Dr. Katherine Sanchez </label>
                                    </th>
                                    <th scope="col"
                                        class="form-matrix-headers form-matrix-column-headers form-matrix-column_3"
                                        style="width:110px">
                                        <label id="label_41_col_3"> Dr. Chelsea Matteson </label>
                                    </th>
                                    <th scope="col"
                                        class="form-matrix-headers form-matrix-column-headers form-matrix-column_4"
                                        style="width:110px">
                                        <label id="label_41_col_4"> Dr. Sally Logerquist </label>
                                    </th>
                                    <th scope="col"
                                        class="form-matrix-headers form-matrix-column-headers form-matrix-column_4"
                                        style="width:110px">
                                        <label id="label_41_col_4"> Not any particular Doctor
                                        </label>
                                    </th>
                                </tr>
                                <tr class="form-matrix-tr form-matrix-value-tr"
                                    aria-labelledby="label_41 label_41_row_0">
                                    <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                        <label id="label_41_row_0"> Provider </label>
                                    </th>
                                    <td class="form-matrix-values">
                                        <input type="radio" id="input_41_0_0" class="form-radio" name="q41_reading[0]"
                                            value="Exceptional" aria-labelledby="label_41_col_0 label_41_row_0">
                                        <label for="input_41_0_0" class="matrix-choice-label matrix-radio-label">
                                        </label>
                                    </td>
                                    <td class="form-matrix-values">
                                        <input type="radio" id="input_41_0_1" class="form-radio" name="q41_reading[0]"
                                            value="Above Average" aria-labelledby="label_41_col_1 label_41_row_0">
                                        <label for="input_41_0_1" class="matrix-choice-label matrix-radio-label">
                                        </label>
                                    </td>
                                    <td class="form-matrix-values">
                                        <input type="radio" id="input_41_0_2" class="form-radio" name="q41_reading[0]"
                                            value="Average" aria-labelledby="label_41_col_2 label_41_row_0">
                                        <label for="input_41_0_2" class="matrix-choice-label matrix-radio-label">
                                        </label>
                                    </td>
                                    <td class="form-matrix-values">
                                        <input type="radio" id="input_41_0_3" class="form-radio" name="q41_reading[0]"
                                            value="Below Average" aria-labelledby="label_41_col_3 label_41_row_0">
                                        <label for="input_41_0_3" class="matrix-choice-label matrix-radio-label">
                                        </label>
                                    </td>
                                    <td class="form-matrix-values">
                                        <input type="radio" id="input_41_0_4" class="form-radio" name="q41_reading[0]"
                                            value="Significantly Below" aria-labelledby="label_41_col_4 label_41_row_0">
                                        <label for="input_41_0_4" class="matrix-choice-label matrix-radio-label">
                                        </label>
                                    </td>
                                    <td class="form-matrix-values">
                                        <input type="radio" id="input_41_0_5" class="form-radio" name="q41_reading[0]"
                                            value="Significantly Below" aria-labelledby="label_41_col_5 label_41_row_0">
                                        <label for="input_41_0_5" class="matrix-choice-label matrix-radio-label">
                                        </label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </li>

                <li class="form-line jf-required" data-type="control_textbox" id="id_20">
                    <label class="form-label form-label-top" id="label_20" for="input_20">
                        What concerns have led you to our office?
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_20" class="form-input-wide jf-required" data-layout="half">
                        <input type="text" id="input_20" name="q20_patientFull" data-type="input-textbox"
                            class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310"
                            value="" data-component="textbox" aria-labelledby="label_20" required="">
                    </div>
                    <label class="form-sub-label" for="lite_mode_20" id="sublabel_20_litemode" style="min-height:13px"
                        aria-hidden="false">Please be brief, but explain your concerns... you will be submitting more
                        detailed information in person and on other forms.
                    </label>
                </li>

                <li class="form-line" data-type="control_checkbox" id="id_69">
                    <label class="form-label form-label-top" id="label_69" for="input_69">Are you looking for an
                        EVALUATION or THERAPY

                    </label>
                    <div id="cid_69" class="form-input-wide" data-layout="full">
                        <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_69"
                            data-component="checkbox">
                            <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_69" class="form-checkbox" id="input_69_0"
                                    name="q69_name69[]" value="Treatment Planning">
                                <label id="label_input_69_0" for="input_69_0">EVALUATION (Typically an Intake
                                    Appointment, a Testing Appointment and then a Feedback Appointment)
                                </label>
                            </span>
                            <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_69" class="form-checkbox" id="input_69_1"
                                    name="q69_name69[]" value="Treatment Planning">
                                <label id="label_input_69_1" for="input_69_1">THERAPY (consisting of an initial meeting
                                    followed by ongoing weekly meetings with the doctor, resident or graduate student)
                                </label>
                            </span>
                            <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_69" class="form-checkbox" id="input_69_2"
                                    name="q69_name69[]" value="Treatment Planning">
                                <label id="label_input_69_2" for="input_69_2">NOT SURE (we can discuss your need when we
                                    call you)
                                </label>
                            </span>
                            <span class="form-checkbox-item formCheckboxOther">
                                <input type="checkbox" class="form-checkbox-other form-checkbox"
                                    name="q69_name64[other]" id="other_69" value="other" tabindex="0"
                                    aria-label="Other">
                                <label id="label_other_69" style="text-indent:0" for="other_69"> Other </label>
                                <span id="other_69_input" class="other-input-container is-none">
                                    <input type="text" class="form-checkbox-other-input form-textbox"
                                        name="q69_name69[other]" data-otherhint="Other" size="15" id="input_69"
                                        data-placeholder="Please type another option here"
                                        placeholder="Please type another option here">
                                </span>
                            </span>
                        </div>
                    </div>
                </li>

                <li class="form-line" data-type="control_textbox" id="id_21">
                    <label class="form-label form-label-top" id="label_21" for="input_21">
                        Does the patient have an existing Diagnosis or Diagnoses? If so, please list here. If not please
                        write n/a.
                    </label>
                    <div id="cid_21" class="form-input-wide" data-layout="half">
                        <input type="text" id="input_21" name="q21_patientFull" data-type="input-textbox"
                            class="form-textbox" data-defaultvalue="" style="width:310px" size="310"
                            value="" data-component="textbox" aria-labelledby="label_21" required="">
                    </div>
                </li>

                <li class="form-line" data-type="control_textbox" id="id_22">
                    <label class="form-label form-label-top" id="label_22" for="input_22">
                        When (month and year) did you receive the Diagnosis or Diagnoses and where (Doctor or facility)
                        was the evaluation performed? If not applicable, put n/a.
                    </label>
                    <div id="cid_22" class="form-input-wide" data-layout="half">
                        <input type="text" id="input_22" name="q22_patientFull" data-type="input-textbox"
                            class="form-textbox" data-defaultvalue="" style="width:310px" size="310"
                            value="" data-component="textbox" aria-labelledby="label_22" required="">
                    </div>
                </li>

                <li class="form-line" data-type="control_textbox" id="id_23">
                    <label class="form-label form-label-top" id="label_23" for="input_23">
                        Who is your Primary Care Physician or your child's Pediatrician?
                    </label>
                    <div id="cid_23" class="form-input-wide" data-layout="half">
                        <input type="text" id="input_23" name="q23_patientFull" data-type="input-textbox"
                            class="form-textbox" data-defaultvalue="" style="width:310px" size="310"
                            value="" data-component="textbox" aria-labelledby="label_23" required="">
                    </div>
                </li>

                <li class="form-line" data-type="control_checkbox" id="id_70">
                    <label class="form-label form-label-top" id="label_70" for="input_70">Are you or your child seeing
                        another mental health professional (psychologist, counselor, therapist or psychiatrist)?
                    </label>
                    <div id="cid_70" class="form-input-wide" data-layout="full">
                        <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_70"
                            data-component="checkbox">
                            <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_70" class="form-checkbox" id="input_70_0"
                                    name="q70_name70[]" value="Treatment Planning">
                                <label id="label_input_70_0" for="input_70_0">Yes
                                </label>
                            </span>
                            <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_70" class="form-checkbox" id="input_70_1"
                                    name="q70_name70[]" value="Treatment Planning">
                                <label id="label_input_70_1" for="input_70_1">In the past
                                </label>
                            </span>
                            <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_70" class="form-checkbox" id="input_70_2"
                                    name="q70_name70[]" value="Treatment Planning">
                                <label id="label_input_70_2" for="input_70_2">No
                                </label>
                            </span>
                        </div>
                    </div>
                </li>

                <li class="form-line" data-type="control_textbox" id="id_24">
                    <label class="form-label form-label-top" id="label_24" for="input_24">
                        If you answered yes or in the past above, please add the name of the mental health professional
                        here:
                    </label>
                    <div id="cid_24" class="form-input-wide" data-layout="half">
                        <input type="text" id="input_24" name="q24_patientFull" data-type="input-textbox"
                            class="form-textbox" data-defaultvalue="" style="width:310px" size="310"
                            value="" data-component="textbox" aria-labelledby="label_24" required="">
                    </div>
                </li>

                <li class="form-line" data-type="control_checkbox" id="id_71">
                    <label class="form-label form-label-top" id="label_71" for="input_71">What is the best time of day
                        for us to reach out to schedule an initial appointment for you?
                    </label>
                    <div id="cid_71" class="form-input-wide" data-layout="full">
                        <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_71"
                            data-component="checkbox">
                            <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_71" class="form-checkbox" id="input_71_0"
                                    name="q71_name71[]" value="Treatment Planning">
                                <label id="label_input_71_0" for="input_71_0">Morning
                                </label>
                            </span>
                            <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_71" class="form-checkbox" id="input_71_1"
                                    name="q71_name71[]" value="Treatment Planning">
                                <label id="label_input_71_1" for="input_71_1">Afternoon
                                </label>
                            </span>
                            <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_71" class="form-checkbox" id="input_71_2"
                                    name="q71_name71[]" value="Treatment Planning">
                                <label id="label_input_71_2" for="input_71_2">Evening
                                </label>
                            </span>
                        </div>
                    </div>
                </li>

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
                <li style="display:none">
                    Should be Empty:
                    <input type="text" name="website" value="">
                </li>
            </ul>
        </div>
        <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc"
            value="212746288836165-212746288836165">
        <input type="hidden" name="event_id" value="1681115218817_212746288836165_8rUWRAg">
    </form>

<?php
$content = ob_get_contents();
get_footer();

$form_id = 7;
require_once 'form-controller.php';
?>
