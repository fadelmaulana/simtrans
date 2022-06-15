<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Sidebar template</title>

    <!-- using online links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
    <link rel="stylesheet" href="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">

    <!-- using local links -->
    <!-- <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css"> -->

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sidebar-themes.css">
</head>

<body>
    <div class="page-wrapper chiller-theme toggled">
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-menu">
                    <ul>
                        <li class="panah tablinks" onclick="openTab(event, 'atm')" id="defaultOpen">
                            <a href="#">
                                <i class="fa fa-tachometer-alt"></i>
                                <span>ATM</span>
                            </a>
                        </li>
                        <li class="panah tablinks" onclick="openTab(event, 'parkir')">
                            <a href="#">
                                <i class="fa fa-tachometer-alt"></i>
                                <span>Parkir</span>
                            </a>
                        </li>
                        <li class="panah tablinks" onclick="openTab(event, 'dropzone')">
                            <a href="#">
                                <i class="fa fa-tachometer-alt"></i>
                                <span>Drop Zone</span>
                            </a>
                        </li>
                        <li class="panah tablinks" onclick="openTab(event, 'kios')">
                            <a href="#">
                                <i class="fa fa-tachometer-alt"></i>
                                <span>Kios</span>
                            </a>
                        </li>
                        <li class="panah tablinks" onclick="openTab(event, 'musholla')">
                            <a href="#">
                                <i class="fa fa-tachometer-alt"></i>
                                <span>Musholla</span>
                            </a>
                        </li>
                        <li class="panah tablinks" onclick="openTab(event, 'waitingroom')">
                            <a href="#">
                                <i class="fa fa-tachometer-alt"></i>
                                <span>Waiting Room</span>
                            </a>
                        </li>
                        <li class="panah tablinks" onclick="openTab(event, 'loket')">
                            <a href="#">
                                <i class="fa fa-tachometer-alt"></i>
                                <span>Loket</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
        </nav>
        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="container-fluid">
                <div id="atm" class="tabcontent">
                  <h3>ATM</h3>
                  <p class="small">Isi ATM.</p>
                </div>

                <div id="parkir" class="tabcontent">
                  <h3>Parkir Area</h3>
                  <p class="small">Isi Parkir Area.</p> 
                </div>

                <div id="dropzone" class="tabcontent">
                  <h3>Drop Zone</h3>
                  <p class="small">Isi Drop Zone.</p>
                </div>

                <div id="kios" class="tabcontent">
                  <h3>Kios</h3>
                  <p class="small">Isi Kios.</p>
                </div>

                <div id="musholla" class="tabcontent">
                  <h3>Musholla</h3>
                  <p class="small">Isi Musholla.</p>
                </div>

                <div id="waitingroom" class="tabcontent">
                  <h3>Waiting Room</h3>
                  <p class="small">Isi Waiting Room.</p>
                </div>

                <div id="loket" class="tabcontent">
                  <h3>Loket</h3>
                  <p class="small">Isi Loket.</p>
                </div>
            </div>
        </main>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->

    <!-- using online scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- using local scripts -->
    <!-- <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script> -->


    <script src="js/main.js"></script>
</body>

</html>

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