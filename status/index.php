<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AN1</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../assets/css/styles.min.css">
</head>

<body>
    <nav class="navbar navbar-inverse navigation-clean">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand navbar-link" href="index.html"><img src="../assets/img/logo.png"></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="../index.html">Home </a></li>
                    <li class="active" role="presentation"><a href="status/index.php">Status </a></li>
                    <li role="presentation"><a href="../purchase.html">Purchase </a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">More <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="../tos.html">Terms of Service</a></li>
                            <li role="presentation"><a href="https://discord.gg/j2KzKBF" target="_blank">Discord </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section>
        <div class="alert alert-warning text-center an-alert" role="alert"><span>Hey! This isn't just a display! All information is up to date, and servers can be accessed with ror.archonetwork.net or through the "Multiplayer" menu.</span></div>
        <section style="margin-top:20px;">
            <section>
                <div class="container" style="background-color:#eeeeee;">
                    <h1 class="text-uppercase text-center" style="font-family:'Open Sans Condensed', sans-serif;"><strong>2.38 Servers</strong></h1>
                    <div class="table-responsive">
                        <table class="table table-hover an-table">
                            <thead class="an-thead">
                                <tr>
                                    <th># </th>
                                    <th><i class="fa fa-user-o" style="font-size:17px;"></i><span> </span>Name </th>
                                    <th><i class="fa fa-signal" style="font-size:17px;"></i><span> </span>Status </th>
                                    <th><i class="fa fa-info" style="font-size:17px;"></i><span> </span>Port </th>
                                    <th><i class="fa fa-globe" style="font-size:17px;"></i><span> </span>Map </th>
                                    <th><i class="fa fa-group" style="font-size:17px;"></i><span> </span>Slots </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="an-trow">
                                    <td><strong>1</strong> </td>
                                    <td>[2.38] Archon Network Any</td>
                                    <td><?php $check1 = fsockopen("archonetwork.net", "12200");

if ($check1) {
  echo ("<span class='online'>" . Online . "</span>");
  $close = fclose($check1);
} 
else
  echo ("<span class='offline'>" . Offline . "</span>"); ?> </td>
                                    <td>12200 </td>
                                    <td>Any </td>
                                    <td>8 </td>
                                </tr>
                                <tr class="an-trow">
                                    <td><strong>2</strong> </td>
                                    <td>[2.38] Archon Network Any</td>
                                    <td><?php $check1 = fsockopen("ror.archonetwork.net", "12300");

if ($check1) {
  echo ("<span class='online'>" . Online . "</span>");
  $close = fclose($check1);
} 
else
  echo ("<span class='offline'>" . Offline . "</span>"); ?> </td>
                                    <td>12300 </td>
                                    <td>Any </td>
                                    <td>8 </td>
                                </tr>
                                <tr class="an-trow">
                                    <td><strong>3</strong> </td>
                                    <td>[2.38] Archon Network Neo</td>
                                    <td><?php $check1 = fsockopen("archonetwork.net", "12014");

if ($check1) {
  echo ("<span class='online'>" . Online . "</span>");
  $close = fclose($check1);
} 
else
  echo ("<span class='offline'>" . Offline . "</span>"); ?> </td>
                                    <td>12014 </td>
                                    <td>Neo </td>
                                    <td>8 </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section>
                <div class="container" style="background-color:#eeeeee;">
                    <h1 class="text-uppercase text-center" style="font-family:'Open Sans Condensed', sans-serif;"><strong>2.37 Servers</strong></h1>
                    <div class="table-responsive">
                        <table class="table table-hover an-table">
                            <thead class="an-thead">
                                <tr>
                                    <th># </th>
                                    <th><i class="fa fa-user-o" style="font-size:17px;"></i><span> </span>Name </th>
                                    <th><i class="fa fa-signal" style="font-size:17px;"></i><span> </span>Status </th>
                                    <th><i class="fa fa-info" style="font-size:17px;"></i><span> </span>Port </th>
                                    <th><i class="fa fa-globe" style="font-size:17px;"></i><span> </span>Map </th>
                                    <th><i class="fa fa-group" style="font-size:17px;"></i><span> </span>Slots </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="an-trow">
                                    <td><strong>1</strong> </td>
                                    <td>[2.37] Archon Network Any</td>
                                    <td><?php $check1 = fsockopen("archonetwork.net", "12001");

