<?php
include( 'simple_html_dom.php' );
$html = new simple_html_dom(  );
// Загрузка из файла:
$html->load( '<!DOCTYPE html>
<html>

 <head>

  <meta charset="utf-8"/>
<title>Exported Data</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>

  <link href="css/style.css" rel="stylesheet"/>

  <script src="js/script.js" type="text/javascript">

  </script>

 </head>

 <body onload="CheckLocation();">

  <div class="page_wrap">

   <div class="page_header">

    <div class="content">

     <div class="text bold">
ClickHouse не тормозит 
     </div>

    </div>

   </div>

   <div class="page_body chat_page">

    <div class="history">

     <div class="message service" id="message-1">

      <div class="body details">
10 November 2016
      </div>

     </div>

     <div class="message service" id="message1">

      <div class="body details">
Viktor Tarnavskiy converted a basic group to this supergroup &laquo;ClickHouse не тормозит&raquo;
      </div>

     </div>

     <div class="message service" id="message2">

      <div class="body details">
Viktor Tarnavskiy changed group photo
      </div>

      <div class="userpic_wrap">

       <div class="userpic userpic6" style="width: 60px; height: 60px">

        <div class="initials" style="line-height: 60px">
C
        </div>

       </div>

      </div>

     </div>

     <div class="message service" id="message3">

      <div class="body details">
Maxim Filatov joined group by link from Viktor Tarnavskiy
      </div>

     </div>

     <div class="message service" id="message4">

      <div class="body details">
Aleksandr Kozlov joined group by link from Viktor Tarnavskiy
      </div>

     </div>

     <div class="message service" id="message5">

      <div class="body details">
Roman Lomonosov invited Roman Lomonosov
      </div>

     </div>

     <div class="message service" id="message6">

      <div class="body details">
Dmitry Volodin invited Dmitry Volodin
      </div>

     </div>

     <div class="message service" id="message7">

      <div class="body details">
Nataliya Makarova invited Nataliya Makarova
      </div>

     </div>

     <div class="message service" id="message8">

      <div class="body details">
Илья Рогожин invited Илья Рогожин
      </div>

     </div>

     <div class="message default clearfix" id="message9">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:31:25">
15:31
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Всем привет!<br>Обсуждаем ClickHouse, задаём любые вопросы, стараемся не флудить!<br>Информация: <a href="https://clickhouse.yandex">https://clickhouse.yandex</a><br>Страничка на вики - <a href="https://ru.wikipedia.org/wiki/ClickHouse">https://ru.wikipedia.org/wiki/ClickHouse</a><br>Доклад про ClickHouse с Highload++: <a href="https://www.youtube.com/watch?v=AXSQbV8Zhvg">https://www.youtube.com/watch?v=AXSQbV8Zhvg</a><br>Google группа - <a href="https://groups.google.com/forum/#!forum/clickhouse">https://groups.google.com/forum/#!forum/clickhouse</a>
       </div>

      </div>

     </div>

     <div class="message service" id="message10">

      <div class="body details">
Darafei Praliaskouski invited Darafei Praliaskouski
      </div>

     </div>

     <div class="message service" id="message11">

      <div class="body details">
nikoinlove 🐈 invited nikoinlove 🐈
      </div>

     </div>

     <div class="message service" id="message12">

      <div class="body details">
Stas Kozhevnikov invited Stas Kozhevnikov
      </div>

     </div>

     <div class="message default clearfix" id="message13">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DP
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:32:20">
15:32
       </div>

       <div class="from_name">
Darafei Praliaskouski
       </div>

       <div class="text">
о! расскажите, а есть fdw для кликхауса к постгресу?
       </div>

      </div>

     </div>

     <div class="message service" id="message14">

      <div class="body details">
Vladislav 👻 Shishkov invited Vladislav 👻 Shishkov
      </div>

     </div>

     <div class="message service" id="message15">

      <div class="body details">
緑眼のモンスター invited 緑眼のモンスター
      </div>

     </div>

     <div class="message default clearfix" id="message16">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:32:34">
15:32
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="text">
День добрый
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message17">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:33:00">
15:33
       </div>

       <div class="text">
Делал кто актуальное сравнение с HP Vertica? 😁
       </div>

      </div>

     </div>

     <div class="message service" id="message18">

      <div class="body details">
Misha *POI vote NOW* Granin invited Misha *POI vote NOW* Granin
      </div>

     </div>

     <div class="message service" id="message19">

      <div class="body details">
Vitaliy Zakharov invited Vitaliy Zakharov
      </div>

     </div>

     <div class="message default clearfix" id="message20">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
MG
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:33:45">
15:33
       </div>

       <div class="from_name">
Misha *POI vote NOW* Granin
       </div>

       <div class="text">
Можно что-то кроме ссылок с сайта по теме? Может видео? Другие коммьюнити? Совсем новая мне тема
       </div>

      </div>

     </div>

     <div class="message service" id="message21">

      <div class="body details">
Andrew Ya invited Andrew Ya
      </div>

     </div>

     <div class="message service" id="message22">

      <div class="body details">
Sergey invited Sergey
      </div>

     </div>

     <div class="message default clearfix" id="message23">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DA
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:34:42">
15:34
       </div>

       <div class="from_name">
Dmitry Andreev
       </div>

       <div class="text">
Гугл группа - <a href="https://groups.google.com/forum/#!forum/clickhouse">https://groups.google.com/forum/#!forum/clickhouse</a><br>Страничка на вики - <a href="https://ru.wikipedia.org/wiki/ClickHouse">https://ru.wikipedia.org/wiki/ClickHouse</a>
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message24">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:34:56">
15:34
       </div>

       <div class="from_name">
Aleksey Shirokikh
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message23" onclick="return GoToMessage(23)">this message</a>
       </div>

       <div class="text">
запинить надо бы
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message25">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
緑
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:35:05">
15:35
       </div>

       <div class="from_name">
緑眼のモンスター 
       </div>

       <div class="text">
is there <code>Clickhouse sucks</code> group?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message26">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic4" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
NM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:35:06">
15:35
       </div>

       <div class="from_name">
Nataliya Makarova
       </div>

       <div class="text">
Приходите на специальное мероприятие ClickHouse 21 ноября в Яндексе <a href="https://events.yandex.ru/events/yagosti/21-november-2016/">https://events.yandex.ru/events/yagosti/21-november-2016/</a>
       </div>

      </div>

     </div>

     <div class="message service" id="message27">

      <div class="body details">
Deleted Account invited Deleted Account
      </div>

     </div>

     <div class="message service" id="message28">

      <div class="body details">
Viktor Tarnavskiy pinned <a href="#go_to_message9" onclick="return GoToMessage(9)">this message</a>
      </div>

     </div>

     <div class="message service" id="message29">

      <div class="body details">
Ivan Vasin invited Ivan Vasin
      </div>

     </div>

     <div class="message service" id="message30">

      <div class="body details">
Evgeniy Shishkin invited Evgeniy Shishkin
      </div>

     </div>

     <div class="message default clearfix" id="message31">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:36:46">
15:36
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Всё припинил
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message32">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:37:17">
15:37
       </div>

       <div class="text">
fdw для постгреса нет, пока что не планируем
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message33">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:37:38">
15:37
       </div>

       <div class="text">
Сравнение с vertica делали: <a href="https://clickhouse.yandex/benchmark.html">https://clickhouse.yandex/benchmark.html</a>
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message34">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DP
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:38:04">
15:38
       </div>

       <div class="from_name">
Darafei Praliaskouski
       </div>

       <div class="text">
там в сравнении есть mysql, но нет pgsql
       </div>

      </div>

     </div>

     <div class="message service" id="message35">

      <div class="body details">
Eduard Vlasov invited Eduard Vlasov
      </div>

     </div>

     <div class="message service" id="message36">

      <div class="body details">
Евгений Коньков invited Евгений Коньков
      </div>

     </div>

     <div class="message service" id="message37">

      <div class="body details">
Dmitrii Kanatnikov invited Dmitrii Kanatnikov
      </div>

     </div>

     <div class="message default clearfix" id="message38">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DP
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:39:07">
15:39
       </div>

       <div class="from_name">
Darafei Praliaskouski
       </div>

       <div class="text">
было бы очень интересно увидеть такое - а то есть некоторые патчи, ускоряющие то же avg в pgsql, но хочется понимать baseline :)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message39">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:39:08">
15:39
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message32" onclick="return GoToMessage(32)">this message</a>
       </div>

       <div class="text">
У коллег из Почты есть такой таск в трекере. Это не гарантирует, что что-нибудь будет сделано.
       </div>

      </div>

     </div>

     <div class="message service" id="message40">

      <div class="body details">
Anatoly Medvedkov invited Anatoly Medvedkov
      </div>

     </div>

     <div class="message service" id="message41">

      <div class="body details">
Kirill invited Kirill
      </div>

     </div>

     <div class="message default clearfix" id="message42">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DP
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:40:05">
15:40
       </div>

       <div class="from_name">
Darafei Praliaskouski
       </div>

       <div class="text">
ну, вдруг окажется, что такой fdw делается из mysql_fdw каким-нибудь лёгким движением либы :)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message43">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:40:14">
15:40
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message34" onclick="return GoToMessage(34)">this message</a>
       </div>

       <div class="text">
Есть сравнение от неизвестно кого:<br><a href="https://github.com/AnalyticsGo/AnalyticsGo/issues/1">https://github.com/AnalyticsGo/AnalyticsGo/issues/1</a><br>(от третьей стороны - так даже больше доверия)
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message44">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:40:45">
15:40
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message42" onclick="return GoToMessage(42)">this message</a>
       </div>

       <div class="text">
Но для MySQL у нас тоже нет fdw.
       </div>

      </div>

     </div>

     <div class="message service" id="message45">

      <div class="body details">
Maxim Logunov invited Maxim Logunov
      </div>

     </div>

     <div class="message service" id="message46">

      <div class="body details">
papa karlo invited papa karlo
      </div>

     </div>

     <div class="message default clearfix" id="message47">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DP
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:41:10">
15:41
       </div>

       <div class="from_name">
Darafei Praliaskouski
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message44" onclick="return GoToMessage(44)">this message</a>
       </div>

       <div class="text">
он есть у постгреса же
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message48">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:41:54">
15:41
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="text">
Понял.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message49">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:42:06">
15:42
       </div>

       <div class="text">
Из теста:<br>&gt; Obviously, ClickHouse outperformed PostgreSQL at any metric.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message50">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
緑
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:42:48">
15:42
       </div>

       <div class="from_name">
緑眼のモンスター 
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message33" onclick="return GoToMessage(33)">this message</a>
       </div>

       <div class="text">
is that like  <br>TPC-H?
       </div>

      </div>

     </div>

     <div class="message service" id="message51">

      <div class="body details">
Pavel Novitskiy presto invited Pavel Novitskiy presto
      </div>

     </div>

     <div class="message service" id="message52">

      <div class="body details">
Pavel Kartavyy invited Pavel Kartavyy
      </div>

     </div>

     <div class="message default clearfix" id="message53">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:43:27">
15:43
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="text">
It is not like TPC-H, because test queries doesn&apos;t have any JOINs at all. We test just for &quot;big flat table&quot; scenario.
       </div>

      </div>

     </div>

     <div class="message service" id="message54">

      <div class="body details">
nikoinlove 🐈 invited Dima Patrakov
      </div>

     </div>

     <div class="message default clearfix" id="message55">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
緑
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:43:48">
15:43
       </div>

       <div class="from_name">
緑眼のモンスター 
       </div>

       <div class="text">
so performance might be different in more complex scenarios...
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message56">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:44:25">
15:44
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="text">
Yes. It is apriori known, that ClickHouse is not good at complex JOINs.
       </div>

      </div>

     </div>

     <div class="message service" id="message57">

      <div class="body details">
Виталий Солдатов invited Виталий Солдатов
      </div>

     </div>

     <div class="message default clearfix" id="message58">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:44:50">
15:44
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message33" onclick="return GoToMessage(33)">this message</a>
       </div>

       <div class="text">
версия совсем не актуальная, в проде была 7.2 вертики, когда кликхауса еще в опэнсорсе не было...
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message59">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DP
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:45:26">
15:45
       </div>

       <div class="from_name">
Darafei Praliaskouski
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message48" onclick="return GoToMessage(48)">this message</a>
       </div>

       <div class="text">
у нас всё подряд лежит в постгресе, но мало запихать какие-нибудь таблицы в кликхаус и оставить там жить и джойнить со внешним миром постгресом окажется дельной идеей
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message60">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AY
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:45:48">
15:45
       </div>

       <div class="from_name">
Andrew Ya
       </div>

       <div class="text">
почему в сравнении использовался hive 0.11 ?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message61">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:45:56">
15:45
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message58" onclick="return GoToMessage(58)">this message</a>
       </div>

       <div class="text">
Верно. Тесты частично устарели. Нужно обновлять. Есть несколько шагов, чтобы нам сделать более нормальные тесты.
       </div>

      </div>

     </div>

     <div class="message service" id="message62">

      <div class="body details">
Dmitriy Kalugin-Balashov invited Dmitriy Kalugin-Balashov
      </div>

     </div>

     <div class="message default clearfix" id="message63">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:46:21">
15:46
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message60" onclick="return GoToMessage(60)">this message</a>
       </div>

       <div class="text">
Hive тестировали в 2013 осенью и больше не повторяли.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message64">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DK
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:46:22">
15:46
       </div>

       <div class="from_name">
Dmitriy Kalugin-Balashov
       </div>

       <div class="text">
Ну и название... )
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message65">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
緑
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:46:47">
15:46
       </div>

       <div class="from_name">
緑眼のモンスター 
       </div>

       <div class="media_wrap clearfix">

        <div class="media clearfix pull_left media_photo">

         <div class="fill pull_left">

         </div>

         <div class="body">

          <div class="title bold">
Photo
          </div>

          <div class="description">
Not included, change data exporting settings to download.
          </div>

          <div class="status details">
300x300, 18.1 KB
          </div>

         </div>

        </div>

       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message66">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:47:02">
15:47
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message59" onclick="return GoToMessage(59)">this message</a>
       </div>

       <div class="text">
Да, это хорошая идея. Как раз у людей из Почты тонны Postgres-а, но ещё они используют ClickHouse, и хорошая интеграция им очень нужна.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message67">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AY
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:47:15">
15:47
       </div>

       <div class="from_name">
Andrew Ya
       </div>

       <div class="text">
движок какой использовался? Tez или Map-Reduce?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message68">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:47:44">
15:47
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="text">
<a href="https://github.com/yandex/ClickHouse/tree/master/dbms/benchmark/hive">https://github.com/yandex/ClickHouse/tree/master/dbms/benchmark/hive</a>
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message69">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DP
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:48:06">
15:48
       </div>

       <div class="from_name">
Darafei Praliaskouski
       </div>

       <div class="text">
есть ли где-то коммерческая поддержка кликхауса? :)
       </div>

      </div>

     </div>

     <div class="message service" id="message70">

      <div class="body details">
Dmitriy Loktionov invited Dmitriy Loktionov
      </div>

     </div>

     <div class="message service" id="message71">

      <div class="body details">
ptchol invited ptchol
      </div>

     </div>

     <div class="message service" id="message72">

      <div class="body details">
Etki invited Etki
      </div>

     </div>

     <div class="message service" id="message73">

      <div class="body details">
Nikolay Kraynev invited Nikolay Kraynev
      </div>

     </div>

     <div class="message service" id="message74">

      <div class="body details">
Alexey Batalov invited Alexey Batalov
      </div>

     </div>

     <div class="message service" id="message75">

      <div class="body details">
Artem invited Artem
      </div>

     </div>

     <div class="message service" id="message76">

      <div class="body details">
Vladimir Chebotarev invited Vladimir Chebotarev
      </div>

     </div>

     <div class="message service" id="message77">

      <div class="body details">
Olga Smirnova invited Olga Smirnova
      </div>

     </div>

     <div class="message service" id="message78">

      <div class="body details">
Dmitry Eroshenko invited Dmitry Eroshenko
      </div>

     </div>

     <div class="message service" id="message79">

      <div class="body details">
Uncel Duk invited Uncel Duk
      </div>

     </div>

     <div class="message service" id="message80">

      <div class="body details">
Vladimir Zagranovsky invited Vladimir Zagranovsky
      </div>

     </div>

     <div class="message service" id="message81">

      <div class="body details">
Alexey Lavrenuke invited Alexey Lavrenuke
      </div>

     </div>

     <div class="message service" id="message82">

      <div class="body details">
Ivan Bessarabov invited Ivan Bessarabov
      </div>

     </div>

     <div class="message service" id="message83">

      <div class="body details">
Maksim T invited Maksim T
      </div>

     </div>

     <div class="message service" id="message84">

      <div class="body details">
Dmitrii Kuznetsov invited Dmitrii Kuznetsov
      </div>

     </div>

     <div class="message service" id="message85">

      <div class="body details">
Mikhail Dyomin invited Mikhail Dyomin
      </div>

     </div>

     <div class="message service" id="message86">

      <div class="body details">
Alex Gonchar invited Alex Gonchar
      </div>

     </div>

     <div class="message default clearfix" id="message87">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic4" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
EV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 15:58:58">
15:58
       </div>

       <div class="from_name">
Eduard Vlasov
       </div>

       <div class="text">
Можно я спрошу
       </div>

      </div>

     </div>

     <div class="message service" id="message88">

      <div class="body details">
Mariya Mansurova changed group photo
      </div>

      <div class="userpic_wrap">

       <div class="userpic userpic6" style="width: 60px; height: 60px">

        <div class="initials" style="line-height: 60px">
C
        </div>

       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message89">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic4" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
EV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:00:03">
16:00
       </div>

       <div class="from_name">
Eduard Vlasov
       </div>

       <div class="text">
есть таблица из 5-6 столбцов int32
       </div>

      </div>

     </div>

     <div class="message service" id="message90">

      <div class="body details">
Александр Белугин invited Александр Белугин
      </div>

     </div>

     <div class="message default clearfix" id="message91">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic4" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
EV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:00:32">
16:00
       </div>

       <div class="from_name">
Eduard Vlasov
       </div>

       <div class="text">
данных для таблицы несколько петабайт (сырых)
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message92">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:00:39">
16:00
       </div>

       <div class="text">
запросы - поисковые
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message93">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:00:44">
16:00
       </div>

       <div class="text">
взлетит? :)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message94">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DP
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:01:50">
16:01
       </div>

       <div class="from_name">
Darafei Praliaskouski
       </div>

       <div class="text">
что такое &quot;запросы - поисковые&quot;? :)
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message95">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:01:56">
16:01
       </div>

       <div class="text">
knn?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message96">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic4" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
EV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:02:23">
16:02
       </div>

       <div class="from_name">
Eduard Vlasov
       </div>

       <div class="text">
select * from ... where a between x and y and b &gt; z
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message97">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:02:28">
16:02
       </div>

       <div class="text">
наподобие таких
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message98">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:02:32">
16:02
       </div>

       <div class="text">
т.е. не аггрегация
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message99">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DA
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:03:43">
16:03
       </div>

       <div class="from_name">
Dmitry Andreev
       </div>

       <div class="text">
а сколько записей в строках и какой рпс на чтение?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message100">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic4" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
EV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:04:10">
16:04
       </div>

       <div class="from_name">
Eduard Vlasov
       </div>

       <div class="text">
рпс - сколько сможет сгенерить один человек :)
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message101">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:04:17">
16:04
       </div>

       <div class="text">
ну несколько раз в день
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message102">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:04:21">
16:04
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
А читается сколько данных?
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message103">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:04:25">
16:04
       </div>

       <div class="text">
Какой объем
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message104">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic4" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
EV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:04:32">
16:04
       </div>

       <div class="from_name">
Eduard Vlasov
       </div>

       <div class="text">
несколько мегабайт
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message105">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:04:38">
16:04
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
А, ну взлетит конечно.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message106">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:04:45">
16:04
       </div>

       <div class="text">
Особенно если по индексу получится
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message107">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic4" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
EV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:04:46">
16:04
       </div>

       <div class="from_name">
Eduard Vlasov
       </div>

       <div class="text">
чтобы не быть голословным, данные - netflow
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message108">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:04:54">
16:04
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Ага. Должно заработать без проблем
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message109">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:05:02">
16:05
       </div>

       <div class="text">
Попробуйте семпл загрузить гигабайт на 100 например
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message110">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic4" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
EV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:05:13">
16:05
       </div>

       <div class="from_name">
Eduard Vlasov
       </div>

       <div class="text">
спасибо, как раз собираюсь
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message111">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DK
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:05:25">
16:05
       </div>

       <div class="from_name">
Dmitriy Kalugin-Balashov
       </div>

       <div class="text">
А поделитесь ссылкой на описание протокола?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message112">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:05:26">
16:05
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Тут с индексом основной вопрос
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message113">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DK
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:05:36">
16:05
       </div>

       <div class="from_name">
Dmitriy Kalugin-Balashov
       </div>

       <div class="text">
Порисую бенчмарки на досуге.
       </div>

      </div>

     </div>

     <div class="message service" id="message114">

      <div class="body details">
Deleted Account invited Deleted Account
      </div>

     </div>

     <div class="message default clearfix" id="message115">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:06:22">
16:06
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Протокол? http?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message116">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DK
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:06:31">
16:06
       </div>

       <div class="from_name">
Dmitriy Kalugin-Balashov
       </div>

       <div class="text">
Ага. А под ним?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message117">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:06:37">
16:06
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
<a href="https://clickhouse.yandex/reference_en.html#HTTP%20interface">https://clickhouse.yandex/reference_en.html#HTTP%20interface</a>
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message118">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:06:42">
16:06
       </div>

       <div class="text">
Вот тут дока
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message119">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DK
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:07:05">
16:07
       </div>

       <div class="from_name">
Dmitriy Kalugin-Balashov
       </div>

       <div class="text">
Ага, спасибо!
       </div>

      </div>

     </div>

     <div class="message service" id="message120">

      <div class="body details">
Vitaliy Lyudvichenko invited Vitaliy Lyudvichenko
      </div>

     </div>

     <div class="message default clearfix" id="message121">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:07:28">
16:07
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Под HTTP TCP =)
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message122">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:07:32">
16:07
       </div>

       <div class="text">
Не очень понял вопроса
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message123">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DK
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:07:57">
16:07
       </div>

       <div class="from_name">
Dmitriy Kalugin-Balashov
       </div>

       <div class="text">
То есть над. Список параметров спрашивал (уже вижу). :)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message124">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:08:47">
16:08
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Можно реализацию готовую посмотреть
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message125">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:08:47">
16:08
       </div>

       <div class="text">
<a href="https://github.com/Infinidat/infi.clickhouse_orm/tree/develop/src/infi/clickhouse_orm">https://github.com/Infinidat/infi.clickhouse_orm/tree/develop/src/infi/clickhouse_orm</a>
       </div>

      </div>

     </div>

     <div class="message service" id="message126">

      <div class="body details">
Maxim Uvarov invited Maxim Uvarov
      </div>

     </div>

     <div class="message service" id="message127">

      <div class="body details">
Дмитрий Игнатов invited Дмитрий Игнатов
      </div>

     </div>

     <div class="message service" id="message128">

      <div class="body details">
Alexander Sigatchov invited Alexander Sigatchov
      </div>

     </div>

     <div class="message default clearfix" id="message129">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DK
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:13:30">
16:13
       </div>

       <div class="from_name">
Dmitriy Kalugin-Balashov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message124" onclick="return GoToMessage(124)">this message</a>
       </div>

       <div class="text">
