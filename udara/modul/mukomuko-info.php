<style>
    * {
        box-sizing: border-box
    }

    /* Style the tab */
    .tab {
        float: left;
        border: 0px solid #ccc;
        background-color: #fff;
        width: 20%;
        height: 100%;
        font-size: 12px;
    }
    .panah:after {
        z-index:2;
        text-align: right;
        float:right;
        margin-top: 8px;
        border-top: 6px solid transparent;
        border-bottom: 6px solid transparent;
        border-left: 6px solid grey;
        content: '';
    }
    /* Style the buttons inside the tab */
    .tab button {
        display: block;
        background-color: inherit;
        color: black;
        padding: 5px;
        width: 100%;
        border: none;
        outline: none;
        text-align: left;
        cursor: pointer;
        transition: 0.3s;
        font-size: 12px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
        border-left: 5px solid #005590;
    }

    /* Create an active/current "tab button" class */
    .tab button.active {
        background-color: #ccc;
        border-left: 5px solid #005590;
    }

    /* Style the tab content */
    .tabcontent {
        float: left;
        padding: 0px 20px;
        border: 0px solid #ccc;
        width: 80%;
        border-left: none;
        height: 100%;
    }
    /* Infowindows Style */
    .infoheader {
        border-radius: 25px; 
        border: 5px solid #305c8d; 
        padding-left:20px; 
        padding-top:7px;
        width:400px;
        height:100px;
    }
    .infocontent {
        color:#fff;
        background-color:#4f81bc; 
        margin-top:-60px;
        border-radius: 25px; 
        border: 5px solid #305c8d; 
        padding:10px;
        margin-bottom: 30px;
    }
    .item1 {
        grid-row: 1 / 4;
    }
    .item2 {
        grid-row: 5 / 8;
    }
    .item3 {
        grid-row: 1 / 3;
    }
    .item4 {
        grid-row: 3 / 4;
    }
    .grid-container {
        display: grid;
        grid-template-columns: auto auto;
    }
</style>

<div class="tab">
  <button class="panah tablinks" onclick="openTab(event, 'infoumum')" id="defaultOpen">Info Umum</button>
  <button class="panah tablinks" onclick="openTab(event, 'infolandasan')">Info Landasan Pacu</button>
</div>

