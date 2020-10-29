<?php
  include_once 'header.php';
 ?>
<section>
	<h2>Ada County Map</h2>
	<div class="mapouter">
		<div class="gmap_canvas">
			<iframe width="651" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Ada%20County&t=&z=9&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
			</iframe>
		</div>
		<div>
			<ul>
				<li>
					<div class="input-color">
						<div class="color-box" style="background-color: red;"></div>
					</div>
				</li>
				<li>
					<div class="input-color">
						<div class="color-box" style="background-color: Yellow;">

						</div>
					</div>
				</li>
				<li>
					<div class="input-color">
						<div class="color-box" style="background-color: green;"></div>
					</div>
				</li>
			</ul>
		</div>


		<h2>Covid-19 Cases Throughout Idaho Counties</h2>

		<table>
			<tr>
				<th>County</th>
				<th>Confirmed Cases</th>
			</tr>

			<tr>
				<td>Ada County</td>
				<td>16,710</td>
			</tr>
			
			<tr>
				<td>Canyon County</td>
				<td>10,013</td>
			</tr>
			
			<tr>
				<td>Payette County</td>
				<td>1,137</td>
			</tr>

			<tr>
				<td>Elmore County</td>
				<td>530</td>
			</tr>
			
			<tr>
				<td>Gem County</td>
				<td>428</td>
			</tr>

			<tr>
				<td>Owyhee County</td>
				<td>398</td>
			</tr>

			<tr>
				<td>Boise County</td>
				<td>82</td>
			</tr>

		</table>

</section>