А cli-клиент он тоже http под капотом? Никакого другого интерфейса нет?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message130">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:13:33">
16:13
       </div>

       <div class="from_name">
Aleksey Shirokikh
       </div>

       <div class="pull_left forwarded userpic_wrap">

        <div class="userpic userpic1" style="width: 42px; height: 42px">

         <div class="initials" style="line-height: 42px">
AF
         </div>

        </div>

       </div>

       <div class="forwarded body">

        <div class="from_name">
Andrew Filonov<span class="details"> 20.06.2016 18:21:46</span>
        </div>

        <div class="text">
А хз. На netflow оно едет гораздо дальше и быстрее чем оригинальный nfcap который под это заточен
        </div>

       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message131">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:13:33">
16:13
       </div>

       <div class="forwarded body">

        <div class="text">
хотя я всерьез думаю - не попробовать ли складывать туда syslog
        </div>

       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message132">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:13:33">
16:13
       </div>

       <div class="pull_left forwarded userpic_wrap">

        <div class="userpic userpic1" style="width: 42px; height: 42px">

         <div class="initials" style="line-height: 42px">
AF
         </div>

        </div>

       </div>

       <div class="forwarded body">

        <div class="from_name">
Andrew Filonov<span class="details"> 20.06.2016 18:47:56</span>
        </div>

        <div class="text">
я тестил. см выше. 10кратная экономия места по сравнению с nfcap
        </div>

       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message133">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:13:33">
16:13
       </div>

       <div class="forwarded body">

        <div class="text">
возможности аналитики - просто несравнимы
        </div>

       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message134">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:13:33">
16:13
       </div>

       <div class="forwarded body">

        <div class="text">
841гиг нетфлова а не 31 :)
        </div>

       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message135">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:13:33">
16:13
       </div>

       <div class="forwarded body">

        <div class="text">
исходная  выборка - за одни сутки. нарезка 10-минутными интервалами
        </div>

       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message136">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic4" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
EV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:14:02">
16:14
       </div>

       <div class="from_name">
Eduard Vlasov
       </div>

       <div class="text">
Виктор, а с удалением данных как дела обстоят? В целях освобождения места.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message137">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DK
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:14:09">
16:14
       </div>

       <div class="from_name">
Dmitriy Kalugin-Balashov
       </div>

       <div class="text">
<a href="https://github.com/mailru/nosql-benchmark">https://github.com/mailru/nosql-benchmark</a> - хочу сюда бенчмарк добавить.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message138">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:14:39">
16:14
       </div>

       <div class="from_name">
Aleksey Shirokikh
       </div>

       <div class="text">
Эдик почти твоя тема
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message139">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic4" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
EV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:14:45">
16:14
       </div>

       <div class="from_name">
Eduard Vlasov
       </div>

       <div class="text">
Т.е. старый netflow нас не интересует, через 3 года его можно удалить.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message140">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:14:58">
16:14
       </div>

       <div class="from_name">
Vladimir Smirnov
       </div>

       <div class="text">
<a href="https://t.me/the_real_jkee">@the_real_jkee</a> а есть part2 доклада? )
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message141">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic4" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
EV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:15:02">
16:15
       </div>

       <div class="from_name">
Eduard Vlasov
       </div>

       <div class="text">
Леха, спасибо, да.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message142">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:15:03">
16:15
       </div>

       <div class="from_name">
Vladimir Smirnov
       </div>

       <div class="text">
или там part1 просто так?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message143">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:15:22">
16:15
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Часть 2 там где-то вроде есть, но не факт
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message144">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:15:28">
16:15
       </div>

       <div class="text">
Там вроде только вопросы не влезли
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message145">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:15:44">
16:15
       </div>

       <div class="from_name">
Vladimir Smirnov
       </div>

       <div class="text">
ну так самое интересное ж)
       </div>

      </div>

     </div>

     <div class="message service" id="message146">

      <div class="body details">
🔒Zloool🔒 invited 🔒Zloool🔒
      </div>

     </div>

     <div class="message default clearfix" id="message147">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:15:51">
16:15
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Удаление так: можно по месяцам, можно через collapsedmergetree
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message148">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:16:08">
16:16
       </div>

       <div class="text">
Подробнее мы постараемся написать в блоге, когда будет блог
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message149">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:16:12">
16:16
       </div>

       <div class="from_name">
Vladimir Smirnov
       </div>

       <div class="text">
и ты говорил что там следующий доклад - а он где? )
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message150">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic4" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
EV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:16:14">
16:16
       </div>

       <div class="from_name">
Eduard Vlasov
       </div>

       <div class="text">
По месяцам заедет, да.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message151">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:16:17">
16:16
       </div>

       <div class="text">
Спасибо.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message152">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:16:20">
16:16
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Тогда
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message153">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:16:25">
16:16
       </div>

       <div class="text">
Drop partition
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message154">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic4" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
EV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:17:32">
16:17
       </div>

       <div class="from_name">
Eduard Vlasov
       </div>

       <div class="text">
Партиции по нодам разбросаны?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message155">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:17:51">
16:17
       </div>

       <div class="from_name">
Aleksey Shirokikh
       </div>

       <div class="text">
ага да
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message156">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:17:58">
16:17
       </div>

       <div class="text">
позырь оба доклада
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message157">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:18:05">
16:18
       </div>

       <div class="text">
но в вашей схеме все будет не просто...
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message158">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:18:09">
16:18
       </div>

       <div class="text">
винты отдельно же
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message159">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic4" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
EV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:18:10">
16:18
       </div>

       <div class="from_name">
Eduard Vlasov
       </div>

       <div class="text">
так я зырил, но видать не все уловил :)
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message160">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:18:28">
16:18
       </div>

       <div class="text">
Меня Антропов заверли что железо найдется :)
       </div>

      </div>

     </div>

     <div class="message service" id="message161">

      <div class="body details">
Deleted Account invited Deleted Account
      </div>

     </div>

     <div class="message service" id="message162">

      <div class="body details">
Denis Rogov invited Denis Rogov
      </div>

     </div>

     <div class="message default clearfix" id="message163">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:22:14">
16:22
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message144" onclick="return GoToMessage(144)">this message</a>
       </div>

       <div class="text">
а в вопросах по сути самое интересное...<br>по факту, пока кроме складирования логов и записи событий с сайтов юзкейс кликхаус не очевиден, а перспективе даже не особо выгоден, несмотря на опэнсорс...
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message164">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:23:51">
16:23
       </div>

       <div class="from_name">
Aleksey Shirokikh
       </div>

       <div class="text">
аналитика же
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message165">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:24:25">
16:24
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="text">
у вертики в разы больше преимуществ, начиная от нормальной поддержки SQL и заканчивая другими вещами
       </div>

      </div>

     </div>

     <div class="message service" id="message166">

      <div class="body details">
Magistr invited Magistr
      </div>

     </div>

     <div class="message default clearfix" id="message167">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:25:02">
16:25
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="text">
тогда как у кликхаус есть аналитика, но нет стандарта общения, а потому есть дока, а следовательно надо учить людей, тратить время и деньги
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message168">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:26:18">
16:26
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Пожалуй, не буду с вами устраивать здесь жаркие споры.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message169">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:26:28">
16:26
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="text">
не, я не устраиваю спор
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message170">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:26:35">
16:26
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Вертика - хорошее решение, если есть на неё деньги.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message171">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic4" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
EV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:26:39">
16:26
       </div>

       <div class="from_name">
Eduard Vlasov
       </div>

       <div class="text">
+
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message172">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:26:44">
16:26
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
На петабайты она стоит космос
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message173">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:26:49">
16:26
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="text">
просто приведите реальные юзкейсы, которые могли бы выйти за пределы IT-компаний
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message174">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:27:13">
16:27
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Аналитика, все тоже самое.
       </div>

      </div>

     </div>

     <div class="message service" id="message175">

      <div class="body details">
Ilya Zaytsev 🍺 invited Ilya Zaytsev 🍺
      </div>

     </div>

     <div class="message service" id="message176">

      <div class="body details">
Sergey Bogatyrets invited Sergey Bogatyrets
      </div>

     </div>

     <div class="message default clearfix" id="message177">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:27:35">
16:27
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Сейчас любая компания на сколько-то IT
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message178">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:27:42">
16:27
       </div>

       <div class="from_name">
Aleksey Shirokikh
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message173" onclick="return GoToMessage(173)">this message</a>
       </div>

       <div class="text">
врятли сейчас есть не it компании.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message179">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:27:53">
16:27
       </div>

       <div class="text">
есть компании которые не знают как применить it
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message180">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:28:24">
16:28
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="text">
понятно
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message181">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:28:53">
16:28
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
И сейчас кликхаус действительно не для них.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message182">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:28:53">
16:28
       </div>

       <div class="text">
Это не сервис, это скорее кубик
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message183">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:28:57">
16:28
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="text">
Т.е. компании по продаже печенек ставить кликхаус нет смысла
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message184">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:29:16">
16:29
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Ну только если петабайты печенек :)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message185">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DP
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:29:25">
16:29
       </div>

       <div class="from_name">
Darafei Praliaskouski
       </div>

       <div class="text">
он будет у них внутри кассового аппарата, и они не должны об этом даже знать
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message186">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:29:29">
16:29
       </div>

       <div class="from_name">
Aleksey Shirokikh
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message183" onclick="return GoToMessage(183)">this message</a>
       </div>

       <div class="text">
сбор информации с конвеера и складов
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message187">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
E
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:29:37">
16:29
       </div>

       <div class="from_name">
Etki 
       </div>

       <div class="text">
Я пока слабо представляю сам кликхаус как продукт, но меня он сейчас интересует в разрезе сбора аналитики по нашим звонкам, потому что по воле звезд мы сидим на мускуле, в который запихнут event sourcing, и прямо там это дело немного сложно собирать.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message188">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:29:52">
16:29
       </div>

       <div class="from_name">
Aleksey Shirokikh
       </div>

       <div class="text">
в реалмайме и аналитика выхода из сторя конвеера :)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message189">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:30:11">
16:30
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message186" onclick="return GoToMessage(186)">this message</a>
       </div>

       <div class="text">
не очевидна и требует крупных вложений для не IT-компаний, т.к. необходима разработка. Инстурментов для ETL для кликхаус на текущий момент нет как класс...
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message190">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:30:34">
16:30
       </div>

       <div class="from_name">
Aleksey Shirokikh
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message189" onclick="return GoToMessage(189)">this message</a>
       </div>

       <div class="text">
<a href="" onclick="return ShowHashtag(&quot;некоробка&quot;)">#некоробка</a>
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message191">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:31:01">
16:31
       </div>

       <div class="media_wrap clearfix">

        <div class="media clearfix pull_left media_photo">

         <div class="fill pull_left">

         </div>

         <div class="body">

          <div class="title bold">
Photo
          </div>

          <div class="description">
Not included, change data exporting settings to download.
          </div>

          <div class="status details">
1280x960, 95.2 KB
          </div>

         </div>

        </div>

       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message192">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:31:11">
16:31
       </div>

       <div class="text">
сейчас для early adopters
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message193">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:31:13">
16:31
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message190" onclick="return GoToMessage(190)">this message</a>
       </div>

       <div class="text">
и нет людей, как я выше писал, т.к. для работы с кликхаус надо обучаться
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message194">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:31:28">
16:31
       </div>

       <div class="from_name">
Aleksey Shirokikh
       </div>

       <div class="text">
или даже раньше
       </div>

      </div>

     </div>

     <div class="message service" id="message195">

      <div class="body details">
Alexander Sibrikov invited Alexander Sibrikov
      </div>

     </div>

     <div class="message service" id="message196">

      <div class="body details">
Andrey SlashMan invited Andrey SlashMan
      </div>

     </div>

     <div class="message service" id="message197">

      <div class="body details">
Denis Gabaydulin invited Denis Gabaydulin
      </div>

     </div>

     <div class="message service" id="message198">

      <div class="body details">
Andrew invited Andrew
      </div>

     </div>

     <div class="message service" id="message199">

      <div class="body details">
Sergey Sviridov invited Sergey Sviridov
      </div>

     </div>

     <div class="message service" id="message200">

      <div class="body details">
Max Kha invited Max Kha
      </div>

     </div>

     <div class="message default clearfix" id="message201">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VZ
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:36:19">
16:36
       </div>

       <div class="from_name">
Vladimir Zagranovsky
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message193" onclick="return GoToMessage(193)">this message</a>
       </div>

       <div class="text">
<a href="https://events.yandex.ru/events/yagosti/21-november-2016/">https://events.yandex.ru/events/yagosti/21-november-2016/</a>
       </div>

      </div>

     </div>

     <div class="message service" id="message202">

      <div class="body details">
tufedtm invited tufedtm
      </div>

     </div>

     <div class="message default clearfix" id="message203">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:36:40">
16:36
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Да, спасибо за ссылку
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message204">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:36:44">
16:36
       </div>

       <div class="text">
Приходите на митап!
       </div>

      </div>

     </div>

     <div class="message service" id="message205">

      <div class="body details">
Alexey invited Alexey
      </div>

     </div>

     <div class="message service" id="message206">

      <div class="body details">
Vasilii Pankratov invited Vasilii Pankratov
      </div>

     </div>

     <div class="message service" id="message207">

      <div class="body details">
Simon invited Simon
      </div>

     </div>

     <div class="message service" id="message208">

      <div class="body details">
Deleted Account invited Deleted Account
      </div>

     </div>

     <div class="message default clearfix" id="message209">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VZ
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:40:53">
16:40
       </div>

       <div class="from_name">
Vladimir Zagranovsky
       </div>

       <div class="text">
Кстати, кто знает про success stories внедрения кликхауса - делитесь ссылками (помимо Я конечно), типа такого <a href="http://www.highload.ru/2016/abstracts/2297.html">http://www.highload.ru/2016/abstracts/2297.html</a>
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message210">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:42:18">
16:42
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Вот
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message211">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:42:18">
16:42
       </div>

       <div class="text">
<a href="https://habrahabr.ru/company/smi2/blog/314558/">https://habrahabr.ru/company/smi2/blog/314558/</a>
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message212">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:42:42">
16:42
       </div>

       <div class="text">
И ещё интересно: <a href="https://habrahabr.ru/post/304602/">https://habrahabr.ru/post/304602/</a>
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message213">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:42:47">
16:42
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message209" onclick="return GoToMessage(209)">this message</a>
       </div>

       <div class="text">
Вот поэтому выступлению я как раз и понял, что продукт совсем не очевиден...
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message214">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DA
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:43:34">
16:43
       </div>

       <div class="from_name">
Dmitry Andreev
       </div>

       <div class="text">
Мой доклад про здоровье маркета с КХ под капотом <a href="https://events.yandex.ru/lib/talks/3715/">https://events.yandex.ru/lib/talks/3715/</a>
       </div>

      </div>

     </div>

     <div class="message service" id="message215">

      <div class="body details">
Alexey Poimtsev invited Alexey Poimtsev
      </div>

     </div>

     <div class="message default clearfix" id="message216">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VZ
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:54:20">
16:54
       </div>

       <div class="from_name">
Vladimir Zagranovsky
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message213" onclick="return GoToMessage(213)">this message</a>
       </div>

       <div class="text">
прелесть в том, что КХ опенсорс и своим PR&apos;ом можно сделать очевиднее :)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message217">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:55:52">
16:55
       </div>

       <div class="from_name">
Aleksey Shirokikh
       </div>

       <div class="text">
нее ребят вы явно из разных весовых категорий :)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message218">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:56:12">
16:56
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message216" onclick="return GoToMessage(216)">this message</a>
       </div>

       <div class="text">
я не спорю, это очень большой плюс, но как я уже говорил, из-за специфики SQL и прочего, придется тратиться на другие вещи...
       </div>

      </div>

     </div>

     <div class="message service" id="message219">

      <div class="body details">
Dmitry Vasiliev invited Dmitry Vasiliev
      </div>

     </div>

     <div class="message service" id="message220">

      <div class="body details">
Марк ☢️ Коренберг invited Марк ☢️ Коренберг
      </div>

     </div>

     <div class="message default clearfix" id="message221">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 16:57:50">
16:57
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="text">
да и если вспомнить доклад у лайфстрит, там проскочила фраза, что на кликхаус тратилось на 20% больше места, пускай и с поправкой, что там можно в конфиге прописать параметры сжатия для древних записей
       </div>

      </div>

     </div>

     <div class="message service" id="message222">

      <div class="body details">
kdmitriy invited kdmitriy
      </div>

     </div>

     <div class="message default clearfix" id="message223">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:01:25">
17:01
       </div>

       <div class="from_name">
Aleksey Shirokikh
       </div>

       <div class="text">
Владислав, вопрос не в том куда нельзя применить кликхаус, вопрос в том куда можно :)
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message224">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:01:43">
17:01
       </div>

       <div class="text">
и где от него будет проку прям щас
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message225">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:01:58">
17:01
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="text">
да 👍🏻
       </div>

      </div>

     </div>

     <div class="message service" id="message226">

      <div class="body details">
Stanislav invited Stanislav
      </div>

     </div>

     <div class="message default clearfix" id="message227">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:04:03">
17:04
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message223" onclick="return GoToMessage(223)">this message</a>
       </div>

       <div class="text">
ну я вот и спрашиваю, куда можно? я вижу только логи серверов и сбор данных с сайтов...<br>Я не вижу, как можно применять подобную аналитику, например, в продажах...
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message228">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:04:13">
17:04
       </div>

       <div class="from_name">
Aleksey Shirokikh
       </div>

       <div class="text">
получится заюзать его прям из докер образа - супер. <br>надо будет впилит ьпару функций ну.... ок. <br>надо будет дописать 100500 строк уже хуже.
       </div>

      </div>

     </div>

     <div class="message service" id="message229">

      <div class="body details">
Андрей Оськин invited Андрей Оськин
      </div>

     </div>

     <div class="message service" id="message230">

      <div class="body details">
Anton Kotenko invited Anton Kotenko
      </div>

     </div>

     <div class="message default clearfix" id="message231">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic4" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
S
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:04:37">
17:04
       </div>

       <div class="from_name">
Stanislav 
       </div>

       <div class="text">
facepalm
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message232">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:04:41">
17:04
       </div>

       <div class="from_name">
Aleksey Shirokikh
       </div>

       <div class="text">
не очень я понимаю в продажах.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message233">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:04:46">
17:04
       </div>

       <div class="text">
там обычно точные цифры нужны
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message234">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:04:48">
17:04
       </div>

       <div class="text">
очень
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message235">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:05:03">
17:05
       </div>

       <div class="text">
но бывает что нужны менее точные цифры быстро.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message236">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:05:06">
17:05
       </div>

       <div class="text">
туда и применяйте
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message237">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
E
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:05:19">
17:05
       </div>

       <div class="from_name">
Etki 
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message227" onclick="return GoToMessage(227)">this message</a>
       </div>

       <div class="text">
да банально тренды считать и следить, чтобы не падали
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message238">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:05:35">
17:05
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message237" onclick="return GoToMessage(237)">this message</a>
       </div>

       <div class="text">
невыгодно
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message239">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
E
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:06:19">
17:06
       </div>

       <div class="from_name">
Etki 
       </div>

       <div class="text">
как быстро бизнес-модель посчиталась
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message240">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:06:21">
17:06
       </div>

       <div class="text">
вот есть икея
       </div>

      </div>

     </div>

     <div class="message service" id="message241">

      <div class="body details">
Vadim Yatsenko invited Vadim Yatsenko
      </div>

     </div>

     <div class="message default clearfix" id="message242">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
E
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:06:33">
17:06
       </div>

       <div class="from_name">
Etki 
       </div>

       <div class="text">
у икеи есть такая штука, как ожидание количества товара в нужный момент в нужном магазине
       </div>

      </div>

     </div>

     <div class="message service" id="message243">

      <div class="body details">
Semen Dubina invited Semen Dubina
      </div>

     </div>

     <div class="message default clearfix" id="message244">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:06:50">
17:06
       </div>

       <div class="from_name">
Aleksey Shirokikh
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message238" onclick="return GoToMessage(238)">this message</a>
       </div>

       <div class="text">
есть экселька с расчетом :) ?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message245">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
E
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:07:36">
17:07
       </div>

       <div class="from_name">
Etki 
       </div>

       <div class="text">
вот икея мне кажется весьма подходящим вариантом, и, более того, они могут сэкономить, взяв OSS-продукт и пару разработчиков на интеграцию
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message246">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:07:51">
17:07
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message233" onclick="return GoToMessage(233)">this message</a>
       </div>

       <div class="text">
а кликхаус не умеет в точность? о_0 мне казалось, &quot;приблизительность&quot; была заявлена как доп опция, а не замена &quot;точности&quot;...
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message247">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:08:39">
17:08
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message244" onclick="return GoToMessage(244)">this message</a>
       </div>

       <div class="text">
она нужна? мне кажется внедрять новый продукт стоит дороже, чем использовать текущий...
       </div>

      </div>

     </div>

     <div class="message service" id="message248">

      <div class="body details">
/dev/urandon ¯\_(ツ)_/¯ invited /dev/urandon ¯\_(ツ)_/¯
      </div>

     </div>

     <div class="message default clearfix" id="message249">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:08:58">
17:08
       </div>

       <div class="from_name">
Aleksey Shirokikh
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message247" onclick="return GoToMessage(247)">this message</a>
       </div>

       <div class="text">
хз хз хз
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message250">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:09:28">
17:09
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="text">
можно озвучить пример, когда внедрение оправдывается?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message251">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:09:46">
17:09
       </div>

       <div class="from_name">
Aleksey Shirokikh
       </div>

       <div class="text">
давайте от обратного :) какой у вас кейс
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message252">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DA
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:09:55">
17:09
       </div>

       <div class="from_name">
Dmitry Andreev
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message246" onclick="return GoToMessage(246)">this message</a>
       </div>

       <div class="text">
Конечно умеет. Все основные функции всегда делают точные вычисления (если не указано использовать семплирование)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message253">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:10:09">
17:10
       </div>

       <div class="from_name">
Aleksey Shirokikh
       </div>

       <div class="text">
а то чо то как то ни о чем разговор
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message254">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:10:40">
17:10
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="text">
ну например, множество источников данных, начиная от энтерпрайз БД, заканчивая файликами, необходима отчетность и аналитика
       </div>

      </div>

     </div>

     <div class="message service" id="message255">

      <div class="body details">
Марат Н invited Марат Н
      </div>

     </div>

     <div class="message service" id="message256">

      <div class="body details">
Dmitry says invited Dmitry says
      </div>

     </div>

     <div class="message default clearfix" id="message257">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic4" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
Ds
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:11:38">
17:11
       </div>

       <div class="from_name">
Dmitry says
       </div>

       <div class="text">
Всем привет!
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message258">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:11:41">
17:11
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="text">
и да, масштабы поступления новых данных гораздо ниже, чем у лайфстрит
       </div>

      </div>

     </div>

     <div class="message service" id="message259">

      <div class="body details">
Igor invited Igor
      </div>

     </div>

     <div class="message default clearfix" id="message260">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
V
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:11:57">
17:11
       </div>

       <div class="from_name">
Vadim Yatsenko 
       </div>

       <div class="text">
Все те же лица что pgsql чате :)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message261">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic7" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
M
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:11:58">
17:11
       </div>

       <div class="from_name">
Magistr 
       </div>

       <div class="text">
юзкейс по типу метрики, рекламных юзеров собирать и показы, данные актуальны пару недель
       </div>

      </div>

     </div>

     <div class="message service" id="message262">

      <div class="body details">
