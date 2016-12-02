<?php include("header.php"); ?>
<?php include("construction-nav.php"); ?>

			<div id="gray_header">
				<h3>VOBECKY ENTERPRISES INC</h3>
			</div>

			<div id="content2">
				<div id="left_img">
						<!-- use jssor.slider.debug.js instead for debug -->
			    <script>
			        jQuery(document).ready(function ($) {
			            
			            var jssor_1_SlideshowTransitions = [
			              {$Duration:1200,$Opacity:2}
			            ];
			            
			            var jssor_1_options = {
			              $AutoPlay: true,
			              $SlideshowOptions: {
			                $Class: $JssorSlideshowRunner$,
			                $Transitions: jssor_1_SlideshowTransitions,
			                $TransitionsOrder: 1
			              },
			              $ArrowNavigatorOptions: {
			                $Class: $JssorArrowNavigator$
			              },
			              $BulletNavigatorOptions: {
			                $Class: $JssorBulletNavigator$
			              }
			            };
			            
			            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
			            
			            //responsive code begin
			            //you can remove responsive code if you don't want the slider scales while window resizing
			            function ScaleSlider() {
			                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
			                if (refSize) {
			                    refSize = Math.min(refSize, 750);
			                    jssor_1_slider.$ScaleWidth(refSize);
			                }
			                else {
			                    window.setTimeout(ScaleSlider, 30);
			                }
			            }
			            ScaleSlider();
			            $(window).bind("load", ScaleSlider);
			            $(window).bind("resize", ScaleSlider);
			            $(window).bind("orientationchange", ScaleSlider);
			            //responsive code end
			        });
			    </script>

			    <style>
			        
			        /* jssor slider bullet navigator skin 05 css */
			        /*
			        .jssorb05 div           (normal)
			        .jssorb05 div:hover     (normal mouseover)
			        .jssorb05 .av           (active)
			        .jssorb05 .av:hover     (active mouseover)
			        .jssorb05 .dn           (mousedown)
			        */
			        .jssorb05 {
			            position: relative;
			        }
			        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
			            position: relative;
			            /* size of bullet elment */
			            width: 16px;
			            height: 16px;
			            background: url('img/b05.png') no-repeat;
			            overflow: hidden;
			            cursor: pointer;
			        }
			        .jssorb05 div { background-position: -7px -7px; }
			        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
			        .jssorb05 .av { background-position: -67px -7px; }
			        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

			        /* jssor slider arrow navigator skin 12 css */
			        /*
			        .jssora12l                  (normal)
			        .jssora12r                  (normal)
			        .jssora12l:hover            (normal mouseover)
			        .jssora12r:hover            (normal mouseover)
			        .jssora12l.jssora12ldn      (mousedown)
			        .jssora12r.jssora12rdn      (mousedown)
			        */
			        .jssora12l, .jssora12r {
			            display: block;
			            position: relative;
			            /* size of arrow element */
			            width: 30px;
			            height: 46px;
			            cursor: pointer;
			            background: url('img/a12.png') no-repeat;
			            overflow: hidden;
			        }
			        .jssora12l { background-position: -16px -37px; }
			        .jssora12r { background-position: -75px -37px; }
			        .jssora12l:hover { background-position: -136px -37px; }
			        .jssora12r:hover { background-position: -195px -37px; }
			        .jssora12l.jssora12ldn { background-position: -256px -37px; }
			        .jssora12r.jssora12rdn { background-position: -315px -37px; }
			    </style>


			    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 500px; height: 300px; overflow: hidden; visibility: hidden;">
			        <!-- Loading Screen -->
			        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
			            
			            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
			            
			            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
			        </div>
			        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 500px; height: 300px; overflow: hidden;">
			            <div data-p="112.50" style="display: none;">
			                <img data-u="image" src="img/Picture1.jpg" />
			            </div>
			            <div data-p="112.50" style="display: none;">
			                <img data-u="image" src="img/Picture2.jpg" />
			            </div>
			            <div data-p="112.50" style="display: none;">
			                <img data-u="image" src="img/Picture3.jpg" />
			            </div>
			            <div data-p="112.50" style="display: none;">
			                <img data-u="image" src="img/Picture4.jpg" />
			            </div>
			            <div data-p="112.50" style="display: none;">
			                <img data-u="image" src="img/Picture5.jpg" />
			            </div>
			        </div>
			        <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype" style="width:16px;height:16px;"></div>
			        </div>
			        <!-- Arrow Navigator -->
			        <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
			        <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
			        <a href="http://www.jssor.com" style="display:none">Slideshow Maker</a>

			    </div>
				</div>
				
				<div id="right_content">
					<h1>Completed Projects<h1>

					<h2>A General Contractor You Can Count On.</h2>

					<p>Vobecky Enterprises combines experience, specialized equipment, technical expertise and modern safety techniques to get the job done professionally and safely. Our success and high-quality efforts are reflected in numerous projects including government buildings and commercial maintenance facilities.</p>
			  </div>
			</div> <!-- content 2 close -->
			<div style="clear:both"></div>

			<div id="content">
			  <div class="left_img">
			  	<center>
			  	<img src="img/01_highland.png">
			  </center>
			  </div>

			  <div class="right_content">
			  	<h4>Highland Hospital</h4>
				<p class="project">Client: Clark Construction<br/>
				Site Location: 1411 E 31st St, Oakland, CA 94602<br/>
				Length of Contract: 12 months - 2012<br/>
				Facility Type: Public Hospital</p>

				<h5>Facility Description</h5>

				<p class="project">Acute Care Tower - Oakland Public Hospital
