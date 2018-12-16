(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["modif_utilisateur"],{

/***/ "./assets/js/modif_utilisateur.js":
/*!****************************************!*\
  !*** ./assets/js/modif_utilisateur.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  //affichage dynamique des infos utilisateur dans le formulaire de modif
  $('tr').click(function () {
    //on récupére l'identifiant à modifier
    var identifiant_a_modif = $(this).children('th').text();
    var username_a_modif = $(this).children('td').text();
    console.log(identifiant_a_modif);
    console.log(username_a_modif); //on charge les modifs dans les inputs

    $('#modif_user_id').val(identifiant_a_modif);
    $('#modif_user_username').val(username_a_modif);
  });
});

/***/ })

},[["./assets/js/modif_utilisateur.js","runtime"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvbW9kaWZfdXRpbGlzYXRldXIuanMiXSwibmFtZXMiOlsiJCIsImRvY3VtZW50IiwicmVhZHkiLCJjbGljayIsImlkZW50aWZpYW50X2FfbW9kaWYiLCJjaGlsZHJlbiIsInRleHQiLCJ1c2VybmFtZV9hX21vZGlmIiwiY29uc29sZSIsImxvZyIsInZhbCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7O0FBQUFBLENBQUMsQ0FBQ0MsUUFBRCxDQUFELENBQVlDLEtBQVosQ0FBa0IsWUFBWTtBQUU3QjtBQUNBRixHQUFDLENBQUMsSUFBRCxDQUFELENBQVFHLEtBQVIsQ0FBYyxZQUFZO0FBRW5CO0FBQ0EsUUFBSUMsbUJBQW1CLEdBQUdKLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUUssUUFBUixDQUFpQixJQUFqQixFQUF1QkMsSUFBdkIsRUFBMUI7QUFDQSxRQUFJQyxnQkFBZ0IsR0FBR1AsQ0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRSyxRQUFSLENBQWlCLElBQWpCLEVBQXVCQyxJQUF2QixFQUF2QjtBQUVBRSxXQUFPLENBQUNDLEdBQVIsQ0FBWUwsbUJBQVo7QUFDQUksV0FBTyxDQUFDQyxHQUFSLENBQVlGLGdCQUFaLEVBUG1CLENBVW5COztBQUNBUCxLQUFDLENBQUMsZ0JBQUQsQ0FBRCxDQUFvQlUsR0FBcEIsQ0FBd0JOLG1CQUF4QjtBQUNBSixLQUFDLENBQUMsc0JBQUQsQ0FBRCxDQUEwQlUsR0FBMUIsQ0FBOEJILGdCQUE5QjtBQUVOLEdBZEQ7QUFnQkEsQ0FuQkQsRSIsImZpbGUiOiJtb2RpZl91dGlsaXNhdGV1ci5qcyIsInNvdXJjZXNDb250ZW50IjpbIiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uICgpIHtcblxuXHQvL2FmZmljaGFnZSBkeW5hbWlxdWUgZGVzIGluZm9zIHV0aWxpc2F0ZXVyIGRhbnMgbGUgZm9ybXVsYWlyZSBkZSBtb2RpZlxuXHQkKCd0cicpLmNsaWNrKGZ1bmN0aW9uICgpIHtcblxuICAgICAgICAvL29uIHLDqWN1cMOpcmUgbCdpZGVudGlmaWFudCDDoCBtb2RpZmllclxuICAgICAgICB2YXIgaWRlbnRpZmlhbnRfYV9tb2RpZiA9ICQodGhpcykuY2hpbGRyZW4oJ3RoJykudGV4dCgpO1xuICAgICAgICB2YXIgdXNlcm5hbWVfYV9tb2RpZiA9ICQodGhpcykuY2hpbGRyZW4oJ3RkJykudGV4dCgpO1xuXG4gICAgICAgIGNvbnNvbGUubG9nKGlkZW50aWZpYW50X2FfbW9kaWYpO1xuICAgICAgICBjb25zb2xlLmxvZyh1c2VybmFtZV9hX21vZGlmKTtcblxuXG4gICAgICAgIC8vb24gY2hhcmdlIGxlcyBtb2RpZnMgZGFucyBsZXMgaW5wdXRzXG4gICAgICAgICQoJyNtb2RpZl91c2VyX2lkJykudmFsKGlkZW50aWZpYW50X2FfbW9kaWYpO1xuICAgICAgICAkKCcjbW9kaWZfdXNlcl91c2VybmFtZScpLnZhbCh1c2VybmFtZV9hX21vZGlmKTtcblxuXHR9KTtcblxufSk7XHRcbiJdLCJzb3VyY2VSb290IjoiIn0=