Vlad Vinogradov 🚲 invited Vlad Vinogradov 🚲
      </div>

     </div>

     <div class="message service" id="message263">

      <div class="body details">
Vadim Yatsenko invited Nik S and Michael Goldberg
      </div>

     </div>

     <div class="message default clearfix" id="message264">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
MF
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:15:18">
17:15
       </div>

       <div class="from_name">
Maxim Filatov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message260" onclick="return GoToMessage(260)">this message</a>
       </div>

       <div class="text">
ты так говоришь, будто это что-то плохое :D
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message265">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
V
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:15:47">
17:15
       </div>

       <div class="from_name">
Vadim Yatsenko 
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message264" onclick="return GoToMessage(264)">this message</a>
       </div>

       <div class="text">
ни в коем случае :)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message266">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic4" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
S
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:15:52">
17:15
       </div>

       <div class="from_name">
Stanislav 
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message260" onclick="return GoToMessage(260)">this message</a>
       </div>

       <div class="text">
Ну не только я работаю в рекламной платформе же )
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message267">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:16:07">
17:16
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message261" onclick="return GoToMessage(261)">this message</a>
       </div>

       <div class="text">
Именно так.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message268">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic7" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
M
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:16:56">
17:16
       </div>

       <div class="from_name">
Magistr 
       </div>

       <div class="text">
Жаль что у нас пока на хадупе это делают ибо пока такого же сообщества нет
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message269">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic4" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
S
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:17:27">
17:17
       </div>

       <div class="from_name">
Stanislav 
       </div>

       <div class="text">
У нас тоже хадуповая реализация есть, но КХ ее убил. Весь R&amp;D переключился на КХ.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message270">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic7" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
M
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:18:08">
17:18
       </div>

       <div class="from_name">
Magistr 
       </div>

       <div class="text">
А как получилось убить ? а то у нас всякий спарк стриминг и прочие джобы прикручивают
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message271">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic4" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
S
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:18:55">
17:18
       </div>

       <div class="from_name">
Stanislav 
       </div>

       <div class="text">
У нас очень плохо реализован data flow, и почти нет event-ориентированной архитектуры.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message272">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:19:05">
17:19
       </div>

       <div class="text">
Поэтому КХ попал точно в цель
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message273">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:21:26">
17:21
       </div>

       <div class="from_name">
Aleksey Shirokikh
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message268" onclick="return GoToMessage(268)">this message</a>
       </div>

       <div class="text">
этому сообществу 2 часа.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message274">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:21:39">
17:21
       </div>

       <div class="text">
завести другое по всяким хадупам нет проблемы
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message275">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic7" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
M
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:22:12">
17:22
       </div>

       <div class="from_name">
Magistr 
       </div>

       <div class="text">
я про сообщество в смысле коммунити и прочий стековерфлоу
       </div>

      </div>

     </div>

     <div class="message service" id="message276">

      <div class="body details">
Deleted Account invited Deleted Account
      </div>

     </div>

     <div class="message service" id="message277">

      <div class="body details">
Maksim Ivanyukhin invited Maksim Ivanyukhin
      </div>

     </div>

     <div class="message service" id="message278">

      <div class="body details">
Alexey Preobrazhenskiy invited Alexey Preobrazhenskiy
      </div>

     </div>

     <div class="message default clearfix" id="message279">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
ВС
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:35:07">
17:35
       </div>

       <div class="from_name">
Виталий Солдатов
       </div>

       <div class="text">
Если в базу залить нетфлоу, то получится сделать выборку их бд что-то вроде такого: хост; все его порты на которые были обращения за месяц; сгруппированные по сетям потребители?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message280">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:35:39">
17:35
       </div>

       <div class="from_name">
Aleksey Shirokikh
       </div>

       <div class="text">
вопрос в функции агрегации сетей видимо
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message281">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
pk
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:37:45">
17:37
       </div>

       <div class="from_name">
papa karlo
       </div>

       <div class="text">
&quot;по сетям&quot; - это по чему?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message282">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
ВС
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:37:53">
17:37
       </div>

       <div class="from_name">
Виталий Солдатов
       </div>

       <div class="text">
Да. Пусть даже в каком-то ipam есть уже эти префиксы
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message283">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic4" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
S
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:38:30">
17:38
       </div>

       <div class="from_name">
Stanislav 
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message279" onclick="return GoToMessage(279)">this message</a>
       </div>

       <div class="text">
Да, причем можно даже в реальном времени
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message284">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
ВС
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:38:34">
17:38
       </div>

       <div class="from_name">
Виталий Солдатов
       </div>

       <div class="text">
Есть хосты. Надо увязать с подсетями из списка
       </div>

      </div>

     </div>

     <div class="message service" id="message285">

      <div class="body details">
Kirill Solokhov invited Kirill Solokhov
      </div>

     </div>

     <div class="message default clearfix" id="message286">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
pk
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:41:50">
17:41
       </div>

       <div class="from_name">
papa karlo
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message284" onclick="return GoToMessage(284)">this message</a>
       </div>

       <div class="text">
выглядит как задача для словаря, но не уверен что <pre>range_hashed</pre> для этого сейчас приспособлен.
       </div>

      </div>

     </div>

     <div class="message service" id="message287">

      <div class="body details">
ovf invited ovf
      </div>

     </div>

     <div class="message service" id="message288">

      <div class="body details">
hdhog invited hdhog
      </div>

     </div>

     <div class="message service" id="message289">

      <div class="body details">
Александр 🐎 invited Александр 🐎
      </div>

     </div>

     <div class="message default clearfix" id="message290">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
А?
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:51:11">
17:51
       </div>

       <div class="from_name">
Александр 🐎
       </div>

       <div class="text">
Зачем оно нужно?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message291">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
ВС
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:51:45">
17:51
       </div>

       <div class="from_name">
Виталий Солдатов
       </div>

       <div class="text">
Есть старый пакет flow-tools со своим коллектором и reportами. Очень медленно и неудобно.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message292">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:53:02">
17:53
       </div>

       <div class="text">
Анализ флуда, вирусни, аудит для внедрения межсетевых экранов, например
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message293">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AK
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:54:18">
17:54
       </div>

       <div class="from_name">
Aleksandr Kozlov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message290" onclick="return GoToMessage(290)">this message</a>
       </div>

       <div class="text">
изначально создавалось для аналитики, но область применения каждый определяет для себя сам с учётом его преимуществ и недостатков
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message294">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
А?
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:55:06">
17:55
       </div>

       <div class="from_name">
Александр 🐎
       </div>

       <div class="text">
Хм, а карту построить можно?
       </div>

      </div>

     </div>

     <div class="message service" id="message295">

      <div class="body details">
Maxim Titaruk invited Maxim Titaruk
      </div>

     </div>

     <div class="message service" id="message296">

      <div class="body details">
Bogdan (SirEdvin) Gladyshev invited Bogdan (SirEdvin) Gladyshev
      </div>

     </div>

     <div class="message default clearfix" id="message297">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:57:34">
17:57
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Географическую? =)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message298">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
А?
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:57:44">
17:57
       </div>

       <div class="from_name">
Александр 🐎
       </div>

       <div class="text">
Нет, тепловую
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message299">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:57:55">
17:57
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message294" onclick="return GoToMessage(294)">this message</a>
       </div>

       <div class="text">
Можно, если это, например, &quot;карта кликов&quot; в Метрике.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message300">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:58:08">
17:58
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
ClickHouse это база данных, не визуализация.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message301">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:58:22">
17:58
       </div>

       <div class="text">
Посмотрите доклад, например, или почитайте описание на сайте.
       </div>

      </div>

     </div>

     <div class="message service" id="message302">

      <div class="body details">
yopp invited yopp
      </div>

     </div>

     <div class="message default clearfix" id="message303">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
А?
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:58:46">
17:58
       </div>

       <div class="from_name">
Александр 🐎
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message300" onclick="return GoToMessage(300)">this message</a>
       </div>

       <div class="text">
База это информация которую надо визуализировать
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message304">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:59:00">
17:59
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Ну, или не надо.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message305">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
А?
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:59:07">
17:59
       </div>

       <div class="from_name">
Александр 🐎
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message299" onclick="return GoToMessage(299)">this message</a>
       </div>

       <div class="text">
Ага спасибо
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message306">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:59:07">
17:59
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message303" onclick="return GoToMessage(303)">this message</a>
       </div>

       <div class="text">
&quot;надо&quot;, а не &quot;можно&quot; - это ключевой момент
       </div>

      </div>

     </div>

     <div class="message service" id="message307">

      <div class="body details">
Grigory Demchenko invited Grigory Demchenko
      </div>

     </div>

     <div class="message default clearfix" id="message308">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
А?
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 17:59:37">
17:59
       </div>

       <div class="from_name">
Александр 🐎
       </div>

       <div class="text">
Ну пусть будет можно
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message309">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:00:00">
18:00
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="text">
визуализировать можно почти все, БД на это не влияет...
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message310">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
y
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:00:33">
18:00
       </div>

       <div class="from_name">
yopp 
       </div>

       <div class="text">
Я так понимаю что CH это eventually consistent хранилище, без каких либо гарантий чего либо?
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message311">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:00:47">
18:00
       </div>

       <div class="text">
ну тоесть я туда пишу данные и я не знаю что с ними будет
       </div>

      </div>

     </div>

     <div class="message service" id="message312">

      <div class="body details">
Igor invited Igor
      </div>

     </div>

     <div class="message default clearfix" id="message313">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:01:15">
18:01
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
Всем привет :3
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message314">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AK
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:01:34">
18:01
       </div>

       <div class="from_name">
Aleksandr Kozlov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message313" onclick="return GoToMessage(313)">this message</a>
       </div>

       <div class="text">
✋
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message315">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:04:08">
18:04
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
Имеет смысл добавить этот чатик в раздел документации &quot;если возникли вопросы&quot; или здесь и так слишком много народу? )
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message316">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:04:19">
18:04
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Я уже добавил
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message317">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:04:34">
18:04
       </div>

       <div class="text">
<a href="https://clickhouse.yandex/#feedback">https://clickhouse.yandex/#feedback</a>
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message318">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:04:43">
18:04
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
Спасибо ) А то я случайно в #176 наткнулся
       </div>

      </div>

     </div>

     <div class="message service" id="message319">

      <div class="body details">
Artyom Vybornov invited Artyom Vybornov
      </div>

     </div>

     <div class="message service" id="message320">

      <div class="body details">
Alexandra Kulachikova invited Alexandra Kulachikova
      </div>

     </div>

     <div class="message default clearfix" id="message321">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:06:29">
18:06
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message311" onclick="return GoToMessage(311)">this message</a>
       </div>

       <div class="text">
Если INSERT вернул Ok - значит данные записаны на файловую систему (не на диск) одной реплики.<br><br>Это значит:<br>- если kill -9, то с данными всё Ок;<br>- если грубый рестарт сервера, то небольшой кусок последних данных будет потерян.<br><br>При этом, данные которые были записаны не только что, не теряются, при условии выживания хотя бы одной реплики.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message322">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
ES
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:07:59">
18:07
       </div>

       <div class="from_name">
Evgeniy Shishkin
       </div>

       <div class="text">
&gt;- если kill -9, то с данными всё Ок;<br>&gt;- если грубый рестарт сервера, то небольшой кусок последних данных будет потерян.<br><br>противоречивые параграфы
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message323">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
y
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:08:28">
18:08
       </div>

       <div class="from_name">
yopp 
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message321" onclick="return GoToMessage(321)">this message</a>
       </div>

       <div class="text">
а если эта реплика после OK была безвозвратно утерена?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message324">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:08:38">
18:08
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="text">
Первое - это убийство процесса clickhouse-server.<br>Второе - это ресет на сервере (железо) нажали.
       </div>

      </div>

     </div>

     <div class="message service" id="message325">

      <div class="body details">
Vladimir Ignatov invited Vladimir Ignatov
      </div>

     </div>

     <div class="message default clearfix" id="message326">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
ES
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:09:52">
18:09
       </div>

       <div class="from_name">
Evgeniy Shishkin
       </div>

       <div class="text">
а, ты имеешь ввиду что фсинка нет
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message327">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:09:55">
18:09
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="text">
Из документации:<br><br>&quot;Кворумная запись отсутствует. То есть, вы не можете записать данные с подтверждением их получения более одной репликой. Если вы записали пачку данных на одну реплику, и данные ещё не успели разъехаться по остальным репликам, после чего сервер с этими данными перестал существовать, то эта пачка данных будет потеряна.&quot;
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message328">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
y
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:10:08">
18:10
       </div>

       <div class="from_name">
yopp 
       </div>

       <div class="text">
получается никаких гарантий нет
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message329">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:10:16">
18:10
       </div>

       <div class="text">
OK это чисто «ну окей, приняли»
       </div>

      </div>

     </div>

     <div class="message service" id="message330">

      <div class="body details">
Alexander 😼 Chistyakov invited Alexander 😼 Chistyakov
      </div>

     </div>

     <div class="message default clearfix" id="message331">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:10:48">
18:10
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="text">
Есть гарантия - например, те данные, которые уже реплицировались (см. SELECT * FROM system.replicas, SELECT * FROM system.replication_queue) никуда не исчезнут.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message332">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
y
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:11:10">
18:11
       </div>

       <div class="from_name">
yopp 
       </div>

       <div class="text">
Это не гарантия
       </div>

      </div>

     </div>

     <div class="message service" id="message333">

      <div class="body details">
Vadim Yatsenko invited Дмитрий Митянин
      </div>

     </div>

     <div class="message default clearfix" id="message334">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic4" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
S
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:11:28">
18:11
       </div>

       <div class="from_name">
Stanislav 
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message322" onclick="return GoToMessage(322)">this message</a>
       </div>

       <div class="text">
Никаких противоречий.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message335">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:12:10">
18:12
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Не очень понятно, каких гарантий вы ожидаете. Синхронная репликация, если речь про это, дорогая вещь и не работает на больших потоках данных.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message336">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:12:33">
18:12
       </div>

       <div class="text">
Надёжную вставку (exactly once) сделать можно без проблем.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message337">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:12:49">
18:12
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
О, кстати, как?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message338">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
y
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:12:56">
18:12
       </div>

       <div class="from_name">
yopp 
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message336" onclick="return GoToMessage(336)">this message</a>
       </div>

       <div class="text">
Повторными вставками-то?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message339">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic4" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
S
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:13:01">
18:13
       </div>

       <div class="from_name">
Stanislav 
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message337" onclick="return GoToMessage(337)">this message</a>
       </div>

       <div class="text">
Плюсую
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message340">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:13:12">
18:13
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
Я делаю через промежуточную таблицу и <code>INSERT INTO table SELECT FROM temp_table WHERE id NOT IN (SELECT id FROM table);</code>
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message341">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:13:40">
18:13
       </div>

       <div class="text">
т.к. записей со временем становится дофига, заодно делаю фильтр по экстремумам (min/max от timestamp&apos;а, например)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message342">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
E
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:14:01">
18:14
       </div>

       <div class="from_name">
Etki 
       </div>

       <div class="text">
вам точно нужна CP-система для аналитики?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message343">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:16:08">
18:16
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Повторными вставками, да
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message344">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
ES
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:16:19">
18:16
       </div>

       <div class="from_name">
Evgeniy Shishkin
       </div>

       <div class="text">
вообще это неплохо иметь гарантию вставки батча на сервер + 1 реплику
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message345">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
y
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:16:37">
18:16
       </div>

       <div class="from_name">
yopp 
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message344" onclick="return GoToMessage(344)">this message</a>
       </div>

       <div class="text">
тогда цифр красивых не будет
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message346">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:17:38">
18:17
       </div>

       <div class="text">
CH судя по документации это очень большое количество компромиссов и «tradeoffs» для обеспечения высокой производительности на ряде специфичных нагрузок.
       </div>

      </div>

     </div>

     <div class="message service" id="message347">

      <div class="body details">
Alex Rom invited Alex Rom
      </div>

     </div>

     <div class="message default clearfix" id="message348">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
y
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:19:24">
18:19
       </div>

       <div class="from_name">
yopp 
       </div>

       <div class="text">
И хайп который из всех утюгов, звучит как «CH серебрянная пуля для аналитики», хотя есть куча подводных камней. Q&amp;A на HL показателен
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message349">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:20:53">
18:20
       </div>

       <div class="text">
Меня очень сильно беспокоит что про подводные камни почти нигде никакой информации нет
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message350">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
E
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:21:25">
18:21
       </div>

       <div class="from_name">
Etki 
       </div>

       <div class="text">
я, в общем, не знаю даже как ответить, кроме повтора &quot;вам точно нужна система с невероятными гарантиями для аналитики&quot;?
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message351">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:21:41">
18:21
       </div>

       <div class="text">
я понимаю, что приятно иметь кворумную запись и записывать данные однократно
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message352">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
y
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:21:46">
18:21
       </div>

       <div class="from_name">
yopp 
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message350" onclick="return GoToMessage(350)">this message</a>
       </div>

       <div class="text">
я не знаю с чего вы взяли «невероятные гарантии»
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message353">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:21:57">
18:21
       </div>

       <div class="text">
мне нужна гарантия что после OK данные рано или поздно появятся
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message354">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:21:58">
18:21
       </div>

       <div class="text">
всё
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message355">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
E
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:22:01">
18:22
       </div>

       <div class="from_name">
Etki 
       </div>

       <div class="text">
но это вообще не нужно таким продуктам
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message356">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
y
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:22:10">
18:22
       </div>

       <div class="from_name">
yopp 
       </div>

       <div class="text">
мне не нужно гарантии что они появятся сразу после OK
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message357">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:22:19">
18:22
       </div>

       <div class="text">
как не нужно?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message358">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
E
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:22:54">
18:22
       </div>

       <div class="from_name">
Etki 
       </div>

       <div class="text">
это нужно хранилищам данных. вы же не будете в CH хранить сами данные?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message359">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
y
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:22:54">
18:22
       </div>

       <div class="from_name">
yopp 
       </div>

       <div class="text">
если я деньги считаю, то как не нужно?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message360">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
E
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:23:15">
18:23
       </div>

       <div class="from_name">
Etki 
       </div>

       <div class="text">
вы не будете иметь аккаунт с балансом в CH
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message361">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
y
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:23:29">
18:23
       </div>

       <div class="from_name">
yopp 
       </div>

       <div class="text">
я не собираюсь хранить данные в CH
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message362">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
E
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:23:37">
18:23
       </div>

       <div class="from_name">
Etki 
       </div>

       <div class="text">
ну вот
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message363">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:23:40">
18:23
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message359" onclick="return GoToMessage(359)">this message</a>
       </div>

       <div class="text">
мы уже обсудили этот момент, вроде как пришли к варианту, что CH не для нас...
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message364">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
y
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:23:52">
18:23
       </div>

       <div class="from_name">
yopp 
       </div>

       <div class="text">
что «ну вот»?
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message365">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:24:08">
18:24
       </div>

       <div class="text">
аналитка по деньгам, вы не поверите, это частный юзкейс
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message366">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
E
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:24:30">
18:24
       </div>

       <div class="from_name">
Etki 
       </div>

       <div class="text">
и там ничего страшного не произойдет, если 1% данных потеряется
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message367">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
y
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:24:34">
18:24
       </div>

       <div class="from_name">
yopp 
       </div>

       <div class="text">
я хочу посчитать сколько денег мне надо выплатить за некоторые виды событий партнёрам
       </div>

      </div>

     </div>

     <div class="message service" id="message368">

      <div class="body details">
Victor Login invited Victor Login
      </div>

     </div>

     <div class="message default clearfix" id="message369">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
E
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:24:42">
18:24
       </div>

       <div class="from_name">
Etki 
       </div>

       <div class="text">
эт не аналитика
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message370">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
y
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:24:42">
18:24
       </div>

       <div class="from_name">
yopp 
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message366" onclick="return GoToMessage(366)">this message</a>
       </div>

       <div class="text">
лол
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message371">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:24:45">
18:24
       </div>

       <div class="text">
окей
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message372">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:24:48">
18:24
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="text">
CH - это аналитика по логам, ни больше, ни меньше...
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message373">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
y
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:24:50">
18:24
       </div>

       <div class="from_name">
yopp 
       </div>

       <div class="text">
всем спасибо :)
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message374">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:25:16">
18:25
       </div>

       <div class="text">
короче CH это не аналитика, это игрушка для сбора «метрик на глазок»
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message375">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:25:28">
18:25
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="text">
или так, да
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message376">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
y
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:25:50">
18:25
       </div>

       <div class="from_name">
yopp 
       </div>

       <div class="text">
как long term сторадж для прометея покатит
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message377">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
E
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:25:55">
18:25
       </div>

       <div class="from_name">
Etki 
       </div>

       <div class="text">
ну я все-таки скажу еще раз, что с CH не сидел, но описываемые требования - это требования к хранилищу и бизнес-логике
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message378">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
y
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:26:48">
18:26
       </div>

       <div class="from_name">
yopp 
       </div>

       <div class="text">
я пойду пожалуй
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message379">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:26:49">
18:26
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message377" onclick="return GoToMessage(377)">this message</a>
       </div>

       <div class="text">
открою секрет, в аналитике тоже есть точность, она нужна, и анализ - это не только прогноз
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message380">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
y
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:26:51">
18:26
       </div>

       <div class="from_name">
yopp 
       </div>

       <div class="text">
спасибо
       </div>

      </div>

     </div>

     <div class="message service" id="message381">

      <div class="body details">
Navern invited Navern
      </div>

     </div>

     <div class="message default clearfix" id="message382">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
E
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:27:46">
18:27
       </div>

       <div class="from_name">
Etki 
       </div>

       <div class="text">
окей, давайте от обратного
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message383">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:27:53">
18:27
       </div>

       <div class="text">
какой плохой кейс представляется вам, когда мы обсуждаем этот аспект?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message384">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
ES
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:30:22">
18:30
       </div>

       <div class="from_name">
Evgeniy Shishkin
       </div>

       <div class="text">
Залили данные и не знаем залили ли
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message385">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:30:31">
18:30
       </div>

       <div class="text">
Какой тут ещё кейс
       </div>

      </div>

     </div>

     <div class="message service" id="message386">

      <div class="body details">
Kirill Klenov invited Kirill Klenov
      </div>

     </div>

     <div class="message default clearfix" id="message387">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:30:44">
18:30
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
почему не знаем?<br>сервак же ответил &quot;ОК&quot;
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message388">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
E
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:30:45">
18:30
       </div>

       <div class="from_name">
Etki 
       </div>

       <div class="text">
Ага, а чт опроизойдет для условного бизнеса?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message389">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
ES
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:31:06">
18:31
       </div>

       <div class="from_name">
Evgeniy Shishkin
       </div>

       <div class="text">
Так пишут что ок это не факт что ок
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message390">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
E
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:31:27">
18:31
       </div>

       <div class="from_name">
Etki 
       </div>

       <div class="text">
А для бизнеса что?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message391">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:31:31">
18:31
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
ну, я может неправильно понял, но &quot;не факт что ок&quot; относилось к репликам, разве нет?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message392">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
E
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:31:54">
18:31
       </div>

       <div class="from_name">
Etki 
       </div>

       <div class="text">
Ну и опять же, вся штука про распределенные системы - это building reliable things out of unreliable blocks. Если у вас бизнес-требование, что запись должна быть добавлена - то та самая eventual consistency просто достигается оберткой-приемником, который повторяет вставку раз в минуту, если не видит добавленной записи.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message393">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:33:03">
18:33
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message392" onclick="return GoToMessage(392)">this message</a>
       </div>

       <div class="text">
обертка на отдельной железке?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message394">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
E
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:33:16">
18:33
       </div>

       <div class="from_name">
