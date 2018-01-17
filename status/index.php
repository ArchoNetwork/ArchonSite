<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Status</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700">
    <link rel="stylesheet" href="../assets/css/styles.min.css">
</head>

<body>
     <button id="backbutton" onclick="goBack()">Go Back</button>

<script>
function goBack() {
    window.history.back();
}
</script> 
    <section>
        <div class="alert alert-warning an-alert" role="alert"><span>Hey! This isn't just a display! All information is up to date, and servers can be accessed with ror.archonetwork.net or through the "Multiplayer" menu.</span></div>
        <section style="margin-top:20px;">
            <section>
                <div class="container" style="background-color:#eeeeee;">
                    <h1 class="text-uppercase text-center" style="font-family:'Open Sans Condensed', sans-serif;"><strong>2.38 Servers</strong></h1>
                    <table class="table table-responsive-md">
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
                                <td>
                                    <?php $debug = true;
                                 $offline = 'Offline';
								 $online = 'Online';
								 $site = 'ror.archonetwork.net';
                                 $port = '12006';
                                 $check = fsockopen( $site, $port, $errno, $errstr, 6 );
                                         if ( ! $check ) {
                                           if($debug){
                                           } 
                                   echo '<div class="offline">', $offline, '</div>';     
                                       } 
                                      else { 
                                  echo '<div class="online">', $online, '</div>';
                                                        }
                                    ?>
                                 </td>
                                <td>12006 </td>
                                <td>Any </td>
                                <td>8 </td>
                            </tr>
                            <tr class="an-trow">
                                <td><strong>2</strong> </td>
                                <td>[2.38] Archon Network Neo</td>
                                <td>
                                    <?php $offline = 'Offline';
								 $online = 'Online';
								 $site = 'ror.archonetwork.net';
                                 $port = '12005';
                                 $check = fsockopen( $site, $port, $errno, $errstr, 6 );
                                         if ( ! $check ) {
                                           if($debug){
                                           } 
                                   echo '<div class="offline">', $offline, '</div>';     
                                       } 
                                      else { 
                                  echo '<div class="online">', $online, '</div>';
                                                        }
                                    ?>
                                 </td>
                                <td>12005 </td>
                                <td>Neo </td>
                                <td>8 </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <section>
                <div class="container" style="background-color:#eeeeee;">
                    <h1 class="text-uppercase text-center" style="font-family:'Open Sans Condensed', sans-serif;"><strong>2.37 Servers</strong></h1>
                    <table class="table table-responsive-md">
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
                                <td>
                                    <?php $offline = 'Offline';
								 $online = 'Online';
								 $site = 'ror.archonetwork.net';
                                 $port = '12009';
                                 $check = fsockopen( $site, $port, $errno, $errstr, 6 );
                                         if ( ! $check ) {
                                           if($debug){
                                           } 
                                   echo '<div class="offline">', $offline, '</div>';     
                                       } 
                                      else { 
                                  echo '<div class="online">', $online, '</div>';
                                                        }
                                    ?>
                                </td>
                                <td>12009</td>
                                <td>Any </td>
                                <td>10 </td>
                            </tr>
                            <tr class="an-trow">
                                <td><strong>2</strong> </td>
                                <td>[2.37] Archon Network Any</td>
                                <td>
                                    <?php $offline = 'Offline';
								 $online = 'Online';
								 $site = 'ror.archonetwork.net';
                                 $port = '12010';
                                 $check = fsockopen( $site, $port, $errno, $errstr, 6 );
                                         if ( ! $check ) {
                                           if($debug){
                                           } 
                                   echo '<div class="offline">', $offline, '</div>';     
                                       } 
                                      else { 
                                  echo '<div class="online">', $online, '</div>';
                                                        }
                                    ?>
                                </td>
                                <td>12010 </td>
                                <td>Any </td>
                                <td>10 </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <section>
                <div class="container" style="background-color:#eeeeee;">
                    <h1 class="text-uppercase text-center" style="font-family:'Open Sans Condensed', sans-serif;"><strong>Other Servers</strong></h1>
                    <table class="table table-responsive-md">
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
                                <td>
                                    <?php $offline = 'Offline';
								 $online = 'Online';
								 $site = 'ror.archonetwork.net';
                                 $port = '12014';
                                 $check = fsockopen( $site, $port, $errno, $errstr, 6 );
                                         if ( ! $check ) {
                                           if($debug){
                                           } 
                                   echo '<div class="offline">', $offline, '</div>';     
                                       } 
                                      else { 
                                  echo '<div class="online">', $online, '</div>';
                                                        }
                                    ?>
                                </td>
                                <td>12014 </td>
                                <td>Any </td>
                                <td>Private </td>
                            </tr>
                            <tr class="an-trow">
                                <td><strong>2</strong> </td>
                                <td>[2.38] WISD</td>
                                <td>
                                    <?php $offline = 'Offline';
								 $online = 'Online';
								 $site = 'ror.archonetwork.net';
                                 $port = '12013';
                                 $check = fsockopen( $site, $port, $errno, $errstr, 6 );
                                         if ( ! $check ) {
                                           if($debug){
                                           } 
                                   echo '<div class="offline">', $offline, '</div>';     
                                       } 
                                      else { 
                                  echo '<div class="online">', $online, '</div>';
                                                        }
                                    ?>
                                </td>
                                <td>12013 </td>
                                <td>Any </td>
                                <td>Private </td>
                            </tr>
                            <tr class="an-trow">
                                <td><strong>3</strong> </td>
                                <td>[2.38] Mikey</td>
                                <td>
                                    <?php $offline = 'Offline';
								 $online = 'Online';
								 $site = 'ror.archonetwork.net';
                                 $port = '12015';
                                 $check = fsockopen( $site, $port, $errno, $errstr, 6 );
                                         if ( ! $check ) {
                                           if($debug){
                                           } 
                                   echo '<div class="offline">', $offline, '</div>';     
                                       } 
                                      else { 
                                  echo '<div class="online">', $online, '</div>';
                                                        }
                                    ?>
                                </td>
                                <td>12015 </td>
                                <td>Any </td>
                                <td>Private </td>
                            </tr>
                            <tr class="an-trow">
                                <td><strong>4</strong> </td>
                                <td>[2.37] Ross</td>
                                <td>
                                    <?php $offline = 'Offline';
								 $online = 'Online';
								 $site = 'ror.archonetwork.net';
                                 $port = '12016';
                                 $check = fsockopen( $site, $port, $errno, $errstr, 6 );
                                         if ( ! $check ) {
                                           if($debug){
                                           } 
                                   echo '<div class="offline">', $offline, '</div>';     
                                       } 
                                      else { 
                                  echo '<div class="online">', $online, '</div>';
                                                        }
                                    ?>
                                </td>
                                <td>12016 </td>
                                <td>Any </td>
                                <td>Private </td>
                            </tr>
							<tr class="an-trow">
                                <td><strong>5</strong> </td>
                                <td>[2.38] EJCS</td>
                                <td>
                                    <?php $offline = 'Offline';
								 $online = 'Online';
								 $site = 'ror.archonetwork.net';
                                 $port = '12020';
                                 $check = fsockopen( $site, $port, $errno, $errstr, 6 );
                                         if ( ! $check ) {
                                           if($debug){
                                           } 
                                   echo '<div class="offline">', $offline, '</div>';     
                                       } 
                                      else { 
                                  echo '<div class="online">', $online, '</div>';
                                                        }
                                    ?>
                                </td>
                                <td>12020 </td>
                                <td>Any </td>
                                <td>Private </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </section>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="../assets/js/script.min.js"></script>
</body>

</html>