<!-- page-content -->
<main class="page-content">
    <div class="container-fluid">        
        <div id="infoumum" class="tabcontent">
            <h3>Info Umum Bandara Mukomuko</h3>
            <br>
            <div class="row grid-container">
                <div class="col">
                    <!-- I -->
                    <div class="infoheader">
                        AERODROME DATA
                    </div>
                    <div class="infocontent">
                        <table>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">1.</td>
                                    <td class="align-top">Nama Bandara</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Mukomuko</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">2.</td>
                                    <td class="align-top">Milik/Pengelola</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">DITJEN HUBUD</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">3.</td>
                                    <td class="align-top">Provinsi</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Bengkulu</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">4.</td>
                                    <td class="align-top">ARP Coordinate & Site and AD</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">02"33'S; 101"06'E <br>1Km dari Pusat kota Mukomuko</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">5.</td>
                                    <td class="align-top">Evaluasi</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">5 Meter (MSL)</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">6.</td>
                                    <td class="align-top">Aedrodemereferensi Temperature</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">35'C</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">7.</td>
                                    <td class="align-top">Air Traffic Service</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Unattended</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">8.</td>
                                    <td class="align-top">Klasifikasi/Jam Operasi</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">00:30 s/d 09:00</td>
                                </tr>
                        </table>
                    </div>
                </div>
                <div class="col">
                    <!-- II -->
                    <div class="infoheader">
                        RUNWAY
                    </div>
                    <div class="infocontent">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">1.</td>
                                    <td class="align-top">Designations</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">14-32</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">2.</td>
                                    <td class="align-top">Dimension</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">1.400m x 30m</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">3.</td>
                                    <td class="align-top">Turning Area</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Ada</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">4.</td>
                                    <td class="align-top">Longitudinal Slope</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">1%</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">5.</td>
                                    <td class="align-top">Transverse Slope</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">1,5%</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">6.</td>
                                    <td class="align-top">Runaway Surface</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Asphalt</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">7.</td>
                                    <td class="align-top">Strength</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">PCN 31 F/C/Y/T</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">8.</td>
                                    <td class="align-top">Declare Distance</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top"></td>
                                </tr>
                            </tbody>                   
                        </table>
                        <table class="table-bordered" style="width:100%">
                            <tr>
                                <th style="text-align: center">RWY Designator</th>
                                <th style="text-align: center">TORA</th>
                                <th style="text-align: center">TODA</th>
                                <th style="text-align: center">ASDA</th>
                                <th style="text-align: center">LDA</th>
                            </tr>
                            <tr>
                                <td style="text-align: center">14</td>
                                <td style="text-align: center">1400m</td>
                                <td style="text-align: center">1550m</td>
                                <td style="text-align: center">1400m</td>
                                <td style="text-align: center">1400m</td>
                            </tr>
                            <tr>
                                <td style="text-align: center">32</td>
                                <td style="text-align: center">1400m</td>
                                <td style="text-align: center">1550m</td>
                                <td style="text-align: center">1400m</td>
                                <td style="text-align: center">1400m</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col">
                    <!-- III -->
                    <div class="infoheader">
                        RUNAWAY MARKING
                    </div>
                    <div class="infocontent">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">1.</td>
                                    <td class="align-top">Runaway Designation Marking</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Ada, Runway 14 & 32</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">2.</td>
                                    <td class="align-top">Threshold Marking</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Ada</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">3.</td>
                                    <td class="align-top">Runway Centerline Marking</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Ada</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">4.</td>
                                    <td class="align-top">Runway Side Strip Marking</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Ada</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">5.</td>
                                    <td class="align-top">Runway End Marking</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Ada</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">6.</td>
                                    <td class="align-top">Aiming Point Marking</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Ada</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">7.</td>
                                    <td class="align-top">Nose Wheel Guidance Marking</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Ada</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">8.</td>
                                    <td class="align-top">Touch Down Zone Marking</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Tidak Ada</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top"></td>
                                    <td class="align-top">Remarks</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Nihil</td>
                                </tr>
                            </tbody>                   
                        </table>
                    </div>
                </div>
                <div class="col">
                    <!-- IV -->
                    <div class="infoheader">
                        RESA
                    </div>
                    <div class="infocontent">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">1.</td>
                                    <td class="align-top">Remarks</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Lahan RESA tersedia</td>
                                </tr>
                            </tbody>                   
                        </table>
                    </div>
                </div>
                <div class="col">
                    <!-- V -->
                    <div class="infoheader">
                        TAXIWAY
                    </div>
                    <div class="infocontent">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">1.</td>
                                    <td class="align-top">Dimension</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">66,5m x 23m</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">2.</td>
                                    <td class="align-top">Longitudinal Slope</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">-%</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">3.</td>
                                    <td class="align-top">Tranverse Slope</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">-%</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">4.</td>
                                    <td class="align-top">Surface</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">ASPHALT</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">5.</td>
                                    <td class="align-top">Strength</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">PCN 24 F/C/Y/T</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top"></td>
                                    <td class="align-top">Remarks</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Nihil</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col">
                    <!-- VI -->
                    <div class="infoheader">
                        TAXIWAY MARKING
                    </div>
                    <div class="infocontent">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">1.</td>
                                    <td class="align-top">Taxiway centerline marking</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Ada</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">2.</td>
                                    <td class="align-top">Runway holding position marking</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Ada</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">3.</td>
                                    <td class="align-top">Taxiway edge marking</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Ada</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">4.</td>
                                    <td class="align-top">Taxiway shoulder marking</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Tidak Ada</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">5.</td>
                                    <td class="align-top">Intermediate holding position marking</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Tidak Ada</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">6.</td>
                                    <td class="align-top">Exit guide line marking</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Ada</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">7.</td>
                                    <td class="align-top">Road hodling position marking</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Tidak Ada</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top"></td>
                                    <td class="align-top">Remarks</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Ada</td>
                                </tr>
                            </tbody>                   
                        </table>
                    </div>
                </div>
                <div class="col">
                    <!-- VIII -->
                    <div class="infoheader">
                        STRIP
                    </div>
                    <div class="infocontent">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">1.</td>
                                    <td class="align-top">Dimension</td>
                                    <td class="align-top"></td>
                                    <td class="align-top"></td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top"></td>
                                    <td class="align-top">- Length</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">1.520m</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top"></td>
                                    <td class="align-top">- Width</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">150m</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">2.</td>
                                    <td class="align-top">The First 3m outward from the runway</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Grass</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top"></td>
                                    <td class="align-top">Remarks</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Permukaan Strip Lebih Tinggi dari Permukaan Runway</td>
                                </tr>
                            </tbody>                   
                        </table>
                    </div>
                </div>
                <div class="col">
                    <!-- VII -->
                    <div class="infoheader">
                        APRON
                    </div>
                    <div class="infocontent">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">1.</td>
                                    <td class="align-top">Dimension</td>
                                    <td class="align-top"></td>
                                    <td class="align-top"></td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top"></td>
                                    <td class="align-top">- Length</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">60m</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top"></td>
                                    <td class="align-top">- Width</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">40m</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">2.</td>
                                    <td class="align-top">Distance between edge of Runway and edge of apron</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">70m</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">3.</td>
                                    <td class="align-top">Slope on apron</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">-</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">4.</td>
                                    <td class="align-top">Surface</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Asphalt</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">5.</td>
                                    <td class="align-top">Strengt</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">PCN 18 F/C/Y/T</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top"></td>
                                    <td class="align-top">Remarks</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Nihil</td>
                                </tr>
                            </tbody>                   
                        </table>
                    </div>
                </div>
                <div class="col">
                    <!-- IX -->
                    <div class="infoheader">
                        APRON MARKING
                    </div>
                    <div class="infocontent">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">1.</td>
                                    <td class="align-top">Apron edge marking</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Ada</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">2.</td>
                                    <td class="align-top">Apron guidance marking</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Ada</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">3.</td>
                                    <td class="align-top">Parking stand position</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Tidak Ada</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top"></td>
                                    <td class="align-top">Remarks</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Nihil</td>
                                </tr>
                            </tbody>                   
                        </table>
                    </div>
                </div>
                <div class="col">
                    <!-- X -->
                    <div class="infoheader">
                        Fasilitas Meteorologi Penerbangan
                    </div>
                    <div class="infocontent">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">1.</td>
                                    <td class="align-top">Anemometer</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Tidak Ada</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">2.</td>
                                    <td class="align-top">Barometer</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Tidak Ada</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">3.</td>
                                    <td class="align-top">Wet Ball & Dry Ball Thermometer</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Tidak Ada</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">4.</td>
                                    <td class="align-top">Thermometer Max/Min</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Tidak Ada</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">5.</td>
                                    <td class="align-top">Wind sock</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Ada, 1 Unit</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">6.</td>
                                    <td class="align-top">Fisicometer</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Tidak Ada</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top"></td>
                                    <td class="align-top">Remarks</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">Peralatan Meteorologi Portable dari Bandara Fatmawati Soekarno</td>
                                </tr>
                            </tbody>                   
                        </table>
                    </div>
                </div>
            </div>
            
            <table class="table table-sm">
                <!--
                <thead class="thead-dark">
                    <tr>
                        <th class="tg-s268">I.</th>
                        <th class="tg-s268" colspan="4">AERODROME DATA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">1.</td>
                        <td class="align-top">Nama Bandara</td>
                        <td class="align-top">:</td>
                        <td class="align-top">Fatmawati Soekarno</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">2.</td>
                        <td class="align-top">Milik/Pengelola</td>
                        <td class="align-top">:</td>
                        <td class="align-top">Direktorat Jendral Perhubungan Udara Kantor UPBU Fatmawati Soekarno</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">3.</td>
                        <td class="align-top">Provinsi</td>
                        <td class="align-top">:</td>
                        <td class="align-top">Bengkulu</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">4.</td>
                        <td class="align-top">ARP Coordinate & Site and AD</td>
                        <td class="align-top">:</td>
                        <td class="align-top">03051'40"S 14 KM Jarak dari Kota</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">5.</td>
                        <td class="align-top">Evaluasi</td>
                        <td class="align-top">:</td>
                        <td class="align-top">50 Feet</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">6.</td>
                        <td class="align-top">Aedrodemereferensi Temperature</td>
                        <td class="align-top">:</td>
                        <td class="align-top">-</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">7.</td>
                        <td class="align-top">Air Traffic Service</td>
                        <td class="align-top">:</td>
                        <td class="align-top">Unattended</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">8.</td>
                        <td class="align-top">Klasifikasi/Jam Operasi</td>
                        <td class="align-top">:</td>
                        <td class="align-top">06:00 - 21:00 WIB (23:00 - 14:00 UTC)</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">9.</td>
                        <td class="align-top">Pelayanan ATC</td>
                        <td class="align-top">:</td>
                        <td class="align-top">ADC Combine, APP Non Radar</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">10.</td>
                        <td class="align-top">Kemampuan OPS</td>
                        <td class="align-top">:</td>
                        <td class="align-top">Boeing 737-900 ER, Airbus 320</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">11.</td>
                        <td class="align-top">Status Bandara</td>
                        <td class="align-top">:</td>
                        <td class="align-top">Badan Layanan Umum SK Mentri<br>Keuangan No.62/KMK.05/2017<br>Tanggal<br>3 Februari 2016</td>
                    </tr>
                </tbody>
                
                <thead class="thead-dark">
                    <tr>
                        <th class="tg-s268">II.</th>
                        <th class="tg-s268" colspan="4">RUNWAY</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">1.</td>
                        <td class="align-top">Designations</td>
                        <td class="align-top">:</td>
                        <td class="align-top">13 dan 31</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">2.</td>
                        <td class="align-top">Dimension</td>
                        <td class="align-top">:</td>
                        <td class="align-top">2.250 x 45</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">3.</td>
                        <td class="align-top">Strengths</td>
                        <td class="align-top">:</td>
                        <td class="align-top">PCN 51 F/C/X/T</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">4.</td>
                        <td class="align-top">Surface</td>
                        <td class="align-top">:</td>
                        <td class="align-top">ASPHALT Flexible</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">5.</td>
                        <td class="align-top">Clearaway 13</td>
                        <td class="align-top">:</td>
                        <td class="align-top">90 x 90m</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">6.</td>
                        <td class="align-top">Clearaway 31</td>
                        <td class="align-top">:</td>
                        <td class="align-top">170 x 90m</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">7.</td>
                        <td class="align-top">Runway Strip</td>
                        <td class="align-top">:</td>
                        <td class="align-top">2370 x 150m</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">8.</td>
                        <td class="align-top">Resa</td>
                        <td class="align-top">:</td>
                        <td class="align-top">110 x 90m</td>
                    </tr>
                </tbody>
                
                <thead class="thead-dark">
                    <tr>
                        <th class="tg-s268">III.</th>
                        <th class="tg-s268" colspan="4">TAXIWAY A</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">1.</td>
                        <td class="align-top">Dimension</td>
                        <td class="align-top">:</td>
                        <td class="align-top">133 x 23m</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">2.</td>
                        <td class="align-top">Strenghts</td>
                        <td class="align-top">:</td>
                        <td class="align-top">46 F/C/X/T</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">3.</td>
                        <td class="align-top">Surface</td>
                        <td class="align-top">:</td>
                        <td class="align-top">ASPHALT Flexible</td>
                    </tr>
                </tbody>
                
                <thead class="thead-dark">
                    <tr>
                        <th class="tg-s268">IV.</th>
                        <th class="tg-s268" colspan="4">TAXIWAY B</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">1.</td>
                        <td class="align-top">Dimension</td>
                        <td class="align-top">:</td>
                        <td class="align-top">130 x 26m</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">2.</td>
                        <td class="align-top">Strenghts</td>
                        <td class="align-top">:</td>
                        <td class="align-top">51 F/C/X/T</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">3.</td>
                        <td class="align-top">Surface</td>
                        <td class="align-top">:</td>
                        <td class="align-top">ASPHALT Flexible</td>
                    </tr>
                </tbody>
                
                <thead class="thead-dark">
                    <tr>
                        <th class="tg-s268">V.</th>
                        <th class="tg-s268" colspan="4">APRON</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">1.</td>
                        <td class="align-top">Dimension</td>
                        <td class="align-top">:</td>
                        <td class="align-top">375 x 80m</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">2.</td>
                        <td class="align-top">Strenghts</td>
                        <td class="align-top">:</td>
                        <td class="align-top">51 F/C/X/T</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">3.</td>
                        <td class="align-top">Surface</td>
                        <td class="align-top">:</td>
                        <td class="align-top">ASPHALT Flexible</td>
                    </tr>
                </tbody>
                
                <thead class="thead-dark">
                    <tr>
                        <th class="tg-s268">VI.</th>
                        <th class="tg-s268" colspan="4">HELI PAD</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">1.</td>
                        <td class="align-top">Dimension</td>
                        <td class="align-top">:</td>
                        <td class="align-top">24 x 24</td>
                    </tr>
                </tbody>
                
                <thead class="thead-dark">
                    <tr>
                        <th class="tg-s268">VII.</th>
                        <th class="tg-s268" colspan="4">MASKAPAI YANG BEROPERASI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">1.</td>
                        <td class="align-top">Garuda Indonesia</td>
                        <td class="align-top">:</td>
                        <td class="align-top">3x Sehari</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">2.</td>
                        <td class="align-top">Lion Air</td>
                        <td class="align-top">:</td>
                        <td class="align-top">4x Sehari</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">3.</td>
                        <td class="align-top">Citilink</td>
                        <td class="align-top">:</td>
                        <td class="align-top">1x Sehari</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">4.</td>
                        <td class="align-top">Sriwijaya Air</td>
                        <td class="align-top">:</td>
                        <td class="align-top">1x Sehari</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">5.</td>
                        <td class="align-top">Batik Air</td>
                        <td class="align-top">:</td>
                        <td class="align-top">1x Sehari</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">6.</td>
                        <td class="align-top">Wings Air</td>
                        <td class="align-top">:</td>
                        <td class="align-top">5x Sehari</td>
                    </tr>
                </tbody>
                
                <thead class="thead-dark">
                    <tr>
                        <th class="tg-s268">VIII.</th>
                        <th class="tg-s268" colspan="4">FASILITAS DAN KANTOR GEDUNG TERMINAL Lt. 1</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">1.</td>
                        <td class="align-top" colspan="3">Security Check Point 1</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">2.</td>
                        <td class="align-top" colspan="3">CIP Room</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">3.</td>
                        <td class="align-top" colspan="3">Check-in Room</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">4.</td>
                        <td class="align-top" colspan="3">Arrival Room</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">5.</td>
                        <td class="align-top" colspan="3">Public Arrival Lobby</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">6.</td>
                        <td class="align-top" colspan="3">Public Departure Lobby</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">7.</td>
                        <td class="align-top" colspan="3">Departure Gate</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">8.</td>
                        <td class="align-top" colspan="3">Trolly Station</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">9.</td>
                        <td class="align-top" colspan="3">Smoking Room</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">10.</td>
                        <td class="align-top" colspan="3">Arrival Gate</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">11.</td>
                        <td class="align-top" colspan="3">Stair to Second Floor</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">12.</td>
                        <td class="align-top" colspan="3">Stair to Waiting Room</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">13.</td>
                        <td class="align-top" colspan="3">Toilet Lobby Keberangkatan</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">14.</td>
                        <td class="align-top" colspan="3">Toilet Ruang Check-in</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">15.</td>
                        <td class="align-top" colspan="3">Toilet Ruang Kedatangan</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">16.</td>
                        <td class="align-top" colspan="3">SToilet Lobby Kedatangan</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">17.</td>
                        <td class="align-top" colspan="3">Kantor Informasi</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">18.</td>
                        <td class="align-top" colspan="3">Kantor Hygiene Sanitasi</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">19.</td>
                        <td class="align-top" colspan="3">Kantor AVSEC</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">20.</td>
                        <td class="align-top" colspan="3">Kantor Petugas Terminal</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">21.</td>
                        <td class="align-top" colspan="3">Ruang Lanisa</td>
                    </tr>
                    <tr>
                        <td class="align-top"></td>
                        <td class="align-top">22.</td>
                        <td class="align-top" colspan="3">Gudang</td>
                    </tr>
                </tbody>
                -->
            </table>
        </div>
        <div id="infolandasan" class="tabcontent">
            <h3>Info Landasan</h3>
            <br>
            <div class="row grid-container">
                <div class="col item3">
                    <!-- II -->
                    <div class="infoheader">
                        RUNWAY
                    </div>
                    <div class="infocontent">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">1.</td>
                                    <td class="align-top">Designations</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">13 dan 31</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">2.</td>
                                    <td class="align-top">Dimension</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">2.250 x 45</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">3.</td>
                                    <td class="align-top">Strengths</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">PCN 51 F/C/X/T</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">4.</td>
                                    <td class="align-top">Surface</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">ASPHALT Flexible</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">5.</td>
                                    <td class="align-top">Clearaway 13</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">90 x 90m</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">6.</td>
                                    <td class="align-top">Clearaway 31</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">170 x 90m</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">7.</td>
                                    <td class="align-top">Runway Strip</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">2370 x 150m</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">8.</td>
                                    <td class="align-top">Resa</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">110 x 90m</td>
                                </tr>
                            </tbody>                   
                        </table>
                    </div>
                </div>
                <div class="col">
                    <!-- III -->
                    <div class="infoheader">
                        TAXIWAY A
                    </div>
                    <div class="infocontent">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">1.</td>
                                    <td class="align-top">Dimension</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">133 x 23m</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">2.</td>
                                    <td class="align-top">Strenghts</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">46 F/C/X/T</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">3.</td>
                                    <td class="align-top">Surface</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">ASPHALT Flexible</td>
                                </tr>
                            </tbody>                   
                        </table>
                    </div>
                </div>
                <div class="col">
                    <!-- IV -->
                    <div class="infoheader">
                        TAXIWAY B
                    </div>
                    <div class="infocontent">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">1.</td>
                                    <td class="align-top">Dimension</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">130 x 26m</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">2.</td>
                                    <td class="align-top">Strenghts</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">51 F/C/X/T</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">3.</td>
                                    <td class="align-top">Surface</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">ASPHALT Flexible</td>
                                </tr>
                            </tbody>                   
                        </table>
                    </div>
                </div>
                <div class="col item4">
                    <!-- V -->
                    <div class="infoheader">
                        APRON
                    </div>
                    <div class="infocontent">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">1.</td>
                                    <td class="align-top">Dimension</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">375 x 80m</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">2.</td>
                                    <td class="align-top">Strenghts</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">51 F/C/X/T</td>
                                </tr>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">3.</td>
                                    <td class="align-top">Surface</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">ASPHALT Flexible</td>
                                </tr>
                            </tbody>                   
                        </table>
                    </div>
                </div>
                <div class="col">
                    <!-- VI -->
                    <div class="infoheader">
                        HELI PAD
                    </div>
                    <div class="infocontent">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="align-top"></td>
                                    <td class="align-top">1.</td>
                                    <td class="align-top">Dimension</td>
                                    <td class="align-top">:</td>
                                    <td class="align-top">24 x 24</td>
                                </tr>
                            </tbody>                   
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- page-content -->

<br>

<script>
function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>