Etki 
       </div>

       <div class="text">
(с придыханием) микросервис
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message395">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:33:24">
18:33
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="text">
обертка падает, вслед за железкой БД?
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message396">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:33:46">
18:33
       </div>

       <div class="text">
хотя тут наверно я не прав
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message397">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
E
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:33:55">
18:33
       </div>

       <div class="from_name">
Etki 
       </div>

       <div class="text">
все, мне бежать надо, но ей-богу вы завышенные требования к продукту предъявляете. это как пинать php за отсутствие асинхронности.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message398">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:34:24">
18:34
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="text">
наверно потому что продукт возвышенно назвался БД с аналитикой
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message399">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:34:47">
18:34
       </div>

       <div class="text">
а не БД для логов, пусть и с той же аналитикой 😁
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message400">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:35:35">
18:35
       </div>

       <div class="text">
Кстати, а можно узнать, чем вызвана необходимость пилить свой формат SQL? Почему нельзя было взять классику?
       </div>

      </div>

     </div>

     <div class="message service" id="message401">

      <div class="body details">
Renat invited Renat
      </div>

     </div>

     <div class="message default clearfix" id="message402">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:40:25">
18:40
       </div>

       <div class="from_name">
Aleksey Shirokikh
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message400" onclick="return GoToMessage(400)">this message</a>
       </div>

       <div class="text">
Это которую?
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message403">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:40:51">
18:40
       </div>

       <div class="text">
Есть где то библиотека sqllib_std?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message404">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:41:04">
18:41
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="text">
есть стандарт...
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message405">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:41:17">
18:41
       </div>

       <div class="text">
например, SQL-92
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message406">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:42:28">
18:42
       </div>

       <div class="from_name">
Aleksey Shirokikh
       </div>

       <div class="text">
Ну так к нему вроде как идти надо
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message407">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:42:28">
18:42
       </div>

       <div class="text">
Сначала часть функций потом ещё
       </div>

      </div>

     </div>

     <div class="message service" id="message408">

      <div class="body details">
Yaroslav Boldyrev invited Yaroslav Boldyrev
      </div>

     </div>

     <div class="message default clearfix" id="message409">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:43:59">
18:43
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message407" onclick="return GoToMessage(407)">this message</a>
       </div>

       <div class="text">
а джойны свои накастылить? 😁
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message410">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:44:47">
18:44
       </div>

       <div class="text">
или вы сейчас описали светлое будущее, к которому CH рано или поздно придет априори?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message411">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:45:04">
18:45
       </div>

       <div class="from_name">
Aleksey Shirokikh
       </div>

       <div class="text">
Хз
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message412">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 18:45:12">
18:45
       </div>

       <div class="text">
Я описал как пишут софт
       </div>

      </div>

     </div>

     <div class="message service" id="message413">

      <div class="body details">
Alexander Putilin invited Alexander Putilin
      </div>

     </div>

     <div class="message service" id="message414">

      <div class="body details">
Konstantin Novakovsky invited Konstantin Novakovsky
      </div>

     </div>

     <div class="message default clearfix" id="message415">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:06:53">
19:06
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
гмм.. не подскажете, почему такое может быть?<br><pre><br>SELECT id, timestamp FROM data WHERE timestamp = &apos;2016-11-09 22:49:10&apos;;<br><br>┌─id───┬───────────timestamp─┐<br>│ 123  │ 2016-11-10 01:49:10 │<br>└──────┴─────────────────────┘<br></pre><br><br>движок MergeTree, на сервере вроде часовой пояс и все такое не менялось, не уверен, могу уточнить
       </div>

      </div>

     </div>

     <div class="message service" id="message416">

      <div class="body details">
Evgeny ihard invited Evgeny ihard
      </div>

     </div>

     <div class="message service" id="message417">

      <div class="body details">
Vsevolod invited Vsevolod
      </div>

     </div>

     <div class="message default clearfix" id="message418">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
緑
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:09:22">
19:09
       </div>

       <div class="from_name">
緑眼のモンスター 
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message415" onclick="return GoToMessage(415)">this message</a>
       </div>

       <div class="text">
Clients does some offsetting?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message419">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:09:46">
19:09
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Сдвиг 3 часа
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message420">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:09:48">
19:09
       </div>

       <div class="text">
Это таймзоны
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message421">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:10:17">
19:10
       </div>

       <div class="text">
А вот что именно не так - не очень понятно, да. Надо смотреть где какие настройки стоят и что менялось
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message422">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:10:23">
19:10
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
ну да, я тоже об этом подумал, но почему такое расхождение-то все равно..
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message423">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:10:30">
19:10
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Ну 3 часа
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message424">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:10:37">
19:10
       </div>

       <div class="text">
Москва vs Гринвич
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message425">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:10:56">
19:10
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
да дело даже не в том, что 3 часа и GMT vs MSK, а в том, что странно, что время в WHERE одно, а в выводе - другое
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message426">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:10:59">
19:10
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
btw там выше был флуд про &quot;кликхаус не для точных данных&quot;
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message427">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:11:06">
19:11
       </div>

       <div class="text">
Хочу заметить, что всё это ерунда
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message428">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:11:30">
19:11
       </div>

       <div class="text">
Мы храним в CH в том числе и деньги, и считаем по ним аналитику. Это работает точно до копейки.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message429">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:11:38">
19:11
       </div>

       <div class="text">
Все гарании можно обеспечить, как я уже говорил.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message430">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:12:27">
19:12
       </div>

       <div class="text">
Игорь, да, это странное, такого быть не должно.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message431">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:12:36">
19:12
       </div>

       <div class="text">
Напишите на рассылку подробности, пожалуйста
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message432">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:12:41">
19:12
       </div>

       <div class="text">
Попробуем понять где проблема
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message433">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
緑
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:12:54">
19:12
       </div>

       <div class="from_name">
緑眼のモンスター 
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message428" onclick="return GoToMessage(428)">this message</a>
       </div>

       <div class="text">
DECIMAL?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message434">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:13:06">
19:13
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
копейки скорее
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message435">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:14:19">
19:14
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Краткий ответ: UInt32
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message436">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:15:31">
19:15
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message435" onclick="return GoToMessage(435)">this message</a>
       </div>

       <div class="text">
эммм,а как же НДСы и т.п.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message437">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:16:15">
19:16
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Предрасчитываются и записываются отдельными столбцами.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message438">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:16:31">
19:16
       </div>

       <div class="text">
Расчет правильных сумм делается не в ClickHouse по сути.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message439">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:16:54">
19:16
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="text">
ну т.е. у вас анализ по сути по таким данным не производится...
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message440">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:17:32">
19:17
       </div>

       <div class="text">
т.к. расчет на стороне, и если делать аналитический расчет, то гарантий нет
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message441">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:17:38">
19:17
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message431" onclick="return GoToMessage(431)">this message</a>
       </div>

       <div class="text">
вроде понял, в чем проблема, можно лучше issue на гитхабе открою?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message442">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:17:51">
19:17
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Если уверены что есть проблема, да.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message443">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:18:02">
19:18
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message441" onclick="return GoToMessage(441)">this message</a>
       </div>

       <div class="text">
Не стоит: <a href="https://groups.google.com/d/msg/clickhouse/vqp6x41IOPA/WC4Ec3tMAwAJ">https://groups.google.com/d/msg/clickhouse/vqp6x41IOPA/WC4Ec3tMAwAJ</a>
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message444">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
緑
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:18:03">
19:18
       </div>

       <div class="from_name">
緑眼のモンスター 
       </div>

       <div class="text">
what about bank operations that involve fractions of smallest currency unit?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message445">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:18:29">
19:18
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
we do not this kind of operations generally
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message446">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:19:12">
19:19
       </div>

       <div class="text">
but it&apos;s possible to convert your data to this smallest fractions, for example multiply your money to 1.000.000
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message447">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:19:36">
19:19
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message443" onclick="return GoToMessage(443)">this message</a>
       </div>

       <div class="text">
спасибо большое, извините за беспокойство!<br>я успел разобраться в &quot;проблеме&quot; только на уровне того, что так вёл себя только нативный clickhouse-client, а по 8123 всё ок.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message448">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:19:39">
19:19
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
DECIMAL isn&apos;t supported for now.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message449">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:20:11">
19:20
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="text">
печаль
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message450">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:20:13">
19:20
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
А, вот в чем дело. Понятно, да.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message451">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:20:33">
19:20
       </div>

       <div class="text">
Тогда это сложно считать багом.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message452">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:22:27">
19:22
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
да, но меня искренне конфузило из-за срабатывания условия WHERE и отличающихся (от условия) данных в результате. ну да ладно, спасибо еще раз!
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message453">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:23:25">
19:23
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message452" onclick="return GoToMessage(452)">this message</a>
       </div>

       <div class="text">
Можно что-нибудь придумать. Обмен информацией о часовом поясе между сервером и клиентом и использование серверного времени, например. Или просто вывод предупреждения, если часовые пояса отличаются.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message454">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DP
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:24:32">
19:24
       </div>

       <div class="from_name">
Darafei Praliaskouski
       </div>

       <div class="text">
а таймстемп парсит клиент?
       </div>

      </div>

     </div>

     <div class="message service" id="message455">

      <div class="body details">
Kirill B invited Kirill B
      </div>

     </div>

     <div class="message default clearfix" id="message456">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:39:49">
19:39
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Да, надо серверное время использовать.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message457">

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:40:00">
19:40
       </div>

       <div class="text">
Да, таймстемп парсит клиент.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message458">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
緑
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="10.11.2016 19:40:50">
19:40
       </div>

       <div class="from_name">
緑眼のモンスター 
       </div>

       <div class="text">
some kind of annotation on timestamp column?
       </div>

      </div>

     </div>

     <div class="message service" id="message459">

      <div class="body details">
Bob Strike invited Bob Strike
      </div>

     </div>

     <div class="message service" id="message460">

      <div class="body details">
Viacheslav invited Viacheslav
      </div>

     </div>

     <div class="message service" id="message461">

      <div class="body details">
Denys 💛📈 💫 Zhdanov invited Denys 💛📈 💫 Zhdanov
      </div>

     </div>

     <div class="message service" id="message462">

      <div class="body details">
Евгений Удодов invited Евгений Удодов
      </div>

     </div>

     <div class="message service" id="message463">

      <div class="body details">
Evgeniy invited Evgeniy
      </div>

     </div>

     <div class="message service" id="message464">

      <div class="body details">
Dmitry Balanin invited Dmitry Balanin
      </div>

     </div>

     <div class="message service" id="message465">

      <div class="body details">
Denis Zlobin invited Denis Zlobin
      </div>

     </div>

     <div class="message service" id="message466">

      <div class="body details">
Dmitriy invited Dmitriy
      </div>

     </div>

     <div class="message service" id="message-2">

      <div class="body details">
11 November 2016
      </div>

     </div>

     <div class="message service" id="message467">

      <div class="body details">
First Last invited First Last
      </div>

     </div>

     <div class="message service" id="message468">

      <div class="body details">
pragus invited pragus
      </div>

     </div>

     <div class="message service" id="message469">

      <div class="body details">
Alexey Sibirtsev invited Alexey Sibirtsev
      </div>

     </div>

     <div class="message service" id="message470">

      <div class="body details">
Александр invited Александр
      </div>

     </div>

     <div class="message service" id="message471">

      <div class="body details">
Oleg Prokhorenko invited Oleg Prokhorenko
      </div>

     </div>

     <div class="message service" id="message472">

      <div class="body details">
Andrew Filonov invited Andrew Filonov
      </div>

     </div>

     <div class="message service" id="message473">

      <div class="body details">
Deleted Account invited Deleted Account
      </div>

     </div>

     <div class="message default clearfix" id="message474">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
KB
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 10:58:08">
10:58
       </div>

       <div class="from_name">
Kirill B
       </div>

       <div class="text">
Привет. А как обстоят дела с партицированием? Есть какие-то ограничения на хэш?
       </div>

      </div>

     </div>

     <div class="message service" id="message475">

      <div class="body details">
Yura Beznos invited Yura Beznos
      </div>

     </div>

     <div class="message service" id="message476">

      <div class="body details">
Vasiliy Vybornov invited Vasiliy Vybornov
      </div>

     </div>

     <div class="message default clearfix" id="message477">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:22:29">
12:22
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Привет!
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message478">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:22:45">
12:22
       </div>

       <div class="text">
Насколько я помню, там UInt64
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message479">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:22:50">
12:22
       </div>

       <div class="text">
Ну и можно делать expressions
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message480">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:23:24">
12:23
       </div>

       <div class="text">
Но мы рекомендуем шардировать руками, это более  эффективный и контролируемый способ работы с данными
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message481">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:23:28">
12:23
       </div>

       <div class="text">
Подробности тут: <a href="https://clickhouse.yandex/reference_en.html#Distributed">https://clickhouse.yandex/reference_en.html#Distributed</a>
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message482">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
MF
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:30:45">
12:30
       </div>

       <div class="from_name">
Maxim Filatov
       </div>

       <div class="text">
кстати, а есть какой-нибудь официальный гайд по использованию ClickHouse в Kubernetes?
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message483">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:31:09">
12:31
       </div>

       <div class="text">
ну то есть не обязательно именно кубернетес, ямлы нужные я и сам напишу
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message484">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:31:36">
12:31
       </div>

       <div class="text">
вопрос скорее про контейнеры, оверлей-сети и вот это все
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message485">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
KB
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:32:20">
12:32
       </div>

       <div class="from_name">
Kirill B
       </div>

       <div class="text">
Я немного не про шардирование, а именно партицирование с целью удаления кусков информации. Мы в VERTICA используем - это супер-удобно, т.к. без этого удаление становится банально невозможным.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message486">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:33:17">
12:33
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
удаление, вроде, сказали, будет в Q2 2017
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message487">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:33:40">
12:33
       </div>

       <div class="text">
а пока можно только партишены целиком удалять в рамках таблицы, а они делятся на месяцы и пока это никак не изменить
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message488">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
KS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:34:02">
12:34
       </div>

       <div class="from_name">
Kirill Solokhov
       </div>

       <div class="text">
Тема с произвольным ключем партиционирования действительно была бы очень крута
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message489">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:34:08">
12:34
       </div>

       <div class="text">
месяц не всегда удобно
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message490">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:35:20">
12:35
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
согласен
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message491">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
p
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:35:32">
12:35
       </div>

       <div class="from_name">
ptchol 
       </div>

       <div class="text">
Да, там так и делается, старые данные удалить можно только удалмив партиции (или мне показалось)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message492">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
KB
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:35:59">
12:35
       </div>

       <div class="from_name">
Kirill B
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message486" onclick="return GoToMessage(486)">this message</a>
       </div>

       <div class="text">
Ну удаление в таких системах, имхо, не сильно востребованная фишка. А вот партицирование по произвольному ключу и возможность удаления партиций - это огонь. Пока из-за этого КХ не можем рассматривать как решения для prod&apos;а.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message493">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:36:14">
12:36
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
не знаю, меня очень порадовал (в плане производительности) INSERT INTO SELECT с фильтром только нужных данных
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message494">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:36:35">
12:36
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message492" onclick="return GoToMessage(492)">this message</a>
       </div>

       <div class="text">
партицирование по произвольному ключу очень часто просят, да )
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message495">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
KB
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:37:37">
12:37
       </div>

       <div class="from_name">
Kirill B
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message493" onclick="return GoToMessage(493)">this message</a>
       </div>

       <div class="text">
Т.е. делаешь INSERT INTO SELECT нужный диапазон в нужную таблицу, а потом атомарный RENAME с последующим DROP&apos;ом? Кстати, RENAME атомарный имеется?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message496">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:40:21">
12:40
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Партицирование про произвольному ключу будет, да.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message497">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:40:26">
12:40
       </div>

       <div class="text">
Атомарный rename имеется.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message498">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:40:53">
12:40
       </div>

       <div class="text">
Пишешь rename a -&gt; a_old, a_new -&gt; a;
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message499">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:41:03">
12:41
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message495" onclick="return GoToMessage(495)">this message</a>
       </div>

       <div class="text">
ага, ну, точнее из старой таблицы (где нужные+ненужные данные) в новую таблицу (где будут только нужные данные)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message500">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
?
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:45:51">
12:45
       </div>

       <div class="from_name">
🔒Zloool🔒 
       </div>

       <div class="text">
Кешируются ли вложенные запросы? Или кеш идет по всему запросу целиком?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message501">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:46:06">
12:46
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Ничего не кешируется.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message502">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:46:28">
12:46
       </div>

       <div class="text">
CH активно полагается на кэш файловой системы
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message503">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:47:06">
12:47
       </div>

       <div class="text">
Обычно, это работает хорошо, если данные запрашиваются близкие.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message504">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:47:32">
12:47
       </div>

       <div class="text">
Для аналитического паттерна обычно кэширование по запросам бесполезно, так как запросы не повторяются.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message505">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:48:28">
12:48
       </div>

       <div class="text">
О, статья на вики: <a href="https://en.wikipedia.org/wiki/ClickHouse">https://en.wikipedia.org/wiki/ClickHouse</a>
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message506">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
KS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:52:39">
12:52
       </div>

       <div class="from_name">
Kirill Solokhov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message493" onclick="return GoToMessage(493)">this message</a>
       </div>

       <div class="text">
Только как-то страшно применять такой трюк для шардированых/реплицированных на много серверов таблиц
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message507">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
?
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:56:11">
12:56
       </div>

       <div class="from_name">
🔒Zloool🔒 
       </div>

       <div class="text">
<a href="https://yadi.sk/i/fYaD8jjByPEir">https://yadi.sk/i/fYaD8jjByPEir</a><br>Что дает такой результат тогда?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message508">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:57:03">
12:57
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Как раз кэш файловой системы
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message509">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
?
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:57:11">
12:57
       </div>

       <div class="from_name">
🔒Zloool🔒 
       </div>

       <div class="text">
Ага, интересно
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message510">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:57:26">
12:57
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
На count() работает очень эффективно потому что по сути данные не читаются, и это random access
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message511">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:57:43">
12:57
       </div>

       <div class="text">
Ну и разница между диском и памятью для random access понятно что очень большая
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message512">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 12:58:24">
12:58
       </div>

       <div class="text">
<a href="https://t.me/milovidov_an">@milovidov_an</a> я ведь прав?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message513">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
?
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 13:03:56">
13:03
       </div>

       <div class="from_name">
🔒Zloool🔒 
       </div>

       <div class="text">
Просто я как раз пишу запрос с count() для пагинации, и мне интересно как это правильно сделать
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message514">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 13:05:04">
13:05
       </div>

       <div class="text">
Только не тыкайте палками если я чтото неправильно спрашиваю, я не хайлоад, я только учусь
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message515">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 13:06:37">
13:06
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
В смысле - для того чтобы написать сколько там ещё страниц листать можно?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message516">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
?
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 13:06:47">
13:06
       </div>

       <div class="from_name">
🔒Zloool🔒 
       </div>

       <div class="text">
Да
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message517">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 13:07:27">
13:07
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Советую посмотреть на rows_before_limit_at_least
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message518">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 13:07:31">
13:07
       </div>

       <div class="text">
<a href="https://clickhouse.yandex/reference_en.html#JSON">https://clickhouse.yandex/reference_en.html#JSON</a>
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message519">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 13:07:51">
13:07
       </div>

       <div class="text">
Мы используем для пагинаторов именно это поле
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message520">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 13:08:03">
13:08
       </div>

       <div class="text">
Получается, можно получить всю информацию за один запрос.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message521">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
?
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 13:11:56">
13:11
       </div>

       <div class="from_name">
🔒Zloool🔒 
       </div>

       <div class="text">
Круто, спасибо
       </div>

      </div>

     </div>

     <div class="message service" id="message522">

      <div class="body details">
Антон Владимиров invited Антон Владимиров
      </div>

     </div>

     <div class="message service" id="message523">

      <div class="body details">
Гоша Бажуков invited Гоша Бажуков
      </div>

     </div>

     <div class="message default clearfix" id="message524">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VL
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 14:25:11">
14:25
       </div>

       <div class="from_name">
Vitaliy Lyudvichenko
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message510" onclick="return GoToMessage(510)">this message</a>
       </div>

       <div class="text">
<a href="https://t.me/zloool">@zloool</a> <br>В таком случае если не ошибаюсь читается одна (самая маленькая) колонка. Поэтому в бенчамарке при увеличении количества строк время первого запроса увеличивается (хоть и не линейно). Но вторые и третие запросы уже вполняются в разы быстрее, а зависимость от числа строк становится более линейной, что говорит о том, что какой-то кэш работает. <br><br>В кликхаусе для таких кейсов есть кэш разжатых блоков<br><a href="https://clickhouse.yandex/reference_ru.html#use_uncompressed_cache">https://clickhouse.yandex/reference_ru.html#use_uncompressed_cache</a><br>По-умолчанию он выключен, а даже если и включен, то старается использоваться для маленьких кусков данных.<br><br>Не понятно какие настройки использовались в бенчмарке, но есть основания полагать, что тут она использовалась.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message525">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
?
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 14:50:04">
14:50
       </div>

       <div class="from_name">
🔒Zloool🔒 
       </div>

       <div class="text">
Спасибо
       </div>

      </div>

     </div>

     <div class="message service" id="message526">

      <div class="body details">
Tatyana invited Tatyana
      </div>

     </div>

     <div class="message service" id="message527">

      <div class="body details">
Денис Щелкунов invited Денис Щелкунов
      </div>

     </div>

     <div class="message default clearfix" id="message528">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 16:13:19">
16:13
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="text">
В бенчмарке не используется use_uncompressed_cache.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message529">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:27:37">
17:27
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
А как правильнее проверить столбец на NULLоподобность, и если он таковой, то подставить в данные что-нибудь другое?<br><br>вот, например, моя попытка избавиться от &quot;0000-00-00 00:00:00&quot; и фигачить пустую строку:<br><br><code>toUInt64(created_at) != 0 ? toString(created_at) : &apos;&apos;</code>
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message530">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:29:31">
17:29
       </div>

       <div class="from_name">
Aleksey Shirokikh
       </div>

       <div class="text">
я думаю вместо нула писать несуществующее или не имеющее логического смысла значение
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message531">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:29:48">
17:29
       </div>

       <div class="text">
типа -100
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message532">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
緑
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:30:29">
17:30
       </div>

       <div class="from_name">
緑眼のモンスター 
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message530" onclick="return GoToMessage(530)">this message</a>
       </div>

       <div class="text">
Isn&apos;t that the point of NULL?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message533">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:31:03">
17:31
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
yeah, but NULLs aren&apos;t supported for now
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message534">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
緑
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:31:28">
17:31
       </div>

       <div class="from_name">
緑眼のモンスター 
       </div>

       <div class="text">
what about ASCII null character?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message535">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:31:38">
17:31
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
It is used in the FixedStrings
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message536">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:32:10">
17:32
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Игорь, не очень понял: хочется ткое в данных хранить или как?
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message537">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:32:34">
17:32
       </div>

       <div class="text">
Если тип данных это DateTime то лучше хранить именно 0000-00-00 00:00:00
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message538">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:32:35">
17:32
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
хочется, наоборот, вывести SELECTом, экспортнуть в TSV, всё такое
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message539">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:32:38">
17:32
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
что по сути является 0
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message540">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:32:44">
17:32
       </div>

       <div class="text">
А
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message541">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:33:16">
17:33
       </div>

       <div class="text">