Alameda County's Acute Tower replacement Project will rebuild Highland Hospital acute care tower, which will be operated  by the Alameda Health System. It is crucial for providing continued health care services to the people of Alameda County. 
				</p>

				<h5>Scope of Services</h5>

				<p class="project">The scope of the project included a soft (interior) gut of the hospital auditorium and a structural demolition of the hospital auditorium. The Vobecky team completed the soft (interior) gut of hospital clinical (V bldg.) and the roof tear off of hospital clinic (V Bldg). The team performed hand separation of the hospital clinic. The clinic was to be wrecked and separated from the live portion of the hospital. Protection was installed as needed to adjacent areas. </p>

				<p class="project">An ultra-high reach excavator was assembled. Perpetration of the site included removal of hardscape to allow site movement and assembly of ultra-high reach excavator as directed and project mobilization. This was all done without any interruption to the daily activities of the hospital.</p>

			  </div>
			</div>
			<div style="clear:both"></div>
			<div id="content">
				<div class="left_img">
			  	<center>
			  	<img src="img/02_un.png">
			  </center>
			  </div>

			  <div class="right_content">
			  	<h4>50 United Nations Plaza</h4>
				<p class="project">Client: U.S. General Services Administration, Pacific Rim Region<br />
				Site Location: 50 United Nations Plaza, San Francisco, CA 94102<br />
				Length of Contract: October 2014 - July 2015<br />
				Facility Type: Historical Landmark</p>

				<h5>Facility Description</h5>

				<p class="project">50 UN Plaza is a major component of the San Francisco Civic Center.  Constructed in 1936, the building served for 74 years without a major renovation and survived catastrophic earthquakes.  In 2009 ARRA funded a major renovation to include environmental remediation; new mechanical, electrical, lighting, and plumbing systems; roof replacement and refurbishment of historic wood windows; restoration of the historically significant interiors and central courtyard as well as redesign of office interiors. 50 United Nations Plaza is the new home of the U.S. General Services Administration's regional headquarters offices for the Pacific Rim Region.</p>

				<h5>Scope of Services</h5>

				<p class="project">Vobecky Enterprises' contract improved the functionality of the newly renovated building.  The GSA UN Team made it very clear that all constructed items were to be as close to the historical elements as possible.  We used parts from surplus inventory from earlier demolition to maintain the historical look and feel of the building.  A number of doors and openings were created with no visual cues as to what's new and whats' old. Preserving the interior architectural elements resulted in an acoustical challenge.  We improved the acoustics in 42 team rooms and applied safety decals thereby resulting in a safer and more functional space.  </p>

				<p class="project">The Signage throughout the building was corrected to reflect the revised tenant assignments.  Additionally, the 80 year old doors and thresholds were in dire need of repair.  We worked diligently with the Architect and improved the weatherproofing of the doors with no visual compromise. The HVAC system was adjusted to support new occupancy levels.  And new supports were also installed to support data cables.  All work was executed with little or no disruption to tenants.</p>

			  </div>
			 </div>

			 <div style="clear:both"></div>
			<div id="content">
				<div class="left_img">
			  	<center>
			  	<img src="img/02_un.png">
			  </center>
			  </div>

			  <div class="right_content">
			  	<h4>50 United Nations Plaza</h4>
				<p class="project">Client: U.S. General Services Administration, Pacific Rim Region<br />
				Site Location: 50 United Nations Plaza, San Francisco, CA 94102<br />
				Length of Contract: May 2016 - October 2016<br />
				Facility Type: Historical Landmark</p>

				<h5>Facility Description</h5>

				<p class="project">50 UN Plaza is a major component of the San Francisco Civic Center.  Constructed in 1936, the building served for 74 years without a major renovation and survived catastrophic earthquakes.  In 2009 ARRA funded a major renovation to include environmental remediation; new mechanical, electrical, lighting, and plumbing systems; roof replacement and refurbishment of historic wood windows; restoration of the historically significant interiors and central courtyard as well as redesign of office interiors. 50 United Nations Plaza is the new home of the U.S. General Services Administration's regional headquarters offices for the Pacific Rim Region.</p>

				<h5>Scope of Services</h5>

				<p class="project">Vobecky Enterprises' provided construction and tenant improvements, furnishings, moving services and furniture disposal to allow the Department of Education to occupy 38,714 usable square feet of space in the basement, 1st floor and 5th floor. Vobecky Enterprises provided the Design and Construction services including Furniture procurement &amp; installation along with the move costs associated with this relocation.  </p>

				<p class="project">The Tenant Improvements included: Architectural, floor coring for additional tele/data/power drops to support infill workstations, electrical, tele/data cabling, as well as the necessary electrical/tele/data improvements to support agency training requirements at the 50 UNP conference center. In addition to providing cooling to the Mariposa Conference room, located on the 4th floor for GSA use. </p>

				<p class="project">During the furniture phase of this project Vobecky Enterprises provided installation drawings, furniture order, delivery and installation. The move phase included relocation of existing furniture, files and auxiliary items.    </p>

			  </div>
			 </div>
			  <div style="clear:both"></div>
			<div id="content">
			  <div class="left_img">
			  	<center>
			  	<img src="img/03_hunter.png">
			  </center>
			  </div>

			  <div class="right_content">
			  	<h4>Fort Hunter Ligget Fire Station Building 120 - Flooring and Painting Project</h4>
				<p class="project">Client: MICC - Moffet Field <br />
				Site Location: Ft. Ligget Fire Station, Fort Hunter Ligget, CA 93928<br />
				Length of Contract: November 2015 - February 2016<br />
				Facility Type: Government Site</p>

				<h5>Facility Description</h5>

				<p class="project">Originally designated as Hunter Liggett Military Reservation in 1941, the installation is named for Lieutenant General Hunter Liggett (1857 - 1935). In 1975, the reservation was re-designated as Fort Hunter Liggett Military Installation.</p>

				<p class="project">General Hunter Liggett commanded the 41st National Guard Division. He later commanded the First Corps of the American Expeditionary Forces during World War 1. He also served as Chief of Staff for General Pershing.</p>

				<h5>Scope of Services</h5>

				<p class="project">This project consisted of the demolition of the carpet, linoleum and cove base. Move furniture in occupied area in order to facilitate flooring installation and painting. Vobecky installed new carpet throughout the fire house, kitchen as well as installed rubber matting in the weight room. The scope of the project also included spackle repair, painting and replacement of six shower doors in building 120. </p>

				<p class="project">Vobecky provided all labor, equipment and materials to execute this project. Vobecky maintained areas in order to remain functional to best degree possible during repairs and all work related clean-up was   provided.</p>

			  </div>
			</div>
			<div style="clear:both"></div>
			  
			<div id="content">
			  <div class="left_img">
			  	<center>
			  	<img src="img/04_macarthur.png">
			  </center>
			  </div>

			  <div class="right_content">
			  	<h4>Fort MacArthur - Design Build Solar - Fence Lighting</h4>
				<p class="project">Client: Los Angeles Airforce Base Major Acquisition Flight <br />
				Site Location: Fort MacArthur in San Pedro, CA<br />
				Length of Contract: October 2015- April 2016<br />
				Facility Type: Government Site </p>

				<h5>Facility Description</h5>

				<p class="project">Fort MacArthur is a former United States Army installation in San Pedro, California (now the port community of Los Angeles) which guarded the Los Angeles harbor from 1914 to 1974. A small section remains in military use by the United States Air Force as a residential community and an administrative annex for personnel of the Air Force Space Division Based at El Segundo. This area of Fort MacArthur is not open to the public.</p>

				<p class="project">Fort MacArthur has a museum dedicated to the preservation and interpretation of the history of the fort. The parade grounds have also been used for film location in such films as the 6-part mini-series Eternity.</p>

				<h5>Scope of Services</h5>

				<p class="project">This project consisted of the design and build of solar light poles. 33 new light poles, with solar powered fixtures and back up batteries were installed along the designated perimeter path.  The existing perimeter light system was demolished. Additional perimeter lighting was also installed for security and general illumination purposes.</p>

				<p class="project">The scope of the project included detailed demolition, construction drawings and specifications to support the installation of light poles with solar powered LED fixtures along the designated perimeter of Fort MacArthur. </p>

			  </div>
			</div>
			<div style="clear:both"></div>

