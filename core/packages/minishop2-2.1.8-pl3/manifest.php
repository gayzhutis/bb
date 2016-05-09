<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'changelog' => 'Changelog for miniShop2.

2.1.8 pl3
==============
- Fixed controllers for MODX 2.3.
- Fixed routes to processors for MODX 2.3.
- Fixed product getlist processor for MODX 2.3.
- Fixed sorting products in category grid by clicking on column header.
- Disabled Bootstrap icons for MODX 2.3.
- Fixed product gallery for MODX 2.3.
- Fixed issue with deleting product files children in MODX 2.3.
- Fixed "autocomplete_err_noquery" error in MODX 2.3.
- [#148] Fixed duplicate connector.
- Fixed work of "minishop2-combo-user" in MODX 2.3.

2.1.8 beta
==============
- Added field "name" in object msOrderProduct for storing pagetitle of the product.
- Fixed log level in PayPal method.
- Added integer field "type" to msOrder.
- Fixed CustomerProfile connection in schema.
- Improved price and weight formatting in orders table.
- Some UI improvements and fixes.

2.1.7 pl5
==============
- [#131] Fixed update of product thumb when you update thumbnails.
- [#129] [msGetOrder] Fixed setting of placeholders.
- Fixed work with comments on product panel.
- [msOrder] Now snippet loads "building", "room" and "comment" from extended field of users profile.
- [mgr] Fixed parameter "maxUploadSize" in gallery.

2.1.7 pl1
==============
- [#119] Improved compatibility with AjaxManager.
- [#118] Fixed negative cost in payment and delivery methods.
- [#113] Added Lithuanian lexicons.
- [#112] Restrict cart items to specific contexts.
- [#111] Fixed remove of products links.
- [#107] Fixed empty customer field if fullname is not specified.
- [#106] Additional check of friendly filename in gallery.
- New system setting "ms2_category_remember_grid".

2.1.6 pl4
==============
- [#110] Fix generate thumbs on upload for Amazon S3.
- Fixed counting money spent in new customers.
- [#104] Fixed placeholder [[+cart_weight]] in emails.
- [#102] Improved checking of thumbnails url.
- [#98] Refactored permissions in processors.
- [#94] Formatted placeholder [[+cost]] in snippet msCart
- [#78] Fixed setting flag isfolder to false for old category of the product.
- Fixed handling of non-ajax requests.
- Removed unnecessary ajax request on add to cart. Fixed possibly E_NOTICE.

2.1.5 pl
==============
- Improved rename of files in gallery.
- Added default media source in product "create" processor.
- Added default template in product "create" processor.
- Added buttons in orders management page.

2.1.4 pl5
==============
- Added script for import products in core/components/minishop2/import/csv.php.
- Fixed icons in chunks.
- [#95] Fixed price and weight format.
- Improved installator. Now you can update chunks on install.
- Fixed possible errors on thumbnail generation.
- Progressive thumbnails in gallery.

2.1.3 pl2
==============
- Support Bootstrap3.
- Fixed E_WARNING in snippet msOptions.
- Fixed bug with php-apc on create order.

2.1.2 pl2
==============
- Fixed possibly E_NOTICE in snippets.

2.1.2 pl
==============
- [#77] Fixed change type of existing resource to "msProduct".
- Added ability to hide tabs of product page in manager. See new system settings.
- Improved style of horizontal product tabs.
- Improved proportions in settings tab of category.
- Improved rename of product images.
- Improved retrieving of first thumbnail of image in gallery.
- If you specified wrong "ms2_product_thumbnail_size" parameter, gallery will still work.
- Added support of non-image files in gallery.
- Improved snippet "msGallery" for display non-image files.
- [#84] Fixed displaying of  email of vendor in manager.

2.1.1 pl2
==============
- Fixed parameter "&parents" in msProducts.

2.1.1 pl
==============
- Snippet msProducts supports pdoTools 1.8.0. Parameter "&showHidden" enabled by default.
- Fixed fatal error with "clearCache" when msProduct created trough processor and it`s parent is not msCategory.
- Improved generation of thumbnails.

2.1.1 pl
==============
- Fixed access permissions tab on product update.
- Fixed getPrice and getWeight calls in snippet msProducts.
- Improved xtype "minishop2-combo-user".
- Added support of component "msDiscount".
- Added counting of total spent sum by every customer in msCustomerProfile.

2.1.0 pl2
==============
- Fixed placeholders on msProduct page due to issues with @INLINE chunks.

2.1.0 pl1
==============
- Added new events: "msOnGetProductPrice" and "msOnGetProductWeight".
- Fixed wrong events in database from previous release.
- Changed "vendor_" to "vendor." in msProduct::toArray() for sameness with the snippet msProducts.
- Moved all logic from old action.php to new plugin. File leaved for compatibility with users modified javascript.

2.1.0 pl
==============
- Changed default sort in goods grid on "menuindex, ASC".
- Improved method msDelivery::getCost().
- Added method msPayment::getCost().
- Improved method msOrderHandler::getCost(). Now you can specify additional percent for delivery and payment in manager.
- New object "msCustomerProfile". It can be extended by plugins like "msProductData".
- Plugin "miniShop2" can automatic save referrers.
- In snippet "msProducts" you can override "where", "select", "leftJoin", "innerJoin" and "rightJoin" properties. Added pdoFetch 1.4.1 support.
- Improved other snippets.
- Added new fields in "msProductFile": "hash" for sha1 of file and json field "properties".
- Changed uploader in product gallery to "Plupload" (Thanks to Alex Rahimov).
- Added check for duplicate images in product gallery by checking hash of the content of file.
- Added new parameters for media source: "maxUploadWidth" and "maxUploadHeight" for frontend image resize.
- Gallery upload processor now can receive parameters "id" and "file" for external images upload.
- Added renaming files of product gallery together with thumbnails.
- [#77] Fixed changing type of existing resource to "msCategory".
- [#76] Fixed parameter "offset" in msGallery.
- [#75] Remove multi-category links when category removed.
- [#74] Refresh data in order from users profile if he is authenticated.
- [#73] Added virtual vendor fields. You can get it by $res->get(\'vendor_name\');
- [#66] Fixed saving payments methods when create a new delivery.
- [#65] Added new system events: "msOnBeforeValidateOrderValue" and "msOnValidateOrderValue".
- [#64] Added ability to stop switching order status from system plugin.
- [#63] Added new parameters for media source: "imageNameType". Switching to "friendly" will generate names for uploaded files by FURLs algorithm.
- [#61] Added ability to sort products in category by drag and drop.
- [#62] Fixed work with "*.gif" files in products gallery.
- [#59] Improved regular expression for email verification.
- [#59] Improved validation of customer name and email when create order.
- [#59] msOrderHandler::add() now can return an error.
- [#59] Improved registration of javascript on frontend.
- [#59] Improved show\\hide of msMiniCart with css.
- [#59] Refactored default frontend javascript.
- [#59] Works with no javascript. (Thanks to Alexey Kartashov)
- [#58] Fixed PayPal non-USD currency.
- [#56] Added JSON field "properties" to "msProductFile".
- [#52] Added ability to customize orders in manager by 3 system setting: "ms2_order_grid_fields", "ms2_order_address_fields" and "ms2_order_product_fields".
- [#50] Fixed checking of the existence of the Tickets component.
- [#5] Possible fixed "Cannot execute queries while other unbuffered queries are active" on php < 5.3.
- Some fixes for MySql STRICT_TRANS_TABLES mode.
- Updated jQuery to version 1.10.2
- Added method PayPal::getPaymentLink() for continuing interrupted payment process. You will see [[+payment_link]] in emails.
- Added parameters "&tplSingle" and "&toSeparatePlaceholders" to snippet msGallery.
- Gallery UI improvements for MODX 2.2.9
- Returned action.php for backward compatibility with the old javascript

2.0.1 pl3
==============
- Added german lexicon.
- Now you can specify version of file in "ms2_frontend_js".
- [#60] Fixed type of field "index" in "msOrder".
- Improved listing of products in the categories of manager.

2.0.1 pl2
==============
- Improved submit of order form.
- msProducts saves order of ids received through &resources=``. It need for smooth work with mSearch2.
- [mgr] Fixed search in vendors combo

2.0.1 pl1
==============
- Added loading of lexicons for 3rd party payment methods. They must be named in "msp.%name%.inc.php" format.
- Added placeholder [[+payment_link]] in the new user email. It will work only if payment method has function getPaymentLink(msOrder $order);
- Removed placeholder [[+id]] from product page because of issues.
- [#53] Completely refactored call and processing plugin events.
- [#45] Added system setting for specify default content of category.

2.0.1 pl
==============
- Added 2 new events on order remove: "msOnBeforeRemoveOrder" and "msOnRemoveOrder".
- Improved classes: "msProduct" and "msCategory". Now $modx->getCollection(\'msProduct\'); returns only products.

2.0.1 beta3
==============
- Fixed msGallery

2.0.1 beta2
==============
- [#44] Enabled duplicate of category.
- [#42] Added parameter "returnIds" to snippet msProducts.
- [#41] Fixed panel with tvs on product create.
- Parameter "resources" not suppressing "parents" in msProducts anymore. Now they working together: resources that are not in parents will not be returned.
- Snippet msGallery now can to display placeholders like [[+600x]] or [[+x600]].
- Fixed display an original image in msGallery. If upgrade, replace placeholders [[+image]] to [[+url]] in chunk "tpl.msGallery.row" manually.
- Added setting placeholder [[+idx]] to snippets msGallery and msProducts.
- Added parameter "where" in snippet msGallery, for specify JSON encoded string with additional query data.
- Added parameters "limit" and "offset" for pagination. msGallery can be used with getPage now.

2.0.1 beta1
==============
- Maybe fixed bug with php-apc and sessions
- Fixed plugin params on events "msOnBeforeCreateOrder" and "msOnCreateOrder". Now you can change $msOrder by link.
- Fixed error with no changing status of order in manager.

2.0.1 beta
==============
- [#38] Added "menuindex" in product fields.
- [#37] Ability to override method miniShop2::changeOrderStatus() in custom order class.
- [#36] Removed filter_var(), because of issues on stupid hostings.
- [#35] Added 2 system setting to enable or disable the remembering of panel tabs.
- [#32] Enabled displaying of errors when uploading files in product gallery.
- [#30] "miniShopManagerPolicy" is automatically assigned to a group "Administrators".
- [#29] Added verification of object instance, when loading neighborhood resources in manager.
- [#28] Returned the lost fields in images of msGallery.
- [#27] Improved ajax requests in default javascript.
- [#26] Improvements of categories tree.
- [#25] Removed replacing of empty alias to id. Added 2 system setting for switching using resource id as alias for categories and products.
- Fixed quick fields in snippet msOrder. Update your chunks for delivery and payment methods.
- Improved "totalVar" placeholder in snippet msGallery.
- Fixed model. Added proper primary keys for xPDOObjects.
- Ability to load only "miniShop2Config" object on frontend, without default javascript and jQuery.
- Fixed parameter "depth" in snippet "msProducts".
- New permissions for work with order: "save" and "view". New events for update order.
- Added ability to add\\update\\remove products in order.

2.0.0 pl3
==============
- Compatibility with pdoTools 1.2.0

2.0.0 pl2
==============
- [mgr] Fixed formatting of dates in category grid.
- [mgr] Fixed decimals in product category grid.
- Added ability to create system setting "ms2_cart_max_count" to override maximum number of products for one operation.
- Fixed placeholders in emails subjects.
- Fixed generation of thumbnails in gallery for working with ImageMagick.
- Fixed link type "Many to many".
- Fixed requirement of non-existing permission "update_document" in processors.
- Added system setting "ms2_price_snippet" for modification of product price.
- Added system setting "ms2_weight_snippet" for modification of product weight.
- Product key in msCartHandler now generates with using "$price" and "$weight", because they can be modified when adding to cart.

2.0.0 pl1
==============
- [mgr] Changing of product image now cleans its cache.
- [mgr] New icons in tree
- Small improvements of the snippets at initialization.
- Added selection of product links in snippet msProducts. See the new snippet properties.
- Added ability to use msProducts with any modResource class.
- Added property "tvPrefix" to msProducts for compatibility with getResources.
- Added property "outputSeparator" to snippets msOptions and msProducts.
- Added system parameter "ms2_price_format" for specifying how to format price of product.
- Added system parameter "ms2_price_format_no_zeros" for optional removing extra zeros at the end of price.
- Added system parameter "ms2_weight_format" for specifying how to format weight of product.
- Added system parameter "ms2_weight_format_no_zeros" for optional removing extra zeros at the end of weight.

2.0.0 rc6
==============
- Fixed cleaning pdoTools in msGallery
- Improved saving payment method in order when quickly switch delivery.

2.0.0 rc5
==============
- Integration of PayPal express-checkout payment method.

2.0.0 rc4
==============
- Fixed bugs in snippets
- Fixed joining images by rank when includeThumbs.

2.0.0 rc
==============
- [mgr] Added displaying of nested products in categories. System setting "ms2_category_show_nested_products" can disable it.
- [mgr] Added the ability to link products together.
- [mgr] Added link to resource from ordered products.
- [mgr] Added ability to specify web document for Vendor by property "resource".
- [#6] Fixed error when order makes authenticated user without email.
- [#8] Fixed remove of order.
- [#9] Fixed date formatting in manager for working in Firefox.
- [#10] Added checking for negative value of adding products in cart.
- [#12] Added regeneration site maps after new product create.
- [#14] Added check of "register_globals" on cart/add.
- Added system setting "ms2_product_thumbnail_size" for setting default size of product thumbnail.
- Added vendor placeholders on product page. Now you can use [[+vendor.name]], [[+vendor.logo]] etc.
- Added beta scripts for console converting miniShop1 to miniShop2.
- Added partial french translation.
- Added method miniShop2::getTagged() from MS1.
- Added ability to load plugins, that can add new or overload existing product fields in model and manager.
- Added parameters for joining thumbnails and tvs in snippets msProducts, msCart and msGetOrder.
- Improved save of product options.
- Fixed automatic install of pdoTools.
- Fixed fetching images in snippet msGallery
- Other fixes and improvements.

2.0.0 beta-1
==============
- Added manager pages
- Added create and manage orders

2.0.0 beta-0
==============
- Initial release.',
    'license' => 'GNU GENERAL PUBLIC LICENSE
   Version 2, June 1991
--------------------------

Copyright (C) 1989, 1991 Free Software Foundation, Inc.
59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

Everyone is permitted to copy and distribute verbatim copies
of this license document, but changing it is not allowed.

Preamble
--------

  The licenses for most software are designed to take away your
freedom to share and change it.  By contrast, the GNU General Public
License is intended to guarantee your freedom to share and change free
software--to make sure the software is free for all its users.  This
General Public License applies to most of the Free Software
Foundation\'s software and to any other program whose authors commit to
using it.  (Some other Free Software Foundation software is covered by
the GNU Library General Public License instead.)  You can apply it to
your programs, too.

  When we speak of free software, we are referring to freedom, not
price.  Our General Public Licenses are designed to make sure that you
have the freedom to distribute copies of free software (and charge for
this service if you wish), that you receive source code or can get it
if you want it, that you can change the software or use pieces of it
in new free programs; and that you know you can do these things.

  To protect your rights, we need to make restrictions that forbid
anyone to deny you these rights or to ask you to surrender the rights.
These restrictions translate to certain responsibilities for you if you
distribute copies of the software, or if you modify it.

  For example, if you distribute copies of such a program, whether
gratis or for a fee, you must give the recipients all the rights that
you have.  You must make sure that they, too, receive or can get the
source code.  And you must show them these terms so they know their
rights.

  We protect your rights with two steps: (1) copyright the software, and
(2) offer you this license which gives you legal permission to copy,
distribute and/or modify the software.

  Also, for each author\'s protection and ours, we want to make certain
that everyone understands that there is no warranty for this free
software.  If the software is modified by someone else and passed on, we
want its recipients to know that what they have is not the original, so
that any problems introduced by others will not reflect on the original
authors\' reputations.

  Finally, any free program is threatened constantly by software
patents.  We wish to avoid the danger that redistributors of a free
program will individually obtain patent licenses, in effect making the
program proprietary.  To prevent this, we have made it clear that any
patent must be licensed for everyone\'s free use or not licensed at all.

  The precise terms and conditions for copying, distribution and
modification follow.


GNU GENERAL PUBLIC LICENSE
TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION
---------------------------------------------------------------

  0. This License applies to any program or other work which contains
a notice placed by the copyright holder saying it may be distributed
under the terms of this General Public License.  The "Program", below,
refers to any such program or work, and a "work based on the Program"
means either the Program or any derivative work under copyright law:
that is to say, a work containing the Program or a portion of it,
either verbatim or with modifications and/or translated into another
language.  (Hereinafter, translation is included without limitation in
the term "modification".)  Each licensee is addressed as "you".

Activities other than copying, distribution and modification are not
covered by this License; they are outside its scope.  The act of
running the Program is not restricted, and the output from the Program
is covered only if its contents constitute a work based on the
Program (independent of having been made by running the Program).
Whether that is true depends on what the Program does.

  1. You may copy and distribute verbatim copies of the Program\'s
source code as you receive it, in any medium, provided that you
conspicuously and appropriately publish on each copy an appropriate
copyright notice and disclaimer of warranty; keep intact all the
notices that refer to this License and to the absence of any warranty;
and give any other recipients of the Program a copy of this License
along with the Program.

You may charge a fee for the physical act of transferring a copy, and
you may at your option offer warranty protection in exchange for a fee.

  2. You may modify your copy or copies of the Program or any portion
of it, thus forming a work based on the Program, and copy and
distribute such modifications or work under the terms of Section 1
above, provided that you also meet all of these conditions:

    a) You must cause the modified files to carry prominent notices
    stating that you changed the files and the date of any change.

    b) You must cause any work that you distribute or publish, that in
    whole or in part contains or is derived from the Program or any
    part thereof, to be licensed as a whole at no charge to all third
    parties under the terms of this License.

    c) If the modified program normally reads commands interactively
    when run, you must cause it, when started running for such
    interactive use in the most ordinary way, to print or display an
    announcement including an appropriate copyright notice and a
    notice that there is no warranty (or else, saying that you provide
    a warranty) and that users may redistribute the program under
    these conditions, and telling the user how to view a copy of this
    License.  (Exception: if the Program itself is interactive but
    does not normally print such an announcement, your work based on
    the Program is not required to print an announcement.)

These requirements apply to the modified work as a whole.  If
identifiable sections of that work are not derived from the Program,
and can be reasonably considered independent and separate works in
themselves, then this License, and its terms, do not apply to those
sections when you distribute them as separate works.  But when you
distribute the same sections as part of a whole which is a work based
on the Program, the distribution of the whole must be on the terms of
this License, whose permissions for other licensees extend to the
entire whole, and thus to each and every part regardless of who wrote it.

Thus, it is not the intent of this section to claim rights or contest
your rights to work written entirely by you; rather, the intent is to
exercise the right to control the distribution of derivative or
collective works based on the Program.

In addition, mere aggregation of another work not based on the Program
with the Program (or with a work based on the Program) on a volume of
a storage or distribution medium does not bring the other work under
the scope of this License.

  3. You may copy and distribute the Program (or a work based on it,
under Section 2) in object code or executable form under the terms of
Sections 1 and 2 above provided that you also do one of the following:

    a) Accompany it with the complete corresponding machine-readable
    source code, which must be distributed under the terms of Sections
    1 and 2 above on a medium customarily used for software interchange; or,

    b) Accompany it with a written offer, valid for at least three
    years, to give any third party, for a charge no more than your
    cost of physically performing source distribution, a complete
    machine-readable copy of the corresponding source code, to be
    distributed under the terms of Sections 1 and 2 above on a medium
    customarily used for software interchange; or,

    c) Accompany it with the information you received as to the offer
    to distribute corresponding source code.  (This alternative is
    allowed only for noncommercial distribution and only if you
    received the program in object code or executable form with such
    an offer, in accord with Subsection b above.)

The source code for a work means the preferred form of the work for
making modifications to it.  For an executable work, complete source
code means all the source code for all modules it contains, plus any
associated interface definition files, plus the scripts used to
control compilation and installation of the executable.  However, as a
special exception, the source code distributed need not include
anything that is normally distributed (in either source or binary
form) with the major components (compiler, kernel, and so on) of the
operating system on which the executable runs, unless that component
itself accompanies the executable.

If distribution of executable or object code is made by offering
access to copy from a designated place, then offering equivalent
access to copy the source code from the same place counts as
distribution of the source code, even though third parties are not
compelled to copy the source along with the object code.

  4. You may not copy, modify, sublicense, or distribute the Program
except as expressly provided under this License.  Any attempt
otherwise to copy, modify, sublicense or distribute the Program is
void, and will automatically terminate your rights under this License.
However, parties who have received copies, or rights, from you under
this License will not have their licenses terminated so long as such
parties remain in full compliance.

  5. You are not required to accept this License, since you have not
signed it.  However, nothing else grants you permission to modify or
distribute the Program or its derivative works.  These actions are
prohibited by law if you do not accept this License.  Therefore, by
modifying or distributing the Program (or any work based on the
Program), you indicate your acceptance of this License to do so, and
all its terms and conditions for copying, distributing or modifying
the Program or works based on it.

  6. Each time you redistribute the Program (or any work based on the
Program), the recipient automatically receives a license from the
original licensor to copy, distribute or modify the Program subject to
these terms and conditions.  You may not impose any further
restrictions on the recipients\' exercise of the rights granted herein.
You are not responsible for enforcing compliance by third parties to
this License.

  7. If, as a consequence of a court judgment or allegation of patent
infringement or for any other reason (not limited to patent issues),
conditions are imposed on you (whether by court order, agreement or
otherwise) that contradict the conditions of this License, they do not
excuse you from the conditions of this License.  If you cannot
distribute so as to satisfy simultaneously your obligations under this
License and any other pertinent obligations, then as a consequence you
may not distribute the Program at all.  For example, if a patent
license would not permit royalty-free redistribution of the Program by
all those who receive copies directly or indirectly through you, then
the only way you could satisfy both it and this License would be to
refrain entirely from distribution of the Program.

If any portion of this section is held invalid or unenforceable under
any particular circumstance, the balance of the section is intended to
apply and the section as a whole is intended to apply in other
circumstances.

It is not the purpose of this section to induce you to infringe any
patents or other property right claims or to contest validity of any
such claims; this section has the sole purpose of protecting the
integrity of the free software distribution system, which is
implemented by public license practices.  Many people have made
generous contributions to the wide range of software distributed
through that system in reliance on consistent application of that
system; it is up to the author/donor to decide if he or she is willing
to distribute software through any other system and a licensee cannot
impose that choice.

This section is intended to make thoroughly clear what is believed to
be a consequence of the rest of this License.

  8. If the distribution and/or use of the Program is restricted in
certain countries either by patents or by copyrighted interfaces, the
original copyright holder who places the Program under this License
may add an explicit geographical distribution limitation excluding
those countries, so that distribution is permitted only in or among
countries not thus excluded.  In such case, this License incorporates
the limitation as if written in the body of this License.

  9. The Free Software Foundation may publish revised and/or new versions
of the General Public License from time to time.  Such new versions will
be similar in spirit to the present version, but may differ in detail to
address new problems or concerns.

Each version is given a distinguishing version number.  If the Program
specifies a version number of this License which applies to it and "any
later version", you have the option of following the terms and conditions
either of that version or of any later version published by the Free
Software Foundation.  If the Program does not specify a version number of
this License, you may choose any version ever published by the Free Software
Foundation.

  10. If you wish to incorporate parts of the Program into other free
programs whose distribution conditions are different, write to the author
to ask for permission.  For software which is copyrighted by the Free
Software Foundation, write to the Free Software Foundation; we sometimes
make exceptions for this.  Our decision will be guided by the two goals
of preserving the free status of all derivatives of our free software and
of promoting the sharing and reuse of software generally.

NO WARRANTY
-----------

  11. BECAUSE THE PROGRAM IS LICENSED FREE OF CHARGE, THERE IS NO WARRANTY
FOR THE PROGRAM, TO THE EXTENT PERMITTED BY APPLICABLE LAW.  EXCEPT WHEN
OTHERWISE STATED IN WRITING THE COPYRIGHT HOLDERS AND/OR OTHER PARTIES
PROVIDE THE PROGRAM "AS IS" WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESSED
OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE.  THE ENTIRE RISK AS
TO THE QUALITY AND PERFORMANCE OF THE PROGRAM IS WITH YOU.  SHOULD THE
PROGRAM PROVE DEFECTIVE, YOU ASSUME THE COST OF ALL NECESSARY SERVICING,
REPAIR OR CORRECTION.

  12. IN NO EVENT UNLESS REQUIRED BY APPLICABLE LAW OR AGREED TO IN WRITING
WILL ANY COPYRIGHT HOLDER, OR ANY OTHER PARTY WHO MAY MODIFY AND/OR
REDISTRIBUTE THE PROGRAM AS PERMITTED ABOVE, BE LIABLE TO YOU FOR DAMAGES,
INCLUDING ANY GENERAL, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES ARISING
OUT OF THE USE OR INABILITY TO USE THE PROGRAM (INCLUDING BUT NOT LIMITED
TO LOSS OF DATA OR DATA BEING RENDERED INACCURATE OR LOSSES SUSTAINED BY
YOU OR THIRD PARTIES OR A FAILURE OF THE PROGRAM TO OPERATE WITH ANY OTHER
PROGRAMS), EVEN IF SUCH HOLDER OR OTHER PARTY HAS BEEN ADVISED OF THE
POSSIBILITY OF SUCH DAMAGES.

---------------------------
END OF TERMS AND CONDITIONS',
    'readme' => '--------------------
miniShop2
--------------------
Author: Vasiliy Naumkin <bezumkin@yandex.ru>
--------------------

Feel free to suggest ideas/improvements/bugs on GitHub:
http://github.com/bezumkin/miniShop2/issues',
    'chunks' => 
    array (
      'msProduct.content' => '<h1>[[*pagetitle]]</h1>
<div id="msProduct" class="row">
	<div class="span5 col-md-5">
		[[!msGallery]]
	</div>
	<div class="span7 col-md-7">
		<form class="form-horizontal ms2_form" method="post">
			<input type="hidden" name="id" value="[[*id]]" />
			<div class="form-group">
				<label class="col-sm-2 control-label">[[%ms2_product_article]]:</label>
				<div class="col-sm-3">
					<label class="checkbox">
						[[+article]]
					</label>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">[[%ms2_product_price]]:</label>
				<div class="col-sm-3">
					<label class="checkbox">
						[[!+price]] [[%ms2_frontend_currency]]
						[[!+old_price:gt=`0`:then=`<span class="old_price">[[+old_price]] [[%ms2_frontend_currency]]</span>`:else=``]]
					</label>
				</div>
			</div>
			<div class="form-group form-inline">
				<label class="col-sm-2 control-label" for="product_price">[[%ms2_cart_count]]:</label>
				<div class="col-sm-3">
					<input type="number" name="count" id="product_price" class="input-sm form-control" value="1" />
					[[%ms2_frontend_count_unit]]
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">[[%ms2_product_weight]]:</label>
				<div class="col-sm-3">
					<label class="checkbox">[[+weight]] [[%ms2_frontend_weight_unit]]</label>
				</div>
			</div>
			[[!msOptions?name=`color`]]
			[[!msOptions?name=`size`]]
			[[-!msOptions?name=`tags`&tplRow=``&tplOuter=``]]
			<div class="form-group">
				<label class="col-sm-2 control-label">[[%ms2_product_made_in]]:</label>
				<div class="col-sm-3">
					<label class="checkbox">[[+made_in]]</label>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-3">
					<button type="submit" class="btn btn-default" name="ms2_action" value="cart/add"><i class="glyphicon glyphicon-barcode"></i> [[%ms2_frontend_add_to_cart]]</button>
				</div>
			</div>
		</form>

	</div>
</div>
[[*content]]',
      'tpl.msCart.empty' => '[[%ms2_cart_is_empty]]',
      'tpl.msCart.outer' => '<div id="msCart">
	<table class="table table-striped">
		<tr class="header">
			<th class="image span2 col-md-2">&nbsp;</th>
			<th class="title span4 col-md-4">[[%ms2_cart_title]]</th>
			<th class="count span2 col-md-2">[[%ms2_cart_count]]</th>
			<th class="weight span1 col-md-1">[[%ms2_cart_weight]]</th>
			<th class="price span1 col-md-1">[[%ms2_cart_price]]</th>
			<th class="remove span2 col-md-2">[[%ms2_cart_remove]]</th>
		</tr>
		[[+goods]]
		<tr class="footer">
			<th class="total" colspan="2">[[%ms2_cart_total]]:</th>
			<th class="total_count"><span class="ms2_total_count">[[+total_count]]</span> [[%ms2_frontend_count_unit]]</th>
			<th class="total_weight"><span class="ms2_total_weight">[[+total_weight]]</span> [[%ms2_frontend_weight_unit]]</th>
			<th class="total_cost"><span class="ms2_total_cost">[[+total_cost]]</span> [[%ms2_frontend_currency]]</th>
			<th>&nbsp;</th>
		</tr>
	</table>
	<form method="post">
		<button class="btn btn-default" type="submit" name="ms2_action" value="cart/clean" title="[[%ms2_cart_clean]]"><i class="glyphicon glyphicon-remove"></i> [[%ms2_cart_clean]]</button>
	</form>
</div>',
      'tpl.msCart.row' => '<tr id="[[+key]]">
	<td class="image"><img src="[[+thumb:default=`[[++assets_url]]components/minishop2/img/web/ms2_small.png`]]" /></td>
	<td class="title"><a href="[[~[[+id]]]]">[[+pagetitle]]</a><br/>
		<small><i>[[+option.color]] [[+option.size]]</i></small>
	</td>
	<td class="count">
		<form method="post" class="ms2_form form-inline" role="form">
			<input type="hidden" name="key" value="[[+key]]" />
			<div class="form-group">
				<input type="number" name="count" value="[[+count]]" max-legth="4" class="input-sm form-control" />
				[[%ms2_frontend_count_unit]]
				<button class="btn btn-default" type="submit" name="ms2_action" value="cart/change"><i class="glyphicon glyphicon-refresh"></i></button>
			</div>
		</form>
	</td>
	<td class="weight"><span>[[+weight]]</span> [[%ms2_frontend_weight_unit]]</td>
	<td class="price"><span>[[+price]]</span> [[%ms2_frontend_currency]][[+old_price]]</td>
	<td class="remove">
		<form method="post" class="ms2_form">
			<input type="hidden" name="key" value="[[+key]]">
			<button class="btn btn-default" type="submit" name="ms2_action" value="cart/remove" title="[[%ms2_cart_remove]]"><i class="glyphicon glyphicon-remove"></i></button>
		</form>
	</td>
</tr>
<!--minishop2_option.color [[%ms2_frontend_color]]: [[+option.color]];-->
<!--minishop2_option.size [[%ms2_frontend_size]]: [[+option.size]];-->
<!--minishop2_old_price <br/><span class="old_price">[[+old_price]] [[%ms2_frontend_currency]]</span>-->',
      'tpl.msEmail.cancelled.user' => '[[!msGetOrder?id=`[[+id]]`]]

<h3>[[%ms2_email_subject_cancelled_user]]</h3>

<div id="msCart">
	<table class="table table-striped">
		<tr class="header">
			<th class="image span2 col-md-2">&nbsp;</th>
			<th class="title span4 col-md-4">[[%ms2_cart_title]]</th>
			<th class="count span2 col-md-2">[[%ms2_cart_count]]</th>
			<th class="weight span1 col-md-1">[[%ms2_cart_weight]]</th>
			<th class="price span1 col-md-1">[[%ms2_cart_cost]]</th>
		</tr>
		[[+goods]]
		<tr class="footer">
			<th class="total" colspan="2">[[%ms2_cart_total]]:</th>
			<th class="total_count"><span class="ms2_total_count">[[+cart_count]]</span> [[%ms2_frontend_count_unit]]</th>
			<th class="total_weight"><span class="ms2_total_weight">[[+cart_weight]]</span> [[%ms2_frontend_weight_unit]]</th>
			<th class="total_cost"><span class="ms2_total_cost">[[+cart_cost]]</span> [[%ms2_frontend_currency]]</th>
		</tr>
	</table>
	<h4>[[%ms2_frontend_order_cost]]: [[+cart_cost]] [[%ms2_frontend_currency]] + [[+delivery_cost]] [[%ms2_frontend_currency]] = <big>[[+cost]]</big> [[%ms2_frontend_currency]]</h4>
</div>',
      'tpl.msEmail.new.manager' => '[[!msGetOrder?id=`[[+id]]`]]

<h3>[[%ms2_email_subject_new_manager]]</h3>

<div id="msCart">
	<table class="table table-striped">
		<tr class="header">
			<th class="image span2 col-md-2">&nbsp;</th>
			<th class="title span4 col-md-4">[[%ms2_cart_title]]</th>
			<th class="count span2 col-md-2">[[%ms2_cart_count]]</th>
			<th class="weight span1 col-md-1">[[%ms2_cart_weight]]</th>
			<th class="price span1 col-md-1">[[%ms2_cart_cost]]</th>
		</tr>
		[[+goods]]
		<tr class="footer">
			<th class="total" colspan="2">[[%ms2_cart_total]]:</th>
			<th class="total_count"><span class="ms2_total_count">[[+cart_count]]</span> [[%ms2_frontend_count_unit]]</th>
			<th class="total_weight"><span class="ms2_total_weight">[[+cart_weight]]</span> [[%ms2_frontend_weight_unit]]</th>
			<th class="total_cost"><span class="ms2_total_cost">[[+cart_cost]]</span> [[%ms2_frontend_currency]]</th>
		</tr>
	</table>
	<h4>[[%ms2_frontend_order_cost]]: [[+cart_cost]] [[%ms2_frontend_currency]] + [[+delivery_cost]] [[%ms2_frontend_currency]] = <big>[[+cost]]</big> [[%ms2_frontend_currency]]</h4>
</div>',
      'tpl.msEmail.new.user' => '[[!msGetOrder?id=`[[+id]]`]]

<h3>[[%ms2_email_subject_new_user]]</h3>

<div id="msCart">
	<table class="table table-striped">
		<tr class="header">
			<th class="image span2 col-md-2">&nbsp;</th>
			<th class="title span4 col-md-4">[[%ms2_cart_title]]</th>
			<th class="count span2 col-md-2">[[%ms2_cart_count]]</th>
			<th class="weight span1 col-md-1">[[%ms2_cart_weight]]</th>
			<th class="price span1 col-md-1">[[%ms2_cart_cost]]</th>
		</tr>
		[[+goods]]
		<tr class="footer">
			<th class="total" colspan="2">[[%ms2_cart_total]]:</th>
			<th class="total_count"><span class="ms2_total_count">[[+cart_count]]</span> [[%ms2_frontend_count_unit]]</th>
			<th class="total_weight"><span class="ms2_total_weight">[[+cart_weight]]</span> [[%ms2_frontend_weight_unit]]</th>
			<th class="total_cost"><span class="ms2_total_cost">[[+cart_cost]]</span> [[%ms2_frontend_currency]]</th>
		</tr>
	</table>
	<h4>[[%ms2_frontend_order_cost]]: [[+cart_cost]] [[%ms2_frontend_currency]] + [[+delivery_cost]] [[%ms2_frontend_currency]] = <big>[[+cost]]</big> [[%ms2_frontend_currency]]</h4>
</div>

[[+payment_link]]',
      'tpl.msEmail.paid.manager' => '[[!msGetOrder?id=`[[+id]]`]]

<h3>[[%ms2_email_subject_paid_manager]]</h3>

<div id="msCart">
	<table class="table table-striped">
		<tr class="header">
			<th class="image span2 col-md-2">&nbsp;</th>
			<th class="title span4 col-md-4">[[%ms2_cart_title]]</th>
			<th class="count span2 col-md-2">[[%ms2_cart_count]]</th>
			<th class="weight span1 col-md-1">[[%ms2_cart_weight]]</th>
			<th class="price span1 col-md-1">[[%ms2_cart_cost]]</th>
		</tr>
		[[+goods]]
		<tr class="footer">
			<th class="total" colspan="2">[[%ms2_cart_total]]:</th>
			<th class="total_count"><span class="ms2_total_count">[[+cart_count]]</span> [[%ms2_frontend_count_unit]]</th>
			<th class="total_weight"><span class="ms2_total_weight">[[+cart_weight]]</span> [[%ms2_frontend_weight_unit]]</th>
			<th class="total_cost"><span class="ms2_total_cost">[[+cart_cost]]</span> [[%ms2_frontend_currency]]</th>
		</tr>
	</table>
	<h4>[[%ms2_frontend_order_cost]]: [[+cart_cost]] [[%ms2_frontend_currency]] + [[+delivery_cost]] [[%ms2_frontend_currency]] = <big>[[+cost]]</big> [[%ms2_frontend_currency]]</h4>
</div>',
      'tpl.msEmail.paid.user' => '[[!msGetOrder?id=`[[+id]]`]]

<h3>[[%ms2_email_subject_paid_user]]</h3>

<div id="msCart">
	<table class="table table-striped">
		<tr class="header">
			<th class="image span2 col-md-2">&nbsp;</th>
			<th class="title span4 col-md-4">[[%ms2_cart_title]]</th>
			<th class="count span2 col-md-2">[[%ms2_cart_count]]</th>
			<th class="weight span1 col-md-1">[[%ms2_cart_weight]]</th>
			<th class="price span1 col-md-1">[[%ms2_cart_cost]]</th>
		</tr>
		[[+goods]]
		<tr class="footer">
			<th class="total" colspan="2">[[%ms2_cart_total]]:</th>
			<th class="total_count"><span class="ms2_total_count">[[+cart_count]]</span> [[%ms2_frontend_count_unit]]</th>
			<th class="total_weight"><span class="ms2_total_weight">[[+cart_weight]]</span> [[%ms2_frontend_weight_unit]]</th>
			<th class="total_cost"><span class="ms2_total_cost">[[+cart_cost]]</span> [[%ms2_frontend_currency]]</th>
		</tr>
	</table>
	<h4>[[%ms2_frontend_order_cost]]: [[+cart_cost]] [[%ms2_frontend_currency]] + [[+delivery_cost]] [[%ms2_frontend_currency]] = <big>[[+cost]]</big> [[%ms2_frontend_currency]]</h4>
</div>',
      'tpl.msEmail.sent.user' => '[[!msGetOrder?id=`[[+id]]`]]

<h3>[[%ms2_email_subject_sent_user]]</h3>

<div id="msCart">
	<table class="table table-striped">
		<tr class="header">
			<th class="image span2 col-md-2">&nbsp;</th>
			<th class="title span4 col-md-4">[[%ms2_cart_title]]</th>
			<th class="count span2 col-md-2">[[%ms2_cart_count]]</th>
			<th class="weight span1 col-md-1">[[%ms2_cart_weight]]</th>
			<th class="price span1 col-md-1">[[%ms2_cart_cost]]</th>
		</tr>
		[[+goods]]
		<tr class="footer">
			<th class="total" colspan="2">[[%ms2_cart_total]]:</th>
			<th class="total_count"><span class="ms2_total_count">[[+cart_count]]</span> [[%ms2_frontend_count_unit]]</th>
			<th class="total_weight"><span class="ms2_total_weight">[[+cart_weight]]</span> [[%ms2_frontend_weight_unit]]</th>
			<th class="total_cost"><span class="ms2_total_cost">[[+cart_cost]]</span> [[%ms2_frontend_currency]]</th>
		</tr>
	</table>
	<h4>[[%ms2_frontend_order_cost]]: [[+cart_cost]] [[%ms2_frontend_currency]] + [[+delivery_cost]] [[%ms2_frontend_currency]] = <big>[[+cost]]</big> [[%ms2_frontend_currency]]</h4>
</div>',
      'tpl.msGallery.empty' => '<div id="msGallery">
	<img src="[[++assets_url]]components/minishop2/img/web/ms2_medium.png" width="360" height="270" alt="no photo" title="" />
</div>',
      'tpl.msGallery.outer' => '<div id="msGallery">
	<a rel="fancybox" href="[[+url:default=`/assets/components/minishop2/img/web/ms2_big.png`]]" target="_blank">
		<img src="[[+360x270:default=`/assets/components/minishop2/img/web/ms2_medium.png`]]" width="360" height="270" alt="" title="" id="mainImage" />
	</a>
	<div class="row">
		[[+rows]]
	</div>
</div>',
      'tpl.msGallery.row' => '<div class="span2 col-md-2">
	<a href="[[+360x270:default=`[[+url]]`]]" class="thumbnail" data-image="[[+url]]">
		<img src="[[+120x90]]" alt="" title="[[+name]]" width="120" height="90">
	</a>
</div>',
      'tpl.msGetOrder.row' => '<tr>
	<td class="image"><img src="[[++site_url]][[+thumb:default=`[[++assets_url]]components/minishop2/img/web/ms2_small.png`]]" /></td>
	<td class="title">[[+link:isnot=``:then=`<a href="[[+link]]">[[+name]]</a>`:else=`[[+name]]`]]<br/>
		<small><i>[[+option.color]] [[+option.size]]</i></small>
	</td>
	<td class="count">[[+count]] [[%ms2_frontend_count_unit]]</td>
	<td class="weight">[[+weight]] [[%ms2_frontend_weight_unit]]</td>
	<td class="price">[[+price]] [[%ms2_frontend_currency]]</td>
</tr>
<!--minishop2_option.color [[%ms2_frontend_color]]: [[+option.color]];-->
<!--minishop2_option.size [[%ms2_frontend_size]]: [[+option.size]];-->
',
      'tpl.msMiniCart' => '<div id="msMiniCart" [[+total_count:isnot=`0`:then=`class="full"`:else=``]]>
	<div class="empty">
		<h5><i class="glyphicon glyphicon-shopping-cart"></i> [[%ms2_minicart]]</h5>
		[[%ms2_minicart_is_empty]]
	</div>
	<div class="not_empty">
		<h5><i class="glyphicon glyphicon-shopping-cart"></i> [[%ms2_minicart]]</h5>
		[[%ms2_minicart_goods]]: <strong class="ms2_total_count">[[+total_count]]</strong> [[%ms2_frontend_count_unit]],
		[[%ms2_minicart_cost]]: <strong class="ms2_total_cost">[[+total_cost]]</strong> [[%ms2_frontend_currency]]
	</div>
</div>',
      'tpl.msOptions.outer' => '<div class="form-group">
	<label class="col-sm-2 control-label">[[%ms2_product_[[+name]]]]:</label>
	<div class="col-sm-3">
		<select name="options[[[+name]]]" class="form-control">[[+rows]]</select>
	</div>
</div>',
      'tpl.msOptions.row' => '<option value="[[+value]]" [[+selected]]>[[+value]]</option>',
      'tpl.msOrder.delivery' => '<div class="checkbox">
	<label class="delivery input-parent">
		<input type="radio" name="delivery" value="[[+id]]" id="delivery_[[+id]]" data-payments=\'[[+payments]]\' [[+checked]]>
		[[+logo:default=`[[+name]]`]] <!--&mdash; <i>[[+price]] [[%ms2_frontend_currency]]</i>-->
		[[+description]]
	</label>
</div>
<!--minishop2_logo <img src="[[+logo]]" />-->
<!--minishop2_description <p><small>[[+description]]</small></p>-->',
      'tpl.msOrder.outer' => '<form class="form-horizontal ms2_form" id="msOrder" method="post">
	<div class="row">
		<div class="span6 col-md-6">
			<h4>[[%ms2_frontend_credentials]]:</h4>
			<div class="form-group input-parent">
				<label class="col-sm-4 control-label" for="email"><span class="required-star">*</span> [[%ms2_frontend_email]]</label>
				<div class="col-sm-6">
					<input type="email" id="email" placeholder="[[%ms2_frontend_email]]" name="email" value="[[+email]]" class="form-control [[+errors.email]]">
				</div>
			</div>
			<div class="form-group input-parent">
				<label class="col-sm-4 control-label"  for="receiver"><span class="required-star">*</span> [[%ms2_frontend_receiver]]</label>
				<div class="col-sm-6">
					<input type="text" id="receiver" placeholder="[[%ms2_frontend_receiver]]" name="receiver" value="[[+receiver]]" class="form-control [[+errors.receiver]]">
				</div>
			</div>
			<div class="form-group input-parent">
				<label class="col-sm-4 control-label"  for="phone"><span class="required-star">*</span> [[%ms2_frontend_phone]]</label>
				<div class="col-sm-6">
					<input type="text" id="phone" placeholder="[[%ms2_frontend_phone]]" name="phone" value="[[+phone]]" class="form-control [[+errors.phone]]">
				</div>
			</div>
			<div class="form-group input-parent">
				<label class="col-sm-4 control-label"  for="comment"><span class="required-star">*</span> [[%ms2_frontend_comment]]</label>
				<div class="col-sm-6">
					<textarea name="comment" id="comment" placeholder="[[%ms2_frontend_comment]]" class="form-control [[+errors.comment]]">[[+comment]]</textarea>
				</div>
			</div>
		</div>
		<div class="span6 col-md-6" id="payments">
			<h4>[[%ms2_frontend_payments]]:</h4>
			<div class="form-group">
				<label class="col-sm-4 control-label" ><span class="required-star">*</span> [[%ms2_frontend_payment_select]]</label>
				<div class="col-sm-6">
					[[+payments]]
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="span6 col-md-6" id="deliveries">
			<h4>[[%ms2_frontend_deliveries]]:</h4>
			<div class="form-group">
				<label class="col-sm-4 control-label" ><span class="required-star">*</span> [[%ms2_frontend_delivery_select]]</label>
				<div class="col-sm-6">
					[[+deliveries]]
				</div>
			</div>
		</div>
		<div class="span6 col-md-6">
			<h4>[[%ms2_frontend_address]]:</h4>
			<div class="form-group input-parent">
				<label class="col-sm-4 control-label" for="index"><span class="required-star">*</span> [[%ms2_frontend_index]]</label>
				<div class="col-sm-4">
					<input type="text" id="index" placeholder="[[%ms2_frontend_index]]"  name="index" value="[[+index]]" class="form-control [[+errors.index]]">
				</div>
			</div>
			<div class="form-group input-parent">
				<label class="col-sm-4 control-label"  for="region"><span class="required-star">*</span> [[%ms2_frontend_region]]</label>
				<div class="col-sm-6">
					<input type="text" id="region" placeholder="[[%ms2_frontend_region]]" name="region" value="[[+region]]" class="form-control [[+errors.region]]">
				</div>
			</div>
			<div class="form-group input-parent">
				<label class="col-sm-4 control-label"  for="city"><span class="required-star">*</span> [[%ms2_frontend_city]]</label>
				<div class="col-sm-6">
					<input type="text" id="city" placeholder="[[%ms2_frontend_city]]" name="city" value="[[+city]]" class="form-control [[+errors.city]]">
				</div>
			</div>
			<div class="form-group input-parent">
				<label class="col-sm-4 control-label"  for="street"><span class="required-star">*</span> [[%ms2_frontend_street]]</label>
				<div class="col-md-6">
					<div class="col-md-4">
						<input type="text" id="street" placeholder="[[%ms2_frontend_street]]" name="street" value="[[+street]]" class="form-control [[+errors.street]]">
					</div>
					<div class="col-md-4">
						<input type="text" id="building" placeholder="[[%ms2_frontend_building]]" name="building" value="[[+building]]" class="form-control [[+errors.building]]">
					</div>
					<div class="col-md-4">
						<input type="text" id="room" placeholder="[[%ms2_frontend_room]]" name="room" value="[[+room]]" class="form-control [[+errors.room]]">
					</div>
				</div>
			</div>
		</div>
	</div>
	<button type="button" name="ms2_action" value="order/clean" class="btn btn-default ms2_link"><i class="glyphicon glyphicon-remove"></i> [[%ms2_frontend_order_cancel]]</button>
	<hr/>
	<div class="well">
		<div class="col-md-offset-2">
			<h3>[[%ms2_frontend_order_cost]]: <span id="ms2_order_cost">[[+order_cost:default=`0`]]</span> [[%ms2_frontend_currency]]</h3>
			<button type="submit" name="ms2_action" value="order/submit" class="btn btn-default btn-primary ms2_link">[[%ms2_frontend_order_submit]]</button>
		</div>
	</div>
</form>',
      'tpl.msOrder.payment' => '<div class="checkbox">
	<label class="payment input-parent">
		<input type="radio" name="payment" value="[[+id]]" id="payment_[[+id]]" [[+checked]]>
		[[+logo:default=`[[+name]]`]]
		[[+description]]
	</label>
</div>
<!--minishop2_logo <img src="[[+logo]]" />-->
<!--minishop2_description <p><small>[[+description]]</small></p>-->',
      'tpl.msOrder.success' => '[[!msGetOrder?id=`[[+id]]`]]

<h3>[[%ms2_frontend_order_success]]</h3>

<div id="msCart">
	<table class="table table-striped">
		<tr class="header">
			<th class="image span2 col-md-2">&nbsp;</th>
			<th class="title span4 col-md-4">[[%ms2_cart_title]]</th>
			<th class="count span2 col-md-2">[[%ms2_cart_count]]</th>
			<th class="weight span1 col-md-1">[[%ms2_cart_weight]]</th>
			<th class="price span1 col-md-1">[[%ms2_cart_cost]]</th>
		</tr>
		[[+goods]]
		<tr class="footer">
			<th class="total" colspan="2">[[%ms2_cart_total]]:</th>
			<th class="total_count"><span class="ms2_total_count">[[+cart_count]]</span> [[%ms2_frontend_count_unit]]</th>
			<th class="total_weight"><span class="ms2_total_weight">[[+cart_weight]]</span> [[%ms2_frontend_weight_unit]]</th>
			<th class="total_cost"><span class="ms2_total_cost">[[+cart_cost]]</span> [[%ms2_frontend_currency]]</th>
		</tr>
	</table>
	<h4>[[%ms2_frontend_order_cost]]: [[+cart_cost]] [[%ms2_frontend_currency]] + [[+delivery_cost]] [[%ms2_frontend_currency]] = <big>[[+cost]]</big> [[%ms2_frontend_currency]]</h4>
</div>',
      'tpl.msProducts.row' => '<div class="row ms2_product">
	<div class="span2 col-md-2"><img src="[[+thumb:default=`[[++assets_url]]components/minishop2/img/web/ms2_small.png`]]" width="120" height="90" /></div>
	<div class="row span10 col-md-10">
		<form method="post" class="ms2_form">
			<a href="[[~[[+id]]]]">[[+pagetitle]]</a>
			<span class="flags">[[+new]] [[+popular]] [[+favorite]]</span>
			<span class="price">[[+price]] [[%ms2_frontend_currency]]</span>
			[[+old_price]]
			<button class="btn btn-default" type="submit" name="ms2_action" value="cart/add"><i class="glyphicon glyphicon-barcode"></i> [[%ms2_frontend_add_to_cart]]</button>
			<input type="hidden" name="id" value="[[+id]]">
			<input type="hidden" name="count" value="1">
			<input type="hidden" name="options" value="[]">
		</form>
		<p><small>[[+introtext]]</small></p>
	</div>
</div>
<br/><br/>
<!--minishop2_popular <i class="glyphicon glyphicon-star" title="[[%ms2_frontend_popular]]"></i>-->
<!--minishop2_new <i class="glyphicon glyphicon-flag" title="[[%ms2_frontend_new]]"></i>-->
<!--minishop2_favorite <i class="glyphicon glyphicon-bookmark" title="[[%ms2_frontend_favorite]]"></i>-->
<!--minishop2_old_price <span class="old_price">[[+old_price]] [[%ms2_frontend_currency]]</span>-->',
    ),
    'setup-options' => 'minishop2-2.1.8-pl3/setup-options.php',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '8198ca413e81c0b85a5db89c90fb4a7e',
      'native_key' => 'minishop2',
      'filename' => 'modNamespace/72df8d2001f6aac99dff7088aa318e47.vehicle',
      'namespace' => 'minishop2',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cfd3b77a421284520454a7f82c76ace7',
      'native_key' => 'ms2_category_grid_fields',
      'filename' => 'modSystemSetting/92fce292898446c1738a213bfdcae8e4.vehicle',
      'namespace' => 'minishop2',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'aa84649307750a73eb758993cb082adc',
      'native_key' => 'ms2_category_show_nested_products',
      'filename' => 'modSystemSetting/7bcd152c2809c1c6a079dc7149417b16.vehicle',
      'namespace' => 'minishop2',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b2c81eaf022703505ea95dfb42d32a10',
      'native_key' => 'ms2_category_show_comments',
      'filename' => 'modSystemSetting/9f1493062b6326a3d2c58227edaf30fd.vehicle',
      'namespace' => 'minishop2',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ff1088b827ab1bd70464fc8d5dac5295',
      'native_key' => 'ms2_category_remember_tabs',
      'filename' => 'modSystemSetting/7aa0faedc2b71c12af4dade7a2163448.vehicle',
      'namespace' => 'minishop2',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a29b9e25e5ea64cb3e925d3446b8e7c2',
      'native_key' => 'ms2_category_remember_grid',
      'filename' => 'modSystemSetting/8bafcc4d60acd5f2c12a778452181904.vehicle',
      'namespace' => 'minishop2',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c39ba27ee0810775d989857465512650',
      'native_key' => 'ms2_category_id_as_alias',
      'filename' => 'modSystemSetting/e29f73ed3527fea186fd48f1e4206ad1.vehicle',
      'namespace' => 'minishop2',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5c8cff68208f195db9696378f313d62d',
      'native_key' => 'ms2_category_content_default',
      'filename' => 'modSystemSetting/f7972ac710072ba4a892f9a948ace9ee.vehicle',
      'namespace' => 'minishop2',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '660d64ab5e763ed3b053cbdda5d20b1e',
      'native_key' => 'ms2_product_main_fields',
      'filename' => 'modSystemSetting/6003a7bd9afc1065d798f81f8db9b25d.vehicle',
      'namespace' => 'minishop2',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '93a7079eb47bd23a17b552b03ba1bb45',
      'native_key' => 'ms2_product_extra_fields',
      'filename' => 'modSystemSetting/f75685f23f29c1498e9672ab81287e71.vehicle',
      'namespace' => 'minishop2',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd810783fee4fa6b15dfe24165634e6fd',
      'native_key' => 'ms2_product_show_comments',
      'filename' => 'modSystemSetting/54a2b847ab601987198f6aea40aa1074.vehicle',
      'namespace' => 'minishop2',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0801dc6d404e08a4b97fcd5fc4b4e195',
      'native_key' => 'ms2_template_product_default',
      'filename' => 'modSystemSetting/f1e0f0b2a93c521a90168a2dd0b3aa60.vehicle',
      'namespace' => 'minishop2',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1b3cdb6908a7a40782391e104bc2cedf',
      'native_key' => 'ms2_product_show_in_tree_default',
      'filename' => 'modSystemSetting/f527954a1ac9ee20f6ef2a2e18425b2b.vehicle',
      'namespace' => 'minishop2',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '230c9b3cc7c0dfc0accff260c2eb981b',
      'native_key' => 'ms2_product_source_default',
      'filename' => 'modSystemSetting/3a0e9af154596640ea66ec5ecb4b1317.vehicle',
      'namespace' => 'minishop2',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6ac16ec994b69e50d2601f970f271a61',
      'native_key' => 'ms2_product_thumbnail_size',
      'filename' => 'modSystemSetting/5b5e91e05882b3cf560aa7b6cb95d545.vehicle',
      'namespace' => 'minishop2',
    ),
    15 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f3a3feb7b48f934800b43a9d4534feb0',
      'native_key' => 'ms2_product_vertical_tabs',
      'filename' => 'modSystemSetting/6b6349a772d48715ede963ec975c51ec.vehicle',
      'namespace' => 'minishop2',
    ),
    16 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0c34b6f602ad0cc639e8bc4d0f829091',
      'native_key' => 'ms2_product_remember_tabs',
      'filename' => 'modSystemSetting/e1d1d2555530454e14aede6d0907e187.vehicle',
      'namespace' => 'minishop2',
    ),
    17 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2bca82336ed016e3185b7f63c58c09d6',
      'native_key' => 'ms2_product_id_as_alias',
      'filename' => 'modSystemSetting/01075c58e1a415f31acd1c584048f07d.vehicle',
      'namespace' => 'minishop2',
    ),
    18 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '92b543af374b65c2dc950ad141133167',
      'native_key' => 'ms2_price_format',
      'filename' => 'modSystemSetting/fd880dc3da627c4a950b567f88f086cf.vehicle',
      'namespace' => 'minishop2',
    ),
    19 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a88757b22494240c7247bf9cb0931e3a',
      'native_key' => 'ms2_weight_format',
      'filename' => 'modSystemSetting/0d817f14009ee161e4a9e3ae363bd59f.vehicle',
      'namespace' => 'minishop2',
    ),
    20 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ee8dea13e47fd6b9b16a46733407eeca',
      'native_key' => 'ms2_price_format_no_zeros',
      'filename' => 'modSystemSetting/30aff8317190eaadb30246890961c249.vehicle',
      'namespace' => 'minishop2',
    ),
    21 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9dc6cba71c8cbffeeee667c069970411',
      'native_key' => 'ms2_weight_format_no_zeros',
      'filename' => 'modSystemSetting/6c6c4a6e2528b0b27137deb97bfed648.vehicle',
      'namespace' => 'minishop2',
    ),
    22 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f014cb66082d33eabaa4a5d53ad7a37a',
      'native_key' => 'ms2_product_tab_extra',
      'filename' => 'modSystemSetting/d06cf572e497be660c9636d5a9cafba8.vehicle',
      'namespace' => 'minishop2',
    ),
    23 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '85dea6bb38b7c75eac2046396941db8e',
      'native_key' => 'ms2_product_tab_gallery',
      'filename' => 'modSystemSetting/58a932cf8dc46009d1facd1b8c1e3367.vehicle',
      'namespace' => 'minishop2',
    ),
    24 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8983cdd8d6baff66f7733ee02d62a953',
      'native_key' => 'ms2_product_tab_links',
      'filename' => 'modSystemSetting/2b7da03150c303b5ae47d71be263dc01.vehicle',
      'namespace' => 'minishop2',
    ),
    25 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '29d13df3252c25e4c906e98ca0757d84',
      'native_key' => 'ms2_cart_handler_class',
      'filename' => 'modSystemSetting/4e81327e66fc3882b6a7b3bfc5c67156.vehicle',
      'namespace' => 'minishop2',
    ),
    26 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6e66fcab4d6377df62cf99a18c4d4349',
      'native_key' => 'ms2_order_grid_fields',
      'filename' => 'modSystemSetting/c31f11e2dde6d9822952b59afaaf1e4d.vehicle',
      'namespace' => 'minishop2',
    ),
    27 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b9fd379d21a5fbfea2ec8214e087185a',
      'native_key' => 'ms2_order_address_fields',
      'filename' => 'modSystemSetting/a7e9a7da83f0db7f68c601c7d768211e.vehicle',
      'namespace' => 'minishop2',
    ),
    28 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '80c8a9427d25697d02739a5d7b599bb0',
      'native_key' => 'ms2_order_product_fields',
      'filename' => 'modSystemSetting/5446867f6148c8f5e1d3e93286f683e8.vehicle',
      'namespace' => 'minishop2',
    ),
    29 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e80c8559507e07e79b86b5e9e359e222',
      'native_key' => 'ms2_order_handler_class',
      'filename' => 'modSystemSetting/7d1f2ab5525e33cd767120735914105b.vehicle',
      'namespace' => 'minishop2',
    ),
    30 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '151b45c1ee8993e1feea8786b1da977a',
      'native_key' => 'ms2_order_user_groups',
      'filename' => 'modSystemSetting/25fd2a0fd650f6293bf0b9c5b3c9c5cd.vehicle',
      'namespace' => 'minishop2',
    ),
    31 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5cd6020afec5076ed051805c48ba8caa',
      'native_key' => 'ms2_date_format',
      'filename' => 'modSystemSetting/f193809a468d6daaa5bafaa77647862e.vehicle',
      'namespace' => 'minishop2',
    ),
    32 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f134ed788379ddd98ca710b38fba7c6f',
      'native_key' => 'ms2_email_manager',
      'filename' => 'modSystemSetting/99b906c71eb66ea934af134ee18381bc.vehicle',
      'namespace' => 'minishop2',
    ),
    33 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4226a038dfb14514a35f4cef58a1cd05',
      'native_key' => 'ms2_frontend_css',
      'filename' => 'modSystemSetting/19afc67f3540eb2dac4ce0cb5e7fed35.vehicle',
      'namespace' => 'minishop2',
    ),
    34 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f836d3524c8dd8a73265692edc351cb6',
      'native_key' => 'ms2_frontend_js',
      'filename' => 'modSystemSetting/f6b5b12d545338a90a13a8e066f7eff4.vehicle',
      'namespace' => 'minishop2',
    ),
    35 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b5d2016f767fd661be378ebfc46fdaf1',
      'native_key' => 'ms2_payment_paypal_api_url',
      'filename' => 'modSystemSetting/f2285b258a7ed851e6cc8c56e23045b0.vehicle',
      'namespace' => 'minishop2',
    ),
    36 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1b1823b1daf3e32a447112476bca4ec4',
      'native_key' => 'ms2_payment_paypal_checkout_url',
      'filename' => 'modSystemSetting/a55a942e90bc36fadb1f7e1bb318dd12.vehicle',
      'namespace' => 'minishop2',
    ),
    37 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b4f2be3ace6196098dc37c1bcdd2fb6d',
      'native_key' => 'ms2_payment_paypal_currency',
      'filename' => 'modSystemSetting/f80d13732b00ebca1f6f9a4c2215cf8c.vehicle',
      'namespace' => 'minishop2',
    ),
    38 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '81c95bfaba6109853ff7fb7417129e10',
      'native_key' => 'ms2_payment_paypal_user',
      'filename' => 'modSystemSetting/fed9b2eaee284fa3d014939832defbc4.vehicle',
      'namespace' => 'minishop2',
    ),
    39 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1abc5788a283f61ee6c1105ad7941aed',
      'native_key' => 'ms2_payment_paypal_pwd',
      'filename' => 'modSystemSetting/2b41523b97ab93ddc7841f5d944c9a29.vehicle',
      'namespace' => 'minishop2',
    ),
    40 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7d5e6fc649609117b28d02bde68ae614',
      'native_key' => 'ms2_payment_paypal_signature',
      'filename' => 'modSystemSetting/7cf6721a224e6bd9b7ef8e8043a3c0f8.vehicle',
      'namespace' => 'minishop2',
    ),
    41 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3f2a3103187dd94dc286eb6b671f774e',
      'native_key' => 'ms2_payment_paypal_success_id',
      'filename' => 'modSystemSetting/bcbf9ac619437e7714d7cb260f7d3887.vehicle',
      'namespace' => 'minishop2',
    ),
    42 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '76f422479781e106e6009b83f5a465ba',
      'native_key' => 'ms2_payment_paypal_cancel_id',
      'filename' => 'modSystemSetting/2e1ed547c2deceaf8313b9c8651d3b0d.vehicle',
      'namespace' => 'minishop2',
    ),
    43 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '42391dd22f9f0d139fa19fc7a27689ab',
      'native_key' => 'ms2_payment_paypal_cancel_order',
      'filename' => 'modSystemSetting/bf3a34861242b84d5c0b3d04894579bd.vehicle',
      'namespace' => 'minishop2',
    ),
    44 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '19229c3866caf41f219b6d59ae397f25',
      'native_key' => 'msOnBeforeAddToCart',
      'filename' => 'modEvent/8ddac89cd06f4b1dd5fab347fe252b20.vehicle',
      'namespace' => 'minishop2',
    ),
    45 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '33ae15b70b189a32762b12ab5f0f59f7',
      'native_key' => 'msOnAddToCart',
      'filename' => 'modEvent/a55566481f2512a7a858cd3a1932b62f.vehicle',
      'namespace' => 'minishop2',
    ),
    46 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'd8b0142793e618d2f7b3a3098d4f8828',
      'native_key' => 'msOnBeforeChangeInCart',
      'filename' => 'modEvent/d4e23cd0662c89f1646ddefb6fa9a6f8.vehicle',
      'namespace' => 'minishop2',
    ),
    47 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '2652bebd430460c804075f2ec838eccb',
      'native_key' => 'msOnChangeInCart',
      'filename' => 'modEvent/15f67e239801f63d5f7b3c9014c56761.vehicle',
      'namespace' => 'minishop2',
    ),
    48 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'bf5fca143079f39a4bd115a5dce061d2',
      'native_key' => 'msOnBeforeRemoveFromCart',
      'filename' => 'modEvent/44410e85b12b0f548bd1bc47e7238f50.vehicle',
      'namespace' => 'minishop2',
    ),
    49 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'ee5c1b58024acce4e5a575a706f41a42',
      'native_key' => 'msOnRemoveFromCart',
      'filename' => 'modEvent/51ce123267836590ee80ea82b2a36653.vehicle',
      'namespace' => 'minishop2',
    ),
    50 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'ce60303602be1b1cd5199ad14d897e7e',
      'native_key' => 'msOnBeforeEmptyCart',
      'filename' => 'modEvent/5df175faa4dcf1d8744715553e7f96f3.vehicle',
      'namespace' => 'minishop2',
    ),
    51 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '4b49c9ca5f4dcc3de779a4173c976d63',
      'native_key' => 'msOnEmptyCart',
      'filename' => 'modEvent/a4b7ddc134f9304829fc59e7369ca630.vehicle',
      'namespace' => 'minishop2',
    ),
    52 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '15678c7172832be311a411625b8fcb88',
      'native_key' => 'msOnBeforeAddToOrder',
      'filename' => 'modEvent/c477325abcaeb9d418012464ce9f6196.vehicle',
      'namespace' => 'minishop2',
    ),
    53 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '4a1416f2c5bccc71fe803433ba1af86d',
      'native_key' => 'msOnAddToOrder',
      'filename' => 'modEvent/dfad223c7b01928397e640e3ed565f28.vehicle',
      'namespace' => 'minishop2',
    ),
    54 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '6b68a6bc26cf3527d3cc9fc07c5a5152',
      'native_key' => 'msOnBeforeRemoveFromOrder',
      'filename' => 'modEvent/8afcf265da7b9e5452d5f54f74dd451d.vehicle',
      'namespace' => 'minishop2',
    ),
    55 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '626b2a20339bb8f3b7b7a91501831f97',
      'native_key' => 'msOnRemoveFromOrder',
      'filename' => 'modEvent/89e2ddf9ed769d7134ebc36e27b4e650.vehicle',
      'namespace' => 'minishop2',
    ),
    56 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '2ba3568ee3238a77bf3be9ab49db7f20',
      'native_key' => 'msOnBeforeEmptyOrder',
      'filename' => 'modEvent/f7801af2ea603b93cede2ed914dbec41.vehicle',
      'namespace' => 'minishop2',
    ),
    57 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '80be242d3788fc4a31d91257f31a9d63',
      'native_key' => 'msOnEmptyOrder',
      'filename' => 'modEvent/d8b87b604fca3dbbfbe44481b55aa2d5.vehicle',
      'namespace' => 'minishop2',
    ),
    58 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '026213e53b40ad09ff8a85f050c452af',
      'native_key' => 'msOnBeforeChangeOrderStatus',
      'filename' => 'modEvent/ecaeaeda936999ded8c3f303347531a8.vehicle',
      'namespace' => 'minishop2',
    ),
    59 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '2656d6e9b4ff65fef67e1c3b7858f404',
      'native_key' => 'msOnChangeOrderStatus',
      'filename' => 'modEvent/3e0bca27b34f38f9530b0bd8421377d8.vehicle',
      'namespace' => 'minishop2',
    ),
    60 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'a4dbe6072f30d24148087d16f4173cde',
      'native_key' => 'msOnBeforeUpdateOrder',
      'filename' => 'modEvent/7568826ec72a5773636c74c38af50d07.vehicle',
      'namespace' => 'minishop2',
    ),
    61 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'b52b4c26d3cdca0fc68d3bc285bc68ba',
      'native_key' => 'msOnUpdateOrder',
      'filename' => 'modEvent/c761718444defd0ff8c896c6f25dbcb9.vehicle',
      'namespace' => 'minishop2',
    ),
    62 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'cbb63b4a4b3b19b4a0affbb6a9aba6f6',
      'native_key' => 'msOnBeforeCreateOrder',
      'filename' => 'modEvent/0346386af87e21909548e575b4469755.vehicle',
      'namespace' => 'minishop2',
    ),
    63 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '901ad9837ea22c731e5f66c0ef29325c',
      'native_key' => 'msOnCreateOrder',
      'filename' => 'modEvent/48b804deca78f7b2d12caa89614d220e.vehicle',
      'namespace' => 'minishop2',
    ),
    64 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '036b34365fc21005be724341e2d96043',
      'native_key' => 'msOnBeforeRemoveOrder',
      'filename' => 'modEvent/fa3ef389d009925355951ce18fab3bf9.vehicle',
      'namespace' => 'minishop2',
    ),
    65 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '20b354593715e6f4e69f88f3df5ca5be',
      'native_key' => 'msOnRemoveOrder',
      'filename' => 'modEvent/85e082534c20f75857a78517defd768a.vehicle',
      'namespace' => 'minishop2',
    ),
    66 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '663a31f11387b39d94cfbb2b6f642b60',
      'native_key' => 'msOnSubmitOrder',
      'filename' => 'modEvent/7c37c242edd3ce98f9164bc6215ad731.vehicle',
      'namespace' => 'minishop2',
    ),
    67 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '88bc663c8b674394ee79e14332e87a88',
      'native_key' => 'msOnManagerCustomCssJs',
      'filename' => 'modEvent/45ea4a1107002238a2b57fc6203d19c2.vehicle',
      'namespace' => 'minishop2',
    ),
    68 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'de46fead8c55a4690f390a24e67ca452',
      'native_key' => 'msOnBeforeValidateOrderValue',
      'filename' => 'modEvent/5abe37b09ee3807a1c116f2243529f9f.vehicle',
      'namespace' => 'minishop2',
    ),
    69 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '9c69794e0f79ec09d0aeae0fbc5d6eed',
      'native_key' => 'msOnValidateOrderValue',
      'filename' => 'modEvent/d9b59276656fb813b22ba20d9ef05ac9.vehicle',
      'namespace' => 'minishop2',
    ),
    70 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '8fe340f700e463b085f4b4c97ded4d8f',
      'native_key' => 'msOnGetProductPrice',
      'filename' => 'modEvent/f7f8517f604235e2b54b4f2d19672adf.vehicle',
      'namespace' => 'minishop2',
    ),
    71 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '4b9ee4b1f646fdcd02ed8a2a941489ba',
      'native_key' => 'msOnGetProductWeight',
      'filename' => 'modEvent/935d9cdd015cf55300c0a645b0f37e0c.vehicle',
      'namespace' => 'minishop2',
    ),
    72 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modAccessPolicy',
      'guid' => '14bb822f2e0ee565ea751f9f14f468ec',
      'native_key' => NULL,
      'filename' => 'modAccessPolicy/f7a1818d52ed0ccbab8eebf8cc0b1bb9.vehicle',
      'namespace' => 'minishop2',
    ),
    73 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modAccessPolicyTemplate',
      'guid' => '09fba52f8ca4db7887a90c2db498198e',
      'native_key' => NULL,
      'filename' => 'modAccessPolicyTemplate/b59c18eef6a0fe7bc2a066c9c60cf9cb.vehicle',
      'namespace' => 'minishop2',
    ),
    74 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => '93aa786007abd05e0e72b206c8e259b3',
      'native_key' => 'minishop2',
      'filename' => 'modMenu/cfef8eae08a639c2da7543d4748a5010.vehicle',
      'namespace' => 'minishop2',
    ),
    75 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => '79f96a61ed9d5670616b60e903b83d4d',
      'native_key' => 'ms2_orders',
      'filename' => 'modMenu/6546df9931605e036086be6789734397.vehicle',
      'namespace' => 'minishop2',
    ),
    76 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => 'b2343686ad20e9d33bf7e4f389aba21a',
      'native_key' => 'ms2_settings',
      'filename' => 'modMenu/4301382868e432ad899eb5af00df9c59.vehicle',
      'namespace' => 'minishop2',
    ),
    77 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '1f4f310bf4e744c21c5d284a5f5d3540',
      'native_key' => 1,
      'filename' => 'modCategory/3175e8a0743d9490b0a441d605b7cbcc.vehicle',
      'namespace' => 'minishop2',
    ),
  ),
);