Да, тогда ваш запрос вполне окей
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message542">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:33:24">
17:33
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
да, знаю) <br>просто запрос совсем страшным становится из-за таких выражений, а все лишь для того, чтобы в CSV было не &quot;0000-00-00 00:00:00&quot;, а пустая строка
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message543">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:33:33">
17:33
       </div>

       <div class="text">
ОК, спасибо!
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message544">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:33:45">
17:33
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Проще пока что пути не вижу
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message545">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:33:54">
17:33
       </div>

       <div class="text">
Ну и не так уж страшно =)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message546">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:34:08">
17:34
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
это вы еще мой способ конвертить FixedString(16) в UUID не видели!
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message547">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:34:27">
17:34
       </div>

       <div class="text">
хотя, наверное, видели. ну да ладно
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message548">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:34:43">
17:34
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Я такие запросы видел, что мне кажется меня ничем не удивить
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message549">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:34:52">
17:34
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
не представляю :)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message550">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:35:02">
17:35
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
machine learning формулы на sql например
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message551">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:35:23">
17:35
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
как раз недавно натыкался на статью, как нейронную сеть на SQL писали
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message552">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:35:55">
17:35
       </div>

       <div class="text">
<a href="http://blog.itdxer.com/2016/07/01/neural-networs-in-mysql.html">http://blog.itdxer.com/2016/07/01/neural-networs-in-mysql.html</a> вот эта вроде.<br>извините за оффтоп
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message553">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:44:42">
17:44
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message544" onclick="return GoToMessage(544)">this message</a>
       </div>

       <div class="text">
а планиурете добавить NULL или отказ был осознаным и ждать не стоит?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message554">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:45:14">
17:45
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Планируется
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message555">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:45:21">
17:45
       </div>

       <div class="text">
Отказ был осознанным :)
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message556">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:45:29">
17:45
       </div>

       <div class="text">
Но необходимость понятна
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message557">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:45:49">
17:45
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="text">
отлично
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message558">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:45:49">
17:45
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Так что будут nullable типы и столбцы
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message559">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VL
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:45:52">
17:45
       </div>

       <div class="from_name">
Vitaliy Lyudvichenko
       </div>

       <div class="text">
Пулл реквест даже уже есть <a href="https://github.com/yandex/ClickHouse/pull/70">https://github.com/yandex/ClickHouse/pull/70</a>
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message560">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
緑
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:46:07">
17:46
       </div>

       <div class="from_name">
緑眼のモンスター 
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message559" onclick="return GoToMessage(559)">this message</a>
       </div>

       <div class="text">
lgtm
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message561">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:46:14">
17:46
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Они будут работать несколько медленней.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message562">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 17:46:24">
17:46
       </div>

       <div class="text">
Так что только по необходимости
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message563">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DP
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 18:12:17">
18:12
       </div>

       <div class="from_name">
Darafei Praliaskouski
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message537" onclick="return GoToMessage(537)">this message</a>
       </div>

       <div class="text">
АААА, где вы берёте такое время?
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message564">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 18:12:26">
18:12
       </div>

       <div class="text">
его же нет, нет в мире года 0000
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message565">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 18:12:49">
18:12
       </div>

       <div class="text">
потом человеческие парсеры ломаются
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message566">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DA
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 18:12:55">
18:12
       </div>

       <div class="from_name">
Dmitry Andreev
       </div>

       <div class="text">
:) select toDateTime(0)<br><br>SELECT toDateTime(0)<br><br>┌───────toDateTime(0)─┐<br>│ 0000-00-00 00:00:00 │<br>└─────────────────────┘<br><br>1 rows in set. Elapsed: 0.003 sec.<br><br>:)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message567">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DP
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 18:13:45">
18:13
       </div>

       <div class="from_name">
Darafei Praliaskouski
       </div>

       <div class="text">
gis=&gt; select to_timestamp(0);<br>      to_timestamp      <br>—----------------------<br> 1970-01-01 03:00:00+03<br>(1 row)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message568">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 18:14:55">
18:14
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message567" onclick="return GoToMessage(567)">this message</a>
       </div>

       <div class="text">
Кстати, прикольно, похоже и правда не сохранить чистый <code>1970-01-01 00:00:00</code>, он будет нулями отображаться
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message569">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 18:15:31">
18:15
       </div>

       <div class="text">
да в любом случае на такое редко будут натыкаться и, если что, можно подменить (как я вон %))
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message570">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 18:15:49">
18:15
       </div>

       <div class="text">
это всё мелочи по сравнению со скоростью движения прогрессбара!
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message571">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DP
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 18:16:10">
18:16
       </div>

       <div class="from_name">
Darafei Praliaskouski
       </div>

       <div class="text">
да, а я потом в постгресе fdw не могу сделать в базы, которые год 0000 изобрели :)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message572">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 18:16:49">
18:16
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
да мы с коллегами сейчас тоже не смогли, пришлось после FORMAT CSV еще <code>sed -i -- &apos;s/\&quot;0000-00-00 00:00:00\&quot;//g&apos;</code> натравливать
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message573">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DP
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 18:17:06">
18:17
       </div>

       <div class="from_name">
Darafei Praliaskouski
       </div>

       <div class="text">
:&apos;(
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message574">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
pk
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 18:17:57">
18:17
       </div>

       <div class="from_name">
papa karlo
       </div>

       <div class="text">
<pre>SELECT toYear(toDateTime(0))<br><br>┌─toYear(toDateTime(0))─┐<br>│                  1970 │<br>└───────────────────────┘</pre>
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message575">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
RL
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 18:18:35">
18:18
       </div>

       <div class="from_name">
Roman Lomonosov
       </div>

       <div class="text">
забавно<br>:) select toDateTime(&apos;1950-01-01 00:00:00&apos;);<br><br>SELECT toDateTime(&apos;1950-01-01 00:00:00&apos;)<br><br>┌─toDateTime(\&apos;1950-01-01 00:00:00\&apos;)─┐<br>│                 0000-00-00 00:00:00 │<br>└─────────────────────────────────────┘<br><br>1 rows in set. Elapsed: 0.001 sec.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message576">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 18:19:12">
18:19
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
да, не поддерживается ничего до unixepoch
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message577">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DP
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 18:19:32">
18:19
       </div>

       <div class="from_name">
Darafei Praliaskouski
       </div>

       <div class="text">
его unsigned сделали, что ли?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message578">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 18:19:33">
18:19
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
по-моему потому что там в UInt64 фактически время хранится
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message579">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DP
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 18:20:04">
18:20
       </div>

       <div class="from_name">
Darafei Praliaskouski
       </div>

       <div class="text">
а, то есть 20001 год нужен, а 1950 нет :&apos;(
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message580">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 18:20:42">
18:20
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
Причем у toDateTime есть хитрая особенность, он до какого-то числа жрет не секунды, а дни
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message581">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 18:20:54">
18:20
       </div>

       <div class="text">
:) SELECT toDate(365);<br><br>┌─toDate(365)─┐<br>│  1971-01-01 │<br>└─────────────┘
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message582">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
RL
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 18:21:38">
18:21
       </div>

       <div class="from_name">
Roman Lomonosov
       </div>

       <div class="text">
действительно. в доке есть про это<br>&quot;Позволяет хранить значения от чуть больше, чем начала unix-эпохи до верхнего порога, определяющегося константой на этапе компиляции&quot;<br>ну не очень-то и хотелось
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message583">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 18:22:22">
18:22
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
<pre> :) SELECT toDate(10000) AS a, toDate(100000) AS b, toDate(1478877709) AS c;<br><br>┌──────────a─┬──────────b─┬──────────c─┐<br>│ 1997-05-19 │ 1970-01-02 │ 2016-11-11 │<br>└────────────┴────────────┴────────────┘</pre>
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message584">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 18:22:24">
18:22
       </div>

       <div class="text">
вот наглядней
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message585">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DP
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 18:22:39">
18:22
       </div>

       <div class="from_name">
Darafei Praliaskouski
       </div>

       <div class="text">
это вообще проектировали? :)
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message586">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 18:22:57">
18:22
       </div>

       <div class="text">
ну, на доске, хотя бы
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message587">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 18:24:12">
18:24
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
ну видимо в метрике понадобилось оптимизировать какие-нибудь запросы с toDate
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message588">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
pk
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 18:24:59">
18:24
       </div>

       <div class="from_name">
papa karlo
       </div>

       <div class="text">
<pre>SELECT <br>    toDate(24855), <br>    toDate(24856)<br><br>┌─toDate(24855)─┬─toDate(24856)─┐<br>│    2038-01-19 │    0000-00-00 │<br>└───────────────┴───────────────┘</pre>
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message589">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 19:00:22">
19:00
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
а функция empty() разве не должна возвращать true для FixedString, полностью заполненных NULами?
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message590">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 19:00:32">
19:00
       </div>

       <div class="text">
оборачивать в toStringCutToZero как-то глупо
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message591">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 19:01:48">
19:01
       </div>

       <div class="text">
<pre>:) SELECT toFixedString(&apos;&apos;, 4) AS str, empty(str) AS is_empty;<br><br>┌─str──────┬─is_empty─┐<br>│ \0\0\0\0 │        0 │<br>└──────────┴──────────┘</pre>
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message592">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 19:08:44">
19:08
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="text">
Да, для FixedString функция empty сейчас бессмысленна. Можно пересмотреть.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message593">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 19:09:03">
19:09
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
ОК, спасибо!
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message594">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 21:00:24">
21:00
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="text">
Обсудили. Коллеги говорят, что делать empty = 1 для FixedString, заполненной нулевыми байтами, нелогично.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message595">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 21:01:32">
21:01
       </div>

       <div class="text">
Можно писать типа IPv6 = toFixedString(&apos;&apos;, 16) вместо empty(IPv6)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message596">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 21:10:46">
21:10
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
хм, а почему? не совсем понял :(
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message597">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 21:13:03">
21:13
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="text">
Спорный момент. Строка, заполненная нулевыми байтами, всё-таки непустая.<br>И если не упоминать, что это строка фиксированного размера, то это совершенно ясно.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message598">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 21:17:07">
21:17
       </div>

       <div class="text">
Также ради инварианта: empty(x) то же самое что и length(x) = 0.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message599">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DP
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 21:45:00">
21:45
       </div>

       <div class="from_name">
Darafei Praliaskouski
       </div>

       <div class="text">
а length(FixedString) = const?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message600">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 21:45:21">
21:45
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="text">
Да.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message601">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DP
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 21:47:43">
21:47
       </div>

       <div class="from_name">
Darafei Praliaskouski
       </div>

       <div class="text">
а зачем так?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message602">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 21:47:57">
21:47
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="text">
Как иначе ты предлагаешь?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message603">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DP
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 21:48:34">
21:48
       </div>

       <div class="from_name">
Darafei Praliaskouski
       </div>

       <div class="text">
в смысле, это не аналог char(n) в SQL?
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message604">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 21:49:02">
21:49
       </div>

       <div class="text">
gis=&gt; select length(10::char(100));<br> length <br>—------<br>      2<br>(1 row)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message605">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 21:49:04">
21:49
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="text">
char(n) всё-таки по-другому себя ведёт.<br>Скорее binary(n).
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message606">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DP
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 21:49:40">
21:49
       </div>

       <div class="from_name">
Darafei Praliaskouski
       </div>

       <div class="text">
ERROR:  type &quot;binary&quot; does not exist
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message607">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 21:49:58">
21:49
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="text">
Задумано, чтобы хранить хэши, UUID-ы, IPv6 и т. п. Там брать длину вообще бессмысленно.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message608">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DP
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 21:50:19">
21:50
       </div>

       <div class="from_name">
Darafei Praliaskouski
       </div>

       <div class="text">
а, кастомных типов нет?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message609">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 21:50:31">
21:50
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="text">
UDT?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message610">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DP
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 21:52:39">
21:52
       </div>

       <div class="from_name">
Darafei Praliaskouski
       </div>

       <div class="text">
хотя бы<br>я избалован ::uuid, md5(), ::inet из постгреса :)
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message611">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 21:53:11">
21:53
       </div>

       <div class="text">
от стринга я всё же ожидаю кодировок и прочих проверок валидности UTF
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message612">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 21:55:03">
21:55
       </div>

       <div class="text">
у него, кстати, длина в байтах или в кодпоинтах? :)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message613">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 21:55:12">
21:55
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="text">
В документации написано.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message614">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DP
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 21:59:00">
21:59
       </div>

       <div class="from_name">
Darafei Praliaskouski
       </div>

       <div class="text">
в документации прочитал
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message615">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 21:59:51">
21:59
       </div>

       <div class="text">
принцип наименьшего удивления не соблюдается. :)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message616">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
KB
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 22:01:37">
22:01
       </div>

       <div class="from_name">
Kirill B
       </div>

       <div class="text">
Не совсем по теме, кто-нибудь знает какие-нибудь несложные OLAP веб-GUI с возможность использования в качестве стораджа КХ или ту же Vertica?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message617">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 22:09:45">
22:09
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message616" onclick="return GoToMessage(616)">this message</a>
       </div>

       <div class="text">
Нет вроде как, по крайне мере за полгода я не нашел
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message618">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
KB
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 22:11:10">
22:11
       </div>

       <div class="from_name">
Kirill B
       </div>

       <div class="text">
Caravel смотрел?
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message619">

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 22:11:36">
22:11
       </div>

       <div class="text">
<a href="https://github.com/airbnb/superset">https://github.com/airbnb/superset</a>
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message620">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 22:12:47">
22:12
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message619" onclick="return GoToMessage(619)">this message</a>
       </div>

       <div class="text">
Ооо, спасибо, протестирую
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message621">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
KB
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="11.11.2016 22:12:55">
22:12
       </div>

       <div class="from_name">
Kirill B
       </div>

       <div class="text">
Еще такая вот есть <a href="http://www.cubesviewer.com/studio.html">http://www.cubesviewer.com/studio.html</a>
       </div>

      </div>

     </div>

     <div class="message service" id="message622">

      <div class="body details">
Peter Borodatyy invited Peter Borodatyy
      </div>

     </div>

     <div class="message service" id="message623">

      <div class="body details">
Denys Suhachenko invited Denys Suhachenko
      </div>

     </div>

     <div class="message service" id="message624">

      <div class="body details">
Sergey Poulikov invited Sergey Poulikov
      </div>

     </div>

     <div class="message service" id="message-3">

      <div class="body details">
12 November 2016
      </div>

     </div>

     <div class="message service" id="message625">

      <div class="body details">
Oleg Kharchenko invited Oleg Kharchenko
      </div>

     </div>

     <div class="message default clearfix" id="message626">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="12.11.2016 08:38:21">
08:38
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message607" onclick="return GoToMessage(607)">this message</a>
       </div>

       <div class="text">
да, но ведь вероятность того, что UUID будет - осознанно - равен &quot;00000000-0000-0000-0000-000000000000&quot;, очень мала.<br>такое может случиться, например, при LEFT JOIN&apos;е, если строка с UUIDом не сматчилась из второй таблицы.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message627">

      <div class="body">

       <div class="pull_right date details" title="12.11.2016 08:39:08">
08:39
       </div>

       <div class="text">
как раз в подобных случаях было бы удобно проверять на &quot;пустоту&quot;, хоть по факту строка и заполнена NUL-байтами
       </div>

      </div>

     </div>

     <div class="message service" id="message628">

      <div class="body details">
Oleg Soroka invited Oleg Soroka
      </div>

     </div>

     <div class="message default clearfix" id="message629">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="12.11.2016 18:21:18">
18:21
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message626" onclick="return GoToMessage(626)">this message</a>
       </div>

       <div class="text">
Согласен, так и есть. Но рассогласованность с функцией length беспокоит.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message630">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="12.11.2016 19:28:44">
19:28
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="text">
В качестве компромиссного варианта можно предусмотреть функцию emptyOrZero.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message631">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DP
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="12.11.2016 19:34:19">
19:34
       </div>

       <div class="from_name">
Darafei Praliaskouski
       </div>

       <div class="text">
жуть какая<br>а потом EmptyOrZeroOrNull?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message632">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="12.11.2016 19:35:58">
19:35
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="text">
Зачем. Если будешь пользоваться NULL-ами, тебе будет специальный синтаксис IS NULL, IS NOT NULL и соответствующие функции. И конечно, это никак не связано и не должно быть связано с пустыми строками и нулями.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message633">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DP
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="12.11.2016 19:38:28">
19:38
       </div>

       <div class="from_name">
Darafei Praliaskouski
       </div>

       <div class="text">
окей, а length() - это размер контейнера в байтах или семантическая длина данных?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message634">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="12.11.2016 19:39:29">
19:39
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="text">
Для строк - в байтах, для массивов - в элементах массива.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message635">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DP
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="12.11.2016 19:41:48">
19:41
       </div>

       <div class="from_name">
Darafei Praliaskouski
       </div>

       <div class="text">
понятно, тогда тут подмена понятий length / octet_length aka sizeof
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message636">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="12.11.2016 19:43:05">
19:43
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="text">
Могу согласиться частично.<br><a href="https://clickhouse.yandex/reference_ru.html#%D0%9A%D0%BE%D0%B4%D0%B8%D1%80%D0%BE%D0%B2%D0%BA%D0%B8">https://clickhouse.yandex/reference_ru.html#%D0%9A%D0%BE%D0%B4%D0%B8%D1%80%D0%BE%D0%B2%D0%BA%D0%B8</a>
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message637">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DP
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="12.11.2016 19:46:04">
19:46
       </div>

       <div class="from_name">
Darafei Praliaskouski
       </div>

       <div class="text">
задокументировать-то можно что угодно :)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message638">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="12.11.2016 19:46:51">
19:46
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="text">
Есть смысл, почему сделано именно так.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message639">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DP
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="12.11.2016 19:47:41">
19:47
       </div>

       <div class="from_name">
Darafei Praliaskouski
       </div>

       <div class="text">
смысл тоже понятен, sizeof() дёшев, итерирование по utf дорогое
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message640">

      <div class="body">

       <div class="pull_right date details" title="12.11.2016 19:48:39">
19:48
       </div>

       <div class="text">
вопрос в именовании и оглядке на другие системы
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message641">

      <div class="body">

       <div class="pull_right date details" title="12.11.2016 19:58:50">
19:58
       </div>

       <div class="text">
если определить length() как длину нулл-терминированной строки в байтах, а octet_length - как длину объекта в байтах, то length(fixedString) = 0 &lt;=&gt; empty(fixedString) &lt;=&gt; fixedString = \00000000000, например<br>можно подумать, как в это вписать ещё и lengthUTF8 по-человечески
       </div>

      </div>

     </div>

     <div class="message service" id="message642">

      <div class="body details">
Alexey joined group by link from Viktor Tarnavskiy
      </div>

     </div>

     <div class="message service" id="message643">

      <div class="body details">
Alexey invited Alexandr Vladimirovich
      </div>

     </div>

     <div class="message service" id="message-4">

      <div class="body details">
13 November 2016
      </div>

     </div>

     <div class="message default clearfix" id="message644">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="13.11.2016 09:33:10">
09:33
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message629" onclick="return GoToMessage(629)">this message</a>
       </div>

       <div class="text">
имхо, length для fixed string можно учитывать так же, как работает toStringCutToZero, т.е. strip&apos;ать все NUL-байты справа и считать оставшуюся длину. но я так, диванный аналитик.
       </div>

      </div>

     </div>

     <div class="message service" id="message645">

      <div class="body details">
Dmitry K. invited Dmitry K.
      </div>

     </div>

     <div class="message service" id="message646">

      <div class="body details">
Mike Ishenin invited Mike Ishenin
      </div>

     </div>

     <div class="message default clearfix" id="message647">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DP
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="13.11.2016 18:22:40">
18:22
       </div>

       <div class="from_name">
Darafei Praliaskouski
       </div>

       <div class="text">
я смог сформулировать, что неожиданно в этой системе для меня<br>тут функции - это по названиям императивные действия, а не декларативные свойства
       </div>

      </div>

     </div>

     <div class="message service" id="message-5">

      <div class="body details">
14 November 2016
      </div>

     </div>

     <div class="message service" id="message648">

      <div class="body details">
Vladimir Myasnikov invited Vladimir Myasnikov
      </div>

     </div>

     <div class="message default clearfix" id="message649">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic4" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
NM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 15:56:20">
15:56
       </div>

       <div class="from_name">
Nataliya Makarova
       </div>

       <div class="text">
Напоминаем, что 21 ноября проводим мероприятие в Яндексе про ClickHouse. Если еще не зарегистрировались, поторопитесь. Мест немного, можем закрыть регистрацию раньше. <a href="https://events.yandex.ru/events/yagosti/21-november-2016/">https://events.yandex.ru/events/yagosti/21-november-2016/</a>
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message650">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
MI
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 15:56:31">
15:56
       </div>

       <div class="from_name">
Mike Ishenin
       </div>

       <div class="text">
Вау, да ладно!
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message651">

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 15:56:39">
15:56
       </div>

       <div class="text">
Конечно надо :)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message652">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
R
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 16:44:00">
16:44
       </div>

       <div class="from_name">
Renat 
       </div>

       <div class="text">
<a href="https://t.me/NataMakarova">@NataMakarova</a>, трансляция будет?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message653">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
MF
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 16:48:22">
16:48
       </div>

       <div class="from_name">
Maxim Filatov
       </div>

       <div class="text">
Опять DC :(
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message654">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
n?
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 16:53:05">
16:53
       </div>

       <div class="from_name">
nikoinlove 🐈
       </div>

       <div class="text">
а разве где-то еще жизнь есть?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message655">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DP
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 16:55:20">
16:55
       </div>

       <div class="from_name">
Darafei Praliaskouski
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message654" onclick="return GoToMessage(654)">this message</a>
       </div>

       <div class="text">
да ладно, серьёзно?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message656">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
MF
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 17:51:09">
17:51
       </div>

       <div class="from_name">
Maxim Filatov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message654" onclick="return GoToMessage(654)">this message</a>
       </div>

       <div class="text">
да нет конечно, шучу прост
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message657">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 19:15:58">
19:15
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message653" onclick="return GoToMessage(653)">this message</a>
       </div>

       <div class="text">
В каком городе рекомендуете провести митап в следующий раз?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message658">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
MF
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 19:16:14">
19:16
       </div>

       <div class="from_name">
Maxim Filatov
       </div>

       <div class="text">
ну в DC2 же ;)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message659">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 19:16:27">
19:16
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="text">
Принято.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message660">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
MF
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 19:16:35">
19:16
       </div>

       <div class="from_name">
Maxim Filatov
       </div>

       <div class="text">
спасибо :)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message661">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic4" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
KN
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 19:31:12">
19:31
       </div>

       <div class="from_name">
Konstantin Novakovsky
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message658" onclick="return GoToMessage(658)">this message</a>
       </div>

       <div class="text">
+
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message662">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
MF
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 19:31:46">
19:31
       </div>

       <div class="from_name">
Maxim Filatov
       </div>

       <div class="text">
у нас тут и яндексовый офис не меньше московского ;)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message663">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
緑
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 19:32:00">
19:32
       </div>

       <div class="from_name">
緑眼のモンスター 
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message657" onclick="return GoToMessage(657)">this message</a>
       </div>

       <div class="text">
Riga
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message664">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
?
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 19:55:47">
19:55
       </div>

       <div class="from_name">
🔒Zloool🔒 
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message657" onclick="return GoToMessage(657)">this message</a>
       </div>

       <div class="text">
Киев?)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message665">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
GD
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 19:57:33">
19:57
       </div>

       <div class="from_name">
Grigory Demchenko
       </div>

       <div class="text">
надо голосовалку прикручивать. там, где количество голосов будет &gt; критического, можно попыаться устраивать
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message666">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AG
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 20:06:25">
20:06
       </div>

       <div class="from_name">
