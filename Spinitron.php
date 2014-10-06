<!DOCTYPE html>
<html>

<head>
	<meta charset='UTF-8'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>	
	<script src="autoselect.js"></script>	
</head>
<body>

		
<?php

include 'SpotifyPlaylist.php';

$spotifyPlaylist = new SpotifyPlaylist();

$longstring = $spotifyPlaylist->getFeed();

echo '<iframe src="https://embed.spotify.com/?uri=spotify:trackset:PREFEREDTITLE:' . $longstring . '" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>'


?>


<form name="station_select" action="spinitron.php" method="get">
	<select name="station" id="stationselect">
	  <option value="houndwaves">HOUNDWAVES, Portales | Eastern New Mexico University</option>
	  <option value="kafm">KAFM Grand Junction Community Radio</option>
	  <option value="kaos">KAOS Olympia</option>
	  <option value="kbft">KBFT Bois Forte Tribal Community Radio</option>
	  <option value="kbga">KBGA Missoula College Radio</option>
	  <option value="kboo">KBOO Portland</option>
	  <option value="kbut">KBUT Crested Butte</option>
	  <option value="kbvr">KBVR Corvallis College Radio</option>
	  <option value="kcho">KCHO Chico, CA | Northstate Public Radio</option>
	  <option value="kcnp">KCNP Chicasaw Public Radio</option>
	  <option value="kcpb">KCPB Astoria | Coast Community Radio</option>
	  <option value="kcpr">KCPR San Luis Obispo | Cal Poly Independent Radio</option>
	  <option value="kcsb">KCSB Santa Barbara | Community Service and Educational Broadcasting</option>
	  <option value="kcty">KCTY Long Beach, The City</option>
	  <option value="kdhx">KDHX Saint Louis</option>
	  <option value="kdur">KDUR Fort Lewis College</option>
	  <option value="kfok">KFOK Georgetown Community Radio</option>
	  <option value="kglp">KGLP Gallup</option>
	  <option value="khol">KHOL Jackson Hole Community Radio</option>
	  <option value="khsu">KHSU Arcata, CA</option>
	  <option value="klbc">KLBC Long Beach City College</option>
	  <option value="kmsa">KMSA Grand Junction, CO</option>
	  <option value="kmud">KMUD Garberville</option>
	  <option value="kmun">KMUN Astoria</option>
	  <option value="kmuz">KMUZ Turner FM</option>
	  <option value="koto">KOTO Telluride</option>
	  <option value="kpfz">KPFZ Lake County, CA</option>
	  <option value="kpoo">KPOO San Francisco</option>
	  <option value="kpov">KPOV Bend Community Radio</option>
	  <option value="kptz">KPTZ Port Townsend</option>
	  <option value="kpvl">KPVL Postville Northeast Community Radio</option>
	  <option value="kqal">KQAL Winona, MN</option>
	  <option value="kqny">KQNY Quincy</option>
	  <option value="krcc">KRCC The Sounds of Colorado College</option>
	  <option value="krfc">KRFC Fort Collins, CO</option>
	  <option value="krvm">KRVM Eugene, OR</option>
	  <option value="krza">KRZA Upper Rio Grande</option>
	  <option value="kscl">KSCL Shreveport, LA</option>
	  <option value="ksjd">KSJD Cortez</option>
	  <option value="ksjs">KSJS San Jose, CA</option>
	  <option value="kskq">KSKQ Ashland, OR</option>
	  <option value="kspc">KSPC Claremont</option>
	  <option value="ksrq">KSRQ Pioneer | COmmunity Radio for the Northland</option>
	  <option value="ksrqhd2">KSRQHD2 Northern Air | The Sound of Minnesota</option>
	  <option value="ksrqhd3">KSRQHD3 Somewhere College Radio </option>
	  <option value="ksym">KSYM San Antonio</option>
	  <option value="ktsw">KTSW San Marcos</option>
	  <option value="kumm">KUMM Morris</option>
	  <option value="kuoi">KUOI Moscow</option>
	  <option value="kuom">KUOM Radio K | Minneapolis, MN</option>
	  <option value="kups">KUPS Tacoma</option>
	  <option value="kusf">KUSF in Exile</option>
	  <option value="kvlu">KVLU Beaumont</option>
	  <option value="kvmr">KVMR Music of the World</option>
	  <option value="kvnf">KVNF Mountain-Grown Western Colorado</option>
	  <option value="kvrf">KVRF Sutton</option>
	  <option value="kvsc">KVSC St. Cloud</option>
	  <option value="kwmr">KWMR Bolinas</option>
	  <option value="kwou">KWOU Online Radio</option>
	  <option value="kwva">KWVA Eugene</option>
	  <option value="kxci">KXCI Tucson, AZ</option>
	  <option value="kzfr">KZFR Chico</option>
	  <option value="kzsc">KZSC Santa Cruz</option>
	  <option value="kzuu">KZUU Pullman</option>
	  <option value="kzyx">KZYX Community Radio</option>
	  <option value="pcccamr">Allegheny Mtn Radio</option>
	  <option value="pcrc">Mutiny Radio</option>
	  <option value="pizzafm">Pizza FM</option>
	  <option value="polkacast">Pioneer PolkaCast</option>
	  <option value="radioboise">KRBX Radio Boise</option>
	  <option value="radiofairfax">Fairfax Public Access</option>
	  <option value="radiophoenix">Radio Phoenix</option>
	  <option value="theu">UMSL Radio</option>
	  <option value="wbcr">WBCR Beloit College</option>
	  <option value="wbni">WBNI Roanoke</option>
	  <option value="wbny">WBNY Buffalo</option>
	  <option value="wboi">WBOI Fort Wayne</option>
	  <option value="wbrs">WBRS Waltham</option>
	  <option value="wchc">WCHC Holy Cross</option>
	  <option value="wcuw">WCUW Worcester</option>
	  <option value="wdbx">WDBX Carbondale</option>
	  <option value="wdrt">WDRT Viroqua</option>
	  <option value="weft">WEFT Champaign</option>
	  <option value="weru">WERU Community Radio</option>
	  <option value="wesu">WESU Middletown</option>
	  <option value="wfcs">WFCS New Britain</option>
	  <option value="wfhb">WFHB Bloomington Community Radio</option>
	  <option value="wgdr">WGDR Plainfield Georgetown Radio</option>
	  <option value="wgxc">WGXC Acra</option>
	  <option value="whcl">WHCL Clinton, NY</option>
	  <option value="whrb">WHRB Cambridge</option>
	  <option value="whus">WHUS Storrs</option>
	  <option value="wicn">WICN Jazz New England</option>
	  <option value="wikd">WIKD Daytona</option>
	  <option value="wlgi">WLGI Hemingway, SC</option>
	  <option value="wmfo">WMFO Medfod</option>
	  <option value="wmmt">WMMT Whitesburg</option>
	  <option value="wmpg">WMPG Portland, ME</option>
	  <option value="wmrw">WMRW Warren</option>
	  <option value="wmse">WMSE Milwaukee</option>
	  <option value="wnmc">WNMC Traverse City</option>
	  <option value="wojb">WOJB Reserve, WI</option>
	  <option value="wgxc">WGXCcra</option>
	  <option value="womr">WOMR Cape Cod</option>
	  <option value="wort">WORT Madison, WI</option>
	  <option value="wprk">WPRK Winter Park</option>
	  <option value="wpsc">WPSC Brave New Radio</option>
	  <option value="wrbb">WRBB Boston</option>
	  <option value="wrfa">WRFA Jamestown</option>
	  <option value="wsia">WSIA Staten Island</option>
	  <option value="wsou">WSOU The Loudest Rock</option>
	  <option value="wtbu">WTBU Boston</option>
	  <option value="wtip">WTIP Grand Marais, MN</option>
	  <option value="wuml">WUML Lowell</option>
	  <option value="wumm">WUMM Machias</option>
	  <option value="wuog">WUOG Athens, GA</option>
	  <option value="wutt">WUTT Tampa</option>
	  <option value="wxjm">WXHM Harrisonburg</option>
	  <option value="wxpr">WXPR Rhinelander</option>
	  <option value="wzbc">WZBC Newton</option>
	</select> 
</form>

<p id="test"></p>

</body>

</html>