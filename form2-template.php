<?php
/*
* Template Name: Form2 template
* Template Post Type: page
*/

ob_start();
get_header();
?>

<form class="jotform-form" action="" method="post"
    name="form_212727336123046" id="212727336123046" accept-charset="utf-8" autocomplete="on" novalidate="true">
    <input type="hidden" name="formID" value="212727336123046">
    <?php if ( !empty($_POST['q22_fidgetykeepsMoving']) ): ?>
        <b><?php echo $_POST['q22_fidgetykeepsMoving']; ?></b>
    <?php else: ?>
        <input type="hidden" id="JWTContainer" value="">
    <?php endif; ?>
    <input type="hidden" id="cardinalOrderNumber" value="">
    <div role="main" class="form-all">
        <div class="formLogoWrapper Left">
            <!-- <img loading="lazy" class="formLogoImg"
                src="" height="60"
                width="60"> -->
        </div>
        <ul class="form-section page-section">
            <li id="cid_1" class="form-input-wide" data-type="control_head">
                <div class="form-header-group  header-large">
                    <div class="header-text httac htvam">
                        <h1 id="header_1" class="form-header" data-component="header">
                            Teacher Form
                        </h1>
                    </div>
                </div>
            </li>
            <li class="form-line always-hidden" data-type="control_textbox" id="id_49">
                <label class="form-label form-label-top form-label-auto" id="label_49" for="input_49"> Form Name
                </label>
                <div id="cid_49" class="form-input-wide always-hidden" data-layout="half">
                    <input type="text" id="input_49" name="q49_formName" data-type="input-textbox"
                        class="form-textbox" data-defaultvalue="Teacher Form - EN" style="width:310px" size="310"
                        value="Teacher Form - EN" data-component="textbox" aria-labelledby="label_49">
                </div>
            </li>
            <li id="cid_3" class="form-input-wide" data-type="control_head">
                <div class="form-header-group  header-default">
                    <div class="header-text httac htvam">
                        <h2 id="header_3" class="form-header" data-component="header">
                            EDUCATIONAL INFORMATION
                        </h2>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-1" data-type="control_textbox" id="id_5">
                <label class="form-label form-label-top" id="label_5" for="input_5"> Student's Name </label>
                <div id="cid_5" class="form-input-wide" data-layout="half">
                    <?php if (!empty($_POST['q5_studentsName'])): ?>
                        <b><?php echo $_POST['q5_studentsName']; ?></b>
                    <?php else: ?>
                        <input type="text" id="input_5" name="q5_studentsName" data-type="input-textbox"
                            class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value=""
                            data-component="textbox" aria-labelledby="label_5">
                    <?php endif; ?>
                </div>
            </li>
            <li class="form-line form-line-column form-col-2" data-type="control_datetime" id="id_6">
                <label class="form-label form-label-top" id="label_6" for="lite_mode_6"> Today's Date </label>
                <div id="cid_6" class="form-input-wide" data-layout="half">
                    <div data-wrapper-react="true">
                        <div style="display:none">
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="tel" class="form-textbox validate[limitDate]" id="month_6"
                                    name="q6_todaysDate[month]" size="2" data-maxlength="2" data-age=""
                                    maxlength="2" value="" autocomplete="section-input_6 off"
                                    aria-labelledby="label_6 sublabel_6_month" inputmode="numeric">
                                <span class="date-separate" aria-hidden="true">
                                    &nbsp;-
                                </span>
                                <label class="form-sub-label" for="month_6" id="sublabel_6_month"
                                    style="min-height:13px" aria-hidden="false"> Month </label>
                            </span>
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="tel" class="form-textbox validate[limitDate]" id="day_6"
                                    name="q6_todaysDate[day]" size="2" data-maxlength="2" data-age="" maxlength="2"
                                    value="" autocomplete="section-input_6 off"
                                    aria-labelledby="label_6 sublabel_6_day" inputmode="numeric">
                                <span class="date-separate" aria-hidden="true">
                                    &nbsp;-
                                </span>
                                <label class="form-sub-label" for="day_6" id="sublabel_6_day"
                                    style="min-height:13px" aria-hidden="false"> Day </label>
                            </span>
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="tel" class="form-textbox validate[limitDate]" id="year_6"
                                    name="q6_todaysDate[year]" size="4" data-maxlength="4" data-age="" maxlength="4"
                                    value="" autocomplete="section-input_6 off"
                                    aria-labelledby="label_6 sublabel_6_year">
                                <label class="form-sub-label" for="year_6" id="sublabel_6_year"
                                    style="min-height:13px" aria-hidden="false"> Year </label>
                            </span>
                        </div>
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <?php if (!empty($_POST['q6_todaysDate'])): ?>
                                <b><?php echo $_POST['q6_todaysDate']['month'] . '-' . $_POST['q6_todaysDate']['day'] . '-' . $_POST['q6_todaysDate']['year']; ?></b>
                            <?php else: ?>
                                <input type="text" class="form-textbox validate[limitDate, validateLiteDate]"
                                    id="lite_mode_6" size="12" data-maxlength="12" data-age="" value=""
                                    data-format="mmddyyyy" data-seperator="-" placeholder="MM-DD-YYYY"
                                    autocomplete="section-input_6 off" aria-labelledby="label_6 sublabel_6_litemode"
                                    inputmode="numeric" date-val="1681115218651">
                                <img class=" newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date" id="input_6_pick"
                                    src="./Teacher Form - EN_files/calendar.png" data-component="datetime"
                                    aria-hidden="true" data-allow-time="No" data-version="v2">
                                <label class="form-sub-label" for="lite_mode_6" id="sublabel_6_litemode"
                                    style="min-height:13px" aria-hidden="false"> Date </label>
                            <?php endif; ?>        
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-3" data-type="control_textbox" id="id_7">
                <label class="form-label form-label-top" id="label_7" for="input_7"> Teacher's Name </label>
                <div id="cid_7" class="form-input-wide" data-layout="half">
                    <?php if (!empty($_POST['q7_teachersName'])): ?>
                        <b><?php echo $_POST['q7_teachersName']; ?></b>
                    <?php else: ?>
                        <input type="text" id="input_7" name="q7_teachersName" data-type="input-textbox"
                            class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value=""
                            data-component="textbox" aria-labelledby="label_7">
                    <?php endif; ?>
                </div>
            </li>
            <li class="form-line form-line-column form-col-4" data-type="control_textbox" id="id_8">
                <label class="form-label form-label-top" id="label_8" for="input_8"> Subject </label>
                <div id="cid_8" class="form-input-wide" data-layout="half">
                    <?php if (!empty($_POST['q8_subject'])): ?>
                        <b><?php echo $_POST['q8_subject']; ?></b>
                    <?php else: ?>
                        <input type="text" id="input_8" name="q8_subject" data-type="input-textbox" class="form-textbox"
                            data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox"
                            aria-labelledby="label_8">
                    <?php endif; ?>
                </div>
            </li>
            <li class="form-line form-line-column form-col-5" data-type="control_radio" id="id_9">
                <label class="form-label form-label-top" id="label_9" for="input_9"> Is a poor listener </label>
                <div id="cid_9" class="form-input-wide" data-layout="full">
                    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_9"
                        data-component="radio">
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q9_isA9'])): ?>
                                <b><?php echo ($_POST['q9_isA9'] == "Yes") ? $_POST['q9_isA9'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_9" class="form-radio" id="input_9_0" name="q9_isA9" value="Yes">
                                <label id="label_input_9_0" for="input_9_0"> Yes </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q9_isA9'])): ?>
                                <b><?php echo ($_POST['q9_isA9'] == "No") ? $_POST['q9_isA9'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_9" class="form-radio" id="input_9_1" name="q9_isA9" value="No">
                                <label id="label_input_9_1" for="input_9_1"> No </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q9_isA9'])): ?>
                                <b><?php echo ($_POST['q9_isA9'] == "Don`t Know") ? $_POST['q9_isA9'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_9" class="form-radio" id="input_9_2" name="q9_isA9" value="Don`t Know">
                                <label id="label_input_9_2" for="input_9_2"> Don't Know </label>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-6" data-type="control_radio" id="id_10">
                <label class="form-label form-label-top" id="label_10" for="input_10"> Can concentrate for only a
                    short time </label>
                <div id="cid_10" class="form-input-wide" data-layout="full">
                    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_10"
                        data-component="radio">
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q10_canConcentrate10'])): ?>
                                <b><?php echo ($_POST['q10_canConcentrate10'] == "Yes") ? $_POST['q10_canConcentrate10'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_10" class="form-radio" id="input_10_0" name="q10_canConcentrate10" value="Yes">
                                <label id="label_input_10_0" for="input_10_0"> Yes </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q10_canConcentrate10'])): ?>
                                <b><?php echo ($_POST['q10_canConcentrate10'] == "No") ? $_POST['q10_canConcentrate10'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_10" class="form-radio" id="input_10_1" name="q10_canConcentrate10" value="No">
                                <label id="label_input_10_1" for="input_10_1"> No </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q10_canConcentrate10'])): ?>
                                <b><?php echo ($_POST['q10_canConcentrate10'] == "Don`t Know") ? $_POST['q10_canConcentrate10'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_10" class="form-radio" id="input_10_2" name="q10_canConcentrate10" value="Don`t Know">
                                <label id="label_input_10_2" for="input_10_2"> Don't Know </label>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-7" data-type="control_radio" id="id_11">
                <label class="form-label form-label-top" id="label_11" for="input_11"> Frequently seems to be
                    looking around or staring off into space </label>
                <div id="cid_11" class="form-input-wide" data-layout="full">
                    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_11"
                        data-component="radio">
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q11_frequentlySeems'])): ?>
                                <b><?php echo ($_POST['q11_frequentlySeems'] == "Yes") ? $_POST['q11_frequentlySeems'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_11" class="form-radio" id="input_11_0" name="q11_frequentlySeems" value="Yes">
                                <label id="label_input_11_0" for="input_11_0"> Yes </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q11_frequentlySeems'])): ?>
                                <b><?php echo ($_POST['q11_frequentlySeems'] == "No") ? $_POST['q11_frequentlySeems'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_11" class="form-radio" id="input_11_1" name="q11_frequentlySeems" value="No">
                                <label id="label_input_11_1" for="input_11_1"> No </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q11_frequentlySeems'])): ?>
                                <b><?php echo ($_POST['q11_frequentlySeems'] == "Don`t Know") ? $_POST['q11_frequentlySeems'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_11" class="form-radio" id="input_11_2" name="q11_frequentlySeems" value="Don`t Know">
                                <label id="label_input_11_2" for="input_11_2"> Don't Know </label>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-8" data-type="control_radio" id="id_12">
                <label class="form-label form-label-top" id="label_12" for="input_12"> Forgetful in daily activities
                </label>
                <div id="cid_12" class="form-input-wide" data-layout="full">
                    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_12"
                        data-component="radio">
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q12_forgetfulIn'])): ?>
                                <b><?php echo ($_POST['q12_forgetfulIn'] == "Yes") ? $_POST['q12_forgetfulIn'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_12" class="form-radio" id="input_12_0" name="q12_forgetfulIn" value="Yes">
                                <label id="label_input_12_0" for="input_12_0"> Yes </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q12_forgetfulIn'])): ?>
                                <b><?php echo ($_POST['q12_forgetfulIn'] == "No") ? $_POST['q12_forgetfulIn'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_12" class="form-radio" id="input_12_1" name="q12_forgetfulIn" value="No">
                                <label id="label_input_12_1" for="input_12_1"> No </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q12_forgetfulIn'])): ?>
                                <b><?php echo ($_POST['q12_forgetfulIn'] == "Don`t Know") ? $_POST['q12_forgetfulIn'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_12" class="form-radio" id="input_12_2" name="q12_forgetfulIn" value="Don`t Know">
                                <label id="label_input_12_2" for="input_12_2"> Don't Know </label>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-9" data-type="control_radio" id="id_13">
                <label class="form-label form-label-top" id="label_13" for="input_13"> Excellent imagination
                </label>
                <div id="cid_13" class="form-input-wide" data-layout="full">
                    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_13"
                        data-component="radio">
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q13_excellentImagination'])): ?>
                                <b><?php echo ($_POST['q13_excellentImagination'] == "Yes") ? $_POST['q13_excellentImagination'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_13" class="form-radio" id="input_13_0" name="q13_excellentImagination" value="Yes">
                                <label id="label_input_13_0" for="input_13_0"> Yes </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q13_excellentImagination'])): ?>
                                <b><?php echo ($_POST['q13_excellentImagination'] == "No") ? $_POST['q13_excellentImagination'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_13" class="form-radio" id="input_13_1" name="q13_excellentImagination" value="No">
                                <label id="label_input_13_1" for="input_13_1"> No </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q13_excellentImagination'])): ?>
                                <b><?php echo ($_POST['q13_excellentImagination'] == "Don`t Know") ? $_POST['q13_excellentImagination'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_13" class="form-radio" id="input_13_2" name="q13_excellentImagination" value="Don`t Know">
                                <label id="label_input_13_2" for="input_13_2"> Don't Know </label>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-10" data-type="control_radio" id="id_14">
                <label class="form-label form-label-top" id="label_14" for="input_14"> Loses materials (books,
                    pencils, passes) </label>
                <div id="cid_14" class="form-input-wide" data-layout="full">
                    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_14"
                        data-component="radio">
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q14_losesMaterials'])): ?>
                                <b><?php echo ($_POST['q14_losesMaterials'] == "Yes") ? $_POST['q14_losesMaterials'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_14" class="form-radio" id="input_14_0" name="q14_losesMaterials" value="Yes">
                                <label id="label_input_14_0" for="input_14_0"> Yes </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q14_losesMaterials'])): ?>
                                <b><?php echo ($_POST['q14_losesMaterials'] == "No") ? $_POST['q14_losesMaterials'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_14" class="form-radio" id="input_14_1" name="q14_losesMaterials" value="No">
                                <label id="label_input_14_1" for="input_14_1"> No </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q14_losesMaterials'])): ?>
                                <b><?php echo ($_POST['q14_losesMaterials'] == "Don`t Know") ? $_POST['q14_losesMaterials'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_14" class="form-radio" id="input_14_2" name="q14_losesMaterials" value="Don`t Know">
                                <label id="label_input_14_2" for="input_14_2"> Don't Know </label>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-11" data-type="control_radio" id="id_15">
                <label class="form-label form-label-top" id="label_15" for="input_15"> Daydreams often: seems to be
                    in own world </label>
                <div id="cid_15" class="form-input-wide" data-layout="full">
                    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_15"
                        data-component="radio">
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q15_daydreamsOften'])): ?>
                                <b><?php echo ($_POST['q15_daydreamsOften'] == "Yes") ? $_POST['q15_daydreamsOften'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_15" class="form-radio" id="input_15_0" name="q15_daydreamsOften" value="Yes">
                                <label id="label_input_15_0" for="input_15_0"> Yes </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q15_daydreamsOften'])): ?>
                                <b><?php echo ($_POST['q15_daydreamsOften'] == "No") ? $_POST['q15_daydreamsOften'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_15" class="form-radio" id="input_15_1" name="q15_daydreamsOften" value="No">
                                <label id="label_input_15_1" for="input_15_1"> No </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q15_daydreamsOften'])): ?>
                                <b><?php echo ($_POST['q15_daydreamsOften'] == "Don`t Know") ? $_POST['q15_daydreamsOften'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_15" class="form-radio" id="input_15_2" name="q15_daydreamsOften" value="Don`t Know">
                                <label id="label_input_15_2" for="input_15_2"> Don't Know </label>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-12" data-type="control_radio" id="id_16">
                <label class="form-label form-label-top" id="label_16" for="input_16"> Impulsive, rushes through
                    tasks </label>
                <div id="cid_16" class="form-input-wide" data-layout="full">
                    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_16"
                        data-component="radio">
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q16_impulsiveRushes'])): ?>
                                <b><?php echo ($_POST['q16_impulsiveRushes'] == "Yes") ? $_POST['q16_impulsiveRushes'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_16" class="form-radio" id="input_16_0" name="q16_impulsiveRushes" value="Yes">
                                <label id="label_input_16_0" for="input_16_0"> Yes </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q16_impulsiveRushes'])): ?>
                                <b><?php echo ($_POST['q16_impulsiveRushes'] == "No") ? $_POST['q16_impulsiveRushes'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_16" class="form-radio" id="input_16_1" name="q16_impulsiveRushes" value="No">
                                <label id="label_input_16_1" for="input_16_1"> No </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q16_impulsiveRushes'])): ?>
                                <b><?php echo ($_POST['q16_impulsiveRushes'] == "Don`t Know") ? $_POST['q16_impulsiveRushes'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_16" class="form-radio" id="input_16_2" name="q16_impulsiveRushes" value="Don`t Know">
                                <label id="label_input_16_2" for="input_16_2"> Don't Know </label>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-13" data-type="control_radio" id="id_17">
                <label class="form-label form-label-top" id="label_17" for="input_17"> Has trouble concentrating in
                    group work </label>
                <div id="cid_17" class="form-input-wide" data-layout="full">
                    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_17"
                        data-component="radio">
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q17_hasTrouble'])): ?>
                                <b><?php echo ($_POST['q17_hasTrouble'] == "Yes") ? $_POST['q17_hasTrouble'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_17" class="form-radio" id="input_17_0" name="q17_hasTrouble" value="Yes">
                                <label id="label_input_17_0" for="input_17_0"> Yes </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q17_hasTrouble'])): ?>
                                <b><?php echo ($_POST['q17_hasTrouble'] == "No") ? $_POST['q17_hasTrouble'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_17" class="form-radio" id="input_17_1" name="q17_hasTrouble" value="No">
                                <label id="label_input_17_1" for="input_17_1"> No </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q17_hasTrouble'])): ?>
                                <b><?php echo ($_POST['q17_hasTrouble'] == "Don`t Know") ? $_POST['q17_hasTrouble'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_17" class="form-radio" id="input_17_2" name="q17_hasTrouble" value="Don`t Know">
                                <label id="label_input_17_2" for="input_17_2"> Don't Know </label>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-14" data-type="control_radio" id="id_18">
                <label class="form-label form-label-top" id="label_18" for="input_18"> Receives inconsistent grades
                    or test scores </label>
                <div id="cid_18" class="form-input-wide" data-layout="full">
                    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_18"
                        data-component="radio">
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q18_receivesInconsistent'])): ?>
                                <b><?php echo ($_POST['q18_receivesInconsistent'] == "Yes") ? $_POST['q18_receivesInconsistent'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_18" class="form-radio" id="input_18_0" name="q18_receivesInconsistent" value="Yes">
                                <label id="label_input_18_0" for="input_18_0"> Yes </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q18_receivesInconsistent'])): ?>
                                <b><?php echo ($_POST['q18_receivesInconsistent'] == "No") ? $_POST['q18_receivesInconsistent'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_18" class="form-radio" id="input_18_1" name="q18_receivesInconsistent" value="No">
                                <label id="label_input_18_1" for="input_18_1"> No </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q18_receivesInconsistent'])): ?>
                                <b><?php echo ($_POST['q18_receivesInconsistent'] == "Don`t Know") ? $_POST['q18_receivesInconsistent'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_18" class="form-radio" id="input_18_2" name="q18_receivesInconsistent" value="Don`t Know">
                                <label id="label_input_18_2" for="input_18_2"> Don't Know </label>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-15" data-type="control_radio" id="id_19">
                <label class="form-label form-label-top" id="label_19" for="input_19"> Annoys or bothers others
                </label>
                <div id="cid_19" class="form-input-wide" data-layout="full">
                    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_19"
                        data-component="radio">
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q19_annoysOr'])): ?>
                                <b><?php echo ($_POST['q19_annoysOr'] == "Yes") ? $_POST['q19_annoysOr'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_19" class="form-radio" id="input_19_0" name="q19_annoysOr" value="Yes">
                                <label id="label_input_19_0" for="input_19_0"> Yes </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q19_annoysOr'])): ?>
                                <b><?php echo ($_POST['q19_annoysOr'] == "No") ? $_POST['q19_annoysOr'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_19" class="form-radio" id="input_19_1" name="q19_annoysOr" value="No">
                                <label id="label_input_19_1" for="input_19_1"> No </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q19_annoysOr'])): ?>
                                <b><?php echo ($_POST['q19_annoysOr'] == "Don`t Know") ? $_POST['q19_annoysOr'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_19" class="form-radio" id="input_19_2" name="q19_annoysOr" value="Don`t Know">
                                <label id="label_input_19_2" for="input_19_2"> Don't Know </label>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-16" data-type="control_radio" id="id_20">
                <label class="form-label form-label-top" id="label_20" for="input_20"> Seems to have too much energy
                </label>
                <div id="cid_20" class="form-input-wide" data-layout="full">
                    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_20"
                        data-component="radio">
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q20_seemsTo'])): ?>
                                <b><?php echo ($_POST['q20_seemsTo'] == "Yes") ? $_POST['q20_seemsTo'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_20" class="form-radio" id="input_20_0" name="q20_seemsTo" value="Yes">
                                <label id="label_input_20_0" for="input_20_0"> Yes </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q20_seemsTo'])): ?>
                                <b><?php echo ($_POST['q20_seemsTo'] == "No") ? $_POST['q20_seemsTo'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_20" class="form-radio" id="input_20_1" name="q20_seemsTo" value="No">
                                <label id="label_input_20_1" for="input_20_1"> No </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q20_seemsTo'])): ?>
                                <b><?php echo ($_POST['q20_seemsTo'] == "Don`t Know") ? $_POST['q20_seemsTo'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_20" class="form-radio" id="input_20_2" name="q20_seemsTo" value="Don`t Know">
                                <label id="label_input_20_2" for="input_20_2"> Don't Know </label>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-17" data-type="control_radio" id="id_21">
                <label class="form-label form-label-top" id="label_21" for="input_21"> Body in motion most of the
                    time </label>
                <div id="cid_21" class="form-input-wide" data-layout="full">
                    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_21"
                        data-component="radio">
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q21_bodyIn'])): ?>
                                <b><?php echo ($_POST['q21_bodyIn'] == "Yes") ? $_POST['q21_bodyIn'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_21" class="form-radio" id="input_21_0" name="q21_bodyIn" value="Yes">
                                <label id="label_input_21_0" for="input_21_0"> Yes </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q21_bodyIn'])): ?>
                                <b><?php echo ($_POST['q21_bodyIn'] == "No") ? $_POST['q21_bodyIn'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_21" class="form-radio" id="input_21_1" name="q21_bodyIn" value="No">
                                <label id="label_input_21_1" for="input_21_1"> No </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <?php if (!empty($_POST['q21_bodyIn'])): ?>
                                <b><?php echo ($_POST['q21_bodyIn'] == "Don`t Know") ? $_POST['q21_bodyIn'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_21" class="form-radio" id="input_21_2" name="q21_bodyIn" value="Don`t Know">
                                <label id="label_input_21_2" for="input_21_2"> Don't Know </label>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-18" data-type="control_radio" id="id_22">
                <label class="form-label form-label-top" id="label_22" for="input_22"> Fidgety-keeps moving hands or
                    tapping feet </label>
                <div id="cid_22" class="form-input-wide" data-layout="full">
                    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_22"
                        data-component="radio">
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q22_fidgetykeepsMoving']) ): ?>
                                <b><?php echo ($_POST['q22_fidgetykeepsMoving'] == "Yes") ? $_POST['q22_fidgetykeepsMoving'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_22" class="form-radio" id="input_22_0" name="q22_fidgetykeepsMoving" value="Yes">
                                <label id="label_input_22_0" for="input_22_0"> Yes </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q22_fidgetykeepsMoving']) ): ?>
                                <b><?php echo ($_POST['q22_fidgetykeepsMoving'] == "No") ? $_POST['q22_fidgetykeepsMoving'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_22" class="form-radio" id="input_22_1" name="q22_fidgetykeepsMoving" value="No">
                                <label id="label_input_22_1" for="input_22_1"> No </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q22_fidgetykeepsMoving']) ): ?>
                                <b><?php echo ($_POST['q22_fidgetykeepsMoving'] == "Don`t Know") ? $_POST['q22_fidgetykeepsMoving'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_22" class="form-radio" id="input_22_2" name="q22_fidgetykeepsMoving" value="Don`t Know">
                                <label id="label_input_22_2" for="input_22_2"> Don't Know </label>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-19" data-type="control_radio" id="id_23">
                <label class="form-label form-label-top" id="label_23" for="input_23"> Behavior is variable and hard
                    to predict </label>
                <div id="cid_23" class="form-input-wide" data-layout="full">
                    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_23"
                        data-component="radio">
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q23_behaviorIs']) ): ?>
                                <b><?php echo ($_POST['q23_behaviorIs'] == "Yes") ? $_POST['q23_behaviorIs'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_23" class="form-radio" id="input_23_0" name="q23_behaviorIs" value="Yes">
                                <label id="label_input_23_0" for="input_23_0"> Yes </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q23_behaviorIs']) ): ?>
                                <b><?php echo ($_POST['q23_behaviorIs'] == "No") ? $_POST['q23_behaviorIs'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_23" class="form-radio" id="input_23_1" name="q23_behaviorIs" value="No">
                                <label id="label_input_23_1" for="input_23_1"> No </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q23_behaviorIs']) ): ?>
                                <b><?php echo ($_POST['q23_behaviorIs'] == "Don`t Know") ? $_POST['q23_behaviorIs'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_23" class="form-radio" id="input_23_2" name="q23_behaviorIs" value="Don`t Know">
                                <label id="label_input_23_2" for="input_23_2"> Don't Know </label>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-20" data-type="control_radio" id="id_24">
                <label class="form-label form-label-top" id="label_24" for="input_24"> Gets into trouble without
                    really meaning to </label>
                <div id="cid_24" class="form-input-wide" data-layout="full">
                    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_24"
                        data-component="radio">
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q24_getsInto']) ): ?>
                                <b><?php echo ($_POST['q24_getsInto'] == "Yes") ? $_POST['q24_getsInto'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_24" class="form-radio" id="input_24_0" name="q24_getsInto" value="Yes">
                                <label id="label_input_24_0" for="input_24_0"> Yes </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q24_getsInto']) ): ?>
                                <b><?php echo ($_POST['q24_getsInto'] == "No") ? $_POST['q24_getsInto'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_24" class="form-radio" id="input_24_1" name="q24_getsInto" value="No">
                                <label id="label_input_24_1" for="input_24_1"> No </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q24_getsInto']) ): ?>
                                <b><?php echo ($_POST['q24_getsInto'] == "Don`t Know") ? $_POST['q24_getsInto'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_24" class="form-radio" id="input_24_2" name="q24_getsInto" value="Don`t Know">
                                <label id="label_input_24_2" for="input_24_2"> Don't Know </label>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-21" data-type="control_radio" id="id_25">
                <label class="form-label form-label-top" id="label_25" for="input_25"> Is a troublemaker; stirs
                    things up </label>
                <div id="cid_25" class="form-input-wide" data-layout="full">
                    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_25"
                        data-component="radio">
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q25_isA']) ): ?>
                                <b><?php echo ($_POST['q25_isA'] == "Yes") ? $_POST['q25_isA'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_25" class="form-radio" id="input_25_0" name="q25_isA" value="Yes">
                                <label id="label_input_25_0" for="input_25_0"> Yes </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q25_isA']) ): ?>
                                <b><?php echo ($_POST['q25_isA'] == "No") ? $_POST['q25_isA'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_25" class="form-radio" id="input_25_1" name="q25_isA" value="No">
                                <label id="label_input_25_1" for="input_25_1"> No </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q25_isA']) ): ?>
                                <b><?php echo ($_POST['q25_isA'] == "Don`t Know") ? $_POST['q25_isA'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_25" class="form-radio" id="input_25_2" name="q25_isA" value="Don`t Know">
                                <label id="label_input_25_2" for="input_25_2"> Don't Know </label>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-22" data-type="control_radio" id="id_26">
                <label class="form-label form-label-top" id="label_26" for="input_26"> Class clown </label>
                <div id="cid_26" class="form-input-wide" data-layout="full">
                    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_26"
                        data-component="radio">
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q26_classClown']) ): ?>
                                <b><?php echo ($_POST['q26_classClown'] == "Yes") ? $_POST['q26_classClown'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_26" class="form-radio" id="input_26_0" name="q26_classClown" value="Yes">
                                <label id="label_input_26_0" for="input_26_0"> Yes </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q26_classClown']) ): ?>
                                <b><?php echo ($_POST['q26_classClown'] == "No") ? $_POST['q26_classClown'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_26" class="form-radio" id="input_26_1" name="q26_classClown" value="No">
                                <label id="label_input_26_1" for="input_26_1"> No </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q26_classClown']) ): ?>
                                <b><?php echo ($_POST['q26_classClown'] == "Don`t Know") ? $_POST['q26_classClown'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_26" class="form-radio" id="input_26_2" name="q26_classClown" value="Don`t Know">
                                <label id="label_input_26_2" for="input_26_2"> Don't Know </label>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-23" data-type="control_radio" id="id_27">
                <label class="form-label form-label-top" id="label_27" for="input_27"> Is moody </label>
                <div id="cid_27" class="form-input-wide" data-layout="full">
                    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_27"
                        data-component="radio">
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q27_isMoody']) ): ?>
                                <b><?php echo ($_POST['q27_isMoody'] == "Yes") ? $_POST['q27_isMoody'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_27" class="form-radio" id="input_27_0" name="q27_isMoody" value="Yes">
                                <label id="label_input_27_0" for="input_27_0"> Yes </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q27_isMoody']) ): ?>
                                <b><?php echo ($_POST['q27_isMoody'] == "No") ? $_POST['q27_isMoody'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_27" class="form-radio" id="input_27_1" name="q27_isMoody" value="No">
                                <label id="label_input_27_1" for="input_27_1"> No </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q27_isMoody']) ): ?>
                                <b><?php echo ($_POST['q27_isMoody'] == "Don`t Know") ? $_POST['q27_isMoody'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_27" class="form-radio" id="input_27_2" name="q27_isMoody" value="Don`t Know">
                                <label id="label_input_27_2" for="input_27_2"> Don't Know </label>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-24" data-type="control_radio" id="id_28">
                <label class="form-label form-label-top" id="label_28" for="input_28"> Is a worrier </label>
                <div id="cid_28" class="form-input-wide" data-layout="full">
                    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_28"
                        data-component="radio">
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q28_isA28']) ): ?>
                                <b><?php echo ($_POST['q28_isA28'] == "Yes") ? $_POST['q28_isA28'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_28" class="form-radio" id="input_28_0" name="q28_isA28" value="Yes">
                                <label id="label_input_28_0" for="input_28_0"> Yes </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q28_isA28']) ): ?>
                                <b><?php echo ($_POST['q28_isA28'] == "No") ? $_POST['q28_isA28'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_28" class="form-radio" id="input_28_1" name="q28_isA28" value="No">
                                <label id="label_input_28_1" for="input_28_1"> No </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q28_isA28']) ): ?>
                                <b><?php echo ($_POST['q28_isA28'] == "Don`t Know") ? $_POST['q28_isA28'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_28" class="form-radio" id="input_28_2" name="q28_isA28" value="Don`t Know">
                                <label id="label_input_28_2" for="input_28_2"> Don't Know </label>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-25" data-type="control_radio" id="id_29">
                <label class="form-label form-label-top" id="label_29" for="input_29"> Often cheerful, pleasant,
                    well meaning </label>
                <div id="cid_29" class="form-input-wide" data-layout="full">
                    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_29"
                        data-component="radio">
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q29_oftenCheerful']) ): ?>
                                <b><?php echo ($_POST['q29_oftenCheerful'] == "Yes") ? $_POST['q29_oftenCheerful'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_29" class="form-radio" id="input_29_0" name="q29_oftenCheerful" value="Yes">
                                <label id="label_input_29_0" for="input_29_0"> Yes </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q29_oftenCheerful']) ): ?>
                                <b><?php echo ($_POST['q29_oftenCheerful'] == "No") ? $_POST['q29_oftenCheerful'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_29" class="form-radio" id="input_29_1" name="q29_oftenCheerful" value="No">
                                <label id="label_input_29_1" for="input_29_1"> No </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q29_oftenCheerful']) ): ?>
                                <b><?php echo ($_POST['q29_oftenCheerful'] == "Don`t Know") ? $_POST['q29_oftenCheerful'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_29" class="form-radio" id="input_29_2" name="q29_oftenCheerful" value="Don`t Know">
                                <label id="label_input_29_2" for="input_29_2"> Don't Know </label>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-26" data-type="control_radio" id="id_30">
                <label class="form-label form-label-top" id="label_30" for="input_30"> Is often sad </label>
                <div id="cid_30" class="form-input-wide" data-layout="full">
                    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_30"
                        data-component="radio">
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q30_isOften']) ): ?>
                                <b><?php echo ($_POST['q30_isOften'] == "Yes") ? $_POST['q30_isOften'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_30" class="form-radio" id="input_30_0" name="q30_isOften" value="Yes">
                                <label id="label_input_30_0" for="input_30_0"> Yes </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q30_isOften']) ): ?>
                                <b><?php echo ($_POST['q30_isOften'] == "No") ? $_POST['q30_isOften'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_30" class="form-radio" id="input_30_1" name="q30_isOften" value="No">
                                <label id="label_input_30_1" for="input_30_1"> No </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q30_isOften']) ): ?>
                                <b><?php echo ($_POST['q30_isOften'] == "Don`t Know") ? $_POST['q30_isOften'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_30" class="form-radio" id="input_30_2" name="q30_isOften" value="Don`t Know">
                                <label id="label_input_30_2" for="input_30_2"> Don't Know </label>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-27" data-type="control_radio" id="id_31">
                <label class="form-label form-label-top" id="label_31" for="input_31"> Is often very quiet </label>
                <div id="cid_31" class="form-input-wide" data-layout="full">
                    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_31"
                        data-component="radio">
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q31_isOften31']) ): ?>
                                <b><?php echo ($_POST['q31_isOften31'] == "Yes") ? $_POST['q31_isOften31'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_31" class="form-radio" id="input_31_0" name="q31_isOften31" value="Yes">
                                <label id="label_input_31_0" for="input_31_0"> Yes </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q31_isOften31']) ): ?>
                                <b><?php echo ($_POST['q31_isOften31'] == "No") ? $_POST['q31_isOften31'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_31" class="form-radio" id="input_31_1" name="q31_isOften31" value="No">
                                <label id="label_input_31_1" for="input_31_1"> No </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q31_isOften31']) ): ?>
                                <b><?php echo ($_POST['q31_isOften31'] == "Don`t Know") ? $_POST['q31_isOften31'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_31" class="form-radio" id="input_31_2" name="q31_isOften31" value="Don`t Know">
                                <label id="label_input_31_2" for="input_31_2"> Don't Know </label>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-28" data-type="control_radio" id="id_32">
                <label class="form-label form-label-top" id="label_32" for="input_32"> Is often tired </label>
                <div id="cid_32" class="form-input-wide" data-layout="full">
                    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_32"
                        data-component="radio">
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q32_isOften32']) ): ?>
                                <b><?php echo ($_POST['q32_isOften32'] == "Yes") ? $_POST['q32_isOften32'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_32" class="form-radio" id="input_32_0" name="q32_isOften32" value="Yes">
                                <label id="label_input_32_0" for="input_32_0"> Yes </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q32_isOften32']) ): ?>
                                <b><?php echo ($_POST['q32_isOften32'] == "No") ? $_POST['q32_isOften32'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_32" class="form-radio" id="input_32_1" name="q32_isOften32" value="No">
                                <label id="label_input_32_1" for="input_32_1"> No </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q32_isOften32']) ): ?>
                                <b><?php echo ($_POST['q32_isOften32'] == "Don`t Know") ? $_POST['q32_isOften32'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_32" class="form-radio" id="input_32_2" name="q32_isOften32" value="Don`t Know">
                                <label id="label_input_32_2" for="input_32_2"> Don't Know </label>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-29" data-type="control_radio" id="id_33">
                <label class="form-label form-label-top" id="label_33" for="input_33"> Speaks unclearly, stutters,
                    stammers </label>
                <div id="cid_33" class="form-input-wide" data-layout="full">
                    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_33"
                        data-component="radio">
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q33_speaksUnclearly']) ): ?>
                                <b><?php echo ($_POST['q33_speaksUnclearly'] == "Yes") ? $_POST['q33_speaksUnclearly'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_33" class="form-radio" id="input_33_0" name="q33_speaksUnclearly" value="Yes">
                                <label id="label_input_33_0" for="input_33_0"> Yes </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q33_speaksUnclearly']) ): ?>
                                <b><?php echo ($_POST['q33_speaksUnclearly'] == "No") ? $_POST['q33_speaksUnclearly'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_33" class="form-radio" id="input_33_1" name="q33_speaksUnclearly" value="No">
                                <label id="label_input_33_1" for="input_33_1"> No </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q33_speaksUnclearly']) ): ?>
                                <b><?php echo ($_POST['q33_speaksUnclearly'] == "Don`t Know") ? $_POST['q33_speaksUnclearly'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_33" class="form-radio" id="input_33_2" name="q33_speaksUnclearly" value="Don`t Know">
                                <label id="label_input_33_2" for="input_33_2"> Don't Know </label>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-30" data-type="control_radio" id="id_34">
                <label class="form-label form-label-top" id="label_34" for="input_34"> Complains of not feeling well
                </label>
                <div id="cid_34" class="form-input-wide" data-layout="full">
                    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_34"
                        data-component="radio">
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q34_complainsOf']) ): ?>
                                <b><?php echo ($_POST['q34_complainsOf'] == "Yes") ? $_POST['q34_complainsOf'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_34" class="form-radio" id="input_34_0" name="q34_complainsOf" value="Yes">
                                <label id="label_input_34_0" for="input_34_0"> Yes </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q34_complainsOf']) ): ?>
                                <b><?php echo ($_POST['q34_complainsOf'] == "No") ? $_POST['q34_complainsOf'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_34" class="form-radio" id="input_34_1" name="q34_complainsOf" value="No">
                                <label id="label_input_34_1" for="input_34_1"> No </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q34_complainsOf']) ): ?>
                                <b><?php echo ($_POST['q34_complainsOf'] == "Don`t Know") ? $_POST['q34_complainsOf'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_34" class="form-radio" id="input_34_2" name="q34_complainsOf" value="Don`t Know">
                                <label id="label_input_34_2" for="input_34_2"> Don't Know </label>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-31" data-type="control_radio" id="id_35">
                <label class="form-label form-label-top" id="label_35" for="input_35"> Asks to leave the room
                    frequently </label>
                <div id="cid_35" class="form-input-wide" data-layout="full">
                    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_35"
                        data-component="radio">
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q35_asksTo']) ): ?>
                                <b><?php echo ($_POST['q35_asksTo'] == "Yes") ? $_POST['q35_asksTo'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_35" class="form-radio" id="input_35_0" name="q35_asksTo" value="Yes">
                                <label id="label_input_35_0" for="input_35_0"> Yes </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q35_asksTo']) ): ?>
                                <b><?php echo ($_POST['q35_asksTo'] == "No") ? $_POST['q35_asksTo'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_35" class="form-radio" id="input_35_1" name="q35_asksTo" value="No">
                                <label id="label_input_35_1" for="input_35_1"> No </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q35_asksTo']) ): ?>
                                <b><?php echo ($_POST['q35_asksTo'] == "Don`t Know") ? $_POST['q35_asksTo'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_35" class="form-radio" id="input_35_2" name="q35_asksTo" value="Don`t Know">
                                <label id="label_input_35_2" for="input_35_2"> Don't Know </label>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-32" data-type="control_radio" id="id_36">
                <label class="form-label form-label-top" id="label_36" for="input_36"> Not chosen for teams or
                    groups </label>
                <div id="cid_36" class="form-input-wide" data-layout="full">
                    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_36"
                        data-component="radio">
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q36_notChosen']) ): ?>
                                <b><?php echo ($_POST['q36_notChosen'] == "Yes") ? $_POST['q36_notChosen'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_36" class="form-radio" id="input_36_0" name="q36_notChosen" value="Yes">
                                <label id="label_input_36_0" for="input_36_0"> Yes </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q36_notChosen']) ): ?>
                                <b><?php echo ($_POST['q36_notChosen'] == "No") ? $_POST['q36_notChosen'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_36" class="form-radio" id="input_36_1" name="q36_notChosen" value="No">
                                <label id="label_input_36_1" for="input_36_1"> No </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q36_notChosen']) ): ?>
                                <b><?php echo ($_POST['q36_notChosen'] == "Don`t Know") ? $_POST['q36_notChosen'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_36" class="form-radio" id="input_36_2" name="q36_notChosen" value="Don`t Know">
                                <label id="label_input_36_2" for="input_36_2"> Don't Know </label>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-33" data-type="control_radio" id="id_37">
                <label class="form-label form-label-top" id="label_37" for="input_37"> Well liked by peers </label>
                <div id="cid_37" class="form-input-wide" data-layout="full">
                    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_37"
                        data-component="radio">
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q37_wellLiked']) ): ?>
                                <b><?php echo ($_POST['q37_wellLiked'] == "Yes") ? $_POST['q37_wellLiked'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_37" class="form-radio" id="input_37_0" name="q37_wellLiked" value="Yes">
                                <label id="label_input_37_0" for="input_37_0"> Yes </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q37_wellLiked']) ): ?>
                                <b><?php echo ($_POST['q37_wellLiked'] == "No") ? $_POST['q37_wellLiked'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_37" class="form-radio" id="input_37_1" name="q37_wellLiked" value="No">
                                <label id="label_input_37_1" for="input_37_1"> No </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q37_wellLiked']) ): ?>
                                <b><?php echo ($_POST['q37_wellLiked'] == "Don`t Know") ? $_POST['q37_wellLiked'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_37" class="form-radio" id="input_37_2" name="q37_wellLiked" value="Don`t Know">
                                <label id="label_input_37_2" for="input_37_2"> Don't Know </label>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-34" data-type="control_radio" id="id_38">
                <label class="form-label form-label-top" id="label_38" for="input_38"> Seems disconnected, confused
                </label>
                <div id="cid_38" class="form-input-wide" data-layout="full">
                    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_38"
                        data-component="radio">
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q38_seemsDisconnected']) ): ?>
                                <b><?php echo ($_POST['q38_seemsDisconnected'] == "Yes") ? $_POST['q38_seemsDisconnected'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_38" class="form-radio" id="input_38_0" name="q38_seemsDisconnected" value="Yes">
                                <label id="label_input_38_0" for="input_38_0"> Yes </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q38_seemsDisconnected']) ): ?>
                                <b><?php echo ($_POST['q38_seemsDisconnected'] == "No") ? $_POST['q38_seemsDisconnected'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_38" class="form-radio" id="input_38_1" name="q38_seemsDisconnected" value="No">
                                <label id="label_input_38_1" for="input_38_1"> No </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q38_seemsDisconnected']) ): ?>
                                <b><?php echo ($_POST['q38_seemsDisconnected'] == "Don`t Know") ? $_POST['q38_seemsDisconnected'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_38" class="form-radio" id="input_38_2" name="q38_seemsDisconnected" value="Don`t Know">
                                <label id="label_input_38_2" for="input_38_2"> Don't Know </label>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-35" data-type="control_radio" id="id_39">
                <label class="form-label form-label-top" id="label_39" for="input_39"> Disorganized, unprepared,
                    can’t find time </label>
                <div id="cid_39" class="form-input-wide" data-layout="full">
                    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_39"
                        data-component="radio">
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q39_disorganizedUnprepared']) ): ?>
                                <b><?php echo ($_POST['q39_disorganizedUnprepared'] == "Yes") ? $_POST['q39_disorganizedUnprepared'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_39" class="form-radio" id="input_39_0" name="q39_disorganizedUnprepared" value="Yes">
                                <label id="label_input_39_0" for="input_39_0"> Yes </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q39_disorganizedUnprepared']) ): ?>
                                <b><?php echo ($_POST['q39_disorganizedUnprepared'] == "No") ? $_POST['q39_disorganizedUnprepared'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_39" class="form-radio" id="input_39_1" name="q39_disorganizedUnprepared" value="No">
                                <label id="label_input_39_1" for="input_39_1"> No </label>
                            <?php endif; ?>
                        </span>
                        <span class="form-radio-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <?php if ( !empty($_POST['q39_disorganizedUnprepared']) ): ?>
                                <b><?php echo ($_POST['q39_disorganizedUnprepared'] == "Don`t Know") ? $_POST['q39_disorganizedUnprepared'] : ''; ?></b>
                            <?php else: ?>
                                <input type="radio" aria-describedby="label_39" class="form-radio" id="input_39_2" name="q39_disorganizedUnprepared" value="Don`t Know">
                                <label id="label_input_39_2" for="input_39_2"> Don't Know </label>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </li>
            <li id="cid_40" class="form-input-wide" data-type="control_head">
                <div class="form-header-group  header-default">
                    <div class="header-text httac htvam">
                        <h2 id="header_40" class="form-header" data-component="header">
                            ACADEMIC SKILLS ASSESSMENT
                        </h2>
                    </div>
                </div>
            </li>
            <li class="form-line" data-type="control_matrix" id="id_41">
                <label class="form-label form-label-top form-label-auto" id="label_41" for="input_41"> Reading
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
                                    <label id="label_41_col_0"> Exceptional </label>
                                </th>
                                <th scope="col"
                                    class="form-matrix-headers form-matrix-column-headers form-matrix-column_1"
                                    style="width:110px;">
                                    <label id="label_41_col_1"> Above Average </label>
                                </th>
                                <th scope="col"
                                    class="form-matrix-headers form-matrix-column-headers form-matrix-column_2"
                                    style="width:110px">
                                    <label id="label_41_col_2"> Average </label>
                                </th>
                                <th scope="col"
                                    class="form-matrix-headers form-matrix-column-headers form-matrix-column_3"
                                    style="width:110px">
                                    <label id="label_41_col_3"> Below Average </label>
                                </th>
                                <th scope="col"
                                    class="form-matrix-headers form-matrix-column-headers form-matrix-column_4"
                                    style="width:110px">
                                    <label id="label_41_col_4"> Significantly Below </label>
                                </th>
                            </tr>
                            <tr class="form-matrix-tr form-matrix-value-tr"
                                aria-labelledby="label_41 label_41_row_0">
                                <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                    <label id="label_41_row_0"> Vocabulary </label>
                                </th>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_41_0_0" class="form-radio" name="q41_reading[0]" <?php echo ($_POST['q41_reading'][0] == 'Exceptional') ? 'checked="checked"' : ''; ?>
                                        value="Exceptional" aria-labelledby="label_41_col_0 label_41_row_0">
                                    <label for="input_41_0_0" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_41_0_1" class="form-radio" name="q41_reading[0]" <?php echo ($_POST['q41_reading'][0] == 'Above Average') ? 'checked="checked"' : ''; ?>
                                        value="Above Average" aria-labelledby="label_41_col_1 label_41_row_0">
                                    <label for="input_41_0_1" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_41_0_2" class="form-radio" name="q41_reading[0]" <?php echo ($_POST['q41_reading'][0] == 'Average') ? 'checked="checked"' : ''; ?>
                                        value="Average" aria-labelledby="label_41_col_2 label_41_row_0">
                                    <label for="input_41_0_2" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_41_0_3" class="form-radio" name="q41_reading[0]" <?php echo ($_POST['q41_reading'][0] == 'Below Average') ? 'checked="checked"' : ''; ?>
                                        value="Below Average" selected aria-labelledby="label_41_col_3 label_41_row_0">
                                    <label for="input_41_0_3" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_41_0_4" class="form-radio" name="q41_reading[0]" <?php echo ($_POST['q41_reading'][0] == 'Significantly Below') ? 'checked="checked"' : ''; ?>
                                        value="Significantly Below" checked="checked" aria-labelledby="label_41_col_4 label_41_row_0">
                                    <label for="input_41_0_4" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                            </tr>
                            <tr class="form-matrix-tr form-matrix-value-tr"
                                aria-labelledby="label_41 label_41_row_1">
                                <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                    <label id="label_41_row_1"> Comprehension </label>
                                </th>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_41_1_0" class="form-radio" name="q41_reading[1]" <?php echo ($_POST['q41_reading'][1] == 'Exceptional') ? 'checked="checked"' : ''; ?>
                                        value="Exceptional" aria-labelledby="label_41_col_0 label_41_row_1">
                                    <label for="input_41_1_0" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_41_1_1" class="form-radio" name="q41_reading[1]" <?php echo ($_POST['q41_reading'][1] == 'Above Average') ? 'checked="checked"' : ''; ?>
                                        value="Above Average" aria-labelledby="label_41_col_1 label_41_row_1">
                                    <label for="input_41_1_1" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_41_1_2" class="form-radio" name="q41_reading[1]" <?php echo ($_POST['q41_reading'][1] == 'Average') ? 'checked="checked"' : ''; ?>
                                        value="Average" aria-labelledby="label_41_col_2 label_41_row_1">
                                    <label for="input_41_1_2" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_41_1_3" class="form-radio" name="q41_reading[1]" <?php echo ($_POST['q41_reading'][1] == 'Below Average') ? 'checked="checked"' : ''; ?>
                                        value="Below Average" aria-labelledby="label_41_col_3 label_41_row_1">
                                    <label for="input_41_1_3" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_41_1_4" class="form-radio" name="q41_reading[1]" <?php echo ($_POST['q41_reading'][1] == 'Significantly Below') ? 'checked="checked"' : ''; ?>
                                        value="Significantly Below" aria-labelledby="label_41_col_4 label_41_row_1">
                                    <label for="input_41_1_4" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                            </tr>
                            <tr class="form-matrix-tr form-matrix-value-tr"
                                aria-labelledby="label_41 label_41_row_2">
                                <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                    <label id="label_41_row_2"> Phonetics/Decoding </label>
                                </th>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_41_2_0" class="form-radio" name="q41_reading[2]" <?php echo ($_POST['q41_reading'][2] == 'Exceptional') ? 'checked="checked"' : ''; ?>
                                        value="Exceptional" aria-labelledby="label_41_col_0 label_41_row_2">
                                    <label for="input_41_2_0" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_41_2_1" class="form-radio" name="q41_reading[2]" <?php echo ($_POST['q41_reading'][2] == 'Above Average') ? 'checked="checked"' : ''; ?>
                                        value="Above Average" aria-labelledby="label_41_col_1 label_41_row_2">
                                    <label for="input_41_2_1" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_41_2_2" class="form-radio" name="q41_reading[2]" <?php echo ($_POST['q41_reading'][2] == 'Average') ? 'checked="checked"' : ''; ?>
                                        value="Average" aria-labelledby="label_41_col_2 label_41_row_2">
                                    <label for="input_41_2_2" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_41_2_3" class="form-radio" name="q41_reading[2]" <?php echo ($_POST['q41_reading'][2] == 'Below Average') ? 'checked="checked"' : ''; ?>
                                        value="Below Average" aria-labelledby="label_41_col_3 label_41_row_2">
                                    <label for="input_41_2_3" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_41_2_4" class="form-radio" name="q41_reading[2]" <?php echo ($_POST['q41_reading'][2] == 'Significantly Below') ? 'checked="checked"' : ''; ?>
                                        value="Significantly Below" aria-labelledby="label_41_col_4 label_41_row_2">
                                    <label for="input_41_2_4" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                            </tr>
                            <tr class="form-matrix-tr form-matrix-value-tr"
                                aria-labelledby="label_41 label_41_row_3">
                                <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                    <label id="label_41_row_3"> Fluency </label>
                                </th>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_41_3_0" class="form-radio" name="q41_reading[3]" <?php echo ($_POST['q41_reading'][3] == 'Exceptional') ? 'checked="checked"' : ''; ?>
                                        value="Exceptional" aria-labelledby="label_41_col_0 label_41_row_3">
                                    <label for="input_41_3_0" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_41_3_1" class="form-radio" name="q41_reading[3]" <?php echo ($_POST['q41_reading'][3] == 'Above Average') ? 'checked="checked"' : ''; ?>
                                        value="Above Average" aria-labelledby="label_41_col_1 label_41_row_3">
                                    <label for="input_41_3_1" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_41_3_2" class="form-radio" name="q41_reading[3]" <?php echo ($_POST['q41_reading'][3] == 'Average') ? 'checked="checked"' : ''; ?>
                                        value="Average" aria-labelledby="label_41_col_2 label_41_row_3">
                                    <label for="input_41_3_2" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_41_3_3" class="form-radio" name="q41_reading[3]" <?php echo ($_POST['q41_reading'][3] == 'Below Average') ? 'checked="checked"' : ''; ?>
                                        value="Below Average" aria-labelledby="label_41_col_3 label_41_row_3">
                                    <label for="input_41_3_3" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_41_3_4" class="form-radio" name="q41_reading[3]" <?php echo ($_POST['q41_reading'][3] == 'Significantly Below') ? 'checked="checked"' : ''; ?>
                                        value="Significantly Below" aria-labelledby="label_41_col_4 label_41_row_3">
                                    <label for="input_41_3_4" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                            </tr>
                            <tr class="form-matrix-tr form-matrix-value-tr"
                                aria-labelledby="label_41 label_41_row_4">
                                <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                    <label id="label_41_row_4"> Oral </label>
                                </th>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_41_4_0" class="form-radio" name="q41_reading[4]" <?php echo ($_POST['q41_reading'][4] == 'Exceptional') ? 'checked="checked"' : ''; ?>
                                        value="Exceptional" aria-labelledby="label_41_col_0 label_41_row_4">
                                    <label for="input_41_4_0" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_41_4_1" class="form-radio" name="q41_reading[4]" <?php echo ($_POST['q41_reading'][4] == 'Above Average') ? 'checked="checked"' : ''; ?>
                                        value="Above Average" aria-labelledby="label_41_col_1 label_41_row_4">
                                    <label for="input_41_4_1" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_41_4_2" class="form-radio" name="q41_reading[4]" <?php echo ($_POST['q41_reading'][4] == 'Average') ? 'checked="checked"' : ''; ?>
                                        value="Average" aria-labelledby="label_41_col_2 label_41_row_4">
                                    <label for="input_41_4_2" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_41_4_3" class="form-radio" name="q41_reading[4]" <?php echo ($_POST['q41_reading'][4] == 'Below Average') ? 'checked="checked"' : ''; ?>
                                        value="Below Average" aria-labelledby="label_41_col_3 label_41_row_4">
                                    <label for="input_41_4_3" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_41_4_4" class="form-radio" name="q41_reading[4]" <?php echo ($_POST['q41_reading'][4] == 'Significantly Below') ? 'checked="checked"' : ''; ?>
                                        value="Significantly Below" aria-labelledby="label_41_col_4 label_41_row_4">
                                    <label for="input_41_4_4" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </li>
            <li class="form-line" data-type="control_matrix" id="id_42">
                <label class="form-label form-label-top form-label-auto" id="label_42" for="input_42"> Math </label>
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
                                    style="width:120px">
                                    <label id="label_42_col_0"> Exceptional </label>
                                </th>
                                <th scope="col"
                                    class="form-matrix-headers form-matrix-column-headers form-matrix-column_1"
                                    style="width:120px">
                                    <label id="label_42_col_1"> Above Average </label>
                                </th>
                                <th scope="col"
                                    class="form-matrix-headers form-matrix-column-headers form-matrix-column_2"
                                    style="width:120px">
                                    <label id="label_42_col_2"> Average </label>
                                </th>
                                <th scope="col"
                                    class="form-matrix-headers form-matrix-column-headers form-matrix-column_3"
                                    style="width:120px">
                                    <label id="label_42_col_3"> Below Average </label>
                                </th>
                                <th scope="col"
                                    class="form-matrix-headers form-matrix-column-headers form-matrix-column_4"
                                    style="width:120px">
                                    <label id="label_42_col_4"> Significantly Below </label>
                                </th>
                            </tr>
                            <tr class="form-matrix-tr form-matrix-value-tr"
                                aria-labelledby="label_42 label_42_row_0">
                                <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                    <label id="label_42_row_0"> Calculation </label>
                                </th>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_42_0_0" class="form-radio" name="q42_math[0]" <?php echo ($_POST['q42_math'][0] == 'Exceptional') ? 'checked="checked"' : ''; ?>
                                        value="Exceptional" aria-labelledby="label_42_col_0 label_42_row_0">
                                    <label for="input_42_0_0" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_42_0_1" class="form-radio" name="q42_math[0]" <?php echo ($_POST['q42_math'][0] == 'Above Average') ? 'checked="checked"' : ''; ?>
                                        value="Above Average" aria-labelledby="label_42_col_1 label_42_row_0">
                                    <label for="input_42_0_1" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_42_0_2" class="form-radio" name="q42_math[0]" <?php echo ($_POST['q42_math'][0] == 'Average') ? 'checked="checked"' : ''; ?>
                                        value="Average" aria-labelledby="label_42_col_2 label_42_row_0">
                                    <label for="input_42_0_2" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_42_0_3" class="form-radio" name="q42_math[0]" <?php echo ($_POST['q42_math'][0] == 'Below Average') ? 'checked="checked"' : ''; ?>
                                        value="Below Average" aria-labelledby="label_42_col_3 label_42_row_0">
                                    <label for="input_42_0_3" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_42_0_4" class="form-radio" name="q42_math[0]" <?php echo ($_POST['q42_math'][0] == 'Significantly Below') ? 'checked="checked"' : ''; ?>
                                        value="Significantly Below" aria-labelledby="label_42_col_4 label_42_row_0">
                                    <label for="input_42_0_4" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                            </tr>
                            <tr class="form-matrix-tr form-matrix-value-tr"
                                aria-labelledby="label_42 label_42_row_1">
                                <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                    <label id="label_42_row_1"> Math Facts </label>
                                </th>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_42_1_0" class="form-radio" name="q42_math[1]" <?php echo ($_POST['q42_math'][1] == 'Exceptional') ? 'checked="checked"' : ''; ?>
                                        value="Exceptional" aria-labelledby="label_42_col_0 label_42_row_1">
                                    <label for="input_42_1_0" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_42_1_1" class="form-radio" name="q42_math[1]" <?php echo ($_POST['q42_math'][1] == 'Above Average') ? 'checked="checked"' : ''; ?>
                                        value="Above Average" aria-labelledby="label_42_col_1 label_42_row_1">
                                    <label for="input_42_1_1" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_42_1_2" class="form-radio" name="q42_math[1]" <?php echo ($_POST['q42_math'][1] == 'Average') ? 'checked="checked"' : ''; ?>
                                        value="Average" aria-labelledby="label_42_col_2 label_42_row_1">
                                    <label for="input_42_1_2" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_42_1_3" class="form-radio" name="q42_math[1]" <?php echo ($_POST['q42_math'][1] == 'Below Average') ? 'checked="checked"' : ''; ?>
                                        value="Below Average" aria-labelledby="label_42_col_3 label_42_row_1">
                                    <label for="input_42_1_3" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_42_1_4" class="form-radio" name="q42_math[1]" <?php echo ($_POST['q42_math'][1] == 'Significantly Below') ? 'checked="checked"' : ''; ?>
                                        value="Significantly Below" aria-labelledby="label_42_col_4 label_42_row_1">
                                    <label for="input_42_1_4" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                            </tr>
                            <tr class="form-matrix-tr form-matrix-value-tr"
                                aria-labelledby="label_42 label_42_row_2">
                                <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                    <label id="label_42_row_2"> Story or word problems </label>
                                </th>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_42_2_0" class="form-radio" name="q42_math[2]" <?php echo ($_POST['q42_math'][2] == 'Exceptional') ? 'checked="checked"' : ''; ?>
                                        value="Exceptional" aria-labelledby="label_42_col_0 label_42_row_2">
                                    <label for="input_42_2_0" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_42_2_1" class="form-radio" name="q42_math[2]" <?php echo ($_POST['q42_math'][2] == 'Above Average') ? 'checked="checked"' : ''; ?>
                                        value="Above Average" aria-labelledby="label_42_col_1 label_42_row_2">
                                    <label for="input_42_2_1" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_42_2_2" class="form-radio" name="q42_math[2]" <?php echo ($_POST['q42_math'][2] == 'Average') ? 'checked="checked"' : ''; ?>
                                        value="Average" aria-labelledby="label_42_col_2 label_42_row_2">
                                    <label for="input_42_2_2" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_42_2_3" class="form-radio" name="q42_math[2]" <?php echo ($_POST['q42_math'][2] == 'Below Average') ? 'checked="checked"' : ''; ?>
                                        value="Below Average" aria-labelledby="label_42_col_3 label_42_row_2">
                                    <label for="input_42_2_3" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_42_2_4" class="form-radio" name="q42_math[2]" <?php echo ($_POST['q42_math'][2] == 'Significantly Below') ? 'checked="checked"' : ''; ?>
                                        value="Significantly Below" aria-labelledby="label_42_col_4 label_42_row_2">
                                    <label for="input_42_2_4" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                            </tr>
                            <tr class="form-matrix-tr form-matrix-value-tr"
                                aria-labelledby="label_42 label_42_row_3">
                                <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                    <label id="label_42_row_3"> Fluency </label>
                                </th>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_42_3_0" class="form-radio" name="q42_math[3]" <?php echo ($_POST['q42_math'][3] == 'Exceptional') ? 'checked="checked"' : ''; ?>
                                        value="Exceptional" aria-labelledby="label_42_col_0 label_42_row_3">
                                    <label for="input_42_3_0" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_42_3_1" class="form-radio" name="q42_math[3]" <?php echo ($_POST['q42_math'][3] == 'Above Average') ? 'checked="checked"' : ''; ?>
                                        value="Above Average" aria-labelledby="label_42_col_1 label_42_row_3">
                                    <label for="input_42_3_1" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_42_3_2" class="form-radio" name="q42_math[3]" <?php echo ($_POST['q42_math'][3] == 'Average') ? 'checked="checked"' : ''; ?>
                                        value="Average" aria-labelledby="label_42_col_2 label_42_row_3">
                                    <label for="input_42_3_2" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_42_3_3" class="form-radio" name="q42_math[3]" <?php echo ($_POST['q42_math'][3] == 'Below Average') ? 'checked="checked"' : ''; ?>
                                        value="Below Average" aria-labelledby="label_42_col_3 label_42_row_3">
                                    <label for="input_42_3_3" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_42_3_4" class="form-radio" name="q42_math[3]" <?php echo ($_POST['q42_math'][3] == 'Significantly Below') ? 'checked="checked"' : ''; ?>
                                        value="Significantly Below" aria-labelledby="label_42_col_4 label_42_row_3">
                                    <label for="input_42_3_4" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </li>
            <li class="form-line" data-type="control_matrix" id="id_43">
                <label class="form-label form-label-top form-label-auto" id="label_43" for="input_43"> Written
                    Language </label>
                <div id="cid_43" class="form-input-wide" data-layout="full">
                    <table summary="" aria-labelledby="label_43" cellpadding="4" cellspacing="0"
                        class="form-matrix-table" data-component="matrix">
                        <tbody>
                            <tr class="form-matrix-tr form-matrix-header-tr">
                                <th class="form-matrix-th" style="border:none">
                                    &nbsp;
                                </th>
                                <th scope="col"
                                    class="form-matrix-headers form-matrix-column-headers form-matrix-column_0"
                                    style="width:120px">
                                    <label id="label_43_col_0"> Exceptional </label>
                                </th>
                                <th scope="col"
                                    class="form-matrix-headers form-matrix-column-headers form-matrix-column_1"
                                    style="width:120px">
                                    <label id="label_43_col_1"> Above Average </label>
                                </th>
                                <th scope="col"
                                    class="form-matrix-headers form-matrix-column-headers form-matrix-column_2"
                                    style="width:120px">
                                    <label id="label_43_col_2"> Average </label>
                                </th>
                                <th scope="col"
                                    class="form-matrix-headers form-matrix-column-headers form-matrix-column_3"
                                    style="width:120px">
                                    <label id="label_43_col_3"> Below Average </label>
                                </th>
                                <th scope="col"
                                    class="form-matrix-headers form-matrix-column-headers form-matrix-column_4"
                                    style="width:120px">
                                    <label id="label_43_col_4"> Significantly Below </label>
                                </th>
                            </tr>
                            <tr class="form-matrix-tr form-matrix-value-tr"
                                aria-labelledby="label_43 label_43_row_0">
                                <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                    <label id="label_43_row_0"> Spelling </label>
                                </th>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_43_0_0" class="form-radio"
                                        name="q43_writtenLanguage[0]" value="Exceptional" <?php echo ($_POST['q43_writtenLanguage'][0] == 'Exceptional') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_43_col_0 label_43_row_0">
                                    <label for="input_43_0_0" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_43_0_1" class="form-radio"
                                        name="q43_writtenLanguage[0]" value="Above Average" <?php echo ($_POST['q43_writtenLanguage'][0] == 'Above Average') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_43_col_1 label_43_row_0">
                                    <label for="input_43_0_1" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_43_0_2" class="form-radio"
                                        name="q43_writtenLanguage[0]" value="Average" <?php echo ($_POST['q43_writtenLanguage'][0] == 'Average') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_43_col_2 label_43_row_0">
                                    <label for="input_43_0_2" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_43_0_3" class="form-radio"
                                        name="q43_writtenLanguage[0]" value="Below Average" <?php echo ($_POST['q43_writtenLanguage'][0] == 'Below Average') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_43_col_3 label_43_row_0">
                                    <label for="input_43_0_3" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_43_0_4" class="form-radio"
                                        name="q43_writtenLanguage[0]" value="Significantly Below" <?php echo ($_POST['q43_writtenLanguage'][0] == 'Significantly Below') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_43_col_4 label_43_row_0">
                                    <label for="input_43_0_4" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                            </tr>
                            <tr class="form-matrix-tr form-matrix-value-tr"
                                aria-labelledby="label_43 label_43_row_1">
                                <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                    <label id="label_43_row_1"> Sentence structure/grammar </label>
                                </th>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_43_1_0" class="form-radio"
                                        name="q43_writtenLanguage[1]" value="Exceptional" <?php echo ($_POST['q43_writtenLanguage'][1] == 'Exceptional') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_43_col_0 label_43_row_1">
                                    <label for="input_43_1_0" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_43_1_1" class="form-radio"
                                        name="q43_writtenLanguage[1]" value="Above Average" <?php echo ($_POST['q43_writtenLanguage'][1] == 'Above Average') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_43_col_1 label_43_row_1">
                                    <label for="input_43_1_1" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_43_1_2" class="form-radio"
                                        name="q43_writtenLanguage[1]" value="Average" <?php echo ($_POST['q43_writtenLanguage'][1] == 'Average') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_43_col_2 label_43_row_1">
                                    <label for="input_43_1_2" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_43_1_3" class="form-radio"
                                        name="q43_writtenLanguage[1]" value="Below Average" <?php echo ($_POST['q43_writtenLanguage'][1] == 'Below Average') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_43_col_3 label_43_row_1">
                                    <label for="input_43_1_3" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_43_1_4" class="form-radio"
                                        name="q43_writtenLanguage[1]" value="Significantly Below" <?php echo ($_POST['q43_writtenLanguage'][1] == 'Significantly Below') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_43_col_4 label_43_row_1">
                                    <label for="input_43_1_4" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                            </tr>
                            <tr class="form-matrix-tr form-matrix-value-tr"
                                aria-labelledby="label_43 label_43_row_2">
                                <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                    <label id="label_43_row_2"> Creative writing </label>
                                </th>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_43_2_0" class="form-radio"
                                        name="q43_writtenLanguage[2]" value="Exceptional" <?php echo ($_POST['q43_writtenLanguage'][2] == 'Exceptional') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_43_col_0 label_43_row_2">
                                    <label for="input_43_2_0" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_43_2_1" class="form-radio"
                                        name="q43_writtenLanguage[2]" value="Above Average" <?php echo ($_POST['q43_writtenLanguage'][2] == 'Above Average') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_43_col_1 label_43_row_2">
                                    <label for="input_43_2_1" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_43_2_2" class="form-radio"
                                        name="q43_writtenLanguage[2]" value="Average" <?php echo ($_POST['q43_writtenLanguage'][2] == 'Average') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_43_col_2 label_43_row_2">
                                    <label for="input_43_2_2" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_43_2_3" class="form-radio"
                                        name="q43_writtenLanguage[2]" value="Below Average" <?php echo ($_POST['q43_writtenLanguage'][2] == 'Below Average') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_43_col_3 label_43_row_2">
                                    <label for="input_43_2_3" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_43_2_4" class="form-radio"
                                        name="q43_writtenLanguage[2]" value="Significantly Below" <?php echo ($_POST['q43_writtenLanguage'][2] == 'Significantly Below') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_43_col_4 label_43_row_2">
                                    <label for="input_43_2_4" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                            </tr>
                            <tr class="form-matrix-tr form-matrix-value-tr"
                                aria-labelledby="label_43 label_43_row_3">
                                <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                    <label id="label_43_row_3"> Handwriting </label>
                                </th>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_43_3_0" class="form-radio"
                                        name="q43_writtenLanguage[3]" value="Exceptional" <?php echo ($_POST['q43_writtenLanguage'][3] == 'Exceptional') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_43_col_0 label_43_row_3">
                                    <label for="input_43_3_0" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_43_3_1" class="form-radio"
                                        name="q43_writtenLanguage[3]" value="Above Average" <?php echo ($_POST['q43_writtenLanguage'][3] == 'Above Average') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_43_col_1 label_43_row_3">
                                    <label for="input_43_3_1" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_43_3_2" class="form-radio"
                                        name="q43_writtenLanguage[3]" value="Average" <?php echo ($_POST['q43_writtenLanguage'][3] == 'Average') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_43_col_2 label_43_row_3">
                                    <label for="input_43_3_2" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_43_3_3" class="form-radio"
                                        name="q43_writtenLanguage[3]" value="Below Average" <?php echo ($_POST['q43_writtenLanguage'][3] == 'Below Average') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_43_col_3 label_43_row_3">
                                    <label for="input_43_3_3" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_43_3_4" class="form-radio"
                                        name="q43_writtenLanguage[3]" value="Significantly Below" <?php echo ($_POST['q43_writtenLanguage'][3] == 'Significantly Below') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_43_col_4 label_43_row_3">
                                    <label for="input_43_3_4" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                            </tr>
                            <tr class="form-matrix-tr form-matrix-value-tr"
                                aria-labelledby="label_43 label_43_row_4">
                                <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                    <label id="label_43_row_4"> Organization </label>
                                </th>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_43_4_0" class="form-radio"
                                        name="q43_writtenLanguage[4]" value="Exceptional" <?php echo ($_POST['q43_writtenLanguage'][4] == 'Exceptional') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_43_col_0 label_43_row_4">
                                    <label for="input_43_4_0" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_43_4_1" class="form-radio"
                                        name="q43_writtenLanguage[4]" value="Above Average" <?php echo ($_POST['q43_writtenLanguage'][4] == 'Above Average') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_43_col_1 label_43_row_4">
                                    <label for="input_43_4_1" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_43_4_2" class="form-radio"
                                        name="q43_writtenLanguage[4]" value="Average" <?php echo ($_POST['q43_writtenLanguage'][4] == 'Average') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_43_col_2 label_43_row_4">
                                    <label for="input_43_4_2" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_43_4_3" class="form-radio"
                                        name="q43_writtenLanguage[4]" value="Below Average" <?php echo ($_POST['q43_writtenLanguage'][4] == 'Below Average') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_43_col_3 label_43_row_4">
                                    <label for="input_43_4_3" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_43_4_4" class="form-radio"
                                        name="q43_writtenLanguage[4]" value="Significantly Below" <?php echo ($_POST['q43_writtenLanguage'][4] == 'Significantly Below') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_43_col_4 label_43_row_4">
                                    <label for="input_43_4_4" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </li>
            <li class="form-line" data-type="control_matrix" id="id_44">
                <label class="form-label form-label-top form-label-auto" id="label_44" for="input_44"> Other
                    Academic Areas </label>
                <div id="cid_44" class="form-input-wide" data-layout="full">
                    <table summary="" aria-labelledby="label_44" cellpadding="4" cellspacing="0"
                        class="form-matrix-table" data-component="matrix">
                        <tbody>
                            <tr class="form-matrix-tr form-matrix-header-tr">
                                <th class="form-matrix-th" style="border:none">
                                    &nbsp;
                                </th>
                                <th scope="col"
                                    class="form-matrix-headers form-matrix-column-headers form-matrix-column_0"
                                    style="width:110px">
                                    <label id="label_44_col_0"> Exceptional </label>
                                </th>
                                <th scope="col"
                                    class="form-matrix-headers form-matrix-column-headers form-matrix-column_1"
                                    style="width:110px">
                                    <label id="label_44_col_1"> Above Average </label>
                                </th>
                                <th scope="col"
                                    class="form-matrix-headers form-matrix-column-headers form-matrix-column_2"
                                    style="width:110px">
                                    <label id="label_44_col_2"> Average </label>
                                </th>
                                <th scope="col"
                                    class="form-matrix-headers form-matrix-column-headers form-matrix-column_3"
                                    style="width:110px">
                                    <label id="label_44_col_3"> Below Average </label>
                                </th>
                                <th scope="col"
                                    class="form-matrix-headers form-matrix-column-headers form-matrix-column_4"
                                    style="width:110px">
                                    <label id="label_44_col_4"> Significantly Below </label>
                                </th>
                            </tr>
                            <tr class="form-matrix-tr form-matrix-value-tr"
                                aria-labelledby="label_44 label_44_row_0">
                                <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                    <label id="label_44_row_0"> Science </label>
                                </th>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_44_0_0" class="form-radio"
                                        name="q44_otherAcademic[0]" value="Exceptional" <?php echo ($_POST['q44_otherAcademic'][0] == 'Exceptional') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_44_col_0 label_44_row_0">
                                    <label for="input_44_0_0" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_44_0_1" class="form-radio"
                                        name="q44_otherAcademic[0]" value="Above Average" <?php echo ($_POST['q44_otherAcademic'][0] == 'Above Average') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_44_col_1 label_44_row_0">
                                    <label for="input_44_0_1" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_44_0_2" class="form-radio"
                                        name="q44_otherAcademic[0]" value="Average" <?php echo ($_POST['q44_otherAcademic'][0] == 'Average') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_44_col_2 label_44_row_0">
                                    <label for="input_44_0_2" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_44_0_3" class="form-radio"
                                        name="q44_otherAcademic[0]" value="Below Average" <?php echo ($_POST['q44_otherAcademic'][0] == 'Below Average') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_44_col_3 label_44_row_0">
                                    <label for="input_44_0_3" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_44_0_4" class="form-radio"
                                        name="q44_otherAcademic[0]" value="Significantly Below" <?php echo ($_POST['q44_otherAcademic'][0] == 'Significantly Below') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_44_col_4 label_44_row_0">
                                    <label for="input_44_0_4" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                            </tr>
                            <tr class="form-matrix-tr form-matrix-value-tr"
                                aria-labelledby="label_44 label_44_row_1">
                                <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                    <label id="label_44_row_1"> Foreign Language </label>
                                </th>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_44_1_0" class="form-radio"
                                        name="q44_otherAcademic[1]" value="Exceptional" <?php echo ($_POST['q44_otherAcademic'][1] == 'Exceptional') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_44_col_0 label_44_row_1">
                                    <label for="input_44_1_0" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_44_1_1" class="form-radio"
                                        name="q44_otherAcademic[1]" value="Above Average" <?php echo ($_POST['q44_otherAcademic'][1] == 'Above Average') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_44_col_1 label_44_row_1">
                                    <label for="input_44_1_1" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_44_1_2" class="form-radio"
                                        name="q44_otherAcademic[1]" value="Average" <?php echo ($_POST['q44_otherAcademic'][1] == 'Average') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_44_col_2 label_44_row_1">
                                    <label for="input_44_1_2" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_44_1_3" class="form-radio"
                                        name="q44_otherAcademic[1]" value="Below Average" <?php echo ($_POST['q44_otherAcademic'][1] == 'Below Average') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_44_col_3 label_44_row_1">
                                    <label for="input_44_1_3" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_44_1_4" class="form-radio"
                                        name="q44_otherAcademic[1]" value="Significantly Below" <?php echo ($_POST['q44_otherAcademic'][1] == 'Significantly Below') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_44_col_4 label_44_row_1">
                                    <label for="input_44_1_4" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                            </tr>
                            <tr class="form-matrix-tr form-matrix-value-tr"
                                aria-labelledby="label_44 label_44_row_2">
                                <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                    <label id="label_44_row_2"> Social Studies </label>
                                </th>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_44_2_0" class="form-radio"
                                        name="q44_otherAcademic[2]" value="Exceptional" <?php echo ($_POST['q44_otherAcademic'][2] == 'Exceptional') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_44_col_0 label_44_row_2">
                                    <label for="input_44_2_0" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_44_2_1" class="form-radio"
                                        name="q44_otherAcademic[2]" value="Above Average" <?php echo ($_POST['q44_otherAcademic'][2] == 'Above Average') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_44_col_1 label_44_row_2">
                                    <label for="input_44_2_1" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_44_2_2" class="form-radio"
                                        name="q44_otherAcademic[2]" value="Average" <?php echo ($_POST['q44_otherAcademic'][2] == 'Average') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_44_col_2 label_44_row_2">
                                    <label for="input_44_2_2" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_44_2_3" class="form-radio"
                                        name="q44_otherAcademic[2]" value="Below Average" <?php echo ($_POST['q44_otherAcademic'][2] == 'Below Average') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_44_col_3 label_44_row_2">
                                    <label for="input_44_2_3" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_44_2_4" class="form-radio"
                                        name="q44_otherAcademic[2]" value="Significantly Below" <?php echo ($_POST['q44_otherAcademic'][2] == 'Significantly Below') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_44_col_4 label_44_row_2">
                                    <label for="input_44_2_4" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                            </tr>
                            <tr class="form-matrix-tr form-matrix-value-tr"
                                aria-labelledby="label_44 label_44_row_3">
                                <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                    <label id="label_44_row_3"> Art </label>
                                </th>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_44_3_0" class="form-radio"
                                        name="q44_otherAcademic[3]" value="Exceptional" <?php echo ($_POST['q44_otherAcademic'][3] == 'Exceptional') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_44_col_0 label_44_row_3">
                                    <label for="input_44_3_0" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_44_3_1" class="form-radio"
                                        name="q44_otherAcademic[3]" value="Above Average" <?php echo ($_POST['q44_otherAcademic'][3] == 'Above Average') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_44_col_1 label_44_row_3">
                                    <label for="input_44_3_1" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_44_3_2" class="form-radio"
                                        name="q44_otherAcademic[3]" value="Average" <?php echo ($_POST['q44_otherAcademic'][3] == 'Average') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_44_col_2 label_44_row_3">
                                    <label for="input_44_3_2" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_44_3_3" class="form-radio"
                                        name="q44_otherAcademic[3]" value="Below Average" <?php echo ($_POST['q44_otherAcademic'][3] == 'Below Average') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_44_col_3 label_44_row_3">
                                    <label for="input_44_3_3" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_44_3_4" class="form-radio"
                                        name="q44_otherAcademic[3]" value="Significantly Below" <?php echo ($_POST['q44_otherAcademic'][3] == 'Significantly Below') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_44_col_4 label_44_row_3">
                                    <label for="input_44_3_4" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                            </tr>
                            <tr class="form-matrix-tr form-matrix-value-tr"
                                aria-labelledby="label_44 label_44_row_4">
                                <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                    <label id="label_44_row_4"> Physical Education </label>
                                </th>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_44_4_0" class="form-radio"
                                        name="q44_otherAcademic[4]" value="Exceptional" <?php echo ($_POST['q44_otherAcademic'][4] == 'Exceptional') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_44_col_0 label_44_row_4">
                                    <label for="input_44_4_0" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_44_4_1" class="form-radio"
                                        name="q44_otherAcademic[4]" value="Above Average" <?php echo ($_POST['q44_otherAcademic'][4] == 'Above Average') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_44_col_1 label_44_row_4">
                                    <label for="input_44_4_1" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_44_4_2" class="form-radio"
                                        name="q44_otherAcademic[4]" value="Average" <?php echo ($_POST['q44_otherAcademic'][4] == 'Average') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_44_col_2 label_44_row_4">
                                    <label for="input_44_4_2" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_44_4_3" class="form-radio"
                                        name="q44_otherAcademic[4]" value="Below Average" <?php echo ($_POST['q44_otherAcademic'][4] == 'Below Average') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_44_col_3 label_44_row_4">
                                    <label for="input_44_4_3" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                                <td class="form-matrix-values">
                                    <input type="radio" id="input_44_4_4" class="form-radio"
                                        name="q44_otherAcademic[4]" value="Significantly Below" <?php echo ($_POST['q44_otherAcademic'][4] == 'Significantly Below') ? 'checked="checked"' : ''; ?>
                                        aria-labelledby="label_44_col_4 label_44_row_4">
                                    <label for="input_44_4_4" class="matrix-choice-label matrix-radio-label">
                                    </label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </li>
            <li class="form-line" data-type="control_checkbox" id="id_45">
                <label class="form-label form-label-top" id="label_45" for="input_45"> Does this student receive any
                    of the following services <?php echo (empty($_POST)) ? '(Check all that apply)' : ''; ?></label>
                <div id="cid_45" class="form-input-wide" data-layout="full">
                    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_45"
                        data-component="checkbox">

                    <?php echo (!empty($_POST['q45_doesThis'])) ? '<ol>' : ''; ?>
                        <span class="form-checkbox-item">
                            <span class="dragger-item"></span>
                                <?php if (!empty($_POST['q45_doesThis'])): ?>
                                    <?php echo (in_array('504 plan', $_POST['q45_doesThis'])) ? '<li>504 plan</li>' : ''; ?>
                                <?php else: ?>
                                    <input type="checkbox" aria-describedby="label_45" class="form-checkbox" id="input_45_0" name="q45_doesThis[]" value="504 plan">
                                    <label id="label_input_45_0" for="input_45_0"> 504 plan </label>
                                <?php endif; ?>
                        </span>
                        <span class="form-checkbox-item">
                            <span class="dragger-item"></span>
                                <?php if (!empty($_POST['q45_doesThis'])): ?>
                                    <?php echo (in_array('IEP', $_POST['q45_doesThis'])) ? '<li>IEP</li>' : ''; ?>
                                <?php else: ?>
                                    <input type="checkbox" aria-describedby="label_45" class="form-checkbox" id="input_45_1" name="q45_doesThis[]" value="IEP">
                                    <label id="label_input_45_1" for="input_45_1"> IEP </label>
                                <?php endif; ?>
                        </span>
                        <span class="form-checkbox-item" style="clear:left">
                            <span class="dragger-item"></span>
                                <?php if (!empty($_POST['q45_doesThis'])): ?>
                                    <?php echo (in_array('Counseling', $_POST['q45_doesThis'])) ? '<li>Counseling</li>' : ''; ?>
                                <?php else: ?>
                                    <input type="checkbox" aria-describedby="label_45" class="form-checkbox" id="input_45_2" name="q45_doesThis[]" value="Counseling">
                                    <label id="label_input_45_2" for="input_45_2"> Counseling </label>
                                <?php endif; ?>
                        </span>
                        <span class="form-checkbox-item">
                            <span class="dragger-item"></span>
                                <?php if (!empty($_POST['q45_doesThis'])): ?>
                                    <?php echo (in_array('Specialized Reading Instruction', $_POST['q45_doesThis'])) ? '<li>Specialized Reading Instruction</li>' : ''; ?>
                                <?php else: ?>
                                    <input type="checkbox" aria-describedby="label_45" class="form-checkbox" id="input_45_3" name="q45_doesThis[]" value="Specialized Reading Instruction">
                                    <label id="label_input_45_3" for="input_45_3"> Specialized Reading Instruction </label>
                                <?php endif; ?>
                        </span>
                        <span class="form-checkbox-item" style="clear:left">
                            <span class="dragger-item"></span>
                                <?php if (!empty($_POST['q45_doesThis'])): ?>
                                    <?php echo (in_array('Speech/Language Services Recovery', $_POST['q45_doesThis'])) ? '<li>Speech/Language Services Recovery</li>' : ''; ?>
                                <?php else: ?>
                                    <input type="checkbox" aria-describedby="label_45" class="form-checkbox" id="input_45_4" name="q45_doesThis[]" value="Speech/Language Services Recovery">
                                    <label id="label_input_45_4" for="input_45_4"> Speech/Language Services Recovery
                                <?php endif; ?>
                            </label>
                        </span>
                        <span class="form-checkbox-item">
                            <span class="dragger-item"></span>
                                <?php if (!empty($_POST['q45_doesThis'])): ?>
                                    <?php echo (in_array('Specialized Math Instruction', $_POST['q45_doesThis'])) ? '<li>Specialized Math Instruction</li>' : ''; ?>
                                <?php else: ?>
                                    <input type="checkbox" aria-describedby="label_45" class="form-checkbox" id="input_45_5" name="q45_doesThis[]" value="Specialized Math Instruction">
                                    <label id="label_input_45_5" for="input_45_5"> Specialized Math Instruction </label>
                                <?php endif; ?>
                        </span>
                        <span class="form-checkbox-item" style="clear:left">
                            <span class="dragger-item"></span>
                                <?php if (!empty($_POST['q45_doesThis'])): ?>
                                    <?php echo (in_array('Learning Resource Classroom', $_POST['q45_doesThis'])) ? '<li>Learning Resource Classroom</li>' : ''; ?>
                                <?php else: ?>
                                    <input type="checkbox" aria-describedby="label_45" class="form-checkbox" id="input_45_6" name="q45_doesThis[]" value="Learning Resource Classroom">
                                    <label id="label_input_45_6" for="input_45_6"> Learning Resource Classroom </label>
                                <?php endif; ?>
                        </span>
                        <span class="form-checkbox-item">
                            <span class="dragger-item"></span>
                                <?php if (!empty($_POST['q45_doesThis'])): ?>
                                    <?php echo (in_array('Occupational Therapy', $_POST['q45_doesThis'])) ? '<li>Occupational Therapy</li>' : ''; ?>
                                <?php else: ?>
                                    <input type="checkbox" aria-describedby="label_45" class="form-checkbox" id="input_45_7" name="q45_doesThis[]" value="Occupational Therapy">
                                    <label id="label_input_45_7" for="input_45_7"> Occupational Therapy </label>
                                <?php endif; ?>
                        </span>
                        <span class="form-checkbox-item" style="clear:left">
                            <span class="dragger-item"></span>
                                <?php if (!empty($_POST['q45_doesThis'])): ?>
                                    <?php echo (in_array('Physical Therapy', $_POST['q45_doesThis'])) ? '<li>Physical Therapy</li>' : ''; ?>
                                <?php else: ?>
                                    <input type="checkbox" aria-describedby="label_45" class="form-checkbox" id="input_45_8" name="q45_doesThis[]" value="Physical Therapy">
                                    <label id="label_input_45_8" for="input_45_8"> Physical Therapy </label>
                                <?php endif; ?>
                        </span>
                        <span class="form-checkbox-item">
                            <span class="dragger-item"></span>
                                <?php if (!empty($_POST['q45_doesThis'])): ?>
                                    <?php echo (in_array('Self-contained Classroom', $_POST['q45_doesThis'])) ? '<li>Self-contained Classroom</li>' : ''; ?>
                                <?php else: ?>
                                    <input type="checkbox" aria-describedby="label_45" class="form-checkbox" id="input_45_9" name="q45_doesThis[]" value="Self-contained Classroom">
                                    <label id="label_input_45_9" for="input_45_9"> Self-contained Classroom </label>
                                <?php endif; ?>
                        </span>
                        <span class="form-checkbox-item formCheckboxOther">
                            <input type="checkbox" class="form-checkbox-other form-checkbox"
                                name="q45_doesThis[other]" id="other_45" value="other" tabindex="0"
                                aria-label="Other">
                            <label id="label_other_45" style="text-indent:0" for="other_45"> Other </label>
                            <?php if (!empty($_POST['q45_doesThis']['other'])): ?>
                                <?php echo '('.$_POST['q45_doesThis']['other'].')'; ?>
                            <?php else: ?>
                                <span id="other_45_input" class="other-input-container is-none">
                                    <input type="text" class="form-checkbox-other-input form-textbox"
                                        name="q45_doesThis[other]" data-otherhint="Other" size="15" id="input_45"
                                        data-placeholder="Please type another option here"
                                        placeholder="Please type another option here">
                                </span>
                            <?php endif; ?>
                        </span>
                    <?php echo (!empty($_POST['q45_doesThis'])) ? '</ol>' : ''; ?>
                    </div>
                </div>
            </li>
            <li class="form-line" data-type="control_matrix" id="id_46">
                <label class="form-label form-label-top form-label-auto" id="label_46" for="input_46"> What do you
                    note as this student’s strengths? Please list. </label>
                <div id="cid_46" class="form-input-wide" data-layout="full">
                    <table summary="" aria-labelledby="label_46" cellpadding="4" cellspacing="0"
                        class="form-matrix-table" data-component="matrix">
                        <tbody>
                            <tr class="form-matrix-tr form-matrix-header-tr">
                                <th class="form-matrix-th" style="border:none">
                                    &nbsp;
                                </th>
                                <th scope="col"
                                    class="form-matrix-headers form-matrix-column-headers form-matrix-column_0">
                                    <label id="label_46_col_0"> Strengths </label>
                                </th>
                            </tr>
                            <tr class="form-matrix-tr form-matrix-value-tr"
                                aria-labelledby="label_46 label_46_row_0">
                                <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                    <label id="label_46_row_0"> 1. </label>
                                </th>
                                <td class="form-matrix-values">
                                    <?php if (!empty($_POST['q46_whatDo'][0][0])): ?>
                                        <b><?php echo $_POST['q46_whatDo'][0][0]; ?></b>
                                    <?php else: ?>
                                        <input type="text" id="input_46_0_0" class="form-textbox" size="5"
                                            name="q46_whatDo[0][]" style="width:100%;box-sizing:border-box" value=""
                                            aria-labelledby="label_46_col_0 label_46_row_0">
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr class="form-matrix-tr form-matrix-value-tr"
                                aria-labelledby="label_46 label_46_row_1">
                                <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                    <label id="label_46_row_1"> 2. </label>
                                </th>
                                <td class="form-matrix-values">
                                    <?php if (!empty($_POST['q46_whatDo'][1][0])): ?>
                                        <b><?php echo $_POST['q46_whatDo'][1][0]; ?></b>
                                    <?php else: ?>
                                        <input type="text" id="input_46_1_0" class="form-textbox" size="5"
                                            name="q46_whatDo[1][]" style="width:100%;box-sizing:border-box" value=""
                                            aria-labelledby="label_46_col_0 label_46_row_1">
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr class="form-matrix-tr form-matrix-value-tr"
                                aria-labelledby="label_46 label_46_row_2">
                                <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                                    <label id="label_46_row_2"> 3. </label>
                                </th>
                                <td class="form-matrix-values">
                                    <?php if (!empty($_POST['q46_whatDo'][2][0])): ?>
                                        <b><?php echo $_POST['q46_whatDo'][2][0]; ?></b>
                                    <?php else: ?>
                                        <input type="text" id="input_46_2_0" class="form-textbox" size="5"
                                            name="q46_whatDo[2][]" style="width:100%;box-sizing:border-box" value=""
                                            aria-labelledby="label_46_col_0 label_46_row_2">
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </li>
            <li class="form-line" data-type="control_textarea" id="id_47">
                <label class="form-label form-label-top form-label-auto" id="label_47" for="input_47"> Please share
                    any other information you feel is important for us to know about this student: </label>
                <div id="cid_47" class="form-input-wide" data-layout="full">
                    <textarea id="input_47" class="form-textarea custom-hint-group form-custom-hint"
                        name="q47_pleaseShare" style="width:648px;height:163px" data-component="textarea"
                        aria-labelledby="label_47" data-customhint="Type here..." customhinted="true"
                        placeholder="Type here..." spellcheck="false"><?php echo (!empty($_POST['q47_pleaseShare'])) ? $_POST['q47_pleaseShare'] : ''; ?></textarea>
                </div>
            </li>
            <?php if (empty($_POST)): ?>
            <li class="form-line" data-type="control_text" id="id_48">
                <div id="cid_48" class="form-input-wide" data-layout="full">
                    <div id="text_48" class="form-html" data-component="text" tabindex="0">
                        <p>Please e-mail (info@thenichollsgroup.com) with any important documents you believe we
                            should review for the student you are grading (handwriting samples, class work, test
                            scores, etc.,) Thank you!</p>
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
            <?php endif; ?>
            <li style="clear:both">
            </li>
            <li style="display:none">
                Should be Empty:
                <input type="text" name="website" value="">
            </li>
        </ul>
    </div>
    <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc"
        value="212727336123046-212727336123046">
    <input type="hidden" name="event_id" value="1681115218961_212727336123046_wxUknhf">
</form>

<?php
$content = ob_get_contents();
get_footer();

$form_id = 2;
require_once 'form-controller.php';
?>
