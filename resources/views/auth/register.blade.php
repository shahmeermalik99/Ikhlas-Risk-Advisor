@extends('master')
@section('content')
    <main class="register-main pt-4">
        <div class="container-fluid px-lg-5">
            <div class="row">
                <div class="col-xl-7 text-center pe-lg-0">
                    <img src="{{ asset('assets/img/logo.png') }}" class="register-logo" alt="">
                    <div class="invited-section">
                        <h2>You are Invited!</h2>
                        <h3>UNLEASH YOUR POTENTIAL WITH <br> TAKAFUL IKHLAS GENERAL BERHAD</h3>
                        <p>Takaful IKHLAS General is launching the IKHLAS Risk Advisor Program and would like to invite all
                            agents to be part of this spectacular evening.</p>
                        <p>Details of this event are as follows:</p>
                        <strong> Date : 20 May 2023, Saturday</strong> <br>
                        <strong> Time : 2.00 pm - 11.00 pm. </strong> <br>
                        <strong> Venue : Bangi Avenue Convention Centre (BACC) </strong> <br> <br>
                        <p class="mb-3">Seats are limited, so register now to unleash your potential.</p>
                    </div>
                    <!--<button class="popup-btn">Register Now</button>-->
                </div>
                <div class="col-xl-5 pt-5 mt-5">
                    <div class="register-form mt-5">
                        <form action="">
                            <h4>Registrations are closed.</h4>
                            <div class="mb-3">
                                <input type="text" class="custom-input" name="name" id="name"
                                    placeholder="Full Name as per IC">
                                    <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}" />
                                    <small class="text-danger custom-error"></small>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="custom-input" name="passport_no" id="passport_no"
                                    placeholder="NRIC / Passport No (101099-01-2345)">
                                    <small class="text-danger custom-error"></small>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="custom-input" name="agent_code" id="agent_code"
                                    placeholder="Agent Code">
                                    <small class="text-danger custom-error"></small>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="custom-input" name="agency_name" id="agency_name"
                                    placeholder="Agency Name">
                                    <small class="text-danger custom-error"></small>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="custom-input" name="phone_no" id="phone_no"
                                    placeholder="Phone Number (012-7896578)">
                                    <small class="text-danger custom-error"></small>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="custom-input" name="email"
                                    id="email" placeholder="Email">
                                    <small class="text-danger custom-error"></small>
                            </div>
                           
                            <div class="mb-3">
                                <select name="dropdown_menu" id="dropdown_menu" class="custom-input">
                                    <option value="" selected hidden>Servicing Branch</option>
                                    <option value="HQ, Kuala Lumpur">HQ, Kuala Lumpur</option>
                                    <option value="Ipoh, Perak">Ipoh, Perak</option>
                                    <option value="Johor Bharu, Johor">Johor Bahru, Johor</option>
                                    <option value="Klang, Selangor">Klang, Selangor</option>
                                    <option value="Kota Bharu, Kelantan">Kota Bharu, Kelantan</option>
                                    <option value="Kota Kinabalu, Sabah">Kota Kinabalu, Sabah</option>
                                    <option value="Kuala Terengganu, Terengganu">Kuala Terengganu, Terengganu</option>
                                    <option value="Kuantan, Pahang">Kuantan, Pahang</option>
                                    <option value="Kuching, Sarawak">Kuching, Sarawak</option>
                                    <option value="Melaka">Melaka</option>
                                    <option value="Putrajaya">Putrajaya</option>
                                    <option value="Seremban, Negeri Sembilan">Seremban, Negeri Sembilan</option>
                                    <option value="Sungai Petani, Kedah">Sungai Petani, Kedah</option>
                                </select>
                                <small class="text-danger custom-error"></small>
                            </div>
                            <div class="mb-3">
                                <button class="submit-btn" id="add_submit_btn">Submit</button>
                            </div>
                            <small>Drop us an email at admin@ikhlasadvisor.com if you need any assistance.</small>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="overlay"></div>

    <div class="thanku-popup p-xl-5">
        <h2>Thank you for your interest</h2>
        <p>We will confirm your registration status via email nearing to the event date.</p>
        <div class="mt-5 pt-5">
            <button class="close-btn" onclick="reload()">Close</button>
        </div>
    </div>


    <script>
        const popupBtn = document.querySelector(".popup-btn")
        const registerPopup = document.querySelector(".register-form")
        const overlay = document.querySelector(".overlay")
        const closeBtn = document.querySelector(".close-btn")
        const thankuPopup = document.querySelector(".thanku-popup")

        popupBtn.addEventListener("click", () => {
            registerPopup.style.top = "50%"
            registerPopup.style.left = "50%"
            registerPopup.style.transform = "translate(-50%, -50%)"
            overlay.style.opacity = "1"
            overlay.style.visibility = "visible"
        })

        closeBtn.addEventListener("click", () => {
            thankuPopup.style.top = "-2000px"
        })
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dropdown_menu').select2({
                minimumResultsForSearch: Infinity
            });
        });
        $("#add_submit_btn").on('click', function(e) {
            e.preventDefault();
            const Fieldvalue = [];
            Fieldvalue[0] = document.querySelector("#name");
            Fieldvalue[1] = document.querySelector("#passport_no");
            Fieldvalue[2] = document.querySelector("#agent_code");
            Fieldvalue[3] = document.querySelector("#agency_name");
            Fieldvalue[4] = document.querySelector("#phone_no");
            Fieldvalue[5] = document.querySelector("#email");
            Fieldvalue[6] = document.querySelector("#dropdown_menu");
            let error = 0;
            for (let i = 0; i <= Fieldvalue.length - 1; i++) {
                if (Fieldvalue[i].value == '') {
                    console.log(Fieldvalue[i].parentElement)
                    Fieldvalue[i].parentElement.lastElementChild.innerHTML = "This field is required";
                    Fieldvalue[i].parentElement.lastElementChild.classList.add("mt-2");
                    error++;
                } else {
                    Fieldvalue[i].parentElement.lastElementChild.innerHTML = "";
                    Fieldvalue[i].parentElement.lastElementChild.classList.remove("mt-2");
                }
            }

        if (error == 0) {
            console.log('done');
            let name = $("#name").val();
            let passport_no = $("#passport_no").val();
            let agent_code = $("#agent_code").val();
            let agency_name = $("#agency_name").val();
            let phone_no = $("#phone_no").val();
            let email = $("#email").val();
            let dropdown_menu = $("#dropdown_menu").val();
            let _token = $("#_token").val();
            console.log(_token);
            $.ajax({
                url: "{{ url('registeration') }}",
                type: "POST",
                data: {
                    name: name,
                    passport_no: passport_no,
                    agent_code: agent_code,
                    agency_name: agency_name,
                    phone_no: phone_no,
                    email: email,
                    dropdown_menu: dropdown_menu,
                    _token: _token,
                },
                success: function(data) {
                    console.log(data);
                    if (data.status == 200) {
                        thankuPopup.style.top = "50%"
                        overlay.style.opacity = "1"
                        overlay.style.visibility = "visible"
                        Fieldvalue[4].parentElement.lastElementChild.innerHTML = "";
                        Fieldvalue[4].parentElement.lastElementChild.classList.remove("mt-2");
                    }

                }
            });
        }
        });

        function reload(){
            location.reload();
        }
    </script>
@endsection
