<div>
    <div class="toolbar py-5 py-lg-5" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bold my-1 fs-3">تنظیمات</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-600">
                        <a href="{{route('home')}}" class="text-gray-600 text-hover-primary">صفحه اصلی</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-600">اکانت </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-500">تنظیمات</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->

            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>


    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->
        <div class="content flex-row-fluid" id="kt_content">
            <!--begin::Navbar-->
            <livewire:components.user.tools-bar/>
            <!--end::Navbar-->

            <div class="card mb-5 mb-xl-10">
                <!--begin::Card header-->
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                    <!--begin::Card title-->
                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0">اطلاعات پروفایل</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--begin::Card header-->
                <!--begin::Content-->
                <div id="kt_account_settings_profile_details" class="collapse show">
                    <!--begin::Form-->
                    <form id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                        <!--begin::Card body-->
                        <div class="card-body border-top p-9" data-select2-id="select2-data-133-5f6e">
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">آوارتار</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <!--begin::Image input-->
                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{\Illuminate\Support\Facades\Storage::url(auth()->user()->avatar)}}')">
                                        <!--begin::Preview existing avatar-->
                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{\Illuminate\Support\Facades\Storage::url(auth()->user()->avatar)}})"></div>
                                        <!--end::Preview existing avatar-->
                                        <!--begin::Label-->
                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
                                            <i class="ki-duotone ki-pencil fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <!--begin::Inputs-->
                                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                            <input type="hidden" name="avatar_remove">
                                            <!--end::Inputs-->
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Cancel-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
															<i class="ki-duotone ki-cross fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
                                        <!--end::Cancel-->
                                        <!--begin::Remove-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
															<i class="ki-duotone ki-cross fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
                                        <!--end::Remove-->
                                    </div>
                                    <!--end::Image input-->
                                    <!--begin::Hint-->
                                    <div class="form-text">فرمت های مورد تایید: png, jpg, jpeg.</div>
                                    <!--end::Hint-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Full Name</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <!--begin::Col-->
                                        <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                            <input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name" value="Max">
                                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                            <input type="text" name="lname" class="form-control form-control-lg form-control-solid" placeholder="Last name" value="Smith">
                                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Company</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" name="company" class="form-control form-control-lg form-control-solid" placeholder="Company name" value="Keenthemes">
                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                    <span class="required">Contact Phone</span>
                                    <span class="ms-1" data-bs-toggle="tooltip" aria-label="Phone number must be active" data-bs-original-title="Phone number must be active" data-kt-initialized="1">
														<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="044 3276 454 935">
                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">Company Site</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="website" class="form-control form-control-lg form-control-solid" placeholder="Company website" value="keenthemes.com">
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                    <span class="required">Country</span>
                                    <span class="ms-1" data-bs-toggle="tooltip" aria-label="Country of origination" data-bs-original-title="Country of origination" data-kt-initialized="1">
														<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a country..." class="form-select form-select-solid form-select-lg fw-semibold select2-hidden-accessible" data-select2-id="select2-data-9-hj2l" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                        <option value="" data-select2-id="select2-data-11-3quq">Select a Country...</option>
                                        <option data-kt-flag="flags/afghanistan.svg" value="AF">Afghanistan</option>
                                        <option data-kt-flag="flags/aland-islands.svg" value="AX">Aland Islands</option>
                                        <option data-kt-flag="flags/albania.svg" value="AL">Albania</option>
                                        <option data-kt-flag="flags/algeria.svg" value="DZ">Algeria</option>
                                        <option data-kt-flag="flags/american-samoa.svg" value="AS">American Samoa</option>
                                        <option data-kt-flag="flags/andorra.svg" value="AD">Andorra</option>
                                        <option data-kt-flag="flags/angola.svg" value="AO">Angola</option>
                                        <option data-kt-flag="flags/anguilla.svg" value="AI">Anguilla</option>
                                        <option data-kt-flag="flags/antigua-and-barbuda.svg" value="AG">Antigua and Barbuda</option>
                                        <option data-kt-flag="flags/argentina.svg" value="AR">Argentina</option>
                                        <option data-kt-flag="flags/armenia.svg" value="AM">Armenia</option>
                                        <option data-kt-flag="flags/aruba.svg" value="AW">Aruba</option>
                                        <option data-kt-flag="flags/australia.svg" value="AU">Australia</option>
                                        <option data-kt-flag="flags/austria.svg" value="AT">Austria</option>
                                        <option data-kt-flag="flags/azerbaijan.svg" value="AZ">Azerbaijan</option>
                                        <option data-kt-flag="flags/bahamas.svg" value="BS">Bahamas</option>
                                        <option data-kt-flag="flags/bahrain.svg" value="BH">Bahrain</option>
                                        <option data-kt-flag="flags/bangladesh.svg" value="BD">Bangladesh</option>
                                        <option data-kt-flag="flags/barbados.svg" value="BB">Barbados</option>
                                        <option data-kt-flag="flags/belarus.svg" value="BY">Belarus</option>
                                        <option data-kt-flag="flags/belgium.svg" value="BE">Belgium</option>
                                        <option data-kt-flag="flags/belize.svg" value="BZ">Belize</option>
                                        <option data-kt-flag="flags/benin.svg" value="BJ">Benin</option>
                                        <option data-kt-flag="flags/bermuda.svg" value="BM">Bermuda</option>
                                        <option data-kt-flag="flags/bhutan.svg" value="BT">Bhutan</option>
                                        <option data-kt-flag="flags/bolivia.svg" value="BO">Bolivia, Plurinational State of</option>
                                        <option data-kt-flag="flags/bonaire.svg" value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                        <option data-kt-flag="flags/bosnia-and-herzegovina.svg" value="BA">Bosnia and Herzegovina</option>
                                        <option data-kt-flag="flags/botswana.svg" value="BW">Botswana</option>
                                        <option data-kt-flag="flags/brazil.svg" value="BR">Brazil</option>
                                        <option data-kt-flag="flags/british-indian-ocean-territory.svg" value="IO">British Indian Ocean Territory</option>
                                        <option data-kt-flag="flags/brunei.svg" value="BN">Brunei Darussalam</option>
                                        <option data-kt-flag="flags/bulgaria.svg" value="BG">Bulgaria</option>
                                        <option data-kt-flag="flags/burkina-faso.svg" value="BF">Burkina Faso</option>
                                        <option data-kt-flag="flags/burundi.svg" value="BI">Burundi</option>
                                        <option data-kt-flag="flags/cambodia.svg" value="KH">Cambodia</option>
                                        <option data-kt-flag="flags/cameroon.svg" value="CM">Cameroon</option>
                                        <option data-kt-flag="flags/canada.svg" value="CA">Canada</option>
                                        <option data-kt-flag="flags/cape-verde.svg" value="CV">Cape Verde</option>
                                        <option data-kt-flag="flags/cayman-islands.svg" value="KY">Cayman Islands</option>
                                        <option data-kt-flag="flags/central-african-republic.svg" value="CF">Central African Republic</option>
                                        <option data-kt-flag="flags/chad.svg" value="TD">Chad</option>
                                        <option data-kt-flag="flags/chile.svg" value="CL">Chile</option>
                                        <option data-kt-flag="flags/china.svg" value="CN">China</option>
                                        <option data-kt-flag="flags/christmas-island.svg" value="CX">Christmas Island</option>
                                        <option data-kt-flag="flags/cocos-island.svg" value="CC">Cocos (Keeling) Islands</option>
                                        <option data-kt-flag="flags/colombia.svg" value="CO">Colombia</option>
                                        <option data-kt-flag="flags/comoros.svg" value="KM">Comoros</option>
                                        <option data-kt-flag="flags/cook-islands.svg" value="CK">Cook Islands</option>
                                        <option data-kt-flag="flags/costa-rica.svg" value="CR">Costa Rica</option>
                                        <option data-kt-flag="flags/ivory-coast.svg" value="CI">Côte d'Ivoire</option>
                                        <option data-kt-flag="flags/croatia.svg" value="HR">Croatia</option>
                                        <option data-kt-flag="flags/cuba.svg" value="CU">Cuba</option>
                                        <option data-kt-flag="flags/curacao.svg" value="CW">Curaçao</option>
                                        <option data-kt-flag="flags/czech-republic.svg" value="CZ">Czech Republic</option>
                                        <option data-kt-flag="flags/denmark.svg" value="DK">Denmark</option>
                                        <option data-kt-flag="flags/djibouti.svg" value="DJ">Djibouti</option>
                                        <option data-kt-flag="flags/dominica.svg" value="DM">Dominica</option>
                                        <option data-kt-flag="flags/dominican-republic.svg" value="DO">Dominican Republic</option>
                                        <option data-kt-flag="flags/ecuador.svg" value="EC">Ecuador</option>
                                        <option data-kt-flag="flags/egypt.svg" value="EG">Egypt</option>
                                        <option data-kt-flag="flags/el-salvador.svg" value="SV">El Salvador</option>
                                        <option data-kt-flag="flags/equatorial-guinea.svg" value="GQ">Equatorial Guinea</option>
                                        <option data-kt-flag="flags/eritrea.svg" value="ER">Eritrea</option>
                                        <option data-kt-flag="flags/estonia.svg" value="EE">Estonia</option>
                                        <option data-kt-flag="flags/ethiopia.svg" value="ET">Ethiopia</option>
                                        <option data-kt-flag="flags/falkland-islands.svg" value="FK">Falkland Islands (Malvinas)</option>
                                        <option data-kt-flag="flags/fiji.svg" value="FJ">Fiji</option>
                                        <option data-kt-flag="flags/finland.svg" value="FI">Finland</option>
                                        <option data-kt-flag="flags/france.svg" value="FR">France</option>
                                        <option data-kt-flag="flags/french-polynesia.svg" value="PF">French Polynesia</option>
                                        <option data-kt-flag="flags/gabon.svg" value="GA">Gabon</option>
                                        <option data-kt-flag="flags/gambia.svg" value="GM">Gambia</option>
                                        <option data-kt-flag="flags/georgia.svg" value="GE">Georgia</option>
                                        <option data-kt-flag="flags/germany.svg" value="DE">Germany</option>
                                        <option data-kt-flag="flags/ghana.svg" value="GH">Ghana</option>
                                        <option data-kt-flag="flags/gibraltar.svg" value="GI">Gibraltar</option>
                                        <option data-kt-flag="flags/greece.svg" value="GR">Greece</option>
                                        <option data-kt-flag="flags/greenland.svg" value="GL">Greenland</option>
                                        <option data-kt-flag="flags/grenada.svg" value="GD">Grenada</option>
                                        <option data-kt-flag="flags/guam.svg" value="GU">Guam</option>
                                        <option data-kt-flag="flags/guatemala.svg" value="GT">Guatemala</option>
                                        <option data-kt-flag="flags/guernsey.svg" value="GG">Guernsey</option>
                                        <option data-kt-flag="flags/guinea.svg" value="GN">Guinea</option>
                                        <option data-kt-flag="flags/guinea-bissau.svg" value="GW">Guinea-Bissau</option>
                                        <option data-kt-flag="flags/haiti.svg" value="HT">Haiti</option>
                                        <option data-kt-flag="flags/vatican-city.svg" value="VA">Holy See (Vatican City State)</option>
                                        <option data-kt-flag="flags/honduras.svg" value="HN">Honduras</option>
                                        <option data-kt-flag="flags/hong-kong.svg" value="HK">Hong Kong</option>
                                        <option data-kt-flag="flags/hungary.svg" value="HU">Hungary</option>
                                        <option data-kt-flag="flags/iceland.svg" value="IS">Iceland</option>
                                        <option data-kt-flag="flags/india.svg" value="IN">India</option>
                                        <option data-kt-flag="flags/indonesia.svg" value="ID">Indonesia</option>
                                        <option data-kt-flag="flags/iran.svg" value="IR">Iran, Islamic Republic of</option>
                                        <option data-kt-flag="flags/iraq.svg" value="IQ">Iraq</option>
                                        <option data-kt-flag="flags/ireland.svg" value="IE">Ireland</option>
                                        <option data-kt-flag="flags/isle-of-man.svg" value="IM">Isle of Man</option>
                                        <option data-kt-flag="flags/israel.svg" value="IL">Israel</option>
                                        <option data-kt-flag="flags/italy.svg" value="IT">Italy</option>
                                        <option data-kt-flag="flags/jamaica.svg" value="JM">Jamaica</option>
                                        <option data-kt-flag="flags/japan.svg" value="JP">Japan</option>
                                        <option data-kt-flag="flags/jersey.svg" value="JE">Jersey</option>
                                        <option data-kt-flag="flags/jordan.svg" value="JO">Jordan</option>
                                        <option data-kt-flag="flags/kazakhstan.svg" value="KZ">Kazakhstan</option>
                                        <option data-kt-flag="flags/kenya.svg" value="KE">Kenya</option>
                                        <option data-kt-flag="flags/kiribati.svg" value="KI">Kiribati</option>
                                        <option data-kt-flag="flags/north-korea.svg" value="KP">Korea, Democratic People's Republic of</option>
                                        <option data-kt-flag="flags/kuwait.svg" value="KW">Kuwait</option>
                                        <option data-kt-flag="flags/kyrgyzstan.svg" value="KG">Kyrgyzstan</option>
                                        <option data-kt-flag="flags/laos.svg" value="LA">Lao People's Democratic Republic</option>
                                        <option data-kt-flag="flags/latvia.svg" value="LV">Latvia</option>
                                        <option data-kt-flag="flags/lebanon.svg" value="LB">Lebanon</option>
                                        <option data-kt-flag="flags/lesotho.svg" value="LS">Lesotho</option>
                                        <option data-kt-flag="flags/liberia.svg" value="LR">Liberia</option>
                                        <option data-kt-flag="flags/libya.svg" value="LY">Libya</option>
                                        <option data-kt-flag="flags/liechtenstein.svg" value="LI">Liechtenstein</option>
                                        <option data-kt-flag="flags/lithuania.svg" value="LT">Lithuania</option>
                                        <option data-kt-flag="flags/luxembourg.svg" value="LU">Luxembourg</option>
                                        <option data-kt-flag="flags/macao.svg" value="MO">Macao</option>
                                        <option data-kt-flag="flags/madagascar.svg" value="MG">Madagascar</option>
                                        <option data-kt-flag="flags/malawi.svg" value="MW">Malawi</option>
                                        <option data-kt-flag="flags/malaysia.svg" value="MY">Malaysia</option>
                                        <option data-kt-flag="flags/maldives.svg" value="MV">Maldives</option>
                                        <option data-kt-flag="flags/mali.svg" value="ML">Mali</option>
                                        <option data-kt-flag="flags/malta.svg" value="MT">Malta</option>
                                        <option data-kt-flag="flags/marshall-island.svg" value="MH">Marshall Islands</option>
                                        <option data-kt-flag="flags/martinique.svg" value="MQ">Martinique</option>
                                        <option data-kt-flag="flags/mauritania.svg" value="MR">Mauritania</option>
                                        <option data-kt-flag="flags/mauritius.svg" value="MU">Mauritius</option>
                                        <option data-kt-flag="flags/mexico.svg" value="MX">Mexico</option>
                                        <option data-kt-flag="flags/micronesia.svg" value="FM">Micronesia, Federated States of</option>
                                        <option data-kt-flag="flags/moldova.svg" value="MD">Moldova, Republic of</option>
                                        <option data-kt-flag="flags/monaco.svg" value="MC">Monaco</option>
                                        <option data-kt-flag="flags/mongolia.svg" value="MN">Mongolia</option>
                                        <option data-kt-flag="flags/montenegro.svg" value="ME">Montenegro</option>
                                        <option data-kt-flag="flags/montserrat.svg" value="MS">Montserrat</option>
                                        <option data-kt-flag="flags/morocco.svg" value="MA">Morocco</option>
                                        <option data-kt-flag="flags/mozambique.svg" value="MZ">Mozambique</option>
                                        <option data-kt-flag="flags/myanmar.svg" value="MM">Myanmar</option>
                                        <option data-kt-flag="flags/namibia.svg" value="NA">Namibia</option>
                                        <option data-kt-flag="flags/nauru.svg" value="NR">Nauru</option>
                                        <option data-kt-flag="flags/nepal.svg" value="NP">Nepal</option>
                                        <option data-kt-flag="flags/netherlands.svg" value="NL">Netherlands</option>
                                        <option data-kt-flag="flags/new-zealand.svg" value="NZ">New Zealand</option>
                                        <option data-kt-flag="flags/nicaragua.svg" value="NI">Nicaragua</option>
                                        <option data-kt-flag="flags/niger.svg" value="NE">Niger</option>
                                        <option data-kt-flag="flags/nigeria.svg" value="NG">Nigeria</option>
                                        <option data-kt-flag="flags/niue.svg" value="NU">Niue</option>
                                        <option data-kt-flag="flags/norfolk-island.svg" value="NF">Norfolk Island</option>
                                        <option data-kt-flag="flags/northern-mariana-islands.svg" value="MP">Northern Mariana Islands</option>
                                        <option data-kt-flag="flags/norway.svg" value="NO">Norway</option>
                                        <option data-kt-flag="flags/oman.svg" value="OM">Oman</option>
                                        <option data-kt-flag="flags/pakistan.svg" value="PK">Pakistan</option>
                                        <option data-kt-flag="flags/palau.svg" value="PW">Palau</option>
                                        <option data-kt-flag="flags/palestine.svg" value="PS">Palestinian Territory, Occupied</option>
                                        <option data-kt-flag="flags/panama.svg" value="PA">Panama</option>
                                        <option data-kt-flag="flags/papua-new-guinea.svg" value="PG">Papua New Guinea</option>
                                        <option data-kt-flag="flags/paraguay.svg" value="PY">Paraguay</option>
                                        <option data-kt-flag="flags/peru.svg" value="PE">Peru</option>
                                        <option data-kt-flag="flags/philippines.svg" value="PH">Philippines</option>
                                        <option data-kt-flag="flags/poland.svg" value="PL">Poland</option>
                                        <option data-kt-flag="flags/portugal.svg" value="PT">Portugal</option>
                                        <option data-kt-flag="flags/puerto-rico.svg" value="PR">Puerto Rico</option>
                                        <option data-kt-flag="flags/qatar.svg" value="QA">Qatar</option>
                                        <option data-kt-flag="flags/romania.svg" value="RO">Romania</option>
                                        <option data-kt-flag="flags/russia.svg" value="RU">Russian Federation</option>
                                        <option data-kt-flag="flags/rwanda.svg" value="RW">Rwanda</option>
                                        <option data-kt-flag="flags/st-barts.svg" value="BL">Saint Barthélemy</option>
                                        <option data-kt-flag="flags/saint-kitts-and-nevis.svg" value="KN">Saint Kitts and Nevis</option>
                                        <option data-kt-flag="flags/st-lucia.svg" value="LC">Saint Lucia</option>
                                        <option data-kt-flag="flags/sint-maarten.svg" value="MF">Saint Martin (French part)</option>
                                        <option data-kt-flag="flags/st-vincent-and-the-grenadines.svg" value="VC">Saint Vincent and the Grenadines</option>
                                        <option data-kt-flag="flags/samoa.svg" value="WS">Samoa</option>
                                        <option data-kt-flag="flags/san-marino.svg" value="SM">San Marino</option>
                                        <option data-kt-flag="flags/sao-tome-and-prince.svg" value="ST">Sao Tome and Principe</option>
                                        <option data-kt-flag="flags/saudi-arabia.svg" value="SA">Saudi Arabia</option>
                                        <option data-kt-flag="flags/senegal.svg" value="SN">Senegal</option>
                                        <option data-kt-flag="flags/serbia.svg" value="RS">Serbia</option>
                                        <option data-kt-flag="flags/seychelles.svg" value="SC">Seychelles</option>
                                        <option data-kt-flag="flags/sierra-leone.svg" value="SL">Sierra Leone</option>
                                        <option data-kt-flag="flags/singapore.svg" value="SG">Singapore</option>
                                        <option data-kt-flag="flags/sint-maarten.svg" value="SX">Sint Maarten (Dutch part)</option>
                                        <option data-kt-flag="flags/slovakia.svg" value="SK">Slovakia</option>
                                        <option data-kt-flag="flags/slovenia.svg" value="SI">Slovenia</option>
                                        <option data-kt-flag="flags/solomon-islands.svg" value="SB">Solomon Islands</option>
                                        <option data-kt-flag="flags/somalia.svg" value="SO">Somalia</option>
                                        <option data-kt-flag="flags/south-africa.svg" value="ZA">South Africa</option>
                                        <option data-kt-flag="flags/south-korea.svg" value="KR">South Korea</option>
                                        <option data-kt-flag="flags/south-sudan.svg" value="SS">South Sudan</option>
                                        <option data-kt-flag="flags/spain.svg" value="ES">Spain</option>
                                        <option data-kt-flag="flags/sri-lanka.svg" value="LK">Sri Lanka</option>
                                        <option data-kt-flag="flags/sudan.svg" value="SD">Sudan</option>
                                        <option data-kt-flag="flags/suriname.svg" value="SR">Suriname</option>
                                        <option data-kt-flag="flags/swaziland.svg" value="SZ">Swaziland</option>
                                        <option data-kt-flag="flags/sweden.svg" value="SE">Sweden</option>
                                        <option data-kt-flag="flags/switzerland.svg" value="CH">Switzerland</option>
                                        <option data-kt-flag="flags/syria.svg" value="SY">Syrian Arab Republic</option>
                                        <option data-kt-flag="flags/taiwan.svg" value="TW">Taiwan, Province of China</option>
                                        <option data-kt-flag="flags/tajikistan.svg" value="TJ">Tajikistan</option>
                                        <option data-kt-flag="flags/tanzania.svg" value="TZ">Tanzania, United Republic of</option>
                                        <option data-kt-flag="flags/thailand.svg" value="TH">Thailand</option>
                                        <option data-kt-flag="flags/togo.svg" value="TG">Togo</option>
                                        <option data-kt-flag="flags/tokelau.svg" value="TK">Tokelau</option>
                                        <option data-kt-flag="flags/tonga.svg" value="TO">Tonga</option>
                                        <option data-kt-flag="flags/trinidad-and-tobago.svg" value="TT">Trinidad and Tobago</option>
                                        <option data-kt-flag="flags/tunisia.svg" value="TN">Tunisia</option>
                                        <option data-kt-flag="flags/turkey.svg" value="TR">Turkey</option>
                                        <option data-kt-flag="flags/turkmenistan.svg" value="TM">Turkmenistan</option>
                                        <option data-kt-flag="flags/turks-and-caicos.svg" value="TC">Turks and Caicos Islands</option>
                                        <option data-kt-flag="flags/tuvalu.svg" value="TV">Tuvalu</option>
                                        <option data-kt-flag="flags/uganda.svg" value="UG">Uganda</option>
                                        <option data-kt-flag="flags/ukraine.svg" value="UA">Ukraine</option>
                                        <option data-kt-flag="flags/united-arab-emirates.svg" value="AE">United Arab Emirates</option>
                                        <option data-kt-flag="flags/united-kingdom.svg" value="GB">United Kingdom</option>
                                        <option data-kt-flag="flags/united-states.svg" value="US">United States</option>
                                        <option data-kt-flag="flags/uruguay.svg" value="UY">Uruguay</option>
                                        <option data-kt-flag="flags/uzbekistan.svg" value="UZ">Uzbekistan</option>
                                        <option data-kt-flag="flags/vanuatu.svg" value="VU">Vanuatu</option>
                                        <option data-kt-flag="flags/venezuela.svg" value="VE">Venezuela, Bolivarian Republic of</option>
                                        <option data-kt-flag="flags/vietnam.svg" value="VN">Vietnam</option>
                                        <option data-kt-flag="flags/virgin-islands.svg" value="VI">Virgin Islands</option>
                                        <option data-kt-flag="flags/yemen.svg" value="YE">Yemen</option>
                                        <option data-kt-flag="flags/zambia.svg" value="ZM">Zambia</option>
                                        <option data-kt-flag="flags/zimbabwe.svg" value="ZW">Zimbabwe</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-10-isn5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid form-select-lg fw-semibold" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-country-hy-container" aria-controls="select2-country-hy-container"><span class="select2-selection__rendered" id="select2-country-hy-container" role="textbox" aria-readonly="true" title="Select a country..."><span class="select2-selection__placeholder">Select a country...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Language</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <!--begin::Input-->
                                    <select name="language" aria-label="Select a Language" data-control="select2" data-placeholder="Select a language..." class="form-select form-select-solid form-select-lg select2-hidden-accessible" data-select2-id="select2-data-12-m0t5" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                        <option value="" data-select2-id="select2-data-14-xvfg">Select a Language...</option>
                                        <option data-kt-flag="flags/indonesia.svg" value="id" data-select2-id="select2-data-135-i5tz">Bahasa Indonesia - Indonesian</option>
                                        <option data-kt-flag="flags/malaysia.svg" value="msa" data-select2-id="select2-data-136-fw6t">Bahasa Melayu - Malay</option>
                                        <option data-kt-flag="flags/canada.svg" value="ca" data-select2-id="select2-data-137-r7l7">Català - Catalan</option>
                                        <option data-kt-flag="flags/czech-republic.svg" value="cs" data-select2-id="select2-data-138-rxc6">Čeština - Czech</option>
                                        <option data-kt-flag="flags/netherlands.svg" value="da" data-select2-id="select2-data-139-26kt">Dansk - Danish</option>
                                        <option data-kt-flag="flags/germany.svg" value="de" data-select2-id="select2-data-140-168w">Deutsch - German</option>
                                        <option data-kt-flag="flags/united-kingdom.svg" value="en" data-select2-id="select2-data-141-nl4b">English</option>
                                        <option data-kt-flag="flags/united-kingdom.svg" value="en-gb" data-select2-id="select2-data-142-dkvy">English UK - British English</option>
                                        <option data-kt-flag="flags/spain.svg" value="es" data-select2-id="select2-data-143-wcwu">Español - Spanish</option>
                                        <option data-kt-flag="flags/philippines.svg" value="fil" data-select2-id="select2-data-144-kgmc">Filipino</option>
                                        <option data-kt-flag="flags/france.svg" value="fr" data-select2-id="select2-data-145-c6mt">Français - French</option>
                                        <option data-kt-flag="flags/gabon.svg" value="ga" data-select2-id="select2-data-146-df47">Gaeilge - Irish (beta)</option>
                                        <option data-kt-flag="flags/greenland.svg" value="gl" data-select2-id="select2-data-147-qiw4">Galego - Galician (beta)</option>
                                        <option data-kt-flag="flags/croatia.svg" value="hr" data-select2-id="select2-data-148-8mp4">Hrvatski - Croatian</option>
                                        <option data-kt-flag="flags/italy.svg" value="it" data-select2-id="select2-data-149-ry23">Italiano - Italian</option>
                                        <option data-kt-flag="flags/hungary.svg" value="hu" data-select2-id="select2-data-150-k0cb">Magyar - Hungarian</option>
                                        <option data-kt-flag="flags/netherlands.svg" value="nl" data-select2-id="select2-data-151-ecio">Nederlands - Dutch</option>
                                        <option data-kt-flag="flags/norway.svg" value="no" data-select2-id="select2-data-152-jmak">Norsk - Norwegian</option>
                                        <option data-kt-flag="flags/poland.svg" value="pl" data-select2-id="select2-data-153-nes3">Polski - Polish</option>
                                        <option data-kt-flag="flags/portugal.svg" value="pt" data-select2-id="select2-data-154-kv2m">Português - Portuguese</option>
                                        <option data-kt-flag="flags/romania.svg" value="ro" data-select2-id="select2-data-155-qg9b">Română - Romanian</option>
                                        <option data-kt-flag="flags/slovakia.svg" value="sk" data-select2-id="select2-data-156-cron">Slovenčina - Slovak</option>
                                        <option data-kt-flag="flags/finland.svg" value="fi" data-select2-id="select2-data-157-vq3b">Suomi - Finnish</option>
                                        <option data-kt-flag="flags/el-salvador.svg" value="sv" data-select2-id="select2-data-158-eeuv">Svenska - Swedish</option>
                                        <option data-kt-flag="flags/virgin-islands.svg" value="vi" data-select2-id="select2-data-159-p713">Tiếng Việt - Vietnamese</option>
                                        <option data-kt-flag="flags/turkey.svg" value="tr" data-select2-id="select2-data-160-5vj9">Türkçe - Turkish</option>
                                        <option data-kt-flag="flags/greece.svg" value="el" data-select2-id="select2-data-161-chz6">Ελληνικά - Greek</option>
                                        <option data-kt-flag="flags/bulgaria.svg" value="bg" data-select2-id="select2-data-162-iq7y">Български език - Bulgarian</option>
                                        <option data-kt-flag="flags/russia.svg" value="ru" data-select2-id="select2-data-163-jlwi">Русский - Russian</option>
                                        <option data-kt-flag="flags/suriname.svg" value="sr" data-select2-id="select2-data-164-qttv">Српски - Serbian</option>
                                        <option data-kt-flag="flags/ukraine.svg" value="uk" data-select2-id="select2-data-165-51ie">Українська мова - Ukrainian</option>
                                        <option data-kt-flag="flags/israel.svg" value="he" data-select2-id="select2-data-166-1cdq">עִבְרִית - Hebrew</option>
                                        <option data-kt-flag="flags/pakistan.svg" value="ur" data-select2-id="select2-data-167-jgz7">اردو - Urdu (beta)</option>
                                        <option data-kt-flag="flags/argentina.svg" value="ar" data-select2-id="select2-data-168-nb9l">العربية - Arabic</option>
                                        <option data-kt-flag="flags/argentina.svg" value="fa" data-select2-id="select2-data-169-h8s0">فارسی - Persian</option>
                                        <option data-kt-flag="flags/mauritania.svg" value="mr" data-select2-id="select2-data-170-fwcv">मराठी - Marathi</option>
                                        <option data-kt-flag="flags/india.svg" value="hi" data-select2-id="select2-data-171-ikyn">हिन्दी - Hindi</option>
                                        <option data-kt-flag="flags/bangladesh.svg" value="bn" data-select2-id="select2-data-172-zv3c">বাংলা - Bangla</option>
                                        <option data-kt-flag="flags/guam.svg" value="gu" data-select2-id="select2-data-173-vgvs">ગુજરાતી - Gujarati</option>
                                        <option data-kt-flag="flags/india.svg" value="ta" data-select2-id="select2-data-174-rcdv">தமிழ் - Tamil</option>
                                        <option data-kt-flag="flags/saint-kitts-and-nevis.svg" value="kn" data-select2-id="select2-data-175-hwo7">ಕನ್ನಡ - Kannada</option>
                                        <option data-kt-flag="flags/thailand.svg" value="th" data-select2-id="select2-data-176-2wir">ภาษาไทย - Thai</option>
                                        <option data-kt-flag="flags/south-korea.svg" value="ko" data-select2-id="select2-data-177-cbij">한국어 - Korean</option>
                                        <option data-kt-flag="flags/japan.svg" value="ja" data-select2-id="select2-data-178-cv37">日本語 - Japanese</option>
                                        <option data-kt-flag="flags/china.svg" value="zh-cn" data-select2-id="select2-data-179-sg3s">简体中文 - Simplified Chinese</option>
                                        <option data-kt-flag="flags/taiwan.svg" value="zh-tw" data-select2-id="select2-data-180-f7ne">繁體中文 - Traditional Chinese</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5 select2-container--below" dir="ltr" data-select2-id="select2-data-13-5m9l" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid form-select-lg" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-language-w5-container" aria-controls="select2-language-w5-container"><span class="select2-selection__rendered" id="select2-language-w5-container" role="textbox" aria-readonly="true" title="Select a language..."><span class="select2-selection__placeholder">Select a language...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    <!--end::Input-->
                                    <!--begin::Hint-->
                                    <div class="form-text">Please select a preferred language, including date, time, and number formatting.</div>
                                    <!--end::Hint-->
                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Time Zone</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <select name="timezone" aria-label="Select a Timezone" data-control="select2" data-placeholder="Select a timezone.." class="form-select form-select-solid form-select-lg select2-hidden-accessible" data-select2-id="select2-data-15-ekee" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                        <option value="" data-select2-id="select2-data-17-uoki">Select a Timezone..</option>
                                        <option data-bs-offset="-39600" value="International Date Line West">(GMT-11:00) International Date Line West</option>
                                        <option data-bs-offset="-39600" value="Midway Island">(GMT-11:00) Midway Island</option>
                                        <option data-bs-offset="-39600" value="Samoa">(GMT-11:00) Samoa</option>
                                        <option data-bs-offset="-36000" value="Hawaii">(GMT-10:00) Hawaii</option>
                                        <option data-bs-offset="-28800" value="Alaska">(GMT-08:00) Alaska</option>
                                        <option data-bs-offset="-25200" value="Pacific Time (US &amp; Canada)">(GMT-07:00) Pacific Time (US &amp; Canada)</option>
                                        <option data-bs-offset="-25200" value="Tijuana">(GMT-07:00) Tijuana</option>
                                        <option data-bs-offset="-25200" value="Arizona">(GMT-07:00) Arizona</option>
                                        <option data-bs-offset="-21600" value="Mountain Time (US &amp; Canada)">(GMT-06:00) Mountain Time (US &amp; Canada)</option>
                                        <option data-bs-offset="-21600" value="Chihuahua">(GMT-06:00) Chihuahua</option>
                                        <option data-bs-offset="-21600" value="Mazatlan">(GMT-06:00) Mazatlan</option>
                                        <option data-bs-offset="-21600" value="Saskatchewan">(GMT-06:00) Saskatchewan</option>
                                        <option data-bs-offset="-21600" value="Central America">(GMT-06:00) Central America</option>
                                        <option data-bs-offset="-18000" value="Central Time (US &amp; Canada)">(GMT-05:00) Central Time (US &amp; Canada)</option>
                                        <option data-bs-offset="-18000" value="Guadalajara">(GMT-05:00) Guadalajara</option>
                                        <option data-bs-offset="-18000" value="Mexico City">(GMT-05:00) Mexico City</option>
                                        <option data-bs-offset="-18000" value="Monterrey">(GMT-05:00) Monterrey</option>
                                        <option data-bs-offset="-18000" value="Bogota">(GMT-05:00) Bogota</option>
                                        <option data-bs-offset="-18000" value="Lima">(GMT-05:00) Lima</option>
                                        <option data-bs-offset="-18000" value="Quito">(GMT-05:00) Quito</option>
                                        <option data-bs-offset="-14400" value="Eastern Time (US &amp; Canada)">(GMT-04:00) Eastern Time (US &amp; Canada)</option>
                                        <option data-bs-offset="-14400" value="Indiana (East)">(GMT-04:00) Indiana (East)</option>
                                        <option data-bs-offset="-14400" value="Caracas">(GMT-04:00) Caracas</option>
                                        <option data-bs-offset="-14400" value="La Paz">(GMT-04:00) La Paz</option>
                                        <option data-bs-offset="-14400" value="Georgetown">(GMT-04:00) Georgetown</option>
                                        <option data-bs-offset="-10800" value="Atlantic Time (Canada)">(GMT-03:00) Atlantic Time (Canada)</option>
                                        <option data-bs-offset="-10800" value="Santiago">(GMT-03:00) Santiago</option>
                                        <option data-bs-offset="-10800" value="Brasilia">(GMT-03:00) Brasilia</option>
                                        <option data-bs-offset="-10800" value="Buenos Aires">(GMT-03:00) Buenos Aires</option>
                                        <option data-bs-offset="-9000" value="Newfoundland">(GMT-02:30) Newfoundland</option>
                                        <option data-bs-offset="-7200" value="Greenland">(GMT-02:00) Greenland</option>
                                        <option data-bs-offset="-7200" value="Mid-Atlantic">(GMT-02:00) Mid-Atlantic</option>
                                        <option data-bs-offset="-3600" value="Cape Verde Is.">(GMT-01:00) Cape Verde Is.</option>
                                        <option data-bs-offset="0" value="Azores">(GMT) Azores</option>
                                        <option data-bs-offset="0" value="Monrovia">(GMT) Monrovia</option>
                                        <option data-bs-offset="0" value="UTC">(GMT) UTC</option>
                                        <option data-bs-offset="3600" value="Dublin">(GMT+01:00) Dublin</option>
                                        <option data-bs-offset="3600" value="Edinburgh">(GMT+01:00) Edinburgh</option>
                                        <option data-bs-offset="3600" value="Lisbon">(GMT+01:00) Lisbon</option>
                                        <option data-bs-offset="3600" value="London">(GMT+01:00) London</option>
                                        <option data-bs-offset="3600" value="Casablanca">(GMT+01:00) Casablanca</option>
                                        <option data-bs-offset="3600" value="West Central Africa">(GMT+01:00) West Central Africa</option>
                                        <option data-bs-offset="7200" value="Belgrade">(GMT+02:00) Belgrade</option>
                                        <option data-bs-offset="7200" value="Bratislava">(GMT+02:00) Bratislava</option>
                                        <option data-bs-offset="7200" value="Budapest">(GMT+02:00) Budapest</option>
                                        <option data-bs-offset="7200" value="Ljubljana">(GMT+02:00) Ljubljana</option>
                                        <option data-bs-offset="7200" value="Prague">(GMT+02:00) Prague</option>
                                        <option data-bs-offset="7200" value="Sarajevo">(GMT+02:00) Sarajevo</option>
                                        <option data-bs-offset="7200" value="Skopje">(GMT+02:00) Skopje</option>
                                        <option data-bs-offset="7200" value="Warsaw">(GMT+02:00) Warsaw</option>
                                        <option data-bs-offset="7200" value="Zagreb">(GMT+02:00) Zagreb</option>
                                        <option data-bs-offset="7200" value="Brussels">(GMT+02:00) Brussels</option>
                                        <option data-bs-offset="7200" value="Copenhagen">(GMT+02:00) Copenhagen</option>
                                        <option data-bs-offset="7200" value="Madrid">(GMT+02:00) Madrid</option>
                                        <option data-bs-offset="7200" value="Paris">(GMT+02:00) Paris</option>
                                        <option data-bs-offset="7200" value="Amsterdam">(GMT+02:00) Amsterdam</option>
                                        <option data-bs-offset="7200" value="Berlin">(GMT+02:00) Berlin</option>
                                        <option data-bs-offset="7200" value="Bern">(GMT+02:00) Bern</option>
                                        <option data-bs-offset="7200" value="Rome">(GMT+02:00) Rome</option>
                                        <option data-bs-offset="7200" value="Stockholm">(GMT+02:00) Stockholm</option>
                                        <option data-bs-offset="7200" value="Vienna">(GMT+02:00) Vienna</option>
                                        <option data-bs-offset="7200" value="Cairo">(GMT+02:00) Cairo</option>
                                        <option data-bs-offset="7200" value="Harare">(GMT+02:00) Harare</option>
                                        <option data-bs-offset="7200" value="Pretoria">(GMT+02:00) Pretoria</option>
                                        <option data-bs-offset="10800" value="Bucharest">(GMT+03:00) Bucharest</option>
                                        <option data-bs-offset="10800" value="Helsinki">(GMT+03:00) Helsinki</option>
                                        <option data-bs-offset="10800" value="Kiev">(GMT+03:00) Kiev</option>
                                        <option data-bs-offset="10800" value="Kyiv">(GMT+03:00) Kyiv</option>
                                        <option data-bs-offset="10800" value="Riga">(GMT+03:00) Riga</option>
                                        <option data-bs-offset="10800" value="Sofia">(GMT+03:00) Sofia</option>
                                        <option data-bs-offset="10800" value="Tallinn">(GMT+03:00) Tallinn</option>
                                        <option data-bs-offset="10800" value="Vilnius">(GMT+03:00) Vilnius</option>
                                        <option data-bs-offset="10800" value="Athens">(GMT+03:00) Athens</option>
                                        <option data-bs-offset="10800" value="Istanbul">(GMT+03:00) Istanbul</option>
                                        <option data-bs-offset="10800" value="Minsk">(GMT+03:00) Minsk</option>
                                        <option data-bs-offset="10800" value="Jerusalem">(GMT+03:00) Jerusalem</option>
                                        <option data-bs-offset="10800" value="Moscow">(GMT+03:00) Moscow</option>
                                        <option data-bs-offset="10800" value="St. Petersburg">(GMT+03:00) St. Petersburg</option>
                                        <option data-bs-offset="10800" value="Volgograd">(GMT+03:00) Volgograd</option>
                                        <option data-bs-offset="10800" value="Kuwait">(GMT+03:00) Kuwait</option>
                                        <option data-bs-offset="10800" value="Riyadh">(GMT+03:00) Riyadh</option>
                                        <option data-bs-offset="10800" value="Nairobi">(GMT+03:00) Nairobi</option>
                                        <option data-bs-offset="10800" value="Baghdad">(GMT+03:00) Baghdad</option>
                                        <option data-bs-offset="14400" value="Abu Dhabi">(GMT+04:00) Abu Dhabi</option>
                                        <option data-bs-offset="14400" value="Muscat">(GMT+04:00) Muscat</option>
                                        <option data-bs-offset="14400" value="Baku">(GMT+04:00) Baku</option>
                                        <option data-bs-offset="14400" value="Tbilisi">(GMT+04:00) Tbilisi</option>
                                        <option data-bs-offset="14400" value="Yerevan">(GMT+04:00) Yerevan</option>
                                        <option data-bs-offset="16200" value="Tehran">(GMT+04:30) Tehran</option>
                                        <option data-bs-offset="16200" value="Kabul">(GMT+04:30) Kabul</option>
                                        <option data-bs-offset="18000" value="Ekaterinburg">(GMT+05:00) Ekaterinburg</option>
                                        <option data-bs-offset="18000" value="Islamabad">(GMT+05:00) Islamabad</option>
                                        <option data-bs-offset="18000" value="Karachi">(GMT+05:00) Karachi</option>
                                        <option data-bs-offset="18000" value="Tashkent">(GMT+05:00) Tashkent</option>
                                        <option data-bs-offset="19800" value="Chennai">(GMT+05:30) Chennai</option>
                                        <option data-bs-offset="19800" value="Kolkata">(GMT+05:30) Kolkata</option>
                                        <option data-bs-offset="19800" value="Mumbai">(GMT+05:30) Mumbai</option>
                                        <option data-bs-offset="19800" value="New Delhi">(GMT+05:30) New Delhi</option>
                                        <option data-bs-offset="19800" value="Sri Jayawardenepura">(GMT+05:30) Sri Jayawardenepura</option>
                                        <option data-bs-offset="20700" value="Kathmandu">(GMT+05:45) Kathmandu</option>
                                        <option data-bs-offset="21600" value="Astana">(GMT+06:00) Astana</option>
                                        <option data-bs-offset="21600" value="Dhaka">(GMT+06:00) Dhaka</option>
                                        <option data-bs-offset="21600" value="Almaty">(GMT+06:00) Almaty</option>
                                        <option data-bs-offset="21600" value="Urumqi">(GMT+06:00) Urumqi</option>
                                        <option data-bs-offset="23400" value="Rangoon">(GMT+06:30) Rangoon</option>
                                        <option data-bs-offset="25200" value="Novosibirsk">(GMT+07:00) Novosibirsk</option>
                                        <option data-bs-offset="25200" value="Bangkok">(GMT+07:00) Bangkok</option>
                                        <option data-bs-offset="25200" value="Hanoi">(GMT+07:00) Hanoi</option>
                                        <option data-bs-offset="25200" value="Jakarta">(GMT+07:00) Jakarta</option>
                                        <option data-bs-offset="25200" value="Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
                                        <option data-bs-offset="28800" value="Beijing">(GMT+08:00) Beijing</option>
                                        <option data-bs-offset="28800" value="Chongqing">(GMT+08:00) Chongqing</option>
                                        <option data-bs-offset="28800" value="Hong Kong">(GMT+08:00) Hong Kong</option>
                                        <option data-bs-offset="28800" value="Kuala Lumpur">(GMT+08:00) Kuala Lumpur</option>
                                        <option data-bs-offset="28800" value="Singapore">(GMT+08:00) Singapore</option>
                                        <option data-bs-offset="28800" value="Taipei">(GMT+08:00) Taipei</option>
                                        <option data-bs-offset="28800" value="Perth">(GMT+08:00) Perth</option>
                                        <option data-bs-offset="28800" value="Irkutsk">(GMT+08:00) Irkutsk</option>
                                        <option data-bs-offset="28800" value="Ulaan Bataar">(GMT+08:00) Ulaan Bataar</option>
                                        <option data-bs-offset="32400" value="Seoul">(GMT+09:00) Seoul</option>
                                        <option data-bs-offset="32400" value="Osaka">(GMT+09:00) Osaka</option>
                                        <option data-bs-offset="32400" value="Sapporo">(GMT+09:00) Sapporo</option>
                                        <option data-bs-offset="32400" value="Tokyo">(GMT+09:00) Tokyo</option>
                                        <option data-bs-offset="32400" value="Yakutsk">(GMT+09:00) Yakutsk</option>
                                        <option data-bs-offset="34200" value="Darwin">(GMT+09:30) Darwin</option>
                                        <option data-bs-offset="34200" value="Adelaide">(GMT+09:30) Adelaide</option>
                                        <option data-bs-offset="36000" value="Canberra">(GMT+10:00) Canberra</option>
                                        <option data-bs-offset="36000" value="Melbourne">(GMT+10:00) Melbourne</option>
                                        <option data-bs-offset="36000" value="Sydney">(GMT+10:00) Sydney</option>
                                        <option data-bs-offset="36000" value="Brisbane">(GMT+10:00) Brisbane</option>
                                        <option data-bs-offset="36000" value="Hobart">(GMT+10:00) Hobart</option>
                                        <option data-bs-offset="36000" value="Vladivostok">(GMT+10:00) Vladivostok</option>
                                        <option data-bs-offset="36000" value="Guam">(GMT+10:00) Guam</option>
                                        <option data-bs-offset="36000" value="Port Moresby">(GMT+10:00) Port Moresby</option>
                                        <option data-bs-offset="36000" value="Solomon Is.">(GMT+10:00) Solomon Is.</option>
                                        <option data-bs-offset="39600" value="Magadan">(GMT+11:00) Magadan</option>
                                        <option data-bs-offset="39600" value="New Caledonia">(GMT+11:00) New Caledonia</option>
                                        <option data-bs-offset="43200" value="Fiji">(GMT+12:00) Fiji</option>
                                        <option data-bs-offset="43200" value="Kamchatka">(GMT+12:00) Kamchatka</option>
                                        <option data-bs-offset="43200" value="Marshall Is.">(GMT+12:00) Marshall Is.</option>
                                        <option data-bs-offset="43200" value="Auckland">(GMT+12:00) Auckland</option>
                                        <option data-bs-offset="43200" value="Wellington">(GMT+12:00) Wellington</option>
                                        <option data-bs-offset="46800" value="Nuku'alofa">(GMT+13:00) Nuku'alofa</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-16-jtkp" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid form-select-lg" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-timezone-6q-container" aria-controls="select2-timezone-6q-container"><span class="select2-selection__rendered" id="select2-timezone-6q-container" role="textbox" aria-readonly="true" title="Select a timezone.."><span class="select2-selection__placeholder">Select a timezone..</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6" data-select2-id="select2-data-183-hon1">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">Currency</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row" data-select2-id="select2-data-182-j7o4">
                                    <select name="currnecy" aria-label="Select a Currency" data-control="select2" data-placeholder="Select a currency.." class="form-select form-select-solid form-select-lg select2-hidden-accessible" data-select2-id="select2-data-18-gazo" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                        <option value="" data-select2-id="select2-data-20-66ox">Select a currency..</option>
                                        <option data-kt-flag="flags/united-states.svg" value="USD" data-select2-id="select2-data-184-bfbh">
                                            USD&nbsp;-&nbsp;USA dollar</option>
                                        <option data-kt-flag="flags/united-kingdom.svg" value="GBP" data-select2-id="select2-data-185-ybze">
                                            GBP&nbsp;-&nbsp;British pound</option>
                                        <option data-kt-flag="flags/australia.svg" value="AUD" data-select2-id="select2-data-186-6iak">
                                            AUD&nbsp;-&nbsp;Australian dollar</option>
                                        <option data-kt-flag="flags/japan.svg" value="JPY" data-select2-id="select2-data-187-boql">
                                            JPY&nbsp;-&nbsp;Japanese yen</option>
                                        <option data-kt-flag="flags/sweden.svg" value="SEK" data-select2-id="select2-data-188-2vjc">
                                            SEK&nbsp;-&nbsp;Swedish krona</option>
                                        <option data-kt-flag="flags/canada.svg" value="CAD" data-select2-id="select2-data-189-8joi">
                                            CAD&nbsp;-&nbsp;Canadian dollar</option>
                                        <option data-kt-flag="flags/switzerland.svg" value="CHF" data-select2-id="select2-data-190-3csq">
                                            CHF&nbsp;-&nbsp;Swiss franc</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5 select2-container--above" dir="ltr" data-select2-id="select2-data-19-4dun" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid form-select-lg" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-currnecy-bq-container" aria-controls="select2-currnecy-bq-container"><span class="select2-selection__rendered" id="select2-currnecy-bq-container" role="textbox" aria-readonly="true" title="Select a currency.."><span class="select2-selection__placeholder">Select a currency..</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Communication</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                    <!--begin::Options-->
                                    <div class="d-flex align-items-center mt-3">
                                        <!--begin::Option-->
                                        <label class="form-check form-check-custom form-check-inline form-check-solid me-5 is-valid">
                                            <input class="form-check-input" name="communication[]" type="checkbox" value="1">
                                            <span class="fw-semibold ps-2 fs-6">Email</span>
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label class="form-check form-check-custom form-check-inline form-check-solid is-invalid">
                                            <input class="form-check-input" name="communication[]" type="checkbox" value="2">
                                            <span class="fw-semibold ps-2 fs-6">Phone</span>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Options-->
                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-0">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">Allow Marketing</label>
                                <!--begin::Label-->
                                <!--begin::Label-->
                                <div class="col-lg-8 d-flex align-items-center">
                                    <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                        <input class="form-check-input w-45px h-30px" type="checkbox" id="allowmarketing" checked="checked">
                                        <label class="form-check-label" for="allowmarketing"></label>
                                    </div>
                                </div>
                                <!--begin::Label-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Card body-->
                        <!--begin::Actions-->
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                            <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
                        </div>
                        <!--end::Actions-->
                        <input type="hidden"></form>
                    <!--end::Form-->
                </div>
                <!--end::Content-->
            </div>

        </div>
        <!--end::Post-->
    </div>


</div>