Alex Gonchar
       </div>

       <div class="text">
+1 к DC2
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message667">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 20:07:31">
20:07
       </div>

       <div class="from_name">
Aleksey Shirokikh
       </div>

       <div class="text">
тоже бы в питере с удовольствием сходил
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message668">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic7" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DZ
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 20:07:55">
20:07
       </div>

       <div class="from_name">
Denys 💛📈 💫 Zhdanov
       </div>

       <div class="text">
Доброго, народ! Вопрос по перекрестной репликации - <a href="https://groups.google.com/forum/#!topic/clickhouse/GFl04GsTNZg">https://groups.google.com/forum/#!topic/clickhouse/GFl04GsTNZg</a><br>Реализовано ли уже такое? В смысле указание дефолной БД для кластера?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message669">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 20:08:35">
20:08
       </div>

       <div class="from_name">
Dmitry Volodin
       </div>

       <div class="text">
меня пока больше выгрузка справочников с replica set монги беспокоит
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message670">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
KB
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 20:10:05">
20:10
       </div>

       <div class="from_name">
Kirill B
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message669" onclick="return GoToMessage(669)">this message</a>
       </div>

       <div class="text">
А в чем проблема, очень большие справочники?
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message671">

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 20:10:17">
20:10
       </div>

       <div class="text">
Часто обновляются или нет?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message672">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 20:12:40">
20:12
       </div>

       <div class="from_name">
Vladimir Smirnov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message662" onclick="return GoToMessage(662)">this message</a>
       </div>

       <div class="text">
Меньше раз в 5 же :)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message673">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
MF
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 20:13:22">
20:13
       </div>

       <div class="from_name">
Maxim Filatov
       </div>

       <div class="text">
Ну я уже лет пять в яндексе не работаю
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message674">

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 20:13:30">
20:13
       </div>

       <div class="text">
Может подрос ;)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message675">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 20:37:21">
20:37
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message668" onclick="return GoToMessage(668)">this message</a>
       </div>

       <div class="text">
Да, реализовано. Сейчас откопаю письмо...
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message676">

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 20:37:51">
20:37
       </div>

       <div class="text">
Да, как раз для этого человека делал.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message677">

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 20:38:25">
20:38
       </div>

       <div class="text">
Итоговая реализация такая:<br> <br>1. В описании кластера, для replica или node, можно указать необязательный элемент &lt;default_database&gt;.<br>Смысл такой: если для Distributed таблицы не указана база данных, то использовать default_database.<br> <br>2. При создании Distributed-таблицы, можно указать пустую строку вместо базы данных, что означает, что база данных не указана.<br>Пример: ENGINE = Distributed(different_databases, &apos;&apos;, test)<br>Смысл такой: использовать default_database из описания кластера.<br> <br>Таким образом, можно будет создавать Distributed таблицы, у которых разные реплики смотрят на таблицы в разных базах данных.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message678">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic7" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DZ
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 20:59:31">
20:59
       </div>

       <div class="from_name">
Denys 💛📈 💫 Zhdanov
       </div>

       <div class="text">
Спасибо за ответ, Алексей! Не совсем понятно как будет обстоять дело с перебалансировкой кластера в таком случае, скажем при добавлении нового сервера. Я так понимаю, шарды придётся вручную копировать?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message679">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 21:04:48">
21:04
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="text">
Да, перебалансировать вручную. Можно целиком перемещать реплики так: создать реплику (Replicated-таблицу) на новом сервере, удалить на старом.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message680">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
MI
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 21:06:27">
21:06
       </div>

       <div class="from_name">
Mike Ishenin
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message669" onclick="return GoToMessage(669)">this message</a>
       </div>

       <div class="text">
У кого-то получилось с mongo связаться? :) Я пробовал, да перестал, ни слова в доках не было в тот момент, кроме того, что оно есть. Поделитесь опытом?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message681">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 21:42:54">
21:42
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
А где написано что можно?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message682">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 21:43:52">
21:43
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="text">
В документации не написано, но можно.<br><a href="https://github.com/yandex/ClickHouse/issues/112">https://github.com/yandex/ClickHouse/issues/112</a>
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message683">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 21:53:19">
21:53
       </div>

       <div class="from_name">
Dmitry Volodin
       </div>

       <div class="text">
с монго сцепились нормально
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message684">

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 21:53:58">
21:53
       </div>

       <div class="text">
но у нас repliceset, хост, указанный в конфиге может и выйти покурить
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message685">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
MI
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 21:58:07">
21:58
       </div>

       <div class="from_name">
Mike Ishenin
       </div>

       <div class="text">
Это я спрашивал, и у меня ничего не вышло :)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message686">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 21:59:21">
21:59
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="text">
Ага, указание реплик не сделали.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message687">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
KB
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 22:11:40">
22:11
       </div>

       <div class="from_name">
Kirill B
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message684" onclick="return GoToMessage(684)">this message</a>
       </div>

       <div class="text">
Если речь только про чтение можно через tcp балансировщик - разницы никакой.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message688">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="14.11.2016 22:12:40">
22:12
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="text">
Да, словари - только чтение. Ещё, насколько я знаю, можно поставить пустую Mongo на localhost, и настроить как балансировщик.
       </div>

      </div>

     </div>

     <div class="message service" id="message-6">

      <div class="body details">
15 November 2016
      </div>

     </div>

     <div class="message service" id="message689">

      <div class="body details">
Mark Lu invited Mark Lu
      </div>

     </div>

     <div class="message default clearfix" id="message690">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 00:53:06">
00:53
       </div>

       <div class="from_name">
Vladimir Smirnov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message673" onclick="return GoToMessage(673)">this message</a>
       </div>

       <div class="text">
Пару лет назад был маленьким совсем, три этажа в бц. А в Москве три здания и еще немножко
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message691">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
MF
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 00:54:10">
00:54
       </div>

       <div class="from_name">
Maxim Filatov
       </div>

       <div class="text">
А, ну я бывал в московском только на льва толстого в каком-то одном здании
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message692">

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 00:54:35">
00:54
       </div>

       <div class="text">
Возможно поэтому осталось впечатление о его небольших размерах
       </div>

      </div>

     </div>

     <div class="message service" id="message693">

      <div class="body details">
Anton Strukov invited Anton Strukov
      </div>

     </div>

     <div class="message service" id="message694">

      <div class="body details">
f1yegor invited f1yegor
      </div>

     </div>

     <div class="message default clearfix" id="message695">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
f
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:15:09">
18:15
       </div>

       <div class="from_name">
f1yegor 
       </div>

       <div class="text">
если у меня данные живут в ReplicatedMergeTree, я  дедубликацию или FINAL уже никак не могу сделать?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message696">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:15:24">
18:15
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
FINAL нормально работает и в RMT
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message697">

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:15:30">
18:15
       </div>

       <div class="text">
Не пересекающиеся вещи
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message698">

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:15:43">
18:15
       </div>

       <div class="text">
А, стой, где слово Collapsing
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message699">

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:15:57">
18:15
       </div>

       <div class="text">
Какой тогда FINAL =) Нет, тогда не получится
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message700">

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:16:02">
18:16
       </div>

       <div class="text">
Только через group by
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message701">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
f
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:16:24">
18:16
       </div>

       <div class="from_name">
f1yegor 
       </div>

       <div class="text">
Exception: Storage ReplicatedMergeTree doesn&apos;t support FINAL.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message702">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:16:26">
18:16
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
а в ReplicatedCollapsing ОК? круто
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message703">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:17:08">
18:17
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Ну да, для Collapsing работает FINAL
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message704">

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:17:10">
18:17
       </div>

       <div class="text">
для любого
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message705">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
f
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:17:11">
18:17
       </div>

       <div class="from_name">
f1yegor 
       </div>

       <div class="text">
ну да, у меня раньше было ReplacingMergeTree, я для HA мигрировал в ReplicatedMergeTree, и дедупликацию по неосторожности потерял
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message706">

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:19:45">
18:19
       </div>

       <div class="text">
т.е. в ReplicatedReplacingMergeTree будет все работать?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message707">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:20:40">
18:20
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
ReplicatedReplacingMergeTree о_О
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message708">

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:20:49">
18:20
       </div>

       <div class="text">
Я не особо знаю про Replacing честно говоря
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message709">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
f
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:21:10">
18:21
       </div>

       <div class="from_name">
f1yegor 
       </div>

       <div class="text">
да, он не документирован
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message710">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:21:58">
18:21
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Тогда лучше Лёшу спрашивать
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message711">

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:22:04">
18:22
       </div>

       <div class="text">
<a href="https://t.me/milovidov_an">@milovidov_an</a>
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message712">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
RL
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:24:24">
18:24
       </div>

       <div class="from_name">
Roman Lomonosov
       </div>

       <div class="text">
попробовал. работает FINAL в ReplicatedReplacingMergeTree
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message713">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
f
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:24:43">
18:24
       </div>

       <div class="from_name">
f1yegor 
       </div>

       <div class="text">
да, я уже тоже попробовал)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message714">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:25:56">
18:25
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
А он работает в смысле не падает или работает в смысле работает?
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message715">

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:26:00">
18:26
       </div>

       <div class="text">
Ключи то схлопывает?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message716">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
f
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:26:19">
18:26
       </div>

       <div class="from_name">
f1yegor 
       </div>

       <div class="text">
схлапываются
       </div>

      </div>

     </div>

     <div class="message service" id="message717">

      <div class="body details">
Dmitriy Chernyshov invited Dmitriy Chernyshov
      </div>

     </div>

     <div class="message default clearfix" id="message718">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
f
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:28:00">
18:28
       </div>

       <div class="from_name">
f1yegor 
       </div>

       <div class="text">
еще глупый вопрос - когда начал команду вводить, и еще не запустил, как ее отменить и начать ввод новой? т.е. получить пустую строку
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message719">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:35:14">
18:35
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
никак, похоже. Ctrl+D игнорируется, если текущая строка не пуста, Ctrl+C выходит из CLI
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message720">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic7" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AP
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:35:49">
18:35
       </div>

       <div class="from_name">
Alexey Preobrazhenskiy
       </div>

       <div class="text">
Ctrl-A Ctrl-K ?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message721">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:36:27">
18:36
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
кстати да, как вариант, если всего одна строка
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message722">

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:36:49">
18:36
       </div>

       <div class="text">
если много - проще ctrl+c up enter :))
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message724">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:42:30">
18:42
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
я обычно ставлю ; и жму enter
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message725">

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:42:42">
18:42
       </div>

       <div class="text">
ругается на ошибку и даёт писать заново =)
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message726">

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:42:56">
18:42
       </div>

       <div class="text">
ну или если не -m то можно и без ;
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message727">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:42:57">
18:42
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
с другой стороны, history засоряется :(
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message728">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:43:06">
18:43
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Кстати, всем рекомендую clickhouse-client -m
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message729">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:43:12">
18:43
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
да, multiline прекрасен
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message730">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:43:19">
18:43
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
у меня alias прописан cm = clickhouse-client -m
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message731">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:43:39">
18:43
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
у меня еще <code>-f PrettyCompactMonoBlock</code> (который мне, конечно, лень добавить в конфиг)
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message732">

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:43:52">
18:43
       </div>

       <div class="text">
А то prettycompact как-то стремно делит результаты на отдельные таблицы :)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message733">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
f
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:44:26">
18:44
       </div>

       <div class="from_name">
f1yegor 
       </div>

       <div class="text">
писали почему моноблок  может работать плохо, потому что ему надо дожидаться всех данных
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message734">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
I
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:44:40">
18:44
       </div>

       <div class="from_name">
Igor 
       </div>

       <div class="text">
дада<br>ну, это меня не смущает, лишь бы КРАСИВО :)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message735">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:53:59">
18:53
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Если делается group by, то это не важно
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message736">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
f
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 18:58:48">
18:58
       </div>

       <div class="from_name">
f1yegor 
       </div>

       <div class="text">
но было бы хорошо сделать обработку Ctrl^C
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message737">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 19:23:08">
19:23
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Когда запрос выполняется, оно работает нормально.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message738">

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 19:23:13">
19:23
       </div>

       <div class="text">
В смысле - отменяет запрос
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message739">

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 19:23:32">
19:23
       </div>

       <div class="text">
А когда запрос не дописан, действительно можно просто enter нажать же
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message740">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
f
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 19:23:48">
19:23
       </div>

       <div class="from_name">
f1yegor 
       </div>

       <div class="text">
нужно отменять когда еще не выполняется, как в консоли
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message741">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 19:24:09">
19:24
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Наверное, да.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message742">

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 19:24:15">
19:24
       </div>

       <div class="text">
Сделаешь pull request? =)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message743">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
f
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 19:24:38">
19:24
       </div>

       <div class="from_name">
f1yegor 
       </div>

       <div class="text">
у меня с C++ не очень
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message744">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 19:26:22">
19:26
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Можешь поставить issue в гитхабе, кто-нибудь сделает, я думаю.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message745">

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 19:26:29">
19:26
       </div>

       <div class="text">
Задача для новичка самое то.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message746">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
f
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 19:26:52">
19:26
       </div>

       <div class="from_name">
f1yegor 
       </div>

       <div class="text">
это сделаю
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message747">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 19:28:23">
19:28
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Отлично, спасибо!
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message748">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
f
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 19:39:15">
19:39
       </div>

       <div class="from_name">
f1yegor 
       </div>

       <div class="text">
так вот, если у меня таблица <code>events</code> = ReplicatedMergeTree(...<a href="" onclick="return ShowBotCommand(&quot;events&quot;)">/events</a>), и мне надо перелить ее в другую Replicated таблицу, т.е. я хочу сделать events = Replicated....MergeTree(..<a href="" onclick="return ShowBotCommand(&quot;events&quot;)">/events</a>), то как это сделать без даунтайма? т.е. проблема в том что я не смогу потом у таблицы изменить пути зукипера
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message749">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 20:07:21">
20:07
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Не отвечу, лучше письмом на рассылку или в гугл групс
       </div>

      </div>

     </div>

     <div class="message service" id="message750">

      <div class="body details">
Roman Kolchin invited Roman Kolchin
      </div>

     </div>

     <div class="message service" id="message751">

      <div class="body details">
Алексей Константинов invited Алексей Константинов
      </div>

     </div>

     <div class="message service" id="message752">

      <div class="body details">
Antun Nofog invited Antun Nofog
      </div>

     </div>

     <div class="message service" id="message753">

      <div class="body details">
Артем Жданов invited Артем Жданов
      </div>

     </div>

     <div class="message service" id="message754">

      <div class="body details">
Michael Bogdanov invited Michael Bogdanov
      </div>

     </div>

     <div class="message default clearfix" id="message755">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
KB
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 21:54:28">
21:54
       </div>

       <div class="from_name">
Kirill B
       </div>

       <div class="text">
Допустим у нас есть таблица со столбцами: key version value<br>key + version = уникальный ключ<br>key = индексный столбец<br>version = версия данных<br>value = сами данные<br><br>Как делать запрос с WHERE ... GROUP BY key, но чтобы в результатах учавствовали только строки с максимальными значениями поля version в пределах ключа key с учетом WHERE?<br><br>Например, если взять вот такие данные для примера:<br>1 1 10<br>1 2 20<br>1 3 30  <a href="" onclick="return ShowHashtag(&quot;строка&quot;)">#строка</a> с максимальной версией для key=1<br>2 1 100<br>2 2 200 <a href="" onclick="return ShowHashtag(&quot;строка&quot;)">#строка</a> с максимальной версией для key=2<br><br>то такой запрос должен выдать:<br>1 30<br>2 200
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message756">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
MI
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 21:56:16">
21:56
       </div>

       <div class="from_name">
Mike Ishenin
       </div>

       <div class="text">
Это попытка реализовать апдейт данных на &quot;неограниченном&quot; жёстком диске? :)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message757">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
KB
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 21:56:20">
21:56
       </div>

       <div class="from_name">
Kirill B
       </div>

       <div class="text">
Сase использования: допустим, мы забираем статистику по API у какого-то сервиса. Ключи остаются теми же, а цифры всегда растут каждый час и при очередной вставке мы увеличиваем version. А при выборке гарантией самых свежих данных из API будет то, что мы всегда выбираем строки с максимальным version в пределах ключа.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message758">

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 21:57:16">
21:57
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message756" onclick="return GoToMessage(756)">this message</a>
       </div>

       <div class="text">
:) Что-то типа этого. Кейс использования я привел выше. В реляционных СУБД с этим замечательно справляется INSERT ON DUPLICATE KEY UPDATE
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message759">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 22:00:11">
22:00
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message755" onclick="return GoToMessage(755)">this message</a>
       </div>

       <div class="text">
Group by не используют при таких раскладах, т.к. производительность будет в Ж... <br>Делают оконными функциями или подзапросами в WHERE
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message760">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
RL
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 22:00:21">
22:00
       </div>

       <div class="from_name">
Roman Lomonosov
       </div>

       <div class="text">
replacingmergetree смотрел? или materialized view на основе replacingmergetree?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message761">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
KB
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 22:01:58">
22:01
       </div>

       <div class="from_name">
Kirill B
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message759" onclick="return GoToMessage(759)">this message</a>
       </div>

       <div class="text">
Я GROP BY привел, т.к. эти SELECTы подразумевают SUM,AVG.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message762">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
E
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 22:02:13">
22:02
       </div>

       <div class="from_name">
Etki 
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message755" onclick="return GoToMessage(755)">this message</a>
       </div>

       <div class="text">
я бы просто уникальный ключ даунгрейднул до просто key и обновлял по мере обновления самих данных
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message763">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
KB
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 22:02:42">
22:02
       </div>

       <div class="from_name">
Kirill B
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message760" onclick="return GoToMessage(760)">this message</a>
       </div>

       <div class="text">
Читал, но поверхностно - еще почитаю.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message764">

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 22:04:38">
22:04
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message762" onclick="return GoToMessage(762)">this message</a>
       </div>

       <div class="text">
Да, согласен - если мы выбираем максимальную версию, то version в уникальном ключе нам вообще не нужен.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message765">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 22:04:52">
22:04
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message761" onclick="return GoToMessage(761)">this message</a>
       </div>

       <div class="text">
Оконные функции
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message766">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
pk
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 22:07:42">
22:07
       </div>

       <div class="from_name">
papa karlo
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message755" onclick="return GoToMessage(755)">this message</a>
       </div>

       <div class="text">
<pre>select key,argMax(value, version) from (select 1 as key, 1 as version, 10 as value union all select 1 ,2,20 union all select 1, 3, 30 union all select 2,1,100 union all select 2,1,200) group by key</pre>
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message767">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
RL
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 22:08:44">
22:08
       </div>

       <div class="from_name">
Roman Lomonosov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message763" onclick="return GoToMessage(763)">this message</a>
       </div>

       <div class="text">
документации к  replacing нет. вот тут пара строк в комментах <a href="https://github.com/yandex/ClickHouse/blob/master/dbms/src/Storages/StorageFactory.cpp#L524">https://github.com/yandex/ClickHouse/blob/master/dbms/src/Storages/StorageFactory.cpp#L524</a>
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message768">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
KB
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 22:08:49">
22:08
       </div>

       <div class="from_name">
Kirill B
       </div>

       <div class="text">
Ого
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message769">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
pk
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 22:09:02">
22:09
       </div>

       <div class="from_name">
papa karlo
       </div>

       <div class="text">
в последней строке опечатка, должно быть 2,2,200, тогда отдается 2 200.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message770">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
KB
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 22:12:11">
22:12
       </div>

       <div class="from_name">
Kirill B
       </div>

       <div class="text">
Всем огромное спасибо, поизучаю!
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message771">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
f
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 22:20:48">
22:20
       </div>

       <div class="from_name">
f1yegor 
       </div>

       <div class="text">
по ReplacingMergeTree просто посмотри тесты в репозитории
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message772">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
KB
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="15.11.2016 22:27:43">
22:27
       </div>

       <div class="from_name">
Kirill B
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message771" onclick="return GoToMessage(771)">this message</a>
       </div>

       <div class="text">
Угу, понял.
       </div>

      </div>

     </div>

     <div class="message service" id="message-7">

      <div class="body details">
16 November 2016
      </div>

     </div>

     <div class="message service" id="message773">

      <div class="body details">
Deleted Account invited Deleted Account
      </div>

     </div>

     <div class="message service" id="message774">

      <div class="body details">
er@essbase.ru invited er@essbase.ru
      </div>

     </div>

     <div class="message default clearfix" id="message775">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
e
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 12:36:48">
12:36
       </div>

       <div class="from_name">
er@essbase.ru 
       </div>

       <div class="media_wrap clearfix">

        <div class="media clearfix pull_left media_photo">

         <div class="fill pull_left">

         </div>

         <div class="body">

          <div class="title bold">
Photo
          </div>

          <div class="description">
Not included, change data exporting settings to download.
          </div>

          <div class="status details">
913x328, 39.3 KB
          </div>

         </div>

        </div>

       </div>

       <div class="text">
<a href="http://www.sql.ru/forum/1219008-2/clickhouse-from-yandex">http://www.sql.ru/forum/1219008-2/clickhouse-from-yandex</a>
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message776">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VZ
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 12:52:01">
12:52
       </div>

       <div class="from_name">
Vladimir Zagranovsky
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message775" onclick="return GoToMessage(775)">this message</a>
       </div>

       <div class="text">
джва года ждал (с)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message777">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 13:19:54">
13:19
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="text">
еще бы адаптировать CH под Anchor model и цены ему не будет...
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message778">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
ES
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 13:20:20">
13:20
       </div>

       <div class="from_name">
Evgeniy Shishkin
       </div>

       <div class="text">
что за модель
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message779">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DK
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 13:21:03">
13:21
       </div>

       <div class="from_name">
Dmitrii Kuznetsov
       </div>

       <div class="text">
Да-да, мы когда на кликхаус пересели, я долго не мог поверить, что это не закешированные данные, а посчитанные на лету.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message780">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 13:38:25">
13:38
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message778" onclick="return GoToMessage(778)">this message</a>
       </div>

       <div class="text">
<a href="http://www.anchormodeling.com/">http://www.anchormodeling.com/</a>
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message781">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
e
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 13:43:11">
13:43
       </div>

       <div class="from_name">
er@essbase.ru 
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message780" onclick="return GoToMessage(780)">this message</a>
       </div>

       <div class="text">
Я бы тоже в булушную на Самосвале ездил бы , а че , колеса есть ) Руль то же круглый и мтотор мощный.. <br><br> - Я правильно понимаю что Anchor создавался для ERP шек ?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message782">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 13:45:01">
13:45
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message781" onclick="return GoToMessage(781)">this message</a>
       </div>

       <div class="text">
Сравнение скорее пойти пешком на другой конец мира, вместо того, чтобы полететь...<br>И Anchor не совсем для ERP, на его основе отлично строится гибкий DWH
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message783">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
RK
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 13:45:33">
13:45
       </div>

       <div class="from_name">
Roman Kolchin
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message781" onclick="return GoToMessage(781)">this message</a>
       </div>

       <div class="text">
Про сравнение разных подходов к моделированию, в приложении к Вертике, <a href="https://habrahabr.ru/post/227111/">https://habrahabr.ru/post/227111/</a> Про анкор там тоже есть.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message784">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 13:46:32">
13:46
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message783" onclick="return GoToMessage(783)">this message</a>
       </div>

       <div class="text">
Да да, Николай Голов очень много про это рассказывает на примере внедрения Vertica в Avito
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message785">

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 13:46:49">
13:46
       </div>

       <div class="text">
