<x-app-layout>
    <div id="content-page" class="content-page">
        <div class="container-fluid">
           <div class="row">
              <div class="col-lg-12">
                 <div class="iq-card">
                    <div class="iq-card-body p-0">
                       <div class="iq-edit-list">
                          <ul class="iq-edit-profile d-flex nav nav-pills">
                             <li class="col-md-4 p-0">
                                <a class="nav-link active" data-toggle="pill" href="#personal-information">
                                Personal Information
                                </a>
                             </li>
                             <li class="col-md-4 p-0">
                                <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                                Change Password
                                </a>
                             </li>
                             <li class="col-md-4 p-0">
                                <a class="nav-link" data-toggle="pill" href="#manage-contact">
                                Manage Contact
                                </a>
                             </li>
                          </ul>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-lg-12">
                 <div class="iq-edit-list-data">
                    <div class="tab-content">
                       <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                          <div class="iq-card p-3">
                             <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                   <h4 class="card-title" style="font-weight: bold !important;">Personal Information</h4>
                                </div>
                             </div>
                             <div class="iq-card-body">
                                <form action="/profile/profile-picture" method="post" enctype="multipart/form-data">
                                  @csrf
                                  <div class="form-group row align-items-center">
                                    <div class="col-md-12">
                                       <div class="profile-img-edit">
                                          <img class="profile-pic" src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : '' }}" alt="">
                                          <div class="p-image">
                                             <i class="ri-pencil-line upload-button"></i>
                                             <button type="submit" class="btn btn-primary mr-2">Upload</button>
                                             <input class="file-upload" type="file" name="profile-picture" required />
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                </form>
                                <form action="/profile/personal" method="post">
                                  @csrf
                                   <div class=" row align-items-center">
                                      <div class="form-group col-sm-6">
                                         <label for="fname">Full Name:</label>
                                         <input type="text" class="form-control" name="fullname" value="{{ $user->fullname }}">
                                      </div>
                                      <div class="form-group col-sm-6">
                                         <label class="d-block">Gender:</label>
                                         <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadio6" value="Male" name="gender" class="custom-control-input" {{ $user->gender === 'Male' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="customRadio6"> Male </label>
                                         </div>
                                         <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadio7" value="Female" name="gender" class="custom-control-input" {{ $user->gender === 'Female' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="customRadio7"> Female </label>
                                         </div>
                                      </div>
                                      <div class="form-group col-sm-6">
                                         <label for="dob">Date Of Birth:</label>
                                         <input type="date" class="form-control" name="date_of_birth" id="dob" value="{{ $user->date_of_birth }}">
                                      </div>
                                      <div class="form-group col-sm-6">
                                         <label>Marital Status:</label>
                                         <select class="form-control" name="marital_status" id="exampleFormControlSelect1">
                                            <option value="Single" {{ $user->marital_status === 'Single' ? 'selected' : '' }} >Single</option>
                                            <option value="Married" {{ $user->marital_status === 'Married' ? 'selected' : '' }} >Married</option>
                                            <option value="Widowed" {{ $user->marital_status === 'Widowed' ? 'selected' : '' }} >Widowed</option>
                                            <option value="Divorced" {{ $user->marital_status === 'Divorced' ? 'selected' : '' }} >Divorced</option>
                                            <option value="Seperated" {{ $user->marital_status === 'Seperated' ? 'selected' : '' }} >Seperated</option>
                                         </select>
                                      </div>
                                      <div class="form-group col-sm-6">
                                         <label>Country:</label>
                                         <select class="form-control" id="exampleFormControlSelect3" name="country">
                                          <option value="{{ $user->country }}" selected>{{ $user->country }}</option>
                                          <option value="Afghanistan">Afghanistan</option>
                                          <option value="Åland Islands">Åland Islands</option>
                                          <option value="Albania">Albania</option>
                                          <option value="Algeria">Algeria</option>
                                          <option value="American Samoa">American Samoa</option>
                                          <option value="Andorra">Andorra</option>
                                          <option value="Angola">Angola</option>
                                          <option value="Anguilla">Anguilla</option>
                                          <option value="Antarctica">Antarctica</option>
                                          <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                          <option value="Argentina">Argentina</option>
                                          <option value="Armenia">Armenia</option>
                                          <option value="Aruba">Aruba</option>
                                          <option value="Australia">Australia</option>
                                          <option value="Austria">Austria</option>
                                          <option value="Azerbaijan">Azerbaijan</option>
                                          <option value="Bahamas">Bahamas</option>
                                          <option value="Bahrain">Bahrain</option>
                                          <option value="Bangladesh">Bangladesh</option>
                                          <option value="Barbados">Barbados</option>
                                          <option value="Belarus">Belarus</option>
                                          <option value="Belgium">Belgium</option>
                                          <option value="Belize">Belize</option>
                                          <option value="Benin">Benin</option>
                                          <option value="Bermuda">Bermuda</option>
                                          <option value="Bhutan">Bhutan</option>
                                          <option value="Bolivia">Bolivia</option>
                                          <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                          <option value="Botswana">Botswana</option>
                                          <option value="Bouvet Island">Bouvet Island</option>
                                          <option value="Brazil">Brazil</option>
                                          <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                          <option value="Brunei Darussalam">Brunei Darussalam</option>
                                          <option value="Bulgaria">Bulgaria</option>
                                          <option value="Burkina Faso">Burkina Faso</option>
                                          <option value="Burundi">Burundi</option>
                                          <option value="Cambodia">Cambodia</option>
                                          <option value="Cameroon">Cameroon</option>
                                          <option value="Canada">Canada</option>
                                          <option value="Cape Verde">Cape Verde</option>
                                          <option value="Cayman Islands">Cayman Islands</option>
                                          <option value="Central African Republic">Central African Republic</option>
                                          <option value="Chad">Chad</option>
                                          <option value="Chile">Chile</option>
                                          <option value="China">China</option>
                                          <option value="Christmas Island">Christmas Island</option>
                                          <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                          <option value="Colombia">Colombia</option>
                                          <option value="Comoros">Comoros</option>
                                          <option value="Congo">Congo</option>
                                          <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                          <option value="Cook Islands">Cook Islands</option>
                                          <option value="Costa Rica">Costa Rica</option>
                                          <option value="Cote D'ivoire">Cote D'ivoire</option>
                                          <option value="Croatia">Croatia</option>
                                          <option value="Cuba">Cuba</option>
                                          <option value="Cyprus">Cyprus</option>
                                          <option value="Czech Republic">Czech Republic</option>
                                          <option value="Denmark">Denmark</option>
                                          <option value="Djibouti">Djibouti</option>
                                          <option value="Dominica">Dominica</option>
                                          <option value="Dominican Republic">Dominican Republic</option>
                                          <option value="Ecuador">Ecuador</option>
                                          <option value="Egypt">Egypt</option>
                                          <option value="El Salvador">El Salvador</option>
                                          <option value="Equatorial Guinea">Equatorial Guinea</option>
                                          <option value="Eritrea">Eritrea</option>
                                          <option value="Estonia">Estonia</option>
                                          <option value="Ethiopia">Ethiopia</option>
                                          <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                          <option value="Faroe Islands">Faroe Islands</option>
                                          <option value="Fiji">Fiji</option>
                                          <option value="Finland">Finland</option>
                                          <option value="France">France</option>
                                          <option value="French Guiana">French Guiana</option>
                                          <option value="French Polynesia">French Polynesia</option>
                                          <option value="French Southern Territories">French Southern Territories</option>
                                          <option value="Gabon">Gabon</option>
                                          <option value="Gambia">Gambia</option>
                                          <option value="Georgia">Georgia</option>
                                          <option value="Germany">Germany</option>
                                          <option value="Ghana">Ghana</option>
                                          <option value="Gibraltar">Gibraltar</option>
                                          <option value="Greece">Greece</option>
                                          <option value="Greenland">Greenland</option>
                                          <option value="Grenada">Grenada</option>
                                          <option value="Guadeloupe">Guadeloupe</option>
                                          <option value="Guam">Guam</option>
                                          <option value="Guatemala">Guatemala</option>
                                          <option value="Guernsey">Guernsey</option>
                                          <option value="Guinea">Guinea</option>
                                          <option value="Guinea-bissau">Guinea-bissau</option>
                                          <option value="Guyana">Guyana</option>
                                          <option value="Haiti">Haiti</option>
                                          <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                          <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                          <option value="Honduras">Honduras</option>
                                          <option value="Hong Kong">Hong Kong</option>
                                          <option value="Hungary">Hungary</option>
                                          <option value="Iceland">Iceland</option>
                                          <option value="India">India</option>
                                          <option value="Indonesia">Indonesia</option>
                                          <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                          <option value="Iraq">Iraq</option>
                                          <option value="Ireland">Ireland</option>
                                          <option value="Isle of Man">Isle of Man</option>
                                          <option value="Israel">Israel</option>
                                          <option value="Italy">Italy</option>
                                          <option value="Jamaica">Jamaica</option>
                                          <option value="Japan">Japan</option>
                                          <option value="Jersey">Jersey</option>
                                          <option value="Jordan">Jordan</option>
                                          <option value="Kazakhstan">Kazakhstan</option>
                                          <option value="Kenya">Kenya</option>
                                          <option value="Kiribati">Kiribati</option>
                                          <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                          <option value="Korea, Republic of">Korea, Republic of</option>
                                          <option value="Kuwait">Kuwait</option>
                                          <option value="Kyrgyzstan">Kyrgyzstan</option>
                                          <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                          <option value="Latvia">Latvia</option>
                                          <option value="Lebanon">Lebanon</option>
                                          <option value="Lesotho">Lesotho</option>
                                          <option value="Liberia">Liberia</option>
                                          <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                          <option value="Liechtenstein">Liechtenstein</option>
                                          <option value="Lithuania">Lithuania</option>
                                          <option value="Luxembourg">Luxembourg</option>
                                          <option value="Macao">Macao</option>
                                          <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                          <option value="Madagascar">Madagascar</option>
                                          <option value="Malawi">Malawi</option>
                                          <option value="Malaysia">Malaysia</option>
                                          <option value="Maldives">Maldives</option>
                                          <option value="Mali">Mali</option>
                                          <option value="Malta">Malta</option>
                                          <option value="Marshall Islands">Marshall Islands</option>
                                          <option value="Martinique">Martinique</option>
                                          <option value="Mauritania">Mauritania</option>
                                          <option value="Mauritius">Mauritius</option>
                                          <option value="Mayotte">Mayotte</option>
                                          <option value="Mexico">Mexico</option>
                                          <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                          <option value="Moldova, Republic of">Moldova, Republic of</option>
                                          <option value="Monaco">Monaco</option>
                                          <option value="Mongolia">Mongolia</option>
                                          <option value="Montenegro">Montenegro</option>
                                          <option value="Montserrat">Montserrat</option>
                                          <option value="Morocco">Morocco</option>
                                          <option value="Mozambique">Mozambique</option>
                                          <option value="Myanmar">Myanmar</option>
                                          <option value="Namibia">Namibia</option>
                                          <option value="Nauru">Nauru</option>
                                          <option value="Nepal">Nepal</option>
                                          <option value="Netherlands">Netherlands</option>
                                          <option value="Netherlands Antilles">Netherlands Antilles</option>
                                          <option value="New Caledonia">New Caledonia</option>
                                          <option value="New Zealand">New Zealand</option>
                                          <option value="Nicaragua">Nicaragua</option>
                                          <option value="Niger">Niger</option>
                                          <option value="Nigeria">Nigeria</option>
                                          <option value="Niue">Niue</option>
                                          <option value="Norfolk Island">Norfolk Island</option>
                                          <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                          <option value="Norway">Norway</option>
                                          <option value="Oman">Oman</option>
                                          <option value="Pakistan">Pakistan</option>
                                          <option value="Palau">Palau</option>
                                          <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                          <option value="Panama">Panama</option>
                                          <option value="Papua New Guinea">Papua New Guinea</option>
                                          <option value="Paraguay">Paraguay</option>
                                          <option value="Peru">Peru</option>
                                          <option value="Philippines">Philippines</option>
                                          <option value="Pitcairn">Pitcairn</option>
                                          <option value="Poland">Poland</option>
                                          <option value="Portugal">Portugal</option>
                                          <option value="Puerto Rico">Puerto Rico</option>
                                          <option value="Qatar">Qatar</option>
                                          <option value="Reunion">Reunion</option>
                                          <option value="Romania">Romania</option>
                                          <option value="Russian Federation">Russian Federation</option>
                                          <option value="Rwanda">Rwanda</option>
                                          <option value="Saint Helena">Saint Helena</option>
                                          <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                          <option value="Saint Lucia">Saint Lucia</option>
                                          <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                          <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                          <option value="Samoa">Samoa</option>
                                          <option value="San Marino">San Marino</option>
                                          <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                          <option value="Saudi Arabia">Saudi Arabia</option>
                                          <option value="Senegal">Senegal</option>
                                          <option value="Serbia">Serbia</option>
                                          <option value="Seychelles">Seychelles</option>
                                          <option value="Sierra Leone">Sierra Leone</option>
                                          <option value="Singapore">Singapore</option>
                                          <option value="Slovakia">Slovakia</option>
                                          <option value="Slovenia">Slovenia</option>
                                          <option value="Solomon Islands">Solomon Islands</option>
                                          <option value="Somalia">Somalia</option>
                                          <option value="South Africa">South Africa</option>
                                          <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                          <option value="Spain">Spain</option>
                                          <option value="Sri Lanka">Sri Lanka</option>
                                          <option value="Sudan">Sudan</option>
                                          <option value="Suriname">Suriname</option>
                                          <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                          <option value="Swaziland">Swaziland</option>
                                          <option value="Sweden">Sweden</option>
                                          <option value="Switzerland">Switzerland</option>
                                          <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                          <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                          <option value="Tajikistan">Tajikistan</option>
                                          <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                          <option value="Thailand">Thailand</option>
                                          <option value="Timor-leste">Timor-leste</option>
                                          <option value="Togo">Togo</option>
                                          <option value="Tokelau">Tokelau</option>
                                          <option value="Tonga">Tonga</option>
                                          <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                          <option value="Tunisia">Tunisia</option>
                                          <option value="Turkey">Turkey</option>
                                          <option value="Turkmenistan">Turkmenistan</option>
                                          <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                          <option value="Tuvalu">Tuvalu</option>
                                          <option value="Uganda">Uganda</option>
                                          <option value="Ukraine">Ukraine</option>
                                          <option value="United Arab Emirates">United Arab Emirates</option>
                                          <option value="United Kingdom">United Kingdom</option>
                                          <option value="United States">United States</option>
                                          <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                          <option value="Uruguay">Uruguay</option>
                                          <option value="Uzbekistan">Uzbekistan</option>
                                          <option value="Vanuatu">Vanuatu</option>
                                          <option value="Venezuela">Venezuela</option>
                                          <option value="Viet Nam">Viet Nam</option>
                                          <option value="Virgin Islands, British">Virgin Islands, British</option>
                                          <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                          <option value="Wallis and Futuna">Wallis and Futuna</option>
                                          <option value="Western Sahara">Western Sahara</option>
                                          <option value="Yemen">Yemen</option>
                                          <option value="Zambia">Zambia</option>
                                          <option value="Zimbabwe">Zimbabwe</option>
                                         </select>
                                      </div>
                                      <div class="form-group col-sm-12">
                                         <label>Address:</label>
                                         <textarea class="form-control" name="address" rows="5" style="line-height: 22px;">
                                          {{ $user->address }}
                                         </textarea>
                                      </div>
                                   </div>
                                   <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                   <button type="reset" class="btn iq-bg-danger">Cancel</button>
                                </form>
                             </div>
                          </div>
                       </div>
                       <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                          <div class="iq-card p-3">
                             <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                   <h4 class="card-title" style="font-weight: bold !important;">Change Password</h4>
                                </div>
                             </div>
                             <div class="iq-card-body">
                                <form action="/profile/password" method="post">
                                 @csrf
                                   <div class="form-group">
                                      <label for="npass">New Password:</label>
                                      <input type="password" name="password" class="form-control" id="npass" required>
                                      <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                   </div>
                                   <div class="form-group">
                                      <label for="vpass">Confirm Password:</label>
                                      <input type="password" name="password_confirmation" class="form-control" id="vpass" required>
                                      <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                   </div>
                                   <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                   <button type="reset" class="btn iq-bg-danger">Cancel</button>
                                </form>
                             </div>
                          </div>
                       </div>
                       <div class="tab-pane fade" id="manage-contact" role="tabpanel">
                          <div class="iq-card p-3">
                             <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                   <h4 class="card-title" style="font-weight: bold !important;">Manage Contact</h4>
                                </div>
                             </div>
                             <div class="iq-card-body">
                                <form action="/profile/contact" method="post">
                                 @csrf
                                   <div class="form-group">
                                      <label for="cno">Mobile Number:</label>
                                      <input type="text" class="form-control" name="phone" id="cno" value="{{ $user->phone }}">
                                   </div>
                                   <div class="form-group">
                                      <label for="email">Email:</label>
                                      <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">
                                   </div>
                                   <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                   <button type="reset" class="btn iq-bg-danger">Cancel</button>
                                </form>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div> 
      </div>
</x-app-layout>