<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'changelog' => 'Changelog for easyComm.

1.2.5-pl
==============
- Поддержка Gravatar в сниппете ecMessages

1.2.4-pl
==============
- В сниппете ecForm для отоборажения чанка формы теперь используется $pdoTools
- Исправлена критическая ошибка при указании параметра tplWrapper в сниппете ecMessages
- Добавлена функция "Посмотреть сообщение на сайте" в административной части

1.2.3-pl1
==============
- Исправлен баг при использовании tplWrapper, связанный с передачей данных в чанк, где фигурировала переменная $thread

1.2.3-pl
==============
- Добавлен сниппет ecMessagesCount

1.2.2-pl
==============
- Добавлен параметр $threads к сниппету ecMessages, позволяющий выводить сообщения из нескольких цепочек

1.2.1-pl
==============
- Добавлена настройка auto_reply_author - автоматическое заполнение поля Автор ответа

1.2.0-pl
==============
- Добавлены вспомогательные методы в utils.js для работы с дополнительными полями-изображениями
- События на действия с сообщениями для возможности написания плагинов

1.1.3-pl
==============
- Добавлен параметр tplEmpty к сниппету cMessages

1.1.2-pl
==============
- Ошибка с непрописанным formId в html
- Замена $ на jQuery для избежания проблем с jQuery.noConflict()

1.1.1-pl
==============
- Возможность автопубликации сообщений
- Поддержка авторизованных пользователей в сниппете ecForm

1.1.0-pl
==============
- Устранена ошибка при редактировании цепочки сообщений

1.1.0-beta
==============
- Исправлено форматирование даты в окне редактирования сообщения
- Возврат потерянного поля thread_name в списке сообщений

1.1.0-beta
==============
- Возможность настройки отображения списка колонок при просмотре списка сообщений и цепочек сообщений
- Возможность настройки отображение разметкой окна редактировани сообщения и цепочки
- Интегрирована система плагинов для добавления полей сообщениям (ecMessage)

1.0.4-beta2
==============
- Добавлено поле IP адрес к объекту ecMessage
- Добавлена Оценка к Сообщениям
- Автоматический подсчет средней Оценки для Цепочки по 2-м алгоритмам: Средняя и Вильсон

1.0.2-beta1
==============
- Исправлена критическая ошибка, возникающая при установке пакета

1.0.0-beta
==============
- First version',
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
easyComm
--------------------
Author: Alexey Naumov <alexei@createit.ru>
--------------------

Компонент предназначен для создания на сайтах таких модулей, как отзывы, комментарии, вопросы пользователей.

Название easyComm произошло от Easy Communication, или Easy Comments, кому как больше нравится.