Вот еще до кучи: <a href="http://synthesis.ipi.ac.ru/sigmod/seminar/s20151126">http://synthesis.ipi.ac.ru/sigmod/seminar/s20151126</a>
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message786">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
RK
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 13:49:35">
13:49
       </div>

       <div class="from_name">
Roman Kolchin
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message777" onclick="return GoToMessage(777)">this message</a>
       </div>

       <div class="text">
Анкор же можно представить снежинкой с огромным количеством &quot;лучиков&quot;?
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message787">

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 13:49:55">
13:49
       </div>

       <div class="text">
Или даже звездой?
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message788">

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 13:50:02">
13:50
       </div>

       <div class="text">
Набором звезд.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message789">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 13:50:14">
13:50
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="text">
не совсем
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message790">

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 13:50:29">
13:50
       </div>

       <div class="text">
у Anchor три сущности, а не две
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message791">

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 13:51:19">
13:51
       </div>

       <div class="text">
там 6NF, идет избыточность таблиц, но это дает полную гибкость в плавном подключение новых сущностей, без затрагивания существующих
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message792">

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 13:51:59">
13:51
       </div>

       <div class="text">
сделать это на CH можно, но проблема состоит потом собрать это JOIN&apos;ами
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message793">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
RK
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 13:52:25">
13:52
       </div>

       <div class="from_name">
Roman Kolchin
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message791" onclick="return GoToMessage(791)">this message</a>
       </div>

       <div class="text">
Я поэтому и провел аналогию с набором звезд. Таблица фактов, вокруг 100500 таблиц с отдельными атрибутами. Какая третья сущность нужна?
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message794">

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 13:52:57">
13:52
       </div>

       <div class="text">
Таблицы атрибутов = словари в КХ
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message795">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 13:53:01">
13:53
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message793" onclick="return GoToMessage(793)">this message</a>
       </div>

       <div class="text">
Ознакомьтесь внимательнее, хотя бы с презентацией
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message796">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
e
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 13:54:01">
13:54
       </div>

       <div class="from_name">
er@essbase.ru 
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message795" onclick="return GoToMessage(795)">this message</a>
       </div>

       <div class="text">
Чтение одних и теже книг редко приводит к одним и тем же выводам ))
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message797">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
RK
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 13:54:32">
13:54
       </div>

       <div class="from_name">
Roman Kolchin
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message795" onclick="return GoToMessage(795)">this message</a>
       </div>

       <div class="text">
Я знакомился. Только давно. На пальцах поясните, плиз, почему сущности анкор-модели не получится смоделировать через небольшое кол-во таблиц фактов и словарей.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message798">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 13:54:49">
13:54
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="text">
я не сказал, что не получится
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message799">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
RK
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 13:55:15">
13:55
       </div>

       <div class="from_name">
Roman Kolchin
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message798" onclick="return GoToMessage(798)">this message</a>
       </div>

       <div class="text">
Тогда зачем мне в доку отправляете? :)
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message800">

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 13:56:38">
13:56
       </div>

       <div class="text">
Просто на сколько я понимаю сделать очень быстрые универсальные джойны крайне сложно. СОбственно, поэтому в КХ и добавлены словари.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message801">

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 13:57:56">
13:57
       </div>

       <div class="text">
Но если можно сделать гибридное DWH на КХ + универсальная релиционка для пролвинутой работы с таблицами атрибутов, которые в КХ загружаются в виде словарей — то почему бы так и не сделать.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message802">

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 13:58:32">
13:58
       </div>

       <div class="text">
Собственно, если у вас есть практический опыт именно с anchor моделированием, поясните, какие могут тут грабли быть?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message803">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 13:59:53">
13:59
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="text">
грабли одни, зачем мне гибридное DWH?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message804">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
RK
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:11:29">
14:11
       </div>

       <div class="from_name">
Roman Kolchin
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message803" onclick="return GoToMessage(803)">this message</a>
       </div>

       <div class="text">
Если вам нужно положить много данных в DWH и при этом хотите использовать современный гибкий подход к моделированию, то я ПРЕДПОЛАГАЮ, что вы можете это сделать объединив КХ с какой-нибудь реляционкой рядом. Данных в этой релиционке много быть не должно, она будет чисто под &quot;справчники&quot;. Поэтому для этой цели можно использовать все что угодно, даже коммерческие базы от крупных вендоров — их бесплатные/дешевые редакции. Если вы наладите ETL для импорта данных в КХ, то направить часть данных в эту побочную базу проблемы не соствит — в отличие от КХ вокруг этих баз уже есть зрелая инфраструктура. В общем, пугать такое &quot;гибридное&quot; DWH должно только менеджеров (ну как же, две разные технологии, которые наверное будут враждовать друг с другом — ой, боюсь, боюсь).<br><br>В общем это лишь мое ПРЕДПОЛОЖЕНИЕ, что таблицы фактов + словари в КХ с подсистемой хранения атрибутов в отдельной базе позволят воспользоваться преимуществами anchor уже сейчас. Если видите грабли в этом, поясните плиз.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message805">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:12:34">
14:12
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="text">
вы мне сейчас предлагает усложнить ETL на пустом месте, я уж молчу про факт наличия допольнительного ПО/железа и его администрирования и поддержки
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message806">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
RK
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:13:36">
14:13
       </div>

       <div class="from_name">
Roman Kolchin
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message805" onclick="return GoToMessage(805)">this message</a>
       </div>

       <div class="text">
как на пустом месте? польза очевидна — вы получите КХ c плюшками anchor&apos;а
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message807">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:14:19">
14:14
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="text">
плюшки не очевидны на фоне затрат
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message808">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
RK
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:14:54">
14:14
       </div>

       <div class="from_name">
Roman Kolchin
       </div>

       <div class="text">
я прикинул, что КХ c этой &quot;левой&quot; базой можно было бы положить на один сервер
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message809">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:15:15">
14:15
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="text">
я это учел
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message810">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
RK
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:15:22">
14:15
       </div>

       <div class="from_name">
Roman Kolchin
       </div>

       <div class="text">
сам по себе ETL в КХ будет еще тот геморой ;)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message811">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:15:40">
14:15
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="text">
это отдельный ETL-процесс
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message812">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
АК
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:16:01">
14:16
       </div>

       <div class="from_name">
Алексей Константинов
       </div>

       <div class="text">
Привет. Мне кажется anchor выгоден там, где нет времени-возможности-сил поступающие данные по слоям раскладывать. У Авито все что приходит, они тут же юзают. То есть идея у него - легко грузить данные. Но вот &quot;легко анализировать&quot;, это не про anchor :)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message813">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
RK
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:16:02">
14:16
       </div>

       <div class="from_name">
Roman Kolchin
       </div>

       <div class="text">
+ геморой сам по себе ETL для фомирования anchor сущностей — это геморой не зависит от выбора базы
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message814">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
АК
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:16:28">
14:16
       </div>

       <div class="from_name">
Алексей Константинов
       </div>

       <div class="text">
в том же Авито мы их консультировали, под сотню джойнов в аналитических запросах
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message815">

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:16:32">
14:16
       </div>

       <div class="text">
даже Вертике мало не казалось
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message816">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
RK
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:16:35">
14:16
       </div>

       <div class="from_name">
Roman Kolchin
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message812" onclick="return GoToMessage(812)">this message</a>
       </div>

       <div class="text">
Предположу, что у Авито мало сущностей :) Поэтому 6-я форма не приводит к хаоусу
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message817">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:16:45">
14:16
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message812" onclick="return GoToMessage(812)">this message</a>
       </div>

       <div class="text">
Для анализа собираются витрины, нужны нормальные JOIN&apos;ы и все
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message818">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
АК
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:16:50">
14:16
       </div>

       <div class="from_name">
Алексей Константинов
       </div>

       <div class="text">
да там сплошные логи грузятся, да еще ЕТЛ на Питоне самописный
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message819">

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:17:10">
14:17
       </div>

       <div class="text">
понятно им выгоднее получилось 6 форма
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message820">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:17:14">
14:17
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message816" onclick="return GoToMessage(816)">this message</a>
       </div>

       <div class="text">
Если у Авито мало сущностей, мне интересно, у кого их много и что это за сущности?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message821">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
АК
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:17:23">
14:17
       </div>

       <div class="from_name">
Алексей Константинов
       </div>

       <div class="text">
а вы банк любой возьмите
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message822">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:17:30">
14:17
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message821" onclick="return GoToMessage(821)">this message</a>
       </div>

       <div class="text">
я телеком беру
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message823">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
АК
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:17:31">
14:17
       </div>

       <div class="from_name">
Алексей Константинов
       </div>

       <div class="text">
там каждая система источник десятки сущностей имеет
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message824">

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:17:34">
14:17
       </div>

       <div class="text">
и источников тоже десятки
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message825">

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:17:47">
14:17
       </div>

       <div class="text">
у нас в йоте более тысячи таблиц
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message826">

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:17:53">
14:17
       </div>

       <div class="text">
исходные данные плюс витрины
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message827">

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:18:16">
14:18
       </div>

       <div class="text">
и это даже мало, 70 тб ограничение, не влазит все, через хайв еще им жуем и выплеваем результаты
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message828">

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:18:49">
14:18
       </div>

       <div class="text">
в телекоме если начать собирать ту же сетевую статистику для анализа работы сети сущностей тоже вполне себе на каждого вендора технологию
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message829">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:19:00">
14:19
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="text">
у меня на текущий момент 5 крупных биллингов, начиная от всякого древнего говна, заканчивая самописными,  2 крупных компании и десятки мелких, плюс агенты и аренда каналов
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message830">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
АК
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:19:18">
14:19
       </div>

       <div class="from_name">
Алексей Константинов
       </div>

       <div class="text">
биллинг в йоте это маленькая часть от всех сущностей, &quot;копейки&quot; :)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message831">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:19:44">
14:19
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="text">
а я и не спорю на эту тему
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message832">

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:19:48">
14:19
       </div>

       <div class="text">
что вас смущает?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message833">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:19:49">
14:19
       </div>

       <div class="from_name">
Dmitry Volodin
       </div>

       <div class="text">
биллинг - компактый достаточно :)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message834">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:19:59">
14:19
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message833" onclick="return GoToMessage(833)">this message</a>
       </div>

       <div class="text">
а вот тут могу поспорить
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message835">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:20:04">
14:20
       </div>

       <div class="from_name">
Dmitry Volodin
       </div>

       <div class="text">
вот CRM, FM, PM, OMS/OFM, TT - там да
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message836">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:20:25">
14:20
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="text">
а я написал количество компаний
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message837">

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:20:28">
14:20
       </div>

       <div class="text">
умножайте
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message838">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
АК
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:20:30">
14:20
       </div>

       <div class="from_name">
Алексей Константинов
       </div>

       <div class="text">
ну мы им биллинг весь грузим, через ОГГ с Оракла снимаем все изменения таблиц и один в один реплицируем в Вертику
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message839">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:20:36">
14:20
       </div>

       <div class="from_name">
Dmitry Volodin
       </div>

       <div class="text">
и NRI
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message840">

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:20:48">
14:20
       </div>

       <div class="text">
ну а чего умножать
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message841">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
АК
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:20:51">
14:20
       </div>

       <div class="from_name">
Алексей Константинов
       </div>

       <div class="text">
но тут вот про Anchor  - в таких вот ХД от него мне кажется вреда чем пользы больше
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message842">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:21:27">
14:21
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message838" onclick="return GoToMessage(838)">this message</a>
       </div>

       <div class="text">
вот я так же сейчас и делаю, сливаю все в staging Vertica, а дальше прохожусь ETL и формирую DWH
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message843">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:21:27">
14:21
       </div>

       <div class="from_name">
Dmitry Volodin
       </div>

       <div class="text">
процентовка биллинговой информации в BI - далеко не самая большая
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message844">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
АК
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:21:41">
14:21
       </div>

       <div class="from_name">
Алексей Константинов
       </div>

       <div class="text">
по жизни проблема - легко грузить или потом легко анализировать, что важнее :)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message845">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:21:49">
14:21
       </div>

       <div class="from_name">
Dmitry Volodin
       </div>

       <div class="text">
это еще если не учитывать, что могут слить netflow
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message846">

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:22:02">
14:22
       </div>

       <div class="text">
или логи с платформы IPTV
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message847">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
АК
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:22:09">
14:22
       </div>

       <div class="from_name">
Алексей Константинов
       </div>

       <div class="text">
и это все в Йоте грузится :)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message848">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:22:17">
14:22
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message841" onclick="return GoToMessage(841)">this message</a>
       </div>

       <div class="text">
Это почему? Вы можете сразу описать и зафиксирвоать все сущности? Или вы собираетесь потом лезть и менять все в проде, чтобы потом узнать, а почему у меня что-то не рабоатет за DWH?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message849">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
АК
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:22:19">
14:22
       </div>

       <div class="from_name">
Алексей Константинов
       </div>

       <div class="text">
все до чего доступ есть
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message850">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:22:43">
14:22
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message843" onclick="return GoToMessage(843)">this message</a>
       </div>

       <div class="text">
а вот это спорно
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message851">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:22:44">
14:22
       </div>

       <div class="from_name">
Dmitry Volodin
       </div>

       <div class="text">
сразу описывать и фиксировать все сущности - не один год займет
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message852">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:22:51">
14:22
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message851" onclick="return GoToMessage(851)">this message</a>
       </div>

       <div class="text">
про что и речь
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message853">

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:22:55">
14:22
       </div>

       <div class="text">
поэтому Anchor
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message854">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
АК
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:23:00">
14:23
       </div>

       <div class="from_name">
Алексей Константинов
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message848" onclick="return GoToMessage(848)">this message</a>
       </div>

       <div class="text">
да в любой системе сущности фиксированны так или иначе
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message855">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:23:09">
14:23
       </div>

       <div class="from_name">
Dmitry Volodin
       </div>

       <div class="text">
ой ли
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message856">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:23:09">
14:23
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message854" onclick="return GoToMessage(854)">this message</a>
       </div>

       <div class="text">
если бы
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message857">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
АК
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:23:30">
14:23
       </div>

       <div class="from_name">
Алексей Константинов
       </div>

       <div class="text">
набор сущностей фиксирован
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message858">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:23:34">
14:23
       </div>

       <div class="from_name">
Dmitry Volodin
       </div>

       <div class="text">
есть у меня не один пример, как эти самые сущности на ходу менялись
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message859">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
E
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:23:36">
14:23
       </div>

       <div class="from_name">
Etki 
       </div>

       <div class="text">
не всегда
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message860">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
АК
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:23:39">
14:23
       </div>

       <div class="from_name">
Алексей Константинов
       </div>

       <div class="text">
набор  их атрибутов плавает, в порядке вещей
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message861">

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:23:41">
14:23
       </div>

       <div class="text">
какие проблемы то ?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message862">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:23:45">
14:23
       </div>

       <div class="from_name">
Dmitry Volodin
       </div>

       <div class="text">
пока другие ребята пытались модель данных описать
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message863">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
АК
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:24:08">
14:24
       </div>

       <div class="from_name">
Алексей Константинов
       </div>

       <div class="text">
ну вот это все  мое мнение из разряда &quot;правильная архитектура&quot;
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message864">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:24:18">
14:24
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message857" onclick="return GoToMessage(857)">this message</a>
       </div>

       <div class="text">
я рад, что у вас в йоте отлично все фиксировано, а вот у нас все очень грустно и печально, до такой степени, что даже в рамках одного биллинга две разные услуги считаются в разных сущностях
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message865">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:24:31">
14:24
       </div>

       <div class="from_name">
Dmitry Volodin
       </div>

       <div class="text">
из наших систем кусочек был не большой, конечно, но мы умудрились несколько технологически новых услуг запустить
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message866">

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:24:34">
14:24
       </div>

       <div class="text">
пока все описывали
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message867">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
RK
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:25:00">
14:25
       </div>

       <div class="from_name">
Roman Kolchin
       </div>

       <div class="text">
Подхождите спорить, фиксирован или не фиксирован набор сущностей — вопрос — о каких сущностях идет речь? Сущности из источников или сущностях DWH, которые мы из имеющихся источников сочиняем?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message868">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
АК
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:25:07">
14:25
       </div>

       <div class="from_name">
Алексей Константинов
       </div>

       <div class="text">
вот я о том же
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message869">

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:25:13">
14:25
       </div>

       <div class="text">
в DWH сущности фиксированы
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message870">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:25:22">
14:25
       </div>

       <div class="from_name">
Dmitry Volodin
       </div>

       <div class="text">
Только в нашем МРФ биллингов было штук 5 крупных
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message871">

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:25:26">
14:25
       </div>

       <div class="text">
ну и мелочь
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message872">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
АК
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:25:29">
14:25
       </div>

       <div class="from_name">
Алексей Константинов
       </div>

       <div class="text">
а источников в стайдж слой можно сколько угодно и как угодно добавлять
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message873">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
RK
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:25:36">
14:25
       </div>

       <div class="from_name">
Roman Kolchin
       </div>

       <div class="text">
Вот Anchor он делает DWH устойчивым (гибким - гнется а не ломается) по отношению к каким изменениям?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message874">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:25:46">
14:25
       </div>

       <div class="from_name">
Dmitry Volodin
       </div>

       <div class="text">
причем во время описания модели вовсю лишние биллинги выпиливали
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message875">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:25:52">
14:25
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message869" onclick="return GoToMessage(869)">this message</a>
       </div>

       <div class="text">
Фиксированы до момента, пока соответсвуют описанию бизнес-логики, ну и добавление новых никто не отменял
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message876">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
RK
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:25:56">
14:25
       </div>

       <div class="from_name">
Roman Kolchin
       </div>

       <div class="text">
Изменениям источников или наших хотелок по анализу?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message877">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
АК
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:26:04">
14:26
       </div>

       <div class="from_name">
Алексей Константинов
       </div>

       <div class="text">
он позволяет вместо того чтобы проанализировать и подумать, сразу все грузить, &quot;а уж потом думать&quot;
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message878">

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:26:17">
14:26
       </div>

       <div class="text">
фактически это форма грузить все не ломая голову
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message879">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:26:31">
14:26
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Друзья, я прошу потихоньку сворачивать дискуссию про разные DWH и прочие способы хранить данные
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message880">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:26:37">
14:26
       </div>

       <div class="from_name">
Dmitry Volodin
       </div>

       <div class="text">
зато потом ломать голову на сборке?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message881">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:26:43">
14:26
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message877" onclick="return GoToMessage(877)">this message</a>
       </div>

       <div class="text">
не совсем, он позволяет грузить сущности и не думать о том, как они дальше взаимодействуют, ибо они выделены
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message882">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
АК
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:26:45">
14:26
       </div>

       <div class="from_name">
Алексей Константинов
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message879" onclick="return GoToMessage(879)">this message</a>
       </div>

       <div class="text">
+100
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message883">

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:26:50">
14:26
       </div>

       <div class="text">
предлагаю эту тему вынести куда нибудь
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message884">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:27:04">
14:27
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Если хочется обсуждать дальше, сформируйте отдельный чат себе
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message885">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:27:07">
14:27
       </div>

       <div class="from_name">
Aleksey Shirokikh
       </div>

       <div class="text">
в <a href="https://t.me/dba_ru">@dba_ru</a>
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message886">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:27:28">
14:27
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="text">
В общем, по теме, мне интересно, будет ли CH нормально поддерживать JOIN&apos;ы
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message887">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:27:30">
14:27
       </div>

       <div class="from_name">
Dmitry Volodin
       </div>

       <div class="text">
Если интересно, то по совету коллек мы для нашего FM/PM зацепили из CH внешние словари из монги
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message888">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:27:36">
14:27
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message885" onclick="return GoToMessage(885)">this message</a>
       </div>

       <div class="text">
там админы в основном
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message889">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:27:54">
14:27
       </div>

       <div class="from_name">
Aleksey Shirokikh
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message888" onclick="return GoToMessage(888)">this message</a>
       </div>

       <div class="text">
fix it :)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message890">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 14:28:03">
14:28
       </div>

       <div class="from_name">
Dmitry Volodin
       </div>

       <div class="text">
доработка ETL была относительно простая
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message891">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
ES
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 16:46:45">
16:46
       </div>

       <div class="from_name">
Evgeniy Shishkin
       </div>

       <div class="text">
мужики, оконные функции и rank() будет/есть?
       </div>

      </div>

     </div>

     <div class="message service" id="message892">

      <div class="body details">
Slach invited Slach
      </div>

     </div>

     <div class="message service" id="message893">

      <div class="body details">
A B invited A B
      </div>

     </div>

     <div class="message default clearfix" id="message894">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
RK
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 19:03:30">
19:03
       </div>

       <div class="from_name">
Roman Kolchin
       </div>

       <div class="text">
<a href="https://t.me/the_real_jkee">@the_real_jkee</a> вы планируете опубликовать какой-нибудь roadmap или хотя бы список горячих фич над которыми вы работаете? конечно, без гарантий, все ж понимаем, но ориентиры хотелось бы видеть
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message895">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DA
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 19:18:19">
19:18
       </div>

       <div class="from_name">
Dmitry Andreev
       </div>

       <div class="text">
<a href="https://events.yandex.ru/events/yagosti/21-november-2016/">https://events.yandex.ru/events/yagosti/21-november-2016/</a>
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message896">

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 19:18:36">
19:18
       </div>

       <div class="text">
Создатели системы ответят на вопросы, расскажут о последних изменениях и предстоящих обновлениях
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message897">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
ES
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 19:21:19">
19:21
       </div>

       <div class="from_name">
Evgeniy Shishkin
       </div>

       <div class="text">
трансляция/запись для замкадышей будет?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message898">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 19:25:30">
19:25
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Планируем опубликовать, да
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message899">

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 19:25:38">
19:25
       </div>

       <div class="text">
Трансляции скорее всего не будет
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message900">

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 19:25:52">
19:25
       </div>

       <div class="text">
Точнее скажет Наташа <a href="https://t.me/NataMakarova">@NataMakarova</a>
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message901">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
RK
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="16.11.2016 19:33:57">
19:33
       </div>

       <div class="from_name">
Roman Kolchin
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message898" onclick="return GoToMessage(898)">this message</a>
       </div>

       <div class="text">
класс, спасибо!
       </div>

      </div>

     </div>

     <div class="message service" id="message-8">

      <div class="body details">
17 November 2016
      </div>

     </div>

     <div class="message service" id="message902">

      <div class="body details">
Alexey Tomin invited Alexey Tomin
      </div>

     </div>

     <div class="message default clearfix" id="message903">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 07:58:43">
07:58
       </div>

       <div class="from_name">
Alexey Tomin
       </div>

       <div class="text">
Добрый день всем!<br>Кто-нибудь грузил данные в CH из hadoop (hdfs)? <br>Как лучше всего делать? Если пускать map, то CH давится объёмами (hadoop кластер мощнее). Запускать отдельное приложение- админы против (ещё одна программа- ещё им работы).
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message904">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
e
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 08:02:55">
08:02
       </div>

       <div class="from_name">
er@essbase.ru 
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message903" onclick="return GoToMessage(903)">this message</a>
       </div>

       <div class="text">
Слона едят частями ?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message905">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 08:04:33">
08:04
       </div>

       <div class="from_name">
Alexey Tomin
       </div>

       <div class="text">
Хотя бы и так - в hadoop есть отлаженный процесс расчётов данных под конкретные алгоритмы. А в CH будут аналитики искать новые.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message906">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
e
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 08:05:10">
08:05
       </div>

       <div class="from_name">
er@essbase.ru 
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message903" onclick="return GoToMessage(903)">this message</a>
       </div>

       <div class="text">
