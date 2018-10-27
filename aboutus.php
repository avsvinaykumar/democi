<!DOCTYPE html>
<html lang="en">
	<head>
		<?php echo $head; ?>
	</head>
    <body>
		<?php echo $header; ?>
		<section class="spb_70">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="services_title">
							<ul>
								<li class="single_service_title <?php if($page == "")echo 'active'; elseif($page == "about")echo 'active'; ?>">
									<a href="#tab1" data-toggle="tab"><i class="fa fa-angle-double-right" aria-hidden="true"></i>About V-Pharma</a>
								</li>
								<li class="single_service_title <?php if($page == "team")echo 'active'; ?>">
									<a href="#tab2" data-toggle="tab"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Our Team</a>
								</li>
								<li class="single_service_title <?php if($page == "what-we-do")echo 'active'; ?>">
									<a href="#tab3" data-toggle="tab"><i class="fa fa-angle-double-right" aria-hidden="true"></i>What we do</a>
								</li>
								<li class="single_service_title <?php if($page == "terms")echo 'active'; ?>">
									<a href="#tab4" data-toggle="tab"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Terms & Conditions</a>
								</li>
								<li class="single_service_title <?php if($page == "privacy")echo 'active'; ?>">
									<a href="#tab5" data-toggle="tab"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Privacy Policy</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-8">
						<div class="service_details_content tab-content">
							<!-- Service Details Thumb -->
							<div class="tab-pane <?php if($page == "")echo 'active'; elseif($page == "about")echo 'active'; ?>" id="tab1">
								<div class="single_part_content">
									<h3>About <span>Vijaya Pharmaceuticals</span></h3>
									
									<div class="sub">Our Vision</div>
									<div class="service_details_thumb">
										<img src="<?php echo base_url('assets/images/vision.jpg'); ?>">
									</div>
									<p>Integrated into Vijaya Pharma’s overall talent and organizational capability strategy, Vijaya Pharma’s Diversity and Inclusion team partners with colleagues in talent acquisition, learning and development, talent management, mentoring, and organizational culture to develop and implement programs that:</p>
									<ul>
										<li>Help colleagues appreciate the value of diversity and experience Vijaya Pharma as a fair and supportive environment in which to pursue a meaningful career</li>
										<li>Hold managers and leaders accountable for creating inclusive and equitable workplaces</li>
										<li>Allow patients, shareholders and other stakeholders to realize the value of diversity through innovative product development and sound company stewardship.</li>
									</ul>
									<p>At Vijaya Pharma, colleagues of all backgrounds and abilities will find leaders who inspire them to top performance; managers trained to develop and nurture diverse talent; and a culture committed to helping each colleague build a fulfilling career and reach his or her full potential.</p>
									<p class="sh">Ask a Vijaya Pharma colleague about Diversity and Inclusion at Vijaya Pharma, and you will hear a variety of responses:</p>
									<ul>
										<li><q>It’s about inclusion and welcome.</q></li>
										<li><q>It’s about good business sense.</q></li>
										<li><q>It’s about understanding our customers.</q></li>
										<li><q>It’s about attracting, developing and retaining the best talent.</q></li>
										<li><q>It’s about creating a culture that allows all colleagues to contribute their best work.</q></li>
										<li><q>It’s about having many different viewpoints so we can innovate, innovate, innovate!</q></li>
										<li><q>It’s about leading our industry and earning respect as a company.</q></li>
									</ul>
									<p>All of those colleagues would be right, because at Vijaya Pharma, diversity is an integral part of the culture and the business.</p>
									<div class="sub">Our Mission</div>
									<div class="service_details_thumb">
										<img src="<?php echo base_url('assets/images/mission.jpg'); ?>">
									</div>
									<p>Our mission is to help people do more, feel better, live longer.</p>
									<p>The business is focused around the delivery of three strategic priorities which aim to increase growth, reduce risk and improve our long-term financial performance. These priorities are: grow a balanced global business, deliver more products of value, and simplify the operating model.</p>
									<p>Operating responsibly and ensuring our values are embedded in our culture and decision-making helps us better meet the expectations of society.</p>
									<p class="sh">Grow a balanced business</p>
									<p>We have been creating a more balanced business and product portfolio, capable of delivering sustainable sales and earnings growth and improved returns to shareholders.</p>
									<p>This is centered on our three business areas of Pharmaceuticals, Vaccines and Consumer Healthcare.</p>
									<p class="sh">Deliver more products of value</p>
									<p>We have changed our R&D organization so that it is better able to sustain a pipeline of products that offer valuable improvements in treatment for patients and healthcare providers.</p>
									<p>This is underpinned by a focus on improving productivity and rates of return in R and D</p>
									<p class="sh">Simplify the operating model</p>
									<p>As our business continues to change shape, we are transforming how we operate so that we can reduce complexity and become more efficient.</p>
									<p>This frees up resources to reinvest elsewhere in the business, or return to shareholders wherever we see the most attractive returns.</p>
									<div class="sub">History</div>
									<div class="service_details_thumb">
										<img src="<?php echo base_url('assets/images/history.jpg'); ?>">
									</div>
									<p>Vijaya Pharmaceuticals, LLC (V-PHARMA) is a dynamic, cutting edge drug discovery company that provides a wide range of medicinal chemistry and synthetic organic chemistry services. Located in the renowned Research Triangle Park of North Carolina, USA. V-PHARMA is dedicated to serve the global pharmaceutical and biotechnology industries. Founded in 2009, V-PHARMA’s R&D laboratory is equipped with and has access to a full range of modern analytical equipment in order to generate highly reliable data on the compounds that the company delivers to its clients. The company also maintains excellent data integrity and follows the highest possible standards.</p>
									
									<p>As a research-driven and client-focused company, V-PHARMA specializes in designing and synthesizing novel and drug-like scaffolds, libraries, and building blocks. It is capable of performing an extensive range of challenging organic synthesis projects with high quality and low costs. By providing a broad and integrated portfolio of chemistry services, the company management believes it is capable of assisting its drug discovery and development partners in shortening the product cycle and lowering the cost. </p>
									
									<div class="sub">About Business</div>
									<div class="service_details_thumb">
										<img src="<?php echo base_url('assets/images/about_bussiness.jpg'); ?>">
									</div>
									<p>Vijaya Pharmaceuticals (V-PHARMA) focus is to discover and help discover new medications that will benefit the humanity. While drug discovery requires significant resources, V-PHARMA will continuously explore all the opportunities to meet its business goals.</p>
									<p>At V-PHARMA we consider intellectual property protection is paramount importance not only to our clients, but to V-PHARMA’s success and its very existence. The company has a strict documentation procedure that is rigorously enforced to protect our clients’ confidential and proprietary information. No publication and/or presentation are allowed unless we have written an agreement with the client. After the execution of CDA, a free pre-assessment of the project is always carried out. And we only accept those projects where we recognize a realistic probability of success. A variety of business engagements is possible, depending on the nature of the project/client.</p>
									
									
									
									<div class="panel-group service_details_content" id="accordion">
									  <div class="panel panel-default">
										<div class="panel-heading">
										  <h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
											<i class="fa fa-minus"></i> What we do</a>
										  </h4>
										</div>
										<div id="collapse1" class="panel-collapse collapse in">
										  <div class="panel-body">
											<div class="row">
												<div class="col-md-5 aboutus-accordion">
													<img src="<?php echo base_url('assets/images/wwd.jpg'); ?>">
												</div>
												<div class="col-md-7">
													<p class="sh atus-pdg">What makes V-PHARMA different is our:</p>
												
													<ul>
														<li>Approach to significantly impact synthetic and medicinal chemistry-based projects both intellectually and technologically.</li>
														<li>In-depth knowledge of complex  organic synthesis and asymmetric synthesis including carbohydrate.</li>
														<li>Risk-sharing partnership method to discover new medications.</li>
													</ul>
													<a class="sh2 mt-10 atus-pdg" id="view_more_wwd" href="#tab3">View more</a>
												</div>
											</div>
											
											
										  </div>
										</div>
									  </div>
									  <div class="panel panel-default">
										<div class="panel-heading">
										  <h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
											<i class="fa fa-plus"></i> Management</a>
										  </h4>
										</div>
										<div id="collapse2" class="panel-collapse collapse">
										  <div class="panel-body">
										  <div class="row">
												<div class="col-md-4 aboutus-accordion">
													<img src="<?php echo base_url('assets/images/noimage.png'); ?>" class="otimg">
												</div>
												<div class="col-md-8">
													<p>Subba R Katamreddy, Ph.D. (K.S.Reddy), the founder and president of V-PHARMA, has over 16 years of synthetic organic chemistry and preclinical drug discovery experience in both academia and the pharmaceutical industry. Dr. K.S.Reddy earned his Ph.D. in Chemistry in 1995 at the Pondicherry University, Pondicherry, India; and then over the next five years completed his postdoctoral studies at the University of Hyderabad, India; the University of Barcelona, Spain; and the Emory University in Atlanta, GA, USA.</p>
													<a class="sh2 mt-10" id="view_more_team" href="#katamreddy">View more</a>
												</div>
											</div>
										  </div>
										</div>
									  </div>
									  <div class="panel panel-default">
										<div class="panel-heading">
										  <h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
											<i class="fa fa-plus"></i> Business</a>
										  </h4>
										</div>
										<div id="collapse3" class="panel-collapse collapse">
										  <div class="panel-body">
											
											 <div class="row">
												<div class="col-md-5 aboutus-accordion">
													<img src="<?php echo base_url('assets/images/about_bussiness.jpg'); ?>">
												</div>
												<div class="col-md-7">
											
													<p class="atus-pdg">Vijaya Pharmaceuticals (V-PHARMA) focus is to discover and help discover new medications that will benefit the humanity. While drug discovery requires significant resources, V-PHARMA will continuously explore all the opportunities to meet its business goals.</p>
													<a class="sh2 mt-10 atus-pdg" id="view_more_ab" href="#tab9">View more</a>
												</div>
											</div>
										  </div>
										</div>
									  </div>
									</div>
									
									
								</div>
							 </div>
							 <div class="tab-pane <?php if($page == "team")echo 'active'; ?>" id="tab2">
								<div class="single_part_content">
									<h3>our <span>team</span></h3>
									
									<p>Our Team is responsible for the group’s system of corporate governance and is ultimately accountable for the group activites,strategy,risk management and financial performance.</p>
									<p>The Cheif Executive Officer is responsible for the management of the business and is assisted by the Corporate Executive Team.</p>								
									<div class="row">
										<div class="col-md-6">
											<div class="row mt-20">
												<div class="col-md-3">
													<img src="<?php echo base_url('assets/images/noimage.png'); ?>" class="otimg">
												</div>
												<div class="col-md-9">												
													<p class="sh">Subba R Katamareddy, Ph.D.</p>
													<p>Founder and President of V-PHARMA <a class="sh2" id="view_more_team" href="#katamreddy">View more</a></p>
												</div>
											</div>
										</div>
									</div>
									
								</div>
							</div>
							<div class="tab-pane <?php if($page == "what-we-do")echo 'active'; ?>" id="tab3">
								<div class="single_part_content">
									<h3>What <span>we do</span></h3>
									
									<div class="service_details_thumb">
										<img src="<?php echo base_url('assets/images/wwd2.jpg'); ?>">
									</div>
									<p>Vijaya Pharmaceuticals, LLC (V-PHARMA) is a dynamic, cutting edge drug discovery company that provides a wide range of medicinal chemistry and synthetic organic chemistry services. Located in the renowned Research Triangle Park of North Carolina, USA. V-PHARMA is dedicated to serve the global pharmaceutical and biotechnology industries. Founded in 2009, V-PHARMA’s R&D laboratory is equipped with and has access to a full range of modern analytical equipment in order to generate highly reliable data on the compounds that the company delivers to its clients. The company also maintains excellent data integrity and follows the highest possible standards.</p>
									<p>As a research-driven and client-focused company, V-PHARMA specializes in designing and synthesizing novel and drug-like scaffolds, libraries, and building blocks. It is capable of performing an extensive range of challenging organic synthesis projects with high quality and low costs. By providing a broad and integrated portfolio of chemistry services, the company management believes it is capable of assisting its drug discovery and development partners in shortening the product cycle and lowering the cost.</p>
									<p class="sh">What makes V-PHARMA different is our:</p>
									
									<ul>
										<li>Approach to significantly impact synthetic and medicinal chemistry-based projects both intellectually and technologically.</li>
										<li>In-depth knowledge of complex  organic synthesis and asymmetric synthesis including carbohydrate.</li>
										<li>Risk-sharing partnership method to discover new medications.</li>
									</ul>
									
									
								</div>
							</div>
							
							<div class="tab-pane <?php if($page == "terms")echo 'active'; ?>" id="tab4">
								<div class="single_part_content">
									<h3>Terms <span>and Conditions</span></h3>
									
									<p class="sh2">1. Acceptance </p>								
									<p>Vijaya Pharmaceuticals acknowledges receipt of Buyer’s order, and accepts Buyer’s order expressly conditional on Buyer’s assent to the terms and conditions herein contained, whether additional to or different from those in Buyer’s purchase order or any other form or document heretofore or hereafter supplied by Buyer to Vijaya Pharmaceuticals.</p>
									
									<p class="sh2">2. Terms </p>								
									<p>Terms are net 15 days, CIF. We reserve the right not to accept the cancellation of order.</p>
									
									<p class="sh2">3. Lost or Damaged Shipments </p>								
									<p>All prices are listed in U.S. Dollars. Duty, applicable taxes, freight charges and any special packaging charges are excluded and will be added to the invoice. Products and prices are correct at the time of printing but are subject to change without notice. Current prices will be confirmed at the time your order is placed.</p>
									
									<p class="sh2">4. Shipping </p>								
									<p>It is our policy to combine safety and economy to provide the quickest, most efficient method of transportation. Vijaya Pharmaceuticals uses priority overnight delivery services. Whenever possible, we will ship by the method specified by the customer. Shipment of hazardous items is governed by the Ministry of Transportation and the International Air Transport Association (IATA). Products that require special packaging and shipping may incur additional charges per shipment. Vijaya Pharmaceuticals adheres to all regulations governing the transportation of our products.</p>
									
									<p class="sh2">5. Purity </p>								
									<p>Vijaya Pharmaceuticals considers quality an essential criterion for every product. All chemicals listed are subjected to exacting test in our own quality control department for determination of purity. The purity and physical constants stated in the alphabetical section and on our labels are typical values; they may vary slightly from batch to batch. If more information is needed concerning quality, please contact us.</p>
									
									<p class="sh2">6. Toxicity and Hazards </p>								
									<p>All of our chemicals should be handled only by qualified personnel trained in laboratory procedure and familiar with the potential hazards.<br>
									Information is not available on the possible hazards of many compounds. The absence of a warning must not be interpreted as indication of safety.<br>
									Can i Can CCCTheThe ultimate responsibility for the proper handling of any and all chemicals lies with the user. All goods sold by Vijaya Pharmaceuticals carry the condition that liability for any injury, loss or damage whatsoever to persons or real property resulting from the handling of the said goes lies with the user. Acceptance of our goods binds the customer to these terms.</p>
									
									<p class="sh2">7. Warranties </p>								
									<p>Vijaya Pharmaceuticals warrants that its products shall conform to the description of such products as provided in Vijaya Pharmaceuticals’s catalogue. This warranty is exclusive, and seller makes no other warranty, expressed or implied, including any implied warranty of merchantability or fitness for any particular purpose.</p>
									
									<p>Vijaya Pharmaceuticals’s sole and exclusive liability and Buyer’s exclusive remedy with respect to products proved to Vijaya Pharmaceuticals’s satisfaction to be defective or nonconforming shall be the replacement of such products without charge or refund of the purchase price, at the sole direction of Vijaya Pharmaceuticals, upon the return of such products in accordance with Vijaya Pharmaceuticals’s instruction. Vijaya Pharmaceuticals shall not be liable for any incidental, consequential or contingent damages.</p>
									
									<p>Buyer must notify Vijaya Pharmaceuticals within five days after the products have been received or such products shall be deemed to have been accepted.</p>
									
									<p>No license or immunity under any patent is granted or is to be implied by or from the sale of any product.</p>
									
									<p class="sh2">8. Use of Products </p>								
									<p>Vijaya Pharmaceuticals’s products are intended primarily for laboratory research purposes, and unless otherwise indicated on the from of Vijaya Pharmaceuticals’s invoice or on products labels are not to be used for any other purposes.</p>
									
									<p>Buyer agrees to indemnify and hold Toronto Research Chemicals Inc. harmless from and against any and all losses damages and expenses whatsoever or howsoever caused, arising from any use by Buyer of the product; and assumes all risk and liabilities resulting from the use of the products whether used singly or in combination with other products.</p>
									
									<p class="sh2">9. Patent Disclaimer </p>								
									<p>The responsibility of all patent considerations in the use of our chemicals rests solely with the user. Suggestions and recommendations for the use are not to be taken as a license to operate under or to infringe any patent.</p>
									
								</div>
							</div>
							
							<div class="tab-pane <?php if($page == "privacy")echo 'active'; ?>" id="tab5">
								<div class="single_part_content">
									<h3>Privacy <span>Policy</span></h3>
									
									<p class="sh2">Privacy Policy</p>								
									<p>We recognize the importance of an individual’s right to protect personally identifiable information. This privacy policy applies to our website and marketing communications.</p>
									
									<p class="sh2">Collection of Information</p>								
									<p>We collect the personal information that you provide to us when you send us an e-mail message by use of the links contained on this website. This information is used to add your name and details to our mailing list(s) in order to provide you with updates and other communications that may be of interest to you.</p>
									<p>Our web server may also automatically collect information that relates to your visit to our website. This information does not identify you personally, and may be used to assist us in future changes to the website.</p>
									<p class="sh2">Security and Retention</p>								
									<p>We take reasonable precautions to keep secure the information that we collect, by use of physical, organizational and electronic safeguards. However, as no data transmission over the Internet can be guaranteed to be absolutely secure, we do not represent, warrant or guarantee that any collected personal information will be protected against loss, misuse or alteration. Moreoever, we do not assume liability for any personal information provided to us, nor for use of personal information by you or any third parties.</p>
									<p>We shall not disclose any of your personal information, unless required by law or a Court, or for security reasons.</p>
									<p class="sh2">Contacting Us</p>								
									<p>Upon request, we shall provide you with access to any personal information that we have collected about you through our website. In the event that the personal information is not accurate, kindly contact us at info@vijayapharma.com so that we may update this information and answer any questions that you may have.</p>
									<p>We reserve the right to change this privacy policy at any time by posting a new or revised policy at this location.</p>
								</div>
							</div>
							
							<div class="tab-pane" id="katamreddy">
								<div class="single_part_content">
									<h3>Subba reddy <span>Katamareddy</span></h3>
									
									<div class="service_details_thumb">
									<img src="<?php echo base_url('assets/images/noimage.png'); ?>">
									</div>
									<p>Subba R Katamreddy, Ph.D. (K.S.Reddy), the founder and president of V-PHARMA, has over 16 years of synthetic organic chemistry and preclinical drug discovery experience in both academia and the pharmaceutical industry. Dr. K.S.Reddy earned his Ph.D. in Chemistry in 1995 at the Pondicherry University, Pondicherry, India; and then over the next five years completed his postdoctoral studies at the University of Hyderabad, India; the University of Barcelona, Spain; and the Emory University in Atlanta, GA, USA. He then joined GlaxoSmithKline as a principal scientist in the department of medicinal chemistry in 2001, and progressed to be named and served as a Research Investigator. Later, in 2009, he founded V-PHARMA.</p>

									<p>Dr. K.S. Reddy has worked in preclinical drug discovery programs with multidisciplinary teams consisting of representatives from Chemistry, Biology, Pharmacology, Cheminformatics, and Legal. He has experience in working on multiple target classes such as nuclear receptors (NRs), Opioids, and GPCR’s. Dr. K.S.Reddy developed a significant expertise in discovering high quality clinical candidates through integration of currently available drug discovery principles/tools and addressed the complex developmental issues such as solubility, bioavailability and securing intellectual property rights. This effort ultimately helped in identifying two phase II clinical assets.</p>

									<p>He is a co-inventor of 12 patents/patent applications and co-authored 26 research articles published in peer-reviewed journals. He is the recipient of several fellowships and awards; including the Junior and Senior Research Fellowships from UGC, India, Research Associate ships from CSIR, India, and Spain. He won GlaxoSmithKline R&D’s Exceptional Science Award in 2007 for his creative work on GPR119 agonist drug discovery program (to treat metabolic disorders including Type-2 diabetes).</p>

									<p>Dr. K.S.Reddy is a member of the American Chemical Society (ACS), ACS Medicinal Chemistry, the America Diabetes Association (ADA), and the New York Academy of Sciences (NYAS).</p>
									<!--Developer:Rana,Date:24/10/2018,Functionlity:Removing articles section #1733-->
								</div>
							</div>
							
							<div class="tab-pane" id="tab9">
								<div class="single_part_content">
									<h3>About <span>Bussiness</span></h3>
									
									<div class="service_details_thumb">
										<img src="<?php echo base_url('assets/images/wwd2.jpg'); ?>">
									</div>
									<p>Vijaya Pharmaceuticals (V-PHARMA) focus is to discover and help discover new medications that will benefit the humanity. While drug discovery requires significant resources, V-PHARMA will continuously explore all the opportunities to meet its business goals.</p>

									<p>At V-PHARMA we consider intellectual property protection is paramount importance not only to our clients, but to V-PHARMA’s success and its very existence. The company has a strict documentation procedure that is rigorously enforced to protect our clients’ confidential and proprietary information. No publication and/or presentation are allowed unless we have written an agreement with the client. After the execution of CDA, a free pre-assessment of the project is always carried out. And we only accept those projects where we recognize a realistic probability of success. A variety of business engagements is possible, depending on the nature of the project/client.</p>
									
								</div>
							</div>
							
						</div>
				   
					</div>
				</div>
			</div>
		</section>
	
		<?php echo $footer; ?>
		<script>
			$(document).ready(function(){
				var selectIds =$('#collapse1,#collapse2,#collapse3');
				$(function ($) {
					selectIds.on('show.bs.collapse hidden.bs.collapse', function () {
						$(this).prev().find('.fa').toggleClass('fa-plus fa-minus');
					})
				});
				$("#view_more_team,#view_more_ab,#view_more_wwd").on("click",function(e){
					e.preventDefault();
					var id= $(this).attr("href");
					$(".tab-pane").removeClass('active');
					$(id).addClass('active');
					$("html,body").animate({ scrollTop: 0 }, 'slow');
				});
			});
		</script>
    </body>
</html>
