<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'changelog' => 'Changelog for mSklad.

mSync (ex mSklad) 1.0.9 pl (27.10.2015)
- update for 1C UT 11
- fix installing without miniShop2
- code refactoring

mSync (ex mSklad) 1.0.7 pl (02.02.2015)
==============
- fix import categories
- fix import products
- fix import properties
- other small fixes

mSklad 1.0.7 rc11 (02.12.2014)
==============
- fix sale query

mSklad 1.0.7 rc10 (01.12.2014)
==============
- fix details in order
- fix lexicon
- fix install/upgrade
- fix get deleted user in order
- fix user id in sale query
- fix delivery in order
- fix status in order

mSklad 1.0.7 rc9 (13.11.2014)
==============
- fix update category/product on import
- fix import freeze on import properties

mSklad 1.0.7 rc8 (11.11.2014)
==============
- add second format to import quantity
- fix import sizes for msOptionsPrices

mSklad 1.0.7 rc7 (10.11.2014)
==============
- fix load properties on import offers.xml
- add integration with msOptionsPrice (https://store.simpledream.ru/packages/ecommerce/msoptionsprice.html)

mSklad 1.0.7 rc6 (09.11.2014)
==============
- properties move to first tab in component
- fix error on properties tab
- fix slashes in properties
- add support "class365" service
- add settings "msklad_alias_with_id" and "msklad_publish_by_quantity"
- remove MoySklad window from install

mSklad 1.0.7 rc5
==============
- fix errors on import properties
- Removed unnecessary things

mSklad 1.0.7 rc4
==============
- add events "mskladOnProductImport", "mskladOnProductOffers"

mSklad 1.0.7 rc3
==============
- fix import categories

mSklad 1.0.7 rc2
==============
- fix import properties

mSklad 1.0.7 rc1
==============
- fix product prices import
- add settings "msklad_import_all_prices"
- fix import categories and properties
- remove setting "msklad_quantity_tv"

mSklad 1.0.7 beta8
==============
- fix properties lexicon

mSklad 1.0.7 beta7
==============
- add parse "ЗначенияРеквизитов" to properties array

mSklad 1.0.7 beta6
==============
-fix link properties in manager

mSklad 1.0.7 beta5
==============
- fixes in import properties
- add settings "msklad_create_properties_tv"
- add settings "msklad_save_properties_to_tv"

mSklad 1.0.7 beta4
==============
- fixes in import offers
- fix generate alias on import

mSklad 1.0.7 beta3
==============
- fix price by feature in offers

mSklad 1.0.7 beta2
==============
- add price by feature setting
- add translit to generate alias

mSklad 1.0.7 beta
==============
- add settable properties sync

mSklad 1.0.6 rc2
==============
- disable cache on import offers.xml

mSklad 1.0.6 rc1
==============
- fix cycling import products on import from import.xml

mSklad 1.0.6 rc
==============
- fix all errors on import from import.xml

mSklad 1.0.5 rc6
==============
- add settings "msklad_template_product_default" (import from minishop2 on install) and "msklad_template_category_default"
- fix errors

mSklad 1.0.5 rc5
==============
- remove locks on create/update category and product
- remove checkParentPermissions on create category/product
- remove "Updating resourceMap before OnDocSaveForm event" on create category/product
- add temp table for import category
- fix errors

mSklad 1.0.5 rc4
==============
- fix product template
- fix errors

mSklad 1.0.5 rc3
==============
- fix images source

mSklad 1.0.5 rc2
==============
- auto fill "msklad_catalog_root_id" setting on first install
- fix import categories
- add setting "Time limit"
- increased import speed of large files

mSklad 1.0.5 rc1
==============
- add images support

mSklad 1.0.4 rc3
==============
- fix import errors

mSklad 1.0.4 rc2
==============
- fix errors
- change encoding to windows-1251
- add currency option

mSklad 1.0.4 rc1
==============
- fix errors
- increased import speed of large files
- save errors to modx log on import catalog from 1c
- add debug messages on import catalog from 1c

mSklad 1.0.3 rc2
==============
- fix import prices by processor

mSklad 1.0.3 rc1
==============
- fix import products and categories


mSklad 1.0.3 beta
==============
- change view in backend
- add external code field for products and categories
- change mode for external code
- add setting "Sync direction"
- add plugin for change setting "Sync direction"
- add loading products from 1c
- add setting for root of catalog
- hide sync button in component on mode "From 1c/MoySklad to miniShop2"
- fix utf-8 charset for CommerceML import/export
- change: create resources by processor
- add settings: user_id_import and publish_default
- add plugin for remove 1c uuid on "OnEmptyTrash" event
- add context setting

mSklad 1.0.2 rc7
==============
- fix csv export
- add new area for component

mSklad 1.0.2 rc7
==============
- add setting order status parameter
- add new area for component

mSklad 1.0.2 rc6
==============
- add setting quantity tv parameter

mSklad 1.0.2
==============
Stable release',
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
mSync (ex mSklad)
--------------------
Author: Rahimov Alexandr <alexzandr@gmail.com>
--------------------
Компонент синхронизации с 1С и сервисами "Класс365", "МойСклад".

url: https://store.simpledream.ru/packages/integration/msklad.html
doc: https://modx.pro/components/4169-msklad-1-0-7-import-characteristics-commerceml-2/


Add support on FastCGI mode:
add code in .htaccess

Add support on FastCGI mode
RewriteCond %{HTTP:Authorization} !^$
RewriteRule ^(.*)$ $1?http_auth=%{HTTP:Authorization} [QSA]
',
    'chunks' => NULL,
    'setup-options' => 'msklad-1.0.9-pl/setup-options.php',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '84c6e9c8f13daec8c1ac72a668e930a7',
      'native_key' => 'msklad',
      'filename' => 'modNamespace/136df435e02955c4cd5d3eb5296c192f.vehicle',
      'namespace' => 'msklad',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5b9eeabf1faad72a8668d5e6c20e2028',
      'native_key' => 'msklad_publish_by_quantity',
      'filename' => 'modSystemSetting/bf7b1b1a3f9ad424d88e5244af778b55.vehicle',
      'namespace' => 'msklad',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9dfcddbd32f2306e0e022af39c0bc0a0',
      'native_key' => 'msklad_create_properties_tv',
      'filename' => 'modSystemSetting/a5df31d975381e8343bccea7f84ed2ca.vehicle',
      'namespace' => 'msklad',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b4385c4ad8ba334e784bdc6cedc2b646',
      'native_key' => 'msklad_save_properties_to_tv',
      'filename' => 'modSystemSetting/ff9f846eb4ab7e13238ac064207db0d5.vehicle',
      'namespace' => 'msklad',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ff81e418aaaae7e052c29828cd4256ea',
      'native_key' => 'msklad_last_orders_sync',
      'filename' => 'modSystemSetting/c260c1ebc2e95a6ffa3d47889732248b.vehicle',
      'namespace' => 'msklad',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'db0657b47ee7093724e76593fc7f89e6',
      'native_key' => 'msklad_order_accept_status_id',
      'filename' => 'modSystemSetting/dd01c5d64420c26333966839d354dac1.vehicle',
      'namespace' => 'msklad',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b99ed1067919dbdbc2e02af0db4ef28e',
      'native_key' => 'msklad_1c_sync_login',
      'filename' => 'modSystemSetting/33b25785be4a2bbe3f9bae5e8adc9d5f.vehicle',
      'namespace' => 'msklad',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '94794f5b6f47f7e192931c7181324a63',
      'native_key' => 'msklad_publish_default',
      'filename' => 'modSystemSetting/722cbf665b3097bdd83b6bb668ab2034.vehicle',
      'namespace' => 'msklad',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '44023e03e5503ac1bd8e252bd0ceaa11',
      'native_key' => 'msklad_template_category_default',
      'filename' => 'modSystemSetting/14f270ca35e3a1ed01986de217451bdc.vehicle',
      'namespace' => 'msklad',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '789b8dabeed45733c7cc24fc7b1da32e',
      'native_key' => 'msklad_price_type_uuid',
      'filename' => 'modSystemSetting/38ca16c8215ac5e8c2507c167ef6157c.vehicle',
      'namespace' => 'msklad',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e2b2fef16377546783b9d21fcc7b79f4',
      'native_key' => 'msklad_user_id_import',
      'filename' => 'modSystemSetting/7a040a6aa48e3dd82311453fd60a6f92.vehicle',
      'namespace' => 'msklad',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0578ed57232e6ecedca8eb03155b588c',
      'native_key' => 'msklad_sync_direction',
      'filename' => 'modSystemSetting/5e97d853dc4da91880c8d0f9556ee0ae.vehicle',
      'namespace' => 'msklad',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '937496ec16afd23ab0aebacaa81f0526',
      'native_key' => 'msklad_debug',
      'filename' => 'modSystemSetting/3158647bb4bf11e3e7578ff6068d1428.vehicle',
      'namespace' => 'msklad',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4c2bd51fc7edafea96f0145d2c7a220c',
      'native_key' => 'msklad_alias_with_id',
      'filename' => 'modSystemSetting/3ed64e15e86e81de21bad31ca184338d.vehicle',
      'namespace' => 'msklad',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8cccae247694cd1b907c82a204b04dff',
      'native_key' => 'msklad_catalog_context',
      'filename' => 'modSystemSetting/ca388ba82db060aa8fc535a8aaa426c7.vehicle',
      'namespace' => 'msklad',
    ),
    15 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8b9ab0c63bd578105cfed9fdddbd94dc',
      'native_key' => 'msklad_catalog_currency',
      'filename' => 'modSystemSetting/aa3ef233834beb0fbe60a97184e3c6f2.vehicle',
      'namespace' => 'msklad',
    ),
    16 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '77110052c9e0c87228f11bfd42a4d079',
      'native_key' => 'msklad_import_all_prices',
      'filename' => 'modSystemSetting/83e154217d0d9be7561ec59236282471.vehicle',
      'namespace' => 'msklad',
    ),
    17 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b00a3d89d6cb8acebe1a734b0e7264bf',
      'native_key' => 'msklad_api_username',
      'filename' => 'modSystemSetting/60135c62c3071e0af14f9269ddda5eb8.vehicle',
      'namespace' => 'msklad',
    ),
    18 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1a1189db318fd314e439b49c2d1608cd',
      'native_key' => 'msklad_template_product_default',
      'filename' => 'modSystemSetting/5ff2438cab9d3ea989cb490d63f2ffb5.vehicle',
      'namespace' => 'msklad',
    ),
    19 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f97dfaaeb31b62dc4601141c471621c7',
      'native_key' => 'msklad_api_password',
      'filename' => 'modSystemSetting/3c1169a995fb18938292ee63aca93bd0.vehicle',
      'namespace' => 'msklad',
    ),
    20 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e3fbde654e936b4a2b8af79ad6c213a8',
      'native_key' => 'msklad_1c_sync_pass',
      'filename' => 'modSystemSetting/5e35dd656477c5574a8e7427d82f968b.vehicle',
      'namespace' => 'msklad',
    ),
    21 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b8507d99ed6663ffb705fae4dfdf86d7',
      'native_key' => 'msklad_price_by_feature_tv',
      'filename' => 'modSystemSetting/9f2dcd7adf17113a9b1518593f6b4564.vehicle',
      'namespace' => 'msklad',
    ),
    22 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd34e766e6b42fa300ac4614c0a977c10',
      'native_key' => 'msklad_catalog_root_id',
      'filename' => 'modSystemSetting/3e3ce8f35f1bbdd5359b19bf365b317a.vehicle',
      'namespace' => 'msklad',
    ),
    23 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1bb6a325c2b7bf512a141c0ac255ffbf',
      'native_key' => 'msklad_uom_type_uuid',
      'filename' => 'modSystemSetting/a9f946904bbd8c2b9ec8d94439258804.vehicle',
      'namespace' => 'msklad',
    ),
    24 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1cc5bb4631ed756125418f234ff18947',
      'native_key' => 'msklad_on_update',
      'filename' => 'modSystemSetting/616ce8b3877fcb726301f10cb5c205b6.vehicle',
      'namespace' => 'msklad',
    ),
    25 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e00017899cb150abd033203c206b9f38',
      'native_key' => 'msklad_time_limit',
      'filename' => 'modSystemSetting/d79f78e5da66845a42d264250cec07f8.vehicle',
      'namespace' => 'msklad',
    ),
    26 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '84e12f3ad253ee05d62e69492c33211c',
      'native_key' => 'mskladOnProductImport',
      'filename' => 'modEvent/975643fd8a793e8cfdf8343d610746de.vehicle',
      'namespace' => 'msklad',
    ),
    27 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '7be0052b98ff1bb04f0ff4ebcb33cc10',
      'native_key' => 'mskladOnProductOffers',
      'filename' => 'modEvent/96c07adf61f05dfb7570ae0e1de7cfc2.vehicle',
      'namespace' => 'msklad',
    ),
    28 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => '0a10ec34c7cfd9a8b3d6d7134b1c8dd0',
      'native_key' => 'msklad',
      'filename' => 'modMenu/9f63a65d7a60dc25c21441ef43f84e64.vehicle',
      'namespace' => 'msklad',
    ),
    29 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '24c697f72985000fc2b684d2505c7f3c',
      'native_key' => NULL,
      'filename' => 'modCategory/f24c2201b703ca96a4f6170c2fc10150.vehicle',
      'namespace' => 'msklad',
    ),
  ),
);