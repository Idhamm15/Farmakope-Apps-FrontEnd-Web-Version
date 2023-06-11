function showTooltip(flag) {
  switch (flag) {
    case 1:
      document.getElementById("tooltip1").classList.remove("hidden");
      break;
    case 2:
      document.getElementById("tooltip2").classList.remove("hidden");
      break;
    case 3:
      document.getElementById("tooltip3").classList.remove("hidden");
      break;
  }
}
function hideTooltip(flag) {
  switch (flag) {
    case 1:
      document.getElementById("tooltip1").classList.add("hidden");
      break;
    case 2:
      document.getElementById("tooltip2").classList.add("hidden");
      break;
    case 3:
      document.getElementById("tooltip3").classList.add("hidden");
      break;
  }
}
