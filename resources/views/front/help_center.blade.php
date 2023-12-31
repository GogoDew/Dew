@extends('front.layout.master')
@section('title','Blog')
@section('body')

    <div id="help_center">

        <div class="grid wide">
            <div class="row faq">
                <div class="col l-3 m-3 c-12 faq-left">
                    <h3>Help Center</h3>
                    <div class="help-list">
                        <ul>
                            <li class="active" id="help-list--list-item-1"><a href="">Help & FAQs</a></li>
                            <li id="help-list--list-item-2"><a href="">Return Policy</a></li>
                            <li id="help-list--list-item-3"><a href="">Terms and Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col l-9 m-9 c-12 faq-right">
                    <div class="active faq-right-item" id="help">
                        <div class="faq-product product">
                            <h3>Products</h3>
                            <div class ="qna">
                                <details>
                                    <summary>
                                        <i class="svg-icon show fa-light fa-circle-plus"></i>
                                        <i  class="svg-icon hide fa-light fa-circle-minus"></i>
                                        <h6>FABRIC QUALITY - WHAT FACTORS DECIDES?</h6>
                                    </summary>
                                    <p>Currently, the fabric market is very diverse and rich. Since thousands of years ago, people have known to make cloth to use to make clothes from materials available in nature such as cotton, jute, hemp, animal hair... More fabrics are made of natural fibers, synthetic fabrics and blended fabrics with both natural and man-made ingredients. Fabric is the first and most basic factor that determines the quality of the fabric. The main fabrics used in the garment industry today are: cotton, bamboo, modal, polyester, rayon, wool, silk, feathers, soy, demin, etc. Each fabric material will have its own scientific properties. study, its own advantages and disadvantages, suitable for each working environment and design of clothing.</p>
                                </details>
                            </div>
                            <div class = "qna">
                                <details>
                                    <summary>
                                        <i class="svg-icon show fa-light fa-circle-plus"></i>
                                        <i  class="svg-icon hide fa-light fa-circle-minus"></i>
                                        <h6>How is the manufacturing process going?</h6>
                                    </summary>
                                    <p>Fabric production process is divided into two main stages: Preliminary processing and refining. Preliminary processing is the initial basic weaving and dyeing process, while refining is the work after the fabric has been preliminarily processed to increase durability, softness, or add other properties to the fabric. Therefore, it can be said that this is one of the factors that are also extremely important to determine the quality of the fabric, whether the fabric has the desired quality or not depends greatly on the two stages of preliminary processing and refining.<br><br>
                                        When buying our products, customers can rest assured because the quality of mattana fabric put into production is always through rigorous refining processes, mattana always invests in many modern machines to create sharp products. with many modern technologies such as anti-wrinkle treatment for shirt products, Supercrease technology - permanent pressing for trousers. For shirt products: Collars, cuffs and cuffs use hot and cold glue machines - Japanese technology to help flatten and not flatten. Armpit ring, shirt ribs use melt glue pressing technology to help flatten after washing, limit color fading, there are many products with new fabric materials, best for consumers' health.<br></p>
                                </details>
                            </div>
                            <div class = "qna">
                                <details>
                                    <summary>
                                        <i class="svg-icon show fa-light fa-circle-plus"></i>
                                        <i  class="svg-icon hide fa-light fa-circle-minus"></i>
                                        <h6>I received the wrong product, what shall I do?</h6>
                                    </summary>
                                    <p>Firstly, we're sorry you received the wrong product. Please <a href = "contact.html">contact us</a> with details of your order and what you've received and we'll get it sorted.</p>
                                </details>
                            </div>
                            <div class = "qna">
                                <details>
                                    <summary>
                                        <i class="svg-icon show fa-light fa-circle-plus"></i>
                                        <i  class="svg-icon hide fa-light fa-circle-minus"></i>
                                        <h6>Can you provide a fabric sample?</h6>
                                    </summary>
                                    <p>You can order a free fabric sample pack by <a href = "register.html">creating an account</a> and visiting the product detail of your choice. You can order up to six samples at a time. If the sample you're after isn't there, keep checking back - wer regularly replenish samples.</p>
                                </details>
                            </div>
                        </div>
                        <div class="faq-product product">
                            <h3>Delivery</h3>
                            <div class = "qna">
                                <details>
                                    <summary>
                                        <i class="svg-icon show fa-light fa-circle-plus"></i>
                                        <i  class="svg-icon hide fa-light fa-circle-minus"></i>
                                        <h6>If I order several items, will they be delivered at the same time?</h6>
                                    </summary>
                                    <p>As long as all your items are with the same carrier, and the difference in lead times isn't too much, grouped delivery will be given as an option at the checkout for you to pick if you would like to do this and have all items delivered together.</p>
                                </details>
                            </div>
                            <div class = "qna">
                                <details>
                                    <summary>
                                        <i class="svg-icon show fa-light fa-circle-plus"></i>
                                        <i  class="svg-icon hide fa-light fa-circle-minus"></i>
                                        <h6>How can I change my delivery address?</h6>
                                    </summary>
                                    <p>You can update your delivery address prior to dispatch in My Account and 'MY ORDERS'. If your item has dispatched, feel free to contact us and we'll be happy to assist you with this.</p>
                                </details>
                            </div>
                            <div class = "qna">
                                <details>
                                    <summary>
                                        <i class="svg-icon show fa-light fa-circle-plus"></i>
                                        <i  class="svg-icon hide fa-light fa-circle-minus"></i>
                                        <h6>What happens if the carriers lose my parcel?</h6>
                                    </summary>
                                    <p>This rarely happens however if this situation was to arise, send us an <a href = "mailto:contact@richfieldchairs.com">email</a> with details of your order and what you've received and we'll get it sorted.</p>
                                </details>
                            </div>
                            <div class = "qna">
                                <details>
                                    <summary>
                                        <i class="svg-icon show fa-light fa-circle-plus"></i>
                                        <i  class="svg-icon hide fa-light fa-circle-minus"></i>
                                        <h6>How can I contact your delivery company?</h6>
                                    </summary>
                                    <p>We'll send an email to you once your products have dispatched with information on how to contact the delivery company that has your order.</p>
                                    <p>If you have not received this email, you can <a href = "login.html">log in</a> to your account and you will be able to see which carrier has your product as well as their contact details.</p>
                                </details>
                            </div>
                            <div class = "qna">
                                <details>
                                    <summary>
                                        <i class="svg-icon show fa-light fa-circle-plus"></i>
                                        <i  class="svg-icon hide fa-light fa-circle-minus"></i>
                                        <h6>How long will my items take?</h6>
                                    </summary>
                                    <p>From dispatch to delivery it will typically take 3 - 5 working days for small and medium items and up to 07 working days for larger items. Offshore deliveries can also take up to 14 working days</p>
                                </details>
                            </div>
                        </div>
                        <div class="faq-product product">
                            <h3>Payment</h3>
                            <div class = "qna">
                                <details>
                                    <summary>
                                        <i class="svg-icon show fa-light fa-circle-plus"></i>
                                        <i  class="svg-icon hide fa-light fa-circle-minus"></i>
                                        <h6>Are my card details safe?</h6>
                                    </summary>
                                    <p>Yes, we never store your full card details, only a token (that we use for future purchases) and enough information to display on the website so that you know which card it is, i.e. the last 4 digits of the card number. Also, we only allow the card to be used when the same delivery address has been used for the card before, which reduces the risk of someone accessing your Thrift Fashion account and ordering with your saved card.</p>
                                </details>
                            </div>
                            <div class = "qna">
                                <details>
                                    <summary>
                                        <i class="svg-icon show fa-light fa-circle-plus"></i>
                                        <i  class="svg-icon hide fa-light fa-circle-minus"></i>
                                        <h6>How do I add another card to my account?</h6>
                                    </summary>
                                    <p>You can do this at the checkout when you pay for your next order. Use the credit card payment option, and tick 'Save My Card Securely For Future Purchases' when filling out your new card details.</p>
                                </details>
                            </div>
                            <div class = "qna">
                                <details>
                                    <summary>
                                        <i class="svg-icon show fa-light fa-circle-plus"></i>
                                        <i  class="svg-icon hide fa-light fa-circle-minus"></i>
                                        <h6>I haven't received an email with my payment or statement information - what should I do?</h6>
                                    </summary>
                                    <p>You can <a href = "login.html">log in to your account</a> where you'll find all of your orders and payment schedule information.
                                        If you wish to receive an email from us, please <a href = "contact.html">contact us</a> or send an <a href = "mailTo:contact@thriftfashion.com">email</a> with your customer details.</p>
                                </details>
                            </div>
                            <div class = "qna">
                                <details>
                                    <summary>
                                        <i class="svg-icon show fa-light fa-circle-plus"></i>
                                        <i  class="svg-icon hide fa-light fa-circle-minus"></i>
                                        <h6>How can I pay for my order?</h6>
                                    </summary>
                                    <p>We accept all major credit and debit cards including Visa Credit, Visa Debit and Mastercard. We also accept American Express and PayPal. When you spend below $300, you can choose to pay in cash.</p>
                                </details>
                            </div>
                            <div class = "qna">
                                <details>
                                    <summary>
                                        <i class="svg-icon show fa-light fa-circle-plus"></i>
                                        <i  class="svg-icon hide fa-light fa-circle-minus"></i>
                                        <h6>How do I get a VAT refund?</h6>
                                    </summary>
                                    <p>For the majority of situations we cannot refund the VAT once an order has been placed through our website.</p>
                                </details>
                            </div>
                        </div>
                        <div class="faq-product product">
                            <h3>Privacy</h3>
                            <div class = "qna">
                                <details>
                                    <summary>
                                        <i class="svg-icon show fa-light fa-circle-plus"></i>
                                        <i  class="svg-icon hide fa-light fa-circle-minus"></i>
                                        <h6>I'm still not sure - where can I find more information about your privacy policy?</h6>
                                    </summary>
                                    <p>Please read our comprehensive privacy policy regarding GDPR and how it affects you <a href = "terms.html">here</a>.</p>
                                </details>
                            </div>
                            <div class = "qna">
                                <details>
                                    <summary>
                                        <i class="svg-icon show fa-light fa-circle-plus"></i>
                                        <i  class="svg-icon hide fa-light fa-circle-minus"></i>
                                        <h6>Who has access to my data?</h6>
                                    </summary>
                                    <p>Your data is in safe hands. We only use it to process your activity on our site, for the best customer experience. If you’ve agreed to share your personal data with third parties via Thrift Fashion, we only share the minimum needed to be able to provide services to you.</p>
                                </details>
                            </div>
                            <div class = "qna">
                                <details>
                                    <summary>
                                        <i class="svg-icon show fa-light fa-circle-plus"></i>
                                        <i  class="svg-icon hide fa-light fa-circle-minus"></i>
                                        <h6>What exactly is "personal data"?</h6>
                                    </summary>
                                    <p>Personal data is information that directly or indirectly identifies a living person. This can be anything from a name, photo, address, bank details or, more digitally speaking, an IP address or even social media posts.</p>
                                </details>
                            </div>
                            <div class = "qna">
                                <details>
                                    <summary>
                                        <i class="svg-icon show fa-light fa-circle-plus"></i>
                                        <i  class="svg-icon hide fa-light fa-circle-minus"></i>
                                        <h6>How do I change my personal details?</h6>
                                    </summary>
                                    <p>You can change your account details via your online account. Once logged in, click on 'MY DETAILS'. You are then able to change your name, email and your account password.</p>
                                </details>
                            </div>
                            <div class = "qna">
                                <details>
                                    <summary>
                                        <i class="svg-icon show fa-light fa-circle-plus"></i>
                                        <i  class="svg-icon hide fa-light fa-circle-minus"></i>
                                        <h6>Why my payment fails?</h6>
                                    </summary>
                                    <p>We accept Visa Credit, Visa Debit, MasterCard and American Express. Make sure your card details are correct and your billing address is in the UK. If it still isn’t working, please contact your bank.</p>
                                </details>
                            </div>
                        </div>
                    </div>
                    <div class="faq-right-item" id="policy">
                        <div class = "faq-product">
                            <h3>Procedures for exchanging items</h3>
                            <ol class = "policy">
                                <li>Items for exchange must be in marketable condition with no damages and alterations, and with all tags still attached or still with original packaging.</li>
                                <li>Sealed items that have been unsealed by the customer, such as tableware-kitchenware products, lodge fragrance etc., are not eligible for exchange.</li>
                                <li>Send us an email within 7 days of delivery, and specify the reason for exchanging the item/s. For exchanges, identify the requested item, color and or size of replacement.</li>
                                <li>Expect to receive our response for the acceptance of the requested exchange within the next working day. Shipping costs of all accepted exchanges will be shouldered by the customers.</li>
                                <li>After you receive our confirmation email for your requested exchange, please proceed to send the item/s back to Bergen / Bel Air / Bartlett according to your item's manufacturer.</li>
                                <li>For exchange at our physical store, the store manager or cashier will check and inspect your item/s if it is eligible for exchange.</li>
                                <li>If an item requested for replacement is available, Thrift Fashion will deliver the exchange item/s as soon as the purchased item/s meets the requirements for exchanging, we will send you a tracking code following the exchange request email you had sent us earlier.</li>
                                <li>If an item requested for replacement is not available, Thrift Fashion will instead offer to exchange it to other products with the same value or higher value, CASH REFUND is not accepted/applied.</li>
                            </ol>
                        </div>
                        <div class = "faq-product">
                            <h3>Procedures for returning defective / damaged items</h3>
                            <ol class = "policy">
                                <li>While we ensure that all our products go through a due quality check before shipping, damages may arise after items have been shipped. If you believe you have received a damaged or defective item, send us an email within 7 days from delivery date with supporting images that clearly show the defect.</li>
                                <li>Expect to receive our response within the next working day to schedule the pick up of your damaged item, which will still be subject to inspection at our head office.</li>
                                <li>Items returned described as damaged or defective will be tested and inspected. If found damaged or defective, Thrift Fashion will replace the item and shoulder shipping costs.</li>
                                <li>If item/s returned are found not to be damaged or defective, item/s will be transported back to you, and you will be charged necessary shipping cost.</li>
                                <li>
                                    Please inspect carefully all fragile items such as vases, ceramic decorative items etc.upon acceptance of your delivery witnessed by our authorized courier representative. In case you found a defect or damage on your fragile item after inspection, you may refuse to accept the delivery and immediately send us an email in order to replace the said damaged item.
                                </li>
                            </ol>
                        </div>
                        <div class = "faq-product">
                            <h3>Damages occurred due to delivery agency</h3>
                            <ol class = "policy">
                                <li>Please inspect carefully all fragile items such as vases, ceramic, or fragile decorative items etc. upon acceptance of your delivery witnessed by our authorized courier representative. In case you found a defect or damage on your fragile item after inspection, you may refuse to accept the delivery and immediately send us an email in order to replace the said damaged item/s.</li>
                                <li>If the situation reaches further than any of the involved parties control, Thrift Fashion would work with the customer and the delivery agency to come up with the resolution that works best for all parties.
                                </li>
                            </ol>
                        </div>
                        <div class = "faq-product">
                            <h3>Purchases from unauthorized or third-party selling platforms</h3>
                            <p>Thrift Fashion expressly disclaims any guarantees or warranties as to the quality, authenticity, originality, and correctness of prices of products and/or merchandise purchased from unauthorized or third-party selling platforms, and shall not be liable to replace or refund such products and/or merchandise.</p>
                        </div>
                    </div>
                    <div class="faq-right-item" id="term">
                        <div class = "faq-product terms">
                            <h3>Thrift Fashion Terms and Conditions</h3>
                            <p>
                                This website is operated by Thrift Fashion. Throughout the site, the terms “we”, “us” and “our” refer to Thrift Fashion. Thrift Fashion offers this website, including all information, tools and services available from this site to you, the user, conditioned upon your acceptance of all terms, conditions, policies and notices stated here.
                            </p>
                            <p>
                                By visiting our site and/ or purchasing something from us, you engage in our “Service” and agree to be bound by the following terms and conditions (“Terms of Service”, “Terms”), including those additional terms and conditions and policies referenced herein and/or available by hyperlink. These Terms of Service apply  to all users of the site, including without limitation users who are browsers, vendors, customers, merchants, and/ or contributors of content.
                            </p>
                            <p>
                                Please read these Terms of Service carefully before accessing or using our website. By accessing or using any part of the site, you agree to be bound by these Terms of Service. If you do not agree to all the terms and conditions of this agreement, then you may not access the website or use any services. If these Terms of Service are considered an offer, acceptance is expressly limited to these Terms of Service.
                            </p>
                            <p>
                                Any new features or tools which are added to the current store shall also be subject to the Terms of Service. You can review the most current version of the Terms of Service at any time on this page. We reserve the right to update, change or replace any part of these Terms of Service by posting updates and/or changes to our website. It is your responsibility to check this page periodically for changes. Your continued use of or access to the website following the posting of any changes constitutes acceptance of those changes.
                            </p>
                        </div>
                        <div class = "faq-product">
                            <h3>Index</h3>
                            <ol class = "policy">
                                <li><a href = "#sec1">SECTION 01 - ONLINE STORE TERMS</a></li>
                                <li><a href = "#sec2">SECTION 02 - GENERAL CONDITIONS</a></li>
                                <li><a href = "#sec3">SECTION 03 - ACCURACY, COMPLETENESS AND TIMELINESS OF INFORMATION</a></li>
                                <li><a href = "#sec4">SECTION 04 - MODIFICATIONS TO THE SERVICE AND PRICES</a></li>
                                <li><a href = "#sec5">SECTION 05 - GENERAL CONDITIONS</a></li>
                                <li><a href = "#sec6">SECTION 06 - ACCURACY OF BILLING AND ACCOUNT INFORMATION</a></li>
                                <li><a href = "#sec7">SECTION 07 - OPTIONAL TOOLS</a></li>
                                <li><a href = "#sec8">SECTION 08 - THIRD-PARTY LINKS</a></li>
                                <li><a href = "#sec9">SECTION 09 - USER COMMENTS, FEEDBACK AND OTHER SUBMISSIONS</a></li>
                                <li class = "overten"><a href = "#sec10">SECTION 10 - PERSONAL INFORMATION</a></li>
                                <li class = "overten"><a href = "#sec11">SECTION 11 - ERRORS, INACCURACIES AND OMISSIONS</a></li>
                                <li class = "overten"><a href = "#sec12">SECTION 12 - PROHIBITED USES</a></li>
                                <li class = "overten"><a href = "#sec13">SECTION 13 - DISCLAIMER OF WARRANTIES; LIMITATION OF LIABILITY</a></li>
                                <li class = "overten"><a href = "#sec14">SECTION 14 - INDEMNIFICATION</a></li>
                                <li class = "overten"><a href = "#sec15">SECTION 15 - SEVERABILITY</a></li>
                                <li class = "overten"><a href = "#sec16">SECTION 16 - TERMINATION</a></li>
                                <li class = "overten"><a href = "#sec17">SECTION 17 - ENTIRE AGREEMENT</a></li>
                                <li class = "overten"><a href = "#sec18">SECTION 18 - GOVERNING LAW</a></li>
                                <li class = "overten"><a href = "#sec19">SECTION 19 - CHANGES TO TERMS OF SERVICE</a></li>
                                <li class = "overten"><a href = "#sec20">SECTION 20 - CONTACT INFORMATION</a></li>
                            </ol>
                        </div>
                        <div class = "faq-product terms" id = "sec1">
                            <h3>Section 1: Online Store Terms</h3>
                            <p>
                                By agreeing to these Terms of Service, you represent that you are at least the age of majority in your state or province of residence, or that you are the age of majority in your state or province of residence and you have given us your consent to allow any of your minor dependents to use this site. You may not use our products for any illegal or unauthorized purpose nor may you, in the use of the Service, violate any laws in your jurisdiction (including but not limited to copyright laws). You must not transmit any worms or viruses or any code of a destructive nature.
                                <br>A breach or violation of any of the Terms will result in an immediate termination of your Services.
                            </p>
                        </div>
                        <div class = "faq-product terms" id = "sec2">
                            <h3>Section 2: General Conditions</h3>
                            <p>
                                We reserve the right to refuse service to anyone for any reason at any time. You understand that your content (not including credit card information), may be transferred unencrypted and involve (a) transmissions over various networks; and (b) changes to conform and adapt to technical requirements of connecting networks or devices. Credit card information is always encrypted during transfer over networks. You agree not to reproduce, duplicate, copy, sell, resell or exploit any portion of the Service, use of the Service, or access to the Service or any contact on the website through which the service is provided, without express written permission by us.
                                <br>The headings used in this agreement are included for convenience only and will not limit or otherwise affect these Terms.
                            </p>
                        </div>
                        <div class = "faq-product terms" id = "sec3">
                            <h3>Section 3: Accuracy, Completeness and Timeliness of information</h3>
                            <p>
                                We are not responsible if information made available on this site is not accurate, complete or current. The material on this site is provided for general information only and should not be relied upon or used as the sole basis for making decisions without consulting primary, more accurate, more complete or more timely sources of information. Any reliance on the material on this site is at your own risk. This site may contain certain historical information. Historical information, necessarily, is not current and is provided for your reference only. We reserve the right to modify the contents of this site at any time, but we have no obligation to update any information on our site. You agree that it is your responsibility to monitor changes to our site.
                            </p>
                        </div>
                        <div class = "faq-product terms" id = "sec4">
                            <h3>Section 4: Modification to the service and prices</h3>
                            <p>
                                Prices for our products are subject to change without notice. We reserve the right at any time to modify or discontinue the Service (or any part or content thereof) without notice at any time.
                                <br>We shall not be liable to you or to any third-party for any modification, price change, suspension or discontinuance of the Service.
                            </p>
                        </div>
                        <div class = "faq-product terms" id = "sec5">
                            <h3>Section 5: Products or Services</h3>
                            <p>
                                Certain products or services may be available exclusively online through the website. These products or services may have limited quantities and are subject to return or exchange only according to our Return Policy. We have made every effort to display as accurately as possible the colors and images of our products that appear at the store. We cannot guarantee that your computer monitor's display of any color will be accurate. We reserve the right, but are not obligated, to limit the sales of our products or Services to any person, geographic region or jurisdiction. We may exercise this right on a case-by-case basis. We reserve the right to limit the quantities of any products or services that we offer. All descriptions of products or product pricing are subject to change at anytime without notice, at the sole discretion of us. We reserve the right to discontinue any product at any time. Any offer for any product or service made on this site is void where prohibited. We do not warrant that the quality of any products, services, information, or other material purchased or obtained by you will meet your expectations, or that any errors in the Service will be corrected.
                            </p>
                        </div>
                        <div class = "faq-product terms" id = "sec6">
                            <h3>Section 6: Accuracy of Billing and Account Information</h3>
                            <p>
                                We reserve the right to refuse any order you place with us. We may, in our sole discretion, limit or cancel quantities purchased per person, per household or per order. These restrictions may include orders placed by or under the same customer account, the same credit card, and/or orders that use the same billing and/or shipping address. In the event that we make a change to or cancel an order, we may attempt to notify you by contacting the e-mail and/or billing address/phone number provided at the time the order was made. We reserve the right to limit or prohibit orders that, in our sole judgment, appear to be placed by dealers, resellers or distributors.
                                <br>You agree to provide current, complete and accurate purchase and account information for all purchases made at our store. You agree to promptly update your account and other information, including your email address and credit card numbers and expiration dates, so that we can complete your transactions and contact you as needed.
                                <br>For more detail, please review our Returns Policy.
                            </p>
                        </div>
                        <div class = "faq-product terms" id = "sec7">
                            <h3>Section 7: Optional Tools</h3>
                            <p>
                                We may provide you with access to third-party tools over which we neither monitor nor have any control nor input. You acknowledge and agree that we provide access to such tools ”as is” and “as available” without any warranties, representations or conditions of any kind and without any endorsement. We shall have no liability whatsoever arising from or relating to your use of optional third-party tools. Any use by you of optional tools offered through the site is entirely at your own risk and discretion and you should ensure that you are familiar with and approve of the terms on which tools are provided by the relevant third-party provider(s). We may also, in the future, offer new services and/or features through the website (including, the release of new tools and resources). Such new features and/or services shall also be subject to these Terms of Service.
                            </p>
                        </div>
                        <div class = "faq-product terms" id = "sec8">
                            <h3>Section 8: Third-party Links</h3>
                            <p>
                                Certain content, products and services available via our Service may include materials from third-parties. Third-party links on this site may direct you to third-party websites that are not affiliated with us. We are not responsible for examining or evaluating the content or accuracy and we do not warrant and will not have any liability or responsibility for any third-party materials or websites, or for any other materials, products, or services of third-parties. We are not liable for any harm or damages related to the purchase or use of goods, services, resources, content, or any other transactions made in connection with any third-party websites. Please review carefully the third-party's policies and practices and make sure you understand them before you engage in any transaction. Complaints, claims, concerns, or questions regarding third-party products should be directed to the third-party.
                            </p>
                        </div>
                        <div class = "faq-product terms" id = "sec9">
                            <h3>Section 9: User Comments, feedback and other submissions</h3>
                            <p>
                                If, at our request, you send certain specific submissions (for example contest entries) or without a request from us you send creative ideas, suggestions, proposals, plans, or other materials, whether online, by email, by postal mail, or otherwise (collectively, 'comments'), you agree that we may, at any time, without restriction, edit, copy, publish, distribute, translate and otherwise use in any medium any comments that you forward to us. We are and shall be under no obligation (1) to maintain any comments in confidence; (2) to pay compensation for any comments; or (3) to respond to any comments. We may, but have no obligation to, monitor, edit or remove content that we determine in our sole discretion are unlawful, offensive, threatening, libelous, defamatory, pornographic, obscene or otherwise objectionable or violates any party’s intellectual property or these Terms of Service. You agree that your comments will not violate any right of any third-party, including copyright, trademark, privacy, personality or other personal or proprietary right. You further agree that your comments will not contain libelous or otherwise unlawful, abusive or obscene material, or contain any computer virus or other malware that could in any way affect the operation of the Service or any related website. You may not use a false e-mail address, pretend to be someone other than yourself, or otherwise mislead us or third-parties as to the origin of any comments. You are solely responsible for any comments you make and their accuracy. We take no responsibility and assume no liability for any comments posted by you or any third-party.
                            </p>
                        </div>
                        <div class = "faq-product terms" id = "sec10">
                            <h3>Section 10: Personal information</h3>
                            <p>
                                Your submission of personal information through the store is governed by our Privacy Policy.
                            </p>
                        </div>
                        <div class = "faq-product terms" id = "sec11">
                            <h3>Section 11: Errors, inaccuracies and omissions</h3>
                            <p>
                                Occasionally there may be information on our site or in the Service that contains typographical errors, inaccuracies or omissions that may relate to product descriptions, pricing, promotions, offers, product shipping charges, transit times and availability. We reserve the right to correct any errors, inaccuracies or omissions, and to change or update information or cancel orders if any information in the Service or on any related website is inaccurate at any time without prior notice (including after you have submitted your order). We undertake no obligation to update, amend or clarify information in the Service or on any related website, including without limitation, pricing information, except as required by law. No specified update or refresh date applied in the Service or on any related website, should be taken to indicate that all information in the Service or on any related website has been modified or updated.
                            </p>
                        </div>
                        <div class = "faq-product terms" id = "sec12">
                            <h3>Section 12: Prohibited uses</h3>
                            <p>
                                In addition to other prohibitions as set forth in the Terms of Service, you are prohibited from using the site or its content: (a) for any unlawful purpose; (b) to solicit others to perform or participate in any unlawful acts; (c) to violate any international, federal, provincial or state regulations, rules, laws, or local ordinances; (d) to infringe upon or violate our intellectual property rights or the intellectual property rights of others; (e) to harass, abuse, insult, harm, defame, slander, disparage, intimidate, or discriminate based on gender, sexual orientation, religion, ethnicity, race, age, national origin, or disability; (f) to submit false or misleading information; (g) to upload or transmit viruses or any other type of malicious code that will or may be used in any way that will affect the functionality or operation of the Service or of any related website, other websites, or the Internet; (h) to collect or track the personal information of others; (i) to spam, phish, pharm, pretext, spider, crawl, or scrape; (j) for any obscene or immoral purpose; or (k) to interfere with or circumvent the security features of the Service or any related website, other websites, or the Internet. We reserve the right to terminate your use of the Service or any related website for violating any of the prohibited uses.
                            </p>
                        </div>
                        <div class = "faq-product terms" id = "sec13">
                            <h3>Section 13: Disclaimer of Warranties; Limitation of Liability</h3>
                            <p>
                                We do not guarantee, represent or warrant that your use of our service will be uninterrupted, timely, secure or error-free. We do not warrant that the results that may be obtained from the use of the service will be accurate or reliable. You agree that from time to time we may remove the service for indefinite periods of time or cancel the service at any time, without notice to you. You expressly agree that your use of, or inability to use, the service is at your sole risk. The service and all products and services delivered to you through the service are (except as expressly stated by us) provided 'as is' and 'as available' for your use, without any representation, warranties or conditions of any kind, either express or implied, including all implied warranties or conditions of merchantability, merchantable quality, fitness for a particular purpose, durability, title, and non-infringement. In no case shall Thrift Fashion, our directors, officers, employees, affiliates, agents, contractors, interns, suppliers, service providers or licensors be liable for any injury, loss, claim, or any direct, indirect, incidental, punitive, special, or consequential damages of any kind, including, without limitation lost profits, lost revenue, lost savings, loss of data, replacement costs, or any similar damages, whether based in contract, tort (including negligence), strict liability or otherwise, arising from your use of any of the service or any products procured using the service, or for any other claim related in any way to your use of the service or any product, including, but not limited to, any errors or omissions in any content, or any loss or damage of any kind incurred as a result of the use of the service or any content (or product) posted, transmitted, or otherwise made available via the service, even if advised of their possibility. Because some states or jurisdictions do not allow the exclusion or the limitation of liability for consequential or incidental damages, in such states or jurisdictions, our liability shall be limited to the maximum extent permitted by law.
                            </p>
                        </div>
                        <div class = "faq-product terms" id = "sec14">
                            <h3>Section 14: Indemnification</h3>
                            <p>
                                You agree to indemnify, defend and hold harmless Thrift Fashion and our partners (Bergen .co, Bartlett .co and Bel Air.co), officers, directors, agents, contractors, licensors, service providers, subcontractors, suppliers, interns and employees, harmless from any claim or demand, including reasonable attorneys’ fees, made by any third-party due to or arising out of your breach of these Terms of Service or the documents they incorporate by reference, or your violation of any law or the rights of a third-party.
                            </p>
                        </div>
                        <div class = "faq-product terms" id = "sec15">
                            <h3>Section 15: Severability</h3>
                            <p>
                                In the event that any provision of these Terms of Service is determined to be unlawful, void or unenforceable, such provision shall nonetheless be enforceable to the fullest extent permitted by applicable law, and the unenforceable portion shall be deemed to be severed from these Terms of Service, such determination shall not affect the validity and enforceability of any other remaining provisions.
                            </p>
                        </div>
                        <div class = "faq-product terms" id = "sec16">
                            <h3>Section 16: Termination</h3>
                            <p>
                                The obligations and liabilities of the parties incurred prior to the termination date shall survive the termination of this agreement for all purposes. These Terms of Service are effective unless and until terminated by either you or us. You may terminate these Terms of Service at any time by notifying us that you no longer wish to use our Services, or when you cease using our site. If in our sole judgment you fail, or we suspect that you have failed, to comply with any term or provision of these Terms of Service, we also may terminate this agreement at any time without notice and you will remain liable for all amounts due up to and including the date of termination; and/or accordingly may deny you access to our Services (or any part thereof).
                            </p>
                        </div>
                        <div class = "faq-product terms" id = "sec17">
                            <h3>Section 17: Entire agreement</h3>
                            <p>
                                The failure of us to exercise or enforce any right or provision of these Terms of Service shall not constitute a waiver of such right or provision. These Terms of Service and any policies or operating rules posted by us on this site or in respect to The Service constitutes the entire agreement and understanding between you and us and govern your use of the Service, superseding any prior or contemporaneous agreements, communications and proposals, whether oral or written, between you and us (including, but not limited to, any prior versions of the Terms of Service).
                                <br>Any ambiguities in the interpretation of these Terms of Service shall not be construed against the drafting party.
                            </p>
                        </div>
                        <div class = "faq-product terms" id = "sec18">
                            <h3>Section 18: Governing Law</h3>
                            <p>
                                These Terms of Service and any separate agreements whereby we provide you Services shall be governed by and construed in accordance with the laws of
                                23rd Street SE, Hickory, NC
                            </p>
                        </div>
                        <div class = "faq-product terms" id = "sec19">
                            <h3>Section 19: Changes to Terms of Service</h3>
                            <p>
                                You can review the most current version of the Terms of Service at any time at this page.
                                <br>We reserve the right, at our sole discretion, to update, change or replace any part of these Terms of Service by posting updates and changes to our website. It is your responsibility to check our website periodically for changes. Your continued use of or access to our website or the Service following the posting of any changes to these Terms of Service constitutes acceptance of those changes.
                            </p>
                        </div>
                        <div class = "faq-product terms" id = "sec20">
                            <h3>Section 20: Contact Information</h3>
                            <p>
                                Questions about the Terms of Service should be sent to us at <a>contact@richfieldchairs.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
    var el1 = document.getElementById("help-list--list-item-1");
    var el2 = document.getElementById("help-list--list-item-2");
    var el3 = document.getElementById("help-list--list-item-3")
    var el4 = document.getElementById("help");
    var el5 = document.getElementById("policy");
    var el6 = document.getElementById("term");

    var arr1 = [el1, el2, el3];
    var arr2 = [el4, el5, el6];

    for (let i = 0; i < arr1.length; i++){
        arr1[i].addEventListener('click', function (){
            if (!arr1[i].classList.contains("active")){
                for (let i = 0; i < arr1.length; i++){
                    arr1[i].classList.remove("active");
                    arr2[i].classList.remove("active");
                }
                arr1[i].classList.add("active");
                arr2[i].classList.add("active");
            }
        })
    }
</script>

@endsection
