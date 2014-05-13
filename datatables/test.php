<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>DataTables</title>
		<meta name="description" content="">
		<meta name="author" content="user">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		
		<script type="text/javascript" src="http://code.jquery.com/jquery.min.js" charset="utf-8"></script>
		<script type="text/javascript" src="media/js/jquery.dataTables.js"></script>
		<script type="text/javascript">
			$(function(){
				$('#tblTest').dataTable();
			});
		</script>
	</head>

	<body>
<table width="100%" border="0" cellspacing="0" cellpadding="3" class="ictable" id="tblTest">
<thead>
	<tr>
  	<td>Date</td>
    <td>Customer</td>
    <td>PR Number</td>
    <td align="right">Amount Paid</td>
  </tr>
</thead>
<tbody>

			<tr>
				<td>2014-03-27</td>
				<td> Metro Ayala</td>
				<td><a href="predit.php?prnum=PRTEST1234&amp;bid=CEBU">PRTEST1234</a></td>
				<td align="right">5,000.00</td>
			</tr>
		
			<tr class="zebra_even">
				<td>2014-01-03</td>
				<td>Saylo Cuisine</td>
				<td><a href="predit.php?prnum=BPR9390&amp;bid=BORACAY">BPR9390</a></td>
				<td align="right">8,580.00</td>
			</tr>
		
			<tr>
				<td>2014-01-03</td>
				<td>Azzurro Beach Resort</td>
				<td><a href="predit.php?prnum=BPR9389&amp;bid=BORACAY">BPR9389</a></td>
				<td align="right">0.68</td>
			</tr>
		
			<tr class="zebra_even">
				<td>2014-01-03</td>
				<td>Discovery Shores</td>
				<td><a href="predit.php?prnum=BPR9388&amp;bid=BORACAY">BPR9388</a></td>
				<td align="right">59,213.90</td>
			</tr>
		
			<tr>
				<td>2014-01-03</td>
				<td>Ambassador in Paradise Hotel</td>
				<td><a href="predit.php?prnum=BPR9387&amp;bid=BORACAY">BPR9387</a></td>
				<td align="right">6,533.46</td>
			</tr>
		
			<tr class="zebra_even">
				<td>2014-01-03</td>
				<td>Red Coconut Hotel</td>
				<td><a href="predit.php?prnum=BPR9386&amp;bid=BORACAY">BPR9386</a></td>
				<td align="right">60,836.88</td>
			</tr>
		
			<tr>
				<td>2014-01-03</td>
				<td>Seraph Management Group,Inc.</td>
				<td><a href="predit.php?prnum=BPR9385&amp;bid=BORACAY">BPR9385</a></td>
				<td align="right">13,322.48</td>
			</tr>
		
			<tr class="zebra_even">
				<td>2014-01-03</td>
				<td>Regency Lagoon Resort,Inc.</td>
				<td><a href="predit.php?prnum=BPR9384&amp;bid=BORACAY">BPR9384</a></td>
				<td align="right">20,518.16</td>
			</tr>
		
			<tr>
				<td>2014-01-03</td>
				<td>Henann Resort, Inc.</td>
				<td><a href="predit.php?prnum=BPR9383&amp;bid=BORACAY">BPR9383</a></td>
				<td align="right">71,439.04</td>
			</tr>
		
			<tr class="zebra_even">
				<td>2014-01-03</td>
				<td>Real Maris</td>
				<td><a href="predit.php?prnum=BPR9382&amp;bid=BORACAY">BPR9382</a></td>
				<td align="right">9,750.00</td>
			</tr>
		
			<tr>
				<td>2014-01-03</td>
				<td>Two Seasons Boracay</td>
				<td><a href="predit.php?prnum=BPR9381&amp;bid=BORACAY">BPR9381</a></td>
				<td align="right">5,420.80</td>
			</tr>
		
			<tr class="zebra_even">
				<td>2014-01-03</td>
				<td>Caruso Ristorante </td>
				<td><a href="predit.php?prnum=BPR9380&amp;bid=BORACAY">BPR9380</a></td>
				<td align="right">952.00</td>
			</tr>
		
			<tr>
				<td>2014-01-03</td>
				<td>Ole Bar and Restaurant</td>
				<td><a href="predit.php?prnum=BPR9379&amp;bid=BORACAY">BPR9379</a></td>
				<td align="right">33,594.40</td>
			</tr>
		
			<tr class="zebra_even">
				<td>2014-01-03</td>
				<td>Lingganay Hotel &amp; Resort</td>
				<td><a href="predit.php?prnum=BPR9378&amp;bid=BORACAY">BPR9378</a></td>
				<td align="right">1,920.00</td>
			</tr>
		
			<tr>
				<td>2014-01-03</td>
				<td>Walk-in Customer</td>
				<td><a href="predit.php?prnum=BPR9377&amp;bid=BORACAY">BPR9377</a></td>
				<td align="right">220.00</td>
			</tr>
		
			<tr class="zebra_even">
				<td>2014-01-03</td>
				<td>Lake Wing's Marketing</td>
				<td><a href="predit.php?prnum=BPR9375&amp;bid=BORACAY">BPR9375</a></td>
				<td align="right">1,730.00</td>
			</tr>
		
			<tr>
				<td>2014-01-03</td>
				<td>By The Sea Resort</td>
				<td><a href="predit.php?prnum=BPR9376&amp;bid=BORACAY">BPR9376</a></td>
				<td align="right">4,500.00</td>
			</tr>
		
			<tr class="zebra_even">
				<td>2014-01-02</td>
				<td>Epic</td>
				<td><a href="predit.php?prnum=BPR9374&amp;bid=BORACAY">BPR9374</a></td>
				<td align="right">4,603.20</td>
			</tr>
		
			<tr>
				<td>2014-01-02</td>
				<td>Epic</td>
				<td><a href="predit.php?prnum=BPR9373&amp;bid=BORACAY">BPR9373</a></td>
				<td align="right">12,980.24</td>
			</tr>
		
			<tr class="zebra_even">
				<td>2014-01-02</td>
				<td>Cyma Greek Taverna Boracay</td>
				<td><a href="predit.php?prnum=BPR9372&amp;bid=BORACAY">BPR9372</a></td>
				<td align="right">88,877.57</td>
			</tr>
		
			<tr>
				<td>2014-01-02</td>
				<td>Tablas Fun Resort</td>
				<td><a href="predit.php?prnum=BPR9371&amp;bid=BORACAY">BPR9371</a></td>
				<td align="right">8,280.00</td>
			</tr>
		
			<tr class="zebra_even">
				<td>2014-01-02</td>
				<td>Punta Rosa</td>
				<td><a href="predit.php?prnum=BPR9369&amp;bid=BORACAY">BPR9369</a></td>
				<td align="right">1,365.00</td>
			</tr>
		
			<tr>
				<td>2014-01-02</td>
				<td>Timog Kite Boarding </td>
				<td><a href="predit.php?prnum=BPR9370&amp;bid=BORACAY">BPR9370</a></td>
				<td align="right">4,646.00</td>
			</tr>
		
			<tr class="zebra_even">
				<td>2014-01-02</td>
				<td>Azzurro Beach Resort</td>
				<td><a href="predit.php?prnum=BPR9368&amp;bid=BORACAY">BPR9368</a></td>
				<td align="right">34,816.72</td>
			</tr>
		
			<tr>
				<td>2014-01-02</td>
				<td>Jony's Beach Resort</td>
				<td><a href="predit.php?prnum=BPR9366&amp;bid=BORACAY">BPR9366</a></td>
				<td align="right">5,016.00</td>
			</tr>
		
			<tr class="zebra_even">
				<td>2014-01-02</td>
				<td>Paupatri Restaurant </td>
				<td><a href="predit.php?prnum=BPR9367&amp;bid=BORACAY">BPR9367</a></td>
				<td align="right">850.00</td>
			</tr>
		
			<tr>
				<td>2014-01-02</td>
				<td>Antica Osteria</td>
				<td><a href="predit.php?prnum=PR162835&amp;bid=CEBU">PR162835</a></td>
				<td align="right">5,040.00</td>
			</tr>
		
			<tr class="zebra_even">
				<td>2014-01-02</td>
				<td>Mayor Edsel Galeos</td>
				<td><a href="predit.php?prnum=PR162834&amp;bid=CEBU">PR162834</a></td>
				<td align="right">7,776.00</td>
			</tr>
		
			<tr>
				<td>2014-01-02</td>
				<td>Ben Joseph Lantot</td>
				<td><a href="predit.php?prnum=PR162833&amp;bid=CEBU">PR162833</a></td>
				<td align="right">900.00</td>
			</tr>
		
			<tr class="zebra_even">
				<td>2014-01-02</td>
				<td>Eday Arana</td>
				<td><a href="predit.php?prnum=PR162832&amp;bid=CEBU">PR162832</a></td>
				<td align="right">3,000.00</td>
			</tr>
		
			<tr>
				<td>2014-01-02</td>
				<td>Ena Agir</td>
				<td><a href="predit.php?prnum=PR162831&amp;bid=CEBU">PR162831</a></td>
				<td align="right">450.00</td>
			</tr>
		
			<tr class="zebra_even">
				<td>2014-01-02</td>
				<td>D Hotel and Suites</td>
				<td><a href="predit.php?prnum=PR162830&amp;bid=CEBU">PR162830</a></td>
				<td align="right">675.00</td>
			</tr>
		
			<tr>
				<td>2014-01-02</td>
				<td>Sans Rival</td>
				<td><a href="predit.php?prnum=PR162829&amp;bid=CEBU">PR162829</a></td>
				<td align="right">1,170.00</td>
			</tr>
		
			<tr class="zebra_even">
				<td>2014-01-02</td>
				<td>Jason Peras</td>
				<td><a href="predit.php?prnum=PR162828&amp;bid=CEBU">PR162828</a></td>
				<td align="right">1,000.80</td>
			</tr>
		
			<tr>
				<td>2014-01-02</td>
				<td>Edward Dacua</td>
				<td><a href="predit.php?prnum=PR162827&amp;bid=CEBU">PR162827</a></td>
				<td align="right">1,710.00</td>
			</tr>
		
			<tr class="zebra_even">
				<td>2014-01-02</td>
				<td>Lyndhel Cortes</td>
				<td><a href="predit.php?prnum=PR162826&amp;bid=CEBU">PR162826</a></td>
				<td align="right">1,100.00</td>
			</tr>
		
			<tr>
				<td>2014-01-02</td>
				<td>Bebot Gandionco</td>
				<td><a href="predit.php?prnum=PR162825&amp;bid=CEBU">PR162825</a></td>
				<td align="right">1,912.00</td>
			</tr>
		
			<tr class="zebra_even">
				<td>2014-01-02</td>
				<td>Pastanni Gourmet Inc.</td>
				<td><a href="predit.php?prnum=PR162799&amp;bid=CEBU">PR162799</a></td>
				<td align="right">13,824.00</td>
			</tr>
		
			<tr>
				<td>2014-01-02</td>
				<td>Pizzeria Michelangelo</td>
				<td><a href="predit.php?prnum=PR162821&amp;bid=CEBU">PR162821</a></td>
				<td align="right">10,189.79</td>
			</tr>
		
			<tr class="zebra_even">
				<td>2014-01-02</td>
				<td>Canvas Bistro</td>
				<td><a href="predit.php?prnum=PR162824&amp;bid=CEBU">PR162824</a></td>
				<td align="right">8,065.27</td>
			</tr>
		
			<tr>
				<td>2014-01-02</td>
				<td>Pizzeria Michelangelo</td>
				<td><a href="predit.php?prnum=PR162823&amp;bid=CEBU">PR162823</a></td>
				<td align="right">7,369.20</td>
			</tr>
		
			<tr class="zebra_even">
				<td>2014-01-02</td>
				<td>Pizzeria Michelangelo</td>
				<td><a href="predit.php?prnum=PR162822&amp;bid=CEBU">PR162822</a></td>
				<td align="right">21,296.95</td>
			</tr>
		
			<tr>
				<td>2014-01-02</td>
				<td>Pizzeria Michelangelo</td>
				<td><a href="predit.php?prnum=PR162820&amp;bid=CEBU">PR162820</a></td>
				<td align="right">16,927.82</td>
			</tr>
		
			<tr class="zebra_even">
				<td>2014-01-02</td>
				<td>Pizzeria Michelangelo</td>
				<td><a href="predit.php?prnum=PR162819&amp;bid=CEBU">PR162819</a></td>
				<td align="right">12,876.00</td>
			</tr>
		
			<tr>
				<td>2014-01-02</td>
				<td>GPH Properties</td>
				<td><a href="predit.php?prnum=PR162818&amp;bid=CEBU">PR162818</a></td>
				<td align="right">7,881.40</td>
			</tr>
		
			<tr class="zebra_even">
				<td>2014-01-02</td>
				<td>Marco Polo Hotel</td>
				<td><a href="predit.php?prnum=PR162817&amp;bid=CEBU">PR162817</a></td>
				<td align="right">5,994.00</td>
			</tr>
		
			<tr>
				<td>2014-01-02</td>
				<td>Crimson Resort &amp; Spa - Mactan</td>
				<td><a href="predit.php?prnum=PR162816&amp;bid=CEBU">PR162816</a></td>
				<td align="right">34,869.00</td>
			</tr>
		
			<tr class="zebra_even">
				<td>2014-01-02</td>
				<td>Waterfront Hotel - Lahug</td>
				<td><a href="predit.php?prnum=PR162815&amp;bid=CEBU">PR162815</a></td>
				<td align="right">167,351.61</td>
			</tr>
		
			<tr>
				<td>2014-01-02</td>
				<td>Cebu Pacific Catering</td>
				<td><a href="predit.php?prnum=PR162814&amp;bid=CEBU">PR162814</a></td>
				<td align="right">1,560.00</td>
			</tr>
		
			<tr class="zebra_even">
				<td>2014-01-02</td>
				<td>Hotel Specialist (Cebu), Inc.</td>
				<td><a href="predit.php?prnum=PR162813&amp;bid=CEBU">PR162813</a></td>
				<td align="right">23,939.17</td>
			</tr>
		</tbody>
</table>
	</body>
</html>
