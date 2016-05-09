<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'changelog' => 'Changelog for easyComm.

1.2.6-pl
==============
- Добавлена колонка Ресурс в списке сообщений в панели управления

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
    'setup-options' => 'easycomm-1.2.6-pl/setup-options.php',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '2b2bf1009613c797ef8acad7e2283f02',
      'native_key' => 'easycomm',
      'filename' => 'modNamespace/c3307db1609cc18c6163288b0b6276e1.vehicle',
      'namespace' => 'easycomm',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'afa2315e6f88720d1fbfa36d93b6faa8',
      'native_key' => 'ec_show_templates',
      'filename' => 'modSystemSetting/cfad8d386e41d5bb7f95bf272d755cbc.vehicle',
      'namespace' => 'easycomm',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0f7fc52952b64abd6352b2588566c991',
      'native_key' => 'ec_show_resources',
      'filename' => 'modSystemSetting/127d50bb60b35896c77cda8c0098082f.vehicle',
      'namespace' => 'easycomm',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '06eed2ec662935078315839b74ff6faf',
      'native_key' => 'ec_frontend_css',
      'filename' => 'modSystemSetting/c00d630cd856bdc7f93d2bd2b8b5b9cf.vehicle',
      'namespace' => 'easycomm',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3782294f89de3bb4a62f230d32ab9379',
      'native_key' => 'ec_frontend_js',
      'filename' => 'modSystemSetting/85b706bbd62bd48f14e91e192cb1d6f2.vehicle',
      'namespace' => 'easycomm',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3fbb897ad4f2a7dff83cb19e28edb1a8',
      'native_key' => 'ec_thread_grid_fields',
      'filename' => 'modSystemSetting/afe33067518b304383e5e09aac1aa592.vehicle',
      'namespace' => 'easycomm',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a7cccf3b26091824e85e145ac2d13b78',
      'native_key' => 'ec_thread_window_fields',
      'filename' => 'modSystemSetting/a7a12cabfcafef328c83c5b05e5f1068.vehicle',
      'namespace' => 'easycomm',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b1bcc3323556e0b7e867e2b537d466db',
      'native_key' => 'ec_message_grid_fields',
      'filename' => 'modSystemSetting/21aabf6e84ca9e5b37ea0061b0d723b6.vehicle',
      'namespace' => 'easycomm',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f4f6892965e1422dfbc1f7fde362d093',
      'native_key' => 'ec_message_window_layout',
      'filename' => 'modSystemSetting/cc3de054aacd99c48e9d4ef562bc3c07.vehicle',
      'namespace' => 'easycomm',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b1269ea5c3c9731bad4cfbe98f9c79d7',
      'native_key' => 'ec_auto_reply_author',
      'filename' => 'modSystemSetting/bb37dd6359866736da868451166c114e.vehicle',
      'namespace' => 'easycomm',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9386011a27d329fd1bd6be5cb52c24e7',
      'native_key' => 'ec_mail_notify_user',
      'filename' => 'modSystemSetting/e5b0b1d12baadaaebc30b852369f91f8.vehicle',
      'namespace' => 'easycomm',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '066b6b4b7522c429c8b12382d987f49a',
      'native_key' => 'ec_mail_notify_manager',
      'filename' => 'modSystemSetting/0966d8efd87d3c9ea55f44f70ada0ebc.vehicle',
      'namespace' => 'easycomm',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4fea7ce7c8a3baf012287986499ec7ea',
      'native_key' => 'ec_mail_new_subject_manager',
      'filename' => 'modSystemSetting/2003830fabc927c34aa9b5d4857e6001.vehicle',
      'namespace' => 'easycomm',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c9dc8a2d1120eb7cfc7e7bed1fd4a874',
      'native_key' => 'ec_mail_new_subject_user',
      'filename' => 'modSystemSetting/778d7f296068408d4561733278ba89be.vehicle',
      'namespace' => 'easycomm',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '64c56c032ab73ced7487c5b423226b5e',
      'native_key' => 'ec_mail_update_subject_user',
      'filename' => 'modSystemSetting/cb6e919bfe3ddfe9fbf7125822af6b5b.vehicle',
      'namespace' => 'easycomm',
    ),
    15 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '53ab380de146baccc662c3a9ce835251',
      'native_key' => 'ec_mail_manager',
      'filename' => 'modSystemSetting/a959d46db950997fa85305f1c3f743e0.vehicle',
      'namespace' => 'easycomm',
    ),
    16 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '99f5891edd8231fd1a7bc0d39fbfb157',
      'native_key' => 'ec_mail_from',
      'filename' => 'modSystemSetting/f0cbbff4b09e958275b72d075c85b2fc.vehicle',
      'namespace' => 'easycomm',
    ),
    17 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1a4bfd91afe8bc0060876713af5532e5',
      'native_key' => 'ec_mail_from_name',
      'filename' => 'modSystemSetting/c8e6b4fda9b1894e7b50e2b3fd2c1e75.vehicle',
      'namespace' => 'easycomm',
    ),
    18 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '820909b53662c22f4d2b3e546f60d784',
      'native_key' => 'ec_rating_max',
      'filename' => 'modSystemSetting/f97f98a77791cec0c628966326e7b4b5.vehicle',
      'namespace' => 'easycomm',
    ),
    19 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5f8a32096e291dae2fb1e7cecb9e69fa',
      'native_key' => 'ec_rating_wilson_confidence',
      'filename' => 'modSystemSetting/09b1cc30adfc2653afc675c9bc1da431.vehicle',
      'namespace' => 'easycomm',
    ),
    20 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '41b09c5578dd8a18103e5f23c5ec1a9e',
      'native_key' => 'ec_gravatar_size',
      'filename' => 'modSystemSetting/2c4dafd5caf118d72849a19d7ad08136.vehicle',
      'namespace' => 'easycomm',
    ),
    21 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9aacd548b70227ca77ecca2e803299a3',
      'native_key' => 'ec_gravatar_default',
      'filename' => 'modSystemSetting/a24259b9a86fa4799606ab9e1c556cb8.vehicle',
      'namespace' => 'easycomm',
    ),
    22 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'f83d1b4bba1565fa184b9bf17a1378e4',
      'native_key' => 'OnBeforeEcMessageSave',
      'filename' => 'modEvent/20941c0d1f9ebd6da5ee8a1c7a8932cd.vehicle',
      'namespace' => 'easycomm',
    ),
    23 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '8898006d81beb2d363c2e2172cfd537f',
      'native_key' => 'OnEcMessageSave',
      'filename' => 'modEvent/b902947ea80c097755558df5b0d892c1.vehicle',
      'namespace' => 'easycomm',
    ),
    24 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '967449f4b3984f2d42b3475fd54025d7',
      'native_key' => 'OnBeforeEcMessagePublish',
      'filename' => 'modEvent/94bdd2758dc3cd84049b64a49c7ce397.vehicle',
      'namespace' => 'easycomm',
    ),
    25 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '84c218bab3fc8bf81c03bc0eed4fc7df',
      'native_key' => 'OnEcMessagePublish',
      'filename' => 'modEvent/889d78cb87b380b286fe76b5c078d246.vehicle',
      'namespace' => 'easycomm',
    ),
    26 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '0f286c4abf572c76ac3749bd71e97d1e',
      'native_key' => 'OnBeforeEcMessageUnpublish',
      'filename' => 'modEvent/a4ef29becead54a1601a94cc718218c4.vehicle',
      'namespace' => 'easycomm',
    ),
    27 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '8bda795f12801c55a06b8d52792ad1c4',
      'native_key' => 'OnEcMessageUnpublish',
      'filename' => 'modEvent/de91cc2e6ed640a3b528c4057d80649e.vehicle',
      'namespace' => 'easycomm',
    ),
    28 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'ee697713c38c856b2e30970cf785e300',
      'native_key' => 'OnBeforeEcMessageDelete',
      'filename' => 'modEvent/e88dd903ee2552dedf70ed19b6c0e98f.vehicle',
      'namespace' => 'easycomm',
    ),
    29 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '4f319f00676138df2247e092bf66133e',
      'native_key' => 'OnEcMessageDelete',
      'filename' => 'modEvent/f5e9c422cfeba97cace87e32dca0556f.vehicle',
      'namespace' => 'easycomm',
    ),
    30 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'ef2e674c591e16d16354a7f203a8232b',
      'native_key' => 'OnBeforeEcMessageUndelete',
      'filename' => 'modEvent/5cb7fb3d76333c7532db3f11928eefe7.vehicle',
      'namespace' => 'easycomm',
    ),
    31 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'cd2e4a371b87050e6c87a0470563e62d',
      'native_key' => 'OnEcMessageUndelete',
      'filename' => 'modEvent/c8d6977406b422fba3b8cb6fcafad73d.vehicle',
      'namespace' => 'easycomm',
    ),
    32 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '74316bb32654c58192086d44ec6ed4e6',
      'native_key' => 'OnBeforeEcMessageRemove',
      'filename' => 'modEvent/31625df225a13d39ee5dc61e2396af16.vehicle',
      'namespace' => 'easycomm',
    ),
    33 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '65f96479842f134523d0370f4298e6b7',
      'native_key' => 'OnEcMessageRemove',
      'filename' => 'modEvent/98435835221cde5fb762892e56ce93d4.vehicle',
      'namespace' => 'easycomm',
    ),
    34 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => 'e6473103af23b56bf5e9ffb7fa22e031',
      'native_key' => 'easyComm',
      'filename' => 'modMenu/77fac7ab32db928c17f7b93c8e013bea.vehicle',
      'namespace' => 'easycomm',
    ),
    35 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => 'c35a79c85d5667fd4a613a499c7f6303',
      'native_key' => NULL,
      'filename' => 'modCategory/775d1e9562a0ae60cbec841b2f4016b3.vehicle',
      'namespace' => 'easycomm',
    ),
  ),
);