Админы исполняют ту музыку , которую оплачивает заказчик .   Если нет денег на работу, значит она вам не так уж сильно и нужна )
       </div>

      </div>

     </div>

     <div class="message service" id="message907">

      <div class="body details">
Ilya Sereda invited Ilya Sereda
      </div>

     </div>

     <div class="message default clearfix" id="message908">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
e
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 09:56:29">
09:56
       </div>

       <div class="from_name">
er@essbase.ru 
       </div>

       <div class="text">
Блин .. это рвет мою картину мира )) Обычно все ровно наоборот <br><br>- или Вы хотите сказать что CH гораздо удобнее в анализе сырых данных чем hadoop (+ hive(hawq))<br><br>  o-o-o может ну его hadoop ? )
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message909">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 10:03:34">
10:03
       </div>

       <div class="from_name">
Viktor Tarnavskiy
       </div>

       <div class="text">
Тут смотря что называть сырыми данными
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message910">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 10:03:48">
10:03
       </div>

       <div class="text">
Если там неизвестно что, то лучше hadoop
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message911">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 10:04:11">
10:04
       </div>

       <div class="text">
А если схема есть, то ClickHouse обычно будет сильно удобней
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message912">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 10:04:26">
10:04
       </div>

       <div class="text">
Особенно если сравнивать с Hive
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message913">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 10:06:07">
10:06
       </div>

       <div class="from_name">
Alexey Tomin
       </div>

       <div class="text">
Схема есть. У нас две связанные &quot;таблицы&quot;. В каждую ежедневно льются сотни миллионов строк (то же структуры).<br>Надо аналитикам покрутить &quot;а вот если сделать группировку вот так и вот сяк, то что будет?&quot;.
       </div>

      </div>

     </div>

     <div class="message service" id="message914">

      <div class="body details">
Kirill Bushev invited Kirill Bushev
      </div>

     </div>

     <div class="message service" id="message915">

      <div class="body details">
Nikita Glashenko (Hohol) invited Nikita Glashenko (Hohol)
      </div>

     </div>

     <div class="message default clearfix" id="message916">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
e
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 12:25:47">
12:25
       </div>

       <div class="from_name">
er@essbase.ru 
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message913" onclick="return GoToMessage(913)">this message</a>
       </div>

       <div class="text">
Это вопрос==ответ ? )
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message917">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 12:31:47">
12:31
       </div>

       <div class="from_name">
Alexey Tomin
       </div>

       <div class="text">
Удобнее ли клик? Я не знаю. Это надо исслидовать. <br>Вопрос про хадуп собственно.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message918">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
АК
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 12:38:17">
12:38
       </div>

       <div class="from_name">
Алексей Константинов
       </div>

       <div class="text">
привет. на крайний случай можно же всегда выплюнуть CSV из хадупа на ноду КХ и загрузить балк лоадом оттуда в ХД. такой вариант не рассматривали ?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message919">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 12:39:00">
12:39
       </div>

       <div class="from_name">
Alexey Tomin
       </div>

       <div class="text">
Нет пока. Спасибо, подумаем.
       </div>

      </div>

     </div>

     <div class="message service" id="message920">

      <div class="body details">
Alexander Neberekutin invited Alexander Neberekutin
      </div>

     </div>

     <div class="message default clearfix" id="message921">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
АК
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 12:43:32">
12:43
       </div>

       <div class="from_name">
Алексей Константинов
       </div>

       <div class="text">
а у вас разовая выгрузка с хадупа или периодически собираетесь ? просто интересно, как кто с хадупа инкремент захватывает
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message922">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
NG
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 12:45:16">
12:45
       </div>

       <div class="from_name">
Nikita Glashenko (Hohol)
       </div>

       <div class="text">
каждый день выгрузка
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message923">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 12:45:21">
12:45
       </div>

       <div class="text">
логов за один день
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message924">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
АК
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 12:45:29">
12:45
       </div>

       <div class="from_name">
Алексей Константинов
       </div>

       <div class="text">
а, ну по дате инкремент просто
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message925">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 12:45:32">
12:45
       </div>

       <div class="text">
это проще конечно
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message926">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AN
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 12:46:28">
12:46
       </div>

       <div class="from_name">
Alexander Neberekutin
       </div>

       <div class="text">
Всем привет! Писали в техподдержку, но там ответа так и не получили, решил сюда обратиться:) <br><br>Столкнулись с такой проблемой: после создания любой таблицы в базе и попытке обращения к этой таблице возникает ошибка вида - <br>Code: 1000. DB::Exception: Received from localhost:9000, <a href="127.0.0.1">127.0.0.1</a>. DB::Exception: File not found: /opt/clickhouse/data/myapptest2/testtable/pageURL.bin. <br>ClickHouse client version 1.1.54030.<br>ClickHouse server version 1.1.54030<br><br>Обновили до версии 1.1.54046<br>Теперь следующее поведение:<br><a href="tel:2016.11.15 12">2016.11.15 12</a>:58:56.602 [ 2 ] &lt;Error&gt; HTTPHandler: Poco::Exception. Code: 1000, e.code() = 2, e.displayText() = File not found: /opt/clickhouse//data/myapp/installations/app_id.bin, e.what() = File not found<br><br>Может кто знает в какую сторону стоит копать?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message927">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
e
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 12:50:04">
12:50
       </div>

       <div class="from_name">
er@essbase.ru 
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message926" onclick="return GoToMessage(926)">this message</a>
       </div>

       <div class="text">
Просто интересно - ставили из пакета ? Какой Linux ?
       </div>

      </div>

     </div>

     <div class="message service" id="message928">

      <div class="body details">
Sergey Cherepanov invited Sergey Cherepanov
      </div>

     </div>

     <div class="message default clearfix" id="message929">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AN
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 12:55:45">
12:55
       </div>

       <div class="from_name">
Alexander Neberekutin
       </div>

       <div class="text">
Ставили из пакета который указан на <a href="clickhouse.yandex">clickhouse.yandex</a>, версия - Ubuntu 16.04 LTS
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message930">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
e
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 12:56:35">
12:56
       </div>

       <div class="from_name">
er@essbase.ru 
       </div>

       <div class="text">
из сырцов собрать можете ?  - обычно это помогает если не хватает связаной библиотеки , то явно ошибки огребете
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message931">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AN
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 13:03:24">
13:03
       </div>

       <div class="from_name">
Alexander Neberekutin
       </div>

       <div class="text">
Не пробовали, будем пробовать. Собрать из сырцов и протестировать этот же момент?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message932">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
e
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 13:03:51">
13:03
       </div>

       <div class="from_name">
er@essbase.ru 
       </div>

       <div class="media_wrap clearfix">

        <div class="media clearfix pull_left media_photo">

         <div class="fill pull_left">

         </div>

         <div class="body">

          <div class="title bold">
Sticker
          </div>

          <div class="description">
Not included, change data exporting settings to download.
          </div>

          <div class="status details">
👈, 21.9 KB
          </div>

         </div>

        </div>

       </div>

      </div>

     </div>

     <div class="message service" id="message933">

      <div class="body details">
Андрей Михайлович Корниенко invited Андрей Михайлович Корниенко
      </div>

     </div>

     <div class="message default clearfix" id="message934">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
АК
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 13:18:25">
13:18
       </div>

       <div class="from_name">
Андрей Михайлович Корниенко
       </div>

       <div class="text">
Добра. А вы когда выкатываете что-то, всегда не пишете как собирать?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message935">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
?
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 13:20:17">
13:20
       </div>

       <div class="from_name">
🔒Zloool🔒 
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message926" onclick="return GoToMessage(926)">this message</a>
       </div>

       <div class="text">
В строке с File not found подозрительно выглядят два слеша в пути
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message936">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
АК
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 13:21:01">
13:21
       </div>

       <div class="from_name">
Андрей Михайлович Корниенко
       </div>

       <div class="text">
О! Класс. Запихнули в doc. Теперь вижу.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message937">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 13:21:19">
13:21
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message935" onclick="return GoToMessage(935)">this message</a>
       </div>

       <div class="text">
И чем лечить?
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message938">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 13:21:57">
13:21
       </div>

       <div class="text">
В том смысле, что это умолчание. Я ж не настраивал пути.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message939">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 13:22:11">
13:22
       </div>

       <div class="text">
Потому мне не понятно, кто и где это прописал.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message940">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic8" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
?
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 13:22:37">
13:22
       </div>

       <div class="from_name">
🔒Zloool🔒 
       </div>

       <div class="text">
Это так, предположение, я без идей
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message941">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
АК
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 13:23:35">
13:23
       </div>

       <div class="from_name">
Андрей Михайлович Корниенко
       </div>

       <div class="text">
А вот мне ещё другое интересно: собрали пакет, а в ответе написано, что где-то чего-то не хватает. Вроде как при грамотной сборки зависимости тянутся сами. Не?
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message942">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 13:24:33">
13:24
       </div>

       <div class="text">
Это я про репу
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message943">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic4" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
PK
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 13:47:09">
13:47
       </div>

       <div class="from_name">
Pavel Kartavyy
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message926" onclick="return GoToMessage(926)">this message</a>
       </div>

       <div class="text">
Привет. А движок какой?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message944">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DA
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 13:47:38">
13:47
       </div>

       <div class="from_name">
Dmitry Andreev
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message903" onclick="return GoToMessage(903)">this message</a>
       </div>

       <div class="text">
А что конкретно делает mapper? Как он делит данные? Сколько их запускается одновременно?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message945">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
АК
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 13:51:34">
13:51
       </div>

       <div class="from_name">
Андрей Михайлович Корниенко
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message943" onclick="return GoToMessage(943)">this message</a>
       </div>

       <div class="text">
Хороший вопрос. Там ставили также, как и тыкдом. Так что даже не вдавались в этот вопрос. Это надо смотреть в коде или спрашивать у разрабов.<br>Собственное, ссылка <a href="https://github.com/5craft/blackbears-analytics">https://github.com/5craft/blackbears-analytics</a>
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message946">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 13:51:52">
13:51
       </div>

       <div class="text">
попробуем сейчас выяснить.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message947">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 13:52:11">
13:52
       </div>

       <div class="text">
я, кстати, даже не знал, что у него их может быть несколько
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message948">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
NG
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 13:54:08">
13:54
       </div>

       <div class="from_name">
Nikita Glashenko (Hohol)
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message944" onclick="return GoToMessage(944)">this message</a>
       </div>

       <div class="text">
mapper делал вставку в удаленный clickhouse через jdbc, batch insert&apos;ами.<br>Батчи были примерно по 100к записей. Один батч - одна map таска.<br>Со &quot;сколько их запускается одновременно&quot; - проблема. Я не нашел способа ограничить количество одновременно работающих map тасок на уровне одной джобы. Только целиком для кластера. А это мешало бы другим джобам.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message949">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic4" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
PK
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 13:55:06">
13:55
       </div>

       <div class="from_name">
Pavel Kartavyy
       </div>

       <div class="text">
для большинста случаев тебе нужно семейство MergeTree движков. Судя по пути движок стоит не MergeTree. Чтобы посмотреть движок &quot;show create table&quot;, в конце он написан
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message950">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
АК
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 13:59:02">
13:59
       </div>

       <div class="from_name">
Андрей Михайлович Корниенко
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message949" onclick="return GoToMessage(949)">this message</a>
       </div>

       <div class="text">
Спасибо!<br>CREATE TABLE myapp.appmetrica_app ( user_id UInt32,  token String,  id UInt32,  name String) ENGINE = Log │<br>А как поменять?
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message951">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 13:59:34">
13:59
       </div>

       <div class="text">
Я вижу, что log. Его ж можно сменить на ходу?
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message952">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 14:00:14">
14:00
       </div>

       <div class="text">
или это вообще не мне было? 😄
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message953">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DA
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 14:00:40">
14:00
       </div>

       <div class="from_name">
Dmitry Andreev
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message948" onclick="return GoToMessage(948)">this message</a>
       </div>

       <div class="text">
Вот тут пишут что можно <a href="http://stackoverflow.com/questions/14380841/how-to-restrict-the-concurrent-running-map-tasks">http://stackoverflow.com/questions/14380841/how-to-restrict-the-concurrent-running-map-tasks</a>
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message954">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic4" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
PK
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 14:02:44">
14:02
       </div>

       <div class="from_name">
Pavel Kartavyy
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message952" onclick="return GoToMessage(952)">this message</a>
       </div>

       <div class="text">
нет, создай новую. И перелей. В MergeTree есть индексы, репликация(ReplicatedMergeTree).<br>Вообще не тебе, но рекомендации общие.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message955">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 14:03:57">
14:03
       </div>

       <div class="text">
На Log можно легко увидеть, как быстро работает full scan в ClickHouse.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message956">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic1" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AT
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 14:37:50">
14:37
       </div>

       <div class="from_name">
Alexey Tomin
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message953" onclick="return GoToMessage(953)">this message</a>
       </div>

       <div class="text">
Пишут. Но я 2 недели потратил когда-то на попытки это сделать. И, да, 1.0.2 даже в музей уже не возьмут.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message957">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DA
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 14:40:29">
14:40
       </div>

       <div class="from_name">
Dmitry Andreev
       </div>

       <div class="text">
Там в коментах есть про 2.7
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message958">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
АК
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 16:08:16">
16:08
       </div>

       <div class="from_name">
Алексей Константинов
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message948" onclick="return GoToMessage(948)">this message</a>
       </div>

       <div class="text">
у нас похожая проблема была переливки тб данных с продового хадупа на Вертику. выкрутились ресурсным пулом, который ограничивал количество конкурентов юзеру, с которого ходил хадуп по JDBC. у КХ можно как то на юзера аналогично ресурсному пулу Вертики прописать количество конкурентов и время в очереди ожидания сессий пула?
       </div>

      </div>

     </div>

     <div class="message service" id="message959">

      <div class="body details">
Valeriy Bykov invited Valeriy Bykov
      </div>

     </div>

     <div class="message default clearfix" id="message960">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 20:47:08">
20:47
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="text">
Количество одновременных запросов на пользователя - можно. Но время ожидания - нет (при превышении сразу кидается исключение).
       </div>

      </div>

     </div>

     <div class="message service" id="message961">

      <div class="body details">
Aleksei Verkholantcev invited Aleksei Verkholantcev
      </div>

     </div>

     <div class="message service" id="message962">

      <div class="body details">
Arseniy Belorukov invited Arseniy Belorukov
      </div>

     </div>

     <div class="message service" id="message963">

      <div class="body details">
Sergey Shmakov invited Sergey Shmakov
      </div>

     </div>

     <div class="message default clearfix" id="message964">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
АК
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 22:20:18">
22:20
       </div>

       <div class="from_name">
Алексей Константинов
       </div>

       <div class="text">
Вот очередь бы реализовать и было бы супер
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message965">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 22:20:41">
22:20
       </div>

       <div class="text">
Нагрузки балансировать для пиков
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message966">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 22:21:30">
22:21
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="text">
Запишу на секретную страничку.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message967">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 22:25:35">
22:25
       </div>

       <div class="text">
У нас есть такое только для общего количества запросов на сервер. Но почти бесполезно. Потому что выполняющийся запрос не обязательно тратит ресурсы, а может ждать данных по сети или отправлять данные клиенту. Поэтому общее количество запросов на сервер ставим в заведомо большую величину.<br><br>А вот для пользователей было бы полезно. Например, ставишь максимум два одновременных запроса, третий ждёт.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message968">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
АК
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 23:15:45">
23:15
       </div>

       <div class="from_name">
Алексей Константинов
       </div>

       <div class="text">
да
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message969">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 23:15:57">
23:15
       </div>

       <div class="text">
плюс параметр таймаута очереди
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message970">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 23:16:11">
23:16
       </div>

       <div class="text">
например 5 минут если очередь конкурентов не освободилась, то пристреливать запрос в очереди долго ждущий
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message971">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 23:16:50">
23:16
       </div>

       <div class="text">
когда ддосят всякие кубы, хадупы, а так же самописные системы, забивая глупыми  запросами и мешая остальным жить в системе, очень помогает
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message972">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 23:17:39">
23:17
       </div>

       <div class="text">
и еще  разрабов очередь очень помогает успокоить админам, которым хочется, чтобы система в любые пики сохраняла адекватное время ответа :)
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message973">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 23:19:31">
23:19
       </div>

       <div class="text">
в вертике поглубже сделано - там есть понятие &quot;пул ресурсов&quot;, на который цепляется выделенная память, приоритеты на доступ к ресурсам, можно прицепить явно количество процов и количество конкурентов. на пулы тематических пользователей цепляют, например пул для загрузчиков, для агрегатников, для адхоков, для систем забора инфы и т.д.
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message974">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 23:20:06">
23:20
       </div>

       <div class="text">
в итоге каждая группа юзеров в свой песочнице - если кто то плохо сделал, остальные пулы и юзеры от этого не страдают
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message975">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 23:20:58">
23:20
       </div>

       <div class="text">
ну и до тучи отстрел запросов с очереди быстрого пула в более медленный не приоритетный и т.д., много всего, но имхо это уже от задач системы зависит, наверное КХ усложнять всем этим на текущем этапе не надо, только багов огрести можно
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message976">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 23:21:01">
23:21
       </div>

       <div class="text">
очередь и все довольны :)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message977">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic4" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
/¯
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 23:28:58">
23:28
       </div>

       <div class="from_name">
/dev/urandon ¯\_(ツ)_/¯
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message971" onclick="return GoToMessage(971)">this message</a>
       </div>

       <div class="text">
А если очередь с приоритетом брать (с ростом приоритета по времени ожидания).<br>Плюс машинное обучение завести бля борьбы со спамом?<br>Не дело же нужные запросы убивать.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message978">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic5" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
АК
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 23:34:18">
23:34
       </div>

       <div class="from_name">
Алексей Константинов
       </div>

       <div class="text">
ну тут дело админа
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message979">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 23:34:28">
23:34
       </div>

       <div class="text">
нужное количество конкурентов и ресурсов выставить
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message980">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 23:34:51">
23:34
       </div>

       <div class="text">
это достигается путем анализа работы кластера, выявлением таких узких мест и постепенной балансировкой с помощью таких пулов
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message981">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 23:35:11">
23:35
       </div>

       <div class="text">
пока минимальные и пиковые нагрузки разных групп юзеров не достигнут равновесия работы кластера
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message982">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 23:35:20">
23:35
       </div>

       <div class="text">
не надо тут автомата, только хуже будет
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message983">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 23:35:30">
23:35
       </div>

       <div class="text">
никто предугадать не может когда кто и зачем будет ддосить кластер
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message984">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 23:36:06">
23:36
       </div>

       <div class="text">
пишутся правила на основании опыта работы кластера и дальше корректируются по мере внештатных отклонений
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message985">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 23:37:37">
23:37
       </div>

       <div class="text">
очередь тоже забавная штука. есть аналитики, у них есть Вася, который любит слать огромные запросы. все под одним юзером. вот Вася шлет запрос, он занимает место в конкуренте, другие аналитики занимают свои места. Вася устал ждать и еще раз шлет запрос, а потом еще раз :)
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message986">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 23:37:47">
23:37
       </div>

       <div class="text">
в итоге дикая очередь в пуле одних запросов одинаковых от Васи
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message987">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 23:38:04">
23:38
       </div>

       <div class="text">
а другие звонят админу и говорят что кластер вообще у них не отзывается, все запросы просто висят и ничего не делают :)
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message988">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 23:38:52">
23:38
       </div>

       <div class="text">
в Вертике Вася по времени будет если его запрос плохой в низкоприоритетный пул уводится и там уже с такими же горемыками сражаться за ресурсы, не мешая прочим :)
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message989">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 23:41:41">
23:41
       </div>

       <div class="from_name">
Dmitry Volodin
       </div>

       <div class="text">
У ORACLE long running queries лет 100 как
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message990">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 23:41:54">
23:41
       </div>

       <div class="text">
на самом деле - нафиг не нужно
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message991">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 23:42:01">
23:42
       </div>

       <div class="text">
решается административно
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message992">

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 23:42:17">
23:42
       </div>

       <div class="text">
и все говорят Васе спасибо
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message993">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 23:56:57">
23:56
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="text">
У нас есть наработки на эту тему: квоты, max_memory_usage_for_user, max_threads, priority, max_execution_time, min_execution_speed, force_primary_key и т. п.<br><br>И постоянно нужно больше способов что-нибудь как-нибудь ограничивать.<br><br>У нас приоритизация запросов от разных видов пользователей - очень актуальная проблема.<br><br>Вплоть до того, что хочется определять, что если запрос задан по крону или в бесконечном цикле из скрипта, то лучше его выполнять не особо при этом торопясь. Но такого не сделано.
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message994">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
e
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 23:58:40">
23:58
       </div>

       <div class="from_name">
er@essbase.ru 
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message993" onclick="return GoToMessage(993)">this message</a>
       </div>

       <div class="text">
Кеш для однотипных запросов ?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message995">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic2" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
AM
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="17.11.2016 23:59:53">
23:59
       </div>

       <div class="from_name">
Alexey Milovidov
       </div>

       <div class="text">
Нету. А было бы полезно. Возможно реализовать кэширование на уровне промежуточных данных в конвейере выполнения запроса - если часть запроса отличается, а часть вычислений совпадает.
       </div>

      </div>

     </div>

     <div class="message service" id="message-9">

      <div class="body details">
18 November 2016
      </div>

     </div>

     <div class="message default clearfix" id="message996">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
АК
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="18.11.2016 07:04:25">
07:04
       </div>

       <div class="from_name">
Андрей Михайлович Корниенко
       </div>

       <div class="text">
Ну, раз вы переписываетесь до полуночи, всем этим плюшкам уже пора быть. Столько продуктивного времени!
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message997">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
DV
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="18.11.2016 09:26:50">
09:26
       </div>

       <div class="from_name">
Dmitry Volodin
       </div>

       <div class="text">
Может быть стоит вынести этот функционал в отдельный менеджер транзакций?
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message998">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic6" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">
VS
        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="18.11.2016 09:31:03">
09:31
       </div>

       <div class="from_name">
Vladislav 👻 Shishkov
       </div>

       <div class="reply_to details">
In reply to <a href="#go_to_message985" onclick="return GoToMessage(985)">this message</a>
       </div>

       <div class="text">
Странный Вася аналитик, если он фанат &quot;устал ждать и шлет еще раз&quot;
       </div>

      </div>

     </div>

     <div class="message default clearfix" id="message999">

      <div class="pull_left userpic_wrap">

       <div class="userpic userpic7" style="width: 42px; height: 42px">

        <div class="initials" style="line-height: 42px">

        </div>

       </div>

      </div>

      <div class="body">

       <div class="pull_right date details" title="18.11.2016 12:18:04">
12:18
       </div>

       <div class="from_name">
Deleted Account
       </div>

       <div class="text">
<a href="https://clickhouse.yandex/reference_en.html#Native">https://clickhouse.yandex/reference_en.html#Native</a> I do not understand the port of the docs. for example I have 1 row data in a table with 8 columns. clickhouse will store all columns in one block?
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message1000">

      <div class="body">

       <div class="pull_right date details" title="18.11.2016 12:19:17">
12:19
       </div>

       <div class="text">
or split 8 columns to 4 blocks
       </div>

      </div>

     </div>

     <div class="message default clearfix joined" id="message1001">

      <div class="body">

       <div class="pull_right date details" title="18.11.2016 12:21:28">
12:21
       </div>

       <div class="text">
can anyone help me?
       </div>

      </div>

     </div>

     <a class="pagination block_link" href="messages2.html">
Next messages
     </a>

    </div>

   </div>

  </div>

 </body>

</html>
' );
echo $html->save(  );
}
?>


