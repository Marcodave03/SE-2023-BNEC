<style>

      /* diatas punya marco */

      /* Event */
      .events{
            display:flex;
            justify-content:space-between;
            align-items:center;
      }

      .events-img{
            width:auto;
            height:200px;
            margin-bottom:10px;
      }

      .dot{
            display:flex;
            justify-content:center;
            align-items:center;
      }

      .dots{
            display:flex;
            justify-content:center;
            align-items:center;
      }

      .buttons{
            padding-top:25px;
      }

      .text-p{
            max-width:700px;
      }

      .title-events{
            font-size:50px;
            color:black;
            text-decoration: underline;
            text-decoration-color:orange;

      }

      .title-eventss{
            display:flex;
            justify-content: center;
            font-size:70px;
            color:#F759A9;
      }

      #title-list{
            display:flex;
            justify-content: center;
            color:#F759A9;
            padding:80px;
      }

      .message-container{
            background-color:transparent;
            border: 10px solid #9BDBFF;
            border-radius: 70px;
      }

      .container-message{
            /* display:flex; */
            /* justify-content: center;
            align-items:center; */
            padding:20px;
            background-color:white;
            border-radius:62px;
      }


      .behind{
            z-index:1;
            position:relative;
            display: flex;
            justify-content: center;
            align-items: center;
      }

      .infront{
            margin-top:-50px;
            margin-left:120px;
            z-index:2;
            position:relative;
      }

      .infront-hp{
            margin-top:-50px;
            z-index:2;
            position:relative;
            justify-content:center;
      }

      .infront-1{
            padding-left:20px;
            padding-right:20px;
            margin-top:-330px;
            margin-left:300px;
            z-index:3;
            position:relative;
      }

      .SC-button{
            padding:2px;
            border-radius:100%;
            background-color:white;
            border: 5px solid #9BDBFF;
      }

      /* style neo :) */
      @keyframes slide {
          0% {
              transform: translateX(0%);
          }
          100% {
              transform: translateX(-100%);
          }
      }

      .margintop{
            margin-top: 5%;
      }

      .logos {
          overflow: hidden;

      }

      .logos-medpar {
          overflow: hidden;

      }



      .logos:before{
            position: absolute;
            top:0;
            left: 0%;
            background: linear-gradient(to left, transparent, #FFF5F5);
            width:10%;
            height:100%;
            content: "";
            z-index:2;
      }

      .logos:after{
            position: absolute;
            top:0;
            right:0%;
            background:linear-gradient(to right, transparent, #FFF5F5);
            width:10%;
            height:100%;
            content:"";
            z-index:2;
      }




      .logos-slide {
          /* white-space: nowrap; */
          display: inline-block;
          animation: slide 20s linear infinite;

      }

      .resp-card{
            object-fit: cover;
      }


      /* style wensen*/
      .media_partner_medpar_box{
            background: linear-gradient(rgba(0, 163, 255, 1), rgba(155, 219, 255, 1));
            height: auto;
      }
      .padding-text-header{
            padding-top: 90px;
      }
      .padding-contact{
            padding-top:10px;
            padding-bottom:55px;
      }
      .padding-box{
            display: none;
      }
      .padding-box-phone{
            display: flex;
      }
      @media (min-width: 992px) {
            .padding-text-header{
                  padding-top: 90px;
            }
            .padding-contact{
                  padding-top:130px;
                  padding-bottom:55px;
            }
            .padding-box-phone{
                  display: none;
            }
            .padding-box{
                  display: flex;
            }
      }


      /* Header */
      /* #header{
            color: FF5488;
            background-color: FFF5F5;
      } */
      /* #joinUsbtn{
            padding:15px 60px;
            font-size: 20px;
            font-weight: 500;
            color: white;
            background-color: F759A9;
            border: none;
            box-shadow: 0 9px #de5098;

      }
      #joinUsbtn:hover{
            background-color:#F769B1 ;
      }
      #joinUsbtn:active{
            background-color: F759A9;
            box-shadow: 0 5px #C54787;
            transform: translateY(4px);
      } */
      #about .aboutJudul{
            color: FF5488;
      }
      #about #mukaDua{
           bottom: 150px;
      }
      /*Background about dan kartu*/
      #background1{
            background: linear-gradient(180deg, rgb(255,245,245) 0%, rgb(155,219,255) 100%);
      }


      /*card*/

      #kartu .crd{
            border: none;
            box-shadow: 20px 20px rgb(37, 132, 205) ;
      }
      #kartu .joinUs{
            color: FF5488;
      }

      /*about*/

      @media (min-width: 992px) {

            #header #headerJudul1{
                  font-size: 25px;
                  font-weight: 600;
            }
            #header #headerJudul2{
                  font-size: 50px;
                  font-weight: 700;
            }
            #header #awanBawah{
                  bottom:150px;
            }

            #header #headerJudul3{
                  font-size: 25px;
                  font-weight: 600;
            }
            #about #buletKiri1{
                  transform: scale(1.2);
            }
            #about #buletKanan1{
                  transform: scale(1.8);
            }
            #about #buletKiri2{
                  transform: scale(1.4);
                  left: 20%;
                  top: 700px;
            }
            #about #buletKanan2{
                  transform: scale(1.8);
                  right: 15%;
                  top: 800px;
            }


            #about #aboutContent{
                 font-size:20px;
                 padding-top: 180px;
                 padding-right: 200px;
                 padding-left:200px;
            }

            #kartu .card-title{
                  font-size: 20px;
                  font-weight: 600;
            }

      }


      @media (max-width: 991.98px) {

            #header #headerJudul1{
                  font-size: 25px;
                  font-weight: 600;
            }
            #header #headerJudul2{
                  font-size: 40px;
                  font-weight: 700;
            }
            #header #headerJudul3{
                  font-size: 25px;
                  font-weight: 600;
            }
            #header .equalImg{
                  transform:scale(0.9);
            }
            #header #awanBawah{
                  transform:scale(0.9);
                  bottom: 200px;
            }

            #about #aboutContent{
                  font-size: 20px;
                  Padding-top: 100px;
                  padding-right: 150px;
                  padding-left:150px;

            }
            #about #buletKiri2{
                  transform: scale(1);
                  left: 20%;
                  top: 700px;
            }
            #about #buletKanan2{
                  transform: scale(1);
                  right: 15%;
                  top: 750px;
            }


            #kartu .card-title{
                  font-size: 20px;
                  font-weight: 600;
            }

            #kartu #crd3{
                  max-width:37.5%;
            }




      }
      @media (max-width: 768px) {

            #header #headerJudul1{
                  font-size: 20px;
            }
            #header #headerJudul2{
                  font-size: 35px;
            }
            #header #headerJudul3{
                  font-size: 20px;
            }
            #header .equalImg{
                  margin-top: 20px;
                  transform:scale(0.8);
            }
            #header #awanBawah{
                  transform:scale(0.8);
                  bottom: 200px;
            }
            #about{
                  height: auto;
            }
            #about #aboutContent{
                  font-size: 20px;
                  padding-top: 150px;
                  padding-right: 50px;
                  padding-left:50px;

            }
            #about #buletKiri2{
                  top: 650px;
            }
            #about #buletKanan2{
                  top: 700px;
            }
            #kartu .card-title{
                  font-size: 25px;
                  font-weight: 600;
            }
            #kartu .crd{

                  max-width:60%;
            }
            #kartu #crd3{
                  max-width:60%;
            }


      }
      @media(max-width: 576px){

            #header #title1{
                  padding-right:20px;
                  padding-left: 20px;
            }
            #header #headerJudul1{
                  font-size: 18px;
            }
            #header #headerJudul2{
                  font-size: 25px;
            }
            #header #headerJudul3{
                  font-size: 18x;
            }
            #header .equalImg{
                  transform:scale(0.7);
                  margin-top: 30px;
            }


            #header #joinUsBtn{
                  transform:scale(0.8);
            }
            #about #aboutContent{
                  font-size: 17px;
                  padding-top: 120px;
                  padding-right: 20px;
                  padding-left: 20px;

            }
            #about{
                  height: auto;
            }
            #about #buletKiri1{
                  transform: scale(0.7);
            }
            #about #buletKanan1{
                  transform: scale(0.7);
            }
            #about #buletKiri2{
                  transform: scale(0.7);

            }
            #about #buletKanan2{
                  transform: scale(0.7);
            }

            #kartu .crd{

                 max-width:60%;
           }
           #kartu #crd3{
                  max-width:60%;
            }
            #kartu .card-title{
                  font-size: 18px;
                  font-weight: 600;
            }



      }
      @media(max-width: 333px){

            #header #headerJudul1{
                  margin-top:0;
                  padding-top:0;
            }

            #header .equalImg{
                  padding-top: 70px;
            }
            #header #joinUsBtn{
                  font-size: 12px;
            }
            #about #aboutContent{
                  padding-top: 80px;
                  font-size:13px;
            }

            #kartu .card-title{
                  font-size: 13px;
                  font-weight: 600;
            }
      }