<div id="content">
			  <div class="left_img">
			  	<center>
			  	<img src="img/05_walkway.png">
			  </center>
			  </div>

			  <div class="right_content">
			  	<h4>Walkway Repair and Tree Removal at Ontario Airport Traffic Control Tower.</h4>
				<p class="project">Client: Federal Aviation Administration <br />
				Site Location: 1250 Tower Drive Ontario, CA 91761 <br />
				Length of Contract: September 2015 - November 2015</p>

				<h5>Facility Description</h5>

				<p class="project">LA/Ontario International Airport, formerly and still commonly known as Ontario International Airport, is a public airport two miles east of downtown Ontario, a city in San Bernardino County, California, US, and about 38 miles east of Downtown Los Angeles. It is currently owned and operated by the Los Angeles World Airports (LAWA), an agency of the city of Los Angeles. In 2015, LAWA tentatively agreed to turn over the airport to officials of the city of Ontario.</p>

				<p class="project">The FAA's air traffic controllers within the tower at Ontario National Airport ensure the safe and efficient flight for about two million aviation passengers per day.</p>

				<h5>Scope of Services</h5>

				<p class="project">Vobecky Enterprises removed several trees. Top soil was imported as needed for fill after the tree removal. The removed trees were rooted and hauled to a legal dumpsite. Desert drought tolerant plants and mulch was installed to cover approximately 495 square feet of planter trees. Existing irrigation was modified to install drip lines as needed to 495 square feet. </p>

				<p class="project">Sections of the concrete walkway and curbing damaged by the tree uprooting were replaced. Approximately 308 square feet of lifting concrete sidewalk was removed. The existing dirt was graded and compacted prior to installing the new concrete. Necessary traffic control and barricades were included in the order to complete the project in a safe working environment. </p>

			  </div>
			</div>
			<div style="clear:both"></div>
		<div id="content">
			<div class="right_content">
			  	<h4>Audio and Visual at Ontario Airport Traffic Control Tower.</h4>
				<p class="project">Client: Federal Aviation Administration <br />
				Site Location: 1250 Tower Drive Ontario, CA 91761 <br />
				Length of Contract: September 2015 - November 2015</p>

				<h5>Facility Description</h5>

				<p class="project">LA/Ontario International Airport, formerly and still commonly known as Ontario International Airport, is a public airport two miles east of downtown Ontario, a city in San Bernardino County, California, US, and about 38 miles east of Downtown Los Angeles. It is currently owned and operated by the Los Angeles World Airports (LAWA), an agency of the city of Los Angeles. In 2015, LAWA tentatively agreed to turn over the airport to officials of the city of Ontario.</p>

				<p class="project">The FAA's air traffic controllers within the tower at Ontario National Airport ensure the safe and efficient flight for about two million aviation passengers per day.</p>

				<h5>Scope of Services</h5>

				<p class="project">Vobecky Enterprises replaced the existing security surveillance system including high definition cameras some with license plate viewing, several HD monitors and associated video Equipment, in compliance with the requirements and regulations of the FAA. Vobecky performed this work so as not to interrupt of interfere with the normal facility or airport operations.</p>

			  </div>
			</div>
			<div style="clear:both"></div>

			<div id="content">
			  <div class="left_img">
			  	<center>
			  	<img src="img/06_federal.png">
			  </center>
			  </div>

			  <div class="right_content">
			  	<h4>Robert F. Peckham Federal Building &amp; U.S. Courthouse</h4>
				<p class="project">Client: General Services Administration- Region 9 Pacific Rim <br />
				Site Location: 280 South First Street, San Jose, CA <br />
				Length of Contract: October 2015- June 2016 <br />
				Facility Type: Federal Building </p>

				<h5>Facility Description</h5>

				<p class="project">The five-story courthouse is part of the United States District Court's Northern California district. It is the San Jose branch serving Santa Clara, San Benito, Santa Cruz and Monterey Counties.</p>

				<p class="project">The building is named after the late Judge Peckham, a former chief district judge of the Northern District who helped pioneer use of legal means other than court trials to resolve disputes. The Northern District's Alternative Dispute Resolution program took root under his leadership and has since become one of the most innovative and successful in the nation.</p>

				<h5>Scope of Services</h5>

				<p class="project">This project was to modify Courtroom # 8 on the 4th floor and courtroom #4 on the fifth floor simultaneously for the Audio Visual Upgrade. Both Courtrooms of the Courthouse was modified for a new video evidence system, cameras.  This work included selective demolition of the courtrooms in order to provide the proper pathway for the audio visual/electrical conduits. Complete install of the Fire rated floor boxes, conduits and cable run above the 3rd and 4th floor ceiling spaces for the audio visual infrastructure were also provided.</p>

				<p class="project">Two existing storage closets were converted into an audio visual room to support the main Audio visual drive and related infrastructure. The scope in total included: suspended ceiling, quick release sprinkler heads, electrical, structural steel, HVAC, Control automation, fireproofing, concrete cutting/coring, millwork/finishes, carpet and painting. This project also includes the procurement and installation of the entire audio visual system. All this work was done without interruption to the other court rooms or court house.</p>

			  </div>
			</div>
			<div style="clear:both"></div>
			<div id="content">
			  <div class="left_img">
			  	<center>
			  	<img src="img/06_federal.png">
			  </center>
			  </div>

			  <div class="right_content">
			  	<h4>The San Francisco Bay Model Building HVAC &amp;						Refurbishment Project </h4>
				<p class="project">Client: US Army Corp of Engineers<br />
				Site Location: 2100 Bridgeway Blvd Sausalito, CA 94965 <br />
				Length of Contract: October 2015- April 2016 <br />
				Facility Type: Government Site </p>

				<h5>Facility Description</h5>

				<p class="project">The Bay Model Visitor Center is a fully accessible education center administered by the U.S. Army Corps of Engineers which hosts a working Hydraulic model of the San Francisco Bay and Sacramento – San Joaquin River Delta Systems. </p>

				<h5>Scope of Services</h5>

				<p class="project">Vobecky furnished the U.S. Army Corps of Engineers (COE), San Francisco District with labor, personnel, materials, equipment and supplies necessary to perform the work as outlined in the Summary of Work. The work included the full replacement of two existing heat pump units, accompanying ductwork, diffusers, return grills, controls and incidental related work. Each old unit is AC powered, less than 5 tons in size and used to condition approximately 2,000 square feet of office space. </p>

				<p class="project">Addiontal work included replacement of a 2-ton split system air conditioning unit and incidental related work. The existing split system conditions a data server room on the first floor of the Construction Services Branch Office. </p>

			  </div>
			</div>
			
			<div style="clear:both"></div>
			<div id="content2">
				<hr>
				<div class="left_img">
					<center>
					<img src="img/federal-8a.jpg" style="padding:20px;">
				</center>
				</div>

				<div id="right_content" style="padding-bottom: 30px;">
				<h5><b>Other Recent Projects</b></h5>
				<li class="list">Sierra Army Depot - Secured Room </li>
				<li class="list">Sempra Energy - Safety Bollards</li>
				<li class="list">General Services Administration - Construction Improvement</li>
				<li class="list">DCMA - Conference Remodel</li>
				<li class="list">Camp Parks Army Base - 4,000 SQF of Tenant Improvement</li>				
			</div>

		</div>


<?php include("footer.php"); ?>