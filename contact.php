<?php
include_once('header.php');
?>
<nav class="center" style="height: 30px !important; background-color: #3496BA; color: white; line-height: 30px;">
    <div class="nav-wrapper">
        <div class="col s12">
            <a href="index.php" class="breadcrumb" style="font-size: 12px !important">Home</a>
            <a href="contact.php" class="breadcrumb" style="font-size: 12px !important">Contact us</a>
        </div>
    </div>
</nav>
<div class="row">
    <div class="col s12 m12 l8 xl8">
        <div class="card z-depth-0">
            <div class="card-content white-text">
                <span class="card-title" style="background-color: white !important; color: #000000 !important; height: 50px; padding: 10px 0 0 20px"><strong style="color: #34afd1">Contact</strong> us</span>
                <div class="row" style="padding: 0 20px 0 20px">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="fname" type="text" class="validate">
                                <label for="fname">First Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="lname" type="tel" class="validate">
                                <label for="lname">Last Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="email" type="text" class="validate">
                                <label for="email">Email Id</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="mobileno" type="text" class="validate">
                                <label for="mobileno">Mobile No.</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="message" type="text" class="validate">
                                <label for="message">Make an enquiry</label>
                            </div>
                        </div>
                    </form>
                    <a class="waves-effect waves-light btn" style="margin-left: 10px; margin-top: 10px">send enquiry</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m12 l4 xl4">
        <div class="card z-depth-0">
            <div class="card-content white-text">
                <span class="card-title" style="background-color: white !important; color: #000000 !important; height: 50px; padding: 10px 0 0 20px"><strong style="color: #34afd1">Basic</strong>  Information</span>
                <ul class="collection" style="margin-top: 40px">
                    <li class="collection-item avatar">
                        <a href="tel:8866388031"><i class="material-icons circle" style="background-color: #35afd1">call</i></a>
                        <span class="title black-text">Call us on</span>
                        <br>
                        <a href="tel:8866388031" class="black-text">+91 8866 388 031</a>
                    </li>
                    <li class="collection-item avatar">
                        <a href="mailto:info@princecomputech.com"><i class="material-icons circle" style="background-color: #2c93b1 !important">mail</i>
                        <span class="title black-text">Mail us on</span>
                        <p class="black-text"><a href="mailto:info@princecomputech.com" class="black-text">info@princecomputech.com</a></p>
                    </li>
                    <li class="collection-item avatar">
                        <i class="material-icons circle" style="background-color: #276784 !important">gps_fixed</i>
                        <span class="title black-text">Meet us at</span>
                        <p class="black-text">311, Center Point, Opp. Amit Hospital, Halar Road, Valsad, Gujarat - 396001</p>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>
<?php
include_once('footer.php');
?>
