@extends('layouts.admin-app')
@section('title' , 'Edit Email')
@section('content')
      <div class="main-content">
        <div class="page-content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between" >
                  <h4 class="mb-sm-0">Edit Email</h4>

                  <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item">
                        <a href="#"><i class="ri-home-5-fill"></i></a>
                      </li>
                      <li class="breadcrumb-item">
                        <a href="{{route('admin.emails.index')}}">Emails</a>
                      </li>
                      <li class="breadcrumb-item active">Edit Email</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>




            <form action="{{route('admin.emails.update' , $email->id)}}" method="post" enctype="multipart/form-data">
              @csrf()
              @method('PATCH')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row align-items-end">
                    <div class="col-sm-8">
                        <img class="py-3 img-fluid logo" src="assets/img/logo.png" alt="">
                        <h1 class="text-uppercase fw-bold">Customer Information Form</h1>
                    </div>
                    <div class="col-sm-4">
                        <div class="mt-4">
                            <label for="date" class="form-label"> Date</label>
                            <input type="date" class="form-control mb-3" id="date" name="the_date" value="{{$email->info->the_date}}">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">

          @if ($errors->any())
              @foreach ($errors->all() as $error)
                  <div class="card-alert card red">
                      <div class="card-content white-text">
                          <p>{{ $error }}</p>
                      </div>
                      <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close"> 
                      </button>
                  </div>
              @endforeach
          @endif

                        
                          @csrf()
                            <div class="border border-1 border-ligh p-3 mb-3">
                                <h2>CUSTOMER DETAILS - INDIVIDUAL</h2>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="Salutation" class="form-label">Salutation</label>
                                            <input type="text" class="form-control" id="Salutation" name="salutation" value="{{$email->info->salutation}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="fName" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="fName" name="first_name" value="{{$email->info->first_name}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="mName" class="form-label">Middle Name</label>
                                            <input type="text" class="form-control" id="mName" name="middle_name" value="{{$email->info->middle_name}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="lName" class="form-label">Last Name </label>
                                            <input type="text" class="form-control" id="lName" name="last_name" value="{{$email->info->last_name}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="dOB" class="form-label">date_of_birth</label>
                                            <input type="date" class="form-control mb-3" id="dOB" name="date_of_birth" value={{$email->info->date_of_birth}}>
                                        </div>
                                        <div class="mb-3">
                                            <label for="gender" class="form-label">Gender</label>
                                            <!-- Inline Radios -->
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->gender == 'male' ? 'checked' : ''}} class="form-check-input" type="radio" name="gender"id="male" value="male">
                                                <label class="form-check-label" for="male">Male</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->gender == 'female' ? 'checked' : ''}} class="form-check-input" type="radio" name="gender"id="female" value="female">
                                                <label class="form-check-label" for="female">Female</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="mStatus" class="form-label">Marital Status </label>
                                            <!-- Inline Radios -->
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->marital_status == 'married' ? 'checked' : ''}} class="form-check-input" type="radio" name="marital_status" id="married" value="married">
                                                <label class="form-check-label" for="married">Married</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->marital_status == 'single' ? 'checked' : ''}} class="form-check-input" type="radio" name="marital_status"id="single" value="single">
                                                <label class="form-check-label" for="single">Single</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->marital_status == 'divorced' ? 'checked' : ''}} class="form-check-input" type="radio" name="marital_status"id="divorced" value="divorced">
                                                <label class="form-check-label" for="divorced">Divorced</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="cType" class="form-label">Customer Type</label>
                                            <!-- Inline Radios -->
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->customer_type == 'seller' ? 'checked' : ''}} class="form-check-input" type="radio" name="customer_type"id="seller" value="seller">
                                                <label class="form-check-label" for="seller">Seller</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->customer_type == 'buyer' ? 'checked' : ''}} class="form-check-input" type="radio" name="customer_type"id="buyer" value="buyer">
                                                <label class="form-check-label" for="buyer">Buyer</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->customer_type == 'tenant' ? 'checked' : ''}} class="form-check-input" type="radio" name="customer_type"id="tenant" value="tenant">
                                                <label class="form-check-label" for="tenant">Tenant</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->customer_type == 'leaser' ? 'checked' : ''}} class="form-check-input" type="radio" name="customer_type"id="leaser" value="leaser">
                                                <label class="form-check-label" for="leaser">Leaser</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="border border-1 border-ligh p-3 mb-3">
                                <h2>CUSTOMER DETAILS - COMPANY </h2>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="cName " class="form-label">Company Name</label>
                                            <input type="text" class="form-control" id="cName" name="company_name" value="{{$email->info->company_name}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="mb-3">
                                                    <label for="tLicense" class="form-label">Trade license </label>
                                                    <input type="text" class="form-control" id="tLicense" name="trade_license" value="{{$email->info->trade_license}}">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="mb-3">
                                                    <label for="expiry" class="form-label">Expiry</label>
                                                    <input type="date" class="form-control mb-3" id="expiry" name="expiry" value="{{$email->info->expiry}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="cJurisdiction" class="form-label">Company Jurisdiction</label>
                                            <!-- Inline Radios -->
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->company_jurisdiction == 'dubaiEconomicDepartment' ? 'checked' : ''}} class="form-check-input" type="radio" name="company_jurisdiction"id="dubaiEconomicDepartment" value="dubaiEconomicDepartment">
                                                <label class="form-check-label" for="dubaiEconomicDepartment">Dubai Economic Department</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->company_jurisdiction == 'jafza' ? 'checked' : ''}}  class="form-check-input" type="radio" name="company_jurisdiction"id="jafza" value="jafza">
                                                <label class="form-check-label" for="jafza">Jafza</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->company_jurisdiction == 'DMCC' ? 'checked' : ''}} class="form-check-input" type="radio" name="company_jurisdiction"id="DMCC" value="DMCC">
                                                <label class="form-check-label" for="DMCC">DMCC</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->company_jurisdiction == 'cJother' ? 'checked' : ''}} class="form-check-input" type="radio" name="company_jurisdiction"id="cJother" value="cJother">
                                                <label class="form-check-label" for="cJother">Other</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="cOwnership" class="form-label">Company Ownership</label>
                                            <!-- Inline Radios -->
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->company_ownership == 'sProprietorship' ? 'checked' : ''}} class="form-check-input" type="radio" name="company_ownership"id="sProprietorship" value="sProprietorship">
                                                <label class="form-check-label" for="sProprietorship">Sole Proprietorship</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->company_ownership == 'LLC' ? 'checked' : ''}} class="form-check-input" type="radio" name="company_ownership" id="LLC" value="LLC">
                                                <label class="form-check-label" for="LLC">LLC</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->company_ownership == 'nProfit' ? 'checked' : ''}} class="form-check-input" type="radio" name="company_ownership" id="nProfit" value="nProfit">
                                                <label class="form-check-label" for="nProfit">Non Profit</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->company_ownership == 'cOother' ? 'checked' : ''}} class="form-check-input" type="radio" name="company_ownership" id="cOother" value="cOother">
                                                <label class="form-check-label" for="cOother">Other</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="industry" class="form-label">Industry</label>
                                            <!-- Inline Radios -->
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->industry == 'trading' ? 'checked' : ''}} class="form-check-input" type="radio" name="industry" value="trading" id="trading" value="trading">
                                                <label class="form-check-label" for="trading">Trading</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->industry == 'logistics' ? 'checked' : ''}} class="form-check-input" type="radio" name="industry" id="logistics" value="logistics">
                                                <label class="form-check-label" for="logistics">Logistics</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->industry == 'pMetals' ? 'checked' : ''}} class="form-check-input" type="radio" name="industry" id="pMetals" value="pMetals">
                                                <label class="form-check-label" for="pMetals">Precious Metals</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->industry == 'accounting' ? 'checked' : ''}} class="form-check-input" type="radio" name="industry" id="accounting" value="accounting">
                                                <label class="form-check-label" for="accounting">Accounting</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->industry == 'lFirms' ? 'checked' : ''}} class="form-check-input" type="radio" name="industry" id="lFirms" value="lFirms">
                                                <label class="form-check-label" for="lFirms"> Law firms</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->industry == 'rEstate' ? 'checked' : ''}} class="form-check-input" type="radio" name="industry" id="rEstate" value="rEstate">
                                                <label class="form-check-label" for="rEstate">Real Estate</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->industry == 'aviation' ? 'checked' : ''}} class="form-check-input" type="radio" name="industry" id="aviation" value="aviation">
                                                <label class="form-check-label" for="aviation">Aviation</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->industry == 'fServices' ? 'checked' : ''}} class="form-check-input" type="radio" name="industry" id="fServices" value="fServices">
                                                <label class="form-check-label" for="fServices">Financial Services</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->industry == 'iother' ? 'checked' : ''}} class="form-check-input" type="radio" name="industry" id="iother" value="iother">
                                                <label class="form-check-label" for="iother">Other</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="border border-1 border-ligh p-3 mb-3">
                                <h2>IDENTITY DOCUMENTS</h2>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="nationality" class="form-label">Nationality</label>
                                            <select class="form-select mb-3" id="nationality" name="nationality">
                                                <option selected="" disabled>Select your Nationality </option>
                                                @php
                                                  $nationals = array(
                                                      'Afghan',
                                                      'Albanian',
                                                      'Algerian',
                                                      'American',
                                                      'Andorran',
                                                      'Angolan',
                                                      'Antiguans',
                                                      'Argentinean',
                                                      'Armenian',
                                                      'Australian',
                                                      'Austrian',
                                                      'Azerbaijani',
                                                      'Bahamian',
                                                      'Bahraini',
                                                      'Bangladeshi',
                                                      'Barbadian',
                                                      'Barbudans',
                                                      'Batswana',
                                                      'Belarusian',
                                                      'Belgian',
                                                      'Belizean',
                                                      'Beninese',
                                                      'Bhutanese',
                                                      'Bolivian',
                                                      'Bosnian',
                                                      'Brazilian',
                                                      'British',
                                                      'Bruneian',
                                                      'Bulgarian',
                                                      'Burkinabe',
                                                      'Burmese',
                                                      'Burundian',
                                                      'Cambodian',
                                                      'Cameroonian',
                                                      'Canadian',
                                                      'Cape Verdean',
                                                      'Central African',
                                                      'Chadian',
                                                      'Chilean',
                                                      'Chinese',
                                                      'Colombian',
                                                      'Comoran',
                                                      'Congolese',
                                                      'Costa Rican',
                                                      'Croatian',
                                                      'Cuban',
                                                      'Cypriot',
                                                      'Czech',
                                                      'Danish',
                                                      'Djibouti',
                                                      'Dominican',
                                                      'Dutch',
                                                      'East Timorese',
                                                      'Ecuadorean',
                                                      'Egyptian',
                                                      'Emirian',
                                                      'Equatorial Guinean',
                                                      'Eritrean',
                                                      'Estonian',
                                                      'Ethiopian',
                                                      'Fijian',
                                                      'Filipino',
                                                      'Finnish',
                                                      'French',
                                                      'Gabonese',
                                                      'Gambian',
                                                      'Georgian',
                                                      'German',
                                                      'Ghanaian',
                                                      'Greek',
                                                      'Grenadian',
                                                      'Guatemalan',
                                                      'Guinea-Bissauan',
                                                      'Guinean',
                                                      'Guyanese',
                                                      'Haitian',
                                                      'Herzegovinian',
                                                      'Honduran',
                                                      'Hungarian',
                                                      'I-Kiribati',
                                                      'Icelander',
                                                      'Indian',
                                                      'Indonesian',
                                                      'Iranian',
                                                      'Iraqi',
                                                      'Irish',
                                                      'Israeli',
                                                      'Italian',
                                                      'Ivorian',
                                                      'Jamaican',
                                                      'Japanese',
                                                      'Jordanian',
                                                      'Kazakhstani',
                                                      'Kenyan',
                                                      'Kittian and Nevisian',
                                                      'Kuwaiti',
                                                      'Kyrgyz',
                                                      'Laotian',
                                                      'Latvian',
                                                      'Lebanese',
                                                      'Liberian',
                                                      'Libyan',
                                                      'Liechtensteiner',
                                                      'Lithuanian',
                                                      'Luxembourger',
                                                      'Macedonian',
                                                      'Malagasy',
                                                      'Malawian',
                                                      'Malaysian',
                                                      'Maldivan',
                                                      'Malian',
                                                      'Maltese',
                                                      'Marshallese',
                                                      'Mauritanian',
                                                      'Mauritian',
                                                      'Mexican',
                                                      'Micronesian',
                                                      'Moldovan',
                                                      'Monacan',
                                                      'Mongolian',
                                                      'Moroccan',
                                                      'Mosotho',
                                                      'Motswana',
                                                      'Mozambican',
                                                      'Namibian',
                                                      'Nauruan',
                                                      'Nepali',
                                                      'New Zealander',
                                                      'Nicaraguan',
                                                      'Nigerian',
                                                      'Nigerien',
                                                      'North Korean',
                                                      'Northern Irish',
                                                      'Norwegian',
                                                      'Omani',
                                                      'Pakistani',
                                                      'Palauan',
                                                      'Panamanian',
                                                      'Papua New Guinean',
                                                      'Paraguayan',
                                                      'Peruvian',
                                                      'Polish',
                                                      'Portuguese',
                                                      'Qatari',
                                                      'Romanian',
                                                      'Russian',
                                                      'Rwandan',
                                                      'Saint Lucian',
                                                      'Salvadoran',
                                                      'Samoan',
                                                      'San Marinese',
                                                      'Sao Tomean',
                                                      'Saudi',
                                                      'Scottish',
                                                      'Senegalese',
                                                      'Serbian',
                                                      'Seychellois',
                                                      'Sierra Leonean',
                                                      'Singaporean',
                                                      'Slovakian',
                                                      'Slovenian',
                                                      'Solomon Islander',
                                                      'Somali',
                                                      'South African',
                                                      'South Korean',
                                                      'Spanish',
                                                      'Sri Lankan',
                                                      'Sudanese',
                                                      'Surinamer',
                                                      'Swazi',
                                                      'Swedish',
                                                      'Swiss',
                                                      'Syrian',
                                                      'Taiwanese',
                                                      'Tajik',
                                                      'Tanzanian',
                                                      'Thai',
                                                      'Togolese',
                                                      'Tongan',
                                                      'Trinidadian/Tobagonian',
                                                      'Tunisian',
                                                      'Turkish',
                                                      'Tuvaluan',
                                                      'Ugandan',
                                                      'Ukrainian',
                                                      'Uruguayan',
                                                      'Uzbekistani',
                                                      'Venezuelan',
                                                      'Vietnamese',
                                                      'Welsh',
                                                      'Yemenite',
                                                      'Zambian',
                                                      'Zimbabwean'
                                              );
                                                @endphp

                                                @foreach($nationals as $national) 
                                                  <option {{$national == $email->info->nationality ? 'selected' : ''}} value="{{$national}}">{{$national}}</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="PassportNo" class="form-label">Passport No</label>
                                            <input type="text" class="form-control" id="PassportNo" name="passport_no" value="{{$email->info->passport_no}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="emiratesId " class="form-label">Emirates ID </label>
                                            <input type="text" class="form-control" id="emiratesId" name="emirates_id" value="{{$email->info->emirates_id}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nationalId" class="form-label">National ID</label>
                                            <input type="text" class="form-control" id="nationalId" name="national_id" value="{{$email->info->national_id}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="uaeResidency" class="form-label">UAE Residency </label>
                                            <!-- Inline Radios -->
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->uae_residency == 'Resident' ? 'checked' : ''}} class="form-check-input" type="radio" name="uae_residency" id="resident" value="Resident">
                                                <label class="form-check-label" for="resident">Resident</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->uae_residency == 'Non_resident' ? 'checked' : ''}} class="form-check-input" type="radio" name="uae_residency" id="nonResident" value="Non_resident">
                                                <label class="form-check-label" for="nonResident"> Non resident</label>
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="passportExpiry" class="form-label">Passport Expiry</label>
                                            <input type="date" class="form-control mb-3" id="passportExpiry" name="passport_expiry" value="{{$email->info->passport_expiry}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="emiratesIdExpiry " class="form-label">Emirates ID Expiry </label>
                                            <input type="date" class="form-control mb-3" id="emiratesIdExpiry" name="emirates_id_expiry" value="{{$email->info->emirates_id_expiry}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nationalIdExpiry" class="form-label">National ID Expiry</label>
                                            <input type="date" class="form-control mb-3" id="nationalIdExpiry" name="national_id_expiry" value="{{$email->info->national_id_expiry}}">
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="border border-1 border-ligh p-3 mb-3">
                                <h2>CONTACT DETAILS</h2>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="address1" class="form-label">Address 1</label>
                                            <input type="text" class="form-control" id="address1" name="address_one" value="{{$email->info->address_one}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="address2" class="form-label">Address 2  </label>
                                            <input type="text" class="form-control" id="address2" name="address_two" value="{{$email->info->address_two}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="city" class="form-label">City</label>
                                            <input type="text" class="form-control" id="city" name="city" value="{{$email->info->city}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="country" class="form-label">Country</label>
                                            <select class="form-select mb-3" id="country" name="country">
                                                <option selected="" disabled>Select your country </option>
                                                @php
                                                  $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");



                                                @endphp

                                                @foreach($countries as $country)
                                                  <option {{$country == $email->info->country ? 'selected' : ''}} value="{{$country}}">{{$country}}</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="mobile" class="form-label">Mobile</label>
                                            <input type="text" class="form-control mb-3" id="mobile" name="mobile" value="{{$email->info->mobile}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="telephone" class="form-label">Telephone</label>
                                            <input type="text" class="form-control mb-3" id="telephone" name="telephone" value="{{$email->info->telephone}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="emailId" class="form-label">Email ID</label>
                                            <input type="text" class="form-control mb-3" id="emailId" name="contact_email_id" value="{{$email->info->contact_email_id}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="poBox" class="form-label">P O Box</label>
                                            <input type="text" class="form-control mb-3" id="poBox" name="po_box" value="{{$email->info->po_box}}">
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="border border-1 border-ligh p-3 mb-3">
                                <h2>TRANSACTION DETAILS</h2>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="project" class="form-label">Project – Unit Number</label>
                                            <input type="text" class="form-control" id="project" name="project_unitnumber" value={{$email->info->project_unitnumber}}>
                                        </div>
                                        <div class="mb-3">
                                            <label for="usage" class="form-label">Usage</label>
                                            <input type="text" class="form-control" id="usage" name="usage" value="{{$email->info->usage}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="modeofPayment" class="form-label">Mode of Payment</label>
                                            <!-- Inline Radios -->
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->mode_of_payment == 'cash' ? 'checked' : ''}} class="form-check-input" type="radio" name="mode_of_payment" id="cash" value="cash">
                                                <label class="form-check-label" for="cash">Cash</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->mode_of_payment == 'manager' ? 'checked' : ''}} class="form-check-input" type="radio" name="mode_of_payment" id="manager" value="manager">
                                                <label class="form-check-label" for="manager">Manager Cheque</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->mode_of_payment == 'mortgage' ? 'checked' : ''}} class="form-check-input" type="radio" name="mode_of_payment" id="mortgage" value="mortgage">
                                                <label class="form-check-label" for="mortgage">Mortgage</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->mode_of_payment == 'bankTransfer' ? 'checked' : ''}} class="form-check-input" type="radio" name="mode_of_payment" id="bankTransfer" value="bankTransfer">
                                                <label class="form-check-label" for="bankTransfer"> Bank Transfer</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->mode_of_payment == 'cheque' ? 'checked' : ''}} class="form-check-input" type="radio" name="mode_of_payment" id="cheque" value="cheque">
                                                <label class="form-check-label" for="cheque"> Cheque</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->mode_of_payment == 'payment' ? 'checked' : ''}} class="form-check-input" type="radio" name="mode_of_payment" id="payment" value="payment">
                                                <label class="form-check-label" for="payment">Payment Link</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->mode_of_payment == 'mPother' ? 'checked' : ''}} class="form-check-input" type="radio" name="mode_of_payment" id="mPother" value="mPother">
                                                <label class="form-check-label" for="mPother">Others (Please Specify)</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="purchasePurpose" class="form-label">Purchase Purpose</label>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->purchase_purpose == 'ownUse' ? 'checked' : ''}} class="form-check-input" type="radio" name="purchase_purpose" id="ownUse" value="ownUse">
                                                <label class="form-check-label" for="ownUse"> Own use</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->purchase_purpose == 'resale' ? 'checked' : ''}} class="form-check-input" type="radio" name="purchase_purpose" id="resale" value="resale">
                                                <label class="form-check-label" for="resale">Resale</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->purchase_purpose == 'rent' ? 'checked' : ''}} class="form-check-input" type="radio" name="purchase_purpose" id="rent" value="rent">
                                                <label class="form-check-label" for="rent">Rent</label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>


                            <div class="border border-1 border-ligh p-3 mb-3">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="employment" class="form-label">Employment</label>
                                            <!-- Inline Radios -->
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->employment == 'salaried' ? 'checked' : ''}} class="form-check-input" type="radio" name="employment" id="salaried" value="salaried">
                                                <label class="form-check-label" for="salaried">Salaried</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->employment == 'self-employed' ? 'checked' : ''}} class="form-check-input" type="radio" name="employment" id="self-employed" value="self-employed">
                                                <label class="form-check-label" for="self-employed">Self-employed</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->employment == 'retiree' ? 'checked' : ''}} class="form-check-input" type="radio" name="employment" id="retiree" value="retiree">
                                                <label class="form-check-label" for="retiree">Retiree</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->employment == 'eother' ? 'checked' : ''}} class="form-check-input" type="radio" name="employment" id="eother" value="eother">
                                                <label class="form-check-label" for="eother">Other</label>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="sourceOfFunds" class="form-label">Source of funds</label>
                                            <!-- Inline Radios -->
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->source_of_funds == 'salary' ? 'checked' : ''}} class="form-check-input" type="radio" name="source_of_funds" id="salary" value="salary">
                                                <label  class="form-check-label" for="salary">Salary</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->source_of_funds == 'savings' ? 'checked' : ''}} class="form-check-input" type="radio" name="source_of_funds" id="savings" value="savings">
                                                <label class="form-check-label" for="savings">Savings</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->source_of_funds == 'rIncome' ? 'checked' : ''}} class="form-check-input" type="radio" name="source_of_funds" id="rIncome" value="rIncome">
                                                <label class="form-check-label" for="rIncome">Rental Income</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->source_of_funds == 'loan' ? 'checked' : ''}} class="form-check-input" type="radio" name="source_of_funds" id="loan" value="loan">
                                                <label  class="form-check-label" for="loan">Mortgage / Loan</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->source_of_funds == 'businessIncome' ? 'checked' : ''}} class="form-check-input" type="radio" name="source_of_funds" id="businessIncome" value="businessIncome">
                                                <label class="form-check-label" for="businessIncome">Business income</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->source_of_funds == 'dividends' ? 'checked' : ''}} class="form-check-input" type="radio" name="source_of_funds" id="dividends" value="dividends">
                                                <label class="form-check-label" for="dividends">Dividends</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->source_of_funds == 'pension' ? 'checked' : ''}} class="form-check-input" type="radio" name="source_of_funds" id="pension" value="pension">
                                                <label class="form-check-label" for="pension">Pension</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->source_of_funds == 'eother' ? 'checked' : ''}} class="form-check-input" type="radio" name="source_of_funds" id="savings" value="savings">
                                                <label class="form-check-label" for="savings">Savings</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->source_of_funds == 'hnvestmentProceeds' ? 'checked' : ''}} class="form-check-input" type="radio" name="source_of_funds" id="hnvestmentProceeds" value="hnvestmentProceeds">
                                                <label class="form-check-label" for="hnvestmentProceeds">Investment Proceeds</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->source_of_funds == 'cryptoProceeds' ? 'checked' : ''}} class="form-check-input" type="radio" name="source_of_funds" id="cryptoProceeds" value="cryptoProceeds">
                                                <label class="form-check-label" for="cryptoProceeds">Crypto Proceeds</label> 
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="form-check form-check-inline d-block">
                                                <input {{$email->info->source_of_funds == 'sFother' ? 'checked' : ''}} class="form-check-input" type="radio" name="source_of_funds" id="sFother" value="sFother">
                                                <label class="form-check-label" for="sFother">Others (Please Specify)</label> 
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input {{$email->info->source_of_funds == 'Self-Employed' ? 'checked' : ''}} class="form-check-input" type="radio" name="source_of_funds" id="Self-Employed" value="Self-Employed">
                                                <label class="form-check-label" for="Self-Employed">Self-Employed. Business Scope (if self-employed)</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="border border-1 border-ligh p-3 mb-3">
                                <h2>PEP (POLITICALLY EXPOSED PERSON) </h2>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-responsive table-card">
                                            <table class="table table-nowrap mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td width="20px">a.</td>
                                                        <td>Has the individual ever been Head of State or Head of Government, a Member of the Royal Family or a
                                                            Senior Politician, a Senior Government Official, a Senior Judicial, Military or Law Enforcement Official, a
                                                            Member of Board of Central Bank or similar Regulator, Senior Executive Manager of State-Owned
                                                            Corporations, an Ambassador or a Charge d/affaires, either local or foreign?
                                                            </td>
                                                        <td>
                                                            <div class="mb-3">
                                                                <label for="itemOne" class="form-label d-none"></label>
                                                                <div class="form-check form-check-inline">
                                                                    <input {{$email->info->head_of_state == 'yes' ? 'checked' : ''}} class="form-check-input" type="radio" name="head_of_state" id="itemOne_yes" value="yes">
                                                                    <label class="form-check-label" for="itemOne_yes">Yes</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-check-inline">
                                                                <input {{$email->info->head_of_state == 'no' ? 'checked' : ''}} class="form-check-input" type="radio" name="head_of_state" id="itemOne_no" value="no">
                                                                <label class="form-check-label" for="itemOne_no">No</label>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td width="20px">b.</td>
                                                        <td>Has the individual ever been a Senior Official of Political Parties and a Person who is or have previously
                                                            been a senior executive of a Local or Foreign Government owned Commercial Enterprise, either Local or
                                                            Foreign?                                                            
                                                            </td>
                                                        <td>
                                                            <div class="mb-3">
                                                                <label for="itemTow" class="form-label d-none"></label>
                                                                <div class="form-check form-check-inline">
                                                                    <input {{$email->info->senior_official == 'yes' ? 'checked' : ''}} class="form-check-input" type="radio" name="senior_official" id="itemTow_yes" value="yes">
                                                                    <label class="form-check-label" for="itemTow_yes">Yes</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-check-inline">
                                                                <input {{$email->info->senior_official == 'no' ? 'checked' : ''}} class="form-check-input" type="radio" name="senior_official" id="itemTow_no" value="no">
                                                                <label class="form-check-label" for="itemTow_no">No</label>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td width="20px">c.</td>
                                                        <td>Is the individual an immediate family member (spouse, parent, sibling, child) or close personal or
                                                            professional associate of anyone in the above categories (a - b)?                                                            
                                                            </td>
                                                        <td>
                                                            <div class="mb-3">
                                                                <label for="itemThree" class="form-label d-none"></label>
                                                                <div class="form-check form-check-inline">
                                                                    <input {{$email->info->immediate_family == 'yes' ? 'checked' : ''}} class="form-check-input" type="radio" name="immediate_family" id="itemThree_yes" value="yes">
                                                                    <label class="form-check-label" for="itemThree_yes">Yes</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-check-inline">
                                                                <input {{$email->info->immediate_family == 'no' ? 'checked' : ''}} class="form-check-input" type="radio" name="immediate_family" id="itemThree_no" value="no">
                                                                <label class="form-check-label" for="itemThree_no">No</label>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td width="20px">d.</td>
                                                        <td>Has the individual been entrusted with the management of an International Organization or any
                                                            prominent function within such an Organization either Local or Foreign?
                                                            
                                                            </td>
                                                        <td>
                                                            <div class="mb-3">
                                                                <label for="itemFour" class="form-label d-none"></label>
                                                                <div class="form-check form-check-inline">
                                                                    <input {{$email->info->entrusted == 'yes' ? 'checked' : ''}} class="form-check-input" type="radio" name="entrusted" id="itemFour_yes" value="yes">
                                                                    <label class="form-check-label" for="itemFour_yes">Yes</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-check-inline">
                                                                <input {{$email->info->entrusted == 'itemFour_no' ? 'checked' : ''}} class="form-check-input" type="radio" name="entrusted" id="itemFour_no" value="itemFour_no">
                                                                <label class="form-check-label" for="no">No</label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>

                                        <p class="mt-2">
                                            If any of a,b,c,d answers is “Yes”, please provide an explanation about last position held and source of income/funds:
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="border border-1 border-ligh p-3 mb-3">
                                <h2>Customer Acknowledgement/ Undertaking: </h2>
                                <p class="mt-2">
                                    I/We hereby certify that all the above-mentioned information and all the documents provided and/or to be provided, are true and reflect the
                                    accurate situation to date and that, following the date of such information and documents, I/we will notify KINGDOM REAL ESTATE LLC
                                    immediately of any event, likely to affect my/our financial and legal situation, especially my/our resident, or non-resident status. Moreover,
                                    I/we hereby undertake to provide KINGDOM REAL ESTATE LLC, along with supporting documents, with all the information that KINGDOM REAL
                                    ESTATE LLC might request, as deemed necessary by UAE regulation, and notify the latter of any change in my/our situation.
                                </p>
                                <div class="row mt-4">
                                    <div class="col-sm-6" id="segn">
                                        <p>Customer Signature:  </p>
                                  
                                        <img src="{{$email->info->customer_signature}}" id="sig-image" src="" alt="Your signature will go here!" />
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="acknowledgement" class="form-label">Date</label>
                                            <input type="date" class="form-control mb-3" id="acknowledgement" name="customer_date" value="{{$email->info->customer_date}}">

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="border border-1 border-ligh p-3 mb-3">
                                <h2>Documents to be furnished along with the KYC Form:</h2>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row mb-3">
                                            <div class="col-sm-6"><p>- Emirates ID for residents</p></div>
                                            <div class="col-sm-6 col-lg-3"><input class="form-control" type="file" id="emiratesIDFro" name="front_id"></div>
                                            <div class="col-sm-6 col-lg-3"><input class="form-control" type="file" id="emiratesIDBack" name="back_id"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row mb-3">
                                            <div class="col-sm-6"><label for="Passport" class="form-label">- Passport for non-residents and Visa/Entry Permit copy for visitors.</label></div>
                                            <div class="col-sm-6"><input class="form-control" type="file" id="Passport" name="passport"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row mb-3">
                                            <div class="col-sm-6"><label for="GCC" class="form-label">- GCC ID Card for G CC Citizens.</label></div>
                                            <div class="col-sm-6"><input class="form-control" type="file" id="GCC" name="gcc_id"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row mb-3">
                                            <div class="col-sm-6"><label for="addressProof" class="form-label">- Address proof such utility bills, tax assessment records, bank statements, insurance policies, or Letter from a public</label></div>
                                            <div class="col-sm-6"><input class="form-control" type="file" id="addressProof" name="address_proof"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row mb-3">
                                            <div class="col-sm-6"><label for="authority" class="form-label">- authority.</label></label></div>
                                            <div class="col-sm-6"><input class="form-control" type="file" id="authority" name="authority"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <label>front</label>
                        <img style="width: 150px" src="{{$email->info->front_idPath()}}">
                        <label>back</label>
                        <img style="width: 150px" src="{{$email->info->back_idPath()}}">
                        
                         <label>passport</label>
                        <img style="width: 150px" src="{{$email->info->passportPath()}}">
                        
                         <label>gcc Id</label>
                        <img style="width: 150px" src="{{$email->info->gcc_idPath()}}">
                        
                         <label>address proof</label>
                        <img style="width: 150px" src="{{$email->info->address_proofPath()}}">
                        
                         <label>authority</label>
                        <img style="width: 150px" src="{{$email->info->authorityPath()}}">
                        




                        <div class="col-sm-12 mb-5"><input type="submit" class="btn btn-primary rounded-1 px-4 float-end" value="Submit"> </div>
                        
                    </div>
                </div>
            </div>
        </div>
    
    </div>
          </form>
          <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        



      </div> <!-- container-fluid -->

       
      </div>
@endsection