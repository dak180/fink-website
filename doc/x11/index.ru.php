<?php
$title = "Использование X11";
$cvs_author = 'Author: gecko2';
$cvs_date = 'Date: 2012/11/11 15:20:18';
$metatags = '<link rel="contents" href="index.php?phpLang=ru" title="Использование X11 Contents"><link rel="next" href="intro.php?phpLang=ru" title="Введение">';


include_once "header.ru.inc";
?>
<h1>Использование X11 в Darwin и Mac OS X</h1>
        <p> Данный документ посвящен использованию X11 / XFree86 / Xtools в Mac
            OS X и Darwin Apple. В нем вы найдете введение, историю создания продукта, а также отражение
            текущей ситуации и множества
            имеющихся возможностей для применения  X11 как с Fink, так и иным образом.</p>
    <h2><?php echo FINK_CONTENTS ; ?></h2><ul>
	<li><a href="intro.php?phpLang=ru"><b>1 Введение</b></a><ul><li><a href="intro.php?phpLang=ru#def-x11">1.1 Что такое X11?</a></li><li><a href="intro.php?phpLang=ru#def-macosx">1.2 Что такое Mac OS X?</a></li><li><a href="intro.php?phpLang=ru#def-darwin">1.3 Что такое Darwin?</a></li><li><a href="intro.php?phpLang=ru#def-xfree86">1.4 Что такое XFree86?</a></li><li><a href="intro.php?phpLang=ru#def-xtools">1.5 Что такое Xtools?</a></li><li><a href="intro.php?phpLang=ru#client-server">1.6 Клиент и сервер</a></li><li><a href="intro.php?phpLang=ru#rootless">1.7 Что означает "бескорневой" ("rootless")?</a></li><li><a href="intro.php?phpLang=ru#wm">1.8 Что такое менеджер окон?</a></li><li><a href="intro.php?phpLang=ru#desktop">1.9 Что такое Quartz/Aqua, Gnome и KDE?</a></li></ul></li><li><a href="history.php?phpLang=ru"><b>2 История создания продукта</b></a><ul><li><a href="history.php?phpLang=ru#early">2.1 Отрочество</a></li><li><a href="history.php?phpLang=ru#xonx-forms">2.2 Формы XonX</a></li><li><a href="history.php?phpLang=ru#root-or-not">2.3 Быть иль не быть корневым?</a></li></ul></li><li><a href="inst-xfree86.php?phpLang=ru"><b>3 Получение и инсталляция XFree86</b></a><ul><li><a href="inst-xfree86.php?phpLang=ru#fink">3.1 Инсталляция через Fink</a></li><li><a href="inst-xfree86.php?phpLang=ru#apple-binary">3.2 Бинарные файлы Apple</a></li><li><a href="inst-xfree86.php?phpLang=ru#official-binary">3.3 Официальные бинарные файлы</a></li><li><a href="inst-xfree86.php?phpLang=ru#official-source">3.4 Официальный исходный код</a></li><li><a href="inst-xfree86.php?phpLang=ru#latest-cvs">3.5 Исходный код на основе последних разработок</a></li><li><a href="inst-xfree86.php?phpLang=ru#macgimp">3.6 MacGimp</a></li><li><a href="inst-xfree86.php?phpLang=ru#switching-x11">3.7 Замена X11</a></li><li><a href="inst-xfree86.php?phpLang=ru#fink-summary">3.8 Обзор пакетов Fink</a></li></ul></li><li><a href="run-xfree86.php?phpLang=ru"><b>4 Запуск XFree86</b></a><ul><li><a href="run-xfree86.php?phpLang=ru#darwin">4.1 Darwin</a></li><li><a href="run-xfree86.php?phpLang=ru#macosx-41">4.2 Mac OS X + XFree86 4.x.y</a></li><li><a href="run-xfree86.php?phpLang=ru#xinitrc">4.3 Файл .xinitrc</a></li></ul></li><li><a href="xtools.php?phpLang=ru"><b>5 Xtools</b></a><ul><li><a href="xtools.php?phpLang=ru#install">5.1 Инсталляция Xtools</a></li><li><a href="xtools.php?phpLang=ru#run">5.2 Запуск Xtools</a></li><li><a href="xtools.php?phpLang=ru#opengl">5.3 Примечания в связи с OpenGL</a></li></ul></li><li><a href="other.php?phpLang=ru"><b>6 Другие возможности X11</b></a><ul><li><a href="other.php?phpLang=ru#vnc">6.1 VNC</a></li><li><a href="other.php?phpLang=ru#wiredx">6.2 WiredX</a></li><li><a href="other.php?phpLang=ru#exodus">6.3 eXodus</a></li></ul></li><li><a href="trouble.php?phpLang=ru"><b>7 Устранение проблем, возникших в связи с XFree86</b></a><ul><li><a href="trouble.php?phpLang=ru#immedate-quit">7.1 При запуске XDarwin она практически сразу завершает работу или зависает</a></li><li><a href="trouble.php?phpLang=ru#black">7.2 Черные иконки на панели GNOME и в меню приложения GNOME</a></li><li><a href="trouble.php?phpLang=ru#keyboard">7.3 Клавиатура не работает в XFree86</a></li><li><a href="trouble.php?phpLang=ru#delete-key">7.4 Клавиша возврата (Backspace) не действует</a></li><li><a href="trouble.php?phpLang=ru#locale">7.5 "Warning: locale not supported by C library"</a></li></ul></li><li><a href="tips.php?phpLang=ru"><b>8 Подсказки по использованию</b></a><ul><li><a href="tips.php?phpLang=ru#terminal-app">8.1 Запуск приложений X11 из окна Terminal.app</a></li><li><a href="tips.php?phpLang=ru#open">8.2 Запуск приложения Aqua apps из xterm</a></li><li><a href="tips.php?phpLang=ru#copy-n-paste">8.3 Копирование (Copy) и вставка (Paste)</a></li></ul></li></ul>
<!--Generated from $Fink: x11.ru.xml,v 1.5 2012/11/11 15:20:18 gecko2 Exp $-->
<?php include_once "../../footer.inc"; ?>