</style>


<x-app>
      @if($environment_coming_soon == true)
      <div id="coming-soon" style="background: linear-gradient(rgba(254, 218, 127, 0), rgba(255, 180, 225, 1))">
            <div class="position-relative container-xxl container-fluid p-0" >
                  <div class="d-none d-lg-flex justify-content-between position-relative">
                        <div class="position-absolute start-0" style="z-index: 10;">
                              <img src="{{ url('storage/background/cloud-left.svg') }}" class="img-fluid" width="400px" alt="">
                        </div>
                        <div class="position-absolute end-0" style="z-index: 10;">
                              <img src="{{ url('storage/background/cloud-right.png') }}" class="img-fluid" alt="">
                        </div>
                  </div>
            </div>
            <div class="container padding-text-header">
                  <div class="d-flex justify-content-center flex-column align-items-center">
                        <p style="text-transform:uppercase;z-index:20;color:rgba(255, 84, 136, 1)" class="fs-4 text-center fw-bold">the 2023 bnec alam sutera social event</p>
                        <p style="text-transform:uppercase;z-index:20;text-shadow: 1px 2px 1px #AA0046;font-size: 50px" class="text-center section-title">COMING SOON</p>
                  </div>
            </div>
            <div class="d-flex justify-content-center pt-5 pb-lg-5 pb-0">
                  <div>
                        <img src="{{ url('storage/background/person_coming_soon.svg') }}" class="img-fluid" alt="">
                  </div>
            </div>
            {{-- calling out --}}
            <div class="container-xxl container-fluid pt-4">
                  <div class="d-none d-lg-flex justify-content-between position-relative">
                        <div class="position-absolute col-12" style="z-index: 10;top:30px">
                              <img src="{{ url('storage/background/sprinkle-2.svg') }}" class="img-fluid" alt="" style="opacity: 15%">
                        </div>
                  </div>
            </div>
            <div class="position-relative container-xxl container-fluid pt-5">
                  <div class="d-none d-lg-flex justify-content-between position-relative">
                        <div class="position-absolute start-50 translate-middle-x col-12" style="z-index: 10;">
                              <img src="{{ url('storage/background/calling_out.svg') }}" class="img-fluid" alt="">
                        </div>
                  </div>
            </div>
            <div class="container padding-text-header">
                  <div class="d-flex justify-content-center flex-column align-items-center">
                        <p style="text-transform:uppercase;z-index:20;font-size: 50px" class="text-center section-title">CALLING OUT<br>SUPPORTING PARTNERS</p>
                  </div>
            </div>
            {{-- contact --}}
            <div class="container padding-contact">
                  <div class="row gap-4 gap-lg-0 justify-content-center">
                        <div class="flex-column justify-content-center col-10 col-lg-6 padding-box" style="padding: 40px 90px;">
                              <div class="sponsor_medpar_box position-relative px-3 px-lg-5 py-4 rounded-3" style="z-index: 20;">
                                    <p class="text-center section-title text-white fs-2">Sponsor</p>
                                    <p class="text-center fw-bold fs-4">Marco</p>
                                    <div class="d-flex flex-column align-items-center pt-2">
                                          <div>
                                                <p class="text-start fs-5 fw-semibold"><i class="fa-brands fa-line fs-4"></i> <span class="ps-2">neo_maesa123</span></p>
                                                <p class="text-start fs-5 fw-semibold"><i class="fa-brands fa-square-whatsapp fs-3"></i> <span class="ps-2">628719878898</span></p>
                                                <p class="text-start fs-5 fw-semibold"><i class="fa-solid fa-envelope fs-4"></i> <span class="ps-2">neo@gmail.com</span></p>
                                          </div>
                                    </div>
                                    {{-- <i class="fa-solid fa-phone position-absolute opacity-75" style="top:50;left:70;font-size: 40px;color:#f94407"></i>
                                    <i class="fa-solid fa-phone position-absolute opacity-25" style="bottom:140;right:60;font-size: 30px;color:#daff20"></i>
                                    <i class="fa-solid fa-phone position-absolute" style="top:250;left:70;font-size: 20px;color:#ffaac4"></i> --}}
                              </div>
                        </div>
                        <div class="flex-column justify-content-center col-10 col-lg-6 padding-box" style="padding: 40px 90px;">
                              <div class="sponsor_medpar_box position-relative px-3 px-lg-5 py-4 rounded-3" style="z-index: 20;">
                                    <p class="text-center section-title text-white fs-2">Media Partner</p>
                                    <p class="text-center fw-bold fs-4">Marco</p>
                                    <div class="d-flex flex-column align-items-center pt-2">
                                          <div>
                                                <p class="text-start fs-5 fw-semibold"><i class="fa-brands fa-line fs-4"></i> <span class="ps-2">neo_maesa123</span></p>
                                                <p class="text-start fs-5 fw-semibold"><i class="fa-brands fa-square-whatsapp fs-3"></i> <span class="ps-2">628719878898</span></p>
                                                <p class="text-start fs-5 fw-semibold"><i class="fa-solid fa-envelope fs-4"></i> <span class="ps-2">neo@gmail.com</span></p>
                                          </div>
                                    </div>
                                    {{-- <i class="fa-solid fa-phone position-absolute fs-3" style="top:50;left:30"></i>
                                    <i class="fa-solid fa-phone position-absolute fs-4" style="top:50;left:30"></i>
                                    <i class="fa-solid fa-phone position-absolute fs-5" style="top:50;left:30"></i> --}}
                              </div>
                        </div>
                        <div class="flex-column justify-content-center col-10 col-lg-6 padding-box-phone" style="padding: 40px 20px;">
                              <div class="sponsor_medpar_box position-relative px-3 px-lg-5 py-4 rounded-3" style="z-index: 20;">
                                    <p class="text-center section-title text-white fs-2">Sponsor</p>
                                    <p class="text-center fw-bold fs-4">Marco</p>
                                    <div class="d-flex flex-column align-items-center pt-2">
                                          <div>
                                                <p class="text-start fs-5 fw-semibold"><i class="fa-brands fa-line fs-4"></i> <span class="ps-2">neo_maesa123</span></p>
                                                <p class="text-start fs-5 fw-semibold"><i class="fa-brands fa-square-whatsapp fs-3"></i> <span class="ps-2">628719878898</span></p>
                                                <p class="text-start fs-5 fw-semibold"><i class="fa-solid fa-envelope fs-4"></i> <span class="ps-2">neo@gmail.com</span></p>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="flex-column justify-content-center col-10 col-lg-6 padding-box-phone" style="padding: 40px 20px;">
                              <div class="sponsor_medpar_box position-relative px-3 px-lg-5 py-4 rounded-3" style="z-index: 20;">
                                    <p class="text-center section-title text-white fs-2">Media Partner</p>
                                    <p class="text-center fw-bold fs-4">Marco</p>
                                    <div class="d-flex flex-column align-items-center pt-2">
                                          <div>
                                                <p class="text-start fs-5 fw-semibold"><i class="fa-brands fa-line fs-4"></i> <span class="ps-2">neo_maesa123</span></p>
                                                <p class="text-start fs-5 fw-semibold"><i class="fa-brands fa-square-whatsapp fs-3"></i> <span class="ps-2">628719878898</span></p>
                                                <p class="text-start fs-5 fw-semibold"><i class="fa-solid fa-envelope fs-4"></i> <span class="ps-2">neo@gmail.com</span></p>

                                          </div>
                                    </div>

                              </div>
                        </div>
                  </div>
            </div>
      </section>
      </section>
      </div>
      @else
      <div id="home">
            <section class="header">
                  <div class="position-relative container-fluid p-0" >
                        <div class="d-none d-lg-flex justify-content-between position-relative">
                              <div class="position-absolute start-0" style="z-index: 10;">
                                    <img src="{{ url('storage/background/cloud-left.svg') }}" class="img-fluid" width="400px" alt="">
                              </div>
                              <div class="position-absolute end-0" style="z-index: 10;">
                                    <img src="{{ url('storage/background/cloud-right.png') }}" class="img-fluid" alt="">
                              </div>
                        </div>
                  </div>
                  <div class="container padding-text-header">
                        <div class="d-flex justify-content-center flex-column align-items-center">
                              <p style="text-transform:uppercase;z-index:20;color:rgba(255, 84, 136, 1)" class="fs-4 text-center fw-bold">the 2023 bnec alam sutera social event</p>
                              <p style="text-transform:uppercase;z-index:20;text-shadow: 1px 2px 1px #AA0046;font-size: 50px" class="text-center section-title fw-bold m-0">BREAKING GENDER STEREOTYPES</p>
                              <p style="text-transform:uppercase;z-index:20;color:rgba(255, 84, 136, 1)" class="fs-4 text-center fw-bold">30 SEPTEMBER 2023 - 13 OCTOBER 2023</p>
                        </div>
                  </div>
                  <div class="d-flex justify-content-center position-relative">
                        <a href="https://linktr.ee/BNECSocialEvent2023" target="_blank"><button class="btn-pink rounded-pill mt-4 px-5 py-3 fs-4" style="font-family: 'Acme', sans-serif;box-shadow:">JOIN US</button></a>
                  </div>
                  <div class="d-flex justify-content-center pt-5 pb-lg-5 pb-0">
                        <div class="ms-4">
                              <img src="{{ url('storage/background/person_coming_soon.svg') }}" class="img-fluid" alt="">
                        </div>
                  </div>
                  
            </section>

            <section style="background: linear-gradient(180deg, #FFF5F5 0%, #9BDBFF 100%);">
                  <div class="container position-relative">
                        {{-- <div id="buletKiri1" class="position-absolute " style="left: 15%; bottom: 2vh;">
                              <img src="./storage/assets/buletKiri1.svg" alt="" >
                        </div> --}}
                        <div id="buletKanan1" class="position-absolute d-lg-block d-none" style="right: 20%; top: 10vh;">
                              <img src="./storage/assets/buletKanan1.svg" alt="">
                        </div>
                        <div id="buletKiri2" class="position-absolute d-lg-block d-none">
                              <img src="./storage/assets/buletKiri2.svg" alt="" >
                        </div>
                        <div id="buletKanan2" class="position-absolute d-lg-block d-none">
                              <img src="./storage/assets/buletKanan2.svg" alt="">
                        </div>
                  </div>
                  <div >
                        <div class="container-fluid pt-5 pb-lg-0 pb-5">
                              <div class="row" id="about">
                                    <div id="aboutContent" class="position-absolute d-lg-block d-none w-100 text-center pb-0">
                                          <p class="section-title fs-1 text-center">ABOUT</p>
                                          <div class="p-5 container">
                                                In a society where progress and power are measured not only by technological advancement but by the evolution of societal norms, the theme<br>
                                                <span class="fw-semibold">“Gender Equality: Breaking Gender Stereotypes”</span><br>
                                                embodies a profound commitment to redefining the gender narratives that have long constrained human potential. This theme is a call to action, a declaration of change to build a future where equality becomes an unwavering reality.

                                          </div>
                                    </div>
                                    <div id="aboutContent" class="position-relative d-lg-none d-block w-100 text-center pb-5">
                                          <p class="section-title fs-1 text-center">ABOUT</p>
                                          <div class="p-5 container">
                                                In a society where progress and power are measured not only by technological advancement but by the evolution of societal norms, the theme<br>
                                                <span class="fw-semibold">“Gender Equality: Breaking Gender Stereotypes”</span><br>
                                                embodies a profound commitment to redefining the gender narratives that have long constrained human potential. This theme is a call to action, a declaration of change to build a future where equality becomes an unwavering reality.

                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div id="mukaDua" class="d-lg-flex d-none justify-content-between position-relative w-100" style="bottom: 200px;">
                              <div>
                                    <img src="./storage/assets/face_kiri.svg" class="img-fluid">
                              </div>
                              <div>
                                    <img src="./storage/assets/face_kanan.svg" class="img-fluid">
                              </div>
                        </div>
                  </div>
            </section>

            <section id="kartu" class="pb-5" style="background: #9BDBFF">
                  <div class="container pb-5 p-0 m-auto">
                        <div class="text-center">
                              <p class= "section-title fs-1">
                                    JOIN US
                              </p>
                              <p class= "fs-3 fw-semibold">
                                    and get these benefits
                              </p>
                        </div>
                        <div class="row" style="padding-top:20px;">
                              <div class="col-12 col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center pb-5">
                                    <div class="w-75 card p-4 rounded-5 crd ">
                                          <img src="./storage/assets/card_1.svg" class="img-responsive" alt="">
                                          <div class="card-body">
                                                <h1 class="card-title text-center">
                                                      Networking
                                                </h1>
                                                <p class="card-text text-center">

                                                </p>
                                          </div>
                                    </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center pb-5">
                                    <div class=" w-75 card p-4 rounded-5 crd">
                                          <img src="./storage/assets/card_2.svg" alt="">
                                          <div class="card-body">
                                                <h1 class="card-title text-center">
                                                      Knowledge
                                                </h1>
                                                <p class="card-text text-center">

                                                </p>
                                          </div>
                                    </div>
                              </div>
                              <div class="col-12 col-md-12 col-lg-4 d-flex justify-content-center pb-5">
                                    <div id="crd3" class="w-75 card p-4 rounded-5 crd">
                                          <img src="./storage/assets/card_3.svg" alt="">
                                          <div class="card-body">
                                                <h1 class="card-title text-center">
                                                      Community Service & SAT Points
                                                </h1>
                                                <p class="card-text text-center">

                                                </p>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </section>

            <section id="listofevents" class="position-relative overflow-hidden" style="background: linear-gradient(180deg, #9BDBFF 0%, rgba(253, 194, 24, 0.58) 30.21%, rgba(253, 194, 24, 0.00) 72.4%);padding-top:100px">
                  <div class="d-flex justify-content-center" style="z-index:5;">
                        <img src="{{url('./storage/listofevents/Cloud.svg')}}" alt="" class="img-fluid col-12 container-fluid p-0 m-auto" style="position:absolute;">
                  </div>

                  <div class="container" >
                        <div class="row">
                              <div class="col-12">
                                    <p class="section-title fs-1 text-center" >LIST OF EVENTS</p>

                                    <div class="d-flex justify-content-center align-items-center py-5">
                                          <div class="col-12 position-relative">
                                                <div class="row align-items-center justify-content-center">
                                                      <div class="col-12 col-lg-8 col-sm-12 order-2 order-lg-1 text-center text-lg-start p-5">
                                                            <div class="section-title fs-1">
                                                                  Seminar
                                                            </div>
                                                            <div class="pt-3 pb-4 fw-medium">
                                                                  Gender equality is about treating everyone fairly, regardless of their gender. It means stopping unfair treatment and stereotypes that have hurt both genders, whether women or men. This applies to school, work, and how we act towards each other. Therefore, Bina Nusantara English Club Alam Sutera proudly presents The 2023 BNEC Social Event seminar with the theme “Gender Equality: Breaking Gender Stereotypes”.
                                                            </div>
                                                            <div class="d-flex gap-3 justify-content-lg-start justify-content-center">
                                                                  <a class="btn-pink-register rounded-pill fs-5 fs-semibold" href="https://bit.ly/SE2023SeminarRegistration" target="_blank" role="button" style="padding: 10px 30px;">Register</a>
                                                                  <a class="btn-blue-guide-book rounded-pill fs-5 fs-semibold" href="https://drive.google.com/file/d/14RoB4QVQIfT6Dnw_hQMgbPiRiSPHTqij/view?usp=drivesdk" target="_blank" role="button" style="padding: 10px 30px;">Guidebook</a>
                                                            </div>
                                                      </div>
                                                      <div class="col-8 col-lg-4 col-sm-8 order-1 order-lg-2 d-flex justify-content-center">
                                                            <img src="{{url('./storage/listofevents/Seminar.svg')}}" alt="" class="events-img img-fluid">
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                                    {{-- <div class="dot col-12 d-none d-sm-none d-md-none d-lg-flex">
                                          <img src="{{url('./storage/listofevents/Line2.svg')}}" alt="" class="img-fluid" >
                                    </div> --}}
                                    <div class="d-flex justify-content-center align-items-center py-5">
                                          <div class="col-12 position-relative">
                                                <div class="row align-items-center justify-content-center" >
                                                      <div class="col-12 col-lg-8 col-sm-12 order-2 order-lg-2 text-center text-lg-start p-5">
                                                            <div class="section-title fs-1">
                                                                  Workshop
                                                            </div>
                                                            <div class="pt-3 pb-4 fw-medium">
                                                                  Bina Nusantara English Club Alam Sutera is thrilled to send a warm invitation to a transformative and eye-opening event – Breaking Gender Stereotypes. This is your chance to be a part of a meaningful contribution that can shape the future of our community. Let's come together as a community to challenge stereotypes, redefine perceptions, and champion gender equality. Your voice matters, and your presence can make a difference.
                                                            </div>
                                                            <div class="d-flex gap-3 justify-content-lg-start justify-content-center">
                                                                  <a class="btn-pink-register rounded-pill fs-5 fs-semibold" href="https://bit.ly/SE2023WorkshopRegistration" target="_blank" role="button" style="padding: 10px 30px;">Register</a>
                                                                  <a class="btn-blue-guide-book rounded-pill fs-5 fs-semibold" href="https://drive.google.com/file/d/1IrBDyA8W0nTDfnY2VnK3Hkv-rgeGvtIF/view?usp=drivesdk" target="_blank" role="button" style="padding: 10px 30px;">Guidebook</a>
                                                            </div>
                                                      </div>
                                                      <div class="col-8 col-lg-4 col-sm-8 order-1 order-lg-1 d-flex justify-content-center">
                                                            <img src="{{url('./storage/listofevents/Workshop.svg')}}" alt="" class="events-img img-fluid" >
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                                    {{-- <div class="dot col-12 d-none d-sm-none d-md-none d-lg-flex">
                                          <img src="{{url('./storage/listofevents/Line1.svg')}}" alt="" class="img-fluid">
                                    </div> --}}
                                    <div class="d-flex justify-content-center align-items-center py-5">
                                          <div class="col-12 position-relative">
                                                <div class="row align-items-center justify-content-center" >
                                                      <div class="col-12 col-lg-8 col-sm-12 order-2 order-lg-1 text-center text-lg-start p-5">
                                                            <div class="section-title fs-1">
                                                                  Donation
                                                            </div>
                                                            <div class="pt-3 pb-4 fw-medium">
                                                                  <p>
                                                                        We are excited to invite you to join us in making a positive impact through the BNEC Social Event 2023 Open Donation! This is an incredible opportunity to contribute to a cause that matters and support our local community in correlation with this year’s theme which is “Gender Equality: Breaking Gender Stereotypes”. (Open to Binusians Only)
                                                                  </p>
                                                                  <p>
                                                                        We believe in the power of unity and compassion. Our Social Event aims to bring people together to celebrate our community's strength while raising funds for stationaries for the workshop and Yayasan Care Indonesia. Your generous donations will directly support the event.
                                                                  </p>
                                                            </div>
                                                            
                                                            <div class="d-flex gap-3 justify-content-lg-start justify-content-center">
                                                                  <a class="btn-orange-donate rounded-pill fs-5 fs-semibold" href="http://bit.ly/SE2023DonationForm" target="_blank" role="button" style="padding: 10px 30px;">Donate</a>
                                                                  <a class="btn-blue-guide-book rounded-pill fs-5 fs-semibold" href="https://drive.google.com/file/d/12PxqBv3Ml9U7pnsTK0ukKtgeBhH6bEPG/view?usp=drivesdk" target="_blank" role="button" style="padding: 10px 30px;">Guidebook</a>
                                                            </div>
                                                      </div>
                                                      <div class="col-8 col-lg-4 col-sm-8 order-1 order-lg-2 d-flex justify-content-center">
                                                            <img src="{{url('./storage/listofevents/Donation.svg')}}" alt="" class="events-img img-fluid">
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </section>

            <section id="message_from_sc" class="pb-5" style="background: linear-gradient(180deg, rgba(247, 89, 169, 0.00) -1.99%, #FBA6CF 100%);padding-top: 200px;">
                  <section id="Message">
                        <div class="container">
                              <div class="row">
                                    <div class="col">
                                          <div class="col-12 d-block d-lg-none" style="color:#F759A9; width:auto; text-align:center;">
                                                <p class="section-title fs-lg-1 fs-3 m-0 py-2 px-4">MESSAGE FROM STEERING COMMITEE</p>
                                          </div>
                                          <div class=" behind d-flex justify-content-center align-items-center" style="background-color:white; border-radius:70px;">
                                                <div id="kayla"  class="message-container col-12 position-relative" style="padding:20px;  " >
                                                      <div class="col-12 d-lg-flex d-none position-absolute top-0 start-50 translate-middle rounded-4" style="background-color:white; color:#F759A9; width:auto; text-align:center; align-items:center">
                                                            <p class="section-title fs-lg-1 fs-3 m-0 py-2 px-4">MESSAGE FROM STEERING COMMITEE</p>
                                                      </div>
                                                      <div class="row align-items-center justify-content-center " >
                                                            <div class="col-12 col-lg-9 col-sm-12 order-2 order-lg-1 text-center text-lg-start p-5 fw-medium d-flex gap-3">
                                                                  {{-- <span style="font-style: italic;font-family:'Acme', sans-serif;color:rgb(255,84,136);top:-20px" class="fs-1 position-relative">“</span> --}}
                                                                  <p style="text-align: justify">Hey there, Extraordinaries! Living freely and achieving our aspirations is a universal right. Yet, pervasive gender stereotypes continue to hinder this journey for both men and women, forcing them to conform to societal expectations. The 2023 BNEC Social Event aims to challenge these stereotypes, promote education, awareness, and societal progress. We encourage the  Indonesian youth to engage, learn, and contribute, bringing us closer to a more equal and inclusive future.</p>
                                                                  {{-- <span style="font-style: italic;font-family:'Acme', sans-serif;color:rgb(255,84,136);bottom:-10px;left:0" class="fs-1 d-flex align-items-end position-relative">”</span> --}}
                                                            </div>
                                                            <div class="col-8 col-lg-3 col-sm-8 order-1 order-lg-2 d-flex justify-content-center">
                                                                  <img src="{{url('./storage/SC/Kayla.png')}}" alt="" class="events-img img-fluid" style="border-radius:70px;">
                                                            </div>
                                                      </div>
                                                </div>

                                                <div id="neo" class="message-container col-12 position-relative" style="padding:20px; display:none;  " >
                                                      <div class="col-12 d-lg-flex d-none position-absolute top-0 start-50 translate-middle rounded-4" style="background-color:white; color:#F759A9; width:auto; text-align:center; align-items:center">
                                                            <p class="section-title fs-lg-1 fs-3 m-0 py-2 px-4">MESSAGE FROM STEERING COMMITEE</p>
                                                      </div>
                                                      <div class="row align-items-center justify-content-center" >
                                                            <div class="col-12 col-lg-9 col-sm-12 order-2 order-lg-1 text-center text-lg-start p-5 fw-medium d-flex gap-3">
                                                                  {{-- <span style="font-style: italic;font-family:'Acme', sans-serif;color:rgb(255,84,136);top:-20px" class="fs-1 position-relative">“</span> --}}
                                                                  <p style="text-align: justify">Gender equality is a movement that has been on the rise for the past few decades, but we still have a long way to go. This year’s Social Event theme is something that we would like to convey to Indonesia’s youth about the importance of equality and erasing the labels that affect a lot of people. Beyond the labels, beyond the stereotypes, everyone is equal and deserves equal opportunities.</p>
                                                                  {{-- <span style="font-style: italic;font-family:'Acme', sans-serif;color:rgb(255,84,136);bottom:-10px;left:0" class="fs-1 d-flex align-items-end position-relative">”</span> --}}
                                                            </div>
                                                            <div class="col-8 col-lg-3 col-sm-8 order-1 order-lg-2 d-flex justify-content-center">
                                                                  <img src="{{url('./storage/SC/Maesa.png')}}" alt="" class="events-img img-fluid" style="border-radius:70px;">
                                                            </div>
                                                      </div>
                                                </div>

                                                <div id="gladys" class="message-container col-12 position-relative" style="padding:20px; display:none;  " >
                                                      <div class="col-12 d-lg-flex d-none position-absolute top-0 start-50 translate-middle rounded-4" style="background-color:white; color:#F759A9; width:auto; text-align:center; align-items:center">
                                                            <p class="section-title fs-lg-1 fs-3 m-0 py-2 px-4">MESSAGE FROM STEERING COMMITEE</p>
                                                      </div>
                                                      <div class="row align-items-center justify-content-center" >
                                                            <div class="col-12 col-lg-9 col-sm-12 order-2 order-lg-1 text-center text-lg-start p-5 fw-medium">
                                                                  {{-- <span style="font-style: italic;font-family:'Acme', sans-serif;color:rgb(255,84,136);top:-20px" class="fs-1 position-relative">“</span> --}}
                                                                  <p style="text-align: justify">Hello, Extraordinaries! The pursuit of gender equality is essential to achieving an ideal life for all. The BNEC 2023 Social Event is poised to serve as a platform to turn this dream into reality. Our mission is to promote gender equality and challenge unfair gender stereotypes. We hope that everyone can contribute to creating a better world where fairness prevails, regardless of gender.</p>
                                                                  {{-- <span style="font-style: italic;font-family:'Acme', sans-serif;color:rgb(255,84,136);bottom:-10px;left:0" class="fs-1 d-flex align-items-end position-relative">”</span> --}}
                                                            </div>
                                                            <div class="col-8 col-lg-3 col-sm-8 order-1 order-lg-2 d-flex justify-content-center" >
                                                                  <img src="{{url('./storage/SC/Gladys.png')}}" alt="" class="events-img img-fluid" style="border-radius:70px;">
                                                            </div>
                                                      </div>
                                                </div>
                                                <div id="trista" class="message-container col-12 position-relative" style="padding:20px; display:none;  " >
                                                      
                                                      <div class="col-12 d-lg-flex d-none position-absolute top-0 start-50 translate-middle rounded-4" style="background-color:white; color:#F759A9; width:auto; text-align:center; align-items:center">
                                                            <p class="section-title fs-lg-1 fs-3 m-0 py-2 px-4">MESSAGE FROM STEERING COMMITEE</p>
                                                      </div>
                                                      <div class="row align-items-center justify-content-center" >
                                                            <div class="col-12 col-lg-9 col-sm-12 order-2 order-lg-1 text-center text-lg-start p-5 fw-medium">
                                                                  {{-- <span style="font-style: italic;font-family:'Acme', sans-serif;color:rgb(255,84,136);top:-20px" class="fs-1 position-relative">“</span> --}}
                                                                  <p style="text-align: justify">Everyone deserves the same opportunities in life, and everyone has the right to express themselves freely. Regardless what gender we are, we can always pursue our dream without a gender as a chain that holds us back. Through the BNEC 2023 Social Event, we hope to raise awareness about gender equality in Indonesia and fight gender stereotypes. By doing so, we aim to contribute to a brighter future for the young generation of Indonesia.</p>
                                                                  {{-- <span style="font-style: italic;font-family:'Acme', sans-serif;color:rgb(255,84,136);bottom:-10px;left:0" class="fs-1 d-flex align-items-end position-relative">”</span> --}}
                                                            </div>
                                                            <div class="col-8 col-lg-3 col-sm-8 order-1 order-lg-2 d-flex justify-content-center">
                                                                  <img src="{{url('./storage/SC/Trista.png')}}" alt="" class="events-img img-fluid" style="border-radius:70px;">
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                          {{-- Untuk web --}}
                                          <div class="infront d-none d-lg-flex">
                                                {{-- <ul class="nav nav-tabs border-0">
                                                      <li class="nav-item">
                                                            <div class="space" style="border-radius:60px; ">
                                                                  <div class="SC-button">
                                                                        <a class="nav-link" onclick="showContent('kayla');"  >
                                                                              <img src="{{url('./storage/SC/Kayla.png')}}" alt="" class="img-fluid overflow-hidden" style="border-radius:100%; height:80px;">
                                                                        </a>
                                                                  </div>
                                                            </div>
                                                      </li>
                                                      <li class="nav-item">
                                                            <div class="space" style="border-radius:60px;  ">
                                                                  <div class="SC-button">
                                                                        <a class="nav-link" onclick="showContent('neo');" >
                                                                              <img src="{{url('./storage/SC/Maesa.png')}}" alt="" class="img-fluid overflow-hidden" style="border-radius:100%; height:80px;">
                                                                        </a>
                                                                  </div>

                                                            </div>
                                                      </li>
                                                      <li class="nav-item">
                                                            <div class="space" style="border-radius:60px;  ">
                                                                  <div class="SC-button">
                                                                        <a class="nav-link" onclick="showContent('gladys');" >
                                                                              <img src="{{url('./storage/SC/Gladys.png')}}" alt="" class="img-fluid overflow-hidden" style="border-radius:100%; height:80px;">
                                                                        </a>
                                                                  </div>
                                                            </div>
                                                      </li>
                                                      <li class="nav-item">
                                                            <div class="space" style="border-radius:60px;">
                                                                  <div class="SC-button">
                                                                        <a class="nav-link" onclick="showContent('trista');">
                                                                              <img src="{{url('./storage/SC/Trista.png')}}" alt="" class="img-fluid overflow-hidden" style="border-radius:100%; height:80px;">
                                                                        </a>
                                                                  </div>
                                                            </div>
                                                      </li>
                                                </ul> --}}
                                                <ul class="row p-0">
                                                      <div class="col-3 m-auto" style="list-style: none">
                                                            <div class="SC-button d-flex justify-content-center">
                                                                  <a class="nav-link" onclick="showContent('kayla');"  >
                                                                        <img src="{{url('./storage/SC/Kayla.png')}}" alt="" class="img-fluid overflow-hidden" style="border-radius:100%; height:80px;">
                                                                  </a>
                                                            </div>
                                                      </div>
                                                      <div class="col-3 m-auto" style="list-style: none">
                                                            <div class="SC-button d-flex justify-content-center">
                                                                  <a class="nav-link" onclick="showContent('neo');" >
                                                                        <img src="{{url('./storage/SC/Maesa.png')}}" alt="" class="img-fluid overflow-hidden" style="border-radius:100%; height:80px;">
                                                                  </a>

                                                            </div>
                                                      </div>
                                                      <div class="col-3 m-auto" style="list-style: none">
                                                            <div class="SC-button d-flex justify-content-center">
                                                                  <a class="nav-link" onclick="showContent('gladys');" >
                                                                        <img src="{{url('./storage/SC/Gladys.png')}}" alt="" class="img-fluid overflow-hidden" style="border-radius:100%; height:80px;">
                                                                  </a>
                                                            </div>
                                                      </div>
                                                      <div class="col-3 m-auto" style="list-style: none">
                                                            <div class="SC-button d-flex justify-content-center">
                                                                  <a class="nav-link" onclick="showContent('trista');">
                                                                        <img src="{{url('./storage/SC/Trista.png')}}" alt="" class="img-fluid overflow-hidden" style="border-radius:100%; height:80px;">
                                                                  </a>
                                                            </div>
                                                      </div>
                                                </ul>
                                          </div>

                                          {{-- Untuk HP --}}
                                          <div class="infront-hp d-flex d-lg-none">
                                                <ul class="row p-0">
                                                      <div class="col-3 m-auto" style="list-style: none">
                                                            <div class="SC-button d-flex justify-content-center">
                                                                  <a class="nav-link" onclick="showContent('kayla');"  >
                                                                        <img src="{{url('./storage/SC/Kayla.png')}}" alt="" class="img-fluid overflow-hidden" style="border-radius:100%; height:60px;">
                                                                  </a>
                                                            </div>
                                                      </div>
                                                      <div class="col-3 m-auto" style="list-style: none">
                                                            <div class="SC-button d-flex justify-content-center">
                                                                  <a class="nav-link" onclick="showContent('neo');" >
                                                                        <img src="{{url('./storage/SC/Maesa.png')}}" alt="" class="img-fluid overflow-hidden" style="border-radius:100%; height:60px;">
                                                                  </a>

                                                            </div>
                                                      </div>
                                                      <div class="col-3 m-auto" style="list-style: none">
                                                            <div class="SC-button d-flex justify-content-center">
                                                                  <a class="nav-link" onclick="showContent('gladys');" >
                                                                        <img src="{{url('./storage/SC/Gladys.png')}}" alt="" class="img-fluid overflow-hidden" style="border-radius:100%; height:60px;">
                                                                  </a>
                                                            </div>
                                                      </div>
                                                      <div class="col-3 m-auto" style="list-style: none">
                                                            <div class="SC-button d-flex justify-content-center">
                                                                  <a class="nav-link" onclick="showContent('trista');">
                                                                        <img src="{{url('./storage/SC/Trista.png')}}" alt="" class="img-fluid overflow-hidden" style="border-radius:100%; height:60px;">
                                                                  </a>
                                                            </div>
                                                      </div>
                                                </ul>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </section>
                  {{-- Documentations --}}
                  {{-- <section id="Documentation" >
                        <div class="container">
                              <div class="row">
                                    <div class="col">
                                          <div class="title-eventss" style="padding-bottom:20px;">DOCUMENTATION</div>
                                          <div id="carouselExampleIndicators" class="carousel slide" >
                                                <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                </div>
                                                <div class="carousel-inner">
                                                <div class="carousel-item active ">
                                                <img src="{{url('./storage/listofevents/665221.jpg')}}" class="w-100 img-fluid px-3 "  alt="..." style=" height:auto; border-radius:40px ">
                                                </div>
                                                <div class="carousel-item">
                                                <img src="{{url('./storage/listofevents/665221.jpg')}}" class="w-100 img-fluid px-3 "  alt="..." style=" height:auto; border-radius:40px ">
                                                </div>
                                                <div class="carousel-item">
                                                <img src="{{url('./storage/listofevents/665221.jpg')}}" class="w-100 img-fluid px-3 "  alt="..." style=" height:auto; border-radius:40px " >
                                                </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                                </button>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </section> --}}
            </section>

            <section style="background: linear-gradient(180deg, #FBA6CF 0%, #F872B5 39.13%, #F768B0 53.65%, #F976B7 75.73%, #F97DBA 100%);height:800px;overflow:hidden">
                  <div class="d-flex justify-content-center align-items-center position-relative" id="donation"  style="background: url('./storage/background/love_donation.svg');height:800px;background-position-x: center;background-position-y: top;background-repeat: no-repeat">
                        <div class="container align-items-center d-flex justify-content-center" >
                              <div class="text-bg-dark col-lg-8 text-center rounded-5 overflow-hidden" >
                                    <div class="" style="background:url('./storage/assets/donationbackground.png'); background-size: cover; background-repeat:no-repeat; height: auto; padding: 100px 60px">
                                    <p class="section-title fs-1 text-white">DONATION</p>
                                    <p class="mt-4 fs-5 fw-medium">Be a beacon of hope. Donate now and be a part of something incredible.</p>
                                    <a href="http://bit.ly/SE2023DonationForm" target="_blank"><button class="btn-pink rounded-pill mt-4 px-5 py-3 fs-4" style="font-family: 'Acme', sans-serif;">DONATE</button></a>
                                    </div>
                              </div>
                        </div>
                  </div>
            </section>

            <div class="position-relative m-0" style="overflow: hidden;background: linear-gradient(180deg, #F97DBA 0%, #FFF5F5 30%)">
                  <img class="position-absolute col-12 p-0 m-0 img-fluid" src="{{ url('./storage/background/sprinkle-sponsor-medpar.svg') }}" alt="">
                  @if($sponsor_count >= 1)
                  <section id="sponsors" class="pb-5">
                        <div class="container-fluid container-xxl position-relative m-auto p-0">
                              <div class="row">
                                    <div class="text-center text-pink" style="padding-top:100px">
                                          <p class="section-title fs-1">SPONSORS</p>
                                    </div>
                              </div>
                              @if($sponsor_count >= 12)
                              <div class="position-relative m-0">
                                    <div class="row align-items-start mt-3 p-0 text-center logos d-none d-lg-block">
                                          <div class="logos-slide p-0 d-flex">
                                                @foreach ($sponsors as $sponsor)
                                                      <div class="col-6 col-md-1">
                                                            <img src="{{url('storage/images/supports/' . $sponsor->logo)}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                      </div>
                                                @endforeach
                                                @foreach ($sponsors as $sponsor)
                                                      <div class="col-6 col-md-1">
                                                            <img src="{{url('storage/images/supports/' . $sponsor->logo)}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                      </div>
                                                @endforeach
                                                {{-- <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/aiesec.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/tfisc.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/kmbd.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/himti.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/himsisfo.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/himtri.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/aiesec.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/tfisc.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/kmbd.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/himti.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/himsisfo.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/himtri.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div> --}}

                                                {{--  --}}

                                                {{-- <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/aiesec.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/tfisc.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/kmbd.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/himti.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/himsisfo.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/himtri.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/aiesec.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/tfisc.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/kmbd.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/himti.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/himsisfo.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/himtri.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div> --}}


                                          </div>
                                    </div>
                                    @elseif($sponsor_count >= 6)
                                    <div class="row align-items-start p-0 text-center logos d-none d-lg-block">
                                          <div class="logos-slide p-0 d-flex">
                                                @foreach ($sponsors as $sponsor)
                                                      <div class="col-6 col-md-2">
                                                            <img src="{{url('storage/images/supports/' . $sponsor->logo)}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                      </div>
                                                @endforeach
                                                @foreach ($sponsors as $sponsor)
                                                      <div class="col-6 col-md-2">
                                                            <img src="{{url('storage/images/supports/' . $sponsor->logo)}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                      </div>
                                                @endforeach
                                                {{-- <div class="col-6 col-md-2">
                                                      <img src="{{url('storage/assets/aiesec.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-2">
                                                      <img src="{{url('storage/assets/tfisc.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-2">
                                                      <img src="{{url('storage/assets/kmbd.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-2">
                                                      <img src="{{url('storage/assets/himti.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-2">
                                                      <img src="{{url('storage/assets/himsisfo.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-2">
                                                      <img src="{{url('storage/assets/himtri.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-2">
                                                      <img src="{{url('storage/assets/aiesec.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-2">
                                                      <img src="{{url('storage/assets/tfisc.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-2">
                                                      <img src="{{url('storage/assets/kmbd.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-2">
                                                      <img src="{{url('storage/assets/himti.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-2">
                                                      <img src="{{url('storage/assets/himsisfo.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-2">
                                                      <img src="{{url('storage/assets/himtri.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div> --}}
                                          </div>
                                    </div>
                                    @else
                                    <div class="d-lg-flex d-none justify-content-center gap-3">
                                          @foreach ($sponsors as $sponsor)
                                                <div class="col-2 text-center mb-3">
                                                      <img src="{{url('storage/images/supports/' . $sponsor->logo)}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                          @endforeach
                                          {{-- <div class="col text-center mb-3">
                                                <img src="{{url('storage/assets/himtri.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                          </div>
                                          <div class="col text-center mb-3">
                                                <img src="{{url('storage/assets/himtri.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                          </div>
                                          <div class="col text-center mb-3">
                                                <img src="{{url('storage/assets/himtri.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                          </div>
                                          <div class="col text-center mb-3">
                                                <img src="{{url('storage/assets/himtri.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                          </div>
                                          <div class="col text-center mb-3">
                                                <img src="{{url('storage/assets/himtri.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                          </div> --}}
                                    </div>
                                    @endif
                                    {{-- mobile view --}}
                                    <div class="d-flex flex-wrap justify-content-center d-lg-none px-4">
                                          @foreach ($sponsors as $sponsor)
                                                <div class="col-3 text-center mb-3">
                                                      <img src="{{url('storage/images/supports/' . $sponsor->logo)}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                          @endforeach
                                          {{-- <div class="col-3 text-center mb-3">
                                                <img src="{{url('storage/assets/aiesec.png')}}" alt="" class="img-fluid">
                                          </div>
                                          <div class="col-3 text-center mb-3">
                                                <img src="{{url('storage/assets/tfisc.png')}}" alt="" class="img-fluid">
                                          </div>
                                          <div class="col-3 text-center mb-3">
                                                <img src="{{url('storage/assets/kmbd.png')}}" alt="" class="img-fluid">
                                          </div>
                                          <div class="col-3 text-center mb-3">
                                                <img src="{{url('storage/assets/himti.png')}}" alt="" class="img-fluid">
                                          </div>
                                          <div class="col-3 text-center mb-3">
                                                <img src="{{url('storage/assets/himsisfo.png')}}" alt="" class="img-fluid">
                                          </div>
                                          <div class="col-3 text-center mb-3">
                                                <img src="{{url('storage/assets/himtri.png')}}" alt="" class="img-fluid">
                                          </div> --}}
                                    </div>
                              </div>
                              


                        </div>
                  </section>
                  @endif
                  @if($media_partner_count >= 1)
                  <section id="medpar" class="py-5">
                        <div class="container-fluid container-xxl position-relative m-auto p-0">
                              <div class="row">
                                    <div class="text-center text-pink">
                                          <p class="section-title fs-1">MEDIA PARTNERS</p>
                                    </div>
                              </div>
                              @if($media_partner_count >= 12)
                              <div class="position-relative m-0">
                                    <div class="row align-items-start mt-3 p-0 text-center logos d-none d-lg-block">
                                          <div class="logos-slide p-0 d-flex">
                                                @foreach ($mediaPartners as $mediaPartner)
                                                      <div class="col-6 col-md-1">
                                                            <img src="{{url('storage/images/supports/' . $mediaPartner->logo)}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                      </div>
                                                @endforeach
                                                @foreach ($mediaPartners as $mediaPartner)
                                                      <div class="col-6 col-md-1">
                                                            <img src="{{url('storage/images/supports/' . $mediaPartner->logo)}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                      </div>
                                                @endforeach
                                                {{-- <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/aiesec.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/tfisc.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/kmbd.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/himti.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/himsisfo.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/himtri.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/aiesec.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/tfisc.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/kmbd.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/himti.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/himsisfo.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/himtri.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div> --}}

                                                {{--  --}}

                                                {{-- <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/aiesec.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/tfisc.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/kmbd.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/himti.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/himsisfo.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/himtri.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/aiesec.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/tfisc.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/kmbd.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/himti.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/himsisfo.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-1">
                                                      <img src="{{url('storage/assets/himtri.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div> --}}


                                          </div>
                                    </div>
                                    @elseif($media_partner_count >= 6)
                                    <div class="row align-items-start p-0 text-center logos d-none d-lg-block">
                                          <div class="logos-slide p-0 d-flex">
                                                @foreach ($mediaPartners as $mediaPartner)
                                                      <div class="col-6 col-md-2">
                                                            <img src="{{url('storage/images/supports/' . $mediaPartner->logo)}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                      </div>
                                                @endforeach
                                                @foreach ($mediaPartners as $mediaPartner)
                                                      <div class="col-6 col-md-2">
                                                            <img src="{{url('storage/images/supports/' . $mediaPartner->logo)}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                      </div>
                                                @endforeach
                                                {{-- <div class="col-6 col-md-2">
                                                      <img src="{{url('storage/assets/aiesec.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-2">
                                                      <img src="{{url('storage/assets/tfisc.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-2">
                                                      <img src="{{url('storage/assets/kmbd.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-2">
                                                      <img src="{{url('storage/assets/himti.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-2">
                                                      <img src="{{url('storage/assets/himsisfo.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-2">
                                                      <img src="{{url('storage/assets/himtri.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-2">
                                                      <img src="{{url('storage/assets/aiesec.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-2">
                                                      <img src="{{url('storage/assets/tfisc.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-2">
                                                      <img src="{{url('storage/assets/kmbd.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-2">
                                                      <img src="{{url('storage/assets/himti.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-2">
                                                      <img src="{{url('storage/assets/himsisfo.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                                <div class="col-6 col-md-2">
                                                      <img src="{{url('storage/assets/himtri.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div> --}}
                                          </div>
                                    </div>
                                    @else
                                    <div class="d-lg-flex d-none justify-content-center gap-3">
                                          @foreach ($mediaPartners as $mediaPartner)
                                                <div class="col-2 text-center mb-3">
                                                      <img src="{{url('storage/images/supports/' . $mediaPartner->logo)}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                          @endforeach
                                          {{-- <div class="col text-center mb-3">
                                                <img src="{{url('storage/assets/himtri.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                          </div>
                                          <div class="col text-center mb-3">
                                                <img src="{{url('storage/assets/himtri.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                          </div>
                                          <div class="col text-center mb-3">
                                                <img src="{{url('storage/assets/himtri.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                          </div>
                                          <div class="col text-center mb-3">
                                                <img src="{{url('storage/assets/himtri.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                          </div>
                                          <div class="col text-center mb-3">
                                                <img src="{{url('storage/assets/himtri.png')}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                          </div> --}}
                                    </div>
                                    @endif
                                    <div class="d-flex flex-wrap justify-content-center d-lg-none px-4">
                                          @foreach ($mediaPartners as $mediaPartner)
                                                <div class="col-3 text-center mb-3">
                                                      <img src="{{url('storage/images/supports/' . $mediaPartner->logo)}}" alt="" style="aspect-ratio: 3/2;width:100%;object-fit: contain"  class="img-fluid">
                                                </div>
                                          @endforeach
                                          {{-- <div class="col-3 text-center mb-3">
                                                <img src="{{url('storage/assets/aiesec.png')}}" alt="" class="img-fluid">
                                          </div>
                                          <div class="col-3 text-center mb-3">
                                                <img src="{{url('storage/assets/tfisc.png')}}" alt="" class="img-fluid">
                                          </div>
                                          <div class="col-3 text-center mb-3">
                                                <img src="{{url('storage/assets/kmbd.png')}}" alt="" class="img-fluid">
                                          </div>
                                          <div class="col-3 text-center mb-3">
                                                <img src="{{url('storage/assets/himti.png')}}" alt="" class="img-fluid">
                                          </div>
                                          <div class="col-3 text-center mb-3">
                                                <img src="{{url('storage/assets/himsisfo.png')}}" alt="" class="img-fluid">
                                          </div>
                                          <div class="col-3 text-center mb-3">
                                                <img src="{{url('storage/assets/himtri.png')}}" alt="" class="img-fluid">
                                          </div> --}}
                                    </div>
                              </div>
                        </div>
                  </section>
                  @endif
                  <section id="supported-by" class="py-5">

                        <div class="container mt-3">
                              <div class="row align-items-center column-gap-0">
                                    <div class="col-12 text-center text-pink">
                                          <p class="section-title fs-1">SUPPORTED BY</p>
                                    </div>
                                    <div class="col-12 col-md-6 text-center">
                                          <img src="{{url('./storage/assets/tfi 1.png')}}" alt="" class="img-fluid w-50">
                                    </div>
                                    <div class="col-12 col-md-6 mt-2 text-center">
                                          <img src="{{url('./storage/assets/cbdc 1.png')}}" alt="" class="img-fluid w-50">
                                    </div>
                              </div>
                        </div>
                  </section>
            </div>
      </div>
      @endif
</x-app>


<script>
      function showContent(tabId) {
         // Hide all content containers
         document.getElementById('kayla').style.display = 'none';
         document.getElementById('neo').style.display = 'none';
         document.getElementById('gladys').style.display = 'none';
         document.getElementById('trista').style.display = 'none';

         // Show the selected content container
         document.getElementById(tabId).style.display = 'block';
     }
 </script>

