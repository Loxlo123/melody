<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Profile</title>
  <script src="script.js"></script>
  <link rel="stylesheet" href="styles/profile.css">
  <link rel="stylesheet" href="styles/style.css">
</head>

<body>

  <!-- Header -->

  <div class="social">
    <img class="social-icon" src="images/vk.svg" alt="">
    <img class="social-icon" src="images/yt.svg" alt="">
    <img class="social-icon" src="images/tt.svg" alt="">
    <img class="social-icon" src="images/tg.svg" alt="">
  </div>
  <div class="small-main" style="height: 600px;">
    <header class="header">
      <a href="index.php"><button class="button-passive">Главная</button></a>
      <a href="teachers.php"><button class="button-passive" style="margin-left: 120px;">Преподаватели</button></a>
      <a href="gallery.php"><button class="button-passive" style="margin-left: 220px;">Галерея</button></a>
      <a href="profile.php"><button class="button" style="margin-left: 120px;">Профиль</button></a>
    </header>
    <div style="text-align: center;">
      <img class="main-logo" src="images/Logo.svg" alt="">
    </div>
  </div>

  <!-- End Header -->

  <!-- Classes -->

  <div class="headline">
    <h2>Ваши занятия</h2>
    <div class="line"></div>
    <br><br>
  </div>
  <div class="classes">
    <div class="calendar-wrapper">
      <button id="btnPrev" type="button">Предыдущий</button>
      <button id="btnNext" type="button">Следующий</button>
      <div id="divCal"></div>
    </div>
    <div class="desk">
      <h2>4 Июня</h2>
      <br>
      <br>
      Занятие <br>
      по: Гитаре <br>
      с: Эйдрианом Белью
      <br>
      <br>
      <br>
      <br>
      <div class="button">Отменить</div>
    </div>
  </div>

  <!-- End Classes -->

  <!-- Footer -->

  <div class="band"></div>
  <footer>
    <a href="index.php"><button class="button-passive">Главная</button></a>
    <a href="teachers.php"><button class="button-passive">Преподаватели</button></a>
    <a href="gallery.php"><button class="button-passive">Галерея</button></a>
    <a href="profile.php"><button class="button">Профиль</button></a>
    <img class="social-icon" src="images/yt.svg" alt="">
    <img class="social-icon" src="images/vk.svg" alt="">
    <img class="social-icon" src="images/tt.svg" alt="">
    <img class="social-icon" src="images/tg.svg" alt="">
    <div class="break"></div>
    <div class="band"></div>
    <div class="break"></div>
    <img src="images/Logo.svg" alt="">
    <p>© 2023 Все права защищены</p>
  </footer>

  <!-- End Footer -->

</body>
<script>
  var Cal = function (divId) {

    //Сохраняем идентификатор div
    this.divId = divId;

    // Дни недели с понедельника
    this.DaysOfWeek = [
      'Пн',
      'Вт',
      'Ср',
      'Чт',
      'Пт',
      'Сб',
      'Вс'
    ];

    // Месяцы начиная с января
    this.Months = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];

    //Устанавливаем текущий месяц, год
    var d = new Date();

    this.currMonth = d.getMonth('9');
    this.currYear = d.getFullYear('22');
    this.currDay = d.getDate('3');
  };

  // Переход к следующему месяцу
  Cal.prototype.nextMonth = function () {
    if (this.currMonth == 11) {
      this.currMonth = 0;
      this.currYear = this.currYear + 1;
    }
    else {
      this.currMonth = this.currMonth + 1;
    }
    this.showcurr();
  };

  // Переход к предыдущему месяцу
  Cal.prototype.previousMonth = function () {
    if (this.currMonth == 0) {
      this.currMonth = 11;
      this.currYear = this.currYear - 1;
    }
    else {
      this.currMonth = this.currMonth - 1;
    }
    this.showcurr();
  };

  // Показать текущий месяц
  Cal.prototype.showcurr = function () {
    this.showMonth(this.currYear, this.currMonth);
  };



  // Показать месяц (год, месяц)
  Cal.prototype.showMonth = function (y, m) {

    var d = new Date()
      // Первый день недели в выбранном месяце 
      , firstDayOfMonth = new Date(y, m, 7).getDay()
      // Последний день выбранного месяца
      , lastDateOfMonth = new Date(y, m + 1, 0).getDate()
      // Последний день предыдущего месяца
      , lastDayOfLastMonth = m == 0 ? new Date(y - 1, 11, 0).getDate() : new Date(y, m, 0).getDate();


    var html = '<table>';

    // Запись выбранного месяца и года
    html += '<thead><tr>';
    html += '<td colspan="7" class="month">' + this.Months[m] + ' ' + y + '</td>';
    html += '</tr></thead>';


    // заголовок дней недели
    html += '<tr class="days">';
    for (var i = 0; i < this.DaysOfWeek.length; i++) {
      html += '<td>' + this.DaysOfWeek[i] + '</td>';
    }
    html += '</tr>';

    // Записываем дни
    var i = 1;
    do {

      var dow = new Date(y, m, i).getDay();

      // Начать новую строку в понедельник
      if (dow == 1) {
        html += '<tr>';
      }

      // Если первый день недели не понедельник показать последние дни предидущего месяца
      else if (i == 1) {
        html += '<tr>';
        var k = lastDayOfLastMonth - firstDayOfMonth + 1;
        for (var j = 0; j < firstDayOfMonth; j++) {
          html += '<td class="not-current">' + k + '</td>';
          k++;
        }
      }

      // Записываем текущий день в цикл
      var chk = new Date();
      var chkY = chk.getFullYear();
      var chkM = chk.getMonth();
      if (chkY == this.currYear && chkM == this.currMonth && i == this.currDay) {
        html += '<td class="today">' + i + '</td>';
      } else {
        html += '<td class="normal">' + i + '</td>';
      }
      // закрыть строку в воскресенье
      if (dow == 0) {
        html += '</tr>';
      }
      // Если последний день месяца не воскресенье, показать первые дни следующего месяца
      else if (i == lastDateOfMonth) {
        var k = 1;
        for (dow; dow < 7; dow++) {
          html += '<td class="not-current">' + k + '</td>';
          k++;
        }
      }

      i++;
    } while (i <= lastDateOfMonth);

    // Конец таблицы
    html += '</table>';

    // Записываем HTML в div
    document.getElementById(this.divId).innerHTML = html;
  };

  // При загрузке окна
  window.onload = function () {

    // Начать календарь
    var c = new Cal("divCal");
    c.showcurr();

    // Привязываем кнопки «Следующий» и «Предыдущий»
    getId('btnNext').onclick = function () {
      c.nextMonth();
    };
    getId('btnPrev').onclick = function () {
      c.previousMonth();
    };
  }

  // Получить элемент по id
  function getId(id) {
    return document.getElementById(id);
  }
</script>

</html>