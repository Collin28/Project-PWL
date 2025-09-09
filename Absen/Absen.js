const form = document.getElementById("attendanceForm");
const attendanceID = document.getElementById("attendanceID");
const message = document.getElementById("message");
const clock = document.getElementById("clock");

// Update jam setiap detik
function updateClock() {
  const now = new Date();
  clock.textContent = now.toLocaleTimeString();
}
setInterval(updateClock, 1000);
updateClock();

// Event submit form
form.addEventListener("submit", function (e) {
  e.preventDefault();
  if (attendanceID.value.trim() !== "") {
    message.textContent = "✓ Absensi berhasil tercatat!";
    message.className = "success";
    attendanceID.value = "";
  } else {
    message.textContent = "✖ ID tidak boleh kosong.";
    message.className = "error";
  }
});
