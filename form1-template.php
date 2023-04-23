<?php
/*
* Template Name: Form1 template
* Template Post Type: page
*/

ob_start();
get_header();
?>

<form class="jotform-form" method="post" name="form_212746288836165" id="content"
    accept-charset="utf-8" autocomplete="on" novalidate="true">
    <div role="main" class="form-all">
        <div class="formLogoWrapper Left">
            <!-- <img loading="lazy" class="formLogoImg" src="" height="60" width="60"> - logo img -->
        </div>
        <ul class="form-section page-section">
            <li id="cid_1" class="form-input-wide" data-type="control_head">
                <div class="form-header-group  header-large">
                    <div class="header-text httac htvam">
                        <h1 id="header_1" class="form-header" data-component="header">
                            test Medicare Opt-Out Patient Contract
                        </h1>
                    </div>
                </div>
            </li>
            <li class="form-line always-hidden" data-type="control_textbox" id="id_49">
                <label class="form-label form-label-top form-label-auto" id="label_49" for="input_49"> Form Name
                </label>
                <div id="cid_49" class="form-input-wide always-hidden" data-layout="half">
                    <input type="text" id="input_49" name="formName" data-type="input-textbox"
                        class="form-textbox" data-defaultvalue="Medicare Opt-Out Patient Contract - EN"
                        style="width:310px" size="310" value="Medicare Opt-Out Patient Contract - EN"
                        data-component="textbox" aria-labelledby="label_49">
                </div>
            </li>
            <li id="cid_3" class="form-input-wide" data-type="control_head">
                <div class="form-header-group  header-default">
                    <div class="header-text httac htvam">
                        <h2 id="header_3" class="form-header" data-component="header">
                            PSYCHOLOGIST/PATIENT MEDICARE CONTRACT
                        </h2>
                    </div>
                </div>
            </li>
            <li class="form-line" data-type="control_text" id="id_48">
                <div id="cid_48" class="form-input-wide" data-layout="full">
                    <div id="text_48" class="form-html" data-component="text" tabindex="0">
                        <p><strong>Please initial in the space provided that you or your representative completely
                                understand the following statements. Please feel free to discuss these at length
                                before beginning treatment. You may speak with your doctor or the office
                                administrative staff, if you have any questions.</strong></p>
                        <ul style="list-style-type: disc;">
                            <li>
                                It is important to note that&nbsp;
                                <strong>Dr. Nicholls, Dr. Hoffman, Dr. Logerquist, Dr. Lebovitz, Dr. Sanchez, and
                                    Dr. Matteson</strong>
                                &nbsp;have never been excluded from participating in Medicare under statues [1128]
                                §§1128, [1156] 1156 or [1892] 1892 of the Social Security Act. They have chosen not
                                to continue as a Medicare provider due to responses to properly filed billing forms
                                taking as long as six months from date of service. There are often denials for
                                unexplained reasons. Additionally, ongoing cuts in reimbursement and the excessive
                                secretarial time necessary to collect these fees have led to our decision to opt out
                                of this insurance plan. Patient or patient representatives initials here:
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="form-line" data-type="control_textbox" id="id_5">
                <label class="form-label form-label-top" id="label_5" for="input_5"> Initial Here </label>
                <div id="cid_5" class="form-input-wide" data-layout="half">
                    <?php if (!empty($_POST['initial1'])): ?>
                        <b><?php echo $_POST['initial1']; ?></b>
                    <?php else: ?>
                        <input type="text" id="input_5" name="initial1" data-type="input-textbox" class="form-textbox">
                    <?php endif; ?>
                </div>
            </li>
            <li class="form-line" data-type="control_text" id="id_50">
                <div id="cid_50" class="form-input-wide" data-layout="full">
                    <div id="text_50" class="form-html" data-component="text" tabindex="0">
                        <ul style="list-style-type: disc;">
                            <li>
                                The Medicare beneficiary of his/her legal representative (named below) enters into
                                this contract with the knowledge that he or she has the right to obtain
                                Medicare-covered services from a psychologist, clinician or physician and/or
                                practitioner who has not opted-out of Medicare. There are many qualified
                                psychologists who do contract with Medicare. we can provide a referral to a provider
                                who that has not opted out of Medicare. Patient or patient representative initials
                                here:
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="form-line" data-type="control_textbox" id="id_51">
                <label class="form-label form-label-top" id="label_51" for="input_51"> Initial Here </label>
                <div id="cid_51" class="form-input-wide" data-layout="half">
                    <?php if (!empty($_POST['initial2'])): ?>
                        <b><?php echo $_POST['initial2']; ?></b>
                    <?php else: ?>
                        <input type="text" id="input_51" name="initial2" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_51">
                    <?php endif; ?>
                </div>
            </li>
            <li class="form-line" data-type="control_text" id="id_52">
                <div id="cid_52" class="form-input-wide" data-layout="full">
                    <div id="text_52" class="form-html" data-component="text" tabindex="0">
                        <ul style="list-style-type: disc;">
                            <li>
                                The Medicare beneficiary or his/her legal representative (named below) recognizes
                                that he or she is not compelled to enter into any private contract that applies to
                                Medicare-covered services furnished by any physician or practitioner that may have
                                opted out. This contract does not void Medicare benefits for any other services.
                                Patient or patient representatives initials here:
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="form-line" data-type="control_textbox" id="id_53">
                <label class="form-label form-label-top" id="label_53" for="input_53"> Initial Here </label>
                <div id="cid_53" class="form-input-wide" data-layout="half">
                    <?php if (!empty($_POST['initial3'])): ?>
                        <b><?php echo $_POST['initial3']; ?></b>
                    <?php else: ?>
                        <input type="text" id="input_53" name="initial3" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_53">
                    <?php endif; ?>
                </div>
            </li>
            <li class="form-line" data-type="control_text" id="id_54">
                <div id="cid_54" class="form-input-wide" data-layout="full">
                    <div id="text_54" class="form-html" data-component="text" tabindex="0">
                        <ul style="list-style-type: disc;">
                            <li>
                                The Medicare beneficiary or his/her legal representative (named below) understands
                                the Medicare limits do not apply to what Dr. (
                                <strong>Nicholls, Hoffman, Logerquist, Sanchez, or Matteson</strong>
                                ) may charge for items or services furnished. Charges for all services are
                                delineated in Dr. (
                                <strong>Nicholls, Hoffman, Logerquist, Sanchez, or Matteson</strong>
                                )’s Intake Form. Patient or patient representative initials here:
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="form-line" data-type="control_textbox" id="id_55">
                <label class="form-label form-label-top" id="label_55" for="input_55"> Initial Here </label>
                <div id="cid_55" class="form-input-wide" data-layout="half">
                    <?php if (!empty($_POST['initial4'])): ?>
                        <b><?php echo $_POST['initial4']; ?></b>
                    <?php else: ?>
                        <input type="text" id="input_55" name="initial4" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_55">
                    <?php endif; ?>
                </div>
            </li>
            <li class="form-line" data-type="control_text" id="id_56">
                <div id="cid_56" class="form-input-wide" data-layout="full">
                    <div id="text_56" class="form-html" data-component="text" tabindex="0">
                        <ul style="list-style-type: disc;">
                            <li>
                                The Medicare beneficiary or his/her legal representative (named below) accepts full
                                responsibility for payment of charges for all services furnished by Dr. (
                                <strong>Nicholls, Hoffman, Logerquist, Sanchez, and Matteson</strong>
                                ). Patient or patient representatives initials here:
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="form-line" data-type="control_textbox" id="id_58">
                <label class="form-label form-label-top" id="label_58" for="input_58"> Initial Here </label>
                <div id="cid_58" class="form-input-wide" data-layout="half">
                    <?php if (!empty($_POST['initial5'])): ?>
                        <b><?php echo $_POST['initial5']; ?></b>
                    <?php else: ?>
                        <input type="text" id="input_58" name="initial5" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_58">
                    <?php endif; ?>
                </div>
            </li>
            <li class="form-line" data-type="control_text" id="id_57">
                <div id="cid_57" class="form-input-wide" data-layout="full">
                    <div id="text_57" class="form-html" data-component="text" tabindex="0">
                        <ul style="list-style-type: disc;">
                            <li>
                                The Medicare beneficiary or his/her legal representative (named below) agrees not to
                                submit a claim to Medicare or a secondary insurance and ask Dr. (
                                <strong>Nicholls, Hoffman, Logerquist, Sanchez, and Matteson)</strong>
                                to submit a claim to either Medicare or a secondary insurance. Patient or patient
                                representatives initials here:
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="form-line" data-type="control_textbox" id="id_59">
                <label class="form-label form-label-top" id="label_59" for="input_59"> Initial Here </label>
                <div id="cid_59" class="form-input-wide" data-layout="half">
                    <?php if (!empty($_POST['initial6'])): ?>
                        <b><?php echo $_POST['initial6']; ?></b>
                    <?php else: ?>
                        <input type="text" id="input_59" name="initial6" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_59">
                    <?php endif; ?>
                </div>
            </li>
            <li class="form-line" data-type="control_text" id="id_60">
                <div id="cid_60" class="form-input-wide" data-layout="full">
                    <div id="text_60" class="form-html" data-component="text" tabindex="0">
                        <ul style="list-style-type: disc;">
                            <li>
                                The Medicare beneficiary or his/her legal representative (named below) understands
                                that Medicare payment will not be made for any items or services furnished by Dr. (
                                <strong>Nicholls, Hoffman, Logerquist, Sanchez, and Matteson</strong>
                                ) that would otherwise have been covered by Medicare, if there was no private
                                contract and a proper claim had been submitted. Patient or patient representative
                                initials here:
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="form-line" data-type="control_textbox" id="id_61">
                <label class="form-label form-label-top" id="label_61" for="input_61"> Initial Here </label>
                <div id="cid_61" class="form-input-wide" data-layout="half">
                    <?php if (!empty($_POST['initial7'])): ?>
                        <b><?php echo $_POST['initial7']; ?></b>
                    <?php else: ?>
                        <input type="text" id="input_61" name="initial7" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_61">
                    <?php endif; ?>
                </div>
            </li>
            <li class="form-line" data-type="control_text" id="id_62">
                <div id="cid_62" class="form-input-wide" data-layout="full">
                    <div id="text_62" class="form-html" data-component="text" tabindex="0">
                        <ul style="list-style-type: disc;">
                            <li>
                                The expected or known effective date of the opt out period is (September 2015). The
                                expiration date is 2 years from this date. Patient or patient representatives
                                initial here:
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="form-line" data-type="control_textbox" id="id_63">
                <label class="form-label form-label-top" id="label_63" for="input_63"> Initial Here </label>
                <div id="cid_63" class="form-input-wide" data-layout="half">
                    <?php if (!empty($_POST['initial8'])): ?>
                        <b><?php echo $_POST['initial8']; ?></b>
                    <?php else: ?>
                        <input type="text" id="input_63" name="initial8" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_63">
                    <?php endif; ?>
                </div>
            </li>
            <li class="form-line" data-type="control_text" id="id_64">
                <div id="cid_64" class="form-input-wide" data-layout="full">
                    <div id="text_64" class="form-html" data-component="text" tabindex="0">
                        <ul style="list-style-type: disc;">
                            <li>
                                The Medicare beneficiary or his/her legal representative (named below) will receive
                                or has received a copy (a photocopy is permissible) of this contract, before items
                                or services are furnished to him or her under the terms of this contract. Patient or
                                patient representatives initials here:
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="form-line" data-type="control_textbox" id="id_65">
                <label class="form-label form-label-top" id="label_65" for="input_65"> Initial Here </label>
                <div id="cid_65" class="form-input-wide" data-layout="half">
                    <?php if (!empty($_POST['initial9'])): ?>
                        <b><?php echo $_POST['initial9']; ?></b>
                    <?php else: ?>
                        <input type="text" id="input_65" name="initial9" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_65">
                    <?php endif; ?>
                </div>
            </li>
            <li class="form-line" data-type="control_text" id="id_66">
                <div id="cid_66" class="form-input-wide" data-layout="full">
                    <div id="text_66" class="form-html" data-component="text" tabindex="0">
                        <ul style="list-style-type: disc;">
                            <li>
                                This contract cannot be entered into by Dr (
                                <strong>Nicholls, Hoffman, Logerquist, Sanchez, and Matteson</strong>
                                ), the Medicare beneficiary, or legal represetative during a time when the Medicare
                                beneficiary, requires emergency care or services. However, Dr. (
                                <strong>Nicholls, Hoffman, Logerquist, Sanchez, and Matteson</strong>
                                ) may furnish emergency or urgent care services to a Medicare beneficiary in
                                accordance with §3044.28 of the Medicare Carriers Manual). Patient or patient
                                representatives initials here:
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="form-line" data-type="control_textbox" id="id_67">
                <label class="form-label form-label-top" id="label_67" for="input_67"> Initial Here </label>
                <div id="cid_67" class="form-input-wide" data-layout="half">
                    <?php if (!empty($_POST['initial10'])): ?>
                        <b><?php echo $_POST['initial10']; ?></b>
                    <?php else: ?>
                        <input type="text" id="input_67" name="initial10" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_67">
                    <?php endif; ?>
                </div>
            </li>
            <li class="form-line" data-type="control_text" id="id_68">
                <div id="cid_68" class="form-input-wide" data-layout="full">
                    <div id="text_68" class="form-html" data-component="text" tabindex="0">
                        <ul style="list-style-type: disc;">
                            <li>
                                Dr. (
                                <strong>Nicholls, Hoffman, Logerquist, Sanchez, and Matteson</strong>
                                ) will supply CMS with a copy of this contract upon request only.
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="form-line" data-type="control_text" id="id_69">
                <div id="cid_69" class="form-input-wide" data-layout="full">
                    <div id="text_69" class="form-html" data-component="text" tabindex="0">
                        <ul style="list-style-type: disc;">
                            <li>
                                Dr. (
                                <strong>Nicholls, Hoffman, Logerquist, Sanchez, and Matteson</strong>
                                ) will retain the original contract (original signatures of both parties required)
                                for the duration of the opt out period. Patient or patient representatives initials
                                here:
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="form-line" data-type="control_textbox" id="id_71">
                <label class="form-label form-label-top" id="label_71" for="input_71"> Initial Here </label>
                <div id="cid_71" class="form-input-wide" data-layout="half">
                    <?php if (!empty($_POST['initial11'])): ?>
                        <b><?php echo $_POST['initial11']; ?></b>
                    <?php else: ?>
                        <input type="text" id="input_71" name="initial11" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_71">
                    <?php endif; ?>
                </div>
            </li>
            <li class="form-line" data-type="control_text" id="id_70">
                <div id="cid_70" class="form-input-wide" data-layout="full">
                    <div id="text_70" class="form-html" data-component="text" tabindex="0">
                        <ul style="list-style-type: disc;">
                            <li>
                                Dr. (
                                <strong>Nicholls, Hoffman, Logerquist, Sanchez, and Matteson</strong>
                                ) understands that the current private contract remains in effect for two years. If
                                Dr. (
                                <strong>Nicholls, Hoffman, Logerquist, Sanchez, and Matteson</strong>
                                ) continues to opt out of Medicare, she/he will complete a new contract for each
                                Medicare beneficiary at the beginning of the effective date and will submit the
                                appropriate affidavit to the local Medicare carrier Patient or patient
                                representatives initials here:
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="form-line" data-type="control_textbox" id="id_72">
                <label class="form-label form-label-top" id="label_72" for="input_72"> Initial Here </label>
                <div id="cid_72" class="form-input-wide" data-layout="half">
                    <?php if (!empty($_POST['initial12'])): ?>
                        <b><?php echo $_POST['initial12']; ?></b>
                    <?php else: ?>
                        <input type="text" id="input_72" name="initial12" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_72">
                    <?php endif; ?>
                </div>
            </li>
            <li class="form-line" data-type="control_text" id="id_73">
                <div id="cid_73" class="form-input-wide" data-layout="full">
                    <div id="text_73" class="form-html" data-component="text" tabindex="0">
                        <p><em><strong>*Once this form is initialed/signed and submitted on our website the
                                    psychologist/clinician for whom the Medicare beneficiary is seeing will sign the
                                    contract and provide a copy to you at the first visit.</strong></em></p>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-1" data-type="control_textbox" id="id_8">
                <label class="form-label form-label-top" id="label_8" for="input_8"> Psychologist/Clinician's
                    Signature </label>
                <div id="cid_8" class="form-input-wide" data-layout="half">
                    <?php if (!empty($_POST['psychologist_field'])): ?>
                        <b><?php echo $_POST['psychologist_field']; ?></b>
                    <?php else: ?>
                        <input type="text" id="input_8" name="psychologist_field" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_8">
                    <?php endif; ?>
                </div>
            </li>
            <li class="form-line form-line-column form-col-2" data-type="control_datetime" id="id_6">
                <label class="form-label form-label-top" id="label_6" for="lite_mode_6"> Date </label>
                <div id="cid_6" class="form-input-wide" data-layout="half">
                    <div data-wrapper-react="true">
                        <div style="display:none">
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="tel" class="form-textbox validate[limitDate]" id="month_6"
                                    name="psychologist_date[month]" size="2" data-maxlength="2" data-age="" maxlength="2"
                                    value="" autocomplete="section-input_6 off"
                                    aria-labelledby="label_6 sublabel_6_month" inputmode="numeric">
                                <span class="date-separate" aria-hidden="true">
                                    &nbsp;-
                                </span>
                                <label class="form-sub-label" for="month_6" id="sublabel_6_month"
                                    style="min-height:13px" aria-hidden="false"> Month </label>
                            </span>
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="tel" class="form-textbox validate[limitDate]" id="day_6"
                                    name="psychologist_date[day]" size="2" data-maxlength="2" data-age="" maxlength="2"
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
                                    name="psychologist_date[year]" size="4" data-maxlength="4" data-age="" maxlength="4"
                                    value="" autocomplete="section-input_6 off"
                                    aria-labelledby="label_6 sublabel_6_year">
                                <label class="form-sub-label" for="year_6" id="sublabel_6_year"
                                    style="min-height:13px" aria-hidden="false"> Year </label>
                            </span>
                        </div>
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <?php if (!empty($_POST['psychologist_date'])): ?>
                                <b><?php echo $_POST['psychologist_date']['month'] . '-' . $_POST['psychologist_date']['day'] . '-' . $_POST['psychologist_date']['year']; ?></b>
                            <?php else: ?>
                                <input type="text" class="form-textbox validate[limitDate, validateLiteDate]"
                                    id="lite_mode_6" size="12" data-maxlength="12" data-age="" value=""
                                    data-format="mmddyyyy" data-seperator="-" placeholder="MM-DD-YYYY"
                                    autocomplete="section-input_6 off" aria-labelledby="label_6 sublabel_6_litemode"
                                    inputmode="numeric">
                                <img class=" newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date" id="input_6_pick"
                                    src="./img/calendar.png"
                                    data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v2">
                                <label class="form-sub-label" for="lite_mode_6" id="sublabel_6_litemode"
                                    style="min-height:13px" aria-hidden="false"> Date </label>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-3" data-type="control_textbox" id="id_75">
                <label class="form-label form-label-top" id="label_75" for="input_75"> Medicare Beneficiary/Legal
                    Representative </label>
                <div id="cid_75" class="form-input-wide" data-layout="half">
                    <?php if (!empty($_POST['medicare_field'])): ?>
                        <b><?php echo $_POST['medicare_field']; ?></b>
                    <?php else: ?>
                        <input type="text" id="input_75" name="medicare_field" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_75">
                    <?php endif; ?>
                </div>
            </li>
            <li class="form-line form-line-column form-col-4" data-type="control_datetime" id="id_74">
                <label class="form-label form-label-top" id="label_74" for="lite_mode_74"> Date </label>
                <div id="cid_74" class="form-input-wide" data-layout="half">
                    <div data-wrapper-react="true">
                        <div style="display:none">
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="tel" class="form-textbox validate[limitDate]" id="month_74"
                                    name="psycho_date[month]" size="2" data-maxlength="2" data-age="" maxlength="2"
                                    value="" autocomplete="section-input_74 off"
                                    aria-labelledby="label_74 sublabel_74_month" inputmode="numeric">
                                <span class="date-separate" aria-hidden="true">
                                    &nbsp;-
                                </span>
                                <label class="form-sub-label" for="month_74" id="sublabel_74_month"
                                    style="min-height:13px" aria-hidden="false"> Month </label>
                            </span>
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="tel" class="form-textbox validate[limitDate]" id="day_74"
                                    name="psycho_date[day]" size="2" data-maxlength="2" data-age="" maxlength="2"
                                    value="" autocomplete="section-input_74 off"
                                    aria-labelledby="label_74 sublabel_74_day" inputmode="numeric">
                                <span class="date-separate" aria-hidden="true">
                                    &nbsp;-
                                </span>
                                <label class="form-sub-label" for="day_74" id="sublabel_74_day"
                                    style="min-height:13px" aria-hidden="false"> Day </label>
                            </span>
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="tel" class="form-textbox validate[limitDate]" id="year_74"
                                    name="psycho_date[year]" size="4" data-maxlength="4" data-age="" maxlength="4"
                                    value="" autocomplete="section-input_74 off"
                                    aria-labelledby="label_74 sublabel_74_year">
                                <label class="form-sub-label" for="year_74" id="sublabel_74_year"
                                    style="min-height:13px" aria-hidden="false"> Year </label>
                            </span>
                        </div>
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <?php if (!empty($_POST['psycho_date'])): ?>
                                <b><?php echo $_POST['psycho_date']['month'] . '-' . $_POST['psycho_date']['day'] . '-' . $_POST['psycho_date']['year']; ?></b>
                            <?php else: ?>
                                <input type="text" class="form-textbox validate[limitDate, validateLiteDate]"
                                    id="lite_mode_74" size="12" data-maxlength="12" data-age="" value=""
                                    data-format="mmddyyyy" data-seperator="-" placeholder="MM-DD-YYYY"
                                    autocomplete="section-input_74 off" aria-labelledby="label_74 sublabel_74_litemode"
                                    inputmode="numeric">
                                <img class=" newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date"
                                    id="input_74_pick" src="./img/calendar.png"
                                    data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v2">
                                <label class="form-sub-label" for="lite_mode_74" id="sublabel_74_litemode"
                                    style="min-height:13px" aria-hidden="false"> Date </label>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </li>
            <?php if ( empty($_POST) ): ?>
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
    <input type="hidden" name="event_id" value="1681115218817_212746288836165_8rUWRAg">
</form>

<?php
$content = ob_get_contents();
get_footer();

$form_id = 1;
require_once 'form-controller.php';
?>
