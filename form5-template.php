<?php /*
* Template Name: Form5 template
* Template Post Type: page
*/

ob_start();
get_header(); ?>
<form
      class="jotform-form"
      action=""
      method="post"
      accept-charset="utf-8"
      autocomplete="on"
      novalidate="true">
  <div role="main" class="form-all">
    <div class="formLogoWrapper Left">
      <!-- <img loading="lazy" class="formLogoImg"
                    src="" height="60"
                    width="60"> -->
    </div>
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group header-large">
          <div class="header-text httac htvam">
            <h1 id="header_1" class="form-header" data-component="header">Intake Form</h1>
          </div>
        </div>
      </li>
      <li class="form-line always-hidden" data-type="control_textbox" id="id_49">
        <label class="form-label form-label-top form-label-auto" id="label_49" for="input_49">INTAKE FORM</label>
        <div id="cid_49" class="form-input-wide always-hidden" data-layout="half">
          <input
                type="text"
                id="input_49"
                name="q49_intakeForm49"
                data-type="input-textbox"
                class="form-textbox"
                data-defaultvalue="Intake Form - EN"
                style="width:310px"
                size="310"
                value="Intake Form - EN"
                data-component="textbox"
                aria-labelledby="label_49">
        </div>
      </li>
      <li id="cid_3" class="form-input-wide" data-type="control_head">
        <div class="form-header-group header-default">
          <div class="header-text httac htvam">
            <h2 id="header_3" class="form-header" data-component="header">PATIENT INFORMATION</h2>
            <div id="subHeader_3" class="form-subHeader">
              This is the information for the patient we will
                                be seeing, if you have not filled out our "Start Here" form then please go back to our
                                forms page and do that first.
            </div>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1 jf-required" data-type="control_textbox" id="id_5">
        <label class="form-label form-label-top" id="label_5" for="input_5">
          Patient Name
          <span class="form-required">*</span>
        </label>
        <div id="cid_5" class="form-input-wide jf-required" data-layout="half">
          <input
                type="text"
                id="input_5"
                name="q5_patientName"
                data-type="input-textbox"
                class="form-textbox validate[required]"
                data-defaultvalue=""
                style="width:310px"
                size="310"
                value=""
                data-component="textbox"
                aria-labelledby="label_5"
                required="">
        </div>
      </li>
      <li class="form-line form-line-column form-col-2 jf-required" data-type="control_datetime" id="id_6">
        <label class="form-label form-label-top" id="label_6" for="lite_mode_6">
          Application Date
          <span class="form-required">*</span>
        </label>
        <div id="cid_6" class="form-input-wide jf-required" data-layout="half">
          <div data-wrapper-react="true">
            <div style="display:none">
              <span class="form-sub-label-container" style="vertical-align:top">
                <input
                      type="tel"
                      class="form-textbox validate[required, limitDate]"
                      id="month_6"
                      name="q6_applicationDate[month]"
                      size="2"
                      data-maxlength="2"
                      data-age=""
                      maxlength="2"
                      value=""
                      required=""
                      autocomplete="section-input_6 off"
                      aria-labelledby="label_6 sublabel_6_month"
                      inputmode="numeric">
                <span class="date-separate" aria-hidden="true">&nbsp;-</span>
                <label class="form-sub-label" for="month_6" id="sublabel_6_month" style="min-height:13px" aria-hidden="false">Month</label>
              </span>
              <span class="form-sub-label-container" style="vertical-align:top">
                <input
                      type="tel"
                      class="form-textbox validate[required, limitDate]"
                      id="day_6"
                      name="q6_applicationDate[day]"
                      size="2"
                      data-maxlength="2"
                      data-age=""
                      maxlength="2"
                      value=""
                      required=""
                      autocomplete="section-input_6 off"
                      aria-labelledby="label_6 sublabel_6_day"
                      inputmode="numeric">
                <span class="date-separate" aria-hidden="true">&nbsp;-</span>
                <label class="form-sub-label" for="day_6" id="sublabel_6_day" style="min-height:13px" aria-hidden="false">Day</label>
              </span>
              <span class="form-sub-label-container" style="vertical-align:top">
                <input
                      type="tel"
                      class="form-textbox validate[required, limitDate]"
                      id="year_6"
                      name="q6_applicationDate[year]"
                      size="4"
                      data-maxlength="4"
                      data-age=""
                      maxlength="4"
                      value=""
                      required=""
                      autocomplete="section-input_6 off"
                      aria-labelledby="label_6 sublabel_6_year">
                <label class="form-sub-label" for="year_6" id="sublabel_6_year" style="min-height:13px" aria-hidden="false">Year</label>
              </span>
            </div>
            <span class="form-sub-label-container" style="vertical-align:top">

            <?php if (!empty($_POST['q6_applicationDate'])): ?>
                <b><?php echo $_POST['q6_applicationDate']['month'] . '-' . $_POST['q6_applicationDate']['day'] . '-' . $_POST['q6_applicationDate']['year']; ?></b>
            <?php else: ?>
                <input
                        type="text"
                        class="form-textbox validate[required, limitDate, validateLiteDate]"
                        id="lite_mode_6"
                        size="12"
                        data-maxlength="12"
                        data-age=""
                        value=""
                        required=""
                        data-format="mmddyyyy"
                        data-seperator="-"
                        placeholder="MM-DD-YYYY"
                        autocomplete="section-input_6 off"
                        aria-labelledby="label_6 sublabel_6_litemode"
                        inputmode="numeric">
                <img
                        class="newDefaultTheme-dateIcon icon-liteMode"
                        alt="Pick a Date"
                        id="input_6_pick"
                        src="./Intake Form - EN_files/calendar.png"
                        data-component="datetime"
                        aria-hidden="true"
                        data-allow-time="No"
                        data-version="v2">
                <label
                        class="form-sub-label"
                        for="lite_mode_6"
                        id="sublabel_6_litemode"
                        style="min-height:13px"
                        aria-hidden="false">Date</label>
            <?php endif; ?>   
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_address" id="id_50">
        <label class="form-label form-label-top form-label-auto" id="label_50" for="input_50_addr_line1">
          Patient Address
          <span class="form-required">*</span>
        </label>
        <div id="cid_50" class="form-input-wide jf-required" data-layout="full">
          <div summary="" class="form-address-table jsTest-addressField">
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-street-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                    <?php if (!empty($_POST['q50_patientAddress']['addr_line1'])): ?>
                        <b><?php echo $_POST['q50_patientAddress']['addr_line1']; ?></b>
                    <?php else: ?>
                        <input
                                type="text"
                                id="input_50_addr_line1"
                                name="q50_patientAddress[addr_line1]"
                                class="form-textbox validate[required] form-address-line"
                                data-defaultvalue=""
                                autocomplete="section-input_50 address-line1"
                                value=""
                                data-component="address_line_1"
                                aria-labelledby="label_50 sublabel_50_addr_line1"
                                required="">
                        <label
                                class="form-sub-label"
                                for="input_50_addr_line1"
                                id="sublabel_50_addr_line1"
                                style="min-height:13px"
                                aria-hidden="false">
                            Street
                                                    Address
                        </label>
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
                        <input
                                type="text"
                                id="input_50_addr_line2"
                                name="q50_patientAddress[addr_line2]"
                                class="form-textbox form-address-line"
                                data-defaultvalue=""
                                autocomplete="section-input_50 address-line2"
                                value=""
                                data-component="address_line_2"
                                aria-labelledby="label_50 sublabel_50_addr_line2">
                        <label
                                class="form-sub-label"
                                for="input_50_addr_line2"
                                id="sublabel_50_addr_line2"
                                style="min-height:13px"
                                aria-hidden="false">
                            Street Address Line 2
                        </label>
                    <?php endif; ?>   
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-city-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                    <?php if (!empty($_POST['q50_patientAddress']['city'])): ?>
                        <b><?php echo $_POST['q50_patientAddress']['city']; ?></b>
                    <?php else: ?>
                        <input
                                type="text"
                                id="input_50_city"
                                name="q50_patientAddress[city]"
                                class="form-textbox validate[required] form-address-city"
                                data-defaultvalue=""
                                autocomplete="section-input_50 address-level2"
                                value=""
                                data-component="city"
                                aria-labelledby="label_50 sublabel_50_city"
                                required="">
                        <label
                                class="form-sub-label"
                                for="input_50_city"
                                id="sublabel_50_city"
                                style="min-height:13px"
                                aria-hidden="false">City</label>
                    <?php endif; ?>   
                </span>
              </span>
              <span class="form-address-line form-address-state-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                    <?php if (!empty($_POST['q50_patientAddress']['state'])): ?>
                        <b><?php echo $_POST['q50_patientAddress']['state']; ?></b>
                    <?php else: ?>
                        <input
                                type="text"
                                id="input_50_state"
                                name="q50_patientAddress[state]"
                                class="form-textbox validate[required] form-address-state"
                                data-defaultvalue=""
                                autocomplete="section-input_50 address-level1"
                                value=""
                                data-component="state"
                                aria-labelledby="label_50 sublabel_50_state"
                                required="">
                        <label
                                class="form-sub-label"
                                for="input_50_state"
                                id="sublabel_50_state"
                                style="min-height:13px"
                                aria-hidden="false">
                            State / Province
                        </label>
                    <?php endif; ?>   
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-zip-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                    <?php if (!empty($_POST['q50_patientAddress']['postal'])): ?>
                        <b><?php echo $_POST['q50_patientAddress']['postal']; ?></b>
                    <?php else: ?>
                        <input
                                type="text"
                                id="input_50_postal"
                                name="q50_patientAddress[postal]"
                                class="form-textbox validate[required] form-address-postal"
                                data-defaultvalue=""
                                autocomplete="section-input_50 postal-code"
                                value=""
                                data-component="zip"
                                aria-labelledby="label_50 sublabel_50_postal"
                                required="">
                        <label
                                class="form-sub-label"
                                for="input_50_postal"
                                id="sublabel_50_postal"
                                style="min-height:13px"
                                aria-hidden="false">
                            Postal /
                                                    Zip Code
                        </label>
                    <?php endif; ?>   
                </span>
              </span>
            </div>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1 jf-required" data-type="control_phone" id="id_51">
        <label class="form-label form-label-top" id="label_51" for="input_51_full">
          Home Phone/Cell
                        Phone
          <span class="form-required">*</span>
        </label>
        <div id="cid_51" class="form-input-wide jf-required" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <?php if (!empty($_POST['q51_homePhonecell']['full'])): ?>
                <b><?php echo $_POST['q51_homePhonecell']['full']; ?></b>
            <?php else: ?>
                <input
                    type="tel"
                    id="input_51_full"
                    name="q51_homePhonecell[full]"
                    data-type="mask-number"
                    class="mask-phone-number form-textbox validate[required, Fill Mask]"
                    data-defaultvalue=""
                    autocomplete="section-input_51 tel-national"
                    style="width:310px"
                    data-masked="true"
                    value=""
                    placeholder="(000) 000-0000"
                    data-component="phone"
                    aria-labelledby="label_51 sublabel_51_masked"
                    required=""
                    inputmode="text"
                    maskvalue="(###) ###-####">
                <label
                    class="form-sub-label"
                    for="input_51_full"
                    id="sublabel_51_masked"
                    style="min-height:13px"
                    aria-hidden="false">
                Please enter a valid
                                    phone number.
                </label>
            <?php endif; ?>   
          </span>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_phone" id="id_52">
        <label class="form-label form-label-top" id="label_52" for="input_52_full">Work Phone</label>
        <div id="cid_52" class="form-input-wide" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <?php if (!empty($_POST['q52_workPhone']['full'])): ?>
                <b><?php echo $_POST['q52_workPhone']['full']; ?></b>
            <?php else: ?>
                <input
                    type="tel"
                    id="input_52_full"
                    name="q52_workPhone[full]"
                    data-type="mask-number"
                    class="mask-phone-number form-textbox validate[Fill Mask]"
                    data-defaultvalue=""
                    autocomplete="section-input_52 tel-national"
                    style="width:310px"
                    data-masked="true"
                    value=""
                    placeholder="(000) 000-0000"
                    data-component="phone"
                    aria-labelledby="label_52 sublabel_52_masked"
                    inputmode="text"
                    maskvalue="(###) ###-####">
                <label
                    class="form-sub-label"
                    for="input_52_full"
                    id="sublabel_52_masked"
                    style="min-height:13px"
                    aria-hidden="false">
                Please enter a valid
                                    phone number.
                </label>
            <?php endif; ?> 
          </span>
        </div>
      </li>
      <li class="form-line form-line-column form-col-3 jf-required" data-type="control_datetime" id="id_54">
        <label class="form-label form-label-top" id="label_54" for="lite_mode_54">
          Date of Birth
          <span class="form-required">*</span>
        </label>
        <div id="cid_54" class="form-input-wide jf-required" data-layout="half">
          <div data-wrapper-react="true">
            <div style="display:none">
              <span class="form-sub-label-container" style="vertical-align:top">
                <input
                      type="tel"
                      class="form-textbox validate[required, limitDate]"
                      id="month_54"
                      name="q54_dateOf[month]"
                      size="2"
                      data-maxlength="2"
                      data-age=""
                      maxlength="2"
                      value=""
                      required=""
                      autocomplete="section-input_54 off"
                      aria-labelledby="label_54 sublabel_54_month"
                      inputmode="numeric">
                <span class="date-separate" aria-hidden="true">&nbsp;-</span>
                <label class="form-sub-label" for="month_54" id="sublabel_54_month" style="min-height:13px" aria-hidden="false">Month</label>
              </span>
              <span class="form-sub-label-container" style="vertical-align:top">
                <input
                      type="tel"
                      class="form-textbox validate[required, limitDate]"
                      id="day_54"
                      name="q54_dateOf[day]"
                      size="2"
                      data-maxlength="2"
                      data-age=""
                      maxlength="2"
                      value=""
                      required=""
                      autocomplete="section-input_54 off"
                      aria-labelledby="label_54 sublabel_54_day"
                      inputmode="numeric">
                <span class="date-separate" aria-hidden="true">&nbsp;-</span>
                <label class="form-sub-label" for="day_54" id="sublabel_54_day" style="min-height:13px" aria-hidden="false">Day</label>
              </span>
              <span class="form-sub-label-container" style="vertical-align:top">
                <input
                      type="tel"
                      class="form-textbox validate[required, limitDate]"
                      id="year_54"
                      name="q54_dateOf[year]"
                      size="4"
                      data-maxlength="4"
                      data-age=""
                      maxlength="4"
                      value=""
                      required=""
                      autocomplete="section-input_54 off"
                      aria-labelledby="label_54 sublabel_54_year">
                <label class="form-sub-label" for="year_54" id="sublabel_54_year" style="min-height:13px" aria-hidden="false">Year</label>
              </span>
            </div>
            <span class="form-sub-label-container" style="vertical-align:top">
                <?php if (!empty($_POST['q54_dateOf'])): ?>
                    <b><?php echo $_POST['q54_dateOf']['month'] . '-' . $_POST['q54_dateOf']['day'] . '-' . $_POST['q54_dateOf']['year']; ?></b>
                <?php else: ?>
                    <input
                            type="text"
                            class="form-textbox validate[required, limitDate, validateLiteDate]"
                            id="lite_mode_54"
                            size="12"
                            data-maxlength="12"
                            data-age=""
                            value=""
                            required=""
                            data-format="mmddyyyy"
                            data-seperator="-"
                            placeholder="MM-DD-YYYY"
                            autocomplete="section-input_54 off"
                            aria-labelledby="label_54 sublabel_54_litemode"
                            inputmode="numeric">
                    <img
                            class="newDefaultTheme-dateIcon icon-liteMode"
                            alt="Pick a Date"
                            id="input_54_pick"
                            src="./Intake Form - EN_files/calendar.png"
                            data-component="datetime"
                            aria-hidden="true"
                            data-allow-time="No"
                            data-version="v2">
                    <label
                            class="form-sub-label"
                            for="lite_mode_54"
                            id="sublabel_54_litemode"
                            style="min-height:13px"
                            aria-hidden="false">Date</label>
                <?php endif; ?>   
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-4" data-type="control_email" id="id_53">
        <label class="form-label form-label-top" id="label_53" for="input_53">Email</label>
        <div id="cid_53" class="form-input-wide" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <?php if (!empty($_POST['q53_email'])): ?>
                <b><?php echo $_POST['q53_email']; ?></b>
            <?php else: ?>
                <input
                    type="email"
                    id="input_53"
                    name="q53_email"
                    class="form-textbox validate[Email]"
                    data-defaultvalue=""
                    style="width:310px"
                    size="310"
                    value=""
                    data-component="email"
                    aria-labelledby="label_53 sublabel_input_53">
                <label class="form-sub-label" for="input_53" id="sublabel_input_53" style="min-height:13px" aria-hidden="false">example@example.com</label>
            <?php endif; ?> 
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_56">
        <label class="form-label form-label-top form-label-auto" id="label_56" for="input_56">
          Marital Status
                        of Patient
          <span class="form-required">*</span>
        </label>
        <div id="cid_56" class="form-input-wide jf-required" data-layout="full">
          <div
                class="form-multiple-column"
                data-columncount="2"
                role="group"
                aria-labelledby="label_56"
                data-component="radio">
            <span class="form-radio-item">
              <span class="dragger-item"></span>
              <input
                    <?php echo ( $_POST['q56_maritalStatus56'] == "Single" ) ? 'checked="checked"' : ''; ?>
                    type="radio"
                    aria-describedby="label_56"
                    class="form-radio validate[required]"
                    id="input_56_0"
                    name="q56_maritalStatus56"
                    value="Single"
                    required="">
              <label id="label_input_56_0" for="input_56_0">Single</label>
            </span>
            <span class="form-radio-item">
              <span class="dragger-item"></span>
              <input
                    <?php echo ( $_POST['q56_maritalStatus56'] == "Married/Domestic Partnership" ) ? 'checked="checked"' : ''; ?>
                    type="radio"
                    aria-describedby="label_56"
                    class="form-radio validate[required]"
                    id="input_56_1"
                    name="q56_maritalStatus56"
                    value="Married/Domestic Partnership"
                    required="">
              <label id="label_input_56_1" for="input_56_1">Married/Domestic Partnership</label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item"></span>
              <input
                    <?php echo ( $_POST['q56_maritalStatus56'] == "Divorced" ) ? 'checked="checked"' : ''; ?>
                    type="radio"
                    aria-describedby="label_56"
                    class="form-radio validate[required]"
                    id="input_56_2"
                    name="q56_maritalStatus56"
                    value="Divorced"
                    required="">
              <label id="label_input_56_2" for="input_56_2">Divorced</label>
            </span>
            <span class="form-radio-item">
              <span class="dragger-item"></span>
              <input
                    <?php echo ( $_POST['q56_maritalStatus56'] == "Separated" ) ? 'checked="checked"' : ''; ?>
                    type="radio"
                    aria-describedby="label_56"
                    class="form-radio validate[required]"
                    id="input_56_3"
                    name="q56_maritalStatus56"
                    value="Separated"
                    required="">
              <label id="label_input_56_3" for="input_56_3">Separated</label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item"></span>
              <input
                    <?php echo ( $_POST['q56_maritalStatus56'] == "Widowed" ) ? 'checked="checked"' : ''; ?>
                    type="radio"
                    aria-describedby="label_56"
                    class="form-radio validate[required]"
                    id="input_56_4"
                    name="q56_maritalStatus56"
                    value="Widowed"
                    required="">
              <label id="label_input_56_4" for="input_56_4">Widowed</label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_57">
        <label class="form-label form-label-top form-label-auto" id="label_57" for="input_57">
          I authorize
                        messages to be left on answering machine, voicemail, and/or email
          <span class="form-required">*</span>
        </label>
        <div id="cid_57" class="form-input-wide jf-required" data-layout="full">
          <div
                class="form-multiple-column"
                data-columncount="2"
                role="group"
                aria-labelledby="label_57"
                data-component="radio">
            <span class="form-radio-item">
              <span class="dragger-item"></span>
              <input
                    <?php echo ( $_POST['q57_iAuthorize'] == "Yes" ) ? 'checked="checked"' : ''; ?>
                    type="radio"
                    aria-describedby="label_57"
                    class="form-radio validate[required]"
                    id="input_57_0"
                    name="q57_iAuthorize"
                    value="Yes"
                    required="">
              <label id="label_input_57_0" for="input_57_0">Yes</label>
            </span>
            <span class="form-radio-item">
              <span class="dragger-item"></span>
              <input
                    <?php echo ( $_POST['q57_iAuthorize'] == "No" ) ? 'checked="checked"' : ''; ?>
                    type="radio"
                    aria-describedby="label_57"
                    class="form-radio validate[required]"
                    id="input_57_1"
                    name="q57_iAuthorize"
                    value="No"
                    required="">
              <label id="label_input_57_1" for="input_57_1">No</label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_58">
        <label class="form-label form-label-top form-label-auto" id="label_58" for="input_58">
          I authorize a
                        summary of my visit to be sent to my physician upon request
        </label>
        <div id="cid_58" class="form-input-wide" data-layout="full">
          <div
                class="form-multiple-column"
                data-columncount="2"
                role="group"
                aria-labelledby="label_58"
                data-component="radio">
            <span class="form-radio-item">
              <span class="dragger-item"></span>
              <input
                    <?php echo ( $_POST['q58_iAuthorize58'] == "Yes" ) ? 'checked="checked"' : ''; ?>
                    type="radio"
                    aria-describedby="label_58"
                    class="form-radio"
                    id="input_58_0"
                    name="q58_iAuthorize58"
                    value="Yes">
              <label id="label_input_58_0" for="input_58_0">Yes</label>
            </span>
            <span class="form-radio-item">
              <span class="dragger-item"></span>
              <input
                    <?php echo ( $_POST['q58_iAuthorize58'] == "Yes" ) ? 'checked="checked"' : ''; ?>
                    type="radio"
                    aria-describedby="label_58"
                    class="form-radio"
                    id="input_58_1"
                    name="q58_iAuthorize58"
                    value="No">
              <label id="label_input_58_1" for="input_58_1">No</label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_59">
        <label class="form-label form-label-top form-label-auto" id="label_59" for="input_59">Physician Name</label>
        <div id="cid_59" class="form-input-wide" data-layout="half">
            <?php if (!empty($_POST['q59_physicianName'])): ?>
                <b><?php echo $_POST['q59_physicianName']; ?></b>
            <?php else: ?>
                <input
                    type="text"
                    id="input_59"
                    name="q59_physicianName"
                    data-type="input-textbox"
                    class="form-textbox"
                    data-defaultvalue=""
                    style="width:310px"
                    size="310"
                    value=""
                    data-component="textbox"
                    aria-labelledby="label_59">
            <?php endif; ?> 
        </div>
      </li>
      <li class="form-line" data-type="control_address" id="id_62">
        <label class="form-label form-label-top form-label-auto" id="label_62" for="input_62_addr_line1">Physician Address</label>
        <div id="cid_62" class="form-input-wide" data-layout="full">
          <div summary="" class="form-address-table jsTest-addressField">
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-street-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                    <?php if (!empty($_POST['q62_physicianAddress']['addr_line1'])): ?>
                        <b><?php echo $_POST['q62_physicianAddress']['addr_line1']; ?></b>
                    <?php else: ?>
                        <input
                                type="text"
                                id="input_62_addr_line1"
                                name="q62_physicianAddress[addr_line1]"
                                class="form-textbox form-address-line"
                                data-defaultvalue=""
                                autocomplete="section-input_62 address-line1"
                                value=""
                                data-component="address_line_1"
                                aria-labelledby="label_62 sublabel_62_addr_line1"
                                required="">
                        <label
                                class="form-sub-label"
                                for="input_62_addr_line1"
                                id="sublabel_62_addr_line1"
                                style="min-height:13px"
                                aria-hidden="false">
                            Street Address
                        </label>
                    <?php endif; ?> 
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-street-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                    <?php if (!empty($_POST['q62_physicianAddress']['addr_line2'])): ?>
                        <b><?php echo $_POST['q62_physicianAddress']['addr_line2']; ?></b>
                    <?php else: ?>
                        <input
                                type="text"
                                id="input_62_addr_line2"
                                name="q62_physicianAddress[addr_line2]"
                                class="form-textbox form-address-line"
                                data-defaultvalue=""
                                autocomplete="section-input_62 address-line2"
                                value=""
                                data-component="address_line_2"
                                aria-labelledby="label_62 sublabel_62_addr_line2">
                        <label
                                class="form-sub-label"
                                for="input_62_addr_line2"
                                id="sublabel_62_addr_line2"
                                style="min-height:13px"
                                aria-hidden="false">
                            Street Address Line 2
                        </label>
                    <?php endif; ?> 
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-city-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                    <?php if (!empty($_POST['q62_physicianAddress']['city'])): ?>
                        <b><?php echo $_POST['q62_physicianAddress']['city']; ?></b>
                    <?php else: ?>
                        <input
                                type="text"
                                id="input_62_city"
                                name="q62_physicianAddress[city]"
                                class="form-textbox form-address-city"
                                data-defaultvalue=""
                                autocomplete="section-input_62 address-level2"
                                value=""
                                data-component="city"
                                aria-labelledby="label_62 sublabel_62_city"
                                required="">
                        <label
                                class="form-sub-label"
                                for="input_62_city"
                                id="sublabel_62_city"
                                style="min-height:13px"
                                aria-hidden="false">City</label>
                    <?php endif; ?> 
                </span>
              </span>
              <span class="form-address-line form-address-state-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                    <?php if (!empty($_POST['q62_physicianAddress']['state'])): ?>
                        <b><?php echo $_POST['q62_physicianAddress']['state']; ?></b>
                    <?php else: ?>
                        <input
                                type="text"
                                id="input_62_state"
                                name="q62_physicianAddress[state]"
                                class="form-textbox form-address-state"
                                data-defaultvalue=""
                                autocomplete="section-input_62 address-level1"
                                value=""
                                data-component="state"
                                aria-labelledby="label_62 sublabel_62_state"
                                required="">
                        <label
                                class="form-sub-label"
                                for="input_62_state"
                                id="sublabel_62_state"
                                style="min-height:13px"
                                aria-hidden="false">
                            State /
                                                    Province
                        </label>
                    <?php endif; ?> 
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-zip-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                    <?php if (!empty($_POST['q62_physicianAddress']['postal'])): ?>
                        <b><?php echo $_POST['q62_physicianAddress']['postal']; ?></b>
                    <?php else: ?>
                        <input
                                type="text"
                                id="input_62_postal"
                                name="q62_physicianAddress[postal]"
                                class="form-textbox form-address-postal"
                                data-defaultvalue=""
                                autocomplete="section-input_62 postal-code"
                                value=""
                                data-component="zip"
                                aria-labelledby="label_62 sublabel_62_postal"
                                required="">
                        <label
                                class="form-sub-label"
                                for="input_62_postal"
                                id="sublabel_62_postal"
                                style="min-height:13px"
                                aria-hidden="false">
                            Postal / Zip
                                                    Code
                        </label>
                    <?php endif; ?> 
                </span>
              </span>
            </div>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_textbox" id="id_61">
        <label class="form-label form-label-top" id="label_61" for="input_61">Referred By</label>
        <div id="cid_61" class="form-input-wide" data-layout="half">
            <?php if (!empty($_POST['q61_referredBy'])): ?>
                <b><?php echo $_POST['q61_referredBy']; ?></b>
            <?php else: ?>
                <input
                    type="text"
                    id="input_61"
                    name="q61_referredBy"
                    data-type="input-textbox"
                    class="form-textbox"
                    data-defaultvalue=""
                    style="width:310px"
                    size="310"
                    value=""
                    data-component="textbox"
                    aria-labelledby="label_61">
            <?php endif; ?> 
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_63">
        <label class="form-label form-label-top" id="label_63" for="input_63">Referred to Dr./Group</label>
        <div id="cid_63" class="form-input-wide" data-layout="half">
            <?php if (!empty($_POST['q63_referredTo'])): ?>
                <b><?php echo $_POST['q63_referredTo']; ?></b>
            <?php else: ?>
                <input
                    type="text"
                    id="input_63"
                    name="q63_referredTo"
                    data-type="input-textbox"
                    class="form-textbox"
                    data-defaultvalue=""
                    style="width:310px"
                    size="310"
                    value=""
                    data-component="textbox"
                    aria-labelledby="label_63">
            <?php endif; ?> 
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_64">
        <label class="form-label form-label-top form-label-auto" id="label_64" for="input_64">
          Notify in case
                        of emergency
          <span class="form-required">*</span>
        </label>
        <div id="cid_64" class="form-input-wide jf-required" data-layout="half">
            <?php if (!empty($_POST['q64_notifyIn'])): ?>
                <b><?php echo $_POST['q64_notifyIn']; ?></b>
            <?php else: ?>
                <input
                    type="text"
                    id="input_64"
                    name="q64_notifyIn"
                    data-type="input-textbox"
                    class="form-textbox validate[required]"
                    data-defaultvalue=""
                    style="width:310px"
                    size="310"
                    value=""
                    data-component="textbox"
                    aria-labelledby="label_64"
                    required="">
            <?php endif; ?> 
        </div>
      </li>
      <li id="cid_40" class="form-input-wide" data-type="control_head">
        <div class="form-header-group header-default">
          <div class="header-text httac htvam">
            <h2 id="header_40" class="form-header" data-component="header">
              FINANCIALLY RESPONSIBLE
                                PERSON
            </h2>
            <div id="subHeader_40" class="form-subHeader">
              If you will be paying the bill or invoices you
                                must complete this section completely, if you are NOT the financially responsible
                                person, then this section may be skipped. We require at least ONE financially
                                responsible party in order to see any patient.
            </div>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_textbox" id="id_65">
        <label class="form-label form-label-top" id="label_65" for="input_65">Name</label>
        <div id="cid_65" class="form-input-wide" data-layout="half">
            <?php if (!empty($_POST['q65_name'])): ?>
                <b><?php echo $_POST['q65_name']; ?></b>
            <?php else: ?>
                <input
                    type="text"
                    id="input_65"
                    name="q65_name"
                    data-type="input-textbox"
                    class="form-textbox"
                    data-defaultvalue=""
                    style="width:310px"
                    size="310"
                    value=""
                    data-component="textbox"
                    aria-labelledby="label_65">
            <?php endif; ?> 
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_dropdown" id="id_66">
        <label class="form-label form-label-top" id="label_66" for="input_66">Relationship</label>
        <div id="cid_66" class="form-input-wide" data-layout="half">
          <select class="form-dropdown" id="input_66" name="q66_relationship" style="width:310px" data-component="dropdown">
            <option value="">Please Select</option>
            <option <?php echo (!empty($_POST['q66_relationship']) && $_POST['q66_relationship'] == 'Parent') ? 'selected="selected"' : ''; ?> value="Parent">Parent</option>
            <option <?php echo (!empty($_POST['q66_relationship']) && $_POST['q66_relationship'] == 'Relative') ? 'selected="selected"' : ''; ?> value="Relative">Relative</option>
            <option <?php echo (!empty($_POST['q66_relationship']) && $_POST['q66_relationship'] == 'Friend') ? 'selected="selected"' : ''; ?> value="Friend">Friend</option>
            <option <?php echo (!empty($_POST['q66_relationship']) && $_POST['q66_relationship'] == 'Other') ? 'selected="selected"' : ''; ?> value="Other">Other</option>
          </select>
        </div>
      </li>
      <li class="form-line" data-type="control_address" id="id_67">
        <label class="form-label form-label-top form-label-auto" id="label_67" for="input_67_addr_line1">Address</label>
        <div id="cid_67" class="form-input-wide" data-layout="full">
          <div summary="" class="form-address-table jsTest-addressField">
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-street-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                <?php if (!empty($_POST['q67_address']['addr_line1'])): ?>
                    <b><?php echo $_POST['q67_address']['addr_line1']; ?></b>
                <?php else: ?>
                    <input
                        type="text"
                        id="input_67_addr_line1"
                        name="q67_address[addr_line1]"
                        class="form-textbox form-address-line"
                        data-defaultvalue=""
                        autocomplete="section-input_67 address-line1"
                        value=""
                        data-component="address_line_1"
                        aria-labelledby="label_67 sublabel_67_addr_line1"
                        required="">
                    <label
                        class="form-sub-label"
                        for="input_67_addr_line1"
                        id="sublabel_67_addr_line1"
                        style="min-height:13px"
                        aria-hidden="false">
                        Street Address
                    </label>
                <?php endif; ?> 
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-street-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                    <?php if (!empty($_POST['q67_address']['addr_line1'])): ?>
                        <b><?php echo $_POST['q67_address']['addr_line1']; ?></b>
                    <?php else: ?>
                        <input  
                                type="text"
                                id="input_67_addr_line2"
                                name="q67_address[addr_line2]"
                                class="form-textbox form-address-line"
                                data-defaultvalue=""
                                autocomplete="section-input_67 address-line2"
                                value=""
                                data-component="address_line_2"
                                aria-labelledby="label_67 sublabel_67_addr_line2">
                        <label
                                class="form-sub-label"
                                for="input_67_addr_line2"
                                id="sublabel_67_addr_line2"
                                style="min-height:13px"
                                aria-hidden="false">
                            Street Address Line
                                                    2
                        </label>
                    <?php endif; ?> 
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-city-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                    <?php if (!empty($_POST['q67_address']['city'])): ?>
                        <b><?php echo $_POST['q67_address']['city']; ?></b>
                    <?php else: ?>
                        <input
                                type="text"
                                id="input_67_city"
                                name="q67_address[city]"
                                class="form-textbox form-address-city"
                                data-defaultvalue=""
                                autocomplete="section-input_67 address-level2"
                                value=""
                                data-component="city"
                                aria-labelledby="label_67 sublabel_67_city"
                                required="">
                        <label
                                class="form-sub-label"
                                for="input_67_city"
                                id="sublabel_67_city"
                                style="min-height:13px"
                                aria-hidden="false">City</label>
                    <?php endif; ?> 
                </span>
              </span>
              <span class="form-address-line form-address-state-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                    <?php if (!empty($_POST['q67_address']['state'])): ?>
                        <b><?php echo $_POST['q67_address']['state']; ?></b>
                    <?php else: ?>
                        <input
                                type="text"
                                id="input_67_state"
                                name="q67_address[state]"
                                class="form-textbox form-address-state"
                                data-defaultvalue=""
                                autocomplete="section-input_67 address-level1"
                                value=""
                                data-component="state"
                                aria-labelledby="label_67 sublabel_67_state"
                                required="">
                        <label
                                class="form-sub-label"
                                for="input_67_state"
                                id="sublabel_67_state"
                                style="min-height:13px"
                                aria-hidden="false">
                            State / Province
                        </label>
                    <?php endif; ?> 
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-zip-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                    <?php if (!empty($_POST['q67_address']['postal'])): ?>
                        <b><?php echo $_POST['q67_address']['postal']; ?></b>
                    <?php else: ?>
                        <input
                                type="text"
                                id="input_67_postal"
                                name="q67_address[postal]"
                                class="form-textbox form-address-postal"
                                data-defaultvalue=""
                                autocomplete="section-input_67 postal-code"
                                value=""
                                data-component="zip"
                                aria-labelledby="label_67 sublabel_67_postal"
                                required="">
                        <label
                                class="form-sub-label"
                                for="input_67_postal"
                                id="sublabel_67_postal"
                                style="min-height:13px"
                                aria-hidden="false">
                            Postal / Zip
                                                    Code
                        </label>
                    <?php endif; ?> 
                </span>
              </span>
            </div>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_datetime" id="id_68">
        <label class="form-label form-label-top" id="label_68" for="lite_mode_68">Date of Birth</label>
        <div id="cid_68" class="form-input-wide" data-layout="half">
          <div data-wrapper-react="true">
            <div style="display:none">
              <span class="form-sub-label-container" style="vertical-align:top">
                <input
                      type="tel"
                      class="form-textbox validate[limitDate]"
                      id="month_68"
                      name="q68_dateOf68[month]"
                      size="2"
                      data-maxlength="2"
                      data-age=""
                      maxlength="2"
                      value=""
                      autocomplete="section-input_68 off"
                      aria-labelledby="label_68 sublabel_68_month"
                      inputmode="numeric">
                <span class="date-separate" aria-hidden="true">&nbsp;-</span>
                <label class="form-sub-label" for="month_68" id="sublabel_68_month" style="min-height:13px" aria-hidden="false">Month</label>
              </span>
              <span class="form-sub-label-container" style="vertical-align:top">
                <input
                      type="tel"
                      class="form-textbox validate[limitDate]"
                      id="day_68"
                      name="q68_dateOf68[day]"
                      size="2"
                      data-maxlength="2"
                      data-age=""
                      maxlength="2"
                      value=""
                      autocomplete="section-input_68 off"
                      aria-labelledby="label_68 sublabel_68_day"
                      inputmode="numeric">
                <span class="date-separate" aria-hidden="true">&nbsp;-</span>
                <label class="form-sub-label" for="day_68" id="sublabel_68_day" style="min-height:13px" aria-hidden="false">Day</label>
              </span>
              <span class="form-sub-label-container" style="vertical-align:top">
                <input
                      type="tel"
                      class="form-textbox validate[limitDate]"
                      id="year_68"
                      name="q68_dateOf68[year]"
                      size="4"
                      data-maxlength="4"
                      data-age=""
                      maxlength="4"
                      value=""
                      autocomplete="section-input_68 off"
                      aria-labelledby="label_68 sublabel_68_year">
                <label class="form-sub-label" for="year_68" id="sublabel_68_year" style="min-height:13px" aria-hidden="false">Year</label>
              </span>
            </div>
            <span class="form-sub-label-container" style="vertical-align:top">
                <?php if (!empty($_POST['q68_dateOf68'])): ?>
                    <b><?php echo $_POST['q68_dateOf68']['month'] . '-' . $_POST['q68_dateOf68']['day'] . '-' . $_POST['q68_dateOf68']['year']; ?></b>
                <?php else: ?>
                    <input
                            type="text"
                            class="form-textbox validate[limitDate, validateLiteDate]"
                            id="lite_mode_68"
                            size="12"
                            data-maxlength="12"
                            data-age=""
                            value=""
                            data-format="mmddyyyy"
                            data-seperator="-"
                            placeholder="MM-DD-YYYY"
                            autocomplete="section-input_68 off"
                            aria-labelledby="label_68 sublabel_68_litemode"
                            inputmode="numeric">
                    <img
                            class="newDefaultTheme-dateIcon icon-liteMode"
                            alt="Pick a Date"
                            id="input_68_pick"
                            src="./Intake Form - EN_files/calendar.png"
                            data-component="datetime"
                            aria-hidden="true"
                            data-allow-time="No"
                            data-version="v2">
                    <label
                            class="form-sub-label"
                            for="lite_mode_68"
                            id="sublabel_68_litemode"
                            style="min-height:13px"
                            aria-hidden="false">Date</label>
                <?php endif; ?>   
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2 jf-required" data-type="control_radio" id="id_69">
        <label class="form-label form-label-top" id="label_69" for="input_69">
          Eligible for Medicare or
                        Medicaid Benefits
          <span class="form-required">*</span>
        </label>
        <div id="cid_69" class="form-input-wide jf-required" data-layout="full">
          <div
                class="form-multiple-column"
                data-columncount="2"
                role="group"
                aria-labelledby="label_69"
                data-component="radio">
            <span class="form-radio-item">
              <span class="dragger-item"></span>
              <input
                <?php echo ( $_POST['q69_eligibleFor'] == 'Yes' ) ? 'checked="checked"' : ''; ?>
                    type="radio"
                    aria-describedby="label_69"
                    class="form-radio validate[required]"
                    id="input_69_0"
                    name="q69_eligibleFor"
                    value="Yes"
                    required="">
              <label id="label_input_69_0" for="input_69_0">Yes</label>
            </span>
            <span class="form-radio-item">
              <span class="dragger-item"></span>
              <input
                <?php echo ( $_POST['q69_eligibleFor'] == 'No' ) ? 'checked="checked"' : ''; ?>
                    type="radio"
                    aria-describedby="label_69"
                    class="form-radio validate[required]"
                    id="input_69_1"
                    name="q69_eligibleFor"
                    value="No"
                    required="">
              <label id="label_input_69_1" for="input_69_1">No</label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_checkbox" id="id_71">
        <label class="form-label form-label-top form-label-auto" id="label_71" for="input_71"></label>
        <div id="cid_71" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_71" data-component="checkbox">
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item"></span>
              <input
                <?php echo ( !empty($_POST['q71_input71']) ) ? 'checked="checked"' : ''; ?>
                    type="checkbox"
                    aria-describedby="label_71"
                    class="form-checkbox"
                    id="input_71_0"
                    name="q71_input71[]"
                    value="I understand and agree that any amounts owed by me are subject to 1.5% per month (18% per year) interest, which will be added to any outstanding bill. Fees are based upon how much time is spent on activities associated with the client needs, at an hourly rate.">
              <label id="label_input_71_0" for="input_71_0">
                I understand and agree that any amounts owed
                                    by me are subject to 1.5% per month (18% per year) interest, which will be added to
                                    any outstanding bill. Fees are based upon how much time is spent on activities
                                    associated with the client needs, at an hourly rate.
              </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item"></span>
              <input
                <?php echo ( !empty($_POST['q71_input71']) ) ? 'checked="checked"' : ''; ?>
                    type="checkbox"
                    aria-describedby="label_71"
                    class="form-checkbox"
                    id="input_71_1"
                    name="q71_input71[]"
                    value="I understand that I am financially responsible for my entire bill, and the fees are due at the time of service. We ask that all patients pay at the beginning of their appointment for services scheduled.">
              <label id="label_input_71_1" for="input_71_1">
                I understand that I am financially
                                    responsible for my entire bill, and the fees are due at the time of service. We ask
                                    that all patients pay at the beginning of their appointment for services
                                    scheduled.
              </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_divider" id="id_90">
        <div id="cid_90" class="form-input-wide" data-layout="full">
          <div
                class="divider"
                aria-label="Divider"
                data-component="divider"
                style="border-bottom-width:1px;border-bottom-style:solid;border-color:#e6e6e6;height:1px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_checkbox" id="id_73">
        <label class="form-label form-label-top form-label-auto" id="label_73" for="input_73">
          <span class="form-required">*</span>
        </label>
        <div id="cid_73" class="form-input-wide jf-required" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_73" data-component="checkbox">
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item"></span>
              <input
                <?php echo ( !empty($_POST['q73_input74']) ) ? 'checked="checked"' : ''; ?>
                    type="checkbox"
                    aria-describedby="label_73"
                    class="form-checkbox validate[required]"
                    id="input_73_0"
                    name="q73_input74[]"
                    value="The Nicholls Group does not provide Medicare or Medicaid services; therefore, if I am a Medicare or Medicaid beneficiary, I understand that a separate private contract will need to be signed and I wil be fully responsible for payment of all services provided."
                    required="">
              <label id="label_input_73_0" for="input_73_0">
                The Nicholls Group does
                                    not provide Medicare or Medicaid services; therefore, if I am a Medicare or Medicaid
                                    beneficiary, I understand that a separate private contract will need to be signed
                                    and I wil be fully responsible for payment of all services provided.
              </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_checkbox" id="id_103">
        <label class="form-label form-label-top form-label-auto" id="label_103" for="input_103">
          <span class="form-required">*</span>
        </label>
        <div id="cid_103" class="form-input-wide jf-required" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_103" data-component="checkbox">
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item"></span>
              <input
                <?php echo ( !empty($_POST['q103_input103']) ) ? 'checked="checked"' : ''; ?>
                    type="checkbox"
                    aria-describedby="label_103"
                    class="form-checkbox validate[required]"
                    id="input_103_0"
                    name="q103_input103[]"
                    value="Therapy/consultation hours are 50 minutes long and are billed at the hourly rate. This procedure    is required because of the additional time needed to write up session notes."
                    required="">
              <label id="label_input_103_0" for="input_103_0">
                Therapy/consultation
                                    hours are 50 minutes long and are billed at the hourly rate. This procedure&nbsp;
                                    &nbsp; is required because of the additional time needed to write up session
                                    notes.
              </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item"></span>
              <input
                <?php echo ( !empty($_POST['q103_input103']) ) ? 'checked="checked"' : ''; ?>
                    type="checkbox"
                    aria-describedby="label_103"
                    class="form-checkbox validate[required]"
                    id="input_103_1"
                    name="q103_input103[]"
                    value="Psychological evaluations are charged at a rate that is one and one-half times the direct face-to face contact time. This procedure is required because of the additional time needed to score and interpret psychological testing. Report preparation is charged according to the time required."
                    required="">
              <label id="label_input_103_1" for="input_103_1">
                Psychological
                                    evaluations are charged at a rate that is one and one-half times the direct face-to
                                    face contact time. This procedure is required because of the additional time needed
                                    to score and interpret psychological testing. Report preparation is charged
                                    according to the time required.
              </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item"></span>
              <input
                <?php echo ( !empty($_POST['q103_input103']) ) ? 'checked="checked"' : ''; ?>
                    type="checkbox"
                    aria-describedby="label_103"
                    class="form-checkbox validate[required]"
                    id="input_103_2"
                    name="q103_input103[]"
                    value="We are happy to correspond with you by phone or by email, as we understand that you may have questions in between sessions or after a feedback session. Please note if that time exceeds 15 minutes, you will be billed for that time. Charges will be billed 15 minute intervals."
                    required="">
              <label id="label_input_103_2" for="input_103_2">
                We are happy to
                                    correspond with you by phone or by email, as we understand that you may have
                                    questions in between sessions or after a feedback session. Please note if that time
                                    exceeds 15 minutes, you will be billed for that time. Charges will be billed 15
                                    minute intervals.
              </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item"></span>
              <input
                <?php echo ( !empty($_POST['q103_input103']) ) ? 'checked="checked"' : ''; ?>
                    type="checkbox"
                    aria-describedby="label_103"
                    class="form-checkbox validate[required]"
                    id="input_103_3"
                    name="q103_input103[]"
                    value="I understand that the providers in this office do not submit claims to any insurance companies, I understand that I will be informed about the administrative procedure and upon request I will be given diagnostic codes, which I may submit to my insurance company at my own discretion; and that I am responsible for any prior authorization or pre-certification required for services. Please note that The Nicholls Group cannot correspond with your insurance company via phone/mail without written consent from the client or guardian."
                    required="">
              <label id="label_input_103_3" for="input_103_3">
                I understand that the
                                    providers in this office do not submit claims to any insurance companies, I
                                    understand that I will be informed about the administrative procedure and upon
                                    request I will be given diagnostic codes, which I may submit to my insurance company
                                    at my own discretion; and that I am responsible for any prior authorization or
                                    pre-certification required for services. Please note that The Nicholls Group cannot
                                    correspond with your insurance company via phone/mail without written consent from
                                    the client or guardian.
              </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_checkbox" id="id_74">
        <label class="form-label form-label-top form-label-auto" id="label_74" for="input_74">
          <span class="form-required">*</span>
        </label>
        <div id="cid_74" class="form-input-wide jf-required" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_74" data-component="checkbox">
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item"></span>
              <input
                <?php echo ( !empty($_POST['q74_input74']) ) ? 'checked="checked"' : ''; ?>
                    type="checkbox"
                    aria-describedby="label_74"
                    class="form-checkbox validate[required]"
                    id="input_74_0"
                    name="q74_input74[]"
                    value="Cancellation Policy:"
                    required="">
              <label id="label_input_74_0" for="input_74_0">Cancellation Policy:</label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_75">
        <div id="cid_75" class="form-input-wide" data-layout="full">
          <div id="text_75" class="form-html" data-component="text" tabindex="0">
            <ul style="list-style-type: disc;">
              <li>
                The Nicholls Group requires a 72-business hour cancellation for all evaluations. If
                                    my appointment is not cancelled within 72 hours. I understand that I will be charged
                                    for the time scheduled.
              </li>
              <li>
                For therapy and/or consultation, the Nicholls Group requires a 48-business hour
                                    notice. If my appointment is not cancelled within 48 hours, I understand that I will
                                    be charged for the time scheduled.
              </li>
            </ul>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_checkbox" id="id_76">
        <label class="form-label form-label-top form-label-auto" id="label_76" for="input_76">
          <span class="form-required">*</span>
        </label>
        <div id="cid_76" class="form-input-wide jf-required" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_76" data-component="checkbox">
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item"></span>
              <input
                <?php echo ( !empty($_POST['q76_input76']) ) ? 'checked="checked"' : ''; ?>
                    type="checkbox"
                    aria-describedby="label_76"
                    class="form-checkbox validate[required]"
                    id="input_76_0"
                    name="q76_input76[]"
                    value="I understand that insurance companies do not reimburse or cover missed or late cancel expenses."
                    required="">
              <label id="label_input_76_0" for="input_76_0">
                I understand that
                                    insurance companies do not reimburse or cover missed or late cancel
                                    expenses.
              </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_checkbox" id="id_77">
        <label class="form-label form-label-top form-label-auto" id="label_77" for="input_77">
          <span class="form-required">*</span>
        </label>
        <div id="cid_77" class="form-input-wide jf-required" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_77" data-component="checkbox">
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item"></span>
              <input
                <?php echo ( !empty($_POST['q77_input77']) ) ? 'checked="checked"' : ''; ?>
                    type="checkbox"
                    aria-describedby="label_77"
                    class="form-checkbox validate[required]"
                    id="input_77_0"
                    name="q77_input77[]"
                    value="Policies for Children with Divorced Parents:"
                    required="">
              <label id="label_input_77_0" for="input_77_0">
                Policies for Children with Divorced
                                    Parents:
              </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_78">
        <div id="cid_78" class="form-input-wide" data-layout="full">
          <div id="text_78" class="form-html" data-component="text" tabindex="0">
            <ul style="list-style-type: disc;">
              <li>
                In all therapy and evaluation cases, where the child’s parents are divorced, we will
                                    need to have a full copy of the divorce decree for our records to keep on file to
                                    ensure our office is maintaining the most legal ethical practice.
              </li>
              <li>
                We ask that both parents provide consent before an assessment or treatment begins
                                    with a minor. We also ask that both parents are involved in your child’s treatment
                                    and/or evaluation, including the progress of treatment, in order to maintain the
                                    most ethical practice. The exception to these stipulations is in the case of alleged
                                    child abuse and/or an on-going investigation, or services provided under a court
                                    order.
              </li>
              <li>
                It is important to note that unless it is otherwise stipulated by the court or law,
                                    both parents are entitled to equal access to information (spoken or written)
                                    concerning his/her child’s psychological treatment and/or evaluation.
                <br>
                In order to
                                    release any records to a third party, both parents’ written consent must be
                                    obtained. Additionally, in the case of family therapy or parenting consultation, in
                                    which both parents are present to discuss their child/children, written consent from
                                    both parties is required to release records to either client or to a third party.
              </li>
              <li>
                In many divorce cases there are court agreements that states the payment schedule
                                    for each parent; as either an amount or percentage. Please note The Nicholls Group
                                    is not responsible for collecting divided payments from each parent, and that the
                                    bill is due at the time of the service. In the case of an evaluation, each parent is
                                    responsible for the entirety of his or her portion of the bill PRIOR to the
                                    evaluation being performed.
              </li>
            </ul>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_checkbox" id="id_79">
        <label class="form-label form-label-top form-label-auto" id="label_79" for="input_79">
          <span class="form-required">*</span>
        </label>
        <div id="cid_79" class="form-input-wide jf-required" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_79" data-component="checkbox">
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item"></span>
              <input
                <?php echo ( !empty($_POST['q79_input79']) ) ? 'checked="checked"' : ''; ?>
                    type="checkbox"
                    aria-describedby="label_79"
                    class="form-checkbox validate[required]"
                    id="input_79_0"
                    name="q79_input79[]"
                    value="Important Notices:"
                    required="">
              <label id="label_input_79_0" for="input_79_0">Important Notices:</label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_80">
        <div id="cid_80" class="form-input-wide" data-layout="full">
          <div id="text_80" class="form-html" data-component="text" tabindex="0">
            <ul style="list-style-type: disc;">
              <li>
                Emergency contact with The Nicholls Group may not be immediatley available and will
                                    be unavailable on weekends or nights. In case of emergency please dial 911 or go to
                                    your closest Emergency Room. The crisis network hotline is 480-787-1500 (EMPACT) or
                                    1-800-631-1314 (crisis response network).
              </li>
              <li>The Nicholls Group does not provide custody evaluations.</li>
            </ul>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_checkbox" id="id_81">
        <label class="form-label form-label-top form-label-auto" id="label_81" for="input_81">
          <span class="form-required">*</span>
        </label>
        <div id="cid_81" class="form-input-wide jf-required" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_81" data-component="checkbox">
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item"></span>
              <input
                <?php echo ( !empty($_POST['q81_input81']) ) ? 'checked="checked"' : ''; ?>
                    type="checkbox"
                    aria-describedby="label_81"
                    class="form-checkbox validate[required]"
                    id="input_81_0"
                    name="q81_input81[]"
                    value="The Nicholls Group trains postdoctoral fellow and graduate students in Clinical Psychology from multiple universities who are practicing in our office as part of their training. These individuals are not yet licensed in psychology and therefore are working under the supervision of one of our Licensed Psychologists. If you are meeting with one of our trainees and have any concerns, please consult with the supervising provider prior to your first appointment."
                    required="">
              <label id="label_input_81_0" for="input_81_0">
                The Nicholls Group trains
                                    postdoctoral fellow and graduate students in Clinical Psychology from multiple
                                    universities who are practicing in our office as part of their training. These
                                    individuals are not yet licensed in psychology and therefore are working under the
                                    supervision of one of our Licensed Psychologists. If you are meeting with one of our
                                    trainees and have any concerns, please consult with the supervising provider prior
                                    to your first appointment.
              </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_checkbox" id="id_82">
        <label class="form-label form-label-top form-label-auto" id="label_82" for="input_82">
          <span class="form-required">*</span>
        </label>
        <div id="cid_82" class="form-input-wide jf-required" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_82" data-component="checkbox">
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item"></span>
              <input
                <?php echo ( !empty($_POST['q82_input82']) ) ? 'checked="checked"' : ''; ?>
                    type="checkbox"
                    aria-describedby="label_82"
                    class="form-checkbox validate[required]"
                    id="input_82_0"
                    name="q82_input82[]"
                    value="The Nicholls Group engages in professional and scientific research, and reviews data gathered in the performance of our evaluations and therapies. Unless you specifically state that you do not wish us to use the information about yourself or your child, you give us permission to include such information in our research projects. Please note that all information so used is de-identified and anonymous. There is no method that you or your child’s identity could be determined."
                    required="">
              <label id="label_input_82_0" for="input_82_0">
                The Nicholls Group engages
                                    in professional and scientific research, and reviews data gathered in the
                                    performance of our evaluations and therapies. Unless you specifically state that you
                                    do not wish us to use the information about yourself or your child, you give us
                                    permission to include such information in our research projects. Please note that
                                    all information so used is de-identified and anonymous. There is no method that you
                                    or your child’s identity could be determined.
              </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_checkbox" id="id_83">
        <label class="form-label form-label-top form-label-auto" id="label_83" for="input_83">
          <span class="form-required">*</span>
        </label>
        <div id="cid_83" class="form-input-wide jf-required" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_83" data-component="checkbox">
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item"></span>
              <input
                <?php echo ( !empty($_POST['q83_input83']) ) ? 'checked="checked"' : ''; ?>
                    type="checkbox"
                    aria-describedby="label_83"
                    class="form-checkbox validate[required]"
                    id="input_83_0"
                    name="q83_input83[]"
                    value="Confidentiality: I understand consultation, therapy, and psychological evaluations are confidential and that I must give my consent to release information to a third party. Exceptions to confidentiality include the following:"
                    required="">
              <label id="label_input_83_0" for="input_83_0">
                Confidentiality: I
                                    understand consultation, therapy, and psychological evaluations are confidential and
                                    that I must give my consent to release information to a third party. Exceptions to
                                    confidentiality include the following:
              </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_84">
        <div id="cid_84" class="form-input-wide" data-layout="full">
          <div id="text_84" class="form-html" data-component="text" tabindex="0">
            <ul style="list-style-type: disc;">
              <li>There is reason to believe a child under 18 has been the victim of abuse or neglect.</li>
              <li>The client expresses the intent to harm themselves or is gravely disabled.</li>
              <li>
                The client communicates a serious threat of imminent harm to a clearly identified
                                    victim(s).
              </li>
              <li>There is a court order for records signed by a judge.</li>
              <li>
                The evaluation is an independent educational evaluation requested by and paid for by
                                    the school and consented to by the parent.
              </li>
              <li>For the purposes of professional consultation.</li>
            </ul>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_checkbox" id="id_85">
        <label class="form-label form-label-top form-label-auto" id="label_85" for="input_85"></label>
        <div id="cid_85" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_85" data-component="checkbox">
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item"></span>
              <input
                <?php echo ( !empty($_POST['q85_input85']) ) ? 'checked="checked"' : ''; ?>
                    type="checkbox"
                    aria-describedby="label_85"
                    class="form-checkbox"
                    id="input_85_0"
                    name="q85_input85[]"
                    value="I authorize the Clinical Psychologist or member of The Nicholls Group to record a video, voice record, or take a photo of myself/ my child for the use of evaluation and professional education. Any use outside of direct clinical service will have all identifiable information removed.">
              <label id="label_input_85_0" for="input_85_0">
                I authorize the Clinical Psychologist or
                                    member of The Nicholls Group to record a video, voice record, or take a photo of
                                    myself/ my child for the use of evaluation and professional education. Any use
                                    outside of direct clinical service will have all identifiable information
                                    removed.
              </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_86">
        <div id="cid_86" class="form-input-wide" data-layout="full">
          <div id="text_86" class="form-html" data-component="text" tabindex="0">
            <p>
              <strong>Consent:</strong>
              I acknowledge that I have had access to read over The Nicholls
                                Group’s “Psychologist-Patient services Agreement,” (Found under the “Patient Forms” page
                                at www.thenichollsgroup.com) and accept responsibility for reading this document and
                                asking any questions that I may have regarding services provided to me. I hereby certify
                                that I have legal authority to seek requested services and consent for the identified
                                staff member(s) at The Nicholls Group to provide psychological services to me and/or the
                                person for whom I am a legal guardian. I have had an opportunity to ask questions about
                                any concerns I have regarding the above.
            </p>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_signature" id="id_87">
        <label class="form-label form-label-top form-label-auto" id="label_87" for="input_87">
          Signature of
                        Client or Parent/Legal Guardian
          <span class="form-required">*</span>
        </label>
        <div id="cid_87" class="form-input-wide jf-required" data-layout="half">
          <div data-wrapper-react="true">
            <div id="signature_pad_87" class="signature-pad-wrapper" style="width:312px;height:116px">
              <div data-wrapper-react="true">
                <!--[if IE 7]><script type="text/javascript" src="/js/vendor/json2.js"></script><![endif]-->
              </div>
              <div
                    class="signature-line signature-wrapper signature-placeholder"
                    data-component="signature"
                    style="width:312px;height:116px">
                <div
                      id="sig_pad_87"
                      data-width="310"
                      data-height="114"
                      data-id="87"
                      data-required="true"
                      class="pad validate[required]"
                      aria-labelledby="label_87"
                      style="width: 310px; height: 114px;">
                  <div style="padding:0; margin:0;width: 100%; height: 0; -ms-touch-action: none; touch-action: none;margin-top:-1em; margin-bottom:1em"></div>
                  <canvas
                        class="jSignature"
                        style="margin: 0px; padding: 0px; height: 114px; width: 310px; touch-action: none;"
                        width="308"
                        height="114"
                        role="application"
                        aria-label="E-Signature Field"
                        tabindex="0"></canvas>
                  <div style="padding:0; margin:0;width: 100%; height: 0; -ms-touch-action: none; touch-action: none;margin-top:-1.5em; margin-bottom:1.5em; position: relative;"></div>
                </div>
                <input type="hidden" name="q87_signatureOf" class="output4" id="input_87">
              </div>
              <span class="clear-pad-btn clear-pad" role="button" tabindex="0">Clear</span>
            </div>
            <div data-wrapper-react="true">
              <script type="text/javascript">
                window.signatureForm = true;
              </script>
            </div>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_88">
        <label class="form-label form-label-top form-label-auto" id="label_88" for="input_88">
          Relationship (if
                        not client)
          <span class="form-required">*</span>
        </label>
        <div id="cid_88" class="form-input-wide jf-required" data-layout="half">
            <?php if (!empty($_POST['q88_relationshipif'])): ?>
                <b><?php echo $_POST['q88_relationshipif']; ?></b>
            <?php else: ?>
                <input
                    type="text"
                    id="input_88"
                    name="q88_relationshipif"
                    data-type="input-textbox"
                    class="form-textbox validate[required]"
                    data-defaultvalue=""
                    style="width:310px"
                    size="310"
                    value=""
                    data-component="textbox"
                    aria-labelledby="label_88"
                    required="">
            <?php endif; ?>   
        </div>
      </li>
      <li class="form-line" data-type="control_email" id="id_101">
        <label class="form-label form-label-top form-label-auto" id="label_101" for="input_101">Email</label>
        <div id="cid_101" class="form-input-wide" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <?php if (!empty($_POST['q101_email101'])): ?>
                <b><?php echo $_POST['q101_email101']; ?></b>
            <?php else: ?>
                <input
                  type="email"
                  id="input_101"
                  name="q101_email101"
                  class="form-textbox validate[Email]"
                  data-defaultvalue=""
                  style="width:310px"
                  size="310"
                  value=""
                  data-component="email"
                  aria-labelledby="label_101 sublabel_input_101">
                <label class="form-sub-label" for="input_101" id="sublabel_input_101" style="min-height:13px" aria-hidden="false">example@example.com</label>
            <?php endif; ?>
          </span>
        </div>
      </li>
      <li class="form-line" data-type="control_email" id="id_102">
        <label class="form-label form-label-top form-label-auto" id="label_102" for="input_102">Email</label>
        <div id="cid_102" class="form-input-wide" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <?php if (!empty($_POST['q102_email102'])): ?>
                <b><?php echo $_POST['q102_email102']; ?></b>
            <?php else: ?>
                <input
                  type="email"
                  id="input_102"
                  name="q102_email102"
                  class="form-textbox validate[Email]"
                  data-defaultvalue=""
                  style="width:310px"
                  size="310"
                  value=""
                  data-component="email"
                  aria-labelledby="label_102 sublabel_input_102">
                <label class="form-sub-label" for="input_102" id="sublabel_input_102" style="min-height:13px" aria-hidden="false">example@example.com</label>
            <?php endif; ?>
          </span>
        </div>
      </li>
      <?php if ( empty($_POST) ): ?>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide" data-layout="full">
          <div data-align="auto" class="form-buttons-wrapper form-buttons-auto jsTest-button-wrapperField">
            <button
                  id="input_2"
                  type="submit"
                  class="form-submit-button form-submit-button-simple_grey submit-button jf-form-buttons jsTest-submitField"
                  data-component="button"
                  data-content="">Submit</button>
          </div>
        </div>
      </li>
      <?php endif; ?>
      <li style="clear:both"></li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="">
      </li>
    </ul>
  </div>
</form>
<?php $content = ob_get_contents();
get_footer();

$form_id = 5;
require_once 'form-controller.php'; ?>