if ($check1) {
  echo ("<span class='online'>" . Online . "</span>");
  $close = fclose($check1);
} 
else
  echo ("<span class='offline'>" . Offline . "</span>"); ?> </td>
                                    <td>12001</td>
                                    <td>Any </td>
                                    <td>10 </td>
                                </tr>
                                <tr class="an-trow">
                                    <td><strong>2</strong> </td>
                                    <td>[2.37] Archon Network Any</td>
                                    <td><?php $check1 = fsockopen("ror.archonetwork.net", "12002");

if ($check1) {
  echo ("<span class='online'>" . Online . "</span>");
  $close = fclose($check1);
} 
else
  echo ("<span class='offline'>" . Offline . "</span>"); ?> </td>
                                    <td>12002 </td>
                                    <td>Any </td>
                                    <td>10 </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section>
                <div class="container" style="background-color:#eeeeee;">
                    <h1 class="text-uppercase text-center" style="font-family:'Open Sans Condensed', sans-serif;"><strong>Other Servers</strong></h1>
                    <div class="table-responsive">
                        <table class="table table-hover an-table">
                            <thead class="an-thead">
                                <tr>
                                    <th># </th>
                                    <th><i class="fa fa-user-o" style="font-size:17px;"></i><span> </span>Name </th>
                                    <th><i class="fa fa-signal" style="font-size:17px;"></i><span> </span>Status </th>
                                    <th><i class="fa fa-info" style="font-size:17px;"></i><span> </span>Port </th>
                                    <th><i class="fa fa-globe" style="font-size:17px;"></i><span> </span>Map </th>
                                    <th><i class="fa fa-group" style="font-size:17px;"></i><span> </span>Slots </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="an-trow">
                                    <td><strong>1</strong> </td>
                                    <td>[2.38] JDPS</td>
                                    <td><?php $check1 = fsockopen("archonetwork.net", "12006");

if ($check1) {
  echo ("<span class='online'>" . Online . "</span>");
  $close = fclose($check1);
} 
else
  echo ("<span class='offline'>" . Offline . "</span>"); ?> </td>
                                    <td>12006 </td>
                                    <td>Any </td>
                                    <td>10 </td>
                                </tr>
                                <tr class="an-trow">
                                    <td><strong>2</strong> </td>
                                    <td>[2.38] WISD</td>
                                    <td><?php $check1 = fsockopen("ror.archonetwork.net", "12400");

if ($check1) {
  echo ("<span class='online'>" . Online . "</span>");
  $close = fclose($check1);
} 
else
  echo ("<span class='offline'>" . Offline . "</span>"); ?> </td>
                                    <td>12400 </td>
                                    <td>Any </td>
                                    <td>10 </td>
                                </tr>
                                <tr class="an-trow">
                                    <td><strong>3</strong> </td>
                                    <td>[2.38] NCPS</td>
                                    <td><?php $check1 = fsockopen("ror.archonetwork.net", "12011");

if ($check1) {
  echo ("<span class='online'>" . Online . "</span>");
  $close = fclose($check1);
} 
else
  echo ("<span class='offline'>" . Offline . "</span>"); ?> </td>
                                    <td>12011 </td>
                                    <td>Any </td>
                                    <td>Unlimited </td>
                                </tr>
                                <tr class="an-trow">
                                    <td><strong>4</strong> </td>
                                    <td>[2.38] GHCS</td>
                                    <td><?php $check1 = fsockopen("ror.archonetwork.net", "12007");

if ($check1) {
  echo ("<span class='online'>" . Online . "</span>");
  $close = fclose($check1);
} 
else
  echo ("<span class='offline'>" . Offline . "</span>"); ?> </td>
                                    <td>12007 </td>
                                    <td>Any </td>
                                    <td>Unlimited </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </section>
    </section>
    <footer class="footer-basic">
        <div class="social"><a href="#"><i class="fa fa-youtube-play" style="color:#bb0000;"></i></a><a href="https://twitter.com/Archonetwork" target="_blank"><i class="icon ion-social-twitter" style="color:#00aced;"></i></a>
            <a href="https://discord.gg/j2KzKBF" target="_blank"><img src="../assets/img/Discord-Logo-Color.svg" height="25px"></a>
        </div>
        <ul class="list-inline">
            <li><a href="index.html">Home</a></li>
            <li><a href="status/index.php">Server Status</a></li>
            <li><a href="purchase.html">Purchase </a></li>
            <li><a href="tos.html">Terms of Service</a></li>
            <li><a href="https://discord.gg/j2KzKBF" target="_blank">Discord </a></li>
        </ul>
        <p class="copyright">Archon Network © 2016</p>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../assets/js/script.min.js"></script>
</body>

</html>
