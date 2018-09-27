//Declare library
LibComet = function () {

  //Library functions

  /**
   * Show and Hide Elements from their parent
   * @param {Array} showElms - Array of elements with their querySelector
   * Example :
   * for(radio in radios) {
   *    radios[radio].onclick = function() {
   *      showHideFields([this.getAttribute("data-show")]);
   *    }
   * }
  */
  showHideFields = function (showElms){
    parentElm = document.querySelector(showElms[0]).parentElement;
    hideFields = Array.from(parentElm.children);

    hideFields.map( function( hideField ) {
        hideField.classList.add("d-none");
    } );

    showElms.map( function( showElm ) {
        document.querySelector(showElm).classList.remove("d-none");
    } );
  }


  return {
    "showHideFields" :  showHideFields
  }

}();
