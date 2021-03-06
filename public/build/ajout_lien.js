(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["ajout_lien"],{

/***/ "./assets/js/ajout_lien.js":
/*!*********************************!*\
  !*** ./assets/js/ajout_lien.js ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

var SPACE = 32;
var ENTER = 13;
$(document).ready(function () {
  //gestion des TAGS
  $('#liens_TAGS').focus(function () {
    //gestion de la bar espace
    recup_code_touche(SPACE);
    recup_code_touche(ENTER);
  }); //on ré-insert les valeurs des tags dans l'input au moment du click sur le bouton submit

  $('#liens_save').click(function () {
    var tag = $('.btn-outline-dark');
    var tag_list = "";

    for (i = 0; i < tag.length; i++) {
      tag_list = tag_list + " " + tag[i].value;
    } //insertion dans l'input


    $('#liens_TAGS').val(tag_list);
  });
});

function ajout_tag(nvx_tag) {
  //ajout d'un nouveau tag
  var input_tag = $('#liens_TAGS');
  var btn_tag = $('<input/>', {
    type: "button",
    id: "field",
    value: nvx_tag,
    class: "btn btn-outline-dark"
  }); //insertion du tag

  if (nvx_tag !== "") {
    $(btn_tag).insertAfter(input_tag);
  } //reset de l'input


  input_tag.val("");
} //lance l'ajout d'un tag quand une touche est pressé


function recup_code_touche(touche) {
  var key = false;
  $(function () {
    $(document).keyup(function (evt) {
      if (evt.keyCode == touche) {
        key = false;
      }
    }).keydown(function (evt) {
      if (evt.keyCode == touche) {
        evt.preventDefault();
        key = true;
        var nvx_tag = $('#liens_TAGS').val();
        ajout_tag(nvx_tag);
      }
    });
  });
}

/***/ })

},[["./assets/js/ajout_lien.js","runtime"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvYWpvdXRfbGllbi5qcyJdLCJuYW1lcyI6WyJTUEFDRSIsIkVOVEVSIiwiJCIsImRvY3VtZW50IiwicmVhZHkiLCJmb2N1cyIsInJlY3VwX2NvZGVfdG91Y2hlIiwiY2xpY2siLCJ0YWciLCJ0YWdfbGlzdCIsImkiLCJsZW5ndGgiLCJ2YWx1ZSIsInZhbCIsImFqb3V0X3RhZyIsIm52eF90YWciLCJpbnB1dF90YWciLCJidG5fdGFnIiwidHlwZSIsImlkIiwiY2xhc3MiLCJpbnNlcnRBZnRlciIsInRvdWNoZSIsImtleSIsImtleXVwIiwiZXZ0Iiwia2V5Q29kZSIsImtleWRvd24iLCJwcmV2ZW50RGVmYXVsdCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7O0FBQUEsSUFBTUEsS0FBSyxHQUFHLEVBQWQ7QUFDQSxJQUFNQyxLQUFLLEdBQUcsRUFBZDtBQUlBQyxDQUFDLENBQUNDLFFBQUQsQ0FBRCxDQUFZQyxLQUFaLENBQWtCLFlBQVk7QUFHMUI7QUFDQUYsR0FBQyxDQUFDLGFBQUQsQ0FBRCxDQUFpQkcsS0FBakIsQ0FBd0IsWUFBWTtBQUVoQztBQUNBQyxxQkFBaUIsQ0FBQ04sS0FBRCxDQUFqQjtBQUNBTSxxQkFBaUIsQ0FBQ0wsS0FBRCxDQUFqQjtBQUVILEdBTkQsRUFKMEIsQ0FhM0I7O0FBQ0FDLEdBQUMsQ0FBQyxhQUFELENBQUQsQ0FBaUJLLEtBQWpCLENBQXdCLFlBQVk7QUFFaEMsUUFBSUMsR0FBRyxHQUFHTixDQUFDLENBQUMsbUJBQUQsQ0FBWDtBQUNBLFFBQUlPLFFBQVEsR0FBRyxFQUFmOztBQUVBLFNBQUlDLENBQUMsR0FBQyxDQUFOLEVBQVNBLENBQUMsR0FBQ0YsR0FBRyxDQUFDRyxNQUFmLEVBQXdCRCxDQUFDLEVBQXpCLEVBQTRCO0FBRXhCRCxjQUFRLEdBQUdBLFFBQVEsR0FBRyxHQUFYLEdBQWlCRCxHQUFHLENBQUNFLENBQUQsQ0FBSCxDQUFPRSxLQUFuQztBQUNILEtBUitCLENBVWhDOzs7QUFDQVYsS0FBQyxDQUFDLGFBQUQsQ0FBRCxDQUFpQlcsR0FBakIsQ0FBcUJKLFFBQXJCO0FBRUgsR0FiRDtBQWVGLENBN0JEOztBQWdDQSxTQUFTSyxTQUFULENBQW1CQyxPQUFuQixFQUE0QjtBQUV4QjtBQUNBLE1BQUlDLFNBQVMsR0FBR2QsQ0FBQyxDQUFDLGFBQUQsQ0FBakI7QUFDQSxNQUFJZSxPQUFPLEdBQUdmLENBQUMsQ0FBQyxVQUFELEVBQWE7QUFBRWdCLFFBQUksRUFBRSxRQUFSO0FBQWtCQyxNQUFFLEVBQUUsT0FBdEI7QUFBK0JQLFNBQUssRUFBRUcsT0FBdEM7QUFBZ0RLLFNBQUssRUFBRztBQUF4RCxHQUFiLENBQWYsQ0FKd0IsQ0FNeEI7O0FBQ0EsTUFBSUwsT0FBTyxLQUFLLEVBQWhCLEVBQW9CO0FBQ2hCYixLQUFDLENBQUNlLE9BQUQsQ0FBRCxDQUFXSSxXQUFYLENBQXVCTCxTQUF2QjtBQUNILEdBVHVCLENBV3hCOzs7QUFDQUEsV0FBUyxDQUFDSCxHQUFWLENBQWMsRUFBZDtBQUNILEMsQ0FHRDs7O0FBQ0EsU0FBU1AsaUJBQVQsQ0FBMkJnQixNQUEzQixFQUFtQztBQUMvQixNQUFJQyxHQUFHLEdBQUcsS0FBVjtBQUNBckIsR0FBQyxDQUFDLFlBQVc7QUFDVEEsS0FBQyxDQUFDQyxRQUFELENBQUQsQ0FBWXFCLEtBQVosQ0FBa0IsVUFBU0MsR0FBVCxFQUFjO0FBQzVCLFVBQUlBLEdBQUcsQ0FBQ0MsT0FBSixJQUFlSixNQUFuQixFQUEyQjtBQUN2QkMsV0FBRyxHQUFHLEtBQU47QUFDSDtBQUNKLEtBSkQsRUFJR0ksT0FKSCxDQUlXLFVBQVNGLEdBQVQsRUFBYztBQUVyQixVQUFJQSxHQUFHLENBQUNDLE9BQUosSUFBZUosTUFBbkIsRUFBMkI7QUFDdkJHLFdBQUcsQ0FBQ0csY0FBSjtBQUNBTCxXQUFHLEdBQUcsSUFBTjtBQUNBLFlBQUlSLE9BQU8sR0FBR2IsQ0FBQyxDQUFDLGFBQUQsQ0FBRCxDQUFpQlcsR0FBakIsRUFBZDtBQUNBQyxpQkFBUyxDQUFDQyxPQUFELENBQVQ7QUFDSDtBQUNKLEtBWkQ7QUFhSCxHQWRBLENBQUQ7QUFlSCxDIiwiZmlsZSI6ImFqb3V0X2xpZW4uanMiLCJzb3VyY2VzQ29udGVudCI6WyJjb25zdCBTUEFDRSA9IDMyO1xuY29uc3QgRU5URVIgPSAxMztcblxuXG5cbiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uICgpIHtcblxuXG4gICAgLy9nZXN0aW9uIGRlcyBUQUdTXG4gICAgJCgnI2xpZW5zX1RBR1MnKS5mb2N1cyggZnVuY3Rpb24gKCkge1xuXG4gICAgICAgIC8vZ2VzdGlvbiBkZSBsYSBiYXIgZXNwYWNlXG4gICAgICAgIHJlY3VwX2NvZGVfdG91Y2hlKFNQQUNFKTtcbiAgICAgICAgcmVjdXBfY29kZV90b3VjaGUoRU5URVIpO1xuXG4gICAgfSk7XG5cblxuICAgLy9vbiByw6ktaW5zZXJ0IGxlcyB2YWxldXJzIGRlcyB0YWdzIGRhbnMgbCdpbnB1dCBhdSBtb21lbnQgZHUgY2xpY2sgc3VyIGxlIGJvdXRvbiBzdWJtaXRcbiAgICQoJyNsaWVuc19zYXZlJykuY2xpY2soIGZ1bmN0aW9uICgpIHtcblxuICAgICAgIHZhciB0YWcgPSAkKCcuYnRuLW91dGxpbmUtZGFyaycpO1xuICAgICAgIHZhciB0YWdfbGlzdCA9IFwiXCI7XG5cbiAgICAgICBmb3IoaT0wOyBpPHRhZy5sZW5ndGggOyBpKyspe1xuXG4gICAgICAgICAgIHRhZ19saXN0ID0gdGFnX2xpc3QgKyBcIiBcIiArIHRhZ1tpXS52YWx1ZTtcbiAgICAgICB9XG5cbiAgICAgICAvL2luc2VydGlvbiBkYW5zIGwnaW5wdXRcbiAgICAgICAkKCcjbGllbnNfVEFHUycpLnZhbCh0YWdfbGlzdCk7XG5cbiAgIH0pXG5cbn0pO1xuXG5cbmZ1bmN0aW9uIGFqb3V0X3RhZyhudnhfdGFnKSB7XG5cbiAgICAvL2Fqb3V0IGQndW4gbm91dmVhdSB0YWdcbiAgICB2YXIgaW5wdXRfdGFnID0gJCgnI2xpZW5zX1RBR1MnKTtcbiAgICB2YXIgYnRuX3RhZyA9ICQoJzxpbnB1dC8+JywgeyB0eXBlOiBcImJ1dHRvblwiLCBpZDogXCJmaWVsZFwiLCB2YWx1ZTogbnZ4X3RhZyAsIGNsYXNzIDogXCJidG4gYnRuLW91dGxpbmUtZGFya1wifSk7XG5cbiAgICAvL2luc2VydGlvbiBkdSB0YWdcbiAgICBpZiAobnZ4X3RhZyAhPT0gXCJcIikge1xuICAgICAgICAkKGJ0bl90YWcpLmluc2VydEFmdGVyKGlucHV0X3RhZyk7XG4gICAgfVxuXG4gICAgLy9yZXNldCBkZSBsJ2lucHV0XG4gICAgaW5wdXRfdGFnLnZhbChcIlwiKTtcbn1cblxuXG4vL2xhbmNlIGwnYWpvdXQgZCd1biB0YWcgcXVhbmQgdW5lIHRvdWNoZSBlc3QgcHJlc3PDqVxuZnVuY3Rpb24gcmVjdXBfY29kZV90b3VjaGUodG91Y2hlKSB7XG4gICAgdmFyIGtleSA9IGZhbHNlO1xuICAgICQoZnVuY3Rpb24oKSB7XG4gICAgICAgICQoZG9jdW1lbnQpLmtleXVwKGZ1bmN0aW9uKGV2dCkge1xuICAgICAgICAgICAgaWYgKGV2dC5rZXlDb2RlID09IHRvdWNoZSkge1xuICAgICAgICAgICAgICAgIGtleSA9IGZhbHNlO1xuICAgICAgICAgICAgfVxuICAgICAgICB9KS5rZXlkb3duKGZ1bmN0aW9uKGV2dCkge1xuXG4gICAgICAgICAgICBpZiAoZXZ0LmtleUNvZGUgPT0gdG91Y2hlKSB7XG4gICAgICAgICAgICAgICAgZXZ0LnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgICAgICAgICAga2V5ID0gdHJ1ZTtcbiAgICAgICAgICAgICAgICB2YXIgbnZ4X3RhZyA9ICQoJyNsaWVuc19UQUdTJykudmFsKCk7XG4gICAgICAgICAgICAgICAgYWpvdXRfdGFnKG52eF90YWcpO1xuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcbiAgICB9KTtcbn1cblxuIl0sInNvdXJjZVJvb3QiOiIifQ==