Компонент позволяет пользователям сайта через специальную форму оставить свое сообщение/отзыв/вопрос,
а администратор увидит их в панели управления сайтом, сможет опубликовать сообщение,
удалить его или оставить свой ответ.',
    'chunks' => 
    array (
      'tpl.ecMessages.Row' => '<div id="ec-[[+thread_name]]-message-[[+id]]" class="ec-message">
    <p><strong>[[+user_name]]</strong><span class="ec-message__date"> [[+date:dateAgo]]</span></p>
    <div class="ec-stars">
        <span class="rating-[[+rating]]"></span>
    </div>
    <p>[[+text]]</p>
    [[+reply_text]]
</div>

<!--ec_reply_text <div class="ec-message__reply">[[+reply_author]]<p>[[+reply_text]]</p></div>-->
<!--ec_reply_author <p><strong>[[+reply_author]]</strong></p>-->',
      'tpl.ecForm' => '<h2>[[%ec_fe_message_add]]</h2>
<form class="form well ec-form" method="post" role="form" id="ec-form-[[+fid]]" data-fid="[[+fid]]" action="">
    <input type="hidden" name="thread" value="[[+thread]]">

    <div class="form-group ec-antispam">
        <label for="ec-[[+antispam_field]]-[[+fid]]" class="control-label">[[%ec_fe_message_antismap]]</label>
        <input type="text" name="[[+antispam_field]]" class="form-control" id="ec-[[+antispam_field]]-[[+fid]]" value="" />
    </div>

    <div class="form-group">
        <label for="ec-user_name-[[+fid]]" class="control-label">[[%ec_fe_message_user_name]]</label>
        <input type="text" name="user_name" class="form-control" id="ec-user_name-[[+fid]]" value="[[+user_name]]" />
        <span class="ec-error help-block" id="ec-user_name-error-[[+fid]]"></span>
    </div>

    <div class="form-group">
        <label for="ec-user_email-[[+fid]]" class="control-label">[[%ec_fe_message_user_email]]</label>
        <input type="text" name="user_email" class="form-control" id="ec-user_email-[[+fid]]" value="[[+user_email]]" />
        <span class="ec-error help-block" id="ec-user_email-error-[[+fid]]"></span>
    </div>

    <div class="form-group">
        <label for="ec-user_contacts-[[+fid]]" class="control-label">[[%ec_fe_message_user_contacts]]</label>
        <input type="text" name="user_contacts" class="form-control" id="ec-user_contacts-[[+fid]]" value="[[+user_contacts]]" />
        <span class="ec-error help-block" id="ec-user_contacts-error-[[+fid]]"></span>
    </div>

    <div class="form-group">
        <label for="ec-subject-[[+fid]]" class="control-label">[[%ec_fe_message_subject]]</label>
        <input type="text" name="subject" class="form-control" id="ec-subject-[[+fid]]" value="[[+subject]]" />
        <span class="ec-error help-block" id="ec-subject-error-[[+fid]]"></span>
    </div>

    <div class="form-group">
        <label for="ec-rating-[[+fid]]" class="control-label">[[%ec_fe_message_rating]]</label>
        <input type="hidden" name="rating" id="ec-rating-[[+fid]]" value="[[+rating]]" />
        <div class="ec-rating ec-clearfix" data-storage-id="ec-rating-[[+fid]]">
            <div class="ec-rating-stars">
                <span data-rating="1" data-description="[[%ec_fe_message_rating_1]]"></span>
                <span data-rating="2" data-description="[[%ec_fe_message_rating_2]]"></span>
                <span data-rating="3" data-description="[[%ec_fe_message_rating_3]]"></span>
                <span data-rating="4" data-description="[[%ec_fe_message_rating_4]]"></span>
                <span data-rating="5" data-description="[[%ec_fe_message_rating_5]]"></span>
            </div>
            <div class="ec-rating-description">[[%ec_fe_message_rating_0]]</div>
        </div>
        <span class="ec-error help-block" id="ec-rating-error-[[+fid]]"></span>
    </div>

    <div class="form-group">
        <label for="ec-text-[[+fid]]" class="control-label">[[%ec_fe_message_text]]</label>
        <textarea type="text" name="text" class="form-control" rows="5" id="ec-text-[[+fid]]">[[+text]]</textarea>
        <span class="ec-error help-block" id="ec-text-error-[[+fid]]"></span>
    </div>

    <div class="form-actions">
        <input type="submit" class="btn btn-primary" name="send" value="[[%ec_fe_send]]" />
    </div>
</form>
<div id="ec-form-success-[[+fid]]"></div>',
      'tpl.ecForm.Success' => '<div class="alert alert-success" role="alert">
    [[%ec_fe_send_success]]
</div>',
      'tpl.ecForm.New.Email.User' => 'Здравствуйте, [[+user_name]]!
<br />
Вы оставили сообщение на сайте [[++site_url]]:
<br />
<br />
<div style="white-space:pre;background: #f0f0f0;padding: 10px;border: solid 1px #eee;">[[+text]]</div>
<br /><br />
Ваше сообщение будет опубликовано после проверки администратором.
<br />
<br />
С уважением, [[++site_name]].',
      'tpl.ecForm.New.Email.Manager' => 'На сайте [[++site_url]] было оставлено новое сообщение:
<br />
<br />
Автор: <span style="font-weight: bold">[[+user_name]]</span>
<br/>
Электронная почта: <span style="font-weight: bold">[[+user_email]]</span>
<br/>
Контактная информация: <span style="font-weight: bold">[[+user_contacts]]</span>
<br/>
<br/>
Тема сообщения: <span style="font-weight: bold">[[+subject]]</span>
<br/>
Оценка: <span style="font-weight: bold">[[+rating]]</span>
<br/>
Текст сообщения:
<br/>
<br/>
<div style="white-space:pre;background: #f0f0f0;padding: 10px;border: solid 1px #eee;">[[+text]]</div>
<br /><br />
Сообщение было оставлено на странице <a target="_blank" href="[[~[[+resource_id]]?scheme=`full`]]">[[+resource_pagetitle]]</a>
<br />
<br />
<a target="_blank" href="[[++site_url]]manager/?a=resource/update&id=[[+resource_id]]">Опубликовать или ответить на сообщение &gt;</a>',
      'tpl.ecForm.Update.Email.User' => 'Здравствуйте, [[+user_name]]!
<br />
Вы оставляли сообщение на сайте [[++site_url]]:
<br />
<br />
<div style="white-space:pre;background: #f0f0f0;padding: 10px;border: solid 1px #eee;">[[+text]]</div>
<br /><br />
[[+no_reply_and_published]][[+reply_and_published]][[+reply_and_not_published]]
<br />
<br />
С уважением, [[++site_name]].

<!--ec_no_reply_and_published
Ваше сообщение было опубликовано. Вы можете его просмотреть <a href="[[~[[+resource_id]]? &scheme=`full`]]#message-[[+id]]">здесь</a>.
-->
<!--ec_reply_and_published
[[+reply_author]]<br />
<br />
<div style="white-space:pre;background: #f0f0f0;padding: 10px;border: solid 1px #eee;">[[+reply_text]]</div>
<br />
Ваше сообщение с ответом на него опубликовано <a href="[[~[[+resource_id]]? &scheme=`full`]]#message-[[+id]]">здесь</a>.
-->
<!--ec_reply_and_not_published
[[+reply_author]]<br />
<br />
<div style="white-space:pre;background: #f0f0f0;padding: 10px;border: solid 1px #eee;">[[+reply_text]]</div>
-->

<!--ec_reply_author <span style="font-weight:bold;">[[+reply_author]]</span> ответил на ваше сообщение:-->
<!--ec_!reply_author На ваше сообщение дан ответ:-->',
      'tpl.ecThreadRating' => '<div class="ec-stars" title="[[+rating_wilson]]">
    <span style="width: [[+rating_wilson_percent]]%"></span>
</div>',
    ),
    'setup-options' => 'easycomm-1.2.5-pl/setup-options.php',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => 'a0c9d1e2cb2104f5b35ad534009462d7',
      'native_key' => 'easycomm',
      'filename' => 'modNamespace/21f98185ba8bb62ba395f6248cdb1af5.vehicle',
      'namespace' => 'easycomm',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cd6f06b12880590df21e926ca3c36434',
      'native_key' => 'ec_show_templates',
      'filename' => 'modSystemSetting/bcbbd1541a906973f2f46b2c31395634.vehicle',
      'namespace' => 'easycomm',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '98d874e511a8a6925f3f22a02da26118',
      'native_key' => 'ec_show_resources',
      'filename' => 'modSystemSetting/3a2702eaa8fe7df22ef1ba7277e705a0.vehicle',
      'namespace' => 'easycomm',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ff722422e56a3fe260ef03a29be6bf09',
      'native_key' => 'ec_frontend_css',
      'filename' => 'modSystemSetting/65f068fde14ff21dc089875dc60dc486.vehicle',
      'namespace' => 'easycomm',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2666d46884d89b7305511ed0791968e9',
      'native_key' => 'ec_frontend_js',
      'filename' => 'modSystemSetting/04e696c636d7d713d124e2b8f89e5de5.vehicle',
      'namespace' => 'easycomm',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'eaa462b68c21275bb9592fc184b44ae0',
      'native_key' => 'ec_thread_grid_fields',
      'filename' => 'modSystemSetting/06570a1d6b73268eabf2f56eb1f55370.vehicle',
      'namespace' => 'easycomm',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '46d65ae24aa3c07067ee3ea0b7613a04',
      'native_key' => 'ec_thread_window_fields',
      'filename' => 'modSystemSetting/87e1d5d944d9c387bbfd79867b62e571.vehicle',
      'namespace' => 'easycomm',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f0e20f183611de11eb955a8ffaa842ab',
      'native_key' => 'ec_message_grid_fields',
      'filename' => 'modSystemSetting/e535e668dbf2dc7a6eb35d57b8b023e7.vehicle',
      'namespace' => 'easycomm',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '32ee4224afbee67e2d96e23d4817a253',
      'native_key' => 'ec_message_window_layout',
      'filename' => 'modSystemSetting/f78009d5ded87534f07ac5582b61dbc0.vehicle',
      'namespace' => 'easycomm',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '56be08075dc8f7a0d35c41b2a7b4ed12',
      'native_key' => 'ec_auto_reply_author',
      'filename' => 'modSystemSetting/d23bdfa63363de9626f8022dda50ffd3.vehicle',
      'namespace' => 'easycomm',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2afda418ef8208d4fa08c90541461f6e',
      'native_key' => 'ec_mail_notify_user',
      'filename' => 'modSystemSetting/af3aa73c9b78654483201b0261352665.vehicle',
      'namespace' => 'easycomm',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e23b351b9de93f758e584c91c24aff66',
      'native_key' => 'ec_mail_notify_manager',
      'filename' => 'modSystemSetting/0ae0b6804a9943420759007c601670ea.vehicle',
      'namespace' => 'easycomm',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7826e8cd7cddfb0ca0b8aee13a41c947',
      'native_key' => 'ec_mail_new_subject_manager',
      'filename' => 'modSystemSetting/07ca19f91b7561766fa40ba75bcf5d65.vehicle',
      'namespace' => 'easycomm',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7d5c82453df8d254061e55f9b2a58b45',
      'native_key' => 'ec_mail_new_subject_user',
      'filename' => 'modSystemSetting/05ab92e36f90971126b109250a4cf25d.vehicle',
      'namespace' => 'easycomm',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3045b155e82d9ff7f2839efc5ffe4b72',
      'native_key' => 'ec_mail_update_subject_user',
      'filename' => 'modSystemSetting/473a484c6cdeba9cfa386df788890959.vehicle',
      'namespace' => 'easycomm',
    ),
    15 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '05371e275332b4d111c6b72ff43b0720',
      'native_key' => 'ec_mail_manager',
      'filename' => 'modSystemSetting/87969c55a1cd3cc67fbaf84302fd7ac4.vehicle',
      'namespace' => 'easycomm',
    ),
    16 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '820c264029113edcd7b9c3924c8d801a',
      'native_key' => 'ec_mail_from',
      'filename' => 'modSystemSetting/b34ffee8d8b5b60f27e411651d18d7a2.vehicle',
      'namespace' => 'easycomm',
    ),
    17 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9e47f826605049f64dc3e8d83c219ecf',
      'native_key' => 'ec_mail_from_name',
      'filename' => 'modSystemSetting/9b95296f5c271bcf430c89b48b86d49a.vehicle',
      'namespace' => 'easycomm',
    ),
    18 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1a02d1178ec91bbdfe4c87579a756686',
      'native_key' => 'ec_rating_max',
      'filename' => 'modSystemSetting/6a5303a31dce1625ca6ddae896e829e2.vehicle',
      'namespace' => 'easycomm',
    ),
    19 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5e345dff7a7c274bf9a9ae242e320ed6',
      'native_key' => 'ec_rating_wilson_confidence',
      'filename' => 'modSystemSetting/e7455cbc17a0a8f614854d3083f2835d.vehicle',
      'namespace' => 'easycomm',
    ),
    20 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '277190e6f26d1c0b497be9b9743856e1',
      'native_key' => 'ec_gravatar_size',
      'filename' => 'modSystemSetting/aa36c46f2a6ea86d53169757123ebc9c.vehicle',
      'namespace' => 'easycomm',
    ),
    21 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e9df6de5dfd1fc72e451e229cdb4bb25',
      'native_key' => 'ec_gravatar_default',
      'filename' => 'modSystemSetting/dff056786c6e646c39b0bb81e00141eb.vehicle',
      'namespace' => 'easycomm',
    ),
    22 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '885a498b9c28ae3d42520374d320b1b4',
      'native_key' => 'OnBeforeEcMessageSave',
      'filename' => 'modEvent/48c7fcbb55bf6236d91d3459aa58e4c5.vehicle',
      'namespace' => 'easycomm',
    ),
    23 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'd82e39e4df92b34bb92f1c7df29b086a',
      'native_key' => 'OnEcMessageSave',
      'filename' => 'modEvent/7133b73d503f0605ca98f05df6c8d605.vehicle',
      'namespace' => 'easycomm',
    ),
    24 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '063fb7b46618750f36d89bf2e2a5f08e',
      'native_key' => 'OnBeforeEcMessagePublish',
      'filename' => 'modEvent/e937133409fb63f50646f0bf4c0c5068.vehicle',
      'namespace' => 'easycomm',
    ),
    25 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '89bd2c890a2d102e27928f64522eb4b5',
      'native_key' => 'OnEcMessagePublish',
      'filename' => 'modEvent/a4c0b33c4776a5e3c6bf2b3537697d4a.vehicle',
      'namespace' => 'easycomm',
    ),
    26 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '76ffd98856c2d5a98e96af6b32f39e13',
      'native_key' => 'OnBeforeEcMessageUnpublish',
      'filename' => 'modEvent/9c7c58dd49c4118f7435ec0d76203d33.vehicle',
      'namespace' => 'easycomm',
    ),
    27 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '14caa15954909f12497d50188f927551',
      'native_key' => 'OnEcMessageUnpublish',
      'filename' => 'modEvent/4af189eaa55de9f763b06f08a60bc678.vehicle',
      'namespace' => 'easycomm',
    ),
    28 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '3cb309722e010e3e092a6e4d9a41932c',
      'native_key' => 'OnBeforeEcMessageDelete',
      'filename' => 'modEvent/dbc8f315a72d666fc7bbfa32d1331a7e.vehicle',
      'namespace' => 'easycomm',
    ),
    29 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '873ea778f514b1be9a3e8864c77081b4',
      'native_key' => 'OnEcMessageDelete',
      'filename' => 'modEvent/b48252bf4f25cacfd3633a5a8531f36f.vehicle',
      'namespace' => 'easycomm',
    ),
    30 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '74c3a93b284e0102a0c99c1c562765ba',
      'native_key' => 'OnBeforeEcMessageUndelete',
      'filename' => 'modEvent/c9d9af5370737fe775d67989b5923175.vehicle',
      'namespace' => 'easycomm',
    ),
    31 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '3d07aceb8534d9973543bcdcb5baec6d',
      'native_key' => 'OnEcMessageUndelete',
      'filename' => 'modEvent/ed11a4413ca735900a1e9a8d1203cb41.vehicle',
      'namespace' => 'easycomm',
    ),
    32 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'e550266118836a50a034545e9fa4dc0b',
      'native_key' => 'OnBeforeEcMessageRemove',
      'filename' => 'modEvent/f72e0d6f07a6952d342f5c2e2f498837.vehicle',
      'namespace' => 'easycomm',
    ),
    33 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'a6147c0dd6cad7b7ec2be9200a8db577',
      'native_key' => 'OnEcMessageRemove',
      'filename' => 'modEvent/d390c661cc0ebfac2c08cf04be89639a.vehicle',
      'namespace' => 'easycomm',
    ),
    34 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => 'bccde6afb411f9f78f6715db6e007089',
      'native_key' => 'easyComm',
      'filename' => 'modMenu/5a68b50c69efcdc595cf748ff3e63a38.vehicle',
      'namespace' => 'easycomm',
    ),
    35 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '52b263a20e3f0ea97d9c1a034304951e',
      'native_key' => NULL,
      'filename' => 'modCategory/dec09c0b0fe56b4ed46236995f16184c.vehicle',
      'namespace' => 'easycomm',
    ),
  ),
);