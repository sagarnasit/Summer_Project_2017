@extends('Boot.master')
@section('title')
    <title>Cart</title>
@stop
@section('body')
        <section class="cart-content paira-animation-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center margin-bottom-40">
                        <div class="page-header">
                            <h1 class="text-uppercase">My cart</h1>
                            <hr>
                        </div>
                    </div>
                    <div class="col-md-12 margin-bottom-40">
                        <a href="/checkout" class="pull-left margin-bottom-40 cart-continue-shopping"><i class="fa fa-long-arrow-left margin-right-10"></i><strong class="font-color-orange text-uppercase">Continue Shopping</strong></a>
                        <div class="cart-item-list">
                            <h6 class="text-uppercase panel-title cart-title">Product Lists</h6>
                       @foreach($cartItems as $cartItem)
                            <ul class="list-unstyled">
                                <li>
                                    <div class="col-md-4 paira-animation" data-paira-animation="fadeInLeft" data-paira-animation-delay="0.5s">
                                        <img class="img-responsive" src="images/Adidas_shhoe.jpg{{--{{url('images',$cartItem->name)}}--}}" alt="">
                                    </div>
                                    <div class="col-md-8 margin-top-20">
                                        <a href="#" class="margin-top-10"><strong class="font-size-18"></strong></a>
{{--
                                        <a href="{{route('cart.destroy',$cartItem->id)}}" class="pull-right"><i class="fa  fa-times-circle fa-2x"></i></a>
--}}
                                        <form action="{{route('cart.destroy',$cartItem->rowId)}}" method="POST">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <input  class="button small alert" type="submit" value="Delete">
                                        </form>
                                        <h4 class="margin-top-20 margin-bottom-20"><span class="money font-size-16 color-scheme-3"> {{ $cartItem->name}}</span></h4>
                                        <h4 class="margin-bottom-20 pull-right"><span class="money font-bold">Rs. {{$cartItem->price}}</span></h4>
                                        <div class="margin-bottom-10 quantity pull-left">
                                            <button class="pull-left btn-success btn" data-direction="down"><i class="fa fa-angle-down"></i></button>
                                            <input type="text" value="1{{--{{$cartItem->qty}}--}}" class="pull-left text-center product_quantity_text">
                                            <button class="btn-success btn pull-left" data-direction="up"><i class="fa fa-angle-up"></i></button>
                                        </div>
                                        <a href="#" class="btn btn-default pull-left color-scheme-1 margin-left-10 margin-right-10 cart-update"><i class="fa fa-pencil"></i></a>
                                    </div>
                                </li>

                            </ul>
                               @endforeach
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 margin-bottom-40">
                        <figure class="margin-bottom-30">
                            <figcaption><h4 class="panel-heading font-bold">Sub Total</h4></figcaption>
                            <div class="cart-sub-total">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <h2 class="margin-top-50 margin-bottom-20"><span class="money font-bold font-bold font-color-orange font-size-50">Rs. {{Cart::total()}}</span></h2>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <textarea id="note" name="note" class="margin-top-10 margin-bottom-10 form-control" placeholder="Special instructions..."></textarea>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <input type="submit" id="checkout" class="btn btn-success btn-lg btn-block text-uppercase margin-top-50" name="checkout" value="Proceed To Checkout">
                                </div>
                            </div>
                        </figure>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      {{--  <figure>
                            <figcaption><h4 class="panel-heading font-bold">Get Shipping Estimates</h4></figcaption>
                            <div class="cart-shipping-calculate margin-top-20">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <select id="address_country" class="form-control margin-bottom-20" name="address[country]">
                                        <option value="Bangladesh" data-provinces="[]">Bangladesh</option>
                                        <option value="---" data-provinces="[]">---</option>
                                        <option value="Afghanistan" data-provinces="[]">Afghanistan</option>
                                        <option value="Aland Islands" data-provinces="[]">Åland Islands</option>
                                        <option value="Albania" data-provinces="[]">Albania</option>
                                        <option value="Algeria" data-provinces="[]">Algeria</option>
                                        <option value="Andorra" data-provinces="[]">Andorra</option>
                                        <option value="Angola" data-provinces="[]">Angola</option>
                                        <option value="Anguilla" data-provinces="[]">Anguilla</option>
                                        <option value="Antigua And Barbuda" data-provinces="[]">Antigua &amp; Barbuda</option>
                                        <option value="Argentina" data-provinces="[&quot;Buenos Aires&quot;,&quot;Buenos Aires City&quot;,&quot;Catamarca&quot;,&quot;Chaco&quot;,&quot;Chobut&quot;,&quot;Corrientes&quot;,&quot;Córdoba&quot;,&quot;Ente Ríos&quot;,&quot;Formosa&quot;,&quot;Jujuy&quot;,&quot;La Pampa&quot;,&quot;La Rioja&quot;,&quot;Mendoza&quot;,&quot;Misiones&quot;,&quot;Neuquén&quot;,&quot;Río Negro&quot;,&quot;Salta&quot;,&quot;San Juan&quot;,&quot;San Luis&quot;,&quot;Santa Cruz&quot;,&quot;Santa Fe&quot;,&quot;Santiago Del Estero&quot;,&quot;Tierra del Fuego&quot;,&quot;Tucumán&quot;]">Argentina</option>
                                        <option value="Armenia" data-provinces="[]">Armenia</option>
                                        <option value="Aruba" data-provinces="[]">Aruba</option>
                                        <option value="Australia" data-provinces="[&quot;Australian Capital Territory&quot;,&quot;New South Wales&quot;,&quot;Northern Territory&quot;,&quot;Queensland&quot;,&quot;South Australia&quot;,&quot;Tasmania&quot;,&quot;Victoria&quot;,&quot;Western Australia&quot;]">Australia</option>
                                        <option value="Austria" data-provinces="[]">Austria</option>
                                        <option value="Azerbaijan" data-provinces="[]">Azerbaijan</option>
                                        <option value="Bahamas" data-provinces="[]">Bahamas</option>
                                        <option value="Bahrain" data-provinces="[]">Bahrain</option>
                                        <option value="Bangladesh" data-provinces="[]">Bangladesh</option>
                                        <option value="Barbados" data-provinces="[]">Barbados</option>
                                        <option value="Belarus" data-provinces="[]">Belarus</option>
                                        <option value="Belgium" data-provinces="[]">Belgium</option>
                                        <option value="Belize" data-provinces="[]">Belize</option>
                                        <option value="Benin" data-provinces="[]">Benin</option>
                                        <option value="Bermuda" data-provinces="[]">Bermuda</option>
                                        <option value="Bhutan" data-provinces="[]">Bhutan</option>
                                        <option value="Bolivia" data-provinces="[]">Bolivia</option>
                                        <option value="Bosnia And Herzegovina" data-provinces="[]">Bosnia &amp; Herzegovina</option>
                                        <option value="Botswana" data-provinces="[]">Botswana</option>
                                        <option value="Bouvet Island" data-provinces="[]">Bouvet Island</option>
                                        <option value="Brazil" data-provinces="[&quot;Acre&quot;,&quot;Alagoas&quot;,&quot;Amapá&quot;,&quot;Amazonas&quot;,&quot;Bahia&quot;,&quot;Ceará&quot;,&quot;Distrito Federal&quot;,&quot;Espírito Santo&quot;,&quot;Goiás&quot;,&quot;Maranhão&quot;,&quot;Mato Grosso&quot;,&quot;Mato Grosso do Sul&quot;,&quot;Minas Gerais&quot;,&quot;Paraná&quot;,&quot;Paraíba&quot;,&quot;Pará&quot;,&quot;Pernambuco&quot;,&quot;Piauí&quot;,&quot;Rio Grande do Norte&quot;,&quot;Rio Grande do Sul&quot;,&quot;Rio de Janeiro&quot;,&quot;Rondônia&quot;,&quot;Roraima&quot;,&quot;Santa Catarina&quot;,&quot;Sergipe&quot;,&quot;São Paulo&quot;,&quot;Tocantins&quot;]">Brazil</option>
                                        <option value="British Indian Ocean Territory" data-provinces="[]">British Indian Ocean Territory</option>
                                        <option value="Virgin Islands, British" data-provinces="[]">British Virgin Islands</option>
                                        <option value="Brunei" data-provinces="[]">Brunei</option>
                                        <option value="Bulgaria" data-provinces="[]">Bulgaria</option>
                                        <option value="Burkina Faso" data-provinces="[]">Burkina Faso</option>
                                        <option value="Burundi" data-provinces="[]">Burundi</option>
                                        <option value="Cambodia" data-provinces="[]">Cambodia</option>
                                        <option value="Republic of Cameroon" data-provinces="[]">Cameroon</option>
                                        <option value="Canada" data-provinces="[&quot;Alberta&quot;,&quot;British Columbia&quot;,&quot;Manitoba&quot;,&quot;New Brunswick&quot;,&quot;Newfoundland&quot;,&quot;Northwest Territories&quot;,&quot;Nova Scotia&quot;,&quot;Nunavut&quot;,&quot;Ontario&quot;,&quot;Prince Edward Island&quot;,&quot;Quebec&quot;,&quot;Saskatchewan&quot;,&quot;Yukon&quot;]">Canada</option>
                                        <option value="Cape Verde" data-provinces="[]">Cape Verde</option>
                                        <option value="Cayman Islands" data-provinces="[]">Cayman Islands</option>
                                        <option value="Central African Republic" data-provinces="[]">Central African Republic</option>
                                        <option value="Chad" data-provinces="[]">Chad</option>
                                        <option value="Chile" data-provinces="[]">Chile</option>
                                        <option value="China" data-provinces="[]">China</option>
                                        <option value="Christmas Island" data-provinces="[]">Christmas Island</option>
                                        <option value="Cocos (Keeling) Islands" data-provinces="[]">Cocos (Keeling) Islands</option>
                                        <option value="Colombia" data-provinces="[]">Colombia</option>
                                        <option value="Comoros" data-provinces="[]">Comoros</option>
                                        <option value="Congo" data-provinces="[]">Congo - Brazzaville</option>
                                        <option value="Congo, The Democratic Republic Of The" data-provinces="[]">Congo - Kinshasa</option>
                                        <option value="Cook Islands" data-provinces="[]">Cook Islands</option>
                                        <option value="Costa Rica" data-provinces="[]">Costa Rica</option>
                                        <option value="Croatia" data-provinces="[]">Croatia</option>
                                        <option value="Cuba" data-provinces="[]">Cuba</option>
                                        <option value="Curaçao" data-provinces="[]">Curaçao</option>
                                        <option value="Cyprus" data-provinces="[]">Cyprus</option>
                                        <option value="Czech Republic" data-provinces="[]">Czech Republic</option>
                                        <option value="Côte d'Ivoire" data-provinces="[]">Côte d’Ivoire</option>
                                        <option value="Denmark" data-provinces="[]">Denmark</option>
                                        <option value="Djibouti" data-provinces="[]">Djibouti</option>
                                        <option value="Dominica" data-provinces="[]">Dominica</option>
                                        <option value="Dominican Republic" data-provinces="[]">Dominican Republic</option>
                                        <option value="Ecuador" data-provinces="[]">Ecuador</option>
                                        <option value="Egypt" data-provinces="[&quot;6th of October&quot;,&quot;Al Sharqia&quot;,&quot;Alexandria&quot;,&quot;Aswan&quot;,&quot;Asyut&quot;,&quot;Beheira&quot;,&quot;Beni Suef&quot;,&quot;Cairo&quot;,&quot;Dakahlia&quot;,&quot;Damietta&quot;,&quot;Faiyum&quot;,&quot;Gharbia&quot;,&quot;Giza&quot;,&quot;Helwan&quot;,&quot;Ismailia&quot;,&quot;Kafr el-Sheikh&quot;,&quot;Luxor&quot;,&quot;Matrouh&quot;,&quot;Minya&quot;,&quot;Monufia&quot;,&quot;New Valley&quot;,&quot;North Sinai&quot;,&quot;Port Said&quot;,&quot;Qalyubia&quot;,&quot;Qena&quot;,&quot;Red Sea&quot;,&quot;Sohag&quot;,&quot;South Sinai&quot;,&quot;Suez&quot;]">Egypt</option>
                                        <option value="El Salvador" data-provinces="[]">El Salvador</option>
                                        <option value="Equatorial Guinea" data-provinces="[]">Equatorial Guinea</option>
                                        <option value="Eritrea" data-provinces="[]">Eritrea</option>
                                        <option value="Estonia" data-provinces="[]">Estonia</option>
                                        <option value="Ethiopia" data-provinces="[]">Ethiopia</option>
                                        <option value="Falkland Islands (Malvinas)" data-provinces="[]">Falkland Islands</option>
                                        <option value="Faroe Islands" data-provinces="[]">Faroe Islands</option>
                                        <option value="Fiji" data-provinces="[]">Fiji</option>
                                        <option value="Finland" data-provinces="[]">Finland</option>
                                        <option value="France" data-provinces="[]">France</option>
                                        <option value="French Guiana" data-provinces="[]">French Guiana</option>
                                        <option value="French Polynesia" data-provinces="[]">French Polynesia</option>
                                        <option value="French Southern Territories" data-provinces="[]">French Southern Territories</option>
                                        <option value="Gabon" data-provinces="[]">Gabon</option>
                                        <option value="Gambia" data-provinces="[]">Gambia</option>
                                        <option value="Georgia" data-provinces="[]">Georgia</option>
                                        <option value="Germany" data-provinces="[]">Germany</option>
                                        <option value="Ghana" data-provinces="[]">Ghana</option>
                                        <option value="Gibraltar" data-provinces="[]">Gibraltar</option>
                                        <option value="Greece" data-provinces="[]">Greece</option>
                                        <option value="Greenland" data-provinces="[]">Greenland</option>
                                        <option value="Grenada" data-provinces="[]">Grenada</option>
                                        <option value="Guadeloupe" data-provinces="[]">Guadeloupe</option>
                                        <option value="Guatemala" data-provinces="[&quot;Alta Verapaz&quot;,&quot;Baja Verapaz&quot;,&quot;Chimaltenango&quot;,&quot;Chiquimula&quot;,&quot;El Progreso&quot;,&quot;Escuintla&quot;,&quot;Guatemala&quot;,&quot;Huehuetenango&quot;,&quot;Izabal&quot;,&quot;Jalapa&quot;,&quot;Jutiapa&quot;,&quot;Petén&quot;,&quot;Quetzaltenango&quot;,&quot;Quiché&quot;,&quot;Retalhuleu&quot;,&quot;Sacatepéquez&quot;,&quot;San Marcos&quot;,&quot;Santa Rosa&quot;,&quot;Sololá&quot;,&quot;Suchitepéquez&quot;,&quot;Totonicapán&quot;,&quot;Zacapa&quot;]">Guatemala</option>
                                        <option value="Guernsey" data-provinces="[]">Guernsey</option>
                                        <option value="Guinea" data-provinces="[]">Guinea</option>
                                        <option value="Guinea Bissau" data-provinces="[]">Guinea-Bissau</option>
                                        <option value="Guyana" data-provinces="[]">Guyana</option>
                                        <option value="Haiti" data-provinces="[]">Haiti</option>
                                        <option value="Heard Island And Mcdonald Islands" data-provinces="[]">Heard &amp; McDonald Islands</option>
                                        <option value="Honduras" data-provinces="[]">Honduras</option>
                                        <option value="Hong Kong" data-provinces="[]">Hong Kong SAR China</option>
                                        <option value="Hungary" data-provinces="[]">Hungary</option>
                                        <option value="Iceland" data-provinces="[]">Iceland</option>
                                        <option value="India" data-provinces="[&quot;Andaman and Nicobar&quot;,&quot;Andhra Pradesh&quot;,&quot;Arunachal Pradesh&quot;,&quot;Assam&quot;,&quot;Bihar&quot;,&quot;Chandigarh&quot;,&quot;Chattisgarh&quot;,&quot;Dadra and Nagar Haveli&quot;,&quot;Daman and Diu&quot;,&quot;Delhi&quot;,&quot;Goa&quot;,&quot;Gujarat&quot;,&quot;Haryana&quot;,&quot;Himachal Pradesh&quot;,&quot;Jammu and Kashmir&quot;,&quot;Jharkhand&quot;,&quot;Karnataka&quot;,&quot;Kerala&quot;,&quot;Lakshadweep&quot;,&quot;Madhya Pradesh&quot;,&quot;Maharashtra&quot;,&quot;Manipur&quot;,&quot;Meghalaya&quot;,&quot;Mizoram&quot;,&quot;Nagaland&quot;,&quot;Orissa&quot;,&quot;Puducherry&quot;,&quot;Punjab&quot;,&quot;Rajasthan&quot;,&quot;Sikkim&quot;,&quot;Tamil Nadu&quot;,&quot;Telangana&quot;,&quot;Tripura&quot;,&quot;Uttar Pradesh&quot;,&quot;Uttarakhand&quot;,&quot;West Bengal&quot;]">India</option>
                                        <option value="Indonesia" data-provinces="[&quot;Aceh&quot;,&quot;Bali&quot;,&quot;Bangka Belitung&quot;,&quot;Banten&quot;,&quot;Bengkulu&quot;,&quot;Gorontalo&quot;,&quot;Jakarta&quot;,&quot;Jambi&quot;,&quot;Jawa Barat&quot;,&quot;Jawa Tengah&quot;,&quot;Jawa Timur&quot;,&quot;Kalimantan Barat&quot;,&quot;Kalimantan Selatan&quot;,&quot;Kalimantan Tengah&quot;,&quot;Kalimantan Timur&quot;,&quot;Kalimantan Utara&quot;,&quot;Kepulauan Riau&quot;,&quot;Lampung&quot;,&quot;Maluku&quot;,&quot;Maluku Utara&quot;,&quot;Nusa Tenggara Barat&quot;,&quot;Nusa Tenggara Timur&quot;,&quot;Papua&quot;,&quot;Papua Barat&quot;,&quot;Riau&quot;,&quot;Sulawesi Barat&quot;,&quot;Sulawesi Selatan&quot;,&quot;Sulawesi Tengah&quot;,&quot;Sulawesi Tenggara&quot;,&quot;Sulawesi Utara&quot;,&quot;Sumatra Barat&quot;,&quot;Sumatra Selatan&quot;,&quot;Sumatra Utara&quot;,&quot;Yogyakarta&quot;]">Indonesia</option>
                                        <option value="Iran, Islamic Republic Of" data-provinces="[]">Iran</option>
                                        <option value="Iraq" data-provinces="[]">Iraq</option>
                                        <option value="Ireland" data-provinces="[]">Ireland</option>
                                        <option value="Isle Of Man" data-provinces="[]">Isle of Man</option>
                                        <option value="Israel" data-provinces="[]">Israel</option>
                                        <option value="Italy" data-provinces="[&quot;Agrigento&quot;,&quot;Alessandria&quot;,&quot;Ancona&quot;,&quot;Aosta&quot;,&quot;Arezzo&quot;,&quot;Ascoli Piceno&quot;,&quot;Asti&quot;,&quot;Avellino&quot;,&quot;Bari&quot;,&quot;Barletta-Andria-Trani&quot;,&quot;Belluno&quot;,&quot;Benevento&quot;,&quot;Bergamo&quot;,&quot;Biella&quot;,&quot;Bologna&quot;,&quot;Bolzano&quot;,&quot;Brescia&quot;,&quot;Brindisi&quot;,&quot;Cagliari&quot;,&quot;Caltanissetta&quot;,&quot;Campobasso&quot;,&quot;Carbonia-Iglesias&quot;,&quot;Caserta&quot;,&quot;Catania&quot;,&quot;Catanzaro&quot;,&quot;Chieti&quot;,&quot;Como&quot;,&quot;Cosenza&quot;,&quot;Cremona&quot;,&quot;Crotone&quot;,&quot;Cuneo&quot;,&quot;Enna&quot;,&quot;Fermo&quot;,&quot;Ferrara&quot;,&quot;Firenze&quot;,&quot;Foggia&quot;,&quot;Forlì-Cesena&quot;,&quot;Frosinone&quot;,&quot;Genova&quot;,&quot;Gorizia&quot;,&quot;Grosseto&quot;,&quot;Imperia&quot;,&quot;Isernia&quot;,&quot;L'Aquila&quot;,&quot;La Spezia&quot;,&quot;Latina&quot;,&quot;Lecce&quot;,&quot;Lecco&quot;,&quot;Livorno&quot;,&quot;Lodi&quot;,&quot;Lucca&quot;,&quot;Macerata&quot;,&quot;Mantova&quot;,&quot;Massa-Carrara&quot;,&quot;Matera&quot;,&quot;Medio Campidano&quot;,&quot;Messina&quot;,&quot;Milano&quot;,&quot;Modena&quot;,&quot;Monza e Brianza&quot;,&quot;Napoli&quot;,&quot;Novara&quot;,&quot;Nuoro&quot;,&quot;Ogliastra&quot;,&quot;Olbia-Tempio&quot;,&quot;Oristano&quot;,&quot;Padova&quot;,&quot;Palermo&quot;,&quot;Parma&quot;,&quot;Pavia&quot;,&quot;Perugia&quot;,&quot;Pesaro e Urbino&quot;,&quot;Pescara&quot;,&quot;Piacenza&quot;,&quot;Pisa&quot;,&quot;Pistoia&quot;,&quot;Pordenone&quot;,&quot;Potenza&quot;,&quot;Prato&quot;,&quot;Ragusa&quot;,&quot;Ravenna&quot;,&quot;Reggio Calabria&quot;,&quot;Reggio Emilia&quot;,&quot;Rieti&quot;,&quot;Rimini&quot;,&quot;Roma&quot;,&quot;Rovigo&quot;,&quot;Salerno&quot;,&quot;Sassari&quot;,&quot;Savona&quot;,&quot;Siena&quot;,&quot;Siracusa&quot;,&quot;Sondrio&quot;,&quot;Taranto&quot;,&quot;Teramo&quot;,&quot;Terni&quot;,&quot;Torino&quot;,&quot;Trapani&quot;,&quot;Trento&quot;,&quot;Treviso&quot;,&quot;Trieste&quot;,&quot;Udine&quot;,&quot;Varese&quot;,&quot;Venezia&quot;,&quot;Verbano-Cusio-Ossola&quot;,&quot;Vercelli&quot;,&quot;Verona&quot;,&quot;Vibo Valentia&quot;,&quot;Vicenza&quot;,&quot;Viterbo&quot;]">Italy</option>
                                        <option value="Jamaica" data-provinces="[]">Jamaica</option>
                                        <option value="Japan" data-provinces="[]">Japan</option>
                                        <option value="Jersey" data-provinces="[]">Jersey</option>
                                        <option value="Jordan" data-provinces="[]">Jordan</option>
                                        <option value="Kazakhstan" data-provinces="[]">Kazakhstan</option>
                                        <option value="Kenya" data-provinces="[]">Kenya</option>
                                        <option value="Kiribati" data-provinces="[]">Kiribati</option>
                                        <option value="Kosovo" data-provinces="[]">Kosovo</option>
                                        <option value="Kuwait" data-provinces="[]">Kuwait</option>
                                        <option value="Kyrgyzstan" data-provinces="[]">Kyrgyzstan</option>
                                        <option value="Lao People's Democratic Republic" data-provinces="[]">Laos</option>
                                        <option value="Latvia" data-provinces="[]">Latvia</option>
                                        <option value="Lebanon" data-provinces="[]">Lebanon</option>
                                        <option value="Lesotho" data-provinces="[]">Lesotho</option>
                                        <option value="Liberia" data-provinces="[]">Liberia</option>
                                        <option value="Libyan Arab Jamahiriya" data-provinces="[]">Libya</option>
                                        <option value="Liechtenstein" data-provinces="[]">Liechtenstein</option>
                                        <option value="Lithuania" data-provinces="[]">Lithuania</option>
                                        <option value="Luxembourg" data-provinces="[]">Luxembourg</option>
                                        <option value="Macao" data-provinces="[]">Macau SAR China</option>
                                        <option value="Macedonia, Republic Of" data-provinces="[]">Macedonia</option>
                                        <option value="Madagascar" data-provinces="[]">Madagascar</option>
                                        <option value="Malawi" data-provinces="[]">Malawi</option>
                                        <option value="Malaysia" data-provinces="[&quot;Johor&quot;,&quot;Kedah&quot;,&quot;Kelantan&quot;,&quot;Kuala Lumpur&quot;,&quot;Labuan&quot;,&quot;Melaka&quot;,&quot;Negeri Sembilan&quot;,&quot;Pahang&quot;,&quot;Perak&quot;,&quot;Perlis&quot;,&quot;Pulau Pinang&quot;,&quot;Putrajaya&quot;,&quot;Sabah&quot;,&quot;Sarawak&quot;,&quot;Selangor&quot;,&quot;Terengganu&quot;]">Malaysia</option>
                                        <option value="Maldives" data-provinces="[]">Maldives</option>
                                        <option value="Mali" data-provinces="[]">Mali</option>
                                        <option value="Malta" data-provinces="[]">Malta</option>
                                        <option value="Martinique" data-provinces="[]">Martinique</option>
                                        <option value="Mauritania" data-provinces="[]">Mauritania</option>
                                        <option value="Mauritius" data-provinces="[]">Mauritius</option>
                                        <option value="Mayotte" data-provinces="[]">Mayotte</option>
                                        <option value="Mexico" data-provinces="[&quot;Aguascalientes&quot;,&quot;Baja California&quot;,&quot;Baja California Sur&quot;,&quot;Campeche&quot;,&quot;Chiapas&quot;,&quot;Chihuahua&quot;,&quot;Coahuila&quot;,&quot;Colima&quot;,&quot;Distrito Federal&quot;,&quot;Durango&quot;,&quot;Guanajuato&quot;,&quot;Guerrero&quot;,&quot;Hidalgo&quot;,&quot;Jalisco&quot;,&quot;Michoacán&quot;,&quot;Morelos&quot;,&quot;México&quot;,&quot;Nayarit&quot;,&quot;Nuevo León&quot;,&quot;Oaxaca&quot;,&quot;Puebla&quot;,&quot;Querétaro&quot;,&quot;Quintana Roo&quot;,&quot;San Luis Potosí&quot;,&quot;Sinaloa&quot;,&quot;Sonora&quot;,&quot;Tabasco&quot;,&quot;Tamaulipas&quot;,&quot;Tlaxcala&quot;,&quot;Veracruz&quot;,&quot;Yucatán&quot;,&quot;Zacatecas&quot;]">Mexico</option>
                                        <option value="Moldova, Republic of" data-provinces="[]">Moldova</option>
                                        <option value="Monaco" data-provinces="[]">Monaco</option>
                                        <option value="Mongolia" data-provinces="[]">Mongolia</option>
                                        <option value="Montenegro" data-provinces="[]">Montenegro</option>
                                        <option value="Montserrat" data-provinces="[]">Montserrat</option>
                                        <option value="Morocco" data-provinces="[]">Morocco</option>
                                        <option value="Mozambique" data-provinces="[]">Mozambique</option>
                                        <option value="Burma" data-provinces="[]">Myanmar (Burma)</option>
                                        <option value="Namibia" data-provinces="[]">Namibia</option>
                                        <option value="Nauru" data-provinces="[]">Nauru</option>
                                        <option value="Nepal" data-provinces="[]">Nepal</option>
                                        <option value="Netherlands" data-provinces="[]">Netherlands</option>
                                        <option value="Netherlands Antilles" data-provinces="[]">Netherlands Antilles</option>
                                        <option value="New Caledonia" data-provinces="[]">New Caledonia</option>
                                        <option value="New Zealand" data-provinces="[&quot;Auckland&quot;,&quot;Bay of Plenty&quot;,&quot;Canterbury&quot;,&quot;Gisborne&quot;,&quot;Hawke's Bay&quot;,&quot;Manawatu-Wanganui&quot;,&quot;Marlborough&quot;,&quot;Nelson&quot;,&quot;Northland&quot;,&quot;Otago&quot;,&quot;Southland&quot;,&quot;Taranaki&quot;,&quot;Tasman&quot;,&quot;Waikato&quot;,&quot;Wellington&quot;,&quot;West Coast&quot;]">New Zealand</option>
                                        <option value="Nicaragua" data-provinces="[]">Nicaragua</option>
                                        <option value="Niger" data-provinces="[]">Niger</option>
                                        <option value="Nigeria" data-provinces="[]">Nigeria</option>
                                        <option value="Niue" data-provinces="[]">Niue</option>
                                        <option value="Norfolk Island" data-provinces="[]">Norfolk Island</option>
                                        <option value="Korea, Democratic People's Republic Of" data-provinces="[]">North Korea</option>
                                        <option value="Norway" data-provinces="[]">Norway</option>
                                        <option value="Oman" data-provinces="[]">Oman</option>
                                        <option value="Pakistan" data-provinces="[]">Pakistan</option>
                                        <option value="Palestinian Territory, Occupied" data-provinces="[]">Palestinian Territories</option>
                                        <option value="Panama" data-provinces="[]">Panama</option>
                                        <option value="Papua New Guinea" data-provinces="[]">Papua New Guinea</option>
                                        <option value="Paraguay" data-provinces="[]">Paraguay</option>
                                        <option value="Peru" data-provinces="[]">Peru</option>
                                        <option value="Philippines" data-provinces="[]">Philippines</option>
                                        <option value="Pitcairn" data-provinces="[]">Pitcairn Islands</option>
                                        <option value="Poland" data-provinces="[]">Poland</option>
                                        <option value="Portugal" data-provinces="[&quot;Aveiro&quot;,&quot;Açores&quot;,&quot;Beja&quot;,&quot;Braga&quot;,&quot;Bragança&quot;,&quot;Castelo Branco&quot;,&quot;Coimbra&quot;,&quot;Faro&quot;,&quot;Guarda&quot;,&quot;Leiria&quot;,&quot;Lisboa&quot;,&quot;Madeira&quot;,&quot;Portalegre&quot;,&quot;Porto&quot;,&quot;Santarém&quot;,&quot;Setúbal&quot;,&quot;Viana do Castelo&quot;,&quot;Vila Real&quot;,&quot;Viseu&quot;,&quot;Évora&quot;]">Portugal</option>
                                        <option value="Qatar" data-provinces="[]">Qatar</option>
                                        <option value="Reunion" data-provinces="[]">Réunion</option>
                                        <option value="Romania" data-provinces="[]">Romania</option>
                                        <option value="Russia" data-provinces="[&quot;Altai Krai&quot;,&quot;Altai Republic&quot;,&quot;Amur Oblast&quot;,&quot;Arkhangelsk Oblast&quot;,&quot;Astrakhan Oblast&quot;,&quot;Belgorod Oblast&quot;,&quot;Bryansk Oblast&quot;,&quot;Chechen Republic&quot;,&quot;Chelyabinsk Oblast&quot;,&quot;Chukotka Autonomous Okrug&quot;,&quot;Chuvash Republic&quot;,&quot;Irkutsk Oblast&quot;,&quot;Ivanovo Oblast&quot;,&quot;Jewish Autonomous Oblast&quot;,&quot;Kabardino-Balkarian Republic&quot;,&quot;Kaliningrad Oblast&quot;,&quot;Kaluga Oblast&quot;,&quot;Kamchatka Krai&quot;,&quot;Karachay–Cherkess Republic&quot;,&quot;Kemerovo Oblast&quot;,&quot;Khabarovsk Krai&quot;,&quot;Khanty-Mansi Autonomous Okrug&quot;,&quot;Kirov Oblast&quot;,&quot;Komi Republic&quot;,&quot;Kostroma Oblast&quot;,&quot;Krasnodar Krai&quot;,&quot;Krasnoyarsk Krai&quot;,&quot;Kurgan Oblast&quot;,&quot;Kursk Oblast&quot;,&quot;Leningrad Oblast&quot;,&quot;Lipetsk Oblast&quot;,&quot;Magadan Oblast&quot;,&quot;Mari El Republic&quot;,&quot;Moscow&quot;,&quot;Moscow Oblast&quot;,&quot;Murmansk Oblast&quot;,&quot;Nizhny Novgorod Oblast&quot;,&quot;Novgorod Oblast&quot;,&quot;Novosibirsk Oblast&quot;,&quot;Omsk Oblast&quot;,&quot;Orenburg Oblast&quot;,&quot;Oryol Oblast&quot;,&quot;Penza Oblast&quot;,&quot;Perm Krai&quot;,&quot;Primorsky Krai&quot;,&quot;Pskov Oblast&quot;,&quot;Republic of Adygeya&quot;,&quot;Republic of Bashkortostan&quot;,&quot;Republic of Buryatia&quot;,&quot;Republic of Dagestan&quot;,&quot;Republic of Ingushetia&quot;,&quot;Republic of Kalmykia&quot;,&quot;Republic of Karelia&quot;,&quot;Republic of Khakassia&quot;,&quot;Republic of Mordovia&quot;,&quot;Republic of North Ossetia–Alania&quot;,&quot;Republic of Tatarstan&quot;,&quot;Rostov Oblast&quot;,&quot;Ryazan Oblast&quot;,&quot;Saint Petersburg&quot;,&quot;Sakha Republic (Yakutia)&quot;,&quot;Sakhalin Oblast&quot;,&quot;Samara Oblast&quot;,&quot;Saratov Oblast&quot;,&quot;Smolensk Oblast&quot;,&quot;Stavropol Krai&quot;,&quot;Sverdlovsk Oblast&quot;,&quot;Tambov Oblast&quot;,&quot;Tomsk Oblast&quot;,&quot;Tula Oblast&quot;,&quot;Tver Oblast&quot;,&quot;Tyumen Oblast&quot;,&quot;Tyva Republic&quot;,&quot;Udmurtia&quot;,&quot;Ulyanovsk Oblast&quot;,&quot;Vladimir Oblast&quot;,&quot;Volgograd Oblast&quot;,&quot;Vologda Oblast&quot;,&quot;Voronezh Oblast&quot;,&quot;Yamalo-Nenets Autonomous Okrug&quot;,&quot;Yaroslavl Oblast&quot;]">Russia</option>
                                        <option value="Rwanda" data-provinces="[]">Rwanda</option>
                                        <option value="Samoa" data-provinces="[]">Samoa</option>
                                        <option value="San Marino" data-provinces="[]">San Marino</option>
                                        <option value="Sao Tome And Principe" data-provinces="[]">São Tomé &amp; Príncipe</option>
                                        <option value="Saudi Arabia" data-provinces="[]">Saudi Arabia</option>
                                        <option value="Senegal" data-provinces="[]">Senegal</option>
                                        <option value="Serbia" data-provinces="[]">Serbia</option>
                                        <option value="Seychelles" data-provinces="[]">Seychelles</option>
                                        <option value="Sierra Leone" data-provinces="[]">Sierra Leone</option>
                                        <option value="Singapore" data-provinces="[]">Singapore</option>
                                        <option value="Slovakia" data-provinces="[]">Slovakia</option>
                                        <option value="Slovenia" data-provinces="[]">Slovenia</option>
                                        <option value="Solomon Islands" data-provinces="[]">Solomon Islands</option>
                                        <option value="Somalia" data-provinces="[]">Somalia</option>
                                        <option value="South Africa" data-provinces="[&quot;Eastern Cape&quot;,&quot;Free State&quot;,&quot;Gauteng&quot;,&quot;KwaZulu-Natal&quot;,&quot;Limpopo&quot;,&quot;Mpumalanga&quot;,&quot;North West&quot;,&quot;Northern Cape&quot;,&quot;Western Cape&quot;]">South Africa</option>
                                        <option value="South Georgia And The South Sandwich Islands" data-provinces="[]">South Georgia &amp; South Sandwich Islands</option>
                                        <option value="South Korea" data-provinces="[]">South Korea</option>
                                        <option value="Spain" data-provinces="[&quot;A Coruña&quot;,&quot;Albacete&quot;,&quot;Alicante&quot;,&quot;Almería&quot;,&quot;Asturias&quot;,&quot;Badajoz&quot;,&quot;Balears&quot;,&quot;Barcelona&quot;,&quot;Burgos&quot;,&quot;Cantabria&quot;,&quot;Castellón&quot;,&quot;Ceuta&quot;,&quot;Ciudad Real&quot;,&quot;Cuenca&quot;,&quot;Cáceres&quot;,&quot;Cádiz&quot;,&quot;Córdoba&quot;,&quot;Girona&quot;,&quot;Granada&quot;,&quot;Guadalajara&quot;,&quot;Guipúzcoa&quot;,&quot;Huelva&quot;,&quot;Huesca&quot;,&quot;Jaén&quot;,&quot;La Rioja&quot;,&quot;Las Palmas&quot;,&quot;León&quot;,&quot;Lleida&quot;,&quot;Lugo&quot;,&quot;Madrid&quot;,&quot;Melilla&quot;,&quot;Murcia&quot;,&quot;Málaga&quot;,&quot;Navarra&quot;,&quot;Ourense&quot;,&quot;Palencia&quot;,&quot;Pontevedra&quot;,&quot;Salamanca&quot;,&quot;Santa Cruz de Tenerife&quot;,&quot;Segovia&quot;,&quot;Sevilla&quot;,&quot;Soria&quot;,&quot;Tarragona&quot;,&quot;Teruel&quot;,&quot;Toledo&quot;,&quot;Valencia&quot;,&quot;Valladolid&quot;,&quot;Vizcaya&quot;,&quot;Zamora&quot;,&quot;Zaragoza&quot;,&quot;Álava&quot;,&quot;Ávila&quot;]">Spain</option>
                                        <option value="Sri Lanka" data-provinces="[]">Sri Lanka</option>
                                        <option value="Saint Barthélemy" data-provinces="[]">St. Barthélemy</option>
                                        <option value="Saint Helena" data-provinces="[]">St. Helena</option>
                                        <option value="Saint Kitts And Nevis" data-provinces="[]">St. Kitts &amp; Nevis</option>
                                        <option value="Saint Lucia" data-provinces="[]">St. Lucia</option>
                                        <option value="Saint Martin" data-provinces="[]">St. Martin</option>
                                        <option value="Saint Pierre And Miquelon" data-provinces="[]">St. Pierre &amp; Miquelon</option>
                                        <option value="St. Vincent" data-provinces="[]">St. Vincent &amp; Grenadines</option>
                                        <option value="Sudan" data-provinces="[]">Sudan</option>
                                        <option value="Suriname" data-provinces="[]">Suriname</option>
                                        <option value="Svalbard And Jan Mayen" data-provinces="[]">Svalbard &amp; Jan Mayen</option>
                                        <option value="Swaziland" data-provinces="[]">Swaziland</option>
                                        <option value="Sweden" data-provinces="[]">Sweden</option>
                                        <option value="Switzerland" data-provinces="[]">Switzerland</option>
                                        <option value="Syria" data-provinces="[]">Syria</option>
                                        <option value="Taiwan" data-provinces="[]">Taiwan</option>
                                        <option value="Tajikistan" data-provinces="[]">Tajikistan</option>
                                        <option value="Tanzania, United Republic Of" data-provinces="[]">Tanzania</option>
                                        <option value="Thailand" data-provinces="[]">Thailand</option>
                                        <option value="Timor Leste" data-provinces="[]">Timor-Leste</option>
                                        <option value="Togo" data-provinces="[]">Togo</option>
                                        <option value="Tokelau" data-provinces="[]">Tokelau</option>
                                        <option value="Tonga" data-provinces="[]">Tonga</option>
                                        <option value="Trinidad and Tobago" data-provinces="[]">Trinidad &amp; Tobago</option>
                                        <option value="Tunisia" data-provinces="[]">Tunisia</option>
                                        <option value="Turkey" data-provinces="[]">Turkey</option>
                                        <option value="Turkmenistan" data-provinces="[]">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands" data-provinces="[]">Turks &amp; Caicos Islands</option>
                                        <option value="Tuvalu" data-provinces="[]">Tuvalu</option>
                                        <option value="United States Minor Outlying Islands" data-provinces="[]">U.S. Outlying Islands</option>
                                        <option value="Uganda" data-provinces="[]">Uganda</option>
                                        <option value="Ukraine" data-provinces="[]">Ukraine</option>
                                        <option value="United Arab Emirates" data-provinces="[&quot;Abu Dhabi&quot;,&quot;Ajman&quot;,&quot;Dubai&quot;,&quot;Fujairah&quot;,&quot;Ras al-Khaimah&quot;,&quot;Sharjah&quot;,&quot;Umm al-Quwain&quot;]">United Arab Emirates</option>
                                        <option value="United Kingdom" data-provinces="[]">United Kingdom</option>
                                        <option value="United States" data-provinces="[&quot;Alabama&quot;,&quot;Alaska&quot;,&quot;American Samoa&quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;Armed Forces Americas&quot;,&quot;Armed Forces Europe&quot;,&quot;Armed Forces Pacific&quot;,&quot;California&quot;,&quot;Colorado&quot;,&quot;Connecticut&quot;,&quot;Delaware&quot;,&quot;Federated States of Micronesia&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Guam&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Marshall Islands&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Carolina&quot;,&quot;North Dakota&quot;,&quot;Northern Mariana Islands&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Palau&quot;,&quot;Pennsylvania&quot;,&quot;Puerto Rico&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virgin Islands&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;Washington DC&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;]">United States</option>
                                        <option value="Uruguay" data-provinces="[]">Uruguay</option>
                                        <option value="Uzbekistan" data-provinces="[]">Uzbekistan</option>
                                        <option value="Vanuatu" data-provinces="[]">Vanuatu</option>
                                        <option value="Holy See (Vatican City State)" data-provinces="[]">Vatican City</option>
                                        <option value="Venezuela" data-provinces="[]">Venezuela</option>
                                        <option value="Vietnam" data-provinces="[]">Vietnam</option>
                                        <option value="Wallis And Futuna" data-provinces="[]">Wallis &amp; Futuna</option>
                                        <option value="Western Sahara" data-provinces="[]">Western Sahara</option>
                                        <option value="Yemen" data-provinces="[]">Yemen</option>
                                        <option value="Zambia" data-provinces="[]">Zambia</option>
                                        <option value="Zimbabwe" data-provinces="[]">Zimbabwe</option></select>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <select id="address_province" class="form-control margin-bottom-20" name="address[province]">
                                        <option value="Zimbabwe" data-provinces="[]">Khulna</option></select>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <input type="text" class="form-control margin-bottom-20" id="address_zip" name="address[zip]" placeholder="Potal / Zip Code">
                                </div>
                            </div>
                        </figure>--}}
                    </div>
                    <aside class="col-lg-12 col-md-12 col-sm-12 margin-bottom-75">
                        <figure>
                            <div class="cart-shipping-calculate">
                                <div class="col-lg-4 col-md-4 col-sm-4"></div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <button type="button" class="btn btn-default color-scheme-1 btn-lg btn-block text-uppercase">Calculate shipping</button>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                </div>
                            </div>
                        </figure>
                    </aside>
                </div>
            </div>
        </section>

@stop