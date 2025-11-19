/**
 * UI Toasts
 */

'use strict';

document.addEventListener('DOMContentLoaded', function (e) {
  // Bootstrap toasts example
  // --------------------------------------------------------------------
  const toastAnimationExample = document.querySelector('.toast-cbz');
  let toastAnimation, selectedPlacement;

  toastAnimation = new bootstrap.Toast(toastAnimationExample);
  toastAnimation.show();
});
